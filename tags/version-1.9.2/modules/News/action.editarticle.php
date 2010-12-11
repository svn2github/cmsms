<?php
if (!isset($gCms)) exit;

if (isset($params['cancel']))
  {
	$this->Redirect($id, 'defaultadmin', $returnid);
  }

$articleid = '';
if (isset($params['articleid']))
  {
	$articleid = $params['articleid'];
  }


$content = '';
if (isset($params['content']))
  {
	$content = $params['content'];
  }

$summary = '';
if (isset($params['summary']))
  {
	$summary = $params['summary'];
  }

$news_url = '';
if (isset($params['news_url']))
  {
	$news_url = $params['news_url'];
  }

$status = 'draft';
if( $this->CheckPermission('Approve News') )
  {
    $status = 'published';
  }
if (isset($params['status']))
  {
	$status = $params['status'];
  }

$usedcategory = '';
if (isset($params['category']))
  {
	$usedcategory = $params['category'];
  }

$author_id = '-1';
if (isset($params['author_id']))
  {
	$author_id = $params['author_id'];
  }

$postdate = time();
if (isset($params['postdate_Month']))
  {
	$postdate = mktime($params['postdate_Hour'], $params['postdate_Minute'], $params['postdate_Second'], $params['postdate_Month'], $params['postdate_Day'], $params['postdate_Year']);
  }

$useexp = 0;
if (isset($params['useexp']))
  {
	$useexp = 1;
  }

$extra = '';
if( isset($params['extra']) )
{
	$extra = trim($params['extra']);
}

$startdate = time();
if (isset($params['startdate_Month']))
  {
	$startdate = mktime($params['startdate_Hour'], $params['startdate_Minute'], $params['startdate_Second'], $params['startdate_Month'], $params['startdate_Day'], $params['startdate_Year']);
  }

$enddate = strtotime('+6 months', time());
if (isset($params['enddate_Month']))
  {
	$enddate = mktime($params['enddate_Hour'], $params['enddate_Minute'], $params['enddate_Second'], $params['enddate_Month'], $params['enddate_Day'], $params['enddate_Year']);
  }


$title = '';
if (isset($params['title']))
  {
    $title = $params['title'];
  }

