<?php
if (!isset($gCms)) exit;
if (!$this->VisibleToAdminUser()) {
	$this->ShowErrors($this->Lang("accessdenied"));
	return;
}
$css_styles = $this->GetPreference('css_styles','');

$this->smarty->assign('startform', $this->CreateFormStart($id, 'savestyles', $returnid));
$this->smarty->assign('endform', $this->CreateFormEnd());

$this->smarty->assign('styles_help', $this->Lang('styles_help'));

$this->smarty->assign('css_styles_text', $this->Lang('css_styles_text'));
$this->smarty->assign('css_styles_input', $this->CreateTextArea(false,$id, $css_styles,'css_styles',"pagesmalltextarea","","","",'40','5'));
$this->smarty->assign('submit', $this->CreateInputSubmit($id, "submitstyles", $this->Lang("savestyles")));
//$this->smarty->assign('reset', $this->CreateInputSubmit($id, "resetstyles", $this->Lang("reset"),"","",$this->Lang("confirmreset")));


echo $this->ProcessTemplate('stylespanel.tpl');

?>
