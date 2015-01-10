<?php
$lang['error_nomodulesfilter'] = 'Ursäkta. Verkar inte som om det finns några moduler som matchar detta filt';
$lang['error_search'] = 'Något gick fel med sökningen';
$lang['prompt_disable_caching'] = 'Inaktivera cache vid förfrågningar från servern';
$lang['info_disable_caching'] = '<strong>Rekommenderas inte</strong>.  För prestandaskäl,  ModuleManagerns kommer att cacha (standard en timme) mycket av den information som hämtas från fjärrservern';
$lang['operation_results'] = 'Resultat';
$lang['error_noresults'] = 'Vi förväntade oss att några resultat skulle finnas tillgängliga men inga hittades. Försök att återskapa denna felsituation och samla in nödvändig information till support-personal för vidare felsökning';
$lang['versionsformodule'] = 'Tillgänliga versioner av modulen %s';
$lang['yourversion'] = 'Din version';
$lang['latestdepends'] = 'Installera alltid de nyaste modulerna.';
$lang['info_latestdepends'] = 'När du installerar en modul som är beroende av andra moduler så gör detta val att de senaste versionerna av alla moduler den beror av installeras';
$lang['error_internal'] = 'Internt fel uppstod. Rapportera detta till din system administratör';
$lang['error_downloadxml'] = 'Ett problem uppstod vid uppladdning med XML FILE: %s';
$lang['error_request_problem'] = 'Ett problem uppstod vid kommunikation med modulservern';
$lang['error_searchterm'] = 'Vänligen ange något giltigt för att söka';
$lang['search_noresults'] = 'Din sökning lyckades men inga resultat matchade';
$lang['advancedsearch_help'] = 'Ange ord att inkludera eller utesluta från sökningen med ett + eller -, exakta fraser med citationstecken. I.E: "+ röda -äpple +" någon text "';
$lang['search_results'] = 'Sökresultat';
$lang['prompt_advancedsearch'] = 'Avancerad sökning';
$lang['search_input'] = 'Sökinmatning';
$lang['searchterm'] = 'Sökterm';
$lang['search'] = 'Sök';
$lang['available_updates'] = 'Moduler tillgängliga för uppdatering. Läs release-informationen och gör en säkerhetskopia av webbplatsen innan du uppgraderar.';
$lang['all_modules_up_to_date'] = 'Det finns inga nyare moduler tillgängliga som finns i arkivet';
$lang['error_module_object'] = 'Fel: kunde inte få en instans av %s modulen';
$lang['error_nomatchingmodules'] = 'Fel: Kunde inte hitta några matchande moduler i arkivet';
$lang['error_nomodules'] = 'Fel: Kunde inte hämta lista med installerade moduler';
$lang['upgrade_available'] = 'Nyare verson tillgänglig (%s), du har (%s)';
$lang['newversions'] = 'Installerade moduler';
$lang['notice_depends'] = '%s depends on the following actions. Click "Install" to go ahead.';
$lang['install_submit'] = 'Installera';
$lang['depend_upgrade'] = 'Modulen %s behöver uppgraderas till version %s.';
$lang['depend_install'] = 'Modul %s (version %s eller senare) måste installeras.';
$lang['depend_activate'] = 'Modulen %s måste aktiveras.';
$lang['action_activated'] = 'Modulen %s är nu aktiverad.';
$lang['action_installed'] = 'Modulen %s har installerats med följande meddelande(n): %s';
$lang['action_upgraded'] = 'Modulen %s är nu uppgraderad';
$lang['title_installation_complete'] = 'Installationen är färdig!';
$lang['install_with_deps'] = 'Utvärdera alla beroenden och installera';
$lang['msg_nodependencies'] = 'Filen har inte listat några beroenden';
$lang['error_upgrade'] = 'Uppgraderingen av modulen %s misslyckades!';
$lang['error_skipping'] = 'Hoppar över installation/uppgradering av %s på grund av fel med beroenden. Se meddelande ovan, och försök igen.';
$lang['dependstxt'] = 'Beroenden';
$lang['use_at_your_own_risk'] = 'Använd på egen risk';
$lang['compatibility_disclaimer'] = 'Modulerna som visas här har bidragits av både CMSMS-utvecklarna och oberoende tredjepartsutvecklare. Vi kan inte garantera att modulerna som finns tillgängliga här fungerar, är testade eller är kompatibla med ditt system. Läs gärna informationen som finns i hjälpen och om-länkarna för varje modul innan du installerar något.';
$lang['notice'] = 'OBS!';
$lang['general_notice'] = 'Versionerna som visas här representerar de senaste XML-filerna som har laddats upp till den lagringssplats som du har valt (vanligtvis CMS-%s). Det är inte säkert att de representerar de senast tillgängliga versionerna. Du kan se vilka de tillgängliga filutgåvorna är för den lagringssplats som du har valt. Om du använder standardlagringsplatsen kan du göra detta genom att skriva in modulnamnet i sökrutan på %s och klicka på "Filer-knappen".';
$lang['incompatible'] = 'Ej kompatibel';
$lang['prompt_settings'] = 'Inställningar';
$lang['prompt_otheroptions'] = 'Andra alternativ';
$lang['reset'] = 'Återställ';
$lang['error_permissions'] = '<strong><em>VARNING:</em></strong> Otillräckligt mapprättigheter för att installera moduler. Det kan också vara så att du har problem med PHP Safe mode. Se till att safe mode är avstängt och att filsystemrättigheterna är tillräckliga.';
$lang['error_minimumrepository'] = 'Versionen för lagringsplatsen (repository) är inte kompatibel med den här versionen av Modulehanteraren';
$lang['prompt_reseturl'] = 'Återställ URL till standardinställningen';
$lang['prompt_resetcache'] = 'Återställ den lokala cachen för data från lagringsplatsen';
$lang['prompt_dl_chunksize'] = 'Storlek på nedladdningsstycke (Kb)';
$lang['text_dl_chunksize'] = 'Maximal storlek på data att ladda ner från servern i ett stycke (när en modul installeras)';
$lang['error_nofilesize'] = 'Inga filstorleksparametrar angivna';
$lang['error_nofilename'] = 'Inga filnamnsparametrar angivna';
$lang['error_unsatisfiable_dependency'] = 'Cannot find the required module "%s" (version %s or later) in the repository. It is directly required by %s; this could indicate a problem with the version of this module in the repository. Please contact the module\'s author. Aborting.';
$lang['error_checksum'] = 'Checksum-fel. Detta innebär troligen att det är fel på filen, antingen när den laddades upp till lagringsplatsen eller ett problem vid överföringen till din dator.';
$lang['cantdownload'] = 'Kan inte ladda ner';
$lang['download'] = 'Ladda ner & installera';
$lang['error_moduleinstallfailed'] = 'Installation av modul misslyckades';
$lang['error_connectnomodules'] = 'Även om en anslutning till den angivna lagringsplatsen lyckades verkar det som att den här lagringsplatsen inte ännu delar några moduler';
$lang['submit'] = 'Skicka';
$lang['text_repository_url'] = 'URL-adressen ska vara i formen http://www.mincmssida.com/sökväg/soap.php?module=ModuleRepository';
$lang['prompt_repository_url'] = 'URL-adress för modul-lagringsplats';
$lang['title_installation'] = 'Installation.';
$lang['availmodules'] = 'Tillgängliga moduler';
$lang['preferences'] = 'Inställningar';
$lang['preferencessaved'] = 'Inställningar sparade';
$lang['repositorycount'] = 'Moduler som hittades på lagringsplatsen';
$lang['instcount'] = 'Moduler som är installerade';
$lang['availablemodules'] = 'Nuvarande status för moduler som är tillgängliga från den nuvarande lagringsplatsen';
$lang['time_warning'] = 'Installationslistan har två eller fler moduler. Installationen kan ta ett par minuter. Ha tålamod!';
$lang['helptxt'] = 'Hjälp';
$lang['abouttxt'] = 'Om';
$lang['xmltext'] = 'XML-fil';
$lang['nametext'] = 'Modulnamn';
$lang['mod_name_ver'] = '%s Version %s';
$lang['unknown'] = 'Okänd';
$lang['vertext'] = 'version';
$lang['sizetext'] = 'Storlek (kilobyte)';
$lang['statustext'] = 'Status/Åtgärd';
$lang['uptodate'] = 'Installerad';
$lang['install'] = 'installera';
$lang['newerversion'] = 'Nyare version installerad';
$lang['onlynewesttext'] = 'Visa bara senaste versionen';
$lang['upgrade'] = 'Uppgradera';
$lang['error_norepositoryurl'] = 'URL-adressen för modul-lagringsplatsen har inte angetts';
$lang['friendlyname'] = 'Modulhanterare';
$lang['postinstall'] = 'Modulehanteraren har installerats.';
$lang['postuninstall'] = 'Modulhanteraren har avinstallerats. Användare kommer inte längre kunna installera moduler från externa lagringsplatser. Lokala installationer är fortfarande möjliga.';
$lang['really_uninstall'] = 'Är du säker på att du vill avinstallera? Du kommer att gå miste om en hel del bra funktioner.';
$lang['uninstalled'] = 'Modul avinstallerad.';
$lang['installed'] = 'Modul med versionsnummer %s är installerad.';
$lang['upgraded'] = 'Modul uppgraderad till version %s.';
$lang['moddescription'] = 'Den här modulen är en klient till modulen ModuleRepository (modul-lagringsplats). Du kan med denna modul förhandsgranska och installera moduler från externa sajter utan att behöva använda FTP eller packa upp arkivfiler. XML-filer laddas ner med hjälp av SOAP, integritetsverifierade, och packas sedan upp automatiskt.';
$lang['back_to_module_manager'] = '« Return to Module Manager';
$lang['error'] = 'Fel!';
$lang['admindescription'] = 'Ett verktyg för att ladda ner och installera moduler från externa servrar.';
$lang['accessdenied'] = 'Åtkomst nekad. Var god kontrollera dina rättigheter.';
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
</ul>';
$lang['help'] = '<h3>Vad gör den här modulen?</h3>
<p>Den här modulen är en klient till modulen ModuleRepository (modul-lagringsplats). Du kan med denna modul förhandsgranska och installera moduler från externa sajter utan att behöva använda FTP eller packa upp arkivfiler. XML-filer laddas ner med hjälp av SOAP, integritetsverifierade, och packas sedan upp automatiskt.</p>
<h3>Hur använder jag modulen?</h3>
<p>För att använda den här modulen behöver du rättigheten \'Modify Modules\'. Du behöver också den fullständiga URL-adressen till en installation av modulen \'Module Repository\'. Du kan ange denna URL i \'Webbplatsadmin\' --> sidan \'Globala inställningar\'.</p>
<p>Du hittar gränssnittet för den här modulen under menyn \'Tillägg\'. När du väljer den här modulen kommer installationen av \'Module Repository\' automatiskt att frågas efter en lista av dess tillgängliga xml-moduler. Denna listan jämförs med listan av redan installerade moduler, och en sammanfattningssida visas. Härifrån kan du se beskrivning, hjälp och om-informationen för en modul utan att fysiskt installera den. Du kan också välja att uppgradera eller installera moduler.</p>

<h3>Support</h3>
<p>Enligt GPL erbjuds den här mjukvaran som den är. Vänligen läs licenstexten för att se vad som gäller.</p>
<h3>Copyright och licens</h3>
<p>Copyright © 2006, calguy1000 <a href="mailto:calguy1000@hotmail.com"><calguy1000@hotmail.com></a>. Alla Rättigheter Reserverade.</p>
<p>Den här modulen har släppts under <a href="http://www.gnu.org/licenses/licenses.html#GPL">den allmänna GNU-licensen</a>. Du måste godkänna den licensen innan du använder modulen.</p>';
?>