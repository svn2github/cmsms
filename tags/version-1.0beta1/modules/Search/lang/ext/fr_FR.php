<?php
$lang['param_resultpage'] = 'Page pour l&#039;affichage des r&eacute;sultats. Ceci peut &ecirc;tre soit un alias de page, soit l&#039;ID de la page. Utilis&eacute; pour permettre aux r&eacute;sultats de recherche d&#039;&ecirc;tre affich&eacute;s dans diff&eacute;rents gabarits depuis le formulaire de recherche';
$lang['search'] = 'Recherche';
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
$lang['eventdesc-SearchInitiated'] = 'Envoy&eacute; quand une recherche est d&eacute;but&eacute;e.';
$lang['eventdesc-SearchCompleted'] = 'Envoy&eacute; quand une recherche est termin&eacute;e.';
$lang['eventdesc-SearchItemAdded'] = 'Envoy&eacute; quand un nouvel objet est index&eacute;.';
$lang['eventdesc-SearchItemDeleted'] = 'Envoy&eacute; quand un objet est supprim&eacute; de l&#039;index.';
$lang['eventdesc-SearchAllItemsDeleted'] = 'Envoy&eacute; quand tous les objets sont supprim&eacute;s de l&#039;index.';
$lang['eventhelp-SearchInitiated'] = '<p>Envoy&eacute; quand une recherche est d&eacute;but&eacute;e.</p>
<h4>Param&egrave;tres</h4>
<ol>
<li>Texte qui &eacute;tait recherch&eacute;</li>
</ol>
';
$lang['eventhelp-SearchCompleted'] = '<p>Envoy&eacute; quand une recherche est termin&eacute;e.</p>
<h4>Param&egrave;tres</h4>
<ol>
<li>Texte qui &eacute;tait recherch&eacute;</li>
<li>Tableau des r&eacute;sultats complets</li>
</ol>
';
$lang['eventhelp-SearchItemAdded'] = '<p>Envoy&eacute; quand un nouvel objet est index&eacute;.</p>
<h4>Param&egrave;tres</h4>
<ol>
<li>Nom du module.</li>
<li>Id de l&#039;objet.</li>
<li>Attribut additionnel.</li>
<li>Contenu &agrave; indexer et ajouter.</li>
</ol>
';
$lang['eventhelp-SearchItemDeleted'] = '<p>Envoy&eacute; quand un objet est supprim&eacute; de l&#039;index.</p>
<h4>Param&egrave;tres</h4>
<ol>
<li>Nom du module.</li>
<li>Id de l&#039;objet.</li>
<li>Attribut additionnel.</li>
</ol>
';
$lang['eventhelp-SearchAllItemsDeleted'] = '<p>Envoy&eacute; quand tous les objets sont supprim&eacute;s de l&#039;index.</p>
<h4>Param&egrave;tres</h4>
<ul>
<li>Aucun</li>
</ul>
';
$lang['help'] = '	<h3>Que fait ce module?</h3>
	<p>Le module de recherche (Search) permet d&#039;effectuer des recherches dans les contenu des base, ainsi que dans certains modules enregistr&eacute;s. Vous donnez un ou deux mots et le module vous renvoie les r&eacute;sultats.</p>
	<h3>Comment l&#039;utiliser?</h3>
	<p>La fa&ccedil;on la plus simple est d&#039;utiliser le tag {search}. Ceci est un wrapper tag, qui englobe le module dans un tag pour en simplifier la synthaxe. Ceci va ins&eacute;rer le module dans votre gabarit ou votre page &agrave; l&#039;endroit d&eacute;sir&eacute;, et afficher le formulaire de recherche.  Le code ressemble &agrave; ceci&nbsp;: <code>{search}</code></p>';
$lang['utmz'] = '156861353.1152973895.15.5.utmccn=(referral)|utmcsr=nukketaiteilijat.org|utmcct=/index.php|utmcmd=referral';
$lang['utma'] = '156861353.441775673.1149914315.1153314789.1153496953.18';
?>