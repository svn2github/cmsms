<?php // -*- mode:php; tab-width:4; indent-tabs-mode:t; c-basic-offset:4; -*-
#CMS - CMS Made Simple
#(c)2004-2006 by Ted Kulp (ted@cmsmadesimple.org)
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

class CmsAcl extends CmsObject
{	
	static private $instance = NULL;
	
	function __construct()
	{
		parent::__construct();
	}
	
	/**
	 * Returns an instance of the CmsAcl singleton.
	 *
	 * @return CmsAcl The singleton CmsAcl instance
	 * @author Ted Kulp
	 **/
	static public function get_instance()
	{
		if (self::$instance == NULL)
		{
			self::$instance = new CmsAcl();
		}
		return self::$instance;
	}
	
	public static function check_permission($module, $extra_attr, $permission, $object_id, $group = null, $user = null)
	{
		$groups = array();
		
		if ($group == null && $user != null)
		{
			//Return true if we're the #1 account
			if ($user->id == 1)
				return true;

			$groups = $user->groups;
		}
		else if ($group != null && $user == null)
		{
			$groups[] = $group;
		}
		else
		{
			return false;
		}
		
		$groupids = array('-1');
		foreach ($groups as $group)
		{
			if ($group != null)
			{
				//Return true if we're in the Admin group
				if ($group->name == 'Admin')
					return true;

				$groupids[] = $group->id;
			}
		}
		
		$groupids = implode(',', $groupids);

		if ($groupids != '')
		{
			$groupids = "AND gp.group_id in ({$groupids})";
		}
		
		$cms_db_prefix = cms_db_prefix();
		$defn = self::get_permission_definition($module, $extra_attr, $permission);
		
		$result = false;
		
		if ($defn['hierarchical'])
		{				
			$query = "SELECT max(gp.has_access)
						FROM {$cms_db_prefix}{$defn['table']} c, {$cms_db_prefix}{$defn['table']} c2 
							LEFT OUTER JOIN {$cms_db_prefix}group_permissions gp ON gp.object_id = c.id 
							INNER JOIN {$cms_db_prefix}permission_defns pd ON pd.id = gp.permission_defn_id 
						WHERE (c2.lft BETWEEN c.lft AND c.rgt) 
							AND c2.id = ? 
							AND pd.module = ? 
							AND pd.extra_attr = ? 
							AND pd.name = ? 
							{$groupids}
						GROUP BY gp.object_id 
						ORDER BY c.lft DESC, gp.group_id DESC 
						LIMIT 1";
			
			$result = cms_db()->GetOne($query, array($object_id, $module, $extra_attr, $permission));
		}
		else
		{		
			$query = "SELECT gp.has_access
						FROM {$cms_db_prefix}group_permissions gp 
						INNER JOIN {$cms_db_prefix}permission_defns pd ON pd.id = gp.permission_defn_id 
						WHERE gp.object_id = ? AND pd.module = ? AND pd.extra_attr = ? AND pd.name = ? {$groupids}";
					
			$result = cms_db()->GetOne($query, array($object_id, $module, $extra_attr, $permission));
		}

		//Make sure we get a real boolean...  php is so weird sometimes
		if (!$result)
		{
			return false;
		}
		else
		{
			return true;
		}
	}
	
	static public function get_permission_definition($module, $extra_attr, $permission)
	{
		return cms_db()->GetRow('SELECT * FROM ' . cms_db_prefix() . 'permission_defns WHERE module = ? AND extra_attr = ? AND name = ?', array($module, $extra_attr, $permission));
	}
	
	static public function create_permission($module, $extra_attr, $name, $hierarchical = false, $table = '')
	{
		$result = null;
		
		$row = cms_db()->GetOne('SELECT * FROM ' . cms_db_prefix() . 'permission_defn WHERE module = ? AND extra_attr = ? AND name = ?', array($module, $extra_attr, $name));
		
		if (!$row)
		{
			$result = cms_db()->Execute('INSERT INTO ' . cms_db_prefix() . 'permission_defn (module, extra_atr, name, hierarchical, table) VALUES (?, ?, ?, ?, ?)');
		}
		
		if ($result)
			return cms_db()->Insert_ID();

		return false;
	}
	
	static public function delete_permission($module, $extra_attr, $name)
	{
		$query = "DELETE FROM " . cms_db_prefix() . "permission_defn WHERE module = ? AND extra_attr = ? AND name = ?";
		$result = cms_db()->Execute($query, array($module, $extra_attr, $name));
		
		if ($result)
			return true;
			
		return false;
	}
}

# vim:ts=4 sw=4 noet
?>