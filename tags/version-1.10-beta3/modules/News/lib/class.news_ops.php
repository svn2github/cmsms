<?php
#CMS - CMS Made Simple
#(c)2004 by Ted Kulp (wishy@users.sf.net)
#This project's homepage is: http://www.cmsmadesimple.org
#
#This program is free software; you can redistribute it and/or modify
#it under the terms of the GNU General Public License as published by
#the Free Software Foundation; either version 2 of the License, or
#(at your option) any later version.
#
#This program is distributed in the hope that it will be useful,
#but WITHOUT ANY WARRANTY; without even the implied warranty of
#MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
#GNU General Public License for more details.
#You should have received a copy of the GNU General Public License
#along with this program; if not, write to the Free Software
#Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
#
#$Id: News.module.php 2114 2005-11-04 21:51:13Z wishy $

final class news_ops
{
  protected function __construct() {}
  private static $_cached_categories;
  private static $_cached_fielddefs;

  public static function get_categories($id,$params,$returnid=-1)
  {
    $db = cmsms()->GetDb();
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
	if (isset($params['showarchive']) && $params['showarchive'] == true) {
	  $q2 .= " AND (end_time < ".$db->DBTimeStamp(time()).") ";
	}
	else
	  {
	    $q2 .= " AND ((".$db->IfNull('end_time',$db->DBTimeStamp(1))." = ".$db->DBTimeStamp(1).") OR (end_time > ".$db->DBTimeStamp(time()).")) ";
	  }
	$q2 .= ' AND status = \'published\'';

	$dbres2 = $db->Execute($q2,array($row['news_category_id']));
	$count = $dbres2->FetchRow();
	$row['index']=$rowcounter++;
	$row['count']= $count['cnt'];
	$row['prevdepth'] = $depth;
	$depth= count(explode('.', $row['hierarchy']));
	$row['depth']=$depth;

	// changes so that parameters supplied to the tag
	// gets carried down through the links
	// screw pretty urls
	$parms = $params;
	unset($parms['browsecat']);
	unset($parms['category']);
	$parms['category_id'] = $row['news_category_id'];

	$pageid = (isset($params['detailpage']) && $params['detailpage']!='')?$params['detailpage']:$returnid;
	$mod = cms_utils::get_module('News');
	$row['url'] = $mod->CreateLink($id,'default',$pageid,$row['news_category_name'],$parms,'',true);
	$items[] = $row;
      }
    return $items;
  }


  public static function get_category_list()
  {
    if( !is_array(self::$_cached_categories) )
      {
	$db = cmsms()->GetDb();
	$query = "SELECT * FROM ".cms_db_prefix()."module_news_categories ORDER BY hierarchy";
	$dbresult = $db->GetArray($query);
	if( $dbresult )
	  {
	    self::$_cached_categories = $dbresult;
	  }
      }

    $categorylist = array();
    for( $i = 0; $i < count(self::$_cached_categories); $i++ )
      {
	$row = self::$_cached_categories[$i];
	$categorylist[$row['long_name']] = $row['news_category_id'];
      }

    return $categorylist;
  }


  public static function get_category_names_by_id()
  {
    self::get_category_list();
    $list = array();
    for( $i = 0; $i < count(self::$_cached_categories); $i++ )
      {
	$list[self::$_cached_categories[$i]['news_category_id']] = self::$_cached_categories[$i]['news_category_name'];
      }
    return $list;
  }

  
  public static function get_category_name_from_id($id)
  {
    self::get_category_list();
    for( $i = 0; $i < count(self::$_cached_categories); $i++ )
      {
	if( $id = self::$_cached_categories[$i]['news_category_id'] )
	  {
	    return self::$_cached_categories[$i]['news_category_name'];
	  }
      }
  }


  public static function get_fielddefs($publiconly = TRUE)
  {
    if( !is_array(self::$_cached_fielddefs) )
      {
	$db = cmsms()->GetDb();
	$query = 'SELECT * FROM '.cms_db_prefix().'module_news_fielddefs WHERE public = 1 ORDER BY item_order';
	if( !$publiconly )
	  {
	    $query = 'SELECT * FROM '.cms_db_prefix().'module_news_fielddefs ORDER BY item_order';
	  }
	$tmp = $db->GetArray($query);
	
	self::$_cached_fielddefs = array();
	if( is_array($tmp) && count($tmp) )
	  {
	    for( $i = 0; $i < count($tmp); $i++ )
	      {
		self::$_cached_fielddefs[$tmp[$i]['id']] = $tmp[$i];
	      }
	  }
      }
    return self::$_cached_fielddefs;
  }


  public static function &get_field_from_row($row)
  {
    $res = null;
    if( !isset($row['id']) ) return $res;

    $res = new news_field;
    foreach( $row as $key => $value )
      {
	switch( $key )
	  {
	  case 'id':
	  case 'name':
	  case 'type':
	  case 'max_length':
	  case 'item_order':
	  case 'public':
	  case 'value':
	    $res->$key = $value;
	    break;
	  }
      }
    return $res;
  }


  public static function fill_article_from_formparams(news_article &$news,$params,$handle_uploads = FALSE,$handle_deletes = FALSE)
  {
    foreach( $params as $key => $value )
      {
	switch( $key )
	  {
	  case 'articleid':
	    $news->id = $value;
	    break;

	  case 'author_id':
	  case 'title':
	  case 'content':
	  case 'summary':
	  case 'status':
	  case 'news_url':
	  case 'useexp':
	  case 'extra':
	    $news->$key = $value;
	    break;

	  case 'category':
	    $list = self::get_category_names_by_id();
	    for( $i = 0; $i < count(self::$_cached_categories); $i++ )
	      {
		if( $value == self::$_cached_categories[$i]['news_category_name'] )
		  $news->category_id = self::$_cached_categories[$i]['news_category_id'];
	      }
	    break;

	  case 'postdate_Month':
	    $news->postdate = mktime($params['postdate_Hour'], $params['postdate_Minute'], $params['postdate_Second'], $params['postdate_Month'], $params['postdate_Day'], $params['postdate_Year']);
	    break;

	  case 'startdate_Month':
	    $news->startdate = mktime($params['startdate_Hour'], $params['startdate_Minute'], $params['startdate_Second'], $params['startdate_Month'], $params['startdate_Day'], $params['startdate_Year']);
	    break;

	  case 'startdate_Month':
	    $news->enddate = mktime($params['enddate_Hour'], $params['enddate_Minute'], $params['enddate_Second'], $params['enddate_Month'], $params['enddate_Day'], $params['enddate_Year']);
	    break;
	  }
      }

    if( isset($params['customfield']) && is_array($params['customfield']) )
      {
	$fielddefs = self::get_fielddefs();
	foreach( $params['customfield'] as $key => $value )
	  {
	    if( !isset($fielddefs[$key]) ) continue;
	    
	    $field = self::get_field_from_row($fielddefs[$key]);
	    $field->value = $value;
	    $news->set_field($field);
	  }
      }

    return $news;
  }


  static private function &get_article_from_row($row,$get_fields = 'PUBLIC')
  {
    if( !is_array($row) ) return;
    $article = new news_article;
    foreach( $row as $key => $value )
      {
	switch( $key )
	  {
	  case 'news_id':
	    $article->id = $value;
	    break;

	  case 'news_category_id':
	    $article->category_id = $value;
	    break;

	  case 'news_data':
	    $article->content = $value;
	    break;

	  case 'news_date':
	    $article->postdate = $value;
	    break;

	  case 'summary':
	    $article->summary = $value;

	  case 'start_time':
	    $article->startdate = $value;
	    break;

	  case 'end_time':
	    $article->enddate = $value;
	    break;

	  case 'status':
	    $article->status = $value;
	    break;

	  case 'create_date':
	    $article->create_date = $value;
	    break;

	  case 'modified_date':
	    $article->modified_date = $value;
	    break;

	  case 'author_id':
	    $article->author_id = $value;
	    break;

	  case 'news_extra':
	    $article->extra = $value;
	    break;

	  case 'news_url':
	    $article->news_url = $value;
	    break;
	  }
      }

    if( $get_fields && $get_fields != 'NONE' && $article->id )
      {
	// get the fields.
	$fields = self::get_category_names_by_id();
	$query = 'SELECT A.value,B.id,B.name,B.type FROM '.cms_db_prefix().'module_news_fieldvals A, '.cms_db_prefix().'module_news_fielddefs B 
                  WHERE A.fielddef_id = B.id AND A.news_id = ?';
	$qparms = array($article->id);
	if( $get_fields == 'PUBLIC' )
	  {
	    $query .= ' AND B.public = 1';
	  }

	$query .= ' ORDER BY B.item_order';
	$db = cmsms()->GetDb();
	$dbr = $db->GetArray($query,$qparms);

	if( is_array($dbr) )
	  {
	    foreach( $dbr as $row )
	      {
		$field = self::get_field_from_row($row);
		$article->set_field($field);
	      }
	  }
      }

    return $article;
  }

  static public function &get_latest_article($for_display = TRUE)
  {
    $db = cmsms()->GetDb();
    $now = $db->DbTimeStamp(time());
    $query = "SELECT mn.*, mnc.news_category_name FROM ".cms_db_prefix()."module_news mn LEFT OUTER JOIN ".cms_db_prefix()."module_news_categories mnc ON mnc.news_category_id = mn.news_category_id WHERE status = 'published' AND ";
    $query .= "(".$db->IfNull('start_time',$db->DBTimeStamp(1))." < $now) AND ";
    $query .= "((".$db->IfNull('end_time',$db->DBTimeStamp(1))." = ".$db->DBTimeStamp(1).") OR (end_time > $now)) ";
    $query .= 'ORDER BY news_date DESC LIMIT 1';
    $row = $db->GetRow($query);

    return self::get_article_from_row($row,($for_display)?'PUBLIC':'ALL');    
  }


  static public function &get_article_by_id($article_id,$for_display = TRUE)
  {
    $db = cmsms()->GetDb();
    $query = "SELECT mn.*, mnc.news_category_name FROM ".cms_db_prefix()."module_news mn LEFT OUTER JOIN ".cms_db_prefix()."module_news_categories mnc ON mnc.news_category_id = mn.news_category_id WHERE status = 'published' AND news_id = ?";
    $row = $db->GetRow($query, array($article_id));
    
    return self::get_article_from_row($row,($for_display)?'PUBLIC':'ALL');    
  }
} // end of class

#
# EOF
#
?>
