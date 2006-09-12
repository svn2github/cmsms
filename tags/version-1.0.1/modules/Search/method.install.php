<?php
if (!isset($gCms)) exit;

$db =& $this->GetDb();

$db_prefix = cms_db_prefix();
$dict = NewDataDictionary($db);
$flds= "
		module_name C(100),
		content_id I,
		extra_attr C(100),
		word C(255),
		count I
	";

$taboptarray = array('mysql' => 'TYPE=MyISAM');
$sqlarray = $dict->CreateTableSQL(cms_db_prefix().'module_search_index', $flds, $taboptarray);
$dict->ExecuteSQLArray($sqlarray);
	
$sqlarray = $dict->CreateIndexSQL('module_name', $db_prefix."module_search_index", 'module_name');
$dict->ExecuteSQLArray($sqlarray);
	
$sqlarray = $dict->CreateIndexSQL('content_id', $db_prefix."module_search_index", 'content_id');
$dict->ExecuteSQLArray($sqlarray);
	
$sqlarray = $dict->CreateIndexSQL('extra_attr', $db_prefix."module_search_index", 'extra_attr');
$dict->ExecuteSQLArray($sqlarray);
	
$sqlarray = $dict->CreateIndexSQL('count', $db_prefix."module_search_index", 'count');
$dict->ExecuteSQLArray($sqlarray);
	
$this->SetPreference('stopwords', $this->DefaultStopWords());
$this->SetPreference('usestemming', 'false');
$this->SetPreference('searchtext','Enter Search...');
	
$this->SetTemplate('displaysearch', $this->GetSearchHtmlTemplate());
$this->SetTemplate('displayresult', $this->GetResultsHtmlTemplate());
	
$this->CreateEvent('SearchInitiated');
$this->CreateEvent('SearchCompleted');
$this->CreateEvent('SearchItemAdded');
$this->CreateEvent('SearchItemDeleted');
$this->CreateEvent('SearchAllItemsDeleted');
	
$this->RegisterEvents();

$this->Reindex();

?>