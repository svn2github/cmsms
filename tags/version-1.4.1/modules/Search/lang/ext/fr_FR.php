<?php
$lang['word'] = 'Mots';
$lang['count'] = 'Nombre';
$lang['confirm_clearstats'] = '&Ecirc;tes-vous s&ucirc;r de vouloir effacer toutes les statistiques ?';
$lang['clear'] = 'Effacer';
$lang['statistics'] = 'Statistiques';
$lang['param_action'] = 'Sp&eacute;cifie le mode de recherche du module. Les valeurs accept&eacute;es sont &#039;default&#039;, et &#039;keywords&#039;. L&#039;action &#039;keywords&#039; peut &ecirc;tre utilis&eacute;e pour g&eacute;n&eacute;rer une liste de mots (s&eacute;par&eacute;s par une virgule) utilisables dans le meta tag &#039;keywords&#039;.';
$lang['param_count'] = 'Utilis&eacute; avec l&#039;action &#039;keywords&#039;, ce param&egrave;tre limitera la recherche au nombre indiqu&eacute; de mots';
$lang['param_pageid'] = 'Applicable seulement avec l&#039;action &#039;keywords&#039;, ce param&egrave;tre peut &ecirc;tre utilis&eacute; pour sp&eacute;cifier une page diff&eacute;rente (pageid) d&#039;affichage des r&eacute;sultats de la recherche';
$lang['param_inline'] = 'Si &#039;true&#039;, le r&eacute;sultat de la recherche remplacera le contenu originel de la balise {search} dans le contenu du bloc originel. Utilisez ce param&egrave;tre si votre gabarit contient plusieurs blocs de contenu, et que vous ne d&eacute;sirez pas que l&#039;affichage de la recherche remplace le contenu du bloc par d&eacute;faut';
$lang['param_passthru'] = 'Transmet des param&egrave;tres nomm&eacute;s &agrave; des modules sp&eacute;cifiques. Le format de ces param&egrave;tres est : &quot;passtru_MODULENAME_PARAMNAME=&#039;value&#039;&quot; Exemple : passthru_News_detailpage=&#039;newsdetails&#039;&quot;';
$lang['param_modules'] = 'Limite les r&eacute;sultats de la recherche aux valeurs index&eacute;es dans la liste des modules sp&eacute;cifi&eacute;s (s&eacute;par&eacute;s par une virgule)';
$lang['searchsubmit'] = 'Envoyer';
$lang['search'] = 'Recherche';
$lang['param_submit'] = 'Texte &agrave; placer dans le bouton &#039;OK&#039;';
$lang['param_searchtext'] = 'Texte &agrave; placer dans le champ de recherche';
$lang['prompt_searchtext'] = 'Texte de recherche par d&eacute;faut&nbsp;';
$lang['param_resultpage'] = 'Page pour l&#039;affichage des r&eacute;sultats. Ceci peut &ecirc;tre soit un alias de page, soit l&#039;ID de la page. Utilis&eacute; pour permettre aux r&eacute;sultats de recherche d&#039;&ecirc;tre affich&eacute;s dans un gabarit diff&eacute;rent du formulaire de recherche ';
$lang['description'] = 'Module de recherche du site et des contenus d&#039;autres modules';
$lang['reindexallcontent'] = 'R&eacute;indexer tout le contenu';
$lang['reindexcomplete'] = 'R&eacute;indexation termin&eacute;e&nbsp;!';
$lang['stopwords'] = 'Mots d&#039;arr&ecirc;t&nbsp;';
$lang['searchresultsfor'] = 'R&eacute;sultats pour la recherche';
$lang['noresultsfound'] = 'Aucun r&eacute;sultat trouv&eacute;&nbsp;!';
$lang['timetaken'] = 'Temps n&eacute;cessaire';
$lang['usestemming'] = 'Refouler des mots (Anglais seulement)&nbsp;';
$lang['searchtemplate'] = 'Gabarit de recherche';
$lang['resulttemplate'] = 'Gabarit de r&eacute;sultat';
$lang['submit'] = 'Soumettre';
$lang['sysdefaults'] = 'Restaurer les param&egrave;tres par d&eacute;faut';
$lang['searchtemplateupdated'] = 'Gabarit de recherche mis &agrave; jour';
$lang['resulttemplateupdated'] = 'Gabarit de r&eacute;sultat mis &agrave; jour';
$lang['restoretodefaultsmsg'] = 'Cette op&eacute;ration va restaurer le contenu du gabarit au d&eacute;faut du syst&egrave;me. &Ecirc;tes-vous s&ucirc;r de vouloir continuer&nbsp;?';
$lang['options'] = 'Options ';
$lang['eventdesc-SearchInitiated'] = 'Envoy&eacute; quand une recherche est d&eacute;but&eacute;e';
$lang['eventdesc-SearchCompleted'] = 'Envoy&eacute; quand une recherche est termin&eacute;e';
$lang['eventdesc-SearchItemAdded'] = 'Envoy&eacute; quand un nouvel objet est index&eacute;';
$lang['eventdesc-SearchItemDeleted'] = 'Envoy&eacute; quand un objet est supprim&eacute; de l&#039;index';
$lang['eventdesc-SearchAllItemsDeleted'] = 'Envoy&eacute; quand tous les objets sont supprim&eacute;s de l&#039;index';
$lang['eventhelp-SearchInitiated'] = '<p>Envoy&eacute; quand une recherche est d&eacute;but&eacute;e</p>
<h4>Param&egrave;tres</h4>
<ol>
<li>Texte qui &eacute;tait recherch&eacute;</li>
</ol>
';
$lang['eventhelp-SearchCompleted'] = '<p>Envoy&eacute; quand une recherche est termin&eacute;e</p>
<h4>Param&egrave;tres</h4>
<ol>
<li>Texte qui &eacute;tait recherch&eacute;</li>
<li>Tableau des r&eacute;sultats complets</li>
</ol>
';
$lang['eventhelp-SearchItemAdded'] = '<p>Envoy&eacute; quand un nouvel objet est index&eacute;</p>
<h4>Param&egrave;tres</h4>
<ol>
<li>Nom du module.</li>
<li>Id de l&#039;objet.</li>
<li>Attribut additionnel.</li>
<li>Contenu &agrave; indexer et ajouter.</li>
</ol>
';
$lang['eventhelp-SearchItemDeleted'] = '<p>Envoy&eacute; quand un objet est supprim&eacute; de l&#039;index</p>
<h4>Param&egrave;tres</h4>
<ol>
<li>Nom du module.</li>
<li>Id de l&#039;objet.</li>
<li>Attribut additionnel.</li>
</ol>
';
$lang['eventhelp-SearchAllItemsDeleted'] = '<p>Envoy&eacute; quand tous les objets sont supprim&eacute;s de l&#039;index</p>
<h4>Param&egrave;tres</h4>
<ul>
<li>Aucun</li>
</ul>
';
$lang['help'] = '	<h3>Que fait ce module&nbsp;?</h3>
	<p>Le module de recherche (Search) permet d&#039;effectuer des recherches dans le contenu du &quot;noyau&quot; du site, ainsi que dans certains modules enregistr&eacute;s. Vous donnez un ou deux mots et le module vous renvoie les r&eacute;sultats correspondants et pertinents.</p>
	<h3>Comment l&#039;utiliser&nbsp;?</h3>
	<p>La fa&ccedil;on la plus simple est d&#039;utiliser la balise {search}. Ceci est une balise wrapper (qui englobe le module dans une balise pour en simplifier la syntaxe). Ceci va ins&eacute;rer le module dans votre gabarit ou votre page &agrave; l&#039;endroit d&eacute;sir&eacute;, et afficher le formulaire de recherche. Le code ressemble &agrave; ceci&nbsp;: <code>{search}</code></p>
