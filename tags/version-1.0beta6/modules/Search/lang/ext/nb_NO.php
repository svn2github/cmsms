<?php
$lang['searchsubmit'] = 'Utf&oslash;r';
$lang['search'] = 'S&oslash;k';
$lang['param_submit'] = 'Tekst &aring; plassere p&aring; Utf&oslash;r-knappen';
$lang['param_searchtext'] = 'Tekst &aring; plassere i s&oslash;ke-boksen';
$lang['prompt_searchtext'] = 'Standard s&oslash;ketekst';
$lang['param_resultpage'] = 'Side &aring; vise s&oslash;keresultater p&aring;.  Dette kan enten v&aelig;re en side-alias eller en id.  Brukes for &aring; tillate s&oslash;keresultater &aring; bli vist med en annen mal enn s&oslash;ke skjemaet';
$lang['description'] = 'Modul for s&oslash;k p&aring; nettsted og andre modulers innhold.';
$lang['reindexallcontent'] = 'Reindekser alt innhold';
$lang['reindexcomplete'] = 'Reindeksering ferdig!';
$lang['stopwords'] = 'Stopp ord';
$lang['searchresultsfor'] = 'S&oslash;keresultat for';
$lang['noresultsfound'] = 'Ingen treff!';
$lang['timetaken'] = 'S&oslash;ket brukte';
$lang['usestemming'] = 'Bruk Word Stemming/ordstammer (kun Engelsk)';
$lang['searchtemplate'] = 'S&oslash;k mal';
$lang['resulttemplate'] = 'Resultat mal';
$lang['submit'] = 'Utf&oslash;r';
$lang['sysdefaults'] = 'Gjenopprett til Standard';
$lang['searchtemplateupdated'] = 'S&oslash;k mal oppdatert';
$lang['resulttemplateupdated'] = 'Resultat mal oppdatert';
$lang['restoretodefaultsmsg'] = 'Denne handlingen vil gjenopprette malens innhold til dens system standard. Er du sikker p&aring; at du vil fortsette?';
$lang['options'] = 'Valg';
$lang['eventdesc-SearchInitiated'] = 'Sendt n&aring;r et s&oslash;k startes.';
$lang['eventdesc-SearchCompleted'] = 'Sendt n&aring;r et s&oslash;k er ferdig.';
$lang['eventdesc-SearchItemAdded'] = 'Sendt n&aring;r en ny artikkel er indeksert.';
$lang['eventdesc-SearchItemDeleted'] = 'Sendt n&aring;r en artikkel ble slettet fra indeksen.';
$lang['eventdesc-SearchAllItemsDeleted'] = 'Sendt n&aring;r alle artikler er slettet fra indeksen.';
$lang['eventhelp-SearchInitiated'] = '<p>Sendt n&aring;r et s&oslash;k startes.</p>
<h4>Parametere</h4>
<ol>
<li>Tekst det ble s&oslash;kt etter.</li>
</ol>
';
$lang['eventhelp-SearchCompleted'] = '<p>Sendt n&aring;r et s&oslash;k er ferdig.</p>
<h4>Parametere</h4>
<ol>
<li>Tekst det ble s&oslash;kt etter.</li>
<li>Utlisting av gjennomf&oslash;rt s&oslash;k.</li>
</ol>
';
$lang['eventhelp-SearchItemAdded'] = '<p>Sendt n&aring;r en ny artikkel er indeksert.</p>
<h4>Parametere</h4>
<ol>
<li>Modul navn.</li>
<li>ID for artikkelen.</li>
<li>Tilleggs attributt.</li>
<li>Innhold til indeks og tillegg.</li>
</ol>
';
$lang['eventhelp-SearchItemDeleted'] = '<p>Sendt n&aring;r en artikkel ble slettet fra indeksen.</p>
<h4>Parametere</h4>
<ol>
<li>Modul navn.</li>
<li>ID for artikkelen.</li>
<li>Tilleggs attributt.</li>
</ol>
';
$lang['eventhelp-SearchAllItemsDeleted'] = '<p>Sendt n&aring;r et s&oslash;k startes.</p>
<h4>Parametere</h4>
<ul>
<li>Ingen</li>
</ul>
';
$lang['help'] = '	<h3>Hva gj&oslash;r denne?</h3>
	<p>S&oslash;k er en modul for &aring; s&oslash;ke i &#039;core&#039; innhold og bestemte registrerte moduler.  Du skriver inn et ord eller to og den gir deg passende, relevante resultater.</p>
	<h3>Hvordan bruker jeg den?</h3>
<p>The easiest way to use it is with the {search} wrapper tag (wraps the module in a tag, to simplify the syntax). This will insert the module into your template or page anywhere you wish, and display the search form.  The code would look something like: <code>{search}</code></p>
<h4>How do i prevent certain content from being indexed</h4>
<p>The search module will not search any &quot;inactive&quot; pages. However on occasion, when you are using the CustomContent module, or other smarty logic to show different content to different groups of users, it may be advisiable to prevent the entire page from being indexed even when it is live.  To do this include the following tag anywhere on the page <em>&amp;lt;!-- pageAttribute: NotSearchable --&amp;gt;</em> When the search module sees this tag in the page it will not index any content for that page.</p>
<p>The <em>&amp;lt;!-- pageAttribute: NotSearchable --&amp;gt;</em> tag can be placed in the template as well.  if this is done, none of the pages attached to that template will be indexed.  Those pages will be re-indexed if the tag is removed</p>';
$lang['utma'] = '156861353.469342802.1148076752.1154741019.1154870084.25';
$lang['utmz'] = '156861353.1154870084.25.12.utmccn=(referral)|utmcsr=helminikon.no|utmcct=/cms/admin/listmodules.php|utmcmd=referral';
$lang['utmc'] = '156861353';
?>