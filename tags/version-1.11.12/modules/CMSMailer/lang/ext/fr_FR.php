<?php
$lang['warning_cron_updated'] = 'Ce test est généré sur une base peu fréquente. Il peut prendre un certain temps pour se terminer.';
$lang['none'] = 'Aucun';
$lang['ssl'] = 'SSL&nbsp;';
$lang['tls'] = 'TLS&nbsp;';
$lang['secure'] = 'Protocole de sécurisation&nbsp;';
$lang['info_secure'] = 'Applicable uniquement à la méthode de courrier SMTP, cette option permet de spécifier les différents protocoles de sécurisation pour la connexion';
$lang['info_cmsmailer'] = 'Ce module est utilisé par de nombreux autres modules pour faciliter l\'envoi d\'emails. Il doit être correctement configuré conformément aux exigences de votre hébergeur. Utilisez les informations fournies par votre hébergeur pour régler ces paramètres. Si vous ne parvenez toujours pas à envoyer le message de test correctement, contactez votre hébergeur pour obtenir de l\'aide.';
$lang['charset'] = 'Format d\'encodage des caractères&nbsp;';
$lang['sendtestmailconfirm'] = 'Ceci va envoyer un message de test à l\'adresse spécifiée. Si le processus d\'envoi s\'effectue correctement, vous serez redirigé à nouveau vers cette page. Voulez-vous continuer&nbsp;?';
$lang['settingsconfirm'] = 'Enregistrer les valeurs actuelles dans la configuration de CMSMailer&nbsp;?';
$lang['testsubject'] = 'Message de test de CMSMailer';
$lang['testbody'] = 'Ce message est une vérification de la validité des paramètres du module CMSMailer.
Si vous le reçevez c\'est que tout fonctionne.';
$lang['error_notestaddress'] = 'Erreur&nbsp;: adresse de test non spécifiée';
$lang['prompt_testaddress'] = 'Adresse email de test&nbsp;';
$lang['sendtest'] = 'Envoyer le message de test';
$lang['password'] = 'Mot de passe&nbsp;';
$lang['username'] = 'Identifiant&nbsp;';
$lang['smtpauth'] = 'Authentification SMTP&nbsp;';
$lang['mailer'] = 'Méthode d\'envoi des emails&nbsp;';
$lang['host'] = 'Nom du serveur SMTP<br/><i>(ou adresse IP)</i>&nbsp;';
$lang['port'] = 'Port du serveur SMTP&nbsp;';
$lang['from'] = 'Adresse de l\'expéditeur&nbsp;';
$lang['fromuser'] = 'Identifiant de l\'expéditeur&nbsp;';
$lang['sendmail'] = 'Emplacement de Sendmail&nbsp;';
$lang['timeout'] = 'Délai SMTP avant erreur&nbsp;';
$lang['submit'] = 'Envoyer';
$lang['cancel'] = 'Annuler';
$lang['info_mailer'] = 'Méthode mail à utiliser (sendmail, smtp, mail). SMTP est habituellement le plus sûr.';
$lang['info_host'] = 'Nom du serveur SMTP (seulement valable pour la méthode mail SMTP).';
$lang['info_port'] = 'Numéro de port SMTP (usuellement 25) (seulement valable pour la méthode mail SMTP).';
$lang['info_from'] = 'Adresse utilisée en tant qu\'expéditeur pour tous les courriels (emails).<br/><strong> Remarque :</strong> cette adresse email doit être configurée correctement pour votre hébergement pour éviter des difficultés d\'envoi des emails.<br/>Si vous ne connaissez pas la valeur correcte de ce paramètre, vous devez prendre contact avec votre hébergeur.';
$lang['info_fromuser'] = 'Nom d\'expéditeur complet utilisé pour l\'envoi des courriels';
$lang['info_sendmail'] = 'Chemin complet vers votre exécutable sendmail (seulement valable pour la méthode sendmail)';
$lang['info_timeout'] = 'Nombre de secondes dans une conversation SMTP avant qu\'une erreur n\'apparaisse (seulement valable pour la méthode mail SMTP)';
$lang['info_smtpauth'] = 'Votre serveur SMTP requiert-il une authentification&nbsp;? (seulement valable pour la méthode mail SMTP)';
$lang['info_username'] = 'Nom d\'utilisateur de l\'authentification SMTP (seulement valable pour la méthode mail SMTP quand l\'authentification est sélectionnée)';
$lang['info_password'] = 'Mot de passe de l\'authentification SMTP (seulement valable pour la méthode mail SMTP quand l\'authentification est sélectionnée)';
$lang['friendlyname'] = 'CMSMailer&nbsp;';
$lang['postinstall'] = 'Le module CMSMailer a été correctement installé.';
$lang['postuninstall'] = 'Le module CMSMailer a été désinstallé.';
$lang['uninstalled'] = 'Module désinstallé.';
$lang['installed'] = 'La version %s du module a été installée.';
$lang['accessdenied'] = 'Accès refusé. Veuillez vérifier vos permissions.';
$lang['error'] = 'Erreur&nbsp;!';
$lang['upgraded'] = 'Le module a été mis à jour à la version %s.';
$lang['settings_title'] = 'Paramètres';
$lang['test_title'] = 'Tests';
$lang['title_mod_prefs'] = 'Préférences du module';
$lang['title_mod_admin'] = 'Panneau d\'administration du module';
$lang['title_admin_panel'] = 'CMSMailer';
$lang['moddescription'] = 'Ceci englobe simplement PHPMailer, il a un équivalent API (fonction pour fonction) et une interface simple pour les paramètres par défaut.';
$lang['changelog'] = '<ul>
<li>Version 1.73.1. Octobre 2005. Version initiale.</li>
<li>Version 1.73.2. Octobre 2005. Correction dans le panneau d\'administration.  La liste déroulante ne représentait pas la valeur actuelle de la base de données des préférences</li>
<li>Version 1.73.3. Octobre 2005. Petite correction lors de l\'envoi d\'email en format html</li>
<li>Version 1.73.4. Novembre 2005. Les champs du formulaire des préférences sont plus grands, résolu un problème avec fromuser, et appel du reset dans le constructeur</li>
<li>Version 1.73.5. Novembre 2005. Ajout de champs et fonctionnalités pour l\'authentification SMTP.</li>
<li>Version 1.73.6. Décembre 2005. La méthode mail par défaut lors de l\'installation est SMTP, documentation améliorée, les attachements sont supprimés, ainsi que les adresses, etc. lors du reset.</li>
<li>Version 1.73.7. Janvier 2006. Augmenté la taille des champs pour la plupart d\'entre eux</li>
<li>Version 1.73.8. Janvier 2006. Modifié le panneau des préférences pour le rendre un peu plus descriptif.</li>
<li>Version 1.73.9. Janvier 2006. Ajouté la possibilité du test email, et une confirmation à chaque bouton (sauf Annuler)</li>
<li>Version 1.73.10. Août 2006. Modifié pour l\'utilisation du "lazy loading" pour minimiser les besoins mémoire lorsque CMSMailer n\'est pas utilisé.</li>
<li>Version 1.73.13. Janvier 2008.  Ajout de plus de vérifications de permissions.</li>
<li>Version 2.0.0 - 19 avril 2010 - Révision 29, 2010-04-19.</li>
<li>Version 2.0.1 - janvier 2011 - Suppression du bouton Annuler.</li>
<li>Version 2.0.2 - Septembre 2011 - Charset utf-8 par défaut.</li>
</ul>';
$lang['help'] = '<h3>Que fait ce module&nbsp;?</h3>
<p>Ce module n\'apporte pas de fonctionnalité pour l\'utilisateur final.  Il a été écrit pour être intégré dans d\'autres modules et fournir des possibilités d\'envoi de courriels.  Voilà, rien de plus.</p>
<h3>Comment l\'utiliser&nbsp;?</h3>
<p>Ce module englobe toutes les méthodes et variables de phpmailer. Il est construit de manière à pouvoir être utilisé par les développeurs des autres modules, voir l\'exemple ci-dessous et une brève référence API. Veuillez lire la documentation de PHPMailer pour plus d\'information.</p>
<h3>Un exemple</h3>
<pre>
  $cmsmailer = $this->GetModuleInstance(\'CMSMailer\');
  $cmsmailer->AddAddress(\'calguy1000@hotmail.com\',\'calguy\');
  $cmsmailer->SetBody(\'<b>Ceci est un message de test</b>\');
  $cmsmailer->IsHTML(true);
  $cmsmailer->SetSubject(\'Test message\');
  $cmsmailer->Send();
</pre>
<h3>API</h3>
<ul>
<li><p><b>void reset()</b></p>
<p>Réinitialise l\'object aux valeurs spécifiées dans le panneau d\'administration</p>
</li>
<li><p><b>string GetAltBody()</b></p>
<p>Renvoie le corps de remplacement de l\'email</p>
</li>
<li><p><b>void SetAltBody( $string )</b></p>
<p>Défini le corps de remplacement de l\'email</p>
</li>
<li><p><b>string GetBody()</b></p>
<p>Renvoie le corps principal de l\'email</p>
</li>
<li><p><b>void SetBody( $string )</b></p>
<p>Défini le corps principal de l\'email</p>
</li>
<li><p><b>string GetCharSet()</b></p>
<p>Défaut : iso-8859-1</p>
<p>Renvoie l\'encodage des caractères du mailer</p>
</li>
<li><p><b>void SetCharSet( $string )</b></p>
<p>Défini l\'encodage des caractères</p>
</li>
<li><p><b>string GetConfirmReadingTo()</b></p>
<p>Renvoie l\'adresse de confirmation de lecture</p>
</li>
<li><p><b>void SetConfirmReadingTo( $address )</b></p>
<p>Défini ou enlève l\'adresse de confirmation de lecture</p>
</li>
<li><p><b>string GetContentType()</b></p>
<p>Défaut: text/plain</p>
<p>Retourne le content type</p>
</li>
<li><p><b>void SetContentType()</b></p>
<p>Défini le content type</p>
</li>
<li><p><b>string GetEncoding()</b></p>
<p>Retourne l\'encodage</p>
</li>
<li><p><b>void SetEncoding( $encoding )</b></p>
<p>Défini l\'encodage</p>
<p>Les options sont: 8bit, 7bit, binary, base64, quoted-printable</p>
</li>
<li><p><b>string GetErrorInfo()</b></p>
<p>Retourne toute information d\'erreur</p>
</li>
<li><p><b>string GetFrom()</b></p>
<p>Retourne l\'adresse d\'origine en cours</p>
</li>
<li><p><b>void SetFrom( $address )</b></p>
<p>Défini l\'adresse d\'origine</p>
</li>
<li><p><b>string GetFromName()</b></p>
<p>Retourne le nom d\'origine en cours</p>
</li>
<li><p><b>SetFromName( $name )</b></p>
<p>Défini le nom d\'origine</p>
</li>
<li><p><b>string GetHelo()</b></p>
<p>Retourne le string HELO</p>
</li>
<li><p><b>SetHelo( $string )</b></p>
<p>Défini  le string HELO</p>
<p>Valeur par défaut : $hostname</p>
</li>
<li><p><b>string GetHost()</b></p>
<p>Retourne les hosts SMTPs séparés par des points-virgules</p>
</li>
<li><p><b>void SetHost( $string )</b></p>
<p>Défini les hosts</p>
</li>
<li><p><b>string GetHostName()</b></p>
<p>Retourne le nom du host utilisé pour le Helo SMTP</p>
</li>
<li><p><b>void SetHostName( $hostname )</b></p>
<p>Défini le nom du host utilisé pour le Helo SMTP</p>
</li>
<li><p><b>string GetMailer()</b></p>
<p>Retourne le mailer</p>
</li>
<li><p><b>void SetMailer( $mailer )</b></p>
<p>Défini le mailer : sendmail, mail, ou smtp</p>
</li>
<li><p><b>string GetPassword()</b></p>
<p>Retourne le mot de passe pour l\'authentification smtp</p>
</li>
<li><p><b>void SetPassword( $string )</b></p>
<p>Défini le mot de passe pour l\'authentification smtp</p>
</li>
<li><p><b>int GetPort()</b></p>
<p>Retourne le port pour les connexions smtp</p>
</li>
<li><p><b>void SetPort( $int )</b></p>
<p>Défini le port pour les connexions smtp</p>
</li>
<li><p><b>int GetPriority()</b></p>
<p>Retourne la priorité du message</p>
</li>
<li><p><b>void SetPriority( int )</b></p>
<p>Défini la priorité du message</p>
<p>Les valeurs sont 1=Haute, 3 = Normale, 5 = Basse</p>
</li>
<li><p><b>string GetSender()</b></p>
<p>Retourne l\'email de l\'expéditeur (adresse de réponse)</p>
</li>
<li><p><b>void SetSender( $address )</b></p>
<p>Défini l\'email de l\'expéditeur</p>
</li>
<li><p><b>string GetSendmail()</b></p>
<p>Retourne le chemin à sendmail</p>
</li>
<li><p><b>void SetSendmail( $path )</b></p>
<p>Défini le chemin à sendmail</p>
</li>
<li><p><b>bool GetSMTPAuth()</b></p>
<p>Retourne la valeur en cours du flag d\'authentification de smtp</p>
</li>
<li><p><b>SetSMTPAuth( $bool )</b></p>
<p>Défini la valeur en cours du flag d\'authentification de smtp</p>
</li>
<li><p><b>bool GetSMTPDebug()</b></p>
<p>Retourne la valeur du debug flag de SMTP</p>
</li>
<li><p><b>void SetSMTPDebug( $bool )</b></p>
<p>Défini la valeur du debug flag de SMTP</p>
</li>
<li><p><b>bool GetSMTPKeepAlive()</b></p>
<p>Retourne la valeur du keep alive flag de SMTP</p>
</li>
<li><p><b>SetSMTPKeepAlive( $bool )</b></p>
<p>Défini la valeur du keep alive flag de SMTP</p>
</li>
<li><p><b>string GetSubject()</b></p>
<p>Retourne le sujet en cours</p>
</li>
<li><p><b>void SetSubject( $string )</b></p>
<p>Défini le sujet</p>
</li>
<li><p><b>int GetTimeout()</b></p>
<p>Retourne la valeur du timeout</p>
</li>
<li><p><b>void SetTimeout( $seconds )</b></p>
<p>Défini la valeur du timeout</p>
</li>
<li><p><b>string GetUsername()</b></p>
<p>Retourne le nom d\'utilisateur de l\'authentification smtp</p>
</li>
<li><p><b>void SetUsername( $string )</b></p>
<p>Défini le nom d\'utilisateur de l\'authentification smtp</p>
</li>
<li><p><b>int GetWordWrap()</b></p>
<p>Retourne la valeur wordwrap</p>
</li>
<li><p><b>void SetWordWrap( $int )</b></p>
<p>Retourne la valeur wordwrap</p>
</li>
<li><p><b>AddAddress( $address, $name = \'\' )</b></p>
<p>Ajoute une adresse de destination</p>
</li>
<li><p><b>AddAttachment( $path, $name = \'\', $encoding = \'base64\', $type = \'application/octent-stream\' )</b></p>
<p>Ajoute un fichier attaché</p>
</li>
<li><p><b>AddBCC( $address, $name = \'\' )</b></p>
<p>Ajoute une adresse de destination cachée (BCC)</p>
</li>
<li><p><b>AddCC( $address, $name = \'\' )</b></p>
<p>Ajoute une adresse de destination copie (CC)</p>
</li>
<li><p><b>AddCustomHeader( $txt )</b></p>
<p>Ajoute un en-tête personnalisée au message</p>
</li>
<li><p><b>AddEmbeddedImage( $path, $cid, $name = \'\', $encoding = \'base64\', $type = \'application/octent-stream\' )</b></p>
<p>Ajoute une image incluse</p>
</li>
<li><p><b>AddReplyTo( $address, $name = \'\' )</b></p>
<p>Ajoute une adresse de réponse</p>
</li>
<li><p><b>AddStringAttachment( $string, $filename, $encoding = \'base64\', $type = \'application/octent-stream\' )</b></p>
<p>Ajoute un fichier attaché</p>
</li>
<li><p><b>ClearAddresses()</b></p>
<p>Efface toutes les adresses</p>
</li>
<li><p><b>ClearAllRecipients()</b></p>
<p>Efface tous les destinataires</p>
</li>
<li><p><b>ClearAttachments()</b></p>
<p>Efface tous les attachements</p>
</li>
<li><p><b>ClearBCCs()</b></p>
<p>Efface toutes les adresses BCC</p>
</li>
<li><p><b>ClearCCs()</b></p>
<p>Efface toutes les adresses CC</p>
</li>
<li><p><b>ClearCustomHeaders()</b></p>
<p>Efface toutes les en-têtes personnalisées</p>
</li>
<li><p><b>ClearReplyto()</b></p>
<p>Efface l\'adresse de réponse</p>
</li>
<li><p><b>IsError()</b></p>
<p>Vérifie une condition d\'erreur</p>
</li>
<li><p><b>bool IsHTML( $bool )</b></p>
<p>Défini le html flag</p>
<p><i>Note</i> si possible cela devrait être une méthode get et set</p>
</li>
<li><p><b>bool IsMail()</b></p>
<p>Vérifie si on utilise \'mail\'</p>
</li>
<li><p><b>bool IsQmail()</b></p>
<p>Vérifie si on utilise \'qmail\'</p>
</li>
<li><p><b>IsSendmail()</b></p>
<p>Vérifie si on utilise \'sendmail\'</p>
</li>
<li><p><b>IsSMTP()</b></p>
<p>Vérifie si on utilise \'smtp\'</p>
</li>
<li><p><b>Send()</b></p>
<p>Envoie le mail en cours de préparation</p>
</li>
<li><p><b>SetLanguage( $lang_type, $lang_path = \'\' )</b></p>
<p>Défini la langue <em>(optional)</em> language path</p>
</li>
<li><p><b>SmtpClose()</b></p>
<p>Ferme la connexion smtp</p>
</li>
</ul>
<h3>Support</h3>
<p>Ce module ne contient aucun support commercial. Cependant, ces ressources sont disponibles pour vous aider&nbsp;:</p>
<ul>
<li>Pour la dernière version de ce module, les FAQs, ou pour annoncer un bug, veuillez visiter la <a href="http://dev.cmsmadesimple.org/" target="_blank">forge de CMS Made Simple</a>.</li>
<li>Des discussions complémentaires relatives à ce module peuvent aussi être trouvées sur les <a href="http://forum.cmsmadesimple.org" target="_blank">Forums CMS Made Simple</a>.</li>
<li>L\'auteur, Calguy1000, est souvent sur IRC sur canal #cms: irc.freenode.net/#cms.</li>
<li>Et enfin, vous pouvez rencontrer un certain succès en envoyant un email directement à l\'auteur.</li>  
</ul>
<p>Conformément à la licence GPL, ce module est distribué tel quel. Veuillez vous référer directement à la licence pour tout avis de non responsabilité.</p>
<p>As per the GPL, this software is provided as-is. Please read the text of the license for the full disclaimer.</p>

<h3>Copyright et Licence</h3>
<p>Copyright © 2005, Robert Campbell <a href="mailto:calguy1000@hotmail.com">calguy1000@hotmail.com</a>. Tous droits réservés.</p>
<p>Ce module est distribué sous la licence <a href="http://www.gnu.org/licenses/licenses.html#GPL" target="_blank">GNU Public License</a>. Vous devez agréer aux termes de cette licence pour pouvoir utiliser ce module.</p>
<p>This module has been released under the <a href=\'http://www.gnu.org/licenses/licenses.html#GPL\'>GNU Public License</a>. You must agree to this license before using the module.</p>';
?>