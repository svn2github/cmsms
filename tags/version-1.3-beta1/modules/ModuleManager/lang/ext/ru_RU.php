<?php
$lang['prompt_settings'] = 'Настройки';
$lang['prompt_otheroptions'] = 'Другие опции';
$lang['reset'] = 'Сбросить';
$lang['error_permissions'] = '<strong><em>ВНИМАНИЕ:</em></strong>Недостаточно прав для установки модулей в каталог. Вы можете также испытывать проблемы с режимом PHP Safe. Пожалуйста проверьте что безопасный режим заблокирован, и что права файловой системы являются достаточными.';
$lang['error_minimumrepository'] = 'Версия репозитория не совместима с этим менеджером модулей';
$lang['prompt_reseturl'] = 'Сбросить URL в значение по умолчанию';
$lang['prompt_resetcache'] = 'Сбросить локальный кеш данных репозитория';
$lang['prompt_dl_chunksize'] = 'Размер скачиваемых пакетов (Kb)';
$lang['text_dl_chunksize'] = 'Максимальное количество данных, загружаемых с сервера одним пакетом (при установке модуля)';
$lang['error_nofilesize'] = 'Не задан размер файла';
$lang['error_nofilename'] = 'Не задано имя файла';
$lang['error_checksum'] = 'Ошибка при вычислении контрольной суммы. Это скорее всего значит, что файл побился либо когда он был закачан в репозиторий, либо при загрузке на ваш сервер.';
$lang['cantdownload'] = 'Невозможно загрузить';
$lang['download'] = 'Загрузить и установить';
$lang['error_moduleinstallfailed'] = 'Установка модуля не произведена';
$lang['error_connectnomodules'] = 'Несмотря на то, что подключение к репозиторию модулей было успешным, похоже в нем ещё нету никаких модулей';
$lang['submit'] = 'Отправить';
$lang['text_repository_url'] = 'URL вида http://www.mycmssite.com/path/soap.php?module=ModuleRepository';
$lang['prompt_repository_url'] = 'URL репозитория модулей:';
$lang['availmodules'] = 'Доступные модули';
$lang['preferences'] = 'Настройки';
$lang['preferencessaved'] = 'Настройки сохранены';
$lang['repositorycount'] = 'Модули, найденные в репозитарии';
$lang['instcount'] = 'Модули, установленные на данный момент';
$lang['availablemodules'] = 'Текущий статус модулей на данный момент доступных из репозитария';
$lang['helptxt'] = 'Справка';
$lang['abouttxt'] = 'О модуле';
$lang['xmltext'] = 'XML файл';
$lang['nametext'] = 'Название модуля';
$lang['vertext'] = 'Версия';
$lang['sizetext'] = 'Размер (килобайт)';
$lang['statustext'] = 'Статус/Действие';
$lang['uptodate'] = 'Установлен';
$lang['install'] = 'установить';
$lang['newerversion'] = 'Более новая версия установлена';
$lang['onlynewesttext'] = 'Показывать только новейшие версии';
$lang['upgrade'] = 'Обновить';
$lang['error_nosoapconnect'] = 'Невозможно подключиться к SOAP серверу';
$lang['error_soaperror'] = 'Проблема с SOAP';
$lang['error_norepositoryurl'] = 'URL репозитория модулей не задан';
$lang['friendlyname'] = 'Менеджер модулей';
$lang['postinstall'] = 'Сообщение после установки, (например, о необходимости установки правильных разрешений)';
$lang['postuninstall'] = 'Менеджер модулей удалён. Теперь установка модулей с удалённых серверов более невозможна, однако локальная установка продолжит функционировать.';
$lang['really_uninstall'] = 'Вы уверены, что хотите удалить этот модуль?';
$lang['uninstalled'] = 'Модуль удалён.';
$lang['installed'] = 'Модуль версии %s установлен.';
$lang['upgraded'] = 'Модуль обновлён до версии %s.';
$lang['moddescription'] = 'Этот модуль, являясь клиентом для ModuleRepository, позволяет предварительно просматривать и устанавливать модули с удаленных серверов, избавляя вас от необходимости вручную закачивать файлы на сервер. XML файлы модулей закачиваются при помощи SOAP, проверяются на правильность и после этого устанавливаются автоматически.';
$lang['error'] = 'Ошибка!';
$lang['admindescription'] = 'Инструмент для загрузки и установки модулей с удалённых серверов.';
$lang['accessdenied'] = 'Отказано в доступе. Пожалуйста, проверьте свои права.';
$lang['changelog'] = '<ul>
<li>Version 1.0. 10 January 2006. Initial Release.</li>
<li>Version 1.1. July, 2006. Released with the 1.0- beta</li>
<li>Version 1.1.1 August, 2006.  Require 1.0.1 of nuSOAP</li>
<li>Version 1.1.2 September, 2006.  Fixed a mistake that resulted in upgrade not not working at all</li>
<li>Version 1.1.3 September, 2006.
  <ul>
  <li>Bumped minimum CMS Version to 1.0</li>
  <li>Now use 1 request to get the complete list of modules from the repository</li>
  <li>Added some missing lang strings</li>
  <li>Added the ability to reset the local cache of repository information</li>
  <li>Added the ability to restore the repository url to factory defaults</li>
  </ul>
<li>Version 1.1.4 February, 2007.  Now handles the safe mode check, and disables upgrading or installing modules if the permissions are wrong.</li>
<li>Version 1.1.5 September, 2007. New preference to make only latest module version show. Added nice message after saving preferences</li>
</li>
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
$lang['utmz'] = '156861353.1199769273.42.9.utmccn=(referral)|utmcsr=cmsmadesimple.org|utmcct=/|utmcmd=referral';
$lang['utma'] = '156861353.1045566600.1193164440.1199934223.1199941862.44';
$lang['utmc'] = '156861353';
$lang['utmb'] = '156861353';
?>