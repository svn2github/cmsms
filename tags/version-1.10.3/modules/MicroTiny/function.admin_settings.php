<?php
if (!$this->VisibleToAdminUser()) {
  $this->ShowErrors($this->Lang("accessdenied"));
  return;
}
$allowimages = $this->GetPreference('allowimages',"0");
$css_styles = $this->GetPreference('css_styles',"");

$smarty->assign('css_styles_text', $this->Lang('css_styles_text'));
$smarty->assign('css_styles_help', $this->Lang('css_styles_help'));
$smarty->assign('css_styles_help2', $this->Lang('css_styles_help2'));
$smarty->assign('css_styles_input', $this->CreateTextArea(false,$id, $css_styles,'css_styles',"pagesmalltextarea","","","",'40','5'));

$smarty->assign('allowimages_text', $this->Lang('allowimages_text'));
$smarty->assign('allowimages_help', $this->Lang('allowimages_help'));
$smarty->assign('allowimages_input', $this->CreateInputCheckbox($id, 'allowimages', "1", $allowimages ));

$smarty->assign('startform', $this->CreateFormStart($id, 'savesettings', $returnid));
$smarty->assign('endform', $this->CreateFormEnd());

$smarty->assign('show_statusbar',$this->Lang('show_statusbar'));
$smarty->assign('help_show_statusbar',$this->Lang('help_show_statusbar'));
$smarty->assign('input_show_statusbar',$this->CreateInputCheckbox($id,'show_statusbar', 1, $this->GetPreference('show_statusbar')));

$smarty->assign('allow_resize',$this->Lang('allow_resize'));
$smarty->assign('help_allow_resize',$this->Lang('help_allow_resize'));
$smarty->assign('input_allow_resize',$this->CreateInputCheckbox($id,'allow_resize',1,$this->GetPreference('allow_resize')));

$smarty->assign('submit', $this->CreateInputSubmit($id, "savesettings", $this->Lang("savesettings")));

echo $this->ProcessTemplate('settings.tpl');

?>

