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
#$Id: siteprefs.php 4122 2007-09-08 21:45:28Z silmarillion $

$CMS_ADMIN_PAGE=1;
$CMS_TOP_MENU='admin';
$CMS_ADMIN_TITLE='pagedefaults';

require_once("../include.php");

check_login();
$userid = get_userid();
$access = check_permission($userid, 'Modify Site Preferences');
if (!$access) {
	die('Permission Denied');
return;
}
global $gCms;
$db =& $gCms->GetDb();

$error = "";
$message = "";

if (isset($_POST["cancel"])) {
	redirect("index.php");
	return;
}

#
# Set all of the values from the preferences
# or from hardcoded defaults
#
$page_active = get_site_preference('page_active',"1");
$page_showinmenu = get_site_preference('page_showinmenu',"1");
$page_cachable = get_site_preference('page_cachable',"1");
$page_metadata = get_site_preference('page_metadata',
	           "<!-- ".lang('msg_defaultmetadata')." -->");
$page_defaultcontent = get_site_preference("defaultpagecontent",
		   "<!-- ".lang('msg_defaultcontent')." -->");
$page_defaultparent = get_site_preference('default_parent_page',-1);
$additional_editors = get_site_preference('additional_editors','');

if( isset( $_POST['submit'] ) )
  {
    //
    // Process Submit
    //
    $page_active = (isset($_POST['page_active'])?"1":"0");
    $page_showinmenu = (isset($_POST['page_showinmenu'])?"1":"0");
    $page_cachable = (isset($_POST['page_cachable'])?"1":"0");
    $page_metadata = $_POST['page_metadata'];
    $page_defaultcontent = $_POST['page_defaultcontent'];
    $page_defaultparent = $_POST['parent_id'];
    if( isset( $_POST['additional_editors'] ) )
      {
	$additional_editors = implode(',',$_POST['additional_editors']);
      }

    //
    // Store preferences
    //
    set_site_preference( 'page_active', $page_active );
    set_site_preference( 'page_showinmenu', $page_showinmenu );
    set_site_preference( 'page_cachable', $page_cachable );
    set_site_preference( 'page_metadata', $page_metadata );
    set_site_preference( 'defaultpagecontent', $page_defaultcontent );
    set_site_preference( 'default_parent_page', $page_defaultparent );
    set_site_preference( 'additional_editors', $additional_editors );
  }

//
// Display Page Output
//
include_once("header.php");
if ($error != "") {
	echo "<div class=\"pageerrorcontainer\"><ul class=\"error\">".$error."</ul></div>";	
}
if ($message != "") {
	echo $themeObject->ShowMessage($message);
}
?>

<div class="pagecontainer">
	<?php echo $themeObject->ShowHeader('pagedefaults'); ?>
    <?php if( $access) { ?>
	<form id="pagedefaultsform" method="post" action="pagedefaults.php">

        <!-- the submit/cancel buttons -->
        <div class="pageoverflow">
          <p class="pagetext">&nbsp;</p>
	  <p class="pageinput">
  	    <input type="hidden" name="editpagedefaults" value="true" />
	    <input type="submit" name="submit" value="<?php echo lang('submit')?>" class="pagebutton" onmouseover="this.className='pagebuttonhover'" onmouseout="this.className='pagebutton'" />
	    <input type="submit" name="cancel" value="<?php echo lang('cancel')?>" class="pagebutton" onmouseover="this.className='pagebuttonhover'" onmouseout="this.className='pagebutton'" />
          </p>
        </div>

        <div class="pageoverflow">
	  <p class="pagetext"><?php echo lang('active')?>:</p>
          <p class="pageinput">
	    <input class="pagenb" type="checkbox" name="page_active" <?php if($page_active == "1") echo "checked=\"checked\""?> />
          </p>
        </div>

        <div class="pageoverflow">
	  <p class="pagetext"><?php echo lang('showinmenu')?>:</p>
          <p class="pageinput">
	    <input class="pagenb" type="checkbox" name="page_showinmenu" <?php if($page_showinmenu == "1") echo "checked=\"checked\""?> />
          </p>
        </div>

        <div class="pageoverflow">
	  <p class="pagetext"><?php echo lang('cachable')?>:</p>
          <p class="pageinput">
	    <input class="pagenb" type="checkbox" name="page_cachable" <?php if($page_cachable == "1") echo "checked=\"checked\""?> />
          </p>
        </div>

	<div class="pageoverflow">
	  <p class="pagetext"><?php echo lang('defaultparentpage')?>:</p>
	  <p class="pageinput">
	  <?php
	    $contentops =& $gCms->GetContentOperations();
	    echo $contentops->CreateHierarchyDropdown(0, $page_defaultparent);
	  ?>
	  </p>
	</div>	

        <div class="pageoverflow">
	  <p class="pagetext"><?php echo lang('metadata')?>:</p>
          <p class="pageinput">
	    <textarea class="pagesmalltextarea" name="page_metadata" cols="80" rows="20"><?php echo $page_metadata?></textarea>
          </p>
        </div>

        <div class="pageoverflow">
	  <p class="pagetext"><?php echo lang('content')?>:</p>
          <p class="pageinput">
	    <textarea class="pagesmalltextarea" name="page_defaultcontent" cols="80" rows="20"><?php echo $page_defaultcontent?></textarea>
          </p>
        </div>

        <div class="pageoverflow">
          <?php 
	    $my_addeditors = explode(',',$additional_editors);
            $content = new ContentBase();
            $addeditors = $content->ShowAdditionalEditors($my_addeditors);
          ?>
	  <p class="pagetext"><?php echo $addeditors[0] ?>:</p>
          <p class="pageinput">
          <?php 
	     echo $addeditors[1];
          ?>
          </p>
        </div>

        <!-- the submit/cancel buttons -->
        <div class="pageoverflow">
          <p class="pagetext">&nbsp;</p>
	  <p class="pageinput">
  	    <input type="hidden" name="editpagedefaults" value="true" />
	    <input type="submit" name="submit" value="<?php echo lang('submit')?>" class="pagebutton" onmouseover="this.className='pagebuttonhover'" onmouseout="this.className='pagebutton'" />
	    <input type="submit" name="cancel" value="<?php echo lang('cancel')?>" class="pagebutton" onmouseover="this.className='pagebuttonhover'" onmouseout="this.className='pagebutton'" />
          </p>
        </div>
      </form>
    <?php } ?>
</div><!-- pagecontainer -->
<?php
echo '<p class="pageback"><a class="pageback" href="'.$themeObject->BackUrl().'">&#171; '.lang('back').'</a></p>';
include_once('footer.php');

// EOF
# vim:ts=4 sw=4 noet
?>
