<?php
/*$pageinfo = PageInfoOperations::LoadPageInfoByContentAlias($params["page"]);
print_r($pageinfo);
 <li><em>(optional)</em> goback - Set to "true" to show a "Go Back" link on the page to print.</li>
                <li><em>(optional)</em> popup - Set to "true" and page for printing will by opened in new window.</li>
                <li><em>(optional)</em> script - Set to "true" and in print page will by used java script for run print of page.</li>
                <li><em>(optional)</em> showbutton - Set to "true" and will show a printer graphic instead of a text link.</li>
                <li><em>(optional)</em> class - class for the link, defaults to "noprint".</li>
                <li><em>(optional)</em> text - Text to use instead of "Print This Page" for the print link.
                <li><em>(optional)</em> title - Text to show for title attribute. If blank show text parameter.</li>
                <li><em>(optional)</em> more - Place additional options inside the &lt;a&gt; link.</li>
                <li><em>(optional)</em> src_img - Show this image file. Default images/cms/printbutton.gif.</li>
                <li><em>(optional)</em> class_img - Class of &lt;img&gt; tag if showbutton is sets.</li>

*/
//print_r($params);
$target="";
if (isset($params["popup"])) {
  if ($params["popup"]=="true" || $params["popup"]=="1") {
    $target="target='_blank'";
    $params["goback"]="0";
  }
  
}
$this->smarty->assign("target", $target);
$onlyurl=false;
if (isset($params["onlyurl"])) {
  if ($params["onlyurl"]=="true" || $params["onlyurl"]=="1") $onlyurl=true;
}

$action="printpage";
if( isset($params['pdf'])  &&
    ($params["pdf"]=="true" || $params["pdf"]=="1") ) $action="pdfpage";

$href=$this->CreateLink($id, $action, $returnid, "", $params,"",true, true);
if (isset($params['pdf']) && ($params["pdf"]=="true" || $params["pdf"]=="1")) {
  if (!isset($params["mact"])) {
    $href=$GLOBALS["config"]["root_url"]."/modules/Printing/createpdf.php?pageid=".$gCms->variables["content_id"]."&amp;returnid=".$returnid;
  } else {
      
  }
}

//print_r($gCms->variables);
//echo $gCms->variables->pageinfo["content_alias"];

$this->smarty->assign("href", $href);

$linktext="";
if (isset($params["text"])) {
  $linktext=$params["text"];
} else {
  $linktext=$this->Lang("defaultlinktext");
  if (isset($params['pdf']) && ($params["pdf"]=="true" || $params['pdf']=='1')) {
    $linktext=$this->Lang("defaultpdflinktext");
  }
}
$this->smarty->assign("linktext", $linktext);

if (isset($params["showbutton"])) {
  if ($params["showbutton"]=="true" || $params["showbutton"]=="1") {
    $linkimage="";
    $imgclass="";
    $imgsrc="";

    $imgsrc="modules/Printing/printbutton.gif";
    if (isset($params['pdf']) && ($params["pdf"]=="true" || $params['pdf']=='1')) {
       $imgsrc="modules/Printing/pdfbutton.gif";
    }
    if (isset($params["src_img"])) $imgsrc=$params["src_img"];
    if (isset($params["class_img"])) $imgclass=$params["class_img"];
    $linkimage='<img src="'.$imgsrc.'" alt="'.$linktext.'" ';
    $linkimage.=' title="'.$linktext.'" ';
    if ($imgclass!="") $linkimage.='class="'.$imgclass.'" ';
    $linkimage.="/>";

    $this->smarty->assign('imgsrc',$imgsrc);
    $this->smarty->assign('imgclass',$imgclass);
    $this->smarty->assign("linkimage", $linkimage);
  }
}
if (isset($params["more"])) $this->smarty->assign("more", $params["more"]);


$class="noprint";
if (isset($params["class"])) $class=$params["class"];
$this->smarty->assign("class", $class);

if ($onlyurl) {
  echo $href; 
} else {
  if ($this->GetTemplate("linktemplate")=="") $this->ResetLinkTemplate();
  echo $this->ProcessTemplateFromDatabase("linktemplate");
}

?>
