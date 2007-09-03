<?php
$lang['uploadscategory'] = 'Nahr&aacute; kateg&oacute;riu';
$lang['title_available_templates'] = 'Dostupn&eacute; &scaron;abl&oacute;ny';
$lang['resettodefault'] = 'Obnoviť v&yacute;chodzie nastavenia';
$lang['title_detail_template'] = 'Editor &scaron;abl&oacute;ny podrobnosti';
$lang['title_summary_template'] = 'Editor &scaron;abl&oacute;ny s&uacute;hrnu';
$lang['prompt_templatename'] = 'N&aacute;zov &scaron;abl&oacute;ny';
$lang['prompt_template'] = 'Zdroj &scaron;abl&oacute;ny';
$lang['title_summary_sysdefault'] = 'V&yacute;chodzia &scaron;abl&oacute;na s&uacute;hrnu ';
$lang['title_detail_sysdefault'] = 'V&yacute;chodzia &scaron;abl&oacute;na podrobnosti';
$lang['info_sysdefault'] = '<em>(v&yacute;chodzia &scaron;abl&oacute;na pre nov&uacute; &scaron;abl&oacute;nu)</em>';
$lang['template'] = '&Scaron;abl&oacute;na';
$lang['prompt_name'] = 'Meno';
$lang['prompt_default'] = 'V&yacute;chodzie';
$lang['prompt_newtemplate'] = 'Vytvoriť nov&uacute; &scaron;abl&oacute;nu';
$lang['help_pagelimit'] = 'Najv&auml;č&scaron;&iacute; počet položiek pre zobrazenie na str&aacute;nke. Ak tento &uacute;daj nie je zadan&yacute;, bud&uacute; zobrazen&eacute; v&scaron;etky vyhovuj&uacute;ce položky. Ak je zadan&yacute; a je dostupn&yacute;ch viacej položiek, ako určuje parameter, bude vytvoren&yacute; text a linky pre umožnenie prech&aacute;dzania v&yacute;sledkami.';
$lang['prompt_page'] = 'Str&aacute;nka';
$lang['firstpage'] = '<<';
$lang['prevpage'] = '<';
$lang['nextpage'] = '>';
$lang['lastpage'] = '>>';
$lang['prompt_of'] = 'z';
$lang['prompt_pagelimit'] = 'Limit str&aacute;nky';
$lang['prompt_sorting'] = 'Zoradiť podľa';
$lang['title_filter'] = 'Filtre';
$lang['published'] = 'Publikovan&eacute;';
$lang['draft'] = 'N&aacute;vrh';
$lang['expired'] = 'Star&eacute;';
$lang['author'] = 'Autor';
$lang['sysdefaults'] = 'Obnoviť v&yacute;chodzie nastavenie';
$lang['restoretodefaultsmsg'] = 'T&aacute;to oper&aacute;cia obnov&iacute; v&yacute;chodz&iacute; obsah &scaron;abl&oacute;n.  Ste si ist&yacute;, že chcete pokračovať?';
$lang['addarticle'] = 'Vložiť pr&iacute;spevok';
$lang['articleadded'] = 'Pr&iacute;spevok bol &uacute;spe&scaron;ne pridan&yacute;.';
$lang['articleupdated'] = 'Pr&iacute;spevok bol &uacute;spe&scaron;ne upraven&yacute;.';
$lang['articledeleted'] = 'Pr&iacute;spevok bol &uacute;spe&scaron;ne zmazan&yacute;.';
$lang['addcategory'] = 'Vložiť kateg&oacute;riu';
$lang['categoryadded'] = 'Kateg&oacute;ria bola &uacute;spe&scaron;ne pridan&aacute;.';
$lang['categoryupdated'] = 'Kateg&oacute;ria bola &uacute;spe&scaron;ne upraven&aacute;.';
$lang['categorydeleted'] = 'Kateg&oacute;ria bola &uacute;spe&scaron;ne zmazan&aacute;.';
$lang['addnewsitem'] = 'Vložiť novinku';
$lang['allcategories'] = 'V&scaron;etky kateg&oacute;rie';
$lang['allentries'] = 'V&scaron;etky položky';
$lang['areyousure'] = 'Skutočne chcete vymazať?';
$lang['articles'] = 'Novinky';
$lang['cancel'] = 'Zru&scaron;iť';
$lang['category'] = 'Kateg&oacute;ria';
$lang['categories'] = 'Kateg&oacute;rie';
$lang['default_category'] = 'V&yacute;chodzia kateg&oacute;ria';
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
<p>- Put the rss feed titile into the lang entries</p>
</li> 
</ul> 
';
$lang['content'] = 'Obsah';
$lang['dateformat'] = '%s nie je v spr&aacute;vnom yyyy-mm-dd hh:mm:ss form&aacute;te';
$lang['delete'] = 'Zmazať';
$lang['description'] = 'Vložiť, upraviť alebo zmazať novinky';
$lang['detailtemplate'] = '&Scaron;abl&oacute;na podrobnost&iacute;';
$lang['detailtemplateupdated'] = 'Upraven&aacute; &scaron;abl&oacute;na podrobnost&iacute; bola &uacute;spe&scaron;ne uložen&aacute; do datab&aacute;zy.';
$lang['displaytemplate'] = 'Zobraziť &scaron;ablonu';
$lang['edit'] = 'Upraviť';
$lang['enddate'] = 'Konč&iacute;';
$lang['endrequiresstart'] = 'Vloženie d&aacute;tumu konca potrebuje tiež d&aacute;tum začiatku';
$lang['entries'] = '%s položiek';
$lang['status'] = 'Stav';
$lang['expiry'] = 'Vypr&scaron;&iacute;';
$lang['filter'] = 'Filter';
$lang['more'] = 'Viac';
$lang['category_label'] = 'Kateg&oacute;ria:';
$lang['author_label'] = 'Publikovan&eacute;:';
$lang['moretext'] = 'Viac textu';
$lang['name'] = 'Meno';
$lang['news'] = 'Novinky';
$lang['news_return'] = 'N&aacute;vrat';
$lang['newcategory'] = 'Nov&aacute; kateg&oacute;rie';
$lang['needpermission'] = 'Potrebujete &#039;%s&#039; opr&aacute;vnenia pre uskutočnenie tejto funkcie.';
$lang['nocategorygiven'] = 'Nebola zadan&aacute; kateg&oacute;ria';
$lang['nocontentgiven'] = 'Nebol zadan&yacute; obsah';
$lang['noitemsfound'] = 'Neboli n&aacute;jdene <strong>žiadne</strong> položky v kateg&oacute;rii: %s';
$lang['nopostdategiven'] = 'Nebol zadan&yacute; d&aacute;tum publikovania';
$lang['note'] = '<em>Pozn&aacute;mka:</em> D&aacute;tumy musia byť v &#039;yyyy-mm-dd hh:mm:ss&#039; form&aacute;te.';
$lang['notitlegiven'] = 'Nebol zadan&yacute; nadpis';
$lang['nonamegiven'] = 'Nebolo zadan&eacute; žiadne meno';
$lang['numbertodisplay'] = 'Zobraziť počet (pr&aacute;zdne pre v&scaron;etky z&aacute;znamy)';
$lang['print'] = 'Tlačiť';
$lang['postdate'] = 'D&aacute;tum publikovania';
$lang['postinstall'] = 'Uistite sa, že použ&iacute;vatelia ktor&iacute; bud&uacute; spravovať novinky, maj&uacute; nastaven&eacute; opr&aacute;vnenie &quot;Modify News&quot;.';
$lang['rssfeedtitle'] = 'CMS Made Simple RSS Obsah';
$lang['rsstemplate'] = 'RSS &scaron;abl&oacute;na';
$lang['selectcategory'] = 'Vybrať kateg&oacute;riu';
$lang['showchildcategories'] = 'Zobraziť podriaden&eacute; kateg&oacute;rie';
$lang['sortascending'] = 'Triediť vzostupne';
$lang['startdate'] = 'Zač&iacute;na';
$lang['startoffset'] = 'Začiatok zobrazovania od N-tej položky';
$lang['startrequiresend'] = 'Vloženie d&aacute;tumu začiatku potrebuje tiež d&aacute;tum ukončenia';
$lang['submit'] = 'Odoslať';
$lang['summary'] = 'S&uacute;hrn';
$lang['summarytemplate'] = '&Scaron;abl&oacute;na s&uacute;hrnu';
$lang['summarytemplateupdated'] = 'S&uacute;hrnn&aacute; &scaron;abl&oacute;na pre novinky bola &uacute;spe&scaron;ne upraven&aacute;.';
$lang['title'] = 'Nadpis';
$lang['options'] = 'Voľby';
$lang['optionsupdated'] = 'Voľby boli &uacute;spe&scaron;ne upraven&eacute;.';
$lang['useexpiration'] = 'Použ&iacute;ť d&aacute;tum konca';
$lang['showautodiscovery'] = 'Show Feed Auto-Discovery Link';
$lang['autodiscoverylink'] = 'Feed Auto-Discovery URL (blank for default)';
$lang['eventdesc-NewsArticleAdded'] = 'Sent when an article is added.';
$lang['eventhelp-NewsArticleAdded'] = '<p>Sent when an article is added.</p>
<h4>Parameters</h4>
<ul>
<li>\&quot;news_id\&quot; - Id of the news article</li>
<li>\&quot;category_id\&quot; - Id of the category for this article</li>
<li>\&quot;title\&quot; - Title of the article</li>
<li>\&quot;content\&quot; - Content of the article</li>
<li>\&quot;summary\&quot; - Summary of the article</li>
<li>\&quot;status\&quot; - Status of the article (&quot;draft&quot; or &quot;publish&quot;)</li>
<li>\&quot;start_time\&quot; - Date the article should start being displayed</li>
<li>\&quot;end_time\&quot; - Date the article should stop being displayed</li>
<li>\&quot;useexp\&quot; - Whether the expiration date should be ignored or not</li>
</ul>
';
$lang['eventdesc-NewsArticleEdited'] = 'Sent when an article is edited.';
$lang['eventhelp-NewsArticleEdited'] = '<p>Sent when an article is edited.</p>
<h4>Parameters</h4>
<ul>
<li>\&quot;news_id\&quot; - Id of the news article</li>
<li>\&quot;category_id\&quot; - Id of the category for this article</li>
<li>\&quot;title\&quot; - Title of the article</li>
<li>\&quot;content\&quot; - Content of the article</li>
<li>\&quot;summary\&quot; - Summary of the article</li>
<li>\&quot;status\&quot; - Status of the article (&quot;draft&quot; or &quot;publish&quot;)</li>
<li>\&quot;start_time\&quot; - Date the article should start being displayed</li>
<li>\&quot;end_time\&quot; - Date the article should stop being displayed</li>
<li>\&quot;useexp\&quot; - Whether the expiration date should be ignored or not</li>
</ul>
';
$lang['eventdesc-NewsArticleDeleted'] = 'Sent when an article is deleted.';
$lang['eventhelp-NewsArticleDeleted'] = '<p>Sent when an article is deleted.</p>
<h4>Parameters</h4>
<ul>
<li>\&quot;news_id\&quot; - Id of the news article</li>
</ul>
';
$lang['eventdesc-NewsCategoryAdded'] = 'Sent when a category is added.';
$lang['eventhelp-NewsCategoryAdded'] = '<p>Sent when a category is added.</p>
<h4>Parameters</h4>
<ul>
<li>\&quot;category_id\&quot; - Id of the news category</li>
<li>\&quot;name\&quot; - Name of the news category</li>
</ul>
';
$lang['eventdesc-NewsCategoryEdited'] = 'Sent when a category is edited.';
$lang['eventhelp-NewsCategoryEdited'] = '<p>Sent when a category is edited.</p>
<h4>Parameters</h4>
<ul>
<li>\&quot;category_id\&quot; - Id of the news category</li>
<li>\&quot;name\&quot; - Name of the news category</li>
<li>\&quot;origname\&quot; - The original name of the news category</li>
</ul>
';
$lang['eventdesc-NewsCategoryDeleted'] = 'Sent when a category is deleted.';
$lang['eventhelp-NewsCategoryDeleted'] = '<p>Sent when a category is deleted.</p>
<h4>Parameters</h4>
<ul>
<li>\&quot;category_id\&quot; - Id of the deleted category </li>
<li>\&quot;name\&quot; - Name of the deleted category</li>
</ul>
';
$lang['helpnumber'] = 'Maxim&aacute;lny počet položiek k zobrazeniu - ponechan&eacute; pr&aacute;zdne zobraz&iacute; v&scaron;etky položky.';
$lang['helpstart'] = 'Začiatok zobrazovania od N-tej položky -- ponechan&eacute; pr&aacute;zdne začne zobrazovať od prvej položky';
$lang['helpmakerssbutton'] = 'Vytvoriť tlač&iacute;tko s odkazom na RSS feed noviniek.';
$lang['helpcategory'] = 'Zobraziť iba položky t&eacute;jto kateg&oacute;rie a &iacute;ch podpoložiek. Ponechan&eacute; pr&aacute;zdne zobraz&iacute; v&scaron;etky kateg&oacute;rie.';
$lang['helpmoretext'] = 'Text pre zobrazenie na konci novinky ak presahuje dĺžku s&uacute;hrnu. Predvolen&yacute; je &quot;more...&quot;';
$lang['helpsummarytemplate'] = 'Použ&iacute;vať oddelen&uacute; &scaron;abl&oacute;nu pre s&uacute;hrn.  T&aacute;to &scaron;abl&oacute;na m&aacute; byť v  modules/News/templates.';
$lang['helpdetailtemplate'] = 'Použ&iacute;vať oddelen&uacute; &scaron;abl&oacute;nu pre detail.  T&aacute;to &scaron;abl&oacute;na m&aacute; b&yacute;ť v  modules/News/templates.';
$lang['helpsortby'] = 'Pole pre triedenie. Možnosti s&uacute;: &quot;news_date&quot;, &quot;summary&quot;, &quot;news_data&quot;, &quot;news_category&quot;, &quot;news_title&quot;.  Predvolen&eacute; je &quot;news_date&quot;.';
$lang['helpsortasc'] = 'Triediť novinky vzostupne.';
$lang['helpdetailpage'] = 'Page to display News details in.  This can either be a page alias or an id. Used to allow details to be displayed in a different template from the summary.';
$lang['helpdateformat'] = 'Form&aacute;t zobrazenia d&aacute;tumu pr&iacute;spevku. Vych&aacute;dza z <a href=&quot;http://php.net/strftime&quot; target=&quot;_blank&quot;>strftime</a> funkcie a m&ocirc;že byť použit&yacute; v &scaron;abl&oacute;ne s $entry->formatpostdate. V&yacute;chodz&iacute;m je %x, čo predstavuje v&yacute;chodz&iacute; form&aacute;t d&aacute;tumu pre n&aacute;rodn&eacute; prostredie servera.';
$lang['helpshowarchive'] = 'Uk&aacute;ž star&eacute; pr&iacute;spevky.';
$lang['helpbrowsecat'] = 'Uk&aacute;že prech&aacute;dzateľn&yacute; zoznam kateg&oacute;ri&iacute;.';
$lang['help'] = '	<h3>Čo rob&iacute; tento modul?</h3>
	<p>Novinky s&uacute; modul pre zobrazovanie udalost&iacute; na Va&scaron;ich str&aacute;nkach, podobne ako blogov&eacute; z&aacute;pisy, iba s viacej možnosťami! Po in&scaron;tal&aacute;cii modulu je vložen&aacute; daľ&scaron;ia položka do administračn&eacute;ho menu a to V&aacute;m umožn&iacute; vybrať alebo vložiť kateg&oacute;riu noviniek. Po vytvoren&iacute; alebo v&yacute;bere kateg&oacute;rie je zobrazen&yacute; zoznam noviniek pre t&uacute;to kateg&oacute;riu. Odtiaľto m&ocirc;žete prid&aacute;vať, upravovať alebo mazať novinky konkr&eacute;tnej kateg&oacute;rie.</p>
	<h3>Bezpečnosť</h3>
	<p>Aby už&iacute;vateľ m&ocirc;hol prid&aacute;vať, upravovať alebo mazať novinky, mus&iacute; mať opr&aacute;vnenia skupiny &#039;Modify News&#039;.</p>
	<h3>Ako sa použ&iacute;va?</h3>
	<p>Nejjednoduch&scaron;ie použitie je vo využit&iacute; t&aacute;gu cms_module. Toto vlož&iacute; modul do &scaron;abl&oacute;ny alebo str&aacute;nky a zobraz&iacute; novinky ako si prajete. Samotn&yacute; k&oacute;d bude vyzerať podobne: <code>{cms_module module=&quot;news&quot; number=&quot;5&quot; category=&quot;beer&quot;}</code></p>';
$lang['utmz'] = '156861353.1181812047.2.2.utmccn=(referral)|utmcsr=ckfalange.freehostia.com|utmcct=/admin/login.php|utmcmd=referral';
$lang['utma'] = '156861353.1097635883.1180700520.1180700520.1181812047.2';
?>