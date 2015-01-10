<?php
$lang['help_idlist'] = 'Applicable uniquement à l\'action par défaut (Affiche le sommaire). Ce paramètre accepte une liste séparée par des virgules des ID numériques des articles et permet de filtrer davantage d\'articles que "articleid". La sortie de la liste actuelle des articles est toujours soumise à l\'état de l\'article, à date d\'expiration, et à d\'autres paramètres.';
$lang['error_nooptions'] = 'Pas d\'option spécifiée pour la définition de champ';
$lang['dropdown'] = 'Liste déroulante';
$lang['info_public'] = 'Seuls les champs publics sont disponibles pour l\'édition sur le site (frontend), ou pour l\'affichage du résumé ou du détail.';
$lang['info_expired_viewable'] = 'Si activée, les articles périmés peuvent être visualisées en mode détail (ce qui est l\'ancienne fonctionnalité). Le paramètre showall peut être utilisé avec l\'URL (si vous n\'utilisez pas les pretty URLs jolies)pour indiquer également que les articles périmés peuvent être consultés.';
$lang['expired_viewable'] = 'Articles expirés peuvant être consultés dans la vue de détail';
$lang['error_insufficientparams'] = 'Paramètres insuffisant (ou vide)';
$lang['error_duplicatename'] = 'Un élément avec ce nom existe déjà';
$lang['detail_page'] = 'Page de détail&nbsp;';
$lang['detail_template'] = 'Gabarit du détail&nbsp;';
$lang['warning_preview'] = 'Attention : cette page d\'aperçu se comporte comme une fenêtre permettant de naviguer loin de cette page aperçu originale. Toutefois, si vous faites cela, attention aux comportements inattendus ! <strong>Note :</strong> La prévisualisation ne tient pas compte des fichiers pouvant être en attente d\'upload.';
$lang['article'] = 'Article&nbsp;';
$lang['preview'] = 'Aperçu';
$lang['info_detail_returnid'] = 'Cette préférence est utilisée pour déterminée si une page (et donc un gabarit) sert pour l\'affichage des pages de détails. Les URLs individualisées ne fonctionneront pas si ce paramètre n\'est pas défini pour une page valide. En outre, si cette préférence est activée, et aucun paramètre page de détail n\'est fourni sur la balise {news}, alors cette valeur sera utilisée pour des liens pages de détails.';
$lang['title_detail_returnid'] = 'Page par défaut à utiliser pour des vues de détail';
$lang['title_submission_settings'] = 'Paramètres de soumission des articles (News)';
$lang['title_fesubmit_settings'] = 'Paramètres de soumission via le Frontend';
$lang['title_notification_settings'] = 'Paramètres des notifications';
$lang['title_detail_settings'] = 'Paramétres d\'affichage des détails';
$lang['error_invalidurl'] = 'URL incorrecte <em>(peut-être déjà utilisée, ou il y a des caractères non valides)</em>';
$lang['url'] = 'URL&nbsp;';
$lang['expired_searchable'] = 'Les articles expirés peuvent apparaître dans les résultats de recherche&nbsp;';
$lang['helpshowall'] = 'Si positionné à 1 : affiche tous les articles, quelle que soit la date de fin';
$lang['error_invaliddates'] = 'Une ou plusieurs dates entrées sont invalides';
$lang['notify_n_draft_items_sub'] = '%d article(s)';
$lang['notify_n_draft_items'] = 'Vous avez %s article(s) non publié(s)';
$lang['unlimited'] = 'Sans limite';
$lang['none'] = 'Aucun';
$lang['anonymous'] = 'Anonyme';
$lang['unknown'] = 'Inconnu';
$lang['fesubmit_redirect'] = 'PageID ou alias où se fera la redirection après qu\'un article ait été soumis via l\'action fesubmit&nbsp;';
$lang['allow_summary_wysiwyg'] = 'Autoriser l\'utilisation de l\'éditeur WYSIWYG dans le sommaire&nbsp;';
$lang['title_browsecat_template'] = 'Gabarit de catégories';
$lang['title_browsecat_sysdefault'] = 'Gabarit de catégories par défaut';
$lang['browsecattemplate'] = 'Gabarit de catégories';
$lang['error_filesize'] = 'Un fichier uploadé excède la taille maximum autorisée';
$lang['post_date_desc'] = 'Date article posté descendante';
$lang['post_date_asc'] = 'Date article posté ascendante';
$lang['expiry_date_desc'] = 'Date expiration descendante';
$lang['expiry_date_asc'] = 'Date expiration ascendante';
$lang['title_desc'] = 'Titre descendant';
$lang['title_asc'] = 'Titre ascendant';
$lang['status_desc'] = 'Statut descendant';
$lang['status_asc'] = 'Statut ascendant';
$lang['fesubmit_status'] = 'Le statut des articles soumis via les pages du site (frontend)&nbsp;';
$lang['error_invalidfiletype'] = 'Impossible de télécharger ce type de fichier';
$lang['error_upload'] = 'Il y a eu un problème lors du téléchargement d\'un fichier';
$lang['error_movefile'] = 'Impossible de créer ce fichier : %s';
$lang['error_mkdir'] = 'Impossible de créer ce répertoire : %s';
$lang['expiry_interval'] = 'Le nombre de jours (par défaut) avant qu\'un article expire (si "Utiliser la date d\'expiration" est sélectionnée)&nbsp;';
$lang['removed'] = 'Supprimé';
$lang['msg_contenttype_removed'] = 'Le type de contenu News a été supprimé. Merci de remplacer les tags {news} avec les paramètres appropriés dans vos gabarits ou vos pages pour remplacer cette fonctionnalité.';
$lang['delete_selected'] = 'Supprimer les articles sélectionnés';
$lang['areyousure_deletemultiple'] = 'Êtes-vous sûr(e) de vouloir supprimer tous ces articles&nbsp;?\nCette action est définitive&nbsp;!';
$lang['error_templatenamexists'] = 'Un gabarit de ce nom existe déjà';
$lang['error_noarticlesselected'] = 'Aucun article sélectionné';
$lang['reassign_category'] = 'Changer la catégorie par&nbsp;';
$lang['select'] = 'Sélectionner';
$lang['approve'] = 'Mettre le statut à \'Publié\'';
$lang['revert'] = 'Mettre le statut à \'Ébauche\'';
$lang['hide_summary_field'] = 'Cacher le champ sommaire lors de l\'ajout ou de la modification d\'articles&nbsp;';
$lang['textbox'] = 'Champ de texte';
$lang['checkbox'] = 'Case à cocher';
$lang['textarea'] = 'Zone de texte';
$lang['file'] = 'Fichier';
$lang['auto_create_thumbnails'] = 'Création automatique de fichiers "vignettes" pour les fichiers avec ces extensions';
$lang['allowed_upload_types'] = 'Autoriser seulement le téléchargement des fichiers avec ces extensions&nbsp;';
$lang['fielddefupdated'] = 'La définition du champ a été mise à jour avec succès.';
$lang['editfielddef'] = 'Éditer la définition du champ';
$lang['up'] = 'Haut';
$lang['down'] = 'Bas';
$lang['fielddefdeleted'] = 'La définition du champ a été supprimée avec succès.';
$lang['nameexists'] = 'Un champ de ce nom existe déjà';
$lang['notanumber'] = 'La longueur maximale n\'est PAS un nombre';
$lang['fielddef'] = 'Définition champ';
$lang['fielddefadded'] = 'La définition du champ a été ajoutée avec succès.';
$lang['public'] = 'Publique&nbsp;';
$lang['type'] = 'Type&nbsp;';
$lang['info_maxlength'] = 'Longueur maximale uniquement pour champ de texte.';
$lang['maxlength'] = 'Longueur maximale&nbsp;';
$lang['addfielddef'] = 'Ajouter une définition de champ';
$lang['customfields'] = 'Définition des champs';
$lang['deprecated'] = 'Non supporté';
$lang['subject_newnews'] = 'Un nouvel article a été posté';
$lang['email_subject'] = 'Le sujet du mail de notification&nbsp;';
$lang['email_template'] = 'Le format du message par email&nbsp;';
$lang['formsubmit_emailaddress'] = 'Adresse email pour recevoir les notifications des articles soumis&nbsp;';
$lang['extra'] = 'Extra&nbsp;';
$lang['uploadscategory'] = 'Catégorie téléchargements';
$lang['title_available_templates'] = 'Gabarits disponibles';
$lang['resettodefault'] = 'Restaurer les paramètres par défaut';
$lang['title_form_template'] = 'Éditeur du gabarit soumission d\'article via les pages du site (frontend)';
$lang['title_detail_template'] = 'Éditeur du gabarit du détail';
$lang['title_summary_template'] = 'Éditeur du gabarit du sommaire';
$lang['prompt_templatename'] = 'Nom du gabarit&nbsp;';
$lang['prompt_template'] = 'Source du gabarit&nbsp;';
$lang['title_form_sysdefault'] = 'Gabarit de soumission article par défaut (frontend)';
$lang['title_summary_sysdefault'] = 'Gabarit du sommaire par défaut';
$lang['title_detail_sysdefault'] = 'Gabarit du détail par défaut';
$lang['info_sysdefault2'] = '<strong>Note :</strong> cette page contient des zones d\'édition des gabarits qui sont disponibles quand vous créez un \'Nouveau\' gabarit Sommaire, Détail ou Soumission d\'article. Le fait de cliquer sur \'Envoyer\' les données de cette page <strong>n\'aura aucun effet immédiat sur l\'affichage déjà existant</strong>.';
$lang['info_sysdefault'] = '(le gabarit utilisé par défaut quand un nouveau gabarit est sélectionné)';
$lang['template'] = 'Gabarit&nbsp;';
$lang['prompt_name'] = 'Nom';
$lang['prompt_default'] = 'Défaut';
$lang['prompt_newtemplate'] = 'Créer un nouveau gabarit';
$lang['help_pagelimit'] = 'Nombre maximal d\'articles affichés (par page). Si ce paramètre n\'est pas défini, tous les articles sont affichés. Si ce paramètre est défini, et que le nombre d\'articles est supérieur, les textes et les liens seront affichés pour permettre le défilement des résultats.';
$lang['prompt_page'] = 'Page&nbsp;';
$lang['firstpage'] = '<<';
$lang['prevpage'] = '<';
$lang['nextpage'] = '>';
$lang['lastpage'] = '>>';
$lang['prompt_of'] = 'sur';
$lang['prompt_pagelimit'] = 'Nombre par page&nbsp;';
$lang['prompt_sorting'] = 'Trié par&nbsp;';
$lang['title_filter'] = 'Filtres';
$lang['published'] = 'Publié';
$lang['draft'] = 'Ébauche';
$lang['expired'] = 'Expiré';
$lang['author'] = 'Auteur&nbsp;';
$lang['sysdefaults'] = 'Restaurer les paramètres par défaut';
$lang['restoretodefaultsmsg'] = 'Cette opération restaurera les gabarits par défaut. Êtes-vous sûr(e) de vouloir continuer&nbsp;?';
$lang['addarticle'] = 'Ajouter un article';
$lang['articleadded'] = 'L\'article a été ajouté avec succès.';
$lang['articleupdated'] = 'L\'article a été mis à jour avec succès.';
$lang['articledeleted'] = 'L\'article a été supprimé avec succès.';
$lang['articlesubmitted'] = 'L\'article a été soumis avec succès.';
$lang['addcategory'] = 'Ajouter une catégorie';
$lang['categoryadded'] = 'La catégorie a été ajoutée avec succès.';
$lang['categoryupdated'] = 'La catégorie a été mise à jour avec succès.';
$lang['categorydeleted'] = 'La catégorie a été supprimée avec succès.';
$lang['addnewsitem'] = 'Ajouter un article';
$lang['allcategories'] = 'Toutes les catégories';
$lang['allentries'] = 'Toutes les entrées';
$lang['areyousure'] = 'Êtes-vous sûr(e) de vouloir supprimer&nbsp;?';
$lang['articles'] = 'Articles&nbsp;';
$lang['cancel'] = 'Annuler';
$lang['category'] = 'Catégorie&nbsp;';
$lang['categories'] = 'Catégories';
$lang['default_category'] = 'Catégorie par défaut&nbsp;';
$lang['content'] = 'Contenu&nbsp;';
$lang['dateformat'] = '%s pas dans un format valide yyyy-mm-dd hh:mm:ss';
$lang['delete'] = 'Effacer';
$lang['description'] = 'Ajout, édition et suppression des articles';
$lang['formtemplate'] = 'Gabarit soumission article';
$lang['detailtemplate'] = 'Gabarit du détail article';
$lang['default_templates'] = 'Gabarits par défaut';
$lang['detailtemplateupdated'] = 'Le gabarit de l\'affichage du détail de l\'article a été sauvegardé dans la base de données.';
$lang['displaytemplate'] = 'Afficher le gabarit';
$lang['edit'] = 'Éditer';
$lang['enddate'] = 'Date de fin&nbsp;';
$lang['endrequiresstart'] = 'Entrer une date de fin nécessite qu\'une date de début soit également entrée';
$lang['entries'] = '%s entrées';
$lang['status'] = 'Statut';
$lang['expiry'] = 'Expiration';
$lang['filter'] = 'Filtre';
$lang['more'] = 'Plus';
$lang['category_label'] = 'Catégorie&nbsp;:';
$lang['author_label'] = 'Posté par&nbsp;:';
$lang['extra_label'] = 'Extra :';
$lang['moretext'] = 'Texte pour';
$lang['name'] = 'Nom&nbsp;';
$lang['news'] = 'Articles';
$lang['news_return'] = 'Retour';
$lang['newcategory'] = 'Nouvelle catégorie';
$lang['needpermission'] = 'Vous devez avoir la permission \'%s\' pour exécuter cette action.';
$lang['nocategorygiven'] = 'Aucune catégorie entrée';
$lang['startdatetoolate'] = 'la date de début est passée (après la date de fin ?)';
$lang['nocontentgiven'] = 'Aucun contenu entré';
$lang['noitemsfound'] = '<strong>Aucun</strong> objet trouvé pour cette catégorie: %s';
$lang['nopostdategiven'] = 'Il manque la date à laquelle l\'article sera posté';
$lang['note'] = '<em>Note :</em> les dates doivent être entrées dans ce format \'yyyy-mm-dd hh:mm:ss\'.';
$lang['notitlegiven'] = 'Aucun titre n\'est entré';
$lang['nonamegiven'] = 'Aucun nom n\'a été donné';
$lang['numbertodisplay'] = 'Nombre à afficher (vide = toutes les entrées)&nbsp;';
$lang['print'] = 'Imprimer';
$lang['postdate'] = 'Date à laquelle l\'article sera posté&nbsp;';
$lang['postinstall'] = 'Assurez-vous que les utilisateurs qui administreront les articles aient la permission "Modify News".';
$lang['selectcategory'] = 'Sélection de catégorie';
$lang['showchildcategories'] = 'Afficher les sous-catégories&nbsp;';
$lang['sortascending'] = 'Tri ascendant&nbsp;';
$lang['startdate'] = 'Date de début&nbsp;';
$lang['startoffset'] = 'Commence l\'affichage au énième article&nbsp;';
$lang['startrequiresend'] = 'Entrer une date de début nécessite qu\'une date de fin soit également entrée';
$lang['apply'] = 'Appliquer';
$lang['submit'] = 'Envoyer';
$lang['summary'] = 'Sommaire&nbsp;';
$lang['summarytemplate'] = 'Gabarit du sommaire article';
$lang['summarytemplateupdated'] = 'Le gabarit de l\'affichage du sommaire de l\'article a été mis à jour avec succès';
$lang['title'] = 'Titre&nbsp;';
$lang['options'] = 'Options&nbsp;';
$lang['optionsupdated'] = 'Les options ont été mises à jour avec succès';
$lang['useexpiration'] = 'Utiliser la date d\'expiration&nbsp;';
$lang['eventdesc-NewsArticleAdded'] = 'Envoyé quand un article est ajouté';
$lang['eventhelp-NewsArticleAdded'] = '<p>Envoyé quand un article est ajouté</p>
<h4>Paramètres</h4>
<ul>
<li>"news_id" - Id de l\'article</li>
<li>"category_id" - Id de la catégorie de cet article</li>
<li>"title" - Titre de l\'article</li>
<li>"content" - Contenu de l\'article</li>
<li>"summary" - Sommaire de l\'article</li>
<li>"status" - Statut de l\'article ("draft" or "published")</li>
<li>"start_time" - Date de début de publication de l\'article</li>
<li>"end_time" - Date de fin de publication de l\'article</li>
<li>"useexp" - Si la date d\'expiration doit être ignorée ou pas</li>
</ul>';
$lang['eventdesc-NewsArticleEdited'] = 'Envoyé quand un article est édité';
$lang['eventhelp-NewsArticleEdited'] = '<p>Envoyé quand un article est édité</p>
<h4>Paramètres</h4>
<ul>
<li>"news_id" - Id de l\'article</li>
<li>"category_id" - Id de la catégorie de cet article</li>
<li>"title" - Titre de l\'article</li>
<li>"content" - Contenu de l\'article</li>
<li>"summary" - Sommaire de l\'article</li>
<li>"status" - Statut de l\'article ("draft" or "published")</li>
<li>"start_time" - Date de début de publication de l\'article</li>
<li>"end_time" - Date de fin de publication de l\'article</li>
<li>"useexp" - Si la date d\'expiration doit être ignorée ou pas</li>
</ul>
<p><strong>Note :</strong> Tous les paramètres peuvent ne pas être présents lorsque cet événement est envoyé..</p>';
$lang['eventdesc-NewsArticleDeleted'] = 'Envoyé quand un article est supprimé';
$lang['eventhelp-NewsArticleDeleted'] = '<p>Envoyé quand un article est supprimé</p>
<h4>Paramètres</h4>
<ul>
<li>"news_id" - Id de l\'article</li>
</ul>';
$lang['eventdesc-NewsCategoryAdded'] = 'Envoyé quand une catégorie est ajoutée';
$lang['eventhelp-NewsCategoryAdded'] = '<p>Envoyé quand une catégorie est ajoutée</p>
<h4>Paramètres</h4>
<ul>
<li>"category_id" - Id de la catégorie</li>
<li>"name" - Nom de la catégorie</li>
</ul>';
$lang['eventdesc-NewsCategoryEdited'] = 'Envoyé quand une catégorie est éditée';
$lang['eventhelp-NewsCategoryEdited'] = '<p>Envoyé quand une catégorie est éditée</p>
<h4>Paramètres</h4>
<ul>
<li>"category_id" - Id de la catégorie</li>
<li>"name" - Nom de la catégorie</li>
<li>"origname" - Nom original de la catégorie</li>
</ul>';
$lang['eventdesc-NewsCategoryDeleted'] = 'Envoyé quand une catégorie est supprimée';
$lang['eventhelp-NewsCategoryDeleted'] = '<p>Envoyé quand une catégorie est supprimée</p>
<h4>Paramètres</h4>
<ul>
<li>"category_id" - Id de la catégorie</li>
<li>"name" - Nom de la catégorie supprimée</li>
</ul>';
$lang['help_articleid'] = 'Ce paramètre est applicable uniquement à la vue de détail. Il permet de spécifier que l\'article sera afficher en mode détail. Si la valeur utilisée est -1, le système affichera l\'article le plus récemment, publié, mais non expiré.';
$lang['helpnumber'] = 'Le nombre maximal d\'articles à afficher -- laisser ce paramètre vide affichera tous les articles. C\'est identique au paramètre "pagelimit".';
$lang['helpstart'] = 'Commence au énième article -- laisser ce paramètre vide commencera l\'affichage au premier article';
$lang['helpcategory'] = 'Affiche les articles de cette catégorie seulement. Utiliser * pour afficher les sous-catégories. Des catégories multiples peuvent être affichées en les séparant par une virgule. Laisser ce paramètre vide affichera tous les articles.';
$lang['helpmoretext'] = 'Texte à afficher à la fin d\'un article qui dépasse la longueur définie du sommaire. Par défaut = "Plus"';
$lang['helpsummarytemplate'] = 'Utilise la base de donnée pour afficher le formulaire de soumission du sommaire des articles. Ce gabarit doit exister et, est visible dans l\'onglet \'Gabarit du sommaire article\' de Contenu/Articles, et n\'est pas nécessaire par défaut. Si ce paramètre n\'est pas spécifié le gabarit par défaut est utilisé.';
$lang['helpformtemplate'] = 'Utilise la base de donnée pour afficher le formulaire de soumission de l\'article. Ce gabarit doit exister et, est visible dans l\'onglet \'Gabarit soumission article\' de Contenu/Articles, et n\'est pas nécessaire par défaut. Si ce paramètre n\'est pas spécifié le gabarit par défaut est utilisé.';
$lang['helpbrowsecattemplate'] = 'Utilise la base de donnée pour afficher les gabarits de catégories. Ce gabarit doit exister et, est visible dans l\'onglet \'Gabarit de catégories\' de Contenu/Articles, et n\'est pas nécessaire par défaut. Si ce paramètre n\'est pas spécifié le gabarit par défaut est utilisé.';
$lang['helpdetailtemplate'] = 'Utilise la base de donnée pour afficher le formulaire de soumission du détail des articles.  Ce gabarit doit exister et, est visible dans l\'onglet \'Gabarit du détail article\' de Contenu/Articles, et n\'est pas nécessaire par défaut. Si ce paramètre n\'est pas spécifié le gabarit par défaut est utilisé.';
$lang['helpsortby'] = 'Champ sur lequel trier les articles.  Les options sont : "news_date", "summary", "news_data", "news_category", "news_title", "news_extra",  "end_time", "start_time",  "random".  Par défaut: "news_date".  Si "random" est spécifié, le critère de tri est ignoré.';
$lang['helpsortasc'] = 'Trie les articles dans un ordre de date ascendant plutôt que descendant. Par défaut: descendant.';
$lang['helpdetailpage'] = 'Page dans laquelle afficher le détail des articles. Vous pouvez entrer soit un alias, soit un ID de page. Utile pour permettre d\'afficher le détail de l\'article dans un gabarit de page différent de celui du sommaire.';
$lang['helpshowarchive'] = 'Afficher seulement les articles expirés.';
$lang['helpbrowsecat'] = 'Afficher une liste navigable de catégories';
$lang['helpaction'] = 'Outrepasse l\'action par défaut. Les valeurs possibles sont :
<ul>
<li>"detail" - pour afficher l\'article en mode détail.</li>
<li>"default" - pour afficher le sommaire de l\'article</li>
<li>"fesubmit" - <strong>Obsolète</strong> pour afficher le gabarit de soumission (frontend) d\'articles des utilisateurs dans les pages du site. Ajouter le <code>{cms_init_editor}</code> dans la section des méta-données pour initialiser l\'éditeur WYSIWYG sélectionné (Administration du site/Paramètres globaux/WYSIWYG de la partie publique).</li>
<li>"browsecat" - pour afficher une liste de catégories.</li>
</ul>';
$lang['help'] = '<h3>Notes Importantes</h3>
<p>la Version 2.9 a supprimé le format "formatpostdate" des gabarits, et a également supprimé le paramètre "dateformat". Vous devez utiliser le paramètre "cms_date_format" (comme indiqué dans les gabarits par défaut) pour les format des dates, et devrait utiliser entry->postdate au lieu de entry->formatpostdate dans vos gabarits.</p>
<h3>Que fait ce module ?</h3>
	<p>Articles (News en anglais) est un module qui sert à afficher des articles sur vos pages, de façon similaire à un blog, mais avec plus de fonctions ! Dès que le module est installé, une page de gestion des articles est ajoutée au menu d\'administration qui vous permettra de sélectionner ou ajouter des catégories d\'articles. Dès qu\'une catégorie d\'article est sélectionnée ou créée, une liste des articles pour cette catégorie est affichée. Depuis là, vous pouvez ajouter, éditer ou supprimer les articles dans cette catégorie.</p>
