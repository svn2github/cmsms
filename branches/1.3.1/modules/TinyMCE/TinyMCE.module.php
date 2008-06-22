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
	var $plugins_always_enabled;
	var $plugins_default_enabled="advimage,advlink,contextmenu,inlinepopups,simplepaste";
	var $plugins_ignore="cmsmslink,paste";

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
		return '2.4.0';
	}

	function IsWYSIWYG() {
		return true;
	}

	function VisibleToAdminUser() {
		return $this->CheckPermission('Modify Site Preferences');
	}

	function ResetSettings($whatsettings="all") {
		if ($whatsettings=="all" || $whatsettings=="basic") {
			$this->SetPreference('skin',"default");
			$this->SetPreference('source_formatting',"1");
			$this->SetPreference("showtogglebutton","1");
			$this->SetPreference("filepickerstyle","both");

			$this->SetPreference('editor_width',"800");
			$this->SetPreference('editor_width_auto',"1");
			$this->SetPreference('editor_width_unit',"px");
			$this->SetPreference('editor_height',"400");
			$this->SetPreference('editor_height_auto',"1");
			$this->SetPreference('editor_height_unit',"px");
			$this->SetPreference('show_path',"1");
			$this->SetPreference('striptags',"0");
			$this->SetPreference('imagebrowserstyle',"both");
		}

		if ($whatsettings=="all" || $whatsettings=="toolbars") {
			$this->SetPreference('toolbar1',"cut,paste,pastetext,copy,separator,justifyleft,justifycenter,justifyright,justifyfull,separator,styleselect,formatselect,fontselect,fontsizeselect");
			$this->SetPreference('toolbar2',"bold,italic,underline,strikethrough,advhr,separator,bullist,numlist,separator,outdent,indent,separator,undo,redo,separator,customdropdown,cmslinker,link,unlink,anchor,image,charmap,cleanup,separator,forecolor,backcolor,separator,code,fullscreen,help");
			$this->SetPreference('allow_tables',0);
			$this->SetPreference('front_toolbar1',"cut,paste,pastetext,copy,separator,justifyleft,justifycenter,justifyright,justifyfull,separator,styleselect,formatselect,fontselect,fontsizeselect");
			$this->SetPreference('front_toolbar2',"bold,italic,underline,strikethrough,advhr,separator,bullist,numlist,separator,outdent,indent,separator,undo,redo,separator,cmslinker,link,unlink,anchor,image,charmap,cleanup,separator,forecolor,backcolor,separator,code,fullscreen,help");
			$this->SetPreference('front_allow_tables',0);
		}
		if ($whatsettings=="all" || $whatsettings=="plugins") {
			$this->SetPreference("plugins","advimage,advlink,contextmenu,inlinepopups");
		}
		if ($whatsettings=="all" || $whatsettings=="advanced") {
			$this->SetPreference('newlinestyle',"p");
			$this->SetPreference('usecompression',"0");
			$this->SetPreference('entityencoding',"raw");
			$this->GetPreference('skinvariation',"");
			$this->SetPreference('bodycss',"");
			$this->SetPreference('forcedrootblock',"false");
			$this->SetPreference('customdropdown',
	   "Start expand/collapse-area|{startExpandCollapse id=\'expand1\' title=\'This is my expandable area\'}
End expand/collapse-area|{stopExpandCollapse}
---|---
Insert CMS version info|{cms_version} {cms_versionname}");
			$this->SetPreference('extraconfig',"");
			$this->SetPreference('forcecleanpaste',1);
			$this->SetPreference('loadcmslinker',1);
			$this->SetPreference('cmslinkerstyle',1);

			$this->SetPreference('dropdownblockformats','p,div,h1,h2,h3,h4,h5,h6,div,blockquote,dt,dd,code,samp');
		}


	}

	function WYSIWYGTextarea($name='textarea',$columns='80',$rows='15',$encoding='',$content='',$stylesheet='') {
		if (!$this->wysiwygactive && isset($_SESSION["tiny_live_textareas"])) {
			$_SESSION["tiny_live_textareas"]="";
			unset($_SESSION["tiny_live_textareas"]);
		}

		$this->wysiwygactive=true;
		global $gCms;
		$variables = &$gCms->variables;

		if ($stylesheet != '') {
			$_SESSION["tiny_live_templateid"]=substr($stylesheet, strpos($stylesheet,"=")+1);
		} else {
			$tplops=$gCms->GetTemplateOperations();
			$templateid=$tplops->LoadDefaultTemplate();
			$_SESSION["tiny_live_templateid"]=$templateid->id;
		}
		if (!isset($_SESSION["tiny_live_textareas"])) {
			$_SESSION["tiny_live_textareas"]=$name;
		} else {
			$_SESSION["tiny_live_textareas"].=",".$name;
		}
		$result='<textarea id="'.$name.'" name="'.$name.'" cols="'.$columns.'" rows="'.($rows+5).'">'.cms_htmlentities($content,ENT_NOQUOTES,get_encoding($encoding)).'</textarea>';

		if ($this->GetPreference("showtogglebutton",0)==1) {
			//$result.="<br/><input type=\"checkbox\" checked=\"checked\" onclick='tinyMCE.execCommand(\"mceToggleEditor\", false, \"$name\");tinymceactive=!tinymceactive;' id=\"check_$name\" /><label for=\"check_$name\">".$this->Lang("togglewysiwyg")."</label>";
			//$result.="<br/><input type=\"checkbox\" checked=\"checked\" onclick='if (!tinyMCE.getInstanceById('".$name."')) tinyMCE.execCommand('mceAddControl', false, '".$name."');	else tinyMCE.execCommand('mceRemoveControl', false, '".$name."');' id=\"check_$name\" /><label for=\"check_$name\">".$this->Lang("togglewysiwyg")."</label>";
			//	$result.='<a href="javascript:;" onmousedown="hideTiny(\''.$name.'\',this);">[Hide]</a>';
			$result.='<br/><input type="checkbox" checked="checked" onclick="toggleEditor(\''.$name.'\');" id="check_'.$name.'" /><label for="check_'.$name.'">'.$this->Lang("togglewysiwyg").'</label>';
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
		$content=substr($content,0,$pos).$this->WYSIWYGGenerateHeader(true).substr($content,$pos);
		$_SESSION["tiny_live_frontend"]="yes";
		return $content;
	}

	function WYSIWYGGenerateHeader($frontend=false) {
		global $gCms;
		$_SESSION["tiny_live_language"]=$this->GetLanguageId();

		if (!$frontend) {
			$_SESSION["tiny_live_frontend"]="";
			unset($_SESSION["tiny_live_frontend"]);
		}

		//$basepath = $gCms->config["root_url"].'/modules/TinyMCE/tinymce/jscripts/tiny_mce/';
		$output="";

		if ($this->wysiwygactive) {
			/*if ($this->GetPreference("usecompression","0")=="1") {
				$output='
				<script type="text/javascript" src="'.$gCms->config['root_url'].'/modules/TinyMCE/tinymce/jscripts/tiny_mce/tiny_mce_gzip.js?suffix="></script>
				<script type="text/javascript" src="'.$gCms->config['root_url'].'/modules/TinyMCE/tinyconfig_gz.php"></script>
				<script type="text/javascript" src="'.$gCms->config['root_url'].'/modules/TinyMCE/tinyconfig.php"></script>
				';
				} else {*/
			$output='
		    <script type="text/javascript" src="'.$gCms->config['root_url'].'/modules/TinyMCE/tinymce/jscripts/tiny_mce/tiny_mce.js"></script>
        <script type="text/javascript" src="'.$gCms->config['root_url'].'/modules/TinyMCE/tinyconfig.php"></script>
        ';
			/*}*/
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

	function GetLanguageId() {
		$mylang=$this->cms->userprefs["default_cms_language"];
		if ($mylang=="") return "en"; //Lang setting "No default selected"
		$mylang=substr($mylang,0,2);
		switch ($mylang) {
			case "lt" : return "en";
			case "tw" : return strtolower($this->cms->userprefs["default_cms_language"]);
			//case "pt" : return "pt_br";// case pt is pt, so, dont need pt_br
			default : return $mylang;
		}
	}

	function GetThumbnailFile($file,$path,$url) {
 		$image="";
		$imagepath=$this->Slashes($path."/thumb_".$file);
		$imageurl=$this->Slashes($url."/thumb_".$file);
		//echo "<pre>".$imageurl."</pre><br/>";
		if (!file_exists($imagepath)) {
			//echo $imagepath;
			$image="";//$this->GetFileIcon($file["ext"],$file["dir"]);
		} else {
			$image="<img src='".$imageurl."' alt='".$file."' title='".$file."' />";
		}
		return $image;
	}
	
	function Slashes($url) {
		$result=str_replace("\\","/",$url);
		
		return $result;
	}
}

/*
 # vim:ts=4 sw=4 noet
 */
?>
