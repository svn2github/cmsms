<?php
  $this->ResetSettings("all"); 

  $this->CreatePermission('allowadvancedprofile', $this->Lang('allowadvancedprofile'));

  $this->Audit( 0, $this->Lang('friendlyname'), $this->Lang('installed',$this->GetVersion()));
?>
