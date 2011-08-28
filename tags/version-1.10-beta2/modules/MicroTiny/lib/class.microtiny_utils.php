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
 
class microtiny_utils {

	/**
	* Constructor
	*
	* @since 1.0
	*/	
	public function __construct() { }

	/**
	* Module API wrapper function
	*
	* @since 1.0
	* @return string
	*/	
	static public function WYSIWYGTextarea($name='textarea',$columns='80',$rows='15',$encoding='',$content='',$stylesheet='',$addtext='') {

	  $mod = cms_utils::get_module('MicroTiny');

		// Check if we are in object instance
		if(!is_object($mod)) return false; // TODO: some error message?
	
		// TODO: This is failing?
		if (!$mod->WYSIWYGActive() && isset($_SESSION['microtiny_live_textareas'])) {
		
			$_SESSION['microtiny_live_textareas'] = '';
			unset($_SESSION['microtiny_live_textareas']);
		}
		// Force WYSIWYG on
		$mod->wysiwygactive = true; // Stikki: calling this before TODO cause whole thing failing, check this Silmarillion.
		
		if ($stylesheet != '') {
		
			$_SESSION["microtiny_live_templateid"]=substr($stylesheet, strpos($stylesheet,"=")+1);
		} else {
		
			$tplops = cmsms()->GetTemplateOperations();
			$templateid = $tplops->LoadDefaultTemplate();
			$mod->templateid = $templateid->id;
		}
		
		if (!isset($_SESSION["microtiny_live_textareas"])) {
		
			$_SESSION["microtiny_live_textareas"]=$name;
		} else {
		
			$_SESSION["microtiny_live_textareas"].=",".$name;
		}
		
		return '<textarea id="'.$name.'" name="'.$name.'" cols="'.$columns.'" rows="'.($rows+5).'" '.$addtext.'>'.cms_htmlentities($content,ENT_NOQUOTES,get_encoding($encoding)).'</textarea>';
	}

	/**
	* Module API wrapper function
	*
	* @since 1.0
	* @return string
	*/		
	static public function WYSIWYGGenerateHeader($htmlresult='', $frontend=false) {

	  $mod = cms_utils::get_module('MicroTiny');
		// Check if we are in object instance
		if(!is_object($mod)) return false; // TODO: some error message?
		
		// Init
		$config = cms_utils::get_config();
		$languageid = self::GetLanguageId($frontend);

		if ($mod->GetPreference("usestaticconfig")=="1") {		
			if (!self::IsTempWritable()) {
				//echo $mod->ShowErrors($mod->Lang("usestaticconfigwarning"));
			} else {
				if ($mod->GetPreference("usestaticconfig")) {
					self::SaveStaticConfig($frontend,$mod->templateid,$languageid);
				}
			}
		}

		if ($mod->WYSIWYGactive()) {
		
			$output='<script type="text/javascript" src="'.$config['root_url'].'/modules/MicroTiny/tinymce/tiny_mce.js"></script>';
			$configurl="";
			
			if ($mod->GetPreference("usestaticconfig")!="1") {
				
				$params=array("templateid"=>$mod->templateid,"languageid"=>$languageid);
				if ($frontend) $params["frontend"]= true;
				$configurl = $mod->CreateLink("m1_","microtinyconfig","","",$params,"",true);
				$configurl .= "&amp;showtemplate=false";
			} else {
			
				$configurl = $config['root_url'].'/tmp/microtinyconfig.js';
			}

			$output.='<script type="text/javascript" src="'.$configurl.'"></script>';
			
		} else {
		  
		  $output="<!-- MicroTiny Session vars empty -->";
		}
		
		return $output;
	}	
	
