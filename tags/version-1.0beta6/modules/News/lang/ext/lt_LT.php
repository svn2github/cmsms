<?php
$lang['author'] = 'Autorius';
$lang['sysdefaults'] = 'Atstayti įprastus nustatymus';
$lang['restoretodefaultsmsg'] = '&Scaron;is veiksmas atstatys turinio &scaron;abloną į sitemos įprasta.  Ar tikrai norite tęsti?A';
$lang['addarticle'] = 'Įdėti Straipsnį';
$lang['articleadded'] = 'Naujas staripsnis sėkmingai įdėtas.';
$lang['articleupdated'] = 'Straipsnis sėkmingai atnaujintas.';
$lang['articledeleted'] = 'Straipsnis sėkmingai i&scaron;trintas.';
$lang['addcategory'] = 'Įdėti Kategoriją';
$lang['categoryadded'] = 'Kategorija sėkmingai sukurta.';
$lang['categoryupdated'] = 'Kategorija sėkmingai atnaujinta.';
$lang['categorydeleted'] = 'Kategorija sėkmingai i&scaron;trinta..';
$lang['addnewsitem'] = 'Įdėti Naujienų Elementą';
$lang['allcategories'] = 'Visos Kategorijos';
$lang['allentries'] = 'Visi Įra&scaron;ai';
$lang['areyousure'] = 'Ar tikrai norite i&scaron;trinti?';
$lang['articles'] = 'Straipsniai';
$lang['cancel'] = 'At&scaron;aukti';
$lang['category'] = 'Kategorija';
$lang['categories'] = 'Kategorijos';
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
$lang['content'] = 'Turinys';
$lang['dateformat'] = '%s negalimas yyyy-mm-dd hh:mm:ss formatas';
$lang['delete'] = 'Trinti';
$lang['description'] = 'Įdėti, redaguoti ir trinti Naujienų įra&scaron;us';
$lang['detailtemplate'] = 'Detalus &Scaron;ablonas';
$lang['detailtemplateupdated'] = 'Detalaus &scaron;ablono atnaujinimas i&scaron;saugotas.';
$lang['displaytemplate'] = 'Rodyti &Scaron;abloną';
$lang['edit'] = 'Redaguoti';
$lang['enddate'] = 'Baigimosi Data';
$lang['endrequiresstart'] = 'Įvedant baigimosi datą, reikia taip pat įvesti ir pradžios datą';
$lang['entries'] = '%s Įra&scaron;ai';
$lang['status'] = 'Būklė';
$lang['expiry'] = 'Galiojimas';
$lang['filter'] = 'Filtruoti';
$lang['more'] = 'Daugiau';
$lang['moretext'] = 'Daugiau teksto';
$lang['name'] = 'Vardas';
$lang['news'] = 'Naujienos';
$lang['news_return'] = 'grįžti';
$lang['newcategory'] = 'Nauja Kategorija';
$lang['needpermission'] = 'Jums reikia prieigos &#039;%s&#039; tam, kad atlikti &scaron;ią funkciją.';
$lang['nocategorygiven'] = 'Neužpildyta Kategorija';
$lang['nocontentgiven'] = 'Neužpildytas Turinys';
$lang['noitemsfound'] = '<strong>Nerasta</strong> įra&scaron;ų &scaron;ioje kategorijoje: %s';
$lang['nopostdategiven'] = 'Neužpildyta įra&scaron;o pateikimo data';
$lang['note'] = '<em>Žyma:</em> Datos turi būti &#039;yyyy-mm-dd hh:mm:ss&#039; formato.';
$lang['notitlegiven'] = 'Neužpildytas Pavadinimas';
$lang['nonamegiven'] = 'No Name Given';
$lang['numbertodisplay'] = 'Rodomas Skaičius (palikus tu&scaron;čią, rodomi visi įra&scaron;ai)';
$lang['print'] = 'Spausdinti';
$lang['postdate'] = 'Įra&scaron;o data';
$lang['postinstall'] = 'Nustatykite &quot;Redaguoti Naujienas (Modify News)&quot; prieigą tiems vartotojams, kurie administruos naujienas.';
$lang['rssfeedtitle'] = 'RSS Feedas';
$lang['rsstemplate'] = 'RSS &Scaron;ablonas';
$lang['selectcategory'] = 'Pasirinkite Kategoriją';
$lang['showchildcategories'] = 'Rodyti subkategorijas';
$lang['sortascending'] = 'Rū&scaron;iuoti Didėjančiai';
$lang['startdate'] = 'Pradžios Data';
$lang['startoffset'] = 'Pradėti rodyti nth elemtą';
$lang['startrequiresend'] = 'Įvedant pradžios datą, reikia įvesti ir pabaigos datą';
$lang['submit'] = 'Pateikti';
$lang['summary'] = 'Santrauka';
$lang['summarytemplate'] = 'Santraukos &Scaron;ablonas';
$lang['summarytemplateupdated'] = 'Naujienų santraukos &scaron;ablonas atnaujintas sėkmingai.';
$lang['title'] = 'Pavadinimas';
$lang['options'] = 'Nustatymai';
$lang['optionsupdated'] = 'Nustaymai atnaujinti.';
$lang['useexpiration'] = 'Naudoti galiojimo datą';
$lang['showautodiscovery'] = 'Rodyti Feed Auto-Discovery nuorodą';
$lang['autodiscoverylink'] = 'Feed Auto-Discovery URL (tu&scaron;čias įprasta reik&scaron;mė)';
$lang['eventdesc-NewsArticleAdded'] = 'Nusiųsti kai straipsnis įdėtas.';
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
<li>\&quot;useexp\&quot; - Wether the expiration date should be ignored or not</li>
</ul>
';
$lang['eventdesc-NewsArticleEdited'] = 'Nusiųsti kai straipsnis redaguotas.';
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
<li>\&quot;useexp\&quot; - Wether the expiration date should be ignored or not</li>
</ul>
';
$lang['eventdesc-NewsArticleDeleted'] = 'Nusiųsti kai straipsnis i&scaron;trintas.';
$lang['eventhelp-NewsArticleDeleted'] = '<p>Sent when an article is deleted.</p>
<h4>Parameters</h4>
<ul>
<li>\&quot;news_id\&quot; - Id of the news article</li>
</ul>
';
$lang['eventdesc-NewsCategoryAdded'] = 'Nusiųsti kai kategorija pridėta.';
$lang['eventhelp-NewsCategoryAdded'] = '<p>Sent when a category is added.</p>
<h4>Parameters</h4>
<ul>
<li>\&quot;category_id\&quot; - Id of the news category</li>
<li>\&quot;name\&quot; - Name of the news category</li>
</ul>
';
$lang['eventdesc-NewsCategoryEdited'] = 'Nusiųsti kai kategorija redaguota.';
$lang['eventhelp-NewsCategoryEdited'] = '<p>Sent when a category is edited.</p>
<h4>Parameters</h4>
<ul>
<li>\&quot;category_id\&quot; - Id of the news category</li>
<li>\&quot;name\&quot; - Name of the news category</li>
<li>\&quot;origname\&quot; - The original name of the news category</li>
</ul>
';
$lang['eventdesc-NewsCategoryDeleted'] = 'Nusiųsti kai kategorija i&scaron;trinta.';
$lang['eventhelp-NewsCategoryDeleted'] = '<p>Sent when a category is deleted.</p>
<h4>Parameters</h4>
<ul>
<li>\&quot;category_id\&quot; - Id of the deleted category </li>
<li>\&quot;name\&quot; - Name of the deleted category</li>
</ul>
';
$lang['helpnumber'] = 'Maximalus rodomų elementų skaičius =- palikite tu&scaron;čia, rodys visus.';
$lang['helpstart'] = 'Pradėti nth elementu -- palikite tu&scaron;čia, pradės nuo pirmos.';
$lang['helpmakerssbutton'] = 'Padaryti mygtuką nurodantį į RSS naujienų tiekimą.';
$lang['helpcategory'] = 'Only display items for that category. <b>Use * after the name to show children.</b>  Multiple categories can be used if separated with a comma. Leaving empty, will show all categories.';
$lang['helpmoretext'] = 'Text to display at the end of a news item if it goes over the summary length.  Defaults to &quot;more...&quot;';
$lang['helpsummarytemplate'] = 'Use a separate template for displaying the article summary.  It have to live in modules/News/templates.';
$lang['helpdetailtemplate'] = 'Use a separate template for displaying the article detail.  It have to live in modules/News/templates.';
$lang['helpsortby'] = 'Field to sort by.  Options are: &quot;news_date&quot;, &quot;summary&quot;, &quot;news_data&quot;, &quot;news_category&quot;, &quot;news_title&quot;.  Defaults to &quot;news_date&quot;.';
$lang['helpsortasc'] = 'Sort news items in ascending date order rather than descending.';
$lang['helpdetailpage'] = 'Page to display News details in.  This can either be a page alias or an id. Used to allow details to be displayed in a different template from the summary.';
$lang['helpdateformat'] = 'Format to display the article&#039;s post date with.  This is based on the <a href=&quot;http://php.net/strftime&quot; target=&quot;_blank&quot;>strftime</a> function and can be used in your template with $entry->formatpostdate.  It defaults to %x, which is the default date format for the server&#039;s locale.';
$lang['help'] = '	<h3>Ką jis daro?</h3>
	<p>Naujienų modulis rodo naujienas jūsų puslapyje, pana&scaron;iu kaip &#039;blog&#039; stiliumi, tik su daugiau galimybių. Kai meniu modulis įdiegtas, Naujienų administravimo puslapis yra įdedamas į meniu apačią, kuris jums leis parinkti ar pridėti naujienų kategoriją.</p>
	<h3>Saugumas</h3>
	<p>Vartotojas turi priklausyti grupei su prieiga &#039;Redaguoti Naujienas&#039; (&#039;Modify News&#039;), tam kad galėtu pridėti, redaguoti ar trinti naujienų įra&scaron;us.</p>
	<h3>Kaip jį naudoti?</h3>
	<p>Lengviausias būdas naudojant cms_module žymę. Bus įterptas modulis į jūsų &scaron;abloną ar puslapį ir rodys naujienų įra&scaron;us. Kodas turėtų būti pana&scaron;us kaip: <code>{cms_module module=&quot;news&quot; number=&quot;5&quot; category=&quot;beer&quot;}</code></p>
	<h3>Kokie parametrai egzistuoja?</h3>
	<p>
	<ul>
	<li><em>(optional)</em> number=&quot;5&quot; - Maksimalus rodomų įra&scaron;ų skaičius =- palikus tu&scaron;čią, bus rodomi visi įra&scaron;ai</li>
	<li><em>(optional)</em> makerssbutton=&quot;true&quot; - Sukuriamas naujienų įra&scaron;ų RSSui mygtukas.</li>
	<li><em>(optional)</em> category=&quot;category&quot; - Rodyti tik tos kategorijos įra&scaron;us ir jos vaikus. Palikus tu&scaron;čią, rodomos visos kategorijos.</li>
	<li><em>(optional)</em> moretext=&quot;more...&quot; - Tekstas, kuris rodomas kai naujiena vir&scaron;iją santrauką. Nustatytas &quot;more...&quot;.</li>
	<li><em>(optional}</em> summarytemplate=&quot;sometemplate.tpl&quot; - Naudokite atskirą &scaron;abloną rodyti naujienų santrauką. Jį reikia sukurti modules/News/templates.
	<li><em>(optional}</em> detailtemplate=&quot;sometemplate.tpl&quot; - Naudokite atskirą &scaron;abloną rodyti visas naujienas. Jį reikia sukurti modules/News/templates.
	<li><em>(optional)</em> sortby=&quot;news_date&quot; - Rū&scaron;iavimo laukas. Pasirinkimai: &quot;news_date&quot;, &quot;summary&quot;, &quot;news_data&quot;, &quot;news_category&quot;, &quot;news_title&quot;. Nustatyta: &quot;news_date&quot;.</li>
	<li><em>(optional)</em> sortasc=&quot;true&quot; - Rū&scaron;iuoti naujienas didėjančia tvarka.</li>
	</ul>
	</p>';
$lang['utmz'] = '156861353.1156232165.25.12.utmccn=(referral)|utmcsr=dev.cmsmadesimple.org|utmcct=/softwaremap/trove_list.php|utmcmd=referral';
$lang['utma'] = '156861353.146700672.1148557798.1156244921.1156338862.27';
?>