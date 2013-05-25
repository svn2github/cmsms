<?php
$lang['error_uploadpermissions'] = '<strong>UWAGA:</strong> Nie masz wystarczających uprawnień by wgrywać lub instalować sk&oacute;rki. Może to wynikać z uprawnień do katalogu uploads lub modules, lub trybem bezpieczeństwa PHP (PHP Safe mode) na twoim serwerze.';
$lang['error_nomenumanager'] = 'Moduł Menadżer Menu (MenuManager) nie został odnaleziony';
$lang['active'] = 'Aktywny';
$lang['default'] = 'Domyślny';
$lang['prompt_themename'] = 'Wyeksportuj sk&oacute;rkę jako:';
$lang['info_themename'] = 'To pole określa wyjściową nazwę sk&oacute;rki, nadpisując jej nazwę wejściową.';
$lang['error_editingproblem'] = 'Wystąpił problem podczas oczyszczania i zmieniania plik&oacute;w, do kt&oacute;rych sk&oacute;rka się odnosi,';
$lang['error_problemsavingincludes'] = 'Wystąpił problem z zapisaniem plik&oacute;w zagnieżdżonych w tej sk&oacute;rce.';
$lang['error_nofilesuploaded'] = 'Żadne pliki nie zostały wgrane. Upewnij się, że pole enctype w Twoim formularzu zostało ustawione na multipart/form-data oraz że zostało zaznaczone właściwe pole dla ładowania plik&oacute;w.';
$lang['error_templateexists'] = 'Szablon o nazwie &quot;%s&quot; już istnieje w systemie';
$lang['error_stylesheetexists'] = 'Arkusz styl&oacute;w o nazwie &quot;%s&quot; już istnieje w systemie';
$lang['error_nostylesheets'] = 'W tej sk&oacute;rce nie ma zdefiniowanych arkuszy styl&oacute;w';
$lang['error_couldnotcreatetemplate'] = 'Nie można utworzyć definicji szablonu';
$lang['error_couldnotassoccss'] = 'Problem przy przywiązywaniu arkusza styl&oacute;w do szablonu';
$lang['error_nooutput'] = 'Nie ma co prezentować';
$lang['error_notemplate'] = 'Nie można odnaleźć szablonu';
$lang['error_dtdmismatch'] = 'Wersja DTD się nie zgadza, nie możemy importować';
$lang['import'] = 'Importuj';
$lang['upload'] = 'Wgraj sk&oacute;rkę';
$lang['id'] = 'ID';
$lang['name'] = 'Nazwa';
$lang['export'] = 'Eksport';
$lang['submit'] = 'Wyślij';
$lang['friendlyname'] = 'Menadżer sk&oacute;rek';
$lang['postinstall'] = 'Upewnij się, że uprawnienia do zarządzania sk&oacute;rkami (Manage Themes) są ustawione dla odpowiednich grup';
$lang['uninstalled'] = 'Moduł został odinstalowany.';
$lang['installed'] = 'Moduł w wersji %s został zainstalowany.';
$lang['prefsupdated'] = 'Ustawienia modułu aktualizowano.';
$lang['accessdenied'] = 'Brak dostępu. Sprwadź swoje uprawnienia.';
$lang['error'] = 'Błąd!';
$lang['upgraded'] = 'Moduł został zaktualizowany do wersji %s.';
$lang['moddescription'] = 'To moduł, kt&oacute;ry umożliwia importowanie i eksportowanie sk&oacute;rek (szablon&oacute;w i arkuszy styl&oacute;w)';
$lang['import_succeeded'] = 'Sk&oacute;rka została pomyślnie zaimportowana';
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
<li>For the latest version of this module, FAQs, or to file a Bug Report or buy commercial support, please visit the module homepage at <a href="http://dev.cmsmadesimple.org">dev.cmsmadesimple.org</a>.</li>
<li>Additional discussion of this module may also be found in the <a href="http://forum.cmsmadesimple.org">CMS Made Simple Forums</a>.</li>
<li>The author, calguy1000, can often be found in the <a href="irc://irc.freenode.net/#cms">CMS IRC Channel</a>.</li>
<li>Lastly, you may have some success emailing the author directly.</li>  
</ul>
<p>As per the GPL, this software is provided as-is. Please read the text
of the license for the full disclaimer.</p>

<h3>Copyright and License</h3>
<p>Copyright &copy; 2005, Robert Campbell <a href="mailto:calguy1000@hotmail.com"><calguy1000@hotmail.com></a>. All Rights Are Reserved.</p>
<p>This module has been released under the <a href="http://www.gnu.org/licenses/licenses.html#GPL">GNU Public License</a>. You must agree to this license before using the module.</p>
';
$lang['utma'] = '156861353.1846459047.1354365754.1354365754.1354365794.2';
$lang['utmc'] = '156861353';
$lang['utmz'] = '156861353.1354365794.2.2.utmcsr=feedburner|utmccn=Feed: cmsmadesimple/blog (CMS Made Simple)|utmcmd=feed';
$lang['utmb'] = '156861353.2.10.1354365794';
?>