<?php
#CMS - CMS Made Simple
#(c)2004 by Ted Kulp (wishy@users.sf.net)
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
#$Id: News.module.php 2114 2005-11-04 21:51:13Z wishy $

class Printing extends CMSModule {
	function GetName() {
		return 'Printing';
	}

	function GetFriendlyName() {
	  return $this->Lang("friendlyname");    
	}

	function IsPluginModule() {
		return true;
	}

	function HasAdmin() {
		return true;
	}

	function GetVersion() {
		return '1.1.1';
	}

	function MinimumCMSVersion() {
		return '1.8';
	}

	function GetAdminDescription() {
 		return $this->Lang('description');

	}

	function GetAdminSection() {
		return 'extensions';
  }

  function InstallPostMessage() {
    return $this->Lang('postinstall');
  }

  function relativeToAbsolute($prefix, $text) {
    // search for single quotes and replace them by double quotes
    $search = '\'';
    $replace = '"';
    $text = str_replace($search, $replace, $text);
    // replace relative urls by absolute (prefix them with $prefix)
    $pattern = '/href="(?!http|https|ftp|irc|feed|mailto)([\/]?)(.*)"/i';
    $replace = 'href="'.$prefix.'/$2"';
    $text = preg_replace($pattern, $replace, $text);
    // return
    return $text;
  }

  function GetBody($html) {
    $pos1=stripos($html,"<body");
    if ($pos1 === FALSE) return $html; //no <body
    $pos2=stripos($html,">",$pos1+1);
    if ($pos2 === FALSE) return $html; //no end of <body>tag
    $pos2++; //increase to just after > of body-tag
    $pos3=stripos($html,"</body>",$pos2);
    if ($pos3 === FALSE) return substr($html,$pos2); //no end tag, just return from after <body>
    //then return from after <body> to before </body>
    return "\n<!-- body-->\n".substr($html,$pos2,$pos3-$pos2)."\n<!-- /body-->\n"; 
  }

  function GetCurrentURL($showtemplate=false) {
    $url = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
    if ($showtemplate) return $url;
    if (strpos($url,'?')) { //other params present
      $url .= "&showtemplate=false";
    } else {
      $url .= '?showtemplate=false';
    }
    return $url;
  }

  function GetURLContent($url) {
    $content=file_get_contents($url);
    return $content;
  }
	
  function SetParameters() {	  
    $this->RestrictUnknownParams();
    $this->RegisterModulePlugin();

    $this->SetParameterType('url',CLEAN_STRING);
    $this->SetParameterType('pageid',CLEAN_INT);

    $this->CreateParameter('text', $this->Lang("defaultlinktext"), $this->Lang('help_text'));
    $this->SetParameterType('text',CLEAN_STRING);
    
    $this->CreateParameter('pdf', "false", $this->Lang('help_pdf'));
    $this->SetParameterType('pdf',CLEAN_STRING);
    
    $this->CreateParameter('popup', "false", $this->Lang('help_popup'));
    $this->SetParameterType('popup',CLEAN_STRING);
    
    $this->CreateParameter('script', "false", $this->Lang('help_script'));
    $this->SetParameterType('script',CLEAN_STRING);
    
    $this->CreateParameter('includetemplate', "false", $this->Lang('help_includetemplate'));
    $this->SetParameterType('includetemplate',CLEAN_STRING);
    
    $this->CreateParameter('showbutton', "false", $this->Lang('help_showbutton'));
    $this->SetParameterType('showbutton',CLEAN_STRING);
    
    $this->CreateParameter('class', "false", $this->Lang('help_class'));
    $this->SetParameterType('class',CLEAN_STRING);
    
    $this->CreateParameter('class_img', "false", $this->Lang('help_class_img'));
    $this->SetParameterType('class_img',CLEAN_STRING);
    
    $this->CreateParameter('src_img', "false", $this->Lang('help_src_img'));
    $this->SetParameterType('src_img',CLEAN_STRING);
    
    $this->CreateParameter('more', "false", $this->Lang('help_more'));
    $this->SetParameterType('more',CLEAN_STRING);
    
    $this->CreateParameter('onlyurl', "false", $this->Lang('help_onlyurl'));
    $this->SetParameterType('onlyurl',CLEAN_STRING);
    
  }
	
	function VisibleToAdminUser() {
    return $this->CheckPermission('modifyprintingsettings') || $this->CheckPermission('Modify Templates');
  }
	
  function UninstallPostMessage() {
    return $this->Lang('postuninstall');		
	}
	

// calguy1000: June 2010 -- commented out
// wtf does this do?	
// 	function ContentPostRender(&$content) {	  
// 	  $newcontent=(isset($_SESSION["printhtml"])?$_SESSION['printhtml']:'');
// 	  if ($newcontent!="") {
// 	    $content=$newcontent;
// 	    $_SESSION["printhtml"]="";
// 	    unset($_SESSION["printhtml"]);
// 	    return $content;
// 	  }
// 	}
	
	function SetLinkTemplate($template) {
	  $this->SetTemplate('linktemplate',$template);	      
	}
	
	function ResetLinkTemplate() {
	  $fn = dirname(__FILE__).DIRECTORY_SEPARATOR.'templates'.DIRECTORY_SEPARATOR.'linktemplate.tpl';
    if( file_exists( $fn ) ) {
      $template = @file_get_contents($fn);
      $this->SetLinkTemplate($template);      
    }
	}
	

	function SetOverrideStyle($stylesheet) {
	  $this->SetPreference('overridestyle',$stylesheet);    
	}
	
  function ResetOverrideStyle() {
	  $fn = dirname(__FILE__).DIRECTORY_SEPARATOR.'css'.DIRECTORY_SEPARATOR.'override.css';
    if( file_exists( $fn ) ) {
      $template = @file_get_contents($fn);
      $this->SetOverrideStyle($template);      
    }
	}
	

	function SetPrintTemplate($template) {
	  $this->SetTemplate('printtemplate',$template);   
	}
	
	
	function ResetPrintTemplate() {
	  $fn = dirname(__FILE__).DIRECTORY_SEPARATOR.'templates'.DIRECTORY_SEPARATOR.'printtemplate.tpl';
    if( file_exists( $fn ) ) {
      $template = @file_get_contents($fn);
      $this->SetPrintTemplate($template);      
    }
	}	
	
	function SetPDFTemplate($template) {
	  $this->SetTemplate('pdftemplate',$template);    
	}
	
	
	function ResetPDFTemplate() {
	  $fn = dirname(__FILE__).DIRECTORY_SEPARATOR.'templates'.DIRECTORY_SEPARATOR.'pdftemplate.tpl';
    if( file_exists( $fn ) ) {
      $template = @file_get_contents($fn);
      $this->SetPDFTemplate($template);      
    }
	}
    
	function GetHelp($lang='en_US')
	{
		return $this->Lang('help');
	}

	function GetAuthor()
	{
		return 'Morten Poulsen';
	}

	function GetAuthorEmail()
	{
		return 'morten@poulsen.org';
	}

	function GetChangeLog() {
		return $this->ProcessTemplate ('changelog.tpl'); 
	}
}

?>
