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

function smarty_cms_function_html_blob($params, &$smarty)
{
	global $gCms;
	$config =& $gCms->GetConfig();

	$oldvalue = $smarty->caching;
	$smarty->caching = !$config['debug'];

	$html = $smarty->fetch('globalcontent:'.$params['name']);

	$smarty->caching = $oldvalue;

	return $html;
}

function smarty_cms_help_function_html_blob() {
	?>
	<h3>What does this do?</h3>
	<p>See the help for global_content for a description.</p>
	<?php
}

function smarty_cms_about_function_html_blob() {
	?>
	<p>Author: Ted Kulp&lt;ted@cmsmadesimple.org&gt;</p>
	<p>Version: 1.0</p>
	<p>
	Change History:<br/>
	None
	</p>
	<?php
}
?>
