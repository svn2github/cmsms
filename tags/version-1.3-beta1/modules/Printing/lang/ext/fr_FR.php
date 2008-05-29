<?php
$lang['friendlyname'] = 'Impression personnalisable des pages';
$lang['description'] = 'Ce module permet de personnaliser l&#039;affichage de pages pour impression pour CMSMS.  Alternativement, des fichiers PDF du contenu principal peuvent &ecirc;tre cr&eacute;&eacute;s &agrave; la vol&eacute;e ';
$lang['postinstall'] = 'Le module a &eacute;t&eacute; intall&eacute; avec succ&egrave;s';
$lang['confirmuninstall'] = '&Ecirc;tes-vous s&ucirc;r de vouloir d&eacute;sinstaller le module?';
$lang['postuninstall'] = 'Le module a &eacute;t&eacute; d&eacute;sinstall&eacute; avec succ&egrave;s';
$lang['linktemplate'] = 'Gabarit de lien';
$lang['printtemplate'] = 'Gabarit d&#039;impression';
$lang['pdftemplate'] = 'Gabarit PDF';
$lang['templatesaved'] = 'Le gabarit a &eacute;t&eacute; mis &agrave; jour avec succ&egrave;s';
$lang['templatereset'] = 'Le gabarit a &eacute;t&eacute; r&eacute;initialis&eacute; avec succ&egrave;s';
$lang['confirmresettemplate'] = '&Ecirc;tes-vous s&ucirc;r de vouloir r&eacute;initialiser le gabarit &agrave; son contenu par d&eacute;faut?';
$lang['reset'] = 'R&eacute;initialiser par d&eacute;faut ';
$lang['save'] = 'Sauvegarder';
$lang['upgraded'] = 'A &eacute;t&eacute; mis &agrave; jour &agrave; la version';
$lang['savetemplate'] = 'Sauvegarder le gabarit';
$lang['savesettings'] = 'Sauvegarder les param&egrave;tres';
$lang['settings'] = 'Param&egrave;tres';
$lang['settingssaved'] = 'Param&egrave;tres sauvegard&eacute;s';
$lang['pdfheader'] = 'En-t&ecirc;te du PDF';
$lang['headerfontsize'] = 'Taille du texte de l&#039;en-t&ecirc;te';
$lang['contentfontsize'] = 'Taille du texte du contenu';
$lang['orientation'] = 'Orientation ';
$lang['landscape'] = 'Paysage';
$lang['portrait'] = 'Portrait ';
$lang['pdffooter'] = '';
$lang['pdffooterhelp'] = '';
$lang['template'] = 'Gabarit&nbsp;';
$lang['notemplatecontent'] = 'Aucun contenu dans le nouveau gabarit...';
$lang['defaultlinktext'] = ' Imprimer cette page';
$lang['defaultpdflinktext'] = 'G&eacute;n&eacute;rer un PDF';
$lang['backbuttontext'] = 'Retour';
$lang['overridestylereset'] = 'La feuille de style de remplacement a &eacute;t&eacute; r&eacute;initialis&eacute;e avec succ&egrave;s';
$lang['overridestylesaved'] = 'La feuille de style de remplacement a &eacute;t&eacute; sauvegard&eacute;e avec succ&egrave;s';
$lang['overridestyle'] = 'Feuille de style de remplacement';
$lang['confirmresetstyle'] = '&Ecirc;tes-vous de vouloir r&eacute;initialiser la feuille de style &agrave; son contenu par d&eacute;faut?';
$lang['stylesheet'] = 'Feuille de style&nbsp;';
$lang['help_text'] = 'Remplace le texte par d&eacute;faut du lien impression texte/PDF';
$lang['help_pdf'] = 'D&eacute;finir ce param&egrave;tre en &#039;true&#039; pour afficher un lien pour g&eacute;n&eacute;rer un fichier PDF du contenu principal, au lieu d&#039;imprimer';
$lang['help_popup'] = 'D&eacute;finir ce param&egrave;tre en &#039;true&#039; et la page &agrave; imprimer s&#039;ouvrira dans une autre fen&ecirc;tre';
$lang['help_script'] = 'D&eacute;finir ce param&egrave;tre en &#039;true&#039; et du code javascript sera utilis&eacute; pour ouvrir automatiquement le dialogue d&#039;impression';
$lang['help_showbutton'] = 'D&eacute;finir ce param&egrave;tre en &#039;true&#039; pour afficher un bouton graphique';
$lang['help_class'] = 'Classe pour le lien, par d&eacute;faut&nbsp; &#039;noprint&#039;';
$lang['help_src_img'] = 'Affiche ce fichier image au lieu du d&eacute;faut';
$lang['help_class_img'] = 'Classe de la balise <img> si le param&egrave;tre showbutton est d&eacute;fini';
$lang['help_more'] = 'Placer des options suppl&eacute;mentaires pour le <a>lien</a>';
$lang['help_onlyurl'] = 'G&eacute;n&egrave;re seulement l&#039;url, pas le lien complet';
$lang['changelog'] = '<ul>
<li>
<p>version 0.2.2 (silmarillion)</p>
<p>Mise &agrave; jour avec la derni&egrave;re version TCPDF</p>
</li>
<li>
<p>version 0.2.1 (calguy1000)</p>
<p>Ajout de plusieurs variables smarty dans la 
liste des gabarits, et nettoyage des avertissements.</p>
<p>Corrige une faute d&#039;orthographe causant un probl&egrave;me sur le module</p>
</li>
<li>
<p>version 0.2.0</p>
<p>Ajout du support pour g&eacute;n&eacute;rer des fichiers PDF</p>
</li>
<li>
<p>version 0.1.1</p>
<p>Permet qu&#039;une feuille de style sp&eacute;cifique remplace celles du syst&egrave;me</p>
</li>
<li>
<p>version 0.1.0</p>
<p>1ere version</p>
</li>
</ul>
';
$lang['help'] = '<b>Que fait ce module ?</b>
<br/>
Il permet d&#039;ins&eacute;rer un lien dans votre page ou votre gabarit pour afficher une page imprimable. Plusieurs param&egrave;tres peuvent &ecirc;tre utilis&eacute;s pour le lien afin de rendre l&#039;impression telle que vous la d&eacute;sirez. A partir de la version 0.2.0, un param&egrave;tre permet de g&eacute;n&eacute;rer la page en PDF &agrave; la vol&eacute;e (si PHP5 est install&eacute; sur votre serveur).
<br/>
Pour le moment le module permet l&#039;impression uniquement du contenu des pages du site, et non pas des redirections des modules.

