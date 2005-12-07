<?php
$lang['friendlyname'] = 'Ell Nav';
$lang['uninstalled'] = 'Module désinstallé.';
$lang['installed'] = 'Version %s du module installée.';
$lang['upgraded'] = 'Module mis à jour à la version %s.';
$lang['changelog'] = '<ul>
<li>Version 0.7. 27 Octobre 2005. Réécrit pour que les types de contenus multiples fonctionnent correctement.
Utilise maintenant ContentManager (encore), avec fonction de cache.</li>
<li>Version 0.6.1. 19 Octobre 2005. Déboguage par Wishy\'s, fonctionne maintenant pour 0.11</li>
<li>Version 0.6. 10 Juillet 2005. Déboguage, passé au language API standard, ajouté "bulletmode."</li>
<li>Version 0.5.1. 16 Mai 2005. Déboguage pour certain sous-menus et pour IE. Encodage pour les pages avec des noms en UTF-8.</li>
	<li>Version 0.5. 14 Mai 2005. Déboguage afin que les menus apparaissent dans IE. Optimization extensive de la base de données, plus nouvelle fonction cache.</li>
	<li>Version 0.4. 16 Avril 2005. Pensé aux cas où le module est présent deux fois par page</li>	
    <li>Version 0.3. 8 Fév 2005. Mis à jour selon le nouvel API pour 0.9.x</li>
	<li>Version 0.2. 1 Fév 2005. Réécrit, supprimé beaucoup de code de la version précédente, utilise maintnena la recursion pour la génération des menus. Déboguage massif. Déplacé les informations de style en "anchors" ainsi qu\'en liste d\'objets. Veuillez encore considérer ce code en alpha.</li>
	<li>Version 0.1. 27 Jan 2005. Première version.</li></ul>';
