<?php
$lang['param_inline'] = 'Om satt til sann, vil resultatet fra s&oslash;keskjemaet erstatte det originale innholdet av &#039;s&oslash;k&#039;-taggen i den opprinnelige innholdsblokken. Benytt denne parameteren om din mal har flere innholdsblokker og du ikke vil at resultatet skal erstatte standard innholdsblokk.';
$lang['param_passthru'] = 'Send bestemte parametere ned til spesifiserte moduler. Formatet for hver av disse parameterne er: &quot;passtru_MODULENAME_PARAMNAME=&#039;value&#039;&quot; f.eks.: passthru_News_detailpage=&#039;newsdetails&#039;&quot;';
$lang['param_modules'] = 'Begrens s&oslash;keresultater til verdier indeksert fra den spesifiserte (komma separerte) listen med moduler';
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
<p>Den enkleste m&aring;ten er &aring; bruke den med {search} innpaknings taggen (pakker modulen i en tagg, for &aring; forenkle syntaksen). Dette vil sette modulen inn i din mal eller side hvor du &oslash;nsker, og vise s&oslash;ke skjemaet.  Koden vil se ut som dette: <code>{search}</code></p>
<h4>Hvordan unng&aring;r jeg at noe innhold blir indeksert</h4>
<p>S&oslash;k modulen vill ikke s&oslash;ke i inaktive sider. Men i tilfelle, n&aring;r du benytter CustomContent modulen, eller andre smarty logikker for &aring; vise forskjellig innhold til ulike grupper med brukere, kan det vare anbefalt &aring; hindre hele siden fra &aring; bli indeksert selv om den er live.  For &aring; gj&oslash;re dette  - inkluder f&oslash;lgende tagg hvor som helst p&aring; siden <em>&amp;lt;!-- pageAttribute: NotSearchable --&amp;gt;</em> N&aring;r s&oslash;kemodulen ser denne taggen p&aring; siden vil den ikke indeksere noe innhold fra den siden.</p>
<p>Taggen <em>&amp;lt;!-- pageAttribute: NotSearchable --&amp;gt;</em> kan ogs&aring; plasseres i malen.  Om dette gj&oslash;res, ingen av sidene som er tilknyttet denne malen vil bli indeksert.  Disse sidene vil bli reindeksert om taggen fjernes.</p>';
$lang['changelog'] = '<ul>
<li>1.1 - Original release</li>
<li>1.2 - April 2007 (calguy1000)
  <p>Added the ability to limit results to certain modules,and added the ability to pass parameters through to the various modules to allow different formatting of the output.</p>
  <p>Modified so that the search module could be used in non default content blocks.</p>
</li>
</ul>';
?>