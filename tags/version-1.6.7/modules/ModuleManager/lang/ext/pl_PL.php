<?php
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
$lang['error_checksum'] = 'Błąd sumy kontrolnej. Najczęściej oznacza to zły plik, uszkodzony podczas ściągania lub instalowania. Spr&oacute;buj ponownie, ewentualnie będziesz musiał zainstalować moduł ręcznie.';
$lang['cantdownload'] = 'Nie mogę ściągnąć pakietu';
$lang['download'] = 'Ściągnij i zainstaluj';
$lang['error_moduleinstallfailed'] = 'Instalacja modułu nie powiodła się';
$lang['error_connectnomodules'] = 'Połączenie zostało nawiązane, ale wskazane repozytorium nie zawiera udostępnionych moduł&oacute;w CMS Made Simple.';
$lang['submit'] = 'Wyślij';
$lang['text_repository_url'] = 'URL powinno być w postaci:
http://www.mycmssite.com/path/soap.php?module=ModuleRepository';
$lang['prompt_repository_url'] = 'URL repozytorium moduł&oacute;w:';
$lang['availmodules'] = 'Dostępne moduły';
$lang['preferences'] = 'Ustawienia';
$lang['preferencessaved'] = 'Ustawienia zapisano';
$lang['repositorycount'] = 'Moduły znalezione w repozytorium';
$lang['instcount'] = 'Moduły obecnie zainstalowane';
$lang['availablemodules'] = 'Obecny status moduł&oacute;w dostępnych z aktualnego repozytorium';
$lang['helptxt'] = 'Pomoc';
$lang['abouttxt'] = 'Opis';
$lang['xmltext'] = 'Plik XML';
$lang['nametext'] = 'Nazwa modułu';
$lang['vertext'] = 'Wersja';
$lang['sizetext'] = 'Rozmiar (Kilobajty)';
$lang['statustext'] = 'Status/Akcja';
$lang['uptodate'] = 'Zainstalowany';
$lang['install'] = 'Zainstaluj';
$lang['newerversion'] = 'Nowsza wersja zainstalowana';
$lang['onlynewesttext'] = 'Pokazuj tylko najnowszą wersję';
$lang['upgrade'] = 'Aktualizuj wersję';
$lang['error_nosoapconnect'] = 'Nie mogę połączyć się z serwerem SOAP';
$lang['error_soaperror'] = 'Problem z SOAP';
$lang['error_norepositoryurl'] = 'Adres URL do repozytorium moduł&oacute;w nie został wprowadzony';
$lang['friendlyname'] = 'Menadżer moduł&oacute;w';
$lang['postinstall'] = 'Menadżer moduł&oacute;w został pomyślnie zainstalowany';
$lang['postuninstall'] = 'Menadżer Moduł&oacute;w został odinstalowany. Użytkownicy nie będą mogli instalować moduł&oacute;w ze zdalnego repozytorium. Instalacje ręczne nadal są dostępne.';
$lang['really_uninstall'] = 'Czy na pewno chcesz odinstalować? Tw&oacute;j serwis straci sporo na użyteczności, ale to Twoja decyzja!';
$lang['uninstalled'] = 'Moduł odinstalowany';
$lang['installed'] = 'Wersja modułu %s zainstalowana.';
$lang['upgraded'] = 'Moduł aktualizowano do wersji %s.';
$lang['moddescription'] = 'A client for the ModuleRepository, this module allows previewing, and installing modules from remote sites without the need for ftping, or unzipping archives.  Module XML files are downloaded using SOAP, integrity verified, and then expanded automatically.';
$lang['error'] = 'Błąd!';
$lang['admindescription'] = 'Narzędzie do ściągania i instalowania moduł&oacute;w ze zdalnych serwer&oacute;w.';
$lang['accessdenied'] = 'Dostęp zabroniony. Sprawdź swoje uprawnienia.';
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
<li>Version 1.1.5 September, 2007. New preference to make only latest module version show. Added nice message after saving preferences</li>
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
$lang['utma'] = '156861353.876265290.1175957845.1175957845.1175978189.2';
?>