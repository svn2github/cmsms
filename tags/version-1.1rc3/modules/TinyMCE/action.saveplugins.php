<?php

if (!$this->VisibleToAdminUser()) $this->Redirect($id,"defaultadmin",$returnid);

$plugins = "";
$d = dir(dirname(__FILE__).'/tinymce/jscripts/tiny_mce/plugins');
$exclude = array( '.', '..', '_template', 'readme.txt', 'cleanup', 'autosave' );
while ($entry = $d->read()) {
	if ( !in_array($entry, $exclude) ) {
		if( isset($params[$entry]) )
		$plugins = $plugins . $entry . ",";
	}
}
$d->close();
if ($plugins!="") $plugins=substr($plugins,0,-1); //Remove trailing comma

$this->SetPreference('plugins', $plugins );

if (isset($params['toolbar1']))
$this->SetPreference('toolbar1', $params['toolbar1'] );

if (isset($params['toolbar2']))
$this->SetPreference('toolbar2', $params['toolbar2'] );

if (isset($params['toolbar3']))
$this->SetPreference('toolbar3', $params['toolbar3'] );

$this->Redirect($id,"defaultadmin",$returnid,array("module_message"=>$this->Lang("pluginssaved"),"tab"=>"plugins"));



?>