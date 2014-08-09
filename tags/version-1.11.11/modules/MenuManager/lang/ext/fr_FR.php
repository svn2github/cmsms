<?php
$lang['help_action'] = 'Spécifie le comportement du module. Il ya deux possibilités pour ce paramètre :
  <br/>default <em>(default)</em> - Utilisé pour la construction d\'un menu de navigation.
  <br/>breadcrumbs - Utilisé pour construire une fil d\'Ariane de navigation pour la page actuellement affichée.  <strong>Note : {cms_breadcrumbs}</strong> est une façon d\'appeler cette action.';
$lang['help_root'] = 'Applicable uniquement à breadcrumbs, permet de spécifier un niveau qui n\'est la page par défaut.';
$lang['youarehere'] = 'Vous êtes ici&nbsp;';
$lang['set_cachable'] = 'Gabarit activé comme cachable';
$lang['help_nocache'] = 'Désactive tout cache pour cet appel au menu. Ce paramètre, s\'il est réglé à une valeur positive remplace tous les paramètres dans l\'objet contenu et le gabarit de menu.';
$lang['cachable'] = 'Cachable&nbsp;';
$lang['help_childrenof'] = 'Cette option affichera le menu uniquement des éléments qui sont descendants de l\'ID de la page sélectionnée ou de l\'alias. par exemple : <code>{menu childrenof=$page_alias}</code> affichera uniquement les enfants de la page courante.';
$lang['usage'] = 'Balise pour utiliser le menu';
$lang['import'] = 'Importer';
$lang['edit'] = 'Editer';
$lang['delete'] = 'Supprimer';
$lang['help_loadprops'] = 'Utiliser ce paramètre lorsque vous n\'utilisez PAS les propriétés avancées  dans votre gabarit de gestionnaire de menu. Ce paramètre permet de désactiver le chargement de toutes les propriétés des contenus de tous les nœuds (tel que extra1, image, thumbnail, etc). Cette opération réduira considérablement le nombre de requêtes nécessaires à la construction d\'un menu en contrepartie la consommation en mémoire augmente, mais cela permet de gérer des menus plus avancés.';
$lang['readonly'] = 'lecture seule';
$lang['error_templatename'] = 'Vous ne pouvez pas spécifier un nom de gabarit qui se terminent par. tpl';
$lang['this_is_default'] = 'Gabarit menu par défaut';
$lang['set_as_default'] = 'Définir comme gabarit de menu par défaut';
$lang['default'] = 'Défaut';
$lang['templates'] = 'Gabarits';
$lang['addtemplate'] = 'Ajouter un gabarit';
$lang['areyousure'] = 'Êtes-vous sûr(e) de vouloir supprimer&nbsp;?';
$lang['dbtemplates'] = 'Gabarits se trouvant dans la base de données';
$lang['description'] = 'Gestion de gabarits de menus pour les afficher de toutes les manières imaginables.';
$lang['deletetemplate'] = 'Supprimer le gabarit';
$lang['edittemplate'] = 'Éditer le gabarit';
$lang['filename'] = 'Nom de fichier';
$lang['filetemplates'] = 'Gabarits sous forme de fichier';
$lang['help_includeprefix'] = 'Inclut seulement les données des pages dont l\'alias contient le préfixe indiqué (virgule comme séparateur). Ce paramètre ne peut pas être combiné avec le paramètre excludeprefix.';
$lang['help_excludeprefix'] = 'Exclut toutes les données des pages (et de leurs enfants) dont l\'alias contient le préfixe indiqué (virgule comme séparateur). Ce paramètre ne peut pas être combiné avec le paramètre includeprefix.';
$lang['help_collapse'] = 'À activer (définir en 1) pour que le menu cache les objets non relatifs à la page sélectionnée.';
$lang['help_items'] = 'Utilisez ceci pour sélectionner la liste de pages à afficher dans le menu. La valeur entrée doit être la liste des alias, séparée par des virgules.';
$lang['help_number_of_levels'] = 'Ce paramètre permet au menu d\'afficher uniquement un certain nombre de niveaux. Par défaut la valeur de ce paramètre est supposé être illimitée pour montrer tous les niveaux enfants. Sauf si vous utilisez le paramètre, dans lequel number_of_levels est implicite à 1 sauf s\'il est modifié.';
$lang['help_show_all'] = 'Cette option affichera tous les niveaux même s\'ils sont configuré pour ne pas être afficher dans le menu. Il n\'affichera pas les pages inactives.';
$lang['help_show_root_siblings'] = 'Cette option est utile lorsque start_element ou start_page est utilisé. Les autres éléments du même niveau que l\'élément sélectionné seront affichés.';
$lang['help_start_level'] = 'Cette option permet d\'afficher uniquement les éléments à partir d\'un niveau donné. Un exemple: vous avez un menu avec number_of_levels=\'1\'.  Puis, comme second menu, vous avez start_level=\'2\'.  Le second menu affichera les éléments basés sur ce qui est sélectionné dans le premier menu.';
$lang['help_start_element'] = 'Cette option permet d\'afficher uniquement les éléments à partir d\'un élément donné (start_element), ainsi que les niveaux en-dessous de cet élément.  la valeur doit être égale à la position hiérarchique de l\'élément (exemple : 5.1.2).';
$lang['help_start_page'] = 'Cette option permet d\'afficher uniquement les éléments à partir d\'une page donnée (start_page), ainsi que les niveaux en-dessous de cet élément.  la valeur doit être égale à l\'alias de l\'élément.';
$lang['help_template'] = 'Le gabarit à utiliser pour l\'affichage du menu. Le gabarit est issu de la base de données sauf si son nom fini par .tpl, auquel cas il vient du fichier du même nom se trouvant dans le dossier des gabarits (templates) du module MenuManager (Par défault simple_navigation.tpl)';
$lang['help'] = '<h3>Que fait ce module&nbsp;?</h3>
	<p>Le module Gestion de Menus (Menu Manager) permet de gérer les menus dans un système facile à utiliser et à personnaliser.  Il fait abstraction de la partie affichage et place cette dernière dans des gabarits Smarty, qui peuvent être modifiés facilement pour satisfaire aux besoins de l\'utilisateur. Cela étant, le module Gestion de Menus lui-même est simplement un moteur qui rempli les gabarits. En personnalisant les gabarits, ou en en créant de nouveaux, vous pouvez créer quasiment toutes les formes de menus que vous pourrez imaginer.</p>
	<h3>Comment l\'utiliser&nbsp;?</h3>
	<p>Insérez simplement la balise dans votre gabarit/page: <code>{menu}</code>.  Les paramètres possibles sont listés plus bas.</p>
	<h3>Pourquoi m\'occuper de gabarits?</h3>
	<p>Le module Gestion de Menus utilise des gabarits pour son affichage. Il est installé avec 3 gabarits par défaut, nommés cssmenu.tpl, minimal_menu.tpl et simple_navigation.tpl. Tous créent une simple liste de pages, en utilisant différentes classes et ID, afin de pouvoir leur donner un style grâce au CSS</p>
	<p>Notez bien que vous pouvez donner un style à vos menus par l\'intermédiaire du CSS. Les feuilles de style ne sont pas incluses au module Gestion de Menus, mais doivent être attachées au gabarit de pages séparément. Pour que le gabarit cssmenu.tpl fonctionne sous Internet Explorer, vous devez également, dans la partie en-tête de votre gabarit de page, insérer un lien au JavaScript qui permet l\'affichage de l\'effet survol dans le navigateur Internet Explorer.</p>
	<p>Si vous désirez créer une version personnalisée d\'un gabarit de menu, vous pouvez facilement l\'importer dans la base de données, puis l\'éditer directement dans le panneau d\'administration de CMSMS.  Procéder ainsi&nbsp;:</p>
		<ol>
			<li>Cliquez sur l\'administration de Gestion de Menus.</li>
			<li>Cliquez sur l’icône "Importer le gabarit dans la base de données" à droite, par exemple sur la ligne simple_navigation.tpl,</li>
			<li>Donnez un nouveau nom à ce gabarit. Nous l’appellerons "gabarit_test"</li>
			<li>Vous devriez maintenant voir "gabarit test" dans la liste \'Gabarits se trouvant dans la base de données\'.</li>
		</ol>
	
	<p>Maintenant, vous pouvez aisément modifier le gabarit pour le modifier à votre convenance pour le site. Insérez des classes, des ID et d\'autres balises afin que le format généré soit exactement celui que vous désirez. Puis, insérez votre menu dans le site avec&nbsp;: {menu template=\'gabarit test\'}. Notez que l\'extension .tpl extension doit être ajoutée dans le cas d\'une utilisation d\'un gabarit sous forme de fichier.</p>
	<p>Les paramètres pour l\'élément $node utilisés dans un gabarit sont les suivants&nbsp;:</p>
		<ul>
			<li>$node->id -- ID de l\'élément</li>
			<li>$node->url -- URL de l\'élément</li>
			<li>$node->accesskey -- Access Key, si définie</li>
			<li>$node->tabindex -- Tab Index, si défini</li>
			<li>$node->titleattribute -- Description ou attribut titre, si défini</li>
			<li>$node->hierarchy -- Position hiérarchique (exemple : 1.3.3)</li>
			<li>$node->depth -- Niveau de cet élément dans le menu actuel</li>
			<li>$node->prevdepth -- Niveau de l\'élément juste avant l\'élément actuel</li>
			<li>$node->haschildren -- Renvoie true (vrai) si cet élément a des niveaux "enfants" qui doivent être affichés.</li>
