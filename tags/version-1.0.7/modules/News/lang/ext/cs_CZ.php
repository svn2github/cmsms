<?php
$lang['author'] = 'Autor';
$lang['sysdefaults'] = 'Vr&aacute;tit v&yacute;choz&iacute;';
$lang['restoretodefaultsmsg'] = 'Tato operace vr&aacute;t&iacute; v&yacute;choz&iacute; nastaven&iacute; obsahu &scaron;ablony.  Opravdu to chcete prov&eacute;st?';
$lang['addarticle'] = 'Vložit novinku';
$lang['articleadded'] = 'Z&aacute;znam &uacute;spě&scaron;ně vložen.';
$lang['articleupdated'] = 'Z&aacute;znam &uacute;spě&scaron;ně aktualizov&aacute;n.';
$lang['articledeleted'] = 'Z&aacute;znam &uacute;spě&scaron;ně smaz&aacute;n.';
$lang['addcategory'] = 'Vložit kategorii';
$lang['categoryadded'] = 'Kategorie &uacute;spě&scaron;ně vložena.';
$lang['categoryupdated'] = 'Kategorie &uacute;spě&scaron;ně aktualizov&aacute;na.';
$lang['categorydeleted'] = 'Kategorie &uacute;spě&scaron;ně smaz&aacute;na.';
$lang['addnewsitem'] = 'Vložit novinku';
$lang['allcategories'] = 'V&scaron;echny kategorie';
$lang['allentries'] = 'V&scaron;echny položky';
$lang['areyousure'] = 'Opravdu chcete smazat?';
$lang['articles'] = 'Novinky';
$lang['cancel'] = 'Storno';
$lang['category'] = 'Kategorie';
$lang['categories'] = 'Kategorie';
$lang['default_category'] = 'V&yacute;choz&iacute; kategorie';
$lang['changelog'] = '<ul>
<li>
<p>Version: 1.0</p>
<p>This module is a hacked and extended version of <em>Ted Kulp&#039;s</em> News module.  I simply added another field to the database, and some more code to make that field worl.... I also re-cleaned the code a bit, so it was a little easier to read, other than that, it&#039;s Ted&#039;s code.</p>
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
<p>- Add a &quot;start&quot; parameter to specify a start offset for news items</p>
<p>- The template tabs now have a &quot;reset to default&quot; button on them</p>
<p>- Start menu item is now required, but end date is optional when useexpirydate is on, 
<p>- Change the permissions model significantly, The &quot;Modify News&quot; permission is only for articles and categories. &quot;Modify Templates&quot; permission is required to edit the templates, and &quot;Modify Site Preferences&quot; is required to edit the options.</p> 
</li> 
</ul> 
';
$lang['content'] = 'Obsah';
$lang['dateformat'] = '%s nen&iacute; ve spr&aacute;vn&eacute;m yyyy-mm-dd hh:mm:ss form&aacute;tu';
$lang['delete'] = 'Smazat';
$lang['description'] = 'Vložit, upravit nebo smazat novinky';
$lang['detailtemplate'] = '&Scaron;ablona detailu';
$lang['detailtemplateupdated'] = 'Upraven&aacute; &scaron;ablona Detailu &uacute;spě&scaron;ně vložena do datab&aacute;ze.';
$lang['displaytemplate'] = 'Zobrazit &scaron;ablonu';
$lang['edit'] = 'Upravit';
$lang['enddate'] = 'Konč&iacute;';
$lang['endrequiresstart'] = 'Vložen&iacute; data konce potřebuje tak&eacute; datum poč&aacute;tku';
$lang['entries'] = '%s položek';
$lang['status'] = 'Stav';
$lang['expiry'] = 'Vypr&scaron;&iacute;';
$lang['filter'] = 'Filtr';
$lang['more'] = 'V&iacute;ce';
$lang['category_label'] = 'Kategorie:';
$lang['author_label'] = 'Zaslal:';
$lang['moretext'] = 'V&iacute;ce textu';
$lang['name'] = 'Jm&eacute;no';
$lang['news'] = 'Novinky';
$lang['news_return'] = 'N&aacute;vrat';
$lang['newcategory'] = 'Nov&aacute; kategorie';
$lang['needpermission'] = 'Potřebujete &#039;%s&#039; opr&aacute;vněn&iacute; pro proveden&iacute; t&eacute;to funkce.';
$lang['nocategorygiven'] = 'Kategorie nezad&aacute;na';
$lang['nocontentgiven'] = 'Obsah nezad&aacute;n';
$lang['noitemsfound'] = '<strong>Ž&aacute;dn&eacute;</strong> položky nenalezeny v kategorii: %s';
$lang['nopostdategiven'] = 'Datum vložen&iacute; nezad&aacute;no';
$lang['note'] = '<em>Pozn&aacute;mka:</em> Data mus&iacute; b&yacute;t v &#039;yyyy-mm-dd hh:mm:ss&#039; form&aacute;tu.';
$lang['notitlegiven'] = 'Nadpis nezad&aacute;n';
$lang['nonamegiven'] = 'Nezad&aacute;no jm&eacute;no';
$lang['numbertodisplay'] = 'Počet k zobrazen&iacute; (pr&aacute;zdn&eacute; zobraz&iacute; v&scaron;echny z&aacute;znamy)';
$lang['print'] = 'Tisknout';
$lang['postdate'] = 'Datum vložen&iacute;';
$lang['postinstall'] = 'Nastavte &quot;Modify News&quot; opr&aacute;vněn&iacute; uživatelům, kteř&iacute; budou spravovat novinky.';
$lang['rssfeedtitle'] = 'CMS Made Simple RSS zdroj';
$lang['rsstemplate'] = 'RSS &scaron;ablona';
$lang['selectcategory'] = 'Vybrat kategorii';
$lang['showchildcategories'] = 'Zobrazit podř&iacute;zen&eacute; kategorie';
$lang['sortascending'] = 'Tř&iacute;dit vzestupně';
$lang['startdate'] = 'Zač&iacute;n&aacute;';
$lang['startoffset'] = 'Zač&iacute;t zobrazen&iacute; na n-t&eacute; položce';
$lang['startrequiresend'] = 'Vložen&iacute; data zač&aacute;tku potřebuje tak&eacute; datum ukončen&iacute;';
$lang['submit'] = 'Odeslat';
$lang['summary'] = 'Souhrn';
$lang['summarytemplate'] = '&Scaron;ablona souhrnu';
$lang['summarytemplateupdated'] = '&Scaron;ablona souhrnu novinek &uacute;spě&scaron;ně aktualizov&aacute;na.';
$lang['title'] = 'Nadpis';
$lang['options'] = 'Volby';
$lang['optionsupdated'] = 'Volby &uacute;spě&scaron;ně aktualizov&aacute;ny.';
$lang['useexpiration'] = 'Použ&iacute;t datum konce';
$lang['showautodiscovery'] = 'Zobrazit Auto-Discovery odkaz zdroje';
$lang['autodiscoverylink'] = 'URL Auto-Discovery zdroje (pr&aacute;zdn&eacute; pro v&yacute;choz&iacute;)';
$lang['eventdesc-NewsArticleAdded'] = 'Odeslat po vložen&iacute; položky.';
$lang['eventhelp-NewsArticleAdded'] = '<p>Odeslat po vložen&iacute; položky.</p>
<h4>Parametry</h4>
<ul>
<li>\&quot;news_id\&quot; - Id položky</li>
<li>\&quot;category_id\&quot; - Id kategorie t&eacute;to položky</li>
<li>\&quot;title\&quot; - N&aacute;zev položky</li>
<li>\&quot;content\&quot; - Obsah položky</li>
<li>\&quot;summary\&quot; - Souhrn položky</li>
<li>\&quot;status\&quot; - Stav položky (&quot;draft&quot; nebo &quot;publish&quot;)</li>
<li>\&quot;start_time\&quot; - Datum, od kdy ma b&yacute;t položka zobrazov&aacute;na</li>
<li>\&quot;end_time\&quot; - Datum, od kdy se m&aacute; položka přestat zobrazovat</li>
</ul>
';
$lang['eventdesc-NewsArticleEdited'] = 'Odeslat po editaci položky.';
$lang['eventhelp-NewsArticleEdited'] = '<p>Odeslat po editaci položky.</p>
<h4>Parametry</h4>
<ul>
<li>\&quot;news_id\&quot; - Id položky</li>
<li>\&quot;category_id\&quot; - Id kategorie t&eacute;to položky</li>
<li>\&quot;title\&quot; - N&aacute;zev položky</li>
<li>\&quot;content\&quot; - Obsah položky</li>
<li>\&quot;summary\&quot; - Souhrn položky</li>
<li>\&quot;status\&quot; - Stav položky (&quot;draft&quot; nebo &quot;publish&quot;)</li>
<li>\&quot;start_time\&quot; - Datum, od kdy ma b&yacute;t položka zobrazov&aacute;na</li>
<li>\&quot;end_time\&quot; - Datum, od kdy se m&aacute; položka přestat zobrazovat</li>
</ul>';
$lang['eventdesc-NewsArticleDeleted'] = 'Odeslat po smaz&aacute;n&iacute; položky.';
$lang['eventhelp-NewsArticleDeleted'] = '<p>Odeslat po smaz&aacute;n&iacute; položky.</p>
<h4>Parametry</h4>
<ul>
<li>\&quot;news_id\&quot; - Id položky</li>
</ul>
';
$lang['eventdesc-NewsCategoryAdded'] = 'Odeslat po vložen&iacute; kategorie.';
$lang['eventhelp-NewsCategoryAdded'] = '<p>Odeslat po vložen&iacute; kategorie.</p>
<h4>Parametry</h4>
<ul>
<li>\&quot;category_id\&quot; - Id kategorie</li>
<li>\&quot;name\&quot; - Jm&eacute;no kategorie</li>
</ul>
';
$lang['eventdesc-NewsCategoryEdited'] = 'Odeslat po &uacute;pravě kategorie.';
$lang['eventhelp-NewsCategoryEdited'] = '<p>Odeslat po &uacute;pravě kategorie.</p>
<h4>Parametry</h4>
<ul>
<li>\&quot;category_id\&quot; - Id kategorie</li>
<li>\&quot;name\&quot; - Jm&eacute;no kategorie</li>
</ul>
';
$lang['eventdesc-NewsCategoryDeleted'] = 'Odeslat po smaz&aacute;n&iacute; kategorie.';
$lang['eventhelp-NewsCategoryDeleted'] = '<p>Odeslat po smaz&aacute;n&iacute; kategorie.</p>
<h4>Parametry</h4>
<ul>
<li>\&quot;category_id\&quot; - Id kategorie</li>
</ul>
';
$lang['helpnumber'] = 'Maxim&aacute;ln&iacute; počet položek k zobrazen&iacute; - ponech&aacute;no pr&aacute;zdn&eacute; zobraz&iacute; v&scaron;echny položky.';
$lang['helpstart'] = 'Zač&iacute;t na n-t&eacute; položce -- pr&aacute;zdn&eacute; začne na prvn&iacute; položce.';
$lang['helpmakerssbutton'] = 'Vytvořit tlač&iacute;tko s odkazem na RSS feed novinek.';
$lang['helpcategory'] = 'Zobrazit pouze položky t&eacute;to kategorie. Pro zobrazen&iacute; podpoložek použijte * za jm&eacute;nem. V&iacute;ce kategori&iacute; může b&yacute;t odděleno č&aacute;rkou.Ponech&aacute;no pr&aacute;zdn&eacute; zobraz&iacute; v&scaron;echny kategorie.';
$lang['helpmoretext'] = 'Text pro zobrazen&iacute; na konci novinky pokud jde přes d&eacute;lku souhrnu. Z&aacute;kladn&iacute; je &quot;more...&quot;';
$lang['helpsummarytemplate'] = 'Použ&iacute;vat oddělenou &scaron;ablonu pro souhrn.  Tato &scaron;ablona m&aacute; b&yacute;t v  modules/News/templates.';
$lang['helpdetailtemplate'] = 'Použ&iacute;vat oddělenou &scaron;ablonu pro detail.  Tato &scaron;ablona m&aacute; b&yacute;t v  modules/News/templates.';
$lang['helpsortby'] = 'Pole pro tř&iacute;děn&iacute;. Možnosti jsou: &quot;news_date&quot;, &quot;summary&quot;, &quot;news_data&quot;, &quot;news_category&quot;, &quot;news_title&quot;.  Defaults to &quot;news_date&quot;.';
$lang['helpsortasc'] = 'Tř&iacute;dit novinky vzestupně.';
$lang['helpdetailpage'] = 'Str&aacute;nka pro zobrazn&iacute; detailu novinky. Toto může b&yacute;t buď alias nebo id str&aacute;nky. Umožňuje zobrazit detaily v jin&eacute; &scaron;abloně než souhrn.';
$lang['helpdateformat'] = 'Form&aacute;t rozbrazen&iacute; data novinky. Toto vych&aacute;z&iacute; z <a href=&quot;http://php.net/strftime&quot; target=&quot;_blank&quot;>strftime</a> funkce a může b&yacute;t použit v &scaron;abloně s $entry->formatpostdate. V&yacute;choz&iacute; je %x, což je form&aacute;t data dle locale na serveru.';
$lang['helpshowarchive'] = 'Zobrazit pouze vypr&scaron;el&eacute; novinky.';
$lang['helpbrowsecat'] = 'Zobrazit prohl&iacute;žiteln&yacute; seznam kategori&iacute;.';
$lang['help'] = '	<h3>Co děl&aacute; tento modul?</h3>
	<p>Novinky jsou modul pro zobrazov&aacute;n&iacute; ud&aacute;lost&iacute; na Va&scaron;ich str&aacute;nk&aacute;ch, podobně jako blogov&eacute; z&aacute;pisy, pouze s v&iacute;ce možnostmi! Po instalaci modulu je vložena dal&scaron;&iacute; položka do administračn&iacute;ho menu a to V&aacute;m umožn&iacute; vybrat nebo vložit kategorii novinek. Po vytvořen&iacute; nebo zvolen&iacute; kategorie je zobrazen seznam novinek pro tuto kategorii. Odsud můžete přid&aacute;vat, upravovat nebo mazat novinky dan&eacute; kategorie.</p>
	<h3>Bezpečnost</h3>
	<p>Aby uživatel mohl přid&aacute;vat, upravovat nebo mazat novinky, mus&iacute; m&iacute;t opr&aacute;vněn&iacute; skupiny &#039;Modify News&#039;.</p>
	<h3>Jak se použ&iacute;v&aacute;?</h3>
	<p>Nejjednodu&scaron;&scaron;&iacute; použit&iacute; je ve využit&iacute; tagu cms_module. Toto vlož&iacute; modul do &scaron;ablony nebo str&aacute;nky a zobraz&iacute; novinky jak si přejete. Samotn&yacute; k&oacute;d bude vypadat nějak n&aacute;sledovně: <code>{cms_module module=&quot;news&quot; number=&quot;5&quot; category=&quot;beer&quot;}</code></p>';
$lang['utmz'] = '156861353.1171218573.11.2.utmccn=(referral)|utmcsr=dev.cmsmadesimple.org|utmcct=/projects/czech/|utmcmd=referral';
$lang['utma'] = '156861353.659783585.1156179136.1171216770.1171218573.11';
$lang['utmb'] = '156861353';
$lang['utmc'] = '156861353';
?>