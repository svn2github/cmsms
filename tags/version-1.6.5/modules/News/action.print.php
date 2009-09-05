<?php
		if (!isset($gCms)) exit;

		$query = "SELECT mn.*, mnc.news_category_name FROM ".cms_db_prefix()."module_news mn LEFT OUTER JOIN ".cms_db_prefix()."module_news_categories mnc ON mnc.news_category_id = mn.news_category_id WHERE status = 'published' AND news_id = ?";
		$row = $db->GetRow($query, array($params['articleid']));

		if ($row)
		{
			$onerow = new stdClass();

			$onerow->id = $row['news_id'];
			$onerow->title = $row['news_title'];
			$onerow->content = $row['news_data'];
			$onerow->summary = $row['summary'];
			$onerow->postdate = $row['news_date'];
			$onerow->startdate = $row['start_time'];
			$onerow->enddate = $row['end_time'];
			$onerow->category = $row['news_category_name'];

			$this->smarty->assign_by_ref('entry', $onerow);
		}

			//
			// Handle the custom fields
			//
			$query3 = 'SELECT A.value,B.id,B.name,B.type FROM '.cms_db_prefix().'module_news_fieldvals A, '.cms_db_prefix().'module_news_fielddefs B WHERE A.fielddef_id = B.id AND A.news_id = ? AND B.public = 1 ORDER BY B.item_order';
			$dbr3 = $db->Execute($query3,array($row['news_id']));
			$fields = array();
			$fieldsbyname = array();
			while( $dbr3 && ($row3 = $dbr3->FetchRow()) )
			  {
			    $alias = strtolower(str_replace(' ','_',$row3['name']));
			    $onerow->$alias = $row3['value'];
				
			    $obj = new StdClass();
			    foreach( $row3 as $k => $v )
			      {
				$obj->$k = $v;
			      }
			    $fields[] = $obj;
			    $fieldsbyname[$alias] = $obj;
			  }
			$onerow->fieldsbyname = $fieldsbyname;
			$onerow->fields = $fields;
			$onerow->file_location = $config['uploads_url'].'/news/id'.$row['news_id'];		
		
		echo $this->ProcessTemplate('articleprint.tpl');

# vim:ts=4 sw=4 noet
?>
