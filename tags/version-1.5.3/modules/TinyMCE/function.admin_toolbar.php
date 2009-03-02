<?php
$toolbar1 = $this->GetPreference('toolbar1',"cut,paste,pastetext,pasteword,copy,separator,justifyleft,justifycenter,justifyright,justifyfull,separator,styleselect,formatselect,fontselect,fontsizeselect");
$toolbar2 = $this->GetPreference('toolbar2',"bold,italic,underline,strikethrough,advhr,separator,bullist,numlist,separator,outdent,indent,separator,undo,redo,separator,cmslinker,link,unlink,anchor,image,charmap,cleanup,separator,forecolor,backcolor,separator,code,fullscreen,help");
$toolbar3 = $this->GetPreference('toolbar3',"");
$allow_tables = $this->GetPreference('allow_tables',0);
$front_toolbar1 = $this->GetPreference('front_toolbar1',"cut,paste,pastetext,pasteword,copy,separator,justifyleft,justifycenter,justifyright,justifyfull,separator,styleselect,formatselect,fontselect,fontsizeselect");
$front_toolbar2 = $this->GetPreference('front_toolbar2',"bold,italic,underline,strikethrough,advhr,separator,bullist,numlist,separator,outdent,indent,separator,undo,redo,separator,cmslinker,link,unlink,anchor,image,charmap,cleanup,separator,forecolor,backcolor,separator,code,fullscreen,help");
$front_toolbar3 = $this->GetPreference('front_toolbar3',"");
$front_allow_tables = $this->GetPreference('front_allow_tables',0);
$this->smarty->assign('toolbarhelpurl','http://wiki.moxiecode.com/index.php/TinyMCE:Control_reference');
$this->smarty->assign('toolbarhelptext',$this->Lang("toolbarhelptext"));
$this->smarty->assign('startform', $this->CreateFormStart($id, 'savetoolbar', $returnid));
$this->smarty->assign('endform', $this->CreateFormEnd());

$this->smarty->assign('backend_toolbars', $this->Lang('backend_toolbars'));
$this->smarty->assign('toolbar_help', $this->Lang('toolbar_help'));
$this->smarty->assign('toolbar_text', $this->Lang('toolbar_text'));
$this->smarty->assign('toolbar1_input',
$this->CreateInputText($id, 'toolbar1', $toolbar1, 120 ));

$this->smarty->assign('toolbar2_input',
$this->CreateInputText($id, 'toolbar2', $toolbar2, 120 ));

$this->smarty->assign('toolbar3_input',
$this->CreateInputText($id, 'toolbar3', $toolbar3, 120 ));

$this->smarty->assign('allowtables_text', $this->Lang('allowtables'));
$this->smarty->assign('allow_tables_input', $this->CreateInputCheckbox($id, 'allow_tables', '1', $allow_tables ));

$this->smarty->assign('frontend_toolbars', $this->Lang('frontend_toolbars'));
$this->smarty->assign('front_toolbar1_input',
$this->CreateInputText($id, 'front_toolbar1', $front_toolbar1, 120));

$this->smarty->assign('front_toolbar2_input',
$this->CreateInputText($id, 'front_toolbar2', $front_toolbar2, 120));

$this->smarty->assign('front_toolbar3_input',
$this->CreateInputText($id, 'front_toolbar3', $front_toolbar3, 120));

$this->smarty->assign('front_allow_tables_input', $this->CreateInputCheckbox($id, 'front_allow_tables', '1', $front_allow_tables ));

$this->smarty->assign('submit', $this->CreateInputSubmit($id, "submit", $this->Lang("update")));
$this->smarty->assign('submitfront', $this->CreateInputSubmit($id, "submitfront", $this->Lang("update")));
$this->smarty->assign('reset', $this->CreateInputSubmit($id, "reset", $this->Lang("reset"),"","",$this->Lang("confirmreset")));
$this->smarty->assign('resetall', $this->CreateInputSubmit($id, "resetall", $this->Lang("resetall"),"","",$this->Lang("confirmresetall")));

echo $this->ProcessTemplate('toolbarpanel.tpl');
?>