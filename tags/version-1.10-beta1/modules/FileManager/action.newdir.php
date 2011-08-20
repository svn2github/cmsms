<?php
if (!cmsms()) exit;
if (!$this->CheckPermission("Modify Files") && !$this->AdvancedAccessAllowed()) exit;

if(!isset($params["newdirname"]) || !isset($params["path"])) {
	$this->Redirect($id, 'defaultadmin');
}

if ($this->IntruderCheck($params["path"])) {
	$this->Redirect($id, 'defaultadmin',$returnid,array("fmerror"=>"fileoutsideuploads"));
}
$params["newdirname"]=trim($params["newdirname"]);
if (strpos($params["newdirname"],"/")!==false ||
    strpos($params["newdirname"],"\\")!==false ||
    strpos($params["newdirname"],"..")!==false ||
    $params["newdirname"][0]==".") {
  $this->Redirect($id, 'defaultadmin',$returnid,array("fmerror"=>"invalidnewdir"));
}

$config =& $gCms->GetConfig();
$newdir=$this->Slash($params["path"],$params["newdirname"]);
$newdir=$this->Slash($config["root_path"],$newdir);

//echo $newdir; die();

if (is_dir($newdir)) {
	$this->Redirect($id, 'defaultadmin',$returnid,array("fmerror"=>"direxists"));
}

$message=""; $error="";
if (mkdir($newdir)) {
  $message="newdirsuccess";
  // put mention into the admin log
  $this->Audit( 0, "File Manager", "Created new directory: ".$params["newdirname"]);
} else {
  $error="newdirfail";
}

$this->Redirect($id,"defaultadmin",$returnid,array("path"=>$params["path"],"fmmessage"=>$message,"fmerror"=>$error))

?>
