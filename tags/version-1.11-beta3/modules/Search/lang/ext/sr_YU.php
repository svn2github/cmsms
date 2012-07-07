<?php
$lang['use_or'] = 'Prikaži rezultate koji se poklapaju sa BILO KOJOM rečju';
$lang['param_detailpage'] = 'Koristi se samo za prikaz rezultata sa modula, ovaj parametra dozvoljava preciriranja različitih detaljnih strana za prikaz na osnovu rezultata.  Ovo je korisno, npr. ovo je korisno kod detaljnog prikaza kada želite da stranica ima drugačiji templejt.  <em>(<strong>PAŽNJA:</strong> moduli imaju mogućnost da zaobiđu ovaj parametar.)</em>';
$lang['prompt_resultpage'] = 'Stranica za rezultate pojedinih modula <em>(moduli imaju mogućnost da ovo promene)</em>';
$lang['search_method'] = 'Pregledni Url-ovi i kompatibilnost putem metoda POST, osnovna vrednost je uvek GET, da biste ovo omogućili samo ubacite {search search_method=&quot;post&quot;} ';
$lang['export_to_csv'] = 'Izvezi u CSV formatu';
$lang['prompt_savephrases'] = 'Beleži tražene fraze, a ne individualne reči';
$lang['word'] = 'Reč';
$lang['count'] = 'Broj';
$lang['confirm_clearstats'] = 'Da li ste sigurni da želite da trajno obri&scaron;ete sve statističke podatke?';
$lang['clear'] = 'Obri&scaron;i';
$lang['statistics'] = 'Statistika';
$lang['param_action'] = 'Specificirajte način rada ovog modula. Prihvatljive vrednosti su &#039;default&#039;, i &#039;keywords&#039;. Opcija &quot;keywords&quot; može se koristiti za generisanje liste reči, odvojenih zarezom, koje se mogu koristiti u &quot;keywords&quot; meta tagu.';
$lang['param_count'] = 'Kada se koristi sa akcijom &quot;keywords&quot;, ovaj parametar će ograničiti dužinu rezultata na specificirani broj reči';
$lang['param_pageid'] = 'Ovaj parametar ima efekta samo uz &quot;keywords&quot; i može se koristiti za specificiranje drugačijeg ID stranice za koju je potrebno vratiti rezultat';
$lang['param_inline'] = 'Ako je ova opcija uključena, rezultat pretrage će zameniti originalni sadržaj &#039;search&#039; taga u provbitnom bloku sadržaja.  Koristite ovaj parametar ako Va&scaron; &Scaron;ablon ima vi&scaron;e blokova sadržaja, i ne želite da rezultati pretrage zamene sadržaj glavnog bloka sadržaja';
$lang['param_passthru'] = 'Prosleđuje navedene parametre specificiranim modulima.  Format svakog od ovih parametara je sledeći: &quot;passtru_<strong>MODULENAME</strong>_<strong>PARAMNAME</strong>=&#039;<strong>value</strong>&#039;&quot; npr.: passthru_News_detailpage=&#039;newsdetails&#039;&quot;';
$lang['param_modules'] = 'Ograniči rezultate pretrage na vrednosti indeksirane iz navedene (odjovene zarezom) liste modula';
$lang['searchsubmit'] = 'Po&scaron;alji';
$lang['search'] = 'Pretraga';
$lang['param_submit'] = 'Tekst na dugmetu za tretragu';
$lang['param_searchtext'] = 'Tekst u polju za pretragu';
$lang['prompt_searchtext'] = 'Podrazumevani tekst za pretragu';
$lang['param_resultpage'] = 'Stranica za prikaz rezultata pretrage. Ovo može biti alijas stranice ili njen ID. Koristi se da bi se omogućilo prikazivanje rezultata po &Scaron;ablonu različitom od &Scaron;ablona forme za pretragu';
$lang['prompt_alpharesults'] = 'Sortiraj rezultate prema abecedi umesto prema relevantnosti';
$lang['description'] = 'Modul za pretragu sajta i sadržaja ostalih modula.';
$lang['reindexallcontent'] = 'Ponovo indeksiraj ceo sadržaj';
$lang['reindexcomplete'] = 'Ponovno indeksiranje je zavr&scaron;eno';
$lang['stopwords'] = 'Ignori&scaron;i reči';
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
than, too, very, &amp;, com, www, quote, lt, gt, http, =';
$lang['prompt_resetstopwords'] = 'Učitati podrazumevane reči koje treba blokirati iz srpskog jezika';
$lang['input_resetstopwords'] = 'Učitaj';
$lang['searchresultsfor'] = 'Rezultati pretrage za';
$lang['noresultsfound'] = 'Nema rezultata!';
$lang['timetaken'] = 'Proteklo vreme';
$lang['usestemming'] = 'Detektuj osnovni oblik reči (samo za engleski, <em>&#039;Word Stemming&#039;</em>)';
$lang['searchtemplate'] = '&Scaron;ablon forme za pretragu';
$lang['resulttemplate'] = '&Scaron;ablon za prikaz rezultata';
$lang['submit'] = 'Po&scaron;alji';
$lang['sysdefaults'] = 'Vrati na osnovne postavke';
$lang['searchtemplateupdated'] = '&Scaron;ablon forme za pretragu je izmenjen';
$lang['resulttemplateupdated'] = '&Scaron;ablon za prokazivanje rezultata je izmenjen';
$lang['restoretodefaultsmsg'] = 'Ova operacija će vratiti &Scaron;ablon na njegovo osnovno stanje.  Da li sigurno želite da nastavite?';
$lang['options'] = 'Opcije';
$lang['eventdesc-SearchInitiated'] = '&Scaron;alje se kad se pretraga inicira.';
$lang['eventdesc-SearchCompleted'] = '&Scaron;alje se kad se pratraga zavr&scaron;i.';
$lang['eventdesc-SearchItemAdded'] = '&Scaron;alje se kada se indeksira nova stavka.';
$lang['eventdesc-SearchItemDeleted'] = '&Scaron;alje se kad je neka stavka obrisana iz indeksa.';
$lang['eventdesc-SearchAllItemsDeleted'] = '&Scaron;alje se kada se obri&scaron;e čitav indeks.';
$lang['eventhelp-SearchInitiated'] = '<p>&Scaron;alje se prilikom počinjanja pretrage.</p>
<h4>Parametri</h4>
<ol>
<li>Tekst koji je tražen.</li>
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
$lang['help'] = '<h3>&Scaron;ta ovo radi?</h3>
<p>Pretražuje sadržaj sajta, skupa sa sadržajem nekih registrovanih modula. Unesete reč ili dve i modul Vam vraća relevantne rezultate.</p>
<h3>Kako se koristi?</h3>
<p>Najjednostavnije je preko {search} taga (&quot;umotava&quot; modul u kratak tag, kako bi pojednostavio sintaksu). Ovim će u Va&scaron; &scaron;ablon ili stranicu biti umetnut modul i biti prikazana forma za pretraživanje.  Kod bi izgledao otprilike ovako: <code>{search}</code></p>
<h4>Kako da sprečim da određeni sadržaj bude indeksiran</h4>
<p>Modul neće pretaživati na &quot;neaktivnim&quot; stranicama. Međutim, s vremena na vreme, prilikom kori&scaron;ćenja CustomContent modula, ili drugu Smarty logiku kako biste prikazali različiti sadržaj različitim korisnicima, bilo bi mudro sprečiti da se indeksira čitav sadržaj takve aktivne stranice.  Da biste to postigli, umetnite sledeći tag bilo gde na stranici:  <em><!-- pageAttribute: NotSearchable --></em> Kada modul detektuje ovaj tag bilo gdje na stranici, neće indeksirati njen sadržaj iako je aktivna.</p>
<p><em><!-- pageAttribute: NotSearchable --></em> tag može biti umetnut i u &Scaron;ablon.  Ukoliko to učinite, ni jedna stranica vezana za taj &Scaron;ablon neće biti indeksirana za pretragu.  Stranice će biti reindeksirane nakon uklanjanja taga.</p>
';
$lang['utma'] = '156861353.442583343.1341176366.1341176366.1341176366.1';
$lang['utmz'] = '156861353.1341176366.1.1.utmccn=(direct)|utmcsr=(direct)|utmcmd=(none)';
$lang['utmb'] = '156861353';
$lang['utmc'] = '156861353';
?>