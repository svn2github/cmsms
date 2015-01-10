<?php
$lang['error_uploadpermissions'] = '<strong>Varovanie:</strong> Nemáte dostatočné povolenie na nahratie alebo inštaláciu tém. Toto môže byť spôspbené vypnutým Safe mode, alebo nedostatočnými právami na zápis pre adresáre.';
$lang['error_nomenumanager'] = 'Modul pre generátor menu nebol nájdený';
$lang['active'] = 'Aktívny';
$lang['default'] = 'Prednastavený';
$lang['prompt_themename'] = 'Exportuj tému ako:';
$lang['info_themename'] = 'Toto pole určuje názov témy, bez ohľadu nato aky bol názov vstupnej témy.';
$lang['error_editingproblem'] = 'Problem s uprataním a zmenou referencií súborov v téme';
$lang['error_problemsavingincludes'] = 'Problem s ukládaním súborov enkódovaných v šablóne';
$lang['error_nofilesuploaded'] = 'No files were uploaded. Make sure your form tag\'s enctype was set to multipart/form-data and that the right field is being checked for the uploaded file.';
$lang['error_templateexists'] = 'A template with the name "%s" already exists';
$lang['error_stylesheetexists'] = 'A stylesheet with the name "%s" already exists';
$lang['error_nostylesheets'] = 'Neboli nájdené žiadne štýly v téme';
$lang['error_couldnotcreatetemplate'] = 'Nie je možné vytvoriť definíciu šablóny';
$lang['error_couldnotassoccss'] = 'Problem s pripojenímy štýlmi v šablóne';
$lang['error_nooutput'] = 'Nič pre výstup';
$lang['error_notemplate'] = 'Nemožem nájsť šablónu';
$lang['error_dtdmismatch'] = 'Konflik DTD verzií, nemôžem importovať';
$lang['import'] = 'Importovať';
$lang['upload'] = 'Nahrať tému';
$lang['id'] = 'ID';
$lang['name'] = 'Názov';
$lang['export'] = 'Exportovať';
$lang['submit'] = 'Odoslať';
$lang['friendlyname'] = 'Správca grafických šablón (tém)';
$lang['postinstall'] = 'Skontrolujte nastavenie prístupových práv pre tento modul!';
$lang['uninstalled'] = 'Modul odinštalovaný.';
$lang['installed'] = 'Modul verzie %s nainštalovaný.';
$lang['prefsupdated'] = 'Nastavenia modulu aktualizované.';
$lang['accessdenied'] = 'Prístup zamietnutý. Prosím skontrolujte prístupové práva.';
$lang['error'] = 'Chyba!';
$lang['upgraded'] = 'Modul aktualizovaný na verziu %s.';
$lang['moddescription'] = 'Modul, ktorý vám sprístupni import a export tém (šablón, a css štýlov)';
$lang['import_succeeded'] = 'Téma bola úspešne nainštalovaná';
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
<p>This module has been released under the <a href="http://www.gnu.org/licenses/licenses.html#GPL">GNU Public License</a>. You must agree to this license before using the module.</p>';
?>