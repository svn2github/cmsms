<?php
@include(dirname(__FILE__)."/../../include.php");
$module =& $gCms->modules["FileManager"]['object'];

$module->Redirect($_GET["id"],"defaultadmin",$_GET["returnid"],array("path"=>$_GET["path"],"module_message"=>$message,"module_error"=>$errors));
?>