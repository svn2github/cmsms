<?php
#CMS - CMS Made Simple
#(c)2004 by Ted Kulp (wishy@users.sf.net)
#This project's homepage is: http://cmsmadesimple.sf.net
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

class News extends CMSModule
{
	function GetName()
	{
		return 'News';
	}

	function GetFriendlyName()
	{
		return $this->Lang('news');
	}

	function IsPluginModule()
	{
		return true;
	}

	function HasAdmin()
	{
		return true;
	}

	function GetVersion()
	{
		return '2.8.2';
	}

	function MinimumCMSVersion()
	{
	  //		return '1.2.1';
		return '1.3.1';
	}

	function GetAdminDescription()
	{
		return $this->Lang('description');
	}

	function GetAdminSection()
	{
		return 'content';
	}

	function SetParameters()
	{
		$test = $this->GetPreference('test','');

		$this->RestrictUnknownParams();
		$this->RegisterRoute('/[nN]ews\/(?P<articleid>[0-9]+)\/(?P<returnid>[0-9]+)\/(?P<junk>.*?)\/d,(?P<detailtemplate>.*?)$/');
		$this->RegisterRoute('/[nN]ews\/(?P<articleid>[0-9]+)\/(?P<returnid>[0-9]+)\/(?P<junk>.*?)$/');
		$this->RegisterRoute('/[nN]ews\/(?P<articleid>[0-9]+)\/(?P<returnid>[0-9]+)$/');
		$this->RegisterRoute('/[nN]ews\/(?P<articleid>[0-9]+)$/');
		$this->RegisterRoute('/[nN]ews\/(?P<action>rss)\/(?P<category>.*?)$/', array('showtemplate'=>'false'));
		$this->RegisterRoute('/[nN]ews\/(?P<action>rss)$/', array('showtemplate'=>'false'));

		$this->CreateParameter('pagelimit', 100000, $this->Lang('help_pagelimit'));
		$this->CreateParameter('browsecat', 1, $this->lang('helpbrowsecat'));
		$this->CreateParameter('showarchive', 1, $this->lang('helpshowarchive'));
		$this->CreateParameter('sortasc', 'true', $this->lang('helpsortasc'));
		$this->CreateParameter('sortby', 'news_date', $this->lang('helpsortby'));
		$this->CreateParameter('detailpage', 'pagealias', $this->lang('helpdetailpage'));
		$this->CreateParameter('detailtemplate', '', $this->lang('helpdetailtemplate'));
		$this->CreateParameter('summarytemplate', '', $this->lang('helpsummarytemplate'));
		$this->CreateParameter('formtemplate', '', $this->lang('helpformtemplate'));
		$this->CreateParameter('browsecattemplate', '', $this->lang('helpbrowsecattemplate'));
		$this->CreateParameter('moretext', 'more...', $this->lang('helpmoretext'));
		$this->CreateParameter('category', 'category', $this->lang('helpcategory'));
		$this->CreateParameter('makerssbutton', 'true', $this->lang('helpmakerssbutton'));
		$this->CreateParameter('dateformat', '%b %d, %Y', $this->lang('helpdateformat'));
		$this->CreateParameter('number', '5', $this->lang('helpnumber'));
		$this->CreateParameter('start', '5', $this->lang('helpstart'));
		$this->CreateParameter('action','default',$this->Lang('helpaction'));
		$this->CreateParameter('rsscategory','',$this->Lang('helprsscategory'));

		global $CMS_VERSION;
		$res = version_compare( $CMS_VERSION, '1.1' );
		if( $res >= 0 )
		  {
		    #
		    # For 1.1's enhanced security checking, each
		    # parameter that is passed in a frontend url or
		    # frontend form needs to be typed here.
		    #
		    $this->SetParameterType('pagelimit',CLEAN_INT);
		    $this->SetParameterType('browsecat',CLEAN_INT);
		    $this->SetParameterType('showarchive',CLEAN_INT);
		    $this->SetParameterType('sortasc',CLEAN_STRING); // should be int, or boolean
		    $this->SetParameterType('sortby',CLEAN_STRING);
		    $this->SetParameterType('detailpage',CLEAN_STRING);
		    $this->SetParameterType('detailtemplate',CLEAN_STRING);
		    $this->SetParameterType('formtemplate',CLEAN_STRING);
		    $this->SetParameterType('browsecattemplate',CLEAN_STRING);
		    $this->SetParameterType('summarytemplate',CLEAN_STRING);
		    $this->SetParameterType('moretext',CLEAN_STRING);
		    $this->SetParameterType('category',CLEAN_STRING);
		    $this->SetParameterType('category_id',CLEAN_STRING);
		    $this->SetParameterType('makerssbutton',CLEAN_STRING);
		    $this->SetParameterType('dateformat',CLEAN_STRING);
		    $this->SetParameterType('number',CLEAN_INT);
		    $this->SetParameterType('start',CLEAN_INT);
		    $this->SetParameterType('pagenumber',CLEAN_INT);
		    $this->SetParameterType('articleid',CLEAN_INT);
		    $this->SetParameterType('origid',CLEAN_INT);
		    $this->SetParameterType('returid',CLEAN_INT);
		    $this->SetParameterType('showtemplate',CLEAN_STRING);
		    $this->SetParameterType('assign',CLEAN_STRING);
		    $this->SetParameterType('inline',CLEAN_STRING);
		    $this->SetParametertype('rsscategory',CLEAN_STRING);
		
		    // form parameters
		    $this->SetParameterType('submit',CLEAN_STRING);
		    $this->SetParameterType('cancel',CLEAN_STRING);
		    $this->SetParameterType('category',CLEAN_STRING);
		    $this->SetParameterType('title',CLEAN_STRING);
		    $this->SetParameterType('content',CLEAN_STRING);
		    $this->SetParameterType('summary',CLEAN_STRING);
		    $this->SetParameterType('extra',CLEAN_STRING);
		    $this->SetParameterType('postdate',CLEAN_STRING);
		    $this->SetParameterType('postdate_Hour',CLEAN_STRING);
		    $this->SetParameterType('postdate_Minute',CLEAN_STRING);
		    $this->SetParameterType('postdate_Second',CLEAN_STRING);
		    $this->SetParameterType('postdate_Month',CLEAN_STRING);
		    $this->SetParameterType('postdate_Day',CLEAN_STRING);
		    $this->SetParameterType('postdate_Year',CLEAN_STRING);
		    $this->SetParameterType('startdate',CLEAN_STRING);
		    $this->SetParameterType('startdate_Hour',CLEAN_STRING);
		    $this->SetParameterType('startdate_Minute',CLEAN_STRING);
		    $this->SetParameterType('startdate_Second',CLEAN_STRING);
		    $this->SetParameterType('startdate_Month',CLEAN_STRING);
		    $this->SetParameterType('startdate_Day',CLEAN_STRING);
		    $this->SetParameterType('startdate_Year',CLEAN_STRING);
		    $this->SetParameterType('enddate',CLEAN_STRING);
		    $this->SetParameterType('enddate_Hour',CLEAN_STRING);
		    $this->SetParameterType('enddate_Minute',CLEAN_STRING);
		    $this->SetParameterType('enddate_Second',CLEAN_STRING);
		    $this->SetParameterType('enddate_Month',CLEAN_STRING);
		    $this->SetParameterType('enddate_Day',CLEAN_STRING);
		    $this->SetParameterType('enddate_Year',CLEAN_STRING);
		    $this->SetParameterType('useexp',CLEAN_INT);
		    $this->SetParameterType('input_category',CLEAN_STRING);
		    $this->SetParameterType('category_id',CLEAN_INT);

		    $this->SetParameterType(CLEAN_REGEXP.'/news_customfield_.*/',CLEAN_STRING);
		    $this->SetParameterType('junk',CLEAN_STRING);
		  }

		$this->mCachable = false;
	}

