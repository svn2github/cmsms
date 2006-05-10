<?php
/*
#-------------------------------------------------------------------------
# Module: FCKeditorX - WYSIWYG editor
# Version: 0.9.x, Roberto Taglieto, alias MegaBob3
#
#-------------------------------------------------------------------------
# CMS - CMS Made Simple is (c) 2005 by Ted Kulp (wishy@cmsmadesimple.org)
# This project's homepage is: http://www.cmsmadesimple.org
#
#-------------------------------------------------------------------------
#
# This program is free software; you can redistribute it and/or modify
# it under the terms of the GNU General Public License as published by
# the Free Software Foundation; either version 2 of the License, or
# (at your option) any later version.
#
# This program is distributed in the hope that it will be useful,
# but WITHOUT ANY WARRANTY; without even the implied warranty of
# MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
# GNU General Public License for more details.
# You should have received a copy of the GNU General Public License
# along with this program; if not, write to the Free Software
# Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA 02111-1307 USA
# Or read it online: http://www.gnu.org/licenses/licenses.html#GPL
#
#-------------------------------------------------------------------------
*/


class FCKeditorX extends CMSModule
{

	function GetName()
	{
		return "FCKeditorX"; 
	}


	function GetFriendlyName()
	{
		return $this->Lang('friendlyname');
	}

	

	function GetVersion()
	{
		return '1.0 RC1';
	}
	

	function IsWYSIWYG() {
		return true;
	}
	
	
	function GetHelp()
	{
		return $this->Lang('help');
	}


	function GetAuthor()
	{
		return 'Roberto Tagliento';
	}


	function GetAuthorEmail()
	{
		return 'megabob3@yahoo.it';
	}
	
	
	function GetChangeLog()
	{
		return $this->Lang('changelog');
	}



	function IsPluginModule()
	{
		return true;
	}


	function HasAdmin()
	{
		return true;
	}


	function GetAdminSection()
	{
		return 'extensions';
	}


	function GetAdminDescription()
	{
		return $this->Lang('moddescription');
	}


	function VisibleToAdminUser()
	{
        return $this->CheckPermission('Modify FCKeditorX');
	}


	function GetDependencies()
	{
		return array();
	}


	function Install()
	{
    $this->CreatePermission('Modify FCKeditorX', 'Modify FCKeditorX');

    $this->SetPreference('FCKConfig.SkinSelected', 'default');
    $this->SetPreference('FCKConfig.CMSMSLanguage', '1');
    $this->SetPreference('FCKConfig.EnableXHTML', '1');
    $this->SetPreference('FCKConfig.ContextMenu', '1');  
    $this->SetPreference('FCKConfig.BgColor', 'default');
    $this->SetPreference('FCKConfig.BodyCSS', 'default');
    $this->SetPreference('FCKConfig.Width', 'default');
    $this->SetPreference('FCKConfig.Height', 'default');
    $this->SetPreference('FCKConfig.ToolbarSet', 'default');
//     $this->SetPreference('FCKConfig.ToolbarSets', '');

    ///////////////////////////////////////
    global $gCms;
    $db =& $gCms->GetDb();

		$dict = NewDataDictionary($db);
		$flds = "
			fckx_id I KEY,
			data X
		";

		$taboptarray = array('mysql' => 'TYPE=MyISAM');
		$sqlarray = $dict->CreateTableSQL(cms_db_prefix()."module_FCKX", 
				$flds, $taboptarray);
		$dict->ExecuteSQLArray($sqlarray);
		
		
		$query  = "INSERT INTO " . cms_db_prefix() . "module_FCKX ( fckx_id , data ) ";
		$query .= "VALUES ('1', '')";
    $result = $db->Execute($query);
    
		$query  = "INSERT INTO " . cms_db_prefix() . "module_FCKX ( fckx_id , data ) ";
		$query .= "VALUES ('2', '')";
    $result = $db->Execute($query);
		
		$basic = "
FCKConfig.ToolbarSets[\"Basic\"] = [
	['Bold','Italic','-','OrderedList','UnorderedList','-','Link','Unlink','-','About']
] ;
";
    
    $db->Execute("UPDATE " . cms_db_prefix() . "module_FCKX SET data = ? WHERE fckx_id = ? LIMIT 1", array($basic, 2));
		
    
    ///////////////////////////////////////

		// put mention into the admin log
		$this->Audit( 0, $this->Lang('friendlyname'), $this->Lang('installed',$this->GetVersion()));
	}


