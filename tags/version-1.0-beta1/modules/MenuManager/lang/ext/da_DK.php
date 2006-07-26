<?php
$lang['addtemplate'] = 'Tilføj skabelon';
$lang['areyousure'] = 'Er du sikker på dette skal slettes?';
$lang['changelog'] = '	<ul>
	<li>
	<p>Version: 1.0</p>
	<p>Første udgave.</p>
	</li> 
	</ul> ';
$lang['dbtemplates'] = 'Database skabeloner';
$lang['description'] = 'Håndtér menu skabeloner så menu\'er kan vises på enhver tænkeligt måde.';
$lang['deletetemplate'] = 'Slet skabelon';
$lang['edittemplate'] = 'Redigér skabelon';
$lang['filename'] = 'Filnavn';
$lang['filetemplates'] = 'Fil skabelon';
$lang['help_collapse'] = 'Slå til (sæt til 1) for at lade menu\'en skjule punkter der ikke er relaterede til den valgte side.';
$lang['help_items'] = 'Brug dette punkt til at vælge en liste af sider som denne menu skal vise. Værdien skal være en list af side-alias\'er adskilt af kommaer.';
$lang['help_number_of_levels'] = 'Denne indstilling vil gøre at menu\'en kun viser et bestemt antal niveau\'er.';
$lang['help_show_root_siblings'] = 'Denne indstilling er nyttig hvis start_element eller start_page benyttes. Der kan angives at "søskende", dvs. punkter på samme niveau, skal vises ved sidenaf det valgte start_element/start_page.';
$lang['help_start_level'] = 'Denne indstilling gør at menu\'et kun viser punkter startende fra det angivne niveau. Et hurtigt eksempel kunne være hvis du havde en menu på siden med number_of_levels=\'1\'. Og som en anden menu havde du start_leve=\'2\'. Så ville din anden menu vise menupunkter baseret på hvad du havde valgt i første menu.';
$lang['help_start_element'] = 'Lad menu\'en starte ved menu-punktet start_element, og vis kun dette og det\'s underpunkter. skal være en gyldig hierarkisk position (f.eks. 5.1.2).';
$lang['help_start_page'] = 'Lad menu\'en starte ved den angivne menu-punkt start_page og vis kun dette og dets underpunkter. SKal være et gyldgt side-alias.';
$lang['help_template'] = 'Den skabelon der skal bruge til visning af menuen. Skabeloner hentes fra database-skabeloner med mindre skabelon-navnet ender på ".tpl", hvor de i stedet hentes fra en fil i underfolderen "templates" der ligger i MenuManager\'eren folder.';
$lang['help'] = '	<h3>What does this do?</h3>
	<p>Menu Manager is a module for abstracting menus into a system that\'s easily usable and customizable.  It abstracts the display portion of menus into smarty templates that can be easily modified to suit the user\'s needs. That is, the menu manager itself is just an engine that feeds the template. By customizing templates, or make your own ones, you can create virtually any menu you can think of.</p>
	<h3>How do I use it?</h3>
	<p>Just insert the tag into your template/page like: <code>{cms_module module=\'menumanager\'}</code>.  The parameters that it can accept are listed below.</p>
	<h3>Why do I care about templates?</h3>
	<p>Menu Manager uses templates for display logic.  It comes with three default templates called bulletmenu.tpl, cssmenu.tpl and ellnav.tpl. They all basically create a simple unordered list of pages, using different classes and ID\'s for styling with CSS.  They are similar to the menu systems included in previous versions: bulletmenu, CSSMenu and EllNav.</p>
	<p>Note that you style the look of the menus with CSS. Stylesheets are not included with Menu Manager, but must be attached to the page template separately. For the cssmenu.tpl template to work in IE you must also insert a link to the JavaScript in the head section of the page template, which is necessary for the hover effect to work in IE.</p>
	<p>If you would like to make a specialized version of a template, you can easily import into the database and then edit it directly inside the CMSMS admin.  To do this:
		<ol>
			<li>Click on the Menu Manager admin.</li>
			<li>Click on the File Templates tab, and click the Import Template to Database button next to bulletmenu.tpl.</li>
			<li>Give the template copy a name.  We\'ll call it "Test Template".</li>
			<li>You should now see the "Test Template" in your list of Database Templates.</li>
		</ol>
	</p>
	<p>Now you can easily modify the template to your needs for this site.  Put in classes, id\'s and other tags so that the formatting is exactly what you want.  Now, you can insert it into your site with {cms_module module=\'menumanager\' template=\'Test Template\'}. Note that the .tpl extension must be included if a file template is used.</p>
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
$lang['importtemplate'] = 'Importér skabelon til databasen';
$lang['menumanager'] = 'Menu Manager';
$lang['newtemplate'] = 'Nyt skabelon navn';
$lang['nocontent'] = 'Intet indhold angivet';
$lang['notemplatefiles'] = 'Ingen fil skabeloner i %s';
$lang['notemplatename'] = 'Intet skabelon navn angivet.';
$lang['templatecontent'] = 'Skabelon indhold';
$lang['templatenameexists'] = 'En skabelon med dette navn eksisterer allerede';
?>