	function ContentPostRender(&$content)
	{
		if ($this->GetPreference('showautodiscovery', 'yes') == 'yes')
		{
			#if (eregi('\{cms_module module=[\"\']?news[\"\']?', $content))
			if (strpos($content, '<!-- Displaying News Module -->') !== FALSE)
			{
				global $gCms;
				$config =& $gCms->GetConfig();

				$matches = array();
				$categories = '';
				if (preg_match("/<!-- News Categories: '(.*?)' -->/", $content, $matches))
				{
					$categories = $matches[1];
				}

				$params = array("showtemplate"=>"false");
				
				$url = '';
				if ($this->GetPreference('autodiscoverylink', '') == '')
				{
					if (($config['assume_mod_rewrite'] == true || $config['internal_pretty_urls'] == true) && $config['use_hierarchy'] == true)
					{
						if ($config['assume_mod_rewrite'] == true)
						{
							$url = $config['root_url'].'/News/rss/'.rawurlencode($categories).$config['page_extension'];
						}
						else
						{
							$url = $config['root_url'].'/index.php/News/rss/'.rawurlencode($categories);
						}
					}
					else
					{
						$url = $config['root_url'].'/index.php?mact=News,cntnt01,rss&amp;cntnt01showtemplate=false&amp;cntnt01category='.rawurlencode($categories).'&amp;cntnt01number=20&amp;cntnt01returnid='.$gCms->variables['content_id'];
					}
				}
				else
				{
					$url = $this->GetPreference('autodiscoverylink', '');
				}
	
				$text = '<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="'.$url.'" />';
				if (function_exists('str_ireplace'))
				{
					$content = str_ireplace('</head>', $text.'</head>', $content);
				}
				else
				{
					$content = eregi_replace('<\/head>', $text.'</head>', $content);
				}
			}
		}
	}

