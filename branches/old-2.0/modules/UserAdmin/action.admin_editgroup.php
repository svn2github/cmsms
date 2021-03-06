<?php // -*- mode:php; tab-width:4; indent-tabs-mode:t; c-basic-offset:4; -*-
#CMS - CMS Made Simple
#(c)2004-2008 by Ted Kulp (ted@cmsmadesimple.org)
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

// security
if (!isset($gCms)) die("Can't call actions directly!");
$user = CmsLogin::get_current_user();
if (!CmsAcl::check_core_permission('Manage Groups',$user)) die('permission denied');

// setup
if( !isset($params['gid']) )
	{
		die('insufficient parameters');
	}
$gid = (int)$params['gid'];
$group = CmsGroupOperations::load_group_by_id($gid);

// handle form operations
if( isset($params['cancel']) )
	{
		$this->redirect($id,'defaultadmin',$return_id,array('selected_tab'=>'groups'));
	}
else if( isset( $params['submit']) )
	{
		$group->name = trim(coalesce_key($params,'groupname',''));
		$group->active = trim(coalesce_key($params,'active',1));

		// don't alow special groups to be deactivated
		if( $group->id == 1 ) $group->active = 1;

		// save
		if( $group->save() )
			{
				$this->redirect($id,'defaultadmin',$return_id,array('selected_tab'=>'groups'));
			}
	}

$smarty->assign('group',$group);
echo $this->process_template('editgroup.tpl',$id,$return_id);

# 
# EOF
#
?>