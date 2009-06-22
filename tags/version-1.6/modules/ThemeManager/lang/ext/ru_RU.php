<?php
$lang['error_uploadpermissions'] = '<strong> ВНИМАНИЕ: </ STRONG> У вас недостаточно прав, чтобы загружать и устанавливать темы. Это может быть связано с правами на загрузку или правами для записи в подкаталогах модулей. Также причиной может быть включенный safe mode на вашем сервере.';
$lang['error_nomenumanager'] = 'Модуль MenuManager не найден';
$lang['active'] = 'Активный';
$lang['default'] = 'По умолчанию';
$lang['prompt_themename'] = 'Экспортировать тему как: ';
$lang['info_themename'] = 'Это поле определяет название темы на выходе не зависимо от названия темы на входе';
$lang['error_editingproblem'] = 'Проблема при удалении и изменении связанных с этой темой фалов.';
$lang['error_problemsavingincludes'] = 'Проблема при сохранении файлов, закодированных в эту тему.';
$lang['error_nofilesuploaded'] = 'Ничего не было закачано. Проверьте, что тег enctype формы multipart/form-data и именно нужное поле проверяется на закачанный файл.';
$lang['error_templateexists'] = 'Шаблон "%s" уже существует';
$lang['error_stylesheetexists'] = 'CSS "%s" уже существует';
$lang['error_nostylesheets'] = 'В данной теме не найдено ни одной таблицы стилей';
$lang['error_couldnotcreatetemplate'] = 'Невозможно создать определение шаблона';
$lang['error_couldnotassoccss'] = 'Проблема при связывании таблиц стилей с шаблоном';
$lang['error_nooutput'] = 'Нечего выводить';
$lang['error_notemplate'] = 'Шаблон не может быть найден';
$lang['error_dtdmismatch'] = 'Несовпадение версий DTD, невозможно импортировать';
$lang['import'] = 'Импортировать';
$lang['upload'] = 'Закачать тему';
$lang['id'] = 'ID';
$lang['name'] = 'Название';
$lang['export'] = 'Экспорт';
$lang['submit'] = 'Отправить';
$lang['friendlyname'] = 'Менеджер шаблонов';
$lang['postinstall'] = 'Удостоверьтесь, что установлено разрешение "Manage Themes" чтобы использовать этот модуль!';
$lang['uninstalled'] = 'Модуль удален.';
$lang['installed'] = 'Модуль версии %s установлен.';
$lang['prefsupdated'] = 'Настройки модуля обновленны.';
$lang['accessdenied'] = 'Отказано в доступе. Пожалуйста, проверьте свои права.';
$lang['error'] = 'Ошибка!';
$lang['upgraded'] = 'Модуль обновлен до версии %s.';
$lang['moddescription'] = 'Этот модуль позволяет импортировать и экспортировать содержимое тем (шаблонов и таблиц стилей)';
$lang['import_succeeded'] = 'Эта тема была успешно импортирована';
$lang['help'] = '<h3>What Does This Do?</h3>
<p>This module allows you to import and export templates and their attached stylesheets as "themes".  This allows you to share your look and feel with other cms users.</p
<h3>How Do I Use It</h3>
<p>This module has no front end interface, only an admin interface.  It allows you to select an existing (active) template, and click "Export".  An XML file containing the template and its attached stylesheets will be created and sent you you via download.</p>
<h3>Permissions</h3>
<p>The permissions model is strict for the Theme Manager to ensure database integrity.  The permission "Manage Themes" is required to export themes, and these three permissions ("Add Stylesheets", "Add StyleSheet Assocations", and "Add Templates") are required to be able to import a theme.</p>
<p>As well, the opposite functionality exists, you may upload a theme file (xml format) and have the enclosed templates and stylesheets automatically imported into your cmsms installation.</p>
<h3>Support</h3>
<p>This module does not include commercial support. However, there are a number of resources available to help you with it:</p>
<ul>
<li>For the latest version of this module, FAQs, or to file a Bug Report or buy commercial support, please visit the module homepage at <a href="http://dev.cmsmadesimple.org">dev.cmsmadesimple.org</a>.</li>
<li>Additional discussion of this module may also be found in the <a href="http://forum.cmsmadesimple.org">CMS Made Simple Forums</a>.</li>
<li>The author, calguy1000, can often be found in the <a href="irc://irc.freenode.net/#cms">CMS IRC Channel</a>.</li>
<li>Lastly, you may have some success emailing the author directly.</li>  
</ul>
<p>As per the GPL, this software is provided as-is. Please read the text
of the license for the full disclaimer.</p>

<h3>Copyright and License</h3>
<p>Copyright © 2005, Robert Campbell <a href="mailto:calguy1000@hotmail.com"><calguy1000@hotmail.com></a>. All Rights Are Reserved.</p>
<p>This module has been released under the <a href="http://www.gnu.org/licenses/licenses.html#GPL">GNU Public License</a>. You must agree to this license before using the module.</p>';
$lang['utma'] = '156861353.3831803396166608400.1236078336.1242483093.1242487978.79';
$lang['utmz'] = '156861353.1242036083.77.58.utmccn=(referral)|utmcsr=forum.cmsmadesimple.org|utmcct=/index.php|utmcmd=referral';
$lang['utmc'] = '156861353';
$lang['utmb'] = '156861353';
?>