<li>$node->children_exist -- Renvoie true (vrai) si l\'élément possède des éléments enfants disponibles dans la base de données qui peuvent être affichés dans le menu</li>
			<li>$node->menutext -- Texte du menu</li>
                        <li>$node->pagetitle -- Titre de la page</li>
                        <li>$node->raw_menutext -- Texte du menu sans convertir les entités html</li>
			<li>$node->alias -- Alias de la page</li>
			<li>$node->extra1 -- Ce champ contient la valeur de la propriété de page extra1, sauf si le paramètre loadprops, contenu dans la balise (tag) menu, est réglé pour ne PAS charger les propriétés.</li>
			<li>$node->extra2 -- Ce champ contient la valeur de la propriété de page extra2, sauf si le paramètre loadprops , contenu dans la balise (tag) menu, est réglé pour ne PAS charger les propriétés.</li>
			<li>$node->extra3 -- Ce champ contient la valeur de la propriété de page extra3, sauf si le paramètre loadprops , contenu dans la balise (tag) menu, est réglé pour ne PAS charger les propriétés.</li>
			<li>$node->image -- Ce champ contient la valeur de la propriété de page de l\'image(si non vide), sauf si le paramètre loadprops , contenu dans la balise (tag) menu, est réglé pour ne PAS charger les propriétés.</li>
			<li>$node->thumbnail -- Ce champ contient la valeur de la propriété de page de la vignette de l\'image(si non vide), sauf si le paramètre loadprops , contenu dans la balise (tag) menu, est réglé pour ne PAS charger les propriétés.</li>
			<li>$node->target -- Cette zone contient la cible du lien (si non vide), sauf si le paramètre loadprops , contenu dans la balise (tag) menu, est réglé pour ne PAS charger les propriétés.</li>
			<li>$node->index -- Position de cet élément dans le menu</li>
			<li>$node->parent -- Renvoie true (vrai) si cet élément est le parent de la page actuelle</li>
                        <li>$node->current -- Renvoie true (vrai) si cet élément  est la page sélectionnée</li>
                        <li>$node->first -- existe, et mis à 1 si c\'est le premier élément dans un niveau.</li>
                        <li>$node->last -- existe, et mis à 1 si c\'est le dernier élément dans un niveau.</li>
		</ul>

