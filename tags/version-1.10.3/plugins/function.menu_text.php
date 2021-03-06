<?php
#CMS - CMS Made Simple
#(c)2004 by Ted Kulp (wishy@users.sf.net)
#This project's homepage is: http://www.cmsmadesimple.org
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

function smarty_cms_function_menu_text($params, &$smarty)
{
	$gCms = cmsms();
	$content_obj = &$gCms->variables['content_obj'];
	$config = &$gCms->config;
	if (is_object($content_obj) && $content_obj->Id() == -1)
	{
		#We've a custom error message...  set a message
		$result="404 Error";
	}
	else
	{
	  $result = $content_obj->MenuText();
		if (!(isset($config["use_smarty_php_tags"]) && $config["use_smarty_php_tags"] == true))
		{
			$result = preg_replace("/\{\/?php\}/", "", $result);
		}
	}
	if( isset($params['assign']) ){
		$smarty->assign(trim($params['assign']),$result);
		return;
	}
	return $result;
}

function smarty_cms_help_function_menu_text() {
  echo lang('help_function_menu_text');
}

function smarty_cms_about_function_menu_text() {
	?>
	<p>Author: Ted Kulp&lt;tedkulp@users.sf.net&gt;</p>
	<p>Version: 1.0</p>
	<p>
	Change History:<br/>
	None
	</p>
	<?php
}
?>
