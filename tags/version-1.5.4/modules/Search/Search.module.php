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

include_once(dirname(__FILE__) . '/PorterStemmer.class.php');

define( "NON_INDEXABLE_CONTENT", "<!-- pageAttribute: NotSearchable -->" );

class SearchItemCollection
{
  var $_ary;
  var $maxweight;
  
  function SearchItemCollection()
  {
    $this->_ary = array();
    $this->maxweight = 1;
  }
  
  function AddItem($title, $url, $txt, $weight = 1, $module = '', $modulerecord = 0)
  {
    if( $txt == '' ) { $txt = $url; }
    $exists = false;
    
    foreach ($this->_ary as $oneitem)
      {
	if ($url == $oneitem->url)
	  {
	    $exists = true;
	    break;
	  }
      }

    if (!$exists)
      {
	$newitem = new StdClass();
	$newitem->url = $url;
	$newitem->urltxt = $txt;
	$newitem->title = $title;
	$newitem->intweight = intval($weight);
	if (intval($weight) > $this->maxweight)
	  $this->maxweight = intval($weight);
	if (!empty($module) )
	  {
	    $newitem->module = $module;
	    if( intval($modulerecord) > 0 )
	      {
		$newitem->modulerecord = $modulerecord;
	      }
	  }
	$this->_ary[] = $newitem;
      }
  }
	
  function CalculateWeights()
  {
    reset($this->_ary);
    while (list($key) = each($this->_ary))
      {
	$oneitem =& $this->_ary[$key];
	$oneitem->weight = intval(($oneitem->intweight / $this->maxweight) * 100);
      }
  }
}

class Search extends CMSModule
{
  function GetName()
  {
    return 'Search';
  }

  function GetFriendlyName()
  {
    return $this->Lang('search');
  }

  function IsPluginModule()
  {
    return true;
  }

  function HasAdmin()
  {
    return true;
  }

  /*---------------------------------------------------------
   HandlesEvents()
   ---------------------------------------------------------*/
  function HandlesEvents ()
  {
    return true;
  }

  function GetVersion()
  {
    return '1.5.3';
  }

  function MinimumCMSVersion()
  {
    return '1.5.2';
  }

  function GetAdminDescription()
  {
    return $this->Lang('description');
  }

  function VisibleToAdminUser()
  {
    return $this->CheckPermission('Modify Site Preferences') ||
      $this->CheckPermission('Modify Templates');
  }

  function SetParameters()
  {
    // This module does not restrict unknown parameters
    // due to the wildcard/regular expression matching stuff of the
    // passthru_* parameters.
    $this->RestrictUnknownParams();
    $this->CreateParameter('inline','false',$this->Lang('param_inline'));
    $this->SetParameterType('inline',CLEAN_STRING);

    $this->CreateParameter('passthru_*','null',$this->Lang('param_passthru'));
	$this->SetParameterType(CLEAN_REGEXP.'/passthru_.*/',CLEAN_STRING);

    $this->CreateParameter('modules','null',$this->Lang('param_modules'));
    $this->SetParameterType('modules',CLEAN_STRING);

    $this->CreateParameter('resultpage', 'null', $this->Lang('param_resultpage'));
    $this->SetParameterType('resultpage',CLEAN_STRING);
    $this->CreateParameter('searchtext','null',$this->Lang('param_searchtext'));
    $this->SetParameterType('searchtext',CLEAN_STRING);
    $this->SetParameterType('searchinput',CLEAN_STRING);

    $this->CreateParameter('submit',$this->Lang('searchsubmit'),
			   $this->Lang('param_submit'));
    $this->SetParameterType('submit',CLEAN_STRING);
    $this->SetParameterType('origreturnid',CLEAN_INT);

    $this->CreateParameter('action','default',$this->Lang('param_action'));
    $this->CreateParameter('pageid','null',$this->Lang('param_pageid'));
    $this->SetParameterType('pageid',CLEAN_INT);
    $this->CreateParameter('count','null',$this->Lang('param_count'));
    $this->SetParameterType('count',CLEAN_INT);
  }

