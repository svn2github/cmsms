<?php
$lang['uploadscategory'] = 'Felt&ouml;lt&eacute;s kateg&oacute;ria';
$lang['title_available_templates'] = 'El&eacute;rető sablonok';
$lang['resettodefault'] = 'Alap&eacute;rtelmezett &eacute;rt&eacute;kek vissza&aacute;ll&iacute;t&aacute;sa';
$lang['title_detail_template'] = 'R&eacute;szletes sablon szerkesztő';
$lang['title_summary_template'] = '&Ouml;sszefoglal&oacute; sablon szerkesztő';
$lang['prompt_templatename'] = 'Sablon neve';
$lang['prompt_template'] = 'Sablon forr&aacute;sa';
$lang['title_summary_sysdefault'] = 'Alap&eacute;rtelmezett &ouml;sszefoglal&oacute; sablon';
$lang['title_detail_sysdefault'] = 'Alap&eacute;rtelmezett r&eacute;szletes sablon';
$lang['info_sysdefault'] = '<em>(az alkalmazott sablon,a mikor &uacute;j sablon ker&uuml;l kiv&aacute;laszt&aacute;sra)</em>';
$lang['template'] = 'Sablon';
$lang['prompt_name'] = 'N&eacute;v';
$lang['prompt_default'] = 'Alap&eacute;rtelmezett';
$lang['prompt_newtemplate'] = 'Create A New Template';
$lang['help_pagelimit'] = 'Maximum number of items to display (per page).  If this parameter is not supplied all matching items will be displayed.  If it is, and there are more items available than specified in the pararamter, text and links will be supplied to allow scrolling through the results';
$lang['prompt_page'] = 'Oldal';
$lang['firstpage'] = '<<';
$lang['prevpage'] = '<';
$lang['nextpage'] = '>';
$lang['lastpage'] = '>>';
$lang['prompt_of'] = 'ennyiből:';
$lang['prompt_pagelimit'] = 'Oldal limit';
$lang['prompt_sorting'] = 'Rendez&eacute;si szempont';
$lang['title_filter'] = 'Szűrők';
$lang['published'] = 'Publik&aacute;lt';
$lang['draft'] = 'Piszkozat';
$lang['expired'] = 'Lej&aacute;rt';
$lang['author'] = 'Szerző';
$lang['sysdefaults'] = 'Alap&eacute;rtelmezett &eacute;rt&eacute;kek vissza&aacute;ll&iacute;t&aacute;sa';
$lang['restoretodefaultsmsg'] = 'Ez a művelet vissza&aacute;ll&iacute;tja a sablon tartalm&aacute;t az alap&eacute;rtelmezett &eacute;rt&eacute;kekre. Biztosan folytatni akarja?';
$lang['addarticle'] = 'Cikk hozz&aacute;ad&aacute;sa';
$lang['articleadded'] = 'A cikket sikeresen hozz&aacute;adtuk.';
$lang['articleupdated'] = 'A cikket sikeresen friss&iacute;tett&uuml;k.';
$lang['articledeleted'] = 'A cikket sikeresen t&ouml;r&ouml;lt&uuml;k.';
$lang['addcategory'] = 'Kateg&oacute;ria hozz&aacute;ad&aacute;sa';
$lang['categoryadded'] = 'A kateg&oacute;ri&aacute;t sikeresen hozz&aacute;adtuk.';
$lang['categoryupdated'] = 'A kateg&oacute;ri&aacute;t sikeresen friss&iacute;tet&uuml;k.';
$lang['categorydeleted'] = 'A kateg&oacute;ri&aacute;t sikeresen t&ouml;r&ouml;lt&uuml;k.';
$lang['addnewsitem'] = 'H&iacute;r hozz&aacute;ad&aacute;sa';
$lang['allcategories'] = 'Minden kateg&oacute;ria';
$lang['allentries'] = 'Minden bejegyz&eacute;s';
$lang['areyousure'] = 'Biztosan t&ouml;r&ouml;lni akarja?';
$lang['articles'] = 'Cikkek';
$lang['cancel'] = 'M&eacute;gsem';
$lang['category'] = 'Kateg&oacute;ria';
$lang['categories'] = 'Kateg&oacute;ri&aacute;k';
$lang['default_category'] = 'Alap&eacute;rtelmezett kateg&oacute;ria';
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
$lang['content'] = 'Tartalom';
$lang['dateformat'] = '%s nem felel meg az &eacute;&eacute;&eacute;&eacute;-hh-nn &oacute;&oacute;:pp:mm form&aacute;tum le&iacute;r&aacute;snak';
$lang['delete'] = 'T&ouml;rl&eacute;s';
$lang['description'] = 'H&iacute;rek hozz&aacute;ad&aacute;sa, szerkeszt&eacute;se &eacute;s t&ouml;rl&eacute;se';
$lang['detailtemplate'] = 'Sablon r&eacute;szletei';
$lang['detailtemplateupdated'] = 'A friss&iacute;tett r&eacute;szletes sablont sikeresen kimentett&uuml;k az adatb&aacute;zisba.';
$lang['displaytemplate'] = 'Megjelen&iacute;t&eacute;si sablon';
$lang['edit'] = 'Szerkeszt&eacute;s';
$lang['enddate'] = 'Lej&aacute;rat d&aacute;tuma';
$lang['endrequiresstart'] = 'Lej&aacute;rati d&aacute;tum megad&aacute;s&aacute;nak csak &uacute;gy van &eacute;rtelme, ha kezdőd&aacute;tumot is megad';
$lang['entries'] = '%s bejegyz&eacute;sek';
$lang['status'] = 'St&aacute;tusz';
$lang['expiry'] = 'Lej&aacute;rat';
$lang['filter'] = 'Szűrő';
$lang['more'] = 'Tov&aacute;bb';
$lang['category_label'] = 'Kateg&oacute;ria:';
$lang['author_label'] = 'Bek&uuml;ldte:';
$lang['moretext'] = 'Tov&aacute;bbi sz&ouml;veg';
$lang['name'] = 'N&eacute;v';
$lang['news'] = 'H&iacute;rek';
$lang['news_return'] = 'Vissza';
$lang['newcategory'] = '&Uacute;j kateg&oacute;ria';
$lang['needpermission'] = 'Sz&uuml;ks&eacute;g van a(z) &#039;%s&#039; jogosults&aacute;gra ezen művelet elv&eacute;gz&eacute;s&eacute;hez';
$lang['nocategorygiven'] = 'A kateg&oacute;ria nincs megadva';
$lang['nocontentgiven'] = 'A tartalom nincs kit&ouml;ltve';
$lang['noitemsfound'] = '<strong>Nincsenek</strong> elemek ebben a kateg&oacute;ri&aacute;ban: %s';
$lang['nopostdategiven'] = 'A publik&aacute;l&aacute;s d&aacute;tuma nincs megadva';
$lang['note'] = '<em>Megjegyz&eacute;s:</em> A d&aacute;tumokat &#039;&eacute;&eacute;&eacute;&eacute;-hh-nn &oacute;&oacute;:pp:mm&#039; form&aacute;ban kell megadni.';
$lang['notitlegiven'] = 'Nincs megadva a c&iacute;m';
$lang['nonamegiven'] = 'Nincs megadva a n&eacute;v';
$lang['numbertodisplay'] = 'Megmutathat&oacute; elemek sz&aacute;ma (ha nincs megadva, akkor minden rekord meg lesz adva)';
$lang['print'] = 'Nyomtat&aacute;s';
$lang['postdate'] = 'Publik&aacute;l&aacute;s d&aacute;tuma';
$lang['postinstall'] = 'Győződj&ouml;n meg r&oacute;la, hogy a &quot;Modify News&quot; jogosults&aacute;ggal rendelkezik az &ouml;sszes olyan felhaszn&aacute;l&oacute;, aki cikkeket fog adminisztr&aacute;lni.';
$lang['rssfeedtitle'] = 'CMS Made Simple RSS h&iacute;rforr&aacute;s';
$lang['rsstemplate'] = 'RSS sablon';
$lang['selectcategory'] = 'V&aacute;lasszon kateg&oacute;ri&aacute;t';
$lang['showchildcategories'] = 'Gyermekkateg&oacute;ri&aacute;k mutat&aacute;sa';
$lang['sortascending'] = 'N&ouml;vekvő rendez&eacute;s';
$lang['startdate'] = 'Kezdet d&aacute;tuma';
$lang['startoffset'] = 'Az n. elemn&eacute;l kezdj&uuml;k a megjelen&iacute;t&eacute;st';
$lang['startrequiresend'] = 'Kezdőd&aacute;tum megad&aacute;s&aacute;nak csak &uacute;gy van &eacute;rtelme, ha lej&aacute;rati d&aacute;tumot is megad';
$lang['submit'] = 'Elk&uuml;ld';
$lang['summary'] = '&Ouml;sszefoglal&oacute;';
$lang['summarytemplate'] = '&Ouml;sszefoglal&oacute; sablon';
$lang['summarytemplateupdated'] = 'A h&iacute;r &ouml;sszefoglal&oacute; sablont sikeresen friss&iacute;tett&uuml;k.';
$lang['title'] = 'C&iacute;m';
$lang['options'] = 'Opci&oacute;k';
$lang['optionsupdated'] = 'Az opci&oacute;kat sikeresen friss&iacute;tett&uuml;k.';
$lang['useexpiration'] = 'Lej&aacute;rati d&aacute;tum haszn&aacute;lata';
$lang['showautodiscovery'] = 'Feed Auto-Discovery Link mutat&aacute;sa';
$lang['autodiscoverylink'] = 'Feed Auto-Discovery URL (&uuml;resen hagyva az alap&eacute;rtelmezett lesz)';
$lang['eventdesc-NewsArticleAdded'] = 'Akkor k&uuml;ldj&uuml;k, amikor &uacute;j cikk j&ouml;n l&eacute;tre.';
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
</ul>
';
$lang['eventdesc-NewsArticleEdited'] = 'Akkor k&uuml;ldj&uuml;k, amikor egy cikk megv&aacute;ltozik.';
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
</ul>
';
$lang['eventdesc-NewsArticleDeleted'] = 'Akkor k&uuml;ldj&uuml;k, amikor egy cikket t&ouml;r&ouml;lnek.';
$lang['eventhelp-NewsArticleDeleted'] = '<p>Sent when an article is deleted.</p>
<h4>Parameters</h4>
<ul>
<li>\&quot;news_id\&quot; - Id of the news article</li>
</ul>
';
$lang['eventdesc-NewsCategoryAdded'] = 'Akkor k&uuml;ldj&uuml;k, amikor egy kateg&oacute;ri&aacute;t felvesznek.';
$lang['eventhelp-NewsCategoryAdded'] = '<p>Sent when a category is added.</p>
<h4>Parameters</h4>
<ul>
<li>\&quot;category_id\&quot; - Id of the news categpry</li>
<li>\&quot;name\&quot; - Name of the news category</li>
</ul>
';
$lang['eventdesc-NewsCategoryEdited'] = 'Akkor k&uuml;ldj&uuml;k, amikor egy kateg&oacute;ri&aacute;t m&oacute;dos&iacute;tanak.';
$lang['eventhelp-NewsCategoryEdited'] = '<p>Sent when a category is edited.</p>
<h4>Parameters</h4>
<ul>
<li>\&quot;category_id\&quot; - Id of the news categpry</li>
<li>\&quot;name\&quot; - Name of the news category</li>
</ul>
';
$lang['eventdesc-NewsCategoryDeleted'] = 'Akkor k&uuml;ldj&uuml;k, amikor egy kateg&oacute;ri&aacute;t t&ouml;r&ouml;lnek.';
$lang['eventhelp-NewsCategoryDeleted'] = '<p>Sent when a category is deleted.</p>
<h4>Parameters</h4>
<ul>
<li>\&quot;category_id\&quot; - Id of the news categpry</li>
</ul>
';
$lang['helpnumber'] = 'A maxim&aacute;lisan megjelen&iacute;thető elemek sz&aacute;ma -- ha nem adja meg, minden elem meg lesz mutatva';
$lang['helpstart'] = 'Az n. elemn&eacute;l kezdj&uuml;k a megjelen&iacute;t&eacute;st -- &uuml;resen hagyva az első elemn&eacute;l kezdődik  ';
$lang['helpmakerssbutton'] = 'Link l&eacute;trehoz&aacute;sa a h&iacute;r elemek RSS h&iacute;rforr&aacute;s&aacute;hoz.';
$lang['helpcategory'] = 'Csak az adott kateg&oacute;ria h&iacute;reit jelen&iacute;ts&uuml;k meg. A n&eacute;v ut&aacute;n a * karaktert alkalmazva a gyermekkateg&oacute;ri&aacute;k is megmutathat&oacute;k. T&ouml;bb kateg&oacute;ria is megadhat&oacute;, vesszővel elv&aacute;lasztva. &Uuml;resen hagyva minden kateg&oacute;ria meg lesz mutatva.';
$lang['helpmoretext'] = 'A sz&ouml;veg, amit akkor jelen&iacute;t&uuml;nk meg, ha a h&iacute;r hosszabb, mint az &ouml;sszefoglal&oacute; hossza. Alap&eacute;rtelmez&eacute;sben ez &quot;tov&aacute;bb...&quot;';
$lang['helpsummarytemplate'] = 'K&uuml;l&ouml;n sablon haszn&aacute;lata az &ouml;sszefoglal&oacute; megjelen&iacute;t&eacute;s&eacute;hez. L&eacute;teznie kell a modules/News/templates alatt.';
$lang['helpdetailtemplate'] = 'K&uuml;l&ouml;n sablon haszn&aacute;lata a cikk megjelen&iacute;t&eacute;s&eacute;hez. L&eacute;teznie kell a modules/News/templates alatt.';
$lang['helpsortby'] = 'A rendez&eacute;s alapja.  V&aacute;laszt&aacute;si lehetős&eacute;gek: &quot;news_date&quot;, &quot;summary&quot;, &quot;news_data&quot;, &quot;news_category&quot;, &quot;news_title&quot;.  Alap&eacute;rtelmez&eacute;sben ez a &quot;news_date&quot;.';
$lang['helpsortasc'] = 'Az elemek n&ouml;vekvő sorrendben val&oacute; megmutat&aacute;sa.';
$lang['helpdetailpage'] = 'Az oldal, ahol a h&iacute;reknek meg kell jelenni&uuml;k. Ez lehet oldal alias vagy egy azonos&iacute;t&oacute;. Arra haszn&aacute;lhat&oacute;, hogy a h&iacute;r sz&ouml;vege az &ouml;sszefoglal&oacute;t&oacute;l elt&eacute;rő sablon szerint lehessen megjelen&iacute;tve.';
$lang['helpdateformat'] = 'A cikkek d&aacute;tum&aacute;nak megjelen&iacute;t&eacute;s&eacute;&eacute;rt felelős form&aacute;tum.  Ennek alapja a  <a href=&quot;http://php.net/strftime&quot; target=&quot;_blank&quot;>strftime</a> f&uuml;ggv&eacute;ny, &eacute;s haszn&aacute;lhat&oacute; az oldalsablonban a $entry->formatpostdate seg&iacute;ts&eacute;g&eacute;vel.  Alap&eacute;rtelmez&eacute;sben ez %x, ami a szerver locale be&aacute;ll&iacute;t&aacute;sa szerinti d&aacute;tumform&aacute;tumot adja.';
$lang['helpshowarchive'] = 'Csak lej&aacute;rt cikkek mutat&aacute;sa.';
$lang['helpbrowsecat'] = 'Kateg&oacute;ri&aacute;k b&ouml;ng&eacute;sz&eacute;se.';
$lang['help'] = '	<h3>What does this do?</h3>
	<p>News is a module for displaying news events on your page, similar to a blog style, except with more features!.  When the module is installed, a News admin page is added to administration menu that will allow you to select or add a news category.  Once a news category is created or selected, a list of news items for that category will be displayed.  From here, you can add, edit or delete news items for that category.</p>
	<h3>Security</h3>
	<p>The user must belong to a group with the &#039;Modify News&#039; permission in order to add, edit, or delete News entries.</p>
	<p>In order to edit the layout templates, the user must belong to a group with the &#039;Modify Templates&#039; permission.</p>
	<p>In order to edit the global news preferences, the user must belong to a group with the &#039;Modify Site Preferences&#039; permission.</p>
	<h3>How do I use it?</h3>
	<p>The easiest way to use it is in conjunction with the cms_module tag.  This will insert the module into your template or page anywhere you wish, and display news items.  The code would look something like: <code>{cms_module module=&quot;news&quot; number=&quot;5&quot; category=&quot;beer&quot;}</code></p>';
$lang['utma'] = '156861353.1745742775.1167462096.1181363092.1181753758.26';
$lang['utmz'] = '156861353.1176323191.18.2.utmccn=(referral)|utmcsr=forum.cmsmadesimple.org|utmcct=/index.php/topic,7004.0.html|utmcmd=referral';
$lang['utmc'] = '156861353';
?>