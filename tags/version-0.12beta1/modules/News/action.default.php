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

		if (isset($params["makerssbutton"]))
		{
			$params = array("showtemplate"=>"false");
			echo $this->CreateLink($id, 'rss', $returnid, "<img border=\"0\" src=\"images/cms/xml_rss.gif\" alt=\"RSS Newsfeed\" />", $params,'',false,false,'',true);
			return;
		}

		$entryarray = array();
		$query = '';

		if (isset($params["category"]) && $params["category"] != '')
		{
			$categories = explode(',', $params['category']);
			$query = "SELECT mn.*, mnc.news_category_name FROM " . cms_db_prefix() . "module_news mn LEFT OUTER JOIN " . cms_db_prefix() . "module_news_categories mnc ON mnc.news_category_id = mn.news_category_id WHERE status = 'published' AND (";
			$count = 0;
			foreach ($categories as $onecat)
			{
				if ($count > 0)
				{
					$query .= ' OR ';
				}
				$query .= "upper(mnc.long_name) like upper('" . trim(str_replace('*', '%', $onecat)) . "')";
				$count++;
			}
			$query .= ") AND ";
//((" . $db->IfNull('start_time', "'1/1/1900'") . " = '1/1/1900' AND " . $db->IfNull('end_time', "'1/1/1900'") . " = '1/1/1900') OR (start_time < '" . $db->DBTimeStamp(time()) . "'" . " AND end_time > '" . $db->DBTimeStamp(time())."')) ";
		}
		else
		{
			$query = "SELECT mn.*, mnc.news_category_name FROM " . cms_db_prefix() . "module_news mn LEFT OUTER JOIN " . cms_db_prefix() . "module_news_categories mnc ON mnc.news_category_id = mn.news_category_id WHERE status = 'published' AND ";
//((" . $db->IfNull('start_time', "'1/1/1900'") . " = '1/1/1900' AND " . $db->IfNull('end_time', "'1/1/1900'") . " = '1/1/1900') OR (start_time < '" . $db->DBTimeStamp(time()) . "'" . " AND end_time > '" . $db->DBTimeStamp(time())."')) ";
		}

		$query .= "(".$db->IfNull('start_time',"'".$db->DBTimeStamp(1)."'")." < '".$db->DBTimeStamp(time())."') ";
		$query .= " AND ((".$db->IfNull('end_time',"'".$db->DBTimeStamp(1)."'")." = '".$db->DBTimeStamp(1)."') OR (end_time > '".$db->DBTimeStamp(time())."')) ";

		if (isset($params["sortby"])) 
						{ 
						  $query .= "ORDER BY '" . $params['sortby'] . "' "; 
						} 
						else 
						{ 
						  $query .= "ORDER BY news_date "; 
						} 

		if (isset($params["sortasc"]) && ($params['sortasc'] == 1 || $params['sortasc'] == 'true' || $params['sortasc'] == 'True')) 
		{ 
			$query .= "asc"; 
		} 
		else 
		{ 
			$query .= "desc"; 
		}
		
		$dbresult = '';
		$number = -1;
		if( isset( $params['number'] ) )
		{
		  $number = $params['number'];
		}

		$start = -1;
		if( isset( $params['start'] ) )
		{
		  $start = $params['start'];
		}

		if( $start >= 0 || $number >= 0 )
		{
			$dbresult = $db->SelectLimit($query, $number, $start);
		}
		else
		{
			$dbresult = $db->Execute($query);
		}

		while ($row = $dbresult->FetchRow())
		{
			$onerow = new stdClass();

			$theuser = UserOperations::LoadUserById( $row['author_id'] );
			$onerow->author_id = $row['author_id'];
			$onerow->author = $theuser->username;
			$onerow->id = $row['news_id'];
			$onerow->title = $row['news_title'];
			$onerow->content = $row['news_data'];
			$onerow->summary = (trim($row['summary'])!='<br/>'?$row['summary']:'');
			$onerow->postdate = $row['news_date'];
			$onerow->formatpostdate = strftime((isset($params['dateformat']) && $params['dateformat'] != ''?$params['dateformat']:'%x'), $db->UnixTimeStamp($row['news_date']));
			$onerow->startdate = $row['start_time'];
			$onerow->enddate = $row['end_time'];
			$onerow->category = $row['news_category_name'];

			$moretext = isset($params['moretext'])?$params['moretext']:$this->Lang('more');
			$sendtodetail = array('articleid'=>$row['news_id']);
			if (isset($params['detailpage']))
			{
				$sendtodetail['origid'] = $returnid;
			}
			if (isset($params['detailtemplate']))
			{
				$sendtodetail['detailtemplate'] = $params['detailtemplate'];
			}
			if (isset($params['dateformat']))
			{
				$sendtodetail['dateformat'] = $params['dateformat'];
			}

			$onerow->link = $this->CreateLink($id, 'detail', $detailpage!=''?$detailpage:$returnid, '', $sendtodetail,'', true, false,'',true);
			$onerow->titlelink = $this->CreateLink($id, 'detail', $detailpage!=''?$detailpage:$returnid, $row['news_title'], $sendtodetail,'',false,false,'',true);
			$onerow->morelink = $this->CreateLink($id, 'detail', $detailpage!=''?$detailpage:$returnid, $moretext, $sendtodetail,'',false,false,'',true);
			$sendtoprint = array('articleid'=>$row['news_id'],'showtemplate'=>'false');
			if (isset($params['lang']))
			{
				$sendtodetail['lang'] = $params['lang'];
				$sendtoprint['lang'] = $params['lang'];
			}
			$onerow->printlink = $this->CreateLink($id, 'print', $returnid, $this->Lang('print'), $sendtoprint);

			array_push($entryarray, $onerow);
		}

		$this->smarty->assign_by_ref('items', $entryarray);

		#Display template
		echo "<!-- Displaying News Module -->\n";

		if (isset($params['summarytemplate']))
		{
			echo $this->ProcessTemplate($params['summarytemplate']);
		}
		else
		{
			echo $this->ProcessTemplateFromDatabase('displaysummary');
		}

# vim:ts=4 sw=4 noet
?>
