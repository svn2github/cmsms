<?php
$lang['help_action'] = 'Sp&eacute;cifie le comportement du module. Il ya deux possibilit&eacute;s pour ce param&egrave;tre :
  <br/>default <em>(default)</em> - Utilis&eacute; pour la construction d&#039;un menu de navigation.
  <br/>breadcrumbs - Utilis&eacute; pour construire une fil d&#039;Ariane de navigation pour la page actuellement affich&eacute;e.  <strong>Note : {cms_breadcrumbs}</strong> est une fa&ccedil;on d&#039;appeler cette action.';
$lang['help_root'] = 'Applicable uniquement &agrave; breadcrumbs, permet de sp&eacute;cifier un niveau qui n&#039;est la page par d&eacute;faut.';
$lang['youarehere'] = 'Vous &ecirc;tes ici&nbsp;';
$lang['set_cachable'] = 'Gabarit activ&eacute; comme cachable';
$lang['help_nocache'] = 'D&eacute;sactive tout cache pour cet appel au menu. Ce param&egrave;tre, s&#039;il est r&eacute;gl&eacute; &agrave; une valeur positive remplace tous les param&egrave;tres dans l&#039;objet contenu et le gabarit de menu.';
$lang['cachable'] = 'Cachable ';
$lang['help_childrenof'] = 'Cette option affichera le menu uniquement des &eacute;l&eacute;ments qui sont descendants de l&#039;ID de la page s&eacute;lectionn&eacute;e ou de l&#039;alias. par exemple : <code>{menu childrenof=$page_alias}</code> affichera uniquement les enfants de la page courante.';
$lang['usage'] = 'Balise pour utiliser le menu';
$lang['import'] = 'Importer';
$lang['edit'] = 'Editer';
$lang['delete'] = 'Supprimer';
$lang['help_loadprops'] = 'Utiliser ce param&egrave;tre lorsque vous n&#039;utilisez PAS les propri&eacute;t&eacute;s avanc&eacute;es  dans votre gabarit de gestionnaire de menu. Ce param&egrave;tre permet de d&eacute;sactiver le chargement de toutes les propri&eacute;t&eacute;s des contenus de tous les n&oelig;uds (tel que extra1, image, thumbnail, etc). Cette op&eacute;ration r&eacute;duira consid&eacute;rablement le nombre de requ&ecirc;tes n&eacute;cessaires &agrave; la construction d&#039;un menu en contrepartie la consommation en m&eacute;moire augmente, mais cela permet de g&eacute;rer des menus plus avanc&eacute;s.';
$lang['readonly'] = 'lecture seule';
$lang['error_templatename'] = 'Vous ne pouvez pas sp&eacute;cifier un nom de gabarit qui se terminent par. tpl';
$lang['this_is_default'] = 'Gabarit menu par d&eacute;faut ';
$lang['set_as_default'] = 'D&eacute;finir comme gabarit de menu par d&eacute;faut';
$lang['default'] = 'D&eacute;faut';
$lang['templates'] = 'Gabarits';
$lang['addtemplate'] = 'Ajouter un gabarit';
$lang['areyousure'] = '&Ecirc;tes-vous s&ucirc;r(e) de vouloir supprimer&nbsp;?';
$lang['dbtemplates'] = 'Gabarits se trouvant dans la base de donn&eacute;es';
$lang['description'] = 'Gestion de gabarits de menus pour les afficher de toutes les mani&egrave;res imaginables.';
$lang['deletetemplate'] = 'Supprimer le gabarit';
$lang['edittemplate'] = '&Eacute;diter le gabarit';
$lang['filename'] = 'Nom de fichier';
$lang['filetemplates'] = 'Gabarits sous forme de fichier';
$lang['help_includeprefix'] = 'Inclut seulement les donn&eacute;es des pages dont l&#039;alias contient le pr&eacute;fixe indiqu&eacute; (virgule comme s&eacute;parateur). Ce param&egrave;tre ne peut pas &ecirc;tre combin&eacute; avec le param&egrave;tre excludeprefix.';
$lang['help_excludeprefix'] = 'Exclut toutes les donn&eacute;es des pages (et de leurs enfants) dont l&#039;alias contient le pr&eacute;fixe indiqu&eacute; (virgule comme s&eacute;parateur). Ce param&egrave;tre ne peut pas &ecirc;tre combin&eacute; avec le param&egrave;tre includeprefix.';
$lang['help_collapse'] = '&Agrave; activer (d&eacute;finir en 1) pour que le menu cache les objets non relatifs &agrave; la page s&eacute;lectionn&eacute;e.';
$lang['help_items'] = 'Utilisez ceci pour s&eacute;lectionner la liste de pages &agrave; afficher dans le menu. La valeur entr&eacute;e doit &ecirc;tre la liste des alias, s&eacute;par&eacute;e par des virgules.';
$lang['help_number_of_levels'] = 'Ce param&egrave;tre permet au menu d&#039;afficher uniquement un certain nombre de niveaux. Par d&eacute;faut la valeur de ce param&egrave;tre est suppos&eacute; &ecirc;tre illimit&eacute;e pour montrer tous les niveaux enfants. Sauf si vous utilisez le param&egrave;tre, dans lequel number_of_levels est implicite &agrave; 1 sauf s&#039;il est modifi&eacute;.';
$lang['help_show_all'] = 'Cette option affichera tous les niveaux m&ecirc;me s&#039;ils sont configur&eacute; pour ne pas &ecirc;tre afficher dans le menu. Il n&#039;affichera pas les pages inactives.';
$lang['help_show_root_siblings'] = 'Cette option est utile lorsque start_element ou start_page est utilis&eacute;. Les autres &eacute;l&eacute;ments du m&ecirc;me niveau que l&#039;&eacute;l&eacute;ment s&eacute;lectionn&eacute; seront affich&eacute;s.';
$lang['help_start_level'] = 'Cette option permet d&#039;afficher uniquement les &eacute;l&eacute;ments &agrave; partir d&#039;un niveau donn&eacute;. Un exemple: vous avez un menu avec number_of_levels=&#039;1&#039;.  Puis, comme second menu, vous avez start_level=&#039;2&#039;.  Le second menu affichera les &eacute;l&eacute;ments bas&eacute;s sur ce qui est s&eacute;lectionn&eacute; dans le premier menu.';
$lang['help_start_element'] = 'Cette option permet d&#039;afficher uniquement les &eacute;l&eacute;ments &agrave; partir d&#039;un &eacute;l&eacute;ment donn&eacute; (start_element), ainsi que les niveaux en-dessous de cet &eacute;l&eacute;ment.  la valeur doit &ecirc;tre &eacute;gale &agrave; la position hi&eacute;rarchique de l&#039;&eacute;l&eacute;ment (exemple : 5.1.2).';
$lang['help_start_page'] = 'Cette option permet d&#039;afficher uniquement les &eacute;l&eacute;ments &agrave; partir d&#039;une page donn&eacute;e (start_page), ainsi que les niveaux en-dessous de cet &eacute;l&eacute;ment.  la valeur doit &ecirc;tre &eacute;gale &agrave; l&#039;alias de l&#039;&eacute;l&eacute;ment.';
$lang['help_template'] = 'Le gabarit &agrave; utiliser pour l&#039;affichage du menu. Le gabarit est issu de la base de donn&eacute;es sauf si son nom fini par .tpl, auquel cas il vient du fichier du m&ecirc;me nom se trouvant dans le dossier des gabarits (templates) du module MenuManager (Par d&eacute;fault simple_navigation.tpl)';
$lang['help'] = '	<h3>Que fait ce module&nbsp;?</h3>
	<p>Le module Gestion de Menus (Menu Manager) permet de g&eacute;rer les menus dans un syst&egrave;me facile &agrave; utiliser et &agrave; personnaliser.  Il fait abstraction de la partie affichage et place cette derni&egrave;re dans des gabarits Smarty, qui peuvent &ecirc;tre modifi&eacute;s facilement pour satisfaire aux besoins de l&#039;utilisateur. Cela &eacute;tant, le module Gestion de Menus lui-m&ecirc;me est simplement un moteur qui rempli les gabarits. En personnalisant les gabarits, ou en en cr&eacute;ant de nouveaux, vous pouvez cr&eacute;er quasiment toutes les formes de menus que vous pourrez imaginer.</p>
	<h3>Comment l&#039;utiliser&nbsp;?</h3>
	<p>Ins&eacute;rez simplement la balise dans votre gabarit/page: <code>{menu}</code>.  Les param&egrave;tres possibles sont list&eacute;s plus bas.</p>
	<h3>Pourquoi m&#039;occuper de gabarits?</h3>
	<p>Le module Gestion de Menus utilise des gabarits pour son affichage. Il est install&eacute; avec 3 gabarits par d&eacute;faut, nomm&eacute;s cssmenu.tpl, minimal_menu.tpl et simple_navigation.tpl. Tous cr&eacute;ent une simple liste de pages, en utilisant diff&eacute;rentes classes et ID, afin de pouvoir leur donner un style gr&acirc;ce au CSS</p>
	<p>Notez bien que vous pouvez donner un style &agrave; vos menus par l&#039;interm&eacute;diaire du CSS. Les feuilles de style ne sont pas incluses au module Gestion de Menus, mais doivent &ecirc;tre attach&eacute;es au gabarit de pages s&eacute;par&eacute;ment. Pour que le gabarit cssmenu.tpl fonctionne sous Internet Explorer, vous devez &eacute;galement, dans la partie en-t&ecirc;te de votre gabarit de page, ins&eacute;rer un lien au JavaScript qui permet l&#039;affichage de l&#039;effet survol dans le navigateur Internet Explorer.</p>
	<p>Si vous d&eacute;sirez cr&eacute;er une version personnalis&eacute;e d&#039;un gabarit de menu, vous pouvez facilement l&#039;importer dans la base de donn&eacute;es, puis l&#039;&eacute;diter directement dans le panneau d&#039;administration de CMSMS.  Proc&eacute;der ainsi&nbsp;:</p>
		<ol>
			<li>Cliquez sur l&#039;administration de Gestion de Menus.</li>
			<li>Cliquez sur l&rsquo;ic&ocirc;ne &quot;Importer le gabarit dans la base de donn&eacute;es&quot; &agrave; droite, par exemple sur la ligne simple_navigation.tpl,</li>
			<li>Donnez un nouveau nom &agrave; ce gabarit. Nous l&rsquo;appellerons &quot;gabarit_test&quot;</li>
			<li>Vous devriez maintenant voir &quot;gabarit test&quot; dans la liste &#039;Gabarits se trouvant dans la base de donn&eacute;es&#039;.</li>
		</ol>
	
	<p>Maintenant, vous pouvez ais&eacute;ment modifier le gabarit pour le modifier &agrave; votre convenance pour le site. Ins&eacute;rez des classes, des ID et d&#039;autres balises afin que le format g&eacute;n&eacute;r&eacute; soit exactement celui que vous d&eacute;sirez. Puis, ins&eacute;rez votre menu dans le site avec&nbsp;: {menu template=&#039;gabarit test&#039;}. Notez que l&#039;extension .tpl extension doit &ecirc;tre ajout&eacute;e dans le cas d&#039;une utilisation d&#039;un gabarit sous forme de fichier.</p>
	<p>Les param&egrave;tres pour l&#039;&eacute;l&eacute;ment $node utilis&eacute;s dans un gabarit sont les suivants&nbsp;:</p>
		<ul>
			<li>$node->id -- ID de l&#039;&eacute;l&eacute;ment</li>
			<li>$node->url -- URL de l&#039;&eacute;l&eacute;ment</li>
			<li>$node->accesskey -- Access Key, si d&eacute;finie</li>
			<li>$node->tabindex -- Tab Index, si d&eacute;fini</li>
			<li>$node->titleattribute -- Description ou attribut titre, si d&eacute;fini</li>
			<li>$node->hierarchy -- Position hi&eacute;rarchique (exemple : 1.3.3)</li>
			<li>$node->depth -- Niveau de cet &eacute;l&eacute;ment dans le menu actuel</li>
			<li>$node->prevdepth -- Niveau de l&#039;&eacute;l&eacute;ment juste avant l&#039;&eacute;l&eacute;ment actuel</li>
			<li>$node->haschildren -- Renvoie true (vrai) si cet &eacute;l&eacute;ment a des niveaux &quot;enfants&quot; qui doivent &ecirc;tre affich&eacute;s.</li>
