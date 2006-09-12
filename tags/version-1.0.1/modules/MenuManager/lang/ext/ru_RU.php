<?php
$lang['addtemplate'] = 'Добавить шаблон ';
$lang['areyousure'] = 'Вы уверены, что хотите удалить это?';
$lang['changelog'] = '	<ul>
	<li>1.1 -- Added handling of target parameter, mainly for the Link content type</li>
	<li>1.0 -- Initial Release</li>
	</ul> ';
$lang['dbtemplates'] = 'Шаблоны в базе данных';
$lang['description'] = 'Управление всеми мыслимыми способами показа меню.';
$lang['deletetemplate'] = 'Удалить шаблон';
$lang['edittemplate'] = 'Отредактировать шаблон';
$lang['filename'] = 'Имя файла';
$lang['filetemplates'] = 'Шаблоны файла';
$lang['help_collapse'] = 'Turn on (set to 1) to have the menu hide items not related to the current selected page.';
$lang['help_items'] = 'Используйте этот пункт, чтобы выбрать список сраниц, который должно отображать данное меню.  Значение должно быть списком псевдонимов страницы, отделенных с запятыми.
';
$lang['help_number_of_levels'] = 'Эта настройка позволит показывать только заданное число уровней вложенности.';
$lang['help_show_root_siblings'] = 'Эту опцию полезно использовать только, если используются start_element или start_page. Это отобразит элементы одного уровня по стороне отобранного start_page/element.';
$lang['help_start_level'] = 'Эта опция заставит меню показыавть только элементы, запускающие данный уровень. Простым примером являетсяследующая ситуация: 
  you had one menu on the page with number_of_levels=\'1\'.  Then as a second menu, you have start_level=\'2\'.  Now, your second menu will show items based on what is selected in the first menu.';
$lang['help_start_element'] = 'Начинает показ меню с заданного start_element и показывает только этот элемент и дочерние элементы. В качестве параметра получает позицию в иерархиеской структуре (e.g. 5.1.2).';
$lang['help_start_page'] = ' Начинает показ меню с заданного start_element и показывает только этот элемент и дочерние элементы. Берет альтернативное имя страницы.';
$lang['help_template'] = 'Шаблон для использования и демонстрации меню. Шаблоны будут браться из базы данных шаблонов, если только  название шаблона не заканчивается .tpl, в данном случае он  будет браться из файла в каталоге шаблонов MenuManager  ';
$lang['help'] = '<h3>Что это делает?</h3>
	<p>Menu Manager is a module for abstracting menus into a system that\'s easily usable and customizable.  It abstracts the display portion of menus into smarty templates that can be easily modified to suit the user\'s needs. That is, the menu manager itself is just an engine that feeds the template. By customizing templates, or make your own ones, you can create virtually any menu you can think of.</p>
	<h3>How do I use it?</h3>
	<p>Just insert the tag into your template/page like: <code>{menu}</code>.  The parameters that it can accept are listed below.</p>
	<h3>Why do I care about templates?</h3>
	<p>Menu Manager uses templates for display logic.  It comes with three default templates called cssmenu.tpl, minimal_menu.tpl and simple_navigation.tpl. They all basically create a simple unordered list of pages, using different classes and ID\'s for styling with CSS.</p>
	<p>Обратите внимание, что вы задаёте стили меню при помощи CSS. Таблицы стилей не поставляются с Menu Manager, и должны быть присоединены к шаблону страницы отдельно. Для шаблона cssmenu.tpl , чтобы он работал в IE вы должны  вставить ссылку на  JavaScript в секцию head. Он необходим для функционирования эффекта hover в IE Note that you style the look of the menus with CSS. Stylesheets are not included with Menu Manager, but must be attached to the page template separately. For the cssmenu.tpl template to work in IE you must also insert a link to the JavaScript in the head section of the page template, which is necessary for the hover effect to work in IE.</p>
	<p>If you would like to make a specialized version of a template, you can easily import into the database and then edit it directly inside the CMSMS admin.  To do this:
		<ol>
			<li>Click on the Menu Manager admin.</li>
			<li>Click on the File Templates tab, and click the Import Template to Database button next to i.e. simple_navigation.tpl.</li>
			<li>Give the template copy a name.  We\'ll call it "Test Template".</li>
			<li>You should now see the "Test Template" in your list of Database Templates.</li>
		</ol>
	</p>
	<p>Now you can easily modify the template to your needs for this site.  Put in classes, id\'s and other tags so that the formatting is exactly what you want.  Now, you can insert it into your site with {menu template=\'Test Template\'}. Note that the .tpl extension must be included if a file template is used.</p>
	<p>The parameters for the $node object used in the template are as follows:
		<ul>
			<li>$node->id -- Content ID</li>
			<li>$node->url -- URL of the Content</li>
			<li>$node->accesskey -- Access Key, if defined</li>
			<li>$node->tabindex -- Tab Index, if defined</li>
			<li>$node->titleattribute -- Description or Title Attribute (title), if defined</li>
			<li>$node->hierarchy -- Hierarchy position, (e.g. 1.3.3)</li>
			<li>$node->depth -- Depth (level) of this node in the current menu</li>
			<li>$node->prevdepth -- Depth (level) of the node that was right before this one</li>
			<li>$node->haschildren -- Returns true if this node has child nodes to be displayed</li>
			<li>$node->menutext -- Menu Text</li>
			<li>$node->alias -- Page alias</li>
			<li>$node->target -- Target for the link.  Will be empty if content doesn\'t set it.</li>
			<li>$node->index -- Count of this node in the whole menu</li>
			<li>$node->parent -- True if this node is a parent of the currently selected page</li>
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