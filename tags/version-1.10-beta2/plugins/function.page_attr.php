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

function smarty_cms_function_page_attr($params, &$smarty)
{
  $result = '';
  $key = '';

  if( isset($params['key']) ) {
    $key = $params['key'];
    $gCms = cmsms();
	$contentops = $gCms->GetContentOperations();
	$contentobj = $contentops->getContentObject();
    if( is_object($contentobj) )
      {
	
	$result = $contentobj->GetPropertyValue($key);
	if( $result == -1 ) $result = '';
      }
    
    if( isset($params['assign']) )
      {
	$smarty =& $gCms->GetSmarty();
	$smarty->assign($params['assign'],$result);
	return;
      }
  }

  return $result;
}
function smarty_cms_help_function_page_attr() {
  echo lang('help_function_page_attr');
}

function smarty_cms_about_function_page_attr() {
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
