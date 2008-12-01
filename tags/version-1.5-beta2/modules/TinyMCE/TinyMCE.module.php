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
	var $plugins_default_enabled="paste,advimage,advlink,contextmenu,inlinepopups";
	var $plugins_ignore="cmsmslink,simplepaste";

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
		return '2.4.9';
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

			$this->SetPreference('editor_width',"800");
			$this->SetPreference('editor_width_auto',"1");
			$this->SetPreference('editor_width_unit',"px");
			$this->SetPreference('editor_height',"400");
			$this->SetPreference('editor_height_auto',"1");
			$this->SetPreference('editor_height_unit',"px");
			$this->SetPreference('show_path',"1");
			$this->SetPreference('striptags',"0");
			$this->SetPreference('imagebrowserstyle',"both");
			$this->SetPreference('allowupload',0);
			$this->SetPreference("filepickerstyle","both");
			$this->SetPreference('fpwidth',"700");
			$this->SetPreference('fpheight',"500");
		}

		if ($whatsettings=="all" || $whatsettings=="toolbars") {
			$this->SetPreference('toolbar1',"cut,paste,pastetext,pasteword,copy,separator,justifyleft,justifycenter,justifyright,justifyfull,separator,styleselect,formatselect,fontselect,fontsizeselect");
			$this->SetPreference('toolbar2',"bold,italic,underline,strikethrough,advhr,separator,bullist,numlist,separator,outdent,indent,separator,undo,redo,separator,customdropdown,cmslinker,link,unlink,anchor,image,charmap,cleanup,separator,forecolor,backcolor,separator,code,fullscreen,help");
			$this->SetPreference('allow_tables',0);
			$this->SetPreference('front_toolbar1',"cut,paste,pastetext,pasteword,copy,separator,justifyleft,justifycenter,justifyright,justifyfull,separator,styleselect,formatselect,fontselect,fontsizeselect");
			$this->SetPreference('front_toolbar2',"bold,italic,underline,strikethrough,advhr,separator,bullist,numlist,separator,outdent,indent,separator,undo,redo,separator,cmslinker,link,unlink,anchor,image,charmap,cleanup,separator,forecolor,backcolor,separator,code,fullscreen,help");
			$this->SetPreference('front_allow_tables',0);
		}
		if ($whatsettings=="all" || $whatsettings=="plugins") {
			$this->SetPreference("plugins",$this->plugins_default_enabled);
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
			$this->SetPreference('startenabled',1);
			$this->SetPreference('loadcmslinker',1);
			$this->SetPreference('cmslinkerstyle',1);
			$this->SetPreference('usestaticconfig', 0 );

			$this->SetPreference('dropdownblockformats','p,div,h1,h2,h3,h4,h5,h6,div,blockquote,dt,dd,code,samp');
		}
	}

	function WYSIWYGTextarea($name='textarea',$columns='80',$rows='15',$encoding='',$content='',$stylesheet='',$addtext='') {
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
		$result='<textarea id="'.$name.'" name="'.$name.'" cols="'.$columns.'" rows="'.($rows+5).'" '.$addtext.'>'.cms_htmlentities($content,ENT_NOQUOTES,get_encoding($encoding)).'</textarea>';

		$checked="";
	  if ($this->GetPreference("startenabled","1")=="1") {		  
			$checked='checked="checked"';			
		}
		
		if ($this->GetPreference("showtogglebutton",0)==1) {
			$result.='<br/><input type="checkbox" '.$checked.' onclick="toggleEditor(\''.$name.'\');" id="check_'.$name.'" /><label for="check_'.$name.'">'.$this->Lang("togglewysiwyg").'</label>';
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
		$pos=strpos(strtolower($content),"</head");
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

		//Rewriting config-file every time, fixing the reversed toggle-box buf
		if ($this->GetPreference("usestaticconfig")=="1") {
			if (!$this->IsTempWritable()) {
				echo $this->ShowErrors($this->Lang("usestaticconfigwarning"));
			} else {
				if ($this->GetPreference("usestaticconfig")) {
					$this->SaveStaticConfig();
				}
			}
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
		    <script type="text/javascript" src="'.$gCms->config['root_url'].'/modules/TinyMCE/tinymce/jscripts/tiny_mce/tiny_mce.js"></script>';
			if ($this->GetPreference("usestaticconfig")!="1") {
				$output.='
			  <script type="text/javascript" src="'.$gCms->config['root_url'].'/modules/TinyMCE/tinyconfig.php"></script>
        ';
			} else {
				$output.='
			  <script type="text/javascript" src="'.$gCms->config['root_url'].'/tmp/tinyconfig.js"></script>
        ';
			}
			/*}*/
		} else {
			$output="<!-- TinyMCE Session vars empty -->";
		}

		return $output;
	}

	function MinimumCMSVersion() {
		return "1.4.1";
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
		return $this->ProcessTemplate('changelog.tpl');
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

	function GetCustomDropdown() {	
		if ($this->GetPreference("customdropdown")=="") return "";
//echo "hi";	
$config=$this->GetConfig();
$result="";
	$lines=explode("\n",$this->GetPreference("customdropdown"));
	if (count($lines)>0) {
		$inserts=array();
		foreach($lines as $line) {
			$parts=explode("|",$line);
			if (count($parts)==2) {
				$inserts[]=array("name"=>$parts[0],"snippet"=>$parts[1]);
			}
		}
		if (count($inserts)>0) {
$result.="

tinymce.create('tinymce.plugins.CustomDropDown', {
	createControl: function(n, cm) {
		switch (n) {
			case 'customdropdown': {
			  var c = cm.createMenuButton('customdropdown', {
					title : '".$this->Lang("customdropdown")."',
					image : '".$config['root_url']."/modules/TinyMCE/images/customdropdown.gif',
					icons : false
				});
				c.onRenderMenu.add(function(c, m) {				
";
     foreach($inserts as $insert) {
     	if ($insert["name"]=='---') {
     		$result.="  					m.addSeparator();
";
     	} else {
     	  $result.="  					m.add({title : '".$insert["name"]."', onclick : function() {
	  					tinyMCE.activeEditor.execCommand('mceInsertContent', false, '".trim($insert["snippet"])."');
					}});
";
     	}
    }
$result.="
 				});
 				return c;
			}			
		}
		return null;
		
	}
});
// Register plugin with a short name

tinymce.PluginManager.add('customdropdown', tinymce.plugins.CustomDropDown);
";
      } 
    }		
    return $result;
	}
	
	
	function AddEntry($menu,$entry) {
	$config=$this->GetConfig();
	
	$link="";
	$result="";
	//{format : 'text'}
	$result.="
					".$menu.".add({title : '".$entry->Hierarchy()." ".htmlspecialchars($entry->mMenuText,ENT_QUOTES)."', onclick : function() {
						var sel=tinyMCE.activeEditor.selection.getContent();
						if (sel=='') sel='".htmlspecialchars($entry->mMenuText,ENT_QUOTES)."';";
	
	if ($this->GetPreference("cmslinkerstyle","selflink")=="a") {
		if (($config['assume_mod_rewrite'] == true || $config['internal_pretty_urls'] == true) 
	     && $config['use_hierarchy'] == true) {
      if ($config['assume_mod_rewrite'] == true) {
  		  $link = $config['root_url']."/".$entry->mHierarchyPath;
	  	} else {	  		
		  	$link= $config['root_url']."/index.php/".$entry->mHierarchyPath;
		  }
	  }	else {
	    //if ($tiny->GetPreference("cmslinkerstyle","selflink")=="a") {
	    $link="index.php?".$config['query_var']."=".$entry->mAlias;
	    //}
	  }
		$result.="
						tinyMCE.activeEditor.execCommand('mceInsertContent', false, '<a href=\"".$link."\">'+sel+'</a>');";
	} else {
		$result.="
						tinyMCE.activeEditor.execCommand('mceInsertContent', false, '{cms_selflink page=\"".$entry->mAlias."\" text=\"'+sel+'\"}');";
	}
	$result.="
					}});
";
	return $result;
}
function AddSub($menu,$entry,&$result) {
	$newmenu=$menu."m";
	$result.="					var ".$newmenu." = ".$menu.".addMenu({title : '".$entry->Hierarchy()." ".htmlspecialchars($entry->mMenuText,ENT_QUOTES)."'});
";
	if ($entry->mType!="sectionheader") {
	  $result.=$this->AddEntry($newmenu,$entry);
	  $result.="					".$newmenu.".addSeparator();
";
	}
	return $newmenu;
}
	
	function GetCMSLinker() {
		
  if ($this->GetPreference("loadcmslinker","0")!="1") return "";
  $result="";
  $config=$this->GetConfig();
	$result.="
		
//Creates a new plugin class and a custom listbox
tinymce.create('tinymce.plugins.CMSLinkerPlugin', {
	createControl: function(n, cm) {	
		switch (n) {
			case 'cmslinker':			
				var c = cm.createMenuButton('cmslinker', {
					title : '".$this->Lang("cmsmslinker")."',
					image : '".$config["root_url"]."/modules/TinyMCE/images/cmsmslink.gif',
					icons : false
				});

				c.onRenderMenu.add(function(c, m) {
";

$content_ops=$this->cms->GetContentOperations();
$content_array=$content_ops->GetAllContent();

$level=0;
$menu="m";




foreach ($content_array as $one) {
	if ($one->mActive!=1) continue;
	if ($one->FriendlyName() == 'Separator') {
		continue;
	}
		//print_r($one);
	$thislevel=substr_count($one->Hierarchy(),".");
	//echo $thislevel.":".$level;
  if ($thislevel<$level) {
  	$menu=substr($menu,($level-$thislevel));
			$level-=($level-$thislevel);
			
		}
	//if ($thislevel==$level) {
		if ($one->mChildCount>0) {
			$menu=$this->AddSub($menu,$one,$result);
			$level++;
		} else {
			$result.=$this->AddEntry($menu,$one);
		}
}

$result.="
				});

				// Return the new menu button instance
				return c;
		}

		return null;
	}
});

// Register plugin with a short name
tinymce.PluginManager.add('cmslinker', tinymce.plugins.CMSLinkerPlugin);
		";
return $result;
	}
	
	function GenerateConfig() {
		$result="";
		$result.=$this->GetCustomDropDown();
		//die($result);
		$result.=$this->GetCMSLinker();

		if(session_id() == "") {
			session_start();
		}
		$frontend=false;
		if (isset($_SESSION["tiny_live_frontend"]) && $_SESSION["tiny_live_frontend"]!="") {
			$frontend=true;
			$_SESSION["tiny_live_frontend"]="";
		}



		$config=$this->GetConfig();



		$templateid="";
		if (isset($_SESSION["tiny_live_templateid"])) $templateid=$_SESSION["tiny_live_templateid"];

		if ($this->GetPreference("startenabled","1")=="1") {
		  $this->smarty->assign("startupmode","exact");
		} else {
			$this->smarty->assign("startupmode","none");
		}
		  
		
		$this->smarty->assign("textareas",$_SESSION["tiny_live_textareas"]);

		$this->smarty->assign("css",$config['root_url']."/modules/TinyMCE/stylesheet.php?templateid=".$templateid."&mediatype=screen&bogus=".time());

		$this->smarty->assign("rooturl",$config["root_url"]);
		$this->smarty->assign("encoding",$this->GetPreference('entityencoding','raw'));

		$this->smarty->assign("skin",$this->GetPreference('skin','default'));
		$this->smarty->assign("skinvariation",$this->GetPreference('skinvariation',''));

		$plugins=$this->GetPreference('plugins',$this->plugins_default_enabled);
		if (($this->GetPreference("allow_tables","0")=="1") || ($this->GetPreference("front_allow_tables","0")=="1")) {
			$plugins.=",table";
		}
		/*if ($this->GetPreference("forcecleanpaste","1")=="1") {
			$plugins.=",simplepaste";
		}*/
    $urlext=CMS_SECURE_PARAM_NAME.'='.$_SESSION[CMS_USER_KEY];
    $this->smarty->assign("urlext",$urlext);

		$this->smarty->assign("plugins",$plugins);

		if ($frontend) {
			$this->smarty->assign("toolbar1",$this->GetPreference('front_toolbar1'));
			$this->smarty->assign("toolbar2",$this->GetPreference('front_toolbar2'));
			if ($this->GetPreference("front_allow_tables","0")=="1") {
				$this->smarty->assign("toolbar3","tablecontrols");
			}
		} else {
			$this->smarty->assign("toolbar1",$this->GetPreference('toolbar1'));
			$this->smarty->assign("toolbar2",$this->GetPreference('toolbar2'));
			if ($this->GetPreference("allow_tables","0")=="1") {
				$this->smarty->assign("toolbar3","tablecontrols");
			}
		}

		$this->smarty->assign("blockformats", $this->GetPreference("dropdownblockformats","p,div,h1,h2,h3,h4,h5,h6,div,blockquote,dt,dd,code,samp"));

		if ($this->GetPreference("relativeurls",1)==1	) {
			$this->smarty->assign("relativeurls","true");
		} else {
			$this->smarty->assign("relativeurls","false");
		}

		if (isset($_SESSION["tiny_live_language"])) {
			$this->smarty->assign("language",$_SESSION["tiny_live_language"]);
		} else {
			$this->smarty->assign("language","en");
		}


		if($this->GetPreference('source_formatting',1) == 1) {
			$this->smarty->assign("sourceformatting","true");
		} else {
			$this->smarty->assign("sourceformatting","false");
		}

		if($this->GetPreference('show_path', 1) == 1) {
			$this->smarty->assign("showpath","1");
		}

		$this->smarty->assign("editorwidth","");
		if ($this->GetPreference("editor_width_auto",1)!=1) {
			$this->smarty->assign("editorwidth","'".$this->GetPreference("editor_width").$this->GetPreference("editor_width_unit")."'");
		}
		$this->smarty->assign("editorheight","");
		if ($this->GetPreference("editor_height_auto",1)!=1) {
			$this->smarty->assign("editorheight","'".$this->GetPreference("editor_height").$this->GetPreference("editor_height_unit")."'");
		}

			
		if ($this->GetPreference("newlinestyle","p")!="p") {
			$this->smarty->assign("force_br_newlines","true");
			$this->smarty->assign("force_p_newlines","false");
		} else {
			$this->smarty->assign("force_br_newlines","false");
			$this->smarty->assign("force_p_newlines","true");
		}

		if ($this->GetPreference("forcedrootblock","false")=="false") {
			$this->smarty->assign("forcedrootblock","false");
		} else {
			$this->smarty->assign("forcedrootblock","'".$this->GetPreference("forcedrootblock")."'");
		}


		$this->smarty->assign("dateformat",$this->GetPreference('dateformat',"%Y-%m-%d"));
		$this->smarty->assign("timeformat",$this->GetPreference('timeformat',"%H:%M:%S"));

		$css_styles = $this->GetPreference('css_styles');
		$css_styles =str_replace("\n","",$css_styles);
		$css_styles =str_replace("\r","",$css_styles);

		$this->smarty->assign("css_styles",$css_styles);

		$extraconfig="";
		if ($this->GetPreference("extraconfig")!="") {
			$lines=explode("\n",$this->GetPreference("extraconfig"));
			if (count($lines)>0) {
				$extraconfig="//Extra configuration\n";
				foreach($lines as $line) {
					$line=trim($line);
					if (substr($line,-1,1)!=",") $line.=",";
					$extraconfig.=$line."\n";
				}
			}
		}
		$this->smarty->assign("extraconfig",$extraconfig);

		$this->smarty->assign("filepickertitle",$this->Lang("filepickertitle"));
		$this->smarty->assign("fpwidth",$this->GetPreference("fpwidth","700"));
		$this->smarty->assign("fpheight",$this->GetPreference("fpheight","500"));

		$result.=$this->ProcessTemplate('tinyconfig.tpl');
		return $result;

	}

	function IsTempWritable() {
		$config=$this->GetConfig();
		$filename=$this->Slashes($config["root_path"]."/tmp/tinyconfig.js");
		//$file=@fopen($filename,"w"));
		//if (!$file) return false;
		//echo $filename;
		if (!@touch($filename)) return false;
		return true;
	}

	function SaveStaticConfig() {
		$config=$this->config;
		$configcontent=$this->GenerateConfig();		
		$filename=$this->Slashes($config["root_path"]."/tmp/tinyconfig.js");
		return file_put_contents($filename,$configcontent);
	}

	function Slash($str,$str2="",$str3="") {
		if ($str=="") return $str2;
		if ($str2=="") return $str;
		if ($str[strlen($str)-1]!="/") {
			if ($str2[0]!="/") {
				return $str."/".$str2;
			} else {
				return $str.$str2;
			}
		} else {
			if ($str2[0]!="/") {
				return $str.$str2;
			} else {
				return $str.substr($str2,1); //trim away one of the slashes
			}
		}
		//Three strings not supported yet...
		return "Error in Slash-function. Please report";
	}
}

?>
