<?php
		if (!isset($gCms)) exit;

		$detailpage = '';
		if (isset($params['detailpage']))
		{
			$manager =& $gCms->GetHierarchyManager();
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

		$query = "SELECT mn.*, mnc.news_category_name FROM ".cms_db_prefix()."module_news mn LEFT OUTER JOIN ".cms_db_prefix()."module_news_categories mnc ON mnc.news_category_id = mn.news_category_id WHERE status = 'published' ORDER by news_date DESC";
		$dbresult = '';
						$number = -1;
						if( isset( $params['number'] ) )
						{
						  $number = $params['number'];
						}
						$start = -1;
						if( isset( $params['start'] ) )
						{
						  $start = $params['start'];
						}
		if( $start >= 0 || $number >= 0 )
		{
			$dbresult = $db->SelectLimit($query, $number, $start);
		}
		else
		{
			$dbresult = $db->Execute($query);
		}

		while ($row = $dbresult->FetchRow())
		{
			$onerow = new stdClass();

			$sendtodetail = array('articleid'=>$row['news_id']);
			$onerow->link = $this->CreateLink($id, 'detail', $returnid, '', $sendtodetail,'',true,false,'',true);
			$onerow->id = $row['news_id'];
			$onerow->title = $row['news_title'];
			$onerow->content = $row['news_data'];
			$onerow->summary = $row['summary'];
			$onerow->strippedcontent = strip_tags($onerow->content);
			$onerow->strippedsummary = strip_tags($onerow->summary);
			$onerow->postdate = $row['news_date'];
			$onerow->gmdate = gmdate('D, j M Y H:i:s T', $db->UnixTimeStamp($row['news_date']));
			$onerow->startdate = $row['start_time'];
			$onerow->enddate = $row['end_time'];
			$onerow->category = $row['news_category_name'];

			array_push($entryarray, $onerow);
		}

		$this->smarty->assign_by_ref('items', $entryarray);

		global $gCms;

		$this->smarty->assign_by_ref('root_url', $gCms->config['root_url']);
		$this->smarty->assign_by_ref('query_var', $gCms->config['query_var']);

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
