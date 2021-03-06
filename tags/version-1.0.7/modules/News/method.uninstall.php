<?php
if (!isset($gCms)) exit;

$db =& $this->GetDb();

$this->DeleteTemplate('displaysummary');
$this->DeleteTemplate('displaydetail');

$dict = NewDataDictionary( $db );

$sqlarray = $dict->DropTableSQL( cms_db_prefix()."module_news" );
$dict->ExecuteSQLArray($sqlarray);

$sqlarray = $dict->DropTableSQL( cms_db_prefix()."module_news_categories" );
$dict->ExecuteSQLArray($sqlarray);

$db->DropSequence( cms_db_prefix()."module_news_seq" );
$db->DropSequence( cms_db_prefix()."module_news_categories_seq" );

$this->RemovePermission('Modify News');

#Setup events
$this->RemoveEvent('NewsArticleAdded');
$this->RemoveEvent('NewsArticleEdited');
$this->RemoveEvent('NewsArticleDeleted');
$this->RemoveEvent('NewsCategoryAdded');
$this->RemoveEvent('NewsCategoryEdited');
$this->RemoveEvent('NewsCategoryDeleted');

?>