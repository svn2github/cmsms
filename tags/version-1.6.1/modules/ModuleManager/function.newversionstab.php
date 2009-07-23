<?php
#BEGIN_LICENSE
#-------------------------------------------------------------------------
# Module: ModuleManager (c) 2008 by Robert Campbell 
#         (calguy1000@cmsmadesimple.org)
#  An addon module for CMS Made Simple to allow browsing remotely stored
#  modules, viewing information about them, and downloading or upgrading
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
# However, as a special exception to the GPL, this software is distributed
# as an addon module to CMS Made Simple.  You may not use this software
# in any Non GPL version of CMS Made simple, or in any version of CMS
# Made simple that does not indicate clearly and obviously in its admin 
# section that the site was built with CMS Made simple.
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
#END_LICENSE

$modules = array_keys($gCms->modules);
if( !count($modules ) )
  {
    $smarty->assign('nvmessage',$this->Lang('error_nomodules'));
  }
else
  {
    $url = $this->GetPreference('module_repository');
    if( $url == '' )
      {
	$this->_DisplayErrorPage( $id, $params, $returnid,
				  $this->Lang('error_norepositoryurl'));
	return;
      }

    $nusoap =& $this->GetModuleInstance('nuSOAP');
    $nusoap->Load();
    $nu_soapclient =& new nu_soapclient($url,false,false,false,false,false,90,90);
    if( $err = $nu_soapclient->GetError() )
      {
	$this->_DisplayErrorPage( $id, $params, $returnid,
				  'SOAP Error: '.$err);
	return;
      }

    $parms = implode(',',$modules);
    $versions = $nu_soapclient->call('ModuleRepository.soap_listmoduleversions',$parms);
    if( $err = $nu_soapclient->GetError() )
      {
	$this->_DisplayErrorPage( $id, $params, $returnid,
				  'SOAP Error: '.$err);
	echo htmlspecialchars($nu_soapclient->response);
	return;
      }
    if( !$versions )
      {
	$this->_DisplayErrorPage( $id, $params, $returnid,
				  $this->Lang('error_nomatchingmodules') );
	return;
      }

    $results = array();
    foreach( $versions as $name => $version )
      {
	$txt = '';
	$mod =& $this->GetModuleInstance($name);
	if( !is_object($mod) )
	  {
	    $txt = $this->Lang('error_module_object',$name);
	  }
	else
	  {
	    $mver = $mod->GetVersion();
	    if( version_compare($version,$mver) > 0 )
	      {
		$txt = $this->Lang('upgrade_available',$version,$mver);
	      }
	  }

	if( !empty($txt) )
	  {
	    $results[$name] = $txt;
	  }
      }

    if( !count($results) )
      {
	$smarty->assign('nvmessage',$this->Lang('all_modules_up_to_date'));
      }
    else
      {
	$smarty->assign('updatestxt',$this->Lang('available_updates'));
	$smarty->assign('updates',$results);
      }
  }

echo $this->ProcessTemplate('newversionstab.tpl');

# EOF
?>