    function VisibleToAdminUser()
    {
      return $this->CheckPermission('Modify News') || $this->CheckPermission('Modify Site Preferences') || $this->CheckPermission('Modify Templates');
    }

    /**
     * This function is not in the API!!!
     */
    function GetSummaryHtmlTemplate()
    {
      die('deprecated');
    }

    function GetDetailHtmlTemplate()
    {
      die('deprecated');
    }

    function GetDfltEmailTemplate()
    {
      $text = "A new news article has been posted to your website.  The details are as follows:";
      $text .= "Title:      {\$title}\n";
      $text .= "IP Address: {\$ipaddress}\n";
      $text .= "Summary:    {\$summary|strip_tags}\n";
      $text .= "Post Date:  {\$postdate|date_format}\n";
      $text .= "Start Date: {\$startdate|date_format}\n";
      $text .= "End Date:   {\$enddate|date_format}\n";
      return $text;
    }

    function InstallPostMessage()
    {
      return $this->Lang('postinstall');
    }

    function UpdateHierarchyPositions()
    {
      $db =& $this->GetDb();

      $query = "SELECT news_category_id, news_category_name FROM ".cms_db_prefix()."module_news_categories";
      $dbresult = $db->Execute($query);
      while ($dbresult && $row = $dbresult->FetchRow())
	{
	  $current_hierarchy_position = "";
	  $current_long_name = "";
	  $content_id = $row['news_category_id'];
	  $current_parent_id = $row['news_category_id'];
	  $count = 0;
	  
	  while ($current_parent_id > -1)
	    {
	      $query = "SELECT news_category_id, news_category_name, parent_id FROM ".cms_db_prefix()."module_news_categories WHERE news_category_id = ?";
	      $row2 = $db->GetRow($query, array($current_parent_id));
	      if ($row2)
		{
		  $current_hierarchy_position = str_pad($row2['news_category_id'], 5, '0', STR_PAD_LEFT) . "." . $current_hierarchy_position;
		  $current_long_name = $row2['news_category_name'] . ' | ' . $current_long_name;
		  $current_parent_id = $row2['parent_id'];
		  $count++;
		}
	      else
		{
		  $current_parent_id = 0;
		}
	    }
	  
	  if (strlen($current_hierarchy_position) > 0)
	    {
	      $current_hierarchy_position = substr($current_hierarchy_position, 0, strlen($current_hierarchy_position) - 1);
	    }
	  
	  if (strlen($current_long_name) > 0)
	    {
	      $current_long_name = substr($current_long_name, 0, strlen($current_long_name) - 3);
	    }
	  
	  $query = "UPDATE ".cms_db_prefix()."module_news_categories SET hierarchy = ?, long_name = ? WHERE news_category_id = ?";
	  $db->Execute($query, array($current_hierarchy_position, $current_long_name, $content_id));
	}
    }

