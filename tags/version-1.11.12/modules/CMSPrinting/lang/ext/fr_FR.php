<?php
$lang['friendlyname'] = 'Impression CMSPrinting';
$lang['description'] = 'Ce module permet de personnaliser l\'affichage de pages pour impression pour CMSMS™.';
$lang['postinstall'] = 'Le module a été correctement installé';
$lang['confirmuninstall'] = 'Êtes-vous sûr(e) de vouloir désinstaller le module ?';
$lang['postuninstall'] = 'Le module a été correctement désinstallé';
$lang['linktemplate'] = 'Gabarit de lien';
$lang['printtemplate'] = 'Gabarit d\'impression';
$lang['templatesaved'] = 'Le gabarit a été correctement mis à jour';
$lang['templatereset'] = 'Le gabarit a été correctement réinitialisé';
$lang['confirmresettemplate'] = 'Êtes-vous sûr de vouloir réinitialiser le gabarit à son contenu par défaut ?';
$lang['reset'] = 'Réinitialiser par défaut';
$lang['save'] = 'Sauvegarder';
$lang['upgraded'] = 'A été mis à jour à la version %s';
$lang['savetemplate'] = 'Sauvegarder le gabarit';
$lang['savesettings'] = 'Sauvegarder les paramètres';
$lang['template'] = 'Gabarit&nbsp;';
$lang['notemplatecontent'] = 'Aucun contenu dans le nouveau gabarit...';
$lang['defaultlinktext'] = 'Imprimer cette page';
$lang['backbuttontext'] = 'Retour';
$lang['overridestylereset'] = 'La feuille de style de remplacement a été correctement réinitialisée';
$lang['overridestylesaved'] = 'La feuille de style de remplacement a été correctement sauvegardée';
$lang['overridestyle'] = 'Feuille de style de remplacement';
$lang['confirmresetstyle'] = 'Êtes-vous sûr(e) de vouloir réinitialiser la feuille de style à son contenu par défaut ?';
$lang['stylesheet'] = 'Feuille de style&nbsp;';
$lang['help_text'] = 'Remplacer le texte par défaut du lien impression texte';
$lang['help_popup'] = 'Définir ce paramètre en \'true\' et la page à imprimer s\'ouvrira dans une autre fenêtre';
$lang['help_script'] = 'Définir ce paramètre en \'true\' et du code javaScript sera utilisé pour ouvrir automatiquement le dialogue d\'impression';
$lang['help_showbutton'] = 'Définir ce paramètre en \'true\' pour afficher un bouton graphique';
$lang['help_class'] = 'Classe pour le lien, par défaut&nbsp; \'noprint\'';
$lang['help_src_img'] = 'Afficher ce fichier image au lieu de la valeur par défaut';
$lang['help_class_img'] = 'Classe de la balise img si le paramètre showbutton est défini';
$lang['help_more'] = 'Placer des options supplémentaires pour la balise < a >lien< /a >';
$lang['help_onlyurl'] = 'Génèrer seulement l\'url, pas le lien complet';
$lang['help_includetemplate'] = 'Si définies sur \'true\', ces options vont faire l\'impression/pdf de l\'ensemble du gabarit et pas seulement du contenu principal. Cela nécessitera probablement des styles CSS spécifiques à l\'impression et le Mediatype \'Print\' activé.';
$lang['help'] = '<b>Que fait ce module ?</b>
<br />
Il permet d\'insérer un lien dans votre page ou votre gabarit pour afficher une page imprimable.
<br />
Notez que, sauf si le paramètre <i>includetemplate = true</i> est utilisé, le module ne permet que l\'impression du contenu des pages du site.
<br /><br />
<b>Comment l\'utiliser ?</b>
<br />
Installez le module, puis allez dans son interface d\'administration et vérifiez/modifiez les gabarits pour les liens et pour la page d\'impression.
<br />
Dans votre page ou votre gabarit insérez à l\'endroit désiré cette syntaxe &nbsp;:<br />
<pre>
{cms_module module=\'CMSPrinting\' <i>params</i>}
</pre>
<br />ou simplement,<br />
<pre>
{print <i>params</i>}
</pre>
<br />pour utiliser le plugin d\'impression.
<br />';
?>