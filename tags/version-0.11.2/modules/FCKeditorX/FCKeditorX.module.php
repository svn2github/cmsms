<?php
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
#TODO - install and uninstall, activate and deactivate, choose non-wysiwyg to actually work

class FCKeditorX extends CMSModule
{
  function Install(){
    $this->SetPreference('FCKConfig.SkinSelected', 'default');
    $this->SetPreference('FCKConfig.CMSMSLanguage', '1');
    $this->SetPreference('FCKConfig.EnableXHTML', '1');
    $this->SetPreference('FCKConfig.ContextMenu', '1');  
    $this->SetPreference('FCKConfig.BgColor', 'default');
    $this->SetPreference('FCKConfig.BodyCSS', 'default');
  }
  
  function Uninstall(){
    $this->RemovePreference('FCKConfig.SkinSelected');
    $this->RemovePreference('FCKConfig.CMSMSLanguage');
    $this->RemovePreference('FCKConfig.EnableXHTML');
    $this->RemovePreference('FCKConfig.ContextMenu'); 
    $this->RemovePreference('FCKConfig.BgColor'); 
    $this->RemovePreference('FCKConfig.BodyCSS'); 
  }

	function Upgrade($oldversion, $newversion)
	{
		$this->Install();
	}  

	function GetName()
	{
		return 'FCKeditorX';
	}

	function IsPluginModule()
	{
		return true;
	}

	function HasAdmin()
	{
		return true;
	}

	function GetVersion()
	{
		return '0.9.7';
	}
	
	function IsWYSIWYG() {
		return true;
	}

