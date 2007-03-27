<?php
$lang['searchsubmit'] = 'Odeslat';
$lang['search'] = 'Hledat';
$lang['param_submit'] = 'Text pro vložen&iacute; do odes&iacute;lac&iacute;ho tlač&iacute;tka';
$lang['param_searchtext'] = 'Text pro vložen&iacute; do vyhled&aacute;vac&iacute;ho pole';
$lang['prompt_searchtext'] = 'V&yacute;choz&iacute; text pro vyhled&aacute;v&aacute;n&iacute;';
$lang['param_resultpage'] = 'Str&aacute;nka pro zobrazen&iacute; v&yacute;sledků hled&aacute;n&iacute;. Toto může b&yacute;t jak alias str&aacute;nky tak id. Použ&iacute;v&aacute; se pro zobrazen&iacute; v&yacute;sledků v jin&eacute; &scaron;abloně než formul&aacute;ř pro vyhled&aacute;v&aacute;n&iacute;';
$lang['description'] = 'Modul pro prohled&aacute;v&aacute;n&iacute; str&aacute;nek a obsahu jin&yacute;ch modulů.';
$lang['reindexallcontent'] = 'Reindexovat ve&scaron;ker&yacute; obsah';
$lang['reindexcomplete'] = 'Reindex hotov!';
$lang['stopwords'] = 'Slova pro ukončen&iacute;';
$lang['searchresultsfor'] = 'Hledat v&yacute;sledek pro';
$lang['noresultsfound'] = 'Nic nenalezeno!';
$lang['timetaken'] = 'Čas';
$lang['usestemming'] = 'Use Word Stemming (English Only)';
$lang['searchtemplate'] = '&Scaron;ablona pro vyhled&aacute;v&aacute;n&iacute;';
$lang['resulttemplate'] = '&Scaron;ablona pro v&yacute;sledky';
$lang['submit'] = 'Odeslat';
$lang['sysdefaults'] = 'Nastavit v&yacute;choz&iacute;';
$lang['searchtemplateupdated'] = '&Scaron;ablona pro vyhled&aacute;v&aacute;n&iacute; aktualizov&aacute;na';
$lang['resulttemplateupdated'] = '&Scaron;ablona pro v&yacute;sledky aktualizov&aacute;na';
$lang['restoretodefaultsmsg'] = 'Tato operace nastav&iacute; obsahy &scaron;ablon na v&yacute;choz&iacute;. Opravdu to chcete prov&eacute;st?';
$lang['options'] = 'Volby';
$lang['eventdesc-SearchInitiated'] = 'Odeslat po startu hled&aacute;n&iacute;.';
$lang['eventdesc-SearchCompleted'] = 'Odeslat po dokončen&iacute; vyhled&aacute;v&aacute;n&iacute;.';
$lang['eventdesc-SearchItemAdded'] = 'Odeslat po indexaci nov&eacute; položky.';
$lang['eventdesc-SearchItemDeleted'] = 'Odeslat po smaz&aacute;n&iacute; položky z indexu.';
$lang['eventdesc-SearchAllItemsDeleted'] = 'Odeslat po smaz&aacute;n&iacute; v&scaron;ech položek z indexu.';
$lang['eventhelp-SearchInitiated'] = '<p>Odeslat po startu hled&aacute;n&iacute;.</p>
<h4>Parametry</h4>
<ol>
<li>Text pro vyhled&aacute;v&aacute;n&iacute;.</li>
</ol>
';
$lang['eventhelp-SearchCompleted'] = '<p>Odeslat po dokončen&iacute; vyhled&aacute;v&aacute;n&iacute;.</p>
<h4>Parametry</h4>
<ol>
<li>Text, ktery byl hled&aacute;n.</li>
<li>Pole v&yacute;sledků.</li>
</ol>
';
$lang['eventhelp-SearchItemAdded'] = '<p>Odeslat po indexaci nov&eacute; položky.</p>
<h4>Parametry</h4>
<ol>
<li>Jm&eacute;no modulu.</li>
<li>Id položky.</li>
<li>Dodatečn&yacute; atribut.</li>
<li>Content to index and add.</li>
</ol>
';
$lang['eventhelp-SearchItemDeleted'] = '<p>Odeslat po smaz&aacute;n&iacute; položky z indexu.</p>
<h4>Parametry</h4>
<ol>
<li>Jm&eacute;no modulu.</li>
<li>Id položky.</li>
<li>Dodatečn&yacute; atribut.</li>
</ol>
';
$lang['eventhelp-SearchAllItemsDeleted'] = '<p>Odeslat po smaz&aacute;n&iacute; v&scaron;ech položek z indexu.</p>
<h4>Parametry</h4>
<ul>
<li>Ž&aacute;dn&eacute;</li>
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
$lang['utmz'] = '156861353.1156179136.1.1.utmccn=(direct)|utmcsr=(direct)|utmcmd=(none)';
$lang['utmb'] = '156861353';
$lang['utma'] = '156861353.659783585.1156179136.1156179136.1156179305.2';
$lang['utmc'] = '156861353';
?>