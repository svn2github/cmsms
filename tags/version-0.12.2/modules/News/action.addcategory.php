<?php
if (!isset($gCms)) exit;

		global $gCms;
		$db =& $gCms->GetDb();

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

				$name = '';
				if (isset($params['name']))
				{
					$name = $params['name'];
					if ($name != '')
					{
						$catid = $db->GenID(cms_db_prefix()."module_news_categories_seq");
						$query = 'INSERT INTO '.cms_db_prefix().'module_news_categories (news_category_id, news_category_name, parent_id, create_date, modified_date) VALUES (?,?,?,?,?)';
						$db->Execute($query, array($catid, $name, $params['parent'], $db->DBTimeStamp(time()), $db->DBTimeStamp(time())));
						$this->UpdateHierarchyPositions();
						$this->Redirect($id, 'defaultadmin', $returnid);
					}
					else
					{
						//Handle error
					}
				}

				#Display template
				$this->smarty->assign('startform', $this->CreateFormStart($id, 'addcategory', $returnid));
				$this->smarty->assign('endform', $this->CreateFormEnd());
				$this->smarty->assign('nametext', $this->Lang('name'));
				$this->smarty->assign('inputname', $this->CreateInputText($id, 'name', $name, 20, 255));
				$this->smarty->assign('parentdropdown', $this->CreateParentDropdown($id, -1, -1));
				$this->smarty->assign('hidden', '');
				$this->smarty->assign('submit', $this->CreateInputSubmit($id, 'submit', lang('submit')));
				$this->smarty->assign('cancel', $this->CreateInputSubmit($id, 'cancel', lang('cancel')));
				$this->smarty->assign('parenttext', lang('parent'));
				echo $this->ProcessTemplate('editcategory.tpl');
?>