if( isset($params['submit']) || isset($params['apply']) )
  {
    $error = FALSE;
    if( empty($title) )
      {
	$error = $this->ShowErrors($this->Lang('notitlegiven'));
      }
    else if( empty($content) )
      {
	$error = $this->ShowErrors($this->Lang('nocontentgiven'));
      }
    else if( $useexp == 1 )
      {
	if( $startdate >= $enddate )
	  {
	    $error = $this->ShowErrors($this->Lang('error_invaliddates'));
	  }
      }

    $startdatestr = NULL;
    $enddatestr = NULL;
    if( $useexp != 0 )
      {
	$startdate = trim($db->DbTimeStamp($startdate),"'");
	$enddate = trim($db->DbTimeStamp($enddate),"'");
      }

    if( empty($error) && $news_url != '' )
      {
	// check for starting or ending slashes
	if( startswith($news_url,'/') || endswith($news_url,'/') )
	  {
	    $error = $this->ShowErrors($this->Lang('error_invalidurl'));
	  }

	if( $error === FALSE )
	  {
	    // check for invalid chars.
	    $translated = munge_string_to_url($news_url,false,true);
	    if( strtolower($translated) != strtolower($news_url) )
	      {
		$error = $this->ShowErrors($this->Lang('error_invalidurl'));
	      }
	  }

	if( $error === FALSE )
	  {
	    // make sure this url isn't taken.
	    $news_url = trim($news_url," /\t\r\n\0\x08");
	    cms_route_manager::load_routes();
	    $route = cms_route_manager::find_match($news_url);
	    if( $route )
	      {
		$dflts = $route->get_defaults();
		if( $route->is_content() || 
		    $route->get_dest() != $this->GetName() || 
		    !isset($dflts['articleid']) || 
		    $dflts['articleid'] != $articleid )
		  {
		    // we're adding an article, not editing... any matching route is bad.
		    $error = $this->ShowErrors($this->Lang('error_invalidurl'));
		  }
	      }
	  }
      }

    if( $error !== FALSE )
      {
	echo $error;
      }
    else
      {
	// 
	// database work
	//
	$query = 'UPDATE '.cms_db_prefix().'module_news SET news_title=?, news_data=?, summary=?, status=?, news_date=?, news_category_id=?, start_time=?, end_time=?, modified_date=?, news_extra=?, news_url = ? WHERE news_id = ?';
	if ($useexp == 1)
	  {
	    $db->Execute($query, array($title, $content, $summary, $status, trim($db->DBTimeStamp($postdate), "'"), $usedcategory, trim($db->DBTimeStamp($startdate), "'"), trim($db->DBTimeStamp($enddate), "'"), trim($db->DBTimeStamp(time()), "'"), $extra, $news_url, $articleid));
	  }
	else
	  {					
	    $db->Execute($query, 
			 array($title, $content, 
			       $summary, $status, 
			       trim($db->DBTimeStamp($postdate), "'"),
			       $usedcategory,
			       $startdatestr,
			       $enddatestr,
			       trim($db->DBTimeStamp(time()), "'"), 
			       $extra,
			       $news_url,
			       $articleid)
			 );
	  }
    
	//
	//Update custom fields
	//
    
	// get the field types
	$qu = "SELECT id,name,type FROM ".cms_db_prefix()."module_news_fielddefs 
                        WHERE type='file'";
	$types = $db->GetArray($qu);
    
	$error = false;
	if( is_array($types) )
	  {
	    foreach( $types as $onetype )
	      {
		$elem = $id.'customfield_'.$onetype['id'];
		if( isset($_FILES[$elem]) &&
		    $_FILES[$elem]['name'] != '' )
		  {
		    if( $_FILES[$elem]['error'] != 0 ||
			$_FILES[$elem]['tmp_name'] == '')
		      {
			echo $this->ShowErrors($this->Lang('error_upload'));
			$error = true;
		      }
		    else
		      {
			$error = '';
			$value = $this->handle_upload($articleid,$elem,$error);
			if( $value === FALSE )
			  {
			    echo $this->ShowErrors($error);
			    $error = true;
			  }
			else
			  {
			    $params['customfield'][$onetype['id']] = $value;
			  }
		      }
		  }
	      } // foreach
	  } // if
    
	if( isset($params['customfield']) && !$error )
	  {
	    $now = $db->DbTimeStamp(time());
	    foreach( $params['customfield'] as $fldid => $value )
	      {
		// first check if it's available
		$query = "SELECT value FROM ".cms_db_prefix()."module_news_fieldvals WHERE news_id = ? AND fielddef_id = ?";
		$tmp = $db->GetOne($query,array($articleid,$fldid));
		$dbr = true;
		if( $tmp === false )
		  {
		    if( !empty($value) )
		      {
			$query = "INSERT INTO ".cms_db_prefix()."module_news_fieldvals (news_id,fielddef_id,value,create_date,modified_date) VALUES (?,?,?,$now,$now)";
			$dbr = $db->Execute($query,
					    array($articleid,
						  $fldid,
						  $value));
		      }
		  }
		else 
		  {
		    if( empty($value) )
		      {
			$query = 'DELETE FROM '.cms_db_prefix().'module_news_fieldvals
                                       WHERE news_id = ? AND fielddef_id = ?';
			$dbr = $db->Execute( $query, array($articleid,$fldid));
		      }
		    else
		      {
			$query = "UPDATE ".cms_db_prefix()."module_news_fieldvals
                                     SET value = ?, modified_date = $now
                                   WHERE news_id = ? AND fielddef_id = ?";
			$dbr = $db->Execute( $query, 
					     array($value,$articleid,$fldid));
		      }
		  }
		if( !$dbr )
		  {
		    die('FATAL SQL ERROR: '.$db->ErrorMsg().'<br/>QUERY: '.$db->sql);
		  }
	      }
	  }
    
	if( isset($params['delete_customfield']) && 
	    is_array($params['delete_customfield']) &&
	    !$error )
	  {
	    foreach( $params['delete_customfield'] as $k => $v )
	      {
		if( $v != 'delete' ) continue;
	    
		$query = 'DELETE FROM '.cms_db_prefix().'module_news_fieldvals WHERE news_id = ? AND fielddef_id = ?';
		$db->Execute( $query, array( $articleid, $k ) );
	      }
	  }
    
	//Update search index
	if( !$error )
	  {
	    $module =& $this->GetModuleInstance('Search');
	    if ($module != FALSE)
	      {
		if( $status == 'draft' )
		  {
		    $module->DeleteWords($this->GetName(),$articleid,'article');
		  }
		else
		  {
		    if( !$useexp ||
			($enddate > time()) ||
			$this->GetPreference('expired_searchable',1) == 1 )
		      $text = '';
		    if( isset($params['customfield']) )
		      {
			foreach( $params['customfield'] as $fldid => $value )
			  {
			    if( strlen($value) > 1 )
			      $text .= $value.' ';
			  }
		      }
		    $text .= $content.' '.$summary.' '.$title.' '.$title;
		    $module->AddWords($this->GetName(), $articleid, 'article', $text, 
				      ($useexp == 1 && $this->GetPreference('expired_searchable',0) == 0) ? $enddate : NULL);
		  }
	      }
	
	    @$this->SendEvent('NewsArticleEdited', array('news_id' => $articleid, 'category_id' => $usedcategory, 'title' => $title, 'content' => $content, 'summary' => $summary, 'status' => $status, 'start_time' => $startdate, 'end_time' => $enddate, 'extra' => $extra, 'useexp' => $useexp, 'news_url'=>$news_url));
	  }
    
	if( !isset($params['apply']) && !$error )
	  {
	    $params = array('tab_message'=> 'articleupdated', 'active_tab' => 'articles');
	    $this->Redirect($id, 'defaultadmin', $returnid, $params);
	  }
      } // else if no error
  }
