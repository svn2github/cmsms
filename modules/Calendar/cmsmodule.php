<?php
# Calendar. A plugin for CMS - CMS Made Simple
# Copyright (c) 2004 by Rob Allen <rob@akrabat.com>
#
# CMS- CMS Made Simple is Copyright (c) Ted Kulp (wishy@users.sf.net)
#
# This program is free software; you can redistribute it and/or modify
# it under the terms of the GNU General Public License as published by
# the Free Software Foundation; either version 2 of the License, or
# (at your option) any later version.
#
# This program is distributed in the hope that it will be useful,
# but WITHOUT ANY WARRANTY; without even the implied warranty of
# MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
# GNU General Public License for more details.
# You should have received a copy of the GNU General Public License
# along with this program; if not, write to the Free Software
# Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA

// Set the module name -- should be the name of the class
$module_name = "Calendar";

// Load class definition 
require_once(dirname(__FILE__).'/calendar.php');

// Register module
cms_mapi_register_module($module_name, "Rob Allen <rob@akrabat.com>", AkraCalendar::Version());

//Register the dependency
cms_mapi_register_dependency($module_name, 'CommonCode', AkraCalendar::MinCommonCodeVersion());

// Register module to work as a plugin (cms_module)
cms_mapi_register_plugin_module($module_name);

// Register callback functions
cms_mapi_register_install_function($module_name, 'calendar_module__install');
cms_mapi_register_upgrade_function($module_name, 'calendar_module__upgrade', true);
cms_mapi_register_uninstall_function($module_name, 'calendar_module__uninstall');
cms_mapi_register_execute_function($module_name, 'calendar_module__execute');
cms_mapi_register_executeuser_function($module_name, 'calendar_module__executeuser');
cms_mapi_register_executeadmin_function($module_name, 'calendar_module__executeadmin');

// Register callback help and about functions
cms_mapi_register_help_function($module_name, 'calendar_module__help');
cms_mapi_register_about_function($module_name, 'calendar_module__about');

//Register module to work as a content type
cms_mapi_register_content_module($module_name);
cms_mapi_register_content_module_set_properties_function($module_name, 'calendar_module__content_set_properties');
cms_mapi_register_content_module_edit_function($module_name, 'calendar_module__content_edit');
cms_mapi_register_content_module_fill_params_function($module_name, 'calendar_module__content_fill_params');
cms_mapi_register_content_module_get_url_function($module_name, 'calendar_module__content_get_url');
cms_mapi_register_content_module_show_function($module_name, 'calendar_module__content_show');



function calendar_module__about()
{
	echo <<<EOT
	<p>Author: Rob Allen &lt;rob@akrabat.com&gt;</p>
	<dl>
		<dt>Version: 0.1</dt>
		<dd>Initial release.</dd>
	</dl>

EOT;

}

function calendar_module__help($cms)
{
	$calendar = new AkraCalendar($cms); /* @var $calendar AkraCalendar */
	$calendar->Help();
}

function calendar_module__install($cms)
{
	$calendar = new AkraCalendar($cms); /* @var $calendar AkraCalendar */ 
	$calendar->Install();
}

function calendar_module__upgrade($cms, $oldversion, $newversion)
{
	$calendar = new AkraCalendar($cms); /* @var $calendar AkraCalendar */
	$calendar->Upgrade();
}

function calendar_module__uninstall($cms)
{
	$calendar = new AkraCalendar($cms); /* @var $calendar AkraCalendar */
	$calendar->Uninstall();
}

function calendar_module__execute($cms, $id, $params)
{
	$calendar = new AkraCalendar($cms); /* @var $calendar AkraCalendar */
	$calendar->Execute();
}

function calendar_module__executeuser($cms, $id, $return_id, $params)
{
	$calendar = new AkraCalendar($cms); /* @var $calendar AkraCalendar */
	$calendar->ExecuteUser();
}

function calendar_module__executeadmin($cms,$id)
{
	$calendar = new AkraCalendar($cms); /* @var $calendar AkraCalendar */
	$calendar->ExecuteAdmin();
}

# vim:ts=4 sw=4 noet
?>