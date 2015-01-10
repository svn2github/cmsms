<?php
$lang['admindescription'] = 'Ce module permet principalement de gérer le contenu, avec un éditeur WYSIWYG très simplifié, basé le projet TinyMCE.';
$lang['force_blackonwhite'] = 'Forcer un texte noir sur fond blanc&nbsp;';
$lang['help_force_blackonwhite'] = 'Forcer l\'éditeur MicroTiny d\'avoir du texte noir sur un fond blanc. Cela peut aider à l\'affichage du texte dans l\'éditeur WYSIWYG dans des environnements avec des fonds sombres et lumière au premier plan.';
$lang['strip_background'] = 'Bande de fond avec effets CSS&nbsp;';
$lang['help_strip_background'] = 'Effets d\'arrière-plan effectués à partir des feuilles de style. Cela peut aider à l\'affichage du texte dans l\'éditeur WYSIWYG dans des environnements avec des fonds sombres et lumière au premier plan.';
$lang['show_statusbar'] = 'Afficher la barre d\'état&nbsp;';
$lang['help_show_statusbar'] = 'Affiche une barre d\'état dans la bas de la zone de l\'éditeur. Applicable uniquement dans l\'administration.';
$lang['allow_resize'] = 'Autoriser le redimensionnement&nbsp;';
$lang['help_allow_resize'] = 'Autorise le redimensionnement de la zone du WYSIWYG. Ne fonctionne que si "Afficher la barre d\'état" est cochée';
$lang['view_html'] = 'Vue HTML';
$lang['friendlyname'] = 'Éditeur MicroTiny WYSIWYG';
$lang['help'] = '<strong>Que fait ce module ?</strong>
<br/>
MicroTiny est une version réduite de TinyMCE, en tant qu\'éditeur WYSIWYG par défaut de CMS Made Simple.
Cela n\'offre rien de plus que les fonctionnalités basiques d\'édition, mais c\'est un outil puissant qui facilite les modifications des pages de contenu.
<h3>Comment l\'utiliser ?</h3>
<p>La zone d\'essai MicroTiny doit apparaître automatiquement (pour les utilisateurs ayant des droits suffisants) sous la rubrique "Extensions/Editeur MicroTiny WYSIWYG " dans \'administration de CMSMS. </p>
<p>Pour que MicroTiny puisse être utilisé comme l\'éditeur WYSIWYG lors de l\'édition des pages, MicroTiny doit être sélectionné dans "Mes préférences/Préférences du compte utilisateur" dans l\'administration de CMSMS. Des options supplémentaires, dans les différents modules ou dans des gabarits de page de contenu et les pages de contenu elles-mêmes peuvent contrôler la zone de texte ou un champ WYSIWYG, sont fournies sous des formes diverses.</p>
<h3>A propos de styles et de couleurs</h3>
 	<p>MicroTiny va lire les feuilles de style attachées au gabarit approprié <em>(sinon le gabarit par défaut et ses feuilles de style sont utilisées)</em>. Il enlève les images de fond afin de permettre la visualisation de votre texte dans un environnement aussi proche que possible de ce qui apparaîtra sur la page Web. Si votre thème utilise un fond sombre, avec des images de fond (background ) sur votre feuille de styles, vous pouvez rencontrer des problèmes. Nous vous suggérons de toujours inclure une couleur de fond (background ) sur vos spécifications de styles. Exemple :</p>
 	<pre><code>body {
 	 color: #eee;
 	 background: <span style="color: blue;">#ddd</span> url(chemin/vers/une/image.jpg);
     }
 	</code></pre>
<h3>Comment utiliser MicroTiny WYSIWYG en Frontend (la partie publique sur le site Web)</h3>
<p>De temps en temps il peut être nécessaire de fournir une zone de texte WYSIWYG avec des fonctionnalités limitées aux rédacteurs du frontend. <br/>Pour ce faire, vous devrez suivre deux étapes <em>(sujet à changement dans les futures versions de CMSMS)</em> :</p>
<ul>
  <li>Sélectionner MicroTiny comme "WYSIWYG de la partie publique" dans "Administration du site/Paramètres globaux" onglet "Paramètres généraux"</li>
  <li>Ajouter la balise {MicroTiny action=enablewysiwg} pour les pages où l\'éditeur WYSIWYG sera utilisé. Cela peut être fait soit dans la section head du gabarit de la page, soit dans les "Métadonnées globales", ou dans "Métadonnées spécifiques pour cette page". Cette balise ne prend pas de paramètres supplémentaires.</li>
</ul>';
$lang['example'] = 'MicroTiny exemple';
$lang['settings'] = 'Paramètres';
$lang['youareintext'] = 'Vous êtes dans :';
$lang['dimensions'] = 'L x H';
$lang['size'] = 'Taille';
$lang['filepickertitle'] = 'Fichiers CMSMadeSimple';
$lang['cmsmslinker'] = 'CMSMS linker';
$lang['tmpnotwritable'] = 'La configuration n\'a pas pu être écrite dans le dossier tmp ! Merci de corriger cela !';
$lang['css_styles_text'] = 'Styles CSS&nbsp;';
$lang['css_styles_help'] = 'Les styles CSS mentionnés ici seront ajoutés à une boite de sélection déroulante dans l\'éditeur. Laisser le champ de saisie vide ne permettra pas l\'apparition de la boîte déroulante (par défaut).';
$lang['css_styles_help2'] = 'Les styles peuvent être simplement le nom de la classe, ou une classe avec un nouveau nom à afficher.
Ils doivent être séparés soit par des virgules soit par des sauts de ligne.
<br/>Exemple : monstyle1, Mon nom de style=monstyle2
<br/>Résultat : une boite de sélection avec 2 entrées, \'monstyle1\' et \'Mon nom de style\' résultant de l\'insertion de monstyle1, et monstyle2 respectivement.
<br/>Note : il n\'y a PAS de vérification de l\'existence effective des styles. Ils sont utilisés sans contrôle.';
$lang['usestaticconfig_text'] = 'Utiliser le fichier de configuration statique&nbsp;';
$lang['usestaticconfig_help'] = 'Cela génère un fichier de configuration statique. Fonctionnera mieux sur certains serveurs (par exemple lors de l\'exécution de PHP avec CGI)';
$lang['allowimages_text'] = 'Autoriser les images&nbsp;';
$lang['allowimages_help'] = 'Affiche un bouton image dans la barre d\'outils, permettant d\'insérer une image dans le contenu';
$lang['settingssaved'] = 'Ajustements sauvegardés';
$lang['savesettings'] = 'Sauvegarder les ajustements';
?>