else
  {
    // 
    // Load data from database
    //
    $query = 'SELECT * FROM '.cms_db_prefix().'module_news WHERE news_id = ?';
    $row = $db->GetRow($query, array($articleid));
    
    if ($row)
      {
	$title = $row['news_title'];
	$content = $row['news_data'];
	$extra = $row['news_extra'];
	$summary = $row['summary'];
	$news_url = $row['news_url'];
	$status = $row['status'];
	$usedcategory = $row['news_category_id'];
	$postdate = $db->UnixTimeStamp($row['news_date']);
	$startdate = $db->UnixTimeStamp($row['start_time']);
	$author_id = $row['author_id'];
	if (isset($row['end_time']))
	  {
	    $useexp = 1;
	    $enddate = $db->UnixTimeStamp($row['end_time']);
	  }
	else
	  {
	    $useexp = 0;
	  }
      }
  }

$statusdropdown = array();
$statusdropdown[$this->Lang('draft')] = 'draft';
$statusdropdown[$this->Lang('published')] = 'published';

$categorylist = array();
$query = "SELECT * FROM ".cms_db_prefix()."module_news_categories ORDER BY hierarchy";
$dbresult = $db->Execute($query);

while ($dbresult && $row = $dbresult->FetchRow())
  {
	$categorylist[$row['long_name']] = $row['news_category_id'];
  }

#Display template
$smarty->assign('formid',$id);

$this->smarty->assign('startform', $this->CreateFormStart($id, 'editarticle', $returnid,'post','multipart/form-data'));
$this->smarty->assign('endform', $this->CreateFormEnd());

if( $author_id > 0 )
  {
    $userops =& $gCms->GetUserOperations();
    $theuser =& $userops->LoadUserById( $author_id );
    $smarty->assign('inputauthor',$theuser->username);
  }
else if( $author_id == 0 )
  {
    $smarty->assign('inputauthor',$this->Lang('anonymous'));
  }
else 
  {
    $feu =& $this->GetModuleInstance('FrontEndUsers');
    if( $feu ) {
      $uinfo = $feu->GetUserInfo($author_id * -1);
      if( $uinfo[0] )
	{
	  $smarty->assign('inputauthor',$uinfo[1]['username']);
	}
    }
  }
$this->smarty->assign('hide_summary_field',$this->GetPreference('hide_summary_field','0'));
$this->smarty->assign('authortext', $this->Lang('author'));

$this->smarty->assign('titletext', $this->Lang('title'));

$this->smarty->assign('extratext',$this->Lang('extra'));
$this->smarty->assign('inputextra',$this->CreateInputText($id,'extra',$extra,30,255));
$this->smarty->assign('extravalue',$extra);
$this->smarty->assign('urltext',$this->Lang('url'));
$this->smarty->assign('inputurl',$this->CreateInputText($id,'news_url',$news_url,50,255));

