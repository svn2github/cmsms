<?php

$skin = $this->GetPreference('skin',"default");

$source_formatting = intval($this->GetPreference('source_formatting'));
$showtogglebutton=$this->GetPreference("showtogglebutton","1");
$editor_width = intval($this->GetPreference('editor_width'));
$editor_width_auto = intval($this->GetPreference('editor_width_auto'));
$editor_width_unit = $this->GetPreference('editor_width_unit');
$imagebrowserstyle = intval($this->GetPreference('imagebrowserstyle'));
$editor_height = intval($this->GetPreference('editor_height'));
$editor_height_auto = intval($this->GetPreference('editor_height_auto'));
$editor_height_unit = $this->GetPreference('editor_height_unit');
$filepickerstyle = $this->GetPreference('filepickerstyle',"both");
$fpwidth = $this->GetPreference('fpwidth',"700");
$fpheight = $this->GetPreference('fpheight',"500");
$allowupload = $this->GetPreference('allowupload',"0");
$show_path = $this->GetPreference('show_path');
$striptags = $this->GetPreference('striptags');
$timeformat = $this->GetPreference('timeformat',"%H:%M:%S");
$dateformat = $this->GetPreference('dateformat',"%Y-%m-%d");
$showthumbnailfiles=$this->GetPreference('showthumbnailfiles',"0");


$this->smarty->assign('startform', $this->CreateFormStart($id, 'savesettings', $returnid));
$this->smarty->assign('endform', $this->CreateFormEnd());
$this->smarty->assign('hiddeninfo', $this->CreateInputHidden($id,"tab","settings"));


$this->smarty->assign('striptags_text', $this->Lang('stripbackgroundtags'));
$this->smarty->assign('striptags_input', $this->CreateInputCheckbox($id, 'striptags', 'true', $striptags ));

$this->smarty->assign("auto_text", $this->Lang("auto"));
$this->smarty->assign("or_text", $this->Lang("or"));

$this->smarty->assign('editor_width_text', $this->Lang('editor_width_text'));
$this->smarty->assign('editor_width_auto', $this->CreateInputCheckbox($id, 'editor_width_auto', 1, $editor_width_auto));
$this->smarty->assign('editor_width', $this->CreateInputText($id, 'editor_width', $editor_width,5,8));
$this->smarty->assign('editor_width_unit', $this->CreateInputDropdown($id,"editor_width_unit",array("px"=>"","%"=>"%","em"=>"em"),0,$editor_width_unit));

$this->smarty->assign('editor_height_text', $this->Lang('editor_height_text'));
$this->smarty->assign('editor_height_auto', $this->CreateInputCheckbox($id, 'editor_height_auto', 1, $editor_height_auto));
$this->smarty->assign('editor_height', $this->CreateInputText($id, 'editor_height', $editor_height,5,8));
$this->smarty->assign('editor_height_unit', $this->CreateInputDropdown($id,"editor_height_unit",array("px"=>"","%"=>"%","em"=>"em"),0,$editor_height_unit));

$this->smarty->assign('filepickerstyletext', $this->Lang("filepickerstyle"));
$filepickerstyles=array($this->Lang("filenameonly")=>"filename",
$this->Lang("thumbnailsonly")=>"thumbnails",
$this->Lang("filenameandthumbnails")=>"both");
$this->smarty->assign('filepickerstyleinput', $this->CreateInputDropdown($id,"filepickerstyle",$filepickerstyles,0,$filepickerstyle));

$this->smarty->assign('filepickersizetext', $this->Lang("filepickersize"));
$this->smarty->assign('fpwidthinput', $this->CreateInputText($id,"fpwidth",$fpwidth,4,4));
$this->smarty->assign('fpheightinput', $this->CreateInputText($id,"fpheight",$fpheight,4,4));

$this->smarty->assign('allowupload_text', $this->Lang('allowuploadtext'));
$this->smarty->assign('allowupload_input', $this->CreateInputCheckbox($id, 'allowupload', "1", $allowupload ));

$this->smarty->assign('showthumbnailfiles_text', $this->Lang('showthumbnailfilestext'));
$this->smarty->assign('showthumbnailfiles_input', $this->CreateInputCheckbox($id, 'showthumbnailfiles', "1", $showthumbnailfiles ));

$this->smarty->assign('source_formatting_text', $this->Lang('source_formatting_text'));
$this->smarty->assign('source_formatting_input', $this->CreateInputCheckbox($id, 'source_formatting', 1, $source_formatting ));

$this->smarty->assign('datetimeformat_text', $this->Lang('datetimeformat_text'));
$this->smarty->assign('datetimeformat_help', $this->Lang('datetimeformat_help'));
$this->smarty->assign('timetext', $this->Lang('timetext'));
$this->smarty->assign('datetext', $this->Lang('datetext'));

$this->smarty->assign('dateformat_input', $this->CreateInputText($id,"dateformat",$dateformat,12,30));
$this->smarty->assign('timeformat_input', $this->CreateInputText($id,"timeformat",$timeformat,12,30));

$dn = dirname(__FILE__).'/tinymce/jscripts/tiny_mce/themes/advanced/skins/';
if( is_dir( $dn ) )
{
	$skins_available = Array();
	$d = dir($dn);
	while ($entry = $d->read()) {
		if ($entry[0]==".") continue;
    if (!is_dir($dn.$entry)) continue;
		$skins_available[$entry]=$entry;
	}
	$d->close();

	if( count($skins_available) )
	{
		$this->smarty->assign('skinstext', $this->Lang('skinstext'));
		$this->smarty->assign('skinsinput', $this->CreateInputDropdown($id,"skin",$skins_available,0,$skin));
	}
}

$this->smarty->assign('showtogglebutton_text', $this->Lang('showtogglebutton_text'));
$this->smarty->assign('showtogglebutton_input', $this->CreateInputCheckbox($id, 'showtogglebutton', 1, $showtogglebutton ));

$this->smarty->assign('imagebrowserstyle_text', $this->Lang('showtogglebutton'));
$this->smarty->assign('imagebrowserstyle_input', $this->CreateInputDropdown($id,"imagebrowserstyle",
array("px"=>"","%"=>"%","em"=>"em"),0,$imagebrowserstyle));

$this->smarty->assign('show_path_text', $this->Lang('show_path_text'));
$this->smarty->assign('show_path_input', $this->CreateInputCheckbox($id, 'show_path', 1, $show_path) );

$this->smarty->assign('submit', $this->CreateInputSubmit($id, "submit", $this->Lang("update")));
$this->smarty->assign('reset', $this->CreateInputSubmit($id, "reset", $this->Lang("reset"),"","",$this->Lang("confirmreset")));

echo $this->ProcessTemplate('settingspanel.tpl');
?>
