<?php

echo "<p>Adding content table...";

$dbdict = NewDataDictionary($db);
$flds = "
	content_id I,
	content_name C(255),
	type C(25),
	owner_id I,
	parent_id I,
	item_order I,
	hierarchy C(255),
	create_date T,
	modified_date T
";
$taboptarray = array('mysql' => 'TYPE=MyISAM');
$sqlarray = $dbdict->CreateTableSQL($db_prefix."content", $flds, $taboptarray);
$dbdict->ExecuteSQLArray($sqlarray);

$db->CreateSequence($db_prefix."content_seq");

echo "[done]</p>";

echo "<p>Updating schema version... ";

$query = "UPDATE ".cms_db_prefix()."version SET version = 9";
$db->Execute($query);

echo "[done]</p>";

# vim:ts=4 sw=4 noet
?>
