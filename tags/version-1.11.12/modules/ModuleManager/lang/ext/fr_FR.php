<?php
$lang['error_nomodulesfilter'] = 'Désolé. Il ne semble pas qu\'un module qui corresponde à ce filtre.';
$lang['error_search'] = 'Erreur dans la recherche !';
$lang['prompt_disable_caching'] = 'Désactivé le cache des requêtes serveur';
$lang['info_disable_caching'] = '<strong>Non Recommandé</strong>. Pour des raisons de performances, ModuleManager gardera en cache (par défaut une heure) la plupart des requêtes du serveur.';
$lang['operation_results'] = 'Résultats des opérations';
$lang['error_noresults'] = 'Des résultats devraient être disponible à partir des opérations en file d\'attente, mais aucun n\'a été trouvé. Merci de renouveler l\'opération, afin fournir suffisamment d\'informations pour les diagnostics, et avoir un support personnel.';
$lang['versionsformodule'] = 'Versions disponibles du module %s';
$lang['yourversion'] = 'Votre version';
$lang['latestdepends'] = 'Toujours installer la dernière version des modules';
$lang['info_latestdepends'] = 'Lors de l\'installation d\'un module avec des dépendances, cette option fera en sorte que la dernière version de la dépendance sera installée';
$lang['error_internal'] = 'Erreur interne ... Contacter votre administrateur système';
$lang['error_downloadxml'] = 'Un problème est survenu avec le téléchargement du fichier XML : %s';
$lang['error_request_problem'] = 'Un problème est survenu avec la communication du module vers le serveur';
$lang['error_searchterm'] = 'Merci de spécifier quelque chose pour une recherche valide';
$lang['search_noresults'] = 'Recherche réussie, mais aucun résultat ne correspondait à l\'expresssion';
$lang['advancedsearch_help'] = 'Spécifiez les mots à inclure ou à exclure de la recherche en utilisant un + ou -, avec des guillemets entourant une expression exacte. Exemple : +rouge -pomme +"certain texte"';
$lang['search_results'] = 'Résultats de recherche&nbsp;';
$lang['prompt_advancedsearch'] = 'Recherche avancée';
$lang['search_input'] = 'Données de recherche&nbsp;';
$lang['searchterm'] = 'Rechercher par termes';
$lang['search'] = 'Recherche';
$lang['available_updates'] = 'Modules disponibles pour mise à jour. Avant toute chose, lire les notes de mises à jour sur la Forge et faire une sauvegarde de la base de données.';
$lang['all_modules_up_to_date'] = 'Il n\'y a pas de nouveaux modules disponibles dans le dépôt sélectionné';
$lang['error_module_object'] = 'Erreur : impossible d\'obtenir une instance du module %s';
$lang['error_nomatchingmodules'] = 'Erreur : impossible de trouver des modules dans le dépot sélectionné';
$lang['error_nomodules'] = 'Erreur : impossible de récupérer la liste des modules installés';
$lang['upgrade_available'] = 'Une nouvelle version est disponible (%s), vous avez la (%s)';
$lang['newversions'] = 'Mises à jour disponibles';
$lang['notice_depends'] = '%s a des dépendances non résolues. Pour installer ce module, les actions suivantes doivent être réunies';
$lang['install_submit'] = 'Installation';
$lang['depend_upgrade'] = 'Le module %s sera mis à jour vers la version %s.';
$lang['depend_install'] = 'le module %s (version %s ou supérieure) sera installé.';
$lang['depend_activate'] = 'le module %s sera activé.';
$lang['action_activated'] = 'le module %s a été activé avec succès.';
$lang['action_installed'] = 'le module %s a été installé avec le(s) message(s) suivant(s) : %s';
$lang['action_upgraded'] = 'le module %s a été mis à jour avec succès.';
$lang['title_installation_complete'] = 'Procédure d\'installation terminée !';
$lang['install_with_deps'] = 'Évaluer toutes les dépendances et installer';
$lang['msg_nodependencies'] = 'Ce fichier n\'a pas de liste des dépendances';
$lang['error_upgrade'] = 'la mise à jour du module %s a échoué !';
$lang['error_skipping'] = 'L\'installation ou la mise à niveau de %s n\'a pas été réalisée à cause d\'erreurs dans les réglages des dépendances. Veuillez lire le message ci-dessous avant de recommencer.';
$lang['dependstxt'] = 'Dépendances';
$lang['use_at_your_own_risk'] = 'Utilisation à vos risques et périls';
$lang['compatibility_disclaimer'] = 'Les modules affichés ici sont fournis par les développeurs de CMS, et des tiers indépendants. Nous ne pouvons garantir que les modules offerts ici soient fonctionnels, testés, ou compatibles avec votre système. Vous êtes encouragés à lire les informations qui se trouvent dans l\'aide et sur les liens pour chaque module avant l\'installation.';
$lang['notice'] = 'Avertissement';
$lang['general_notice'] = 'Les version affichées ici représentent les derniers fichiers au format XML de votre dépôt sélectionné (CMSMS %s). Ils peuvent être ou non la dernière version disponible.';
$lang['incompatible'] = 'Incompatible&nbsp;';
$lang['prompt_settings'] = 'Configuration';
$lang['prompt_otheroptions'] = 'Autres options';
$lang['reset'] = 'Réinitialisation';
$lang['error_permissions'] = '<strong><em>ATTENTION :</em></strong> vous n\'avez pas les permissions suffisantes pour installer les modules. Vous pouvez avoir des problèmes avec PHP Safe mode. Merci de vérifier que le safe mode est OFF, et que les permissions des fichiers sont suffisantes.';
$lang['error_minimumrepository'] = 'La version du dépôt de modules n\'est pas compatible avec ce "module manager"';
$lang['prompt_reseturl'] = 'Remettre l\'URL par défaut&nbsp;';
$lang['prompt_resetcache'] = 'Effacer les données du cache local&nbsp;';
$lang['prompt_dl_chunksize'] = 'Taille de téléchargement (Koctets)&nbsp;';
$lang['text_dl_chunksize'] = 'La taille maximale des données à télécharger du serveur en une fois (lors de l\'installation d\'un module)';
$lang['error_nofilesize'] = 'Aucun paramètre de taillé spécifié';
$lang['error_nofilename'] = 'Aucun paramètre de nom de fichier spécifié';
$lang['error_unsatisfiable_dependency'] = 'Le module "%s" (version %s supérieure) requis n\'a pas été trouvé dans le référentiel. Il est directement requis par %s; ce qui pourrait indiquer un problème avec la version de ce module dans le référentiel. Veuillez svp contacter l\'auteur du module. Fin de l\'opération.';
$lang['error_checksum'] = 'Erreur Checksum. Ceci indique probablement qu\'il y a un fichier corrompu, soit lorsqu\'il a été téléchargé sur le dépôt sélectionné, soit lorsqu\'il a été transmis à votre machine.';
$lang['cantdownload'] = 'Impossible de télécharger';
$lang['download'] = 'Télécharger et installer';
$lang['error_moduleinstallfailed'] = 'L\'installation du module a échoué';
$lang['error_connectnomodules'] = 'Bien qu\'une connexion au dépôt de module aie été établie avec succès, il apparaît que ce dépôt ne partage aucun module pour l\'instant.';
$lang['submit'] = 'Soumettre';
$lang['text_repository_url'] = 'L\'URL doit être dans un format tel que http://www.mycmsms.com/ModuleRepository/request/v2 (en supposant que les URLs rewriting soient activées sur le serveur de référentiel)<br />Note : l\'ouverture de ce lien dans votre navigateur renvoie une Erreur 404 !';
$lang['prompt_repository_url'] = 'URL du dépôt de modules&nbsp;';
$lang['title_installation'] = 'Installation&nbsp;';
$lang['availmodules'] = 'Modules disponibles';
$lang['preferences'] = 'Préférences';
$lang['preferencessaved'] = 'Les préférences ont été enregistrées';
$lang['repositorycount'] = 'Modules trouvés dans le dépôt';
$lang['instcount'] = 'Modules actuellement installés';
$lang['availablemodules'] = 'Statut des modules disponibles dans le dépôt actuel';
$lang['time_warning'] = 'La liste d\'installation contient plusieurs modules, sachez que l\'installation peut prendre quelques minutes. Merci de patienter !';
$lang['helptxt'] = 'Aide';
$lang['abouttxt'] = 'À propos';
$lang['xmltext'] = 'Fichier XML';
$lang['nametext'] = 'Nom du module';
$lang['mod_name_ver'] = '%s version %s&nbsp;';
$lang['unknown'] = 'Inconnu';
$lang['vertext'] = 'Version&nbsp;';
$lang['sizetext'] = 'Taille (Kb)';
$lang['statustext'] = 'Statut/Action';
$lang['uptodate'] = 'Installé';
$lang['install'] = 'installer';
$lang['newerversion'] = 'Nouvelle version installée';
$lang['onlynewesttext'] = 'Afficher uniquement les nouvelles versions&nbsp;';
$lang['upgrade'] = 'Mettre à niveau';
$lang['error_norepositoryurl'] = 'L\'URL du dépôt de module n\'a pas été spécifié';
$lang['friendlyname'] = 'Gestionnaire de Modules';
$lang['postinstall'] = 'Module Manager a été installé avec succès';
$lang['postuninstall'] = 'Le module Gestionnaire de modules (Module Manager) a été désinstallé. Les utilisateurs n\'auront plus la possibilité d\'installer des modules depuis des dépôts distants. Cependant, l\'installation locale est toujours possible.';
$lang['really_uninstall'] = '\u00CAtes-vous s\u00FBr(e) de vouloir d\u00E9sinstaller ce module ? Vous allez perdre toutes ses fonctionalit\u00E9s.';
$lang['uninstalled'] = 'Module désinstallé.';
$lang['installed'] = 'La version %s du module est installée.';
$lang['upgraded'] = 'Module mis à niveau à la version %s.';
$lang['moddescription'] = 'Un client pour le dépôt de modules (ModuleRepository), ce module permet la prévisualisation, et l\'installation de modules depuis des sites distants sans avoir besoin d\'utiliser le FTP, ou de dézipper des archives. Les fichiers XML de modules sont téléchargés en utilisant une API REST, l\'intégrité est vérifiée et automatiquement ajustée.';
$lang['back_to_module_manager'] = '« Retourner au Gestionnaire de Modules';
$lang['error'] = 'Erreur&nbsp;!';
$lang['admindescription'] = 'Un outil pour trouver et installer des modules depuis des sites distants.';
$lang['accessdenied'] = 'Accès refusé, veuillez vérifier les permissions.';
$lang['changelog'] = '<ul>
  <li>Version 1.0. 10 janvier 2006. Version initiale.</li>
  <li>Version 1.1. juillet 2006. Distribué avec 1.0- beta</li>
  <li>Version 1.1.1 Août 2006.  Requiert la version 1.0.1 de nuSOAP</li>
  <li>Version 1.1.2 septembre 2006.  Correction d\'une erreur qui empêchait les mises à jour</li>
  <li>Version 1.1.3 Septembre, 2006.
  <ul>
    <li>Requiert au minimum CMS Version 1.0</li>
    <li>Now use 1 request to get the complete list of modules from the repository</li>
    <li>Added some missing lang strings</li>
    <li>Added the ability to reset the local cache of repository information</li>
    <li>Added the ability to restore the repository url to factory defaults</li>
  </ul>
  </li>