	/**
	* Generate dynamic config file
	*
	* @since 1.0
	* @param boolean Frontend true/false
	* @param string Templateid
	* @param string A2 Languageid
	* @return string
	*/	
	static public function GenerateConfig($frontend=false, $templateid="", $languageid="en") {

	  $mod = cms_utils::get_module('MicroTiny');
		// Check if we are in object instance
		if(!is_object($mod)) return false; // TODO: return static file if this fails, or something
		
		// Init
		$config = cms_utils::get_config();	
		$result="";		
		$linker="";		
		
		if ($frontend) {  
		
			$mod->smarty->assign("isfrontend",true);
		} else {
		
			$mod->smarty->assign("isfrontend",false);
			$result .= self::GetCMSLinker();
			$linker="cmslinker,";
		}

		$textareas="";
		if (isset($_SESSION["microtiny_live_textareas"])) $textareas=$_SESSION["microtiny_live_textareas"];
		$mod->smarty->assign("textareas",$textareas);
		//function CreateLink($id, $action, $returnid='', $contents='', $params=array(), $warn_message='', $onlyhref=false, $inline=false, $addttext='', $targetcontentonly=false, $prettyurl='')
			//$mod->smarty->assign("css",$config['root_url']."/modules/MicroTiny/stylesheet.php?templateid=".$templateid."&amp;mediatype=screen&amp;bogus=".time());
			/*$cssurl=$mod->CreateURL('m1_',
						 'stylesheet',								WHAT ARE YOU THINKING?
						 '',
						 array("templateid"=>$templateid,"mediatype"=>"screen"));*/

		if( $templateid == '' )
		  {
		    $pageinfo = cmsms()->get_variable('pageinfo');
		    if( is_object($pageinfo) )
		      {
			$templateid = $pageinfo->template_id;
		      }
		    else
		      {
			$templateops = cmsms()->GetTemplateOperations();
			$dflt_template = $templateops->LoadDefaultTemplate();
			if( is_object($dflt_template) ) $templateid = $dflt_template->id;
		      }
		  }
		if( $templateid )
		  {
		    $mod->smarty->assign('templateid',$templateid);
// 		    $cssurl=$mod->CreateLink('m1_','stylesheet','','',array("templateid"=>$templateid,"mediatype"=>"screen"),"",true);
// 		    $cssurl.="&amp;showtemplate=false";
// 		    $cssurl = str_replace('amp;','',$cssurl);
// 		    $mod->smarty->assign("css",$cssurl);
		  }
		$mod->smarty->assign("rooturl",$config["root_url"]);		

		$urlext="";
		if (isset($_SESSION[CMS_USER_KEY])) {
		  $urlext=CMS_SECURE_PARAM_NAME.'='.$_SESSION[CMS_USER_KEY];
		}
		$mod->smarty->assign("urlext",$urlext);
		//,pasteword,,|,undo,redo
		$image="";
		if ($mod->GetPreference("allowimages",0)==1) {
			$image=",image,|";
		}
		$toolbar="bold,italic,underline,|,cut,copy,paste,pastetext,|,justifyleft,justifycenter,justifyright,justifyfull,|,bullist,numlist,|,".$linker."link,unlink,|".$image.",formatselect"; //,separator,styleselect
		$css_styles = $mod->GetPreference('css_styles');
		$css_styles =str_replace("\n",",",$css_styles);
		$css_styles =str_replace("\r",",",$css_styles);

		if ($css_styles!="") {
		  $toolbar.=",separator,styleselect";
		  $mod->smarty->assign("css_styles",$css_styles);
		}
		$mod->smarty->assign("toolbar",$toolbar);				
		$mod->smarty->assign("language",$languageid);			
		$mod->smarty->assign("filepickertitle",$mod->Lang("filepickertitle"));
		
		$result .= $mod->ProcessTemplate('microtinyconfig.tpl');
		return $result;

	}	
	
