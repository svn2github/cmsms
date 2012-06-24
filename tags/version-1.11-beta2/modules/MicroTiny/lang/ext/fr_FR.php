<?php
$lang['force_blackonwhite'] = 'Forcer un texte noir sur fond blanc&nbsp;';
$lang['help_force_blackonwhite'] = 'Forcer l&#039;&eacute;diteur MicroTiny d&#039;avoir du texte noir sur un fond blanc. Cela peut aider &agrave; l&#039;affichage du texte dans l&#039;&eacute;diteur WYSIWYG dans des environnements avec des fonds sombres et lumi&egrave;re au premier plan.';
$lang['strip_background'] = 'Bande de fond avec effets CSS&nbsp;';
$lang['help_strip_background'] = 'Effets d&#039;arri&egrave;re-plan effectu&eacute;s &agrave; partir des feuilles de style. Cela peut aider &agrave; l&#039;affichage du texte dans l&#039;&eacute;diteur WYSIWYG dans des environnements avec des fonds sombres et lumi&egrave;re au premier plan.';
$lang['show_statusbar'] = 'Afficher la barre d&#039;&eacute;tat&nbsp;';
$lang['help_show_statusbar'] = 'Affiche une barre d&#039;&eacute;tat dans la bas de la zone de l&#039;&eacute;diteur. Applicable uniquement dans l&#039;administration.';
$lang['allow_resize'] = 'Autoriser le redimensionnement&nbsp;';
$lang['help_allow_resize'] = 'Autorise le redimensionnement de la zone du WYSIWYG. Ne fonctionne que si &quot;Afficher la barre d&#039;&eacute;tat&quot; est coch&eacute;e';
$lang['view_html'] = 'Vue HTML';
$lang['friendlyname'] = '&Eacute;diteur MicroTiny WYSIWYG ';
$lang['help'] = '<strong>Que fait ce module ?</strong>
<br/>
MicroTiny est une version r&amp;eacute;duite de TinyMCE, en tant qu&#039;&eacute;diteur WYSIWYG par d&eacute;faut de CMS Made Simple.
Cela n&#039;offre rien de plus que les fonctionnalit&amp;eacute;s basiques d&#039;&eacute;dition, mais c&#039;est un outil puissant qui facilite les modifications des pages de contenu.
<h3>Comment l&#039;utiliser ?</h3>
<p>La zone d&#039;essai MicroTiny doit appara&icirc;tre automatiquement (pour les utilisateurs ayant des droits suffisants) sous la rubrique &quot;Extensions/Editeur MicroTiny WYSIWYG &quot; dans &#039;administration de CMSMS. </p>
<p>Pour que MicroTiny puisse &ecirc;tre utilis&eacute; comme l&#039;&eacute;diteur WYSIWYG lors de l&#039;&eacute;dition des pages, MicroTiny doit &ecirc;tre s&eacute;lectionn&eacute; dans &quot;Mes pr&eacute;f&eacute;rences/Pr&eacute;f&eacute;rences du compte utilisateur&quot; dans l&#039;administration de CMSMS. Des options suppl&eacute;mentaires, dans les diff&eacute;rents modules ou dans des gabarits de page de contenu et les pages de contenu elles-m&ecirc;mes peuvent contr&ocirc;ler la zone de texte ou un champ WYSIWYG, sont fournies sous des formes diverses.</p>
<h3>A propos de styles et de couleurs</h3>
 	<p>MicroTiny va lire les feuilles de style attach&eacute;es au gabarit appropri&eacute; <em>(sinon le gabarit par d&eacute;faut et ses feuilles de style sont utilis&eacute;es)</em>. Il enl&egrave;ve les images de fond afin de permettre la visualisation de votre texte dans un environnement aussi proche que possible de ce qui appara&icirc;tra sur la page Web. Si votre th&egrave;me utilise un fond sombre, avec des images de fond (background ) sur votre feuille de styles, vous pouvez rencontrer des probl&egrave;mes. Nous vous sugg&eacute;rons de toujours inclure une couleur de fond (background ) sur vos sp&eacute;cifications de styles. Exemple :</p>
 	<pre><code>body {
 	 color: #eee;
 	 background: <span style=&quot;color: blue;&quot;>#ddd</span> url(chemin/vers/une/image.jpg);
     }
 	</code></pre>
