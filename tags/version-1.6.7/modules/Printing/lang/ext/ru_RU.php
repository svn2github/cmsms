<?php
$lang['friendlyname'] = 'Печать страницы';
$lang['description'] = 'Этот модуль легко настраиваемый способ предоставления печати страниц для CMSms. Альтернативные PDF-файлы с основным содержанием могут быть созданы на лету.';
$lang['postinstall'] = 'Модуль успешно установлен';
$lang['confirmuninstall'] = 'Вы уверены, что этот модуль должен быть удален?';
$lang['postuninstall'] = 'Модуль успешно удалён';
$lang['linktemplate'] = 'Шаблон ссылки';
$lang['printtemplate'] = 'Шаблон печати';
$lang['pdftemplate'] = 'Шаблон PDF';
$lang['pdfengine'] = 'движок PDF';
$lang['internal'] = 'Встроенный движок (tcpdf)';
$lang['templatesaved'] = 'Шаблон сохранён';
$lang['templatereset'] = 'Этот шаблон был сброшен в состояние по умолчанию';
$lang['confirmresettemplate'] = 'Вы уверены, что шаблон должен быть сброшен в значение по умолчанию?';
$lang['reset'] = 'Сброс по умолчанию';
$lang['save'] = 'Сохранить';
$lang['upgraded'] = 'обновлен до версии %s';
$lang['savetemplate'] = 'Сохранить шаблон';
$lang['savesettings'] = 'Сохранить настройки';
$lang['pdfsettings'] = 'Настройки PDF';
$lang['pdfsettingssaved'] = 'Настройки PDF сохранены';
$lang['pdfheader'] = 'Заголовок PDF';
$lang['pdfenable'] = 'Включить выдачу PDF';
$lang['pdfenablehelp'] = 'Выдача PDF  рудиментарно выводит только основное содержание. Используйте эту функцию по своему усмотрению, и не жалуйтесь на качество результата.';
$lang['headerfontsize'] = 'Размер шрифта заголовка';
$lang['contentfontsize'] = 'Размер шрифта контента';
$lang['fonttypetext'] = 'Шрифт';
$lang['fontserif'] = 'Шрифт с засечками';
$lang['fontsansserif'] = 'Без засечек';
$lang['orientation'] = 'Ориентация';
$lang['landscape'] = 'Пейзаж';
$lang['portrait'] = 'Портрет';
$lang['pdffooter'] = ' ';
$lang['pdffooterhelp'] = ' ';
$lang['template'] = 'Шаблон';
$lang['notemplatecontent'] = 'Нет нового содержания шаблона... ';
$lang['defaultlinktext'] = 'Версия для печати';
$lang['defaultpdflinktext'] = 'Создать PDF';
$lang['backbuttontext'] = 'Назад';
$lang['overridestylereset'] = 'Корректировка таблицы стилей была сброшена';
$lang['overridestylesaved'] = 'Корректировка таблицы стилей была сохранена';
$lang['overridestyle'] = 'Корректировка таблицы стилей печати';
$lang['confirmresetstyle'] = 'Вы уверены, что таблица стилей должна быть сброшена?';
$lang['stylesheet'] = 'Таблица стилей';
$lang['help_text'] = 'Откорректируйте текст значения по умолчанию для ссылки печать/PDF';
$lang['help_pdf'] = 'Установите \'истина\', чтобы показать ссылки для вывода содержания основной страницы в файл формата PDF вместо печати';
$lang['help_popup'] = 'Установите \'истина\' и страница для печати будет открыта в новом окне.';
$lang['help_script'] = 'Установите \'истина\' и на странице печати будет использован javascript  для автоматического показа диалога печати';
$lang['help_showbutton'] = 'Установите \'истина\' для отображения графической кнопки';
$lang['help_class'] = 'Класс для ссылки по умолчанию \'noprint\'';
$lang['help_src_img'] = 'Показать этот файл изображения по умолчанию';
$lang['help_class_img'] = 'Класс <img> тега, если установлен показ кнопки';
$lang['help_more'] = 'Поместите дополнительные опции в <a> ссылки';
$lang['help_onlyurl'] = 'Ожидается только url, а не полная ссылка';
$lang['help_includetemplate'] = 'Если установлено значение "true", то для печати, а также вывода в PDF будет использоваться весь шаблон, а не только содержание страницы. Вероятно, вам потребуется доработка стилей для печати.';
$lang['help'] = '<b>What does this module do?</b>
<br/>
This allow you to insert a link in pages/templates which directs the 
visitor to a version of the page better suited for printing. Several parameters can be set so make the link and
printer friendly page look just as you\'d like. As of version 0.2.0, a parameter can be set to onthefly-generation of a PDF-file instead.
<br/>
For now the module only supports "plain" content pages, no module-redirections etc. But neither does the builtin printing-functionality in CMSms.
<br/>
Please note that the module currently only outputs the main content, not alternate content blocks defined in the templates.

<br/><br/>
<b>How do I use this module?</b>
<br/>
Basically you install the module, access it\'s administration interface and review/change the templates for the
link and for the printable page
<br/>
In you page content or template you then insert something like:
<pre>
{cms_module module=\'printing\' <i>params</i>}
</pre>
and a link should emerge on your pages. 
<br/><br/>
<b>Notes:</b>
<br/>
<ul>
<li>PDF Generation is experimental at this time.</li>
<li>PDF Generation may not work on servers with php 4.x, it is recommended you encourage your host to upgrade to php5 if you want PDF support.</li>
</ul>
';
$lang['utma'] = '156861353.3831803396166608400.1236078336.1242483093.1242487978.79';
$lang['utmz'] = '156861353.1242036083.77.58.utmccn=(referral)|utmcsr=forum.cmsmadesimple.org|utmcct=/index.php|utmcmd=referral';
$lang['utmc'] = '156861353';
$lang['utmb'] = '156861353';
?>