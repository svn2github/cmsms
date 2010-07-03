<?php
$lang['admin']['stylesheetcopied'] = 'Feuille de style copi&eacute;e';
$lang['admin']['templatecopied'] = 'Gabarit copi&eacute;';
$lang['admin']['ecommerce_desc'] = 'Module fournissant des fonctionnalit&eacute;s d&#039;E-commerce';
$lang['admin']['ecommerce'] = 'E-Commerce ';
$lang['admin']['help_function_content_module'] = '<h3>Comment &ccedil;a marche ?</h3>
<p>Ce type de bloc de contenu permet d&#039;interagir avec diff&eacute;rents modules pour cr&eacute;er des blocs de contenu diff&eacute;rents.</p>
<p>Certains modules peuvent d&eacute;finir quel type de bloc de contenu sera utilis&eacute; dans les gabarits des modules. Par exemple, le module FrontEndUsers pourrait d&eacute;terminer un type de bloc de contenu pour la liste des groupes. il vous sera alors indiqu&eacute; comment vous pourrez utiliser le tag content_module pour ins&eacute;rer ce type de bloc de contenu &agrave; l&#039;int&eacute;rieur de vos gabarits/p>
<p><strong>Note :</strong> ce type de bloc doit &ecirc;tre utilis&eacute; uniquement avec les modules compatibles. Vous ne devriez pas l&#039;utiliser pour des utilisations non pr&eacute;vues par les modules.</p>';
$lang['admin']['error_parsing_content_blocks'] = 'Erreur lors de l&#039;analyse des blocs de contenu (y a-t-il des noms de blocs en doublon ?)';
$lang['admin']['error_no_default_content_block'] = 'Aucun bloc de contenu par d&eacute;faut n&#039;a &eacute;t&eacute; d&eacute;tect&eacute; dans ce gabarit. Assurez-vous que vous disposez d&#039;une balise {content} dans le gabarit de cette page';
$lang['admin']['help_function_cms_stylesheet'] = '	<h3>Que fait cette Balise ?</h3>
  <p>c&#039;est un remplacement de la balise {stylesheet} ; cette nouvelle balise permet la mise en cache des fichiers CSS en g&eacute;n&eacute;rant des fichiers statiques dans le r&eacute;pertoire tmp/cache, ainsi que le traitement des balises Smarty dans les feuilles de style.</p>
  <p>Cette balise r&eacute;cup&egrave;re les informations des styles du syst&egrave;me. Par d&eacute;faut, elle prend toutes les feuilles de style li&eacute;es au gabarit en cours, et g&eacute;n&egrave;re les balises de la feuille de style. </p>
  <p>Les g&eacute;n&eacute;rations des feuilles de style sont utilis&eacute;es en fonction de la date de derni&egrave;re modification dans la base de donn&eacute;es, et ne sont g&eacute;n&eacute;r&eacute;es que si la feuille de style a chang&eacute;e.</p>
  <p> Cette balise est le remplacement de {stylesheet}.</p>
  <h3>Comment l&#039;utiliser ?</h3>
  <p>Ins&eacute;rer la balise dans votre page ou votre gabarit dans l&#039;ent&ecirc;te :<code>{cms_stylesheet}</code></p>
  <h3>Quels param&egrave;tres ?</h3>
  <ul>
  <li><em>(option) name</em> - Au lieu d&#039;avoir toutes les feuilles de style pour la page donn&eacute;e, il n&#039;y aura que celle nomm&eacute;e sp&eacute;cifiquement, qu&#039;elle soit li&eacute;e au gabarit en cours ou non.</li>
  <li><em>(option)</em> templateid - Si templateid est d&eacute;fini, les feuilles de style seront associ&eacute;es uniquement &agrave; ce gabarit, au lieu de celui en cours.</li>
  <li><em>(option)</em> media -Si utiliser avec le param&egrave;tre &quot;name&quot;, ce param&egrave;tre modifiera le type de m&eacute;dia pour la feuille de style. En utilisation avec le param&egrave;tre &quot;templateid&quot;, le le type de m&eacute;dia modifiera uniquement cette feuille de style qui sera marqu&eacute;e avec le type sp&eacute;cifi&eacute;.</li>
  </ul>
  <h3>Processus Smarty </h3>
  <p>Lors de la g&eacute;n&eacute;ration des fichiers css, ce syst&egrave;me passe les feuilles de style extraites de la base de donn&eacute;es gr&acirc;ce &agrave; Smarty.  Les d&eacute;limiteurs Smarty sont d&eacute;finis par les standard CMSMS  { et } avec [[ et ]] respectivement, pour faciliter la transition dans les feuilles de styles.  Cela permet la cr&eacute;ation de variables Smarty comme : [[assign var=&#039;red&#039; value=&#039;#900&#039;]] en haut de la feuille de styles,  puis en utilisant ces variables plus loin dans la feuille de style. Exemple : </p>
<pre>
<code>
h3 .error { color: [[$red]]; }<br/>
</code>
</pre>
<p>Comme les fichiers mis en cache sont g&eacute;n&eacute;r&eacute;s dans le r&eacute;pertoire tmp/cache de l&#039;installation de CMSMS, le r&eacute;pertoire de travail des CSS n&#039;est pas la racine du site. Par cons&eacute;quent, toutes les images, ou d&#039;autres balises qui n&eacute;cessitent une URL doit utiliser la balise [[root_url]]  pour la forcer &agrave; &ecirc;tre une URL absolue. Exemple : </p>
<pre>
<code>
h3 .error { background: url([[root_url]]/uploads/images/error_background.gif); }<br/>
</code>
</pre>
<p><strong>Note :</strong> en raison de la nature mise en cache du plugin, les variables Smarty doivent &ecirc;tre plac&eacute;es au sommet de CHAQUE feuille de style, qui est attach&eacute; au gabarit.</p>';
$lang['admin']['pseudocron_granularity'] = 'T&acirc;ches r&eacute;guli&egrave;res &quot;Pseudocron&quot;&nbsp;';
$lang['admin']['info_pseudocron_granularity'] = 'Ce param&egrave;tre indique &agrave; quelle fr&eacute;quence le syst&egrave;me va tenter de g&eacute;rer les t&acirc;ches r&eacute;guli&egrave;res';
$lang['admin']['cron_request'] = 'Chaque demande';
$lang['admin']['cron_15m'] = '15 minutes';
$lang['admin']['cron_30m'] = '30 minutes';
$lang['admin']['cron_60m'] = '1 heure';
$lang['admin']['cron_120m'] = '2 heures';
$lang['admin']['cron_3h'] = '3 heures';
$lang['admin']['cron_6h'] = '6 heures';
$lang['admin']['cron_12h'] = '12 heures';
$lang['admin']['cron_24h'] = '24 heures';
$lang['admin']['clearcache_taskdescription'] = 'Ex&eacute;cut&eacute; par jour, cette t&acirc;che effacer les fichiers mis en cache qui sont plus anciennes que le temps d&eacute;fini dans les pr&eacute;f&eacute;rences globales';
$lang['admin']['clearcache_taskname'] = 'Effacement des fichiers mis en cache';
$lang['admin']['info_autoclearcache'] = 'Sp&eacute;cifier une valeur enti&egrave;re du nombre de jour(s). Entrer 0 pour d&eacute;sactiver automatiquement la vidange du cache';
$lang['admin']['autoclearcache'] = 'Efface automatiquement le cache de tous les N jours ';
$lang['admin']['listtemplates_pagelimit'] = 'Nombre de lignes par page lors de l&#039;affichage des gabarits&nbsp;';
$lang['admin']['liststylesheets_pagelimit'] = 'Nombre de lignes par page lors de l&#039;affichage des feuilles de style&nbsp;';
$lang['admin']['listgcbs_pagelimit'] = 'Nombre de lignes par page lors de l&#039;affichage des blocs de contenu globaux&nbsp;';
$lang['admin']['insecure'] = 'Non s&eacute;curis&eacute; (HTTP)';
$lang['admin']['secure'] = 'S&eacute;curis&eacute; (HTTPS)';
$lang['admin']['secure_page'] = 'Utiliser le protocole HTTPS pour cette page&nbsp;';
$lang['admin']['thumbnail_width'] = 'Largeur de vignette&nbsp;';
$lang['admin']['thumbnail_height'] = 'Hauteur de vignette&nbsp;';
$lang['admin']['E_STRICT'] = 'E_STRICT est d&eacute;sactiv&eacute; dans error_reporting';
$lang['admin']['test_estrict_failed'] = 'E_STRICT est activ&eacute; dans error_reporting';
$lang['admin']['info_estrict_failed'] = 'Certaines biblioth&egrave;ques que CMSMS utilise ne fonctionnent pas bien avec E_STRICT. Merci de d&eacute;sactiver avant de continuer';
$lang['admin']['E_DEPRECATED'] = 'E_DEPRECATED est d&eacute;sactiv&eacute; dans error_reporting';
$lang['admin']['test_edeprecated_failed'] = 'E_DEPRECATED est activ&eacute;';
$lang['admin']['info_edeprecated_failed'] = 'Si E_DEPRECATED est activ&eacute;, les utilisateurs verront de nombreux messages d&#039;avertissement qui pourraient affecter l&#039;affichage et le fonctionnement';
$lang['admin']['session_use_cookies'] = 'Autorisation pour l&#039;utilisation des cookies de session';
$lang['admin']['errorgettingcontent'] = 'Impossible de r&eacute;cup&eacute;rer les informations pour le contenu sp&eacute;cifi&eacute;';
$lang['admin']['errordeletingcontent'] = 'Erreur de suppression de contenu (soit cette page a des enfants soit c&#039;est la page par d&eacute;faut)';
$lang['admin']['invalidemail'] = 'L&#039;adresse email entr&eacute;e est invalide !';
$lang['admin']['info_deletepages'] = 'Note : en raison des restrictions d&#039;autorisations, certaines pages que vous avez s&eacute;lectionn&eacute; pour suppression, ne sont pas affich&eacute;es ci-dessous';
$lang['admin']['info_pagealias'] = 'Sp&eacute;cifier un alias unique pour cette page.';
$lang['admin']['info_autoalias'] = 'Si ce champ est vide, un alias est cr&eacute;&eacute; automatiquement.';
$lang['admin']['invalidparent'] = 'Vous devez s&eacute;lectionner une page parent (contactez votre administrateur si vous ne voyez pas cette option).';
$lang['admin']['forgotpwprompt'] = 'Entrez votre nom d&#039;utilisateur. Un message sera alors envoy&eacute; &agrave; l&#039;adresse email associ&eacute;e &agrave; ce nom d&#039;utilisateur avec de nouvelles informations de connexion';
$lang['admin']['info_basic_attributes'] = 'Cette s&eacute;lection vous permet de sp&eacute;cifier des propri&eacute;t&eacute;s affichables de &quot;Contenu/Pages&quot; sans que les utilisateurs aient la permission (&quot;Manage All Content&quot;) de modifier la structure de la page.';
$lang['admin']['basic_attributes'] = 'Propri&eacute;t&eacute;s basiques de la page <em>(utiliser Ctrl pour annuler)</em>&nbsp;';
$lang['admin']['no_permission'] = 'Vous n&#039;avez pas la permission d&#039;effectuer cette op&eacute;ration.';
$lang['admin']['bulk_success'] = 'Op&eacute;ration en s&eacute;rie r&eacute;alis&eacute;e avec succ&egrave;s.';
$lang['admin']['no_bulk_performed'] = 'Aucune op&eacute;ration en s&eacute;rie r&eacute;alis&eacute;e.';
$lang['admin']['info_preview_notice'] = 'Attention : cette page d&#039;aper&ccedil;u se comporte comme une fen&ecirc;tre permettant de naviguer loin de l&#039;origine de cette page aper&ccedil;u. Toutefois, si vous faites cela, attention aux comportements inattendus !! Si vous naviguez hors de l&#039;affichage initial, au retour vous ne trouvez pas la page originale, vous devrez actualiser cet onglet. Lors de l&#039;ajout de contenu, si vous naviguez hors de cette page initiale, il vous sera impossible de revenir, et vous devrez actualiser cette page.';
$lang['admin']['sitedownexcludes'] = 'Exclure ces adresses pour les messages de maintenance&nbsp;';
$lang['admin']['info_sitedownexcludes'] = 'Ce param&egrave;tre autorise une liste des adresses, IP ou r&eacute;seaux, s&eacute;par&eacute;e par des virgules qui ne devraient pas &ecirc;tre soumise au message de maintenance. Cela permet aux administrateurs de travailler sur un site alors que les visiteurs anonymes re&ccedil;oivent un message de maintenance.<br/><br/>Les adresses peuvent &ecirc;tre sp&eacute;cifi&eacute;es dans les formats suivants :&amp;nbsp<br/>
1. xxx.xxx.xxx.xxx -- (Adresse IP exacte)<br/>
2. xxx.xxx.xxx.[yyy-zzz] -- (Plage d&#039;adresses IP)<br/>
3. xxx.xxx.xxx.xxx/nn -- (nnn = nombre de bits, style cisco.  exemple :  192.168.0.100/24 = 192.168.0 ensemble de sous-r&eacute;seau de classe C)';
$lang['admin']['setup'] = 'Param&egrave;tres avanc&eacute;s';
$lang['admin']['handle_404'] = 'Erreur 404 personnalis&eacute;e';
$lang['admin']['sitedown_settings'] = 'Param&egrave;tres de maintenance';
$lang['admin']['general_settings'] = 'Param&egrave;tres g&eacute;n&eacute;raux';
$lang['admin']['help_function_page_attr'] = '<h3>Que fait cette Balise ?</h3>
<p>Cette balise peut &ecirc;tre utilis&eacute;e pour renvoyer la valeur de l&#039;attribut d&#039;une page d&eacute;termin&eacute;e. </p>
<h3>Comment l&#039;utiliser ?</h3>
<p>Ins&eacute;rer la balise dans votre gabarit : <code>{page_attr key=&quot;extra1&quot;}</code>.</p>
<h3>Quels param&egrave;tres ?</h3>
<ul>
  <li><strong>key (requis)</strong> La cl&eacute; retourn&eacute;e par l&#039;attribut.</li>
</ul>';
$lang['admin']['forge'] = 'Forge&nbsp;';
$lang['admin']['disable_wysiwyg'] = 'D&eacute;sactiver l&#039;&eacute;diteur WYSIWYG sur cette page (ind&eacute;pendamment du mod&egrave;le ou de la configuration de l&#039;utilisateur)&nbsp;';
$lang['admin']['help_function_page_image'] = '<h3>Que fait cette Balise ?</h3>
<p>Cette balise peut &ecirc;tre utilis&eacute;e pour renvoyer la valeur du champ image ou vignette d&#039;une certaine page</p>
<h3>Comment l&#039;utiliser ?</h3>
<p>Ins&eacute;rer la balise dans votre gabarit : <code>{page_image}</code>.</p>
<h3>Quels param&egrave;tres ?</h3>
<ul>
  <li><em>(option)</em> thumbnail - Affiche la valeur de la propri&eacute;t&eacute; de la vignette au lieu de celle de l&#039;image.</li>
</ul>';
$lang['admin']['pagelink_circular'] = 'Un lien de page ne peut pas fournir un autre lien comme destination';
$lang['admin']['destinationnotfound'] = 'La page s&eacute;lectionn&eacute;e n&#039;a pas pu &ecirc;tre trouv&eacute;e ou n&#039;est pas valide';
$lang['admin']['help_function_dump'] = '<h3>Que fait cette Balise ?</h3>
  <p>Ce plugin peut &ecirc;tre utiliser pour lire (dump) le contenu de toute variable smarty dans un format plus lisible. Ceci est utile pour le d&eacute;bogage, et l&#039;&eacute;dition des gabarits, afin de conna&icirc;tre le format et le type de donn&eacute;es disponibles.</p>
<h3>Comment l&#039;utiliser ?</h3>
<p>Ins&eacute;rer la balise dans votre gabarit :<code>{dump item=&#039;the_smarty_variable_to_dump&#039;}</code>.</p>
<h3>Quels param&egrave;tres ?</h3>
<ul>
<li><strong>item (requis)</strong> - La variable smarty pour lire (dump) le contenu</li>
<li>maxlevel - Le nombre maximum de niveaux r&eacute;cursis (applicable uniquement si &quot;recurse&quot; est &eacute;galement donn&eacute;. La valeur par d&eacute;faut pour ce param&egrave;tre est 3</li>
<li>nomethods - &Eacute;vite les methods from objects.</li>
<li>novars -  &Eacute;vite les object members.</li>
<li>recurse - Fait une r&eacute;cursion d&#039;un nombre maximum de niveaux jusqu&#039;&agrave; ce que le nombre maximal soit atteint.</li>
</ul>';
$lang['admin']['sqlerror'] = 'Erreur SQL dans %s';
$lang['admin']['image'] = 'Image&nbsp;';
$lang['admin']['thumbnail'] = 'Vignette&nbsp;';
$lang['admin']['searchable'] = 'Effectuer la recherche dans cette page&nbsp;';
$lang['admin']['help_function_content_image'] = '<h3>Que fait cette Balise ?</h3>
<p>Ce plugin permet aux concepteurs de gabarits d&#039;inciter les utilisateurs &agrave; s&eacute;lectionner un fichier image lors de l&#039;&eacute;dition du contenu d&#039;une page. Il se comporte de fa&ccedil;on similaire au plugin {content}, pour ajouter d&#039;autres blocs de contenu.</p>
<h3>Comment l&#039;utiliser ?</h3>
<p>Ins&eacute;rer la balise dans votre page ou votre gabarit : <code>{content_image block=&#039;image1&#039;}</code>.</p>
<h3>Quels param&egrave;tres ?</h3>
<ul>
  <li><strong>(requis)</strong> block - Le nom de ce bloc de contenu suppl&eacute;mentaire.
  <p>Exemple :</p>
  <pre>{content_image block=&#039;image1&#039;}</pre><br/>
  </li>

  <li><em>(option)</em> label - Un label ou l&#039;invite pour ce contenu dans le bloc de la page de contenu. Si non sp&eacute;cifi&eacute;, le nom du bloc sera utilis&eacute;.</li>
 
  <li><em>(option)</em> dir - Le nom d&#039;un dossier (par rapport au dossier /uploads), &agrave; partir duquel seront s&eacute;lectionn&eacute;s les fichiers images. Si non sp&eacute;cifi&eacute;, le dossier /uploads sera utilis&eacute;.
  <p>Exemple : utilisation des images du dossier uploads/images</p>
  <pre>{content_image block=&#039;image1&#039; dir=&#039;images&#039;}</pre>
  </li>

  <li><em>(option)</em> class - Le nom de la classe CSS &agrave; utiliser sur la balise img dans l&#039;affichage du site.</li>

  <li><em>(option)</em> id - L&#039;id &agrave; utiliser sur la balise img dans l&#039;affichage du site.</li> 

  <li><em>(option)</em> name - Le nom de la balise &agrave; utiliser sur la balise img dans l&#039;affichage du site.</li> 

  <li><em>(option)</em> width - La largeur d&eacute;sir&eacute;e de l&#039;image.</li>

  <li><em>(option)</em> height - La hauteur d&eacute;sir&eacute;e de l&#039;image.</li>

  <li><em>(option)</em> alt - Texte alternatif si l&#039;image ne peut pas &ecirc;tre trouv&eacute;e.</li>
<li><em>(option)</em> urlonly - affiche uniquement l&#039;url de l&#039;image, en ignorant tous les param&egrave;tres comme id, nom, largeur, hauteur, etc.</li>

<li><em>(option)</em> promptoncopy - Indique que l&#039;utilisateur autoris&eacute; doit &ecirc;tre invit&eacute; &agrave; entrer une valeur pour ce champ lors de l&#039;ex&eacute;cution de toutes les op&eacute;rations de copie avanc&eacute;s. Les op&eacute;rations de copie avanc&eacute;s peuvent &ecirc;tre fournis par des modules tiers.</li>
</ul>';
$lang['admin']['error_udt_name_chars'] = 'Le nom d&#039;une balise utilisateur valide commence par une lettre ou un underscore (_), suivi par un nombre quelconque de lettres, de chiffres, ou underscores.';
$lang['admin']['errorupdatetemplateallpages'] = 'Le gabarit n&#039;est pas actif';
$lang['admin']['hidefrommenu'] = 'Masquer dans le menu';
$lang['admin']['settemplate'] = 'D&eacute;finir le gabarit';
$lang['admin']['text_settemplate'] = 'Passer les pages s&eacute;lectionn&eacute;es sous un autre gabarit';
$lang['admin']['cachable'] = 'Cachable&nbsp;';
$lang['admin']['noncachable'] = 'Non Cachable&nbsp;';
$lang['admin']['copy_from'] = 'Copier depuis';
$lang['admin']['copy_to'] = 'Copier vers';
$lang['admin']['copycontent'] = 'Copier le contenu de l&#039;item';
$lang['admin']['md5_function'] = 'Fonction md5';
$lang['admin']['tempnam_function'] = 'Fonction PHP tempnam';
$lang['admin']['register_globals'] = 'Fonction PHP register_globals';
$lang['admin']['output_buffering'] = 'Fonction PHP output_buffering';
$lang['admin']['disable_functions'] = 'Directive PHP disable_functions';
$lang['admin']['xml_function'] = 'Support de Basic XML (expat)';
$lang['admin']['magic_quotes_gpc'] = 'Test magic_quotes pour op&eacute;rations Get/Post/Cookie';
$lang['admin']['magic_quotes_gpc_on'] = 'Les guillemets simples, doubles et les antislash sont &eacute;chapp&eacute;s automatiquement. Vous pouvez rencontrer des probl&egrave;mes en sauvegardant les gabarits';
$lang['admin']['magic_quotes_runtime'] = 'Test magic_quotes_runtime';
$lang['admin']['magic_quotes_runtime_on'] = 'La plupart des fonctions qui retournent des donn&eacute;es auront &eacute;t&eacute; &eacute;chapp&eacute;es avec un antislash. Vous pouvez rencontrer des probl&egrave;mes';
$lang['admin']['file_get_contents'] = 'Test file_get_contents ';
$lang['admin']['check_ini_set'] = 'Test ini_set ';
$lang['admin']['check_ini_set_off'] = 'Vous pouvez avoir des difficult&eacute;s avec certaines fonctionnalit&eacute;s sans cette possibilit&eacute;. Ce test peut &eacute;chouer si le safe_mode est activ&eacute;';
$lang['admin']['file_uploads'] = 'Upload de fichier';
$lang['admin']['test_remote_url'] = 'Test l&#039;URL distant';
$lang['admin']['test_remote_url_failed'] = 'Vous ne serez probablement pas en mesure d&#039;ouvrir un fichier sur un serveur web distant.';
$lang['admin']['test_allow_url_fopen_failed'] = 'Lorsque la fonction allow_url_fopen est d&eacute;sactiv&eacute;e, vous ne serez pas en mesure d&#039;acc&eacute;der &agrave; des objets comme une URL ou des fichiers en protocole ftp ou http.';
$lang['admin']['connection_error'] = 'Les connexions sortantes http semblent ne pas fonctionner ! V&eacute;rifier le pare-feu ou les droits de contr&ocirc;le d&#039;acc&egrave;s (ACL) pour les connexions externes. Vous pouvez avoir des difficult&eacute;s avec le Gestionnaire de Modules et, potentiellement, avec d&#039;autres fonctionnalit&eacute;s.';
$lang['admin']['remote_connection_timeout'] = 'Expiration du d&eacute;lai de connexion !';
$lang['admin']['search_string_find'] = 'Connexion ok !';
$lang['admin']['connection_failed'] = 'Echec de la connexion !';
$lang['admin']['remote_response_ok'] = 'R&eacute;ponse connexion : ok !';
$lang['admin']['remote_response_404'] = 'R&eacute;ponse connexion : non trouv&eacute;e !';
$lang['admin']['remote_response_error'] = 'R&eacute;ponse connexion : Erreur !';
$lang['admin']['notifications_to_handle'] = 'Vous avez <strong>%d</strong> notifications en cours';
$lang['admin']['notification_to_handle'] = 'Vous avez <strong>%d</strong> notification en cours';
$lang['admin']['notifications'] = 'Notifications&nbsp;';
$lang['admin']['dashboard'] = 'Tableau de bord';
$lang['admin']['ignorenotificationsfrommodules'] = 'Ignorer les notifications de ces modules <em>(utiliser Ctrl pour annuler)</em>&nbsp;';
$lang['admin']['admin_enablenotifications'] = 'Permet d&#039;afficher les notifications aux utilisateurs<br/><em>(Ces notifications seront affich&eacute;es sur chaque page d&#039;administration)</em>&nbsp;';
$lang['admin']['enablenotifications'] = 'Activer les notifications d&#039;utilisateur dans la section Administration&nbsp;';
$lang['admin']['test_check_open_basedir_failed'] = 'La restriction sp&eacute;cifi&eacute;e par open_basedir est activ&eacute;e. Cette restriction peut entra&icirc;ner des difficult&eacute;s avec certaines fonctionnalit&eacute;s.';
$lang['admin']['config_writable'] = 'Le fichier config.php a les droits en &eacute;criture. Il est plus s&ucirc;r de changer la permission en lecture seule';
$lang['admin']['caution'] = 'Attention';
$lang['admin']['create_dir_and_file'] = 'V&eacute;rification si le processus httpd peut cr&eacute;er un fichier dans un nouveau dossier.';
$lang['admin']['os_session_save_path'] = 'Aucune v&eacute;rification &agrave; cause du chemin OS';
$lang['admin']['unlimited'] = 'Illimit&eacute;';
$lang['admin']['open_basedir'] = 'PHP open_basedir';
$lang['admin']['open_basedir_active'] = 'Aucune v&eacute;rification &agrave; cause de la restriction sp&eacute;cifi&eacute;e par PHP open_basedir';
$lang['admin']['invalid'] = 'Invalide';
$lang['admin']['checksum_passed'] = 'Tous les contr&ocirc;les (checksums) correspondent &agrave; ceux du fichier transf&eacute;r&eacute;';
$lang['admin']['error_retrieving_file_list'] = 'Erreur lors de la r&eacute;cup&eacute;ration de la Liste des fichiers';
$lang['admin']['files_checksum_failed'] = 'Impossible de faire le contr&ocirc;le (checksums)';
$lang['admin']['failure'] = 'Echec';
$lang['admin']['help_function_process_pagedata'] = '<h3>Que fait cette Balise ?</h3>
<p>Ce plugin va traiter les donn&eacute;es contenues dans le bloc &quot;pagedata&quot; des pages de contenu &agrave; travers smarty.  Il permet de sp&eacute;cifier des donn&eacute;es sp&eacute;cifiques &agrave; chaque page via smarty sans avoir &agrave; changer le gabarit de chaque page.</p>
<h3>Comment l&#039;utiliser ?</h3>
<ol>
  <li>Ins&eacute;rer les variables smarty assign&eacute;es et autres logiques smarty dans le champ contenu de la page (pagedata) sur les pages en question.</li>
  <li>Ins&eacute;rer la balise <code>{process_pagedata}</code> au plus haut de votre page de gabarit.</li>
</ol>
<br/>
<h3>Quels param&egrave;tres ?</h3>
<p>Aucun pour le moment</p>';
$lang['admin']['page_metadata'] = 'M&eacute;tadonn&eacute;es sp&eacute;cifiques pour cette page&nbsp;';
$lang['admin']['pagedata_codeblock'] = 'Balises Smarty sp&eacute;cifiques pour cette page&nbsp;';
$lang['admin']['error_uploadproblem'] = 'Une erreur s&#039;est produite pendant le transfert';
$lang['admin']['error_nofileuploaded'] = 'Aucun fichier n&#039;a &eacute;t&eacute; upload&eacute;';
$lang['admin']['files_failed'] = 'Echec de la v&eacute;rification md5sum sur les fichiers&nbsp;';
$lang['admin']['files_not_found'] = 'Fichiers non trouv&eacute;s';
$lang['admin']['info_generate_cksum_file'] = 'Cette fonction vous permettra de g&eacute;n&eacute;rer un fichier de contr&ocirc;le (checksums) et de l&#039;enregistrer sur votre ordinateur pour validation ult&eacute;rieure. Cela devrait &ecirc;tre fait juste avant de mettre en service le site web, et/ou apr&egrave;s toute les mises &agrave; jour, ou des modifications importantes.';
$lang['admin']['info_validation'] = 'Cette fonction permettra de comparer le contr&ocirc;le (checksums) dans le fichier d&#039;installation avec les fichiers sur le serveur. Il peut vous aider &agrave; trouver des probl&egrave;mes d&#039;upload, ou exactement quels fichiers ont &eacute;t&eacute; modifi&eacute;s si votre syst&egrave;me a &eacute;t&eacute; pirat&eacute;. Un fichier de contr&ocirc;le (checksums) est g&eacute;n&eacute;r&eacute; pour chaque version de CMS Made Simple &agrave; partir de la version 1.4.';
$lang['admin']['download_cksum_file'] = 'T&eacute;l&eacute;charger le fichier Checksum';
$lang['admin']['perform_validation'] = 'Effectuer la validation';
$lang['admin']['upload_cksum_file'] = 'Uploader le fichier Checksum';
$lang['admin']['checksumdescription'] = 'V&eacute;rifier l&#039;int&eacute;grit&eacute; des fichiers de CMS Made Simple par comparaison avec le contr&ocirc;le (checksums)';
$lang['admin']['system_verification'] = 'V&eacute;rification du syst&egrave;me';
$lang['admin']['extra1'] = 'Attribut suppl&eacute;mentaire 1 de la page&nbsp;';
$lang['admin']['extra2'] = 'Attribut suppl&eacute;mentaire 2 de la page&nbsp;';
$lang['admin']['extra3'] = 'Attribut suppl&eacute;mentaire 3 de la page&nbsp;';
$lang['admin']['start_upgrade_process'] = 'D&eacute;but du processus d&#039;upgrade';
$lang['admin']['warning_upgrade'] = '<em><strong>ATTENTION</strong></em>&nbsp;: CMSMS a besoin d&#039;une mise &agrave; niveau - Le dossier /install doit &ecirc;tre pr&eacute;sent !';
$lang['admin']['warning_upgrade_info1'] = 'Vous utilisez le sch&eacute;ma version %s. et vous devez mettre &agrave; niveau au sch&eacute;ma version %s';
$lang['admin']['warning_upgrade_info2'] = 'Merci de cliquer sur le lien suivant : %s.';
$lang['admin']['warning_mail_settings'] = 'Vos param&egrave;tres de messagerie n&#039;ont pas &eacute;t&eacute; configur&eacute;. Cela pourrait interf&eacute;rer avec la capacit&eacute; de votre site pour envoyer des messages par email. Vous devriez aller sur <a href="%s">Extensions >> CMSMailer</a> et configurer les param&egrave;tres email avec les informations fournies par votre h&eacute;bergeur.';
$lang['admin']['view_page'] = 'Voir cette page dans une nouvelle fen&ecirc;tre';
$lang['admin']['off'] = 'Off ';
$lang['admin']['on'] = 'On ';
$lang['admin']['invalid_test'] = 'Param&egrave;tre de test invalide !';
$lang['admin']['copy_paste_forum'] = 'Vue au format text <em>(Convient pour coller dans le post du forum)</em>';
$lang['admin']['permission_information'] = 'Informations sur les Permissions&nbsp;';
$lang['admin']['server_os'] = 'Syst&egrave;me d&#039;exploitation serveur&nbsp;';
$lang['admin']['server_api'] = 'API serveur&nbsp;';
$lang['admin']['server_software'] = 'Version software du serveur&nbsp;';
$lang['admin']['server_information'] = 'Informations serveur&nbsp;';
$lang['admin']['session_save_path'] = 'Chemin du dossier Session';
$lang['admin']['max_execution_time'] = 'Temps Maximum d&#039;&eacute;xecution';
$lang['admin']['gd_version'] = 'Version GD';
$lang['admin']['upload_max_filesize'] = 'Taille maximum pour l&#039;Upload';
$lang['admin']['post_max_size'] = 'Taille maximum par m&eacute;thode POST';
$lang['admin']['memory_limit'] = 'M&eacute;moire Limite PHP effective';
$lang['admin']['server_db_type'] = 'Serveur de base de donn&eacute;es&nbsp;';
$lang['admin']['server_db_version'] = 'Version du serveur de base de donn&eacute;es&nbsp;';
$lang['admin']['phpversion'] = 'Version PHP actuelle';
$lang['admin']['safe_mode'] = 'Safe Mode PHP';
$lang['admin']['php_information'] = 'Informations PHP&nbsp;';
$lang['admin']['cms_install_information'] = 'Informations d&#039;Installation du CMS&nbsp;';
$lang['admin']['cms_version'] = 'Version du CMS';
$lang['admin']['installed_modules'] = 'Modules install&eacute;s';
$lang['admin']['config_information'] = 'Informations de configuration';
$lang['admin']['systeminfo_copy_paste'] = 'Merci de faire un copier coller de cette s&eacute;lection dans le post du forum ';
$lang['admin']['help_systeminformation'] = 'Les informations affich&eacute;es ci-dessous sont collect&eacute;es depuis diff&eacute;rents endroits, et permettent d&#039;informer pour un diagnostic ou une aide sur l&#039;installation de CMS Made Simple.';
$lang['admin']['systeminfo'] = 'Informations du syst&egrave;me';
$lang['admin']['systeminfodescription'] = 'Affiche diff&eacute;rentes informations sur votre syst&egrave;me pour aider &agrave; diagnostiquer des probl&egrave;mes.';
$lang['admin']['welcome_user'] = 'Bienvenu(e)&nbsp;';
$lang['admin']['itsbeensincelogin'] = 'Cela fait %s depuis votre derni&egrave;re connexion';
$lang['admin']['days'] = 'jours';
$lang['admin']['day'] = 'jour';
$lang['admin']['hours'] = 'heures';
$lang['admin']['hour'] = 'heure';
$lang['admin']['minutes'] = 'minutes ';
$lang['admin']['minute'] = 'minute ';
$lang['admin']['help_css_max_age'] = 'Ce param&egrave;tre peut &ecirc;tre &eacute;lev&eacute; pour des sites statiques, mais doit &ecirc;tre &agrave; 0 pendant le d&eacute;veloppement.';
$lang['admin']['css_max_age'] = 'Temps maximum (secondes) de stockage en cache du navigateur de la feuille de style&nbsp;';
$lang['admin']['error'] = 'Erreur';
$lang['admin']['clear_version_check_cache'] = 'Effacer du cache toute information de v&eacute;rification de version en soumettant&nbsp;';
$lang['admin']['new_version_available'] = '<em>Remarque :</em> Une nouvelle version de CMS Made Simple est disponible. Informez-en votre administrateur.';
$lang['admin']['info_urlcheckversion'] = 'Si cette URL utilise le mot &quot;none&quot;, aucun contr&ocirc;le ne sera effectu&eacute;.<br/>Une cha&icirc;ne vide utilisera l&#039;URL par d&eacute;faut.';
$lang['admin']['urlcheckversion'] = 'V&eacute;rifier les nouvelles versions CMS &agrave; l&#039;aide de cette URL&nbsp;';
$lang['admin']['master_admintheme'] = 'Th&egrave;me de l&#039;administration par d&eacute;faut (pour la page de connexion)&nbsp;';
$lang['admin']['contenttype_separator'] = 'S&eacute;parateur';
$lang['admin']['contenttype_sectionheader'] = 'Ent&ecirc;te de section ';
$lang['admin']['contenttype_link'] = 'Lien externe';
$lang['admin']['contenttype_content'] = 'Contenu';
$lang['admin']['contenttype_pagelink'] = 'Lien page interne';
$lang['admin']['nogcbwysiwyg'] = 'Interdire les &eacute;diteurs WYSIWYG dans blocs de contenus globaux&nbsp;';
$lang['admin']['destination_page'] = 'Page de destination&nbsp;';
$lang['admin']['additional_params'] = 'Param&egrave;tres additionnels&nbsp;';
$lang['admin']['help_function_current_date'] = '<h3 style=&quot;color: red;&quot;>ATTENTION ce plugin est obsol&egrave;te.</h3>
 		 <p>Nous recommandons d&amp;#039;utiliser la balise <code>{$smarty.now|cms_date_format}</code></p>	
<h3>Que fait cette Balise ?</h3>
	<p>Affiche la date et l&#039;heure actuelle.  Si aucun format n&#039;est donn&eacute;, l&#039;affichage par d&eacute;faut sera &#039;Jan 01, 2004&#039;.</p>
	<h3>Comment l&#039;utiliser ?</h3>
	<p>Ins&eacute;rer la balise dans votre page ou votre gabarit : <code>{current_date format=&quot;%A %d-%b-%y %T %Z&quot;}</code></p>
	<h3>Quels param&egrave;tres ?</h3>
	<ul>
		<li><em>(option)</em> format - le format de Date/Heure utilisant les param&egrave;tres de la fonction php strftime.  Voir <a href="http://php.net/strftime" target="_blank">ici</a> pour une liste des param&egrave;tres et plus d&#039;information.</li>
		<li><em>(option)</em> ucword - Si &quot;true&quot; affiche en majuscule la premi&egrave;re lettre de chaque mot.</li>
	</ul>';
$lang['admin']['help_function_valid_xhtml'] = '<h3>Que fait cette Balise ?</h3>
<p>Affiche un lien vers le validateur HTML du w3c.</p>
<h3>Comment l&#039;utiliser ?</h3>
<p>Ins&eacute;rer la balise dans votre page ou votre gabarit : <code>{valid_xhtml}</code></p>
<h3>Quels param&egrave;tres ?</h3>
    <ul>
	<li><em>(option)</em> url  (string) - l&#039;URL utilis&eacute; pour la validation, si aucun n&#039;est entr&eacute;, http://validator.w3.org/check/referer est utilis&eacute;.</li>
	<li><em>(option)</em> class (string) - Si d&eacute;fini, il sera utilis&eacute; comme attribut de la classe pour l&#039;&eacute;l&eacute;ment lien (a)</li>
	<li><em>(option)</em> target (string) - Si d&eacute;fini, il sera utilis&eacute; comme attribut de la cible pour l&#039;&eacute;l&eacute;ment lien (a)</li>
	<li><em>(option)</em> image (true/false) - Si d&eacute;fini &agrave; &quot;false&quot;, un lien en texte sera utilis&eacute; &agrave; la place d&#039;une image/ic&ocirc;ne.</li>
	<li><em>(option)</em> text (string) - Si d&eacute;fini, il sera utilis&eacute; pour le texte du lien ou le texte alternatif de l&#039;image. &#039;valid XHTML 1.0 Transitional&#039; par d&eacute;faut.<br /> Quand une image est utilis&eacute;e, l&#039;entr&eacute;e donn&eacute;e sera &eacute;galement utilis&eacute;e pour l&#039;attribut &quot;alt&quot; (par d&eacute;faut, peut &ecirc;tre outrepass&eacute; en utilisant le param&egrave;tre &#039;alt&#039;).</li>
	<li><em>(option)</em> image_class (string) - Seulement si &#039;image&#039; n&#039;est pas sur &quot;false&quot;. Si d&eacute;fini, il sera utilis&eacute; comme attribut de la classe pour l&#039;&eacute;l&eacute;ment image (img)</li>
	<li><em>(option)</em> src (string) - Seulement si &#039;image&#039; n&#039;est pas sur &quot;false&quot;. L&#039;ic&ocirc;ne &agrave; afficher. L&#039;image par d&eacute;faut est http://www.w3.org/Icons/valid-xhtml10</li>
	<li><em>(option)</em> width (string) - Seulement si &#039;image&#039; n&#039;est pas sur &quot;false&quot;. Largeur de l&#039;image. Par d&eacute;faut &agrave; 88 (largeur de http://www.w3.org/Icons/valid-xhtml10)</li>
	<li><em>(option)</em> height (string) - Seulement si &#039;image&#039; n&#039;est pas sur &quot;false&quot;. Hauteur de l&#039;image. Par d&eacute;faut &agrave; 31 (hauteur de http://www.w3.org/Icons/valid-xhtml10)</li>
	<li><em>(option)</em> alt (string) - Seulement si &#039;image&#039; n&#039;est pas sur &quot;false&quot;. Le texte alternatif (attribut &#039;alt&#039; ) pour l&#039;image (&eacute;l&eacute;ment). Si aucun n&#039;est d&eacute;fini, le texte du lien sera utilis&eacute;.</li>
    </ul>';
$lang['admin']['help_function_valid_css'] = '<h3>Que fait cette Balise ?</h3>
<p>Affiche un lien vers le validateur CSS du w3c.</p>
<h3>Comment l&#039;utiliser ?</h3>
<p>Ins&eacute;rer la balise dans votre page ou votre gabarit : <code>{valid_css}</code></p>
<h3>Quels param&egrave;tres ?</h3>
    <ul>
        <li><em>(option)</em> url (string) - l&#039;URL utilis&eacute; pour la validation, si aucun n&#039;est entr&eacute;, http://jigsaw.w3.org/css-validator/check/referer est utilis&eacute;.</li>
	<li><em>(option)</em> class (string) - Si d&eacute;fini, il sera utilis&eacute; comme attribut de la classe pour l&#039;&eacute;l&eacute;ment lien (a)</li>
	<li><em>(option)</em> target (string) - Si d&eacute;fini, il sera utilis&eacute; comme attribut de la cible pour l&#039;&eacute;l&eacute;ment lien (a)</li>
	<li><em>(option)</em> image (true/false) - Si d&eacute;fini &agrave; &quot;false&quot;, un lien en texte sera utilis&eacute; &agrave; la place d&#039;une image/ic&ocirc;ne.</li>
	<li><em>(option)</em> text (string) - Si d&eacute;fini, il sera utilis&eacute; pour le texte du lien ou le texte alternatif de l&#039;image. &#039;Valid CSS 2.1&#039; par d&eacute;faut.<br /> Quand une image est utilis&eacute;e, l&#039;entr&eacute;e donn&eacute;e sera &eacute;galement utilis&eacute;e pour l&#039;attribut &quot;alt&quot; (par d&eacute;faut, peut &ecirc;tre outrepass&eacute; en utilisant le param&egrave;tre &#039;alt&#039;).</li>
	<li><em>(option)</em> image_class (string) - Seulement si &#039;image&#039; n&#039;est pas sur &quot;false&quot;. Si d&eacute;fini, il sera utilis&eacute; comme attribut de la classe pour l&#039;&eacute;l&eacute;ment image (img)</li>
        <li><em>(option)</em> src (string) - Seulement si &#039;image&#039; n&#039;est pas sur &quot;false&quot;. L&#039;ic&ocirc;ne &agrave; afficher. L&#039;image par d&eacute;faut est http://jigsaw.w3.org/css-validator/images/vcss</li>
        <li><em>(option)</em> width (string) - Seulement si &#039;image&#039; n&#039;est pas sur &quot;false&quot;. Largeur de l&#039;image. Par d&eacute;faut &agrave; 88 (largeur de http://jigsaw.w3.org/css-validator/images/vcss)</li>
        <li><em>(option)</em> height (string) -Seulement si &#039;image&#039; n&#039;est pas sur &quot;false&quot;. Hauteur de l&#039;image. Par d&eacute;faut &agrave; 31 (hauteur de http://jigsaw.w3.org/css-validator/images/vcss)</li>
	<li><em>(option)</em> alt  (string) - Seulement si &#039;image&#039; n&#039;est pas sur &quot;false&quot;. Le texte alternatif (attribut &#039;alt&#039; ) pour l&#039;image (&eacute;l&eacute;ment). Si aucun n&#039;est d&eacute;fini, le texte du lien sera utilis&eacute;.</li>
    </ul>';
$lang['admin']['help_function_title'] = '	<h3>Que fait cette Balise ?</h3>
	<p>Affiche le titre de la page.</p>
	<h3>Comment l&#039;utiliser ?</h3>
	<p>Ins&eacute;rer la balise dans votre page ou votre gabarit : <code>{title}</code></p>
	<h3>Quels param&egrave;tres ?</h3>
	<p><em>(option)</em> assign (string) - Assigne le r&eacute;sultat &agrave; une variable Smarty avec ce nom.</p>';
$lang['admin']['help_function_stylesheet'] = '	<h3>Que fait cette Balise ?</h3>
<p><span style=&quot;color: #ff0000;&quot;>ATTENTION ce plugin est obsol&egrave;te</span> et sera supprim&eacute; des versions futures de CMSMS.</p>
	<p>R&eacute;cup&egrave;re les donn&eacute;es des feuilles de style du syst&egrave;me. Par d&eacute;faut, elle prend toutes les feuilles de style li&eacute;es au gabarit en cours.</p>
	<h3>Comment l&#039;utiliser ?</h3>
	<p>Ins&eacute;rer la balise dans votre page ou votre gabarit dans l&#039;ent&ecirc;te : <code>{stylesheet}</code></p>
	<h3>Quels param&egrave;tres ?</h3>
	<ul>
		<li><em>(option)</em> name - Au lieu d&#039;avoir toutes les feuilles de style pour la page donn&eacute;e, il n&#039;y aura que celle nomm&eacute;e sp&eacute;cifiquement, qu&#039;elle soit li&eacute;e au gabarit en cours ou non.</li>
		<li><em>(option)</em> media - Si le nom est d&eacute;fini, ce param&egrave;tre permet de changer de type de m&eacute;dia pour cette feuille de style.</li>
 <li><em>(option)</em> templateid - Si templateid est d&eacute;fini, les feuilles de styles seront associ&eacute;es uniquement &agrave; ce gabarit, au lieu de celui en cours.</li>
	</ul>
	';
$lang['admin']['help_function_stopexpandcollapse'] = '	<h3>Que fait cette Balise ?</h3>
	<p>Utilise le langage Javascript, pour permettre &agrave; du contenu d&#039;&ecirc;tre extensible ou non, avec un simple clic de souris.</p>

	<h3>Comment l&#039;utiliser ?</h3>
	<p>Ins&eacute;rer la balise dans votre page ou votre gabarit :<br />
	<br />
	<code>{startExpandCollapse id=&quot;name&quot; title=&quot;Cliquez ici&quot;}<br />
	Ceci est le contenu que l&#039;utilisateur verra lorsqu&#039;il cliquera sur le lien &quot;Cliquez ici&quot; ci-dessus. Le contenu entre les balises {startExpandCollapse} et {stopExpandCollapse} sera affich&eacute; lors du clic.<br />
	{stopExpandCollapse}
	</code>
	<br />
	<br />
	Note: Si vous souhaitez utiliser cette fonctionnalit&eacute; plus d&#039;une fois par page, chaque balise startExpandCollapse doit avoir un id unique.</p>
	<h3>Que faire si l&#039;on veut changer l&#039;apparence du titre ?</h3>
	<p>L&#039;apparence du titre est modifiable via les CSS. Le titre est englob&eacute; dans une balise div avec l&#039;id que vous aurez sp&eacute;cifi&eacute;.</p>

	<h3>Quels param&egrave;tres ?</h3>
	<p>
	<i>startExpandCollapse accepte les param&egrave;tres suivants</i><br />
	&nbsp; &nbsp;id - L&#039;identifiant <u>unique</u> d&#039;une section afficher/masquer.<br />
	&nbsp; &nbsp;title - Le texte affich&eacute; pour afficher/masquer le contenu.<br />
	<i>stopExpandCollapse n&#039;a pas de param&egrave;tre d&eacute;fini</i><br />
	</p>';
$lang['admin']['help_function_startexpandcollapse'] = '	<h3>Que fait cette Balise ?</h3>
	<p>Utilise le langage Javascript, pour permettre &agrave; du contenu d&#039;&ecirc;tre extensible ou non, avec un simple clic de souris.</p>

	<h3>Comment l&#039;utiliser ?</h3>
	<p>Ins&eacute;rer la balise dans votre page ou votre gabarit :<br />
	<br />
	<code>{startExpandCollapse id=&quot;name&quot; title=&quot;Cliquez ici&quot;}<br />
	Ceci est le contenu que l&#039;utilisateur vera lorsqu&#039;il cliquera sur le lien &quot;Cliquez ici&quot; ci-dessus. Le contenu entre les balises {startExpandCollapse} et {stopExpandCollapse} sera affich&eacute; lors du clic.<br />
	{stopExpandCollapse}
	</code>
	<br />
	<br />
	Note: Si vous souhaitez utiliser cette fonctionnalit&eacute; plus d&#039;une fois par page, chaque tag startExpandCollapse doit avoir un id unique.</p>
	<h3>Que faire si l&#039;on veut changer l&#039;apparence du titre ?</h3>
	<p>L&#039;apparence du titre est modifiable via les CSS. Le titre est englob&eacute; dans une balise div avec l&#039;id que vous aurez sp&eacute;cifi&eacute;.</p>

	<h3>Quels param&egrave;tres ?</h3>
	<p>
	<i>startExpandCollapse accepte les param&egrave;tres suivants</i><br />
	&nbsp; &nbsp;id - L&#039;identifiant <u>unique</u> d&#039;une section afficher/masquer.<br />
	&nbsp; &nbsp;title - Le texte affich&eacute; pour afficher/masquer le contenu.<br />
	<i>stopExpandCollapse n&#039;a pas de param&egrave;tre d&eacute;fini</i><br />
	</p>';
$lang['admin']['help_function_sitemap'] = '    <h3>Avertissement</h3>
    <p>ATTENTION ce plugin est obsol&egrave;te. Nous recommandons d&#039;utiliser la balise <code>{site_mapper}</code>.</p>
    <h3>Que fait cette Balise ?</h3>
    <p>Affiche le plan du site.</p>
    <h3>Comment l&#039;utiliser ?</h3>
    <p>Ins&eacute;rer la balise dans votre page ou votre gabarit : <code>{sitemap}</code></p>
    <h3>Quels param&egrave;tres ?</h3>
    
        <ul>
            <li><em>(option)</em> <tt>class</tt> - Une classe css (css_class) pour le tag ul qui inclus le sitemap complet.</li>
            <li><em>(option)</em> <tt>start_element</tt> - La hi&eacute;rarchie primaire de l&#039;&eacute;l&eacute;ment (ex : 1.2 ou 3.5.1). Ce param&egrave;tre d&eacute;fini la racine du menu. Vous pouvez utiliser l&#039;alias de la page au lieu du num&eacute;ro hi&eacute;rarchique.</li>
            <li><em>(option)</em> <tt>number_of_levels</tt> - Un entier, le nombre de niveaux que vous souhaitez afficher dans le menu. Doit &ecirc;tre d&eacute;fini &agrave; 2 en utilisant un s&eacute;parateur.</li>
            <li><em>(option)</em> <tt>delimiter</tt> - Texte pour s&eacute;parer les entr&eacute;e qui ne sont pas de niveau 1 du sitemap (ex 1.1, 1.2). Pratique pour afficher les entr&eacute;es de niveau 2 c&ocirc;te &agrave; c&ocirc;te (css display:inline).</li>
            <li><em>(option)</em> <tt>initial 1/0</tt> - Si param&eacute;tr&eacute; &agrave; 1, liste &eacute;galement les entr&eacute;es qui ne sont pas de niveau 1 avec un s&eacute;parateur (ex 1.1, 2.1).</li>
            <li><em>(option)</em> <tt>relative 1/0</tt> - N&#039;affiche pas la page courante (dans le sitemap) - On ne montre que ses enfants (&eacute;l&eacute;ments de niveau inf&eacute;rieurs).</li>
            <li><em>(option)</em> <tt>showall 1/0</tt> - Affiche toutes les pages si activ&eacute;, sinon, n&#039;affiche que les pages avec une entr&eacute;e de menu active.</li>
            <li><em>(option)</em> <tt>add_elements</tt> - Une liste d&#039;alias de pages s&eacute;par&eacute;e par des virgules qui seront ajout&eacute;s aux pages affich&eacute;es avec les entr&eacute;es de menu actives (showall non activ&eacute;).</li>
        </ul>
        ';
$lang['admin']['help_function_adsense'] = '	<h3>Que fait cette Balise ?</h3>
	<p>Google Adsense est un programme de publicit&eacute; pour les sites internet. Cette balise reprend les param&egrave;tres basiques fournis par ce programme et permet de les int&eacute;grer plus facilement dans les gabarits.  Voir <a href="http://www.google.com/adsense" target="_blank">ici</a> pour plus de d&eacute;tails sur Adsense.</p>
	<h3>Comment l&#039;utiliser ?</h3>
	<p>Tout d&#039;abord, inscrivez-vous sur google et r&eacute;cup&eacute;rez vos param&egrave;tres. Puis ins&eacute;rez la balise sur votre page/gabarit comme ceci : <code>{adsense ad_client=&quot;pub-random#&quot; ad_width=&quot;120&quot; ad_height=&quot;600&quot; ad_format=&quot;120x600_as&quot;}</code></p>
	<h3>Quels param&egrave;tres ?</h3>
	<p>Tous les param&egrave;tres sont optionnels, mais fortement recommand&eacute;s (au risque d&#039;un mauvais fonctionnement...). Options :</p>
	<ul>
		<li>ad_client - Cela peut &ecirc;tre l&#039;identifiant pub_random# qui repr&eacute;sente votre num&eacute;ro de compte adsense</li>
		<li>ad_width - Largeur de la pub</li>
		<li>ad_height - Hauteur de la pub</li>
		<li>ad_format - &quot;format&quot; de la pub <em>ex 120x600_as</em></li>
		<li>ad_channel - Les channels sont une fonctionnalit&eacute; avanc&eacute;e de Adsense. Si vous utilisez cette fonctionnalit&eacute;, c&#039;est ici qu&#039;il faut la saisir.</li>
<li>ad_slot - Les slots sont une fonctionnalit&eacute; avanc&eacute;e de Adsense.  Si vous utilisez cette fonctionnalit&eacute;, c&#039;est ici qu&#039;il faut la saisir.</li>
		<li>ad_type - options possibles : text, image ou text_image.</li>
		<li>color_border - Couleur de la bordure. Utilisez une couleur hexad&eacute;cimale (#1A34DF) ou placez le nom de la couleur (ex : red)</li>
		<li>color_link - Couleur du lien. Utilisez une couleur hexad&eacute;cimale (#1A34DF) ou placez le nom de la couleur (ex : red)</li>
		<li>color_url - Couleur de l&#039;url. Utilisez une couleur hexad&eacute;cimale (#1A34DF) ou placez le nom de la couleur (ex : red)</li>
		<li>color_text - Couleur du texte. Utilisez une couleur hexad&eacute;cimale (#1A34DF) ou placez le nom de la couleur (ex : red)</li>
	</ul>';
$lang['admin']['help_function_sitename'] = '        <h3>Que fait cette Balise ?</h3>
        <p>Affiche le nom du site. Ce param&egrave;tre est d&eacute;fini lors de l&#039;installation et peut &ecirc;tre modifi&eacute; via les Param&egrave;tres Globaux du panneau d&#039;administration.</p>
        <h3>Comment l&#039;utiliser ?</h3>
        <p>Ins&eacute;rer la balise dans votre page ou votre gabarit : <code>{sitename}</code></p>
        <h3>Quels param&egrave;tres ?</h3>
        <p><em>(option)</em> assign (string) - Enregistre le r&eacute;sultat dans une variable smarty avec le nom &#039;string&#039;.</p>';
$lang['admin']['help_function_search'] = '	<h3>Que fait cette Balise ?</h3>
	<p>C&#039;est une balise pour le module de recherche afin de rendre la syntaxe de balise plus ais&eacute;e. 
	Au lieu d&#039;avoir &agrave; utiliser <code>{cms_module module=&#039;Search&#039;}</code> vous pouvez maintenant utiliser <code>{search}</code> pour ins&eacute;rer le module dans un gabarit.
	</p>
	<h3>Comment l&#039;utiliser ?</h3>
	<p>Ins&eacute;rer la balise <code>{search}</code> dans votre votre gabarit o&ugrave; la bo&icirc;te de recherche doit appara&icirc;tre. Pour de l&#039;aide &agrave; propos du module de recherche, r&eacute;f&eacute;rez-vous &agrave; l&#039;aide du module Recherche.</p>';
$lang['admin']['help_function_root_url'] = '	<h3>Que fait cette Balise ?</h3>
	<p>Affiche l&#039;url de la racine du site.</p>
	<h3>Comment l&#039;utiliser ?</h3>
	<p>Ins&eacute;rer la balise dans votre page ou votre gabarit : <code>{root_url}</code></p>
	<h3>Quels param&egrave;tres ?</h3>
	<p>Aucun pour le moment.</p>';
$lang['admin']['help_function_repeat'] = '  <h3>Que fait cette Balise ?</h3>
  <p>R&eacute;p&egrave;te une s&eacute;quence sp&eacute;cifi&eacute;e de caract&egrave;res, un nombre d&eacute;fini de fois.</p>
  <h3>Comment l&#039;utiliser ?</h3>
  <p>Ins&eacute;rer la balise dans votre page ou votre gabarit : <code>{repeat string=&#039;r&eacute;p&eacute;ter &ccedil;a &#039; times=&#039;3&#039;}</code></p>
  <h3>Quels param&egrave;tres ?</h3>
  <ul>
  <li>string=&#039;text&#039; - La s&eacute;quence &agrave; r&eacute;p&eacute;ter</li>
  <li>times=&#039;num&#039; - Le nombre de r&eacute;p&eacute;tition de cette s&eacute;quence.</li>
  </ul>';
$lang['admin']['help_function_recently_updated'] = '	<h3>Que fait cette Balise ?</h3>
	<p>Affiche une liste des pages r&eacute;cemment modifi&eacute;es.</p>
	<h3>Comment l&#039;utiliser ?</h3>
	<p>Ins&eacute;rer la balise dans votre page ou votre gabarit : <code>{recently_updated}</code></p>
	<h3>Quels param&egrave;tres ?</h3>
	<ul>
	 <li><p><em>(option</em> number=&#039;10&#039; - Nombre des pages &agrave; afficher.</p><p>Exemple: {recently_updated number=&#039;15&#039;} affichera 15 pages...</p></li>
 	 <li><p><em>(option)</em> leadin=&#039;Last changed&#039; - Texte &agrave; afficher &agrave; gauche de la date de modification.</p><p>Exemple : {recently_updated leadin=&#039;Derni&egrave;re Modification&#039;}</p></li>
 	 <li><p><em>(option)</em> showtitle=&#039;true&#039; - Affiche l&#039;attribut titre si d&eacute;fini (true|false).</p><p>Exemple : {recently_updated showtitle=&#039;true&#039;}</p></li>											 	
	 <li><p><em>(option)</em> css_class=&#039;some_name&#039; - Ajoute une balise div d&eacute;finie avec cette classe autour de la liste.</p><p>Exemple : {recently_updated css_class=&#039;nom_de_classe&#039;}</p></li>											 	
	 <li><p><em>(option)</em> dateformat=&#039;d.m.y h:m&#039; - Par d&eacute;faut d.m.y h:m , utilisez le format de votre choix (voir php -date- format)</p><p>Exemple : {recently_updated dateformat=&#039;D M j G:i:s T Y&#039;}</p></li>											 	
	</ul>
	<p>ou une combinaison :</p>
	{recently_updated number=&#039;15&#039; showtitle=&#039;false&#039; leadin=&#039;Derni&egrave;re Modification: &#039; css_class=&#039;nom_de_classe&#039; dateformat=&#039;D M j G:i:s T Y&#039;}';
$lang['admin']['help_function_print'] = '	<h3>Que fait cette Balise ?</h3>
	<p>C&#039;est simplement une balise pour le module d&#039;impression afin de rendre la syntaxe de balise plus ais&eacute;e. 
	Au lieu d&#039;utiliser <code>{cms_module module=&#039;Printing&#039;}</code> vous pouvez aussi utiliser <code>{print}</code> pour ins&eacute;rer ce module sur vos pages/gabarits
	</p>
	<h3>Comment l&#039;utiliser ?</h3>
	<p>Ins&eacute;rer la balise dans votre page ou votre gabarit : <code>{print}</code>. Pour plus de d&eacute;tails sur les options et param&egrave;tres, merci de consulter l&#039;aide du module d&#039;impression personnalis&eacute;e.</p>';
$lang['admin']['help_function_oldprint'] = '	<h3>Que fait cette Balise ?</h3>
	<p>Cr&eacute;&eacute; un lien sur le contenu seul d&#039;une page.</p>
	<h3>Comment l&#039;utiliser ?</h3>
	<p>Ins&eacute;rer la balise dans votre page ou votre gabarit : <code>{oldprint}</code><br /></p>
        <h3>Quels param&egrave;tres ?</h3>
        <ul>
                <li><em>(option)</em> goback - D&eacute;fini &agrave; &quot;true&quot; pour montrer un lien &quot;Go Back&quot; sur la page &agrave; imprimer.</li>
                <li><em>(option)</em> popup - D&eacute;fini &agrave; &quot;true&quot;, la page &agrave; imprimer sera ouverte dans une nouvelle fen&ecirc;tre.</li>
                <li><em>(option)</em> script - D&eacute;fini &agrave; &quot;true&quot;, le javascript sera utilis&eacute; pour mener l&#039;impression de la page.</li>
                <li><em>(option</em> showbutton - D&eacute;fini &agrave; &quot;true&quot;, on verra une ic&ocirc;ne d&#039;imprimante au lieu d&#039;un lien en texte.</li>
                <li><em>(option)</em> class - classe CSS pour le lien, par d&eacute;faut &agrave;  &quot;noprint&quot;.</li>
                <li><em>(option)</em> text - Texte &agrave; utiliser &agrave; la place de &quot;Print This Page&quot; pour le lien d&#039;impression.
                <li><em>(option)</em> title - Texte pour l&#039;attribut Title. Si vide, montre le param&egrave;tre text.</li>
                <li><em>(option)</em> more - Place des options suppl&eacute;mentaires dans le lien < a >.</li>
                <li><em>(option)</em> src_img - Montre cette image. L&#039;image par d&eacute;faut est images/cms/printbutton.gif.</li>
                <li><em>(option)</em> class_img - Classe de la balise < img > si showbutton est d&eacute;fini.

                    <p>Exemple :</p>
                     <pre>{oldprint text=&quot;Printable Page&quot;}</pre>      
                     </li>
        </ul>';
$lang['admin']['login_info_title'] = 'Information&nbsp;';
$lang['admin']['login_info'] = 'Afin que la console Administration fonctionne correctement&nbsp;';
$lang['admin']['login_info_params'] = '<ol> 
  <li>Les cookies doivent &ecirc;tre activ&eacute;s dans votre navigateur</li> 
  <li>Javascript doit &ecirc;tre activ&eacute; dans votre navigateur</li> 
  <li>Des fen&ecirc;tres pop-up doivent &ecirc;tre autoris&eacute;es &agrave; l&#039;adresse suivante&nbsp;:</li> 
</ol>';
$lang['admin']['help_function_news'] = '	<h3>Que fait cette Balise ?</h3>
	<p>C&#039;est simplement une balise pour le module de news afin de rendre la syntaxe de balise plus ais&eacute;e. 
	Au lieu de devoir utiliser <code>{cms_module module=&#039;News&#039;}</code>, vous pouvez ins&eacute;rer le module dans les pages et gabarits en utilisant <code>{news}</code>.
	</p>
	<h3>Comment l&#039;utiliser ?</h3>
	<p>Ins&eacute;rer la balise dans votre page ou votre gabarit : <code>{news}</code>. Pour de l&#039;aide &agrave; propos du module de news/articles, les param&egrave;tres etc..., merci de se r&eacute;f&eacute;rer &agrave; l&#039;aide du module news.</p>';
$lang['admin']['help_function_modified_date'] = '        <h3>Que fait cette Balise ?</h3>
        <p>Montre la date et l&#039;heure de la derni&egrave;re modification de la page. Si aucun format n&#039;est d&eacute;fini, l&#039;affichage par d&eacute;faut sera du type &#039;Jan 01, 2004&#039;.</p>
        <h3>Comment l&#039;utiliser ?</h3>
        <p>Ins&eacute;rer la balise dans votre page ou votre gabarit : <code>{modified_date format=&quot;%A %d-%b-%y %T %Z&quot;}</code></p>
        <h3>Quels param&egrave;tres ?</h3>
        <ul>
<li><em>(option)</em> format - le format de Date/Heure utilisant les param&egrave;tres de la fonction php strftime.  Voir <a href="http://php.net/strftime" target="_blank">ici</a> pour une liste des param&egrave;tres et plus d&#039;information.</li>
        </ul>';
$lang['admin']['help_function_metadata'] = '	<h3>Que fait cette Balise ?</h3>
	<p>Affiche les metadata pour cette page. Les metadata de la page de param&egrave;tres globaux et ceux sp&eacute;cifiques &agrave; la page seront affich&eacute;s.</p>
	<h3>Comment l&#039;utiliser ?</h3>
	<p>Ins&eacute;rer la balise dans votre page ou votre gabarit : <code>{metadata}</code></p>
	<h3>Quels param&egrave;tres ?</h3>
	<ul>
		<li><em>(option)</em> showbase (true/false) - Si d&eacute;fini &agrave; false, la balise de base ne sera pas envoy&eacute;e au navigateur. D&eacute;fini par d&eacute;faut &agrave; true si use_hierarchy est d&eacute;finie &agrave; true dans config.php.</li>
	</ul>';
$lang['admin']['help_function_menu_text'] = '	<h3>Que fait cette Balise ?</h3>
	<p>Imprime le texte du menu de la page.</p>
	<h3>Comment l&#039;utiliser ?</h3>
	<p>Ins&eacute;rer la balise dans votre page ou votre gabarit : <code>{menu_text}</code></p>
	<h3>Quels param&egrave;tres ?</h3>
	<p>Aucun pour le moment.</p>';
$lang['admin']['help_function_menu'] = '	<h3>Que fait cette Balise ?</h3>
	<p>C&#039;est une balise pour le module Menu Manager pour simplifier la syntaxe. 
	Au lieu d&#039;utiliser la balise <code>{cms_module module=&#039;MenuManager&#039;}</code> vous pouvez utiliser <code>{menu}</code> pour ins&eacute;rer le module dans des pages et gabarits.
	</p>
	<h3>Comment l&#039;utiliser ?</h3>
	<p>Ins&eacute;rer la balise dans votre page ou votre gabarit : <code>{menu}</code>. Pour de l&#039;aide &agrave; propos du module Menu Manager, les param&egrave;tres etc..., merci de se r&eacute;f&eacute;rer &agrave; l&#039;aide sur le module Menu Manager.</p>';
$lang['admin']['help_function_last_modified_by'] = '        <h3>Que fait cette Balise ?</h3>
        <p>Montre la derni&egrave;re personne qui a modifi&eacute; la page. Si aucun format n&#039;est sp&eacute;cifi&eacute;, l&#039;ID du nombre de l&#039;utilisateur sera affich&eacute; par d&eacute;faut.</p>
        <h3>Comment l&#039;utiliser ?</h3>
        <p>Ins&eacute;rer la balise dans votre page ou votre gabarit : <code>{last_modified_by format=&quot;fullname&quot;}</code></p>
        <h3>Quels param&egrave;tres ?</h3>
        <ul>
                <li><em>(option)</em> format - id, username, fullname</li>
        </ul>';
$lang['admin']['help_function_image'] = '  <h3>Que fait cette Balise ?</h3>
  <p>Cr&eacute;e une balise image pour une image stock&eacute;e dans votre dossier /uploads/images</p>
  <h3>Comment l&#039;utiliser ?</h3>
  <p>Ins&eacute;rer la balise dans votre page ou votre gabarit :  <code>{image src=&quot;mon_image.jpg&quot;}</code></p>
  <h3>Quels param&egrave;tres ?</h3>
  <ul>
     <li><em>(requis)</em>  <tt>src</tt> - fichier image dans votre r&eacute;pertoire d&#039;images.</li>
     <li><em>(option)</em>  <tt>width</tt> - Largeur de l&#039;image dans la page. La valeur par d&eacute;faut est la taille r&eacute;elle.</li>
     <li><em>(option)</em>  <tt>height</tt> - Hauteur de l&#039;image dans la page. La valeur par d&eacute;faut est la taille r&eacute;elle.</li>
     <li><em>(option)</em>  <tt>alt</tt> - texte &quot;alt &quot;de l&#039;image - n&eacute;cessaire pour une meilleure compatibilit&eacute; xhtml. La valeur par d&eacute;faut est le nom de fichier.</li>
     <li><em>(option)</em>  <tt>class</tt> - La classe CSSde l&#039;image.</li>
     <li><em>(option)</em>  <tt>title</tt> - Infobulle au passage la souris sur le texte de l&#039;image. La valeur par d&eacute;faut est le texte &quot;alt &quot;de l&#039;image.</li>
     <li><em>(option)</em>  <tt>addtext</tt> - Le texte suppl&eacute;mentaire &agrave; mettre dans la balise.</li>
  </ul>';
$lang['admin']['help_function_imagegallery'] = '	<h3>Que fait cette Balise ?</h3>
	<p>Cr&eacute;e une galerie &agrave; partir d&#039;un dossier d&#039;images (.gif, .jpg ou .png). 
	Vous pouvez cliquer sur une miniature pour voir l&#039;image en grand. Elle peut utiliser des prises bas&eacute;es sur le nom de l&#039;image, sans l&#039;extension de fichier. Elle respecte les standards du web et utilise le CSS pour la mise en forme. Il y a des classes 
	pour les divers &eacute;l&eacute;ments et pour le &#039;div&#039; englobant. Regardez les CSS ci-dessous pour plus d&#039;information.</p>

	<h3>Comment l&#039;utiliser ?</h3>
	<p>Ins&eacute;rer la balise dans votre page ou votre gabarit : </p>
	<code>{ImageGallery picFolder=&quot;uploads/images/yourfolder/&quot;}</code>
	<p>O&ugrave; picFolder est le dossier dans lequel sont stock&eacute;es vos images.</p>
	
    <h3>Quels param&egrave;tres ?</h3>
    <p>Elle peut utiliser bon nombre de param&egrave;tres, mais l&#039;exemple ci-dessous est probablement suffisant pour la plupart des gens :) </p>
        <ol>
		<li><strong>picFolder par exemple picFolder=&quot;uploads/images/yourfolder/&quot;</strong><br/>
		Est le chemin vers la galerie (votre dossier) finissant par &#039;/&#039;. Vous pouvez ainsi avoir beaucoup de dossiers et de galeries.</li>

		<li><strong>type par exemple type=&quot;click&quot; or type=&quot;popup&quot;</strong><br/>
		Pour que la fonction &quot;popup&quot; marche, vous devez inclure le javascript popup dans la t&ecirc;te de votre gabarit &quot;head /head&quot;. Le javascript est au bas de la page ! <em>La valeur par d&eacute;faut est &#039;click&#039;.</em></li>

		<li><strong>divID par exemple divID =&quot;imagegallery&quot;</strong><br/>
		Mettre la balise englobante &#039;div id&#039; autour de votre galerie afin d&#039;avoir diff&eacute;rents CSS pour chaque galerie.<em>Par d&eacute;faut &agrave; &#039;imagegallery&#039;.</em></li>

		<li><strong>sortBy par exemple sortBy = &quot;name&quot; ou sortBy = &quot;date&quot;</strong><br/>
		Trie les images par &#039;name&#039; OU &#039;date&#039;. <em>Pas de valeur par d&eacute;faut.</em></li>

		<li><strong>sortByOrder par exemple sortByOrder = &quot;asc&quot; ou sortByOrder = &quot;desc&quot;</strong><br/> 
		 <em>Pas de valeur par d&eacute;faut.</em>.</li>

		<li>Cela place la l&eacute;gende au-dessus de la grande (cliqu&eacute;) image<br/>
		<strong>bigPicCaption = &quot;name&quot; </strong>(nom du fichier sans l&#039;extension)<em> ou </em><br/>
		<strong>bigPicCaption = &quot;file&quot; </strong>(nom du fichier avec l&#039;extension)<em> ou </em><br/>
		<strong>bigPicCaption = &quot;number&quot; </strong>(une s&eacute;quence de nombres)<em> ou </em><br/>
		<strong>bigPicCaption = &quot;none&quot; </strong>(Pas de l&eacute;gende)<br/>
		<em>Par d&eacute;faut &agrave; &quot;name&quot;. </em></li>

		<li>Cela place la l&eacute;gende en-dessous de la petite miniature<br/>
		<strong>thumbPicCaption = &quot;name&quot;</strong> (nom du fichier sans l&#039;extension)<em> ou </em><br/>
		<strong>thumbPicCaption = &quot;file&quot;</strong> (nom du fichier avec l&#039;extension)<em> ou </em><br/>
		<strong>thumbPicCaption = &quot;number&quot; </strong>(une s&eacute;quence de nombres)<em> ou </em><br/>
		<strong>thumbPicCaption = &quot;none&quot; </strong>(Pas de l&eacute;gende)<br/>
		<em>Par d&eacute;faut &agrave; &quot;name&quot;.</em></li>

		<li>D&eacute;fini la balise &#039;alt&#039; pour la grande image - obligatoire.<br/>
		<strong>bigPicAltTag = &quot;name&quot; </strong>(nom du fichier sans l&#039;extension)<em> ou </em><br/>
		<strong>bigPicAltTag = &quot;file&quot; </strong>(nom du fichier avec l&#039;extension)<em> ou </em><br/>
		<strong>bigPicAltTag = &quot;number&quot; </strong>(une s&eacute;quence de nombres)<br/>
		<em>Par d&eacute;faut &agrave; &quot;name&quot;.</em></li>

		<li> D&eacute;fini la balise &#039;title&#039; pour la grande image. <br/>
		<strong>bigPicTitleTag = &quot;name&quot; </strong>(nom du fichier sans l&#039;extension)<em> ou </em><br/>
		<strong>bigPicTitleTag = &quot;file&quot; </strong>(nom du fichier avec l&#039;extension)<em> ou </em><br/>
		<strong>bigPicTitleTag = &quot;number&quot; </strong>(une s&eacute;quence de nombres)<em> ou </em><br/>
		<strong>bigPicTitleTag = &quot;none&quot; </strong>(Pas de titre)<br/>
		<em>Par d&eacute;faut &agrave; &quot;name&quot;.</em></li>

		<li><strong>thumbPicAltTag</strong><br/>
		<em>Comme bigPicAltTag, mais pour les images miniatures.</em></li>

		<li><strong>thumbPicTitleTag *</strong><br/>
		<em>Comme bigPicTitleTag mais pour les petites miniatures.<br/>
		<strong>*Sauf si apr&egrave;s les options, vous avez  &#039;... click for a bigger image&#039; 
		ou si vous ne d&eacute;finissez pas cette option, vous aurez la valeur par d&eacute;faut de  
		&#039;Click for a bigger image...&#039;</strong></em></li>
        </ol>
  <p>Un exemple plus complexe</p>
        <p>&#039;div id&#039; est &#039;cdcovers&#039;, pas de l&eacute;gende sur les grandes images, les miniatures ont la valeur par d&eacute;faut. 
        Les balises &#039;alt&#039; pour la grande image sont d&eacute;finies au nom de l&#039;image sans l&#039;extension et la balise &#039;title&#039; de de la grande image est d&eacute;fini de fa&ccedil;on identique mais avec l&#039;extension.
        Les miniatures ont les valeurs par d&eacute;faut pour les balises &#039;alt&#039; et &#039;title&#039;. La valeur par d&eacute;faut &eacute;tant le nom du fichier de l&#039;image sans l&#039;extension pour &#039;alt&#039; et &#039;Click for a bigger image...&#039; pour le &#039;title&#039;, serait :</p>
		<code>{ImageGallery picFolder=&quot;uploads/images/cdcovers/&quot; divID=&quot;cdcovers&quot; bigPicCaption=&quot;none&quot;  bigPicAltTag=&quot;name&quot; bigPicTitleTag=&quot;file&quot;}</code>
        <br/>
		<p>Il y a beaucoup d&#039;options mais je voulais le garder tr&egrave;s souple et vous n&#039;avez pas &agrave; les d&eacute;finir, les valeurs par d&eacute;faut sont raisonnables.</p>
		
  <br/>
	<h4>Exemple de CSS</h4>
<pre>
	/* Image Gallery - Small Thumbnail Images */
	.thumb {
		margin: 1em 1em 1.6em 0; /* Space between images */
		padding: 0;
		float: left;
		text-decoration: none;
		line-height: normal;
		text-align: left;
	}

	.thumb img, .thumb a img, .thumb a:link img{ /* Set link formatting*/
		width: 100px; /* Image width*/
		height: 100px; /* Image height*/
		display: inline;
		padding: 12px; /* Image padding to form photo frame */
		/* You can set the above to 0px = no frame - but no hover indication! Adjust other widths ot text!*/
		margin: 0;
		background-color: white; /*Background of photo */ 
		border-top: 1px solid #eee; /* Borders of photo frame */
		border-right: 2px solid #ccc;
		border-bottom: 2px solid #ccc;
		border-left: 1px solid #eee;
		text-decoration: none;
	}

	.thumb a:visited img {
		background-color: #eee; /*Background of photo on hover - sort of a light grey */
	}

	.thumb a:hover img {
		background-color: #dae6e4; /*Background of photo on hover - sort of light blue/green */
	}

	.thumbPicCaption {
		text-align: center;
		font-size: smaller;
		margin: 0 1px 0 0;
		padding: 0;
		width: 124px; /* Image width plus 2 x padding for image (photo frame) - to center text on image */
		/* display: none;  if you do not want to display this text */
	}

	/* Image Gallery - Big Images */
	.bigPic {
		margin: 10px 0 5px 0;
		padding: 0;
		line-height: normal;
	}

	.bigPicCaption { /*Big Image Name - above image above .bigpicImageFileName (Without extension) */
		text-align: center;
		font-weight: bold;
		font-variant: small-caps;
		font-weight: bold;
		margin: 0 1px 0 0;
		padding: 0;
		width: 386px; /* Image width plus 2 x padding for image (photo frame) - to center text on image */
		/* display: none;  if you do not want to display this text */
	}

	.bigPic img{ /* Big Image settings */
		width: 350px; /* Width of Big Image */
			height: auto;
		display: inline;
		padding: 18px; /* Image padding to form photo frame. */
		/* You can set the above to 0px = no frame - but no hover indication! Adjust other widths ot text!*/
		margin: 0;
		background-color: white; /* Background of photo */ 
		border-top: 1px solid #eee; /* Borders of photo frame */
		border-right: 2px solid #ccc; 
		border-bottom: 2px solid #ccc;
		border-left: 1px solid #eee;
		text-decoration: none; 
		text-align: left;
	}

	.bigPicNav { /* Big Image information: &#039;Image 1 of 4&#039; and gallery navigation */
		margin: 0;
		width: 386px; /* Image width plus 2 x padding for image (photo frame) - to center text on image */
		padding: 0;
		color: #000;
		font-size: smaller;
		line-height: normal;
		text-align: center;
		/* display: none;  if you do not want to display this text. Why? You Lose Navigation! */
	}

</pre>
<br/>

	<h4>La popup en javascript est maintenant inclue dans le code du plugin et sera g&eacute;n&eacute;r&eacute;e automatiquement ; si vous avez encore le javascript dans votre gabarit, vous pouvez l&#039;enlever.</h4>';
$lang['admin']['help_function_html_blob'] = '	<h3>Que fait cette Balise ?</h3>
	<p>Voir l&#039;aide sur global_content pour la description.</p>';
$lang['admin']['help_function_googlepr'] = '	<h3>Que fait cette Balise ?</h3>
	<p>Affiche le nombre qui repr&eacute;sente votre Google pagerank.</p>
	<h3>Comment l&#039;utiliser ?</h3>
	<p>Ins&eacute;rer la balise dans votre page ou votre gabarit : <code>{googlepr}</code></p>

	<h3>Quels param&egrave;tres ?</h3>
	<ul>
		<li><em>(option)</em> domain - Le site web pour affichage du pagerank.</li>
	</ul>
	';
$lang['admin']['help_function_google_search'] = '	<h3>Que fait cette Balise ?</h3>
	<p>Recherche dans votre site Web &agrave; l&#039;aide du moteur de recherche Google.</p>
	<h3>Comment l&#039;utiliser ?</h3>
	<p>Ins&eacute;rer la balise dans votre page ou votre gabarit : <code>{google_search}</code></p>
	<p>Note : Google a besoin d&#039;avoir votre site web index&eacute; pour que cela fonctionne. Vous pouvez soumettre votre site &agrave; Google <a href="http://www.google.com/addurl.html">ici</a>.</p>
	<h3>Que faire si je veux changer l&#039;apparence de la zone de texte ou un bouton ?</h3>
	<p>Le look de la zone de texte et le bouton peut &ecirc;tre modifi&eacute; via les CSS. La  textbox est un id de TextSearch et le bouton est un id de buttonSearch.</p>

	<h3>Quels param&egrave;tres ?</h3>
	<ul>
		<li><em>(option)</em> domain - Cela indique &agrave; Google le domaine du site Web pour la recherche. Ce script essaie de d&eacute;terminer automatiquement cela.</li>
		<li><em>(option)</em> buttonText - Le texte que vous souhaitez afficher sur le bouton de recherche. La valeur par d&eacute;faut est &quot;Search Site&quot;.</li>
	</ul>
	';
$lang['admin']['help_function_global_content'] = '	<h3>Que fait cette Balise ?</h3>
	<p>Ins&egrave;re un bloc de contenu (global_content) dans votre gabarit ou  page.</p>
	<h3>Comment l&#039;utiliser ?</h3>
	<p>Ins&eacute;rer la balise dans votre page ou votre gabarit : <code>{global_content name=&#039;myblob&#039;}</code>, o&ugrave; name est le nom du bloc de contenu que vous avez cr&eacute;er.</p>
	<h3>Quels param&egrave;tres ?</h3>
	<ul>
  	  <li>name - Le nom du bloc de contenu &agrave; afficher.</li>
          <li><em>(option)</em> assign - Le nom d&#039;une variable smarty auqel le bloc de contenu global doit &ecirc;tre attribu&eacute;.</li>
	</ul>';
$lang['admin']['help_function_get_template_vars'] = '	<h3>Que fait cette Balise ?</h3>
	<p>Sauvegarde toutes les variables smarty connu dans votre page</p>
	<h3>Comment l&#039;utiliser ?</h3>
	<p>Ins&eacute;rer la balise dans votre page ou votre gabarit : <code>{get_template_vars}</code></p>
	<h3>Quels param&egrave;tres ?</h3>
	 <p>Aucun pour le moment</p>';
$lang['admin']['help_function_embed'] = '	<h3>Que fait cette Balise ?</h3>
	<p>Inclut une autre application dans votre CMS. le plus utilis&eacute; est par exemple un forum. 
	Cette application utilise IFRAMES, mais des anciens navigateurs peuvent avoir des probl&egrave;mes. D&eacute;sol&eacute; mais c&#039;est la seule mani&egrave;re de fonctionner sans l&#039;application externe.</p>
	<h3>Comment l&#039;utiliser ?</h3>
	<ul>
        <li>a) Ajouter la balise <code>{embed header=true}</code> dans la section &quot;Head&quot;  de votre gabarit de page, ou dans la section &quot;M&eacute;tadonn&eacute;es sp&eacute;cifiques pour cette page&quot; dans l&#039;onglet option de votre page.  Cela permettra de s&#039;assurer que le javascript est inclus. Si vous ins&eacute;rez cette balise dans la section des &quot;M&eacute;tadonn&eacute;es&quot; dans l&#039;onglet option de votre page, vous devez vous assurer que la balise
<code>{metadata}</code> est bien dans votre gabarit de page.</li>
        <li>b) Ajouter la balise <code>{embed url=&quot;http://www.google.com&quot;}</code> dans votre page ou dans le corps du gabarit de la page.</li>
        </ul>
        <br/>
        <h4>Exemple pour une iframe plus large</h4>
	<p>Ajouter le code suivant dans votre feuille de style CSS :</p>
        <pre>#myframe { height: 600px; }</pre>
        <br/>
        <h3>Quels param&egrave;tres ?</h3>
        <ul>
            <li><em>(requis)</em> url - l&#039;URL &agrave; inclure</li> 
            <li><em>(requis)</em> header=true - cela g&eacute;n&eacute;rera le code pour le redimensionnement de l&#039;IFRAME.</li>
            <li>(option) name - une option pour utiliser le nom de l&#039;iframe (au lieu de myframe).<p>Si cette option est utilis&eacute;e, elle doit &ecirc;tre identique dans les deux appels, ex : {embed header=true name=foo} and {embed name=foo url=http://www.google.com}.</p></li>
        </ul>';
$lang['admin']['help_function_edit'] = '	<h3>Que fait cette Balise ?</h3>
	<p>Cr&eacute;e un lien pour modifier la page</p>
	<h3>Comment l&#039;utiliser ?</h3>
	<p>Ins&eacute;rer la balise dans votre page ou votre gabarit : <code>{edit}</code><br /></p>
        <h3>Quels param&egrave;tres ?</h3>
        <ul>
                <li><em>(option)</em> showbutton - Mis &agrave; &quot;true&quot;  fera appara&icirc;tre une ic&ocirc;ne plut&ocirc;t qu&#039;un lien texte</li>
        </ul>';
$lang['admin']['help_function_description'] = '	<h3>Que fait cette Balise ?</h3>
	<p>Imprime la description (attribut title) de la page.</p>
	<h3>Comment l&#039;utiliser ?</h3>
	<p>Ins&eacute;rer la balise dans votre page ou votre gabarit : <code>{description}</code></p>
	<h3>Quels param&egrave;tres ?</h3>
	<p>Aucun pour le moment.</p>';
$lang['admin']['help_function_created_date'] = '        <h3>Que fait cette Balise ?</h3>
        <p>Affiche la date et l&#039;heure de cr&eacute;ation de la page.  Si aucun format n&#039;est d&eacute;fini l&#039;affichage par d&eacute;faut sera comme par exemple &#039;Jan 01, 2004&#039;.</p>
        <h3>Comment l&#039;utiliser ?</h3>
        <p>Ins&eacute;rer la balise dans votre page ou votre gabarit : <code>{created_date format=&quot;%A %d-%b-%y %T %Z&quot;}</code></p>
        <h3>Quels param&egrave;tres ?</h3>
        <ul>
                <li><em>(option)</em> format - Date/Time utilise le format de la fonction PHP strftime. Voir <a href="http://php.net/strftime" target="_blank">ici</a> pour un param&egrave;tre et les informations.</li>
        </ul>';
$lang['admin']['help_function_content'] = '	<h3>Que fait cette Balise ?</h3>
	<p>C&#039;est l&#039;endroit o&ugrave; le contenu de votre page sera affich&eacute;e. Elle sera ins&eacute;r&eacute;e dans le gabarit de la page pour affichage.</p>
	<h3>Comment l&#039;utiliser ?</h3>
	<p>Ins&eacute;rer la balise dans votre gabarit : <code>{content}</code>.</p>
<p><strong>La balise par d&eacute;faut <code>(content)</code> est n&eacute;cessaire pour le bon fonctionnement. (Sans les param&egrave;tres) </strong>  Pour donner &agrave; la balise un nom sp&eacute;cifique, utiliser l&#039;&eacute;tiquette label (exemple {content label=&quot;Mon_Contenu &quot;}). Des blocs de contenus suppl&eacute;mentaires peuvent &ecirc;tre ajout&eacute;es en utilisant les param&egrave;tres ci-dessous. </p>
	<h3>Quels param&egrave;tres ?</h3>
	<ul>
		<li><em>(option)</em> block - Vous permet d&#039;avoir plus d&#039;un bloc de contenu par page. Lorsque plusieurs balises &quot;content&quot; sont mises dans un gabarit,  le nombre de zones d&#039;&eacute;dition sera affich&eacute; lorsque la page sera &eacute;dit&eacute;e.
<p>Exemple :</p>
<pre>{content block=&quot;second_content_block&quot; label=&quot;Second Content Block&quot;}</pre>
<p>Maintenant, lorsque vous editez une page, il y aura un texte intitul&eacute; &quot;Second Content Block&quot;.</p></li>
		<li><em>(option)</em> wysiwyg (true/false) - Si mis &agrave; false, puis un &eacute;diteur wysiwyg ne sera jamais utilis&eacute; lors de l&#039;&eacute;dition de ce bloc. Si cela est vrai, alors agit comme d&#039;habitude. Ne fonctionne que lorsque le param&egrave;tre &quot;block&quot; est utilis&eacute;.</li>
		<li><em>(option)</em> oneline (true/false) - Si true, alors une seule ligne d&#039;&eacute;dition sera montr&eacute;e lors de l&#039;&eacute;dition de ce bloc. Si false, alors agit comme d&#039;habitude. Ne fonctionne que lorsque le param&egrave;tre &quot;block&quot; est utilis&eacute;.</li>
<li><em>(option)</em> size - Applicable uniquement lorsque l&#039;option &quot;oneline&quot; est utilis&eacute;e, ce param&egrave;tre optionnel vous permet de sp&eacute;cifier la taille de la zone. La valeur par d&eacute;faut est de 50.</li>
<li><em>(option)</em> default - Vous permet de pr&eacute;ciser le contenu par d&eacute;faut pour le contenu des blocs (content blocks  additionels seulement).</li>
<li><em>(option)</em>label - Permet de sp&eacute;cifier un label pour afficher dans la page d&#039;&eacute;dition de contenu.</li>
		<li><em>(option)</em> assign - Attribue le contenu &agrave; un param&egrave;tre smarty que vous pouvez ensuite utiliser dans d&#039;autres zones de la page, ou pour tester si le contenu existe ou non.
<p>Exemple de passage d&#039;une page de contenu des balises (tags) d&eacute;finies par l&#039;utilisateur comme un param&egrave;tre :</p>
 
<pre>
         {content assign=pagecontent}
         {table_of_contents thepagecontent=&quot;$pagecontent&quot;}
</pre>
</li>
	</ul>';
$lang['admin']['help_function_contact_form'] = '    <h2>ATTENTION ce plugin est obsol&egrave;te</h2>
    <h3>Cette balise est obsol&egrave;te et supprim&eacute;e depuis la version CMS made simple 1.5. </h3>';
$lang['admin']['help_function_cms_versionname'] = '	<h3>Que fait cette Balise ?</h3>
	<p>Cette balise est utilis&eacute;e pour ins&eacute;rer le nom de la version courante de CMS dans votre page ou votre gabarit.  Il n&#039;affiche rien d&#039;autre que le nom de version.</p>
	<h3>Comment l&#039;utiliser ?</h3>
	<p>C&#039;est une balise basique. Ins&eacute;rer la balise dans votre page ou votre gabarit : <code>{cms_versionname}</code></p>
	<h3>Quels param&egrave;tres ?</h3>
	<p>Il n&#039;y a besoin d&#039;aucun param&egrave;tre.</p>';
$lang['admin']['help_function_cms_version'] = '	<h3>Que fait cette Balise ?</h3>
	<p>Cette balise est utilis&eacute; pour ins&eacute;rer le num&eacute;ro de la version courante de CMS dans votre page ou votre gabarit. Il n&#039;affiche rien d&#039;autre que le num&eacute;ro de version.</p>
	<h3>Comment l&#039;utiliser ?</h3>
	<p>C&#039;est une balise basique.  Ins&eacute;rer la balise dans votre page ou votre gabarit : <code>{cms_version}</code></p>
	<h3>Quels param&egrave;tres ?</h3>
	<p>Il n&#039;y a besoin d&#039;aucun param&egrave;tre.</p>';
$lang['admin']['about_function_cms_selflink'] = '		<p>Author: Ted Kulp <tedkulp@users.sf.net></p>
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
		1.46 - Fixes a problem with too many queries when using the dir=start option.<br/>
		1.45 - Added a new option for &quot;dir&quot;, &quot;up&quot;, for links to the parent page e.g. dir=&quot;up&quot; (Hans Mogren).<br />
		1.44 - Added new parameters &quot;ext&quot; and &quot;ext_info&quot; to allow external links with class=&quot;external&quot; and info text after the link, ugly hack but works thinking about rewriting this(Tatu Wikman)<br />
		1.43 - Added new parameters &quot;image&quot; and &quot;imageonly&quot; to allow attachment of images to be used for page links, either instead of or in addition to text links. (Marcus Bointon)<br />
		1.42 - Added new parameter &quot;anchorlink&quot; and a new option for &quot;dir&quot; namely, &quot;anchor&quot;, for internal page links. e.g. dir=&quot;anchor&quot; anchorlink=&quot;internal_link&quot;. (Russ)<br />
		1.41 - added new parameter &quot;href&quot; (LeisureLarry)<br />
		1.4 - fixed bug next/prev linking to non-content pages. (Thanks Teemu Koistinen for this fix)<br />
		1.3 - added option &quot;more&quot;<br />
		1.2 - by Martin B. Vestergaard
		<ul>
		<li>changed default text to Page Name (was Page Alias)</li>
		<li>added option dir=next/prev to display next or previous item in the hirachy - thanks to 100rk</li>
		<li>added option class to add a class= statement to the a-tag.</li>
		<li>added option menu to display menu-text in sted of Page Name</li>
		<li>added option lang to display link-labels in different languages</li>
		</ul>
		1.1 - Changed to new content system<br />
		1.0 - Initial release
		</p>';
$lang['admin']['help_function_cms_selflink'] = '		<h3>Que fait cette Balise ?</h3>
		<p>Cr&eacute;e un lien vers une autre page de contenu de CMSMS l&#039;int&eacute;rieur de votre gabarit ou de votre contenu. Peut aussi &ecirc;tre utilis&eacute; pour les liens externes avec le param&egrave;tre &quot;ext&quot;.</p>
		<h3>Comment l&#039;utiliser ?</h3>
		<p>Ins&eacute;rer la balise dans votre page ou votre gabarit : <code>{cms_selflink page=&quot;1&quot;}</code> or  <code>{cms_selflink page=&quot;alias&quot;}</code></p>
		<h3>Quels param&egrave;tres ?</h3>
		
		<ul>
		<li><em>(option)</em> <tt>page</tt> - ID ou alias de la page du lien.</li>
		<li><em>(option)</em> <tt>dir anchor (liens internes)</tt> - Nouvelle option pour une page de lien interne. Si vous utilisez cette balise <tt>anchorlink</ tt> doit &ecirc;tre utiliser pour votre lien. </li> <!-- Russ - 25-04-2006 -->
		<li><em>(option)</em> <tt>anchorlink</tt> - Nouveau param&egrave;tre pour une page de lien interne. Si utilis&eacute; alors <tt>dir = &quot;anchor&quot;</tt> doit aussi &ecirc;tre d&eacute;fini. Pas besoin d&#039;ajouter le #, car il sera ajout&eacute; automatiquement.</li> <!-- Russ - 25-04-2006 -->
		<li><em>(option)</em> <tt>urlparam</tt> - Sp&eacute;cifie des param&egrave;tres avec l&#039;URL. <strong>Ne pas utiliser ce param&egrave;tre  avec <em>&quot;anchorlink&quot;</em>
</strong></li>
		<li><em>(option)</em> <tt>tabindex =&quot;a value&quot;</tt> - D&eacute;fini un tabindex pour le lien.</li> <!-- Russ - 22-06-2005 -->
		<li><em>(option)</em> <tt>dir start/next/prev/up (previous)</tt> - Lien vers la page de d&eacute;marrage par d&eacute;faut ou la page suivante ou pr&eacute;c&eacute;dente, ou la page parent (up). Liens vers la page de d&eacute;marrage par d&eacute;faut ou la page suivante ou pr&eacute;c&eacute;dente, ou la page parent (up). Si utilis&eacute; <tt>page</tt> ne doit pas &ecirc;tre donn&eacute;.
<strong>Note :</strong> Seulement une des options peut &ecirc;tre utilis&eacute;e de la m&ecirc;me d&eacute;claration &quot;cms_selflink&quot; !</li>
		<li><em>(option)</em> <tt>text</tt> - Texte &agrave; afficher pour le lien. S&#039;il n&#039;est pas fourni, le nom de la page est utilis&eacute; &agrave; la place.</li>
		<li><em>(option)</em> <tt>menu 1/0</tt> - Si 1, le texte du menu est utilis&eacute; pour le texte du lien au lieu du Nom de la page.</li> <!-- mbv - 21-06-2005 -->
		<li><em>(option)</em> <tt>target</tt> - Option pour la cible d&#039;un lien vers. Utiliser pour une frame et du javascript.</li>
		<li><em>(option)</em> <tt>class</tt> - Classe CSS pour le lien < a > lien < /a >. Utile pour le style du lien.</li> <!-- mbv - 21-06-2005 -->
		<li><em>(option)</em> <tt>lang</tt> - Affiche le label du lien  (&quot;Next Page&quot;/&quot;Previous Page&quot;) dans les diff&eacute;rentes langues (0 aucun label.) Danish (dk), English (en) ou Fran&ccedil;ais (fr), actuellement.</li> <!-- mbv - 21-06-2005 -->
		<li><em>(option)</em> <tt>id</tt> - Option css_id pour le lien < a > llien < /a >.</li> <!-- mbv - 29-06-2005 -->
		<li><em>(option)</em> <tt>more</tt> - ajoute des options suppl&eacute;mentaires dans le lien < a > lien < /a >.</li> <!-- mbv - 29-06-2005 -->
		<li><em>(option)</em> <tt>label</tt> - Label pour l&#039;utilisation dans le lien, si applicable.</li>
		<li><em>(option)</em> <tt>label_side left/right</tt> - Position du label dans le de lien (par d&eacute;faut &agrave; &quot;gauche&quot;).</li>
		<li><em>(option)</em> <tt>title</tt> - Texte &agrave; utiliser dans l&#039;attribut title. Si non donn&eacute;, alors le titre de la page sera utilis&eacute;e pour l&#039;attribut title.</li>
		<li><em>(option)</em> <tt>rellink 1/0</tt> - Faire un lien relationnel accessible pour la navigation. Ne fonctionne que si le param&egrave;tre &quot;dir&quot; est donn&eacute; et ne doit aller dans la section &quot;Head&quot; du gabarit.</li>
		<li><em>(option)</em> <tt>href</tt> - Si href est utilis&eacute; seulle la valeur href est g&eacute;n&eacute;r&eacute; (pas d&#039;autres param&egrave;tres possibles). <strong>Exemple :</strong> < a href = &quot;(cms_selflink href =&quot; alias &quot;)&quot;> < img src = &quot;xx&quot; > < /a></li>
		<li><em>(option)</em> <tt>image</tt> - Une url de l&#039;image &agrave; utiliser dans le lien. <strong>Exemple :</strong> (cms_selflink dir = &quot;next&quot; image = &quot;next.png&quot; text = &quot;Next&quot;).</li>
		<li><em>(option)</em> <tt>alt</tt> - Variante pour &ecirc;tre utilis&eacute;s avec l&#039;image (alt = &quot;&quot; sera utilis&eacute;e si aucun param&egrave;tre n&#039;est donn&eacute; alt).</li>
		<li><em>(option)</em> <tt>imageonly</tt> - Si vous utilisez une image, cela supprime l&#039;affichage de lien texte. Si vous voulez pas de texte dans tous les liens, mettre lang = 0 pour supprimer le label. <strong>Exemple :</strong> (cms_selflink dir = &quot;next&quot; image = &quot;next.png&quot; text = &quot;Next&quot; imageonly = 1)</li>
		<li><em>(option)</em> <tt>ext</tt> - Pour les liens externes, ajoutera class = &quot;external and info text&quot;. <strong>Attention :</strong> Seul le texte, la cible et le titre sont compatibles avec ce param&egrave;tre</li>
		<li><em>(option)</em> <tt>ext_info</tt> - Utilis&eacute; avec le param&egrave;tre &quot;ext&quot; par d&eacute;faut (lien externe).</li>
                         <li><em>(option)</em> <tt>assign</tt> - Attribuer les r&eacute;sultats &agrave; la variable smarty.</li>
		</ul>
		';
$lang['admin']['about_function_cms_module'] = '	<p>Author: Ted Kulp<tedkulp@users.sf.net></p>
	<p>Version : 1.0</p>
	<p>
	Historique :<br/>
	Aucun
	</p>';
$lang['admin']['help_function_cms_module'] = '	<h3>Que fait cette Balise ?</h3>
	<p>Cette balise sert &agrave; ins&eacute;rer des modules dans vos pages ou vos gabarits. Si un module est cr&eacute;&eacute; pour &ecirc;tre utilis&eacute; comme une balise plugin (V&eacute;rifier les d&eacute;tails dans l&#039;aide), vous avez la possibilit&eacute; de l&#039;ins&eacute;rer &agrave; l&#039;aide de cette balise.</p>
	<h3>Comment l&#039;utiliser ?</h3>
	<p>C&#039;est une balise basique. Ins&eacute;rer la balise dans votre page ou votre gabarit : <code>{cms_module module=&quot;somemodulename&quot;}</code></p>
	<h3>Quels param&egrave;tres ?</h3>
	<p>Un seul param&egrave;tre est requis. tous les autres param&egrave;tres sont transmis par le module.</p>
	<ul>
		<li>module - Nom du module &agrave; ins&eacute;rer. Non sensible &agrave; la casse.</li>
	</ul>
	';
$lang['admin']['about_function_breadcrumbs'] = '<p>Author: Marcus Deglos <<a href="mailto:md@zioncore.com">md@zioncore.com</a>></p>
<p>Version: 1.7</p>
<p>
Change History:<br/>
1.1 - Modified to use new content rewrite (wishy)<br />
1.2 - Added parameters: delimiter, initial, and root (arl)<br />
1.3 - Added parameter: classid (tdh / perl4ever)<br />
1.4 - Added parameter currentclassid and fixed some bugs (arl)<br />
1.5 - Modified to use new hierarchy manager<br />
1.6 - Modified to skip any parents that are marked to be &quot;not shown in menu&quot; except for root<br />
1.7 - Added root_url parameter (elijahlofgren)<br />
</p>';
$lang['admin']['help_function_breadcrumbs'] = '<h3>Que fait cette Balise ?</h3>
<p>Affiche un fil d&#039;ariane.</p>
<h3>Comment l&#039;utiliser ?</h3>
<p>Ins&eacute;rer la balise dans votre page ou votre gabarit : <code>{breadcrumbs}</code></p>
<h3>Quels param&egrave;tres ?</h3>

<ul>
<li><em>(option)</em> <tt>delimiter</tt> - Texte pour s&eacute;parer les entr&eacute;es de la liste (par d&eacute;faut &quot;>>&quot;).</li>
<li><em>(option)</em> <tt>initial</tt> - 1/0 Si d&eacute;fini &agrave; 1 le petit poucet d&eacute;bute avec un d&eacute;limiteur (par d&eacute;faut 0).</li>
<li><em>(option)</em> <tt>root</tt> - Alias de page d&#039;une page que vous voulez toujours voir appara&icirc;tre comme la premi&egrave;re page dans la liste. Peut &ecirc;tre utilis&eacute; pour faire appara&icirc;tre une page (par exemple la 1&egrave;re page) comme la racine de tout, m&ecirc;me si ce n&#039;est pas le cas.</li>
<li><em>(option)</em> <tt>root_url</tt> - Outrepasse l&#039;URL de la page racine. Utile pour faire des liens &#039;/&#039; au lieu de &#039;/home/&#039;. Ceci requiert que la page racine soit d&eacute;finie comme la page par d&eacute;faut.</li>
<li><em>(option)</em> <tt>classid</tt> - La classe CSS pour les noms de pages autres que celle en cours, c&#039;est-&agrave;-dire les pages n-1 dans la liste. Si le nom est un lien, il est ajout&eacute; &agrave; la balise < a href >, sinon &agrave; la balise < span >.</li>
<li><em>(option)</em> <tt>currentclassid</tt> - La classe CSS pour la balise < span > entourant le nom de la page en cours.</li>
<li><em>(option)</em> <tt>starttext</tt> - Texte &agrave; mettre au d&eacute;but de la liste un fil d&#039;ariane, comme &quot;Vous &ecirc;tes ici&quot;.</li>
</ul>
';
$lang['admin']['about_function_anchor'] = '	<p>Author: Ted Kulp<tedkulp@users.sf.net></p>
	<p>Version : 1.1</p>
	<p>
	Change History:<br/>
	<strong>Update to version 1.1 from 1.0</strong> <em>2006/07/19</em><br/>
	Russ added the means to insert a title, a tabindex and a class for the anchor link. Westis added accesskey and changed parameter names to not include &#039;anchorlink&#039;.<br/>
	</hr>
	</p>';
$lang['admin']['help_function_anchor'] = '	<h3>Que fait cette Balise ?</h3>
	<p>Cette balise sert &agrave; ins&eacute;rer un lien interne &agrave; une page (ancre).</p>
	<h3>Comment l&#039;utiliser ?</h3>
	<p>Ins&eacute;rer la balise dans votre page ou votre gabarit : <code>{anchor anchor=&#039;here&#039; text=&#039;Scroll Down&#039;}</code></p>
	<h3>Quels param&egrave;tres ?</h3>
	<ul>
	<li><tt>anchor</tt> - Vers o&ugrave; se dirige le lien.  La partie apr&egrave;s le #.</li>
	<li><tt>text</tt> - Le texte &agrave; afficher dans le lien.</li>
	<li><tt>class</tt> - La classe pour le lien, si elle existe</li>
	<li><tt>title</tt> - Le titre &agrave; afficher pour le lien, s&#039;il existe.</li>
	<li><tt>tabindex</tt> - Le tabindex num&eacute;rique pour le lien, s&#039;il existe.</li>
	<li><tt>accesskey</tt> - L&#039; accesskey pour le lien, s&#039;il existe.</li>
	<li><em>(option)</em> <tt>onlyhref</tt> - Affiche seulement le href et non le lien entier. Aucune autre option ne fonctionnera.</li>
	</ul>';
$lang['admin']['help_function_site_mapper'] = '<h3>Que fait cette Balise ?</h3>
  <p>C&#039;est une balise pour le module Menu Manager afin de rendre la syntaxe de balise plus ais&eacute;e, et ainsi simplifier la cr&eacute;ation d&#039;un plan de site.</p>
<h3>Comment l&#039;utiliser ?</h3>
  <p>Ins&eacute;rer la balise <code>{site_mapper}</code> dans votre page ou votre gabarit. Pour l&#039;aide sur le module &quot;Menu Manager&quot;, quels param&egrave;tres utiliser, se r&eacute;f&eacute;rer &agrave; l&#039;aide sur le module Menu Manager.</p>
  <p>Par d&eacute;faut, si aucun gabarit n&#039;est sp&eacute;cifi&eacute;, le fichier gabarit minimal_menu.tpl est utilis&eacute;.</p>
  <p>Tous les param&egrave;tres utilis&eacute;s dans la balise sont valables dans le gabarit &quot;Menu Manager&quot; comme <code>{$menuparams.paramname}</code></p>';
$lang['admin']['help_function_redirect_url'] = '<h3>Que fait cette Balise ?</h3>
  <p>Ce plugin vous permet de faire une redirection vers une URL sp&eacute;cifique. (par exemple faire une redirection vers une page, si votre site &#039;est pas encore ouvert)</p>
<h3>Comment l&#039;utiliser ?</h3>
<p>Ins&eacute;rer la balise dans votre page ou votre gabarit : <code>{redirect_url to=&#039;http://www.cmsmadesimple.org&#039;}</code></p>';
$lang['admin']['help_function_redirect_page'] = '<h3>Que fait cette Balise ?</h3>
 <p>Ce plugin vous permet de faire une redirection vers une autre page (par exemple, rediriger vers la page d&#039;identification si l&#039;utilisateur n&#039;est pas connect&eacute;).</p>
<h3>Comment l&#039;utiliser ?</h3>
<p>Ins&eacute;rer la balise dans votre page ou votre gabarit : <code>{redirect_page page=&#039;some-page-alias&#039;}</code></p>';
$lang['admin']['of'] = 'sur';
$lang['admin']['first'] = 'D&eacute;but';
$lang['admin']['last'] = 'Fin';
$lang['admin']['adminspecialgroup'] = 'Attention&nbsp;: les membres de ce groupe ont automatiquement toutes les permissions';
$lang['admin']['disablesafemodewarning'] = 'Supprimer le message d&#039;alerte Administration &quot;safe mode&quot;&nbsp;';
$lang['admin']['allowparamcheckwarnings'] = 'Autoriser la v&eacute;rification des param&egrave;tres pour cr&eacute;ation des messages d&#039;alerte&nbsp;';
$lang['admin']['date_format_string'] = 'Format de la date&nbsp;';
$lang['admin']['date_format_string_help'] = '<em>&nbsp;strftime</em> Date sous la forme d&#039;une cha&icirc;ne format&eacute;e. Ceci est bas&eacute; sur la fonction <a href="http://php.net/strftime" target="_blank">strftime</a>';
$lang['admin']['last_modified_at'] = 'Derni&egrave;re modification &agrave;&nbsp;';
$lang['admin']['last_modified_by'] = 'Derni&egrave;re modification par&nbsp;';
$lang['admin']['read'] = 'Lire';
$lang['admin']['write'] = '&Eacute;crire';
$lang['admin']['execute'] = 'Ex&eacute;cuter';
$lang['admin']['group'] = 'Groupe';
$lang['admin']['other'] = 'Autre';
$lang['admin']['event_desc_moduleupgraded'] = 'Envoy&eacute; apr&egrave;s la mise &agrave; jour d&#039;un module';
$lang['admin']['event_desc_moduleinstalled'] = 'Envoy&eacute; apr&egrave;s l&#039;installation d&#039;un module';
$lang['admin']['event_desc_moduleuninstalled'] = 'Envoy&eacute; apr&egrave;s la d&eacute;sinstallation d&#039;un module';
$lang['admin']['event_desc_edituserdefinedtagpost'] = 'Envoy&eacute; apr&egrave;s la mise &agrave; jour d&#039;une balise utilisateur';
$lang['admin']['event_desc_edituserdefinedtagpre'] = 'Envoy&eacute; avant la mise &agrave; jour d&#039;une balise utilisateur';
$lang['admin']['event_desc_deleteuserdefinedtagpre'] = 'Envoy&eacute; avant qu&#039;une balise utilisateur ne soit supprim&eacute;e';
$lang['admin']['event_desc_deleteuserdefinedtagpost'] = 'Envoy&eacute; apr&egrave;s qu&#039;une balise utilisateur soit supprim&eacute;e';
$lang['admin']['event_desc_adduserdefinedtagpost'] = 'Envoy&eacute; apr&egrave;s qu&#039;une balise utilisateur soit ins&eacute;r&eacute;e';
$lang['admin']['event_desc_adduserdefinedtagpre'] = 'Envoy&eacute; avant qu&#039;une balise utilisateur soit supprim&eacute;e';
$lang['admin']['global_umask'] = 'Masque de cr&eacute;ation de fichier (umask)&nbsp;';
$lang['admin']['errorcantcreatefile'] = 'Impossible de cr&eacute;er un fichier. Veuillez veacute;rifier les permissions.';
$lang['admin']['errormoduleversionincompatible'] = 'Le module est incompatible avec cette version de CMS';
$lang['admin']['errormodulenotloaded'] = 'Erreur interne, le module n&#039;a pas &eacute;t&eacute; initialis&eacute;';
$lang['admin']['errormodulenotfound'] = 'Erreur interne, n&#039;a pas pu trouver une instance de module.';
$lang['admin']['errorinstallfailed'] = 'L&#039;installation du module a &eacute;chou&eacute;';
$lang['admin']['errormodulewontload'] = 'Probl&egrave;me d&#039;initialisation d&#039;un module disponible';
$lang['admin']['frontendlang'] = 'Langue par d&eacute;faut de la partie publique du site&nbsp;';
$lang['admin']['info_edituser_password'] = 'Changer ce champ pour modifier le mot de passe de l&#039;utilisateur';
$lang['admin']['info_edituser_passwordagain'] = 'Changer ce champ pour modifier le mot de passe de l&#039;utilisateur';
$lang['admin']['originator'] = 'Origine';
$lang['admin']['module_name'] = 'Nom du Module';
$lang['admin']['event_name'] = 'Nom de l&#039;&eacute;v&eacute;nement';
$lang['admin']['event_description'] = 'Description de l&#039;&eacute;v&eacute;nement';
$lang['admin']['error_delete_default_parent'] = 'Vous ne pouvez pas supprimer le parent de la page par d&eacute;faut.';
$lang['admin']['jsdisabled'] = 'D&eacute;sol&eacute;, Javascript doit &ecirc;tre activ&eacute; pour effectuer cette fonction';
$lang['admin']['order'] = 'Ordre';
$lang['admin']['reorderpages'] = 'R&eacute;ordonner les pages';
$lang['admin']['reorder'] = 'R&eacute;ordonner';
$lang['admin']['page_reordered'] = 'La page a &eacute;t&eacute; r&eacute;ordonn&eacute;e avec succ&egrave;s.';
$lang['admin']['pages_reordered'] = 'Les pages ont &eacute;t&eacute; r&eacute;ordonn&eacute;es avec succ&egrave;s.';
$lang['admin']['sibling_duplicate_order'] = 'Deux pages soeurs ne peuvent pas avoir le m&ecirc;me ordre. Les pages n&#039;ont pas &eacute;t&eacute; r&eacute;ordonn&eacute;es.';
$lang['admin']['no_orders_changed'] = 'Vous avez choisi de r&eacute;ordonner les pages, mais vous n&#039;avez chang&eacute; l&#039;ordre d&#039;aucune d&#039;entre elles. Les pages n&#039;ont pas &eacute;t&eacute; r&eacute;ordonn&eacute;es.';
$lang['admin']['order_too_small'] = 'Une page ne peut pas avoir la valeur z&eacute;ro. Les pages n&#039;ont pas &eacute;t&eacute; r&eacute;ordonn&eacute;es.';
$lang['admin']['order_too_large'] = 'Une page ne peut pas avoir un ordre plus grand que le nombre de pages dans ce niveau. Les pages n&#039;ont pas &eacute;t&eacute; r&eacute;ordonn&eacute;es.';
$lang['admin']['user_tag'] = 'Balise utilisateur';
$lang['admin']['add'] = 'Ajout';
$lang['admin']['CSS'] = 'CSS ';
$lang['admin']['about'] = '&Agrave; propos';
$lang['admin']['action'] = 'Action ';
$lang['admin']['actionstatus'] = 'Action/Statut';
$lang['admin']['active'] = 'Actif&nbsp;';
$lang['admin']['addcontent'] = 'Ajouter un nouveau contenu';
$lang['admin']['cantremove'] = 'Ne peut pas &ecirc;tre supprim&eacute;';
$lang['admin']['changepermissions'] = 'Changer les permissions';
$lang['admin']['changepermissionsconfirm'] = 'UTILISER AVEC PR&Eacute;CAUTION\n\nCette action va s&#039;assurer que tous les fichiers constituant le module sont inscriptibles par le serveur web\n&Ecirc;tes-vous s&ucirc;r(e) de vouloir continuer&nbsp;?';
$lang['admin']['contentadded'] = 'Le contenu a &eacute;t&eacute; ajout&eacute; avec succ&egrave;s &agrave; la base de donn&eacute;es.';
$lang['admin']['contentupdated'] = 'Le contenu a &eacute;t&eacute; mis &agrave; jour avec succ&egrave;s.';
$lang['admin']['contentdeleted'] = 'Le contenu a &eacute;t&eacute; supprim&eacute; avec succ&egrave;s de la base de donn&eacute;es.';
$lang['admin']['success'] = 'Valable';
$lang['admin']['addcss'] = 'Ajouter cette nouvelle feuille de style';
$lang['admin']['addgroup'] = 'Ajouter un nouveau groupe';
$lang['admin']['additionaleditors'] = 'Autres &eacute;diteurs&nbsp;';
$lang['admin']['addtemplate'] = 'Ajouter un nouveau gabarit';
$lang['admin']['adduser'] = 'Ajouter un nouvel utilisateur';
$lang['admin']['addusertag'] = 'Ajouter une balise utilisateur';
$lang['admin']['adminaccess'] = 'Acc&eacute;der &agrave; l&#039;admin';
$lang['admin']['adminlog'] = 'Journal de l&#039;administration';
$lang['admin']['adminlogcleared'] = 'Journal de l&#039;administration effac&eacute; avec succ&egrave;s';
$lang['admin']['adminlogempty'] = 'Journal de l&#039;administration vide';
$lang['admin']['adminsystemtitle'] = 'Administration du CMS';
$lang['admin']['adminpaneltitle'] = 'Connexion administration de CMS Made Simple';
$lang['admin']['advanced'] = 'Avanc&eacute;';
$lang['admin']['aliasalreadyused'] = 'Cet alias est d&eacute;j&agrave; utilis&eacute; par une autre page. Changez &quot;Page alias&quot; dans l&#039;onglet &quot;Options&quot; pour autre chose.';
$lang['admin']['aliasmustbelettersandnumbers'] = 'L&#039;alias ne doit contenir que des lettres et des chiffres';
$lang['admin']['aliasnotaninteger'] = 'L&#039;alias ne doit pas &ecirc;tre un nombre';
$lang['admin']['allpagesmodified'] = 'Toutes les pages sont modifi&eacute;es&nbsp;!';
$lang['admin']['assignments'] = 'Membres';
$lang['admin']['associationexists'] = 'Cette association existe d&eacute;j&agrave;';
$lang['admin']['autoinstallupgrade'] = 'Installation ou mise &agrave; niveau automatiques';
$lang['admin']['back'] = 'Retour au Menu';
$lang['admin']['backtoplugins'] = 'Retourner &agrave; la liste des plugins';
$lang['admin']['cancel'] = 'Annuler';
$lang['admin']['cantchmodfiles'] = 'Les permissions n&#039;ont pas pu &ecirc;tre chang&eacute;es sur certains fichiers.';
$lang['admin']['cantremovefiles'] = 'Probl&egrave;me lors de la suppression de fichiers. Veuillez v&eacute;rifier les permissions';
$lang['admin']['confirmcancel'] = '&Ecirc;tes-vous s&ucirc;r(e) de vouloir annuler vos changements ? Cliquez OK pour annuler tous les changements. Cliquez Annuler pour continuer &agrave; &eacute;diter.';
$lang['admin']['canceldescription'] = 'Annuler les changements';
$lang['admin']['clearadminlog'] = 'Effacer le journal';
$lang['admin']['code'] = 'Code ';
$lang['admin']['confirmdefault'] = '&Ecirc;tes-vous s&ucirc;r(e) de vouloir mettre  - %s - en tant que page par d&eacute;faut du site ?';
$lang['admin']['confirmdeletedir'] = '&Ecirc;tes-vous s&ucirc;r(e) de vouloir supprimer ce dossier ainsi que tout son contenu ?';
$lang['admin']['content'] = 'Contenu&nbsp;';
$lang['admin']['contentmanagement'] = 'Gestion du contenu';
$lang['admin']['contenttype'] = 'Type de contenu&nbsp;';
$lang['admin']['copy'] = 'Copier';
$lang['admin']['copytemplate'] = 'Copier le gabarit';
$lang['admin']['create'] = 'Cr&eacute;er';
$lang['admin']['createnewfolder'] = 'Cr&eacute;er un nouveau dossier&nbsp;';
$lang['admin']['cssalreadyused'] = 'Ce nom de feuille de style est d&eacute;j&agrave; utilis&eacute;';
$lang['admin']['cssmanagement'] = 'Gestion des feuilles de style';
$lang['admin']['currentassociations'] = 'Associations des feuilles de style actuelles';
$lang['admin']['currentdirectory'] = 'Dossier actuel&nbsp;';
$lang['admin']['currentgroups'] = 'Groupes actuels';
$lang['admin']['currentpages'] = 'Pages actuelles';
$lang['admin']['currenttemplates'] = 'Gabarits actuels';
$lang['admin']['currentusers'] = 'Utilisateurs actuels';
$lang['admin']['custom404'] = 'Message d&#039;Erreur 404 personnalis&eacute;&nbsp;';
$lang['admin']['database'] = 'Base de Donn&eacute;es';
$lang['admin']['databaseprefix'] = 'Pr&eacute;fixe de Base de Donn&eacute;es';
$lang['admin']['databasetype'] = 'Type de Base de Donn&eacute;es';
$lang['admin']['date'] = 'Date ';
$lang['admin']['default'] = 'D&eacute;faut';
$lang['admin']['delete'] = 'Supprimer';
$lang['admin']['deleteconfirm'] = '&Ecirc;tes-vous s&ucirc;r de vouloir supprimer - %s -&nbsp;?';
$lang['admin']['deleteassociationconfirm'] = '&Ecirc;tes-vous s&ucirc;r de vouloir supprimer l&#039;association de - %s - ?';
$lang['admin']['deletecss'] = 'Supprimer la feuille de style';
$lang['admin']['dependencies'] = 'D&eacute;pendances';
$lang['admin']['description'] = 'Description ';
$lang['admin']['directoryexists'] = 'Ce dossier existe d&eacute;j&agrave;.';
$lang['admin']['down'] = 'Bas';
$lang['admin']['edit'] = '&Eacute;diter';
$lang['admin']['editconfiguration'] = '&Eacute;diter la Configuration ';
$lang['admin']['editcontent'] = '&Eacute;diter le contenu ';
$lang['admin']['editcss'] = '&Eacute;diter la feuille de style ';
$lang['admin']['editcsssuccess'] = 'La feuille de style a &eacute;t&eacute; mise &agrave; jour avec succ&egrave;s.';
$lang['admin']['editgroup'] = '&Eacute;diter le groupe ';
$lang['admin']['editpage'] = '&Eacute;diter la page ';
$lang['admin']['edittemplate'] = '&Eacute;diter le gabarit ';
$lang['admin']['edittemplatesuccess'] = 'Le gabarit a &eacute;t&eacute; mis &agrave; jour avec succ&egrave;s.';
$lang['admin']['edituser'] = '&Eacute;diter l&#039;utilisateur ';
$lang['admin']['editusertag'] = '&Eacute;diter la balise utilisateur ';
$lang['admin']['usertagadded'] = 'La balise utilisateur a &eacute;t&eacute; ajout&eacute;e avec succ&egrave;s.';
$lang['admin']['usertagupdated'] = 'La balise utilisateur a &eacute;t&eacute; mise &agrave; jour avec succ&egrave;s.';
$lang['admin']['usertagdeleted'] = 'La balise utilisateur a &eacute;t&eacute; supprim&eacute;e avec succ&egrave;s.';
$lang['admin']['email'] = 'Adresse Email&nbsp;';
$lang['admin']['errorattempteddowngrade'] = 'L&#039;installation de ce module retournerait &agrave; une version ant&eacute;rieure. Op&eacute;ration annul&eacute;e.';
$lang['admin']['errorchildcontent'] = 'Ce contenu poss&egrave;de encore des sous-contenus. Veuillez les supprimer d&#039;abord.';
$lang['admin']['errorcopyingtemplate'] = 'Erreur lors de la copie du gabarit';
$lang['admin']['errorcouldnotparsexml'] = 'Erreur de lecture du fichier XML. Veuillez vous assurer que vous t&eacute;l&eacute;chargez un fichier .xml et non un fichier .tar.gz ou .zip.';
$lang['admin']['errorcreatingassociation'] = 'Erreur lors de la cr&eacute;ation de l&#039;association';
$lang['admin']['errorcssinuse'] = 'Cette feuille de style est encore utilis&eacute;e par des gabarits ou des pages. Veuillez supprimer ces associations d&#039;abord.';
$lang['admin']['errordefaultpage'] = 'Vous ne pouvez pas supprimer la page par d&eacute;faut. Veuillez d&#039;abord choisir une autre page. par d&eacute;faut.';
$lang['admin']['errordeletingassociation'] = 'Erreur lors de la suppression de l&#039;association';
$lang['admin']['errordeletingcss'] = 'Erreur lors de la suppression de la feuille de style';
$lang['admin']['errordeletingdirectory'] = 'Le dossier n&#039;a pas pu &ecirc;tre supprim&eacute;. Veuillez v&eacute;rifier les permissions.';
$lang['admin']['errordeletingfile'] = 'Le fichier n&#039;a pas pu &ecirc;tre supprim&eacute;. Veuillez v&eacute;rifier les permissions.';
$lang['admin']['errordirectorynotwritable'] = 'Aucune permission en &eacute;criture dans le dossier. Ceci peut &ecirc;tre caus&eacute; par les permissions des fichiers et la propri&eacute;t&eacute;. Safe mode pourrait aussi &ecirc;tre en cause.';
$lang['admin']['errordtdmismatch'] = 'La version du DTD est manquante ou incompatible avec le fichier XML';
$lang['admin']['errorgettingcssname'] = 'Erreur lors de la r&eacute;cup&eacute;ration de nom de la feuille de style';
$lang['admin']['errorgettingtemplatename'] = 'Erreur lors de la r&eacute;cup&eacute;ration du nom du gabarit';
$lang['admin']['errorincompletexml'] = 'Le fichier XML est incomplet ou invalide';
$lang['admin']['uploadxmlfile'] = 'Installer le module via le fichier XML';
$lang['admin']['cachenotwritable'] = 'Le dossier cache n&#039;est pas accessible en &eacute;criture. Le vidage du cache ne va pas fonctionner. Veuillez d&eacute;finir le dossier tmp/cache pour qu&#039;il aie la permission totale (lecture/&eacute;criture/ex&eacute;cution = chmod 777). Il se pourrait &eacute;galement que vous ayez &agrave; d&eacute;sactiver le Safe mode.';
$lang['admin']['modulesnotwritable'] = 'Le dossier des modules <em>(et/ou le dossier uploads)</em> n&#039;est pas accessible en &eacute;criture. Si vous d&eacute;sirez installer des modules par t&eacute;l&eacute;chargement d&#039;un fichier XML, vous devez donner la permission totale (lecture/&eacute;criture/ex&eacute;cution) sur le dossier des modules (chmod 777 ou chmod suivant votre h&eacute;bergement). Le Safe mode pourrait aussi &ecirc;tre en cause.';
$lang['admin']['noxmlfileuploaded'] = 'Aucun fichier n&#039;a &eacute;t&eacute; t&eacute;l&eacute;charg&eacute;. Pour installer un module via XML, vous devez choisir et t&eacute;l&eacute;charger un fichier de module .xml depuis votre ordinateur.';
$lang['admin']['errorinsertingcss'] = 'Erreur lors de la cr&eacute;ation de la feuille de style';
$lang['admin']['errorinsertinggroup'] = 'Erreur lors de la cr&eacute;ation du groupe';
$lang['admin']['errorinsertingtag'] = 'Erreur lors de la cr&eacute;ation de la balise utilisateur';
$lang['admin']['errorinsertingtemplate'] = 'Erreur lors de la cr&eacute;ation du gabarit';
$lang['admin']['errorinsertinguser'] = 'Erreur lors de la cr&eacute;ation de l&#039;utilisateur';
$lang['admin']['errornofilesexported'] = 'Erreur lors de l&#039;exportation en xml';
$lang['admin']['errorretrievingcss'] = 'Erreur lors de la r&eacute;cup&eacute;ration de la feuille de style';
$lang['admin']['errorretrievingtemplate'] = 'Erreur lors de la r&eacute;cup&eacute;ration du gabarit';
$lang['admin']['errortemplateinuse'] = 'Ce gabarit est encore utilis&eacute; par une ou plusieurs pages. Veuillez les supprimer d&#039;abord.';
$lang['admin']['errorupdatingcss'] = 'Erreur lors de la mise &agrave; jour de la feuille de style';
$lang['admin']['errorupdatinggroup'] = 'Erreur lors de la mise &agrave; jour du groupe';
$lang['admin']['errorupdatingpages'] = 'Erreur lors de la mise &agrave; jour des pages';
$lang['admin']['errorupdatingtemplate'] = 'Erreur lors de la mise &agrave; jour du gabarit';
$lang['admin']['errorupdatinguser'] = 'Erreur lors de la mise &agrave; jour de l&#039;utilisateur.';
$lang['admin']['errorupdatingusertag'] = 'Erreur lors de la mise &agrave; jour de la balise utilisateur';
$lang['admin']['erroruserinuse'] = 'Cet utilisateur poss&egrave;de encore certains contenus. Veuillez changer le propri&eacute;taire de ces contenus avant de supprimer.';
$lang['admin']['eventhandlers'] = 'Gestion des &eacute;v&eacute;nements';
$lang['admin']['editeventhandler'] = '&Eacute;dition de la gestion des &eacute;v&eacute;nements';
$lang['admin']['eventhandlerdescription'] = 'Associer les balises utilisateur avec les &eacute;v&egrave;nements';
$lang['admin']['export'] = 'Exporter';
$lang['admin']['event'] = '&Eacute;v&eacute;nement';
$lang['admin']['false'] = 'Faux';
$lang['admin']['settrue'] = 'D&eacute;finir en vrai';
$lang['admin']['filecreatedirnodoubledot'] = 'Le nom du dossier ne peut contenir &#039;..&#039;.';
$lang['admin']['filecreatedirnoname'] = 'Impossible de cr&eacute;er un dossier sans nom.';
$lang['admin']['filecreatedirnoslash'] = 'Le nom du dossier ne peut contenir &#039;/&#039; ou &#039;\&#039;.';
$lang['admin']['filemanagement'] = 'Gestion des fichiers';
$lang['admin']['filename'] = 'Nom';
$lang['admin']['filenotuploaded'] = 'Le fichier n&#039;a pas pu &ecirc;tre t&eacute;l&eacute;charg&eacute;. Veuillez v&eacute;rifier les permissions.';
$lang['admin']['filesize'] = 'Taille de fichier';
$lang['admin']['firstname'] = 'Pr&eacute;nom&nbsp;';
$lang['admin']['groupmanagement'] = 'Gestion des groupes';
$lang['admin']['grouppermissions'] = 'Permissions des groupes';
$lang['admin']['handler'] = 'Gestionnaire (Balise utilisateur)';
$lang['admin']['headtags'] = 'Balise d&#039;ent&ecirc;te';
$lang['admin']['help'] = 'Aide';
$lang['admin']['new_window'] = 'nouvelle fen&ecirc;tre';
$lang['admin']['helpwithsection'] = '%s Aide';
$lang['admin']['helpaddtemplate'] = '<p>Un gabarit est ce qui contr&ocirc;le l&#039;aspect de votre site.</p><p>Cr&eacute;ez la maquette ou &quot;disposition&quot; ici et ajoutez &eacute;galement votre feuille de style dans la zone &quot;Feuille de style&quot; pour contr&ocirc;ler l&#039;aspect de vos divers &eacute;l&eacute;ments.</p>';
$lang['admin']['helplisttemplate'] = '<p>Cette section vous permet d&#039;&eacute;diter, supprimer et cr&eacute;er des gabarits.</p><p>Pour cr&eacute;er un nouveau gabarit, cliquez sur le bouton <u>Ajouter un nouveau gabarit</u>.</p><p>Si vous d&eacute;sirez que toutes vos pages utilisent le m&ecirc;me gabarit, cliquez sur le lien <u>Choisir pour tous les contenus</u>.</p><p>Si vous d&eacute;sirez copier un gabarit, cliquer sur l&#039;ic&ocirc;ne <u>Copier</u> et l&#039;on vous demandera un nom pour la nouvelle copie.</p>';
$lang['admin']['home'] = 'Accueil';
$lang['admin']['homepage'] = 'Page d&#039;accueil&nbsp;';
$lang['admin']['hostname'] = 'Nom du Serveur';
$lang['admin']['idnotvalid'] = 'L&#039;ID donn&eacute; n&#039;est pas valide.';
$lang['admin']['imagemanagement'] = 'Gestion d&#039;images';
$lang['admin']['informationmissing'] = 'Certaines informations sont manquantes.';
$lang['admin']['install'] = 'Installer';
$lang['admin']['invalidcode'] = 'Le code entr&eacute; est invalide.';
$lang['admin']['illegalcharacters'] = 'Caract&egrave;res invalides dans le champ %s.';
$lang['admin']['invalidcode_brace_missing'] = 'Nombre impair d&#039;accolades';
$lang['admin']['invalidtemplate'] = 'Le gabarit est invalide.';
$lang['admin']['itemid'] = 'ID de l&#039;&eacute;l&eacute;ment';
$lang['admin']['itemname'] = 'Nom de l&#039;&eacute;l&eacute;ment';
$lang['admin']['language'] = 'Langue&nbsp;';
$lang['admin']['lastname'] = 'Nom&nbsp;';
$lang['admin']['logout'] = 'D&eacute;connexion';
$lang['admin']['loginprompt'] = 'Entrez un nom d&#039;utilisateur et un mot de passe pour acc&eacute;der au panneau d&#039;administration.';
$lang['admin']['logintitle'] = 'Connexion administration de CMS Made Simple';
$lang['admin']['menutext'] = 'Texte du menu&nbsp;';
$lang['admin']['missingparams'] = 'Certains param&egrave;tres sont manquants ou invalides.';
$lang['admin']['modifygroupassignments'] = 'Modifier les membres';
$lang['admin']['moduleabout'] = 'A propos du module %s';
$lang['admin']['modulehelp'] = 'Aide du module %s';
$lang['admin']['msg_defaultcontent'] = 'Ajouter du code ici ajoutera du code dans le contenu de toutes les nouvelles pages';
$lang['admin']['msg_defaultmetadata'] = 'Ajouter du code ici ajoutera du code dans la section des balises meta de toutes les nouvelles pages';
$lang['admin']['wikihelp'] = 'Aide de la communaut&eacute;';
$lang['admin']['moduleinstalled'] = 'Le module est d&eacute;ja install&eacute;';
$lang['admin']['moduleinterface'] = 'Interface de %s';
$lang['admin']['modules'] = 'Modules ';
$lang['admin']['move'] = 'D&eacute;placer';
$lang['admin']['name'] = 'Nom&nbsp;';
$lang['admin']['needpermissionto'] = 'Vous avez besoin de la permission &#039;%s&#039; pour accomplir cette action.';
$lang['admin']['needupgrade'] = 'Mise &agrave; jour n&eacute;cessaire';
$lang['admin']['newtemplatename'] = 'Nom du nouveau gabarit';
$lang['admin']['next'] = 'suivant';
$lang['admin']['noaccessto'] = 'Vous n&#039;avez pas acc&egrave;s &agrave; %s';
$lang['admin']['nocss'] = 'Aucune feuille de style';
$lang['admin']['noentries'] = 'Aucune entr&eacute;e';
$lang['admin']['nofieldgiven'] = 'Aucun %s entr&eacute;&nbsp;!';
$lang['admin']['nofiles'] = 'Aucun fichier';
$lang['admin']['nopasswordmatch'] = 'Les mots de passe ne correspondent pas';
$lang['admin']['norealdirectory'] = 'Dossier non valide';
$lang['admin']['norealfile'] = 'Fichier non valide';
$lang['admin']['notinstalled'] = 'N&#039;est pas install&eacute;';
$lang['admin']['overwritemodule'] = 'R&eacute;&eacute;criture par-dessus des modules existants&nbsp;';
$lang['admin']['owner'] = 'Propri&eacute;taire&nbsp;';
$lang['admin']['pagealias'] = 'Alias de page&nbsp;';
$lang['admin']['pagedefaults'] = 'Page par d&eacute;faut';
$lang['admin']['pagedefaultsdescription'] = 'Valeur par d&eacute;faut pour les nouvelles pages.';
$lang['admin']['parent'] = 'Parent&nbsp;';
$lang['admin']['password'] = 'Mot de passe&nbsp;';
$lang['admin']['passwordagain'] = 'Mot de passe (encore)&nbsp;';
$lang['admin']['permission'] = 'Permission ';
$lang['admin']['permissions'] = 'Permissions ';
$lang['admin']['permissionschanged'] = 'Les permissions ont &eacute;t&eacute; mises &agrave; jour.';
$lang['admin']['pluginabout'] = 'A propos de la balise %s';
$lang['admin']['pluginhelp'] = 'Aide de la balise %s';
$lang['admin']['pluginmanagement'] = 'Gestion des plugins';
$lang['admin']['prefsupdated'] = 'Les pr&eacute;f&eacute;rences ont &eacute;t&eacute; mises &agrave; jour.';
$lang['admin']['preview'] = 'Aper&ccedil;u';
$lang['admin']['previewdescription'] = 'Pr&eacute;visualiser les changements';
$lang['admin']['previous'] = 'Pr&eacute;c&eacute;dent';
$lang['admin']['remove'] = 'Supprimer';
$lang['admin']['removeconfirm'] = 'Cette action va supprimer d&eacute;finitivement les fichiers constituant le module de cette installation.\n&Ecirc;tes-vous s&ucirc;r de vouloir continuer&nbsp;?';
$lang['admin']['removecssassociation'] = 'Supprimer l&#039;association &agrave; la feuille de style';
$lang['admin']['saveconfig'] = 'Sauver la Configuration';
$lang['admin']['send'] = 'Envoyer';
$lang['admin']['setallcontent'] = 'Choisir pour tous les contenus';
$lang['admin']['setallcontentconfirm'] = '&Ecirc;tes-vous s&ucirc;r que toutes les pages doivent utiliser ce gabarit&nbsp;?';
$lang['admin']['showinmenu'] = 'Afficher dans le menu&nbsp;';
$lang['admin']['showsite'] = 'Afficher le site';
$lang['admin']['sitedownmessage'] = 'Message pour la maintenance du site&nbsp;';
$lang['admin']['siteprefs'] = 'Pr&eacute;f&eacute;rences globales';
$lang['admin']['status'] = 'Statut&nbsp;';
$lang['admin']['stylesheet'] = 'Feuille de style&nbsp;';
$lang['admin']['submit'] = 'Envoyer';
$lang['admin']['submitdescription'] = 'Sauvegarder les changements';
$lang['admin']['tags'] = 'Balises';
$lang['admin']['template'] = 'Gabarit&nbsp;';
$lang['admin']['templateexists'] = 'Ce nom de gabarit existe d&eacute;j&agrave;';
$lang['admin']['templatemanagement'] = 'Gestion des gabarits';
$lang['admin']['title'] = 'Titre&nbsp;';
$lang['admin']['tools'] = 'Outils';
$lang['admin']['true'] = 'Vrai';
$lang['admin']['setfalse'] = 'D&eacute;finir &agrave; faux';
$lang['admin']['type'] = 'Type ';
$lang['admin']['typenotvalid'] = 'Le type n&#039;est pas valide.';
$lang['admin']['uninstall'] = 'D&eacute;sinstaller';
$lang['admin']['uninstallconfirm'] = '&Ecirc;tes-vous s&ucirc;r(e) de vouloir d&eacute;sinstaller ce module&nbsp;?';
$lang['admin']['up'] = 'Haut';
$lang['admin']['upgrade'] = 'Mise &agrave; jour';
$lang['admin']['upgradeconfirm'] = '&Ecirc;tes-vous s&ucirc;r(e) de vouloir mettre &agrave; jour&nbsp;?';
$lang['admin']['uploadfile'] = 'T&eacute;l&eacute;charger le fichier&nbsp;';
$lang['admin']['url'] = 'URL&nbsp;';
$lang['admin']['useadvancedcss'] = 'Utiliser la gestion avanc&eacute;e des feuilles de style';
$lang['admin']['user'] = 'Utilisateur';
$lang['admin']['userdefinedtags'] = 'Balises Utilisateurs';
$lang['admin']['usermanagement'] = 'Gestion des utilisateurs';
$lang['admin']['username'] = 'Nom d&#039;utilisateur&nbsp;';
$lang['admin']['usernameincorrect'] = 'Nom d&#039;utilisateur ou mot de passe incorrect';
$lang['admin']['userprefs'] = 'Pr&eacute;f&eacute;rences';
$lang['admin']['usersassignedtogroup'] = 'Utilisateur membre du groupe %s';
$lang['admin']['usertagexists'] = 'Une balise existe d&eacute;j&agrave; avec le m&ecirc;me nom, veuillez en choisir un autre.';
$lang['admin']['usewysiwyg'] = 'Utiliser l&#039;&eacute;diteur visuel (WYSIWYG) pour l&#039;&eacute;dition';
$lang['admin']['version'] = 'Version ';
$lang['admin']['view'] = 'Voir';
$lang['admin']['welcomemsg'] = 'Bienvenue %s';
$lang['admin']['directoryabove'] = 'Dossier au niveau sup&eacute;rieur';
$lang['admin']['nodefault'] = 'Aucune s&eacute;lection par d&eacute;faut';
$lang['admin']['blobexists'] = 'Ce nom de bloc de contenu global existe d&eacute;j&agrave;';
$lang['admin']['blobmanagement'] = 'Gestionnaire de blocs de contenus globaux';
$lang['admin']['errorinsertingblob'] = 'Une erreur est survenue lors de l&#039;ajout du bloc de contenu global.';
$lang['admin']['addhtmlblob'] = 'Ajouter un bloc de contenu global';
$lang['admin']['edithtmlblob'] = '&Eacute;diter le bloc de contenu global ';
$lang['admin']['edithtmlblobsuccess'] = 'Le bloc de contenu global a &eacute;t&eacute; mis &agrave; jour avec succ&egrave;s';
$lang['admin']['tagtousegcb'] = 'Balise pour utiliser ce bloc';
$lang['admin']['gcb_wysiwyg'] = 'Activer le WYSIWYG pour les blocs de contenus globaux&nbsp;';
$lang['admin']['gcb_wysiwyg_help'] = 'Activer l&#039;&eacute;diteur WYSIWYG pour l&#039;&eacute;dition des Blocs de contenus globaux';
$lang['admin']['filemanager'] = 'Gestionnaire de fichiers';
$lang['admin']['imagemanager'] = 'Gestionnaire d&#039;images';
$lang['admin']['encoding'] = 'Encodage&nbsp;';
$lang['admin']['clearcache'] = 'Vider le cache&nbsp;';
$lang['admin']['clear'] = 'Vider';
$lang['admin']['cachecleared'] = 'Cache vid&eacute;';
$lang['admin']['apply'] = 'Appliquer';
$lang['admin']['applydescription'] = 'Sauvegarder les changements et continuer l&#039;&eacute;dition';
$lang['admin']['none'] = 'Aucun';
$lang['admin']['wysiwygtouse'] = 'S&eacute;lection du WYSIWYG &agrave; utiliser&nbsp;';
$lang['admin']['syntaxhighlightertouse'] = 'S&eacute;lectionner la syntaxe surlign&eacute;e&nbsp;';
$lang['admin']['hasdependents'] = 'A des modules d&eacute;pendants';
$lang['admin']['missingdependency'] = 'D&eacute;pendance manquante';
$lang['admin']['minimumversion'] = 'Version minimale';
$lang['admin']['minimumversionrequired'] = 'Version minimale requise de CMSMS';
$lang['admin']['maximumversion'] = 'Version maximale';
$lang['admin']['maximumversionsupported'] = 'Version maximale de CMSMS support&eacute;e';
$lang['admin']['depsformodule'] = 'D&eacute;pendances pour module %s ';
$lang['admin']['installed'] = 'Install&eacute;';
$lang['admin']['author'] = 'Auteur&nbsp;';
$lang['admin']['changehistory'] = 'Historique des changements&nbsp;';
$lang['admin']['moduleerrormessage'] = 'Message d&#039;erreur pour le module %s';
$lang['admin']['moduleupgradeerror'] = 'Il y a eu une erreur lors de la mise &agrave; jour du module';
$lang['admin']['moduleinstallmessage'] = 'Message d&#039;installation pour le module %s';
$lang['admin']['moduleuninstallmessage'] = 'Message de d&eacute;sinstallation pour le module %s';
$lang['admin']['admintheme'] = 'Th&egrave;me de l&#039;administration&nbsp;';
$lang['admin']['addstylesheet'] = 'Ajouter une feuille de style';
$lang['admin']['editstylesheet'] = '&Eacute;diter une feuille de style ';
$lang['admin']['addcssassociation'] = 'Ajouter une association de feuille de style';
$lang['admin']['attachstylesheet'] = 'Attacher cette feuille de style';
$lang['admin']['attachtemplate'] = 'Attacher &agrave; ce gabarit';
$lang['admin']['main'] = 'Accueil';
$lang['admin']['pages'] = 'Pages ';
$lang['admin']['page'] = 'Page ';
$lang['admin']['files'] = 'Fichiers';
$lang['admin']['layout'] = 'Disposition';
$lang['admin']['usersgroups'] = 'Utilisateurs/Groupes';
$lang['admin']['extensions'] = 'Extensions ';
$lang['admin']['preferences'] = 'Pr&eacute;f&eacute;rences';
$lang['admin']['admin'] = 'Administration du site';
$lang['admin']['viewsite'] = 'Voir le site';
$lang['admin']['templatecss'] = 'Assigner les gabarits aux feuilles de style';
$lang['admin']['plugins'] = 'Plugins ';
$lang['admin']['movecontent'] = 'D&eacute;placement de pages';
$lang['admin']['module'] = 'Module ';
$lang['admin']['usertags'] = 'Balises Utilisateurs';
$lang['admin']['htmlblobs'] = 'Blocs de contenus globaux';
$lang['admin']['adminhome'] = 'Accueil de l&#039;administration';
$lang['admin']['liststylesheets'] = 'Feuilles de style';
$lang['admin']['preferencesdescription'] = 'D&eacute;finition des param&egrave;tres globaux du site.';
$lang['admin']['adminlogdescription'] = 'Liste des actions ex&eacute;cut&eacute;es dans l&#039;administration.';
$lang['admin']['mainmenu'] = 'Menu principal';
$lang['admin']['users'] = 'Utilisateurs';
$lang['admin']['usersdescription'] = 'Gestion des utilisateurs.';
$lang['admin']['groups'] = 'Groupes';
$lang['admin']['groupsdescription'] = 'Gestion des groupes.';
$lang['admin']['groupassignments'] = 'Appartenance aux groupes';
$lang['admin']['groupassignmentdescription'] = 'Appartenance des utilisateurs aux groupes.';
$lang['admin']['groupperms'] = 'Permissions des groupes';
$lang['admin']['grouppermsdescription'] = 'D&eacute;finition des permissions et des niveaux d&#039;acc&egrave;s des groupes';
$lang['admin']['pagesdescription'] = 'Edition des pages et autres contenus.';
$lang['admin']['htmlblobdescription'] = 'Les blocs de contenus globaux sont des morceaux de contenu &agrave; placer dans vos pages ou gabarits.';
$lang['admin']['templates'] = 'Gabarits';
$lang['admin']['templatesdescription'] = 'Ajout et &eacute;dition des gabarits. Les gabarits d&eacute;finissent le th&egrave;me visuel de votre site.';
$lang['admin']['stylesheets'] = 'Feuilles de style';
$lang['admin']['stylesheetsdescription'] = 'La gestion des feuilles de style est un moyen avanc&eacute; de g&eacute;rer les feuilles de style en cascade (CSS) s&eacute;par&eacute;ment des gabarits.';
$lang['admin']['filemanagerdescription'] = 'T&eacute;l&eacute;chargement et gestion des fichiers.';
$lang['admin']['imagemanagerdescription'] = 'T&eacute;l&eacute;chargement, &eacute;dition et effacement des images.';
$lang['admin']['moduledescription'] = 'Les modules &eacute;tendent CMS Made Simple pour vous procurer toutes sortes de fonctionnalit&eacute;s personnalis&eacute;es.';
$lang['admin']['tagdescription'] = 'Les balises sont de petits morceaux de fonctionnalit&eacute;s qui peuvent &ecirc;tre ajout&eacute;s &agrave; votre contenu et/ou vos gabarits.';
$lang['admin']['usertagdescription'] = 'Balises que vous pouvez cr&eacute;er/modifier vous-m&ecirc;me pour ex&eacute;cuter des t&acirc;ches sp&eacute;cifiques, directement depuis votre navigateur.';
$lang['admin']['installdirwarning'] = '<strong>Attention</strong>&nbsp;: le dossier d&#039;installation est toujours pr&eacute;sent. Veuillez l&#039;effacer compl&egrave;tement ou le renommer pour des raisons de s&eacute;curit&eacute;.';
$lang['admin']['subitems'] = 'Sous-objets';
$lang['admin']['extensionsdescription'] = 'Modules, balises et autres fonctions.';
$lang['admin']['usersgroupsdescription'] = 'Objets en relation avec les utilisateurs et les groupes.';
$lang['admin']['layoutdescription'] = 'Options de disposition du site.';
$lang['admin']['admindescription'] = 'Fonctions d&#039;administration du site.';
$lang['admin']['contentdescription'] = 'Ajout et &eacute;dition de contenu.';
$lang['admin']['enablecustom404'] = 'Activation du message 404 personnalis&eacute;&nbsp;';
$lang['admin']['enablesitedown'] = 'Activation du message de maintenance&nbsp;';
$lang['admin']['bookmarks'] = 'Favoris';
$lang['admin']['user_created'] = 'Favoris personnalis&eacute;s';
$lang['admin']['forums'] = 'Forums ';
$lang['admin']['wiki'] = 'Wiki ';
$lang['admin']['irc'] = 'IRC ';
$lang['admin']['module_help'] = 'Aide sur le module';
$lang['admin']['managebookmarks'] = 'Gestion des favoris';
$lang['admin']['editbookmark'] = 'Editer les favoris ';
$lang['admin']['addbookmark'] = 'Ajouter en favori';
$lang['admin']['recentpages'] = 'Pages r&eacute;centes';
$lang['admin']['groupname'] = 'Nom du groupe&nbsp;';
$lang['admin']['selectgroup'] = 'S&eacute;lection du groupe';
$lang['admin']['updateperm'] = 'Mise &agrave; jour des permissions';
$lang['admin']['admincallout'] = 'Administration des raccourcis&nbsp;';
$lang['admin']['showbookmarks'] = 'Afficher les favoris de l&#039;administration';
$lang['admin']['hide_help_links'] = 'Cacher les liens d&#039;aide&nbsp;';
$lang['admin']['hide_help_links_help'] = 'Cochez cette case pour d&eacute;sactiver le wiki et les liens d&#039;aide dans les en-t&ecirc;tes de pages.';
$lang['admin']['showrecent'] = 'Afficher les pages r&eacute;cemment acc&eacute;d&eacute;es';
$lang['admin']['attachtotemplate'] = 'Attacher une feuille de style &agrave; un gabarit';
$lang['admin']['attachstylesheets'] = 'Attacher des feuilles de style';
$lang['admin']['indent'] = 'Cr&eacute;er un retrait &agrave; la liste de pages pour souligner la hi&eacute;rarchie';
$lang['admin']['adminindent'] = 'Affichage du contenu&nbsp;';
$lang['admin']['contract'] = 'Fermer la section';
$lang['admin']['expand'] = 'Ouvrir la section';
$lang['admin']['expandall'] = 'D&eacute;ployer toutes les sections';
$lang['admin']['contractall'] = 'Contracter toutes les sections';
$lang['admin']['menu_bookmarks'] = '[+] ';
$lang['admin']['globalconfig'] = 'Param&egrave;tres globaux';
$lang['admin']['adminpaging'] = 'Nombre de page &agrave; afficher par fen&ecirc;tre dans la liste des pages';
$lang['admin']['nopaging'] = 'Afficher tous les objets';
$lang['admin']['myprefs'] = 'Mes pr&eacute;f&eacute;rences';
$lang['admin']['myprefsdescription'] = 'Param&eacute;trage du panneau d&#039;administration pour l&#039;afficher selon vos pr&eacute;f&eacute;rences.';
$lang['admin']['myaccount'] = 'Mon compte ';
$lang['admin']['myaccountdescription'] = 'Gestion du compte personnel.';
$lang['admin']['adminprefs'] = 'Pr&eacute;f&eacute;rences de l&#039;utilisateur';
$lang['admin']['adminprefsdescription'] = 'Pr&eacute;f&eacute;rences de l&#039;utilisateur pour le panneau d&#039;administration. ';
$lang['admin']['managebookmarksdescription'] = 'Gestion des favoris de l&#039;administration.';
$lang['admin']['options'] = 'Options ';
$lang['admin']['langparam'] = 'Param&egrave;tre utilis&eacute; pour sp&eacute;cifier dans quelle langue afficher le module dans la partie publique. Ce param&egrave;tre n&#039;est pas support&eacute; ou utile pour tous les modules.';
$lang['admin']['parameters'] = 'Param&egrave;tres';
$lang['admin']['mediatype'] = 'Type de m&eacute;dia&nbsp;';
$lang['admin']['mediatype_'] = 'Aucun d&eacute;fini&nbsp;: va affecter partout';
$lang['admin']['mediatype_all'] = 'all : compatible pour tous les appareils.';
$lang['admin']['mediatype_aural'] = 'aural&nbsp;: &agrave; l&#039;attention des synth&eacute;tiseurs de voix.';
$lang['admin']['mediatype_braille'] = 'braille&nbsp;: &agrave; l&#039;attention des appareils tactiles en braille.';
$lang['admin']['mediatype_embossed'] = 'embossed&nbsp;: &agrave; l&#039;attention des imprimantes braille.';
$lang['admin']['mediatype_handheld'] = 'handheld&nbsp;: &agrave; l&#039;attention des appareils de poche (PDA)';
$lang['admin']['mediatype_print'] = 'print&nbsp;: &agrave; l&#039;attention de documents imprim&eacute;s sur du mat&eacute;riel opaque, et pour les documents visualis&eacute;s &agrave; l&#039;&eacute;cran en pr&eacute;visualisation d&#039;impression';
$lang['admin']['mediatype_projection'] = 'projection&nbsp;: &agrave; l&#039;attention des pr&eacute;sentations projet&eacute;es, par exemple projecteurs ou impressions sur transparents';
$lang['admin']['mediatype_screen'] = 'screen&nbsp;: &agrave; l&#039;attention principalement des &eacute;crans d&#039;ordinateurs';
$lang['admin']['mediatype_tty'] = 'tty&nbsp;: &agrave; l&#039;attention des m&eacute;dia utilisant des caract&egrave;res fixes, tels que t&eacute;l&eacute;types et terminaux.';
$lang['admin']['mediatype_tv'] = 'tv&nbsp;: &agrave; l&#039;attention des appareils de type t&eacute;l&eacute;vision.';
$lang['admin']['assignmentchanged'] = 'L&#039;appartenance des utilisateurs aux groupes a &eacute;t&eacute; modifi&eacute;e.';
$lang['admin']['stylesheetexists'] = 'La feuille de style existe';
$lang['admin']['errorcopyingstylesheet'] = 'Erreur durant la copie de la feuille de style';
$lang['admin']['copystylesheet'] = 'Copier la feuille de style';
$lang['admin']['newstylesheetname'] = 'Nom de la nouvelle feuille de style&nbsp;';
$lang['admin']['target'] = 'Cible&nbsp;';
$lang['admin']['xml'] = 'XML ';
$lang['admin']['xmlmodulerepository'] = 'URL du soap server de ModuleRepository';
$lang['admin']['metadata'] = 'M&eacute;tadonn&eacute;es&nbsp;';
$lang['admin']['globalmetadata'] = 'M&eacute;tadonn&eacute;es globales&nbsp;';
$lang['admin']['titleattribute'] = 'Attribut &#039;title&#039; (titre)&nbsp;';
$lang['admin']['tabindex'] = 'Attribut &#039;tabindex&#039; (navigation par tabulateur)&nbsp;';
$lang['admin']['accesskey'] = 'Attribut &#039;accesskey&#039; (raccourci clavier)&nbsp;';
$lang['admin']['sitedownwarning'] = '<strong>Attention&nbsp;:</strong> Votre site affiche le message &quot;Site Down for Maintenance&quot;.  Veuillez supprimer le fichier %s pour r&eacute;soudre cela.';
$lang['admin']['deletecontent'] = 'Supprimer le contenu';
$lang['admin']['deletepages'] = 'Supprimer (ce)ces pages&nbsp;?';
$lang['admin']['selectall'] = 'Tout s&eacute;lectionner';
$lang['admin']['selecteditems'] = 'Objets s&eacute;lectionn&eacute;s&nbsp;';
$lang['admin']['inactive'] = 'Inactif';
$lang['admin']['deletetemplates'] = 'Supprimer les gabarits';
$lang['admin']['templatestodelete'] = 'Ces gabarits vont &ecirc;tre supprim&eacute;s';
$lang['admin']['wontdeletetemplateinuse'] = 'Ces gabarits sont utilis&eacute;s et ne seront pas supprim&eacute;s';
$lang['admin']['deletetemplate'] = 'Supprimer les feuilles de style';
$lang['admin']['stylesheetstodelete'] = 'Ces feuilles de styles vont &ecirc;tre supprim&eacute;es';
$lang['admin']['sitename'] = 'Nom du site&nbsp;';
$lang['admin']['siteadmin'] = 'Administration du site';
$lang['admin']['images'] = 'Gestionnaire d&#039;images';
$lang['admin']['blobs'] = 'Blocs de contenu globaux';
$lang['admin']['groupmembers'] = 'Assignation des groupes';
$lang['admin']['troubleshooting'] = '(D&eacute;pannage)';
$lang['admin']['event_desc_loginpost'] = 'Envoy&eacute; apr&egrave;s la connexion d&#039;un utilisateur dans le panneau d&#039;administration';
$lang['admin']['event_desc_logoutpost'] = 'Envoy&eacute; apr&egrave;s la d&eacute;connexion d&#039;un utilisateur du panneau d&#039;administration';
$lang['admin']['event_desc_adduserpre'] = 'Envoy&eacute; avant qu&#039;un nouvel utilisateur soit cr&eacute;&eacute;';
$lang['admin']['event_desc_adduserpost'] = 'Envoy&eacute; apr&egrave;s qu&#039;un nouvel utilisateur ait &eacute;t&eacute; cr&eacute;&eacute;';
$lang['admin']['event_desc_edituserpre'] = 'Envoy&eacute; avant que l&#039;&eacute;dition d&#039;un utilisateur soit enregistr&eacute;e';
$lang['admin']['event_desc_edituserpost'] = 'Envoy&eacute; apr&egrave;s que l&#039;&eacute;dition d&#039;un utilisateur ait &eacute;t&eacute; enregistr&eacute;e';
$lang['admin']['event_desc_deleteuserpre'] = 'Envoy&eacute; avant qu&#039;un utilisateur soit supprim&eacute; du syst&egrave;me';
$lang['admin']['event_desc_deleteuserpost'] = 'Envoy&eacute; apr&egrave;s qu&#039;un utilisateur ait &eacute;t&eacute; supprim&eacute; du syst&egrave;me';
$lang['admin']['event_desc_addgrouppre'] = 'Envoy&eacute; avant qu&#039;un nouveau groupe soit cr&eacute;&eacute;';
$lang['admin']['event_desc_addgrouppost'] = 'Envoy&eacute; apr&egrave;s qu&#039;un nouveau groupe ait &eacute;t&eacute; cr&eacute;&eacute;';
$lang['admin']['event_desc_changegroupassignpre'] = 'Envoy&eacute; avant qu&#039;un assignement &agrave; un groupe soit enregistr&eacute;';
$lang['admin']['event_desc_changegroupassignpost'] = 'Envoy&eacute; apr&egrave;s qu&#039;un assignement &agrave; un groupe ait &eacute;t&eacute; enregistr&eacute;';
$lang['admin']['event_desc_editgrouppre'] = 'Envoy&eacute; avant que l&#039;&eacute;dition d&#039;un groupe soit enregistr&eacute;e';
$lang['admin']['event_desc_editgrouppost'] = 'Envoy&eacute; apr&egrave;s que l&#039;&eacute;dition d&#039;un groupe ait &eacute;t&eacute; enregistr&eacute;e';
$lang['admin']['event_desc_deletegrouppre'] = 'Envoy&eacute; avant qu&#039;un groupe soit supprim&eacute; du syst&egrave;me';
$lang['admin']['event_desc_deletegrouppost'] = 'Envoy&eacute; apr&egrave;s qu&#039;un groupe ait &eacute;t&eacute; supprim&eacute; du syst&egrave;me';
$lang['admin']['event_desc_addstylesheetpre'] = 'Envoy&eacute; avant qu&#039;une nouvelle feuille de style soit cr&eacute;&eacute;e';
$lang['admin']['event_desc_addstylesheetpost'] = 'Envoy&eacute; apr&egrave;s qu&#039;une nouvelle feuille de style ait &eacute;t&eacute; cr&eacute;&eacute;e';
$lang['admin']['event_desc_editstylesheetpre'] = 'Envoy&eacute; avant que l&#039;&eacute;dition d&#039;une feuille de style soit enregistr&eacute;e';
$lang['admin']['event_desc_editstylesheetpost'] = 'Envoy&eacute; apr&egrave;s que l&#039;&eacute;dition d&#039;une feuille de style ait &eacute;t&eacute; enregistr&eacute;e';
$lang['admin']['event_desc_deletestylesheetpre'] = 'Envoy&eacute; avant qu&#039;une feuille de style soit supprim&eacute;e du syst&egrave;me';
$lang['admin']['event_desc_deletestylesheetpost'] = 'Envoy&eacute; apr&egrave;s qu&#039;une feuille de style ait &eacute;t&eacute; supprim&eacute;e du syst&egrave;me';
$lang['admin']['event_desc_addtemplatepre'] = 'Envoy&eacute; avant qu&#039;un nouveau gabarit soit cr&eacute;&eacute;';
$lang['admin']['event_desc_addtemplatepost'] = 'Envoy&eacute; apr&egrave;s qu&#039;un nouveau gabarit aie &eacute;t&eacute; cr&eacute;&eacute;';
$lang['admin']['event_desc_edittemplatepre'] = 'Envoy&eacute; avant que l&#039;&eacute;dition d&#039;un gabarit soit enregistr&eacute;e';
$lang['admin']['event_desc_edittemplatepost'] = 'Envoy&eacute; apr&egrave;s que l&#039;&eacute;dition d&#039;un gabarit ait &eacute;t&eacute; enregistr&eacute;e';
$lang['admin']['event_desc_deletetemplatepre'] = 'Envoy&eacute; avant qu&#039;un gabarit soit supprim&eacute; du syst&egrave;me';
$lang['admin']['event_desc_deletetemplatepost'] = 'Envoy&eacute; apr&egrave;s qu&#039;un gabarit ait &eacute;t&eacute; supprim&eacute; du syst&egrave;me';
$lang['admin']['event_desc_templateprecompile'] = 'Envoy&eacute; avant qu&#039;un gabarit soit envoy&eacute; &agrave; Smarty pour &ecirc;tre trait&eacute;';
$lang['admin']['event_desc_templatepostcompile'] = 'Envoy&eacute; apr&egrave;s qu&#039;un gabarit ait &eacute;t&eacute; trait&eacute; par Smarty';
$lang['admin']['event_desc_addglobalcontentpre'] = 'Envoy&eacute; avant qu&#039;un nouveau bloc de contenu global soit cr&eacute;&eacute;';
$lang['admin']['event_desc_addglobalcontentpost'] = 'Envoy&eacute; apr&egrave;s qu&#039;un nouveau bloc de contenu global aie &eacute;t&eacute; cr&eacute;&eacute;';
$lang['admin']['event_desc_editglobalcontentpre'] = 'Envoy&eacute; avant que l&#039;&eacute;dition d&#039;un bloc de contenu global soit enregistr&eacute;e';
$lang['admin']['event_desc_editglobalcontentpost'] = 'Envoy&eacute; apr&egrave;s que l&#039;&eacute;dition d&#039;un bloc de contenu global ait &eacute;t&eacute; enregistr&eacute;e';
$lang['admin']['event_desc_deleteglobalcontentpre'] = 'Envoy&eacute; avant qu&#039;un bloc de contenu global soit supprim&eacute; du syst&egrave;me';
$lang['admin']['event_desc_deleteglobalcontentpost'] = 'Envoy&eacute; apr&egrave;s qu&#039;un bloc de contenu global ait &eacute;t&eacute; supprim&eacute; du syst&egrave;me';
$lang['admin']['event_desc_globalcontentprecompile'] = 'Envoy&eacute; avant qu&#039;un bloc de contenu global soit envoy&eacute; &agrave; Smarty pour &ecirc;tre trait&eacute;';
$lang['admin']['event_desc_globalcontentpostcompile'] = 'Envoy&eacute; apr&egrave;s qu&#039;un bloc de contenu global ait &eacute;t&eacute; trait&eacute; par Smarty';
$lang['admin']['event_desc_contenteditpre'] = 'Envoy&eacute; avant que l&#039;&eacute;dition d&#039;un contenu soit enregistr&eacute;e';
$lang['admin']['event_desc_contenteditpost'] = 'Envoy&eacute; apr&egrave;s que l&#039;&eacute;dition d&#039;un contenu ait &eacute;t&eacute; enregistr&eacute;e';
$lang['admin']['event_desc_contentdeletepre'] = 'Envoy&eacute; avant qu&#039;un contenu soit supprim&eacute; du syst&egrave;me';
$lang['admin']['event_desc_contentdeletepost'] = 'Envoy&eacute; apr&egrave;s qu&#039;un contenu ait &eacute;t&eacute; supprim&eacute; du syst&egrave;me';
$lang['admin']['event_desc_contentstylesheet'] = 'Envoy&eacute; avant qu&#039;une feuille de style soit envoy&eacute;e au navigateur';
$lang['admin']['event_desc_contentprecompile'] = 'Envoy&eacute; avant qu&#039;un contenu soit envoy&eacute; &agrave; Smarty pour &ecirc;tre trait&eacute;';
$lang['admin']['event_desc_contentpostcompile'] = 'Envoy&eacute; apr&egrave;s qu&#039;un contenu ait &eacute;t&eacute; trait&eacute; par Smarty';
$lang['admin']['event_desc_contentpostrender'] = 'Envoy&eacute; avant que le code html combin&eacute; soit envoy&eacute; au navigateur';
$lang['admin']['event_desc_smartyprecompile'] = 'Envoy&eacute; avant que tout contenu destin&eacute; &agrave; Smarty lui soit envoy&eacute; pour &ecirc;tre trait&eacute;';
$lang['admin']['event_desc_smartypostcompile'] = 'Envoy&eacute; apr&egrave;s que tout contenu destin&eacute; &agrave; Smarty ait &eacute;t&eacute; trait&eacute;';
$lang['admin']['event_help_loginpost'] = '<p>Envoy&eacute; apr&egrave;s la connexion d&#039;un utilisateur dans le panneau d&#039;administration.</p>
<h4>Param&egrave;tres</h4>
<ol>
<li>&#039;user&#039; - R&eacute;f&eacute;rence &agrave; l&#039;objet utilisateur concern&eacute;.</li>
</ol>
';
$lang['admin']['event_help_logoutpost'] = '<p>Envoy&eacute; apr&egrave;s la d&eacute;connexion d&#039;un utilisateur du panneau d&#039;administration.</p>
<h4>Param&egrave;tres</h4>
<ol>
<li>&#039;user&#039; - R&eacute;f&eacute;rence &agrave; l&#039;objet utilisateur concern&eacute;.</li>
</ol>
';
$lang['admin']['event_help_adduserpre'] = '<p>Envoy&eacute; avant qu&#039;un nouvel utilisateur soit cr&eacute;&eacute;.</p>
<h4>Param&egrave;tres</h4>
<ol>
<li>&#039;user&#039; - R&eacute;f&eacute;rence &agrave; l&#039;objet utilisateur concern&eacute;.</li>
</ol>
';
$lang['admin']['event_help_adduserpost'] = '<p>Envoy&eacute; apr&egrave;s qu&#039;un nouvel utilisateur aie &eacute;t&eacute; cr&eacute;&eacute;.</p>
<h4>Param&egrave;tres</h4>
<ol>
<li>&#039;user&#039; - R&eacute;f&eacute;rence &agrave; l&#039;objet utilisateur concern&eacute;.</li>
</ol>
';
$lang['admin']['event_help_edituserpre'] = '<p>Envoy&eacute; avant que l&#039;&eacute;dition d&#039;un utilisateur soit enregistr&eacute;e.</p>
<h4>Param&egrave;tres</h4>
<ol>
<li>&#039;user&#039; - R&eacute;f&eacute;rence &agrave; l&#039;objet utilisateur concern&eacute;.</li>
</ol>
';
$lang['admin']['event_help_edituserpost'] = '<p>Envoy&eacute; apr&egrave;s que l&#039;&eacute;dition d&#039;un utilisateur aie &eacute;t&eacute; enregistr&eacute;e.</p>
<h4>Param&egrave;tres</h4>
<ol>
<li>&#039;user&#039; - R&eacute;f&eacute;rence &agrave; l&#039;objet utilisateur concern&eacute;.</li>
</ol>
';
$lang['admin']['event_help_deleteuserpre'] = '<p>Envoy&eacute; avant qu&#039;un utilisateur soit supprim&eacute; du syst&egrave;me.</p>
<h4>Param&egrave;tres</h4>
<ol>
<li>&#039;user&#039; - R&eacute;f&eacute;rence &agrave; l&#039;objet utilisateur concern&eacute;.</li>
</ol>
';
$lang['admin']['event_help_deleteuserpost'] = '<p>Envoy&eacute; apr&egrave;s qu&#039;un utilisateur ait &eacute;t&eacute; supprim&eacute; du syst&egrave;me.</p>
<h4>Param&egrave;tres</h4>
<ol>
<li>&#039;user&#039; - R&eacute;f&eacute;rence &agrave; l&#039;objet utilisateur concern&eacute;.</li>
</ol>
';
$lang['admin']['event_help_addgrouppre'] = '<p>Envoy&eacute; avant qu&#039;un nouveau groupe soit cr&eacute;&eacute;.</p>
<h4>Param&egrave;tres</h4>
<ol>
<li>&#039;group&#039; - R&eacute;f&eacute;rence &agrave; l&#039;objet groupe concern&eacute;.</li>
</ol>
';
$lang['admin']['event_help_addgrouppost'] = '<p>Envoy&eacute; apr&egrave;s qu&#039;un nouveau groupe ait &eacute;t&eacute; cr&eacute;&eacute;.</p>
<h4>Param&egrave;tres</h4>
<ol>
<li>&#039;group&#039; - R&eacute;f&eacute;rence &agrave; l&#039;objet groupe concern&eacute;.</li>
</ol>
';
$lang['admin']['event_help_changegroupassignpre'] = '<p>Envoy&eacute; avant qu&#039;une assignation &agrave; un groupe soit enregistr&eacute;e.</p>
<h4>Param&egrave;tres></h4>
<ul>
<li>&#039;group&#039; - R&eacute;f&eacute;rence &agrave; l&#039;objet groupe.</li>
<li>&#039;users&#039; - Tableau de r&eacute;f&eacute;rences aux objets utilisateur appartenant au groupe.</li>
';
$lang['admin']['event_help_changegroupassignpost'] = '<p>Envoy&eacute; apr&egrave;s qu&#039;une assignation &agrave; un groupe ait &eacute;t&eacute; enregistr&eacute;e.</p>
<h4>Param&egrave;tres></h4>
<ul>
<li>&#039;group&#039; - R&eacute;f&eacute;rence &agrave; l&#039;objet groupe concern&eacute;.</li>
<li>&#039;users&#039; - tableau de r&eacute;f&eacute;rences aux objets utilisateur appartenant maintenant au groupe concern&eacute;.</li>
';
$lang['admin']['event_help_editgrouppre'] = '<p>Envoy&eacute; avant que l&#039;&eacute;dition d&#039;un groupe soit enregistr&eacute;e.</p>
<h4>Param&egrave;tres</h4>
<ol>
<li>&#039;group&#039; - R&eacute;f&eacute;rence &agrave; l&#039;objet groupe concern&eacute;.</li>
</ol>
';
$lang['admin']['event_help_editgrouppost'] = '<p>Envoy&eacute; apr&egrave;s que l&#039;&eacute;dition d&#039;un groupe ait &eacute;t&eacute; enregistr&eacute;e.</p>
<h4>Param&egrave;tres</h4>
<ol>
<li>&#039;group&#039; - R&eacute;f&eacute;rence &agrave; l&#039;objet groupe concern&eacute;.</li>
</ol>
';
$lang['admin']['event_help_deletegrouppre'] = '<p>Envoy&eacute; avant qu&#039;un groupe soit supprim&eacute; du syst&egrave;me.</p>
<h4>Param&egrave;tres</h4>
<ol>
<li>&#039;group&#039; - R&eacute;f&eacute;rence &agrave; l&#039;objet groupe concern&eacute;.</li>
</ol>
';
$lang['admin']['event_help_deletegrouppost'] = '<p>Envoy&eacute; apr&egrave;s qu&#039;un groupe ait &eacute;t&eacute; supprim&eacute; du syst&egrave;me.</p>
<h4>Param&egrave;tres</h4>
<ol>
<li>&#039;group&#039; - R&eacute;f&eacute;rence &agrave; l&#039;objet groupe concern&eacute;.</li>
</ol>
';
$lang['admin']['event_help_addstylesheetpre'] = '<p>Envoy&eacute; avant qu&#039;une nouvelle feuille de style soit cr&eacute;&eacute;e.</p>
<h4>Param&egrave;tres</h4>
<ol>
<li>&#039;stylesheet&#039; - R&eacute;f&eacute;rence &agrave; l&#039;objet feuille de style concern&eacute;.</li>
</ol>
';
$lang['admin']['event_help_addstylesheetpost'] = '<p>Envoy&eacute; apr&egrave;s qu&#039;une nouvelle feuille de style ait &eacute;t&eacute; cr&eacute;&eacute;e.</p>
<h4>Param&egrave;tres</h4>
<ol>
<li>&#039;stylesheet&#039; - R&eacute;f&eacute;rence &agrave; l&#039;objet feuille de style concern&eacute;.</li>
</ol>
';
$lang['admin']['event_help_editstylesheetpre'] = '<p>Envoy&eacute; avant que l&#039;&eacute;dition d&#039;une feuille de style ne soit enregistr&eacute;e.</p>
<h4>Param&egrave;tres</h4>
<ol>
<li>&#039;stylesheet&#039; - R&eacute;f&eacute;rence &agrave; l&#039;objet feuille de style concern&eacute;.</li>
</ol>
';
$lang['admin']['event_help_editstylesheetpost'] = '<p>Envoy&eacute; apr&egrave;s que l&#039;&eacute;dition d&#039;une feuille de style ait &eacute;t&eacute; enregistr&eacute;e.</p>
<h4>Param&egrave;tres</h4>
<ol>
<li>&#039;stylesheet&#039; - R&eacute;f&eacute;rence &agrave; l&#039;objet feuille de style concern&eacute;.</li>
</ol>
';
$lang['admin']['event_help_deletestylesheetpre'] = '<p>Envoy&eacute; avant qu&#039;une feuille de style ne soit supprim&eacute;e du syst&egrave;me.</p>
<h4>Param&egrave;tres</h4>
<ol>
<li>&#039;stylesheet&#039; - R&eacute;f&eacute;rence &agrave; l&#039;objet feuille de style concern&eacute;.</li>
</ol>
';
$lang['admin']['event_help_deletestylesheetpost'] = '<p>Envoy&eacute; apr&egrave;s qu&#039;une feuille de style aie &eacute;t&eacute; supprim&eacute;e du syst&egrave;me.</p>
<h4>Param&egrave;tres</h4>
<ol>
<li>&#039;stylesheet&#039; - R&eacute;f&eacute;rence &agrave; l&#039;objet feuille de style concern&eacute;.</li>
</ol>
';
$lang['admin']['event_help_addtemplatepre'] = '<p>Envoy&eacute; avant qu&#039;un nouveau gabarit ne soit cr&eacute;&eacute;.</p>
<h4>Param&egrave;tres</h4>
<ol>
<li>&#039;template&#039; - R&eacute;f&eacute;rence &agrave; l&#039;objet gabarit concern&eacute;.</li>
</ol>
';
$lang['admin']['event_help_addtemplatepost'] = '<p>Envoy&eacute; apr&egrave;s qu&#039;un nouveau gabarit ait &eacute;t&eacute; cr&eacute;&eacute;.</p>
<h4>Param&egrave;tres</h4>
<ol>
<li>&#039;template&#039; - R&eacute;f&eacute;rence &agrave; l&#039;objet gabarit concern&eacute;.</li>
</ol>
';
$lang['admin']['event_help_edittemplatepre'] = '<p>Envoy&eacute; avant que l&#039;&eacute;dition d&#039;un gabarit ne soit enregistr&eacute;e.</p>
<h4>Param&egrave;tres</h4>
<ol>
<li>&#039;template&#039; - R&eacute;f&eacute;rence &agrave; l&#039;objet gabarit concern&eacute;.</li>
</ol>
';
$lang['admin']['event_help_edittemplatepost'] = '<p>Envoy&eacute; apr&egrave;s que l&#039;&eacute;dition d&#039;un gabarit ait &eacute;t&eacute; enregistr&eacute;e.</p>
<h4>Param&egrave;tres</h4>
<ol>
<li>&#039;template&#039; - R&eacute;f&eacute;rence &agrave; l&#039;objet gabarit concern&eacute;.</li>
</ol>
';
$lang['admin']['event_help_deletetemplatepre'] = '<p>Envoy&eacute; avant qu&#039;un gabarit ne soit supprim&eacute; du syst&egrave;me.</p>
<h4>Param&egrave;tres</h4>
<ol>
<li>&#039;template&#039; - R&eacute;f&eacute;rence &agrave; l&#039;objet gabarit concern&eacute;.</li>
</ol>
';
$lang['admin']['event_help_deletetemplatepost'] = '<p>Envoy&eacute; apr&egrave;s qu&#039;un gabarit ait &eacute;t&eacute; supprim&eacute; du syst&egrave;me.</p>
<h4>Param&egrave;tres</h4>
<ol>
<li>&#039;template&#039; - R&eacute;f&eacute;rence &agrave; l&#039;objet gabarit concern&eacute;.</li>
</ol>
';
$lang['admin']['event_help_templateprecompile'] = '<p>Envoy&eacute; avant qu&#039;un gabarit soit envoy&eacute; &agrave; Smarty pour &ecirc;tre trait&eacute;.</p>
<h4>Param&egrave;tres</h4>
<ol>
<li>&#039;template&#039; - R&eacute;f&eacute;rence au texte du gabarit concern&eacute;.</li>
</ol>
';
$lang['admin']['event_help_templatepostcompile'] = '<p>Envoy&eacute; apr&egrave;s qu&#039;un gabarit ait &eacute;t&eacute; trait&eacute; par Smarty.</p>
<h4>Param&egrave;tres</h4>
<ol>
<li>&#039;template&#039; - R&eacute;f&eacute;rence au texte du gabarit concern&eacute;.</li>
</ol>
';
$lang['admin']['event_help_addglobalcontentpre'] = '<p>Envoy&eacute; avant qu&#039;un nouveau bloc de contenu global ne soit cr&eacute;&eacute;.</p>
<h4>Param&egrave;tres</h4>
<ol>
<li>&#039;global_content&#039; - R&eacute;f&eacute;rence &agrave; l&#039;objet bloc de contenu global concern&eacute;.</li>
</ol>
';
$lang['admin']['event_help_addglobalcontentpost'] = '<p>Envoy&eacute; apr&egrave;s qu&#039;un nouveau bloc de contenu global ait &eacute;t&eacute; cr&eacute;&eacute;.</p>
<h4>Param&egrave;tres</h4>
<ol>
<li>&#039;global_content&#039; - R&eacute;f&eacute;rence &agrave; l&#039;objet bloc de contenu global concern&eacute;.</li>
</ol>
';
$lang['admin']['event_help_editglobalcontentpre'] = '<p>Envoy&eacute; avant que l&#039;&eacute;dition d&#039;un bloc de contenu global soit enregistr&eacute;e.</p>
<h4>Param&egrave;tres</h4>
<ol>
<li>&#039;global_content&#039; - R&eacute;f&eacute;rence &agrave; l&#039;objet bloc de contenu global concern&eacute;.</li>
</ol>
';
$lang['admin']['event_help_editglobalcontentpost'] = '<p>Envoy&eacute; apr&egrave;s que l&#039;&eacute;dition d&#039;un bloc de contenu global ait &eacute;t&eacute; enregistr&eacute;e.</p>
<h4>Param&egrave;tres</h4>
<ol>
<li>&#039;global_content&#039; - R&eacute;f&eacute;rence &agrave; l&#039;objet bloc de contenu global concern&eacute;.</li>
</ol>
';
$lang['admin']['event_help_deleteglobalcontentpre'] = '<p>Envoy&eacute; avant qu&#039;un bloc de contenu global soit supprim&eacute; du syst&egrave;me.</p>
<h4>Param&egrave;tres</h4>
<ol>
<li>&#039;global_content&#039; - R&eacute;f&eacute;rence &agrave; l&#039;objet bloc de contenu global concern&eacute;.</li>
</ol>
';
$lang['admin']['event_help_deleteglobalcontentpost'] = '<p>Envoy&eacute; apr&egrave;s qu&#039;un bloc de contenu global ait &eacute;t&eacute; supprim&eacute; du syst&egrave;me.</p>
<h4>Param&egrave;tres</h4>
<ol>
<li>&#039;global_content&#039; - R&eacute;f&eacute;rence &agrave; l&#039;objet bloc de contenu global concern&eacute;.</li>
</ol>
';
$lang['admin']['event_help_globalcontentprecompile'] = '<p>Envoy&eacute; avant qu&#039;un bloc de contenu global soit envoy&eacute; &agrave; Smarty pour &ecirc;tre trait&eacute;.</p>
<h4>Param&egrave;tres</h4>
<ol>
<li>&#039;global_content&#039; - R&eacute;f&eacute;rence au texte du bloc de contenu global concern&eacute;.</li>
</ol>
';
$lang['admin']['event_help_globalcontentpostcompile'] = '<p>Envoy&eacute; apr&egrave;s qu&#039;un bloc de contenu global ait &eacute;t&eacute; trait&eacute; par Smarty.</p>
<h4>Param&egrave;tres</h4>
<ol>
<li>&#039;global_content&#039; - R&eacute;f&eacute;rence au texte du bloc de contenu global concern&eacute;.</li>
</ol>
';
$lang['admin']['event_help_contenteditpre'] = '<p>Envoy&eacute; avant que l&#039;&eacute;dition d&#039;un contenu soit enregistr&eacute;e.</p>
<h4>Param&egrave;tres</h4>
<ol>
<li>&#039;global_content&#039; - R&eacute;f&eacute;rence &agrave; l&#039;objet contenu concern&eacute;.</li>
</ol>
';
$lang['admin']['event_help_contenteditpost'] = '<p>Envoy&eacute; apr&egrave;s que l&#039;&eacute;dition d&#039;un contenu ait &eacute;t&eacute; enregistr&eacute;e.</p>
<h4>Param&egrave;tres</h4>
<ol>
<li>&#039;content&#039; - R&eacute;f&eacute;rence &agrave; l&#039;objet contenu concern&eacute;.</li>
</ol>
';
$lang['admin']['event_help_contentdeletepre'] = '<p>Envoy&eacute; avant qu&#039;un contenu ne soit supprim&eacute; du syst&egrave;me.</p>
<h4>Param&egrave;tres</h4>
<ol>
<li>&#039;content&#039; - R&eacute;f&eacute;rence &agrave; l&#039;objet contenu concern&eacute;.</li>
</ol>
';
$lang['admin']['event_help_contentdeletepost'] = '<p>Envoy&eacute; apr&egrave;s qu&#039;un contenu ait &eacute;t&eacute; supprim&eacute; du syst&egrave;me.</p>
<h4>Param&egrave;tres</h4>
<ol>
<li>&#039;content&#039; - R&eacute;f&eacute;rence &agrave; l&#039;objet contenu concern&eacute;.</li>
</ol>
';
$lang['admin']['event_help_contentstylesheet'] = '<p>Envoy&eacute; avant qu&#039;une feuille de style ne soit envoy&eacute;e au navigateur.</p>
<h4>Param&egrave;tres</h4>
<ol>
<li>&#039;content&#039; - R&eacute;f&eacute;rence au texte de la feuille de style concern&eacute;e.</li>
</ol>
';
$lang['admin']['event_help_contentprecompile'] = '<p>Envoy&eacute; avant qu&#039;un contenu ne soit envoy&eacute; &agrave; Smarty pour &ecirc;tre trait&eacute;.</p>
<h4>Param&egrave;tres</h4>
<ol>
<li>&#039;content&#039; - R&eacute;f&eacute;rence au texte du contenu concern&eacute;.</li>
</ol>
';
$lang['admin']['event_help_contentpostcompile'] = '<p>Envoy&eacute; apr&egrave;s qu&#039;un contenu ait &eacute;t&eacute; trait&eacute; par Smarty.</p>
<h4>Param&egrave;tres</h4>
<ol>
<li>&#039;content&#039; - R&eacute;f&eacute;rence au texte du contenu concern&eacute;.</li>
</ol>
';
$lang['admin']['event_help_contentpostrender'] = '<p>Envoy&eacute; avant que le code html combin&eacute; soit envoy&eacute; au navigateur.</p>
<h4>Param&egrave;tres</h4>
<ol>
<li>&#039;content&#039; - R&eacute;f&eacute;rence au texte html.</li>
</ol>
';
$lang['admin']['event_help_smartyprecompile'] = '<p>Envoy&eacute; avant que tout contenu destin&eacute; &agrave; Smarty lui soit envoy&eacute; pour &ecirc;tre trait&eacute;.</p>
<h4>Param&egrave;tres</h4>
<ol>
<li>&#039;content&#039; - R&eacute;f&eacute;rence au texte concern&eacute;.</li>
</ol>
';
$lang['admin']['event_help_smartypostcompile'] = '<p>Envoy&eacute; apr&egrave;s que tout contenu destin&eacute; &agrave; Smarty ait &eacute;t&eacute; trait&eacute;.</p>
<h4>Param&egrave;tres</h4>
<ol>
<li>&#039;content&#039; - R&eacute;f&eacute;rence au texte concern&eacute;.</li>
</ol>
';
$lang['admin']['filterbymodule'] = 'Filtrer par module';
$lang['admin']['showall'] = 'Tout afficher';
$lang['admin']['core'] = 'Noyau';
$lang['admin']['defaultpagecontent'] = 'Contenu de page par d&eacute;faut&nbsp;';
$lang['admin']['file_url'] = 'Lien au fichier (au lieu d&#039;un URL)&nbsp;';
$lang['admin']['no_file_url'] = 'Aucun (Utiliser l&#039;URL ci-dessus)';
$lang['admin']['defaultparentpage'] = 'Page parent par d&eacute;faut ';
$lang['admin']['error_udt_name_whitespace'] = 'Erreur&nbsp;:&nbsp;Le nom de la balise Utilisateur ne doit pas comporter d&#039;espace.';
$lang['admin']['warning_safe_mode'] = '<strong><em>ATTENTION&nbsp;:&nbsp;</em></strong> PHP Safe mode est activ&eacute;. Cela peut causer des difficult&eacute;s avec les fichiers upload&eacute;s par l&#039;interface web, y compris les images, th&egrave;mes et les modules XML. Vous devez contacter votre administrateur pour d&eacute;sactiver le Safe mode.';
$lang['admin']['test'] = 'Test ';
$lang['admin']['results'] = 'R&eacute;sultats  ';
$lang['admin']['untested'] = 'Non test&eacute;';
$lang['admin']['unknown'] = 'Inconnu';
$lang['admin']['download'] = 'T&eacute;l&eacute;charger';
$lang['admin']['frontendwysiwygtouse'] = 'WYSIWYG de la partie publique&nbsp;';
$lang['admin']['all_groups'] = 'Tous les groupes';
$lang['admin']['error_type'] = 'Type d&#039;erreur';
$lang['admin']['contenttype_errorpage'] = 'Page d&#039;erreur';
$lang['admin']['errorpagealreadyinuse'] = 'Code d&#039;erreur d&eacute;j&agrave; utilis&eacute;';
$lang['admin']['404description'] = 'Page non trouv&eacute;e';
$lang['admin']['usernotfound'] = 'Utilisateur non trouv&eacute;';
$lang['admin']['passwordchange'] = 'Merci d&#039;entrer le nouveau mot de passe';
$lang['admin']['recoveryemailsent'] = 'Courrier &eacute;lectronique envoy&eacute; &agrave; l&#039;adresse enregistr&eacute;e. S&#039;il vous pla&icirc;t v&eacute;rifier votre bo&icirc;te de r&eacute;ception pour plus d&#039;instructions.';
$lang['admin']['errorsendingemail'] = 'Erreur sur l&#039;envoi du message. Contactez votre administrateur.';
$lang['admin']['passwordchangedlogin'] = 'Mot de passe chang&eacute;. Merci de vous connecter en utilisant les nouveaux identifiants.';
$lang['admin']['nopasswordforrecovery'] = 'Aucune adresse email pour cet utilisateur. R&eacute;cup&eacute;ration de mot de passe impossible. Merci de contacter votre administrateur.';
$lang['admin']['lostpw'] = 'Mot de passe oubli&eacute; ?';
$lang['admin']['lostpwemailsubject'] = '[%s] R&eacute;cup&eacute;ration du mot de passe';
$lang['admin']['lostpwemail'] = 'Vous recevez ce courrier &eacute;lectronique parce qu&#039;une demande a &eacute;t&eacute; faite pour modifier le mot de passe (%s) associ&eacute; &agrave; ce compte d&#039;utilisateur (%s). Si vous souhaitez r&eacute;initialiser le mot de passe pour ce compte, cliquez simplement sur le lien ci-dessous ou collez-le dans la barre d&#039;adresse de votre navigateur pr&eacute;f&eacute;r&eacute; :
%s

Si vous pensez qu&#039;il s&#039;agit d&#039;une erreur, ignorez tout simplement ce message.';
$lang['admin']['utma'] = '156861353.1474388897.1278169512.1278169512.1278169512.1';
$lang['admin']['utmc'] = '156861353';
$lang['admin']['utmz'] = '156861353.1278169512.1.1.utmccn=(direct)|utmcsr=(direct)|utmcmd=(none)';
$lang['admin']['utmb'] = '156861353';
?>