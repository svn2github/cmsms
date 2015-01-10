<?php
$lang['warning_cron_updated'] = 'Kontrolovanie tohto nastavenia je nepravidelné, v prípade prenastavenia, môže toto upozornenie zmiznúť priebežne.';
$lang['none'] = 'Nie je';
$lang['ssl'] = 'SSL';
$lang['tls'] = 'TLS';
$lang['secure'] = 'Šifrovací mechanizmus';
$lang['info_secure'] = 'Použiteľné iba pri nastavení SMTP metódy, povoľuje nastavenia iného šifrovacie mechanizmu';
$lang['info_cmsmailer'] = 'Modul, ktorý využívajú ostatné moduly na odosielanie e-mailov. Nastavte hodnoty, podľa možností vášho poskytovateľa web priestoru. V prípade, že sa vám nižšie nepodarí odoslať testovaciu správu, skúste kontaktovať vášho administrátora.';
$lang['charset'] = 'Kódovanie';
$lang['sendtestmailconfirm'] = 'Odošle testovaciu správu na zadanú adresu. Ak odosielanie prebehne v poriadku, vrátite sa na túto istú stránku.  Chcete pokračovať?';
$lang['settingsconfirm'] = 'Zapísať aktuálne hodnoty?';
$lang['testsubject'] = 'CMSMailer testovacia správa';
$lang['testbody'] = 'Testovacia správa pre overenie funkčnosti nastavení modulu CMSMailer module.

