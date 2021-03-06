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
#$Id$

class CoreMenuManager extends CmsModuleBase
{
	var $current_depth = 1;
	
	public function __construct()
	{
		parent::__construct();
	}

	function GetFriendlyName()
	{
		return $this->Lang('menumanager');
	}

	function setup()
	{
		$this->restrict_unknown_params();
		
		$this->create_parameter('collapse', false, $this->lang('help_collapse'), FILTER_VALIDATE_BOOLEAN);
		$this->create_parameter('loadprops', false, $this->lang('help_loadprops'), FILTER_VALIDATE_BOOLEAN);
		$this->create_parameter('items', 'contact,home', $this->lang('help_items'), FILTER_SANITIZE_STRING);
		$this->create_parameter('number_of_levels', '1', $this->lang('help_number_of_levels'), FILTER_SANITIZE_NUMBER_INT);
		$this->create_parameter('show_all', false, $this->lang('help_show_all'), FILTER_VALIDATE_BOOLEAN);
		$this->create_parameter('show_root_siblings', true, $this->lang('help_show_root_siblings'), FILTER_VALIDATE_BOOLEAN);
		$this->create_parameter('start_level', '2', $this->lang('help_start_level'), FILTER_SANITIZE_NUMBER_INT);
		$this->create_parameter('start_element', '1.2', $this->lang('help_childrenof'), FILTER_SANITIZE_STRING);
		$this->create_parameter('childrenof', 'home', $this->lang('help_start_element'), FILTER_SANITIZE_STRING);
		$this->create_parameter('start_page', 'home', $this->lang('help_start_page'), FILTER_SANITIZE_STRING);
		$this->create_parameter('template', 'simple_navigation.tpl', $this->lang('help_template'), FILTER_SANITIZE_STRING);
		$this->create_parameter('excludeprefix', '', $this->Lang('help_excludeprefix'), FILTER_SANITIZE_STRING);
		$this->create_parameter('includeprefix', '', $this->Lang('help_includeprefix'), FILTER_SANITIZE_STRING);
		
		//$this->register_module_plugin('menu');
		//$this->register_module_plugin('menu_children', 'menu_children_plugin_callback');
	}

	public function menu_children_plugin_callback($params, &$smarty)
	{
		$orig_params = $smarty->get_template_vars('orig_params');
		$params = array_merge($orig_params, $params);

		if (!isset($params['node']))
		{
			return;
		}
		
		$node = $params['node'];
		
		//print_r("<i>" . get_class($node) . " - " . $node->menutext . "</i><br /><br />");

		if ($node->has_children())
		{
			$this->current_depth++;

			//Handle number_of_levels param
			if (!isset($params['number_of_levels']) || $params['number_of_levels'] >= $this->current_depth)
			{
				//Handle collapse param
				if (!isset($params['collapse']) || $params['collapse'] != true || starts_with(cmsms()->get('pageinfo')->content_hierarchy . '.', $params['node']->hierarchy . '.'))
				{
					$this->display_menu($node->get_children(), $params, false);
				}
			}

			$this->current_depth--;
		}
	}
    
	public function display_menu($nodes, $params, $first_call = true)
	{
		$usefile = true;
		//$lang = CmsMultiLanguage::get_client_language();
		//$mdid = md5(cmsms()->variables['content_id'].implode('|', $params).$lang);
		//$mdid = md5(cmsms()->variables['content_id'].implode('|', $params));
		$template = coalesce_key($params, 'template', '');

		if (!endswith($template, '.tpl'))
		{
			$usefile = false;
		}

		if (is_array($nodes))
		{
			$count = 0;
			$usable_count = 0;
			$unset_ary = array();
			$sent_ary = array();

			foreach ($nodes as &$node)
			{
				//Pull our page's fields into the node
				$this->add_fields_to_node($node);
				
				//Now check to see if we actually want to show this thing
				//(either because it's not active, now showing in menu, or 
				//because of passed parameters)
				$this->should_show_node($node, $params);
				
				if ($node->show)
				{
					//Numeric Stuff
					$node->first = ($usable_count == 0);
					$node->last = false; //Set them all as false for now
					$node->index = $usable_count;
					$usable_count++;
					$sent_ary[] = $node;
				}
				
				$count++;
			}
			
			//Now set the last usable node as true
			$sent_ary[(count($sent_ary) - 1)]->last = true;
			
			$smarty = cms_smarty();
			$smarty->assign('count', count($sent_ary));
			$smarty->assign('nodelist', $sent_ary);

			if ($first_call)
			{
				$smarty->assign('orig_params', $params);
				$this->current_depth = 1;
			}

			if ($usefile)
				echo $this->Template->process($template, $mdid, false);
			else
				echo $this->Template->process_from_database('menu', $template, $mdid, false);
		}
	}
	
	public function show_classes_in_array($list)
	{
		$str = '';
		foreach ($list as $one_item)
		{
			$str .= ' ' . get_class($one_item);
		}
		return $str;
	}
	
	public function add_fields_to_node(&$node)
	{
		//$content = $node->get_content();
		//$node->url = $content->get_url(true, $lang);
		$node->url = $node->get_url(true);
		$node->menutext = $node->menu_text['en_US'];
		//$content->menutext = cms_htmlentities($content->get_property_value('menu_text', $lang));
		$node->haschildren = $node->has_children();
		$node->target = '';
		//if ($content->has_property('target'))
		//	$content->target = $content->get_property_value('target');
		$node->depth = $this->current_depth;
	}
	
	public function should_show_node(&$node, $params)
	{
		$include = true;
		$exclude = false;

		if (isset($params['includeprefix']))
		{
			$include = false;
			$prefixes = explode(',', $params['includeprefix']);
			foreach ($prefixes as $oneprefix)
			{
				if (starts_with(strtolower($node->page_alias), strtolower($oneprefix)))
				{
					$include = true;
					break;
				}
			}
		}

		if (isset($params['excludeprefix']))
		{
			$prefixes = explode(',', $params['excludeprefix']);
			foreach ($prefixes as $oneprefix)
			{
				if (starts_with(strtolower($node->page_alias), strtolower($oneprefix)))
				{
					$exclude = true;
					break;
				}
			}
		}

		$should_show = $node->active && $node->show_in_menu && ($include && !$exclude);

		//Override is show_all is true
		if (isset($params['show_all']) && $params['show_all'])
			$should_show = true;

		$node->show = $should_show;
	}
	
} // End of class

# vim:ts=4 sw=4 noet
?>