<li>Version 1.1.4 fevrier, 2007.  Now handles the safe mode check, and disables upgrading or installing modules if the permissions are wrong.</li>
<li>Version 1.1.5 Septembre 2007. Possibilité d\'afficher uniquement les nouvelles versions.  Ajout d\'un message après la mise à jour des préférences</li>
<li>Version 1.1.6 Mai 2008. Affiche maintenant si les modules sont incompatibles avec la version courante CMS_VERSION.</li>
<li>Version 1.2 June, 2008.<br/>
This version should reduce the memory requirements of this module, and trade it off for performance on the server, and more requests to the server.
   <ul>
    <li>Bumped Minimum CMS Version to 1.3</li>
    <li>Bumped Minimum repository version to 1.1</li>
    <li>Get rid of all of the session stuff</li>
    <li>Add support for requesting modules beginning with a prefix (usually a single letter)</li>
    <li>Add support for requesting only the newest versions of the modules</li></ul>
</li>
<li>Version 1.2.1 August, 2008.<br/>
Added a warning message to the top of the admin display.
</li>
<li>Version 1.3 May, 2009.<br/>
Ajout de vérification des dépendances.
</li>
<li>Version 1.3.3 March, 2010.<br/>
<ul>
  <li>PHP 5.x improvements (specifically remove warnings for PHP 5.3)
 <li>Minor bug fixes.</li>
