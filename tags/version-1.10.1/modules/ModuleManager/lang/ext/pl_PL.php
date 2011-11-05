<?php
$lang['error_search'] = 'Błąd wyszukiwania';
$lang['prompt_disable_caching'] = 'Disable caching of requests from the server';
$lang['info_disable_caching'] = '<strong>Not Recommended</strong>.  For performance reasons, ModuleManager will cache for (by default one hour) much of the information retrieved from the remote server';
$lang['operation_results'] = 'Operation Results';
$lang['error_noresults'] = 'We expected some results to be available from queued operations, but none were found.  Please try to reproduce this experience, and provide sufficient information to support personell for diagnoses';
$lang['versionsformodule'] = 'Dostępne wersje modułu %s';
$lang['yourversion'] = 'Twoja wersja';
$lang['latestdepends'] = 'Zawsze instaluj najnowsze moduły';
$lang['info_latestdepends'] = 'When installing a module with dependencies, this option will make sure that the latest version of the dependency will be installed';
$lang['error_internal'] = 'Wewnętrzny błąd... Poinformuj swojego administratora';
$lang['error_downloadxml'] = 'Wystąpił problem z pobieraniem pliku XML: %s';
$lang['error_request_problem'] = 'A problem occurred communicating with the module server';
$lang['error_searchterm'] = 'Please specify something valid to search for';
$lang['search_noresults'] = 'Szukanie zakończone, ale nie ma pasujących wynik&oacute;w';
$lang['advancedsearch_help'] = 'Specify words to include or exclude from the search using a + or -, surround exact phrases with quotes.  i.e:  +red -apple +&quot;some text&quot;';
$lang['search_results'] = 'Wynik szukania';
$lang['prompt_advancedsearch'] = 'Szukanie zaawansowane';
$lang['search_input'] = 'Search Input';
$lang['searchterm'] = 'Search Term';
$lang['search'] = 'Szukaj';
$lang['available_updates'] = 'Dostępne aktualizacje moduł&oacute;w; zanim zaaktualizujesz, przeczytaj informacje o wydaniu i zr&oacute;b kopię zapasową strony.';
$lang['all_modules_up_to_date'] = 'Nie ma nowszych moduł&oacute;w w repozytorium';
$lang['error_module_object'] = 'Error: could not get an instance of the %s module';
$lang['error_nomatchingmodules'] = 'Error: could not find any matching modules in the repository';
$lang['error_nomodules'] = 'Błąd: nie można pobrać listy zainstalowanych moduł&oacute;w';
$lang['upgrade_available'] = 'Nowsza wersja dostępna (%s), posiadasz (%s)';
$lang['newversions'] = 'Dostępne aktualizacje';
$lang['notice_depends'] = '%s has unresolved dependencies. In order to install this module the following actions must occur';
$lang['install_submit'] = 'Instaluj';
$lang['depend_upgrade'] = 'Moduł %s zostanie zaaktualizowany do wersji %s.';
$lang['depend_install'] = 'Moduł %s (wersja %s lub nowsza) zostanie zainstalowany.';
$lang['depend_activate'] = 'Moduł %s zostanie aktywowany.';
$lang['action_activated'] = 'Moduł %s został aktywowany.';
$lang['action_installed'] = 'Moduł %s został zainstalowany i przesyła wiadomość: %s';
$lang['action_upgraded'] = 'Moduł %s został uaktualnony';
$lang['title_installation_complete'] = 'Proces instalacji zakończony sukcesem!';
$lang['install_with_deps'] = 'Evaluate all Dependencies and Install';
$lang['msg_nodependencies'] = 'Ten plik nie ma wskazanych zależności';
$lang['error_upgrade'] = 'Uaktualnienie modułu %s zawiodło!';
$lang['error_skipping'] = 'Skipping install/upgrade of %s due to errors in setting up dependencies. Please see message above, and try again.';
$lang['dependstxt'] = 'Zależności';
$lang['use_at_your_own_risk'] = 'Używasz na własne ryzyko';
$lang['compatibility_disclaimer'] = 'The modules displayed here are contributed by both the CMS Developers, and independent third parties.  We make no guarantees that the modules available here are functional, tested, or compatible with your system.  You are encouraged to read the information found in the help and about links for each module before attempting the installation.';
$lang['notice'] = 'Notka';
$lang['general_notice'] = 'Wersje wyświetlone tutaj pochodzą z najnowszych plik&oacute;w XML wgranych do wybranego repozytorium (zwykle CMS %s).  Mogą nie przedstawiać najnowszych możliwych wersji.';
$lang['incompatible'] = 'Niekompatybilne';
$lang['prompt_settings'] = 'Ustawienia';
$lang['prompt_otheroptions'] = 'Inne opcje';
$lang['reset'] = 'Wyczyść';
$lang['error_permissions'] = '<strong><em>UWAGA:</em></strong> Prawa do instalowania moduł&oacute;w w danym katalogu są ograniczone. Możesz mieć r&oacute;wnież problemy z PHP Safe mode. Upewnij się, że tryb &quot;PHP Safe Mode&quot; jest wyłączony i że prawa do plik&oacute;w i katalog&oacute;w są odpowiednie.';
$lang['error_minimumrepository'] = 'Wersja repozytorium nie jest kompatybilna z modułem Menadżera Moduł&oacute;w';
$lang['prompt_reseturl'] = 'Skasuj adres URL by wr&oacute;cić do ustawień domyślnych';
$lang['prompt_resetcache'] = 'Skasuj lokalną pamięć podręczną (cache) z repozytorium moduł&oacute;w';
$lang['prompt_dl_chunksize'] = 'Rozmiar fragment&oacute;w do ściągnia (Kb)';
$lang['text_dl_chunksize'] = 'Maksymalny rozmiar danych do ściągnięcia z serwera w jednym fragmencie (podczas instalacji modułu)';
$lang['error_nofilesize'] = 'Brak parametru wielkości pliku';
$lang['error_nofilename'] = 'Brak parametru nazwy pliku';
$lang['error_unsatisfiable_dependency'] = 'Nie można znaleźć wymaganego modułu &quot;%s&quot; (wersji %s lub p&oacute;źniejszej) w repozytorium. Jest on wymagany przez %s; Może to wskazywać na problem z wersją tego modułu w repozytorium. Skontaktuj się z autorem modułu. Anulowanie.';
$lang['error_checksum'] = 'Błąd sumy kontrolnej. Najczęściej oznacza to zły plik, uszkodzony podczas ściągania lub instalowania. Spr&oacute;buj ponownie, ewentualnie będziesz musiał zainstalować moduł ręcznie.';
$lang['cantdownload'] = 'Nie mogę ściągnąć pakietu';
$lang['download'] = 'Ściągnij i zainstaluj';
$lang['error_moduleinstallfailed'] = 'Instalacja modułu nie powiodła się';
$lang['error_connectnomodules'] = 'Połączenie zostało nawiązane, ale wskazane repozytorium nie zawiera udostępnionych moduł&oacute;w CMS Made Simple.';
$lang['submit'] = 'Wyślij';
$lang['text_repository_url'] = 'URL powinno być w postaci:
http://www.mycmssite.com/path/soap.php?module=ModuleRepository';
$lang['prompt_repository_url'] = 'URL repozytorium moduł&oacute;w:';
$lang['title_installation'] = 'Instalacja';
$lang['availmodules'] = 'Dostępne moduły';
$lang['preferences'] = 'Ustawienia';
$lang['preferencessaved'] = 'Ustawienia zapisano';
$lang['repositorycount'] = 'Moduły znalezione w repozytorium';
$lang['instcount'] = 'Moduły obecnie zainstalowane';
$lang['availablemodules'] = 'Obecny status moduł&oacute;w dostępnych z aktualnego repozytorium';
$lang['time_warning'] = 'The installation list has more than one or two modules. Be aware that the install could take a few minutes. Please be patient!';
$lang['helptxt'] = 'Pomoc';
$lang['abouttxt'] = 'Opis';
$lang['xmltext'] = 'Plik XML';
$lang['nametext'] = 'Nazwa modułu';
$lang['mod_name_ver'] = '%s version %s';
$lang['unknown'] = 'Nieznane';
$lang['vertext'] = 'Wersja';
$lang['sizetext'] = 'Rozmiar (Kilobajty)';
$lang['statustext'] = 'Status/Akcja';
$lang['uptodate'] = 'Zainstalowany';
$lang['install'] = 'Zainstaluj';
$lang['newerversion'] = 'Nowsza wersja zainstalowana';
$lang['onlynewesttext'] = 'Pokazuj tylko najnowszą wersję';
$lang['upgrade'] = 'Aktualizuj wersję';
$lang['error_norepositoryurl'] = 'Adres URL do repozytorium moduł&oacute;w nie został wprowadzony';
$lang['friendlyname'] = 'Menadżer moduł&oacute;w';
$lang['postinstall'] = 'Menadżer moduł&oacute;w został pomyślnie zainstalowany';
$lang['postuninstall'] = 'Menadżer Moduł&oacute;w został odinstalowany. Użytkownicy nie będą mogli instalować moduł&oacute;w ze zdalnego repozytorium. Instalacje ręczne nadal są dostępne.';
$lang['really_uninstall'] = 'Czy na pewno chcesz odinstalować? Tw&oacute;j serwis straci sporo na użyteczności, ale to Twoja decyzja!';
$lang['uninstalled'] = 'Moduł odinstalowany';
$lang['installed'] = 'Wersja modułu %s zainstalowana.';
$lang['upgraded'] = 'Moduł aktualizowano do wersji %s.';
$lang['moddescription'] = 'A client for the ModuleRepository, this module allows previewing, and installing modules from remote sites without the need for ftping, or unzipping archives.  Module XML files are downloaded using SOAP, integrity verified, and then expanded automatically.';
$lang['back_to_module_manager'] = '&laquo; Powr&oacute;t do Menadżera Moduł&oacute;w';
$lang['error'] = 'Błąd!';
$lang['admindescription'] = 'Narzędzie do ściągania i instalowania moduł&oacute;w ze zdalnych serwer&oacute;w.';
$lang['accessdenied'] = 'Dostęp zabroniony. Sprawdź swoje uprawnienia.';
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
</li>
<li>Version 1.1.4 February, 2007.  Now handles the safe mode check, and disables upgrading or installing modules if the permissions are wrong.</li>
<li>Version 1.1.5 September, 2007. New preference to make only latest module version show. Added nice message after saving preferences</li>
</li>
<li>Version 1.1.6 May, 2008. Now show if available modules are incompatible with the current CMS_VERSION.</li>
</li>
<li>Version 1.2 June, 2008.<br/>
This version should reduce the memory requirements of this module, and trade it off for performance on the server, and more requests to the server.
   <ul>
    <li>Bumped Minimum CMS Version to 1.3</li>
    <li>Bumped Minimum repository version to 1.1</li>
    <li>Get rid of all of the session stuff</li>
    <li>Add support for requesting modules beginning with a prefix (usually a single letter)</li>
    <li>Add support for requesting only the newest versions of the modules</li>
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
  <li>PHP 5.x improvements (specifically remove warnings for PHP 5.3)</li>
  <li>Minor bug fixes.</li>
