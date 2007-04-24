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
			echo $this->ShowErrors($this->Lang('needpermission', array('Modify News')));
			return;
		}

		$articleid = '';
		if (isset($params['articleid']))
		{
			$articleid = $params['articleid'];
		}

		//Now remove the article
		$query = "DELETE FROM ".cms_db_prefix()."module_news WHERE news_id = ?";
		$db->Execute($query, array($articleid));

		//And remove it from any categories
		// FIXME: this query seems to be a leftover from the (good?) old days
//		$query = "DELETE FROM module_news_article_categories WHERE news_id = ?";
//		$db->Execute($query, array($articleid));
		
		//Update search index
		$module =& $this->GetModuleInstance('Search');
		if ($module != FALSE)
		{
			$module->DeleteWords($this->GetName(), $articleid, 'article');
		}
		
		@$this->SendEvent('NewsArticleDeleted', array('news_id' => $articleid));

		$params = array('tab_message'=> 'articledeleted', 'active_tab' => 'articles');
		$this->Redirect($id, 'defaultadmin', $returnid, $params);
?>
