<?php
$lang['uploadscategory'] = 'Загрузка файлов';
$lang['title_available_templates'] = 'Доступные шаблоны';
$lang['resettodefault'] = 'Сбросить установки';
$lang['title_detail_template'] = 'Редактор шаблона Detail';
$lang['title_summary_template'] = 'Редактор шаблона Summary';
$lang['prompt_templatename'] = 'Имя шаблона';
$lang['prompt_template'] = 'Исходные данные шаблона';
$lang['title_summary_sysdefault'] = 'Шаблон Summary по умолчанию';
$lang['title_detail_sysdefault'] = 'Шаблон Detail по умолчанию';
$lang['info_sysdefault'] = '<em>(шаблон используется по умолчанию, когда выбирается новый шаблон)</em>';
$lang['template'] = 'Шаблон';
$lang['prompt_name'] = 'Имя';
$lang['prompt_default'] = 'По умолчанию';
$lang['prompt_newtemplate'] = 'Создать новый шаблон';
$lang['help_pagelimit'] = 'Maximum number of items to display (per page).  If this parameter is not supplied all matching items will be displayed.  If it is, and there are more items available than specified in the pararamter, text and links will be supplied to allow scrolling through the results';
$lang['prompt_page'] = 'Страница';
$lang['firstpage'] = '<<';
$lang['prevpage'] = '<';
$lang['nextpage'] = '>';
$lang['lastpage'] = '>>';
$lang['prompt_of'] = 'of';
$lang['prompt_pagelimit'] = 'Лимит страниц';
$lang['prompt_sorting'] = 'Отсортировано по';
$lang['title_filter'] = 'Фильтры';
$lang['published'] = 'Опубликовано';
$lang['draft'] = 'Черновик';
$lang['expired'] = 'Истекает';
$lang['author'] = 'Автор';
$lang['sysdefaults'] = 'Восстановить значения по умолчанию';
$lang['restoretodefaultsmsg'] = 'Эта операция восстановит содержание шаблонов к изначальному. Продолжить?';
$lang['addarticle'] = 'Добавить новость';
$lang['articleadded'] = 'Новость успешно добавлена.';
$lang['articleupdated'] = 'Новость успешно обновлена.';
$lang['articledeleted'] = 'Новость успешно удалена.';
$lang['addcategory'] = 'Добавить категорию';
$lang['categoryadded'] = 'Категория успешно добавлена.';
$lang['categoryupdated'] = 'Категория успешно обновлена.';
$lang['categorydeleted'] = 'Категория успешно удалена.';
$lang['addnewsitem'] = 'Добавить статью';
$lang['allcategories'] = 'Все категории';
$lang['allentries'] = 'Все новости';
$lang['areyousure'] = 'Вы действительно хотите это удалить?';
$lang['articles'] = 'Статьи';
$lang['cancel'] = 'Отмена';
$lang['category'] = 'Категория';
$lang['categories'] = 'Категории';
$lang['default_category'] = 'Категория по умолчанию';
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
</ul>';
$lang['content'] = 'Содержание';
$lang['dateformat'] = '%s - неверный формат даты yyyy-mm-dd hh:mm:ss';
$lang['delete'] = 'Удалить';
$lang['description'] = 'Добавление, редактирование и удаление новостей';
$lang['detailtemplate'] = 'Шаблон для полного текста новости';
$lang['detailtemplateupdated'] = 'Обновленный шаблон для полного текста новости успешно сохранен в базе данных.';
$lang['displaytemplate'] = 'Шаблон для списка';
$lang['edit'] = 'Редактировать';
$lang['enddate'] = 'Дата окончания';
$lang['endrequiresstart'] = 'Ввод даты окончания требует ввода даты начала';
$lang['entries'] = '%s материалов';
$lang['status'] = 'Статус';
$lang['expiry'] = 'Истекает';
$lang['filter'] = 'Фильтр';
$lang['more'] = 'Подробнее';
$lang['category_label'] = 'Категория:';
$lang['author_label'] = 'Опубликовано:';
$lang['moretext'] = 'Текст для \"подробнее\"';
$lang['name'] = 'Имя';
$lang['news'] = 'Новости';
$lang['news_return'] = 'Вернуться';
$lang['newcategory'] = 'Новая категория';
$lang['needpermission'] = 'Необходимы права \'%s\' для совершения этого действия.';
$lang['nocategorygiven'] = 'Не введена категория';
$lang['nocontentgiven'] = 'Не введено содержимое';
$lang['noitemsfound'] = '<strong>Нет</strong> материалов в этой категории: %s';
$lang['nopostdategiven'] = 'Не введена дата публикации';
$lang['note'] = '<em>Примечание:</em> Даты должны быть в формате \'yyyy-mm-dd hh:mm:ss\'.';
$lang['notitlegiven'] = 'Не введён заголовок';
$lang['nonamegiven'] = 'Не введено имя';
$lang['numbertodisplay'] = 'Какое кол-во пунктов показывать (если не задано, то выводит все)';
$lang['print'] = 'Печать';
$lang['postdate'] = 'Дата публикации';
$lang['postinstall'] = 'Убедитесь, что вы установили права "Modify News" для тех пользователей, кто должен администрировать материалы.';
$lang['rssfeedtitle'] = 'RSS лента CMS Made Simple';
$lang['rsstemplate'] = 'RSS шаблон';
$lang['selectcategory'] = 'Выберите категорию';
$lang['showchildcategories'] = 'Показать дочерние категории';
$lang['sortascending'] = 'Сортировать по возрастанию';
$lang['startdate'] = 'Дата начала';
$lang['startoffset'] = 'Начать вывод новостей с n-ой';
$lang['startrequiresend'] = 'Ввод даты начала требует ввода даты окончания';
$lang['submit'] = 'Отправить';
$lang['summary'] = 'Сводка новостей';
$lang['summarytemplate'] = 'Шаблон для сводки';
$lang['summarytemplateupdated'] = 'Шаблон для сводки был успешно обновлен.';
$lang['title'] = 'Заголовок';
$lang['options'] = 'Настройки';
$lang['optionsupdated'] = 'Настройки были успешно обновлены.';
$lang['useexpiration'] = 'Использовать дату окончания';
$lang['showautodiscovery'] = 'Показать ссылку для Feed Auto-Discovery';
$lang['autodiscoverylink'] = 'Ссылка на Feed (оставьте пустым для использования значения по умолчанию)';
$lang['eventdesc-NewsArticleAdded'] = 'Отправляется, когда статья добавлена.';
$lang['eventhelp-NewsArticleAdded'] = '<p>Отправляется, когда статья добавлена.</p>
<h4>параметры</h4>
<ul>
<li>\"news_id\" - Id новостной статьи</li>
<li>\"category_id\" - Id категории для этой статьи</li>
<li>\"title\" - Заголовок статьи</li>
<li>\"content\" - Content of the article</li>
<li>\"summary\" - Summary of the article</li>
<li>\"status\" - Status of the article ("draft" or "publish")</li>
<li>\"start_time\" - Дата публикации статьи</li>
<li>\"end_time\" - Дата окончания публикации статьи</li>
<li>\"useexp\" - Должно ли истечение срока быть проигнорировано</li>
</ul>
';
$lang['eventdesc-NewsArticleEdited'] = 'Отправляется, когда статья отредактирована.';
$lang['eventhelp-NewsArticleEdited'] = '<p>Отправляется, когда статья отредактирована.</p>
<h4>Параметры</h4>
<ul>
<li>\"news_id\" - Id of the news article</li>
<li>\"category_id\" - Id категории для этой статьи</li>
<li>\"title\" - Заголовок статьи</li>
<li>\"content\" - Содержание статьи</li>
<li>\"summary\" - Резюме статьи</li>
<li>\"status\" - Статус статьи ("draft" или "publish")</li>
<li>\"start_time\" - Дата публикации статьи</li>
<li>\"end_time\" - Дата окончания публикации статьи</li>
<li>\"useexp\" - Должно ли истечение срока быть проигнорировано</li>
</ul>
';
$lang['eventdesc-NewsArticleDeleted'] = 'Отправляется, когда статья была удалена.';
$lang['eventhelp-NewsArticleDeleted'] = '<p>Отправляется, когда статья была удалена.</p>
<h4>Параметры</h4>
<ul>
<li>\"news_id\" - Id новостной статьи</li>
</ul>
';
$lang['eventdesc-NewsCategoryAdded'] = 'Отправляется, когда категория добавлена.';
$lang['eventhelp-NewsCategoryAdded'] = '<p>Отправляется, когда категория была добавлена.</p>
<h4>Параметры</h4>
<ul>
<li>\"category_id\" - Id новостной категории</li>
<li>\"name\" - Имя новостной категории</li>
</ul>
';
$lang['eventdesc-NewsCategoryEdited'] = 'Отправляется, когда категория отредактирована.';
$lang['eventhelp-NewsCategoryEdited'] = '<p>Отправляется, когда категория отредактирована.</p>
<h4>Параметры</h4>
<ul>
<li>\"category_id\" - IId новостной категории</li>
<li>\"name\" - Имя новостной категории</li>
<li>\"origname\" - Исходное  имя новостной категории</li>
</ul>
';
$lang['eventdesc-NewsCategoryDeleted'] = 'Отправляется, когда категория удалена.';
$lang['eventhelp-NewsCategoryDeleted'] = '<p>Отправлется, когда категория удалена.</p>
<h4>параметры</h4>
<ul>
<li>\"category_id\" - Id удаленной категории </li>
<li>\"name\" - Имя удаленной категории</li>
</ul>
';
$lang['helpnumber'] = 'Максимальное число отображаемых элементов =- в случае незаполнения будет показывать все объекты.';
$lang['helpstart'] = 'Начать с n-го объекта -- в случае незаполнения будет начинать с первого объекта.';
$lang['helpmakerssbutton'] = 'Создать кнопку с ссылкой на RSS новостей. ';
$lang['helpcategory'] = 'Отображать только объекты данной категории. <b>Необходимо использовать * после имени, чтобы показать дочерние объекты.</b> чтобы ввести несколько категорий, их нужно разделить запятыми. В случае незаполнения, будет показывать все категории.';
$lang['helpmoretext'] = 'Текст, отображаемый в конце новостного объекта если он превышает длину резюме. По умолчанию "more..."';
$lang['helpsummarytemplate'] = 'Использовать отдельный шаблон для отображения резюме. Он должен быть расположен в папке modules/News/templates.';
$lang['helpdetailtemplate'] = 'Использовать отдельный шаблон для отображения полной статьи. Он должен быть расположен в папке modules/News/templates.';
$lang['helpsortby'] = 'Поле для сортировки.  Доступные значения: "news_date", "summary", "news_data", "news_category", "news_title". По умолчанию используется "news_date".';
$lang['helpsortasc'] = 'Сортировать статьи по возрастанию даты, а не по убыванию.';
$lang['helpdetailpage'] = 'Страница для отображения полного текста новостного сообщения. Это может быть либо идентификатор страницы, либо алиас. Используется для отображения полного текста новостного сообщения с помощью шаблона, отличного от используемого в краткой сводке.';
$lang['helpdateformat'] = 'Формат даты отправки новостной статьи. Базируется на функции <a href="http://php.net/strftime" target="_blank">strftime</a> и может быть использован в шаблоне как $entry->formatpostdate. По умолчанию %x, т.е. формат даты по умолчанию для локали сервера.';
$lang['helpshowarchive'] = 'Показывать только статьи с истекшим сроком.';
$lang['helpbrowsecat'] = 'Показывает список категорий.';
$lang['help'] = '<h3>What does this do?</h3>
	<p>News is a module for displaying news events on your page, similar to a blog style, except with more features!.  When the module is installed, a News admin page is added to administration menu that will allow you to select or add a news category.  Once a news category is created or selected, a list of news items for that category will be displayed.  From here, you can add, edit or delete news items for that category.</p>
	<h3>Template variables</h3>
	<ul>
		<li><b>itemcount</b> - The number of news articles to be shown.</li>
		<li><b>entry->authorname</b> - The full name of the the author including First and Last name.</li>
	</ul>
	<h3>Security</h3>
	<p>The user must belong to a group with the \'Modify News\' permission in order to add, edit, or delete News entries.</p>
	<p>In order to edit the layout templates, the user must belong to a group with the \'Modify Templates\' permission.</p>
	<p>In order to edit the global news preferences, the user must belong to a group with the \'Modify Site Preferences\' permission.</p>
	<h3>How do I use it?</h3>
	<p>The easiest way to use it is with the {news} wrapper tag (wraps the module in a tag, to simplify the syntax).  This will insert the module into your template or page anywhere you wish, and display news items.  The code would look something like: <code>{news number=\'5\'}</code></p>';
$lang['utmz'] = '156861353.1180468314.53.35.utmccn=(referral)|utmcsr=forum.cmsmadesimple.org|utmcct=/index.php/topic,6763.15.html|utmcmd=referral';
$lang['utma'] = '156861353.1218847644.1167895455.1180885304.1181325173.56';
$lang['utmc'] = '156861353';
?>