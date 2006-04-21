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

				if (isset($params['cancel']))
				{
					$this->Redirect($id, 'defaultadmin', $returnid);
				}

				$catid = '';
				if (isset($params['catid']))
				{
					$catid = $params['catid'];
				}

				$parentid = '-1';
				if (isset($params['parent']))
				{
					$parentid = $params['parent'];
				}

				$name = '';
				if (isset($params['name']))
				{
					$name = $params['name'];
					if ($name != '')
					{
						$query = 'UPDATE '.cms_db_prefix().'module_news_categories SET news_category_name = ?, parent_id = ?, modified_date = ? WHERE news_category_id = ?';
						$db->Execute($query, array($name, $parentid, $db->DBTimeStamp(time()), $catid));
						$this->UpdateHierarchyPositions();
						$this->Redirect($id, 'defaultadmin', $returnid);
					}
					else
					{
						//Handle error
					}
				}
				else
				{
					$query = 'SELECT * FROM '.cms_db_prefix().'module_news_categories WHERE news_category_id = ?';
					$dbresult = $db->Execute($query, array($catid));

					while (($row = $dbresult->FetchRow()))
					{
						$name = $row['news_category_name'];
						$parentid = $row['parent_id'];
					}
				}

				#Display template
				$this->smarty->assign('startform', $this->CreateFormStart($id, 'editcategory', $returnid));
				$this->smarty->assign('endform', $this->CreateFormEnd());
				$this->smarty->assign('nametext', $this->Lang('name'));
				$this->smarty->assign('inputname', $this->CreateInputText($id, 'name', $name, 20, 255));
				$this->smarty->assign('parentdropdown', $this->CreateParentDropdown($id, $catid, $parentid));
				$this->smarty->assign('hidden', $this->CreateInputHidden($id, 'catid', $catid));
				$this->smarty->assign('submit', $this->CreateInputSubmit($id, 'submit', lang('submit')));
				$this->smarty->assign('cancel', $this->CreateInputSubmit($id, 'cancel', lang('cancel')));
				$this->smarty->assign('parenttext', lang('parent'));
				echo $this->ProcessTemplate('editcategory.tpl');
?>