	function WYSIWYGTextarea($name='textarea',$columns='80',$rows='15',$encoding='',$content='',$stylesheet='')
	{
    
    
$ok = true;

if(ereg("Konqueror", $_SERVER["HTTP_USER_AGENT"])) $ok = false;
if(ereg("Safari", $_SERVER["HTTP_USER_AGENT"])) $ok = false;
    
    
if ($ok){   
    include_once(dirname(__FILE__)."/FCKeditor/fckeditor.php");
    
    
    
    echo "<h6 style='line-height: 0pt;'>&nbsp;</h6>";
    
    //+++++++++++++++++++++++++++++++++++
    // PREPARATION custom style TO DISPLAY
    //+++++++++++++++++++++++++++++++++++
        
    $stylesheet = str_replace ( "../", "", $stylesheet);

    // CHECK if there is a custom CSS to show
    if (strcmp($stylesheet, "") != 0)
        $templateid = substr($stylesheet, strpos($stylesheet,"=")+1);
    else
      $templateid = 1;
    
    
    // END if (strcmp($stylesheet, "") != 0){
    //+++++++++++++++++++++++++++++++++++
    // END PREPARATION custom style TO DISPLAY
    //+++++++++++++++++++++++++++++++++++
    
    
    echo "<input type='hidden' name='".$name."' id='".$name."'>";
		$oFCKeditor = new FCKeditor("FCKX".$name) ;
				
		echo '<script language="javascript" type="text/javascript" >'."\n";
		
    $offsetPath = $this->cms->config["uploads_url"];
    $offsetPath = str_replace( 'http://', '', $offsetPath );
    $offsetPath = substr($offsetPath, strpos($offsetPath, "/"));
    $offsetPath = str_replace( 'uploads', '', $offsetPath );	

		echo 'offsetPath="'.$offsetPath.'";'."\n";
		
    ?>
    
  function dimmi(m,ogge,visualizza) {
	
	 var mest = "";
	 var j = 0;
	 var k = 0;
	
	 var mi;

	 if (visualizza == "1") k = 5;
		 else k = 15;
	
	 for(mi in ogge) {
	  j++;
	  
	  if (visualizza == "0") mest += m + "." + mi + "=" + ogge[mi] +"\n";
		  else mest += m + "." + mi + "=" + "       ";
	  if (j==k){
		  alert(mest);
		  mest = "";
		  j = 0;
	  }
	  
	 }
	 alert(mest);
	}


    function PreparaHTMLtoSave(){
    
//     objII = top.FCKeditorAPI.__Instances;
    
    objI = parent.frames.FCKeditorAPI.__Instances;
    for (var i in objI)
    {
//       alert(i);
    
      obj = parent.frames.FCKeditorAPI.GetInstance(i);
      
      name = i.replace("FCKX","");
      
      obj1 = document.getElementById(name);
      
      obj1.value = obj.GetXHTML();
      
      
      obj.SetHTML("");
//       alert(obj.GetXHTML());

//       /<\/?(?:(?:[aA][a-zA-Z])|(?:[b-zB-Z!]))[^>]*>/ig

////////////////////////
////////////////////////
      var k1, k2, S, newStr, newTag;
      
      regexp= new RegExp ("/", "g");
      offsetPathRE = offsetPath.replace(regexp,"\\\/");
      offsetPathRE1 = "href=\"" + offsetPathRE;
      offsetPathRE2 = "src=\"" + offsetPathRE;      
      
      myRe= new RegExp ("<\/?(?:(?:[aA][a-zA-Z])|(?:[b-zB-Z!]))[^>]*>","g");
      str = obj1.value;
      k1 = 0;

//       alert(str);
      
      newStr = new String("");
      
      Tags = myRe.exec(str);
      while(Tags){
        k2 = Tags.index;
        newStr += obj1.value.substring(k1,k2);
//         alert(obj1.value.substring(k1,k2)+Tags);
        
        /////////////////////////////////////////
        /////////////////////////////////////////
        
        newTag = new String(Tags)
        
//         alert(newTag);
        
        regexp= new RegExp ("\\\.\\\.\\\/", "gi");
        newTag =  newTag.replace(regexp,"");       


        REP = new String(window.location);
        REP = REP.substring(0,REP.indexOf(offsetPath));
        regexp= new RegExp ("/", "g");
        REP = REP.replace(regexp,"\\\/");
        
        
        regexp= new RegExp (REP, "gi");
        newTag =  newTag.replace(regexp,"");


        regexp= new RegExp (offsetPathRE1, "gi");
        newTag =  newTag.replace(regexp,"href=\"");
        

        regexp= new RegExp (offsetPathRE2, "gi");
        newTag =  newTag.replace(regexp,"src=\"");
        
        
        regexp= new RegExp ("&quot;", "gi");
        newTag =  newTag.replace(regexp,'"');    
        
//         alert(newTag);
        /////////////////////////////////////////
        /////////////////////////////////////////
        newStr += newTag;
        
        S = new String(Tags);
        k1 = k2 + S.length;
        Tags = myRe.exec(str);
      }
//       alert(obj1.value.substring(k1));
      newStr += obj1.value.substring(k1);
      
//       alert(newStr);
      
      obj1.value = newStr;
      
      /////////////////////////////////////////
      /////////////////////////////////////////
      
//       /{[^}]*}/ig
      
      myRe= new RegExp ("{[^}]*}","gi");
      str = newStr;
      k1 = 0;
      
      newStr = new String("");
      
      Tags = myRe.exec(str);
      while(Tags){
        k2 = Tags.index;
        newStr += obj1.value.substring(k1,k2);
//         alert(obj1.value.substring(k1,k2)+Tags);
        
        
        newTag = new String(Tags)
        
//         alert(newTag);
        
        regexp= new RegExp ("&quot;", "gi");
        newTag =  newTag.replace(regexp,'"');
        
        newStr += newTag;
        
        S = new String(Tags);
        k1 = k2 + S.length;
        Tags = myRe.exec(str);
      }
//       alert(obj1.value.substring(k1));
      newStr += obj1.value.substring(k1);
             
      
      
      /////////////////////////////////////////
      /////////////////////////////////////////
      
//       alert(newStr);
      
      obj1.value = newStr;

      }
    }
     
    function initialize(){
      	obj = document.getElementById('FCKX<?php echo $name ?>');
    	  obj.form.onsubmit = PreparaHTMLtoSave
    }
  

      document.onclick=initialize
    
    <?php
    echo '</script>';
		
		
    $oFCKeditor->BasePath = $this->cms->config["root_url"].'/modules/FCKeditorX/FCKeditor/';
// 		$config['root_url'] = 'http://localhost/ww2/cms-daily';

// 		$oFCKeditor->BasePath = '../modules/FCKeditorX/FCKeditor/';
		
		if (intval($rows) == 0)
		  $rows = 13;
		
		$oFCKeditor->Height = $rows*33+20*3;
		$oFCKeditor->Value = str_replace('src="uploads', 'src="'.$offsetPath.'uploads', $content) ;
		
    //GET FCKeditor CMSMS configuration
    $skin = $this->GetPreference('FCKConfig.SkinSelected');
		$lang = $this->GetPreference('FCKConfig.CMSMSLanguage');
		$xhtml = $this->GetPreference("FCKConfig.EnableXHTML");
		$context = $this->GetPreference("FCKConfig.ContextMenu");	
		
		if ($lang){
		  $lang = $this->cms->userprefs["default_cms_language"];
		  if (strpos($lang, "_"))
		    $lang = substr($lang, 0, 2);
		  else
		    $lang = false;
    }
		 
    
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
    
    
//     $toolbar1 = array( "Default" => array( array( 'EditSource','-','Cut','Copy','Paste','PasteText','-','Undo','Redo','-','Print','SpellCheck','Find','Replace','-','SelectAll','RemoveFormat','-','ShowDetails', 'Link','RemoveLink','Anchor','-','Image','Table','ShowTableBorders','Rule','SpecialChar' ), array( 'FontFormat','-','Bold','Italic','Underline','-','Subscript','Superscript','-','InsertOrderedList','InsertUnorderedList','Outdent','Indent' ) ) );
// 
// 
//     $oFCKeditor->Config['ToolbarSets']['Default'] = "[
// 	['Source','DocProps','-','Save','NewPage','Preview','-','Templates'],
// 	['Cut','Copy','Paste','PasteText','PasteWord','-','Print','SpellCheck'],
// 	['Undo','Redo','-','Find','Replace','-','SelectAll','RemoveFormat'],
// 	['Bold','Italic','Underline','StrikeThrough','-','Subscript','Superscript'],
// 	['OrderedList','UnorderedList','-','Outdent','Indent'],
// 	['JustifyLeft','JustifyCenter','JustifyRight','JustifyFull'],
// 	['CMSContent','Link','Unlink','Anchor'],
// 	['Image','Flash','Table','Rule','Smiley','SpecialChar','PageBreak','UniversalKey'],
// 	['Form','Checkbox','Radio','TextField','Textarea','Select','Button','ImageButton','HiddenField'],
// 	'/',
// 	['Style','FontFormat','FontName','FontSize'],
// 	['TextColor','BGColor'],
// 	['About']
// ] ";
// 
//     $oFCKeditor->Config['ToolbarSets'] = "Default"; 

//     $oFCKeditor->Config['StylesXmlPath'] = 
// 
// 
// 
// 
// FCKConfig.ToolbarSets["Default"] = [
// 	['Source','DocProps','-','Save','NewPage','Preview','-','Templates'],
// 	['Cut','Copy','Paste','PasteText','PasteWord','-','Print','SpellCheck'],
// 	['Undo','Redo','-','Find','Replace','-','SelectAll','RemoveFormat'],
// 	['Bold','Italic','Underline','StrikeThrough','-','Subscript','Superscript'],
// 	['OrderedList','UnorderedList','-','Outdent','Indent'],
// 	['JustifyLeft','JustifyCenter','JustifyRight','JustifyFull'],
// 	['CMSContent','Link','Unlink','Anchor'],
// 	['Image','Flash','Table','Rule','Smiley','SpecialChar','PageBreak','UniversalKey'],
// 	['Form','Checkbox','Radio','TextField','Textarea','Select','Button','ImageButton','HiddenField'],
// 	'/',
// 	['Style','FontFormat','FontName','FontSize'],
// 	['TextColor','BGColor'],
// 	['About']
// ] ;
// 



    $oFCKeditor->Config['LinkBrowserURL']  = $this->cms->config["root_url"].'/modules/FCKeditorX/FCKeditor/editor/filemanager/browser/default/browser.html?Connector=connectors/php/connector.php' ;
    $oFCKeditor->Config['ImageBrowserURL'] = $this->cms->config["root_url"].'/modules/FCKeditorX/FCKeditor/editor/filemanager/browser/default/browser.html?Type=Image&Connector=connectors/php/connector.php' ;
    $oFCKeditor->Config['FlashBrowserURL'] = $this->cms->config["root_url"].'/modules/FCKeditorX/FCKeditor/editor/filemanager/browser/default/browser.html?Type=Flash&Connector=connectors/php/connector.php' ;
    $oFCKeditor->Config['LinkUploadURL']   = $this->cms->config["root_url"].'/modules/FCKeditorX/FCKeditor/editor/filemanager/upload/php/upload.php' ;
    $oFCKeditor->Config['ImageUploadURL']  = $this->cms->config["root_url"].'/modules/FCKeditorX/FCKeditor/editor/filemanager/upload/php/upload.php?Type=Image' ;
    $oFCKeditor->Config['FlashUploadURL']  = $this->cms->config["root_url"].'/modules/FCKeditorX/FCKeditor/editor/filemanager/upload/php/upload.php?Type=Flash' ;
//     $oFCKeditor->Config['OffsetPath']      = "/ww2/cms-daily/";


//     $server_path = $this->cms->config["root_path"]."/";
//     $server_path = $this->cms->config["uploads_path"]."/";
//     
//     $oFCKeditor->Config['LinkBrowserURL']  = $this->cms->config["root_url"].'/modules/FCKeditorX/FCKeditor/editor/filemanager/browser/default/browser.html?Connector=connectors/php/connector.php&ServerPath='.$server_path;
//     $oFCKeditor->Config['ImageBrowserURL'] = $this->cms->config["root_url"].'/modules/FCKeditorX/FCKeditor/editor/filemanager/browser/default/browser.html?Type=Image&Connector=connectors/php/connector.php&ServerPath='.$server_path;
//     $oFCKeditor->Config['FlashBrowserURL'] = $this->cms->config["root_url"].'/modules/FCKeditorX/FCKeditor/editor/filemanager/browser/default/browser.html?Type=Flash&Connector=connectors/php/connector.php&ServerPath='.$server_path;
//     $oFCKeditor->Config['LinkUploadURL']   = $this->cms->config["root_url"].'/modules/FCKeditorX/FCKeditor/editor/filemanager/upload/php/upload.php?ServerPath='.$server_path;
//     $oFCKeditor->Config['ImageUploadURL']  = $this->cms->config["root_url"].'/modules/FCKeditorX/FCKeditor/editor/filemanager/upload/php/upload.php?Type=Image&ServerPath='.$server_path;
//     $oFCKeditor->Config['FlashUploadURL']  = $this->cms->config["root_url"].'/modules/FCKeditorX/FCKeditor/editor/filemanager/upload/php/upload.php?Type=Flash&ServerPath='.$server_path;
    
    

//     $oFCKeditor->Config['LinkBrowserURL']  = '/cms-daily/modules/FCKeditorX/FCKeditor/editor/filemanager/browser/default/browser.html?Connector=connectors/php/connector.php' ;
//     $oFCKeditor->Config['ImageBrowserURL'] = '/cms-daily/modules/FCKeditorX/FCKeditor/editor/filemanager/browser/default/browser.html?Type=Image&Connector=connectors/php/connector.php' ;
//     $oFCKeditor->Config['FlashBrowserURL'] = '/cms-daily/modules/FCKeditorX/FCKeditor/editor/filemanager/browser/default/browser.html?Type=Flash&Connector=connectors/php/connector.php' ;
//     $oFCKeditor->Config['LinkUploadURL']   = '/cms-daily/modules/FCKeditorX/FCKeditor/editor/filemanager/upload/php/upload.php' ;
//     $oFCKeditor->Config['ImageUploadURL']  = '/cms-daily/modules/FCKeditorX/FCKeditor/editor/filemanager/upload/php/upload.php?Type=Image' ;
//     $oFCKeditor->Config['FlashUploadURL']  = '/cms-daily/modules/FCKeditorX/FCKeditor/editor/filemanager/upload/php/upload.php?Type=Flash' ;
    
//     echo "<br/>";
//     echo $this->cms->config["root_url"].'/modules/FCKeditorX/fckstyles.xml.php?id='.$templateid ;
//     echo "<br/>";
//     $oFCKeditor->Config['StylesXmlPath'] = $this->cms->config["root_url"].'/tmp/cache/fckstyles.xml' ;

//     $oFCKeditor->Config['TemplatesXmlPath'] = $this->cms->config["root_url"].'/modules/FCKeditorX/fcktemplates.xml.php' ;
  
    $oFCKeditor->Create();
    }
    else{
//     WYSIWYGTextarea($name='textarea',$columns='80',$rows='15',$encoding='',$content='',$stylesheet='')
      echo '<textarea name="'.$name.'" cols="'.$columns.'" rows="'.$rows.'" id="'.$name.'">';
      echo $content;
      echo '</textarea>';
    }
    
	}
	
