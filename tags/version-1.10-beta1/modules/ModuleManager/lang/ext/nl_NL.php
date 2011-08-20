<?php
$lang['error_search'] = 'Zoek fout';
$lang['prompt_disable_caching'] = 'Schakel caching van resultaten van de server uit';
$lang['info_disable_caching'] = '<strong>Niet aanbevolen</strong>. Vanwege snelheidsoverwegingen cre&euml;ert de ModuleManager (standaard ieder uur) een cache van de gegevens die worden ontvangen van de externe server';
$lang['operation_results'] = 'Resultaten';
$lang['error_noresults'] = 'Er werden resultaten verwacht van operaties die in de wachtrij stonden, deze zijn echter niet gevonden. Probeer dit probleem te reproduceren en verstrek relevante informatie aan het ondersteuningspersoneel';
$lang['versionsformodule'] = 'Beschikbare versies van de module %s';
$lang['yourversion'] = 'Uw versie';
$lang['latestdepends'] = 'Installeer alleen de nieuwste modules';
$lang['info_latestdepends'] = 'Als u een module met afhankelijkheden installeert, dan zorgt deze optie er voor dat de meest recente versies van deze afhankelijkheden worden ge&iuml;nstalleerd';
$lang['error_internal'] = 'Interne fout... Neem contact op met uw systeembeheerder';
$lang['error_downloadxml'] = 'Er is een probleem opgetreden bij het downloaden van het XML-bestand: %s';
$lang['error_request_problem'] = 'Er trad een probleem op tijdens het communiceren met de moduleserver';
$lang['error_searchterm'] = 'Voer een zoekterm in';
$lang['search_noresults'] = 'Zoekopdracht is uitgevoerd, maar er zijn geen resultaten gevonden';
$lang['advancedsearch_help'] = 'Gebruik een + of - om bepaalde woorden in de zoekopdracht te negeren of juist wel mee te nemen. Omvat een zoekopdracht van meerdere woorden in haakjes. Bijv.  &quot;+rood -appel +&quot;een tekst&quot;';
$lang['search_results'] = 'Zoek Resultaten';
$lang['prompt_advancedsearch'] = 'Uitgebreid Zoeken';
$lang['search_input'] = 'Zoek Invoer';
$lang['searchterm'] = 'Zoek Term';
$lang['search'] = 'Zoek';
$lang['available_updates'] = 'Voor onderstaande modules zijn updates beschikbaar. Lees eerst de release notes in de Forge en maak een back-up van de website!';
$lang['all_modules_up_to_date'] = 'Er zijn geen nieuwe module versies beschikbaar.';
$lang['error_module_object'] = 'Fout: kan geen gegevens vinden van de %s module';
$lang['error_nomatchingmodules'] = 'Fout: kan geen soortgelijke modules vinden';
$lang['error_nomodules'] = 'Fout: kan geen lijst van ge&iuml;nstalleerde modules maken';
$lang['upgrade_available'] = 'Nieuwere versie beschikbaar (%s), u heeft (%s)';
$lang['newversions'] = 'Beschikbare Upgrades';
$lang['notice_depends'] = '%s is afhankelijk van de volgende bewerkingen. Klik op &quot;Installeer&quot; om verder te gaan.';
$lang['install_submit'] = 'Installeer';
$lang['depend_upgrade'] = 'Module %s kan worden bijgewerkt naar %s.';
$lang['depend_install'] = 'Module %s (versie %s of hoger) moet worden ge&iuml;nstalleerd.';
$lang['depend_activate'] = 'Module %s moet worden geactiveerd.';
$lang['action_activated'] = 'Module %s is geactiveerd.';
$lang['action_installed'] = 'Module %s is ge&iuml;nstalleerd met het volgende bericht: %s';
$lang['action_upgraded'] = 'Module %s is bijgewerkt met het volgende bericht: %s';
$lang['title_installation_complete'] = 'Installatieproces afgerond!';
$lang['install_with_deps'] = 'Controleer alle afhankelijkheden en start installatie';
$lang['msg_nodependencies'] = 'Deze module is voor zover bekend niet afhankelijk van andere modules';
$lang['error_upgrade'] = 'Bijwerken van module %s mislukt!';
$lang['error_skipping'] = 'De installatie/upgrade van %s is gestopt als gevolg van fouten bij het installeren van de afhankelijke modules. Lees het bericht hierboven en probeer opnieuw.';
$lang['dependstxt'] = 'Afhankelijkheden';
$lang['use_at_your_own_risk'] = 'Gebruik op eigen risico';
$lang['compatibility_disclaimer'] = 'De getoonde modules zijn gemaakt door zowel CMSMS ontwikkelaars, als derde partijen. Geen garanties op werkzaamheid, testen of compatibiliteit op je systeem kan worden gedaan. Aangeraden wordt om de informatie in de help en links te lezen alvorens te installeren.';
$lang['notice'] = 'Bericht';
$lang['general_notice'] = 'De getoonde versies zijn de laatste XML-versies die in de geselecteerde softwarebron zijn opgeslagen (meestal de CMS %s).  Dit kunnen, maar hoeven niet, de laatste versies te zijn van de modules. Om te controleren of latere versies beschikbaar zijn, kan de zoekfunctie op de %s worden gebruikt, waarbij op de &quot;Files&quot; knop gedrukt kan worden.';
$lang['incompatible'] = 'Onverenigbaar';
$lang['prompt_settings'] = 'Instellingen';
$lang['prompt_otheroptions'] = 'Andere opties';
$lang['reset'] = 'Opnieuw instellen';
$lang['error_permissions'] = '<strong><em>WAARSCHUWING:</em></strong> Onvoldoende rechten op de map om modules te installeren. Het probleem kan ook zijn dat PHP Safe mode op de server aan staat. Controleer of PHP Safe mode uit staat en of u voldoende rechten heeft op de map.';
$lang['error_minimumrepository'] = 'De softwarebronversie is niet compatibel met deze Module Manager';
$lang['prompt_reseturl'] = 'Standaard Url herstellen';
$lang['prompt_resetcache'] = 'Softwarebron buffer legen';
$lang['prompt_dl_chunksize'] = 'Download blokgrootte (Kb)';
$lang['text_dl_chunksize'] = 'De maximale hoeveelheid data die bij een module installatie in &eacute;&eacute;n keer wordt gedownload';
$lang['error_nofilesize'] = 'Geen &quot;filesize&quot; parameter opgegeven';
$lang['error_nofilename'] = 'Geen &quot;filename&quot; parameter opgegeven';
$lang['error_unsatisfiable_dependency'] = 'Kan de benodigde module &quot;%s&quot; (versie %s of hoger) niet in de repository vinden. Deze is echter wel nodig voor %s. Dit kan een teken zijn van een versie probleem van de module in de repository. Neemt u alstublieft contact op met de module developer. Deze bewerking wordt nu gestopt...';
$lang['error_checksum'] = 'Checksum fout. Dit wijst waarschijnlijk op een beschadigd bestand. Dit kan gebeurt zijn tijdens het uploaden door de developer naar de repository, of tijdens uw download.';
$lang['cantdownload'] = 'Downloaden niet mogelijk...';
$lang['download'] = 'Downloaden &amp; Installeren';
$lang['error_moduleinstallfailed'] = 'Module Installatie Mislukt';
$lang['error_connectnomodules'] = 'Ondanks dat er met succes een verbinding met de aangegeven module-softwarebron is gemaakt, lijkt het erop dat deze softwarebron nog geen modules bevat.';
$lang['submit'] = 'Verstuur';
$lang['text_repository_url'] = 'De URL moet het formaat hebben http://www.mijnsite.nl/path/soap.php?module=ModuleRepository';
$lang['prompt_repository_url'] = 'Modulebron URL';
$lang['title_installation'] = 'Installatie';
$lang['availmodules'] = 'Beschikbare modules';
$lang['preferences'] = 'Instellingen';
$lang['preferencessaved'] = 'Instellingen opgeslagen';
$lang['repositorycount'] = 'Modules gevonden in de softwarebron';
$lang['instcount'] = 'Ge&iuml;nstalleerde modules';
$lang['availablemodules'] = 'De huidige modulestatus beschikbaar uit de huidige softwarebron';
$lang['time_warning'] = 'De installatielijst bevat meerdere modules, de installatie kan soms enkele minuten duren. Heeft u even geduld!';
$lang['helptxt'] = 'Hulp';
$lang['abouttxt'] = 'Over';
$lang['xmltext'] = 'XML-bestand';
$lang['nametext'] = 'Modulenaam';
$lang['mod_name_ver'] = '%s versie %s';
$lang['unknown'] = 'Onbekend';
$lang['vertext'] = 'Versie';
$lang['sizetext'] = 'Grootte (Kilobytes)';
$lang['statustext'] = 'Status/bewerking';
$lang['uptodate'] = 'Ge&iuml;nstalleerd';
$lang['install'] = 'installeer';
$lang['newerversion'] = 'Nieuwere versie is ge&iuml;nstalleerd';
$lang['onlynewesttext'] = 'Toon alleen de nieuwste versies';
$lang['upgrade'] = 'Bijwerken';
$lang['error_norepositoryurl'] = 'De URL voor de module-bron is niet opgegeven';
$lang['friendlyname'] = 'Module Manager ';
$lang['postinstall'] = 'De Module Manager is ge&iuml;nstalleerd';
$lang['postuninstall'] = 'De Module Manager is gede&iuml;nstalleerd. Gebruikers hebben niet langer de mogelijkheid om modules te installeren vanuit een externe softwarebron. Lokale installatie is nog wel mogelijk.';
$lang['really_uninstall'] = 'Wilt u de Module Manager de&iuml;nstalleren? Hiermee verliest u de functionaliteit die deze module u biedt.';
$lang['uninstalled'] = 'Module gede&iuml;nstalleerd.';
$lang['installed'] = 'Moduleversie %s ge&iuml;nstalleerd.';
$lang['upgraded'] = 'Module bijgewerkt naar versie %s.';
$lang['moddescription'] = 'Een cli&euml;nt voor de ModuleRepository. Deze module maakt het mogelijk modules te installeren zonder de noodzaak van ftp-en en uitpakken van bestanden. Module XML-bestanden worden gedownload met gebruik van SOAP, de integriteit wordt getest en het uitpakken gebeurt automatisch.';
$lang['back_to_module_manager'] = '&laquo; Terug naar de Module Manager';
$lang['error'] = 'Fout!';
$lang['admindescription'] = 'Een module, om andere modules vanaf andere servers op te halen en te installeren.';
$lang['accessdenied'] = 'Toegang geweigerd. Controleer uw rechten.';
$lang['changelog'] = '<ul>
<li>Version 1.0. 10 January 2006. Initial Release. </li>
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
<li>Version 1.2.1 August, 2008.<br/>
Added a warning message to the top of the admin display.
</li>
<li>Version 1.3 May, 2009.<br/>
Added dependency checking.
</li>
<li>Version 1.3.3 March, 2010.<br/>
<ul>
  <li>PHP 5.x improvements (specifically remove warnings for PHP 5.3)
  <li>Minor bug fixes.</li>
