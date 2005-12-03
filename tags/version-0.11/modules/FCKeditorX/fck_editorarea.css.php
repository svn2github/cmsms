<?php

$inclfilename = '../include.php';

while(!@file_exists($inclfilename)){
            $inclfilename = "../".$inclfilename;
}
@require_once($inclfilename);

global $gCms;

if (isset($_GET["id"]))
  $id = $_GET["id"];
else
  $id = 1;

$res = get_stylesheet($id);

//CLASS parser of a CSS file
require_once(dirname(__FILE__).'/cssparser.inc.php');

$cssparser = new cssparser();

$cssparser->ParseStr($res['stylesheet']);

$BodyCSS = "";
$BgColor = "";


$cssparser->Add("BODY", "background-color: ;");

$BodyCSS = trim(strtoupper($gCms->modules["FCKeditorX"]['object']->GetPreference("FCKConfig.BodyCSS")));
$BgColor = trim(strtoupper($gCms->modules["FCKeditorX"]['object']->GetPreference("FCKConfig.BgColor")));

if (strcmp($BgColor, "DEFAULT") == 0)
  $BgColor = "";

if (strcmp($BgColor, "") != 0)
  $cssparser->Add("BODY", "background-color: $BgColor;");
  
  
if (strcmp($BodyCSS, "DEFAULT") == 0)
  $BodyCSS = "";

if (strcmp($BodyCSS, "") != 0)
  $cssparser->Add("BODY", $BodyCSS);



echo $cssparser->GetCSS();

?>
