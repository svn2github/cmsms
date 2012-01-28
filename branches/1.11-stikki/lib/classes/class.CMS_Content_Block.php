<?php
# CMS - CMS Made Simple
# (c)2004 by Ted Kulp (tedkulp@users.sf.net)
# This project's homepage is: http://www.cmsmadesimple.org
#
# This program is free software; you can redistribute it and/or modify
# it under the terms of the GNU General Public License as published by
# the Free Software Foundation; either version 2 of the License, or
# (at your option) any later version.
#
# This program is distributed in the hope that it will be useful,
# BUT withOUT ANY WARRANTY; without even the implied warranty of
# MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
# GNU General Public License for more details.
# You should have received a copy of the GNU General Public License
# along with this program; if not, write to the Free Software
# Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
#
#$Id: class.content.inc.php 6905 2011-02-20 22:23:40Z calguy1000 $

/**
 * @package CMS
 */

/**
 * Generic content class.
 *
 * As for some treatment we don't need the extra properties of the content
 * we load them only when required. However, each function which makes use
 * of extra properties should first test if the properties object exist.
 *
 * @since		1.11
 * @package		CMS
 */
final class CMS_Content_Block
{
  private function __construct() {}

  private static function content_return($result, &$params, &$smarty)
  {
    if ( empty($params['assign']) )
      {
	return $result;
      }
    else
      {
	$smarty->assign(trim($params['assign']), $result);
	return '';
      }
  }

  public static function smarty_fetch_block($params,&$smarty)
  {
    $gCms = cmsms();
    $smarty = $gCms->GetSmarty();
    $contentobj = $gCms->variables['content_obj'];
    if (is_object($contentobj))
      {
	$id = '';
	$modulename = '';
	$action = '';
	$inline = false;
	if (isset($_REQUEST['module'])) $modulename = $_REQUEST['module'];
	if (isset($_REQUEST['id']))
	  {
	    $id = $_REQUEST['id'];
	  }
	elseif (isset($_REQUEST['mact']))
	  {
	    $ary = explode(',', cms_htmlentities($_REQUEST['mact']), 4);
	    $modulename = (isset($ary[0])?$ary[0]:'');
	    $id = (isset($ary[1])?$ary[1]:'');
	    $action = (isset($ary[2])?$ary[2]:'');
	    $inline = (isset($ary[3]) && $ary[3] == 1?true:false);
	  }
	if (isset($_REQUEST[$id.'action'])) $action = $_REQUEST[$id.'action'];
	else if (isset($_REQUEST['action'])) $action = $_REQUEST['action'];

	//Only consider doing module processing if
	//a. There is no block parameter
	//b. then
	//   1. $id is cntnt01
	//   2. or inline is false

	if (!isset($params['block']) && ($id == 'cntnt01' || $id == '_preview_' || ($id != '' && $inline == false)))
	  {
	    // todo, would be neat here if we could get a list of only frontend modules.
	    $installedmodules = ModuleOperations::get_instance()->GetInstalledModules();
	    if( count($installedmodules) )
	      {
		// case insensitive module match.
		foreach( $installedmodules  as $key )
		  {
		    if (strtolower($modulename) == strtolower($key))
		      {
			$modulename = $key;
		      }
		  }
		      
		if (!isset($modulename) || empty($modulename) )
		  {
		    // no module specified.
		    @trigger_error('Attempt to call a module action, without specifying a valid module name');
		    return self::content_return('', $params, $smarty);
		  }

		$modobj = ModuleOperations::get_instance()->get_module_instance($modulename);
		if( !$modobj )
		  {
		    // module not found... couldn't even autoload it.
		    @trigger_error('Attempt to access module '.$modulename.' which could not be found (is it properly installed and configured?');
		    return self::content_return('', $params, $smarty);
		  }

		if ($modobj->IsPluginModule() )
		  {
		    @ob_start();
		    unset($params['block']);
		    unset($params['label']);
		    unset($params['wysiwyg']);
		    unset($params['oneline']);
		    unset($params['default']);
		    unset($params['size']);
		    $params = array_merge($params, GetModuleParameters($id));
		    $returnid = '';
		    if (isset($params['returnid']))
		      {
			$returnid = $params['returnid'];
		      }
		    else
		      {
			$returnid = $contentobj->Id();
		      }
		    $result = $modobj->DoActionBase($action, $id, $params, $returnid);
		    if ($result !== FALSE)
		      {
			echo $result;
		      }
		    $modresult = @ob_get_contents();
		    @ob_end_clean();
		    return self::content_return($modresult, $params, $smarty);
		  }
		else
		  {
		    @trigger_error('Attempt to access module '.$key.' which could not be found (is it properly installed and configured?');
		    return self::content_return("<!-- Not a tag module -->\n", $params, $smarty);
		  }
	      }
	  }
	else
	  {
	    $result = '';
	    $oldvalue = $smarty->caching;
	    $smarty->caching = false;
	    $result = $smarty->fetch(str_replace(' ', '_', 'content:' . (isset($params['block'])?$params['block']:'content_en')), ''
				     , $contentobj->Id());
	    $smarty->caching = $oldvalue;
	    return self::content_return($result, $params, $smarty);
	  }
      }
    return _smarty_cms_function_content_return('', $params, $smarty);
  }
}

?>