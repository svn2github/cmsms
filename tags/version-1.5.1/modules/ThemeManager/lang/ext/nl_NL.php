<?php
$lang['error_uploadpermissions'] = '<strong>WAARSCHUWING:</strong> U heeft onvoldoende rechten om thema&#039;s te uploaden of te installeren. Het kan een rechten probleem van op de Uploads of de Modules-map. Ook kan de PHP Safe Mode op de server ingeschakeld zijn.';
$lang['error_nomenumanager'] = 'Menu Manager-module niet gevonden';
$lang['active'] = 'Actief';
$lang['default'] = 'Standaard';
$lang['prompt_themename'] = 'Exporteer thema als:';
$lang['info_themename'] = 'Dit veld bepaalt de themanaam bij uitvoer, dit staat los van de originele themanaam.';
$lang['error_editingproblem'] = 'Probleem met opruimen en veranderen van de gerefereerde bestanden in dit thema.';
$lang['error_problemsavingincludes'] = 'Probleem bij het opslaan van de bestanden gecodeerd in het thema.';
$lang['error_nofilesuploaded'] = 'Geen bestanden geupload. Zorg ervoor dat de form tag&#039;s enctype is ingesteld op multipart/form-data en dat het juiste veld voor het geuploade bestand is aangevinkt.';
$lang['error_templateexists'] = 'Er bestaat al een sjabloon met de naam &quot;%s&quot;';
$lang['error_stylesheetexists'] = 'Er bestaat al een stylesheet met de naam &quot;%s&quot;';
$lang['error_nostylesheets'] = 'Er zijn geen stylesheets gevonden in dit thema';
$lang['error_couldnotcreatetemplate'] = 'Kan de sjabloondefinitie niet maken';
$lang['error_couldnotassoccss'] = 'Probleem bij het koppelen van de stylesheets aan het sjabloon';
$lang['error_nooutput'] = 'Niets om uit te voeren';
$lang['error_notemplate'] = 'Kan het sjabloon niet vinden';
$lang['error_dtdmismatch'] = 'DTD-versies komen niet overeen, kan niet importeren';
$lang['import'] = 'Importeer';
$lang['upload'] = 'Upload thema';
$lang['id'] = 'Id ';
$lang['name'] = 'Naam';
$lang['export'] = 'Exporteer';
$lang['submit'] = 'Versturen';
$lang['friendlyname'] = 'Themabeheer';
$lang['postinstall'] = 'Zorg voor &quot;Manage Themes&quot; rechten om deze module te gebruiken!';
$lang['uninstalled'] = 'Module gedeinstalleerd.';
$lang['installed'] = 'Moduleversie %s ge&iuml;nstalleerd .';
$lang['prefsupdated'] = 'Moduleinstellingen bijgewerkt.';
$lang['accessdenied'] = 'Toegang geweigerd. Controleer of u beschikt over de juiste rechten.';
$lang['error'] = 'Fout!';
$lang['upgraded'] = 'Module bijgewerkt naar versie %s.';
$lang['moddescription'] = 'Een module voor het importeren en exporteren van thema&#039;s (sjablonen en stylesheets)';
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
$lang['help'] = '<h3>Wat doet de module?</h3>
<p>Theme Manager laat u sjablonen en de daaraan gekoppelde stylesheets importeren en exporteren als &quot;themes&quot;.  Hiermee kunt u de look-and-feel van uw site delen met andere CMSMS-gebruikers.</p
<h3>Hoe gebruikt u het?</h3>
<p>De module heeft een beheerinterface, maar geen gebruikersinterface. Via de beheerinterface kunt u bestaande (actieve) sjablonen selecteren en vervolgens exporteren.  Door op &#039;Exporteren&#039; te klikken wordt een XML-bestand aangemaakt met daarin het geselecteerde sjabloon en alle daaraan gekoppelde stylesheets en vervolgens wordt dit bestand aangeboden via een download</p>
<h3>Rechten</h3>
<p>Het rechtenmodel van de Theme Manager is stringent om database-integriteit te waarborgen. Het recht &quot;Manage Themes&quot; is noodzakelijk om thema&#039;s te kunnen exporteren. Om te kunnen importeren zijn de volgende drie rechten nodig: &quot;Add Stylesheets&quot;, &quot;Add StyleSheet Assocations&quot; en &quot;Add Templates&quot;.</p>

<h3>Ondersteuning</h3>
<p>Deze module biedt geen commerciele ondersteuning. Er zijn echter een aantal hulpbronnen die u kunt gebruiken:</p>
<ul>
<li>For the latest version of this module, FAQs, or to file a Bug Report or buy commercial support, please visit the module homepage at <a href=&quot;http://dev.cmsmadesimple.org&quot;>dev.cmsmadesimple.org</a>.</li>
<li>Additional discussion of this module may also be found in the <a href=&quot;http://forum.cmsmadesimple.org&quot;>CMS Made Simple Forums</a>.</li>
<li>The author, calguy1000, can often be found in the <a href=&quot;irc://irc.freenode.net/#cms&quot;>CMS IRC Channel</a>.</li>
<li>Lastly, you may have some success emailing the author directly.</li>  
</ul>
<p>As per the GPL, this software is provided as-is. Please read the text
of the license for the full disclaimer.</p>

<h3>Copyright and License</h3>
<p>Copyright &amp;copy; 2005, Robert Campbell <a href=&quot;mailto:calguy1000@hotmail.com&quot;>&amp;lt;calguy1000@hotmail.com&amp;gt;</a>. All Rights Are Reserved.</p>
<p>This module has been released under the <a href=&quot;http://www.gnu.org/licenses/licenses.html#GPL&quot;>GNU Public License</a>. You must agree to this license before using the module.</p>
';
$lang['utma'] = '156861353.1412123065.1200399601.1200756910.1200815227.5';
$lang['utmz'] = '156861353.1200756910.4.4.utmccn=(referral)|utmcsr=cmsmadesimple.org|utmcct=/|utmcmd=referral';
$lang['utmb'] = '156861353';
$lang['utmc'] = '156861353';
?>