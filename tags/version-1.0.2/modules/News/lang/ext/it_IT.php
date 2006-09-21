<?php
$lang['author'] = 'Autore';
$lang['sysdefaults'] = 'Riporta nella configurazione predefinita';
$lang['restoretodefaultsmsg'] = 'Questa operazione riporter&agrave; il contenuto del Modello a quello predefinito. Sei sicuro che vuoi procedere?';
$lang['addarticle'] = 'Aggiungi articolo';
$lang['articleadded'] = 'L&#039;articolo &egrave; stato aggiunto con successo.';
$lang['articleupdated'] = 'L&#039;articolo &egrave; stato aggiornato con successo.';
$lang['articledeleted'] = 'L&#039;articolo &egrave; stato cancellato con successo.';
$lang['addcategory'] = 'Aggiungi categoria';
$lang['categoryadded'] = 'La categoria &egrave; stata aggiunto con successo.';
$lang['categoryupdated'] = 'La categoria &egrave; stata aggiornata con successo.';
$lang['categorydeleted'] = 'La categoria &egrave; stata cancellata con successo.';
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
$lang['detailtemplate'] = 'Modello dettaglio';
$lang['detailtemplateupdated'] = 'Il Modello dettaglio &egrave; stato salvato al database con successo.';
$lang['displaytemplate'] = 'Visualizza Modello';
$lang['edit'] = 'Modifica';
$lang['enddate'] = 'Fine data';
$lang['endrequiresstart'] = 'Inserire una data di fine richiede anche una data di inizio';
$lang['entries'] = '%s News';
$lang['status'] = 'Stato';
$lang['expiry'] = 'Scade';
$lang['filter'] = 'Filtra';
$lang['more'] = 'Altre';
$lang['category_label'] = 'Categoria:';
$lang['author_label'] = 'Postato da:';
$lang['moretext'] = 'Altro testo';
$lang['name'] = 'Nome';
$lang['news'] = 'News';
$lang['news_return'] = 'Ritorna';
$lang['newcategory'] = 'Nuova categoria';
$lang['needpermission'] = 'Hai bisogno del permesso &#039;%s&#039; per usufruire di questa funzione.';
$lang['nocategorygiven'] = 'Categoria non specificata';
$lang['nocontentgiven'] = 'Contenuto non inserito';
$lang['noitemsfound'] = '<strong>Nessuna</strong> news trovata per la categoria: %s';
$lang['nopostdategiven'] = 'Nessuna data di pubblicazione &egrave; inserita';
$lang['note'] = '<em>Nota:</em> La data deve essere nel formato: &#039;yyyy-mm-dd hh:mm:ss&#039;.';
$lang['notitlegiven'] = 'Titolo non inserito';
$lang['nonamegiven'] = 'Nessuna nome inserito';
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
$lang['summarytemplateupdated'] = 'Il Modello Sommario &egrave; stato aggiornato con successo.';
$lang['title'] = 'Titolo';
$lang['options'] = 'Opzioni';
$lang['optionsupdated'] = 'Le opzioni sono state aggiornate con successo.';
$lang['useexpiration'] = 'Usa la data di scadenza';
$lang['showautodiscovery'] = 'Mostra i collegamenti di Auto-Rilevazione';
$lang['autodiscoverylink'] = 'Auto-Rilevazione dell&#039;URL (vuoto &egrave; il valore predefinito)';
$lang['eventdesc-NewsArticleAdded'] = 'Mandato quando un articolo &egrave; aggiunto.';
$lang['eventhelp-NewsArticleAdded'] = '<p>Sent when an article is added.</p>
<h4>Parameters</h4>
<ul>
<li>\&quot;news_id\&quot; - Id of the news article</li>
<li>\&quot;category_id\&quot; - Id of the category for this article</li>
<li>\&quot;title\&quot; - Title of the article</li>
<li>\&quot;content\&quot; - Content of the article</li>
<li>\&quot;summary\&quot; - Summary of the article</li>
<li>\&quot;status\&quot; - Status of the article (&quot;draft&quot; or &quot;publish&quot;)</li>
<li>\&quot;start_time\&quot; - Date the article should start being displayed</li>
<li>\&quot;end_time\&quot; - Date the article should stop being displayed</li>
<li>\&quot;useexp\&quot; - Wether the expiration date should be ignored or not</li>
</ul>
';
$lang['eventdesc-NewsArticleEdited'] = 'Mandato quando un articolo &egrave; aggiornato.';
$lang['eventhelp-NewsArticleEdited'] = '<p>Sent when an article is edited.</p>
<h4>Parameters</h4>
<ul>
<li>\&quot;news_id\&quot; - Id of the news article</li>
<li>\&quot;category_id\&quot; - Id of the category for this article</li>
<li>\&quot;title\&quot; - Title of the article</li>
<li>\&quot;content\&quot; - Content of the article</li>
<li>\&quot;summary\&quot; - Summary of the article</li>
<li>\&quot;status\&quot; - Status of the article (&quot;draft&quot; or &quot;publish&quot;)</li>
<li>\&quot;start_time\&quot; - Date the article should start being displayed</li>
<li>\&quot;end_time\&quot; - Date the article should stop being displayed</li>
<li>\&quot;useexp\&quot; - Wether the expiration date should be ignored or not</li>
</ul>
';
$lang['eventdesc-NewsArticleDeleted'] = 'Mandato quando un articolo &egrave; cancellato.';
$lang['eventhelp-NewsArticleDeleted'] = '<p>Sent when an article is deleted.</p>
<h4>Parameters</h4>
<ul>
<li>\&quot;news_id\&quot; - Id of the news article</li>
</ul>
';
$lang['eventdesc-NewsCategoryAdded'] = 'Mandato quando una categoria &egrave; aggiunta.';
$lang['eventhelp-NewsCategoryAdded'] = '<p>Sent when a category is added.</p>
<h4>Parameters</h4>
<ul>
<li>\&quot;category_id\&quot; - Id of the news category</li>
<li>\&quot;name\&quot; - Name of the news category</li>
</ul>
';
$lang['eventdesc-NewsCategoryEdited'] = 'Mandato quando una categoria &egrave; aggiornata.';
$lang['eventhelp-NewsCategoryEdited'] = '<p>Sent when a category is edited.</p>
<h4>Parameters</h4>
<ul>
<li>\&quot;category_id\&quot; - Id of the news category</li>
<li>\&quot;name\&quot; - Name of the news category</li>
<li>\&quot;origname\&quot; - The original name of the news category</li>
</ul>
';
$lang['eventdesc-NewsCategoryDeleted'] = 'Mandato quando una categoria &egrave; cancellata.';
$lang['eventhelp-NewsCategoryDeleted'] = '<p>Sent when a category is deleted.</p>
<h4>Parameters</h4>
<ul>
<li>\&quot;category_id\&quot; - Id of the deleted category </li>
<li>\&quot;name\&quot; - Name of the deleted category</li>
</ul>
';
$lang['helpnumber'] = 'Numero massimo di news da visualizzare =- Lasciando vuoto mostrer&agrave; tutte le news.';
$lang['helpstart'] = 'Inizia dalla n-ima news -- lasciando vuoto inizier&agrave; dalla prima.';
$lang['helpmakerssbutton'] = 'Fa un bottone per linkare ad un RSS feed di un elemento News.';
$lang['helpcategory'] = 'Visualizza solo le news di quella categoria. <b>Usa * dopo il nome per visualizzare i suoi discendenti.</b> Categorie multiple possono essere usate se separate con virgola. Lasciando vuoto, mostrer&agrave; tutte le categorie.';
$lang['helpmoretext'] = 'Testo da visualizzare alla fine di una news se supera la lunghezza del sommario. Il predefinito &egrave; &quot;more...&quot;';
$lang['helpsummarytemplate'] = 'Usa un Modello separato per visualizzare il sommario dell&#039;articolo. Deve essere in modules/News/templates.';
$lang['helpdetailtemplate'] = 'Usa un Modello separato per visualizzare il dettaglio dell&#039;articolo. Deve essere in modules/News/templates.';
$lang['helpsortby'] = 'Campo da ordinare per. Le opzioni sono: &quot;news_date&quot;, &quot;summary&quot;, &quot;news_data&quot;, &quot;news_category&quot;, &quot;news_title&quot;. Predefinito &egrave; &quot;news_date&quot;.';
$lang['helpsortasc'] = 'Ordina le news in modo ascendente per data piuttosto che discendente.';
$lang['helpdetailpage'] = 'Pagina di visualizzazione del dettaglio della News. Questa pu&ograve; essere una pagina alias o un id. Viene usata per visualizzare il dettaglio in un differente template dal sommario.';
$lang['helpdateformat'] = 'Formato per visualizzare la data di pubblicazione degli articoli. Questa &egrave; basata sulla funzione <a href=&amp;quot;http://php.net/strftime&amp;quot; target=&amp;quot;_blank&amp;quot;>strftime</a> e pu&ograve; essere usata nel vostro template con $entry->formatpostdate. Il predefinito &egrave; %x, il quale &egrave; il predefinito per il formato data di molti locale.';
$lang['help'] = '	<h3>Che cosa fa?</h3>
	<p>News &egrave; un modulo per visualizzare eventi sulla tua pagina, simile allo stile blog, solo con pi&ugrave; funzionalit&agrave;!. Quando il module &egrave; installato, in amministrazione una pagina News &egrave; aggiunta in fondo al menu che vi permette di selezionare o aggiungere una categoria. Quando una categoria &egrave; creata o selezionata, sar&agrave; visualizzata una lista di news per quella categoria. Da qui, potete aggiungere, modificare o cancellare news per quella categoria.</p>