  function GetSearchHtmlTemplate()
  {
    return '{$startform}

    <label for="{$search_actionid}searchinput">{$searchprompt}</label>:&nbsp;<input type="text" id="{$search_actionid}searchinput" name="{$search_actionid}searchinput" size="20" maxlength="50" value="{$searchtext}" {$hogan}/><input name="submit" value="{$submittext}" type="submit" />
{if isset($hidden)}{$hidden}{/if}

{$endform}';
  }
	
  function GetResultsHtmlTemplate()
  {
    $text = <<<EOT
<h3>{\$searchresultsfor} &quot;{\$phrase}&quot;</h3>
{if \$itemcount > 0}
<ul>
  {foreach from=\$results item=entry}
  <li>{\$entry->title} - <a href="{\$entry->url}">{\$entry->urltxt}</a> ({\$entry->weight}%)</li>
  {* 
     You can also instantiate custom behaviour on a module by module basis by looking at
     the \$entry->module and \$entry->modulerecord fields in \$entry 
      ie: {if \$entry->module == 'News'}{News action='detail' article_id=\$entry->modulerecord detailpage='News'} 
  *}
  {/foreach}
</ul>

<p>{\$timetaken}: {\$timetook}</p>
{else}
  <p><strong>{\$noresultsfound}</strong></p>
{/if}
EOT;
    return $text;
  }
	
  function DefaultStopWords()
  {
    return 'i, me, my, myself, we, our, ours, ourselves, you, your, yours, 
yourself, yourselves, he, him, his, himself, she, her, hers, 
herself, it, its, itself, they, them, their, theirs, themselves, 
what, which, who, whom, this, that, these, those, am, is, are, 
was, were, be, been, being, have, has, had, having, do, does, 
did, doing, a, an, the, and, but, if, or, because, as, until, 
while, of, at, by, for, with, about, against, between, into, 
through, during, before, after, above, below, to, from, up, down, 
in, out, on, off, over, under, again, further, then, once, here, 
there, when, where, why, how, all, any, both, each, few, more, 
most, other, some, such, no, nor, not, only, own, same, so, 
than, too, very';
  }

  function RemoveStopWordsFromArray($words)
  {
    $stop_words = preg_split("/[\s,]+/", $this->GetPreference('stopwords', $this->DefaultStopWords()));
    return array_diff($words, $stop_words);
  }

	function StemPhrase($phrase)
	{
		// strip out smarty tags
		$phrase = preg_replace('/\{.*?\}/', '', $phrase);

	        // add spaces between tags
		$phrase = str_replace("<"," <",$phrase);
		$phrase = str_replace(">","> ",$phrase);

		// strip out html and php stuff
		$phrase = strip_tags($phrase);

		// escape meta characters
		$phrase = preg_quote($phrase);

		// split into words
		// strtolower isn't friendly to other charsets
		$phrase = preg_replace("/([A-Z]+)/e",
				"strtolower('\\1')",
				$phrase);
		//$words = preg_split('/[\s,!.()+-\/\\\\]+/', $phrase);
		$words = preg_split('/[\s,!.;:\?()+-\/\\\\]+/', $phrase);

		// ignore stop words
		$words = $this->RemoveStopWordsFromArray($words);

		$stemmer = new PorterStemmer();

		// stem words
		$stemmed_words = array();
		$stem_pref = $this->GetPreference('usestemming', 'false');
		foreach ($words as $word)
		{
			//trim words get rid of wrapping quotes
			$word = trim($word, ' \'"');

			if (strlen($word) <= 0)
			{
				continue;
			}

			if ($stem_pref == 'true')
				$stemmed_words[] = $stemmer->stem($word, true);
			else
				$stemmed_words[] = $word;
		}

		return $stemmed_words;
	}

