<?php
$lang['set_cachable'] = 'Podesi da se ovaj &scaron;ablon može ke&scaron;irati';
$lang['help_nocache'] = 'Onemogući bilo kakvo ke&scaron;iranje ovog poziva menija. Ovaj parametar, ako se podesi na bilo koju pozitivnu vrednost, će poni&scaron;titi sva pode&scaron;avanja u sadržaju i &scaron;ablonu menija.';
$lang['cachable'] = 'Može se ke&scaron;irati';
$lang['help_childrenof'] = 'Ova opcija će učiniti da se u meniju prikazuju samo stranice koje su direktni potomci stranice čiju ID oznaku ili alijas unesete.  Npr: <code>{menu childrenof=$page_alias}</code> će prikazati samo potomke tekuće strane.';
$lang['usage'] = 'Tag za upotrebu';
$lang['import'] = 'Uvezi/Importiraj';
$lang['edit'] = 'Uredi';
$lang['delete'] = 'Izbri&scaron;i';
$lang['help_loadprops'] = 'Koristite ovaj parametar kada NE koristite napredna svojstva u svom &scaron;ablonu. Ovaj parametar će onemogućiti učitavanje svih svojstava za sve stavke menija (kao &scaron;to su extra1, slika, umanjeni prikaz slike, itd). Ovo će znatno smanjiti broj potrebnih upita za formiranje menija i povećati zahteve za memorijom, ali će onemogućiti pravljenje znatno naprednijih menija';
$lang['readonly'] = 'read  only';
$lang['error_templatename'] = 'Ne možete uneti naziv &scaron;ablona koji se zavr&scaron;ava sa .tpl';
$lang['this_is_default'] = 'Podrazumevani &scaron;ablon menija';
$lang['set_as_default'] = 'Postavi za podrazumevani &scaron;ablon menija';
$lang['default'] = 'Podrazumevani';
$lang['templates'] = '&Scaron;abloni';
$lang['addtemplate'] = 'Dodaj novi &scaron;ablon';
$lang['areyousure'] = 'Da li ste sigurni da želite ovo obrisati?';
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
$lang['dbtemplates'] = '&Scaron;abloni iz baze podataka';
$lang['description'] = 'Ovde možete praviti &scaron;ablone menija va&scaron;eg sajta.';
$lang['deletetemplate'] = 'Obri&scaron;i &scaron;ablon';
$lang['edittemplate'] = 'Izmeni &scaron;ablon';
$lang['filename'] = 'Naziv datoteke';
$lang['filetemplates'] = 'Datoteke &scaron;ablona';
$lang['help_includeprefix'] = 'Uključi samo one stranice čiji se alijas poklapa sa jednim od navedenih (<strong>samo zarezom</strong> razdvojenih) prefiksa. Ovaj parametar ne sme se koristiti u kombinaciji sa parametrom <code>excludeprefix</code>.';
$lang['help_excludeprefix'] = 'Isključi iz menija one stranice čiji se alijas poklapa sa jednim od navedenih (<strong>samo zarezom</strong> razdvojenih) prefiksa. Ovaj parametar ne sme se koristiti u kombinaciji sa parametrom <code>includeprefix</code>.';
$lang['help_collapse'] = 'Uključite (podesite na 1) da bi meni skrivao stavke koje nisu povezane sa trenutno prikazanom stranicom.';
$lang['help_items'] = 'Koristite ovu stavki da biste izabrali listu stranica koje ovaj meni treba da prikazuje.  Vrednost mora biti u obliku niza alijasa stranica razdvojih zarezom.';
$lang['help_number_of_levels'] = 'Ovo pode&scaron;avanje će dozvoliti meniju da prikaže stranice samo do određenog nivoa dubine.';
$lang['help_show_all'] = 'Ova opcija će učiniti da meni prikaže sve stranice, čak i one za koje je pode&scaron;eno da se ne prikazuju u meniju. Međutim, i dalje neće biti prikazane neaktivne stranice.';
$lang['help_show_root_siblings'] = 'Ova opcija postaje upotrebljiva jedino kada se koriste <em>start_element</em> ili <em>start_page</em>.  U su&scaron;tini, prikazaće srodne stranice uz izabrani start_page/element.';
$lang['help_start_level'] = 'Ova opcija će učiniti da se u meniju prikazjuju samo stranice koje su određene dubine. Lak primer za ovo bi bio kada biste na jednoj stranici imali jedan meni sa parametrom <code>number_of_levels=&#039;1&#039;</code>, a drugi sa parametrom <code>start_level=&#039;2&#039;</code>. Tako bi Va&scaron; drugi meni prikazivao samo stranice koje su povezane sa onom selektovanom u prvom meniju.';
$lang['help_start_element'] = 'Prikazuje stranice počev&scaron;i od zadate (<code>start_element</code>) i prikazuje samo tu stranicu i njenu &#039;decu&#039;. Prihvata vrednost hijerarhijske pozicije (npr. 5.1.2) kao parametar.';
$lang['help_start_page'] = 'Starts the menu displaying at the given start_page and showing that element and it&#039;s children only.  Takes a page alias.';
$lang['help_template'] = '&Scaron;ablon koji će se koristiti za prikazivanje menija. &Scaron;abloni će se učitavati iz baze podataka, osim ako se naziv &scaron;ablona ne zavr&scaron;ava sa .tpl, u kom slučaju će se &scaron;ablon učitati iz datoteke u &quot;templates&quot; direktorijumu MenuManager modula (podrazumevana vrednost je simple_navigation.tpl)';
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
			<li>$node->children_exist -- Returns true if this node has child nodes available in the database that can be displayed in the menu</li>
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
			<li>$node->current -- True if this node is the currently selected page</li>
		</ul>
	</p>
        <h3>Caching</h3>
        <p>This module has the capability to cache its output into static files to reduce memory requirements and sql queries, and to improve frontend performance.  This provides all the advantages of static menus without the inconvenience involved when creating or editing pages.</p>
        <p>Each menu template can be marked as &quot;Cachable&quot;. When a cachable menu template is used on a content page that is cachable, any cached menu output that is available for thsi page will be used.  The nocache parameter on the menu tag can be used to completely disable caching.</p>
        <p>All cached menu files are erased when a content item is added, edited, or deleted... and also when a menu template is added/edited or deleted.</p>';
$lang['importtemplate'] = 'Uvezi &scaron;ablon u bazu podataka';
$lang['menumanager'] = 'Upravljanje menijima';
$lang['newtemplate'] = 'Naziv novog &scaron;ablona';
$lang['nocontent'] = 'Nije unet sadržaj';
$lang['notemplatefiles'] = 'Nema datoteka &scaron;ablona u %s';
$lang['notemplatename'] = 'Nije unet naziv &scaron;ablona.';
$lang['templatecontent'] = 'Sadržaj &scaron;ablona';
$lang['templatenameexists'] = '&Scaron;ablon sa ovim nazivom već postoji';
$lang['qca'] = 'P0-1458450664-1284573084918';
$lang['utma'] = '156861353.1471831631.1316290999.1316290999.1316290999.1';
$lang['utmc'] = '156861353';
$lang['utmz'] = '156861353.1316290999.1.1.utmccn=(direct)|utmcsr=(direct)|utmcmd=(none)';
$lang['utmb'] = '156861353';
?>