    function CreateParentDropdown($id, $catid = -1, $selectedvalue = -1)
    {
      $db =& $this->GetDb();
      
      $longname = '';
      
      $items['('.$this->Lang('none').')'] = '-1';
      
      $query = "SELECT hierarchy, long_name FROM ".cms_db_prefix()."module_news_categories WHERE news_category_id = ?";
      $dbresult = $db->Execute($query, array($catid));
      while ($dbresult && $row = $dbresult->FetchRow())
	{
	  $longname = $row['hierarchy'] . '%';
	}
      
      $query = "SELECT news_category_id, news_category_name, hierarchy, long_name FROM ".cms_db_prefix()."module_news_categories WHERE hierarchy not like ? ORDER by hierarchy";
      $dbresult = $db->Execute($query, array($longname));
      while ($dbresult && $row = $dbresult->FetchRow())
	{
	  $items[$row['long_name']] = $row['news_category_id'];
	}

      return $this->CreateInputDropdown($id, 'parent', $items, -1, $selectedvalue);
    }

    function GetHelp($lang='en_US')
    {
      return $this->Lang('help');
    }

    function GetAuthor()
    {
      return 'Ted Kulp';
    }

    function GetAuthorEmail()
    {
      return 'wishy@cmsmadesimple.org';
    }

    function GetChangeLog()
    {
      return $this->Lang('changelog');
    }
	
    function GetEventDescription( $eventname )
    {
      return $this->lang('eventdesc-' . $eventname);
    }

    function GetEventHelp( $eventname )
    {
      return $this->lang('eventhelp-' . $eventname);
    }
	
    function SearchResult($returnid, $articleid, $attr = '')
    {
      $result = array();
		
      if ($attr == 'article')
	{
	  $db =& $this->GetDb();
	  $q = "SELECT news_title FROM ".cms_db_prefix()."module_news WHERE
			      news_id = ?";
	  $dbresult = $db->Execute( $q, array( $articleid ) );
	  if ($dbresult)
	    {
	      $row = $dbresult->FetchRow();

	      //0 position is the prefix displayed in the list results.
	      $result[0] = $this->GetFriendlyName();
		
	      //1 position is the title
	      $result[1] = $row['news_title'];

	      //2 position is the URL to the title.
	      
	      $aliased_title = munge_string_to_url($row['news_title']);
	      $prettyurl = 'news/' . $articleid.'/'.$returnid."/$aliased_title";
	      $result[2] = $this->CreateLink('cntnt01', 'detail', $returnid, '', array('articleid' => $articleid) ,'', true, false, '', true, $prettyurl);
	    }
	}
		
      return $result;
    }
	
    function SearchReindex(&$module)
    {
      $db =& $this->GetDb();
		
      $query = 'SELECT * FROM '.cms_db_prefix().'module_news ORDER BY news_date';
      $result = &$db->Execute($query);

      while ($result && !$result->EOF)
	{
	  if ($result->fields['status'] == 'published')
	    {
	      $module->AddWords($this->GetName(), $result->fields['news_id'], 'article', $result->fields['news_data'] . ' ' . $result->fields['summary'] . ' ' . $result->fields['news_title'] . ' ' . $result->fields['news_title'], $result->fields['end_time'] != NULL ?  $db->UnixTimeStamp($result->fields['end_time']) : NULL);
	    }
	  $result->MoveNext();
	}
    }

