<?php
# FileManager. A plugin for CMS - CMS Made Simple
# Copyright (c) 2006 by Morten Poulsen <morten@poulsen.org>
#
#CMS - CMS Made Simple
#(c)2004 by Ted Kulp (wishy@users.sf.net)
#This project's homepage is: http://cmsmadesimple.sf.net
#
#This program is free software; you can redistribute it and/or modify
#it under the terms of the GNU General Public License as published by
#the Free Software Foundation; either version 2 of the License, or
#(at your option) any later version.
#
#This program is distributed in the hope that it will be useful,
#but WITHOUT ANY WARRANTY; without even the implied warranty of
#MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
#GNU General Public License for more details.
#You should have received a copy of the GNU General Public License
#along with this program; if not, write to the Free Software
#Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
#

include_once(dirname(__FILE__)."/fileinfo.php");

class FileManager extends CMSModule {
  var $sortby;

  function AccessAllowed() {
    return ($this->CheckPermission("Modify Files") || $this->CheckPermission('Modify Site Preferences'));
  }
  
  function AdvancedAccessAllowed() {
    return $this->CheckPermission('Use FileManager Advanced');
  }

  function GetName() {
    return 'FileManager';
  }

  function GetFriendlyName() {
    return $this->Lang('friendlyname');
  }

  function GetVersion() {
    return '0.2.1';
  }

  function GetHelp() {
    return $this->Lang('help');
  }

  function GetAuthor() {
    return 'Morten Poulsen (Silmarillion)';
  }

  function GetAuthorEmail()	{
    return 'morten@poulsen.org';
  }

  function GetChangeLog()	{
    return $this->Lang('changelog');
  }

  function IsPluginModule() {
    return false;
  }

  function HasAdmin() {
    return true;
  }

  function GetAdminSection() {
    return 'content';
  }

  function GetAdminDescription() {
    return $this->Lang('moddescription');
  }

  function MinimumCMSVersion() {
    return "1.2.1";
  }

  function VisibleToAdminUser() {
    return ($this->AccessAllowed() || $this->AdvancedAccessAllowed());
  }
  
  function GetHeaderHTML() {
    /*global $config;
    if ($this->GetPreference("uploadmethod",1)==2) {
      return '<script src="../modules/FileManager/multifile_compressed.js"></script>';
    }
    if ($this->GetPreference("uploadmethod",1)==4) {
      
      foreach ($_GET as $param=>$value) {
        if (stripos($param,'path')>0) {
          $path=$value;
          break;  
        }
      }
      
      return '
  
<script	type="text/javascript" src="'.$config["root_url"].'/modules/FileManager/swfupload/SWFUpload.js"></script>
 <script	type="text/javascript" src="'.$config["root_url"].'/modules/FileManager/swfupload/callbacks.js"></script>

<script type="text/javascript">
  var swfu;

  //window.onload = function() {
  function InitSwfUpload() {

    swfu = new SWFUpload({
      upload_script : "'.$config["root_url"].'/modules/FileManager/swfupload.php?path='.$path.'",
      target : "SWFUploadTarget",
      flash_path : "'.$config["root_url"].'/modules/FileManager/swfupload/SWFUpload.swf",
      allowed_filesize : 30720,	// 30 MB
      allowed_filetypes : "*.*",
      allowed_filetypes_description : "All files...",
      browse_link_innerhtml : "Browse",
      upload_link_innerhtml : "Upload queue",
			flash_loaded_callback : "swfu.flashLoaded",
      browse_link_class : "swfuploadbtn browsebtn",
      upload_link_class : "swfuploadbtn uploadbtn",
      flash_loaded_callback : "swfu.flashLoaded",
      upload_file_queued_callback : "fileQueued",
      upload_file_start_callback : "uploadFileStart",
      upload_progress_callback : "uploadProgress",
      upload_file_complete_callback : "uploadFileComplete",
      upload_file_cancel_callback : "uploadFileCancelled",
      upload_queue_complete_callback : "uploadQueueComplete",
      upload_error_callback : "uploadError",
      upload_cancel_callback : "uploadCancel",
      auto_upload : false,
			debug : true,
			create_ui : true
    });

  };
  </script>
';
    }*/
  }
  


  function InstallPostMessage() {
    return $this->Lang('postinstall');
  }

  function UninstallPostMessage()	{
    return $this->Lang('uninstalled');
  }



  function UninstallPreMessage() {
    return $this->Lang('really_uninstall');
  }



  function GetActionIcon($action) {
    global $config;
    $iconsize=$this->GetPreference("iconsize","32px");
    return "<img src='../modules/FileManager/icons/themes/default/extensions/".$iconsize."/".strtolower($action).".gif' ".
						 "alt='$action' ".
						 "height='$iconsize' width='$iconsize' align='middle' />";
  }

