<?php
check_login();
$userid = get_userid();

global $gCms;

$config=$gCms->GetConfig();

$this->curlang=get_preference($userid, 'default_cms_language');
$filepickerstyle=$this->GetPreference("filepickerstyle","both");
$this->smarty->assign("filepickerstyle",$filepickerstyle);

$this->smarty->assign("rooturl",$config["root_url"]);
$this->smarty->assign("admindir",$config["admin_dir"]);
$this->smarty->assign("filepickertitle",$this->Lang("filepickertitle"));
$this->smarty->assign("youareintext",$this->Lang("youareintext"));


$rootpath="";
$rooturl="";
$type="";
if (isset($params["type"])) {
  $type=$params["type"];
} elseif (isset($_GET["type"])) {
  $type=$_GET["type"];
}
if ($type=="image") {
  $rootpath = $config["image_uploads_path"];
  $rooturl = $config["image_uploads_url"];
  $this->smarty->assign("isimage", "1");
} else {
  $rootpath = $config["uploads_path"];
  $rooturl = $config["uploads_url"];
  $this->smarty->assign("isimage", "0");
}

if (!$this->CheckPermission('allowadvancedprofile')) {
  if (($this->GetPreference("restrictdirs", 0) == 1)) {
    $username = $gCms->variables['username'];

    if ($type == "image") {
      $tmppath = dirname($rootpath) . '/' . $username;
      //echo $tmppath;
      @mkdir($tmppath); //Make sure initial dir is there
      $rootpath = str_replace("images", $username . "/" . "images", $rootpath);
      @mkdir($rootpath); //make sure images-dir is there
      //echo $rootpath;
      $rooturl = str_replace("images", $username . "/" . "images", $rooturl);
    } else {
      $rootpath.='/' . $username;
      @mkdir($rootpath);
      @mkdir($rootpath . "/images");
      $rooturl.="/" . $username;
    }
  }
}
///echo $rootpath.",".$rooturl; die();

/* if (strtolower(substr($rooturl,0,5))=="https") {
  $rooturl=substr($rooturl,8); //remove https:/
  } else {
  $rooturl=substr($rooturl,7); //remove http:/
  } */
//$rooturl=substr($rooturl,strpos($rooturl,"/")); //Remove domain

$subdir = "";
if (isset($params["subdir"])) $subdir = trim($params["subdir"]);
$subdir = str_replace(".", "", $subdir); //avoid hacking attempts

if ($subdir != "" && $subdir[0] == "/") $subdir = substr($subdir, 1);

$thisdir = $rootpath . '/';
if ($subdir != "") $thisdir.=$subdir . "/";
$thisurl = $rooturl . '/';
if ($subdir != "") $thisurl.=$subdir . "/";

$this->smarty->assign("subdir", $subdir);

$fmallowed = false;
$showfm = false;
if ($this->CheckPermission("Modify Files") || $this->GetPreference("ignoremodifyfiles") == 1) {
  $fmallowed = true;
  if ($this->CheckPermission('allowadvancedprofile')) {
    $showfm = ($this->GetPreference("advanced_showfilemanagement", 0) == 1);
  } else {
    $showfm = ($this->GetPreference("showfilemanagement", 0) == 1);
  }
}

$usefm = ($fmallowed && $showfm);

//echo $_SESSION["cms_admin_user_name"];
//if ($usefm) {
/* if (!$this->CheckPermission('allowadvancedprofile')) {
  //echo "hi";
  if (($this->GetPreference("restrictdirs",0)==1)) {
  //die();
  $thisdir=str_replace($rootpath,$rootpath."/".$username,$thisdir);
  @mkdir($rootpath."/".$username);
  @mkdir($rootpath."/".$username."/images");
  $thisurl=str_replace($rooturl,$rooturl."/".$username,$thisdir);
  }
  } */
