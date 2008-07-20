<?php
$lang['notice'] = 'Merk';
$lang['general_notice'] = 'Versjonene som vises her representerer de siste XML filene som er lastet opp til din valgte modulbibliotek (vanligvis er dette CMS %s).  De b&oslash;r (men med unntak) representere de siste tilgjengelige versjonene. Du vil muligens &oslash;nske &aring; sjekke de tilgjengelige filutgivelsene i biblioteket du har valgt. Om du benytter standard biblioteket kan du gj&oslash;re s&aring; ved &aring; skrive inn modulnavnet i s&oslash;keboksen her %s og klikke p&aring; &#039;Files&#039; knappen.';
$lang['incompatible'] = 'Ikke kompatibel';
$lang['prompt_settings'] = 'Innstillinger';
$lang['prompt_otheroptions'] = 'Andre opsjoner';
$lang['reset'] = 'Nullstill';
$lang['error_permissions'] = '<strong><em>ADVARSEL:</em></strong> Ikke tilstrekkelige katalog rettigheter for &aring; installere moduler. Du kan ogs&aring; erfare problemer med PHP Safe mode. Vennligst sjekk at safe mode ikke er p&aring;sl&aring;tt og at filsystem rettighetene er tilstrekkelige.';
$lang['error_minimumrepository'] = 'Lager-versjonen er ikke kompatibel med denne modul behandleren';
$lang['prompt_reseturl'] = 'Sett URL til forh&aring;ndssatt standard';
$lang['prompt_resetcache'] = 'Nullstill lokalt mellomlager for Lager data';
$lang['prompt_dl_chunksize'] = 'Nedlastings bolk-st&oslash;rrelse (Kb)';
$lang['text_dl_chunksize'] = 'Maksimum mengde data &aring; laste ned fra serveren i en bolk (under installering av en modul)';
$lang['error_nofilesize'] = 'Ingen filst&oslash;rrelses parameter oppgitt';
$lang['error_nofilename'] = 'Ingen filnavn parameter oppgitt';
$lang['error_checksum'] = 'Sjekksum feil.  Dette indikerer sansynligvis en korrupt til, enten n&aring;r den ble lastet opp til lagringsplassen, eller et problem med overf&oslash;ring ned til din maskin.';
$lang['cantdownload'] = 'Kan ikke laste ned';
$lang['download'] = 'Nedlasting';
$lang['error_moduleinstallfailed'] = 'Modul installasjonen feilet';
$lang['error_connectnomodules'] = 'Selvom tilkobling var vellykket til det spesifiserte modul lageret, s&aring; ser det ut til at dette lageret enn&aring; ikke deler noen moduler';
$lang['submit'] = 'Utf&oslash;r';
$lang['text_repository_url'] = 'Linken burde v&aelig;re som dette http://www.mycmssite.com/path/soap.php?module=ModuleRepository';
$lang['prompt_repository_url'] = 'ModulLager Link:';
$lang['availmodules'] = 'Tilgjengelige Moduler';
$lang['preferences'] = 'Innstillinger';
$lang['preferencessaved'] = 'Innstillinger lagret';
$lang['repositorycount'] = 'Moduler funnet p&aring; lageret';
$lang['instcount'] = 'Moduler allerede installert';
$lang['availablemodules'] = 'N&aring;v&aelig;rende status for moduler tilgjengelig p&aring; lageret som er valgt n&aring;';
$lang['helptxt'] = 'Hjelp';
$lang['abouttxt'] = 'Om';
$lang['xmltext'] = 'XML Fil';
$lang['nametext'] = 'Modul navn';
$lang['vertext'] = 'Versjon';
$lang['sizetext'] = 'St&oslash;rrelse';
$lang['statustext'] = 'Status ';
$lang['uptodate'] = 'Oppdatert';
$lang['install'] = 'Installer';
$lang['newerversion'] = 'Nyere versjon installert';
$lang['onlynewesttext'] = 'Vis kun nyeste versjon';
$lang['upgrade'] = 'Oppgradering tilgjengelig';
$lang['error_nosoapconnect'] = 'Kunne ikke koble til SOAP server';
$lang['error_soaperror'] = 'SOAP problem';
$lang['error_norepositoryurl'] = 'Stien til modul lageret er ikke oppgitt';
$lang['friendlyname'] = 'Modul behandler';
$lang['postinstall'] = 'Etter installerings melding, (f.eks. husk &aring; sette &#039;&#039; rettigheter for &aring; bruke modulen!)';
$lang['postuninstall'] = 'Module Behandler har blitt avinstallert.  Brukere vil ikke lengre ha mulighet til &aring; installere moduler fra fjern-bibliotek.  Men, lokal installasjoner er fortsatt mulig.';
$lang['really_uninstall'] = 'Er du sikker p&aring; at du vil avinnstallere? Du vil miste en masse fin funksjonalitet.';
$lang['uninstalled'] = 'Modul avinnstallert.';
$lang['installed'] = 'Modul versjon %s innstallert.';
$lang['upgraded'] = 'Modul oppgradert til versjon %s.';
$lang['moddescription'] = 'En klient for Modul-lageret, denne modulen tillater forh&aring;ndsvisning og installering av moduler fra fjern-nettsider uten bruk av ftp, eller utpakking av arkiver. Modul XML filer blir lastet ned ved bruk av SOAP, integriteten sjekkes og blir s&aring; utpakket automatisk.';
$lang['error'] = 'Feil!';
$lang['admindescription'] = 'Et verkt&oslash;y for &aring; hente og installere moduler fra fjern-servere.';
$lang['accessdenied'] = 'Tilgang nektet. Vennligst sjekk dinne rettigheter.';
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
</li>
<li>Version 1.1.4 February, 2007.  Now handles the safe mode check, and disables upgrading or installing modules if the permissions are wrong.</li>
<li>Version 1.1.5 September, 2007. New preference to make only latest module version show. Added nice message after saving preferences</li>
</li>
<li>Version 1.1.6 May, 2008. Now show if available modules are incompatible with the current CMS_VERSION.</li>
</li>
<li>Version 1.2 June, 2008.<br/>
This version should reduce the memory requirements of this module, and trade it off for performance on the server, and mroe requests to the server.
   <ul>
    <li>Bumped Minimum CMS Version to 1.3</li>
    <li>Bumped Minimum repository version to 1.1</li>
    <li>Get rid of all of the session stuff</li>
    <li>Add support for requesting modules beginning with a prefix (usually a single letter)</li>
    <li>Add support for requestion only the newest versions of the modules</li>
   </ul>
