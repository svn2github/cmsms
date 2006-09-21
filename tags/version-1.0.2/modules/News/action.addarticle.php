<?php
if (!isset($gCms)) exit;
	$detailpage = '';
/* This code seems like it was copied here from action.default.php Seems unneeded. Commenting out. - Elijah Lofgren
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
*/

	if (!$this->CheckPermission('Modify News'))
	{
		echo $this->ShowErrors($this->Lang('needpermission', array('Modify News')));
		return;
	}

	if (isset($params['cancel']))
	{
		$this->Redirect($id, 'defaultadmin', $returnid);
	}

	$content = '';
	if (isset($params['content']))
	{
		$content = $params['content'];
	}

	$summary = '';
	if (isset($params['summary']))
	{
		$summary = $params['summary'];
	}

	$status = 'published';
	if (isset($params['status']))
	{
		$status = $params['status'];
	}

	$usedcategory = '';
	if (isset($params['category']))
	{
		$usedcategory = $params['category'];
	}

	$postdate = time();
	if (isset($params['postdate_Month']))
	{
		$postdate = mktime($params['postdate_Hour'], $params['postdate_Minute'], $params['postdate_Second'], $params['postdate_Month'], $params['postdate_Day'], $params['postdate_Year']);
	}

	$useexp = 0;
	if (isset($params['useexp']))
	{
		$useexp = 1;
	}

	$userid = get_userid();
	
	$startdate = time();
	if (isset($params['startdate_Month']))
	{
		$startdate = mktime($params['startdate_Hour'], $params['startdate_Minute'], $params['startdate_Second'], $params['startdate_Month'], $params['startdate_Day'], $params['startdate_Year']);
	}
	$enddate = strtotime('+6 months', time());
	if (isset($params['enddate_Month']))
	{
		$enddate = mktime($params['enddate_Hour'], $params['enddate_Minute'], $params['enddate_Second'], $params['enddate_Month'], $params['enddate_Day'], $params['enddate_Year']);
	}

	$title = '';
	if (isset($params['title']))
	{
		$title = $params['title'];
		if ($title != '')
		{
			if ($content != '')
			{
				$articleid = $db->GenID(cms_db_prefix()."module_news_seq");
				$query = 'INSERT INTO '.cms_db_prefix().'module_news (news_id, news_category_id, news_title, news_data, summary, status, news_date, start_time, end_time, create_date, modified_date,author_id) VALUES (?,?,?,?,?,?,?,?,?,?,?,?)';
				if ($useexp == 1)
				{
					$db->Execute($query, array($articleid, $usedcategory, $title, $content, $summary, $status, trim($db->DBTimeStamp($postdate), "'"), trim($db->DBTimeStamp($startdate), "'"), trim($db->DBTimeStamp($enddate), "'"), trim($db->DBTimeStamp(time()), "'"), trim($db->DBTimeStamp(time()), "'"), $userid));
				}
				else
				{
					$db->Execute($query, array($articleid, $usedcategory, $title, $content, $summary, $status, trim($db->DBTimeStamp($postdate), "'"), trim($db->DBTimeStamp($startdate), "'"), NULL, trim($db->DBTimeStamp(time()), "'"), trim($db->DBTimeStamp(time()), "'"), $userid));
				}
				
				//Update search index
				$module =& $this->GetModuleInstance('Search');
				if ($module != FALSE)
				{
					$module->AddWords($this->GetName(), $articleid, 'article', $content . ' ' . $summary . ' ' . $title . ' ' . $title);
				}

				#foreach ($usedcategories as $onecategory)
				#{
				#	$query = 'INSERT INTO '.cms_db_prefix().'module_news_article_categories (news_category_id, news_id) VALUES (?,?)';
				#	$db->Execute($query, array($usedcategory, $articleid));
				#}

				@$this->SendEvent('NewsArticleAdded', array('news_id' => $articleid, 'category_id' => $usedcategory, 'title' => $title, 'content' => $content, 'summary' => $summary, 'status' => $status, 'start_time' => $startdate, 'end_time' => $enddate, 'useexp' => $useexp));

				$params = array('tab_message'=> 'articleadded', 'active_tab' => 'articles');
				$this->Redirect($id, 'defaultadmin', $returnid, $params);
			}
			else
			{
				echo $this->ShowErrors($this->Lang('nocontentgiven'));
			}
		}
		else
		{
			echo $this->ShowErrors($this->Lang('notitlegiven'));
		}
	}

	$statusdropdown = array();
	$statusdropdown['Draft'] = 'draft';
	$statusdropdown['Published'] = 'published';

	$categorylist = array();
	$query = "SELECT * FROM ".cms_db_prefix()."module_news_categories ORDER BY hierarchy";
	$dbresult = $db->Execute($query);

	while ($dbresult && $row = $dbresult->FetchRow())
	{
		$categorylist[$row['long_name']] = $row['news_category_id'];
	}

	#Display template
	$this->smarty->assign('startform', $this->CreateFormStart($id, 'addarticle', $returnid));
	$this->smarty->assign('endform', $this->CreateFormEnd());
	$this->smarty->assign('titletext', $this->Lang('title'));
	$this->smarty->assign('inputtitle', $this->CreateInputText($id, 'title', $title, 30, 255));
	$this->smarty->assign('inputcontent', $this->CreateTextArea(true, $id, $content, 'content'));
	$this->smarty->assign('inputsummary', $this->CreateTextArea(true, $id, $summary, 'summary', '', '', '', '', '80', '3'));
	$this->smarty->assign_by_ref('postdate', $postdate);
	$this->smarty->assign('postdateprefix', $id.'postdate_');
	$this->smarty->assign('inputexp', $this->CreateInputCheckbox($id, 'useexp', '1', $useexp, 'class="pagecheckbox"'));
	$this->smarty->assign_by_ref('startdate', $startdate);
	$this->smarty->assign('startdateprefix', $id.'startdate_');
	$this->smarty->assign_by_ref('enddate', $enddate);
	$this->smarty->assign('enddateprefix', $id.'enddate_');
	$this->smarty->assign('status', $this->CreateInputDropdown($id, 'status', $statusdropdown, -1, $status));
	$this->smarty->assign('inputcategory', $this->CreateInputDropdown($id, 'category', $categorylist, -1, $usedcategory));
	$this->smarty->assign('submit', $this->CreateInputSubmit($id, 'submit', lang('submit')));
	$this->smarty->assign('cancel', $this->CreateInputSubmit($id, 'cancel', lang('cancel')));

	$this->smarty->assign('titletext', $this->Lang('title'));
	$this->smarty->assign('categorytext', $this->Lang('category'));
	$this->smarty->assign('summarytext', $this->Lang('summary'));
	$this->smarty->assign('contenttext', $this->Lang('content'));
	$this->smarty->assign('postdatetext', $this->Lang('postdate'));
	$this->smarty->assign('statustext', lang('status'));
	$this->smarty->assign('useexpirationtext', $this->Lang('useexpiration'));
	$this->smarty->assign('startdatetext', $this->Lang('startdate'));
	$this->smarty->assign('enddatetext', $this->Lang('enddate'));

	echo $this->ProcessTemplate('editarticle.tpl');
?>
