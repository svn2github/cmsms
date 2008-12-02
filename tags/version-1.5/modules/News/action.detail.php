<?php
		if (!isset($gCms)) exit;
		$config =& $gCms->GetConfig();

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
		$row = $db->GetRow($query, array($params['articleid']));

		if ($row)
		{
			$onerow = new stdClass();

			$onerow->id = $row['news_id'];
			$userops =& $gCms->GetUserOperations();
			$theuser = $userops->LoadUserById( $row['author_id'] );
			$onerow->author_id = $row['author_id'];
			if( $onerow->author_id > 0 )
			  {
			    $onerow->author = $theuser->username;
			    $onerow->authorname = $theuser->firstname.' '.$theuser->lastname;
			  }
			else if( $onerow->author_id == 0 )
			  {
			    $onerow->author = $this->Lang('anonymous');
			    $onerow->authorname = $this->Lang('unknown');
			  }
			else
			  {
			    $feu =& $this->GetModuleInstance('FrontEndUsers');
			    if( $feu ) {
			      $uinfo = $feu->GetUserInfo($onerow->author_id * -1);
			      if( $uinfo[0] )
				{
				  $onerow->author = $uinfo[1]['username'];
				}
			    }
			  }
			$onerow->title = $row['news_title'];
			$onerow->content = $row['news_data'];
			$onerow->summary = $row['summary'];
			$onerow->postdate = $row['news_date'];
			$onerow->postdate = $row['news_date'];
			$onerow->startdate = $row['start_time'];
			$onerow->enddate = $row['end_time'];
			$onerow->category = $row['news_category_name'];

			//
			// Handle the custom fields
			//
			$query3 = 'SELECT A.value,B.id,B.name,B.type FROM '.cms_db_prefix().'module_news_fieldvals A, '.cms_db_prefix().'module_news_fielddefs B WHERE A.fielddef_id = B.id AND A.news_id = ? AND B.public = 1 ORDER BY B.item_order';
			$dbr3 = $db->Execute($query3,array($row['news_id']));
			$fields = array();
			$fieldsbyname = array();
			while( $dbr3 && ($row3 = $dbr3->FetchRow()) )
			  {
			    $alias = strtolower(str_replace(' ','_',$row3['name']));
			    $onerow->$alias = $row3['value'];
				
			    $obj = new StdClass();
			    foreach( $row3 as $k => $v )
			      {
				$obj->$k = $v;
			      }
			    $fields[] = $obj;
			    $fieldsbyname[$alias] = $obj;
			  }
			$onerow->fieldsbyname = $fieldsbyname;
			$onerow->fields = $fields;
			$onerow->file_location = $config['uploads_url'].'/news/id'.$row['news_id'];

			$sendtoprint = array('articleid'=>$row['news_id'],'showtemplate'=>'false');
			if (isset($params['lang']))
			{
				$sendtoprint['lang'] = $params['lang'];
			}
			$onerow->printlink = $this->CreateLink($id, 'print', $returnid, $this->Lang('print'), $sendtoprint);
			$onerow->printurl = $this->CreateLink($id, 'print', $returnid, $this->Lang('print'), $sendtoprint,'',true);

			$return_url = $this->CreateReturnLink($id, isset($params['origid'])?$params['origid']:$returnid, $this->lang('news_return'));
			$this->smarty->assign_by_ref('return_url', $return_url);
			$this->smarty->assign_by_ref('entry', $onerow);
		}

                $smarty->assign('category_label', $this->Lang('category_label'));
                $smarty->assign('author_label', $this->Lang('author_label'));

		#Display template
$template = 'detail'.$this->GetPreference('current_detail_template');
if (isset($params['detailtemplate']))
  {
    $template = 'detail'.$params['detailtemplate'];
  }
echo $this->ProcessTemplateFromDatabase($template);

# vim:ts=4 sw=4 noet
?>
