<?php
$lang['error_uploadpermissions'] = '<strong>ATTENZIUN:</strong> Ti has betg il dretg da chargiar u intallar themes sin tes server. Quai po esser causa ils dretgs per ils ordinaturs uploads ni mudules, u ch\'il safe mode è activ sin tes server. ';
$lang['error_nomenumanager'] = 'Il modul MenuManager n\'è betg vegnì chattà. ';
$lang['active'] = 'activ';
$lang['default'] = 'standard';
$lang['prompt_themename'] = 'exportar theme sco:';
$lang['info_themename'] = 'This field determines the output theme name, irrespective of the input theme name';
$lang['error_editingproblem'] = 'Problem cleaning up and changing the referenced files in this theme.';
$lang['error_problemsavingincludes'] = 'Problem saving the files encoded in the theme.';
$lang['error_nofilesuploaded'] = 'No files were uploaded. Make sure your form tag\'s enctype was set to multipart/form-data and that the right field is being checked for the uploaded file.';
$lang['error_templateexists'] = 'A template with the name "%s" already exists';
$lang['error_stylesheetexists'] = 'A stylesheet with the name "%s" already exists';
$lang['error_nostylesheets'] = 'No stylesheets were detected in this theme';
$lang['error_couldnotcreatetemplate'] = 'Could not create the template definition';
$lang['error_couldnotassoccss'] = 'Problem associating stylesheets with the template';
$lang['error_nooutput'] = 'Nothing to output';
$lang['error_notemplate'] = 'Could not find template';
$lang['error_dtdmismatch'] = 'DTD Version mismatch, cannot import';
$lang['import'] = 'import';
$lang['upload'] = 'chargiar si theme';
$lang['id'] = 'id';
$lang['name'] = 'num';
$lang['export'] = 'export';
$lang['submit'] = 'transmetter';
$lang['friendlyname'] = 'Theme Manager';
$lang['postinstall'] = 'Be sure to set "Manage Themes" permissions to use this module!';
$lang['uninstalled'] = 'Installà il modul.';
$lang['installed'] = 'Module version %s installed.';
$lang['prefsupdated'] = 'Module preferences updated.';
$lang['accessdenied'] = 'Access Denied. Please check your permissions.';
$lang['error'] = 'Sbagl!';
$lang['upgraded'] = 'Module upgraded to version %s.';
$lang['moddescription'] = 'A module to allow importing and exporting of content themes (templates and stylesheets)';
$lang['changelog'] = '<ul>
<li>
<p>version 1.0.7, August, 2006</p>
<p>More bug fixes, and split the code into separate files</p>
<p>Version 1.0.6. July, 2006</p>
<p>Fixed handling of javascript (and other files) in the template</p>
<p>Version 1.0.5. January, 2006</p>
<p>Fixed handling for multiple templates in one xml file, added css to template associations in the xml file, fixed some url parsing in css files, and a couple of lang strings (thanks pat)</p>
<p><b>Note:</b> XML files created with older versions of theme manager will <em>again</em> not import.  This is because of the dtd versionin change, and this is a security feature.  Sorry folks.</p>
</li>
<li><p>Version 1.0.4. January, 2006</p>
<p>Ensure we only output the same template, stylsheet, and file once (or make a reasonable effort at it), and added a dtdversion tag to the output.  Also a much stricter permissons model.  Removed the extra debug messages too.</p>
<p><b>Note:</b> XML files created with older versions of theme manager will not import.  This is because of the dtd versioning scheme included, and this is a security feature.  Sorry folks.</p>
</li>
<li><p>Version 1.0.3. January, 2006</p>
<p>Now supports multiple templates in one theme, recursive directory creation, and base64_encodes of all stylesheets and templates</p>
</li>
<li><p>Version 1.0.2. December, 2005</p>
<p>Now handles included images and javascript in both the stylesheets and the templates.  When restoring files are restored to a directory created under uploads/themename.</p></li>
<li>Version 1.0.1. December, 2005 - Fixed dependencies, help, and general cleanup.</li>
<li>Version 1.0.0. 31 November, 2005 - Initial Release.</li>
</ul>';
$lang['help'] = '<h3>What Does This Do?</h3>
<p>This module allows you to import and export templates and their attached stylesheets as "themes".  This allows you to share your look and feel with other cms users.</p
<h3>How Do I Use It</h3>
<p>This module has no front end interface, only an admin interface.  It allows you to select an existing (active) template, and click "Export".  An XML file containing the template and its attached stylesheets will be created and sent you you via download.</p>
<h3>Permissions</h3>
<p>The permissions model is strict for the Theme Manager to ensure database integrity.  The permission "Manage Themes" is required to export themes, and these three permissions ("Add Stylesheets", "Add StyleSheet Assocations", and "Add Templates") are required to be able to import a theme.</p>
<p>As well, the opposite functionality exists, you may upload a theme file (xml format) and have the enclosed templates and stylesheets automatically imported into your cmsms installation.</p>
<h3>Support</h3>
<p>This module does not include commercial support. However, there are a number of resources available to help you with it:</p>
<ul>
<li>For the latest version of this module, FAQs, or to file a Bug Report or buy commercial support, please visit the module homepage at <a href="http://dev.cmsmadesimple.org">dev.cmsmadesimple.org</a>.</li>
<li>Additional discussion of this module may also be found in the <a href="http://forum.cmsmadesimple.org">CMS Made Simple Forums</a>.</li>
<li>The author, calguy1000, can often be found in the <a href="irc://irc.freenode.net/#cms">CMS IRC Channel</a>.</li>
<li>Lastly, you may have some success emailing the author directly.</li>  
</ul>
<p>As per the GPL, this software is provided as-is. Please read the text
of the license for the full disclaimer.</p>

<h3>Copyright and License</h3>
<p>Copyright © 2005, Robert Campbell <a href="mailto:calguy1000@hotmail.com"><calguy1000@hotmail.com></a>. All Rights Are Reserved.</p>
<p>This module has been released under the <a href="http://www.gnu.org/licenses/licenses.html#GPL">GNU Public License</a>. You must agree to this license before using the module.</p>
';
$lang['utma'] = '156861353.1967356695.1207382513.1218881119.1218983177.41';
$lang['utmz'] = '156861353.1218881119.40.23.utmcsr=forum.cmsmadesimple.org|utmccn=(referral)|utmcmd=referral|utmcct=/index.php/topic,24797.0.html';
$lang['utmb'] = '156861353.1.10.1218983177';
$lang['utmc'] = '156861353';
?>