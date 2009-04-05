<?php
$plugins = $this->GetPreference('plugins',$this->plugins_default_enabled);
$this->smarty->assign('startform', $this->CreateFormStart($id, 'saveplugins', $returnid));
$this->smarty->assign('endform', $this->CreateFormEnd());
$plugins_available = Array();
$d = dir(dirname(__FILE__).'/tinymce/jscripts/tiny_mce/plugins');

$exclude = array( '.', '..', 'readme.txt', 'cleanup', 'autosave','safari','table',"index.html","cmsmslink","simplepaste");

$pluginsarray=explode(",",$plugins);

while ($entry = $d->read()) {
	if ($entry[0]==".") continue;
	if ( !in_array($entry, $exclude) ) {
		//Fix this!!!
		$val=0;
		for ($i=0; $i<count($pluginsarray); $i++) {
			if ($pluginsarray[$i]==$entry) {
				$val=1; break;
			}
		}
		$url="http://wiki.moxiecode.com/index.php/TinyMCE:Plugins/".$entry;
		$name = "<a href='".$url."' target='_blank'>".$entry."</a>";

		$plugins_available[]=array('id' => $entry,
				'name' => $name,
				'value' => $this->CreateInputCheckbox($id, $entry, 1, $val ));
	}
}
$d->close();
sort($plugins_available);

$this->smarty->assign('plugins_help', $this->Lang('plugins_help'));
$this->smarty->assign('plugins_text', $this->Lang('plugins_text'));
$this->smarty->assign('plugins_list', $plugins_available );
$this->smarty->assign('submit', $this->CreateInputSubmit($id, "submit", $this->Lang("saveplugins")));
$this->smarty->assign('reset', $this->CreateInputSubmit($id, "reset", $this->Lang("reset"),"","",$this->Lang("confirmreset")));
$this->smarty->assign('resetall', $this->CreateInputSubmit($id, "resetall", $this->Lang("resetall"),"","",$this->Lang("confirmresetall")));

echo $this->ProcessTemplate('pluginspanel.tpl');


?>
