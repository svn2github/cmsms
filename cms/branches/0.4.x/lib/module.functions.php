<?php

class cmsmodule {

	function install() {
		//This function should install the database functions and do other basic init stuff for first time use.
	}

	function uninstall() {
		//This function should uninstall database tables and generally cleanup.
	}

	function execute() {
		//This is the entryway into the module.  All requests from CMS will come through here.
		die("cmsmodule::execute() not implemented!");
	}

}

function load_modules() {
	global $cmsmodules;
	$dir = dirname(dirname(__FILE__))."/modules";
	$ls = dir($dir);
	while (($file = $ls->read()) != "") {
		if (is_dir("$dir/$file") && (strpos($file, ".") === false || strpos($file, ".") != 0)) {
			if (is_file("$dir/$file/cmsmodule.php")) {
				include_once("$dir/$file/cmsmodule.php");
			}
		}
	}
}

?>
