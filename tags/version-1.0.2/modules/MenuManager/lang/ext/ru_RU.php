<?php
$lang['addtemplate'] = 'Добавить шаблон ';
$lang['areyousure'] = 'Вы уверены, что хотите удалить это?';
$lang['changelog'] = '	<ul>
	<li>1.1 -- Добавлена обработка целевого параметра, в основном для типа контента "ссылка"</li>
	<li>1.0 -- Исходный релиз </li>
	</ul> ';
$lang['dbtemplates'] = 'Шаблоны в базе данных';
$lang['description'] = 'Управление всеми мыслимыми способами показа меню.';
$lang['deletetemplate'] = 'Удалить шаблон';
$lang['edittemplate'] = 'Отредактировать шаблон';
$lang['filename'] = 'Имя файла';
$lang['filetemplates'] = 'Шаблоны файла';
$lang['help_collapse'] = 'Для того, чтобы поставить скрытые элементы меню вне зависимости от текущей страницы, выберите 1.';
$lang['help_items'] = 'Используйте этот пункт, чтобы выбрать список страниц, который должно отображать данное меню.  Значение должно быть списком псевдонимов страницы, отделенных с запятыми.
';
$lang['help_number_of_levels'] = 'Эта настройка позволит показывать только заданное число уровней вложенности.';
$lang['help_show_root_siblings'] = 'Эту опцию полезно использовать только, если используются start_element или start_page. Это отобразит элементы одного уровня по стороне отобранного start_page/element.';
$lang['help_start_level'] = 'Меню данной опции содержит только те элементы, которые заданы на определенном уровне. Вот простой пример: одно меню у вас находится на одноуровневой странице (number_ of_ levels=\'1\' ). Создавая второе меню, вам следует набрать start_level=\'2\'. Теперь наполнение второго меню будет зависеть от того, какие элементы отображаются в первом.';
$lang['help_start_element'] = 'Начинает показ меню с заданного start_element и показывает только этот элемент и дочерние элементы. В качестве параметра получает позицию в иерархиеской структуре (e.g. 5.1.2).';
$lang['help_start_page'] = ' Начинает показ меню с заданного start_element и показывает только этот элемент и дочерние элементы. Берет альтернативное имя страницы.';
$lang['help_template'] = 'Шаблон для использования и демонстрации меню. Шаблоны будут браться из базы данных шаблонов, если только  название шаблона не заканчивается .tpl, в данном случае он  будет браться из файла в каталоге шаблонов MenuManager  ';
$lang['help'] = '<h3>Каково назначение данного элемента?</h3>
	<p>Menu Manager является легким в использовании и настройке модулем, предназначенным для интегрирования различных меню в систему. Данный модуль выделяет отображаемую часть меню и преобразовывает ее в шаблоны smarty, которые пользователь может легко настроить по своему желанию. Таким образом, сам Menu Manager является просто движком, обеспечивающим работу шаблона. Модифицируя установленные, или создавая свои собственные шаблоны, вы сможете создать практически любое, какое вам только захочется меню.</p>
	<h3>Как мне использовать это?</h3>
	<p>Просто вставьте в свой шаблон или страницу этот тег: <code>{menu}</code>.  Список допустимых параметров приведен ниже.</p>
	<h3>Что мне за дело до шаблонов?</h3>
	<p>Menu Manager Менеждер меню хранит логику отображения в шаблонах Smarty. Изначально он имеет три шаблона: cssmenu.tpl, minimal_menu.tpl, simple_navigation.tpl. Данные шаблоны создают простой неупорядоченный список страниц, используя различные классы и идентификаторы для того, чтобы задействовать в данном процессе каскадные таблицы стилей</p>
	<p>Обратите внимание, что вы задаёте стили меню при помощи CSS. Таблицы стилей не поставляются с Menu Manager, и должны быть присоединены к шаблону страницы отдельно. Для шаблона cssmenu.tpl , чтобы он работал в IE вы должны  вставить ссылку на  JavaScript в секцию head. Он необходим для функционирования эффекта hover в IE.</p>  
	<p>Для создания специального шаблона следует занести обычный шаблон в базу данных, а затем отредактировать его с помощью CMSMS admin.  Порядок действий таков:
		<ol>
			<li>Щелкните мышью по кнопке "Menu Manager admin".</li>
			<li>Щелкните по вкладке "File Templates", а затем нажмите на соседнюю кнопку - "Import Template to Database" (шаблон simple_navigation.tpl).</li>
			<li>Дайте название копии шаблона. Назовем его "Test Template".</li>
			<li>Теперь вы можете увидеть шаблон"Test Template" в списке шаблонов, находящихся в вашей базе данных.</li>
		</ol>
	</p>
	<p>Теперь вы можете легко изменить шаблон по своему желанию. Вставьте в шаблон классы, идентификаторы и другие теги так, чтобы задать нужный формат. С помощью команды {menu template=\'Test Template\'} вы сможете вставить готовый шаблон в свой сайт. Помните о том, что если вы используете шаблон файла, следует добавить расширение .tpl.</p>
	<p>Ниже указаны параметры узлового объекта, используемого в шаблоне:
		<ul>
			<li>$node->id -- ID контента </li>
			<li>$node->url -- URL контента</li>
			<li>$node->accesskey -- Код доступа, если задано</li>
			<li>$node->tabindex -- Индекс ярлыка, если задано</li>
			<li>$node->titleattribute -- Описание, или заголовок атрибута (наименование), если задано</li>
			<li>$node->hierarchy -- Позиция иерархии, (e.g. 1.3.3)</li>
			<li>$node->depth -- Глубина (уровень) данного узла в текущем меню</li>
			<li>$node->prevdepth -- Глубина (уровень) данного узла, который стоит прямо перед текущим</li>
			<li>$node->haschildren --  Возвращает true  если у данного узла есть дочерние узлы для отображения. </li>
			<li>$node->menutext -- Текст меню</li>
			<li>$node->alias -- Алиасы страницы</li>
			<li>$node->target -- Флажок для ссылки. Будет пустым, если контент не установит его.</li>
			<li>$node->index -- Номер этого узла в едином меню.</li>
			<li>$node->parent -- True, если данный узел является родителем выбранной вданной момент страницы</li>
		</ul>
	</p>';
$lang['importtemplate'] = 'Импортировать шаблон в базу данных ';
$lang['menumanager'] = 'Менеджер меню';
$lang['newtemplate'] = 'Новое имя шаблона';
$lang['nocontent'] = 'Не задан контент';
$lang['notemplatefiles'] = 'Нет файловых шаблонов в %s';
$lang['notemplatename'] = 'Не задано имя шаблона.';
$lang['templatecontent'] = 'Содержание шаблона';
$lang['templatenameexists'] = 'Шаблон с таким именем уже существует';
?>