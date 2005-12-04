<?php
$lang['addarticle'] = 'Aggiungi Articolo';
$lang['addcategory'] = 'Aggiungi Categoria';
$lang['addnewsitem'] = 'Aggiungi News';
$lang['allcategories'] = 'Tutte le Categorie';
$lang['allentries'] = 'Tutte le News';
$lang['areyousure'] = 'Sei sicuro di volerlo cancellare?';
$lang['articles'] = 'Articoli';
$lang['autodiscoverylink'] = 'Auto-Rilevazione dell\'URL (vuoto per default)';
$lang['cancel'] = 'Annulla';
$lang['categories'] = 'Categorie';
$lang['category'] = 'Categoria';
$lang['content'] = 'Contenuto';
$lang['dateformat'] = '%s non &egrave; nel formato valido yyyy-mm-dd hh:mm:ss';
$lang['delete'] = 'Cancella';
$lang['description'] = 'Aggiungi, modifica e rimuovi News';
$lang['detailtemplate'] = 'Dettaglio Template';
$lang['displaytemplate'] = 'Visualizza Template';
$lang['edit'] = 'Modifica';
$lang['enddate'] = 'Fine Data';
$lang['endrequiresstart'] = 'Inserire una data di fine richiede anche una data di inizio';
$lang['entries'] = '%s News';
$lang['expiry'] = 'Scade';
$lang['filter'] = 'Filtra';
$lang['help'] = <<<EOF
	<h3>Che cosa fa?</h3>
	<p>News &egrave; un modulo per visualizzare eventi sulla tua pagina, simile allo stile blog, solo con pi&ugrave; funzionalit&agrave;!. Quando il module &egrave; installato, in amministrazione una pagina News &egrave; aggiunta in fondo al menu che vi permette di selezionare o aggiungere una categoria. Quando una categoria &egrave; creata o selezionata, sar&agrave; visualizzata una lista di news per quella categoria. Da qui, potete aggiungere, modificare o cancellare news per quella categoria.</p>
	<h3>Sicurezza</h3>
	<p>L'utente deve appartenere a un gruppo con il permesso 'Modifica News' per aggiungere, modificare, o cancellare News.</p>
	<h3>Come usarlo?</h3>
	<p>Il modo pi&ugrave; semplice di usarlo &egrave; congiuntamente con il tag cms_module. Inseririsci il modulo dove vuoi nel vostro template o pagina, questo visualizzer&agrave; le news. Esempio di sintassi: <code>{cms_module module="news" number="5" category="beer"}</code></p>
EOF;
$lang['helpcategory'] = 'Visualizza solo le news di quella categoria ed i suoi discendenti. Lasciando vuoto, mostrer&agrave; tutte le categorie.';
$lang['helpdateformat'] = 'Formato per visualizzare la data di pubblicazione degli articoli. Questa &egrave; basata sulla funzione <a href="http://php.net/strftime" target="_blank">strftime</a> e pu&ograve; essere usata nel vostro template con $entry->formatpostdate.';
$lang['helpdetailtemplate'] = 'Usa un template separato per visualizzare il dettaglio dell\'articolo. Deve essere in modules/News/templates.';
$lang['helpmakerssbutton'] = 'Fa un bottone per linkare ad un RSS feed di un elemento News.';
$lang['helpmoretext'] = 'Testo da visualizzare alla fine di una news se supera la lunghezza del sommario. Defaults come "more..."';
$lang['helpnumber'] = 'Numero massimo di news da visualizzare =- Lasciando vuoto mostrer&agrave; tutte le news.';
$lang['helpsortasc'] = 'Ordina le news in modo ascendente per data piuttosto che discendente.';
$lang['helpsortby'] = 'Campo da ordinare per. Opzioni sono: "news_date", "summary", "news_data", "news_category", "news_title". Defaults to "news_date".';
$lang['helpsummarytemplate'] = 'Usa un template separato per visualizzare il sommario dell\'articolo. Deve essere in modules/News/templates.';
$lang['more'] = 'Altre';
$lang['moretext'] = 'Altro Testo';
$lang['name'] = 'Nome';
$lang['needpermission'] = 'Necessiti del permesso \'%s\' per poter usufruire questa funzione.';
$lang['newcategory'] = 'Nuova Categoria';
$lang['news'] = 'News';
$lang['nocategorygiven'] = 'Categoria non specificata';
$lang['nocontentgiven'] = 'Contenuto non inserito';
$lang['noitemsfound'] = '<strong>Nessuna</strong> news trovata per la categoria: %s';
$lang['nopostdategiven'] = 'Nessuna data di pubblicazione &egrave; inserita';
$lang['note'] = '<em>Nota:</em> La data deve essere nel formato: \'yyyy-mm-dd hh:mm:ss\'.';
$lang['notitlegiven'] = 'Titolo non dato';
$lang['numbertodisplay'] = 'Quantit&agrave; da visualizzare (vuoto mostra tutte le news)';
$lang['options'] = 'Opzioni';
$lang['postdate'] = 'Data di pubblicazione';
$lang['postinstall'] = 'Assicurati di impostare il permesso "Modify News" sugli utenti che dovranno amministrare le News.';
$lang['print'] = 'Stampa';
$lang['rsstemplate'] = 'RSS Template';
$lang['selectcategory'] = 'Seleziona la categoria';
$lang['showautodiscovery'] = 'Mostra i collegamenti di Auto-Rilevazione';
$lang['showchildcategories'] = 'Mostra le Categorie discendenti';
$lang['sortascending'] = 'Ordine crescente';
$lang['startdate'] = 'Data inizio';
$lang['startrequiresend'] = 'Inserire una data di inizio richiede anche una data di fine';
$lang['status'] = 'Stato';
$lang['submit'] = 'Inserisci';
$lang['summary'] = 'Sommario';
$lang['summarytemplate'] = 'Sommario Template';
$lang['title'] = 'Titolo';
$lang['useexpiration'] = 'Usa la data di scadenza';
?>
