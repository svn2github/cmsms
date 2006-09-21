<?php
#-------------------------------------------------------------------------
# Module: ModuleManager - A client for the ModuleRepository, this module allows previewing, 
# and installing modules from remote sites without the need for ftping, or unzipping archives.  
# Module XML files are downloaded using SOAP, integrity verified, and then expanded automatically.
#
# Version: 1.1.3, Robert Campbell <rob@techcom.dyndns.org>
#
#-------------------------------------------------------------------------
# CMS - CMS Made Simple is (c) 2006 by Ted Kulp (wishy@cmsmadesimple.org)
# This project's homepage is: http://www.cmsmadesimple.org
#
# This file originally created by ModuleMaker module, version 0.2
# Copyright (c) 2006 by Samuel Goldstein (sjg@cmsmadesimple.org) 
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

#-------------------------------------------------------------------------
# For Help building modules:
# - Read the Documentation as it becomes available at
#   http://dev.cmsmadesimple.org/
# - Check out the Skeleton Module for a commented example
# - Look at other modules, and learn from the source
# - Check out the forums at http://forums.cmsmadesimple.org
# - Chat with developers on the #cms IRC channel
#-------------------------------------------------------------------------

define('MINIMUM_REPOSITORY_VERSION','1.0.2');

function uasort_cmp_details( $e1, $e2 )
{
  if( $e1['name'] < $e2['name'] )
    {
      return -1;
    }
  else if( $e1['name'] > $e2['name'] )
    {
      return 1;
    }
  return version_compare( $e2['version'], $e1['version'] );
}

class ModuleManager extends CMSModule
{

