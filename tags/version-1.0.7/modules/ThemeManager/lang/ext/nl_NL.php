<?php
$lang['error_uploadpermissions'] = '<strong>WAARSCHUWING:</strong> Je hebt onvoldoende rechten om thema&#039;s te uploaden of te installeren. Het kan een rechten probleem zijn op de uploads of modules map. Of de server gebruikt Safe mode PHP.';
$lang['error_nomenumanager'] = 'Menubeheer module niet gevonden';
$lang['active'] = 'Actief';
$lang['default'] = 'Standaard';
$lang['prompt_themename'] = 'Exporteer thema als:';
$lang['info_themename'] = 'Dit veld bepaald de thema naam bij uitvoer, dit staat los van de originele thema naam.';
$lang['error_editingproblem'] = 'Probleem met opruimen en veranderen van de gerefereerde bestanden in dit thema.';
$lang['error_problemsavingincludes'] = 'Probleem bij het opslaan van de bestanden opgeslagen in het theme.';
$lang['error_nofilesuploaded'] = 'Geen bestanden ge-upload. Zorg ervoor dat de form tag&#039;s enctype is ingesteld op multipart/form-data en dat het juiste veld is aangevinkt voor het ge-uploade bestand.';
$lang['error_templateexists'] = 'Er bestaat al een sjabloon met de naam &quot;%s&quot;';
$lang['error_stylesheetexists'] = 'Er bestaat al een stylesheet met de naam &quot;%s&quot;';
$lang['error_nostylesheets'] = 'Er zijn geen stylesheets gevonden in dit thema';
$lang['error_couldnotcreatetemplate'] = 'Kan de template definitie niet maken';
$lang['error_couldnotassoccss'] = 'Probleem bij het koppelen van de stylesheets aan het sjabloon';
$lang['error_nooutput'] = 'Niets om uit te voeren';
$lang['error_notemplate'] = 'Kan template niet vinden';
$lang['error_dtdmismatch'] = 'DTD Versies komen niet overeen, kan niet importeren';
$lang['import'] = 'Importeer';
$lang['upload'] = 'Upload thema';
$lang['id'] = 'Id';
$lang['name'] = 'Naam';
$lang['export'] = 'Exporteer';
$lang['submit'] = 'Verstuur';
$lang['friendlyname'] = 'Themabeheer';
$lang['postinstall'] = 'Zorg voor &quot;Manage Themes&quot; permissies om deze module te gebruiken!';
$lang['uninstalled'] = 'Module gedeinstalleerd.';
$lang['installed'] = 'Module versie %s ge&iuml;nstalleerd .';
$lang['prefsupdated'] = 'Module instellingen bijgewerkt.';
$lang['accessdenied'] = 'Toegang geweigerd. Controleer of u beschikt over de juiste permissies.';
$lang['error'] = 'Fout!';
$lang['upgraded'] = 'Module bijgewerkt naar versie %s.';
$lang['moddescription'] = 'Een module voor het importeren en exporteren van themes (sjablonen en stylesheets)';
$lang['changelog'] = '<ul>
<li>
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
?>