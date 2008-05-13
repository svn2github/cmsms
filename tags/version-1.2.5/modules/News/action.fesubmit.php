<?php
if (!isset($gCms)) exit;
$title = '';
$content = '';
$summary = '';
$status = $this->GetPreference('fesubmit_status','draft');
$useexp = 1;
$startdate = time();
$postdate = time();
$ndays = (int)$this->GetPreference('expiry_interval',180);
if( $ndays == 0 ) $ndays = 180;
$enddate = strtotime(sprintf("+%d days",$ndays), time());
$userid = get_userid(false);
$category_id = $this->GetPreference('default_category', '');
$do_send_email = false;

if( $userid == '' )
  {
    $module =& $this->GetModuleInstance('FrontEndUsers');
    if( $module ) 
      {
	$userid = $module->LoggedInId();
      }
  }

if( isset( $params['category'] ) )
  {
    $query = 'SELECT news_category_id FROM '.cms_db_prefix().'module_news_categories WHERE news_category_name = ?';
    $tmp = $db->GetOne($query,array($params['category']));
    if( $tmp ) $category_id = $tmp;
  }

if( isset( $params['cancel'] ) )
  {
    return;
  }

if( isset( $params['submit'] ) )
  {
    if( isset($params['content']) )
      {
	$content = $params['content'];
      }

    if( isset($params['summary']) )
      {
	$summary = $params['summary'];
      }

    if( isset($params['category_id']) )
      {
	$category_id = $params['category_id'];
      }

    if (isset($params['postdate_Month']))
      {
	$postdate = mktime($params['postdate_Hour'], 
			   $params['postdate_Minute'], 
			   $params['postdate_Second'], 
			   $params['postdate_Month'], 
			   $params['postdate_Day'], 
			   $params['postdate_Year']);
      }

    if (isset($params['startdate_Month']))
      {
	$startdate = mktime($params['startdate_Hour'], 
			    $params['startdate_Minute'], 
			    $params['startdate_Second'], 
			    $params['startdate_Month'], 
			    $params['startdate_Day'], 
			    $params['startdate_Year']);
      }
    
    if (isset($params['enddate_Month']))
      {
	$enddate = mktime($params['enddate_Hour'], 
			  $params['enddate_Minute'], 
			  $params['enddate_Second'], 
			  $params['enddate_Month'], 
			  $params['enddate_Day'], 
			  $params['enddate_Year']);
	}

    $error = false;
    if( $startdate > $enddate )
      {
	$error = true;
	$smarty->assign('error',$this->Lang('startdatetoolate'));
      }

    if( isset($params['title'] ) )
      {
	$title = $params['title'];
      }

    if( $title == '' )
      {
	$error = true;
	$smarty->assign('error',$this->Lang('notitlegiven'));
      }

    if( $content == '' )
      {
	$error = true;
	$smarty->assign('error',$this->Lang('nocontentgiven'));
      }

    if( $error == false )
      {
	// generate a new article id
	$articleid = $db->GenID(cms_db_prefix()."module_news_seq");
	
	// and generate the insert query
	$query = 'INSERT INTO '.cms_db_prefix().'module_news 
                   (news_id, news_category_id, news_title, news_data, summary,
                    status, news_date, start_time, end_time, create_date, 
                    modified_date,author_id) 
                   VALUES (?,?,?,?,?,?,?,?,?,?,?,?)';
	
	$db->Execute($query, 
		     array($articleid, $category_id, $title, 
			   $content, $summary, $status, 
			   trim($db->DBTimeStamp($postdate), "'"), 
			   trim($db->DBTimeStamp($startdate), "'"), 
			   trim($db->DBTimeStamp($enddate), "'"), 
			   trim($db->DBTimeStamp(time()), "'"), 
			   trim($db->DBTimeStamp(time()), "'"), 
			   $userid));
	
	//Update search index
	$module =& $this->GetModuleInstance('Search');
	if ($module != FALSE)
	  {
	    $module->AddWords($this->GetName(), $articleid, 'article', $content . ' ' . $summary . ' ' . $title . ' ' . $title, $useexp == 1 ? $enddate : NULL);
	  }

	// Send an email
	$do_send_email = true;

	// send an event
	@$this->SendEvent('NewsArticleAdded', 
			  array('news_id' => $articleid, 
				'category_id' => $category_id, 
				'title' => $title, 
				'content' => $content, 
				'summary' => $summary, 
				'status' => $status, 
				'start_time' => $startdate, 
				'end_time' => $enddate, 
				'useexp' => $useexp));
	
	// and we're done
	$smarty->assign('message',$this->Lang('articleadded'));
      }
  }

