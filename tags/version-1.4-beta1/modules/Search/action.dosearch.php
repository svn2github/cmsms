<?php
if (!isset($gCms)) exit;

if ($params['searchinput'] != '')
{
	// Fix to prevent XSS like behaviour. See: http://www.securityfocus.com/archive/1/455417/30/0/threaded
  $params['searchinput'] = htmlspecialchars(trim($params['searchinput']));
  @$this->SendEvent('SearchInitiated', array(trim($params['searchinput'])));

	$searchstarttime = microtime();

	$smarty->assign('phrase', $params['searchinput']);

	$words = array_values($this->StemPhrase($params['searchinput']));
	$nb_words = count($words);
	$max_weight = 1;

	$searchphrase = '';
	if ($nb_words > 0)
	{
		#$searchphrase = implode(' OR ', array_fill(0, $nb_words, 'word = ?'));
		$ary = array();
		foreach ($words as $word)
		{
			$word = trim($word);
#			$ary[] = "word = " . $db->qstr(htmlentities($word, ENT_COMPAT, 'UTF-8'));
			$ary[] = "word = " . $db->qstr($word);
		}
		$searchphrase = implode(' OR ', $ary);
	}

	// Update the search words table
	foreach( $words as $word )
	  {
	    $q = 'SELECT count FROM '.cms_db_prefix().'module_search_words WHERE word = ?';
	    $tmp = $db->GetOne($q,array($word));
	    if( $tmp )
	      {
		$q = 'UPDATE '.cms_db_prefix().'module_search_words SET count=count+1 WHERE word = ?';
		$db->Execute($q,array($word));
	      }
	    else
	      {
		$q = 'INSERT INTO '.cms_db_prefix().'module_search_words (word,count) VALUES (?,1)';
		$db->Execute($q,array($word));
	      }
	  }

	$query = "SELECT DISTINCT i.module_name, i.content_id, i.extra_attr, COUNT(*) AS nb, SUM(idx.count) AS total_weight FROM ".cms_db_prefix()."module_search_items i INNER JOIN ".cms_db_prefix()."module_search_index idx ON idx.item_id = i.id WHERE (".$searchphrase.") AND  (".$db->IfNull('i.expires',$db->DBTimeStamp(100 * 100 * 100 * 100 * 25))." > ".$db->DBTimeStamp(time()).") ";
	if( isset( $params['modules'] ) )
	  {
	    $modules = explode(",",$params['modules']);
	    for( $i = 0; $i < count($modules); $i++ )
	      {
		$modules[$i] = $db->qstr($modules[$i]);
	      }
	    $query .= ' AND i.module_name IN ('.implode(',',$modules).')';
	  }
	$query .= " GROUP BY i.module_name, i.content_id, i.extra_attr";
	//This makes it an AND query
	$query .= " HAVING count(*) = ".$nb_words;
	$query .= " ORDER BY nb DESC, total_weight DESC";

	$result =& $db->Execute($query);

	$hm = &$gCms->GetHierarchyManager();

	$col = new SearchItemCollection();

	while ($result && !$result->EOF)
	{
		//Handle internal (templates, content, etc) first...
		if ($result->fields['module_name'] == $this->GetName())
		{
			if ($result->fields['extra_attr'] == 'content')
			{
				//Content is easy... just grab it out of hierarchy manager and toss the url in
				$node = &$hm->sureGetNodeById($result->fields['content_id']);
				if (isset($node))
				{
					$content =& $node->GetContent();
					if (isset($content))
					{
						$col->AddItem($content->Name(), $content->GetURL(), $content->Name(), $result->fields['total_weight']);
					}
				}
			}
			else if ($result->fields['extra_attr'] == 'template')
			{
				//Templates are more invovled.  We now need to grab every page with said template
				//and toss them into the list
				$query = 'SELECT content_id FROM '.cms_db_prefix().'content WHERE template_id = ?';
				$templateresult =& $db->Execute($query, array($result->fields['content_id']));

				while ($templateresult && !$templateresult->EOF)
				{
					$node = &$hm->sureGetNodeById($templateresult->fields['content_id']);
					if (isset($node))
					{
						$content =& $node->GetContent();
						if (isset($content))
						{
							$col->AddItem($content->Name(), $content->GetURL(), $content->Name(), $result->fields['total_weight']);
						}
					}
					$templateresult->MoveNext();
				}
			}
			else if ($result->fields['extra_attr'] == 'global_content')
			{
				//This is the most complicated.  Basically, it goes like this...
				//1. Figure out what's cross referenced with this global_content
				//2. If it's content, then we just return that
				//3. If it's a template, then we do the same deal.  Figure out
				//what pages are using that template and then return those
				$query = 'SELECT parent_id, parent_type FROM '.cms_db_prefix().'crossref WHERE child_id = ? AND child_type = \'global_content\'';
				$result2 = &$db->Execute($query, array($result->fields['content_id']));

				while ($result2 && !$result2->EOF)
				{
					$type = $result2->fields['parent_type'];
					$pid = $result2->fields['parent_id'];

					if ($type == 'template')
					{
						$query = 'SELECT content_id FROM '.cms_db_prefix().'content WHERE template_id = ?';
						$templateresult =& $db->Execute($query, array($pid));

						while ($templateresult && !$templateresult->EOF)
						{
							$node = &$hm->sureGetNodeById($templateresult->fields['content_id']);
							if (isset($node))
							{
								$content =& $node->GetContent();
								if (isset($content))
								{
									$col->AddItem($content->Name(), $content->GetURL(), $content->Name(), $result->fields['total_weight']);
								}
							}
							$templateresult->MoveNext();
						}
					}
					else if ($type == 'content')
					{
						$node = &$hm->sureGetNodeById($pid);
						if (isset($node))
						{
							$content =& $node->GetContent();
							if (isset($content))
							{
								$col->AddItem($content->Name(), $content->GetURL(), $content->Name(), $result->fields['total_weight']);
							}
						}
					}

					$result2->MoveNext();
				}
			}
		}
		else
		{
		  //Start looking at modules...
		  $modulename = $result->fields['module_name'];
		  $moduleobj =& $this->GetModuleInstance($modulename);
		  if ($moduleobj != FALSE)
		    {
		      if (method_exists($moduleobj, 'SearchResultWithParams' ))
			{
			  // search through the params, for all the passthru ones
			  // and get only the ones matching this module name
			  $parms = array();
			  foreach( $params as $key => $value )
			    {
			      $st = 'passthru_'.$modulename.'_';
			      if( preg_match( "/$str/", $key ) > 0 )
				{
				  $name = substr($key,strlen($st));
				  if( $name != '' )
				    {
				      $parms[$name] = $value;
				    }
				}
			    }
			  $searchresult = $moduleobj->SearchResultWithParams( $returnid, 
									      $result->fields['content_id'], 
									      $result->fields['extra_attr'],
									      $parms);
			  if (count($searchresult) == 3)
			    {
			      $col->AddItem($searchresult[0], $searchresult[2], $searchresult[1], 
					    $result->fields['total_weight'],
					    $modulename, $result->fields['content_id']);
			    }
			}
		      else if (method_exists($moduleobj, 'SearchResult'))
			{
			  $searchresult = $moduleobj->SearchResult( $returnid, 
								    $result->fields['content_id'], 
								    $result->fields['extra_attr']);
			  if (count($searchresult) == 3)
			    {
			      $col->AddItem($searchresult[0], $searchresult[2], $searchresult[1], 
					    $result->fields['total_weight'], 
					    $modulename, $result->fields['content_id']);
			    }
			}
		    }
		}

		$result->MoveNext();
	}

	$col->CalculateWeights();
	
	// now we're gonna do some post processing on the results
	// and replace the search terms with <span class="searchhilite">term</span>
	
	$results = $col->_ary;
	$words = explode( ' ', $params['searchinput'] );
	$newresults = array();
	foreach( $results as $result )
	{
		$title = $result->title;
		$txt = $result->urltxt;
		foreach( $words as $word )
		{
			$title = preg_replace('/('.$word.')/i', '<span class="searchhilite">$1</span>', $title);
			$txt = preg_replace('/('.$word.')/i', '<span class="searchhilite">$1</span>', $txt);
		}
		$result->title = $title;
		$result->urltxt = $txt;
		$newresults[] = $result;
	}
	$col->_ary = $newresults;
	
	@$this->SendEvent('SearchCompleted', array(&$params['searchinput'], &$col->_ary));

	$smarty->assign('searchwords',$words);
	$smarty->assign('results', $col->_ary);
	$smarty->assign('itemcount', count($col->_ary));

	$searchendtime = microtime();
	$smarty->assign('timetook', ($searchendtime - $searchstarttime));
}
else 
{
	$smarty->assign('phrase', '');
	$smarty->assign('results', 0);
	$smarty->assign('itemcount', 0);
	$smarty->assign('timetook', 0);
}

$smarty->assign('searchresultsfor', $this->Lang('searchresultsfor'));
$smarty->assign('noresultsfound', $this->Lang('noresultsfound'));
$smarty->assign('timetaken', $this->Lang('timetaken'));

echo $this->ProcessTemplateFromDatabase('displayresult');

?>
