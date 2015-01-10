<?php
$lang['admin']['msg_notimedifference'] = 'Aucune différence de date du système de fichiers trouvées';
$lang['admin']['error_timedifference'] = 'Date du système de fichiers différent du serveur';
$lang['admin']['server_time_diff'] = 'Vérification des différences de date du système de fichiers';
$lang['admin']['tz_offset'] = 'Décalage horaire';
$lang['admin']['gcb_name_help'] = '(Ne peut contenir que des lettres et des chiffres)&nbsp;';
$lang['admin']['pagedefaultsupdated'] = 'Paramètres de la page par défaut mis à jour';
$lang['admin']['help_function_module_available'] = '<h3>Que fait cette Balise ?</h3>
Une balise pour tester si un module donné (par nom) est installé
<h3>Comment l\'utiliser ?</h3>
<ul>
<li><strong>(requis)</strong> module - (string) Le nom du module.</li>
<li><em>(option)</em> assign - Assigne la sortie de la balise à la variable Smarty nommée.</li>
</ul>
<h3>Exemple:</h3>
{module_available module=\'News\' assign=\'havenews\'}{if \$havenews}{cms_module module=News}{/if}
<h3>Note :</h3>
<p>Vous ne pouvez pas utiliser la balise du module appelé. Ex : <em>{News}</em> dans cette expression</p>';
$lang['admin']['prettyurls_noeffect'] = 'Les Pretty URLs (mod_rewrite) ne sont pas configurées ... cette URL n\'aura aucun effet';
$lang['admin']['help_function_cms_lang_info'] = '<h3>Que fait cette Balise ?</h3>
<p>Cette balise retourne un objet contenant les informations que CMSMS a sur la langue sélectionnée. Cela peut inclure des informations de localisation, les codages, la langue, alias, etc...</p>
<h3>Comment l\'utiliser ?</h3>
<ul>
<li><em>(option)</em> lang - La langue qui retourne les informations. Si le paramètre "lang" n\'est pas spécifié alors l\'information pour le langage courant CMSMS est utilisé.</li>
<li><em>(option)</em> assign - Assigne la sortie de la balise à la variable Smarty nommée.</li>
</ul>
<h3>Exemple :</h3>
<pre>{cms_lang_info assign=\'nls\'}{$nls->locale()}</pre>
<h3>Voir aussi :</h3>
<p>La documentation de la classe CmsNls.</p>';
$lang['admin']['help_function_cms_set_language'] = '<h3>Que fait cette Balise ?</h3>
<p>Cette balise défini le langage courant pour une utilisation des chaînes de traduction et de mise en forme de la date à la langue désirée. La langue spécifiée doit être connue de CMSMS (Le fichier nls doit exister ). Lorsque cette fonction est appelée, (et à moins de substitution dans le fichier config.php) une tentative sera faite pour définir les paramètres régionaux depuis la variable PHP "locale" associée à la langue. La localisation de la langue doit être installé sur le serveur.</p>
<h3>Comment l\'utiliser ?</h3>
<ul>
<li><strong>(requis)</strong> lang - La langue souhaitée. La langue doit être connue à l\'installation de CMSMS (Le fichier nls doit exister).</li>
</ul>';
$lang['admin']['help_function_cms_get_language'] = '<h3>Que fait cette Balise ?</h3>
<p>Cette balise retourne le nom du langage courant CMSMS. La langue est utilisée pour les chaînes de traduction et de mise en forme la date.</p>
<h3>Comment l\'utiliser ?</h3>
<ul>
<li><em>(option)</em> assign - Assigne la sortie de la balise à la variable Smarty nommée.nes de traduction et de mise en forme la date.</p>
<h3>Comment l</h3>
<ul>';
$lang['admin']['help_modifier_cms_escape'] = '<h3>Que fait cette Balise ?</h3>
<p>Ce modificateur est utilisé pour échapper la chaîne dans une des nombreuses façons. Ceci peut être utilisé pour convertir la chaîne en plusieurs formats d\'affichage différents, ou pour les données entrées par l\'utilisateur avec des caractères spéciaux affichables sur une page Web standard.</p>
<h3>Comment l\'utiliser ?</h3>
<pre><code>{$une_variable_avec_texte|cms_escape[Type_échappement|[Jeu_de_caractères]}</code></pre>
<h4>Types d\'échappement valides : Note traduction à valider</h4>
<ul>
<li>html <em>(defaut)</em> - use htmlspecialchars - utlise htmlspecialchars.</li>
 <li>htmlall - use htmlentities - utlise htmlentities.</li>
<li>url - raw URL encode all entities - URL brute pour coder toutes les entités.</li>
<li>urlpathinfo - Similar to the URL escape type, but also encode /.</li>
<li>quotes - Escape unescaped single quotes - échappe les apostrophes.</li>
<li>hex - Escape every character into hex - échappe les caractères en hexadécimal.</li>
<li>hexentity - Hex encode every character - encode en hexadécimal chaque caractère.</li>
<li>decentity - Decimal encode every character - encode en décimal chaque caractère.</li>
<li>javascript - Escape quotes, backslashes, newlines etc - échappe les quotes, backslashes, newlines, ... .</li>
<li>mail - Encode an email address into something that is safe to display - encode une adresse email dans une chaîne sûre pour l\'affichage. </li>
<li>nonstd - Escape non standard characters, such as document quotes - encode des caractères non standard.</li>
</ul>
<h4>Jeu de caractères :</h4>
<p>Si le jeu de caractères n\'est pas spécifié, UTF-8 est utilisé. Le jeu de caractères est seulement applicable au "html" et au type d\'échappement "htmlall".</p>';
$lang['admin']['help_modifier_cms_date_format'] = '<h3>Que fait cette Balise ?</h3>
 <p>Ce modificateur est utilisé pour formater des dates dans un format adapté. Il utilise les paramètres standard de "strftime". Si aucune chaîne de format est spécifié, le système utilisera le "Format de la date" dans "Mon compte/Préférences utilisateur" (pour les utilisateurs connectés) ou format des dates du système.</p>
 <p>Ce modificateur est capable de comprendre les dates dans de nombreux formats. Exemple : date-time strings output from the database or integer timestamps generated by the time() function.</p>
<h3>Comment l\'utiliser ?</h3>
<pre><code>{$une_variable_date|cms_date_format[format de chaîne]}</code></pre>
<h3>Exemple :</h3>
<pre><code>{\'2012-03-24 22:44:22\'|cms_date_format}</code></pre>';
$lang['admin']['help_modifier_summarize'] = '<h3>Que fait cette Balise ?</h3>
<p>Ce modificateur est utilisé pour tronquer une longue séquence de texte à un nombre limité de "mots".</p>
<h3>Comment l\'utiliser ?</h3>
<pre><code>{$une_variable_avec_long_texte|summarize:nombre}</code></pre>
<h3>Exemple :</h3>
<p>L\'exemple suivant supprime tous les balises html du contenu et le tronque après 50 mots.</p>
<pre><code>{content|strip_tags|summarize:50}</code></pre>';
$lang['admin']['module_param_lang'] = '<strong>obsolète</strong> - Remplace le langage courant qui est utilisé pour sélectionner les chaînes traduites. Plus utilisé depuis version 1.11';
$lang['admin']['server_db_grants'] = 'Privilèges d\'accès à la base de données';
$lang['admin']['error_nograntall_found'] = 'Impossible de trouver un privilège "GRANT ALL".  Cela peut signifier que vous pourriez avoir des problèmes pour installer ou retirer des modules, ou encore l \'ajout et la suppression d\'éléments, y compris les pages.';
$lang['admin']['msg_grantall_found'] = 'Trouvé un privilège "GRANT ALL" qui semble être adapté';
$lang['admin']['curlversion'] = 'Test de la version de cURL';
$lang['admin']['curl'] = 'Test pour la bibliothèque cURL';
$lang['admin']['test_curl'] = 'Test de la disponibilité de cURL';
$lang['admin']['test_curlversion'] = 'Test de la version de cURL';
$lang['admin']['curl_versionstr'] = 'version %s, la version minimale recommandée est %s';
$lang['admin']['lines_in_error'] = '%d lignes avec erreurs';
$lang['admin']['no_files_scanned'] = 'Aucun fichier scanné au cours du processus de vérification (le fichier est peut-être invalide).';
$lang['admin']['stylesheetnotfound'] = 'Feuille de style %d non trouvée';
$lang['admin']['sysmain_updateurls'] = 'Mise à jour de la table routes&nbsp;';
$lang['admin']['sysmain_confirmupdateurls'] = 'Êtes-vous sûr(e) de rafraichir la table routes ?';
$lang['admin']['routesrebuilt'] = 'La table routes est reconstruite';
$lang['admin']['text_changeowner'] = 'Changer les pages sélectionnées pour un autre propriétaire';
$lang['admin']['changeowner'] = 'Modifiez le propriétaire';
$lang['admin']['xmlreader_class'] = 'Vérification si la classe XMLReader existe';
$lang['admin']['info_smarty_cacheudt'] = 'Si activé, tous les appels vers les balises définies par l\'utilisateur seront mis en cache. Cela sera utile pour les balises qui affichent la sortie de requêtes de bases de données. Vous pouvez désactiver le cache en utilisant le paramètre nocache dans l\'appel de la balise utilisateur.  Exemple : <code>{mabalise_utilisateur nocache}</code>';
$lang['admin']['prompt_smarty_cacheudt'] = 'Cache des appels balises utilisateur';
$lang['admin']['always'] = 'Toujours';
$lang['admin']['never'] = 'Jamais';
$lang['admin']['moduledecides'] = 'Le module décide';
$lang['admin']['info_smarty_cachemodules'] = 'Sélectionnez comment mettre en cache les balises dans les divers gabarits qui font appel à des actions du module. Si activé, tous les appels module seront mis en cache. Cela peut avoir des effets négatifs sur certains modules, ou sur des modules avec des formulaires. <em> (Note : Vous pouvez remplacer cette utilisation avec l\'option nocache comme décrite dans le manuel Smarty)</em>. Si désactivé, aucun appel module sera mis en cache, ce qui peut avoir un effet sur la performance. Si vous sélectionnez la permission "Le module décide", la mise en cache ne sera pas effectuée. Le module peut passer outre, et vous pouvez désactiver le cache en utilisant le paramètre nocache lors de l\'appel du module.';
$lang['admin']['prompt_smarty_cachemodules'] = 'Appels du module de cache';
$lang['admin']['info_smarty_compilecheck'] = 'Si désactivé, Smarty ne vérifiera pas les dates de modification des gabarits pour voir si ils ont été modifiés. Cela peut améliorer considérablement les performances. Cependant effectuer tout changement de gabarit (ou même quelques changements de contenu) peut exiger une vidange du cache.';
$lang['admin']['prompt_smarty_compilecheck'] = 'Faire une vérification de compilation';
$lang['admin']['info_smarty_options'] = 'Les options suivantes ont un effet que lorsque les options de cache sont activées';
$lang['admin']['info_smarty_caching2'] = 'Si activé, la sortie des plugins sera mise en cache pour améliorer les performances. Cela s\'applique uniquement à la sortie sur les pages de contenu marquées comme cachable, et seulement pour les utilisateurs non-administrateurs. Remarque, cette fonctionnalité peut interférer avec le comportement de certains modules ou plugins, ou plugins qui utilisent des formulaires non-inline. <strong>Cette option aura aucun effet si vous utilisez PHP 5.2.x</strong>';
$lang['admin']['prompt_use_smartycaching'] = 'Activer le cache Smarty';
$lang['admin']['smarty_settings'] = 'Paramètres Smarty';
$lang['admin']['help_function_cms_init_editor'] = '<h3>Que fait cette Balise ?</h3>
  <p>Cette balise est utilisée pour initialiser les fonctionnalités WYSIWYG de l\'éditeur WYSIWYG pour la soumission des données du site Web (frontend). Ce module sélectionnera le WYSIWYG du site Web (frontend), s\'il a été demandé, et générera le <em>code HTML approprié (les liens JavaScript)</em> pour l\'affichage correct de la page chargée. Si aucun éditeur WYSIWYG n\'est demandé cette balise n\'aura aucun effet.</p>
<h3>Comment l\'utiliser ?</h3>
<p>La première chose que vous devez faire est de sélectionner l\'éditeur WYSIWYG à utiliser sur le site Web (frontend),dans la page Administration du site/Paramètres globaux/Paramètres généraux. Ensuite si vous utilisez l\'éditeur WYSIWYG sur de nombreuses pages, il peut être préférable de placer la balise {cms_init_editor} directement dans le gabarit des page. Si vous avez besoin de l\'éditeur WYSIWY dans un nombre limité de pages, vous pouvez juste placer la balise dans la page par l\'onglet Options "Métadonnées spécifiques pour cette page"</p>
<h3>Quels paramètres ?</h3>
<ul>
<li><em>(option)</em> wysiwyg - Indiquez le nom du module éditeur WYSIWYG pour initialiser. Utiliser avec prudence. Si vous avez un éditeur WYSIWYG différent que celui de sélectionné dans "Paramètres globaux/Paramètres généraux", cela forcera l\'éditeur spécifié pour être initialisé.</li>
<li><em>(option)</em> force=0 - Normalement, cette balise ne va pas initialiser l\'éditeur spécifié (ou détecté) s\'il n\'a pas été marqué comme "active".</li>
<li><em>(option)</em> assign - Assigne la sortie de la balise à la variable Smarty nommée.</li>
</ul>';
$lang['admin']['info_pagedefaults'] = 'Ce formulaire permet de spécifier diverses options pour les paramètres initiaux lors de la création des pages de nouveau contenu. Les éléments de cette page n\'ont pas d\'effet lors de l\'édition des pages déjà existantes.';
$lang['admin']['default_contenttype'] = 'Type de contenu par défaut&nbsp;';
$lang['admin']['info_default_contenttype'] = 'Applicable lors de l\'ajout de nouveaux type de contenus, cette commande spécifie le type qui est sélectionné par défaut. Assurez-vous que l\'élément sélectionné n\'est pas l\'un des "types non autorisés" dans Préférences Globales/Paramètres des contenus.';
$lang['admin']['error_contenttype'] = 'Le type de contenu associé à cette page est invalide ou non autorisé';
$lang['admin']['info_disallowed_contenttypes'] = 'Sélectionnez les types de contenu à supprimer de la liste déroulante pour l\'édition ou l\'ajout de contenu. Utiliser CTRL+Clic pour sélectionner, désélectionner les éléments. Aucun élément de sélectionné indique que tous les types de contenu sont autorisés<em>(s\'applique à tous les utilisateurs)</em>.';
$lang['admin']['disallowed_contenttypes'] = 'Types de contenu NON autorisés&nbsp;';
$lang['admin']['search_module'] = 'Module de recherche&nbsp;';
$lang['admin']['info_search_module'] = 'Sélectionnez le module qui doit être utilisé pour indexer les mots pour la recherche, et fournira les capacités de recherche sur le site Web';
$lang['admin']['filecreatedirbadchars'] = 'Des caractères invalides ont été détectés dans le nom du dossier soumis';
$lang['admin']['modulehelp_yourlang'] = 'Vue dans votre langue';
$lang['admin']['info_umask'] = 'Le "umask" est une valeur octale qui est utilisée pour spécifier l\'autorisation par défaut pour les nouveaux fichiers créés (utilisé pour les fichiers dans le répertoire cache et les fichiers uploadés. Pour plus d\'informations voir un <a href="http://fr.wikipedia.org/wiki/Umask" target="_blank">article Wikipédia.</a>';
$lang['admin']['general_operation_settings'] = 'Réglages de fonctionnement général&nbsp;';
$lang['admin']['info_checkversion'] = 'Si activé, une vérification pour une nouvelle version de CMSMS sera effectuée, une fois par jour';
$lang['admin']['checkversion'] = 'Autoriser des contrôles périodiques pour les nouvelles versions&nbsp;';
$lang['admin']['actioncontains'] = 'L\'action contient';
$lang['admin']['filterapplied'] = 'Filtre actuel';
$lang['admin']['automatedtask_success'] = 'Tâche automatisée réalisée';
$lang['admin']['siteprefsupdated'] = 'Mise à jour des Préférences Globales';
$lang['admin']['ip_addr'] = 'Addresse IP';
$lang['admin']['warn_admin_ipandcookies'] = 'Attention : les activités admin utilisent des cookies et votre adresse IP';
$lang['admin']['event_desc_loginfailed'] = 'Envoyé après qu\'un utilisateur n\'ait pas réussi à se connecter à l\'administration';
$lang['admin']['event_help_loginfailed'] = '<p>Envoyé après qu\'un utilisateur n\'ait pas réussi à se connecter à l\'administration.</p>';
$lang['admin']['modulehelp_english'] = 'Vue en Anglais';
$lang['admin']['nopluginabout'] = 'Aucune information pour cette balise';
$lang['admin']['nopluginhelp'] = 'Aucune aide valable pour cette balise';
$lang['admin']['moduleupgraded'] = 'Mise à jour terminée avec succès';
$lang['admin']['added_css'] = 'CSS ajouté';
$lang['admin']['toggle'] = 'Tout';
$lang['admin']['added_group'] = 'Groupe ajouté';
$lang['admin']['expanded_xml'] = 'Fichier XML contenant de %s %s';
$lang['admin']['installed_mod'] = 'Version installée %s';
$lang['admin']['uninstalled_mod'] = 'Module désinstallé %s';
$lang['admin']['upgraded_mod'] = '%s mise à depuis version %s vers %s';
$lang['admin']['edited_gcb'] = 'Bloc de contenu global édité';
$lang['admin']['edited_content'] = 'Contenu édité';
$lang['admin']['added_content'] = 'Contenu ajouté';
$lang['admin']['added_css_association'] = 'Association de feuille de style ajoutée';
$lang['admin']['deleted_group'] = 'Groupe supprimé';
$lang['admin']['deleted_content'] = 'Contenu supprimé';
$lang['admin']['edited_user'] = 'Utilisateur édité';
$lang['admin']['edited_udt'] = 'Balise utilisateur éditée';
$lang['admin']['content_copied'] = 'Contenu copié vers %s';
$lang['admin']['deleted_template'] = 'Gabarit supprimé';
$lang['admin']['added_udt'] = 'Balise utilisateur ajoutée';
$lang['admin']['deleted_udt'] = 'Balise utilisateur supprimée';
$lang['admin']['added_gcb'] = 'Bloc de contenu global ajouté';
$lang['admin']['edited_group'] = 'Groupe édité';
$lang['admin']['deleted_css_association'] = 'Association de feuille de style supprimée';
$lang['admin']['user_logout'] = 'Logout utilisateur';
$lang['admin']['user_login'] = 'Login utilisateur';
$lang['admin']['login_failed'] = 'Erreur Login utilisateur';
$lang['admin']['deleted_css'] = 'Feuille de style supprimée';
$lang['admin']['uploaded_file'] = 'Fichier Uploadé';
$lang['admin']['created_directory'] = 'Dossier créé';
$lang['admin']['deleted_file'] = 'Fichier supprimé';
$lang['admin']['deleted_directory'] = 'Dossier supprimé';
$lang['admin']['edited_template'] = 'Gabarit édité';
$lang['admin']['deleted_user'] = 'Utilisateur supprimé';
$lang['admin']['deleted_module'] = 'Supression définitive de %s';
$lang['admin']['deleted_gcb'] = 'Bloc de contenu global supprimé';
$lang['admin']['added_user'] = 'Utilisateur ajouté';
$lang['admin']['edited_user_preferences'] = 'Préférences du compte utilisateur éditées';
$lang['admin']['added_template'] = 'Gabarit ajouté';
$lang['admin']['event_desc_stylesheetpostcompile'] = 'Envoyé après une feuille de style compilée par Smarty';
$lang['admin']['event_desc_stylesheetprecompile'] = 'Envoyé avant une feuille de style compilée par Smarty';
$lang['admin']['confirm_uploadmodule'] = 'Êtes-vous sûr(e) de souhaitez télécharger le fichier XML sélectionné. Un téléchargement incorrect de module peut casser le fonctionnement du site Web';
$lang['admin']['error_module_mincmsversion'] = 'Ce module nécessite une version plus récente de CMSMS™';
$lang['admin']['info_browser_cache_expiry'] = 'Spécifie la durée (en minutes) que les navigateurs devraient garder en cache les pages. Une valeur à 0 désactive la fonctionnalité.';
$lang['admin']['browser_cache_expiry'] = 'Limite d\'expiration du cache du navigateur <em>(en minutes)</em>&nbsp;';
$lang['admin']['info_browser_cache'] = 'Applicable uniquement aux pages cachable, ce paramètre indique que les navigateurs devraient être autorisés à mettre en cache les pages pour une durée définie. La duré conditionne les modifications du contenu des pages pour que les visiteurs qui reviennent puissent voir ou non les modifications des pages.';
$lang['admin']['allow_browser_cache'] = 'Autoriser le navigateur à garder en cache les pages&nbsp;';
$lang['admin']['server_cache_settings'] = 'Paramètres du cache serveur&nbsp;';
$lang['admin']['browser_cache_settings'] = 'Paramètres du cache du navigateur&nbsp;';
$lang['admin']['help_function_browser_lang'] = '<h3>Que fait cette Balise ?</h3>
  <p>Cette balise détecte la langue, utilisée et définie par l\'utilisateur du navigateur, et les références croisées si une liste des langues détermine une valeur de la langue de session.</p>
<h3>Comment l\'utiliser ?</h3>
<p>Insérer la balise dans votre gabarit :  <em>(il peut être  au-dessus la section < head > si vous voulez)</em> et lui indiquer le nom de la langue par défaut, et les langues acceptées (seul deux caractère de noms de langue sont acceptés), puis utiliser le résultat. Exemple :</p>
<pre><code>{browser_lang accepted="de,fr,en,es" default=en assign=tmp}{session_put var=lang val=$tmp}</code></pre>
<p><em>({session_put} est une balise fournie par le module CGSimpleSmarty)</em></p>
<h3>Quels paramètres </h3>
<ul>
<li><strong>(requis)</strong> accepted - Une virgule comme séparateur de liste pour les deux caractères de noms de langue acceptée.</li>
 <li><em>(option)</em> default - La langue par défaut, si aucune langue acceptée n\'a été prise en charge par le navigateur. "en" est utilisée si aucune valeur n\'est spécifiée</li>
 <li><em>(option)</em> assign - Le nom de la variable Smarty pour affecter les résultats. Si non spécifié les résultats de cette fonction sont retournés. les r</li>
</ul>';
$lang['admin']['info_target'] = 'Cette option peut utilisé par le gestionnaire de menu (Module Manager) pour indiquer quand et comment de nouvelles fenêtres doivent être ouvertes. Certains gabarits du gestionnaire de menu peuvent ignorer cette option.';
$lang['admin']['close'] = 'Fermer';
$lang['admin']['open'] = 'Ouvrir';
$lang['admin']['revert'] = 'Annuler toutes les modifications';
$lang['admin']['autoclearcache2'] = 'Effacer automatiquement les fichiers mis en cache qui sont plus anciens que le nombre de jour défini&nbsp;';
$lang['admin']['root'] = 'Racine';
$lang['admin']['info_content_autocreate_flaturls'] = 'Si "Oui" cela mettra toutes les URLs à la même valeur que l\'alias de page. Remarque : Les valeurs ne seront pas synchronisées après avoir activé.';
$lang['admin']['content_autocreate_flaturls'] = 'Créer automatiquement les URL courtes&nbsp;';
$lang['admin']['content_autocreate_urls'] = 'Créer automatiquement les URLs des pages&nbsp;';
$lang['admin']['content_mandatory_urls'] = 'URLs des pages requises&nbsp;';
$lang['admin']['content_imagefield_path'] = 'Chemin pour les champs {page_image}&nbsp;';
$lang['admin']['info_content_imagefield_path'] = 'En relatif du chemin /uploads/images/, spécifier un nom de dossier contenant les fichiers images';
$lang['admin']['content_thumbnailfield_path'] = 'Chemin pour les champs vignettes images&nbsp;';
$lang['admin']['info_content_thumbnailfield_path'] = 'En relatif du chemin /uploads/images/, spécifier un nom de dossier contenant les fichiers vignettes images. Normalement il doit être le même que les fichiers images.';
$lang['admin']['contentimage_path'] = 'Chemin pour la balise {content_image}&nbsp;';
$lang['admin']['info_contentimage_path'] = 'En relatif du chemin /uploads/, spécifier un nom de dossier contenant les fichiers pour la balise {content_image}. Cette valeur devient par défaut le paramètre "dir"';
$lang['admin']['editcontent_settings'] = 'Paramètres des contenus';
$lang['admin']['help_page_url'] = 'Spécifie une URL alternative (relative à la racine du site Web) qui peut être utilisée pour uniquement identifier la page. Exemple : chemin/vers/mapage. Les URLs des pages sont utilisables si "URL de page" est actif.';
$lang['admin']['help_page_alias'] = 'Cet alias est utilisé comme une alternative à l\'ID de la page pour uniquement identifier la page. (Il doit être unique pour toutes les pages). L\'alias est aussi utilisé pour assister la construction de l\'URL de la page';
$lang['admin']['help_page_searchable'] = 'Ce paramètre indique que le contenu sera indexé par le module Search';
$lang['admin']['help_page_cachable'] = 'La performance peut être augmentée par la mise en cache des pages. Toutefois, ne pas utiliser pour les pages dont le contenu peut changer selon des requêtes de base de données.';
$lang['admin']['sitedownexcludeadmins'] = 'Exclure les administrateurs connecté dans l\'administration&nbsp;';
$lang['admin']['your_ipaddress'] = 'Votre adresse IP est';
$lang['admin']['use_wysiwyg'] = 'Utiliser le WYSIWYG&nbsp;';
$lang['admin']['contenttype_redirlink'] = 'Lien de redirection';
$lang['admin']['yes'] = 'Oui';
$lang['admin']['no'] = 'Non';
$lang['admin']['listcontent_showalias'] = 'Afficher la colonne "Alias"&nbsp;';
$lang['admin']['listcontent_showurl'] = 'Afficher la colonne "URL&nbsp;';
$lang['admin']['listcontent_showtitle'] = 'Afficher la colonne "Titre ou Texte du menu"';
$lang['admin']['listcontent_settings'] = 'Paramètres de la liste des pages';
$lang['admin']['lctitle_page'] = 'Le titre du contenu';
$lang['admin']['lctitle_alias'] = 'L\'alias du contenu. Quelques contenus peuvent ne pas avoir d\'alias';
$lang['admin']['lctitle_url'] = 'Le suffix de l\'URL du contenu. Si activé';
$lang['admin']['lctitle_template'] = 'Le gabarit sélectionné du contenu. Quelques contenus peuvent ne pas avoir de gabarit';
$lang['admin']['lctitle_owner'] = 'Le propriétaire du contenu';
$lang['admin']['lctitle_active'] = 'Indique si l\'élément de contenu est actif. Inactif ne sera pas affiché.';
$lang['admin']['lctitle_default'] = 'Spécifier l\'élément de contenu qui est accessible lorsque l\'URL racine est demandé. Un seul élément peut être par défaut';
$lang['admin']['lctitle_move'] = 'Permet l\'organisation de votre hiérarchie de contenu';
$lang['admin']['lctitle_multiselect'] = 'Tous/Aucun';
$lang['admin']['invalid_url2'] = 'L\'URL spécifiée est invalide.  Elle ne doit contenir que des caractères alphanumériques, ou - ou encore /. Les extensions doivent contenir que des caractères alphanumériques et être inférieure à 5 caractères.Il est aussi possible que cette URL soit déjà utilisée.';
$lang['admin']['page_url'] = 'URL de page&nbsp;';
$lang['admin']['runuserplugin'] = 'Exécuter cette balise utilisateur';
$lang['admin']['output'] = 'Sortie';
$lang['admin']['run'] = 'Exécuter';
$lang['admin']['run_udt'] = 'Exécuter cette balise utilisateur';
$lang['admin']['stylesheetcopied'] = 'Feuille de style copiée';
$lang['admin']['templatecopied'] = 'Gabarit copié';
$lang['admin']['ecommerce_desc'] = 'Module fournissant des fonctionnalités d\'E-commerce';
$lang['admin']['ecommerce'] = 'E-Commerce&nbsp;';
$lang['admin']['help_function_content_module'] = '<h3>Que fait cette Balise ?</h3>
<p>Ce type de bloc de contenu permet d\'interagir avec différents modules pour créer des blocs de contenu différents.</p>
<p>Certains modules peuvent définir quel type de bloc de contenu sera utilisé dans les gabarits des modules. Par exemple, le module FrontEndUsers pourrait déterminer un type de bloc de contenu pour la liste des groupes. il vous sera alors indiqué comment vous pourrez utiliser la balise content_module pour insérer ce type de bloc de contenu à l\'intérieur de vos gabarits/p>
<p><strong>Note :</strong> ce type de bloc doit être utilisé uniquement avec les modules compatibles. Vous ne devriez pas l\'utiliser pour des utilisations non prévues par les modules.</p>
	<p>	Cette balise accepte quelques paramètres, et passe tous les autres paramétres par le module.</p>
 	<p>Paramètres :
 	 <ul>
 	 <li><strong>(requis)</strong> module - Le nom du module qui offrira ce bloc de contenu. Ce module doit être installé et disponible</li>
 	 <li><strong>(requis)</strong> block  - Le nom du bloc de contenu.</li>
 	 <li><em>(option)</em> label - Un label pour le bloc de contenu pour une utilisation lors de l\'édition de la page.</li>
             <li><em>(option)</em> tab - L\'onglet désiré pour afficher ce champ dans le formulaire d\'édition.</li>
 	 <li><em>(option)</em> assign (string) - Assigne le résultat à  une variable Smarty avec ce nom.</li>	 	 
</ul>
</p>';
$lang['admin']['error_parsing_content_blocks'] = 'Erreur lors de l\'analyse des blocs de contenu (y a-t-il des noms de blocs en doublon ?)';
$lang['admin']['error_no_default_content_block'] = 'Aucun bloc de contenu par défaut n\'a été détecté dans ce gabarit. Assurez-vous que vous disposez d\'une balise {content} dans le gabarit de cette page.';
$lang['admin']['help_function_cms_stylesheet'] = '<h3>Que fait cette Balise ?</h3>
  <p>C\'est un remplacement de la balise {stylesheet}. Cette nouvelle balise permet la mise en cache des fichiers CSS en générant des fichiers statiques dans le dossier tmp/cache, ainsi que le traitement des balises Smarty dans les feuilles de style.</p>
  <p>Cette balise récupère les informations des styles du système. Par défaut, elle prend toutes les feuilles de style liées au gabarit en cours, et les combine en une seule balise de feuille de style. </p>
  <p>Les générations des feuilles de style sont utilisées en fonction de la date de dernière modification dans la base de données, et ne sont générées que si la feuille de style a changée.</p>
  <p> Cette balise est le remplacement de {stylesheet} qui est désormais obsolète.</p>
  <h3>Comment l\'utiliser ?</h3>
  <p>Insérer la balise dans votre page ou votre gabarit dans l\'entête :<code>{cms_stylesheet}</code></p>
  <h3>Quels paramètres ?</h3>
  <ul>
  <li><em>(option) name</em> - Au lieu d\'avoir toutes les feuilles de style pour la page donnée, il n\'y aura que celle nommée spécifiquement, qu\'elle soit liée au gabarit en cours ou non.</li>
<li><em>(option)</em> nocombine - Si la valeur est une valeur non nulle, et si il y a plusieurs feuilles de style associées au gabarit, les feuilles de style seront séparées  au lieu d\'être combinées en une seule balise de feuille de style.</li>
<li><em>(option)</em> nolinks - S\'il est défini à une valeur non nulle, les feuilles de style auront une sortie comme une URL sans la balise "lien".</li>
<li><em>(option)</em> https - (boolean) indique dans le cas où paramètre "ssl_url" du config.php est activé de préfixer les URLs des feuilles de style. S\'il n\'est pas spécifié, le système va tenter de déterminer l\'URL racine appropriée fondée sur la sécurité de la page affichée.</li>

  <li><em>(option)</em> templateid - Si templateid est défini, les feuilles de style seront associées uniquement à ce gabarit, au lieu de celui en cours.</li>
  <li><em>(option)</em> media - <strong>[obsolète]</strong> -  Si utilisé avec le paramètre "name", ce paramètre modifiera le type de média pour la feuille de style. En utilisation avec le paramètre "templateid", le le type de média modifiera uniquement cette feuille de style qui sera marquée avec le type spécifié.</li>
  </ul>
  <h3>Processus Smarty </h3>
  <p>Lors de la génération des fichiers css, ce système passe les feuilles de style extraites de la base de données grâce à Smarty.  Les délimiteurs Smarty sont définis par les standard CMSMS™  { et } avec [[ et ]] respectivement, pour faciliter la transition dans les feuilles de styles.  Cela permet la création de variables Smarty comme : [[assign var=\'red\' value=\'#900\']] en haut de la feuille de styles,  puis en utilisant ces variables plus loin dans la feuille de style. Exemple : </p>
<pre>
<code>
h3 .error { color: [[$red]]; }<br/>
</code>
</pre>
<p>Comme les fichiers mis en cache sont générés dans le dossier tmp/cache de l\'installation de CMSMS™, le dossier de travail des CSS n\'est pas la racine du site. Par conséquent, toutes les images, ou d\'autres balises qui nécessitent une URL doit utiliser la balise [[root_url]]  pour la forcer à être une URL absolue. Exemple : </p>
<pre>
<code>
h3 .error { background: url([[root_url]]/uploads/images/error_background.gif); }<br/>
</code>
</pre>
<p><strong>Note :</strong> en raison de la nature mise en cache de la balise, les variables Smarty doivent être placées au sommet de CHAQUE feuille de style, qui est attaché au gabarit.</p>';
$lang['admin']['pseudocron_granularity'] = 'Tâches régulières "Pseudocron"&nbsp;';
$lang['admin']['info_pseudocron_granularity'] = 'Ce paramètre indique à quelle fréquence le système va tenter de gérer les tâches régulières.';
$lang['admin']['cron_request'] = 'Chaque demande';
$lang['admin']['cron_15m'] = '15 minutes';
$lang['admin']['cron_30m'] = '30 minutes';
$lang['admin']['cron_60m'] = '1 heure';
$lang['admin']['cron_120m'] = '2 heures';
$lang['admin']['cron_3h'] = '3 heures';
$lang['admin']['cron_6h'] = '6 heures';
$lang['admin']['cron_12h'] = '12 heures';
$lang['admin']['cron_24h'] = '24 heures';
$lang['admin']['adminlog_1day'] = '1 jour';
$lang['admin']['adminlog_1week'] = '1 semaine';
$lang['admin']['adminlog_2weeks'] = '2 semaines';
$lang['admin']['adminlog_1month'] = '1 mois';
$lang['admin']['adminlog_3months'] = '3 mois';
$lang['admin']['adminlog_6months'] = '6 mois';
$lang['admin']['adminlog_manual'] = 'manuelle';
$lang['admin']['adminlog_lifetime'] = 'Conservation des logs administration&nbsp;';
$lang['admin']['info_adminlog_lifetime'] = 'Suppression des anciennes entrées des logs plus agées que ci-dessus.';
$lang['admin']['filteruser'] = 'Nom d\'utilisateur';
$lang['admin']['filtername'] = 'Nom de l\'événement contient';
$lang['admin']['filteraction'] = 'L\'action contient';
$lang['admin']['filterapply'] = 'Appliquer les filtres';
$lang['admin']['filterreset'] = 'Remise à zéro des filtres';
$lang['admin']['filters'] = 'Filtres';
$lang['admin']['showfilters'] = 'Editer les filtres';
$lang['admin']['clearcache_taskdescription'] = 'Exécuté par jour, cette tâche effacer les fichiers mis en cache qui sont plus anciennes que le temps défini dans les préférences globales';
$lang['admin']['clearcache_taskname'] = 'Effacement des fichiers mis en cache';
$lang['admin']['info_autoclearcache'] = 'Spécifier une valeur entière du nombre de jour(s). Entrer 0 pour désactiver automatiquement la vidange du cache';
$lang['admin']['autoclearcache'] = 'Efface automatiquement le cache de tous les N jours';
$lang['admin']['listtemplates_pagelimit'] = 'Nombre de lignes par page lors de l\'affichage des gabarits&nbsp;';
$lang['admin']['liststylesheets_pagelimit'] = 'Nombre de lignes par page lors de l\'affichage des feuilles de style&nbsp;';
$lang['admin']['listgcbs_pagelimit'] = 'Nombre de lignes par page lors de l\'affichage des blocs de contenu globaux&nbsp;';
$lang['admin']['insecure'] = 'Non sécurisé (HTTP)';
$lang['admin']['secure'] = 'Sécurisé (HTTPS)';
$lang['admin']['secure_page'] = 'Utiliser le protocole HTTPS pour cette page&nbsp;';
$lang['admin']['thumbnail_width'] = 'Largeur de vignette&nbsp;';
$lang['admin']['thumbnail_height'] = 'Hauteur de vignette&nbsp;';
$lang['admin']['E_STRICT'] = 'Désactivation de E_STRICT dans error_reporting ?';
$lang['admin']['test_estrict_failed'] = 'E_STRICT est activé';
$lang['admin']['info_estrict_failed'] = 'Certaines bibliothèques que CMSMS™ utilise ne fonctionnent pas bien avec E_STRICT. Merci de désactiver avant de continuer';
$lang['admin']['E_DEPRECATED'] = 'Désactivation de E_DEPRECATED dans error_reporting ?';
$lang['admin']['test_edeprecated_failed'] = 'E_DEPRECATED est activé';
$lang['admin']['info_edeprecated_failed'] = 'Si E_DEPRECATED est activé, les utilisateurs verront de nombreux messages d\'avertissement qui pourraient affecter l\'affichage et le fonctionnement';
$lang['admin']['session_use_cookies'] = 'Autorisation pour l\'utilisation des cookies de session';
$lang['admin']['errorgettingcontent'] = 'Impossible de récupérer les informations pour le contenu spécifié';
$lang['admin']['errordeletingcontent'] = 'Erreur de suppression de contenu (soit cette page a des enfants soit c\'est la page par défaut)';
$lang['admin']['invalidemail'] = 'L\'adresse email entrée est invalide !';
$lang['admin']['info_deletepages'] = 'Note : en raison des restrictions d\'autorisations, certaines pages que vous avez sélectionné pour suppression, ne sont pas affichées ci-dessous';
$lang['admin']['info_pagealias'] = 'Spécifier un alias unique pour cette page.';
$lang['admin']['info_autoalias'] = 'Si ce champ est vide, un alias est créé automatiquement.';
$lang['admin']['invalidparent'] = 'Vous devez sélectionner une page parent (contactez votre administrateur si vous ne voyez pas cette option).';
$lang['admin']['forgotpwprompt'] = 'Entrez votre nom d\'utilisateur. Un message sera alors envoyé à l\'adresse email associée à ce nom d\'utilisateur avec de nouvelles informations de connexion';
$lang['admin']['info_basic_attributes'] = 'Cette sélection vous permet de spécifier des propriétés affichables de "Contenu/Pages" sans que les utilisateurs aient la permission ("Manage All Content") de modifier la structure de la page. Les propriétés sélectionnées apparaissent dans l\'onglet "Accueil ou Options" sur le contenu de la page d\'édition.';
$lang['admin']['basic_attributes'] = 'Propriétés basiques de la page <em>(utiliser Ctrl pour annuler)</em>&nbsp;';
$lang['admin']['no_permission'] = 'Vous n\'avez aucune permission pour effectuer cette opération.';
$lang['admin']['bulk_success'] = 'Opération en série réalisée avec succès.';
$lang['admin']['no_bulk_performed'] = 'Aucune opération en série réalisée.';
$lang['admin']['info_preview_notice'] = 'Attention : cette page d\'aperçu se comporte comme une fenêtre permettant de naviguer loin de cette page aperçu originale. Toutefois, si vous faites cela, attention aux comportements inattendus !! Si vous naviguez hors de l\'affichage initial, au retour vous ne trouverez pas la page originale, vous devrez donc actualiser cet onglet. Lors de l\'ajout de contenu, si vous naviguez hors de cette page initiale, il vous sera impossible de revenir à cette page, et vous devrez actualiser cette page.';
$lang['admin']['sitedownexcludes'] = 'Exclure ces adresses pour les messages de maintenance&nbsp;';
$lang['admin']['info_sitedownexcludes'] = 'Ce paramètre autorise une liste des adresses, IP ou réseaux, séparée par des virgules qui ne devraient pas être soumise au message de maintenance. Cela permet aux administrateurs de travailler sur un site alors que les visiteurs anonymes reçoivent un message de maintenance.<br/><br/>Les adresses peuvent être spécifiées dans les formats suivants :&nbsp<br/>
1. xxx.xxx.xxx.xxx -- (Adresse IP exacte)<br/>
2. xxx.xxx.xxx.[yyy-zzz] -- (Plage d\'adresses IP)<br/>
3. xxx.xxx.xxx.xxx/nn -- (nnn = nombre de bits, style cisco.  exemple :  192.168.0.100/24 = 192.168.0 ensemble de sous-réseau de classe C)';
$lang['admin']['setup'] = 'Paramètres avancés';
$lang['admin']['handle_404'] = 'Erreur 404 personnalisée';
$lang['admin']['sitedown_settings'] = 'Paramètres de maintenance';
$lang['admin']['general_settings'] = 'Paramètres généraux';
$lang['admin']['help_function_page_attr'] = '<h3>Que fait cette Balise ?</h3>
<p>Cette balise peut être utilisée pour renvoyer la valeur de l\'attribut d\'une page déterminée. </p>
<h3>Comment l\'utiliser ?</h3>
<p>Insérer la balise dans votre gabarit : <code>{page_attr key="extra1"}</code>.</p>
<h3>Quels paramètres ?</h3>

<ul>
  <li><strong>key (requis)</strong> La clé retournée par l\'attribut.</li>
  <li><em>(option)</em> assign (string) - Assigne le résultat à une variable Smarty avec ce nom.</code>.</li>
</ul>';
$lang['admin']['forge'] = 'Forge&nbsp;';
$lang['admin']['disable_wysiwyg'] = 'Désactiver l\'éditeur WYSIWYG sur cette page (indépendamment du modèle ou de la configuration de l\'utilisateur)&nbsp;';
$lang['admin']['help_function_page_image'] = '<h3>Que fait cette Balise ?</h3>
<p>Cette balise peut être utilisée pour renvoyer la valeur du champ image ou vignette d\'une certaine page</p>
<h3>Comment l\'utiliser ?</h3>
<p>Insérer la balise dans votre gabarit : <code>{page_image}</code>.</p>
<h3>Quels paramètres ?</h3>
<ul>
  <li><em>(option)</em> thumbnail - Affiche la valeur de la propriété de la vignette au lieu de celle de l\'image.</li>
<li><em>(option)</em> assign (string) - Assigne le résultat à une variable Smarty avec ce nom.</li>
</ul>';
$lang['admin']['pagelink_circular'] = 'Un lien de page ne peut pas fournir un autre lien comme destination';
$lang['admin']['destinationnotfound'] = 'La page sélectionnée n\'a pas pu être trouvée ou n\'est pas valide';
$lang['admin']['help_function_dump'] = '<h3>Que fait cette Balise ?</h3>
  <p>Cette balise peut être utiliser pour lire (dump) le contenu de toute variable smarty dans un format plus lisible. Ceci est utile pour le débogage, et l\'édition des gabarits, afin de connaître le format et le type de données disponibles.</p>
<h3>Comment l\'utiliser ?</h3>
<p>Insérer la balise dans votre gabarit :<code>{dump item=\'the_smarty_variable_to_dump\'}</code>.</p>
<h3>Quels paramètres ?</h3>
<ul>
<li><strong>item (requis)</strong> - La variable Smarty pour lire (dump) le contenu</li>
<li>maxlevel - Le nombre maximum de niveaux récursifs (applicable uniquement si "recurse" est également donné. La valeur par défaut pour ce paramètre est 3</li>
<li>nomethods - Évite les methods from objects.</li>
<li>novars -  Évite les object members.</li>
<li>recurse - Fait une récursion d\'un nombre maximum de niveaux jusqu\'à ce que le nombre maximal soit atteint.</li>
<li><em>(option)</em> assign (string) - Assigne le résultat à une variable Smarty avec ce nom.</li>
</ul>';
$lang['admin']['sqlerror'] = 'Erreur SQL dans %s';
$lang['admin']['image'] = 'Image&nbsp;';
$lang['admin']['thumbnail'] = 'Vignette&nbsp;';
$lang['admin']['searchable'] = 'Effectuer la recherche dans cette page&nbsp;';
$lang['admin']['help_function_content_image'] = '<h3>Que fait cette Balise ?</h3>
<p>Cette balise permet aux concepteurs de gabarits d\'inciter les utilisateurs à sélectionner un fichier image lors de l\'édition du contenu d\'une page. Il se comporte de façon similaire à la balise {content}, pour ajouter d\'autres blocs de contenu.</p>
<h3>Comment l\'utiliser ?</h3>
<p>Insérer la balise dans votre page ou votre gabarit : <code>{content_image block=\'image1\'}</code>.</p>
<h3>Quels paramètres ?</h3>
<ul>
  <li><strong>(requis)</strong> block=\'\' - Le nom de ce bloc de contenu supplémentaire.
  <p>Exemple :</p>
  <pre>{content_image block=\'image1\'}</pre><br/>
  </li>
  <li><em>(option)</em>label=\'\' - Un label ou l\'invite pour ce contenu dans le bloc de la page de contenu. Si non spécifié, le nom du bloc sera utilisé.</li>
  <li><em>(option)</em> dir =\'\'- Le nom d\'un dossier (par rapport au dossier /uploads), à partir duquel seront sélectionnés les fichiers images. Si le paramètre n\'est pas spécifié, la préférence "Chemin pour les champs images" dans la page Paramètres globaux/Paramètres des contenus sera utilisée. Sinon, le dossier /uploads sera utilisé. 
  <p>Exemple : utilisation des images du dossier uploads/images</p>
  <pre>{content_image block=\'image1\' dir=\'images\'}</pre>
  </li>
  <li><em>(option)</em> class=\'\' - Le nom de la classe CSS à utiliser sur la balise img dans l\'affichage du site.</li>
<li><em>(option)</em> default=\'\'; - Utiliser pour définir une image par défaut utilisé lorsque aucune image n\'est sélectionnée.</li>
  <li><em>(option)</em> id=\'\' - L\'id à utiliser sur la balise img dans l\'affichage du site.</li> 
  <li><em>(option)</em> name=\'\' - Le nom de la balise à utiliser sur la balise img dans l\'affichage du site.</li> 
  <li><em>(option)</em> width=\'\' - La largeur désirée de l\'image.</li>
  <li><em>(option)</em> height=\'\' - La hauteur désirée de l\'image.</li>
  <li><em>(option)</em> alt=\'\' - Texte alternatif si l\'image ne peut pas être trouvée.</li>
<li><em>(option)</em> urlonly=\'\' - affiche uniquement l\'url de l\'image, en ignorant tous les paramètres comme id, nom, largeur, hauteur, etc.</li>
<li><em>(option)</em> tab=\'\' - L\'onglet désiré pour afficher ce champ dans le formulaire d\'édition.</li>
  <li><em>(option)</em> exclude=\'\' - Spécifie un préfixe de fichiers à exclure.  Exemple : thumb_</li>
  <li><em>(option)</em> sort=\'\' - éventuellement trier les options. Par défaut : Ne pas trier.</li>
<li><em>(option)</em> assign=\'\' (string) -  Assigne le résultat à une variable Smarty avec ce nom</li>
</ul>';
$lang['admin']['error_udt_name_chars'] = 'Le nom d\'une balise utilisateur valide commence par une lettre ou un underscore (_), suivi par un nombre quelconque de lettres, de chiffres, ou underscores uniquement.';
$lang['admin']['errorupdatetemplateallpages'] = 'Le gabarit n\'est pas actif';
$lang['admin']['hidefrommenu'] = 'Masquer dans le menu';
$lang['admin']['settemplate'] = 'Définir le gabarit';
$lang['admin']['text_settemplate'] = 'Passer les pages sélectionnées sous un autre gabarit';
$lang['admin']['cachable'] = 'Cachable&nbsp;';
$lang['admin']['noncachable'] = 'Non Cachable&nbsp;';
$lang['admin']['copy_from'] = 'Copier depuis';
$lang['admin']['copy_to'] = 'Copier vers';
$lang['admin']['copycontent'] = 'Copier le contenu de l\'item';
$lang['admin']['md5_function'] = 'Fonction md5';
$lang['admin']['tempnam_function'] = 'Fonction PHP tempnam';
$lang['admin']['register_globals'] = 'Fonction PHP register_globals';
$lang['admin']['output_buffering'] = 'Fonction PHP output_buffering';
$lang['admin']['disable_functions'] = 'Directive PHP disable_functions';
$lang['admin']['xml_function'] = 'Support de Basic XML (expat)';
$lang['admin']['magic_quotes_gpc'] = 'Test magic_quotes pour opérations Get/Post/Cookie';
$lang['admin']['magic_quotes_gpc_on'] = 'Les guillemets simples, doubles et les antislash sont échappés automatiquement. Vous pouvez rencontrer des problèmes en sauvegardant les gabarits';
$lang['admin']['magic_quotes_runtime'] = 'Test magic_quotes_runtime';
$lang['admin']['magic_quotes_runtime_on'] = 'La plupart des fonctions qui retournent des données auront été échappées avec un antislash. Vous pouvez rencontrer des problèmes';
$lang['admin']['file_get_contents'] = 'Test file_get_contents&nbsp;';
$lang['admin']['check_ini_set'] = 'Test ini_set&nbsp;';
$lang['admin']['check_ini_set_off'] = 'Vous pouvez avoir des difficultés avec certaines fonctionnalités sans cette possibilité. Ce test peut échouer si le safe_mode est activé';
$lang['admin']['file_uploads'] = 'Upload de fichier';
$lang['admin']['test_remote_url'] = 'Test l\'URL distant';
$lang['admin']['test_remote_url_failed'] = 'Vous ne serez probablement pas en mesure d\'ouvrir un fichier sur un serveur Web distant.';
$lang['admin']['test_allow_url_fopen_failed'] = 'Lorsque la fonction allow_url_fopen est désactivée, vous ne serez pas en mesure d\'accéder à des objets comme une URL ou des fichiers en protocole ftp ou http.';
$lang['admin']['connection_error'] = 'Les connexions sortantes http semblent ne pas fonctionner ! Vérifier le pare-feu ou les droits de contrôle d\'accès (ACL) pour les connexions externes. Vous pouvez avoir des difficultés avec le Gestionnaire de Modules et, potentiellement, avec d\'autres fonctionnalités.';
$lang['admin']['remote_connection_timeout'] = 'Expiration du délai de connexion !';
$lang['admin']['search_string_find'] = 'Connexion OK !';
$lang['admin']['connection_failed'] = 'Echec de la connexion !';
$lang['admin']['remote_response_ok'] = 'Réponse connexion : OK !';
$lang['admin']['remote_response_404'] = 'Réponse connexion : non trouvée !';
$lang['admin']['remote_response_error'] = 'Réponse connexion : Erreur !';
$lang['admin']['notifications_to_handle'] = 'Vous avez <strong>%d</strong> notifications en cours';
$lang['admin']['notification_to_handle'] = 'Vous avez <strong>%d</strong> notification en cours';
$lang['admin']['notifications'] = 'Notifications&nbsp;';
$lang['admin']['dashboard'] = 'Tableau de bord';
$lang['admin']['ignorenotificationsfrommodules'] = 'Ignorer les notifications de ces modules <em>(utiliser Ctrl pour annuler)</em>&nbsp;';
$lang['admin']['admin_enablenotifications'] = 'Permet d\'afficher les notifications aux utilisateurs<br/><em>(Ces notifications seront affichées sur chaque page d\'administration)</em>&nbsp;';
$lang['admin']['enablenotifications'] = 'Activer les notifications d\'utilisateur dans la section Administration&nbsp;';
$lang['admin']['test_check_open_basedir_failed'] = 'La restriction spécifiée par open_basedir est activée. Cette restriction peut entraîner des difficultés avec certaines fonctionnalités.';
$lang['admin']['config_writable'] = 'Le fichier config.php a les droits en écriture. Il est plus sûr de changer la permission en lecture seule';
$lang['admin']['caution'] = 'Attention';
$lang['admin']['create_dir_and_file'] = 'Vérification si le processus httpd peut créer un fichier dans un nouveau dossier.';
$lang['admin']['os_session_save_path'] = 'Aucune vérification à cause du chemin OS';
$lang['admin']['unlimited'] = 'Illimité';
$lang['admin']['open_basedir'] = 'PHP open_basedir';
$lang['admin']['open_basedir_active'] = 'Aucune vérification à cause de la restriction spécifiée par PHP open_basedir';
$lang['admin']['invalid'] = 'Invalide';
$lang['admin']['checksum_passed'] = 'Tous les contrôles (checksums) correspondent à ceux du fichier transféré';
$lang['admin']['error_retrieving_file_list'] = 'Erreur lors de la récupération de la Liste des fichiers';
$lang['admin']['files_checksum_failed'] = 'Impossible de faire le contrôle (checksums)';
$lang['admin']['failure'] = 'Echec';
$lang['admin']['help_function_process_pagedata'] = '<h3>Que fait cette Balise ?</h3>
<p>Cette balise va traiter les données contenues dans le bloc "pagedata" des pages de contenu à travers Smarty. Elle permet de spécifier des données spécifiques à chaque page via Smarty sans avoir à changer le gabarit de chaque page.</p>
<h3>Comment l\'utiliser ?</h3>
<ol>
  <li>Insérer les variables Smarty assignées et autres logiques Smarty dans le champ contenu de la page (pagedata) sur les pages en question.</li>
  <li>Insérer la balise <code>{process_pagedata}</code> au plus haut de votre page de gabarit.</li>
</ol>
<br/>
<h3>Quels paramètres ?</h3>
<p><em>(option)</em> assign (string) - Assigne le résultat à une variable Smarty avec ce nom.</p>';
$lang['admin']['page_metadata'] = 'Métadonnées spécifiques pour cette page&nbsp;';
$lang['admin']['pagedata_codeblock'] = 'Balises Smarty spécifiques pour cette page&nbsp;';
$lang['admin']['error_uploadproblem'] = 'Une erreur s\'est produite pendant le transfert';
$lang['admin']['error_nofileuploaded'] = 'Aucun fichier n\'a été uploadé';
$lang['admin']['files_failed'] = 'Echec de la vérification md5sum sur les fichiers&nbsp;';
$lang['admin']['files_not_found'] = 'Fichiers non trouvés';
$lang['admin']['info_generate_cksum_file'] = 'Cette fonction vous permettra de générer un fichier de contrôle (checksums) et de l\'enregistrer sur votre ordinateur pour validation ultérieure. Cela devrait être fait juste avant de mettre en service le site Web, et/ou après toute les mises à jour, ou des modifications importantes.';
$lang['admin']['info_validation'] = 'Cette fonction permettra de comparer le contrôle (checksums) dans le fichier d\'installation avec les fichiers sur le serveur. Il peut vous aider à trouver des problèmes d\'upload, ou exactement quels fichiers ont été modifiés si votre système a été piraté.';
$lang['admin']['download_cksum_file'] = 'Télécharger le fichier Checksum';
$lang['admin']['perform_validation'] = 'Effectuer la validation';
$lang['admin']['upload_cksum_file'] = 'Uploader le fichier Checksum';
$lang['admin']['checksumdescription'] = 'Vérifier l\'intégrité des fichiers de CMS Made Simple™ par comparaison avec le contrôle (checksums).';
$lang['admin']['system_verification'] = 'Vérification du système';
$lang['admin']['extra1'] = 'Attribut supplémentaire 1 de la page&nbsp;';
$lang['admin']['extra2'] = 'Attribut supplémentaire 2 de la page&nbsp;';
$lang['admin']['extra3'] = 'Attribut supplémentaire 3 de la page&nbsp;';
$lang['admin']['start_upgrade_process'] = 'Début du processus d\'upgrade';
$lang['admin']['warning_upgrade'] = '<em><strong>ATTENTION</strong></em>&nbsp;: CMSMS™ a besoin d\'une mise à niveau - Le dossier /install doit être présent !';
$lang['admin']['warning_upgrade_info1'] = 'Vous utilisez le schéma version %s. et vous devez mettre à niveau au schéma version %s';
$lang['admin']['warning_upgrade_info2'] = 'Merci de cliquer sur le lien suivant : %s.';
$lang['admin']['warning_mail_settings'] = 'Vos paramètres de messagerie n\'ont pas été configuré. Cela pourrait interférer avec la capacité de votre site pour envoyer des messages par email. Vous devriez aller sur <a href="%s">Extensions >> CMSMailer</a> et configurer les paramètres email avec les informations fournies par votre hébergeur.';
$lang['admin']['view_page'] = 'Voir cette page dans une nouvelle fenêtre';
$lang['admin']['off'] = 'Off&nbsp;';
$lang['admin']['on'] = 'On&nbsp;';
$lang['admin']['invalid_test'] = 'Paramètre de test invalide !';
$lang['admin']['copy_paste_forum'] = 'Vue au format text <em>(Convient pour coller dans le post du forum)</em>';
$lang['admin']['permission_information'] = 'Informations sur les Permissions&nbsp;';
$lang['admin']['server_os'] = 'Système d\'exploitation serveur&nbsp;';
$lang['admin']['server_api'] = 'API serveur&nbsp;';
$lang['admin']['server_software'] = 'Version software du serveur&nbsp;';
$lang['admin']['server_information'] = 'Informations serveur&nbsp;';
$lang['admin']['session_save_path'] = 'Chemin du dossier Session';
$lang['admin']['max_execution_time'] = 'Temps Maximum d\'éxecution';
$lang['admin']['gd_version'] = 'Version GD';
$lang['admin']['upload_max_filesize'] = 'Taille maximum pour l\'Upload';
$lang['admin']['post_max_size'] = 'Taille maximum par méthode POST';
$lang['admin']['memory_limit'] = 'Mémoire Limite PHP effective';
$lang['admin']['server_db_type'] = 'Serveur de base de données&nbsp;';
$lang['admin']['server_db_version'] = 'Version du serveur de base de données&nbsp;';
$lang['admin']['phpversion'] = 'Version PHP actuelle';
$lang['admin']['safe_mode'] = 'Safe Mode PHP';
$lang['admin']['php_information'] = 'Informations PHP&nbsp;';
$lang['admin']['cms_install_information'] = 'Informations d\'Installation du CMS&nbsp;';
$lang['admin']['cms_version'] = 'Version du CMS';
$lang['admin']['installed_modules'] = 'Modules installés';
$lang['admin']['config_information'] = 'Informations de configuration du CMS';
$lang['admin']['systeminfo_copy_paste'] = 'Merci de faire un copier coller de cette sélection dans le post du forum';
$lang['admin']['help_systeminformation'] = 'Les informations affichées ci-dessous sont collectées depuis différents endroits, et permettent d\'informer pour un diagnostic ou une aide sur l\'installation de CMS Made Simple™.';
$lang['admin']['systeminfo'] = 'Informations du système';
$lang['admin']['systeminfodescription'] = 'Affiche différentes informations sur votre système pour aider à diagnostiquer des problèmes.';
$lang['admin']['systemmaintenance'] = 'Maintenance du système';
$lang['admin']['systemmaintenancedescription'] = 'Diverses fonctions de maintenance de votre système. Vous pouvez également consulter le changelog pour toutes les versions.';
$lang['admin']['sysmaintab_database'] = 'Base de données';
$lang['admin']['sysmaintab_changelog'] = 'Changelog&nbsp;';
$lang['admin']['sysmaintab_content'] = 'Cache et contenu';
$lang['admin']['sysmain_content_status'] = 'Statut du contenu';
$lang['admin']['sysmain_cache_status'] = 'Statut du cache';
$lang['admin']['sysmain_database_status'] = 'Statut de la base de données';
$lang['admin']['sysmain_updatehierarchy'] = 'Mise à jour des positions hiérarchiques des pages&nbsp;';
$lang['admin']['sysmain_confirmupdatehierarchy'] = 'Êtes-vous sûr(e) de mettre à jour la position hiérarchiques des pages ?';
$lang['admin']['sysmain_update'] = 'Mise à jour';
$lang['admin']['sysmain_pagesfound'] = 'pages trouvées';
$lang['admin']['sysmain_hierarchyupdated'] = 'Les positions hiérarchiques des pages ont été mise à jour';
$lang['admin']['sysmain_nostr_errors'] = 'Aucune erreur de structure n\'a été détectée dans la base de données';
$lang['admin']['sysmain_str_error'] = 'erreur de structure détectée dans table';
$lang['admin']['sysmain_str_errors'] = 'erreurs de structure détectées dans tables';
$lang['admin']['sysmain_tablesfound'] = 'tables trouvées (dont %d sans extension _seq)';
$lang['admin']['sysmain_repair'] = 'Réparation';
$lang['admin']['sysmain_repairtables'] = 'Réparer les tables&nbsp;';
$lang['admin']['sysmain_tablesrepaired'] = 'Tables réparées';
$lang['admin']['sysmain_optimizetables'] = 'Optimiser les tables&nbsp;';
$lang['admin']['sysmain_tablesoptimized'] = 'Tables optimisées';
$lang['admin']['sysmain_optimize'] = 'Optimisation';
$lang['admin']['sysmain_confirmclearcache'] = 'Êtes-vous sûr(e) de vider le cache ?';
$lang['admin']['sysmain_nocontenterrors'] = 'Aucune erreur détectée dans le contenu';
$lang['admin']['sysmain_pagesmissinalias'] = 'pages avec alias manquant';
$lang['admin']['sysmain_confirmfixaliases'] = 'Êtes-vous sûr(e) d\'ajouter des alias aux pages ?';
$lang['admin']['sysmain_fixaliases'] = 'Ajouter des alias où ils manquent';
$lang['admin']['sysmain_aliasesfixed'] = 'alias corrigés';
$lang['admin']['sysmain_pagesinvalidtypes'] = 'pages trouvées sans alias valide';
$lang['admin']['sysmain_confirmfixtypes'] = 'Êtes-vous sûr(e) de convertir vers des pages de contenu standard ?';
$lang['admin']['sysmain_fixtypes'] = 'Convertir en pages de contenu standard';
$lang['admin']['sysmain_typesfixed'] = 'types de contenu corrigés';
$lang['admin']['welcome_user'] = 'Bienvenu(e)&nbsp;';
$lang['admin']['itsbeensincelogin'] = 'Cela fait %s depuis votre dernière connexion';
$lang['admin']['days'] = 'jours';
$lang['admin']['day'] = 'jour';
$lang['admin']['hours'] = 'heures';
$lang['admin']['hour'] = 'heure';
$lang['admin']['minutes'] = 'minutes&nbsp;';
$lang['admin']['minute'] = 'minute&nbsp;';
$lang['admin']['help_css_max_age'] = 'Ce paramètre peut être élevé pour des sites statiques, mais doit être à 0 pendant le développement.';
$lang['admin']['css_max_age'] = 'Temps maximum (secondes) de stockage en cache du navigateur de la feuille de style&nbsp;';
$lang['admin']['error'] = 'Erreur';
$lang['admin']['new_version_available'] = '<em>Remarque :</em> Une nouvelle version de CMS Made Simple™ est disponible. Informez-en votre administrateur.';
$lang['admin']['master_admintheme'] = 'Thème de l\'administration par défaut (pour la page de connexion)&nbsp;';
$lang['admin']['contenttype_separator'] = 'Séparateur';
$lang['admin']['contenttype_sectionheader'] = 'Entête de section';
$lang['admin']['contenttype_content'] = 'Contenu';
$lang['admin']['contenttype_pagelink'] = 'Lien page interne';
$lang['admin']['nogcbwysiwyg'] = 'Interdire les éditeurs WYSIWYG dans blocs de contenus globaux&nbsp;';
$lang['admin']['destination_page'] = 'Page de destination&nbsp;';
$lang['admin']['additional_params'] = 'Paramètres additionnels&nbsp;';
$lang['admin']['help_function_current_date'] = '<h3 style="color: red;">ATTENTION cette balise est obsolète.</h3>
 		 <p>Nous recommandons d\'utiliser la balise <code>{$smarty.now|cms_date_format}</code></p>	
<h3>Que fait cette Balise ?</h3>
	<p>Affiche la date et l\'heure actuelle.  Si aucun format n\'est donné, l\'affichage par défaut sera \'Jan 01, 2004\'.</p>
	<h3>Comment l\'utiliser ?</h3>
	<p>Insérer la balise dans votre page ou votre gabarit : <code>{current_date format="%A %d-%b-%y %T %Z"}</code></p>
	<h3>Quels paramètres ?</h3>
	<ul>
		<li><em>(option)</em> format - le format de Date/Heure utilisant les paramètres de la fonction php strftime.  Voir <a href="http://php.net/strftime" target="_blank">ici</a> pour une liste des paramètres et plus d\'information.</li>
		<li><em>(option)</em> ucword - Si "true" affiche en majuscule la première lettre de chaque mot.</li>
<li><em>(option)</em> assign (string) - Assigne le résultat à une variable Smarty avec ce nom.</li>
	</ul>';
$lang['admin']['help_function_valid_xhtml'] = '<h3>Que fait cette Balise ?</h3>
<p>Affiche un lien vers le validateur HTML du w3c.</p>
<h3>Comment l\'utiliser ?</h3>
<p>Insérer la balise dans votre page ou votre gabarit : <code>{valid_xhtml}</code></p>
<h3>Quels paramètres ?</h3>
    <ul>
	<li><em>(option)</em> url (string) - l\'URL utilisé pour la validation, si aucun n\'est entré, http://validator.w3.org/check/referer est utilisé.</li>
	<li><em>(option)</em> class (string) - Si défini, il sera utilisé comme attribut de la classe pour l\'élément lien (a)</li>
	<li><em>(option)</em> target (string) - Si défini, il sera utilisé comme attribut de la cible pour l\'élément lien (a)</li>
	<li><em>(option)</em> image (true/false) - Si défini à "false", un lien en texte sera utilisé à la place d\'une image/icône.</li>
	<li><em>(option)</em> text (string) - Si défini, il sera utilisé pour le texte du lien ou le texte alternatif de l\'image. \'valid XHTML 1.0 Transitional\' par défaut.<br /> Quand une image est utilisée, l\'entrée donnée sera également utilisée pour l\'attribut "alt" (par défaut, peut être outrepassé en utilisant le paramètre \'alt\').</li>
	<li><em>(option)</em> image_class (string) - Seulement si \'image\' n\'est pas sur "false". Si défini, il sera utilisé comme attribut de la classe pour l\'élément image (img)</li>
	<li><em>(option)</em> src (string) - Seulement si \'image\' n\'est pas sur "false". L\'icône à afficher. L\'image par défaut est http://www.w3.org/Icons/valid-xhtml10</li>
	<li><em>(option)</em> width (string) - Seulement si \'image\' n\'est pas sur "false". Largeur de l\'image. Par défaut à 88 (largeur de http://www.w3.org/Icons/valid-xhtml10)</li>
	<li><em>(option)</em> height (string) - Seulement si \'image\' n\'est pas sur "false". Hauteur de l\'image. Par défaut à 31 (hauteur de http://www.w3.org/Icons/valid-xhtml10)</li>
	<li><em>(option)</em> alt (string) - Seulement si \'image\' n\'est pas sur "false". Le texte alternatif (attribut \'alt\' ) pour l\'image (élément). Si aucun n\'est défini, le texte du lien sera utilisé.</li>
<li><em>(option)</em> assign (string) - Assigne le résultat à une variable Smarty avec ce nom.</li>
    </ul>';
$lang['admin']['help_function_valid_css'] = '<h3>Que fait cette Balise ?</h3>
<p>Affiche un lien vers le validateur CSS du w3c.</p>
<h3>Comment l\'utiliser ?</h3>
<p>Insérer la balise dans votre page ou votre gabarit : <code>{valid_css}</code></p>
<h3>Quels paramètres ?</h3>
    <ul>
        <li><em>(option)</em> url (string) - l\'URL utilisé pour la validation, si aucun n\'est entré, http://jigsaw.w3.org/css-validator/check/referer est utilisé.</li>
	<li><em>(option)</em> class (string) - Si défini, il sera utilisé comme attribut de la classe pour l\'élément lien (a)</li>
	<li><em>(option)</em> target (string) - Si défini, il sera utilisé comme attribut de la cible pour l\'élément lien (a)</li>
	<li><em>(option)</em> image (true/false) - Si défini à "false", un lien en texte sera utilisé à la place d\'une image/icône.</li>
	<li><em>(option)</em> text (string) - Si défini, il sera utilisé pour le texte du lien ou le texte alternatif de l\'image. \'Valid CSS 2.1\' par défaut.<br /> Quand une image est utilisée, l\'entrée donnée sera également utilisée pour l\'attribut "alt" (par défaut, peut être outrepassé en utilisant le paramètre \'alt\').</li>
	<li><em>(option)</em> image_class (string) - Seulement si \'image\' n\'est pas sur "false". Si défini, il sera utilisé comme attribut de la classe pour l\'élément image (img)</li>
        <li><em>(option)</em> src (string) - Seulement si \'image\' n\'est pas sur "false". L\'icône à afficher. L\'image par défaut est http://jigsaw.w3.org/css-validator/images/vcss</li>
        <li><em>(option)</em> width (string) - Seulement si \'image\' n\'est pas sur "false". Largeur de l\'image. Par défaut à 88 (largeur de http://jigsaw.w3.org/css-validator/images/vcss)</li>
        <li><em>(option)</em> height (string) -Seulement si \'image\' n\'est pas sur "false". Hauteur de l\'image. Par défaut à 31 (hauteur de http://jigsaw.w3.org/css-validator/images/vcss)</li>
	<li><em>(option)</em> alt  (string) - Seulement si \'image\' n\'est pas sur "false". Le texte alternatif (attribut \'alt\' ) pour l\'image (élément). Si aucun n\'est défini, le texte du lien sera utilisé.</li>
<li><em>(option)</em> assign (string) - Assigne le résultat à une variable Smarty avec ce nom.</li>
    </ul>';
$lang['admin']['help_function_title'] = '<h3>Que fait cette Balise ?</h3>
	<p>Affiche le titre de la page.</p>
	<h3>Comment l\'utiliser ?</h3>
	<p>Insérer la balise dans votre page ou votre gabarit : <code>{title}</code></p>
	<h3>Quels paramètres ?</h3>
	<p><em>(option)</em> assign (string) - Assigne le résultat à une variable Smarty avec ce nom.</p>';
$lang['admin']['help_function_stylesheet'] = '<h3>Que fait cette Balise ?</h3>
<p><span style="color: #ff0000;">ATTENTION cette balise est obsolète</span> et sera supprimé des versions futures de CMSMS™.</p>
	<p>Récupère les données des feuilles de style du système. Par défaut, elle prend toutes les feuilles de style liées au gabarit en cours.</p>
	<h3>Comment l\'utiliser ?</h3>
	<p>Insérer la balise dans votre page ou votre gabarit dans l\'entête : <code>{stylesheet}</code></p>
	<h3>Quels paramètres ?</h3>
	<ul>
		<li><em>(option)</em> name - Au lieu d\'avoir toutes les feuilles de style pour la page donnée, il n\'y aura que celle nommée spécifiquement, qu\'elle soit liée au gabarit en cours ou non.</li>
		<li><em>(option)</em> media - Si le nom est défini, ce paramètre permet de changer de type de média pour cette feuille de style.</li>
 <li><em>(option)</em> templateid - Si templateid est défini, les feuilles de styles seront associées uniquement à ce gabarit, au lieu de celui en cours.</li>
<li><em>(option)</em> assign (string) - Assigne le résultat à une variable Smarty avec ce nom.</li>
	</ul>';
$lang['admin']['help_function_sitename'] = '<h3>Que fait cette Balise ?</h3>
        <p>Affiche le nom du site. Ce paramètre est défini lors de l\'installation et peut être modifié via les Paramètres Globaux du panneau d\'administration.</p>
        <h3>Comment l\'utiliser ?</h3>
        <p>Insérer la balise dans votre page ou votre gabarit : <code>{sitename}</code></p>
        <h3>Quels paramètres ?</h3>
        <p><em>(option)</em> assign (string) - Assigne le résultat à une variable Smarty avec ce nom.</p>';
$lang['admin']['help_function_search'] = '<h3>Que fait cette Balise ?</h3>
	<p>C\'est une balise pour le module de recherche afin de rendre la syntaxe de balise plus aisée. 
	Au lieu d\'avoir à utiliser <code>{cms_module module=\'Search\'}</code> vous pouvez maintenant utiliser <code>{search}</code> pour insérer le module dans un gabarit.
	</p>
	<h3>Comment l\'utiliser ?</h3>
	<p>Insérer la balise <code>{search}</code> dans votre votre gabarit où la boîte de recherche doit apparaître. Pour de l\'aide à propos du module de recherche, référez-vous à l\'aide du module Recherche.</p>';
$lang['admin']['help_function_root_url'] = '<h3>Que fait cette Balise ?</h3>
	<p>Affiche l\'URL de la racine du site.</p>
	<h3>Comment l\'utiliser ?</h3>
	<p>Insérer la balise dans votre page ou votre gabarit : <code>{root_url}</code></p>
	<h3>Quels paramètres ?</h3>
        <p><em>(option)</em> autossl=1 - Activé par défaut, cette option permet de détecter si la demande faite au serveur était sur SSL, et si  l\'url était retournée correctement configuré en SSL. Pour désactiver cette fonction préciser autossl = 0.</p>
<p><em>(option)</em> assign (chaîne) - Affecte les résultats à une variable Smarty qui porte ce nom.</p>';
$lang['admin']['help_function_repeat'] = '<h3>Que fait cette Balise ?</h3>
  <p>Répète une séquence spécifiée de caractères, un nombre défini de fois.</p>
  <h3>Comment l\'utiliser ?</h3>
  <p>Insérer la balise dans votre page ou votre gabarit : <code>{repeat string=\'répéter ça \' times=\'3\'}</code></p>
  <h3>Quels paramètres ?</h3>
  <ul>
  <li>string=\'text\' - La séquence à répéter</li>
  <li>times=\'num\' - Le nombre de répétition de cette séquence.</li>
<li><em>(option)</em> assign (string) - Assigne le résultat à une variable Smarty avec ce nom.</li>
  </ul>';
$lang['admin']['help_function_recently_updated'] = '<h3>Que fait cette Balise ?</h3>
	<p>Affiche une liste des pages récemment modifiées.</p>
	<h3>Comment l\'utiliser ?</h3>
	<p>Insérer la balise dans votre page ou votre gabarit : <code>{recently_updated}</code></p>
	<h3>Quels paramètres ?</h3>
	<ul>
	 <li><p><em>(option</em> number=\'10\' - Nombre des pages à afficher.</p><p>Exemple : {recently_updated number=\'15\'} affichera 15 pages...</p></li>
 	 <li><p><em>(option)</em> leadin=\'Last changed\' - Texte à afficher à gauche de la date de modification.</p><p>Exemple : {recently_updated leadin=\'Dernière Modification\'}</p></li>
 	 <li><p><em>(option)</em> showtitle=\'true\' - Affiche l\'attribut titre si défini (true|false).</p><p>Exemple : {recently_updated showtitle=\'true\'}</p></li>											 	
	 <li><p><em>(option)</em> css_class=\'some_name\' - Ajoute une balise div définie avec cette classe autour de la liste.</p><p>Exemple : {recently_updated css_class=\'nom_de_classe\'}</p></li>											 	
	 <li><p><em>(option)</em> dateformat=\'d.m.y h:m\' - Par défaut d.m.y h:m , utilisez le format de votre choix (voir php -date- format)</p><p>Exemple : {recently_updated dateformat=\'D M j G:i:s T Y\'}</p></li>	
<li><em>(option)</em> assign (string) - Assigne le résultat à une variable Smarty avec ce nom.</li>										 	
	</ul>
	<p>ou une combinaison :</p>
	<pre>{recently_updated number=\'15\' showtitle=\'false\' leadin=\'Dernière Modification : \' css_class=\'nom_de_classe\' dateformat=\'D M j G:i:s T Y\'}</pre>';
$lang['admin']['help_function_print'] = '<h3>Que fait cette Balise ?</h3>
	<p>C\'est simplement une balise pour le module d\'impression afin de rendre la syntaxe de balise plus aisée. 
	Au lieu d\'utiliser <code>{cms_module module=\'CMSPrinting\'}</code> vous pouvez aussi utiliser <code>{print}</code> pour insérer ce module sur vos pages/gabarits
	</p>
	<h3>Comment l\'utiliser ?</h3>
	<p>Insérer la balise dans votre page ou votre gabarit : <code>{print}</code>. Pour plus de détails sur les options et paramètres, merci de consulter l\'aide du module d\'impression personnalisée.</p>';
$lang['admin']['login_info_title'] = 'Information&nbsp;';
$lang['admin']['login_info'] = 'Afin que la console Administration fonctionne correctement&nbsp;';
$lang['admin']['login_info_params'] = '<ol> 
  <li>Les cookies doivent être activés dans votre navigateur</li> 
  <li>Javascript doit être activé dans votre navigateur</li> 
  <li>Des fenêtres pop-up doivent être autorisées à l\'adresse suivante&nbsp;:</li> 
</ol>';
$lang['admin']['help_function_news'] = '<h3>Que fait cette Balise ?</h3>
	<p>C\'est simplement une balise pour le module de news afin de rendre la syntaxe de balise plus aisée. 
	Au lieu de devoir utiliser <code>{cms_module module=\'News\'}</code>, vous pouvez insérer le module dans les pages et gabarits en utilisant <code>{news}</code>.
	</p>
	<h3>Comment l\'utiliser ?</h3>
	<p>Insérer la balise dans votre page ou votre gabarit : <code>{news}</code>. Pour de l\'aide à propos du module de news/articles, les paramètres etc..., merci de se référer à l\'aide du module news.News</p>';
$lang['admin']['help_function_modified_date'] = '<h3>Que fait cette Balise ?</h3>
        <p>Montre la date et l\'heure de la dernière modification de la page. Si aucun format n\'est défini, l\'affichage par défaut sera du type \'Jan 01, 2004\'.</p>
        <h3>Comment l\'utiliser ?</h3>
        <p>Insérer la balise dans votre page ou votre gabarit : <code>{modified_date format="%A %d-%b-%y %T %Z"}</code></p>
        <h3>Quels paramètres ?</h3>
        <ul>
<li><em>(option)</em> format - le format de Date/Heure utilisant les paramètres de la fonction php strftime.  Voir <a href="http://php.net/strftime" target="_blank">ici</a> pour une liste des paramètres et plus d\'information.</li>
<li><em>(option)</em> assign - Attribuer les résultats à la variable Smarty.</li>
        </ul>';
$lang['admin']['help_function_metadata'] = '<h3>Que fait cette Balise ?</h3>
	<p>Affiche les metadata pour cette page. Les metadata de la page de paramètres globaux et ceux spécifiques à la page seront affichés.</p>
	<h3>Comment l\'utiliser ?</h3>
	<p>Insérer la balise dans votre page ou votre gabarit : <code>{metadata}</code></p>
	<h3>Quels paramètres ?</h3>
	<ul>
		<li><em>(option)</em> showbase (true/false) - Si défini à false, la balise de base ne sera pas envoyée.</li>
<li><em>(option)</em> assign (string) - Assigne le résultat à une variable Smarty avec ce nom.</li>
	</ul>';
$lang['admin']['help_function_menu_text'] = '<h3>Que fait cette Balise ?</h3>
	<p>Imprime le texte du menu de la page.</p>
	<h3>Comment l\'utiliser ?</h3>
	<p>Insérer la balise dans votre page ou votre gabarit : <code>{menu_text}</code></p>
	<h3>Quels paramètres ?</h3>
	<p><em>(option)</em> assign (string) - Assigne le résultat à une variable Smarty avec ce nom.</p>';
$lang['admin']['help_function_menu'] = '<h3>Que fait cette Balise ?</h3>
	<p>C\'est une balise pour le module Menu Manager pour simplifier la syntaxe. 
	Au lieu d\'utiliser la balise <code>{cms_module module=\'MenuManager\'}</code> vous pouvez utiliser <code>{menu}</code> pour insérer le module dans des pages et gabarits.
	</p>
	<h3>Comment l\'utiliser ?</h3>
	<p>Insérer la balise dans votre page ou votre gabarit : <code>{menu}</code>. Pour de l\'aide à propos du module Menu Manager, les paramètres etc..., merci de se référer à l\'aide sur le module Menu Manager</p>';
$lang['admin']['help_function_last_modified_by'] = '<h3>Que fait cette Balise ?</h3>
        <p>Montre la dernière personne qui a modifié la page. Si aucun format n\'est spécifié, l\'ID du nombre de l\'utilisateur sera affiché par défaut.</p>
        <h3>Comment l\'utiliser ?</h3>
        <p>Insérer la balise dans votre page ou votre gabarit : <code>{last_modified_by format="fullname"}</code></p>
        <h3>Quels paramètres ?</h3>
        <ul>
                <li><em>(option)</em> format - id, username, fullname</li>
<li><em>(option)</em> assign (string) - Assigne le résultat à une variable Smarty avec ce nom.</li>
        </ul>';
$lang['admin']['help_function_image'] = '<h3>Que fait cette Balise ?</h3>
  <p>Crée une balise image pour une image stockée dans votre dossier /uploads/images</p>
  <h3>Comment l\'utiliser ?</h3>
  <p>Insérer la balise dans votre page ou votre gabarit :  <code>{image src="mon_image.jpg"}</code></p>
  <h3>Quels paramètres ?</h3>
  <ul>
     <li><strong>(requis)</strong>  <tt>src</tt> - fichier image dans votre dossier d\'images.</li>
     <li><em>(option)</em>  <tt>width</tt> - Largeur de l\'image dans la page. La valeur par défaut est la taille réelle.</li>
     <li><em>(option)</em>  <tt>height</tt> - Hauteur de l\'image dans la page. La valeur par défaut est la taille réelle.</li>
     <li><em>(option)</em>  <tt>alt</tt> - texte "alt "de l\'image - nécessaire pour une meilleure compatibilité xhtml. La valeur par défaut est le nom de fichier.</li>
     <li><em>(option)</em>  <tt>class</tt> - La classe CSSde l\'image.</li>
     <li><em>(option)</em>  <tt>title</tt> - Infobulle au passage la souris sur le texte de l\'image. La valeur par défaut est le texte "alt "de l\'image.</li>
     <li><em>(option)</em>  <tt>addtext</tt> - Le texte supplémentaire à mettre dans la balise.</li>
<li><em>(option)</em> <tt>assign (string)</tt> - Assigne le résultat à une variable Smarty avec ce nom.de l</li>
     </ul>';
$lang['admin']['help_function_html_blob'] = '<h3>Que fait cette Balise ?</h3>
	<p>Voir l\'aide sur global_content pour la description.</p>';
$lang['admin']['help_function_google_search'] = '<h3>Que fait cette Balise ?</h3>
	<p>Recherche dans votre site Web à l\'aide du moteur de recherche Google.</p>
	<h3>Comment l\'utiliser ?</h3>
	<p>Insérer la balise dans votre page ou votre gabarit : <code>{google_search}</code></p>
	<p>Note : Google a besoin d\'avoir votre site Web indexé pour que cela fonctionne. Vous pouvez soumettre votre site à Google <a href="http://www.google.com/addurl.html">ici</a>.</p>
	<h3>Que faire si je veux changer l\'apparence de la zone de texte ou un bouton ?</h3>
	<p>Le look de la zone de texte et le bouton peut être modifié via les CSS. La  textbox est un id de TextSearch et le bouton est un ID de buttonSearch.</p>

	<h3>Quels paramètres ?</h3>
	<ul>
		<li><em>(option)</em> domain - Cela indique à Google le domaine du site Web pour la recherche. Ce script essaie de déterminer automatiquement cela.</li>
		<li><em>(option)</em> buttonText - Le texte que vous souhaitez afficher sur le bouton de recherche. La valeur par défaut est "Search Site".</li>
<li><em>(option)</em> assign (string) - Assigne le résultat à une variable Smarty avec ce nom.</li>
	</ul>';
$lang['admin']['help_function_global_content'] = '<h3>Que fait cette Balise ?</h3>
	<p>Insère un bloc de contenu (global_content) dans votre gabarit ou  page.</p>
	<h3>Comment l\'utiliser ?</h3>
	<p>Insérer la balise dans votre page ou votre gabarit : <code>{global_content name=\'myblob\'}</code>, où name est le nom du bloc de contenu que vous avez créer.</p>
	<h3>Quels paramètres ?</h3>
	<ul>
  	  <li>name - Le nom du bloc de contenu à afficher.</li>
          <li><em>(option)</em> assign - Le nom d\'une variable smarty auquel le bloc de contenu global doit être attribué.</li>
	</ul>';
$lang['admin']['help_function_get_template_vars'] = '<h3>Que fait cette Balise ?</h3>
	<p>Sauvegarde toutes les variables smarty connu dans votre page</p>
	<h3>Comment l\'utiliser ?</h3>
	<p>Insérer la balise dans votre page ou votre gabarit : <code>{get_template_vars}</code></p>
	<h3>Quels paramètres ?</h3>
	 <p><em>(option)</em> assign (string) - Assigne le résultat à une variable Smarty avec ce nom.</p>';
$lang['admin']['help_function_uploads_url'] = '<h3>Que fait cette Balise ?</h3>
	<p>Imprime l\'URL de l\'emplacement du dossier uploads du site.</p>
	<h3>Comment l\'utiliser ?</h3>
	<p>Insérer la balise dans votre page ou votre gabarit : <code>{uploads_url}</code></p>
	<h3>Quels paramètres ?</h3><ul>
<li><em>(option)</em> assign (string) - Assigne le résultat à une variable Smarty avec ce nom. </li></ul>';
$lang['admin']['help_function_embed'] = '<h3>Que fait cette Balise ?</h3>
	<p>Inclut une autre application dans votre CMS. le plus utilisé est par exemple un forum. 
	Cette application utilise IFRAMES, mais des anciens navigateurs peuvent avoir des problèmes. Désolé mais c\'est la seule manière de fonctionner sans l\'application externe.</p>
	<h3>Comment l\'utiliser ?</h3>
	<ul>
        <li>a) Ajouter la balise <code>{embed header=true}</code> dans la section "Head"  de votre gabarit de page, ou dans la section "Métadonnées spécifiques pour cette page" dans l\'onglet option de votre page.  Cela permettra de s\'assurer que le javascript est inclus. Si vous insérez cette balise dans la section des "Métadonnées" dans l\'onglet option de votre page, vous devez vous assurer que la balise
<code>{metadata}</code> est bien dans votre gabarit de page.</li>
        <li>b) Ajouter la balise <code>{embed url="http://www.google.com"}</code> dans votre page ou dans le corps du gabarit de la page.</li>
        </ul>
        <br/>
        <h4>Exemple pour une iframe plus large</h4>
	<p>Ajouter le code suivant dans votre feuille de style CSS :</p>
        <pre>#myframe { height: 600px; }</pre>
        <br/>
        <h3>Quels paramètres ?</h3>
        <ul>
            <li><strong>(requis)</strong> url - l\'URL à inclure</li> 
            <li><strong>(requis)</strong> header=true - cela générera le code pour le redimensionnement de l\'IFRAME.</li>
            <li>(option) name - une option pour utiliser le nom de l\'iframe (au lieu de myframe).<p>Si cette option est utilisée, elle doit être identique dans les deux appels, ex : {embed header=true name=foo} and {embed name=foo url=http://www.google.com}.</p></li>
        </ul>';
$lang['admin']['help_function_description'] = '<h3>Que fait cette Balise ?</h3>
	<p>Imprime la description de la page.</p>
	<h3>Comment l\'utiliser ?</h3>
	<p>Insérer la balise dans votre page ou votre gabarit : <code>{description}</code></p>
	<h3>Quels paramètres ?</h3>
	<p><em>(option)</em> assign (string) - Assigne le résultat à une variable Smarty avec ce nom.</p>';
$lang['admin']['help_function_created_date'] = '<h3>Que fait cette Balise ?</h3>
        <p>Affiche la date et l\'heure de création de la page.  Si aucun format n\'est défini l\'affichage par défaut sera comme par exemple \'Jan 01, 2004\'.</p>
        <h3>Comment l\'utiliser ?</h3>
        <p>Insérer la balise dans votre page ou votre gabarit : <code>{created_date format="%A %d-%b-%y %T %Z"}</code></p>
        <h3>Quels paramètres ?</h3>
        <ul>
                <li><em>(option)</em> format - Date/Time utilise le format de la fonction PHP strftime. Voir <a href="http://php.net/strftime" target="_blank">ici</a> pour un paramètre et les informations.</li>
<li><em>(option)</em> assign - Attribuer les résultats à la variable Smarty.</li>
        </ul>';
$lang['admin']['help_function_content'] = '<h3>Que fait cette Balise ?</h3>
	<p>C\'est l\'endroit où le contenu de votre page sera affichée. Elle sera insérée dans le gabarit de la page pour affichage.</p>
	<h3>Comment l\'utiliser ?</h3>
	<p>Insérer la balise dans votre gabarit : <code>{content}</code>.</p>
<p><strong>La balise par défaut <code>(content)</code> est nécessaire pour le bon fonctionnement. (Sans les paramètres) </strong>  Pour donner à la balise un nom spécifique, utiliser l\'étiquette label (exemple {content label="Mon_Contenu "}). Des blocs de contenus supplémentaires peuvent être ajoutées en utilisant les paramètres ci-dessous. </p>
	<h3>Quels paramètres ?</h3>
	<ul>
		<li><em>(option)</em> block - Vous permet d\'avoir plus d\'un bloc de contenu par page. Lorsque plusieurs balises "content" sont mises dans un gabarit,  le nombre de zones d\'édition sera affiché lorsque la page sera éditée.
<p>Exemple :</p>
<pre>{content block="second_content_block" label="Second Content Block"}</pre>
<p>Maintenant, lorsque vous editez une page, il y aura un texte intitulé "Second Content Block".</p></li>
		<li><em>(option)</em> wysiwyg (true/false) - Si false, alors un éditeur wysiwyg ne sera jamais utilisé lors de l\'édition de ce bloc. Si true, alors agit comme d\'habitude. Ne fonctionne que lorsque le paramètre "block" est utilisé.</li>
		<li><em>(option)</em> oneline (true/false) - Si true, alors une seule ligne d\'édition sera montrée lors de l\'édition de ce bloc. Si false, alors agit comme d\'habitude. Ne fonctionne que lorsque le paramètre "block" est utilisé.</li>
<li><em>(option)</em> size - Applicable uniquement lorsque l\'option "oneline" est utilisée, ce paramètre optionnel vous permet de spécifier la taille de la zone. La valeur par défaut est de 50.</li>
<li><em>(option) </em>maxlength - Applicable uniquement lorsque l\'option "oneline" est utilisé ce paramètre optionnel permet de spécifier la longueur maximale d\'entrée pour le champ d\'édition. La valeur par défaut est de 255.</li>
<li><em>(option)</em> default - Vous permet de préciser le contenu par défaut pour le contenu des blocs (content blocks  additionels seulement).</li>
<li><em>(option)</em>label - Permet de spécifier un label pour afficher dans la page d\'édition de contenu.</li>
<li><em>(optional)</em> tab - L\'onglet désiré pour afficher ce champ dans le formulaire d\'édition.</li>
		<li><em>(option)</em> assign - Attribue le contenu à un paramètre smarty que vous pouvez ensuite utiliser dans d\'autres zones de la page, ou pour tester si le contenu existe ou non.
<p>Exemple de passage d\'une page de contenu des balises (tags) définies par l\'utilisateur comme un paramètre :</p>
 
<pre>
         {content assign=pagecontent}
         {table_of_contents thepagecontent="$pagecontent"}
</pre>
</li>
	</ul>';
$lang['admin']['help_function_contact_form'] = '<h2 style="color: red;">ATTENTION cette balise est obsolète.</h2>
<h3>Cette balise est obsolète et supprimée depuis la version CMS Made Simple™ 1.5. </h3>
  <p>Vous pouvez utiliser le module FormBuilder et son formulaire de contact.</p>';
$lang['admin']['help_function_cms_versionname'] = '<h3>Que fait cette Balise ?</h3>
	<p>Cette balise est utilisée pour insérer le nom de version du CMS dans votre gabarit ou votre page. Elle n\'affiche rien d\'autre que le nom de la version.</p>
	<h3>Comment l\'utiliser ?</h3>
	<p>Insérer la balise dans votre page ou votre gabarit : <code>{cms_versionname}</code></p>
	<h3>Quels paramètres ?</h3>
	<p><em>(option)</em> assign (string) - Assigne le résultat à une variable Smarty avec ce nom.</p>';
$lang['admin']['help_function_cms_version'] = '<h3>Que fait cette Balise ?</h3>
	<p>Cette balise est utilisé pour insérer le numéro de la version courante du CMS dans votre page ou votre gabarit. Il n\'affiche rien d\'autre que le numéro de version.</p>
	<h3>Comment l\'utiliser ?</h3>
	<p>C\'est une balise basique.  Insérer la balise dans votre page ou votre gabarit : <code>{cms_version}</code></p>
	<h3>Quels paramètres ?</h3>
	<p><em>(option)</em> assign (string) - Assigne le résultat à une variable Smarty avec ce nom.</p>';
$lang['admin']['about_function_cms_selflink'] = '<p>Author: Ted Kulp <tedkulp@users.sf.net></p>
		<p>Version: 1.1</p>
		<p>Modified: Martin B. Vestergaard <mbv@nospam.dk></p>
		<p>Version: 1.41</p>
		<p>Modified: Russ Baldwin</p>
		<p>Version: 1.42</p>
		<p>Modified: Marcus Bointon <coolbru@users.sf.net></p>
		<p>Version: 1.43</p>
		<p>Modified: Tatu Wikman <tsw@backspace.fi></p>
		<p>Version: 1.44</p>
		<p>Modified: Hans Mogren <http://hans.bymarken.net/></p>
		<p>Version: 1.45</p>

		<p>
		Change History:<br/>
               1.47 - Adds width and height parameters.<br/>
		1.46 - Fixes a problem with too many queries when using the dir=start option.<br/>
		1.45 - Added a new option for "dir", "up", for links to the parent page e.g. dir="up" (Hans Mogren).<br />
		1.44 - Added new parameters "ext" and "ext_info" to allow external links with class="external" and info text after the link, ugly hack but works thinking about rewriting this(Tatu Wikman)<br />
		1.43 - Added new parameters "image" and "imageonly" to allow attachment of images to be used for page links, either instead of or in addition to text links. (Marcus Bointon)<br />
		1.42 - Added new parameter "anchorlink" and a new option for "dir" namely, "anchor", for internal page links. e.g. dir="anchor" anchorlink="internal_link". (Russ)<br />
		1.41 - added new parameter "href" (LeisureLarry)<br />
		1.4 - fixed bug next/prev linking to non-content pages. (Thanks Teemu Koistinen for this fix)<br />
		1.3 - added option "more"<br />
		1.2 - by Martin B. Vestergaard
		<ul>
		<li>changed default text to Page Name (was Page Alias)</li>
		<li>added option dir=next/prev to display next or previous item in the hierachy - thanks to 100rk</li>
		<li>added option class to add a class= statement to the a-tag.</li>
		<li>added option menu to display menu-text in sted of Page Name</li>
		<li>added option lang to display link-labels in different languages</li>
		</ul>
		1.1 - Changed to new content system<br />
		1.0 - Initial release
		</p>';
$lang['admin']['help_function_cms_selflink'] = '<h3>Que fait cette Balise ?</h3>
		<p>Crée un lien vers une autre page de contenu de CMSMS™ l\'intérieur de votre gabarit ou de votre contenu. Peut aussi être utilisé pour les liens externes avec le paramètre "ext".</p>
		<h3>Comment l\'utiliser ?</h3>
		<p>Insérer la balise dans votre page ou votre gabarit : <code>{cms_selflink page="1"}</code> or  <code>{cms_selflink page="alias"}</code></p>
		<h3>Quels paramètres ?</h3>
		
		<ul>
		<li><em>(option)</em> <tt>page</tt> - ID ou alias de la page du lien.</li>
		<li><em>(option)</em> <tt>dir anchor (liens internes)</tt> - Nouvelle option pour une page de lien interne. Si vous utilisez cette balise <tt>anchorlink</tt> doit être utilisé pour votre lien. </li> <!-- Russ - 25-04-2006 -->
		<li><em>(option)</em> <tt>anchorlink</tt> - Nouveau paramètre pour une page de lien interne. Si utilisé alors <tt>dir = "anchor"</tt> doit aussi être défini. Pas besoin d\'ajouter le #, car il sera ajouté automatiquement.</li> <!-- Russ - 25-04-2006 -->
		<li><em>(option)</em> <tt>urlparam</tt> - Spécifie des paramètres avec l\'URL. <strong>Ne pas utiliser ce paramètre  avec <em>"anchorlink"</em>
</strong></li>
		<li><em>(option)</em> <tt>tabindex ="a value"</tt> - Défini un tabindex pour le lien.</li> <!-- Russ - 22-06-2005 -->
		<li><em>(option)</em> <tt>dir start/next/prev/up (previous)</tt> - Lien vers la page de démarrage par défaut ou la page suivante ou précédente, ou la page parent (up). Liens vers la page de démarrage par défaut ou la page suivante ou précédente, ou la page parent (up). Si utilisé <tt>page</tt> ne doit pas être donné.
<strong>Note :</strong> Seulement une des options peut être utilisée de la même déclaration "cms_selflink" !</li>
		<li><em>(option)</em> <tt>text</tt> - Texte à afficher pour le lien. S\'il n\'est pas fourni, le nom de la page est utilisé à la place.</li>
		<li><em>(option)</em> <tt>menu 1/0</tt> - Si 1, le texte du menu est utilisé pour le texte du lien au lieu du Nom de la page.</li> <!-- mbv - 21-06-2005 -->
		<li><em>(option)</em> <tt>target</tt> - Option pour la cible d\'un lien vers. Utiliser pour une frame et du javascript.</li>
		<li><em>(option)</em> <tt>class</tt> - Classe CSS pour le lien < a > lien < /a >. Utile pour le style du lien.</li> <!-- mbv - 21-06-2005 -->

		<li><em>(option)</em> <tt>id</tt> - Option css_id pour le lien < a > llien < /a >.</li> <!-- mbv - 29-06-2005 -->
		<li><em>(option)</em> <tt>more</tt> - ajoute des options supplémentaires dans le lien < a > lien < /a >.</li> <!-- mbv - 29-06-2005 -->
		<li><em>(option)</em> <tt>label</tt> - Label pour l\'utilisation dans le lien, si applicable.</li>
		<li><em>(option)</em> <tt>label_side left/right</tt> - Position du label dans le de lien (par défaut à "gauche").</li>
		<li><em>(option)</em> <tt>title</tt> - Texte à utiliser dans l\'attribut title. Si non donné, alors le titre de la page sera utilisée pour l\'attribut title.</li>
		<li><em>(option)</em> <tt>rellink 1/0</tt> - Faire un lien relationnel accessible pour la navigation. Ne fonctionne que si le paramètre "dir" est donné et ne doit aller dans la section "Head" du gabarit.</li>
		<li><em>(option)</em> <tt>href</tt> - Si href est utilisé seule la valeur href est généré (pas d\'autres paramètres possibles). <strong>Exemple :</strong> < a href = "(cms_selflink href =" alias ")"> < img src = "xx" > < /a></li>
		<li><em>(option)</em> <tt>image</tt> - Une url de l\'image à utiliser dans le lien. <strong>Exemple :</strong> (cms_selflink dir = "next" image = "next.png" text = "Next").</li>
		<li><em>(option)</em> <tt>alt</tt> - Variante pour être utilisés avec l\'image (alt = "" sera utilisée si aucun paramètre n\'est donné alt).</li>
<li><em>(option)</em> <tt>width</tt> - Largeur pour être utilisé avec l\'image (aucun attribut de largeur sera utilisé sur la sortie balise img s\'il n\'est pas fourni.).</li>
<li><em>(option)</em> <tt>height</tt> - Hauteur pour  être utilisé avec l\'image (aucun attribut de hauteur sera utilisé sur la sortie balise img   s\'il n\'est pas fourni.).</li>
		<li><em>(option)</em> <tt>imageonly</tt> - Si vous utilisez une image, cela supprime l\'affichage de lien texte. Si vous voulez pas de texte dans tous les liens, mettre lang = 0 pour supprimer le label. <strong>Exemple :</strong> (cms_selflink dir = "next" image = "next.png" text = "Next" imageonly = 1)</li>
		<li><em>(option)</em> <tt>ext</tt> - Pour les liens externes, ajoutera class = "external and info text". <strong>Attention :</strong> Seul le texte, la cible et le titre sont compatibles avec ce paramètre</li>
		<li><em>(option)</em> <tt>ext_info</tt> - Utilisé avec le paramètre "ext" par défaut (lien externe).</li>
                 <li><em>(option)</em> <tt>assign</tt> - Attribuer les résultats à la variable smarty.</li>
		</ul>';
$lang['admin']['about_function_cms_module'] = '<p>Author: Ted Kulp<tedkulp@users.sf.net></p>
	<p>Version : 1.0</p>
	<p>
	Historique :<br/>
	Aucun
	</p>';
$lang['admin']['help_function_cms_module'] = '<h3>Que fait cette Balise ?</h3>
	<p>Cette balise sert à insérer des modules dans vos pages ou vos gabarits. Si un module est créé pour être utilisé comme une balise (Vérifier les détails dans l\'aide), vous avez la possibilité de l\'insérer à l\'aide de cette balise.</p>
	<h3>Comment l\'utiliser ?</h3>
	<p>C\'est une balise basique. Insérer la balise dans votre page ou votre gabarit : <code>{cms_module module="somemodulename"}</code></p>
	<h3>Quels paramètres ?</h3>
	<p>Un seul paramètre est requis. tous les autres paramètres sont transmis par le module.</p>
	<ul>
		<li>module - Nom du module à insérer. Non sensible à la casse.</h3>
</ul>';
$lang['admin']['about_function_breadcrumbs'] = '<p>Author: Marcus Deglos <<a href="mailto:md@zioncore.com">md@zioncore.com</a>></p>
<p>Version: 1.7</p>
<p>
Change History:<br/>
1.1 - Modified to use new content rewrite (wishy)<br />
1.2 - Added parameters: delimiter, initial, and root (arl)<br />
1.3 - Added parameter: classid (tdh / perl4ever)<br />
1.4 - Added parameter currentclassid and fixed some bugs (arl)<br />
1.5 - Modified to use new hierarchy manager<br />
1.6 - Modified to skip any parents that are marked to be "not shown in menu" except for root<br />
1.7 - Added root_url parameter (elijahlofgren)<br />
1.8 - Fixes to the root param.<br/>
</p>';
$lang['admin']['help_function_breadcrumbs'] = '<h3 style="font-weight:bold;color:#f00;">Cette balise est <strong>obsolète<strong>. Utiliser { cms_breadcrumbs } du module MenuManager maintenant !</h3>
<h3>Que fait cette Balise ?</h3>
<p>Affiche un fil d\'ariane.</p>
<h3>Comment l\'utiliser ?</h3>
<p>Insérer la balise dans votre page ou votre gabarit : <code>{breadcrumbs}</code></p>
<h3>Quels paramètres ?</h3>

<ul>
<li><em>(option)</em> <tt>delimiter</tt> - Texte pour séparer les entrées de la liste (par défaut ">>").</li>
<li><em>(option)</em> <tt>initial</tt> - 1/0 Si défini à 1 le petit poucet débute avec un délimiteur (par défaut 0).</li>
<li><em>(option)</em> <tt>root</tt> - Alias de page d\'une page que vous voulez toujours voir apparaître comme la première page dans la liste. Peut être utilisé pour faire apparaître une page (par exemple la 1ère page) comme la racine de tout, même si ce n\'est pas le cas.</li>
<li><em>(option)</em> <tt>root_url</tt> - Outrepasse l\'URL de la page racine. Utile pour faire des liens \'/\' au lieu de \'/home/\'. Ceci requiert que la page racine soit définie comme la page par défaut.</li>
<li><em>(option)</em> <tt>classid</tt> - La classe CSS pour les noms de pages autres que celle en cours, c\'est-à-dire les pages n-1 dans la liste. Si le nom est un lien, il est ajouté à la balise < a href >, sinon à la balise < span >.</li>
<li><em>(option)</em> <tt>currentclassid</tt> - La classe CSS pour la balise < span > entourant le nom de la page en cours.</li>
<li><em>(option)</em> <tt>starttext</tt> - Texte à mettre au début de la liste un fil d\'ariane, comme "Vous êtes ici".</li>
<li><em>(option)</em> <tt>assign (string)</tt> - Assigne le résultat à une variable Smarty avec ce nom.</li>
</ul>';
$lang['admin']['about_function_anchor'] = '<p>Author: Ted Kulp<tedkulp@users.sf.net></p>
	<p>Version : 1.1</p>
	<p>
	Change History:<br/>
	<strong>Update to version 1.1 from 1.0</strong> <em>2006/07/19</em><br/>
	Russ added the means to insert a title, a tabindex and a class for the anchor link. Westis added accesskey and changed parameter names to not include \'anchorlink\'.<br/>
	</hr>
	</p>';
$lang['admin']['help_function_anchor'] = '<h3>Que fait cette Balise ?</h3>
	<p>Cette balise sert à insérer un lien interne à une page (ancre).</p>
	<h3>Comment l\'utiliser ?</h3>
	<p>Insérer la balise dans votre page ou votre gabarit : <code>{anchor anchor=\'here\' text=\'Scroll Down\'}</code></p>
	<h3>Quels paramètres ?</h3>
	<ul>
	<li><tt>anchor</tt> - Vers où se dirige le lien.  La partie après le #.</li>
	<li><tt>text</tt> - Le texte à afficher dans le lien.</li>
	<li><tt>class</tt> - La classe pour le lien, si elle existe</li>
	<li><tt>title</tt> - Le titre à afficher pour le lien, s\'il existe.</li>
	<li><tt>tabindex</tt> - Le tabindex numérique pour le lien, s\'il existe.</li>
	<li><tt>accesskey</tt> - L\' accesskey pour le lien, s\'il existe.</li>
	<li><em>(option)</em> <tt>onlyhref</tt> - Affiche seulement le href et non le lien entier. Aucune autre option ne fonctionnera.</li>
<li><em>(option)</em> <tt>assign (string)</tt> - Assigne le résultat à une variable Smarty avec ce nom.</li>
	</ul>';
$lang['admin']['help_function_site_mapper'] = '<h3>Que fait cette Balise ?</h3>
  <p>C\'est une balise pour le module Menu Manager afin de rendre la syntaxe de balise plus aisée, et ainsi simplifier la création d\'un plan de site.</p>
<h3>Comment l\'utiliser ?</h3>
  <p>Insérer la balise <code>{site_mapper}</code> dans votre page ou votre gabarit. Pour l\'aide sur le module "Menu Manager", quels paramètres utiliser, se référer à l\'aide sur le module Menu Manager.</p>
  <p>Par défaut, si aucun gabarit n\'est spécifié, le fichier gabarit minimal_menu.tpl est utilisé.</p>
  <p>Tous les paramètres utilisés dans la balise sont valables dans le gabarit "Menu Manager" comme <code>{$menuparams.paramname}</code></p>';
$lang['admin']['help_function_redirect_url'] = '<h3>Que fait cette Balise ?</h3>
  <p>Cette balise vous permet de faire une redirection vers une URL spécifique. (par exemple faire une redirection vers une page, si votre site \'est pas encore ouvert)</p>
<h3>Comment l\'utiliser ?</h3>
<p>Insérer la balise dans votre page ou votre gabarit : <code>{redirect_url to=\'http://www.cmsmadesimple.org\'}</code></p>';
$lang['admin']['help_function_redirect_page'] = '<h3>Que fait cette Balise ?</h3>
 <p>Cette balise vous permet de faire une redirection vers une autre page (par exemple, rediriger vers la page d\'identification si l\'utilisateur n\'est pas connecté).</p>
<h3>Comment l\'utiliser ?</h3>
<p>Insérer la balise dans votre page ou votre gabarit : <code>{redirect_page page=\'some-page-alias\'}</code></p>';
$lang['admin']['help_function_cms_jquery'] = '<h3>Que fait cette Balise ?</h3>
 <p>Cette balise vous permet d\'utiliser les librairies javascript et balises utilisés pour l\'administration.</p>
<h3>Comment l\'utiliser ?</h3>
<p>Insérer la balise dans votre page ou votre gabarit : <code>{cms_jquery}</code></p>

<h3>Exemple</h3>
<pre><code>{cms_jquery cdn=\'true\' exclude=\'jquery.ui.nestedSortable.js\' append=\'uploads/NCleanBlue/js/ie6fix.js\'}</code></pre>
<h4><em>Outputs</em></h4>
<pre><code><script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.21/jquery-ui.min.js"></script>
<script type="text/javascript" src="http://localhost/1.10.x/lib/jquery/js/jquery.json-2.3.js"></script>
<script type="text/javascript" src="uploads/NCleanBlue/js/ie6fix.js"></script>
</code></pre>

<h3><em>Inclus par défaut</em></h3>
<ul>
	<li><tt>jQuery</tt><em>(1.7.2)</em> - jquery-x.x.x.min.js</li>
	<li><tt>jQuery UI</tt><em>(1.8.21)</em> - jquery-ui-x.x.x.min.js</li>
	<li><tt>nestedSortable</tt>(1.3.4) - jquery.ui.nestedSortable-x.x.x.js</li>
	<li><tt>jQuery json</tt><em>(2.3)</em> - jquery/js/jquery.json-x.x.js</li>
</ul>
    
<h3>Quels paramètres ?</h3>
<ul>
	<li><em>(option) </em><tt>exclude</tt> - Utilise, séparé par des virgules(CSV),la liste des scripts que vous souhaitez exclure. <code>\'jquery.ui.nestedSortable.js,jquery.json.min.js\'</code></li>
	<li><em>(option) </em><tt>append</tt> - Utilise, séparé par des virgules(CSV), la liste des chemins des scripts que vous souhaitez ajouter. <code>\'/uploads/jquery.ui.nestedSortable.js,http://code.jquery.com/jquery-1.7.1.min.js\'par<code>\'</code></li>
	<li><em>(option) </em><tt>cdn</tt> - cdn=\'true\' permet d\'insérer jQuery et jQueryUI en utilisant le réseau Google "Content Delivery Network". Par défaut à "false"</li>
	<li><em>(option) </em><tt>ssl</tt> - Utilisé pour ssl_url comme le chemin de base souhaité.</li>
	<li><em>(option) </em><tt>custom_root</tt> - Utilisé pour définir un chemin de base souhaité. <code>custom_root=\'http://test.domain.com/\'</code> <br/>NOTE : Réécrit l\'option SSL et travaille avec l\'option cdn</li>
<li><em>(option)</em> <tt>assign (string)</tt> - Assigne le résultat à une variable Smarty avec ce nom.</li>
</ul>';
$lang['admin']['of'] = 'sur';
$lang['admin']['first'] = 'Début';
$lang['admin']['last'] = 'Fin';
$lang['admin']['adminspecialgroup'] = 'Attention&nbsp;: les membres de ce groupe ont automatiquement toutes les permissions';
$lang['admin']['disablesafemodewarning'] = 'Supprimer le message d\'alerte Administration "safe mode"&nbsp;';
$lang['admin']['date_format_string'] = 'Format de la date&nbsp;';
$lang['admin']['date_format_string_help'] = '<em>&nbsp;strftime</em> Date sous la forme d\'une chaîne formatée. Ceci est basé sur la fonction <a href="http://php.net/strftime" target="_blank">strftime</a>';
$lang['admin']['last_modified_at'] = 'Dernière modification à&nbsp;';
$lang['admin']['last_modified_by'] = 'Dernière modification par&nbsp;';
$lang['admin']['read'] = 'Lire';
$lang['admin']['write'] = 'Écrire';
$lang['admin']['execute'] = 'Exécuter';
$lang['admin']['group'] = 'Groupe';
$lang['admin']['other'] = 'Autre';
$lang['admin']['event_desc_moduleupgraded'] = 'Envoyé après la mise à jour d\'un module';
$lang['admin']['event_help_moduleupgraded'] = '<p>Envoyé après qu\'un module soit mis à jour.</p>';
$lang['admin']['event_desc_moduleinstalled'] = 'Envoyé après l\'installation d\'un module';
$lang['admin']['event_help_moduleinstalled'] = '<p>Envoyé après qu\'un module soit installé.</p>';
$lang['admin']['event_desc_moduleuninstalled'] = 'Envoyé après la désinstallation d\'un module';
$lang['admin']['event_help_moduleuninstalled'] = '<p>Envoyé après qu\'un module soit désinstallé.</p>';
$lang['admin']['event_desc_edituserdefinedtagpost'] = 'Envoyé après la mise à jour d\'une balise utilisateur';
$lang['admin']['event_help_edituserdefinedtagpost'] = '<p>Envoyé après la mise à jour d\'une balise utilisateur.</p>';
$lang['admin']['event_desc_edituserdefinedtagpre'] = 'Envoyé avant la mise à jour d\'une balise utilisateur';
$lang['admin']['event_help_edituserdefinedtagpre'] = '<p>Envoyé avant la mise à jour d\'une balise utilisateur.</p>';
$lang['admin']['event_desc_deleteuserdefinedtagpre'] = 'Envoyé avant qu\'une balise utilisateur ne soit supprimée';
$lang['admin']['event_help_deleteuserdefinedtagpre'] = '<p>Envoyé avant qu\'une balise utilisateur ne soit supprimée.</p>';
$lang['admin']['event_desc_deleteuserdefinedtagpost'] = 'Envoyé après qu\'une balise utilisateur soit supprimée';
$lang['admin']['event_help_deleteuserdefinedtagpost'] = '<p>Envoyé après qu\'une balise utilisateur soit supprimée.</p>';
$lang['admin']['event_desc_adduserdefinedtagpost'] = 'Envoyé après qu\'une balise utilisateur soit insérée';
$lang['admin']['event_help_adduserdefinedtagpre'] = '<p>Envoyé après qu\'une balise utilisateur soit insérée.</p>';
$lang['admin']['event_desc_adduserdefinedtagpre'] = 'Envoyé avant qu\'une balise utilisateur soit supprimée';
$lang['admin']['event_help_adduserdefinedtagpost'] = '<p>Envoyé avant qu\'une balise utilisateur soit supprimée.</p>';
$lang['admin']['global_umask'] = 'Masque de création de fichier (umask)&nbsp;';
$lang['admin']['errorcantcreatefile'] = 'Impossible de créer un fichier. Veuillez veacute;rifier les permissions.';
$lang['admin']['errormoduleversionincompatible'] = 'Le module est incompatible avec cette version du CMS';
$lang['admin']['errormodulenotloaded'] = 'Erreur interne, le module n\'a pas été initialisé';
$lang['admin']['errormodulenotfound'] = 'Erreur interne, n\'a pas pu trouver une instance de module.';
$lang['admin']['errorinstallfailed'] = 'L\'installation du module a échoué';
$lang['admin']['errormodulewontload'] = 'Problème d\'initialisation d\'un module disponible';
$lang['admin']['frontendlang'] = 'Langue par défaut de la partie publique du site&nbsp;:';
$lang['admin']['info_edituser_password'] = 'Changer ce champ pour modifier le mot de passe de l\'utilisateur';
$lang['admin']['info_edituser_passwordagain'] = 'Changer ce champ pour modifier le mot de passe de l\'utilisateur';
$lang['admin']['originator'] = 'Origine';
$lang['admin']['module_name'] = 'Nom du Module';
$lang['admin']['event_name'] = 'Nom de l\'événement';
$lang['admin']['event_description'] = 'Description de l\'événement';
$lang['admin']['error_delete_default_parent'] = 'Vous ne pouvez pas supprimer la page par défaut ou un parent de la page par défaut.';
$lang['admin']['jsdisabled'] = 'Désolé, Javascript doit être activé pour effectuer cette fonction';
$lang['admin']['order'] = 'Ordre';
$lang['admin']['reorderpages'] = 'Réordonner les pages';
$lang['admin']['reorder'] = 'Réordonner';
$lang['admin']['page_reordered'] = 'La page a été réordonnée avec succès.';
$lang['admin']['pages_reordered'] = 'Les pages ont été réordonnées avec succès.';
$lang['admin']['sibling_duplicate_order'] = 'Deux pages soeurs ne peuvent pas avoir le même ordre. Les pages n\'ont pas été réordonnées.';
$lang['admin']['no_orders_changed'] = 'Vous avez choisi de réordonner les pages, mais vous n\'avez changé l\'ordre d\'aucune d\'entre elles. Les pages n\'ont pas été réordonnées.';
$lang['admin']['order_too_small'] = 'Une page ne peut pas avoir la valeur zéro. Les pages n\'ont pas été réordonnées.';
$lang['admin']['order_too_large'] = 'Une page ne peut pas avoir un ordre plus grand que le nombre de pages dans ce niveau. Les pages n\'ont pas été réordonnées.';
$lang['admin']['user_tag'] = 'Balise utilisateur';
$lang['admin']['add'] = 'Ajout';
$lang['admin']['CSS'] = 'CSS&nbsp;';
$lang['admin']['about'] = 'À propos';
$lang['admin']['action'] = 'Action&nbsp;';
$lang['admin']['actionstatus'] = 'Action/Statut';
$lang['admin']['active'] = 'Actif&nbsp;';
$lang['admin']['addcontent'] = 'Ajouter un nouveau contenu';
$lang['admin']['cantremove'] = 'Ne peut pas être supprimé';
$lang['admin']['changepermissions'] = 'Changer les permissions';
$lang['admin']['changepermissionsconfirm'] = 'UTILISER AVEC PRÉCAUTION\n\nCette action va s\'assurer que tous les fichiers constituant le module sont inscriptibles par le serveur Web\nÊtes-vous sûr(e) de vouloir continuer&nbsp;?';
$lang['admin']['contentadded'] = 'Le contenu a été ajouté avec succès à la base de données.';
$lang['admin']['contentupdated'] = 'Le contenu a été mis à jour avec succès.';
$lang['admin']['contentdeleted'] = 'Le contenu a été supprimé avec succès de la base de données.';
$lang['admin']['success'] = 'Valable';
$lang['admin']['addcss'] = 'Ajouter cette nouvelle feuille de style';
$lang['admin']['addgroup'] = 'Ajouter un nouveau groupe';
$lang['admin']['additionaleditors'] = 'Autres éditeurs&nbsp;';
$lang['admin']['addtemplate'] = 'Ajouter un nouveau gabarit';
$lang['admin']['adduser'] = 'Ajouter un nouvel utilisateur';
$lang['admin']['addusertag'] = 'Ajouter une balise utilisateur';
$lang['admin']['adminaccess'] = 'Accéder à l\'admin';
$lang['admin']['adminlog'] = 'Journal de l\'administration';
$lang['admin']['adminlogcleared'] = 'Journal de l\'administration effacé avec succès';
$lang['admin']['adminlogempty'] = 'Journal de l\'administration vide';
$lang['admin']['adminsystemtitle'] = 'Administration du CMS';
$lang['admin']['adminpaneltitle'] = 'Administration de CMS Made Simple™';
$lang['admin']['advanced'] = 'Avancé';
$lang['admin']['aliasalreadyused'] = 'Cet alias est déjà utilisé par une autre page. Changez "Page alias" dans l\'onglet "Options" pour autre chose.';
$lang['admin']['aliasmustbelettersandnumbers'] = 'L\'alias ne doit contenir que des lettres et des chiffres';
$lang['admin']['aliasnotaninteger'] = 'L\'alias ne doit pas être un nombre';
$lang['admin']['allpagesmodified'] = 'Toutes les pages sont modifiées&nbsp;!';
$lang['admin']['assignments'] = 'Membres';
$lang['admin']['associationexists'] = 'Cette association existe déjà';
$lang['admin']['autoinstallupgrade'] = 'Installation ou mise à niveau automatiques';
$lang['admin']['back'] = 'Retour au Menu';
$lang['admin']['backtoplugins'] = 'Retourner à la liste des balises';
$lang['admin']['cancel'] = 'Annuler';
$lang['admin']['cantchmodfiles'] = 'Les permissions n\'ont pas pu être changées sur certains fichiers.';
$lang['admin']['cantremovefiles'] = 'Problème lors de la suppression de fichiers. Veuillez vérifier les permissions';
$lang['admin']['confirmcancel'] = 'Êtes-vous sûr(e) de vouloir annuler vos changements ? Cliquez OK pour annuler tous les changements. Cliquez Annuler pour continuer à éditer.';
$lang['admin']['canceldescription'] = 'Annuler les changements';
$lang['admin']['clearadminlog'] = 'Effacer le journal';
$lang['admin']['code'] = 'Code&nbsp;';
$lang['admin']['confirmdefault'] = 'Êtes-vous sûr(e) de vouloir mettre :&nbsp; %s  comme page par défaut du site ?';
$lang['admin']['confirmdeletedir'] = 'Êtes-vous sûr(e) de vouloir supprimer ce dossier ainsi que tout son contenu ?';
$lang['admin']['content'] = 'Contenu&nbsp;';
$lang['admin']['contentmanagement'] = 'Gestion du contenu';
$lang['admin']['contenttype'] = 'Type de contenu&nbsp;';
$lang['admin']['copy'] = 'Copier';
$lang['admin']['copytemplate'] = 'Copier le gabarit';
$lang['admin']['create'] = 'Créer';
$lang['admin']['createnewfolder'] = 'Créer un nouveau dossier&nbsp;';
$lang['admin']['cssalreadyused'] = 'Ce nom de feuille de style est déjà utilisé';
$lang['admin']['cssmanagement'] = 'Gestion des feuilles de style';
$lang['admin']['currentassociations'] = 'Associations des feuilles de style actuelles';
$lang['admin']['currentdirectory'] = 'Dossier actuel&nbsp;';
$lang['admin']['currentgroups'] = 'Groupes actuels';
$lang['admin']['currentpages'] = 'Pages actuelles';
$lang['admin']['currenttemplates'] = 'Gabarits actuels';
$lang['admin']['currentusers'] = 'Utilisateurs actuels';
$lang['admin']['custom404'] = 'Message d\'Erreur 404 personnalisé&nbsp;';
$lang['admin']['database'] = 'Base de Données';
$lang['admin']['databaseprefix'] = 'Préfixe de Base de Données';
$lang['admin']['databasetype'] = 'Type de Base de Données';
$lang['admin']['date'] = 'Date&nbsp;';
$lang['admin']['default'] = 'Défaut';
$lang['admin']['delete'] = 'Supprimer';
$lang['admin']['deleteconfirm'] = 'Êtes-vous sûr de vouloir supprimer - %s -&nbsp;?';
$lang['admin']['deleteassociationconfirm'] = 'Êtes-vous sûr de vouloir supprimer l\'association de - %s - ?';
$lang['admin']['deletecss'] = 'Supprimer la feuille de style';
$lang['admin']['dependencies'] = 'Dépendances';
$lang['admin']['description'] = 'Description&nbsp;';
$lang['admin']['directoryexists'] = 'Ce dossier existe déjà.';
$lang['admin']['down'] = 'Bas';
$lang['admin']['edit'] = 'Éditer';
$lang['admin']['editconfiguration'] = 'Éditer la Configuration&nbsp;';
$lang['admin']['editcontent'] = 'Éditer le contenu&nbsp;';
$lang['admin']['editcss'] = 'Éditer la feuille de style&nbsp;';
$lang['admin']['editcsssuccess'] = 'La feuille de style a été mise à jour avec succès.';
$lang['admin']['editgroup'] = 'Éditer le groupe&nbsp;';
$lang['admin']['editpage'] = 'Éditer la page&nbsp;';
$lang['admin']['edittemplate'] = 'Éditer le gabarit&nbsp;';
$lang['admin']['edittemplatesuccess'] = 'Le gabarit a été mis à jour avec succès.';
$lang['admin']['edituser'] = 'Éditer l\'utilisateur&nbsp;';
$lang['admin']['editusertag'] = 'Éditer la balise utilisateur&nbsp;';
$lang['admin']['usertagadded'] = 'La balise utilisateur a été ajoutée avec succès.';
$lang['admin']['usertagupdated'] = 'La balise utilisateur a été mise à jour avec succès.';
$lang['admin']['usertagdeleted'] = 'La balise utilisateur a été supprimée avec succès.';
$lang['admin']['email'] = 'Adresse email&nbsp;';
$lang['admin']['errorattempteddowngrade'] = 'L\'installation de ce module retournerait à une version antérieure. Opération annulée.';
$lang['admin']['errorchildcontent'] = 'Ce contenu possède encore des sous-contenus. Veuillez les supprimer d\'abord.';
$lang['admin']['errorcopyingtemplate'] = 'Erreur lors de la copie du gabarit';
$lang['admin']['errorcouldnotparsexml'] = 'Erreur de lecture du fichier XML. Veuillez vous assurer que vous téléchargez un fichier .xml et non un fichier .tar.gz ou .zip.';
$lang['admin']['errorcreatingassociation'] = 'Erreur lors de la création de l\'association';
$lang['admin']['errorcssinuse'] = 'Cette feuille de style est encore en service avec des gabarits ou des pages. Veuillez supprimer ces associations avant.';
$lang['admin']['errordefaultpage'] = 'Vous ne pouvez pas supprimer la page par défaut. Veuillez d\'abord choisir une autre page. par défaut.';
$lang['admin']['errordeletingassociation'] = 'Erreur lors de la suppression de l\'association';
$lang['admin']['errordeletingcss'] = 'Erreur lors de la suppression de la feuille de style';
$lang['admin']['errordeletingdirectory'] = 'Le dossier n\'a pas pu être supprimé. Veuillez vérifier les permissions.';
$lang['admin']['errordeletingfile'] = 'Le fichier n\'a pas pu être supprimé. Veuillez vérifier les permissions.';
$lang['admin']['errordirectorynotwritable'] = 'Aucune permission en écriture dans le dossier. Ceci peut être causé par les permissions des fichiers et la propriété. Safe mode pourrait aussi être en cause.';
$lang['admin']['errordtdmismatch'] = 'La version du DTD est manquante ou incompatible avec le fichier XML';
$lang['admin']['errorgettingcssname'] = 'Erreur lors de la récupération de nom de la feuille de style';
$lang['admin']['errorgettingtemplatename'] = 'Erreur lors de la récupération du nom du gabarit';
$lang['admin']['errorincompletexml'] = 'Le fichier XML est incomplet ou invalide';
$lang['admin']['uploadxmlfile'] = 'Installer le module via le fichier XML';
$lang['admin']['cachenotwritable'] = 'Le dossier cache n\'est pas accessible en écriture. Le vidage du cache ne va pas fonctionner. Veuillez définir le dossier tmp/cache pour qu\'il aie la permission totale (lecture/écriture/exécution = chmod 777 <strong>chmod suivant votre hébergement</strong>). Il se pourrait également que vous ayez à désactiver le Safe mode.';
$lang['admin']['error_nomodules'] = 'Aucun modules installé ! Vérifier dans Extensions/Modules';
$lang['admin']['modulesnotwritable'] = 'Le dossier des modules <em>(et/ou le dossier uploads)</em> n\'est pas accessible en écriture. Si vous désirez installer des modules par téléchargement d\'un fichier XML, vous devez donner la permission totale (lecture/écriture/exécution) sur le dossier des modules (chmod 777 ou <strong>chmod suivant votre hébergement</strong>). Le Safe mode pourrait aussi être en cause.';
$lang['admin']['noxmlfileuploaded'] = 'Aucun fichier n\'a été téléchargé. Pour installer un module via XML, vous devez choisir et télécharger un fichier de module .xml depuis votre ordinateur.';
$lang['admin']['errorinsertingcss'] = 'Erreur lors de la création de la feuille de style';
$lang['admin']['errorinsertinggroup'] = 'Erreur lors de la création du groupe';
$lang['admin']['errorinsertingtag'] = 'Erreur lors de la création de la balise utilisateur';
$lang['admin']['errorinsertingtemplate'] = 'Erreur lors de la création du gabarit';
$lang['admin']['errorinsertinguser'] = 'Erreur lors de la création de l\'utilisateur';
$lang['admin']['errornofilesexported'] = 'Erreur lors de l\'exportation en xml';
$lang['admin']['errorretrievingcss'] = 'Erreur lors de la récupération de la feuille de style';
$lang['admin']['errorretrievingtemplate'] = 'Erreur lors de la récupération du gabarit';
$lang['admin']['errortemplateinuse'] = 'Ce gabarit est encore en service avec par une ou plusieurs pages. Veuillez supprimer ce(s) page(s) avant.';
$lang['admin']['errorupdatingcss'] = 'Erreur lors de la mise à jour de la feuille de style';
$lang['admin']['errorupdatinggroup'] = 'Erreur lors de la mise à jour du groupe';
$lang['admin']['errorupdatingpages'] = 'Erreur lors de la mise à jour des pages';
$lang['admin']['errorupdatingtemplate'] = 'Erreur lors de la mise à jour du gabarit';
$lang['admin']['errorupdatinguser'] = 'Erreur lors de la mise à jour de l\'utilisateur.';
$lang['admin']['errorupdatingusertag'] = 'Erreur lors de la mise à jour de la balise utilisateur';
$lang['admin']['erroruserinuse'] = 'Cet utilisateur possède encore certains contenus. Veuillez changer le propriétaire de ces contenus avant de supprimer.';
$lang['admin']['eventhandlers'] = 'Gestion des événements';
$lang['admin']['eventhandler'] = 'Gestionnaires d\'événements';
$lang['admin']['editeventhandler'] = 'Édition de la gestion des événements';
$lang['admin']['eventhandlerdescription'] = 'Associer les balises utilisateur avec les évènements';
$lang['admin']['export'] = 'Exporter';
$lang['admin']['event'] = 'Événement';
$lang['admin']['false'] = 'Faux';
$lang['admin']['settrue'] = 'Définir en vrai';
$lang['admin']['filecreatedirnodoubledot'] = 'Le nom du dossier ne peut contenir \'..\'.';
$lang['admin']['filecreatedirnoname'] = 'Impossible de créer un dossier sans nom.';
$lang['admin']['filecreatedirnoslash'] = 'Le nom du dossier ne peut contenir "/" ou "\".';
$lang['admin']['filemanagement'] = 'Gestion des fichiers';
$lang['admin']['filename'] = 'Nom';
$lang['admin']['filenotuploaded'] = 'Le fichier n\'a pas pu être téléchargé. Veuillez vérifier les permissions.';
$lang['admin']['filesize'] = 'Taille de fichier';
$lang['admin']['firstname'] = 'Prénom&nbsp;';
$lang['admin']['groupmanagement'] = 'Gestion des groupes';
$lang['admin']['grouppermissions'] = 'Permissions des groupes';
$lang['admin']['handler'] = 'Gestionnaire (Balise utilisateur)';
$lang['admin']['headtags'] = 'Balise d\'entête';
$lang['admin']['help'] = 'Aide';
$lang['admin']['new_window'] = 'nouvelle fenêtre';
$lang['admin']['helpwithsection'] = '%s Aide';
$lang['admin']['helpaddtemplate'] = '<p>Un gabarit est ce qui contrôle l\'aspect de votre site.</p><p>Créez la maquette ou "disposition" ici et ajoutez également votre feuille de style dans la zone "Feuille de style" pour contrôler l\'aspect de vos divers éléments.</p>';
$lang['admin']['helplisttemplate'] = '<p>Cette section vous permet d\'éditer, supprimer et créer des gabarits.</p><p>Pour créer un nouveau gabarit, cliquez sur le bouton <u>Ajouter un nouveau gabarit</u>.</p><p>Si vous désirez que toutes vos pages utilisent le même gabarit, cliquez sur le lien <u>Choisir pour tous les contenus</u>.</p><p>Si vous désirez copier un gabarit, cliquer sur l\'icône <u>Copier</u> et l\'on vous demandera un nom pour la nouvelle copie.</p>';
$lang['admin']['home'] = 'Accueil';
$lang['admin']['homepage'] = 'Page d\'accueil&nbsp;';
$lang['admin']['hostname'] = 'Nom du Serveur';
$lang['admin']['idnotvalid'] = 'L\'ID donné n\'est pas valide.';
$lang['admin']['imagemanagement'] = 'Gestion d\'images';
$lang['admin']['informationmissing'] = 'Certaines informations sont manquantes.';
$lang['admin']['install'] = 'Installer';
$lang['admin']['invalidcode'] = 'Le code entré est invalide.';
$lang['admin']['illegalcharacters'] = 'Caractères invalides dans le champ %s.';
$lang['admin']['invalidcode_brace_missing'] = 'Nombre impair d\'accolades';
$lang['admin']['invalidtemplate'] = 'Le gabarit est invalide.';
$lang['admin']['itemid'] = 'ID de l\'élément';
$lang['admin']['itemname'] = 'Nom de l\'élément';
$lang['admin']['language'] = 'Langue&nbsp;';
$lang['admin']['lastname'] = 'Nom&nbsp;';
$lang['admin']['logout'] = 'Déconnexion';
$lang['admin']['loginprompt'] = 'Entrez un nom d\'utilisateur et un mot de passe pour accéder au panneau d\'administration.';
$lang['admin']['logintitle'] = 'Administration de CMS Made Simple™';
$lang['admin']['menutext'] = 'Texte du menu&nbsp;';
$lang['admin']['missingparams'] = 'Certains paramètres sont manquants ou invalides.';
$lang['admin']['modifygroupassignments'] = 'Modifier les membres';
$lang['admin']['moduleabout'] = 'A propos du module %s';
$lang['admin']['modulehelp'] = 'Aide du module %s';
$lang['admin']['msg_defaultcontent'] = 'Ajouter du code ici ajoutera du code dans le contenu de toutes les nouvelles pages';
$lang['admin']['msg_defaultmetadata'] = 'Ajouter du code ici ajoutera du code dans la section des balises meta de toutes les nouvelles pages';
$lang['admin']['wikihelp'] = 'Aide de la communauté';
$lang['admin']['moduleinstalled'] = 'Le module est déja installé';
$lang['admin']['moduleinterface'] = 'Interface de %s';
$lang['admin']['modules'] = 'Modules&nbsp;';
$lang['admin']['move'] = 'Déplacer';
$lang['admin']['name'] = 'Nom&nbsp;';
$lang['admin']['needpermissionto'] = 'Vous avez besoin de la permission \'%s\' pour accomplir cette action.';
$lang['admin']['needupgrade'] = 'Mise à jour nécessaire';
$lang['admin']['newtemplatename'] = 'Nom du nouveau gabarit';
$lang['admin']['next'] = 'suivant';
$lang['admin']['noaccessto'] = 'Vous n\'avez pas accès à %s';
$lang['admin']['nocss'] = 'Aucune feuille de style';
$lang['admin']['noentries'] = 'Aucune entrée';
$lang['admin']['nofieldgiven'] = 'Aucun %s entré&nbsp;!';
$lang['admin']['nofiles'] = 'Aucun fichier';
$lang['admin']['nopasswordmatch'] = 'Les mots de passe ne correspondent pas';
$lang['admin']['norealdirectory'] = 'Dossier non valide';
$lang['admin']['norealfile'] = 'Fichier non valide';
$lang['admin']['notinstalled'] = 'N\'est pas installé';
$lang['admin']['overwritemodule'] = 'Réécriture par-dessus des modules existants&nbsp;';
$lang['admin']['owner'] = 'Propriétaire&nbsp;';
$lang['admin']['pagealias'] = 'Alias de page&nbsp;';
$lang['admin']['content_id'] = 'ID du contenu';
$lang['admin']['pagedefaults'] = 'Page par défaut';
$lang['admin']['pagedefaultsdescription'] = 'Valeur par défaut pour les nouvelles pages.';
$lang['admin']['parent'] = 'Parent&nbsp;';
$lang['admin']['password'] = 'Mot de passe&nbsp;';
$lang['admin']['passwordagain'] = 'Mot de passe (encore)&nbsp;';
$lang['admin']['permission'] = 'Permission&nbsp;';
$lang['admin']['permissions'] = 'Permissions&nbsp;';
$lang['admin']['permissionschanged'] = 'Les permissions ont été mises à jour.';
$lang['admin']['pluginabout'] = 'A propos de la balise %s';
$lang['admin']['pluginhelp'] = 'Aide de la balise %s';
$lang['admin']['pluginmanagement'] = 'Gestion des balises';
$lang['admin']['prefsupdated'] = 'Les préférences utilisateur ont été mises à jour.';
$lang['admin']['accountupdated'] = 'Le compte utilisateur a été mis à jour.';
$lang['admin']['preview'] = 'Aperçu';
$lang['admin']['previewdescription'] = 'Prévisualiser les changements';
$lang['admin']['previous'] = 'Précédent';
$lang['admin']['remove'] = 'Supprimer';
$lang['admin']['removeconfirm'] = 'Cette action va supprimer d\u00E9finitivement les fichiers constituant le module de cette installation.\n\u00CAtes-vous s\u00FBr(e) de vouloir continuer ?';
$lang['admin']['removecssassociation'] = 'Supprimer l\'association à la feuille de style';
$lang['admin']['saveconfig'] = 'Sauver la Configuration';
$lang['admin']['send'] = 'Envoyer';
$lang['admin']['setallcontent'] = 'Choisir pour tous les contenus';
$lang['admin']['setallcontentconfirm'] = 'Êtes-vous sûr(e) que toutes les pages doivent utiliser ce gabarit&nbsp;?';
$lang['admin']['showinmenu'] = 'Afficher dans le menu&nbsp;';
$lang['admin']['use_name'] = 'Afficher le titre de la page à la place du texte du menu dans la liste déroulante "Parent"&nbsp;';
$lang['admin']['showsite'] = 'Afficher le site';
$lang['admin']['sitedownmessage'] = 'Message pour la maintenance du site&nbsp;';
$lang['admin']['siteprefs'] = 'Préférences Globales';
$lang['admin']['status'] = 'Statut&nbsp;';
$lang['admin']['stylesheet'] = 'Feuille de style&nbsp;';
$lang['admin']['submit'] = 'Envoyer';
$lang['admin']['submitdescription'] = 'Sauvegarder les changements';
$lang['admin']['tags'] = 'Balises';
$lang['admin']['template'] = 'Gabarit&nbsp;';
$lang['admin']['templateexists'] = 'Ce nom de gabarit existe déjà';
$lang['admin']['templatemanagement'] = 'Gestion des gabarits';
$lang['admin']['title'] = 'Titre de la page&nbsp;';
$lang['admin']['tools'] = 'Outils';
$lang['admin']['true'] = 'Vrai';
$lang['admin']['setfalse'] = 'Définir à faux';
$lang['admin']['type'] = 'Type&nbsp;';
$lang['admin']['typenotvalid'] = 'Le type n\'est pas valide.';
$lang['admin']['uninstall'] = 'Désinstaller';
$lang['admin']['uninstallconfirm'] = 'Êtes-vous sûr(e) de vouloir désinstaller ce module&nbsp;?';
$lang['admin']['up'] = 'Haut';
$lang['admin']['upgrade'] = 'Mise à jour';
$lang['admin']['upgradeconfirm'] = 'Êtes-vous sûr(e) de vouloir mettre à jour&nbsp;?';
$lang['admin']['uploadfile'] = 'Télécharger le fichier&nbsp;';
$lang['admin']['url'] = 'URL&nbsp;';
$lang['admin']['useadvancedcss'] = 'Utiliser la gestion avancée des feuilles de style';
$lang['admin']['user'] = 'Utilisateur';
$lang['admin']['userdefinedtags'] = 'Balises Utilisateurs';
$lang['admin']['usermanagement'] = 'Gestion des utilisateurs';
$lang['admin']['username'] = 'Nom d\'utilisateur&nbsp;';
$lang['admin']['usernameincorrect'] = 'Nom d\'utilisateur ou mot de passe incorrect';
$lang['admin']['userprefs'] = 'Préférences utilisateur';
$lang['admin']['useraccount'] = 'Compte utilisateur';
$lang['admin']['lang_settings_legend'] = 'Paramètres de langue';
$lang['admin']['content_editor_legend'] = 'Paramètres de l\'éditeur de contenu';
$lang['admin']['admin_layout_legend'] = 'Paramètres administrateur';
$lang['admin']['usersassignedtogroup'] = 'Utilisateur membre du groupe %s';
$lang['admin']['usertagexists'] = 'Une balise existe déjà avec le même nom, veuillez en choisir un autre.';
$lang['admin']['usewysiwyg'] = 'Utiliser l\'éditeur visuel (WYSIWYG) pour l\'édition';
$lang['admin']['version'] = 'Version&nbsp;';
$lang['admin']['view'] = 'Voir';
$lang['admin']['welcomemsg'] = 'Bienvenue %s';
$lang['admin']['directoryabove'] = 'Dossier au niveau supérieur';
$lang['admin']['nodefault'] = 'Aucune sélection par défaut';
$lang['admin']['blobexists'] = 'Ce nom de bloc de contenu global existe déjà';
$lang['admin']['blobmanagement'] = 'Gestionnaire de blocs de contenus globaux';
$lang['admin']['errorinsertingblob'] = 'Une erreur est survenue lors de l\'ajout du bloc de contenu global.';
$lang['admin']['addhtmlblob'] = 'Ajouter un bloc de contenu global';
$lang['admin']['edithtmlblob'] = 'Éditer le bloc de contenu global&nbsp;';
$lang['admin']['edithtmlblobsuccess'] = 'Le bloc de contenu global a été mis à jour avec succès';
$lang['admin']['tagtousegcb'] = 'Balise pour utiliser ce bloc';
$lang['admin']['gcb_wysiwyg'] = 'Activer le WYSIWYG pour les blocs de contenus globaux&nbsp;';
$lang['admin']['gcb_wysiwyg_help'] = 'Activer l\'éditeur WYSIWYG pour l\'édition des Blocs de contenus globaux';
$lang['admin']['filemanager'] = 'Gestionnaire de fichiers';
$lang['admin']['imagemanager'] = 'Gestionnaire d\'images';
$lang['admin']['encoding'] = 'Encodage&nbsp;';
$lang['admin']['clearcache'] = 'Vider le cache&nbsp;';
$lang['admin']['clear'] = 'Vider';
$lang['admin']['cachecleared'] = 'Cache vidé';
$lang['admin']['apply'] = 'Appliquer';
$lang['admin']['applydescription'] = 'Sauvegarder les changements et continuer l\'édition';
$lang['admin']['none'] = 'Aucun';
$lang['admin']['wysiwygtouse'] = 'Sélection du WYSIWYG à utiliser&nbsp;';
$lang['admin']['syntaxhighlightertouse'] = 'Sélectionner la syntaxe surlignée&nbsp;';
$lang['admin']['hasdependents'] = 'A des modules dépendants';
$lang['admin']['missingdependency'] = 'Dépendance manquante';
$lang['admin']['minimumversion'] = 'Version minimale';
$lang['admin']['minimumversionrequired'] = 'Version minimale requise de CMSMS™&nbsp;';
$lang['admin']['maximumversion'] = 'Version maximale';
$lang['admin']['maximumversionsupported'] = 'Version maximale de CMSMS™ supportée';
$lang['admin']['depsformodule'] = 'Dépendances pour module %s';
$lang['admin']['installed'] = 'Installé';
$lang['admin']['author'] = 'Auteur&nbsp;';
$lang['admin']['changehistory'] = 'Historique des changements&nbsp;';
$lang['admin']['moduleerrormessage'] = 'Message d\'erreur pour le module %s';
$lang['admin']['moduleupgradeerror'] = 'Il y a eu une erreur lors de la mise à jour du module';
$lang['admin']['moduleinstallmessage'] = 'Message d\'installation pour le module %s';
$lang['admin']['moduleuninstallmessage'] = 'Message de désinstallation pour le module %s';
$lang['admin']['admintheme'] = 'Thème de l\'administration&nbsp;';
$lang['admin']['addstylesheet'] = 'Ajouter une feuille de style';
$lang['admin']['editstylesheet'] = 'Éditer une feuille de style&nbsp;';
$lang['admin']['addcssassociation'] = 'Ajouter une association de feuille de style';
$lang['admin']['attachstylesheet'] = 'Attacher cette feuille de style';
$lang['admin']['attachtemplate'] = 'Attacher à ce gabarit';
$lang['admin']['main'] = 'Accueil';
$lang['admin']['pages'] = 'Pages&nbsp;';
$lang['admin']['page'] = 'Page&nbsp;';
$lang['admin']['files'] = 'Fichiers';
$lang['admin']['layout'] = 'Disposition';
$lang['admin']['usersgroups'] = 'Utilisateurs/Groupes';
$lang['admin']['extensions'] = 'Extensions&nbsp;';
$lang['admin']['preferences'] = 'Préférences';
$lang['admin']['admin'] = 'Administration du site';
$lang['admin']['viewsite'] = 'Voir le site';
$lang['admin']['templatecss'] = 'Assigner les gabarits aux feuilles de style';
$lang['admin']['plugins'] = 'Plugins&nbsp;';
$lang['admin']['movecontent'] = 'Déplacement de pages';
$lang['admin']['module'] = 'Module&nbsp;';
$lang['admin']['usertags'] = 'Balises Utilisateurs';
$lang['admin']['htmlblobs'] = 'Blocs de contenus globaux';
$lang['admin']['adminhome'] = 'Accueil de l\'administration';
$lang['admin']['liststylesheets'] = 'Feuilles de style';
$lang['admin']['preferencesdescription'] = 'Définition des paramètres globaux du site.';
$lang['admin']['adminlogdescription'] = 'Liste des actions exécutées dans l\'administration.';
$lang['admin']['mainmenu'] = 'Menu principal';
$lang['admin']['users'] = 'Utilisateurs';
$lang['admin']['usersdescription'] = 'Gestion des utilisateurs.';
$lang['admin']['groups'] = 'Groupes';
$lang['admin']['groupsdescription'] = 'Gestion des groupes.';
$lang['admin']['groupassignments'] = 'Appartenance aux groupes';
$lang['admin']['groupassignmentdescription'] = 'Appartenance des utilisateurs aux groupes.';
$lang['admin']['groupperms'] = 'Permissions des groupes';
$lang['admin']['grouppermsdescription'] = 'Définition des permissions et des niveaux d\'accès des groupes';
$lang['admin']['pagesdescription'] = 'Edition des pages et autres contenus.';
$lang['admin']['htmlblobdescription'] = 'Les blocs de contenus globaux sont des morceaux de contenu à placer dans vos pages ou gabarits.';
$lang['admin']['templates'] = 'Gabarits';
$lang['admin']['templatesdescription'] = 'Ajout et édition des gabarits. Les gabarits définissent le thème visuel de votre site.';
$lang['admin']['stylesheets'] = 'Feuilles de style';
$lang['admin']['stylesheetsdescription'] = 'La gestion des feuilles de style est un moyen avancé de gérer les feuilles de style en cascade (CSS) séparément des gabarits.';
$lang['admin']['filemanagerdescription'] = 'Téléchargement et gestion des fichiers.';
$lang['admin']['imagemanagerdescription'] = 'Téléchargement, édition et effacement des images.';
$lang['admin']['moduledescription'] = 'Les modules étendent CMS Made Simple™ pour vous procurer toutes sortes de fonctionnalités personnalisées.';
$lang['admin']['tagdescription'] = 'Les balises sont de petits morceaux de fonctionnalités qui peuvent être ajoutés à votre contenu et/ou vos gabarits.';
$lang['admin']['usertagdescription'] = 'Balises que vous pouvez créer/modifier vous-même pour exécuter des tâches spécifiques, directement depuis votre navigateur.';
$lang['admin']['installdirwarning'] = '<strong>Attention</strong>&nbsp;: le dossier d\'installation est toujours présent. Veuillez l\'effacer complètement ou le renommer pour des raisons de sécurité.';
$lang['admin']['subitems'] = 'Sous-menus';
$lang['admin']['extensionsdescription'] = 'Modules, balises et autres fonctions.';
$lang['admin']['usersgroupsdescription'] = 'Objets en relation avec les utilisateurs et les groupes.';
$lang['admin']['layoutdescription'] = 'Options de disposition du site.';
$lang['admin']['admindescription'] = 'Fonctions d\'administration du site.';
$lang['admin']['contentdescription'] = 'Ajout et édition de contenu.';
$lang['admin']['enablecustom404'] = 'Activation du message 404 personnalisé&nbsp;';
$lang['admin']['enablesitedown'] = 'Activation du message de maintenance&nbsp;';
$lang['admin']['enablewysiwyg'] = 'Activer le WYSIWYG sur le message de maintenance&nbsp;';
$lang['admin']['bookmarks'] = 'Raccourcis';
$lang['admin']['user_created'] = 'Raccourcis personnalisés';
$lang['admin']['forums'] = 'Forums&nbsp;';
$lang['admin']['wiki'] = 'Wiki&nbsp;';
$lang['admin']['irc'] = 'IRC&nbsp;';
$lang['admin']['team'] = 'Team&nbsp;';
$lang['admin']['documentation'] = 'Documentation&nbsp;';
$lang['admin']['module_help'] = 'Aide sur le module';
$lang['admin']['managebookmarks'] = 'Gestion des raccourcis';
$lang['admin']['editbookmark'] = 'Edition des raccourcis';
$lang['admin']['addbookmark'] = 'Ajout d\'un raccourci';
$lang['admin']['recentpages'] = 'Pages récentes';
$lang['admin']['groupname'] = 'Nom du groupe&nbsp;';
$lang['admin']['selectgroup'] = 'Sélection du groupe';
$lang['admin']['updateperm'] = 'Mise à jour des permissions';
$lang['admin']['admincallout'] = 'Administration des raccourcis&nbsp;';
$lang['admin']['showbookmarks'] = 'Afficher les raccourcis de l\'administration';
$lang['admin']['hide_help_links'] = 'Cacher les liens d\'aide des modules&nbsp;';
$lang['admin']['hide_help_links_help'] = 'Cochez cette case pour désactiver le wiki et les liens d\'aide dans les en-têtes de pages.';
$lang['admin']['showrecent'] = 'Afficher les pages récemment accédées';
$lang['admin']['attachtotemplate'] = 'Attacher une feuille de style à un gabarit';
$lang['admin']['attachstylesheets'] = 'Attacher des feuilles de style';
$lang['admin']['indent'] = 'Créer un retrait à la liste de pages pour souligner la hiérarchie';
$lang['admin']['adminindent'] = 'Affichage du contenu&nbsp;';
$lang['admin']['contract'] = 'Fermer la section';
$lang['admin']['expand'] = 'Ouvrir la section';
$lang['admin']['expandall'] = 'Déployer toutes les sections';
$lang['admin']['contractall'] = 'Contracter toutes les sections';
$lang['admin']['menu_bookmarks'] = '[+]&nbsp;';
$lang['admin']['globalconfig'] = 'Paramètres globaux';
$lang['admin']['adminpaging'] = 'Nombre de page à afficher par fenêtre dans la liste des pages';
$lang['admin']['nopaging'] = 'Afficher tous les objets';
$lang['admin']['myprefs'] = 'Mes préférences';
$lang['admin']['myprefsdescription'] = 'Paramétrage du panneau d\'administration pour l\'afficher selon vos préférences.';
$lang['admin']['myaccount'] = 'Mon Compte&nbsp;';
$lang['admin']['myaccountdescription'] = 'Gestion du compte personnel.';
$lang['admin']['adminprefs'] = 'Préférences du compte utilisateur';
$lang['admin']['adminprefsdescription'] = 'Réglages des préférences de mon compte pour le panneau d\'administration.';
$lang['admin']['managebookmarksdescription'] = 'Gestion des raccourcis de la console d\'administration.';
$lang['admin']['options'] = 'Options&nbsp;';
$lang['admin']['langparam'] = 'Paramètre utilisé pour spécifier dans quelle langue afficher le module dans la partie publique. Ce paramètre n\'est pas supporté ou utile pour tous les modules.';
$lang['admin']['parameters'] = 'Paramètres';
$lang['admin']['mediatype'] = 'Type de média&nbsp;';
$lang['admin']['media_query'] = 'Media Query (requêtes de media)&nbsp;';
$lang['admin']['media_query_description'] = '<strong>Remarque :</strong> Lorsque Media Query est utilisé, le "Type de média" sera ignoré.<br /> Utilisez les expression valides recommandées par le <a href="http://www.w3.org/TR/css3-mediaqueries/" rel="external" title="W3C">W3C</a>.  Pour information <a href="http://www.alsacreations.com/article/lire/930-css3-media-queries.html" rel="external" title="Information sur Alsacreations">Les Media Queries CSS3 sur Alsacreations</a>';
$lang['admin']['mediatype_'] = 'Aucun défini&nbsp;: va affecter partout';
$lang['admin']['mediatype_all'] = 'all : compatible pour tous les appareils.';
$lang['admin']['mediatype_aural'] = 'aural&nbsp;: à l\'attention des synthétiseurs de voix.';
$lang['admin']['mediatype_braille'] = 'braille&nbsp;: à l\'attention des appareils tactiles en braille.';
$lang['admin']['mediatype_embossed'] = 'embossed&nbsp;: à l\'attention des imprimantes braille.';
$lang['admin']['mediatype_handheld'] = 'handheld&nbsp;: à l\'attention des appareils de poche (PDA)';
$lang['admin']['mediatype_print'] = 'print&nbsp;: à l\'attention de documents imprimés sur du matériel opaque, et pour les documents visualisés à l\'écran en prévisualisation d\'impression';
$lang['admin']['mediatype_projection'] = 'projection&nbsp;: à l\'attention des présentations projetées, par exemple sur projecteurs ou impressions sur transparents.';
$lang['admin']['mediatype_screen'] = 'screen&nbsp;: à l\'attention principalement des écrans d\'ordinateurs';
$lang['admin']['mediatype_tty'] = 'tty&nbsp;: à l\'attention des média utilisant des caractères fixes, tels que télétypes et terminaux.';
$lang['admin']['mediatype_speech'] = 'speech : Destiné à des synthé;tiseurs vocaux';
$lang['admin']['mediatype_tv'] = 'tv&nbsp;: à l\'attention des appareils de type télévision.';
$lang['admin']['assignmentchanged'] = 'L\'appartenance des utilisateurs aux groupes a été modifiée.';
$lang['admin']['stylesheetexists'] = 'La feuille de style existe';
$lang['admin']['errorcopyingstylesheet'] = 'Erreur durant la copie de la feuille de style';
$lang['admin']['copystylesheet'] = 'Copier la feuille de style';
$lang['admin']['newstylesheetname'] = 'Nom de la nouvelle feuille de style&nbsp;';
$lang['admin']['target'] = 'Cible&nbsp;';
$lang['admin']['xml'] = 'XML&nbsp;';
$lang['admin']['xmlmodulerepository'] = 'URL du serveur de ModuleRepository';
$lang['admin']['metadata'] = 'Métadonnées&nbsp;';
$lang['admin']['globalmetadata'] = 'Métadonnées globales&nbsp;';
$lang['admin']['titleattribute'] = 'Description &nbsp;';
$lang['admin']['tabindex'] = 'Attribut \'tabindex\' (navigation par tabulateur)&nbsp;';
$lang['admin']['accesskey'] = 'Attribut \'accesskey\' (raccourci clavier)&nbsp;';
$lang['admin']['sitedownwarning'] = '<strong>Attention&nbsp;:</strong> Votre site affiche le message "Site Down for Maintenance".  Veuillez supprimer le fichier %s pour résoudre cela.';
$lang['admin']['deletecontent'] = 'Supprimer le contenu';
$lang['admin']['deletepages'] = 'Supprimer ce(ces) page(s)&nbsp;?';
$lang['admin']['selectall'] = 'Tout sélectionner';
$lang['admin']['selecteditems'] = 'Objets sélectionnés&nbsp;';
$lang['admin']['inactive'] = 'Inactif';
$lang['admin']['deletetemplates'] = 'Supprimer les gabarits';
$lang['admin']['templatestodelete'] = 'Ces gabarits vont être supprimés';
$lang['admin']['wontdeletetemplateinuse'] = 'Ces gabarits sont utilisés et ne seront pas supprimés';
$lang['admin']['deletetemplate'] = 'Supprimer les feuilles de style';
$lang['admin']['stylesheetstodelete'] = 'Ces feuilles de styles vont être supprimées';
$lang['admin']['sitename'] = 'Nom du site&nbsp;:';
$lang['admin']['goto'] = 'Retour vers :';
$lang['admin']['siteadmin'] = 'Administration du site';
$lang['admin']['images'] = 'Gestionnaire d\'images';
$lang['admin']['blobs'] = 'Blocs de contenu globaux';
$lang['admin']['groupmembers'] = 'Assignation des groupes';
$lang['admin']['troubleshooting'] = '(Dépannage)';
$lang['admin']['event_desc_loginpost'] = 'Envoyé après la connexion d\'un utilisateur dans le panneau d\'administration';
$lang['admin']['event_desc_logoutpost'] = 'Envoyé après la déconnexion d\'un utilisateur du panneau d\'administration';
$lang['admin']['event_desc_adduserpre'] = 'Envoyé avant qu\'un nouvel utilisateur soit créé';
$lang['admin']['event_desc_adduserpost'] = 'Envoyé après qu\'un nouvel utilisateur ait été créé';
$lang['admin']['event_desc_edituserpre'] = 'Envoyé avant que l\'édition d\'un utilisateur soit enregistrée';
$lang['admin']['event_desc_edituserpost'] = 'Envoyé après que l\'édition d\'un utilisateur ait été enregistrée';
$lang['admin']['event_desc_deleteuserpre'] = 'Envoyé avant qu\'un utilisateur soit supprimé du système';
$lang['admin']['event_desc_deleteuserpost'] = 'Envoyé après qu\'un utilisateur ait été supprimé du système';
$lang['admin']['event_desc_addgrouppre'] = 'Envoyé avant qu\'un nouveau groupe soit créé';
$lang['admin']['event_desc_addgrouppost'] = 'Envoyé après qu\'un nouveau groupe ait été créé';
$lang['admin']['event_desc_changegroupassignpre'] = 'Envoyé avant qu\'un assignement à un groupe soit enregistré';
$lang['admin']['event_desc_changegroupassignpost'] = 'Envoyé après qu\'un assignement à un groupe ait été enregistré';
$lang['admin']['event_desc_editgrouppre'] = 'Envoyé avant que l\'édition d\'un groupe soit enregistrée';
$lang['admin']['event_desc_editgrouppost'] = 'Envoyé après que l\'édition d\'un groupe ait été enregistrée';
$lang['admin']['event_desc_deletegrouppre'] = 'Envoyé avant qu\'un groupe soit supprimé du système';
$lang['admin']['event_desc_deletegrouppost'] = 'Envoyé après qu\'un groupe ait été supprimé du système';
$lang['admin']['event_desc_addstylesheetpre'] = 'Envoyé avant qu\'une nouvelle feuille de style soit créée';
$lang['admin']['event_desc_addstylesheetpost'] = 'Envoyé après qu\'une nouvelle feuille de style ait été créée';
$lang['admin']['event_desc_editstylesheetpre'] = 'Envoyé avant que l\'édition d\'une feuille de style soit enregistrée';
$lang['admin']['event_desc_editstylesheetpost'] = 'Envoyé après que l\'édition d\'une feuille de style ait été enregistrée';
$lang['admin']['event_desc_deletestylesheetpre'] = 'Envoyé avant qu\'une feuille de style soit supprimée du système';
$lang['admin']['event_desc_deletestylesheetpost'] = 'Envoyé après qu\'une feuille de style ait été supprimée du système';
$lang['admin']['event_desc_addtemplatepre'] = 'Envoyé avant qu\'un nouveau gabarit soit créé';
$lang['admin']['event_desc_addtemplatepost'] = 'Envoyé après qu\'un nouveau gabarit aie été créé';
$lang['admin']['event_desc_edittemplatepre'] = 'Envoyé avant que l\'édition d\'un gabarit soit enregistrée';
$lang['admin']['event_desc_edittemplatepost'] = 'Envoyé après que l\'édition d\'un gabarit ait été enregistrée';
$lang['admin']['event_desc_deletetemplatepre'] = 'Envoyé avant qu\'un gabarit soit supprimé du système';
$lang['admin']['event_desc_deletetemplatepost'] = 'Envoyé après qu\'un gabarit ait été supprimé du système';
$lang['admin']['event_desc_templateprecompile'] = 'Envoyé avant qu\'un gabarit soit envoyé à Smarty pour être traité';
$lang['admin']['event_desc_templateprefetch'] = 'Envoyé avant qu\'un gabarit soit extrait de Smarty';
$lang['admin']['event_desc_templatepostcompile'] = 'Envoyé après qu\'un gabarit ait été traité par Smarty';
$lang['admin']['event_desc_addglobalcontentpre'] = 'Envoyé avant qu\'un nouveau bloc de contenu global soit créé';
$lang['admin']['event_desc_addglobalcontentpost'] = 'Envoyé après qu\'un nouveau bloc de contenu global aie été créé';
$lang['admin']['event_desc_editglobalcontentpre'] = 'Envoyé avant que l\'édition d\'un bloc de contenu global soit enregistrée';
$lang['admin']['event_desc_editglobalcontentpost'] = 'Envoyé après que l\'édition d\'un bloc de contenu global ait été enregistrée';
$lang['admin']['event_desc_deleteglobalcontentpre'] = 'Envoyé avant qu\'un bloc de contenu global soit supprimé du système';
$lang['admin']['event_desc_deleteglobalcontentpost'] = 'Envoyé après qu\'un bloc de contenu global ait été supprimé du système';
$lang['admin']['event_desc_globalcontentprecompile'] = 'Envoyé avant qu\'un bloc de contenu global soit envoyé à Smarty pour être traité';
$lang['admin']['event_desc_globalcontentpostcompile'] = 'Envoyé après qu\'un bloc de contenu global ait été traité par Smarty';
$lang['admin']['event_desc_contenteditpre'] = 'Envoyé avant que l\'édition d\'un contenu soit enregistrée';
$lang['admin']['event_desc_contenteditpost'] = 'Envoyé après que l\'édition d\'un contenu ait été enregistrée';
$lang['admin']['event_desc_contentdeletepre'] = 'Envoyé avant qu\'un contenu soit supprimé du système';
$lang['admin']['event_desc_contentdeletepost'] = 'Envoyé après qu\'un contenu ait été supprimé du système';
$lang['admin']['event_desc_contentstylesheet'] = 'Envoyé avant qu\'une feuille de style soit envoyée au navigateur';
$lang['admin']['event_desc_contentprecompile'] = 'Envoyé avant qu\'un contenu soit envoyé à Smarty pour être traité';
$lang['admin']['event_desc_contentpostcompile'] = 'Envoyé après qu\'un contenu ait été traité par Smarty';
$lang['admin']['event_desc_contentpostrender'] = 'Envoyé avant que le code html combiné soit envoyé au navigateur';
$lang['admin']['event_desc_smartyprecompile'] = 'Envoyé avant que tout contenu destiné à Smarty lui soit envoyé pour être traité';
$lang['admin']['event_desc_smartypostcompile'] = 'Envoyé après que tout contenu destiné à Smarty ait été traité';
$lang['admin']['event_help_loginpost'] = '<p>Envoyé après la connexion d\'un utilisateur dans le panneau d\'administration.</p>
<h4>Paramètres</h4>
<ul>
<li>\'user\' - Référence à l\'objet utilisateur concerné.</li>
</ul>';
$lang['admin']['event_help_logoutpost'] = '<p>Envoyé après la déconnexion d\'un utilisateur du panneau d\'administration.</p>
<h4>Paramètres</h4>
<ul>
<li>\'user\' - Référence à l\'objet utilisateur concerné.</li>
</ul>';
$lang['admin']['event_help_adduserpre'] = '<p>Envoyé avant qu\'un nouvel utilisateur soit créé.</p>
<h4>Paramètres</h4>
<ul>
<li>\'user\' - Référence à l\'objet utilisateur concerné.</li>
</ul>';
$lang['admin']['event_help_adduserpost'] = '<p>Envoyé après qu\'un nouvel utilisateur aie été créé.</p>
<h4>Paramètres</h4>
<ul>
<li>\'user\' - Référence à l\'objet utilisateur concerné.</li>
</ul>';
$lang['admin']['event_help_edituserpre'] = '<p>Envoyé avant que l\'édition d\'un utilisateur soit enregistrée.</p>
<h4>Paramètres</h4>
<ul>
<li>\'user\' - Référence à l\'objet utilisateur concerné.</li>
</ul>';
$lang['admin']['event_help_edituserpost'] = '<p>Envoyé après que l\'édition d\'un utilisateur aie été enregistrée.</p>
<h4>Paramètres</h4>
<ul>
<li>\'user\' - Référence à l\'objet utilisateur concerné.</li>
</ul>';
$lang['admin']['event_help_deleteuserpre'] = '<p>Envoyé avant qu\'un utilisateur soit supprimé du système.</p>
<h4>Paramètres</h4>
<ul>
<li>\'user\' - Référence à l\'objet utilisateur concerné.</li>
</ul>';
$lang['admin']['event_help_deleteuserpost'] = '<p>Envoyé après qu\'un utilisateur ait été supprimé du système.</p>
<h4>Paramètres</h4>
<ul>
<li>\'user\' - Référence à l\'objet utilisateur concerné.</li>
</ul>';
$lang['admin']['event_help_addgrouppre'] = '<p>Envoyé avant qu\'un nouveau groupe soit créé.</p>
<h4>Paramètres</h4>
<ul>
<li>\'group\' - Référence à l\'objet groupe concerné.</li>
</ul>';
$lang['admin']['event_help_addgrouppost'] = '<p>Envoyé après qu\'un nouveau groupe ait été créé.</p>
<h4>Paramètres</h4>
<ul>
<li>\'group\' - Référence à l\'objet groupe concerné.</li>
</ul>';
$lang['admin']['event_help_changegroupassignpre'] = '<p>Envoyé avant qu\'une assignation à un groupe soit enregistrée.</p>
<h4>Paramètres></h4>
<ul>
<li>\'group\' - Référence à l\'objet groupe.</li>
<li>\'users\' - Tableau de références aux objets utilisateur appartenant au groupe.</li>
</ul>';
$lang['admin']['event_help_changegroupassignpost'] = '<p>Envoyé après qu\'une assignation à un groupe ait été enregistrée.</p>
<h4>Paramètres></h4>
<ul>
<li>\'group\' - Référence à l\'objet groupe concerné.</li>
<li>\'users\' - tableau de références aux objets utilisateur appartenant maintenant au groupe concerné.</li>
</ul>';
$lang['admin']['event_help_editgrouppre'] = '<p>Envoyé avant que l\'édition d\'un groupe soit enregistrée.</p>
<h4>Paramètres</h4>
<ul>
<li>\'group\' - Référence à l\'objet groupe concerné.</li>
</ul>';
$lang['admin']['event_help_editgrouppost'] = '<p>Envoyé après que l\'édition d\'un groupe ait été enregistrée.</p>
<h4>Paramètres</h4>
<ul>
<li>\'group\' - Référence à l\'objet groupe concerné.</li>
</ul>';
$lang['admin']['event_help_deletegrouppre'] = '<p>Envoyé avant qu\'un groupe soit supprimé du système.</p>
<h4>Paramètres</h4>
<ul>
<li>\'group\' - Référence à l\'objet groupe concerné.</li>
</ul>';
$lang['admin']['event_help_deletegrouppost'] = '<p>Envoyé après qu\'un groupe ait été supprimé du système.</p>
<h4>Paramètres</h4>
<ul>
<li>\'group\' - Référence à l\'objet groupe concerné.s qu</p>
</ul>';
$lang['admin']['event_help_addstylesheetpre'] = '<p>Envoyé avant qu\'une nouvelle feuille de style soit créée.</p>
<h4>Paramètres</h4>
<ul>
<li>\'stylesheet\' - Référence à l\'objet feuille de style concerné</p>
</ul>';
$lang['admin']['event_help_addstylesheetpost'] = '<p>Envoyé après qu\'une nouvelle feuille de style ait été créée.</p>
<h4>Paramètres</h4>
<ul>
<li>\'stylesheet\' - Référence à l\'objet feuille de style concerné.</li>
</ul>';
$lang['admin']['event_help_editstylesheetpre'] = '<p>Envoyé avant que l\'édition d\'une feuille de style ne soit enregistrée.</p>
<h4>Paramètres</h4>
<ul>
<li>\'stylesheet\' - Référence à l\'objet feuille de style concerné.</li>
</ul>';
$lang['admin']['event_help_editstylesheetpost'] = '<p>Envoyé après que l\'édition d\'une feuille de style ait été enregistrée.</p>
<h4>Paramètres</h4>
<ul>
<li>\'stylesheet\' - Référence à l\'objet feuille de style concerné.</li>
</ul>';
$lang['admin']['event_help_deletestylesheetpre'] = '<p>Envoyé avant qu\'une feuille de style ne soit supprimée du système.</p>
<h4>Paramètres</h4>
<ul>
<li>\'stylesheet\' - Référence à l\'objet feuille de style concerné.</li>
</ul>';
$lang['admin']['event_help_deletestylesheetpost'] = '<p>Envoyé après qu\'une feuille de style aie été supprimée du système.</p>
<h4>Paramètres</h4>
<ul>
<li>\'stylesheet\' - Référence à l\'objet feuille de style concerné.</li>
</ul>';
$lang['admin']['event_help_addtemplatepre'] = '<p>Envoyé avant qu\'un nouveau gabarit ne soit créé.</p>
<h4>Paramètres</h4>
<ul>
<li>\'template\' - Référence à l\'objet gabarit concerné.</li>
</ul>';
$lang['admin']['event_help_addtemplatepost'] = '<p>Envoyé après qu\'un nouveau gabarit ait été créé.</p>
<h4>Paramètres</h4>
<ul>
<li>\'template\' - Référence à l\'objet gabarit concerné.</li>
</ul>';
$lang['admin']['event_help_edittemplatepre'] = '<p>Envoyé avant que l\'édition d\'un gabarit ne soit enregistrée.</p>
<h4>Paramètres</h4>
<ul>
<li>\'template\' - Référence à l\'objet gabarit concerné.</li>
</ul>';
$lang['admin']['event_help_edittemplatepost'] = '<p>Envoyé après que l\'édition d\'un gabarit ait été enregistrée.</p>
<h4>Paramètres</h4>
<ul>
<li>\'template\' - Référence à l\'objet gabarit concerné.</li>
</ul>';
$lang['admin']['event_help_deletetemplatepre'] = '<p>Envoyé avant qu\'un gabarit ne soit supprimé du système.</p>
<h4>Paramètres</h4>
<ul>
<li>\'template\' - Référence à l\'objet gabarit concerné.</li>
</ul>';
$lang['admin']['event_help_deletetemplatepost'] = '<p>Envoyé après qu\'un gabarit ait été supprimé du système.</p>
<h4>Paramètres</h4>
<ul>
<li>\'template\' - Référence à l\'objet gabarit concerné.</li>
</ul>';
$lang['admin']['event_help_templateprecompile'] = '<p>Envoyé avant qu\'un gabarit soit envoyé à Smarty pour être traité.</p>
<h4>Paramètres</h4>
<ul>
<li>\'template\' - Référence au texte du gabarit concerné.</li>
<li>\'type\' - Le type de d\'appel gabarit. Exemple : Gabarit pour un modèle de gabarit, tpl_head, tpl_body, ou tpl_top pour un gabarit partiel.</li>
</ul>';
$lang['admin']['event_help_templateprefetch'] = '<p>Envoyé avant qu\'un gabarit soit extrait de Smarty.
<h4>Paramètres</h4>
<ul>
<li>\'template\' (string reference) - Le nom du gabarit.</li>
<li>\'cache_id\' (string reference) - l\'identifiant du gabarit de cache (si applicable).</li>
<li>\'compile_id\' (string reference) - l\'identifiant du gabarit de cache (si applicable).</li>
<li>\'display\' (integer reference) - Indique si l\'entrée est affichée ou affectée.</li>
<li>\'no_output_filter\' (integer reference) - Indique si les filtres de sortie doivent être appliqués.</li>
</ul>';
$lang['admin']['event_help_templatepostcompile'] = '<p>Envoyé après qu\'un gabarit ait été traité par Smarty.</p>
<h4>Paramètres</h4>
<ul>
<li>\'template\' - Référence au texte du gabarit concerné.</li>
<li>\'type\' - Le type de d\'appel gabarit. Exemple : Gabarit pour un modèle de gabarit, tpl_head, tpl_body, ou tpl_top pour un gabarit partiel.</li>
</ul>';
$lang['admin']['event_help_addglobalcontentpre'] = '<p>Envoyé avant qu\'un nouveau bloc de contenu global ne soit créé.</p>
<h4>Paramètres</h4>
<ul>
<li>\'global_content\' - Référence à l\'objet bloc de contenu global concerné.</li>
</ul>';
$lang['admin']['event_help_addglobalcontentpost'] = '<p>Envoyé après qu\'un nouveau bloc de contenu global ait été créé.</p>
<h4>Paramètres</h4>
<ul>
<li>\'global_content\' - Référence à l\'objet bloc de contenu global concerné.</li>
</ul>';
$lang['admin']['event_help_editglobalcontentpre'] = '<p>Envoyé avant que l\'édition d\'un bloc de contenu global soit enregistrée.</p>
<h4>Paramètres</h4>
<ul>
<li>\'global_content\' - Référence à l\'objet bloc de contenu global concerné.</li>
</ul>';
$lang['admin']['event_help_editglobalcontentpost'] = '<p>Envoyé après que l\'édition d\'un bloc de contenu global ait été enregistrée.</p>
<h4>Paramètres</h4>
<ul>
<li>\'global_content\' - Référence à l\'objet bloc de contenu global concerné.</li>
</ul>';
$lang['admin']['event_help_deleteglobalcontentpre'] = '<p>Envoyé avant qu\'un bloc de contenu global soit supprimé du système.</p>
<h4>Paramètres</h4>
<ul>
<li>\'global_content\' - Référence à l\'objet bloc de contenu global concerné.</li>
</ul>';
$lang['admin']['event_help_deleteglobalcontentpost'] = '<p>Envoyé après qu\'un bloc de contenu global ait été supprimé du système.</p>
<h4>Paramètres</h4>
<ul>
<li>\'global_content\' - Référence à l\'objet bloc de contenu global concerné.</li>
</ul>';
$lang['admin']['event_help_globalcontentprecompile'] = '<p>Envoyé avant qu\'un bloc de contenu global soit envoyé à Smarty pour être traité.</p>
<h4>Paramètres</h4>
<ul>
<li>\'global_content\' - Référence au texte du bloc de contenu global concerné.</li>
</ul>';
$lang['admin']['event_help_globalcontentpostcompile'] = '<p>Envoyé après qu\'un bloc de contenu global ait été traité par Smarty.</p>
<h4>Paramètres</h4>
<ul>
<li>\'global_content\' - Référence au texte du bloc de contenu global concerné.</li>
</ul>';
$lang['admin']['event_help_contenteditpre'] = '<p>Envoyé avant que l\'édition d\'un contenu soit enregistrée.</p>
<h4>Paramètres</h4>
<ul>
<li>\'global_content\' - Référence à l\'objet contenu concerné.</li>
</ul>';
$lang['admin']['event_help_contenteditpost'] = '<p>Envoyé après que l\'édition d\'un contenu ait été enregistrée.</p>
<h4>Paramètres</h4>
<ul>
<li>\'content\' - Référence à l\'objet contenu concerné.</li>
</ul>';
$lang['admin']['event_help_contentdeletepre'] = '<p>Envoyé avant qu\'un contenu ne soit supprimé du système.</p>
<h4>Paramètres</h4>
<ul>
<li>\'content\' - Référence à l\'objet contenu concerné.</li>
</ul>';
$lang['admin']['event_help_contentdeletepost'] = '<p>Envoyé après qu\'un contenu ait été supprimé du système.</p>
<h4>Paramètres</h4>
<ul>
<li>\'content\' - Référence à l\'objet contenu concerné.</li>
</ul>';
$lang['admin']['event_help_contentstylesheet'] = '<p>Envoyé avant qu\'une feuille de style ne soit envoyée au navigateur.</p>
<h4>Paramètres</h4>
<ul>
<li>\'content\' - Référence au texte de la feuille de style concernée.content</li>
</ul>';
$lang['admin']['event_help_contentprecompile'] = '<p>Envoyé avant qu\'un contenu ne soit envoyé à Smarty pour être traité.</p>
<h4>Paramètres</h4>
<ul>
<li>\'content\' - Référence au texte du contenu concerné.</li>
</ul>';
$lang['admin']['event_help_contentpostcompile'] = '<p>Envoyé après qu\'un contenu ait été traité par Smarty.</p>
<h4>Paramètres</h4>
<ul>
<li>\'content\' - Référence au texte du contenu concerné.</li>
</ul>';
$lang['admin']['event_help_contentpostrender'] = '<p>Envoyé avant que le code html combiné soit envoyé au navigateur.</p>
<h4>Paramètres</h4>
<ul>
<li>\'content\' - Référence au texte html.</li>
</ul>';
$lang['admin']['event_help_smartyprecompile'] = '<p>Envoyé avant que tout contenu destiné à Smarty lui soit envoyé pour être traité.</p>
<h4>Paramètres</h4>
<ul>
<li>\'content\' - Référence au texte concerné.</li>
</ul>';
$lang['admin']['event_help_smartypostcompile'] = '<p>Envoyé après que tout contenu destiné à Smarty ait été traité.</p>
<h4>Paramètres</h4>
<ul>
<li>\'content\' - Référence au texte concerné.</li>
</ul>';
$lang['admin']['filterbymodule'] = 'Filtrer par module';
$lang['admin']['showall'] = 'Tout afficher';
$lang['admin']['core'] = 'Noyau';
$lang['admin']['defaultpagecontent'] = 'Contenu de page par défaut&nbsp;';
$lang['admin']['file_url'] = 'Lien au fichier (au lieu d\'un URL)&nbsp;';
$lang['admin']['no_file_url'] = 'Aucun (Utiliser l\'URL ci-dessus)';
$lang['admin']['defaultparentpage'] = 'Page parent par défaut';
$lang['admin']['error_udt_name_whitespace'] = 'Erreur&nbsp;:&nbsp;Le nom de la balise Utilisateur ne doit pas comporter d\'espace.';
$lang['admin']['warning_safe_mode'] = '<strong><em>ATTENTION&nbsp;:&nbsp;</em></strong> PHP Safe mode est activé. Cela peut causer des difficultés avec les fichiers uploadés par l\'interface Web, y compris les images, thèmes et les modules XML. Vous devez contacter votre administrateur pour désactiver le Safe mode.';
$lang['admin']['test'] = 'Test&nbsp;';
$lang['admin']['results'] = 'Résultats';
$lang['admin']['untested'] = 'Non testé';
$lang['admin']['unknown'] = 'Inconnu';
$lang['admin']['download'] = 'Télécharger';
$lang['admin']['frontendwysiwygtouse'] = 'WYSIWYG de la partie publique&nbsp;';
$lang['admin']['backendwysiwygtouse'] = 'WYSIWYG par défaut pour l\'administration (pour les nouveaux comptes utilisateurs)&nbsp;';
$lang['admin']['all_groups'] = 'Tous les groupes';
$lang['admin']['error_type'] = 'Type d\'erreur';
$lang['admin']['contenttype_errorpage'] = 'Page d\'erreur';
$lang['admin']['errorpagealreadyinuse'] = 'Code d\'erreur déjà utilisé';
$lang['admin']['403description'] = 'Page interdite';
$lang['admin']['404description'] = 'Page non trouvée';
$lang['admin']['usernotfound'] = 'Utilisateur non trouvé';
$lang['admin']['passwordchange'] = 'Merci d\'entrer le nouveau mot de passe';
$lang['admin']['recoveryemailsent'] = 'Courrier électronique envoyé à l\'adresse enregistrée. S\'il vous plaît vérifier votre boîte de réception pour plus d\'instructions.';
$lang['admin']['errorsendingemail'] = 'Erreur sur l\'envoi du message. Contactez votre administrateur.';
$lang['admin']['passwordchangedlogin'] = 'Mot de passe changé. Merci de vous connecter en utilisant les nouveaux identifiants.';
$lang['admin']['nopasswordforrecovery'] = 'Aucune adresse email pour cet utilisateur. Récupération de mot de passe impossible. Merci de contacter votre administrateur.';
$lang['admin']['lostpw'] = 'Mot de passe oublié ?';
$lang['admin']['lostpwemailsubject'] = '[%s] Récupération du mot de passe';
$lang['admin']['lostpwemail'] = 'Vous recevez ce courrier électronique parce qu\'une demande a été faite pour modifier le mot de passe (%s) associé à ce compte d\'utilisateur (%s). Si vous souhaitez réinitialiser le mot de passe pour ce compte, cliquez simplement sur le lien ci-dessous ou collez-le dans la barre d\'adresse de votre navigateur préféré :
%s

Si vous pensez qu\'il s\'agit d\'une erreur, ignorez tout simplement ce message.';
?>