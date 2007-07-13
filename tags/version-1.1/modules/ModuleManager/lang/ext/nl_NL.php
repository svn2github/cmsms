<?php
$lang['prompt_settings'] = 'Instellingen';
$lang['prompt_otheroptions'] = 'Andere Opties';
$lang['reset'] = 'Opnieuw instellen';
$lang['error_permissions'] = '<strong><em>WAARSCHUWING:</em></strong> Niet voldoende rechten op de map om modules te installeren. Het probleem kan ook zijn dat PHP Safe mode op de server aan staat. Controleer of PHP Safe mode uit staat en of je voldoende rechten hebt op de map.';
$lang['error_minimumrepository'] = 'De bewaarplaats versie is niet compatibel met deze module manager';
$lang['prompt_reseturl'] = 'Standaard URL instellen';
$lang['prompt_resetcache'] = 'Lokale bewaarplaats data cache vernieuwen';
$lang['prompt_dl_chunksize'] = 'Download blok grootte (Kb)';
$lang['text_dl_chunksize'] = 'De maximale hoeveelheid data die in 1 stuk wordt ge-download (bij een module installatie)';
$lang['error_nofilesize'] = 'Geen &quot;filesize&quot; parameter opgegeven';
$lang['error_nofilename'] = 'Geen &quot;filename&quot; parameter opgegeven';
$lang['error_checksum'] = 'Checksum fout. Dit wijst waarschijnlijk op een beschadigd bestand, ofwel toen het naar de bewaarplaats werd ge-upload, of tijdens de download.';
$lang['cantdownload'] = 'Kan niet downloaden';
$lang['download'] = 'Downloaden &amp; Installeren';
$lang['error_moduleinstallfailed'] = 'Module installatie mislukt';
$lang['error_connectnomodules'] = 'Ondanks dat er met succes een verbinding met de aangegeven module bewaarplaats werd gemaakt. Het lijkt erop dat deze bewaarplaats nog geen modules deelt.';
$lang['submit'] = 'Verstuur';
$lang['text_repository_url'] = 'De URL moet de vorm hebben http://www.mycmssite.com/path/soap.php?module=ModuleRepository';
$lang['prompt_repository_url'] = 'ModuleBewaarplaats URL:';
$lang['availmodules'] = 'Beschikbare modules';
$lang['preferences'] = 'Voorkeuren';
$lang['repositorycount'] = 'Modules gevonden in de repository';
$lang['instcount'] = 'Modules nu ge&iuml;nstalleerd';
$lang['availablemodules'] = 'De huidige status van modules beschikbaar in de huidige repository';
$lang['helptxt'] = 'Hulp';
$lang['abouttxt'] = 'Over';
$lang['xmltext'] = 'XML Bestand';
$lang['nametext'] = 'Modulenaam';
$lang['vertext'] = 'Versie';
$lang['sizetext'] = 'Grootte (Kilobytes)';
$lang['statustext'] = 'Status/Aktie';
$lang['uptodate'] = 'Ge&iuml;nstalleerd';
$lang['install'] = 'installeer';
$lang['newerversion'] = 'Nieuwere versie ge&iuml;nstalleerd';
$lang['upgrade'] = 'Bijwerken';
$lang['error_nosoapconnect'] = 'Kon geen verbinding met de SOAP server tot stand brengen';
$lang['error_soaperror'] = 'SOAP probleem';
$lang['error_norepositoryurl'] = 'De URL voor de Module bewaarplaats is niet opgegeven';
$lang['friendlyname'] = 'Modulebeheer';
$lang['postinstall'] = 'Modulebeheer is met succes ge&iuml;nstalleerd';
$lang['postuninstall'] = 'Module Manager is ge-deinstalleerd. Gebruikers hebben niet langer de mogelijkheid om modules te installeren vanuit externe bewaarplaats. Lokale installatie is nog wel steeds mogelijk.';
$lang['really_uninstall'] = 'De module manager de-installeren? Hiermee verliest u de functionaliteit die deze module biedt.';
$lang['uninstalled'] = 'Module ge-de&iuml;nstalleerd.';
$lang['installed'] = 'Module versie %s ge&iuml;nstalleerd.';
$lang['upgraded'] = 'Module bijgewerkt naar versie %s.';
$lang['moddescription'] = 'Een client voor de ModuleBewaarplaats. Deze module maakt het mogelijk modules te installeren zonder de noodzaak van het ftp-en en uitpakken van bestanden. Module XML bestanden worden ge-download met gebruik van SOAP, de integriteit wordt getest en het uitpakken gebeurt automatisch.';
$lang['error'] = 'Fout!';
$lang['admindescription'] = 'Een module om modules vanaf andere servers op te halen en te installeren.';
$lang['accessdenied'] = 'Toegang geweigerd. Controleer rechten.';
$lang['changelog'] = '
<ul>
<li>Version 1.0. 10 January 2006. Initial Release.</li>
<li>Version 1.1. July, 2006. Released with the 1.0- beta</li>
<li>Version 1.1.1 August, 2006.  Require 1.0.1 of nuSOAP</li>
<li>Version 1.1.2 September, 2006.  Fixed a mistake that resulted in upgrade not not working at all</li>
<li>Version 1.1.3 September, 2006.
  <ul>
  <li>Bumped minimum CMS Version to 1.0</li>
  <li>Now use 1 request to get the complete list of modules from the repository</li>
  <li>Added some missing lang strings</li>
  <li>Added the ability to reset the local cache of repository information</li>
  <li>Added the ability to restore the repository url to factory defaults</li>
  </ul>
<li>Version 1.1.4 February, 2007.  Now handles the safe mode check, and disables upgrading or installing modules if the permissions are wrong.</li>
</li>
</ul>';
$lang['help'] = '<h3>What Does This Do?</h3>
<p>A client for the ModuleRepository, this module allows previewing, and installing modules from remote sites without the need for ftping, or unzipping archives.  Module XML files are downloaded using SOAP, integrity verified, and then expanded automatically.</p>
<h3>How Do I Use It</h3>
<p>In order to use this module, you will need the &#039;Modify Modules&#039; permission, and you will also need the complete, and full URL to a &#039;Module Repository&#039; installation.  You can specify this url in the &#039;Site Admin&#039; --> &#039;Global Settings&#039; page.</p><br/>
<p>You can find the interface for this module under the &#039;Extensions&#039; menu.  When you select this module, the &#039;Module Repository&#039; installation will automatically be queried for a list of it&#039;s available xml modules.  This list will be cross referenced with the list of currently installed modules, and a summary page displayed.  From here, you can view the descriptive information, the help, and the about information for a module without physically installing it.  You can also choose to upgrade or install modules.</p>
<h3>Support</h3>
<p>As per the GPL, this software is provided as-is. Please read the text of the license for the full disclaimer.</p>
<h3>Copyright and License</h3>
<p>Copyright &copy; 2006, calguy1000 <a href=&quot;mailto:calguy1000@hotmail.com&quot;><calguy1000@hotmail.com></a>. All Rights Are Reserved.</p>
<p>This module has been released under the <a href=&quot;http://www.gnu.org/licenses/licenses.html#GPL&quot;>GNU Public License</a>. You must agree to this license before using the module.</p>';
$lang['utma'] = '156861353.1518633766.1147844927.1164289600.1164702314.99';
?>