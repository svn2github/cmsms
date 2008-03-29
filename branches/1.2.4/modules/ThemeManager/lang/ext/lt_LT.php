<?php
$lang['error_nomenumanager'] = 'Meniu tvarkymo (MenuManager) modulis nerastas';
$lang['active'] = 'Aktyvus';
$lang['default'] = 'Įprastas';
$lang['prompt_themename'] = 'Eksportuoti temą kaip:';
$lang['info_themename'] = '&Scaron;is laukelis nusako eksportuojamos temos pavadinimą, nepriklausomai nuo esamos temos pavadinimo';
$lang['error_editingproblem'] = 'Problem cleaning up and changing the referenced files in this theme.';
$lang['error_problemsavingincludes'] = 'Problem saving the files encoded in the theme.';
$lang['error_nofilesuploaded'] = 'No files were uploaded. Make sure your form tag&#039;s enctype was set to multipart/form-data and that the right field is being checked for the uploaded file.';
$lang['error_templateexists'] = '&Scaron;ablonas pavadinimu &quot;%s&quot; jau yra';
$lang['error_stylesheetexists'] = 'Stiliau pavadinimu &quot;%s&quot; jau yra';
$lang['error_nostylesheets'] = 'Nerasta stiliaus puslapių &scaron;ioje temoje';
$lang['error_couldnotcreatetemplate'] = 'Nesukurtas temos apibrėžimas';
$lang['error_couldnotassoccss'] = 'Problemos siejant stilių su tema';
$lang['error_nooutput'] = 'Nėrą ką i&scaron;vesti';
$lang['error_notemplate'] = '&Scaron;ablono nerasta';
$lang['error_dtdmismatch'] = 'DTD Version mismatch, neįmanoma importuoti';
$lang['import'] = 'Importuoti';
$lang['upload'] = 'Įkelti temą';
$lang['id'] = 'ID';
$lang['name'] = 'Pavadinimas';
$lang['export'] = 'Eksportuoti';
$lang['submit'] = 'Pateikti';
$lang['friendlyname'] = 'Temų tvarkymas';
$lang['postinstall'] = 'nustatykite leidimus &scaron;iam moduliui';
$lang['postuninstall'] = '&quot;Prakeikimas! Vėl neįtikom!&quot;';
$lang['uninstalled'] = 'Modulis pa&scaron;alintas.';
$lang['installed'] = 'Įdiegta modulio %s versija.';
$lang['prefsupdated'] = 'Modulio nuostatos atnaujintos.';
$lang['accessdenied'] = 'Priėjimas uždraustas. Patikrinkite leidimus.';
$lang['error'] = 'Klaida!';
$lang['upgraded'] = 'Modulio versija atnaujinta į %s.';
$lang['moddescription'] = 'Modulis suteikia galimybę importuoti ir eksportuoti temų turinį (&scaron;ablonus ir stilių puslapius)';
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
<p>This module allows you to import and export templates and their attached stylesheets as &quot;themes&quot;.  This allows you to share your look and feel with other cms users.</p
<h3>How Do I Use It</h3>
<p>This module has no front end interface, only an admin interface.  It allows you to select an existing (active) template, and click &quot;Export&quot;.  An XML file containing the template and its attached stylesheets will be created and sent you you via download.</p>
<h3>Permissions</h3>
<p>The permissions model is strict for the Theme Manager to ensure database integrity.  The permission &quot;Manage Themes&quot; is required to export themes, and these three permissions (&quot;Add Stylesheets&quot;, &quot;Add StyleSheet Assocations&quot;, and &quot;Add Templates&quot;) are required to be able to import a theme.</p>
<p>As well, the opposite functionality exists, you may upload a theme file (xml format) and have the enclosed templates and stylesheets automatically imported into your cmsms installation.</p>
<h3>Support</h3>
<p>This module does not include commercial support. However, there are a number of resources available to help you with it:</p>
<ul>
<li>For the latest version of this module, FAQs, or to file a Bug Report or buy commercial support, please visit the module homepage at <a href=&quot;http://dev.cmsmadesimple.org&quot;>dev.cmsmadesimple.org</a>.</li>
<li>Additional discussion of this module may also be found in the <a href=&quot;http://forum.cmsmadesimple.org&quot;>CMS Made Simple Forums</a>.</li>
<li>The author, calguy1000, can often be found in the <a href=&quot;irc://irc.freenode.net/#cms&quot;>CMS IRC Channel</a>.</li>
<li>Lastly, you may have some success emailing the author directly.</li>  
</ul>
<p>As per the GPL, this software is provided as-is. Please read the text
of the license for the full disclaimer.</p>

<h3>Copyright and License</h3>
<p>Copyright &copy; 2005, Robert Campbell <a href=&quot;mailto:calguy1000@hotmail.com&quot;><calguy1000@hotmail.com></a>. All Rights Are Reserved.</p>
<p>This module has been released under the <a href=&quot;http://www.gnu.org/licenses/licenses.html#GPL&quot;>GNU Public License</a>. You must agree to this license before using the module.</p>
';
$lang['utmz'] = '156861353.1156232165.25.12.utmccn=(referral)|utmcsr=dev.cmsmadesimple.org|utmcct=/softwaremap/trove_list.php|utmcmd=referral';
$lang['utma'] = '156861353.146700672.1148557798.1156244921.1156338862.27';
?>