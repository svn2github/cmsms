<?php
header("Content-Type: text/css; charset=" . (isset($config['admin_encoding'])?$config['admin_encoding']:'UTF-8'));
// header('Content-type: text/css');
$CMS_ADMIN_PAGE=1;
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
$stylesT = '';
foreach (get_stylesheet_media_types($id) as $media)
{
	if ('print' != $media) // Don't attach print stylesheets
	{
		$res = get_stylesheet($id, $media);
		$stylesT .= $res["stylesheet"];
	}
}
// $res = get_stylesheet($id);


//////////////////////////////////////
//////////////////////////////////////
//////////////////////////////////////

// include(dirname(__FILE__).'/csstidy/css_parser.php');
// 
// 
// $css = new csstidy();
// 
// 
// 
// $css->parse($res['stylesheet']);
// 
// unset($css->css["standard"]["body"]);
// // echo $css->input_css;
// // echo '***********************************'."\n";
// $res['stylesheet'] = $css->print_code(NULL,true);
// // echo '***********************************'."\n";
// // echo $css->output_css_plain;
// 
// // $res['stylesheet'] = $css->output_css;
// // $res['stylesheet'] = $css->output_css_plain;
// // $res['stylesheet'] = $css->input_css;
// 
// print_r($css->css);

//////////////////////////////////////
//////////////////////////////////////
//////////////////////////////////////


//CLASS parser of a CSS file
require_once(dirname(__FILE__).'/cssparser.inc.php');

$cssparser = new cssparser();

$cssparser->ParseStr($stylesT);

$BodyCSS = "";
$BgColor = "";


$cssparser->Add("BODY", "text-align: left; background-color: #ffffff;");

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
