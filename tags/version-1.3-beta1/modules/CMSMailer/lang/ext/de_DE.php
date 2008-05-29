<?php
$lang['charset'] = 'Zeichensatz';
$lang['sendtestmailconfirm'] = 'Hiermit wird eine Testnachricht an die festgelegte Adresse versandt. War der Versand erfolgreich, kehren Sie zu dieser Seite zur&uuml;ck. Wollen Sie dies?';
$lang['settingsconfirm'] = 'Sollen die aktuellen Werte der CMSMailer-Einstellungen gespeichert werden?';
$lang['testsubject'] = 'Testnachricht des CMSMailer-Moduls';
$lang['testbody'] = 'Dieser Nachricht dient der &Uuml;berpr&uuml;fung der Einstellungen des CMSMailer-Moduls. Wenn Sie diese empfangen haben, sind die Einstellungen korrekt.';
$lang['error_notestaddress'] = 'Fehler: Die Testadresse wurde nicht festgelegt!';
$lang['prompt_testaddress'] = 'Test-Emailadresse';
$lang['sendtest'] = 'Testnachricht senden';
$lang['password'] = 'Passwort';
$lang['username'] = 'Benutzername';
$lang['smtpauth'] = 'SMTP Authentifizierung';
$lang['mailer'] = 'Mailmethode';
$lang['host'] = 'SMTP-Hostname<br /><i>(oder IP-Adresse)</i>';
$lang['port'] = 'Port des SMTP-Servers';
$lang['from'] = '&quot;Von&quot;-Adresse';
$lang['fromuser'] = '&quot;Von&quot;-Username';
$lang['sendmail'] = 'Sendmail-Pfad';
$lang['timeout'] = 'SMTP-Timeout';
$lang['submit'] = 'Absenden';
$lang['cancel'] = 'Abbrechen';
$lang['info_mailer'] = 'Verwendete Mailmethode (sendmail, smtp, mail). SMTP ist die verl&auml;sslichste Methode.';
$lang['info_host'] = 'SMTP-Hostname (nur f&uuml;r die SMTP-Mailmethode g&uuml;ltig)';
$lang['info_port'] = 'SMTP-Portnummer (&uuml;blicherweise 25) (nur f&uuml;r die SMTP-Mailmethode g&uuml;ltig)';
$lang['info_from'] = 'Email-Adresse, die als Absender f&uuml;r alle Emails verwendet werden soll';
$lang['info_fromuser'] = 'Realname, der als Absender f&uuml;r alle Emails verwendet werden soll';
$lang['info_sendmail'] = 'Der komplette Pfad zu Ihrem sendmail-Programm (nur f&uuml;r die SMTP-Mailmethode g&uuml;ltig)';
$lang['info_timeout'] = 'Dauer der SMTP-Konversation in Sekunden, bevor eine Fehlermeldung ausgegeben wird (nur f&uuml;r die SMTP-Mailmethode g&uuml;ltig)';
$lang['info_smtpauth'] = 'Ben&ouml;tigt Ihr SMTP-Host eine Authentifizierung? (nur f&uuml;r die SMTP-Mailmethode g&uuml;ltig)';
$lang['info_username'] = 'SMTP-Authentifizierungs-Benutzername (nur f&uuml;r die SMTP-Mailmethode g&uuml;ltig, wenn SMTP-Authentifizierung gew&auml;hlt wurde)';
$lang['info_password'] = 'SMTP-Authentifizierungs-Passwort (nur f&uuml;r die SMTP-Mailmethode g&uuml;ltig, wenn SMTP-Authentifizierung gew&auml;hlt wurde)';
$lang['friendlyname'] = 'CMSMailer-Modul';
$lang['postinstall'] = 'Das CMSMailer-Modul wurde erfolgreich installiert.';
$lang['postuninstall'] = 'Das CMSMailer-Modul wurde deinstalliert ... schade, Sie gehen zu sehen!';
$lang['uninstalled'] = 'Modul deinstalliert.';
$lang['installed'] = 'Das Modul wurde in der Version %s installiert.';
$lang['accessdenied'] = 'Zugriff verweigert. Bitte pr&uuml;fen Sie Ihre Berechtigungen.';
$lang['error'] = 'Fehler!';
$lang['upgraded'] = 'Modul auf Version %s aktualisiert.';
$lang['title_mod_prefs'] = 'Moduleinstellungen';
$lang['title_mod_admin'] = 'Modul-Administration';
$lang['title_admin_panel'] = 'CMSMailer-Modul';
$lang['moddescription'] = 'Dies ist ein einfacher Wrapper f&uuml;r den PHPMailer; er hat die gleiche API (Funktion f&uuml;r Funktion) und ein einfaches Interface f&uuml;r ein paar Einstellungen.';
$lang['welcome_text'] = '<p>Willkommen in der Administration des CMSMailer-Moduls';
$lang['changelog'] = '<ul>
<li>Version 1.73.1. October, 2005. Initial Release.</li>
<li>Version 1.73.2. October, 2005. Minor bug fix with the admin panel.  The dropdown was not representing the current value from the preferences database</li>
<li>Version 1.73.3. October, 2005. Minor bug fix with sending html email</li>
<li>Version 1.73.4. November, 2005. Form fields in preferences are larger, fixed a problem with the fromuser, and called reset within the constructor</li>
<li>Version 1.73.5. November, 2005. Added the form fields and functionality for SMTP authentication.</li>
<li>Version 1.73.6. December, 2005. Default mailer method is SMTP on install, and improved documentation, and now I clear all the attachments, and addresses, etc. on reset.</li>
<li>Version 1.73.7. January, 2006. Increased field lengths in most fields</li>
<li>Version 1.73.8. January, 2006. Changed the preferences panel to be a bit more descriptive.</li>
<li>Version 1.73.9. January, 2006. Added test email capability, and confirmation on each button (except cancel)</li>
<li>Version 1.73.10. August, 2006. Modified to use lazy loading to minimize memory footprint when CMSMailer is not being used.</li>
<li>Version 1.73.13. January, 2008.  Added more permissions checks.</li>
</ul>';
$lang['help'] = '<h3>Was macht dieses Modul?</h3>
<p>Dieses Modul hat keine Funktionalit&auml;t f&uuml;r den Endverbraucher. Es stellt vielmehr anderen Modulen die Ressourcen zum Versand von Emails bereit.</p>
<h3>Wie wird es eingesetzt ?</h3>
<p>Dieses Modul liefert einen einfachen Wrapper f&uuml;r alle Methoden und Variablen von PHPmailer. Es wurde zur Unterst&uuml;tzung f&uuml;r andere Module-Entwickler konzipiert. Nachfolgend finden Sie ein Beispiel und eine kurze API-Referenz. F&uuml;r weitere Informationen lesen Sie bitte die Dokumentation zu PHPmailer.</p>
<h3>Ein Beispiel</h3>
<pre>
  $cmsmailer = $this->GetModuleInstance(&#039;CMSMailer&#039;);
  $cmsmailer->AddAddress(&#039;calguy1000@hotmail.com&#039;,&#039;calguy&#039;);
  $cmsmailer->SetBody(&#039;<h1>Das ist eine Testnachricht</h1>&#039;);
  $cmsmailer->IsHTML(true);
  $cmsmailer->SetSubject(&#039;Testnachricht&#039;);
  $cmsmailer->Send();
</pre>
<h3>API</h3>
<ul>
<li><p><b>void reset()</b></p>
<p>Reset the object back to the values specified in the admin panel</p>
</li>
<li><p><b>string GetAltBody()</b></p>
<p>Return the alternate body of the email</p>
</li>
<li><p><b>void SetAltBody( $string )</b></p>
<p>Set the alternate body of the email</p>
</li>
<li><p><b>string GetBody()</b></p>
<p>Return the primary body of the email</p>
</li>
<li><p><b>void SetBody( $string )</b></p>
<p>Set the primary body of the email</p>
</li>
<li><p><b>string GetCharSet()</b></p>
<p>Default: iso-8859-1</p>
<p>Return the mailer character set</p>
</li>
<li><p><b>void SetCharSet( $string )</b></p>
<p>Set the mailer character set</p>
</li>
<li><p><b>string GetConfirmReadingTo()</b></p>
<p>Return the address confirmed reading email flag</p>
</li>
<li><p><b>void SetConfirmReadingTo( $address )</b></p>
<p>Set or unset the confirm reading address</p>
</li>
<li><p><b>string GetContentType()</b></p>
<p>Default: text/plain</p>
<p>Return the content type</p>
</li>
<li><p><b>void SetContentType()</b></p>
<p>Set the content type</p>
</li>
<li><p><b>string GetEncoding()</b></p>
<p>Return the encoding</p>
</li>
<li><p><b>void SetEncoding( $encoding )</b></p>
<p>Set the encoding</p>
<p>Options are: 8bit, 7bit, binary, base64, quoted-printable</p>
</li>
<li><p><b>string GetErrorInfo()</b></p>
<p>Return any error information</p>
</li>
<li><p><b>string GetFrom()</b></p>
<p>Return the current originating address</p>
</li>
<li><p><b>void SetFrom( $address )</b></p>
<p>Set the originating address</p>
</li>
<li><p><b>string GetFromName()</b></p>
<p>Return the current originating name</p>
</li>
<li><p><b>SetFromName( $name )</b></p>
<p>Set the originating name</p>
</li>
<li><p><b>string GetHelo()</b></p>
<p>Return the HELO string</p>
</li>
<li><p><b>SetHelo( $string )</b></p>
<p>Set the HELO string</p>
<p>Default value: $hostname</p>
</li>
<li><p><b>string GetHost()</b></p>
<p>Return the SMTPs host separated by semicolon</p>
</li>
<li><p><b>void SetHost( $string )</b></p>
<p>Set the hosts</p>
</li>
<li><p><b>string GetHostName()</b></p>
<p>Return the hostname used for SMTP Helo</p>
</li>
<li><p><b>void SetHostName( $hostname )</b></p>
<p>Set the hostname used for SMTP Helo</p>
</li>
<li><p><b>string GetMailer()</b></p>
<p>Return the mailer</p>
</li>
<li><p><b>void SetMailer( $mailer )</b></p>
<p>Set the mailer, either sendmail,mail, or smtp</p>
</li>
<li><p><b>string GetPassword()</b></p>
<p>Return the password for smtp auth</p>
</li>
<li><p><b>void SetPassword( $string )</b></p>
<p>Set the password for smtp auth</p>
</li>
<li><p><b>int GetPort()</b></p>
<p>Return the port number for smtp connections</p>
</li>
<li><p><b>void SetPort( $int )</b></p>
<p>Set the port for smtp connections</p>
</li>
<li><p><b>int GetPriority()</b></p>
<p>Return the message priority</p>
</li>
<li><p><b>void SetPriority( int )</b></p>
<p>Set the message priority</p>
<p>Values are 1=High, 3 = Normal, 5 = Low</p>
</li>
<li><p><b>string GetSender()</b></p>
<p>Return the sender email (return path) string</p>
</li>
<li><p><b>void SetSender( $address )</b></p>
<p>Set the sender string</p>
</li>
<li><p><b>string GetSendmail()</b></p>
<p>Return the sendmail path</p>
</li>
<li><p><b>void SetSendmail( $path )</b></p>
<p>Set the sendmail path</p>
</li>
<li><p><b>bool GetSMTPAuth()</b></p>
<p>Return the current value of the smtp auth flag</p>
</li>
<li><p><b>SetSMTPAuth( $bool )</b></p>
<p>Set the smtp auth flag</p>
</li>
<li><p><b>bool GetSMTPDebug()</b></p>
<p>Return the value of the SMTP debug flag</p>
</li>
<li><p><b>void SetSMTPDebug( $bool )</b></p>
<p>Set the SMTP debug flag</p>
</li>
<li><p><b>bool GetSMTPKeepAlive()</b></p>
<p>Return the value of the SMTP keep alive flag</p>
</li>
<li><p><b>SetSMTPKeepAlive( $bool )</b></p>
<p>Set the SMTP keep alive flag</p>
</li>
<li><p><b>string GetSubject()</b></p>
<p>Return the current subject string</p>
</li>
<li><p><b>void SetSubject( $string )</b></p>
<p>Set the subject string</p>
</li>
<li><p><b>int GetTimeout()</b></p>
<p>Return the timeout value</p>
</li>
<li><p><b>void SetTimeout( $seconds )</b></p>
<p>Set the timeout value</p>
</li>
<li><p><b>string GetUsername()</b></p>
<p>Return the smtp auth username</p>
</li>
<li><p><b>void SetUsername( $string )</b></p>
<p>Set the smtp auth username</p>
</li>
<li><p><b>int GetWordWrap()</b></p>
<p>Return the wordwrap value</p>
</li>
<li><p><b>void SetWordWrap( $int )</b></p>
<p>Return the wordwrap value</p>
</li>
<li><p><b>AddAddress( $address, $name = &#039;&#039; )</b></p>
<p>Add a destination address</p>
</li>
<li><p><b>AddAttachment( $path, $name = &#039;&#039;, $encoding = &#039;base64&#039;, $type = &#039;application/octent-stream&#039; )</b></p>
<p>Add a file attachment</p>
</li>
<li><p><b>AddBCC( $address, $name = &#039;&#039; )</b></p>
<p>Add a BCC&#039;d destination address</p>
</li>
<li><p><b>AddCC( $address, $name = &#039;&#039; )</b></p>
<p>Add a CC&#039;d destination address</p>
</li>
<li><p><b>AddCustomHeader( $txt )</b></p>
<p>Add a custom header to the email</p>
</li>
<li><p><b>AddEmbeddedImage( $path, $cid, $name = &#039;&#039;, $encoding = &#039;base64&#039;, $type = &#039;application/octent-stream&#039; )</b></p>
<p>Add an embedded image</p>
</li>
<li><p><b>AddReplyTo( $address, $name = &#039;&#039; )</b></p>
<p>Add a reply to address</p>
</li>
<li><p><b>AddStringAttachment( $string, $filename, $encoding = &#039;base64&#039;, $type = &#039;application/octent-stream&#039; )</b></p>
<p>Add a file attachment</p>
</li>
<li><p><b>ClearAddresses()</b></p>
<p>Clear all addresses</p>
</li>
<li><p><b>ClearAllRecipients()</b></p>
<p>Clear all recipients</p>
</li>
<li><p><b>ClearAttachments()</b></p>
<p>Clear all attachments</p>
</li>
<li><p><b>ClearBCCs()</b></p>
<p>Clear all BCC addresses</p>
</li>
<li><p><b>ClearCCs()</b></p>
<p>Clear all CC addresses</p>
</li>
<li><p><b>ClearCustomHeaders()</b></p>
<p>Clear all custom headers</p>
</li>
<li><p><b>ClearReplyto()</b></p>
<p>Clear reply to address</p>
</li>
<li><p><b>IsError()</b></p>
<p>Check for an error condition</p>
</li>
<li><p><b>bool IsHTML( $bool )</b></p>
<p>Set the html flag</p>
<p><i>Note</i> possibly this should be a get and set method</p>
</li>
<li><p><b>bool IsMail()</b></p>
<p>Check wether we are using mail</p>
</li>
<li><p><b>bool IsQmail()</b></p>
<p>Check wether we are using qmail</p>
</li>
<li><p><b>IsSendmail()</b></p>
<p>Check wether we are using sendmail</p>
</li>
<li><p><b>IsSMTP()</b></p>
<p>Check wether we are using smtp</p>
</li>
<li><p><b>Send()</b></p>
<p>Send the currently prepared email</p>
</li>
<li><p><b>SetLanguage( $lang_type, $lang_path = &#039;&#039; )</b></p>
<p>Set the current language and <em>(optional)</em> language path</p>
</li>
<li><p><b>SmtpClose()</b></p>
<p>Close the smtp connection</p>
</li>
</ul>
<h3>Support</h3>
<p>Dieses Modul beinhaltet keinen kommerziellen Support. Sie k&ouml;nnen jedoch &uuml;ber folgende M&ouml;glichkeiten Hilfe zu dem Modul erhalten:</p>
<ul>
<li>F&uuml;r die letzte Version dieses Moduls, FAQs, dem Versand eines Fehlerreports oder dem Kauf kommerziellen Support besuchen Sie bitte calguys Homepage unter <a href=&quot;http://techcom.dyndns.org&quot;>techcom.dyndns.org</a>.</li>
<li>Eine weitere Diskussion zu diesem Modul ist auch in den Foren von <a href=&quot;http://forum.cmsmadesimple.org&quot;>CMS Made Simple</a> zu finden.</li>
<li>Der Autor calguy1000 ist h&auml;ufig im <a href=&quot;irc://irc.freenode.net/#cms&quot;>CMS IRC Channel</a> zu finden.</li>
<li>Letztlich erreichen Sie den Autor auch &uuml;ber eine direkte Email.</li>    
</ul>
<p>Nach der GPL wird diese Software so ver&ouml;ffentlicht, wie sie ist. Bitte lesen Sie den 
Lizenztext f&uuml;r den vollen Haftungsausschluss.</p>

<h3>Copyright und Lizenz</h3>
<p>Copyright &copy; 2005, Robert Campbell <a href=&quot;mailto:calguy1000@hotmail.com&quot;><calguy1000@hotmail.com></a>. Alle Rechte vorbehalten.</p>
<p>Dieses Modul wurde unter der <a href=&quot;http://www.gnu.org/licenses/licenses.html#GPL&quot;>GNU Public License</a> ver&ouml;ffentlicht. Sie m&uuml;ssen dieser Lizenz zustimmen, bevor Sie das Modul verwenden.</p>';
$lang['utma'] = '156861353.717462736.1147511856.1204776557.1204988561.317';
?>