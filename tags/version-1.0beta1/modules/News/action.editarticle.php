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

				if (isset($params['cancel']))
				{
					$this->Redirect($id, 'defaultadmin', $returnid);
				}

				$articleid = '';
				if (isset($params['articleid']))
				{
					$articleid = $params['articleid'];
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

				$status = 'draft';
				if (isset($params['status']))
				{
					$status = $params['status'];
				}

				$usedcategory = '';
				if (isset($params['category']))
				{
					$usedcategory = $params['category'];
				}
				
				$author_id = '-1';
				if (isset($params['author_id']))
				{
					$author_id = $params['author_id'];
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
							$query = 'UPDATE '.cms_db_prefix().'module_news SET news_title=?, news_data=?, summary=?, status=?, news_date=?, news_category_id=?, start_time=?, end_time=?, modified_date=? WHERE news_id = ?';
							if ($useexp == 1)
							{
								$db->Execute($query, array($title, $content, $summary, $status, trim($db->DBTimeStamp($postdate), "'"), $usedcategory, trim($db->DBTimeStamp($startdate), "'"), trim($db->DBTimeStamp($enddate), "'"), trim($db->DBTimeStamp(time()), "'"), $articleid));
							}
							else
							{					
							  $db->Execute($query, 
								       array($title, $content, 
									     $summary, $status, 
									     trim($db->DBTimeStamp($postdate), "'"),
									     $usedcategory,
									     trim($db->DBTimeStamp($startdate), "'"), 
									     NULL, 
									     trim($db->DBTimeStamp(time()), "'"), 
									     $articleid)
								       );
							}
							
							//Update search index
							$module =& $this->GetModuleInstance('Search');
							if ($module != FALSE)
							{
								$module->AddWords($this->GetName(), $articleid, 'article', $content . ' ' . $summary . ' ' . $title . ' ' . $title);
							}
							
							@$this->SendEvent('NewsArticleEdited', array('news_id' => $articleid, 'category_id' => $usedcategory, 'title' => $title, 'content' => $content, 'summary' => $summary, 'status' => $status, 'start_time' => $startdate, 'end_time' => $enddate));

							$this->Redirect($id, 'defaultadmin', $returnid);
						}
						else
						{
							echo '<p class="error">'.$this->Lang('nocontentgiven').'</p>';
						}
					}
					else
					{
						echo '<p class="error">'.$this->Lang('notitlegiven').'</p>';
					}
				}
				else
				{
					$query = 'SELECT * FROM '.cms_db_prefix().'module_news WHERE news_id = ?';
					$row = $db->GetRow($query, array($articleid));

					if ($row)
					{
						$title = $row['news_title'];
						$content = $row['news_data'];
						$summary = $row['summary'];
						$status = $row['status'];
						$usedcategory = $row['news_category_id'];
						$postdate = $db->UnixTimeStamp($row['news_date']);
						$startdate = $db->UnixTimeStamp($row['start_time']);
						$author_id = $row['author_id'];
						if (isset($row['end_time']))
						{
							$useexp = 1;
							$enddate = $db->UnixTimeStamp($row['end_time']);
						}
						else
						{
							$useexp = 0;
						}
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
				$this->smarty->assign('startform', $this->CreateFormStart($id, 'editarticle', $returnid));
				$this->smarty->assign('endform', $this->CreateFormEnd());

				$theuser = UserOperations::LoadUserById( $author_id );
				$this->smarty->assign('authortext', $this->Lang('author'));
				$this->smarty->assign('inputauthor', $theuser->username );

				$this->smarty->assign('titletext', $this->Lang('title'));
				$this->smarty->assign('inputtitle', $this->CreateInputText($id, 'title', $title, 30, 255));
				$this->smarty->assign('inputcontent', $this->CreateTextArea(true, $id, $content, 'content'));
				$this->smarty->assign('inputsummary', $this->CreateTextArea(true, $id, $summary, 'summary', '', '', '', '', '80', '3'));
				$this->smarty->assign('inputexp', $this->CreateInputCheckbox($id, 'useexp', '1', $useexp, 'class="pagecheckbox"'));
				$this->smarty->assign_by_ref('postdate', $postdate);
				$this->smarty->assign('postdateprefix', $id.'postdate_');
				$this->smarty->assign_by_ref('startdate', $startdate);
				$this->smarty->assign('startdateprefix', $id.'startdate_');
				$this->smarty->assign_by_ref('enddate', $enddate);
				$this->smarty->assign('enddateprefix', $id.'enddate_');
				$this->smarty->assign('status', $this->CreateInputDropdown($id, 'status', $statusdropdown, -1, $status));
				$this->smarty->assign('inputcategory', $this->CreateInputDropdown($id, 'category', $categorylist, -1, $usedcategory));
				$this->smarty->assign('hidden', $this->CreateInputHidden($id, 'articleid', $articleid).$this->CreateInputHidden($id, 'author_id', $author_id));
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
