<?php
if (!function_exists("cmsms")) exit;
//$this->CreatePermission('Use FileManager',$this->Lang("permission"));
$this->CreatePermission('Use FileManager Advanced',$this->Lang("permissionadvanced"));

$this->SetPreference("iconsize","32px");
$this->SetPreference("uploadboxes","5");
$this->SetPreference("advancedmode","false");
$this->SetPreference("showhiddenfiles","false");
//$this->SetPreference("confirmsingledelete","false");

$this->CreateEvent('OnFileUploaded');
$this->RegisterModulePlugin(true);

?>