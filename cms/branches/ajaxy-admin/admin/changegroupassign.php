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

require_once("../include.php");

check_login();
$group_id= - 1;
if (isset($_POST["group_id"])) $group_id = $_POST["group_id"];
else if (isset($_GET["group_id"])) $group_id = $_GET["group_id"];

$submitted= - 1;
if (isset($_POST["submitted"])) $submitted = $_POST["submitted"];
else if (isset($_GET["submitted"])) $submitted = $_GET["submitted"];

$group_name="";

if (isset($_POST["cancel"])) {
	redirect("topusers.php");
	return;
}

$userid = get_userid();
$access = check_permission($userid, 'Modify Group Assignments');
$use_ajax=get_preference($userid, 'ajax', false);
if ($use_ajax)
    {
    $xajax = new xajax("ajax_changegroupassign.php");
    $xajax->registerFunction("usersInGroup");
    $xajax->registerFunction("saveChange");
    $xajax->processRequests();
    }

$message = '';

include_once("header.php");
if ($use_ajax)
    {
    $xajax->printJavascript();
    }

if (!$access) {
	echo "<div class=\"pageerrorcontainer\"><p class=\"pageerror\">".lang('noaccessto',array(lang('modifygrouppermissions')))."</p></div>";
}
else {

?>

<div class="pagecontainer">
	<p class="pageheader"><?php echo lang('usersassignedtogroup',array($group_name))?></p>
<?php

/*
	if ($group_id != '' && $group_id != '-1')
	{
		$query = "SELECT group_name FROM ".cms_db_prefix()."groups WHERE group_id = ".$group_id;
		$result = $db->Execute($query);

		if ($result && $result->RowCount() > 0)
            {
			$row = $result->FetchRow();
			$group_name = $row['group_name'];
		    }
	}
*/

    // always display the group pulldown
    $groups = GroupOperations::LoadGroups();
    if (count($groups) > 0)
        {
        echo '<form id="groupname" method="post" action="changegroupassign.php">';
        echo '<div class="pageoverflow">';
        echo '<p class="pagetext">Group Name:</p>';
        echo '<p class="pageinput">';
        echo '<select name="group_id"';
        if ($use_ajax)
            {
            echo 'onchange="xajax_usersInGroup(this.options[this.selectedIndex].value);"';
            }
        echo '><option value="-1">Select a Group</option>';
        foreach ($groups as $onegroup)
            {
            echo '<option value="'.$onegroup->id.'"';
            if ($onegroup->id == $group_id)
                {
                echo ' selected="selected"';
                }
            echo '>'.$onegroup->name.'</option>';
            }
        echo '</select>';
        echo '<input id="groupsubmit" type="submit" value="'.lang('selectgroup').'" /></p>';
        if ($use_ajax)
            {
            ?>
            <script type="text/javascript">
                var item=document.getElementById('groupsubmit');
                if (item)
                    {
                    item.style.visibility = 'hidden';
                    }
            </script>
            <br /><div id="ajaxarea"></div>
            <?php
            }
        echo '</div></form>';
        }
    if ($group_id != -1 && $submitted == -1)
        {
        // a group has been selected
        }
    else if ($group_id != -1 && $submitted != -1)
        {
        // we have group preferences
        }
echo '</div>';
}
echo '<p class="pageback"><a class="pageback" href="'.$themeObject->BackUrl().'">&#171; '.lang('back').'</a></p>';

include_once("footer.php");

# vim:ts=4 sw=4 noet
?>

