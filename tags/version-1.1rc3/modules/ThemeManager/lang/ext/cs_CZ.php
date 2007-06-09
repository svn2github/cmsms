<?php
$lang['error_uploadpermissions'] = '<strong>VAROV&Aacute;N&Iacute;:</strong> M&aacute;te nedostatečn&aacute; opr&aacute;vněn&iacute; pro upload nebo instalaci t&eacute;mat. Toto může b&yacute;t způsobeno &scaron;patn&yacute;mi pr&aacute;vy na adres&aacute;ř&iacute;ch upload nebo modules, nebo zapnut&yacute;m safe m&oacute;dem na Va&scaron;em serveru.';
$lang['error_nomenumanager'] = 'Modul MenuManager nenalezen';
$lang['active'] = 'Aktivn&iacute;';
$lang['default'] = 'V&yacute;choz&iacute;';
$lang['prompt_themename'] = 'Exportovat t&eacute;ma jako:';
$lang['info_themename'] = 'Toto pole určuje jm&eacute;no v&yacute;stupn&iacute;ho t&eacute;matu, bez ohledu na vstupn&iacute; jm&eacute;no t&eacute;matu';
$lang['error_editingproblem'] = 'Probl&eacute;m s maz&aacute;n&iacute;m a změnou odkazovan&yacute;ch souborů v tomto t&eacute;matu.';
$lang['error_problemsavingincludes'] = 'Probl&eacute;m s ukl&aacute;d&aacute;n&iacute;m souborů zak&oacute;dovan&yacute;ch v tomto t&eacute;matu.';
$lang['error_nofilesuploaded'] = 'Ž&aacute;dn&eacute; soubory nebyly nahr&aacute;ny. Ujistěte se, že tag enctype, př&iacute;slu&scaron;n&yacute; k va&scaron;emu formul&aacute;ři byl nastaven na hodnotu multipart/form-data a že prav&eacute; pole bylo pro nahr&aacute;van&yacute; soubor zatrženo.';
$lang['error_templateexists'] = '&Scaron;ablona pojmenovan&aacute; &quot;%s&quot; již existuje';
$lang['error_stylesheetexists'] = 'Styl pojmenovan&yacute; &quot;%s&quot; již existuje';
$lang['error_nostylesheets'] = 'V tomto t&eacute;matu nebyly nalezeny ž&aacute;dn&eacute; styly';
$lang['error_couldnotcreatetemplate'] = 'Nelze vytvořit definici &scaron;ablony.';
$lang['error_couldnotassoccss'] = 'Probl&eacute;m s přiřazen&iacute;m stylů k &scaron;abloně';
$lang['error_nooutput'] = 'Neexistuje nic k v&yacute;stupu';
$lang['error_notemplate'] = 'Nelze nal&eacute;zt &scaron;ablonu';
$lang['error_dtdmismatch'] = 'Neodpov&iacute;d&aacute; verze DTD, nelze importovat';
$lang['import'] = 'Importovat';
$lang['upload'] = 'Nahr&aacute;t t&eacute;ma';
$lang['id'] = 'Id';
$lang['name'] = 'Jm&eacute;no';
$lang['export'] = 'Exportovat';
$lang['submit'] = 'Vložit';
$lang['friendlyname'] = 'Spr&aacute;vce t&eacute;mat';
$lang['postinstall'] = 'Ujistěte se pros&iacute;m, že m&aacute;ty nastavena pr&aacute;va &quot;Manage themes&quot; k tomuto modulu';
$lang['uninstalled'] = 'Modul odinstalov&aacute;n.';
$lang['installed'] = 'Modul verze %s je nainstalov&aacute;n.';
$lang['prefsupdated'] = 'Volby modulu aktualizov&aacute;ny.';
$lang['accessdenied'] = 'Př&iacute;stup zak&aacute;z&aacute;n. pros&iacute;m zkontrolujte sv&aacute; opr&aacute;vněn&iacute;.';
$lang['error'] = 'Chyba!';
$lang['upgraded'] = 'Modul aktualizov&aacute;n na verzi %s.';
$lang['moddescription'] = 'Modul umožňuj&iacute;c&iacute; imort a export t&eacute;mat obsahu ( &scaron;ablon a stylů)';
$lang['changelog'] = '<ul>
<li>
<p>Version 1.0.5. January, 2006</p>
<p>Opraveno nakl&aacute;d&aacute;n&iacute; s v&iacute;ce &scaron;ablonami v jednom XML souboru, přid&aacute;no css do vztahů &scaron;ablon v souboru XML, opraveno několik parsov&aacute;n&iacute; url v css souborech, a mnoho dlouh&yacute;ch souborů (d&iacute;ky pate)</p>
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
$lang['help'] = '<h3>Co tento modul děl&aacute;?</h3>
<p>Tento modul v&aacute;m umožňuje imoprtovat a exportovat &scaron;ablony a k nim připojen&eacute; styly jako &quot;t&eacute;mata&quot;.  To umožňuje sd&iacute;let svůj vzhled s ostatn&iacute;mi uživateli cms.</p
<h3>Jak mohu modul použ&iacute;t</h3>
<p>Tento modul se uživatelům webu nikde nezobraz&iacute;, slouž&iacute; pouze v administračn&iacute;m rozhran&iacute;.  Umožňuje v&aacute;m vybrat existuj&iacute;c&iacute; (aktivn&iacute;) &scaron;ablonu a kliknout na tlač&iacute;tko &quot;Exportovat&quot;.  Bude vytvořen XML soubor obsahuj&iacute;c&iacute;  &scaron;ablonu a připojen&eacute; styly, kter&yacute; v&aacute;m n&aacute;sledně bude odesl&aacute;n k downloadu.
<h3>Opr&aacute;vněn&iacute;</h3>
<p>Model opr&aacute;vněn&iacute; je pro Spr&aacute;vce t&eacute;mat př&iacute;sn&yacute;, aby byla zaji&scaron;těna integrita datab&aacute;ze.  Opr&aacute;vněn&iacute;  &quot;Manage themes&quot; je vyžadov&aacute;no k exportu t&eacute;mat a dal&scaron;&iacute; tři opr&aacute;vněn&iacute; (&quot;Add Stylesheets&quot;, &quot;Add StyleSheet Assocations&quot;, and &quot;Add Templates&quot;) jsou vyžadov&aacute;na k umožněn&iacute; importu t&eacute;matu.</p>
<p>Stejně jako exportovat můžete t&eacute;mata ve form&aacute;tu xml tak&eacute; nahr&aacute;vat. Přiložen&eacute; &scaron;ablony a styly se tak automaticky nahraj&iacute; do Va&scaron;&iacute; instalace CMSMS.</p>
<h3>Podpora</h3>
<p>K tomuto modulu nen&iacute; poskytov&aacute;na komerčn&iacute; podpora. Přesto ale existuje mnoho zdrojů, kde můžete hledat pomoc:</p>
<ul>
<li>Pro posledn&iacute; verzi modulu, často kladen&eacute; ot&aacute;zky, pod&aacute;n&iacute; zpr&aacute;vě o chybě nebo n&aacute;kup komerčn&iacute; podpory pros&iacute;m nav&scaron;tivte domovskou str&aacute;nku modulu na adrese <a href=&quot;http://dev.cmsmadesimple.org&quot;>dev.cmsmadesimple.org</a>.</li>
<li>Dal&scaron;&iacute; diskusi o tomto modulu můžete tak&eacute; nal&eacute;zt ve <a href=&quot;http://forum.cmsmadesimple.org&quot;>f&oacute;ru CMS Made Simple</a>.</li>
<li>Autora, calguy1000, můžete často nal&eacute;zt na <a href=&quot;irc://irc.freenode.net/#cms&quot;>CMS IRC kan&aacute;lu</a>.</li>
<li>Konečně, můžete se pokusit napsat autorovi e-mail.</li>  
</ul>
<p>Podle GPL licence je tento software poskytov&aacute;n tak-jak-je. Pros&iacute;m přečtěte si text GPL licence.</p>

<h3>Copyright a License</h3>
<p>Copyright &copy; 2005, Robert Campbell <a href=&quot;mailto:calguy1000@hotmail.com&quot;><calguy1000@hotmail.com></a>. All Rights Are Reserved.</p>
<p>Tento modul byl uvolněn pod <a href=&quot;http://www.gnu.org/licenses/licenses.html#GPL&quot;>GNU Public License</a>. Před použit&iacute;m modulu mus&iacute;te souhlasit s použ&iacute;v&aacute;n&iacute;m podle t&eacute;to licence.</p>
';
$lang['utmz'] = '156861353.1168259762.1.1.utmccn=(direct)|utmcsr=(direct)|utmcmd=(none)';
$lang['utma'] = '156861353.2018862235.1168259762.1179137146.1180422557.11';
$lang['utmc'] = '156861353';
?>