<?php
$lang['admin']['tz_offset'] = 'Fuso Orario';
$lang['admin']['gcb_name_help'] = '(deve contenere solo lettere e numeri)';
$lang['admin']['pagedefaultsupdated'] = 'Impostazioni di pagina predefinite aggiornate';
$lang['admin']['help_function_module_available'] = '<h3>Cosa fa?</h3>
<p>Un plugin che verifica se un determinato modulo sia installato e disponibile per l&#039;uso (tramite il nome).</p>
<h3>Quali parametri accetta?</h3>
<ul>
<li><strong>(obbligatorio)module</strong> - (string) Il nome del modulo.</li>
<li><em>(opzionale)assign</em> - Assegna l&#039;output del plugin alla variabile smarty definita.</li>
</ul>
<h3>Esempio:</h3>
{module_available module=&#039;News&#039; assign=&#039;havenews&#039;}{if $havenews}{cms_module module=News}{/if}
<h3>Nota:</h3>
<p>Non &egrave; possibile utilizzare la forma breve per la chiamata al modulo (es: <em>{News}</em>) in questo tipo di espressione.</p>';
$lang['admin']['prettyurls_noeffect'] = 'I Pretty URL non sono configurati... questo url non produrr&agrave; alcun effetto';
$lang['admin']['help_function_cms_lang_info'] = '<h3>Cosa fa?</h3>
<p>Questo plugin restituisce un oggetto contenente le informazioni conosciute da CMSMS relative al linguaggio selezionato. Ci&ograve; pu&ograve; includere informazioni su locale, codifiche, alias del linguaggio ecc.</p>
<h3>Quali parametri accetta?</h3>
<ul>
<li><em>(opzionale)lang</em> - La lingua per la quale restituire le informazioni.  Se il parametro lang non &egrave; specificato, vengono utilizzate le informazioni relative alla lingua corrente impostata in CMSMS.</li>
<li><em>(opzionale)assign</em> - Assegna l&#039;output del plugin alla variabile smarty specificata.</li>
</ul>
<h3>Esempio:</h3>
<pre>{cms_lang_info assign=&#039;nls&#039;}{$nls->locale()}</pre>
<h3>Vedi Anche:</h3>
<p>la documentazione della classe CmsNls.</p>';
$lang['admin']['help_function_cms_set_language'] = '<h3>Cosa fa?</h3>
<p>Questo plugin tenta di impostare la lingua corrente perch&eacute; sia utilizzata nella traduzione di stringhe e nella formattazione delle date come lingua preferita. La lingua specificata deve essere nota a CMSMS (deve esistere il file nls). Quando viene richiamata questa funzione, (se non sovrascritta nel config.php) verr&agrave; effettuato un tentativo per impostare il locale uguale a quello associato alla lingua. Il locale della lingua deve essere installato sul server.</p>
<h3>Quali parametri accetta?</h3>
<ul>
<li><strong>(obbligatorio)lang</strong> - La lingua desiderata. La lingua deve essere nota all&#039;installazione di CMSMS (deve esistere il file nls).</li>
</ul>';
$lang['admin']['help_function_cms_get_language'] = '<h3>Cosa fa?</h3>
<p>Questo plugin restituisce il nome della lingua corrente in CMSMS. La lingua &egrave; utilizzata nella traduzione di stringhe e nella formattazione delle date.</p>
<h3>Quali parametri accetta?</h3>
<ul>
<li><em>(opzionale)assign</em> - Assegna l&#039;output del plugin alla variabile smarty specificata.</li>
</ul>';
$lang['admin']['help_modifier_cms_escape'] = '<h3>Cosa fa?</h3>
<p>Questo modificatore viene usato per fare l&#039;escape di una stringa in uno dei tanti modi. Pu&ograve; essere utilizzato per convertire una stringa in diversi formati di visualizzazione, o per rendere visualizzabili in una pagina web standard i caratteri speciali immessi dall&#039;utente.</p>
<h3>Utilizzo:</h3>
<pre><code>{$variabile_con_testo|cms_escape[:<tipo di escape>|[<set di caratteri>]]}</code></pre>
<h4>Tipi di escape validi:</h4>
<ul>
<li>html <em>(default)</em> - usa htmlspecialchars.</li>
<li>htmlall - usa htmlentities.</li>
<li>url - raw url codifica tutte le entit&agrave;.</li>
<li>urlpathinfo - Simile al tipo di escape dell&#039;url, ma inoltre codifica /.</li>
<li>quotes - Fa l&#039;escape degli apici singoli per cui non &egrave; ancora stato fatto l&#039;escape.</li>
<li>hex - Fa l&#039;escape esadecimale di ogni carattere.</li>
<li>hexentity - Codifica esadecimale di ogni carattere.</li>
<li>decentity - Codifica decimale di ogni carattere.</li>
<li>javascript - Fa l&#039;escape di virgolette, backslash, ritorni a capo ecc.</li>
<li>mail - Codifica un indirizzo email rendendone sicura la visualizzazione.</li>
<li>nonstd - Fa l&#039;escape di caratteri non standard, ad esempio citazioni del documento.</li>
</ul>
<h4>Set di Caratteri::</h4>
<p>Se il set di caratteri non viene specificato, &egrave; adottato l&#039;utf-8. Il set di caratteri &egrave; applicabile soltanto ai tipi di escape &quot;html&quot; ed &quot;htmlall&quot;.</p>';
$lang['admin']['help_modifier_cms_date_format'] = '<h3>Cosa fa?</h3>
<p>Questo modificatore &egrave; usato per formattare le date in modo appropriato. Utilizza i parametri strftime standard. Se non viene specificata nessuna stringa di formattazione, il sistema utilizzer&agrave; il formato data impostato nelle preferenze utente (per gli utenti registrati), altrimenti il formato data impostato nelle preferenze del sistema.</p>
<p>Il modificatore &egrave; in grado di gestire molti formati di data.  Ad esempio: stringhe date-time provenienti dal database o interi timestamps generati dalla funzione time().</p>
<h3>Utilizzo:</h3>
<pre><code>{$una_variabile_data|cms_date_format[:<stringa di formattazione>]}</code></pre>
<h3>Esempio:</h3>
<pre><code>{&#039;2012-03-24 22:44:22&#039;|cms_date_format}</code></pre>';
$lang['admin']['help_modifier_summarize'] = '<h3>Cosa fa?</h3>
<p>Questo modificatore &egrave; usato per troncare un testo limitandolo ad un determinato numero di &quot;parole&quot;.</p>
<h3>Utilizzo:</h3>
<pre><code>{$variabile_con_testo_lungo|summarize:<numero>}</code></pre>
<h3>Esempio:</h3>
<p>L&#039;esempio seguente rimuoverebbe dal contenuto tutti i tag html e lo troncherebbe dopo 50 parole.</p>
<pre><code>{content|strip_tags|summarize:50}</code></pre>';
$lang['admin']['module_param_lang'] = '<strong>Deprecato</strong> - Sovrascrive la lingua correntemente utilizzata per la selezione delle stringhe tradotte.';
$lang['admin']['server_db_grants'] = 'Verifica livelli di accesso al database';
$lang['admin']['error_nograntall_found'] = 'Non riesco a trovare un permesso &quot;GRANT ALL&quot; adatto.  Potrebbe significare che ci siano stati problemi nell&#039;installazione o rimozione di moduli, oppure nell&#039;aggiunta o nell&#039;eliminazione di elementi, comprese le pagine';
$lang['admin']['msg_grantall_found'] = 'Ho trovato una dichiarazione &quot;GRANT ALL&quot; che sembra essere adatta';
$lang['admin']['curlversion'] = 'Verifica versione curl';
$lang['admin']['curl'] = 'Verifica presenza libreria curl';
$lang['admin']['test_curl'] = 'Verifica disponibilit&agrave; curl';
$lang['admin']['test_curlversion'] = 'Verifica Versione Curl';
$lang['admin']['curl_versionstr'] = 'versione %s, la verione minima raccomandata &egrave; %s';
$lang['admin']['lines_in_error'] = '%d linee con errori';
$lang['admin']['no_files_scanned'] = 'Nessun file rilevato durante il processo di verifica (forse il file non &egrave; valido)';
$lang['admin']['stylesheetnotfound'] = 'Foglio di stile %d non trovato';
$lang['admin']['sysmain_updateurls'] = 'Aggiorna Percorsi';
$lang['admin']['sysmain_confirmupdateurls'] = 'Siete certi di volere aggiornate il database dei percorsi';
$lang['admin']['routesrebuilt'] = 'Sono stati rigenerati i percorsi nel database';
$lang['admin']['text_changeowner'] = 'Attribuisci le Pagine Selezionate ad un altro Utente';
$lang['admin']['changeowner'] = 'Modifica Proprietario';
$lang['admin']['xmlreader_class'] = 'Controllo presenza classe XMLReader';
$lang['admin']['info_smarty_cacheudt'] = 'Se abilitato, tutte le chiamate a UDT (tag definiti dall&#039;utente) saranno memorizzate in cache. Quest&#039;opzione pu&ograve; rivelarsi utile per tag che visualizzano l&#039;output di query al database. Potete disabilitarlo utilizzando il parametro nocache nella stringa dell&#039;UDT.  es.: <code>{myusertag nocache}</code>';
$lang['admin']['prompt_smarty_cacheudt'] = 'Memorizza in Cache UDT';
$lang['admin']['always'] = 'Sempre';
$lang['admin']['never'] = 'Mai';
$lang['admin']['moduledecides'] = 'Lascia decidere al modulo';
$lang['admin']['info_smarty_cachemodules'] = 'Selezionate come memorizzare in cache i tag nei vari template che contengono chiamate a funzioni dei moduli. Se abilitato, tutte le chiamate a moduli saranno memorizzate in cache.  Quest&#039;opzione potrebbe avere effetti negativi su alcuni moduli, o in moduli con form.  <em>(nota: potete sovrascrivere quest&#039;impostazione utilizzando l&#039;opzione nocache come descritto nel manuale smarty)</em>.  Se disabilitato, nessuna chiamata a moduli verr&agrave; memorizzata in cache, cosa che potrebbe influire sulle prestazioni. Se selezionate l&#039;opzione in cui siano i moduli a decidere, il valore predefinito &egrave; di non utilizzare la memorizzazione in cache. il modulo pu&ograve; sovrascrivere quest&#039;impostazione e voi potete disabilitarlo utilizzando il parametro nocache nella stringa di chiamata al modulo.';
$lang['admin']['prompt_smarty_cachemodules'] = 'Memorizza in cache la chiamata ai moduli';
$lang['admin']['info_smarty_compilecheck'] = 'Se disabilitato, smarty non controller&agrave; le date di modifica dei modelli per verificare se sono stati modificati.  Quest&#039;opzione pu&ograve; migliorare sensibilmente le prestazioni.  Tuttavia ogni modifica ai modelli (o anche modifiche ai contenuti) potrebbe rendere necessario lo svuotamento della memoria di cache.';
$lang['admin']['prompt_smarty_compilecheck'] = 'Esegui Controllo di Compilazione';
$lang['admin']['info_smarty_options'] = 'L&#039;opzione seguente ha effetto solo se le opzioni di memorizzazione in cache precedenti sono abilitate';
$lang['admin']['info_smarty_caching2'] = 'Se abilitato, verr&agrave; memorizzato in cache l&#039;output di vari plugin per migliorare le prestazioni. Si applica solo all&#039;output in pagine marcate come &quot;memorizzabili in cache&quot; e solo per utenti non amministratori. Nota bene: questa funzionalit&agrave; potrebbe interferire con il comportamento di alcuni moduli o plugin, o di plugin che usano moduli non in linea. Questa opzione non ha alcun effetto sugli utenti di PHP 5.2.x';
$lang['admin']['prompt_use_smartycaching'] = 'Abilita Cache Smarty';
$lang['admin']['smarty_settings'] = 'Impostazioni Smarty';
$lang['admin']['help_function_cms_init_editor'] = '<h3>Cosa fa?</h3>
  <p>Questo plugin &egrave; utilizzato per inizializzare l&#039;editor wysiwyg selezionato quando le sue funzionalit&agrave; sono richieste per l&#039;inserimento dati sul lato utente.  Il modulo cerca l&#039;editor wysiwyg selezionato, determina se &egrave; stato richiesto e in caso affermativo genera il codice html appropriato <em>(solitamente link javascript)</em>, in modo che l&#039;editor venga inizializzato correttamente al caricamento della pagina. Se non &egrave; richiesto alcun editor wysiwyg sul lato utente, questo plugin non produrr&agrave; alcun output.</p>
  <p><strong>Nota:</strong> Questo plugin funzioner&agrave; correttamente con la configurazione predefinita di CMSMS. Se avete modificato l&#039;impostazione della variabile &quot;process_whole_template&quot; rispetto al valore predefinito, potreste dovere modificare i parametri inviati a questo plugin.</p>
<h3>Come si usa?</h3>
<p>La prima cosa da fare &egrave; selezionare l&#039;editor WYSIWYG da utilizzare nella pagina impostazioni globali della console di amministrazione. Dopodich&eacute;, se utilizzate l&#039;editor su molte pagine, potrebbe risultare conveniente posizionare il plugin {cms_init_editor} direttamente nel template della vostra pagina.  Se volete che l&#039;editor sia abilitato solo in un numero limitato di pagine, potreste semplicemente posizionarlo nel campo &quot;Metadata Specifico della Pagina&quot; di ogni pagina.</p>
<h3>Che parametri accetta?</h3>
<ul>
<li><em>(opzionale) wysiwyg</em> - Specifica il nome del modulo editor da inizializzare. Utilizzatelo con cautela. Se avete un editor diverso selezionato nelle impostazioni globali, questo parametro forzer&agrave; l&#039;inizializzazione dell&#039;editor selezionato.</li>
<li><em>(opzionale) force=0</em> - Normalmente questo plugin non inizializza l&#039;editor specificato (o identificato) se non &egrave; contrassegnato come &quot;attivo&quot;. Questo parametro sovrascrive quella impostazione e potrebbe risultare necessario se la variabile di configurazione &quot;process_whole_template&quot; &egrave; stata impostata su valori non predefiniti.</li>
<li><em>(opzionale) assign</em> - Assegna l&#039;output del plugin alla variabile smarty definita.</li>
</ul>';
$lang['admin']['info_pagedefaults'] = 'Questo modulo permette di specificare diverse opzioni da usare come impostazioni iniziali nella creazione di nuove pagine di contenuto.  Gli elementi contenuti in questa pagina non hanno alcuna ripercussione durante la modifica di pagine esistenti.';
$lang['admin']['default_contenttype'] = 'Tipo di Contenuto Predefinito';
$lang['admin']['info_default_contenttype'] = 'Si applica in fase di aggiunta di nuovi oggetti di contenuto; questo controllo specifica il tipo selezionato per default.
Verificate che l&#039;elemento selezionato non sia uno dei &amp;quot;tipi non permessi&amp;quot;';
$lang['admin']['error_contenttype'] = 'Il tipo di contenuto associato a questa pagina &egrave; non valido o non permesso';
$lang['admin']['info_disallowed_contenttypes'] = 'Selezionate quali tipi di contenuto rimuovere dal mesnu a tendina apposito durante la fase di creazione o modifica di contenuti. Usate CTRL+Click per selezionare e deselezionare elementi.  Se nessun elemento risulta selezionato significa che tutti i tipi di contenuto sono permessi. <em>Si applica a tutti gli utenti</em>';
$lang['admin']['disallowed_contenttypes'] = 'Tipi di Contenuto NON permessi';
$lang['admin']['search_module'] = 'Modulo di ricerca';
$lang['admin']['info_search_module'] = 'Specifica il modulo da utilizzare per indicizzare le parole da ricercare e fornisce le funzioni di ricerca per il sito';
$lang['admin']['filecreatedirbadchars'] = 'Sono stati individuati caratteri non validi nel nome di cartella inserito';
$lang['admin']['modulehelp_yourlang'] = 'Visualizzate nel vostro linguaggio';
$lang['admin']['info_umask'] = 'L&#039; &amp;quot;umask&amp;quot; &egrave; un valore ottale utilizzato per specificare i permessi predefiniti per i file creati (viene utilizzato per i file nella cartella cache e quelli caricati). Per maggiori informazioni vedi l&#039;apposito <a href="http://en.wikipedia.org/wiki/Umask">articolo di wikipedia.</a>';
$lang['admin']['general_operation_settings'] = 'Impostazioni di Operazioni Generiche';
$lang['admin']['info_checkversion'] = 'Se abilitato, il sistema eseguir&agrave; un controllo giornaliero di nuove versioni di CMSMS';
$lang['admin']['checkversion'] = 'Permetti controlli per nuove versioni';
$lang['admin']['actioncontains'] = 'Azione Contiene';
$lang['admin']['filterapplied'] = 'Filtro Attuale';
$lang['admin']['automatedtask_success'] = 'Operazioni automatiche eseguite';
$lang['admin']['siteprefsupdated'] = 'Impostazioni Globali Aggiornate';
$lang['admin']['ip_addr'] = 'Indirizzo IP';
$lang['admin']['warn_admin_ipandcookies'] = 'Attenzione: le attivit&agrave; di amministrazione utilizzano cookies e tracciano il vostro indirizzo IP';
$lang['admin']['event_desc_loginfailed'] = 'Accesso Fallito';
$lang['admin']['event_help_loginfailed'] = '<p>Inviato dopo un fallito accesso al pannello di amministrazione da parte di un utente.</p>';
$lang['admin']['modulehelp_english'] = 'Visualizza in Inglese';
$lang['admin']['nopluginabout'] = 'Nessuna informazione di crediti disponibile per questo plugin';
$lang['admin']['nopluginhelp'] = 'Nessuna guida disponibile per questo plugin';
$lang['admin']['moduleupgraded'] = 'Aggiornamento Riuscito';
$lang['admin']['added_css'] = 'Foglio di Stile aggiunto';
$lang['admin']['toggle'] = 'Seleziona';
$lang['admin']['added_group'] = 'Gruppo Aggiunto';
$lang['admin']['expanded_xml'] = 'Il file XML espanso consiste in %s %s';
$lang['admin']['installed_mod'] = 'Versione installata %s';
$lang['admin']['uninstalled_mod'] = 'Modulo disinstallato %s';
$lang['admin']['upgraded_mod'] = '%s Aggiornato dalla versione %s alla %s';
$lang['admin']['edited_gcb'] = 'Modificato Blocco di Contenuto Globale';
$lang['admin']['edited_content'] = 'Modificato Contenuto';
$lang['admin']['added_content'] = 'Aggiunto Contenuto';
$lang['admin']['added_css_association'] = 'Aggiunta Associazione a Foglio di stile';
$lang['admin']['deleted_group'] = 'Eliminato un Gruppo';
$lang['admin']['deleted_content'] = 'Eliminato del Contenuto';
$lang['admin']['edited_user'] = 'Modificato un Utente';
$lang['admin']['edited_udt'] = 'Modificato un Tag Definito dall&#039;Utente (UDF)';
$lang['admin']['content_copied'] = 'Elemento di contenuto copiato in  %s';
$lang['admin']['deleted_template'] = 'Template Cancellato';
$lang['admin']['added_udt'] = 'Aggiunto Tag Definito dall&#039;Utente (UDF)';
$lang['admin']['deleted_udt'] = 'Eliminato Tag Definito dall&#039;Utente (UDF)';
$lang['admin']['added_gcb'] = 'Aggiunto Blocco di Contenuto Globale';
$lang['admin']['edited_group'] = 'Gruppo Modificato';
$lang['admin']['deleted_css_association'] = 'Eliminata Associazione a Foglio di Stile';
$lang['admin']['user_logout'] = 'Disconnessione Utente';
$lang['admin']['user_login'] = 'Accesso Utente';
$lang['admin']['login_failed'] = 'Accesso Utente Fallito';
$lang['admin']['deleted_css'] = 'Foglio di Stile Eliminato';
$lang['admin']['uploaded_file'] = 'File Caricato';
$lang['admin']['created_directory'] = 'Cartella Creata';
$lang['admin']['deleted_file'] = 'File Eliminato';
$lang['admin']['deleted_directory'] = 'Cartella Eliminata';
$lang['admin']['edited_template'] = 'Template Modificato';
$lang['admin']['deleted_user'] = 'Utente Eliminato';
$lang['admin']['deleted_module'] = 'Rimosso definitivamente %s';
$lang['admin']['deleted_gcb'] = 'Blocco di Contenuto Globale Eliminato';
$lang['admin']['added_user'] = 'Aggiunto Utente';
$lang['admin']['edited_user_preferences'] = 'Modificate Preferenze Utente';
$lang['admin']['added_template'] = 'Aggiunto Template';
$lang['admin']['event_desc_stylesheetpostcompile'] = 'Inviato dopo che un foglio di stile venga compilato tramite smarty';
$lang['admin']['event_desc_stylesheetprecompile'] = 'Inviato prima che un foglio di stile venga compilato con smarty';
$lang['admin']['confirm_uploadmodule'] = 'Siete certi di volere caricare il fil XML selezionato? Caricare un file di modulo non correttamente pu&ograve; interrompere la funzionalit&agrave; di un sito';
$lang['admin']['error_module_mincmsversion'] = 'Questo modulo richiede una versione aggiornata di CMS Made Simple';
$lang['admin']['info_browser_cache_expiry'] = 'Specificare l&#039;ammontare di tempo (in minuti) che il browsers dovrebbe tenere la pagina in cache.  Configurare il valore a 0 disabilita la funzionalit&agrave;';
$lang['admin']['browser_cache_expiry'] = 'Tempo di durata Cache del Browser <em>(minuti)</em>';
$lang['admin']['info_browser_cache'] = 'Applicabile solo alle pagine memorizzabili in cache, questa impostazione indica che i browser dovrebbero potere memorizzare le pagine nella cache per un certo periodo.  Se abilitato, visualizzazioni ripetute della pagina potrebbero non mostrare immediatamente i cambiamenti nel suo contenuto.';
$lang['admin']['allow_browser_cache'] = 'Permette al Browser di memorizzare le pagine in cache';
$lang['admin']['server_cache_settings'] = 'Impostazioni di Cache del Server';
$lang['admin']['browser_cache_settings'] = 'Impostazioni di Cache del Browser';
$lang['admin']['help_function_browser_lang'] = '<h3>A cosa serve?</h3>
  <p>Questo plugin individua e comunica la lingua accettata dal browser degli utenti, effettuando una ricerca incrociata con una lista di lingue permesse, per determinare un valore di lingua per la sessione.</p>
<h3>Come si usa?</h3>
<p>Inserite il tag direttamente nel vostro template di pagina <em>(pu&ograve; essere posizionato sopra la sezione <head> se volete)</em> fornendogli il nome della lingua predefinita e delle lingua accettate (solo nomi di lingue a due caratteri), poi sfruttate il risutato.   Es:</p>
<pre><code>{browser_lang accept=de,fr,en,es default=en assign=tmp}{session_put var=lang val=$tmp}</code></pre>
<p><em>({session_put} un plugin fornito dal modulo CGSimpleSmarty module)</em></p>
<h3>Quali parametri accetta?</h3>
<ul>
<li><strong>accepted <em>(obbligatorio)</em></strong><br/> - Una lista di valori separati da virgola contenente le abbreviazioni a due caratteri delle lingue accettate.</li>
<li>default<br/>- <em>(obbligatorio)</em> La lingua predefinita da visualizzare se il browser non supporta nessuna delle lingue accettate.  Se non viene specificato alcun valore, verr&agrave; utilizzato &quot;en&quot;.</li>
<li>assign<br/>- <em>(opzionale)</em> Il nome della variabile smarty alla quale assegnare i risultati. Se non specificato, verranno restituiti i risultati di questa funzione.</li>
</ul>';
$lang['admin']['info_target'] = 'Questa opzione potrebbe essere utilizzata dal Menu Manager per indicare quando e come aprire nuovi frame e finestre. Alcuni template del Menu Manager potrebbero ignorare questa opzione';
$lang['admin']['close'] = 'Chiudi';
$lang['admin']['open'] = 'Apri';
$lang['admin']['revert'] = 'Annulla tutte le modifiche';
$lang['admin']['autoclearcache2'] = 'Rimuovere i file di cache pi&ugrave; vecchi del numero di giorni specificato';
$lang['admin']['root'] = 'Radice';
$lang['admin']['info_content_autocreate_flaturls'] = 'Imposta tutti gli URL al valore dell&#039;Alias di Pagina. Nota Bene: i due valori non saranno sincronizzati dopo la prima impostazione';
$lang['admin']['content_autocreate_flaturls'] = 'Gli URL creati automaticamente sono abbreviati';
$lang['admin']['content_autocreate_urls'] = 'Crea automaticamente gli URL di pagina';
$lang['admin']['content_mandatory_urls'] = 'Gli URL di pagina sono necessari';
$lang['admin']['content_imagefield_path'] = 'Percorso per il campo immagine';
$lang['admin']['info_content_imagefield_path'] = 'Relativo al percorso della cartella di caricamento immagini. Specificate un nome di cartella che contenga il percorso con i file per il campo immagine';
$lang['admin']['content_thumbnailfield_path'] = 'Percorso per il campo miniatura';
$lang['admin']['info_content_thumbnailfield_path'] = 'Relativo al percorso della cartella di caricamento immagini. Specificate un nome di cartella che contenga il percorso con i file per il campo immagine. Solitamente &egrave; uguale al percorso specificato sopra.';
$lang['admin']['contentimage_path'] = 'Percorso per il tag {content_image}';
$lang['admin']['info_contentimage_path'] = 'Relativo al percorso della cartella di upload. Specificate un nome di cartella che contenga il percorso con i file per il tag {content_image}.  Questo valore viene utilizzato come predefinito per il parametro dir';
$lang['admin']['editcontent_settings'] = 'Impostazioni di Modifica del Contenuto';
$lang['admin']['help_page_url'] = 'Specificate un URL alternativo (relativo alla radice del vostro sito) che possa essere utilizzato per identificare questa pagina in maniera univoca.  Es.: percorso/alla/miapagina.  L&#039;url di pagina &egrave; utile solo quando sono abilitati i pretty urls.';
$lang['admin']['help_page_alias'] = 'L&#039;alias &egrave; utilizzato come alternativa all&#039;id della pagina per identificarla in maniera univoca. Dev&#039;essere unico tra tutte le pagine.  L&#039;alias viene utilizzato anche per assistere alla creazione dell&#039;url della pagina';
$lang['admin']['help_page_searchable'] = 'Questa impostazione indica se il contenuto di questa pagina debba essere indicizzato dal modulo Search';
$lang['admin']['help_page_cachable'] = 'Le prestazioni possono essere migliorate impostando come memorizzabili nella cache pi&ugrave; pagine possibili.  Tuttavia non pu&ograve; essere utilizzato per pagine nelle quali il contenuto possa cambiare a richiesta';
$lang['admin']['sitedownexcludeadmins'] = 'Escludi utenti connessi nella console di amministrazione di CMSMS';
$lang['admin']['your_ipaddress'] = 'Il vostro indirizzo IP &egrave;';
$lang['admin']['use_wysiwyg'] = 'Usa editor WYSIWYG';
$lang['admin']['contenttype_redirlink'] = 'Collegamento di redirezionamento';
$lang['admin']['yes'] = 'S&igrave;';
$lang['admin']['no'] = 'No ';
$lang['admin']['listcontent_showalias'] = 'Mostra la colonna &quot;Alias&quot;';
$lang['admin']['listcontent_showurl'] = 'Mostra la colonna &quot;URL&quot;';
$lang['admin']['listcontent_showtitle'] = 'Mostra il Titolo di Pagina o il Testo di Menu';
$lang['admin']['listcontent_settings'] = 'Impostazioni Elenco di Contenuto';
$lang['admin']['lctitle_page'] = 'Il titolo degli elementi di contenuto esistenti';
$lang['admin']['lctitle_alias'] = 'L&#039;alias degli elementi di contenuto esistenti. Alcuni elementi di contenuto non hanno un alias';
$lang['admin']['lctitle_url'] = 'Il suffisso URL per l&#039;elemento di contenuto.  Se impostato';
$lang['admin']['lctitle_template'] = 'Il template selezionato per l&#039;elemento di contenuto. Alcuni elementi di contenuto non hanno un template';
$lang['admin']['lctitle_owner'] = 'Il proprietario dell&#039;elemento di contenuto';
$lang['admin']['lctitle_active'] = 'Indica se l&#039;elemento di contenuto &egrave; attivo. Gli elementi inattivi non possono essere visualizzati.';
$lang['admin']['lctitle_default'] = 'Specifica quale elemento di contenuto venga visualizzato quando viene richiamato l&#039;url della root del sito. Solo un elemento pu&ograve; essere il predefinito';
$lang['admin']['lctitle_move'] = 'Permette di riordinare la gerarchia del vostro contenuto';
$lang['admin']['lctitle_multiselect'] = 'Seleziona Tutto/Deseleziona Tutto';
$lang['admin']['invalid_url2'] = 'L&#039;URL di pagina specificato non &egrave; valido.  Dovrebbe contenete solo caratteri alfanumerici , compresi &quot;-&quot; o &quot;/&quot;. Le estensioni devono contenere solo caratteri alfanumerici ed essere pi&ugrave; corte di 5 caratteri.  &amp;Eacute; anche possibile che l&#039;URl specificato sia gi&agrave; in uso.';
$lang['admin']['page_url'] = 'URL di pagina';
$lang['admin']['runuserplugin'] = 'Esegui Plugin Utente';
$lang['admin']['output'] = 'Output';
$lang['admin']['run'] = 'Esegui';
$lang['admin']['run_udt'] = 'Esegui questo Tag definito dall&#039;utente (User Defined Tag)';
$lang['admin']['stylesheetcopied'] = 'Foglio di Stile copiato';
$lang['admin']['templatecopied'] = 'Template copiato';
$lang['admin']['ecommerce_desc'] = 'Moduli per funzionalit&agrave; di E-commerce';
$lang['admin']['ecommerce'] = 'E-Commerce ';
$lang['admin']['help_function_content_module'] = '<h3>Cosa fa?</h3>
<p>Questo tipo di blocco di contenuto permette l&#039;interfacciamento con vari moduli per la creazione di diversi tipi di blocchi di contenuto.</p>
<p>Alcuni moduli possono definire tipi di blocchi di contenuto per l&#039;utilizzo in template di moduli.  es.: Il modulo FrontEndUsers pu&ograve; definire un gruppo elenco  quale tipo di blocco di contenuto. Indicher&agrave; come sia possibile utilizzare il tag content_module per l&#039;uso di quel determinato tipo di blocco all&#039;interno dei propri template.</p>
<p><strong>Nota:</strong> Questo tipo di blocco deve essere utilizzato solo con moduli compatibili. Non dovrebbe essere utilizzato in nessun modo diverso da quello indicato dai moduli aggiuntivi.</p>
<p>Questo tag accetta alcuni parametri, e passa tutti gli altri parametri al modulo per venire elaborati.</p>
<p>Parametri:
 <ul>
 <li><strong>(richiesto)</strong>module - Il nome del modulo che conterr&agrave; questo blocco di contenuto. Il modulo dev&#039;essere installato e disponibile.</li>
 <li><strong>(richiesto)</strong>block - Il nome del blocco di contenuto.</li>
 <li><em>(opzionale)</em>label - Un&#039;etichetta per il blocco di contenuto da utilizzare durante la modifica della pagina.</li>
 <li><em>(opzionale)</em>tab - Il pannello (tab) in cui si desidera che questo campo venga visualizzato all&#039;&#039;interno del modulo di modifica.</li>
 <li><em>(opzionale)</em>assign (stringa) - Assegna il risultato ad una variabile smarty con questo nome.</li>
 </ul>
</p>';
$lang['admin']['error_parsing_content_blocks'] = 'Si &egrave; verificato un errore durante l&#039;elaborazione dei blocchi di contenuto (forse causato da nomi di blocchi duplicati)';
$lang['admin']['error_no_default_content_block'] = 'Non &egrave; stato rilevato alcun Blocco di Contenuto Globale in questo Template.  Verificate la presenza del tag  {content} nel template di pagina.';
$lang['admin']['help_function_cms_stylesheet'] = '	<h3>Cosa fa?</h3>
  <p>Sostituto del tag {stylesheet}, questo tag attiva la memorizzazione in cache dei file css, generando file statici nella cartella tmp/cache, e l&#039;elaborazione da parte di smarty dei singoli fogli di stile.</p>
  <p>Questo plugin recupera dal sistema le informazioni sui fogli di stile. Per impostazione predefinita, prende tutti i fogli di stile collegati al template corrente, nell&#039;ordine specificato dal designer, e genera tag per i fogli di stile.</p>
  <p>I folgi di stile generati sono nominati in modo univoco secondo l&#039;ultima data di modifica nel database, e vengono creati soltanto se il foglio di stile &egrave; cambiato.</p>
  <p>Questo tag &egrave; il sostituto del tag {stylesheet}.</p>
  <h3>Come si usa?</h3>
  <p>Basta inserire il tag nella head del modello/pagina, in questo modo: <code>{cms_stylesheet}</code></p>
  <h3>Quali parametri accetta?</h3>
  <ul>
  <li><em>(opzionale)</em>name - Invece di prendere tutti i fogli di stile della pagina in questione, prender&agrave; soltanto quello appositamente selezionato, a prescindere dal fatto che sia collegato al modello corrente o meno.</li>
  <li><em>(opzionale)</em>templateid - Se &egrave; definito templateid, verranno selezionati i fogli di stile associati a quel modello al posto di quelli del modello corrente.</li>
  <li><em>(opzionale)</em>media - Usato insieme al parametro name, questo parametro permetter&agrave; di sovrascrivere il tipo di media per quel foglio di stile. Utilizzato insieme al parametro templateid, il parametro media generer&agrave; soltanto i tag stylesheet per quei fogli di stile marcati come compatibili con il tipo di media specificato.</li>
  </ul>
  <h3>Elaborazione Smarty</h3>
  <p>Nel generare file css, questo sistema elabora con smarty i fogli di stile caricati dal database.  I delimitatori di smarty hanno subito un cambiamento rispetto allo standard CMSMS { e } rispettivamente in [[ e ]] per facilitare la transizione nei fogli di stile. Questo permette di creare variabili smarty, ad esempio: [[assign var=&#039;red&#039; value=&#039;#900&#039;]] all&#039;inizio del folgio di stile, ed usare quindi queste variabili in un secondo momento all&#039;interno del foglio di stile, ovvero:</p>
<pre>
<code>
h3 .error { color: [[$red]]; }<br/>
</code>
</pre>
<p>Poich&eacute; i file memorizzati nella cache vengono creati nella cartella tmp/cache dell&#039;installazione di CMSMS, la directory di lavoro relativa non &egrave; la root del sito. Pertanto, immagini, o altri tag che richiedono un url, dovrebbero usare il tag [[root_url]] per forzare url assoluti. Ovvero:</p>
<pre>
<code>
h3 .error { background: url([[root_url]]/uploads/images/error_background.gif); }<br/>
</code>
</pre>
<p><strong>Nota:</strong> A causa della memorizzazione in cache del plugin, le variabili smarty dovrebbero essere posizionate all&#039;inizio di OGNI foglio di stile collegato ad un modello.</p>';
$lang['admin']['pseudocron_granularity'] = 'Intervallo Pseudocron';
$lang['admin']['info_pseudocron_granularity'] = 'Questa impostazione indica quanto spesso il sistema cercher&agrave; di gestire le attivit&agrave; regolari programmate';
$lang['admin']['cron_request'] = 'Ogni richiesta';
$lang['admin']['cron_15m'] = '15 Minuti';
$lang['admin']['cron_30m'] = '30 Minuti';
$lang['admin']['cron_60m'] = '1 Ora';
$lang['admin']['cron_120m'] = '2 Ore';
$lang['admin']['cron_3h'] = '3 Ore';
$lang['admin']['cron_6h'] = '6 Ore';
$lang['admin']['cron_12h'] = '12 Ore';
$lang['admin']['cron_24h'] = '24 Ore';
$lang['admin']['adminlog_1day'] = '1 giorno';
$lang['admin']['adminlog_1week'] = '1 settimana';
$lang['admin']['adminlog_2weeks'] = '2 settimane';
$lang['admin']['adminlog_1month'] = '1 mese';
$lang['admin']['adminlog_3months'] = '3 mesi';
$lang['admin']['adminlog_6months'] = '6 mesi';
$lang['admin']['adminlog_manual'] = 'Eliminazione manuale';
$lang['admin']['adminlog_lifetime'] = 'Durata delle voci di registro';
$lang['admin']['info_adminlog_lifetime'] = 'Rimuove le voci di registo pi&ugrave; vecchie del tempo specificato.';
$lang['admin']['filteruser'] = 'Il nome utente &egrave;';
$lang['admin']['filtername'] = 'Il nome dell&#039;evento contiene';
$lang['admin']['filteraction'] = 'L&#039;azione contiene';
$lang['admin']['filterapply'] = 'Applica filtri';
$lang['admin']['filterreset'] = 'Azzera i filtri';
$lang['admin']['filters'] = 'Filtri';
$lang['admin']['showfilters'] = 'Modifica filtri';
$lang['admin']['clearcache_taskdescription'] = 'Esecuzione giornaliera, questa attivit&agrave; pulir&agrave; i file in cache pi&ugrave; vecchi della data impostata nelle Preferenze Globali';
$lang['admin']['clearcache_taskname'] = 'Pulisce file in cache';
$lang['admin']['info_autoclearcache'] = 'Specifica un valore intero. Con 0 si disabilita la pulizia automatica della cache';
$lang['admin']['autoclearcache'] = 'Pulizia automatica della cache ogni N giorni';
$lang['admin']['listtemplates_pagelimit'] = 'Numero di righe per pagina quando si visualizzano Template';
$lang['admin']['liststylesheets_pagelimit'] = 'Numero di righe per pagina quando si visualizzano gli Stili CSS';
$lang['admin']['listgcbs_pagelimit'] = 'Numero di righe per pagina quando si visualizzano Blocchi di contenuto globale';
$lang['admin']['insecure'] = 'Non sicuro (HTTP)';
$lang['admin']['secure'] = 'Sicuro (HTTPS)';
$lang['admin']['secure_page'] = 'Utilizza HTTPS per questa pagina';
$lang['admin']['thumbnail_width'] = 'Larghezza Miniatura';
$lang['admin']['thumbnail_height'] = 'Altezza Miniatura';
$lang['admin']['E_STRICT'] = 'E_STRICT &egrave; disabilitato in error_reporting';
$lang['admin']['test_estrict_failed'] = 'E_STRICT &egrave; abilitato in error_reporting';
$lang['admin']['info_estrict_failed'] = 'Alcune librerie utilizzate da CMSMS non funzionano correttamente con E_STRICT.  Disabilitatelo prima di continuare';
$lang['admin']['E_DEPRECATED'] = 'E_DEPRECATED &egrave; disabilitato in error_reporting';
$lang['admin']['test_edeprecated_failed'] = 'E_DEPRECATED &egrave; abilitato';
$lang['admin']['info_edeprecated_failed'] = 'Se E_DEPRECATED &egrave; abilitato nei report di errore, i vostri utenti visualizzeranno molti messaggi di avvertimento che potrebbero influire sulla visualizzazione e sulle funzionalit&agrave;';
$lang['admin']['session_use_cookies'] = 'Le Sessioni possono utilizzare i Cookies';
$lang['admin']['errorgettingcontent'] = 'Non riesco a recuperare le informazioni per l&#039;oggetto di contenuto specificato';
$lang['admin']['errordeletingcontent'] = 'Errore nell&#039;eliminare il contenuto (sono presenti pagine derivate oppure questo &egrave; il contenuto predefinito)';
$lang['admin']['invalidemail'] = 'L&#039;indirizzo email inserito non &egrave; valido';
$lang['admin']['info_deletepages'] = 'Nota: a causa di restrizioni sui permessi, alcune delle pagine selezionate per la cancellazione potrebbero non essere elencate sotto';
$lang['admin']['info_pagealias'] = 'Specifica un alias unico per questa pagina.';
$lang['admin']['info_autoalias'] = 'Se questo campo &egrave; vuoto, un alias sar&agrave; creato automaticamente.';
$lang['admin']['invalidparent'] = 'Voi dovete selezionare una pagina genitore (contattate il Vostro amministratore se non vedete questa opzione).';
$lang['admin']['forgotpwprompt'] = 'Inserite il vostro nome utente di amministrazione. Verr&agrave; inviata un&#039;email contenente le nuove informazioni di accesso all&#039;indirizzo associato a questo nome utente';
$lang['admin']['info_basic_attributes'] = 'Questo campo vi permette di specificare quali propriet&agrave; di contenuto possano essere modificate da un utente senza i permessi &quot;Modifica Struttura della Pagina&quot;.';
$lang['admin']['basic_attributes'] = 'Propriet&agrave; di Base';
$lang['admin']['no_permission'] = 'Non avete i permessi necessari per eseguire questa funzione.';
$lang['admin']['bulk_success'] = 'Operazione di massa aggiornata correttamente.';
$lang['admin']['no_bulk_performed'] = 'Nessuna operazione di massa eseguita.';
$lang['admin']['info_preview_notice'] = 'Attenzione: Il pannello di anteprima si comporta come la finestra di un browser permettendo di navigare anche in altre pagine rispetto a quella visualizzata inizialmente. Tuttavia, in questo caso, potreste avere comportamenti inaspettati. Se navigate in altra pagina e poi tornate indietro, potreste non vedere pi&ugrave; i contenuti non salvati fino a che non farete modifiche nel pannello principale e aggiornerete questo pannello. Quando aggiungete dei contenuti, se navigate in un&#039;altra pagina, non riuscirete a tornare indietro e dovrete aggiornare questo pannello.';
$lang['admin']['sitedownexcludes'] = 'Escludi questi indirizzi dal messaggio Sito Gi&ugrave;';
$lang['admin']['info_sitedownexcludes'] = 'Questo parametro permette una lista separata da virgola di indirizzi ip o network che non dovrebbero essere soggetti al meccanismo di sitedown. Questo permette agli amministratori di lavorare sul sito mentre i visitatori del sito ricevono il messaggio di sitedown.<br/><br/>Indirizzi possono essere specificati nei seguenti formati:<br/>
1. xxx.xxx.xxx.xxx -- (indirizzi IP esatti)<br/>
2. xxx.xxx.xxx.[yyy-zzz] -- (range di indirizzi IP)<br/>
3. xxx.xxx.xxx.xxx/nn -- (nnn = numero di bits, stile cisco cio&egrave;:  192.168.0.100/24 = intera 192.168.0 sottorete classe C)';
$lang['admin']['setup'] = 'Setup Avanzato';
$lang['admin']['handle_404'] = 'Errore 404 personalizzato';
$lang['admin']['sitedown_settings'] = 'Impostazioni Sito Gi&ugrave;';
$lang['admin']['general_settings'] = 'Impostazioni Generali';
$lang['admin']['help_function_page_attr'] = '<h3>Cosa fa?</h3>
<p>Questo tag pu&ograve; essere utilizzato per restituire il valore degli attributi di una certa pagina.</p>
<h3>Come lo uso?</h3>
<p>Inserite il tag nel template in questo modo: <code>{page_attr key=&quot;extra1&quot;}</code>.</p>
<h3>Che parametri usa?</h3>
<ul>
  <li><strong>key [required]</strong>- La chiave di cui restituire l&#039;attributo.</li>
 <li><em>(opzionale)</em> assign (string) - Assegna il risultato ad una variabile smarty con quel nome.</li>
</ul>
';
$lang['admin']['forge'] = 'Forge ';
$lang['admin']['disable_wysiwyg'] = 'Disabilita editor WYSIWYG per questa pagina (senza tenere conto delle impostazioni del template o dell&#039;utente)';
$lang['admin']['help_function_page_image'] = '<h3>Cosa fa?</h3>
<p>Questo tag pu&ograve; essere utilizzato per restituire il valore del campo immagine o anteprima di una certa pagina.</p>
<h3>Come lo uso?</h3>
<p>Inserite il tag nel template in questo modo: <code>{page_image}</code>.</p>
<h3>Che parametri usa?</h3>
<ul>
  <li>thumbnail - Visualizza opzionalmente il valore della propriet&agrave; miniatura invece del valore della propriet&agrave; immagine.</li>
<li><em>opzionale</em> assign (string) - Assegna il risultato ad una variabile smarty con quel nome.</li>
</ul>';
$lang['admin']['pagelink_circular'] = 'Un link di pagina non pu&ograve; elencare un altro link di pagina come destinazione';
$lang['admin']['destinationnotfound'] = 'La pagina selezionata non pu&ograve; essere trovata o non &egrave; valida';
$lang['admin']['help_function_dump'] = '<h3>Cosa fa?</h3>
  <p>Questo tag pu&ograve; essere usato per mostrare i contenuti di qualsiasi variabile smarty un un formato pi&ugrave; leggibile. &Egrave; utile per il debugging, e la modifica dei modelli, per conoscere il formato ed i tipi di dati disponibili.</p>
<h3>Come si usa?</h3>
<p>Inserire il tag nel modello in questo modo  <code>{dump item=&#039;variabile_smarty_da_visualizzare&#039;}</code>.</p>
<h3>Quali parametri accetta?</h3>
<ul>
<li><strong>item (obbligatorio)</strong> - La variabile smarty di cui visualizzare il contenuto.</li>
<li>maxlevel - Il numero massimo di livelli ricorsivi (applicabile solo in congiunzione a <em>recurse</em>). Il valore predefinito per questo parametro &egrave; 3</li>
<li>nomethods - Non esegue l&#039;output dei metodi dagli oggetti.</li>
<li>novars - Non esegue l&#039;output dei membri dell&#039;oggetto.</li>
<li>recurse - Scorre gli oggetti per un numero massimo di livelli, fornendo un output dettagliato per ogni elemento finch&eacute; non viene raggiunto il numero massimo di livelli stabilito.</li>
</ul>';
$lang['admin']['sqlerror'] = 'Errore SQL in %s';
$lang['admin']['image'] = 'Immagine';
$lang['admin']['thumbnail'] = 'Miniatura';
$lang['admin']['searchable'] = 'Questa pagina &egrave; ricercabile';
$lang['admin']['help_function_content_image'] = '<h3>Cosa fa?</h3>
<p>Questo plugin consente ai progettisti di modelli di chiedere agli utenti di selezionare un&#039;immagine durante la modifica di una pagina. Per i blocchi di contenuti aggiuntivi, si comporta in modo simile al plugin per i contenuti.</p>
<h3>Come si usa?</h3>
<p>Inserire il tag nel modello in questo modo: <code>{content_image block=&#039;immagine1&#039;}</code>.</p>
<h3>Quali parametri accetta?</h3>
<ul>
  <li><strong>(obbligatorio)</strong> block=&#039;&#039; - Il nome per questo blocco di contenuto aggiuntivo.
  <p>Esempio:</p>
  <pre>{content_image block=&#039;immagine1&#039;}</pre><br/>
  </li>

  <li><em>(opzionale)</em> label=&#039;&#039; - Un&#039;etichetta o suggerimento per questo blocco di contenuto nella pagina di modifica del contenuto.  Se non specificata, verr&agrave; utilizzato il nome del blocco stesso.</li>
 
  <li><em>(opzionale)</em> dir=&#039;&#039; - Il nome di una cartella (relativa alla cartella uploads) da cui selezionare le immagini. Se non specificato, verr&agrave; utilizzata la cartella uploads.
  <p>Esempio: utilizza le immagini presenti nella cartella uploads/images.</p>
  <pre>{content_image block=&#039;immagine1&#039; dir=&#039;immagini&#039;}</pre><br/>
  </li>

  <li><em>(opzionale)</em> class=&#039;&#039; - Il nome della classe css da utilizzare nel tag img, durante la visualizzazione nel frontend.</li>

  <li><em>(opzionale)</em> id=&#039;&#039; - Il nome id da usare nel tag img durante la visualizzazione nel frontend.</li> 

  <li><em>(opzionale)</em> name=&#039;&#039; - Il nome del tag da usare nel tag img durante la visualizzazione nel frontend.</li> 

  <li><em>(opzionale)</em> width=&#039;&#039; - La larghezza desiderata dell&#039;immagine.</li>

  <li><em>(opzionale)</em> height=&#039;&#039; - L&#039;altezza desiderata dell&#039;immagine.</li>

  <li><em>(opzionale)</em> alt=&#039;&#039; - Testo alternativo nel caso l&#039;immagine non possa essere trovata.</li>
  <li><em>(opzionale)</em> urlonly=&#039;&#039; - esegue l&#039;output del solo url dell&#039;immagine, ignorando tutti gli altri parametri (id, name, width, height, ecc.)</li>
  <li><em>(opzionale)</em> tab=&#039;&#039; - La tab in cui si desidera mostrare questo campo nel modulo di modifica.</li>
  <li><em>(opzionale)</em> exclude=&#039;&#039; - Specifica il prefisso dei file da escludere.  Ad esempio: thumb_</li>
  <li><em>(opzionale)</em> sort=&#039;&#039; - Ordina eventualmente le opzioni. L&#039;impostazione predefinita &egrave; di non ordinare.</li>
  <li><em>(opzionale)</em> assign=&#039;&#039; (string) - Assegna i risultati ad una variabile smarty con questo nome.</li>
</ul>';
$lang['admin']['error_udt_name_chars'] = 'Un nome valido di UDT inizia con una lettera o un trattino basso, seguito da qualsiasi numero di lettere, numeri o trattini bassi.';
$lang['admin']['errorupdatetemplateallpages'] = 'Template non attivo';
$lang['admin']['hidefrommenu'] = 'Nascondi nel Menu';
$lang['admin']['settemplate'] = 'Imposta Template';
$lang['admin']['text_settemplate'] = 'Imposta le pagine selezionate con un Template diverso';
$lang['admin']['cachable'] = 'Memorizzabile in cache';
$lang['admin']['noncachable'] = 'Non Memorizzabile in Cache';
$lang['admin']['copy_from'] = 'Copia da';
$lang['admin']['copy_to'] = 'Copia in';
$lang['admin']['copycontent'] = 'Copia Elemento di Contenuto';
$lang['admin']['md5_function'] = 'Funzione md5';
$lang['admin']['tempnam_function'] = 'Funzione tempnam';
$lang['admin']['register_globals'] = 'Funzione PHP register_globals';
$lang['admin']['output_buffering'] = 'Funzione PHP output_buffering';
$lang['admin']['disable_functions'] = 'Funzione PHP disable_functions';
$lang['admin']['xml_function'] = 'Supporto di base a XML (expat)';
$lang['admin']['magic_quotes_gpc'] = 'Magic quotes per Get/Post/Cookie';
$lang['admin']['magic_quotes_gpc_on'] = 'Apici, virgolette e barre vengono precedute automaticamente da barre retroverse (\). E&#039; possibile avere problemi nel salvataggio di Template';
$lang['admin']['magic_quotes_runtime'] = 'Magic quotes in tempo reale';
$lang['admin']['magic_quotes_runtime_on'] = 'Molte funzioni che restituiscono dati avranno le virgolette con le barre retroverse. E&#039; possibile riscontrare dei problemi';
$lang['admin']['file_get_contents'] = 'Test per file_get_contents';
$lang['admin']['check_ini_set'] = 'Test per ini_set';
$lang['admin']['check_ini_set_off'] = 'Senza questa caratteristica potreste riscontrare delle difficolt&agrave; su alcune funzionalit&agrave;. Questo test potrebbe fallire se il safe_mode di PHP &egrave; attivato';
$lang['admin']['file_uploads'] = 'Caricamento File';
$lang['admin']['test_remote_url'] = 'Test per indirizzi URL remoti';
$lang['admin']['test_remote_url_failed'] = 'Probabilmente non sarete in grado di aprire un file su un web server remoto.';
$lang['admin']['test_allow_url_fopen_failed'] = 'Quando &quot;allow url fopen&quot; &egrave; disabilitato, non potrete accedere agli oggetti URL, come i file remoti, usando il protocollo ftp o http.';
$lang['admin']['connection_error'] = 'Le connessioni http in uscita sembrano non funzionare! C&#039;&egrave; un firewall o alcune ACL per le connessioni esterne? Questo far&agrave; si che il Modulo Manager e potenzialmente anche altre funzionalit&agrave; non funzionino.';
$lang['admin']['remote_connection_timeout'] = 'Time Out di Connessione!';
$lang['admin']['search_string_find'] = 'Connessione ok!';
$lang['admin']['connection_failed'] = 'Connessione fallita!';
$lang['admin']['remote_response_ok'] = 'Risposta da remoto: ok!';
$lang['admin']['remote_response_404'] = 'Risposta da remoto: non trovato!';
$lang['admin']['remote_response_error'] = 'Risposta da remoto: errore!';
$lang['admin']['notifications_to_handle'] = 'Avete <b>%d</b> notifiche non gestite';
$lang['admin']['notification_to_handle'] = 'Avete <b>%d</b> notifica non gestita';
$lang['admin']['notifications'] = 'Notifiche';
$lang['admin']['dashboard'] = 'Visualizza Dashboard';
$lang['admin']['ignorenotificationsfrommodules'] = 'Ignora le notifiche da questi moduli';
$lang['admin']['admin_enablenotifications'] = 'Permetti agli utenti di visualizzare le notifiche<br/><em>(le notifiche verranno visualizzate su tutte le pagine di amministrazione)</em>';
$lang['admin']['enablenotifications'] = 'Attiva le notifiche utente nella sezione di amministrazione';
$lang['admin']['test_check_open_basedir_failed'] = 'Sono attive delle restrizioni date da Open basedir. Potreste avere alcune difficolt&agrave; con il funzionamento di elementi aggiuntivi con questa restrizione.';
$lang['admin']['config_writable'] = 'config.php scrivibile. E&#039; consigliabile modificare i permessi a sola lettura.';
$lang['admin']['caution'] = 'Attenzione';
$lang['admin']['create_dir_and_file'] = 'Controllo se il processo httpd (server web) pu&ograve; creare un file all&#039;interno di una directory creata';
$lang['admin']['os_session_save_path'] = 'Nessun controllo perch&egrave; percorso del SO';
$lang['admin']['unlimited'] = 'Non limitato';
$lang['admin']['open_basedir'] = 'PHP open_basedir';
$lang['admin']['open_basedir_active'] = 'Nessun controllo perch&egrave; open basedir &egrave; attivo';
$lang['admin']['invalid'] = 'Non valido';
$lang['admin']['checksum_passed'] = 'Tutti i checksums coincidono con quelli del file spedito';
$lang['admin']['error_retrieving_file_list'] = 'Errore nel recuperare la lista file';
$lang['admin']['files_checksum_failed'] = 'I File non possono essere controllati';
$lang['admin']['failure'] = 'Fallimento';
$lang['admin']['help_function_process_pagedata'] = '<h3>Cosa fa?</h3>
<p>Questo plugin elabora con smarty i dati nel blocco &quot;pagedata&quot; del contenuto delle pagine.  Permette di inviare a smarty dati di pagina specifici senza dover cambiare il modello per ogni pagina.</p>
<h3>Come si usa?</h3>
<ol>
  <li>Inserire le variabili assign di smarty ed altra logica smarty nel campo pagedata di alcune pagine di contenuto.</li>
  <li>Inserire il tag <code>{process_pagedata}</code> proprio all&#039;inizio del modello della pagina.</li>
</ol>
<br/>
<h3>Quali parametri accetta?</h3>
<p><em>(opzionale)</em> assign (string) - assegna il risultato ad una variabile smarty con questo nome.</p>';
$lang['admin']['page_metadata'] = 'Metadata specifico della pagina';
$lang['admin']['pagedata_codeblock'] = 'Dati o logica Smarty specifica di questa pagina';
$lang['admin']['error_uploadproblem'] = 'C&#039;&egrave; stato un errore nel caricamento del file';
$lang['admin']['error_nofileuploaded'] = 'Nessun file &egrave; stato caricato';
$lang['admin']['files_failed'] = 'I file hanno fallito il controllo integrit&agrave; md5sum';
$lang['admin']['files_not_found'] = 'File non trovati';
$lang['admin']['info_generate_cksum_file'] = 'Questa funzione Vi permetter&agrave; di generare un file di controllo integrit&agrave; e salvarlo sul Vostro computer per una successiva validazione. Questo dovrebbe essere effettuato prima di un restore e/o dopo ogni aggiornamento o modifiche importanti.';
$lang['admin']['info_validation'] = 'Questa funzione confronter&agrave; i controlli integrit&agrave; trovati nel file inviato con i file della Vostra installazione attuale. Vi pu&ograve; assistere nell&#039;individuare problemi con i file caricati, oppure indicare esattamente quali file siano stati modificati se il vostro sistema &egrave; stato violato.';
$lang['admin']['download_cksum_file'] = 'Scarica il File controllo integrit&agrave;';
$lang['admin']['perform_validation'] = 'Esegui la Validazione';
$lang['admin']['upload_cksum_file'] = 'Invia il File controllo integrit&agrave;';
$lang['admin']['checksumdescription'] = 'Valida l&#039;integrit&agrave; dei file di CMS comparandoli con quelli nel File controllo integrit&agrave;';
$lang['admin']['system_verification'] = 'Verifica del sistema';
$lang['admin']['extra1'] = 'Attributo di pagina Extra 1';
$lang['admin']['extra2'] = 'Attributo di pagina Extra 2';
$lang['admin']['extra3'] = 'Attributo di pagina Extra 3';
$lang['admin']['start_upgrade_process'] = 'Avvia il processo di Aggiornamento';
$lang['admin']['warning_upgrade'] = '<em><strong>Attenzione:</strong></em> CMSMS necessita di un aggiornamento.';
$lang['admin']['warning_upgrade_info1'] = 'Voi state utilizzando la versione di schema %s. ed &egrave; necessario un aggiornamento alla versione %s';
$lang['admin']['warning_upgrade_info2'] = 'Si prega di cliccare sul seguente collegamento: %s.';
$lang['admin']['warning_mail_settings'] = 'Le vostre impostazioni di mail non sono state configurate. Questo potrebbe interferire con la possibilit&agrave; di inviare messaggi dal Vostro sito. Voi dovreste andare a <a href="%s">Estensioni >> CMSMailer</a> e configurare le impostazioni mail con le informazioni del Vostro provider.';
$lang['admin']['view_page'] = 'Visualizza questa pagina in una nuova finestra';
$lang['admin']['off'] = 'Off ';
$lang['admin']['on'] = 'On ';
$lang['admin']['invalid_test'] = 'Valore del parametro di test non valido!';
$lang['admin']['copy_paste_forum'] = 'Visualizza il report testuale <em>(adatto per la copia nei messaggi del forum)</em>';
$lang['admin']['permission_information'] = 'Informazioni sui permessi';
$lang['admin']['server_os'] = 'Sistema Operativo del server';
$lang['admin']['server_api'] = 'Server  API';
$lang['admin']['server_software'] = 'Software del server';
$lang['admin']['server_information'] = 'Informazioni sul server';
$lang['admin']['session_save_path'] = 'Percorso del salvataggio sessioni';
$lang['admin']['max_execution_time'] = 'Tempo massimo di esecuzione';
$lang['admin']['gd_version'] = 'Versione GD';
$lang['admin']['upload_max_filesize'] = 'Dimensione massima dell&#039;upload';
$lang['admin']['post_max_size'] = 'Dimensione massima dei Post';
$lang['admin']['memory_limit'] = 'Limite di memoria PHP';
$lang['admin']['server_db_type'] = 'Database server';
$lang['admin']['server_db_version'] = 'Versione del Server Database';
$lang['admin']['phpversion'] = 'Versione PHP corrente';
$lang['admin']['safe_mode'] = 'Safe Mode PHP';
$lang['admin']['php_information'] = 'Informazioni PHP';
$lang['admin']['cms_install_information'] = 'Informazioni installazione CMS';
$lang['admin']['cms_version'] = 'Versione CMS';
$lang['admin']['installed_modules'] = 'Moduli installati';
$lang['admin']['config_information'] = 'Informazioni di configurazione';
$lang['admin']['systeminfo_copy_paste'] = 'Copia ed incolla il testo selezionato nel messaggio del forum';
$lang['admin']['help_systeminformation'] = 'Le informazioni visualizzate sotto sono ottenute da diverse fonti e condensate qui in modo da poter convenientemente trovare le informazioni richieste durante la diagnostica di un problema o la richiesta di aiuto presso il forum di CMS Made Simple.';
$lang['admin']['systeminfo'] = 'Informazioni sul sistema';
$lang['admin']['systeminfodescription'] = 'Visualizza parti di informazioni sul vostro sistema che possono essere utili in fase di diagnostica dei problemi';
$lang['admin']['systemmaintenance'] = 'Manutenzione di Sistema';
$lang['admin']['systemmaintenancedescription'] = 'Varie funzioni per mantenere la salute del vostro sistema. E&#039; anche possibile sfogliare il registro modifiche di CMSMadeSimple';
$lang['admin']['sysmaintab_database'] = 'Database';
$lang['admin']['sysmaintab_changelog'] = 'Registro modifiche';
$lang['admin']['sysmaintab_content'] = 'Cache e Contenuto';
$lang['admin']['sysmain_content_status'] = 'Stato del Contenuto';
$lang['admin']['sysmain_cache_status'] = 'Stato della Cache';
$lang['admin']['sysmain_database_status'] = 'Stato del Database';
$lang['admin']['sysmain_updatehierarchy'] = 'Aggiorna posizione gerarchica delle pagine';
$lang['admin']['sysmain_confirmupdatehierarchy'] = 'Siete certi di volere aggiornare la posizione gerarchica delle pagine?';
$lang['admin']['sysmain_update'] = 'Aggiorna';
$lang['admin']['sysmain_pagesfound'] = 'pagine trovate';
$lang['admin']['sysmain_hierarchyupdated'] = 'Posizione gerarchica delle pagine aggiornata';
$lang['admin']['sysmain_nostr_errors'] = 'Nessun errore strutturale individuato nel database';
$lang['admin']['sysmain_str_error'] = 'Trovato errore atrutturale nella tabella';
$lang['admin']['sysmain_str_errors'] = 'Trovati errori strutturali nelle tabelle';
$lang['admin']['sysmain_tablesfound'] = 'tabelle trovate (delle quali %d non sono seq-tables)';
$lang['admin']['sysmain_repair'] = 'Ripara';
$lang['admin']['sysmain_repairtables'] = 'Ripara tabelle';
$lang['admin']['sysmain_tablesrepaired'] = 'Tabelle riparate';
$lang['admin']['sysmain_optimizetables'] = 'Ottimizza tabelle';
$lang['admin']['sysmain_tablesoptimized'] = 'Tabelle ottimizzate';
$lang['admin']['sysmain_optimize'] = 'Ottimizza';
$lang['admin']['sysmain_confirmclearcache'] = 'Siete certi di volere eliminare la cache?';
$lang['admin']['sysmain_nocontenterrors'] = 'Nessun errore di contenuto individuato';
$lang['admin']['sysmain_pagesmissinalias'] = 'pagine senza alias';
$lang['admin']['sysmain_confirmfixaliases'] = 'Siete certi di volere aggiungere alias a pagine che ne sono sprovviste?';
$lang['admin']['sysmain_fixaliases'] = 'Aggiungi alias dove mancano';
$lang['admin']['sysmain_aliasesfixed'] = 'alias corretti';
$lang['admin']['sysmain_pagesinvalidtypes'] = 'pagine con tipo di contenuto sbagliato';
$lang['admin']['sysmain_confirmfixtypes'] = 'Siete certi di volere convertire tutte le pagine con contenuto non valido in pagine a contenuto standard?';
$lang['admin']['sysmain_fixtypes'] = 'Converti in Pagine di contenuto standard';
$lang['admin']['sysmain_typesfixed'] = 'tipi di contenuto pagina corretti';
$lang['admin']['welcome_user'] = 'Benvenuto';
$lang['admin']['itsbeensincelogin'] = 'E&#039; trascorso %s dal vostro ultimo login';
$lang['admin']['days'] = 'giorni';
$lang['admin']['day'] = 'giorno';
$lang['admin']['hours'] = 'ore';
$lang['admin']['hour'] = 'ora';
$lang['admin']['minutes'] = 'minuti';
$lang['admin']['minute'] = 'minuto';
$lang['admin']['help_css_max_age'] = 'Questo parametro dovrebbe essere impostato relativamente alto per siti statici e a 0 per siti in sviluppo';
$lang['admin']['css_max_age'] = 'Tempo Massimo (secondi) per cui i fogli di stile possono essere memorizzati nella cache del browser';
$lang['admin']['error'] = 'Errore';
$lang['admin']['new_version_available'] = '<em>Notifica:</em> Una nuova versione di CMS Made Simple &egrave; disponibile. Si prega di notificarlo al Vostro amministratore del sito.';
$lang['admin']['master_admintheme'] = 'Tema predefinito per l&#039;amministrazione (pagina di login e nuovi utenti)';
$lang['admin']['contenttype_separator'] = 'Separatore';
$lang['admin']['contenttype_sectionheader'] = 'Intestazione Sezione';
$lang['admin']['contenttype_content'] = 'Contenuto';
$lang['admin']['contenttype_pagelink'] = 'Collegamento a Pagina Interna';
$lang['admin']['nogcbwysiwyg'] = 'Disabilita gli editor WYSIWYG nei blocchi di contenuto globale';
$lang['admin']['destination_page'] = 'Pagina di destinazione';
$lang['admin']['additional_params'] = 'Parametri addizionali';
$lang['admin']['help_function_current_date'] = '	<h3 style=&quot;color: red;&quot;>Deprecato</h3>
	<p>use <code>{$smarty.now|cms_date_format}</code></p>
	<h3>Che cosa fa?</h3>
	<p>Visualizza la data-ora corrente. Se non &egrave; fornito nessun formato, quello predefinito &egrave; simile a &#039;Gen 01, 2004&#039;.</p>
	<h3>Come usarlo?</h3>
	<p>Inserite il tag nel vostro Modello/pagina come: <code>{current_date format=&quot;%A %d-%b-%y %T %Z&quot;}</code></p>
	<h3>Quali parametri sono utilizzabili?</h3>
	<ul>
		<li><em>(optional)</em>format - Formato data/ora utilizzando la funzione php strftime. Vedere <a href="http://php.net/strftime" target="_blank">qui</a> per una lista di parametri ed informazioni.</li>
		<li><em>(optional)</em>ucword - Se true restituisce in maiuscolo il primo carattere di ciascuna parola.</li>
             <li><em>(opzionale)> <tt>assign</tt> - assegna il risultato ad una variabile smarty con questo nome.</li>
	</ul>';
$lang['admin']['help_function_valid_xhtml'] = '<h3>Cosa fa?</h3>
<p>Restituisce un link al validatore HTML del w3c.</p>
<h3>Come si usa?</h3>
<p>Inserite il tag nel vostro template/pagina in questo modo: <code>{valid_xhtml}</code></p>
<h3>Quali parametri accetta??</h3>
<p>
    <ul>
	<li><em>(opzionale)</em> url         (stringa)     - L&#039;URL utilizzata per la validazione; se non ne viene fornita alcuna, viene utilizzato http://validator.w3.org/check/referer .</li>
	<li><em>(opzionale)</em> class       (stringa)     - Se impostato, verr&agrave; utilizzato come attributo class per l&#039;elemento link (a)</li>
	<li><em>(opzionale)</em> target      (stringa)     - Se impostato, verr&agrave; utilizzato come attributo target per l&#039;elento link (a)</li>
	<li><em>(opzionale)</em> image       (true/false) - Se impostato a flase, verr&agrave; utilizzato un link testuale al posto di un&#039;immagine/icona.</li>
	<li><em>(opzionale)</em> text        (stringa)     - Se impostato, verr&agrave; utilizzato per il link testuale o come testo alternativo dell&#039;immagine. Il valore predefinito &egrave; &#039;valid XHTML 1.0 Transitional&#039;.<br /> Quando si usa un&#039;immagine, questa stringa verr&agrave; utilizzata anche per l&#039;attributo alt (si pu&ograve; modificare questo comportamento utilizzando il parametro &#039;alt&#039;).</li>
	<li><em>(opzionale)</em> image_class (stringa)     - Valido solo se &#039;image&#039; non &egrave; impostato a false. Se impostato, questo valore verr&agrave; utilizzato come attributo class per l&#039;elemento immagine (img) If set, this will be used as class attribute for the image (img) element</li>
	<li><em>(opzionale)</em> src         (stringa)     - Valido solo se &#039;image&#039; non &egrave; impostato a false. L&#039;icona da visualizzare. La predefinita &egrave; http://www.w3.org/Icons/valid-xhtml10</li>
	<li><em>(opzionale)</em> width       (stringa)     - Valido solo se &#039;image&#039; non &egrave; impostato a false. La larghezza dell&#039;immagine. Il valore predefinito &egrave; 88 (larghezza di http://www.w3.org/Icons/valid-xhtml10)</li>
	<li><em>(opzionale)</em> height      (stringa)     - Valido solo se &#039;image&#039; non &egrave; impostato a false. L&#039;altezza dell&#039;immagine. Il valore predefinito &egrave; 31 (altezza di http://www.w3.org/Icons/valid-xhtml10)</li>
	<li><em>(opzionale)</em> alt         (stringa)     - Valido solo se &#039;image&#039; non &egrave; impostato a false. Il testo alternativo (attributo &#039;alt&#039;) per l&#039;elemento immagine (img). Se non ne viene fornito alcuno, verr&agrave; utilizzato il link testuale.</li>
    </ul>';
$lang['admin']['help_function_valid_css'] = '<h3>What does this do?</h3>
<p>Returns a link to the w3c CSS validator.</p>
<h3>How do I use it?</h3>
<p>Just insert the tag into your template/page like: <code>{valid_css}</code></p>
<h3>What parameters does it take?</h3>
<p>
    <ul>
        <li><em>(optional)</em> url         (string)     - The URL used for validation, if none is given http://jigsaw.w3.org/css-validator/check/referer is used.</li>
	<li><em>(optional)</em> class       (string)     - If set, this will be used as class attribute for the link (a) element</li>
	<li><em>(optional)</em> target      (string)     - If set, this will be used as target attribute for the link (a) element</li>
	<li><em>(optional)</em> image       (true/false) - If set to false, a text link will be used instead of an image/icon.</li>
	<li><em>(optional)</em> text        (string)     - If set, this will be used for the link text or alternate text for the image. Default is &#039;Valid CSS 2.1&#039;.<br /> When an image is used, the given string will also be used for the image alt attribute (by default, this can be overridden by using the &#039;alt&#039; parameter).</li>
	<li><em>(optional)</em> image_class (string)     - Only if &#039;image&#039; is not set to false. If set, this will be used as class attribute for the image (img) element</li>
        <li><em>(optional)</em> src         (string)     - Only if &#039;image&#039; is not set to false. The icon to show. Default is http://jigsaw.w3.org/css-validator/images/vcss</li>
        <li><em>(optional)</em> width       (string)     - Only if &#039;image&#039; is not set to false. The image width. Default is 88 (width of http://jigsaw.w3.org/css-validator/images/vcss)</li>
        <li><em>(optional)</em> height      (string)     - Only if &#039;image&#039; is not set to false. The image height. Default is 31 (height of http://jigsaw.w3.org/css-validator/images/vcss)</li>
	<li><em>(optional)</em> alt         (string)     - Only if &#039;image&#039; is not set to false. The alternate text (&#039;alt&#039; attribute) for the image (element). If none is given the link text will be used.</li>
    </ul>
</p>';
$lang['admin']['help_function_title'] = '	<h3>Che cosa fa?</h3>
	<p>Visualizza il titolo della pagina.</p>
	<h3>Come usarlo?</h3>
	<p>Inserite il tag nel vostro Modello/pagina come: <code>{title}</code></p>
	<h3>Quali parametri sono utilizzabili?</h3>
	<p><em>(optional)</em> assign (string) - Assegna il risultato alla variabile smarty con quel nome.</p>';
$lang['admin']['help_function_stylesheet'] = '	<h3>What does this do?</h3>
<p><strong>Deprecata:</strong> Questa funzione &egrave; deprecata e verr&agrave; rimossa in una prossima versione di CMSMS.
	<p>Gets stylesheet information from the system.  By default, it grabs all of the stylesheets attached to the current template.</p>
	<h3>How do I use it?</h3>
	<p>Just insert the tag into your template/page&#039;s head section like: <code>{stylesheet}</code></p>
	<h3>What parameters does it take?</h3>
	<ul>
		<li><em>(optional)</em>name - Instead of getting all stylesheets for the given page, it will only get one spefically named one, whether it&#039;s attached to the current template or not.</li>
		<li><em>(optional)</em>media - If name is defined, this allows you set a different media type for that stylesheet.</li>
	</ul>
	</p>';
$lang['admin']['help_function_sitename'] = '        <h3>Cosa fa?</h3>
        <p>Mostra il nome del sito.  Viene definito durante l&#039;installazione e pu&ograve; essere modificato nella sezione Impostazione Globali del pannello di amministrazione.</p>
        <h3>Come si usa?</h3>
        <p>inserite semplicemente il tag nel vostro modello/pagina in questo modo: <code>{sitename}</code></p>
        <h3>Quali parametri accetta?</h3>
	<p><em>(opzionale)</em> assign (stringa) - Assegna il risultato ad una variabile smarty con questo nome.</p>';
$lang['admin']['help_function_search'] = '	<h3>Cosa fa?</h3>
	<p>Al momento &egrave; solo un involucro per il modulo Search, in modo da rendere la sintassi pi&ugrave; semplice. 
	Invece di dovere utilizzare <code>{cms_module module=&#039;Search&#039;}</code> ora potete utilizzare soltanto <code>{search}</code> per inserire il modulo in un modello.
	</p>
	<h3>Come si usa?</h3>
	<p>Inserite <code>{search}</code> in un modello in cui volete che appaia il box ricerca. Per informazioni sul modulo Search, fate riferimento alla voce &quot;aiuto&quot; del modulo stesso.</p>';
$lang['admin']['help_function_root_url'] = '	<h3>Che cosa fa?</h3>
	<p>Visualizza l&#039;url del root del sito.</p>
	<h3>Come usarlo?</h3>
	<p>Inserite il tag nel vostro modello/pagina in questo modo: <code>{root_url}</code></p>
	<h3>Quali parametri accetta?</h3>
	<p><em>(opzionale) autossl=1</em> - Abilitata in modo predefinito, questa opzione individuer&agrave; se la richiesta fatta al server sia tramite SSL, fornendo di conseguenza l&#039;url formata in modo adeguato.  Per disabilitarla specificate autossl=0 .</p>
<p><em>(opzionale)</em> assign (stringa) - Assegna il risultato ad una variabile smarty con questo nome.</p>';
$lang['admin']['help_function_repeat'] = '  <h3>What does this do?</h3>
  <p>Repeats a specified sequence of characters, a specified number of times</p>
  <h3>How do I use it?</h3>
  <p>Insert a tag similar to the following into your template/page, like this: <code>{repeat string=&#039;repeat this &#039; times=&#039;3&#039;}</code>
  <h3>What parameters does it take?</h3>
  <ul>
  <li>string=&#039;text&#039; - The string to repeat</li>
  <li>times=&#039;num&#039; - The number of times to repeat it.</li>
  </ul>';
$lang['admin']['help_function_recently_updated'] = '	<h3>What does this do?</h3>
	<p>Outputs a list of recently updated pages.</p>
	<h3>How do I use it?</h3>
	<p>Just insert the tag into your template/page like: <code>{recently_updated}</code></p>
	<h3>What parameters does it take?</h3>
	<ul>
											 <li><p><em>(optional)</em> number=&#039;10&#039; - Number of updated pages to show.</p><p>Example: <pre>{recently_updated number=&#039;15&#039;}</pre></p></li>
											 	<li><p><em>(optional)</em> leadin=&#039;Last changed&#039; - Text to show left of the modified date.</p><p>Example: <pre>{recently_updated leadin=&#039;Last Changed&#039;}</pre></p></li>
											 	<li><p><em>(optional)</em> showtitle=&#039;true&#039; - Shows the titleattribute if it exists as well (true|false).</p><p>Example: <pre>{recently_updated showtitle=&#039;true&#039;}</pre></p></li>											 	
											 	<li><p><em>(optional)</em> css_class=&#039;some_name&#039; - Warp a div tag with this class around the list.</p><p>Example: <pre>{recently_updated css_class=&#039;some_name&#039;}</pre></p></li>											 	
											 		<li><p><em>(optional)</em> dateformat=&#039;d.m.y h:m&#039; - default is d.m.y h:m , use the format you whish (php -date- format)</p><p>Example: <pre>{recently_updated dateformat=&#039;D M j G:i:s T Y&#039;}</pre></p></li>											 	
	</ul>
	<p>or combined:</p>
	<pre>{recently_updated number=&#039;15&#039; showtitle=&#039;false&#039; leadin=&#039;Last Change: &#039; css_class=&#039;my_changes&#039; dateformat=&#039;D M j G:i:s T Y&#039;}</pre>';
$lang['admin']['help_function_print'] = '	<h3>What does this do?</h3>
	<p>This is actually just a wrapper tag for the <a href="listmodules.php?action=showmodulehelp&amp;module=Printing">Printing module</a> to make the tag syntax easier. 
	Instead of having to use <code>{cms_module module=&#039;Printing&#039;}</code> you can now just use <code>{print}</code> to insert the module on pages and templates.
	</p>
	<h3>How do I use it?</h3>
	<p>Just put <code>{print}</code> on a page or in a template. For help about the Printing module, what parameters it takes etc., please refer to the <a href="listmodules.php?action=showmodulehelp&amp;module=Printing">Printing module help</a>.';
$lang['admin']['login_info_title'] = 'Informazioni';
$lang['admin']['login_info'] = 'Per il corretto funzionamento del pannello di amministrazione';
$lang['admin']['login_info_params'] = '<ol> 
  <li>i Cookies devono essere abilitati nel vostro browser</li> 
  <li>i Javascript devono essere abilitati nel vostro browser </li> 
  <li>le finestre di popup dovranno essere permesse per l&#039;indirizzo seguente:</li> 
</ol>';
$lang['admin']['help_function_news'] = '	<h3>What does this do?</h3>
	<p>This is actually just a wrapper tag for the <a href="listmodules.php?action=showmodulehelp&amp;module=News">News module</a> to make the tag syntax easier. 
	Instead of having to use <code>{cms_module module=&#039;News&#039;}</code> you can now just use <code>{news}</code> to insert the module on pages and templates.
	</p>
	<h3>How do I use it?</h3>
	<p>Just put <code>{news}</code> on a page or in a template. For help about the News module, what parameters it takes etc., please refer to the <a href="listmodules.php?action=showmodulehelp&amp;module=News">News module help</a>.';
$lang['admin']['help_function_modified_date'] = '        <h3>What does this do?</h3>
        <p>Prints the date and time the page was last modified.  If no format is given, it will default to a format similar to &#039;Jan 01, 2004&#039;.</p>
        <h3>How do I use it?</h3>
        <p>Just insert the tag into your template/page like: <code>{modified_date format=&quot;%A %d-%b-%y %T %Z&quot;}</code></p>
        <h3>What parameters does it take?</h3>
        <ul>
                <li><em>(optional)</em>format - Date/Time format using parameters from php&#039;s strftime function.  See <a href="http://php.net/strftime" target="_blank">here</a> for a parameter list and information.</li>
        </ul>';
$lang['admin']['help_function_metadata'] = '	<h3>What does this do?</h3>
	<p>Displays the metadata for this page. Both global metdata from the global settings page and metadata for each page will be shown.</p>
	<h3>How do I use it?</h3>
	<p>Just insert the tag into your template like: <code>{metadata}</code></p>
	<h3>What parameters does it take?</h3>
	<ul>
		<li><em>(optional)</em>showbase (true/false) - If set to false, the base tag will not be sent to the browser.  Defaults to true if use_hierarchy is set to true in config.php.</li>
	</ul>';
$lang['admin']['help_function_menu_text'] = '	<h3>What does this do?</h3>
	<p>Prints the menu text of the page.</p>
	<h3>How do I use it?</h3>
	<p>Just insert the tag into your template/page like: <code>{menu_text}</code></p>
	<h3>What parameters does it take?</h3>
	<p>None at this time.</p>';
$lang['admin']['help_function_menu'] = '	<h3>What does this do?</h3>
	<p>This is actually just a wrapper tag for the <a href="listmodules.php?action=showmodulehelp&amp;module=MenuManager">Menu Manager module</a> to make the tag syntax easier. 
	Instead of having to use <code>{cms_module module=&#039;MenuManager&#039;}</code> you can now just use <code>{menu}</code> to insert the module on pages and templates.
	</p>
	<h3>How do I use it?</h3>
	<p>Just put <code>{menu}</code> on a page or in a template. For help about the Menu Manager module, what parameters it takes etc., please refer to the <a href="listmodules.php?action=showmodulehelp&amp;module=MenuManager">Menu Manager module help</a>.';
$lang['admin']['help_function_last_modified_by'] = '        <h3>What does this do?</h3>
        <p>Prints last person that edited this page.  If no format is given, it will default to a ID number of user .</p>
        <h3>How do I use it?</h3>
        <p>Just insert the tag into your template/page like: <code>{last_modified_by format=&quot;fullname&quot;}</code></p>
        <h3>What parameters does it take?</h3>
        <ul>
                <li><em>(optional)</em>format - id, username, fullname</li>
        </ul>';
$lang['admin']['help_function_image'] = '  <h3>What does this do?</h3>
  <p>Creates an image tag to an image stored within your images directory</p>
  <h3>How do I use it?</h3>
  <p>Just insert the tag into your template/page like: <code>{image src=&quot;something.jpg&quot;}</code></p>
  <h3>What parameters does it take?</h3>
  <ul>
     <li><em>(required)</em>  <tt>src</tt> - Image filename within your images directory.</li>
     <li><em>(optional)</em>  <tt>width</tt> - Width of the image within the page. Defaults to true size.</li>
     <li><em>(optional)</em>  <tt>height</tt> - Height of the image within the page. Defaults to true size.</li>
     <li><em>(optional)</em>  <tt>alt</tt> - Alt text for the image -- needed for xhtml compliance. Defaults to filename.</li>
     <li><em>(optional)</em>  <tt>class</tt> - CSS class for the image.</li>
     <li><em>(optional)</em>  <tt>title</tt> - Mouse over text for the image. Defaults to Alt text.</li>
     <li><em>(optional)</em>  <tt>addtext</tt> - Additional text to put into the tag</li>
  </ul>';
$lang['admin']['help_function_html_blob'] = '	<h3>Che cosa fa?</h3>
	<p>Vedere l&#039;aiuto del global_content per una descrizione.</p>';
$lang['admin']['help_function_google_search'] = '	<h3>What does this do?</h3>
	<p>Search&#039;s your website using Google&#039;s search engine.</p>
	<h3>How do I use it?</h3>
	<p>Just insert the tag into your template/page like: <code>{google_search}</code><br>
	<br>
	Note: Google needs to have your website indexed for this to work. You can submit your website to google <a href="http://www.google.com/addurl.html">here</a>.</p>
	<h3>What if I want to change the look of the textbox or button?</h3>
	<p>The look of the textbox and button can be changed via css. The textbox is given an id of textSearch and the button is given an id of buttonSearch.</p>

	<h3>What parameters does it take?</h3>
	<ul>
		<li><em>(optional)</em> domain - This tells google the website domain to search. This script tries to determine this automatically.</li>
		<li><em>(optional)</em> buttonText - The text you want to display on the search button. The default is &quot;Search Site&quot;.</li>
	</ul>
	</p>';
$lang['admin']['help_function_global_content'] = '	<h3>What does this do?</h3>
	<p>Inserts a global content block into your template or page.</p>
	<h3>How do I use it?</h3>
	<p>Just insert the tag into your template/page like: <code>{global_content name=&#039;myblob&#039;}</code>, where name is the name given to the block when it was created.</p>
	<h3>What parameters does it take?</h3>
	<ul>
		<li>name - The name of the global content block to display.</li>
	</ul>';
$lang['admin']['help_function_get_template_vars'] = '	<h3>What does this do?</h3>
	<p>Dumps all the known smarty variables into your page</p>
	<h3>How do I use it?</h3>
	<p>Just insert the tag into your template/page like: <code>{get_template_vars}</code></p>
	<h3>What parameters does it take?</h3>
											  <p>None at this time</p>';
$lang['admin']['help_function_uploads_url'] = '	<h3>What does this do?</h3>
	<p>Prints the uploads url location for the site.</p>
	<h3>How do I use it?</h3>
	<p>Just insert the tag into your template/page like: <code>{uploads_url}</code></p>
	<h3>What parameters does it take?</h3>
	<p><em>(optional)</em> assign (string) - Assign the results to a smarty variable with that name.</p>';
$lang['admin']['help_function_embed'] = '	<h3>What does this do?</h3>
	<p>Enable inclusion (embeding) of any other application into the CMS. The most usual use could be a forum. 
	This implementation is using IFRAMES so older browsers can have problems. Sorry bu this is the only known way 
	that works without modifing the embeded application.</p>
	<h3>How do I use it?</h3>
	<p>Just insert the tag into your template/page like: <code>{embed url=http://www.google.com/}</code><br></p>
        <h4>Example to make the iframe larger</h4>
	<p>Add the following to your style sheet:</p>
        <pre>#myframe { height: 600px; }</pre>
        <h3>What parameters does it take?</h3>
        <ul>
               <li><em>(required)</em>url - the url to be included 
               <li><em>(optional)</em>header=true - this will generate the header code for good resizing of the IFRAME.</li>

        </ul>
       <p>You must include in your page content {embed url=..} and in the &quot;Metadata:&quot; section (advanced tab) you must put {embed header=true}. Also be sure to put this in between the &quot;head&quot; tags of your template: {metadata}</p>';
$lang['admin']['help_function_description'] = '	<h3>What does this do?</h3>
	<p>Prints the description (title attribute) of the page.</p>
	<h3>How do I use it?</h3>
	<p>Just insert the tag into your template/page like: <code>{description}</code></p>
	<h3>What parameters does it take?</h3>
	<p>None at this time.</p>';
$lang['admin']['help_function_created_date'] = '        <h3>What does this do?</h3>
        <p>Prints the date and time the page was created.  If no format is given, it will default to a format similar to &#039;Jan 01, 2004&#039;.</p>
        <h3>How do I use it?</h3>
        <p>Just insert the tag into your template/page like: <code>{created_date format=&quot;%A %d-%b-%y %T %Z&quot;}</code></p>
        <h3>What parameters does it take?</h3>
        <ul>
                <li><em>(optional)</em>format - Date/Time format using parameters from php&#039;s strftime function.  See <a href="http://php.net/strftime" target="_blank">here</a> for a parameter list and information.</li>
        </ul>';
$lang['admin']['help_function_content'] = '	<h3>What does this do?</h3>
	<p>This is where the content for your page will be displayed.  It&#039;s inserted into the template and changed based on the current page being displayed.</p>
	<h3>How do I use it?</h3>
	<p>Just insert the tag into your template like: <code>{content}</code>.</p>
	<h3>What parameters does it take?</h3>
	<ul>
		<li><em>(optional)</em>block - Allows you to have more than one content block per page.  When multiple content tags are put on a template, that number of edit boxes will be displayed when the page is edited.
<p>Example:</p>
<pre>{content block=&quot;Second Content Block&quot;}</pre>
<p>Now, when you edit a page there will a textarea called &quot;Second Content Block&quot;.</li>
		<li><em>(optional)</em>wysiwyg (true/false) - If set to false, then a wysiwyg will never be used while editing this block.  If true, then it acts as normal.  Only works when block parameter is used.</li>
		<li><em>(optional)</em>oneline (true/false) - If set to true, then only one edit line will be shown while editing this block.  If false, then it acts as normal.  Only works when block parameter is used.</li>
		<li><em>(optional)</em>assign - Assigns the content to a smarty parameter, which you can then use in other areas of the page, or use to test whether content exists in it or not.
<p>Example of passing page content to a User Defined Tag as a parameter:</p>
<pre>
         {content assign=pagecontent}
         {table_of_contents thepagecontent=&quot;$pagecontent&quot;}
</pre>
</li>
	</ul>';
$lang['admin']['help_function_contact_form'] = '  <h2>NOTE: This plugin is deprecated</h2>
    <p>This smarty plugin is deprecated, and may not be included with further versions of CMS Made Simple.  We recommend you use the formbuilder module and it&#039;s included contact form.</p>
	<h3>What does this do?</h3>
	<p>Display&#039;s a contact form. This can be used to allow others to send an email message to the address specified.</p>
	<h3>How do I use it?</h3>
	<p>Just insert the tag into your template/page like: <code>{contact_form email=&quot;yourname@yourdomain.com&quot;}</code><br>
	<br>
	If you would like to send an email to multiple adresses, seperate each address with a comma.</p>
	<h3>What parameters does it take?</h3>
	<ul>
		<li>email - The email address that the message will be sent to.</li>
		<li><em>(optional)</em>style - true/false, use the predefined styles. Default is true.</li>
		<li><em>(optional)</em>subject_get_var - string, allows you to specify which _GET var to use as the default value for subject.
               <p>Example:</p>
               <pre>{contact_form email=&quot;yourname@yourdomain.com&quot; subject_get_var=&quot;subject&quot;}</pre>
             <p>Then call the page with the form on it like this: /index.php?page=contact&amp;subject=test+subject</p>
             <p>And the following will appear in the &quot;Subject&quot; box: &quot;test subject&quot;
           </li>
		<li><em>(optional)</em>captcha - true/false, use Captcha response test (Captcha module must be installed). Default is false.</li>
	</ul>
	</p>';
$lang['admin']['help_function_cms_versionname'] = '	<h3>What does this do?</h3>
	<p>This tag is used to insert the current version name of CMS into your template or page.  It doesn&#039;t display any extra besides the version name.</p>
	<h3>How do I use it?</h3>
	<p>This is just a basic tag plugin.  You would insert it into your template or page like so: <code>{cms_versionname}</code>
	<h3>What parameters does it take?</h3>
	<p>It takes no parameters.</p>';
$lang['admin']['help_function_cms_version'] = '	<h3>What does this do?</h3>
	<p>This tag is used to insert the current version number of CMS into your template or page.  It doesn&#039;t display any extra besides the version number.</p>
	<h3>How do I use it?</h3>
	<p>This is just a basic tag plugin.  You would insert it into your template or page like so: <code>{cms_version}</code>
	<h3>What parameters does it take?</h3>
	<p>It takes no parameters.</p>';
$lang['admin']['about_function_cms_selflink'] = '		<p>Author: Ted Kulp &amp;lt;tedkulp@users.sf.net&amp;gt;</p>
		<p>Version: 1.1</p>
		<p>Modified: Martin B. Vestergaard &amp;lt;mbv@nospam.dk&amp;gt;</p>
		<p>Version: 1.41</p>
		<p>Modified: Russ Baldwin</p>
		<p>Version: 1.42</p>
		<p>Modified: Marcus Bointon &amp;lt;coolbru@users.sf.net&amp;gt;</p>
		<p>Version: 1.43</p>
		<p>Modified: Tatu Wikman &amp;lt;tsw@backspace.fi&amp;gt;</p>
		<p>Version: 1.44</p>
		<p>Modified: Hans Mogren &amp;lt;http://hans.bymarken.net/&amp;gt;</p>
		<p>Version: 1.45</p>

		<p>
		Change History:<br/>
		1.46 - Fixes a problem with too many queries when using the dir=start option.<br/>
		1.45 - Added a new option for &amp;quot;dir&amp;quot;, &amp;quot;up&amp;quot;, for links to the parent page e.g. dir=&amp;quot;up&amp;quot; (Hans Mogren).<br />
		1.44 - Added new parameters &amp;quot;ext&amp;quot; and &amp;quot;ext_info&amp;quot; to allow external links with class=&amp;quot;external&amp;quot; and info text after the link, ugly hack but works thinking about rewriting this(Tatu Wikman)<br />
		1.43 - Added new parameters &amp;quot;image&amp;quot; and &amp;quot;imageonly&amp;quot; to allow attachment of images to be used for page links, either instead of or in addition to text links. (Marcus Bointon)<br />
		1.42 - Added new parameter &amp;quot;anchorlink&amp;quot; and a new option for &amp;quot;dir&amp;quot; namely, &amp;quot;anchor&amp;quot;, for internal page links. e.g. dir=&amp;quot;anchor&amp;quot; anchorlink=&amp;quot;internal_link&amp;quot;. (Russ)<br />
		1.41 - added new parameter &amp;quot;href&amp;quot; (LeisureLarry)<br />
		1.4 - fixed bug next/prev linking to non-content pages. (Thanks Teemu Koistinen for this fix)<br />
		1.3 - added option &amp;quot;more&amp;quot;<br />
		1.2 - by Martin B. Vestergaard
		<ul>
		<li>changed default text to Page Name (was Page Alias)</li>
		<li>added option dir=next/prev to display next or previous item in the hirachy - thanks to 100rk</li>
		<li>added option class to add a class= statement to the a-tag.</li>
		<li>added option menu to display menu-text in sted of Page Name</li>
		<li>added option lang to display link-labels in different languages</li>
		</ul>
		1.1 - Changed to new content system<br />
		1.0 - Initial release
		</p>';
$lang['admin']['help_function_cms_selflink'] = '<h3>Che cosa fa?</h3>
<p>Crea un link a un&#039;altra pagina di CMSMS all&#039;interno del vostro template o pagina. Pu&amp;ograve; essere anche usato per i link esterni aggiungendo il parametro ext.</p>
<h3>Come lo uso?</h3>
<p>Inserisci il tag nella pagina/template cos&amp;igrave;: <code>{cms_selflink page=&quot;1&quot;}</code> oppure  <code>{cms_selflink page=&quot;alias&quot;}</code></p>
<h3>Che parametri pu&amp;ograve; usare?</h3>
<p>
<ul>
<li><em>(optional)</em> <tt>page</tt> - ID della pagina or alias a cui collegarlo.</li>
<li><em>(optional)</em> <tt>dir anchor (internal links)</tt> - Opzione nuova per un link interno alla pagina. Se viene usato <tt>anchorlink</tt> deve essere settato sul tuo link. </li> <!-- Russ - 25-04-2006 -->
<li><em>(optional)</em> <tt>anchorlink</tt> - Parametro nuovo per un link interno alla pagina. Se viene usato <tt>dir =&quot;anchor&quot;</tt> deve anche essere specificato. Non c&#039;&amp;egrave; bisogno di aggiungere il #, perch&amp;egrave; viene aggiunto in automatico.</li> <!-- Russ - 25-04-2006 -->
<li><em>(optional)</em> <tt>urlparam</tt> - Specifica parametri addizionali alla URL.  <strong>Non va usato in congiunzione con il parametro <em>anchorlink</em></strong>
<li><em>(optional)</em> <tt>tabindex =&quot;a value&quot;</tt> - Setta un tabindex per il link.</li> <!-- Russ - 22-06-2005 -->
<li><em>(optional)</em> <tt>dir start/next/prev/up (previous)</tt> - Links alla pagina inziale di default o alla pagina successiva o precedente, oppure alla pagina genitore (up). Se usato non settare <tt>page</tt>.</li> <!-- mbv - 21-06-2005 -->
<strong>Note!</strong> Solo uno dei parametri sovramenzionati puo essere usato nello stesso statement cms_selflink !!
<li><em>(optional)</em> <tt>text</tt> - Testo da visualizzare al posto del link.  Se non viene specificato viene usato il &#039;Nome della Pagina&#039;</li>
<li><em>(optional)</em> <tt>menu 1/0</tt> - Se settato a 1 il &#039;Testo per il Menu&#039; e usato al posto del &#039;Nome della Pagina&#039;</li> <!-- mbv - 21-06-2005 -->
<li><em>(optional)</em> <tt>target</tt> - Target opzionale per il link. Utile quando si usano frame o javascript.</li>
<li><em>(optional)</em> <tt>class</tt> - Classe per il link <a>. Utile per specificare stili per il link.</li> <!-- mbv - 21-06-2005 -->
<li><em>(optional)</em> <tt>lang</tt> - mostra link-labels  (&quot;Next Page&quot;/&quot;Previous Page&quot;) in lingue differenti (0 per nessun label.) Danese (dk), Inglese (en) o Francese (fr), per adesso.</li> <!-- mbv - 21-06-2005 -->
<li><em>(optional)</em> <tt>id</tt> -  css_id opzionale per il link <a>.</li> <!-- mbv - 29-06-2005 -->
<li><em>(optional)</em> <tt>more</tt> - aggiunge opzioni aggiuntive dentro al link <a>.</li> <!-- mbv - 29-06-2005 -->
<li><em>(optional)</em> <tt>label</tt> - Etichetta da usare con il link laddove si applica.</li>
<li><em>(optional)</em> <tt>label_side left/right</tt> - Lato del link su cui mettere il label (di default e a sinistra &quot;left&quot;).</li>
<li><em>(optional)</em> <tt>title</tt> - testo per l&#039;attributo title.  Se non viene specificato verr&amp;agrave; usato il titolo della pagina.</li>
<li><em>(optional)</em> <tt>rellink 1/0</tt> - Link relazionale per la navigazione accessibile.  Funziona solo se il parametro dir &amp;egrave; settato e andrebbe messo solo nella sezione dell&#039;head di un template.</li>
<li><em>(optional)</em> <tt>href</tt> - Se usato solo il parametro di href ver&amp;agrave generato (non sono possibili altri parametri). <strong>Esempio:</strong> <a href="{cms_selflink href="alias"}"><img src=&quot;&quot;></a></li>
<li><em>(optional)</em> <tt>image</tt> - l&#039;url dell&#039;immagine da usare nel link. <strong>Esempio:</strong> {cms_selflink dir=&quot;next&quot; image=&quot;next.png&quot; text=&quot;Next&quot;}</li>
<li><em>(optional)</em> <tt>alt</tt> - Testo alternativo da usare con l&#039;immagine (se non viene specificato, verr&amp;agrave; usato alt=&quot;&quot;).</li>
<li><em>(optional)</em> <tt>imageonly</tt> - Se si usa un immagine o per impedire la visualizzazione del link testuale. Se non volete alcun testo settare anche lang=0 per sopprimere l&#039;etichetta. <strong>Esempio:</strong> {cms_selflink dir=&quot;next&quot; image=&quot;next.png&quot; text=&quot;Next&quot; imageonly=1}</li>
<li><em>(optional)</em> <tt>ext</tt> - Per i link esterni al sito, aggiunge class=&quot;external e info text. <strong>Attenzione:</strong> solo i paramatri text, target e title  sono compatibili con questo parametro</li>
<li><em>(optional)</em> <tt>ext_info</tt> - Usato in congiunzione con &quot;ext&quot; di default &amp;egrave; (external link)</li>
</ul>
</p>';
$lang['admin']['about_function_cms_module'] = '	<p>Author: Ted Kulp<tedkulp@users.sf.net></p>
	<p>Version: 1.0</p>
	<p>
	Change History:<br/>
	None
	</p>';
$lang['admin']['help_function_cms_module'] = '	<h3>What does this do?</h3>
	<p>This tag is used to insert modules into your templates and pages.  If a module is created to be used as a tag plugin (check it&#039;s help for details), then you should be able to insert it with this tag.</p>
	<h3>How do I use it?</h3>
	<p>It&#039;s just a basic tag plugin.  You would insert it into your template or page like so: <code>{cms_module module=&quot;somemodulename&quot;}</code>
	<h3>What parameters does it take?</h3>
	<p>There is only one required parameter.  All other parameters are passed on to the module.
	<ul>
		<li>module - Name of the module to insert.  This is not case sensitive.</li>
	</ul>
';
$lang['admin']['about_function_breadcrumbs'] = '<p>Author: Marcus Deglos <<a href="mailto:md@zioncore.com">md@zioncore.com</a>></p>
<p>Version: 1.7</p>
<p>
Change History:<br/>
1.1 - Modified to use new content rewrite (wishy)<br />
1.2 - Added parameters: delimiter, initial, and root (arl)<br />
1.3 - Added parameter: classid (tdh / perl4ever)<br />
1.4 - Added parameter currentclassid and fixed some bugs (arl)<br />
1.5 - Modified to use new hierarchy manager<br />
1.6 - Modified to skip any parents that are marked to be &quot;not shown in menu&quot; except for root<br />
1.7 - Added root_url parameter (elijahlofgren)<br />
1.8 - Fixes to the root param.<br/>
</p>';
$lang['admin']['help_function_breadcrumbs'] = '<h3 style=&quot;font-weight:bold;color:#f00;&quot;>DEPRECATED Use &amp;#123;cms_breadcrumbs&amp;#125; now!</h3>
<h3>What does this do?</h3>
<p>Prints a breadcrumb trail.</p>
<h3>How do I use it?</h3>
<p>Just insert the tag into your template/page like: <code>{breadcrumbs}</code></p>
<h3>What parameters does it take?</h3>
<ul>
<li><em>(optional)</em> <tt>delimiter</tt> - Text to seperate entries in the list (default &quot;&amp;gt;&amp;gt;&quot;).</li>
<li><em>(optional)</em> <tt>initial</tt> - 1/0 If set to 1 start the breadcrumbs with a delimiter (default 0).</li>
<li><em>(optional)</em> <tt>root</tt> - Page alias of a page you want to always appear as the first page in
    the list. Can be used to make a page (e.g. the front page) appear to be the root of everything even though it is not.</li>
<li><em>(optional)</em> <tt>root_url</tt> - Override the URL of the root page. Useful for making link be to &#039;/&#039; instead of &#039;/home/&#039;. This requires that the root page be set as the default page.</li>
<li><em>(optional)</em> <tt>classid</tt> - The CSS class for the non current page names, i.e. the first n-1 pages in the list. If the name is a link it is added to the &amp;lt;a href&amp;gt; tags, otherwise it is added to the &amp;lt;span&amp;gt; tags.</li>
<li><em>(optional)</em> <tt>currentclassid</tt> - The CSS class for the &amp;lt;span&amp;gt; tag surrounding the current page name.</li>
<li><em>(optional)</em> <tt>starttext</tt> - Text to append to the front of the breadcrumbs list, something like &amp;quot;You are here&amp;quot;.</li>
<li><em>(optional)</em> <tt>assign</tt> - Assign the results to the named smarty variable.</li>
</ul>

<h3>What does this do?</h3> <p>Prints a breadcrumb trail .</p> <h3>How do I use it?</h3> <p>Just insert the tag into your template/page like: <code>{breadcrumbs}</code></p> <h3>What parameters does it take?</h3> <p> <ul> <li><em>(optional)</em> <tt>delimiter</tt> - Text to seperate entries in the list (default &quot;>>&quot;).</li> <li><em>(optional)</em> <tt>initial</tt> - 1/0 If set to 1 start the breadcrumbs with a delimiter (default 0).</li> <li><em>(optional)</em> <tt>root</tt> - Page alias of a page you want to always appear as the first page in the list. Can be used to make a page (e.g. the front page) appear to be the root of everything even though it is not.</li> <li><em>(optional)</em> <tt>root_url</tt> - Override the URL of the root page. Useful for making link be to &#039;/&#039; instead of &#039;/home/&#039;. This requires that the root page be set as the default page.</li> <li><em>(optional)</em> <tt>classid</tt> - The CSS class for the non current page names, i.e. the first n-1 pages in the list. If the name is a link it is added to the <a href> tags, otherwise it is added to the <span> tags.</li> <li><em>(optional)</em> <tt>currentclassid</tt> - The CSS class for the <span> tag surrounding the current page name.</li> <li><em>(optional)</em> <tt>starttext</tt> - Text to append to the front of the breadcrumbs list, something like &quot;You are here&quot;.</li> </ul> </p>
';
$lang['admin']['about_function_anchor'] = '	<p>Author: Ted Kulp<tedkulp@users.sf.net></p>
	<p>Version: 1.1</p>
	<p>
	Change History:<br/>
	<strong>Update to version 1.1 from 1.0</strong> <em>2006/07/19</em><br/>
	Russ added the means to insert a title, a tabindex and a class for the anchor link. Westis added accesskey and changed parameter names to not include &#039;anchorlink&#039;.<br/>
	</hr>
	</p>';
$lang['admin']['help_function_anchor'] = '	<h3>What does this do?</h3>
	<p>Makes a proper anchor link.</p>
	<h3>How do I use it?</h3>
	<p>Just insert the tag into your template/page like: <code>{anchor anchor=&#039;here&#039; text=&#039;Scroll Down&#039;}</code></p>
	<h3>What parameters does it take?</h3>
	<p>
	<ul>
	<li><tt>anchor</tt> - Where we are linking to.  The part after the #.</li>
	<li><tt>text</tt> - The text to display in the link.</li>
	<li><tt>class</tt> - The class for the link, if any</li>
	<li><tt>title</tt> - The title to display for the link, if any.</li>
	<li><tt>tabindex</tt> - The numeric tabindex for the link, if any.</li>
	<li><tt>accesskey</tt> - The accesskey for the link, if any.</li>
	<li><em>(optional)</em> <tt>onlyhref</tt> - Only display the href and not the entire link. No other options will work</li>
	</ul>
	</p>';
$lang['admin']['help_function_site_mapper'] = '<h3>What does this do?</h3>
  <p>This is actually just a wrapper tag for the <a href="listmodules.php?action=showmodulehelp&amp;module=MenuManager">Menu Manager module</a> to make the tag syntax easier, and to simplify creating a sitemap.</p>
<h3>How do I use it?</h3>
  <p>Just put <code>{site_mapper}</code> on a page or in a template. For help about the Menu Manager module, what parameters it takes etc., please refer to the <a href="listmodules.php?action=showmodulehelp&amp;module=MenuManager">Menu Manager module help</a>.</p>
  <p>By default, if no template option is specified the minimal_menu.tpl file will be used.</p>
  <p>Any parameters used in the tag are available in the menumanager template as <code>{$menuparams.paramname}</code></p>';
$lang['admin']['help_function_redirect_url'] = '<h3>What does this do?</h3>
  <p>This plugin allows you to easily redirect to a specified url.  It is handy inside of smarty conditional logic (for example, redirect to a splash page if the site is not live yet).</p>
<h3>How do I use it?</h3>
<p>Simply insert this tage into your page or template: <code>{redirect_url to=&#039;www.cmsmadesimple.org&#039;}</code></p>';
$lang['admin']['help_function_redirect_page'] = '<h3>What does this do?</h3>
 <p>This plugin allows you to easily redirect to another page.  It is handy inside of smarty conditional logic (for example, redirect to a login page if the user is not logged in.)</p>
<h3>How do I use it?</h3>
<p>Simply insert this tage into your page or template: <code>{redirect_page page=&#039;some-page-alias&#039;}</code></p>';
$lang['admin']['help_function_cms_jquery'] = '<h3>What does this do?</h3>
 <p>This plugin allows you output the javascript libraries and plugins used from the admin.</p>
<h3>How do I use it?</h3>
<p>Simply insert this tag into your page or template: <code>{cms_jquery}</code></p>

<h3>Sample</h3>
<pre><code>{cms_jquery cdn=&#039;true&#039; exclude=&#039;jquery.ui.nestedSortable-1.3.4.js&#039; append=&#039;uploads/NCleanBlue/js/ie6fix.js&#039;}</code></pre>
<h4><em>Outputs</em></h4>
<pre><code><script type=&quot;text/javascript&quot; src=&quot;https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js&quot;></script>
<script type=&quot;text/javascript&quot; src=&quot;https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.14/jquery-ui.min.js&quot;></script>
<script type=&quot;text/javascript&quot; src=&quot;http://localhost/1.10.x/lib/jquery/js/jquery.json-2.2.js&quot;></script>
<script type=&quot;text/javascript&quot; src=&quot;uploads/NCleanBlue/js/ie6fix.js&quot;></script>
</code></pre>

<h3><em>Included Defaults</em></h3>
<ul>
	<li><tt>jQuery</tt><em>(1.6.2)</em> - jquery-1.6.2.min.js</li>
	<li><tt>jQuery UI</tt><em>(1.8.14)</em> - jquery-ui-1.8.14.custom.min.js</li>
	<li><tt>nestedSortable</tt>(1.3.4) - jquery/js/jquery.ui.nestedSortable-1.3.4.js</li>
	<li><tt>jQuery json</tt><em>(2.2)</em> - jquery/js/jquery.json-2.2.js</li>
</ul>
    
<h3>What parameters does it take?</h3>
<ul>
	<li><em>(optional) </em><tt>exclude</tt> - use comma seperated value(CSV) list of scripts you would like to exclude. <code>&#039;jquery.ui.nestedSortable.js,jquery.json-2.2.js&#039;</code></li>
	<li><em>(optional) </em><tt>append</tt> - use comma seperated value(CSV) list of script paths you would like to append. <code>&#039;/uploade/jquery.ui.nestedSortable.js,http://code.jquery.com/jquery-1.6.2.min.js&#039;</code></li>
	<li><em>(optional) </em><tt>cdn</tt> - cdn=&#039;true&#039; will insert jQuery and jQueryUI Frameworks using Google&#039;s Content Delivery Netwok. Default is false.</li>
	<li><em>(optional) </em><tt>ssl</tt> - use to use the ssl_url as the base path.</li>
	<li><em>(optional) </em><tt>custom_root</tt> - use to set any base path wished.<code>custom_root=&#039;http://test.domain.com/&#039;</code> <br/>NOTE: overwrites ssl option and works with the cdn option</li>
	<li><em>(optional)</em> <tt>assign</tt> - Assign the results to the named smarty variable.</li>
	</ul>

';
$lang['admin']['of'] = 'di';
$lang['admin']['first'] = 'Primo';
$lang['admin']['last'] = 'Ultimo';
$lang['admin']['adminspecialgroup'] = 'Attenzione: I membri di questo gruppo avranno automaticamente tutti i permessi';
$lang['admin']['disablesafemodewarning'] = 'Disabilita gli avvertimenti, in amministrazione, sul php safe mode';
$lang['admin']['date_format_string'] = 'Formato Stringa Data';
$lang['admin']['date_format_string_help'] = '<em>strftime</em> stringa formattata del formato data. Cercate su google &#039;strftime&#039;';
$lang['admin']['last_modified_at'] = 'Ultima modifica il';
$lang['admin']['last_modified_by'] = 'Ultima modifica di';
$lang['admin']['read'] = 'Lettura';
$lang['admin']['write'] = 'Scrittura';
$lang['admin']['execute'] = 'Esecuzione';
$lang['admin']['group'] = 'Gruppo';
$lang['admin']['other'] = 'Altro';
$lang['admin']['event_desc_moduleupgraded'] = 'Inviato dopo che un modulo &egrave; aggiornato';
$lang['admin']['event_help_moduleupgraded'] = '<p>Inviato dopo che un modulo viene aggiornato.</p>';
$lang['admin']['event_desc_moduleinstalled'] = 'Inviato dopo che un modulo &egrave; installato';
$lang['admin']['event_help_moduleinstalled'] = '<p>Inviato dopo che un modulo viene installato.</p>';
$lang['admin']['event_desc_moduleuninstalled'] = 'Inviato dopo che un modulo &egrave; disinstallato';
$lang['admin']['event_help_moduleuninstalled'] = '<p>Inviato dopo che un modulo viene disinstallato.</p>';
$lang['admin']['event_desc_edituserdefinedtagpost'] = 'Inviato dopo che un tag utente &egrave; aggiornato';
$lang['admin']['event_help_edituserdefinedtagpost'] = '<p>Inviato dopo che un tag definito dall&#039;utente viene aggiornato.</p>';
$lang['admin']['event_desc_edituserdefinedtagpre'] = 'Inviato prima che un tag utente &egrave; aggiornato';
$lang['admin']['event_help_edituserdefinedtagpre'] = '<p>Inviato prima dell&#039;aggiornamento di un tag definito dall&#039;utente.</p>';
$lang['admin']['event_desc_deleteuserdefinedtagpre'] = 'Inviato prima che un tag utente &egrave; cancellato';
$lang['admin']['event_help_deleteuserdefinedtagpre'] = '<p>Inviato prima dell&#039;eliminazione di un tag definito dall&#039;utente.</p>';
$lang['admin']['event_desc_deleteuserdefinedtagpost'] = 'Inviato dopo che un tag utente &egrave; cancellato';
$lang['admin']['event_help_deleteuserdefinedtagpost'] = '<p>Inviato dopo l&#039;eliminazione di un tag definito dall&#039;utente.</p>';
$lang['admin']['event_desc_adduserdefinedtagpost'] = 'Inviato dopo che un tag utente &egrave; inserito';
$lang['admin']['event_help_adduserdefinedtagpre'] = '<p>Inviato dopo l&#039;inserimento di un tag definito dall&#039;utente.</p>';
$lang['admin']['event_desc_adduserdefinedtagpre'] = 'Inviato prima che un tag utente &egrave; inserito';
$lang['admin']['event_help_adduserdefinedtagpost'] = '<p>Inviato prima dell&#039;inserimento di un tag definito dall&#039;utente.</p>';
$lang['admin']['global_umask'] = 'Maschera di creazione file (umask)';
$lang['admin']['errorcantcreatefile'] = 'Non posso creare un file (problemi di permessi?)';
$lang['admin']['errormoduleversionincompatible'] = 'Modulo incompatibile con questa versione di CMS';
$lang['admin']['errormodulenotloaded'] = 'Errore interno, il modulo non &egrave; stato istanziato';
$lang['admin']['errormodulenotfound'] = 'Errore interno, non posso trovare l&#039;istanza di un modulo';
$lang['admin']['errorinstallfailed'] = 'Installazione modulo fallita';
$lang['admin']['errormodulewontload'] = 'Problema nell&#039;istanziare un modulo disponibile';
$lang['admin']['frontendlang'] = 'Linguaggio di default per il frontend';
$lang['admin']['info_edituser_password'] = 'Modifica questo campo per cambiare la password utente';
$lang['admin']['info_edituser_passwordagain'] = 'Modifica questo campo per cambiare la password utente';
$lang['admin']['originator'] = 'Creatore';
$lang['admin']['module_name'] = 'Nome Modulo';
$lang['admin']['event_name'] = 'Nome Evento';
$lang['admin']['event_description'] = 'Descrizione Evento';
$lang['admin']['error_delete_default_parent'] = 'Non potete cancellare il genitore della pagina predefinita.';
$lang['admin']['jsdisabled'] = 'Spiacente, questa funzione richiede che i Javascript siano abilitati.';
$lang['admin']['order'] = 'Ordina';
$lang['admin']['reorderpages'] = 'Riordina Pagine';
$lang['admin']['reorder'] = 'Riordina';
$lang['admin']['page_reordered'] = 'La Pagina &egrave; stata riordinata.';
$lang['admin']['pages_reordered'] = 'Le Pagine sono state riordinate';
$lang['admin']['sibling_duplicate_order'] = 'Due pagine sorelle non possono avere lo stesso ordine. Le pagine non saranno riordinate.';
$lang['admin']['no_orders_changed'] = 'Avete scelto di riordinare le pagine, ma non avete modificato il loro ordine. Le pagine non sono state riordinate.';
$lang['admin']['order_too_small'] = 'Un ordine di pagina non pu&ograve; essere zero. Le pagine non sono state riordinate.';
$lang['admin']['order_too_large'] = 'Un ordine di pagina non pu&ograve; essere pi&ugrave; grande del numero delle pagine in quel livello. Le pagine non sono state riordinate.';
$lang['admin']['user_tag'] = 'Tag definito da utente';
$lang['admin']['add'] = 'Aggiungere';
$lang['admin']['CSS'] = 'Stile CSS';
$lang['admin']['about'] = 'Informazioni';
$lang['admin']['action'] = 'Azione';
$lang['admin']['actionstatus'] = 'Azione/Stato';
$lang['admin']['active'] = 'Attivo';
$lang['admin']['addcontent'] = 'Aggiungi Nuovo Contenuto';
$lang['admin']['cantremove'] = 'Non Rimovibile';
$lang['admin']['changepermissions'] = 'Cambio Permessi';
$lang['admin']['changepermissionsconfirm'] = 'ATTENZIONE\n\nQuesta azione tenta di assicurare che tutti i file del modulo siano scrivibili dal web server.\nSiete sicuri di voler continuare?';
$lang['admin']['contentadded'] = 'Il contenuto &egrave; stato aggiunto al database con successo.';
$lang['admin']['contentupdated'] = 'Il contenuto &egrave; stato aggiornato con successo.';
$lang['admin']['contentdeleted'] = 'Il contenuto &egrave; stato rimosso dal database con successo.';
$lang['admin']['success'] = 'Successo';
$lang['admin']['addcss'] = 'Aggiungere nuovo Foglio di Stile CSS';
$lang['admin']['addgroup'] = 'Aggiungere nuovo gruppo';
$lang['admin']['additionaleditors'] = 'Editor aggiuntivi';
$lang['admin']['addtemplate'] = 'Aggiungere nuovo Modello';
$lang['admin']['adduser'] = 'Aggiungere nuovo utente';
$lang['admin']['addusertag'] = 'Aggiungere Tag definito da utente';
$lang['admin']['adminaccess'] = 'Accesso al login dell&#039;amministratore';
$lang['admin']['adminlog'] = 'Log di amministrazione';
$lang['admin']['adminlogcleared'] = 'Il Log di Amministrazione &egrave; stato cancellato con successo';
$lang['admin']['adminlogempty'] = 'Il Log di Amministrazione &egrave; vuoto';
$lang['admin']['adminsystemtitle'] = 'Sistema di amministrazione CMS';
$lang['admin']['adminpaneltitle'] = 'Pannello di amministrazione di CMS Made Simple';
$lang['admin']['advanced'] = 'Avanzate';
$lang['admin']['aliasalreadyused'] = 'Alias di Pagina gi&agrave; in uso per altra pagina. Modificate l&#039;Alias&quot; in qualcos&#039;altro.';
$lang['admin']['aliasmustbelettersandnumbers'] = 'Gli alias devono essere composti solo da lettere e numeri';
$lang['admin']['aliasnotaninteger'] = 'Un alias non pu&ograve; essere un numero';
$lang['admin']['allpagesmodified'] = 'Tutte le pagine modificate!';
$lang['admin']['assignments'] = 'Associazioni utenti';
$lang['admin']['associationexists'] = 'Questa associazione esiste gi&agrave;';
$lang['admin']['autoinstallupgrade'] = 'Installa e aggiorna automaticamente';
$lang['admin']['back'] = 'Torna al Menu';
$lang['admin']['backtoplugins'] = 'Torna alla lista dei Plugin';
$lang['admin']['cancel'] = 'Annulla';
$lang['admin']['cantchmodfiles'] = 'Non riesco a modificare i permessi su alcuni file';
$lang['admin']['cantremovefiles'] = 'Problema nella rimozione di File (permessi?)';
$lang['admin']['confirmcancel'] = 'Siete sicuri di voler annullare le modifiche? Cliccate OK per annullare tutte le modifiche. Cliccate Annulla per continuare ad editare.';
$lang['admin']['canceldescription'] = 'Annulla Modifiche';
$lang['admin']['clearadminlog'] = 'Cancella log di amministrazione';
$lang['admin']['code'] = 'Codice';
$lang['admin']['confirmdefault'] = 'Siete sicuri di volere impostare - %s - come pagina predefinita del sito?';
$lang['admin']['confirmdeletedir'] = 'Siete sicuri di volere eliminare questa cartella e tutto il suo contenuto?';
$lang['admin']['content'] = 'Contenuto';
$lang['admin']['contentmanagement'] = 'Gestione Contenuti';
$lang['admin']['contenttype'] = 'Tipo di contenuto';
$lang['admin']['copy'] = 'Copia';
$lang['admin']['copytemplate'] = 'Copia Modello';
$lang['admin']['create'] = 'Crea';
$lang['admin']['createnewfolder'] = 'Crea nuova cartella';
$lang['admin']['cssalreadyused'] = 'Nome Stile CSS gi&agrave; in uso';
$lang['admin']['cssmanagement'] = 'Amministrazione Stili CSS';
$lang['admin']['currentassociations'] = 'Associazioni correnti';
$lang['admin']['currentdirectory'] = 'Cartella corrente';
$lang['admin']['currentgroups'] = 'Gruppi correnti';
$lang['admin']['currentpages'] = 'Pagine correnti';
$lang['admin']['currenttemplates'] = 'Modelli correnti';
$lang['admin']['currentusers'] = 'Utenti correnti';
$lang['admin']['custom404'] = 'Messaggio di errore 404 personalizzato';
$lang['admin']['database'] = 'Database ';
$lang['admin']['databaseprefix'] = 'Prefisso database';
$lang['admin']['databasetype'] = 'Tipo database';
$lang['admin']['date'] = 'Data';
$lang['admin']['default'] = 'Predefinito';
$lang['admin']['delete'] = 'Elimina';
$lang['admin']['deleteconfirm'] = 'Siete sicuri di voler eliminare - %s - ?';
$lang['admin']['deleteassociationconfirm'] = 'Siete sicuri di voler cancellare l&#039;associazione a - %s - ?';
$lang['admin']['deletecss'] = 'Cancella Stile CSS';
$lang['admin']['dependencies'] = 'Dipendenze';
$lang['admin']['description'] = 'Descrizione';
$lang['admin']['directoryexists'] = 'Questa cartella &egrave; gi&agrave; presente.';
$lang['admin']['down'] = 'Gi&ugrave;';
$lang['admin']['edit'] = 'Modifica';
$lang['admin']['editconfiguration'] = 'Modifica configurazione';
$lang['admin']['editcontent'] = 'Modifica contenuto';
$lang['admin']['editcss'] = 'Modifica Stile CSS';
$lang['admin']['editcsssuccess'] = 'Stile CSS aggiornato';
$lang['admin']['editgroup'] = 'Modifica gruppo';
$lang['admin']['editpage'] = 'Modifica pagina';
$lang['admin']['edittemplate'] = 'Modifica Modello';
$lang['admin']['edittemplatesuccess'] = 'Modello aggiornato';
$lang['admin']['edituser'] = 'Modifica utente';
$lang['admin']['editusertag'] = 'Modifica Tag definito da utente';
$lang['admin']['usertagadded'] = 'Il Tag definito da utente &egrave; stato aggiunto con successo.';
$lang['admin']['usertagupdated'] = 'Il Tag definito da utente &egrave; stato aggiornato con successo.';
$lang['admin']['usertagdeleted'] = 'Il Tag definito da utente &egrave; stato rimosso con successo.';
$lang['admin']['email'] = 'Indirizzo email';
$lang['admin']['errorattempteddowngrade'] = 'Installare questo modulo risulter&agrave; obsoleto. Operazione annullata';
$lang['admin']['errorchildcontent'] = 'Il contenuto contiene pagine figlio. Prima dovete rimuoverle.';
$lang['admin']['errorcopyingtemplate'] = 'Errore nella copia del Modello';
$lang['admin']['errorcouldnotparsexml'] = 'Errore nell&#039;analisi del file XML. Assicuratevi di aver effettuato l&#039;upload di un file .xml e non di file .tar.gz o .zip.';
$lang['admin']['errorcreatingassociation'] = 'Errore creando l&#039;associazione';
$lang['admin']['errorcssinuse'] = 'Questo Stile CSS &egrave; ancora in uso da pagine o modelli. Si prega di rimuovere prima queste associazioni.';
$lang['admin']['errordefaultpage'] = 'Non &egrave; permesso cancellare l&#039;attuale pagina predefinita. Per favore prima impostatene un&#039;altra come predefinita.';
$lang['admin']['errordeletingassociation'] = 'Errore nella cancellazione dell&#039;associazione';
$lang['admin']['errordeletingcss'] = 'Errore nella cancellazione dello Stile CSS';
$lang['admin']['errordeletingdirectory'] = 'Non ho potuto cancellare la cartella. Problema con i permessi?';
$lang['admin']['errordeletingfile'] = 'Non ho potuto cancellare il file. Problema con i permessi?';
$lang['admin']['errordirectorynotwritable'] = 'Nessun permesso per scrivere nella cartella. Potrebbe essere causato da permessi o propriet&agrave; del file, oppure dal safe-mode abilitato.';
$lang['admin']['errordtdmismatch'] = 'Versione DTD mancante o incompatibile nel file XML';
$lang['admin']['errorgettingcssname'] = 'Errore nell&#039;ottenere il nome dello Stile CSS';
$lang['admin']['errorgettingtemplatename'] = 'Errore nell&#039;ottenere il nome del Modello';
$lang['admin']['errorincompletexml'] = 'Il file XML &egrave; incompleto o non valido';
$lang['admin']['uploadxmlfile'] = 'Installa il modulo via XML file';
$lang['admin']['cachenotwritable'] = 'La cartella Cache non &egrave; scrivibile. La pulizia della cache non funziona correttamente. Si prega di modificare i permessi della cartella tmp/cache per la lettura/scrittura/esecuzione (chmod 777). Forse potreste anche dovere disabilitare il php safe-mode';
$lang['admin']['error_nomodules'] = 'Nessun modulo installato! Verificate Estensioni -> Moduli';
$lang['admin']['modulesnotwritable'] = 'La cartella dei moduli <em>(and/or the uploads folder)</em> non &egrave; scrivibile, se volete installare i moduli da file XML dovete modificare i permessi della cartella dei moduli/uploads per la piena lettura/scrittura/esecuzione (chmod 777). Potrebbe essere anche un effetto del php safe-mode';
$lang['admin']['noxmlfileuploaded'] = 'Nessun file &egrave; stato caricato. Per installare un modulo via XML dovete scegliere e caricare un file modulo (.xml) dal vostro computer.';
$lang['admin']['errorinsertingcss'] = 'Errore nell&#039;inserimento dello Stile CSS';
$lang['admin']['errorinsertinggroup'] = 'Errore nell&#039;inserimento del gruppo';
$lang['admin']['errorinsertingtag'] = 'Errore nell&#039;inserimento del tag utente';
$lang['admin']['errorinsertingtemplate'] = 'Errore nell&#039;inserimento del Modello';
$lang['admin']['errorinsertinguser'] = 'Errore nell&#039;inserimento dell&#039;utente';
$lang['admin']['errornofilesexported'] = 'Errore esportando i file in xml';
$lang['admin']['errorretrievingcss'] = 'Errore nel recupero dello Stile CSS';
$lang['admin']['errorretrievingtemplate'] = 'Errore nel recupero del Modello';
$lang['admin']['errortemplateinuse'] = 'Questo Modello &egrave; ancora usato da una pagina. Rimuovere la pagina prima del Modello.';
$lang['admin']['errorupdatingcss'] = 'Errore nell&#039;aggiornamento dello Stile CSS';
$lang['admin']['errorupdatinggroup'] = 'Errore nell&#039;aggiornamento del gruppo';
$lang['admin']['errorupdatingpages'] = 'Errore nell&#039;aggiornamento delle pagine';
$lang['admin']['errorupdatingtemplate'] = 'Errore nell&#039;aggiornamento del Modello';
$lang['admin']['errorupdatinguser'] = 'Errore nell&#039;aggiornamento dell&#039;utente';
$lang['admin']['errorupdatingusertag'] = 'Errore nell&#039;aggiornamento del tag utente';
$lang['admin']['erroruserinuse'] = 'Questo utente possiede ancora delle pagine di contenuto. Attribuirne la propriet&agrave; ad un altro utente prima di cancellare.';
$lang['admin']['eventhandlers'] = 'Gestione Eventi';
$lang['admin']['eventhandler'] = 'Gestore Eventi';
$lang['admin']['editeventhandler'] = 'Modifica gestore eventi';
$lang['admin']['eventhandlerdescription'] = 'Associare tag utente con eventi';
$lang['admin']['export'] = 'Esporta';
$lang['admin']['event'] = 'Evento';
$lang['admin']['false'] = 'Falso';
$lang['admin']['settrue'] = 'Imposta a Vero';
$lang['admin']['filecreatedirnodoubledot'] = 'La cartella non pu&ograve; contenere &#039;..&#039;.';
$lang['admin']['filecreatedirnoname'] = 'Non &egrave; permesso creare una cartella senza nome.';
$lang['admin']['filecreatedirnoslash'] = 'La cartella non pu&ograve; contenere &#039;/&#039; or &#039;\&#039;.';
$lang['admin']['filemanagement'] = 'Gestione File';
$lang['admin']['filename'] = 'Nome file';
$lang['admin']['filenotuploaded'] = 'Non &egrave; stato possibile caricare il file. Problema di permessi?';
$lang['admin']['filesize'] = 'Dimensione file';
$lang['admin']['firstname'] = 'Nome';
$lang['admin']['groupmanagement'] = 'Gestione gruppi';
$lang['admin']['grouppermissions'] = 'Permessi del gruppo';
$lang['admin']['handler'] = 'Associazione (tag utente)';
$lang['admin']['headtags'] = 'Tag Intestazione';
$lang['admin']['help'] = 'Aiuto';
$lang['admin']['new_window'] = 'nuova finestra';
$lang['admin']['helpwithsection'] = '%s Aiuto';
$lang['admin']['helpaddtemplate'] = '<p>Un Modello &egrave; ci&ograve; che controlla l&#039;aspetto del contenuto del tuo sito.</p><p>Crea un nuovo layout qui e aggiungi anche il tuo Stile CSS nella sezione Fogli di Stile per controllare l&#039;aspetto dei vari elementi.</p>';
$lang['admin']['helplisttemplate'] = '<p>Questa pagina ti permette di scrivere, cancellare e creare i Modelli.</p><p>Per creare un Modello clicca sul pulsante <u>Aggiungi nuovo Modello</u>.</p><p>Se desiderate che tutte le pagine usino lo stesso Modello cliccate sul link <u>Attribuisci tutto il contenuto</u>.</p><p> Se desiderate duplicare un Modello, cliccate sull&#039;icona <u>Copia</u> e vi verr&agrave; chiesto il nome da dare al nuovo Modello duplicato.</p>';
$lang['admin']['home'] = 'Home ';
$lang['admin']['homepage'] = 'Pagina Iniziale';
$lang['admin']['hostname'] = 'Nome host';
$lang['admin']['idnotvalid'] = 'Questo ID non &egrave; valido';
$lang['admin']['imagemanagement'] = 'Gestione immagini';
$lang['admin']['informationmissing'] = 'Informazione mancante';
$lang['admin']['install'] = 'Installa';
$lang['admin']['invalidcode'] = 'Codice inserito non valido.';
$lang['admin']['illegalcharacters'] = 'Caratteri invalidi nel campo %s.';
$lang['admin']['invalidcode_brace_missing'] = 'Numero non pari di parentesi ';
$lang['admin']['invalidtemplate'] = 'Il Modello non &egrave; valido';
$lang['admin']['itemid'] = 'ID elemento';
$lang['admin']['itemname'] = 'Nome elemento';
$lang['admin']['language'] = 'Lingua';
$lang['admin']['lastname'] = 'Cognome';
$lang['admin']['logout'] = 'Esci';
$lang['admin']['loginprompt'] = 'Inserite un utente con credenziali valide per accedere al pannello di amministrazione.';
$lang['admin']['logintitle'] = 'Login di CMS Made Simple';
$lang['admin']['menutext'] = 'Testo menu';
$lang['admin']['missingparams'] = 'Alcuni parametri sono mancanti o non validi';
$lang['admin']['modifygroupassignments'] = 'Modifica appartenenza a gruppi';
$lang['admin']['moduleabout'] = 'Informazioni sul modulo %s';
$lang['admin']['modulehelp'] = 'Aiuto per il modulo %s';
$lang['admin']['msg_defaultcontent'] = 'Aggiungere codice qui che dovrebbe apparire come contenuto predefinito di tutte le nuove pagine';
$lang['admin']['msg_defaultmetadata'] = 'Aggiungere codice qui che dovrebbe apparire nella sezione metadata tutte le nuove pagine';
$lang['admin']['wikihelp'] = 'Aiuto dalla Communit&agrave;';
$lang['admin']['moduleinstalled'] = 'Modulo gi&agrave; installato';
$lang['admin']['moduleinterface'] = 'Interfaccia %s';
$lang['admin']['modules'] = 'Moduli';
$lang['admin']['move'] = 'Sposta';
$lang['admin']['name'] = 'Nome';
$lang['admin']['needpermissionto'] = 'Avete bisogno dei permessi &#039;%s&#039; per eseguire questa operazione.';
$lang['admin']['needupgrade'] = 'Necessita di aggiornamento';
$lang['admin']['newtemplatename'] = 'Nuovo Nome Modello';
$lang['admin']['next'] = 'Prossimo';
$lang['admin']['noaccessto'] = 'Nessun Accesso a %s';
$lang['admin']['nocss'] = 'Nessuno Stile CSS';
$lang['admin']['noentries'] = 'Nessun elemento';
$lang['admin']['nofieldgiven'] = 'Nessun %s dato!';
$lang['admin']['nofiles'] = 'Nessun file';
$lang['admin']['nopasswordmatch'] = 'Le password non coincidono';
$lang['admin']['norealdirectory'] = 'Nessuna cartella esistente fornita';
$lang['admin']['norealfile'] = 'Nessun file esistente fornito';
$lang['admin']['notinstalled'] = 'Non installato';
$lang['admin']['overwritemodule'] = 'Sovrascrivi moduli esistenti';
$lang['admin']['owner'] = 'Proprietario';
$lang['admin']['pagealias'] = 'Alias della pagina';
$lang['admin']['content_id'] = 'ID Contenuto';
$lang['admin']['pagedefaults'] = 'Predefiniti di pagina';
$lang['admin']['pagedefaultsdescription'] = 'Configura i valori predefiniti per le nuove pagine';
$lang['admin']['parent'] = 'Genitore';
$lang['admin']['password'] = 'Password ';
$lang['admin']['passwordagain'] = 'Password (di nuovo)';
$lang['admin']['permission'] = 'Permesso';
$lang['admin']['permissions'] = 'Permessi';
$lang['admin']['permissionschanged'] = 'Permessi aggiornati.';
$lang['admin']['pluginabout'] = 'Informazioni sul tag %s';
$lang['admin']['pluginhelp'] = 'Aiuto per il tag %s';
$lang['admin']['pluginmanagement'] = 'Gestione Plugin';
$lang['admin']['prefsupdated'] = 'Preferenze aggiornate.';
$lang['admin']['accountupdated'] = 'L&#039;account utente &egrave; stato aggiornato.';
$lang['admin']['preview'] = 'Anteprima';
$lang['admin']['previewdescription'] = 'Anteprima modifiche';
$lang['admin']['previous'] = 'Precedente';
$lang['admin']['remove'] = 'Rimuovi';
$lang['admin']['removeconfirm'] = 'Questa azione rimuover&agrave; permanentemente i file di questo modulo.\nSiete sicuri di voler procedere?';
$lang['admin']['removecssassociation'] = 'Rimuovere associazione a Stile CSS';
$lang['admin']['saveconfig'] = 'Salva configurazione';
$lang['admin']['send'] = 'Invia';
$lang['admin']['setallcontent'] = 'Imposta tutte le pagine';
$lang['admin']['setallcontentconfirm'] = 'Siete sicuri di voler attribuire questo Modello a tutte le pagine?';
$lang['admin']['showinmenu'] = 'Mostra nel menu';
$lang['admin']['use_name'] = 'Nella casella discesa della pagina superiore, mostra il titolo della pagina invece della voce di menu';
$lang['admin']['showsite'] = 'Mostra sito';
$lang['admin']['sitedownmessage'] = 'Messaggio di sito gi&ugrave;';
$lang['admin']['siteprefs'] = 'Preferenze Globali';
$lang['admin']['status'] = 'Stato';
$lang['admin']['stylesheet'] = 'Foglio di Stile';
$lang['admin']['submit'] = 'Invia';
$lang['admin']['submitdescription'] = 'Salva modifiche';
$lang['admin']['tags'] = 'Tag';
$lang['admin']['template'] = 'Modello';
$lang['admin']['templateexists'] = 'Nome del Modello gi&agrave; esistente';
$lang['admin']['templatemanagement'] = 'Gestione Modelli';
$lang['admin']['title'] = 'Titolo';
$lang['admin']['tools'] = 'Strumenti';
$lang['admin']['true'] = 'Vero';
$lang['admin']['setfalse'] = 'Imposta a Falso';
$lang['admin']['type'] = 'Tipo';
$lang['admin']['typenotvalid'] = 'Tipo non valido';
$lang['admin']['uninstall'] = 'Disinstalla';
$lang['admin']['uninstallconfirm'] = 'Siete sicuri di volere disisntallare questo modulo? Nome:';
$lang['admin']['up'] = 'Su';
$lang['admin']['upgrade'] = 'Aggiorna';
$lang['admin']['upgradeconfirm'] = 'Siete sicuri di volerlo aggiornare?';
$lang['admin']['uploadfile'] = 'Carica file';
$lang['admin']['url'] = 'Indirizzo URL';
$lang['admin']['useadvancedcss'] = 'Usa Gestione Stili CSS Avanzata';
$lang['admin']['user'] = 'Utente';
$lang['admin']['userdefinedtags'] = 'Tag definiti dall&#039;utente';
$lang['admin']['usermanagement'] = 'Amministrazione utenti';
$lang['admin']['username'] = 'Nome utente';
$lang['admin']['usernameincorrect'] = 'Nome utente o password non validi';
$lang['admin']['userprefs'] = 'Preferenze utente';
$lang['admin']['useraccount'] = 'Account Utente';
$lang['admin']['lang_settings_legend'] = 'Impostazioni del linguaggio';
$lang['admin']['content_editor_legend'] = 'Impostazioni dell&#039;editor di conenuti';
$lang['admin']['admin_layout_legend'] = 'Impostazioni della visualizzazione di amministrazione';
$lang['admin']['usersassignedtogroup'] = 'Utenti assegnati al gruppo %s';
$lang['admin']['usertagexists'] = 'Esiste gi&agrave; un tag con questo nome. Sceglierne un altro.';
$lang['admin']['usewysiwyg'] = 'Usa un editor WYSIWYG per il contenuto';
$lang['admin']['version'] = 'Versione';
$lang['admin']['view'] = 'Mostra';
$lang['admin']['welcomemsg'] = 'Benvenuto %s';
$lang['admin']['directoryabove'] = 'cartella al livello superiore del corrente';
$lang['admin']['nodefault'] = 'Nessun Predefinito Selezionato';
$lang['admin']['blobexists'] = 'Nome del Blocco di contenuto globale gi&agrave; esistente';
$lang['admin']['blobmanagement'] = 'Gestione Blocco di contenuto globale';
$lang['admin']['errorinsertingblob'] = 'Si &egrave; verificato un errore inserendo il Blocco di contenuto globale';
$lang['admin']['addhtmlblob'] = 'Aggiunge Blocco di contenuto globale';
$lang['admin']['edithtmlblob'] = 'Modifica Blocco di contenuto globale';
$lang['admin']['edithtmlblobsuccess'] = 'Blocco di contenuto globale aggiornato';
$lang['admin']['tagtousegcb'] = 'Tag per usare questo blocco';
$lang['admin']['gcb_wysiwyg'] = 'Abilita il WYSIWYG nel Blocco di contenuto globale';
$lang['admin']['gcb_wysiwyg_help'] = 'Abilita l&#039;editor WYSIWYG per editare Blocchi di contenuto globale';
$lang['admin']['filemanager'] = 'Gestione file';
$lang['admin']['imagemanager'] = 'Gestione immagini';
$lang['admin']['encoding'] = 'Codifica';
$lang['admin']['clearcache'] = 'Pulisci la cache';
$lang['admin']['clear'] = 'Pulisci';
$lang['admin']['cachecleared'] = 'Cache pulita';
$lang['admin']['apply'] = 'Applica';
$lang['admin']['applydescription'] = 'Salva i cambiamenti e continua a modificare';
$lang['admin']['none'] = 'Nessuno';
$lang['admin']['wysiwygtouse'] = 'Seleziona l&#039;editor WYSIWYG da usare';
$lang['admin']['syntaxhighlightertouse'] = 'Seleziona evidenziatore sintassi da usare';
$lang['admin']['hasdependents'] = 'Ha dipendenze';
$lang['admin']['missingdependency'] = 'Dipendenza Mancante';
$lang['admin']['minimumversion'] = 'Versione minima richiesta';
$lang['admin']['minimumversionrequired'] = 'Minima versione CMSMS richiesta';
$lang['admin']['maximumversion'] = 'Versione Massima';
$lang['admin']['maximumversionsupported'] = 'Versione Massima CMSMS supportata';
$lang['admin']['depsformodule'] = 'Dipendenze del modulo %s ';
$lang['admin']['installed'] = 'Installato';
$lang['admin']['author'] = 'Autore';
$lang['admin']['changehistory'] = 'Cambia lo storico';
$lang['admin']['moduleerrormessage'] = 'Messaggio di errore del modulo %s';
$lang['admin']['moduleupgradeerror'] = 'Si &egrave; verificato un errore nell&#039;aggiornamento del modulo.';
$lang['admin']['moduleinstallmessage'] = 'Messaggio di installazione del modulo %s ';
$lang['admin']['moduleuninstallmessage'] = 'Messaggio di disinstallazione del modulo %s ';
$lang['admin']['admintheme'] = 'Tema di amministrazione';
$lang['admin']['addstylesheet'] = 'Aggiunge Stile CSS';
$lang['admin']['editstylesheet'] = 'Modifica Stile CSS';
$lang['admin']['addcssassociation'] = 'Aggiunge associazione Stili CSS';
$lang['admin']['attachstylesheet'] = 'Assegna questo Stile CSS';
$lang['admin']['attachtemplate'] = 'Assegnato a questo Modello';
$lang['admin']['main'] = 'Principale';
$lang['admin']['pages'] = 'Pagine';
$lang['admin']['page'] = 'Pagina';
$lang['admin']['files'] = 'File';
$lang['admin']['layout'] = 'Aspetto';
$lang['admin']['usersgroups'] = 'Utenti e Gruppi';
$lang['admin']['extensions'] = 'Estensioni';
$lang['admin']['preferences'] = 'Preferenze';
$lang['admin']['admin'] = 'Amministrazione Sito';
$lang['admin']['viewsite'] = 'Vedere il sito';
$lang['admin']['templatecss'] = 'Assegna un Modello allo Stile CSS';
$lang['admin']['plugins'] = 'Plugin';
$lang['admin']['movecontent'] = 'Sposta le pagine';
$lang['admin']['module'] = 'Modulo';
$lang['admin']['usertags'] = 'Tag definiti dall&#039;utente';
$lang['admin']['htmlblobs'] = 'Blocchi di contenuto globale';
$lang['admin']['adminhome'] = 'Pagina Iniziale di Amministrazione';
$lang['admin']['liststylesheets'] = 'Fogli di Stile CSS';
$lang['admin']['preferencesdescription'] = 'Qui &egrave; dove impostate le preferenze del sito.';
$lang['admin']['adminlogdescription'] = 'Mostra i log di chi ha modificato qualcosa in amministrazione.';
$lang['admin']['mainmenu'] = 'Menu principale';
$lang['admin']['users'] = 'Utenti';
$lang['admin']['usersdescription'] = 'Qui &egrave; dove gestite gli utenti.';
$lang['admin']['groups'] = 'Gruppi';
$lang['admin']['groupsdescription'] = 'Qui &egrave; dove gestite i gruppi.';
$lang['admin']['groupassignments'] = 'Assegnamenti ai gruppi';
$lang['admin']['groupassignmentdescription'] = 'Qui potete assegnare gli utenti ai gruppi.';
$lang['admin']['groupperms'] = 'Permessi del gruppo';
$lang['admin']['grouppermsdescription'] = 'Imposta permessi e livelli di accesso per i gruppi';
$lang['admin']['pagesdescription'] = 'Qui &egrave; dove aggiungete o modificate le pagine ed altri contenuti.';
$lang['admin']['htmlblobdescription'] = 'I Blocchi di contenuto globale sono pezzi di contenuto che potete posizionare nelle vostre pagine o Modelli.';
$lang['admin']['templates'] = 'Template (modelli)';
$lang['admin']['templatesdescription'] = 'Qui &egrave; dove aggiungete e modificate i Modelli. I Modelli definiscono l&#039;aspetto del vostro sito.';
$lang['admin']['stylesheets'] = 'Stili CSS';
$lang['admin']['stylesheetsdescription'] = 'L&#039;amministrazione degli Stili &egrave; un modo avanzato per gestire gli stili (CSS) separandoli dai Modelli.';
$lang['admin']['filemanagerdescription'] = 'Caricamento e gestione file.';
$lang['admin']['imagemanagerdescription'] = 'Carica/modifica ed elimina immagini.';
$lang['admin']['moduledescription'] = 'I Moduli estendono CMS Made Simple per realizzare ogni tipo di funzioni personalizzate.';
$lang['admin']['tagdescription'] = 'I Tag sono piccoli elementi di funzionalit&agrave; che possono essere aggiunti ai vostri contenuti e/o Modelli.';
$lang['admin']['usertagdescription'] = 'Tag che potete creare e modificare per realizzare operazioni specifiche, direttamente dal vostro browser.';
$lang['admin']['installdirwarning'] = '<em><strong>Attenzione:</strong></em> la cartella di installazione esiste ancora. Per favore rimuovetela completamente.';
$lang['admin']['subitems'] = 'Oggetti Derivati';
$lang['admin']['extensionsdescription'] = 'Moduli, tag ed altri divertimenti assortiti.';
$lang['admin']['usersgroupsdescription'] = 'Oggetti correlati a Utenti e Gruppi.';
$lang['admin']['layoutdescription'] = 'Opzioni di Aspetto del Sito';
$lang['admin']['admindescription'] = 'Funzioni di Amministrazione del Sito.';
$lang['admin']['contentdescription'] = 'Qui &egrave; dove aggiungete e modificate i contenuti.';
$lang['admin']['enablecustom404'] = 'Abilita il messaggio personale di errore 404';
$lang['admin']['enablesitedown'] = 'Abilita il messaggio di Sito Gi&ugrave;';
$lang['admin']['enablewysiwyg'] = 'Abilita Editor WYSIWYG nel messaggio di Sito Gi&ugrave;';
$lang['admin']['bookmarks'] = 'Segnalibri';
$lang['admin']['user_created'] = 'Segnalibri personali';
$lang['admin']['forums'] = 'Forum';
$lang['admin']['wiki'] = 'Wiki ';
$lang['admin']['irc'] = 'IRC ';
$lang['admin']['team'] = 'Gruppo';
$lang['admin']['documentation'] = 'Documentazione';
$lang['admin']['module_help'] = 'Aiuto Modulo';
$lang['admin']['managebookmarks'] = 'Gestione segnalibri';
$lang['admin']['editbookmark'] = 'Modifica segnalibro';
$lang['admin']['addbookmark'] = 'Aggiungi segnalibro';
$lang['admin']['recentpages'] = 'Pagine recenti';
$lang['admin']['groupname'] = 'Nome Gruppo';
$lang['admin']['selectgroup'] = 'Seleziona un gruppo';
$lang['admin']['updateperm'] = 'Aggiorna i permessi';
$lang['admin']['admincallout'] = 'Segnalibri di Amministrazione';
$lang['admin']['showbookmarks'] = 'Mostra i segnalibri di amministrazione';
$lang['admin']['hide_help_links'] = 'Nasconde i link di aiuto';
$lang['admin']['hide_help_links_help'] = 'Selezionare questa casella per disabilitare i collegamenti a wiki e aiuto del modulo nell&#039;intestazione della pagina.';
$lang['admin']['showrecent'] = 'Mostra le pagine utilizzate recentemente';
$lang['admin']['attachtotemplate'] = 'Assegna lo Stile CSS al Modello';
$lang['admin']['attachstylesheets'] = 'Assegna uno Stile CSS';
$lang['admin']['indent'] = 'Formatta la lista delle pagine per enfatizzare la gerarchia';
$lang['admin']['adminindent'] = 'Visualizza contenuto';
$lang['admin']['contract'] = 'Comprimere la sezione';
$lang['admin']['expand'] = 'Espandere la sezione';
$lang['admin']['expandall'] = 'Espandere tutte le sezioni';
$lang['admin']['contractall'] = 'Comprimere tutte le sezioni';
$lang['admin']['menu_bookmarks'] = '[+] ';
$lang['admin']['globalconfig'] = 'Impostazioni Globali';
$lang['admin']['adminpaging'] = 'Numero di elementi di contenuto da mostrare per pagina nella lista pagine';
$lang['admin']['nopaging'] = 'Mostra tutti gli elementi';
$lang['admin']['myprefs'] = 'Mie preferenze';
$lang['admin']['myprefsdescription'] = 'Qui potete personalizzare l&#039;area di amministrazione per lavorare nel modo che preferite.';
$lang['admin']['myaccount'] = 'Mio Account';
$lang['admin']['myaccountdescription'] = 'Qui potete aggiornare i dettagli del vostro account personale.';
$lang['admin']['adminprefs'] = 'Preferenze utente';
$lang['admin']['adminprefsdescription'] = 'Qui &egrave; dove impostate le preferenze specifiche per le pagine di amministrazione.';
$lang['admin']['managebookmarksdescription'] = 'Qui &egrave; dove potete gestire il segnalibri di amministrazione.';
$lang['admin']['options'] = 'Opzioni';
$lang['admin']['langparam'] = 'Parametro per specificare quale linguaggio usare per l&#039;interfaccia. Non tutti i moduli supportano o necessitano di questo parametro.';
$lang['admin']['parameters'] = 'Parametri';
$lang['admin']['mediatype'] = 'Tipo di media';
$lang['admin']['media_query'] = 'Media Query';
$lang['admin']['media_query_description'] = '<strong>Nota:</strong> Quando viene utilizzato Media Query, la selezione del tipo di media verr&agrave; ignorata.<br /> Utilizzate una qualsiasi espressione valida, come da indicazione del <a href="http://www.w3.org/TR/css3-mediaqueries/" rel="external" title="W3C">W3C</a>.';
$lang['admin']['mediatype_'] = 'Nessuno : Avr&agrave; effetto su tutto';
$lang['admin']['mediatype_all'] = 'all : Utilizzabile per tutti i dispositivi.';
$lang['admin']['mediatype_aural'] = 'aural : Inteso per sintetizzatori vocali.';
$lang['admin']['mediatype_braille'] = 'braille : Inteso per dispositivi tattili braille.';
$lang['admin']['mediatype_embossed'] = 'embossed : Inteso per stampanti braille.';
$lang['admin']['mediatype_handheld'] = 'handheld : Inteso per dispositivi palmari';
$lang['admin']['mediatype_print'] = 'print : Inteso per materiale impaginato, opaco e per documenti da visualizzare su schermo in anteprima di stampa.';
$lang['admin']['mediatype_projection'] = 'projection : Inteso per presentazioni, per esempio proiettori o stampa di lucidi.';
$lang['admin']['mediatype_screen'] = 'screen : Inteso principalmente per monitor di computer.';
$lang['admin']['mediatype_tty'] = 'tty : Inteso per media che usano caratteri fissi, come telescriventi e terminali.';
$lang['admin']['mediatype_speech'] = 'speech : inteso per sintetizzatori vocali.';
$lang['admin']['mediatype_tv'] = 'tv : Inteso per dispositivi di tipo televisivo.';
$lang['admin']['assignmentchanged'] = 'Le associazioni del gruppo sono state aggiornate.';
$lang['admin']['stylesheetexists'] = 'Stile CSS gi&agrave; esistente';
$lang['admin']['errorcopyingstylesheet'] = 'Errore nella copia dello Stile';
$lang['admin']['copystylesheet'] = 'Copia lo Stile';
$lang['admin']['newstylesheetname'] = 'Nuovo Nome di Foglio di Stile';
$lang['admin']['target'] = 'Parametro target';
$lang['admin']['xml'] = 'XML ';
$lang['admin']['xmlmodulerepository'] = 'URL del server soap del deposito moduli';
$lang['admin']['metadata'] = 'Metadata ';
$lang['admin']['globalmetadata'] = 'Metadata globali';
$lang['admin']['titleattribute'] = 'Desccrizione (Attributo titolo)';
$lang['admin']['tabindex'] = 'Indice tabulatore';
$lang['admin']['accesskey'] = 'Key accessibilit&agrave;';
$lang['admin']['sitedownwarning'] = '<strong>Attenzione:</strong> Il sito mostra attualmente il messaggio &quot;Sito in aggiornamento&quot;. Rimuovi il file %s per risolvere la situazione.';
$lang['admin']['deletecontent'] = 'Cancella il contenuto';
$lang['admin']['deletepages'] = 'Cancello queste pagine?';
$lang['admin']['selectall'] = '(Seleziona Tutto)';
$lang['admin']['selecteditems'] = 'Termini selezionati';
$lang['admin']['inactive'] = 'Non Attivo';
$lang['admin']['deletetemplates'] = 'Cancella Modelli';
$lang['admin']['templatestodelete'] = 'Questi Modelli saranno cancellati';
$lang['admin']['wontdeletetemplateinuse'] = 'Questi Modelli sono in uso e non saranno cancellati';
$lang['admin']['deletetemplate'] = 'Cancella Stili';
$lang['admin']['stylesheetstodelete'] = 'Questi Fogli di Stile saranno cancellati';
$lang['admin']['sitename'] = 'Nome sito';
$lang['admin']['goto'] = 'Torna a:';
$lang['admin']['siteadmin'] = 'Amministrazione Sito';
$lang['admin']['images'] = 'Gestione immagini';
$lang['admin']['blobs'] = 'Blocchi di contenuto globale';
$lang['admin']['groupmembers'] = 'Assegnazioni gruppi';
$lang['admin']['troubleshooting'] = '(Risoluzione Problemi)';
$lang['admin']['event_desc_loginpost'] = 'Mandato dopo che un utente entra nel pannello di amministrazione';
$lang['admin']['event_desc_logoutpost'] = 'Mandato dopo che un utente esce dal pannello di amministrazione';
$lang['admin']['event_desc_adduserpre'] = 'Mandato prima che un utente sia creato';
$lang['admin']['event_desc_adduserpost'] = 'Mandato dopo che un utente sia creato';
$lang['admin']['event_desc_edituserpre'] = 'Mandato prima che le modifiche all&#039;utente siano salvate';
$lang['admin']['event_desc_edituserpost'] = 'Mandato dopo che le modifiche all&#039;utente siano salvate';
$lang['admin']['event_desc_deleteuserpre'] = 'Mandato prima che un utente sia cancellato dal sistema';
$lang['admin']['event_desc_deleteuserpost'] = 'Mandato dopo che un utente sia cancellato dal sistema';
$lang['admin']['event_desc_addgrouppre'] = 'Mandato prima che un nuovo gruppo sia creato';
$lang['admin']['event_desc_addgrouppost'] = 'Mandato dopo che un nuovo gruppo sia creato';
$lang['admin']['event_desc_changegroupassignpre'] = 'Inviato prima del salvataggio degli assegnamenti di gruppo';
$lang['admin']['event_desc_changegroupassignpost'] = 'Inviato dopo il salvataggio degli assegnamenti di gruppo';
$lang['admin']['event_desc_editgrouppre'] = 'Mandato prima che le modifiche al gruppo siano salvate';
$lang['admin']['event_desc_editgrouppost'] = 'Mandato dopo che le modifiche al gruppo siano salvate';
$lang['admin']['event_desc_deletegrouppre'] = 'Mandato prima che un gruppo sia cancellato dal sistema';
$lang['admin']['event_desc_deletegrouppost'] = 'Mandato dopo che un gruppo sia cancellato dal sistema';
$lang['admin']['event_desc_addstylesheetpre'] = 'Mandato prima che un nuovo Stile sia creato';
$lang['admin']['event_desc_addstylesheetpost'] = 'Mandato dopo che un nuovo Stile sia creato';
$lang['admin']['event_desc_editstylesheetpre'] = 'Mandato prima che le modifiche allo Stile siano salvate';
$lang['admin']['event_desc_editstylesheetpost'] = 'Mandato dopo che le modifiche allo Stile siano salvate';
$lang['admin']['event_desc_deletestylesheetpre'] = 'Mandato prima che uno Stile &egrave; cancellato dal sistema';
$lang['admin']['event_desc_deletestylesheetpost'] = 'Mandato dopo che uno Stile &egrave; cancellato dal sistema';
$lang['admin']['event_desc_addtemplatepre'] = 'Mandato prima che un nuovo Modello sia creato';
$lang['admin']['event_desc_addtemplatepost'] = 'Mandato dopo che un nuovo gruppo sia creato';
$lang['admin']['event_desc_edittemplatepre'] = 'Mandato prima che le modifiche al Modello siano salvate';
$lang['admin']['event_desc_edittemplatepost'] = 'Mandato dopo che le modifiche al Modello siano salvate';
$lang['admin']['event_desc_deletetemplatepre'] = 'Mandato prima che un Modello &egrave; cancellato dal sistema';
$lang['admin']['event_desc_deletetemplatepost'] = 'Mandato dopo che un Modello &egrave; cancellato dal sistema';
$lang['admin']['event_desc_templateprecompile'] = 'Mandato prima che un nuovo Modello sia processato da smarty';
$lang['admin']['event_desc_templatepostcompile'] = 'Mandato dopo che un nuovo Modello sia processato da smarty';
$lang['admin']['event_desc_addglobalcontentpre'] = 'Mandato prima che un nuovo Blocco globale sia creato';
$lang['admin']['event_desc_addglobalcontentpost'] = 'Mandato dopo che un nuovo Blocco globale sia creato';
$lang['admin']['event_desc_editglobalcontentpre'] = 'Mandato prima che le modifiche al Blocco globale siano salvate';
$lang['admin']['event_desc_editglobalcontentpost'] = 'Mandato dopo che le modifiche al Blocco globale siano salvate';
$lang['admin']['event_desc_deleteglobalcontentpre'] = 'Mandato prima che un Blocco globale &egrave; cancellato dal sistema';
$lang['admin']['event_desc_deleteglobalcontentpost'] = 'Mandato dopo che un Blocco globale &egrave; cancellato dal sistema';
$lang['admin']['event_desc_globalcontentprecompile'] = 'Mandato prima che un nuovo Blocco globale sia processato da smarty';
$lang['admin']['event_desc_globalcontentpostcompile'] = 'Mandato dopo che un nuovo Blocco globale sia processato da smarty';
$lang['admin']['event_desc_contenteditpre'] = 'Mandato prima che le modifiche siano salvate';
$lang['admin']['event_desc_contenteditpost'] = 'Mandato dopo che le modifiche siano salvate';
$lang['admin']['event_desc_contentdeletepre'] = 'Mandato prima che il contenuto &egrave; cancellato dal sistema';
$lang['admin']['event_desc_contentdeletepost'] = 'Mandato dopo che il contenuto &egrave; cancellato dal sistema';
$lang['admin']['event_desc_contentstylesheet'] = 'Mandato prima che lo Stile sia mandato al browser';
$lang['admin']['event_desc_contentprecompile'] = 'Mandato prima che il contenuto sia processato da smarty';
$lang['admin']['event_desc_contentpostcompile'] = 'Mandato dopo che il contenuto sia processato da smarty';
$lang['admin']['event_desc_contentpostrender'] = 'Mandato prima che l&#039;html sia mandato al browser';
$lang['admin']['event_desc_smartyprecompile'] = 'Mandato prima che il contenuto destinato per smarty sia processato';
$lang['admin']['event_desc_smartypostcompile'] = 'Mandato dopo che il contenuto destinato per smarty sia processato';
$lang['admin']['event_help_loginpost'] = '<p>Inviato dopo che un utente ha fatto l&#039;accesso al pannello di amministrazione.</p>
<h4>Parametri</h4>
<ul>
<li>&#039;user&#039; - Riferimento all&#039;oggetto utente interessato.</li>
</ul>
';
$lang['admin']['event_help_logoutpost'] = '<p>Inviato dopo che un utente si &egrave; disconnesso dal pannello di amministrazione.</p>
<h4>Parametri</h4>
<ul>
<li>&#039;user&#039; - Riferimento all&#039;oggetto utente interessato.</li>
</ul>
';
$lang['admin']['event_help_adduserpre'] = '<p>Inviato precedentemente alla creazione di un nuovo utente.</p>
<h4>Parametri</h4>
<ul>
<li>&#039;user&#039; - Riferimento all&#039;oggetto utente interessato.</li>
</ul>
';
$lang['admin']['event_help_adduserpost'] = '<p>Inviato dopo la creazione di un nuovo utente.</p>
<h4>Parametri</h4>
<ul>
<li>&#039;user&#039; - Riferimento all&#039;oggetto utente interessato.</li>
</ul>
';
$lang['admin']['event_help_edituserpre'] = '<p>Inviato prima che le modifiche ad un utente vengano salvate.</p>
<h4>Parametri</h4>
<ul>
<li>&#039;user&#039; - Riferimento all&#039;oggetto utente interessato.</li>
</ul>
';
$lang['admin']['event_help_edituserpost'] = '<p>Inviato dopo che le modifiche ad un utente siano state salvate.</p>
<h4>Parametri</h4>
<ul>
<li>&#039;user&#039; - Riferimento all&#039;oggetto utente interessato.</li>
</ul>
';
$lang['admin']['event_help_deleteuserpre'] = '<p>Inviato prima della cancellazione di un utente dal sistema.</p>
<h4>Parametri</h4>
<ul>
<li>&#039;user&#039; - Riferimento all&#039;oggetto utente interessato.</li>
</ul>
';
$lang['admin']['event_help_deleteuserpost'] = '<p>Inviato dopo la cancellazione di un utente dal sistema.</p>
<h4>Parametri</h4>
<ul>
<li>&#039;user&#039; - Riferimento all&#039;oggetto utente interessato.</li>
</ul>
';
$lang['admin']['event_help_addgrouppre'] = '<p>Inviato prima della creazione di un nuovo gruppo.</p>
<h4>Parametri</h4>
<ul>
<li>&#039;group&#039; - Riferimento all&#039;oggetto gruppo interessato.</li>
</ul>
';
$lang['admin']['event_help_addgrouppost'] = '<p>Inviato dopo la creazione di un nuovo gruppo.</p>
<h4>Parametri</h4>
<ul>
<li>&#039;group&#039; - Riferimento all&#039;oggetto gruppo interessato.</li>
</ul>
';
$lang['admin']['event_help_changegroupassignpre'] = '<p>Inviato prima del salvataggio degli assegnamenti di gruppo.</p>
<h4>Parametri></h4>
<ul>
<li>&#039;group&#039; - Riferimento all&#039;oggetto gruppo.</li>
<li>&#039;users&#039; - Array di riferimenti agli oggetti utente appartenenti al gruppo.</li>
';
$lang['admin']['event_help_changegroupassignpost'] = '<p>Inviato dopo il salvataggio degli assegnamenti di gruppo.</p>
<h4>Parametri></h4>
<ul>
<li>&#039;group&#039; - Riferimenti all&#039;oggetto gruppo interessato.</li>
<li>&#039;users&#039; - Array di riferimenti agli oggetti utente che ora appartengono al gruppo interessato.</li>
';
$lang['admin']['event_help_editgrouppre'] = '<p>Inviato prima che le modifiche ad un gruppo vengano salvate.</p>
<h4>Parametri</h4>
<ul>
<li>&#039;group&#039; - Riferimento all&#039;oggetto gruppo interessato.</li>
</ul>
';
$lang['admin']['event_help_editgrouppost'] = '<p>Inviato dopo il salvataggio delle modifiche ad un gruppo.</p>
<h4>Parametri</h4>
<ul>
<li>&#039;group&#039; - Riferimento all&#039;oggetto gruppo interessato.</li>
</ul>
';
$lang['admin']['event_help_deletegrouppre'] = '<p>Inviato prima della cancellazione di un gruppo dal sistema.</p>
<h4>Parametri</h4>
<ul>
<li>&#039;group&#039; - Riferimento all&#039;oggetto gruppo interessato.</li>
</ul>
';
$lang['admin']['event_help_deletegrouppost'] = '<p>Inviato dopo la cancellazione di un gruppo dal sistema.</p>
<h4>Parametri</h4>
<ul>
<li>&#039;group&#039; - Riferimento all&#039;oggetto gruppo interessato.</li>
</ul>
';
$lang['admin']['event_help_addstylesheetpre'] = '<p>Inviato prima della creazione di un nuovo foglio di stile.</p>
<h4>Parametri</h4>
<ul>
<li>&#039;stylesheet&#039; - Riferimento all&#039;oggetto foglio di stile interessato.</li>
</ul>
';
$lang['admin']['event_help_addstylesheetpost'] = '<p>Inviato dopo la creazione di un nuovo foglio di stile.</p>
<h4>Parametri</h4>
<ul>
<li>&#039;stylesheet&#039; - Riferimento all&#039;oggetto foglio di stile interessato..</li>
</ul>
';
$lang['admin']['event_help_editstylesheetpre'] = '<p>Inviato prima del salvataggio di modifiche ad un foglio di stile.</p>
<h4>Parametri</h4>
<ul>
<li>&#039;stylesheet&#039; - Riferimento all&#039;oggetto foglio di stile interessato.</li>
</ul>
';
$lang['admin']['event_help_editstylesheetpost'] = '<p>Inviato dopo il salvataggio di modifiche ad un foglio di stile.</p>
<h4>Parametri</h4>
<ul>
<li>&#039;stylesheet&#039; - Riferimento all&#039;oggetto foglio di stile interessato.</li>
</ul>
';
$lang['admin']['event_help_deletestylesheetpre'] = '<p>Inviato prima della cancellazione di un foglio di stile dal sistema.</p>
<h4>Parametri</h4>
<ul>
<li>&#039;stylesheet&#039; - Riferimento all&#039;oggetto foglio di stile interessato.</li>
</ul>
';
$lang['admin']['event_help_deletestylesheetpost'] = '<p>Inviato dopo la cancellazione di un foglio di stile dal sistema.</p>
<h4>Parametri</h4>
<ul>
<li>&#039;stylesheet&#039; - Riferimento all&#039;oggetto foglio di stile interessato.</li>
</ul>
';
$lang['admin']['event_help_addtemplatepre'] = '<p>Inviato precedentemente alla creazione di un template.</p>
<h4>Parametri</h4>
<ul>
<li>&#039;template&#039; - Riferimento all&#039;oggetto template interessato.</li>
</ul>
';
$lang['admin']['event_help_addtemplatepost'] = '<p>Inviato dopo la creazione di un nuovo template.</p>
<h4>Parametri</h4>
<ul>
<li>&#039;template&#039; - Riferimento all&#039;oggetto template interessato.</li>
</ul>
';
$lang['admin']['event_help_edittemplatepre'] = '<p>Inviato prima del salvataggio di modifiche ad un template.</p>
<h4>Parametri</h4>
<ul>
<li>&#039;template&#039; - Riferimento all&#039;oggetto template interessato.</li>
</ul>
';
$lang['admin']['event_help_edittemplatepost'] = '<p>Inviato dopo il salvataggio di modifiche ad un template.</p>
<h4>Parametri</h4>
<ul>
<li>&#039;template&#039; - Riferimento all&#039;oggetto template interessato.</li>
</ul>
';
$lang['admin']['event_help_deletetemplatepre'] = '<p>Inviato prima della cancellazione di un template dal sistema.</p>
<h4>Parametri</h4>
<ul>
<li>&#039;template&#039; - Riferimento all&#039;oggetto template interessato.</li>
</ul>
';
$lang['admin']['event_help_deletetemplatepost'] = '<p>Inviato dopo la cancellazione di un template dal sistema.</p>
<h4>Parametri</h4>
<ul>
<li>&#039;template&#039; - Riferimento all&#039;oggetto template interessato.</li>
</ul>
';
$lang['admin']['event_help_templateprecompile'] = '<p>Inviato prima che un template venga inviato a smarty per essere processato.</p>
<h4>Parametri</h4>
<ul>
<li>&#039;template&#039; - Riferimento al testo di template interessato.</li>
</ul>
';
$lang['admin']['event_help_templatepostcompile'] = '<p>Inviato dopo che un template &egrave; stato inviato a smarty per essere processato.</p>
<h4>Parametri</h4>
<ul>
<li>&#039;template&#039; - Riferimento al testo di template interessato</li>
</ul>
';
$lang['admin']['event_help_addglobalcontentpre'] = '<p>Inviato prima della creazione di un nuovo blocco di contenuto globale.</p>
<h4>Parametri</h4>
<ul>
<li>&#039;global_content&#039; - Riferimento all&#039;oggetto blocco di contenuto globale interessato.</li>
</ul>
';
$lang['admin']['event_help_addglobalcontentpost'] = '<p>Inviato dopo la creazione di un nuovo blocco di contenuto globale.</p>
<h4>Parametri</h4>
<ul>
<li>&#039;global_content&#039; - Riferimento all&#039;oggetto blocco di contenuto globale interessato.</li>
</ul>
';
$lang['admin']['event_help_editglobalcontentpre'] = '<p>Inviato prima del salvataggio di modifiche ad un blocco di contenuto globale.</p>
<h4>Parametri</h4>
<ul>
<li>&#039;global_content&#039; - Riferimento all&#039;oggetto blocco di contenuto globale interessato.</li>
</ul>
';
$lang['admin']['event_help_editglobalcontentpost'] = '<p>Inviato dopo il salvataggio di modifiche ad un blocco di contenuto globale.</p>
<h4>Parametri</h4>
<ul>
<li>&#039;global_content&#039; - Riferimento all&#039;oggetto blocco di contenuto globale interessato.</li>
</ul>
';
$lang['admin']['event_help_deleteglobalcontentpre'] = '<p>Inviato prima della cancellazione di un blocco di contenuto globale dal sistema.</p>
<h4>Parametri</h4>
<ul>
<li>&#039;global_content&#039; - Riferimento all&#039;oggetto blocco di contenuto globale interessato.</li>
</ul>
';
$lang['admin']['event_help_deleteglobalcontentpost'] = '<p>Inviato dopo la cancellazione di un blocco di contenuto globale dal sistema.</p>
<h4>Parametri</h4>
<ul>
<li>&#039;global_content&#039; - Riferimento all&#039;oggetto blocco di contenuto globale interessato.</li>
</ul>
';
$lang['admin']['event_help_globalcontentprecompile'] = '<p>Inviato prima che un blocco di contenuto globale venga inviato a smarty per essere processato.</p>
<h4>Parametri</h4>
<ul>
<li>&#039;global_content&#039; - Riferimento al testo del blocco di contenuto globale interessato.</li>
</ul>
';
$lang['admin']['event_help_globalcontentpostcompile'] = '<p>Inviato dopo che un blocco di contenuto globale &egrave; stato inviato a smarty per essere processato.</p>
<h4>Parametri</h4>
<ul>
<li>&#039;global_content&#039; - Riferimento al testo del blocco di contenuto globale interessato.</li>
</ul>
';
$lang['admin']['event_help_contenteditpre'] = '<p>Inviato prima che le modifiche al contenuto vengano salvate.</p>
<h4>Parametri</h4>
<ul>
<li>&#039;global_content&#039; - Riferimento all&#039;oggetto contenuto interessato.</li>
</ul>
';
$lang['admin']['event_help_contenteditpost'] = '<p>Inviato dopo che le modifiche al contenuto sono state salvate.</p>
<h4>Parametri</h4>
<ul>
<li>&#039;content&#039; - Riferimento all&#039;oggetto contenuto interessato.</li>
</ul>
';
$lang['admin']['event_help_contentdeletepre'] = '<p>Inviato prima della cancellazione del contenuto dal sistema.</p>
<h4>Parametri</h4>
<ul>
<li>&#039;content&#039; - Riferimento all&#039;oggetto contenuto interessato.</li>
</ul>
';
$lang['admin']['event_help_contentdeletepost'] = '<p>Inviato dopo la cancellazione del contenuto dal sistema.</p>
<h4>Parametri</h4>
<ul>
<li>&#039;content&#039; - Riferimento all&#039;oggetto contenuto interessato.</li>
</ul>
';
$lang['admin']['event_help_contentstylesheet'] = '<p>Inviato prima che il foglio di stile venga inviato al browser.</p>
<h4>Parametri</h4>
<ul>
<li>&#039;content&#039; - Riferimento al testo del foglio di stile interessato.</li>
</ul>
';
$lang['admin']['event_help_contentprecompile'] = '<p>Inviato prima che il contenuto venga inviato a smarty per essere processato.</p>
<h4>Parametri</h4>
<ul>
<li>&#039;content&#039; - Riferimento al testo di contenuto interessato.</li>
</ul>
';
$lang['admin']['event_help_contentpostcompile'] = '<p>Inviato dopo che il contenuto &egrave; stato processato da smarty.</p>
<h4>Parametri</h4>
<ul>
<li>&#039;content&#039; - Riferimento al testo di contenuto interessato.</li>
</ul>
';
$lang['admin']['event_help_contentpostrender'] = '<p>Inviato prima che l&#039;html combinato venga inviato al browser.</p>
<h4>Parametri</h4>
<ul>
<li>&#039;content&#039; - Riferimento al testo html.</li>
</ul>
';
$lang['admin']['event_help_smartyprecompile'] = '<p>Inviato prima che qualsiasi contenuto destinato a smarty venga inviato per essere processato.</p>
<h4>Parametri</h4>
<ul>
<li>&#039;content&#039; - Riferimento al testo interessato.</li>
</ul>
';
$lang['admin']['event_help_smartypostcompile'] = '<p>Inviato dopo che qualsiasi contenuto destinato a smarty &egrave; stato processato.</p>
<h4>Parametri</h4>
<ul>
<li>&#039;content&#039; - Riferimento al testo interessato.</li>
</ul>
';
$lang['admin']['filterbymodule'] = 'Filtra per Modulo';
$lang['admin']['showall'] = 'Mostra tutto';
$lang['admin']['core'] = 'Core ';
$lang['admin']['defaultpagecontent'] = 'Contenuto Pagina Predefinito';
$lang['admin']['file_url'] = 'Collega a File (invece di un URL)';
$lang['admin']['no_file_url'] = 'Nessuno (Usa l&#039;URL sopra)';
$lang['admin']['defaultparentpage'] = 'Pagina Genitore Predefinita';
$lang['admin']['error_udt_name_whitespace'] = 'Errore: i Tag definiti dall&#039;Utente non possono avere spazi nel loro nome';
$lang['admin']['warning_safe_mode'] = '<strong><em>ATTENZIONE:</em></strong> PHP Safe mode &egrave; abilitato. Ci&ograve; provocher&agrave; difficolt&agrave; con i file caricati tramite l&#039;interfaccia del browser web, incluse immagini, modelli e pacchetti modulo in XML. E&#039; consigliabile contattare il vostro amministratore di sito per valutare la possibilit&agrave; di disattivare la modalit&agrave; safe mode.';
$lang['admin']['test'] = 'Test ';
$lang['admin']['results'] = 'Risultati';
$lang['admin']['untested'] = 'Non testato';
$lang['admin']['unknown'] = 'Sconosciuto';
$lang['admin']['download'] = 'Scarica';
$lang['admin']['frontendwysiwygtouse'] = 'Editor wysiwyg per il frontend';
$lang['admin']['backendwysiwygtouse'] = 'Editor wysiwyg predefinito per l&#039;amministrazione (per nuovi account utente)';
$lang['admin']['all_groups'] = 'Tutti i Gruppi';
$lang['admin']['error_type'] = 'Tipo Errore';
$lang['admin']['contenttype_errorpage'] = 'Pagina Errore';
$lang['admin']['errorpagealreadyinuse'] = 'Codice Errore gi&agrave; in uso';
$lang['admin']['404description'] = 'Pagina non trovata';
$lang['admin']['usernotfound'] = 'Utente non trovato';
$lang['admin']['passwordchange'] = 'Si prega di inserire la nuova password';
$lang['admin']['recoveryemailsent'] = 'Email spedita all&#039;indirizzo registrato. Si prega di controllare la Vostra posta per ulteriori istruzioni.';
$lang['admin']['errorsendingemail'] = 'C&#039;&egrave; stato un errore nella spedizione della mail. Si prega di contattare il Vostro amministratore.';
$lang['admin']['passwordchangedlogin'] = 'Password cambiata. Si prega di entrare usando le nuove credenziali.';
$lang['admin']['nopasswordforrecovery'] = 'Nessun indirizzo email &egrave; stato impostato per questo utente. Il recupero della password non &egrave; possibile. Si prega di contattare il Vostro amministratore.';
$lang['admin']['lostpw'] = 'Password dimenticata?';
$lang['admin']['lostpwemailsubject'] = 'Recupero password [%s]';
$lang['admin']['lostpwemail'] = 'Voi state ricevendo questa email perch&egrave; &egrave; stata richiesto un cambio password associata (%s) con questo utente (%s). Se Volete resettare la password di questo utente seguite il link sottostante o effettuate un copia/incolla di tutto l&#039;indirizzo sul Vostro browser:
%s

Se pensate che questo non sia corretto o sia un errore, semplicemente ignorate questa mail e nessun cambiamento verr&agrave; effettuato.';
$lang['admin']['utma'] = '156861353.1022273145.1370871476.1370871476.1370873767.2';
$lang['admin']['utmz'] = '156861353.1370871476.1.1.utmccn=(direct)|utmcsr=(direct)|utmcmd=(none)';
$lang['admin']['utmc'] = '156861353';
$lang['admin']['utmb'] = '156861353';
?>