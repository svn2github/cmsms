<?php
if (!isset($gCms)) exit;
if (!$this->VisibleToAdminUser()) {
	$this->ShowErrors($this->Lang("accessdenied"));
	return;
}


$testcontent=$this->Lang("testareatext");
echo "\n<div class=\"pageoverflow\" style=\"margin-top: 1em;\">\n";
echo $this->CreateFormStart($id,"defaultadmin");
echo $this->CreateInputHidden($id,"tab","testarea");
if (isset($params["testarea"])) {
  $testcontent=$params["testarea"];
  echo "<fieldset>";
  echo "<legend>".$this->Lang("testareaoutput")."</legend>";
  echo $params["testarea"];
  echo "</fieldset>";
  echo "<fieldset>";
  echo "<legend>".$this->Lang("testareaoutputsource")."</legend>";
  echo nl2br(htmlspecialchars($params["testarea"]));
  echo "</fieldset>";
}

echo "<fieldset>";
echo "<legend>".$this->Lang("testareaeditor")."</legend>";
echo $this->CreateTextArea(true,$id,$testcontent,"testarea","","","","",80,15,"TinyMCE");
echo "<br/>";
echo $this->CreateInputSubmit($id,"submit",$this->Lang("showtestingoutput"));
echo $this->CreateFormEnd();
echo "</fieldset>";
echo "</div>\n";
?>