V prípade, že vám správa dosrazila v poriadku, máte modul nastavený správne.';
$lang['error_notestaddress'] = 'Chyba: Nebola zadaná testovacia adresa';
$lang['prompt_testaddress'] = 'Testovacia e-mailová adresa';
$lang['sendtest'] = 'Odoslať testovaciu správu';
$lang['password'] = 'Heslo';
$lang['username'] = 'Užívateľské meno';
$lang['smtpauth'] = 'SMTP Authentifikácia';
$lang['mailer'] = 'Mailer metoda';
$lang['host'] = 'Názov SMTP hostu<br/><i>(alebo IP adresa)</i>';
$lang['port'] = 'Port SMTP serveru';
$lang['from'] = 'Z adresy';
$lang['fromuser'] = 'Z užívateľského mena';
$lang['sendmail'] = 'Sendmail umiestnenie';
$lang['timeout'] = 'SMTP časový limit';
$lang['submit'] = 'Poslať';
$lang['cancel'] = 'Zrušiť';
$lang['info_mailer'] = 'Spôsob odoslania emailu (sendmail, smtp, mail).  Bežne smtp, ak je dostupné.';
$lang['info_host'] = 'Názov SMTP hostu(platí iba pri použití smtp)';
$lang['info_port'] = 'Číslo SMTP portu (bežne 25) (platí iba pri použití smtp)';
$lang['info_from'] = 'Adresa pužita, ako odosielateľ vo všetkých emailoch.<br/><strong>Poznámka</strong>, táto e-mailová adresa musí byť nastavaná podľa požiadaviek serveru, inak sa môžu vyskytnúť problémi s odosielaním e-mailov.<br/>Pokiaľ si nieste istý kontaktujte správcu servera.';
$lang['info_fromuser'] = 'Priateľské meno použité ako odosielateľ vo všetkých emailoch';
$lang['info_sendmail'] = 'Kompletný adresár k sendmail inštalácii (platí iba pri použití sendmail)';
$lang['info_timeout'] = 'Počet sekúnd pri SMTP konverzácií pred ohlásením chyby (platí iba pri použití smtp)';
$lang['info_smtpauth'] = 'Vyžaduje Váš SMTP server authentifikáciu (platí iba pri použití smtp)';
$lang['info_username'] = 'SMTP meno (platí iba pri použití smtp, ak je vyžiadaná authentifikácia)';
$lang['info_password'] = 'SMTP heslo (platí iba pri použití smtp, ak je vyžiadaná authentifikácia)';
$lang['friendlyname'] = 'CMSMailer Modul';
$lang['postinstall'] = 'CMSMailer modul bol vporiadku nainštalovaný';
$lang['postuninstall'] = 'CMSMailer modul bol odinštalovnaý';
$lang['uninstalled'] = 'Modul odinštalovaný.';
$lang['installed'] = 'Modul verzie %s nainštalovaný.';
$lang['accessdenied'] = 'Nedovolený prístup. Prosím skontrolujte si oprávnenia.';
$lang['error'] = 'Chyba!';
$lang['upgraded'] = 'Modul upgradovaný na verziu %s.';
$lang['settings_title'] = 'Nastavenia';
$lang['test_title'] = 'Kontrola';
$lang['title_mod_prefs'] = 'Predvoľby modulu';
$lang['title_mod_admin'] = 'Administrácia modulu';
$lang['title_admin_panel'] = 'CMSMailer Modul';
$lang['moddescription'] = 'toto je jednoduchá nadstavba PHPMailer triedy, je to equivalent API (funkcia pre funkciu) a jednoduché rozhranie pre základné operácie.';
$lang['changelog'] = '<ul>
<li>Version 1.73.1. Október, 2005. Prvé vydanie.</li>
<li>Version 1.73.2. Október, 2005. Menšia oprava v administrácii. Rozbalovacie menu neukazovalo aktuálnu hodnotu z nastavení v databáze</li>
<li>Version 1.73.3. Október, 2005. Menšia oprava pri odosielaní html e-mailov</li>
<li>Version 1.73.4. November, 2005. Form fields in preferences are larger, fixed a problem with the fromuser, and called reset within the constructor</li>
<li>Version 1.73.5. November, 2005. Pridaná možnosť smtp autentifikácie.</li>
<li>Version 1.73.6. December, 2005. Prednastavený spôsob odosielania je pomocou SMTP, zlepšená dokumentácia.</li>
<li>Version 1.73.7. Január, 2006. Zväčšená dĺžka väčšiny polí</li>
<li>Version 1.73.8. Január, 2006. Zlepšený popis nastavení.</li>
<li>Version 1.73.9. Január, 2006. Pridaná možnosť testovania funkčnosti nastavení modulu.</li>
<li>Version 1.73.10. August, 2006. Úprava pre "lazy loading", kvoli zníženiu záťaže na pamäť, pokiaľ sa modul nepoužíva.</li>
<li>Version 1.73.13. Január, 2008. Pridané väčšie množstvo kontrôl oprávnení.</li>
<li>Version 2.0.1 - Január, 2011 - Odstránené tlačidlo Zrušiť.</li>
<li>Version 2.0.2 - September, 2011 - Základná znaková sada nastavená na utf-8.</li>
<li>Version 5.2.1 - Jún, 2012 - Aktualizácia knižníc.</li>
</ul>';
$lang['help'] = '<h3>What Does This Do?</h3>
<p>This module provides no end user functionality.  It is designed to be integrated into other modules to provide email capabilities.  Thats it, nothing more.</p>
<h3>How Do I Use It</h3>
<p>This module provides a simple wrapper around all of the methods and variables of phpmailer.  It is designed for use by other module developers, below is an example, and a brief API reference.  Please read the PHPMailer documentation included for more information.</p>
<h3>An Example</h3>
<pre>
  $cmsmailer = $this->GetModuleInstance(\'CMSMailer\');
  $cmsmailer->AddAddress(\'calguy1000@hotmail.com\',\'calguy\');
  $cmsmailer->SetBody(\'<h4>This is a test message</h4>\');
  $cmsmailer->IsHTML(true);
  $cmsmailer->SetSubject(\'Test message\');
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
<li><p><b>AddAddress( $address, $name = \'\' )</b></p>
<p>Add a destination address</p>
</li>
<li><p><b>AddAttachment( $path, $name = \'\', $encoding = \'base64\', $type = \'application/octent-stream\' )</b></p>
<p>Add a file attachment</p>
</li>
<li><p><b>AddBCC( $address, $name = \'\' )</b></p>
<p>Add a BCC\'d destination address</p>
</li>
<li><p><b>AddCC( $address, $name = \'\' )</b></p>
<p>Add a CC\'d destination address</p>
</li>
<li><p><b>AddCustomHeader( $txt )</b></p>
<p>Add a custom header to the email</p>
</li>
<li><p><b>AddEmbeddedImage( $path, $cid, $name = \'\', $encoding = \'base64\', $type = \'application/octent-stream\' )</b></p>
<p>Add an embedded image</p>
</li>
<li><p><b>AddReplyTo( $address, $name = \'\' )</b></p>
<p>Add a reply to address</p>
</li>
<li><p><b>AddStringAttachment( $string, $filename, $encoding = \'base64\', $type = \'application/octent-stream\' )</b></p>
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
<li><p><b>SetLanguage( $lang_type, $lang_path = \'\' )</b></p>
<p>Set the current language and <em>(optional)</em> language path</p>
</li>
<li><p><b>SmtpClose()</b></p>
<p>Close the smtp connection</p>
</li>
</ul>
<h3>Support</h3>
<p>This module does not include commercial support. However, there are a number of resources available to help you with it:</p>
<ul>
<li>For the latest version of this module, FAQs, or to file a Bug Report or buy commercial support, please visit calguys homepage at <a href=\'http://techcom.dyndns.org\'>techcom.dyndns.org</a>.</li>
<li>Additional discussion of this module may also be found in the <a href=\'http://forum.cmsmadesimple.org\'>CMS Made Simple Forums</a>.</li>
<li>The author, calguy1000, can often be found in the <a href=\'irc://irc.freenode.net/#cms\'>CMS IRC Channel</a>.</li>
<li>Lastly, you may have some success emailing the author directly.</li>  
</ul>
<p>As per the GPL, this software is provided as-is. Please read the text
of the license for the full disclaimer.</p>

<h3>Copyright and License</h3>
<p>Copyright &copy; 2005, Robert Campbell <a href=\'mailto:calguy1000@hotmail.com\'><calguy1000@hotmail.com></a>. All Rights Are Reserved.</p>
<p>This module has been released under the <a href=\'http://www.gnu.org/licenses/licenses.html#GPL\'>GNU Public License</a>. You must agree to this license before using the module.</p>';
?>