<?php

if (!$this->VisibleToAdminUser()) {
	$this->ShowErrors($this->Lang("accessdenied"));
	return;
}
if (!isset($params["tab"]))$params["tab"]="settings";

$config=$this->cms->GetConfig();

$file=@file($config["root_url"]."/modules/TinyMCE/tinyconfig.php");
if (!$file) {
	$this->ShowErrors($this->Lang("cannotreadconfig"));
}


echo $this->StartTabHeaders();
echo $this->SetTabHeader("settings",$this->Lang("settings"), ($params["tab"] == "settings")?true:false);
echo $this->SetTabHeader("toolbar",$this->Lang("toolbar_tab"), ($params["tab"] == "toolbar")?true:false);
echo $this->SetTabHeader("plugins",$this->Lang("plugins_tab"), ($params["tab"] == "plugins")?true:false);
echo $this->SetTabHeader("styles",$this->Lang("styles_tab"), ($params["tab"] == "styles")?true:false);
echo $this->SetTabHeader("advanced",$this->Lang("advanced_tab"), ($params["tab"] == "advanced")?true:false);
echo $this->EndTabHeaders();

echo $this->StartTabContent();

echo $this->StartTab("settings");

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
echo $this->EndTab();


echo $this->StartTab("toolbar");
$toolbar1 = $this->GetPreference('toolbar1',"cut,paste,copy,separator,justifyleft,justifycenter,justifyright,justifyfull,separator,styleselect,formatselect,fontselect,fontsizeselect");
$toolbar2 = $this->GetPreference('toolbar2',"bold,italic,underline,strikethrough,advhr,separator,bullist,numlist,separator,outdent,indent,separator,undo,redo,separator,cmslinker,link,unlink,anchor,image,charmap,cleanup,separator,forecolor,backcolor,separator,code,fullscreen,help");
$allow_tables = $this->GetPreference('allow_tables',0);
$front_toolbar1 = $this->GetPreference('front_toolbar1',"cut,paste,copy,separator,justifyleft,justifycenter,justifyright,justifyfull,separator,styleselect,formatselect,fontselect,fontsizeselect");
$front_toolbar2 = $this->GetPreference('front_toolbar2',"bold,italic,underline,strikethrough,advhr,separator,bullist,numlist,separator,outdent,indent,separator,undo,redo,separator,cmslinker,link,unlink,anchor,image,charmap,cleanup,separator,forecolor,backcolor,separator,code,fullscreen,help");
$front_allow_tables = $this->GetPreference('front_allow_tables',0);
$this->smarty->assign('toolbarhelpurl','http://wiki.moxiecode.com/index.php/TinyMCE:Control_reference');
$this->smarty->assign('toolbarhelptext',$this->Lang("toolbarhelptext"));
$this->smarty->assign('startform', $this->CreateFormStart($id, 'savetoolbar', $returnid));
$this->smarty->assign('endform', $this->CreateFormEnd());

$this->smarty->assign('backend_toolbars', $this->Lang('backend_toolbars'));
$this->smarty->assign('toolbar_help', $this->Lang('toolbar_help'));
$this->smarty->assign('toolbar_text', $this->Lang('toolbar_text'));
$this->smarty->assign('toolbar1_input',
$this->CreateInputText($id, 'toolbar1', $toolbar1, 80, 255 ));

$this->smarty->assign('toolbar2_input',
$this->CreateInputText($id, 'toolbar2', $toolbar2, 80, 255 ));
 
$this->smarty->assign('allowtables_text', $this->Lang('allowtables'));
$this->smarty->assign('allow_tables_input', $this->CreateInputCheckbox($id, 'allow_tables', '1', $allow_tables ));

$this->smarty->assign('frontend_toolbars', $this->Lang('frontend_toolbars'));
$this->smarty->assign('front_toolbar1_input',
$this->CreateInputText($id, 'front_toolbar1', $front_toolbar1, 80, 255 ));

$this->smarty->assign('front_toolbar2_input',
$this->CreateInputText($id, 'front_toolbar2', $front_toolbar2, 80, 255 ));

$this->smarty->assign('front_allow_tables_input', $this->CreateInputCheckbox($id, 'front_allow_tables', '1', $front_allow_tables ));



$this->smarty->assign('submit', $this->CreateInputSubmit($id, "submit", $this->Lang("update")));
$this->smarty->assign('submitfront', $this->CreateInputSubmit($id, "submitfront", $this->Lang("update")));
$this->smarty->assign('reset', $this->CreateInputSubmit($id, "reset", $this->Lang("reset"),"","",$this->Lang("confirmreset")));
$this->smarty->assign('resetall', $this->CreateInputSubmit($id, "resetall", $this->Lang("resetall"),"","",$this->Lang("confirmresetall")));

