<?php
if (!isset($gCms)) exit;
	$detailpage = '';

	if (!$this->CheckPermission('Modify News'))
	{
		echo $this->ShowErrors($this->Lang('needpermission', array('Modify News')));
		return;
	}

	if (isset($params['cancel']))
	{
		$this->Redirect($id, 'defaultadmin', $returnid);
	}

// Give the form id to smarty
$smarty->assign('formid',$id);

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

$status = 'draft';
if( $this->CheckPermission('Approve News') )
  {
    $status = 'published';
  }
	if (isset($params['status']))
	{
		$status = $params['status'];
	}

	$usedcategory = $this->GetPreference('default_category', '');
	if (isset($params['category']))
	{
		$usedcategory = $params['category'];
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

	$userid = get_userid();
	
	$startdate = time();
	if (isset($params['startdate_Month']))
	{
		$startdate = mktime($params['startdate_Hour'], $params['startdate_Minute'], $params['startdate_Second'], $params['startdate_Month'], $params['startdate_Day'], $params['startdate_Year']);
	}
$ndays = (int)$this->GetPreference('expiry_interval',180);
if( $ndays == 0 ) $ndays = 180;
$enddate = strtotime(sprintf("+%d days",$ndays), time());
	if (isset($params['enddate_Month']))
	{
		$enddate = mktime($params['enddate_Hour'], $params['enddate_Minute'], $params['enddate_Second'], $params['enddate_Month'], $params['enddate_Day'], $params['enddate_Year']);
	}

    $extra = '';
    if (isset($params['extra']))
	{
		$extra = trim($params['extra']);
	}

	$title = '';
	if (isset($params['title']))
	{
	  $title = $params['title'];
	}

if( isset($params['submit']) )
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

    //
    // database work
    //
    if( $error !== FAlSE )
      {
	echo $error;
      }
    else
      {
	$articleid = $db->GenID(cms_db_prefix()."module_news_seq");
	$query = 'INSERT INTO '.cms_db_prefix().'module_news (news_id, news_category_id, news_title, news_data, summary, status, news_date, start_time, end_time, create_date, modified_date,author_id,news_extra) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?)';
	if ($useexp == 1)
	  {
	    $dbr = $db->Execute($query, array($articleid, $usedcategory, $title, $content, $summary, $status, trim($db->DBTimeStamp($postdate), "'"), trim($db->DBTimeStamp($startdate), "'"), trim($db->DBTimeStamp($enddate), "'"), trim($db->DBTimeStamp(time()), "'"), trim($db->DBTimeStamp(time()), "'"), $userid, $extra));
	  }
	else
	  {
	    $dbr = $db->Execute($query, array($articleid, $usedcategory, $title, $content, $summary, $status, trim($db->DBTimeStamp($postdate), "'"), NULL, NULL, trim($db->DBTimeStamp(time()), "'"), trim($db->DBTimeStamp(time()), "'"), $userid, $extra));
	  }
    
	if( !$dbr )
	  {
	    echo "DEBUG: SQL = ".$db->sql."<br/>";
	    die($db->ErrorMsg());
	  }
    
	//
	//Handle submitting the 'custom' fields
	//
	// get the field types
	$qu = "SELECT id,name,type FROM ".cms_db_prefix()."module_news_fielddefs 
                        WHERE type='file'";
	$types = $db->GetArray($qu);
    
	foreach( $types as $onetype )
	  {
	    $elem = $id.'customfield_'.$onetype['id'];
	    if( isset($_FILES[$elem]) && 
		$_FILES[$elem]['name'] != '' )
	      {
		if( $_FILES[$elem]['error'] != 0 ||
		    $_FILES[$elem]['tmp_name'] == '' )
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
	  }
    
	if( isset($params['customfield']) && !$error )
	  {
	    $now = trim($db->DBTimeStamp(time()), "'");
	    foreach( $params['customfield'] as $fldid => $value )
	      {
		if( $value == '' ) continue;
	    
		$query = "INSERT INTO ".cms_db_prefix()."module_news_fieldvals (news_id,fielddef_id,value,create_date,modified_date) VALUES (?,?,?,?,?)";
		$dbr = $db->Execute($query,
				    array($articleid,
					  $fldid,
					  $value,
					  $now,
					  $now));
		if( !$dbr )
		  {
		    die('FATAL SQL ERROR: '.$db->ErrorMsg().'<br/>QUERY: '.$db->sql);
		  }
	      }
	  } // if
    
	if( !$error && $status == 'published' )
	  {
	    //Update search index
	    $module =& $this->GetModuleInstance('Search');
	    if ($module != FALSE)
	      {
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
	
	if( !$error )
	  {
	    @$this->SendEvent('NewsArticleAdded', array('news_id' => $articleid, 'category_id' => $usedcategory, 'title' => $title, 'content' => $content, 'summary' => $summary, 'status' => $status, 'start_time' => $startdate, 'end_time' => $enddate, 'useexp' => $useexp, 'extra' => $extra));
	
	    $params = array('tab_message'=> 'articleadded', 'active_tab' => 'articles');
	    $this->Redirect($id, 'defaultadmin', $returnid, $params);
	  } // if !$error
      } // outer if !$error
  } // submit

//
// build the form
//    
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

$onchangetext='onchange="document'.$id.'moduleform_1.submit()"';
	#Display template
$this->smarty->assign('hide_summary_field',$this->GetPreference('hide_summary_field','0'));
	$this->smarty->assign('authortext', '');
	$this->smarty->assign('inputauthor', '');
	$this->smarty->assign('hidden', '');
$this->smarty->assign('startform', $this->CreateFormStart($id, 'addarticle', $returnid,'post','multipart/form-data'));
	$this->smarty->assign('endform', $this->CreateFormEnd());
	$this->smarty->assign('titletext', $this->Lang('title'));
	$this->smarty->assign('inputtitle', $this->CreateInputText($id, 'title', $title, 30, 255));
	$this->smarty->assign('inputcontent', $this->CreateTextArea(true, $id, $content, 'content'));
$this->smarty->assign('inputsummary', $this->CreateTextArea($this->GetPreference('allow_summary_wysiwyg',1), $id, $summary, 'summary', '', '', '', '', '80', '3'));

$this->smarty->assign('extratext',$this->Lang('extra'));
$this->smarty->assign('inputextra',$this->CreateInputText($id,'extra',$extra,30,255));
$this->smarty->assign('extravalue',$extra);

	$this->smarty->assign('postdate', $postdate);
	$this->smarty->assign('postdateprefix', $id.'postdate_');
$smarty->assign('useexp',$useexp);
$smarty->assign('actionid',$id);
	$this->smarty->assign('inputexp', $this->CreateInputCheckbox($id, 'useexp', '1', $useexp, 'class="pagecheckbox"'));
	$this->smarty->assign('startdate', $startdate);
	$this->smarty->assign('startdateprefix', $id.'startdate_');
	$this->smarty->assign('enddate', $enddate);
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
$this->smarty->assign('inputcategory', $this->CreateInputDropdown($id, 'category', $categorylist, -1, $usedcategory, $onchangetext));
	$this->smarty->assign('submit', $this->CreateInputSubmit($id, 'submit', lang('submit')));
	$this->smarty->assign('cancel', $this->CreateInputSubmit($id, 'cancel', lang('cancel')));

	$this->smarty->assign('titletext', $this->Lang('title'));
	$this->smarty->assign('categorytext', $this->Lang('category'));
	$this->smarty->assign('summarytext', $this->Lang('summary'));
	$this->smarty->assign('contenttext', $this->Lang('content'));
	$this->smarty->assign('postdatetext', $this->Lang('postdate'));
	$this->smarty->assign('useexpirationtext', $this->Lang('useexpiration'));
	$this->smarty->assign('startdatetext', $this->Lang('startdate'));
	$this->smarty->assign('enddatetext', $this->Lang('enddate'));

// Display custom fields
$query = 'SELECT * FROM '.cms_db_prefix().'module_news_fielddefs ORDER BY item_order';
$dbr = $db->Execute($query);
$custom_flds = array();
while( $dbr && ($row = $dbr->FetchRow()) )
  {
    $obj = new StdClass();
    $name = "customfield[".$row['id']."]";
    $obj->prompt = $row['name'];
    switch( $row['type'] )
      {
      case 'textbox':
		$size = min(50,$row['max_length']);
		$obj->field = $this->CreateInputText($id,$name,'',$size,$row['max_length']);
		break;
      case 'checkbox':
		$obj->field = $this->CreateInputHidden($id,$name,'0').$this->CreateInputCheckbox($id,$name,'1','0');
		break;
      case 'textarea':
		$obj->field = $this->CreateTextArea(true,$id,'',$name);
		break;
      case 'file':
		$name = "customfield_".$row['id'];
		$obj->field = $this->CreateFileUploadInput($id,$name);
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
