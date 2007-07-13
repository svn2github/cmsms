<?php
if (!isset($gCms)) exit;

#
#The tab headers
#
echo $this->StartTabHeaders();
if (FALSE == empty($params['active_tab']))
  {
    $tab = $params['active_tab'];
  } else {
  $tab = '';
 }
if ($this->CheckPermission('Modify News'))
  {
    echo $this->SetTabHeader('articles',$this->Lang('articles'), ('articles' == $tab)?true:false);
    echo $this->SetTabHeader('categories',$this->Lang('categories'), ('categories' == $tab)?true:false);
  }
					
if ($this->CheckPermission('Modify Templates'))
  {
    echo $this->SetTabHeader('summary_template',$this->Lang('summarytemplate'), ('summary_template' == $tab)?true:false);
    echo $this->SetTabHeader('detail_template',$this->Lang('detailtemplate'), ('detail_template' == $tab)?true:false);
  }
			
if ($this->CheckPermission('Modify Site Preferences'))
  {
    echo $this->SetTabHeader('options',$this->Lang('options'), ('options' == $tab)?true:false);
  }
echo $this->EndTabHeaders();

#
#The content of the tabs
#
echo $this->StartTabContent();
if ($this->CheckPermission('Modify News'))
  {
    echo $this->StartTab('articles', $params);
    include(dirname(__FILE__).'/function.admin_articlestab.php');
    echo $this->EndTab();
	
    echo $this->StartTab('categories', $params);
    include(dirname(__FILE__).'/function.admin_categoriestab.php');
    echo $this->EndTab();
  }
if( $this->CheckPermission( 'Modify Templates' ) )
  {
    echo $this->StartTab('summary_template', $params);
    {
      $this->_AdminEditDefaultTemplateForm($id,$returnid,
					   'default_summary_template_contents',
					   'summary_template',
					   $this->Lang('title_summary_sysdefault'),
					   'orig_summary_template.tpl',
					   $this->Lang('info_sysdefault'));
      echo '<h3>'.$this->Lang('title_available_templates').'</h3>';
      $this->_AdminCreateTemplateList($id,$returnid,
				      'summary',
				      'default_summary_template_contents',
				      'summary_template',
				      'current_summary_template',
				      $this->Lang('title_summary_template'));
    }
    echo $this->EndTab();
	
    echo $this->StartTab('detail_template', $params);
    {
      $this->_AdminEditDefaultTemplateForm($id,$returnid,
					   'default_detail_template_contents',
					   'detail_template',
					   $this->Lang('title_detail_sysdefault'),
					   'orig_detail_template.tpl',
					   $this->Lang('info_sysdefault'));
      echo '<h3>'.$this->Lang('title_available_templates').'</h3>';
      $this->_AdminCreateTemplateList($id,$returnid,
				      'detail',
				      'default_detail_template_contents',
				      'detail_template',
				      'current_detail_template',
				      $this->Lang('title_detail_template'));
    }
    echo $this->EndTab();
  }

if ($this->CheckPermission('Modify Site Preferences'))
  {
    echo $this->StartTab('options', $params);
	
    // CreateFormStart sets up a proper form tag that will cause the submit to
    // return control to this module for processing.
    $this->smarty->assign('startform', $this->CreateFormStart ($id, 'updateoptions', $returnid));
    $this->smarty->assign('endform', $this->CreateFormEnd ());

    $this->smarty->assign ('title_showautodiscovery', $this->Lang('showautodiscovery'));
    $this->smarty->assign('input_showautodiscovery', $this->CreateInputCheckbox($id, 'showautodiscovery', 'yes', $this->GetPreference('showautodiscovery', 'yes')));

    $this->smarty->assign ('title_autodiscoverylink', $this->Lang('autodiscoverylink'));
    $this->smarty->assign('input_autodiscoverylink', $this->CreateInputText($id, 'autodiscoverylink', $this->GetPreference('autodiscoverylink', ''), '50', '255'));

    $this->smarty->assign('title_dateformat', $this->Lang('helpdateformat'));
    $this->smarty->assign('input_dateformat', $this->CreateInputText($id, 'dateformat', $this->GetPreference('dateformat', ''), '50', '255'));

    $categorylist = array();
    $query = "SELECT * FROM ".cms_db_prefix()."module_news_categories ORDER BY hierarchy";
    $dbresult = $db->Execute($query);

    while ($dbresult && $row = $dbresult->FetchRow())
      {
	$categorylist[$row['long_name']] = $row['news_category_id'];
      }

    $this->smarty->assign('title_default_category', $this->Lang('default_category'));
    $this->smarty->assign('input_default_category', $this->CreateInputDropdown($id, 'default_category', $categorylist, -1, $this->GetPreference('default_category', '')));

    $this->smarty->assign('submit', $this->CreateInputSubmit ($id, 'optionssubmitbutton', $this->Lang('submit')));

    // Display the populated template
    echo $this->ProcessTemplate ('adminprefs.tpl');
    echo $this->EndTab();
  }

echo $this->EndTabContent();

# vim:ts=4 sw=4 noet
?>
