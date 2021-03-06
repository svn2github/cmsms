<?php
#CMS - CMS Made Simple
#(c)2004-2011 by Ted Kulp (wishy@users.sf.net)
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

function smarty_function_cms_init_editor($params, &$template)
{
  $smarty = $template->smarty;
  // if the editor is not specified.
  $wysiwyg = '';
  if( isset($params['wysiwyg']) )
    {
      $wysiwyg = trim($params['wysiwyg']);
    }

  // get the frontend editor preference
  if( !$wysiwyg )
    {
      $wysiwyg = get_site_preference('frontendwysiwyg');
    }

  if( !$wysiwyg || (int)$wysiwyg < 0 ) return;
  
  $mod = cms_utils::get_module($wysiwyg);
  if( !is_object($mod) ) return;
  if( !$mod->IsWYSIWYG() ) return;

  // check to see if it is active
  if( !isset($params['force']) || $params['force'] != 0 )
    {
      if( !$mod->WYSIWYGActive() ) return;
    }
  
  // get the output
  $output = $mod->WYSIWYGGenerateHeader();

  if( !$output ) return;

  // assign it or echo it.
  if( isset($params['assign']) )
    {
      $smarty->assign(trim($params['assign']).$output);
      return;
    }
  return $output;
}


function smarty_cms_help_function_cms_init_editor()
{
  echo lang('help_function_cms_init_editor');
}


function smarty_cms_about_function_cms_init_editor()
{
	?>
	<p>Author: Robert Campbell&lt;calguy1000@cmsmadesimple.org&gt;</p>
	<p>Version: 1.0</p>
	<p>
	Change History:<br/>
	None
	</p>
	<?php
}

#
# EOF
#
?>
