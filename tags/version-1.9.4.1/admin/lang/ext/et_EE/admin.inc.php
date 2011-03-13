<?php
$lang['admin']['session_use_cookies'] = 'Sessions are allowed to use Cookies';
$lang['admin']['errorgettingcontent'] = 'Could not retrieve information for the specified content object';
$lang['admin']['errordeletingcontent'] = 'Error deleting content (either this page has children or is the default content)';
$lang['admin']['invalidemail'] = 'Sisestaud emaili aadress on vale';
$lang['admin']['info_deletepages'] = 'M&auml;rge: &otilde;iguste piirangute t&otilde;ttu ei pruugi m&otilde;ned lehed, mis sa kustutamiseks valisid, allolevas nimekirjas avalduda';
$lang['admin']['info_pagealias'] = 'M&auml;&auml;ra unikaalne alias selle lehe jaoks.';
$lang['admin']['info_autoalias'] = 'Kui see v&auml;li on t&uuml;hi, luuakse alias automaatselt.';
$lang['admin']['invalidparent'] = 'Sa pead valima vanema lehe (v&otilde;ta &uuml;hendust oma administraatoriga, kui sa ei n&auml;e seda valikut).';
$lang['admin']['forgotpwprompt'] = 'Enter your admin username.  An email will then be sent to the email address associated with that username with new login information';
$lang['admin']['info_basic_attributes'] = 'This field allows you to specify which content properties that users without the &quot;Manage All Content&quot; permission are allowed to edit.';
$lang['admin']['basic_attributes'] = 'P&otilde;hilised omadused';
$lang['admin']['no_permission'] = 'You have not permission to perform that function.';
$lang['admin']['bulk_success'] = 'Bulk operation was successfully updated.';
$lang['admin']['no_bulk_performed'] = 'No bulk operation performed.';
$lang['admin']['info_preview_notice'] = 'Warning: This preview panel behaves much like a browser window allowing you to navigate away from the initially previewed page. However, if you do that, you may experience unexpected behaviour. If you navigate away from the initial display and return, you may not see the un-committed content until you make a change to the content in the main tab, and then reload this tab. When adding content, if you navigate away from this page, you will be unable to return, and must refresh this panel.';
$lang['admin']['sitedownexcludes'] = 'Exclude these Addresses from Sitedown Messages';
$lang['admin']['info_sitedownexcludes'] = 'This parameter allows listing a comma separated list of ip addresses or networks that should not be subject to the sitedown mechanism.  This allows administrators to work on a site whilst anonymous visitors receive a sitedown message.<br/><br/>Addresses can be specified in the following formats:<br/>
1. xxx.xxx.xxx.xxx -- (exact IP address)<br/>
2. xxx.xxx.xxx.[yyy-zzz] -- (IP address range)<br/>
3. xxx.xxx.xxx.xxx/nn -- (nnn = number of bits, cisco style.  i.e:  192.168.0.100/24 = entire 192.168.0 class C subnet)';
$lang['admin']['setup'] = 'Advanced Setup';
$lang['admin']['handle_404'] = 'Custom 404 Handling';
$lang['admin']['sitedown_settings'] = 'Sitedown Settings';
$lang['admin']['general_settings'] = '&Uuml;ldised seaded';
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
$lang['admin']['destinationnotfound'] = 'The selected page could not be found or is invalid';
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
$lang['admin']['image'] = 'Pilt';
$lang['admin']['thumbnail'] = 'Pisipilt';
$lang['admin']['searchable'] = 'See leht on otsitav';
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
  <li><em>(optional)</em> urlonly - output only the url to the image, ignoring all parameters like id, name, width, height, etc.</li>
</ul>';
$lang['admin']['error_udt_name_chars'] = 'A valid UDT name starts with a letter or underscore, followed by any number of letters, numbers, or underscores.';
$lang['admin']['errorupdatetemplateallpages'] = 'Mall ei ole aktiivne';
$lang['admin']['hidefrommenu'] = 'Peida men&uuml;&uuml;st';
$lang['admin']['settemplate'] = 'Sea mall';
$lang['admin']['text_settemplate'] = 'Sea valitud lehed teisele mallile';
$lang['admin']['cachable'] = 'Puhverdatav';
$lang['admin']['noncachable'] = 'Mitte puhverdatav';
$lang['admin']['copy_from'] = 'Kopeeri l&auml;htekohast';
$lang['admin']['copy_to'] = 'kopeeri sihtkohta';
$lang['admin']['copycontent'] = 'Kopeeri sisuelement';
$lang['admin']['md5_function'] = 'md5 funktsioon';
$lang['admin']['tempnam_function'] = 'tempnam funktsioon';
$lang['admin']['register_globals'] = 'PHP register_globals';
$lang['admin']['output_buffering'] = 'PHP output_buffering';
$lang['admin']['disable_functions'] = 'disable_functions PHP-s';
$lang['admin']['xml_function'] = 'Basic XML (expat) support';
$lang['admin']['magic_quotes_gpc'] = 'Magic quotes for Get/Post/Cookie';
$lang['admin']['magic_quotes_gpc_on'] = 'Single-quote, double quote and backslash are escaped automatically. You can experience problems when saving templates';
$lang['admin']['magic_quotes_runtime'] = 'Magic quotes in runtime';
$lang['admin']['magic_quotes_runtime_on'] = 'Most functions that return data will have quotes escaped with a backslash. You can experience problems';
$lang['admin']['file_get_contents'] = 'Test file_get_contents';
$lang['admin']['check_ini_set'] = 'Test ini_set';
$lang['admin']['check_ini_set_off'] = 'You may have difficulty with some functionality without this capability. This test may fail if safe_mode is enabled';
$lang['admin']['file_uploads'] = 'Faili &uuml;leslaadimised';
$lang['admin']['test_remote_url'] = 'Test for remote URL';
$lang['admin']['test_remote_url_failed'] = 'You will probably not be able to open a file on a remote web server.';
$lang['admin']['test_allow_url_fopen_failed'] = 'When allow url fopen is disabled you will not be able to accessing URL object like file using the ftp or http protocol.';
$lang['admin']['connection_error'] = 'Outgoing http connections do not appear to work! There is a firewall or some ACL for external connections?. This will result in module manager, and potentially other functionality failing.';
$lang['admin']['remote_connection_timeout'] = '&Uuml;hendus aegus!';
$lang['admin']['search_string_find'] = '&Uuml;hendus OK!';
$lang['admin']['connection_failed'] = '&Uuml;hendus eba&otilde;nnestus!';
$lang['admin']['remote_response_ok'] = 'Kaugvastus: OK!';
$lang['admin']['remote_response_404'] = 'Kaugvastus: ei leitud!';
$lang['admin']['remote_response_error'] = 'Kaugvastus: viga!';
$lang['admin']['notifications_to_handle'] = 'Sul on <b>%d</b> problemaatilisi teateid';
$lang['admin']['notification_to_handle'] = 'Sul on <b>%d</b> problemaatiline teade';
$lang['admin']['notifications'] = 'Teated';
$lang['admin']['dashboard'] = 'Vaata armatuurlauda';
$lang['admin']['ignorenotificationsfrommodules'] = 'Ignoreeri teateid nendelt moodulitelt';
$lang['admin']['admin_enablenotifications'] = 'Allow users to view notifications<br/><em>(notifications will be displayed on all admin pages)</em>';
$lang['admin']['enablenotifications'] = 'Enable user notifications in the admin section';
$lang['admin']['test_check_open_basedir_failed'] = 'Open basedir restrictions are in effect. You may have difficulty with some addon functionality with this restriction';
$lang['admin']['config_writable'] = 'config.php writable. It is more safe if you change permission to read-only';
$lang['admin']['caution'] = 'Hoiatus';
$lang['admin']['create_dir_and_file'] = 'Checking if the httpd process can create a file inside of a directory it created';
$lang['admin']['os_session_save_path'] = 'No check because OS path';
$lang['admin']['unlimited'] = 'Piiramatu';
$lang['admin']['open_basedir'] = 'PHP Open Basedir';
$lang['admin']['open_basedir_active'] = 'No check because open basedir active';
$lang['admin']['invalid'] = 'Vale';
$lang['admin']['checksum_passed'] = 'All checksums match those in the uploaded file';
$lang['admin']['error_retrieving_file_list'] = 'Error retrieving file list';
$lang['admin']['files_checksum_failed'] = 'Files could not be checksummed';
$lang['admin']['failure'] = 'T&otilde;rge';
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
$lang['admin']['page_metadata'] = 'Page Specific Metadata';
$lang['admin']['pagedata_codeblock'] = 'Smarty data or logic that is specific to this page';
$lang['admin']['error_uploadproblem'] = 'Viga ilmnes &uuml;leslaadimisel';
$lang['admin']['error_nofileuploaded'] = '&Uuml;htegi faili ei laetud &uuml;les';
$lang['admin']['files_failed'] = 'Failid ei l&auml;binud md5sum kontrolli';
$lang['admin']['files_not_found'] = 'Faili ei leitud';
$lang['admin']['info_generate_cksum_file'] = 'This function will allow you to generate a checksum file and save it on your local computer for later validation.  This should be done just prior to rolling out the website, and/or after any upgrades, or major modifications.';
$lang['admin']['info_validation'] = 'This function will compare the checksums found in the uploaded file with the files on the current installation.  It can assist in finding problems with uploads, or exactly what files were modified if your system has been hacked.  A checksum file is generated for each release of CMS Made simple from version 1.4 on.';
$lang['admin']['download_cksum_file'] = 'Download Checksum File';
$lang['admin']['perform_validation'] = 'Perform Validation';
$lang['admin']['upload_cksum_file'] = 'Upload Checksum File';
$lang['admin']['checksumdescription'] = 'Validate the integrity of CMS files by comparing against known checksums';
$lang['admin']['system_verification'] = 'S&uuml;steemi vastavust&otilde;endamine';
$lang['admin']['extra1'] = 'Extra Page Attribute 1';
$lang['admin']['extra2'] = 'Extra Page Attribute 2';
$lang['admin']['extra3'] = 'Extra Page Attribute 3';
$lang['admin']['start_upgrade_process'] = 'Alusta uuendamise protsessi';
$lang['admin']['warning_upgrade'] = '<em><strong>Warning:</strong></em> CMSMS is in need of an upgrade.';
$lang['admin']['warning_upgrade_info1'] = 'You are now running schema version %s. and you need to be upgraded to version %s';
$lang['admin']['warning_upgrade_info2'] = 'Please click the following link: %s.';
$lang['admin']['warning_mail_settings'] = 'Your mail settings have not been configured.  This could interfere with the ability of your website to send email messages.  You should go to <a href="%s">Extensions >> CMSMailer</a> and configure the mail settings with the information provided by your host.';
$lang['admin']['view_page'] = 'Vaata seda lehek&uuml;lge uues aknas';
$lang['admin']['off'] = 'V&auml;ljas';
$lang['admin']['on'] = 'Sees';
$lang['admin']['invalid_test'] = 'Invalid test param value!';
$lang['admin']['copy_paste_forum'] = 'View Text Report <em>(suitable for copying into forum posts)</em>';
$lang['admin']['permission_information'] = '&Otilde;iguste informatsioon';
$lang['admin']['server_os'] = 'Serveri operatsioonis&uuml;steem';
$lang['admin']['server_api'] = 'Serveri API';
$lang['admin']['server_software'] = 'Serveri tarkvara';
$lang['admin']['server_information'] = 'Serveri informatsioon';
$lang['admin']['session_save_path'] = 'Sessiooni salvestuse tee';
$lang['admin']['max_execution_time'] = 'Maksimaalne sooritamisaeg';
$lang['admin']['gd_version'] = 'GD versioon';
$lang['admin']['upload_max_filesize'] = 'Maksimaalne &uuml;leslaadimise suurus';
$lang['admin']['post_max_size'] = 'Maksimaalne postituse suurus';
$lang['admin']['memory_limit'] = 'PHP effektiivne m&auml;lulimiit';
$lang['admin']['server_db_type'] = 'Serveri andmebaas';
$lang['admin']['server_db_version'] = 'Serveri andmebaasi versioon';
$lang['admin']['phpversion'] = 'Praegune PHP versioon';
$lang['admin']['safe_mode'] = 'PHP Safe Mode';
$lang['admin']['php_information'] = 'PHP informatsioon';
$lang['admin']['cms_install_information'] = 'CMS paigalduse informatsioon';
$lang['admin']['cms_version'] = 'CMS versioon';
$lang['admin']['installed_modules'] = 'Paigaldatud moodulid';
$lang['admin']['config_information'] = 'Konfiguratsiooni informatsioon';
$lang['admin']['systeminfo_copy_paste'] = 'Please copy and paste this selected text into your forum posting';
$lang['admin']['help_systeminformation'] = 'The information displayed below is collected from a variety of locations, and summarized here so that you may be able to conveniently find some of the information required when trying to diagnose a problem or request help with your CMS Made Simple installation.';
$lang['admin']['systeminfo'] = 'S&uuml;steemi informatsioon';
$lang['admin']['systeminfodescription'] = 'Display various pieces of information about your system that may be useful in diagnosing problems';
$lang['admin']['welcome_user'] = 'Tere';
$lang['admin']['itsbeensincelogin'] = 'M&ouml;&ouml;dunud on %s sinu viimasest sisselogimisest';
$lang['admin']['days'] = 'p&auml;eva';
$lang['admin']['day'] = 'p&auml;ev';
$lang['admin']['hours'] = 'tundi';
$lang['admin']['hour'] = 'tund';
$lang['admin']['minutes'] = 'minutit';
$lang['admin']['minute'] = 'minut';
$lang['admin']['help_css_max_age'] = 'This parameter should be set relatively high for static sites, and should be set to 0 for site development';
$lang['admin']['css_max_age'] = 'Maximum amount of time (seconds) stylesheets can be cached in the browser';
$lang['admin']['error'] = 'Viga';
$lang['admin']['clear_version_check_cache'] = 'Clear any cached version check information on submit';
$lang['admin']['new_version_available'] = '<em>Notice:</em> A new version of CMS Made Simple is available.  Please notify your administrator.';
$lang['admin']['info_urlcheckversion'] = 'If this url is the word &quot;none&quot; no checks will be made.<br/>An empty string will result in a default URL being used.';
$lang['admin']['urlcheckversion'] = 'Check for new CMS versions using this URL';
$lang['admin']['master_admintheme'] = 'Default Administration Theme (for the login page and new user accounts)';
$lang['admin']['contenttype_separator'] = 'Eraldaja';
$lang['admin']['contenttype_sectionheader'] = 'L&otilde;igu p&auml;is';
$lang['admin']['contenttype_link'] = 'V&auml;line link';
$lang['admin']['contenttype_content'] = 'Sisu';
$lang['admin']['contenttype_pagelink'] = 'Sisemise lehe link';
$lang['admin']['nogcbwysiwyg'] = 'Keela WYSIWYG redaktor globaalsetel sisuplokkidel';
$lang['admin']['destination_page'] = 'Sihtleht';
$lang['admin']['additional_params'] = 'Lisa parameetrid';
$lang['admin']['help_function_current_date'] = '	<h3>What does this do?</h3>
	<p>Prints the current date and time.  If no format is given, it will default to a format similar to &#039;Jan 01, 2004&#039;.</p>
	<h3>How do I use it?</h3>
	<p>Just insert the tag into your template/page like: <code>{current_date format=&quot;%A %d-%b-%y %T %Z&quot;}</code></p>
	<h3>What parameters does it take?</h3>
	<ul>
		<li><em>(optional)</em>format - Date/Time format using parameters from php&#039;s strftime function.  See <a href="http://php.net/strftime" target="_blank">here</a> for a parameter list and information.</li>
		<li><em>(optional)</em>ucword - If true return uppercase the first character of each word.</li>
	</ul>';
