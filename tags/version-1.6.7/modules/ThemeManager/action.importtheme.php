<?php
#-------------------------------------------------------------------------
# Module: ThemeManager - a module for importing and exporting template
#   and stylesheet packages.
# Version: 1.0.6, Robert Campbell <rob@techcom.dyndns.org>
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

if (!($this->CheckPermission('Add Stylesheets') &&
      $this->CheckPermission('Add Templates') &&
      $this->CheckPermission('Add Stylesheet Assoc')))
  {
    $this->DisplayErrorPage($id, $params, $return_id,
			    $this->Lang('accessdenied'));
    return;
  }


/*---------------------------------------------------------
 _cleanupReferences
 ---------------------------------------------------------*/
function _cleanupReferences( $prefix, $references, &$input )
{
  $data = $input;
  foreach( $references as $ref )
    {
      $olddata = $data;
      $data = preg_replace( '|'.$ref['location'].'|', $prefix."/".$ref['name'],
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
 _trim_themename
 ---------------------------------------------------------*/
function _trim_themename( $name )
{
  $t_name_arr = explode(':',$name);
  if( count( $t_name_arr ) == 1 )
    {
      $name = trim($t_name_arr[0]);
    }
  else
    {
      $name = trim($t_name_arr[1]);
    }
  return $name;
}


//
// Begin
//
global $gCms;
$fieldName=$id.'input_browse';
if (!isset ($_FILES[$fieldName]) || !isset ($_FILES)
    || !is_array ($_FILES[$fieldName]) || !$_FILES[$fieldName]['name'])
  {
    $this->DisplayErrorPage( $id, $params, $returnid, 
			     $this->Lang('error_nofilesuploaded'));
    return;
  }

$mmmodule = $this->GetModuleInstance('MenuManager');
if( !$mmmodule )
  {
    // nothing to output
    $this->DisplayErrorPage( $id, $params, $returnid, 
			     $this->Lang('error_nomenumanager'));
    return;
  }

// make sure we have the dtdversion
$havedtdversion = false;

// normalize the file variable
$file = $_FILES[$fieldName];
    
// $file['tmp_name'] is the file we have to parse
$xml = file_get_contents( $file['tmp_name'] );

// load all the stylesheets
global $gCms;
$styleops =& $gCms->GetStylesheetOperations();
$allstylesheets = $styleops->LoadStylesheets();

// and the templates
global $gCms;
$templateops =& $gCms->GetTemplateOperations();
$alltemplates = $templateops->LoadTemplates();

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
$mmtemplates = array();

$onemmtemplate = array();
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
      $onetemplate->active = 0;
      $onetemplate->default = 0;
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
      $associations[] = $oneassoc;
      $oneassoc = array();
      break;

    case 'REFNAME':
      $onereference['name'] = $value;
      break;

    case 'REFENCODED':
      $onereference['encoded'] = $value;
      break;

    case 'REFLOCATION':
      $onereference['location'] = $value;
      break;

    case 'REFDATA':
      $onereference['data'] = $value;
      break;

    case 'REFERENCE':
      if( $type != 'close' )
	{
	  continue;
	}
      if( count( $onereference ) != 4 )
	{
	  // stylesheet name exists
	  $this->DisplayErrorPage( $id, $params, $returnid, 
				   $this->Lang('error_badembed',$onesheet->name));
	}
      $allreferences[] = $onereference;
      $onereference = array();
      break;

    case 'MMTEMPLATE_NAME':
      $onemmtemplate['origname'] = $value;
      $t_arr = explode('.tpl',$value);
      if( is_array( $t_arr ) )
	{
	  $value = $t_arr[0];
	}
      $onemmtemplate['name'] = $theme." : "._trim_themename($value);
      break;

    case 'MMTEMPLATE_DATA':
      $onemmtemplate['data'] = base64_decode($value);
      break;
	    
    case 'MMTEMPLATE':
      if( $type != 'close' )
	{
	  continue;
	}
      if( count( $onemmtemplate ) != 3 )
	{
	  // stylesheet name exists
	  $this->DisplayErrorPage( $id, $params, $returnid, 
				   $this->Lang('error_badxml'));
	}
      $mmtemplates[] = $onemmtemplate;
    }
}

// check the dtd version one last time.
if( $havedtdversion == false )
  {
    $this->DisplayErrorPage( $id, $params, $returnid, 
			     $this->Lang('error_dtdmismatch'));
    return;
  }


/*---------------------------------------------------------
 _saveEncodedFile
 ---------------------------------------------------------*/
function _saveEncodedFile( $obj, $prefix, $name, &$location, $encoded, $data )
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
      $obj->_mkdirr( $dir );
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
    $result = _cleanupReferences( $prefix, $allreferences, $stylesheets[$i]->value );
    if( !$result )
      {
	$this->DisplayErrorPage( $id, $params, $returnid, 
				 $this->Lang('error_editingproblem'));
	return;
      }
  }