//}
//echo $thisdir;//
//Handle File upload and dir creation
if ($usefm) {
  if (isset($params["uploadsubmit"])) {

    if (isset($_FILES[$id . "newfile"])) {

      //CHeck for uploaded file
      $newfile = $_FILES[$id . "newfile"];
      //print_r($newfile);
      if ($newfile["name"] != "") {
        //check filename
        if ($this->ContainsIllegalChars($newfile["name"])) {
          $this->smarty->assign('messagefail', $this->Lang("containsillegalchars"));
        } else
        //checkfor file size
        if (($newfile["size"] > $config["max_upload_size"])
                || ($newfile["error"] == 1)) {
          $this->smarty->assign('messagefail', $this->Lang("filetoobig"));
        } else {
          $ext = strtolower(substr($newfile["name"], strrpos($newfile["name"], ".")));
          //echo $ext;echo $type;
          $isimage = ($ext == ".jpeg" || $ext == ".jpg" || $ext == ".gif" || $ext == ".png");
          if (($type!="image") || $isimage) {
            $filename = $this->Slash($thisdir, $newfile["name"]);
            if ($this->GetPreference("makethumbnail", 1) == 1) {
              //echo "hi";
              $thumbname = $this->Slash($thisdir, "thumb_" . $newfile["name"]);
              //echo $thumbname;
              $thumbnail_width = get_site_preference('thumbnail_width', 96);
              $thumbnail_height = get_site_preference('thumbnail_height', 96);
              $this->HandleFileResizing($newfile["tmp_name"], $thumbname, $thumbnail_width, $thumbnail_height);
            }
            //print_r($_POST);
            if (isset($params["resize_on"]) && is_numeric($params["resize_x"]) && is_numeric($params["resize_y"])) {
              if ($this->HandleFileResizing($newfile["tmp_name"], $filename, $params["resize_x"], $params["resize_y"])) {
                $this->smarty->assign('messagesuccess', $this->Lang("fileuploaded"));
              } else {
                $this->smarty->assign('messagefail', $this->Lang("uploadfailed"));
              }
            } else {
              if (cms_move_uploaded_file($newfile["tmp_name"], $filename)) {
                //echo $filename;
                $this->smarty->assign('messagesuccess', $this->Lang("fileuploaded"));
              } else {
                $this->smarty->assign('messagefail', $this->Lang("uploadfailed"));
              }
            }
          } else {
            $this->smarty->assign('messagefail', $this->Lang("notanimage"));
          }
        }
      } else {
        $this->smarty->assign('messagefail', $this->Lang("nofile"));
      }
    } else {
      //This shouldn't happen
      $this->smarty->assign('messagefail', $this->Lang("nofile"));
    }
  }
//print_r($params);
  if (isset($params["createsubmit"])) {
  //  echo "hi";
    //$this->smarty->assign('messagesuccess',"This is a success message");
    if (isset($params["newdir"]) && $params["newdir"]!="") {
      $newdir=$this->Slash($thisdir,$params["newdir"]);
      if (!@is_dir($newdir)) {
        if (@mkdir($newdir)) {
          $this->smarty->assign('messagesuccess',$this->Lang("newdircreated"));
        } else {
          $this->smarty->assign('messagefail',$this->Lang("newdirfailed"));
        }
      } else {
        $this->smarty->assign('messagefail',$this->Lang("direxists"));
      }
    } else {
      $this->smarty->assign('messagefail',$this->Lang("nodirname"));
    }
  }
  if (isset($params["deletefilename"])) {
    $filename=$this->Slash($thisdir,base64_decode($params["deletefilename"]));
    if (@unlink($filename)) {
      $this->smarty->assign('messagesuccess',base64_decode($params["deletefilename"])." ".$this->Lang("deletefilesuccess"));
    } else {
      $this->smarty->assign('messagefail',base64_decode($params["deletefilename"])." ".$this->Lang("deletefilefailed"));
    }
  }
  if (isset($params["deletesubdir"])) {
    $filename=$this->Slash($thisdir,base64_decode($params["deletesubdir"]));
    //echo $filename;
    if (@rmdir($filename)) {
      $this->smarty->assign('messagesuccess',base64_decode($params["deletesubdir"])." ".$this->Lang("deletesubdirsuccess"));
    } else {
      $this->smarty->assign('messagefail',base64_decode($params["deletesubdir"])." ".$this->Lang("deletesubdirfailed"));
    }
  }
}

function IsDirEmpty($dir) {
  $d = dir($dir);
  while ($entry = $d->read()) {
    if ($entry==".") continue;
    if ($entry=="..") continue;
    return false;
  }
  return true;
}


function sortfiles($file1,$file2) {
  if ($file1["isdir"] && !$file2["isdir"]) return -1;
  if (!$file1["isdir"] && $file2["isdir"]) return 1;
  return strnatcasecmp($file1["name"],$file2["name"]);
}

function makelinkurl($module,$id,$returnid,$params=array()) {
  $url=$module->CreateLink($id,"filepicker",$returnid,"",$params,"",true);
  $url.="&amp;showtemplate=false";
  return $url;
}

$fmmodule=$this->GetModuleInstance("FileManager");

