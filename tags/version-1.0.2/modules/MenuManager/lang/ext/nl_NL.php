<?php
$lang['addtemplate'] = 'Sjabloon toevoegen';
$lang['areyousure'] = 'Weet je zeker dat je dit wilt verwijderen?';
$lang['changelog'] = '	<ul>
	<li>1.1 -- Added handling of target parameter, mainly for the Link content type</li>
	<li>1.0 -- Initial Release</li>
	</ul> ';
$lang['dbtemplates'] = 'Database sjablonen';
$lang['description'] = 'Beheer menu sjablonen om menus in alle denkbare vormen te vertoonen.';
$lang['deletetemplate'] = 'Verwijder sjabloon';
$lang['edittemplate'] = 'Sjabloon bewerken';
$lang['filename'] = 'Bestandsnaam';
$lang['filetemplates'] = 'Bestandssjablonen';
$lang['help_collapse'] = 'Zet aan (zet op 1) om het menu items onzichtbaar te laten maken die niet gerelateerd zijn aan deze pagina.';
$lang['help_items'] = 'Gebruik dit item om een lijst met pagina&#039;s te selecteren die dit menu moeten tonen.  De waarde moet een lijst van pagina aliassen zijn gescheiden door komma&rsquo;s.';
$lang['help_number_of_levels'] = 'Deze instelling zorgt er voor dat het menu tot een bepaald aantal niveaus gaat.';
$lang['help_show_root_siblings'] = 'Deze optie is alleen handig als start_element of start_page is gebruikt. Het laat siblings langs zij van de geselecteerde start_page/element zien.';
$lang['help_start_level'] = 'Deze optie zorgt er voor dat het menu alleen items laat zien vanaf een opgegeven start niveau.  Een makkelijk voorbeeld is dat je op een pagina een menu hebt met number_of_levels=&#039;1&#039;.  En een tweede menu waar start_level=&#039;2&#039;.  Nu laat je tweede menu items zien die gebaseerd zijn op wat er is geselecteerd in het eerste menu.';
$lang['help_start_element'] = 'Start een menu weergave op elk gegeven start_element en laat alleen dat element zien mijn zijn kinderen.  Neemt een hi&euml;rarchie positie (b.v. 5.1.2).';
$lang['help_start_page'] = 'Start een menu weergave op elk gegeven start_page element. En laat alleen dat element en zijn kinderen zien. Neemt een pagina alias.';
$lang['help_template'] = 'Het te gebruiken sjabloon voor de weergave van het menu. Sjablonen komen uit de database tenzij de sjabloon naam eindigt op .tpl. In dat geval komt het sjabloon uit een bestand uit de MenuManager sjabloon map.';
$lang['help'] = '	<h3>What does this do?</h3>
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
			<li>$node->alias -- Page alias</li>
			<li>$node->target -- Target for the link.  Will be empty if content doesn&#039;t set it.</li>
			<li>$node->index -- Count of this node in the whole menu</li>
			<li>$node->parent -- True if this node is a parent of the currently selected page</li>
		</ul>
	</p>';
$lang['importtemplate'] = 'Importeer sjabloon naar de Database';
$lang['menumanager'] = 'Menubeheer';
$lang['newtemplate'] = 'Sjabloon naam';
$lang['nocontent'] = 'Er is geen content ingevoerd';
$lang['notemplatefiles'] = 'Er zijn geen bestandssjablonen in %s';
$lang['notemplatename'] = 'Er is geen sjabloon naam opgegeven.';
$lang['templatecontent'] = 'Sjabloon content';
$lang['templatenameexists'] = 'Er bestaat al een sjabloon met deze naam';
$lang['utmc'] = '156861353';
$lang['utmz'] = '156861353.1154885832.1.1.utmccn=(direct)|utmcsr=(direct)|utmcmd=(none)';
$lang['utma'] = '156861353.16807.1154885832.1154885832.1155235013.2';
?>