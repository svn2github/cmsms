<?php
$lang['help_loadprops'] = 'Użyj tego parametru, gdy używasz zaawansowanych właściwości twojego szablonu Menadżera Menu. Ta opcja załadowanie wszystkich właściwości treści (np. extra1, image, thumbnail itd) dla każdego elemntu menu. Uwaga: ta opcja zwiększa bardzo drastycznie ilość zapytań wysyłanych do bazy oraz użycie pamięci serwera.';
$lang['readonly'] = 'tylko do odczytu';
$lang['error_templatename'] = 'Nie możesz używać ciągu .tpl na koncu nazwy szablonu';
$lang['this_is_default'] = 'Domyślny szablon menu';
$lang['set_as_default'] = 'Ustaw jako domyślny szablon menu';
$lang['default'] = 'Domyślny';
$lang['templates'] = 'Szablony';
$lang['addtemplate'] = 'Dodaj szablon';
$lang['areyousure'] = 'Czy na pewno chcesz to usunąć?';
$lang['changelog'] = '	<ul>
	<li>1.1 -- Added handling of target parameter, mainly for the Link content type</li>
	<li>1.0 -- Initial Release</li>
	</ul> ';
$lang['dbtemplates'] = 'Szablony w bazie danych';
$lang['description'] = 'Zarządzaj szablonami menu by wyświetlać nawigację serwisu jak sobie wymarzysz';
$lang['deletetemplate'] = 'Skasuj szablon';
$lang['edittemplate'] = 'Edytuj szablon';
$lang['filename'] = 'Nazwa pliku';
$lang['filetemplates'] = 'Szablony plikowe';
$lang['help_includeprefix'] = 'Include only those items who&#039;s page alias matches one of the specified (comma separated) prefixes.  This parameter cannot be combined with the excludeprefix parameter.';
$lang['help_excludeprefix'] = 'Exclude all items (and their children) who&#039;s page alias matches one of the specified (comma separated) prefixes.  This parameter must not be used in conjunction with the includeprefix parameter.';
$lang['help_collapse'] = 'Włącz (ustaw na 1), aby schować elementy menu niezwiązane z aktualnie wybraną stroną.';
$lang['help_items'] = 'Użyj tego elementu, aby wybrać listę stron, kt&oacute;re powinno wyświetlać menu. Wartością powinna byc lista alias&oacute;w stron rozdzielona przecinkami.';
$lang['help_number_of_levels'] = 'ta opcja pozwala wyświetlać tylko określoną liczbe poziom&oacute;w menu.';
$lang['help_show_all'] = 'Ta opcja powoduje, że w menu pojawiają się wszystkie strony, nawet te, kt&oacute;re mają wyłączony atrybut &#039;Pokaż w menu&#039;. Strony nieaktywne nie są pokazywane.';
$lang['help_show_root_siblings'] = 'Ta opcja jest przydatna tylko jeśli parametr start_element lub start_page jest użyty. Włączenie tej opcji spowoduje, że wyświetlony zostanie elemnt określony przez start_element lub start_page oraz wszystkie jego podrzędne elementy.';
$lang['help_start_level'] = 'This option will have the menu only display items starting a the given level.  An easy example would be if you had one menu on the page with number_of_levels=&#039;1&#039;.  Then as a second menu, you have start_level=&#039;2&#039;.  Now, your second menu will show items based on what is selected in the first menu.';
$lang['help_start_element'] = 'Starts the menu displaying at the given start_element and showing that element and it&#039;s children only.  Takes a hierarchy position (e.g. 5.1.2).';
$lang['help_start_page'] = 'Starts the menu displaying at the given start_page and showing that element and it&#039;s children only.  Takes a page alias.';
$lang['help_template'] = 'The template to use for displaying the menu.  Templates will come from the database templates unless the template name ends with .tpl, in which case it will come from a file in the MenuManager templates directory';
$lang['help'] = '<h3>What does this do?</h3>
	<p>Menu Manager is a module for abstracting menus into a system that&#039;s easily usable and customizable.  It abstracts the display portion of menus into smarty templates that can be easily modified to suit the user&#039;s needs. That is, the menu manager itself is just an engine that feeds the template. By customizing templates, or make your own ones, you can create virtually any menu you can think of.</p>
	<h3>How do I use it?</h3>
	<p>Just insert the tag into your template/page like: <code>{menu}</code>.  The parameters that it can accept are listed below.</p>
	<h3>Why do I care about templates?</h3>
	<p>Menu Manager uses templates for display logic.  It comes with three default templates called cssmenu.tpl, minimal_menu.tpl and simple_navigation.tpl. They all basically create a simple unordered list of pages, using different classes and ID&#039;s for styling with CSS.</p>
	<p>Note that you style the look of the menus with CSS. Stylesheets are not included with Menu Manager, but must be attached to the page template separately. For the cssmenu.tpl template to work in IE you must also insert a link to the JavaScript in the head section of the page template, which is necessary for the hover effect to work in IE.</p>
	<p>If you would like to make a specialized version of a template, you can easily import into the database and then edit it directly inside the CMSMS admin.  To do this:
		<ol>
			<li>Click on the Menu Manager admin.</li>
			<li>Click on the File Templates tab, and click the Import Template to Database button next to i.e. simple_navigation.tpl.</li>
			<li>Give the template copy a name.  We&#039;ll call it &quot;Test Template&quot;.</li>
			<li>You should now see the &quot;Test Template&quot; in your list of Database Templates.</li>
		</ol>
	</p>
	<p>Now you can easily modify the template to your needs for this site.  Put in classes, id&#039;s and other tags so that the formatting is exactly what you want.  Now, you can insert it into your site with {menu template=&#039;Test Template&#039;}. Note that the .tpl extension must be included if a file template is used.</p>
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
			<li>$node->raw_menutext -- Menu Text without having html entities converted</li>
			<li>$node->alias -- Page alias</li>
			<li>$node->extra1 -- Applicable only when the loadprops parameter is supplied on the menu tag, this field contains the value of the extra1 page property.</li>
			<li>$node->extra2 -- Applicable only when the loadprops parameter is supplied on the menu tag, this field contains the value of the extra2 page property.</li>
			<li>$node->extra3 -- Applicable only when the loadprops parameter is supplied on the menu tag, this field contains the value of the extra3 page property.</li>
			<li>$node->image -- Applicable only when the loadprops parameter is supplied on the menu tag, this field contains the value of the image page property (if non empty)</li>
			<li>$node->thumbnail -- Applicable only when the loadprops parameter is supplied on the menu tag, this field contains the value of the thumbnail page property (if non empty)</li>
			<li>$node->target -- Applicable only when the loadprops parameter is supplied in the menu tag, this field contains Target for the link.  Will be empty if content does not set it.</li>
			<li>$node->created -- Item creation date</li>
			<li>$node->modified -- Item modified date</li>
			<li>$node->index -- Count of this node in the whole menu</li>
			<li>$node->parent -- True if this node is a parent of the currently selected page</li>
		</ul>
	</p>';
$lang['importtemplate'] = 'Importuj szablon do bazy danych';
$lang['menumanager'] = 'Menadżer Menu';
$lang['newtemplate'] = 'Nazwa dla nowego szablonu';
$lang['nocontent'] = 'Nie podano treści';
$lang['notemplatefiles'] = 'Brak plik&oacute;w szablon&oacute;w w %s';
$lang['notemplatename'] = 'Nie podano nazwy szablonu';
$lang['templatecontent'] = 'Treść szablonu';
$lang['templatenameexists'] = 'Szablon o tej nazwie już istnieje';
$lang['utma'] = '156861353.1137862180506108200.1236028070.1250516113.1251278028.24';
$lang['utmz'] = '156861353.1251278028.24.7.utmccn=(referral)|utmcsr=forum.cmsmadesimple.org|utmcct=/index.php/topic,35327.0.html|utmcmd=referral';
$lang['qca'] = '1209029246-81444135-94725748';
$lang['utmb'] = '156861353.2.10.1251278028';
$lang['utmc'] = '156861353';
?>