	function WYSIWYGGenerateBody()
	{

	}
	
	function WYSIWYGGenerateHeader()
	{
	}

	function GetHelp($lang='en_US')
	{
		return "
		<h3>What does this do?</h3>
    <p>Enables <b>FCKeditor</b> to be used as a WYSIWYG.</p>
    <h3>How do I use it?</h3>
    <p>Install it, then go to User Preferences and Set <b>FCKeditor</b> to be your wysiwyg of choice.</p>
		";
	}
	
	function DoAction($action, $id, $params, $returnid = -1)
	{
	 
		if (strcmp("defaultadmin",$action)==0){
    
    //START on UPDATING custom CONFIG file for FCK
    
      //GET VALUE SELECTED FROM USER
			if (isset($_REQUEST[$id.'submit']))	{
  				if (isset($_REQUEST[$id.'skin']))	{
  					  $new_skin = $_REQUEST[$id.'skin'];
              $this->SetPreference('FCKConfig.SkinSelected', $new_skin);
  				}
  				
  				if (isset($_REQUEST[$id.'BgColor']))	{
  					  $BgColor = $_REQUEST[$id.'BgColor'];
              $this->SetPreference('FCKConfig.BgColor', $BgColor);
  				}
  				
  				if (isset($_REQUEST[$id.'BodyCSS']))	{
  					  $BodyCSS = $_REQUEST[$id.'BodyCSS'];
              $this->SetPreference('FCKConfig.BodyCSS', $BodyCSS);
  				}
  				
  				
  				if (isset($_REQUEST[$id.'lang']))	
              $this->SetPreference('FCKConfig.CMSMSLanguage', 1);
  				else
              $this->SetPreference('FCKConfig.CMSMSLanguage', 0);
  				
  				if (isset($_REQUEST[$id.'xhtml']))	
              $this->SetPreference('FCKConfig.EnableXHTML', 1);
  				else
              $this->SetPreference('FCKConfig.EnableXHTML', 0);
  				
  				if (isset($_REQUEST[$id.'context']))
              $this->SetPreference('FCKConfig.ContextMenu', 1);
  				else
              $this->SetPreference('FCKConfig.ContextMenu', 0);
					
			}
			
			$skin = $this->GetPreference("FCKConfig.SkinSelected");
			$lang = $this->GetPreference("FCKConfig.CMSMSLanguage");
			$xhtml = $this->GetPreference("FCKConfig.EnableXHTML");
			$context = $this->GetPreference("FCKConfig.ContextMenu");
			$BgColor = $this->GetPreference("FCKConfig.BgColor");
			$BodyCSS = $this->GetPreference("FCKConfig.BodyCSS");

			$skins_available = Array();
      
			$d = dir(dirname(__FILE__).'/FCKeditor/editor/skins');

			$i = 0;
			//FIND ALL SKIN AVAILABLE
			while ($entry = $d->read()) {
				if (!((strcmp($entry,".")==0)||(strcmp($entry,"..")==0))) {
			    		$skins_available[$i] = trim($entry);
			    		$i++;
			    	}
			}
			$d->close();
			$num_skins = $i;

			echo $this->CreateFormStart($id, $action);

			?>

			<div class="adminform">
			
<table style="border: 1px solid #F9F2DE;">
<tr>
<th style="background-color:#F9F2DE;" colspan="3" align="right">
<img src="<?php echo $this->cms->config['root_url']; ?>/modules/FCKeditorX/logotop.gif" width="238" height="41">
</th>
</tr>
<tr>
<td>Select skin</td>
<td>:</td>
<td><select name="<?php echo $id?>skin" >
<?php
for($i=0;$i<$num_skins;$i++) {
  echo '<option value="';
  echo $skins_available[$i];
  echo '" ';
  if ((strcmp($skins_available[$i],$skin ))==0)
      echo ' selected="selected" ';
  echo '>';
  echo $skins_available[$i];
  echo '</option>'."\n";
}
?>
</select></td>
</tr>
<!--
<tr>
<td>Select Toolbar </td>
<td>:</td>
<td><select name="select" >
</select></td>
</tr>
-->
<tr>
<td>Use CMS Language settings</td>
<td>:</td>
<td align="center">
<input type="checkbox" name="<?php echo $id?>lang" 
<?php
if ($lang)
  echo ' checked="checked" ';
?>
></td>
</tr>
<tr>
<td>Background color</td>
<td>:</td>
<td align="center">
<input type="text" name="<?php echo $id?>BgColor" 
value="<?php echo $BgColor ?>"></td>
</tr>
<tr><td colspan="3"><i>leave BLANK or set DEFAULT  for use PAGE CSS</i><br/><br/></td></tr>

<td>Body tag CSS</td>
<td>:</td>
<td align="center">
<input type="text" name="<?php echo $id?>BodyCSS" 
value="<?php echo $BodyCSS ?>" size="60" ></td>
</tr>
<tr><td colspan="3"><i>leave BLANK or set DEFAULT  for use PAGE CSS</i><br/><br/></td></tr>

<tr>
<td>Enable XHTML Formatting</td>
<td>:</td>
<td align="center">
<input type="checkbox" name="<?php echo $id?>xhtml" 
<?php
if ($xhtml)
  echo ' checked="checked" ';
?>
></td>
</tr>
<tr><td colspan="3"><i></i><br/><br/></td></tr>
<tr>
<td>Enable context menu </td>
<td>:</td>
<td align="center">
<input type="checkbox" name="<?php echo $id?>context" 
<?php
if ($context)
  echo ' checked="checked" ';
?>
></td>
<tr><td colspan="3"><i>right click on HMTL object</i><br/><br/></td></tr>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td align="right">
<input type="submit" name="<?php echo $id?>submit" value="Submit" />
</td>
</tr>
</table>
			</div>

			<?php

			echo $this->CreateFormEnd();


		}
	}

