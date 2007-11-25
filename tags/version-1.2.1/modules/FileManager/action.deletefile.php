<?php
if (!isset($gCms)) exit;
if (!$this->AccessAllowed() && !$this->AdvancedAccessAllowed()) exit;

if(!isset($params["filename"]) || !isset($params["path"])) {
	$this->Redirect($id, 'defaultadmin');
}
global $config;
$fullname=$this->Slash($params["path"],$params["filename"]);
$fullname=$this->Slash($config["root_path"],$fullname);

$message=""; $error="";

if (@unlink($fullname)) $message=$this->Lang("singlefiledeletesuccess"); else $error=$this->Lang("singlefiledeletefail");

$this->Redirect($id,"defaultadmin",$returnid,array("path"=>$params["path"],"module_message"=>$message,"module_error"=>$error));

?>