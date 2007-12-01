<?php
/*
#CMS - CMS Made Simple
#(c)2004 by Simon Brown (simon@uptoeleven.ws)
#This project's homepage is: http://cmsmadesimple.sf.net
#
#This program is free software; you can redistribute it and/or modify
#it under the terms of the GNU General Public License as published by
#the Free Software Foundation; either version 2 of the License, or
#(at your option) any later version.
#
#This program is distributed in the hope that it will be useful,
#but WITHOUT ANY WARRANTY; without even the implied warranty of
#MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
#GNU General Public License for more details.
#You should have received a copy of the GNU General Public License
#along with this program; if not, write to the Free Software
#Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
#
#$Id$
#
*/

class TinyMCE extends CMSModule {
  var $defaultblockformats='p,div,h1,h2,h3,h4,h5,h6,div,blockquote,dt,dd,code,samp';
  
	function GetName() {
		return 'TinyMCE';
	}
	
  function GetFriendlyName() {
		return $this->Lang("friendlyname");
	}

	function HasAdmin() {
		return true;
	}

	function GetVersion()	{
		return '2.2.6';
	}

	function IsWYSIWYG() {
		return true;
	}

	function VisibleToAdminUser() {
		return $this->CheckPermission('Modify Site Preferences');
	}	


	function WYSIWYGTextarea($name='textarea',$columns='80',$rows='15',$encoding='',$content='',$stylesheet='') {
	  
	  if (!$this->wysiwygactive && isset($_SESSION["tiny_live_textareas"])) {
        $_SESSION["tiny_live_textareas"]=="";
	      unset($_SESSION["tiny_live_textareas"]);
      }
	  
	  
	  		$this->wysiwygactive=true;
		global $gCms;
		$variables = &$gCms->variables;

		if ($stylesheet != '') {
      //$this->SetPreference("live_templateid",substr($stylesheet, strpos($stylesheet,"=")+1));
			//$variables['tinymce_templateid'] = substr($stylesheet, strpos($stylesheet,"=")+1);
	    $_SESSION["tiny_live_templateid"]=substr($stylesheet, strpos($stylesheet,"=")+1);
	 	} else {
	 	  $tplops=$gCms->GetTemplateOperations();
	 	  $templateid=$tplops->LoadDefaultTemplate();
	 	  //$this->SetPreference("live_templateid",$templateid->id);
	 	  $_SESSION["tiny_live_templateid"]=$templateid->id;
	 	  
//		  $this->RemovePreference("live_templateid");
			//$variables['tinymce_templateid'] = '';
		}
/*		if (!array_key_exists('tinymce_textareas', $gCms->variables))
		{
			$variables['tinymce_textareas'] = array();
		}*/
//		array_push($variables['tinymce_textareas'], $name);
    if (!isset($_SESSION["tiny_live_textareas"])) {
      //$this->SetPreference("live_textareas",$name);
      $_SESSION["tiny_live_textareas"]=$name;
    } else {
      //$this->SetPreference("live_textareas",$this->GetPreference("live_textareas").",".$name);
      $_SESSION["tiny_live_textareas"].=",".$name;
    }
    $result='<textarea id="'.$name.'" name="'.$name.'" cols="'.$columns.'" rows="'.($rows+5).'">'.cms_htmlentities($content,ENT_NOQUOTES,get_encoding($encoding)).'</textarea>';
    
    if ($this->GetPreference("showtogglebutton",0)==1) {
      $result.="<br/><input type='checkbox' checked='1' onclick='tinyMCE.execCommand(\"mceToggleEditor\", false, \"$name\");' id='check_$name' CHECKED><label for='check_$name'>".$this->Lang("togglewysiwyg")."</label>";
    }
		return $result;
	}

	function WYSIWYGPageFormSubmit() {
		return 'tinyMCE.triggerSave();';
	}

