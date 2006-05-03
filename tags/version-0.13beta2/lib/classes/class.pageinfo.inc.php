<?php
#CMS - CMS Made Simple
#(c)2004 by Ted Kulp (tedkulp@users.sf.net)
#This project's homepage is: http://cmsmadesimple.org
#
#This program is free software; you can redistribute it and/or modify
#it under the terms of the GNU General Public License as published by
#the Free Software Foundation; either version 2 of the License, or
#(at your option) any later version.
#
#This program is distributed in the hope that it will be useful,
#BUT withOUT ANY WARRANTY; without even the implied warranty of
#MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
#GNU General Public License for more details.
#You should have received a copy of the GNU General Public License
#along with this program; if not, write to the Free Software
#Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
#
#$Id: class.pageinfo.inc.php 2643 2006-03-08 23:55:57Z wishy $

/**
 * Page Info -- Represents a "page" which consists of different variabels virtually
 * composited together.
 *
 * @since		0.11
 * @package		CMS
 */
class PageInfo
{
	var $content_id;
	var $content_title;
	var $content_alias;
	var $content_menutext;
	var $content_hierarchy;
	var $content_id_hierarchy;
	var $content_type;
	var $content_props;
	var $content_metadata;
	var $content_modified_date;
	var $content_last_modified_date;
	var $template_id;
	var $template_encoding;
	var $template_modified_date;
	var $cachable;

	function PageInfo()
	{
		$this->SetInitialValues();
	}

	function SetInitialValues()
	{
		$this->content_id = -1;
		$this->content_title = '';
		$this->content_alias = '';
		$this->content_menutext = '';
		$this->content_hierarchy = '';
		$this->content_metadata = '';
		$this->content_id_hierarchy = '';
		$this->content_modified_date = -1;
		$this->content_last_modified_date = -1;
		$this->content_props = array();
		$this->template_id = -1;
		$this->template_modified_date = -1;
		$this->template_encoding = '';
		$this->cachable = false;

		global $gCms;
		$db = &$gCms->GetDb();

		$query = 'SELECT MAX(modified_date) AS thedate FROM '.cms_db_prefix().'content c';
		$row = $db->GetRow($query);

		if ($row)
		{
			$this->content_last_modified_date = $db->UnixTimeStamp($row['thedate']);
		}
	}
}

/**
 * Class for doing template related functions.  Many of the Template object functions are just wrappers around these.
 *
 * @since		0.6
 * @package		CMS
 */
class PageInfoOperations
{
	function LoadPageInfoByContentAlias($alias)
	{
		$result = false;

		global $gCms;
		$db = &$gCms->GetDb();

		$row = '';

		if (is_numeric($alias) && strpos($alias, '.') === FALSE && strpos($alias, ',') === FALSE) //Fix for postgres
		{ 
			$query = "SELECT c.content_id, c.content_name, c.content_alias, c.menu_text, c.hierarchy, c.metadata, c.id_hierarchy, c.prop_names, c.modified_date AS c_date, c.cachable, t.template_id, t.encoding, t.modified_date AS t_date FROM ".cms_db_prefix()."templates t INNER JOIN ".cms_db_prefix()."content c ON c.template_id = t.template_id WHERE (c.content_alias = ? OR c.content_id = ?) AND c.active = 1";
			$row = &$db->GetRow($query, array($alias, $alias));
		}
		else
		{
			$query = "SELECT c.content_id, c.content_name, c.content_alias, c.menu_text, c.hierarchy, c.metadata, c.id_hierarchy, c.prop_names, c.modified_date AS c_date, c.cachable, t.template_id, t.encoding, t.modified_date AS t_date FROM ".cms_db_prefix()."templates t INNER JOIN ".cms_db_prefix()."content c ON c.template_id = t.template_id WHERE c.content_alias = ? AND c.active = 1";
			$row = &$db->GetRow($query, array($alias));
		}

		if ($row)
		{
			$onepageinfo = new PageInfo();
			$onepageinfo->content_id = $row['content_id'];
			$onepageinfo->content_title = $row['content_name'];
			$onepageinfo->content_alias = $row['content_alias'];
			$onepageinfo->content_menutext = $row['menu_text'];
			$onepageinfo->content_hierarchy = $row['hierarchy'];
			$onepageinfo->content_id_hierarchy = $row['id_hierarchy'];
			$onepageinfo->content_metadata = $row['metadata'];
			$onepageinfo->content_modified_date = $db->UnixTimeStamp($row['c_date']);
			$onepageinfo->content_props = explode(',', $row['prop_names']);
			$onepageinfo->template_id = $row['template_id'];
			$onepageinfo->template_encoding = $row['encoding'];
			$onepageinfo->template_modified_date = $db->UnixTimeStamp($row['t_date']);
			$onepageinfo->cachable = ($row['cachable'] == 1?true:false);
			$result =& $onepageinfo;
		}
		else
		{
			#Page isn't found.  Should we setup an alternate page?
			#if (get_site_preference('custom404template') > 0 && get_site_preference('enablecustom404') == "1")
			if (get_site_preference('enablecustom404') == "1")
			{
				$onepageinfo = new PageInfo();
				$onepageinfo->cachable = false;
				if (get_site_preference('custom404template') > 0)
					$onepageinfo->template_id = get_site_preference('custom404template');
				else
					$onepageinfo->template_id = 'notemplate';
				$onepageinfo->template_modified_date = time();
				$result =& $onepageinfo;
			}
		}

		return $result;
	}
}

# vim:ts=4 sw=4 noet
?>
