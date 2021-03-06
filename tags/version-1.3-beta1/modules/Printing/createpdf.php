<?php
$path = dirname(dirname(dirname($_SERVER['SCRIPT_FILENAME'])));
require $path . DIRECTORY_SEPARATOR . 'include.php';


global $gCms;

// calguy1000, a little hack to solve relative image issues
$config =& $gCms->getConfig();
$_owd = getcwd();
chdir( $config['root_path'] );

$smarty =& $gCms->getSmarty();;

//print_r($_GET); die();
$output="";
$modules =& $gCms->modules;
$module=&$modules["Printing"]['object'];
//define("RELATIVE_PATH",$config["root_path"]."/modules/Printing/html2fpdf/");
//define("FPDF_FONTPATH",$config["root_path"]."/modules/Printing/html2fpdf/font/");

//require_once(dirname(__FILE__).'/html2fpdf/html2fpdf.php');
require_once(dirname(__FILE__).'/tcpdf/tcpdf.php');

/*$pdfhtml = $smarty->fetch('template:notemplate') . "\n";
 $pageinfo = PageInfoOperations::LoadPageInfoByAlias($_GET["pagealias"]);
 print_r($pageinfo);*/

$contentops =&$gCms->GetContentOperations();
$content =& $contentops->LoadContentFromId($_REQUEST["pageid"]);
$props=$content->Properties();
//print_r();
//if (isset($content)) {
  //$content =& $node->GetContent();
//}

$pagetitle=$content->mName;
$menutext=$content->mMenuText;

function AdjustHTML($html,$usepre=true)
{
//Try to make the html text more manageable (turning it into XHTML)

  //Remove javascript code from HTML (should not appear in the PDF file)
  $regexp = '|<script.*?</script>|si';
  $html = preg_replace($regexp,'',$html);

 	$html = str_replace("\r\n","\n",$html); //replace carriagereturn-linefeed-combo by a simple linefeed
 	$html = str_replace("\f",'',$html); //replace formfeed by nothing
	$html = str_replace("\r",'',$html); //replace carriage return by nothing
 	if ($usepre) //used to keep \n on content inside <pre> and inside <textarea>
 	{
    // Preserve '\n's in content between the tags <pre> and </pre>
  	$regexp = '#<pre(.*?)>(.+?)</pre>#si';
  	$thereispre = preg_match_all($regexp,$html,$temp);
    // Preserve '\n's in content between the tags <textarea> and </textarea>
  	$regexp2 = '#<textarea(.*?)>(.+?)</textarea>#si';
  	$thereistextarea = preg_match_all($regexp2,$html,$temp2);
  	$html = str_replace("\n",' ',$html); //replace linefeed by spaces
  	$html = str_replace("\t",' ',$html); //replace tabs by spaces
	  $regexp3 = '#\s{2,}#s'; // turn 2+ consecutive spaces into one
	  $html = preg_replace($regexp3,' ',$html);
   	$iterator = 0;
  	while($thereispre) //Recover <pre attributes>content</pre>
  	{
      $temp[2][$iterator] = str_replace("\n","<br>",$temp[2][$iterator]);
    	$html = preg_replace($regexp,'<erp'.$temp[1][$iterator].'>'.$temp[2][$iterator].'</erp>',$html,1);
    	$thereispre--;
    	$iterator++;
    }
    $iterator = 0;
    while($thereistextarea) //Recover <textarea attributes>content</textarea>
	  {
      $temp2[2][$iterator] = str_replace(" ","&nbsp;",$temp2[2][$iterator]);
    	$html = preg_replace($regexp2,'<aeratxet'.$temp2[1][$iterator].'>'.trim($temp2[2][$iterator]).'</aeratxet>',$html,1);
    	$thereistextarea--;
    	$iterator++;
    }
    //Restore original tag names
    $html = str_replace("<erp","<pre",$html);
    $html = str_replace("</erp>","</pre>",$html);
    $html = str_replace("<aeratxet","<textarea",$html);
    $html = str_replace("</aeratxet>","</textarea>",$html);
  // (the code above might slowdown overall performance?)
  } //end of if($usepre)
  else
  {
  	$html = str_replace("\n",' ',$html); //replace linefeed by spaces
  	$html = str_replace("\t",' ',$html); //replace tabs by spaces
	  $regexp = '/\\s{2,}/s'; // turn 2+ consecutive spaces into one
  	$html = preg_replace($regexp,' ',$html);
  }
  // remove redundant <br>'s before </div>, avoiding huge leaps between text blocks
  // such things appear on computer-generated HTML code  
	$regexp = '/(<br[ \/]?[\/]?>)+?<\/div>/si'; //<?//fix PSPAD highlight bug
	$html = preg_replace($regexp,'</div>',$html);
	return $html;
}


$html=$props->mPropertyValues["content_en"];

$html=html_entity_decode($html,ENT_NOQUOTES,"UTF-8");


//Test
$html=$module->ProcessTemplateFromData($html);

$smarty->assign("title", $pagetitle);

$smarty->assign("content", AdjustHtml($html));

//$pdfhtml=file_get_contents($module->CreateLink($module->id, "pdfpage", $_GET["returnid"], "", array("page"=>$_GET["page"]),"",true, true));

//$html = $smarty->fetch('template:notemplate');


 

$pdfhtml=$module->ProcessTemplateFromDatabase("pdftemplate");

$pdfhtml=str_replace("\t"," ",$pdfhtml);

    $pdfhtml=str_replace("\r"," ",$pdfhtml);
     
   	$pdfhtml=str_replace("\n"," ",$pdfhtml);
while (strpos($pdfhtml,'  ') !== false) $pdfhtml= str_replace('  ',' ',$pdfhtml);



$pdf = new TCPDF($module->GetPreference("orientation","P"), PDF_UNIT, PDF_PAGE_FORMAT, true); 
$pdf->SetHeaderData("", "", $pagetitle, $module->GetPreference("pdfheader","Generated by CMS Made Simple"));
//$pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE, PDF_HEADER_STRING);
$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', $module->GetPreference("headerfontsize","10")));
$pdf->setFooterFont(Array(PDF_FONT_NAME_MAIN, '', $module->GetPreference("headerfontsize","10")));
$pdf->setFont(PDF_FONT_NAME_DATA, '', $module->GetPreference("contentfontsize","10"));
$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
//set auto page breaks
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);
$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);
//$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO); //set image scale factor
$pdf->AliasNbPages();

$pdf->AddPage();

$pdf->writeHTML($pdfhtml, true, 0);
@ob_clean();
$pdf->Output($menutext.".pdf","D");


//$pdfhtml=$_SESSION["pdfhtml"];
//echo $pdfhtml;
//define('RELATIVE_PATH','modules/Printing/html2fpdf/');
/*$pdf=new HTML2FPDF();

$header=$module->GetPreference("pdfheader","");
if ($header!="") {
  $header=str_replace("%pt",$pagetitle,$header);
  $header=str_replace("%pm",$menutext,$header);
  $pdf->UseTableHeader();
  $pdf->Header($header);
}


$pdf->AddPage();
$pdf->WriteHTML($pdfhtml);


$pdf->Output("generated.pdf","D");
*/

// calguy1000, a little hack to solve relative image issues
chdir( $_owd );

//include($module->)
//include($config['root_url']."/index.php?page=".$_GET["page_id"]."&print=true");//&print=true



?>
