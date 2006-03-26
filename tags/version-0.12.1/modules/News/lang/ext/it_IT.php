<?php
$lang['author'] = 'Autore';
$lang['sysdefaults'] = 'Riporta nella configurazione predefinita';
$lang['restoretodefaultsmsg'] = 'Questa operazione riporter&agrave; il contenuto del Modello a quello predefinito. Sei sicuro che vuoi procedere?';
$lang['addarticle'] = 'Aggiungi articolo';
$lang['addcategory'] = 'Aggiungi categoria';
$lang['addnewsitem'] = 'Aggiungi news';
$lang['allcategories'] = 'Tutte le categorie';
$lang['allentries'] = 'Tutte le news';
$lang['areyousure'] = 'Sei sicuro di volerlo cancellare?';
$lang['articles'] = 'Articoli';
$lang['cancel'] = 'Annulla';
$lang['category'] = 'Categoria';
$lang['categories'] = 'Categorie';
$lang['changelog'] = '<ul>
<li>
<p>Version: 1.0</p>
<p>This module is a hacked and extended version of <em>Ted Kulp&#039;s</em> News module.  I simply added another field to the database, and some more code to make that field worl.... I also re-cleaned the code a bit, so it was a little easier to read, other than that, it&#039;s Ted&#039;s code.</p>
</li> 
<li> 
<p>Version: 1.1</p> 
<p>Added the ability to set an automatic expiry date from a pulldown, moved the category selection, and on the main page you now filter the entries you want to see.</p> 
</li> 
<li> 
<p>Version: 1.2</p> 
<p>Added summary, no_anchor and length parameters.  In summary mode links are made to the real articles, tags are stripped, and links are insreted to the news page and the specific news item.</p> 
</li> 
<li> 
<p>Version: 1.3</p> 
<p>Minor cosmetic changes</p> 
</li> 
<li> 
<p>Version 1.5</p> 
<p>Merged into the trunk News module</p> 
</li> 
<li> 
<p>Version 1.6</p> 
<p>Added pagination, and moved the add button to the top (calguy)</p>
</li>
<li>
<p>Version 2.0</p>
<p>Re-written to use smarty templates, and several other significant improvements</p>
</li>
<li>
<p>Version 2.0.1</p>
<p>Minor tweaks to the RSS output to allow it to work correctly on different browsers, and to support non alpha numeric characters in the description.</p> 
</li> 
<li>
<p>Version 2.0.2</p>
<p>- Add a &quot;start&quot; parameter to specify a start offset for news items</p>
<p>- The template tabs now have a &quot;reset to default&quot; button on them</p>
<p>- Start menu item is now required, but end date is optional when useexpirydate is on, 
<p>- Change the permissions model significantly, The &quot;Modify News&quot; permission is only for articles and categories. &quot;Modify Templates&quot; permission is required to edit the templates, and &quot;Modify Site Preferences&quot; is required to edit the options.</p> 
</li>
<li>
<p>Version 2.0.3</p>
<p>- Added the ability to track the original author of an article</p>
</li>
</ul> 
';
$lang['content'] = 'Contenuto';
$lang['dateformat'] = '%s non &egrave; nel formato valido yyyy-mm-dd hh:mm:ss';
$lang['delete'] = 'Cancella';
$lang['description'] = 'Aggiungi, modifica e rimuovi News';
$lang['detailtemplate'] = 'Dettaglio Modello';
$lang['displaytemplate'] = 'Visualizza Modello';
$lang['edit'] = 'Modifica';
$lang['enddate'] = 'Fine data';
$lang['endrequiresstart'] = 'Inserire una data di fine richiede anche una data di inizio';
$lang['entries'] = '%s News';
$lang['status'] = 'Stato';
$lang['expiry'] = 'Scade';
$lang['filter'] = 'Filtra';
$lang['more'] = 'Altre';
$lang['moretext'] = 'Altro testo';
$lang['name'] = 'Nome';
$lang['news'] = 'News';
$lang['news_return'] = 'Ritorna';
$lang['newcategory'] = 'Nuova categoria';
$lang['needpermission'] = 'Necessiti del permesso &#039;%s&#039; per poter usufruire questa funzione.';
$lang['nocategorygiven'] = 'Categoria non specificata';
$lang['nocontentgiven'] = 'Contenuto non inserito';
$lang['noitemsfound'] = '<strong>Nessuna</strong> news trovata per la categoria: %s';
$lang['nopostdategiven'] = 'Nessuna data di pubblicazione &egrave; inserita';
$lang['note'] = '<em>Nota:</em> La data deve essere nel formato: &#039;yyyy-mm-dd hh:mm:ss&#039;.';
$lang['notitlegiven'] = 'Titolo non inserito';
$lang['numbertodisplay'] = 'Quantit&agrave; da visualizzare (vuoto mostra tutte le news)';
$lang['print'] = 'Stampa';
$lang['postdate'] = 'Data di pubblicazione';
$lang['postinstall'] = 'Assicurati di impostare il permesso &quot;Modifica News&quot; agli utenti che dovranno amministrare le News.';
$lang['rssfeedtitle'] = 'RSS Feed';
$lang['rsstemplate'] = 'Modello per RSS';
$lang['selectcategory'] = 'Seleziona la categoria';
$lang['showchildcategories'] = 'Mostra le categorie discendenti';
$lang['sortascending'] = 'Ordine crescente';
$lang['startdate'] = 'Data inizio';
$lang['startoffset'] = 'Inizia la visualizzazione dalla n-ima news';
$lang['startrequiresend'] = 'Inserire una data di inizio richiede anche una data di fine';
$lang['submit'] = 'Inserisci';
$lang['summary'] = 'Sommario';
$lang['summarytemplate'] = 'Modello di sommario';
$lang['title'] = 'Titolo';
$lang['options'] = 'Opzioni';
$lang['useexpiration'] = 'Usa la data di scadenza';
$lang['showautodiscovery'] = 'Mostra i collegamenti di Auto-Rilevazione';
$lang['autodiscoverylink'] = 'Auto-Rilevazione dell&#039;URL (vuoto &egrave; il valore predefinito)';
$lang['helpnumber'] = 'Numero massimo di news da visualizzare =- Lasciando vuoto mostrer&agrave; tutte le news.';
$lang['helpstart'] = 'Inizia dalla n-ima news -- lasciando vuoto inizier&agrave; dalla prima.';
$lang['helpmakerssbutton'] = 'Fa un bottone per linkare ad un RSS feed di un elemento News.';
$lang['helpcategory'] = 'Visualizza solo le news di quella categoria ed i suoi discendenti. Lasciando vuoto, mostrer&agrave; tutte le categorie.';
$lang['helpmoretext'] = 'Testo da visualizzare alla fine di una news se supera la lunghezza del sommario. Il predefinito &egrave; &quot;more...&quot;';
$lang['helpsummarytemplate'] = 'Usa un Modello separato per visualizzare il sommario dell&#039;articolo. Deve essere in modules/News/templates.';
$lang['helpdetailtemplate'] = 'Usa un Modello separato per visualizzare il dettaglio dell&#039;articolo. Deve essere in modules/News/templates.';
$lang['helpsortby'] = 'Campo da ordinare per. Le opzioni sono: &quot;news_date&quot;, &quot;summary&quot;, &quot;news_data&quot;, &quot;news_category&quot;, &quot;news_title&quot;. Predefinito &egrave; &quot;news_date&quot;.';
$lang['helpsortasc'] = 'Ordina le news in modo ascendente per data piuttosto che discendente.';
$lang['helpdetailpage'] = 'Pagina di visualizzazione del dettaglio della News. Questa pu&ograve; essere una pagina alias o un id. Viene usata per visualizzare il dettaglio in un differente template dal sommario.';
$lang['helpdateformat'] = 'Formato per visualizzare la data di pubblicazione degli articoli. Questa &egrave; basata sulla funzione <a href=&quot;http://php.net/strftime&quot; target=&quot;_blank&quot;>strftime</a> e pu&ograve; essere usata nel vostro template con $entry->formatpostdate. Il predefinito &egrave; %x, il quale&egrave; il predefinito per il formato data di molti locale.';
$lang['help'] = '	<h3>Che cosa fa?</h3>
	<p>News &egrave; un modulo per visualizzare eventi sulla tua pagina, simile allo stile blog, solo con pi&ugrave; funzionalit&agrave;!. Quando il module &egrave; installato, in amministrazione una pagina News &egrave; aggiunta in fondo al menu che vi permette di selezionare o aggiungere una categoria. Quando una categoria &egrave; creata o selezionata, sar&agrave; visualizzata una lista di news per quella categoria. Da qui, potete aggiungere, modificare o cancellare news per quella categoria.</p>
	<h3>Sicurezza</h3>
	<p>L&#039;utente deve appartenere a un gruppo con il permesso &#039;Modifica News&#039; per aggiungere, modificare, o cancellare News.</p>
	<p>Per modificare il layout dei Modelli, l&#039;utente deve appartenere a un gruppo con il permesso &#039;Modifica Modelli&#039; </p>
	<p>Per modificare le preferenze globali, l&#039;utente deve appartenere a un gruppo con il permesso &#039;Modifica Preferenze del Sito&#039;</p>
	<h3>Come usarlo?</h3>
	<p>Il modo pi&ugrave; semplice di usarlo &egrave; congiuntamente con il tag cms_module. Inseririsci il modulo dove vuoi nel vostro Modello o pagina, questo visualizzer&agrave; le news. Esempio di sintassi: <code>{cms_module module=&quot;news&quot; number=&quot;5&quot; category=&quot;beer&quot;}</code></p>';
?>