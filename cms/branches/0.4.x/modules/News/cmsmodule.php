<?php

//Set the module name -- should be the name of the class
define("MODULE_NAME", "News");

//Define module variables
$cmsmodules[MODULE_NAME]['Author'] = "Ted Kulp <tedkulp@users.sf.net>";
$cmsmodules[MODULE_NAME]['Version'] = "1.0";

class News extends cmsmodule {

	function install() {
		//This function should install the database functions and do other basic init stuff for first time use.
	}

	function uninstall() {
		//This function should uninstall database tables and generally cleanup.
	}

	function execute() {
		//This is the entryway into the module.  All requests from CMS will come through here.
		echo "<p>Hello from the News module!</p>";
	}

}

$cmsmodules[MODULE_NAME]['Instance'] = new News;

?>
