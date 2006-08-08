<?php
$lang['searchsubmit'] = 'Envoyer';
$lang['search'] = 'Recherche';
$lang['param_submit'] = 'Texte &agrave; placer dans le bouton &#039;OK&#039;';
$lang['param_searchtext'] = 'texte &agrave; placer dans le champ de recherche';
$lang['prompt_searchtext'] = 'Texte de recherche par d&eacute;faut';
$lang['param_resultpage'] = 'Page pour l&#039;affichage des r&eacute;sultats. Ceci peut &ecirc;tre soit un alias de page, soit l&#039;ID de la page. Utilis&eacute; pour permettre aux r&eacute;sultats de recherche d&#039;&ecirc;tre affich&eacute;s dans diff&eacute;rents gabarits depuis le formulaire de recherche';
$lang['description'] = 'Module de recherche du site et des contenus de modules';
$lang['reindexallcontent'] = 'R&eacute;indexer tout le contenu';
$lang['reindexcomplete'] = 'R&eacute;indexation termin&eacute;e&nbsp;!';
$lang['stopwords'] = 'Mots d&#039;arr&ecirc;t';
$lang['searchresultsfor'] = 'Rechercher des r&eacute;sutats pour';
$lang['noresultsfound'] = 'Aucun r&eacute;sultat trouv&eacute;&nbsp;!';
$lang['timetaken'] = 'Temps n&eacute;cessaire';
$lang['usestemming'] = 'Refouler des mots (Anglais seulement)';
$lang['searchtemplate'] = 'Gabarit de recherche';
$lang['resulttemplate'] = 'Gabarit de r&eacute;sultat';
$lang['submit'] = 'Soumettre';
$lang['sysdefaults'] = 'Restaurer par d&eacute;faut';
$lang['searchtemplateupdated'] = 'Gabarit de recherche mis &agrave; jour';
$lang['resulttemplateupdated'] = 'Gabarit de r&eacute;sultat mis &agrave; jour';
$lang['restoretodefaultsmsg'] = 'Cette op&eacute;ration va restaurer le contenu du gabarit au d&eacute;faut du syst&egrave;me. &Ecirc;tes-vous s&ucirc;r de vouloir continuer?';
$lang['options'] = 'Options';
$lang['eventdesc-SearchInitiated'] = 'Envoyer quand une recherche est d&eacute;but&eacute;e';
$lang['eventdesc-SearchCompleted'] = 'Envoyer quand une recherche est termin&eacute;e';
$lang['eventdesc-SearchItemAdded'] = 'Envoyer quand un nouvel objet est index&eacute;';
$lang['eventdesc-SearchItemDeleted'] = 'Envoyer quand un objet est supprim&eacute; de l&#039;index';
$lang['eventdesc-SearchAllItemsDeleted'] = 'Envoyer quand tous les objets sont supprim&eacute;s de l&#039;index';
$lang['eventhelp-SearchInitiated'] = '<p>Envoyer quand une recherche est d&eacute;but&eacute;e</p>
<h4>Param&egrave;tres</h4>
<ol>
<li>Texte qui &eacute;tait recherch&eacute;</li>
</ol>
';
$lang['eventhelp-SearchCompleted'] = '<p>Envoyer quand une recherche est termin&eacute;e</p>
<h4>Param&egrave;tres</h4>
<ol>
<li>Texte qui &eacute;tait recherch&eacute;</li>
<li>Tableau des r&eacute;sultats complets</li>
</ol>
';
$lang['eventhelp-SearchItemAdded'] = '<p>Envoyer quand un nouvel objet est index&eacute;</p>
<h4>Param&egrave;tres</h4>
<ol>
<li>Nom du module.</li>
<li>Id de l&#039;objet.</li>
<li>Attribut additionnel.</li>
<li>Contenu &agrave; indexer et ajouter.</li>
</ol>
';
$lang['eventhelp-SearchItemDeleted'] = '<p>Envoyer quand un objet est supprim&eacute; de l&#039;index</p>
<h4>Param&egrave;tres</h4>
<ol>
<li>Nom du module.</li>
<li>Id de l&#039;objet.</li>
<li>Attribut additionnel.</li>
</ol>
';
$lang['eventhelp-SearchAllItemsDeleted'] = '<p>Envoyer quand tous les objets sont supprim&eacute;s de l&#039;index</p>
<h4>Param&egrave;tres</h4>
<ul>
<li>Aucun</li>
</ul>
';
$lang['help'] = '	<h3>Que fait ce module?</h3>
	<p>Le module de recherche (Search) permet d&#039;effectuer des recherches dans les contenu des base, ainsi que dans certains modules enregistr&eacute;s. Vous donnez un ou deux mots et le module vous renvoie les r&eacute;sultats.</p>
	<h3>Comment l&#039;utiliser?</h3>
	<p>La fa&ccedil;on la plus simple est d&#039;utiliser le tag {search}. Ceci est un wrapper tag, qui englobe le module dans un tag pour en simplifier la synthaxe. Ceci va ins&eacute;rer le module dans votre gabarit ou votre page &agrave; l&#039;endroit d&eacute;sir&eacute;, et afficher le formulaire de recherche.  Le code ressemble &agrave; ceci&nbsp;: <code>{search}</code></p>
<h4>Comment emp&ecirc;cher certains contenus d&#039;&ecirc;tre index&eacute;s</h4>
<p>Le module Recherche (Search) ne recherche pas dans les page inactives. Cependant, &agrave; certaines occasions, si vous utilisez le module CustomContent, ou d&#039;autres logiques Smarty pour afficher des contenus diff&eacute;rents &agrave; diff&eacute;rents utilisateurs, il est conseill&eacute; d&#039;emp&ecirc;cher l&#039;indexation de toute la page, m&ecirc;me si elle est active. Pour cela, incluez ceci n&#039;importe o&ugrave; dans la page <em>&amp;lt;!-- pageAttribute: NotSearchable --&amp;gt;</em>. Quand le module de recherche verra ce code, il n&#039;indexera rien de ce qui se trouve sur cette page.</p>
<p>La balise <em>&amp;lt;!-- pageAttribute: NotSearchable --&amp;gt;</em> peut &eacute;galement &ecirc;tre plac&eacute;e dans un gabarit. Si c&#039;est le cas, aucune des pages utilisant ce gabarit seront index&eacute;e.  Ces pages seront r&eacute;index&eacute;es si la balise est supprim&eacute;e</p>';
$lang['utma'] = '156861353.441775673.1149914315.1154749500.1154790541.36';
$lang['utmz'] = '156861353.1154790541.36.14.utmccn=(referral)|utmcsr=wiki.cmsmadesimple.org|utmcct=/index.php|utmcmd=referral';
$lang['utmc'] = '156861353';
?>