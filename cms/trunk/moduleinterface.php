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

/**
 * Page for display module pages that are completly self-generated and
 * have no official page id.
 *
 * @since 0.4
 */
$starttime = microtime();

@ob_start();

require_once(dirname(__FILE__)."/include.php");

$smarty = new Smarty_ModuleInterface($config);
$gCms->smarty = &$smarty;

$smarty->id = (isset($_REQUEST['id'])?$_REQUEST['id']:'');
$gCms->variables['page'] = (isset($_REQUEST[$smarty->id.'returnid'])?$_REQUEST[$smarty->id.'returnid']:"");
$smarty->page = (isset($_REQUEST[$smarty->id.'returnid'])?$_REQUEST[$smarty->id.'returnid']:'');
$smarty->module = (isset($_REQUEST['module'])?$_REQUEST['module']:'');

$showtemplate = true;
if (isset($_POST["showtemplate"]) && $_POST["showtemplate"] == "false") $showtemplate = false;
else if (isset($_POST[$smarty->id."showtemplate"]) && $_POST[$smarty->id."showtemplate"] == "false") $showtemplate = false;
else if (isset($_GET["showtemplate"]) && $_GET["showtemplate"] == "false") $showtemplate = false;
else if (isset($_GET[$smarty->id."showtemplate"]) && $_GET[$smarty->id."showtemplate"] == "false") $showtemplate = false;

$smarty->showtemplate = $showtemplate;

$params = array_merge($_GET, $_POST);
$smarty->params = $params;

#$old_error_handler = set_error_handler("ErrorHandler404");
$html = $smarty->fetch('module:'.$gCms->variables['page']) . "\n";

#Perform the content postrender callback
foreach($gCms->modules as $key=>$value)
{
	if (isset($gCms->modules[$key]['content_postrender_function']) &&
		$gCms->modules[$key]['Installed'] == true &&
		$gCms->modules[$key]['Active'] == true)
	{
		call_user_func_array($gCms->modules[$key]['content_postrender_function'], array(&$gCms, &$html));
	}
}

#set_error_handler($old_error_handler);

echo $html;

$endtime = microtime();

if ($showtemplate)
{
	echo "<!-- Generated in ".microtime_diff($starttime,$endtime)." seconds by CMS Made Simple $CMS_VERSION (not cached)-->\n";
	echo "<!-- Generated by CMS Made Simple - Released under the GPL - http://cmsmadesimple.org -->\n";
}

if ($config["debug"] == true)
{
	echo $sql_queries;
}

#header("Content-Language: " . $current_language);
header("Content-Type: text/html; charset=" . get_encoding());
@ob_flush();

# vim:ts=4 sw=4 noet
?>
