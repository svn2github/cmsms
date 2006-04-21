<?php
$lang['author'] = 'Forfatter';
$lang['sysdefaults'] = 'Nulstil til standardværdier';
$lang['restoretodefaultsmsg'] = 'Denne handling vil genoprette skabeloner til deres standardform. Er du sikker på de vil fortsætte?';
$lang['addarticle'] = 'Tilføj artikel';
$lang['addcategory'] = 'Tilføj kategori';
$lang['addnewsitem'] = 'Tilføj nyhed';
$lang['allcategories'] = 'Alle katagorier';
$lang['allentries'] = 'Alle indlæg';
$lang['areyousure'] = 'Er du sikker på dette skal slettes?';
$lang['articles'] = 'Artikler';
$lang['cancel'] = 'Fortryd';
$lang['category'] = 'Kategori';
$lang['categories'] = 'Kategorier';
$lang['changelog'] = '<ul>
<li>
<p>Version: 1.0</p>
<p>This module is a hacked and extended version of <em>Ted Kulp\'s</em> News module.  I simply added another field to the database, and some more code to make that field worl.... I also re-cleaned the code a bit, so it was a little easier to read, other than that, it\'s Ted\'s code.</p>
</li> 
<li> 
<p>Version: 1.1</p> 
<p>Added the ability to set an automatic expiry date from a pulldown, moved the category selection, and on the main page you now filter the entries you want to see.</p> 
</li> 
<li> 
<p>Version: 1.2</p> 
<p>Added summary, no_anchor and length parameters.  In summary mode links are made to the real articles, tags are stripped, and links are insreted to the news page and the specific news item.</p> 
</li> 
<li> 
<p>Version: 1.3</p> 
<p>Minor cosmetic changes</p> 
</li> 
<li> 
<p>Version 1.5</p> 
<p>Merged into the trunk News module</p> 
</li> 
<li> 
<p>Version 1.6</p> 
<p>Added pagination, and moved the add button to the top (calguy)</p>
</li>
<li>
<p>Version 2.0</p>
<p>Re-written to use smarty templates, and several other significant improvements</p>
</li>
<li>
<p>Version 2.0.1</p>
<p>Minor tweaks to the RSS output to allow it to work correctly on different browsers, and to support non alpha numeric characters in the description.</p> 
</li> 
<li>
<p>Version 2.0.2</p>
<p>- Add a "start" parameter to specify a start offset for news items</p>
<p>- The template tabs now have a "reset to default" button on them</p>
<p>- Start menu item is now required, but end date is optional when useexpirydate is on, 
<p>- Change the permissions model significantly, The "Modify News" permission is only for articles and categories. "Modify Templates" permission is required to edit the templates, and "Modify Site Preferences" is required to edit the options.</p> 
<p>- Put the rss feed titile into the lang entries</p>
</li> 
<p>Version 2.0.3</p>
<p>- Added the ability to track the original author of an article</p>
<li>
</ul>
</ul> 
';
$lang['content'] = 'Indhold';
$lang['dateformat'] = '%s er ikke gyldigt ifølge ����-mm-dd tt:mm:ss formatet';
$lang['delete'] = 'Slet';
$lang['description'] = 'Tilføj, redigér og slet nyheder';
$lang['detailtemplate'] = 'Detaljeret skabelon';
$lang['displaytemplate'] = 'Vis skabelon';
$lang['edit'] = 'Redigér';
$lang['enddate'] = 'Slut dato';
$lang['endrequiresstart'] = 'Angivelse af en slutdato kræver en startdato';
$lang['entries'] = '%s Indlæg';
$lang['status'] = 'Status';
$lang['expiry'] = 'Udløb';
$lang['filter'] = 'Filter';
$lang['more'] = 'Mere';
$lang['moretext'] = 'Mere tekst';
$lang['name'] = 'Navn';
$lang['news'] = 'Nyheder';
$lang['news_return'] = 'Tilbage';
$lang['newcategory'] = 'Ny kategori';
$lang['needpermission'] = 'Du skal have tilladelsen \'%s\' for at kunne udføre den funktion.';
$lang['nocategorygiven'] = 'Ingen kategori angivet';
$lang['nocontentgiven'] = 'Intet indhold angivet';
$lang['noitemsfound'] = '<strong>Ingen</strong> nyheder fundet for kategorien: %s';
$lang['nopostdategiven'] = 'Ingen oprettelsesdato angivet';
$lang['note'] = '<em>Bem�rk:</em> Datoer skal angives i formatet: \'����-mm-dd tt:mm:ss\' format.';
$lang['notitlegiven'] = 'Ingen title angivet';
$lang['numbertodisplay'] = 'Antal der skal vises (blank viser alle nyheder)';
$lang['print'] = 'Udskriv';
$lang['postdate'] = 'Oprettelsesdato';
$lang['postinstall'] = 'Kontroll�r at tilladelsen "Modify News" er sl�et til for brugere der skal kunne administrere Nyheder.';
$lang['rssfeedtitle'] = 'CMS Made Simple RSS Feed';
$lang['rsstemplate'] = 'RSS Skabelon';
$lang['selectcategory'] = 'Vælg kategori';
$lang['showchildcategories'] = 'Vis under kategorier';
$lang['sortascending'] = 'Sortér stigende';
$lang['startdate'] = 'Start dato';
$lang['startoffset'] = 'Begynd visning ved det n\'te element';
$lang['startrequiresend'] = 'Angivelse af en start dato kræver en slutdato';
$lang['submit'] = 'Send';
$lang['summary'] = 'Resumé';
$lang['summarytemplate'] = 'Resumé skabelon';
$lang['title'] = 'Titel';
$lang['options'] = 'Options';
$lang['useexpiration'] = 'Benyt udløbsdato';
$lang['showautodiscovery'] = 'Vis Feed Auto-Discovery Link';
$lang['autodiscoverylink'] = 'Feed Auto-Discovery URL (blank for default)';
$lang['helpnumber'] = 'Det maksimale antal nyheder der skal vises -- alle nyheder vises hvis feltet er blankt.';
$lang['helpstart'] = 'Start ved det n\'te element - hvis intet er angivet startes ved det første element.';
$lang['helpmakerssbutton'] = 'Vis en knap der er et link til en RSS-kilde for nyhederne.';
$lang['helpcategory'] = 'Vis kun nyheder for denne kategori og den underkategorier. Hvis feltet er blankt vises alle kategorier.';
$lang['helpmoretext'] = 'Tekst der skal vises efter en nyhed hvis l�ngden af denne overskrider resum� længden. Standard er "more..."';
$lang['helpsummarytemplate'] = 'Benyt en seperat skabelon til at vise en nyhedsartikel som resumé. Den skal befinde i modules/News/templates.';
$lang['helpdetailtemplate'] = 'Benyt en seperat skabelon til at vi en nyhedsartikel i detaljer. Den skal befinde sig i modules/News/templates.';
$lang['helpsortby'] = 'Hvilket felt der skal sorteres efter. Muligheder er: "news_date", "summary", "news_data", "news_category", "news_title". Standard er "news_date".';
$lang['helpsortasc'] = 'Sortér nyheder i stigende rækkefølge i stedet for faldende.';
$lang['helpdetailpage'] = 'Side som nyhedsdetaljer skal vises i. Det kan være et side-alias eller et side-id. Bruges til at tillade detaljer at blive vist i en anden skabelon end resumé\'et.';
$lang['helpdateformat'] = 'Formatet som nyhedens post-dato skal vises med. Denne er baseret p� <a href="http://php.net/strftime" target="_blank">strftime</a> funktionene og kan bruges i din skabelon med $entry->formatpostdate.';
$lang['help'] = '	<h3>Hvad gør dette modul?</h3>
	<p>News er et modul til at vise nyheder på din side, på sammen måde som blogs, men med flere funktioner! Når modulet er installeret er der tilføjet et News admin menupunkt til administrations menuen som giver dig mulighed for at vælge eller tilføje en nyheds kategori. Så snart en kategori er tilføjet eller valgt vises en liste over nyheder for denne katagori. Herfra kan du tilføjet, redigere eller slette nyheder for kategorien.</p>
	<h3>Sikkerhed</h3>
	<p>Brugeren skal tilhøre en gruppe med \'Modify News\' tilladelsen for at kunne tilføje, redigere og slette nyheder.</p>
	<h3>Hvordan bruger jeg modulet?</h3>
	<p>Den nemmeste måde er at bruge modulet ved hjælp af cms_module tag\'en. Dette vil indsætte modulet i din skabelon eller side lige hvor du vil ha det, og vise nyheder her. Koden ser ud som noget i denne stil: <code>{cms_module module="news" number="5" category="�l"}</code></p>	
	</p>';
?>