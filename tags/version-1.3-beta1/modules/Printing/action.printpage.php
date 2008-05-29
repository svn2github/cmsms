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

$html = $smarty->fetch('template:notemplate') . "\n";
$pageinfo = PageInfoOperations::LoadPageInfoByContentAlias($params["page"]);
$this->smarty->assign("templateid", $pageinfo->template_id);

if ($params["goback"]=="true" || $params["goback"]=="1") {
  $html='<FORM><INPUT class="noprint" type="button" value="&laquo; '.$this->Lang("backbuttontext").'" onClick="history.back()"></FORM><br/>'.$html;
}

$this->smarty->assign("content", $html);
if ($params["script"]=="true" || $params["script"]=="1") {
  $this->smarty->assign("printscript", '<script type="text/javascript">window.print();</script>');  
} else {
  $this->smarty->assign("printscript", '');
}

$this->smarty->assign("rooturl", $GLOBALS["config"]["root_url"]."/");

$this->smarty->assign("overridestylesheet", $this->GetPreference("overridestyle"));

if (session_id=='') {
  session_start();
}

$_SESSION["printhtml"]=$this->ProcessTemplateFromDatabase("printtemplate");
//echo $this->ProcessTemplateFromData($this->GetPreference("printtemplate"));
//die();
//$this->SetPreference("printhtml",$this->ProcessTemplateFromData($this->GetPreference("printtemplate")));

?>