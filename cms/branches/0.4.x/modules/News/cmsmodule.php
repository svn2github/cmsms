<?php

//Set the module name -- should be the name of the class
define("MODULE_NAME", "News");

//Define module variables
$cmsmodules[MODULE_NAME]['Author'] = "Ted Kulp <tedkulp@users.sf.net>";
$cmsmodules[MODULE_NAME]['Version'] = "1.0";

class News extends cmsmodule {

	function install($cms) {
		//This function should install the database functions and do other basic init stuff for first time use.
		$db = NewDataDictionary($cms->db);
		$flds = "
			news_id I KEY,
			news_title C(255),
			news_data X,
			create_date T,
			modified_date T
		";
		$taboptarray = array('mysql' => 'TYPE=MyISAM');
		$sqlarray = $db->CreateTableSQL($cms->config->db_prefix."module_news", $flds, $taboptarray);
		$dict->ExecuteSQLArray($sqlarray);
	}

	function uninstall($cms) {
		//This function should uninstall database tables and generally cleanup.
		$db = NewDataDictionary($cms->db);
		$sqlarray = $db->DropTableSQL($cms->config->db_prefix."module_news");
		$dict->ExecuteSQLArray($sqlarray);
	}

	function execute($cms, $id) {
		//This is the entryway into the module.  All requests from CMS will come through here.
		echo "<p>Hello from the News module!</p>";
	}

}

$cmsmodules[MODULE_NAME]['Instance'] = new News;

?>
