<?php
$lang['admin']['stylesheetcopied'] = 'Stil Kopyalandı';
$lang['admin']['templatecopied'] = 'Şablon Kopyalandı';
$lang['admin']['ecommerce_desc'] = 'E-Ticaret desteği olan mod&uuml;ller';
$lang['admin']['ecommerce'] = 'E-Ticaret';
$lang['admin']['help_function_content_module'] = '<h3>What does this do?</h3>
<p>This content block type allows interfacing with different modules to create different content block types.</p>
<p>Some modules can define content block types for use in module templates.  i.e: The FrontEndUsers module may define a group list content block type.  It will then indicate how you can use the content_module tag to utilize that block type within your templates.</p>
<p><strong>Note:</strong> This block type must be used only with compatible modules.  You should not use this in any way except for as guided by addon modules.</p>';
$lang['admin']['error_parsing_content_blocks'] = 'An error occurred parsing content blocks (perhaps duplicated block names)';
$lang['admin']['error_no_default_content_block'] = 'No default content block was detected in this template.  Please ensure that you have a {content} tag in the page template.';
$lang['admin']['help_function_cms_stylesheet'] = '	<h3>What does this do?</h3>
  <p>A replacement for the {stylesheet} tag, this tag provides caching of css files by generating static files in the tmp/cache directory, and smarty processing of the individual stylesheets.</p>
  <p>This plugin retrieves stylesheet information from the system.  By default, it grabs all of the stylesheets attached to the current template in the order specified by the designer, and generates stylesheet tags.</p>
  <p>Generated stylesheets are uniquely named according to the last modification date in the database, and are only generated if the stylesheet has changed.</p>
  <p>This tag is the replacement for the {stylesheet} tag.</p>
  <h3>How do I use it?</h3>
  <p>Just insert the tag into your template/page&#039;s head section like: <code>{cms_stylesheet}</code></p>
  <h3>What parameters does it take?</h3>
  <ul>
  <li><em>(optional)</em>name - Instead of getting all stylesheets for the given page, it will only get one specifically named one, whether it&#039;s attached to the current template or not.</li>
  <li><em>(optional)</em>templateid - If templateid is defined, this will return stylesheets associated with that template instead of the current one.</li>
  <li><em>(optional)</em>media - When used in conjunction with the name parameter this parameter will allow you to override the media type for that stylesheet.  When used in conjunction with the templateid parameter, the media parameter will only output stylesheet tags for those stylesheets that arer marked as compatible with the specified media type.</li>
  </ul>
  <h3>Smarty Processing</h3>
  <p>When generating css files this system passes the stylesheets retrieved from the database through smarty.  The smarty delimiters have been changed from the CMSMS standard { and } to [[ and ]] respectively to ease transition in stylesheets.  This allows creating smarty variables i.e.: [[assign var=&#039;red&#039; value=&#039;#900&#039;]] at the top of the stylesheet, and then using these variables later in the stylesheet, i.e:</p>
<pre>
<code>
h3 .error { color: [[$red]]; }<br/>
</code>
</pre>
<p>Because the cached files are generated in the tmp/cache directory of the CMSMS installation, the CSS relative working directory is not the root of the website.  Therefore any images, or other tags that require a url should use the [[root_url]] tag to force it to be an absolute url. i.e:</p>
<pre>
<code>
h3 .error { background: url([[root_url]]/uploads/images/error_background.gif); }<br/>
</code>
</pre>
<p><strong>Note:</strong> Due to the caching nature of the plugin, smarty variables should be placed at the top of EACH stylesheet that is attached to a template.</p>';
$lang['admin']['pseudocron_granularity'] = 'Pseudocron Granularity';
$lang['admin']['info_pseudocron_granularity'] = 'Bu ayar zamanlanmış g&ouml;revlerin hangi periyodlarla ele alınacağını belirtmektedir';
$lang['admin']['cron_request'] = 'Herbir istek';
$lang['admin']['cron_15m'] = '15 Dakika';
$lang['admin']['cron_30m'] = '30 Dakika';
$lang['admin']['cron_60m'] = '1 Saat';
$lang['admin']['cron_120m'] = '2 Saat';
$lang['admin']['cron_3h'] = '3 Saat';
$lang['admin']['cron_6h'] = '6 Saat';
$lang['admin']['cron_12h'] = '12 Saat';
$lang['admin']['cron_24h'] = '24 Saat';
$lang['admin']['clearcache_taskdescription'] = 'Executed daily, this task will clear cached files that are older than the age preset in the global preferences';
$lang['admin']['clearcache_taskname'] = 'Cache Dosyalarını Temizle';
$lang['admin']['info_autoclearcache'] = 'Specify an integer value. Enter 0 to disable automatic cache clearing';
$lang['admin']['autoclearcache'] = 'Automatically clear the cache every N days';
$lang['admin']['listtemplates_pagelimit'] = 'Number of rows per page when viewing templates';
$lang['admin']['liststylesheets_pagelimit'] = 'Number of rows per page when viewing stylesheets';
$lang['admin']['listgcbs_pagelimit'] = 'Number of rows per page when viewing Global Content Blocks';
$lang['admin']['insecure'] = 'Normal (HTTP)';
$lang['admin']['secure'] = 'G&uuml;venli (HTTPS)';
$lang['admin']['secure_page'] = 'Bu sayfa i&ccedil;in HTTPS kullan';
$lang['admin']['thumbnail_width'] = 'K&uuml;&ccedil;&uuml;k Resim Genişlik';
$lang['admin']['thumbnail_height'] = 'K&uuml;&ccedil;&uuml;k Resim Y&uuml;kseklik';
$lang['admin']['E_STRICT'] = 'Is E_STRICT disabled in error_reporting';
$lang['admin']['test_estrict_failed'] = 'E_STRICT is enabled in the error_reporting';
$lang['admin']['info_estrict_failed'] = 'Some libraries that CMSMS uses do not work well with E_STRICT.  Please disable this before continuing';
$lang['admin']['E_DEPRECATED'] = 'Is E_DEPRECATED disabled in error_reporting';
$lang['admin']['test_edeprecated_failed'] = 'E_DEPRECATED is enabled';
$lang['admin']['info_edeprecated_failed'] = 'If E_DEPRECATED is enabled in your error reporting users will see alot of warning messages that could effect the display and functionalty';
$lang['admin']['session_use_cookies'] = 'Sessions are allowed to use Cookies';
$lang['admin']['errorgettingcontent'] = 'Could not retrieve information for the specified content object';
$lang['admin']['errordeletingcontent'] = 'İ&ccedil;erik silme hatası (Bu sayfa alt sayfalar barındırıyor veya varsayılan olarak se&ccedil;ilmiş sayfa olabilir.)';
$lang['admin']['invalidemail'] = 'Email adresi yanlış girildi';
$lang['admin']['info_deletepages'] = 'Note: due to permission restrictions, some of the pages you selected for deletion may not be listed below';
$lang['admin']['info_pagealias'] = 'Bu sayfa i&ccedil;in benzersiz bir sayfa takma adı belirleyiniz.';
$lang['admin']['info_autoalias'] = 'Eğer bu alan boş brakılmışsa, takma isim otomatik olarak yaratılacaktır.';
$lang['admin']['invalidparent'] = 'You must select a parent page (contact your administrator if you do not see this option).';
$lang['admin']['forgotpwprompt'] = 'Y&ouml;netici kullanıcı adını giriniz. An email will then be sent to the email address associated with that username with new login information';
$lang['admin']['info_basic_attributes'] = 'This field allows you to specify which content properties that users without the &quot;Manage All Content&quot; permission are allowed to edit.';
$lang['admin']['basic_attributes'] = 'Temel Ayarlar';
$lang['admin']['no_permission'] = 'Bu &ouml;zelliği kullanma yetkiniz bulunmamaktadır.';
$lang['admin']['bulk_success'] = 'Toplu işlem başarıyla g&uuml;ncellendi.';
$lang['admin']['no_bulk_performed'] = 'Toplu işlem yapılamadı.';
$lang['admin']['info_preview_notice'] = 'Warning: This preview panel behaves much like a browser window allowing you to navigate away from the initially previewed page. However, if you do that, you may experience unexpected behaviour. If you navigate away from the initial display and return, you may not see the un-committed content until you make a change to the content in the main tab, and then reload this tab. When adding content, if you navigate away from this page, you will be unable to return, and must refresh this panel.';
$lang['admin']['sitedownexcludes'] = 'Bu adresleri Site Kapalı mesajından &ccedil;ıkar.';
$lang['admin']['info_sitedownexcludes'] = 'This parameter allows listing a comma separated list of ip addresses or networks that should not be subject to the sitedown mechanism.  This allows administrators to work on a site whilst anonymous visitors receive a sitedown message.<br/><br/>Addresses can be specified in the following formats:<br/>
1. xxx.xxx.xxx.xxx -- (exact IP address)<br/>
2. xxx.xxx.xxx.[yyy-zzz] -- (IP address range)<br/>
3. xxx.xxx.xxx.xxx/nn -- (nnn = number of bits, cisco style.  i.e:  192.168.0.100/24 = entire 192.168.0 class C subnet)';
$lang['admin']['setup'] = 'Gelişmiş Ayarlar';
$lang['admin']['handle_404'] = 'Varsayılan 404 Kullanımı';
$lang['admin']['sitedown_settings'] = 'Site Kapalı Ayarları';
$lang['admin']['general_settings'] = 'Genel Ayarlar';
$lang['admin']['help_function_page_attr'] = '<h3>What does this do?</h3>
<p>This tag can be used to return the value of the attributes of a certain page.</p>
<h3>How do I use it?</h3>
<p>Insert the tag into the template like: <code>{page_attr key=&quot;extra1&quot;}</code>.</p>
<h3>What parameters does it take?</h3>
<ul>
  <li><strong>key [required]</strong> The key to return the attribute of.</li>
</ul>';
$lang['admin']['forge'] = 'Forge';
$lang['admin']['disable_wysiwyg'] = 'Disable WYSIWYG editor on this page (regardless of template or user settings)';
$lang['admin']['help_function_page_image'] = '<h3>What does this do?</h3>
<p>This tag can be used to return the value of the image or thumbnail fields of a certain page.</p>
<h3>How do I use it?</h3>
<p>Insert the tag into the template like: <code>{page_image}</code>.</p>
<h3>What parameters does it take?</h3>
<ul>
  <li>thumbnail - Optionally display the value of the thumbnail property instead of the image property.</li>
</ul>';
$lang['admin']['pagelink_circular'] = 'A page link cannot list another page link as its destination';
$lang['admin']['destinationnotfound'] = 'Se&ccedil;ilen sayfa bulunamadı veya ge&ccedil;erli değil';
$lang['admin']['help_function_dump'] = '<h3>What does this do?</h3>
  <p>This tag can be used to dump the contents of any smarty variable in a more readable format.  This is useful for debugging, and editing templates, to know the format and types of data available.</p>
<h3>How do I use it?</h3>
<p>Insert the tag in the template like <code>{dump item=&#039;the_smarty_variable_to_dump&#039;}</code>.</p>
<h3>What parameters does it take?</h3>
<ul>
<li><strong>item (required)</strong> - The smarty variable to dump the contents of.</li>
<li>maxlevel - The maximum number of levels to recurse (applicable only if recurse is also supplied.  The default value for this parameter is 3</li>
<li>nomethods - Skip output of methods from objects.</li>
<li>novars - Skip output of object members.</li>
<li>recurse - Recurse a maximum number of levels through the objects providing verbose output for each item until the maximum number of levels is reached.</li>
</ul>';
$lang['admin']['sqlerror'] = 'SQL error in %s';
$lang['admin']['image'] = 'Resim';
$lang['admin']['thumbnail'] = 'K&uuml;&ccedil;&uuml;k Resim';
$lang['admin']['searchable'] = 'Bu sayfa aranabilir';
$lang['admin']['help_function_content_image'] = '<h3>What does this do?</h3>
<p>This plugin allows template designers to prompt users to select an image file when editing the content of a page. It behaves similarly to the content plugin, for additional content blocks.</p>
<h3>How do I use it?</h3>
<p>Just insert the tag into your page template like: <code>{content_image block=&#039;image1&#039;}</code>.</p>
<h3>What parameters does it take?</h3>
<ul>
  <li><strong>(required)</strong> block - The name for this additional content block.
  <p>Example:</p>
  <pre>{content_image block=&#039;image1&#039;}</pre><br/>
  </li>

  <li><em>(optional)</em> label - A label or prompt for this content block in the edit content page.  If not specified, the block name will be used.</li>
 
  <li><em>(optional)</em> dir - The name of a directory (relative to the uploads directory, from which to select image files. If not specified, the uploads directory will be used.
  <p>Example: use images from the uploads/image directory.</p>
  <pre>{content_image block=&#039;image1&#039; dir=&#039;images&#039;}</pre><br/>
  </li>

  <li><em>(optional)</em> class - The css class name to use on the img tag in frontend display.</li>

  <li><em>(optional)</em> id - The id name to use on the img tag in frontend display.</li> 

  <li><em>(optional)</em> name - The tag name to use on the img tag in frontend display.</li> 

  <li><em>(optional)</em> width - The desired width of the image.</li>

  <li><em>(optional)</em> height - The desired height of the image.</li>

  <li><em>(optional)</em> alt - Alternative text if the image cannot be found.</li>


</ul>';
$lang['admin']['error_udt_name_chars'] = 'A valid UDT name starts with a letter or underscore, followed by any number of letters, numbers, or underscores.';
$lang['admin']['errorupdatetemplateallpages'] = 'Şablun şu anda aktif';
$lang['admin']['hidefrommenu'] = 'Men&uuml;de G&ouml;sterme';
$lang['admin']['settemplate'] = 'Şablon Belirle';
$lang['admin']['text_settemplate'] = 'Se&ccedil;ilen sayfa i&ccedil;in farklı bir şablon belirle';
$lang['admin']['cachable'] = 'Tamponlanabilir';
$lang['admin']['noncachable'] = 'Tamponlanamaz';
$lang['admin']['copy_from'] = 'Buradan Kopyala';
$lang['admin']['copy_to'] = 'Buraya Kopyala';
$lang['admin']['copycontent'] = 'İ&ccedil;eriği Kopyala';
$lang['admin']['md5_function'] = 'md5 fonksiyonu';
$lang['admin']['tempnam_function'] = 'tempnam function';
$lang['admin']['register_globals'] = 'PHP register_globals';
$lang['admin']['output_buffering'] = 'PHP output_buffering';
$lang['admin']['disable_functions'] = 'disable_functions in PHP';
$lang['admin']['xml_function'] = 'Basic XML (expat) support';
$lang['admin']['magic_quotes_gpc'] = 'Magic quotes for Get/Post/Cookie';
$lang['admin']['magic_quotes_gpc_on'] = 'Single-quote, double quote and backslash are escaped automatically. You can experience problems when saving templates';
$lang['admin']['magic_quotes_runtime'] = 'Magic quotes in runtime';
$lang['admin']['magic_quotes_runtime_on'] = 'Most functions that return data will have quotes escaped with a backslash. You can experience problems';
$lang['admin']['file_get_contents'] = 'Test file_get_contents';
$lang['admin']['check_ini_set'] = 'Test ini_set';
$lang['admin']['check_ini_set_off'] = 'You may have difficulty with some functionality without this capability. This test may fail if safe_mode is enabled';
$lang['admin']['file_uploads'] = 'Dosya Y&uuml;klemeleri';
$lang['admin']['test_remote_url'] = 'Test for remote URL';
$lang['admin']['test_remote_url_failed'] = 'You will probably not be able to open a file on a remote web server.';
$lang['admin']['test_allow_url_fopen_failed'] = 'When allow url fopen is disabled you will not be able to accessing URL object like file using the ftp or http protocol.';
$lang['admin']['connection_error'] = 'Outgoing http connections do not appear to work! There is a firewall or some ACL for external connections?. This will result in module manager, and potentially other functionality failing.';
$lang['admin']['remote_connection_timeout'] = 'Connection Timed Out!';
$lang['admin']['search_string_find'] = 'Bağlantı ok!';
$lang['admin']['connection_failed'] = 'Bağlantı hatası!';
$lang['admin']['remote_response_ok'] = 'Remote response: ok!';
$lang['admin']['remote_response_404'] = 'Remote response: not found!';
$lang['admin']['remote_response_error'] = 'Remote response: error!';
$lang['admin']['notifications_to_handle'] = 'You have <b>%d</b> unhandled notifications';
$lang['admin']['notification_to_handle'] = 'You have <b>%d</b> unhandled notification';
$lang['admin']['notifications'] = 'Uyarılar';
$lang['admin']['dashboard'] = '&Ouml;zet G&ouml;r&uuml;nt&uuml;le';
$lang['admin']['ignorenotificationsfrommodules'] = 'Ignore notifications from these modules';
$lang['admin']['admin_enablenotifications'] = 'Allow users to view notifications<br/><em>(notifications will be displayed on all admin pages)</em>';
$lang['admin']['enablenotifications'] = 'Enable user notifications in the admin section';
$lang['admin']['test_check_open_basedir_failed'] = 'Open basedir restrictions are in effect. You may have difficulty with some addon functionality with this restriction';
$lang['admin']['config_writable'] = 'config.php writable. It is more safe if you change permission to read-only';
$lang['admin']['caution'] = 'Uyarı';
$lang['admin']['create_dir_and_file'] = 'Checking if the httpd process can create a file inside of a directory it created';
$lang['admin']['os_session_save_path'] = 'No check because OS path';
$lang['admin']['unlimited'] = 'Limitsiz';
$lang['admin']['open_basedir'] = 'PHP Open Basedir';
$lang['admin']['open_basedir_active'] = 'No check because open basedir active';
$lang['admin']['invalid'] = 'Ge&ccedil;ersiz';
$lang['admin']['checksum_passed'] = 'All checksums match those in the uploaded file';
$lang['admin']['error_retrieving_file_list'] = 'Error retrieving file list';
$lang['admin']['files_checksum_failed'] = 'Files could not be checksummed';
$lang['admin']['failure'] = 'Hata';
$lang['admin']['help_function_process_pagedata'] = '<h3>What does this do?</h3>
<p>This plugin will process the data in the &quot;pagedata&quot; block of content pages through smarty.  It allows you to specify page specific data to smarty without changing the template for each page.</p>
<h3>How do I use it?</h3>
<ol>
  <li>Insert smarty assign variables and other smarty logic into the pagedata field of some of your content pages.</li>
  <li>Insert the <code>{process_pagedata}</code> tag into the very top of your page template.</li>
</ol>
<br/>
<h3>What parameters does it take?</h3>
<p>None at this time</p>';
$lang['admin']['page_metadata'] = 'Spesifik Sayfa Metadata';
$lang['admin']['pagedata_codeblock'] = 'Smarty data or logic that is specific to this page';
$lang['admin']['error_uploadproblem'] = 'An error occurred in the upload';
$lang['admin']['error_nofileuploaded'] = 'Y&uuml;klenen Dosya Yok';
$lang['admin']['files_failed'] = 'Files failed md5sum check';
$lang['admin']['files_not_found'] = 'Dosyalar Bulunamadı';
$lang['admin']['info_generate_cksum_file'] = 'This function will allow you to generate a checksum file and save it on your local computer for later validation.  This should be done just prior to rolling out the website, and/or after any upgrades, or major modifications.';
$lang['admin']['info_validation'] = 'This function will compare the checksums found in the uploaded file with the files on the current installation.  It can assist in finding problems with uploads, or exactly what files were modified if your system has been hacked.  A checksum file is generated for each release of CMS Made simple from version 1.4 on.';
$lang['admin']['download_cksum_file'] = 'Download Checksum File';
$lang['admin']['perform_validation'] = 'Perform Validation';
$lang['admin']['upload_cksum_file'] = 'Upload Checksum File';
$lang['admin']['checksumdescription'] = 'Validate the integrity of CMS files by comparing against known checksums';
$lang['admin']['system_verification'] = 'System Verification';
$lang['admin']['extra1'] = 'Ektra Sayfa &Ouml;zellği 1';
$lang['admin']['extra2'] = 'Ektra Sayfa &Ouml;zellği 2';
$lang['admin']['extra3'] = 'Ektra Sayfa &Ouml;zellği 3';
$lang['admin']['start_upgrade_process'] = 'G&uuml;ncelleme S&uuml;recini Başlat';
$lang['admin']['warning_upgrade'] = '<em><strong>Uyarı:</strong></em> CMSMS sisteminin g&uuml;ncellenmesi gerekmektedir.';
$lang['admin']['warning_upgrade_info1'] = 'You are now running schema version %s. and you need to be upgraded to version %s';
$lang['admin']['warning_upgrade_info2'] = 'L&uuml;tfen linki tıklayınız: %s.';
$lang['admin']['warning_mail_settings'] = 'Your mail settings have not been configured.  This could interfere with the ability of your website to send email messages.  You should go to <a href="%s">Extensions >> CMSMailer</a> and configure the mail settings with the information provided by your host.';
$lang['admin']['view_page'] = 'Bu sayfayı yeni pencerede g&ouml;r&uuml;nt&uuml;le';
$lang['admin']['off'] = 'Kapalı';
$lang['admin']['on'] = 'A&ccedil;ık';
$lang['admin']['invalid_test'] = 'Invalid test param value!';
$lang['admin']['copy_paste_forum'] = 'View Text Report <em>(suitable for copying into forum posts)</em>';
$lang['admin']['permission_information'] = 'İzin Bilgisi';
$lang['admin']['server_os'] = 'Sunucu İşletim Sistemi';
$lang['admin']['server_api'] = 'Sunucu API';
$lang['admin']['server_software'] = 'Sunucu Yazılımı';
$lang['admin']['server_information'] = 'Sunucu Bilgisi';
$lang['admin']['session_save_path'] = 'Session Save Path';
$lang['admin']['max_execution_time'] = 'Maximum Execution Time';
$lang['admin']['gd_version'] = 'GD version';
$lang['admin']['upload_max_filesize'] = 'Maximum Upload Size';
$lang['admin']['post_max_size'] = 'Maximum Post Size';
$lang['admin']['memory_limit'] = 'PHP Effective Memory Limit';
$lang['admin']['server_db_type'] = 'Sunucu Veritabanı';
$lang['admin']['server_db_version'] = 'Sunucu Veritabanı Versiyonu';
$lang['admin']['phpversion'] = 'Şu anki PHP Versiyonu';
$lang['admin']['safe_mode'] = 'PHP G&uuml;venli Mod (Safe Mod)';
$lang['admin']['php_information'] = 'PHP Bilgisi';
$lang['admin']['cms_install_information'] = 'CMS Kurulum Bilgisi';
$lang['admin']['cms_version'] = 'CMS Versiyonu';
$lang['admin']['installed_modules'] = 'Y&uuml;kl&uuml; Mod&uuml;ller';
$lang['admin']['config_information'] = 'Config Bilgisi';
$lang['admin']['systeminfo_copy_paste'] = 'Please copy and paste this selected text into your forum posting';
$lang['admin']['help_systeminformation'] = 'The information displayed below is collected from a variety of locations, and summarized here so that you may be able to conveniently find some of the information required when trying to diagnose a problem or request help with your CMS Made Simple installation.';
$lang['admin']['systeminfo'] = 'Sistem Bilgisi';
$lang['admin']['systeminfodescription'] = 'Display various pieces of information about your system that may be useful in diagnosing problems';
$lang['admin']['welcome_user'] = 'Hoşgeldiniz';
$lang['admin']['itsbeensincelogin'] = 'It has been %s since you last login';
$lang['admin']['days'] = 'g&uuml;nler';
$lang['admin']['day'] = 'g&uuml;n';
$lang['admin']['hours'] = 'saatler';
$lang['admin']['hour'] = 'saat';
$lang['admin']['minutes'] = 'dakikalar';
$lang['admin']['minute'] = 'dakika';
$lang['admin']['help_css_max_age'] = 'This parameter should be set relatively high for static sites, and should be set to 0 for site development';
$lang['admin']['css_max_age'] = 'Maximum amount of time (seconds) stylesheets can be cached in the browser';
$lang['admin']['error'] = 'Hata';
$lang['admin']['clear_version_check_cache'] = 'Clear any cached version check information on submit';
$lang['admin']['new_version_available'] = '<em>Notice:</em> A new version of CMS Made Simple is available.  Please notify your administrator.';
$lang['admin']['info_urlcheckversion'] = 'If this url is the word &quot;none&quot; no checks will be made.<br/>An empty string will result in a default URL being used.';
$lang['admin']['urlcheckversion'] = 'Check for new CMS versions using this URL';
$lang['admin']['master_admintheme'] = 'Varsayılan Y&ouml;netim Şablonu (for the login page and new user accounts)';
$lang['admin']['contenttype_separator'] = 'Ayra&ccedil;';
$lang['admin']['contenttype_sectionheader'] = 'B&ouml;l&uuml;m Başlığı';
$lang['admin']['contenttype_link'] = 'Dış Link';
$lang['admin']['contenttype_content'] = 'İ&ccedil;erik';
$lang['admin']['contenttype_pagelink'] = 'İ&ccedil; Sayfa Linki';
$lang['admin']['nogcbwysiwyg'] = 'Genel İ&ccedil;erik Bloklarında WYSIWYG edit&ouml;r&uuml; devre dışı bırak';
$lang['admin']['destination_page'] = 'Gidilecek Sayfa';
$lang['admin']['additional_params'] = 'Ek Parametreler';
$lang['admin']['help_function_current_date'] = '	<h3>What does this do?</h3>
	<p>Prints the current date and time.  If no format is given, it will default to a format similar to &#039;Jan 01, 2004&#039;.</p>
	<h3>How do I use it?</h3>
	<p>Just insert the tag into your template/page like: <code>{current_date format=&quot;%A %d-%b-%y %T %Z&quot;}</code></p>
	<h3>What parameters does it take?</h3>
	<ul>
		<li><em>(optional)</em>format - Date/Time format using parameters from php&#039;s strftime function.  See <a href="http://php.net/strftime" target="_blank">here</a> for a parameter list and information.</li>
		<li><em>(optional)</em>ucword - If true return uppercase the first character of each word.</li>
	</ul>
	</p>';
$lang['admin']['help_function_valid_xhtml'] = '<h3>What does this do?</h3>
<p>Returns a link to the w3c HTML validator.</p>
<h3>How do I use it?</h3>
<p>Just insert the tag into your template/page like: <code>{valid_xhtml}</code></p>
<h3>What parameters does it take?</h3>
<p>
    <ul>
	<li><em>(optional)</em> url         (string)     - The URL used for validation, if none is given http://validator.w3.org/check/referer is used.</li>
	<li><em>(optional)</em> class       (string)     - If set, this will be used as class attribute for the link (a) element</li>
	<li><em>(optional)</em> target      (string)     - If set, this will be used as target attribute for the link (a) element</li>
	<li><em>(optional)</em> image       (true/false) - If set to false, a text link will be used instead of an image/icon.</li>
	<li><em>(optional)</em> text        (string)     - If set, this will be used for the link text or alternate text for the image. Default is &#039;valid XHTML 1.0 Transitional&#039;.<br /> When an image is used, the given string will also be used for the image alt attribute (by default, this can be overridden by using the &#039;alt&#039; parameter).</li>
	<li><em>(optional)</em> image_class (string)     - Only if &#039;image&#039; is not set to false. If set, this will be used as class attribute for the image (img) element</li>
	<li><em>(optional)</em> src         (string)     - Only if &#039;image&#039; is not set to false. The icon to show. Default is http://www.w3.org/Icons/valid-xhtml10</li>
	<li><em>(optional)</em> width       (string)     - Only if &#039;image&#039; is not set to false. The image width. Default is 88 (width of http://www.w3.org/Icons/valid-xhtml10)</li>
	<li><em>(optional)</em> height      (string)     - Only if &#039;image&#039; is not set to false. The image height. Default is 31 (height of http://www.w3.org/Icons/valid-xhtml10)</li>
	<li><em>(optional)</em> alt         (string)     - Only if &#039;image&#039; is not set to false. The alternate text (&#039;alt&#039; attribute) for the image (element). If none is given the link text will be used.</li>
    </ul>
</p>';
$lang['admin']['help_function_valid_css'] = '<h3>What does this do?</h3>
<p>Returns a link to the w3c CSS validator.</p>
<h3>How do I use it?</h3>
<p>Just insert the tag into your template/page like: <code>{valid_css}</code></p>
<h3>What parameters does it take?</h3>
<p>
    <ul>
        <li><em>(optional)</em> url         (string)     - The URL used for validation, if none is given http://jigsaw.w3.org/css-validator/check/referer is used.</li>
	<li><em>(optional)</em> class       (string)     - If set, this will be used as class attribute for the link (a) element</li>
	<li><em>(optional)</em> target      (string)     - If set, this will be used as target attribute for the link (a) element</li>
	<li><em>(optional)</em> image       (true/false) - If set to false, a text link will be used instead of an image/icon.</li>
	<li><em>(optional)</em> text        (string)     - If set, this will be used for the link text or alternate text for the image. Default is &#039;Valid CSS 2.1&#039;.<br /> When an image is used, the given string will also be used for the image alt attribute (by default, this can be overridden by using the &#039;alt&#039; parameter).</li>
	<li><em>(optional)</em> image_class (string)     - Only if &#039;image&#039; is not set to false. If set, this will be used as class attribute for the image (img) element</li>
        <li><em>(optional)</em> src         (string)     - Only if &#039;image&#039; is not set to false. The icon to show. Default is http://jigsaw.w3.org/css-validator/images/vcss</li>
        <li><em>(optional)</em> width       (string)     - Only if &#039;image&#039; is not set to false. The image width. Default is 88 (width of http://jigsaw.w3.org/css-validator/images/vcss)</li>
        <li><em>(optional)</em> height      (string)     - Only if &#039;image&#039; is not set to false. The image height. Default is 31 (height of http://jigsaw.w3.org/css-validator/images/vcss)</li>
	<li><em>(optional)</em> alt         (string)     - Only if &#039;image&#039; is not set to false. The alternate text (&#039;alt&#039; attribute) for the image (element). If none is given the link text will be used.</li>
    </ul>
</p>';
$lang['admin']['help_function_title'] = '	<h3>What does this do?</h3>
	<p>Prints the title of the page.</p>
	<h3>How do I use it?</h3>
	<p>Just insert the tag into your template/page like: <code>{title}</code></p>
	<h3>What parameters does it take?</h3>
	<p><em>(optional)</em> assign (string) - Assign the results to a smarty variable with that name.</p>';
$lang['admin']['help_function_stylesheet'] = '	<h3>What does this do?</h3>
	<p>Gets stylesheet information from the system.  By default, it grabs all of the stylesheets attached to the current template.</p>
	<h3>How do I use it?</h3>
	<p>Just insert the tag into your template/page&#039;s head section like: <code>{stylesheet}</code></p>
	<h3>What parameters does it take?</h3>
	<ul>
		<li><em>(optional)</em>name - Instead of getting all stylesheets for the given page, it will only get one spefically named one, whether it&#039;s attached to the current template or not.</li>
		<li><em>(optional)</em>media - If name is defined, this allows you set a different media type for that stylesheet.</li>
	</ul>
	</p>';
$lang['admin']['help_function_stopexpandcollapse'] = '	<h3>What does this do?</h3>
	<p>Enables content to be expandable and collapsable. Like the following:<br />
	<a href="#expand1" onClick="expandcontent(&#039;expand1&#039;)" style="cursor:hand; cursor:pointer">Click here for more info</a><span id=&quot;expand1&quot; class=&quot;expand&quot;><a name="help"></a> - Here is all the info you will ever need...</a></span></p>

	<h3>How do I use it?</h3>
	<p>Just insert the tag into your template/page like:<br />
	<br />
	<code>{startExpandCollapse id=&quot;name&quot; title=&quot;Click Here&quot;}<br />
	This is all the content the user will see when they click the title &quot;Click Here&quot; above. It will display all the content that is between the {startExpandCollapse} and {stopExpandCollapse} when clicked.<br />
	{stopExpandCollapse}
	</code>
	<br />
	<br />
	Note: If you intend to use this multiple times on a single page each startExpandCollapse tag must have a unique id.</p>
	<h3>What if I want to change the look of the title?</h3>
	<p>The look of the title can be changed via css. The title is wrapped in a div with the id you specify.</p>

	<h3>What parameters does it take?</h3>
	<p>
	<i>startExpandCollapse takes the following parameters</i><br />
	&nbsp; &nbsp;id - A unique id for the expand/collapse section.<br />
	&nbsp; &nbsp;title - The text that will be displayed to expand/collapse the content.<br />
	<i>stopExpandCollapse takes no parameters</i><br />
	</p>';
$lang['admin']['help_function_startexpandcollapse'] = '	<h3>What does this do?</h3>
	<p>Enables content to be expandable and collapsable. Like the following:<br />
	<a href="#expand1" onClick="expandcontent(&#039;expand1&#039;)" style="cursor:hand; cursor:pointer">Click here for more info</a><span id=&quot;expand1&quot; class=&quot;expand&quot;><a name="help"></a> - Here is all the info you will ever need...</a></span></p>

	<h3>How do I use it?</h3>
	<p>Just insert the tag into your template/page like: <code>{startExpandCollapse id=&quot;name&quot; title=&quot;Click Here&quot;}</code>. Also, you must use the {stopExpandCollapse} at the end of the collapseable content. Here is an example:<br />
	<br />
	<code>{startExpandCollapse id=&quot;name&quot; title=&quot;Click Here&quot;}<br />
	This is all the content the user will see when they click the title &quot;Click Here&quot; above. It will display all the content that is between the {startExpandCollapse} and {stopExpandCollapse} when clicked.<br />
	{stopExpandCollapse}
	</code>
	<br />
	<br />
	Note: If you intend to use this multiple times on a single page each startExpandCollapse tag must have a unique id.</p>
	<h3>What if I want to change the look of the title?</h3>
	<p>The look of the title can be changed via css. The title is wrapped in a div with the id you specify.</p>

	<h3>What parameters does it take?</h3>
	<p>
	<i>startExpandCollapse takes the following parameters</i><br />
	&nbsp; &nbsp;id - A unique id for the expand/collapse section.<br />
	&nbsp; &nbsp;title - The text that will be displayed to expand/collapse the content.<br />
	<i>stopExpandCollapse takes no parameters</i><br />
	</p>';
$lang['admin']['help_function_sitemap'] = '    <h3>Notice</h3>
    <p>This plugin is deprecated.  Users should now see the <code>{site_mapper}</code> plugin.</p>
    <h3>What does this do?</h3>
    <p>Prints out a sitemap.</p>
    <h3>How do I use it?</h3>
    <p>Just insert the tag into your template/page like: <code>{sitemap}</code></p>
    <h3>What parameters does it take?</h3>
    <p>
        <ul>
            <li><em>(optional)</em> <tt>class</tt> - A css_class for the ul-tag which includes the complete sitemap.</li>
            <li><em>(optional)</em> <tt>start_element</tt> - The hierarchy of your element (ie : 1.2 or 3.5.1 for example). This parameter sets the root of the menu. You can use the page alias instead of hierarchy.</li>
            <li><em>(optional)</em> <tt>number_of_levels</tt> - An integer, the number of levels you want to show in your menu. Should be set to 2 using a delimiter.</li>
            <li><em>(optional)</em> <tt>delimiter</tt> - Text to separate entries not on depth 1 of the sitemap (i.e. 1.1, 1.2). This is helpful for showing entries on depth 2 beside each other (using css display:inline).</li>
            <li><em>(optional)</em> <tt>initial 1/0</tt> - If set to 1, begin also the first entries not on depth 1 with a delimiter (i.e. 1.1, 2.1).</li>
            <li><em>(optional)</em> <tt>relative 1/0</tt> - We are not going to show current page (with the sitemap) - we&#039;ll show only his childs.</li>
            <li><em>(optional)</em> <tt>showall 1/0</tt> - We are going to show all pages if showall is enabled, else we&#039;ll only show pages with active menu entries.</li>
            <li><em>(optional)</em> <tt>add_elements</tt> - A comma separated list of alias names which will be added to the shown pages with active menu entries (showall not enabled).</li>
        </ul>
        </p>';
$lang['admin']['help_function_adsense'] = '	<h3>What does this do?</h3>
	<p>Google adsense is a popular advertising program for websites.  This tag will take the basic parameters that would be provided by the adsense program and puts them in a easy to use tag that makes your templates look much cleaner.  See <a href="http://www.google.com/adsense" target="_blank">here</a> for more details on adsense.</p>
	<h3>How do I use it?</h3>
	<p>First, sign up for a google adsense account and get the parameters for your ad.  Then just use the tag in your page/template like so: <code>{adsense ad_client=&quot;pub-random#&quot; ad_width=&quot;120&quot; ad_height=&quot;600&quot; ad_format=&quot;120x600_as&quot;}</code>
	<h3>What parameters does it take?</h3>
	<p>All parameters are optional, though skipping one might not necessarily made the ad work right.  Options are:
	<ul>
		<li>ad_client - This would be the pub_random# id that would represent your adsense account number</li>
		<li>ad_width - width of the ad</li>
		<li>ad_height - height of the ad</li>
		<li>ad_format - &quot;format&quot; of the ad <em>e.g. 120x600_as</em></li>
		<li>ad_channel - channels are an advanced feature of adsense.  Put it here if you use it.</li>
		<li>ad_type - possible options are text, image or text_image.</li>
		<li>color_border - the color of the border. Use HEX color or type the color name (Ex. Red)</li>
		<li>color_link - the color of the linktext. Use HEX color or type the color name (Ex. Red)</li>
		<li>color_url - the color of the URL. Use HEX color or type the color name (Ex. Red)</li>
		<li>color_text - the color of the text. Use HEX color or type the color name (Ex. Red)</li>
	</ul>
	</p>';
$lang['admin']['help_function_sitename'] = '        <h3>What does this do?</h3>
        <p>Shows the name of the site.  This is defined during install and can be modified in the Global Settings section of the admin panel.</p>
        <h3>How do I use it?</h3>
        <p>Just insert the tag into your template/page like: <code>{sitename}</code></p>
        <h3>What parameters does it take?</h3>
	<p><em>(optional)</em> assign (string) - Assign the results to a smarty variable with that name.</p>';
$lang['admin']['help_function_search'] = '	<h3>What does this do?</h3>
	<p>This is actually just a wrapper tag for the <a href="listmodules.php?action=showmodulehelp&amp;module=Search">Search module</a> to make the tag syntax easier. 
	Instead of having to use <code>{cms_module module=&#039;Search&#039;}</code> you can now just use <code>{search}</code> to insert the module in a template.
	</p>
	<h3>How do I use it?</h3>
	<p>Just put <code>{search}</code> in a template where you want the search input box to appear. For help about the Search module, please refer to the <a href="listmodules.php?action=showmodulehelp&amp;module=Search">Search module help</a>.';
$lang['admin']['help_function_root_url'] = '	<h3>What does this do?</h3>
	<p>Prints the root url location for the site.</p>
	<h3>How do I use it?</h3>
	<p>Just insert the tag into your template/page like: <code>{root_url}</code></p>
	<h3>What parameters does it take?</h3>
	<p>None at this time.</p>';
$lang['admin']['help_function_repeat'] = '  <h3>What does this do?</h3>
  <p>Repeats a specified sequence of characters, a specified number of times</p>
  <h3>How do I use it?</h3>
  <p>Insert a tag similar to the following into your template/page, like this: <code>{repeat string=&#039;repeat this &#039; times=&#039;3&#039;}</code>
  <h3>What parameters does it take?</h3>
  <ul>
  <li>string=&#039;text&#039; - The string to repeat</li>
  <li>times=&#039;num&#039; - The number of times to repeat it.</li>
  </ul>';
$lang['admin']['help_function_recently_updated'] = '	<h3>What does this do?</h3>
	<p>Outputs a list of recently updated pages.</p>
	<h3>How do I use it?</h3>
	<p>Just insert the tag into your template/page like: <code>{recently_updated}</code></p>
	<h3>What parameters does it take?</h3>
	<ul>
	 <li><p><em>(optional)</em> number=&#039;10&#039; - Number of updated pages to show.</p><p>Example: <pre>{recently_updated number=&#039;15&#039;}</pre></p></li>
 	 <li><p><em>(optional)</em> leadin=&#039;Last changed&#039; - Text to show left of the modified date.</p><p>Example: <pre>{recently_updated leadin=&#039;Last Changed&#039;}</pre></p></li>
 	 <li><p><em>(optional)</em> showtitle=&#039;true&#039; - Shows the titleattribute if it exists as well (true|false).</p><p>Example: <pre>{recently_updated showtitle=&#039;true&#039;}</pre></p></li>											 	
	 <li><p><em>(optional)</em> css_class=&#039;some_name&#039; - Warp a div tag with this class around the list.</p><p>Example: <pre>{recently_updated css_class=&#039;some_name&#039;}</pre></p></li>											 	
	 <li><p><em>(optional)</em> dateformat=&#039;d.m.y h:m&#039; - default is d.m.y h:m , use the format you whish (php -date- format)</p><p>Example: <pre>{recently_updated dateformat=&#039;D M j G:i:s T Y&#039;}</pre></p></li>											 	
	</ul>
	<p>or combined:</p>
	<pre>{recently_updated number=&#039;15&#039; showtitle=&#039;false&#039; leadin=&#039;Last Change: &#039; css_class=&#039;my_changes&#039; dateformat=&#039;D M j G:i:s T Y&#039;}</pre>';
$lang['admin']['help_function_print'] = '	<h3>What does this do?</h3>
	<p>This is actually just a wrapper tag for the <a href="listmodules.php?action=showmodulehelp&amp;module=Printing">Printing module</a> to make the tag syntax easier. 
	Instead of having to use <code>{cms_module module=&#039;Printing&#039;}</code> you can now just use <code>{print}</code> to insert the module on pages and templates.
	</p>
	<h3>How do I use it?</h3>
	<p>Just put <code>{print}</code> on a page or in a template. For help about the Printing module, what parameters it takes etc., please refer to the <a href="listmodules.php?action=showmodulehelp&amp;module=Printing">Printing module help</a>.';
$lang['admin']['help_function_oldprint'] = '	<h3>What does this do?</h3>
	<p>Creates a link to only the content of the page.</p>
	<h3>How do I use it?</h3>
	<p>Just insert the tag into your template/page like: <code>{oldprint}</code><br></p>
        <h3>What parameters does it take?</h3>
        <ul>
                <li><em>(optional)</em> goback - Set to &quot;true&quot; to show a &quot;Go Back&quot; link on the page to print.</li>
                <li><em>(optional)</em> popup - Set to &quot;true&quot; and page for printing will by opened in new window.</li>
                <li><em>(optional)</em> script - Set to &quot;true&quot; and in print page will by used java script for run print of page.</li>
                <li><em>(optional)</em> showbutton - Set to &quot;true&quot; and will show a printer graphic instead of a text link.</li>
                <li><em>(optional)</em> class - class for the link, defaults to &quot;noprint&quot;.</li>
                <li><em>(optional)</em> text - Text to use instead of &quot;Print This Page&quot; for the print link.
                <li><em>(optional)</em> title - Text to show for title attribute. If blank show text parameter.</li>
                <li><em>(optional)</em> more - Place additional options inside the <a> link.</li>
                <li><em>(optional)</em> src_img - Show this image file. Default images/cms/printbutton.gif.</li>
                <li><em>(optional)</em> class_img - Class of <img> tag if showbutton is sets.</li>

                    <p>Example:</p>
                     <pre>{oldprint text=&quot;Printable Page&quot;}</pre>      
                     </li>
        </ul>';
$lang['admin']['login_info_title'] = 'Bilgi';
$lang['admin']['login_info'] = 'Y&ouml;netim b&ouml;l&uuml;m&uuml;n&uuml;n d&uuml;zg&uuml;n &ccedil;alışabilmesi i&ccedil;in';
$lang['admin']['login_info_params'] = '<ol> 
  <li>Tarayıcınız &Ccedil;erezler izin vermeli</li> 
  <li>Tarayıcınızda Javascript etkin olmalı</li> 
  <li>Popup pencerelere aşağıdaki adres i&ccedil;in izin verilmiş olmalıdır:</li> 
</ol>';
$lang['admin']['help_function_news'] = '	<h3>What does this do?</h3>
	<p>This is actually just a wrapper tag for the <a href="listmodules.php?action=showmodulehelp&amp;module=News">News module</a> to make the tag syntax easier. 
	Instead of having to use <code>{cms_module module=&#039;News&#039;}</code> you can now just use <code>{news}</code> to insert the module on pages and templates.
	</p>
	<h3>How do I use it?</h3>
	<p>Just put <code>{news}</code> on a page or in a template. For help about the News module, what parameters it takes etc., please refer to the <a href="listmodules.php?action=showmodulehelp&amp;module=News">News module help</a>.';
$lang['admin']['help_function_modified_date'] = '        <h3>What does this do?</h3>
        <p>Prints the date and time the page was last modified.  If no format is given, it will default to a format similar to &#039;Jan 01, 2004&#039;.</p>
        <h3>How do I use it?</h3>
        <p>Just insert the tag into your template/page like: <code>{modified_date format=&quot;%A %d-%b-%y %T %Z&quot;}</code></p>
        <h3>What parameters does it take?</h3>
        <ul>
                <li><em>(optional)</em>format - Date/Time format using parameters from php&#039;s strftime function.  See <a href="http://php.net/strftime" target="_blank">here</a> for a parameter list and information.</li>
        </ul>';
$lang['admin']['help_function_metadata'] = '	<h3>What does this do?</h3>
	<p>Displays the metadata for this page. Both global metdata from the global settings page and metadata for each page will be shown.</p>
	<h3>How do I use it?</h3>
	<p>Just insert the tag into your template like: <code>{metadata}</code></p>
	<h3>What parameters does it take?</h3>
	<ul>
		<li><em>(optional)</em>showbase (true/false) - If set to false, the base tag will not be sent to the browser.  Defaults to true if use_hierarchy is set to true in config.php.</li>
	</ul>';
$lang['admin']['help_function_menu_text'] = '	<h3>What does this do?</h3>
	<p>Prints the menu text of the page.</p>
	<h3>How do I use it?</h3>
	<p>Just insert the tag into your template/page like: <code>{menu_text}</code></p>
	<h3>What parameters does it take?</h3>
	<p>None at this time.</p>';
$lang['admin']['help_function_menu'] = '	<h3>What does this do?</h3>
	<p>This is actually just a wrapper tag for the <a href="listmodules.php?action=showmodulehelp&amp;module=MenuManager">Menu Manager module</a> to make the tag syntax easier. 
	Instead of having to use <code>{cms_module module=&#039;MenuManager&#039;}</code> you can now just use <code>{menu}</code> to insert the module on pages and templates.
	</p>
	<h3>How do I use it?</h3>
	<p>Just put <code>{menu}</code> on a page or in a template. For help about the Menu Manager module, what parameters it takes etc., please refer to the <a href="listmodules.php?action=showmodulehelp&amp;module=MenuManager">Menu Manager module help</a>.';
$lang['admin']['help_function_last_modified_by'] = '        <h3>What does this do?</h3>
        <p>Prints last person that edited this page.  If no format is given, it will default to a ID number of user .</p>
        <h3>How do I use it?</h3>
        <p>Just insert the tag into your template/page like: <code>{last_modified_by format=&quot;fullname&quot;}</code></p>
        <h3>What parameters does it take?</h3>
        <ul>
                <li><em>(optional)</em>format - id, username, fullname</li>
        </ul>';
$lang['admin']['help_function_image'] = '  <h3>What does this do?</h3>
  <p>Creates an image tag to an image stored within your images directory</p>
  <h3>How do I use it?</h3>
  <p>Just insert the tag into your template/page like: <code>{image src=&quot;something.jpg&quot;}</code></p>
  <h3>What parameters does it take?</h3>
  <ul>
     <li><em>(required)</em>  <tt>src</tt> - Image filename within your images directory.</li>
     <li><em>(optional)</em>  <tt>width</tt> - Width of the image within the page. Defaults to true size.</li>
     <li><em>(optional)</em>  <tt>height</tt> - Height of the image within the page. Defaults to true size.</li>
     <li><em>(optional)</em>  <tt>alt</tt> - Alt text for the image -- needed for xhtml compliance. Defaults to filename.</li>
     <li><em>(optional)</em>  <tt>class</tt> - CSS class for the image.</li>
     <li><em>(optional)</em>  <tt>title</tt> - Mouse over text for the image. Defaults to Alt text.</li>
     <li><em>(optional)</em>  <tt>addtext</tt> - Additional text to put into the tag</li>
  </ul>';
$lang['admin']['help_function_imagegallery'] = '	<h3>What does this do?</h3>
	<p>Creates a gallery out of a folder of images (.gif, .jpg or .png). 
	You can click on a thumbnail image to view the bigger image. It can use 
	captions which are based on the image name, minus the file extension. It 
	follows web standards and uses CSS for formatting. There are classes 
	for various elements and for the surrounding &#039;div&#039;. Check out the CSS below for
	more information.</p>

	<h3>How do I use it?</h3>
	<p>Just insert the tag into your template or page like: </p>
	<code>{ImageGallery picFolder=&quot;uploads/images/yourfolder/&quot;}</code>
	<p>Where picFolder is the folder where your images are stored.</p>
	
    <h3>What parameters does it take?</h3>
    <p>It can take quite a few parameters, but the example above is probably 
good for most people :) </p>
        <ol>
		<li><strong>picFolder e.g. picFolder=&quot;uploads/images/yourfolder/&quot;</strong><br/>
		Is the path to the gallery (yourfolder) ending in&#039;/&#039;. So you can have 
		lots of directories and lots of galleries.</li>

		<li><strong>type e.g. type=&quot;click&quot; or type=&quot;popup&quot;</strong><br/>
		For the &quot;popup&quot; function to work you need to include the popup javascript into
		the head of your template e.g. &quot;<head></head>&quot;. The javascript is at
		the bottom of this page! <em>The default is &#039;click&#039;.</em></li>

		<li><strong>divID e.g. divID =&quot;imagegallery&quot;</strong><br/>
		Sets the wrapping &#039;div id&#039; around your gallery so that you can have 
		different CSS for each gallery. <em>The default is &#039;imagegallery&#039;.</em></li>

		<li><strong>sortBy e.g. sortBy = &quot;name&quot; or sortBy = &quot;date&quot;</strong><br/>
		Sort images by &#039;name&#039; OR &#039;date&#039;. <em>No default.</em></li>

		<li><strong>sortByOrder e.g. sortByOrder = &quot;asc&quot; or sortByOrder = &quot;desc&quot;</strong><br/> 
		 <em>No default.</em>.</li>

		<li>This sets caption above the big (clicked on) image<br/>
		<strong>bigPicCaption = &quot;name&quot; </strong>(filename excluding extension)<em> or </em><br/>
		<strong>bigPicCaption = &quot;file&quot; </strong>(filename including extension)<em> or </em><br/>
		<strong>bigPicCaption = &quot;number&quot; </strong>(a number sequence)<em> or </em><br/>
		<strong>bigPicCaption = &quot;none&quot; </strong>(No caption)<br/>
		<em>The Default is &quot;name&quot;. </em></li>

		<li>This sets the caption below the small thumbnail<br/>
		<strong>thumbPicCaption = &quot;name&quot;</strong> (filename excluding extension)<em> or </em><br/>
		<strong>thumbPicCaption = &quot;file&quot;</strong> (filename including extension)<em> or </em><br/>
		<strong>thumbPicCaption = &quot;number&quot; </strong>(a number sequence)<em> or </em><br/>
		<strong>thumbPicCaption = &quot;none&quot; </strong>(No caption)<br/>
		<em>The Default is &quot;name&quot;.</em></li>

		<li>Sets the &#039;alt&#039; tag for the big image - compulsory.<br/>
		<strong>bigPicAltTag = &quot;name&quot; </strong>(filename excluding extension)<em> or </em><br/>
		<strong>bigPicAltTag = &quot;file&quot; </strong>(filename including extension)<em> or </em><br/>
		<strong>bigPicAltTag = &quot;number&quot; </strong>(a number sequence)<br/>
		<em>The Default is &quot;name&quot;.</em></li>

		<li> Sets the &#039;title&#039; tag for the big image. <br/>
		<strong>bigPicTitleTag = &quot;name&quot; </strong>(filename excluding extension)<em> or </em><br/>
		<strong>bigPicTitleTag = &quot;file&quot; </strong>(filename including extension)<em> or </em><br/>
		<strong>bigPicTitleTag = &quot;number&quot; </strong>(a number sequence)<em> or </em><br/>
		<strong>bigPicTitleTag = &quot;none&quot; </strong>(No title)<br/>
		<em>The Default is &quot;name&quot;.</em></li>

		<li><strong>thumbPicAltTag</strong><br/>
		<em>Is the same as bigPicAltTag, but for the small thumbnail images.<em></li>

		<li><strong>thumbPicTitleTag *</strong><br/>
		<em>Is the same as bigPicTitleTag but for the small thumbnail images.<br/>
		<strong>*Except that after the options you have &#039;... click for a bigger image&#039; 
		or if you do not set this option then you get the default of 
		&#039;Click for a bigger image...&#039;</em></strong></li>
        </ol>
  <p>A More Complex Example</p>
        <p>&#039;div id&#039; is &#039;cdcovers&#039;, no Caption on big images, thumbs have default caption. 
        &#039;alt&#039; tags for the big image are set to the name of the image file without the extension 
        and the big image &#039;title&#039; tag is set to the same but with an extension. 
        The thumbs have the default &#039;alt&#039; and &#039;title&#039; tags. The default being the name 
        of the image file without the extension for &#039;alt&#039; and &#039;Click for a bigger image...&#039; for the &#039;title&#039;,
		would be:</p>
		<code>{ImageGallery picFolder=&quot;uploads/images/cdcovers/&quot; divID=&quot;cdcovers&quot; bigPicCaption=&quot;none&quot;  bigPicAltTag=&quot;name&quot; bigPicTitleTag=&quot;file&quot;}</code>
        <br/>
		<p>It&#039;s got lots of options but I wanted to keep it very flexible and you don&#039;t have to set them, the defaults are sensible.</p>
		
  <br/>
	<h4>Example CSS</h4>
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

	<h4>The popup javascript is now included in plugin code and will be generated automatically if you still have javascript in your template please remove it.</h4>';
$lang['admin']['help_function_html_blob'] = '	<h3>What does this do?</h3>
	<p>See the help for global_content for a description.</p>';
$lang['admin']['help_function_googlepr'] = '	<h3>What does this do?</h3>
	<p>Display&#039;s a number that represents your google pagerank.</p>
	<h3>How do I use it?</h3>
	<p>Just insert the tag into your template/page like: <code>{googlepr}</code><br>
	<br>

	<h3>What parameters does it take?</h3>
	<ul>
		<li><em>(optional)</em> domain - The website to display the pagerank for.</li>
	</ul>
	</p>';
$lang['admin']['help_function_google_search'] = '	<h3>What does this do?</h3>
	<p>Search&#039;s your website using Google&#039;s search engine.</p>
	<h3>How do I use it?</h3>
	<p>Just insert the tag into your template/page like: <code>{google_search}</code><br>
	<br>
	Note: Google needs to have your website indexed for this to work. You can submit your website to google <a href="http://www.google.com/addurl.html">here</a>.</p>
	<h3>What if I want to change the look of the textbox or button?</h3>
	<p>The look of the textbox and button can be changed via css. The textbox is given an id of textSearch and the button is given an id of buttonSearch.</p>

	<h3>What parameters does it take?</h3>
	<ul>
		<li><em>(optional)</em> domain - This tells google the website domain to search. This script tries to determine this automatically.</li>
		<li><em>(optional)</em> buttonText - The text you want to display on the search button. The default is &quot;Search Site&quot;.</li>
	</ul>
	</p>';
$lang['admin']['help_function_global_content'] = '	<h3>What does this do?</h3>
	<p>Inserts a global content block into your template or page.</p>
	<h3>How do I use it?</h3>
	<p>Just insert the tag into your template/page like: <code>{global_content name=&#039;myblob&#039;}</code>, where name is the name given to the block when it was created.</p>
	<h3>What parameters does it take?</h3>
	<ul>
  	  <li>name - The name of the global content block to display.</li>
          <li><em>(optional)</em> assign - The name of a smarty variable that the global content block should be assigned to.</li>
	</ul>';
$lang['admin']['help_function_get_template_vars'] = '	<h3>What does this do?</h3>
	<p>Dumps all the known smarty variables into your page</p>
	<h3>How do I use it?</h3>
	<p>Just insert the tag into your template/page like: <code>{get_template_vars}</code></p>
	<h3>What parameters does it take?</h3>
											  <p>None at this time</p>';
$lang['admin']['help_function_embed'] = '	<h3>What does this do?</h3>
	<p>Enable inclusion (embeding) of any other application into the CMS. The most usual use could be a forum. 
	This implementation is using IFRAMES so older browsers can have problems. Sorry bu this is the only known way 
	that works without modifing the embeded application.</p>
	<h3>How do I use it?</h3>
        <ul>
        <li>a) Add <code>{embed header=true}</code> into the head section of your page template, or into the metadata section in the options tab of a content page.  This will ensure that the required javascript gets included.   If you insert this tag into the metadata section in the options tab of a content page you must ensure that <code>{metadata}</code> is in your page template.</li>
        <li>b) Add <code>{embed url=&quot;http://www.google.com&quot;}</code> into your page content or in the body of your page template.</li>
        </ul>
        <br/>
        <h4>Example to make the iframe larger</h4>
	<p>Add the following to your style sheet:</p>
        <pre>#myframe { height: 600px; }</pre>
        <br/>
        <h3>What parameters does it take?</h3>
        <ul>
            <li><em>(required)</em>url - the url to be included 
            <li><em>(required)</em>header=true - this will generate the header code for good resizing of the IFRAME.</li>
            <li>(optional)name - an optional name to use for the iframe (instead of myframe).<p>If this option is used, it must be used identically in both calls, i.e: {embed header=true name=foo} and {embed name=foo url=http://www.google.com} calls.</p>
        </ul>';
$lang['admin']['help_function_edit'] = '	<h3>What does this do?</h3>
	<p>Creates a link to edit the page</p>
	<h3>How do I use it?</h3>
	<p>Just insert the tag into your template/page like: <code>{edit}</code><br></p>
        <h3>What parameters does it take?</h3>
        <ul>
                <li><em>(optional)</em>showbutton - Set to &quot;true&quot; and will show a edit graphic instead of a text link.</li>
        </ul>';
$lang['admin']['help_function_description'] = '	<h3>What does this do?</h3>
	<p>Prints the description (title attribute) of the page.</p>
	<h3>How do I use it?</h3>
	<p>Just insert the tag into your template/page like: <code>{description}</code></p>
	<h3>What parameters does it take?</h3>
	<p>None at this time.</p>';
$lang['admin']['help_function_created_date'] = '        <h3>What does this do?</h3>
        <p>Prints the date and time the page was created.  If no format is given, it will default to a format similar to &#039;Jan 01, 2004&#039;.</p>
        <h3>How do I use it?</h3>
        <p>Just insert the tag into your template/page like: <code>{created_date format=&quot;%A %d-%b-%y %T %Z&quot;}</code></p>
        <h3>What parameters does it take?</h3>
        <ul>
                <li><em>(optional)</em>format - Date/Time format using parameters from php&#039;s strftime function.  See <a href="http://php.net/strftime" target="_blank">here</a> for a parameter list and information.</li>
        </ul>';
$lang['admin']['help_function_content'] = '	<h3>What does this do?</h3>
	<p>This is where the content for your page will be displayed.  It&#039;s inserted into the template and changed based on the current page being displayed.</p>
	<h3>How do I use it?</h3>
	<p>Just insert the tag into your template like: <code>{content}</code>.</p>
	<h3>What parameters does it take?</h3>
	<ul>
		<li><em>(optional)</em>block - Allows you to have more than one content block per page.  When multiple content tags are put on a template, that number of edit boxes will be displayed when the page is edited.
<p>Example:</p>
<pre>{content block=&quot;Second Content Block&quot;}</pre>
<p>Now, when you edit a page there will a textarea called &quot;Second Content Block&quot;.</li>
		<li><em>(optional)</em>wysiwyg (true/false) - If set to false, then a wysiwyg will never be used while editing this block.  If true, then it acts as normal.  Only works when block parameter is used.</li>
		<li><em>(optional)</em>oneline (true/false) - If set to true, then only one edit line will be shown while editing this block.  If false, then it acts as normal.  Only works when block parameter is used.</li>
		<li><em>(optional)</em>default - Allows you to specify default content content for this content blocks (additional content blocks only).</li>
		<li><em>(optional)</em>assign - Assigns the content to a smarty parameter, which you can then use in other areas of the page, or use to test whether content exists in it or not.
<p>Example of passing page content to a User Defined Tag as a parameter:</p>
<pre>
         {content assign=pagecontent}
         {table_of_contents thepagecontent=&quot;$pagecontent&quot;}
</pre>
</li>
	</ul>';
$lang['admin']['help_function_contact_form'] = '  <h2>NOTE: This plugin is deprecated</h2>
  <h3>This plugin has been removed as of CMS made simple version 1.5</h3>';
$lang['admin']['help_function_cms_versionname'] = '	<h3>What does this do?</h3>
	<p>This tag is used to insert the current version name of CMS into your template or page.  It doesn&#039;t display any extra besides the version name.</p>
	<h3>How do I use it?</h3>
	<p>This is just a basic tag plugin.  You would insert it into your template or page like so: <code>{cms_versionname}</code>
	<h3>What parameters does it take?</h3>
	<p>It takes no parameters.</p>';
$lang['admin']['help_function_cms_version'] = '	<h3>What does this do?</h3>
	<p>This tag is used to insert the current version number of CMS into your template or page.  It doesn&#039;t display any extra besides the version number.</p>
	<h3>How do I use it?</h3>
	<p>This is just a basic tag plugin.  You would insert it into your template or page like so: <code>{cms_version}</code>
	<h3>What parameters does it take?</h3>
	<p>It takes no parameters.</p>';
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
$lang['admin']['help_function_cms_selflink'] = '		<h3>What does this do?</h3>
		<p>Creates a link to another CMSMS content page inside your template or content. Can also be used for external links with the ext parameter.</p>
		<h3>How do I use it?</h3>
		<p>Just insert the tag into your template/page like: <code>{cms_selflink page=&quot;1&quot;}</code> or  <code>{cms_selflink page=&quot;alias&quot;}</code></p>
		<h3>What parameters does it take?</h3>
		<p>
		<ul>
		<li><em>(optional)</em> <tt>page</tt> - Page ID or alias to link to.</li>
		<li><em>(optional)</em> <tt>dir anchor (internal links)</tt> - New option for an internal page link. If this is used then <tt>anchorlink</tt> should be set to your link. </li> <!-- Russ - 25-04-2006 -->
		<li><em>(optional)</em> <tt>anchorlink</tt> - New paramater for an internal page link. If this is used then <tt>dir =&quot;anchor&quot;</tt> should also be set. No need to add the #, because it is added automatically.</li> <!-- Russ - 25-04-2006 -->
		<li><em>(optional)</em> <tt>urlparam</tt> - Specify additional parameters to the URL.  <strong>Do not use this in conjunction with the <em>anchorlink</em> parameter</em></strong>
		<li><em>(optional)</em> <tt>tabindex =&quot;a value&quot;</tt> - Set a tabindex for the link.</li> <!-- Russ - 22-06-2005 -->
		<li><em>(optional)</em> <tt>dir start/next/prev/up (previous)</tt> - Links to the default start page or the next or previous page, or the parent page (up). If this is used <tt>page</tt> should not be set.</li> <!-- mbv - 21-06-2005 -->
		<B>Note!</B> Only one of the above may be used in the same cms_selflink statement!!
		<li><em>(optional)</em> <tt>text</tt> - Text to show for the link.  If not given, the Page Name is used instead.</li>
		<li><em>(optional)</em> <tt>menu 1/0</tt> - If 1 the Menu Text is used for the link text instead of the Page Name</li> <!-- mbv - 21-06-2005 -->
		<li><em>(optional)</em> <tt>target</tt> - Optional target for the a link to point to.  Useful for frame and javascript situations.</li>
		<li><em>(optional)</em> <tt>class</tt> - Class for the <a> link. Useful for styling the link.</li> <!-- mbv - 21-06-2005 -->
		<li><em>(optional)</em> <tt>lang</tt> - Display link-labels  (&quot;Next Page&quot;/&quot;Previous Page&quot;) in different languages (0 for no label.) Danish (dk), English (en) or French (fr), for now.</li> <!-- mbv - 21-06-2005 -->
		<li><em>(optional)</em> <tt>id</tt> - Optional css_id for the <a> link.</li> <!-- mbv - 29-06-2005 -->
		<li><em>(optional)</em> <tt>more</tt> - place additional options inside the <a> link.</li> <!-- mbv - 29-06-2005 -->
		<li><em>(optional)</em> <tt>label</tt> - Label to use in with the link if applicable.</li>
		<li><em>(optional)</em> <tt>label_side left/right</tt> - Side of link to place the label (defaults to &quot;left&quot;).</li>
		<li><em>(optional)</em> <tt>title</tt> - Text to use in the title attribute.  If none is given, then the title of the page will be used for the title.</li>
		<li><em>(optional)</em> <tt>rellink 1/0</tt> - Make a relational link for accessible navigation.  Only works if the dir parameter is set and should only go in the head section of a template.</li>
		<li><em>(optional)</em> <tt>href</tt> - If href is used only the href value is generated (no other parameters possible). <strong>Example:</strong> <a href="{cms_selflink href="alias"}"><img src=&quot;&quot;></a></li>
		<li><em>(optional)</em> <tt>image</tt> - A url of an image to use in the link. <strong>Example:</strong> {cms_selflink dir=&quot;next&quot; image=&quot;next.png&quot; text=&quot;Next&quot;}</li>
		<li><em>(optional)</em> <tt>alt</tt> - Alternative text to be used with image (alt=&quot;&quot; will be used if no alt parameter is given).</li>
		<li><em>(optional)</em> <tt>imageonly</tt> - If using an image, whether to suppress display of text links. If you want no text in the link at all, also set lang=0 to suppress the label. <B>Example:</B> {cms_selflink dir=&quot;next&quot; image=&quot;next.png&quot; text=&quot;Next&quot; imageonly=1}</li>
		<li><em>(optional)</em> <tt>ext</tt> - For external links, will add class=&quot;external and info text. <strong>warning:</strong> only text, target and title parameters are compatible with this parameter</li>
		<li><em>(optional)</em> <tt>ext_info</tt> - Used together with &quot;ext&quot; defaults to (external link)</li>
		</ul>
		</p>';
$lang['admin']['about_function_cms_module'] = '	<p>Author: Ted Kulp<tedkulp@users.sf.net></p>
	<p>Version: 1.0</p>
	<p>
	Change History:<br/>
	None
	</p>';
$lang['admin']['help_function_cms_module'] = '	<h3>What does this do?</h3>
	<p>This tag is used to insert modules into your templates and pages.  If a module is created to be used as a tag plugin (check it&#039;s help for details), then you should be able to insert it with this tag.</p>
	<h3>How do I use it?</h3>
	<p>It&#039;s just a basic tag plugin.  You would insert it into your template or page like so: <code>{cms_module module=&quot;somemodulename&quot;}</code>
	<h3>What parameters does it take?</h3>
	<p>There is only one required parameter.  All other parameters are passed on to the module.
	<ul>
		<li>module - Name of the module to insert.  This is not case sensitive.</li>
	</ul>
	</p>';
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
$lang['admin']['help_function_breadcrumbs'] = '<h3>What does this do?</h3>
<p>Prints a breadcrumb trail .</p>
<h3>How do I use it?</h3>
<p>Just insert the tag into your template/page like: <code>{breadcrumbs}</code></p>
<h3>What parameters does it take?</h3>
<p>
<ul>
<li><em>(optional)</em> <tt>delimiter</tt> - Text to seperate entries in the list (default &quot;>>&quot;).</li>
<li><em>(optional)</em> <tt>initial</tt> - 1/0 If set to 1 start the breadcrumbs with a delimiter (default 0).</li>
<li><em>(optional)</em> <tt>root</tt> - Page alias of a page you want to always appear as the first page in
    the list. Can be used to make a page (e.g. the front page) appear to be the root of everything even though it is not.</li>
<li><em>(optional)</em> <tt>root_url</tt> - Override the URL of the root page. Useful for making link be to &#039;/&#039; instead of &#039;/home/&#039;. This requires that the root page be set as the default page.</li>
<li><em>(optional)</em> <tt>classid</tt> - The CSS class for the non current page names, i.e. the first n-1 pages in the list. If the name is a link it is added to the <a href> tags, otherwise it is added to the <span> tags.</li>
<li><em>(optional)</em> <tt>currentclassid</tt> - The CSS class for the <span> tag surrounding the current page name.</li>
<li><em>(optional)</em> <tt>starttext</tt> - Text to append to the front of the breadcrumbs list, something like &quot;You are here&quot;.</li>
</ul>
</p>';
$lang['admin']['about_function_anchor'] = '	<p>Author: Ted Kulp<tedkulp@users.sf.net></p>
	<p>Version: 1.1</p>
	<p>
	Change History:<br/>
	<strong>Update to version 1.1 from 1.0</strong> <em>2006/07/19</em><br/>
	Russ added the means to insert a title, a tabindex and a class for the anchor link. Westis added accesskey and changed parameter names to not include &#039;anchorlink&#039;.<br/>
	</hr>
	</p>';
$lang['admin']['help_function_anchor'] = '	<h3>What does this do?</h3>
	<p>Makes a proper anchor link.</p>
	<h3>How do I use it?</h3>
	<p>Just insert the tag into your template/page like: <code>{anchor anchor=&#039;here&#039; text=&#039;Scroll Down&#039;}</code></p>
	<h3>What parameters does it take?</h3>
	<p>
	<ul>
	<li><tt>anchor</tt> - Where we are linking to.  The part after the #.</li>
	<li><tt>text</tt> - The text to display in the link.</li>
	<li><tt>class</tt> - The class for the link, if any</li>
	<li><tt>title</tt> - The title to display for the link, if any.</li>
	<li><tt>tabindex</tt> - The numeric tabindex for the link, if any.</li>
	<li><tt>accesskey</tt> - The accesskey for the link, if any.</li>
	<li><em>(optional)</em> <tt>onlyhref</tt> - Only display the href and not the entire link. No other options will work</li>
	</ul>
	</p>';
$lang['admin']['help_function_site_mapper'] = '<h3>What does this do?</h3>
  <p>This is actually just a wrapper tag for the <a href="listmodules.php?action=showmodulehelp&amp;module=MenuManager">Menu Manager module</a> to make the tag syntax easier, and to simplify creating a sitemap.</p>
<h3>How do I use it?</h3>
  <p>Just put <code>{site_mapper}</code> on a page or in a template. For help about the Menu Manager module, what parameters it takes etc., please refer to the <a href="listmodules.php?action=showmodulehelp&amp;module=MenuManager">Menu Manager module help</a>.</p>
  <p>By default, if no template option is specified the minimal_menu.tpl file will be used.</p>
  <p>Any parameters used in the tag are available in the menumanager template as <code>{$menuparams.paramname}</code></p>';
$lang['admin']['help_function_redirect_url'] = '<h3>What does this do?</h3>
  <p>This plugin allows you to easily redirect to a specified url.  It is handy inside of smarty conditional logic (for example, redirect to a splash page if the site is not live yet).</p>
<h3>How do I use it?</h3>
<p>Simply insert this tage into your page or template: <code>{redirect_url urle=&#039;www.cmsmadesimple.org&#039;}</code></p>';
$lang['admin']['help_function_redirect_page'] = '<h3>What does this do?</h3>
 <p>This plugin allows you to easily redirect to another page.  It is handy inside of smarty conditional logic (for example, redirect to a login page if the user is not logged in.)</p>
<h3>How do I use it?</h3>
<p>Simply insert this tage into your page or template: <code>{redirect_page page=&#039;some-page-alias&#039;}</code></p>';
$lang['admin']['of'] = '-in(ın)';
$lang['admin']['first'] = 'İlk';
$lang['admin']['last'] = 'Son';
$lang['admin']['adminspecialgroup'] = 'Uyarı: Bu grubun &uuml;yeleri otomatik olarak t&uuml;m izinlere sahip olacaktır';
$lang['admin']['disablesafemodewarning'] = 'Y&ouml;netici g&uuml;venli modu uyarısını kapat';
$lang['admin']['allowparamcheckwarnings'] = 'Uyarı mesajları yaratmak i&ccedil;in paramatre kontrollerine izin ver';
$lang['admin']['date_format_string'] = 'Tarih Bi&ccedil;imi Dizilişi';
$lang['admin']['date_format_string_help'] = '<em>strftime</em> formatlanmış tarih format ifadesi';
$lang['admin']['last_modified_at'] = 'En son yenilenme zamanı';
$lang['admin']['last_modified_by'] = 'En son yenileyen';
$lang['admin']['read'] = 'Oku';
$lang['admin']['write'] = 'Yaz';
$lang['admin']['execute'] = '&Ccedil;alıştır';
$lang['admin']['group'] = 'Grup';
$lang['admin']['other'] = 'Diğer';
$lang['admin']['event_desc_moduleupgraded'] = 'Eklenti g&uuml;ncellendikten sonra g&ouml;nderildi';
$lang['admin']['event_desc_moduleinstalled'] = 'Eklenti kurulduktan sonra g&ouml;nderildi';
$lang['admin']['event_desc_moduleuninstalled'] = 'Eklenti kaldırıldıktan sonra g&ouml;nderildi';
$lang['admin']['event_desc_edituserdefinedtagpost'] = 'Kullanıcı tanımlı etiket g&uuml;ncellendikten sonra g&ouml;nderildi';
$lang['admin']['event_desc_edituserdefinedtagpre'] = 'Kullanıcı tanımlı etiket g&uuml;ncellenmeden &ouml;nce g&ouml;nderildi';
$lang['admin']['event_desc_deleteuserdefinedtagpre'] = 'Kullanıcı tanımlı etiket silinmeden &ouml;nce g&ouml;nderildi';
$lang['admin']['event_desc_deleteuserdefinedtagpost'] = 'Kullanıcı tanımlı etiket silindikten sonra g&ouml;nderildi';
$lang['admin']['event_desc_adduserdefinedtagpost'] = 'Kullanıcı tanımlı etiket eklendikten sonra g&ouml;nderildi';
$lang['admin']['event_desc_adduserdefinedtagpre'] = 'Kullanıcı tanımlı etiket eklenmeden &ouml;nce g&ouml;nderildi';
$lang['admin']['global_umask'] = 'Dosya Yaratma Maskesi (umask)';
$lang['admin']['errorcantcreatefile'] = 'Dosya yaratılamadı (yetki sorunu mu?)';
$lang['admin']['errormoduleversionincompatible'] = 'Eklenti CMS&#039;nin bu s&uuml;r&uuml;m&uuml; ile uyumsuz';
$lang['admin']['errormodulenotloaded'] = 'İ&ccedil; hata, eklenti başlatılamadı';
$lang['admin']['errormodulenotfound'] = 'İ&ccedil; hata, eklentinin başlatılmış hali bulunamadı';
$lang['admin']['errorinstallfailed'] = 'Eklenti kurulamadı';
$lang['admin']['errormodulewontload'] = 'Varolan eklentinin başlatılmasında hata';
$lang['admin']['frontendlang'] = '&Ouml;ny&uuml;z i&ccedil;in varsayılan dil';
$lang['admin']['info_edituser_password'] = 'Kullanıcının parolasını değiştirmek i&ccedil;in bu alanı değiştiriniz';
$lang['admin']['info_edituser_passwordagain'] = 'Kullanıcının parolasını değiştirmek i&ccedil;in bu alanı değiştiriniz';
$lang['admin']['originator'] = '&Ccedil;ıkaran';
$lang['admin']['module_name'] = 'Eklenti Adı';
$lang['admin']['event_name'] = 'Olay Adı';
$lang['admin']['event_description'] = 'Olay A&ccedil;ıklaması';
$lang['admin']['error_delete_default_parent'] = 'Varsayılan sayfanın bağlı olduğu sayfayı silemezsiniz.';
$lang['admin']['jsdisabled'] = '&Uuml;zg&uuml;n&uuml;m, bu işlev Javascript&#039;in etkinleştirilmiş olmasını gerektiriyor.';
$lang['admin']['order'] = 'Sırala';
$lang['admin']['reorderpages'] = 'Sayfaları Yeniden Sırala';
$lang['admin']['reorder'] = 'Yeniden Sırala';
$lang['admin']['page_reordered'] = 'Sayfa başarılı olarak yeniden sıralandı.';
$lang['admin']['pages_reordered'] = 'Sayfaları başarılı olarak yeniden sıralandı';
$lang['admin']['sibling_duplicate_order'] = 'Aynı seviyedeki iki sayfanın sırası aynı olamaz. Sayfalar yeniden sıralanmadı.';
$lang['admin']['no_orders_changed'] = 'Sayfaları yeniden sıralamayı se&ccedil;tiniz, ancak hi&ccedil;bir sayfanın sırasını değiştirmediniz. Sayfalar yeniden sıralanmadı.';
$lang['admin']['order_too_small'] = 'Bir sayfanın sırası sıfır olamaz. Sayfalar yeniden sıralanmadı.';
$lang['admin']['order_too_large'] = 'Bir sayfanın sırası aynı seviyedeki sayfa sayısından b&uuml;y&uuml;k olamaz. Sayfalar yeniden sıralanmadı.';
$lang['admin']['user_tag'] = 'Kullanıcı Etiketi';
$lang['admin']['add'] = 'Ekle';
$lang['admin']['CSS'] = 'Css';
$lang['admin']['about'] = 'Hakkında';
$lang['admin']['action'] = 'Eylem';
$lang['admin']['actionstatus'] = 'Eylem/Durum';
$lang['admin']['active'] = 'Aktif';
$lang['admin']['addcontent'] = 'Yeni İ&ccedil;erik Ekle';
$lang['admin']['cantremove'] = 'Kaldırılamıyor';
$lang['admin']['changepermissions'] = 'Yetkileri Değiştir';
$lang['admin']['changepermissionsconfirm'] = 'DİKKAT\n\nBu işlem eklentiyi oluşturan dosyaların web sunucu tarafından yazılabilir olduğundan emin olmayı deneyecektir.\nDevam etmek istediğinizden emin misiniz?';
$lang['admin']['contentadded'] = 'İ&ccedil;erik başarılı olarak veritabanına eklendi.';
$lang['admin']['contentupdated'] = 'İ&ccedil;erik başarılı olarak g&uuml;ncellendi.';
$lang['admin']['contentdeleted'] = 'İ&ccedil;erik başarılı olarak veritabanından kaldırıldı.';
$lang['admin']['success'] = 'Başarı';
$lang['admin']['addcss'] = 'Stilsayfası ekle';
$lang['admin']['addgroup'] = 'Yeni Grup Ekle';
$lang['admin']['additionaleditors'] = 'Ek d&uuml;zenleyiciler';
$lang['admin']['addtemplate'] = 'Yeni Şablon Ekle';
$lang['admin']['adduser'] = 'Yeni Kullanıcı Ekle';
$lang['admin']['addusertag'] = 'Kullanıcı tanımlı etiket ekle';
$lang['admin']['adminaccess'] = 'Y&ouml;netici i&ccedil;in oturum a&ccedil;maya erişim';
$lang['admin']['adminlog'] = 'Y&ouml;netici G&uuml;nl&uuml;ğ&uuml;';
$lang['admin']['adminlogcleared'] = 'Y&ouml;netici G&uuml;nl&uuml;ğ&uuml; başarıyla silindi';
$lang['admin']['adminlogempty'] = 'Y&ouml;netici G&uuml;nl&uuml;ğ&uuml; boş';
$lang['admin']['adminsystemtitle'] = 'CMS Y&ouml;netim Sistemi';
$lang['admin']['adminpaneltitle'] = 'CMS Made Simple Y&ouml;netici Paneli';
$lang['admin']['advanced'] = 'Gelişmiş';
$lang['admin']['aliasalreadyused'] = 'Takma ad zaten başka bir sayfada kullanılmış. &quot;Se&ccedil;enekler&quot; sekmesindeki &quot;Sayfa Takma adı&quot;&#039;nı başka bir şeye değiştiriniz.';
$lang['admin']['aliasmustbelettersandnumbers'] = 'Takma ad t&uuml;m&uuml;yle harf ve sayılardan oluşmalıdır';
$lang['admin']['aliasnotaninteger'] = 'Takma ad tamsayı olamaz';
$lang['admin']['allpagesmodified'] = 'T&uuml;m sayfalar değişti!';
$lang['admin']['assignments'] = 'Kullanıcıları ata';
$lang['admin']['associationexists'] = 'Bu ilişki zaten var';
$lang['admin']['autoinstallupgrade'] = 'Otomatik olarak kur veya g&uuml;ncelle';
$lang['admin']['back'] = 'Men&uuml;ye Geri D&ouml;n';
$lang['admin']['backtoplugins'] = 'Eklenti Listesine Geri d&ouml;n';
$lang['admin']['cancel'] = 'Vazge&ccedil;';
$lang['admin']['cantchmodfiles'] = 'Bazı dosyaların yetkileri değiştirilemedi';
$lang['admin']['cantremovefiles'] = 'Dosya silme sorunu (yetki?)';
$lang['admin']['confirmcancel'] = 'Yaptığınız değişiklikleri g&ouml;zardı etmek istediğinizden emin misiniz? T&uuml;m değişiklikleri g&ouml;zardı etmek i&ccedil;in Tamam&#039;ı tıklayınız. D&uuml;zenlemeye devam etmek i&ccedil;in Vazge&ccedil;&#039;i tıklayınız.';
$lang['admin']['canceldescription'] = 'Değişiklikleri G&ouml;zardı Et';
$lang['admin']['clearadminlog'] = 'Y&ouml;netici G&uuml;nl&uuml;ğ&uuml;n&uuml; Temizle';
$lang['admin']['code'] = 'Kod';
$lang['admin']['confirmdefault'] = 'Site\&#039;nin varsayılan sayfası olarak ayarlamak istediğinizden emin misiniz?';
$lang['admin']['confirmdeletedir'] = 'Klas&ouml;r&uuml; ve i&ccedil;eriğini t&uuml;m&uuml;yle silmek istediğinizden emin misiniz?';
$lang['admin']['content'] = 'İ&ccedil;erik';
$lang['admin']['contentmanagement'] = 'İ&ccedil;erik Y&ouml;netimi';
$lang['admin']['contenttype'] = 'İ&ccedil;erik Tipi';
$lang['admin']['copy'] = 'Kopyala';
$lang['admin']['copytemplate'] = 'Şablonu Kopyala';
$lang['admin']['create'] = 'Yarat';
$lang['admin']['createnewfolder'] = 'Yeni Klas&ouml;r Yarat';
$lang['admin']['cssalreadyused'] = 'CSS adı zaten kullanılmış';
$lang['admin']['cssmanagement'] = 'CSS Y&ouml;netimi';
$lang['admin']['currentassociations'] = 'Y&uuml;r&uuml;rl&uuml;kteki İlişkiler';
$lang['admin']['currentdirectory'] = 'Y&uuml;r&uuml;rl&uuml;kteki Klas&ouml;r';
$lang['admin']['currentgroups'] = 'Y&uuml;r&uuml;rl&uuml;kteki Gruplar';
$lang['admin']['currentpages'] = 'Y&uuml;r&uuml;rl&uuml;kteki Sayfalar';
$lang['admin']['currenttemplates'] = 'Y&uuml;r&uuml;rl&uuml;kteki Şablonlar';
$lang['admin']['currentusers'] = 'Y&uuml;r&uuml;rl&uuml;kteki Kullanıcılar';
$lang['admin']['custom404'] = 'Uyarlanmış 404 Hata Mesajı';
$lang['admin']['database'] = 'Veritabanı';
$lang['admin']['databaseprefix'] = 'Veritabanı &Ouml;neki';
$lang['admin']['databasetype'] = 'Veritabanı Tipi';
$lang['admin']['date'] = 'Tarih';
$lang['admin']['default'] = 'Varsayılan';
$lang['admin']['delete'] = 'Sil';
$lang['admin']['deleteconfirm'] = 'Silmek istediğinizden emin misiniz?';
$lang['admin']['deleteassociationconfirm'] = '- %s - e ilişkiyi silmek istediğine emin misin?';
$lang['admin']['deletecss'] = 'CSS&#039;yi sil';
$lang['admin']['dependencies'] = 'Bağımlılıklar';
$lang['admin']['description'] = 'A&ccedil;ıklama';
$lang['admin']['directoryexists'] = 'Bu klas&ouml;r zaten var.';
$lang['admin']['down'] = 'Aşağı';
$lang['admin']['edit'] = 'D&uuml;zenle';
$lang['admin']['editconfiguration'] = 'Ayarları D&uuml;zenle';
$lang['admin']['editcontent'] = 'İ&ccedil;erik D&uuml;zenle';
$lang['admin']['editcss'] = 'Stilsayfasını d&uuml;zenle';
$lang['admin']['editcsssuccess'] = 'Stilsayfası g&uuml;ncellendi';
$lang['admin']['editgroup'] = 'Grup D&uuml;zenle';
$lang['admin']['editpage'] = 'Sayfa D&uuml;zenle';
$lang['admin']['edittemplate'] = 'Şablon D&uuml;zenle';
$lang['admin']['edittemplatesuccess'] = 'Şablon g&uuml;ncellendi';
$lang['admin']['edituser'] = 'Kullanıcı D&uuml;zenle';
$lang['admin']['editusertag'] = 'Kullanıcı Tanımlı Etiket D&uuml;zenle';
$lang['admin']['usertagadded'] = 'Kullanıcı Tanımlı Etiket başarılı olarak eklendi.';
$lang['admin']['usertagupdated'] = 'Kullanıcı Tanımlı Etiket başarılı olarak g&uuml;ncellendi.';
$lang['admin']['usertagdeleted'] = 'Kullanıcı Tanımlı Etiket başarılı olarak kaldırıldı.';
$lang['admin']['email'] = 'E-Posta Adresi';
$lang['admin']['errorattempteddowngrade'] = 'Bu eklentinin kurulması s&uuml;r&uuml;m d&uuml;ş&uuml;rmeye yol a&ccedil;abilirdi. İşlem durduruldu';
$lang['admin']['errorchildcontent'] = 'İ&ccedil;eriğe bağlı i&ccedil;erikler var. L&uuml;tfen &ouml;nce onları kaldırınız.';
$lang['admin']['errorcopyingtemplate'] = 'Şablon Kopyalama Hatası';
$lang['admin']['errorcouldnotparsexml'] = 'XML dosyası &ccedil;&ouml;z&uuml;mleme hatası. L&uuml;tfen bir  .tar.gz veya zip dosyası değil .xml dosyası y&uuml;klediğinizden emin olunuz.';
$lang['admin']['errorcreatingassociation'] = 'İlişki yaratma hatası';
$lang['admin']['errorcssinuse'] = 'Bu stilsayfası hala şablon veya sayfalar tarafından kullanılmakta. L&uuml;tfen &ouml;ncelikle bu  ilişkileri kaldırınız.';
$lang['admin']['errordefaultpage'] = 'Y&uuml;r&uuml;rl&uuml;kteki varsayılan sayfa silinemez. &Ouml;nce başka bir sayfayı ayarlayın, l&uuml;tfen.';
$lang['admin']['errordeletingassociation'] = 'İlişki silme hatası';
$lang['admin']['errordeletingcss'] = 'CSS silme hatası ';
$lang['admin']['errordeletingdirectory'] = 'Klas&ouml;r silinemedi. Yetki sorunu mu?';
$lang['admin']['errordeletingfile'] = 'Dosya silinemedi. Yetki sorunu mu?';
$lang['admin']['errordirectorynotwritable'] = 'Klas&ouml;re yazma yetkisi yok';
$lang['admin']['errordtdmismatch'] = 'XML dosyasında DTD S&uuml;r&uuml;m&uuml; yok veya uyumsuz';
$lang['admin']['errorgettingcssname'] = 'Stilsayfası adını alma hatası';
$lang['admin']['errorgettingtemplatename'] = 'Şablon adı alma hatası';
$lang['admin']['errorincompletexml'] = 'XML Dosyası tam değil veya ge&ccedil;ersiz';
$lang['admin']['uploadxmlfile'] = 'XML dosyası ile eklenti kur';
$lang['admin']['cachenotwritable'] = 'Tampon klas&ouml;r yazılabilir değil. Tampon temizleme &ccedil;alışmayacaktır. L&uuml;tfen tmp/cache tampon klas&ouml;r&uuml;ne t&uuml;m okuma/yazma yetkilerini veriniz (chmod 777)';
$lang['admin']['modulesnotwritable'] = 'Eklenti (modules) klas&ouml;r&uuml; yazılabilir değil, eğer eklentileri XML dosyası y&uuml;kleme yoluyla kurmak istiyorsanız modules klas&ouml;r&uuml;ne t&uuml;m okuma/yazma/&ccedil;alıştırma yetkilerini vermelisiniz (chmod 777).';
$lang['admin']['noxmlfileuploaded'] = 'Hi&ccedil;bir dosya y&uuml;klenmedi. Eklentiyi XML yoluyla kurmak i&ccedil;in bilgisayarınızdaki bir .xml eklenti dosyasını se&ccedil;ip y&uuml;klemelisiniz.';
$lang['admin']['errorinsertingcss'] = 'Stilsayfası ekleme hatası';
$lang['admin']['errorinsertinggroup'] = 'Grup ekleme hatası';
$lang['admin']['errorinsertingtag'] = 'Kullanıcı etiketi ekleme hatası';
$lang['admin']['errorinsertingtemplate'] = 'Şablon ekleme hatası';
$lang['admin']['errorinsertinguser'] = 'Kullanıcı ekleme hatası';
$lang['admin']['errornofilesexported'] = 'Dosyaları xml&#039;e verme hatası';
$lang['admin']['errorretrievingcss'] = 'Stilsayfası alma hatası';
$lang['admin']['errorretrievingtemplate'] = 'Şablon alma hatası';
$lang['admin']['errortemplateinuse'] = 'Bu şablon bir sayfada kullanılıyor. L&uuml;tfen &ouml;nce sayfayı kaldırınız.';
$lang['admin']['errorupdatingcss'] = 'Stilsayfası g&uuml;ncelleme hatası';
$lang['admin']['errorupdatinggroup'] = 'Grup g&uuml;ncelleme hatası';
$lang['admin']['errorupdatingpages'] = 'Sayfa g&uuml;ncelleme hatası';
$lang['admin']['errorupdatingtemplate'] = 'Şablon g&uuml;ncelleme hatası';
$lang['admin']['errorupdatinguser'] = 'Kullanıcı g&uuml;ncelleme hatası';
$lang['admin']['errorupdatingusertag'] = 'Kullanıcı etiketi gğncelleme hatası';
$lang['admin']['erroruserinuse'] = 'Kullanıcı i&ccedil;erik sayfalarına sahip. Silmeden &ouml;nce sayfaların sahibini değiştiriniz.';
$lang['admin']['eventhandlers'] = 'Olaylar';
$lang['admin']['editeventhandler'] = 'Olay İşleyicisini D&uuml;zenle';
$lang['admin']['eventhandlerdescription'] = 'Kullanıcı etiketlerini olaylarla ilişkilendir';
$lang['admin']['export'] = 'Ver';
$lang['admin']['event'] = 'Olay';
$lang['admin']['false'] = 'Yanlış';
$lang['admin']['settrue'] = 'Doğru Yap';
$lang['admin']['filecreatedirnodoubledot'] = 'Klas&ouml;r &#039;..&#039; i&ccedil;eremez.';
$lang['admin']['filecreatedirnoname'] = 'Adı olmayan klas&ouml;r yaratılamaz.';
$lang['admin']['filecreatedirnoslash'] = 'Klas&ouml;r &#039;/&#039; veya &#039;\&#039; i&ccedil;eremez.';
$lang['admin']['filemanagement'] = 'Dosya Y&ouml;netimi';
$lang['admin']['filename'] = 'Dosya adı';
$lang['admin']['filenotuploaded'] = 'Dosya y&uuml;klenemedi. Yetki sorunu mu?';
$lang['admin']['filesize'] = 'Dosya Boyutu';
$lang['admin']['firstname'] = 'Ad';
$lang['admin']['groupmanagement'] = 'Grup Y&ouml;netimi';
$lang['admin']['grouppermissions'] = 'Grup Yetkileri';
$lang['admin']['handler'] = 'İşleyici (kullanıcı tanımlı etiket)';
$lang['admin']['headtags'] = 'Ana Etiketler';
$lang['admin']['help'] = 'Yardım';
$lang['admin']['new_window'] = 'yeni pencere';
$lang['admin']['helpwithsection'] = '%s Yardım';
$lang['admin']['helpaddtemplate'] = '<p>Şablon sitenizin i&ccedil;eriğinin nasıl g&ouml;r&uuml;neceğini kontrol eden şeydir.</p><p>&Ouml;ğelerinizin g&ouml;r&uuml;n&uuml;mlerini kontrol etmek i&ccedil;in, burada yerleşimi yaratıp Stilsayfası b&ouml;l&uuml;m&uuml;nde de CSS&#039;lerinizi ekleyiniz.</p>';
$lang['admin']['helplisttemplate'] = '<p>Bu sayfa şablon d&uuml;zenleme, silme ve yaratma işlemlerini sağlar.</p><p>Yeni bir şablon yaratmak i&ccedil;in <u>Yeni Şablon Ekle</u> d&uuml;ğmesini tıklayınız.</p><p>Eğer t&uuml;m i&ccedil;erik sayfalarının aynı şablonu kullanmasını isterseniz, <u>T&uuml;m İ&ccedil;eriğe Ayarla</u> bağını tıklayınız.</p><p>Eğer bir şablonu kopyalamak isterseniz, <u>Kopyala</u> simgesini tıklayınız; yeni kopyalanan şablon i&ccedil;in bir ad girmeniz istenecektir.</p>';
$lang['admin']['home'] = 'Index';
$lang['admin']['homepage'] = 'Anasayfa';
$lang['admin']['hostname'] = 'Sunucu adı';
$lang['admin']['idnotvalid'] = 'Girilen kimlik ge&ccedil;erli değil';
$lang['admin']['imagemanagement'] = 'Resim Y&ouml;neticisi';
$lang['admin']['informationmissing'] = 'Bilgi eksik';
$lang['admin']['install'] = 'Kur';
$lang['admin']['invalidcode'] = 'Ge&ccedil;ersiz kod girildi.';
$lang['admin']['illegalcharacters'] = '%s. alanında ge&ccedil;ersiz karakterler';
$lang['admin']['invalidcode_brace_missing'] = 'Parantez sayıları dengesiz';
$lang['admin']['invalidtemplate'] = 'Şablon ge&ccedil;ersiz';
$lang['admin']['itemid'] = '&Ouml;ğe Kimliği';
$lang['admin']['itemname'] = '&Ouml;ğe Adı';
$lang['admin']['language'] = 'Dil';
$lang['admin']['lastname'] = 'Soyadı';
$lang['admin']['logout'] = '&Ccedil;ık';
$lang['admin']['loginprompt'] = 'Y&ouml;netim Paneline girmek i&ccedil;in ge&ccedil;erli bir kullanıcı parolası giriniz.';
$lang['admin']['logintitle'] = 'CMS Made Simple Y&ouml;netici Giriş';
$lang['admin']['menutext'] = 'Men&uuml; Yazısı';
$lang['admin']['missingparams'] = 'Bazı parametreler eksik veya ge&ccedil;ersiz';
$lang['admin']['modifygroupassignments'] = 'Grup Atamalarını D&uuml;zenle';
$lang['admin']['moduleabout'] = '%s eklentisi hakkında';
$lang['admin']['modulehelp'] = '%s eklentisi i&ccedil;in yardım';
$lang['admin']['msg_defaultcontent'] = 'T&uuml;m yeni sayfalarda &ouml;ntanımlı i&ccedil;erik olarak g&ouml;r&uuml;nmesi gereken kodu buraya ekleyin';
$lang['admin']['msg_defaultmetadata'] = 'T&uuml;m yeni sayfalarda metadata b&ouml;l&uuml;m&uuml;nde g&ouml;r&uuml;nmesi gereken kodu buraya ekleyin';
$lang['admin']['wikihelp'] = 'Topluluk Yardımı';
$lang['admin']['moduleinstalled'] = 'Eklenti zaten kurulu';
$lang['admin']['moduleinterface'] = '%s Arabirimi';
$lang['admin']['modules'] = 'Eklentiler';
$lang['admin']['move'] = 'Taşı';
$lang['admin']['name'] = 'Ad';
$lang['admin']['needpermissionto'] = 'Bu işlemi yapmak i&ccedil;in &#039;%s&#039; yetkisine sahip olmalısınız.';
$lang['admin']['needupgrade'] = 'G&uuml;ncelleme gerekiyor';
$lang['admin']['newtemplatename'] = 'Yeni Şablon Adı';
$lang['admin']['next'] = 'Sonraki';
$lang['admin']['noaccessto'] = '%s&#039;e ulaşılamıyor';
$lang['admin']['nocss'] = 'Stilsayfası yok';
$lang['admin']['noentries'] = 'Girdi yok';
$lang['admin']['nofieldgiven'] = '%s girilmemiş!';
$lang['admin']['nofiles'] = 'Dosya yok';
$lang['admin']['nopasswordmatch'] = 'Parolalar aynı değil';
$lang['admin']['norealdirectory'] = 'Ger&ccedil;ek bir klas&ouml;r girilmemiş';
$lang['admin']['norealfile'] = 'Ger&ccedil;ek bir dosya girilmemiş';
$lang['admin']['notinstalled'] = 'Y&uuml;klenmedi';
$lang['admin']['overwritemodule'] = 'Varolan eklentilerin &uuml;st&uuml;ne yaz';
$lang['admin']['owner'] = 'Sahip';
$lang['admin']['pagealias'] = 'Sayfa Takma adları';
$lang['admin']['pagedefaults'] = 'Sayfa &Ouml;ntanımlıları';
$lang['admin']['pagedefaultsdescription'] = 'Yeni sayfalar i&ccedil;in &ouml;ntanımlı değerleri uygula';
$lang['admin']['parent'] = '&Uuml;st';
$lang['admin']['password'] = 'Parola';
$lang['admin']['passwordagain'] = 'Parola (yeniden)';
$lang['admin']['permission'] = 'Yeki';
$lang['admin']['permissions'] = 'Yetkiler';
$lang['admin']['permissionschanged'] = 'Yetkiler g&uuml;ncellendi.';
$lang['admin']['pluginabout'] = '%s etiketi hakkında';
$lang['admin']['pluginhelp'] = '%s etiketi i&ccedil;in yardım';
$lang['admin']['pluginmanagement'] = 'Eklenti Y&ouml;netimi';
$lang['admin']['prefsupdated'] = 'Tercihler g&uuml;ncellendi.';
$lang['admin']['preview'] = '&Ouml;nizle';
$lang['admin']['previewdescription'] = 'Değişiklikler &ouml;nizle';
$lang['admin']['previous'] = '&Ouml;nceki';
$lang['admin']['remove'] = 'Kaldır';
$lang['admin']['removeconfirm'] = 'Bu hareket eklentiyi oluşturan dosyaları geri d&ouml;n&uuml;lmez bir şekilde silecektir.\nDevam etmek istediğinizden emin misiniz?';
$lang['admin']['removecssassociation'] = 'Stilsayfası ilişkisini kaldır';
$lang['admin']['saveconfig'] = 'Ayarları Kaydet';
$lang['admin']['send'] = 'G&ouml;nder';
$lang['admin']['setallcontent'] = 'T&uuml;m Sayfaları Ayarla';
$lang['admin']['setallcontentconfirm'] = 'T&uuml;m sayfalarda bu şablonu kullanmak istediğinizden emin misiniz?';
$lang['admin']['showinmenu'] = 'Men&uuml;de G&ouml;ster';
$lang['admin']['showsite'] = 'Siteyi G&ouml;ster';
$lang['admin']['sitedownmessage'] = 'Site &Ccedil;alışmıyor Mesajı';
$lang['admin']['siteprefs'] = 'Genel Ayarlar';
$lang['admin']['status'] = 'Durum';
$lang['admin']['stylesheet'] = 'Stilsayfası';
$lang['admin']['submit'] = 'G&ouml;nder';
$lang['admin']['submitdescription'] = 'Değişiklikleri kaydet';
$lang['admin']['tags'] = 'Etiketler';
$lang['admin']['template'] = 'Şablon';
$lang['admin']['templateexists'] = 'Şablon adı zaten var';
$lang['admin']['templatemanagement'] = 'Şablon Y&ouml;netimi';
$lang['admin']['title'] = 'Başlık';
$lang['admin']['tools'] = 'Ara&ccedil;lar';
$lang['admin']['true'] = 'Doğru';
$lang['admin']['setfalse'] = 'Yanlış yap';
$lang['admin']['type'] = 'Tip';
$lang['admin']['typenotvalid'] = 'Tip ge&ccedil;erli değil';
$lang['admin']['uninstall'] = 'Kaldır';
$lang['admin']['uninstallconfirm'] = 'Eklentiyi kaldırmak istediğinizden emin misiniz? Adı:';
$lang['admin']['up'] = 'Yukarı';
$lang['admin']['upgrade'] = 'G&uuml;ncelle';
$lang['admin']['upgradeconfirm'] = 'Bunu g&uuml;ncellemek istediğinizden emin misiniz?';
$lang['admin']['uploadfile'] = 'Dosya Y&uuml;kle';
$lang['admin']['url'] = 'URL.';
$lang['admin']['useadvancedcss'] = 'Gelişmiş Stilsayfası Y&ouml;netimini kullan';
$lang['admin']['user'] = 'Kullanıcı';
$lang['admin']['userdefinedtags'] = 'Kullanıcı Tanımlı Etiketler';
$lang['admin']['usermanagement'] = 'Kullanıcı Y&ouml;netimi';
$lang['admin']['username'] = 'Kullanıcı adı';
$lang['admin']['usernameincorrect'] = 'Kullanıcı adı veya parolası ge&ccedil;ersiz';
$lang['admin']['userprefs'] = 'Kullanıcı Tercihleri';
$lang['admin']['usersassignedtogroup'] = 'Kullanıcılar %s Grubuna atandı';
$lang['admin']['usertagexists'] = 'Bu adda bir etiket zaten var. L&uuml;tfen başkasını se&ccedil;iniz.';
$lang['admin']['usewysiwyg'] = 'İ&ccedil;erik i&ccedil;in WYSIWYG d&uuml;zenleyiciyi kullan';
$lang['admin']['version'] = 'S&uuml;r&uuml;m';
$lang['admin']['view'] = 'İzle';
$lang['admin']['welcomemsg'] = 'Hoşgeldin %s';
$lang['admin']['directoryabove'] = '&Uuml;st seviyedeki klas&ouml;r';
$lang['admin']['nodefault'] = 'Varsayılan Se&ccedil;ilmemiş';
$lang['admin']['blobexists'] = 'Genel İ&ccedil;erik Bloğu adı zaten var';
$lang['admin']['blobmanagement'] = 'Genel İ&ccedil;erik Blok Y&ouml;netimi';
$lang['admin']['errorinsertingblob'] = 'Genel İ&ccedil;erik Blok ekleme hatası';
$lang['admin']['addhtmlblob'] = 'Genel İ&ccedil;erik Bloğu Ekle';
$lang['admin']['edithtmlblob'] = 'Genel İ&ccedil;erik Bloğunu D&uuml;zenle';
$lang['admin']['edithtmlblobsuccess'] = 'Genel i&ccedil;erik bloğu g&uuml;ncellendi';
$lang['admin']['tagtousegcb'] = 'Bu bloğu kullanmak i&ccedil;in işaretle';
$lang['admin']['gcb_wysiwyg'] = 'Genel İ&ccedil;erik Bloğu i&ccedil;in (GCB) WYSIWYG&#039;yi etkinleştir';
$lang['admin']['gcb_wysiwyg_help'] = 'Genel İ&ccedil;erik Bloğu d&uuml;zenlemesi srasında WYSIWYG d&uuml;zenleyiciyi etkinleştir';
$lang['admin']['filemanager'] = 'Dosya Y&ouml;neticisi';
$lang['admin']['imagemanager'] = 'Resim Y&ouml;netimi';
$lang['admin']['encoding'] = 'Kodlama';
$lang['admin']['clearcache'] = '&Ouml;nbelleği temizle';
$lang['admin']['clear'] = 'Temizle';
$lang['admin']['cachecleared'] = '&Ouml;nbellek temizlendi';
$lang['admin']['apply'] = 'Uygula';
$lang['admin']['applydescription'] = 'Değişiklikleri kaydet ve d&uuml;zenlemeye devam et';
$lang['admin']['none'] = 'Hi&ccedil;biri';
$lang['admin']['wysiwygtouse'] = 'Kullanacağınız WYSIWYG&#039;i se&ccedil;iniz';
$lang['admin']['syntaxhighlightertouse'] = 'Kullanmak i&ccedil;in s&ouml;zdizim vurgulayıcısını se&ccedil;';
$lang['admin']['hasdependents'] = 'Bağlılıkları var';
$lang['admin']['missingdependency'] = 'Eksik Bağlılık';
$lang['admin']['minimumversion'] = 'En d&uuml;ş&uuml;k s&uuml;r&uuml;m';
$lang['admin']['minimumversionrequired'] = 'İstenen en d&uuml;ş&uuml;k CMSMS S&uuml;r&uuml;m&uuml;';
$lang['admin']['maximumversion'] = 'En y&uuml;ksek s&uuml;r&uuml;m';
$lang['admin']['maximumversionsupported'] = 'Desteklenen en y&uuml;ksek CMSMS S&uuml;r&uuml;m&uuml;';
$lang['admin']['depsformodule'] = '%s Eklentisi i&ccedil;in bağımlılıklar';
$lang['admin']['installed'] = 'Kuruldu';
$lang['admin']['author'] = 'Yazar';
$lang['admin']['changehistory'] = 'Tarih&ccedil;eyi Değiştir';
$lang['admin']['moduleerrormessage'] = '%s Eklentisi i&ccedil;in Hata Mesajı';
$lang['admin']['moduleupgradeerror'] = 'Eklenti y&uuml;kseltmede hata.';
$lang['admin']['moduleinstallmessage'] = '%s Eklentisi i&ccedil;in Mesaj kur';
$lang['admin']['moduleuninstallmessage'] = '%s Eklentisi i&ccedil;in Mesaj kaldır';
$lang['admin']['admintheme'] = 'Y&ouml;netim Teması';
$lang['admin']['addstylesheet'] = 'Stilsayfası ekle';
$lang['admin']['editstylesheet'] = 'Stilsayfası d&uuml;zenle';
$lang['admin']['addcssassociation'] = 'Stilsayfası İlişkisi ekle';
$lang['admin']['attachstylesheet'] = 'Bu Stilsayfasını iliştir';
$lang['admin']['attachtemplate'] = 'Bunu Şablona iliştir';
$lang['admin']['main'] = 'Ana';
$lang['admin']['pages'] = 'Sayfalar';
$lang['admin']['page'] = 'Sayfa';
$lang['admin']['files'] = 'Dosyalar';
$lang['admin']['layout'] = 'Yerleşim';
$lang['admin']['usersgroups'] = 'Kullanıcılar &amp; Gruplar';
$lang['admin']['extensions'] = 'Ekler';
$lang['admin']['preferences'] = 'Tercihler';
$lang['admin']['admin'] = 'Site Y&ouml;neticisi';
$lang['admin']['viewsite'] = 'Siteyi İzle';
$lang['admin']['templatecss'] = 'Şablonları Stilsayfasına ata';
$lang['admin']['plugins'] = 'Eklentiler';
$lang['admin']['movecontent'] = 'Sayfaları Taşı';
$lang['admin']['module'] = 'Eklenti';
$lang['admin']['usertags'] = 'Kullanıcı Tanımlı Etiketler';
$lang['admin']['htmlblobs'] = 'Genel İ&ccedil;erik &Ouml;bekleri';
$lang['admin']['adminhome'] = 'Y&ouml;netim';
$lang['admin']['liststylesheets'] = 'Tasarım Şablonları';
$lang['admin']['preferencesdescription'] = 'Site genelindeki tercihlerinizi burada ayarlarsınız.';
$lang['admin']['adminlogdescription'] = 'Y&ouml;netimde kimin ne yaptığının ge&ccedil;mişini g&ouml;sterir.';
$lang['admin']['mainmenu'] = 'Ana Men&uuml;';
$lang['admin']['users'] = 'Kullanıcılar';
$lang['admin']['usersdescription'] = 'Kullanıcıları burada y&ouml;netirsiniz.';
$lang['admin']['groups'] = 'Gruplar';
$lang['admin']['groupsdescription'] = 'Gruplar burada y&ouml;netiliyor.';
$lang['admin']['groupassignments'] = 'Grup Atamaları';
$lang['admin']['groupassignmentdescription'] = 'Burada kullanıcıları gruplara atayabilirsiniz.';
$lang['admin']['groupperms'] = 'Grup Yetkileri';
$lang['admin']['grouppermsdescription'] = 'Grup yetki ve ulaşım seviyelerini ayarla';
$lang['admin']['pagesdescription'] = 'Sayfa ve diğer i&ccedil;erik ekleme ve d&uuml;zenlemesi burada yapılıyor.';
$lang['admin']['htmlblobdescription'] = 'Genel İ&ccedil;erik Blokları sayfa veya şablonlarınıza koyabileceğiniz i&ccedil;erik par&ccedil;alarıdır.';
$lang['admin']['templates'] = 'Şablonlar';
$lang['admin']['templatesdescription'] = 'Şablon ekleme ve d&uuml;zenleme burada yapılır. Şablonlar sitenizin g&ouml;r&uuml;nt&uuml;s&uuml;n&uuml; tanımlar.';
$lang['admin']['stylesheets'] = 'Tasarım şablonları';
$lang['admin']['stylesheetsdescription'] = 'Stilsayfası y&ouml;netimi ardışık tasarım şablonlarını (CSS) ele almanın gelişmiş bir yoludur.';
$lang['admin']['filemanagerdescription'] = 'Dosya y&uuml;kleme ve y&ouml;netme.';
$lang['admin']['imagemanagerdescription'] = 'Resimleri Y&uuml;kle/d&uuml;zenle ve kaldır.';
$lang['admin']['moduledescription'] = 'Eklentiler CMS Made Simple&#039;yi geliştirerek her &ccedil;eşit uyarlanmış işlevi sunmasını sağlar.';
$lang['admin']['tagdescription'] = 'Etketler i&ccedil;erik ve/veya şablonlarınıza ekleyebileceğiniz k&uuml;&ccedil;&uuml;k işlevlerdir.';
$lang['admin']['usertagdescription'] = 'Gezgininizden kendinizin yaratıp d&uuml;zenleyebileceği etiketler.';
$lang['admin']['installdirwarning'] = '<em><strong>Uyarı:</strong></em> kur klas&ouml;r&uuml; hala duruyor. L&uuml;tfen t&uuml;m&uuml;yle siliniz.';
$lang['admin']['subitems'] = 'Alt &ouml;ğeler';
$lang['admin']['extensionsdescription'] = 'Eklenti, etiket, ve diğer eğlenceli şeyler.';
$lang['admin']['usersgroupsdescription'] = 'Kullanıcı ve Grup ilintili &ouml;ğeler.';
$lang['admin']['layoutdescription'] = 'Site tasarım se&ccedil;enekleri.';
$lang['admin']['admindescription'] = 'Site Y&ouml;netim işlevleri.';
$lang['admin']['contentdescription'] = 'İ&ccedil;eriği burada ekleyip d&uuml;zenliyoruz.';
$lang['admin']['enablecustom404'] = 'Uyarlanmış 404 Mesajını etkinleştir';
$lang['admin']['enablesitedown'] = 'Site &Ccedil;alışmıyor Mesajını Etkinleştir';
$lang['admin']['bookmarks'] = 'Kısayollar';
$lang['admin']['user_created'] = 'Uyarlanmış Kısayollar';
$lang['admin']['forums'] = 'Forumlar';
$lang['admin']['wiki'] = 'Wiki.';
$lang['admin']['irc'] = 'IRC.';
$lang['admin']['module_help'] = 'Eklenti Yardım';
$lang['admin']['managebookmarks'] = 'Kısayolları Y&ouml;net';
$lang['admin']['editbookmark'] = 'Kısayolu D&uuml;zenle';
$lang['admin']['addbookmark'] = 'Kısayol Ekle';
$lang['admin']['recentpages'] = 'Ge&ccedil;miş Sayfalar';
$lang['admin']['groupname'] = 'Grup Adı';
$lang['admin']['selectgroup'] = 'Grup Se&ccedil;';
$lang['admin']['updateperm'] = 'Yetkileri G&uuml;ncelle';
$lang['admin']['admincallout'] = 'Y&ouml;netim Kısayolları';
$lang['admin']['showbookmarks'] = 'Y&ouml;netici Kısayollarını G&ouml;ster';
$lang['admin']['hide_help_links'] = 'Yardım bağlarını gizle';
$lang['admin']['hide_help_links_help'] = 'Wiki ve sayfa başlıklarındaki eklenti yardım bağlarını pasifleştirmek i&ccedil;in bu kutucuğu işaretleyiniz.';
$lang['admin']['showrecent'] = 'Ge&ccedil;mişte kullanılan sayfaları g&ouml;ster';
$lang['admin']['attachtotemplate'] = 'Stilsayfasını şablona bağla';
$lang['admin']['attachstylesheets'] = 'Tasarım şablonlarını bağla';
$lang['admin']['indent'] = 'Hiyerarşiyi vurgulamak i&ccedil;in Sayfa listesini i&ccedil;e kaydır';
$lang['admin']['adminindent'] = 'İ&ccedil;erik G&ouml;sterme';
$lang['admin']['contract'] = 'B&ouml;l&uuml;m&uuml; Daralt';
$lang['admin']['expand'] = 'B&ouml;l&uuml;m&uuml; Genişlet';
$lang['admin']['expandall'] = 'T&uuml;m B&ouml;l&uuml;mleri Genişlet';
$lang['admin']['contractall'] = 'T&uuml;m B&ouml;l&uuml;mleri Daralt';
$lang['admin']['menu_bookmarks'] = '[+].';
$lang['admin']['globalconfig'] = 'Genel Ayarlar';
$lang['admin']['adminpaging'] = 'Sayfa Listesinde sayfada g&ouml;sterilecek i&ccedil;erik &ouml;ğe sayısı';
$lang['admin']['nopaging'] = 'T&uuml;m &Ouml;ğeleri G&ouml;ster';
$lang['admin']['myprefs'] = 'Tercihlerim';
$lang['admin']['myprefsdescription'] = 'Site y&ouml;netim alanının istediğiniz gibi &ccedil;alışmasının uyarlamalarını burada yapabilirsiniz.';
$lang['admin']['myaccount'] = 'Hesabım';
$lang['admin']['myaccountdescription'] = 'Kişisel hesabınızın ayrıntılarını burada d&uuml;zenleyebilirsiniz.';
$lang['admin']['adminprefs'] = 'Kullanıcı Tercihleri';
$lang['admin']['adminprefsdescription'] = 'Site y&ouml;netimi i&ccedil;in kişisel tercihlerinizi burada ayarlayabilirsiniz.';
$lang['admin']['managebookmarksdescription'] = 'Y&ouml;netim kısayollarınızı burada d&uuml;zenleyebilirsiniz.';
$lang['admin']['options'] = 'Se&ccedil;enekler';
$lang['admin']['langparam'] = 'Parametre &ouml;ny&uuml;zde hangi dilin kullanılacağını belirler. Her eklenti bunu desteklemez veya kullanmaz.';
$lang['admin']['parameters'] = 'Parametreler';
$lang['admin']['mediatype'] = 'Ortam Tipi';
$lang['admin']['mediatype_'] = 'Hi&ccedil;biri ayarlanmamış : heryeri etkileyecektir';
$lang['admin']['mediatype_all'] = 'all : T&uuml;m aygıtlar i&ccedil;in uygundur.';
$lang['admin']['mediatype_aural'] = 'işitsel : konuşma analiz makineleri i&ccedil;in';
$lang['admin']['mediatype_braille'] = 'kabartma : kabartma yazı geribildirim cihazları i&ccedil;in';
$lang['admin']['mediatype_embossed'] = 'kabartılmış : kabartma yazı yazıcılarına i&ccedil;in';
$lang['admin']['mediatype_handheld'] = 'avu&ccedil;i&ccedil;i : Avu&ccedil;i&ccedil;i cihazlar i&ccedil;in';
$lang['admin']['mediatype_print'] = '&ccedil;ıktı : Baskı &ouml;nizleme modu (sayfa ya da opak malzeme ve d&ouml;k&uuml;man) i&ccedil;in';
$lang['admin']['mediatype_projection'] = 'projeksiyon : Yansıtılan sunumlar i&ccedil;in, &ouml;rneğin projekt&ouml;r ya da asetat';
$lang['admin']['mediatype_screen'] = 'ekran : &Ouml;ncelikle renkli bilgisayar ekranları i&ccedil;in';
$lang['admin']['mediatype_tty'] = 'tty : İşitme engelliler i&ccedil;in &ouml;zel bir ara&ccedil; olan tty i&ccedil;in';
$lang['admin']['mediatype_tv'] = 'tv : Televizyon-tipli cihazlar i&ccedil;in (işitme engelliler i&ccedil;in i&ccedil;in)';
$lang['admin']['assignmentchanged'] = 'Grup atamaları g&uuml;ncellendi.';
$lang['admin']['stylesheetexists'] = 'Stilsayfası var';
$lang['admin']['errorcopyingstylesheet'] = 'Stilsayfası kopyalama hatası';
$lang['admin']['copystylesheet'] = 'Stilsayfasınu kopyala';
$lang['admin']['newstylesheetname'] = 'Yeni Stilsayfası adı';
$lang['admin']['target'] = 'Hedef';
$lang['admin']['xml'] = 'XML.';
$lang['admin']['xmlmodulerepository'] = 'Mod&uuml;lHavuzu web sunucusunun URL&#039;i';
$lang['admin']['metadata'] = 'Metadata (bilgi hakkında bilgi)';
$lang['admin']['globalmetadata'] = 'Evrensel Metadata';
$lang['admin']['titleattribute'] = 'A&ccedil;ıklama (başlık &ouml;zelliği)';
$lang['admin']['tabindex'] = 'Sekme Dizini';
$lang['admin']['accesskey'] = 'Ulaşım Tuşu';
$lang['admin']['sitedownwarning'] = '<strong>Uyarı:</strong> Siteniz şu anda &quot;Site bakım nedeniyle &ccedil;alışmıyor&quot; mesajı g&ouml;steriyor.  Bunu &ccedil;&ouml;zmek i&ccedil;in %s dosyasını siliniz.';
$lang['admin']['deletecontent'] = 'İ&ccedil;eriği Sil';
$lang['admin']['deletepages'] = 'Bu sayfalar silinsin mi?';
$lang['admin']['selectall'] = 'T&uuml;m&uuml;n&uuml; Se&ccedil;';
$lang['admin']['selecteditems'] = 'Se&ccedil;ilenle';
$lang['admin']['inactive'] = 'Pasif';
$lang['admin']['deletetemplates'] = 'Şablonları Sil';
$lang['admin']['templatestodelete'] = 'Bu şablonlar silinecek';
$lang['admin']['wontdeletetemplateinuse'] = 'Bu şablonlar kullanıldığı i&ccedil;in silinmeyecek';
$lang['admin']['deletetemplate'] = 'Tasarım şablonlarını sil';
$lang['admin']['stylesheetstodelete'] = 'Bu tasarım şablonları silinecek';
$lang['admin']['sitename'] = 'Site Adı';
$lang['admin']['siteadmin'] = 'Site Y&ouml;neticisi';
$lang['admin']['images'] = 'Resim Y&ouml;neticisi';
$lang['admin']['blobs'] = 'Genel İ&ccedil;erik &Ouml;bekleri';
$lang['admin']['groupmembers'] = 'Grup Atamaları';
$lang['admin']['troubleshooting'] = '(Sorun giderme)';
$lang['admin']['event_desc_loginpost'] = 'Kullanıcı y&ouml;netim paneline girdikten sonra g&ouml;nderildi';
$lang['admin']['event_desc_logoutpost'] = 'Kullanıcı y&ouml;netim panelinden &ccedil;ıktıktan sonra g&ouml;nderildi';
$lang['admin']['event_desc_adduserpre'] = 'Yeni kullanıcı yaratılmadan &ouml;nce g&ouml;nderildi';
$lang['admin']['event_desc_adduserpost'] = 'Yeni kullanıcı yaratıldıktan sonra g&ouml;nderildi';
$lang['admin']['event_desc_edituserpre'] = 'Kullanıcıdaki değişiklikler kaydedilmeden &ouml;nce g&ouml;nderildi';
$lang['admin']['event_desc_edituserpost'] = 'Kullanıcıdaki değişiklikler kaydedildikten sonra g&ouml;nderildi';
$lang['admin']['event_desc_deleteuserpre'] = 'Kullanıcı sistemden silinmeden &ouml;nce g&ouml;nderildi';
$lang['admin']['event_desc_deleteuserpost'] = 'Kullanıcı sistemden silindikten sonra g&ouml;nderildi';
$lang['admin']['event_desc_addgrouppre'] = 'Yeni grup yaratılmadan &ouml;nce g&ouml;nderildi';
$lang['admin']['event_desc_addgrouppost'] = 'Yeni grup yaratıldıktan sonra g&ouml;nderildi';
$lang['admin']['event_desc_changegroupassignpre'] = 'Grup atamalarından &ouml;nce kaydedilmiş';
$lang['admin']['event_desc_changegroupassignpost'] = 'Grup atamalarından sonra kaydedilmiş';
$lang['admin']['event_desc_editgrouppre'] = 'Gruptaki değişiklikler kaydedilmeden &ouml;nce g&ouml;nderildi';
$lang['admin']['event_desc_editgrouppost'] = 'Gruptaki değişiklikler kaydedildikten sonra g&ouml;nderildi';
$lang['admin']['event_desc_deletegrouppre'] = 'Grup sistemden silinmeden &ouml;nce g&ouml;nderildi';
$lang['admin']['event_desc_deletegrouppost'] = 'Grup sistemden silindikten sonra g&ouml;nderildi';
$lang['admin']['event_desc_addstylesheetpre'] = 'Yeni Stilsayfası yaratılmadan &ouml;nce g&ouml;nderildi';
$lang['admin']['event_desc_addstylesheetpost'] = 'Yeni Stilsayfası yaratıldıktan sonra g&ouml;nderildi';
$lang['admin']['event_desc_editstylesheetpre'] = 'Stilsayfasındaki değişiklikler kaydedilmeden &ouml;nce g&ouml;nderildi';
$lang['admin']['event_desc_editstylesheetpost'] = 'Stilsayfasındaki değişiklikler kaydedildikten sonra g&ouml;nderildi';
$lang['admin']['event_desc_deletestylesheetpre'] = 'Stilsayfası sistemden silinmeden &ouml;nce g&ouml;nderildi';
$lang['admin']['event_desc_deletestylesheetpost'] = 'Stilsayfası sistemden silindikten sonra g&ouml;nderildi';
$lang['admin']['event_desc_addtemplatepre'] = 'Yeni şablon yaratılmadan &ouml;nce g&ouml;nderildi';
$lang['admin']['event_desc_addtemplatepost'] = 'Yeni şablon yaratıldıktan sonra g&ouml;nderildi';
$lang['admin']['event_desc_edittemplatepre'] = 'Şablondaki değişiklikler kaydedilmeden &ouml;nce g&ouml;nderildi';
$lang['admin']['event_desc_edittemplatepost'] = 'Şablondaki değişiklikler kaydedildikten sonra g&ouml;nderildi';
$lang['admin']['event_desc_deletetemplatepre'] = 'Şablon sistemden silinmeden &ouml;nce g&ouml;nderildi';
$lang['admin']['event_desc_deletetemplatepost'] = 'Şablon sistemden silindikten sonra g&ouml;nderildi';
$lang['admin']['event_desc_templateprecompile'] = 'Şablon smarty&#039;ye işlenmek &uuml;zere g&ouml;nderilmeden &ouml;nce g&ouml;nderildi';
$lang['admin']['event_desc_templatepostcompile'] = 'Şablon smarty tarafından işlendikten sonra g&ouml;nderildi';
$lang['admin']['event_desc_addglobalcontentpre'] = 'Yeni bir genel i&ccedil;erik &ouml;beği yaratılmadan &ouml;nce g&ouml;nderildi';
$lang['admin']['event_desc_addglobalcontentpost'] = 'Yeni genel i&ccedil;erik &ouml;beği yaratıldıktan sonra g&ouml;nderildi';
$lang['admin']['event_desc_editglobalcontentpre'] = 'Genel i&ccedil;erik &ouml;beğindeki değişiklikler kaydedilmeden &ouml;nce g&ouml;nderildi';
$lang['admin']['event_desc_editglobalcontentpost'] = 'Genel i&ccedil;erik &ouml;beğindeki değişiklikler kaydedildikten sonra g&ouml;nderildi';
$lang['admin']['event_desc_deleteglobalcontentpre'] = 'Genel i&ccedil;erik &ouml;beği sistemden silinmeden &ouml;nce g&ouml;nderildi';
$lang['admin']['event_desc_deleteglobalcontentpost'] = 'Genel i&ccedil;erik &ouml;beği sistemden silindikten sonra g&ouml;nderildi';
$lang['admin']['event_desc_globalcontentprecompile'] = 'Genel i&ccedil;erik &ouml;beği smarty&#039;ye işlenmek &uuml;zere g&ouml;nderilmeden &ouml;nce g&ouml;nderildi';
$lang['admin']['event_desc_globalcontentpostcompile'] = 'Genel i&ccedil;erik &ouml;beği smarty tarafından işlendikten sonra g&ouml;nderildi';
$lang['admin']['event_desc_contenteditpre'] = 'İ&ccedil;erikteki değişiklikler kaydedilmeden &ouml;nce g&ouml;nderildi';
$lang['admin']['event_desc_contenteditpost'] = 'İ&ccedil;erikteki değişiklikler kaydedildikten sonra g&ouml;nderildi';
$lang['admin']['event_desc_contentdeletepre'] = 'İ&ccedil;erik sistemden silinmeden &ouml;nce g&ouml;nderildi';
$lang['admin']['event_desc_contentdeletepost'] = 'İ&ccedil;erik sistemden silindikten sonra g&ouml;nderildi';
$lang['admin']['event_desc_contentstylesheet'] = 'Stilsayfası gezgine g&ouml;nderilmeden &ouml;nce g&ouml;nderildi';
$lang['admin']['event_desc_contentprecompile'] = 'İ&ccedil;erik smarty&#039;ye işlenmek &uuml;zere g&ouml;nderilmeden &ouml;nce g&ouml;nderildi';
$lang['admin']['event_desc_contentpostcompile'] = 'İ&ccedil;erik smarty tarafından işlendikten sonra g&ouml;nderildi';
$lang['admin']['event_desc_contentpostrender'] = 'Birleştirilmiş html gezgine g&ouml;nderilmeden &ouml;nce g&ouml;nderildi';
$lang['admin']['event_desc_smartyprecompile'] = 'Smarty i&ccedil;in ayrılmış i&ccedil;erik işlenmek &uuml;zere g&ouml;nderilmeden &ouml;nce g&ouml;nderildi';
$lang['admin']['event_desc_smartypostcompile'] = 'Smarty i&ccedil;in ayrılmış i&ccedil;erik işlendikten sonra g&ouml;nderildi';
$lang['admin']['event_help_loginpost'] = '<p>Kullanıcı y&ouml;netim paneline girdikten sonra g&ouml;nderildi.</p>
<h4>Parametreler</h4>
<ul>
<li>&#039;user&#039; - Etkilenen kullanıcı nesnesine ilgi.</li>
</ul>
';
$lang['admin']['event_help_logoutpost'] = '<p>Kullanıcı y&ouml;netim panelinden &ccedil;ıktıktan sonra g&ouml;nderildi.</p>
<h4>Parametreler</h4>
<ul>
<li>&#039;user&#039; - Etkilenen kullanıcı nesnesine ilgi.</li>
</ul>
';
$lang['admin']['event_help_adduserpre'] = '<p>Yeni kullanıcı yaratılmadan &ouml;nce g&ouml;nderildi.</p>
<h4>Parametreler</h4>
<ul>
<li>&#039;user&#039; - Etkilenen kullanıcı nesnesine ilgi.</li>
</ul>
';
$lang['admin']['event_help_adduserpost'] = '<p>Yeni kullanıcı yaratıldıktan sonra g&ouml;nderildi.</p>
<h4>Parametreler</h4>
<ul>
<li>&#039;user&#039; - Etkilenen kullanıcı nesnesine ilgi.</li>
</ul>
';
$lang['admin']['event_help_edituserpre'] = '<p>Kullanıcıdaki değişiklikler kaydedilmeden &ouml;nce g&ouml;nderildi.</p>
<h4>Parametreler</h4>
<ul>
<li>&#039;user&#039; - Etkilenen kullanıcı nesnesine ilgi.</li>
</ul>
';
$lang['admin']['event_help_edituserpost'] = '<p>Kullanıcıdaki değişiklikler kaydedildikten sonra g&ouml;nderildi.</p>
<h4>Parametreler</h4>
<ul>
<li>&#039;user&#039; - Etkilenen kullanıcı nesnesine ilgi.</li>
</ul>
';
$lang['admin']['event_help_deleteuserpre'] = '<p>Kullanıcı sistemden silinmeden &ouml;nce g&ouml;nderildi.</p>
<h4>Parametreler</h4>
<ul>
<li>&#039;user&#039; - Etkilenen kullanıcı nesnesine ilgi.</li>
</ul>
';
$lang['admin']['event_help_deleteuserpost'] = '<p>Kullanıcı sistemden silindikten sonra g&ouml;nderildi.</p>
<h4>Parametreler</h4>
<ul>
<li>&#039;user&#039; - Etkilenen kullanıcı nesnesine ilgi.</li>
</ul>
';
$lang['admin']['event_help_addgrouppre'] = '<p>Yeni grup yaratılmadan &ouml;nce g&ouml;nderildi.</p>
<h4>Parametreler</h4>
<ul>
<li>&#039;group&#039; - Etkilenen grup nesnesine ilgi.</li>
</ul>
';
$lang['admin']['event_help_addgrouppost'] = '<p>Yeni grup yaratıldıktan sonra g&ouml;nderildi.</p>
<h4>Parametreler</h4>
<ul>
<li>&#039;group&#039; - Etkilenen grup nesnesine ilgi.</li>
</ul>
';
$lang['admin']['event_help_changegroupassignpre'] = '<p>Sent before group assignments are saved.</p>
<h4>Parameters></h4>
<ul>
<li>&#039;group&#039; - Reference to the group object.</li>
<li>&#039;users&#039; - Array of references to user objects belonging to the group.</li>
';
$lang['admin']['event_help_changegroupassignpost'] = '<p>Sent after group assignments are saved.</p>
<h4>Parameters></h4>
<ul>
<li>&#039;group&#039; - Reference to the affected group object.</li>
<li>&#039;users&#039; - Array of references to user objects now belonging to the affected group.</li>
';
$lang['admin']['event_help_editgrouppre'] = '<p>Gruptaki değişiklikler kaydedilmeden &ouml;nce g&ouml;nderildi.</p>
<h4>Parametreler</h4>
<ul>
<li>&#039;group&#039; - Etkilenen grup nesnesine ilgi.</li>
</ul>
';
$lang['admin']['event_help_editgrouppost'] = '<p>Sent after edits to a group are saved.</p>
<h4>Parametreler</h4>
<ul>
<li>&#039;group&#039; - Etkilenen grup nesnesine ilgi.</li>
</ul>
';
$lang['admin']['event_help_deletegrouppre'] = '<p>Grup sistemden silinmeden &ouml;nce g&ouml;nderildi.</p>
<h4>Parametreler</h4>
<ul>
<li>&#039;group&#039; - Etkilenen grup nesnesine ilgi.</li>
</ul>
';
$lang['admin']['event_help_deletegrouppost'] = '<p>Grup sistemden silindikten sonra g&ouml;nderildi.</p>
<h4>Parametreler</h4>
<ul>
<li>&#039;group&#039; - Etkilenen grup nesnesine ilgi.</li>
</ul>
';
$lang['admin']['event_help_addstylesheetpre'] = '<p>Yeni Stilsayfası yaratılmadan &ouml;nce g&ouml;nderildi.</p>
<h4>Parametreler</h4>
<ul>
<li>&#039;stylesheet&#039; - Etkilenen Stilsayfası nesnesine ilgi.</li>
</ul>
';
$lang['admin']['event_help_addstylesheetpost'] = '<p>Yeni Stilsayfası yaratıldıktan sonra g&ouml;nderildi.</p>
<h4>Parametreler</h4>
<ul>
<li>&#039;stylesheet&#039; - Etkilenen Stilsayfası nesnesine ilgi.</li>
</ul>
';
$lang['admin']['event_help_editstylesheetpre'] = '<p>Stilsayfasındaki değişiklikler kaydedilmeden &ouml;nce g&ouml;nderildi.</p>
<h4>Parametreler</h4>
<ul>
<li>&#039;stylesheet&#039; - Etkilenen Stilsayfası nesnesine ilgi.</li>
</ul>
';
$lang['admin']['event_help_editstylesheetpost'] = '<p>Stilsayfasındaki değişiklikler kaydedildikten sonra g&ouml;nderildi.</p>
<h4>Parametreler</h4>
<ul>
<li>&#039;stylesheet&#039; - Etkilenen Stilsayfası nesnesine ilgi.</li>
</ul>
';
$lang['admin']['event_help_deletestylesheetpre'] = '<p>Stilsayfası sistemden silinmeden &ouml;nce g&ouml;nderildi.</p>
<h4>Parametreler</h4>
<ul>
<li>&#039;stylesheet&#039; - Etkilenen Stilsayfası nesnesine ilgi.</li>
</ul>
';
$lang['admin']['event_help_deletestylesheetpost'] = '<p>Stilsayfası sistemden silindikten sonra g&ouml;nderildi.</p>
<h4>Parametreler</h4>
<ul>
<li>&#039;stylesheet&#039; - Etkilenen Stilsayfası nesnesine ilgi.</li>
</ul>
';
$lang['admin']['event_help_addtemplatepre'] = '<p>Yeni şablon yaratılmadan &ouml;nce g&ouml;nderildi.</p>
<h4>Parametreler</h4>
<ul>
<li>&#039;template&#039; - Etkilenen şablon nesnesine ilgi.</li>
</ul>
';
$lang['admin']['event_help_addtemplatepost'] = '<p>Yeni şablon yaratıldıktan sonra g&ouml;nderildi.</p>
<h4>Parametreler</h4>
<ul>
<li>&#039;template&#039; - Etkilenen şablon nesnesine ilgi.</li>
</ul>
';
$lang['admin']['event_help_edittemplatepre'] = '<p>Şablondaki değişiklikler kaydedilmeden &ouml;nce g&ouml;nderildi.</p>
<h4>Parametreler</h4>
<ul>
<li>&#039;template&#039; - Etkilenen şablon nesnesine ilgi.</li>
</ul>
';
$lang['admin']['event_help_edittemplatepost'] = '<p>Şablondaki değişiklikler kaydedildikten sonra g&ouml;nderildi.</p>
<h4>Parametreler</h4>
<ul>
<li>&#039;template&#039; - Etkilenen şablon nesnesine ilgi.</li>
</ul>
';
$lang['admin']['event_help_deletetemplatepre'] = '<p>Şablon sistemden silinmeden &ouml;nce g&ouml;nderildi.</p>
<h4>Parametreler</h4>
<ul>
<li>&#039;template&#039; - Etkilenen şablon nesnesine ilgi.</li>
</ul>
';
$lang['admin']['event_help_deletetemplatepost'] = '<p>Şablon sistemden silindikten sonra g&ouml;nderildi.</p>
<h4>Parametreler</h4>
<ul>
<li>&#039;template&#039; - Etkilenen şablon nesnesine ilgi.</li>
</ul>
';
$lang['admin']['event_help_templateprecompile'] = '<p>Şablon smarty&#039;ye işlenmek &uuml;zere g&ouml;nderilmeden &ouml;nce g&ouml;nderildi.</p>
<h4>Parametreler</h4>
<ul>
<li>&#039;template&#039; - Etkilenen şablon metnine ilgi.</li>
</ul>
';
$lang['admin']['event_help_templatepostcompile'] = '<p>Şablon smarty tarafından işlendikten sonra g&ouml;nderildi.</p>
<h4>Parametreler</h4>
<ul>
<li>&#039;template&#039; - Etkilenen şablon metnine ilgi.</li>
</ul>
';
$lang['admin']['event_help_addglobalcontentpre'] = '<p>Yeni bir genel i&ccedil;erik &ouml;beği yaratılmadan &ouml;nce g&ouml;nderildi.</p>
<h4>Parametreler</h4>
<ul>
<li>&#039;global_content&#039; - Etkilenen genel i&ccedil;erik &ouml;beği nesnesine ilgi.</li>
</ul>
';
$lang['admin']['event_help_addglobalcontentpost'] = '<p>Yeni genel i&ccedil;erik &ouml;beği yaratıldıktan sonra g&ouml;nderildi.</p>
<h4>Parametreler</h4>
<ul>
<li>&#039;global_content&#039; - Etkilenen genel i&ccedil;erik &ouml;beği nesnesine ilgi.</li>
</ul>
';
$lang['admin']['event_help_editglobalcontentpre'] = '<p>Genel i&ccedil;erik &ouml;beğindeki değişiklikler kaydedilmeden &ouml;nce g&ouml;nderildi.</p>
<h4>Parametreler</h4>
<ul>
<li>&#039;global_content&#039; - Etkilenen genel i&ccedil;erik &ouml;beği nesnesine ilgi.</li>
</ul>
';
$lang['admin']['event_help_editglobalcontentpost'] = '<p>Genel i&ccedil;erik &ouml;beğindeki değişiklikler kaydedildikten sonra g&ouml;nderildi.</p>
<h4>Parametreler</h4>
<ul>
<li>&#039;global_content&#039; - Etkilenen genel i&ccedil;erik &ouml;beği nesnesine ilgi.</li>
</ul>
';
$lang['admin']['event_help_deleteglobalcontentpre'] = '<p>Genel i&ccedil;erik &ouml;beği sistemden silinmeden &ouml;nce g&ouml;nderildi.</p>
<h4>Parametreler</h4>
<ul>
<li>&#039;global_content&#039; - Etkilenen genel i&ccedil;erik &ouml;beği nesnesine ilgi.</li>
</ul>
';
$lang['admin']['event_help_deleteglobalcontentpost'] = '<p>Genel i&ccedil;erik &ouml;beği sistemden silindikten sonra g&ouml;nderildi.</p>
<h4>Parametreler</h4>
<ul>
<li>&#039;global_content&#039; - Etkilenen genel i&ccedil;erik &ouml;beği nesnesine ilgi.</li>
</ul>
';
$lang['admin']['event_help_globalcontentprecompile'] = '<p>Genel i&ccedil;erik &ouml;beği smarty&#039;ye işlenmek &uuml;zere g&ouml;nderilmeden &ouml;nce g&ouml;nderildi.</p>
<h4>Parametreler</h4>
<ul>
<li>&#039;global_content&#039; - Etkilenen genel i&ccedil;erik &ouml;beği metnine ilgi.</li>
</ul>
';
$lang['admin']['event_help_globalcontentpostcompile'] = '<p>Genel i&ccedil;erik &ouml;beği smarty tarafından işlendikten sonra g&ouml;nderildi.</p>
<h4>Parametreler</h4>
<ul>
<li>&#039;global_content&#039; - Etkilenen genel i&ccedil;erik &ouml;beği metnine ilgi.</li>
</ul>
';
$lang['admin']['event_help_contenteditpre'] = '<p>İ&ccedil;erikteki değişiklikler kaydedilmeden &ouml;nce g&ouml;nderildi.</p>
<h4>Parametreler</h4>
<ul>
<li>&#039;global_content&#039; - Etkilenen i&ccedil;erik nesnesine ilgi.</li>
</ul>
';
$lang['admin']['event_help_contenteditpost'] = '<p>İ&ccedil;erikteki değişiklikler kaydedildikten sonra g&ouml;nderildi.</p>
<h4>Parametreler</h4>
<ul>
<li>&#039;content&#039; - Etkilenen i&ccedil;erik nesnesine ilgi.</li>
</ul>
';
$lang['admin']['event_help_contentdeletepre'] = '<p>İ&ccedil;erik sistemden silinmeden &ouml;nce g&ouml;nderildi.</p>
<h4>Parametreler</h4>
<ul>
<li>&#039;content&#039; - Etkilenen i&ccedil;erik nesnesine ilgi.</li>
</ul>
';
$lang['admin']['event_help_contentdeletepost'] = '<p>İ&ccedil;erik sistemden silindikten sonra g&ouml;nderildi.</p>
<h4>Parametreler</h4>
<ul>
<li>&#039;content&#039; - Etkilenen i&ccedil;erik nesnesine ilgi.</li>
</ul>
';
$lang['admin']['event_help_contentstylesheet'] = '<p>Stilsayfası gezgine g&ouml;nderilmeden &ouml;nce g&ouml;nderildi.</p>
<h4>Parametreler</h4>
<ul>
<li>&#039;content&#039; - Etkilenen Stilsayfası metnine ilgi.</li>
</ul>
';
$lang['admin']['event_help_contentprecompile'] = '<p>İ&ccedil;erik smarty&#039;ye işlenmek &uuml;zere g&ouml;nderilmeden &ouml;nce g&ouml;nderildi.</p>
<h4>Parametreler</h4>
<ul>
<li>&#039;content&#039; - Etkilenen i&ccedil;erik metnine ilgi.</li>
</ul>
';
$lang['admin']['event_help_contentpostcompile'] = '<p>İ&ccedil;erik smarty tarafından işlendikten sonra g&ouml;nderildi.</p>
<h4>Parametreler</h4>
<ul>
<li>&#039;content&#039; - Etkilenen i&ccedil;erik metnine ilgi.</li>
</ul>
';
$lang['admin']['event_help_contentpostrender'] = '<p>Birleştirilmiş html gezgine g&ouml;nderilmeden &ouml;nce g&ouml;nderildi.</p>
<h4>Parametreler</h4>
<ul>
<li>&#039;content&#039; - Html metnine ilgi.</li>
</ul>
';
$lang['admin']['event_help_smartyprecompile'] = '<p>Smarty i&ccedil;in ayrılmış i&ccedil;erik işlenmek &uuml;zere g&ouml;nderilmeden &ouml;nce g&ouml;nderildi.</p>
<h4>Parametreler</h4>
<ul>
<li>&#039;content&#039; - Etkilenen metne ilgi.</li>
</ul>
';
$lang['admin']['event_help_smartypostcompile'] = '<p>Smarty i&ccedil;in ayrılmış i&ccedil;erik işlendikten sonra g&ouml;nderildi.</p>
<h4>Parametreler</h4>
<ul>
<li>&#039;content&#039; - Etkilenen metne ilgi.</li>
</ul>
';
$lang['admin']['filterbymodule'] = 'Eklentiye g&ouml;re s&uuml;z';
$lang['admin']['showall'] = 'T&uuml;m&uuml;n&uuml; G&ouml;ster';
$lang['admin']['core'] = '&Ccedil;ekirdek';
$lang['admin']['defaultpagecontent'] = '&Ouml;ntanımlı Sayfa İ&ccedil;eriği';
$lang['admin']['file_url'] = 'Dosyaya kısayol (URL yerine)';
$lang['admin']['no_file_url'] = 'Hi&ccedil;biri (Yukarıdaki URL&#039;i kullan)';
$lang['admin']['defaultparentpage'] = '&Ouml;ntanımlı &Uuml;st Sayfa';
$lang['admin']['error_udt_name_whitespace'] = 'Hata: Kullanıcı Tanımlı Etiketler isimlerinde boşluk bulunduramazlar.';
$lang['admin']['warning_safe_mode'] = '<strong><em>WARNING:</em></strong> PHP G&uuml;venli modu aktive edildi.  Bu durum web tarayıcıyla y&uuml;klenen, resim, tema ve XML mod&uuml;l paketlerini de i&ccedil;eren bazı belgelerde g&uuml;&ccedil;l&uuml;klere sebep olacaktır. Site y&ouml;neticinizle g&uuml;venli modu kapaması konusunda g&ouml;r&uuml;şmeniz &ouml;nerilmektedir.';
$lang['admin']['test'] = 'Deneme';
$lang['admin']['results'] = 'Sonu&ccedil;lar';
$lang['admin']['untested'] = 'Denenmemiş';
$lang['admin']['unknown'] = 'Bilinmeyen';
$lang['admin']['download'] = 'İndir';
$lang['admin']['frontendwysiwygtouse'] = '&Ouml;n u&ccedil; wysiwyg';
$lang['admin']['all_groups'] = 'T&uuml;m Gruplar';
$lang['admin']['error_type'] = 'Hata Tipi';
$lang['admin']['contenttype_errorpage'] = 'Hata Sayfası';
$lang['admin']['errorpagealreadyinuse'] = 'Hata kodu Zaten Kullanımda';
$lang['admin']['404description'] = 'Sayfa Bulunamadı';
$lang['admin']['usernotfound'] = 'Kullanıcı Bulunamadı';
$lang['admin']['passwordchange'] = 'L&uuml;tfen yeni şifre veriniz';
$lang['admin']['recoveryemailsent'] = 'Email kayıtlı adrese g&ouml;nderildi. L&uuml;tfen g&ouml;nderilen a&ccedil;ıklamalar i&ccedil;in gelen kutusunu kontrol ediniz.';
$lang['admin']['errorsendingemail'] = 'Email g&ouml;nderiminde hata oluştu. Y&ouml;netici ile iletişime ge&ccedil;iniz.';
$lang['admin']['passwordchangedlogin'] = 'Şifre değiştirildi.  L&uuml;tfen yeni bilgiler ile giriş yapınız.';
$lang['admin']['nopasswordforrecovery'] = 'Bu kullanıcı ile ilgili mail adresi tanımlanmamış.  Şifre geri alma işlemi m&uuml;mk&uuml;n değil.  Y&ouml;netici ile iletişime ge&ccedil;iniz.';
$lang['admin']['lostpw'] = 'Şifrenizi mi Unuttunuz?';
$lang['admin']['lostpwemailsubject'] = '[%s] Şifre Geri Alma';
$lang['admin']['lostpwemail'] = 'You are recieving this e-mail because a request has been made to change the (%s) password associated with this user account (%s).  If you would like to reset the password for this account simply click on the link below or paste it into the url field on your favorite browser:
%s

If you feel this is incorrect or made in error, simply ignore the email and nothing will change.';
$lang['admin']['utma'] = '156861353.1664897565.1272759163.1277761254.1277765691.32';
$lang['admin']['utmz'] = '156861353.1277765691.32.5.utmccn=(referral)|utmcsr=dev.cmsmadesimple.org|utmcct=/project/files/250|utmcmd=referral';
$lang['admin']['qca'] = 'P0-1960756361-1272759163370';
$lang['admin']['utmc'] = '156861353';
$lang['admin']['utmb'] = '156861353';
?>