<?php
$lang['sysdefaults'] = '恢复到默认';
$lang['restoretodefaultsmsg'] = '该操作将把模板内容恢复到系统默认值.是否继续?';
$lang['addarticle'] = '新增文章';
$lang['addcategory'] = '新增类别';
$lang['addnewsitem'] = '新增条目';
$lang['allcategories'] = '所有类别';
$lang['allentries'] = '所有记录';
$lang['areyousure'] = '确定删除?';
$lang['articles'] = '文章';
$lang['cancel'] = '取消';
$lang['category'] = '类别';
$lang['categories'] = '类别';
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
</li> 
</ul> 
';
$lang['content'] = '内容';
$lang['dateformat'] = '%s 不是合法的 yyyy-mm-dd hh:mm:ss 格式';
$lang['delete'] = '删除';
$lang['description'] = '新增.编辑和删除新闻条目';
$lang['detailtemplate'] = '详细模板';
$lang['displaytemplate'] = '显示模板';
$lang['edit'] = '编辑';
$lang['enddate'] = '结束日期';
$lang['endrequiresstart'] = '输入结束日期同时需要开始日期';
$lang['entries'] = '%s 条目';
$lang['status'] = '状态';
$lang['expiry'] = '过期';
$lang['filter'] = '过滤';
$lang['more'] = '更多';
$lang['moretext'] = '更多文字';
$lang['name'] = '名称';
$lang['news'] = '新闻';
$lang['news_return'] = '返回';
$lang['newcategory'] = '新类别';
$lang['needpermission'] = '你需要 \'%s\' 权限来执行这项操作.';
$lang['nocategorygiven'] = '没有指定类别';
$lang['nocontentgiven'] = '没有指定内容';
$lang['noitemsfound'] = '<strong>没有</strong> 找到该类别的条目: %s';
$lang['nopostdategiven'] = '没有指定发布日期';
$lang['note'] = '<em>注意:</em>日期必须是 \'yyyy-mm-dd hh:mm:ss\' 格式.';
$lang['notitlegiven'] = '没有给出标题';
$lang['numbertodisplay'] = '显示数目(不填显示所有内容)';
$lang['print'] = '打印';
$lang['postdate'] = '发布日期';
$lang['postinstall'] = '确认赋予管理新闻条目的用户"修改新闻"的权限';
$lang['rsstemplate'] = 'RSS 模板';
$lang['selectcategory'] = '选择类别';
$lang['showchildcategories'] = '显示子类别';
$lang['sortascending'] = '升序排列';
$lang['startdate'] = '开始日期';
$lang['startoffset'] = '从 nth 条目开始显示';
$lang['startrequiresend'] = '输入开始日期同时需要结束日期';
$lang['submit'] = '提交';
$lang['summary'] = '摘要';
$lang['summarytemplate'] = '摘要模板';
$lang['title'] = '标题';
$lang['options'] = '选项';
$lang['useexpiration'] = '使用过期日期';
$lang['showautodiscovery'] = '显示自动发现链接';
$lang['autodiscoverylink'] = '自动发现URL(不填使用默认)';
$lang['helpnumber'] = '最大显示条目数(不填显示所有条目)';
$lang['helpstart'] = '从 nth 条开始显示(不填从第一条显示).';
$lang['helpmakerssbutton'] = '为新闻条目的RSS种子链接创建按钮.';
$lang['helpcategory'] = '只显示该类别的条目. 名称前加*显示子类别. 多类别请用逗号分隔.不填将显示所有类别';
$lang['helpmoretext'] = '条目超过摘要长度时显示的文字. 默认为 "more"';
$lang['helpsummarytemplate'] = '用独立的模板显示文章摘要. 模板必须位于modules/News/templates.';
$lang['helpdetailtemplate'] = '用独立的模板显示文章内容. 模板必须位于modules/News/templates.';
$lang['helpsortby'] = '排序栏位. 选项: "新闻日期","摘要","新闻内容","新闻类别","新闻标题". 默认 "新闻日期"';
$lang['helpsortasc'] = '使用升序排列新闻条目';
$lang['helpdetailpage'] = '显示新闻内容的详细内容的页面. 可以是页面别名,也可以是id. 用来使详细内容能够以不同模板显示';
$lang['helpdateformat'] = '文章发布日期的发布格式. 基于<a href="http://php.net/strftime" target="_blank">strftime</a>函数,并且能够通过$entry->formatpostdate 在您的模板中使用. 默认是服务器的日期格式 : %x';
$lang['help'] = '	<h3>What does this do?</h3>
	<p>News is a module for displaying news events on your page, similar to a blog style, except with more features!.  When the module is installed, a News admin page is added to administration menu that will allow you to select or add a news category.  Once a news category is created or selected, a list of news items for that category will be displayed.  From here, you can add, edit or delete news items for that category.</p>
	<h3>Security</h3>
	<p>The user must belong to a group with the \'Modify News\' permission in order to add, edit, or delete News entries.</p>
	<h3>How do I use it?</h3>
	<p>The easiest way to use it is in conjunction with the cms_module tag.  This will insert the module into your template or page anywhere you wish, and display news items.  The code would look something like: <code>{cms_module module="news" number="5" category="beer"}</code></p>';
?>