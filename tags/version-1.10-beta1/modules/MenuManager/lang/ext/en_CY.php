<?php
$lang['set_cachable'] = 'Gosodwch y templed hwn yn (cachable)';
$lang['help_nocache'] = 'Analluogwch unrhyw caching o&#039;r alwad hon at y fwydlen. Mae&#039;r Paramedr hwn, os wedi ei osod i unrhyw werth cadarnhaol yn gwrthwneud unrhyw leoliadau yn y gwrthrych cynnwys a&#039;r templed fwydlen.';
$lang['cachable'] = 'Cachable';
$lang['help_childrenof'] = 'Bydd yr opsiwn hwn yn galluogi&#039;r ddewislen ond i arddangos eitemau sy&#039;n disgynyddion y dudalen (id) ddewis neu ffugenw (Alias). hy: <code> {childrenof menu = $page_alias} </ code> Ond yn dangos plant y dudalen gyfredol.';
$lang['usage'] = 'Defnydd';
$lang['help_loadprops'] = 'Defnyddiwch y paramedr hon os NAD ydych yn defnyddio eiddo uwch yn eich templed rheolwr bwydlen. Bydd hyn yn paramedr analluoga &#039;r llwytho o&#039;r holl eiddo cynnwys ar gyfer pob cainc (megis extra1, delwedd, llun, ac ati). Bydd hyn yn lleihau yn ddramatig nifer yr ymholiadau angenrheidiol i adeiladu fwydlen, ac yn cynyddu gofynion cof, ond bydd yn cael gwared ar y posibilrwydd ar gyfer bwydlenni llawer mwy datblygedig';
$lang['readonly'] = 'Ond yn darllenadwy';
$lang['error_templatename'] = 'Ni Gallwch nodi enw yn gorffen gyda thempled .tpl';
$lang['this_is_default'] = 'Templed ddewislen diofyn';
$lang['set_as_default'] = 'Gosod fel templed ddewislen diofyn';
$lang['default'] = 'Diofyn';
$lang['templates'] = 'Templedi';
$lang['addtemplate'] = 'Ychwanegu Templed';
$lang['areyousure'] = 'A ydych yn sicr eich bod am ddileu hyn?';
$lang['changelog'] = '	<ul>
<li>1.7 - Adds the possibility to cache menumanager output to a cache file, this will remove a bunch of queries from mostly static sites. Fixes to childrenof parameter.</li>
<li>1.6.3 - Adds usage column.</li>
<li>1.6.2 - Can no longer delete default template, fix problem with default database templates.</li>
<li>1.6.1 - Add created and modified entries on each node.</li>
<li>1.6 - Re-design admin interface, allow setting the default menu manager template.</li>
        <li>1.5.4 - Minor bugfix, now require CMS 1.5.3.</li>
        <li>1.5.3 - Support for syntax hilighter.</li>
        <li>1.5.2 - Added more fields available in each node in the template.</li>
        <li>1.5 - Bump version to be compatible with 1.1 only, and add the SetParameterTypes calls</li>
	<li>1.4.1 -- Fix a problem where menus would not show if includeprefix was not specified.
	<li>1.4 -- Accept a comma separated list of includeprefixes or excludeprefixes</li>
	<li>1.3 -- Added includeprefix and excludeprefix params</li>
	<li>1.1 -- Added handling of target parameter, mainly for the Link content type</li>
	<li>1.0 -- Initial Release</li>
	</ul> ';
