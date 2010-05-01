<?php
if (!isset($gCms)) exit;
if (!$this->VisibleToAdminUser()) {
	$this->ShowErrors($this->Lang("accessdenied"));
	return;
}
$newlinestyle = $this->GetPreference('newlinestyle');
$usecompression = $this->GetPreference('usecompression',"0");
$forcecleanpaste = $this->GetPreference('forcecleanpaste',"1");
$relativeurls = $this->GetPreference('relativeurls',"1");
$forcedrootblock = $this->GetPreference('forcedrootblock',"false");
$usestaticconfig = $this->GetPreference('usestaticconfig',"0");
$ignoremodifyfiles = $this->GetPreference('ignoremodifyfiles',"0");
$entityencoding = $this->GetPreference('entityencoding',"raw");
$skinvariation = $this->GetPreference('skinvariation',"");
$bodycss = $this->GetPreference('bodycss');
$includeonlyscreencss = $this->GetPreference('includeonlyscreencss',0);
$customdropdown=$this->GetPreference('customdropdown',
	   "Start expand/collapse-area|{startExpandCollapse id=\'expand1\' title=\'This is my expandable area\'}
End expand/collapse-area|{stopExpandCollapse}
---|---
Insert CMS version info|{cms_version} {cms_versionname}
---|---
Insert Smarty {literal} around selection|{literal}|{/literal}");
$extraconfig = $this->GetPreference('extraconfig');
$extrastyles = $this->GetPreference('extrastyles', "li {\n  margin-left : 16px;\n}");
$startenabled = $this->GetPreference('startenabled',1);
$loadcmslinker = $this->GetPreference('loadcmslinker',1);
$loadstylesheet = $this->GetPreference('loadstylesheet',1);
$cmslinkerstyle = $this->GetPreference('cmslinkerstyle',"a");

//echo "here:".$this->GetPreference("cmslinkerstyle","selflink");
//$dropdownblockformats = $this->GetPreference('dropdownblockformats',$this->defaultblockformats);
$dropdownblockformats = $this->GetPreference('dropdownblockformats');

$this->smarty->assign('advancedwarning', $this->Lang("advancedwarning"));

$this->smarty->assign('startform', $this->CreateFormStart($id, 'saveadvanced', $returnid));

$this->smarty->assign('endform', $this->CreateFormEnd());
$this->smarty->assign('hiddeninfo', $this->CreateInputHidden($id,"tab","advanced"));
$this->smarty->assign('newlinestyle_text', $this->Lang("newlinestyle_text"));

$this->smarty->assign('newlinestyle_input', $this->CreateInputDropdown($id,"newlinestyle",array($this->Lang("pstyle")=>"p",$this->Lang("brstyle")=>"br"),0,$newlinestyle));


$this->smarty->assign('bodycss_text', $this->Lang('bodycss_text'));
$this->smarty->assign('bodycss_input', $this->CreateInputText($id, 'bodycss',$bodycss, 50));
$this->smarty->assign('bodycss_help', $this->Lang('bodycss_help'));

$this->smarty->assign('includeonlyscreencss_text', $this->Lang('includeonlyscreencss_text'));
$this->smarty->assign('includeonlyscreencss_input', $this->CreateInputCheckbox($id, 'includeonlyscreencss',1, $includeonlyscreencss));
$this->smarty->assign('includeonlyscreencss_help', $this->Lang('includeonlyscreencss_help'));

$this->smarty->assign('entityencoding_text', $this->Lang('entityencoding_text'));
$this->smarty->assign('entityencoding_input',$this->CreateInputDropdown($id,"entityencoding",array($this->Lang("rawencoding")=>"raw",$this->Lang("namedencoding")=>"named",$this->Lang("numericencoding")=>"numeric"),0,$entityencoding));

$this->smarty->assign('usecompressiontext', $this->Lang('usecompressiontext'));
$this->smarty->assign('usecompressionhelp', $this->Lang('usecompressionhelp'));
$this->smarty->assign('usecompressioninput', $this->CreateInputCheckbox($id, 'usecompression', 1, $usecompression ));
$this->smarty->assign('dropdownblockformats_text', $this->Lang('dropdownblockformats_text'));
$this->smarty->assign('dropdownblockformats_input', $this->CreateInputText($id, 'dropdownblockformats',$dropdownblockformats, 80,255));

$this->smarty->assign('startenabled_text', $this->Lang('startenabledtext'));
$this->smarty->assign('startenabled_help', $this->Lang('startenabledhelp'));
$this->smarty->assign('startenabled_input', $this->CreateInputCheckbox($id, 'startenabled', 1, $startenabled ));


$this->smarty->assign('loadcmslinker_text', $this->Lang('loadcmslinkertext'));
$this->smarty->assign('loadcmslinker_help', $this->Lang('loadcmslinkerhelp'));
$this->smarty->assign('loadcmslinker_input', $this->CreateInputCheckbox($id, 'loadcmslinker', 1, $loadcmslinker ));

$this->smarty->assign('cmslinkerstyle_text', $this->Lang('cmslinkerstyletext'));
$this->smarty->assign('cmslinkerstyle_input',$this->CreateInputDropdown($id,"cmslinkerstyle",array($this->Lang("ahrefstyle")=>"a",$this->Lang("cmsselflinkstyle")=>"selflink"),-1,$cmslinkerstyle));


$this->smarty->assign('relativeurlstext', $this->Lang('relativeurlstext'));
$this->smarty->assign('relativeurlsinput', $this->CreateInputCheckbox($id, 'relativeurls', "1", $relativeurls ));

$this->smarty->assign('forcedrootblocktext', $this->Lang('forcedrootblocktext'));
$this->smarty->assign('forcedrootblockhelp', $this->Lang('forcedrootblockhelp'));
$this->smarty->assign('forcedrootblockinput', $this->CreateInputCheckbox($id, 'forcedrootblock', "p", $forcedrootblock ));

$this->smarty->assign('forcecleanpaste_text', $this->Lang('forcecleanpastetext'));
$this->smarty->assign('forcecleanpaste_help', $this->Lang('forcecleanpastehelp'));
$this->smarty->assign('forcecleanpaste_input', $this->CreateInputCheckbox($id, 'forcecleanpaste', "1", $forcecleanpaste ));

$this->smarty->assign('usestaticconfig_text', $this->Lang('usestaticconfigtext'));
$this->smarty->assign('usestaticconfig_help', $this->Lang('usestaticconfighelp'));
$this->smarty->assign('usestaticconfig_input', $this->CreateInputCheckbox($id, 'usestaticconfig', "1", $usestaticconfig ));

$this->smarty->assign('ignoremodifyfiles_text', $this->Lang('ignoremodifyfilestext'));
$this->smarty->assign('ignoremodifyfiles_help', $this->Lang('ignoremodifyfileshelp'));
$this->smarty->assign('ignoremodifyfiles_input', $this->CreateInputCheckbox($id, 'ignoremodifyfiles', "1", $ignoremodifyfiles ));


$this->smarty->assign('skinvariationtext', $this->Lang('skinvariationtext'));
$this->smarty->assign('skinvariationinput', $this->CreateInputText($id, 'skinvariation',$skinvariation, 20));

$this->smarty->assign('customdropdowntext', $this->Lang('customdropdowntext'));
$this->smarty->assign('customdropdownhelp', $this->Lang('customdropdownhelp'));
$this->smarty->assign('customdropdowninput', $this->CreateTextArea(false,$id, $customdropdown,'customdropdown',"pagesmalltextarea","","","",'40','5'));

$this->smarty->assign('extraconfigtext', $this->Lang('extraconfigtext'));
$this->smarty->assign('extraconfighelp', $this->Lang('extraconfighelp2'));
$this->smarty->assign('extraconfiginput', $this->CreateTextArea(false,$id, $extraconfig,'extraconfig',"pagesmalltextarea","","","",'40','5'));

$this->smarty->assign('extrastylestext', $this->Lang('extrastylestext'));
$this->smarty->assign('extrastyleshelp', $this->Lang('extrastyleshelp'));
$this->smarty->assign('extrastylesinput', $this->CreateTextArea(false,$id, $extrastyles,'extrastyles',"pagesmalltextarea","","","",'40','5'));

$this->smarty->assign('loadstylesheettext', $this->Lang('loadstylesheettext'));
//$this->smarty->assign('usestaticconfig_help', $this->Lang('usestaticconfighelp'));
$this->smarty->assign('loadstylesheetinput', $this->CreateInputCheckbox($id, 'loadstylesheet', "1", $loadstylesheet ));



$this->smarty->assign('submit', $this->CreateInputSubmit($id, "submitadvanced", $this->Lang("saveadvanced")));
$this->smarty->assign('reset', $this->CreateInputSubmit($id, "resetadvanced", $this->Lang("reset"),"","",$this->Lang("confirmreset")));
$this->smarty->assign('resetall', $this->CreateInputSubmit($id, "resetall", $this->Lang("resetall"),"","",$this->Lang("confirmresetall")));
echo $this->ProcessTemplate('advancedpanel.tpl');


?>