    /**
     * An api function (callable from user tags) that allows the creation
     * of a new news article in a named category.
     *
     * AuthorID, is taken from the currently logged in ID, or is set at 0
     */
    function AddNewArticle( $category, $title, $summary, $text = null, $start_time = null, $end_time = null, $status = 'published', $icon = null )
    {
      $db =& $this->GetDb();

      // find the category id
      $q = "SELECT news_category_id AS id FROM ".cms_db_prefix()."module_news_categories
		WHERE news_category_name = ?";
      $dbresult = $db->Execute( $q, array( $category ) );
      if( !$dbresult || $dbresult->RecordCount() == 0 )
	{
	  return array( FALSE, $this->Lang('error_api_nocategory') );
	}
      $row = $dbresult->FetchRow();
      $catid = $row['id'];

      // find the author id given a name
      $authorid = 0;
      if( get_userid() != false )
	{
	  $authorid = get_userid();
	}

      // check the remaining params
      if( $summary == '' )
	{
	  return array( FALSE, $this->Lang('error_api_nosummary') );
	}

      if( $start_time == null )
	{
	  $start_time = trim($db->DBTimeStamp(time()), "'");
	}

      // get a new article id
      $newsid = $db->GenID(cms_db_prefix()."module_news_seq");

      // prepare the query
      $query = 'INSERT INTO '.cms_db_prefix().'module_news ( NEWS_ID, NEWS_CATEGORY_ID, AUTHOR_ID, NEWS_TITLE, NEWS_DATA, NEWS_DATE, SUMMARY, START_TIME, END_TIME, STATUS, ICON, CREATE_DATE, MODIFIED_DATE ) VALUES (?,?,?,?,?,?,?,?,?,?,?,'.$db->DBTimeStamp(time()).','.$db->DBTimeStamp(time()).')';
      $parms = array( $newsid, $catid, $authorid, $title, $text, 
		      $start_time,
		      $summary, $start_time, $end_time, $status, $icon);

      // and go
      $dbresult = $db->Execute( $query, $parms );
      if( !$dbresult )
	{
	  return array( FALSE, $this->Lang('error_api_dberror') );
	}
		
      @$this->SendEvent('NewsArticleAdded', array('news_id' => $newsid, 'category_id' => $catid, 'title' => $title, 'content' => $text, 'summary' => $summary, 'status' => $status, 'start_time' => $start_time, 'end_time' => $end_time));

      return array( TRUE );
    }

//   function DoAction($name,$id,$params,$returnid='')
//   {
//     if( $returnid != '' )
//       {
// 	foreach( $params as $key => $value )
//  	  {
//  	    $params[$key] = cms_htmlentities($params[$key]);
//  	  }
//       }
//     parent::DoAction($name,$id,$params,$returnid);
//   }

  function myRedirectToTab( $id, $tab, $params = '' )
  {
    $parms = array();
    if( is_array( $params ) )
      {
	$parms = $params;
      }
    $parms = array('active_tab' => $tab );
    $this->myRedirect( $id, 'defaultadmin', $parms );
  }

  function myRedirect( $id, $action, $params = '' )
  {
    unset( $params['action'] );
    $this->Redirect( $id, $action, '', $params );
  }


  /*---------------------------------------------------------
   _AdminEditDefaultTemplateForm
   NOT PART OF THE MODULE API

   A function that provides a form for editing a default template
   and/or returning it to system defaults.
   ---------------------------------------------------------*/
  function _AdminEditDefaultTemplateForm($id,$returnid,$prefname,$active_tab,$title,
					 $filename,$info)
  {
    $smarty =& $this->smarty;
    $smarty->assign('defaulttemplateform_title',$title);
    $smarty->assign('info_title',$info);
    $smarty->assign('startform',
		    $this->CreateFormStart($id,'setdefaulttemplate',$returnid,'post','',false,'',
					   array('prefname'=>$prefname,
						 'active_tab'=>$active_tab,
						 'filename'=>$filename)));
    $smarty->assign('prompt_template',$this->Lang('template'));
    $smarty->assign('input_template',$this->CreateTextArea(false,$id,
							   $this->GetPreference($prefname),
							   'input_template'));
    $smarty->assign('submit',$this->CreateInputSubmit($id,'submit',$this->Lang('submit')));
    $smarty->assign('reset',$this->CreateInputSubmit($id,'resettodefault',
						     $this->Lang('resettodefault')));
    $smarty->assign('endform',
		    $this->CreateFormEnd());
    echo $this->ProcessTemplate('editdefaulttemplate.tpl');
  }