<h4>Comment emp&ecirc;cher certains contenus d&#039;&ecirc;tre index&eacute;s</h4>
<p>Le module Recherche (Search) ne cherchera pas dans les page inactives. Cependant, &agrave; l&#039;occasion, si vous utilisez le module CustomContent, ou d&#039;autres logiques Smarty pour afficher des contenus diff&eacute;rents &agrave; diff&eacute;rents utilisateurs, il est conseill&eacute; d&#039;emp&ecirc;cher l&#039;indexation de toute la page, m&ecirc;me si elle est active. Pour cela, ajoutez la balise suivante n&#039;importe o&ugrave; dans la page <em>&amp;lt;!-- pageAttribute: NotSearchable --&amp;gt;</em>. Quand le module de recherche verra ce code dans la page, il n&#039;indexera rien de ce qui se trouve sur cette page.</p>
<p>La balise <em><!-- pageAttribute: NotSearchable --></em> peut &eacute;galement &ecirc;tre plac&eacute;e dans un gabarit. Si c&#039;est le cas, aucune des pages utilisant ce gabarit ne sera index&eacute;e.  Ces pages seront r&eacute;index&eacute;es si la balise est supprim&eacute;e.</p>';
$lang['changelog'] = '<ul>
<li>1.1 - Original release</li>
<li>1.2 - Avril 2007 (calguy1000)
  <p>Ajout de la possibilit&eacute; de limiter les r&eacute;sultats &agrave; certains modules, et ajout de la possibilit&eacute; de passer des param&egrave;tres via les diff&eacute;rents modules afin de permettre un formatage diff&eacute;rent du r&eacute;sultat.</p>
  <p>Modifi&eacute; afin que le module de recherche puisse &ecirc;tre utilis&eacute; dans des blocs de contenu qui ne sont pas le bloc par d&eacute;faut.</p>
