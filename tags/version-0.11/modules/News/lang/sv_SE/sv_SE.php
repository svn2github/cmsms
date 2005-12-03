<?php
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
$lang['expiry'] = 'Upphörande';
$lang['filter'] = 'Filter';
$lang['more'] = 'Mera';
$lang['moretext'] = 'Mera text';
$lang['name'] = 'Namn';
$lang['news'] = 'Nyheter';
$lang['newcategory'] = 'Ny kategori';
$lang['needpermission'] = 'Du behöver rättigheten \'%s\' för att göra detta.';
$lang['nocategorygiven'] = 'Ingen kategori angedd';
$lang['nocontentgiven'] = 'Inget innehåll valt';
$lang['noitemsfound'] = 'Hittade <strong>inga</strong> artiklar i category: %s';
$lang['nopostdategiven'] = 'Inget publiceringsdatum angivet';
$lang['note'] = '<em>OBS:</em> Datum måste vara på formatet \'yyyy-mm-dd hh:mm:ss\'.';
$lang['notitlegiven'] = 'Ingen titel har angetts';
$lang['numbertodisplay'] = 'Max antal nyheter som ska visas (om tomt visas alla)';
$lang['print'] = 'Skriv ut';
$lang['postdate'] = 'Publiceringsdatum';
$lang['postinstall'] = 'Kom ihåg att sätta rättigheten "Modify News" för de användare som ska administrera nyhetsartiklar.';
$lang['rsstemplate'] = 'RSS-mall';
$lang['selectcategory'] = 'Välj kategori';
$lang['showchildcategories'] = 'Visa underkategorier'; 
$lang['sortascending'] = 'Sortera stigande';
$lang['startdate'] = 'Startdatum';
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
$lang['helpmakerssbutton'] = 'Skapar en klickbar knapp som länkar till en RSS-ström för nyheterna.';
$lang['helpcategory'] = 'Visar endast nyheter i vald kategori. Använd * efter namnet för att visa underkategorier. Flera kategorier kan visas, använd kommatecken mellan varje. Om ingen specifik kategori anges så visas alla nyheter.';
$lang['helpmoretext'] = 'Text som visas efter en artikels sammanfattning. Ett klick på den visar hela nyhetsartikeln. Om inget anges så visas "more...".';
$lang['helpsummarytemplate'] = 'Använd en specifik mall för att styra nyhetssammanfattningen. Mallen måste finnas i mappen modules/News/templates.';
$lang['helpdetailtemplate'] = 'Använd en specifik mall för att styra huvudinnehållet i artikeln. Mallen måste finnas i mappen modules/News/templates.';
$lang['helpsortby'] = 'Anger efter vilket fält som sortering ska ske. Alternativen är: "news_date", "summary", "news_data", "news_category", "news_title".  "news_date" används om inget annat anges.';
$lang['helpsortasc'] = 'Sortera artiklar i stigande datumordning i stället för fallande.';
$lang['helpdateformat'] = 'Format för datumet när artikeln publicerades. Detta baseras på <a href="http://php.net/strftime" target="_blank">strftime</a>-funktionen och kan användas i din mall, enligt <code>$entry->formatpostdate</code>.';
$lang['help'] = <<<EOF
	<h3>Vad gör den här modulen?</h3>
	<p>News är en modul med vars hjälp man kan hantera och visa nyhetsartiklar på sin webbplats. Man kan jämföra modulen med weblog (blogg), fast nyhetsmodulen har fler funktioner. När modulen installeras så utökas också administrationsgränssnittet med verktyg för att hantera nyhetsartiklar. Man ges möjlighet att skapa egna nyhetskategorier så att olika typer av nyheter kan placeras på olika ställen på webbplatsen.</p>
	<h3>Säkerhet</h3>
	<p>En användare måste tillhöra gruppen 'Modify News' för att kunna lägga till, redigera eller ta bort nyhetsartiklar.</p>
	<h3>Hur använder man modulen?</h3>
	<p>Enklast är att använda tagen cms_module. Med dess hjälp kan man lägga till och visa nyheter på valfri plats i en mall eller en sida. Koden för detta kan till exempel se ut så här: <code>{cms_module module="news" number="5" category="pilsner"}</code></p>
EOF;
?>