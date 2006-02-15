<?php
$lang['active'] = 'Actif';
$lang['default'] = 'Defaut';
$lang['prompt_themename'] = 'Nom du th&egrave;me&nbsp;:';
$lang['error_editingproblem'] = 'Probl&egrave;me lors du nettoyage et changement des fichiers r&eacute;f&eacute;renc&eacute;s dans ce th&egrave;me.';
$lang['error_problemsavingincludes'] = 'Problpme lors de la sauvegarde des fichiers encod&eacute;s dans le th&egrave;me.';
$lang['error_nofilesuploaded'] = 'Aucun fichier t&eacute;l&eacute;charg&eacute;. Assurez-vous que le enctype aie &eacute;t&eacute; d&eacute;fini en multipart/form-data et que le le champ aie &eacute;t&eacute; correctement activ&eacute; pour le t&eacute;l&eacute;chargement du fichier.';
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
$lang['id'] = 'Id';
$lang['name'] = 'Nom';
$lang['export'] = 'Exporter';
$lang['submit'] = 'Envoyer';
$lang['friendlyname'] = 'Gestionnaire de Th&egrave;mes';
$lang['postinstall'] = 'Assurez-vous de d&eacute;finir la permission &#039;Manage Themes&#039; (g&eacute;rer les th&egrave;mes) pour utiliser ce module!';
$lang['postuninstall'] = '&quot;Caramba!  Encore rat&eacute;!&quot;';
$lang['uninstalled'] = 'Le module a &eacute;t&eacute; d&eacute;sinstall&eacute;.';
$lang['installed'] = 'La version %s du module a &eacute;t&eacute; install&eacute;e.';
$lang['prefsupdated'] = 'Les pr&eacute;f&eacute;rences du module ont &eacute;t&eacute; mises &agrave; jour.';
$lang['accessdenied'] = 'Acc&egrave;s refus&eacute;. V&eacute;rifiez vos permissions.';
$lang['error'] = 'Erreur!';
$lang['upgraded'] = 'Le module a &eacute;t&eacute; mis &agrave; jour &agrave; la version %s.';
$lang['moddescription'] = 'Ce module permet l&#039;importation et l&#039;exportation de th&egrave;mes (gabarits et feuilles de style)';
$lang['changelog'] = '<ul>
<li>
<p>Version 1.0.5. Janvier, 2006</p>
<p>Corrig&eacute; le support des gabarits multiples dans un fichier xml, ajout&eacute; les associations css &agrave; gabarit dans le fichier xml, corrig&eacute; quelque g&eacute;n&eacute;ration d&#039;url dans le fichiers css, and quelques corrections de lignes de texte (merci pat)</p>
<p><b>Note:</b> Les fichiers XML cr&eacute;&eacute;s sous une ancienne version du Gestionnaire de th&egrave;me ne pourront <em>&agrave; nouveau</em> pas &ecirc;tre import&eacute;s. La cause est le changement de version DTD, qui est une fonction de s&eacute;curit&eacute;. D&eacute;sol&eacute;.</p>
</li>
<li><p>Version 1.0.4. Janvier 2006</p>
<p>Le module s&#039;assure de ne g&eacute;n&eacute;rer les m&ecirc;mes gabarit et feuilles de style qu&#039;une fois (ou en tout cas, essaie), et ajout du tag dtdversion lors de la g&eacute;n&eacute;ration.  Contient un mod&egrave;le de permissions plus strict.  Suppression de messages d&#039;erreur superflus.</p>
<p><b>Note:</b> Les fichiers XML cr&eacute;&eacute;s sous une ancienne version du Gestionnaire de th&egrave;me ne pourront pas &ecirc;tre import&eacute;s. La cause est l&#039;ajout du sch&eacute;ma de version DTD, qui est une fonction de s&eacute;curit&eacute;. D&eacute;sol&eacute;.</p>
</li>
<li><p>Version 1.0.3. Janvier 2006</p>
<p>Supporte maintenant les gabarits multiples dans un th&egrave;me, la cr&eacute;ation r&eacute;cursive de dossiers, et l&#039;encodage base64_encodes de toutes les feuilles de style et gabarits.</p>
</li>
<li><p>Version 1.0.2. D&eacute;cembre 2005</p>
<p>Inclus maintenant les images et le javascript se trouvant dans les feuilles de style et les gabarits. Durant la restauration, les fichiers sont plac&eacute;s dans un dossier portant le nom du th&egrave;me sous uploads/themes.</p></li>
<li>Version 1.0.1. D&eacute;cembre 2005 - Correction des d&eacute;pendances, de l&#039;aide et nettoyage g&eacute;n&eacute;ral.</li>
<li>Version 1.0.0. 31 Novembre 2005 - Version initiale.</li>
</ul>';
$lang['help'] = '<h3>Que fait ce module?</h3>
<p>Ce module permet l&#039;importation et l&#039;exportation de gabarits et des feuilles de styles attach&eacute;es en tant que &quot;th&egrave;mes&quot;. Ceci vous permet de partager votre design avec d&#039;autres utilisateurs de CMS Made Simple.</p
<h3>Comment l&#039;utiliser</h3>
<p>Ce module n&#039;a pas de partie publique, il est visible dans le panneau d&#039;administration.  Il vous permet de s&eacute;lectionner un gabarit (actif), et de cliquer &quot;Exporter&quot;.  Un fichier XML contentant le gabarit et ses feuilles de style attach&eacute;es sera cr&eacute;&eacute; et propos&eacute; au t&eacute;l&eacute;chargement.</p>
<h3>Permissions</h3>
<p>Le mod&egrave;le de permission du Gestionnaire de Th&egrave;mes est strict afin de prot&eacute;ger l&#039;int&eacute;grit&eacute; de la base de donn&eacute;es.  La permission &quot;Manage Themes&quot; (Gestionnaire de Th&egrave;mes) est requise pour exporter des th&egrave;mes, et les 3 permissions &quot;Add Stylesheets&quot;, &quot;Add StyleSheet Assocations&quot;, and &quot;Add Templates&quot; (ajout de feuilles de style, ajout des associations de feuilles de style, ajout de gabarits) sont requises afin de pouvoir importer un th&egrave;me.</p>
<p>De plus, la fonctionnalit&eacute; inverse existe, vous pouvez importer un fichier th&egrave;me (format xml) et automatiquement obtenir les gabarit et feuilles de style dans votre CMS Made Simple.</p>
<h3>Support</h3>
<p>Ce module ne contient aucun support commercial. Cependant, ces ressources sont disponibles pour vous aider&nbsp;:</p>
<ul>
<li>Pour la derni&egrave;re version de ce module, les FAQs, ou pour annoncer un bug, veuillez visiter la <a href=&quot;http://dev.cmsmadesimple.org/&quot; target=&quot;_blank&quot;>forge de CMS Made Simple</a>.</li>
<li>Des discussions compl&eacute;mentaires relatives &agrave; ce module peuvent aussi &ecirc;tre trouv&eacute;es sur les <a href=&quot;http://forum.cmsmadesimple.org&quot; target=&quot;_blank&quot;>Forums CMS Made Simple</a>.</li>
<li>L&#039;auteur, Calguy1000, est souvent sur IRC sur canal #cms: irc.freenode.net/#cms.</li>
<li>Et enfin, vous pouvez rencontrer un certain succ&egrave;s en envoyant un email directement &agrave; l&#039;auteur.</li>  
</ul>
<p>Conform&eacute;ment &agrave; la licence GPL, ce module est distribu&eacute; tel quel. Veuillez vous r&eacute;f&eacute;rer directement &agrave; la licence pour tout avis de non responsabilit&eacute;.</p>

<h3>Copyright et Licence</h3>
<p>Copyright &copy; 2005, Robert Campbell <a href=&quot;mailto:calguy1000@hotmail.com&quot;><calguy1000@hotmail.com></a>. Tous droits r&eacute;serv&eacute;s.</p>
<p>Ce module est distribu&eacute; sous la licence <a href=&quot;http://www.gnu.org/licenses/licenses.html#GPL&quot; target=&quot;_blank&quot;>GNU Public License</a>. Vous devez agr&eacute;er aux termes de cette licence pour pouvoir utiliser ce module.</p>
';
?>