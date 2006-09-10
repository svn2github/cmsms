<?php
if (!isset($gCms)) exit;

$db =& $this->GetDb();
$dict = NewDataDictionary($db);

$sqlarray = $dict->DropTableSQL(cms_db_prefix().'module_search_index');
$dict->ExecuteSQLArray($sqlarray);

$this->RemovePreference('stopwords');
$this->RemovePreference('usestemming');
$this->RemovePreference('searchtext');
	
$this->RemoveEvent('SearchInitiated');
$this->RemoveEvent('SearchCompleted');
$this->RemoveEvent('SearchItemAdded');
$this->RemoveEvent('SearchItemDeleted');
$this->RemoveEvent('SearchAllItemsDeleted');

?>