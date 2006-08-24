<?php
$lang['author'] = 'Автор';
$lang['sysdefaults'] = 'Восстановить начальные значения';
$lang['restoretodefaultsmsg'] = 'Эта операция восстановит содержание шаблонов к изначальному. Продолжить?';
$lang['addarticle'] = 'Добавить новость';
$lang['addcategory'] = 'Добавить категорию';
$lang['addnewsitem'] = 'Добавить статью';
$lang['allcategories'] = 'Категории';
$lang['allentries'] = 'Новости';
$lang['areyousure'] = 'Вы действительно хотите удалить?';
$lang['articles'] = 'Статьи';
$lang['cancel'] = 'Отмена';
$lang['category'] = 'Категория';
$lang['categories'] = 'Категории';
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
$lang['content'] = 'Содержение';
$lang['dateformat'] = '%s - неверный формат даты yyyy-mm-dd hh:mm:ss';
$lang['delete'] = 'Удалить';
$lang['description'] = 'Добавление, редактирование и удаление новостей';
$lang['detailtemplate'] = 'Шаблон для полного материала';
$lang['displaytemplate'] = 'Шаблон для списка';
$lang['edit'] = 'Редактирование';
$lang['enddate'] = 'Дата окончания';
$lang['endrequiresstart'] = 'Ввод даты окончания требует ввода даты начала';
$lang['entries'] = '%s материалов';
$lang['status'] = 'Статус';
$lang['expiry'] = 'Истекает';
$lang['filter'] = 'Фильтр';
$lang['more'] = 'Подробнее';
$lang['moretext'] = 'Текст для \\"подробнее\\"';
$lang['name'] = 'Имя';
$lang['news'] = 'Новости';
$lang['news_return'] = 'Страница возврата';
$lang['newcategory'] = 'Новая категория';
$lang['needpermission'] = 'Необходимы права \\\'%s\\\' для совершения этого действия.';
$lang['nocategorygiven'] = 'Не введена категория';
$lang['nocontentgiven'] = 'Не введено содержимое';
$lang['noitemsfound'] = '<strong>Нет</strong> материалов в этой категории: %s';
$lang['nopostdategiven'] = 'Не введена дата публикации';
$lang['note'] = '<em>Примечание:</em> Даты должны быть в формате \\\'yyyy-mm-dd hh:mm:ss\\\'.';
$lang['notitlegiven'] = 'Не введён заголовок';
$lang['numbertodisplay'] = 'Количество для списка (если пустое, то выводит все)';
$lang['print'] = 'Печать';
$lang['postdate'] = 'Дата публикации';
$lang['postinstall'] = 'Убедитесь, что вы установили права "Modify News" для тех пользователей, кто может администрировать  материалы.';
$lang['rssfeedtitle'] = 'CMS Made Simple RSS Feed';
$lang['rsstemplate'] = 'RSS шаблон';
$lang['selectcategory'] = 'Выберите категорию';
$lang['showchildcategories'] = 'Показать дочерние категории';
$lang['sortascending'] = 'Сортировать по возрастанию';
$lang['startdate'] = 'Дата начала';
$lang['startoffset'] = 'Начать вывод новостей с n-ой';
$lang['startrequiresend'] = 'Ввод даты начала требует ввода даты окончания';
$lang['submit'] = 'Отправить';
$lang['summary'] = 'Превью';
$lang['summarytemplate'] = 'Шаблон для превью';
$lang['title'] = 'Заголовок';
$lang['options'] = 'Настройки';
$lang['useexpiration'] = 'Использовать дату окончания';
$lang['showautodiscovery'] = 'Показать ссылку для Feed Auto-Discovery';
$lang['autodiscoverylink'] = 'Ссылка на Feed (пустое значение по умолчанию)';
$lang['helpnumber'] = 'Maximum number of items to display =- leaving empty will show all items.';
$lang['helpstart'] = 'Start at the nth item -- leaving empty will start at the first item.';
$lang['helpmakerssbutton'] = 'Make a button to link to an RSS feed of the News items.';
$lang['helpcategory'] = 'Only display items for that category. Use * after the name to show children.  Multiple categories can be used if separated with a comma. Leaving empty, will show all categories.';
$lang['helpmoretext'] = 'Text to display at the end of a news item if it goes over the summary length.  Defaults to "more..."';
$lang['helpsummarytemplate'] = 'Use a separate template for displaying the article summary.  It have to live in modules/News/templates.';
$lang['helpdetailtemplate'] = 'Use a separate template for displaying the article detail.  It have to live in modules/News/templates.';
$lang['helpsortby'] = 'Field to sort by.  Options are: "news_date", "summary", "news_data", "news_category", "news_title".  Defaults to "news_date".';
$lang['helpsortasc'] = 'Sort news items in ascending date order rather than descending.';
$lang['helpdetailpage'] = 'Page to display News details in.  This can either be a page alias or an id. Used to allow details to be displayed in a different template from the summary.';
$lang['helpdateformat'] = 'Format to display the article\'s post date with.  This is based on the <a href="http://php.net/strftime" target="_blank">strftime</a> function and can be used in your template with $entry->formatpostdate.  It defaults to %x, which is the default date format for the sever\'s locale.';
$lang['help'] = '	<h3>What does this do?</h3>
	<p>News is a module for displaying news events on your page, similar to a blog style, except with more features!.  When the module is installed, a News admin page is added to administration menu that will allow you to select or add a news category.  Once a news category is created or selected, a list of news items for that category will be displayed.  From here, you can add, edit or delete news items for that category.</p>
	<h3>Security</h3>
	<p>The user must belong to a group with the \'Modify News\' permission in order to add, edit, or delete News entries.</p>
	<p>In order to edit the layout templates, the user must belong to a group with the \'Modify Templates\' permission.</p>
	<p>In order to edit the global news preferences, the user must belong to a group with the \'Modify Site Preferences\' permission.</p>
	<h3>How do I use it?</h3>
	<p>The easiest way to use it is in conjunction with the cms_module tag.  This will insert the module into your template or page anywhere you wish, and display news items.  The code would look something like: <code>{cms_module module="news" number="5" category="beer"}</code></p>';
?>