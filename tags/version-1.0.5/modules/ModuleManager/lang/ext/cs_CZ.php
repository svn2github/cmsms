<?php
$lang['prompt_settings'] = 'Nastaven&iacute;';
$lang['prompt_otheroptions'] = 'Jin&eacute; volby';
$lang['reset'] = 'Reset';
$lang['error_minimumrepository'] = 'Verze repozit&aacute;ře nen&iacute; kompatibiln&iacute; s t&iacute;mto module managerem';
$lang['prompt_reseturl'] = 'Reset URL na v&yacute;choz&iacute;';
$lang['prompt_resetcache'] = 'Reset lok&aacute;ln&iacute; ke&scaron;e repozit&aacute;řov&yacute;ch dat';
$lang['prompt_dl_chunksize'] = 'Velikost d&aacute;vky ke stažen&iacute; (Kb)';
$lang['text_dl_chunksize'] = 'Maxim&aacute;ln&iacute; velikost dat pro stažen&iacute; ze serveru v jedn&eacute; d&aacute;vce (při instalaci modulu)';
$lang['error_nofilesize'] = 'Nezad&aacute;n parametr velikost souboru';
$lang['error_nofilename'] = 'Nezad&aacute;n parametr jm&eacute;no souboru';
$lang['error_checksum'] = 'Chyba kontroln&iacute;ho součtu. Toto pravděpodobně indikuje po&scaron;kozen&yacute; souboru, buď  když byl přen&aacute;&scaron;en do repozit&aacute;ře, nebo na cestě při stahov&aacute;n&iacute; do va&scaron;eho poč&iacute;tače.';
$lang['cantdownload'] = 'Nelze st&aacute;hnout';
$lang['download'] = 'St&aacute;hnout';
$lang['error_moduleinstallfailed'] = 'Instalace modulu selhala';
$lang['error_connectnomodules'] = 'Ačkoliv bylo &uacute;&scaron;pě&scaron;ně vytvořeno spojen&iacute; k zadan&eacute;mu repozit&aacute;ři, vypad&aacute; to, že tento repozit&aacute;ř zat&iacute;m nesd&iacute;l&iacute; ž&aacute;dn&eacute; moduly';
$lang['submit'] = 'Odeslat';
$lang['text_repository_url'] = 'URL mus&iacute; b&yacute;t ve form&aacute;tu http://www.mycmssite.com/path/soap.php?module=ModuleRepository';
$lang['prompt_repository_url'] = 'URL repozit&aacute;ře modulů:';
$lang['availmodules'] = 'Dostupn&eacute; moduly';
$lang['preferences'] = 'Nastaven&iacute;';
$lang['repositorycount'] = 'Moduly nalezen&eacute; v repozit&aacute;ři';
$lang['instcount'] = 'Nainstalovan&eacute; moduly';
$lang['availablemodules'] = 'Aktu&aacute;ln&iacute; status modulů dostupn&yacute;ch z aktu&aacute;ln&iacute;ho repozit&aacute;ře';
$lang['helptxt'] = 'N&aacute;pověda';
$lang['abouttxt'] = 'O';
$lang['xmltext'] = 'XML soubor';
$lang['nametext'] = 'Jm&eacute;no modulu';
$lang['vertext'] = 'Verze';
$lang['sizetext'] = 'Velikost';
$lang['statustext'] = 'Stav';
$lang['uptodate'] = 'Aktu&aacute;ln&iacute;';
$lang['install'] = 'instalovat';
$lang['newerversion'] = 'Nověj&scaron;&iacute; verze nainstalov&aacute;na';
$lang['upgrade'] = 'Dostupn&aacute; aktualizace';
$lang['error_nosoapconnect'] = 'Nelze se připojit k SOAP serveru';
$lang['error_soaperror'] = 'SOAP Probl&eacute;m';
$lang['error_norepositoryurl'] = 'URL adresa repozit&aacute;ře modulu nebyla dosud zad&aacute;na';
$lang['friendlyname'] = 'Spr&aacute;vce modulů';
$lang['postinstall'] = 'Poinstalačn&iacute; zpr&aacute;va, (např., Nastavte pr&aacute;va &quot;&quot; pro použit&iacute; tohoto modulu!)';
$lang['postuninstall'] = 'Poodinstalačn&iacute; zpr&aacute;va, např., &quot;Curses! Foiled Again!&quot;';
$lang['really_uninstall'] = 'Opravdu chcete odinstalovat tento modul?';
$lang['uninstalled'] = 'Modul odinstalov&aacute;n.';
$lang['installed'] = 'Modul verze %s nainstalov&aacute;n.';
$lang['upgraded'] = 'Module pov&yacute;&scaron;en na verzi %s.';
$lang['moddescription'] = 'Klient pro ModuleRepository, tento modul umožňuje n&aacute;hled a instalaci modulů ze vzd&aacute;len&yacute;ch serverů bez potřeby stahov&aacute;n&iacute; přes ftp nebo rozbalov&aacute;n&iacute; archivů.  XML soubory modulů jsou staženy pomoc&iacute; SOAP, zkontrolov&aacute;na integrita a pot&eacute; automaticky rozbalen.';
$lang['error'] = 'Chyba!';
$lang['admindescription'] = 'N&aacute;stroj pro stahov&aacute;n&iacute; a instalov&aacute;n&iacute; modulů ze vzd&aacute;len&yacute;ch serverů.';
$lang['accessdenied'] = 'Př&iacute;stup zak&aacute;z&aacute;n. Ověřte pros&iacute;m sv&aacute; opr&aacute;vněn&iacute;.';
$lang['changelog'] = '<ul><li>Version 1.0. 10 January 2006. Initial Release.</li></ul>';
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
$lang['utmz'] = '156861353.1171218573.11.2.utmccn=(referral)|utmcsr=dev.cmsmadesimple.org|utmcct=/projects/czech/|utmcmd=referral';
$lang['utma'] = '156861353.659783585.1156179136.1171216770.1171218573.11';
$lang['utmb'] = '156861353';
$lang['utmc'] = '156861353';
?>