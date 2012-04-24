<?php
#CMS - CMS Made Simple
#(c)2004-2012 by Ted Kulp (wishy@users.sf.net)
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

function smarty_cms_function_cms_session_start($params, $template) {
  if( !isset($params['auto']) ) {
    // just start the thing. (this will create the cookie on the user side)
    cms_session::start();
  }
  else {
    // auto flag... see if we already have the cookie.
    if( cms_cookies::exists(cms_session::name()) )
      {
	cms_session::start();
      }
  }
}

function smarty_cms_help_function_cms_session_start() {
  echo lang('help_function_cms_session_start');
}

function smarty_cms_about_function_cms_session_start() {
	?>
        <p>Author: Robert Campbell &lt;calguy1000@cmsmadesimple.org&gt;</p>
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