  function GetName()
  {
    return 'ModuleManager';
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
    return '1.1.3';
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
   ---------------------------------------------------------*/
  function GetAuthorEmail()
  {
    return 'calguy1000@hotmail.com';
  }


  /*---------------------------------------------------------
   GetChangeLog()
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
   IsAdminOnly()
   ---------------------------------------------------------*/
  function IsAdminOnly()
  {
    return true;
  }


  /*---------------------------------------------------------
   GetAdminSection()
   ---------------------------------------------------------*/
  function GetAdminSection()
  {
    return 'extensions';
  }


  /*---------------------------------------------------------
   GetAdminDescription()
   ---------------------------------------------------------*/
  function GetAdminDescription()
  {
    return $this->Lang('admindescription');
  }


  /*---------------------------------------------------------
   VisibleToAdminUser()
   ---------------------------------------------------------*/
  function VisibleToAdminUser()
  {
    if( $this->CheckPermission('Modify Site Preferences') ||
	$this->CheckPermission('Modify Modules') )
      {
	return true;
      }
    return false;
  }
	

  /*---------------------------------------------------------
   CheckAccess()
   ---------------------------------------------------------*/
  function CheckAccess($id, $params, $returnid,$perm = 'Modify Modules')
  {
    if (! $this->CheckPermission($perm))
      {
	$this->_DisplayErrorPage($id, $params, $returnid,
				$this->Lang('accessdenied'));
	return false;
      }
    return true;
  }
	
  /*---------------------------------------------------------
   _DisplayErrorPage()
   This is a simple function for generating error pages.
   ---------------------------------------------------------*/
  function _DisplayErrorPage($id, &$params, $returnid, $message='')
  {
    $this->smarty->assign('title_error', $this->Lang('error'));
    $this->smarty->assign_by_ref('message', $message);
	  
    // Display the populated template
    echo $this->ProcessTemplate('error.tpl');
  }
	


  /*---------------------------------------------------------
   GetDependencies()
   ---------------------------------------------------------*/
  function GetDependencies()
  {
    return array('nuSOAP'=>'1.0.1');
  }


  /*---------------------------------------------------------
   MinimumCMSVersion()
   ---------------------------------------------------------*/
  function MinimumCMSVersion()
  {
    return "1.0";
  }


  /*---------------------------------------------------------
   Install()
   ---------------------------------------------------------*/
  function Install()
  {
    $this->SetPreference('module_repository','http://modules.cmsmadesimple.org/soap.php?module=ModuleRepository');

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
    $current_version = $oldversion;
    switch($current_version)
      {
      case "1.0":
	$this->SetPreference('module_repository','http://modules.cmsmadesimple.org/soap.php?module=ModuleRepository');
	break;
      }
		
    // put mention into the admin log
    $this->Audit( 0, $this->Lang('friendlyname'), $this->Lang('upgraded',$this->GetVersion()));
  }


  /**
   * UninstallPreMessage()
   */
  function UninstallPreMessage()
  {
    return $this->Lang('really_uninstall');
  }

	
  /*---------------------------------------------------------
   Uninstall()
   ---------------------------------------------------------*/
  function Uninstall()
  {
    $this->RemovePreference('module_repository');

    // put mention into the admin log
    $this->Audit( 0, $this->Lang('friendlyname'), $this->Lang('uninstalled'));
  }


  /*---------------------------------------------------------
   DoAction($action, $id, $params, $returnid)
   ---------------------------------------------------------*/
  function DoAction($action, $id, $params, $returnid=-1)
  {
    switch ($action)
      {
      case 'installmodule':
	{
	  if ($this->CheckAccess($id, $params, $returnid,'Modify Modules'))
	    {
	      $this->_DoAdminInstallModule( $id, $params, $returnid );
	    }
	  break;
	}

      case 'modulehelp':
	{
	  $this->_DisplayAdminSoapModuleHelp( $id, $params, $returnid );
	}
	break;

      case 'moduleabout':
	{
	  $this->_DisplayAdminSoapModuleAbout( $id, $params, $returnid );
	}
	break;

      // fallback through to call the action.xxxx.php file
      default:
	parent::DoAction( $action, $id, $params, $returnid );
	break;
      }
  }


  /*----------------------------------------------------------
   _BuildModuleData( $xmldetails, $installdetails );
   build a hash of info about the installed modules.
   ---------------------------------------------------------*/
  function _BuildModuleData( &$xmldetails, &$installdetails )
  {
    $results = array();
    foreach( $xmldetails as $det1 )
      {
	$found = 0;
	foreach( $installdetails as $det2 )
	  {
	    if( $det1['name'] == $det2['name'] )
	      {
		$found = 1;
		// if the version of the xml file is greater than that of the
		// installed module, we have an upgrade
		$res = version_compare( $det1['version'], $det2['version'] );
		if( $res == 1 )
		  {
		    $det1['status'] = 'upgrade';
		  }
		else if( $res == 0 )
		  {
		    $det1['status'] = 'uptodate';
		  }
		else
		  {
		    $det1['status'] = 'newerversion';
		  }
		$results[] = $det1;
	      }
	  }
	if( $found == 0 )
	  {
	    // we don't have this module installed
	    $det1['status'] = 'notinstalled';
	    $results[] = $det1;
	  }
      }

    // now we have everything
    // let's try sorting it
    uasort( $results, 'uasort_cmp_details' );
    return $results;
  }


  /*---------------------------------------------------------
   _DisplayAdminModulesTab()
   ---------------------------------------------------------*/
  function _DisplayAdminModulesTab($id, &$params, $returnid)
  {
    global $session;

    if( !isset( $params['curletter'] ) )
      {
	$sess_keys = array_keys( $_SESSION );
	foreach( $sess_keys as $sess_key )
	  {
	    if( preg_match( '/modulemanager_cache/', $sess_key ) )
	      {
		unset( $_SESSION[$sess_key] );
	      }
	  }
      }

    // get the modules available in the repository
    $repmodules = '';
    {
      $result = $this->_GetRepositoryModules();
      if( ! $result[0] )
	{
	  $this->_DisplayErrorPage( $id, $params, $returnid, $result[1] );
	  return;
	}
      $repmodules = $result[1];
    }

    // get the modules that are already installed
    $instmodules = '';
    {
      $result = $this->_GetInstalledModules();
      if( ! $result[0] )
	{
	  $this->_DisplayErrorPage( $id, $params, $returnid, $result[1] );
	  return;
	}
      
      $instmodules = $result[1];
    }

    // cross reference them
    $data = $this->_BuildModuleData( $repmodules, $instmodules );

    if( count( $data ) )
      {
	$size = count($data);

	// check for permissions
	$moduledir = dirname(dirname(dirname(__FILE__))).DIRECTORY_SEPARATOR."modules";
	$writable = is_writable( $moduledir );	

	$letters = array();
	if( count( $data ) > get_preference(get_userid(),'page_limit'))
	  {
	    // we gotta do alphabetic pagination
	    $pagination = true;
	  }
	  
	// build the table
	$rowarray = array();
	$rowclass = 'row1';
	$letters = array();
	$firstletter = '';
	foreach( $data as $row )
	  {

	    $onerow = new stdClass();
	    
	    $letter = strtoupper($row['name'][0]);
	    $firstletter = ($firstletter == '') ? $letter : $firstletter;
	    $curletter = isset($params['curletter']) ? $params['curletter'] : $firstletter;
	    $letters[$letter] = 
            ($letter == $curletter) ? '<strong>'.$letter .'</strong>' 
            : $this->CreateLink($id,'defaultadmin',$returnid, $letter, array('curletter'=>$letter));
	    if ($letter != $curletter)
	      {
		continue;
	      }

	    $onerow->name = $row['name'];
	    $onerow->version = $row['version'];

	    $onerow->helplink = $this->CreateLink( $id, 'modulehelp', $returnid,
						   $this->Lang('helptxt'), 
						   array('name' => $row['name'],
							 'version' => $row['version'],
							 'filename' => $row['filename']));
	    $onerow->aboutlink = $this->CreateLink( $id, 'moduleabout', $returnid,
						    $this->Lang('abouttxt'), 
						    array('name' => $row['name'],
							  'version' => $row['version'],
							  'filename' => $row['filename']));

	    switch( $row['status'] ) 
	      {
	      case 'uptodate':
		$onerow->status = $this->Lang('uptodate');
		break;
	      case 'newerversion':
		$onerow->status = $this->Lang('newerversion');
		break;
	      case 'notinstalled':
		{
		  $mod = $moduledir.DIRECTORY_SEPARATOR.$row['name'];
		  if( ($writable && is_dir($mod) && is_directory_writable( $mod )) ||
		      ($writable && !file_exists( $mod ) ) )
		    {
		      $onerow->status = $this->CreateLink( $id, 'installmodule', $returnid,
							   $this->Lang('download'), 
							   array('name' => $row['name'],
								 'version' => $row['version'],
								 'filename' => $row['filename'],
								 'size' => $row['size']));
		    }
		  else
		    {
		      $onerow->status = $this->Lang('cantdownload');
		    }
		  break;
		}
	      case 'upgrade':
		{
		  $mod = $moduledir.DIRECTORY_SEPARATOR.$row['name'];
		  if( ($writable && is_dir($mod) && is_directory_writable( $mod )) ||
		      ($writable && !file_exists( $mod ) ) )
		    {
		      $onerow->status = $this->CreateLink( $id, 'upgrademodule', $returnid,
							   $this->Lang('download'), 
							   array('name' => $row['name'],
								 'version' => $row['version'],
								 'filename' => $row['filename'],
								 'size' => $row['size']));
		    }
		  else
		    {
		      $onerow->status = $this->Lang('cantdownload');
		    }
		  break;
		}
	      }
	    
	    $onerow->size = (int)((float) $row['size'] / 1024.0 + 0.5);
	    $onerow->rowclass = $rowclass;
	    if( isset( $row['description'] ) )
	      {
		$onerow->description=$row['description'];
	      }
	    $rowarray[] = $onerow;
	    ($rowclass == "row1" ? $rowclass = "row2" : $rowclass = "row1");
	  } // for

	// and display our page
	$this->smarty->assign('letters', implode('&nbsp;',array_values($letters)));
	$this->smarty->assign('nametext',$this->Lang('nametext'));
	$this->smarty->assign('vertext',$this->Lang('vertext'));
	$this->smarty->assign('sizetext',$this->Lang('sizetext'));
	$this->smarty->assign('statustext',$this->Lang('statustext'));
	$this->smarty->assign('items', $rowarray);
	$this->smarty->assign('itemcount', count($rowarray));
      }
    else
      {
	$this->smarty->assign('message', $this->Lang('error_connectnomodules'));
      }
    echo $this->processTemplate('adminpanel.tpl');
  }


  /*---------------------------------------------------------
   _DisplayAdminModulesTab()
   ---------------------------------------------------------*/
  function _DisplayAdminPrefsTab($id, &$params, $returnid)
  {
    $this->smarty->assign('formstart',$this->CreateFormStart( $id, 'setprefs', $returnid ));
    $this->smarty->assign('formend',$this->CreateFormEnd());
    $this->smarty->assign('prompt_url',$this->Lang('prompt_repository_url'));
    $this->smarty->assign('input_url',$this->CreateInputText($id, 'url', 
						       $this->GetPreference('module_repository'),
						       80, 255 ));
    $this->smarty->assign('extratext_url',$this->Lang('text_repository_url'));
    
    $this->smarty->assign('prompt_reseturl',$this->Lang('prompt_reseturl'));
    $this->smarty->assign('input_reseturl',$this->CreateInputSubmit($id,'reseturl',$this->Lang('reset')));

    $this->smarty->assign('prompt_chunksize',$this->Lang('prompt_dl_chunksize'));
    $this->smarty->assign('input_chunksize',$this->CreateInputText($id, 'input_dl_chunksize',
								   $this->GetPreference('dl_chunksize',256),3,3));
    $this->smarty->assign('extratext_chunksize',$this->Lang('text_dl_chunksize'));

    $this->smarty->assign('prompt_resetcache',$this->Lang('prompt_resetcache'));
    $this->smarty->assign('input_resetcache',$this->CreateInputSubmit($id,'resetcache',$this->Lang('reset')));
			  
    $this->smarty->assign('submit',$this->CreateInputSubmit( $id, 'submit', $this->Lang('submit')));
    $this->smarty->assign('prompt_otheroptions',$this->Lang('prompt_otheroptions'));
    $this->smarty->assign('prompt_settings',$this->Lang('prompt_settings'));
    echo $this->ProcessTemplate('adminprefs.tpl');
  }

  /*---------------------------------------------------------
   _DisplayAdminSoapModuleHelp()
   Display the help for an a module on the repository
   ---------------------------------------------------------*/
  function _DisplayAdminSoapModuleHelp($id, &$params, $returnid)
  {
    if( !isset( $params['name'] ) )
      {
	$this->_DisplayErrorPage( $id, $params, $returnid,
				  $this->Lang('error_insufficientparams'));
	return;
      }
    $name = $params['name'];

    if( !isset( $params['version'] ) )
      {
	$this->_DisplayErrorPage( $id, $params, $returnid,
				  $this->Lang('error_insufficientparams'));
	return;
      }
    $version = $params['version'];

    $url = $this->GetPreference('module_repository');
    if( $url == '' )
      {
	$this->_DisplayErrorPage( $id, $params, $returnid,
				  $this->Lang('error_norepositoryurl'));
	return;
      }

    if( !isset($params['filename'] ) )
      {
	$this->_DisplayErrorPage( $id, $params, $returnid,
				  $this->Lang('error_nofilename'));
	return;
      }
    $xmlfile = $params['filename'];

    $nusoap =& $this->GetModuleInstance('nuSOAP');
    $nusoap->Load();
    $nu_soapclient =& new nu_soapclient($url,false,false,false,false,false,90,90);
    if( $err = $nu_soapclient->GetError() )
      {
	$this->_DisplayErrorPage( $id, $params, $returnid,
				  'SOAP Error: '.$err);
	return;
      }
    $help = $nu_soapclient->call('ModuleRepository.soap_modulehelp',array('name' => $xmlfile ));
    if( $err = $nu_soapclient->GetError() )
      {
	$this->_DisplayErrorPage( $id, $params, $returnid,
				  'SOAP Error: '.$err);
	echo htmlspecialchars($nu_soapclient->response);
	return;
      }
    if( $help[0] == false )
      {
	$this->_DisplayErrorPage( $id, $params, $returnid,
				  $help[1] );
	return;
      }
    $this->smarty->assign('title',$this->Lang('helptxt'));
    $this->smarty->assign('moduletext',$this->Lang('nametext'));
    $this->smarty->assign('vertext',$this->Lang('vertext'));
    $this->smarty->assign('xmltext',$this->Lang('xmltext'));
    $this->smarty->assign('modulename',$name);
    $this->smarty->assign('moduleversion',$version);
    $this->smarty->assign('xmlfile',$xmlfile);
    $this->smarty->assign('content',$help[1]);
    echo $this->ProcessTemplate('remotecontent.tpl');
  }


  /*---------------------------------------------------------
   _DisplayAdminSoapModuleAbout()
   Display the about info for an a module on the repository
   ---------------------------------------------------------*/
  function _DisplayAdminSoapModuleAbout($id, &$params, $returnid)
  {
    if( !isset( $params['name'] ) )
      {
	$this->_DisplayErrorPage( $id, $params, $returnid,
				  $this->Lang('error_insufficientparams'));
	return;
      }
    $name = $params['name'];

    if( !isset( $params['version'] ) )
      {
	$this->_DisplayErrorPage( $id, $params, $returnid,
				  $this->Lang('error_insufficientparams'));
	return;
      }
    $version = $params['version'];

    $url = $this->GetPreference('module_repository');
    if( $url == '' )
      {
	$this->_DisplayErrorPage( $id, $params, $returnid,
				  $this->Lang('error_norepositoryurl'));
	return;
      }

    if( !isset($params['filename'] ) )
      {
	$this->_DisplayErrorPage( $id, $params, $returnid,
				  $this->Lang('error_nofilename'));
	return;
      }
    $xmlfile = $params['filename'];

    $nusoap =& $this->GetModuleInstance('nuSOAP');
    $nusoap->Load();
    $nu_soapclient =& new nu_soapclient($url,false,false,false,false,false,90,90);
    if( $err = $nu_soapclient->GetError() )
      {
	$this->_DisplayErrorPage( $id, $params, $returnid,
				  'SOAP Error: '.$err);
	return;
      }
    $about = $nu_soapclient->call('ModuleRepository.soap_moduleabout',array('name' => $xmlfile ));
    if( $err = $nu_soapclient->GetError() )
      {
	$this->_DisplayErrorPage( $id, $params, $returnid,
				  'SOAP Error: '.$err);
	echo htmlspecialchars($nu_soapclient->response);
	return;
      }
    if( $about[0] == false )
      {
	$this->_DisplayErrorPage( $id, $params, $returnid,
				  $about[1] );
	return;
      }
    $this->smarty->assign('title',$this->Lang('abouttxt'));
    $this->smarty->assign('moduletext',$this->Lang('nametext'));
    $this->smarty->assign('vertext',$this->Lang('vertext'));
    $this->smarty->assign('xmltext',$this->Lang('xmltext'));
    $this->smarty->assign('modulename',$name);
    $this->smarty->assign('moduleversion',$version);
    $this->smarty->assign('xmlfile',$xmlfile);
    $this->smarty->assign('content',$about[1]);
    echo $this->ProcessTemplate('remotecontent.tpl');
  }


  /*----------------------------------------------------------
   _DoAdminInstallModule( $id, &$params, $returnid )
   do a module installation
   ---------------------------------------------------------*/
  function _DoAdminInstallModule($id, &$params, $returnid)
  {
    global $gCms;

    if( !isset( $params['name'] ) )
      {
	$this->_DisplayErrorPage( $id, $params, $returnid,
				  $this->Lang('error_insufficientparams'));
	return;
      }
    $name = $params['name'];

    if( !isset( $params['version'] ) )
      {
	$this->_DisplayErrorPage( $id, $params, $returnid,
				  $this->Lang('error_insufficientparams'));
	return;
      }
    $version = $params['version'];

    $url = $this->GetPreference('module_repository');
    if( $url == '' )
      {
	$this->_DisplayErrorPage( $id, $params, $returnid,
				  $this->Lang('error_norepositoryurl'));
	return;
      }

    if( !isset($params['size'] ) )
      {
	$this->_DisplayErrorPage( $id, $params, $returnid,
				  $this->Lang('error_nofilesize'));
	return;
      }
    $size = $params['size'];

    if( !isset($params['filename'] ) )
      {
	$this->_DisplayErrorPage( $id, $params, $returnid,
				  $this->Lang('error_nofilename'));
	return;
      }
    $xmlfile = $params['filename'];

    $nusoap =& $this->GetModuleInstance('nuSOAP');
    $nusoap->Load();
    $nu_soapclient =& new nu_soapclient($url,false,false,false,false,false,90,90);
    if( $err = $nu_soapclient->GetError() )
      {
	$this->_DisplayErrorPage( $id, $params, $returnid,
				  'SOAP Error: '.$err);
	return;
      }

    // get the xml file from soap
    $xml = '';
    $result = $this->_GetRepositoryXML($nu_soapclient,$xmlfile,$size,$xml);
//     $xml = $nu_soapclient->call('ModuleRepository.soap_modulexml',array('name' => $xmlfile ));
    if( $err = $nu_soapclient->GetError() )
      {
	echo "<pre>".htmlspecialchars($nu_soapclient->response)."</pre><br/>";
	$this->_DisplayErrorPage( $id, $params, $returnid,
				  'SOAP Error: '.$err);
	return;
      }

    // get the md5sum from soap
    $svrmd5 = $nu_soapclient->call('ModuleRepository.soap_modulemd5sum',array('name' => $xmlfile));
    if( $err = $nu_soapclient->GetError() )
      {
	
	$this->_DisplayErrorPage( $id, $params, $returnid,
				  'SOAP Error: '.$err);
	return;
      }


    // calculate our own md5sum
    // and compare
    $clientmd5 = md5( $xml );

    if( $clientmd5 != $svrmd5 )
      {
	$this->_DisplayErrorPage( $id, $params, $returnid,
				  $this->Lang('error_checksum'));
	echo "expected: $svrmd5 and got $clientmd5<br/>";
	return;
      }

    // woohoo, we're ready to rock and roll now
    // just gotta expand the module
    $modoperations = $gCms->GetModuleOperations();
    if( !$modoperations->ExpandXMLPackage( $xml ) )
      {
	$this->_DisplayErrorPage( $id, $params, $returnid,
				  $modoperations->GetLastError());
	return;
      }

    // and install it
    $result = $modoperations->InstallModule( $name, true );
    if( $result[0] == true )
      {
	if( !isset( $gCms->modules[$name]['object'] ) )
	  {
	    // hopefully this will never happen
	    $this->_DisplayErrorPage($id, $params, $returnid,
				     $this->Lang('error_moduleinstallfailed'));
	  }
	else
	  {
	    $cmsmodules = &$gCms->modules;
	    $msg = $cmsmodules[$name]['object']->InstallPostMessage();
	    if( $msg != FALSE )
	      {
		echo $msg;
	      }
	    else
	      {
		$this->Redirect( $id, 'defaultadmin', $returnid );
	      }
	  }
      }
    else
      {
	$this->_DisplayErrorPage($id, $params, $returnid,
				 $this->Lang('error_moduleinstallfailed')."&nbsp;:".$result[1]);
      }
  }


  /*----------------------------------------------------------
   _GetInstalledModules
   build a hash of info about the installed modules.
   ---------------------------------------------------------*/
  function _GetInstalledModules()
  {
    global $gCms;
    $results = array();
    foreach( $gCms->modules as $key => $value )
      {
	$modinstance = $value['object'];
	$details = array();
	$details['name'] = $modinstance->GetName();
	$details['description'] = $modinstance->GetDescription();
	$details['version'] = $modinstance->GetVersion();
	// todo, here, check to see if there's write permission
	// for the httpd user to every one of the files
	// in the module's directory.
	$results[] = $details;
      }
    return array(true,$results);
  }


  /*----------------------------------------------------------
   _GetRepositoryXML
   Get the xml file for a specific module from the repository
   
   if the expected file size is less than the block size
   then the file will be downloaded in it's entirety
   otherwise it will be downloaded in chunks
   ---------------------------------------------------------*/
  function _GetRepositoryXML( &$nu_soapclient, $filename, $size, &$xml )
  {
    $orig_chunksize = $this->GetPreference('dl_chunksize',256);
    $chunksize = $orig_chunksize * 1024;
    if( $size <= $chunksize ) 
      {
	// we're downloading at one shot
	$xml = $nu_soapclient->call('ModuleRepository.soap_modulexml',
				    array('name' => $filename ));
	if( $nu_soapclient->GetError() )
	  {
	    return false;
	  }
      }
    else
      {
	global $gCms;
	$dir = $gCms->config['root_path'].DIRECTORY_SEPARATOR.'tmp'.DIRECTORY_SEPARATOR;
	$tmpname = tempnam($dir,'modmgr_');
	if( $tmpname === FALSE )
	  {
	    return false;
	  }

	// we're downloading in chunks
	// to a temporary file someplace
	// that we will delete afterwards
	$fh = fopen($tmpname,'w');
	$nchunks = (int)($size / $chunksize) + 1;
	for( $i = 0; $i < $nchunks; $i++ )
	  {
 	    $data = $nu_soapclient->call('ModuleRepository.soap_modulegetpart',
 					 array('name' => $filename,
 					       'partnum' => $i,
 					       'sizekb' => $orig_chunksize));
 	    if( $nu_soapclient->GetError() )
 	      {
		echo $nu_soapclient->GetError()."<br/><br/>";
		echo htmlspecialchars($nu_soapclient->response);
 		@fclose($fh);
 		@unlink($tmpname);
 		return false;
 	      }
	    $data = base64_decode( $data );
 	    $nbytes = @fwrite($fh,$data);
// 	    if( $nbytes != strlen($data) )
// 	      {
// 		// ugh-oh
// 	      }
	  }
	// we got here so everything theoretically worked
	@fflush($fh);
	@fclose($fh);
	$xml = @file_get_contents($tmpname);
      }
    return true;
  }


  /*----------------------------------------------------------
   _GetRepositoryModules
   Get the xml modules from the repository, in an array of
   hashes, each hash has name and version keys
   
   This routine filters out modules that are incompatible,
   i.e: the minimum cms version is larger than the current cms
   version, or the maximum cms version is smaller than the
   current cms version
   ---------------------------------------------------------*/
  function _GetRepositoryModules()
  {
    global $_SESSION;
    global $CMS_VERSION;

    $url = $this->GetPreference('module_repository');
    if( $url == '' )
      {
	return array(false,$this->Lang('error_norepositoryurl'));
      }

    $nusoap =& $this->GetModuleInstance('nuSOAP');
    $nusoap->Load();
    $nu_soapclient =& new nu_soapclient($url,false,false,false,false,false,90,90);
    if( $err = $nu_soapclient->GetError() )
      {
	return array(false,$this->Lang('error_nosoapconnect'));
      }

    $allmoduledetails = array();
    if( !isset($_SESSION['modulemanager_cache']) )
      {
	$repversion = $nu_soapclient->call('ModuleRepository.soap_version');
	if( $err = $nu_soapclient->GetError() )
	  {
	    return array(false,$this->Lang('error_soaperror').' ('.$url.'): '.$err);
	  }
	if( version_compare( $repversion, MINIMUM_REPOSITORY_VERSION ) < 0 )
	  {
	    return array(false,$this->Lang('error_minimumrepository'));
	  }
	
	$modules = $nu_soapclient->call('ModuleRepository.soap_listmodules');
	if( $err = $nu_soapclient->GetError() )
	  {
	    return array(false,$this->Lang('error_soaperror').' ('.$url.'): '.$err);
	  }


	$allmoduledetails = $nu_soapclient->call('ModuleRepository.soap_moduledetailsgetall');
	if( $err = $nu_soapclient->GetError() )
	  {
	    return array(false,$this->Lang('error_soaperror').' ('.$url.'): '.$err);
	  }
	if( !is_array( $allmoduledetails ) || count( $allmoduledetails ) == 0 )
	  {
	    return array(false,$this->Lang('error_connectnomodules').' ('.$url.'): '.$err);
	  }
	$_SESSION['modulemanager_cache'] = $allmoduledetails;
      }
    else
      {
	$allmoduledetails = $_SESSION['modulemanager_cache'];
      }
    return array(true,$allmoduledetails);
  }
}

?>
