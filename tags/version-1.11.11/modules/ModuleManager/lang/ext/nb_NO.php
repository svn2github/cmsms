<?php
$lang['error_nomodulesfilter'] = 'Beklager men det ser ikke ut som det er noen moduler som passer dette filteret';
$lang['error_search'] = 'Søkefeil';
$lang['prompt_disable_caching'] = 'Slå av mellomlagring av forespørsler fra serveren';
$lang['info_disable_caching'] = 'strong>Ikke Anbefalt</strong>. Av ytelsesgrunner vil ModuleManager mellomlagre mye av informasjonen som hentes fra den eksterne serveren (som standard en time)';
$lang['operation_results'] = 'Handlingsresultater';
$lang['error_noresults'] = 'Vi forventet noen resultater å være tilgjengelig fra operasjoner i kø, men ingen ble funnet. Prøv å reprodusere denne erfaringen, og gi tilstrekkelig informasjon for å støtte personell for diagnostisering.';
$lang['versionsformodule'] = 'Tilgjengelige versjoner av modulen%s';
$lang['yourversion'] = 'Din versjon';
$lang['latestdepends'] = 'Alltid installer de nyeste modulversjonene';
$lang['info_latestdepends'] = 'Når du installerer en modul med avhengigheter, vil dette alternativet sikre at den nyeste versjonen av avhengigheten vil bli installert';
$lang['error_internal'] = 'Intern feil... Vennligst rapporter dette til din systemadministrator';
$lang['error_downloadxml'] = 'Et problem oppstod ved nedlasting av XML filen: %s';
$lang['error_request_problem'] = 'Et problem oppstod under kommunikasjon med modulserveren';
$lang['error_searchterm'] = 'Vennligst oppgi noe som er gyldig å søke etter';
$lang['search_noresults'] = 'Søk lyktes men ingen resultater matchet uttrykket det ble søkt etter';
$lang['advancedsearch_help'] = 'Angi ord som skal inkluderes eller ekskluderes fra søket ved hjelp av en + eller -, omslutt eksakte setninger med sitattegn. i.e:   +rød -eple +"tekst"';
$lang['search_results'] = 'Søkeresultater';
$lang['prompt_advancedsearch'] = 'Avansert søk';
$lang['search_input'] = 'Søk etter';
$lang['searchterm'] = 'Søkeord';
$lang['search'] = 'Søk';
$lang['available_updates'] = 'Moduler tilgjengelig for oppdatering, Før du oppgraderer, vennligst les utgivelsenotatene i Forge og opprett en sikkerhetskopi av nettstedet.';
$lang['all_modules_up_to_date'] = 'Det er ikke tilgjengelig noen nyere moduler i biblioteket';
$lang['error_module_object'] = 'Feil: Fant ikke en forekomst av %s modulen';
$lang['error_nomatchingmodules'] = 'Feil: kunne ikke finne noen matchende moduler i biblioteket';
$lang['error_nomodules'] = 'Feil: kunne ikke hente listen over installerte moduler';
$lang['upgrade_available'] = 'Nyere versjon tilgjengelig (%s), du har (%s)';
$lang['newversions'] = 'Installerte moduler';
$lang['notice_depends'] = '%s har uløste avhengigheter. For å installere denne modulen må følgende handlinger skje';
$lang['install_submit'] = 'Installer';
$lang['depend_upgrade'] = 'Modul %s trenger å oppgraderes til versjon %s.';
$lang['depend_install'] = 'Modul %s (versjon %s eller senere) må være installert';
$lang['depend_activate'] = 'Modul %s trenger å aktiveres.';
$lang['action_activated'] = 'Modul %s har blitt aktivert.';
$lang['action_installed'] = 'Modul %s har blitt installert med følgende melding(er): %s';
$lang['action_upgraded'] = 'Modul %s har blitt oppgradert';
$lang['title_installation_complete'] = 'Installasjonsprosessen fullført!';
$lang['install_with_deps'] = 'Evaluere alle avhengigheter og installer';
$lang['msg_nodependencies'] = 'Denne filen har ikke oppført noen avhengigheter';
$lang['error_upgrade'] = 'Oppgradering av modul %s feilet!';
$lang['error_skipping'] = 'Hopper over installering/oppgradering av %s på grunn av feil med å sette opp avhengighetene. Vennligst se meldingen overfor, og forsøk igjen.';
$lang['dependstxt'] = 'Avhengigheter';
$lang['use_at_your_own_risk'] = 'Bruk på egen risiko';
$lang['compatibility_disclaimer'] = 'Modulene som vises her er bidratt med av både CMS utviklerne og tredjepartsutviklere. Vi gir ingen garanti for at modulene som er tilgjengelige her fungerer, testet, eller kompatible med ditt system. Du oppfordres til å lese informasjonen du finner i hjelp og i "Om" linkene for hver modul før du forsøker å installere.';
$lang['notice'] = 'Merk';
$lang['general_notice'] = 'Versjonene som vises her representerer de siste XML filene som er lastet opp til ditt valgte modulbibliotek (vanligvis er dette CMS %s).  De bør (men med unntak) representere de siste tilgjengelige versjonene.';
$lang['incompatible'] = 'Ikke kompatibel';
$lang['prompt_settings'] = 'Innstillinger';
$lang['prompt_otheroptions'] = 'Andre opsjoner';
$lang['reset'] = 'Nullstill';
$lang['error_permissions'] = '<strong><em>ADVARSEL:</em></strong> Ikke tilstrekkelige katalogrettigheter for å installere moduler. Du kan også erfare problemer med PHP Safe mode. Vennligst sjekk at safe mode ikke er påslått og at filsystem rettighetene er tilstrekkelige.';
$lang['error_minimumrepository'] = 'Lager-versjonen er ikke kompatibel med denne modulbehandleren';
$lang['prompt_reseturl'] = 'Sett URL til forhåndssatt standard';
$lang['prompt_resetcache'] = 'Nullstill lokalt mellomlager for Lager data';
$lang['prompt_dl_chunksize'] = 'Nedlastings bolk-størrelse (Kb)';
$lang['text_dl_chunksize'] = 'Maksimum mengde data å laste ned fra serveren i en bolk (under installering av en modul)';
$lang['error_nofilesize'] = 'Ingen filstørrelses parameter oppgitt';
$lang['error_nofilename'] = 'Ingen filnavn parameter oppgitt';
$lang['error_unsatisfiable_dependency'] = 'Kan ikke finne den påkrevde modulen "%s" (versjon %s eller senere) i biblioteket. Denne er direkte påkrevd av %s; dette kan indikere at det er et problem med denne versjonen av modulen i biblioteket. Vennligst kontakt denne modulens opphavsmann.  Avbryter.';
$lang['error_checksum'] = 'Sjekksum feil.  Dette indikerer sannsynligvis en korrupt til, enten når den ble lastet opp til lagringsplassen, eller et problem med overføring ned til din maskin.';
$lang['cantdownload'] = 'Kan ikke laste ned';
$lang['download'] = 'Last ned og Installer';
$lang['error_moduleinstallfailed'] = 'Installasjonen av modulen feilet';
$lang['error_connectnomodules'] = 'Selv om tilkobling var vellykket til det spesifiserte modullageret, så ser det ut til at dette lageret ennå ikke deler noen moduler';
$lang['submit'] = 'Utfør';
$lang['text_repository_url'] = 'Linken burde være som dette http://www.mycmsmssite.com/ModuleRepository/request/v2 (forutsatt pene webadresser er aktivert på depotserveren)<br />Merk: Å åpne denne lenken i nettleseren din vil returnere en Error404!';
$lang['prompt_repository_url'] = 'ModulLager Link:';
$lang['title_installation'] = 'Installasjon';
$lang['availmodules'] = 'Tilgjengelige Moduler';
$lang['preferences'] = 'Innstillinger';
$lang['preferencessaved'] = 'Innstillinger lagret';
$lang['repositorycount'] = 'Moduler funnet på lageret';
$lang['instcount'] = 'Moduler allerede installert';
$lang['availablemodules'] = 'Nåværende status for moduler tilgjengelig på lageret som er valgt nå';
$lang['time_warning'] = 'Om en installasjonsliste har mere enn en eller to moduler, så vær oppmerksom på at installasjonen kan ta noen minutter. Vennligst vær tålmodig!';
$lang['helptxt'] = 'Hjelp';
$lang['abouttxt'] = 'Om';
$lang['xmltext'] = 'XML Fil';
$lang['nametext'] = 'Modul navn';
$lang['mod_name_ver'] = '%s versjon %s';
$lang['unknown'] = 'Ukjent';
$lang['vertext'] = 'Versjon';
$lang['sizetext'] = 'Størrelse';
$lang['statustext'] = 'Status';
$lang['uptodate'] = 'Oppdatert';
$lang['install'] = 'Installer';
$lang['newerversion'] = 'Nyere versjon installert';
$lang['onlynewesttext'] = 'Vis kun nyeste versjon';
$lang['upgrade'] = 'Oppgradering tilgjengelig';
$lang['error_norepositoryurl'] = 'Stien til modul lageret er ikke oppgitt';
$lang['friendlyname'] = 'Modulbehandler';
$lang['postinstall'] = 'Modulbehandler modulen har blitt installert';
$lang['postuninstall'] = 'Modulbehandler har blitt avinstallert. Brukere vil ikke lengre ha mulighet til å installere moduler fra fjern-bibliotek. Men, lokalinstallasjoner er fortsatt mulig.';
$lang['really_uninstall'] = 'Er du sikker på at du vil avinstallere? Du vil miste en masse fin funksjonalitet.';
$lang['uninstalled'] = 'Modul avinnstallert.';
$lang['installed'] = 'Modul versjon %s innstallert.';
$lang['upgraded'] = 'Modul oppgradert til versjon %s.';
$lang['moddescription'] = 'En klient for Modul-lageret, denne modulen tillater forhåndsvisning og installering av moduler fra fjern-nettsider uten bruk av ftp, eller utpakking av arkiver. Modul XML filer blir lastet ned ved bruk av SOAP, integriteten sjekkes og blir så utpakket automatisk.';
$lang['back_to_module_manager'] = '« Tilbake til Modulebehandleren';
$lang['error'] = 'Feil!';
$lang['admindescription'] = 'Et verktøy for å hente og installere moduler fra fjern-servere.';
$lang['accessdenied'] = 'Tilgang nektet. Vennligst sjekk dinne rettigheter.';
$lang['changelog'] = 'Version 1.0. 10 January 2006. Initial Release.
Version 1.1. July, 2006. Released with the 1.0- beta
Version 1.1.1 August, 2006.  Require 1.0.1 of nuSOAP
Version 1.1.2 September, 2006.  Fixed a mistake that resulted in upgrade not not working at all
Version 1.1.3 September, 2006.
  
  Bumped minimum CMS Version to 1.0
  Now use 1 request to get the complete list of modules from the repository
  Added some missing lang strings
  Added the ability to reset the local cache of repository information
  Added the ability to restore the repository url to factory defaults
  