  function GetFileIcon($extension,$isdir=false) {

    global $config;
    $iconsize=$this->GetPreference("iconsize","32px");
    if ($isdir) {
      return "<img style='border:0;' src='".$config["root_url"]."/modules/FileManager/icons/themes/default/extensions/".$iconsize."/dir.png' ".
						 "alt='directory' ".
						 "height='$iconsize' width='$iconsize' align='middle' />";
    }
    //$extension=array_pop(explode('.', $filename));

    if (file_exists($config["root_path"]."/modules/FileManager/icons/themes/default/extensions/".$iconsize."/".strtolower($extension).".png")) {
      return "<img style='border:0;' src='../modules/FileManager/icons/themes/default/extensions/".$iconsize."/".strtolower($extension).".png' ".
						 "alt='".$extension."-file' ".
						 "height='$iconsize' width='$iconsize' align='middle' />";
    } else {
      return "<img style='border:0;' src='../modules/FileManager/icons/themes/default/extensions/".$iconsize."/0.png' ".
						 "alt='".$extension."-file' ".
						 "height='$iconsize' width='$iconsize' align='middle' />";
    }
  }

  function Slash($str,$str2="",$str3="") {
    if ($str=="") return $str2;
    if ($str2=="") return $str;
    if ($str[strlen($str)-1]!="/") return $str."/".$str2; else return $str.$str2;
  }

  var $filemanager_sortby="name";
  function FileManagerCompareFiles($a,$b) {
    /*print_r($a);
     print_r($b);*/
    if ($a["dir"] || $b["dir"]) {
      if ($a["dir"] && $b["dir"]) {
        return strncasecmp($a["name"],$b["name"],strlen($a["name"]));
      } else {
        if ($a["dir"]) return -1; else return 1;
      }
    }
    return strncasecmp($a["name"],$b["name"],strlen($a["name"]));
  }

  function columnSort($unsorted) {
    $sorted = $unsorted;
    for ($i=0; $i < sizeof($sorted)-1; $i++) {
      for ($j=0; $j<sizeof($sorted)-1-$i; $j++) {
        if ($this->FileManagerCompareFiles($sorted[$j],$sorted[$j+1])>0) {
          $tmp = $sorted[$j];
          $sorted[$j] = $sorted[$j+1];
          $sorted[$j+1] = $tmp;
        }
      }
    }
    return $sorted;
  }

  function FormatPermissions($mode) {
    $owner=0;
    if ($mode & 0400) $owner+=4;
    if ($mode & 0200) $owner+=2;
    if ($mode & 0100) $owner+=1;
    $group=0;
    if ($mode & 0040) $group+=4;
    if ($mode & 0020) $group+=2;
    if ($mode & 0010) $group+=1;
    $others=0;
    if ($mode & 0004) $others+=4;
    if ($mode & 0002) $others+=2;
    if ($mode & 0001) $others+=1;
    return $owner.$group.$others;
  }
  

  function GetFileList($path,$advancedmode=false,$sortby="name") {
    //echo "<b>$path</b>";    
    $globals["filemanager_sortby"]=$sortby;
    global $config;
    $showhiddenfiles=$this->GetPreference("showhiddenfiles","1");
    $result=array();
    $realpath=$this->Slash($config["root_path"],$path);
    $dir=@opendir($realpath);
    if (!$dir) return false;
    while ($file=readdir($dir)) {
      if ($file==".") continue;
      if ($file=="..") {
        if ($advancedmode) {
          if ($path=="/") continue;
        } else {
          if ($path=="/uploads/" || $path=="/uploads") continue;
        }
      } else {
        if ($file[0]==".") {
          if (($showhiddenfiles!=1) || (!$advancedmode)) continue;
        }
      }
      $info["name"]=$file;
      $statinfo=stat($this->Slash($realpath,$file));
      if (is_dir($this->Slash($realpath,$file))) {
        $info["dir"]=true;
        $info["ext"]="";
        $info["fileinfo"]=GetFileInfo($this->Slash($realpath,$file),"",true);
      } else {
        $info["dir"]=false;        
        $info["size"]=$statinfo["size"];
        $info["date"]=$statinfo["atime"];
        $info["url"]=$config["root_url"].$this->Slash($path,$file);
        $info["ext"]=array_pop(explode('.', $file));
        $info["fileinfo"]=GetFileInfo($this->Slash($realpath,$file),$info["ext"],false);
      }
      //print_r($statinfo);
      if (function_exists("posix_getpwuid")) {
        $userinfo = @posix_getpwuid($statinfo["uid"]);
  	    $info["fileowner"]= isset($userinfo['name'])?$userinfo['name']:$this->Lang('unknown');
	      //$permsstr = siteprefs_display_permissions(interpret_permissions($filestat[2]));
	      
      } else {
        $info["fileowner"]="N/A";
       
      }
      $info["permissions"]=$this->FormatPermissions($statinfo["mode"]);
      //$info["permissions"]="coming";
      $info["writable"]=is_writable($this->Slash($realpath,$file));
      $result[]=$info;
    }
    //   usort($result,array("FileManager","FileManagerCompareFiles"));
    $result=$this->columnSort($result);
    return $result;
  }

  function ParamsArray($params,$additional=array()) {
    $path=""; if (isset($params["path"]) && $params["path"]!="") $path=$params["path"];
    $sortby=""; if (isset($params["sortby"]) && $params["sortby"]!="") $sortby=$params["sortby"];
  }
}


?>
