<?php
#CommonCode. A plugin for CMS - CMS Made Simple
#Copyright (c) 2004 by Rob Allen <rob@akrabat.com>
#This project's homepage is: http://www.akrabat.com
#
#CMS- CMS Made Simple is Copyright (c) Ted Kulp (wishy@users.sf.net)
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

// Set the module name -- should be the name of the class
$module_name = "CommonCode";


// Register module
cms_mapi_register_module($module_name, "Rob Allen <rob@akrabat.com>", "1.2");

// Register callback help and about functions
cms_mapi_register_help_function($module_name, 'commoncode_module_help');
cms_mapi_register_about_function($module_name, 'commoncode_module_about');

// Load functions
require_once(dirname(__FILE__).'/categories.inc.php');

function commoncode_module_help($cms)
{
	?>
	<h3>What does this do?</h3>
	<p>CommonCode is a module containing common functionality used
	by other modules such as Bookmarks. It does nothing itself!</p>
	<?php
}

function commoncode_module_about()
{
?>
<p>Author: Rob Allen &lt;rob@akrabat.com&gt;</p>
<dl>
	<dt>Version: 1.0</dt>
		<dd>Initial release.<br>Functions provided: RedirectTo(), getRequestValue() and DB().</dd>
	<dt>Version: 1.1</dt>
		<dd>Added categories.inc.php<br>
		Added getParamValue()</dd>
	<dt>Version: 1.2</dt>
		<dd>Registered public functions with CMS</dd>
		<dd>Removed functions that are now in core code.</dd>
</dl>
<?php
}

# vim:ts=4 sw=4 noet
?>
