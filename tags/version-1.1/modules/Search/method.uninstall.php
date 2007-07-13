<?php
if (!isset($gCms)) exit;

$db =& $this->GetDb();
$dict = NewDataDictionary($db);

$sqlarray = $dict->DropTableSQL(cms_db_prefix().'module_search_index');
$dict->ExecuteSQLArray($sqlarray);

$sqlarray = $dict->DropTableSQL(cms_db_prefix().'module_search_items');
$dict->ExecuteSQLArray($sqlarray);

$db->DropSequence( cms_db_prefix()."module_search_items_seq" );

$this->RemovePreference('stopwords');
$this->RemovePreference('usestemming');
$this->RemovePreference('searchtext');
	
$this->RemoveEvent('SearchInitiated');
$this->RemoveEvent('SearchCompleted');
$this->RemoveEvent('SearchItemAdded');
$this->RemoveEvent('SearchItemDeleted');
$this->RemoveEvent('SearchAllItemsDeleted');

?>