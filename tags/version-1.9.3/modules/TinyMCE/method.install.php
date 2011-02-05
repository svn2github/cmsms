<?php
if (!isset($gCms)) exit;
$this->ResetSettings("all"); 

$this->CreatePermission('allowadvancedprofile', $this->Lang('allowadvancedprofile'));
$this->AddEventHandler( 'Core', 'ContentPostRender', false );
$this->Audit( 0, $this->Lang('friendlyname'), $this->Lang('installed',$this->GetVersion()));
?>
