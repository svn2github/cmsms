<?php
$lang['author'] = 'Autor';
$lang['sysdefaults'] = 'Taasta algseaded';
$lang['restoretodefaultsmsg'] = 'See operatsioon taastab mallide algseaded. Oled kindel, et soovid j&auml;tkata?';
$lang['addarticle'] = 'Lisa Artikkel';
$lang['articleadded'] = 'Artikkel edukalt lisatud.';
$lang['articleupdated'] = 'Artikkel edukalt uuendatud.';
$lang['articledeleted'] = 'Artikkel edukalt kustutatud.';
$lang['addcategory'] = 'Lisa Kategooria';
$lang['categoryadded'] = 'Kategooria edukalt lisatud.';
$lang['categoryupdated'] = 'Kategooria edukalt uuendatud.';
$lang['categorydeleted'] = 'Kategooria edukalt kustutatud.';
$lang['addnewsitem'] = 'Lisa Uudis';
$lang['allcategories'] = 'K&otilde;ik Kategooriad';
$lang['allentries'] = 'K&otilde;ik Sissekanded';
$lang['areyousure'] = 'Oled kindel, et soovid kustutada?';
$lang['articles'] = 'Artiklid';
$lang['cancel'] = 'T&uuml;hista';
$lang['category'] = 'Kategooria';
$lang['categories'] = 'Kategooriad';
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
$lang['content'] = 'Sisu';
$lang['dateformat'] = '%s ei ole yyyy-mm-dd hh:mm:ss formaadis';
$lang['delete'] = 'Kustuta';
$lang['description'] = 'Lisa, muuda ja kustuta Uudiseid.';
$lang['detailtemplate'] = 'Detailise Kuva Mall';
$lang['detailtemplateupdated'] = 'Uuendatud Detailse Kuva Mall salvestati edukalt andmebaasi.';
$lang['displaytemplate'] = 'Kuva Mall';
$lang['edit'] = 'Muuda';
$lang['enddate'] = 'L&otilde;ppkuup&auml;ev';
$lang['endrequiresstart'] = 'L&otilde;ppkuup&auml;eva sisestamisel tuleb m&auml;&auml;rata ka alguse kuup&auml;ev';
$lang['entries'] = '%s Sissekannet';
$lang['status'] = 'Staatus';
$lang['expiry'] = 'Aegub';
$lang['filter'] = 'Filtreeri';
$lang['more'] = 'Loe edasi...';
$lang['moretext'] = 'Loe edasi tekst';
$lang['name'] = 'Nimi';
$lang['news'] = 'Uudised';
$lang['news_return'] = 'Tagasi';
$lang['newcategory'] = 'Uus Kategooria';
$lang['needpermission'] = 'Sul on selle funkstiooni jaoks vaja &#039;%s&#039; &otilde;igusi';
$lang['nocategorygiven'] = 'Kategooriat ei ole.';
$lang['nocontentgiven'] = 'Sisu ei ole.';
$lang['noitemsfound'] = '<strong>Mitte &uuml;htegi</strong> sissekannet kategoorias: %s';
$lang['nopostdategiven'] = 'Postitamise kuup&auml;eva ei ole.';
$lang['note'] = '<em>M&auml;rkus:</em> Kuup&auml;evad peavad olema &#039;yyyy-mm-dd hh:mm:ss&#039; formaadis.';
$lang['notitlegiven'] = 'Pealkirja ei ole.';
$lang['nonamegiven'] = 'Nime ei ole.';
$lang['numbertodisplay'] = 'Mitut n&auml;idata (t&uuml;hi v&auml;li n&auml;itab k&otilde;iki)?';
$lang['print'] = 'Prindi';
$lang['postdate'] = 'Postitamise kuup&auml;ev';
$lang['postinstall'] = 'Palun m&auml;&auml;ra kindlasti &quot;Modify news&quot; &otilde;igus kasutajatele, kes peavad uudiseid toimetama.';
$lang['rssfeedtitle'] = 'CMS Made Simple RSS Toide (Feed)';
$lang['rsstemplate'] = 'RSS Mall';
$lang['selectcategory'] = 'Vali Kategooria';
$lang['showchildcategories'] = 'N&auml;ita Alamkategooriaid';
$lang['sortascending'] = 'Sorteeri Kahanevalt';
$lang['startdate'] = 'Alguskuup&auml;ev';
$lang['startoffset'] = 'Alusta n&auml;itamist alates <i>n-dast</i> sissekandest';
$lang['startrequiresend'] = 'Alguskuup&auml;eva sisestamisel tuleb sisestada ka l&otilde;ppkuup&auml;ev';
$lang['submit'] = 'Saada';
$lang['summary'] = 'Kokkuv&otilde;te';
$lang['summarytemplate'] = 'Kokkuv&otilde;tte Mall';
$lang['summarytemplateupdated'] = 'Uudiste Kokkuv&otilde;tte Mall edukalt uuendatud.';
$lang['title'] = 'Pealkiri';
$lang['options'] = 'Valikud';
$lang['optionsupdated'] = 'Valikud edukalt uuendatud.';
$lang['useexpiration'] = 'Kasuta Aegumiskuup&auml;eva';
$lang['showautodiscovery'] = 'N&auml;ita Feed Auto-Discovery Linki';
$lang['autodiscoverylink'] = 'Feed Auto-Discovery URL (algseadete jaoks j&auml;ta t&uuml;hjaks)';
$lang['eventdesc-NewsArticleAdded'] = 'Saadetud artikli lisamisel.';
$lang['eventhelp-NewsArticleAdded'] = '<p>Saadetud artikli lisamisel.</p>
<h4>Parameetrid</h4>
<ul>
<li>\&quot;news_id\&quot; - Uudisteartikli ID</li>
<li>\&quot;category_id\&quot; - Artikli kategooria ID</li>
<li>\&quot;title\&quot; - Artikli pealkiri</li>
<li>\&quot;content\&quot; - Artikli sisu</li>
<li>\&quot;summary\&quot; - Artikli kokkuv&otilde;te</li>
<li>\&quot;status\&quot; - Artikli staatus (&quot;t&ouml;&ouml;s&quot; v&otilde;i &quot;avaldatud&quot;)</li>
<li>\&quot;start_time\&quot; - Kuup&auml;ev, millest alates artiklit n&auml;idata</li>
<li>\&quot;end_time\&quot; - Kuup&auml;ev, millest alates artiklit enam ei n&auml;idata</li>
<li>\&quot;useexp\&quot; - Kas aegumiskuup&auml;eva kasutatakse v&otilde;i mitte</li>
</ul>
';
$lang['eventdesc-NewsArticleEdited'] = 'Saadetud artikli uuendamisel.';
$lang['eventhelp-NewsArticleEdited'] = '<p>Saadetud artikli uuendamisel.</p>
<h4>Parameetrid</h4>
<ul>
<li>\&quot;news_id\&quot; - Uudisteartikli ID</li>
<li>\&quot;category_id\&quot; - Artikli kategooria ID</li>
<li>\&quot;title\&quot; - Artikli pealkiri</li>
<li>\&quot;content\&quot; - Artikli sisu</li>
<li>\&quot;summary\&quot; - Artikli kokkuv&otilde;te</li>
<li>\&quot;status\&quot; - Artikli staatus (&quot;t&ouml;&ouml;s&quot; v&otilde;i &quot;avaldatud&quot;)</li>
<li>\&quot;start_time\&quot; - Kuup&auml;ev, millest alates artiklit n&auml;idata</li>
<li>\&quot;end_time\&quot; - Kuup&auml;ev, millest alates artiklit enam ei n&auml;idata</li>
<li>\&quot;useexp\&quot; - Kas aegumiskuup&auml;eva kasutatakse v&otilde;i mitte</li>
</ul>

