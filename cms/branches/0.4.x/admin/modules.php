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

require_once("../include.php");

check_login($config);

include_once("header.php");

if (count($cmsmodules) > 0) {

?>

	<div class="content">

	<h3>Module Admin</h3>

	<table cellspacing="0" class="admintable">
		<tr>
			<td>Module Name</td>
		</tr>

<?

	$curclass = "row1";

	foreach($cmsmodules as $key=>$value) {

		echo "<tr class=\"$curclass\">\n";
		echo "<td>$key</td>\n";
		echo "</tr>\n";

		($curclass=="row1"?$curclass="row2":$curclass="row1");
	}

?>

	</table>

	</div>

<?

}

include_once("footer.php");

?>
