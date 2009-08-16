<?php
$lang['admin']['invalidemail'] = '無効なメールアドレスが入力されました。';
$lang['admin']['info_deletepages'] = '注意: パーミッションの問題ため、選択した削除ページが以下に記載されていないかもしれません。';
$lang['admin']['info_pagealias'] = 'ページ名が重複しています。ユニークな別名にしてください。';
$lang['admin']['info_autoalias'] = '項目名が空の場合、自動的に作成されます。';
$lang['admin']['invalidparent'] = '親ページを選択してください。(このオプションを無効にしたい場合、管理者に連絡してください)';
$lang['admin']['forgotpwprompt'] = '管理者のユーザ名を入力してください。新しいログイン情報でそのユーザ名に関連しているメールアドレスにメールを送ります。';
$lang['admin']['info_basic_attributes'] = 'この項目で、「すべての内容を管理してください」という許可のないユーザが編集できるどの満たしている特性かを指定できます。';
$lang['admin']['basic_attributes'] = '基本属性';
$lang['admin']['no_permission'] = 'その機能を実行する権限がありません。';
$lang['admin']['bulk_success'] = 'すべての大量の操作をアップデートしました。';
$lang['admin']['no_bulk_performed'] = 'すべての大量の処理が働きませんでした。';
$lang['admin']['info_preview_notice'] = 'Warning: This preview panel behaves much like a browser window allowing you to navigate away from the initially previewed page. However, if you do that, you may experience unexpected behaviour. If you navigate away from the initial display and return, you may not see the un-committed content until you make a change to the content in the main tab, and then reload this tab. When adding content, if you navigate away from this page, you will be unable to return, and must refresh this panel.';
$lang['admin']['sitedownexcludes'] = 'Exclude these Addresses from Sitedown Messages';
$lang['admin']['info_sitedownexcludes'] = 'This parameter allows listing a comma separated list of ip addresses or networks that should not be subject to the sitedown mechanism.  This allows administrators to work on a site whilst anonymous visitors receive a sitedown message.<br/><br/>Addresses can be specified in the following formats:<br/>
1. xxx.xxx.xxx.xxx -- (exact IP address)<br/>
2. xxx.xxx.xxx.[yyy-zzz] -- (IP address range)<br/>
3. xxx.xxx.xxx.xxx/nn -- (nnn = number of bits, cisco style.  i.e:  192.168.0.100/24 = entire 192.168.0 class C subnet)';
$lang['admin']['setup'] = 'Advanced Setup';
$lang['admin']['handle_404'] = 'Custom 404 Handling';
$lang['admin']['sitedown_settings'] = 'Sitedown Settings';
$lang['admin']['general_settings'] = 'General Settings';
$lang['admin']['help_function_page_attr'] = '<h3>What does this do?</h3>
<p>This tag can be used to return the value of the attributes of a certain page.</p>
<h3>How do I use it?</h3>
<p>Insert the tag into the template like: <code>{page_attr key="extra1"}</code>.</p>
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
$lang['admin']['destinationnotfound'] = 'The selected page could not be found or is invalid';
$lang['admin']['help_function_dump'] = '<h3>What does this do?</h3>
  <p>This tag can be used to dump the contents of any smarty variable in a more readable format.  This is useful for debugging, and editing templates, to know the format and types of data available.</p>
