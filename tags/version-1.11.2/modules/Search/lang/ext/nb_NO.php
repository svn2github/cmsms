<?php
$lang['use_or'] = 'Finn resultater som passer ALLE ordene (ANY)';
$lang['param_detailpage'] = 'Kun benyttet for tilsvarende resultater fra modulene, denne parameter tillater &aring; spesifisere en annen detaljside for resultatene. Dette er nyttig om, du f eks. alltid viser detaljvisning p&aring; en side med en annen mal. <em>(<strong>Merk:</strong> moduler har mulighet til &aring; overstyre denne parameteren.)</em>';
$lang['prompt_resultpage'] = 'Side for individuelle modulresultater <em>(Merk moduler kan muligens overstyre dette)</em>';
$lang['search_method'] = 'Vakre url&#039;er st&oslash;tte via Method POST, standard verdi er alltid GET. For &aring; f&aring; dette til &aring; fungere kaller du s&oslash;k opp slik {search search_method=&quot;post&quot;}';
$lang['export_to_csv'] = 'Eksporter til CSV';
$lang['prompt_savephrases'] = 'Spor s&oslash;kefraser, ikke enkle s&oslash;keord';
$lang['word'] = 'Ord';
$lang['count'] = 'Antall';
$lang['confirm_clearstats'] = 'Er du sikker p&aring; at du permanent vil t&oslash;mme statistikken?';
$lang['clear'] = 'T&oslash;m';
$lang['statistics'] = 'Statistikk';
$lang['param_action'] = 'Spesifiser modusen for bruk av modulen. Gyldige verdier er &#039;default&#039;, og &#039;keywords&#039;. Keywords handling kan benyttes for &aring; generere en kommaseparert liste med ord egnet til bruk i en keywords metatagg.';
$lang['param_count'] = 'Benyttet med keywords handlingen vil denne parameteren begrense utdata til et visst antall ord';
$lang['param_pageid'] = 'Denne parameter kan benyttes til &aring; spesifisere en annen pageid &aring; returnere resultatene til';
$lang['param_inline'] = 'Om satt til sann, vil resultatet fra s&oslash;keskjemaet erstatte det originale innholdet av &#039;s&oslash;k&#039;-taggen i den opprinnelige innholdblokken. Benytt denne parameteren om din mal har flere innholdblokker og du ikke vil at resultatet skal erstatte standard innholdsblokk.';
$lang['param_passthru'] = 'Send bestemte parametere ned til spesifiserte moduler. Formatet for hver av disse parameterne er: &quot;passtru_MODULENAME_PARAMNAME=&#039;value&#039;&quot; f.eks.: passthru_News_detailpage=&#039;newsdetails&#039;&quot;';
$lang['param_modules'] = 'Begrens s&oslash;keresultater til verdier indeksert fra den spesifiserte (komma separerte) listen med moduler';
$lang['searchsubmit'] = 'Utf&oslash;r';
$lang['search'] = 'S&oslash;k';
$lang['param_submit'] = 'Tekst &aring; plassere p&aring; Utf&oslash;r-knappen';
$lang['param_searchtext'] = 'Tekst &aring; plassere i s&oslash;ke-boksen';
$lang['prompt_searchtext'] = 'Standard s&oslash;ketekst';
$lang['param_resultpage'] = 'Side &aring; vise s&oslash;keresultater p&aring;.  Dette kan enten v&aelig;re en side-alias eller en id.  Brukes for &aring; tillate s&oslash;keresultater &aring; bli vist med en annen mal enn s&oslash;ke skjemaet';
$lang['prompt_alpharesults'] = 'Sorter resultater alfabetisk i stedet for etter relevans';
$lang['description'] = 'Modul for s&oslash;k p&aring; nettstedet og enkelte modulers innhold.';
$lang['reindexallcontent'] = 'Reindekser alt innhold';
$lang['reindexcomplete'] = 'Reindeksering ferdig!';
$lang['stopwords'] = 'Stopp ord';
$lang['default_stopwords'] = 'jeg, meg, min, megselv, oss, v&aring;r, v&aring;re, selv, deg, din, dine, 
degselv, dereselv, han, hans, hanselv, hun, henne, hennes, 
henneselv, det, dets, detselv, de, dem, dere, deres, demselv, 
hva, hvilken, hvem, dette, det, disse, er, 
var, er, bli, blir, blitt, har, hadde, hatt, gj&oslash;r, gjorde, 
gj&oslash;re, en, og, men, om, eller, fordi, som, til, 
mens, av, p&aring;, av, for, med, om, mot, mellom, i, 
gjennom, mens, f&oslash;r, etter, over, under, til, fra, opp, ned, 
inne, ute, p&aring;, av, over, under, igjen, videre, da, engang, her, 
der, n&aring;r, hvor, hvorfor, hvordan, alle, ingen, begge, hver, f&aring;, flere, 
meste, andre, noen, slik, nei, eller, ikke, bare, egen, samme, s&aring;,
enn, ogs&aring;, veldig';
$lang['prompt_resetstopwords'] = 'Last standard stopp-ord fra spr&aring;k';
$lang['input_resetstopwords'] = 'Last';
$lang['searchresultsfor'] = 'S&oslash;keresultat for';
$lang['noresultsfound'] = 'Ingen treff!';
$lang['timetaken'] = 'S&oslash;ket brukte';
$lang['usestemming'] = 'Bruk ordstammer (kun Engelsk)';
$lang['searchtemplate'] = 'S&oslash;k mal';
$lang['resulttemplate'] = 'Resultat mal';
$lang['submit'] = 'Lagre';
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
<li>Listing av det ferdige resultatet.</li>
</ol>
';
$lang['eventhelp-SearchItemAdded'] = '<p>Sendt n&aring;r en ny artikkel er indeksert.</p>
<h4>Parametere</h4>
<ol>
<li>Modul navn.</li>
<li>ID for artikkelen.</li>
<li>Tilleggsattributt.</li>
<li>Innhold til indeks og tillegg.</li>
</ol>
';
$lang['eventhelp-SearchItemDeleted'] = '<p>Sendt n&aring;r en artikkel ble slettet fra indeksen.</p>
<h4>Parametere</h4>
<ol>
<li>Modul navn.</li>
<li>ID for artikkelen.</li>
<li>Tilleggsattributt.</li>
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
<p>Den enkleste m&aring;ten er &aring; bruke den med {search} innpaknings-taggen (pakker modulen i en tagg, for &aring; forenkle syntaksen). Dette vil sette modulen inn i din mal eller side hvor du &oslash;nsker, og vise s&oslash;ke skjemaet.  Koden vil se ut som dette: <code>{search}</code></p>
<h4>Hvordan unng&aring;r jeg at noe innhold blir indeksert</h4>
<p>S&oslash;k modulen vill ikke s&oslash;ke i inaktive sider. Men i tilfelle, n&aring;r du f.eks. benytter CustomContent modulen, eller andre smarty logikker for &aring; vise forskjellig innhold til ulike grupper med brukere, kan det vare anbefalt &aring; hindre hele siden fra &aring; bli indeksert selv om den er live.  For &aring; gj&oslash;re dette  - inkluder f&oslash;lgende tagg hvor som helst p&aring; siden <em>&amp;lt;!-- pageAttribute: NotSearchable --&amp;gt; (&amp;lt; = tegnet mindre enn, &amp;gt; = tegnet st&oslash;rre enn) </em> N&aring;r s&oslash;kemodulen ser denne taggen p&aring; siden vil den ikke indeksere noe innhold fra den siden.</p>
<p>Taggen <em>&amp;lt;!-- pageAttribute: NotSearchable --&amp;gt;</em> kan ogs&aring; plasseres i malen.  Om dette gj&oslash;res vil ingen av sidene som er tilknyttet denne malen bli indeksert.  Disse sidene vil bli reindeksert om taggen fjernes.</p>';
$lang['qca'] = 'P0-536849115-1307983495210';
$lang['utma'] = '156861353.1228622800.1341066019.1341066019.1341066019.1';
$lang['utmz'] = '156861353.1341066019.1.1.utmcsr=(direct)|utmccn=(direct)|utmcmd=(none)';
$lang['utmc'] = '156861353';
$lang['utmb'] = '156861353.2.9.1341066679190';
?>