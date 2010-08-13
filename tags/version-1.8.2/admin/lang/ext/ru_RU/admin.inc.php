<?php
$lang['admin']['session_use_cookies'] = 'Sessions are allowed to use Cookies';
$lang['admin']['errorgettingcontent'] = 'Could not retrieve information for the specified content object';
$lang['admin']['errordeletingcontent'] = 'Error deleting content (either this page has children or is the default content)';
$lang['admin']['invalidemail'] = 'Данный электронный адрес недействителен';
$lang['admin']['info_deletepages'] = 'Примечание: в связи с ограничением прав, некоторые из страниц, которые Вы выбрали для удаления могут не показываться в ниже приведенном списке';
$lang['admin']['info_pagealias'] = 'Укажите уникальный алиас для этой страницы.';
$lang['admin']['info_autoalias'] = 'Если это поле будет незаполнено, то алиас будет создан автоматически.';
$lang['admin']['invalidparent'] = 'Вы должны выбрать родительскую страницу (обратитесь к администратору, если вы не видите эту опцию).';
$lang['admin']['forgotpwprompt'] = 'Введите имя пользователя. После этого на электронную почту, связанную с этим именем, будет выслана информация с новым логином.';
$lang['admin']['info_basic_attributes'] = 'Это поле позволяет указать, какие свойства контента будет разрешено редактировать пользователям не имеющим права на "Modify Page Structure".';
$lang['admin']['basic_attributes'] = 'Основные свойства';
$lang['admin']['no_permission'] = 'У Вас нет разрешения выполнить эту функцию.';
$lang['admin']['bulk_success'] = 'Массовая операция была успешно обновлена.';
$lang['admin']['no_bulk_performed'] = 'Нет массовой операции для выполнения.';
$lang['admin']['info_preview_notice'] = 'Предупреждение: Эта панель предварительного просмотра ведет себя как окно браузера, разрешающее Вам передвигаться дальше от первоначально анонсируемой страницы. Однако, при этом Вы можете испытать неожиданное поведение. Если Вы передвигаетесь далеко от начальной страницы и возвращаетесь, Вы не можете видеть первоначальное содержание, пока Вы не произведёте изменение в содержании в главной вкладке, и затем перезагрузите эту вкладку. Добавляя содержание, если Вы передвигаетесь далеко от этой страницы, Вы будете неспособны вернуться, и должны обновить эту панель.';
$lang['admin']['sitedownexcludes'] = 'Исключите эти адреса из сообщений о недоступности сайта';
$lang['admin']['info_sitedownexcludes'] = 'Этот параметр позволяет вносить в список IP-адреса или сети, разделенные запятой, для которых не будет показываться сообщение о недоступности сайта. Это позволяет администраторам работать на сайте, пока анонимные посетители видят сообщение о недоступности сайта. <br/> <br/> Адреса могут быть определены в следующих форматах: <br/>
1. xxx.xxx.xxx.xxx - (точный адрес IP)<br/>
2. xxx.xxx.xxx. [yyy-zzz] - (диапазон адресов IP)<br/>
3. xxx.xxx.xxx.xxx/nn - (nnn = число битов, стиль cisco. то есть: 192.168.0.100/24 = все 192.168.0 подсети класса C)';
$lang['admin']['setup'] = 'Дополнительные настройки';
$lang['admin']['handle_404'] = 'Пользовательская страница 404';
$lang['admin']['sitedown_settings'] = 'Настройки сообщения о недоступности сайта';
$lang['admin']['general_settings'] = 'Общие настройки';
$lang['admin']['help_function_page_attr'] = '<h3>Каково назначение данного элемента?</h3>
<p>Этот тег используется для выдачи аттрибутов определенной страницы.</p>
<h3>Как мне это использовать?</h3>
<p>Вставить тег в шаблон, например: <code>{page_attr key="extra1"}</code>.</p>
<h3>Какие параметры используются?</h3>
<ul>
  <li><strong>key [необходим]</strong> Включает название возвращаемого аттрибута.</li>
</ul>';
$lang['admin']['forge'] = 'CMS Made Simple - Forge';
$lang['admin']['disable_wysiwyg'] = 'Отключить визуальный редактор на этой странице (независимо от шаблона или пользовательских настроек)';
$lang['admin']['help_function_page_image'] = '<h3>Каково назначение данного элемента?</h3>
<p>Этот тег используется для выдачи изображения или эскиза изображения определенной страницы.</p>
<h3>Как мне это использовать?</h3>
<p>Вставить тег в шаблон, например: <code>{page_image}</code>.</p>
<h3>Какие параметры используются?</h3>
<ul>
  <li>thumbnail - опционально возращает эскиз изображения вместо полного варианта.</li>
</ul>';
$lang['admin']['pagelink_circular'] = 'Внутренняя ссылка на страницу не может быть выбрана в качестве страницы назначения для другой внутренней ссылки';
$lang['admin']['destinationnotfound'] = 'Выбранная страница не может быть найдена или неверна';
$lang['admin']['help_function_dump'] = '<h3>What does this do?</h3>
  <p>This tag can be used to dump the contents of any smarty variable in a more readable format.  This is useful for debugging, and editing templates, to know the format and types of data available.</p>