  function AddWords($module = 'Search', $id = -1, $attr = '', $content = '', $expires = NULL)
  {
    $this->DeleteWords($module, $id, $attr);
    $db =& $this->GetDb();
		
    $non_indexable = strpos($content, NON_INDEXABLE_CONTENT);
    if( $non_indexable ) return;

    @$this->SendEvent('SearchItemAdded', array($module, $id, $attr, &$content, $expires));
		
    if ($content != "")
	{		
		//Clean up the content
		$stemmed_words = $this->StemPhrase($content);
		$words = array_count_values($stemmed_words);
		
		$q = "SELECT id FROM ".cms_db_prefix().'module_search_items WHERE module_name=?';
		$parms = array($module);

		if( $id != -1 )
		{
			$q .= " AND content_id=?";
			$parms[] = $id;
		}
		if( $attr != '' )
		{
			$q .= " AND extra_attr=?";
			$parms[] = $attr;
		}
		$dbresult = $db->Execute($q, $parms);
		
		if ($dbresult && $dbresult->RecordCount() > 0 && $row = $dbresult->FetchRow())
		{
			$itemid = $row['id'];
		}
		else
		{
			$itemid = $db->GenID(cms_db_prefix()."module_search_items_seq");
			$db->Execute('INSERT INTO '.cms_db_prefix().'module_search_items (id, module_name, content_id, extra_attr, expires) VALUES (?,?,?,?,?)', array($itemid, $module, $id, $attr, ($expires != NULL ? trim($db->DBTimeStamp($expires), "'") : NULL) ));
		}
		
		foreach ($words as $word=>$count)
		{
		    $db->Execute('INSERT INTO '.cms_db_prefix().'module_search_index (item_id, word, count) VALUES (?,?,?)', array($itemid, $word, $count));
		}
      }
  }

  function DeleteWords($module = 'Search', $id = -1, $attr = '')
  {
    $db =& $this->GetDb();
    $parms = array( $module );
    $q = "DELETE FROM ".cms_db_prefix().'module_search_items WHERE module_name=?';
	if( $id != -1 )
	{
		$q .= " AND content_id=?";
		$parms[] = $id;
	}
	if( $attr != '' )
	{
		$q .= " AND extra_attr=?";
		$parms[] = $attr;
	}
    $db->Execute($q, $parms);
	$db->Execute('DELETE FROM '.cms_db_prefix().'module_search_index WHERE item_id NOT IN (SELECT id FROM '.cms_db_prefix().'module_search_items)');
    @$this->SendEvent('SearchItemDeleted', array($module, $id, $attr));
  }
	
  function DeleteAllWords($module = 'Search', $id = -1, $attr = '')
  {
    $db =& $this->GetDb();
    $db->Execute('DELETE FROM '.cms_db_prefix().'module_search_index');
    $db->Execute('DELETE FROM '.cms_db_prefix().'module_search_items');
		
    @$this->SendEvent('SearchAllItemsDeleted',array($module, $id, $attr));
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
    return 'ted@cmsmadesimple.org';
  }

  function GetChangeLog()
  {
    return @file_get_contents(dirname(__FILE__).'/changelog.inc');
  }
	
  function RegisterEvents()
  {
    $this->AddEventHandler( 'Core', 'ContentEditPost', false );
    $this->AddEventHandler( 'Core', 'ContentDeletePost', false );
    $this->AddEventHandler( 'Core', 'AddTemplatePost', false );
    $this->AddEventHandler( 'Core', 'EditTemplatePost', false );
    $this->AddEventHandler( 'Core', 'DeleteTemplatePost', false );
    $this->AddEventHandler( 'Core', 'AddGlobalContentPost', false );
    $this->AddEventHandler( 'Core', 'EditGlobalContentPost', false );
    $this->AddEventHandler( 'Core', 'DeleteGlobalContentPost', false );
    $this->AddEventHandler( 'Core', 'ModuleUninstalled', false );
  }