<h3>Comment utiliser MicroTiny WYSIWYG en Frontend (la partie publique sur le site Web)</h3>
<p>De temps en temps il peut &ecirc;tre n&eacute;cessaire de fournir une zone de texte WYSIWYG avec des fonctionnalit&eacute;s limit&eacute;es aux r&eacute;dacteurs du frontend. <br/>Pour ce faire, vous devrez suivre deux &eacute;tapes <em>(sujet &agrave; changement dans les futures versions de CMSMS)</em> :</p>
<ul>
  <li>S&eacute;lectionner MicroTiny comme &quot;WYSIWYG de la partie publique&quot; dans &quot;Administration du site/Param&egrave;tres globaux&quot; onglet &quot;Param&egrave;tres g&eacute;n&eacute;raux&quot;</li>
  <li>Ajouter la balise {MicroTiny action=enablewysiwg} pour les pages o&ugrave; l&#039;&eacute;diteur WYSIWYG sera utilis&eacute;. Cela peut &ecirc;tre fait soit dans la section head du gabarit de la page, soit dans les &quot;M&eacute;tadonn&eacute;es globales&quot;, ou dans &quot;M&eacute;tadonn&eacute;es sp&eacute;cifiques pour cette page&quot;. Cette balise ne prend pas de param&egrave;tres suppl&eacute;mentaires.</li>
</ul>
';
$lang['example'] = 'MicroTiny exemple';
$lang['settings'] = 'Param&egrave;tres';
$lang['youareintext'] = 'Vous &ecirc;tes dans : ';
$lang['dimensions'] = 'L x H';
$lang['size'] = 'Taille';
$lang['filepickertitle'] = 'Fichiers CMSMadeSimple';
$lang['cmsmslinker'] = 'CMSMS linker';
$lang['tmpnotwritable'] = 'La configuration n&#039;a pas pu &ecirc;tre &eacute;crite dans le dossier tmp ! Merci de corriger cela !';
$lang['css_styles_text'] = 'Styles CSS&nbsp;';
$lang['css_styles_help'] = 'Les styles CSS mentionn&eacute;s ici seront ajout&eacute;s &agrave; une boite de s&eacute;lection d&eacute;roulante dans l&#039;&eacute;diteur. Laisser le champ de saisie vide donnera la bo&icirc;te d&eacute;roulante cach&eacute;e (par d&eacute;faut).';
$lang['css_styles_help2'] = 'Les styles peuvent &ecirc;tre simplement le nom de la classe, ou une classe avec un nouveau nom &agrave; afficher.
Ils doivent &ecirc;tre s&eacute;par&eacute;s soit par des virgules soit par des sauts de ligne.
<br/>Exemple : monstyle1, Mon nom de style=monstyle2
<br/>R&eacute;sultat : une boite de s&eacute;lection avec 2 entr&eacute;es, &#039;monstyle1&#039; et &#039;Mon nom de style&#039; r&eacute;sultant de l&#039;insertion de monstyle1, et monstyle2 respectivement.
<br/>Note : il n&#039;y a PAS de v&eacute;rification de l&#039;existence effective des styles. Ils sont utilis&eacute;s sans contr&ocirc;le.';
$lang['usestaticconfig_text'] = 'Utiliser le fichier de configuration statique&nbsp;';
$lang['usestaticconfig_help'] = 'Cela g&eacute;n&egrave;re un fichier de configuration statique. Fonctionnera mieux sur certains serveurs (par exemple lors de l&#039;ex&eacute;cution de PHP avec CGI)';
$lang['allowimages_text'] = 'Autoriser les images&nbsp;';
$lang['allowimages_help'] = 'Affiche un bouton image dans la barre d&#039;outils, permettant d&#039;ins&eacute;rer une image dans le contenu';
$lang['settingssaved'] = 'Ajustements sauvegard&eacute;s';
$lang['savesettings'] = 'Sauvegarder les ajustements';
?>