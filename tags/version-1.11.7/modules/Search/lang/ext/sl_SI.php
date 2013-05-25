<?php
$lang['use_or'] = 'Poi&scaron;či rezultate, ki ustrezajo VSAKI besedi';
$lang['param_detailpage'] = 'Used only for matching results from modules, this parameter allows specifying a different detail page for the results.  This is useful if, for example, you always display your detail views in a page with a different template.  <em>(<strong>Note:</strong> modules have the ability to override this parameter.)</em>';
$lang['prompt_resultpage'] = 'Stran za posamezne modul rezultate <em>(Opomba moduli lahko to preglasijo)</em>';
$lang['search_method'] = 'Pretty Urls Compatibility via Method POST, default value is always GET, to make this work just put {search search_method=&quot;post&quot;} ';
$lang['export_to_csv'] = 'Izvozi v CSV';
$lang['prompt_savephrases'] = 'Sledi frazam iskanja, ne posameznih besed';
$lang['word'] = 'Beseda';
$lang['count'] = '&Scaron;tevilo';
$lang['confirm_clearstats'] = 'Ste prepričani, da želite izbrisati vso statistiko?';
$lang['clear'] = 'Izbri&scaron;i';
$lang['statistics'] = 'Statistika';
$lang['param_action'] = 'Določite način delovanja modula. Dovoljene vrednosti so &#039;default&#039; ter &#039;keywords&#039;. Način &#039;keywords&#039; lahko uporabite za izdelavo seznama z vejicami ločenih ključnih besed, ki so primerne za uporabo v meta oznaki keywords.';
$lang['param_count'] = 'Uporabljeno z akcijo keywords; ta parametere bo omejil izpis na določeno &scaron;tevilo besed';
$lang['param_pageid'] = 'Možno samo z akcijo keywords; ta parameter lahko uporabite, če želite določiti drugačen ID strani pri vrnitvi rezultatov';
$lang['param_inline'] = 'Če je nastavljeno na true, bo izpis iskalnega obrazca nadomestil izvirno vsebino &#039;search&#039; oznake v bloku vsebine, kjer se pojavi. Uporabite ta parameter, če ima va&scaron;a predloga večje &scaron;tevilo blokov vsebin in ne želite, da bi izpis iskanja povozil privzeti blok vsebine';
$lang['param_passthru'] = 'Poda poimenovane parametere določenim modulom. Format vsakega izmed teh parametrov je: &quot;passtru_IMEMODULA_IMEPARAMETRA=&#039;vrednost&#039;&quot; npr.: passthru_News_detailpage=&#039;newsdetails&#039;&quot;';
$lang['param_modules'] = 'Omeji iskalne rezultate na vrednosti, ki so indeksirane v določenem seznamu modulov (ločeni z vejicami)';
$lang['searchsubmit'] = 'Po&scaron;lji';
$lang['search'] = 'Iskanje';
$lang['param_submit'] = 'Besedilo na gumbu za izvedbo iskanja';
$lang['param_searchtext'] = 'Besedilo v polju za iskanje';
$lang['prompt_searchtext'] = 'Privzeto besedilo za iskanje';
$lang['param_resultpage'] = 'Stran za prikaz rezultatov iskanja. To je lahko psevdonim ali ID strani. Omogoča izpis iskalnih rezultatov v drugačni predlogi od iskalnega obrazca.';
$lang['prompt_alpharesults'] = 'Razvrsti rezultate po abecedi in ne po teži';
$lang['description'] = 'Modul za iskanje po strani in vsebinah drugih modulov.';
$lang['reindexallcontent'] = 'Osveži indeks vseh vsebin';
$lang['reindexcomplete'] = 'Osveževanje indeksa končano!';
$lang['stopwords'] = 'Prazne besede';
$lang['default_stopwords'] = 'i, me, my, myself, we, our, ours, ourselves, you, your, yours, 
yourself, yourselves, he, him, his, himself, she, her, hers, 
herself, it, its, itself, they, them, their, theirs, themselves, 
what, which, who, whom, this, that, these, those, am, is, are, 
was, were, be, been, being, have, has, had, having, do, does, 
did, doing, a, an, the, and, but, if, or, because, as, until, 
while, of, at, by, for, with, about, against, between, into, 
through, during, before, after, above, below, to, from, up, down, 
in, out, on, off, over, under, again, further, then, once, here, 
there, when, where, why, how, all, any, both, each, few, more, 
most, other, some, such, no, nor, not, only, own, same, so, 
than, too, very';
$lang['prompt_resetstopwords'] = 'Naloži prazne besede iz dateoteke jezika';
$lang['input_resetstopwords'] = 'Naloži';
$lang['searchresultsfor'] = 'Rezultati iskanja za';
$lang['noresultsfound'] = 'Ni najdenih rezultatov!';
$lang['timetaken'] = 'Čas izvedbe';
$lang['usestemming'] = 'Uporabi sopomenke (samo v angle&scaron;čini)';
$lang['searchtemplate'] = 'Predloga iskanja';
$lang['resulttemplate'] = 'Predloga rezultatov iskanja';
$lang['submit'] = 'Po&scaron;lji';
$lang['sysdefaults'] = 'Povrni na privzeto';
$lang['searchtemplateupdated'] = 'Predloga iskanja spremenjena';
$lang['resulttemplateupdated'] = 'Predloga rezultatov iskanja spremenjena';
$lang['restoretodefaultsmsg'] = 'Ta operacija bo povrnila vsebino predloge na njeno privzeto sistemsko vrednost. Ste prepričani, da želite nadaljevati?';
$lang['options'] = 'Možnosti';
$lang['eventdesc-SearchInitiated'] = 'Poslano, ko se iskanje začne.';
$lang['eventdesc-SearchCompleted'] = 'Poslano, ko je iskanje zaključeno.';
$lang['eventdesc-SearchItemAdded'] = 'Poslano, ko je nov element indeksiran.';
$lang['eventdesc-SearchItemDeleted'] = 'Poslano, ko je element izbrisan iz indeksa.';
$lang['eventdesc-SearchAllItemsDeleted'] = 'Poslano, ko so vsi elementi izbrisani iz indeksa.';
$lang['eventhelp-SearchInitiated'] = '<p>Sent when a search is started.</p>
<h4>Parameters</h4>
<ol>
<li>Text that was searched for.</li>
</ol>
';
$lang['eventhelp-SearchCompleted'] = '<p>Sent when a search is completed.</p>
<h4>Parameters</h4>
<ol>
<li>Text that was searched for.</li>
<li>Array of the completed results.</li>
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
$lang['qca'] = 'P0-1458450664-1284573084918';
$lang['utmz'] = '156861353.1338818723.1.1.utmcsr=(direct)|utmccn=(direct)|utmcmd=(none)';
$lang['utma'] = '156861353.1673260288.1338818723.1338818723.1338822728.2';
$lang['utmc'] = '156861353';
$lang['utmb'] = '156861353';
?>