$lang['dbtemplates'] = 'Templedi cronfa data';
$lang['description'] = 'Defnyddiwch yddewislen templedi i arddangos bwydlenni mewn unrhyw ffordd ddychmygu.';
$lang['deletetemplate'] = 'Dileu Templed';
$lang['edittemplate'] = 'Golygu Templed';
$lang['filename'] = 'Enw ffeil';
$lang['filetemplates'] = 'Delwedd Templedi';
$lang['help_includeprefix'] = 'Include only those items who&#039;s page alias matches one of the specified (comma separated) prefixes.  This parameter cannot be combined with the excludeprefix parameter.';
$lang['help_excludeprefix'] = 'Exclude all items (and their children) who&#039;s page alias matches one of the specified (comma separated) prefixes.  This parameter must not be used in conjunction with the includeprefix parameter.';
$lang['help_collapse'] = 'Trowch ar (osod i 1) i gael y ddewislen cuddio eitemau nad ydynt yn ymwneud &acirc;&#039;r dudalen a ddewiswyd ar hyn o bryd.';
$lang['help_items'] = 'Defnyddiwch yr eitem hon i ddewis rhestr o dudalennau y dylai&#039;r ddewislen hyn  arddangos. Dylai&#039;r gwerth fod yn rhestr o dudalennau arall enw wedi eu gwahanu gyda coma.';
$lang['help_number_of_levels'] = 'Bydd hyn ond yn caniat&aacute;u i&#039;r ddewislen ddangos nifer penodol o lefelau dwfn.';
$lang['help_show_all'] = 'Bydd yr opsiwn hwn yn achosi i&#039;r ddewislen i ddangos yr holl nodau hyd yn oed os ydynt yn cael eu gosod i ni ddangos yn y ddewislen. Ni fydd yn dal i arddangos tudalennau anweithgar fodd bynnag.';
$lang['help_show_root_siblings'] = 'Mae&#039;r opsiwn hwn ond yn dod yn ddefnyddiol os yw start_element neu start_page yn cael eu defnyddio. Mae&#039;n dangos y brodyr a chwiorydd ar hyd ochr y start_page ddewiswyd / elfen.';
$lang['help_start_level'] = 'This option will have the menu only display items starting a the given level.  An easy example would be if you had one menu on the page with number_of_levels=&#039;1&#039;.  Then as a second menu, you have start_level=&#039;2&#039;.  Now, your second menu will show items based on what is selected in the first menu.';
$lang['help_start_element'] = 'Starts the menu displaying at the given start_element and showing that element and it&#039;s children only.  Takes a hierarchy position (e.g. 5.1.2).';
$lang['help_start_page'] = 'Starts the menu displaying at the given start_page and showing that element and it&#039;s children only.  Takes a page alias.';
$lang['help_template'] = 'Mae&#039;r templed i&#039;w ddefnyddio ar gyfer arddangos y fwydlen. Bydd Templedi dod o&#039;r gronfa ddata templedi oni bai bod yr enw yn dod i ben gyda templed. TPL, ac os felly, bydd yn dod o ffeil yn y MenuManager templedi cyfeiriadur (ddiffygion i simple_navigation.tpl)';
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
			<li>$node->raw_menutext -- Menu Text without having html entities converted</li>
			<li>$node->alias -- Page alias</li>
			<li>$node->extra1 -- This field contains the value of the extra1 page property, unless the loadprops-parameter is set to NOT load the properties.</li>
			<li>$node->extra2 -- This field contains the value of the extra2 page property, unless the loadprops-parameter is set to NOT load the properties.</li>
			<li>$node->extra3 -- This field contains the value of the extra3 page property, unless the loadprops-parameter is set to NOT load the properties.</li>
			<li>$node->image -- This field contains the value of the image page property (if non empty), unless the loadprops-parameter is set to NOT load the properties.</li>
			<li>$node->thumbnail -- This field contains the value of the thumbnail page property (if non empty), unless the loadprops-parameter is set to NOT load the properties.</li>
			<li>$node->target -- This field contains Target for the link (if non empty), unless the loadprops-parameter is set to NOT load the properties.</li>
			<li>$node->created -- Item creation date</li>
			<li>$node->modified -- Item modified date</li>
			<li>$node->index -- Count of this node in the whole menu</li>
			<li>$node->parent -- True if this node is a parent of the currently selected page</li>
		</ul>
	</p>
        <h3>Caching</h3>
        <p>This module has the capability to cache its output into static files to reduce memory requirements and sql queries, and to improve frontend performance.  This provides all the advantages of static menus without the inconvenience involved when creating or editing pages.</p>
        <p>Each menu template can be marked as &quot;Cachable&quot;. When a cachable menu template is used on a content page that is cachable, any cached menu output that is available for thsi page will be used.  The nocache parameter on the menu tag can be used to completely disable caching.</p>
        <p>All cached menu files are erased when a content item is added, edited, or deleted... and also when a menu template is added/edited or deleted.</p>';
$lang['importtemplate'] = 'Mewnforiwch Templed i&#039;r Cronfa Data';
$lang['menumanager'] = 'Rheolwr y ddewislen';
$lang['newtemplate'] = 'Enw Newydd y Templed';
$lang['nocontent'] = 'Dim cynnwys';
$lang['notemplatefiles'] = 'Does dim templedi ffeil o fewn% s';
$lang['notemplatename'] = 'NId oes enw i&#039;r templed. ';
$lang['templatecontent'] = 'Cynnwys y Templed';
$lang['templatenameexists'] = 'Mae templed gyda&#039;r enw hwn eisoes yn bodoli';
$lang['qca'] = 'P0-1327526740-1298124770322';
$lang['utmz'] = '156861353.1300626775.6.3.utmcsr=dev.cmsmadesimple.org|utmccn=(referral)|utmcmd=referral|utmcct=/project/files/6';
$lang['utma'] = '156861353.1055020183.1298124770.1300626775.1300637342.7';
$lang['utmc'] = '156861353';
$lang['utmb'] = '156861353.1.10.1300637342';
?>