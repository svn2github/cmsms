<?php
$lang['addtemplate'] = 'A&ntilde;adir Plantilla';
$lang['areyousure'] = '&iquest;Seguro que quiere borrar esto?';
$lang['changelog'] = '	<ul>
	<li>
	<p>Versi&oacute;n: 1.0</p>
	<p>Initial Release.</p>
	</li> 
	</ul> ';
$lang['dbtemplates'] = 'Plantillas de la Base de Datos';
$lang['description'] = 'Gestiona plantillas de menu que mostrar&aacute;n menus de cualquier clase.';
$lang['deletetemplate'] = 'Borrar Plantilla';
$lang['edittemplate'] = 'Editar Plantilla';
$lang['filename'] = 'Nombre de Archivo';
$lang['filetemplates'] = 'Plantillas de archivos';
$lang['help_collapse'] = 'Activarlo (poner a 1) to have the menu hide items not related to the current selected page.';
$lang['help_items'] = 'Usa esto opci&oacute;n para seleccinar una lista de p&aacute;ginas a mostrar en este menu. El valor debe ser una lista de alias de p&aacute;ginas separadas con coma.';
$lang['help_number_of_levels'] = 'Esta opci&oacute;n permitir&aacute; al menu mostrar s&oacute;lo un cierto n&uacute;mero de niveles de despliegue.';
$lang['help_show_all'] = 'Esta opci&oacute;n mostrar&aacute; todos los nodos del menu, incluso si estan configurados para no mostrarse en el menu.';
$lang['help_show_root_siblings'] = 'Esta opci&oacute;n es v&aacute;lida s&oacute;lo si se usan start_element or start_page.  B&aacute;sicamente, mostrar&aacute; los submenus al lado de cada elemento start_page seleccionado.';
$lang['help_start_level'] = 'This option will have the menu only display items starting a the given level.  An easy example would be if you had one menu on the page with number_of_levels=&#039;1&#039;.  Then as a second menu, you have start_level=&#039;2&#039;.  Now, your second menu will show items based on what is selected in the first menu.';
$lang['help_start_element'] = 'Starts the menu displaying at the given start_element and showing that element and it&#039;s children only.  Takes a hierarchy position (e.g. 5.1.2).';
$lang['help_start_page'] = 'Starts the menu displaying at the given start_page and showing that element and it&#039;s children only.  Takes a page alias.';
$lang['help_template'] = 'La plantilla a usar para mostrar el menu.  Las plantillas se toman de la tabla de plantillas a menos que el nombre de la misma termine en .tpl, en cuyo caso se tomar&aacute; del directorio de plantillas del Gestor de Menus.';
$lang['help'] = '	<h3>What does this do?</h3>
	<p>Menu Manager is a module for abstracting menus into a system that&#039;s easily usable and customizable.  It abstracts the display portion of menus into smarty templates that can be easily modified to suit the user&#039;s needs. That is, the menu manager itself is just an engine that feeds the template. By customizing templates, or make your own ones, you can create virtually any menu you can think of.</p>
	<h3>How do I use it?</h3>
	<p>Just insert the tag into your template/page like: <code>{cms_module module=&#039;menumanager&#039;}</code>.  The parameters that it can accept are listed below.</p>
	<h3>Why do I care about templates?</h3>
	<p>Menu Manager uses templates for display logic.  It comes with three default templates called bulletmenu.tpl, cssmenu.tpl and ellnav.tpl. They all basically create a simple unordered list of pages, using different classes and ID&#039;s for styling with CSS.  They are similar to the menu systems included in previous versions: bulletmenu, CSSMenu and EllNav.</p>
	<p>Note that you style the look of the menus with CSS. Stylesheets are not included with Menu Manager, but must be attached to the page template separately. For the cssmenu.tpl template to work in IE you must also insert a link to the JavaScript in the head section of the page template, which is necessary for the hover effect to work in IE.</p>
	<p>If you would like to make a specialized version of a template, you can easily import into the database and then edit it directly inside the CMSMS admin.  To do this:
		<ol>
			<li>Click on the Menu Manager admin.</li>
			<li>Click on the File Templates tab, and click the Import Template to Database button next to bulletmenu.tpl.</li>
			<li>Give the template copy a name.  We&#039;ll call it &quot;Test Template&quot;.</li>
			<li>You should now see the &quot;Test Template&quot; in your list of Database Templates.</li>
		</ol>
	</p>
	<p>Now you can easily modify the template to your needs for this site.  Put in classes, id&#039;s and other tags so that the formatting is exactly what you want.  Now, you can insert it into your site with {cms_module module=&#039;menumanager&#039; template=&#039;Test Template&#039;}. Note that the .tpl extension must be included if a file template is used.</p>
	<p>The parameters for the $node object used in the template are as follows:
		<ul>
			<li>$node->id -- Content ID</li>
			<li>$node->url -- URL of the Content</li>
			<li>$node->accesskey -- Access Key, if defined</li>
			<li>$node->tabindex -- Tab Index, if defined</li>
			<li>$node->titleattribute -- Title Attribute (title), if defined</li>
			<li>$node->hierarchy -- Hierarchy position, (e.g. 1.3.3)</li>
			<li>$node->depth -- Depth (level) of this node in the current menu</li>
			<li>$node->prevdepth -- Depth (level) of the node that was right before this one</li>
			<li>$node->haschildren -- Returns true if this node has child nodes to be displayed</li>
			<li>$node->menutext -- Menu Text</li>
			<li>$node->index -- Count of this node in the whole menu</li>
			<li>$node->parent -- True if this node is a parent of the currently selected page</li>
		</ul>
	</p>';
$lang['importtemplate'] = 'Importar Plantilla a Base de Datos';
$lang['menumanager'] = 'Gestor de Menu';
$lang['newtemplate'] = 'Nombre de Nueva Plantilla';
$lang['nocontent'] = 'Sin Contenido';
$lang['notemplatefiles'] = 'Sin plantillas en %s';
$lang['notemplatename'] = 'No has dado un nombre a la plantilla';
$lang['templatecontent'] = 'Contenido de la Plantilla';
$lang['templatenameexists'] = 'Ya existe una plantilla con este nombre';
$lang['utma'] = '156861353.619180346.1171815579.1171815579.1172697500.2';
$lang['utmb'] = '156861353';
$lang['utmz'] = '156861353.1171815579.1.1.utmccn=(referral)|utmcsr=dev.cmsmadesimple.org|utmcct=/frs/shownotes.php|utmcmd=referral';
?>