';
$lang['eventdesc-NewsArticleDeleted'] = 'Saadetud artikli kustutamisel.';
$lang['eventhelp-NewsArticleDeleted'] = '<p>Saadetud artikli kustutamisel.</p>
<h4>Parameetrid</h4>
<ul>
<li>\&quot;news_id\&quot; - Uudisteartikli ID</li>
</ul>
';
$lang['eventdesc-NewsCategoryAdded'] = 'Saadetud kategooria lisamisel.';
$lang['eventhelp-NewsCategoryAdded'] = '<p>Saadetud kategooria lisamisel.</p>
<h4>Parameetrid</h4>
<ul>
<li>\&quot;category_id\&quot; - Uudiste kategooria ID</li>
<li>\&quot;name\&quot; - Uudiste kategooria nimi</li>
</ul>
';
$lang['eventdesc-NewsCategoryEdited'] = 'Saadetud kategooria muutmisel.';
$lang['eventhelp-NewsCategoryEdited'] = '<p>Saadetud kategooria muutmisel.</p>
<h4>Parameetrid</h4>
<ul>
<li>\&quot;category_id\&quot; - Uudistekategooria ID</li>
<li>\&quot;name\&quot; - Uudistekategooria nimi</li>
<li>\&quot;origname\&quot; - Uudistekategooria algne nimi</li>
</ul>
';
$lang['eventdesc-NewsCategoryDeleted'] = 'Saadetud kategooria kustutamisel.';
$lang['eventhelp-NewsCategoryDeleted'] = '<p>Saadetud kategooria kustutamisel.</p>
<h4>Parameetrid</h4>
<ul>
<li>\&quot;category_id\&quot; - Uudistekategooria ID</li>
<li>\&quot;name\&quot; - Uudistekategooria nimi</li>
</ul>
';
$lang['helpnumber'] = 'Maksimaalne uudiste arv, mida kuvada =- j&auml;ttes t&uuml;hjaks kuvatakse k&otilde;ik';
$lang['helpstart'] = 'Alusta alates <i>n-dast</i> uudisest -- j&auml;ttes t&uuml;hjaks alustatakse esimesest uudisest.';
$lang['helpmakerssbutton'] = 'Tee nupp Uudiste RSS Toite (Feed) jaoks.';
$lang['helpcategory'] = 'Kuva uudiseid ainult sellest kategooriast. <b>kasuta t&auml;rni (*) nime j&auml;rel, et n&auml;idata alamaid.</b>  Komaga eraldades saad m&auml;&auml;rata korraga mitu kategooriat. J&auml;ttes t&uuml;hjaks kuvatakse k&otilde;ik kategooriad.';
$lang['helpmoretext'] = 'Tekst, mida n&auml;idata uudise l&otilde;pus, kui see &uuml;letam kokkuv&otilde;tte pikkuse. Vaikimis on see &quot;loe edasi...&quot;';
$lang['helpsummarytemplate'] = 'Kasuta artikli kokkuv&otilde;tte kuvamiseks eraldi malli. See peab asuma kaustas modules/News/templates.';
$lang['helpdetailtemplate'] = 'Kasuta artikli detailse vaate kuvamiseks eraldi malli. See peab asuma kaustas modules/News/templates.';
$lang['helpsortby'] = 'V&auml;li, mille j&auml;rgi sorteerida.  Valikud on: &quot;news_date&quot;, &quot;summary&quot;, &quot;news_data&quot;, &quot;news_category&quot;, &quot;news_title&quot;.  Defaults to &quot;news_date&quot;.';
$lang['helpsortasc'] = 'Sorteeri uudised kasvavas, mitte kahanevas j&auml;rjekorras.';
$lang['helpdetailpage'] = 'Leht, millel Uudiste detaile n&auml;idata.  See v&otilde;ib olla lehe alias v&otilde;i id. V&otilde;imaldab kuvada detaile kokkuv&otilde;test erineva malliga.';
$lang['helpdateformat'] = 'Artikli postitamise kuup&auml;eva formaat.  See baseerub <a href=&quot;http://php.net/strftime&quot; target=&quot;_blank&quot;>strftime</a> funktsioonil ja seda saab kasutada sinu mallil makroga: $entry->formatpostdate.  Vaikimis %x, mis on serveri vaikimis kuup&auml;eva formaat.';
$lang['help'] = '	<h3>Mida see teeb?</h3>
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
$lang['utmz'] = '156861353.1157121618.1.1.utmccn=(direct)|utmcsr=(direct)|utmcmd=(none)';
$lang['utma'] = '156861353.1526332053.1157121618.1157745950.1157896763.6';
$lang['utmc'] = '156861353';
?>