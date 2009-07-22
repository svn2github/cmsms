<?php
# CMS - CMS Made Simple
# (c)2004-6 by Ted Kulp (ted@cmsmadesimple.org)
# This project's homepage is: http://cmsmadesimple.org
#
# This program is free software; you can redistribute it and/or modify
# it under the terms of the GNU General Public License as published by
# the Free Software Foundation; either version 2 of the License, or
# (at your option) any later version.
#
# This program is distributed in the hope that it will be useful,
# BUT withOUT ANY WARRANTY; without even the implied warranty of
# MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.	See the
# GNU General Public License for more details.
# You should have received a copy of the GNU General Public License
# along with this program; if not, write to the Free Software
# Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA	02111-1307	USA
#
#$Id$

/**
 * Methods for modules to do miscellaneous functions
 *
 * @since		1.7
 * @package		CMS
 */

function cms_module_GetContentBlockInputBase(&$module,$blockname,$value = '',$params = array(),$adding = false)
{
  if( empty($blockname)  )
    {
      return FALSE;
    }

  $id = $blockname;
  @ob_start();
  $module->GetContentBlockInput($id,'',$blockname,$value,$params,$adding);
  $tmp = @ob_get_contents();
  @ob_end_clean();
  return $tmp;
}


function cms_module_GetContentBlockValueBase(&$module,$blockName,$blockParams,$inputParams)
{
  if( empty($blockName)  )
    {
      return FALSE;
    }

  $id = $blockName;
  @ob_start();
  $tmp = $module->GetContentBlockValue($id,'',$blockName,$blockParams,$inputParams);
  $tmp = @ob_get_contents();
  @ob_end_clean();
  return $tmp;
}


function cms_module_ValidateContentBlockValueBase(&$module,$blockName,$value,$blockParams)
{
  if( empty($blockName)  )
    {
      return FALSE;
    }

  $id = $blockName;
  @ob_start();
  $tmp = $module->ValidateContentBlockValue($blockName,$value,$blockparams);
  $tmp = @ob_get_contents();
  @ob_end_clean();
  return $tmp;
}

?>