$lang['admin']['help_function_valid_xhtml'] = '<h3>What does this do?</h3>
<p>Returns a link to the w3c HTML validator.</p>
<h3>How do I use it?</h3>
<p>Just insert the tag into your template/page like: <code>{valid_xhtml}</code></p>
<h3>What parameters does it take?</h3>
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
    </ul>';
$lang['admin']['help_function_valid_css'] = '<h3>What does this do?</h3>
<p>Returns a link to the w3c CSS validator.</p>
<h3>How do I use it?</h3>
<p>Just insert the tag into your template/page like: <code>{valid_css}</code></p>
<h3>What parameters does it take?</h3>
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
    </ul>';
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
    <li><em>(optional)</em>templateid - If templateid is defined, this will return stylesheets associated with that template instead of the current one.</li>
	</ul>';
$lang['admin']['help_function_stopexpandcollapse'] = '	<h3>What does this do?</h3>
	<p>Uses Javascript to enable content in an area to be expandable and collapsable on a mouse click.</p>
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
	<p>Enables content to be expandable and collapsable. Like the following:</p>
	<a href="#expand1" onClick="expandcontent(&#039;expand1&#039;)" style="cursor:hand; cursor:pointer">Click here for more info</a:gt;<span id=&quot;expand1&quot; class=&quot;expand&quot;><a name="help"> - Here is all the info you will ever need...</a></span>

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
        <ul>
            <li><em>(optional)</em> <tt>class</tt> - A css_class for the ul-tag which includes the complete sitemap.</li>
            <li><em>(optional)</em> <tt>start_element</tt> - The hierarchy of your element (ie : 1.2 or 3.5.1 for example). This parameter sets the root of the menu. You can use the page alias instead of hierarchy.</li>
            <li><em>(optional)</em> <tt>number_of_levels</tt> - An integer, the number of levels you want to show in your menu. Should be set to 2 using a delimiter.</li>
            <li><em>(optional)</em> <tt>delimiter</tt> - Text to separate entries not on depth 1 of the sitemap (i.e. 1.1, 1.2). This is helpful for showing entries on depth 2 beside each other (using css display:inline).</li>
            <li><em>(optional)</em> <tt>initial 1/0</tt> - If set to 1, begin also the first entries not on depth 1 with a delimiter (i.e. 1.1, 2.1).</li>
            <li><em>(optional)</em> <tt>relative 1/0</tt> - We are not going to show current page (with the sitemap) - we&#039;ll show only his childs.</li>
            <li><em>(optional)</em> <tt>showall 1/0</tt> - We are going to show all pages if showall is enabled, else we&#039;ll only show pages with active menu entries.</li>
            <li><em>(optional)</em> <tt>add_elements</tt> - A comma separated list of alias names which will be added to the shown pages with active menu entries (showall not enabled).</li>
        </ul>';