<h3>How do I use it?</h3>
<p>Insert the tag in the template like <code>{dump item=\'the_smarty_variable_to_dump\'}</code>.</p>
<h3>What parameters does it take?</h3>
<ul>
<li><strong>item (required)</strong> - The smarty variable to dump the contents of.</li>
<li>maxlevel - The maximum number of levels to recurse (applicable only if recurse is also supplied.  The default value for this parameter is 3</li>
<li>nomethods - Skip output of methods from objects.</li>
<li>novars - Skip output of object members.</li>
<li>recurse - Recurse a maximum number of levels through the objects providing verbose output for each item until the maximum number of levels is reached.</li>
</ul>';
$lang['admin']['sqlerror'] = 'SQL error in %s';
$lang['admin']['image'] = '画像';
$lang['admin']['thumbnail'] = 'Thumbnail';
$lang['admin']['searchable'] = 'This page is searchable';
$lang['admin']['help_function_content_image'] = '<h3>What does this do?</h3>
<p>This plugin allows template designers to prompt users to select an image file when editing the content of a page. It behaves similarly to the content plugin, for additional content blocks.</p>
<h3>How do I use it?</h3>
<p>Just insert the tag into your page template like: <code>{content_image block=\'image1\'}</code>.</p>
<h3>What parameters does it take?</h3>
<ul>
  <li><strong>(required)</strong> block - The name for this additional content block.
  <p>Example:</p>
  <pre>{content_image block=\'image1\'}</pre><br/>
  </li>

  <li><em>(optional)</em> label - A label or prompt for this content block in the edit content page.  If not specified, the block name will be used.</li>
 
  <li><em>(optional)</em> dir - The name of a directory (relative to the uploads directory, from which to select image files. If not specified, the uploads directory will be used.
  <p>Example: use images from the uploads/image directory.</p>
  <pre>{content_image block=\'image1\' dir=\'images\'}</pre><br/>
  </li>

  <li><em>(optional)</em> class - The css class name to use on the img tag in frontend display.</li>

  <li><em>(optional)</em> id - The id name to use on the img tag in frontend display.</li> 

  <li><em>(optional)</em> name - The tag name to use on the img tag in frontend display.</li> 

  <li><em>(optional)</em> width - The desired width of the image.</li>

  <li><em>(optional)</em> height - The desired height of the image.</li>

  <li><em>(optional)</em> alt - Alternative text if the image cannot be found.</li>
  <li><em>(optional)</em> urlonly - output only the url to the image, ignoring all parameters like id, name, width, height, etc.</li>
</ul>';
$lang['admin']['error_udt_name_chars'] = 'A valid UDT name starts with a letter or underscore, followed by any number of letters, numbers, or underscores.';
$lang['admin']['errorupdatetemplateallpages'] = 'Template is not active';
$lang['admin']['hidefrommenu'] = 'Hide From Menu';
$lang['admin']['settemplate'] = 'Set Template';
$lang['admin']['text_settemplate'] = 'Set Selected Pages to a different Template';
$lang['admin']['cachable'] = 'キャッシュの利用';
$lang['admin']['noncachable'] = 'Non Cachable';
$lang['admin']['copy_from'] = 'Copy From';
$lang['admin']['copy_to'] = 'Copy To';
$lang['admin']['copycontent'] = 'Copy Content Item';
$lang['admin']['md5_function'] = 'md5 function';
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
$lang['admin']['file_uploads'] = 'ファイルアップロード';
$lang['admin']['test_remote_url'] = 'Test for remote URL';
$lang['admin']['test_remote_url_failed'] = 'You will probably not be able to open a file on a remote web server.';
$lang['admin']['test_allow_url_fopen_failed'] = 'When allow url fopen is disabled you will not be able to accessing URL object like file using the ftp or http protocol.';
$lang['admin']['connection_error'] = 'Outgoing http connections do not appear to work! There is a firewall or some ACL for external connections?. This will result in module manager, and potentially other functionality failing.';
$lang['admin']['remote_connection_timeout'] = 'コネクションタイムアウト';
$lang['admin']['search_string_find'] = 'コネクションOK！';
$lang['admin']['connection_failed'] = 'コネクション失敗！';
$lang['admin']['remote_response_ok'] = 'リモートレスポンス: ok!';
$lang['admin']['remote_response_404'] = 'リモートレスポンス: 存在しない';
$lang['admin']['remote_response_error'] = 'リモートレスポンス: エラー！';
$lang['admin']['notifications_to_handle'] = 'You have <b>%d</b> unhandled notifications';
$lang['admin']['notification_to_handle'] = 'You have <b>%d</b> unhandled notification';
$lang['admin']['notifications'] = '通知';
$lang['admin']['dashboard'] = 'ダッシュボードをみる';
$lang['admin']['ignorenotificationsfrommodules'] = 'Ignore notifications from these modules';
$lang['admin']['admin_enablenotifications'] = 'Allow users to view notifications<br/><em>(notifications will be displayed on all admin pages)</em>';
$lang['admin']['enablenotifications'] = 'Enable user notifications in the admin section';
$lang['admin']['test_check_open_basedir_failed'] = 'Open basedir restrictions are in effect. You may have difficulty with some addon functionality with this restriction';
$lang['admin']['config_writable'] = 'config.php writable. It is more safe if you change permission to read-only';
$lang['admin']['caution'] = '警告';
$lang['admin']['create_dir_and_file'] = 'Checking if the httpd process can create a file inside of a directory it created';
$lang['admin']['os_session_save_path'] = 'No check because OS path';
$lang['admin']['unlimited'] = '上限なし';
$lang['admin']['open_basedir'] = 'PHP Open Basedir';
$lang['admin']['open_basedir_active'] = 'No check because open basedir active';
$lang['admin']['invalid'] = '無効';
$lang['admin']['checksum_passed'] = 'All checksums match those in the uploaded file';
$lang['admin']['error_retrieving_file_list'] = 'Error retrieving file list';
$lang['admin']['files_checksum_failed'] = 'Files could not be checksummed';
$lang['admin']['failure'] = '失敗';
$lang['admin']['help_function_process_pagedata'] = '<h3>What does this do?</h3>
<p>This plugin will process the data in the "pagedata" block of content pages through smarty.  It allows you to specify page specific data to smarty without changing the template for each page.</p>
<h3>How do I use it?</h3>
<ol>
  <li>Insert smarty assign variables and other smarty logic into the pagedata field of some of your content pages.</li>
  <li>Insert the <code>{process_pagedata}</code> tag into the very top of your page template.</li>
</ol>
<br/>
<h3>What parameters does it take?</h3>
<p>None at this time</p>';
$lang['admin']['page_metadata'] = 'Page Specific Metadata';
$lang['admin']['pagedata_codeblock'] = 'Smarty data or logic that is specific to this page';
$lang['admin']['error_uploadproblem'] = 'An error occurred in the upload';
$lang['admin']['error_nofileuploaded'] = 'No File has been uploaded';
$lang['admin']['files_failed'] = 'Files failed md5sum check';
$lang['admin']['files_not_found'] = 'ファイルが見つかりません。';
$lang['admin']['info_generate_cksum_file'] = 'This function will allow you to generate a checksum file and save it on your local computer for later validation.  This should be done just prior to rolling out the website, and/or after any upgrades, or major modifications.';
$lang['admin']['info_validation'] = 'This function will compare the checksums found in the uploaded file with the files on the current installation.  It can assist in finding problems with uploads, or exactly what files were modified if your system has been hacked.  A checksum file is generated for each release of CMS Made simple from version 1.4 on.';
$lang['admin']['download_cksum_file'] = 'Download Checksum File';
$lang['admin']['perform_validation'] = 'Perform Validation';
$lang['admin']['upload_cksum_file'] = 'Upload Checksum File';
$lang['admin']['checksumdescription'] = 'Validate the integrity of CMS files by comparing against known checksums';
$lang['admin']['system_verification'] = 'System Verification';
$lang['admin']['extra1'] = 'Extra Page Attribute 1';
$lang['admin']['extra2'] = 'Extra Page Attribute 2';
$lang['admin']['extra3'] = 'Extra Page Attribute 3';
$lang['admin']['start_upgrade_process'] = 'Start Upgrade Process';
$lang['admin']['warning_upgrade'] = '<em><strong>Warning:</strong></em> CMSMS is in need of an upgrade.';
$lang['admin']['warning_upgrade_info1'] = 'You are now running schema version %s. and you need to be upgraded to version %s';
$lang['admin']['warning_upgrade_info2'] = 'Please click the following link: %s.';
$lang['admin']['warning_mail_settings'] = 'Your mail settings have not been configured.  This could interfere with the ability of your website to send email mssages.  You should go to <a href="moduleinterface.php?module=CMSMailer">Extensions >> CMSMailer</a> and configure the mail settings with the information provided by your host.';
$lang['admin']['view_page'] = 'View this page in a new window';
$lang['admin']['off'] = 'オフ';
$lang['admin']['on'] = 'オン';
$lang['admin']['invalid_test'] = 'Invalid test param value!';
$lang['admin']['copy_paste_forum'] = 'View Text Report <em>(suitable for copying into forum posts)</em>';
$lang['admin']['permission_information'] = 'Permission Information';
$lang['admin']['server_os'] = 'サーバOS';
$lang['admin']['server_api'] = 'サーバAPI';
$lang['admin']['server_software'] = 'サーバソフトウェア';
$lang['admin']['server_information'] = 'サーバインフォメーション';
$lang['admin']['session_save_path'] = 'セッション保存パス';
$lang['admin']['max_execution_time'] = 'Maximum Execution Time';
$lang['admin']['gd_version'] = 'GD バージョン';
$lang['admin']['upload_max_filesize'] = 'Maximum Upload Size';
$lang['admin']['post_max_size'] = 'Maximum Post Size';
$lang['admin']['memory_limit'] = 'PHP メモリ上限';
$lang['admin']['server_db_type'] = 'サーバデータベース';
$lang['admin']['server_db_version'] = 'サーバデータベースバージョン';
$lang['admin']['phpversion'] = '現在のPHP Version';
$lang['admin']['safe_mode'] = 'PHP セーフモード';
$lang['admin']['php_information'] = 'PHPインフォメーション';
$lang['admin']['cms_install_information'] = 'CMSインストールインフォメーション';
$lang['admin']['cms_version'] = 'CMSバージョン';
$lang['admin']['installed_modules'] = 'インストール済みモジュール';
$lang['admin']['config_information'] = 'Configインフォメーション';
$lang['admin']['systeminfo_copy_paste'] = '選択されたテキストを問い合わせフォームに貼ってください。';
$lang['admin']['help_systeminformation'] = 'The information displayed below is collected from a variety of locations, and summarized here so that you may be able to conveniently find some of the information required when trying to diagnose a problem or request help with your CMS Made Simple installation.';
$lang['admin']['systeminfo'] = 'システムインフォメーション';
$lang['admin']['systeminfodescription'] = '問題を診断する際に役に立つかもしれないシステムの様々な情報を表示してください。';
$lang['admin']['welcome_user'] = 'ようこそ';
$lang['admin']['itsbeensincelogin'] = 'It has been %s since you last logged in';
$lang['admin']['days'] = '日';
$lang['admin']['day'] = '日';
$lang['admin']['hours'] = '時';
$lang['admin']['hour'] = '時';
$lang['admin']['minutes'] = '分';
$lang['admin']['minute'] = '分';
$lang['admin']['help_css_max_age'] = 'This parameter should be set relatively high for static sites, and should be set to 0 for site development';
$lang['admin']['css_max_age'] = 'Maximum amount of time (seconds) stylesheets can be cached in the browser';
$lang['admin']['error'] = 'エラー';
$lang['admin']['clear_version_check_cache'] = 'Clear any cached version check information on submit';
$lang['admin']['new_version_available'] = '<em>Notice:</em> A new version of CMS Made Simple is available.  Please notify your administrator.';
$lang['admin']['info_urlcheckversion'] = 'If this url is the word "none" no checks will be made.<br/>An empty string will result in a default URL being used.';
$lang['admin']['urlcheckversion'] = 'このURLで、新しいCMSバージョンが存在するかチェックしてください。';
$lang['admin']['master_admintheme'] = 'Default Administration Theme (for the login page and new user accounts)';
$lang['admin']['contenttype_separator'] = '区切り文字';
$lang['admin']['contenttype_sectionheader'] = 'セクションヘッダー';
$lang['admin']['contenttype_link'] = '外部リンク';
$lang['admin']['contenttype_content'] = 'コンテンツ';
$lang['admin']['contenttype_pagelink'] = '内部ページリンク';
$lang['admin']['nogcbwysiwyg'] = 'グローバル・コンテンツ・ブロックでWYSIWYGエディタを無効にします。';
$lang['admin']['destination_page'] = '目的のページ';
$lang['admin']['additional_params'] = '追加パラーメタ';
$lang['admin']['help_function_current_date'] = '	<h3>What does this do?</h3>
	<p>Prints the current date and time.  If no format is given, it will default to a format similar to \'Jan 01, 2004\'.</p>
	<h3>How do I use it?</h3>
	<p>Just insert the tag into your template/page like: <code>{current_date format="%A %d-%b-%y %T %Z"}</code></p>
	<h3>What parameters does it take?</h3>
	<ul>
		<li><em>(optional)</em>format - Date/Time format using parameters from php\'s strftime function.  See <a href="http://php.net/strftime" target="_blank">here</a> for a parameter list and information.</li>
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
	<li><em>(optional)</em> text        (string)     - If set, this will be used for the link text or alternate text for the image. Default is \'valid XHTML 1.0 Transitional\'.<br /> When an image is used, the given string will also be used for the image alt attribute (by default, this can be overridden by using the \'alt\' parameter).</li>
	<li><em>(optional)</em> image_class (string)     - Only if \'image\' is not set to false. If set, this will be used as class attribute for the image (img) element</li>
	<li><em>(optional)</em> src         (string)     - Only if \'image\' is not set to false. The icon to show. Default is http://www.w3.org/Icons/valid-xhtml10</li>
	<li><em>(optional)</em> width       (string)     - Only if \'image\' is not set to false. The image width. Default is 88 (width of http://www.w3.org/Icons/valid-xhtml10)</li>
	<li><em>(optional)</em> height      (string)     - Only if \'image\' is not set to false. The image height. Default is 31 (height of http://www.w3.org/Icons/valid-xhtml10)</li>
	<li><em>(optional)</em> alt         (string)     - Only if \'image\' is not set to false. The alternate text (\'alt\' attribute) for the image (element). If none is given the link text will be used.</li>
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
	<li><em>(optional)</em> text        (string)     - If set, this will be used for the link text or alternate text for the image. Default is \'Valid CSS 2.1\'.<br /> When an image is used, the given string will also be used for the image alt attribute (by default, this can be overridden by using the \'alt\' parameter).</li>
	<li><em>(optional)</em> image_class (string)     - Only if \'image\' is not set to false. If set, this will be used as class attribute for the image (img) element</li>
        <li><em>(optional)</em> src         (string)     - Only if \'image\' is not set to false. The icon to show. Default is http://jigsaw.w3.org/css-validator/images/vcss</li>
        <li><em>(optional)</em> width       (string)     - Only if \'image\' is not set to false. The image width. Default is 88 (width of http://jigsaw.w3.org/css-validator/images/vcss)</li>
        <li><em>(optional)</em> height      (string)     - Only if \'image\' is not set to false. The image height. Default is 31 (height of http://jigsaw.w3.org/css-validator/images/vcss)</li>
	<li><em>(optional)</em> alt         (string)     - Only if \'image\' is not set to false. The alternate text (\'alt\' attribute) for the image (element). If none is given the link text will be used.</li>
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
	<p>Just insert the tag into your template/page\'s head section like: <code>{stylesheet}</code></p>
	<h3>What parameters does it take?</h3>
	<ul>
		<li><em>(optional)</em>name - Instead of getting all stylesheets for the given page, it will only get one spefically named one, whether it\'s attached to the current template or not.</li>
		<li><em>(optional)</em>media - If name is defined, this allows you set a different media type for that stylesheet.</li>
	</ul>
	</p>';
$lang['admin']['help_function_stopexpandcollapse'] = '	<h3>What does this do?</h3>
	<p>Enables content to be expandable and collapsable. Like the following:<br />
	<a href="#expand1" onClick="expandcontent(\'expand1\')" style="cursor:hand; cursor:pointer">Click here for more info</a><span id="expand1" class="expand"><a name="help"></a> - Here is all the info you will ever need...</a></span></p>

	<h3>How do I use it?</h3>
	<p>Just insert the tag into your template/page like:<br />
	<br />
	<code>{startExpandCollapse id="name" title="Click Here"}<br />
	This is all the content the user will see when they click the title "Click Here" above. It will display all the content that is between the {startExpandCollapse} and {stopExpandCollapse} when clicked.<br />
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
	<a href="#expand1" onClick="expandcontent(\'expand1\')" style="cursor:hand; cursor:pointer">Click here for more info</a><span id="expand1" class="expand"><a name="help"></a> - Here is all the info you will ever need...</a></span></p>

	<h3>How do I use it?</h3>
	<p>Just insert the tag into your template/page like: <code>{startExpandCollapse id="name" title="Click Here"}</code>. Also, you must use the {stopExpandCollapse} at the end of the collapseable content. Here is an example:<br />
	<br />
	<code>{startExpandCollapse id="name" title="Click Here"}<br />
	This is all the content the user will see when they click the title "Click Here" above. It will display all the content that is between the {startExpandCollapse} and {stopExpandCollapse} when clicked.<br />
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
            <li><em>(optional)</em> <tt>relative 1/0</tt> - We are not going to show current page (with the sitemap) - we\'ll show only his childs.</li>
            <li><em>(optional)</em> <tt>showall 1/0</tt> - We are going to show all pages if showall is enabled, else we\'ll only show pages with active menu entries.</li>
            <li><em>(optional)</em> <tt>add_elements</tt> - A comma separated list of alias names which will be added to the shown pages with active menu entries (showall not enabled).</li>
        </ul>
        </p>';
$lang['admin']['help_function_adsense'] = '	<h3>What does this do?</h3>
	<p>Google adsense is a popular advertising program for websites.  This tag will take the basic parameters that would be provided by the adsense program and puts them in a easy to use tag that makes your templates look much cleaner.  See <a href="http://www.google.com/adsense" target="_blank">here</a> for more details on adsense.</p>
	<h3>How do I use it?</h3>
	<p>First, sign up for a google adsense account and get the parameters for your ad.  Then just use the tag in your page/template like so: <code>{adsense ad_client="pub-random#" ad_width="120" ad_height="600" ad_format="120x600_as"}</code>
	<h3>What parameters does it take?</h3>
	<p>All parameters are optional, though skipping one might not necessarily made the ad work right.  Options are:
	<ul>
		<li>ad_client - This would be the pub_random# id that would represent your adsense account number</li>
		<li>ad_width - width of the ad</li>
		<li>ad_height - height of the ad</li>
		<li>ad_format - "format" of the ad <em>e.g. 120x600_as</em></li>
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
	<p>This is actually just a wrapper tag for the <a href="listmodules.php?action=showmodulehelp&module=Search">Search module</a> to make the tag syntax easier. 
	Instead of having to use <code>{cms_module module=\'Search\'}</code> you can now just use <code>{search}</code> to insert the module in a template.
	</p>
	<h3>How do I use it?</h3>
	<p>Just put <code>{search}</code> in a template where you want the search input box to appear. For help about the Search module, please refer to the <a href="listmodules.php?action=showmodulehelp&module=Search">Search module help</a>.';
$lang['admin']['help_function_root_url'] = '	<h3>What does this do?</h3>
	<p>Prints the root url location for the site.</p>
	<h3>How do I use it?</h3>
	<p>Just insert the tag into your template/page like: <code>{root_url}</code></p>
	<h3>What parameters does it take?</h3>
	<p>None at this time.</p>';
$lang['admin']['help_function_repeat'] = '  <h3>What does this do?</h3>
  <p>Repeats a specified sequence of characters, a specified number of times</p>
  <h3>How do I use it?</h3>
  <p>Insert a tag similar to the following into your template/page, like this: <code>{repeat string=\'repeat this \' times=\'3\'}</code>
  <h3>What parameters does it take?</h3>
  <ul>
  <li>string=\'text\' - The string to repeat</li>
  <li>times=\'num\' - The number of times to repeat it.</li>
  </ul>';
$lang['admin']['help_function_recently_updated'] = '	<h3>What does this do?</h3>
	<p>Outputs a list of recently updated pages.</p>
	<h3>How do I use it?</h3>
	<p>Just insert the tag into your template/page like: <code>{recently_updated}</code></p>
	<h3>What parameters does it take?</h3>
	<ul>
	 <li><p><em>(optional)</em> number=\'10\' - Number of updated pages to show.</p><p>Example: <pre>{recently_updated number=\'15\'}</pre></p></li>
 	 <li><p><em>(optional)</em> leadin=\'Last changed\' - Text to show left of the modified date.</p><p>Example: <pre>{recently_updated leadin=\'Last Changed\'}</pre></p></li>
 	 <li><p><em>(optional)</em> showtitle=\'true\' - Shows the titleattribute if it exists as well (true|false).</p><p>Example: <pre>{recently_updated showtitle=\'true\'}</pre></p></li>											 	
	 <li><p><em>(optional)</em> css_class=\'some_name\' - Warp a div tag with this class around the list.</p><p>Example: <pre>{recently_updated css_class=\'some_name\'}</pre></p></li>											 	
	 <li><p><em>(optional)</em> dateformat=\'d.m.y h:m\' - default is d.m.y h:m , use the format you whish (php -date- format)</p><p>Example: <pre>{recently_updated dateformat=\'D M j G:i:s T Y\'}</pre></p></li>											 	
	</ul>
	<p>or combined:</p>
	<pre>{recently_updated number=\'15\' showtitle=\'false\' leadin=\'Last Change: \' css_class=\'my_changes\' dateformat=\'D M j G:i:s T Y\'}</pre>';
$lang['admin']['help_function_print'] = '	<h3>What does this do?</h3>
	<p>This is actually just a wrapper tag for the <a href="listmodules.php?action=showmodulehelp&module=Printing">Printing module</a> to make the tag syntax easier. 
	Instead of having to use <code>{cms_module module=\'Printing\'}</code> you can now just use <code>{print}</code> to insert the module on pages and templates.
	</p>
	<h3>How do I use it?</h3>
	<p>Just put <code>{print}</code> on a page or in a template. For help about the Printing module, what parameters it takes etc., please refer to the <a href="listmodules.php?action=showmodulehelp&module=Printing">Printing module help</a>.';
$lang['admin']['help_function_oldprint'] = '	<h3>What does this do?</h3>
	<p>Creates a link to only the content of the page.</p>
	<h3>How do I use it?</h3>
	<p>Just insert the tag into your template/page like: <code>{oldprint}</code><br></p>
        <h3>What parameters does it take?</h3>
        <ul>
                <li><em>(optional)</em> goback - Set to "true" to show a "Go Back" link on the page to print.</li>
                <li><em>(optional)</em> popup - Set to "true" and page for printing will by opened in new window.</li>
                <li><em>(optional)</em> script - Set to "true" and in print page will by used java script for run print of page.</li>
                <li><em>(optional)</em> showbutton - Set to "true" and will show a printer graphic instead of a text link.</li>
                <li><em>(optional)</em> class - class for the link, defaults to "noprint".</li>
                <li><em>(optional)</em> text - Text to use instead of "Print This Page" for the print link.
                <li><em>(optional)</em> title - Text to show for title attribute. If blank show text parameter.</li>
                <li><em>(optional)</em> more - Place additional options inside the <a> link.</li>
                <li><em>(optional)</em> src_img - Show this image file. Default images/cms/printbutton.gif.</li>
                <li><em>(optional)</em> class_img - Class of <img> tag if showbutton is sets.</li>

                    <p>Example:</p>
                     <pre>{oldprint text="Printable Page"}</pre>      
                     </li>
        </ul>';
$lang['admin']['login_info_title'] = 'インフォメーション';
$lang['admin']['login_info'] = 'From this point should take into consideration the following parameters';
$lang['admin']['login_info_params'] = '<ol> 
  <li>Cookies enabled in your browser</li> 
  <li>Javascript enabled in your browser </li> 
  <li>Windows popup active to the following address:</li> 
</ol>';
$lang['admin']['help_function_news'] = '	<h3>What does this do?</h3>
	<p>This is actually just a wrapper tag for the <a href="listmodules.php?action=showmodulehelp&module=News">News module</a> to make the tag syntax easier. 
	Instead of having to use <code>{cms_module module=\'News\'}</code> you can now just use <code>{news}</code> to insert the module on pages and templates.
	</p>
	<h3>How do I use it?</h3>
	<p>Just put <code>{news}</code> on a page or in a template. For help about the News module, what parameters it takes etc., please refer to the <a href="listmodules.php?action=showmodulehelp&module=News">News module help</a>.';
$lang['admin']['help_function_modified_date'] = '        <h3>What does this do?</h3>
        <p>Prints the date and time the page was last modified.  If no format is given, it will default to a format similar to \'Jan 01, 2004\'.</p>
        <h3>How do I use it?</h3>
        <p>Just insert the tag into your template/page like: <code>{modified_date format="%A %d-%b-%y %T %Z"}</code></p>
        <h3>What parameters does it take?</h3>
        <ul>
                <li><em>(optional)</em>format - Date/Time format using parameters from php\'s strftime function.  See <a href="http://php.net/strftime" target="_blank">here</a> for a parameter list and information.</li>
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
	<p>This is actually just a wrapper tag for the <a href="listmodules.php?action=showmodulehelp&module=MenuManager">Menu Manager module</a> to make the tag syntax easier. 
	Instead of having to use <code>{cms_module module=\'MenuManager\'}</code> you can now just use <code>{menu}</code> to insert the module on pages and templates.
	</p>
	<h3>How do I use it?</h3>
	<p>Just put <code>{menu}</code> on a page or in a template. For help about the Menu Manager module, what parameters it takes etc., please refer to the <a href="listmodules.php?action=showmodulehelp&module=MenuManager">Menu Manager module help</a>.';
$lang['admin']['help_function_last_modified_by'] = '        <h3>What does this do?</h3>
        <p>Prints last person that edited this page.  If no format is given, it will default to a ID number of user .</p>
        <h3>How do I use it?</h3>
        <p>Just insert the tag into your template/page like: <code>{last_modified_by format="fullname"}</code></p>
        <h3>What parameters does it take?</h3>
        <ul>
                <li><em>(optional)</em>format - id, username, fullname</li>
        </ul>';
$lang['admin']['help_function_image'] = '  <h3>What does this do?</h3>
  <p>Creates an image tag to an image stored within your images directory</p>
  <h3>How do I use it?</h3>
  <p>Just insert the tag into your template/page like: <code>{image src="something.jpg"}</code></p>
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
	for various elements and for the surrounding \'div\'. Check out the CSS below for
	more information.</p>

	<h3>How do I use it?</h3>
	<p>Just insert the tag into your template or page like: </p>
	<code>{ImageGallery picFolder="uploads/images/yourfolder/"}</code>
	<p>Where picFolder is the folder where your images are stored.</p>
	
    <h3>What parameters does it take?</h3>
    <p>It can take quite a few parameters, but the example above is probably 
good for most people :) </p>
        <ol>
		<li><strong>picFolder e.g. picFolder="uploads/images/yourfolder/"</strong><br/>
		Is the path to the gallery (yourfolder) ending in\'/\'. So you can have 
		lots of directories and lots of galleries.</li>

		<li><strong>type e.g. type="click" or type="popup"</strong><br/>
		For the "popup" function to work you need to include the popup javascript into
		the head of your template e.g. "<head></head>". The javascript is at
		the bottom of this page! <em>The default is \'click\'.</em></li>

		<li><strong>divID e.g. divID ="imagegallery"</strong><br/>
		Sets the wrapping \'div id\' around your gallery so that you can have 
		different CSS for each gallery. <em>The default is \'imagegallery\'.</em></li>

		<li><strong>sortBy e.g. sortBy = "name" or sortBy = "date"</strong><br/>
		Sort images by \'name\' OR \'date\'. <em>No default.</em></li>

		<li><strong>sortByOrder e.g. sortByOrder = "asc" or sortByOrder = "desc"</strong><br/> 
		 <em>No default.</em>.</li>

		<li>This sets caption above the big (clicked on) image<br/>
		<strong>bigPicCaption = "name" </strong>(filename excluding extension)<em> or </em><br/>
		<strong>bigPicCaption = "file" </strong>(filename including extension)<em> or </em><br/>
		<strong>bigPicCaption = "number" </strong>(a number sequence)<em> or </em><br/>
		<strong>bigPicCaption = "none" </strong>(No caption)<br/>
		<em>The Default is "name". </em></li>

		<li>This sets the caption below the small thumbnail<br/>
		<strong>thumbPicCaption = "name"</strong> (filename excluding extension)<em> or </em><br/>
		<strong>thumbPicCaption = "file"</strong> (filename including extension)<em> or </em><br/>
		<strong>thumbPicCaption = "number" </strong>(a number sequence)<em> or </em><br/>
		<strong>thumbPicCaption = "none" </strong>(No caption)<br/>
		<em>The Default is "name".</em></li>

		<li>Sets the \'alt\' tag for the big image - compulsory.<br/>
		<strong>bigPicAltTag = "name" </strong>(filename excluding extension)<em> or </em><br/>
		<strong>bigPicAltTag = "file" </strong>(filename including extension)<em> or </em><br/>
		<strong>bigPicAltTag = "number" </strong>(a number sequence)<br/>
		<em>The Default is "name".</em></li>

		<li> Sets the \'title\' tag for the big image. <br/>
		<strong>bigPicTitleTag = "name" </strong>(filename excluding extension)<em> or </em><br/>
		<strong>bigPicTitleTag = "file" </strong>(filename including extension)<em> or </em><br/>
		<strong>bigPicTitleTag = "number" </strong>(a number sequence)<em> or </em><br/>
		<strong>bigPicTitleTag = "none" </strong>(No title)<br/>
		<em>The Default is "name".</em></li>

		<li><strong>thumbPicAltTag</strong><br/>
		<em>Is the same as bigPicAltTag, but for the small thumbnail images.<em></li>

		<li><strong>thumbPicTitleTag *</strong><br/>
		<em>Is the same as bigPicTitleTag but for the small thumbnail images.<br/>
		<strong>*Except that after the options you have \'... click for a bigger image\' 
		or if you do not set this option then you get the default of 
		\'Click for a bigger image...\'</em></strong></li>
        </ol>
  <p>A More Complex Example</p>
        <p>\'div id\' is \'cdcovers\', no Caption on big images, thumbs have default caption. 
        \'alt\' tags for the big image are set to the name of the image file without the extension 
        and the big image \'title\' tag is set to the same but with an extension. 
        The thumbs have the default \'alt\' and \'title\' tags. The default being the name 
        of the image file without the extension for \'alt\' and \'Click for a bigger image...\' for the \'title\',
		would be:</p>
		<code>{ImageGallery picFolder="uploads/images/cdcovers/" divID="cdcovers" bigPicCaption="none"  bigPicAltTag="name" bigPicTitleTag="file"}</code>
        <br/>
		<p>It\'s got lots of options but I wanted to keep it very flexible and you don\'t have to set them, the defaults are sensible.</p>
		
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

	.bigPicNav { /* Big Image information: \'Image 1 of 4\' and gallery navigation */
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
	<p>Display\'s a number that represents your google pagerank.</p>
	<h3>How do I use it?</h3>
	<p>Just insert the tag into your template/page like: <code>{googlepr}</code><br>
	<br>

	<h3>What parameters does it take?</h3>
	<ul>
		<li><em>(optional)</em> domain - The website to display the pagerank for.</li>
	</ul>
	</p>';
$lang['admin']['help_function_google_search'] = '	<h3>What does this do?</h3>
	<p>Search\'s your website using Google\'s search engine.</p>
	<h3>How do I use it?</h3>
	<p>Just insert the tag into your template/page like: <code>{google_search}</code><br>
	<br>
	Note: Google needs to have your website indexed for this to work. You can submit your website to google <a href="http://www.google.com/addurl.html">here</a>.</p>
	<h3>What if I want to change the look of the textbox or button?</h3>
	<p>The look of the textbox and button can be changed via css. The textbox is given an id of textSearch and the button is given an id of buttonSearch.</p>

	<h3>What parameters does it take?</h3>
	<ul>
		<li><em>(optional)</em> domain - This tells google the website domain to search. This script tries to determine this automatically.</li>
		<li><em>(optional)</em> buttonText - The text you want to display on the search button. The default is "Search Site".</li>
	</ul>
	</p>';
$lang['admin']['help_function_global_content'] = '	<h3>What does this do?</h3>
	<p>Inserts a global content block into your template or page.</p>
	<h3>How do I use it?</h3>
	<p>Just insert the tag into your template/page like: <code>{global_content name=\'myblob\'}</code>, where name is the name given to the block when it was created.</p>
	<h3>What parameters does it take?</h3>
	<ul>
		<li>name - The name of the global content block to display.</li>
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
	<p>Just insert the tag into your template/page like: <code>{embed url=http://www.google.com/}</code><br></p>
        <h4>Example to make the iframe larger</h4>
	<p>Add the following to your style sheet:</p>
        <pre>#myframe { height: 600px; }</pre>
        <h3>What parameters does it take?</h3>
        <ul>
               <li><em>(required)</em>url - the url to be included 
               <li><em>(optional)</em>header=true - this will generate the header code for good resizing of the IFRAME.</li>

        </ul>
       <p>You must include in your page content {embed url=..} and in the "Metadata:" section (advanced tab) you must put {embed header=true}. Also be sure to put this in between the "head" tags of your template: {metadata}</p>';
$lang['admin']['help_function_edit'] = '	<h3>What does this do?</h3>
	<p>Creates a link to edit the page</p>
	<h3>How do I use it?</h3>
	<p>Just insert the tag into your template/page like: <code>{edit}</code><br></p>
        <h3>What parameters does it take?</h3>
        <ul>
                <li><em>(optional)</em>showbutton - Set to "true" and will show a edit graphic instead of a text link.</li>
        </ul>';
$lang['admin']['help_function_description'] = '	<h3>What does this do?</h3>
	<p>Prints the description (title attribute) of the page.</p>
	<h3>How do I use it?</h3>
	<p>Just insert the tag into your template/page like: <code>{description}</code></p>
	<h3>What parameters does it take?</h3>
	<p>None at this time.</p>';
$lang['admin']['help_function_created_date'] = '        <h3>What does this do?</h3>
        <p>Prints the date and time the page was created.  If no format is given, it will default to a format similar to \'Jan 01, 2004\'.</p>
        <h3>How do I use it?</h3>
        <p>Just insert the tag into your template/page like: <code>{created_date format="%A %d-%b-%y %T %Z"}</code></p>
        <h3>What parameters does it take?</h3>
        <ul>
                <li><em>(optional)</em>format - Date/Time format using parameters from php\'s strftime function.  See <a href="http://php.net/strftime" target="_blank">here</a> for a parameter list and information.</li>
        </ul>';
$lang['admin']['help_function_content'] = '	<h3>What does this do?</h3>
	<p>This is where the content for your page will be displayed.  It\'s inserted into the template and changed based on the current page being displayed.</p>
	<h3>How do I use it?</h3>
	<p>Just insert the tag into your template like: <code>{content}</code>.</p>
	<h3>What parameters does it take?</h3>
	<ul>
		<li><em>(optional)</em>block - Allows you to have more than one content block per page.  When multiple content tags are put on a template, that number of edit boxes will be displayed when the page is edited.
<p>Example:</p>
<pre>{content block="Second Content Block"}</pre>
<p>Now, when you edit a page there will a textarea called "Second Content Block".</li>
		<li><em>(optional)</em>wysiwyg (true/false) - If set to false, then a wysiwyg will never be used while editing this block.  If true, then it acts as normal.  Only works when block parameter is used.</li>
		<li><em>(optional)</em>oneline (true/false) - If set to true, then only one edit line will be shown while editing this block.  If false, then it acts as normal.  Only works when block parameter is used.</li>
		<li><em>(optional)</em>default - Allows you to specify default content content for this content blocks (additional content blocks only).</li>
		<li><em>(optional)</em>assign - Assigns the content to a smarty parameter, which you can then use in other areas of the page, or use to test whether content exists in it or not.
<p>Example of passing page content to a User Defined Tag as a parameter:</p>
<pre>
         {content assign=pagecontent}
         {table_of_contents thepagecontent="$pagecontent"}
</pre>
</li>
	</ul>';
$lang['admin']['help_function_contact_form'] = '  <h2>NOTE: This plugin is deprecated</h2>
    <p>This smarty plugin is deprecated, and may not be included with further versions of CMS Made Simple.  We recommend you use the formbuilder module and it\'s included contact form.</p>
	<h3>What does this do?</h3>
	<p>Display\'s a contact form. This can be used to allow others to send an email message to the address specified.</p>
	<h3>How do I use it?</h3>
	<p>Just insert the tag into your template/page like: <code>{contact_form email="yourname@yourdomain.com"}</code><br>
	<br>
	If you would like to send an email to multiple adresses, seperate each address with a comma.</p>
	<h3>What parameters does it take?</h3>
	<ul>
		<li>email - The email address that the message will be sent to.</li>
		<li><em>(optional)</em>style - true/false, use the predefined styles. Default is true.</li>
		<li><em>(optional)</em>subject_get_var - string, allows you to specify which _GET var to use as the default value for subject.
               <p>Example:</p>
               <pre>{contact_form email="yourname@yourdomain.com" subject_get_var="subject"}</pre>
             <p>Then call the page with the form on it like this: /index.php?page=contact&subject=test+subject</p>
             <p>And the following will appear in the "Subject" box: "test subject"
           </li>
		<li><em>(optional)</em>captcha - true/false, use Captcha response test (Captcha module must be installed). Default is false.</li>
	</ul>
	</p>';
$lang['admin']['help_function_cms_versionname'] = '	<h3>What does this do?</h3>
	<p>This tag is used to insert the current version name of CMS into your template or page.  It doesn\'t display any extra besides the version name.</p>
	<h3>How do I use it?</h3>
	<p>This is just a basic tag plugin.  You would insert it into your template or page like so: <code>{cms_versionname}</code>
	<h3>What parameters does it take?</h3>
	<p>It takes no parameters.</p>';
$lang['admin']['help_function_cms_version'] = '	<h3>What does this do?</h3>
	<p>This tag is used to insert the current version number of CMS into your template or page.  It doesn\'t display any extra besides the version number.</p>
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
		1.45 - Added a new option for "dir", "up", for links to the parent page e.g. dir="up" (Hans Mogren).<br />
		1.44 - Added new parameters "ext" and "ext_info" to allow external links with class="external" and info text after the link, ugly hack but works thinking about rewriting this(Tatu Wikman)<br />
		1.43 - Added new parameters "image" and "imageonly" to allow attachment of images to be used for page links, either instead of or in addition to text links. (Marcus Bointon)<br />
		1.42 - Added new parameter "anchorlink" and a new option for "dir" namely, "anchor", for internal page links. e.g. dir="anchor" anchorlink="internal_link". (Russ)<br />
		1.41 - added new parameter "href" (LeisureLarry)<br />
		1.4 - fixed bug next/prev linking to non-content pages. (Thanks Teemu Koistinen for this fix)<br />
		1.3 - added option "more"<br />
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
		<p>Just insert the tag into your template/page like: <code>{cms_selflink page="1"}</code> or  <code>{cms_selflink page="alias"}</code></p>
		<h3>What parameters does it take?</h3>
		<p>
		<ul>
		<li><em>(optional)</em> <tt>page</tt> - Page ID or alias to link to.</li>
		<li><em>(optional)</em> <tt>dir anchor (internal links)</tt> - New option for an internal page link. If this is used then <tt>anchorlink</tt> should be set to your link. </li> <!-- Russ - 25-04-2006 -->
		<li><em>(optional)</em> <tt>anchorlink</tt> - New paramater for an internal page link. If this is used then <tt>dir ="anchor"</tt> should also be set. No need to add the #, because it is added automatically.</li> <!-- Russ - 25-04-2006 -->
		<li><em>(optional)</em> <tt>urlparam</tt> - Specify additional parameters to the URL.  <strong>Do not use this in conjunction with the <em>anchorlink</em> parameter</em></strong>
		<li><em>(optional)</em> <tt>tabindex ="a value"</tt> - Set a tabindex for the link.</li> <!-- Russ - 22-06-2005 -->
		<li><em>(optional)</em> <tt>dir start/next/prev/up (previous)</tt> - Links to the default start page or the next or previous page, or the parent page (up). If this is used <tt>page</tt> should not be set.</li> <!-- mbv - 21-06-2005 -->
		<B>Note!</B> Only one of the above may be used in the same cms_selflink statement!!
		<li><em>(optional)</em> <tt>text</tt> - Text to show for the link.  If not given, the Page Name is used instead.</li>
		<li><em>(optional)</em> <tt>menu 1/0</tt> - If 1 the Menu Text is used for the link text instead of the Page Name</li> <!-- mbv - 21-06-2005 -->
		<li><em>(optional)</em> <tt>target</tt> - Optional target for the a link to point to.  Useful for frame and javascript situations.</li>
		<li><em>(optional)</em> <tt>class</tt> - Class for the <a> link. Useful for styling the link.</li> <!-- mbv - 21-06-2005 -->
		<li><em>(optional)</em> <tt>lang</tt> - Display link-labels  ("Next Page"/"Previous Page") in different languages (0 for no label.) Danish (dk), English (en) or French (fr), for now.</li> <!-- mbv - 21-06-2005 -->
		<li><em>(optional)</em> <tt>id</tt> - Optional css_id for the <a> link.</li> <!-- mbv - 29-06-2005 -->
		<li><em>(optional)</em> <tt>more</tt> - place additional options inside the <a> link.</li> <!-- mbv - 29-06-2005 -->
		<li><em>(optional)</em> <tt>label</tt> - Label to use in with the link if applicable.</li>
		<li><em>(optional)</em> <tt>label_side left/right</tt> - Side of link to place the label (defaults to "left").</li>
		<li><em>(optional)</em> <tt>title</tt> - Text to use in the title attribute.  If none is given, then the title of the page will be used for the title.</li>
		<li><em>(optional)</em> <tt>rellink 1/0</tt> - Make a relational link for accessible navigation.  Only works if the dir parameter is set and should only go in the head section of a template.</li>
		<li><em>(optional)</em> <tt>href</tt> - If href is used only the href value is generated (no other parameters possible). <strong>Example:</strong> <a href="{cms_selflink href="alias"}"><img src=""></a></li>
		<li><em>(optional)</em> <tt>image</tt> - A url of an image to use in the link. <strong>Example:</strong> {cms_selflink dir="next" image="next.png" text="Next"}</li>
		<li><em>(optional)</em> <tt>alt</tt> - Alternative text to be used with image (alt="" will be used if no alt parameter is given).</li>
		<li><em>(optional)</em> <tt>imageonly</tt> - If using an image, whether to suppress display of text links. If you want no text in the link at all, also set lang=0 to suppress the label. <B>Example:</B> {cms_selflink dir="next" image="next.png" text="Next" imageonly=1}</li>
		<li><em>(optional)</em> <tt>ext</tt> - For external links, will add class="external and info text. <strong>warning:</strong> only text, target and title parameters are compatible with this parameter</li>
		<li><em>(optional)</em> <tt>ext_info</tt> - Used together with "ext" defaults to (external link)</li>
		</ul>
		</p>';
$lang['admin']['about_function_cms_module'] = '	<p>Author: Ted Kulp<tedkulp@users.sf.net></p>
	<p>Version: 1.0</p>
	<p>
	Change History:<br/>
	None
	</p>';
$lang['admin']['help_function_cms_module'] = '	<h3>What does this do?</h3>
	<p>This tag is used to insert modules into your templates and pages.  If a module is created to be used as a tag plugin (check it\'s help for details), then you should be able to insert it with this tag.</p>
	<h3>How do I use it?</h3>
	<p>It\'s just a basic tag plugin.  You would insert it into your template or page like so: <code>{cms_module module="somemodulename"}</code>
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
1.6 - Modified to skip any parents that are marked to be "not shown in menu" except for root<br />
1.7 - Added root_url parameter (elijahlofgren)<br />
</p>';
$lang['admin']['help_function_breadcrumbs'] = '<h3>What does this do?</h3>
<p>Prints a breadcrumb trail .</p>
<h3>How do I use it?</h3>
<p>Just insert the tag into your template/page like: <code>{breadcrumbs}</code></p>
<h3>What parameters does it take?</h3>
<p>
<ul>
<li><em>(optional)</em> <tt>delimiter</tt> - Text to seperate entries in the list (default ">>").</li>
<li><em>(optional)</em> <tt>initial</tt> - 1/0 If set to 1 start the breadcrumbs with a delimiter (default 0).</li>
<li><em>(optional)</em> <tt>root</tt> - Page alias of a page you want to always appear as the first page in
    the list. Can be used to make a page (e.g. the front page) appear to be the root of everything even though it is not.</li>
<li><em>(optional)</em> <tt>root_url</tt> - Override the URL of the root page. Useful for making link be to \'/\' instead of \'/home/\'. This requires that the root page be set as the default page.</li>
<li><em>(optional)</em> <tt>classid</tt> - The CSS class for the non current page names, i.e. the first n-1 pages in the list. If the name is a link it is added to the <a href> tags, otherwise it is added to the <span> tags.</li>
<li><em>(optional)</em> <tt>currentclassid</tt> - The CSS class for the <span> tag surrounding the current page name.</li>
<li><em>(optional)</em> <tt>starttext</tt> - Text to append to the front of the breadcrumbs list, something like "You are here".</li>
</ul>
</p>';
$lang['admin']['about_function_anchor'] = '	<p>Author: Ted Kulp<tedkulp@users.sf.net></p>
	<p>Version: 1.1</p>
	<p>
	Change History:<br/>
	<strong>Update to version 1.1 from 1.0</strong> <em>2006/07/19</em><br/>
	Russ added the means to insert a title, a tabindex and a class for the anchor link. Westis added accesskey and changed parameter names to not include \'anchorlink\'.<br/>
	</hr>
	</p>';
$lang['admin']['help_function_anchor'] = '	<h3>What does this do?</h3>
	<p>Makes a proper anchor link.</p>
	<h3>How do I use it?</h3>
	<p>Just insert the tag into your template/page like: <code>{anchor anchor=\'here\' text=\'Scroll Down\'}</code></p>
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
  <p>This is actually just a wrapper tag for the <a href="listmodules.php?action=showmodulehelp&module=MenuManager">Menu Manager module</a> to make the tag syntax easier, and to simplify creating a sitemap.</p>
<h3>How do I use it?</h3>
  <p>Just put <code>{site_mapper}</code> on a page or in a template. For help about the Menu Manager module, what parameters it takes etc., please refer to the <a href="listmodules.php?action=showmodulehelp&module=MenuManager">Menu Manager module help</a>.</p>
  <p>By default, if no template option is specified the minimal_menu.tpl file will be used.</p>
  <p>Any parameters used in the tag are available in the menumanager template as <code>{$menuparams.paramname}</code></p>';
$lang['admin']['help_function_redirect_url'] = '<h3>What does this do?</h3>
  <p>This plugin allows you to easily redirect to a specified url.  It is handy inside of smarty conditional logic (for example, redirect to a splash page if the site is not live yet).</p>
<h3>How do I use it?</h3>
<p>Simply insert this tage into your page or template: <code>{redirect_url urle=\'www.cmsmadesimple.org\'}</code></p>';
$lang['admin']['help_function_redirect_page'] = '<h3>What does this do?</h3>
 <p>This plugin allows you to easily redirect to another page.  It is handy inside of smarty conditional logic (for example, redirect to a login page if the user is not logged in.)</p>
<h3>How do I use it?</h3>
<p>Simply insert this tage into your page or template: <code>{redirect_page page=\'some-page-alias\'}</code></p>';
$lang['admin']['of'] = 'of';
$lang['admin']['first'] = '最初';
$lang['admin']['last'] = '最後';
$lang['admin']['adminspecialgroup'] = 'Warning: Members of this group automatically have all permissions';
$lang['admin']['disablesafemodewarning'] = 'Disable admin safe mode warning';
$lang['admin']['allowparamcheckwarnings'] = 'Allow parameter checks to create warning messages';
$lang['admin']['date_format_string'] = '日付フォーマット';
$lang['admin']['date_format_string_help'] = '<em>strftime</em> formatted date format string.  Try googling \'strftime\'';
$lang['admin']['last_modified_at'] = 'Last modified at';
$lang['admin']['last_modified_by'] = 'Last modified by';
$lang['admin']['read'] = 'Read';
$lang['admin']['write'] = 'Write';
$lang['admin']['execute'] = '実行';
$lang['admin']['group'] = 'グループ';
$lang['admin']['other'] = 'その他';
$lang['admin']['event_desc_moduleupgraded'] = 'モジュールのアップグレード後に送信';
$lang['admin']['event_desc_moduleinstalled'] = 'モジュールのインストール後に送信';
$lang['admin']['event_desc_moduleuninstalled'] = 'モジュールのアンインストール後に送信';
$lang['admin']['event_desc_edituserdefinedtagpost'] = 'ユーザー定義タグの更新後に送信';
$lang['admin']['event_desc_edituserdefinedtagpre'] = 'ユーザー定義タグ更新前に送信';
$lang['admin']['event_desc_deleteuserdefinedtagpre'] = 'ユーザー定義タグ削除前に送信';
$lang['admin']['event_desc_deleteuserdefinedtagpost'] = 'ユーザー定義タグ削除後に送信';
$lang['admin']['event_desc_adduserdefinedtagpost'] = 'ユーザー定義タグ挿入後に送信';
$lang['admin']['event_desc_adduserdefinedtagpre'] = 'ユーザー定義タグ挿入前に送信';
$lang['admin']['global_umask'] = 'ファイル作成マスク(umask)';
$lang['admin']['errorcantcreatefile'] = 'ファイルを作成できません(パーミッションの問題の可能性?)';
$lang['admin']['errormoduleversionincompatible'] = 'モジュールはこのCMSバージョンに対応していません。';
$lang['admin']['errormodulenotloaded'] = '内部エラー, モジュールはインスタンス化されていません。';
$lang['admin']['errormodulenotfound'] = '内部エラー, モジュールのインスタンスが見つかりません。';
$lang['admin']['errorinstallfailed'] = 'モジュールのインストールに失敗しました。';
$lang['admin']['errormodulewontload'] = '利用可能なモジュールのインスタンス化の問題';
$lang['admin']['frontendlang'] = 'フロントエンドのデフォルト言語';
$lang['admin']['info_edituser_password'] = 'ユーザーパスワードを変更するにはここを変更';
$lang['admin']['info_edituser_passwordagain'] = 'ユーザーパスワードを変更するにはここを変更';
$lang['admin']['originator'] = '原作者';
$lang['admin']['module_name'] = 'モジュール名';
$lang['admin']['event_name'] = 'イベント名';
$lang['admin']['event_description'] = 'イベント概要';
$lang['admin']['error_delete_default_parent'] = 'デフォルトページの親ページは削除できません。';
$lang['admin']['jsdisabled'] = 'この機能はJavaスクリプトが有効である必要があります。';
$lang['admin']['order'] = '整列';
$lang['admin']['reorderpages'] = 'ページの再整列';
$lang['admin']['reorder'] = '再整列';
$lang['admin']['page_reordered'] = 'ページは正常に再整列されました。';
$lang['admin']['pages_reordered'] = 'ページは正常に再整列されました。';
$lang['admin']['sibling_duplicate_order'] = '2兄弟(sibling)ページは同じ順番にすることはできません。ページは再整列されません。';
$lang['admin']['no_orders_changed'] = '再整列が選択されましたが、対象のどの部分も変更されていません。ページは再整列されません。';
$lang['admin']['order_too_small'] = 'ページ整列に0は指定できません。ページは再整列されません。';
$lang['admin']['order_too_large'] = 'ページ整列にはレベル内のページ数以上の数字を指定できません。ページは再整列されません。';
$lang['admin']['user_tag'] = 'ユーザータグ';
$lang['admin']['add'] = '追加';
$lang['admin']['CSS'] = 'CSS';
$lang['admin']['about'] = '情報';
$lang['admin']['action'] = 'アクション';
$lang['admin']['actionstatus'] = 'アクション/ステータス';
$lang['admin']['active'] = '有効';
$lang['admin']['addcontent'] = '新規コンテンツの追加';
$lang['admin']['cantremove'] = '削除できません。';
$lang['admin']['changepermissions'] = 'パーミッションを変更';
$lang['admin']['changepermissionsconfirm'] = '注意してください\\n\\nこの処理によりモジュールを構成する全ファイルがウェブサーバにより書き込み可能となります。\\n処理を継続しますか?';
$lang['admin']['contentadded'] = 'コンテンツは正常にデータベースに追加されました。';
$lang['admin']['contentupdated'] = 'コンテンツは正常に更新されました。';
$lang['admin']['contentdeleted'] = 'コンテンツは正常にデータベースから削除されました。';
$lang['admin']['success'] = '成功';
$lang['admin']['addcss'] = '新規スタイルシートの追加';
$lang['admin']['addgroup'] = '新規グループの追加';
$lang['admin']['additionaleditors'] = '追加エディター';
$lang['admin']['addtemplate'] = '新規テンプレートの追加';
$lang['admin']['adduser'] = '新規ユーザーの追加';
$lang['admin']['addusertag'] = 'ユーザー定義タグの追加';
$lang['admin']['adminaccess'] = '管理者アクセスへ';
$lang['admin']['adminlog'] = '管理者ログ';
$lang['admin']['adminlogcleared'] = '管理者ログを削除しました。';
$lang['admin']['adminlogempty'] = '管理者ログは存在しません。';
$lang['admin']['adminsystemtitle'] = 'CMS管理システム';
$lang['admin']['adminpaneltitle'] = 'CMS Made Simple管理パネル';
$lang['admin']['advanced'] = '上級';
$lang['admin']['aliasalreadyused'] = 'そのエイリアスは既に他のページで使われています。「オプション」タブ内のページエイリアスを変更して下さい。';
$lang['admin']['aliasmustbelettersandnumbers'] = 'エイリアスは全てローマ字か数字で指定して下さい。';
$lang['admin']['aliasnotaninteger'] = 'エイリアスは数字列は不可です。';
$lang['admin']['allpagesmodified'] = '全てのページを修正しました。';
$lang['admin']['assignments'] = 'ユーザーの割り当て';
$lang['admin']['associationexists'] = 'この結合は既に存在します。';
$lang['admin']['autoinstallupgrade'] = '自動インストール/アップグレード';
$lang['admin']['back'] = 'メニューに戻る';
$lang['admin']['backtoplugins'] = 'プラグインリストに戻る';
$lang['admin']['cancel'] = 'キャンセル';
$lang['admin']['cantchmodfiles'] = 'いくつかのファイルでパーミッションを変更できません。';
$lang['admin']['cantremovefiles'] = 'ファイルの削除で問題がありました(パーミッションの可能性?)';
$lang['admin']['confirmcancel'] = '変更を破棄しますか?全ての変更を破棄する場合OKをクリックして下さい。キャンセルをクリックで編集を継続します。';
$lang['admin']['canceldescription'] = '変更を破棄';
$lang['admin']['clearadminlog'] = '管理者ログをクリア';
$lang['admin']['code'] = 'コード';
$lang['admin']['confirmdefault'] = 'デフォルトページに設定しますか?';
$lang['admin']['confirmdeletedir'] = 'このディレクトリと含まれるファイルやフォルダを削除しますか?';
$lang['admin']['content'] = 'コンテンツ';
$lang['admin']['contentmanagement'] = 'コンテンツ管理';
$lang['admin']['contenttype'] = 'コンテンツタイプ';
$lang['admin']['copy'] = 'コピー';
$lang['admin']['copytemplate'] = 'テンプレートをコピー';
$lang['admin']['create'] = '作成';
$lang['admin']['createnewfolder'] = '新しいフォルダを作成';
$lang['admin']['cssalreadyused'] = 'そのCSS名は既に使用されています';
$lang['admin']['cssmanagement'] = 'CSS管理';
$lang['admin']['currentassociations'] = '現在の結合';
$lang['admin']['currentdirectory'] = '現在のディレクトリ';
$lang['admin']['currentgroups'] = '現在のグループ';
$lang['admin']['currentpages'] = '現在のページ';
$lang['admin']['currenttemplates'] = '現在のテンプレート';
$lang['admin']['currentusers'] = '現在のユーザー';
$lang['admin']['custom404'] = 'カスタム404エラーメッセージ';
$lang['admin']['database'] = 'データベース';
$lang['admin']['databaseprefix'] = 'データベースプレフィックス';
$lang['admin']['databasetype'] = 'データベースタイプ';
$lang['admin']['date'] = '日付';
$lang['admin']['default'] = 'デフォルト';
$lang['admin']['delete'] = '削除';
$lang['admin']['deleteconfirm'] = '本当に削除しますか?';
$lang['admin']['deleteassociationconfirm'] = 'Are you sure you want to delete association to - %s - ?';
$lang['admin']['deletecss'] = 'CSSを削除';
$lang['admin']['dependencies'] = '依存関係';
$lang['admin']['description'] = '概要';
$lang['admin']['directoryexists'] = 'このディレクトリはすでに存在します。';
$lang['admin']['down'] = '下へ';
$lang['admin']['edit'] = '編集';
$lang['admin']['editconfiguration'] = 'コンフィギュレーションを編集';
$lang['admin']['editcontent'] = 'コンテンツを編集';
$lang['admin']['editcss'] = 'スタイルシートを編集';
$lang['admin']['editcsssuccess'] = 'スタイルシートを更新しました。';
$lang['admin']['editgroup'] = 'グループを編集';
$lang['admin']['editpage'] = 'ページを編集';
$lang['admin']['edittemplate'] = 'テンプレートを編集';
$lang['admin']['edittemplatesuccess'] = 'テンプレートを更新しました。';
$lang['admin']['edituser'] = 'ユーザーを編集';
$lang['admin']['editusertag'] = 'ユーザー定義タグを編集';
$lang['admin']['usertagadded'] = 'ユーザー定義タグは正常に追加されました。';
$lang['admin']['usertagupdated'] = 'ユーザー定義タグは正常に更新されました。';
$lang['admin']['usertagdeleted'] = 'ユーザー定義タグは正常に削除されました。';
$lang['admin']['email'] = 'Eメールアドレス';
$lang['admin']['errorattempteddowngrade'] = 'このモジュールをインストールするとダウングレードすることになります。操作を中止します。';
$lang['admin']['errorchildcontent'] = 'コンテンツはまだ中に子コンテンツがあります。それらを先に削除して下さい。';
$lang['admin']['errorcopyingtemplate'] = 'テンプレートのコピーに失敗';
$lang['admin']['errorcouldnotparsexml'] = 'XMLファイル解析に失敗。.tar.gzや.zipファイルではなく.xmlファイルをアップロードしていることを確認して下さい。';
$lang['admin']['errorcreatingassociation'] = '結合の作成に失敗';
$lang['admin']['errorcssinuse'] = 'このスタイルシートはあるテンプレートかページで使用されています。これらの結合を先に削除して下さい。';
$lang['admin']['errordefaultpage'] = '現在のデフォルトページを削除できません。他のページを先に設定して下さい。';
$lang['admin']['errordeletingassociation'] = '結合の削除でエラー';
$lang['admin']['errordeletingcss'] = 'CSSの削除に失敗';
$lang['admin']['errordeletingdirectory'] = 'ディレクトリを削除できません。パーミッションのエラーが考えられるので確認して下さい。';
$lang['admin']['errordeletingfile'] = 'ファイルを削除できません。パーミッションのエラーが考えられるので確認して下さい。';
$lang['admin']['errordirectorynotwritable'] = 'ディレクトリ書き込み権限がありません。';
$lang['admin']['errordtdmismatch'] = 'XML ファイルでDTDバージョンが見当たらないか、適合しません。';
$lang['admin']['errorgettingcssname'] = 'スタイルシート名の取得に失敗';
$lang['admin']['errorgettingtemplatename'] = 'テンプレート名の取得に失敗';
$lang['admin']['errorincompletexml'] = 'XMLファイルが不完全もしくは無効です。';
$lang['admin']['uploadxmlfile'] = 'モジュールをXMLファイルからインストール';
$lang['admin']['cachenotwritable'] = 'キャッシュフォルダは書き込み可能ではありません。キャッシュのクリアはできません。 tmp/cacheフォルダを読み取り/書き込み/実行可能なフルパーミッションに変更して下さい(chmod 777)。';
$lang['admin']['modulesnotwritable'] = 'モジュールフォルダは書き込み可能ではありません。XMLファイルをアップロードしてモジュールをインストールする場合は、モジュールフォルダを読み取り/書き込み/実行可能なフルパーミッションに変更してください(chmod 777)。';
$lang['admin']['noxmlfileuploaded'] = 'ファイルはアップロードされていません。XMLを介するモジュールのインストールには、ご利用のコンピューターから.xmlファイルのモジュールをアップロードする必要があります。';
$lang['admin']['errorinsertingcss'] = 'スタイルシートのデータベースへの追加に失敗しました';
$lang['admin']['errorinsertinggroup'] = 'グループのデータベースへの追加に失敗しました。';
$lang['admin']['errorinsertingtag'] = 'ユーザータグのデータベースへの追加に失敗しました。';
$lang['admin']['errorinsertingtemplate'] = 'テンプレートのデータベースへの追加に失敗しました。';
$lang['admin']['errorinsertinguser'] = 'ユーザーのデータベースへの追加に失敗しました。';
$lang['admin']['errornofilesexported'] = 'xmlへファイルのエクスポートに失敗';
$lang['admin']['errorretrievingcss'] = 'スタイルシートの検索に失敗しました。';
$lang['admin']['errorretrievingtemplate'] = 'テンプレートの検索に失敗しました。';
$lang['admin']['errortemplateinuse'] = 'このテンプレートはまだ利用されてます。まずはその設定を削除して下さい。';
$lang['admin']['errorupdatingcss'] = 'スタイルシートの更新に失敗';
$lang['admin']['errorupdatinggroup'] = 'グループの更新に失敗';
$lang['admin']['errorupdatingpages'] = 'ページの更新に失敗';
$lang['admin']['errorupdatingtemplate'] = 'テンプレートの更新に失敗';
$lang['admin']['errorupdatinguser'] = 'ユーザーの更新に失敗';
$lang['admin']['errorupdatingusertag'] = 'ユーザータグに更新に失敗';
$lang['admin']['erroruserinuse'] = 'このユーザーはまだコンテンツページを所有しています。削除する前に、他のユーザーへ所有権を変更して下さい。';
$lang['admin']['eventhandlers'] = 'イベント';
$lang['admin']['editeventhandler'] = 'イベントハンドラを編集';
$lang['admin']['eventhandlerdescription'] = 'イベントとユーザータグを結合';
$lang['admin']['export'] = 'エクスポート';
$lang['admin']['event'] = 'イベント';
$lang['admin']['false'] = 'false';
$lang['admin']['settrue'] = 'trueに設定';
$lang['admin']['filecreatedirnodoubledot'] = 'ディレクトリは\'..\'を含むことができません。';
$lang['admin']['filecreatedirnoname'] = '名前のないディレクトリは作成できません。';
$lang['admin']['filecreatedirnoslash'] = 'ディレクトリは\'/\'或いは\'\'を含むことができません。';
$lang['admin']['filemanagement'] = 'ファイル管理';
$lang['admin']['filename'] = 'ファイル名';
$lang['admin']['filenotuploaded'] = 'ファイルがアップロードできません。パーミッションのエラーが考えられるので確認して下さい。';
$lang['admin']['filesize'] = 'ファイルサイズ';
$lang['admin']['firstname'] = 'ファイル名';
$lang['admin']['groupmanagement'] = 'グループ管理';
$lang['admin']['grouppermissions'] = 'グループパーミッション';
$lang['admin']['handler'] = 'ハンドラ(ユーザー定義タグ)';
$lang['admin']['headtags'] = 'ヘッダータグ';
$lang['admin']['help'] = 'ヘルプ';
$lang['admin']['new_window'] = '新しいウィンドウ';
$lang['admin']['helpwithsection'] = '%sヘルプ';
$lang['admin']['helpaddtemplate'] = '<p>テンプレートはサイトのコンテンツの見栄えや雰囲気を設定します。</p><p>ここでレイアウトを作成し、スタイルシートセクションにCSSを追加すると、サイトの様々な要素を設定できます。</p>';
$lang['admin']['helplisttemplate'] = '<p>このページでは、テンプレートの作成、編集、削除を行います。</p><p>新しいテンプレートを作成するには、<u>"新しいテンプレートの追加</u>"ボタンをクリックして下さい。</p><p>同じテンプレートを全てのページに適用する場合は、<u>全てのコンテンツの適用</u>リンクをクリックして下さい。</p><p>テンプレートを複製する場合は、<u>コピー</u>アイコンをクリックし、その後新しく複製されたテンプレートに名前を付けます。</p>';
$lang['admin']['home'] = 'ホーム';
$lang['admin']['homepage'] = 'ホームページ';
$lang['admin']['hostname'] = 'ホスト名';
$lang['admin']['idnotvalid'] = 'IDが有効ではありません。';
$lang['admin']['imagemanagement'] = 'イメージ管理';
$lang['admin']['informationmissing'] = '情報が見つかりません。';
$lang['admin']['install'] = 'インストール';
$lang['admin']['invalidcode'] = '有効でないコードが入力されました。';
$lang['admin']['illegalcharacters'] = 'Invalid characters in field %s.';
$lang['admin']['invalidcode_brace_missing'] = '括弧の左右不一致';
$lang['admin']['invalidtemplate'] = 'テンプレートが有効ではありません。';
$lang['admin']['itemid'] = '項目ID';
$lang['admin']['itemname'] = '項目名';
$lang['admin']['language'] = '言語';
$lang['admin']['lastname'] = 'ラストネーム';
$lang['admin']['logout'] = 'ログアウト';
$lang['admin']['loginprompt'] = '管理パネルへアクセスするために、正しいユーザ証明を入力してください。';
$lang['admin']['logintitle'] = 'CMS Made Simple管理ログイン';
$lang['admin']['menutext'] = 'メニューテキスト';
$lang['admin']['missingparams'] = 'あるパラメーターが不明か不正です。';
$lang['admin']['modifygroupassignments'] = 'グループ割り当ての修正';
$lang['admin']['moduleabout'] = '%sモジュールに関して';
$lang['admin']['modulehelp'] = '%sモジュールのヘルプ';
$lang['admin']['msg_defaultcontent'] = 'Add code here that should appear as the default content of all new pages';
$lang['admin']['msg_defaultmetadata'] = 'Add code here that should appear in the metadata section of all new pages';
$lang['admin']['wikihelp'] = 'コミュニティーヘルプ';
$lang['admin']['moduleinstalled'] = 'モジュールはすでにインストールされています。';
$lang['admin']['moduleinterface'] = '%sインターフェース';
$lang['admin']['modules'] = 'モジュール';
$lang['admin']['move'] = '移動';
$lang['admin']['name'] = '名前';
$lang['admin']['needpermissionto'] = 'この機能を利用するには\'%s\'パーミッションが必要です。';
$lang['admin']['needupgrade'] = 'アップグレードが必要';
$lang['admin']['newtemplatename'] = '新しいテンプレート名';
$lang['admin']['next'] = '次へ';
$lang['admin']['noaccessto'] = '%sへのアクセスがありません';
$lang['admin']['nocss'] = 'スタイルシートがありません';
$lang['admin']['noentries'] = 'エントリーがありません';
$lang['admin']['nofieldgiven'] = '%sが指定されていません!';
$lang['admin']['nofiles'] = 'ファイルがありません';
$lang['admin']['nopasswordmatch'] = 'パスワードが一致しません';
$lang['admin']['norealdirectory'] = 'ディレクトリが指定されていません';
$lang['admin']['norealfile'] = 'ファイルが指定されていません';
$lang['admin']['notinstalled'] = 'インストールされていません';
$lang['admin']['overwritemodule'] = '既存のモジュールを上書き';
$lang['admin']['owner'] = '所有者';
$lang['admin']['pagealias'] = 'ページエイリアス';
$lang['admin']['pagedefaults'] = 'デフォルトページ';
$lang['admin']['pagedefaultsdescription'] = 'Set default values for new pages';
$lang['admin']['parent'] = '親ページ';
$lang['admin']['password'] = 'パスワード';
$lang['admin']['passwordagain'] = 'パスワード(再確認)';
$lang['admin']['permission'] = 'パーミッション';
$lang['admin']['permissions'] = 'パーミッション';
$lang['admin']['permissionschanged'] = 'パーミッションが更新されました。';
$lang['admin']['pluginabout'] = '%sタグに関して';
$lang['admin']['pluginhelp'] = '%sタグのヘルプ';
$lang['admin']['pluginmanagement'] = 'プラグイン管理';
$lang['admin']['prefsupdated'] = '環境設定が更新されました。';
$lang['admin']['preview'] = 'プレビュー';
$lang['admin']['previewdescription'] = '変更をプレビュー';
$lang['admin']['previous'] = '前';
$lang['admin']['remove'] = '削除';
$lang['admin']['removeconfirm'] = 'このアクションによりモジュールを構成するファイルを完全に削除します。\\n処理を続行しますか?';
$lang['admin']['removecssassociation'] = 'スタイルシート結合を削除';
$lang['admin']['saveconfig'] = '設定の保存';
$lang['admin']['send'] = '送信';
$lang['admin']['setallcontent'] = '全てのページに適用';
$lang['admin']['setallcontentconfirm'] = '全てのページにこのテンプレートを適用しますか?';
$lang['admin']['showinmenu'] = 'メニューに表示';
$lang['admin']['showsite'] = 'サイトを表示';
$lang['admin']['sitedownmessage'] = 'サイトダウンメッセージ';
$lang['admin']['siteprefs'] = '全体設定';
$lang['admin']['status'] = '状態';
$lang['admin']['stylesheet'] = 'スタイルシート';
$lang['admin']['submit'] = 'OK';
$lang['admin']['submitdescription'] = '変更へ保存';
$lang['admin']['tags'] = 'タグ';
$lang['admin']['template'] = 'テンプレート';
$lang['admin']['templateexists'] = 'このテンプレート名は既に使われています。';
$lang['admin']['templatemanagement'] = 'テンプレート管理';
$lang['admin']['title'] = 'タイトル';
$lang['admin']['tools'] = 'ツール';
$lang['admin']['true'] = 'true';
$lang['admin']['setfalse'] = 'falseに設定';
$lang['admin']['type'] = 'タイプ';
$lang['admin']['typenotvalid'] = 'タイプが誤っています。';
$lang['admin']['uninstall'] = 'アンイントール';
$lang['admin']['uninstallconfirm'] = 'このモジュールをアンインストールしますか?モジュール名：';
$lang['admin']['up'] = '上へ';
$lang['admin']['upgrade'] = 'アップグレード';
$lang['admin']['upgradeconfirm'] = 'これをアップグレードしますか?';
$lang['admin']['uploadfile'] = 'ファイルのアップロード';
$lang['admin']['url'] = 'URL';
$lang['admin']['useadvancedcss'] = '上級スタイルシート管理を使う';
$lang['admin']['user'] = 'ユーザー';
$lang['admin']['userdefinedtags'] = 'ユーザー定義タグ';
$lang['admin']['usermanagement'] = 'ユーザー管理';
$lang['admin']['username'] = 'ユーザー名';
$lang['admin']['usernameincorrect'] = 'ユーザー名、或いはパスワードが誤っています。';
$lang['admin']['userprefs'] = 'ユーザー環境設定';
$lang['admin']['usersassignedtogroup'] = 'ユーザーは%sグループに割り当てられました。';
$lang['admin']['usertagexists'] = 'この名前のタグは既に存在します。他を選んでください。';
$lang['admin']['usewysiwyg'] = 'コンテンツにウィジウィグエディタを使う';
$lang['admin']['version'] = 'バージョン';
$lang['admin']['view'] = 'サイトの確認';
$lang['admin']['welcomemsg'] = 'ようこそ %s';
$lang['admin']['directoryabove'] = '上位階層のディレクトリ';
$lang['admin']['nodefault'] = '選択されたデフォルトはありません。';
$lang['admin']['blobexists'] = 'この全体共通コンテンツブロック名は既に存在します。';
$lang['admin']['blobmanagement'] = '全体共通コンテンツブロック管理';
$lang['admin']['errorinsertingblob'] = '全体共通コンテンツブロックの追加に失敗しました';
$lang['admin']['addhtmlblob'] = '全体共通コンテンツブロックの追加';
$lang['admin']['edithtmlblob'] = '全体共通コンテンツブロックの編集';
$lang['admin']['edithtmlblobsuccess'] = 'Global content block updated';
$lang['admin']['tagtousegcb'] = 'Tag to Use this Block';
$lang['admin']['gcb_wysiwyg'] = 'GCB WYSIWYGを有効にする。';
$lang['admin']['gcb_wysiwyg_help'] = '全体共通コンテンツを編集する際に、WYSIWYGエディタを有効にする。 ';
$lang['admin']['filemanager'] = 'ファイル管理';
$lang['admin']['imagemanager'] = 'イメージ管理';
$lang['admin']['encoding'] = 'エンコーディング';
$lang['admin']['clearcache'] = 'キャッシュのクリア';
$lang['admin']['clear'] = 'クリア';
$lang['admin']['cachecleared'] = 'キャッシュがクリアされました';
$lang['admin']['apply'] = '適用';
$lang['admin']['applydescription'] = '変更を保存し、編集を続ける';
$lang['admin']['none'] = 'なし';
$lang['admin']['wysiwygtouse'] = '利用するウィジウィグエディタの選択';
$lang['admin']['syntaxhighlightertouse'] = '使用するハイライトの構文を選択';
$lang['admin']['hasdependents'] = '依存があります';
$lang['admin']['missingdependency'] = '依存先が不明';
$lang['admin']['minimumversion'] = '最低バージョン';
$lang['admin']['minimumversionrequired'] = '必要な最低CMSMSバージョン';
$lang['admin']['maximumversion'] = '最高バージョン';
$lang['admin']['maximumversionsupported'] = 'サポートされる最高CMSMSバージョン';
$lang['admin']['depsformodule'] = '%sモジュールの依存情報';
$lang['admin']['installed'] = 'インストール済み';
$lang['admin']['author'] = '作成者';
$lang['admin']['changehistory'] = '履歴の変更';
$lang['admin']['moduleerrormessage'] = '%sモジュールへのエラーメッセージ';
$lang['admin']['moduleupgradeerror'] = 'モジュールのアップグレード時にエラーがありました。';
$lang['admin']['moduleinstallmessage'] = '%sモジュールへのメッセージのインストール';
$lang['admin']['moduleuninstallmessage'] = '%sモジュールへのメッセージへのアンインストール';
$lang['admin']['admintheme'] = '管理画面テーマ';
$lang['admin']['addstylesheet'] = 'スタイルシートの追加';
$lang['admin']['editstylesheet'] = 'スタイルシートの編集';
$lang['admin']['addcssassociation'] = 'スタイルシート結合を追加';
$lang['admin']['attachstylesheet'] = 'このスタイルシートを結合';
$lang['admin']['attachtemplate'] = 'このテンプレートに結合';
$lang['admin']['main'] = 'メイン';
$lang['admin']['pages'] = 'ページ';
$lang['admin']['page'] = 'Page';
$lang['admin']['files'] = 'ファイル';
$lang['admin']['layout'] = 'レイアウト';
$lang['admin']['usersgroups'] = 'ユーザー&グループ';
$lang['admin']['extensions'] = '拡張機能';
$lang['admin']['preferences'] = '環境設定';
$lang['admin']['admin'] = 'サイト管理';
$lang['admin']['viewsite'] = 'サイトの確認';
$lang['admin']['templatecss'] = 'テンプレートをスタイルシートに割り当て';
$lang['admin']['plugins'] = 'プラグイン';
$lang['admin']['movecontent'] = 'ページの移動';
$lang['admin']['module'] = 'モジュール';
$lang['admin']['usertags'] = 'ユーザー定義タグ';
$lang['admin']['htmlblobs'] = '全体共通コンテンツブロック';
$lang['admin']['adminhome'] = '管理ホーム';
$lang['admin']['liststylesheets'] = 'スタイルシート';
$lang['admin']['preferencesdescription'] = 'サイト全体の環境設定';
$lang['admin']['adminlogdescription'] = '管理者の作業履歴を表示.';
$lang['admin']['mainmenu'] = 'メインメニュー';
$lang['admin']['users'] = 'ユーザー';
$lang['admin']['usersdescription'] = 'ユーザーの管理';
$lang['admin']['groups'] = 'グループ';
$lang['admin']['groupsdescription'] = 'グループの管理';
$lang['admin']['groupassignments'] = 'グループの割り当て';
$lang['admin']['groupassignmentdescription'] = 'ユーザーのグループへの割り当て';
$lang['admin']['groupperms'] = 'グループパーミッション';
$lang['admin']['grouppermsdescription'] = 'グループ毎のパーミッションとアクセス権限を設定';
$lang['admin']['pagesdescription'] = 'ページやコンテンツの追加、管理';
$lang['admin']['htmlblobdescription'] = '全体共通コンテンツブロックはページやテンプレート上に置けるコンテンツ群です。';
$lang['admin']['templates'] = 'テンプレート';
$lang['admin']['templatesdescription'] = 'ここでテンプレートの追加や編集を行います。テンプレートはサイトの見栄えや雰囲気を作り出します。';
$lang['admin']['stylesheets'] = 'スタイルシート';
$lang['admin']['stylesheetsdescription'] = 'スタイルシート管理はテンプレートとは別にスタイルシート（CSS）を管理するのに便利です。';
$lang['admin']['filemanagerdescription'] = 'ファイルのアップロードと管理';
$lang['admin']['imagemanagerdescription'] = 'イメージのアップロード、編集、削除';
$lang['admin']['moduledescription'] = 'モジュールはCMS Made Simpleに様々なカスタム機能を提供';
$lang['admin']['tagdescription'] = 'コンテンツやテンプレートに追加可能な便利なタグ';
$lang['admin']['usertagdescription'] = 'ブラウザから簡単に独自タグの作成、修正';
$lang['admin']['installdirwarning'] = '<em><strong>注意:</strong></em>インストールディレクトリがまだ存在します。完全に削除して下さい。';
$lang['admin']['subitems'] = 'サブ項目';
$lang['admin']['extensionsdescription'] = 'モジュール、タグ、その他の拡張機能。';
$lang['admin']['usersgroupsdescription'] = '項目に関連したユーザーとグループ。';
$lang['admin']['layoutdescription'] = 'サイトレイアウトオプション。';
$lang['admin']['admindescription'] = 'サイト管理機能。';
$lang['admin']['contentdescription'] = 'コンテンツを追加、編集';
$lang['admin']['enablecustom404'] = 'カスタム404エラーメッセージの利用';
$lang['admin']['enablesitedown'] = 'サイトダウンメッセージの利用';
$lang['admin']['bookmarks'] = 'ブックマーク';
$lang['admin']['user_created'] = '作成されたユーザー';
$lang['admin']['forums'] = 'フォーラム';
$lang['admin']['wiki'] = 'Wiki';
$lang['admin']['irc'] = 'IRC';
$lang['admin']['module_help'] = 'モジュールヘルプ';
$lang['admin']['managebookmarks'] = 'ブックマークを管理';
$lang['admin']['editbookmark'] = 'ブックマークを編集';
$lang['admin']['addbookmark'] = 'ブックマークを追加';
$lang['admin']['recentpages'] = '最近のページ';
$lang['admin']['groupname'] = 'グループ名';
$lang['admin']['selectgroup'] = 'グループの選択';
$lang['admin']['updateperm'] = 'パーミッションの更新';
$lang['admin']['admincallout'] = '管理用ショートカット';
$lang['admin']['showbookmarks'] = '管理ブックマークの表示';
$lang['admin']['hide_help_links'] = 'ヘルプリンクを隠す';
$lang['admin']['hide_help_links_help'] = 'Wiki、ページヘッダーのモジュールヘルプへのリンクを使用不可にするにはここをチェック';
$lang['admin']['showrecent'] = '最近使ったページの表示';
$lang['admin']['attachtotemplate'] = 'テンプレートへスタイルシートの添付';
$lang['admin']['attachstylesheets'] = 'スタイルシートの添付';
$lang['admin']['indent'] = '階層明確化の為のページリストインデント';
$lang['admin']['adminindent'] = 'コンテンツの表示';
$lang['admin']['contract'] = 'セクションの折りたたみ';
$lang['admin']['expand'] = 'セクションの展開';
$lang['admin']['expandall'] = '全セクションの展開';
$lang['admin']['contractall'] = '全セクションの折りたたみ';
$lang['admin']['menu_bookmarks'] = '[+]';
$lang['admin']['globalconfig'] = '全体設定';
$lang['admin']['adminpaging'] = 'ページリストで一ページに表示するコンテンツアイテム数';
$lang['admin']['nopaging'] = '全てのアイテムの表示';
$lang['admin']['myprefs'] = '環境設定';
$lang['admin']['myprefsdescription'] = 'ここで好みの管理者画面にカスタマイズできます。';
$lang['admin']['myaccount'] = 'マイアカウント';
$lang['admin']['myaccountdescription'] = 'ここで個人アカウントの詳細を更新できます。';
$lang['admin']['adminprefs'] = 'ユーザー環境設定';
$lang['admin']['adminprefsdescription'] = 'サイト管理の為の環境設定';
$lang['admin']['managebookmarksdescription'] = 'ここで管理ブックマークを管理します。';
$lang['admin']['options'] = 'オプション';
$lang['admin']['langparam'] = 'パラメーターは画面上で表示する言語を指定するのに使われます。但し、モジュールによりサポートされなかったり、必要としない場合があります。';
$lang['admin']['parameters'] = 'パラメーター';
$lang['admin']['mediatype'] = 'メディアタイプ';
$lang['admin']['mediatype_'] = '未設定 : 全ておいてに影響 ';
$lang['admin']['mediatype_all'] = 'all : 全てのデバイスに対応';
$lang['admin']['mediatype_aural'] = 'aural : 音声合成装置向け';
$lang['admin']['mediatype_braille'] = 'braille : 点字触知デバイス向け';
$lang['admin']['mediatype_embossed'] = 'embossed : ページ点字プリンタ向け';
$lang['admin']['mediatype_handheld'] = 'handheld : 携帯用デバイス向け';
$lang['admin']['mediatype_print'] = 'print :　ページ、不鮮明なものや印刷プレビューモードでのスクリーン上で見られる文書向け';
$lang['admin']['mediatype_projection'] = 'projection : プロジェクターやOHPシートなどの投影表示向け';
$lang['admin']['mediatype_screen'] = 'screen : カラーコンピュータースクリーン向け';
$lang['admin']['mediatype_tty'] = 'tty : テレタイプやターミナルのような固定ピッチ表示のメディア向け';
$lang['admin']['mediatype_tv'] = 'tv : テレビタイプのデバイス向け';
$lang['admin']['assignmentchanged'] = 'グループの割り当てが更新されました。';
$lang['admin']['stylesheetexists'] = 'スタイルシートは存在します。';
$lang['admin']['errorcopyingstylesheet'] = 'スタイルシートのコピーにエラー';
$lang['admin']['copystylesheet'] = 'スタイルシートをコピー';
$lang['admin']['newstylesheetname'] = '新しいスタイルシート名';
$lang['admin']['target'] = '対象';
$lang['admin']['xml'] = 'XML';
$lang['admin']['xmlmodulerepository'] = 'ModuleRepository soapサーバーのURL';
$lang['admin']['metadata'] = 'メタデータ';
$lang['admin']['globalmetadata'] = 'グローバルメタデータ';
$lang['admin']['titleattribute'] = 'タイトル属性';
$lang['admin']['tabindex'] = 'タブインデックス';
$lang['admin']['accesskey'] = 'アクセスキー';
$lang['admin']['sitedownwarning'] = '<strong>注意:</strong> 現在サイトに「メンテナンス中のためサイトダウン」というメッセージが表示されています。%sファイルを削除してください。';
$lang['admin']['deletecontent'] = 'コンテンツを削除';
$lang['admin']['deletepages'] = 'ページを削除しますか？';
$lang['admin']['selectall'] = '全てを選択';
$lang['admin']['selecteditems'] = '選択項目';
$lang['admin']['inactive'] = '非アクティブ';
$lang['admin']['deletetemplates'] = 'テンプレートを削除';
$lang['admin']['templatestodelete'] = 'テンプレートを削除します。';
$lang['admin']['wontdeletetemplateinuse'] = 'テンプレートは使用されているので削除されません。';
$lang['admin']['deletetemplate'] = 'スタイルシートを削除';
$lang['admin']['stylesheetstodelete'] = 'スタイルシートを削除します。';
$lang['admin']['sitename'] = 'サイト名';
$lang['admin']['siteadmin'] = 'サイト管理者';
$lang['admin']['images'] = 'イメージ管理';
$lang['admin']['blobs'] = '全体共通コンテンツブロック';
$lang['admin']['groupmembers'] = 'グループ割り当て';
$lang['admin']['troubleshooting'] = '(トラブルシューティング)';
$lang['admin']['event_desc_loginpost'] = '管理者パネルへログイン後に送信';
$lang['admin']['event_desc_logoutpost'] = '管理者パネルからログアウト後に送信';
$lang['admin']['event_desc_adduserpre'] = '新しいユーザー作成前に送信';
$lang['admin']['event_desc_adduserpost'] = '新しいユーザー作成後に送信';
$lang['admin']['event_desc_edituserpre'] = 'ユーザーの編集を保存前に送信';
$lang['admin']['event_desc_edituserpost'] = 'ユーザーの編集の保存後に送信';
$lang['admin']['event_desc_deleteuserpre'] = 'システムからユーザー削除前に送信';
$lang['admin']['event_desc_deleteuserpost'] = 'システムからユーザー削除後に送信';
$lang['admin']['event_desc_addgrouppre'] = '新しいグループ作成前に送信';
$lang['admin']['event_desc_addgrouppost'] = '新しいグループ作成後に送信';
$lang['admin']['event_desc_changegroupassignpre'] = 'Sent before group assignments are saved';
$lang['admin']['event_desc_changegroupassignpost'] = 'Sent after group assignments are saved';
$lang['admin']['event_desc_editgrouppre'] = 'グループの編集の保存前に送信';
$lang['admin']['event_desc_editgrouppost'] = 'グループの編集の保存後の送信';
$lang['admin']['event_desc_deletegrouppre'] = 'システムからグループ削除前に送信';
$lang['admin']['event_desc_deletegrouppost'] = 'システムからグループ削除後に送信';
$lang['admin']['event_desc_addstylesheetpre'] = '新しいスタイルシート作成前に送信';
$lang['admin']['event_desc_addstylesheetpost'] = '新しいスタイルシート作成後に送信';
$lang['admin']['event_desc_editstylesheetpre'] = 'スタイルシートの編集の保存前に送信';
$lang['admin']['event_desc_editstylesheetpost'] = 'スタイルシートの編集の保存後に送信';
$lang['admin']['event_desc_deletestylesheetpre'] = 'システムからスタイルシート削除前に送信';
$lang['admin']['event_desc_deletestylesheetpost'] = 'システムからスタイルシート削除後に送信';
$lang['admin']['event_desc_addtemplatepre'] = '新しいテンプレート作成前に送信';
$lang['admin']['event_desc_addtemplatepost'] = '新しいテンプレート作成後に送信';
$lang['admin']['event_desc_edittemplatepre'] = 'テンプレートの編集の保存前に送信';
$lang['admin']['event_desc_edittemplatepost'] = 'テンプレートの編集の保存後に送信';
$lang['admin']['event_desc_deletetemplatepre'] = 'システムからテンプレート削除前に送信';
$lang['admin']['event_desc_deletetemplatepost'] = 'システムからテンプレート削除後に送信';
$lang['admin']['event_desc_templateprecompile'] = 'テンプレートをSmartyで実行前に送信';
$lang['admin']['event_desc_templatepostcompile'] = 'テンプレートをSmartyで実行後に送信';
$lang['admin']['event_desc_addglobalcontentpre'] = '新しい全体共通コンテンツブロックの作成前に送信';
$lang['admin']['event_desc_addglobalcontentpost'] = '新しい全体共通コンテンツブロックの作成後に送信';
$lang['admin']['event_desc_editglobalcontentpre'] = '全体共通コンテンツブロックの編集の保存前に送信';
$lang['admin']['event_desc_editglobalcontentpost'] = '全体共通コンテンツブロックの編集の保存後に送信';
$lang['admin']['event_desc_deleteglobalcontentpre'] = '新しい全体共通コンテンツブロック作成前に送信';
$lang['admin']['event_desc_deleteglobalcontentpost'] = '新しい全体共通コンテンツブロック作成前に送信';
$lang['admin']['event_desc_globalcontentprecompile'] = '全体共通コンテンツブロックをSmartyで実行前に送信';
$lang['admin']['event_desc_globalcontentpostcompile'] = '全体共通コンテンツブロックをSmartyで実行後に送信';
$lang['admin']['event_desc_contenteditpre'] = 'コンテンツの編集の保存前に送信';
$lang['admin']['event_desc_contenteditpost'] = 'コンテンツの編集の保存後に送信';
$lang['admin']['event_desc_contentdeletepre'] = 'システムからコンテンツ削除前に送信';
$lang['admin']['event_desc_contentdeletepost'] = 'システムからコンテンツ削除後に送信';
$lang['admin']['event_desc_contentstylesheet'] = 'ブラウザへスタイルシート反映前に送信';
$lang['admin']['event_desc_contentprecompile'] = 'コンテンツをSmartyで実行前に送信';
$lang['admin']['event_desc_contentpostcompile'] = 'コンテンツをSmartyで実行後に送信';
$lang['admin']['event_desc_contentpostrender'] = 'ブラウザへ出力HTML反映前に送信';
$lang['admin']['event_desc_smartyprecompile'] = 'コンテンツのSmarty処理前に送信';
$lang['admin']['event_desc_smartypostcompile'] = 'コンテンツのSmarty処理後に送信';
$lang['admin']['event_help_loginpost'] = '<p>管理者パネルへログイン後に送信</p>
<h4>パラメーター</h4>
<ul>
<li>\'user\' - 該当するユーザーオブジェクト</li>
</ul>
';
$lang['admin']['event_help_logoutpost'] = '<p>管理者パネルへログアウト後に送信</p>
<h4>パラメーター</h4>
<ul>
<li>\'user\' - 該当するユーザーオブジェクト</li>
</ul>
';
$lang['admin']['event_help_adduserpre'] = '<p>新しいユーザー作成前に送信</p>
<h4>パラメーター</h4>
<ul>
<li>\'user\' - 該当するユーザーオブジェクト</li>
</ul>
';
$lang['admin']['event_help_adduserpost'] = '<p>新しいユーザー作成後に送信</p>
<h4>パラメーター</h4>
<ul>
<li>\'user\' - 該当するユーザーオブジェクト</li>
</ul>
';
$lang['admin']['event_help_edituserpre'] = '<p>ユーザーの編集の保存前に送信</p>
<h4>パラメーター</h4>
<ul>
<li>\'user\' - 該当するユーザーオブジェクト</li>
</ul>
';
$lang['admin']['event_help_edituserpost'] = '<p>ユーザーの編集の保存後に送信</p>
<h4>パラメーター</h4>
<ul>
<li>\'user\' - 該当するユーザーオブジェクト</li>
</ul>
';
$lang['admin']['event_help_deleteuserpre'] = '<p>システムからユーザー削除前に送信</p>
<h4>パラメーター</h4>
<ul>
<li>\'user\' - 該当するユーザーオブジェクト</li>
</ul>
';
$lang['admin']['event_help_deleteuserpost'] = '<p>システムからユーザー削除後に送信</p>
<h4>パラメーター</h4>
<ul>
<li>\'user\' - 該当するユーザーオブジェクト</li>
</ul>
';
$lang['admin']['event_help_addgrouppre'] = '<p>新しいグループ作成前に送信</p>
<h4>パラメーター</h4>
<ul>
<li>\'group\' - 該当するグループオブジェクト</li>
</ul>
';
$lang['admin']['event_help_addgrouppost'] = '<p>新しいグループ作成後に送信</p>
<h4>パラメーター</h4>
<ul>
<li>\'group\' - 該当するグループオブジェクト</li>
</ul>
';
$lang['admin']['event_help_changegroupassignpre'] = '<p>Sent before group assignments are saved.</p>
<h4>Parameters></h4>
<ul>
<li>\'group\' - Reference to the group object.</li>
<li>\'users\' - Array of references to user objects belonging to the group.</li>
';
$lang['admin']['event_help_changegroupassignpost'] = '<p>Sent after group assignments are saved.</p>
<h4>Parameters></h4>
<ul>
<li>\'group\' - Reference to the affected group object.</li>
<li>\'users\' - Array of references to user objects now belonging to the affected group.</li>
';
$lang['admin']['event_help_editgrouppre'] = '<p>グループの編集の保存前に送信</p>
<h4>パラメーター</h4>
<ul>
<li>\'group\' - 該当するグループオブジェクト</li>
</ul>
';
$lang['admin']['event_help_editgrouppost'] = '<p>グループの編集の保存後に送信</p>
<h4>パラメーター</h4>
<ul>
<li>\'group\' - 該当するグループオブジェクト</li>
</ul>
';
$lang['admin']['event_help_deletegrouppre'] = '<p>システムからグループ削除前に送信</p>
<h4>パラメーター</h4>
<ul>
<li>\'group\' - 該当するグループオブジェクト</li>
</ul>
';
$lang['admin']['event_help_deletegrouppost'] = '<p>システムからグループ削除後に送信</p>
<h4>パラメーター</h4>
<ul>
<li>\'group\' - 該当するグループオブジェクト</li>
</ul>
';
$lang['admin']['event_help_addstylesheetpre'] = '<p>新しいスタイルシート作成前に送信</p>
<h4>パラメーター</h4>
<ul>
<li>\'stylesheet\' - 該当するスタイルシートオブジェクト</li>
</ul>
';
$lang['admin']['event_help_addstylesheetpost'] = '<p>新しいスタイルシート作成後に送信</p>
<h4>パラメーター</h4>
<ul>
<li>\'stylesheet\' - 該当するスタイルシートオブジェクト</li>
</ul>
';
$lang['admin']['event_help_editstylesheetpre'] = '<p>スタイルシートの編集の保存前に送信</p>
<h4>パラメーター</h4>
<ul>
<li>\'stylesheet\' - 該当するスタイルシートオブジェクト</li>
</ul>
';
$lang['admin']['event_help_editstylesheetpost'] = '<p>スタイルシートの編集の保存前に送信</p>
<h4>パラメーター</h4>
<ul>
<li>\'stylesheet\' - 該当するスタイルシートオブジェクト</li>
</ul>
';
$lang['admin']['event_help_deletestylesheetpre'] = '<p>システムからスタイルシート削除前に送信</p>
<h4>パラメーター</h4>
<ul>
<li>\'stylesheet\' - 該当するスタイルシートオブジェクト</li>
</ul>
';
$lang['admin']['event_help_deletestylesheetpost'] = '<p>システムからスタイルシート削除後に送信</p>
<h4>パラメーター</h4>
<ul>
<li>\'stylesheet\' - 該当するスタイルシートオブジェクト</li>
</ul>
';
$lang['admin']['event_help_addtemplatepre'] = '<p>新しいテンプレート作成前に送信</p>
<h4>パラメーター</h4>
<ul>
<li>\'template\' - 該当するテンプレートオブジェクト</li>
</ul>
';
$lang['admin']['event_help_addtemplatepost'] = '<p>新しいテンプレート作成後に送信</p>
<h4>パラメーター</h4>
<ul>
<li>\'template\' - 該当するテンプレートオブジェクト</li>
</ul>
';
$lang['admin']['event_help_edittemplatepre'] = '<p>テンプレートの編集の保存前に送信</p>
<h4>パラメーター</h4>
<ul>
<li>\'template\' - 該当するテンプレートオブジェクト</li>
</ul>
';
$lang['admin']['event_help_edittemplatepost'] = '<p>テンプレートの編集の保存前に送信</p>
<h4>パラメーター</h4>
<ul>
<li>\'template\' - 該当するテンプレートオブジェクト</li>
</ul>
';
$lang['admin']['event_help_deletetemplatepre'] = '<p>システムからテンプレート削除前に送信</p>
<h4>パラメーター</h4>
<ul>
<li>\'template\' - 該当するテンプレートオブジェクト</li>
</ul>
';
$lang['admin']['event_help_deletetemplatepost'] = '<p>システムからテンプレート削除後に送信</p>
<h4>パラメーター</h4>
<ul>
<li>\'template\' - 該当するテンプレートオブジェクト</li>
</ul>
';
$lang['admin']['event_help_templateprecompile'] = '<p>テンプレートをSmartyで実行前に送信</p>
<h4>パラメーター</h4>
<ul>
<li>\'template\' - 該当するテンプレートテキスト</li>
</ul>
';
$lang['admin']['event_help_templatepostcompile'] = '<p>テンプレートをSmartyで実行後に送信</p>
<h4>パラメーター</h4>
<ul>
<li>\'template\' - 該当するテンプレートテキスト</li>
</ul>
';
$lang['admin']['event_help_addglobalcontentpre'] = '<p>新しい全体共通コンテンツブロック作成前に送信</p>
<h4>パラメーター</h4>
<ul>
<li>\'global_content\' - 該当する全体共通コンテンツブロックオブジェクト</li>
</ul>
';
$lang['admin']['event_help_addglobalcontentpost'] = '<p>新しい全体共通コンテンツブロック作成後に送信</p>
<h4>パラメーター</h4>
<ul>
<li>\'global_content\' - 該当する全体共通コンテンツブロックオブジェクト</li>
</ul>
';
$lang['admin']['event_help_editglobalcontentpre'] = '<p>全体共通コンテンツの編集の保存前に送信</p>
<h4>パラメーター</h4>
<ul>
<li>\'global_content\' - 該当する全体共通コンテンツブロックオブジェクト</li>
</ul>
';
$lang['admin']['event_help_editglobalcontentpost'] = '<p>全体共通コンテンツの編集の保存後に送信</p>
<h4>パラメーター</h4>
<ul>
<li>\'global_content\' - 該当する全体共通コンテンツブロックオブジェクト</li>
</ul>
';
$lang['admin']['event_help_deleteglobalcontentpre'] = '<p>システムから全体共通コンテンツ削除前に送信</p>
<h4>パラメーター</h4>
<ul>
<li>\'global_content\' - 該当する全体共通コンテンツブロックオブジェクト</li>
</ul>
';
$lang['admin']['event_help_deleteglobalcontentpost'] = '<p>システムから全体共通コンテンツ削除後に送信</p>
<h4>パラメーター</h4>
<ul>
<li>\'global_content\' - 該当する全体共通コンテンツブロックオブジェクト</li>
</ul>
';
$lang['admin']['event_help_globalcontentprecompile'] = '<p>全体共通コンテンツをSmartyで実行前に送信</p>
<h4>パラメーター</h4>
<ul>
<li>\'global_content\' - 該当する全体共通コンテンツブロックオブジェクト</li>
</ul>
';
$lang['admin']['event_help_globalcontentpostcompile'] = '<p>全体共通コンテンツをSmartyで実行後に送信</p>
<h4>パラメーター</h4>
<ul>
<li>\'global_content\' - 該当する全体共通コンテンツブロックオブジェクト</li>
</ul>
';
$lang['admin']['event_help_contenteditpre'] = '<p>コンテンツの編集の保存前に送信</p>
<h4>パラメーター</h4>
<ul>
<li>\'global_content\' - 該当するコンテンツオブジェクト</li>
</ul>
';
$lang['admin']['event_help_contenteditpost'] = '<p>全体共通コンテンツの編集の保存後に送信</p>
<h4>パラメーター</h4>
<ul>
<li>\'content\' - 該当するコンテンツオブジェクト</li>
</ul>
';
$lang['admin']['event_help_contentdeletepre'] = '<p>システムからコンテンツ削除前に送信</p>
<h4>パラメーター</h4>
<ul>
<li>\'content\' - 該当するコンテンツオブジェクト</li>
</ul>
';
$lang['admin']['event_help_contentdeletepost'] = '<p>システムからコンテンツ削除後に送信</p>
<h4>パラメーター</h4>
<ul>
<li>\'content\' - 該当するコンテンツオブジェクト</li>
</ul>
';
$lang['admin']['event_help_contentstylesheet'] = '<p>ブラウザへスタイルシート反映前に送信</p>
<h4>パラメーター</h4>
<ul>
<li>\'content\' - 該当するスタイルシートオブジェクト</li>
</ul>
';
$lang['admin']['event_help_contentprecompile'] = '<p>コンテンツをSmartyで実行前に送信</p>
<h4>パラメーター</h4>
<ul>
<li>\'content\' - 該当するコンテンツテキスト</li>
</ul>
';
$lang['admin']['event_help_contentpostcompile'] = '<p>コンテンツをSmartyで実行後に送信</p>
<h4>パラメーター</h4>
<ul>
<li>\'content\' - 該当するコンテンツテキスト</li>
</ul>
';
$lang['admin']['event_help_contentpostrender'] = '<p>ブラウザへcombined ｈｔｍｌ反映前に送信</p>
<h4>パラメーター</h4>
<ul>
<li>\'content\' - 該当するhtmlテキスト</li>
</ul>
';
$lang['admin']['event_help_smartyprecompile'] = '<p>コンテンツのSmarty処理前に送信</p>
<h4>パラメーター</h4>
<ul>
<li>\'content\' - 該当するテキスト</li>
</ul>
';
$lang['admin']['event_help_smartypostcompile'] = '<p>コンテンツのSmarty処理後に送信</p>
<h4>パラメーター</h4>
<ul>
<li>\'content\' - 該当するテキスト</li>
</ul>
';
$lang['admin']['filterbymodule'] = 'モジュールによるフィルタ';
$lang['admin']['showall'] = '全て表示';
$lang['admin']['core'] = 'コア';
$lang['admin']['defaultpagecontent'] = 'デフォルトページコンテンツ';
$lang['admin']['file_url'] = 'Link to file (instead of URL)';
$lang['admin']['no_file_url'] = 'None (Use URL Above)';
$lang['admin']['defaultparentpage'] = 'デフォルト親ページ';
$lang['admin']['error_udt_name_whitespace'] = 'Error: User Defined Tags cannot have spaces in their name.';
$lang['admin']['warning_safe_mode'] = '<strong><em>WARNING:</em></strong> PHP Safe mode is enabled.  This will cause difficulty with files uploaded via the web browser interface, including images, theme and module XML packages.  You are advised to contact your site administrator to see about disabling safe mode.';
$lang['admin']['test'] = 'テスト';
$lang['admin']['results'] = '結果';
$lang['admin']['untested'] = 'Not Tested';
$lang['admin']['unknown'] = 'Unknown';
$lang['admin']['download'] = 'ダウンロード';
$lang['admin']['frontendwysiwygtouse'] = 'Frontend wysiwyg';
$lang['admin']['all_groups'] = 'すべてのグループ';
$lang['admin']['error_type'] = 'エラータイプ';
$lang['admin']['contenttype_errorpage'] = 'エラーページ';
$lang['admin']['errorpagealreadyinuse'] = 'Error Code Already in Use';
$lang['admin']['404description'] = 'ページが見つかりません。';
$lang['admin']['usernotfound'] = 'ユーザが見つかりません。';
$lang['admin']['passwordchange'] = 'Please, provide the new password';
$lang['admin']['recoveryemailsent'] = 'Email sent to recorded address.  Please check your inbox for further instructions.';
$lang['admin']['errorsendingemail'] = 'There was an error sending the email.  Contact your administrator.';
$lang['admin']['passwordchangedlogin'] = 'Password changed.  Please log in using the new credentials.';
$lang['admin']['nopasswordforrecovery'] = 'No email address set for this user.  Password recovery is not possible.  Please contact your administrator.';
$lang['admin']['lostpw'] = 'パスワードを忘れた？';
$lang['admin']['lostpwemailsubject'] = '[%s] Password Recovery';
$lang['admin']['lostpwemail'] = 'You are recieving this e-mail because a request has been made to change the (%s) password associated with this user account (%s).  If you would like to reset the password for this account simply click on the link below or paste it into the url field on your favorite browser:
%s

If you feel this is incorrect or made in error, simply ignore the email and nothing will change.';
$lang['admin']['utma'] = '156861353.3775144692282817500.1248653923.1248653923.1248653923.1';
$lang['admin']['utmb'] = '156861353.1.10.1248653923';
$lang['admin']['utmc'] = '156861353';
$lang['admin']['utmz'] = '156861353.1248653923.1.1.utmcsr=google|utmccn=(organic)|utmcmd=organic|utmctr=cmsms';
?>