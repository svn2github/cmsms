<?php
if (!isset($gCms)) exit;
$config = $gCms->GetConfig();

$query = '';
$article = '';
if( $id == '_preview_' && isset($_SESSION['news_preview']) && isset($params['preview']) )
  {
    // see if our data matches.
    if( md5(serialize($_SESSION['news_preview'])) == $params['preview'] )
      {
	$fname = TMP_CACHE_LOCATION.'/'.$_SESSION['news_preview']['fname'];
	if( file_exists($fname) && (md5_file($fname) == $_SESSION['news_preview']['checksum']) )
	  {
	    $data = unserialize(file_get_contents($fname));
	    if( is_array($data) )
	      {
		// get passed data into a standard format.
		$article = new news_article;
		$article->set_linkdata($id,$params);
		news_ops::fill_article_from_formparams($article,$data,FALSE,FALSE);
	      }
	  }
      }
  }
 else if( isset($params['articleid']) && $params['articleid'] == -1 )
  {
    $article = news_ops::get_latest_article();
    $article->set_linkdata($id,$params);
  }
else if( isset($params['articleid']) && (int)$params['articleid'] > 0 )
  {
    $article = news_ops::get_article_by_id((int)$params['articleid']);
    $article->set_linkdata($id,$params);

    // todo, should we 404 here if article not found?
  }
if( !$article ) return;

$return_url = $this->CreateReturnLink($id, isset($params['origid'])?$params['origid']:$returnid, $this->lang('news_return'));
$smarty->assign_by_ref('return_url', $return_url);
$smarty->assign_by_ref('entry', $article);

$catName = '';
if (isset($params['category_id']))
  {
    $catName = $db->GetOne('SELECT news_category_name FROM '.cms_db_prefix() . 'module_news_categories where news_category_id=?',array($params['category_id']));		
  }
$smarty->assign('category_name',$catName);
unset($params['article_id']);
$smarty->assign('category_link',$this->CreateLink($id, 'default', $returnid, $catName, $params));

$smarty->assign('category_label', $this->Lang('category_label'));
$smarty->assign('author_label', $this->Lang('author_label'));
$smarty->assign('extra_label', $this->Lang('extra_label'));

#Display template
$template = 'detail'.$this->GetPreference('current_detail_template');
if (isset($params['detailtemplate']))
  {
    $template = 'detail'.$params['detailtemplate'];
  }
echo $this->ProcessTemplateFromDatabase($template);

# vim:ts=4 sw=4 noet
?>