</ul>
</li>
<li>Version 1.4 June, 2010.<br/>
<ul>
  <li>Implemented automatic dependency calculation, and one-click installation.</li>
  <li>Assorted usability improvements.</li>
  <li>Minor bug fixes.</li>
</ul>
</li>
<li>Version 1.5  - July, 2011
<ul>
  <li>Changes to REST API. No longer uses nuSOAP.</li>
  <li>Many optimizations to downloading and installing modules.</li>
  <li>Can now install older versions of modules easily.</li>
  <li>Handle automatic upgrading of ddependencies.</li>
</ul>
</li>
</ul>';
$lang['help'] = '<h3>Que fait ce module&nbsp;?</h3>
<p>Un client pour le dépôt de modules (ModuleRepository), ce module permet la prévisualisation, et l\'installation de modules depuis des sites distants sans avoir besoin d\'utiliser le FTP, ou de dézipper des archives. Les fichier XML de modules sont téléchargés en utilisant REST, l\'intégrité est vérifiée et automatiquement ajustée.<br/> Lors de l\'installation d\'un module avec des dépendances, cette option fera en sorte que la dernière version de la dépendance sera installée</p>
<h3>Comment l\'utiliser&nbsp;?</h3>
<p>pour utiliser ce module, vous devez définir la permission \'Modify Modules\', vous avez aussi besoin de l\'URL complet à un dépôt de modules (Module Repository).  Vous pouvez spécifier cet URL dans le menu "Extensions / Gestionnaire de Modules / Préférences".</p><br/>
<p>Vous trouverez l\'interface de ce module sous le menu \'Extensions\'.  Quand vous sélectionnez ce module, une requête va automatiquement être au dépôt de modules, pour trouver les modules XML disponibles. Cette liste sera comparée à la liste des modules déjà installés, et une page de sommaire sera affichée.  Puis, vous pourrez voir une information descriptive, l\'aide et l\'information \'À propos\' des modules, sans les installer. Vous pourrez alors choisir de mettre à niveau, ou installer des modules.</p>
<h3>Support</h3>
<p>Copyright © 2006,  <a href="mailto:calguy1000@hotmail.com">Robert Campbell calguy1000</a>. Tous droits réservés.</p>
<p>Ce module est distribué sous la licence <a href="http://www.gnu.org/licenses/licenses.html#GPL" target="_blank">GNU Public License</a>. Vous devez agréer aux termes de cette licence pour pouvoir utiliser ce module.</p>';
?>