	function ContentPostRender(&$content) {
	  //You only get here when in frontend
	  //print r($this->cms->siteprefs); die();
	  if (!isset($this->cms->siteprefs['frontendwysiwyg'])) return $content;
	  if ($this->cms->siteprefs['frontendwysiwyg']!=$this->GetName()) return $content;
	  $pos=strpos(strtolower($content),"<body");
	  if ($pos===false) return $content;
	  $content=substr($content,0,$pos).$this->WYSIWYGGenerateHeader().substr($content,$pos);
	  return $content;
	}
	
	function WYSIWYGGenerateHeader() {
	  
	  global $gCms;
    $_SESSION["tiny_live_language"]=$this->GetLanguageId();
    
	  //$this->SetPreference("live_language",$this->GetLanguageId());
	  $basepath = $gCms->config["root_url"].'/modules/TinyMCE/tinymce/jscripts/tiny_mce/';
	  $output="";
	
	  //if ($this->GetPreference('live_textareas')!="") {
	  //if (isset($_SESSION["tiny_live_textareas"]) && ($_SESSION["tiny_live_textareas"]!="")) {
	  if ($this->wysiwygactive) {
      $output='
		  <script type="text/javascript" src="'.$gCms->config['root_url'].'/modules/TinyMCE/tinymce/jscripts/tiny_mce/tiny_mce.js"></script>
      <script type="text/javascript" src="'.$gCms->config['root_url'].'/modules/TinyMCE/tinyconfig.php"></script>
      ';
      //$_SESSION["tiny_live_textareas"]="";
      //unset($_SESSION["tiny_live_textareas"]);      
	   } else {
	    $output="<!-- TinyMCE Session vars empty -->";
	  }

	  return $output;
	}

  function MinimumCMSVersion() {
		return "1.2.1";
  }
	
	function GetHelp($lang='en_US') {
		return $this->Lang('help');
	}

	function GetAuthor() {
		return 'Simon Brown, Stefan R&ouml;llin and Morten Poulsen';
	}

	function GetAuthorEmail()	{
		return '&lt;morten@poulsen.org&gt;';
	}

	function GetChangeLog()	{
		return $this->Lang("changelog");
	}


