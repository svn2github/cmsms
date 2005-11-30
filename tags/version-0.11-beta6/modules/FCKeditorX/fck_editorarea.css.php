<?
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

$CssTag = "";

$CssTag = trim(strtoupper($gCms->modules["FCKeditorX"][object]->GetPreference("FCKConfig.BackgroundTagsCSS")));

if (strcmp($CssTag, "DEFAULT") == 0)
  $CssTag = "";

if (strcmp($CssTag, "") != 0)
  $cssparser->Add("BODY", "background-color: $CssTag;");

echo $cssparser->GetCSS();

?>