</li>
<li>1.3 - Mai 2007 (calguy1000)
  <p>Ajout de SetParameterType</p>
</li>
<li>1.4 - Nov 2007 (calguy1000)
  <p>Ajout de l&#039;action keywords.</p>
  <p>Corrige un probl&egrave;me sur le param&egrave;tre &#039;resultpage&#039; sur une page dont le gabarit &eacute;tait radicalement diff&eacute;rent.</p>
</li>
<li>1.4.1 - Nov 2007 (calguy1000)
  <p>Modifications mineures de fa&ccedil;on &agrave; ce que les balises php et les ponctuations ne soient pas index&eacute;es.</p>
<p>Corrige la m&eacute;thode VisibleToAdminUser</p>
</li>
<li>1.5 - Mar 2008 (calguy1000)
  <p>Rassemble maintenant des statistiques sur les 50 mots les plus fr&eacute;quemment recherch&eacute;s.</p>
  <p>Ajoute la possibilit&eacute; d&#039;afficher les statistiques et de les r&eacute;initialiser depuis l&#039;administration.</p>
  <p>Simplifie la personnalisation du style du bouton de recherche et de son label.</p>
  <p>Indexe maintenant uniquement les pages actives.</p></li>
</ul>
<li>1.5.1 - Julllet 2008 (calguy1000)
  <p>Des modifications mineures du gabarit de r&eacute;tablir un comportement qui &eacute;tait l&agrave; avant 1,5</p>
  <p>Now escape any search term characters that have special meanings in regular expressions</p>
  <p>Optimisations mineures plus r&eacute;glages</p>
</li>
</ul>';
$lang['utma'] = '156861353.1886654442.1216494057.1216494057.1216494057.1';
$lang['utmc'] = '156861353';
$lang['utmz'] = '156861353.1216494057.1.1.utmccn=(direct)|utmcsr=(direct)|utmcmd=(none)';
$lang['utmb'] = '156861353';
?>