	function InstallPostMessage()
	{
		return $this->Lang('postinstall');
	}


	function UninstallPostMessage()
	{
		return $this->Lang('postuninstall');
	}


	
	function Upgrade($oldversion, $newversion)
	{
	  $this->RemovePermission('Use FCKeditorX');
		$this->Install();
		$this->InstallPostMessage();

//  	  $current_version = $oldversion;
//  	  
// 		switch($current_version)
// 		{
// 			case "1.0":
// 			     break;
// 			case "1.1":
// 			     break;
// 		}
// 
// 		// put mention into the admin log
// 		$this->Audit( 0, $this->Lang('friendlyname'), $this->Lang('upgraded',$this->GetVersion()));

	}
	
	
	function Uninstall()
	{
    $this->RemovePreference('FCKConfig.SkinSelected');
    $this->RemovePreference('FCKConfig.CMSMSLanguage');
    $this->RemovePreference('FCKConfig.EnableXHTML');
    $this->RemovePreference('FCKConfig.ContextMenu');
    $this->RemovePreference('FCKConfig.BgColor');
    $this->RemovePreference('FCKConfig.BodyCSS');
    $this->RemovePreference('FCKConfig.Width');
    $this->RemovePreference('FCKConfig.Height');
    $this->RemovePreference('FCKConfig.ToolbarSet');
//     $this->RemovePreference('FCKConfig.ToolbarSets');
		
		$this->RemovePermission('Modify FCKeditorX');
		
		    global $gCms;
		    $db =& $gCms->GetDb();
		$dict = NewDataDictionary( $db );

		$sqlarray = $dict->DropTableSQL( cms_db_prefix()."module_FCKX" );
		$dict->ExecuteSQLArray($sqlarray);
		
		// put mention into the admin log
		$this->Audit( 0, $this->Lang('friendlyname'), $this->Lang('uninstalled'));
	}