  function Reindex()
  {
    @set_time_limit(999);
    $this->DeleteAllWords();
		
    global $gCms;
    $templateops =& $gCms->GetTemplateOperations();
    $alltemplates = $templateops->LoadTemplates();
    reset($alltemplates);
    while (list($key) = each($alltemplates))
      {
	$onetemplate =& $alltemplates[$key];
	//$this->EditTemplatePost($onetemplate);
	$params = array('template' => &$onetemplate,
                        'forceindexcontent'=>1);
	$this->DoEvent('Core', 'EditTemplatePost', $params);
      }

    $gcbops =& $gCms->GetGlobalContentOperations();
    $allblobs = $gcbops->LoadHtmlBlobs();
    reset($allblobs);
    while (list($key) = each($allblobs))
      {
	$oneblob =& $allblobs[$key];
	//$this->EditHtmlBlobPost($oneblob);
	$params = array('global_content' => &$oneblob);
	$this->DoEvent('Core', 'EditGlobalContentPost', $params);
      }

    foreach($gCms->modules as $key=>$value)
      {
	if ($gCms->modules[$key]['installed'] == true &&
	    $gCms->modules[$key]['active'] == true)
	  {
	    if (method_exists($gCms->modules[$key]['object'], 'SearchReindex'))
	      {
		$gCms->modules[$key]['object']->SearchReindex($this);
	      }
	  }
      }
  }

  function GetEventDescription( $eventname )
  {
    return $this->lang('eventdesc-' . $eventname);
  }

  function GetEventHelp( $eventname )
  {
    return $this->lang('eventhelp-' . $eventname);
  }
	
