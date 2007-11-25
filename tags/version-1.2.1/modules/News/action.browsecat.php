<?php

if (!isset($gCms)) exit;

$depth = 1;

$query = '
	SELECT news_category_id, news_category_name, hierarchy, long_name 
	FROM ' .cms_db_prefix(). 'module_news_categories 
	WHERE hierarchy not like \'\'
';
if (isset($params['category']) && $params['category'] != '')
{
	$categories = explode(',', $params['category']);
	$query .= ' AND (';
	$count = 0;
	foreach ($categories as $onecat)
	{
		if ($count > 0)
		{
			$query .= ' OR ';
		}
		if (strpos($onecat, '|') !== FALSE || strpos($onecat, '*') !== FALSE)
			$query .= "upper(long_name) like upper('". trim(str_replace('*', '%', $onecat)) . "')";
		else
			$query .= "news_category_name = '" . trim($onecat). "'";
		$count++;
	}
	$query .= ') ';
}
$query .= ' ORDER by hierarchy';
$dbresult = $db->Execute($query);

$rowcounter=0;
while ($dbresult && $row = $dbresult->FetchRow())
{
	$q2 = "SELECT COUNT(news_id) as cnt FROM ".cms_db_prefix()."module_news WHERE news_category_id=?";
	$dbres2 = $db->Execute($q2,array($row['news_category_id']));
	$count = $dbres2->FetchRow();
	$row['index']=$rowcounter++;
	$row['count']= $count['cnt'];
	$row['prevdepth'] = $depth;
	$depth= count(split('\.', $row['hierarchy']));
	$row['depth']=$depth;

	// changes so that parameters supplied to the tag
	// gets carried down through the links
	// screw pretty urls
	$parms = $params;
	unset($parms['browsecat']);
	$parms['category'] = $row['news_category_name'];

	$row['url'] = $this->CreateLink($id,'default',$params['detailpage']!= ''?$params['detailpage']:$returnid,$row['news_category_name'],$parms,'',true);
	$items[] = $row;
}
#Display template
$this->smarty->assign('count', count($items));
$this->smarty->assign('cats', $items);

$template = 'browsecat'.$this->GetPreference('current_browsecat_template');
if (isset($params['browsecattemplate']))
  {
    $template = 'browsecat'.$params['browsecattemplate'];
  }
echo $this->ProcessTemplateFromDatabase($template);


?>
