<?php
$lang['warning_cron_updated'] = 'Dieser Test wird nur in unregelm&auml;&szlig;igen Abst&auml;nden ausgef&uuml;hrt. Bis zur n&auml;chsten Pr&uuml;fung kann daher einige Zeit vergehen.';
$lang['none'] = 'Keine';
$lang['ssl'] = 'SSL';
$lang['tls'] = 'TLS';
$lang['secure'] = 'Verschl&uuml;sselung mit';
$lang['info_secure'] = 'Funktioniert nur mit der Einstellung SMTP-Mailer. &Uuml;ber diese Option kann festgelegt werden, welche Verschl&uuml;sselung f&uuml;r die Verbindung verwendet werden soll.';
$lang['info_cmsmailer'] = 'Dieses Modul wird von einigen anderen Modulen verwendet, um den Email-Versand zu erleichtern. Es muss daher entsprechend den Vorgaben Ihres Hosters konfiguriert werden.  Wenn Sie trotzdem keine Testnachricht versenden k&ouml;nnen, sollten Sie Ihren Hoster um Hilfe bitten.';
$lang['charset'] = 'Zeichensatz';
$lang['sendtestmailconfirm'] = 'Hiermit wird eine Testnachricht an die festgelegte Adresse versandt. War der Versand erfolgreich, kehren Sie zu dieser Seite zur&uuml;ck. Wollen Sie dies wirklich?';
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
$lang['from'] = '&quot;Von&quot;-Adresse';
$lang['fromuser'] = '&quot;Von&quot;-Username';
$lang['sendmail'] = 'Sendmail-Pfad';
$lang['timeout'] = 'SMTP-Timeout';
$lang['submit'] = 'Speichern';
$lang['cancel'] = 'Abbrechen';
$lang['info_mailer'] = 'Verwendete Mailmethode (sendmail, smtp, mail). SMTP ist die verl&auml;sslichste Methode.';
$lang['info_host'] = 'SMTP-Hostname (nur f&uuml;r die SMTP-Mailmethode g&uuml;ltig)';
$lang['info_port'] = 'SMTP-Portnummer (&uuml;blicherweise 25) (nur f&uuml;r die SMTP-Mailmethode g&uuml;ltig)';
$lang['info_from'] = 'Email-Adresse, die als Absender f&uuml;r alle Emails verwendet werden soll.<br /><strong>Hinweis</strong> Diese Email-Adresse muss genau entsprechend den Vorgaben Ihres Hosters eingestellt werden. Anderenfalls kann es beim Versand von Emails zu Schwierigkeiten kommen.<br />Wenn Sie nicht die richtigen Werte f&uuml;r diese Einstellungen kennen, sollten Sie Ihren Hoster fragen.';
$lang['info_fromuser'] = 'Realname, der als Absender f&uuml;r alle Emails verwendet werden soll';
$lang['info_sendmail'] = 'Der komplette Pfad zu Ihrem sendmail-Programm (nur f&uuml;r die SMTP-Mailmethode g&uuml;ltig)';
$lang['info_timeout'] = 'Dauer der SMTP-Konversation in Sekunden, bevor eine Fehlermeldung ausgegeben wird (nur f&uuml;r die SMTP-Mailmethode g&uuml;ltig)';
$lang['info_smtpauth'] = 'Ben&ouml;tigt Ihr SMTP-Host eine Authentifizierung? (nur f&uuml;r die SMTP-Mailmethode g&uuml;ltig)';
$lang['info_username'] = 'SMTP-Authentifizierungs-Benutzername (nur f&uuml;r die SMTP-Mailmethode g&uuml;ltig, wenn SMTP-Authentifizierung gew&auml;hlt wurde)';
$lang['info_password'] = 'SMTP-Authentifizierungs-Passwort (nur f&uuml;r die SMTP-Mailmethode g&uuml;ltig, wenn SMTP-Authentifizierung gew&auml;hlt wurde)';
$lang['friendlyname'] = 'CMSMailer';
$lang['postinstall'] = 'Das CMSMailer-Modul wurde installiert.';
$lang['postuninstall'] = 'Das CMSMailer-Modul wurde deinstalliert ... schade, Sie gehen zu sehen!';
$lang['uninstalled'] = 'Das Modul wurde deinstalliert.';
$lang['installed'] = 'Das Modul wurde in der Version %s installiert.';
$lang['accessdenied'] = 'Zugriff verweigert. Bitte pr&uuml;fen Sie Ihre Berechtigungen.';
$lang['error'] = 'Fehler!';
$lang['upgraded'] = 'Das Modul wurde auf Version %s aktualisiert.';
$lang['settings_title'] = 'Einstellungen';
$lang['test_title'] = 'Pr&uuml;fen';
$lang['title_mod_prefs'] = 'Moduleinstellungen';
$lang['title_mod_admin'] = 'Modul-Administration';
$lang['title_admin_panel'] = 'CMSMailer-Modul';
$lang['moddescription'] = 'Dies ist ein einfacher Wrapper f&uuml;r den PHPMailer; er hat die gleiche API (Funktion f&uuml;r Funktion) und ein einfaches Interface f&uuml;r ein paar Einstellungen.';
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
<p>Dieses Modul hat keine direkte Funktionalit&auml;t f&uuml;r den Webseitenbesucher. Es stellt anderen Modulen nur die Ressourcen zum Versand von E-Mails bereit.</p>
<h3>Wie wird es eingesetzt ?</h3>
<p>Dieses Modul ist ein einfacher Wrapper f&uuml;r alle Methoden und Variablen von <a rel="external" href="http://phpmailer.sourceforge.net/">PHPmailer</a>. Es wurde zur Unterst&uuml;tzung f&uuml;r die Modul-Programmierung konzipiert. Im folgenden finden Sie ein Anwendungsbeispiel und eine kurze API-Referenz. Weitere Informationen finden Sie in der Dokumentation zu PHPmailer.</p>
<h3>Ein Beispiel</h3>
<pre>
	<code>
  $cmsmailer = $this->GetModuleInstance(&#039;CMSMailer&#039;);
  $cmsmailer->AddAddress(&#039;calguy1000@hotmail.com&#039;,&#039;calguy&#039;);
  $cmsmailer->SetBody(&#039;<h4>Das ist eine Testnachricht</h4>&#039;);
  $cmsmailer->IsHTML(true);
  $cmsmailer->SetSubject(&#039;Testnachricht&#039;);
  $cmsmailer->Send();
  </code>
</pre>
<h3>Programmierschnittstelle</h3>
<table>
	<thead>
		<tr>
			<th scope=&quot;col&quot;>Methode</th>
			<th scope=&quot;col&quot;>Beschreibung</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td><code>void reset()</code></td>
			<td>Setzt das Objekt auf die in der Administration definierten Werte zur&uuml;ck</td>
		</tr>
		<tr>
			<td><code>string GetAltBody()</code></td>
			<td>Gibt den alternativen E-Mail-Body zur&uuml;ck</td>
		</tr>
		<tr>
			<td><code>void SetAltBody( $string )</code></td>
			<td>Definiert den alternativen E-Mail-Body</td>
		</tr>
		<tr>
			<td><code>string GetBody()</code></td>
			<td>Gibt den prim&auml;ren E-Mail-Body zur&uuml;ck</td>
		</tr>
		<tr>
			<td><code>void SetBody( $string )</code></td>
			<td>Definiert den prim&auml;ren E-Mail-Body</td>
		</tr>
		<tr>
			<td><code>string GetCharSet()</code></td>
			<td>Gibt den verwendeten Zeichensatz der E-Mail zur&uuml;ck; Standard: UTF-8</td>
		</tr>
		<tr>
			<td><code>void SetCharSet( $string )</code></td>
			<td>Definiert den verwendeten Zeichensatz der E-Mail</td>
		</tr>
		<tr>
			<td><code>string GetConfirmReadingTo()</code></td>
			<td>Gibt die E-Mail-Adresse zur&uuml;ck, an die die Lesebest&auml;tigung gesandt wird</td>
		</tr>
		<tr>
			<td><code>void SetConfirmReadingTo( $address )</code></td>
			<td>Definiert oder l&ouml;scht die E-Mail-Adresse f&uuml;r die Lesebest&auml;tigung</td>
		</tr>
		<tr>
			<td><code>string GetContentType()</code></p>
			<td>Gibt den Typ des Inhalts der E-Mail zur&uuml;ck; Standard: text/plain</td>
		</li>
		<tr>
			<td><code>void SetContentType()</code></td>
			<td>Definiert den Typ des Inhalts der E-Mail</td>
		</tr>
		<tr>
			<td><code>string GetEncoding()</code></td>
			<td>Gibt die Kodierung der E-Mail zur&uuml;ck</td>
		</tr>
		<tr>
			<td><code>void SetEncoding( $encoding )</code></td>
			<td>Definiert die Kodierung der E-Mail; m&ouml;gliche Optionen sind: 8bit, 7bit, binary, base64, quoted-printable</td>
		</tr>
		<tr>
			<td><code>string GetErrorInfo()</code></td>
			<td>Gibt eine Fehlerinformation zur&uuml;ck</td>
		</tr>
		<tr>
			<td><code>string GetFrom()</code></td>
			<td>Gibt die aktuelle E-Mail-Adresse des Absenders zur&uuml;ck</td>
		</tr>
		<tr>
			<td><code>void SetFrom( $address )</code></td>
			<td>Definiert die E-Mail-Adresse des Absenders</td>
		</tr>
		<tr>
			<td><code>string GetFromName()</code></td>
			<td>Gibt den Namen des Absenders zur&uuml;ck</td>
		</tr>
		<tr>
			<td><code>SetFromName( $name )</code></td>
			<td>Definiert den Namen des Absenders</td>
		</tr>
		<tr>
			<td><code>string GetHelo()</code></td>
			<td>Gibt den HELO-String zur&uuml;ck</td>
		</tr>
		<tr>
			<td><code>SetHelo( $string )</code></td>
			<td>Definiert den HELO-String; Standardwert: $hostname</td>
		</tr>
		<tr>
			<td><code>string GetHost()</code></td>
			<td>Gibt die SMTP-Hosts zur&uuml;ck (getrennt durch Semikolon)</td>
		</tr>
		<tr>
			<td><code>void SetHost( $string )</code></td>
			<td>Definiert die Hosts</td>
		</tr>
		<tr>
			<td><code>string GetHostName()</code></td>
			<td>Gibt den Hostnamen zur&uuml;ck, der f&uuml;r SMTP Helo verwendet wird</td>
		</tr>
		<tr>
			<td><code>void SetHostName( $hostname )</code></td>
			<td>Definiert den Hostnamen, der f&uuml;r SMTP Hello verwendet wird</td>
		</tr>
		<tr>
			<td><code>string GetMailer()</code></td>
			<td>Gibt den verwendeten Mailer zur&uuml;ck</td>
		</tr>
		<tr>
			<td><code>void SetMailer( $mailer )</code></td>
			<td>Gibt den verwendeten Mailer zur&uuml;ck, entweder sendmail, mail, oder smtp</td>
		</tr>
		<tr>
			<td><code>string GetPassword()</code></td>
			<td>Gibt das Kennwort f&uuml;r die SMTP-Authentifizierung zur&uuml;ck</td>
		</tr>
		<tr>
			<td><code>void SetPassword( $string )</code></td>
			<td>Definiert das Kennwort f&uuml;r die SMTP-Authentifizierung</td>
		</tr>
		<tr>
			<td><code>int GetPort()</code></td>
			<td>Gibt die Portnummer f&uuml;r SMTP-Verbindungen zur&uuml;ck</td>
		</tr>
		<tr>
			<td><code>void SetPort( $int )</code></td>
			<td>Definiert die Portnummer f&uuml;r SMTP-Verbindungen</td>
		</tr>
		<tr>
			<td><code>int GetPriority()</code></td>
			<td>Gibt die Priorit&auml;t der Nachricht zur&uuml;ck</td>
		</tr>
		<tr>
			<td><code>void SetPriority( int )</code></td>
			<td>Definiert die Priorit&auml;t/Dringlichkeit der Nachricht<br/>
			M&ouml;gliche Werte sind 1 = Hoch, 3 = Normal, 5 = Niedrig</td>
		</tr>
		<tr>
			<td><code>string GetSender()</code></td>
			<td>Gibt den sender-String zur&uuml;ck (return path) </td>
		</tr>
		<tr>
			<td><code>void SetSender( $address )</code></td>
			<td>Definiert den sender-String</td>
		</tr>
		<tr>
			<td><code>string GetSendmail()</code></td>
			<td>Gibt den sendmail-Pfad zur&uuml;ck</td>
		</tr>
		<tr>
			<td><code>void SetSendmail( $path )</code></td>
			<td>Definiert den sendmail-Pfad</td>
		</tr>
		<tr>
			<td><code>bool GetSMTPAuth()</code></td>
			<td>Gibt den aktuellen Wert des SMTP-Authentifizierungs-Flags zur&uuml;ck</td>
		</tr>
		<tr>
			<td><code>SetSMTPAuth( $bool )</code></td>
			<td>Definiert den SMTP-Authentifizierungs-Flag</td>
		</tr>
		<tr>
			<td><code>bool GetSMTPDebug()</code></td>
			<td>Gibt den aktuellen Wert des SMTP-Debug-Flags zur&uuml;ck</td>
		</tr>
		<tr>
			<td><code>void SetSMTPDebug( $bool )</code></td>
			<td>Definiert den SMTP-Debug-Flag</td>
		</tr>
		<tr>
			<td><code>bool GetSMTPKeepAlive()</code></td>
			<td>Gibt den aktuellen Wert des SMTP-Keep-Alive-Flags zur&uuml;ck</td>
		</tr>
		<tr>
			<td><code>SetSMTPKeepAlive( $bool )</code></td>
			<td>Definiert den SMTP-Keep-Alive-Flag</td>
		</tr>
		<tr>
			<td><code>string GetSubject()</code></td>
			<td>Gibt den aktuellen Betreff-String zur&uuml;ck</td>
		</tr>
		<tr>
			<td><code>void SetSubject( $string )</code></td>
			<td>Definiert den aktuellen Betreff-String</td>
		</tr>
		<tr>
			<td><code>int GetTimeout()</code></td>
			<td>Gibt den timeout-Wert zur&uuml;ck</td>
		</tr>
		<tr>
			<td><code>void SetTimeout( $seconds )</code></td>
			<td>Definiert den timeout-Wert</td>
		</tr>
		<tr>
			<td><code>string GetUsername()</code></td>
			<td>Gibt den Benutzernamen f&uuml;r die SMTP-Authentifizierung zur&uuml;ck</td>
		</tr>
		<tr>
			<td><code>void SetUsername( $string )</code></td>
			<td>Definiert den Benutzernamen f&uuml;r die SMTP-Authentifizierung</td>
		</tr>
		<tr>
			<td><code>int GetWordWrap()</code></td>
			<td>Gibt den wordwrap-Wert zur&uuml;ck</td>
		</tr>
		<tr>
			<td><code>void SetWordWrap( $int )</code></td>
			<td>Definiert den wordwrap-Wert</td>
		</tr>
		<tr>
			<td><code>AddAddress( $address, $name = &#039;&#039; )</code></td>
			<td>F&uuml;gt eine Zieladresse hinzu</td>
		</tr>
		<tr>
			<td><code>AddAttachment( $path, $name = &#039;&#039;, $encoding = &#039;base64&#039;, $type = &#039;application/octent-stream&#039; )</code></td>
			<td>F&uuml;gt einen Anhang hinzu</td>
		</tr>
		<tr>
			<td><code>AddBCC( $address, $name = &#039;&#039; )</code></td>
			<td>F&uuml;gt eine Zieladresse f&uuml;r eine verdeckte Kopie (BCC) hinzu</td>
		</tr>
		<tr>
			<td><code>AddCC( $address, $name = &#039;&#039; )</code></td>
			<td>F&uuml;gt eine Zieladresse f&uuml;r eine Kopie (CC) hinzu</td>
		</tr>
		<tr>
			<td><code>AddCustomHeader( $txt )</code></td>
			<td>F&uuml;gt der E-Mail einen benutzerdefinierten Header hinzu</td>
		</tr>
		<tr>
			<td><code>AddEmbeddedImage( $path, $cid, $name = &#039;&#039;, $encoding = &#039;base64&#039;, $type = &#039;application/octent-stream&#039; )</code></td>
			<td>F&uuml;gt ein eingebettetes Bild hinzu</td>
		</tr>
		<tr>
			<td><code>AddReplyTo( $address, $name = &#039;&#039; )</code></td>
			<td>F&uuml;gt eine Adresse f&uuml;r die Antwort-E-Mail hinzu</td>
		</tr>
		<tr>
			<td><code>AddStringAttachment( $string, $filename, $encoding = &#039;base64&#039;, $type = &#039;application/octent-stream&#039; )</code></td>
			<td>F&uuml;gt einen Dateianhang hinzu</td>
		</tr>
		<tr>
			<td><code>ClearAddresses()</code></td>
			<td>L&ouml;scht alle E-Mail-Adressen</td>
		</tr>
		<tr>
			<td><code>ClearAllRecipients()</code></td>
			<td>L&ouml;scht alle Empf&auml;nger</td>
		</tr>
		<tr>
			<td><code>ClearAttachments()</code></td>
			<td>L&ouml;scht alle Anh&auml;nge</td>
		</tr>
		<tr>
			<td><code>ClearBCCs()</code></td>
			<td>L&ouml;scht alle BCC-E-Mail-Adressen</td>
		</tr>
		<tr>
			<td><code>ClearCCs()</code></td>
			<td>L&ouml;scht alle CC-E-Mail-Adressen</td>
		</tr>
		<tr>
			<td><code>ClearCustomHeaders()</code></td>
			<td>L&ouml;scht alle benutzerdefinierten Header</td>
		</tr>
		<tr>
			<td><code>ClearReplyto()</code></td>
			<td>L&ouml;scht die E-Mail-Adresse f&uuml;r die Antwort</td>
		</tr>
		<tr>
			<td><code>IsError()</code></td>
			<td>Pr&uuml;ft, ob eine bestimmte Fehlerbedingung erf&uuml;llt ist</td>
		</tr>
		<tr>
			<td><code>bool IsHTML( $bool )</code></td>
			<td>Kennzeichnet die E-Mail als HTML-E-Mail<br/>
			<em>Hinweis:</em> Dies ist zwar eine M&ouml;glichkeit, jedoch sollte bevorzugt eine get- und set-Methode verwendet werden</td>
		</tr>
		<tr>
			<td><code>bool IsMail()</code></td>
			<td>Pr&uuml;ft, ob mail verwendet werden soll</td>
		</tr>
		<tr>
			<td><code>bool IsQmail()</code></td>
			<td>Pr&uuml;ft, ob qmail verwendet werden soll</td>
		</tr>
		<tr>
			<td><code>IsSendmail()</code></td>
			<td>Pr&uuml;ft, ob sendmail verwendet werden soll</td>
		</tr>
		<tr>
			<td><code>IsSMTP()</code></td>
			<td>Pr&uuml;ft, ob smtp verwendet werden soll</td>
		</tr>
		<tr>
			<td><code>Send()</code></td>
			<td>Versendet die aktuell vorbereitete E-Mail</td>
		</tr>
		<tr>
			<td><code>SetLanguage( $lang_type, $lang_path = &#039;&#039; )</code></td>
			<td>Legt die aktuelle Sprache und <em>(optional)</em> den Sprach-Pfad fest</td>
		</tr>
		<tr>
			<td><code>SmtpClose()</code></td>
			<td>Schlie&szlig;t die smtp-Verbindung</td>
		</tr>
	</tbody>
</table>
<h3>Support</h3>
<p>Dieses Modul beinhaltet keinen kommerziellen Support. Sie k&ouml;nnen jedoch &uuml;ber folgende M&ouml;glichkeiten Hilfe zu dem Modul erhalten:</p>
<ul>
<li>F&uuml;r die letzte Version dieses Moduls, FAQs, dem Versand eines Fehlerreports oder dem Kauf kommerziellen Support besuchen Sie bitte calguys Homepage unter <a href="http://techcom.dyndns.org">techcom.dyndns.org</a>.</li>
<li>Eine weitere Diskussion zu diesem Modul ist auch in den Foren von <a href="http://forum.cmsmadesimple.org">CMS Made Simple</a> zu finden.</li>
<li>Der Autor calguy1000 ist h&auml;ufig im <a href="irc://irc.freenode.net/#cms">CMS IRC Channel</a> zu finden.</li>
<li>Letztlich erreichen Sie den Autor auch &uuml;ber eine direkte E-Mail.</li>
</ul>
<p>Nach der GPL wird diese Software so ver&ouml;ffentlicht, wie sie ist. Bitte lesen Sie den Lizenztext f&uuml;r den vollen Haftungsausschluss.</p>

<h3>Copyright und Lizenz</h3>
<p>Copyright &copy; 2005, Robert Campbell <a href="mailto:calguy1000@hotmail.com"><calguy1000@hotmail.com></a>. Alle Rechte vorbehalten.</p>
<p>Dieses Modul wurde unter der <a href="http://www.gnu.org/licenses/licenses.html#GPL">GNU Public License</a> ver&ouml;ffentlicht. Sie m&uuml;ssen dieser Lizenz zustimmen, bevor Sie das Modul verwenden.</p>';
?>