Version 1.1.4 February, 2007.  Now handles the safe mode check, and disables upgrading or installing modules if the permissions are wrong.
Version 1.1.5 September, 2007. New preference to make only latest module version show. Added nice message after saving preferences

Version 1.1.6 May, 2008. Now show if available modules are incompatible with the current CMS_VERSION.

Version 1.2 June, 2008.
This version should reduce the memory requirements of this module, and trade it off for performance on the server, and more requests to the server.
   
    Bumped Minimum CMS Version to 1.3
    Bumped Minimum repository version to 1.1
    Get rid of all of the session stuff
    Add support for requesting modules beginning with a prefix (usually a single letter)
    Add support for requesting only the newest versions of the modules
   

Version 1.2.1 August, 2008.
Added a warning message to the top of the admin display.

Version 1.3 May, 2009.
Added dependency checking.

Version 1.3.3 March, 2010.

  PHP 5.x improvements (specifically remove warnings for PHP 5.3)
  Minor bug fixes.


Version 1.4 June, 2010.

  Implemented automatic dependency calculation, and one-click installation.
  Assorted usability improvements.
  Minor bug fixes.

Version 1.5  - July, 2011

  Changes to REST API.. No longer uses nuSOAP.
  Many optimizations to downloading and installing modules.
  Can now install older versions of modules easily.
  Handle automatic upgrading of ddependencies.';
