<?php
if (!isset($gCms)) exit;
if (!$this->AccessAllowed() && !$this->AdvancedAccessAllowed()) exit;

$messages="";
$errors="";
if(!isset($params["selectedaction"]) || !isset($params["path"])) {
	$this->Redirect($id, 'defaultadmin');
}

global $config;
switch ($params["selectedaction"]) {
	case "deleteselected" : {
		foreach ($params as $key=>$value) { //Cannot use $params as spaces/dots are translated to _
			if (substr($key,0,5)=="file_") {
				$filename=substr($key,5);
				$filename=base64_decode($filename);
				//$errors.=$filename;
				$fullname=$this->Slash($params["path"],$filename);
				$fullname=$this->Slash($config["root_path"],$fullname);
				//$errors.=$fullname."<br/>";
				if (@unlink($fullname)) $messages.=$filename." ".$this->Lang("filedeletesuccess")."<br/>"; else $errors.=$filename." ".$this->Lang("filedeletefail")."<br/>";
			}
		}
	}
}

$this->Redirect($id,"defaultadmin",$returnid,array("path"=>$params["path"],"module_message"=>$messages,"module_error"=>$errors));

?>
