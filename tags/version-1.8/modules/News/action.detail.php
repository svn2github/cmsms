<?php
		if (!isset($gCms)) exit;
		$config =& $gCms->GetConfig();

if( !isset($params['articleid']) )
  {
    exit; // nothing to do.
  }

$query = '';
$row = '';
if( $params['articleid'] == -1 )
  {
    // get the latest, published, valid news article.
    $now = $db->DbTimeStamp(time());
    $query = "SELECT mn.*, mnc.news_category_name FROM ".cms_db_prefix()."module_news mn LEFT OUTER JOIN ".cms_db_prefix()."module_news_categories mnc ON mnc.news_category_id = mn.news_category_id WHERE status = 'published' AND ";
    $query .= "(".$db->IfNull('start_time',$db->DBTimeStamp(1))." < $now) AND ";
    $query .= "((".$db->IfNull('end_time',$db->DBTimeStamp(1))." = ".$db->DBTimeStamp(1).") OR (end_time > $now)) ";
    $query .= 'ORDER BY news_date DESC LIMIT 1';
    $row = $db->GetRow($query);

    // todo, should we 404 here?
    if( !$row ) return;
  }
else
  {
    $query = "SELECT mn.*, mnc.news_category_name FROM ".cms_db_prefix()."module_news mn LEFT OUTER JOIN ".cms_db_prefix()."module_news_categories mnc ON mnc.news_category_id = mn.news_category_id WHERE status = 'published' AND news_id = ?";
    $row = $db->GetRow($query, array($params['articleid']));

    // todo, should we 404 here?
    if( !$row ) return;
  }


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
			$onerow->extra = $row['news_extra'];

			// handle canonical URL
			$aliased_title = munge_string_to_url($row['news_title']);
			$prettyurl = 'news/'.$row['news_id']."/$returnid/$aliased_title";
			if (isset($sendtodetail['detailtemplate']))
			  {
			    $prettyurl .= '/d,' . $sendtodetail['detailtemplate'];
			  }
			$onerow->canonical = $this->CreateLink($id, 'detail', $returnid, 
							     '', $params, '', true, false, '', true, $prettyurl);

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
			if (isset($params['category_id']))
			{
				$sendtoprint['category_id'] = $params['category_id'];
			}
			$onerow->printlink = $this->CreateLink($id, 'print', $returnid, $this->Lang('print'), $sendtoprint);
			$onerow->printurl = $this->CreateLink($id, 'print', $returnid, $this->Lang('print'), $sendtoprint,'',true);

			$return_url = $this->CreateReturnLink($id, isset($params['origid'])?$params['origid']:$returnid, $this->lang('news_return'));
			$this->smarty->assign_by_ref('return_url', $return_url);
			$this->smarty->assign_by_ref('entry', $onerow);
		}

		$catName = '';
		if (isset($params['category_id']))
			{
			$catName = $db->GetOne('SELECT news_category_name FROM '.cms_db_prefix() . 'module_news_categories where news_category_id=?',array($params['category_id']));		
			}
		$smarty->assign('category_name',$catName);
		unset($params['article_id']);
		$smarty->assign('category_link',$this->CreateLink($id, 'default', $returnid, $catName, $params));

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
