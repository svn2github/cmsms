<?php
$CMS_ADMIN_PAGE=1;
$path = dirname(dirname(dirname(__FILE__)));
require_once($path . DIRECTORY_SEPARATOR . 'include.php');
$urlext = get_secure_param();

check_login();
$userid = get_userid();

$config=&$gCms->GetConfig();

$modules =&$gCms->modules;
$tiny=$modules["TinyMCE"]['object'];
$tiny->curlang=get_preference($userid, 'default_cms_language');
$filepickerstyle=$tiny->GetPreference("filepickerstyle","both");
$tiny->smarty->assign("filepickerstyle",$filepickerstyle);

$tiny->smarty->assign("rooturl",$config["root_url"]);
$tiny->smarty->assign("admindir",$config["admin_dir"]);
$tiny->smarty->assign("filepickertitle",$tiny->Lang("filepickertitle"));
$tiny->smarty->assign("youareintext",$tiny->Lang("youareintext"));


$rootpath="";
$rooturl="";
if ($_GET["type"]=="image") {
  $rootpath=$config["image_uploads_path"];
  $rooturl=$config["image_uploads_url"];
  $tiny->smarty->assign("isimage","1");
} else {
  $rootpath=$config["uploads_path"];
  $rooturl=$config["uploads_url"];
  $tiny->smarty->assign("isimage","0");
}

if (!$tiny->CheckPermission('allowadvancedprofile')) {  
  if (($tiny->GetPreference("restrictdirs",0)==1)) {
    $username=$gCms->variables['username'];

    if ($_GET["type"]=="image") {
      $tmppath=dirname($rootpath).'/'.$username;
      //echo $tmppath;
      @mkdir($tmppath); //Make sure initial dir is there
      $rootpath=str_replace("images",$username."/"."images",$rootpath);
      @mkdir($rootpath); //make sure images-dir is there
      //echo $rootpath;
      $rooturl=str_replace("images",$username."/"."images",$rooturl);
    } else {
      $rootpath.='/'.$username;
      @mkdir($rootpath);
      @mkdir($rootpath."/images");
      $rooturl.="/".$username;
    }
  }
}
///echo $rootpath.",".$rooturl; die();

if (strtolower(substr($rooturl,0,5))=="https") {
  $rooturl=substr($rooturl,8); //remove https:/
} else {
  $rooturl=substr($rooturl,7); //remove http:/
}
$rooturl=substr($rooturl,strpos($rooturl,"/")); //Remove domain

$subdir="";
if (isset($_GET["subdir"])) $subdir=trim($_GET["subdir"]);
$subdir=str_replace(".","",$subdir); //avoid hacking attempts

if ($subdir!="" && $subdir[0]=="/") $subdir=substr($subdir,1);

$thisdir=$rootpath.'/';
if ($subdir!="") $thisdir.=$subdir."/";
$thisurl=$rooturl.'/';
if ($subdir!="") $thisurl.=$subdir."/";

$tiny->smarty->assign("subdir",$subdir);

$fmallowed=false;
$showfm=false;
if ($tiny->CheckPermission("Modify Files") || $tiny->GetPreference("ignoremodifyfiles")==1) {
  $fmallowed=true;
  if ($tiny->CheckPermission('allowadvancedprofile')) {
    $showfm=($tiny->GetPreference("advanced_showfilemanagement",0)==1);
  } else {
    $showfm=($tiny->GetPreference("showfilemanagement",0)==1);
  }
}

$usefm=($fmallowed && $showfm);