$lang['help'] = '<h3>Hva gjør denne?</h3>
<p> En klient for ModuleRepository, gir denne modulen forhåndsvisning, og installere moduler fra eksterne nettsteder uten behov for å benytte ftp eller utpakiing av arkiver. Modul XML-filer lastes ned ved hjelp av SOAP, integritet bekreftet, og deretter pakkes ut automatisk. </p>
<h3> Hvordan bruker jeg denne </h3>
<p> For å kunne bruke denne modulen, trenger du \'Endre moduler\' tillatelse, og du vil også trenge komplett og fullstendig webadresse til en \'Modul Repository\' installasjon. Du kan spesifisere denne url i "Utvidelser" -> "Modulbehandler" -> "Innstillinger"-siden. </p> <br/>
<p> Du kan finne grensesnittet for denne modulen under menyen \'Utvidelser\'. Når du velger denne modulen, \'Modul Repository\' installasjonen vil automatisk bli spurt for en liste over tilgjengelige xml-moduler. Denne listen vil bli kryssrefereres med listen over installerte moduler, og en sammendragside vises. Herfra kan du vise beskrivende informasjon, hjelp, og om informasjon for en modul uten å fysisk installere den. Du kan også velge å oppgradere eller installere moduler. </p>
<h3>Support</h3>
<p> Pr GPL, er denne programvaren leveres som det er. Les teksten av lisensen for full ansvarsfraskrivelse. </p>
<h3>Opphavsrett og lisens</h3>
<p> Copyright © 2006, calguy1000 <a href="mailto:calguy1000@hotmail.com"> <calguy1000@hotmail.com> </a>. Alle rettigheter er reservert. </p>
<p> Denne modulen har blitt utgitt under <a href="http://www.gnu.org/licenses/licenses.html#GPL"> GNU Public License </a>. Du må godta denne lisensavtalen før du bruker modulen. </p>';
?>