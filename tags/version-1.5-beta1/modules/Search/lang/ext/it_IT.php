<?php
$lang['word'] = 'Parola';
$lang['count'] = 'Contatore';
$lang['confirm_clearstats'] = 'Siete sicuri di voler cancellare tutte le statistiche?';
$lang['clear'] = 'Cancella';
$lang['statistics'] = 'Statistiche';
$lang['param_action'] = 'Specifica il modo operativo del modulo. Valori accettabili sono &#039;default&#039; e &#039;keywords&#039;. La azione keywords pu&ograve; essere usata per generare una lista separata da virgola di parole da usare nel meta tag keywords.';
$lang['param_count'] = 'Usata con l&#039;azione keywords, questo parametro limita l&#039;uscita al numero specificato di parole';
$lang['param_pageid'] = 'Applicabile solo con l&#039;azione keywords, questo parametro pu&ograve; essere usato per specificare un differente ID di pagina per il ritorno dei risultati';
$lang['param_inline'] = 'Se vero, l&#039;uscita dal search sostituisce il contenuto originale del tag &#039;search&#039; tag nel dato blocco. Usa questo parametro se il Vostro template ha multipli blocchi e non volete visualizzare la ricerca nel blocco predefinito';
$lang['param_passthru'] = 'Passa i parametri nominati ai moduli specificati. Il formato di ciascun di questi parametri &egrave;: &quot;passtru_MODULENAME_PARAMNAME=&#039;value&#039;&quot; i.e.: passthru_News_detailpage=&#039;newsdetails&#039;&quot;';
$lang['param_modules'] = 'Limita i risultati della ricerca ai valori indicizzati dalla specifica lista (separati da virgola) di moduli';
$lang['searchsubmit'] = 'Invia';
$lang['search'] = 'Cerca';
$lang['param_submit'] = 'Testo da posizionare nel bottone di submit';
$lang['param_searchtext'] = 'Testo da posizionare nel box di ricerca';
$lang['prompt_searchtext'] = 'Testo di ricerca predefinito';
$lang['param_resultpage'] = 'Pagina che visualizza i risultati della ricerca. Questa pu&ograve; essere un alias di pagina o un id. Usato per permettere che i risultati siano visualizzati in un diverso Modello di quello della ricerca';
$lang['description'] = 'Modulo per ricercare nel sito e nel contenuto di altri moduli.';
$lang['reindexallcontent'] = 'Reindicizza tutto il contenuto';
$lang['reindexcomplete'] = 'Reindicizzazione completata!';
$lang['stopwords'] = 'Parole di Stop';
$lang['searchresultsfor'] = 'Risultati della ricerca per';
$lang['noresultsfound'] = 'Nessun risultato trovato!';
$lang['timetaken'] = 'Tempo impiegato';
$lang['usestemming'] = 'Usa Word Stemming (solo Inglese)';
$lang['searchtemplate'] = 'Modello Ricerca';
$lang['resulttemplate'] = 'Modello Risultato';
$lang['submit'] = 'Inoltra';
$lang['sysdefaults'] = 'Riporta al defaults';
$lang['searchtemplateupdated'] = 'Modello Ricerca aggiornato';
$lang['resulttemplateupdated'] = 'Modello Risultato aggiornato';
$lang['restoretodefaultsmsg'] = 'Questa operazione riporta il contenuto del Modello nella condizione  originale. Siete sicuri di voler procedere?';
$lang['options'] = 'Opzioni';
$lang['eventdesc-SearchInitiated'] = 'Mandato quando la ricerca &egrave; iniziata.';
$lang['eventdesc-SearchCompleted'] = 'Mandato quando la ricerca &egrave; completata.';
$lang['eventdesc-SearchItemAdded'] = 'Mandato quando un nuovo termine &egrave; indicizzato.';
$lang['eventdesc-SearchItemDeleted'] = 'Mandato quando un nuovo termine &egrave; cancellato dall&#039;indice.';
$lang['eventdesc-SearchAllItemsDeleted'] = 'Mandato quando tutti i termini sono cancellati dall&#039;indice.';
$lang['eventhelp-SearchInitiated'] = '<p>Mandato quando la ricerca &egrave; iniziata.</p>
<h4>Parametri</h4>
<ol>
<li>Testo da ricercare.</li>
</ol>
';
$lang['eventhelp-SearchCompleted'] = '<p>Mandato quando la ricerca &egrave; completata.</p>
<h4>Parametri</h4>
<ol>
<li>Testo da ricercare.</li>
<li>Array dei risultati completi.</li>
</ol>
';
$lang['eventhelp-SearchItemAdded'] = '<p>Sent when a new item is indexed.</p>
<h4>Parameters</h4>
<ol>
<li>Module name.</li>
<li>Id of the item.</li>
<li>Additional Attribute.</li>
<li>Content to index and add.</li>
</ol>
';
$lang['eventhelp-SearchItemDeleted'] = '<p>Sent when an item is deleted from the index.</p>
<h4>Parameters</h4>
<ol>
<li>Module name.</li>
<li>Id of the item.</li>
<li>Additional Attribute.</li>
</ol>
';
$lang['eventhelp-SearchAllItemsDeleted'] = '<p>Sent when all items are deleted from the index.</p>
<h4>Parameters</h4>
<ul>
<li>None</li>
</ul>
';
$lang['help'] = '<h3>What does this do?</h3>
<p>Search is a module for searching &quot;core&quot; content along with certain registered modules.  You put in a word or two and it gives you back matching, relevent results.</p>
<h3>How do I use it?</h3>
<p>The easiest way to use it is with the {search} wrapper tag (wraps the module in a tag, to simplify the syntax). This will insert the module into your template or page anywhere you wish, and display the search form.  The code would look something like: <code>{search}</code></p>
<h4>How do i prevent certain content from being indexed</h4>
<p>The search module will not search any &quot;inactive&quot; pages. However on occasion, when you are using the CustomContent module, or other smarty logic to show different content to different groups of users, it may be advisiable to prevent the entire page from being indexed even when it is live.  To do this include the following tag anywhere on the page <em>&amp;lt;!-- pageAttribute: NotSearchable --&amp;gt;</em> When the search module sees this tag in the page it will not index any content for that page.</p>
<p>The <em>&amp;lt;!-- pageAttribute: NotSearchable --&amp;gt;</em> tag can be placed in the template as well.  if this is done, none of the pages attached to that template will be indexed.  Those pages will be re-indexed if the tag is removed</p>';
$lang['changelog'] = '<ul>
<li>1.1 - Original release</li>
<li>1.2 - April 2007 (calguy1000)
  <p>Added the ability to limit results to certain modules,and added the ability to pass parameters through to the various modules to allow different formatting of the output.</p>
  <p>Modified so that the search module could be used in non default content blocks.</p>