  /*---------------------------------------------------------
   _AdminCreateTemplateList( $id, $params, $returnid )
   NOT PART OF THE MODULE API

   A function that provides a list of templates matching
   a prefix, and the appropriate edit, add, and delete links.
   ---------------------------------------------------------*/
  function _AdminCreateTemplateList( $id, $returnid, $prefix, $defaulttemplatepref, 
				     $active_tab, $defaultprefname,
				     $title)
  {
    // we're gonna allow multiple templates here
    // but we're gonna prefix them all with something
    global $gCms;
    
    $falseimage1 = $gCms->variables['admintheme']->DisplayImage('icons/system/false.gif','make default','','','systemicon');
    $trueimage1 = $gCms->variables['admintheme']->DisplayImage('icons/system/true.gif','default','','','systemicon');
    $alltemplates = $this->ListTemplates();
    $rowarray = array();
    $rowclass = 'row1';
    foreach( $alltemplates as $onetemplate )
      {
	if( !preg_match("/^$prefix/", $onetemplate ) )
	  {
	    continue;
	  }
	
	$tmp = substr($onetemplate,strlen($prefix));
	$row = new StdClass();
	$row->name = $this->CreateLink( $id, 'edittemplate', $returnid,
					$tmp, array('template' => $tmp,
						    'active_tab' => $active_tab,
						    'title'=>$title,
						    'prefix'=>$prefix,
						    'mode'=>'edit'));
	$row->rowclass = $rowclass;

	$default = ($this->GetPreference($defaultprefname) == $tmp) ? true : false;
	if( $default )
	  {
	    $row->default = $trueimage1;
	  }
	else
	  {
	    $row->default = $this->CreateLink( $id, 'makedefaulttemplate', $returnid,
					       $falseimage1,
					       array('template'=>$tmp,
						     'defaultprefname'=>$defaultprefname,
						     'active_tab' => $active_tab));
	  }

	$row->editlink = $this->CreateLink( $id, 'edittemplate', $returnid,
					    $gCms->variables['admintheme']->
					    DisplayImage ('icons/system/edit.gif',
							  $this->Lang ('edit'), '', '', 'systemicon'),
					    array ('template' => $tmp,
						   'active_tab' => $active_tab,
						   'prefix'=>$prefix,
						   'title'=>$title,
						   'mode'=>'edit'));
	
	$tmp = $prefix."default";
	if( ($onetemplate == $tmp) || $default )
	  {
	    $row->deletelink = '&nbsp;';
	  }
	else
	  {
	    $row->deletelink = $this->CreateLink( $id, 'deletetemplate', $returnid,
						  $gCms->variables['admintheme']->
						  DisplayImage ('icons/system/delete.gif',
								$this->Lang ('delete'), '', '', 'systemicon'),
						  array ('template' => $onetemplate),
						  $this->Lang ('areyousure'));
	  }
	
	array_push ($rowarray, $row);
	($rowclass == "row1" ? $rowclass = "row2" : $rowclass = "row1");
      }
    
    $this->smarty->assign('items', $rowarray );
    $this->smarty->assign('nameprompt', $this->Lang('prompt_name'));
    $this->smarty->assign('defaultprompt', $this->Lang('prompt_default'));
    $this->smarty->assign('newtemplatelink',
			  $this->CreateLink( $id, 'edittemplate', $returnid,
					     $this->Lang('prompt_newtemplate'),
					     array('prefix' => $prefix,
						   'active_tab' => $active_tab,
						   'title'=>$title,
						   'mode' => 'add',
						   'defaulttemplatepref' => $defaulttemplatepref
						   )));
    $this->smarty->assign($this->CreateFormEnd());
    echo $this->ProcessTemplate('edittemplates.tpl');
  }