<li>$node->children_exist -- Renvoie true (vrai) si l&#039;&eacute;l&eacute;ment poss&egrave;de des &eacute;l&eacute;ments enfants disponibles dans la base de donn&eacute;es qui peuvent &ecirc;tre affich&eacute;s dans le menu</li>
			<li>$node->menutext -- Texte du menu</li>
                        <li>$node->pagetitle -- Titre de la page</li>
                        <li>$node->raw_menutext -- Texte du menu sans convertir les entit&eacute;s html</li>
			<li>$node->alias -- Alias de la page</li>
			<li>$node->extra1 -- Ce champ contient la valeur de la propri&eacute;t&eacute; de page extra1, sauf si le param&egrave;tre loadprops, contenu dans la balise (tag) menu, est r&eacute;gl&eacute; pour ne PAS charger les propri&eacute;t&eacute;s.</li>
			<li>$node->extra2 -- Ce champ contient la valeur de la propri&eacute;t&eacute; de page extra2, sauf si le param&egrave;tre loadprops , contenu dans la balise (tag) menu, est r&eacute;gl&eacute; pour ne PAS charger les propri&eacute;t&eacute;s.</li>
			<li>$node->extra3 -- Ce champ contient la valeur de la propri&eacute;t&eacute; de page extra3, sauf si le param&egrave;tre loadprops , contenu dans la balise (tag) menu, est r&eacute;gl&eacute; pour ne PAS charger les propri&eacute;t&eacute;s.</li>
			<li>$node->image -- Ce champ contient la valeur de la propri&eacute;t&eacute; de page de l&#039;image(si non vide), sauf si le param&egrave;tre loadprops , contenu dans la balise (tag) menu, est r&eacute;gl&eacute; pour ne PAS charger les propri&eacute;t&eacute;s.</li>
			<li>$node->thumbnail -- Ce champ contient la valeur de la propri&eacute;t&eacute; de page de la vignette de l&#039;image(si non vide), sauf si le param&egrave;tre loadprops , contenu dans la balise (tag) menu, est r&eacute;gl&eacute; pour ne PAS charger les propri&eacute;t&eacute;s.</li>
			<li>$node->target -- Cette zone contient la cible du lien (si non vide), sauf si le param&egrave;tre loadprops , contenu dans la balise (tag) menu, est r&eacute;gl&eacute; pour ne PAS charger les propri&eacute;t&eacute;s.</li>
			<li>$node->index -- Position de cet &eacute;l&eacute;ment dans le menu</li>
			<li>$node->parent -- Renvoie true (vrai) si cet &eacute;l&eacute;ment est le parent de la page actuelle</li>
                        <li>$node->current -- Renvoie true (vrai) si cet &eacute;l&eacute;ment  est la page s&eacute;lectionn&eacute;e</li>
                        <li>$node->first -- existe, et mis &agrave; 1 si c&#039;est le premier &eacute;l&eacute;ment dans un niveau.</li>
                        <li>$node->last -- existe, et mis &agrave; 1 si c&#039;est le dernier &eacute;l&eacute;ment dans un niveau.</li>
		</ul>

