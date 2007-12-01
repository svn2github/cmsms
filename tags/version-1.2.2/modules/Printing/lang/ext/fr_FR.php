<?php
$lang['friendlyname'] = 'Impression customizable des pages';
$lang['description'] = 'Ce module permet de customizer l&#039;impression des pages pour CMSms. Vous pouvez choisir du texte ou du PDF suivant le lien.';
$lang['postinstall'] = 'Le module a &eacute;t&eacute; intall&eacute; avec succ&egrave;s';
$lang['confirmuninstall'] = '&Ecirc;tes-vous s&ucirc;r de vouloir d&eacute;sintaller le module ?';
$lang['postuninstall'] = 'Le module a &eacute;t&eacute; d&eacute;sintall&eacute; avec succ&egrave;s';
$lang['linktemplate'] = 'Gabarit de lien';
$lang['printtemplate'] = 'Gabarit impression';
$lang['pdftemplate'] = 'Gabarit PDF';
$lang['templatesaved'] = 'Le gabarit a &eacute;t&eacute; mis &agrave; jour avec succ&egrave;s';
$lang['templatereset'] = 'Le gabarit a &eacute;t&eacute; restaur&eacute; avec succ&egrave;s';
$lang['confirmresettemplate'] = '&Ecirc;tes-vous s&ucirc;r de vouloir restaur&eacute; le Gabarit &agrave; sa valeur par d&eacute;faut ?';
$lang['reset'] = 'Restaurer par d&eacute;faut';
$lang['save'] = 'Envoyer';
$lang['savetemplate'] = 'Envoyer';
$lang['savesettings'] = 'Envoyer';
$lang['settings'] = 'Ajustements';
$lang['settingssaved'] = 'Ajustements sauvegard&eacute;s';
$lang['pdfheader'] = 'Ent&ecirc;te du PDF';
$lang['headerfontsize'] = 'Taille caract&egrave;res ent&ecirc;te';
$lang['contentfontsize'] = 'Taille caract&egrave;res contenu';
$lang['orientation'] = 'Orientation';
$lang['landscape'] = 'Payasage';
$lang['portrait'] = 'Portrait';
$lang['pdffooter'] = '';
$lang['pdffooterhelp'] = '';
$lang['template'] = 'Gabarit&nbsp;';
$lang['notemplatecontent'] = 'Aucun contenu dans la gabarit...';
$lang['defaultlinktext'] = ' Imprimer cette page';
$lang['defaultpdflinktext'] = ' PDF';
$lang['backbuttontext'] = 'Retour';
$lang['overridestylereset'] = 'Feuille de style restaur&eacute;e avec succ&egrave;s';
$lang['overridestylesaved'] = 'Feuille de style a &eacute;t&eacute; mise &agrave; jour avec succ&egrave;s';
$lang['overridestyle'] = 'Feuille de style';
$lang['confirmresetstyle'] = '&Ecirc;tes-vous de vouloir restaurer la feuille de style &agrave; sa valeur par d&eacute;faut ?';
$lang['stylesheet'] = 'Feuille de style';
$lang['help_text'] = 'Remplace le texte par d&eacute;faut du lien impression texte/PDF';
$lang['help_pdf'] = 'Valeur &agrave; &#039;true&#039; montre un lien pour g&eacute;n&eacute;rer un fichier PDF de la page en remplacement de l&#039;impression';
$lang['help_popup'] = 'Valeur &agrave; &#039;true&#039; la page pour impression sera ouverte dans une nouvelle fen&ecirc;tre.';
$lang['help_script'] = 'Valeur &agrave; &#039;true&#039; la page utilisera javascript pour d&eacute;marrer l&#039;impression';
$lang['help_showbutton'] = 'Valeur &agrave; &#039;true&#039; pour avoir un bouton ic&ocirc;ne';
$lang['help_class'] = 'La &#039;class&#039; du lien, par d&eacute;faut &#039;noprint';
$lang['help_src_img'] = 'Montre une image en remplacement du texte par d&eacute;faut';
$lang['help_class_img'] = 'La &#039;Class&#039; du tag <img> si &#039;showbutton&#039; est &#039;true&#039;';
$lang['help_more'] = 'Montre une option additionnelle en remplacement du lien &amp;lt;a&amp;gt;';
$lang['help_onlyurl'] = 'Affiche le lien en url, sinon le lien complet';
$lang['changelog'] = '<ul>
<li>
<p>version 0.2.1 (calguy1000)</p>
<p>Ajout de plusieurs variables smarty dans la 
liste des gabarits, et nettoyage de warning.</p>
<p>Fixe typo causant un probl&egrave;me sur le module</p>
</li>
<li>
<p>version 0.2.0</p>
<p>Ajout du support pour g&eacute;n&eacute;rer des fichiers PDF</p>
</li>
<li>
<p>version 0.1.1</p>
<p>Cr&eacute;e une feuille de style sp&eacute;cifique en suppl&eacute;ment des feuiles du syst&egrave;me CMSms</p>
</li>
<li>
<p>version 0.1.0</p>
<p>1ere version</p>
</li>
</ul>
';
$lang['help'] = '<b>Que fait ce module ?</b>
<br/>
Il permet d&#039;ins&eacute;rer un lien dans votre page ou votre gabarit pour afficher une page imprimable. Plusieurs param&egrave;tres peuvent &ecirc;tre utiliser pour le lien afin de rendre l&#039;impression plus pr&eacute;sentable. A partir de la version 0.2.0, un param&egrave;tre permet de g&eacute;n&eacute;rer la page en PDF (Si utilisation de PHP5).
<br/>
Pour le moment le module permet l&#039;impression uniquement du contenu des pages du site, et non pas des modules.

<br/><br/>
<b>Comment l&#039;utiliser ?</b>
<br/>
Installer le module, puis allez dans l&#039;administration et modifier les pr&eacute;f&eacute;rences des gabarits pour les liens d&#039;impression.
<br/>
Dans votre page ou votre gabarit ins&eacute;r&eacute; &agrave; l&#039;endroit d&eacute;sir&eacute; cette synthaxe :
<pre>
{cms_module module=&#039;printing&#039; <i>param&egrave;tres</i>}
</pre>
Et un lien s&#039;affichera dans vos pages.
<br/><br/>
<b>Notes :</b>
<br/>
<ul>
<li>La g&eacute;n&eacute;ration de PDF est experimentale pour le moment.</li>
<li>La g&eacute;n&eacute;ration de PDF peut ne pas fonctionner sur des serveurs avec php 4.x, il est recommand&eacute; d&#039;encourager votre hebergeur &agrave; upgrader en php5, si vous voulez utiliser les PDF sur vos pages.</li>
</ul>';
$lang['utma'] = '156861353.1178352953.1195759514.1195759514.1195759514.1';
$lang['utmc'] = '156861353';
$lang['utmz'] = '156861353.1195759514.1.1.utmccn=(direct)|utmcsr=(direct)|utmcmd=(none)';
$lang['utmb'] = '156861353';
?>