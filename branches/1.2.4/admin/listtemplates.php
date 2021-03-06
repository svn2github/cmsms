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
#$Id: listtemplates.php 3924 2007-05-09 17:46:54Z tsw $

$CMS_ADMIN_PAGE=1;

require_once("../include.php");
require_once("../lib/classes/class.template.inc.php");

check_login();

include_once("header.php");
global $gCms;
$db =& $gCms->GetDb();

if (isset($_GET["message"])) {
	$message = preg_replace('/\</','',$_GET['message']);
	echo '<div class="pagemcontainer"><p class="pagemessage">'.$message.'</p></div>';
}

?>

<form action="multitemplate.php" method="post">
<div class="pagecontainer">
	<div class="pageoverflow">

<?php

	$userid	= get_userid();
	$add = check_permission($userid, 'Add Templates');
	$edit = check_permission($userid, 'Modify Templates');
	$all = check_permission($userid, 'Modify Any Page');
	$remove	= check_permission($userid, 'Remove Templates');
	
	global $gCms;
	$templateops =& $gCms->GetTemplateOperations();

	if ($all && isset($_GET["action"]) && $_GET["action"] == "setallcontent") {
		if (isset($_GET["template_id"])) {
			$query = "UPDATE ".cms_db_prefix()."content SET template_id = ?";
			$result = $db->Execute($query, array($_GET['template_id']));
			if ($result) {
				$query = "UPDATE ".cms_db_prefix()."content SET modified_date = ".$db->DBTimeStamp(time());
				$db->Execute($query);
				echo '<p>'.lang('allpagesmodified').'</p>';
			} else {
				echo '<p class="error">'.lang('errorupdatingpages').'</p>';
			}
		}
	}

	if (isset($_GET['setdefault']))
	{
		$templatelist = $templateops->LoadTemplates();
		foreach ($templatelist as $onetemplate)
		{
			if ($onetemplate->id == $_GET['setdefault'])
			{
				$onetemplate->default = 1;
				$onetemplate->active = 1;
				$onetemplate->Save();
			}
			else
			{
				$onetemplate->default = 0;
				$onetemplate->Save();
			}
		}
	}

	if (isset($_GET['setactive']) || isset($_GET['setinactive']))
	{
		$theid = '';
		if (isset($_GET['setactive']))
		{
			$theid = $_GET['setactive'];
		}
		if (isset($_GET['setinactive']))
		{
			$theid = $_GET['setinactive'];
		}
		$thetemplate = $templateops->LoadTemplateByID($theid);
		if (isset($thetemplate))
		{
			if (isset($_GET['setactive']))
			{
				$thetemplate->active = 1;
				$thetemplate->Save();
			}
			if (isset($_GET['setinactive']))
			{
				$thetemplate->active = 0;
				$thetemplate->Save();
			}
		}
	}

	$templatelist = $templateops->LoadTemplates();
	
	$page = 1;
	if (isset($_GET['page'])) $page = $_GET['page'];
	$limit = 20;
	if (count($templatelist) > $limit)
	{
		echo "<p class=\"pageshowrows\">".pagination($page, count($templatelist), $limit)."</p>";
	}
	echo $themeObject->ShowHeader('currenttemplates').'</div>';
	if ($templatelist && count($templatelist) > 0) {

		echo '<table cellspacing="0" class="pagetable">';
		echo '<thead>';
		echo "<tr>\n";
		echo '<th class="pagew50">'.lang('template').'</th>';
		echo "<th class=\"pagepos\">".lang('default')."</th>\n";
		echo "<th class=\"pagepos\">".lang('active')."</th>\n";
		if ($edit)
			echo "<th class=\"pagepos\">&nbsp;</th>\n";
		echo "<th class=\"pageicon\">&nbsp;</th>\n";
		if ($add)
			echo "<th class=\"pageicon\">&nbsp;</th>\n";
		if ($remove)
			echo "<th class=\"pageicon\">&nbsp;</th>\n";
		if ($all)
			echo "<th class=\"pageicon\">&nbsp;</th>\n";
		echo "<th class=\"pageicon\">&nbsp;</th>\n";

		echo "</tr>\n";
		echo '</thead>';
		echo '<tbody>';

		$currow = "row1";
		$counter=0;

		foreach ($templatelist as $onetemplate)
		{
			// construct true/false button images
            $image_true = "<a href=\"listtemplates.php?setinactive=".$onetemplate->id."\">".$themeObject->DisplayImage('icons/system/true.gif', lang('setfalse'),'','','systemicon')."</a>";
            $image_false = "<a href=\"listtemplates.php?setactive=".$onetemplate->id."\">".$themeObject->DisplayImage('icons/system/false.gif', lang('settrue'),'','','systemicon')."</a>";
			$default_true =$themeObject->DisplayImage('icons/system/true.gif', lang('true'),'','','systemicon');
			$default_false ="<a href=\"listtemplates.php?setdefault=".$onetemplate->id."\">".$themeObject->DisplayImage('icons/system/false.gif', lang('settrue'),'','','systemicon')."</a>";

			if ($counter < $page*$limit && $counter >= ($page*$limit)-$limit) {
  			    echo "<tr class=\"$currow\" onmouseover=\"this.className='".$currow.'hover'."';\" onmouseout=\"this.className='".$currow."';\">\n";
				echo "<td><a href=\"edittemplate.php?template_id=".$onetemplate->id."\">".$onetemplate->name."</a></td>\n";
				echo "<td class=\"pagepos\">".($onetemplate->default == 1?$default_true:$default_false)."</td>\n";
				if ($onetemplate->default)
					echo "<td class=\"pagepos\">".$themeObject->DisplayImage('icons/system/true.gif', lang('true'),'','','systemicon')."</td>\n";
				else
					echo "<td class=\"pagepos\">".($onetemplate->active == 1?$image_true:$image_false)."</td>\n";

				# set template to all content
				if ($all)
					echo "<td class=\"pagepos\"><a href=\"listtemplates.php?action=setallcontent&amp;template_id=".$onetemplate->id."\" onclick=\"return confirm('".lang('setallcontentconfirm')."');\">".lang('setallcontent')."</a></td>\n";

				# view css association
				echo "<td class=\"icons_wide\"><a href=\"listcssassoc.php?type=template&amp;id=".$onetemplate->id."\">";
                echo $themeObject->DisplayImage('icons/system/css.gif', lang('attachstylesheets'),'','','systemicon');
                echo "</a></td>\n";

				# add new template
				if ($add)
				{
				  echo "<td class=\"icons_wide\"><a href=\"copytemplate.php?template_id=".$onetemplate->id."&amp;template_name=".urlencode($onetemplate->name)."\">";
                    echo $themeObject->DisplayImage('icons/system/copy.gif', lang('copy'),'','','systemicon');
                    echo "</a></td>\n";
				}

				# edit template
				if ($edit)
				{
					echo "<td class=\"icons_wide\"><a href=\"edittemplate.php?template_id=".$onetemplate->id."\">";
                    echo $themeObject->DisplayImage('icons/system/edit.gif', lang('edit'),'','','systemicon');
                    echo "</a></td>\n";
				}

				# remove template
				if ($remove)
				{
					echo "<td class=\"icons_wide\">";
					if ($onetemplate->default)
					{
						echo '&nbsp;';
					}
					else
					{
						echo "<a href=\"deletetemplate.php?template_id=".$onetemplate->id."\" onclick=\"return confirm('".lang('deleteconfirm', $onetemplate->name)."');\">";
						echo $themeObject->DisplayImage('icons/system/delete.gif', lang('delete'),'','','systemicon');
						echo "</a>";
					}
					echo "</td>\n";
				}
				if ($onetemplate->default)
					echo '<td>&nbsp;</td>';
				else
					echo '<td><input type="checkbox" name="multitemplate-'.$onetemplate->id.'" /></td>';
				echo "</tr>\n";

				($currow=="row1"?$currow="row2":$currow="row1");

			}
			$counter++;
		}

		echo '</tbody>';
		echo "</table>\n";

	}

if ($add) {
?>
	<div class="pageoptions">
		<p class="pageoptions">
			<span style="float: left;">
				<a href="addtemplate.php">
					<?php 
						echo $themeObject->DisplayImage('icons/system/newobject.gif', lang('addtemplate'),'','','systemicon').'</a>';
						echo ' <a class="pageoptions" href="addtemplate.php">'.lang("addtemplate");
					?>
				</a>
			</span>
			<span style="margin-right: 30px; float: right; align: right">
				<?php echo lang("selecteditems"); ?>: <select name="multiaction">
				<option value="delete"><?php echo lang('delete') ?></option>
				<option value="active"><?php echo lang('active') ?></option>
				<option value="inactive"><?php echo lang('inactive') ?></option>
				</select>
				<input type="submit" value="<?php echo lang('submit') ?>" />
			</span>
			<br />
		</p>		
	</div>
</div>
</form>
<p class="pageback"><a class="pageback" href="<?php echo $themeObject->BackUrl(); ?>">&#171; <?php echo lang('back')?></a></p>

<?php
}

include_once("footer.php");

# vim:ts=4 sw=4 noet
?>
