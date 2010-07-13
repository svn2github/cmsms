<?php
if (!isset($gCms)) exit;
if (!$this->VisibleToAdminUser()) $this->Redirect($id,"defaultadmin",$returnid);

if (isset($params["resetplugins"])) {
  $this->ResetSettings("plugins");
  $this->Redirect($id,"defaultadmin",$returnid,array("module_message"=>$this->Lang("settingsreset"),"tab"=>"plugins"));
}

// Handle common plugins
$plugins = "";
$d = dir(dirname(__FILE__).'/tinymce/jscripts/tiny_mce/plugins');
$exclude = array( '.', '..', '_template', 'readme.txt', 'cleanup', 'autosave','cmsmslink' );
while ($entry = $d->read()) {
	if (!in_array($entry, $exclude) ) {
		if (isset($params[$entry])) $plugins .= $entry.",";
	}
}
$d->close();
if (!empty($plugins)) $plugins = substr($plugins,0,-1); //Remove trailing comma

$this->SetPreference('plugins', $plugins );

// Handle module plugins
$module_plugins = "";
$all_module_plugins = $this->GetModulePlugins();
foreach($all_module_plugins as $onemodule) {

	foreach($onemodule as $oneplugin) {
		
		if (isset($params[$oneplugin[0]])) $module_plugins .= $oneplugin[0].",";
	
	}
}
if (!empty($module_plugins)) $module_plugins = substr($module_plugins,0,-1); //Remove trailing comma

$this->SetPreference('module_plugins', $module_plugins );

// Redirect back
$this->Redirect($id,"defaultadmin",$returnid,array("module_message"=>$this->Lang("pluginssaved"),"tab"=>"plugins"));

?>