echo $this->ProcessTemplate('toolbarpanel.tpl');
echo $this->EndTab();

echo $this->StartTab("plugins");
$plugins = $this->GetPreference('plugins',$this->plugins_default_enabled);
$this->smarty->assign('startform', $this->CreateFormStart($id, 'saveplugins', $returnid));
$this->smarty->assign('endform', $this->CreateFormEnd());
$plugins_available = Array();
$d = dir(dirname(__FILE__).'/tinymce/jscripts/tiny_mce/plugins');

$exclude = array( '.', '..', 'readme.txt', 'cleanup', 'autosave','safari','table',"index.html","cmsmslink","paste","simplepaste");

$pluginsarray=explode(",",$plugins);

while ($entry = $d->read()) {
	if ($entry[0]==".") continue;
	if ( !in_array($entry, $exclude) ) {
		//Fix this!!!
		$val=0;
		for ($i=0; $i<count($pluginsarray); $i++) {
			if ($pluginsarray[$i]==$entry) {
				$val=1; break;
			}
		}
		$url="http://wiki.moxiecode.com/index.php/TinyMCE:Plugins/".$entry;
		$name = "<a href='".$url."' target='_blank'>".$entry."</a>";
		
		$plugins_available[]=array('id' => $entry,
				'name' => $name,
				'value' => $this->CreateInputCheckbox($id, $entry, 1, $val ));
	}
}
$d->close();
sort($plugins_available);

$this->smarty->assign('plugins_help', $this->Lang('plugins_help'));
$this->smarty->assign('plugins_text', $this->Lang('plugins_text'));
$this->smarty->assign('plugins_list', $plugins_available );
$this->smarty->assign('submit', $this->CreateInputSubmit($id, "submit", $this->Lang("saveplugins")));
$this->smarty->assign('reset', $this->CreateInputSubmit($id, "reset", $this->Lang("reset"),"","",$this->Lang("confirmreset")));
$this->smarty->assign('resetall', $this->CreateInputSubmit($id, "resetall", $this->Lang("resetall"),"","",$this->Lang("confirmresetall")));

echo $this->ProcessTemplate('pluginspanel.tpl');


echo $this->EndTab();

echo $this->StartTab("styles");
$css_styles = $this->GetPreference('css_styles','');

$this->smarty->assign('startform', $this->CreateFormStart($id, 'savestyles', $returnid));
$this->smarty->assign('endform', $this->CreateFormEnd());

$this->smarty->assign('styles_help', $this->Lang('styles_help'));

$this->smarty->assign('css_styles_text', $this->Lang('css_styles_text'));
$this->smarty->assign('css_styles_input', $this->CreateTextArea(false,$id, $css_styles,'css_styles',"pagesmalltextarea","","","",'40','5'));
$this->smarty->assign('submit', $this->CreateInputSubmit($id, "submit", $this->Lang("update")));
$this->smarty->assign('reset', $this->CreateInputSubmit($id, "reset", $this->Lang("reset"),"","",$this->Lang("confirmreset")));
$this->smarty->assign('resetall', $this->CreateInputSubmit($id, "resetall", $this->Lang("resetall"),"","",$this->Lang("confirmresetall")));

echo $this->ProcessTemplate('stylespanel.tpl');

echo $this->EndTab();