	function DisplaySettings($id, &$params, $returnid, $message='')	{
		$striptags = $this->GetPreference('striptags');
		$allow_tables = $this->GetPreference('allow_tables');
		
		$source_formatting = intval($this->GetPreference('source_formatting'));
		$onlyxhtmlelements  = intval($this->GetPreference('onlyxhtmlelements',0));
		$dropdownblockformats = $this->GetPreference('dropdownblockformats',$this->defaultblockformats);

		$editor_width = intval($this->GetPreference('editor_width'));
		$editor_width_auto = intval($this->GetPreference('editor_width_auto'));
		$editor_width_unit = $this->GetPreference('editor_width_unit');

		$editor_height = intval($this->GetPreference('editor_height'));
		$editor_height_auto = intval($this->GetPreference('editor_height_auto'));
		$editor_height_unit = $this->GetPreference('editor_height_unit');
		$newlinestyle = $this->GetPreference('newlinestyle');
		$entityencoding = $this->GetPreference('entityencoding',"raw");
		$language = $this->GetPreference('language');
		$bodycss = $this->GetPreference('bodycss');
		$replace_cms_selflink = $this->GetPreference('replace_cms_selflink');
		$enable_thumbs = $this->GetPreference('enable_thumbs');
		$show_path = $this->GetPreference('show_path');

		$this->smarty->assign('startform', $this->CreateFormStart($id, 'savesettings', $returnid));
		$this->smarty->assign('endform', $this->CreateFormEnd());

		$this->smarty->assign('logoimg', '<a href="http://tinymce.moxiecode.com" target="_blank"><img src="'.$this->cms->config["root_url"].'/modules/TinyMCE/powered_by_tinymce_v2.png" border="0" width="88" height="32" alt="Powered by TinyMCE" /></a>');

		$this->smarty->assign('striptags_text', $this->Lang('stripbackgroundtags'));
		$this->smarty->assign('striptags_input', $this->CreateInputCheckbox($id, 'striptags', 'true', $striptags ));
		
		$this->smarty->assign('allowtables_text', $this->Lang('allowtables'));
		$this->smarty->assign('allowtables_input', $this->CreateInputCheckbox($id, 'allowtables', '1', $allow_tables ));

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

		$this->smarty->assign('source_formatting_text', $this->Lang('source_formatting_text'));
		$this->smarty->assign('source_formatting_input', $this->CreateInputCheckbox($id, 'source_formatting', 1, $source_formatting ));
		
		$this->smarty->assign('onlyxhtmlelements_text', $this->Lang('onlyxhtmlelements_text'));
		$this->smarty->assign('onlyxhtmlelements_input', $this->CreateInputCheckbox($id, 'onlyxhtmlelements', 1, $onlyxhtmlelements ));
		
		$this->smarty->assign('showtogglebutton_text', $this->Lang('showtogglebutton_text'));
		$this->smarty->assign('showtogglebutton_input', $this->CreateInputCheckbox($id, 'showtogglebutton', 1, $this->GetPreference("showtogglebutton") ));

		$this->smarty->assign('newlinestyle_text', $this->Lang("newlinestyle_text"));
		$this->smarty->assign('newlinestyle_input', $this->CreateInputDropdown($id,"newlinestyle",array($this->Lang("pstyle")=>"p",$this->Lang("brstyle")=>"br"),0,$newlinestyle));
		
//		$this->smarty->assign('replace_cms_selflink_text', $this->Lang('replace_cms_selflink_text'));
//		$this->smarty->assign('replace_cms_selflink_input',	$this->CreateInputCheckbox($id, 'replace_cms_selflink', 1, $replace_cms_selflink) );

		$this->smarty->assign('enable_thumbs_text', $this->Lang('enable_thumbs_text'));
		$this->smarty->assign('enable_thumbs_input',	$this->CreateInputCheckbox($id, 'enable_thumbs', 1, $enable_thumbs) );

		$this->smarty->assign('show_path_text', $this->Lang('show_path_text'));
		$this->smarty->assign('show_path_input', $this->CreateInputCheckbox($id, 'show_path', 1, $show_path) );

		/*		$this->smarty->assign('language_text', $this->Lang('language_text'));
		$this->smarty->assign('language_input', $this->CreateInputText($id, 'language', $language, 10, 255 ));
		*/
		$this->smarty->assign('bodycss_text', $this->Lang('bodycss_text'));
		$this->smarty->assign('bodycss_input', $this->CreateInputText($id, 'bodycss',$bodycss, 50));
		$this->smarty->assign('bodycss_help', $this->Lang('bodycss_help'));
		
		$this->smarty->assign('entityencoding_text', $this->Lang('entityencoding_text'));
		$this->smarty->assign('entityencoding_input',$this->CreateInputDropdown($id,"entityencoding",array($this->Lang("rawencoding")=>"raw",$this->Lang("namedencoding")=>"named",$this->Lang("numericencoding")=>"numeric"),0,$entityencoding));
		
		
		$this->smarty->assign('dropdownblockformats_text', $this->Lang('dropdownblockformats_text'));
		$this->smarty->assign('dropdownblockformats_input', $this->CreateInputText($id, 'dropdownblockformats',$dropdownblockformats, 50));

		$this->smarty->assign('submit', $this->CreateInputSubmit($id, "submit", $this->Lang("update")));

		return $this->ProcessTemplate('settingspanel.tpl');
	}

