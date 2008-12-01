<?php
$lang['author'] = 'Egilea';
$lang['sysdefaults'] = 'Lehenetsiak berrezarri';
$lang['restoretodefaultsmsg'] = 'Eragiketa honek sistemak lehenetsitakotara berrezarriko ditu txantiloiaren edukiak. Zihur al zaude aurrera jarraitu nahi duzula?';
$lang['addarticle'] = 'Artikulua Gehitu';
$lang['articleadded'] = 'Artikulua zuzenki gehitua izan da.';
$lang['articleupdated'] = 'Artikulua zuzenki eguneratua izan da.';
$lang['articledeleted'] = 'Artikulua zuzenki ezabatua izan da.';
$lang['addcategory'] = 'Kategoria Gehitu';
$lang['categoryadded'] = 'Kategoria zuzenki gehitua izan da.';
$lang['categoryupdated'] = 'Kategoria zuzenki eguneratua izan da.';
$lang['categorydeleted'] = 'Kategoria zuzenki ezabatua izan da.';
$lang['addnewsitem'] = 'Berri bat Gehitu';
$lang['allcategories'] = 'Kategoria Guztiak';
$lang['allentries'] = 'Sarrera Guztiak';
$lang['areyousure'] = 'Ezabatu nahi duzula zihur al zaude?';
$lang['articles'] = 'Artikuluak';
$lang['cancel'] = 'Ezeztatu';
$lang['category'] = 'Kategoria';
$lang['categories'] = 'Kategoriak';
$lang['default_category'] = 'Kategori Lehenetsia';
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
<p>Version 2.0.3</p>
<p>- Added the ability to track the original author of an article</p>
<li>
</ul>
</ul> 
';
$lang['content'] = 'Edukia';
$lang['dateformat'] = '%s-k ez dauka yyyy-mm-dd hh:mm:ss formatu baliagarria';
$lang['delete'] = 'Ezabatu';
$lang['description'] = 'Gehitu, editatu eta ezabatu Berrien sarrerak';
$lang['detailtemplate'] = 'Xehetasun Txantiloia';
$lang['detailtemplateupdated'] = 'Eguneratutako Xehetasun Txantiloia datubasean arazorik gabe gorde da.';
$lang['displaytemplate'] = 'Txantiloia erakutsi';
$lang['edit'] = 'Editatu';
$lang['enddate'] = 'Amaiera Eguna';
$lang['endrequiresstart'] = 'Amaiera egun baten sarrerak hasiera egun bat ere behar du';
$lang['entries'] = '%s Sarrera';
$lang['status'] = 'Egoera';
$lang['expiry'] = 'Amaiera';
$lang['filter'] = 'Filtroa';
$lang['more'] = 'Gehiago';
$lang['category_label'] = 'Kategoria:';
$lang['author_label'] = 'Nork bidalia:';
$lang['moretext'] = 'Textu Gehiago';
$lang['name'] = 'Izena';
$lang['news'] = 'Berriak';
$lang['news_return'] = 'Itzuli';
$lang['newcategory'] = 'Kategoria Berria';
$lang['needpermission'] = ' &#039;%s&#039; baimena behar duzu funtzio hori egi ahal izateko.';
$lang['nocategorygiven'] = 'Ez da Kategoriarik Zehaztu';
$lang['nocontentgiven'] = 'Ez da Edukirik Zehaztu';
$lang['noitemsfound'] = '<strong>Ez</strong> da %s kategoriarentzako elementurik topatu.';
$lang['nopostdategiven'] = 'Ez da Bialketa Datarik Zehaztu';
$lang['note'] = '<em>Oharra:</em> Datak &#039;yyyy-mm-dd hh:mm:ss&#039; formatuan egon behar dira.';
$lang['notitlegiven'] = 'Ez da Titulurik Zehaztu';
$lang['nonamegiven'] = 'Ez da Izenik Zehaztu';
$lang['numbertodisplay'] = 'Erakutsi Beharreko Kopurua (utzik, elementu denak erakusten ditu)';
$lang['print'] = 'Inprimatu';
$lang['postdate'] = 'Igorpen Data';
$lang['postinstall'] = 'Zihurtatu Berriak administratu behar dituzten erabiltzaile guztiek &quot;Berriak Aldatu&quot; baimena  aktibatuta dutela.';
$lang['rssfeedtitle'] = 'CMS Made Simple RSS Feed-a';
$lang['rsstemplate'] = 'RSS Txantiloia';
$lang['selectcategory'] = 'Kategoria Ahutatu';
$lang['showchildcategories'] = 'Ume-kategoriak erakutsi';
$lang['sortascending'] = 'Goranzka Antolatu';
$lang['startdate'] = 'Hasiera Data';
$lang['startoffset'] = 'N-garren elementuan hasi';
$lang['startrequiresend'] = 'Hasiera data sartuez gero amaiera data beharrezkoa da';
$lang['submit'] = 'Onartu';
$lang['summary'] = 'Laburpena';
$lang['summarytemplate'] = 'Laburpenaren Txantiloia';
$lang['summarytemplateupdated'] = 'Berrien Laburpen Txantiloia arazorik gabe eguneratu da.';
$lang['title'] = 'Titulua';
$lang['options'] = 'Hautapenak';
$lang['optionsupdated'] = 'Aukerak arazorik gabe eguneratuak izan dira.';
$lang['useexpiration'] = 'Erabili Amaiera Data';
$lang['showautodiscovery'] = 'Feed Auto-Discovery Esteka erakutsi';
$lang['autodiscoverylink'] = 'Feed Auto-Discovery-ren URL-a';
$lang['eventdesc-NewsArticleAdded'] = 'Artikulu bat gehitzen denean bidalia.';
$lang['eventhelp-NewsArticleAdded'] = '<p>Artikulu bat gehitzen denean bidalia.</p>
<h4>Parametroak</h4>
<ul>
<li>\&quot;news_id\&quot; - Berriaren Id-a</li>
<li>\&quot;category_id\&quot; - Artikulu honen kategoriaren Id-a</li>
<li>\&quot;title\&quot; - Artikuluaren titulua</li>
<li>\&quot;content\&quot; - Artikuluaren edukia</li>
<li>\&quot;summary\&quot; - Artikuluaren laburpena</li>
<li>\&quot;status\&quot; - Artikuluaren egoera (&quot;zirriborroa&quot; edo &quot;argitaragarria&quot;)</li>
<li>\&quot;start_time\&quot; - Artikulua bistaratua izaten hasiko den data</li>
<li>\&quot;end_time\&quot; - Artikulua bistaratua izatetik gelditu beharko den data</li>
<li>\&quot;useexp\&quot; - Amaiera data kontuan hartu behar den ala ez</li>
</ul>
';
$lang['eventdesc-NewsArticleEdited'] = 'Artikulu bat editatzen denean bidalia.';
$lang['eventhelp-NewsArticleEdited'] = '<p>Artikulu bat editatzen denean bidalia.</p>
<h4>Parametroak</h4>
<ul>
<li>\&quot;news_id\&quot; - Berriaren Id-a</li>
<li>\&quot;category_id\&quot; - Artikulu honen kategoriaren Id-a</li>
<li>\&quot;title\&quot; - Artikuluaren titulua</li>
<li>\&quot;content\&quot; - Artikuluaren edukia</li>
<li>\&quot;summary\&quot; - Artikuluaren laburpena</li>
<li>\&quot;status\&quot; - Artikuluaren egoera (&quot;zirriborroa&quot; edo &quot;argitaragarria&quot;)</li>
<li>\&quot;start_time\&quot; - Artikulua bistaratua izaten hasiko den data</li>
<li>\&quot;end_time\&quot; - Artikulua bistaratua izatetik gelditu beharko den data</li>
<li>\&quot;useexp\&quot; - Amaiera data kontuan hartu behar den ala ez</li>
</ul>

