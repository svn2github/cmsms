<?php
$lang['help_loadprops'] = 'Use this parameter when using advanced properties in your menu manager template.  This parameeter will force the loading of all content properties for each node (such as extra1, image, thumbnail, etc).  and will dramatically increase the number of queries required to build a menu, and increase memory requirements, but will allow for much more advanced menus';
$lang['readonly'] = 'read only';
$lang['error_templatename'] = 'You cannot specify a template name ending with .tpl';
$lang['this_is_default'] = 'Default menu template';
$lang['set_as_default'] = 'Set as default menu template';
$lang['default'] = 'Default';
$lang['templates'] = 'Templates';
$lang['addtemplate'] = 'Pridėti &scaron;abloną';
$lang['areyousure'] = 'Ar jūs tikrai norite i&scaron;trinti tai?';
$lang['changelog'] = '	<ul>
	<li>1.1 -- Added handling of target parameter, mainly for the Link content type</li>
	<li>1.0 -- Initial Release</li>
	</ul> ';
$lang['dbtemplates'] = 'Duombazės &scaron;ablonai';
$lang['description'] = 'Tvarkyti meniu &scaron;ablonus, kad galima būtų atvaizduoti meniu kaip tik norite.';
$lang['deletetemplate'] = 'Pa&scaron;alinti &scaron;abloną';
$lang['edittemplate'] = 'Redaguoti &scaron;abloną';
$lang['filename'] = 'Bylos pavadinimas';
$lang['filetemplates'] = '&Scaron;ablonai bylose';
$lang['help_includeprefix'] = 'Include only those items who&#039;s page alias matches one of the specified (comma separated) prefixes.  This parameter cannot be combined with the excludeprefix parameter.';
$lang['help_excludeprefix'] = 'Exclude all items (and their children) who&#039;s page alias matches one of the specified (comma separated) prefixes.  This parameter must not be used in conjunction with the includeprefix parameter.';
$lang['help_collapse'] = 'Turn on (set to 1) to have the menu hide items not related to the current selected page.';
$lang['help_items'] = 'Use this item to select a list of pages that this menu should display.  The value should be a list of page aliases separated with commas.';
$lang['help_number_of_levels'] = 'This setting will only allow the menu to only display a certain number of levels deep.';
$lang['help_show_all'] = 'This option will cause the menu to show all nodes even if they are set to not show in the menu. It will still not display inactive pages however.';
$lang['help_show_root_siblings'] = 'This option only becomes useful if start_element or start_page are used.  It basically will display the siblings along side of the selected start_page/element.';
$lang['help_start_level'] = 'This option will have the menu only display items starting a the given level.  An easy example would be if you had one menu on the page with number_of_levels=&#039;1&#039;.  Then as a second menu, you have start_level=&#039;2&#039;.  Now, your second menu will show items based on what is selected in the first menu.';
$lang['help_start_element'] = 'Starts the menu displaying at the given start_element and showing that element and it&#039;s children only.  Takes a hierarchy position (e.g. 5.1.2).';
$lang['help_start_page'] = 'Starts the menu displaying at the given start_page and showing that element and it&#039;s children only.  Takes a page alias.';
$lang['help_template'] = 'The template to use for displaying the menu.  Templates will come from the database templates unless the template name ends with .tpl, in which case it will come from a file in the MenuManager templates directory';
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
$lang['importtemplate'] = 'Importuoti &scaron;abloną į duombazę';
$lang['menumanager'] = 'Meniu tvarkymas';
$lang['newtemplate'] = 'Naujo &scaron;ablono pavadinimas';
$lang['nocontent'] = 'Neįvestas turinys';
$lang['notemplatefiles'] = '&Scaron;ablono bylų nėra %s';
$lang['notemplatename'] = 'Neįvestas &scaron;ablono pavadinimas';
$lang['templatecontent'] = '&Scaron;ablono turinys';
$lang['templatenameexists'] = '&Scaron;ablonas tokiu pavadinimu jau yra';
$lang['utmz'] = '156861353.1250297380.1752.42.utmccn=(referral)|utmcsr=helminsen.no|utmcct=/install/upgrade.php|utmcmd=referral';
$lang['utma'] = '156861353.179052623084110100.1210423577.1259353230.1259355475.2152';
$lang['qca'] = '1210971690-27308073-81952832';
$lang['utmc'] = '156861353';
$lang['utmb'] = '156861353.2.10.1259355475';
?>