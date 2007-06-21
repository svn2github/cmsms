<?php
$lang['error_uploadpermissions'] = '<strong>ADVARSEL:</strong> Du har ikke tilstrekkelige rettigheter for &aring; laste opp eller installere temaer. Dette kan bero p&aring; restriksjoner satt p&aring; opplasting eller modulers underkataloger, eller ogs&aring; s&aring; kan Safe mode v&aelig;re aktivert p&aring; serveren.';
$lang['error_nomenumanager'] = 'MenuManager modulen ikke funnet';
$lang['active'] = 'Aktiv';
$lang['default'] = 'Standard';
$lang['prompt_themename'] = 'Eksporter Tema som:';
$lang['info_themename'] = 'Dette feltet bestemmer utg&aring;ende tema-navn, uavhengig av inng&aring;ende tema-navn';
$lang['error_editingproblem'] = 'Problem med &aring; rense opp og endre reffererte filer i dette tema&#039;et';
$lang['error_problemsavingincludes'] = 'Problem med &aring; lagere de enkodede filene i dette temaet..';
$lang['error_nofilesuploaded'] = 'Ingen filer ble lastet opp. Sjekk at din skjema tagg&#039;s enctype var satt til multipart/form-data og at rett felt er blitt huket av for den opplastede fila.';
$lang['error_templateexists'] = 'En mal med navnet &quot;%s&quot; eksisterer allerede';
$lang['error_stylesheetexists'] = 'Et stilsett med navnet &quot;%s&quot; eksisterer allerede';
$lang['error_nostylesheets'] = 'Ingen stilsett ble funnet i dette temaet';
$lang['error_couldnotcreatetemplate'] = 'Kunne ikke opprette mal-definisjonen';
$lang['error_couldnotassoccss'] = 'Problem med &aring; assosiere stilsett med malen';
$lang['error_nooutput'] = 'Ingenting &aring; vise';
$lang['error_notemplate'] = 'Kan ikke finne malen';
$lang['error_dtdmismatch'] = 'DTD Versjon uoverenstemmelse, kan ikke importere';
$lang['import'] = 'Import ';
$lang['upload'] = 'Last opp Tema';
$lang['id'] = 'ID';
$lang['name'] = 'Navn';
$lang['export'] = 'Eksport';
$lang['submit'] = 'Utf&oslash;r';
$lang['friendlyname'] = 'Tema Behandler';
$lang['postinstall'] = 'Husk &aring; sette &quot;Manage Themes&quot; rettigheter for &aring; bruke denne modulen!';
$lang['uninstalled'] = 'Modul avinnstallert.';
$lang['installed'] = 'Modul versjon %s innstallert.';
$lang['prefsupdated'] = 'Modul innstillinger oppdatert.';
$lang['accessdenied'] = 'Tilgang nektet. Vennligst sjekk dinne rettigheter.';
$lang['error'] = 'Feil!';
$lang['upgraded'] = 'Modul oppgradert til versjon %s.';
$lang['moddescription'] = 'En modul for &aring; tillate import og eksport av innholds tema (maler og stilsett)';
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
?>