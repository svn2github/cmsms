<?php
$lang['none'] = 'אין';
$lang['ssl'] = 'SSL מאובטח';
$lang['tls'] = 'TLS מאובטח';
$lang['secure'] = 'מנגנון הצפנה';
$lang['info_secure'] = 'ישים רק שיטת הודעת SMTP, אפשרות זו מאפשרת הגדרת מנגנוני הצפנה שונים עבור החיבור';
$lang['info_cmsmailer'] = 'מודול זה נמצא בשימוש על ידי מודולים אחרים רבים כדי להקל על שליחת מיילים. זה חייב להיות מוגדר כראוי לדרישות המארחים שלך. נא להשתמש במידע המסופק על ידי המארח שלך לשנות הגדרות אלה. אם אתה עדיין לא יכול לקבל את ההודעה המבחן לשלוח כראוי, ייתכן שתיאלץ לפנות בהגשת סיוע.';
$lang['charset'] = 'Character Set התווים';
$lang['sendtestmailconfirm'] = 'זה ישלח מסר המבחן לכתובת שצוינה. אם התהליך הצליח לשלוח, תנותב בחזרה לדף זה. האם ברצונך להמשיך?';
$lang['settingsconfirm'] = 'האם לשמור ערכים אללו להגדרות CMSMailer?';
$lang['testsubject'] = 'CMSMailer הודעה טסט';
$lang['testbody'] = 'הודעה זו מיועדת רק כדי לאמת את תקפות ההגדרות במודול CMSMailer.
אם קיבלת את זה, הכל עובד בסדר.';
$lang['error_notestaddress'] = 'שגיאה: הכתובת לבדוק לא צוין';
$lang['prompt_testaddress'] = 'כתובת דוא"ל לניסיון';
$lang['sendtest'] = 'שלח הודעה נסיון';
$lang['password'] = 'סיסמה';
$lang['username'] = 'שם משתמש';
$lang['smtpauth'] = 'SMTP אימות';
$lang['mailer'] = 'Mailer השיטת';
$lang['host'] = 'SMTP המארח שם<br/><i>(או IP כתובת)</i>';
$lang['port'] = 'פורט של שרת SMTP';
$lang['from'] = 'מכתובת';
$lang['fromuser'] = 'מאת שם משתמש';
$lang['sendmail'] = 'Sendmail מיקום';
$lang['timeout'] = 'SMTP פק זמן';
$lang['submit'] = 'שלח';
$lang['cancel'] = 'ביטול';
$lang['info_mailer'] = 'השיטת דואר להשתמש (sendmail, SMTP, דוא"ל). בדרך כלל SMTP הוא הכי אמין.';
$lang['info_host'] = 'SMTP המארח שם (רק תקף את שיטת הודעת smtp)';
$lang['info_port'] = 'SMTP מספר פורט (בדרך כלל 25) (תקף רק שיטת הודעת SMTP)';
$lang['info_from'] = 'כתובת משמש השולח לכל בהודעות דוא"ל. <br/><strong>הערה</strong>, כתובת דוא"ל זו חייב להיות מוגדר כהלכה עבור המארח שלך או שאתה יתקשה שליחת הודעות דוא"ל.<br/>אם אינך יודע את הערך הנכון עבור הגדרה זו, ייתכן שתצטרך לפנות בהגשת.';
$lang['info_fromuser'] = 'שם ידידותי המשמש לשליחת כל הודעות דוא"ל';
$lang['info_sendmail'] = 'הנתיב המלא sendmail ההפעלה שלך (תקף רק שיטת הודעת sendmail)';
$lang['info_timeout'] = 'מספר שניות בשיחה SMTP לפני מתרחשת שגיאה (תקף שיטת הודעת SMTP)';
$lang['info_smtpauth'] = 'האם המארח smtp שלך דורש אימות (תקף רק שיטת הודעת SMTP)';
$lang['info_username'] = 'שם משתמש SMTP אימות (תקף רק שיטת SMTP מיילר, כאשר המחבר SMTP מסומנת)';
$lang['info_password'] = 'SMTP אימות סיסמה (תקף רק שיטת SMTP מיילר, כאשר המחבר SMTP מסומנת)';
$lang['friendlyname'] = 'CMSMailer מודול';
$lang['postinstall'] = 'מודול CMSMailer הותקן בהצלחה';
$lang['postuninstall'] = 'CMSMailer המודול הוסר ... מצטער לראות אותך עוזב';
$lang['uninstalled'] = 'המודול הוסר.';
$lang['installed'] = 'מודול גירסת %s מותקן.';
$lang['accessdenied'] = 'הגישה נדחתה. אנא בדוק את ההרשאות שלך.';
$lang['error'] = 'שגיאה!';
$lang['upgraded'] = 'מודול לשדרג לגרסה %s.';
$lang['title_mod_prefs'] = 'העדפות המודול';
$lang['title_mod_admin'] = 'מודול פאנל ניהול';
$lang['title_admin_panel'] = 'CMSMailer מודול';
$lang['moddescription'] = 'זוהי מעטפת פשוטה סביב PHPMailer, יש API המקבילה (פונקציה עבור פונקציה) ו ממשק פשוט עבור ברירת המחדל של חלק.';
$lang['welcome_text'] = '<p>ברוכים הבאים CMSMailer module admin section';
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
<p>Copyright © 2005, Robert Campbell <a href=\'mailto:calguy1000@hotmail.com\'><calguy1000@hotmail.com></a>. All Rights Are Reserved.</p>
<p>This module has been released under the <a href=\'http://www.gnu.org/licenses/licenses.html#GPL\'>GNU Public License</a>. You must agree to this license before using the module.</p>
';
$lang['qca'] = 'P0-2002441699-1270635418106';
$lang['utmz'] = '156861353.1273086462.8.3.utmcsr=4x6hp.net|utmccn=(referral)|utmcmd=referral|utmcct=/iarc/index.php';
$lang['utma'] = '156861353.616050282.1270635418.1273384567.1273415774.13';
$lang['utmc'] = '156861353';
$lang['utmb'] = '156861353';
?>