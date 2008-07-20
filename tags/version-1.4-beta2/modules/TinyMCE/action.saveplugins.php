<?php

if (!$this->VisibleToAdminUser()) $this->Redirect($id,"defaultadmin",$returnid);

if (isset($params["reset"])) {
  $this->ResetSettings("plugins");
  $this->Redirect($id,"defaultadmin",$returnid,array("module_message"=>$this->Lang("settingsreset"),"tab"=>"plugins"));
}

if (isset($params["resetall"])) {
  $this->ResetSettings();
  $this->Redirect($id,"defaultadmin",$returnid,array("module_message"=>$this->Lang("allsettingsreset"),"tab"=>"plugins"));
}

$plugins = "";
$d = dir(dirname(__FILE__).'/tinymce/jscripts/tiny_mce/plugins');
$exclude = array( '.', '..', '_template', 'readme.txt', 'cleanup', 'autosave','cmsmslink' );
while ($entry = $d->read()) {
	if (!in_array($entry, $exclude) ) {
		if (isset($params[$entry])) $plugins=$plugins.$entry.",";
	}
}
$d->close();
if ($plugins!="") $plugins=substr($plugins,0,-1); //Remove trailing comma

$this->SetPreference('plugins', $plugins );

$this->Redirect($id,"defaultadmin",$returnid,array("module_message"=>$this->Lang("pluginssaved"),"tab"=>"plugins"));

?>