$files = Array();
//echo $thisdir;
$d = dir($thisdir);
while ($entry = $d->read()) {
  if ($entry[0]==".") continue;
  if (substr($entry,0,6)=="thumb_") {
    if ($this->GetPreference("showthumbnailfiles")!="1") {
      continue;
    }
  }

  $file=array();
  $file["name"]=$entry;
  $file["isimage"]="0";
  $file["fullpath"]=$thisdir.$entry;
  $file["fullurl"]=$thisurl.$entry;
  //$file["fullurl"]=$thisurl.$entry;
  //if ($this->GetPreference("relativeurls")==1) {
    //$file["fullurl"]=str_replace($config["root_url"],"",$thisurl).$entry;
    //if ($file["fullurl"][0])=="/") $file["fullurl"]
  //} else {
    //$url=str_replace($thisurl,"",$config["root_url"]

  //}
  $file["ext"]=strtolower(substr($entry,strrpos($entry,".")));

  $file["isdir"]=is_dir($file["fullpath"]);


  if (!$file["isdir"]) {
    if ($type=="image") {
      if ($file["ext"]!=".jpeg" && $file["ext"]!=".jpg" && $file["ext"]!=".gif" && $file["ext"]!=".png") {
        continue;
      }
      // 		}
      // 		if ($file["ext"]==".jpg" || $file["ext"]==".gif" || $file["ext"]==".png") {
      else {
        $file["isimage"]="1";
      }

      if ($filepickerstyle!="filename") {
        if ($this->GetPreference("showthumbnailfiles")=="1") {
          $file["thumbnail"]=$this->GetThumbnailFile(str_replace("thumb_","",$entry),$thisdir,$thisurl);
        } else {
          $file["thumbnail"]=$this->GetThumbnailFile($entry,$thisdir,$thisurl);
        }
      }
      $imgsize=@getimagesize($file["fullpath"]);
      if ($imgsize) {
        $file["dimensions"]=$imgsize[0]."x".$imgsize[1];
      } else {
        $file["dimensions"]="&nbsp;";
      }
    }
  }


  if ($fmmodule) {
    $file["fileicon"]=$fmmodule->GetFileIcon($file["ext"],$file["isdir"]);
    //echo $file["fileicon"];
  }


  if (!$file["isdir"]) {
    $info=@stat($file["fullpath"]);
    if ($info) {
      $file["size"]=$info["size"];
    }
    //getimagesize($file["fullpath"]);
  }
  $files[]=$file;
}
$d->close();
usort($files,"sortfiles");

$showfiles=array();

if ($subdir!="") {
  $onerow = new stdClass();
  $onerow->isdir="1";
  $onerow->thumbnail="";
  $onerow->dimensions="";
  $onerow->size="";
  $newsubdir=dirname($subdir);
  $params=array("type"=>$type,"subdir"=>$newsubdir);
  //$onerow->namelink="<a href='".$config["root_url"]."/modules/TinyMCE/filepicker.php".$urlext."&amp;type=".$_GET["type"]."&amp;subdir=".$newsubdir."'>[..]</a>\n";
  $onerow->namelink="<a href='".makelinkurl($this,$id,$returnid,$params)."'>[..]</a>\n";
  array_push($showfiles, $onerow);
}

