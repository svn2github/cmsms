<?php

if (isset($params["pdfenable"]))
  $this->SetPreference("pdfenable","1");
  else
  $this->SetPreference("pdfenable","");
if (isset($params["pdfheader"])) $this->SetPreference("pdfheader",$params["pdfheader"]);
//if (isset($params["pdffooter"])) $this->SetPreference("pdffooter",$params["pdffooter"]);
if (isset($params["headerfontsize"])) $this->SetPreference("headerfontsize",$params["headerfontsize"]);
if (isset($params["contentfontsize"])) $this->SetPreference("contentfontsize",$params["contentfontsize"]);
if (isset($params["fonttype"])) $this->SetPreference("fonttype",$params["fonttype"]);
if (isset($params["orientation"])) $this->SetPreference("orientation",$params["orientation"]);
//if (isset($params["pdfengine"])) $this->SetPreference("pdfengine",$params["pdfengine"]);

$this->Redirect($id,"defaultadmin",$returnid,array("module_message"=>$this->Lang("pdfsettingssaved"),"tab"=>"pdfsettings"));
?>