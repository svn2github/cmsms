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
  var $plugins_default_enabled;
  var $plugins_ignore;
  var $templateid;
  var $module_plugins;

  function TinyMCE() {

    parent::CMSModule();

    $this->plugins_always_enabled = -1;
    $this->plugins_default_enabled = "paste,advimage,advlink,contextmenu,inlinepopups,spellchecker";
    $this->plugins_ignore = "cmsmslink,simplepaste";
    $this->templateid = -1;
    $this->module_plugins = array();
  }

  function GetName() {
    return 'TinyMCE';
  }

  function GetFriendlyName() {
    return $this->Lang("friendlyname");
  }

	function  GetAdminDescription() {
		return $this->Lang("admindescription");
	}

  function HasAdmin() {
    return true;
  }

  function GetVersion() {
    return '2.8.2';
  }

  function IsWYSIWYG() {
    return true;
  }

  function  IsPluginModule() {
    return true;
  }

  function HandlesEvents() {
    return true;
  }

  function HasCapability($capability, $params=array()) {
    if ($capability == "wysiwyg") return true;
    return false;
  }

  function VisibleToAdminUser() {
    return $this->CheckPermission('Modify Site Preferences');
  }

  function ResetSettings($whatsettings="all") {
    if ($whatsettings == "all" || $whatsettings == "basic") {
      $this->SetPreference('skin', "default");
      $this->SetPreference('source_formatting', "1");

      $this->SetPreference('editor_width', "800");
      $this->SetPreference('editor_width_auto', "1");
      $this->SetPreference('editor_width_unit', "px");
      $this->SetPreference('editor_height', "400");
      $this->SetPreference('editor_height_auto', "1");
      $this->SetPreference('editor_height_unit', "px");
      $this->SetPreference('show_path', "1");
      $this->SetPreference('striptags', "true");
      $this->SetPreference('imagebrowserstyle', "both");

      $this->SetPreference('allowscaling', 0);
      $this->SetPreference('scalingwidth', "800");
      $this->SetPreference('scalingheight', "600");
      $this->SetPreference("filepickerstyle", "both");
      $this->SetPreference('fpwidth', "700");
      $this->SetPreference('fpheight', "500");
    }

    if ($whatsettings == "all" || $whatsettings == "toolbars") {
      $this->SetPreference('toolbar1', "cut,paste,pastetext,pasteword,copy,separator,justifyleft,justifycenter,justifyright,justifyfull,separator,styleselect,formatselect,fontselect,fontsizeselect");
      $this->SetPreference('toolbar2', "bold,italic,underline,strikethrough,advhr,separator,bullist,numlist,separator,outdent,indent,separator,undo,redo,separator,customdropdown,cmslinker,link,unlink,anchor,image,charmap,cleanup,separator,forecolor,backcolor,separator,code,spellchecker,fullscreen,help");
      $this->SetPreference('toolbar3', "");
      $this->SetPreference('allow_tables', 0);
      $this->SetPreference('allowupload', 0);
      $this->SetPreference("showtogglebutton", "1");
      $this->SetPreference('advanced_toolbar1', "cut,paste,pastetext,pasteword,copy,separator,justifyleft,justifycenter,justifyright,justifyfull,separator,styleselect,formatselect,fontselect,fontsizeselect");
      $this->SetPreference('advanced_toolbar2', "bold,italic,underline,strikethrough,advhr,separator,bullist,numlist,separator,outdent,indent,separator,undo,redo,separator,customdropdown,cmslinker,link,unlink,anchor,image,charmap,cleanup,separator,forecolor,backcolor,separator,code,spellchecker,fullscreen,help");
      $this->SetPreference('advanced_toolbar3', "");
      $this->SetPreference('advanced_allow_tables', 0);
      $this->SetPreference('advanced_allowupload', 0);
      $this->SetPreference("advanced_showtogglebutton", "1");
      $this->SetPreference('front_toolbar1', "cut,paste,pastetext,pasteword,copy,separator,justifyleft,justifycenter,justifyright,justifyfull,separator,styleselect,formatselect,fontselect,fontsizeselect");
      $this->SetPreference('front_toolbar2', "bold,italic,underline,strikethrough,advhr,separator,bullist,numlist,separator,outdent,indent,separator,undo,redo,separator,cmslinker,link,unlink,anchor,image,charmap,cleanup,separator,forecolor,backcolor,separator,code,spellchecker,fullscreen,help");
      $this->SetPreference('front_toolbar3', "");
      $this->SetPreference('front_allow_tables', 0);
      $this->SetPreference("front_showtogglebutton", "1");
    }
    if ($whatsettings == "all" || $whatsettings == "plugins") {
      $this->SetPreference("plugins", $this->plugins_default_enabled);
    }
    if ($whatsettings == "all" || $whatsettings == "advanced") {
      $this->SetPreference('newlinestyle', "p");
      $this->SetPreference('usecompression', "0");
      $this->SetPreference('entityencoding', "raw");
      $this->GetPreference('skinvariation', "");
      $this->SetPreference('bodycss', "");
      $this->SetPreference('forcedrootblock', "false");
      $this->SetPreference('customdropdown',
              "Start expand/collapse-area|{startExpandCollapse id=\'expand1\' title=\'This is my expandable area\'}
End expand/collapse-area|{stopExpandCollapse}
---|---
Insert CMS version info|{cms_version} {cms_versionname}
---|---
Insert Smarty {literal} around selection|{literal}|{/literal}");
      $this->SetPreference('extraconfig', "");
      $this->SetPreference('forcecleanpaste', 1);
      $this->SetPreference('startenabled', 1);
      $this->SetPreference('loadcmslinker', 1);
      $this->SetPreference('cmslinkerstyle', "selflink");
      $this->SetPreference('cmslinkeradds',"");
      $this->SetPreference('usestaticconfig', 0);
      $this->SetPreference('ignoremodifyfiles', 0);

      $this->SetPreference('dropdownblockformats', 'h1,h2,h3,h4,h5,h6,blockquote,dt,dd,code,samp');
    }
  }

  function WYSIWYGTextarea($name='textarea', $columns='80', $rows='15', $encoding='', $content='', $stylesheet='', $addtext='') {

    if (!$this->wysiwygactive && isset($_SESSION["tiny_live_textareas"])) {
      $_SESSION["tiny_live_textareas"] = "";
      unset($_SESSION["tiny_live_textareas"]);
    }

    $this->wysiwygactive = true;
    global $gCms;
    $variables = &$gCms->variables;

    if ($stylesheet != '') {
      //$_SESSION["tiny_live_templateid"]=substr($stylesheet, strpos($stylesheet,"=")+1);
      $this->templateid = substr($stylesheet, strpos($stylesheet, "=") + 1);
    } else {
      $tplops = $gCms->GetTemplateOperations();
      $template = $tplops->LoadDefaultTemplate();
      //$_SESSION["tiny_live_templateid"]=$template->id;
      $this->templateid = $template->id;
    }

    if (!isset($_SESSION["tiny_live_textareas"])) {
      $_SESSION["tiny_live_textareas"] = $name;
    } else {
      $_SESSION["tiny_live_textareas"].="," . $name;
    }
    $result = '<textarea id="' . $name . '" name="' . $name . '" cols="' . $columns . '" rows="' . ($rows + 5) . '" ' . $addtext . '>' . cms_htmlentities($content, ENT_NOQUOTES, get_encoding($encoding)) . '</textarea>';

    $checked = "";
    if ($this->GetPreference("startenabled", "1") == "1") {
      $checked = 'checked="checked"';
    }

    //Handle togglebutton
    $showtoggle = false;
    //Having profile-decided toggle button is simply not possible presently as we cannot at this point
    //know if we're in frontend or not and CheckPermission forces admin-login
    /* if (isset($_SESSION["tiny_live_frontend"]) && $_SESSION["tiny_live_frontend"]!="") {
      $showtoggle=($this->GetPreference("front_showtogglebutton",0)==1);
      } else {
      //die();
      if ($this->CheckPermission('allowadvancedprofile')) {
      $showtoggle=($this->GetPreference("advanced_showtogglebutton",0)==1);
      } else {

      }
      } */
    $showtoggle = ($this->GetPreference("showtogglebutton", 0) == 1);
    if ($showtoggle) {
      $result.='<br/><input type="checkbox" ' . $checked . ' onclick="toggleEditor(\'' . $name . '\');" id="check_' . $name . '" /><label for="check_' . $name . '">' . $this->Lang("togglewysiwyg") . '</label>';
    }

    return $result;
  }

  function WYSIWYGPageFormSubmit() {
    return 'tinyMCE.triggerSave();';
  }

  function WYSIWYGGenerateHeader($htmlresult='', $frontend=false) {

    global $gCms;

    $languageid = $this->GetLanguageId($frontend);

    //Rewriting config-file every time, fixing the reversed toggle-box bug
    if ($this->GetPreference("usestaticconfig") == "1") {
      if (!$this->IsTempWritable()) {
        echo $this->ShowErrors($this->Lang("usestaticconfigwarning"));
      } else {
        $this->SaveStaticConfig($frontend, $this->templateid, $languageid);
      }
    }

    //if ($frontend) echo "hi";
    //$basepath = $gCms->config["root_url"].'/modules/TinyMCE/tinymce/jscripts/tiny_mce/';
    $output = '';
    //$output = "<!-- TinyMCE Configuration -->";

    if ($this->wysiwygactive) {

      $output.= '<script type="text/javascript" src="' . $gCms->config['root_url'] . '/modules/TinyMCE/tinymce/jscripts/tiny_mce/tiny_mce.js"></script>';
      if ($this->GetPreference("usestaticconfig") != "1") {
        //$front = "";
        
      //  $parms = '';

        /*if ($frontend) {
          $parms = '?';
          $front = "&amp;frontend=yes";
        } else {
          $parms = get_secure_param();
        }*/
        $params=array(
            "templateid"=>$this->templateid,
            "languageid"=>$languageid,
            );
        if ($frontend) {
          $params["frontend"]="yes";
        }
        $contentops = $gCms->GetContentOperations();
	$pageid = '';
	if( $frontend ) $pageid = $contentops->GetDefaultContent();
        $configurl=$this->CreateLink(""/*id*/, "tinyconfig", $pageid, "", $params, "", true);
        $configurl.="&amp;showtemplate=false";
        //$configurl=str_replace("&amp;", "&", $configurl);
        //$output.='<script type="text/javascript" src="' . $gCms->config['root_url'] . '/modules/TinyMCE/tinyconfig.php' . $parms . '&amp;templateid=' . $this->templateid . '&amp;languageid=' . $languageid . $front . '"></script>';
        $output.='<script type="text/javascript" src="'.$configurl.'"></script>';
      } else {

        $output.='<script type="text/javascript" src="' . $gCms->config['root_url'] . '/tmp/tinyconfig.js"></script>';
      }
    } else {
      //$output.= "<!-- TinyMCE Session vars empty -->";
    }
    //$output.= "<!-- TinyMCE Configuration -->";

    return $output;
  }

  function MinimumCMSVersion() {
    return "1.6.6";
  }

  function GetHelp($lang='en_US') {
    return $this->Lang('help');
  }

  function GetAuthor() {
    return 'Simon Brown, Stefan R&ouml;llin and Morten Poulsen';
  }

  function GetAuthorEmail() {
    return '&lt;morten@poulsen.org&gt;';
  }

  function GetChangeLog() {
    return $this->ProcessTemplate('changelog.tpl');
  }

  function GetLanguageId($frontend=false) {

    $mylang = "";
    global $gCms;

    if ($frontend) {
      $mylang = get_site_preference('frontendlang');
    } else {
      $mylang = $gCms->userprefs["default_cms_language"];
    }
    $mylang=trim($mylang);
    if ($mylang == "")
      return "en"; //Lang setting "No default selected"
 $mylang = substr($mylang, 0, 2);
//echo $mylang;
    switch ($mylang) {
      case "tw" : return strtolower($gCms->userprefs["default_cms_language"]);
      default : return $mylang;
    }
  }

  function GetThumbnailFile($file, $path, $url) {

    $image = "";
    $imagepath = $this->Slashes($path . "/thumb_" . $file);
    $imageurl = $this->Slashes($url . "/thumb_" . $file);
    //echo "<pre>".$imageurl."</pre><br/>";
    if (!file_exists($imagepath)) {
      //echo $imagepath;
      $image = ""; //$this->GetFileIcon($file["ext"],$file["dir"]);
    } else {
      $image = "<img src='" . $imageurl . "' alt='" . $file . "' title='" . $file . "' />";
    }

    return $image;
  }

  function Slashes($url) {

    $result = str_replace("\\", "/", $url);

    return $result;
  }

  function GetCustomDropdown() {

    if ($this->GetPreference("customdropdown") == "") return;

    $config = $this->GetConfig();
    $result = "";
    $lines = explode("\n", $this->GetPreference("customdropdown"));

    if (count($lines) > 0) {

      $inserts = array();
      foreach ($lines as $line) {
        $parts = explode("|", $line);
        if (count($parts) == 2) {
          $inserts[] = array("name" => $parts[0], "snippet" => $parts[1]);
        } elseif (count($parts) == 3) {
          $inserts[] = array("name" => $parts[0], "snippet1" => $parts[1], "snippet2" => $parts[2]);
        }
      }

      if (count($inserts) > 0) {

        $result.="

tinymce.create('tinymce.plugins.CustomDropDown', {
	createControl: function(n, cm) {
		switch (n) {
			case 'customdropdown': {
			  var c = cm.createMenuButton('customdropdown', {
					title : '" . $this->Lang("customdropdown") . "',
					image : '" . $config['root_url'] . "/modules/TinyMCE/images/customdropdown.gif',
					icons : false
				});
				c.onRenderMenu.add(function(c, m) {				
";
        foreach ($inserts as $insert) {

          if ($insert["name"] == '---') {
            $result.="  					m.addSeparator();
";
          } else {

            if (count($insert) == 2) {
              $result.="    					m.add({title : '" . $insert["name"] . "', onclick : function() {
	  					tinyMCE.activeEditor.execCommand('mceInsertContent', false, '" . trim($insert["snippet"]) . "');
					}});
";
            } else { //count==3
              $result.="  	  				m.add({title : '" . $insert["name"] . "', onclick : function() {
              var sel=tinyMCE.activeEditor.selection.getContent();
	  					tinyMCE.activeEditor.execCommand('mceInsertContent', false, '" . trim($insert["snippet1"]) . "'+sel+'" . trim($insert["snippet2"]) . "');
					}});
";
            }
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

  function AddEntry($menu, $entry) {

    $config = $this->GetConfig();

    $link = "";
    $result = "";
    $menutext = $entry->Hierarchy() . " " . $entry->MenuText();
    $menutext = str_replace("\n", "", $menutext);
    $menutext = str_replace("\r", "", $menutext);
    $menutext = str_replace("\t", "", $menutext);

    if (strlen(utf8_decode($menutext)) > 30) {
      $menutext = htmlspecialchars(utf8_encode(substr(utf8_decode($menutext), 0, 30)), ENT_QUOTES, 'UTF-8') . " &#133;";
    } else {
      $menutext = htmlspecialchars($menutext, ENT_QUOTES, 'UTF-8');
    }

    $result.="
					" . $menu . ".add({title : '" . $menutext . "', onclick : function() {
						var sel=tinyMCE.activeEditor.selection.getContent();
						if (sel=='') sel='" . htmlentities($entry->MenuText(), ENT_QUOTES, 'UTF-8') . "';";

    if ($this->GetPreference("cmslinkerstyle", "selflink") == "a") {
      $link = $entry->GetURL();
      $additions=$this->GetPreference("cmslinkeradds");

      $result.="
						tinyMCE.activeEditor.execCommand('mceInsertContent', false, '<a href=\"" . $link . "\" ".$additions.">'+sel+'</a>');";
    } else {
      $additions=$this->GetPreference("cmslinkeradds");
      $result.="
						tinyMCE.activeEditor.execCommand('mceInsertContent', false, '<a href=\"{cms_selflink href=\'" . $entry->Alias() . "\' ".$additions."}\">'+sel+'</a>');";
    }

    $result.="
					}});
";
    return $result;
  }

  function AddSub($menu, $entry, &$result) {

    $menutext = $entry->Hierarchy() . " " . $entry->MenuText();

    if (strlen(utf8_decode($menutext)) > 30) {
      $menutext = htmlspecialchars(utf8_encode(substr(utf8_decode($menutext), 0, 30)), ENT_QUOTES, 'UTF-8') . " &#133;";
    } else {
      $menutext = htmlspecialchars($menutext, ENT_QUOTES, 'UTF-8');
    }

    $newmenu = $menu . "m";
    $result.="					var " . $newmenu . " = " . $menu . ".addMenu({title : '" . $menutext . "'});
";

    if ($entry->Type() != "sectionheader") 
      {
	$result.=$this->AddEntry($newmenu, $entry);
	$result.="					" . $newmenu . ".addSeparator();
";
    }

    return $newmenu;
  }

  function GetCMSLinker() {

    if ($this->GetPreference("loadcmslinker", "0") != "1") return;

    global $gCms;//=cmsms();
    $config = $this->GetConfig();	
    $content_ops = $gCms->GetContentOperations();
    $content_array = $content_ops->GetAllContent(true);

    $level = 0;
    $menu = "m";
    $result = "
		
//Creates a new plugin class and a custom listbox
tinymce.create('tinymce.plugins.CMSLinkerPlugin', {
	createControl: function(n, cm) {	
		switch (n) {
			case 'cmslinker':			
				var c = cm.createMenuButton('cmslinker', {
					title : '" . $this->Lang("cmsmslinker") . "',
					image : '" . $config["root_url"] . "/modules/TinyMCE/images/cmsmslink.gif',
					icons : false
				});

				c.onRenderMenu.add(function(c, m) {
";

    foreach ($content_array as $one) {

		if(is_object($one)) {

			if ($one->Active()) {

				if ($one->Name() == '--------') continue; // ???? -Stikki-
				
				$thislevel = substr_count($one->Hierarchy(), ".");

				if ($thislevel < $level) {
				
					$menu = substr($menu, ($level - $thislevel));
					$level-= ( $level - $thislevel);
				}

				if ($one->ChildCount() > 0) {
				
					$menu = $this->AddSub($menu, $one, $result);
					$level++;
					
				} else {
				
					$result .= $this->AddEntry($menu, $one);
				}
			}
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

  function GenerateConfig($id, $returnid, $frontend=false, $templateid="", $languageid="") {

    $result = "";
    $result.=$this->GetCustomDropDown();
    $result.=$this->GetCMSLinker();

    $config = $this->GetConfig();
    $urlext = '?';

    if ($frontend) {
      $this->smarty->assign("isfrontend", "true");
    } else {
      $urlext = get_secure_param();
      $this->smarty->assign("isfrontend", "false");
    }

    if ($this->GetPreference("startenabled", "1") == "1") {
      $this->smarty->assign("startupmode", "exact");
    } else {
      $this->smarty->assign("startupmode", "none");
    }

    if (isset($_SESSION['tiny_live_textareas']))
      $this->smarty->assign("textareas", $_SESSION["tiny_live_textareas"]);

    $params=array(
        "templateid"=>$templateid,
        "mediatype"=>"screen"
        );
    global $gCms;
    /*$contentops = $gCms->GetContentOperations();
    $cssurl=$this->CreateLink($id, "stylesheet", $contentops->GetDefaultContent(), "", $params, "", true);
    $cssurl.="&amp;bogus=".time()."&amp;showtemplate=false";
    $cssurl=str_replace("&amp;","&",$cssurl);
    //$cssurl=str_replace(",",",,",$cssurl);
    $this->smarty->assign("css", $cssurl);*/
    $this->smarty->assign("css", $config['root_url'] . "/modules/TinyMCE/stylesheet.php?templateid=" . $templateid . "&amp;mediatype=screen&amp;bogus=" . time());

    $this->smarty->assign("rooturl", $config["root_url"]);
    $this->smarty->assign("encoding", $this->GetPreference('entityencoding', 'raw'));

    $this->smarty->assign("skin", $this->GetPreference('skin', 'default'));
    $this->smarty->assign("skinvariation", $this->GetPreference('skinvariation', ''));

    $this->smarty->assign("allowresizing", $this->GetPreference('allowresizing', 'none'));

    $this->smarty->assign("avoidlinkconversion", $this->GetPreference('avoidlinkconversion', '0'));

    $plugins = $this->GetPreference('plugins', $this->plugins_default_enabled);
    if (($this->GetPreference("allow_tables", "0") == "1") || ($this->GetPreference("advanced_allow_tables", "0") == "1") || ($this->GetPreference("front_allow_tables", "0") == "1")) {
      $plugins.=",table";
    }

    // Add module plugins
    $all_module_plugins = $this->GetModulePlugins();
    $module_plugins_available = $this->GetPreference('module_plugins', '');
    $module_pluginsarray = explode(',', $module_plugins_available);
    $module_plugins = '';

    if (count($all_module_plugins) > 0) {

      foreach ($all_module_plugins as $onemodule) {

        foreach ($onemodule as $oneplugin) {

          if (in_array($oneplugin[0], $module_pluginsarray)) {


            $module_plugins .= ",-" . $oneplugin[0];
            $result .= "$oneplugin[1]\n\ntinymce.PluginManager.add('$oneplugin[0]', tinymce.plugins.$oneplugin[0]);\n\n";
          }
        }
      }
    }


    $this->smarty->assign("urlext", $urlext);
    $this->smarty->assign("plugins", $plugins);
    $this->smarty->assign("module_plugins", $module_plugins);

    if ($this->GetPreference("forcecleanpaste", "1") == "1") {
      $this->smarty->assign("pasteautoclean", "true");
    }


    if ($frontend) {

      $toolbar = 1;
      if ($this->GetPreference('front_toolbar1') != '') {
        $this->smarty->assign("toolbar" . $toolbar, $this->GetPreference('front_toolbar1'));
        $toolbar++;
      }

      if ($this->GetPreference('front_toolbar2') != '') {
        $this->smarty->assign("toolbar" . $toolbar, $this->GetPreference('front_toolbar2'));
        $toolbar++;
      }

      if ($this->GetPreference('front_toolbar3') != '') {
        $this->smarty->assign("toolbar" . $toolbar, $this->GetPreference('front_toolbar3'));
        $toolbar++;
      }

      if ($this->GetPreference("front_allow_tables", "0") == "1") {
        $this->smarty->assign("toolbar" . $toolbar, "tablecontrols");
      }
    } else {

      if ($this->CheckPermission('allowadvancedprofile')) {

        $toolbar = 1;
        if ($this->GetPreference('advanced_toolbar1') != '') {
          $this->smarty->assign("toolbar" . $toolbar, $this->GetPreference('advanced_toolbar1'));
          $toolbar++;
        }

        if ($this->GetPreference('advanced_toolbar2') != '') {
          $this->smarty->assign("toolbar" . $toolbar, $this->GetPreference('advanced_toolbar2'));
          $toolbar++;
        }

        if ($this->GetPreference('advanced_toolbar3') != '') {
          $this->smarty->assign("toolbar" . $toolbar, $this->GetPreference('advanced_toolbar3'));
          $toolbar++;
        }

        if ($this->GetPreference("advanced_allow_tables", "0") == "1") {
          $this->smarty->assign("toolbar" . $toolbar, "tablecontrols");
        }
      } else {

        $toolbar = 1;

        if ($this->GetPreference('toolbar1') != '') {
          $this->smarty->assign("toolbar" . $toolbar, $this->GetPreference('toolbar1'));
          $toolbar++;
        }

        if ($this->GetPreference('toolbar2') != '') {
          $this->smarty->assign("toolbar" . $toolbar, $this->GetPreference('toolbar2'));
          $toolbar++;
        }

        if ($this->GetPreference('toolbar3') != '') {
          $this->smarty->assign("toolbar" . $toolbar, $this->GetPreference('toolbar3'));
          $toolbar++;
        }

        if ($this->GetPreference("allow_tables", "0") == "1") {
          $this->smarty->assign("toolbar" . $toolbar, "tablecontrols");
        }
      }
    }

    $this->smarty->assign("blockformats", $this->GetPreference("dropdownblockformats", "p,div,h1,h2,h3,h4,h5,h6,div,blockquote,dt,dd,code,samp"));

    if ($this->GetPreference("relativeurls", 1) == 1) {
      $this->smarty->assign("relativeurls", "true");
    } else {
      $this->smarty->assign("relativeurls", "false");
    }

    if ($languageid=="") $languageid=substr(get_site_preference('frontendlang'),0,2);
    $this->smarty->assign("language", $languageid);

    if ($this->GetPreference('source_formatting', 1) == 1) {
      $this->smarty->assign("sourceformatting", "true");
    } else {
      $this->smarty->assign("sourceformatting", "false");
    }

    if ($this->GetPreference('show_path', 1) == 1) {
      $this->smarty->assign("showpath", "1");
    }

    $this->smarty->assign("editorwidth", "");
    if ($this->GetPreference("editor_width_auto", 1) != 1) {
      $this->smarty->assign("editorwidth", "'" . $this->GetPreference("editor_width") . $this->GetPreference("editor_width_unit") . "'");
    }
    $this->smarty->assign("editorheight", "");
    if ($this->GetPreference("editor_height_auto", 1) != 1) {
      $this->smarty->assign("editorheight", "'" . $this->GetPreference("editor_height") . $this->GetPreference("editor_height_unit") . "'");
    }

    if ($this->GetPreference("newlinestyle", "p") != "p") {
      $this->smarty->assign("force_br_newlines", "true");
      $this->smarty->assign("force_p_newlines", "false");
    } else {
      $this->smarty->assign("force_br_newlines", "false");
      $this->smarty->assign("force_p_newlines", "true");
    }

    if ($this->GetPreference("forcedrootblock", "false") == "false") {
      $this->smarty->assign("forcedrootblock", "false");
    } else {
      $this->smarty->assign("forcedrootblock", "'" . $this->GetPreference("forcedrootblock") . "'");
    }


    $this->smarty->assign("dateformat", $this->GetPreference('dateformat', "%Y-%m-%d"));
    $this->smarty->assign("timeformat", $this->GetPreference('timeformat', "%H:%M:%S"));

    $css_styles = $this->GetPreference('css_styles');
    $css_styles = str_replace("\n", "", $css_styles);
    $css_styles = str_replace("\r", "", $css_styles);

    $this->smarty->assign("css_styles", $css_styles);

    $extraconfig = "";
    if ($this->GetPreference("extraconfig") != "") {
      /* $lines=explode("\n",$this->GetPreference("extraconfig"));
        if (count($lines)>0) {
        $extraconfig="//Extra configuration\n";
        foreach($lines as $line) {
        $line=trim($line);
        //if (substr($line,-1,1)!=",") $line.=",";
        //$line=",".$line;
        $extraconfig.=",".$line."\n";
        }
        } */
      $extraconfig = "//Extra configuration\n";
      $extraconfig.="," . $this->GetPreference("extraconfig");
    }
    $this->smarty->assign("extraconfig", $extraconfig);

    $this->smarty->assign("filepickertitle", $this->Lang("filepickertitle"));
    $fpurl=$this->CreateLink($id,"filepicker",$returnid,"",array(),"",true);
    $fpurl=str_replace("&amp;","&",$fpurl);
    $this->smarty->assign("filepickerurl", $fpurl);
    $this->smarty->assign("fpwidth", $this->GetPreference("fpwidth", "700"));
    $this->smarty->assign("fpheight", $this->GetPreference("fpheight", "500"));

    $result .= $this->ProcessTemplate('tinyconfig.tpl');

    return $result;
  }

  function GetModulePlugins() {

    @set_time_limit(999);

    global $gCms;//=cmsms();

    foreach ($gCms->modules as $key => $value) {

      if (!array_key_exists($key, $this->module_plugins)) {

        if ($gCms->modules[$key]['installed'] == true && $gCms->modules[$key]['active'] == true) {

          if (method_exists($gCms->modules[$key]['object'], 'RegisterTinyMCEPlugin')) {

            $onemodule = array();
            foreach ($gCms->modules[$key]['object']->RegisterTinyMCEPlugin() as $oneplugin) {

              $plugin_name = strtolower($key) . "_" . $oneplugin[0];
              $plugin_script = str_replace($oneplugin[0], $plugin_name, $oneplugin[1]);
			  $plugin_script = html_entity_decode($plugin_script, ENT_QUOTES, 'UTF-8');			  
              $onemodule[] = array($plugin_name, $plugin_script, $oneplugin[2]);
            }

            $this->module_plugins[$key] = $onemodule;
          }
        }
      }
    }

    return $this->module_plugins;
  }

  function IsTempWritable() {
    $config = $this->GetConfig();
    $filename = $this->Slashes($config["root_path"] . "/tmp/tinyconfig.js");
    if (!@touch($filename))
      return false;
    return true;
  }

  function ContainsIllegalChars($filename) {

    if (strpos($filename, "'") !== false)
      return true;
    if (strpos($filename, "\"") !== false)
      return true;
    if (strpos($filename, "/") !== false)
      return true;
    if (strpos($filename, "\\") !== false)
      return true;
    if (strpos($filename, "&") !== false)
      return true;
    if (strpos($filename, "\$") !== false)
      return true;
    if (strpos($filename, "+") !== false)
      return true;

    return false;
  }

  function SaveStaticConfig($frontend=false, $templateid="", $languageid="") {
    $id = 'm1_'; $returnid = '';
    if( $frontend )
      {
        $contentops = cmsms()->GetContentOperations();
	$id = 'cntnt01'; $returnid = $contentops->GetDefaultContent();
      }
    $config = $this->config;
    $configcontent = $this->GenerateConfig($id, $returnid, $frontend, $templateid, $languageid);
    $filename = $this->Slashes($config["root_path"] . "/tmp/tinyconfig.js");
    return file_put_contents($filename, $configcontent);
  }

  function HandleFileResizing($tempname, $outname, $size_x, $size_y, $switchdimensions=true) {

    $tempname = $this->Slashes($tempname);
    $outname = $this->Slashes($outname);
    //$config=$this->cms->GetConfig();
    //$rooturl=$config["root_url"];

    $img_data = getimagesize($tempname);
    if (!$img_data)
      return false;

    $mime = $img_data['mime'];
    $image = "";

    switch ($mime) {

      case 'image/jpeg': $image = imagecreatefromjpeg($tempname);
        break;
      case 'image/gif': $image = imagecreatefromgif($tempname);
        break;
      case 'image/png': $image = imagecreatefrompng($tempname);
        break;
      default: return false;
    }

    $width = imagesx($image);
    $height = imagesy($image);
    $whratio = $width / $height;
    $hwratio = $height / $width;
    $newwidth = "";
    $newheight = "";
    /*
     * 		$this->Lang("forcewidth")=>1,
      $this->Lang("forceheight")=>2,
      $this->Lang("forcelargest")=>3,
      $this->Lang("forceboth")=>4, */
    $resizing = "1";

    if ($switchdimensions) {
      if ($width < $height) {
        $resizing = "2";
        $tmp = $size_x;
        $size_x = $size_y;
        $size_y = $tmp;
      }
    }

    switch ($resizing) {
      case "1" : {

          if ($width < $size_x) {

            $newwidth = $width;
            $newheight = $height;
            break;
          }

          $newwidth = $size_x;
          $newheight = $newwidth * $hwratio;
          break;
        }

      case "2" : {

          if ($height < $size_y) {

            $newwidth = $width;
            $newheight = $height;
            break;
          }

          $newheight = $size_y;
          $newwidth = $newheight * $whratio;
          break;
        }
    }

    //echo $resizing;
    //echo round($newwidth)."x".round($newheight);die();

    $newimage = imagecreatetruecolor(round($newwidth), round($newheight));
    imagecopyresampled($newimage, $image, 0, 0, 0, 0, $newwidth, $newheight, $width, $height);
    $format = "unchanged";

    if ($format == "unchanged") {
      switch ($mime) {

        case 'image/jpeg': return imagejpeg($newimage, $outname, 90);
        case 'image/gif': return imagegif($newimage, $outname);
        case 'image/png': return imagepng($newimage, $outname);
        default: return false;
      }
    } else {

      switch ($format) {
        case "jpg" : return imagejpeg($newimage, $outname, 90);
        case 'gif': return imagegif($newimage, $outname);
        case 'png': return imagepng($newimage, $outname);
      }
    }
  }

  function Slash($str, $str2="", $str3="") {

    if ($str == "")
      return $str2;
    if ($str2 == "")
      return $str;
    if ($str[strlen($str) - 1] != "/") {
      if ($str2[0] != "/") {
        return $str . "/" . $str2;
      } else {
        return $str . $str2;
      }
    } else {
      if ($str2[0] != "/") {
        return $str . $str2;
      } else {
        return $str . substr($str2, 1); //trim away one of the slashes
      }
    }
    //Three strings not supported yet...
    return "Error in Slash-function. Please report";
  }

}
?>
