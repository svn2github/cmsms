<?php
$lang['author'] = 'Penulis';
$lang['sysdefaults'] = 'Dikembalikan ke bentuk asal';
$lang['restoretodefaultsmsg'] = 'Operasi ini akan mengembalikan isi template ke default sistem. Anda yakin untuk meneruskan proses ini ?';
$lang['addarticle'] = 'Tambah Artikel';
$lang['articleadded'] = 'Artikel telah berhasil ditambahkan.';
$lang['addcategory'] = 'Tambah kategori';
$lang['categoryadded'] = 'Kategori telah berhasil ditambahkan.';
$lang['categoryupdated'] = 'Kategori telah berhasil diperbaharui.';
$lang['addnewsitem'] = 'Tambah berita';
$lang['allcategories'] = 'Seluruh kategori';
$lang['allentries'] = 'Seluruh masukan';
$lang['areyousure'] = 'Anda yakin untuk menghapus?';
$lang['articles'] = 'Artikel-artikel';
$lang['cancel'] = 'Ditunda';
$lang['category'] = 'Kategori';
$lang['categories'] = 'Kategori-kategori';
$lang['changelog'] = '<ul>
<li>
<p>Versi: 1.0</p>
<p>Modul ini telah diubah dan merupakan versi perluasan dari modul Berita versi milik <em>Ted Kulp</em>.  Secara sederhana, saya tambahkan field lainnya ke database, dan beberapa kode program untuk membuat field tersebut I simply added another field to the database, and some more code to make that field worl.... Saya juga membersihkan kode programnya, karena itu menjadi lebih mudah untuk dibaca, dari pada kode programmnya ini adalah kode program milik Ted</p>
</li> 
<li> 
<p>Versi: 1.1</p> 
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
$lang['content'] = 'Content';
$lang['dateformat'] = '%s not in a valid yyyy-mm-dd hh:mm:ss format';
$lang['delete'] = 'Delete';
$lang['description'] = 'Add, edit and remove News entries';
$lang['detailtemplate'] = 'Detail Template';
$lang['detailtemplateupdated'] = 'The updated Detail Template was successfully saved to the database.';
$lang['displaytemplate'] = 'Display Template';
$lang['edit'] = 'Edit';
$lang['enddate'] = 'End Date';
$lang['endrequiresstart'] = 'Entering an end date requires a start date also';
$lang['entries'] = '%s Entries';
$lang['status'] = 'Status';
$lang['expiry'] = 'Expriry';
$lang['filter'] = 'Filter';
$lang['more'] = 'More';
$lang['moretext'] = 'More Text';
$lang['name'] = 'Name';
$lang['news'] = 'News';
$lang['news_return'] = 'Return';
$lang['newcategory'] = 'New Category';
$lang['needpermission'] = 'You need the &#039;%s&#039; permission to perform that function.';
$lang['nocategorygiven'] = 'No Category Given';
$lang['nocontentgiven'] = 'No Content Given';
$lang['noitemsfound'] = '<strong>No</strong> items found for category: %s';
$lang['nopostdategiven'] = 'No Post Date Given';
$lang['note'] = '<em>Note:</em> Dates must be in a &#039;yyyy-mm-dd hh:mm:ss&#039; format.';
$lang['notitlegiven'] = 'No Title Given';
$lang['numbertodisplay'] = 'Number to Display (empty shows all records)';
$lang['print'] = 'Print';
$lang['postdate'] = 'Post Date';
$lang['postinstall'] = 'Make sure to set the &quot;Modify News&quot; permission on users who will be administering News items.';
$lang['rssfeedtitle'] = 'CMS Made Simple RSS Feed';
$lang['rsstemplate'] = 'RSS Template';
$lang['selectcategory'] = 'Select Category';
$lang['showchildcategories'] = 'Show Child Categories';
$lang['sortascending'] = 'Sort Ascending';
$lang['startdate'] = 'Start Date';
$lang['startoffset'] = 'Start displaying at the nth item';
$lang['startrequiresend'] = 'Entering a start date requires an end date also';
$lang['submit'] = 'Submit';
$lang['summary'] = 'Summary';
$lang['summarytemplate'] = 'Summary Template';
$lang['summarytemplateupdated'] = 'The News Summary Template was successfully updated.';
$lang['title'] = 'Title';
$lang['options'] = 'Options';
$lang['optionsupdated'] = 'The options were successfully updated.';
$lang['useexpiration'] = 'Use Expiration Date';
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
<li>\&quot;category_id\&quot; - Id of the news categpry</li>
<li>\&quot;name\&quot; - Name of the news category</li>
</ul>
';
$lang['eventdesc-NewsCategoryEdited'] = 'Sent when a category is edited.';
$lang['eventhelp-NewsCategoryEdited'] = '<p>Sent when a category is edited.</p>
<h4>Parameters</h4>
<ul>
<li>\&quot;category_id\&quot; - Id of the news categpry</li>
<li>\&quot;name\&quot; - Name of the news category</li>
</ul>
';
$lang['eventdesc-NewsCategoryDeleted'] = 'Sent when a category is deleted.';
$lang['eventhelp-NewsCategoryDeleted'] = '<p>Sent when a category is deleted.</p>
<h4>Parameters</h4>
<ul>
<li>\&quot;category_id\&quot; - Id of the news categpry</li>
</ul>
';
$lang['helpnumber'] = 'Maximum number of items to display =- leaving empty will show all items.';
$lang['helpstart'] = 'Start at the nth item -- leaving empty will start at the first item.';
$lang['helpmakerssbutton'] = 'Make a button to link to an RSS feed of the News items.';
$lang['helpcategory'] = 'Only display items for that category. <b>Use * after the name to show children.</b>  Multiple categories can be used if separated with a comma. Leaving empty, will show all categories.';
$lang['helpmoretext'] = 'Text to display at the end of a news item if it goes over the summary length.  Defaults to &quot;more...&quot;';
$lang['helpsummarytemplate'] = 'Use a separate template for displaying the article summary.  It have to live in modules/News/templates.';
$lang['helpdetailtemplate'] = 'Use a separate template for displaying the article detail.  It have to live in modules/News/templates.';
$lang['helpsortby'] = 'Field to sort by.  Options are: &quot;news_date&quot;, &quot;summary&quot;, &quot;news_data&quot;, &quot;news_category&quot;, &quot;news_title&quot;.  Defaults to &quot;news_date&quot;.';
$lang['helpsortasc'] = 'Sort news items in ascending date order rather than descending.';
$lang['helpdetailpage'] = 'Page to display News details in.  This can either be a page alias or an id. Used to allow details to be displayed in a different template from the summary.';
$lang['helpdateformat'] = 'Format to display the article&#039;s post date with.  This is based on the <a href=&quot;http://php.net/strftime&quot; target=&quot;_blank&quot;>strftime</a> function and can be used in your template with $entry->formatpostdate.  It defaults to %x, which is the default date format for the server&#039;s locale.';
$lang['help'] = '	<h3>What does this do?</h3>
	<p>News is a module for displaying news events on your page, similar to a blog style, except with more features!.  When the module is installed, a News admin page is added to administration menu that will allow you to select or add a news category.  Once a news category is created or selected, a list of news items for that category will be displayed.  From here, you can add, edit or delete news items for that category.</p>
	<h3>Template variables</h3>
	<ul>
		<li><b>itemcount</b> - The number of news articles to be shown.</li>
	</ul>
	<h3>Security</h3>
	<p>The user must belong to a group with the &#039;Modify News&#039; permission in order to add, edit, or delete News entries.</p>
	<p>In order to edit the layout templates, the user must belong to a group with the &#039;Modify Templates&#039; permission.</p>
	<p>In order to edit the global news preferences, the user must belong to a group with the &#039;Modify Site Preferences&#039; permission.</p>
	<h3>How do I use it?</h3>
	<p>The easiest way to use it is with the {news} wrapper tag (wraps the module in a tag, to simplify the syntax).  This will insert the module into your template or page anywhere you wish, and display news items.  The code would look something like: <code>{news number=&#039;5&#039;}</code></p>';
$lang['utma'] = '156861353.352737611.1150885584.1154340251.1154414077.7';
$lang['utmz'] = '156861353.1154340251.6.6.utmccn=(referral)|utmcsr=dev.cmsmadesimple.org|utmcct=/my/diary.php|utmcmd=referral';
$lang['utmc'] = '156861353';
?>