<h3>Mise en cache</h3>
<p>Ce module a la capacité de mettre en cache sa sortie dans des fichiers statiques pour réduire les besoins en mémoire et des requêtes SQL, et pour améliorer les performances du site Web. Cela offre tous les avantages des menus statiques sans les inconvénients impliqués lors de la création ou la modification des pages.</p>
<p>Chaque gabarit de menu peut être marqué comme "être mis en cache". Quand un modèle de menu cachable est utilisée sur une page de contenu qui est mis en cache, toute sortie de menu en cache qui est disponible pour cette page sera utilisés. Le paramètre nocache sur l\'étiquette de menu peut être utilisé pour désactiver complètement la mise en cache.</p>
<p>Tous les fichiers mis en cache menu sont effacés si un élément de contenu est ajouté, modifié ou supprimé ... et aussi quand un gabarit de menu est ajouté/modifié ou supprimé.</p>	
<h3>Balise alternative :</h3>
<p>La balise <strong>{cms_breadcrumbs}</strong>(raccourci de {menu action=breadcrumbs} ) peut être utilis&eacute; pour créer un fil d’Ariane de navigation pour la page actuellement affichée.';
$lang['importtemplate'] = 'Importer le gabarit dans la base de données';
$lang['menumanager'] = 'Gestion de Menu';
$lang['newtemplate'] = 'Nom du nouveau gabarit&nbsp;';
$lang['nocontent'] = 'Aucun contenu entré';
$lang['notemplatefiles'] = 'Aucun gabarit sous forme de fichier dans %s';
$lang['notemplatename'] = 'Aucun nom de gabarit entré';
$lang['templatecontent'] = 'Contenu du gabarit&nbsp;';
$lang['templatenameexists'] = 'Un gabarit du même nom existe déjà';
?>