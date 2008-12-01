<?php
$lang['friendlyname'] = 'Печать страницы';
$lang['description'] = 'Этот модуль легко настраиваемый способ предоставления печати страниц для CMSms. Альтернативные PDF-файлы с основным содержанием могут быть созданы на лету.';
$lang['postinstall'] = 'Модуль успешно установлен';
$lang['confirmuninstall'] = 'Вы уверены, что этот модуль должен быть удален?';
$lang['postuninstall'] = 'Модуль успешно удалён';
$lang['linktemplate'] = 'Шаблон ссылки';
$lang['printtemplate'] = 'Шаблон печати';
$lang['pdftemplate'] = 'Шаблон PDF';
$lang['templatesaved'] = 'Шаблон сохранён';
$lang['templatereset'] = 'Этот шаблон был сброшен в состояние по умолчанию';
$lang['confirmresettemplate'] = 'Вы уверены, что шаблон должен быть сброшен в значение по умолчанию?';
$lang['reset'] = 'Сброс по умолчанию';
$lang['save'] = 'Сохранить';
$lang['savetemplate'] = 'Сохранить шаблон';
$lang['savesettings'] = 'Сохранить настройки';
$lang['settings'] = 'Настройки';
$lang['settingssaved'] = 'Настройки сохранены';
$lang['pdfheader'] = 'Заголовок PDF';
$lang['headerfontsize'] = 'Размер шрифта заголовка';
$lang['contentfontsize'] = 'Размер шрифта контента';
$lang['orientation'] = 'Ориентация';
$lang['landscape'] = 'Пейзаж';
$lang['portrait'] = 'Портрет';
$lang['pdffooter'] = '';
$lang['pdffooterhelp'] = '';
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
$lang['help_class_img'] = 'Класс &lt;img&gt; тега, если установлен показ кнопки';
$lang['help_more'] = 'Поместите дополнительные опции в &lt;a&gt; ссылки';
$lang['help_onlyurl'] = 'Ожидается только url, а не полная ссылка';
$lang['changelog'] = '<ul>
<li>
<p>version 0.2.1 (calguy1000)</p>
<p>Tweaks to the default list template.  Adds more smarty variables to the
list template, and cleans up a warning.</p>
<p>Fixed a wierd little typo causing the module to break</p>
</li>
<li>
<p>version 0.2.0</p>
<p>Added support for generating PDF-files</p>
</li>
<li>
<p>version 0.1.1</p>
<p>Allowed specifying stylesheet content to override the system\'s</p>
</li>
<li>
<p>version 0.1.0</p>
<p>First usable version</p>
</li>
</ul>
';
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
$lang['utmz'] = '156861353.1199273691.20.7.utmccn=(referral)|utmcsr=dev.cmsmadesimple.org|utmcct=/forum/forum.php|utmcmd=referral';
$lang['utma'] = '156861353.1045566600.1193164440.1199503667.1199512112.27';
$lang['utmc'] = '156861353';
?>