</ul>
</li>
<li>Version 1.4 June, 2010.<br/>
<ul>
  <li>Implemented automatic dependency calculation, and one-click installation.</li>
  <li>Assorted usability improvements.</li>
  <li>Minor bug fixes.</li>
</ul>
</li>

</ul>';
$lang['help'] = '<h3>Wat doet het?</h3>
<p>Module Manager is een client voor de ModuleRepository-module en maakt het mogelijk modules te bekijken en te installeren van andere sites zonder de noodzaak te ftp-en of archieven te decomprimeren.  Module XML-bestanden worden gedownload met behulp van SOAP, de integriteit gecontroleerd en vervolgens automatisch uitgepakt.</p>
<h3>Hoe gebruik ik het?</h3>
<p>Om deze module te kunnen gebruiken heeft u &#039;Modify Modules&#039; rechten nodig en een volledige url naar een &#039;Modulebron&#039;. U kunt deze url opgeven in &#039;Websitebeheer&#039; -> &#039;Algemene instellingen&#039;.</p><br/>
<p>De interface met deze module vindt u onder &#039;Uitbreidingen&#039;. Selecteren van deze module levert een lijst met beschikbare XML-modules. Deze lijst wordt vergeleken met de huidige, ge&iuml;nstalleerde modules en het resultaat wordt getoond in een nieuw scherm. Vanaf dit scherm kunt u informatie over de modules bekijken, modules installeren of upgraden.</p>
<h3>Ondersteuning</h3>
<p>As per the GPL, this software is provided as-is. Please read the text of the license for the full disclaimer.</p>
<h3>Copyright and License</h3>
<p>Copyright &copy; 2006, calguy1000 <a href="mailto:calguy1000@hotmail.com"><calguy1000@hotmail.com></a>. All Rights Are Reserved.</p>
<p>This module has been released under the <a href="http://www.gnu.org/licenses/licenses.html#GPL">GNU Public License</a>. You must agree to this license before using the module.</p>';
$lang['utma'] = '156861353.609939801.1309452629.1309452629.1309452629.1';
$lang['utmz'] = '156861353.1308735175.1.1.utmccn=(direct)|utmcsr=(direct)|utmcmd=(none)';
$lang['utmb'] = '156861353';
$lang['utmc'] = '156861353';
?>