//echo $_SESSION["cms_admin_user_name"];
//if ($usefm) {
/*if (!$tiny->CheckPermission('allowadvancedprofile')) {
  //echo "hi";
  if (($tiny->GetPreference("restrictdirs",0)==1)) {
    //die();
    $thisdir=str_replace($rootpath,$rootpath."/".$username,$thisdir);
    @mkdir($rootpath."/".$username);
    @mkdir($rootpath."/".$username."/images");
    $thisurl=str_replace($rooturl,$rooturl."/".$username,$thisdir);
  }
}*/
//}
//echo $thisdir;//
//Handle File upload and dir creation
if ($usefm) {
  if (isset($_POST["uploadformupload"])) {
    //print_r($_FILES);
    if (isset($_FILES["uploadformnewfile"])) {
      //CHeck for uploaded file
      if ($_FILES["uploadformnewfile"]["name"]!="") {
        //check filename
        if ($tiny->ContainsIllegalChars($_FILES["uploadformnewfile"]["name"])) {
          $tiny->smarty->assign('messagefail',$tiny->Lang("containsillegalchars"));
        } else
        //checkfor file size
          if (($_FILES["uploadformnewfile"]["size"]>$config["max_upload_size"])
                  || ($_FILES["uploadformnewfile"]["error"]==1)) {
            $tiny->smarty->assign('messagefail',$tiny->Lang("filetoobig"));
          } else {
            $filename=$tiny->Slash($thisdir,$_FILES["uploadformnewfile"]["name"]);
            if ($tiny->GetPreference("makethumbnail",0)==1) {
              $thumbname=$tiny->Slash($thisdir,"thumb_".$_FILES["uploadformnewfile"]["name"]);
              $tiny->HandleFileResizing($_FILES["uploadformnewfile"]["tmp_name"],$thumbname,96,96);
            }
            //print_r($_POST);
            if (isset($_POST["uploadformresize_on"]) && is_numeric($_POST["uploadformresize_x"]) && is_numeric($_POST["uploadformresize_y"])) {
              if ($tiny->HandleFileResizing($_FILES["uploadformnewfile"]["tmp_name"],$filename,$_POST["uploadformresize_x"],$_POST["uploadformresize_y"])) {
                $tiny->smarty->assign('messagesuccess',$tiny->Lang("fileuploaded"));
              } else {
                $tiny->smarty->assign('messagefail',$tiny->Lang("uploadfailed"));
              }
            } else {
              if (cms_move_uploaded_file($_FILES["uploadformnewfile"]["tmp_name"],$filename)) {
                $tiny->smarty->assign('messagesuccess',$tiny->Lang("fileuploaded"));
              } else {
                $tiny->smarty->assign('messagefail',$tiny->Lang("uploadfailed"));
              }
            }
          }
      } else {
        $tiny->smarty->assign('messagefail',$tiny->Lang("nofile"));
      }
    } else {
      //This shouldn't happen
      $tiny->smarty->assign('messagefail',$tiny->Lang("nofile"));
    }
  }

  if (isset($_POST["uploadformcreate"])) {
    //$tiny->smarty->assign('messagesuccess',"This is a success message");
    if (isset($_POST["uploadformnewdir"]) && $_POST["uploadformnewdir"]!="") {
      $newdir=$tiny->Slash($thisdir,$_POST["uploadformnewdir"]);
      if (!is_dir($newdir)) {
        if (mkdir($newdir)) {
          $tiny->smarty->assign('messagesuccess',$tiny->Lang("newdircreated"));
        } else {
          $tiny->smarty->assign('messagefail',$tiny->Lang("newdirfailed"));
        }
      } else {
        $tiny->smarty->assign('messagefail',$tiny->Lang("direxists"));
      }
    } else {
      $tiny->smarty->assign('messagefail',$tiny->Lang("nodirname"));
    }
  }
  if (isset($_GET["deletefilename"])) {
    $filename=$tiny->Slash($thisdir,base64_decode($_GET["deletefilename"]));
    if (@unlink($filename)) {
      $tiny->smarty->assign('messagesuccess',base64_decode($_GET["deletefilename"])." ".$tiny->Lang("deletefilesuccess"));
    } else {
      $tiny->smarty->assign('messagefail',base64_decode($_GET["deletefilename"])." ".$tiny->Lang("deletefilefailed"));
    }
  }
  if (isset($_GET["deletesubdir"])) {
    $filename=$tiny->Slash($thisdir,base64_decode($_GET["deletesubdir"]));
    //echo $filename;
    if (@rmdir($filename)) {
      $tiny->smarty->assign('messagesuccess',base64_decode($_GET["deletesubdir"])." ".$tiny->Lang("deletesubdirsuccess"));
    } else {
      $tiny->smarty->assign('messagefail',base64_decode($_GET["deletesubdir"])." ".$tiny->Lang("deletesubdirfailed"));
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

$fmmodule=$tiny->GetModuleInstance("FileManager");

$files = Array();
//echo $thisdir;
$d = dir($thisdir);
while ($entry = $d->read()) {
  if ($entry[0]==".") continue;
  if (substr($entry,0,6)=="thumb_") {
    if ($tiny->GetPreference("showthumbnailfiles")!="1") {
      continue;
    }
  }

  $file=array();
  $file["name"]=$entry;
  $file["isimage"]="0";
  $file["fullpath"]=$thisdir.$entry;
  $file["fullurl"]=$thisurl.$entry;
  $file["ext"]=strtolower(substr($entry,strrpos($entry,".")));

  $file["isdir"]=is_dir($file["fullpath"]);


  if (!$file["isdir"]) {
    if ($_GET["type"]=="image") {
      if ($file["ext"]!=".jpeg" && $file["ext"]!=".jpg" && $file["ext"]!=".gif" && $file["ext"]!=".png") {
        continue;
      }
      // 		}
      // 		if ($file["ext"]==".jpg" || $file["ext"]==".gif" || $file["ext"]==".png") {
      else {
        $file["isimage"]="1";
      }

      if ($filepickerstyle!="filename") {
        if ($tiny->GetPreference("showthumbnailfiles")=="1") {
          $file["thumbnail"]=$tiny->GetThumbnailFile(str_replace("thumb_","",$entry),$thisdir,$thisurl);
        } else {
          $file["thumbnail"]=$tiny->GetThumbnailFile($entry,$thisdir,$thisurl);
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
  $onerow->namelink="<a href='".$config["root_url"]."/modules/TinyMCE/filepicker.php".$urlext."&amp;type=".$_GET["type"]."&amp;subdir=".$newsubdir."'>[..]</a>\n";
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
    $onerow->namelink="<a href='".$config["root_url"]."/modules/TinyMCE/filepicker.php".$urlext."&amp;type=".$_GET["type"]."&amp;subdir=".$subdir."/".$file["name"]."'>[".$file["name"]."]</a>\n";
    if (IsDirEmpty($tiny->Slash($thisdir,$file["name"]))) {
      if ($usefm) {
        $onerow->deletelink="<a href='".$config["root_url"]."/modules/TinyMCE/filepicker.php".$urlext."&amp;type=".$_GET["type"]."&amp;subdir=".$subdir."&amp;deletesubdir=".base64_encode($file["name"])."'";
        $onerow->deletelink.=" onclick=\"return confirm('".$tiny->Lang("deletedirconfirmation")."')\"";
        $onerow->deletelink.="><img style='border:0px' src='".$config["root_url"]."/modules/TinyMCE/images/delete.gif' alt='".$tiny->Lang("deletedir")."' title='".$tiny->Lang("deletedir")."' />";
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
      $onerow->deletelink="<a href='".$config["root_url"]."/modules/TinyMCE/filepicker.php".$urlext."&amp;type=".$_GET["type"]."&amp;subdir=".$subdir."&amp;deletefilename=".base64_encode($file["name"])."'";
      $onerow->deletelink.=" onclick=\"return confirm('".$tiny->Lang("deleteconfirmation")."')\"";
      $onerow->deletelink.="><img style='border:0px' src='".$config["root_url"]."/modules/TinyMCE/images/delete.gif' alt='".$tiny->Lang("deletefile")."' title='".$tiny->Lang("deletefile")."' />";
      $onerow->deletelink.="</a>\n";
    }

    $onerow->size=number_format($file["size"],0,"",$tiny->Lang("thousanddelimiter"));
    $filecount++;
  }
  array_push($showfiles, $onerow);
}
$tiny->smarty->assign('dircount', $dircount);
$tiny->smarty->assign('filecount', $filecount);

$tiny->smarty->assign('sizetext', $tiny->Lang("size"));
$tiny->smarty->assign('dimensionstext', $tiny->Lang("dimensions"));

if ($usefm) {
  $tiny->smarty->assign('successtext',$tiny->Lang("success"));
  $tiny->smarty->assign('errortext',$tiny->Lang("error"));
  $tiny->smarty->assign('securityfield',$tiny->CreateInputHidden("",CMS_SECURE_PARAM_NAME,$_SESSION[CMS_USER_KEY]));


  $tiny->smarty->assign('fileoperations',$tiny->Lang("fileoperations"));
  $tiny->smarty->assign('formstart','<form id="uploadform" method="post" action="'.$config["root_url"].'/modules/TinyMCE/filepicker.php?type='.$_GET["type"].'&amp;subdir='.$subdir.'" enctype="multipart/form-data">');
  $tiny->smarty->assign('fileuploadtext',$tiny->Lang("uploadnewfile"));
  $tiny->smarty->assign('fileuploadinput',$tiny->CreateInputFile("uploadform","newfile","",20));
  $tiny->smarty->assign('fileuploadsubmit',$tiny->CreateInputSubmit("uploadform","upload",$tiny->Lang("uploadfile")));

  $tiny->smarty->assign('newdirtext',$tiny->Lang("createnewdir"));
  $tiny->smarty->assign('newdirinput',$tiny->CreateInputText("uploadform","newdir","",20));
  $tiny->smarty->assign('newdirsubmit',$tiny->CreateInputSubmit("uploadform","create",$tiny->Lang("createdir")));

  if ($tiny->GetPreference("allowscaling")=="1") {
    $tiny->smarty->assign('resizeto',$tiny->Lang("resizeto"));
    $tiny->smarty->assign('resize_x',$tiny->CreateInputText("uploadform","resize_x",$tiny->GetPreference("scalingwidth"),4,4));
    $tiny->smarty->assign('resize_y',$tiny->CreateInputText("uploadform","resize_y",$tiny->GetPreference("scalingheight"),4,4));
    $tiny->smarty->assign('resize_on',$tiny->CreateInputCheckbox("uploadform","resize_on","1"));
  }


  $tiny->smarty->assign('formend',$tiny->CreateFormEnd());
}

$tiny->smarty->assign_by_ref('files', $showfiles);
$tiny->smarty->assign('filescount', count($showfiles));



echo $tiny->ProcessTemplate('filepicker.tpl');

?>