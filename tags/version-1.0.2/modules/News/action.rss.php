<?php
		if (!isset($gCms)) exit;

		$detailpage = '';
		$feed_title = 'CMS Made Simple News Feed';

		$manager =& $gCms->GetHierarchyManager();
		if (isset($params['detailpage']))
		{
			$node =& $manager->sureGetNodeByAlias($params['detailpage']);
			if (isset($node))
			{
				$content =& $node->GetContent();
				if (isset($content))
				{
					$detailpage = $content->Id();
				}
			}
			else
			{
				$node =& $manager->sureGetNodeById($params['detailpage']);
				if (isset($node))
				{
					$detailpage = $params['detailpage'];
				}
			}
		}

		$entryarray = array();

		if (isset($params["category"]) && $params["category"] != '')
		{
			$categories = explode(',', $params['category']);
			$query = "SELECT mn.*, mnc.news_category_name FROM " . cms_db_prefix() . "module_news mn LEFT OUTER JOIN " . cms_db_prefix() . "module_news_categories mnc ON mnc.news_category_id = mn.news_category_id WHERE status = 'published' AND (";
			$count = 0;
			foreach ($categories as $onecat)
			{
				if ($count > 0)
				{
					$query .= ' OR ';
				}
				if (strpos($onecat, '|') !== FALSE || strpos($onecat, '*') !== FALSE)
					$query .= "upper(mnc.long_name) like upper('" . trim(str_replace('*', '%', $onecat)) . "')";
				else
					$query .= "mnc.news_category_name = '" . trim($onecat) . "'";
				$count++;
			}
			$query .= ") AND ";
		}
		else
		{
			$query = "SELECT mn.*, mnc.news_category_name FROM " . cms_db_prefix() . "module_news mn LEFT OUTER JOIN " . cms_db_prefix() . "module_news_categories mnc ON mnc.news_category_id = mn.news_category_id WHERE status = 'published' AND ";
		}

		$query .= "(".$db->IfNull('start_time',$db->DBTimeStamp(1))." < ".$db->DBTimeStamp(time()).") ";
		$query .= " AND ((".$db->IfNull('end_time',$db->DBTimeStamp(1))." = ".$db->DBTimeStamp(1).") OR (end_time > ".$db->DBTimeStamp(time()).")) ";
		$query .= ' ORDER BY news_date DESC'; 

		$dbresult = '';

		$start = -1;
		$number = -1;
		if( isset( $params['number'] ) )
		{
			$number = $params['number'];
		}

		if( $number >= 0 )
		{
			$dbresult =& $db->SelectLimit($query, $number, $start);
		}
		else
		{
			$dbresult =& $db->Execute($query);
		}

		while ($dbresult && $row = $dbresult->FetchRow())
		{
			$onerow = new stdClass();

			$sendtodetail = array('articleid'=>$row['news_id']);
			$onerow->link = $this->CreateLink($id, 'detail', $returnid, '', $sendtodetail,'',true,false,'',true,'news/'.$row['news_id']);
			$onerow->id = $row['news_id'];
			$onerow->title = $row['news_title'];
			$onerow->content = $row['news_data'];
			$onerow->summary = $row['summary'];
			$onerow->strippedcontent = strip_tags($onerow->content);
			$onerow->strippedsummary = strip_tags($onerow->summary);
			$onerow->postdate = $row['news_date'];
			$onerow->gmdate = gmdate('r', $db->UnixTimeStamp($row['news_date']));
			$onerow->startdate = $row['start_time'];
			$onerow->enddate = $row['end_time'];
			$onerow->category = $row['news_category_name'];

			$entryarray[]= $onerow;
		}

		$this->smarty->assign_by_ref('items', $entryarray);

		global $gCms;

		$this->smarty->assign_by_ref('root_url', $gCms->config['root_url']);
		$this->smarty->assign_by_ref('query_var', $gCms->config['query_var']);

		$node =& $manager->sureGetNodeById($returnid);
		if (isset($node))
		{
			$content =& $node->GetContent();
			if (isset($content))
			{
				$feed_title = 'RSS Feed - ' . $content->Name();
			}
		}
		$this->smarty->assign('feed_title', $feed_title);

		#Display template
		$variables =& $gCms->variables;
						if( preg_match( '/Mozilla/', $_SERVER["HTTP_USER_AGENT"] ) )
						{
		   $variables['content-type'] = 'text/xml';
						}
						else 
						{
		   $variables['content-type'] = 'application/rss+xml';
						}
		//$variables['content-filename'] = 'feed.xml';

		echo $this->ProcessTemplate('rssfeed.tpl');

# vim:ts=4 sw=4 noet
?>
