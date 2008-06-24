<?php
$lang['friendlyname']="File Manager";
$lang['permission']="Usage of the the File Manager module";
$lang['permissionadvanced']="Advanced usage of the the File Manager module";

$lang['moddescription']="Handling of files and directories in the upload-filesection of cmsms";
$lang['installed']="FileManager version %s installed";
$lang['postinstall']="FileManager module was installed";
$lang['uninstalled']="FileManager module uninstalled";
$lang['really_uninstall']="Are you sure the FileManager module should be uninstalled?";
$lang['upgraded']="FileManager module was upgraded to version %s";
$lang['fileview']="File view";
$lang["switchtofileview"]="Switch to file view";
$lang['settings']="Settings";
$lang['savesettings']="Save settings";

$lang['filename']="Filename";
$lang['fileinfo']="Fileinfo";
$lang['fileowner']="Fileowner";
$lang['fileperms']="Perms";
$lang['filesize']="Size";
$lang['filedate']="Date";
$lang['actions']="Actions";
$lang['delete']="Delete";
$lang["notwritable"]="Not writable";
$lang["filetoobig"]="is too big. Upload cancelled.";

$lang['bytes']="bytes";
$lang['kb']="kb";
$lang['mb']="mb";

$lang["files"]="Files:";

$lang['bytesin']="bytes in";
$lang['in']="in";
$lang['files']="files";
$lang['file']="file";
$lang['fileno']="File no.";
$lang['subdirs']="subdirectories";
$lang['subdir']="subdirectory";
$lang['and']="and";

$lang['confirmsingledelete']="Are you sure?";
$lang['confirmsingledirdelete']="Are you sure this directory should be deleted?";
$lang["dirtreedeletesuccess"]="The dir including content was successfully deleted.";
$lang["dirtreedeletefail"]="An error occured when deleting this dir. Some of the contents may have been deleted, however.";
$lang['singlefiledeletesuccess']="The file was successfully deleted";
$lang['filedeletesuccess']="was successfully deleted";
$lang['singlefiledeletefail']="An error occurred when trying to delete the file";
$lang['filedeletefail']=" was not deleted due to an error";
$lang['singledirdeletesuccess']="The directory  was successfully deleted";
$lang['singledirdeletefail']="An error occurred when trying to delete the directory (is it empty?)";
$lang['deleteselected']="Delete the selected files";
$lang['confirmselected']="Are you sure?";
$lang["confirmdeleteselected"]="Are you sure the selected files should be deleted?";
$lang["deleteselectedcancelled"]="Deletion of selected files cancelled";
$lang["recursetext"]="Recurse into subdirs";
$lang["recursenotice"]="Please note that for now only the permissions of the selected directory is changed.";
$lang["nofilesselected"]="No files selected";
$lang['moveselected']="Move the selected files";
$lang['copyselected']="Copy the selected files";
$lang["selecttargetdir"]="Select target dir for move/copy";

$lang["movedto"]="moved to";
$lang["copiedto"]="copied to";
$lang["couldnotmove"]="could not be moved";
$lang["couldnotcopy"]="could not copied";

$lang["rename"]="Rename";
$lang["newname"]="New name:";
$lang["renamesuccess"]="File successfully renamed";
$lang["renamefailure"]="Renaming of file failed";
$lang["renamecancelled"]="Renaming cancelled";

$lang["owner"]="Owner";
$lang["group"]="Group";
$lang["others"]="Others";
$lang["newpermissions"]="New permissions";
$lang["setpermissions"]="Set permissions";

$lang["permissionstyle"]="Permission style";
$lang["rwxstyle"]="rwx style";
$lang["755style"]="755 style";
$lang["chmod"]="Change permissions";
$lang["chmodselected"]="Change permissions on selected files";
$lang["newpermissions"]="New permissions:";
$lang["chmodsuccess"]="File successfully got new permissions";
$lang["chmodfailure"]="Changing permissions of file failed";
$lang["chmodcancelled"]="Changing of permissions cancelled";

$lang["dirchmodsuccess"]="Directory successfully got new permissions";
$lang["dirchmodfailure"]="Changing permissions of directory failed";

$lang["dirnotemptyconfirm"]="This dir is not empty. Do you really want to delete it and all content, including subdirs?";
$lang["dirtreedeletecancelled"]="Deletion of dir cancelled";
$lang["imsure"]="I'm sure";
$lang["cancel"]="Cancel";
$lang["ok"]="OK";
$lang['uploadnewfile']="Upload new file(s):";
$lang['unpackafterupload']="Try to unpack file after upload (only tgz and most zip-files)?";
$lang['uploadsuccess']="was uploaded successfully";
$lang['uploadfail']="failed to upload successfully";
$lang['unpacksuccess']="was successfully unpacked";
$lang['unpackfail']=" failed with this error: ";
$lang["packfileopenfail"]="Could not open the packed file for unpacking (non-supported format?)";
$lang["packfilewritefail"]="Could not open the file &s for writing";

