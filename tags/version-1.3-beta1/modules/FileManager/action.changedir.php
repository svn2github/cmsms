<?php
if (!isset($gCms)) exit;
if (!$this->CheckPermission("Modify Files") && !$this->AdvancedAccessAllowed()) exit;

if(!isset($params["newdir"]) || !isset($params["path"])) {
	$this->Redirect($id, 'defaultadmin');
}

$newdir=$params["newdir"];
$path=$params["path"];

if ($newdir=="..") {
  $path=dirname($path);
} else {
	//$params["path"]=$this->Slash($path,$newdir);
	$path=$this->Slash($path,$newdir);
}
$path=$this->Slash($path);
//echo $params["path"];
$this->Redirect($id, 'defaultadmin', $returnid,array("path"=>$path));

?>