<br/><br/>
<b>Comment l&#039;utiliser?</b>
<br/>
Installer le module, puis aller dans l&#039;administration et modifier les pr&eacute;f&eacute;rences des gabarits pour les liens d&#039;impression.
<br/>
Dans votre page o&ugrave; votre gabarit ins&eacute;rez &agrave; l&#039;endroit d&eacute;sir&eacute; cette synthaxe&nbsp;:
<pre>
{cms_module module=&#039;printing&#039; <i>params</i>}
</pre>
Et un lien s&#039;affichera dans vos pages.
<br/><br/>
<b>Notes&nbsp;:</b>
<br/>
<ul>
<li>La g&eacute;n&eacute;ration de PDF est exp&eacute;rimentale pour le moment.</li>
<li>La g&eacute;n&eacute;ration de PDF peut ne pas fonctionner sur des serveurs avec php 4.x, il est recommand&eacute; d&#039;encourager votre h&eacute;bergeur &agrave; mettre &agrave; jour PHP &agrave; la version 5, si vous voulez utiliser les PDF sur votre site.</li>
</ul>';
$lang['utma'] = '156861353.1880315836.1211623555.1211623555.1211623555.1';
$lang['utmc'] = '156861353';
$lang['utmz'] = '156861353.1211623555.1.1.utmccn=(direct)|utmcsr=(direct)|utmcmd=(none)';
$lang['utmb'] = '156861353';
?>