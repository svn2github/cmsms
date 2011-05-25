<?php
if (!isset($gCms)) exit;
switch ($oldversion) {
 case "0.1.0" : $this->ResetOverrideStyle(); 
 case "0.1.1" : $this->ResetPDFTemplate();
 case '1.1.1':
 case '1.1.2':
   if ($this->GetTemplate("linktemplate")=="") $this->ResetLinkTemplate();
 }
		
$this->RemovePermission('modifyprintingsettings');

$this->Audit( 0, $this->Lang('friendlyname'), $this->Lang('upgraded',$this->GetVersion()));
?>