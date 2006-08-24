<?php
if (!isset($gCms)) exit;

if ($oldversion == '1.0')
{
	$this->CreateEvent('SearchInitiated');
	$this->CreateEvent('SearchCompleted');
	$this->CreateEvent('SearchItemAdded');
	$this->CreateEvent('SearchItemDeleted');
	$this->CreateEvent('SearchAllItemsDeleted');

	$this->RegisterEvents();

	$oldversion = '1.0.1';
}

if ($oldversion = '1.0.1')
{
	$this->SetTemplate('displaysearch', $this->GetSearchHtmlTemplate());
	$this->SetTemplate('displayresult', $this->GetResultsHtmlTemplate());

	$oldversion = '1.0.2';
}

if ($oldversion = '1.0.2')
{
	$this->AddEventHandler('Core','ModuleUninstalled',false);
	$this->SetPreference('searchtext','Enter Search...');
	$oldversion = '1.0.3';
}

$this->Reindex();

?>