echo $this->StartTab("advanced");
$newlinestyle = $this->GetPreference('newlinestyle');
$usecompression = $this->GetPreference('usecompression',"0");
$forcecleanpaste = $this->GetPreference('forcecleanpaste',"1");
$relativeurls = $this->GetPreference('relativeurls',"1");
$forcedrootblock = $this->GetPreference('forcedrootblock',"false");
$entityencoding = $this->GetPreference('entityencoding',"raw");
$skinvariation = $this->GetPreference('skinvariation',"");
$bodycss = $this->GetPreference('bodycss');
$customdropdown=$this->GetPreference('customdropdown',
	   "Start expand/collapse-area|{startExpandCollapse id=\'expand1\' title=\'This is my expandable area\'}
End expand/collapse-area|{stopExpandCollapse}
---|---
Insert CMS version info|{cms_version} {cms_versionname}");
$extraconfig = $this->GetPreference('extraconfig');

$loadcmslinker = $this->GetPreference('loadcmslinker',1);
$cmslinkerstyle = $this->GetPreference('cmslinkerstyle',"selflink");


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

$this->smarty->assign('entityencoding_text', $this->Lang('entityencoding_text'));
$this->smarty->assign('entityencoding_input',$this->CreateInputDropdown($id,"entityencoding",array($this->Lang("rawencoding")=>"raw",$this->Lang("namedencoding")=>"named",$this->Lang("numericencoding")=>"numeric"),0,$entityencoding));

$this->smarty->assign('usecompressiontext', $this->Lang('usecompressiontext'));
$this->smarty->assign('usecompressionhelp', $this->Lang('usecompressionhelp'));
$this->smarty->assign('usecompressioninput', $this->CreateInputCheckbox($id, 'usecompression', 1, $usecompression ));
$this->smarty->assign('dropdownblockformats_text', $this->Lang('dropdownblockformats_text'));
$this->smarty->assign('dropdownblockformats_input', $this->CreateInputText($id, 'dropdownblockformats',$dropdownblockformats, 80,255));

$this->smarty->assign('loadcmslinker_text', $this->Lang('loadcmslinkertext'));
$this->smarty->assign('loadcmslinker_help', $this->Lang('loadcmslinkerhelp'));
$this->smarty->assign('loadcmslinker_input', $this->CreateInputCheckbox($id, 'loadcmslinker', 1, $loadcmslinker ));


$this->smarty->assign('cmslinkerstyle_text', $this->Lang('cmslinkerstyletext'));
$this->smarty->assign('cmslinkerstyle_input',$this->CreateInputDropdown($id,"cmslinkerstyle",array($this->Lang("ahrefstyle")=>"a",$this->Lang("cmsselflinkstyle")=>"selflink"),0,$cmslinkerstyle));


$this->smarty->assign('relativeurlstext', $this->Lang('relativeurlstext'));
$this->smarty->assign('relativeurlsinput', $this->CreateInputCheckbox($id, 'relativeurls', "1", $relativeurls ));

$this->smarty->assign('forcedrootblocktext', $this->Lang('forcedrootblocktext'));
$this->smarty->assign('forcedrootblockhelp', $this->Lang('forcedrootblockhelp'));
$this->smarty->assign('forcedrootblockinput', $this->CreateInputCheckbox($id, 'forcedrootblock', "p", $forcedrootblock ));

$this->smarty->assign('forcecleanpaste_text', $this->Lang('forcecleanpastetext'));
$this->smarty->assign('forcecleanpaste_help', $this->Lang('forcecleanpastehelp'));
$this->smarty->assign('forcecleanpaste_input', $this->CreateInputCheckbox($id, 'forcecleanpaste', "1", $forcecleanpaste ));

$this->smarty->assign('skinvariationtext', $this->Lang('skinvariationtext'));
$this->smarty->assign('skinvariationinput', $this->CreateInputText($id, 'skinvariation',$skinvariation, 20));

$this->smarty->assign('customdropdowntext', $this->Lang('customdropdowntext'));
$this->smarty->assign('customdropdownhelp', $this->Lang('customdropdownhelp'));
$this->smarty->assign('customdropdowninput', $this->CreateTextArea(false,$id, $customdropdown,'customdropdown',"pagesmalltextarea","","","",'40','5'));

$this->smarty->assign('extraconfigtext', $this->Lang('extraconfigtext'));
$this->smarty->assign('extraconfighelp', $this->Lang('extraconfighelp'));
$this->smarty->assign('extraconfiginput', $this->CreateTextArea(false,$id, $extraconfig,'extraconfig',"pagesmalltextarea","","","",'40','5'));





$this->smarty->assign('submit', $this->CreateInputSubmit($id, "submit", $this->Lang("update")));
$this->smarty->assign('reset', $this->CreateInputSubmit($id, "reset", $this->Lang("reset"),"","",$this->Lang("confirmreset")));
		$this->smarty->assign('resetall', $this->CreateInputSubmit($id, "resetall", $this->Lang("resetall"),"","",$this->Lang("confirmresetall")));
echo $this->ProcessTemplate('advancedpanel.tpl');

echo $this->EndTab();


echo $this->EndTabContent();

echo "\n<div class=\"pageoverflow\" style=\"margin-top: 1em;\">\n";
echo $this->CreateFormStart($id);
echo $this->CreateTextArea(true,$id,$this->Lang("testareatext"),"testarea","","","","",80,15,"TinyMCE");
echo $this->CreateFormEnd();
echo "</div>\n";

?>