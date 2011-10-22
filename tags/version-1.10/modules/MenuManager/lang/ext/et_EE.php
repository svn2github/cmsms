<?php
$lang['help_loadprops'] = 'Kasuta seda parameetrit kasutades t&auml;iustatud omadusi oma men&uuml;&uuml; halduri mallis. See parameeter sunnib k&otilde;ikide sisuomaduste laadimist iga elemendi jaoks (nagu ekstra1, pilt, pisipilt, jne.) ja dramaatiliselt suurendab n&otilde;utud p&auml;ringute arvu men&uuml;&uuml; ehitamiseks ning suurendab m&auml;lu n&otilde;udeid aga lubab palju rohkem t&auml;iustatud men&uuml;&uuml;sid';
$lang['readonly'] = 'ainult loetav';
$lang['error_templatename'] = 'Sa ei saa m&auml;&auml;rata malli nime .tpl l&otilde;puga';
$lang['this_is_default'] = 'Vaikimisi men&uuml;&uuml; mall';
$lang['set_as_default'] = 'Sea vaikimisi men&uuml;&uuml; malliks';
$lang['default'] = 'Vaikimisi';
$lang['templates'] = 'Mallid';
$lang['addtemplate'] = 'Lisa Mall';
$lang['areyousure'] = 'Oled kindel, et soovid seda eemaldada?';
$lang['changelog'] = '	<ul>
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
$lang['dbtemplates'] = 'Andmebaasi Mallid';
$lang['description'] = 'Halda men&uuml;&uuml; malle, et muuta oma men&uuml;&uuml;de v&auml;ljan&auml;gemist.';
$lang['deletetemplate'] = 'Kustuta Mall';
$lang['edittemplate'] = 'Muuda Malli';
$lang['filename'] = 'Failinimi';
$lang['filetemplates'] = 'Faili Mallid';
$lang['help_includeprefix'] = 'Include only those items who&#039;s page alias matches one of the specified (comma separated) prefixes.  This parameter cannot be combined with the excludeprefix parameter.';
$lang['help_excludeprefix'] = 'Exclude all items (and their children) who&#039;s page alias matches one of the specified (comma separated) prefixes.  This parameter must not be used in conjunction with the includeprefix parameter.';
$lang['help_collapse'] = 'L&uuml;lita sisse (s&auml;ti 1-le), et men&uuml;&uuml; ei n&auml;itaks objekte, mis ei ole seotud avatud lehega.';
$lang['help_items'] = 'Kasuta seda parameetrit, et m&auml;&auml;rata, milliseid lehti peaks men&uuml;&uuml; kuvama. V&auml;&auml;tus peaks olema nimekiri lehtede aliastest, eraldatud komadega.';
$lang['help_number_of_levels'] = 'See seade lubab men&uuml;&uuml;l kuvada objekte ainult teatud tasemeni.';
$lang['help_show_all'] = 'See valik p&otilde;hjustab men&uuml;&uuml;s k&otilde;ikide lehtede n&auml;itamise, isegi kui need ei ole seatud men&uuml;&uuml;s n&auml;itamiseks. Siiski ei n&auml;ita see mitteaktiivseid lehti.';
$lang['help_show_root_siblings'] = 'Sellest valikust on kasu vaid siis, kui kasutad parameetreid <i>start_element</i> v&otilde;i <i>start_page</i>.  P&otilde;him&otilde;tteliselt kuvatakse valitud alguslehe (start_page) alla kuuluvaid lehti tema k&otilde;rval.';
$lang['help_start_level'] = 'Kuvab men&uuml;&uuml;s ainult antud tasemel asuvaid objekte.  Lihtne n&auml;ide oleks j&auml;rgmine: sul on kasutusel &uuml;ks men&uuml;&uuml;, millel on parameetriks m&auml;&auml;ratud <i>number_of_levels=&#039;1&#039;</i>.  Peale selle on sul teine men&uuml;&uuml;, millel on sama parameeter m&auml;&auml;ratud <i>start_level=&#039;2&#039;</i>. 
Sinu teine men&uuml;&uuml; n&auml;itab objekte s&otilde;ltuvalt sellest, mis on valitud esimese men&uuml;&uuml;s.';
$lang['help_start_element'] = 'Kuvab men&uuml;&uuml;s objekte alates antud <i>start_page</i>&#039;st (alguslehest) ja n&auml;itab ainult seda lehte nign tema alla kuuluvaid lehti. V&otilde;tab positsiooni saidi hierarhias (nt. 5.1.2).';
$lang['help_start_page'] = 'Kuvab men&uuml;&uuml;s objekte alates antud <i>start_page</i>&#039;st (alguslehest) ja n&auml;itab ainult seda lehte nign tema alla kuuluvaid lehti. Kasutab lehe aliast.';
$lang['help_template'] = 'Mall, mida kasutada men&uuml;&uuml; kuvamiseks.  Mallid p&auml;rinevad andmebaasi mallidest, v&auml;lja arvatud juhul, kui malli nimi l&otilde;peb .tpl-ga, mis puhul mall p&auml;rineb Men&uuml;&uuml;halduri kaustas olevast failist.';
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
$lang['importtemplate'] = 'Impordi Mall Andmebaasi';
$lang['menumanager'] = 'Men&uuml;&uuml;haldur';
$lang['newtemplate'] = 'Uue Malli Nimi';
$lang['nocontent'] = 'Sisu ei ole';
$lang['notemplatefiles'] = 'Faili mallid kohas %s puuduvad';
$lang['notemplatename'] = 'Malli nime ei ole.';
$lang['templatecontent'] = 'Malli Sisu';
$lang['templatenameexists'] = 'Sellise nimega mall juba eksisteerib';
$lang['utma'] = '156861353.3215545266732019000.1241091787.1254125334.1254128875.137';
$lang['utmz'] = '156861353.1253888638.132.27.utmcsr=forum.cmsmadesimple.org|utmccn=(referral)|utmcmd=referral|utmcct=/index.php/topic,37360.0.html';
$lang['qca'] = '1240683615-58409973-79915303';
$lang['utmc'] = '156861353';
$lang['utmb'] = '156861353.1.10.1254128875';
?>