<?php
if (!isset($gCms)) exit;
if (!$this->AccessAllowed() && !$this->AdvancedAccessAllowed()) exit;

if(!isset($params["newdir"]) || !isset($params["path"])) {
	$this->Redirect($id, 'defaultadmin');
}

$newdir=$params["newdir"];
$path=$params["path"];

if ($newdir=="..") {
	//$params["path"]=dirname($path);
  $path=dirname($path);

} else {
	//$params["path"]=$this->Slash($path,$newdir);
	$path=$this->Slash($path,$newdir);
}
 $path=$this->Slash($path);
//echo $params["path"];
$this->Redirect($id, 'defaultadmin', $returnid,array("path"=>$path));
//include(dirname(__FILE__)."/action.defaultadmin.php");
?>