	/**
	* Generates TinyMCE Entry object
	*
	* @since 1.0
	* @param string $menu
	* @param string $entry
	* @return string
	*/	
	public static function AddEntry($menu,$entry) {
	
	  // Check if we are in object instance
	  $mod = cms_utils::get_module('MicroTiny');
	  if(!is_object($mod)) return false; // TODO: some error?

	  // Init
	  $config = cms_utils::get_config();
	  $link="";
	  $result="";
	  
	  //{format : 'text'}
	  $menutext=$entry->Hierarchy()." ".$entry->MenuText();
	  if (strlen($menutext)>30) {
	    $menutext=htmlspecialchars(substr($menutext,0,30),ENT_QUOTES)." &#133;";
	  } else {
	    $menutext=htmlspecialchars($menutext,ENT_QUOTES);
	  }
	  $result.="
						".$menu.".add({title : '".$menutext."', onclick : function() {
							var sel=tinyMCE.activeEditor.selection.getContent();
							if (sel=='') sel='".htmlspecialchars($entry->MenuText(),ENT_QUOTES)."';";

		/*if ($mod->GetPreference("cmslinkerstyle","selflink")=="a") {
			if (($config['url_rewriting'] != 'none')
			 //&& $config['use_hierarchy'] == true)
    {
		  if ($config['url_rewriting'] == 'mod_rewrite') {
			  $link = $config['root_url']."/".$entry->HierarchyPath().$config['page_extension'];
			} else {
				$link= $config['root_url']."/index.php/".$entry->HierarchyPath().$config['page_extension'];
			  }
		  }	else {
			//if ($tiny->GetPreference("cmslinkerstyle","selflink")=="a") {
			$link="index.php?".$config['query_var']."=".$entry->Alias();
			//}
		  }
			$result.="
							tinyMCE.activeEditor.execCommand('mceInsertContent', false, '<a href=\"".$link."\">'+sel+'</a>');";
		} else {
			$result.="
							tinyMCE.activeEditor.execCommand('mceInsertContent', false, \"{cms_selflink page='".$entry->Alias()."' text='\"+sel+\"'}\");";
		}
		$*/
    $href="'".$entry->Alias()."'";
    $result.="
							tinyMCE.activeEditor.execCommand('mceInsertContent', false, \"<a href=\\\"{cms_selflink href=".$href."}\\\">\"+sel+\"</a>\");";
    $result.="
						}});
		";
		return $result;
	}	
	
	/**
	* Generates TinyMCE sub object
	*
	* @since 1.0
	* @param string $menu
	* @param string $entry
	* @param string $result // Stikki: why?
	* @return string
	*/	
	public static function AddSub($menu,$entry,&$result) {
	
		$menutext=$entry->Hierarchy()." ".$entry->MenuText();
		
		if (strlen($menutext)>30) {
			$menutext=htmlspecialchars(substr($menutext,0,30),ENT_QUOTES)." &#133;";
		} else {
			$menutext=htmlspecialchars($menutext,ENT_QUOTES);
		}
		
		$newmenu=$menu."m";
		$result.="					var ".$newmenu." = ".$menu.".addMenu({title : '".$menutext."'});
		";
		
		if ($entry->Type()!="sectionheader") {
		  $result.= self::AddEntry($newmenu,$entry);
		  $result.="					".$newmenu.".addSeparator();
		";
		}
		
		return $newmenu;
	}
	
	/**
	* Get CMSLinker for TinyMCE
	*
	* @since 1.0
	* @return string
	*/		
	public static function GetCMSLinker() {

	  $mod = cms_utils::get_module('MicroTiny');
		$result="";
		$config = cms_utils::get_config();
		$result.="

		//Creates a new plugin class and a custom listbox
		tinymce.create('tinymce.plugins.CMSLinkerPlugin', {
		createControl: function(n, cm) {
			switch (n) {
				case 'cmslinker':
					var c = cm.createMenuButton('cmslinker', {
						title : '".$mod->Lang("cmsmslinker")."',
						image : '".$config["root_url"]."/modules/MicroTiny/images/cmsmslink.gif',
						icons : false
					});

					c.onRenderMenu.add(function(c, m) {
		";

		$content_ops = cmsms()->GetContentOperations();
		$content_array=$content_ops->GetAllContent();

		$level=0;
		$menu="m";

		foreach ($content_array as $one) {
		if ($one->Active()!=1) continue;
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
			if ($one->ChildCount()>0) {
				$menu = self::AddSub($menu,$one,$result);
				$level++;
			} else {
				$result .= self::AddEntry($menu,$one);
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

	/**
	* Get Language ID
	*
	* @since 1.0
	* @return string
	*/			
	public static function GetLanguageId() {
	
		$mylang = get_preference(get_userid(FALSE),'default_cms_language');
		if ($mylang=="") return "en"; //Lang setting "No default selected"
		$mylang = substr($mylang,0,2);
		
		switch ($mylang) {			
			case "tw" : return strtolower($mylang);
			default : return $mylang;
		}
	}


	/**
	* Save Static configuration
	*
	* @since 1.0
	* @param boolean $frontend	
	* @param string $templateid	
	* @param string $languageid	
	* @return string
	*/		
	public static function SaveStaticConfig($frontend=false, $templateid="", $languageid="") { 
	
		$config = cms_utils::get_config();
		$configcontent = self::GenerateConfig($frontend, $templateid, $languageid);
		$filename = self::Slashes($config['root_path']."/tmp/microtinyconfig.js");
		
		return file_put_contents($filename,$configcontent);
	}
	
	/**
	* Get Thumbnail File
	*
	* @since 1.0
	* @param string $file	
	* @param string $path	
	* @param string $url	
	* @return string
	*/		
	public static function GetThumbnailFile($file,$path,$url) {
	
		$image="";
		$imagepath = self::Slashes($path."/thumb_".$file);
		$imageurl = self::Slashes($url."/thumb_".$file);
		//echo "<pre>".$imageurl."</pre><br/>";
		if (!file_exists($imagepath)) {
		  //echo $imagepath;
		  $image="";//$mod->GetFileIcon($file["ext"],$file["dir"]);
		} else {
		  $image="<img src='".$imageurl."' alt='".$file."' title='".$file."' />";
		}
		
		return $image;
	}

	/**
	* Check if static config file is writable
	*
	* @since 1.0	
	* @return boolean
	*/		
	public static function IsTempWritable() {
	
		$config = cms_utils::get_config();
		$filename = self::Slashes($config["root_path"]."/tmp/microtinyconfig.js");

		if (!@touch($filename)) {			
			return false;
		}		
		return true;
	}


	/**
	* Fix Slashes
	*
	* @since 1.0	
	* @return string
	*/		
	static private function Slashes($url) {
	
		$result=str_replace("\\","/",$url);
		return $result;
	}	
	

} // end of class
?>