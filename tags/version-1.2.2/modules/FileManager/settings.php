<?php
//$advancedmode=$this->GetPreference("");
$this->smarty->assign('formstart',$this->CreateFormStart($id, 'savesettings', $returnid));
$this->smarty->assign('path',$this->CreateInputHidden($id,"path",$path));

$this->smarty->assign('advancedmodetext',$this->Lang("enableadvanced"));
$this->smarty->assign('advancedmodeinput',$this->CreateInputCheckbox($id,"advancedmode","1",$advancedmode));
$this->smarty->assign('advancedmodehelp',$this->Lang("advancedhelp"));

$this->smarty->assign('showhiddenfilestext',$this->Lang("showhiddenfiles"));
$this->smarty->assign('showhiddenfilesinput',$this->CreateInputCheckbox($id,"showhiddenfiles","1",$showhiddenfiles));
$this->smarty->assign('showhiddenfileshelp',$this->Lang("showhiddenfileshelp"));

$this->smarty->assign('iconsizetext',$this->Lang("iconsize"));
$this->smarty->assign('iconsizeinput',$this->CreateInputDropDown($id,"iconsize",array($this->Lang("largeicons")=>"32px",$this->Lang("smallicons")=>"16px"),"",$iconsize));

$boxes=array();
for($i=1; $i<11; $i++) $boxes["$i"]="$i";
$this->smarty->assign('uploadboxestext',$this->Lang("uploadboxes"));
$this->smarty->assign('uploadboxesinput',$this->CreateInputDropDown($id,"uploadboxes",$boxes,"",$uploadboxes));

$uploaders=array($this->Lang("uploaderstandard")=>1/*,$this->Lang("uploaderdom")=>2*/,$this->Lang("uploaderpostlet")=>3);
$this->smarty->assign('uploadmethodtext',$this->Lang("uploadmethod"));
$this->smarty->assign('uploadmethodinput',$this->CreateInputDropDown($id,"uploadmethod",$uploaders,"",$uploadmethod));

$this->smarty->assign('submit',  $this->CreateInputSubmit($id,"save",$this->Lang("savesettings")));
$this->smarty->assign('formend',$this->CreateFormEnd());
echo $this->ProcessTemplate('settings.tpl');

?>