$newtemplates = array();
foreach( $templates as $onetemplate )
{
  $result = _cleanupReferences( $prefix, $allreferences, $onetemplate->content );
  if( !$result )
    {
      $this->DisplayErrorPage( $id, $params, $returnid, 
			       $this->Lang('error_editingproblem'));
      return;
    }
  $newtemplates[] = $onetemplate;
}
$templates = $newtemplates;
	

// save our references as files
// first we create the destination directory if it doesn't already exist
$dest = $gCms->config['uploads_path'].DIRECTORY_SEPARATOR.$theme;
$this->_mkdirr( $dest );

foreach( $allreferences as $ref )
{
  //$res = _saveEncodedFile( $dest, $ref['name'], $ref['location'],
  $res = _saveEncodedFile( $this, $dest, $ref['name'], $ref['name'],
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
global $gCms;
$styleops =& $gCms->GetStylesheetOperations();
foreach( $stylesheets as $css )
{
  $newid = $styleops->InsertStylesheet( $css );
  if( $newid == -1 )
    {
      // couldn't insert the stylesheet
      continue;
    }
  $cssids[] = array( $css->name, $newid );
}

// then the menu manager templates
foreach( $mmtemplates as $mmtempl ) 
{
  $mmmodule->SetMenuTemplate( $mmtempl['name'], $mmtempl['data'] );
}

// then templates
foreach( $templates as $onetemplate )
{
  // have to clean up the template, and give it the 
  // new mmtemplate name if it wants it
  // replace {cms_module module=menumanager template=something} 
  // with {cms_module module=menumanager template="theme : something"}
  //$pattern = "/\{cms_module\s+module\s*=\s*[\\\"']{0,1}menumanager[\\\"']{0,1}\s+template\s*=\s*[\\\"']{0,1}(.*?)[\\\"']{0,1}\}/i";
  //$replacement = "{cms_module module='menumanager' template='theme : $1'}";
  $newcontent = $onetemplate->content;
  foreach( $mmtemplates as $mmtempl )
    {
      $pattern = "/\{cms_module\s+module\s*=\s*[\\\"']{0,1}menumanager[\\\"']{0,1}\s+template\s*=\s*[\\\"']{0,1}(".$mmtempl['origname'].")[\\\"']{0,1}/i";
      $replacement = "{cms_module module='menumanager' template='".$mmtempl['name']."' ";
      $newcontent = preg_replace($pattern, $replacement, $newcontent);	

      echo cms_htmlentities($newcontent); echo '<br/><br/>';
      
      $pattern = "/\{menu\s+template\s*=\s*[\\\"']{0,1}".$mmtempl['origname']."[\\\"']{0,1}/i";
      $replacement = "{menu template='".$mmtempl['name']."' ";
      $newcontent = preg_replace($pattern, $replacement, $newcontent);	

      echo cms_htmlentities($newcontent); echo '<br/><br/>';
    }

  $onetemplate->content = $newcontent;

  // insert the template
  global $gCms;
  $templateops =& $gCms->GetTemplateOperations();
  $styleops =& $gCms->GetStylesheetOperations();
  $newtmplid = $templateops->InsertTemplate( $onetemplate );
  if( $newtmplid == -1 )
    {
      $db = $this->GetDb();
      echo "DEBUG: ".$db->ErrorMsg()."<br/>";
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
		  if( !$styleops->AssociateStylesheetToTemplate( $rec[1], $newtmplid ) )
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
  
    $this->Redirect( $id, 'defaultadmin', $returnid ,array("message"=>$this->Lang("import_succeeded")));
?>
