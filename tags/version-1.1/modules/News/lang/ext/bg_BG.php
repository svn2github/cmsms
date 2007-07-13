<?php
$lang['author'] = 'Автор';
$lang['sysdefaults'] = 'Връща фабричните настройки';
$lang['restoretodefaultsmsg'] = 'Тази операция връща шаблоните към техните фабрични настройки. Сигурни ли сте че искате да продължите?';
$lang['addarticle'] = 'Прибавя статия';
$lang['articleadded'] = 'Статията беше добавена.';
$lang['addcategory'] = 'Прибавя категория';
$lang['categoryadded'] = 'Категорията беше успешно добавена.';
$lang['categoryupdated'] = 'Категорията беше успешно обновена.';
$lang['addnewsitem'] = 'Прибавя новина';
$lang['allcategories'] = 'Всички категории';
$lang['allentries'] = 'Всички статии';
$lang['areyousure'] = 'Сигурни ли сте че искате да изтриете?';
$lang['articles'] = 'Статии';
$lang['cancel'] = 'Отказ';
$lang['category'] = 'Категория';
$lang['categories'] = 'Категории';
$lang['changelog'] = '<ul>
<li>
<p>Версия: 1.0</p>
<p>This module is a hacked and extended version of <em>Ted Kulp\'s</em> News module.  I simply added another field to the database, and some more code to make that field worl.... I also re-cleaned the code a bit, so it was a little easier to read, other than that, it\'s Ted\'s code.</p>
</li> 
<li> 
<p>Версия: 1.1</p> 
<p>Added the ability to set an automatic expiry date from a pulldown, moved the category selection, and on the main page you now filter the entries you want to see.</p> 
</li> 
<li> 
<p>Версия: 1.2</p> 
<p>Added summary, no_anchor and length parameters.  In summary mode links are made to the real articles, tags are stripped, and links are insreted to the news page and the specific news item.</p> 
</li> 
<li> 
<p>Версия: 1.3</p> 
<p>Minor cosmetic changes</p> 
</li> 
<li> 
<p>Версия 1.5</p> 
<p>Merged into the trunk News module</p> 
</li> 
<li> 
<p>Версия 1.6</p> 
<p>Added pagination, and moved the add button to the top (calguy)</p>
</li>
<li>
<p>Версия 2.0</p>
<p>Re-written to use smarty templates, and several other significant improvements</p>
</li>
<li>
<p>Version 2.0.1</p>
<p>Minor tweaks to the RSS output to allow it to work correctly on different browsers, and to support non alpha numeric characters in the description.</p> 
</li> 
<li>
<p>Версия 2.0.2</p>
<p>- Add a "start" parameter to specify a start offset for news items</p>
<p>- The template tabs now have a "reset to default" button on them</p>
<p>- Start menu item is now required, but end date is optional when useexpirydate is on, 
<p>- Change the permissions model significantly, The "Modify News" permission is only for articles and categories. "Modify Templates" permission is required to edit the templates, and "Modify Site Preferences" is required to edit the options.</p> 
</li> 
</ul> 
';
$lang['content'] = 'Съдържание';
$lang['dateformat'] = '%s не във валидния yyyy-mm-dd hh:mm:ss формат';
$lang['delete'] = 'Изтрива';
$lang['description'] = 'Прибавя, редактира и премахва новини';
$lang['detailtemplate'] = 'Шаблон за детайли';
$lang['detailtemplateupdated'] = 'Обновеният Шаблон за детайли беше успешно записан в базата данни.';
$lang['displaytemplate'] = 'Шаблон за бърз преглед';
$lang['edit'] = 'Редактира';
$lang['enddate'] = 'Крайна дата';
$lang['endrequiresstart'] = 'Въвеждането на крайна дата изисква и начална такава';
$lang['entries'] = '%s новини';
$lang['status'] = 'Статус';
$lang['expiry'] = 'Изтича';
$lang['filter'] = 'Филтер';
$lang['more'] = 'Повече';
$lang['moretext'] = 'Прочете повече';
$lang['name'] = 'Име';
$lang['news'] = 'Новини';
$lang['news_return'] = 'Връща';
$lang['newcategory'] = 'Нова категория';
$lang['needpermission'] = 'Необходими са ви \'%s\' права за изпълнение на тази функция.';
$lang['nocategorygiven'] = 'Няма зададена категория';
$lang['nocontentgiven'] = 'Няма зададено съдържание';
$lang['noitemsfound'] = '<strong>Няма</strong> намерени записи за категорията: %s';
$lang['nopostdategiven'] = 'Няма зададена дата';
$lang['note'] = '<em>Бележки:</em> Датите трябва да са в \'yyyy-mm-dd hh:mm:ss\' формат.';
$lang['notitlegiven'] = 'Няма зададено заглавие';
$lang['numbertodisplay'] = 'Брой статии за показване (ако е оставено празно показва всички)';
$lang['print'] = 'Печат';
$lang['postdate'] = 'Дата на публикуване';
$lang['postinstall'] = 'Уверете се че правото "Промяна на Новини" е избрано за потребителите които ще администрират новините.';
$lang['rssfeedtitle'] = 'CMS Made Simple RSS Feed';
$lang['rsstemplate'] = 'RSS шаблон';
$lang['selectcategory'] = 'Избира категория';
$lang['showchildcategories'] = 'Показва подкатегории';
$lang['sortascending'] = 'Сортира абв';
$lang['startdate'] = 'Начална дата';
$lang['startoffset'] = 'Започва да показва на n-тата статия';
$lang['startrequiresend'] = 'Въвеждането на начална дата изисква и крайна такава';
$lang['submit'] = 'Въвежда';
$lang['summary'] = 'Резюме';
$lang['summarytemplate'] = 'Шаблон за резюме';
$lang['summarytemplateupdated'] = 'The News Summary Template was successfully updated.';
$lang['title'] = 'Заглавие';
$lang['options'] = 'Опции';
$lang['optionsupdated'] = 'Опциите бяха успешно обновени.';
$lang['useexpiration'] = 'Използва крайна дата';
$lang['showautodiscovery'] = 'Показва автоматичен линк за rss емисия';
$lang['autodiscoverylink'] = 'Автоматичен линк за rss емисия (празно по подразбиране)';
$lang['eventdesc-NewsArticleAdded'] = 'Sent when an article is added.';
$lang['eventhelp-NewsArticleAdded'] = '<p>Sent when an article is added.</p>
<h4>Parameters</h4>
<ul>
<li>\\"news_id\\" - Id of the news article</li>
<li>\\"category_id\\" - Id of the category for this article</li>
<li>\\"title\\" - Title of the article</li>
<li>\\"content\\" - Content of the article</li>
<li>\\"summary\\" - Summary of the article</li>
<li>\\"status\\" - Status of the article ("draft" or "publish")</li>
<li>\\"start_time\\" - Date the article should start being displayed</li>
<li>\\"end_time\\" - Date the article should stop being displayed</li>
</ul>
';
$lang['eventdesc-NewsArticleEdited'] = 'Sent when an article is edited.';
$lang['eventhelp-NewsArticleEdited'] = '<p>Sent when an article is edited.</p>
<h4>Parameters</h4>
<ul>
<li>\\"news_id\\" - Id of the news article</li>
<li>\\"category_id\\" - Id of the category for this article</li>
<li>\\"title\\" - Title of the article</li>
<li>\\"content\\" - Content of the article</li>
<li>\\"summary\\" - Summary of the article</li>
<li>\\"status\\" - Status of the article ("draft" or "publish")</li>
<li>\\"start_time\\" - Date the article should start being displayed</li>
<li>\\"end_time\\" - Date the article should stop being displayed</li>
</ul>
';
$lang['eventdesc-NewsArticleDeleted'] = 'Sent when an article is deleted.';
$lang['eventhelp-NewsArticleDeleted'] = '<p>Sent when an article is deleted.</p>
<h4>Parameters</h4>
<ul>
<li>\\"news_id\\" - Id of the news article</li>
</ul>
';
$lang['eventdesc-NewsCategoryAdded'] = 'Sent when a category is added.';
$lang['eventhelp-NewsCategoryAdded'] = '<p>Sent when a category is added.</p>
<h4>Parameters</h4>
<ul>
<li>\\"category_id\\" - Id of the news categpry</li>
<li>\\"name\\" - Name of the news category</li>
</ul>
';
$lang['eventdesc-NewsCategoryEdited'] = 'Sent when a category is edited.';
$lang['eventhelp-NewsCategoryEdited'] = '<p>Sent when a category is edited.</p>
<h4>Parameters</h4>
<ul>
<li>\\"category_id\\" - Id of the news categpry</li>
<li>\\"name\\" - Name of the news category</li>
</ul>
';
$lang['eventdesc-NewsCategoryDeleted'] = 'Sent when a category is deleted.';
$lang['eventhelp-NewsCategoryDeleted'] = '<p>Sent when a category is deleted.</p>
<h4>Parameters</h4>
<ul>
<li>\\"category_id\\" - Id of the news categpry</li>
</ul>
';
$lang['helpnumber'] = 'Максимален брой статии за покзване =- оставяйки празно показва всички.';
$lang['helpstart'] = 'Показване от nтата статия -- оставяйки празно ще започне от първата статия.';
$lang['helpmakerssbutton'] = 'Бутон за връзка към RSS емисия за тази новина.';
$lang['helpcategory'] = 'Показва само новините в тази категория. Използва * след името за да покаже подкатегориите. Множествени категории могат да се използват разделени чрез запейтаки. Оставяйки празно, показва всички категории.';
$lang['helpmoretext'] = 'Текст за визуализиране накрая на всяка новина ако текстта на резюмето й е по-дълъг. По подразбиране "прочети повече..."';
$lang['helpsummarytemplate'] = 'Използва отделен шаблон за визуализиране на резюмето на новината. Може да се намери в /modules/News/templates.';
$lang['helpdetailtemplate'] = 'Използва отделен шаблон за визуализиране на детайлното показване на новината. Може да се намери в /modules/News/templates.';
$lang['helpsortby'] = 'Поле по което да се сортира. Възможности: "news_date", "summary", "news_data", "news_category", "news_title". По подразбиране е "news_date". ';
$lang['helpsortasc'] = 'Сортира в ред абв а не в яюь.';
$lang['helpdetailpage'] = 'Страница където да показва детайлите за новина. Тази страница може да бъде или псевдоним или id. Използва се за да може цялата новина да се покаже в различен шаблон от този за резюмето.';
$lang['helpdateformat'] = 'Формата на дата на публикация.  Базиран на <a href="http://php.net/strftime" target="_blank">strftime</a> функцията и може да се използва в шаблона като $entry->formatpostdate.  По подразбиране е %x, което е дата на сървъра, където е разположена страницата.';
$lang['help'] = '	<h3>What does this do?</h3>
	<p>News is a module for displaying news events on your page, similar to a blog style, except with more features!.  When the module is installed, a News admin page is added to administration menu that will allow you to select or add a news category.  Once a news category is created or selected, a list of news items for that category will be displayed.  From here, you can add, edit or delete news items for that category.</p>
	<h3>Security</h3>
	<p>The user must belong to a group with the \'Modify News\' permission in order to add, edit, or delete News entries.</p>
	<h3>How do I use it?</h3>
	<p>The easiest way to use it is in conjunction with the cms_module tag.  This will insert the module into your template or page anywhere you wish, and display news items.  The code would look something like: <code>{cms_module module="news" number="5" category="beer"}</code></p>';
$lang['utma'] = '156861353.1702809770.1147206472.1154263465.1154267626.122';
$lang['utmz'] = '156861353.1154263465.121.10.utmccn=(organic)|utmcsr=google|utmctr=cmsmadesimple|utmcmd=organic';
$lang['utmc'] = '156861353';
?>