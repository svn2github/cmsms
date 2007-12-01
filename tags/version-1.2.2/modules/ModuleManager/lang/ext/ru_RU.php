<?php
$lang['prompt_dl_chunksize'] = 'Размер скачиваемых пакетов (Kb)';
$lang['text_dl_chunksize'] = 'Максимальное количество данных, скачиваемых с сервера одним пакетом (при установке моудля)';
$lang['error_nofilesize'] = 'Не задан размер файла';
$lang['error_nofilename'] = 'Не задано имя файла';
$lang['error_checksum'] = 'Ошибка при вычислении контрольной суммы. Это скорее всего значит, что файл побился либо когда он был закачан в репозитарий, либо при скачивании на ваш сервер.';
$lang['cantdownload'] = 'Невозможно скачать';
$lang['download'] = 'Скачать и установить';
$lang['error_moduleinstallfailed'] = 'Установка модуля не произведена';
$lang['error_connectnomodules'] = 'Несмотря на то, что подключение к репозитарию модулей было успешным, похоже в нем ещё нету никаких модулей';
$lang['submit'] = 'Отправить';
$lang['text_repository_url'] = 'URL вида http://www.mycmssite.com/path/soap.php?module=ModuleRepository';
$lang['prompt_repository_url'] = 'URL репозитария модулей:';
$lang['availmodules'] = 'Доступные модули';
$lang['preferences'] = 'Настройки';
$lang['repositorycount'] = 'Модули, найденные в репозитарии';
$lang['instcount'] = 'Модули, установленные на данный момент';
$lang['availablemodules'] = 'Текущий статус модулей на данный момент доступных из репозитария';
$lang['helptxt'] = 'Справка';
$lang['abouttxt'] = 'О модуле';
$lang['xmltext'] = 'XML файл';
$lang['nametext'] = 'Название модуля';
$lang['vertext'] = 'Версия';
$lang['sizetext'] = 'Размер (килобайты)';
$lang['statustext'] = 'Статус/Действие';
$lang['uptodate'] = 'Установлен';
$lang['install'] = 'установить';
$lang['newerversion'] = 'Более новая версия установлена';
$lang['upgrade'] = 'Обновить';
$lang['error_nosoapconnect'] = 'Невозможно подключиться к SOAP серверу';
$lang['error_soaperror'] = 'Проблема с SOAP';
$lang['error_norepositoryurl'] = 'URL репозитария модулей не задан';
$lang['friendlyname'] = 'Менеджер модулей';
$lang['postinstall'] = 'Сообщение после установки, (например, о необходимости установки правильных разрешений)';
$lang['postuninstall'] = 'Менеджер модулей удален. Теперь установка модулей с удаленных серверов более невозможна, однако локальная установка продолжит функционировать.';
$lang['really_uninstall'] = 'Вы уверены, что хотите удалить этот модуль?';
$lang['uninstalled'] = 'Модуль удален.';
$lang['installed'] = 'Модуль версии %s установлен.';
$lang['upgraded'] = 'Модуль обновлен до версии %s.';
$lang['moddescription'] = 'Этот модуль, являясь клиентом для ModuleRepository, позволяет предварительно просматривать и устанавливать модули с удаленных серверов, избавляя вас от необходимости вручную закачивать файлы на сервер. XML файлы модулей закачиваются при помощи SOAP, проверяются на правильность и после этого устанавливаются автоматически.';
$lang['error'] = 'Ошибка!';
$lang['admindescription'] = 'Инструмент для скачивания и установки модулей с удаленных серверов.';
$lang['accessdenied'] = 'Отказано в доступе. Пожалуйста, проверьте свои права.';
$lang['changelog'] = '<ul>
<li>Version 1.0. 10 January 2006. Initial Release.</li>
<li>Version 1.1. July, 2006. Released with the 1.0- beta</li>
<li>Version 1.1.1 August, 2006.  Require 1.0.1 of nuSOAP</li>
</ul>';
$lang['help'] = '<h3>What Does This Do?</h3>
<p>A client for the ModuleRepository, this module allows previewing, and installing modules from remote sites without the need for ftping, or unzipping archives.  Module XML files are downloaded using SOAP, integrity verified, and then expanded automatically.</p>
<h3>How Do I Use It</h3>
<p>In order to use this module, you will need the \'Modify Modules\' permission, and you will also need the complete, and full URL to a \'Module Repository\' installation.  You can specify this url in the \'Site Admin\' --> \'Global Settings\' page.</p><br/>
<p>You can find the interface for this module under the \'Extensions\' menu.  When you select this module, the \'Module Repository\' installation will automatically be queried for a list of it\'s available xml modules.  This list will be cross referenced with the list of currently installed modules, and a summary page displayed.  From here, you can view the descriptive information, the help, and the about information for a module without physically installing it.  You can also choose to upgrade or install modules.</p>
<h3>Support</h3>
<p>As per the GPL, this software is provided as-is. Please read the text of the license for the full disclaimer.</p>
<h3>Copyright and License</h3>
<p>Copyright © 2006, calguy1000 <a href="mailto:calguy1000@hotmail.com"><calguy1000@hotmail.com></a>. All Rights Are Reserved.</p>
<p>This module has been released under the <a href="http://www.gnu.org/licenses/licenses.html#GPL">GNU Public License</a>. You must agree to this license before using the module.</p>';
$lang['utmz'] = '156861353.1156511737.9.2.utmccn=(referral)|utmcsr=forum.cmsmadesimple.org|utmcct=/index.php/topic,6094.0.html|utmcmd=referral';
$lang['utma'] = '156861353.887509338.1154012317.1157813891.1157876452.20';
$lang['utmc'] = '156861353';
?>