<?php
$lang['error_uploadpermissions'] = '<strong>ATTENTION :</strong> vous n&#039;avez pas les permissions suffisantes pour uploader ou installer ces th&egrave;mes. Cela est du aux permissions pour les uploads, ou le &quot;Safe mode&quot; de votre serveur.';
$lang['error_nomenumanager'] = 'Le module Gestionnaire de Menu (Menu Manager) n&#039;a pas &eacute;t&eacute; trouv&eacute;';
$lang['active'] = 'Actif';
$lang['default'] = 'D&eacute;faut';
$lang['prompt_themename'] = 'Nom du th&egrave;me :';
$lang['info_themename'] = 'Ce champ d&eacute;termine le nom du th&egrave;me export&eacute;, ind&eacute;pendamment du nom import&eacute;';
$lang['error_editingproblem'] = 'Probl&egrave;me lors du nettoyage et changement des fichiers r&eacute;f&eacute;renc&eacute;s dans ce th&egrave;me.';
$lang['error_problemsavingincludes'] = 'Probl&egrave;me lors de la sauvegarde des fichiers encod&eacute;s dans le th&egrave;me.';
$lang['error_nofilesuploaded'] = 'Aucun fichier t&eacute;l&eacute;charg&eacute;. Assurez-vous que le &quot;enctype&quot; aie &eacute;t&eacute; d&eacute;fini en &quot;multipart/form-data&quot; et que le le champ aie &eacute;t&eacute; correctement activ&eacute; pour le t&eacute;l&eacute;chargement du fichier.';
$lang['error_templateexists'] = 'Un gabarit portant le nom &quot;%s&quot; existe d&eacute;j&agrave;';
$lang['error_stylesheetexists'] = 'Une feuille de style portant le nom &quot;%s&quot; existe d&eacute;j&agrave;';
$lang['error_nostylesheets'] = 'Aucune feuille de style d&eacute;tect&eacute;e dans ce th&egrave;me';
$lang['error_couldnotcreatetemplate'] = 'Impossible de cr&eacute;er une d&eacute;finition de gabarit';
$lang['error_couldnotassoccss'] = 'Il y a eu un probl&egrave;me lors de l&#039;association de la feuille de style avec le gabarit';
$lang['error_nooutput'] = 'Rien &agrave; g&eacute;n&eacute;rer';
$lang['error_notemplate'] = 'Le gabarit n&#039;a pas &eacute;t&eacute; trouv&eacute;';
$lang['error_dtdmismatch'] = 'La version DTD ne correspond pas, impossible d&#039;importer';
$lang['import'] = 'Importer';
$lang['upload'] = 'T&eacute;l&eacute;charger un th&egrave;me';
$lang['id'] = 'Id ';
$lang['name'] = 'Nom';
$lang['export'] = 'Exporter';
$lang['submit'] = 'Envoyer';
$lang['friendlyname'] = 'Gestionnaire de Th&egrave;mes';
$lang['postinstall'] = 'Assurez-vous de d&eacute;finir la permission &#039;Manage Themes&#039; (g&eacute;rer les th&egrave;mes) pour utiliser ce module&nbsp;!';
$lang['uninstalled'] = 'Le module a &eacute;t&eacute; d&eacute;sinstall&eacute;.';
$lang['installed'] = 'La version %s du module a &eacute;t&eacute; install&eacute;e.';
$lang['prefsupdated'] = 'Les pr&eacute;f&eacute;rences du module ont &eacute;t&eacute; mises &agrave; jour.';
$lang['accessdenied'] = 'Acc&egrave;s refus&eacute;. V&eacute;rifiez vos permissions.';
$lang['error'] = 'Erreur&nbsp;!';
$lang['upgraded'] = 'Le module a &eacute;t&eacute; mis &agrave; jour &agrave; la version %s.';
$lang['moddescription'] = 'Ce module permet l&#039;importation et l&#039;exportation de th&egrave;mes (gabarits et feuilles de style)';
$lang['import_succeeded'] = 'Le th&egrave;me a &eacute;t&eacute; import&eacute; avec succ&egrave;s';
$lang['help'] = '<h3>Que fait ce module&nbsp;?</h3>
<p>Le module Gestionnaire de Th&egrave;mes (Theme Manager) permet l&#039;importation et l&#039;exportation de gabarits et des feuilles de styles attach&eacute;es en tant que &quot;th&egrave;mes&quot;. Ceci vous permet de partager votre design avec d&#039;autres utilisateurs de CMS Made Simple.</p>
<h3>Comment l&#039;utiliser&nbsp;?</h3>
<p>Ce module n&#039;a pas de partie publique, il est visible dans le panneau d&#039;administration.  Il vous permet de s&eacute;lectionner un gabarit (actif), et de cliquer &quot;Exporter&quot;.  Un fichier XML contentant le gabarit et ses feuilles de style attach&eacute;es sera cr&eacute;&eacute; et propos&eacute; au t&eacute;l&eacute;chargement.</p>
<h3>Permissions</h3>
<p>Le mod&egrave;le de permission du Gestionnaire de Th&egrave;mes est strict afin de prot&eacute;ger l&#039;int&eacute;grit&eacute; de la base de donn&eacute;es.  La permission &quot;Manage Themes&quot; (Gestion de Th&egrave;mes) est requise pour exporter des th&egrave;mes, et les 3 permissions &quot;Add Stylesheets&quot;, &quot;Add StyleSheet Assocations&quot;, and &quot;Add Templates&quot; (ajout de feuilles de style, ajout d&#039;associations de feuilles de style, ajout de gabarits) sont requises afin de pouvoir importer un th&egrave;me.</p>
<p>De plus, la fonctionnalit&eacute; inverse existe, vous pouvez importer un fichier th&egrave;me (format xml) et automatiquement obtenir les gabarits et feuilles de style dans votre CMS Made Simple.</p>
<h3>Support</h3>
<p>Ce module ne contient aucun support commercial. Cependant, ces ressources sont disponibles pour vous aider&nbsp;:</p>
<ul>
<li>Pour la derni&egrave;re version de ce module, les FAQs, ou pour annoncer un bug, veuillez visiter la <a href="http://dev.cmsmadesimple.org/" target="_blank">forge de CMS Made Simple</a>.</li>
<li>Des discussions compl&eacute;mentaires relatives &agrave; ce module peuvent aussi &ecirc;tre trouv&eacute;es sur les <a href="http://forum.cmsmadesimple.org" target="_blank">Forums CMS Made Simple</a>.</li>
<li>L&#039;auteur, Calguy1000, est souvent sur IRC sur canal #cms: irc.freenode.net/#cms.</li>
<li>Et enfin, vous pouvez rencontrer un certain succ&egrave;s en envoyant un email directement &agrave; l&#039;auteur.</li>  
</ul>
<p>Conform&eacute;ment &agrave; la licence GPL, ce module est distribu&eacute; tel quel. Veuillez vous r&eacute;f&eacute;rer directement &agrave; la licence pour tout avis de non responsabilit&eacute;.</p>

<h3>Copyright et Licence</h3>
<p>Copyright &copy; 2005, Robert Campbell <a href="mailto:calguy1000@hotmail.com">calguy1000@hotmail.com</a>. Tous droits r&eacute;serv&eacute;s.</p>
<p>Ce module est distribu&eacute; sous la licence <a href="http://www.gnu.org/licenses/licenses.html#GPL" target="_blank">GNU Public License</a>. Vous devez agr&eacute;er aux termes de cette licence pour pouvoir utiliser ce module.</p>
';
$lang['utma'] = '156861353.2003866910.1245652859.1274550256.1274826452.144';
$lang['utmz'] = '156861353.1274826452.144.131.utmcsr=google|utmccn=(organic)|utmcmd=organic|utmctr=cmsms';
$lang['qca'] = '4a3d1b41-5eb36-c9570-f49ea';
$lang['utmb'] = '156861353.1.10.1274826452';
$lang['utmc'] = '156861353';
?>