  function GetTypesDropdown( $id, $name, $selected = '' )
  {
    $items = array($this->Lang('textbox') => 'textbox', 
		   $this->Lang('checkbox') => 'checkbox',
		   $this->Lang('textarea') => 'textarea',
		   $this->Lang('file') => 'file');
    return $this->CreateInputDropdown($id, $name, $items, -1, $selected);
  }
  

  function handle_upload($itemid, $fieldname, &$error)
  {
	  global $gCms;
	  $config =& $gCms->GetConfig();
	  
	  $p = cms_join_path($config['uploads_path'],'news');
	  if (!is_dir($p)) {
		  $res = @mkdir($p);
		  if( $res === FALSE )
			{
			  $error = $this->Lang('error_mkdir',$p);
			  return FALSE;
			}
	  }

	  $p = cms_join_path($config['uploads_path'],'news','id'.$itemid);
	  if (!is_dir($p)) {
		if( @mkdir($p) === FALSE )
		  {
			$error = $this->Lang('error_mkdir',$p);
			return FALSE;
		  }
	  }

	  if( $_FILES[$fieldname]['size'] > $config['max_upload_size'] )
	    {
	      $error = $this->Lang('error_filesize');
	      return FALSE;
	    }

	  $filename = basename($_FILES[$fieldname]['name']);
	  $dest = cms_join_path($config['uploads_path'],'news','id'.$itemid,$filename);

	  // Get the files extension
	  $ext = substr(strrchr($filename, '.'), 1);

	  // compare it against the 'allowed extentions'
	  $exts = explode(',',$this->GetPreference('allowed_upload_types',''));
	  if( !in_array( $ext, $exts ) ) 
		{
		  $error = $this->Lang('error_invalidfiletype');
		  return FALSE;
		}

	  if( @cms_move_uploaded_file($_FILES[$fieldname]['tmp_name'], $dest) === FALSE )
		{
		  $error = $this->Lang('error_movefile',$dest);
		  return FALSE;
		}

	  return $filename;
  }

  function get_category_list()
  {
    $db =& $this->GetDb();
	$categorylist = array();
	$query = "SELECT * FROM ".cms_db_prefix()."module_news_categories ORDER BY hierarchy";
	$dbresult = $db->Execute($query);

	while ($dbresult && $row = $dbresult->FetchRow())
	{
		$categorylist[$row['long_name']] = $row['news_category_id'];
	}

	return $categorylist;
  }

  function image_transform($srcSpec, $destSpec, $size)
  {
	global $gCms;
	$config =& $gCms->GetConfig();
    require_once(dirname(__FILE__).'/../../lib/filemanager/ImageManager/Classes/Transform.php');
     
    $it = new Image_Transform;
    $img = $it->factory($config['image_manipulation_prog']);
    $img->load($srcSpec);
    if ($img->img_x < $img->img_y)
      {
				$long_axis = $img->img_y;
      }
    else
      {
				$long_axis = $img->img_x;
      }
     
    if ($long_axis > $size)
      {
				$img->scaleByLength($size);
				$img->save($destSpec, 'jpeg');
      }
    else
      {
				$img->save($destSpec, 'jpeg');
      }
    $img->free();
  }

  function delete_article($articleid)
  {
    $db =& $this->GetDb();

    //Now remove the article
    $query = "DELETE FROM ".cms_db_prefix()."module_news WHERE news_id = ?";
    $db->Execute($query, array($articleid));
    
    // Delete it from the custom fields
    $query = 'DELETE FROM '.cms_db_prefix().'module_news_fieldvals WHERE news_id = ?';
    $db->Execute($query, array($articleid));
    
    //Update search index
    $module =& $this->GetModuleInstance('Search');
    if ($module != FALSE)
      {
	$module->DeleteWords($this->GetName(), $articleid, 'article');
      }
    
    @$this->SendEvent('NewsArticleDeleted', array('news_id' => $articleid));
  }
  
}

# vim:ts=4 sw=4 noet
?>
