<?php
#-------------------------------------------------------------------------
# Module: ThemeManager - a module for importing and exporting template
#   and stylesheet packages.
# Version: 1.0.5, Calguy1000
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


define( "DTD_VERSION", "1.2" );

function get_urls($string, $strict=true) {
  $types = array("href", "src", "url");
  while(list(,$type) = each($types)) {
    $innerT = $strict?'[a-z0-9:?=&@/._-]+?':'.+?';
    preg_match_all ("|$type\=([\"'`])(".$innerT.")\\1|i", $string, $matches);
    $ret[$type] = $matches[2];
  }
  
  return $ret;
};

#-------------------------------------------------------------------------
class ThemeManager extends CMSModule
{
  var $dtd = '
<!DOCTYPE theme [
  <!ELEMENT theme (name,dtdversion,template+,stylesheet+,assoc+,reference*)>
  <!ELEMENT name (#PCDATA)>
  <!ELEMENT dtdversion (#PCDATA)>
  <!ELEMENT template (tname,tencoding,tdata)>
  <!ELEMENT tname (#PCDATA)>
  <!ELEMENT tencoding (#PCDATA)>
  <!ELEMENT tdata (#PCDATA)>
  <!ELEMENT stylesheet (cssname,cssmediatype,cssencoding,cssdata)>
  <!ELEMENT cssname (#PCDATA)>
  <!ELEMENT cssmediatype (#PCDATA)>
  <!ELEMENT cssdata (#PCDATA)>
  <!ELEMENT assoc (assoc_tname,assoc_cssname)>
  <!ELEMENT assoc_tname (#PCDATA)>
  <!ELEMENT assoc_cssname (#PCDATA)>
  <!ELEMENT reference (refname,refencoded,reflocation,refdata)>
  <!ELEMENT refname (#PCDATA)>
  <!ELEMENT refencoded (#PCDATA)>
  <!ELEMENT reflocation (#PCDATA)>
  <!ELEMENT refdata (#PCDATA)>
]>';

  /*---------------------------------------------------------
   GetName()
   ---------------------------------------------------------*/
  function GetName()
  {
    return 'ThemeManager';
  }


  /*---------------------------------------------------------
   GetFriendlyName()
   ---------------------------------------------------------*/
  function GetFriendlyName()
  {
    return $this->Lang('friendlyname');
  }

	
  /*---------------------------------------------------------
   GetVersion()
   ---------------------------------------------------------*/
  function GetVersion()
  {
    return '1.0.5';
  }


  /*---------------------------------------------------------
   MinimumCVSVersion()
   ---------------------------------------------------------*/
  function MinimumCMSVersion()
  {
    return "0.12-beta1";
  }


  /*---------------------------------------------------------
   GetHelp()
   ---------------------------------------------------------*/
  function GetHelp()
  {
    return $this->Lang('help');
  }


  /*---------------------------------------------------------
   GetAuthor()
   ---------------------------------------------------------*/
  function GetAuthor()
  {
    return 'calguy1000';
  }


  /*---------------------------------------------------------
   GetAuthorEmail()
   This returns a string that is presented in the Module
   Admin if you click on the "About" link. It helps users
   of your module get in touch with you to send bug reports,
   questions, cases of beer, and/or large sums of money.
   ---------------------------------------------------------*/
  function GetAuthorEmail()
  {
    return 'calguy1000@hotmail.com';
  }


  /*---------------------------------------------------------
   GetChangeLog()
   This returns a string that is presented in the module
   Admin if you click on the About link. It helps users
   figure out what's changed between releases.
   See the note on localization at the top of this file.
   ---------------------------------------------------------*/
  function GetChangeLog()
  {
    return $this->Lang('changelog');
  }


  /*---------------------------------------------------------
   IsPluginModule()
   ---------------------------------------------------------*/
  function IsPluginModule()
  {
    return false;
  }


  /*---------------------------------------------------------
   HasAdmin()
   ---------------------------------------------------------*/
  function HasAdmin()
  {
    return true;
  }


  /*---------------------------------------------------------
   GetAdminSection()
   ---------------------------------------------------------*/
  function GetAdminSection()
  {
    return 'layout';
  }


  /*---------------------------------------------------------
   GetAdminDescription()
   ---------------------------------------------------------*/
  function GetAdminDescription()
  {
    return $this->Lang('moddescription');
  }


  /*---------------------------------------------------------
   VisibleToAdminUser()
   ---------------------------------------------------------*/
  function VisibleToAdminUser()
  {
    return $this->CheckPermission('Manage Themes') ||
      ($this->CheckPermission('Add Stylesheets') &&
      $this->CheckPermission('Add Templates') &&
      $this->CheckPermission('Add Stylesheet Assoc'));
  }

  /*---------------------------------------------------------
   GetDependencies()
   ---------------------------------------------------------*/
  function GetDependencies()
  {
    return array();
  }


  /*---------------------------------------------------------
   Install()
   ---------------------------------------------------------*/
  function Install()
  {
    // this module does not have any tables of its own

    // create a permission
    $this->CreatePermission('Manage Themes', 'Manage Themes');
        
    // put mention into the admin log
    $this->Audit( 0, $this->Lang('friendlyname'), $this->Lang('installed',$this->GetVersion()));
  }


  /*---------------------------------------------------------
   InstallPostMessage()
   ---------------------------------------------------------*/
  function InstallPostMessage()
  {
    return $this->Lang('postinstall');
  }


  /*---------------------------------------------------------
   UninstallPostMessage()
   ---------------------------------------------------------*/
  function UninstallPostMessage()
  {
    return $this->Lang('postuninstall');
  }


  /*---------------------------------------------------------
   Upgrade()
   ---------------------------------------------------------*/
  function Upgrade($oldversion, $newversion)
  {
    // nothing to do here, yet
		
    // put mention into the admin log
    $this->Audit( 0, $this->Lang('friendlyname'), $this->Lang('upgraded',$this->GetVersion()));
  }
	
	
  /*---------------------------------------------------------
   Uninstall()
   ---------------------------------------------------------*/
  function Uninstall()
  {
    // remove the permissions
    $this->RemovePermission('Manage Themes');

    // put mention into the admin log
    $this->Audit( 0, $this->Lang('friendlyname'), $this->Lang('uninstalled'));
  }


  /*---------------------------------------------------------
   DoAction($action, $id, $params, $return_id)
   ---------------------------------------------------------*/
  function DoAction($action, $id, $params, $return_id=-1)
  {
    switch ($action)
      {
      case 'default':
	{
	  // module has no user output
	  break;
	}
      case 'defaultadmin':
	{
	  // only let people access module preferences if they have permission
	  $this->DisplayAdminPanel($id, $params, $return_id);
	  break;
	}
      case 'exporttheme':
	{
	  if ($this->CheckPermission('Manage Themes'))
	    {
	      $this->DoExportTheme($id, $params, $return_id);
	    }
	  else
	    {
	      $this->DisplayErrorPage($id, $params, $return_id,
				      $this->Lang('accessdenied'));
	    }
	  break;
	}
      case 'importtheme':
	{
	  if ($this->CheckPermission('Add Stylesheets') &&
	      $this->CheckPermission('Add Templates') &&
	      $this->CheckPermission('Add Stylesheet Assoc'))
	    {
	      $this->DoImportTheme($id, $params, $return_id);
	    }
	  else
	    {
	      $this->DisplayErrorPage($id, $params, $return_id,
				      $this->Lang('accessdenied'));
	    }
	  break;
	}
      }

  }


  /*---------------------------------------------------------
   _cleanupReferences
   ---------------------------------------------------------*/
  function _cleanupReferences( $prefix, $references, &$input )
  {
    $data = $input;
    foreach( $references as $ref )
      {
	$data = preg_replace( '|'.$ref['location'].'|', $prefix."/".$ref['location'],
			      $data );
	if( $data == '' )
	  {
	    return false;
	  }
      }
    $input = $data;
    return true;
  }


  /*---------------------------------------------------------
   _extractHTMLImages
   ---------------------------------------------------------*/
  function _extractTemplateImages($template)
  {
    $result = array();
    $urls = get_urls($template->content);
    // we're only concerned about the src urls
    foreach( $urls['src'] as $src )
      {
	// if it's an external link we ignore it
	// if it's an internal link, we add it
	if( !preg_match('/^http\:/',$src) ) 
	  {
	    $result[] = $src;
	  }
      }

    return $result;
  }


  /*---------------------------------------------------------
   _extractStylesheetImages
   ---------------------------------------------------------*/
  function _extractStylesheetImages($stylesheet)
  {
    $regex='/url\s*\(\"*(.*)\"*\)/i';
    preg_match_all( $regex, $stylesheet->value, $matches );
    // $matches[1] is all immportant
    // now strip out any that have ^http in them
    $result = array();
    foreach( $matches[1] as $match )
      {
	if( !preg_match( '/^http\:/', $match ) )
	  {
	    $result[] = $match;
	  }
      }

    return $result;
  }


  /*---------------------------------------------------------
   _saveEncodedFile
   ---------------------------------------------------------*/
  function _saveEncodedFile( $prefix, $name, &$location, $encoded, $data )
  {
    // clean up the location
    if( substr($location,0,1) == '/' )
      {
	$location = substr($location,1);
      }
    
    if( $encoded )
      {
	$data = base64_decode( $data );
      }

    // translate slashes if we have to
    $newloc = preg_replace( '|\/|', DIRECTORY_SEPARATOR, $location );

    $dir = $prefix.DIRECTORY_SEPARATOR.dirname( $location );
    if( !file_exists( $dir ) )
      {
	$this->_mkdirr( $dir );
	if( !file_exists( $dir ) )
	  {
	    return 0;
	  }
      }

    // and put it out there
    global $gCms;
    $fn = $prefix.DIRECTORY_SEPARATOR.$newloc;
    $fp = fopen( $fn, "w" );
    if( !$fp )
      {
	return 0;
      }
    fwrite( $fp, $data );
    fclose( $fp );
    return 1;
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
	$this->smarty->assign('message', $message);
      }

    // Display the populated template
    echo $this->ProcessTemplate('error.tpl');
  }


  /*---------------------------------------------------------
   DisplayAdminPanel($id, $params, $return_id, $message)
   NOT PART OF THE MODULE API
   ---------------------------------------------------------*/
  function DisplayAdminPanel($id, &$params, $returnid, $message='')
  {
    echo $this->StartTabHeaders();
    if ($this->CheckPermission('Manage Themes'))
      {
	echo $this->SetTabHeader('export', $this->Lang('export'));
      }
    if ($this->CheckPermission('Add Stylesheets') &&
	$this->CheckPermission('Add Templates') &&
	$this->CheckPermission('Add Stylesheet Assoc'))
      {
	echo $this->SetTabHeader('import', $this->Lang('import'));
      }
    echo $this->EndTabHeaders();

    echo $this->StartTabContent();

    // the export tab
    if ($this->CheckPermission('Manage Themes'))
      {
	echo $this->StartTab('export');
	$alltemplates = TemplateOperations::LoadTemplates();
	
	$this->smarty->assign('startform',
			      $this->CreateFormStart($id,'exporttheme',$returnid));
	
	$this->smarty->assign('idtext', $this->Lang('id'));
	$this->smarty->assign('nametext', $this->Lang('name'));
	$this->smarty->assign('activetext', $this->Lang('active'));
	$this->smarty->assign('defaulttext', $this->Lang('default'));
	$this->smarty->assign('exporttext', $this->Lang('export'));
	
	// iterate through all of the templates
	global $gCms;
	$rowclass = 'row1';
	$rowarray = array();
	foreach( $alltemplates as $templ )
	  {
	    $onerow = new stdClass();
	    $onerow->id = $templ->id;
	    $onerow->name = $templ->name;
	    if( $templ->active )
	      {
		$onerow->active = $gCms->variables['admintheme']->DisplayImage('icons/system/true.gif');
	      }
	    if( $templ->default )
	      {
		$onerow->default = $gCms->variables['admintheme']->DisplayImage('icons/system/true.gif');
	      }
	    $onerow->rowclass = $rowclass;
	    if( $templ->active )
	      {
		$onerow->select = 
		  $this->CreateInputCheckbox( $id, 'export'.$onerow->id, $onerow->id );
	      }
	    array_push( $rowarray, $onerow );
	    ($rowclass == "row1" ? $rowclass = "row2" : $rowclass = "row1");
	  }
	$this->smarty->assign ('items', $rowarray);
	$this->smarty->assign ('itemcount', count($rowarray));
	
	$this->smarty->assign('prompt_themename',
			      $this->Lang('prompt_themename'));
	$this->smarty->assign('input_themename',
			      $this->CreateInputText($id,'input_themename','',20,20));
	$this->smarty->assign('submit',
			      $this->CreateInputSubmit($id,'submit',$this->Lang('export')));
	$this->smarty->assign('endform',
			      $this->CreateFormEnd());
	echo $this->ProcessTemplate('export.tpl');
	echo $this->EndTab();
      }

    // the import tab
    if ($this->CheckPermission('Add Stylesheets') &&
	$this->CheckPermission('Add Templates') &&
	$this->CheckPermission('Add Stylesheet Assoc'))
      {
	echo $this->StartTab('import');
	$this->smarty->assign('startform',
			      $this->CreateFormStart($id,'importtheme',$returnid,'post', 'multipart/form-data'));
	$this->smarty->assign('prompt_browse', $this->Lang('upload'));
	$this->smarty->assign('input_browse',
			      $this->CreateFileUploadInput($id,'input_browse'));
	$this->smarty->assign('submit', 
			      $this->CreateInputSubmit($id,'submit',
						       $this->Lang('import')));
	$this->smarty->assign('endform',
			      $this->CreateFormEnd());
	echo $this->ProcessTemplate('import.tpl');
	echo $this->EndTab();
      }
  }


  function DoExportTheme($id, &$params, $returnid)
  {
    global $gCms;


    $themename = trim($params['input_themename'] );
    if( $themename == '' )
      {
	$themename = 'theme';
      }
    $themename = str_replace(' ','_',$themename);

    $template_ids = array();
    $stylesheet_ids = array();
    $associations = array();
    $urls = array();
    foreach( $params as $key => $value )
      {
	if( !preg_match( '/^export/', $key ) )
	  {
	    continue;
	  }

	$id = substr( $key, strlen('export') );
	$template_ids[] = $id;

	// we are exporting a template
	// get the template
	$template = TemplateOperations::LoadTemplateByID( $id );
	if( !$template )
	  {
	    $this->DisplayErrorPage( $id, $params, $returnid, 
				     $this->Lang('error_templatenotfound'));
	    return;
	  }

	// get the images, etc attached to the template
	$t_urls = $this->_extractTemplateImages($template);
	$urls = array_merge( $urls, $t_urls );

	// get the stylesheets attached to that template
	$stylesheets = StylesheetOperations::GetTemplateAssociatedStylesheets( $id );
	$assoc = array();
	$assoc['tname'] = $template->name;
	$tmp = array();
	foreach( $stylesheets as $cssid )
	  {
	    $stylesheet_ids[] = $cssid;
	    $css = StylesheetOperations::LoadStylesheetByID( $cssid );
	    $tmp[] = $css->name;
	    $cssurls = $this->_extractStylesheetImages($css);
	    print_r( $cssurls ); echo "<br/><br/>";
	    $urls = array_merge( $urls, $cssurls );
	  }
	$assoc['css'] = $tmp;
	$associations[] = $assoc;
      }

    // make sure we're not outputting the same thing twice
    $template_ids = array_unique( $template_ids );
    $stylesheet_ids = array_unique( $stylesheet_ids );
    $urls = array_unique( $urls );

    // checks to see if there is actually anything to output
    if( count( $template_ids ) == 0 || count( $stylesheet_ids ) == 0 )
      {
	// nothing to output
	$this->DisplayErrorPage( $id, $params, $returnid, 
				 $this->Lang('error_nooutput'));
	return;
      }

    // output the xml header
    $output = '<?xml version="1.0" encoding="ISO-8859-1"?>';
    $output .= $this->dtd;
    $output .= "<theme>\n";
    $output .= "  <name>".$themename."</name>\n";
    $output .= "  <dtdversion>".DTD_VERSION."</dtdversion>\n";

    // output the templates
    foreach( $template_ids as $id )
      {
	$template = TemplateOperations::LoadTemplateByID( $id );
	// parse through the html and extract the image tags
	// and images, etc.

	$output .= "  <template>\n";
	$output .= "    <tname>".$template->name."</tname>\n";
	$output .= "    <tencoding>".$template->encoding."</tencoding>\n";
	$output .= "    <tdata><![CDATA[".base64_encode($template->content)."]]></tdata>\n";
	$output .= "  </template>\n";
	if( $template->stylesheet != '' ) 
	  {
	    $output .= "  <stylesheet>\n";
	    $output .= "    <cssname>".$template->name." -Attached-</cssname>\n";
	    $output .= "    <cssmediatype></cssmediatype>\n";
	    $output .= "    <cssdata><![CDATA[".base64_encode($template->stylesheet)."]]></cssdata>\n";
	    $output .= "  </stylesheet>\n";
	  }
      }
	
    // the stylesheets
    foreach( $stylesheet_ids as $id )
      {
	$stylesheet = StylesheetOperations::LoadStylesheetByID( $id );
	$output .= "  <stylesheet>\n";
	$output .= "    <cssname>".$stylesheet->name."</cssname>\n";
	$output .= "    <cssmediatype>".$stylesheet->media_type."</cssmediatype>\n";
	$output .= "    <cssdata><![CDATA[".base64_encode($stylesheet->value)."]]></cssdata>\n";
	$output .= "  </stylesheet>\n";	
      }

    // the associations
    foreach( $associations as $assoc1 )
      {
	foreach( $assoc1['css'] as $assoc2 )
	  {
	    $output .= "  <assoc>\n";
	    $output .= "    <assoc_tname>".$assoc1['tname']."</assoc_tname>\n";
	    $output .= "    <assoc_cssname>".$assoc2."</assoc_cssname>\n";
	    $output .= "  </assoc>\n";
	  }
      }

    // the files
    foreach( $urls as $oneurl )
      {
	$contents = file_get_contents( $gCms->config['root_path'].DIRECTORY_SEPARATOR.$oneurl );
	if( !$contents ) 
	  {
	    continue;
	  }
	$encoded = base64_encode( $contents );
	$output .= "  <reference>\n";
	$output .= "    <refname>".basename($oneurl)."</refname>\n";
	$output .= "    <refencoded>1</refencoded>\n";
	$output .= "    <reflocation>$oneurl</reflocation>\n";
	$output .= "    <refdata><![CDATA[".$encoded."]]></refdata>\n";
	$output .= "  </reference>\n";
      }

    // and the theme tail
    $output .= "</theme>\n";

    // and spit it out
    header('Content-Description: File Transfer');
    header('Content-Type: application/force-download');
    header('Content-Disposition: attachment; filename='.$themename.'.xml');
//         header('Content-Type: text/xml');
//         header('Content-Length: '.strlen($output));

    // todo, but good enough for now.
    while(@ob_end_clean());
    echo $output;
    exit();
  }


  function DoImportTheme($id, &$params, $returnid)
  {
    global $gCms;
    $fieldName=$id.'input_browse';
    if (!isset ($_FILES[$fieldName]) || !isset ($_FILES)
	|| !is_array ($_FILES[$fieldName]) || !$_FILES[$fieldName]['name'])
      {
	$this->DisplayErrorPage( $id, $params, $returnid, 
				 $this->Lang('error_nofilesuploaded'));
	return;
      }

    // make sure we have the dtdversion
    $havedtdversion = false;

    // normalize the file variable
    $file = $_FILES[$fieldName];
    
    // $file['tmp_name'] is the file we have to parse
    $xml = file_get_contents( $file['tmp_name'] );

    // load all the stylesheets
    $allstylesheets = StylesheetOperations::LoadStylesheets();

    // and the templates
    $alltemplates = TemplateOperations::LoadTemplates();

    // parse the xml stuff
    $parser = xml_parser_create();
    xml_parse_into_struct( $parser, $xml, $val, $idx );
    xml_parser_free( $parser );

    $theme = '';
    $curelement = array();
    $templates = array();
    $associations = array();
    $allreferences = array();
    $stylesheets = array();

    $onetemplate = new Template();
    $onesheet = '';
    $onereference = array();
    $oneassoc = array();
    foreach( $val as $elem )
      {
	$value = '';
	if( isset( $elem['value'] ) ) $value = $elem['value'];
	$type = $elem['type'];
	switch( $elem['tag'] )
	  {
	  case 'NAME':
	    {
	      if( $type != 'complete' && $type != 'close' )
		{
		  continue;
		}
	      $theme = $value;
	      break;
	    }

	  case 'DTDVERSION':
	    {
	      if( $type != 'complete' && $type != 'close' )
		{
		  continue;
		}
	      if( $value != DTD_VERSION )
		{
		  $this->DisplayErrorPage( $id, $params, $returnid, 
					   $this->Lang('error_dtdmismatch'));
		  return;
		}
	      $havedtdversion = true;
	      break;
	    }
	  case 'TNAME':
	    if( $type != 'complete' && $type != 'close' )
	      {
		continue;
	      }
	    $onetemplate->name = $theme." : ".$value;
	    foreach( $alltemplates as $tmpl )
	      {
		if( $tmpl->name == $onetemplate->name )
		  {
		    // template name exists
		    $this->DisplayErrorPage( $id, $params, $returnid, 
					     $this->Lang('error_templateexists',$onetemplate->name));
		    return;
		  }
	      }
	    break;

	  case 'TENCODING':
	    if( $type != 'complete' && $type != 'close' )
	      {
		continue;
	      }
	    $onetemplate->encoding = $value;
	    break;
	    
	  case 'TDATA':
	    if( $type != 'complete' && $type != 'close' )
	      {
		continue;
	      }
	    $onetemplate->content = base64_decode($value);
	    break;
	    
	  case 'TEMPLATE':
	    if( $type != 'close' )
	      {
		continue;
	      }
	    $templates[] = $onetemplate;
	    $onetemplate = new Template();
	    break;
	    
	  case 'CSSNAME':
	    $onesheet->name = $theme." : ".$value;
	    foreach( $allstylesheets as $cssobj )
	      {
		if( $cssobj->name == $onesheet->name )
		  {
		    // stylesheet name exists
		    $this->DisplayErrorPage( $id, $params, $returnid, 
					     $this->Lang('error_stylesheetexists',$onesheet->name));
		    return;
		  }
	      }
	    break;

	  case 'CSSMEDIATYPE':
	    $onesheet->media_type = $value;
	    break;

	  case 'CSSDATA':
	    $onesheet->value = base64_decode($value);
	    break;

	  case 'STYLESHEET':
	    if( $type == 'open' )
	      {
		$onesheet = new Stylesheet();
	      }
	    else if( $type == 'close' )
	      {
		$stylesheets[] = $onesheet;
	      }

	  case 'ASSOC_TNAME':
	    $oneassoc['tname'] = $value;
	    break;

	  case 'ASSOC_CSSNAME':
	    $oneassoc['cssname'] = $value;
	    break;

	  case 'ASSOC':
	    if( $type != 'close' )
	      {
		continue;
	      }
	    if( count( $oneassoc ) != 2 )
	      {
		$this->DisplayErrorPage( $id, $params, $returnid, 
					 $this->Lang('error_badassoc',$oneassoc['tname']));
	      }
	    array_push( $associations, $oneassoc );
	    $oneassoc = array();
	    break;

	  case 'REFNAME':
	    $reference['name'] = $value;
	    break;

	  case 'REFENCODED':
	    $reference['encoded'] = $value;
	    break;

	  case 'REFLOCATION':
	    $reference['location'] = $value;
	    break;

	  case 'REFDATA':
	    $reference['data'] = $value;
	    break;

	  case 'REFERENCE':
	    if( $type != 'close' )
	      {
		continue;
	      }
	    if( count( $reference ) != 4 )
	      {
		// stylesheet name exists
		$this->DisplayErrorPage( $id, $params, $returnid, 
					 $this->Lang('error_badembed',$onesheet->name));
	      }
	    array_push( $allreferences, $reference );
	    $reference = array();
	    break;
	  }
      }

    // check the dtd version one last time.
    if( $havedtdversion == false )
      {
	$this->DisplayErrorPage( $id, $params, $returnid, 
				 $this->Lang('error_dtdmismatch'));
	return;
      }

    // make sure we have at least one stylesheet
    if( count( $stylesheets ) == 0 )
      {
	$this->DisplayErrorPage( $id, $params, $returnid, 
				 $this->Lang('error_nostylesheets'));
	return;
      }

    // clean up the template and stylesheets and adjust everything to their new locations
    $prefix = basename($gCms->config['uploads_url'])."/".$theme;
    for( $i = 0; $i < count($stylesheets); $i++ )
      {
	$result = $this->_cleanupReferences( $prefix, $allreferences, $stylesheets[$i]->value );
	if( !$result )
	  {
	    $this->DisplayErrorPage( $id, $params, $returnid, 
				     $this->Lang('error_editingproblem'));
	    return;
	  }
      }

    foreach( $templates as $onetemplate )
      {
	$result = $this->_cleanupReferences( $prefix, $allreferences, $onetemplate->content );
	if( !$result )
	  {
	    $this->DisplayErrorPage( $id, $params, $returnid, 
				     $this->Lang('error_editingproblem'));
	    return;
	  }
      }
	
    // save our references as files
    // first we create the destination directory if it doesn't already exist
    $dest = $gCms->config['uploads_path'].DIRECTORY_SEPARATOR.$theme;
    $this->_mkdirr( $dest );

    foreach( $allreferences as $ref )
      {
	//$res = $this->_saveEncodedFile( $dest, $ref['name'], $ref['location'],
	$res = $this->_saveEncodedFile( $dest, $ref['name'], $ref['name'],
					$ref['encoded'], $ref['data'] );
	if( $res != 1 ) 
	  {
	    // this could be a problem we could have a bunch o files lying around
	    $this->DisplayErrorPage( $id, $params, $returnid, 
				     $this->Lang('error_problemsavingincludes'));
	    return;
	  }
      }
    
    
    //
    // now we have some nice, clean templates and stylesheets, do our magic
    //

    // stylesheets first
    $cssids = array();
    foreach( $stylesheets as $css )
      {
	$newid = StyleSheetOperations::InsertStylesheet( $css );
	if( $newid == -1 )
	  {
	    // couldn't insert the stylesheet
	    continue;
	  }
	$cssids[] = array( $css->name, $newid );
      }

    // then templates
    foreach( $templates as $onetemplate )
      {
	// insert the template
	$newtmplid = TemplateOperations::InsertTemplate( $onetemplate );
	if( $newtmplid == -1 )
	  {
	    $this->DisplayErrorPage( $id, $params, $returnid, 
				     $this->Lang('error_couldnotcreatetemplate'));
	    return;
	  }
	else
	  {
	    // now associate the stylesheets with this template
	    
	    // only add the associations for this template.
	    foreach( $associations as $assoc )
	      {
		$tmp_name = $theme." : ".$assoc['tname'];
		if( $tmp_name != $onetemplate->name )
		  {
		    continue;
		  }
		
		foreach( $cssids as $rec )
		  {
		    $tmp_name2 = $theme." : ".$assoc['cssname'];
		    if( $tmp_name2 == $rec[0] )
		      {
			// have a templateid and a cssid, so go for it.
			if( !StylesheetOperations::AssociateStylesheetToTemplate( $rec[1], $newtmplid ) )
			  {
			    // really really bad if this didn't work.
			    // cuz theoretically we would have to clean up.
			    $this->DisplayErrorPage( $id, $params, $returnid, 
						     $this->Lang('error_couldnotassoccss'));
			    return;
			  }
			$assoc['used'] = 1;
		      }
		  }
	      } // foreach
	  } // else
      } // foreach


    // if we got here, everything should be a-okay
    $this->Redirect( $id, 'defaultadmin', $returnid );
  } // function


  /*---------------------------------------------------------
    _mkdirr( $pathname, $mode )
    NOT PART OF THE MODULE API

    Make a directory recursively
    ---------------------------------------------------------*/
  function _mkdirr ($pathname, $mode = 0777)
  {
    // Check if directory already exists
    if (is_dir ($pathname) || empty ($pathname))
    {
      return true;
    }

    // Ensure a file does not already exist with the same name
    if (is_file ($pathname))
    {
      // RC: Modification such that this isn't an error
      return true;
    }

    // Crawl up the directory tree
    $next_pathname =
      substr ($pathname, 0, strrpos ($pathname, DIRECTORY_SEPARATOR));
    if ($this->_mkdirr ($next_pathname, $mode))
    {
      if (!file_exists ($pathname))
      {
	 return @mkdir ($pathname, $mode);
      }
    }

    return false;
  }

}

?>
