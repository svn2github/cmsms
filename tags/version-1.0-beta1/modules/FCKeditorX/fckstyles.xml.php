<?php
header('Content-type: application/xml; charset=UTF-8');
$CMS_ADMIN_PAGE=1;
$inclfilename = 'include.php';
while(!@file_exists($inclfilename)){
	$inclfilename = "../".$inclfilename;
}
@require_once($inclfilename);


/*$Logfilename = 'XLogger.php';
while(!@file_exists($Logfilename)){
	$Logfilename = "../".$Logfilename;
}
@include($Logfilename) ;

$logger = new XLogger($config["root_path"]."/tmp/cache/LogStylesXml");
*/

if (isset($_GET["id"]))
$id = $_GET["id"];
else
$id = 1;

$res = get_stylesheet($id);
//print_r($res);

$stylesT = $res["stylesheet"];
//print_r($stylesT);
global $gCms;
$db =& $gCms->GetDb();
$modules =& $gCms->modules;
/*global $gCms;
$db =& $gCms->GetDb();
$styles = $db->GetOne("SELECT data FROM ".cms_db_prefix()."module_FCKX WHERE fckx_id = 1");
*/



/*
$logger->log("************QUERY*******************");
$logger->log("SELECT data FROM ".cms_db_prefix()."module_FCKX WHERE fckx_id = 1");
$logger->log("************************************");
$logger->log("ID stylesheet: $id ;");
$logger->log("************FROM FCKX STYLES********");
$logger->log($styles);
$logger->log("************************************");
*/

// echo $styles;

//CLASS parser of a CSS file
require_once(dirname(__FILE__).'/cssparser.inc.php');

$cssparser  = new cssparser();
$cssparserT = new cssparser();

//print_r($cssparserT);

//          $html = array("ADDRESS","APPLET","AREA","A","BASE","BASEFONT","BIG","BLOCKQUOTE","BODY","BR","B", "CAPTION","CENTER","CITE","CODE","DD","DFN","DIR","DIV","DL","DT","EM","FONT","FORM","H1","H2","H3","H4","H5","H6","HEAD","HR","HTML","IMG","INPUT","ISINDEX","I","KBD","LINK","LI","MAP","MENU","META","OL","OPTION","PARAM","PRE","P","SAMP","SCRIPT","SELECT","SMALL","STRIKE","STRONG","STYLE","SUB","SUP","TABLE","TD","TEXTAREA","TH","TITLE","TR","TT","UL","U","VAR");
// LIST of HTML tag that cannot have a custom CSS

//         $cssparser->Parse($this->cms->config["root_url"].'/modules/FCKeditorX/FCKeditor/'.'fck_editorarea.css.php?id='.$templateid);


$cssparserT->ParseStr($stylesT);
if ($modules['FCKeditorX'] != null && $modules["FCKeditorX"]['object']->GetPreference("FCKConfig.ImportAllStyles","0")=="1") {
  $cssparser->ParseStr($stylesT);
} else if ($modules['FCKeditorX'] != null) {
	$styles =$modules["FCKeditorX"]['object']->GetPreference("FCKConfig.Styles");
	$cssparser->ParseStr($styles);
}

//echo print_r($cssparser->GetCSS());




//echo print_r($cssparserT->css);
/*
$logger->log("************FROM CMSMS****");
$logger->log($stylesT);
$logger->log("************************************");
$logger->log("************FROM cssparserT->css of CMSMS ********");
$logger->log($cssparserT->GetCSS());
$logger->log("************************************");

$logger->log("************FROM FCKX STYLES********");
$logger->log($styles);
$logger->log("************************************");
$logger->log("************FROM cssparserT->css of FCKX STYLES****");
$logger->log($cssparser->GetCSS());
$logger->log("************************************");
*/

//+++++++++++++++++++++++++++++++++++++++++++++++
// Construction of "fckstyles.xml" for FCKeditor
//+++++++++++++++++++++++++++++++++++++++++++++++
$styles  = '<?xml version="1.0" encoding="utf-8" ?'.'>'."\n";
$styles .= '<Styles>'."\n";

//LOOP on ALL CSS styles
foreach ($cssparser->css as $key => $value) {

	if (!array_key_exists($key, $cssparserT->css))continue;


	//SKIP CSS that are a combination of CSS
	//SKIP CSS that are binded on an EVENT
	$pieces = explode(".", $key, 2);

	if (count($pieces) > 1){
		$pieces[0] = trim($pieces[0]);
		$pieces[1] = trim($pieces[1]);

		$pieces2 = split ('[* #>:]', $pieces[0]);
		$pieces3 = split ('[* #>:]', $pieces[1]);

		if ((count($pieces2) == 1)&&(count($pieces3) == 1)){

			$style_elem = "span";

			if (strcmp($pieces[0], "") != 0) $style_elem = $pieces[0];

			if (strcmp($pieces[1], "") != 0)
			  $style_class_name = $pieces[1];
			else
			  $style_class_name = $pieces[0];


			if (strcmp($key, $style_elem) == 0)	continue;

			//SKIP custom CSS that are HTML tag
			//               if ((in_array(strtoupper($style_elem), $html))&&(strcmp($style_class_name, $style_elem) == 0))
			//                  continue;

			$styles .= '  <Style name="'.$style_class_name.'" element="'.$style_elem.'"';
			if (strcmp($style_class_name, $style_elem) != 0)
			  $styles .= '>'."\n".'   <Attribute name="class" value="'.$style_class_name.'" />'."\n".'  </Style>'."\n";
			else
	  		$styles .= '/>'."\n";

		} //END  --> if ((count($pieces2) == 1)&&(count($pieces3) == 1))

	}
}

$styles .= '</Styles>'."\n";
//+++++++++++++++++++++++++++++++++++++++++++++++
// END Construction of "fckstyles.xml" for FCKeditor
//+++++++++++++++++++++++++++++++++++++++++++++++

echo trim($styles);

/*$logger->log("*********XML GENERATED**************");
$logger->log($styles);
$logger->log("************************************");

$logger->close();*/
?>
