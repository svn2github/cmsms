<?php
$lang['author'] = 'Yazar';
$lang['sysdefaults'] = 'Varsayılanlara d&ouml;n';
$lang['restoretodefaultsmsg'] = 'Bu işlem şablon i&ccedil;eriğini sistem varsayılanlarına &ccedil;evirecektir. Devam etmek istediğinizden emin misiniz?';
$lang['addarticle'] = 'Makale Ekle';
$lang['articleadded'] = 'Makale başarılı olarak eklendi.';
$lang['articleupdated'] = 'Makale başarılı olarak g&uuml;ncellendi.';
$lang['articledeleted'] = 'Makale başarılı olarak silindi.';
$lang['addcategory'] = 'Kategori Ekle';
$lang['categoryadded'] = 'Kategori başarılı olarak eklendi.';
$lang['categoryupdated'] = 'Kategori başarılı olarak g&uuml;ncellendi.';
$lang['categorydeleted'] = 'Kategori başarılı olarak silindi.';
$lang['addnewsitem'] = 'Haber &Ouml;ğesi Ekle';
$lang['allcategories'] = 'T&uuml;m Kategoriler';
$lang['allentries'] = 'T&uuml;m Girdiler';
$lang['areyousure'] = 'Silmek istediğinizden emin misiniz?';
$lang['articles'] = 'Makaleler';
$lang['cancel'] = 'Vazge&ccedil;';
$lang['category'] = 'Kategori';
$lang['categories'] = 'Kategoriler';
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
$lang['content'] = 'İ&ccedil;erik';
$lang['dateformat'] = '%s ge&ccedil;erli bir yyyy-mm-dd hh:mm:ss bi&ccedil;imi değil';
$lang['delete'] = 'Sil';
$lang['description'] = 'Haber girdileri ekle, d&uuml;zenle ve sil';
$lang['detailtemplate'] = 'Ayrıntı Şablonu';
$lang['detailtemplateupdated'] = 'D&uuml;zenlenen Ayrıntı Şablonu başarılı olarak veritabanına kaydedildi.';
$lang['displaytemplate'] = 'Şablonu G&ouml;ster';
$lang['edit'] = 'D&uuml;zenle';
$lang['enddate'] = 'Bitiş Tarihi';
$lang['endrequiresstart'] = 'Bitiş tarihihi girmek başlangı&ccedil; tarihini girmeyi de gerektirir';
$lang['entries'] = '%s Girdi';
$lang['status'] = 'Durum';
$lang['expiry'] = 'S&uuml;resi';
$lang['filter'] = 'S&uuml;z';
$lang['more'] = 'Devamı';
$lang['category_label'] = 'Kategori:';
$lang['author_label'] = 'G&ouml;nderen:';
$lang['moretext'] = 'Fazla yazı';
$lang['name'] = 'İsim';
$lang['news'] = 'Haberler';
$lang['news_return'] = 'Geri d&ouml;n';
$lang['newcategory'] = 'Yeni Kategori';
$lang['needpermission'] = 'Bu işlemi yapmak i&ccedil;in &#039;%s&#039; yetkinizin olması gerekir.';
$lang['nocategorygiven'] = 'Kategori girilmemiş';
$lang['nocontentgiven'] = 'İ&ccedil;erik girilmemiş';
$lang['noitemsfound'] = 'Kategori i&ccedil;in <strong>hi&ccedil;</strong> &ouml;ğe bulunamadı: %s';
$lang['nopostdategiven'] = 'G&ouml;nderme Tarihi girilmemiş';
$lang['note'] = '<em>Not:</em> Tarihler &#039;yyyy-mm-dd hh:mm:ss&#039; bi&ccedil;iminde olmalıdır.';
$lang['notitlegiven'] = 'Başlık girilmemiş';
$lang['nonamegiven'] = 'İsim girilmemiş';
$lang['numbertodisplay'] = 'G&ouml;sterilecek adet (boş bırakılırsa t&uuml;m kayıtlar g&ouml;sterilir)';
$lang['print'] = 'Yazdır';
$lang['postdate'] = 'G&ouml;nderme Tarihi';
$lang['postinstall'] = 'Make sure to set the &quot;Modify News&quot; permission on users who will be administering News items.';
$lang['rssfeedtitle'] = 'CMS Made Simple RSS Feed';
$lang['rsstemplate'] = 'RSS Template';
$lang['selectcategory'] = 'Kategori Se&ccedil;in';
$lang['showchildcategories'] = 'Alt kategorileri g&ouml;ster';
$lang['sortascending'] = 'B&uuml;y&uuml;kten k&uuml;&ccedil;&uuml;ğe sırala';
$lang['startdate'] = 'Başlangı&ccedil; Tarihi';
$lang['startoffset'] = 'n&#039;inci &ouml;ğeden başlayarak g&ouml;ster';
$lang['startrequiresend'] = 'Başlangı&ccedil; tarihini girmek bitiş tarihini de girmeyi gerektirir';
$lang['submit'] = 'G&ouml;nder';
$lang['summary'] = '&Ouml;zet';
$lang['summarytemplate'] = '&Ouml;zet Şablonu';
$lang['summarytemplateupdated'] = 'Haber &Ouml;zet Şablonu başarılı olarak g&uuml;ncellendi.';
$lang['title'] = 'Başlık';
$lang['options'] = 'Se&ccedil;enekler';
$lang['optionsupdated'] = 'Se&ccedil;enekler başarılı olarak g&uuml;ncellendi.';
$lang['useexpiration'] = 'S&uuml;resi ge&ccedil;me tarihini kullan';
$lang['showautodiscovery'] = 'Show Feed Auto-Discovery Link';
$lang['autodiscoverylink'] = 'Feed Auto-Discovery URL (blank for default)';
$lang['eventdesc-NewsArticleAdded'] = 'Makale eklendiğinde g&ouml;nderildi.';
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
$lang['eventdesc-NewsArticleEdited'] = 'Makale d&uuml;zenlendiğinde g&ouml;nderildi.';
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
$lang['eventdesc-NewsArticleDeleted'] = 'Makale silindiğinde g&ouml;nderildi.';
$lang['eventhelp-NewsArticleDeleted'] = '<p>Sent when an article is deleted.</p>
<h4>Parameters</h4>
<ul>
<li>\&quot;news_id\&quot; - Id of the news article</li>
</ul>
';
$lang['eventdesc-NewsCategoryAdded'] = 'Kategori eklendiğinde g&ouml;nderildi.';
$lang['eventhelp-NewsCategoryAdded'] = '<p>Sent when a category is added.</p>
<h4>Parameters</h4>
<ul>
<li>\&quot;category_id\&quot; - Id of the news category</li>
<li>\&quot;name\&quot; - Name of the news category</li>
</ul>
';
$lang['eventdesc-NewsCategoryEdited'] = 'Kategori d&uuml;zenlendiğinde g&ouml;nderildi.';
$lang['eventhelp-NewsCategoryEdited'] = '<p>Sent when a category is edited.</p>
<h4>Parameters</h4>
<ul>
<li>\&quot;category_id\&quot; - Id of the news category</li>
<li>\&quot;name\&quot; - Name of the news category</li>
<li>\&quot;origname\&quot; - The original name of the news category</li>
</ul>
';
$lang['eventdesc-NewsCategoryDeleted'] = 'Kategori silindiğinde g&ouml;nderildi.';
$lang['eventhelp-NewsCategoryDeleted'] = '<p>Sent when a category is deleted.</p>
<h4>Parameters</h4>
<ul>
<li>\&quot;category_id\&quot; - Id of the deleted category </li>
<li>\&quot;name\&quot; - Name of the deleted category</li>
</ul>
';
$lang['helpnumber'] = 'G&ouml;sterilecek &ouml;ğe sayısı =- boş bırakılırsa t&uuml;m &ouml;ğeler g&ouml;sterilir.';
$lang['helpstart'] = 'Başlangı&ccedil; &ouml;ğe sayısı -- boş bırakılırsa ilk &ouml;ğeden başlanır.';
$lang['helpmakerssbutton'] = 'Make a button to link to an RSS feed of the News items.';
$lang['helpcategory'] = 'Only display items for that category. <b>Use * after the name to show children.</b>  Multiple categories can be used if separated with a comma. Leaving empty, will show all categories.';
$lang['helpmoretext'] = 'Text to display at the end of a news item if it goes over the summary length.  Defaults to &quot;more...&quot;';
$lang['helpsummarytemplate'] = 'Use a separate template for displaying the article summary.  It have to live in modules/News/templates.';
$lang['helpdetailtemplate'] = 'Use a separate template for displaying the article detail.  It have to live in modules/News/templates.';
$lang['helpsortby'] = 'Field to sort by.  Options are: &quot;news_date&quot;, &quot;summary&quot;, &quot;news_data&quot;, &quot;news_category&quot;, &quot;news_title&quot;.  Defaults to &quot;news_date&quot;.';
$lang['helpsortasc'] = 'Sort news items in ascending date order rather than descending.';
$lang['helpdetailpage'] = 'Page to display News details in.  This can either be a page alias or an id. Used to allow details to be displayed in a different template from the summary.';
$lang['helpdateformat'] = 'Format to display the article&#039;s post date with.  This is based on the <a href=&quot;http://php.net/strftime&quot; target=&quot;_blank&quot;>strftime</a> function and can be used in your template with $entry->formatpostdate.  It defaults to %x, which is the default date format for the server&#039;s locale.';
$lang['helpshowarchive'] = 'Sadece s&uuml;resi ge&ccedil;miş haber makalelerini g&ouml;ster.';
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
$lang['utma'] = '156861353.18536493.1161083204.1164705628.1164707762.70';
$lang['utmz'] = '156861353.1164704587.68.17.utmccn=(referral)|utmcsr=forum.cmsmadesimple.org|utmcct=/index.php/topic,8267.0/topicseen.html|utmcmd=referral';
$lang['utmb'] = '156861353';
?>