<?php
if (!isset($gCms)) exit;
if (!$this->VisibleToAdminUser()) {
	$this->ShowErrors($this->Lang("accessdenied"));
	return;
}

$toolbar1 = $this->GetPreference('toolbar1',"cut,paste,pastetext,pasteword,copy,separator,justifyleft,justifycenter,justifyright,justifyfull,separator,styleselect,formatselect,fontselect,fontsizeselect");
$toolbar2 = $this->GetPreference('toolbar2',"bold,italic,underline,strikethrough,advhr,separator,bullist,numlist,separator,outdent,indent,separator,undo,redo,separator,cmslinker,link,unlink,anchor,image,charmap,cleanup,separator,forecolor,backcolor,separator,code,fullscreen,help");
$toolbar3 = $this->GetPreference('toolbar3',"");
$allow_tables = $this->GetPreference('allow_tables',0);
//$allowupload = $this->GetPreference('showfilemanagement',0);
//$showtogglebutton=$this->GetPreference("showtogglebutton","0");
$showfilemanagement=$this->GetPreference("showfilemanagement","0");
$restrictdirs=$this->GetPreference("restrictdirs","0");

$advanced_toolbar1 = $this->GetPreference('advanced_toolbar1',"cut,paste,pastetext,pasteword,copy,separator,justifyleft,justifycenter,justifyright,justifyfull,separator,styleselect,formatselect,fontselect,fontsizeselect");
$advanced_toolbar2 = $this->GetPreference('advanced_toolbar2',"bold,italic,underline,strikethrough,advhr,separator,bullist,numlist,separator,outdent,indent,separator,undo,redo,separator,cmslinker,link,unlink,anchor,image,charmap,cleanup,separator,forecolor,backcolor,separator,code,fullscreen,help");
$advanced_toolbar3 = $this->GetPreference('advanced_toolbar3',"");
$advanced_allow_tables = $this->GetPreference('advanced_allow_tables',1);
//$advanced_allowupload = $this->GetPreference('advanced_showfilemanagement',1);
//$advanced_showtogglebutton=$this->GetPreference("advanced_showtogglebutton","1");
$advanced_showfilemanagement=$this->GetPreference("advanced_showfilemanagement","0");

$front_toolbar1 = $this->GetPreference('front_toolbar1',"cut,paste,pastetext,pasteword,copy,separator,justifyleft,justifycenter,justifyright,justifyfull,separator,styleselect,formatselect,fontselect,fontsizeselect");
$front_toolbar2 = $this->GetPreference('front_toolbar2',"bold,italic,underline,strikethrough,advhr,separator,bullist,numlist,separator,outdent,indent,separator,undo,redo,separator,cmslinker,link,unlink,anchor,image,charmap,cleanup,separator,forecolor,backcolor,separator,code,fullscreen,help");
$front_toolbar3 = $this->GetPreference('front_toolbar3',"");
$front_allow_tables = $this->GetPreference('front_allow_tables',0);
//$front_showtogglebutton=$this->GetPreference("front_showtogglebutton","0");

$this->smarty->assign('toolbarhelpurl','http://wiki.moxiecode.com/index.php/TinyMCE:Control_reference');
$this->smarty->assign('toolbarhelptext',$this->Lang("toolbarhelptext"));
$this->smarty->assign('startform', $this->CreateFormStart($id, 'saveprofiles', $returnid));
$this->smarty->assign('endform', $this->CreateFormEnd());
$this->smarty->assign('toolbar_help', $this->Lang('toolbar_help'));
$this->smarty->assign('toolbar_text', $this->Lang('toolbar_text'));

/*
 *
 * Basic backend profile
 *
 */
$this->smarty->assign('backend_toolbars', $this->Lang('backend_toolbars'));

$this->smarty->assign('toolbar1_input',
$this->CreateInputText($id, 'toolbar1', $toolbar1, 120, 1000 ));

$this->smarty->assign('toolbar2_input',
$this->CreateInputText($id, 'toolbar2', $toolbar2, 120, 1000 ));

$this->smarty->assign('toolbar3_input',
$this->CreateInputText($id, 'toolbar3', $toolbar3, 120, 1000 ));

