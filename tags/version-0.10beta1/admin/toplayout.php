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

$CMS_ADMIN_PAGE=1;
$CMS_TOP_MENU='layout';
$CMS_ADMIN_TITLE='layout';
$CMS_EXCLUDE_FROM_RECENT=1;

require_once("../include.php");

check_login();

include_once("header.php");

?>

<div class="MainMenu">

<?php if ($themeObject->HasPerm('templatePerms')) { ?>
<div class="MainMenuItem">
<a href="listtemplates.php"><?php echo lang('templates') ?></a>
<span class="description"><?php echo lang('templatesdescription') ?></span>
</div>
<?php } ?>

<?php if ($themeObject->HasPerm('cssPerms') || $themeObject->HasPerm('cssAssocPerms')) { ?>
<div class="MainMenuItem">
<a href="listcss.php"><?php echo lang('stylesheets') ?></a>
<span class="description"><?php echo lang('stylesheetsdescription') ?></span>
</div>
<?php } 
$themeObject->DisplaySectionModules('layout');
?>

<div class="MainMenuItem">
<a href="index.php"><?php echo lang('mainmenu') ?></a>
</div>

</div> <!-- end MainMenu -->

<?php

include_once("footer.php");

# vim:ts=4 sw=4 noet
?>