$lang['admin']['help_function_adsense'] = '	<h3>What does this do?</h3>
	<p>Google adsense is a popular advertising program for websites. This tag will take the basic parameters that would be provided by the adsense program and puts them in a easy to use tag that makes your templates look much cleaner.  See <a href="http://www.google.com/adsense" target="_blank">here</a> for more details on adsense.</p>
	<h3>How do I use it?</h3>
	<p>First, sign up for a google adsense account and get the parameters for your ad. Then just use the tag in your page/template like so: <code>{adsense ad_client=&quot;pub-random#&quot; ad_width=&quot;120&quot; ad_height=&quot;600&quot; ad_format=&quot;120x600_as&quot;}</code></p>
	<h3>What parameters does it take?</h3>
	<p>All parameters are optional, though skipping one might not necessarily made the ad work right.  Options are:</p>
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
	</ul>';
$lang['admin']['help_function_sitename'] = '        <h3>What does this do?</h3>
        <p>Shows the name of the site.  This is defined during install and can be modified in the Global Settings section of the admin panel.</p>
        <h3>How do I use it?</h3>
        <p>Just insert the tag into your template/page like: <code>{sitename}</code></p>
        <h3>What parameters does it take?</h3>
	<p><em>(optional)</em> assign (string) - Assign the results to a smarty variable with that name.</p>';
$lang['admin']['help_function_search'] = '	<h3>What does this do?</h3>
	<p>This is actually just a wrapper tag for the Search module to make the tag syntax easier. 
	Instead of having to use <code>{cms_module module=&#039;Search&#039;}</code> you can now just use <code>{search}</code> to insert the module in a template.
	</p>
	<h3>How do I use it?</h3>
	<p>Just put <code>{search}</code> in a template where you want the search input box to appear. For help about the Search module, please refer to the Search module help.</p>';
$lang['admin']['help_function_root_url'] = '	<h3>What does this do?</h3>
	<p>Prints the root url location for the site.</p>
	<h3>How do I use it?</h3>
	<p>Just insert the tag into your template/page like: <code>{root_url}</code></p>
	<h3>What parameters does it take?</h3>
	<p>None at this time.</p>';
$lang['admin']['help_function_repeat'] = '  <h3>What does this do?</h3>
  <p>Repeats a specified sequence of characters, a specified number of times</p>
  <h3>How do I use it?</h3>
  <p>Insert a tag similar to the following into your template/page, like this: <code>{repeat string=&#039;repeat this &#039; times=&#039;3&#039;}</code></p>
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
	 <li><p><em>(optional)</em> number=&#039;10&#039; - Number of updated pages to show.</p><p>Example: {recently_updated number=&#039;15&#039;}</p></li>
 	 <li><p><em>(optional)</em> leadin=&#039;Last changed&#039; - Text to show left of the modified date.</p><p>Example: {recently_updated leadin=&#039;Last Changed&#039;}</p></li>
 	 <li><p><em>(optional)</em> showtitle=&#039;true&#039; - Shows the titleattribute if it exists as well (true|false).</p><p>Example: {recently_updated showtitle=&#039;true&#039;}</p></li>											 	
	 <li><p><em>(optional)</em> css_class=&#039;some_name&#039; - Warp a div tag with this class around the list.</p><p>Example: {recently_updated css_class=&#039;some_name&#039;}</p></li>											 	
	 <li><p><em>(optional)</em> dateformat=&#039;d.m.y h:m&#039; - default is d.m.y h:m , use the format you whish (php -date- format)</p><p>Example: {recently_updated dateformat=&#039;D M j G:i:s T Y&#039;}</p></li>											 	
	</ul>
	<p>or combined:</p>
	<pre>{recently_updated number=&#039;15&#039; showtitle=&#039;false&#039; leadin=&#039;Last Change: &#039; css_class=&#039;my_changes&#039; dateformat=&#039;D M j G:i:s T Y&#039;}</pre>';
$lang['admin']['help_function_print'] = '	<h3>What does this do?</h3>
	<p>This is actually just a wrapper tag for the Printing module to make the tag syntax easier. 
	Instead of having to use <code>{cms_module module=&#039;Printing&#039;}</code> you can now just use <code>{print}</code> to insert the module on pages and templates.
	</p>
	<h3>How do I use it?</h3>
	<p>Just put <code>{print}</code> on a page or in a template. For help about the Printing module, what parameters it takes etc., please refer to the Printing module help.</p>';
$lang['admin']['help_function_oldprint'] = '	<h3>What does this do?</h3>
	<p>Creates a link to only the content of the page.</p>
	<h3>How do I use it?</h3>
	<p>Just insert the tag into your template/page like: <code>{oldprint}</code><br /></p>
        <h3>What parameters does it take?</h3>
        <ul>
                <li><em>(optional)</em> goback - Set to &quot;true&quot; to show a &quot;Go Back&quot; link on the page to print.</li>
                <li><em>(optional)</em> popup - Set to &quot;true&quot; and page for printing will by opened in new window.</li>
                <li><em>(optional)</em> script - Set to &quot;true&quot; and in print page will by used java script for run print of page.</li>
                <li><em>(optional)</em> showbutton - Set to &quot;true&quot; and will show a printer graphic instead of a text link.</li>
                <li><em>(optional)</em> class - class for the link, defaults to &quot;noprint&quot;.</li>
                <li><em>(optional)</em> text - Text to use instead of &quot;Print This Page&quot; for the print link.</li>
                <li><em>(optional)</em> title - Text to show for title attribute. If blank show text parameter.</li>
                <li><em>(optional)</em> more - Place additional options inside the <a> link.</li>
                <li><em>(optional)</em> src_img - Show this image file. Default images/cms/printbutton.gif.</li>
                <li><em>(optional)</em> class_img - Class of <img> tag if showbutton is sets.</li>
        </ul>
                    <p>Example:</p>
                     <pre>{oldprint text=&quot;Printable Page&quot;}</pre>      
';
$lang['admin']['login_info_title'] = 'Informatsioon';
$lang['admin']['login_info'] = 'Et adminni konsool t&ouml;&ouml;taks korralikult';
$lang['admin']['login_info_params'] = '<ol> 
  <li>K&uuml;psised peavad olema lubatud sinu lehitsejal</li> 
  <li>Javascript peab olema lubatud sinu lehitsejal</li> 
  <li>H&uuml;pikaknad peavad olema lubatud j&auml;rgneva aadressi jaoks:</li> 
</ol>';
$lang['admin']['help_function_news'] = '	<h3>What does this do?</h3>
	<p>This is actually just a wrapper tag for the News module to make the tag syntax easier. 
	Instead of having to use <code>{cms_module module=&#039;News&#039;}</code> you can now just use <code>{news}</code> to insert the module on pages and templates.
	</p>
	<h3>How do I use it?</h3>
	<p>Just put <code>{news}</code> on a page or in a template. For help about the News module, what parameters it takes etc., please refer to the News module help.</p>';
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
	<p>This is actually just a wrapper tag for the Menu Manager module to make the tag syntax easier. 
	Instead of having to use <code>{cms_module module=&#039;MenuManager&#039;}</code> you can now just use <code>{menu}</code> to insert the module on pages and templates.
	</p>
	<h3>How do I use it?</h3>
	<p>Just put <code>{menu}</code> on a page or in a template. For help about the Menu Manager module, what parameters it takes etc., please refer to the Menu Manager module help.</p>';
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
		<em>Is the same as bigPicAltTag, but for the small thumbnail images.</em></li>

		<li><strong>thumbPicTitleTag *</strong><br/>
		<em>Is the same as bigPicTitleTag but for the small thumbnail images.<br/>
		<strong>*Except that after the options you have &#039;... click for a bigger image&#039; 
		or if you do not set this option then you get the default of 
		&#039;Click for a bigger image...&#039;</strong></em></li>
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
	<p>Just insert the tag into your template/page like: <code>{googlepr}</code><br /></p>

	<h3>What parameters does it take?</h3>
	<ul>
		<li><em>(optional)</em> domain - The website to display the pagerank for.</li>
	</ul>';
$lang['admin']['help_function_google_search'] = '	<h3>What does this do?</h3>
	<p>Search&#039;s your website using Google&#039;s search engine.</p>
	<h3>How do I use it?</h3>
	<p>Just insert the tag into your template/page like: <code>{google_search}</code><br />
	<br />
	Note: Google needs to have your website indexed for this to work. You can submit your website to google <a href="http://www.google.com/addurl.html">here</a>.</p>
	<h3>What if I want to change the look of the textbox or button?</h3>
	<p>The look of the textbox and button can be changed via css. The textbox is given an id of textSearch and the button is given an id of buttonSearch.</p>

	<h3>What parameters does it take?</h3>
	<ul>
		<li><em>(optional)</em> domain - This tells google the website domain to search. This script tries to determine this automatically.</li>
		<li><em>(optional)</em> buttonText - The text you want to display on the search button. The default is &quot;Search Site&quot;.</li>
	</ul>';
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
            <li><em>(required)</em>url - the url to be included</li> 
            <li><em>(required)</em>header=true - this will generate the header code for good resizing of the IFRAME.</li>
            <li>(optional)name - an optional name to use for the iframe (instead of myframe).<p>If this option is used, it must be used identically in both calls, i.e: {embed header=true name=foo} and {embed name=foo url=http://www.google.com} calls.</p></li>
        </ul>';
$lang['admin']['help_function_edit'] = '	<h3>What does this do?</h3>
	<p>Creates a link to edit the page</p>
	<h3>How do I use it?</h3>
	<p>Just insert the tag into your template/page like: <code>{edit}</code><br /></p>
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
<p>Now, when you edit a page there will a textarea called &quot;Second Content Block&quot;.</p></li>
		<li><em>(optional)</em>wysiwyg (true/false) - If set to false, then a wysiwyg will never be used while editing this block.  If true, then it acts as normal.  Only works when block parameter is used.</li>
		<li><em>(optional)</em>oneline (true/false) - If set to true, then only one edit line will be shown while editing this block.  If false, then it acts as normal.  Only works when block parameter is used.</li>
<li><em>(optional)</em>size - Applicable only when the oneline option is used this optional parameter allows you to specify the size of the edit field.  The default value is 50.</li>
		<li><em>(optional)</em>default - Allows you to specify default content for this content blocks (additional content blocks only).</li>
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
	<p>This is just a basic tag plugin.  You would insert it into your template or page like so: <code>{cms_versionname}</code></p>
	<h3>What parameters does it take?</h3>
	<p>It takes no parameters.</p>';
$lang['admin']['help_function_cms_version'] = '	<h3>What does this do?</h3>
	<p>This tag is used to insert the current version number of CMS into your template or page.  It doesn&#039;t display any extra besides the version number.</p>
	<h3>How do I use it?</h3>
	<p>This is just a basic tag plugin.  You would insert it into your template or page like so: <code>{cms_version}</code></p>
	<h3>What parameters does it take?</h3>
	<p>It takes no parameters.</p>';
$lang['admin']['about_function_cms_selflink'] = '		<p>Author: Ted Kulp &amp;lt;tedkulp@users.sf.net&amp;gt;</p>
		<p>Version: 1.1</p>
		<p>Modified: Martin B. Vestergaard &amp;lt;mbv@nospam.dk&amp;gt;</p>
		<p>Version: 1.41</p>
		<p>Modified: Russ Baldwin</p>
		<p>Version: 1.42</p>
		<p>Modified: Marcus Bointon &amp;lt;coolbru@users.sf.net&amp;gt;</p>
		<p>Version: 1.43</p>
		<p>Modified: Tatu Wikman &amp;lt;tsw@backspace.fi&amp;gt;</p>
		<p>Version: 1.44</p>
		<p>Modified: Hans Mogren &amp;lt;http://hans.bymarken.net/&amp;gt;</p>
		<p>Version: 1.45</p>

		<p>
		Change History:<br/>
		1.46 - Fixes a problem with too many queries when using the dir=start option.<br/>
		1.45 - Added a new option for &amp;quot;dir&amp;quot;, &amp;quot;up&amp;quot;, for links to the parent page e.g. dir=&amp;quot;up&amp;quot; (Hans Mogren).<br />
		1.44 - Added new parameters &amp;quot;ext&amp;quot; and &amp;quot;ext_info&amp;quot; to allow external links with class=&amp;quot;external&amp;quot; and info text after the link, ugly hack but works thinking about rewriting this(Tatu Wikman)<br />
		1.43 - Added new parameters &amp;quot;image&amp;quot; and &amp;quot;imageonly&amp;quot; to allow attachment of images to be used for page links, either instead of or in addition to text links. (Marcus Bointon)<br />
		1.42 - Added new parameter &amp;quot;anchorlink&amp;quot; and a new option for &amp;quot;dir&amp;quot; namely, &amp;quot;anchor&amp;quot;, for internal page links. e.g. dir=&amp;quot;anchor&amp;quot; anchorlink=&amp;quot;internal_link&amp;quot;. (Russ)<br />
		1.41 - added new parameter &amp;quot;href&amp;quot; (LeisureLarry)<br />
		1.4 - fixed bug next/prev linking to non-content pages. (Thanks Teemu Koistinen for this fix)<br />
		1.3 - added option &amp;quot;more&amp;quot;<br />
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
		<ul>
		<li><em>(optional)</em> <tt>page</tt> - Page ID or alias to link to.</li>
		<li><em>(optional)</em> <tt>dir anchor (internal links)</tt> - New option for an internal page link. If this is used then <tt>anchorlink</tt> should be set to your link. </li> <!-- Russ - 25-04-2006 -->
		<li><em>(optional)</em> <tt>anchorlink</tt> - New paramater for an internal page link. If this is used then <tt>dir =&quot;anchor&quot;</tt> should also be set. No need to add the #, because it is added automatically.</li> <!-- Russ - 25-04-2006 -->
		<li><em>(optional)</em> <tt>urlparam</tt> - Specify additional parameters to the URL.  <strong>Do not use this in conjunction with the <em>anchorlink</em> parameter</strong></li>
		<li><em>(optional)</em> <tt>tabindex =&quot;a value&quot;</tt> - Set a tabindex for the link.</li> <!-- Russ - 22-06-2005 -->
		<li><em>(optional)</em> <tt>dir start/next/prev/up (previous)</tt> - Links to the default start page or the next or previous page, or the parent page (up). If this is used <tt>page</tt> should not be set.</li> <!-- mbv - 21-06-2005 -->
		</ul>
		<strong>Note!</strong> Only one of the above may be used in the same cms_selflink statement!!
		<ul>
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
		<li><em>(optional)</em> <tt>imageonly</tt> - If using an image, whether to suppress display of text links. If you want no text in the link at all, also set lang=0 to suppress the label. <strong>Example:</strong> {cms_selflink dir=&quot;next&quot; image=&quot;next.png&quot; text=&quot;Next&quot; imageonly=1}</li>
		<li><em>(optional)</em> <tt>ext</tt> - For external links, will add class=&quot;external and info text. <strong>warning:</strong> only text, target and title parameters are compatible with this parameter</li>
		<li><em>(optional)</em> <tt>ext_info</tt> - Used together with &quot;ext&quot; defaults to (external link).</li>
        <li><em>(optional)</em> <tt>assign</tt> - Assign the results to the named smarty variable.</li>
		</ul>';
$lang['admin']['about_function_cms_module'] = '	<p>Author: Ted Kulp<tedkulp@users.sf.net></p>
	<p>Version: 1.0</p>
	<p>
	Change History:<br/>
	None
	</p>';
$lang['admin']['help_function_cms_module'] = '	<h3>What does this do?</h3>
	<p>This tag is used to insert modules into your templates and pages. If a module is created to be used as a tag plugin (check it&#039;s help for details), then you should be able to insert it with this tag.</p>
	<h3>How do I use it?</h3>
	<p>It&#039;s just a basic tag plugin.  You would insert it into your template or page like so: <code>{cms_module module=&quot;somemodulename&quot;}</code></p>
	<h3>What parameters does it take?</h3>
	<p>There is only one required parameter.  All other parameters are passed on to the module.</p>
	<ul>
		<li>module - Name of the module to insert.  This is not case sensitive.</li>
	</ul>';
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
<ul>
<li><em>(optional)</em> <tt>delimiter</tt> - Text to seperate entries in the list (default &quot;>>&quot;).</li>
<li><em>(optional)</em> <tt>initial</tt> - 1/0 If set to 1 start the breadcrumbs with a delimiter (default 0).</li>
<li><em>(optional)</em> <tt>root</tt> - Page alias of a page you want to always appear as the first page in
    the list. Can be used to make a page (e.g. the front page) appear to be the root of everything even though it is not.</li>
<li><em>(optional)</em> <tt>root_url</tt> - Override the URL of the root page. Useful for making link be to &#039;/&#039; instead of &#039;/home/&#039;. This requires that the root page be set as the default page.</li>
<li><em>(optional)</em> <tt>classid</tt> - The CSS class for the non current page names, i.e. the first n-1 pages in the list. If the name is a link it is added to the <a href> tags, otherwise it is added to the <span> tags.</li>
<li><em>(optional)</em> <tt>currentclassid</tt> - The CSS class for the <span> tag surrounding the current page name.</li>
<li><em>(optional)</em> <tt>starttext</tt> - Text to append to the front of the breadcrumbs list, something like &quot;You are here&quot;.</li>
</ul>';
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
	<ul>
	<li><tt>anchor</tt> - Where we are linking to.  The part after the #.</li>
	<li><tt>text</tt> - The text to display in the link.</li>
	<li><tt>class</tt> - The class for the link, if any</li>
	<li><tt>title</tt> - The title to display for the link, if any.</li>
	<li><tt>tabindex</tt> - The numeric tabindex for the link, if any.</li>
	<li><tt>accesskey</tt> - The accesskey for the link, if any.</li>
	<li><em>(optional)</em> <tt>onlyhref</tt> - Only display the href and not the entire link. No other options will work</li>
	</ul>';
$lang['admin']['help_function_site_mapper'] = '<h3>What does this do?</h3>
  <p>This is actually just a wrapper tag for the Menu Manager module to make the tag syntax easier, and to simplify creating a sitemap.</p>
<h3>How do I use it?</h3>
  <p>Just put <code>{site_mapper}</code> on a page or in a template. For help about the Menu Manager module, what parameters it takes etc., please refer to the Menu Manager module help.</p>
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
$lang['admin']['of'] = 'kokku';
$lang['admin']['first'] = 'Esimene';
$lang['admin']['last'] = 'Viimane';
$lang['admin']['adminspecialgroup'] = 'Warning: Members of this group automatically have all permissions';
$lang['admin']['disablesafemodewarning'] = 'Disable admin safe mode warning';
$lang['admin']['allowparamcheckwarnings'] = 'Allow parameter checks to create warning messages';
$lang['admin']['date_format_string'] = 'Date Format String';
$lang['admin']['date_format_string_help'] = '<em>strftime</em> formatted date format string.  Try googling &#039;strftime&#039;';
$lang['admin']['last_modified_at'] = 'Viimati muudetud';
$lang['admin']['last_modified_by'] = 'Viimati muutis';
$lang['admin']['read'] = 'Loetav';
$lang['admin']['write'] = 'Kirjutatav';
$lang['admin']['execute'] = 'T&auml;idetav';
$lang['admin']['group'] = 'Grupp';
$lang['admin']['other'] = 'Muu';
$lang['admin']['event_desc_moduleupgraded'] = 'Saadetud p&auml;rast mooduli uuendamist.';
$lang['admin']['event_desc_moduleinstalled'] = 'Saadetud p&auml;rast mooduli installeerimist.';
$lang['admin']['event_desc_moduleuninstalled'] = 'Saadetud p&auml;rast mooduli eemaldamist.';
$lang['admin']['event_desc_edituserdefinedtagpost'] = 'Saadetud p&auml;rast kasutaja defineeritud t&auml;hise uuendamist.';
$lang['admin']['event_desc_edituserdefinedtagpre'] = 'Saadetud enne kasutaja defineeritud t&auml;hise uuendamist.';
$lang['admin']['event_desc_deleteuserdefinedtagpre'] = 'Saadetud enne kasutaja defineeritud t&auml;hise kustutamist.';
$lang['admin']['event_desc_deleteuserdefinedtagpost'] = 'Saadetud p&auml;rast kasutaja defineeritud t&auml;hise kustutamist.';
$lang['admin']['event_desc_adduserdefinedtagpost'] = 'Saadetud p&auml;rast kasutaja defineeritud t&auml;hise sisestamist.';
$lang['admin']['event_desc_adduserdefinedtagpre'] = 'Saadetud enne kasutaja defineeritud t&auml;hise sisestamist.';
$lang['admin']['global_umask'] = 'Faili Loomise Mask (umask)';
$lang['admin']['errorcantcreatefile'] = 'Faili loomine eba&otilde;nnestus (probleem &otilde;igustega?)';
$lang['admin']['errormoduleversionincompatible'] = 'Moodul &uuml;hildu selle CMS&#039;i versiooniga';
$lang['admin']['errormodulenotloaded'] = 'Sisemine viga, moodulit ei laetud';
$lang['admin']['errormodulenotfound'] = 'Sisemine viga, ei suutnud leida moodulit';
$lang['admin']['errorinstallfailed'] = 'Mooduli installeerimine eba&otilde;nnestus';
$lang['admin']['errormodulewontload'] = 'probleem mooduli laadimisega';
$lang['admin']['frontendlang'] = 'Algne kasutajaliidese keel';
$lang['admin']['info_edituser_password'] = 'Kasutaja parooli muutmiseks kirjuta see siia v&auml;ljale';
$lang['admin']['info_edituser_passwordagain'] = 'Kasutaja parooli muutmiseks kirjuta see siia v&auml;ljale';
$lang['admin']['originator'] = 'Originaator';
$lang['admin']['module_name'] = 'Mooduli nimi';
$lang['admin']['event_name'] = 'S&uuml;ndmuse nimi';
$lang['admin']['event_description'] = 'S&uuml;ndmuse kirjeldus';
$lang['admin']['error_delete_default_parent'] = 'Pealehe vanemat ei saa kustutada.';
$lang['admin']['jsdisabled'] = 'Vabandust, selle funktsiooni kasutamiseks peab sul olema Javascript lubatud.';
$lang['admin']['order'] = 'J&auml;rjesta';
$lang['admin']['reorderpages'] = 'Muuda sisu j&auml;rjekorda';
$lang['admin']['reorder'] = 'Muuda j&auml;rjekorda';
$lang['admin']['page_reordered'] = 'Leht j&auml;rjestati edukalt &uuml;mber.';
$lang['admin']['pages_reordered'] = 'Lehed j&auml;rjestati edukalt &uuml;mber.';
$lang['admin']['sibling_duplicate_order'] = 'Kaks alamlehte ei saa j&auml;rjekorras olla samal kohal. Lehtede j&auml;rjekorda ei muudetud.';
$lang['admin']['no_orders_changed'] = 'Sa tahtsid muuta lehtede j&auml;rjekorda, kuid ei j&auml;rjestanud neid &uuml;mber. Lehtede j&auml;rjekorda ei muudetud.';
$lang['admin']['order_too_small'] = 'Lehe j&auml;rjekorranumber ei saa olla 0. Lehtede j&auml;rjekorda ei muudetud.';
$lang['admin']['order_too_large'] = 'Lehe j&auml;rjekorranumber ei saa olla suurem kui lehtede arv samal tasandil. Lehtede j&auml;rjekorda ei muudetud.';
$lang['admin']['user_tag'] = 'Kasutaja T&auml;his';
$lang['admin']['add'] = 'Lisa';
$lang['admin']['CSS'] = 'CSS ';
$lang['admin']['about'] = 'Info';
$lang['admin']['action'] = 'Tegevus';
$lang['admin']['actionstatus'] = 'Tegevus/Staatus';
$lang['admin']['active'] = 'Aktiivne';
$lang['admin']['addcontent'] = 'Lisa Sisu (Uus leht)';
$lang['admin']['cantremove'] = 'Eemaldamist ei saa teostada';
$lang['admin']['changepermissions'] = 'Muuda &Otilde;igusi';
$lang['admin']['changepermissionsconfirm'] = 'OLE ETTEVAATLIK\n\nSee tegevus proovib, kas k&otilde;ik failid, millest moodul koosneb, on serveri poolt kirjutatavad.\nKas soovid j&auml;tkata?';
$lang['admin']['contentadded'] = 'Sisu lisatud andmebaasi.';
$lang['admin']['contentupdated'] = 'Sisu uuendatud.';
$lang['admin']['contentdeleted'] = 'Sisu andmebaasist kustutatud.';
$lang['admin']['success'] = 'Valmis';
$lang['admin']['addcss'] = 'Lisa Stiilileht';
$lang['admin']['addgroup'] = 'Lisa Uus Grupp';
$lang['admin']['additionaleditors'] = 'Teised toimetajad';
$lang['admin']['addtemplate'] = 'Lisa Uus Mall';
$lang['admin']['adduser'] = 'Lisa Uus Kasutaja';
$lang['admin']['addusertag'] = 'Lisa T&auml;his';
$lang['admin']['adminaccess'] = 'Ligip&auml;&auml;s admini sisselogimisele';
$lang['admin']['adminlog'] = 'Administraatori Logi';
$lang['admin']['adminlogcleared'] = 'Aministraatori logi puhastati edukalt';
$lang['admin']['adminlogempty'] = 'Administraatori logi on t&uuml;hi';
$lang['admin']['adminsystemtitle'] = 'CMS Admin. S&uuml;steem';
$lang['admin']['adminpaneltitle'] = 'CMS Made Simple Administraatori paneel';
$lang['admin']['advanced'] = 'T&auml;psemalt';
$lang['admin']['aliasalreadyused'] = 'Alias on juba &uuml;he teise lehe poolt kasutusel. Muuda &quot;Lehe Alias&quot; vahelehel &quot;Valikud&quot; millegiks muuks.';
$lang['admin']['aliasmustbelettersandnumbers'] = 'Alias peab koosnema t&auml;htedest ja numbritest';
$lang['admin']['aliasnotaninteger'] = 'Alias ei tohi olla t&auml;isarv (integer)';
$lang['admin']['allpagesmodified'] = 'K&otilde;ik lehek&uuml;ljed muudetud!';
$lang['admin']['assignments'] = 'M&auml;&auml;ra Kasutajad';
$lang['admin']['associationexists'] = 'See seos juba eksisteerib';
$lang['admin']['autoinstallupgrade'] = 'Automaatselt installeeri v&otilde;i uuenda';
$lang['admin']['back'] = 'Tagasi Men&uuml;&uuml;sse';
$lang['admin']['backtoplugins'] = 'Tagasi Pluginate nimekirja';
$lang['admin']['cancel'] = 'T&uuml;hista';
$lang['admin']['cantchmodfiles'] = 'Couldn&#039;t change permissions on some files';
$lang['admin']['cantremovefiles'] = 'Probleem failide kustutamisega (&otilde;igused?)';
$lang['admin']['confirmcancel'] = 'Oled kindel, et soovid oma muutused t&uuml;histada? Kliki OK t&uuml;histamiseks. Kliki Cancel toimetamise j&auml;tkamiseks.';
$lang['admin']['canceldescription'] = 'T&uuml;hista muutused';
$lang['admin']['clearadminlog'] = 'T&uuml;hjenda Administraatori Logi';
$lang['admin']['code'] = 'Kood';
$lang['admin']['confirmdefault'] = 'Oled kindel, et soovid muuta Kodulehe avalehte?';
$lang['admin']['confirmdeletedir'] = 'Oled kindel, et soovid kustutada selle kataloogi ja kogu selle sisu?';
$lang['admin']['content'] = 'Sisu';
$lang['admin']['contentmanagement'] = 'Sisu Haldamine';
$lang['admin']['contenttype'] = 'Sisu T&uuml;&uuml;p';
$lang['admin']['copy'] = 'Kopeeri';
$lang['admin']['copytemplate'] = 'Kopeeri Mall';
$lang['admin']['create'] = 'Loo';
$lang['admin']['createnewfolder'] = 'Loo uus kataloog';
$lang['admin']['cssalreadyused'] = 'CSS nimi on juba kasutusel';
$lang['admin']['cssmanagement'] = 'CSS Haldus';
$lang['admin']['currentassociations'] = 'Olemasolevad Seosed';
$lang['admin']['currentdirectory'] = 'Oled kataloogis';
$lang['admin']['currentgroups'] = 'Olemasolevad Grupid';
$lang['admin']['currentpages'] = 'Praegused Lehed';
$lang['admin']['currenttemplates'] = 'Olemasolevad Mallid';
$lang['admin']['currentusers'] = 'Olemasolevad Kasutajad';
$lang['admin']['custom404'] = '404 veateade';
$lang['admin']['database'] = 'Andmebaas';
$lang['admin']['databaseprefix'] = 'Andmebaasi prefiks';
$lang['admin']['databasetype'] = 'Andmebaasi t&uuml;&uuml;p';
$lang['admin']['date'] = 'Kuup&auml;ev';
$lang['admin']['default'] = 'Vaikimisi';
$lang['admin']['delete'] = 'Kustuta';
$lang['admin']['deleteconfirm'] = 'Oled kindel, et tahad kustutada?';
$lang['admin']['deleteassociationconfirm'] = 'Are you sure you want to delete association to - %s - ?';
$lang['admin']['deletecss'] = 'Kustuta CSS';
$lang['admin']['dependencies'] = 'S&otilde;ltujad';
$lang['admin']['description'] = 'Kirjeldus';
$lang['admin']['directoryexists'] = 'Kataloog on juba olemas.';
$lang['admin']['down'] = 'Alla';
$lang['admin']['edit'] = 'Muuda';
$lang['admin']['editconfiguration'] = 'Muuda seadistusi';
$lang['admin']['editcontent'] = 'Muuda sisu';
$lang['admin']['editcss'] = 'Muuda stiililehte';
$lang['admin']['editcsssuccess'] = 'Stiilileht uuendatud';
$lang['admin']['editgroup'] = 'Muuda gruppi';
$lang['admin']['editpage'] = 'Muuda lehek&uuml;lge';
$lang['admin']['edittemplate'] = 'Muuda malli';
$lang['admin']['edittemplatesuccess'] = 'Mall uuendatud';
$lang['admin']['edituser'] = 'Muuda Kasutajat';
$lang['admin']['editusertag'] = 'Muuda T&auml;hist';
$lang['admin']['usertagadded'] = 'Kasutaja t&auml;his lisatud.';
$lang['admin']['usertagupdated'] = 'Kasutaja t&auml;his uuendatud.';
$lang['admin']['usertagdeleted'] = 'Kasutaja t&auml;his kustutatud.';
$lang['admin']['email'] = 'Meiliaadress';
$lang['admin']['errorattempteddowngrade'] = 'elle mooduli installeerimine t&auml;hendaks s&uuml;steemi taandarengut.  Operatsioon katkestatud.';
$lang['admin']['errorchildcontent'] = 'Sisu alla kuulub alamsisu. Palun eemalda alamsisu k&otilde;igepealt.';
$lang['admin']['errorcopyingtemplate'] = 'Viga malli kopeerimisel';
$lang['admin']['errorcouldnotparsexml'] = 'Viga XML faili s&otilde;elumisel. Palun veendu, et laed &uuml;les .xml-laiendiga faili, mitte .tar.gz v&otilde;i -zip faili.';
$lang['admin']['errorcreatingassociation'] = 'Viga seose loomisel';
$lang['admin']['errorcssinuse'] = 'See stiilileht on m&otilde;ne malli v&otilde;i lehe poolt kasutusel. Eemalda k&otilde;igepealt need seosed.';
$lang['admin']['errordefaultpage'] = 'Avalehte ei saa kustutada. Palun vali esmalt m&otilde;ni teine leht avaleheks.';
$lang['admin']['errordeletingassociation'] = 'Viga seose kustutamisel';
$lang['admin']['errordeletingcss'] = 'Viga CSS&#039;i eemaldamisel';
$lang['admin']['errordeletingdirectory'] = 'Kataloogi kustutamine eba&otilde;nnestus. Probleem &otilde;igustega?';
$lang['admin']['errordeletingfile'] = 'Faili kustutamine eba&otilde;nnestus. Probleem &otilde;igustega?';
$lang['admin']['errordirectorynotwritable'] = 'Sellesse kataloogi kirjutamiseks ei ole &otilde;igusi';
$lang['admin']['errordtdmismatch'] = 'DTD Versioon puudub v&otilde;i ei &uuml;hildu XML failiga';
$lang['admin']['errorgettingcssname'] = 'Viga stiililehe nime leidmisel';
$lang['admin']['errorgettingtemplatename'] = 'Viga malli nime ledimisel';
$lang['admin']['errorincompletexml'] = 'XML-fail ei ole &uuml;hilduv v&otilde;i on vigane';
$lang['admin']['uploadxmlfile'] = 'Installeeri moodul XML-faili kaudu';
$lang['admin']['cachenotwritable'] = 'Cache (puhvri) kataloog ei ole kirjutatav. Cache t&uuml;hjendamine ei t&ouml;&ouml;ta. Palun anna tmp/cache kataloogile k&otilde;ik read/write/execute &otilde;igused (chmod 777)';
$lang['admin']['modulesnotwritable'] = 'Moodulite kataloog ei ole kirjutatav, kui sa soovid installeerida mooduleid laadides &uuml;les XML-faili, siis pead andma moodulite kataloogile read/write/execute &otilde;igused (chmod 777).';
$lang['admin']['noxmlfileuploaded'] = 'Faili ei laetud &uuml;les. Mooduli installeerimiseks XML/&#039;i kaudu pead valima oma arvutist mooduli -xml faili.';
$lang['admin']['errorinsertingcss'] = 'Viga stiililehe sisestamisel';
$lang['admin']['errorinsertinggroup'] = 'Viga grupi sisestamisel';
$lang['admin']['errorinsertingtag'] = 'Viga kasutaja t&auml;hise sisestamisel';
$lang['admin']['errorinsertingtemplate'] = 'Viga malli sisestamisel';
$lang['admin']['errorinsertinguser'] = 'Viga kasutaja sisestamisel';
$lang['admin']['errornofilesexported'] = 'Viga xml-faili ekspordil';
$lang['admin']['errorretrievingcss'] = 'Viga stiililehe taastamisel';
$lang['admin']['errorretrievingtemplate'] = 'Viga malli taastamisel';
$lang['admin']['errortemplateinuse'] = '&Uuml;ks v&otilde;i mitu lehte kasutavad seda malli. Palun eemalda need, v&otilde;i m&auml;&auml;ra neile teine mall.';
$lang['admin']['errorupdatingcss'] = 'Viga stiililehe uuendamisel';
$lang['admin']['errorupdatinggroup'] = 'Viga grupi uuendamisel';
$lang['admin']['errorupdatingpages'] = 'Viga lehtede uuendamisel';
$lang['admin']['errorupdatingtemplate'] = 'Viga malli uuendamisel';
$lang['admin']['errorupdatinguser'] = 'Viga kasutaja uuendamisel';
$lang['admin']['errorupdatingusertag'] = 'Viga kasutaja t&auml;hise uuendamisel';
$lang['admin']['erroruserinuse'] = 'Sellele kasutajale kuuluvad veel m&otilde;ned sisulehed. Palun m&auml;&auml;ra nende omanikuks m&otilde;ni teine kasutaja, ning siis kustuta k&auml;esolev kasutaja.';
$lang['admin']['eventhandlers'] = 'S&uuml;ndmuste Haldur';
$lang['admin']['editeventhandler'] = 'Muuda S&uuml;ndmuse Handlerit';
$lang['admin']['eventhandlerdescription'] = 'Seo kasutaja t&auml;hised s&uuml;ndmustega';
$lang['admin']['export'] = 'Ekspordi';
$lang['admin']['event'] = 'S&uuml;ndmus';
$lang['admin']['false'] = 'Ei Kehti';
$lang['admin']['settrue'] = 'Muuda kehtivaks';
$lang['admin']['filecreatedirnodoubledot'] = 'Kataloogi nimi ei tohi sisaldada m&auml;rke: &#039;..&#039;.';
$lang['admin']['filecreatedirnoname'] = 'Ilma nimeta kataloogi luua ei saa.';
$lang['admin']['filecreatedirnoslash'] = 'Directory cannot contain &#039;/&#039; or &#039;\&#039;.';
$lang['admin']['filemanagement'] = 'Failide Haldamine';
$lang['admin']['filename'] = 'Failinimi';
$lang['admin']['filenotuploaded'] = 'Faili ei saadud &uuml;les laadida. Probleem &otilde;igustega?';
$lang['admin']['filesize'] = 'Faili Suurus';
$lang['admin']['firstname'] = 'Eesnimi';
$lang['admin']['groupmanagement'] = 'Grupi Haldamine';
$lang['admin']['grouppermissions'] = 'Grupi &Otilde;igused';
$lang['admin']['handler'] = 'Handler (kasutaja defineeritud t&auml;his)';
$lang['admin']['headtags'] = 'Pea T&auml;hised';
$lang['admin']['help'] = 'Abi';
$lang['admin']['new_window'] = 'avaneb uues aknas';
$lang['admin']['helpwithsection'] = '%s Abi';
$lang['admin']['helpaddtemplate'] = 'p>Mall kotrollib sinu Kodulehe sisu paiknemist.</p><p>Koosta siin Kodulehe k&uuml;ljendus. Mitmete Kodulehe elementide v&auml;limuse kontrollimiseks lisa CSS Stylesheet-sektsioonis.</p>';
$lang['admin']['helplisttemplate'] = '<p>Siin saad muuta, kustutada ja luua Malle.</p><p>Uue Malli loomiseks kliki nupul <u>Lisa Uus Mall</u>.</p><p>Kui soovid, et k&otilde;ik sinu sisu lehed kasutaksid sama Malli, kliki nupul <u>M&auml;&auml;ra Kogu Sisule</u>.</p><p>Kui soovid m&otilde;nest Mallist duplikaati, kliki nupul <u>Kopeeri</u> ja sisesta duplikaadi nimi.</p>';
$lang['admin']['home'] = 'Kodu';
$lang['admin']['homepage'] = 'Koduleht';
$lang['admin']['hostname'] = 'Hosti nimi';
$lang['admin']['idnotvalid'] = 'Antud id on vigane';
$lang['admin']['imagemanagement'] = 'Pildihaldur';
$lang['admin']['informationmissing'] = 'Informatsioon puudub';
$lang['admin']['install'] = 'Installeeri';
$lang['admin']['invalidcode'] = 'Sisestatud kood on vigane.';
$lang['admin']['illegalcharacters'] = 'Vigased t&auml;hem&auml;rgid v&auml;ljas %s.';
$lang['admin']['invalidcode_brace_missing'] = 'Sulgude arv ei ole v&otilde;rdne';
$lang['admin']['invalidtemplate'] = 'Mall on vigane';
$lang['admin']['itemid'] = 'Eseme ID';
$lang['admin']['itemname'] = 'Eseme nimi';
$lang['admin']['language'] = 'Keel';
$lang['admin']['lastname'] = 'Perekonnanimi';
$lang['admin']['logout'] = 'Logi v&auml;lja';
$lang['admin']['loginprompt'] = 'Administraatori paneelile ligip&auml;&auml;suks sisesta kehtiv kasutajanimi.';
$lang['admin']['logintitle'] = 'CMS Made Simple Administraatori sisselogimine';
$lang['admin']['menutext'] = 'Men&uuml;&uuml; Tekst';
$lang['admin']['missingparams'] = 'M&otilde;ned parameetrid olid puudu v&otilde;i vigased';
$lang['admin']['modifygroupassignments'] = 'Muuda Grupi M&auml;&auml;rusi';
$lang['admin']['moduleabout'] = '%s mooduli info';
$lang['admin']['modulehelp'] = '%s mooduli abi';
$lang['admin']['msg_defaultcontent'] = 'Kirjuta siia kood, mis peaks ilmnema k&otilde;ikide uute lehtede vaikimisi sisuna';
$lang['admin']['msg_defaultmetadata'] = 'Kirjuta siia kood, mis peaks ilmnema k&otilde;ikide uute lehtede metadata sektsioonis';
$lang['admin']['wikihelp'] = 'Kommuuni abi';
$lang['admin']['moduleinstalled'] = 'Moodul on juba installeeritud';
$lang['admin']['moduleinterface'] = '%s kasutajaliides';
$lang['admin']['modules'] = 'Moodulid';
$lang['admin']['move'] = 'Liiguta';
$lang['admin']['name'] = 'Nimi';
$lang['admin']['needpermissionto'] = 'Vajad &#039;%s&#039; &otilde;igust, et seda funktsiooni rakendada.';
$lang['admin']['needupgrade'] = 'Vajab Uuendusi';
$lang['admin']['newtemplatename'] = 'Uue malli nimi';
$lang['admin']['next'] = 'J&auml;rgmine';
$lang['admin']['noaccessto'] = 'Puudub ligip&auml;&auml;s: %s';
$lang['admin']['nocss'] = 'Stiililehte ei ole';
$lang['admin']['noentries'] = 'Sissekandeid ei ole';
$lang['admin']['nofieldgiven'] = '%s pole antud!';
$lang['admin']['nofiles'] = 'Faile ei ole';
$lang['admin']['nopasswordmatch'] = 'Paroolid ei kattu';
$lang['admin']['norealdirectory'] = 'Kataloogi ei leitud serverist';
$lang['admin']['norealfile'] = 'Faili ei leitud serverist';
$lang['admin']['notinstalled'] = 'Installeerimata';
$lang['admin']['overwritemodule'] = 'Kirjuta olemasolevad moodulid &uuml;le';
$lang['admin']['owner'] = 'Omanik';
$lang['admin']['pagealias'] = 'Lehe Alias';
$lang['admin']['pagedefaults'] = 'Lehe vaikimisi seaded';
$lang['admin']['pagedefaultsdescription'] = 'Sea vaikimisi v&auml;&auml;rtused uutele lehtedele';
$lang['admin']['parent'] = 'Vanem';
$lang['admin']['password'] = 'Salas&otilde;na';
$lang['admin']['passwordagain'] = 'Salas&otilde;na (uuesti)';
$lang['admin']['permission'] = '&Otilde;igus';
$lang['admin']['permissions'] = '&Otilde;igused';
$lang['admin']['permissionschanged'] = '&Otilde;igused uuendatud.';
$lang['admin']['pluginabout'] = '%s t&auml;hise info';
$lang['admin']['pluginhelp'] = '%s t&auml;hise abi';
$lang['admin']['pluginmanagement'] = 'Pluginate haldamine';
$lang['admin']['prefsupdated'] = 'Eelistused on uuendatud.';
$lang['admin']['preview'] = 'Eelvaade';
$lang['admin']['previewdescription'] = 'Vaata muutusi';
$lang['admin']['previous'] = 'Eelmine';
$lang['admin']['remove'] = 'Eemalda';
$lang['admin']['removeconfirm'] = 'Eemaldan paigaldusest l&otilde;plikult k&otilde;ik failid, millest see moodul koosneb.\nOled kindel, et soovid j&auml;tkata?';
$lang['admin']['removecssassociation'] = 'Eemalda stiililehe seos';
$lang['admin']['saveconfig'] = 'Salvesta konfiguratsioon';
$lang['admin']['send'] = 'Saada';
$lang['admin']['setallcontent'] = 'M&auml;&auml;ra k&otilde;ikidele lehtedele';
$lang['admin']['setallcontentconfirm'] = 'Oled kindel, et tahad, et k&otilde;ik lehed kasutaksid seda malli?';
$lang['admin']['showinmenu'] = 'N&auml;ita Men&uuml;&uuml;s';
$lang['admin']['showsite'] = 'N&auml;ita Kodulehte';
$lang['admin']['sitedownmessage'] = 'Kodulehe hooldamise teade';
$lang['admin']['siteprefs'] = 'Globaalsed seaded';
$lang['admin']['status'] = 'Staatus';
$lang['admin']['stylesheet'] = 'Stiilileht';
$lang['admin']['submit'] = 'Saada';
$lang['admin']['submitdescription'] = 'Salvesta muutused';
$lang['admin']['tags'] = 'T&auml;hised';
$lang['admin']['template'] = 'Mall';
$lang['admin']['templateexists'] = 'Sellise nimega mall juba eksisteerib';
$lang['admin']['templatemanagement'] = 'Mallide haldamine';
$lang['admin']['title'] = 'Pealkiri';
$lang['admin']['tools'] = 'T&ouml;&ouml;riistad';
$lang['admin']['true'] = 'Kehtib';
$lang['admin']['setfalse'] = 'Muuda kehtetuks';
$lang['admin']['type'] = 'T&uuml;&uuml;p';
$lang['admin']['typenotvalid'] = 'T&uuml;&uuml;p ei ole sobiv';
$lang['admin']['uninstall'] = 'Eemalda';
$lang['admin']['uninstallconfirm'] = 'Oled kindel, et soovid eemaldada mooduli:';
$lang['admin']['up'] = '&Uuml;les';
$lang['admin']['upgrade'] = 'Uuenda';
$lang['admin']['upgradeconfirm'] = 'Oled sa kindel, et soovid seda uuendada?';
$lang['admin']['uploadfile'] = 'Lae &uuml;les';
$lang['admin']['url'] = 'Aadress';
$lang['admin']['useadvancedcss'] = 'Kasuta t&auml;psemat stiililehtede haldamist';
$lang['admin']['user'] = 'Kasutaja';
$lang['admin']['userdefinedtags'] = 'Kasutaja defineeritud T&auml;hised';
$lang['admin']['usermanagement'] = 'Kasutajate Haldamine';
$lang['admin']['username'] = 'Kasutajanimi';
$lang['admin']['usernameincorrect'] = 'Vale kasutajanimi v&otilde;i salas&otilde;na';
$lang['admin']['userprefs'] = 'Kasutaja Eelistused';
$lang['admin']['usersassignedtogroup'] = 'Kasutajate M&auml;&auml;ramine Gruppidesse %s';
$lang['admin']['usertagexists'] = 'Sellise nimega T&auml;his juba eksisteerib. Palun vali teistsugune nimi.';
$lang['admin']['usewysiwyg'] = 'Kasuta WYSIWYG-liidest selle sisu jaoks';
$lang['admin']['version'] = 'Versioon';
$lang['admin']['view'] = 'Vaata';
$lang['admin']['welcomemsg'] = 'Tere tulemast %s';
$lang['admin']['directoryabove'] = 'Eelmine tase';
$lang['admin']['nodefault'] = 'Ei ole valitud';
$lang['admin']['blobexists'] = 'Sellise nimega globaalne sisuplokk juba eksisteerib.';
$lang['admin']['blobmanagement'] = 'Globaalsete sisuplokkide Haldur';
$lang['admin']['errorinsertingblob'] = 'Globaalse sisuploki sisestamisel esines viga';
$lang['admin']['addhtmlblob'] = 'Lisa globaalne sisuplokk';
$lang['admin']['edithtmlblob'] = 'Muuda globaalset sisuplokki';
$lang['admin']['edithtmlblobsuccess'] = 'Globaalne sisuplokk uuendatud';
$lang['admin']['tagtousegcb'] = 'T&auml;his selle ploki kasutamiseks';
$lang['admin']['gcb_wysiwyg'] = 'V&otilde;imalda GCB WYSIWYG';
$lang['admin']['gcb_wysiwyg_help'] = 'V&otilde;imalda WYSIWYG-liidese kasutamist globaalsete sisuplokkide muutmisel';
$lang['admin']['filemanager'] = 'Failihaldur';
$lang['admin']['imagemanager'] = 'Pildihaldur';
$lang['admin']['encoding'] = 'Kodeering';
$lang['admin']['clearcache'] = 'T&uuml;hjenda puhver (cachce)';
$lang['admin']['clear'] = 'Puhver';
$lang['admin']['cachecleared'] = 'Puhver t&uuml;hjendatud';
$lang['admin']['apply'] = 'Rakenda';
$lang['admin']['applydescription'] = 'Salvesta muutused ja j&auml;tka toimetamist';
$lang['admin']['none'] = 'Puudub';
$lang['admin']['wysiwygtouse'] = 'Vali, millist WYSIWYG-liidest kasutada';
$lang['admin']['syntaxhighlightertouse'] = 'Vali s&uuml;ntaksi esiletooja kasutamiseks';
$lang['admin']['hasdependents'] = 'Olemas S&otilde;ltujad';
$lang['admin']['missingdependency'] = 'Puudub S&otilde;ltuvus';
$lang['admin']['minimumversion'] = 'Minimaalne versioon';
$lang['admin']['minimumversionrequired'] = 'Minimaalne n&otilde;utud CMSMS versioon';
$lang['admin']['maximumversion'] = 'Maksimaalne versioon';
$lang['admin']['maximumversionsupported'] = 'Maksimaalne toetatud CMSMS versioon';
$lang['admin']['depsformodule'] = '%s mooduli S&otilde;ltujad';
$lang['admin']['installed'] = 'Installeeritud';
$lang['admin']['author'] = 'Autor';
$lang['admin']['changehistory'] = 'Muutuste ajalugu';
$lang['admin']['moduleerrormessage'] = '%s mooduli veateade';
$lang['admin']['moduleupgradeerror'] = 'Mooduli uuendamisel esines viga.';
$lang['admin']['moduleinstallmessage'] = '%s mooduli installeerimise teade';
$lang['admin']['moduleuninstallmessage'] = '%s mooduli eemaldamise teade';
$lang['admin']['admintheme'] = 'Administratsiooni mall';
$lang['admin']['addstylesheet'] = 'Lisa Stiilileht';
$lang['admin']['editstylesheet'] = 'Muuda Stiililehte';
$lang['admin']['addcssassociation'] = 'Lisa Stiililehe seos';
$lang['admin']['attachstylesheet'] = 'M&auml;&auml;ra see stiilileht';
$lang['admin']['attachtemplate'] = 'M&auml;&auml;ra sellele mallile';
$lang['admin']['main'] = 'Pealeht';
$lang['admin']['pages'] = 'Lehed';
$lang['admin']['page'] = 'Leht';
$lang['admin']['files'] = 'Failid';
$lang['admin']['layout'] = 'Kujundus';
$lang['admin']['usersgroups'] = 'Kasutajad &amp; Grupid';
$lang['admin']['extensions'] = 'Laiendused';
$lang['admin']['preferences'] = 'Eelistused';
$lang['admin']['admin'] = 'Kodulehe Admin';
$lang['admin']['viewsite'] = 'Vaata Kodulehte';
$lang['admin']['templatecss'] = 'M&auml;&auml;ra stiililehele malle';
$lang['admin']['plugins'] = 'Pluginad';
$lang['admin']['movecontent'] = 'Liiguta Lehti';
$lang['admin']['module'] = 'Moodul';
$lang['admin']['usertags'] = 'Kasutaja Defineeritud T&auml;hised';
$lang['admin']['htmlblobs'] = 'Globaalsed sisuplokid';
$lang['admin']['adminhome'] = 'Kodulehe Administreerimine';
$lang['admin']['liststylesheets'] = 'Stiililehed';
$lang['admin']['preferencesdescription'] = 'Siin saad sa muuta mitmeid terve Kodulehe kohta kehtivaid seadeid.';
$lang['admin']['adminlogdescription'] = 'N&auml;itab, mida, kes ja millal adminstraatoripaneelil tegi.';
$lang['admin']['mainmenu'] = 'Peamen&uuml;&uuml;';
$lang['admin']['users'] = 'Kasutajad';
$lang['admin']['usersdescription'] = 'Siin saad hallata kasutajaid.';
$lang['admin']['groups'] = 'Grupid';
$lang['admin']['groupsdescription'] = 'Siin saad hallata gruppe.';
$lang['admin']['groupassignments'] = 'Grupi M&auml;&auml;rangud';
$lang['admin']['groupassignmentdescription'] = 'Siin saad m&auml;&auml;rata kasutajaid gruppidesse.';
$lang['admin']['groupperms'] = 'Grupi &Otilde;igused';
$lang['admin']['grouppermsdescription'] = 'M&auml;&auml;ra gruppide &otilde;igusi ja juurdep&auml;&auml;sutasemeid';
$lang['admin']['pagesdescription'] = 'Lisa, muuda ja kustuta lehti.';
$lang['admin']['htmlblobdescription'] = 'Globaalsed sisuplokid on sisu t&uuml;kid, mida sa saad paigutada oma lehtedele v&otilde;i mallidele.';
$lang['admin']['templates'] = 'Mallid';
$lang['admin']['templatesdescription'] = 'Siin saad lisada ja muuta Malle. Mallid m&auml;&auml;ravad paljuski su Kodulehe v&auml;ljan&auml;gemise - ehk k&uuml;ljenduse/paigutuse.';
$lang['admin']['stylesheets'] = 'Stiililehed';
$lang['admin']['stylesheetsdescription'] = 'Lisa ja muuda stiililehti. Seda on v&otilde;imalik teha ilma malle muutmata. Stiililehed aitavad sul muuta tekstide suurust ja efekte, linkide v&auml;rve ja k&auml;itumist ning palju muid sinu kodulehe parameetreid.';
$lang['admin']['filemanagerdescription'] = 'Lae ja halda faile.';
$lang['admin']['imagemanagerdescription'] = 'Lae/muuda ja kustuta pilte.';
$lang['admin']['moduledescription'] = 'Moodulid laiendavad CMSMS-i funktsionaalsust. N&auml;iteks v&otilde;id lisada kalendri.';
$lang['admin']['tagdescription'] = 'T&auml;hised on v&auml;ikesed funktsioonid, mida saab lisada lehtedele v&otilde;i otse mallile. Sarnased sisuplokkidele, ainult et info asemel sisaldavad nad funktsioone.';
$lang['admin']['usertagdescription'] = 'Loo ise uusi m&auml;rgiseid. Neid saad otse oma brauserist lisada ja muuta.';
$lang['admin']['installdirwarning'] = '<em><strong>Hoiatus:</strong></em> kataloog install eksisteerib ikka veel. Palun eemalda see t&auml;ielikult.';
$lang['admin']['subitems'] = 'Siia kuuluvad';
$lang['admin']['extensionsdescription'] = 'Moodulid, t&auml;hised ja muud vidinad.';
$lang['admin']['usersgroupsdescription'] = 'Kasutajate ja gruppide haldamine.';
$lang['admin']['layoutdescription'] = 'K&otilde;ik kodulehe kujundusega seotud valikud.';
$lang['admin']['admindescription'] = 'Kodulehe administreerimise funktsioonid.';
$lang['admin']['contentdescription'] = 'Lisa ja muuda sisu.';
$lang['admin']['enablecustom404'] = 'V&otilde;imalda 404 veateate muutmist';
$lang['admin']['enablesitedown'] = 'Avalda kodulehe hooldamise teade ja v&otilde;imalda teate muutmist';
$lang['admin']['bookmarks'] = 'Otseteed';
$lang['admin']['user_created'] = 'Kasutaja loodud otseteed';
$lang['admin']['forums'] = 'Foorumid';
$lang['admin']['wiki'] = 'Viki';
$lang['admin']['irc'] = 'Jutukas';
$lang['admin']['module_help'] = 'Mooduli Abi';
$lang['admin']['managebookmarks'] = 'Halda Otseteid';
$lang['admin']['editbookmark'] = 'Muuda Otseteed';
$lang['admin']['addbookmark'] = 'Lisa Otsetee';
$lang['admin']['recentpages'] = 'Hiljutised lehed';
$lang['admin']['groupname'] = 'Grupi Nimi';
$lang['admin']['selectgroup'] = 'Vali Grupp';
$lang['admin']['updateperm'] = 'Uuenda &Otilde;igusi';
$lang['admin']['admincallout'] = 'Administratsiooni Otseteed';
$lang['admin']['showbookmarks'] = 'N&auml;ita Adminni Otseteid';
$lang['admin']['hide_help_links'] = 'Peida Abilingid';
$lang['admin']['hide_help_links_help'] = 'Lisa siia linnuke, et peita wiki ja Abi lingid lehtede p&auml;istes.';
$lang['admin']['showrecent'] = 'N&auml;ita Hiljuti Kasutatud Lehti';
$lang['admin']['attachtotemplate'] = 'Lisa Mallile';
$lang['admin']['attachstylesheets'] = 'Lisa Stiililehti';
$lang['admin']['indent'] = 'Koonda lehtede nimekirjad';
$lang['admin']['adminindent'] = 'Sisu vaatamine';
$lang['admin']['contract'] = 'Koonda Sekstioon';
$lang['admin']['expand'] = 'Laienda Sekstiooni';
$lang['admin']['expandall'] = 'Laienda k&otilde;iki Sektsioone';
$lang['admin']['contractall'] = 'Koonda k&otilde;ik Sektsioonid';
$lang['admin']['menu_bookmarks'] = '[+] ';
$lang['admin']['globalconfig'] = 'Globaalsed muutujad';
$lang['admin']['adminpaging'] = 'Lehelisti &uuml;hel lehel n&auml;idatavate lehtede arv';
$lang['admin']['nopaging'] = 'N&auml;ita K&otilde;iki Esemeid';
$lang['admin']['myprefs'] = 'Minu Eelistused';
$lang['admin']['myprefsdescription'] = 'Siin saad administreerimisliidest endale sobivamaks kohendada ning oma andmeid lisada/muuta.';
$lang['admin']['myaccount'] = 'Minu Konto';
$lang['admin']['myaccountdescription'] = 'Siin saad muuta oma isikliku konto andmeid.';
$lang['admin']['adminprefs'] = 'Kasutaja Eelistused';
$lang['admin']['adminprefsdescription'] = 'Siin saad muuta kodulehe adminsitreerimise eelistusi.';
$lang['admin']['managebookmarksdescription'] = 'Siin saad hallata oma admini otseteid.';
$lang['admin']['options'] = 'Valikud';
$lang['admin']['langparam'] = 'See parameeter m&auml;&auml;rab, mis keelt kasutatakse Kodulehe kasutajaliideses. K&otilde;ik moodulid ei toeta ega vaja seda.';
$lang['admin']['parameters'] = 'Parameetrid';
$lang['admin']['mediatype'] = 'Meedia T&uuml;&uuml;p';
$lang['admin']['mediatype_'] = 'none set : m&otilde;jub k&otilde;ikjal';
$lang['admin']['mediatype_all'] = 'all : Sobib k&otilde;ikidele seadmetele.';
$lang['admin']['mediatype_aural'] = 'aural : M&otilde;eldud k&otilde;nes&uuml;ntesaatoritele.';
$lang['admin']['mediatype_braille'] = 'braille : M&otilde;eldud Pimedate kirja kombitavatele seadmetele.';
$lang['admin']['mediatype_embossed'] = 'embossed : M&otilde;eldud Pimedate kirja tr&uuml;kkivatele printeritele.';
$lang['admin']['mediatype_handheld'] = 'handheld : M&otilde;eldud pihuseadmetele (pihuarvutid jms)';
$lang['admin']['mediatype_print'] = 'print : M&otilde;eldud l&auml;bipaistmatule materjalile v&otilde;i dokumentidele, mida vaadatakse ekraanil pirntimise eelvaates.';
$lang['admin']['mediatype_projection'] = 'projection : M&otilde;eldud projitseerivatele presentatsioonidele, nagu dataprojektor v&otilde;i kile.';
$lang['admin']['mediatype_screen'] = 'screen : M&otilde;eldud eelk&otilde;ige v&auml;rvilistele arvutiekraanidele.';
$lang['admin']['mediatype_tty'] = 'tty : M&otilde;eldud fixeeritud t&auml;hev&otilde;rguga seadmetele, nagu n&auml;iteks teletaip ja terminalid.';
$lang['admin']['mediatype_tv'] = 'tv : M&otilde;eldud TV-t&uuml;&uuml;pi seadmete jaoks.';
$lang['admin']['assignmentchanged'] = 'Grupi M&auml;&auml;rangud on muudetud.';
$lang['admin']['stylesheetexists'] = 'Stiilileht juba eksisteerib';
$lang['admin']['errorcopyingstylesheet'] = 'Viga stiililehe kopeerimisel';
$lang['admin']['copystylesheet'] = 'Kopeeri Stiilileht';
$lang['admin']['newstylesheetname'] = 'Uue stiililehe nimi';
$lang['admin']['target'] = 'Sihtkoht';
$lang['admin']['xml'] = 'XML ';
$lang['admin']['xmlmodulerepository'] = 'ModuleRepository soap serveri aadress';
$lang['admin']['metadata'] = 'Meta-andmed';
$lang['admin']['globalmetadata'] = 'Globaalsed meta-andmed';
$lang['admin']['titleattribute'] = 'Kirjeldus (Tiitli atribuut)';
$lang['admin']['tabindex'] = 'Tablatuuri indeks';
$lang['admin']['accesskey'] = 'Ligip&auml;&auml;su v&otilde;ti';
$lang['admin']['sitedownwarning'] = '<strong>Hoiatus:</strong> Sinu Koduleht n&auml;itab hetkel &amp;quot;Kodulehek&uuml;lje hooldamise&amp;quot; teadet.  Eemalda %s fail probleemi lahendamiseks.';
$lang['admin']['deletecontent'] = 'Kustuta Sisu';
$lang['admin']['deletepages'] = 'Kustuta need lehed?';
$lang['admin']['selectall'] = 'Vali K&otilde;ik';
$lang['admin']['selecteditems'] = 'Valitutega';
$lang['admin']['inactive'] = 'Deaktiveeri';
$lang['admin']['deletetemplates'] = 'Kustuta malle';
$lang['admin']['templatestodelete'] = 'Need mallid kustutatakse';
$lang['admin']['wontdeletetemplateinuse'] = 'Need mallid on kasutuses ja neid ei kustutata';
$lang['admin']['deletetemplate'] = 'Kustuta stiililehti';
$lang['admin']['stylesheetstodelete'] = 'Need stiililehed kustutatakse';
$lang['admin']['sitename'] = 'Kodulehe nimi';
$lang['admin']['siteadmin'] = 'Lehek&uuml;lje administraator';
$lang['admin']['images'] = 'Pildihaldur';
$lang['admin']['blobs'] = 'Globaalsed sisuplokid';
$lang['admin']['groupmembers'] = 'Grupi M&auml;&auml;rangud';
$lang['admin']['troubleshooting'] = '(veaotsing)';
$lang['admin']['event_desc_loginpost'] = 'Saadetud p&auml;rast kasutaja admin. paneeli sisselogimist';
$lang['admin']['event_desc_logoutpost'] = 'Saadetud p&auml;rast kasutaja admin. paneelist v&auml;ljalogimist';
$lang['admin']['event_desc_adduserpre'] = 'Saadetud enne uue kasutaja loomist';
$lang['admin']['event_desc_adduserpost'] = 'Saadetud p&auml;rast uue kasutaja loomist';
$lang['admin']['event_desc_edituserpre'] = 'Saadetud enne kasutaja andmete muutuste salvestatamist';
$lang['admin']['event_desc_edituserpost'] = 'Saadetud p&auml;rast kasutaja andmete muutuste salvestamist';
$lang['admin']['event_desc_deleteuserpre'] = 'Saadetud enne kasutaja s&uuml;steemist kustutamist';
$lang['admin']['event_desc_deleteuserpost'] = 'Saadetud p&auml;rast kasutaja s&uuml;steemist kustutamist';
$lang['admin']['event_desc_addgrouppre'] = 'Saadetud enne uue kasutajagrupi loomist';
$lang['admin']['event_desc_addgrouppost'] = 'Saadetud p&auml;rast uue kasutajagrupi loomist';
$lang['admin']['event_desc_changegroupassignpre'] = 'Saadetud enne gruppi m&auml;&auml;rangute salvestamist';
$lang['admin']['event_desc_changegroupassignpost'] = 'Saadetud peale grupi m&auml;&auml;rangute salvestamist';
$lang['admin']['event_desc_editgrouppre'] = 'Saadetud enne kasutajagrupi andmete muutuste salvestamist';
$lang['admin']['event_desc_editgrouppost'] = 'Saadetud p&auml;rast kasutajagrupi andmete muutuste salvestamist';
$lang['admin']['event_desc_deletegrouppre'] = 'Saadetud enne kasutajagrupi andmete muutuste salvestamist';
$lang['admin']['event_desc_deletegrouppost'] = 'Saadetud p&auml;rast kasutajagrupi andmete muutuste salvestamist';
$lang['admin']['event_desc_addstylesheetpre'] = 'Saadetud enne uue stiililehe loomist';
$lang['admin']['event_desc_addstylesheetpost'] = 'Saadetud p&auml;rast uue stiililehe loomist';
$lang['admin']['event_desc_editstylesheetpre'] = 'Saadetud enne stiililehe muutuste salvestamist';
$lang['admin']['event_desc_editstylesheetpost'] = 'Saadetud p&auml;rast stiililehe muutuste salvestamist';
$lang['admin']['event_desc_deletestylesheetpre'] = 'Saadetud enne stiililehe s&uuml;steemist kustutamist';
$lang['admin']['event_desc_deletestylesheetpost'] = 'Saadetud p&auml;rast stiililehe s&uuml;steemist kustutamist';
$lang['admin']['event_desc_addtemplatepre'] = 'Saadetud enne uue malli loomist';
$lang['admin']['event_desc_addtemplatepost'] = 'Saadetud p&auml;rast uue malli loomist';
$lang['admin']['event_desc_edittemplatepre'] = 'Saadetud enne malli muutuste salvestamist';
$lang['admin']['event_desc_edittemplatepost'] = 'Saadetud p&auml;rast malli muutuste salvestamist';
$lang['admin']['event_desc_deletetemplatepre'] = 'Saadetud enne malli s&uuml;steemist kustutamist';
$lang['admin']['event_desc_deletetemplatepost'] = 'Saadetud p&auml;rast malli s&uuml;steemist kustutamist';
$lang['admin']['event_desc_templateprecompile'] = 'Saadetud enne malli saatmist smartyle t&ouml;&ouml;tlemiseks';
$lang['admin']['event_desc_templatepostcompile'] = 'Saadetud p&auml;rast malli t&ouml;&ouml;tlemist smarty poolt';
$lang['admin']['event_desc_addglobalcontentpre'] = 'Saadetud enne uue globaalse sisuploki loomist';
$lang['admin']['event_desc_addglobalcontentpost'] = 'Saadetud p&auml;rast uue globaalse sisuploki loomist';
$lang['admin']['event_desc_editglobalcontentpre'] = 'Saadetud enne globaalse sisuploki muutuste salvestamist';
$lang['admin']['event_desc_editglobalcontentpost'] = 'Saadetud p&auml;rast globaalse sisuploki muutuste salvestamist';
$lang['admin']['event_desc_deleteglobalcontentpre'] = 'Saadetud enne globaalse sisuploki s&uuml;steemist kustutamist';
$lang['admin']['event_desc_deleteglobalcontentpost'] = 'Saadetud p&auml;rast globaalse sisuploki s&uuml;steemist kustutamist';
$lang['admin']['event_desc_globalcontentprecompile'] = 'Saadetud enne globaalse sisuploki saatmist smartyle t&ouml;&ouml;tlemiseks';
$lang['admin']['event_desc_globalcontentpostcompile'] = 'Saadetud p&auml;rast globaalse sisuploki t&ouml;&ouml;tlemist smarty poolt';
$lang['admin']['event_desc_contenteditpre'] = 'Saadetud enne sisu muutuste salvestamist';
$lang['admin']['event_desc_contenteditpost'] = 'Saadetud p&auml;rast sisu muutuste salvestamist';
$lang['admin']['event_desc_contentdeletepre'] = 'Saadetud enne sisu s&uuml;steemist kustutamist';
$lang['admin']['event_desc_contentdeletepost'] = 'Saadetud p&auml;rast sisu sisu s&uuml;steemist kustutamist';
$lang['admin']['event_desc_contentstylesheet'] = 'Saadetud enne stiililehe saatmist brauserile';
$lang['admin']['event_desc_contentprecompile'] = 'Saadetud enne sisu saatmist smartyle t&ouml;&ouml;tlemiseks';
$lang['admin']['event_desc_contentpostcompile'] = 'Saadetud p&auml;rast sisu t&ouml;&ouml;tlemist smarty poolt';
$lang['admin']['event_desc_contentpostrender'] = 'Saadetud enne kombineeritud html-i saatmist brauserile';
$lang['admin']['event_desc_smartyprecompile'] = 'Saadetud enne, kui &uuml;ksk&otilde;ik milline sisu on m&auml;&auml;ratud smartyle t&ouml;&ouml;tlemiseks';
$lang['admin']['event_desc_smartypostcompile'] = 'Saadetud p&auml;rast seda, kui &uuml;ksk&otilde;ik milline sisu on m&auml;&auml;ratud smartyle t&ouml;&ouml;tlemiseks';
$lang['admin']['event_help_loginpost'] = '<p>Sent after a user logs into the admin panel.</p>
<h4>Parameters</h4>
<ul>
<li>&#039;user&#039; - Reference to the affected user object.</li>
</ul>
';
$lang['admin']['event_help_logoutpost'] = '<p>Sent after a user logs out of the admin panel.</p>
<h4>Parameters</h4>
<ul>
<li>&#039;user&#039; - Reference to the affected user object.</li>
</ul>
';
$lang['admin']['event_help_adduserpre'] = '<p>Sent before a new user is created.</p>
<h4>Parameters</h4>
<ul>
<li>&#039;user&#039; - Reference to the affected user object.</li>
</ul>
';
$lang['admin']['event_help_adduserpost'] = '<p>Sent after a new user is created.</p>
<h4>Parameters</h4>
<ul>
<li>&#039;user&#039; - Reference to the affected user object.</li>
</ul>
';
$lang['admin']['event_help_edituserpre'] = '<p>Sent before edits to a user are saved.</p>
<h4>Parameters</h4>
<ul>
<li>&#039;user&#039; - Reference to the affected user object.</li>
</ul>
';
$lang['admin']['event_help_edituserpost'] = '<p>Sent after edits to a user are saved.</p>
<h4>Parameters</h4>
<ul>
<li>&#039;user&#039; - Reference to the affected user object.</li>
</ul>
';
$lang['admin']['event_help_deleteuserpre'] = '<p>Sent before a user is deleted from the system.</p>
<h4>Parameters</h4>
<ul>
<li>&#039;user&#039; - Reference to the affected user object.</li>
</ul>
';
$lang['admin']['event_help_deleteuserpost'] = '<p>Sent after a user is deleted from the system.</p>
<h4>Parameters</h4>
<ul>
<li>&#039;user&#039; - Reference to the affected user object.</li>
</ul>
';
$lang['admin']['event_help_addgrouppre'] = '<p>Sent before a new group is created.</p>
<h4>Parameters</h4>
<ul>
<li>&#039;group&#039; - Reference to the affected group object.</li>
</ul>
';
$lang['admin']['event_help_addgrouppost'] = '<p>Sent after a new group is created.</p>
<h4>Parameters</h4>
<ul>
<li>&#039;group&#039; - Reference to the affected group object.</li>
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
$lang['admin']['event_help_editgrouppre'] = '<p>Sent before edits to a group are saved.</p>
<h4>Parameters</h4>
<ul>
<li>&#039;group&#039; - Reference to the affected group object.</li>
</ul>
';
$lang['admin']['event_help_editgrouppost'] = '<p>Sent after edits to a group are saved.</p>
<h4>Parameters</h4>
<ul>
<li>&#039;group&#039; - Reference to the affected group object.</li>
</ul>
';
$lang['admin']['event_help_deletegrouppre'] = '<p>Sent before a group is deleted from the system.</p>
<h4>Parameters</h4>
<ul>
<li>&#039;group&#039; - Reference to the affected group object.</li>
</ul>
';
$lang['admin']['event_help_deletegrouppost'] = '<p>Sent after a group is deleted from the system.</p>
<h4>Parameters</h4>
<ul>
<li>&#039;group&#039; - Reference to the affected group object.</li>
</ul>
';
$lang['admin']['event_help_addstylesheetpre'] = '<p>Sent before a new stylesheet is created.</p>
<h4>Parameters</h4>
<ul>
<li>&#039;stylesheet&#039; - Reference to the affected stylesheet object.</li>
</ul>
';
$lang['admin']['event_help_addstylesheetpost'] = '<p>Sent after a new stylesheet is created.</p>
<h4>Parameters</h4>
<ul>
<li>&#039;stylesheet&#039; - Reference to the affected stylesheet object.</li>
</ul>
';
$lang['admin']['event_help_editstylesheetpre'] = '<p>Sent before edits to a stylesheet are saved.</p>
<h4>Parameters</h4>
<ul>
<li>&#039;stylesheet&#039; - Reference to the affected stylesheet object.</li>
</ul>
';
$lang['admin']['event_help_editstylesheetpost'] = '<p>Sent after edits to a stylesheet are saved.</p>
<h4>Parameters</h4>
<ul>
<li>&#039;stylesheet&#039; - Reference to the affected stylesheet object.</li>
</ul>
';
$lang['admin']['event_help_deletestylesheetpre'] = '<p>Sent before a stylesheet is deleted from the system.</p>
<h4>Parameters</h4>
<ul>
<li>&#039;stylesheet&#039; - Reference to the affected stylesheet object.</li>
</ul>
';
$lang['admin']['event_help_deletestylesheetpost'] = '<p>Sent after a stylesheet is deleted from the system.</p>
<h4>Parameters</h4>
<ul>
<li>&#039;stylesheet&#039; - Reference to the affected stylesheet object.</li>
</ul>
';
$lang['admin']['event_help_addtemplatepre'] = '<p>Sent before a new template is created.</p>
<h4>Parameters</h4>
<ul>
<li>&#039;template&#039; - Reference to the affected template object.</li>
</ul>
';
$lang['admin']['event_help_addtemplatepost'] = '<p>Sent after a new template is created.</p>
<h4>Parameters</h4>
<ul>
<li>&#039;template&#039; - Reference to the affected template object.</li>
</ul>
';
$lang['admin']['event_help_edittemplatepre'] = '<p>Sent before edits to a template are saved.</p>
<h4>Parameters</h4>
<ul>
<li>&#039;template&#039; - Reference to the affected template object.</li>
</ul>
';
$lang['admin']['event_help_edittemplatepost'] = '<p>Sent after edits to a template are saved.</p>
<h4>Parameters</h4>
<ul>
<li>&#039;template&#039; - Reference to the affected template object.</li>
</ul>
';
$lang['admin']['event_help_deletetemplatepre'] = '<p>Saadetud enne malli s&uuml;steemist kustutamist.</p>
<h4>Parameetrid</h4>
<ul>
<li>&#039;mall&#039; - Viide s&uuml;ndmusega seotud mallile.</li>
</ul>';
$lang['admin']['event_help_deletetemplatepost'] = '<p>Sent after a template is deleted from the system.</p>
<h4>Parameters</h4>
<ul>
<li>&#039;template&#039; - Reference to the affected template object.</li>
</ul>
';
$lang['admin']['event_help_templateprecompile'] = '<p>Sent before a template is sent to smarty for processing.</p>
<h4>Parameters</h4>
<ul>
<li>&#039;template&#039; - Reference to the affected template text.</li>
</ul>
';
$lang['admin']['event_help_templatepostcompile'] = '<p>Sent after a template has been processed by smarty.</p>
<h4>Parameters</h4>
<ul>
<li>&#039;template&#039; - Reference to the affected template text.</li>
</ul>
';
$lang['admin']['event_help_addglobalcontentpre'] = '<p>Sent before a new global content block is created.</p>
<h4>Parameters</h4>
<ul>
<li>&#039;global_content&#039; - Reference to the affected global content block object.</li>
</ul>
';
$lang['admin']['event_help_addglobalcontentpost'] = '<p>Sent after a new global content block is created.</p>
<h4>Parameters</h4>
<ul>
<li>&#039;global_content&#039; - Reference to the affected global content block object.</li>
</ul>
';
$lang['admin']['event_help_editglobalcontentpre'] = '<p>Sent before edits to a global content block are saved.</p>
<h4>Parameters</h4>
<ul>
<li>&#039;global_content&#039; - Reference to the affected global content block object.</li>
</ul>
';
$lang['admin']['event_help_editglobalcontentpost'] = '<p>Sent after edits to a global content block are saved.</p>
<h4>Parameters</h4>
<ul>
<li>&#039;global_content&#039; - Reference to the affected global content block object.</li>
</ul>
';
$lang['admin']['event_help_deleteglobalcontentpre'] = '<p>Sent before a global content block is deleted from the system.</p>
<h4>Parameters</h4>
<ul>
<li>&#039;global_content&#039; - Reference to the affected global content block object.</li>
</ul>
';
$lang['admin']['event_help_deleteglobalcontentpost'] = '<p>Sent after a global content block is deleted from the system.</p>
<h4>Parameters</h4>
<ul>
<li>&#039;global_content&#039; - Reference to the affected global content block object.</li>
</ul>
';
$lang['admin']['event_help_globalcontentprecompile'] = '<p>Sent before a global content block is sent to smarty for processing.</p>
<h4>Parameters</h4>
<ul>
<li>&#039;global_content&#039; - Reference to the affected global content block text.</li>
</ul>
';
$lang['admin']['event_help_globalcontentpostcompile'] = '<p>Sent after a global content block has been processed by smarty.</p>
<h4>Parameters</h4>
<ul>
<li>&#039;global_content&#039; - Reference to the affected global content block text.</li>
</ul>
';
$lang['admin']['event_help_contenteditpre'] = '<p>Sent before edits to content are saved.</p>
<h4>Parameters</h4>
<ul>
<li>&#039;global_content&#039; - Reference to the affected content object.</li>
</ul>
';
$lang['admin']['event_help_contenteditpost'] = '<p>Sent after edits to content are saved.</p>
<h4>Parameters</h4>
<ul>
<li>&#039;content&#039; - Reference to the affected content object.</li>
</ul>
';
$lang['admin']['event_help_contentdeletepre'] = '<p>Sent before content is deleted from the system.</p>
<h4>Parameters</h4>
<ul>
<li>&#039;content&#039; - Reference to the affected content object.</li>
</ul>
';
$lang['admin']['event_help_contentdeletepost'] = '<p>Sent after content is deleted from the system.</p>
<h4>Parameters</h4>
<ul>
<li>&#039;content&#039; - Reference to the affected content object.</li>
</ul>
';
$lang['admin']['event_help_contentstylesheet'] = '<p>Sent before the sytlesheet is sent to the browser.</p>
<h4>Parameters</h4>
<ul>
<li>&#039;content&#039; - Reference to the affected stylesheet text.</li>
</ul>
';
$lang['admin']['event_help_contentprecompile'] = '<p>Sent before content is sent to smarty for processing.</p>
<h4>Parameters</h4>
<ul>
<li>&#039;content&#039; - Reference to the affected content text.</li>
</ul>
';
$lang['admin']['event_help_contentpostcompile'] = '<p>Sent after content has been processed by smarty.</p>
<h4>Parameters</h4>
<ul>
<li>&#039;content&#039; - Reference to the affected content text.</li>
</ul>
';
$lang['admin']['event_help_contentpostrender'] = '<p>Sent before the combined html is sent to the browser.</p>
<h4>Parameters</h4>
<ul>
<li>&#039;content&#039; - Reference to the html text.</li>
</ul>
';
$lang['admin']['event_help_smartyprecompile'] = '<p>Sent before any content destined for smarty is sent to for processing.</p>
<h4>Parameters</h4>
<ul>
<li>&#039;content&#039; - Reference to the affected text.</li>
</ul>
';
$lang['admin']['event_help_smartypostcompile'] = '<p>Sent after any content destined for smarty has been processed.</p>
<h4>Parameters</h4>
<ul>
<li>&#039;content&#039; - Reference to the affected text.</li>
</ul>
';
$lang['admin']['filterbymodule'] = 'Filtreeri Mooduli J&auml;rgi';
$lang['admin']['showall'] = 'N&auml;ita K&otilde;iki';
$lang['admin']['core'] = 'P&otilde;hiapplikatsioon';
$lang['admin']['defaultpagecontent'] = 'Vaikimisi lehe sisu';
$lang['admin']['file_url'] = 'Lingi failile (URL&#039;i asemel)';
$lang['admin']['no_file_url'] = 'Pole (Kasuta URL&#039;i &uuml;leval)';
$lang['admin']['defaultparentpage'] = 'Vaikimisi vanem leht';
$lang['admin']['error_udt_name_whitespace'] = 'Error: User Defined Tags cannot have spaces in their name.';
$lang['admin']['warning_safe_mode'] = '<strong><em>WARNING:</em></strong> PHP Safe mode is enabled.  This will cause difficulty with files uploaded via the web browser interface, including images, theme and module XML packages.  You are advised to contact your site administrator to see about disabling safe mode.';
$lang['admin']['test'] = 'Test';
$lang['admin']['results'] = 'Tulemused';
$lang['admin']['untested'] = 'Testimata';
$lang['admin']['unknown'] = 'Tundmatu';
$lang['admin']['download'] = 'Lae alla';
$lang['admin']['frontendwysiwygtouse'] = 'Frontend wysiwyg';
$lang['admin']['all_groups'] = 'K&otilde;ik grupid';
$lang['admin']['error_type'] = 'Vea t&uuml;&uuml;p';
$lang['admin']['contenttype_errorpage'] = 'Vealeht';
$lang['admin']['errorpagealreadyinuse'] = 'Vea kood on juba kasutuses';
$lang['admin']['404description'] = 'Lehte ei leitud';
$lang['admin']['usernotfound'] = 'Kasutajat ei leitud';
$lang['admin']['passwordchange'] = 'Palun sisestage uus parool';
$lang['admin']['recoveryemailsent'] = 'Email saadeti salvestatud aadressile. Palun kontrolli oma sisendkasti edasiste juhendite jaoks.';
$lang['admin']['errorsendingemail'] = 'Emaili saatmisel ilmnes viga. Kontakteeru oma administraatoriga.';
$lang['admin']['passwordchangedlogin'] = 'Parool muudetud. Palnu logi sisse kasutades uusi isikutunnistusi.';
$lang['admin']['nopasswordforrecovery'] = 'Sellele kasutajale ei ole emaili aadress seatud. Parooli taastamine ei ole v&otilde;imalik. Palun kontakteeru oma administraatoriga.';
$lang['admin']['lostpw'] = 'Unustasid oma parooli?';
$lang['admin']['lostpwemailsubject'] = '[%s] Parooli taastamine';
$lang['admin']['lostpwemail'] = 'You are recieving this e-mail because a request has been made to change the (%s) password associated with this user account (%s).  If you would like to reset the password for this account simply click on the link below or paste it into the url field on your favorite browser:
%s

If you feel this is incorrect or made in error, simply ignore the email and nothing will change.';
$lang['admin']['utma'] = '156861353.3215545266732019000.1241091787.1259062146.1259066226.193';
$lang['admin']['utmz'] = '156861353.1257873337.180.32.utmccn=(organic)|utmcsr=google|utmctr=how to secure cmsms|utmcmd=organic';
$lang['admin']['qca'] = '1240683615-58409973-79915303';
$lang['admin']['utmc'] = '156861353';
$lang['admin']['utmb'] = '156861353.1.10.1259066226';
?>