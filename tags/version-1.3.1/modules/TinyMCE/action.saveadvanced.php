<?php

if (!$this->VisibleToAdminUser()) $this->Redirect($id,"defaultadmin",$returnid);

if (isset($params["reset"])) {
  $this->ResetSettings("advanced");
  $this->Redirect($id,"defaultadmin",$returnid,array("module_message"=>$this->Lang("settingsreset"),"tab"=>"advanced"));
}

if (isset($params["resetall"])) {
  $this->ResetSettings();
  $this->Redirect($id,"defaultadmin",$returnid,array("module_message"=>$this->Lang("allsettingsreset"),"tab"=>"advanced"));
}


if (isset($params['newlinestyle'])) $this->SetPreference('newlinestyle', $params['newlinestyle'] );

if (isset($params['skinvariation'])) $this->SetPreference('skinvariation', $params['skinvariation'] );

if (isset($params['entityencoding'])) $this->SetPreference('entityencoding', $params['entityencoding'] );

if (isset($params['extraconfig'])) $this->SetPreference('extraconfig', $params['extraconfig'] );

if (isset($params['customdropdown'])) $this->SetPreference('customdropdown', $params['customdropdown'] );

/*
if (isset($params['replace_cms_selflink']))
$this->SetPreference('replace_cms_selflink', 1 );
else
$this->SetPreference('replace_cms_selflink', 0 );
*/

if (isset($params['forcedrootblock']))
$this->SetPreference('forcedrootblock', $params['forcedrootblock'] );
else
$this->SetPreference('forcedrootblock', "false" );

if (isset($params['loadcmslinker']))
$this->SetPreference('loadcmslinker', 1 );
else
$this->SetPreference('loadcmslinker', 0 );

if (isset($params['relativeurls']))
$this->SetPreference('relativeurls', 1 );
else
$this->SetPreference('relativeurls', 0 );

if (isset($params['forcecleanpaste']))
$this->SetPreference('forcecleanpaste', 1 );
else
$this->SetPreference('forcecleanpaste', 0 );

if (isset($params['cmslinkerstyle'])) $this->SetPreference('cmslinkerstyle', $params['cmslinkerstyle'] );

if (isset($params['usecompression']))
$this->SetPreference('usecompression', 1 );
else
$this->SetPreference('usecompression', 0 );

if (isset($params['bodycss'])) $this->SetPreference('bodycss', $params['bodycss'] );
if (isset($params['dropdownblockformats'])) $this->SetPreference('dropdownblockformats', $params['dropdownblockformats'] );

$this->Redirect($id,"defaultadmin",$returnid,array("module_message"=>$this->Lang("advancedsaved"),"tab"=>"advanced"));
?>
