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
if (isset($params['browsecat']) && $params['browsecat']==1)
  {
    $params['detailpage'] = $detailpage;
    $this->DoAction('browsecat', $id, $params, $returnid);
    return;
  }

if (isset($params["makerssbutton"]))
  {
    $params["showtemplate"] = "false";
    echo $this->CreateLink($id, 'rss', $returnid, "<img border=\"0\" src=\"images/cms/xml_rss.gif\" alt=\"RSS Newsfeed\" />", $params,'',false,false,'',true,'news/rss');
    return;
  }

$entryarray = array();
$query1 = "
            SELECT 
                mn.*, 
                mnc.news_category_name, 
                mnc.long_name, 
                u.username, 
                u.first_name,
                u.last_name 
            FROM " . 
  cms_db_prefix() . "module_news mn
            LEFT OUTER JOIN " . cms_db_prefix() . "module_news_categories mnc 
            ON mnc.news_category_id = mn.news_category_id 
            LEFT OUTER JOIN " . cms_db_prefix() . "users u 
            ON u.user_id = mn.author_id 
            WHERE 
                status = 'published' 
            AND
        ";

$query2 = "
            SELECT count(mn.news_id) as count
            FROM " . 
  cms_db_prefix() . "module_news mn
            LEFT OUTER JOIN " . cms_db_prefix() . "module_news_categories mnc 
            ON mnc.news_category_id = mn.news_category_id 
            LEFT OUTER JOIN " . cms_db_prefix() . "users u 
            ON u.user_id = mn.author_id 
            WHERE 
                status = 'published' 
            AND
        ";

            

if (isset($params["category"]) && $params["category"] != '')
  {
    $categories = explode(',', $params['category']);
    $query1 .= "(";
    $query2 .= "(";
    $count = 0;
    foreach ($categories as $onecat)
      {
	if ($count > 0)
	  {
	    $query1 .= ' OR ';
	    $query2 .= ' OR ';
	  }
	if (strpos($onecat, '|') !== FALSE || strpos($onecat, '*') !== FALSE)
	  {
	    $query1 .= "upper(mnc.long_name) like upper('" . trim(str_replace('*', '%', str_replace("'",'_',$onecat))) . "')";
	    $query2 .= "upper(mnc.long_name) like upper('" . trim(str_replace('*', '%', str_replace("'",'_',$onecat))) . "')";
	  }
	else
	  {
	    $query1 .= "mnc.news_category_name = '" . trim(str_replace("'",'_',$onecat)) . "'";
	    $query2 .= "mnc.news_category_name = '" . trim(str_replace("'",'_',$onecat)) . "'";
	  }
	$count++;
      }
    $query1 .= ") AND ";
    $query2 .= ") AND ";
  }

$query1 .= "(".$db->IfNull('start_time',$db->DBTimeStamp(1))." < ".$db->DBTimeStamp(time()).") ";
$query2 .= "(".$db->IfNull('start_time',$db->DBTimeStamp(1))." < ".$db->DBTimeStamp(time()).") ";
if (isset($params['showarchive']) && $params['showarchive'] == true) {
  $query1 .= " AND (end_time < ".$db->DBTimeStamp(time()).") ";
  $query2 .= " AND (end_time < ".$db->DBTimeStamp(time()).") ";
 }
 else
   {
     $query1 .= " AND ((".$db->IfNull('end_time',$db->DBTimeStamp(1))." = ".$db->DBTimeStamp(1).") OR (end_time > ".$db->DBTimeStamp(time()).")) ";
     $query2 .= " AND ((".$db->IfNull('end_time',$db->DBTimeStamp(1))." = ".$db->DBTimeStamp(1).") OR (end_time > ".$db->DBTimeStamp(time()).")) ";
   }


$sortrandom = false;        
if (isset($params['sortby'])) 
  {
    if ($params['sortby'] == 'news_category')
      {
	$query1 .= "ORDER BY 'long_name', 'news_date'";
      } 
    else if ($params['sortby'] == 'random')
      {
	$query1 .= "ORDER BY RAND()";
	$sortrandom = true;
      }
    else {
      $query1 .= "ORDER BY '" . str_replace("'", '', str_replace(';', '', $params['sortby'])) . "' ";
    }
  } 
 else 
   { 
     $query1 .= "ORDER BY news_date "; 
   } 
 
