<?php
if( !isset($gCms) ) exit();
if( !$this->CheckPermission('Approve News') )
  {
    exit();
  }

if( !isset($params['approve']) || !isset($params['articleid']) )
  {
    die('missing parameter, this should not happen');
  }

$status = '';
$query = "UPDATE ".cms_db_prefix()."module_news SET status = ? WHERE news_id = ?";
switch( $params['approve'] )
  {
  case 0:
    $status = 'draft';
    break;
  case 1:
    $status = 'published';
    break;
  default:
    die('unknown value for approve parameter, I do not know what to do with this');
    break;

  }

$db->Execute($query,array($status,$params['articleid']));
$params = array('active_tab'=>'articles');
$this->Redirect($id,'defaultadmin',$returnid,$params);
?>