<?php
$lang['use_or'] = 'Prikaži rezultate koji se poklapaju sa BILO KOJOM rečju';
$lang['param_detailpage'] = 'Koristi se samo za prikaz rezultata sa modula, ovaj parametra dozvoljava preciriranja različitih detaljnih strana za prikaz na osnovu rezultata.  Ovo je korisno, npr. ovo je korisno kod detaljnog prikaza kada želite da stranica ima drugačiji templejt.  <em>(<strong>PAŽNJA:</strong> moduli imaju mogućnost da zaobiđu ovaj parametar.)</em>';
$lang['prompt_resultpage'] = 'Stranica za individualne rezultate za module <em>(Moduli imaju mogućnost da zaobiđu ovo)</em>';
$lang['search_method'] = 'Pregledni Url-ovi i kompatibilnost putem metoda POST, osnovna vrednost je uvek GET, da biste ovo omogućili samo ubacite {search search_method=&quot;post&quot;} ';
$lang['export_to_csv'] = 'Pretvori u CSV';
$lang['prompt_savephrases'] = 'Prati fraze pretrage, ne individualne reči';
$lang['word'] = 'Reč';
$lang['count'] = 'Broj';
$lang['confirm_clearstats'] = 'Da li ste sigurni da želite da trajno uklonite sve statističke podatke?';
$lang['clear'] = 'Ukloni';
$lang['statistics'] = 'Statistika';
$lang['param_action'] = 'Precizirajte mod operacije za ovaj modul.  Prihvatljive vrednosti su &#039;default&#039;, i &#039;keywords&#039;.  Akcija Keywords može se koristiti za generisanje liste reči odvojenih zarezom koje se mogu koristiti za meta tag sa ključnim rečima.';
$lang['param_count'] = 'Kada se koristi sa akcijom &quot;keywords&quot;, ovaj parametar će ograničiti izlaz/prikaz određenog broja reči';
$lang['param_pageid'] = 'Može se koristiti samo sa akcijom &quot;keywords&quot;, ovaj parametar se može koristiti radi povraćaja različitom id-a stranice za rezultate';
$lang['param_inline'] = 'Ako je ukljucen, izlaz sa pretrage će zameniti sadržaj &#039;search&#039; taga u bloku sadržaja.  Koristite ovaj parametar ako Va&scaron; templejt ima vi&scaron;e blokova sadržaja, i želite da rezultati pretrage zamene sadržaj bloka sadržaja';
$lang['param_passthru'] = 'Pass named parameters down to specified modules.  The format of each of these parameters is: &quot;passtru_MODULENAME_PARAMNAME=&#039;value&#039;&quot; i.e.: passthru_News_detailpage=&#039;newsdetails&#039;&quot;';
$lang['param_modules'] = 'Ograniči rezultate pretrage na vrednosti indexirane iz (odjoveno zarezom) liste modula';
$lang['searchsubmit'] = 'Po&scaron;alji';
$lang['search'] = 'Pretraži';
$lang['param_submit'] = 'Tekst koji se nalazi na dugmetu za tretragu';
$lang['param_searchtext'] = 'Tekst koji se nalazi u polju za pretragu';
$lang['prompt_searchtext'] = 'Osnovni tekst za pretragu';
$lang['param_resultpage'] = 'Stranica za prikaz rezultata pretrage.  ovo može biti alias stranice ili njen ID. Koristi se za prikaz različitog templejta.';
$lang['prompt_alpharesults'] = 'Sortiraj rezultate prema abecedi umesto prema težini';
$lang['description'] = 'Modul za pretragu sajta i sadržaja ostalih modula.';
$lang['reindexallcontent'] = 'Re-indexiraj ceo sadržaj';
$lang['reindexcomplete'] = 'Re-indexiranje zavr&scaron;eno!';
$lang['stopwords'] = 'Zaustavi reči';
$lang['searchresultsfor'] = 'Rezultati pretrage za';
$lang['noresultsfound'] = 'Nema rezultata!';
$lang['timetaken'] = 'Vreme trajanja';
$lang['usestemming'] = 'Koristi tok reči (Samo za engleski)';
$lang['searchtemplate'] = 'Templejt za pretragu';
$lang['resulttemplate'] = 'Templejt za rezultate';
$lang['submit'] = 'Po&scaron;alji';
$lang['sysdefaults'] = 'Vrati na osnovne postavke';
$lang['searchtemplateupdated'] = 'Templejt za pretragu je izmenjen';
$lang['resulttemplateupdated'] = 'Templejt za rezultate je izmenjen';
$lang['restoretodefaultsmsg'] = 'Ova operacija će vratiti templejt na njegovo osnovno stanje.  Da li sigurno želite da nastavite?';
$lang['options'] = 'Opcije';
$lang['eventdesc-SearchInitiated'] = '&Scaron;alje se kad se pretraga inicira.';
$lang['eventdesc-SearchCompleted'] = '&Scaron;alje se kad se pratraga zavr&scaron;i.';
$lang['eventdesc-SearchItemAdded'] = '&Scaron;alje se kada se nova stavka indexira.';
$lang['eventdesc-SearchItemDeleted'] = '&Scaron;alje se kad je neka stavka obrisana iz indexa pretrage.';
$lang['eventdesc-SearchAllItemsDeleted'] = '&Scaron;alje se kada se obri&scaron;u svi rezultati iz indexa pretrage.';
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
$lang['utma'] = '156861353.407104975.1290435219.1290435219.1290435219.1';
$lang['utmb'] = '156861353.2.10.1290435219';
$lang['utmc'] = '156861353';
$lang['utmz'] = '156861353.1290435219.1.1.utmcsr=dev.cmsmadesimple.org|utmccn=(referral)|utmcmd=referral|utmcct=/projects/tinymce';
$lang['qca'] = 'P0-171219467-1290435219274';
?>