<?php
$lang['searchsubmit'] = 'Pateikti';
$lang['search'] = 'Paie&scaron;ka';
$lang['param_submit'] = 'Tekstas kuris bus ant Pateikimo mygtuko';
$lang['param_searchtext'] = 'Tekstas kuris bus paie&scaron;kos laukelyje';
$lang['prompt_searchtext'] = 'Paie&scaron;kos tekstas';
$lang['param_resultpage'] = 'Puslapis kuriame bus rodomi pai&scaron;kos rezultatai. Tai gali būt puslpio trumpinys (alias) ar ID. Naudojama paie&scaron;kos rezultatus atvaizduoti kitokiam &scaron;ablone nei paie&scaron;kos formos.';
$lang['description'] = 'Modulis skirtas ie&scaron;koti puslapio ir kitų modulių turinį.';
$lang['reindexallcontent'] = 'Indeksuoti visą turinį';
$lang['reindexcomplete'] = 'Indeksvimas pavyko';
$lang['stopwords'] = 'Stop žodžiai';
$lang['searchresultsfor'] = 'Ie&scaron;koti';
$lang['noresultsfound'] = 'Nieko nerasta';
$lang['timetaken'] = 'Užėmė laiko';
$lang['usestemming'] = 'Naudoti žodžių Stemming (English Only)';
$lang['searchtemplate'] = 'Paie&scaron;kos &scaron;ablonas';
$lang['resulttemplate'] = 'Rezultatų &scaron;ablonas';
$lang['submit'] = 'Pateikti';
$lang['sysdefaults'] = 'Atstatyti pradinius parametrus';
$lang['searchtemplateupdated'] = 'Paie&scaron;kos &scaron;ablonas atnaujintas';
$lang['resulttemplateupdated'] = 'Rezultatų &scaron;ablonas atnaujintas';
$lang['restoretodefaultsmsg'] = '&Scaron;is veiksmas atstatys &scaron;ablonus į įprastu. ar jūs tikrai to norite?';
$lang['options'] = 'Nuostatos';
$lang['eventdesc-SearchInitiated'] = 'Siųsti kai paie&scaron;ka prasidėjo.';
$lang['eventdesc-SearchCompleted'] = 'Siųsti kai paie&scaron;ka baigėsi.';
$lang['eventdesc-SearchItemAdded'] = 'Siųsti kai naujas elematas indexuotas.';
$lang['eventdesc-SearchItemDeleted'] = 'Siųsti kai elemtas i&scaron;trintas i&scaron; indexo.';
$lang['eventdesc-SearchAllItemsDeleted'] = 'Siųsti kai visi elemtai i&scaron;trinti i&scaron; indexo.';
$lang['eventhelp-SearchInitiated'] = '<p>Siųsti kai paie&scaron;ka prasidėjo.</p>
<h4>Parametrai</h4>
<ol>
<li>Tekstas kurio ie&scaron;kojo.</li>
</ol>
';
$lang['eventhelp-SearchCompleted'] = '<p>Siųsti kai paie&scaron;ka baigėsi..</p>
<h4>Parametrai</h4>
<ol>
<li>Tekstas kurio ie&scaron;kojo.</li>
<li>Rezultatai</li>
</ol>
';
$lang['eventhelp-SearchItemAdded'] = '<p>Siųsti kai naujas elematas indexuotas..</p>
<h4>Parametrai</h4>
<ol>
<li>Modulio pavadinimas.</li>
<li>elemento ID</li>
<li>Papildomi atributai.</li>
<li>Priėtas turinys į indexą.</li>
</ol>
';
$lang['eventhelp-SearchItemDeleted'] = '<p>Siųsti kai elemtas i&scaron;trintas i&scaron; indexo.</p>
<h4>Parametrai</h4>
<ol>
<li>Modulio pavadinimas.</li>
<li>elemento ID.</li>
<li>Papildomi atributai.</li>
</ol>
';
$lang['eventhelp-SearchAllItemsDeleted'] = '<p>Sent when all items are deleted from the index.</p>
<h4>Parametrai</h4>
<ul>
<li>Nėra</li>
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
$lang['utmz'] = '156861353.1156232165.25.12.utmccn=(referral)|utmcsr=dev.cmsmadesimple.org|utmcct=/softwaremap/trove_list.php|utmcmd=referral';
$lang['utma'] = '156861353.146700672.1148557798.1156244921.1156338862.27';
?>