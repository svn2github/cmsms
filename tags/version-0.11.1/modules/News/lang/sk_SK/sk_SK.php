<?php
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
$lang['rsstemplate'] = 'RSS šablóna';
$lang['selectcategory'] = 'Vybrať kategóriu';
$lang['showchildcategories'] = 'Zobraziť podriadené kategórie';
$lang['sortascending'] = 'Triediť vzostupne';
$lang['startdate'] = 'Začína';
$lang['startrequiresend'] = 'Vloženie dátumu začiatku potrebuje tiež dátum ukončenia';
$lang['submit'] = 'Odoslať';
$lang['summary'] = 'Súhrn';
$lang['summarytemplate'] = 'Šablóna súhrnu';
$lang['title'] = 'Nadpis';
$lang['useexpiration'] = 'Použíť dátum konca';
$lang['helpnumber'] = 'Maximálny počet položiek k zobrazeniu - ponechané prázdne zobrazí všetky položky.';
$lang['helpmakerssbutton'] = 'Vytvoriť tlačítko s odkazom na RSS feed noviniek.';
$lang['helpcategory'] = 'Zobraziť iba položky téjto kategórie a ích podpoložiek. Ponechané prázdne zobrazí všetky kategórie.';
$lang['helpmoretext'] = 'Text pre zobrazenie na konci novinky ak presahuje dĺžku súhrnu. Predvolený je "more..."';
$lang['helpsummarytemplate'] = 'Používať oddelenú šablónu pre súhrn.  Táto šablóna má byť v  modules/News/templates.';
$lang['helpdetailtemplate'] = 'Používať oddelenú šablónu pre detail.  Táto šablóna má býť v  modules/News/templates.';
$lang['helpsortby'] = 'Pole pre triedenie. Možnosti sú: "news_date", "summary", "news_data", "news_category", "news_title".  Predvolené je "news_date".';
$lang['helpsortasc'] = 'Triediť novinky vzostupne.';
$lang['helpdateformat'] = 'Formát zobrazenia dátumu novinky. Toto vychádza z <a href="http://php.net/strftime" target="_blank">strftime</a> funkcie a môže býť použité v šablóne s $entry->formatpostdate.';
$lang['help'] = <<<EOF
	<h3>Čo robí tento modul?</h3>
	<p>Novinky sú modul pre zobrazovanie udalostí na Vašich stránkach, podobne ako blogové zápisy, iba s viacej možnosťami! Po inštalácii modulu je vložená daľšia položka do administračného menu a to Vám umožní vybrať alebo vložiť kategóriu noviniek. Po vytvorení alebo výbere kategórie je zobrazený zoznam noviniek pre túto kategóriu. Odtiaľto môžete pridávať, upravovať alebo mazať novinky konkrétnej kategórie.</p>
	<h3>Bezpečnosť</h3>
	<p>Aby užívateľ môhol pridávať, upravovať alebo mazať novinky, musí mať oprávnenia skupiny 'Modify News'.</p>
	<h3>Ako sa používa?</h3>
	<p>Nejjednoduchšie použitie je vo využití tágu cms_module. Toto vloží modul do šablóny alebo stránky a zobrazí novinky ako si prajete. Samotný kód bude vyzerať podobne: <code>{cms_module module="news" number="5" category="beer"}</code></p>
EOF;
?>