</ul>
</li>
<li>Version 1.4 June, 2010.<br/>
<ul>
  <li>Implemented automatic dependency calculation, and one-click installation.</li>
  <li>Assorted usability improvements.</li>
  <li>Minor bug fixes.</li>
</ul>
<li>Version 1.5  - July, 2011
<ul>
  <li>Changes to REST API.. No longer uses nuSOAP.</li>
  <li>Many optimizations to downloading and installing modules.</li>
  <li>Can now install older versions of modules easily.</li>
  <li>Handle automatic upgrading of ddependencies.</li>
</ul>
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
<p>Copyright &copy; 2006, calguy1000 <a href="mailto:calguy1000@hotmail.com"><calguy1000@hotmail.com></a>. All Rights Are Reserved.</p>
<p>This module has been released under the <a href="http://www.gnu.org/licenses/licenses.html#GPL">GNU Public License</a>. You must agree to this license before using the module.</p>';
$lang['qca'] = 'P0-838480105-1312822279958';
$lang['utmz'] = '156861353.1319874013.1.1.utmcsr=(direct)|utmccn=(direct)|utmcmd=(none)';
$lang['utma'] = '156861353.415412338.1319874013.1319964815.1319965390.7';
$lang['utmc'] = '156861353';
$lang['utmb'] = '156861353';
?>