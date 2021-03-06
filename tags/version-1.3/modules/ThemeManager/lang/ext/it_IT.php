<?php
$lang['error_uploadpermissions'] = '<strong><em>ATTENZIONE:</em></strong> Permessi insufficienti per upload o installare i Temi. Potrebbe essere dovuto a permessi alle subdirectory uploads o modules o alla presenza del PHP Safe mode sul vostro server.';
$lang['error_nomenumanager'] = 'Modulo MenuManager non trovato';
$lang['active'] = 'Attivo';
$lang['default'] = 'Predefinito';
$lang['prompt_themename'] = 'Esporta il nome del Tema come:';
$lang['info_themename'] = 'Questo campo determina il nome del Tema, indipendentemente dal nome del Tema in entrata';
$lang['error_editingproblem'] = 'Problema nel ripulire e cambiare i file di riferimento in questo Tema.';
$lang['error_problemsavingincludes'] = 'Problema nel salvare i file encodati nel Tema.';
$lang['error_nofilesuploaded'] = 'Nessun file spedito. Essere sicuri che il tag &quot;enctype&quot; di form sia configurato a &quot;multipart/form-data&quot; e che il campo il campo a destra sia spuntato per la spedizione del file.';
$lang['error_templateexists'] = 'Un Modello con il nome &quot;%s&quot; gi&agrave; esiste';
$lang['error_stylesheetexists'] = 'Uno Stile con il nome &quot;%s&quot; gi&agrave; esiste';
$lang['error_nostylesheets'] = 'Nessuno Stile &egrave; stato rilevato in questo Tema';
$lang['error_couldnotcreatetemplate'] = 'Non posso creare la definizione del Modello';
$lang['error_couldnotassoccss'] = 'Problema nell&#039;associare lo Stile con il Modello';
$lang['error_nooutput'] = 'Niente da far uscire';
$lang['error_notemplate'] = 'Non posso trovare il Modello';
$lang['error_dtdmismatch'] = 'Versione del DTD non coincidente, non posso importare';
$lang['import'] = 'Importazione';
$lang['upload'] = 'Spedizione del Tema';
$lang['id'] = 'ID';
$lang['name'] = 'Nome';
$lang['export'] = 'Esportazione';
$lang['submit'] = 'Inoltra';
$lang['friendlyname'] = 'Gestione Temi';
$lang['postinstall'] = 'Essere sicuri di configurare il permesso di &quot;Gestione Temi&quot; per usare questo modulo!';
$lang['uninstalled'] = 'Modulo disinstallato.';
$lang['installed'] = 'Versione del modulo %s installata.';
$lang['prefsupdated'] = 'Preferenze modulo aggiornate.';
$lang['accessdenied'] = 'Accesso negato. Si prega di controllare i permessi.';
$lang['error'] = 'Errore!';
$lang['upgraded'] = 'Modulo aggiornato alla versione %s.';
$lang['moddescription'] = 'Un modulo che permette l&#039;importazione e l&#039;esportazione del contenuto dei temi (Modelli e Stili)';
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
<p>This module has been released under the <a href=&quot;http://www.gnu.org/licenses/licenses.html#GPL&quot;>GNU Public License</a>. You must agree to this license before using the module.</p>';
$lang['utma'] = '156861353.916584110.1152549583.1189777795.1190010695.17';
$lang['utmz'] = '156861353.1189603002.11.11.utmccn=(referral)|utmcsr=onecms.it|utmcct=/07/09/2007/cmsmadesimple-siti-dinamici-senza-database/|utmcmd=referral';
$lang['utmb'] = '156861353';
$lang['utmc'] = '156861353';
?>