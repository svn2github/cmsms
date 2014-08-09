<?php
$lang['error_search'] = 'Errore di ricerca';
$lang['prompt_disable_caching'] = 'Disattiva la memorizzazione in cache delle richieste dal server';
$lang['info_disable_caching'] = '<strong>Non Consigliato</strong>.  Per ragioni di prestazioni, ModuleManager utilizzer&agrave; la memoria cache (di default per un&#039;ora) per molte delle informazioni ricevute dal server remoto';
$lang['operation_results'] = 'Risultati dell&#039;operazione';
$lang['error_noresults'] = 'Erano attesi del risultati dalle operazioni in corso, ma non ve ne sono stati.  Cercate di ricreare le condizioni del problema e comunicate al personale di supporto le giuste informazioni per la diagnosi del caso.';
$lang['versionsformodule'] = 'Versione disponibile del modulo %s';
$lang['yourversion'] = 'Vostra versione';
$lang['latestdepends'] = 'Installa sempre il modulo pi&ugrave; aggiornato';
$lang['info_latestdepends'] = 'Quando si installa un modulo con dipendenze, quest&#039;opzione accerter&agrave; che venga installata la versione pi&ugrave; attuale dei moduli dipendentiWhen installing a module with dependencies, this option will make sure that the latest version of the dependency will be installed';
$lang['error_internal'] = 'Errore Interno... Si prega di segnalarlo al vostro amministratore di sistema';
$lang['error_downloadxml'] = 'Si &egrave; verificato un errore nello scaricamento del File XML: %s';
$lang['error_request_problem'] = 'Si &egrave; verificato un errore nella comunicazione con il server moduli';
$lang['error_searchterm'] = 'Specificate un termine di ricerca valido per';
$lang['search_noresults'] = 'Ricerca effettuata con successo. Nessun risultato corrispondente ai criteri di ricerca';
$lang['advancedsearch_help'] = 'Specificate termini da includere o escludere dalla ricerca utlizzando un + o -. Racchiudete le espressioni tra virgolette per cercare il risultato esatto.  Es.:  +rosso -mela +&quot;del testo&quot;';
$lang['search_results'] = 'Risultati di Ricerca';
$lang['prompt_advancedsearch'] = 'Ricerca Avanzata';
$lang['search_input'] = 'Ricerca Input';
$lang['searchterm'] = 'Ricerca Termine';
$lang['search'] = 'Cerca';
$lang['available_updates'] = 'Moduli utilizzabili per Aggiornamento';
$lang['all_modules_up_to_date'] = 'Non ci sono nuovi moduli utilizzabili nel repository';
$lang['error_module_object'] = 'Errore: non posso prendere una istanza del modulo %s';
$lang['error_nomatchingmodules'] = 'Errore: non trovo nessun modulo nel repository che soddisfa la richiesta';
$lang['error_nomodules'] = 'Errore: could not retrieve list of installed modules';
$lang['upgrade_available'] = 'Nuova versione aggiornata (%s), Vioi avete (%s)';
$lang['newversions'] = 'Moduli Installati';
$lang['notice_depends'] = '%s dipende dalla seguente azione. Click su &quot;Installa&quot; per andare avanti.';
$lang['install_submit'] = 'Installa';
$lang['depend_upgrade'] = 'Modulo %s necessita di essere aggiornato alla versione %s.';
$lang['depend_install'] = 'Modulo %s (versione %s o seguente) necessita di essere installato.';
$lang['depend_activate'] = 'Modulo %s necessita di essere attivato.';
$lang['action_activated'] = 'Modulo %s &egrave; stato attivato.';
$lang['action_installed'] = 'Modulo %s &egrave; stato installato con il seguente messaggi(o): %s';
$lang['action_upgraded'] = 'Modulo %s &egrave; stato aggiornato';
$lang['title_installation_complete'] = 'Processo di installazione completato!';
$lang['install_with_deps'] = 'Valutazione di tutte le dipendenze e installazione';
$lang['msg_nodependencies'] = 'Questo file non ha evidenziato nessuna dipendenza';
$lang['error_upgrade'] = 'Aggiornamento del modulo %s fallito!';
$lang['error_skipping'] = 'Tralascio l&#039;installazione/aggiornamento di %s per errori nelle dipendenze. Si prega di vedere il messaggio sottostante e riprovare.';
$lang['dependstxt'] = 'Dipendenze';
$lang['use_at_your_own_risk'] = 'Usate a Vostro rischio';
$lang['compatibility_disclaimer'] = 'I moduli visualizzati sono contribuiti sia dagli sviluppatori del CMS che da terze parti indipendenti. Noi non garantiamo che i moduli disponibili siano funzionanti, testati o compatibili con il vostro sistema. Siete invitati a leggere le informazioni trovate nei collegamenti Aiuto e Informazioni di ciascun modulo prima di installarlo.';
$lang['notice'] = 'Avviso';
$lang['general_notice'] = 'Le versioni visualizzate qui rappresentano gli ultimi file XML spediti al vostro repository selezionato (di solito il CMS %s). Essi possono o meno rappresentare le ultime versioni utilizzabili.  Potete visualizzare il file rilasciato sul repository che avete selezionato. Se state utilizzando il repository predefinito, potete digitare il nome del modulo nel box di ricerca sul %s e scegliere il bottone &quot;Files&quot;.';
$lang['incompatible'] = 'Incompatibile';
$lang['prompt_settings'] = 'Impostazioni';
$lang['prompt_otheroptions'] = 'Altre opzioni';
$lang['reset'] = 'Resetta';
$lang['error_permissions'] = '<strong><em>ATTENZIONE:</em></strong> Permessi di cartella non sufficienti per installare i moduli. Potreste avere problemi con PHP Safe mode.  Assicurarsi che il safe mode sia disabilitato e i permessi del file system siano adeguati.';
$lang['error_minimumrepository'] = 'La versione del Deposito non &egrave; compatibile con questo gestore moduli';
$lang['prompt_reseturl'] = 'Reimposta l&#039;URL al valore predefinito';
$lang['prompt_resetcache'] = 'Reimposta la cache locale dei dati del Deposito';
$lang['prompt_dl_chunksize'] = 'Dimensione del pacchetto di scaricamento (Kb)';
$lang['text_dl_chunksize'] = 'La quantit&agrave; massima di dati da scaricare dal server in un pacchetto (quando installi un modulo)';
$lang['error_nofilesize'] = 'Nessun parametro dimensione file inserito';
$lang['error_nofilename'] = 'Nessun parametro nome file inserito';
$lang['error_unsatisfiable_dependency'] = 'Non posso trovare il modulo richiesto &quot;%s&quot; (versione %s o seguente) nel deposito moduli. E&#039; direttamente richiesto da %s; questo potrebbe indicare un problema con la versione di questo modulo. Si prega di contattare l&#039;autore del modulo.';
$lang['error_checksum'] = 'Errore checksum. Indica probabilmente un file corrotto quando &egrave; stato inviato al deposito moduli o un problema nello scaricamento verso la vostra macchina.';
$lang['cantdownload'] = 'Non posso scaricare';
$lang['download'] = 'Scarica e Installa';
$lang['error_moduleinstallfailed'] = 'Installazione Modulo fallita';
$lang['error_connectnomodules'] = 'Sebbene sia stata effettuata una connessione con il Deposito Moduli specifico, sembra che non ci siano moduli condivisi disponibili.';
$lang['submit'] = 'Invia';
$lang['text_repository_url'] = 'L&#039;indirizzo dovrebbe essere nella forma http://www.mycmssite.com/ModuleRepository/request/v2 (dando per scontato che i pretty url siano abilitati sul server di deposito)';
$lang['prompt_repository_url'] = 'Indirizzo del Deposito Moduli:';
$lang['title_installation'] = 'Installazione';
$lang['availmodules'] = 'Moduli Disponibili';
$lang['preferences'] = 'Preferenze';
$lang['preferencessaved'] = 'Preferenze salvate';
$lang['repositorycount'] = 'Moduli trovati nel Deposito Moduli';
$lang['instcount'] = 'Moduli attualmente installati';
$lang['availablemodules'] = 'Stato attuale dei moduli disponibili dal Deposito Moduli attuale';
$lang['time_warning'] = 'La lista di installazione ha pi&ugrave; di uno o due moduli. Prestare attenzione che l&#039;installazione potrebbe impiegare alcuni minuti. Si prega di essere pazienti!';
$lang['helptxt'] = 'Aiuto';
$lang['abouttxt'] = 'Informazioni';
$lang['xmltext'] = 'File XML';
$lang['nametext'] = 'Nome Modulo';
$lang['mod_name_ver'] = '%s versione %s ';
$lang['unknown'] = 'Sconosciuto';
$lang['vertext'] = 'Versione';
$lang['sizetext'] = 'Dimensione (Kilobytes)';
$lang['statustext'] = 'Stato/Azione';
$lang['uptodate'] = 'Installato';
$lang['install'] = 'installa';
$lang['newerversion'] = 'Versione pi&ugrave; nuova installata';
$lang['onlynewesttext'] = 'Mostra solo le nuove versioni';
$lang['upgrade'] = 'Aggiorna';
$lang['error_norepositoryurl'] = 'L&#039;indirizzo del Deposito Moduli non &egrave; stato specificato';
$lang['friendlyname'] = 'Gestore Moduli';
$lang['postinstall'] = 'Il Gestore Moduli &egrave; stato installato con successo.';
$lang['postuninstall'] = 'Il Gestore Moduli &egrave; stato disinstallato. Gli utenti non hanno pi&ugrave; la possibilit&agrave; di installare moduli dal Deposito Moduli remoto. Tuttavia &egrave; ancora possibile l&#039;installazione locale.';
$lang['really_uninstall'] = 'Siete sicuri di di voler disinstallare? In questo modo non saranno pi&ugrave; disponibili molte funzionalit&agrave; interessanti.';
$lang['uninstalled'] = 'Modulo disinstallato.';
$lang['installed'] = 'Versione del modulo %s installata.';
$lang['upgraded'] = 'Modulo aggiornato alla versione %s.';
$lang['moddescription'] = 'Un client per il Deposito Moduli, questo modulo permette di installare moduli da siti remoti senza la necessit&agrave; di ftp, o estarre archivi zip. I file moduli XML sono scaricati usando SOAP, verificati la loro integrit&agrave; e poi espansi automaticamente.';
$lang['back_to_module_manager'] = '&laquo; Ritorna al Module Manager';
$lang['error'] = 'Errore!';
$lang['admindescription'] = 'Uno strumento per prelevare e installare moduli da server remoti.';
$lang['accessdenied'] = 'Accesso negato. Si prega di controllare i vostri permessi.';
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
$lang['utma'] = '156861353.1309687447.1326717301.1326717301.1326717301.1';
$lang['utmz'] = '156861353.1326717301.1.1.utmccn=(direct)|utmcsr=(direct)|utmcmd=(none)';
$lang['qca'] = 'P0-1222936636-1320224029415';
$lang['utmb'] = '156861353';
$lang['utmc'] = '156861353';
?>