	function GetAuthor()
	{
		return 'Roberto Tagliento';
	}

	function GetAuthorEmail()
	{
		return '&lt;megabob3@yahoo.it&gt;';
	}
	
	function GetChangeLog()
	{
		?>
		<ul>
		<li>
		<p>Version: 0.9</p>		
		<p>IMPROVED techinal approach on some solution .</p>
		<p>UPDATED to FCKeditor 2.1.1 </p>
		<p>ADD the possibility to SET background COLOR</p>
		<p>Version for CMSMS 0.10.SVN .</p>
		</li>
		<li>
		<p>Version: 0.7</p>
		<p>FIXED bugs and improved configuration functionalities.</p>
		<p>Version for CMSMS 0.10.SVN .</p>
		</li>
		<li>
		<p>Version: 0.6</p>
		<p>FIXED destination of uploads.</p>
		<p>Version for CMSMS 0.10.SVN .</p>
		<p>ADDED plugin for INTERNAL link of CMSMS (THANKS!!! to <b>Woudloper</b> for the plugin).</p>
		<p>ADDED binding on custom CSS of CMSMS (THANKS to <b>infusion</b> for some incipit information).</p>
		<p>UPDATED to FCKeditor 2.0 </p>
		</li>
		<li>
		<p>Version: 0.5</p>
		<p>Beta version for CMSMS 0.10.4 .</p>
		</li>
		<li>
		<p>Version: 0.4</p>
		<p>Original module code for FCKeditor 2 WYSIWYG textarea replacement tool.</p>
		</li>
		<li>
		<p>Author: Roberto Tagliento  &lt;megabob3@yahoo.it&gt;</p>
		<p>Converted for use with new CMS Module architecture.</p>
		</li>
		</ul>
		<?php
	}
}

# vim:ts=4 sw=4 noet
?>