if( $sortrandom == false )
  {
    if (isset($params['sortasc']) && 
	(strtolower($params['sortasc']) == 'true'))
      { 
	$query1 .= "asc"; 
      } 
    else 
      { 
	$query1 .= "desc"; 
      }
  }

$pagelimit = 100000;

if( isset( $params['pagelimit'] ) )
  {
    $pagelimit = intval($params['pagelimit']);
  }
else if( isset( $params['number'] ) )
  {
    $pagelimit = intval($params['number']);
  }
		
// Get the number of rows (so we can determine the numer of pages)
$pagecount = -1;
$startelement = 0;
$pagenumber = 1;
{
  // get the total number of items that match the query
  // and determine a number of pages
  $row2 = $db->GetRow($query2);
  $count = intval($row2['count']);
  if( isset( $params['start'] ) )
    {
      $count -= (int)$params['start'];
    }
  $pagecount = (int)($count / $pagelimit);
  if( ($count % $pagelimit) != 0 ) $pagecount++;
}
if( isset( $params['pagenumber'] ) && 
    $params['pagenumber'] != '' )
  {
    // if given a page number, determine a start element
    $pagenumber = (int)$params['pagenumber'];
    $startelement = ($pagenumber-1) * $pagelimit;
  }
if( isset( $params['start'] ) )
  {
    // given a start element, determine a page number
//     $pagenumber = (int)($params['start'] / $pagelimit);
//     if( $pagenumber == 0 ) $pagenumber = 1;
//     if( $pagenumber > $pagecount ) $pagenumber = $pagecount;
    $startelement = $startelement + (int)$params['start'];
  }

// Assign some pagination variables to smarty
if( $pagenumber == 1 )
  {
    $smarty->assign('prevpage',$this->Lang('prevpage'));
    $smarty->assign('firstpage',$this->Lang('firstpage'));
  }
 else
  {
    $params['pagenumber']=$pagenumber-1;
    $smarty->assign('prevpage',
		    $this->CreateFrontendLink($id,$returnid,'default',
					      $this->Lang('prevpage'),$params));
    $params['pagenumber']=1;
    $smarty->assign('firstpage',
		    $this->CreateFrontendLink($id,$returnid,'default',
					      $this->Lang('firstpage'),$params));
  }
    
if( $pagenumber >= $pagecount )
  {
    $smarty->assign('nextpage',$this->Lang('nextpage'));
    $smarty->assign('lastpage',$this->Lang('lastpage'));
  }
 else
   {
     $params['pagenumber']=$pagenumber+1;
     $smarty->assign('nextpage',
		     $this->CreateFrontendLink($id,$returnid,'default',
					       $this->Lang('nextpage'),
					       $params));
     $params['pagenumber']=$pagecount;
     $smarty->assign('lastpage',
		     $this->CreateFrontendLink($id,$returnid,'default',
					       $this->Lang('lastpage'),
					       $params));
   }
$smarty->assign('pagenumber',$pagenumber);
$smarty->assign('pagecount',$pagecount);
$smarty->assign('oftext',$this->Lang('prompt_of'));
$smarty->assign('pagetext',$this->Lang('prompt_page'));

//$query1 .= " LIMIT $pagelimit OFFSET $startelement";
$dbresult = '';
if( $pagelimit < 100000 || $startelement > 0 )
  {
    $dbresult = $db->SelectLimit( $query1,$pagelimit,$startelement);
  }
else
  {
    $dbresult =& $db->Execute($query1);
  }