<h4>Champs personnalisés</h4>
<p>Le module permet de définir de nombreux champs personnalisés (y compris les fichiers et images) qui vous permettront de joindre des fichiers PDF ou de nombreuses images à vos articles.</p>
            <h4>Catégories</h4>
	<p>Le module News (Articles) fournit un mécanisme de catégories hiérarchiques de l\'organisation de vos articles. Un article ne peut être qu\'en un seul endroit dans la hiérarchie</p>
	<h4>Expiration et le statut</h4>
	<p>Chaque article peut avoir une option de date d\'expiration, qui n\'affichera plus l\'article sur votre page Web. En outre, les articles peuvent être marqués comme <em>brouillon</em> pour les supprimer définitivement de l\'affichage votre page Web</p>
	<h3>Sécurité</h3>
	<p>L\'utilisateur doit faire partie d\'un groupe avec la permission \'Modify News\' pour pouvoir ajouter, éditer ou supprimer des articles.</p>
<p>Pour supprimer les articles, l\'utilisateur doit faire partie d\'un groupe avec la permission \'Delete News Articles\'..</p>
	<p>Pour modifier la présentation des gabarits, l\'utilisateur doit faire partie d\'un groupe avec la permission "Modify Templates"</p>
	<p>Pour modifier les préférences globales du module, l\'utilisateur doit faire partie d\'un groupe avec la permission \'Modify Site Preferences\'.</p>
	<p>En plus, pour approuver les articles soumis par un visiteur sur la page du site (frontend) l\'utilisateur doit appartenir à un groupe avec la permission  \'Approve News\' .</p>
	<h3>Comment l\'utiliser&nbsp;?</h3>
	<p>La façon la plus facile de l\'utiliser est avec la balise wrapper {news} (englobe le module dans une simple balise pour simplifier la syntaxe).  Cela insèrera votre module dans votre gabarit ou votre page à l\'endroit désiré, et y affichera les articles.  Exemple de syntaxe : <code>{news number=\'5\'}</code></p>
<h3>Gabarits</h3>
	<p>Depuis la version 2.3 le module News peut utiliser différentes bases de données, et donc n\'utilise plus les fichiers de "templates". Les utilisateurs qui avaient des anciens fichiers gabarits doivent faire les modifications suivantes (pour chaque fichier gabarits) :</p>
<ul>
<li>Copier le fichier dans le presse papier</li>
<li>Créer un nouveau gabarit <em>(sommaire ou détail suivant le besoin)</em>. Donner le même nom au gabarit que l\'ancien nom du gabarits (y compris l\'extension .tpl), et coller le contenu depuis le presse papier.</li>
<li>Cliquer sur le bouton Envoyer</li>
</ul>
<p>Ces différentes étapes résolvent le problème de ces nouveaux gabarits afin d\'éviter les différentes erreurs de Smarty quand vous mettez à jour vers une version de CMS avec un module de News version 2.3 ou supérieure.</p>';
?>