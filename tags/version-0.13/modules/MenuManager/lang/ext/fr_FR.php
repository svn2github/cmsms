<?php
$lang['addtemplate'] = 'Ajouter un gabarit';
$lang['areyousure'] = '&Ecirc;tes-vous s&ucirc;r de vouloir supprimer?';
$lang['changelog'] = '	<ul>
	<li>Version: 1.0</li> 
	<li>Version initiale</li> 
	</ul> ';
$lang['dbtemplates'] = 'Gabarits se trouvant dans la base de donn&eacute;es';
$lang['description'] = 'Gestion de gabarits de menus pour les afficher de toutes les mani&egrave;res imaginables.';
$lang['deletetemplate'] = 'Supprimer le gabarit';
$lang['edittemplate'] = '&Eacute;diter le gabarit';
$lang['filename'] = 'Nom de fichier';
$lang['filetemplates'] = 'Gabarits sous forme de fichier';
$lang['help_collapse'] = '&Agrave; activer (d&eacute;finir en 1) pour que le menu cache les objets non relatifs &agrave; la page s&eacute;lectionn&eacute;e.';
$lang['help_items'] = 'Utilisez ceci pour s&eacute;lectionner la liste de pages &agrave; afficher dans le menu. La valeur entr&eacute;e doit &ecirc;tre la liste des alias, s&eacute;par&eacute;e par des virgules.';
$lang['help_number_of_levels'] = 'Ce param&egrave;tre permet au menu d&#039;afficher uniquement un certain nombre de niveaux.';
$lang['help_show_root_siblings'] = 'Cette option est utile lorsque start_element ou start_page est utilis&eacute;. Les autres &eacute;l&eacute;ments du m&ecirc;me niveau que l&#039;&eacute;l&eacute;ment s&eacute;lectionn&eacute; seront affich&eacute;s.';
$lang['help_start_level'] = 'Cette option permet d&#039;afficher uniquement les &eacute;l&eacute;ments &agrave; partir d&#039;un niveau donn&eacute;. Un exemple: vous avez un menu avec number_of_levels=&#039;1&#039;.  Puis, comme second menu, vous avez start_level=&#039;2&#039;.  Le second menu affichera les &eacute;l&eacute;ments bas&eacute;s sur ce qui est s&eacute;lectionn&eacute; dans le premier menu.';
$lang['help_start_element'] = 'Cette option permet d&#039;afficher uniquement les &eacute;l&eacute;ments &agrave; partir d&#039;un &eacute;l&eacute;ment donn&eacute; (start_element), ainsi que les niveaux en-dessous de cet &eacute;l&eacute;ment.  la valeur doit &ecirc;tre &eacute;gale &agrave; la position hi&eacute;rarchique de l&#039;&eacute;l&eacute;ment (p.e. 5.1.2).';
$lang['help_start_page'] = 'Cette option permet d&#039;afficher uniquement les &eacute;l&eacute;ments &agrave; partir d&#039;une page donn&eacute;e (start_page), ainsi que les niveaux en-dessous de cet &eacute;l&eacute;ment.  la valeur doit &ecirc;tre &eacute;gale &agrave; l&#039;alias de l&#039;&eacute;l&eacute;ment.';
$lang['help_template'] = 'Le gabarit &agrave; utiliser pour l&#039;affichage du menu. Le gabarit est issu de la base de donn&eacute;es sauf si son nom fini par .tpl, auquel cas il vient du fichier du m&ecirc;me nom se trouvant dans le dossier des gabarits (templates) du module MenuManager';
$lang['help'] = '	<h3>Que fait ce module?</h3>
	<p>Le module Gestion de Menus (Menu Manager) permet de g&eacute;rer les menus dans un syst&egrave;me facile &agrave; utiliser et &agrave; personnaliser.  Il fait abstraction de la partie affichage et place cette derni&egrave;re dans des gabarits Smarty, qui peuvent &ecirc;tre modifi&eacute;s facilement pour satisfaire aux besoins de l&#039;utilisateur. Cela &eacute;tant, le module Gestion de Menus lui-m&ecirc;me est simplement un moteur qui rempli les gabarits. En personnalisant les gabarits, ou en en cr&eacute;ant de nouveaux, vous pouvez cr&eacute;er quasiment toutes les formes de menus que vous pourrez imaginer.</p>
	<h3>Comment l&#039;utiliser?</h3>
	<p>Ins&eacute;rez simplement la balise dans votre gabarit/page: <code>{cms_module module=&#039;menumanager&#039;}</code>.  Les param&egrave;tres possibles sont list&eacute;s plus bas.</p>
	<h3>Pourquoi m&#039;occuper de gabarits?</h3>
	<p>Le module Gestion de Menus utilise des gabarits pour son affichage. Il est install&eacute; avec 3 gabarits par d&eacute;faut, nomm&eacute;s bulletmenu.tpl, cssmenu.tpl et ellnav.tpl. Tous cr&eacute;ent une simple liste de pages, en utilisant diff&eacute;rentes classes et ID, afin de pouvoir leur donner un style gr&acirc;ce au CSS: Ils correspondent aux modules de menus qui &eacute;taient distribu&eacute;s avec les versions pr&eacute;c&eacute;dentes de CMSMS&nbsp;: bulletmenu, CSSMenu et EllNav.</p>
	<p>Notez bien que vous pouvez donner un style &agrave; vos menus par l&#039;interm&eacute;diaire du CSS. Les feuilles de style ne sont pas incluses au module Gestion de Menus, mais doivent &ecirc;tre attach&eacute;es au gabarit de pages s&eacute;par&eacute;ment. Pour que le gabarit cssmenu.tpl fonctionne sous Internet Explorer, vous devez &eacute;galement, dans la partie en-t&ecirc;te de votre gabarit de page, ins&eacute;rer un lien au JavaScript qui permet l&#039;affichage de l&#039;effet survolage dans le navigateur Internet Explorer.</p>
	<p>Si vous d&eacute;sirez cr&eacute;er une version personnalis&eacute;e d&#039;un gabarit de menu, vous pouvez facilement l&#039;importer dans la base de donn&eacute;es, puis l&#039;&eacute;diter directement dans le panneau d&#039;administration de CMSMS.  Proc&eacute;der ainsi&nbsp;:
		<ol>
			<li>Cliquez sur l&#039;administration de Gestion de Menus.</li>
			<li>Cliquez sur l&#039;onglet &#039;Gabarits sous forme de fichiers&#039;, et cliquez  &#039;Importer le gabarit dans la base de donn&eacute;es&#039; &agrave; c&ocirc;t&eacute; de bulletmenu.tpl.</li>
			<li>Donnez un nouveau nom &agrave; ce gabarit. Nous l&#039;appelerons &quot;gabarit test&quot;</li>
			<li>Vous devriez maintenant voir &quot;gabarit test&quot; dans la liste &#039;Gabarits se trouvant dans la base de donn&eacute;es&#039;.</li>
		</ol>
	</p>
	<p>Maintenant, vous pouvez ais&eacute;ment modifier le gabarit pour le modifier &agrave; votre convenance pour le site. Ins&eacute;rez des classes, des ID et d&#039;autres balises afin que le format g&eacute;n&eacute;r&eacute; soit exactement celui que vous d&eacute;sirez. Puis, ins&eacute;rez votre menu dans le site avec&nbsp;: {cms_module module=&#039;menumanager&#039; template=&#039;gabarit test&#039;}. Notez que l&#039;extension .tpl extension doit &ecirc;tre ajout&eacute;e dans le cas d&#039;une utilisation d&#039;un gabarit sour forme de fichier.</p>
	<p>Les param&egrave;tres pour l&#039;&eacute;l&eacute;ment $node utilis&eacute;s dans un gabarit sont les suivants&nbsp;:
		<ul>
			<li>$node->id -- ID de l&#039;&eacute;l&eacute;ment</li>
			<li>$node->url -- URL de l&#039;&eacute;l&eacute;ment</li>
			<li>$node->accesskey -- Access Key, si d&eacute;finie</li>
			<li>$node->tabindex -- Tab Index, si d&eacute;fini</li>
			<li>$node->titleattribute -- Attribut titre, s d&eacute;fini</li>
			<li>$node->hierarchy -- Position hi&eacute;rarchique (p.e. 1.3.3)</li>
			<li>$node->depth -- Niveau de cet &eacute;l&eacute;ment dans le menu actuel</li>
			<li>$node->prevdepth -- Niveau de l&#039;&eacute;l&eacute;ment juste avant l&#039;&eacute;l&eacute;ment actuel</li>
			<li>$node->haschildren -- Renvoie true (vrai) si cet &eacute;l&eacute;ment a des niveaux &quot;enfants&quot; qui doivent &ecirc;tre affich&eacute;s.</li>
			<li>$node->menutext -- Texte du menu</li>
			<li>$node->index -- Position de cet &eacute;l&eacute;ment dans le menu</li>
			<li>$node->parent -- Renvoie true (vrai) si cet &eacute;l&eacute;ment est le parent de la page actuelle</li>
		</ul>
	</p>';
$lang['importtemplate'] = 'Importer le gabarit dans la base de donn&eacute;es';
$lang['menumanager'] = 'Gestion de Menu';
$lang['newtemplate'] = 'Nom du nouveau gabarit';
$lang['nocontent'] = 'Aucun contenu entr&eacute;';
$lang['notemplatefiles'] = 'Aucun gabarit sous forme de fichier dans %s';
$lang['notemplatename'] = 'Aucun nom de gabarit entr&eacute;';
$lang['templatecontent'] = 'Contenu du gabarit';
$lang['templatenameexists'] = 'Un gabarit du m&ecirc;me nom existe d&eacute;j&agrave;';
?>