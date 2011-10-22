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
$lang['searchresultsfor'] = 'Rezultati pretrage za';
$lang['noresultsfound'] = 'Nema rezultata!';
$lang['timetaken'] = 'Vreme trajanja';
$lang['usestemming'] = 'Detektuj osnovni oblik reči (samo za engleski, <em>&#039;Word Stemming&#039;</em>)';
$lang['searchtemplate'] = '&Scaron;ablon forme pretragu';
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
$lang['utma'] = '156861353.1442176616.1313878285.1313878285.1313878285.1';
$lang['utmz'] = '156861353.1313878285.1.1.utmcsr=forum.cmsmadesimple.org|utmccn=(referral)|utmcmd=referral|utmcct=/viewtopic.php';
$lang['qca'] = 'P0-258035289-1289209208569';
$lang['utmb'] = '156861353.1.10.1313878285';
$lang['utmc'] = '156861353';
?>