	function DisplayToolbar($id, &$params, $returnid, $message='') {
		
		$toolbar1 = $this->GetPreference('toolbar1');
		$toolbar2 = $this->GetPreference('toolbar2');


		$this->smarty->assign('startform', $this->CreateFormStart($id, 'savetoolbar', $returnid));
		$this->smarty->assign('endform', $this->CreateFormEnd());

		$this->smarty->assign('logoimg', '<a href="http://tinymce.moxiecode.com" target="_blank"><img src="'.$this->cms->config["root_url"].'/modules/TinyMCE/powered_by_tinymce_v2.png" border="0" width="88" height="32" alt="Powered by TinyMCE" /></a>');


		$this->smarty->assign('toolbar_help', $this->Lang('toolbar_help'));
		$this->smarty->assign('toolbar_text', $this->Lang('toolbar_text'));
		$this->smarty->assign('toolbar1_input',
		$this->CreateInputText($id, 'toolbar1', $toolbar1, 60, 255 ));

		$this->smarty->assign('toolbar2_input',
		$this->CreateInputText($id, 'toolbar2', $toolbar2, 60, 255 ));


		$this->smarty->assign('submit', $this->CreateInputSubmit($id, "submit", $this->Lang("update")));

		return $this->ProcessTemplate('toolbarpanel.tpl');
	}

	function DisplayStyles($id, &$params, $returnid, $message='')	{
	  $css_styles = $this->GetPreference('css_styles','');


	  $this->smarty->assign('startform', $this->CreateFormStart($id, 'savestyles', $returnid));
	  $this->smarty->assign('endform', $this->CreateFormEnd());

	  $this->smarty->assign('logoimg', '<a href="http://tinymce.moxiecode.com" target="_blank"><img src="'.$this->cms->config["root_url"].'/modules/TinyMCE/powered_by_tinymce_v2.png" border="0" width="88" height="32" alt="Powered by TinyMCE" /></a>');

	  $this->smarty->assign('styles_help', $this->Lang('styles_help'));

	  $this->smarty->assign('css_styles_text', $this->Lang('css_styles_text'));
	  $this->smarty->assign('css_styles_input',
	  $this->CreateInputText($id, 'css_styles', $css_styles, 60, 255 ));

	  $this->smarty->assign('submit', $this->CreateInputSubmit($id, "submit", $this->Lang("update")));

	  return $this->ProcessTemplate('stylespanel.tpl');
	}

	function DisplayAdminPanel($id, &$params, $returnid, $message='')	{
		echo $this->StartTabHeaders();
		echo $this->SetTabHeader("settings",$this->Lang("settings"), ($params["tab"] == "settings")?true:false);
		echo $this->SetTabHeader("toolbar",$this->Lang("toolbar_tab"), ($params["tab"] == "toolbar")?true:false);
		echo $this->SetTabHeader("styles",$this->Lang("styles_tab"), ($params["tab"] == "styles")?true:false);
		
		echo $this->EndTabHeaders();

		echo $this->StartTabContent();

		echo $this->StartTab("settings");
		echo $this->DisplaySettings($id, $params, $returnid, $message);
		echo $this->EndTab();


		echo $this->StartTab("toolbar");
		echo $this->DisplayToolbar($id, $params, $returnid, $message);
		echo $this->EndTab();

		echo $this->StartTab("styles");
		echo $this->DisplayStyles($id, $params, $returnid, $message);
		echo $this->EndTab();
		
		echo $this->EndTabContent();

		echo $this->CreateFormStart($id);
		echo $this->CreateTextArea(true,$id,$this->Lang("testareatext"),"testarea","","","","",80,15,"TinyMCE");
		echo $this->CreateFormEnd();
	}

	function GetLanguageId() {
		$mylang=$this->cms->userprefs["default_cms_language"];
		if ($mylang=="") return "en"; //Lang setting "No default selected"
		$mylang=substr($mylang,0,2);
		switch ($mylang) {
			case "tw" : return strtolower($this->cms->userprefs["default_cms_language"]);
			case "pt" : return "pt_br";
			default : return $mylang;
		}

	}
}

/*
# vim:ts=4 sw=4 noet
*/
?>