  function DoEvent( $originator, $eventname, &$params )
  {
    if ($originator == 'Core')
      {
	switch ($eventname)
	  {
	  case 'ContentEditPost':
	    $content =& $params['content'];					
	    if (!isset($content)) return;

            $db =& $this->GetDb();
            $q = "SELECT id FROM ".cms_db_prefix()."module_search_items WHERE
                  extra_attr = ? AND content_id = ? LIMIT 1";
            $template_indexed = $db->GetOne( $q, array( 'template', $content->TemplateId() ));
	    if( !$template_indexed )
	      {
		$this->DeleteWords($this->GetName(), $content->Id(), 'content');
		break;
	      }

	    //Only index content if it's active
	    // and searchable.
	    // assume by default that it is searchable
	    $tmp = $content->GetPropertyValue('searchable');
	    if( $tmp == '' ) $tmp = 1;
	    if ($content->Active() && $tmp )
	      {

	      //Weight the title and menu text higher
	      $text = str_repeat(' '.$content->Name(), 2) . ' ';
	      $text .= str_repeat(' '.$content->MenuText(), 2) . ' ';

	      $props = $content->Properties();
	      foreach ($props->mPropertyValues as $k=>$v)
		{
		  $text .= $v.' ';
		}

	      // here check for a string to see
	      // if this content is indexable at all
	      $non_indexable = strpos($text, NON_INDEXABLE_CONTENT);
	      if (! $non_indexable)
		{
		  $this->AddWords($this->GetName(), $content->Id(), 'content', $text);
		}
	      else
		{
		  $this->DeleteWords($this->GetName(), $content->Id(), 'content');
		}
	      }
	    else
	      {
		//Just in case the active flag was turned off
		$this->DeleteWords($this->GetName(), $content->Id(), 'content');
	      }
					
	    break;

	  case 'ContentDeletePost':
	    $content =& $params['content'];

			if (!isset($content)) return;

	    $this->DeleteWords($this->GetName(), $content->Id(), 'content');

	    break;
					
	  case 'AddTemplatePost':
	    $template =& $params['template'];
					
	    if( $template->active != false )
	      $this->AddWords($this->GetName(), $template->id, 'template', $template->content);
	    else
	      $this->DeleteWords($this->GetName(), $template->id, 'template');
				
	    break;
					
	  case 'EditTemplatePost':
	    $template =& $params['template'];

	    if( $template->active != false )
	      {
		// here check for a string to see
		// if this content is indexable at all
		$non_indexable = strpos($template->content, NON_INDEXABLE_CONTENT);
		  
		$db =& $this->GetDb();
		  
		// check if the page was indexed already or not
		$q = "SELECT id FROM ".cms_db_prefix()."module_search_items WHERE content_id = ?
			AND extra_attr = ? LIMIT 1";
		$was_indexed = $db->GetOne( $q, array( $template->id, 'template' ) );
		  
		// find all of the (active) pages tied to a template
		$q = "SELECT content_id FROM ".cms_db_prefix()."content WHERE active > 0 AND template_id = ?";
		$dbresult =& $db->Execute( $q, array( $template->id ) );
		if( ! $non_indexable )
		  {
		    $this->AddWords($this->GetName(), $template->id, 'template', $template->content);
		  }
		else
		  {
		    $this->DeleteWords($this->GetName(), $template->id, 'template');
		  }
		  
		if( ($non_indexable && $was_indexed) )
		  {
		    // we can't index the template, and it was indexed
		    // meaning we need to delete all indexes from
		    // the children.
		    $q2 = "DELETE FROM ".cms_db_prefix()."module_search_items WHERE
				extra_attr = ? AND content_id  IN (";
		    $parms = array( 'content' );
		      
		    // delete them all from the index
		    while( $dbresult && !$dbresult->EOF )
		      {
			$q2 .= "?,";
			$parms[] = $dbresult->fields['content_id'];
			$dbresult->MoveNext();
		      }
		    $q2 = substr($q2,0,strlen($q2)-1);
		    $q2 .= ")";
		      
		    $db->Execute( $q2, $parms );
		      
		    $db->Execute('DELETE FROM '.cms_db_prefix().'module_search_index WHERE item_id NOT IN (SELECT id FROM '.cms_db_prefix().'module_search_items)');
		  }
		else 
		  {
		    if (!$non_indexable && !$was_indexed)
		      { 
			// The template is indexable, and was not indexed previously
			// so we have to index it's children.
			while( $dbresult && !$dbresult->EOF )
			  {
			    global $gCms;
			    $contentops =& $gCms->GetContentOperations();
			    $onecontent =& $contentops->LoadContentFromId($dbresult->fields['content_id']);
			    $parms = array('content'=>&$onecontent);
			    $this->DoEvent('Core','ContentEditPost',$parms);
			    $dbresult->MoveNext();
			  }
		      }
		  }
	      }
	    else
	      {
		// template is inactive
		$this->DeleteWords($this->GetName(), $template->id, 'template');
	      }
	    break;
					
	  case 'DeleteTemplatePost':
	    $template =& $params['template'];
	    $this->DeleteWords($this->GetName(), $template->id, 'template');

	    break;
					
	  case 'AddGlobalContentPost':
	    $global_content =& $params['global_content'];
	    $this->AddWords($this->GetName(), $global_content->id, 'global_content', $global_content->content);

	    break;
					
	  case 'EditGlobalContentPost':
	    $global_content =& $params['global_content'];
	    $this->AddWords($this->GetName(), $global_content->id, 'global_content', $global_content->content);
	    break;
					
	  case 'DeleteGlobalContentPost':
	    $global_content =& $params['global_content'];

	    $this->DeleteWords($this->GetName(), $global_content->id, 'global_content');

	    break;

	  case 'ModuleUninstalled':
	    $module_name =& $params['name'];

	    $this->DeleteWords($module_name);

	    break;
	  }
      }
  }
}

# vim:ts=4 sw=4 noet
?>