	function SetParameters()
	{
		$this->CreateParameter('content', '', $this->lang('help_content'));
		$this->CreateParameter('toolbar', 'Default', $this->lang('help_toolbar'));
		$this->CreateParameter('height', '200', $this->lang('height_help'));
		$this->CreateParameter('width', '400', $this->lang('width_help'));
		$this->CreateParameter('context', '1', $this->lang('help_context'));
		$this->CreateParameter('skin', 'default', $this->lang('help_skin'));
		$this->CreateParameter('name', 'FCKXtextarea', $this->lang('help_name'), false);
	}

/////////////////////////////////////////////////
/////////////////////////////////////////////////

function WYSIWYGTextarea($name='textarea',$columns='80',$rows='15',$encoding='',$content='',$stylesheet='', $params='') {


if (isset($params['name']))
  $name = $params['name'];
  
if (isset($params['content']))
  $content = $params['content'];

$ok = false;

$html_out = '';


if(ereg("MSIE", $_SERVER["HTTP_USER_AGENT"])) $ok = true;
if(ereg("Firefox", $_SERVER["HTTP_USER_AGENT"])) $ok = true;
if(ereg("Gecko/20051111", $_SERVER["HTTP_USER_AGENT"])) $ok = true;  //Maybe WRONG

if(ereg("Konqueror", $_SERVER["HTTP_USER_AGENT"])) $ok = false;
if(ereg("Safari", $_SERVER["HTTP_USER_AGENT"])) $ok = false;
if(ereg("Opera", $_SERVER["HTTP_USER_AGENT"])) $ok = false;

// Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8) Gecko/20051111 Firefox/1.5
// Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1; .NET CLR 1.1.4322) 
// Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; en) Opera 8.51
// echo    $_SERVER["HTTP_USER_AGENT"]; 

    
if ($ok){   
    include_once(dirname(__FILE__)."/FCKeditor/fckeditor.php");
    
    $html_out .= "<h6 style='line-height: 0pt;'>&nbsp;&nbsp;</h6>";
    
    //+++++++++++++++++++++++++++++++++++
    // PREPARATION custom style TO DISPLAY
    //+++++++++++++++++++++++++++++++++++
        
    $stylesheet = str_replace ( "../", "", $stylesheet);

    $templateid = NULL;
    
    // CHECK if there is a custom CSS to show
    if (strcmp($stylesheet, "") != 0)
        $templateid = substr($stylesheet, strpos($stylesheet,"=")+1);
    
    
    // END if (strcmp($stylesheet, "") != 0){
    //+++++++++++++++++++++++++++++++++++
    // END PREPARATION custom style TO DISPLAY
    //+++++++++++++++++++++++++++++++++++
    
    		
    $html_out .= "";
    
		$oFCKeditor = new FCKeditor($name) ;		
		    
		$diff = str_replace($this->cms->config["root_url"].'/', '', $this->cms->config["uploads_url"]);

    $oFCKeditor->BasePath = $this->cms->config["root_url"].'/modules/FCKeditorX/FCKeditor/';
    
		if (intval($rows) == 0)
		  $rows = 13;
		
		$ToolbarSet = $this->GetPreference('FCKConfig.ToolbarSet');
		if (strcmp($ToolbarSet, 'default') != 0)
		    $oFCKeditor->ToolbarSet = $ToolbarSet;    
		if (isset($params['toolbar']))
          $oFCKeditor->ToolbarSet = $params['toolbar'];
		
    $height = $this->GetPreference('FCKConfig.Height');
		if ($height == 0)
		    $oFCKeditor->Height = $rows*33+20*3;
		else
		    $oFCKeditor->Height = $height;
		if (isset($params['height']))
          $oFCKeditor->Height = $params['height'];


    $width = $this->GetPreference('FCKConfig.Width');
		if ($width != 0)
		    $oFCKeditor->Width = $width;    
		if (isset($params['width']))
          $oFCKeditor->Width = $params['width'];		
		

		$oFCKeditor->Value = $content ;
		
		
    //GET FCKeditor CMSMS configuration
    $skin = $this->GetPreference('FCKConfig.SkinSelected');   
    if (isset($params['skin']))
          $skin = $params['skin'];
    

		$xhtml = $this->GetPreference("FCKConfig.EnableXHTML");
		if (isset($params['xhtml']))
          $xhtml = $params['xhtml'];
		
		$context = $this->GetPreference("FCKConfig.ContextMenu");
		if (isset($params['context']))
          $context = $params['context'];    	

		$lang = $this->GetPreference('FCKConfig.CMSMSLanguage');		
		if ($lang){
		  $lang = $this->cms->userprefs["default_cms_language"];
		  if (strpos($lang, "_"))
		    $lang = substr($lang, 0, 2);
		  else
		    $lang = false;
    }
		if (isset($params['lang']))
          $lang = $params['lang'];
		 
    //LOAD CMSMS config of FCKeditor
    $oFCKeditor->Config['CustomConfigurationsPath'] = '' ;
    $oFCKeditor->Config['SkinPath'] = $oFCKeditor->BasePath."editor/skins/$skin/";
    
    if (!$lang)
      $oFCKeditor->Config['AutoDetectLanguage'] = 'true';
    else{
      $oFCKeditor->Config['AutoDetectLanguage'] = 'false';
      $oFCKeditor->Config['DefaultLanguage'] = $lang;
    }
      
    if ($context == 0)
      $oFCKeditor->Config['ContextMenu'] = "['']";
    
    if ($xhtml == 1){
      $oFCKeditor->Config['EnableXHTML'] = 'true';
      $oFCKeditor->Config['EnableSourceXHTML'] = 'true';
    }

    $oFCKeditor->Config['EditorAreaCSS'] = $this->cms->config["root_url"].'/modules/FCKeditorX/fck_editorarea.css.php?id='.$templateid ;

    $oFCKeditor->Config['StylesXmlPath'] = $this->cms->config["root_url"].'/modules/FCKeditorX/fckstyles.xml.php?id='.$templateid ;

    $oFCKeditor->Config['LinkBrowserURL']  = $oFCKeditor->BasePath.'editor/filemanager/browser/default/browser.html?Connector=connectors/php/connector.php' ;
    $oFCKeditor->Config['ImageBrowserURL'] = $oFCKeditor->BasePath.'editor/filemanager/browser/default/browser.html?Type=Image&Connector=connectors/php/connector.php' ;
    $oFCKeditor->Config['FlashBrowserURL'] = $oFCKeditor->BasePath.'editor/filemanager/browser/default/browser.html?Type=Flash&Connector=connectors/php/connector.php' ;
    $oFCKeditor->Config['LinkUploadURL']   = $oFCKeditor->BasePath.'editor/filemanager/upload/php/upload.php' ;
    $oFCKeditor->Config['ImageUploadURL']  = $oFCKeditor->BasePath.'editor/filemanager/upload/php/upload.php?Type=Image' ;
    $oFCKeditor->Config['FlashUploadURL']  = $oFCKeditor->BasePath.'editor/filemanager/upload/php/upload.php?Type=Flash' ;

    $oFCKeditor->Config["CustomConfigurationsPath"] = $this->cms->config["root_url"].'/modules/FCKeditorX/FCKeditorXcfg.js.php'  ;
    
    $html_out .= $oFCKeditor->CreateHtml();
    }
    else{
      $html_out .= '<textarea name="'.$name.'" cols="'.$columns.'" rows="'.$rows.'" id="'.$name.'">';
      $html_out .= $content;
      $html_out .= '</textarea>';
    }

    return $html_out;
    
	}