$this->smarty->assign('inputtitle', $this->CreateInputText($id, 'title', $title, 30, 255));
$this->smarty->assign('inputcontent', $this->CreateTextArea(true, $id, $content, 'content'));
$this->smarty->assign('inputsummary', $this->CreateTextArea($this->GetPreference('allow_summary_wysiwyg',1), $id, $summary, 'summary', '', '', '', '', '80', '3'));
$smarty->assign('useexp',$useexp);
$smarty->assign('actionid',$id);
$this->smarty->assign('inputexp', $this->CreateInputCheckbox($id, 'useexp', '1', $useexp, 'class="pagecheckbox"'));
$this->smarty->assign_by_ref('postdate', $postdate);
$this->smarty->assign('postdateprefix', $id.'postdate_');
$this->smarty->assign_by_ref('startdate', $startdate);
$this->smarty->assign('startdateprefix', $id.'startdate_');
$this->smarty->assign_by_ref('enddate', $enddate);
$this->smarty->assign('enddateprefix', $id.'enddate_');
if( $this->CheckPermission('Approve News') )
  {
    $this->smarty->assign('statustext', lang('status'));
    $this->smarty->assign('status', $this->CreateInputDropdown($id, 'status', $statusdropdown, -1, $status));
  }
 else
   {
	 $smarty->assign('status',$this->CreateInputHidden($id,'status',$status));
   }
$this->smarty->assign('inputcategory', $this->CreateInputDropdown($id, 'category', $categorylist, -1, $usedcategory));
$this->smarty->assign('hidden', $this->CreateInputHidden($id, 'articleid', $articleid).$this->CreateInputHidden($id, 'author_id', $author_id));
$this->smarty->assign('submit', $this->CreateInputSubmit($id, 'submit', lang('submit')));
$this->smarty->assign('apply', $this->CreateInputSubmit($id, 'apply', lang('apply')));
$this->smarty->assign('cancel', $this->CreateInputSubmit($id, 'cancel', lang('cancel')));

$this->smarty->assign('titletext', $this->Lang('title'));
$this->smarty->assign('extratext',$this->Lang('extra'));
$this->smarty->assign('categorytext', $this->Lang('category'));
$this->smarty->assign('summarytext', $this->Lang('summary'));
$this->smarty->assign('contenttext', $this->Lang('content'));
$this->smarty->assign('postdatetext', $this->Lang('postdate'));
$this->smarty->assign('useexpirationtext', $this->Lang('useexpiration'));
$this->smarty->assign('startdatetext', $this->Lang('startdate'));
$this->smarty->assign('enddatetext', $this->Lang('enddate'));

//
// Display custom fields
//

// Get the field values
$fieldvals = array();
$query = 'SELECT * FROM '.cms_db_prefix().'module_news_fieldvals
           WHERE news_id = ?';
$tmp = $db->GetArray($query,array($articleid));
if( is_array($tmp) )
  {
    foreach( $tmp as $one )
    {
      $fieldvals[$one['fielddef_id']] = $one;
    }
  }

$query = 'SELECT * FROM '.cms_db_prefix().'module_news_fielddefs ORDER BY item_order';
$dbr = $db->Execute($query);
$custom_flds = array();
while( $dbr && ($row = $dbr->FetchRow()) )
  {
    $value = '';
    if( isset($fieldvals[$row['id']]) )
      {
	$value = $fieldvals[$row['id']]['value'];
      }
    $obj = new StdClass();
    $name = "customfield[".$row['id']."]";
    $obj->prompt = $row['name'];
    switch( $row['type'] )
      {
      case 'textbox':
	$size = min(50,$row['max_length']);
	$obj->field = $this->CreateInputText($id,$name,$value,$size,$row['max_length']);
	break;
      case 'checkbox':
	$obj->field = $this->CreateInputHidden($id,$name,'0').$this->CreateInputCheckbox($id,$name,'1',$value);
	break;
      case 'textarea':
	$obj->field = $this->CreateTextArea(true,$id,$value,$name);
	break;
      case 'file':
	$name = "customfield_".$row['id'];
	$del = '';
	if( $value != '' )
	  {
	    $deln = 'delete_customfield['.$row['id'].']';
	    $del = '&nbsp;'.$this->Lang('delete').$this->CreateInputCheckbox($id,$deln,'delete');
	  }
	$obj->field = 
	  $value.'&nbsp;'.$this->CreateFileUploadInput($id,$name).$del;;
	break;
      }
    
    $custom_flds[] = $obj;
  }
if( count($custom_flds) > 0 )
  {
    $smarty->assign('custom_fields',$custom_flds);
  }

echo $this->ProcessTemplate('editarticle.tpl');
?>
