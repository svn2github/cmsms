<?php
$lang['warning_cron_updated'] = '這項測試是一種罕見基礎上產生的，讓它消失可能需要一些時間';
$lang['none'] = '無';
$lang['ssl'] = '安全通訊端層(SSL)';
$lang['tls'] = '傳輸層安全(TLS)';
$lang['secure'] = '加密機制';
$lang['info_secure'] = '只適用於SMTP郵件的方法，此選項允許指定用於連接不同的加密機制';
$lang['info_cmsmailer'] = '該模組用於許多其他模組，以方便發送電子郵件。必須正確配置您的主機的要求。請使用主機提供的信息來調整這些設置。如果仍然不能得到正常發送的測試郵件，您可能必需和您的主機商聯絡，尋求協助。';
$lang['charset'] = '字集';
$lang['sendtestmailconfirm'] = '這將測試訊息發送到指定的地址。 如果發送過程成功，您將返回到該頁面。你要繼續嗎？';
$lang['settingsconfirm'] = '寫入正確的值至CMSMailer設定？';
$lang['testsubject'] = 'CMSMailer 測試訊息';
$lang['testbody'] = '此訊息僅用於驗證設置在CMSMailer模組的有效性。
如果你收到它，表示CMSMailer模組一切正常。';
$lang['error_notestaddress'] = '錯誤: 測試位址沒有被指定';
$lang['prompt_testaddress'] = '測試Email位址';
$lang['sendtest'] = '傳送測試訊息';
$lang['password'] = '密碼';
$lang['username'] = '帳號';
$lang['smtpauth'] = 'SMTP 驗證';
$lang['mailer'] = '郵寄方式';
$lang['host'] = 'SMTP 主機名稱<br/><i>(或是 IP 位址)</i>';
$lang['port'] = 'SMTP 伺服器埠號';
$lang['from'] = '從位址';
$lang['fromuser'] = '從帳號';
$lang['sendmail'] = 'Sendmail的位置';
$lang['timeout'] = 'SMTP 超時';
$lang['submit'] = '提交';
$lang['cancel'] = '取消';
$lang['info_mailer'] = '使用郵寄的方法(sendmail, smtp, mail).  通常smtp 最被常常使用.';
$lang['info_host'] = '主機的SMTP（只有使用SMTP郵寄的方法有效）';
$lang['info_port'] = 'SMTP端口號​​（通常為25）（只適用於有效的SMTP郵寄的方法）';
$lang['info_from'] = '地址是作為所有郵件發送者的地址。 <br/><strong>注意</strong>, 這個電子郵件地址必須正確設置為您的主機以發送電子郵件，否則會有問題。<br/>如果你不知道此設置適當的值，你可能需要聯繫你的主機商。';
$lang['info_fromuser'] = '友善名稱，用於發送的所有電子郵件';
$lang['info_sendmail'] = '您的sendmail可執行文件的完整路徑（僅適用於sendmail的郵件的方法有效）';
$lang['info_timeout'] = 'SMTP交談錯誤發生前的秒數（僅適用於SMTP郵件的方法）';
$lang['info_smtpauth'] = '請問您的SMTP主機需要認證（僅適用於有效的SMTP郵件的方法）';
$lang['info_username'] = 'SMTP認證的用戶名（僅用於SMTP郵件的方法，選擇SMTP AUTH時有效）';
$lang['info_password'] = 'SMTP驗證的密碼（僅用於SMTP郵件的方法，選擇SMTP AUTH時有效）';
$lang['friendlyname'] = 'CMSMailer郵件收發機';
$lang['postinstall'] = 'CMSMailer 模組已經成功被安裝。';
$lang['postuninstall'] = 'CMSMailer 模組已經解除安裝... 抱歉看到您離開';
$lang['uninstalled'] = '模組已經解除安裝。';
$lang['installed'] = '模組版本 %s 已經安裝。';
$lang['accessdenied'] = '存取被拒絕，請檢查您的權限。';
$lang['error'] = '錯誤!';
$lang['upgraded'] = '模組更新至版本 %s.';
$lang['title_mod_prefs'] = '模組偏好';
$lang['title_mod_admin'] = '模組管理介面';
$lang['title_admin_panel'] = 'CMSMailer 模組';
$lang['moddescription'] = '這是一個PHPMailer的簡單包裝器，它預設了具有同等的API（函數的功能）和一些簡單的介面。';
$lang['changelog'] = '<ul>
<li>版本 1.73.1. 十月, 2005. 初始發行.</li>
<li>版本 1.73.2. 十月, 2005.管理面板的小錯誤修復程序。下拉列表中的目前值沒有代表數據庫中偏好設定</li>
<li>版本 1.73.3. 十月, 2005. 修復發送HTML格式的郵件的小錯誤</li>
<li>版本 1.73.4. 十一月, 2005. 在首選項中的表單字段都較大，修復與FROMUSER的問題，並重設在構造函數中</li>
<li>版本 1.73.5. 十一月, 2005. 添加表單字段和SMTP認證功能.</li>
<li>版本 1.73.6. 十二月, 2005. Default mailer method is SMTP on install, and improved documentation, and now I clear all the attachments, and addresses, etc. on reset.</li>
<li>版本 1.73.7. 一月, 2006. 在大多數字段的增加字段長度</li>
<li>版本 1.73.8. 一月, 2006. 更改首選項面板是一個更多的描述.</li>
<li>版本 1.73.9. 一月, 2006. 增加了測試電子郵件功能，並確認在每個按鈕上 (除了取消按鍵)</li>
<li>版本 1.73.10. 八月, 2006. 修改使用延遲加載，以最大限度地減少內存的足跡時CMSMailer是未在使用.</li>
<li>版本 1.73.13. 一月, 2008.  增加了更多的權限檢查.</li>
<li>版本 2.0.1 - 一月, 2011 - 移除取消按鍵.</li>
<li>版本 2.0.2 - 九月, 2011 - Set default charset to utf-8.</li>
</ul>';
$lang['help'] = '<h3>這樣做有什麼？</h3>
<p>該模塊提供了非終端用戶使用的功能。它被設計為被集成到其他模塊提供電子郵件功能。就這麼簡單，僅此而已。</p>
<h3>我如何使用它</h3>
<p>該模塊提供了一個簡單的包裝，所有的方法和變量PHPMailer的。它是專為使用其他模塊的開發，下面是一個例子，一個簡短的API參考。請仔細閱讀PHPMailer的文件包含更多的信息。</p>
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
<p>This module has been released under the <a href=\'http://www.gnu.org/licenses/licenses.html#GPL\'>GNU Public License</a>. You must agree to this license before using the module.</p>';
$lang['utma'] = '156861353.792665568.1356532925.1356532925.1356539477.2';
$lang['utmc'] = '156861353';
$lang['utmz'] = '156861353.1356539477.2.2.utmccn=(referral)|utmcsr=cmsmadesimple.org|utmcct=/|utmcmd=referral';
$lang['utmb'] = '156861353';
?>