	function DoAction($action, $id, $params, $return_id=-1)
	{
	  
	  if ( strcmp('default', $action) == 0  )
	     return $this->WYSIWYGTextarea('','','','','','', $params);

	  $who_act = 0;
    if ($this->CheckPermission('Modify FCKeditorX')){
      		switch ($action){
                  case 'edit_setting':
                      $this->SavePref($params);
                  	break;
                  case 'edit_styles':
                      $this->UpdateStyle($params);
	                    $who_act = 1;
                    break;
                  case 'edit_toolbar':
                      $this->UpdateToolbar($params);
	                    $who_act = 2;
                    break;
                  case 'defaultadmin':{
                  	// only let people access module preferences if they have permission
                  	break;
                  }
      		}
          $this->DisplayAdminPanel($id, $params, $return_id, '', $who_act);
  		}
  	else{
  		$this->DisplayErrorPage($id, $params, $return_id,
  			$this->Lang('accessdenied'));
  		}

	}



	/*---------------------------------------------------------
	   DisplayErrorPage($id, $params, $return_id, $message)
	   NOT PART OF THE MODULE API
	   	  ---------------------------------------------------------*/
    function DisplayErrorPage($id, &$params, $returnid, $message='')
    {
		$this->smarty->assign('title_error', $this->Lang('error'));
		if ($message != '')
			{
			$this->smarty->assign_by_ref('message', $message);
			}

        // Display the populated template
        echo $this->ProcessTemplate('error.tpl');
    }

	/*---------------------------------------------------------
	   DisplayAdminPanel($id, $params, $return_id, $message)
	   NOT PART OF THE MODULE API
	   
	   It sets smarty tag values, and then calls the
	   code necessary to render the template.   
	  ---------------------------------------------------------*/
    function DisplayAdminPanel($id, &$params, $returnid, $message='', $who_act)
    {
      /////////////////////////////////////
      /////////////////////////////////////
      echo $this->StartTabHeaders();
  			echo $this->SetTabHeader("settings",$this->Lang("settings"), ($who_act == 0)?true:false);
  			echo $this->SetTabHeader("styles",$this->Lang("styles"), ($who_act == 1)?true:false);
  			echo $this->SetTabHeader("toolbar",$this->Lang("toolbar_text"), ($who_act == 2)?true:false);
			echo $this->EndTabHeaders();
			
			echo $this->StartTabContent();
			
    		echo $this->StartTab("settings");
    			echo $this->DisplaySettings($id, $params, $returnid, $message);
  			echo $this->EndTab();
			
  			echo $this->StartTab("styles");
  			 echo $this->DisplayStyles($id, $params, $returnid, $message);
  			echo $this->EndTab();
			
  			echo $this->StartTab("toolbar");
  			 echo $this->DisplayToolbar($id, $params, $returnid, $message);
  			echo $this->EndTab();
			
			echo $this->EndTabContent();
      /////////////////////////////////////
      /////////////////////////////////////
    }
    
    function DisplayToolbar($id, &$params, $returnid, $message=''){
      
    global $gCms;
    $db =& $gCms->GetDb();

      $styles = $db->GetOne("SELECT data FROM ".cms_db_prefix()."module_FCKX WHERE fckx_id = 2");
      
      $this->smarty->assign('startform', $this->CreateFormStart($id, 'edit_toolbar', $returnid));
    	$this->smarty->assign('endform', $this->CreateFormEnd());
      
      $this->smarty->assign('toolbar_textarea', $this->CreateTextArea(false, $id, $styles, "toolbar"));
      
      $this->smarty->assign('submit', $this->CreateInputSubmit($id, "submit", $this->Lang("update")));
      
      $this->smarty->assign('title', $this->Lang("toolbar_text"));

      $this->smarty->assign('info4toolbars', $this->Lang('info4toolbars'));
      
      return $this->ProcessTemplate('toolbarpanel.tpl');
      
    }
    
