<?php
$lang['author'] = 'Författare';
$lang['sysdefaults'] = 'Återställ standardinställningar';
$lang['restoretodefaultsmsg'] = 'Detta återställer mallarna till standardinställningarna. Är du säker på att du vill fortsätta?';
$lang['addarticle'] = 'Skapa artikel';
$lang['addcategory'] = 'Skapa kategori';
$lang['addnewsitem'] = 'Skapa nyhetsartikel';
$lang['allcategories'] = 'Alla kategorier';
$lang['allentries'] = 'Alla artiklar';
$lang['areyousure'] = 'Är du säker på att du vill ta bort?';
$lang['articles'] = 'Artiklar';
$lang['cancel'] = 'Avbryt';
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
</li> 
</ul> 
';
$lang['content'] = 'Innehåll';
$lang['dateformat'] = '%s är inget giltigt yyyy-mm-dd hh:mm:ss format';
$lang['delete'] = 'Ta bort';
$lang['description'] = 'Lägg till, redigera och ta bort nyhetsartiklar';
$lang['detailtemplate'] = 'Innehållsmall';
$lang['displaytemplate'] = 'Visa mall';
$lang['edit'] = 'Redigera';
$lang['enddate'] = 'Slutdatum';
$lang['endrequiresstart'] = 'Ett stoppdatum kräver också att man anger ett startdatum';
$lang['entries'] = '%s artiklar';
$lang['status'] = 'Status';
$lang['expiry'] = 'Upphörande';
$lang['filter'] = 'Filter';
$lang['more'] = 'Mera';
$lang['moretext'] = 'Mera text';
$lang['name'] = 'Namn';
$lang['news'] = 'Nyheter';
$lang['news_return'] = 'Tillbaka';
$lang['newcategory'] = 'Ny kategori';
$lang['needpermission'] = 'Du behöver rättigheten \'%s\' för att göra detta.';
$lang['nocategorygiven'] = 'Ingen kategori angiven';
$lang['nocontentgiven'] = 'Inget innehåll valt';
$lang['noitemsfound'] = 'Hittade <strong>inga</strong> artiklar i category: %s';
$lang['nopostdategiven'] = 'Inget publiceringsdatum angivet';
$lang['note'] = '<em>OBS:</em> Datum måste vara på formatet \'yyyy-mm-dd hh:mm:ss\'.';
$lang['notitlegiven'] = 'Ingen titel angiven';
$lang['numbertodisplay'] = 'Max antal nyheter som ska visas (om tomt visas alla)';
$lang['print'] = 'Skriv ut';
$lang['postdate'] = 'Publiceringsdatum';
$lang['postinstall'] = 'Kom ihåg att sätta rättigheten "Modify News" för de användare som ska administrera nyhetsartiklar.';
$lang['rssfeedtitle'] = 'CMS Made Simple RSS Feed';
$lang['rsstemplate'] = 'RSS-mall';
$lang['selectcategory'] = 'Välj kategori';
$lang['showchildcategories'] = 'Visa underkategorier';
$lang['sortascending'] = 'Sortera stigande';
$lang['startdate'] = 'Startdatum';
$lang['startoffset'] = 'Börja visa från nyhet nummer X';
$lang['startrequiresend'] = 'Ett startdatum kräver också att man anger ett stoppdatum';
$lang['submit'] = 'Lägg till';
$lang['summary'] = 'Sammandrag';
$lang['summarytemplate'] = 'Mall för sammandrag';
$lang['title'] = 'Titel';
$lang['options'] = 'Inställningar';
$lang['useexpiration'] = 'Använd stoppdatum';
$lang['showautodiscovery'] = 'Visa Auto Discovery-länk för RSS-ström';
$lang['autodiscoverylink'] = 'URL för Auto Discovery-ström (lämna tom för standard)';
$lang['helpnumber'] = 'Max antal artiklar att visa (om tomt visas alla artiklar).';
$lang['helpstart'] = 'Börja från nyhet nummer X -- om lämnas tom visas från första nyheten.';
$lang['helpmakerssbutton'] = 'Skapar en klickbar knapp som länkar till en RSS-ström för nyheterna.';
$lang['helpcategory'] = 'Visar endast nyheter i vald kategori. Använd * efter namnet för att visa underkategorier. Flera kategorier kan visas, använd kommatecken mellan varje. Om ingen specifik kategori anges så visas alla nyheter.';
$lang['helpmoretext'] = 'Text som visas efter en artikels sammanfattning. Ett klick på den visar hela nyhetsartikeln. Om inget anges så visas "more...".';
$lang['helpsummarytemplate'] = 'Använd en specifik mall för att styra nyhetssammanfattningen. Mallen måste finnas i mappen modules/News/templates.';
$lang['helpdetailtemplate'] = 'Använd en specifik mall för att styra huvudinnehållet i artikeln. Mallen måste finnas i mappen modules/News/templates.';
$lang['helpsortby'] = 'Anger efter vilket fält som sortering ska ske. Alternativen är: "news_date", "summary", "news_data", "news_category", "news_title".  "news_date" används om inget annat anges.';
$lang['helpsortasc'] = 'Sortera artiklar i stigande datumordning i stället för fallande.';
$lang['helpdetailpage'] = 'Sida att visa detaljerna för nyhetsartikeln på. Detta kan antingen vara ett sidalias eller ett id. Används för att detaljer ska kunna visas med en annan mall än sammanfattningen.';
$lang['helpdateformat'] = 'Format för datumet när artikeln publicerades. Detta baseras på <a href="http://php.net/strftime" target="_blank">strftime</a>-funktionen och kan användas i din mall, enligt <code>$entry->formatpostdate</code>.';
$lang['help'] = '	<h3>Vad gör den här modulen?</h3>
	<p>News är en modul med vars hjälp man kan hantera och visa nyhetsartiklar på sin webbplats. Man kan jämföra modulen med weblog (blogg), fast nyhetsmodulen har fler funktioner. När modulen installeras så utökas också administrationsgränssnittet med verktyg för att hantera nyhetsartiklar. Man ges möjlighet att skapa egna nyhetskategorier så att olika typer av nyheter kan placeras på olika ställen på webbplatsen.</p>
	<h3>Säkerhet</h3>
	<p>En användare måste tillhöra gruppen \'Modify News\' för att kunna lägga till, redigera eller ta bort nyhetsartiklar.</p>
	<h3>Hur använder man modulen?</h3>
	<p>Enklast är att använda tagen cms_module. Med dess hjälp kan man lägga till och visa nyheter på valfri plats i en mall eller en sida. Koden för detta kan till exempel se ut så här: <code>{cms_module module="news" number="5" category="pilsner"}</code></p>';
?>