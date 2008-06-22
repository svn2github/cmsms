<?php
@include(dirname(__FILE__)."/../../include.php");
$module =& $gCms->modules["FileManager"]['object'];

$message=$module->GetPreference("postletmessage","");
$error=$module->GetPreference("postleterror","");
$module->RemovePreference("postletmessage");
$module->RemovePreference("postleterror");
$module->Redirect($_GET["id"],"defaultadmin",$_GET["returnid"],array("path"=>$_GET["path"],"module_message"=>$message,"module_error"=>$errors));
?>