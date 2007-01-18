<?php
$lang['error_nomenumanager'] = 'Nem tal&aacute;lom a Menu Manager modult';
$lang['active'] = 'Akt&iacute;v';
$lang['default'] = 'Alap&eacute;rtelmezett';
$lang['prompt_themename'] = 'T&eacute;ma export&aacute;l&aacute;sa &iacute;gy:';
$lang['info_themename'] = 'Ez a mező adja meg a t&eacute;ma kimeneti nev&eacute;t, f&uuml;ggetlen&uuml;l a t&eacute;ma bementi nev&eacute;től';
$lang['error_editingproblem'] = 'Hiba t&ouml;rt&eacute;nt a t&eacute;ma &aacute;ltal hivatkozott file-ok t&ouml;rl&eacute;se &eacute;s m&oacute;dos&iacute;t&aacute;sa k&ouml;zben.';
$lang['error_problemsavingincludes'] = 'Hiba t&ouml;rt&eacute;nt a file-ok ment&eacute;se &eacute;s k&oacute;dol&aacute;s k&ouml;zben.';
$lang['error_nofilesuploaded'] = 'Nincs felt&ouml;lt&ouml;tt file. Bizonyosodj meg r&oacute;la, hogy a form tag enctype-ja &#039;multipart/form-data&#039;-ra van &aacute;ll&iacute;tva &eacute;s hogy a megfelelő mező van kit&ouml;ltve a felt&ouml;ltendő file-lal.';
$lang['error_templateexists'] = '&quot;%s&quot; nevűs sablon m&aacute;r van';
$lang['error_stylesheetexists'] = '&quot;%s&quot; nevű st&iacute;luslap m&aacute;r van';
$lang['error_nostylesheets'] = 'Nem tal&aacute;ltunk st&iacute;luslapot ebben a t&eacute;m&aacute;ban';
$lang['error_couldnotcreatetemplate'] = 'Nem siker&uuml;lt l&eacute;trehozni a sablon defin&iacute;ci&oacute;t';
$lang['error_couldnotassoccss'] = 'Hiba t&ouml;rt&eacute;nt a st&iacute;luslapok sablonhoz val&oacute; illeszt&eacute;se k&ouml;zben';
$lang['error_nooutput'] = 'Nincs kimeneti adat';
$lang['error_notemplate'] = 'Nem tal&aacute;lhat&oacute; a sablon';
$lang['error_dtdmismatch'] = 'DTD Verzi&oacute; elt&eacute;r&eacute;s van, nem lehet import&aacute;lni';
$lang['import'] = 'Import&aacute;l&aacute;s';
$lang['upload'] = 'T&eacute;ma felt&ouml;lt&eacute;se';
$lang['id'] = 'Azonos&iacute;t&oacute;';
$lang['name'] = 'N&eacute;v';
$lang['export'] = 'Export&aacute;l&aacute;s';
$lang['submit'] = 'Elk&uuml;ld';
$lang['friendlyname'] = 'T&eacute;ma Manager';
$lang['postinstall'] = 'Győződj meg r&oacute;la, hogy megadod &quot;T&eacute;m&aacute;k Kezel&eacute;se&quot; jogot erre a modulra!';
$lang['postuninstall'] = '&quot;Fen&eacute;be! Megint megbuktam&quot;';
$lang['uninstalled'] = 'A modult elt&aacute;vol&iacute;tottuk.';
$lang['installed'] = 'A modulb&oacute;l a %s verzi&oacute; van telep&iacute;tve.';
$lang['prefsupdated'] = 'A modul jellemzőit friss&iacute;tett&uuml;k.';
$lang['accessdenied'] = 'A hozz&aacute;f&eacute;r&eacute;s megtagadva. K&eacute;rem, ellenőrizze a jogosults&aacute;gokat.';
$lang['error'] = 'Hiba!';
$lang['upgraded'] = 'A modult friss&iacute;tett&uuml;k a(z) %s verzi&oacute;ra.';
$lang['moddescription'] = 'Ez egy olyan modul, amivel import&aacute;lni &eacute;s export&aacute;lni lehet t&eacute;m&aacute;kat (sablonokat &eacute;s st&iacute;luslapokat)';
$lang['changelog'] = '<ul>
<li>
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
$lang['utma'] = '156861353.1172690191.1153773477.1153773477.1154157608.2';
$lang['utmz'] = '156861353.1153773477.1.1.utmccn=(direct)|utmcsr=(direct)|utmcmd=(none)';
?>