';
$lang['eventdesc-NewsArticleDeleted'] = 'Artikulu bat ezabatzen denean bidalia.';
$lang['eventhelp-NewsArticleDeleted'] = '<p>Artikulu bat ezabatzen denean bidalia.</p>
<h4>Parametroak</h4>
<ul>
<li>\&quot;news_id\&quot; - Berriaren Id-a</li>
</ul>
';
$lang['eventdesc-NewsCategoryAdded'] = 'Kategoria bat gehitzen denean bidalia.';
$lang['eventhelp-NewsCategoryAdded'] = '<p>Kategoria bat gehitzen denean bidalia.</p>
<h4>Parametroak</h4>
<ul>
<li>\&quot;category_id\&quot; - Berrien kategoriaren Id-a</li>
<li>\&quot;name\&quot; - Berrien kategoriaren izena</li>
</ul>
';
$lang['eventdesc-NewsCategoryEdited'] = 'Kategoria bat editatzen denean bidalia.';
$lang['eventhelp-NewsCategoryEdited'] = '<p>Kategoria bat editatzen denean bidalia.</p>
<h4>Parametroak</h4>
<ul>
<li>\&quot;category_id\&quot; - Berrien kategoriaren Id-a</li>
<li>\&quot;name\&quot; - Berrien kategoriaren izena</li>
<li>\&quot;origname\&quot; - Berrien kategoriaren jatorrizko izena</li>
</ul>
';
$lang['eventdesc-NewsCategoryDeleted'] = 'Kategoria bat ezabatzen denean bidalia.';
$lang['eventhelp-NewsCategoryDeleted'] = '<p>Kategoria bat ezabatzen denean bidalia.</p>
<h4>Parameters</h4>
<ul>
<li>\&quot;category_id\&quot; - Ezabatutako kategoriaren Id-a </li>
<li>\&quot;name\&quot; - Ezabatutako kategoriaren izena</li>
</ul>
';
$lang['helpnumber'] = 'Erakutsi beharreko elementu kopuru maximoa =- Utzik, elementu guztiak erakutsiko dira.';
$lang['helpstart'] = 'Hasi Ngarren elementuan -- Utzik, lehenengo elementuan hasiko da.';
$lang['helpmakerssbutton'] = 'Botoi bat Berrien elementuen RSS feed batekin lotu.';
$lang['helpcategory'] = 'Kategori horretako elementuak bakarrik erakutsi. <b> Erabili * izenaren ostean, honen umeak erakusteko.</b> Kategoria ugari erabili ahal daitezke komekin separatuez gero. Utzik mantenduz gero, kategoria guztiak erakutsiko ditu.';
$lang['helpmoretext'] = 'Laburpena baino luzeagoak diren berrien amaieran erakutsi beharreko textua. &quot;gehiago...&quot; dago lehenetsi moduan.
';
$lang['helpsummarytemplate'] = 'Artikuluaren laburpena erakusteko aparteko txantiloi bat erabili. Hau modules/News/templates direktoriopean egon behar da.';
$lang['helpdetailtemplate'] = 'Artikuluaren xehetasunak erakusteko aparteko txantiloi bat erabili. Hau modules/News/templates direktoriopean egon behar da.';
$lang['helpsortby'] = 'Zein eremugatik ordenatu .  Aukerak: &quot;news_date&quot;, &quot;summary&quot;, &quot;news_data&quot;, &quot;news_category&quot;, &quot;news_title&quot;.  Lehenetsitzat: &quot;news_date&quot;.';
$lang['helpsortasc'] = 'Berriak zaharrenetik berrirenera ordenatu.';
$lang['helpdetailpage'] = 'Berrien xehetasunak erakusteko erabiliko den orrialdea. Alias bat edo id bat izan ahal da. Berrien xehetasunak, laburpenerako erabiltzen den txantiloi ezberdin baten bitartez erakusteko erabiltzen da.';
$lang['helpdateformat'] = 'Artikuluaren bialtze datak erakutsiko duen formatua.  Hau <a href=&quot;http://php.net/strftime&quot; target=&quot;_blank&quot;>strftime</a> funtzioan oinarriturik dago eta txantiloian $entry->formatpostdate-ren bitartez erabilia izan ahal da.  %x hartzen du lehenetsitzat, hau zerbitzariaren formatu lehenetsia delarik.';
$lang['helpshowarchive'] = 'Iraungitako berriak besterik ez erakutsi.';
$lang['helpbrowsecat'] = 'Erakutsi nabigagarria den kategori lista bat.';
$lang['help'] = '	<h3>What does this do?</h3>
	<p>News is a module for displaying news events on your page, similar to a blog style, except with more features!.  When the module is installed, a News admin page is added to administration menu that will allow you to select or add a news category.  Once a news category is created or selected, a list of news items for that category will be displayed.  From here, you can add, edit or delete news items for that category.</p>
	<h3>Template variables</h3>
	<ul>
		<li><b>itemcount</b> - The number of news articles to be shown.</li>
		<li><b>entry->authorname</b> - The full name of the the author including First and Last name.</li>
	</ul>
	<h3>Security</h3>
	<p>The user must belong to a group with the &#039;Modify News&#039; permission in order to add, edit, or delete News entries.</p>
	<p>In order to edit the layout templates, the user must belong to a group with the &#039;Modify Templates&#039; permission.</p>
	<p>In order to edit the global news preferences, the user must belong to a group with the &#039;Modify Site Preferences&#039; permission.</p>
	<h3>How do I use it?</h3>
	<p>The easiest way to use it is with the {news} wrapper tag (wraps the module in a tag, to simplify the syntax).  This will insert the module into your template or page anywhere you wish, and display news items.  The code would look something like: <code>{news number=&#039;5&#039;}</code></p>';
$lang['utmz'] = '156861353.1168446231.1.1.utmccn=(direct)|utmcsr=(direct)|utmcmd=(none)';
$lang['utma'] = '156861353.106401549.1168446231.1168446231.1168450143.2';
?>