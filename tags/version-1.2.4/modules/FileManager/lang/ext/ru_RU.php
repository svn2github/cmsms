<?php
$lang['friendlyname'] = 'Менеджер файлов';
$lang['permission'] = 'Использование модуля File Manager ';
$lang['permissionadvanced'] = 'передовое использование модуля File Manager ';
$lang['moddescription'] = 'Обработка файлов и каталогов в upload-filesection cmsms';
$lang['installed'] = 'FileManager версии %s установлен';
$lang['postinstall'] = 'Модуль FileManager установлен';
$lang['uninstalled'] = 'Модуль FileManager удален';
$lang['really_uninstall'] = 'Вы уверены, что хотите удалить FileManager ?';
$lang['upgraded'] = 'Модуль FileManager был обновлен до версии %s';
$lang['fileview'] = 'Просмотр файла';
$lang['settings'] = 'Установки';
$lang['filename'] = 'Имя файла';
$lang['fileinfo'] = 'Информация о файле';
$lang['filesize'] = 'Размер';
$lang['filedate'] = 'Дата';
$lang['actions'] = 'Действия';
$lang['delete'] = 'Удалить';
$lang['bytes'] = 'байты';
$lang['kb'] = 'Кб';
$lang['mb'] = 'Мб';
$lang['files'] = 'файлы';
$lang['bytesin'] = 'байтов в ';
$lang['file'] = 'файл';
$lang['fileno'] = 'Номер файла';
$lang['subdirs'] = 'подкаталоги';
$lang['subdir'] = 'подкаталог';
$lang['and'] = 'и';
$lang['confirmsingledelete'] = 'Вы уверены?';
$lang['confirmsingledirdelete'] = 'Вы уверны, что хотите удалить эту директорию?';
$lang['dirtreedeletesuccess'] = 'Документальный информационный поиск, включая содержание, была успешно удалена.';
$lang['dirtreedeletefail'] = 'An error occured when deleting this dir. Some of the contents may have been deleted, however.';
$lang['singlefiledeletesuccess'] = 'Файл был успешно удален';
$lang['filedeletesuccess'] = 'был успешно удален';
$lang['singlefiledeletefail'] = 'Произошла ошибка во время попытки удалить файл';
$lang['filedeletefail'] = 'не был удален ввиду ошибки';
$lang['singledirdeletesuccess'] = 'Директория была успешно удалена';
$lang['singledirdeletefail'] = 'Произошла ошибка во время попытки удалить директорию (вероятно, она пустая?)';
$lang['deleteselected'] = 'Удалить выбранные файлы';
$lang['confirmselected'] = 'Вы уверены?';
$lang['go'] = 'Пуск...';
$lang['dirnotemptyconfirm'] = 'Эта папка не является пустой. Вы действительно хотите удалить ее вместе со всем содержимым, включая ?';
$lang['dirtreedeletecancelled'] = 'Удаление документального информационного поиска отменено';
$lang['imsure'] = 'Я уверен';
$lang['cancel'] = 'Отмена';
$lang['uploadnewfile'] = 'Закачать новый(е) файл(ы):';
$lang['unpackafterupload'] = 'Попробуйте распаковать файл после закачки (только tgz и большенство zip-файлов)?';
$lang['uploadsuccess'] = 'был успешно закачан';
$lang['uploadfail'] = 'failed to upload successfully';
$lang['unpacksuccess'] = 'был успешно распакован';
$lang['unpackfail'] = ' failed with this error: ';
$lang['packfileopenfail'] = 'Невозможно открыть упаковынный файл для распаковки (вероятно, неподдерживаемый формат?)';
$lang['packfilewritefail'] = 'Could not open the file &s for writing';
$lang['newdirname'] = 'Сознать новую директорию:';
$lang['newdirsuccess'] = 'Директория была успешно создана';
$lang['newdirfail'] = 'Произошла ошибка во время попытки создания директории';
$lang['filedateformat'] = 'm/d/Y Н:m:s';
$lang['iconsize'] = 'Размер иконки';
$lang['smallicons'] = 'Маленькая иконка';
$lang['largeicons'] = 'Большая иконка';
$lang['uploadfilesto'] = 'Закачать файлы в:';
$lang['uploadview'] = 'Закачать файлы';
$lang['uploadboxes'] = 'Number of uploadboxes';
$lang['nothinguploaded'] = 'Ничего не было закачано';
$lang['unsupportedarchive'] = 'Unsupported archive format';
$lang['uploadmethod'] = 'Закачать метод';
$lang['uploaderstandard'] = 'Standard html input-method (allows unpacking)';
$lang['uploaderdom'] = 'Fancy DOM-controlled form';
$lang['uploaderpostlet'] = 'Postlet, Java-based, allows multiple file-selection';
$lang['enableadvanced'] = 'Активировать усовершенствнованный режим ? (если вы имеете резрешение)';
$lang['showhiddenfiles'] = 'Показать скрытые файлы';
$lang['settingsconfirmsingledelete'] = 'Подтвердить удаление единственного файла?';
$lang['settingssaved'] = 'Устаноки сохранены';
$lang['help'] = '		<h3>What does this do?</h3>
		<p>This module provides file management functions, eventually and hopefully replacing the rather aged builtin file management</p>
		<h3>How do I use it?</h3>
		<p>Select it from the content-menu from in the admin. While the old filemanager is still in there you should select the one furthest down in the menu.</p>';
$lang['changelog'] = '		<ul>
		  <li><b>Version 0.1.4</b></li>
		  <li>Fixed cancelling recursive deletion of dirs</li>

		  <li><b>Version 0.1.3</b></li>
		  <li>Fixed cancelling recursive deletion of dirs</li>
		  <li>Added Java-applet multifile upload method</li>
		  <li>Implemented deletion of multiple files</li>
		  <li>Fixed select all checkbox</li>

		  <li><b>Version 0.1.2</b></li>
		  <li>Added recursive deletion of dirs</li>

		  <li><b>Version 0.1.1</b></li>
		  <li>Added support for multiple uploads, and support for unpacking tar.gz-files</li>
		  <li>Rewrote to use more of the module-api-functions</li>
		  <li><b>Version 0.1.0</b></li>
		  <li>First version which work properly and equals the builtin filemanager which is intends to render obsolete</li>
		</ul>';
?>