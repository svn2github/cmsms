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

		$query = "SELECT mn.*, mnc.news_category_name FROM ".cms_db_prefix()."module_news mn LEFT OUTER JOIN ".cms_db_prefix()."module_news_categories mnc ON mnc.news_category_id = mn.news_category_id WHERE status = 'published' AND news_id = ?";
		$dbresult = $db->Execute($query, array($params['articleid']));

		while ($row = $dbresult->FetchRow())
		{
			$onerow = new stdClass();

			$onerow->id = $row['news_id'];
								$theuser = UserOperations::LoadUserById( $row['author_id'] );
								$onerow->author = $theuser->username;
			$onerow->author_id = $row['author_id'];
			$onerow->title = $row['news_title'];
			$onerow->content = $row['news_data'];
			$onerow->summary = $row['summary'];
			$onerow->postdate = $row['news_date'];
			$onerow->formatpostdate = strftime((isset($params['dateformat']) && $params['dateformat'] != ''?$params['dateformat']:'%x'), $db->UnixTimeStamp($row['news_date']));
			$onerow->startdate = $row['start_time'];
			$onerow->enddate = $row['end_time'];
			$onerow->category = $row['news_category_name'];

			$sendtoprint = array('articleid'=>$row['news_id'],'showtemplate'=>'false');
			if (isset($params['lang']))
			{
				$sendtoprint['lang'] = $params['lang'];
			}
			$onerow->printlink = $this->CreateLink($id, 'print', $returnid, $this->Lang('print'), $sendtoprint);

			$return_url = $this->CreateReturnLink($id, isset($params['origid'])?$params['origid']:$returnid, $this->lang('news_return'));
			$this->smarty->assign_by_ref('return_url', $return_url);
			$this->smarty->assign_by_ref('entry', $onerow);
		}

		#Display template
		if (isset($params['detailtemplate']))
		{
			echo $this->ProcessTemplate($params['detailtemplate']);
		}
		else
		{
			echo $this->ProcessTemplateFromDatabase('displaydetail');
		}


# vim:ts=4 sw=4 noet
?>
