<?php
if (!isset($gCms)) exit;

if ($params['searchinput'] != '')
{
	@$this->SendEvent('SearchInitiated', array(&$params['searchinput']));
	
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
			$ary[] = "word = " . $db->qstr(htmlentities($word, ENT_COMPAT, 'UTF-8'));
		}
		$searchphrase = implode(' OR ', $ary);
	}
	
	$query = "SELECT DISTINCT module_name, content_id, extra_attr, COUNT(*) AS nb, SUM(count) AS total_weight FROM ".cms_db_prefix()."module_search_index WHERE (".$searchphrase.") GROUP BY module_name, content_id, extra_attr";
	//This makes it an AND query
	$query .= " HAVING count(*) = ".$nb_words;
	$query .= " ORDER BY nb DESC, total_weight DESC";
	$result =& $db->Execute($query);

	$rawary = array();
	$ary = array();

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
				if (method_exists($moduleobj, 'SearchResult'))
				{
				  $searchresult = $moduleobj->SearchResult( $returnid, $result->fields['content_id'], $result->fields['extra_attr']);
					if (count($searchresult) == 3)
					{
					  $col->AddItem($searchresult[0], $searchresult[2], $searchresult[1], $result->fields['total_weight']);
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
		$hilite = '<span class="searchhilite">'.$word.'</span>';
		$title = preg_replace('/('.$word.')/i',$hilite, $title);
		$txt = preg_replace('/('.$word.')/i',$hilite, $txt);
	      }
	    $result->title = $title;
	    $result->urltxt = $txt;
	    $newresults[] = $result;
	  }
	$col->_ary = $newresults;
	
	@$this->SendEvent('SearchCompleted', array(&$params['searchinput'], &$col->_ary));

	$smarty->assign('results', $col->_ary);
	$smarty->assign('itemcount', count($col->_ary));

	$smarty->assign('searchresultsfor', $this->Lang('searchresultsfor'));
	$smarty->assign('noresultsfound', $this->Lang('noresultsfound'));
	$smarty->assign('timetaken', $this->Lang('timetaken'));

	$searchendtime = microtime();
	$smarty->assign('timetook', ($searchendtime - $searchstarttime));

	echo $this->ProcessTemplateFromDatabase('displayresult');

}

?>
