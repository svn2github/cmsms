<?php
$lang['warning_cron_updated'] = 'Ovaj test se obavlja prilično neredovno. Možda će biti potrebno neko vreme da ova poruka prestane da se prikazuje.';
$lang['none'] = 'Nijedan';
$lang['ssl'] = 'SSL';
$lang['tls'] = 'TLS';
$lang['secure'] = 'Mehanizam enkripcije';
$lang['info_secure'] = 'Odnosi se samo na SMTP mailer metod. Ova opcija omogućava specificiranje različitih mehanizama enkripcije veze';
$lang['info_cmsmailer'] = 'Ovaj modul koriste brojni drugi moduli za slanje e-mail poruka. Mora biti pravilno konfigurisan prema zahtevima Va&scaron;eg hosting provajdera. Molimo upotrebite informacije koje Vam je obezbedio hosting provajder da biste konfigurisali ova pode&scaron;avanja. Ukoliko ni posle toga ne možete uspe&scaron;no poslati test poruku, možda biste trebali kontaktirati svog hosting provajdera i tražiti pomoć.';
$lang['charset'] = 'Kodni raspored';
$lang['sendtestmailconfirm'] = 'Ovom komandom će biti poslata test poruka na specificiranu adresu. Ukoliko slanje uspije, bićete vraćeni na ovu stranicu. Da li želite da nastavite?';
$lang['settingsconfirm'] = 'Upisati trenutne vrednosti u pode&scaron;avanja CMSMailer modula?';
$lang['testsubject'] = 'CMSMailer test poruka';
$lang['testbody'] = 'Ova poruka je namenjena samo za verifikaciju ispravnosti pode&scaron;avanja CMSMailer modula.
Ukoliko ste je primili, sve funkcioni&scaron;e kako treba.';
$lang['error_notestaddress'] = 'Gre&scaron;ka: niste uneli e-mail adresu za testiranje';
$lang['prompt_testaddress'] = 'Test e-mail adresa';
$lang['sendtest'] = 'Po&scaron;alji test poruku';
$lang['password'] = 'Lozinka';
$lang['username'] = 'Korisničko ime';
$lang['smtpauth'] = 'SMTP autentifikacija';
$lang['mailer'] = 'Mailer metoda';
$lang['host'] = 'Naziv SMTP servera<br/><i>(ili IP adresa)</i>';
$lang['port'] = 'Port SMTP servera';
$lang['from'] = 'Adresa po&scaron;iljaoca';
$lang['fromuser'] = 'Od Korisničkog imena';
$lang['sendmail'] = 'Sendmail lokacija';
$lang['timeout'] = 'SMTP tajm-out';
$lang['submit'] = 'Po&scaron;alji';
$lang['cancel'] = 'Otkaži';
$lang['info_mailer'] = 'Mail metod koja se koristi (sendmail, smtp, mail).  Obično SMTP Je najpouzdaniJi.';
$lang['info_host'] = 'SMTP hostname (važi samo za smtp metodu)';
$lang['info_port'] = 'SMTP port number (normalno 25) (važi samo za smtp metodu)';
$lang['info_from'] = 'Adresa koja se postavlja kao adresa po&scaron;iljaoca u svim porukama.<br/><strong>Napomena</strong>, ova adresa mora biti pode&scaron;ena u skladu sa parametrima Va&scaron;eg hosting provajdera. U suprotnom ćete imati problema prilikom slanja e-po&scaron;te.<br/>Ukoliko ne znate ispravnu vrednost za ovo pode&scaron;avanje, kontaktirajte svog hosting provajdera.';
$lang['info_fromuser'] = 'Prijateljski naziv koji se koristi za slanje svih e-poruka';
$lang['info_sendmail'] = 'Puna putanja do Va&scaron;e izvr&scaron;ne sendmail datoteke (važi samo za SMTP mailer metod)';
$lang['info_timeout'] = 'Broj sekundi u SMTP interakciji pre nego &scaron;to se dogodi gre&scaron;ka (važi samo za SMTP mailer metod)';
$lang['info_smtpauth'] = 'Da li Va&scaron; SMTP host zahteva autentifikaciju? (važi samo za SMTP mailer metod)';
$lang['info_username'] = 'SMTP authentikaciono korisničko ime (validno samo za SMTP mailer metod, kada je selektovana opcija SMTP autentifikacije)';
$lang['info_password'] = 'SMTP authentikaciona lozinka (validna samo za SMTP mailer metod, kada je selektovana opcija SMTP autentifikacije)';
$lang['friendlyname'] = 'CMSMailer';
$lang['postinstall'] = 'CMSMailer modul je uspe&scaron;no instaliran';
$lang['postuninstall'] = 'CMSMailer modul deinstaliran.';
$lang['uninstalled'] = 'Module deinstaliran.';
$lang['installed'] = 'Instalirana je %s verzija modula.';
$lang['accessdenied'] = 'Pristup nije dozvoljen. Molimo proverite dozvole.';
$lang['error'] = 'Gre&scaron;ka!';
$lang['upgraded'] = 'Modul je nadograđen u verziju %s.';
$lang['title_mod_prefs'] = 'Pode&scaron;avanja modula';
$lang['title_mod_admin'] = 'Administratorski panel modula';
$lang['title_admin_panel'] = 'CMSMailer Modul';
$lang['moddescription'] = 'Ovo je jednostavan &quot;omotač&quot; oko PHPMailer klase, ima ekvivalentan API (funkcija za funkciju) i jednostavan interfejs za neke podrazumevane vrednosti.';
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
$lang['help'] = '<h3>Čemu ovo služi?</h3>
<p>Ovaj modul ne pruža nikakve funkcionalnosti krajnjem korisniku.  Napravljen je tako da omogući drugim modulima da &scaron;alju e-mail poruke. Ni&scaron;ta vi&scaron;e od toga.</p>
<h3>Kako se koristi?</h3>
<p>Ovaj modul pruža jednostavan &quot;omotač&quot; oko svih metoda i promenljivih PHPMailer funkcije. Namenjen je za upotrebu od strane drugih ljudi koji razvijaju module. Ispod možete videti primer upotrebe i sažet priručnik za upotrebu API. Molimo pročitajte priloženu dokumentaciju PHPMailer funkcije za vi&scaron;e informacija.</p>
<h3>Primer upotrebe</h3>
<pre>
  $cmsmailer = $this->GetModuleInstance(&#039;CMSMailer&#039;);
  $cmsmailer->AddAddress(&#039;calguy1000@hotmail.com&#039;,&#039;calguy&#039;);
  $cmsmailer->SetBody(&#039;<h4>Ovo je test poruka</h4>&#039;);
  $cmsmailer->IsHTML(true);
  $cmsmailer->SetSubject(&#039;Test poruka&#039;);
  $cmsmailer->Send();
</pre>
<h3>API</h3>
<ul>
<li><p><b>void reset()</b></p>
<p>Resetuje objekat na vrenosti pode&scaron;ene u administratorskom panelu</p>
</li>
<li><p><b>string GetAltBody()</b></p>
<p>Vraća alternativni sadržaj e-mail poruke</p>
</li>
<li><p><b>void SetAltBody( $string )</b></p>
<p>Postavlja alternativni sadržaj e-mail poruke</p>
</li>
<li><p><b>string GetBody()</b></p>
<p>Vraća primarni sadržaj e-mail poruke</p>
</li>
<li><p><b>void SetBody( $string )</b></p>
<p>Postavlja primarni sadržaj e-mail poruke</p>
</li>
<li><p><b>string GetCharSet()</b></p>
<p>Podrazumevana vrednost: iso-8859-1</p>
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
<p>This module does not include commercial support. However, there are a number of resources available to help you with it:</p>
<ul>
<li>For the latest version of this module, FAQs, or to file a Bug Report or buy commercial support, please visit calguys homepage at <a href=&#039;http://techcom.dyndns.org&#039;>techcom.dyndns.org</a>.</li>
<li>Additional discussion of this module may also be found in the <a href=&#039;http://forum.cmsmadesimple.org&#039;>CMS Made Simple Forums</a>.</li>
<li>The author, calguy1000, can often be found in the <a href=&#039;irc://irc.freenode.net/#cms&#039;>CMS IRC Channel</a>.</li>
<li>Lastly, you may have some success emailing the author directly.</li>  
</ul>
<p>As per the GPL, this software is provided as-is. Please read the text
of the license for the full disclaimer.</p>

<h3>Copyright and License</h3>
<p>Copyright &copy; 2005, Robert Campbell <a href=&#039;mailto:calguy1000@hotmail.com&#039;><calguy1000@hotmail.com></a>. All Rights Are Reserved.</p>
<p>This module has been released under the <a href=&#039;http://www.gnu.org/licenses/licenses.html#GPL&#039;>GNU Public License</a>. You must agree to this license before using the module.</p>
';
$lang['utma'] = '156861353.332286768.1323818253.1323818253.1323818253.1';
$lang['utmb'] = '156861353';
$lang['utmc'] = '156861353';
$lang['utmz'] = '156861353.1323818253.1.1.utmccn=(referral)|utmcsr=cmsms.org|utmcct=/|utmcmd=referral';
?>