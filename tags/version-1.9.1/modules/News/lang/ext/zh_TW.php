<?php
$lang['author'] = '作者';
$lang['sysdefaults'] = '恢復到預設值';
$lang['restoretodefaultsmsg'] = '該操作將把模板內容恢復到系統預設值.是否繼續?';
$lang['addarticle'] = '新增文章';
$lang['addcategory'] = '新增類別';
$lang['addnewsitem'] = '新增項目';
$lang['allcategories'] = '所有類別';
$lang['allentries'] = '所有記錄';
$lang['areyousure'] = '確定刪除?';
$lang['articles'] = '文章';
$lang['cancel'] = '取消';
$lang['category'] = '類別';
$lang['categories'] = '類別';
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
<p>Version 2.0.3</p>
<p>- Added the ability to track the original author of an article</p>
<li>
</ul>
</ul> 
';
$lang['content'] = '內容';
$lang['dateformat'] = '%s 不是有效的 yyyy-mm-dd hh:mm:ss 格式';
$lang['delete'] = '刪除';
$lang['description'] = '新增, 編輯和刪除新聞項目';
$lang['detailtemplate'] = '詳細模板';
$lang['displaytemplate'] = '顯示模板';
$lang['edit'] = '編輯';
$lang['enddate'] = '結束日期';
$lang['endrequiresstart'] = '輸入結束日期同時需要開始日期';
$lang['entries'] = '%s 項目';
$lang['status'] = '狀態';
$lang['expiry'] = '過期';
$lang['filter'] = '過濾';
$lang['more'] = '更多';
$lang['moretext'] = '更多文字';
$lang['name'] = '名稱';
$lang['news'] = '新聞';
$lang['news_return'] = '返回';
$lang['newcategory'] = '新類別';
$lang['needpermission'] = '你需要 \'%s\' 權限來執行這項操作。';
$lang['nocategorygiven'] = '沒有指定類別';
$lang['nocontentgiven'] = '沒有指定內容';
$lang['noitemsfound'] = '<strong>沒有</strong> 找到該類別的項目:%s';
$lang['nopostdategiven'] = '沒有指定發佈日期';
$lang['note'] = '<em>注意:</em> 日期必須是 \'yyyy-mm-dd hh:mm:ss\' 格式。';
$lang['notitlegiven'] = '沒有指定標題';
$lang['numbertodisplay'] = '顯示數目(不填顯示所有內容)';
$lang['print'] = '列印';
$lang['postdate'] = '發佈日期';
$lang['postinstall'] = '確認賦予管理新聞項目的用戶"修改新聞"的權限。';
$lang['rssfeedtitle'] = 'CMS Made Simple RSS Feed';
$lang['rsstemplate'] = 'RSS 模板';
$lang['selectcategory'] = '選擇類別';
$lang['showchildcategories'] = '顯示子類別';
$lang['sortascending'] = '遞增排列';
$lang['startdate'] = '開始日期';
$lang['startoffset'] = '從 nth 項目開始顯示';
$lang['startrequiresend'] = '輸入開始日期同時需要結束日期';
$lang['submit'] = 'Submit';
$lang['summary'] = '摘要';
$lang['summarytemplate'] = '摘要模板';
$lang['title'] = '標題';
$lang['options'] = '選項';
$lang['useexpiration'] = '使用過期日期';
$lang['showautodiscovery'] = '顯示自動發現連結';
$lang['autodiscoverylink'] = '自動發現URL(不填使用預設值)';
$lang['helpnumber'] = '最大顯示項目數(不填顯示所有項目)。';
$lang['helpstart'] = '從 nth 條開始顯示(不填從第一條顯示)。';
$lang['helpmakerssbutton'] = '為新聞項目的RSS種子連結新增按鈕。';
$lang['helpcategory'] = '只顯示該類別的項目。名稱前加*顯示子類別。多類別請用逗號分隔.不填將顯示所有類別。';
$lang['helpmoretext'] = '項目超過摘要長度時顯示的文字。 預設 "more..."';
$lang['helpsummarytemplate'] = '用獨立的模板顯示文章摘要. 模板必須位於 modules/News/templates.';
$lang['helpdetailtemplate'] = '用獨立的模板顯示文章內容. 模板必須位於 modules/News/templates.';
$lang['helpsortby'] = '排序欄位. 選項: "新聞日期","摘要","新聞內容","新聞類別","新聞標題". 預設為 "新聞日期"。';
$lang['helpsortasc'] = '使用遞增列新聞項目。';
$lang['helpdetailpage'] = '顯示新聞內容的詳細內容的頁面。 可以是頁面別名,也可以是id。 用來使詳細內容能夠以不同模板顯示。';
$lang['helpdateformat'] = '文章發佈日期的發佈格式。基於<a href="http://php.net/strftime" target="_blank">strftime</a>函數,並且能夠通過$entry->formatpostdate 在您的模板中使用。預設是伺服器的日期格式 : %x';
$lang['help'] = '	<h3>What does this do?</h3>
	<p>News is a module for displaying news events on your page, similar to a blog style, except with more features!.  When the module is installed, a News admin page is added to administration menu that will allow you to select or add a news category.  Once a news category is created or selected, a list of news items for that category will be displayed.  From here, you can add, edit or delete news items for that category.</p>
	<h3>Security</h3>
	<p>The user must belong to a group with the \'Modify News\' permission in order to add, edit, or delete News entries.</p>
	<p>In order to edit the layout templates, the user must belong to a group with the \'Modify Templates\' permission.</p>
	<p>In order to edit the global news preferences, the user must belong to a group with the \'Modify Site Preferences\' permission.</p>
	<h3>How do I use it?</h3>
	<p>The easiest way to use it is in conjunction with the cms_module tag.  This will insert the module into your template or page anywhere you wish, and display news items.  The code would look something like: <code>{cms_module module="news" number="5" category="beer"}</code></p>';
?>