$txt =$this->CreateFrontEndFormStart($id,$returnid,'fesubmit');

$smarty->assign('startform',$txt);
$smarty->assign('endform',$this->CreateFormEnd());

#Display template
$smarty->assign('hidden', 
		$this->CreateInputHidden($id,'category_id',$category_id));
$smarty->assign('titletext', $this->Lang('title'));
$smarty->assign('inputtitle', $this->CreateInputText($id, 'title', $title, 30, 255));
$smarty->assign('inputcontent', $this->CreateTextArea(true, $id, $content, 'content'));
$smarty->assign('inputsummary', 
		$this->CreateTextArea(true, $id, $summary, 'summary'));
$smarty->assign_by_ref('postdate', $postdate);
$smarty->assign('postdateprefix', $id.'postdate_');
$smarty->assign('inputexp', 
		$this->CreateInputCheckbox($id, 'useexp', '1', $useexp, 'class="pagecheckbox"'));
$smarty->assign_by_ref('startdate', $startdate);
$smarty->assign('startdateprefix', $id.'startdate_');
$smarty->assign_by_ref('enddate', $enddate);
$smarty->assign('enddateprefix', $id.'enddate_');
$smarty->assign('status',$this->CreateInputHidden($id,'status',$status));
$smarty->assign('submit', $this->CreateInputSubmit($id, 
						   'submit', 
						   $this->Lang('submit')));
$smarty->assign('cancel', $this->CreateInputSubmit($id, 'cancel', 
						   $this->Lang('cancel')));

$smarty->assign('titletext', $this->Lang('title'));
$smarty->assign('summarytext', $this->Lang('summary'));
$smarty->assign('contenttext', $this->Lang('content'));
$smarty->assign('postdatetext', $this->Lang('postdate'));
$smarty->assign('useexpirationtext', $this->Lang('useexpiration'));
$smarty->assign('startdatetext', $this->Lang('startdate'));
$smarty->assign('enddatetext', $this->Lang('enddate'));
$smarty->assign('ipaddress',getenv("REMOTE_ADDR"));


$template = 'form'.$this->GetPreference('current_form_template');
if (isset($params['formtemplate']))
  {
    $template = 'form'.$params['formtemplate'];
  }
echo $this->ProcessTemplateFromDatabase($template);

if( $do_send_email == true )
  {
    // this needs to be done after the form is generated
    // because we use some of the same smarty variables
    $cmsmailer =& $this->GetModuleInstance('CMSMailer');
    if( $cmsmailer )
      {
	$addy = trim($this->GetPreference('formsubmit_emailaddress'));
	if( $addy != '' )
	  {
	    if( $summary != '' ) $smarty->assign('summary',$summary);
	    if( $content != '' ) $smarty->assign('content',$content);

	    $cmsmailer->AddAddress( $addy );
	    $cmsmailer->SetSubject( $this->GetPreference('email_subject',$this->Lang('subject_newnews')));
	    $cmsmailer->IsHTML( false );
	    
	    $body = $this->ProcessTemplateFromDatabase('email_template');
	    $cmsmailer->SetBody( $body );
	    $cmsmailer->Send();
	  }
      }
  }

// END OF FILE
?>