<h3>Mise en cache</h3>
<p>Ce module a la capacit&eacute; de mettre en cache sa sortie dans des fichiers statiques pour r&eacute;duire les besoins en m&eacute;moire et des requ&ecirc;tes SQL, et pour am&eacute;liorer les performances du site Web. Cela offre tous les avantages des menus statiques sans les inconv&eacute;nients impliqu&eacute;s lors de la cr&eacute;ation ou la modification des pages.</p>
<p>Chaque gabarit de menu peut &ecirc;tre marqu&eacute; comme &quot;&ecirc;tre mis en cache&quot;. Quand un mod&egrave;le de menu cachable est utilis&eacute;e sur une page de contenu qui est mis en cache, toute sortie de menu en cache qui est disponible pour cette page sera utilis&eacute;s. Le param&egrave;tre nocache sur l&#039;&eacute;tiquette de menu peut &ecirc;tre utilis&eacute; pour d&eacute;sactiver compl&egrave;tement la mise en cache.</p>
<p>Tous les fichiers mis en cache menu sont effac&eacute;s si un &eacute;l&eacute;ment de contenu est ajout&eacute;, modifi&eacute; ou supprim&eacute; ... et aussi quand un gabarit de menu est ajout&eacute;/modifi&eacute; ou supprim&eacute;.</p>	
<h3>Balise alternative :</h3>
<p>La balise <strong>{cms_breadcrumbs}</strong>(raccourci de {menu action=breadcrumbs} ) peut &ecirc;tre utilis&amp;eacute; pour cr&eacute;er un fil d&rsquo;Ariane de navigation pour la page actuellement affich&eacute;e.';
$lang['importtemplate'] = 'Importer le gabarit dans la base de donn&eacute;es';
$lang['menumanager'] = 'Gestion de Menu';
$lang['newtemplate'] = 'Nom du nouveau gabarit&nbsp;';
$lang['nocontent'] = 'Aucun contenu entr&eacute;';
$lang['notemplatefiles'] = 'Aucun gabarit sous forme de fichier dans %s';
$lang['notemplatename'] = 'Aucun nom de gabarit entr&eacute;';
$lang['templatecontent'] = 'Contenu du gabarit&nbsp;';
$lang['templatenameexists'] = 'Un gabarit du m&ecirc;me nom existe d&eacute;j&agrave;';
?>