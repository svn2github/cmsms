<?php
$lang['sysdefaults'] = 'Nastaviť defaultné hodnoty';
$lang['restoretodefaultsmsg'] = 'Táto operácia nastaví šablony do defaulnách nastavení.  Ste si istý, že chcete pokračovať?';
$lang['addarticle'] = 'Vložiť novinku';
$lang['addcategory'] = 'Vložiť kategóriu';
$lang['addnewsitem'] = 'Vložiť novinku';
$lang['allcategories'] = 'Všetky kategorie';
$lang['allentries'] = 'Všetky položky';
$lang['areyousure'] = 'Skutočne chcete vymazať?';
$lang['articles'] = 'Novinky';
$lang['cancel'] = 'Storno';
$lang['category'] = 'Kategoria';
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
<p>- Put the rss feed titile into the lang entries</p>
</li> 
</ul> 
';
$lang['content'] = 'Obsah';
$lang['dateformat'] = '%s nie je v správnom yyyy-mm-dd hh:mm:ss formáte';
$lang['delete'] = 'Zmazať';
$lang['description'] = 'Vložiť, upraviť alebo zmazať novinky';
$lang['detailtemplate'] = 'Šablóna detailu';
$lang['displaytemplate'] = 'Zobraziť šablonu';
$lang['edit'] = 'Upraviť';
$lang['enddate'] = 'Končí';
$lang['endrequiresstart'] = 'Vloženie dátumu konca potrebuje tiež dátum začiatku';
$lang['entries'] = '%s položiek';
$lang['status'] = 'Stav';
$lang['expiry'] = 'Vyprší';
$lang['filter'] = 'Filter';
$lang['more'] = 'Viac';
$lang['moretext'] = 'Viac textu';
$lang['name'] = 'Meno';
$lang['news'] = 'Novinky';
$lang['news_return'] = 'Návrat';
$lang['newcategory'] = 'Nová kategórie';
$lang['needpermission'] = 'Potrebujete \'%s\' oprávnenia pre uskutočnenie tejto funkcie.';
$lang['nocategorygiven'] = 'Kategória nezadaná';
$lang['nocontentgiven'] = 'Obsah nezadaný';
$lang['noitemsfound'] = '<strong>Žiadne</strong> položky nenájdené v kategórii: %s';
$lang['nopostdategiven'] = 'Dátum vloženia nezadaný';
$lang['note'] = '<em>Poznámka:</em> Dátumy musia byť v \'yyyy-mm-dd hh:mm:ss\' formáte.';
$lang['notitlegiven'] = 'Nadpis nezadaný';
$lang['numbertodisplay'] = 'Počet k zobrazeniu (nevyplnené zobrazí všetky záznamy)';
$lang['print'] = 'Tlačiť';
$lang['postdate'] = 'Dátum vloženia';
$lang['postinstall'] = 'Nastavte "Modify News" oprávnenia užívateľom, ktorí budú spravovať novinky.';
$lang['rssfeedtitle'] = 'CMS Made Simple RSS Obsah';
$lang['rsstemplate'] = 'RSS šablóna';
$lang['selectcategory'] = 'Vybrať kategóriu';
$lang['showchildcategories'] = 'Zobraziť podriadené kategórie';
$lang['sortascending'] = 'Triediť vzostupne';
$lang['startdate'] = 'Začína';
$lang['startoffset'] = 'Začiatok zobrazovania od N-tej položky';
$lang['startrequiresend'] = 'Vloženie dátumu začiatku potrebuje tiež dátum ukončenia';
$lang['submit'] = 'Odoslať';
$lang['summary'] = 'Súhrn';
$lang['summarytemplate'] = 'Šablóna súhrnu';
$lang['title'] = 'Nadpis';
$lang['options'] = 'Voľby';
$lang['useexpiration'] = 'Použíť dátum konca';
$lang['showautodiscovery'] = 'Show Feed Auto-Discovery Link';
$lang['autodiscoverylink'] = 'Feed Auto-Discovery URL (blank for default)';
$lang['helpnumber'] = 'Maximálny počet položiek k zobrazeniu - ponechané prázdne zobrazí všetky položky.';
$lang['helpstart'] = 'Začiatok zobrazovania od N-tej položky -- ponechané prázdne začne zobrazovať od prvej položky';
$lang['helpmakerssbutton'] = 'Vytvoriť tlačítko s odkazom na RSS feed noviniek.';
$lang['helpcategory'] = 'Zobraziť iba položky téjto kategórie a ích podpoložiek. Ponechané prázdne zobrazí všetky kategórie.';
$lang['helpmoretext'] = 'Text pre zobrazenie na konci novinky ak presahuje dĺžku súhrnu. Predvolený je "more..."';
$lang['helpsummarytemplate'] = 'Používať oddelenú šablónu pre súhrn.  Táto šablóna má byť v  modules/News/templates.';
$lang['helpdetailtemplate'] = 'Používať oddelenú šablónu pre detail.  Táto šablóna má býť v  modules/News/templates.';
$lang['helpsortby'] = 'Pole pre triedenie. Možnosti sú: "news_date", "summary", "news_data", "news_category", "news_title".  Predvolené je "news_date".';
$lang['helpsortasc'] = 'Triediť novinky vzostupne.';
$lang['helpdetailpage'] = 'Page to display News details in.  This can either be a page alias or an id. Used to allow details to be displayed in a different template from the summary.';
$lang['helpdateformat'] = 'Formát zobrazenia dátumu novinky. Toto vychádza z <a href="http://php.net/strftime" target="_blank">strftime</a> funkcie a môže býť použité v šablóne s $entry->formatpostdate.';
$lang['help'] = '	<h3>Čo robí tento modul?</h3>
	<p>Novinky sú modul pre zobrazovanie udalostí na Vašich stránkach, podobne ako blogové zápisy, iba s viacej možnosťami! Po inštalácii modulu je vložená daľšia položka do administračného menu a to Vám umožní vybrať alebo vložiť kategóriu noviniek. Po vytvorení alebo výbere kategórie je zobrazený zoznam noviniek pre túto kategóriu. Odtiaľto môžete pridávať, upravovať alebo mazať novinky konkrétnej kategórie.</p>
	<h3>Bezpečnosť</h3>
	<p>Aby užívateľ môhol pridávať, upravovať alebo mazať novinky, musí mať oprávnenia skupiny \'Modify News\'.</p>
	<h3>Ako sa používa?</h3>
	<p>Nejjednoduchšie použitie je vo využití tágu cms_module. Toto vloží modul do šablóny alebo stránky a zobrazí novinky ako si prajete. Samotný kód bude vyzerať podobne: <code>{cms_module module="news" number="5" category="beer"}</code></p>';
?>