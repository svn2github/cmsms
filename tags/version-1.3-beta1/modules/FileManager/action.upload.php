<?php
if (!isset($gCms)) exit;
if (!$this->CheckPermission("Modify Files") && !$this->AdvancedAccessAllowed()) exit;

$uploadboxes=$this->GetPreference("uploadboxes","5");

if (!isset($params["path"])) {
	$this->Redirect($id, 'defaultadmin',$returnid,array("module_error"=>"Internal error, no path send with upload form"));
	exit;
}

$somefound=false;
for ($i=0; $i<$uploadboxes; $i++) {
	if (isset($_FILES[$id."file_".$i])) {
		$somefound=true;
		break;
	}
}
if (!$somefound) {
	$this->Redirect($id, 'defaultadmin', $returnid,array("module_error"=>$this->Lang("nothinguploaded")));
	exit;
}

global $config;

//print_r($_FILES);die();

$messages="";
$errors="";
$fullpath=$this->Slash($config["root_path"],$params["path"]);
for ($i=0; $i<$uploadboxes; $i++) {

  if (!isset($_FILES[$id."file_".$i])) continue;
  if (($_FILES[$id."file_".$i]["size"]>$config["max_upload_size"]) 
  		|| ($_FILES[$id."file_".$i]["error"]==1)) {
  	$errors.=$_FILES[$id."file_".$i]["name"]." ".$this->Lang("filetoobig")."<br/>";
    continue;
  }

	if (isset($params["unpack".$i])) {
    $pos=strrpos($_FILES[$id."file_".$i]["name"],'.');
		$extension="";
		if ($pos>0) {
			$extension=substr($_FILES[$id."file_".$i]["name"],$pos+1);
		}
		switch (strtolower($extension)) {
			case "zip" : {
				include_once("../modules/FileManager/dunzip.php");
				$unzipping=new dUnzip2($_FILES[$id."file_".$i]["tmp_name"]);
				$message=$unzipping->unzipAll($fullpath);
				if ($unzipping->debugstrings!="") {
					$errors.=$_FILES[$id."file_".$i]["name"]." ".$this->Lang("unpackfail");
					$errors.=$unzipping->debugstrings."<br/>";
				} else {
					$messages.=$_FILES[$id."file_".$i]["name"]." ".$this->Lang("unpacksuccess")."<br/>";
				}
				break;
			}
			case "tgz" :
			case "gz" : {
				include_once("../modules/FileManager/untgz.php");
				$extracter=new gzip_file($_FILES[$id."file_".$i]["tmp_name"]);
				$extracter->set_options(array("basedir"=>$fullpath/*."/tmp/testtmp/"*/,"overwrite"=>1));
				$extracter->extract_files();
				if (count($extracter->error)>0) {
					$errors.=$_FILES[$id."file_".$i]["name"]." ".$this->Lang("unpackfail");
					$errors.=implode(",",$extracter->error)."<br/>";
				} else {
					$messages.=$_FILES[$id."file_".$i]["name"]." ".$this->Lang("unpacksuccess")."<br/>";
				}
				break;
			}
			case "bzip" :
			case "bz" : {
				include_once("../modules/FileManager/untgz.php");
				$extracter=new gzip_file($_FILES[$id."file_".$i]["tmp_name"]);
				$extracter->set_options(array("basedir"=>$fullpath/*."/tmp/testtmp/"*/,"overwrite"=>1));
				$extracter->extract_files();
				if (count($extracter->error)>0) {
					$errors.=$_FILES[$id."file_".$i]["name"]." ".$this->Lang("unpackfail");
					$errors.=implode(",",$extracter->error)."<br/>";
				} else {
					$messages.=$_FILES[$id."file_".$i]["name"]." ".$this->Lang("unpacksuccess")."<br/>";
				}
				break;
			}
			default: $errors.=$this->Lang("unsupportedarchive")." ($extension)";
		}

	} else {
		if (trim($_FILES[$id."file_".$i]["name"])=="") continue;
		$thispath=$this->Slash($fullpath,$_FILES[$id."file_".$i]["name"]);
		if (cms_move_uploaded_file($_FILES[$id."file_".$i]["tmp_name"],$thispath)) {
			$messages.=$_FILES[$id."file_".$i]["name"]." ".$this->Lang("uploadsuccess")."<br/>";
		} else {
			$errors.=$_FILES[$id."file_".$i]["name"]." ".$this->Lang("uploadfail")."<br/>";
		}
	}
}

$this->Redirect($id,"defaultadmin",$returnid,array("path"=>$params["path"],"module_message"=>$messages,"module_error"=>$errors));
?>
