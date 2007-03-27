<?php
if (!isset($gCms)) exit;

$current_version = $oldversion;
$db =& $this->GetDb();

switch($current_version)
{
	case "1.0":
		$dict = NewDataDictionary($db);
		$sqlarray = $dict->AddColumnSQL(cms_db_prefix()."module_news", "start_time " . CMS_ADODB_DT . ", end_time " . CMS_ADODB_DT . ", icon C(255)");
		$dict->ExecuteSQLArray($sqlarray);
		$current_version = "1.1";
	case "1.1":
	case "1.2":
	case "1.3":
	case "1.4":
	case "1.5":
		$dict = NewDataDictionary($db);
		$sqlarray = $dict->AddColumnSQL(cms_db_prefix()."module_news", "news_cat C(255)");
		$dict->ExecuteSQLArray($sqlarray);
		$current_version = "1.6";
	case "1.6":
		$this->SetTemplate('displaysummary', $this->GetSummaryHtmlTemplate());
		$this->SetTemplate('displaydetail', $this->GetDetailHtmlTemplate());

		$current_version = "1.7";
	case '1.7':
		#Makey new tables....

		$dict = NewDataDictionary($db);
		$sqlarray = $dict->AddColumnSQL(cms_db_prefix()."module_news", "status C(25)");
		$dict->ExecuteSQLArray($sqlarray);

		$sqlarray = $dict->AddColumnSQL(cms_db_prefix()."module_news", "summary X");
		$dict->ExecuteSQLArray($sqlarray);

		$sqlarray = $dict->AddColumnSQL(cms_db_prefix()."module_news", "news_category_id I");
		$dict->ExecuteSQLArray($sqlarray);

		$query = "UPDATE ".cms_db_prefix()."module_news SET summary = ?, status = ?";
		$db->Execute($query, array('', 'published'));

		$flds = "
			news_category_id I KEY,
			news_category_name C(255),
			parent_id I,
			hierarchy C(255),
			long_name X,
			create_date " . CMS_ADODB_DT . ",
			modified_date " . CMS_ADODB_DT
		;
		$dict = NewDataDictionary($db);

		$taboptarray = array('mysql' => 'TYPE=MyISAM');
		$sqlarray = $dict->CreateTableSQL(cms_db_prefix()."module_news_categories", 
				$flds, $taboptarray);
		$dict->ExecuteSQLArray($sqlarray);

		$db->CreateSequence(cms_db_prefix()."module_news_categories_seq");

		$query = "SELECT DISTINCT news_cat FROM ".cms_db_prefix()."module_news WHERE news_cat IS NOT NULL";
		$dbresult = $db->Execute($query);
		while ($dbresult && $row = $dbresult->FetchRow())
		{
			$catid = $db->GenID(cms_db_prefix()."module_news_categories_seq");
			$query = "INSERT INTO ".cms_db_prefix()."module_news_categories (news_category_id, news_category_name, parent_id, hierarchy, long_name, create_date, modified_date) VALUES (?,?,?,?,?,".$db->DBTimeStamp(time()).",".$db->DBTimeStamp(time()).")";
			$db->Execute($query,array($catid, $row['news_cat'], -1, '', ''));

			$query = "UPDATE ".cms_db_prefix()."module_news SET news_category_id = ? WHERE news_cat = ?";
			$db->Execute($query, array($catid, $row['news_cat']));
		}

		# Setup summary template
		$this->SetTemplate('displaysummary', $this->GetSummaryHtmlTemplate());

		# Setup detail template
		$this->SetTemplate('displaydetail', $this->GetDetailHtmlTemplate());

		$this->UpdateHierarchyPositions();

		$current_version = "2.0";

	case '2.0':
	case '2.0.1':
	case '2.0.2':
		$dict = NewDataDictionary($db);
		$sqlarray = $dict->AddColumnSQL(cms_db_prefix()."module_news", "author_id I");
		$dict->ExecuteSQLArray($sqlarray);
		$current_version = "2.0.3";
	case '2.0.3':
		#Setup events
		$this->CreateEvent('NewsArticleAdded');
		$this->CreateEvent('NewsArticleEdited');
		$this->CreateEvent('NewsArticleDeleted');
		$this->CreateEvent('NewsCategoryAdded');
		$this->CreateEvent('NewsCategoryEdited');
		$this->CreateEvent('NewsCategoryDeleted');
		$current_version = '2.1';
}

?>