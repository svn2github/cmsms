<?php
#CMS - CMS Made Simple
#(c)2004 by Ted Kulp (ted@cmsmadesimple.org)
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
#

if( !cmsms() ) exit();

header("Content-type:text/javascript; charset=utf-8");

// Adapted from http://www.php.net/manual/en/function.session-id.php#54084
// session_id() returns an empty string if there is no current session, sotest if a session already exists before calling session_start() to prevent error notices:
if(session_id() == '') {
	session_start();
}

$frontend=false;
if (isset($params['frontend']) && $params['frontend'] == true) {
  $frontend=true;
  echo 'hi'; // Stikki says: hi hi, how you doing?
}

$templateid='';
if (isset($params['templateid'])) $templateid=$params['templateid'];

$languageid='';
if (isset($params['languageid'])) $languageid=$params['languageid'];



$configcontent = microtiny_utils::GenerateConfig($frontend,$templateid,$languageid);
echo $configcontent;

exit();

#
# EOF
#
?>