</li>
</ul>';
$lang['help'] = '<h3>What Does This Do?</h3>
<p>A client for the ModuleRepository, this module allows previewing, and installing modules from remote sites without the need for ftping, or unzipping archives.  Module XML files are downloaded using SOAP, integrity verified, and then expanded automatically.</p>
<h3>How Do I Use It</h3>
<p>In order to use this module, you will need the &#039;Modify Modules&#039; permission, and you will also need the complete, and full URL to a &#039;Module Repository&#039; installation.  You can specify this url in the &#039;Site Admin&#039; --&amp;gt; &#039;Global Settings&#039; page.</p><br/>
<p>You can find the interface for this module under the &#039;Extensions&#039; menu.  When you select this module, the &#039;Module Repository&#039; installation will automatically be queried for a list of it&#039;s available xml modules.  This list will be cross referenced with the list of currently installed modules, and a summary page displayed.  From here, you can view the descriptive information, the help, and the about information for a module without physically installing it.  You can also choose to upgrade or install modules.</p>
<h3>Support</h3>
<p>As per the GPL, this software is provided as-is. Please read the text of the license for the full disclaimer.</p>
<h3>Copyright and License</h3>
<p>Copyright &amp;copy; 2006, calguy1000 <a href=&quot;mailto:calguy1000@hotmail.com&quot;>&amp;lt;calguy1000@hotmail.com&amp;gt;</a>. All Rights Are Reserved.</p>
<p>This module has been released under the <a href=&quot;http://www.gnu.org/licenses/licenses.html#GPL&quot;>GNU Public License</a>. You must agree to this license before using the module.</p>';
$lang['utma'] = '156861353.179052623084110100.1210423577.1214010854.1214048565.155';
$lang['utmz'] = '156861353.1213629882.137.7.utmcsr=blog.cmsmadesimple.org|utmccn=(referral)|utmcmd=referral|utmcct=/2008/06/16/upcoming-downtime-21-jun-2008/';
$lang['utmc'] = '156861353';
$lang['utmb'] = '156861353.46.10.1214048565';
?>