<?php
$lang['usage'] = 'Folosire';
$lang['help_loadprops'] = 'Folositi acest parametru cand utilizati proprietati avansate in template-ul dumneavoastra de manager meniu. Acest parametru va forta incarcarea tuturor proprietatilor continutului fiecarui nod (cum ar fi extra1, imagine, trhumbnail, etc.) si va creste dramatic numarul de interogari necesare pentru construirea unui meniu, si o crestere a cerintelor de memorie, dar permite meniuri mult mai avansate.';
$lang['readonly'] = 'numai citire';
$lang['error_templatename'] = 'Nu puteti specifica un nume de template care se termina in .tpl';
$lang['this_is_default'] = 'Template meniu implicit';
$lang['set_as_default'] = 'Setare ca template meniu implicit';
$lang['default'] = 'Implicit';
$lang['templates'] = 'Template-uri';
$lang['addtemplate'] = 'Adaugare Template';
$lang['areyousure'] = 'Sigur doriti sa stergeti?';
$lang['changelog'] = '	<ul>
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
$lang['dbtemplates'] = 'Template-uri baza de date';
$lang['description'] = 'Management template-uri meniu pentru afisare meniuri in orice fel imaginabil.';
$lang['deletetemplate'] = 'Stergere Template';
$lang['edittemplate'] = 'Editare Template';
$lang['filename'] = 'Nume fisier';
$lang['filetemplates'] = 'Template-uri fisier';
$lang['help_includeprefix'] = 'Includere numai acele obiecte ale caror alias pagina corespunde cu unul din prefixele specificate (separate prin virgula). Acest parametru nu poate fi combinat cu parametrul excludeprefix.';
$lang['help_excludeprefix'] = 'Excludere toate obiectele (si copiii lor) al caror alias pagina corespunde cu unul din prefixele specificate (separate prin virgula).  Acest parametru nu poate fi combinat cu parametrul includeprefix.';
$lang['help_collapse'] = 'Activati (puneti 1) pentru ca meniul sa ascunda obiectele care nu au legatura cu pagina selectata curent.';
$lang['help_items'] = 'Folositi pentru a selecta o lista de pagini pe care acest meniu ar trebui sa le afiseze. Valoarea ar trebui sa fie o lista de aliasuri pagini separate prin virgula.';
$lang['help_number_of_levels'] = 'Aceasta setare va permite afisarea numai a unui anumit nivel de adancime a linkurilor.';
$lang['help_show_all'] = 'Aceasta optiune va face ca meniul sa afiseze toate nodurile chiar daca ele sunt setate sa nu apara in meniu. Nu va afisa pagini inactive insa.';
$lang['help_show_root_siblings'] = 'Aceasta optiune devine folositoare numai daca start_element sau start_page sunt folosite. Va afisa elementele copil in lateralul start_page/elementului selectat.';
$lang['help_start_level'] = 'Aceasta optiune va face ca meniul sa afiseze numai obiecte incepand cu o anumita adancime data. Un exemplu ar fi urmatorul: daca aveti un meniu in pagina cu number_of_levels=&#039;1&#039;, atunci intr-un un meniu secundar aveti start_level=&#039;2&#039;.  Acum , meniul secundar va afisa obiecte in functie de ce e selectat in cel principal.';
$lang['help_start_element'] = 'Porneste afisarea meniului de la start_element dat si afisand acel element si copiii lui numai. Primeste o pozitie ierarhica (ex. 5.1.2).';
$lang['help_start_page'] = 'Porneste afisarea meniului la start_page dat afisand acel element si copiii lui numai. Primeste un alias pagina.';
$lang['help_template'] = 'Template-ul care se foloseste pentru afisar meniului. Template-urile vor veni din template-urile baza de date decat daca numele template-ului se termina cu .tpl, caz in care el va veni dintr-un fisier din folderul de template-uri al MenuManager (template implicit este simple_navigation.tpl)';
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
$lang['importtemplate'] = 'Import Template in baza de date';
$lang['menumanager'] = 'Manager Meniu';
$lang['newtemplate'] = 'Nume template nou';
$lang['nocontent'] = 'Nu este dat continut';
$lang['notemplatefiles'] = 'Nici un fisier template in %s';
$lang['notemplatename'] = 'Nu ati dat nume de template.';
$lang['templatecontent'] = 'Continut template';
$lang['templatenameexists'] = 'Un template cu acest nume exista deja';
$lang['utma'] = '156861353.1477009656.1272913798.1272913798.1274603745.2';
$lang['utmz'] = '156861353.1274603746.2.3.utmcsr=google|utmccn=(organic)|utmcmd=organic|utmctr=cms ms';
$lang['qca'] = 'P0-1739349973-1272913798681';
$lang['utmb'] = '156861353.2.10.1274603745';
$lang['utmc'] = '156861353';
?>