<h3>How do I use it?</h3>
<p>Insert the tag in the template like <code>{dump item=\'the_smarty_variable_to_dump\'}</code>.</p>
<h3>What parameters does it take?</h3>
<ul>
<li><strong>item (required)</strong> - The smarty variable to dump the contents of.</li>
<li>maxlevel - The maximum number of levels to recurse (applicable only if recurse is also supplied.  The default value for this parameter is 3</li>
<li>nomethods - Skip output of methods from objects.</li>
<li>novars - Skip output of object members.</li>
<li>recurse - Recurse a maximum number of levels through the objects providing verbose output for each item until the maximum number of levels is reached.</li>
</ul>';
$lang['admin']['sqlerror'] = 'SQL ошибка в %s';
$lang['admin']['image'] = 'Изображение';
$lang['admin']['thumbnail'] = 'Эскиз';
$lang['admin']['searchable'] = 'Эта страница доступна для поиска';
$lang['admin']['help_function_content_image'] = '<h3>What does this do?</h3>
<p>This plugin allows template designers to prompt users to select an image file when editing the content of a page. It behaves similarly to the content plugin, for additional content blocks.</p>
<h3>How do I use it?</h3>
<p>Just insert the tag into your page template like: <code>{content_image block=\'image1\'}</code>.</p>
<h3>What parameters does it take?</h3>
<ul>
  <li><strong>(required)</strong> block - The name for this additional content block.
  <p>Example:</p>
  <pre>{content_image block=\'image1\'}</pre><br/>
  </li>

  <li><em>(optional)</em> label - A label or prompt for this content block in the edit content page.  If not specified, the block name will be used.</li>
 
  <li><em>(optional)</em> dir - The name of a directory (relative to the uploads directory, from which to select image files. If not specified, the uploads directory will be used.
  <p>Example: use images from the uploads/image directory.</p>
  <pre>{content_image block=\'image1\' dir=\'images\'}</pre><br/>
  </li>

  <li><em>(optional)</em> class - The css class name to use on the img tag in frontend display.</li>

  <li><em>(optional)</em> id - The id name to use on the img tag in frontend display.</li> 

  <li><em>(optional)</em> name - The tag name to use on the img tag in frontend display.</li> 

  <li><em>(optional)</em> width - The desired width of the image.</li>

  <li><em>(optional)</em> height - The desired height of the image.</li>

  <li><em>(optional)</em> alt - Alternative text if the image cannot be found.</li>


</ul>';
$lang['admin']['error_udt_name_chars'] = 'Коректное UDT название начинается с буквы или символа подчеркивания, за которой следует любое количество букв, цифр и подчеркиваний';
$lang['admin']['errorupdatetemplateallpages'] = 'Шаблон не активен';
$lang['admin']['hidefrommenu'] = 'Скрыть меню';
$lang['admin']['settemplate'] = 'Установить шаблон';
$lang['admin']['text_settemplate'] = 'Установить выбранные страницы в другой шаблон';
$lang['admin']['cachable'] = 'Кэшируется';
$lang['admin']['noncachable'] = 'Не кэшируется';
$lang['admin']['copy_from'] = 'Копировать с';
$lang['admin']['copy_to'] = 'Копировать на';
$lang['admin']['copycontent'] = 'Скопировать содержимое пункта';
$lang['admin']['md5_function'] = 'md5 функция';
$lang['admin']['tempnam_function'] = 'функция tempnam';
$lang['admin']['register_globals'] = 'PHP register_globals ';
$lang['admin']['output_buffering'] = 'PHP output_buffering ';
$lang['admin']['disable_functions'] = 'disable_functions in PHP ';
$lang['admin']['xml_function'] = 'Базовые поддержка XML (Expat)';
$lang['admin']['magic_quotes_gpc'] = '"Магические кавычки" для GET / POST / COOKIE';
$lang['admin']['magic_quotes_gpc_on'] = 'Одинарные и двойные кавычки, а также обратная косая черта экранируются автоматически. Могут возникнуть проблемы при сохранении шаблонов.';
$lang['admin']['magic_quotes_runtime'] = '"Магические кавычки" на выполнение';
$lang['admin']['magic_quotes_runtime_on'] = 'Most functions that return data will have quotes escaped with a backslash. You can to have problems';
$lang['admin']['file_get_contents'] = 'Тест file_get_contents';
$lang['admin']['check_ini_set'] = 'Тест ini_set';
$lang['admin']['check_ini_set_off'] = 'Вы можете испытывать трудности с некоторой функциональности без этой способности. Этот тест может терпеть неудачу если safe_mode включен';
$lang['admin']['file_uploads'] = 'Закачивание Файлов';
$lang['admin']['test_remote_url'] = 'Тест для удаленных URL';
$lang['admin']['test_remote_url_failed'] = 'Вы, вероятно, не сможет открыть файл на удаленном сервере.';
$lang['admin']['test_allow_url_fopen_failed'] = 'Если возможность fopen открывать URL отключена, вы не сможете получить доступ к объектам использующим FTP или HTTP протокол';
$lang['admin']['connection_error'] = 'Исходящие соединения HTTP, судя по всему, не работают! Существует брандмауэр или некоторые ACL для внешних подключений? Это приведет к сбою работы менеджера модулей, и возможно сбою других функций.';
$lang['admin']['remote_connection_timeout'] = 'Тайм-аут подключения!';
$lang['admin']['search_string_find'] = 'Подключение OK!';
$lang['admin']['connection_failed'] = 'Ошибка соединения!';
$lang['admin']['remote_response_ok'] = 'Удаленный ответ: ОК!';
$lang['admin']['remote_response_404'] = 'Удаленный ответ: не найдено!';
$lang['admin']['remote_response_error'] = 'Удаленный ответ: ошибка!';
$lang['admin']['notifications_to_handle'] = 'У Вас есть необработанные уведомления (<b>%d</b>) ';
$lang['admin']['notification_to_handle'] = 'У Вас есть необработанные уведомления (<b>%d</b>)';
$lang['admin']['notifications'] = 'Уведомления';
$lang['admin']['dashboard'] = 'Инфо панель';
$lang['admin']['ignorenotificationsfrommodules'] = 'Игнорировать уведомления от этих модулей';
$lang['admin']['admin_enablenotifications'] = 'Разрешить пользователям просматривать уведомления <br/><em>(уведомления будут показаны на всех страницах админ-центра)</em>';
$lang['admin']['enablenotifications'] = 'Разрешить пользовательские уведомления администратора в разделе';
$lang['admin']['test_check_open_basedir_failed'] = 'Ограничение open_basedir  действует. Вы можете испытывать трудности с некоторым дополнительным функционалом, с этим ограничением';
$lang['admin']['config_writable'] = 'config.php имеет права на запись. Безопаснее установить разрешение только для чтения';
$lang['admin']['caution'] = 'Внимание!';
$lang['admin']['create_dir_and_file'] = 'Проверка если HTTPD процесс может создать файл внутри директории, он создан';
$lang['admin']['os_session_save_path'] = 'Проверка невозможна из-за os.path';
$lang['admin']['unlimited'] = 'Неограничено';
$lang['admin']['open_basedir'] = 'PHP опция open_basedir';
$lang['admin']['open_basedir_active'] = 'Проверка невозможна из-за включенной опции open_basedir';
$lang['admin']['invalid'] = 'Неверно';
$lang['admin']['checksum_passed'] = 'Все контрольные суммы совпадают с загруженными файлами';
$lang['admin']['error_retrieving_file_list'] = 'Ошибка при получении списка файлов';
$lang['admin']['files_checksum_failed'] = 'Невозможно создать контрольные суммы для файлов';
$lang['admin']['failure'] = 'Ошибка';
$lang['admin']['help_function_process_pagedata'] = '<h3>What does this do?</h3>
<p>This plugin will process the data in the "pagedata" block of content pages through smarty.  It allows you to specify page specific data to smarty without changing the template for each page.</p>
<h3>How do I use it?</h3>
<ol>
  <li>Insert smarty assign variables and other smarty logic into the pagedata field of some of your content pages.</li>
  <li>Insert the <code>{process_pagedata}</code> tag into the very top of your page template.</li>
</ol>
<br/>
<h3>What parameters does it take?</h3>
<p>None at this time</p>';
$lang['admin']['page_metadata'] = 'Metadata для данной страницы';
$lang['admin']['pagedata_codeblock'] = 'Данные или логика Smarty для данной страницы';
$lang['admin']['error_uploadproblem'] = 'Произошла ошибка во время загрузки';
$lang['admin']['error_nofileuploaded'] = 'Файлы не были загружены';
$lang['admin']['files_failed'] = 'Файлы не прошли проверку функцией md5sum';
$lang['admin']['files_not_found'] = 'Файлы не найдены';
$lang['admin']['info_generate_cksum_file'] = 'Эта функция позволит Вам создать контрольную сумму файла и сохранить её на локальном компьютере для последующей проверки. Это должно быть сделано непосредственно перед запуском веб-сайта и/или после любых обновлений или значительных изменений.';
$lang['admin']['info_validation'] = 'Эта функция сравнивает контрольную сумму из загруженного файла с файлами текущей установки. Она может помочь в поиске проблем при загрузке, или точно установить, какие файлы были изменены, если ваша система была взломанна. Контрольная сумма файла генерируется для каждого выпуска CMS Made Simple начиная с версии 1.4 и выше.';
$lang['admin']['download_cksum_file'] = 'Загрузить контрольную сумму файла';
$lang['admin']['perform_validation'] = 'Провести проверку';
$lang['admin']['upload_cksum_file'] = 'Отправить контрольную сумму файла';
$lang['admin']['checksumdescription'] = 'Проверить целостность CMS-файлов, путем сравнения контрольных сумм';
$lang['admin']['system_verification'] = 'Контроль системы';
$lang['admin']['extra1'] = 'Дополнительный атрибут 1';
$lang['admin']['extra2'] = 'Дополнительный атрибут 2';
$lang['admin']['extra3'] = 'Дополнительный атрибут 3';
$lang['admin']['start_upgrade_process'] = 'Начало процесса обновления';
$lang['admin']['warning_upgrade'] = '<em><strong>Предупреждение:</strong></em> CMSMS нуждается в обновлении.';
$lang['admin']['warning_upgrade_info1'] = 'В настоящее время работает схема версии %s. и вам нужно обновить её до версии %s';
$lang['admin']['warning_upgrade_info2'] = 'Нажмите пожалуйста следующую ссылку: %s.';
$lang['admin']['warning_mail_settings'] = 'Ваши настройки почты не сконфигурированы. Это может сказаться на способности вашего сайта отправлять сообщения по электронной почте.  Вы должны перейти в <a href="%s">Extensions >> CMSMailer</a> и настроить параметры почты согласно информации, представленной вашим хостером.';
$lang['admin']['view_page'] = 'Показать эту страницу в новом окне';
$lang['admin']['off'] = 'Выкл';
$lang['admin']['on'] = 'Вкл';
$lang['admin']['invalid_test'] = 'Неверное значение тестового параметра!';
$lang['admin']['copy_paste_forum'] = 'Посмотреть отчет в текстовой форме <em>(для его добавления в форум)</em>';
$lang['admin']['permission_information'] = 'Информация о разрешениях';
$lang['admin']['server_os'] = 'Операционная система сервера';
$lang['admin']['server_api'] = 'API сервера';
$lang['admin']['server_software'] = 'Программное обеспечение сервера';
$lang['admin']['server_information'] = 'Информация о сервере';
$lang['admin']['session_save_path'] = 'Переменная session.save_path';
$lang['admin']['max_execution_time'] = 'Максимальное время выполнения';
$lang['admin']['gd_version'] = 'Версия GD';
$lang['admin']['upload_max_filesize'] = 'Максимальный размер загружаемого файла';
$lang['admin']['post_max_size'] = 'Максимальный размер запроса через POST';
$lang['admin']['memory_limit'] = 'Лимит памяти PHP';
$lang['admin']['server_db_type'] = 'База данных сервера';
$lang['admin']['server_db_version'] = 'Версия СУБД';
$lang['admin']['phpversion'] = 'Текущая версия PHP';
$lang['admin']['safe_mode'] = 'Безопасный режим PHP';
$lang['admin']['php_information'] = 'Информация PHP';
$lang['admin']['cms_install_information'] = 'Установочная информация';
$lang['admin']['cms_version'] = 'Версия CMS';
$lang['admin']['installed_modules'] = 'Установленные модули';
$lang['admin']['config_information'] = 'Информация о конфигурации';
$lang['admin']['systeminfo_copy_paste'] = 'Скопируйте и вставьте выделенный текст для размещения вашего сообщения в форуме';
$lang['admin']['help_systeminformation'] = 'Отображённая ниже информация, собрана из разных мест и представлена здесь в кратком виде для того, чтобы вы сразу могли видеть все настройки при диагностировании проблемы или для обращения за помощью по установке вашей CMS Made Simple.';
$lang['admin']['systeminfo'] = 'Информация о системе';
$lang['admin']['systeminfodescription'] = 'Вывод различной информации о Вашей системе, которая может быть полезна при диагностике проблемы.';
$lang['admin']['welcome_user'] = 'Добро пожаловать';
$lang['admin']['itsbeensincelogin'] = '%s с вашего последнего входа ';
$lang['admin']['days'] = 'дней';
$lang['admin']['day'] = 'день';
$lang['admin']['hours'] = 'часов';
$lang['admin']['hour'] = 'час';
$lang['admin']['minutes'] = 'минут';
$lang['admin']['minute'] = 'минута';
$lang['admin']['help_css_max_age'] = 'Этот параметр должен быть установлен сравнительно высоко для статических сайтов, и должен быть равен 0 во время разработки сайта';
$lang['admin']['css_max_age'] = 'Максимальное количество времени (в секундах), в течение которого шаблоны могут находится в кэше браузера';
$lang['admin']['error'] = 'Ошибка';
$lang['admin']['clear_version_check_cache'] = 'Очистить кэш от проверки на новую версию системы';
$lang['admin']['new_version_available'] = '<em>Примечание:</em> Вышла новая версия CMS Made Simple. Просьба сообщить об этом администратору.';
$lang['admin']['info_urlcheckversion'] = 'Если эта ссылка является словом "none", то проверка выполняться не будет.<br/>Пустой результат приведет к использованию ссылки, установленной по умолчанию.';
$lang['admin']['urlcheckversion'] = 'Проверять наличие новой версии CMS, используя эту ссылку';
$lang['admin']['master_admintheme'] = 'Административный шаблон по умолчанию (страница для входа и для новых пользователей)';
$lang['admin']['contenttype_separator'] = 'Разделитель';
$lang['admin']['contenttype_sectionheader'] = 'Секция заголовка';
$lang['admin']['contenttype_link'] = 'Внешняя ссылка';
$lang['admin']['contenttype_content'] = 'Контент';
$lang['admin']['contenttype_pagelink'] = 'Внутренняя ссылка на страницу';
$lang['admin']['nogcbwysiwyg'] = 'Запретить визуальные редакторы в глобальном контенте блоков';
$lang['admin']['destination_page'] = 'Страница назначения';
$lang['admin']['additional_params'] = 'Дополнительные параметры';
$lang['admin']['help_function_current_date'] = '	<h3>What does this do?</h3>
	<p>Prints the current date and time.  If no format is given, it will default to a format similar to \'Jan 01, 2004\'.</p>
	<h3>How do I use it?</h3>
	<p>Just insert the tag into your template/page like: <code>{current_date format="%A %d-%b-%y %T %Z"}</code></p>
	<h3>What parameters does it take?</h3>
	<ul>
		<li><em>(optional)</em>format - Date/Time format using parameters from php\'s strftime function.  See <a href="http://php.net/strftime" target="_blank">here</a> for a parameter list and information.</li>
		<li><em>(optional)</em>ucword - If true return uppercase the first character of each word.</li>
	</ul>
	</p>';
$lang['admin']['help_function_valid_xhtml'] = '<h3>What does this do?</h3>
<p>Returns a link to the w3c HTML validator.</p>
<h3>How do I use it?</h3>
<p>Just insert the tag into your template/page like: <code>{valid_xhtml}</code></p>
<h3>What parameters does it take?</h3>
<p>
    <ul>
	<li><em>(optional)</em> url         (string)     - The URL used for validation, if none is given http://validator.w3.org/check/referer is used.</li>
	<li><em>(optional)</em> class       (string)     - If set, this will be used as class attribute for the link (a) element</li>
	<li><em>(optional)</em> target      (string)     - If set, this will be used as target attribute for the link (a) element</li>
	<li><em>(optional)</em> image       (true/false) - If set to false, a text link will be used instead of an image/icon.</li>
	<li><em>(optional)</em> text        (string)     - If set, this will be used for the link text or alternate text for the image. Default is \'valid XHTML 1.0 Transitional\'.<br /> When an image is used, the given string will also be used for the image alt attribute (by default, this can be overridden by using the \'alt\' parameter).</li>
	<li><em>(optional)</em> image_class (string)     - Only if \'image\' is not set to false. If set, this will be used as class attribute for the image (img) element</li>
	<li><em>(optional)</em> src         (string)     - Only if \'image\' is not set to false. The icon to show. Default is http://www.w3.org/Icons/valid-xhtml10</li>
	<li><em>(optional)</em> width       (string)     - Only if \'image\' is not set to false. The image width. Default is 88 (width of http://www.w3.org/Icons/valid-xhtml10)</li>
	<li><em>(optional)</em> height      (string)     - Only if \'image\' is not set to false. The image height. Default is 31 (height of http://www.w3.org/Icons/valid-xhtml10)</li>
	<li><em>(optional)</em> alt         (string)     - Only if \'image\' is not set to false. The alternate text (\'alt\' attribute) for the image (element). If none is given the link text will be used.</li>
    </ul>
</p>';
$lang['admin']['help_function_valid_css'] = '<h3>What does this do?</h3>
<p>Returns a link to the w3c CSS validator.</p>
<h3>How do I use it?</h3>
<p>Just insert the tag into your template/page like: <code>{valid_css}</code></p>
<h3>What parameters does it take?</h3>
<p>
    <ul>
        <li><em>(optional)</em> url         (string)     - The URL used for validation, if none is given http://jigsaw.w3.org/css-validator/check/referer is used.</li>
	<li><em>(optional)</em> class       (string)     - If set, this will be used as class attribute for the link (a) element</li>
	<li><em>(optional)</em> target      (string)     - If set, this will be used as target attribute for the link (a) element</li>
	<li><em>(optional)</em> image       (true/false) - If set to false, a text link will be used instead of an image/icon.</li>
	<li><em>(optional)</em> text        (string)     - If set, this will be used for the link text or alternate text for the image. Default is \'Valid CSS 2.1\'.<br /> When an image is used, the given string will also be used for the image alt attribute (by default, this can be overridden by using the \'alt\' parameter).</li>
	<li><em>(optional)</em> image_class (string)     - Only if \'image\' is not set to false. If set, this will be used as class attribute for the image (img) element</li>
        <li><em>(optional)</em> src         (string)     - Only if \'image\' is not set to false. The icon to show. Default is http://jigsaw.w3.org/css-validator/images/vcss</li>
        <li><em>(optional)</em> width       (string)     - Only if \'image\' is not set to false. The image width. Default is 88 (width of http://jigsaw.w3.org/css-validator/images/vcss)</li>
        <li><em>(optional)</em> height      (string)     - Only if \'image\' is not set to false. The image height. Default is 31 (height of http://jigsaw.w3.org/css-validator/images/vcss)</li>
	<li><em>(optional)</em> alt         (string)     - Only if \'image\' is not set to false. The alternate text (\'alt\' attribute) for the image (element). If none is given the link text will be used.</li>
    </ul>
</p>';
$lang['admin']['help_function_title'] = '	<h3>What does this do?</h3>
	<p>Prints the title of the page.</p>
	<h3>How do I use it?</h3>
	<p>Just insert the tag into your template/page like: <code>{title}</code></p>
	<h3>What parameters does it take?</h3>
	<p><em>(optional)</em> assign (string) - Assign the results to a smarty variable with that name.</p>';
$lang['admin']['help_function_stylesheet'] = '	<h3>What does this do?</h3>
	<p>Gets stylesheet information from the system.  By default, it grabs all of the stylesheets attached to the current template.</p>
	<h3>How do I use it?</h3>
	<p>Just insert the tag into your template/page\'s head section like: <code>{stylesheet}</code></p>
	<h3>What parameters does it take?</h3>
	<ul>
		<li><em>(optional)</em>name - Instead of getting all stylesheets for the given page, it will only get one spefically named one, whether it\'s attached to the current template or not.</li>
		<li><em>(optional)</em>media - If name is defined, this allows you set a different media type for that stylesheet.</li>
	</ul>
	</p>';
$lang['admin']['help_function_stopexpandcollapse'] = '	<h3>What does this do?</h3>
	<p>Enables content to be expandable and collapsable. Like the following:<br />
	<a href="#expand1" onClick="expandcontent(\'expand1\')" style="cursor:hand; cursor:pointer">Click here for more info</a><span id="expand1" class="expand"><a name="help"></a> - Here is all the info you will ever need...</a></span></p>

	<h3>How do I use it?</h3>
	<p>Just insert the tag into your template/page like:<br />
	<br />
	<code>{startExpandCollapse id="name" title="Click Here"}<br />
	This is all the content the user will see when they click the title "Click Here" above. It will display all the content that is between the {startExpandCollapse} and {stopExpandCollapse} when clicked.<br />
	{stopExpandCollapse}
	</code>
	<br />
	<br />
	Note: If you intend to use this multiple times on a single page each startExpandCollapse tag must have a unique id.</p>
	<h3>What if I want to change the look of the title?</h3>
	<p>The look of the title can be changed via css. The title is wrapped in a div with the id you specify.</p>

	<h3>What parameters does it take?</h3>
	<p>
	<i>startExpandCollapse takes the following parameters</i><br />
	&nbsp; &nbsp;id - A unique id for the expand/collapse section.<br />
	&nbsp; &nbsp;title - The text that will be displayed to expand/collapse the content.<br />
	<i>stopExpandCollapse takes no parameters</i><br />
	</p>';
$lang['admin']['help_function_startexpandcollapse'] = '	<h3>What does this do?</h3>
	<p>Enables content to be expandable and collapsable. Like the following:<br />
	<a href="#expand1" onClick="expandcontent(\'expand1\')" style="cursor:hand; cursor:pointer">Click here for more info</a><span id="expand1" class="expand"><a name="help"></a> - Here is all the info you will ever need...</a></span></p>

	<h3>How do I use it?</h3>
	<p>Just insert the tag into your template/page like: <code>{startExpandCollapse id="name" title="Click Here"}</code>. Also, you must use the {stopExpandCollapse} at the end of the collapseable content. Here is an example:<br />
	<br />
	<code>{startExpandCollapse id="name" title="Click Here"}<br />
	This is all the content the user will see when they click the title "Click Here" above. It will display all the content that is between the {startExpandCollapse} and {stopExpandCollapse} when clicked.<br />
	{stopExpandCollapse}
	</code>
	<br />
	<br />
	Note: If you intend to use this multiple times on a single page each startExpandCollapse tag must have a unique id.</p>
	<h3>What if I want to change the look of the title?</h3>
	<p>The look of the title can be changed via css. The title is wrapped in a div with the id you specify.</p>

	<h3>What parameters does it take?</h3>
	<p>
	<i>startExpandCollapse takes the following parameters</i><br />
	&nbsp; &nbsp;id - A unique id for the expand/collapse section.<br />
	&nbsp; &nbsp;title - The text that will be displayed to expand/collapse the content.<br />
	<i>stopExpandCollapse takes no parameters</i><br />
	</p>';
$lang['admin']['help_function_sitemap'] = '    <h3>Notice</h3>
    <p>This plugin is deprecated.  Users should now see the <code>{site_mapper}</code> plugin.</p>
    <h3>What does this do?</h3>
    <p>Prints out a sitemap.</p>
    <h3>How do I use it?</h3>
    <p>Just insert the tag into your template/page like: <code>{sitemap}</code></p>
    <h3>What parameters does it take?</h3>
    <p>
        <ul>
            <li><em>(optional)</em> <tt>class</tt> - A css_class for the ul-tag which includes the complete sitemap.</li>
            <li><em>(optional)</em> <tt>start_element</tt> - The hierarchy of your element (ie : 1.2 or 3.5.1 for example). This parameter sets the root of the menu. You can use the page alias instead of hierarchy.</li>
            <li><em>(optional)</em> <tt>number_of_levels</tt> - An integer, the number of levels you want to show in your menu. Should be set to 2 using a delimiter.</li>
            <li><em>(optional)</em> <tt>delimiter</tt> - Text to separate entries not on depth 1 of the sitemap (i.e. 1.1, 1.2). This is helpful for showing entries on depth 2 beside each other (using css display:inline).</li>
            <li><em>(optional)</em> <tt>initial 1/0</tt> - If set to 1, begin also the first entries not on depth 1 with a delimiter (i.e. 1.1, 2.1).</li>
            <li><em>(optional)</em> <tt>relative 1/0</tt> - We are not going to show current page (with the sitemap) - we\'ll show only his childs.</li>
            <li><em>(optional)</em> <tt>showall 1/0</tt> - We are going to show all pages if showall is enabled, else we\'ll only show pages with active menu entries.</li>
            <li><em>(optional)</em> <tt>add_elements</tt> - A comma separated list of alias names which will be added to the shown pages with active menu entries (showall not enabled).</li>
        </ul>
        </p>';
$lang['admin']['help_function_adsense'] = '	<h3>What does this do?</h3>
	<p>Google adsense is a popular advertising program for websites.  This tag will take the basic parameters that would be provided by the adsense program and puts them in a easy to use tag that makes your templates look much cleaner.  See <a href="http://www.google.com/adsense" target="_blank">here</a> for more details on adsense.</p>
	<h3>How do I use it?</h3>
	<p>First, sign up for a google adsense account and get the parameters for your ad.  Then just use the tag in your page/template like so: <code>{adsense ad_client="pub-random#" ad_width="120" ad_height="600" ad_format="120x600_as"}</code>
	<h3>What parameters does it take?</h3>
	<p>All parameters are optional, though skipping one might not necessarily made the ad work right.  Options are:
	<ul>
		<li>ad_client - This would be the pub_random# id that would represent your adsense account number</li>
		<li>ad_width - width of the ad</li>
		<li>ad_height - height of the ad</li>
		<li>ad_format - "format" of the ad <em>e.g. 120x600_as</em></li>
		<li>ad_channel - channels are an advanced feature of adsense.  Put it here if you use it.</li>
		<li>ad_type - possible options are text, image or text_image.</li>
		<li>color_border - the color of the border. Use HEX color or type the color name (Ex. Red)</li>
		<li>color_link - the color of the linktext. Use HEX color or type the color name (Ex. Red)</li>
		<li>color_url - the color of the URL. Use HEX color or type the color name (Ex. Red)</li>
		<li>color_text - the color of the text. Use HEX color or type the color name (Ex. Red)</li>
	</ul>
	</p>';
$lang['admin']['help_function_sitename'] = '        <h3>Что делает?</h3>
        <p>Показывает имя сайта. Оно определяется во время установки и может быть изменено в разделе Общие настройки административного раздела.</p>
        <h3>Как использовать?</h3>
        <p>Просто поместите тэг <code>{sitename}</code> на страницу или в шаблон.</p>
        <h3>Какие параметры могут быть?</h3>
	<p><em>(Не обязательный)</em> assign (строка) - Результат помещается в переменную смарти с заданным именем.</p>';
$lang['admin']['help_function_search'] = '	<h3>What does this do?</h3>
	<p>This is actually just a wrapper tag for the Search module to make the tag syntax easier. 
	Instead of having to use <code>{cms_module module=\'Search\'}</code> you can now just use <code>{search}</code> to insert the module in a template.
	</p>
	<h3>How do I use it?</h3>
	<p>Just put <code>{search}</code> in a template where you want the search input box to appear. For help about the Search module, please refer to the Search module help.';
$lang['admin']['help_function_root_url'] = '	<h3>What does this do?</h3>
	<p>Prints the root url location for the site.</p>
	<h3>How do I use it?</h3>
	<p>Just insert the tag into your template/page like: <code>{root_url}</code></p>
	<h3>What parameters does it take?</h3>
	<p>None at this time.</p>';
$lang['admin']['help_function_repeat'] = '  <h3>What does this do?</h3>
  <p>Repeats a specified sequence of characters, a specified number of times</p>
  <h3>How do I use it?</h3>
  <p>Insert a tag similar to the following into your template/page, like this: <code>{repeat string=\'repeat this \' times=\'3\'}</code>
  <h3>What parameters does it take?</h3>
  <ul>
  <li>string=\'text\' - The string to repeat</li>
  <li>times=\'num\' - The number of times to repeat it.</li>
  </ul>';
$lang['admin']['help_function_recently_updated'] = '	<h3>What does this do?</h3>
	<p>Outputs a list of recently updated pages.</p>
	<h3>How do I use it?</h3>
	<p>Just insert the tag into your template/page like: <code>{recently_updated}</code></p>
	<h3>What parameters does it take?</h3>
	<ul>
	 <li><p><em>(optional)</em> number=\'10\' - Number of updated pages to show.</p><p>Example: <pre>{recently_updated number=\'15\'}</pre></p></li>
 	 <li><p><em>(optional)</em> leadin=\'Last changed\' - Text to show left of the modified date.</p><p>Example: <pre>{recently_updated leadin=\'Last Changed\'}</pre></p></li>
 	 <li><p><em>(optional)</em> showtitle=\'true\' - Shows the titleattribute if it exists as well (true|false).</p><p>Example: <pre>{recently_updated showtitle=\'true\'}</pre></p></li>											 	
	 <li><p><em>(optional)</em> css_class=\'some_name\' - Warp a div tag with this class around the list.</p><p>Example: <pre>{recently_updated css_class=\'some_name\'}</pre></p></li>											 	
	 <li><p><em>(optional)</em> dateformat=\'d.m.y h:m\' - default is d.m.y h:m , use the format you whish (php -date- format)</p><p>Example: <pre>{recently_updated dateformat=\'D M j G:i:s T Y\'}</pre></p></li>											 	
	</ul>
	<p>or combined:</p>
	<pre>{recently_updated number=\'15\' showtitle=\'false\' leadin=\'Last Change: \' css_class=\'my_changes\' dateformat=\'D M j G:i:s T Y\'}</pre>';
$lang['admin']['help_function_print'] = '	<h3>What does this do?</h3>
	<p>This is actually just a wrapper tag for the Printing module to make the tag syntax easier. 
	Instead of having to use <code>{cms_module module=\'Printing\'}</code> you can now just use <code>{print}</code> to insert the module on pages and templates.
	</p>
	<h3>How do I use it?</h3>
	<p>Just put <code>{print}</code> on a page or in a template. For help about the Printing module, what parameters it takes etc., please refer to the Printing module help.';
$lang['admin']['help_function_oldprint'] = '	<h3>What does this do?</h3>
	<p>Creates a link to only the content of the page.</p>
	<h3>How do I use it?</h3>
	<p>Just insert the tag into your template/page like: <code>{oldprint}</code><br></p>
        <h3>What parameters does it take?</h3>
        <ul>
                <li><em>(optional)</em> goback - Set to "true" to show a "Go Back" link on the page to print.</li>
                <li><em>(optional)</em> popup - Set to "true" and page for printing will by opened in new window.</li>
                <li><em>(optional)</em> script - Set to "true" and in print page will by used java script for run print of page.</li>
                <li><em>(optional)</em> showbutton - Set to "true" and will show a printer graphic instead of a text link.</li>
                <li><em>(optional)</em> class - class for the link, defaults to "noprint".</li>
                <li><em>(optional)</em> text - Text to use instead of "Print This Page" for the print link.
                <li><em>(optional)</em> title - Text to show for title attribute. If blank show text parameter.</li>
                <li><em>(optional)</em> more - Place additional options inside the <a> link.</li>
                <li><em>(optional)</em> src_img - Show this image file. Default images/cms/printbutton.gif.</li>
                <li><em>(optional)</em> class_img - Class of <img> tag if showbutton is sets.</li>

                    <p>Example:</p>
                     <pre>{oldprint text="Printable Page"}</pre>      
                     </li>
        </ul>';
$lang['admin']['login_info_title'] = 'Информация';
$lang['admin']['login_info'] = 'Для работы в администраторском интерфейсе должны быть';
$lang['admin']['login_info_params'] = '<ol> 
  <li>Разрешены cookies в вашем браузере</li> 
  <li>Разрешены javascript в вашем браузере </li> 
  <li>Активированы Windows popup для следующего адреса:</li> 
</ol>';
$lang['admin']['help_function_news'] = '	<h3>What does this do?</h3>
	<p>This is actually just a wrapper tag for the News module to make the tag syntax easier. 
	Instead of having to use <code>{cms_module module=\'News\'}</code> you can now just use <code>{news}</code> to insert the module on pages and templates.
	</p>
	<h3>How do I use it?</h3>
	<p>Just put <code>{news}</code> on a page or in a template. For help about the News module, what parameters it takes etc., please refer to the News module help.';
$lang['admin']['help_function_modified_date'] = '        <h3>What does this do?</h3>
        <p>Prints the date and time the page was last modified.  If no format is given, it will default to a format similar to \'Jan 01, 2004\'.</p>
        <h3>How do I use it?</h3>
        <p>Just insert the tag into your template/page like: <code>{modified_date format="%A %d-%b-%y %T %Z"}</code></p>
        <h3>What parameters does it take?</h3>
        <ul>
                <li><em>(optional)</em>format - Date/Time format using parameters from php\'s strftime function.  See <a href="http://php.net/strftime" target="_blank">here</a> for a parameter list and information.</li>
        </ul>';
$lang['admin']['help_function_metadata'] = '	<h3>What does this do?</h3>
	<p>Displays the metadata for this page. Both global metdata from the global settings page and metadata for each page will be shown.</p>
	<h3>How do I use it?</h3>
	<p>Just insert the tag into your template like: <code>{metadata}</code></p>
	<h3>What parameters does it take?</h3>
	<ul>
		<li><em>(optional)</em>showbase (true/false) - If set to false, the base tag will not be sent to the browser.  Defaults to true if use_hierarchy is set to true in config.php.</li>
	</ul>';
$lang['admin']['help_function_menu_text'] = '	<h3>What does this do?</h3>
	<p>Prints the menu text of the page.</p>
	<h3>How do I use it?</h3>
	<p>Just insert the tag into your template/page like: <code>{menu_text}</code></p>
	<h3>What parameters does it take?</h3>
	<p>None at this time.</p>';
$lang['admin']['help_function_menu'] = '	<h3>What does this do?</h3>
	<p>This is actually just a wrapper tag for the Menu Manager module to make the tag syntax easier. 
	Instead of having to use <code>{cms_module module=\'MenuManager\'}</code> you can now just use <code>{menu}</code> to insert the module on pages and templates.
	</p>
	<h3>How do I use it?</h3>
	<p>Just put <code>{menu}</code> on a page or in a template. For help about the Menu Manager module, what parameters it takes etc., please refer to the Menu Manager module help.';
$lang['admin']['help_function_last_modified_by'] = '        <h3>What does this do?</h3>
        <p>Prints last person that edited this page.  If no format is given, it will default to a ID number of user .</p>
        <h3>How do I use it?</h3>
        <p>Just insert the tag into your template/page like: <code>{last_modified_by format="fullname"}</code></p>
        <h3>What parameters does it take?</h3>
        <ul>
                <li><em>(optional)</em>format - id, username, fullname</li>
        </ul>';
$lang['admin']['help_function_image'] = '  <h3>What does this do?</h3>
  <p>Creates an image tag to an image stored within your images directory</p>
  <h3>How do I use it?</h3>
  <p>Just insert the tag into your template/page like: <code>{image src="something.jpg"}</code></p>
  <h3>What parameters does it take?</h3>
  <ul>
     <li><em>(required)</em>  <tt>src</tt> - Image filename within your images directory.</li>
     <li><em>(optional)</em>  <tt>width</tt> - Width of the image within the page. Defaults to true size.</li>
     <li><em>(optional)</em>  <tt>height</tt> - Height of the image within the page. Defaults to true size.</li>
     <li><em>(optional)</em>  <tt>alt</tt> - Alt text for the image -- needed for xhtml compliance. Defaults to filename.</li>
     <li><em>(optional)</em>  <tt>class</tt> - CSS class for the image.</li>
     <li><em>(optional)</em>  <tt>title</tt> - Mouse over text for the image. Defaults to Alt text.</li>
     <li><em>(optional)</em>  <tt>addtext</tt> - Additional text to put into the tag</li>
  </ul>';
$lang['admin']['help_function_imagegallery'] = '	<h3>What does this do?</h3>
	<p>Creates a gallery out of a folder of images (.gif, .jpg or .png). 
	You can click on a thumbnail image to view the bigger image. It can use 
	captions which are based on the image name, minus the file extension. It 
	follows web standards and uses CSS for formatting. There are classes 
	for various elements and for the surrounding \'div\'. Check out the CSS below for
	more information.</p>

	<h3>How do I use it?</h3>
	<p>Just insert the tag into your template or page like: </p>
	<code>{ImageGallery picFolder="uploads/images/yourfolder/"}</code>
	<p>Where picFolder is the folder where your images are stored.</p>
	
    <h3>What parameters does it take?</h3>
    <p>It can take quite a few parameters, but the example above is probably 
good for most people :) </p>
        <ol>
		<li><strong>picFolder e.g. picFolder="uploads/images/yourfolder/"</strong><br/>
		Is the path to the gallery (yourfolder) ending in\'/\'. So you can have 
		lots of directories and lots of galleries.</li>

		<li><strong>type e.g. type="click" or type="popup"</strong><br/>
		For the "popup" function to work you need to include the popup javascript into
		the head of your template e.g. "<head></head>". The javascript is at
		the bottom of this page! <em>The default is \'click\'.</em></li>

		<li><strong>divID e.g. divID ="imagegallery"</strong><br/>
		Sets the wrapping \'div id\' around your gallery so that you can have 
		different CSS for each gallery. <em>The default is \'imagegallery\'.</em></li>

		<li><strong>sortBy e.g. sortBy = "name" or sortBy = "date"</strong><br/>
		Sort images by \'name\' OR \'date\'. <em>No default.</em></li>

		<li><strong>sortByOrder e.g. sortByOrder = "asc" or sortByOrder = "desc"</strong><br/> 
		 <em>No default.</em>.</li>

		<li>This sets caption above the big (clicked on) image<br/>
		<strong>bigPicCaption = "name" </strong>(filename excluding extension)<em> or </em><br/>
		<strong>bigPicCaption = "file" </strong>(filename including extension)<em> or </em><br/>
		<strong>bigPicCaption = "number" </strong>(a number sequence)<em> or </em><br/>
		<strong>bigPicCaption = "none" </strong>(No caption)<br/>
		<em>The Default is "name". </em></li>

		<li>This sets the caption below the small thumbnail<br/>
		<strong>thumbPicCaption = "name"</strong> (filename excluding extension)<em> or </em><br/>
		<strong>thumbPicCaption = "file"</strong> (filename including extension)<em> or </em><br/>
		<strong>thumbPicCaption = "number" </strong>(a number sequence)<em> or </em><br/>
		<strong>thumbPicCaption = "none" </strong>(No caption)<br/>
		<em>The Default is "name".</em></li>

		<li>Sets the \'alt\' tag for the big image - compulsory.<br/>
		<strong>bigPicAltTag = "name" </strong>(filename excluding extension)<em> or </em><br/>
		<strong>bigPicAltTag = "file" </strong>(filename including extension)<em> or </em><br/>
		<strong>bigPicAltTag = "number" </strong>(a number sequence)<br/>
		<em>The Default is "name".</em></li>

		<li> Sets the \'title\' tag for the big image. <br/>
		<strong>bigPicTitleTag = "name" </strong>(filename excluding extension)<em> or </em><br/>
		<strong>bigPicTitleTag = "file" </strong>(filename including extension)<em> or </em><br/>
		<strong>bigPicTitleTag = "number" </strong>(a number sequence)<em> or </em><br/>
		<strong>bigPicTitleTag = "none" </strong>(No title)<br/>
		<em>The Default is "name".</em></li>

		<li><strong>thumbPicAltTag</strong><br/>
		<em>Is the same as bigPicAltTag, but for the small thumbnail images.</em></li>

		<li><strong>thumbPicTitleTag *</strong><br/>
		<em>Is the same as bigPicTitleTag but for the small thumbnail images.<br/>
		<strong>*Except that after the options you have \'... click for a bigger image\' 
		or if you do not set this option then you get the default of 
		\'Click for a bigger image...\'</em></strong></li>
        </ol>
  <p>A More Complex Example</p>
        <p>\'div id\' is \'cdcovers\', no Caption on big images, thumbs have default caption. 
        \'alt\' tags for the big image are set to the name of the image file without the extension 
        and the big image \'title\' tag is set to the same but with an extension. 
        The thumbs have the default \'alt\' and \'title\' tags. The default being the name 
        of the image file without the extension for \'alt\' and \'Click for a bigger image...\' for the \'title\',
		would be:</p>
		<code>{ImageGallery picFolder="uploads/images/cdcovers/" divID="cdcovers" bigPicCaption="none"  bigPicAltTag="name" bigPicTitleTag="file"}</code>
        <br/>
		<p>It\'s got lots of options but I wanted to keep it very flexible and you don\'t have to set them, the defaults are sensible.</p>
		
  <br/>
	<h4>Example CSS</h4>
<pre>
	/* Image Gallery - Small Thumbnail Images */
	.thumb {
		margin: 1em 1em 1.6em 0; /* Space between images */
		padding: 0;
		float: left;
		text-decoration: none;
		line-height: normal;
		text-align: left;
	}

	.thumb img, .thumb a img, .thumb a:link img{ /* Set link formatting*/
		width: 100px; /* Image width*/
		height: 100px; /* Image height*/
		display: inline;
		padding: 12px; /* Image padding to form photo frame */
		/* You can set the above to 0px = no frame - but no hover indication! Adjust other widths ot text!*/
		margin: 0;
		background-color: white; /*Background of photo */ 
		border-top: 1px solid #eee; /* Borders of photo frame */
		border-right: 2px solid #ccc;
		border-bottom: 2px solid #ccc;
		border-left: 1px solid #eee;
		text-decoration: none;
	}

	.thumb a:visited img {
		background-color: #eee; /*Background of photo on hover - sort of a light grey */
	}

	.thumb a:hover img {
		background-color: #dae6e4; /*Background of photo on hover - sort of light blue/green */
	}

	.thumbPicCaption {
		text-align: center;
		font-size: smaller;
		margin: 0 1px 0 0;
		padding: 0;
		width: 124px; /* Image width plus 2 x padding for image (photo frame) - to center text on image */
		/* display: none;  if you do not want to display this text */
	}

	/* Image Gallery - Big Images */
	.bigPic {
		margin: 10px 0 5px 0;
		padding: 0;
		line-height: normal;
	}

	.bigPicCaption { /*Big Image Name - above image above .bigpicImageFileName (Without extension) */
		text-align: center;
		font-weight: bold;
		font-variant: small-caps;
		font-weight: bold;
		margin: 0 1px 0 0;
		padding: 0;
		width: 386px; /* Image width plus 2 x padding for image (photo frame) - to center text on image */
		/* display: none;  if you do not want to display this text */
	}

	.bigPic img{ /* Big Image settings */
		width: 350px; /* Width of Big Image */
			height: auto;
		display: inline;
		padding: 18px; /* Image padding to form photo frame. */
		/* You can set the above to 0px = no frame - but no hover indication! Adjust other widths ot text!*/
		margin: 0;
		background-color: white; /* Background of photo */ 
		border-top: 1px solid #eee; /* Borders of photo frame */
		border-right: 2px solid #ccc; 
		border-bottom: 2px solid #ccc;
		border-left: 1px solid #eee;
		text-decoration: none; 
		text-align: left;
	}

	.bigPicNav { /* Big Image information: \'Image 1 of 4\' and gallery navigation */
		margin: 0;
		width: 386px; /* Image width plus 2 x padding for image (photo frame) - to center text on image */
		padding: 0;
		color: #000;
		font-size: smaller;
		line-height: normal;
		text-align: center;
		/* display: none;  if you do not want to display this text. Why? You Lose Navigation! */
	}

</pre>
<br/>

	<h4>The popup javascript is now included in plugin code and will be generated automatically if you still have javascript in your template please remove it.</h4>ded in plugin code and will be generated automatically if you still have javascript in your template please remove it.</h4>';
$lang['admin']['help_function_html_blob'] = '	<h3>What does this do?</h3>
	<p>See the help for global_content for a description.</p>';
$lang['admin']['help_function_googlepr'] = '	<h3>What does this do?</h3>
	<p>Display\'s a number that represents your google pagerank.</p>
	<h3>How do I use it?</h3>
	<p>Just insert the tag into your template/page like: <code>{googlepr}</code><br>
	<br>

	<h3>What parameters does it take?</h3>
	<ul>
		<li><em>(optional)</em> domain - The website to display the pagerank for.</li>
	</ul>
	</p>';
$lang['admin']['help_function_google_search'] = '	<h3>What does this do?</h3>
	<p>Search\'s your website using Google\'s search engine.</p>
	<h3>How do I use it?</h3>
	<p>Just insert the tag into your template/page like: <code>{google_search}</code><br>
	<br>
	Note: Google needs to have your website indexed for this to work. You can submit your website to google <a href="http://www.google.com/addurl.html">here</a>.</p>
	<h3>What if I want to change the look of the textbox or button?</h3>
	<p>The look of the textbox and button can be changed via css. The textbox is given an id of textSearch and the button is given an id of buttonSearch.</p>

	<h3>What parameters does it take?</h3>
	<ul>
		<li><em>(optional)</em> domain - This tells google the website domain to search. This script tries to determine this automatically.</li>
		<li><em>(optional)</em> buttonText - The text you want to display on the search button. The default is "Search Site".</li>
	</ul>
	</p>';
$lang['admin']['help_function_global_content'] = '	<h3>What does this do?</h3>
	<p>Inserts a global content block into your template or page.</p>
	<h3>How do I use it?</h3>
	<p>Just insert the tag into your template/page like: <code>{global_content name=\'myblob\'}</code>, where name is the name given to the block when it was created.</p>
	<h3>What parameters does it take?</h3>
	<ul>
		<li>name - The name of the global content block to display.</li>
	</ul>';
$lang['admin']['help_function_get_template_vars'] = '	<h3>What does this do?</h3>
	<p>Dumps all the known smarty variables into your page</p>
	<h3>How do I use it?</h3>
	<p>Just insert the tag into your template/page like: <code>{get_template_vars}</code></p>
	<h3>What parameters does it take?</h3>
											  <p>None at this time</p>';
$lang['admin']['help_function_embed'] = '	<h3>What does this do?</h3>
	<p>Enable inclusion (embeding) of any other application into the CMS. The most usual use could be a forum. 
	This implementation is using IFRAMES so older browsers can have problems. Sorry bu this is the only known way 
	that works without modifing the embeded application.</p>
	<h3>How do I use it?</h3>
        <ul>
        <li>a) Add <code>{embed header=true}</code> into the head section of your page template, or into the metadata section in the options tab of a content page.  This will ensure that the required javascript gets included.   If you insert this tag into the metadata section in the options tab of a content page you must ensure that <code>{metadata}</code> is in your page template.</li>
        <li>b) Add <code>{embed url="http://www.google.com"}</code> into your page content or in the body of your page template.</li>
        </ul>
        <br/>
        <h4>Example to make the iframe larger</h4>
	<p>Add the following to your style sheet:</p>
        <pre>#myframe { height: 600px; }</pre>
        <br/>
        <h3>What parameters does it take?</h3>
        <ul>
            <li><em>(required)</em>url - the url to be included 
            <li><em>(required)</em>header=true - this will generate the header code for good resizing of the IFRAME.</li>
            <li>(optional)name - an optional name to use for the iframe (instead of myframe).<p>If this option is used, it must be used identically in both calls, i.e: {embed header=true name=foo} and {embed name=foo url=http://www.google.com} calls.</p>
        </ul>';
$lang['admin']['help_function_edit'] = '	<h3>What does this do?</h3>
	<p>Creates a link to edit the page</p>
	<h3>How do I use it?</h3>
	<p>Just insert the tag into your template/page like: <code>{edit}</code><br></p>
        <h3>What parameters does it take?</h3>
        <ul>
                <li><em>(optional)</em>showbutton - Set to "true" and will show a edit graphic instead of a text link.</li>
        </ul>';
$lang['admin']['help_function_description'] = '	<h3>What does this do?</h3>
	<p>Prints the description (title attribute) of the page.</p>
	<h3>How do I use it?</h3>
	<p>Just insert the tag into your template/page like: <code>{description}</code></p>
	<h3>What parameters does it take?</h3>
	<p>None at this time.</p>';
$lang['admin']['help_function_created_date'] = '        <h3>What does this do?</h3>
        <p>Prints the date and time the page was created.  If no format is given, it will default to a format similar to \'Jan 01, 2004\'.</p>
        <h3>How do I use it?</h3>
        <p>Just insert the tag into your template/page like: <code>{created_date format="%A %d-%b-%y %T %Z"}</code></p>
        <h3>What parameters does it take?</h3>
        <ul>
                <li><em>(optional)</em>format - Date/Time format using parameters from php\'s strftime function.  See <a href="http://php.net/strftime" target="_blank">here</a> for a parameter list and information.</li>
        </ul>';
$lang['admin']['help_function_content'] = '	<h3>What does this do?</h3>
	<p>This is where the content for your page will be displayed.  It\'s inserted into the template and changed based on the current page being displayed.</p>
	<h3>How do I use it?</h3>
	<p>Just insert the tag into your template like: <code>{content}</code>.</p>
	<h3>What parameters does it take?</h3>
	<ul>
		<li><em>(optional)</em>block - Allows you to have more than one content block per page.  When multiple content tags are put on a template, that number of edit boxes will be displayed when the page is edited.
<p>Example:</p>
<pre>{content block="Second Content Block"}</pre>
<p>Now, when you edit a page there will a textarea called "Second Content Block".</li>
		<li><em>(optional)</em>wysiwyg (true/false) - If set to false, then a wysiwyg will never be used while editing this block.  If true, then it acts as normal.  Only works when block parameter is used.</li>
		<li><em>(optional)</em>oneline (true/false) - If set to true, then only one edit line will be shown while editing this block.  If false, then it acts as normal.  Only works when block parameter is used.</li>
		<li><em>(optional)</em>assign - Assigns the content to a smarty parameter, which you can then use in other areas of the page, or use to test whether content exists in it or not.
<p>Example of passing page content to a User Defined Tag as a parameter:</p>
<pre>
         {content assign=pagecontent}
         {table_of_contents thepagecontent="$pagecontent"}
</pre>
</li>
	</ul>';
$lang['admin']['help_function_contact_form'] = '  <h2>NOTE: This plugin is deprecated</h2>
  <h3>This plugin has been removed as of CMS made simple version 1.5</h3>';
$lang['admin']['help_function_cms_versionname'] = '	<h3>What does this do?</h3>
	<p>This tag is used to insert the current version name of CMS into your template or page.  It doesn\'t display any extra besides the version name.</p>
	<h3>How do I use it?</h3>
	<p>This is just a basic tag plugin.  You would insert it into your template or page like so: <code>{cms_versionname}</code>
	<h3>What parameters does it take?</h3>
	<p>It takes no parameters.</p>';
$lang['admin']['help_function_cms_version'] = '	<h3>What does this do?</h3>
	<p>This tag is used to insert the current version number of CMS into your template or page.  It doesn\'t display any extra besides the version number.</p>
	<h3>How do I use it?</h3>
	<p>This is just a basic tag plugin.  You would insert it into your template or page like so: <code>{cms_version}</code>
	<h3>What parameters does it take?</h3>
	<p>It takes no parameters.</p>';
$lang['admin']['about_function_cms_selflink'] = '		<p>Author: Ted Kulp <tedkulp@users.sf.net></p>
		<p>Version: 1.1</p>
		<p>Modified: Martin B. Vestergaard <mbv@nospam.dk></p>
		<p>Version: 1.41</p>
		<p>Modified: Russ Baldwin</p>
		<p>Version: 1.42</p>
		<p>Modified: Marcus Bointon <coolbru@users.sf.net></p>
		<p>Version: 1.43</p>
		<p>Modified: Tatu Wikman <tsw@backspace.fi></p>
		<p>Version: 1.44</p>
		<p>Modified: Hans Mogren <http://hans.bymarken.net/></p>
		<p>Version: 1.45</p>

		<p>
		Change History:<br/>
		1.46 - Fixes a problem with too many queries when using the dir=start option.<br/>
		1.45 - Added a new option for "dir", "up", for links to the parent page e.g. dir="up" (Hans Mogren).<br />
		1.44 - Added new parameters "ext" and "ext_info" to allow external links with class="external" and info text after the link, ugly hack but works thinking about rewriting this(Tatu Wikman)<br />
		1.43 - Added new parameters "image" and "imageonly" to allow attachment of images to be used for page links, either instead of or in addition to text links. (Marcus Bointon)<br />
		1.42 - Added new parameter "anchorlink" and a new option for "dir" namely, "anchor", for internal page links. e.g. dir="anchor" anchorlink="internal_link". (Russ)<br />
		1.41 - added new parameter "href" (LeisureLarry)<br />
		1.4 - fixed bug next/prev linking to non-content pages. (Thanks Teemu Koistinen for this fix)<br />
		1.3 - added option "more"<br />
		1.2 - by Martin B. Vestergaard
		<ul>
		<li>changed default text to Page Name (was Page Alias)</li>
		<li>added option dir=next/prev to display next or previous item in the hirachy - thanks to 100rk</li>
		<li>added option class to add a class= statement to the a-tag.</li>
		<li>added option menu to display menu-text in sted of Page Name</li>
		<li>added option lang to display link-labels in different languages</li>
		</ul>
		1.1 - Changed to new content system<br />
		1.0 - Initial release
		</p>';
$lang['admin']['help_function_cms_selflink'] = '		<h3>What does this do?</h3>
		<p>Creates a link to another CMSMS content page inside your template or content. Can also be used for external links with the ext parameter.</p>
		<h3>How do I use it?</h3>
		<p>Just insert the tag into your template/page like: <code>{cms_selflink page="1"}</code> or  <code>{cms_selflink page="alias"}</code></p>
		<h3>What parameters does it take?</h3>
		<p>
		<ul>
		<li><em>(optional)</em> <tt>page</tt> - Page ID or alias to link to.</li>
		<li><em>(optional)</em> <tt>dir anchor (internal links)</tt> - New option for an internal page link. If this is used then <tt>anchorlink</tt> should be set to your link. </li> <!-- Russ - 25-04-2006 -->
		<li><em>(optional)</em> <tt>anchorlink</tt> - New paramater for an internal page link. If this is used then <tt>dir ="anchor"</tt> should also be set. No need to add the #, because it is added automatically.</li> <!-- Russ - 25-04-2006 -->
		<li><em>(optional)</em> <tt>urlparam</tt> - Specify additional parameters to the URL.  <strong>Do not use this in conjunction with the <em>anchorlink</em> parameter</em></strong>
		<li><em>(optional)</em> <tt>tabindex ="a value"</tt> - Set a tabindex for the link.</li> <!-- Russ - 22-06-2005 -->
		<li><em>(optional)</em> <tt>dir start/next/prev/up (previous)</tt> - Links to the default start page or the next or previous page, or the parent page (up). If this is used <tt>page</tt> should not be set.</li> <!-- mbv - 21-06-2005 -->
		<B>Note!</B> Only one of the above may be used in the same cms_selflink statement!!
		<li><em>(optional)</em> <tt>text</tt> - Text to show for the link.  If not given, the Page Name is used instead.</li>
		<li><em>(optional)</em> <tt>menu 1/0</tt> - If 1 the Menu Text is used for the link text instead of the Page Name</li> <!-- mbv - 21-06-2005 -->
		<li><em>(optional)</em> <tt>target</tt> - Optional target for the a link to point to.  Useful for frame and javascript situations.</li>
		<li><em>(optional)</em> <tt>class</tt> - Class for the <a> link. Useful for styling the link.</li> <!-- mbv - 21-06-2005 -->
		<li><em>(optional)</em> <tt>lang</tt> - Display link-labels  ("Next Page"/"Previous Page") in different languages (0 for no label.) Danish (dk), English (en) or French (fr), for now.</li> <!-- mbv - 21-06-2005 -->
		<li><em>(optional)</em> <tt>id</tt> - Optional css_id for the <a> link.</li> <!-- mbv - 29-06-2005 -->
		<li><em>(optional)</em> <tt>more</tt> - place additional options inside the <a> link.</li> <!-- mbv - 29-06-2005 -->
		<li><em>(optional)</em> <tt>label</tt> - Label to use in with the link if applicable.</li>
		<li><em>(optional)</em> <tt>label_side left/right</tt> - Side of link to place the label (defaults to "left").</li>
		<li><em>(optional)</em> <tt>title</tt> - Text to use in the title attribute.  If none is given, then the title of the page will be used for the title.</li>
		<li><em>(optional)</em> <tt>rellink 1/0</tt> - Make a relational link for accessible navigation.  Only works if the dir parameter is set and should only go in the head section of a template.</li>
		<li><em>(optional)</em> <tt>href</tt> - If href is used only the href value is generated (no other parameters possible). <strong>Example:</strong> <a href="{cms_selflink href="alias"}"><img src=""></a></li>
		<li><em>(optional)</em> <tt>image</tt> - A url of an image to use in the link. <strong>Example:</strong> {cms_selflink dir="next" image="next.png" text="Next"}</li>
		<li><em>(optional)</em> <tt>alt</tt> - Alternative text to be used with image (alt="" will be used if no alt parameter is given).</li>
		<li><em>(optional)</em> <tt>imageonly</tt> - If using an image, whether to suppress display of text links. If you want no text in the link at all, also set lang=0 to suppress the label. <B>Example:</B> {cms_selflink dir="next" image="next.png" text="Next" imageonly=1}</li>
		<li><em>(optional)</em> <tt>ext</tt> - For external links, will add class="external and info text. <strong>warning:</strong> only text, target and title parameters are compatible with this parameter</li>
		<li><em>(optional)</em> <tt>ext_info</tt> - Used together with "ext" defaults to (external link)</li>
		</ul>
		</p>';
$lang['admin']['about_function_cms_module'] = '	<p>Author: Ted Kulp<tedkulp@users.sf.net></p>
	<p>Version: 1.0</p>
	<p>
	Change History:<br/>
	None
	</p>';
$lang['admin']['help_function_cms_module'] = '	<h3>What does this do?</h3>
	<p>This tag is used to insert modules into your templates and pages.  If a module is created to be used as a tag plugin (check it\'s help for details), then you should be able to insert it with this tag.</p>
	<h3>How do I use it?</h3>
	<p>It\'s just a basic tag plugin.  You would insert it into your template or page like so: <code>{cms_module module="somemodulename"}</code>
	<h3>What parameters does it take?</h3>
	<p>There is only one required parameter.  All other parameters are passed on to the module.
	<ul>
		<li>module - Name of the module to insert.  This is not case sensitive.</li>
	</ul>
	</p>';
$lang['admin']['about_function_breadcrumbs'] = '<p>Author: Marcus Deglos <<a href="mailto:md@zioncore.com">md@zioncore.com</a>></p>
<p>Version: 1.7</p>
<p>
Change History:<br/>
1.1 - Modified to use new content rewrite (wishy)<br />
1.2 - Added parameters: delimiter, initial, and root (arl)<br />
1.3 - Added parameter: classid (tdh / perl4ever)<br />
1.4 - Added parameter currentclassid and fixed some bugs (arl)<br />
1.5 - Modified to use new hierarchy manager<br />
1.6 - Modified to skip any parents that are marked to be "not shown in menu" except for root<br />
1.7 - Added root_url parameter (elijahlofgren)<br />
</p>';
$lang['admin']['help_function_breadcrumbs'] = '<h3>What does this do?</h3>
<p>Prints a breadcrumb trail .</p>
<h3>How do I use it?</h3>
<p>Just insert the tag into your template/page like: <code>{breadcrumbs}</code></p>
<h3>What parameters does it take?</h3>
<p>
<ul>
<li><em>(optional)</em> <tt>delimiter</tt> - Text to seperate entries in the list (default ">>").</li>
<li><em>(optional)</em> <tt>initial</tt> - 1/0 If set to 1 start the breadcrumbs with a delimiter (default 0).</li>
<li><em>(optional)</em> <tt>root</tt> - Page alias of a page you want to always appear as the first page in
    the list. Can be used to make a page (e.g. the front page) appear to be the root of everything even though it is not.</li>
<li><em>(optional)</em> <tt>root_url</tt> - Override the URL of the root page. Useful for making link be to \'/\' instead of \'/home/\'. This requires that the root page be set as the default page.</li>

<li><em>(optional)</em> <tt>classid</tt> - The CSS class for the non current page names, i.e. the first n-1 pages in the list. If the name is a link it is added to the <a href> tags, otherwise it is added to the <span> tags.</li>
<li><em>(optional)</em> <tt>currentclassid</tt> - The CSS class for the <span> tag surrounding the current page name.</li>
<li><em>(optional)</em> <tt>starttext</tt> - Text to append to the front of the breadcrumbs list, something like "You are here".</li>
</ul>
</p>';
$lang['admin']['about_function_anchor'] = '	<p>Author: Ted Kulp<tedkulp@users.sf.net></p>
	<p>Version: 1.1</p>
	<p>
	Change History:<br/>
	<strong>Update to version 1.1 from 1.0</strong> <em>2006/07/19</em><br/>
	Russ added the means to insert a title, a tabindex and a class for the anchor link. Westis added accesskey and changed parameter names to not include \'anchorlink\'.<br/>
	</hr>
	</p>';
$lang['admin']['help_function_anchor'] = '	<h3>What does this do?</h3>
	<p>Makes a proper anchor link.</p>
	<h3>How do I use it?</h3>
	<p>Just insert the tag into your template/page like: <code>{anchor anchor=\'here\' text=\'Scroll Down\'}</code></p>
	<h3>What parameters does it take?</h3>
	<p>
	<ul>
	<li><tt>anchor</tt> - Where we are linking to.  The part after the #.</li>
	<li><tt>text</tt> - The text to display in the link.</li>
	<li><tt>class</tt> - The class for the link, if any</li>
	<li><tt>title</tt> - The title to display for the link, if any.</li>
	<li><tt>tabindex</tt> - The numeric tabindex for the link, if any.</li>
	<li><tt>accesskey</tt> - The accesskey for the link, if any.</li>
	<li><em>(optional)</em> <tt>onlyhref</tt> - Only display the href and not the entire link. No other options will work</li>
	</ul>
	</p>';
$lang['admin']['help_function_site_mapper'] = '<h3>What does this do?</h3>
  <p>This is actually just a wrapper tag for the <a href="listmodules.php?action=showmodulehelp&module=MenuManager">Menu Manager module</a> to make the tag syntax easier, and to simplify creating a sitemap.</p>
<h3>How do I use it?</h3>
  <p>Just put <code>{site_mapper}</code> on a page or in a template. For help about the Menu Manager module, what parameters it takes etc., please refer to the Menu Manager module help</a>.</p>
  <p>By default, if no template option is specified the minimal_menu.tpl file will be used.</p>
  <p>Any parameters used in the tag are available in the menumanager template as <code>{$menuparams.paramname}</code></p>';
$lang['admin']['help_function_redirect_url'] = '<h3>What does this do?</h3>
  <p>This plugin allows you to easily redirect to a specified url.  It is handy inside of smarty conditional logic (for example, redirect to a splash page if the site is not live yet).</p>
<h3>How do I use it?</h3>
<p>Simply insert this tage into your page or template: <code>{redirect_url urle=\'www.cmsmadesimple.org\'}</code></p>';
$lang['admin']['help_function_redirect_page'] = '<h3>What does this do?</h3>
 <p>This plugin allows you to easily redirect to another page.  It is handy inside of smarty conditional logic (for example, redirect to a login page if the user is not logged in.)</p>
<h3>How do I use it?</h3>
<p>Simply insert this tage into your page or template: <code>{redirect_page page=\'some-page-alias\'}</code></p>';
$lang['admin']['of'] = 'из';
$lang['admin']['first'] = 'Первая';
$lang['admin']['last'] = 'Последняя';
$lang['admin']['adminspecialgroup'] = 'Предупреждение: члены этой группы автоматически имеют все права';
$lang['admin']['disablesafemodewarning'] = 'Отключить предупреждение администратора о включении безопасного режима ';
$lang['admin']['allowparamcheckwarnings'] = 'Разрешить проверку параметров для создания предупреждающих сообщений';
$lang['admin']['date_format_string'] = 'Строка формата даты';
$lang['admin']['date_format_string_help'] = '<em>strftime</em> отформатированная строка формата даты. Попробуйте погуглить \'strftime\'';
$lang['admin']['last_modified_at'] = 'Последнее обновление';
$lang['admin']['last_modified_by'] = 'Последнее изменение ';
$lang['admin']['read'] = 'Читать';
$lang['admin']['write'] = 'Писать';
$lang['admin']['execute'] = 'Выполнять';
$lang['admin']['group'] = 'Группа';
$lang['admin']['other'] = 'Другие';
$lang['admin']['event_desc_moduleupgraded'] = 'Отправлять после того, как модуль обновлён';
$lang['admin']['event_desc_moduleinstalled'] = 'Отправлять после того, как модуль установлен';
$lang['admin']['event_desc_moduleuninstalled'] = 'Отправлять после того, как модуль удален';
$lang['admin']['event_desc_edituserdefinedtagpost'] = 'Отправлять после того, как тег пользователя обновлён';
$lang['admin']['event_desc_edituserdefinedtagpre'] = 'Отправлять до обновления тега пользователя';
$lang['admin']['event_desc_deleteuserdefinedtagpre'] = 'Отправлять до удаления тега пользователя';
$lang['admin']['event_desc_deleteuserdefinedtagpost'] = 'Отправлять после того, как тег пользователя удалён';
$lang['admin']['event_desc_adduserdefinedtagpost'] = 'Отправлять после того, как тег пользователя вставлен';
$lang['admin']['event_desc_adduserdefinedtagpre'] = 'Отправлять до вставки тега пользователя';
$lang['admin']['global_umask'] = 'Маска создания файла (umask)';
$lang['admin']['errorcantcreatefile'] = 'Невозможно создать файл  (возможно, проблема с правами доступа?)';
$lang['admin']['errormoduleversionincompatible'] = 'Модуль несовместим с данной версией CMS';
$lang['admin']['errormodulenotloaded'] = 'Внутренняя ошибка системы, модуль не был обработан';
$lang['admin']['errormodulenotfound'] = 'Внутренняя ошибка системы, не найден экземпляр класса модуля';
$lang['admin']['errorinstallfailed'] = 'Установка модуля прошла неудачно';
$lang['admin']['errormodulewontload'] = 'Проблема при создании объекта доступного модуля';
$lang['admin']['frontendlang'] = 'Язык по умолчанию для интерфейса пользователей';
$lang['admin']['info_edituser_password'] = 'Измените данное поле, чтобы изменить пароль пользователя';
$lang['admin']['info_edituser_passwordagain'] = 'Измените данное поле, чтобы изменить пароль пользователя';
$lang['admin']['originator'] = 'Инициатор';
$lang['admin']['module_name'] = 'Название модуля';
$lang['admin']['event_name'] = 'Название события';
$lang['admin']['event_description'] = 'Описание события';
$lang['admin']['error_delete_default_parent'] = 'Вы не можете удалить родителя страницы по умолчанию';
$lang['admin']['jsdisabled'] = 'Извините, эта функция требует, включения Javascript';
$lang['admin']['order'] = 'Порядок';
$lang['admin']['reorderpages'] = 'Изменить порядок страниц';
$lang['admin']['reorder'] = 'Изменить порядок';
$lang['admin']['page_reordered'] = 'Порядок страниц был изменён.';
$lang['admin']['pages_reordered'] = 'Порядок страниц был успешно изменён';
$lang['admin']['sibling_duplicate_order'] = 'Две страницы одного уровня не могут иметь один и тот же порядковый номер. Порядок следования страниц не был изменён.';
$lang['admin']['no_orders_changed'] = 'Вы хотели изменить порядок следования страниц, но не поменяли номера ни одной из них. Порядок следования страниц не был изменён.';
$lang['admin']['order_too_small'] = 'Ноль не может быть порядковым номером страницы. Порядок следования страниц не был изменён.';
$lang['admin']['order_too_large'] = 'Порядковый номер страницы не может быть больше, чем число страниц на данном уровне. Порядок следования страниц не был изменен.';
$lang['admin']['user_tag'] = 'Тег пользователя';
$lang['admin']['add'] = 'Добавить';
$lang['admin']['CSS'] = 'СSS';
$lang['admin']['about'] = 'Инфо';
$lang['admin']['action'] = 'Действие';
$lang['admin']['actionstatus'] = 'Действие/Статус';
$lang['admin']['active'] = 'Активный';
$lang['admin']['addcontent'] = 'Добавить новый контент';
$lang['admin']['cantremove'] = 'Не могу удалить';
$lang['admin']['changepermissions'] = 'Сменить права';
$lang['admin']['changepermissionsconfirm'] = 'ВНИМАНИЕ\\n\\nБудет произведена проверка, есть ли у веб-сервера права на запись для всех файлов, принадлежащих модулю. \\nУверены ли вы, что хотите продолжить?';
$lang['admin']['contentadded'] = 'Контент был успешно занесён в базу данных.';
$lang['admin']['contentupdated'] = 'Контент был успешно обновлён.';
$lang['admin']['contentdeleted'] = 'Контент был успешно удалён из базы данных.';
$lang['admin']['success'] = 'Операция выполнена';
$lang['admin']['addcss'] = 'Добавить новый CSS';
$lang['admin']['addgroup'] = 'Добавить новую группу';
$lang['admin']['additionaleditors'] = 'Дополнительные редакторы';
$lang['admin']['addtemplate'] = 'Добавить новый шаблон';
$lang['admin']['adduser'] = 'Добавить нового пользователя';
$lang['admin']['addusertag'] = 'Добавить тег пользователя';
$lang['admin']['adminaccess'] = 'Доступ к административному интерфейсу';
$lang['admin']['adminlog'] = 'Журнал администратора';
$lang['admin']['adminlogcleared'] = 'Журнал администратора был успешно очищен';
$lang['admin']['adminlogempty'] = 'Журнал администратора пуст';
$lang['admin']['adminsystemtitle'] = 'Административный интерфейс';
$lang['admin']['adminpaneltitle'] = 'Административный интерфейс CMS Made Simple';
$lang['admin']['advanced'] = 'Дополнительно';
$lang['admin']['aliasalreadyused'] = 'Этот алиас уже используется на другой странице. Измените "Алиас страницы" на закладке "Настройки" на какой-нибудь другой. ';
$lang['admin']['aliasmustbelettersandnumbers'] = 'Алиас должен состоять из букв и цифр';
$lang['admin']['aliasnotaninteger'] = 'Алиас не может быть числом';
$lang['admin']['allpagesmodified'] = 'Все страницы изменены';
$lang['admin']['assignments'] = 'Подключить пользователя';
$lang['admin']['associationexists'] = 'Связь уже существует';
$lang['admin']['autoinstallupgrade'] = 'Автоматически устанавливать/обновлять';
$lang['admin']['back'] = 'Назад в меню';
$lang['admin']['backtoplugins'] = 'Назад к списку плагинов';
$lang['admin']['cancel'] = 'Отмена';
$lang['admin']['cantchmodfiles'] = 'Не могу поменять права доступа к некоторым файлам';
$lang['admin']['cantremovefiles'] = 'Проблема с перемещением файлов  (права доступа?)';
$lang['admin']['confirmcancel'] = 'Вы уверены, что хотите отменить внесённые изменения? Нажмите OK, чтобы отменить все изменения. Нажмите Отмена, чтобы продолжить редактирование.';
$lang['admin']['canceldescription'] = 'Отменить изменения';
$lang['admin']['clearadminlog'] = 'Очистить журнал администратора';
$lang['admin']['code'] = 'Код';
$lang['admin']['confirmdefault'] = 'Вы действительно хотите установить страницу по умолчанию для сайта?';
$lang['admin']['confirmdeletedir'] = 'Вы действительно хотите удалить папку с её содержимым?';
$lang['admin']['content'] = 'Контент';
$lang['admin']['contentmanagement'] = 'Управление контентом';
$lang['admin']['contenttype'] = 'Тип контента';
$lang['admin']['copy'] = 'Копировать';
$lang['admin']['copytemplate'] = 'Копировать шаблон';
$lang['admin']['create'] = 'Создать';
$lang['admin']['createnewfolder'] = 'Создать папку';
$lang['admin']['cssalreadyused'] = 'Имя CSS уже используется';
$lang['admin']['cssmanagement'] = 'Управление CSS';
$lang['admin']['currentassociations'] = 'Имеющиеся связи';
$lang['admin']['currentdirectory'] = 'Данная папка';
$lang['admin']['currentgroups'] = 'Имеющиеся группы';
$lang['admin']['currentpages'] = 'Имеющиеся страницы';
$lang['admin']['currenttemplates'] = 'Имеющиеся шаблоны';
$lang['admin']['currentusers'] = 'Имеющиеся пользователи';
$lang['admin']['custom404'] = 'Сообщение об ошибке 404';
$lang['admin']['database'] = 'База данных';
$lang['admin']['databaseprefix'] = 'Префикс базы данных';
$lang['admin']['databasetype'] = 'Тип базы данных';
$lang['admin']['date'] = 'Дата';
$lang['admin']['default'] = 'По умолчанию';
$lang['admin']['delete'] = 'Удалить';
$lang['admin']['deleteconfirm'] = 'Вы действительно хотите удалить?';
$lang['admin']['deleteassociationconfirm'] = 'Вы уверены, что хотите удалить ассоциацию с - %s - ?';
$lang['admin']['deletecss'] = 'Удалить CSS';
$lang['admin']['dependencies'] = 'Зависимость';
$lang['admin']['description'] = 'Описание';
$lang['admin']['directoryexists'] = 'Эта папка уже существует.';
$lang['admin']['down'] = 'Вниз';
$lang['admin']['edit'] = 'Редактирование';
$lang['admin']['editconfiguration'] = 'Редактирование конфигурации';
$lang['admin']['editcontent'] = 'Редактирование контента';
$lang['admin']['editcss'] = 'Редактирование стиля';
$lang['admin']['editcsssuccess'] = 'Таблица стилей обновлена';
$lang['admin']['editgroup'] = 'Редактирование группы';
$lang['admin']['editpage'] = 'Редактирование страницы';
$lang['admin']['edittemplate'] = 'Редактирование шаблона';
$lang['admin']['edittemplatesuccess'] = 'Шаблон обновлён';
$lang['admin']['edituser'] = 'Редактирование пользователя';
$lang['admin']['editusertag'] = 'Редактирование тега пользователя';
$lang['admin']['usertagadded'] = 'Тег пользователя был успешно добавлен';
$lang['admin']['usertagupdated'] = 'Тег пользователя был успешно обновлён';
$lang['admin']['usertagdeleted'] = 'Тег пользователя был успешно удалён';
$lang['admin']['email'] = 'Адрес e-mail';
$lang['admin']['errorattempteddowngrade'] = 'Установка модуля приведёт к возврату на старую версию. Операция отменена.';
$lang['admin']['errorchildcontent'] = 'Есть дочерний контент. Удалите его сначала.';
$lang['admin']['errorcopyingtemplate'] = 'Ошибка копирования шаблона';
$lang['admin']['errorcouldnotparsexml'] = 'Ошибка при анализе XML файла. Пожалуйста, удостоверьтесь, что вы загружаете .xml файл, а не .tar.gz или zip файл.';
$lang['admin']['errorcreatingassociation'] = 'Ошибка создания связи';
$lang['admin']['errorcssinuse'] = 'Стиль используется страницей или шаблоном. Пожалуйста, сначала удалите эти связи.';
$lang['admin']['errordefaultpage'] = 'Нельзя удалить страницу по умолчанию. Пожалуйста, сначала назначьте другую страницу по умолчанию.';
$lang['admin']['errordeletingassociation'] = 'Ошибка удаления связи';
$lang['admin']['errordeletingcss'] = 'Ошибка удаления css';
$lang['admin']['errordeletingdirectory'] = 'Не могу удалить папку. Проблемы с правами?';
$lang['admin']['errordeletingfile'] = 'Не могу удалить файл. Проблемы с правами?';
$lang['admin']['errordirectorynotwritable'] = 'Нет прав для записи в папку. Это может быть связано с правами на запись в файл или правами владельца. Это может быть также вызвано безопасным режимом. ';
$lang['admin']['errordtdmismatch'] = 'Версия DTD в XML файле не присутствует или несовместима';
$lang['admin']['errorgettingcssname'] = 'Ошибка получения имени стиля';
$lang['admin']['errorgettingtemplatename'] = 'Ошибка получения имени шаблона';
$lang['admin']['errorincompletexml'] = 'XML файл неполный или неверный';
$lang['admin']['uploadxmlfile'] = 'Установить модуль через файл XML';
$lang['admin']['cachenotwritable'] = 'Нет прав на запись в папку для кэша. Очистить кэш, поэтому, невозможно. Пожалуйста удостоверьтесь, что у веб-сервера полные права rwe на папку /tmp/cache  (chmod 777)';
$lang['admin']['modulesnotwritable'] = 'Нет прав на запись в папку с модулями. Если вы хотите иметь возможность устанавливать модули через XML, вам надо дать веб серверу полные права rwe на папку с модулями (chmod 777).';
$lang['admin']['noxmlfileuploaded'] = 'Файл не был загружен. Чтобы установить модуль через XML вы должны выбрать и загрузить .xml файл модуля со своего компьютера.';
$lang['admin']['errorinsertingcss'] = 'Ошибка добавления стиля';
$lang['admin']['errorinsertinggroup'] = 'Ошибка добавления группы';
$lang['admin']['errorinsertingtag'] = 'Ошибка добавления тега пользователя';
$lang['admin']['errorinsertingtemplate'] = 'Ошибка добавления шаблона';
$lang['admin']['errorinsertinguser'] = 'Ошибка добавления пользователя';
$lang['admin']['errornofilesexported'] = 'Ошибка экспорта файла в XML';
$lang['admin']['errorretrievingcss'] = 'Ошибка извлечения таблицы стилей';
$lang['admin']['errorretrievingtemplate'] = 'Ошибка извлечения шаблона';
$lang['admin']['errortemplateinuse'] = 'Шаблон ещё используется страницей. Пожалуйста, сначала удалите её.';
$lang['admin']['errorupdatingcss'] = 'Ошибка обновления таблицы стилей';
$lang['admin']['errorupdatinggroup'] = 'Ошибка обновления группы';
$lang['admin']['errorupdatingpages'] = 'Ошибка обновления страниц';
$lang['admin']['errorupdatingtemplate'] = 'Ошибка обновления шаблона';
$lang['admin']['errorupdatinguser'] = 'Ошибка обновления пользователя';
$lang['admin']['errorupdatingusertag'] = 'Ошибка обновления тега пользователя';
$lang['admin']['erroruserinuse'] = 'Этот пользователь до сих пор владеет созданными им страницами. Пожалуйста, сначала смените владельца.';
$lang['admin']['eventhandlers'] = 'События';
$lang['admin']['editeventhandler'] = 'Редактировать обработчик события';
$lang['admin']['eventhandlerdescription'] = 'Связать пользовательский тег с событием';
$lang['admin']['export'] = 'Экспорт';
$lang['admin']['event'] = 'Событие';
$lang['admin']['false'] = 'False ';
$lang['admin']['settrue'] = 'Установить True';
$lang['admin']['filecreatedirnodoubledot'] = 'Папка не может содержать \'..\'.';
$lang['admin']['filecreatedirnoname'] = 'Не могу создать папку с пустым именем.';
$lang['admin']['filecreatedirnoslash'] = 'Имя папки не может содержать \'/\' или \'\\\'.';
$lang['admin']['filemanagement'] = 'Управление файлами';
$lang['admin']['filename'] = 'Имя файла';
$lang['admin']['filenotuploaded'] = 'Не могу загрузить файл. Проблемы с правами?';
$lang['admin']['filesize'] = 'Pазмер файла';
$lang['admin']['firstname'] = 'Имя';
$lang['admin']['groupmanagement'] = 'Управление группами';
$lang['admin']['grouppermissions'] = 'Права групп';
$lang['admin']['handler'] = 'Обработчик (тег пользователя)';
$lang['admin']['headtags'] = 'Теги заголовка';
$lang['admin']['help'] = 'Помощь';
$lang['admin']['new_window'] = 'новое окно';
$lang['admin']['helpwithsection'] = 'Помощь %s';
$lang['admin']['helpaddtemplate'] = '<p>Шаблоны управляют видом вашего сайта. </p><p>Можно создавать шаблоны и присоединять к ним таблицы стилей.</p>';
$lang['admin']['helplisttemplate'] = '<p>Здесь вы имеете возможность создавать, редактировать и удалять шаблоны. </p><p> Для создания нового шаблона нажмите на "Добавить шаблон". </p><p>Если вы хотите назначить шаблон для всех страниц сайта, то нажмите на "Установить для всех".</p>';
$lang['admin']['home'] = 'Домой';
$lang['admin']['homepage'] = 'Домашняя страница';
$lang['admin']['hostname'] = 'Имя хоста';
$lang['admin']['idnotvalid'] = 'Данный ID не действителен';
$lang['admin']['imagemanagement'] = 'Менеджер изображений';
$lang['admin']['informationmissing'] = 'Отсутствует информация';
$lang['admin']['install'] = 'Установить';
$lang['admin']['invalidcode'] = 'Введён неверный код';
$lang['admin']['illegalcharacters'] = 'Недопустимые символы в поле %s.';
$lang['admin']['invalidcode_brace_missing'] = 'Нечетное число скобок';
$lang['admin']['invalidtemplate'] = 'Шаблон не действителен';
$lang['admin']['itemid'] = 'ID объекта';
$lang['admin']['itemname'] = 'Имя объекта';
$lang['admin']['language'] = 'Язык';
$lang['admin']['lastname'] = 'Фамилия';
$lang['admin']['logout'] = 'Выход';
$lang['admin']['loginprompt'] = 'Введите свои данные для доступа в административную панель.';
$lang['admin']['logintitle'] = 'Вход в CMS Made Simple';
$lang['admin']['menutext'] = 'Текст меню';
$lang['admin']['missingparams'] = 'Некоторые параметны потеряны или неверны';
$lang['admin']['modifygroupassignments'] = 'Изменить входящих в группу';
$lang['admin']['moduleabout'] = 'Инфо о модуле %s';
$lang['admin']['modulehelp'] = 'Справка для модуля %s';
$lang['admin']['msg_defaultcontent'] = 'Добавьте здесь код, который должен присутствовать как контент по умолчанию на всех новых страницах';
$lang['admin']['msg_defaultmetadata'] = 'Добавьте здесь код, который должен присутствовать в секции метаданных всех новых страниц';
$lang['admin']['wikihelp'] = 'Помощь сообщества';
$lang['admin']['moduleinstalled'] = 'Модуль уже установлен';
$lang['admin']['moduleinterface'] = 'Интерфейс %s';
$lang['admin']['modules'] = 'Модули';
$lang['admin']['move'] = 'Переместить';
$lang['admin']['name'] = 'Название';
$lang['admin']['needpermissionto'] = 'У вас должны быть права \'%s\' для того, чтобы сделать это.';
$lang['admin']['needupgrade'] = 'Нужен апгрейд';
$lang['admin']['newtemplatename'] = 'Новое имя шаблона';
$lang['admin']['next'] = 'Следующая';
$lang['admin']['noaccessto'] = 'Нет доступа к %s';
$lang['admin']['nocss'] = 'Нет стиля';
$lang['admin']['noentries'] = 'Нет записей';
$lang['admin']['nofieldgiven'] = 'Не задан %s!';
$lang['admin']['nofiles'] = 'Нет файлов';
$lang['admin']['nopasswordmatch'] = 'Пароли не совпадают';
$lang['admin']['norealdirectory'] = 'Папки не существует';
$lang['admin']['norealfile'] = 'Файла не существует';
$lang['admin']['notinstalled'] = 'Не установлен';
$lang['admin']['overwritemodule'] = 'Перезаписать имеющийся модуль';
$lang['admin']['owner'] = 'Владелец';
$lang['admin']['pagealias'] = 'Алиас страницы';
$lang['admin']['pagedefaults'] = 'Страница по умолчанию';
$lang['admin']['pagedefaultsdescription'] = 'Установить значения по умолчанию для новых страниц';
$lang['admin']['parent'] = 'Родитель';
$lang['admin']['password'] = 'Пароль';
$lang['admin']['passwordagain'] = 'Пароль (ещё раз)';
$lang['admin']['permission'] = 'Право';
$lang['admin']['permissions'] = 'Права';
$lang['admin']['permissionschanged'] = 'Права были обновлены.';
$lang['admin']['pluginabout'] = 'Инфо о теге %s';
$lang['admin']['pluginhelp'] = 'Справка для тега %s';
$lang['admin']['pluginmanagement'] = 'Управление плагинами';
$lang['admin']['prefsupdated'] = 'Свойства были изменены.';
$lang['admin']['preview'] = 'Предпросмотр';
$lang['admin']['previewdescription'] = 'Предварительный просмотр изменений';
$lang['admin']['previous'] = 'Предыдущая';
$lang['admin']['remove'] = 'Удалить';
$lang['admin']['removeconfirm'] = 'Это действие навсегда удалить файлы, составляющие этот модуль из этой установки.\\nВы действительно хотите продолжить?';
$lang['admin']['removecssassociation'] = 'Удалить связь со стилем';
$lang['admin']['saveconfig'] = 'Сохранить настройки';
$lang['admin']['send'] = 'Отправить';
$lang['admin']['setallcontent'] = 'Установить для всех страниц';
$lang['admin']['setallcontentconfirm'] = 'Вы действительно хотите использовать этот шаблон для всех страниц?';
$lang['admin']['showinmenu'] = 'Показать в меню';
$lang['admin']['showsite'] = 'Показать сайт';
$lang['admin']['sitedownmessage'] = 'Сообщение о недоступности сайта';
$lang['admin']['siteprefs'] = 'Общие настройки';
$lang['admin']['status'] = 'Статус';
$lang['admin']['stylesheet'] = 'Стиль';
$lang['admin']['submit'] = 'Отправить';
$lang['admin']['submitdescription'] = 'Сохранить изменения';
$lang['admin']['tags'] = 'Теги';
$lang['admin']['template'] = 'Шаблон';
$lang['admin']['templateexists'] = 'Шаблон с таким именем уже существует';
$lang['admin']['templatemanagement'] = 'Управление шаблонами';
$lang['admin']['title'] = 'Заголовок';
$lang['admin']['tools'] = 'Инструменты';
$lang['admin']['true'] = 'True ';
$lang['admin']['setfalse'] = 'Установить False';
$lang['admin']['type'] = 'Тип';
$lang['admin']['typenotvalid'] = 'Неверный тип';
$lang['admin']['uninstall'] = 'Отключить';
$lang['admin']['uninstallconfirm'] = 'Вы действительно хотите отключить этот модуль? Название: ';
$lang['admin']['up'] = 'Вверх';
$lang['admin']['upgrade'] = 'Обновление';
$lang['admin']['upgradeconfirm'] = 'Вы действительно хотите сделать обновление?';
$lang['admin']['uploadfile'] = 'Загрузить файл';
$lang['admin']['url'] = 'Ссылка';
$lang['admin']['useadvancedcss'] = 'Использовать управление дополнительными стилями';
$lang['admin']['user'] = 'Пользователь';
$lang['admin']['userdefinedtags'] = 'Теги пользователя';
$lang['admin']['usermanagement'] = 'Управление пользователями';
$lang['admin']['username'] = 'Имя пользователя';
$lang['admin']['usernameincorrect'] = 'Имя пользователя или пароль неверны';
$lang['admin']['userprefs'] = 'Настройки пользователя';
$lang['admin']['usersassignedtogroup'] = 'Пользователи из группы: %s';
$lang['admin']['usertagexists'] = 'Тег с этим именем уже существует.';
$lang['admin']['usewysiwyg'] = 'Использовать визуальный редактор для контента';
$lang['admin']['version'] = 'Версия';
$lang['admin']['view'] = 'Просмотр';
$lang['admin']['welcomemsg'] = 'Добро пожаловать, %s';
$lang['admin']['directoryabove'] = 'уровень выше';
$lang['admin']['nodefault'] = 'Нет выбранного по умолчанию';
$lang['admin']['blobexists'] = 'Имя блока контента существует';
$lang['admin']['blobmanagement'] = 'Управление блоками контента';
$lang['admin']['errorinsertingblob'] = 'Ошибка добавления блока контента';
$lang['admin']['addhtmlblob'] = 'Добавить блок контента ';
$lang['admin']['edithtmlblob'] = 'Редактирование блока контента ';
$lang['admin']['edithtmlblobsuccess'] = 'Блок контента обновлен';
$lang['admin']['tagtousegcb'] = 'Тег для использования этого блока';
$lang['admin']['gcb_wysiwyg'] = 'Включить визуальный редактор в блоках контента';
$lang['admin']['gcb_wysiwyg_help'] = 'Включить визуальный редактор для редактирования блоков контента';
$lang['admin']['filemanager'] = 'Управление файлами';
$lang['admin']['imagemanager'] = 'Управление изображениями';
$lang['admin']['encoding'] = 'Кодировка';
$lang['admin']['clearcache'] = 'Очистить кэш';
$lang['admin']['clear'] = 'Очистить';
$lang['admin']['cachecleared'] = 'Кэш очищен';
$lang['admin']['apply'] = 'Применить';
$lang['admin']['applydescription'] = 'Сохранить изменения и продолжить редактирование';
$lang['admin']['none'] = 'Нет';
$lang['admin']['wysiwygtouse'] = 'Выбрать визуальный редактор';
$lang['admin']['syntaxhighlightertouse'] = 'Выбрать подсветку синтаксиса';
$lang['admin']['hasdependents'] = 'Имеет зависимости';
$lang['admin']['missingdependency'] = 'Потерянная зависимость';
$lang['admin']['minimumversion'] = 'Минимальная версия';
$lang['admin']['minimumversionrequired'] = 'Минимально необходимая версия CMSMS';
$lang['admin']['maximumversion'] = 'Максимальная версия';
$lang['admin']['maximumversionsupported'] = 'Максимальная поддерживаемая версия CMSMS';
$lang['admin']['depsformodule'] = 'Зависимости для модуля %s ';
$lang['admin']['installed'] = 'Включен';
$lang['admin']['author'] = 'Автор';
$lang['admin']['changehistory'] = 'История изменений';
$lang['admin']['moduleerrormessage'] = 'Сообщение об ошибке для модуля %s';
$lang['admin']['moduleupgradeerror'] = 'Ошибка при обновлении модуля';
$lang['admin']['moduleinstallmessage'] = 'Сообщение об установке модуля %s';
$lang['admin']['moduleuninstallmessage'] = 'Сообщение об удалении модуля %s';
$lang['admin']['admintheme'] = 'Тема для Административного интерфейса';
$lang['admin']['addstylesheet'] = 'Добавить стиль';
$lang['admin']['editstylesheet'] = 'Редактирование стиля';
$lang['admin']['addcssassociation'] = 'Добавить связь со стилем';
$lang['admin']['attachstylesheet'] = 'Присоединить этот стиль';
$lang['admin']['attachtemplate'] = 'Присоединить к этому шаблону';
$lang['admin']['main'] = 'Главная';
$lang['admin']['pages'] = 'Страницы';
$lang['admin']['page'] = 'Страница';
$lang['admin']['files'] = 'Файлы';
$lang['admin']['layout'] = 'Оформление';
$lang['admin']['usersgroups'] = 'Пользователи и группы';
$lang['admin']['extensions'] = 'Pасширения';
$lang['admin']['preferences'] = 'Настройки';
$lang['admin']['admin'] = 'Администрирование сайта';
$lang['admin']['viewsite'] = 'Просмотр сайта';
$lang['admin']['templatecss'] = 'Прикрепить шаблон к CSS';
$lang['admin']['plugins'] = 'Плагины';
$lang['admin']['movecontent'] = 'Переместить страницы';
$lang['admin']['module'] = 'Модуль';
$lang['admin']['usertags'] = 'Теги пользователя';
$lang['admin']['htmlblobs'] = 'Блоки контента';
$lang['admin']['adminhome'] = 'Главная';
$lang['admin']['liststylesheets'] = 'Таблицы стилей';
$lang['admin']['preferencesdescription'] = 'Здесь вы задаёте настройки сайта.';
$lang['admin']['adminlogdescription'] = 'Показывает список действий, совершённых админом.';
$lang['admin']['mainmenu'] = 'Главное меню';
$lang['admin']['users'] = 'Пользователи';
$lang['admin']['usersdescription'] = 'Управление пользователями.';
$lang['admin']['groups'] = 'Группы';
$lang['admin']['groupsdescription'] = 'Управление группами.';
$lang['admin']['groupassignments'] = 'Входящие в группу';
$lang['admin']['groupassignmentdescription'] = 'Здесь вы подключаете пользователей к группе.';
$lang['admin']['groupperms'] = 'Права группы';
$lang['admin']['grouppermsdescription'] = 'Управление правами группы';
$lang['admin']['pagesdescription'] = 'Здесь вы добавляете и редактируете страницы.';
$lang['admin']['htmlblobdescription'] = 'Блоки контента - фрагменты html, которые вы можете помещать на страницу или шаблон.';
$lang['admin']['templates'] = 'Шаблоны';
$lang['admin']['templatesdescription'] = 'Здесь вы добавляете и редактируете шаблоны. Шаблоны определяют внешний вид вашего сайта.';
$lang['admin']['stylesheets'] = 'Стили';
$lang['admin']['stylesheetsdescription'] = 'Управление стилями это улучшенный метод редактирования таблиц стилей отдельно от шаблона. ';
$lang['admin']['filemanagerdescription'] = 'Загрузка и управление файлами.';
$lang['admin']['imagemanagerdescription'] = 'Загрузка и управление изображениями.';
$lang['admin']['moduledescription'] = 'Расширения функциональности.';
$lang['admin']['tagdescription'] = 'Теги - небольшие расширения функциональности которые можно добавлять к шаблону или непосредственно к контенту.';
$lang['admin']['usertagdescription'] = 'Теги, создаваемые пользователем для выполнения специфических задач непосредственно из браузера.';
$lang['admin']['installdirwarning'] = '<em><strong>Внимание:</strong></em> Папка install все еще существует. Пожалуйста удалите ее полностью .';
$lang['admin']['subitems'] = 'Подпункты';
$lang['admin']['extensionsdescription'] = 'Модули, теги и пр.';
$lang['admin']['usersgroupsdescription'] = 'Пользователи и группы.';
$lang['admin']['layoutdescription'] = 'Свойства оформления.';
$lang['admin']['admindescription'] = 'Функции управление сайтом.';
$lang['admin']['contentdescription'] = 'Добавление и редактирование содержания.';
$lang['admin']['enablecustom404'] = 'Включить сообщение об ошибке 404';
$lang['admin']['enablesitedown'] = 'Включить сообщение о недоступности сайта';
$lang['admin']['bookmarks'] = 'Закладки';
$lang['admin']['user_created'] = 'Пользовательский ярлык';
$lang['admin']['forums'] = 'Форумы';
$lang['admin']['wiki'] = 'Wiki ';
$lang['admin']['irc'] = 'IRC ';
$lang['admin']['module_help'] = 'Помощь по работе с модулем';
$lang['admin']['managebookmarks'] = 'Управление закладками';
$lang['admin']['editbookmark'] = 'Правка закладки';
$lang['admin']['addbookmark'] = 'Добавить закладку';
$lang['admin']['recentpages'] = 'Последние страницы';
$lang['admin']['groupname'] = 'Имя группы';
$lang['admin']['selectgroup'] = 'Выбрать группу';
$lang['admin']['updateperm'] = 'Обновить права';
$lang['admin']['admincallout'] = 'Закладки в административном интерфейсе';
$lang['admin']['showbookmarks'] = 'Показать закладки';
$lang['admin']['hide_help_links'] = 'Скрыть ссылку на справку';
$lang['admin']['hide_help_links_help'] = 'Поставьте галку, чтобы отключить wiki и ссылки на справку модуля в заголовках страниц.';
$lang['admin']['showrecent'] = 'Показать последние страницы';
$lang['admin']['attachtotemplate'] = 'Присоединить стиль к шаблону';
$lang['admin']['attachstylesheets'] = 'Присоединить стили';
$lang['admin']['indent'] = 'Использовать отступы для обозначения иерархии';
$lang['admin']['adminindent'] = 'Вывод содержания';
$lang['admin']['contract'] = 'Скрыть секцию';
$lang['admin']['expand'] = 'Раскрыть секцию';
$lang['admin']['expandall'] = 'Раскрыть все секции';
$lang['admin']['contractall'] = 'Скрыть все секции';
$lang['admin']['menu_bookmarks'] = '[ + ]';
$lang['admin']['globalconfig'] = 'Общие настройки';
$lang['admin']['adminpaging'] = 'Количество на странице';
$lang['admin']['nopaging'] = 'Показать все';
$lang['admin']['myprefs'] = 'Мои настройки';
$lang['admin']['myprefsdescription'] = 'Здесь вы настраиваете административную часть.';
$lang['admin']['myaccount'] = 'Мой аккаунт';
$lang['admin']['myaccountdescription'] = 'Здесь Вы можете обновить настройки вашего аккаунта.';
$lang['admin']['adminprefs'] = 'Настройки пользователя';
$lang['admin']['adminprefsdescription'] = 'Здесь вы настраиваете свойства админа.';
$lang['admin']['managebookmarksdescription'] = 'Управление закладками.';
$lang['admin']['options'] = 'Опции';
$lang['admin']['langparam'] = 'Параметр, используемый для указания языка, на котором будет отображаться модуль во фронтенде. Не все модули требуют этот параметр.';
$lang['admin']['parameters'] = 'Параметры';
$lang['admin']['mediatype'] = 'Тип медиа';
$lang['admin']['mediatype_'] = 'Не задано : будет использоваться везде';
$lang['admin']['mediatype_all'] = 'all : Подходит для всех устройств.';
$lang['admin']['mediatype_aural'] = 'aural : Предназначено для синтезаторов речи.';
$lang['admin']['mediatype_braille'] = 'braille : Предназначено для тактильных устройств для слепых.';
$lang['admin']['mediatype_embossed'] = 'embossed : Предназначено для брайлевских принтеров.';
$lang['admin']['mediatype_handheld'] = 'handheld : Предназначено для КПК';
$lang['admin']['mediatype_print'] = 'print : Предназначено для вывода на печать.';
$lang['admin']['mediatype_projection'] = 'projection : Предназначено для проекторов или прозрачек.';
$lang['admin']['mediatype_screen'] = 'screen : Предназначено для компьютерных экранов.';
$lang['admin']['mediatype_tty'] = 'tty : Предназначено для устройств вывода с моноширинными шрифтами.';
$lang['admin']['mediatype_tv'] = 'tv : Предназначено для вывода на устройствах телевизионного типа.';
$lang['admin']['assignmentchanged'] = 'Связи групп были обновлены';
$lang['admin']['stylesheetexists'] = 'Таблица стилей существует';
$lang['admin']['errorcopyingstylesheet'] = 'Ошибка копирования таблицы стилей';
$lang['admin']['copystylesheet'] = 'Копировать таблицу стилей';
$lang['admin']['newstylesheetname'] = 'Название новой таблицы стилей';
$lang['admin']['target'] = 'Назначение';
$lang['admin']['xml'] = 'ХML';
$lang['admin']['xmlmodulerepository'] = 'URL soap-сервера ModuleRepository';
$lang['admin']['metadata'] = 'Метаданные';
$lang['admin']['globalmetadata'] = 'Глобальные метаданные';
$lang['admin']['titleattribute'] = 'Описание (title)';
$lang['admin']['tabindex'] = 'Индекс вкладки';
$lang['admin']['accesskey'] = 'Клавиша доступа';
$lang['admin']['sitedownwarning'] = '<strong>Предупреждение:</strong> Ваш сайт сейчас недоступен. Удалите файл %s для решения проблемы.';
$lang['admin']['deletecontent'] = 'Удалить контент';
$lang['admin']['deletepages'] = 'Удалить эти страницы?';
$lang['admin']['selectall'] = 'Выделить все';
$lang['admin']['selecteditems'] = 'С выделенным';
$lang['admin']['inactive'] = 'Неактивный';
$lang['admin']['deletetemplates'] = 'Удалить шаблоны';
$lang['admin']['templatestodelete'] = 'Эти шаблоны будут удалены';
$lang['admin']['wontdeletetemplateinuse'] = 'Эти шаблоны используются и не могут быть удалены';
$lang['admin']['deletetemplate'] = 'Удалить таблицы стилей';
$lang['admin']['stylesheetstodelete'] = 'Эти таблицы стилей будут удалены';
$lang['admin']['sitename'] = 'Название сайта';
$lang['admin']['siteadmin'] = 'Администратор сайта';
$lang['admin']['images'] = 'Управление изображениями';
$lang['admin']['blobs'] = 'Глобальные блоки контента';
$lang['admin']['groupmembers'] = 'Права групп';
$lang['admin']['troubleshooting'] = '(Решение проблем)';
$lang['admin']['event_desc_loginpost'] = 'Отправляется после того, как пользователь вошел через панель админа';
$lang['admin']['event_desc_logoutpost'] = 'Отправляется после того, как пользователь вышел из панели админа';
$lang['admin']['event_desc_adduserpre'] = 'Отправляется перед тем, как создан новый пользователь';
$lang['admin']['event_desc_adduserpost'] = 'Отправляется после того, как создан новый пользователь';
$lang['admin']['event_desc_edituserpre'] = 'Отправляется до того, как редактирование пользователя сохранено';
$lang['admin']['event_desc_edituserpost'] = 'Отправляется после того, как редактирование пользователя сохранено';
$lang['admin']['event_desc_deleteuserpre'] = 'Отправляется до того, как пользователь удален из системы';
$lang['admin']['event_desc_deleteuserpost'] = 'Отправляется после того, как пользователь удален из сисемы';
$lang['admin']['event_desc_addgrouppre'] = 'Отправляется до того, как была создана новая группа';
$lang['admin']['event_desc_addgrouppost'] = 'Отправляется после того, как была создана новая группа';
$lang['admin']['event_desc_changegroupassignpre'] = 'Отправить до сохранения прав группы';
$lang['admin']['event_desc_changegroupassignpost'] = 'Отправить после сохранения прав группы';
$lang['admin']['event_desc_editgrouppre'] = 'Отправляется до того, как редактирование группы  сохранено';
$lang['admin']['event_desc_editgrouppost'] = 'Отправляется после того, как редактирование группы  сохранено';
$lang['admin']['event_desc_deletegrouppre'] = 'Отправляется до того, как группа была удалена из системы';
$lang['admin']['event_desc_deletegrouppost'] = 'Отправляется после того, как группа была удалена из системы';
$lang['admin']['event_desc_addstylesheetpre'] = 'Отправляется до того, как таблица стилей была создана';
$lang['admin']['event_desc_addstylesheetpost'] = 'Отправляется после того, как таблица стилей была создана ';
$lang['admin']['event_desc_editstylesheetpre'] = 'Отправляется до того, как изменения в таблице стилей были сохранены';
$lang['admin']['event_desc_editstylesheetpost'] = 'Отправляется после того, как изменения в таблице стилей были сохранены';
$lang['admin']['event_desc_deletestylesheetpre'] = 'Отправляется до того, как таблица стилей была удалена из системы';
$lang['admin']['event_desc_deletestylesheetpost'] = 'Отправляется после того, как таблица стилей была удалена из системы';
$lang['admin']['event_desc_addtemplatepre'] = 'Отправляется до того, как создан новый шаблон';
$lang['admin']['event_desc_addtemplatepost'] = 'Отправляется после того, как создан новый шаблон';
$lang['admin']['event_desc_edittemplatepre'] = 'Отправляется до того, как изменения шаблона были сохранены';
$lang['admin']['event_desc_edittemplatepost'] = 'Отправляется после того, как изменения шаблона были сохранены';
$lang['admin']['event_desc_deletetemplatepre'] = 'Отправляется до того, как шаблон был удалён из  системы';
$lang['admin']['event_desc_deletetemplatepost'] = 'Отправляется после того, как шаблон был удалён из  системы';
$lang['admin']['event_desc_templateprecompile'] = 'Отправляется до того, как шаблон отдаётся на обработку smarty';
$lang['admin']['event_desc_templatepostcompile'] = 'Отправляется после того, как шаблон отдаётся на обработку smarty';
$lang['admin']['event_desc_addglobalcontentpre'] = 'Отправляется до того, как создан новый глобальный блок содержимого';
$lang['admin']['event_desc_addglobalcontentpost'] = 'Отправляется после того, как создан новый глобальный блок содержимого';
$lang['admin']['event_desc_editglobalcontentpre'] = 'Отправляется до того, как изменения в глобальном блоке содержимого сохранены ';
$lang['admin']['event_desc_editglobalcontentpost'] = 'Отправляется после того, как изменения в глобальном блоке содержимого сохранены ';
$lang['admin']['event_desc_deleteglobalcontentpre'] = 'Отправляется до того, как глобальной блок содержимого удален из системы';
$lang['admin']['event_desc_deleteglobalcontentpost'] = 'Отправляется после того, как глобальной блок содержимого удален из системы';
$lang['admin']['event_desc_globalcontentprecompile'] = 'Отправляется до того, как глобальной блок содержимого отдаётся на обработку smarty.';
$lang['admin']['event_desc_globalcontentpostcompile'] = 'Отправляется после того, как глобальной блок содержимого отдаётся на обработку smarty.';
$lang['admin']['event_desc_contenteditpre'] = 'Отправляется до того, как изменения в содержимом сохранены';
$lang['admin']['event_desc_contenteditpost'] = 'Отправляется после того, как изменения в содержимом сохранены';
$lang['admin']['event_desc_contentdeletepre'] = 'Отправляется до того, как  содержимое удалено из системы';
$lang['admin']['event_desc_contentdeletepost'] = 'Отправляется после того, как  содержимое удалено из системы';
$lang['admin']['event_desc_contentstylesheet'] = 'Отправляется до того, как таблица стилей отправлена браузеру';
$lang['admin']['event_desc_contentprecompile'] = 'Отправляется до того, как содержание отправлено smarty для обработки';
$lang['admin']['event_desc_contentpostcompile'] = 'Отправляется после того, как было обрботано smarty';
$lang['admin']['event_desc_contentpostrender'] = 'Отправляется до того, как был отправлен браузеру комбинированный html ';
$lang['admin']['event_desc_smartyprecompile'] = 'Отправляется до того, как какое- либо содержимое, предназначенное для smarty отправлено на обработку ';
$lang['admin']['event_desc_smartypostcompile'] = 'Отправляется после того, как какое- либо содержимое, предназначенное для smarty отправлено на обработку ';
$lang['admin']['event_help_loginpost'] = '<p>Отправляется после того, как пользователь входит в панель админа.</p>
<h4>Параметры</h4>
<ul>
<li>\'user\' - Ссылка на объект пользователя.</li>
</ul>
';
$lang['admin']['event_help_logoutpost'] = '<p>Отправляется после того, как пользователь выходит из панели админа.</p>
<h4>Параметры</h4>
<ul>
<li>\'user\' -Ссылка на объект пользователя.</li>
</ul>
';
$lang['admin']['event_help_adduserpre'] = '<p>Отправляется до того, как создан новый пользователь.</p>
<h4>Параметры</h4>
<ul>
<li>\'user\' - Ссылка на объект пользователя.</li>
</ul>
';
$lang['admin']['event_help_adduserpost'] = '<p>Отправляется после того, как создан новый пользователь.</p>
<h4>Параметры</h4>
<ul>
<li>\'user\' - Ссылка на объект пользователя.</li>
</ul>
';
$lang['admin']['event_help_edituserpre'] = '<p>Отправляется до того, как изменения профиля пользователя сохранены.</p>
<h4>Параметры</h4>
<ul>
<li>\'user\' - Ссылка на объект пользователя.</li>
</ul>
';
$lang['admin']['event_help_edituserpost'] = '<p>Отправляется после того, как изменения профиля пользователя сохранены.</p>
<h4>Параметры</h4>
<ul>
<li>\'user\' - Ссылка на объект пользователя.</li>
</ul>
';
$lang['admin']['event_help_deleteuserpre'] = '<p>Отправляется до того,к ак пользователь удален из системы.</p>
<h4>Параметры</h4>
<ul>
<li>\'user\' - Ссылка на объект пользователя.</li>
</ul>
';
$lang['admin']['event_help_deleteuserpost'] = '<p>Отправляется после того, как пользователь удален из системы.</p>
<h4>Параметры</h4>
<ul>
<li>\'user\' - Ссылка на объект пользователя.</li>
</ul>
';
$lang['admin']['event_help_addgrouppre'] = '<p>Отправляется до того, как создана новая группа.</p>
<h4>Параметры</h4>
<ul>
<li>\'group\' - Ссылка на объект группы.</li>
</ul>
';
$lang['admin']['event_help_addgrouppost'] = '<p>Отправляется после того, как создана новая группа.</p>
<h4>Параметры</h4>
<ul>
<li>\'group\' - Ссылка на объект группы.</li>
</ul>
';
$lang['admin']['event_help_changegroupassignpre'] = '<p>Отправляется до того, как сохранены назначения группы.</p>
<h4>Параметры></h4>
<ul>
<li>\'group\' - Ссылка на объект группы.</li>
<li>\'users\' - Массив ссылок на объекты пользователей группы.</li>
';
$lang['admin']['event_help_changegroupassignpost'] = '<p>Отправляется после того, как сохранены назначения группы</p>
<h4>Параметры></h4>
<ul>
<li>\'group\' - Ссылка на объект группы.</li>
<li>\'users\' - Массив ссылок на объекты пользователей группы.</li>
';
$lang['admin']['event_help_editgrouppre'] = '<p>Отправляется до того, как изменения в профиле группы  были сохранены.</p>
<h4>Параметры</h4>
<ul>
<li>\'group\' - Ссылка на объект группы.</li>
</ul>
';
$lang['admin']['event_help_editgrouppost'] = '<p>Отправляется после того, как изменения в профиле группы были сохранены.</p>
<h4>Параметры</h4>
<ul>
<li>\'group\' - Ссылка на объект группы.</li>
</ul>
';
$lang['admin']['event_help_deletegrouppre'] = '<p>Отправляется до того, как группа была удалена из системы.</p>
<h4>Параметры</h4>
<ul>
<li>\'group\' - Ссылка на объект группы.</li>
</ul>
';
$lang['admin']['event_help_deletegrouppost'] = '<p>Отправляется после того, как группа была удалена из системы.</p>
<h4>Параметры</h4>
<ul>
<li>\'group\' - Ссылка на объект группы.</li>
</ul>
';
$lang['admin']['event_help_addstylesheetpre'] = '<p>Отправляется до того, как создана новая таблица стилей.</p>
<h4>Параметры</h4>
<ul>
<li>\'stylesheet\' - Ссылка на объект таблицы стилей.</li>
</ul>
';
$lang['admin']['event_help_addstylesheetpost'] = '<p>Отправляется после того, как создана новая таблица стилей.</p>
<h4>Параметры</h4>
<ul>
<li>\'stylesheet\' - Ссылка на объект таблицы стилей.</li>
</ul>
';
$lang['admin']['event_help_editstylesheetpre'] = '<p>Отправляется до того, как изменения в профиле таблицы стилей были сохранены.</p>
<h4>Параметры</h4>
<ul>
<li>\'stylesheet\' - Ссылка на объект таблицы стилей.</li>
</ul>
';
$lang['admin']['event_help_editstylesheetpost'] = '<p>Отправляется после того, как изменения в профиле таблицы стилей были сохранены.</p>
<h4>Параметры</h4>
<ul>
<li>\'stylesheet\' - Ссылка на объект таблицы стилей.</li>
</ul>
';
$lang['admin']['event_help_deletestylesheetpre'] = '<p>Отправляется до того, как таблица стилей была удалена из системы.</p>
<h4>Параметры</h4>
<ul>
<li>\'stylesheet\' - Ссылка на объект таблицы стилей.</li>
</ul>
';
$lang['admin']['event_help_deletestylesheetpost'] = '<p>Отправляется после того, как таблица стилей была удалена из системы.</p>
<h4>параметры</h4>
<ul>
<li>\'stylesheet\' - Ссылка на объект таблицы стилей.</li>
</ul>
';
$lang['admin']['event_help_addtemplatepre'] = '<p>Отправляется до того, как был создан новый шаблон.</p>
<h4>Параметры</h4>
<ul>
<li>\'template\' - Ссылка на объект шаблона.</li>
</ul>
';
$lang['admin']['event_help_addtemplatepost'] = '<p>Отправляется после того, как был создан новый шаблон.</p>
<h4>Параметры</h4>
<ul>
<li>\'template\' - Ссылка на объект шаблона.</li>
</ul>
';
$lang['admin']['event_help_edittemplatepre'] = '<p>Отправляется до того, как изменения в  профиле шаблона были сохранены.</p>
<h4>Параметры</h4>
<ul>
<li>\'template\' - Ссылка на объект шаблона.</li>
</ul>
';
$lang['admin']['event_help_edittemplatepost'] = '<p>Отправляется после того, как изменения в профиле шаблона были сохранены.</p>
<h4>Параметры</h4>
<ul>
<li>\'template\' - Ссылка на объект шаблона.</li>
</ul>
';
$lang['admin']['event_help_deletetemplatepre'] = '<p>Отправляется до того, как шаблон был удален из системы.</p>
<h4>Параметры</h4>
<ul>
<li>\'template\' - Ссылка на объект шаблона.</li>
</ul>
';
$lang['admin']['event_help_deletetemplatepost'] = '<p>Отправляется после того, как шаблон был удален из системы.</p>
<h4>Параметры</h4>
<ul>
<li>\'template\' - Ссылка на объект шаблона.</li>
</ul>
';
$lang['admin']['event_help_templateprecompile'] = '<p>Отправляется до того, как шаблон был отослан smarty для обработки.</p>
<h4>Параметры</h4>
<ul>
<li>\'template\' - Ссылка на текст шаблона.</li>
</ul>
';
$lang['admin']['event_help_templatepostcompile'] = '<p>Отправляется после того, как шаблон был отослан smarty для обработки.</p>
<h4>Параметры</h4>
<ul>
<li>\'template\' - Ссылка на текст шаблона.</li>
</ul>
';
$lang['admin']['event_help_addglobalcontentpre'] = '<p>Отправляется до того, как был создан новый глобальный блок содержания.</p>
<h4>Параметры</h4>
<ul>
<li>\'global_content\' - Ссылка на объект блока контента.</li>
</ul>
';
$lang['admin']['event_help_addglobalcontentpost'] = '<p>Отправляется после того, как был создан новый глобальный блок содержания.</p>
<h4>Параметры</h4>
<ul>
<li>\'global_content\' - Ссылка на объект блока контента.</li>
</ul>
';
$lang['admin']['event_help_editglobalcontentpre'] = '<p>Отправляется до того, как изменения в глобальном блоке содержания были сохранены.</p>
<h4>Параметры</h4>
<ul>
<li>\'global_content\' - Ссылка на объект блока контента.</li>
</ul>
';
$lang['admin']['event_help_editglobalcontentpost'] = '<p>Отправляется после того, как изменения в глобальном блоке содержания были сохранены.</p>
<h4>Параметры</h4>
<ul>
<li>\'global_content\' - Ссылка на объект блока контента.</li>
</ul>
';
$lang['admin']['event_help_deleteglobalcontentpre'] = '<p>Отправляется до того, как глобальный блок содержания был удален из системы.</p>
<h4>Параметры</h4>
<ul>
<li>\'global_content\' - Ссылка на объект блока контента.</li>
</ul>
';
$lang['admin']['event_help_deleteglobalcontentpost'] = '<p>Отправляется после того, как глобальный блок содержания был удален из системы.</p>
<h4>Параметры</h4>
<ul>
<li>\'global_content\' - Ссылка на объект блока контента.</li>
</ul>
';
$lang['admin']['event_help_globalcontentprecompile'] = '<p>Отправляется до того, как глобальный блок содержания был отослан smarty для обработки.</p>
<h4>Parameters</h4>
<ul>
<li>\'global_content\' - Ссылка на текст блока контента.</li>
</ul>
';
$lang['admin']['event_help_globalcontentpostcompile'] = '<p>Отправляется после того, как глобальный блок содержания был обработан smarty.</p>
<h4>Параметры</h4>
<ul>
<li>\'global_content\' - Ссылка на текст блока контента.</li>
</ul>
';
$lang['admin']['event_help_contenteditpre'] = '<p>Отправляется до того, как изменения содержания были сохранены.</p>
<h4>Параметры</h4>
<ul>
<li>\'global_content\' - Ссылка на объект контента.</li>
</ul>
';
$lang['admin']['event_help_contenteditpost'] = '<p>Отправляется до того, как изменения содержания были сохранены.</p>
<h4>Параметры</h4>
<ul>
<li>\'content\' - Ссылка на объект контента.</li>
</ul>
';
$lang['admin']['event_help_contentdeletepre'] = '<p>Отправляется до того, как содержание было удалено из системы.</p>
<h4>Параметры</h4>
<ul>
<li>\'content\' - Ссылка на объект контента.</li>
</ul>
';
$lang['admin']['event_help_contentdeletepost'] = '<p>Отправляется после того, как содержание было удалено из системы.</p>
<h4>Параметры</h4>
<ul>
<li>\'content\' - Ссылка на объект контента.</li>
</ul>
';
$lang['admin']['event_help_contentstylesheet'] = '<p>Отправляется до того, как таблица стилей была отослана браузеру.</p>
<h4>Параметры</h4>
<ul>
<li>\'content\' - Ссылка на текст таблицы стилей.</li>
</ul>
';
$lang['admin']['event_help_contentprecompile'] = '<p>Отправляется до того, как содержание было отослано smarty для обработки.</p>
<h4>Параметры</h4>
<ul>
<li>\'content\' - Ссылка на текст контента.</li>
</ul>
';
$lang['admin']['event_help_contentpostcompile'] = '<p>Отправляется после того, как содержание было обработано smarty.</p>
<h4>Параметры</h4>
<ul>
<li>\'content\' - Ссылка на текст контента.</li>
</ul>
';
$lang['admin']['event_help_contentpostrender'] = '<p>Отправляется до того, как объединённый html был отправлен браузеру.</p>
<h4>Параметры</h4>
<ul>
<li>\'content\' - Ссылка на текст html.</li>
</ul>
';
$lang['admin']['event_help_smartyprecompile'] = '<p>Отправляется до того, как какое- либо содержание, предназначенное smarty было отослано для обработки.</p>
<h4>Параметры</h4>
<ul>
<li>\'content\' - Ссылка на текст.</li>
</ul>
';
$lang['admin']['event_help_smartypostcompile'] = '<p>Отправляется до того, как какое- либо содержание, предназначенное smarty было обработано.</p>
<h4>Параметры</h4>
<ul>
<li>\'content\' - Ссылка на текст.</li>
</ul>
';
$lang['admin']['filterbymodule'] = 'Фильтровать по модулю';
$lang['admin']['showall'] = 'Показать все';
$lang['admin']['core'] = 'Ядро';
$lang['admin']['defaultpagecontent'] = 'Контент страницы по умолчанию';
$lang['admin']['file_url'] = 'Ссылка на файл (вместо URL)';
$lang['admin']['no_file_url'] = 'Пусто (используйте URL выше)';
$lang['admin']['defaultparentpage'] = 'Страница-родитель по-умолчанию';
$lang['admin']['error_udt_name_whitespace'] = 'Ошибка: Определённые пользователем теги не могут содержать пробелов в имени тега.';
$lang['admin']['warning_safe_mode'] = '<strong><em>ПРЕДУПРЕЖДЕНИЕ:</em></strong> Включен безопасный режим PHP.  Это может вызвать трудности с загрузкой файлов через интерфейс браузера, а также модулей и изображений. Для выключения безопасного режима, обратитесь к администратору вашего сайта.';
$lang['admin']['test'] = 'Проверка';
$lang['admin']['results'] = 'Результаты';
$lang['admin']['untested'] = 'Не проверено';
$lang['admin']['unknown'] = 'Неизвестно';
$lang['admin']['download'] = 'Загрузка';
$lang['admin']['frontendwysiwygtouse'] = 'Визуальный редактор для использования на сайте';
$lang['admin']['all_groups'] = 'Все группы';
$lang['admin']['error_type'] = 'Ошибочный тип';
$lang['admin']['contenttype_errorpage'] = 'Ошибочная страница';
$lang['admin']['errorpagealreadyinuse'] = 'Код ошибки уже используется';
$lang['admin']['404description'] = 'Страница не найдена';
$lang['admin']['usernotfound'] = 'Пользователь не найден';
$lang['admin']['passwordchange'] = 'Пожалуйста создайте новый пароль';
$lang['admin']['recoveryemailsent'] = 'Письмо было отправлено по заданному адресу.  Для дальнейших инструкций, проверьте пожалуйста  папку входящих сообщений .';
$lang['admin']['errorsendingemail'] = 'При отправке сообщения возникла ошибка.  Свяжитесь с вашим администратором. ';
$lang['admin']['passwordchangedlogin'] = 'Пароль был изменен.  Пожалуйста авторизуйтесь, используя новые данные доступа.';
$lang['admin']['nopasswordforrecovery'] = 'Адрес электронной почты не установлен для этого пользователя. Восстановление пароля не возможно. Пожалуйста свяжитесь со своим администратором.';
$lang['admin']['lostpw'] = 'Забыли ваш пароль?';
$lang['admin']['lostpwemailsubject'] = '[%s] пароль восстановлен';
$lang['admin']['lostpwemail'] = 'Вы получили это письмо, потому что кто-то обратился с просьбой, изменить (%s) пароль, связанный с учетной записью пользователя (%s). Если Вы хотите бы сбросить пароль для этой учетной записи, просто нажмите на ссылку ниже или вставьте её в область url на Вашем любимом браузере: %s

Если Вы считаете это действие неправильным или запрос сделан по ошибке, просто проигнорируйте это письмо, и ничто не изменится.';
$lang['admin']['qca'] = '1249817335-93871878-73660311';
$lang['admin']['utma'] = '156861353.3841328768188791000.1250008322.1255954476.1255960921.22';
$lang['admin']['utmz'] = '156861353.1255954476.21.24.utmcsr=forum.cmsmadesimple.org|utmccn=(referral)|utmcmd=referral|utmcct=/';
$lang['admin']['utmc'] = '156861353';
$lang['admin']['utmb'] = '156861353';
?>