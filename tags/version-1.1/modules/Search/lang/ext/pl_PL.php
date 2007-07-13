<?php
$lang['searchsubmit'] = 'Wyślij';
$lang['search'] = 'Szukaj';
$lang['param_submit'] = 'Tekst na guziku wysyłania';
$lang['param_searchtext'] = 'Tekst w polu wyszukiwania';
$lang['prompt_searchtext'] = 'Domyślny tekst wyszukiwania';
$lang['param_resultpage'] = 'Page to display search results in.  This can either be a page alias or an id.  Used to allow search results to be displayed in a different template from the search form';
$lang['description'] = 'Module for search site and other module&#039;s contents.';
$lang['reindexallcontent'] = 'Przeindeksuj całą zawartość';
$lang['reindexcomplete'] = 'Przeindeksowanie zakończone!';
$lang['stopwords'] = 'Stop Words';
$lang['searchresultsfor'] = 'Wyniki wyszukiwania dla';
$lang['noresultsfound'] = 'Nic nie znaleziono!';
$lang['timetaken'] = 'Czas wyszukiwania';
$lang['usestemming'] = 'Use Word Stemming (English Only)';
$lang['searchtemplate'] = 'Szablon wyszukiwania';
$lang['resulttemplate'] = 'Szablon wynik&oacute;w';
$lang['submit'] = 'Wyślij';
$lang['sysdefaults'] = 'Przywr&oacute;ć domyślne';
$lang['searchtemplateupdated'] = 'Szablon wyszukiwania uaktualniono';
$lang['resulttemplateupdated'] = 'Szablon wynik&oacute;w uaktualniono';
$lang['restoretodefaultsmsg'] = 'This operation will restore the template contents to their system defaults.  Are you sure you want to procede?';
$lang['options'] = 'Opcje';
$lang['eventdesc-SearchInitiated'] = 'Wyślij, gdy rozpoczęto wyszukiwanie.';
$lang['eventdesc-SearchCompleted'] = 'Wyślij, gdy zakończono wyszukiwanie.';
$lang['eventdesc-SearchItemAdded'] = 'Wyślij, gdy zaindeksowano nowy element.';
$lang['eventdesc-SearchItemDeleted'] = 'Wyślij, gdy element został usunięty z indeksu.';
$lang['eventdesc-SearchAllItemsDeleted'] = 'Wyślij, gdy wszystkie elementy zostały usunięte z indeksu.';
$lang['eventhelp-SearchInitiated'] = '<p>Wyślij, gdy rozpoczęto wyszukiwanie.</p>
<h4>Parametry</h4>
<ol>
<li>Tekst, kt&oacute;rego szukano.</li>
</ol>
';
$lang['eventhelp-SearchCompleted'] = '<p>Wyślij, gdy zakończono wyszukiwanie.</p>
<h4>Parametry</h4>
<ol>
<li>Tekst, kt&oacute;rego szukano.</li>
<li>Tablica wynik&oacute;w wyszukiwania.</li>
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
<p>The search module will not search any &quot;inactive&quot; pages. However on occasion, when you are using the CustomContent module, or other smarty logic to show different content to different groups of users, it may be advisiable to prevent the entire page from being indexed even when it is live.  To do this include the following tag anywhere on the page <em><!-- pageAttribute: NotSearchable --></em> When the search module sees this tag in the page it will not index any content for that page.</p>
<p>The <em><!-- pageAttribute: NotSearchable --></em> tag can be placed in the template as well.  if this is done, none of the pages attached to that template will be indexed.  Those pages will be re-indexed if the tag is removed</p>
';
$lang['utma'] = '156861353.531216200.1148077539.1164806296.1164808481.87';
$lang['utmz'] = '156861353.1162828168.77.6.utmccn=(referral)|utmcsr=forum.cmsmadesimple.org|utmcct=/index.php|utmcmd=referral';
?>