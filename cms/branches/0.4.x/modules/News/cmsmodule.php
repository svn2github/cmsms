<?php

//Set the module name -- should be the name of the class
define("MODULE_NAME", "News");

//Define module variables
$cmsmodules[MODULE_NAME]['Author'] = "Ted Kulp <tedkulp@users.sf.net>";
$cmsmodules[MODULE_NAME]['Version'] = "1.0";
$cmsmodules[MODULE_NAME]['ContentModule'] = "1";
$cmsmodules[MODULE_NAME]['PluginModule'] = "1";

class News extends cmsmodule {

	function install($cms) {
		//This function should install the database functions and do other basic init stuff for first time use.
		$db = $cms->db;
		$dict = NewDataDictionary($cms->db);
		$flds = "
			news_id I KEY,
			news_title C(255),
			news_data X,
			news_date T,
			create_date T,
			modified_date T
		";
		$taboptarray = array('mysql' => 'TYPE=MyISAM');
		$sqlarray = $dict->CreateTableSQL($cms->config->db_prefix."module_news", $flds, $taboptarray);
		$dict->ExecuteSQLArray($sqlarray);

		$db->CreateSequence($cms->config->db_prefix."module_news_seq");

		create_permission($cms, 'Modify News', 'Modify News');

		#Throw in a test for now
		$new_id = $db->GenID($cms->config->db_prefix."module_news_seq");
		$query = "INSERT INTO ".$cms->config->db_prefix."module_news (news_id, news_title, news_data, news_date, create_date, modified_date) VALUES ($new_id, 'News Module Installed', 'The news module was installed.  Exciting.', ".$db->DBTimeStamp(time()).", ".$db->DBTimeStamp(time()).", ".$db->DBTimeStamp(time()).")";
		$result = $db->Execute($query);
	}

	function uninstall($cms) {
		//This function should uninstall database tables and generally cleanup.
		$db = $cms->db;
		$dict = NewDataDictionary($cms->db);
		$sqlarray = $dict->DropTableSQL($cms->config->db_prefix."module_news");
		$dict->ExecuteSQLArray($sqlarray);

		$db->DropSequence($cms->config->db_prefix."module_news_seq");

		remove_permission($cms, 'Modify News');
	}

	function execute($cms, $id, $params) {
		//This is the entryway into the module.  All requests from CMS will come through here.
		$db = $cms->db;
		$query = "SELECT news_id, news_title, news_data, news_date FROM ".$cms->config->db_prefix."module_news ORDER BY news_date desc";
		$dbresult = $db->Execute($query);
		if ($dbresult && $dbresult->RowCount()) {
			while ($row = $dbresult->FetchRow()) {
				echo "<div class=\"module_news\">";
				echo date("F j, Y, g:i a", $db->UnixDate($row['news_date']))."<br />";
				echo $row["news_title"]."<br />";
				echo $row["news_data"];
				echo "</div>";
			}
		}
	}

	function executeadmin($cms,$id) {
		$db = $cms->db;
		$query = "SELECT news_id, news_title, news_data, news_date FROM ".$cms->config->db_prefix."module_news ORDER BY news_date desc";
		$dbresult = $db->Execute($query);
		if ($dbresult && $dbresult->RowCount()) {
			echo "<table cellspacing=\"0\" class=\"admintable\">\n";
			echo "<tr>\n";
			echo "<td>Title</td>\n";
			echo "<td width=\"20%\">Posting Date</td>\n";
			echo "<td width=\"10%\">&nbsp;</td>\n";
			echo "<td width=\"10%\">&nbsp;</td>\n";
			echo "</tr>\n";
			$rowclass="row1";
			while ($row = $dbresult->FetchRow()) {
				echo "<tr class=\"$rowclass\">\n";
				echo "<td>".$row["news_title"]."</td>\n";
				echo "<td>".$row["news_date"]."</td>\n";
				echo "<td>".create_module_admin_link("News",$id,array("action"=>"edit"),"Edit")."</td>\n";
				echo "<td>".create_module_admin_link("News",$id,array("action"=>"delete"),"Delete")."</td>\n";
				echo "</tr>\n";
				($rowclass=="row1"?$rowclass="row2":$rowclass="row1");
			}
			echo "</table>\n";
		}
	}
}

$cmsmodules[MODULE_NAME]['Instance'] = new News;

?>
