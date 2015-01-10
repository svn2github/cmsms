<?php
$lang['warning_cron_updated'] = 'Dieser Test wird nur in unregelmäßigen Abständen ausgeführt. Bis zur nächsten Prüfung kann daher einige Zeit vergehen.';
$lang['none'] = 'Keine';
$lang['ssl'] = 'SSL';
$lang['tls'] = 'TLS';
$lang['secure'] = 'Verschlüsselung mit';
$lang['info_secure'] = 'Funktioniert nur mit der Einstellung SMTP-Mailer. Über diese Option kann festgelegt werden, welche Verschlüsselung für die Verbindung verwendet werden soll.';
$lang['info_cmsmailer'] = 'Dieses Modul wird von einigen anderen Modulen verwendet, um den Email-Versand zu erleichtern. Es muss daher entsprechend den Vorgaben Ihres Hosters konfiguriert werden.  Wenn Sie trotzdem keine Testnachricht versenden können, sollten Sie Ihren Hoster um Hilfe bitten.';
$lang['charset'] = 'Zeichensatz';
$lang['sendtestmailconfirm'] = 'Hiermit wird eine Testnachricht an die festgelegte Adresse versandt. War der Versand erfolgreich, kehren Sie zu dieser Seite zurück. Wollen Sie dies wirklich?';
$lang['settingsconfirm'] = 'Sollen die CMSMailer-Einstellungen gespeichert werden?';
$lang['testsubject'] = 'Testnachricht des CMSMailer-Moduls';
$lang['testbody'] = 'Mit dieser Nachricht werden die Einstellungen des CMSMailer-Moduls getestet. Wenn Sie diese Email erhalten haben, sind die Einstellungen korrekt.';
$lang['error_notestaddress'] = 'Fehler: Die Testadresse wurde nicht festgelegt!';
$lang['prompt_testaddress'] = 'Test-Email-Adresse';
$lang['sendtest'] = 'Testnachricht senden';
$lang['password'] = 'Passwort';
$lang['username'] = 'Benutzername';
$lang['smtpauth'] = 'SMTP Authentifizierung';
$lang['mailer'] = 'Mailmethode';
$lang['host'] = 'SMTP-Hostname<br /><i>(oder IP-Adresse)</i>';
$lang['port'] = 'Port des SMTP-Servers';
$lang['from'] = '"Von"-Adresse';
$lang['fromuser'] = '"Von"-Username';
$lang['sendmail'] = 'Sendmail-Pfad';
$lang['timeout'] = 'SMTP-Timeout';
$lang['submit'] = 'Speichern';
$lang['cancel'] = 'Abbrechen';
$lang['info_mailer'] = 'Verwendete Mailmethode (sendmail, smtp, mail). SMTP ist die verlässlichste Methode.';
$lang['info_host'] = 'SMTP-Hostname (nur für die SMTP-Mailmethode gültig)';
$lang['info_port'] = 'SMTP-Portnummer (üblicherweise 25) (nur für die SMTP-Mailmethode gültig)';
$lang['info_from'] = 'Email-Adresse, die als Absender für alle Emails verwendet werden soll.<br /><strong>Hinweis</strong> Diese Email-Adresse muss genau entsprechend den Vorgaben Ihres Hosters eingestellt werden. Anderenfalls kann es beim Versand von Emails zu Schwierigkeiten kommen.<br />Wenn Sie nicht die richtigen Werte für diese Einstellungen kennen, sollten Sie Ihren Hoster fragen.';
$lang['info_fromuser'] = 'Realname, der als Absender für alle Emails verwendet werden soll';
$lang['info_sendmail'] = 'Der komplette Pfad zu Ihrem sendmail-Programm (nur für die SMTP-Mailmethode gültig)';
$lang['info_timeout'] = 'Dauer der SMTP-Konversation in Sekunden, bevor eine Fehlermeldung ausgegeben wird (nur für die SMTP-Mailmethode gültig)';
$lang['info_smtpauth'] = 'Benötigt Ihr SMTP-Host eine Authentifizierung? (nur für die SMTP-Mailmethode gültig)';
$lang['info_username'] = 'SMTP-Authentifizierungs-Benutzername (nur für die SMTP-Mailmethode gültig, wenn SMTP-Authentifizierung gewählt wurde)';
$lang['info_password'] = 'SMTP-Authentifizierungs-Passwort (nur für die SMTP-Mailmethode gültig, wenn SMTP-Authentifizierung gewählt wurde)';
$lang['friendlyname'] = 'CMSMailer';
$lang['postinstall'] = 'Das CMSMailer-Modul wurde installiert.';
$lang['postuninstall'] = 'Das CMSMailer-Modul wurde deinstalliert ... schade, Sie gehen zu sehen!';
$lang['uninstalled'] = 'Das Modul wurde deinstalliert.';
$lang['installed'] = 'Das Modul wurde in der Version %s installiert.';
$lang['accessdenied'] = 'Zugriff verweigert. Bitte prüfen Sie Ihre Berechtigungen.';
$lang['error'] = 'Fehler!';
$lang['upgraded'] = 'Das Modul wurde auf Version %s aktualisiert.';
$lang['settings_title'] = 'Einstellungen';
$lang['test_title'] = 'Prüfen';
$lang['title_mod_prefs'] = 'Moduleinstellungen';
$lang['title_mod_admin'] = 'Modul-Administration';
$lang['title_admin_panel'] = 'CMSMailer-Modul';
$lang['moddescription'] = 'Dies ist ein einfacher Wrapper für den PHPMailer; er hat die gleiche API (Funktion für Funktion) und ein einfaches Interface für ein paar Einstellungen.';
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
<li>Version 2.0.1 - January, 2011 - Remove cancel button.</li>
<li>Version 2.0.2 - September, 2011 - Set default charset to utf-8.</li>
</ul>';
$lang['help'] = '<h3>Was macht dieses Modul?</h3>
<p>Dieses Modul hat keine direkte Funktionalität für den Webseitenbesucher. Es stellt anderen Modulen nur die Ressourcen zum Versand von E-Mails bereit.</p>
<h3>Wie wird es eingesetzt ?</h3>
<p>Dieses Modul ist ein einfacher Wrapper für alle Methoden und Variablen von <a rel="external" href="http://phpmailer.sourceforge.net/">PHPmailer</a>. Es wurde zur Unterstützung für die Modul-Programmierung konzipiert. Im folgenden finden Sie ein Anwendungsbeispiel und eine kurze API-Referenz. Weitere Informationen finden Sie in der Dokumentation zu PHPmailer.</p>
<h3>Ein Beispiel</h3>
<pre>
	<code>
  $cmsmailer = $this->GetModuleInstance(\'CMSMailer\');
  $cmsmailer->AddAddress(\'calguy1000@hotmail.com\',\'calguy\');
  $cmsmailer->SetBody(\'<h4>Das ist eine Testnachricht</h4>\');
  $cmsmailer->IsHTML(true);
  $cmsmailer->SetSubject(\'Testnachricht\');
  $cmsmailer->Send();
  </code>
</pre>
<h3>Programmierschnittstelle</h3>
<table>
	<thead>
		<tr>
			<th scope="col">Methode</th>
			<th scope="col">Beschreibung</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td><code>void reset()</code></td>
			<td>Setzt das Objekt auf die in der Administration definierten Werte zurück</td>
		</tr>
		<tr>
			<td><code>string GetAltBody()</code></td>
			<td>Gibt den alternativen E-Mail-Body zurück</td>
		</tr>
		<tr>
			<td><code>void SetAltBody( $string )</code></td>
			<td>Definiert den alternativen E-Mail-Body</td>
		</tr>
		<tr>
			<td><code>string GetBody()</code></td>
			<td>Gibt den primären E-Mail-Body zurück</td>
		</tr>
		<tr>
			<td><code>void SetBody( $string )</code></td>
			<td>Definiert den primären E-Mail-Body</td>
		</tr>
		<tr>
			<td><code>string GetCharSet()</code></td>
			<td>Gibt den verwendeten Zeichensatz der E-Mail zurück; Standard: UTF-8</td>
		</tr>
		<tr>
			<td><code>void SetCharSet( $string )</code></td>
			<td>Definiert den verwendeten Zeichensatz der E-Mail</td>
		</tr>
		<tr>
			<td><code>string GetConfirmReadingTo()</code></td>
			<td>Gibt die E-Mail-Adresse zurück, an die die Lesebestätigung gesandt wird</td>
		</tr>
		<tr>
			<td><code>void SetConfirmReadingTo( $address )</code></td>
			<td>Definiert oder löscht die E-Mail-Adresse für die Lesebestätigung</td>
		</tr>
		<tr>
			<td><code>string GetContentType()</code></p>
			<td>Gibt den Typ des Inhalts der E-Mail zurück; Standard: text/plain</td>
		</li>
		<tr>
			<td><code>void SetContentType()</code></td>
			<td>Definiert den Typ des Inhalts der E-Mail</td>
		</tr>
		<tr>
			<td><code>string GetEncoding()</code></td>
			<td>Gibt die Kodierung der E-Mail zurück</td>
		</tr>
		<tr>
			<td><code>void SetEncoding( $encoding )</code></td>
			<td>Definiert die Kodierung der E-Mail; mögliche Optionen sind: 8bit, 7bit, binary, base64, quoted-printable</td>
		</tr>
		<tr>
			<td><code>string GetErrorInfo()</code></td>
			<td>Gibt eine Fehlerinformation zurück</td>
		</tr>
		<tr>
			<td><code>string GetFrom()</code></td>
			<td>Gibt die aktuelle E-Mail-Adresse des Absenders zurück</td>
		</tr>
		<tr>
			<td><code>void SetFrom( $address )</code></td>
			<td>Definiert die E-Mail-Adresse des Absenders</td>
		</tr>
		<tr>
			<td><code>string GetFromName()</code></td>
			<td>Gibt den Namen des Absenders zurück</td>
		</tr>
		<tr>
			<td><code>SetFromName( $name )</code></td>
			<td>Definiert den Namen des Absenders</td>
		</tr>
		<tr>
			<td><code>string GetHelo()</code></td>
			<td>Gibt den HELO-String zurück</td>
		</tr>
		<tr>
			<td><code>SetHelo( $string )</code></td>
			<td>Definiert den HELO-String; Standardwert: $hostname</td>
		</tr>
		<tr>
			<td><code>string GetHost()</code></td>
			<td>Gibt die SMTP-Hosts zurück (getrennt durch Semikolon)</td>
		</tr>
		<tr>
			<td><code>void SetHost( $string )</code></td>
			<td>Definiert die Hosts</td>
		</tr>
		<tr>
			<td><code>string GetHostName()</code></td>
			<td>Gibt den Hostnamen zurück, der für SMTP Helo verwendet wird</td>
		</tr>
		<tr>
			<td><code>void SetHostName( $hostname )</code></td>
			<td>Definiert den Hostnamen, der für SMTP Hello verwendet wird</td>
		</tr>
		<tr>
			<td><code>string GetMailer()</code></td>
			<td>Gibt den verwendeten Mailer zurück</td>
		</tr>
		<tr>
			<td><code>void SetMailer( $mailer )</code></td>
			<td>Gibt den verwendeten Mailer zurück, entweder sendmail, mail, oder smtp</td>
		</tr>
		<tr>
			<td><code>string GetPassword()</code></td>
			<td>Gibt das Kennwort für die SMTP-Authentifizierung zurück</td>
		</tr>
		<tr>
			<td><code>void SetPassword( $string )</code></td>
			<td>Definiert das Kennwort für die SMTP-Authentifizierung</td>
		</tr>
		<tr>
			<td><code>int GetPort()</code></td>
			<td>Gibt die Portnummer für SMTP-Verbindungen zurück</td>
		</tr>
		<tr>
			<td><code>void SetPort( $int )</code></td>
			<td>Definiert die Portnummer für SMTP-Verbindungen</td>
		</tr>
		<tr>
			<td><code>int GetPriority()</code></td>
			<td>Gibt die Priorität der Nachricht zurück</td>
		</tr>
		<tr>
			<td><code>void SetPriority( int )</code></td>
			<td>Definiert die Priorität/Dringlichkeit der Nachricht<br/>
			Mögliche Werte sind 1 = Hoch, 3 = Normal, 5 = Niedrig</td>
		</tr>
		<tr>
			<td><code>string GetSender()</code></td>
			<td>Gibt den sender-String zurück (return path) </td>
		</tr>
		<tr>
			<td><code>void SetSender( $address )</code></td>
			<td>Definiert den sender-String</td>
		</tr>
		<tr>
			<td><code>string GetSendmail()</code></td>
			<td>Gibt den sendmail-Pfad zurück</td>
		</tr>
		<tr>
			<td><code>void SetSendmail( $path )</code></td>
			<td>Definiert den sendmail-Pfad</td>
		</tr>
		<tr>
			<td><code>bool GetSMTPAuth()</code></td>
			<td>Gibt den aktuellen Wert des SMTP-Authentifizierungs-Flags zurück</td>
		</tr>
		<tr>
			<td><code>SetSMTPAuth( $bool )</code></td>
			<td>Definiert den SMTP-Authentifizierungs-Flag</td>
		</tr>
		<tr>
			<td><code>bool GetSMTPDebug()</code></td>
			<td>Gibt den aktuellen Wert des SMTP-Debug-Flags zurück</td>
		</tr>
		<tr>
			<td><code>void SetSMTPDebug( $bool )</code></td>
			<td>Definiert den SMTP-Debug-Flag</td>
		</tr>
		<tr>
			<td><code>bool GetSMTPKeepAlive()</code></td>
			<td>Gibt den aktuellen Wert des SMTP-Keep-Alive-Flags zurück</td>
		</tr>
		<tr>
			<td><code>SetSMTPKeepAlive( $bool )</code></td>
			<td>Definiert den SMTP-Keep-Alive-Flag</td>
		</tr>
		<tr>
			<td><code>string GetSubject()</code></td>
			<td>Gibt den aktuellen Betreff-String zurück</td>
		</tr>
		<tr>
			<td><code>void SetSubject( $string )</code></td>
			<td>Definiert den aktuellen Betreff-String</td>
		</tr>
		<tr>
			<td><code>int GetTimeout()</code></td>
			<td>Gibt den timeout-Wert zurück</td>
		</tr>
		<tr>
			<td><code>void SetTimeout( $seconds )</code></td>
			<td>Definiert den timeout-Wert</td>
		</tr>
		<tr>
			<td><code>string GetUsername()</code></td>
			<td>Gibt den Benutzernamen für die SMTP-Authentifizierung zurück</td>
		</tr>
		<tr>
			<td><code>void SetUsername( $string )</code></td>
			<td>Definiert den Benutzernamen für die SMTP-Authentifizierung</td>
		</tr>
		<tr>
			<td><code>int GetWordWrap()</code></td>
			<td>Gibt den wordwrap-Wert zurück</td>
		</tr>
		<tr>
			<td><code>void SetWordWrap( $int )</code></td>
			<td>Definiert den wordwrap-Wert</td>
		</tr>
		<tr>
			<td><code>AddAddress( $address, $name = \'\' )</code></td>
			<td>Fügt eine Zieladresse hinzu</td>
		</tr>
		<tr>
			<td><code>AddAttachment( $path, $name = \'\', $encoding = \'base64\', $type = \'application/octent-stream\' )</code></td>
			<td>Fügt einen Anhang hinzu</td>
		</tr>
		<tr>
			<td><code>AddBCC( $address, $name = \'\' )</code></td>
			<td>Fügt eine Zieladresse für eine verdeckte Kopie (BCC) hinzu</td>
		</tr>
		<tr>
			<td><code>AddCC( $address, $name = \'\' )</code></td>
			<td>Fügt eine Zieladresse für eine Kopie (CC) hinzu</td>
		</tr>
		<tr>
			<td><code>AddCustomHeader( $txt )</code></td>
			<td>Fügt der E-Mail einen benutzerdefinierten Header hinzu</td>
		</tr>
		<tr>
			<td><code>AddEmbeddedImage( $path, $cid, $name = \'\', $encoding = \'base64\', $type = \'application/octent-stream\' )</code></td>
			<td>Fügt ein eingebettetes Bild hinzu</td>
		</tr>
		<tr>
			<td><code>AddReplyTo( $address, $name = \'\' )</code></td>
			<td>Fügt eine Adresse für die Antwort-E-Mail hinzu</td>
		</tr>
		<tr>
			<td><code>AddStringAttachment( $string, $filename, $encoding = \'base64\', $type = \'application/octent-stream\' )</code></td>
			<td>Fügt einen Dateianhang hinzu</td>
		</tr>
		<tr>
			<td><code>ClearAddresses()</code></td>
			<td>Löscht alle E-Mail-Adressen</td>
		</tr>
		<tr>
			<td><code>ClearAllRecipients()</code></td>
			<td>Löscht alle Empfänger</td>
		</tr>
		<tr>
			<td><code>ClearAttachments()</code></td>
			<td>Löscht alle Anhänge</td>
		</tr>
		<tr>
			<td><code>ClearBCCs()</code></td>
			<td>Löscht alle BCC-E-Mail-Adressen</td>
		</tr>
		<tr>
			<td><code>ClearCCs()</code></td>
			<td>Löscht alle CC-E-Mail-Adressen</td>
		</tr>
		<tr>
			<td><code>ClearCustomHeaders()</code></td>
			<td>Löscht alle benutzerdefinierten Header</td>
		</tr>
		<tr>
			<td><code>ClearReplyto()</code></td>
			<td>Löscht die E-Mail-Adresse für die Antwort</td>
		</tr>
		<tr>
			<td><code>IsError()</code></td>
			<td>Prüft, ob eine bestimmte Fehlerbedingung erfüllt ist</td>
		</tr>
		<tr>
			<td><code>bool IsHTML( $bool )</code></td>
			<td>Kennzeichnet die E-Mail als HTML-E-Mail<br/>
			<em>Hinweis:</em> Dies ist zwar eine Möglichkeit, jedoch sollte bevorzugt eine get- und set-Methode verwendet werden</td>
		</tr>
		<tr>
			<td><code>bool IsMail()</code></td>
			<td>Prüft, ob mail verwendet werden soll</td>
		</tr>
		<tr>
			<td><code>bool IsQmail()</code></td>
			<td>Prüft, ob qmail verwendet werden soll</td>
		</tr>
		<tr>
			<td><code>IsSendmail()</code></td>
			<td>Prüft, ob sendmail verwendet werden soll</td>
		</tr>
		<tr>
			<td><code>IsSMTP()</code></td>
			<td>Prüft, ob smtp verwendet werden soll</td>
		</tr>
		<tr>
			<td><code>Send()</code></td>
			<td>Versendet die aktuell vorbereitete E-Mail</td>
		</tr>
		<tr>
			<td><code>SetLanguage( $lang_type, $lang_path = \'\' )</code></td>
			<td>Legt die aktuelle Sprache und <em>(optional)</em> den Sprach-Pfad fest</td>
		</tr>
		<tr>
			<td><code>SmtpClose()</code></td>
			<td>Schließt die smtp-Verbindung</td>
		</tr>
	</tbody>
</table>
<h3>Support</h3>
<p>Dieses Modul beinhaltet keinen kommerziellen Support. Sie können jedoch über folgende Möglichkeiten Hilfe zu dem Modul erhalten:</p>
<ul>
<li>Für die letzte Version dieses Moduls, FAQs, dem Versand eines Fehlerreports oder dem Kauf kommerziellen Support besuchen Sie bitte calguys Homepage unter <a href="http://techcom.dyndns.org">techcom.dyndns.org</a>.</li>
<li>Eine weitere Diskussion zu diesem Modul ist auch in den Foren von <a href="http://forum.cmsmadesimple.org">CMS Made Simple</a> zu finden.</li>
<li>Der Autor calguy1000 ist häufig im <a href="irc://irc.freenode.net/#cms">CMS IRC Channel</a> zu finden.</li>
<li>Letztlich erreichen Sie den Autor auch über eine direkte E-Mail.</li>
</ul>
<p>Nach der GPL wird diese Software so veröffentlicht, wie sie ist. Bitte lesen Sie den Lizenztext für den vollen Haftungsausschluss.</p>

<h3>Copyright und Lizenz</h3>
<p>Copyright © 2005, Robert Campbell <a href="mailto:calguy1000@hotmail.com"><calguy1000@hotmail.com></a>. Alle Rechte vorbehalten.</p>
<p>Dieses Modul wurde unter der <a href="http://www.gnu.org/licenses/licenses.html#GPL">GNU Public License</a> veröffentlicht. Sie müssen dieser Lizenz zustimmen, bevor Sie das Modul verwenden.</p>';
?>