$filecount=0;
$dircount=0;
foreach($files as $file) {
  $onerow = new stdClass();
  $onerow->name=$file["name"];

  $onerow->name=$file["name"];
  $onerow->fileicon=$file["fileicon"];
  if ($file["isdir"]) {
    $onerow->isdir="1";
    $params=array("type"=>$type,"subdir"=>$subdir."/".$file["name"]);
    $onerow->namelink="<a href='".makelinkurl($this,$id,$returnid,$params)."'>[".$file["name"]."]</a>\n";
    //$onerow->namelink="<a href='".$config["root_url"]."/modules/TinyMCE/filepicker.php".$urlext."&amp;type=".$_GET["type"]."&amp;subdir=".$subdir."/".$file["name"]."'>[".$file["name"]."]</a>\n";
    if (IsDirEmpty($this->Slash($thisdir,$file["name"]))) {
      if ($usefm) {
        $params=array("type"=>$type,"subdir"=>$subdir,"deletesubdir"=>base64_encode($file["name"]));
        //$onerow->deletelink="<a href='".$config["root_url"]."/modules/TinyMCE/filepicker.php".$urlext."&amp;type=".$_GET["type"]."&amp;subdir=".$subdir."&amp;deletesubdir=".base64_encode($file["name"])."'";
        $onerow->deletelink="<a href='".makelinkurl($this,$id,$returnid,$params)."'";
        $onerow->deletelink.=" onclick=\"return confirm('".$this->Lang("deletedirconfirmation")."')\"";
        $onerow->deletelink.="><img style='border:0px' src='".$config["root_url"]."/modules/TinyMCE/images/delete.gif' alt='".$this->Lang("deletedir")."' title='".$this->Lang("deletedir")."' />";
        $onerow->deletelink.="</a>\n";
      }
    }
    $dircount++;
  } else {
    $onerow->isdir="0";
    $onerow->isimage=$file["isimage"];
    if (isset($file["thumbnail"])) $onerow->thumbnail=$file["thumbnail"];
    $onerow->fullurl=$file["fullurl"];
    if (isset($file["dimensions"])) {
      $onerow->dimensions=$file["dimensions"];
    } else {
      $onerow->dimensions="&nbsp;";
    }
    if ($usefm) {
      $params=array("type"=>$type,"subdir"=>$subdir,"deletefilename"=>base64_encode($file["name"]));
      $onerow->deletelink="<a href='".makelinkurl($this,$id,$returnid,$params)."'";
      //$onerow->deletelink="<a href='".$config["root_url"]."/modules/TinyMCE/filepicker.php".$urlext."&amp;type=".$_GET["type"]."&amp;subdir=".$subdir."&amp;deletefilename=".base64_encode($file["name"])."'";
      $onerow->deletelink.=" onclick=\"return confirm('".$this->Lang("deleteconfirmation")."')\"";
      $onerow->deletelink.="><img style='border:0px' src='".$config["root_url"]."/modules/TinyMCE/images/delete.gif' alt='".$this->Lang("deletefile")."' title='".$this->Lang("deletefile")."' />";
      $onerow->deletelink.="</a>\n";
    }

    $onerow->size=number_format($file["size"],0,"",$this->Lang("thousanddelimiter"));
    $filecount++;
  }
  array_push($showfiles, $onerow);
}
$this->smarty->assign('dircount', $dircount);
$this->smarty->assign('filecount', $filecount);

$this->smarty->assign('sizetext', $this->Lang("size"));
$this->smarty->assign('dimensionstext', $this->Lang("dimensions"));

if ($usefm) {
  $this->smarty->assign('successtext',$this->Lang("success"));
  $this->smarty->assign('errortext',$this->Lang("error"));
  $this->smarty->assign('securityfield',$this->CreateInputHidden("",CMS_SECURE_PARAM_NAME,$_SESSION[CMS_USER_KEY]));


  $this->smarty->assign('fileoperations',$this->Lang("fileoperations"));
  $params=array("type"=>$type,"subdir"=>$subdir);
  $formurl=makelinkurl($this,$id,$returnid,$params);
  $this->smarty->assign('formurl',$formurl);
  //CreateFormStart($id, $action='default', $returnid='', $method='post', $enctype='', $inline=false, $idsuffix='', $params = array(), $extra='')
  $this->smarty->assign('formstart',$this->CreateFormStart($id,"filepicker",$returnid,"post","multipart/form-data",false,"",$params));

   //$this->smarty->assign('formstart','<form method="post" action="'.$formurl.'" enctype="multipart/form-data">');
 // $this->smarty->assign('formstart','<form id=$id method="post" action="'.$config["root_url"].'/modules/TinyMCE/filepicker.php?type='.$_GET["type"].'&amp;subdir='.$subdir.'" enctype="multipart/form-data">');
  $this->smarty->assign('fileuploadtext',$this->Lang("uploadnewfile"));
  $this->smarty->assign('fileuploadinput',$this->CreateInputFile($id,"newfile","",20));
  $this->smarty->assign('fileuploadsubmit',$this->CreateInputSubmit($id,"uploadsubmit",$this->Lang("uploadfile")));

  $this->smarty->assign('newdirtext',$this->Lang("createnewdir"));
  $this->smarty->assign('newdirinput',$this->CreateInputText($id,"newdir","",20));
  $this->smarty->assign('newdirsubmit',$this->CreateInputSubmit($id,"createsubmit",$this->Lang("createdir")));

  if ($this->GetPreference("allowscaling")=="1") {
    $this->smarty->assign('resizeto',$this->Lang("resizeto"));
    $this->smarty->assign('resize_x',$this->CreateInputText($id,"resize_x",$this->GetPreference("scalingwidth"),4,4));
    $this->smarty->assign('resize_y',$this->CreateInputText($id,"resize_y",$this->GetPreference("scalingheight"),4,4));
    $this->smarty->assign('resize_on',$this->CreateInputCheckbox($id,"resize_on","1"));
  }


  $this->smarty->assign('formend',$this->CreateFormEnd());
}

$this->smarty->assign_by_ref('files', $showfiles);
$this->smarty->assign('filescount', count($showfiles));



echo $this->ProcessTemplate('filepicker.tpl');

?>