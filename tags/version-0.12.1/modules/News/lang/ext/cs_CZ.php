<?php
$lang['author'] = 'Autor';
$lang['sysdefaults'] = 'Vrátit výchozí';
$lang['restoretodefaultsmsg'] = 'Tato operace vrátí výchozí nastavení obsahu šablony.  Opravdu to chcete provést?';
$lang['addarticle'] = 'Vložit novinku';
$lang['addcategory'] = 'Vložit kategorii';
$lang['addnewsitem'] = 'Vložit novinku';
$lang['allcategories'] = 'Všechny kategorie';
$lang['allentries'] = 'Všechny položky';
$lang['areyousure'] = 'Opravdu chcete smazat?';
$lang['articles'] = 'Novinky';
$lang['cancel'] = 'Storno';
$lang['category'] = 'Kategorie';
$lang['categories'] = 'Kategorie';
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
$lang['content'] = 'Obsah';
$lang['dateformat'] = '%s není ve správném yyyy-mm-dd hh:mm:ss formátu';
$lang['delete'] = 'Smazat';
$lang['description'] = 'Vložit, upravit nebo smazat novinky';
$lang['detailtemplate'] = 'Šablona detailu';
$lang['displaytemplate'] = 'Zobrazit šablonu';
$lang['edit'] = 'Upravit';
$lang['enddate'] = 'Končí';
$lang['endrequiresstart'] = 'Vložení data konce potřebuje také datum počátku';
$lang['entries'] = '%s položek';
$lang['status'] = 'Stav';
$lang['expiry'] = 'Vyprší';
$lang['filter'] = 'Filtr';
$lang['more'] = 'Více';
$lang['moretext'] = 'Více textu';
$lang['name'] = 'Jméno';
$lang['news'] = 'Novinky';
$lang['news_return'] = 'Návrat';
$lang['newcategory'] = 'Nová kategorie';
$lang['needpermission'] = 'Potřebujete \'%s\' oprávnění pro provedení této funkce.';
$lang['nocategorygiven'] = 'Kategorie nezadána';
$lang['nocontentgiven'] = 'Obsah nezadán';
$lang['noitemsfound'] = '<strong>Žádné</strong> položky nenalezeny v kategorii: %s';
$lang['nopostdategiven'] = 'Datum vložení nezadáno';
$lang['note'] = '<em>Poznámka:</em> Data musí být v \'yyyy-mm-dd hh:mm:ss\' formátu.';
$lang['notitlegiven'] = 'Nadpis nezadán';
$lang['numbertodisplay'] = 'Počet k zobrazení (prázdné zobrazí všechny záznamy)';
$lang['print'] = 'Tisknout';
$lang['postdate'] = 'Datum vložení';
$lang['postinstall'] = 'Nastavte "Modify News" oprávnění uživatelům, kteří budou spravovat novinky.';
$lang['rssfeedtitle'] = 'CMS Made Simple RSS zdroj';
$lang['rsstemplate'] = 'RSS šablona';
$lang['selectcategory'] = 'Vybrat kategorii';
$lang['showchildcategories'] = 'Zobrazit podřízené kategorie';
$lang['sortascending'] = 'Třídit vzestupně';
$lang['startdate'] = 'Začíná';
$lang['startoffset'] = 'Začít zobrazení na n-té položce';
$lang['startrequiresend'] = 'Vložení data začátku potřebuje také datum ukončení';
$lang['submit'] = 'Odeslat';
$lang['summary'] = 'Souhrn';
$lang['summarytemplate'] = 'Šablona souhrnu';
$lang['title'] = 'Nadpis';
$lang['options'] = 'Volby';
$lang['useexpiration'] = 'Použít datum konce';
$lang['showautodiscovery'] = 'Zobrazit Auto-Discovery odkaz zdroje';
$lang['autodiscoverylink'] = 'UR Auto-Discovery zdroje (prázdné pro výchozí)';
$lang['helpnumber'] = 'Maximální počet položek k zobrazení - ponecháno prázdné zobrazí všechny položky.';
$lang['helpstart'] = 'Začít na n-té položce -- prázdné začne na první položce.';
$lang['helpmakerssbutton'] = 'Vytvořit tlačítko s odkazem na RSS feed novinek.';
$lang['helpcategory'] = 'Zobrazit pouze položky této kategorie a jejích podpoložek. Ponecháno prázdné zobrazí všechny kategorie.';
$lang['helpmoretext'] = 'Text pro zobrazení na konci novinky pokud jde přes délku souhrnu. Základní je "more..."';
$lang['helpsummarytemplate'] = 'Používat oddělenou šablonu pro souhrn.  Tato šablona má být v  modules/News/templates.';
$lang['helpdetailtemplate'] = 'Používat oddělenou šablonu pro detail.  Tato šablona má být v  modules/News/templates.';
$lang['helpsortby'] = 'Pole pro třídění. Možnosti jsou: "news_date", "summary", "news_data", "news_category", "news_title".  Defaults to "news_date".';
$lang['helpsortasc'] = 'Třídit novinky vzestupně.';
$lang['helpdetailpage'] = 'Stránka pro zobrazní detailu novinky. Toto může být buď alias nebo id stránky. Umožňuje zobrazit detaily v jiné šabloně než souhrn.';
$lang['helpdateformat'] = 'Formát rozbrazení data novinky. Toto vychází z <a href="http://php.net/strftime" target="_blank">strftime</a> funkce a může být použit v šabloně s $entry->formatpostdate.';
$lang['help'] = '	<h3>Co dělá tento modul?</h3>
	<p>Novinky jsou modul pro zobrazování událostí na Vašich stránkách, podobně jako blogové zápisy, pouze s více možnostmi! Po instalaci modulu je vložena další položka do administračního menu a to Vám umožní vybrat nebo vložit kategorii novinek. Po vytvoření nebo zvolení kategorie je zobrazen seznam novinek pro tuto kategorii. Odsud můžete přidávat, upravovat nebo mazat novinky dané kategorie.</p>
	<h3>Bezpečnost</h3>
	<p>Aby uživatel mohl přidávat, upravovat nebo mazat novinky, musí mít oprávnění skupiny \'Modify News\'.</p>
	<h3>Jak se používá?</h3>
	<p>Nejjednodušší použití je ve využití tagu cms_module. Toto vloží modul do šablony nebo stránky a zobrazí novinky jak si přejete. Samotný kód bude vypadat nějak následovně: <code>{cms_module module="news" number="5" category="beer"}</code></p>';
?>