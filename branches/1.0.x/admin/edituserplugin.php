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
global $gCms;
$db =& $gCms->GetDb();

$error = array();

$userplugin_id = "";
if (isset($_POST["userplugin_id"])) $userplugin_id = $_POST["userplugin_id"];
else if (isset($_GET["userplugin_id"])) $userplugin_id = $_GET["userplugin_id"];

$plugin_name= "";
if (isset($_POST["plugin_name"])) $plugin_name = $_POST["plugin_name"];

$orig_plugin_name = "";
if (isset($_POST["origpluginname"])) $orig_plugin_name = $_POST["origpluginname"];

$code= "";
if (isset($_POST["code"])) $code = $_POST["code"];

if (isset($_POST["cancel"])) {
	redirect("listusertags.php");
	return;
}

$userid = get_userid();
$access = check_permission($userid, 'Modify User-defined Tags');

$use_javasyntax = false;
if (get_preference($userid, 'use_javasyntax') == "1") $use_javasyntax = true;

$smarty = new Smarty_CMS($gCms->config);
load_plugins($smarty);

if ($access) {
	if (isset($_POST["editplugin"])) {

        $CMS_EXCLUDE_FROM_RECENT = 1;
		$validinfo = true;
		if ($plugin_name == "") {
			$error[] = lang('nofieldgiven', array(lang('editusertag')));
			$validinfo = false;
		}
		else
		{
			if ($plugin_name != $orig_plugin_name && in_array($plugin_name, $gCms->cmsplugins))
			{
				$error[] = lang('usertagexists');
				$validinfo = false;
			}
		}
		// Make sure no spaces are put into plugin name.
		$without_spaces = str_replace(' ', '', $plugin_name);
		if ($plugin_name != $without_spaces)
		{
			$error[] = lang('error_udt_name_whitespace');
			$validinfo = false;
		}
		if ($code == "") {
			$error[] = lang('nofieldgiven', array(lang('code')));
			$validinfo = false;
		}
		else if (strrpos($code, '{') !== FALSE)
		{
			$lastopenbrace = strrpos($code, '{');
			$lastclosebrace = strrpos($code, '}');
			if ($lastopenbrace > $lastclosebrace)
			{
				$error[] = lang('invalidcode');
                                $error[] = lang('invalidcode_brace_missing');
				$validinfo = false;
			}
		}
		
		if ($validinfo)
		{
			srand();
			ob_start();
			if (eval('function testfunction'.rand().'() {'.$code.'}') === FALSE)
			{
				$error[] = lang('invalidcode');
                                //catch the error
                                //eval('function testfunction'.rand().'() {'.$code.'}');
                                $buffer = ob_get_clean();
                                //add error
                                $error[] = preg_replace('/<br \/>/', '', $buffer ); 
				$validinfo = false;
			}
			else
			{
				ob_get_clean();
			}
		}

		if ($validinfo) {
			Events::SendEvent('Core', 'EditUserDefinedTagPre', array('id' => $userplugin_id, 'name' => &$plugin_name, 'code' => &$code));
			$query = "UPDATE ".cms_db_prefix()."userplugins SET userplugin_name = ".$db->qstr($plugin_name).", code = ".$db->qstr($code).", modified_date = ".$db->DBTimeStamp(time())." WHERE userplugin_id = ". $db->qstr($userplugin_id);
			$result = $db->Execute($query);
			if ($result) {
				Events::SendEvent('Core', 'EditUserDefinedTagPost', array('id' => $userplugin_id, 'name' => &$plugin_name, 'code' => &$code));
				audit($userplugin_id, $plugin_name, 'Edited User Defined Tag');
				redirect("listusertags.php?message=usertagupdated");
				return;
			}
			else {
				$error[] = lang('errorupdatingusertag');
			}
		}
	}
	else if ($userplugin_id != -1) {

		$query = "SELECT * from ".cms_db_prefix()."userplugins WHERE userplugin_id = ?";
		$result = $db->Execute($query,array($userplugin_id));
		
		$row = $result->FetchRow();

		$plugin_name = $row["userplugin_name"];
		$orig_plugin_name = $plugin_name;
		$code = $row['code'];
	}
}
if (strlen($plugin_name)>0)
    {
    $CMS_ADMIN_SUBTITLE = $plugin_name;
    }
include_once("header.php");

if (!$access) {
	echo '<div class=\"pageerrorcontainer\"><p class="pageerror">'.lang('noaccessto', array(lang('addusertag'))).'</p></div>';
}
else {
	if (FALSE == empty($error)) {
		echo $themeObject->ShowErrors($error);		
	}

?>

<div class="pagecontainer">
	<?php echo $themeObject->ShowHeader('editusertag'); ?>
		<form enctype="multipart/form-data" action="edituserplugin.php" method="post">
			<div class="pageoverflow">
				<p class="pagetext">*<?php echo lang('name')?>:</p>
				<p class="pageinput"><input type="text" name="plugin_name" maxlength="255" value="<?php echo $plugin_name?>" /></p>
			</div>
			<div class="pageoverflow">
				<p class="pagetext">*<?php echo lang('code')?></p>
				<p class="pageinput"><?php echo textarea_highlight($use_javasyntax, $code, "code", "pagetextarea", "Java") ?></p>
			</div>
			<div class="pageoverflow">
				<p class="pagetext">&nbsp;</p>
				<p class="pageinput">
						<input type="hidden" name="userplugin_id" value="<?php echo $userplugin_id?>" />
						<input type="hidden" name="origpluginname" value="<?php echo $orig_plugin_name?>" />
						<input type="hidden" name="editplugin" value="true" />
						<input type="submit" value="<?php echo lang('submit')?>" class="pagebutton" onmouseover="this.className='pagebuttonhover'" onmouseout="this.className='pagebutton'" />
						<input type="submit" name="cancel" value="<?php echo lang('cancel')?>" class="pagebutton" onmouseover="this.className='pagebuttonhover'" onmouseout="this.className='pagebutton'" />
				</p>
			</div>
		</form>
</div>
<?php
}
echo '<p class="pageback"><a class="pageback" href="'.$themeObject->BackUrl().'">&#171; '.lang('back').'</a></p>';
include_once("footer.php");

# vim:ts=4 sw=4 noet
?>
