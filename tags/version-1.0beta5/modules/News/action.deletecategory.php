<?php
	if (!isset($gCms)) exit;

	$detailpage = '';
	if (isset($params['detailpage']))
	{
		$manager =& $gCms->GetHierarchyManager();
		$node =& $manager->sureGetNodeByAlias($params['detailpage']);
		if (isset($node))
		{
			$content =& $node->GetContent();
			if (isset($content))
			{
				$detailpage = $content->Id();
			}
		}
		else
		{
			$node =& $manager->sureGetNodeById($params['detailpage']);
			if (isset($node))
			{
				$detailpage = $params['detailpage'];
			}
		}
	}

	if (!$this->CheckPermission('Modify News'))
	{
		echo '<p class="error">'.$this->Lang('needpermission', array('Modify News')).'</p>';
		return;
	}

	$catid = '';
	if (isset($params['catid']))
	{
		$catid = $params['catid'];
	}

// Get the category details
$query = 'SELECT * FROM '.cms_db_prefix().'module_news_categories
           WHERE news_category_id = ?';
$row = $db->GetRow( $query, array( $catid ) );

	//Reset all categories using this parent to have no parent (-1)
	$query = 'UPDATE '.cms_db_prefix().'module_news_categories SET parent_id=?, modified_date='.$db->DBTimeStamp(time()).' WHERE parent_id=?';
	$db->Execute($query, array(-1, $catid));

	//Now remove the category
	$query = "DELETE FROM ".cms_db_prefix()."module_news_categories WHERE news_category_id = ?";
	$db->Execute($query, array($catid));

	//And remove it from any articles
	$query = "DELETE FROM module_news_article_categories WHERE news_category_id = ?";
	$db->Execute($query, array($catid));
	
@$this->SendEvent('NewsCategoryDeleted', array('category_id' => $catid, 'name' => $row['news_category_name']));

	$this->UpdateHierarchyPositions();
	$this->Redirect($id, 'defaultadmin', $returnid);
?>
