<?php
$lang['author'] = 'Auteur';
$lang['sysdefaults'] = 'Terug naar standaard waardes';
$lang['restoretodefaultsmsg'] = 'Deze actie herstelt de inhoud van het sjabloon naar de standaard waardes. Weet u zeker dat u door wilt gaan?';
$lang['addarticle'] = 'Voeg artikel toe';
$lang['addcategory'] = 'Voeg categorie toe';
$lang['addnewsitem'] = 'Voeg nieuwsitem toe';
$lang['allcategories'] = 'Alle categorien';
$lang['allentries'] = 'Alle toevoegingen';
$lang['areyousure'] = 'Weet u zeker dat u wilt verwijderen?';
$lang['articles'] = 'Artikelen';
$lang['cancel'] = 'Annuleren';
$lang['category'] = 'Categorie';
$lang['categories'] = 'Categorie&euml;n';
$lang['changelog'] = '<ul>
<li>
<p>Versie: 1.0</p>
<p>This module is a hacked and extended Versie of <em>Ted Kulp&#039;s</em> News module.  I simply added another field to the database, and some more code to make that field worl.... I also re-cleaned the code a bit, so it was a little easier to read, other than that, it&#039;s Ted&#039;s code.</p>
</li> 
<li> 
<p>Versie: 1.1</p> 
<p>Added the ability to set an automatic expiry date from a pulldown, moved the category selection, and on the main page you now filter the entries you want to see.</p> 
</li> 
<li> 
<p>Versie: 1.2</p> 
<p>Added summary, no_anchor and length parameters.  In summary mode links are made to the real articles, tags are stripped, and links are insreted to the news page and the specific news item.</p> 
</li> 
<li> 
<p>Versie: 1.3</p> 
<p>Minor cosmetic changes</p> 
</li> 
<li> 
<p>Versie 1.5</p> 
<p>Merged into the trunk News module</p> 
</li> 
<li> 
<p>Versie 1.6</p> 
<p>Added pagination, and moved the add button to the top (calguy)</p>
</li>
<li>
<p>Versie 2.0</p>
<p>Re-written to use smarty templates, and several other significant improvements</p>
</li>
<li>
<p>Versie 2.0.1</p>
<p>Minor tweaks to the RSS output to allow it to work correctly on different browsers, and to support non alpha numeric characters in the description.</p> 
</li> 
<li>
<p>Versie 2.0.2</p>
<p>- Add a &quot;start&quot; parameter to specify a start offset for news items</p>
<p>- The template tabs now have a &quot;reset to default&quot; button on them</p>
<p>- Start menu item is now required, but end date is optional when useexpirydate is on, 
<p>- Change the permissions model significantly, The &quot;Modify News&quot; permission is only for articles and categories. &quot;Modify Templates&quot; permission is required to edit the templates, and &quot;Modify Site Preferences&quot; is required to edit the options.</p> 
<p>- Put the rss feed titile into the lang entries</p>
</li> 
<p>Versie 2.0.3</p>
<p>- Added the ability to track the original author of an article</p>
<li>
</ul>
</ul> 
';
$lang['content'] = 'Inhoud';
$lang['dateformat'] = '%s niet in een geldig yyyy-mm-dd hh:mm:ss formaat';
$lang['delete'] = 'Verwijder';
$lang['description'] = 'Voeg toe, verander en verwijder nieuwsitems';
$lang['detailtemplate'] = 'Details Template';
$lang['displaytemplate'] = 'Bekijk Template';
$lang['edit'] = 'Verander';
$lang['enddate'] = 'Eind datum';
$lang['endrequiresstart'] = 'Het toevoegen van een einddatum vereist ook een begindatum';
$lang['entries'] = '%s Items';
$lang['status'] = 'Status';
$lang['expiry'] = 'Verval';
$lang['filter'] = 'Filter';
$lang['more'] = 'Meer';
$lang['moretext'] = 'Meer tekst';
$lang['name'] = 'Naam';
$lang['news'] = 'Nieuws';
$lang['news_return'] = 'Terug';
$lang['newcategory'] = 'Nieuwe categorie';
$lang['needpermission'] = 'U heeft &#039;%s&#039; rechten nodig om deze functie te gebruiken.';
$lang['nocategorygiven'] = 'Geen categorie ingevuld';
$lang['nocontentgiven'] = 'Geen inhoud ingevuld';
$lang['noitemsfound'] = '<strong>Geen</strong> items gevonden voor de categorie: %s';
$lang['nopostdategiven'] = 'Geen post datum ingevuld';
$lang['note'] = '<em>Opgelet:</em> Datums in het volgende formaat opgeven &#039;yyyy-mm-dd hh:mm:ss&#039; .';
$lang['notitlegiven'] = 'Geen titel ingevuld';
$lang['numbertodisplay'] = 'Aantal weer te geven (leeg is alles weergeven)';
$lang['print'] = 'Afdrukken';
$lang['postdate'] = 'Post Datum';
$lang['postinstall'] = 'Zorg ervoor om de toestemming &quot;wijzigen van het Nieuws&quot; op gebruikers te plaatsen die de punten van het Nieuws zullen beheren.';
$lang['rssfeedtitle'] = 'CMS Made Simple RSS Feed';
$lang['rsstemplate'] = 'RSS Sjabloon';
$lang['selectcategory'] = 'Selecteer categorie';
$lang['showchildcategories'] = 'Toon onderliggende categorie&euml;n';
$lang['sortascending'] = 'Sorteer oplopend';
$lang['startdate'] = 'Begin datum';
$lang['startoffset'] = 'Begin tonen bij het n-de item';
$lang['startrequiresend'] = 'Het toevoegen van een begindatum vereist ook een einddatum';
$lang['submit'] = 'Verstuur';
$lang['summary'] = 'Samenvatting';
$lang['summarytemplate'] = 'Samenvatting Template';
$lang['title'] = 'Titel';
$lang['options'] = 'Opties';
$lang['useexpiration'] = 'Gebruik verloop datum';
$lang['showautodiscovery'] = 'Toon Feed Auto-Discovery Link';
$lang['autodiscoverylink'] = 'Toon Auto-Discovery URL (leeglaten voor standaardwaarde)';
$lang['helpnumber'] = 'Maximum aantal te tonen items =- geen waarde laat alle items zien.';
$lang['helpstart'] = 'Begin bij het n-de item -- geen waarde start bij het eerste item.';
$lang['helpmakerssbutton'] = 'Maak een knop die verwijst naar een RSS feed van de nieuws items.';
$lang['helpcategory'] = 'Toon alleen items van die categorie. Gebruik * na de naam om onderligende items te zien. Meerdere categorie&euml;n scheiden met een komma. Geen waarde laat alle categorie&euml;n zien.';
$lang['helpmoretext'] = 'Tekst die wordt getoont aan het eind van een nieuws item als de samenvatting te lang is. Standaard &quot;meer...&quot;';
$lang['helpsummarytemplate'] = 'Gebruik een ander sjabloon voor het tonen van het samengevatte bericht. Deze moet bestaan in modules/News/templates.';
$lang['helpdetailtemplate'] = 'Gebruik een ander sjabloon voor het tonen van het volledige bericht. Deze moet bestaan in modules/News/templates.';
$lang['helpsortby'] = 'Veld om op te sorteren. Opties zijn: &quot;news_date&quot;, &quot;summary&quot;, &quot;news_data&quot;, &quot;news_category&quot;, &quot;news_title&quot;.  Standaard is het &quot;news_date&quot;.';
$lang['helpsortasc'] = 'Sorteer nieuws items in oplopende volgorde in plaats van aflopend.';
$lang['helpdetailpage'] = 'Pagina om details van het nieuws te tonen. Dit kan een pagina alias of id zijn. Gebruik om details in een ander sjabloon te tonen dan de samenvatting.';
$lang['helpdateformat'] = 'Formaat om het item plaats datum te tonen.  Gebaseerd op de <a href=&quot;http://php.net/strftime&quot; target=&quot;_blank&quot;>strftime</a> functie en kan gebruikt worden in uw sjabloon met $entry->formatpostdate.  Standaard is het %x, wat het formaat is dat de server gebruikt.';
$lang['help'] = '	<h3>Wat dit doet?</h3>
	<p>News is een module om nieuwsberichten op de pagina&#039;s te tonen, ongeveer als een weblog stijl, maar dan met meer mogelijkheden! When the module is installed, a News admin page is added to the bottom menu that will allow you to select or add a news category.  Once a news category is created or selected, a list of news items for that category will be displayed.  From here, you can add, edit or delete news items for that category.</p>
	<h3>Beveiliging</h3>
	<p>The user must belong to a group with the &#039;Modify News&#039; permission in order to add, edit, or delete News entries.</p>
	<h3>Hoe gebruik ik het?</h3>
	<p>The easiest way to use it is in conjunction with the cms_module tag.  This will insert the module into your template or page anywhere you wish, and display news items.  The code would look something like: <code>{cms_module module=&quot;news&quot; number=&quot;5&quot; category=&quot;beer&quot;}</code></p>
	<h3>What Parameters Exist?</h3>
	<p>
	<ul>
	<li><em>(optional)</em> number=&quot;5&quot; - Maximum number of items to display =- leaving empty will show all items</li>
	<li><em>(optional)</em> makerssbutton=&quot;true&quot; - Make a button to link to an RSS feed of the News items.</li>
	<li><em>(optional)</em> category=&quot;category&quot; - Only display items for that category and it&#039;s children.  leaving empty, will show all categories</li>
	<li><em>(optional)</em> moretext=&quot;more...&quot; - Text to display at the end of a news item if it goes over the summary length.  Defaults to &quot;more...&quot;.</li>
	<li><em>(optional}</em> summarytemplate=&quot;sometemplate.tpl&quot; - Use a separate template for displaying the article summary.  It have to live in modules/News/templates.
	<li><em>(optional}</em> detailtemplate=&quot;sometemplate.tpl&quot; - Use a separate template for displaying the article detail.  It have to live in modules/News/templates.
	<li><em>(optional)</em> sortasc=&quot;true&quot; - Sort news items in ascending date order rather than descending.</li>
	</ul>
	</p>';
?>