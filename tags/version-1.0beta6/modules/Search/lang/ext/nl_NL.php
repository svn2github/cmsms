<?php
$lang['searchsubmit'] = 'Verstuur';
$lang['search'] = 'Zoeken';
$lang['param_submit'] = 'Tekst die in de verstuur knop komt';
$lang['param_searchtext'] = 'Tekst die in het zoekveld staat';
$lang['prompt_searchtext'] = 'Standaard zoek tekst';
$lang['param_resultpage'] = 'Pagina om de resultaten in te tonen. Dit kan een pagina alias of id zijn.  Gebruikt om de resultaten in een ander sjabloon te tonen dan het zoekformulier.';
$lang['description'] = 'Module voor het zoeken in content van de site en andere module&#039;s.';
$lang['reindexallcontent'] = 'Herindexeer alle Content';
$lang['reindexcomplete'] = 'Herindexeren gereed!';
$lang['stopwords'] = 'Stop woorden';
$lang['searchresultsfor'] = 'Zoekresultaten voor';
$lang['noresultsfound'] = 'Geen resultaten gevonden!';
$lang['timetaken'] = 'Tijd benodigd';
$lang['usestemming'] = 'Gebruik woord Stemming (Alleen engels)';
$lang['searchtemplate'] = 'Zoeksjabloon';
$lang['resulttemplate'] = 'Resultaatsjabloon';
$lang['submit'] = 'Verstuur';
$lang['sysdefaults'] = 'Herstal standaard waarden';
$lang['searchtemplateupdated'] = 'Zoeksjabloon bijgewerkt';
$lang['resulttemplateupdated'] = 'Resultaatsjabloon bijgewerkt';
$lang['restoretodefaultsmsg'] = 'Deze optie hersteld de sjablonen naar hun standaard waarden. Weet je zeker dat je wilt doorgaan?';
$lang['options'] = 'Opties';
$lang['eventdesc-SearchInitiated'] = 'Verzonden als een zoekopdracht is gestart.';
$lang['eventdesc-SearchCompleted'] = 'Verzonden als een zoekopdracht is afgerond.';
$lang['eventdesc-SearchItemAdded'] = 'Verzonden als een nieuw item is ge&iuml;ndexeerd.';
$lang['eventdesc-SearchItemDeleted'] = 'Verzonden als een item is verwijderd uit de index.';
$lang['eventdesc-SearchAllItemsDeleted'] = 'Verzonden als alle items zijn verwijderd uit de index.';
$lang['eventhelp-SearchInitiated'] = '<p>Verzonden als een zoekopdracht is gestart.</p>
<h4>Parameters</h4>
<ol>
<li>Tekst waarop is gezocht.</li>
</ol>
';
$lang['eventhelp-SearchCompleted'] = '<p>Verzonden als een zoekopdracht is afgerond.</p>
<h4>Parameters</h4>
<ol>
<li>Tekst waarop is gezocht.</li>
<li>Lijst met afgeronde resultaten.</li>
</ol>
';
$lang['eventhelp-SearchItemAdded'] = '<p>Verzonden als een nieuw item is ge&iuml;ndexeerd.</p>
<h4>Parameters</h4>
<ol>
<li>Module naam.</li>
<li>Id van het item.</li>
<li>Additionele attributen.</li>
<li>Content om te indexeren en toe te voegen.</li>
</ol>
';
$lang['eventhelp-SearchItemDeleted'] = '<p>Verzonden als een item is verwijderd uit de index.</p>
<h4>Parameters</h4>
<ol>
<li>Module name.</li>
<li>Id of the item.</li>
<li>Additionele attributen.</li>
</ol>
';
$lang['eventhelp-SearchAllItemsDeleted'] = '<p>Verzonden als een zoekopdracht is gestart.</p>
<h4>Parameters</h4>
<ul>
<li>Niets</li>
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
$lang['utmc'] = '156861353';
$lang['utmz'] = '156861353.1154885832.1.1.utmccn=(direct)|utmcsr=(direct)|utmcmd=(none)';
$lang['utma'] = '156861353.16807.1154885832.1154885832.1155235013.2';
?>