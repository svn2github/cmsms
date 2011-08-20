<?php
if (!isset($gCms)) exit;

$db =& $gCms->GetDb();
if (!$this->CheckPermission('Modify News'))
{
  echo $this->ShowErrors($this->Lang('needpermission', array('Modify News')));
  return;
}

$parent = -1;
if( isset($params['parent']))
  {
    $parent = $params['parent'];
  }
if (isset($params['cancel']))
{
  $this->Redirect($id, 'defaultadmin', $returnid);
}

$name = '';
if (isset($params['name']))
{
  $name = $params['name'];
  if ($name != '')
    {
      $catid = $db->GenID(cms_db_prefix()."module_news_categories_seq");
      $time = $db->DBTimeStamp(time());
      $query = 'INSERT INTO '.cms_db_prefix().'module_news_categories (news_category_id, news_category_name, parent_id, create_date, modified_date) VALUES (?,?,?,'.$time.','.$time.')';
      $parms = array($catid,$name,intval($parent));
      $db->Execute($query, $parms);
      news_admin_ops::UpdateHierarchyPositions();
      @$this->SendEvent('NewsCategoryAdded', array('category_id' => $catid, 'name' => $name));
    
      $params = array('tab_message'=> 'categoryadded', 'active_tab' => 'categories');
      $this->Redirect($id, 'defaultadmin', $returnid, $params);
    }
  else
    {
      echo $this->ShowErrors($this->Lang('nonamegiven'));
    }
}

#Display template
$smarty->assign('startform', $this->CreateFormStart($id, 'addcategory', $returnid));
$smarty->assign('endform', $this->CreateFormEnd());
$smarty->assign('nametext', $this->Lang('name'));
$smarty->assign('inputname', $this->CreateInputText($id, 'name', $name, 20, 255));
$smarty->assign('parentdropdown', news_admin_ops::CreateParentDropdown($id, -1, -1));
$smarty->assign('hidden', '');
$smarty->assign('submit', $this->CreateInputSubmit($id, 'submit', lang('submit')));
$smarty->assign('cancel', $this->CreateInputSubmit($id, 'cancel', lang('cancel')));
$smarty->assign('parenttext', lang('parent'));
echo $this->ProcessTemplate('editcategory.tpl');
?>