<h3>Variabili Modello</h3>
	<ul>
		<li><b>itemcount</b> - Il numero di articoli da mostrare.</li>
		<li><b>entry->authorname</b> - Il nome completo dell&#039;autore includendo Nome e Cognome.</li>
	</ul>
	<h3>Sicurezza</h3>
	<p>L&#039;utente deve appartenere a un gruppo con il permesso &#039;Modifica News&#039; per aggiungere, modificare, o cancellare News.</p>
	<p>Per modificare il layout dei Modelli, l&#039;utente deve appartenere a un gruppo con il permesso &#039;Modifica Modelli&#039; </p>
	<p>Per modificare le preferenze globali, l&#039;utente deve appartenere a un gruppo con il permesso &#039;Modifica Preferenze del Sito&#039;</p>
	<h3>Come usarlo?</h3>
	<p>Il modo pi&ugrave; semplice di usarlo &egrave; con il tag {news} (il modulo in un tag, per semplificare la sintassi). Inseririsci il modulo dove vuoi nel vostro Modello o pagina, questo visualizzer&agrave; le news. Esempio di sintassi: <code>{news number=&#039;5&#039;}</code></p>
';
$lang['utmz'] = '156861353.1157407430.3.3.utmccn=(referral)|utmcsr=dev.cmsmadesimple.org|utmcct=/|utmcmd=referral';
$lang['utma'] = '156861353.1861570971.1156160505.1157321899.1157407430.3';
?>