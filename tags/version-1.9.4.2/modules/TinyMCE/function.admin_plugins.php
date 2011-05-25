<?php
if (!isset($gCms)) exit;
if (!$this->VisibleToAdminUser()) {
	$this->ShowErrors($this->Lang("accessdenied"));
	return;
}

// Include common plugins
$plugins = $this->GetPreference('plugins',$this->plugins_default_enabled);
$exclude = array('.', '..', 'readme.txt', 'cleanup', 'autosave','safari','table','index.html','cmsmslink','simplepaste');
$pluginsarray=explode(",",$plugins);

$d = dir(dirname(__FILE__).'/tinymce/jscripts/tiny_mce/plugins');

$plugins_available = array();
while ($entry = $d->read()) {
	
	if (!in_array($entry, $exclude) && substr($entry,0,1) != ".") {
	
		$oneplugin = new stdClass();
		
		$url="http://wiki.moxiecode.com/index.php/TinyMCE:Plugins/".$entry;
		
		$oneplugin->id = $entry;
		$oneplugin->url = "<a href='".$url."' target='_blank'>".$entry."</a>";
		$oneplugin->value = $this->CreateInputCheckbox($id, $entry, 1, (in_array($entry,$pluginsarray) ? 1 : 0));
		
		$plugins_available[] = $oneplugin;
		
	}
}
$d->close();
sort($plugins_available);

// Include module plugins
$module_plugins = $this->GetPreference('module_plugins','');
$module_pluginsarray=explode(',',$module_plugins);

$all_module_plugins = $this->GetModulePlugins();
$module_plugins_available = array();
foreach($all_module_plugins as $key=>$value) {

	foreach($value as $plugin) {
		
		$oneplugin = new stdClass();
			
		$oneplugin->id = $plugin[0];
		$oneplugin->module = $key;
		$oneplugin->desc = $plugin[2];
		$oneplugin->value = $this->CreateInputCheckbox($id, $plugin[0], 1, (in_array($plugin[0],$module_pluginsarray) ? 1 : 0));
		
		$module_plugins_available[] = $oneplugin;
	
	}
}
sort($module_plugins_available);

$this->smarty->assign('startform', $this->CreateFormStart($id, 'saveplugins', $returnid));
$this->smarty->assign('endform', $this->CreateFormEnd());
$this->smarty->assign('plugins_help', $this->Lang('plugins_help'));
$this->smarty->assign('module_plugins_text', $this->Lang('plugins_module'));
$this->smarty->assign('common_plugins_text', $this->Lang('plugins_common'));
$this->smarty->assign('module_text', $this->Lang('module'));
$this->smarty->assign('description_text', $this->Lang('description'));
$this->smarty->assign('plugin_text', $this->Lang('plugin'));
//$this->smarty->assign('plugins_text', $this->Lang('plugins_text'));
$this->smarty->assign('plugins_list', $plugins_available );
$this->smarty->assign('module_plugins_list', $module_plugins_available);
$this->smarty->assign('submit', $this->CreateInputSubmit($id, "submit", $this->Lang("saveplugins")));
$this->smarty->assign('reset', $this->CreateInputSubmit($id, "resetplugins", $this->Lang("reset"),"","",$this->Lang("confirmreset")));

echo $this->ProcessTemplate('pluginspanel.tpl');

?>