</li>
<li>1.3 - May 2007 (calguy1000)
  <p>Adds calls to SetParameterType</p>
</li>
<li>1.4 - Nov 2007 (calguy1000)
  <p>Adds the keywords action.</p>
  <p>Fixes a problem with using the resultpage parameter to a page that&#039;s template was dramatically different.</p>
</li>
<li>1.4.1 - Nov 2007 (calguy1000)
  <p>Minor fixes so that php tags, and punctuation characters are not indexed.</p>
  <p>Fix the VisibleToAdminUser method</p>
</li>
<li>1.5 - Mar 2008 (calguy1000)
  <p>Now gather statistics about the top most 50 frequently searched words.</p>
  <p>Addd the ability to display the statistics and clear them from the admin panel.</p>
  <p>Make it easier to style the search button, and its label.</p>
  <p>Now only index active pages</p>
</li>
<li>1.5.1 - July 2008 (calguy1000)
  <p>Minor changes to the template to restore behaviour that was there before 1.5</p>
  <p>Now escape any search term characters that have special meanings in regular expressions</p>
  <p>Minor optimizations and tweaks</p>
</li>
</ul>';
$lang['utmz'] = '156861353.1221204692.310.58.utmccn=(referral)|utmcsr=dev.cmsmadesimple.org|utmcct=/|utmcmd=referral';
$lang['utma'] = '156861353.916584110.1152549583.1221204692.1221209478.311';
$lang['utmc'] = '156861353';
$lang['utmb'] = '156861353';
?>