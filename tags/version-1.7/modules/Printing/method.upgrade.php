<?php
switch ($oldversion) {
		  case "0.1.0" : $this->ResetOverrideStyle(); 
		  case "0.1.1" : $this->ResetPDFTemplate(); 		  
		}
		
$this->RemovePermission('modifyprintingsettings');

$this->Audit( 0, $this->Lang('friendlyname'), $this->Lang('upgraded',$this->GetVersion()));
?>