$lang["currentpath"]="Current path:";
$lang['newdirname']="Create new directory:";
$lang['newdirsuccess']="The directory was created successfully";
$lang['newdirfail']="An error occurred while trying to create the directory";
$lang["filedateformat"]="m/d/Y H:m:s";
$lang["iconsize"]="Icon size";
$lang["smallicons"]="Small icons";
$lang["largeicons"]="Large icons";
$lang["thousanddelimiter"]="Thousand delimiter";
$lang["none"]="None";
$lang["showthumbnails"]="Show thumbnails";
$lang["showthumbnailshelp"]="Enabling this will show thumbnails of image-files if they exist, and will hide the actual thumbnail-file. Disabling will simply show all files.";

$lang["uploadfilesto"]="Uploading files to:";
$lang["uploadview"]="Upload files";
$lang["uploadboxes"]="Number of uploadboxes";
$lang["nothinguploaded"]="Nothing uploaded";
$lang["unsupportedarchive"]="Unsupported archive format";
$lang["uploadmethod"]="Upload method";
$lang["uploaderstandard"]="Standard html input-method (allows unpacking)";
$lang["enableadvanced"]="Enable advanced mode?";
$lang["advancedhelp"]="Lets you gain access to whole cmsms filesystem, not just /uploads/ (if allowed)";
$lang["showhiddenfileshelp"]="Only effective with advanced mode on";
$lang["showhiddenfiles"]="Show hidden files";
$lang["settingsconfirmsingledelete"]="Confirm deletion of a single file?";
$lang["settingssaved"]="Settings saved";

$lang['help']=<<<EOF
		<h3>What does this do?</h3>
		<p>This module provides file management functions</p>
		<h3>How do I use it?</h3>
		<p>Select it from the content-menu from in the admin. </p>
EOF;

$lang['changelog']=<<<EOF
		<ul>
                  <li><b>Version 0.3.2</b> <em>(calguy1000)</em></li>
                  <li>Is now an admin only module</li>
                  <li>Completely remove the java postlet stuff</li>
		  <li>Added some security with javaapplet upload</li>
		  <li><b>Version 0.3.1</b></li>
		  <li>Added some security with javaapplet upload</li>
		  <li><b>Version 0.3.0</b></li>
		  <li>Released with CMSMS 1.3</li>
		  <li><b>Version 0.3.0b2</b></li>
		  <li>Fixed icon-size bug never showing 32px versions</li>
		  <li>Implemented chmod on dirs. No recursion yet, though</li>
		  <li>Fixed bug allowing all users to access advanced functions</li>
		  <li>Tuned layout of filemanager</li>
		  <li>Added thumbnailsupport</li>
		  <li><b>Version 0.3.0b1</b></li>
		  <li>Added renaming of dirs and files</li>
		  <li>Added chmod-functionality</li>
		  <li>Added copying/moving files within the uploads-dir</li>
		  <li>Improved the showing of file-sizes</li>
		  <li>Cosmetic fixes</li>
		  <li><b>Version 0.2.3</b></li>
		  <li>Fixed some reference problems regarding array_pop-function</li>
		  <li>General code cleanup</li>
		  <li><b>Version 0.2.2</b></li>
      <li>Changes hardcoded paths to admin and uploads to honor settings in config.php</li>
                        <li>A few cosmetic fixes</li>
		  
			<li><b>Version 0.2.1</b></li>
                        <li>Changed to use cms_move_uploaded_file.</li>
                        <li>Now Require CMS 1.2.1</li>

			<li><b>Version 0.2.0</b></li>
			<li>Everything touched and rewritten for inclusion in version 1.2 of CMSms</li>
			<li>Checked for noticed</li>
			<li>Postlet upload fixed and communication from it switched to session-vars</li>

		  <li><b>Version 0.1.4</b></li>
		  <li>Fixed cancelling recursive deletion of dirs</li>
		  <li>Fixed some usage of short tags</li>

		  <li><b>Version 0.1.3</b></li>
		  <li>Fixed cancelling recursive deletion of dirs</li>
		  <li>Added Java-applet multifile upload method</li>
		  <li>Implemented deletion of multiple files</li>
		  <li>Fixed select all checkbox</li>

		  <li><b>Version 0.1.2</b></li>
		  <li>Added recursive deletion of dirs</li>

		  <li><b>Version 0.1.1</b></li>
		  <li>Added support for multiple uploads, and support for unpacking tar.gz-files</li>
		  <li>Rewrote to use more of the module-api-functions</li>
		  <li><b>Version 0.1.0</b></li>
		  <li>First version which work properly and equals the builtin filemanager which is intends to render obsolete</li>
		</ul>
EOF;

?>