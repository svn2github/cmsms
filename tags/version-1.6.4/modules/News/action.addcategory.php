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
      $this->UpdateHierarchyPositions();
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
$this->smarty->assign('startform', $this->CreateFormStart($id, 'addcategory', $returnid));
$this->smarty->assign('endform', $this->CreateFormEnd());
$this->smarty->assign('nametext', $this->Lang('name'));
$this->smarty->assign('inputname', $this->CreateInputText($id, 'name', $name, 20, 255));
$this->smarty->assign('parentdropdown', $this->CreateParentDropdown($id, -1, -1));
$this->smarty->assign('hidden', '');
$this->smarty->assign('submit', $this->CreateInputSubmit($id, 'submit', lang('submit')));
$this->smarty->assign('cancel', $this->CreateInputSubmit($id, 'cancel', lang('cancel')));
$this->smarty->assign('parenttext', lang('parent'));
echo $this->ProcessTemplate('editcategory.tpl');
?>