$this->smarty->assign('allowtables_text', $this->Lang('allowtables'));
$this->smarty->assign('allow_tables_input', $this->CreateInputCheckbox($id, 'allow_tables', '1', $allow_tables ));
//$this->smarty->assign('showtogglebutton_text', $this->Lang('showtogglebutton_text'));
//$this->smarty->assign('showtogglebutton_input', $this->CreateInputCheckbox($id, 'showtogglebutton', 1, $showtogglebutton ));
$this->smarty->assign('showfilemanagement_text', $this->Lang('showfilemanagement'));
$this->smarty->assign('showfilemanagement_help', $this->Lang('showfilemanagementhelp'));
$this->smarty->assign('showfilemanagement_input', $this->CreateInputCheckbox($id, 'showfilemanagement', "1", $showfilemanagement ));

$this->smarty->assign('restrictdirs_text', $this->Lang('restrictdirs'));
$this->smarty->assign('restrictdirs_help', $this->Lang('restrictdirshelp'));
$this->smarty->assign('restrictdirs_input', $this->CreateInputCheckbox($id, 'restrictdirs', "1", $restrictdirs ));


/*
 *
 * Advanced backend profile
 *
 */

$this->smarty->assign('advanced_toolbars', $this->Lang('advanced_backend_toolbars'));

$this->smarty->assign('advanced_toolbar1_input',
$this->CreateInputText($id, 'advanced_toolbar1', $advanced_toolbar1, 120, 1000 ));

$this->smarty->assign('advanced_toolbar2_input',
$this->CreateInputText($id, 'advanced_toolbar2', $advanced_toolbar2, 120, 1000 ));

$this->smarty->assign('advanced_toolbar3_input',
$this->CreateInputText($id, 'advanced_toolbar3', $advanced_toolbar3, 120, 1000 ));

$this->smarty->assign('allowtables_text', $this->Lang('allowtables'));
$this->smarty->assign('advanced_allow_tables_input', $this->CreateInputCheckbox($id, 'advanced_allow_tables', '1', $advanced_allow_tables ));
//$this->smarty->assign('showtogglebutton_text', $this->Lang('showtogglebutton_text'));
//$this->smarty->assign('advanced_showtogglebutton_input', $this->CreateInputCheckbox($id, 'advanced_showtogglebutton', 1, $advanced_showtogglebutton ));
$this->smarty->assign('advanced_showfilemanagement_input', $this->CreateInputCheckbox($id, 'advanced_showfilemanagement', "1", $advanced_showfilemanagement ));
/*$this->smarty->assign('allowupload_text', $this->Lang('allowuploadtext'));
$this->smarty->assign('advanced_allowupload_input', $this->CreateInputCheckbox($id, 'advanced_allowupload', "1", $advanced_allowupload ));
*/
/*
 *
 * Frontend profile
 *
 */

$this->smarty->assign('frontend_toolbars', $this->Lang('frontend_toolbars'));
$this->smarty->assign('front_toolbar1_input',
$this->CreateInputText($id, 'front_toolbar1', $front_toolbar1, 120, 1000));

$this->smarty->assign('front_toolbar2_input',
$this->CreateInputText($id, 'front_toolbar2', $front_toolbar2, 120, 1000));

$this->smarty->assign('front_toolbar3_input',
$this->CreateInputText($id, 'front_toolbar3', $front_toolbar3, 120, 1000));

$this->smarty->assign('front_allow_tables_input', $this->CreateInputCheckbox($id, 'front_allow_tables', '1', $front_allow_tables ));
//$this->smarty->assign('showtogglebutton_text', $this->Lang('showtogglebutton_text'));
//$this->smarty->assign('front_showtogglebutton_input', $this->CreateInputCheckbox($id, 'front_showtogglebutton', 1, $front_showtogglebutton ));

$this->smarty->assign('submit', $this->CreateInputSubmit($id, "submitbasic", $this->Lang("saveprofile")));
$this->smarty->assign('submitadvanced', $this->CreateInputSubmit($id, "submitadvancedprofile", $this->Lang("saveprofile")));
$this->smarty->assign('submitfront', $this->CreateInputSubmit($id, "submitfront", $this->Lang("saveprofile")));
$this->smarty->assign('reset', $this->CreateInputSubmit($id, "resettoolbars", $this->Lang("reset"),"","",$this->Lang("confirmreset")));
//$this->smarty->assign('resetall', $this->CreateInputSubmit($id, "resetall", $this->Lang("resetall"),"","",$this->Lang("confirmresetall")));

echo $this->ProcessTemplate('profilespanel.tpl');
?>