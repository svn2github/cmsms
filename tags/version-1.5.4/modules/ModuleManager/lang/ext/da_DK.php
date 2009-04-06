<?php
$lang['prompt_settings'] = 'Indstillinger';
$lang['prompt_otheroptions'] = 'Andre valgmuligheder';
$lang['reset'] = 'Nulstil';
$lang['error_permissions'] = '<strong><em>ADVARSEL:</em></strong> Du har ikke tilstr&aelig;kkelig mappe-rettigheder til at installere moduler. En anden mulighed er at der er problemer pga. PHP&#039;s safemode. Kontroll&eacute;r at safemode er sl&aring;et fra og at du har skriverettigheder til modules-mappen.';
$lang['error_minimumrepository'] = 'Module-serverens version er ikke kompatibel med denne Module Manager';
$lang['prompt_reseturl'] = 'Nulstil URL til startindstillinger';
$lang['prompt_resetcache'] = 'Nulstil den lokale cache af modul-data';
$lang['prompt_dl_chunksize'] = 'Download klump st&oslash;rrelse (Kb)';
$lang['text_dl_chunksize'] = 'Den maksimale st&oslash;rrelse af data der hentes fra servere i en klump (n&aring;r et modul installeres)';
$lang['error_nofilesize'] = 'Intet fil-st&oslash;rrelse parameter angivet';
$lang['error_nofilename'] = 'Intet fil-navn parameter angivet';
$lang['error_checksum'] = 'Tjeksum fejl. Dette skyldes formentlig en fejlbeh&aelig;ftet fil, enten for&aring;rsaget af fejl ved inds&aelig;ttelse i modul-biblioteket eller ved overf&oslash;rsel til din maskine.';
$lang['cantdownload'] = 'Kan ikke download&#039;e';
$lang['download'] = 'Hent og install&eacute;r';
$lang['error_moduleinstallfailed'] = 'Installation af modulet mislykkedes';
$lang['error_connectnomodules'] = 'En forbindelse blev oprettet til modul-biblioteket, men der lader ikke til at der er indlagt nogle moduler endnu';
$lang['submit'] = 'Accept&eacute;r';
$lang['text_repository_url'] = 'URL&#039;en skal v&aelig;re i formatet: http://www.mycmssite.com/path/soap.php?module=ModuleRepository';
$lang['prompt_repository_url'] = 'ModuleBibliotek URL:';
$lang['availmodules'] = 'Tilg&aelig;ngelige moduler';
$lang['preferences'] = 'Indstillinger';
$lang['repositorycount'] = 'Moduler fundet i modul-biblioteket';
$lang['instcount'] = 'Moduler der allerede er installeret';
$lang['availablemodules'] = 'Status p&aring; modulerne i modul-biblioteket';
$lang['helptxt'] = 'Hj&aelig;lp';
$lang['abouttxt'] = 'Om';
$lang['xmltext'] = 'XML Fil';
$lang['nametext'] = 'Modul navn';
$lang['vertext'] = 'Version';
$lang['sizetext'] = 'St&oslash;rrelse (bytes)';
$lang['statustext'] = 'Status/Handlinger';
$lang['uptodate'] = 'Installeret';
$lang['install'] = 'install&eacute;r';
$lang['newerversion'] = 'Nyere version installeret';
$lang['upgrade'] = 'Opgrad&eacute;r';
$lang['error_nosoapconnect'] = 'Kunne ikke forbinde til SOAP server';
$lang['error_soaperror'] = 'SOAP Problem';
$lang['error_norepositoryurl'] = 'URL&#039;en til modulebiblioteket ikke angivet';
$lang['friendlyname'] = 'Modul H&aring;ndtering';
$lang['postinstall'] = 'Modul H&aring;ndtering blev korrekt installeret';
$lang['postuninstall'] = 'Modul H&aring;ndtering er blevet afinstalleret. Brugere kan ikke l&aelig;ngere installere moduler fra en ekstern server. Lokal installation er dog stadig mulig.';
$lang['really_uninstall'] = 'Er du sikker p&aring; du vil afinstallere dette modul?';
$lang['uninstalled'] = 'Modulet blev afinstalleret';
$lang['installed'] = 'Modul-version %s installeret.';
$lang['upgraded'] = 'Modulet blev opgraderet til version %s.';
$lang['moddescription'] = 'En klient til ModulBiblioteket, som giver adgang til p&aring; forh&aring;nd at l&aelig;se om, og eventuelt installeret moduler direkte fra et andet site uden der er n&oslash;dvendigt at benytte FTP, unzip osv. XML-filer for modulerne hentes vi SOAP, deres integritet bekr&aelig;ftes og derefter udpakkes og installeres de automatisk.';
$lang['error'] = 'Fejl!';
$lang['admindescription'] = 'Et v&aelig;rkt&oslash;j til at hente og installere moduler direkte fra andre servere';
$lang['accessdenied'] = 'Adgang n&aelig;gtet. Kontroll&eacute;r venligst tilladelser.';
$lang['changelog'] = '<ul>
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
?>