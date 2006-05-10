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

	#The tabs
	echo $this->StartTabHeaders();

	if( $this->CheckPermission( 'Modify News' ) )
	  {
		echo $this->SetTabHeader('articles',$this->Lang('articles'));
		echo $this->SetTabHeader('categories',$this->Lang('categories'));
	  }
					
					if( $this->CheckPermission( 'Modify Templates' ) )
	  {
		echo $this->SetTabHeader('summary_template',$this->Lang('summarytemplate'));
		echo $this->SetTabHeader('detail_template',$this->Lang('detailtemplate'));
	  }
					
					if( $this->CheckPermission( 'Modify Site Preferences' ) )
	  {
		echo $this->SetTabHeader('options',$this->Lang('options'));
	  }

	echo $this->EndTabHeaders();

	#The content of the tabs
	echo $this->StartTabContent();

	if( $this->CheckPermission( 'Modify News' ) )
	  {
		echo $this->StartTab("articles");

		echo $this->CreateFormStart($id, 'defaultadmin');

		$curcategory = (isset($params['curcategory'])?$params['curcategory']:'');
		$allcategories = (isset($params['allcategories'])?$params['allcategories']:'no');
		$newcategory = $curcategory;
	
		if (isset($params['submitcategory']))
		{
		   $newcategory = (isset($params['newcategory'])?$params['newcategory']:$newcategory);
		}
	
		$curcategory = $newcategory;

		$categorylist = array();
		$categorylist[$this->Lang('allcategories')] = '';
		$query = "SELECT * FROM ".cms_db_prefix()."module_news_categories ORDER BY hierarchy";
		$dbresult = $db->Execute($query);

		while ($row = $dbresult->FetchRow())
		{
		  $categorylist[$row['long_name']] = $row['long_name'];
		}

		echo '<br /><p>'.$this->Lang('category').': ' . $this->CreateInputDropdown($id, 'newcategory', $categorylist, -1, $newcategory) . ' ' . $this->Lang('showchildcategories') . ': ' . $this->CreateInputCheckbox($id, 'allcategories', 'yes', $allcategories) . ' ' . $this->CreateInputSubmit($id, 'submitcategory', $this->Lang('selectcategory')) . $this->CreateInputHidden($id, 'curcategory', $curcategory) . '</p>';

		echo $this->CreateFormEnd();

		//Load the current articles
		$entryarray = array();

		$query = '';
		$dbresult = '';

		if ($curcategory != '')
		{
		$query = "SELECT n.*, nc.long_name FROM ".cms_db_prefix()."module_news n LEFT OUTER JOIN ".cms_db_prefix()."module_news_categories nc ON n.news_category_id = nc.news_category_id WHERE nc.long_name LIKE ? ORDER by news_date DESC";
		if ($allcategories == 'yes')
		{
			$dbresult = $db->Execute($query,array($curcategory . '%'));
		}
		else
		{
			$dbresult = $db->Execute($query,array($curcategory));
		}
		}
		else
		{
		$query = "SELECT n.*, nc.long_name FROM ".cms_db_prefix()."module_news n LEFT OUTER JOIN ".cms_db_prefix()."module_news_categories nc ON n.news_category_id = nc.news_category_id ORDER by news_date DESC";
		$dbresult = $db->Execute($query);
		}

		$rowclass = 'row1';

		while ($row = $dbresult->FetchRow())
		{
		$onerow = new stdClass();

		$onerow->id = $row['news_id'];
		$onerow->title = $this->CreateLink($id, 'editarticle', $returnid, $row['news_title'], array('articleid'=>$row['news_id']));
		$onerow->data = $row['news_data'];
		$onerow->postdate = $row['news_date'];
		$onerow->startdate = $row['start_time'];
		$onerow->enddate = $row['end_time'];
		$onerow->category = $row['long_name'];
		$onerow->rowclass = $rowclass;

		$onerow->editlink = $this->CreateLink($id, 'editarticle', $returnid, $gCms->variables['admintheme']->DisplayImage('icons/system/edit.gif', $this->Lang('edit'),'','','systemicon'), array('articleid'=>$row['news_id']));
		$onerow->deletelink = $this->CreateLink($id, 'deletearticle', $returnid, $gCms->variables['admintheme']->DisplayImage('icons/system/delete.gif', $this->Lang('delete'),'','','systemicon'), array('articleid'=>$row['news_id']), $this->Lang('areyousure'));

		array_push($entryarray, $onerow);

		($rowclass=="row1"?$rowclass="row2":$rowclass="row1");
		}

		$this->smarty->assign_by_ref('items', $entryarray);
		$this->smarty->assign('itemcount', count($entryarray));

		$this->smarty->assign('addlink', $this->CreateLink($id, 'addarticle', $returnid, $gCms->variables['admintheme']->DisplayImage('icons/system/newobject.gif', $this->Lang('addarticle'),'','','systemicon'), array(), '', false, false, '') .' '. $this->CreateLink($id, 'addarticle', $returnid, $this->Lang('addarticle'), array(), '', false, false, 'class="pageoptions"'));

		$this->smarty->assign('titletext', $this->Lang('title'));
		$this->smarty->assign('postdatetext', $this->Lang('postdate'));
		$this->smarty->assign('categorytext', $this->Lang('category'));

		#Display template
		echo $this->ProcessTemplate('articlelist.tpl');

		echo $this->EndTab();

		echo $this->StartTab("categories");
	
		#Put together a list of current categories...
		$entryarray = array();

		$query = "SELECT * FROM ".cms_db_prefix()."module_news_categories ORDER BY hierarchy";
		$dbresult = $db->Execute($query);

		$rowclass = 'row1';

		while ($row = $dbresult->FetchRow())
		{
		$onerow = new stdClass();

		$depth = count(split('\.', $row['hierarchy']));

		$onerow->id = $row['news_category_id'];
		$onerow->name = str_repeat('&nbsp;', $depth-1).$this->CreateLink($id, 'editcategory', $returnid, $row['news_category_name'], array('catid'=>$row['news_category_id']));

		$onerow->editlink = $this->CreateLink($id, 'editcategory', $returnid, $gCms->variables['admintheme']->DisplayImage('icons/system/edit.gif', $this->Lang('edit'),'','','systemicon'), array('catid'=>$row['news_category_id']));
		$onerow->deletelink = $this->CreateLink($id, 'deletecategory', $returnid, $gCms->variables['admintheme']->DisplayImage('icons/system/delete.gif', $this->Lang('delete'),'','','systemicon'), array('catid'=>$row['news_category_id']), $this->Lang('areyousure'));

		$onerow->rowclass = $rowclass;

		array_push($entryarray, $onerow);

		($rowclass=="row1"?$rowclass="row2":$rowclass="row1");
		}

		$this->smarty->assign_by_ref('items', $entryarray);
		$this->smarty->assign('itemcount', count($entryarray));

		#Setup links
		$this->smarty->assign('addlink', $this->CreateLink($id, 'addcategory', $returnid, $this->Lang('addcategory'), array(), '', false, false, 'class="pageoptions"'));
		$this->smarty->assign('addlink', $this->CreateLink($id, 'addcategory', $returnid, $gCms->variables['admintheme']->DisplayImage('icons/system/newfolder.gif', $this->Lang('addcategory'),'','','systemicon'), array(), '', false, false, '') .' '. $this->CreateLink($id, 'addcategory', $returnid, $this->Lang('addcategory'), array(), '', false, false, 'class="pageoptions"'));

		$this->smarty->assign('categorytext', $this->Lang('category'));

		#Display template
		echo $this->ProcessTemplate('categorylist.tpl');

		echo $this->EndTab();
					}
					if( $this->CheckPermission( 'Modify Templates' ) )
					{
	  echo $this->StartTab('summary_template');
	
	  echo $this->CreateFormStart($id, 'updatesummarytemplate');

	  echo '<p>'.$this->CreateTextArea(false, $id, $this->GetTemplate('displaysummary'), 'templatecontent', 'pagebigtextarea').'</p>';

	  echo $this->CreateInputSubmit($id, 'submitbutton', $this->Lang('submit'));
	  echo $this->CreateInputSubmit($id, 'defaultsbutton', $this->Lang('sysdefaults'), '', '', $this->Lang('restoretodefaultsmsg'));

	  echo $this->CreateFormEnd();

	  echo $this->EndTab();

	  echo $this->StartTab('detail_template');
	
	  echo $this->CreateFormStart($id, 'updatedetailtemplate');

	  echo '<p>'.$this->CreateTextArea(false, $id, $this->GetTemplate('displaydetail'), 'templatecontent2', 'pagebigtextarea').'</p>';

	  echo $this->CreateInputSubmit($id, 'rsssubmitbutton', $this->Lang('submit'));
	  echo $this->CreateInputSubmit($id, 'defaultsbutton', $this->Lang('sysdefaults'), '', '', $this->Lang('restoretodefaultsmsg'));

	  echo $this->CreateFormEnd();

	  echo $this->EndTab();
					}
	
					if( $this->CheckPermission( 'Modify Site Preferences' ) )
					{
	  echo $this->StartTab('options');
	
	  echo $this->CreateFormStart($id, 'updateoptions');
	
	  echo '<p>' . $this->Lang('showautodiscovery') . ':' . $this->CreateInputCheckbox($id, 'showautodiscovery', 'yes', $this->GetPreference('showautodiscovery', 'yes')) . '</p>';

	  echo '<p>' . $this->Lang('autodiscoverylink') . ':' . $this->CreateInputText($id, 'autodiscoverylink', $this->GetPreference('autodiscoverylink', ''), '50', '255').'</p>';

	  echo $this->CreateInputSubmit($id, 'optionssubmitbutton', $this->Lang('submit'));

	  echo $this->CreateFormEnd();

	  echo $this->EndTab();
					}

	echo $this->EndTabContent();

# vim:ts=4 sw=4 noet
?>
