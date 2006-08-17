<?php
$lang['error_checksum'] = 'Erreur Checksum. Ceci indique probablement qu&#039;il y a un fichier corrompu, soit lorsqu&#039;il a &eacute;t&eacute; t&eacute;l&eacute;charg&eacute; sur le d&eacute;p&ocirc;t (repository), soit lorsqu&#039;il a &eacute;t&eacute; transmis &agrave; votre machine.';
$lang['cantdownload'] = 'Impossible de t&eacute;l&eacute;charger';
$lang['download'] = 'T&eacute;l&eacute;charger';
$lang['error_moduleinstallfailed'] = 'L&#039;installation du module n&#039;a pas r&eacute;ussi';
$lang['error_connectnomodules'] = 'Bien qu&#039;une connection au d&eacute;p&ocirc;t de module aie &eacute;t&eacute; &eacute;tablie avec succ&egrave;s, il appara&icirc;t que ce d&eacute;p&ocirc;t ne partage aucun module pour l&#039;instant.';
$lang['submit'] = 'Soumettre';
$lang['text_repository_url'] = 'L&#039;URL doit &ecirc;tre dans un format tel que http://www.mycmssite.com/path/soap.php?module=ModuleRepository';
$lang['prompt_repository_url'] = 'URL du d&eacute;p&ocirc;t de modules&nbsp;:';
$lang['availmodules'] = 'Modules disponibles';
$lang['preferences'] = 'Pr&eacute;f&eacute;rences';
$lang['repositorycount'] = 'Modules trouv&eacute;s dans le d&eacute;p&ocirc;t';
$lang['instcount'] = 'Modules install&eacute;s';
$lang['availablemodules'] = 'Statut des modules disponibles dans le d&eacute;p&ocirc;t actuel';
$lang['helptxt'] = 'Aide';
$lang['abouttxt'] = '&Agrave; propos';
$lang['xmltext'] = 'Fichier XML';
$lang['nametext'] = 'Nom du module';
$lang['vertext'] = 'Version';
$lang['sizetext'] = 'Taille (octets)';
$lang['statustext'] = 'Statut/Action';
$lang['uptodate'] = 'Install&eacute;';
$lang['install'] = 'installer';
$lang['newerversion'] = 'Nouvelle version install&eacute;e';
$lang['upgrade'] = 'Mise &agrave; jour';
$lang['error_nosoapconnect'] = 'Impossible de se connecter au serveur SOAP';
$lang['error_soaperror'] = 'Probl&egrave;me SOAP';
$lang['error_norepositoryurl'] = 'L&#039;URL du d&eacute;p&ocirc;t de module n&#039;a pas &eacute;t&eacute; sp&eacute;cifi&eacute;';
$lang['friendlyname'] = 'Gestionnaire de Module';
$lang['postinstall'] = 'Post Install Message, (e.g., Be sure to set &quot;&quot; permissions to use this module!)';
$lang['postuninstall'] = 'Post Uninstall Message, e.g., &quot;Curses! Foiled Again!&quot;';
$lang['really_uninstall'] = '&Ecirc;tes-vous s&ucirc;r de vouloir d&eacute;sinstaller ce module?';
$lang['uninstalled'] = 'Module d&eacute;sinstall&eacute;.';
$lang['installed'] = 'La version %s du module est install&eacute;e.';
$lang['upgraded'] = 'Module mis &agrave; jour &agrave; la version %s.';
$lang['moddescription'] = 'Un client pour le d&eacute;pot de modules (ModuleRepository), ce module permet la pr&eacute;visualisation, et l&#039;installation de modules depuis des sites distants sans avoir besoin d&#039;utiliser le ftp, ou de d&eacute;zipper des archives. Les fichier XML de modules sont t&eacute;l&eacute;charg&eacute;s en utilisant SOAP, l&#039;int&eacute;grit&eacute; est v&eacute;rifi&eacute;e et automatiquement ajust&eacute;e.';
$lang['error'] = 'Erreur&nbsp;!';
$lang['admindescription'] = 'Un outils pour trouver et installer des modules depuis des sites distants.';
$lang['accessdenied'] = 'Acc&egrave;s refus&eacute;, veuillez v&eacute;rifier les permissions.';
$lang['changelog'] = '<ul><li>Version 1.0. 10 janvier 2006. Version initiale.</li>
<li>Version 1.1. Juillet 2006. Distribu&eacute; avec 1.0- beta</li>
<li>Version 1.1.1 Ao&ucirc;t 2006.  Requiert la version 1.0.1 de nuSOAP</li>
</ul>';
$lang['help'] = '<h3>Que fait ce module?</h3>
<p>Un client pour le d&eacute;pot de modules (ModuleRepository), ce module permet la pr&eacute;visualisation, et l&#039;installation de modules depuis des sites distants sans avoir besoin d&#039;utiliser le ftp, ou de d&eacute;zipper des archives. Les fichier XML de modules sont t&eacute;l&eacute;charg&eacute;s en utilisant SOAP, l&#039;int&eacute;grit&eacute; est v&eacute;rifi&eacute;e et automatiquement ajust&eacute;e.</p>
<h3>Comment l&#039;utiliser?</h3>
<p>pour utiliser ce module, vous devez d&eacute;finir la permission &#039;Modify Modules&#039;, vous avez aussi besoin de l&#039;URL complet &agrave; un d&eacute;p&ocirc;t de modules (Module Repository).  Vous pouvez sp&eacute;cifier cet URL dans le menu &#039;Administration du site&#039; --> &#039;Param&egrave;tres Globaux&#039;.</p><br/>
<p>Vous trouverez l&#039;interface de ce module sous le menu &#039;Extensions&#039;.  Quand vous s&eacute;lectionnez ce module, une requ&ecirc;te va automatiquement &ecirc;tre au d&eacute;p&ocirc;t de modules, pour trouver les modules XML disponibles. Cette liste sera compar&eacute;e &agrave; la liste des modules d&eacute;j&agrave; install&eacute;s, et une page de sommaire sera affich&eacute;e.  Puis, vous pourrez voir une information descriptive, l&#039;aide et l&#039;information &#039;&Agrave; propos&#039; des modules, sans les installer. Vous pourrez alors choisir de mettre &agrave; jour, ou installer des modules.</p>
<h3>Support</h3>
<p>Copyright &copy; 2006, Robert Campbell calguy1000 <a href=&quot;mailto:calguy1000@hotmail.com&quot;><calguy1000@hotmail.com></a>. Tous droits r&eacute;serv&eacute;s.</p>
<p>Ce module est distribu&eacute; sous la licence <a href=&quot;http://www.gnu.org/licenses/licenses.html#GPL&quot; target=&quot;_blank&quot;>GNU Public License</a>. Vous devez agr&eacute;er aux termes de cette licence pour pouvoir utiliser ce module.</p>';
$lang['utma'] = '156861353.441775673.1149914315.1154749500.1154790541.36';
$lang['utmz'] = '156861353.1154790541.36.14.utmccn=(referral)|utmcsr=wiki.cmsmadesimple.org|utmcct=/index.php|utmcmd=referral';
$lang['utmc'] = '156861353';
?>