    function DisplayStyles($id, &$params, $returnid, $message=''){
      
    global $gCms;
    $db =& $gCms->GetDb();

      $styles = $db->GetOne("SELECT data FROM ".cms_db_prefix()."module_FCKX WHERE fckx_id = 1");
      
      $this->smarty->assign('startform', $this->CreateFormStart($id, 'edit_styles', $returnid));
    	$this->smarty->assign('endform', $this->CreateFormEnd());
      
      $this->smarty->assign('styles_textarea', $this->CreateTextArea(false, $id, $styles, "styles"));
      
      $this->smarty->assign('submit', $this->CreateInputSubmit($id, "submit", $this->Lang("update")));
      
      $this->smarty->assign('title', $this->Lang("styles"));
      
      $this->smarty->assign('info4styles', $this->Lang('info4styles'));
      
      return $this->ProcessTemplate('stylespanel.tpl');
      
    }
    
    function DisplaySettings($id, &$params, $returnid, $message=''){
    	
			$skin = $this->GetPreference("FCKConfig.SkinSelected");
			$lang = intval($this->GetPreference("FCKConfig.CMSMSLanguage"));
			$xhtml = intval($this->GetPreference("FCKConfig.EnableXHTML"));
			$context = intval($this->GetPreference("FCKConfig.ContextMenu"));
			$toolbar = $this->GetPreference("FCKConfig.ToolbarSet");
			if (strcmp($toolbar , '') == 0)
        $toolbar  = 'default';	
			$BgColor = $this->GetPreference("FCKConfig.BgColor");
			$BodyCSS = strtolower($this->GetPreference("FCKConfig.BodyCSS"));
      $height = intval($this->GetPreference('FCKConfig.Height'));
      if ($height == 0)
        $height = 'default';
      $width = $this->GetPreference('FCKConfig.Width');
      $unit = substr($width, -1, 1);
      if (strcmp("%", $unit) != 0)
        $unit = "px";
      
      $width = intval($this->GetPreference('FCKConfig.Width'));
      if ($width == 0)
        $width = 'default';
			
			if ((strcmp($BodyCSS , '') == 0)||(strcmp($BodyCSS , 'default') == 0))
        $BodyCSS  = 'text-align: left; background-color: #ffffff;';

			$skins_available = Array();
      
			$d = dir(dirname(__FILE__).'/FCKeditor/editor/skins');

			$i = 0;
			//FIND ALL SKIN AVAILABLE
			while ($entry = $d->read()) {
				if (!((strcmp($entry,".")==0)||(strcmp($entry,"..")==0))) {
			    		$skins_available[trim($entry)] = trim($entry);
			    		$i++;
			    	}
			}
			$d->close();
      
      
    	$this->smarty->assign('startform', $this->CreateFormStart($id, 'edit_setting', $returnid));
    	$this->smarty->assign('endform', $this->CreateFormEnd());
    	
    	$this->smarty->assign('logoimg', '<img src="'.$this->cms->config["root_url"].'/modules/FCKeditorX/FCKeditor/logotop.gif" width="238" height="41">');
    	
    	$this->smarty->assign('skin_text', $this->Lang('skin_text'));
    	
    	$this->smarty->assign('skin_input', $this->CreateInputDropdown($id, "skin", $skins_available, -1, $skin, ''));
    	
    	$this->smarty->assign('lang_text', $this->Lang('lang_text'));
    	$val_lang = -1;
    	if ($lang == 1)
    	   $val_lang = $lang;    	 
    	$this->smarty->assign('lang_input', $this->CreateInputCheckbox($id, "lang", $lang, $val_lang, ''));
    	
    	$this->smarty->assign('toolbar_text', $this->Lang('toolbar_text'));
    	$this->smarty->assign('toolbar_input', $this->CreateInputText($id, "toolbar", $toolbar));
    	$this->smarty->assign('toolbar_help', $this->Lang('toolbar_help'));
    	
    	$this->smarty->assign('bg_text', $this->Lang('bg_text'));
    	$this->smarty->assign('bg_input', $this->CreateInputText($id, "BgColor", $BgColor));
    	$this->smarty->assign('bg_help', $this->Lang('bg_help'));
    	
    	$this->smarty->assign('bd_css_text', $this->Lang('bg_css_text'));
    	$this->smarty->assign('bd_css_input', $this->CreateInputText($id, "BodyCSS", $BodyCSS, '60'));
    	$this->smarty->assign('bd_css_help', $this->Lang('bg_css_help'));
    	
    	$this->smarty->assign('xhtml_text', $this->Lang('xhtml_text'));
    	$val_xhtml = -1;
    	if ($xhtml == 1)
    	   $val_xhtml = $xhtml;
    	$this->smarty->assign('xhtml_input', $this->CreateInputCheckbox($id, "xhtml", $xhtml, $val_xhtml, ''));
    	
    	$this->smarty->assign('context_text', $this->Lang('context_text'));
    	$val_context = -1;
    	if ($context == 1)
    	   $val_context = $context;
    	$this->smarty->assign('context_input', $this->CreateInputCheckbox($id, "context", $context, $val_context, ''));
    	$this->smarty->assign('context_help', $this->Lang('context_help'));
    	
    	$this->smarty->assign('height_text', $this->Lang('height_text'));
    	$this->smarty->assign('height_input', $this->CreateInputText($id, "height", $height));
    	$this->smarty->assign('height_help', $this->Lang('height_help'));

    	$this->smarty->assign('width_text', $this->Lang('width_text'));
    	$this->smarty->assign('width_input', $this->CreateInputText($id, "width", $width));
    	$this->smarty->assign('width_help', $this->Lang('width_help'));
	
    	$this->smarty->assign('unit_input', $this->CreateInputDropdown($id, "unit", array("px" => "px", "%" => "%"), -1, $unit, ''));
	
    	$this->smarty->assign('submit', $this->CreateInputSubmit($id, "submit", $this->Lang("update")));

      // Display the populated template
      return $this->ProcessTemplate('settingpanel.tpl');
    }
    