while ($dbresult && $row = $dbresult->FetchRow())
  {
    $onerow = new stdClass();
	
    $onerow->author_id = $row['author_id'];
    $onerow->author = $row['username'];
    $onerow->authorname = $row['first_name'].' '.$row['last_name'];
    $onerow->id = $row['news_id'];
    $onerow->title = $row['news_title'];
    $onerow->content = $row['news_data'];
    $onerow->summary = (trim($row['summary'])!='<br/>'?$row['summary']:'');
    $onerow->postdate = $row['news_date'];
    if( FALSE == empty($row['news_extra']) )
      {
	$onerow->extra = $row['news_extra'];
      }
    $pref_dateformat = $this->GetPreference('dateformat', '');
    if (FALSE == empty($params['dateformat']))
      {
	$dateformat = $params['dateformat'];
      } elseif (FALSE == empty($pref_dateformat)) {
      $dateformat = $this->GetPreference('dateformat', '');
    } else {
      $dateformat = '%x';
    }
    $onerow->formatpostdate = strftime($dateformat, $db->UnixTimeStamp($row['news_date']));
    $onerow->startdate = $row['start_time'];
    $onerow->enddate = $row['end_time'];
    $onerow->category = $row['news_category_name'];

    //
    // Handle the custom fields
    //
    $query3 = 'SELECT A.value,B.id,B.name,B.type FROM '.cms_db_prefix().'module_news_fieldvals A, '.cms_db_prefix().'module_news_fielddefs B WHERE A.fielddef_id = B.id AND B.public = 1 AND A.news_id = ? ORDER BY B.item_order';
    $dbr3 = $db->Execute($query3,array($row['news_id']));
    $fields = array();
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
      }
    $onerow->fields = $fields;
    $onerow->file_location = cms_join_path('uploads','news','id'.$row['news_id']);

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
			
    $prettyurl = 'news/'.$row['news_id'].'/'.($detailpage!=''?$detailpage:$returnid);
    if (isset($sendtodetail['detailtemplate']))
      {
	$prettyurl .= '/d,' . $sendtodetail['detailtemplate'];
      }
			
    $sendtoprint = array('articleid' => $row['news_id'], 'showtemplate' => 'false');
			
    if (isset($params['lang']))
      {
	$sendtodetail['lang'] = $params['lang'];
	$sendtoprint['lang'] = $params['lang'];
      }

#CreateLink($id, $action, $returnid='', $contents='', $params=array(), $warn_message='', $onlyhref=false, $inline=false, $addttext='', $targetcontentonly=false, $prettyurl='')
    $onerow->link = $this->CreateLink($id, 'detail', $detailpage!=''?$detailpage:$returnid, '', $sendtodetail,'', true, false, '', true, $prettyurl);
    $onerow->titlelink = $this->CreateLink($id, 'detail', $detailpage!=''?$detailpage:$returnid, $row['news_title'], $sendtodetail, '', false, false, '', true, $prettyurl);
    $onerow->morelink = $this->CreateLink($id, 'detail', $detailpage!=''?$detailpage:$returnid, $moretext, $sendtodetail, '', false, false, '', true, $prettyurl);
    $onerow->moreurl = $this->CreateLink($id, 'detail', $detailpage!=''?$detailpage:$returnid, $moretext, $sendtodetail, '', true, false, '', true, $prettyurl);
    $onerow->printlink = $this->CreateLink($id, 'print', $returnid, $this->Lang('print'), $sendtoprint);
    $onerow->printurl = $this->CreateLink($id, 'print', $returnid, $this->Lang('print'), $sendtoprint, '', true);

    $entryarray[]= $onerow;
  }
$smarty->assign('itemcount', count($entryarray));
$smarty->assign_by_ref('items', $entryarray);
$smarty->assign('category_label', $this->Lang('category_label'));
$smarty->assign('author_label', $this->Lang('author_label'));

foreach( $params as $key => $value )
{
  if( $key == 'mact' || $key == 'action' ) continue;

  $smarty->assign('param_'.$key,$value);
}

#Display template
echo "<!-- Displaying News Module -->\n";
echo "<!-- News Categories: '".(isset($params['category'])?$params['category']:'')."' -->\n";

$template = 'summary'.$this->GetPreference('current_summary_template');
if (isset($params['summarytemplate']))
  {
    $template = 'summary'.$params['summarytemplate'];
  }
echo $this->ProcessTemplateFromDatabase($template);

# vim:ts=4 sw=4 noet
?>
