<?php // -*- mode:php; tab-width:4; indent-tabs-mode:t; c-basic-offset:4; -*-
#CMS - CMS Made Simple
#(c)2004-2007 by Ted Kulp (ted@cmsmadesimple.org)
#This project's homepage is: http://cmsmadesimple.org
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
#$Id$

/**
 * Static methods for handling templates.
 *
 * @author Ted Kulp
 * @since 2.0
 * @version $Revision$
 * @modifiedby $LastChangedBy$
 * @lastmodified $Date$
 * @license GPL
 **/
class CmsTemplateOperations extends CmsObject
{
	static private $instance = NULL;

	function __construct()
	{
		parent::__construct();
	}
	
	/**
	 * Get an instance of this object, though most people should be using
	 * the static methods instead.  This is more for compatibility than
	 * anything else.
	 *
	 * @return CmsTemplateOperations The instance of the singleton object.
	 * @author Ted Kulp
	 **/
	static public function get_instance()
	{
		if (self::$instance == NULL)
		{
			self::$instance = new CmsTemplateOperations();
		}
		return self::$instance;
	}

	function LoadTemplates()
	{	
		return cmsms()->template->find_all(array('order' => 'name ASC'));
	}

	function LoadTemplateByID($id)
	{
		return cmsms()->template->find_by_id($id);
	}

	function LoadTemplateByContentAlias($alias)
	{
		return cmsms()->template->find_by_query("SELECT t.* FROM ".cms_db_prefix()."templates t INNER JOIN ".cms_db_prefix()."content c ON c.template_id = t.template_id WHERE (c.content_alias = ? OR c.content_id = ?) AND c.active = 1", array($alias, $alias));
	}

	function LoadTemplateAndContentDates($alias)
	{
		$result = array();

		$query = "SELECT c.modified_date AS c_date, t.modified_date AS t_date FROM ".cms_db_prefix()."templates t INNER JOIN ".cms_db_prefix()."content c ON c.template_id = t.template_id WHERE (c.content_alias = ? OR c.content_id = ?) AND c.active = 1";
		$dbresult = cms_db()->Execute($query, array($alias, $alias));

		while ($dbresult && !$dbresult->EOF)
		{
			$result[] = $dbresult->fields['c_date'];
			$result[] = $dbresult->fields['t_date'];
			$dbresult->MoveNext();
		}
		
		if ($dbresult) $dbresult->Close();

		return $result;
	}

	function LoadDefaultTemplate()
	{
		return cmsms()->template->find_by_default(1);
	}

	function UsageCount($id)
	{
		return cmsms()->content->find_count_by_template_id($id);
	}

	function InsertTemplate($template)
	{
		$result = -1; 

		$dbresult = $template->save();

		if ($dbresult !== false)
		{
			$result = $template->id;
			CmsContentOperations::do_cross_reference($result, 'template', $template->content);
		}

		return $result;
	}

	function UpdateTemplate($template)
	{
		$result = false; 

		$dbresult = $template->save();

		if ($dbresult !== false)
		{
			$result = true;
			CmsContentOperations::do_cross_reference($template->id, 'template', $template->content);
		}

		return $result;
	}

	function DeleteTemplateByID($id)
	{
		return cmsms()->template->delete($id);
	}

	function CountPagesUsingTemplateByID($id)
	{
		$result = 0;

        $query = "SELECT count(*) AS count FROM ".cms_db_prefix()."content WHERE template_id = ?";
        $row = cms_db()->GetRow($query,array($id));

		if ($row)
		{
			if (isset($row["count"]))
			{
				$result = $row["count"];
			}
		}

		return $result;
	}

	function StylesheetsUsed()
	{
		$result = 0;

        $query = "SELECT count(*) AS count FROM ".cms_db_prefix()."templates WHERE stylesheet is not null and stylesheet != ''";
        $row = cms_db()->GetRow($query);

		if ($row)
		{
			if (isset($row["count"]))
			{
				$result = $row["count"];
			}
		}

		return $result;
	}

	function TouchAllTemplates($blob_name='')
	{
		$result = false;

		$dbresult = false;

		$time = cms_db()->DBTimeStamp(time());
		if ($blob_name != '')
		{
			$query = "UPDATE ".cms_db_prefix()."templates SET modified_date = ".$time." WHERE template_content like ?";
			$dbresult = cms_db()->Execute($query,array('%{html_blob name="'.$blob_name.'"}%'));
		}
		else
		{
			$query = "UPDATE ".cms_db_prefix()."templates SET modified_date = ".$time;
			$dbresult = cms_db()->Execute($query);
		}

		if ($dbresult !== false)
		{
			$result = true;
		}

		return $result;
	}

	function CheckExistingTemplateName($name)
	{
		$result = false;

		$query = "SELECT template_id from ".cms_db_prefix()."templates WHERE template_name = ?";
		$row = cms_db()->GetRow($query,array($name));

		if ($row)
		{
			$result = true; 
		}

		return $result;
	}
	
	function TemplateDropdown($id = 'template_id', $selected_id = -1, $othertext = '', $show_hidden = false)
	{
		$result = "";
		
		$templateops = cmsms()->GetTemplateOperations();

		$alltemplates = $templateops->LoadTemplates();
		
		if (count($alltemplates) > 0)
		{
			$result .= '<select name="'.$id.'"';
			if ($othertext != '')
			{
				$result .= ' ' . $othertext;
			}
			$result .= '>';
			#$result .= '<option value="">Select Template</option>';
			foreach ($alltemplates as $onetemplate)
			{
				if ($onetemplate->active == true || $show_hidden == true)
				{
					$result .= '<option value="'.$onetemplate->id.'"';
					if ($onetemplate->id == $selected_id || ($selected_id == -1 && $onetemplate->default == true))
					{
						$result .= ' selected="selected"';
					}
					$result .= '>'.$onetemplate->name.'</option>';
				}
			}
			$result .= '</select>';
		}
		
		return $result;
	}
}

class TemplateOperations extends CmsTemplateOperations
{
}

# vim:ts=4 sw=4 noet
?>