    function UpdateToolbar(&$params){
      
    global $gCms;
    $db =& $gCms->GetDb();
  
      $db->Execute("UPDATE " . cms_db_prefix() . "module_FCKX SET data = ? WHERE fckx_id = ? LIMIT 1", array($params['toolbar'], 2));
      
      echo "<br/><b>".$this->Lang("toolbar_updated")."</b><br/>";
      
    }
    
    function UpdateStyle(&$params){
      
    global $gCms;
    $db =& $gCms->GetDb();
  
  		$query  = "UPDATE " . cms_db_prefix() . "module_FCKX SET ";
      $query .= " data = '".$params['styles']."' WHERE fckx_id =1 LIMIT 1 ;";
      
      $result = $db->Execute($query);
      
      echo "<br/><b>".$this->Lang("styles_updated")."</b><br/>";

    }
    
    function SavePref(&$params){ 
  
  				if (isset($params['skin']))	
              $this->SetPreference('FCKConfig.SkinSelected', $params['skin']);
  				
  				if (isset($params['toolbar']))	
              $this->SetPreference('FCKConfig.ToolbarSet', $params['toolbar']);
  				
  				if (isset($params['BgColor']))	
              $this->SetPreference('FCKConfig.BgColor', $params['BgColor']);
  				
  				if (isset($params['BodyCSS']))	
              $this->SetPreference('FCKConfig.BodyCSS', $params['BodyCSS']);
  				
  				if (isset($params['height']))	
              $this->SetPreference('FCKConfig.Height', intval($params['height']));
  				
  				if (isset($params['width'])){
  				    $width  = $params['width'];
  				    $width .= $params['unit'];
              $this->SetPreference('FCKConfig.Width', $width);
          }
  				
  				
  				if (isset($params['lang']))	
              $this->SetPreference('FCKConfig.CMSMSLanguage', 1);
  				else
              $this->SetPreference('FCKConfig.CMSMSLanguage', 0);
  				
  				if (isset($params['xhtml']))	
              $this->SetPreference('FCKConfig.EnableXHTML', 1);
  				else
              $this->SetPreference('FCKConfig.EnableXHTML', 0);
  				
  				if (isset($params['context']))
              $this->SetPreference('FCKConfig.ContextMenu', 1);
  				else
              $this->SetPreference('FCKConfig.ContextMenu', 0);
              
          
          echo "<br/><b>".$this->Lang("setting_updated")."</b><br/>";
    }

}

?>