$lang['help'] = '<h3>Que fait ce module?</h3>
	<p>Il crée des menus hiérarchiques fomattés CSS, basé sur la page que l\'utilisateur visite.
    Typiuqement, il est utilisé pour diviser le contenu d\'un site en "silos" de contenus <i>i.e.</i>, l\'approche traditionnel d\'une navigation en L.</p>
    <p>Cette approche de navigation a un menu horizontal, qui contient le premier niveau, et un menu vertical, qui déploie la hiérarchie incluse dans la page courante. 
	Ce sera plus clair avec un exemple. Considérez une hiérarchie avec ce contenu:</P>
    <ul><li>Personnes
        <ul><li>Lavonne<ul><li>Parker</li><li>Franz-Josef</li></ul></li>
        <li>Yehudit<ul><li>Beulah</li><li>Pakasit</li><li>Abdullah</li></ul></li>
        <li>Horatio</li>
        </ul></li>
        <li>Emplois
        <ul><li>Gestion<ul><li>Inventaire des pois</li><li>Trieur de pois</li></ul></li>
        <li>Technique<ul><li>Programmeur</li></ul></li>
        </ul>
        </li>
        <li>Lieux
        <ul><li>Californie<ul><li>Los Angeles</li><li>San Francisco</li></ul></li>
        <li>Allemage<ul><li>M&uuml;nchen</li><li>Marburg</li></ul></li>
        <li>Népal<ul><li>Dhulikhel</li><li>Kagbeni</li></ul></li>
        </ul>
        </li>
    </ul>
    <P>Le premier niveau contient "Personnes," "Emplois," and "Lieux." Cliquer sur "Personnes" ouvre un menu sur la gauche
    contenant "Lavonne," "Yehudit," and "Horatio." Cliquer sur "Yehudit" fait apparaître dans la navigation de gauche:</p>
    <ul><li>Lavonne</li>
        <li>Yehudit<ul><li>Beulah</li><li>Pakasit</li><li>Abdullah</li></ul></li>
        <li>Horatio</li>
        </ul>
        <p>Et ainsi de suite. Il y a d\'autres options de paramétrage. Voyez ci-dessous.</p>
	<h3>Commment utiliser ce module?</h3>
	<P>(Référez-vous au fichier README dans le dossier "docs" de ce module pour des exemples de gabarits)</p>
	<p>Insérez simplement le module dans votre gabarit/page ainsi: <code>{cms_module module=\'EllNav\'}</code></p>
	<h3>Quels sont les paramètres possibles?</h3>
	<p>
	<ul>
		<li><em>(optional)</em> <tt>cssid</tt> - string, id de ce menu  pour le code CSS ( dans la balise <ul> du premier niveau). Pas d\'id par défaut.</li>
		<li><em>(optional)</em> <tt>showadmin</tt> - 1/0, pour afficher ou non le lien au panneau d\'administration. 0 par défaut.</li>
		<li><em>(optional)</em> <tt>horizontal</tt> - 1/0, pour afficher ou non un menu horizontal. Pour l\'instant, 
        cela ne change que l\'information de feuille de style. 0 par défaut.</li>
		<li><em>(optional)</em> <tt>showtoplevel</tt> - 1/0, pour afficher ou non la hiérarchie depuis le premier niveau. 
		Dans l\'exemple ci-dessus, si vous voulez que le menu de gauche affiche "Personnes," vous devriez mettre ce paramètres à 1. 0 par défaut.</li>
		<li><em>(optional)</em> <tt>toponly</tt> - 1/0, pour n\'afficher que le premier niveau,
        <i>p.e.</i> le menu horizontal de l\'exemple ci-dessus. 0 par défaut.</li>
		<li><em>(optional)</em> <tt>expandall</tt> - 1/0, pour afficher ou non tous les objets dans la nvaigation qui ne se trouvent pas dans la hiérarchie active. 0 par défaut.</li>
		<li><em>(optional)</em> <tt>lclinks</tt> - 1/0, pour obtenir des URLs en minuscules uniquement. 
        C\'est pratique pour ceux qui utilisent le mod_rewrite, afin que les liens soient consistants. 0 par défaut.</li>
		<li><em>(optional)</em> <tt>bulletmode</tt> - 1/0, lorsque ce paramètre est à 1, EllNav se comporte simplement comme le "bulletmenu". 0 par défaut.</li>
	</ul>
	</p>
	<h3>Feuille de style</h3>
	<p>Les menus sont créés en liste simple et non triées. La balise <ul> du premier niveau contient soit la classe "menu_vert" soit
	"menu_horiz" selon l\'orientation choisie (et contient l\'id éventuel que vous avez inclus avec le paramètre <i>cssid</i></p>
    <p>Les balises <li> et <a>, s\'ils sont dans la hiérarchie active, contiennent la classe "active".
    Et s\'ils se trouvent dans la page en cours, ils contiennent la classe "current".
    </p>
	<h3>Exemples</h3>
	<p>Selon la structure de contenu décrite plus haut:</p>
	<p><code>{cms_module module=\'EllNav\' toponly=1}</code> résultera en:
    <ul><li>Personnes</li><li>Emplois</li><li>LLieux</li></ul></p>
	<p><code>{cms_module module=\'EllNav\' showtoplevel=1}</code>, quand on se trouvera sur la page "Allemagne" résultera en: 
    <ul><li>Lieux<ul><li>Californie</li>
        <li>Allemagne<ul><li>M&uuml;nchen</li><li>Marburg</li></ul></li>
        <li>Népal</li></ul></ul></p>
	<p><code>{cms_module module=\'EllNav\' showtoplevel=1 expandall=1}</code>, quand on se trouvera sur la page "Allemagne" résultera en: 
    <ul><li>Lieux
        <ul><li>Californie<ul><li>Los Angeles</li><li>San Francisco</li></ul></li>
        <li>Allemagne<ul><li>M&uuml;nchen</li><li>Marburg</li></ul></li>
        <li>Népal<ul><li>Dhulikhel</li><li>Kagbeni</li></ul></li>
        </ul>
        </li>
    </ul></p>
	<p><code>{cms_module module=\'EllNav\' expandall=1}</code>, quand on se trouvera sur la page "Allemagne" résultera en: 
        <ul><li>Californie<ul><li>Los Angeles</li><li>San Francisco</li></ul></li>
        <li>Allemagne<ul><li>M&uuml;nchen</li><li>Marburg</li></ul></li>
        <li>Népal<ul><li>Dhulikhel</li><li>Kagbeni</li></ul></li>
        </ul>
    </p>
<h3>Support</h3>
<p>Ce module ne contient aucun support commercial. Cependant, ces ressources sont disponibles pour vous aider:</p>
<ul>
<li>Pour la dernière versin de ce module, les FAQs, ou pour annoncer un bogue, ou pour acheter du support commercial, veuillez visiter 
la page des modules de SjG <a href="http://www.cmsmodules.com">CMSModules.com</a>.</li>
<li>Des discussions complémentaire relatives à ce module peuvent aussi être trouvées sur les <a href="http://forum.cmsmadesimple.org">Forums CMS Made Simple</a>.</li>
<li>L\'auteur, SjG, est souvent sur IRC <a href="irc://irc.freenode.net/#cms">CMS IRC Channel</a>.</li>
<li>Et enfin, vous pouvez rencontrer un certain succès en envoyant un email directement à l\'auteur.</li>  
</ul>
<p>Conformément à la licence GPL, ce module est distribué tel quel. Veuillez vous référer directment à la licence pour tout avis de non responsabilité.</p>

<h3>Copyright et Licence</h3>
<p>Copyright &copy; 2005, Samuel Goldstein <a href="mailto:sjg@cmsmodules.com">&lt;sjg@cmsmodules.com&gt;</a>. Tous droits réservés.</p>
<p>Ce module est distribué sous la licence <a href="http://www.gnu.org/licenses/licenses.html#GPL">GNU Public License</a>. Vous devez agréer aux termes de cette license pour pouvoir utiliser ce module.</p>
';

?>