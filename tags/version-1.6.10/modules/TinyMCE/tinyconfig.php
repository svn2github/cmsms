<?php

header("Content-type:text/javascript; charset=utf-8");
$path = dirname(dirname(dirname($_SERVER['SCRIPT_FILENAME'])));
//$path = dirname(dirname(dirname(__FILE__)));
if (file_exists($path . DIRECTORY_SEPARATOR . 'include.php')) {
  require $path . DIRECTORY_SEPARATOR . 'include.php';
} else {
	$path = dirname(dirname(dirname(__FILE__)));
	require $path . DIRECTORY_SEPARATOR . 'include.php';
}



// Adapted from http://www.php.net/manual/en/function.session-id.php#54084
// session_id() returns an empty string if there is no current session, sotest if a session already exists before calling session_start() to prevent error notices:
if(session_id() == "") {
  session_start();
}


$frontend=false;
/*if (isset($_SESSION["tiny_live_frontend"]) && $_SESSION["tiny_live_frontend"]!="") {
  $frontend=true;
  //$_SESSION["tiny_live_frontend"]="";//needed in GenerateConfig()!!
}*/
if (isset($_GET["frontend"]) && $_GET["frontend"]=="yes") {
  $frontend=true;
}
global $gCms;
$config=$gCms->GetConfig();

$templateid="";
if (isset($_GET["templateid"])) $templateid=$_GET["templateid"];

$languageid="";
if (isset($_GET["languageid"])) $languageid=$_GET["languageid"];

//$basepath = $gCms->config["root_url"].'/modules/TinyMCE/tinymce/jscripts/tiny_mce/';
//$css = $gCms->config['root_url'] . "/modules/TinyMCE/content_css.php?mediatype=screen&templateid=" .$_SESSION["tiny_live_templateid"] ;

$modules =& $gCms->modules;
$tiny=$modules["TinyMCE"]['object'];
$configcontent=$tiny->GenerateConfig($frontend,$templateid,$languageid);
echo $configcontent;
//$_SESSION["tiny_live_frontend"]="";

?>
