<?php

if (!isset($gCms)) exit;

header("Content-type:text/javascript; charset=utf-8");

/*if(session_id() == "") {
  session_start();
}*/


$frontend=false;
/*if (isset($_SESSION["tiny_live_frontend"]) && $_SESSION["tiny_live_frontend"]!="") {
  $frontend=true;
  //$_SESSION["tiny_live_frontend"]="";//needed in GenerateConfig()!!
}*/
if (isset($params["frontend"]) && $params["frontend"]=="yes") {
  $frontend=true;
}


$templateid="";
if (isset($params["templateid"])) $templateid=$params["templateid"];
if (isset($_REQUEST["templateid"])) $templateid=$_REQUEST["templateid"];

$languageid="";
if (isset($params["languageid"])) $languageid=$params["languageid"];
if (isset($_REQUEST["languageid"])) $languageid=$_REQUEST["languageid"];


$configcontent=$this->GenerateConfig($id,$returnid,$frontend,$templateid,$languageid);
echo $configcontent;
die();

?>
