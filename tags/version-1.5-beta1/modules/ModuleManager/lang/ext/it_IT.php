<?php
$lang['use_at_your_own_risk'] = 'Usa a Vostro rischio';
$lang['compatibility_disclaimer'] = 'I moduli qua visualizzati sono contributi sia dagli sviluppatori di CMS che da terze parti indipendenti. Noi non garantiamo che i moduli qui utilizzabili sono funzionanti, testati o compatibili con il Vostro sistema. Voi siete incoraggiati a leggere le informazioni trovate nell&#039;Aiuto e nei link about per ciascun modulo prima di installarlo.';
$lang['notice'] = 'Avviso';
$lang['general_notice'] = 'Le versioni visualizzate qui rappresentano gli ultimi file XML spediti al vostro repository selezionato (di solito il CMS %s). Essi possono o meno rappresentare le ultime versioni utilizzabili.  Potete visualizzare il file rilasciato sul repository che avete selezionato. Se state utilizzando il repository predefinito, potete digitare il nome del modulo nel box di ricerca sul %s e scegliere il bottone &quot;Files&quot;.';
$lang['incompatible'] = 'Incompatibile';
$lang['prompt_settings'] = 'Configurazioni';
$lang['prompt_otheroptions'] = 'Altre opzioni';
$lang['reset'] = 'Resetta';
$lang['error_permissions'] = '<strong><em>ATTENZIONE:</em></strong> Permessi insufficienti della directory per installare i moduli. Potreste avere problemi con PHP Safe mode.  Assicurarsi che il safe mode &egrave; disabilitato e i permessi del file system siano adeguati.';
$lang['error_minimumrepository'] = 'La versione del Deposito non &egrave; compatibile con questo modulo';
$lang['prompt_reseturl'] = 'Azzera l&#039;URL al valore predefinito';
$lang['prompt_resetcache'] = 'Azzera la cache locale dei dati del Deposito';
$lang['prompt_dl_chunksize'] = 'Dimensione del chunk di Download (Kb)';
$lang['text_dl_chunksize'] = 'Il massimo ammontare di dati da download dal server in un chunk (quando installi un modulo)';
$lang['error_nofilesize'] = 'Nessun parametro filesize inserito';
$lang['error_nofilename'] = 'Nessun parametro filename inserito';
$lang['error_checksum'] = 'Errore checksum. Indica probabilmente un file corrotto quando fu inviato al repository o un problema nel download alla vostra macchina.';
$lang['cantdownload'] = 'Non posso effettuare il download';
$lang['download'] = 'Download';
$lang['error_moduleinstallfailed'] = 'Installazione Modulo fallita';
$lang['error_connectnomodules'] = 'Sebbene una connessione fu effettuata con successo allo specifico Deposito Moduli, appare che il repository non sta ancora condividendo questi moduli';
$lang['submit'] = 'Inoltra';
$lang['text_repository_url'] = 'L&#039;indirizzo dovrebbe essere della forma http://www.mycmssite.com/path/soap.php?module=ModuleRepository';
$lang['prompt_repository_url'] = 'Indirizzo del Deposito Moduli:';
$lang['availmodules'] = 'Moduli utilizzabili';
$lang['preferences'] = 'Preferenze';
$lang['preferencessaved'] = 'Preferenze salvate';
$lang['repositorycount'] = 'Moduli trovati nel Deposito Moduli';
$lang['instcount'] = 'Moduli correntemente installati';
$lang['availablemodules'] = 'Il corrente stato dei moduli utilizzabile dal corrente Deposito Moduli';
$lang['helptxt'] = 'Aiuto';
$lang['abouttxt'] = 'Informazioni';
$lang['xmltext'] = 'File XML';
$lang['nametext'] = 'Nome Modulo';
$lang['vertext'] = 'Versione';
$lang['sizetext'] = 'Dimensione (bytes)';
$lang['statustext'] = 'Stato/Azione';
$lang['uptodate'] = 'Installato';
$lang['install'] = 'installa';
$lang['newerversion'] = 'Nuova versione installata';
$lang['onlynewesttext'] = 'Mostra solo le nuove versioni';
$lang['upgrade'] = 'Aggiornamento';
$lang['error_nosoapconnect'] = 'Non posso connettermi al server SOAP';
$lang['error_soaperror'] = 'Problemi SOAP';
$lang['error_norepositoryurl'] = 'L&#039;indirizzo del Deposito Moduli non &egrave; stato specificato';
$lang['friendlyname'] = 'Modulo Manager';
$lang['postinstall'] = 'Modulo Manager &egrave; stato installato con successo.';
$lang['postuninstall'] = 'Il Modulo Manager &egrave; stato disinstallato. Gli utenti non hanno pi&ugrave; la possibilit&agrave; di installare moduli dal Deposito Moduli. Tuttavia &egrave; possibile l&#039;installazione locale.';
$lang['really_uninstall'] = 'Siete sicuri di di voler disinstallare? In questo modo spariranno alcune delle funzionalit&agrave;.';
$lang['uninstalled'] = 'Modulo disinstallato.';
$lang['installed'] = 'Versione del modulo %s installato.';
$lang['upgraded'] = 'Modulo aggiornato alla versione %s.';
$lang['moddescription'] = 'Un client per il Deposito Moduli, questo modulo permette di installare moduli da siti remoti senza la necessit&agrave; di ftp, o estarre archivi zip. I file moduli XML sono scaricati usando SOAP, verificati la loro integrit&agrave; e poi espansi automaticamente.';
$lang['error'] = 'Errore!';
$lang['admindescription'] = 'Una utilit&agrave; per prelevare e installare moduli da server remoti.';
$lang['accessdenied'] = 'Accesso negato. Si prega di controllare i vostri permissi.';
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
$lang['utmz'] = '156861353.1221410208.562.92.utmccn=(referral)|utmcsr=forum.cmsmadesimple.org|utmcct=/index.php/topic,25704.0.html|utmcmd=referral';
$lang['utma'] = '156861353.1807151640.1182960456.1221941268.1222111946.564';
$lang['utmb'] = '156861353';
$lang['utmc'] = '156861353';
?>