<?php
$lang['admin']['help_function_dump'] = '<h3>What does this do?</h3>
  <p>This tag can be used to dump the contents of any smarty variable in a more readable format.  This is useful for debugging, and editing templates, to know the format and types of data available.</p>
<h3>How do I use it?</h3>
<p>Insert the tag in the template like <code>{dump item=\'the_smarty_variable_to_dump\'}</code>.</p>
<h3>What parameters does it take</h3>
<ul>
<li><strong>item (required)</strong> - The smarty variable to dump the contents of.</li>
<li>maxlevel - The maximum number of levels to recurse (applicable only if recurse is also supplied.  The default value for this parameter is 3</li>
<li>nomethods - Skip output of methods from objects.</li>
<li>novars - Skip output of object members.</li>
<li>recurse - Recurse a maximum number of levels through the objects providing verbose output for each item until the maximum number of levels is reached.</li>
</ul>';
$lang['admin']['sqlerror'] = 'SQL грешка в %s';
$lang['admin']['image'] = 'Изображение';
$lang['admin']['thumbnail'] = 'Thumbnail';
$lang['admin']['searchable'] = 'Тази страница е индексируема за търсене';
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


</ul>';
$lang['admin']['error_udt_name_chars'] = 'A valid UDT name starts with a letter or underscore, followed by any number of letters, numbers, or underscores.';
$lang['admin']['errorupdatetemplateallpages'] = 'Шаблонът не е активен';
$lang['admin']['hidefrommenu'] = 'Скрива от менюто';
$lang['admin']['settemplate'] = 'Задава шаблон';
$lang['admin']['text_settemplate'] = 'Задава на избраните страници различен шаблон';
$lang['admin']['cachable'] = 'Да бъде кеширано';
$lang['admin']['noncachable'] = 'Не кешируемо';
$lang['admin']['copy_from'] = 'Копира от';
$lang['admin']['copy_to'] = 'Копира към';
$lang['admin']['copycontent'] = 'Копира съдържание';
$lang['admin']['md5_function'] = 'md5 функция';
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
$lang['admin']['file_uploads'] = 'File uploads';
$lang['admin']['test_remote_url'] = 'Test for remote URL';
$lang['admin']['test_remote_url_failed'] = 'You will probably not be able to open a file on a remote web server.';
$lang['admin']['test_allow_url_fopen_failed'] = 'When allow url fopen is disabled you will not be able to accessing URL object like file using the ftp or http protocol.';
$lang['admin']['connection_error'] = 'Outgoing http connections do not appear to work! There is a firewall or some ACL for external connections?. This will result in module manager, and potentially other functionality failing.';
$lang['admin']['remote_connection_timeout'] = 'Connection Timed Out!';
$lang['admin']['search_string_find'] = 'Connection ok!';
$lang['admin']['connection_failed'] = 'Connection failed!';
$lang['admin']['remote_response_ok'] = 'Remote response: ok!';
$lang['admin']['remote_response_404'] = 'Remote response: not found!';
$lang['admin']['remote_response_error'] = 'Remote response: error!';
$lang['admin']['notifications_to_handle'] = 'You have <b>%d</b> unhandled notifications';
$lang['admin']['notification_to_handle'] = 'You have <b>%d</b> unhandled notification';
$lang['admin']['notifications'] = 'Notifications';
$lang['admin']['dashboard'] = 'View Dashboard';
$lang['admin']['ignorenotificationsfrommodules'] = 'Ignore notifications from these modules';
$lang['admin']['admin_enablenotifications'] = 'Allow users to view notifications<br/><em>(notifications will be displayed on all admin pages)</em>';
$lang['admin']['enablenotifications'] = 'Enable user notifications in the admin section';
$lang['admin']['test_check_open_basedir_failed'] = 'Open basedir restrictions are in effect. You may have difficulty with some addon functionality with this restriction';
$lang['admin']['config_writable'] = 'config.php writable. It is more safe if you change permission to read-only';
$lang['admin']['caution'] = 'Caution';
$lang['admin']['create_dir_and_file'] = 'Checking if the httpd process can create a file inside of a directory it created';
$lang['admin']['os_session_save_path'] = 'No check because OS path';
$lang['admin']['unlimited'] = 'Unlimited';
$lang['admin']['open_basedir'] = 'PHP Open Basedir';
$lang['admin']['open_basedir_active'] = 'No check because open basedir active';
$lang['admin']['invalid'] = 'Invalid';
$lang['admin']['checksum_passed'] = 'All checksums match those in the uploaded file';
$lang['admin']['error_retrieving_file_list'] = 'Error retrieving file list';
$lang['admin']['files_checksum_failed'] = 'Files could not be checksummed';
$lang['admin']['failure'] = 'Failure';
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
$lang['admin']['files_not_found'] = 'Files Not found';
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
$lang['admin']['warning_mail_settings'] = 'Your mail settings have not been configured.  This could interfere with the ability of your website to send email messages.  You should go to <a href="%s">Extensions >> CMSMailer</a> and configure the mail settings with the information provided by your host.';
$lang['admin']['view_page'] = 'View this page in a new window';
$lang['admin']['off'] = 'Off';
$lang['admin']['on'] = 'On';
$lang['admin']['invalid_test'] = 'Invalid test param value!';
$lang['admin']['copy_paste_forum'] = 'View Text Report <em>(suitable for copying into forum posts)</em>';
$lang['admin']['permission_information'] = 'Permission Information';
$lang['admin']['server_os'] = 'Server Operating System';
$lang['admin']['server_api'] = 'Server API';
$lang['admin']['server_software'] = 'Server Software';
$lang['admin']['server_information'] = 'Server Information';
$lang['admin']['session_save_path'] = 'Session Save Path';
$lang['admin']['max_execution_time'] = 'Maximum Execution Time';
$lang['admin']['gd_version'] = 'GD version';
$lang['admin']['upload_max_filesize'] = 'Maximum Upload Size';
$lang['admin']['post_max_size'] = 'Maximum Post Size';
$lang['admin']['memory_limit'] = 'PHP Effective Memory Limit';
$lang['admin']['server_db_type'] = 'Server Database';
$lang['admin']['server_db_version'] = 'Server Database Version';
$lang['admin']['phpversion'] = 'Current PHP Version';
$lang['admin']['safe_mode'] = 'PHP Safe Mode';
$lang['admin']['php_information'] = 'PHP Information';
$lang['admin']['cms_install_information'] = 'CMS Install Information';
$lang['admin']['cms_version'] = 'CMS Version';
$lang['admin']['installed_modules'] = 'Installed Modules';
$lang['admin']['config_information'] = 'Config Information';
$lang['admin']['systeminfo_copy_paste'] = 'Please copy and paste this selected text into your forum posting';
$lang['admin']['help_systeminformation'] = 'The information displayed below is collected from a variety of locations, and summarized here so that you may be able to conveniently find some of the information required when trying to diagnose a problem or request help with your CMS Made Simple installation.';
$lang['admin']['systeminfo'] = 'System Information';
$lang['admin']['systeminfodescription'] = 'Display various pieces of information about your system that may be useful in diagnosing problems';
$lang['admin']['welcome_user'] = 'Welcome';
$lang['admin']['itsbeensincelogin'] = 'It has been %s since you last login';
$lang['admin']['days'] = 'days';
$lang['admin']['day'] = 'day';
$lang['admin']['hours'] = 'hours';
$lang['admin']['hour'] = 'hour';
$lang['admin']['minutes'] = 'minutes';
$lang['admin']['minute'] = 'minute';
$lang['admin']['help_css_max_age'] = 'This parameter should be set relatively high for static sites, and should be set to 0 for site development';
$lang['admin']['css_max_age'] = 'Maximum amount of time (seconds) stylesheets can be cached in the browser';
$lang['admin']['error'] = 'Error';
$lang['admin']['clear_version_check_cache'] = 'Clear any cached version check information on submit';
$lang['admin']['new_version_available'] = '<em>Notice:</em> A new version of CMS Made Simple is available.  Please notify your administrator.';
$lang['admin']['info_urlcheckversion'] = 'If this url is the word "none" no checks will be made.<br/>An empty string will result in a default URL being used.';
$lang['admin']['urlcheckversion'] = 'Check for new CMS versions using this URL';
$lang['admin']['master_admintheme'] = 'Default Administration Theme (for the login page and new user accounts)';
$lang['admin']['contenttype_separator'] = 'Separator';
$lang['admin']['contenttype_sectionheader'] = 'Section Header';
$lang['admin']['contenttype_link'] = 'External Link';
$lang['admin']['contenttype_content'] = 'Content';
$lang['admin']['contenttype_pagelink'] = 'Internal Page Link';
$lang['admin']['nogcbwysiwyg'] = 'Disallow WYSIWYG editors on global content blocks';
$lang['admin']['destination_page'] = 'Destination Page';
$lang['admin']['additional_params'] = 'Additional Parameters';
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
$lang['admin']['login_info_title'] = 'Information';
$lang['admin']['login_info'] = 'For the Admin console to work properly';
$lang['admin']['login_info_params'] = '<ol> 
  <li>Cookies must be enabled in your browser</li> 
  <li>Javascript must be enabled in your browser</li> 
  <li>Popup windows must be allowed for the following address:</li> 
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
        <li>b) Add <code>{embed url="http://www.google.com"}</code> into your page content or in the body of your page template.</li>
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
  <h3>This plugin has been removed as of CMS made simple version 1.5</h3>';
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
$lang['admin']['first'] = 'First';
$lang['admin']['last'] = 'Last';
$lang['admin']['adminspecialgroup'] = 'Warning: Members of this group automatically have all permissions';
$lang['admin']['disablesafemodewarning'] = 'Disable admin safe mode warning';
$lang['admin']['allowparamcheckwarnings'] = 'Allow parameter checks to create warning messages';
$lang['admin']['date_format_string'] = 'Date Format String';
$lang['admin']['date_format_string_help'] = '<em>strftime</em> formatted date format string.  Try googling \'strftime\'';
$lang['admin']['last_modified_at'] = 'Last modified at';
$lang['admin']['last_modified_by'] = 'Last modified by';
$lang['admin']['read'] = 'Read';
$lang['admin']['write'] = 'Write';
$lang['admin']['execute'] = 'Execute';
$lang['admin']['group'] = 'Group';
$lang['admin']['other'] = 'Other';
$lang['admin']['event_desc_moduleupgraded'] = 'Sent after a module is upgraded';
$lang['admin']['event_desc_moduleinstalled'] = 'Sent after a module is installed';
$lang['admin']['event_desc_moduleuninstalled'] = 'Sent after a module is uninstalled';
$lang['admin']['event_desc_edituserdefinedtagpost'] = 'Sent after a user defined tag is updated';
$lang['admin']['event_desc_edituserdefinedtagpre'] = 'Sent prior to a user defined tag update';
$lang['admin']['event_desc_deleteuserdefinedtagpre'] = 'Sent prior to deleting a user defined tag';
$lang['admin']['event_desc_deleteuserdefinedtagpost'] = 'Sent after a user defined tag is deleted';
$lang['admin']['event_desc_adduserdefinedtagpost'] = 'Sent after a user defined tag is inserted';
$lang['admin']['event_desc_adduserdefinedtagpre'] = 'Sent prior to a user defined tag insert';
$lang['admin']['global_umask'] = 'File Creation Mask (umask)';
$lang['admin']['errorcantcreatefile'] = 'Could not create a file (permissions problem?)';
$lang['admin']['errormoduleversionincompatible'] = 'Module is incompatible with this version of CMS';
$lang['admin']['errormodulenotloaded'] = 'Internal error, the module has not been instantiated';
$lang['admin']['errormodulenotfound'] = 'Internal error, could not find the instance of a module';
$lang['admin']['errorinstallfailed'] = 'Module installation failed';
$lang['admin']['errormodulewontload'] = 'Problem instantiating an available module';
$lang['admin']['frontendlang'] = 'Default language for the frontend';
$lang['admin']['info_edituser_password'] = 'Change this field to change the user\'s password';
$lang['admin']['info_edituser_passwordagain'] = 'Change this field to change the user\'s password';
$lang['admin']['originator'] = 'Originator';
$lang['admin']['module_name'] = 'Module Name';
$lang['admin']['event_name'] = 'Event Name';
$lang['admin']['event_description'] = 'Event Description';
$lang['admin']['error_delete_default_parent'] = 'You cannot delete the parent of a the default page.';
$lang['admin']['jsdisabled'] = 'Sorry, this function requires that you have Javascript enabled.';
$lang['admin']['order'] = 'Подреди';
$lang['admin']['reorderpages'] = 'Подреди Страници';
$lang['admin']['reorder'] = 'Подреди';
$lang['admin']['page_reordered'] = 'Page was successfully reordered.';
$lang['admin']['pages_reordered'] = 'Pages were successfully reordered';
$lang['admin']['sibling_duplicate_order'] = 'Two sibling pages can not have the same order. Pages were not reordered.';
$lang['admin']['no_orders_changed'] = 'You chose to reorder pages, but you did not change the order of any of them. Pages were not reordered.';
$lang['admin']['order_too_small'] = 'A page order cannot be zero. Pages were not reordered.';
$lang['admin']['order_too_large'] = 'A page order cannot be larger than the number of pages in that level. Pages were not reordered.';
$lang['admin']['user_tag'] = 'Потребителски Таг';
$lang['admin']['add'] = 'Добави';
$lang['admin']['CSS'] = 'CSS';
$lang['admin']['about'] = 'Относно';
$lang['admin']['action'] = 'Действие';
$lang['admin']['actionstatus'] = 'Действие/Статус';
$lang['admin']['active'] = 'Активен';
$lang['admin']['addcontent'] = 'Прибавя ново съдържание';
$lang['admin']['cantremove'] = 'Не може да се премахне';
$lang['admin']['changepermissions'] = 'Change Permissions';
$lang['admin']['changepermissionsconfirm'] = 'USE CAUTION\\n\\nThis action will attempt to ensure that all of the files making up the module are writable by the web server.\\nAre you sure you want to continue?';
$lang['admin']['contentadded'] = 'The content was successfully added to the database.';
$lang['admin']['contentupdated'] = 'The content was successfully updated.';
$lang['admin']['contentdeleted'] = 'The content was successfully removed from the database.';
$lang['admin']['success'] = 'Success';
$lang['admin']['addcss'] = 'Нов CSS';
$lang['admin']['addgroup'] = 'Прибавя нова група';
$lang['admin']['additionaleditors'] = 'Други редактори';
$lang['admin']['addtemplate'] = 'Прибавя нов шаблон';
$lang['admin']['adduser'] = 'Нов потребител';
$lang['admin']['addusertag'] = 'Нов потребителски таг';
$lang['admin']['adminaccess'] = 'Достъп до админ панела';
$lang['admin']['adminlog'] = 'Админ лог';
$lang['admin']['adminlogcleared'] = 'The Admin Log was succesfully cleared';
$lang['admin']['adminlogempty'] = 'The Admin Log is empty';
$lang['admin']['adminsystemtitle'] = 'CMS Админ система';
$lang['admin']['adminpaneltitle'] = 'CMS Made Simple Админ Панел';
$lang['admin']['advanced'] = 'Напреднали';
$lang['admin']['aliasalreadyused'] = 'Псевдонима вече се използва на друга страница';
$lang['admin']['aliasmustbelettersandnumbers'] = 'Псевдонима трябва да е букви и цифри';
$lang['admin']['aliasnotaninteger'] = 'Псевдонима не може да е цяло число';
$lang['admin']['allpagesmodified'] = 'Всички страници са променени!';
$lang['admin']['assignments'] = 'Възлагане на потребители';
$lang['admin']['associationexists'] = 'Тази асоциация вече съществува';
$lang['admin']['autoinstallupgrade'] = 'Автоматично инсталира или обновява';
$lang['admin']['back'] = 'Към менюто';
$lang['admin']['backtoplugins'] = 'Към листа с плъгините';
$lang['admin']['cancel'] = 'Отказ';
$lang['admin']['cantchmodfiles'] = 'Couldn\'t change permissions on some files';
$lang['admin']['cantremovefiles'] = 'Problem Removing Files (permissions?)';
$lang['admin']['confirmcancel'] = 'Are you sure you want to discard your changes? Click OK to discard all changes. Click Cancel to continue editing.';
$lang['admin']['canceldescription'] = 'Откажи Промените';
$lang['admin']['clearadminlog'] = 'Изчиства админ лог';
$lang['admin']['code'] = 'Код';
$lang['admin']['confirmdefault'] = 'Промяна на страница по подразбиране?';
$lang['admin']['confirmdeletedir'] = 'Сигурни ли сте в изтриване на тази папка и нейното съдържание?';
$lang['admin']['content'] = 'Съдържание';
$lang['admin']['contentmanagement'] = 'Управление на съдържанието';
$lang['admin']['contenttype'] = 'Тип съдържание';
$lang['admin']['copy'] = 'Копира';
$lang['admin']['copytemplate'] = 'Копира шаблон';
$lang['admin']['create'] = 'Създава';
$lang['admin']['createnewfolder'] = 'Създава нова папка';
$lang['admin']['cssalreadyused'] = 'Име на CSS вече съществува';
$lang['admin']['cssmanagement'] = 'Управление на CSS';
$lang['admin']['currentassociations'] = 'Настоящи асоциации';
$lang['admin']['currentdirectory'] = 'Настояща папка';
$lang['admin']['currentgroups'] = 'Настоящи групи';
$lang['admin']['currentpages'] = 'Настоящи страници';
$lang['admin']['currenttemplates'] = 'Настоящи шаблони';
$lang['admin']['currentusers'] = 'Настоящи потребители';
$lang['admin']['custom404'] = 'Потребителско съобщение за грешка 404';
$lang['admin']['database'] = 'База данни';
$lang['admin']['databaseprefix'] = 'Представка за базата данни';
$lang['admin']['databasetype'] = 'Тип база данни';
$lang['admin']['date'] = 'Дата';
$lang['admin']['default'] = 'По подразбиране';
$lang['admin']['delete'] = 'Изтрива';
$lang['admin']['deleteconfirm'] = 'Сигурни ли сте че искате да изтриете?';
$lang['admin']['deleteassociationconfirm'] = 'Are you sure you want to delete association to - %s - ?';
$lang['admin']['deletecss'] = 'Изтрива CSS';
$lang['admin']['dependencies'] = 'Зависимости';
$lang['admin']['description'] = 'Описание';
$lang['admin']['directoryexists'] = 'Тази папка вече съществува.';
$lang['admin']['down'] = 'Надолу';
$lang['admin']['edit'] = 'Редактира';
$lang['admin']['editconfiguration'] = 'Редактира конфигурация';
$lang['admin']['editcontent'] = 'Редактира съдържание';
$lang['admin']['editcss'] = 'Редактира stylesheet';
$lang['admin']['editcsssuccess'] = 'Stylesheet updated';
$lang['admin']['editgroup'] = 'Редактира група';
$lang['admin']['editpage'] = 'Редактира страница';
$lang['admin']['edittemplate'] = 'Редактира шаблон';
$lang['admin']['edittemplatesuccess'] = 'Template updated';
$lang['admin']['edituser'] = 'Редактира потребител';
$lang['admin']['editusertag'] = 'Редактира потребителски таг';
$lang['admin']['usertagadded'] = 'Потребителският Таг беше успешно добавен.';
$lang['admin']['usertagupdated'] = 'Потребителският Таг беше успешно обновен.';
$lang['admin']['usertagdeleted'] = 'Потребителският Таг беше успешно изтрит.';
$lang['admin']['email'] = 'Email адрес';
$lang['admin']['errorattempteddowngrade'] = 'Инсталирането на този модул ще свали версията.  Операцията прекратена.';
$lang['admin']['errorchildcontent'] = 'Съдържанието има подсъдържания. Моля премахнете първо тях.';
$lang['admin']['errorcopyingtemplate'] = 'Грешка при копиране на шаблон';
$lang['admin']['errorcouldnotparsexml'] = 'Error parsing XML file. Please make sure you are uploading a .xml file and not a .tar.gz or zip file.';
$lang['admin']['errorcreatingassociation'] = 'Грешка при създаване на асоциация';
$lang['admin']['errorcssinuse'] = 'Този stylesheet още се използва от някой шаблон/страница. Моля премахнете асоциацията първо.';
$lang['admin']['errordefaultpage'] = 'Не може да изтрие страницата по подразбиране. Моля посочете друга страница по подразбиране първо.';
$lang['admin']['errordeletingassociation'] = 'Грешка при изтриването на асоциация.';
$lang['admin']['errordeletingcss'] = 'Грешка при изтриването на css';
$lang['admin']['errordeletingdirectory'] = 'Не може да изтрие папката. Проблеми с правата?';
$lang['admin']['errordeletingfile'] = 'Не може да изтрие файла. Проблеми с правата?';
$lang['admin']['errordirectorynotwritable'] = 'Няма права за запис в тази папка';
$lang['admin']['errordtdmismatch'] = 'DTD Version missing or incompatible in the XML file';
$lang['admin']['errorgettingcssname'] = 'Грешка при изтеглянето на името на Stylesheet';
$lang['admin']['errorgettingtemplatename'] = 'Грешка при изтеглянето на името на шаблона';
$lang['admin']['errorincompletexml'] = 'XML файла не е цял или е невалиден';
$lang['admin']['uploadxmlfile'] = 'Инсталирай модула чрез XML файл';
$lang['admin']['cachenotwritable'] = 'Cache folder is not writable. Clearing cache will not work. Please make the tmp/cache folder have full read/write/execute permissions (chmod 777)';
$lang['admin']['modulesnotwritable'] = 'The modules folder is not writable, if you would like to install modules by uploading an XML file you need to make the modules folder have full read/write/execute permissions (chmod 777).';
$lang['admin']['noxmlfileuploaded'] = 'No file was uploaded. To install a module via XML you must choose and upload an module .xml file from your computer.';
$lang['admin']['errorinsertingcss'] = 'Грешка при вмъкването на Stylesheet';
$lang['admin']['errorinsertinggroup'] = 'Грешка при вмъкването на група';
$lang['admin']['errorinsertingtag'] = 'Грешка при вмъкването на потребителски таг';
$lang['admin']['errorinsertingtemplate'] = 'Грешка при вмъкването на шаблон';
$lang['admin']['errorinsertinguser'] = 'Грешка при вмъкването на потребител';
$lang['admin']['errornofilesexported'] = 'Грешка при експортиране към xml ';
$lang['admin']['errorretrievingcss'] = 'Грешка при получаването на stylesheet';
$lang['admin']['errorretrievingtemplate'] = 'Грешка при получаването на шаблон';
$lang['admin']['errortemplateinuse'] = 'Този шаблон още се използва от някоя страница. Моля премахнете го там първо.';
$lang['admin']['errorupdatingcss'] = 'Грешка при обновяване на Stylesheet';
$lang['admin']['errorupdatinggroup'] = 'Грешка при обновяване на група';
$lang['admin']['errorupdatingpages'] = 'Грешка при обновяването на страниците';
$lang['admin']['errorupdatingtemplate'] = 'Грешка при обновяване на шаблон';
$lang['admin']['errorupdatinguser'] = 'Грешка при обновяване на потребител';
$lang['admin']['errorupdatingusertag'] = 'Грешка при обновяване на потребителски таг';
$lang['admin']['erroruserinuse'] = 'Този потребител още е собственик на страници. Моля сменете собственика на тази страници преди да го изтриете.';
$lang['admin']['eventhandlers'] = 'Събития';
$lang['admin']['editeventhandler'] = 'Edit Event Handler';
$lang['admin']['eventhandlerdescription'] = 'Associate user tags with events';
$lang['admin']['export'] = 'Експорт';
$lang['admin']['event'] = 'Събитие';
$lang['admin']['false'] = 'Грешно';
$lang['admin']['settrue'] = 'Set True';
$lang['admin']['filecreatedirnodoubledot'] = 'Папката не може да съдържа \'..\'.';
$lang['admin']['filecreatedirnoname'] = 'Не може да създаде папка без име.';
$lang['admin']['filecreatedirnoslash'] = 'Папката не може да съдържа \'/\' or \'\'.';
$lang['admin']['filemanagement'] = 'Управление на файлове';
$lang['admin']['filename'] = 'Име на файл';
$lang['admin']['filenotuploaded'] = 'Файлът не може да бъде качен. Проблем с правате?';
$lang['admin']['filesize'] = 'Размер';
$lang['admin']['firstname'] = 'Първо име';
$lang['admin']['groupmanagement'] = 'Управление на групи';
$lang['admin']['grouppermissions'] = 'Права на групу';
$lang['admin']['handler'] = 'Handler (user defined tag)';
$lang['admin']['headtags'] = 'Заглавни тагове';
$lang['admin']['help'] = 'Помощ';
$lang['admin']['new_window'] = 'нов прозорец';
$lang['admin']['helpwithsection'] = '%s Help';
$lang['admin']['helpaddtemplate'] = '<p>Шаблонът контролира начинът, по който се визуализира съдържанието на страницата.</p><p>Можете да създадете ваш шаблон и да прибавите CSS стилове чрез Stylesheet.</p>';
$lang['admin']['helplisttemplate'] = '<p>Тук можете да редактирате, изтривате или създавате шаблони.</p><p>За да създадете нов шаблон, натиснете върху <u>Прибавя нов шаблон</u>.</p><p>Ако искате този шаблон да е по подразбиране за всички страници, то натиснете върху <u>Задава на всички</u>.</p><p>Ако искате да копирате този шаблон натиснете върху <u>Копира</u> и тогава ще трябва да напишете новото име на новия шаблон.</p>';
$lang['admin']['home'] = 'Home';
$lang['admin']['homepage'] = 'Homepage';
$lang['admin']['hostname'] = 'Име на хост';
$lang['admin']['idnotvalid'] = 'Не е зададено валидно id';
$lang['admin']['imagemanagement'] = 'Управление на изображения';
$lang['admin']['informationmissing'] = 'Липсва информация';
$lang['admin']['install'] = 'Инсталира';
$lang['admin']['invalidcode'] = 'Въведен невалиден код.';
$lang['admin']['illegalcharacters'] = 'Invalid characters in field %s.';
$lang['admin']['invalidcode_brace_missing'] = 'Uneven amount of braces';
$lang['admin']['invalidtemplate'] = 'Този шаблон е невалиден';
$lang['admin']['itemid'] = 'ID на item';
$lang['admin']['itemname'] = 'Item име';
$lang['admin']['language'] = 'Език';
$lang['admin']['lastname'] = 'Фамилия';
$lang['admin']['logout'] = 'Изход';
$lang['admin']['loginprompt'] = 'Моля въведете вашето потребителско име и парола.';
$lang['admin']['logintitle'] = 'CMS Made Simple Админ Вход';
$lang['admin']['menutext'] = 'Текст на меню';
$lang['admin']['missingparams'] = 'Някои параметри липсват или са невалидни';
$lang['admin']['modifygroupassignments'] = 'Редактира правата на група';
$lang['admin']['moduleabout'] = 'Относно модул %s';
$lang['admin']['modulehelp'] = 'Помощ за модул %s';
$lang['admin']['msg_defaultcontent'] = 'Add code here that should appear as the default content of all new pages';
$lang['admin']['msg_defaultmetadata'] = 'Add code here that should appear in the metadata section of all new pages';
$lang['admin']['wikihelp'] = 'Community Help';
$lang['admin']['moduleinstalled'] = 'Модулът е вече инсталиран';
$lang['admin']['moduleinterface'] = '%s интерфейс';
$lang['admin']['modules'] = 'Модули';
$lang['admin']['move'] = 'Мести';
$lang['admin']['name'] = 'Име';
$lang['admin']['needpermissionto'] = 'Необходими са \'%s\' права за да извършите тази функция.';
$lang['admin']['needupgrade'] = 'Нуждае се от обновяване';
$lang['admin']['newtemplatename'] = 'Ново име на шаблон';
$lang['admin']['next'] = 'Следващ';
$lang['admin']['noaccessto'] = 'Няма достъп до %s';
$lang['admin']['nocss'] = 'Няма Stylesheet';
$lang['admin']['noentries'] = 'Няма данни';
$lang['admin']['nofieldgiven'] = 'Няма зададен %s!';
$lang['admin']['nofiles'] = 'Няма файлове';
$lang['admin']['nopasswordmatch'] = 'Паролите не съвпадат';
$lang['admin']['norealdirectory'] = 'Няма реална папка';
$lang['admin']['norealfile'] = 'Няма реален файл';
$lang['admin']['notinstalled'] = 'Не е инсталиран';
$lang['admin']['overwritemodule'] = 'Overwrite на съществуващи модули';
$lang['admin']['owner'] = 'Собственик';
$lang['admin']['pagealias'] = 'Псевдоним на страница';
$lang['admin']['pagedefaults'] = 'Page Defaults';
$lang['admin']['pagedefaultsdescription'] = 'Set default values for new pages';
$lang['admin']['parent'] = 'Родител';
$lang['admin']['password'] = 'Парола';
$lang['admin']['passwordagain'] = 'Парола (отново)';
$lang['admin']['permission'] = 'Право';
$lang['admin']['permissions'] = 'Права';
$lang['admin']['permissionschanged'] = 'Правата са обновени';
$lang['admin']['pluginabout'] = 'Относно таг %s';
$lang['admin']['pluginhelp'] = 'Помощ  за таг %s';
$lang['admin']['pluginmanagement'] = 'Управление на плъгини';
$lang['admin']['prefsupdated'] = 'Опции за обновени.';
$lang['admin']['preview'] = 'Преглед';
$lang['admin']['previewdescription'] = 'Прегледай промените';
$lang['admin']['previous'] = 'Предишен';
$lang['admin']['remove'] = 'Премахни';
$lang['admin']['removeconfirm'] = 'This action will permanently remove the files making up this module from this installation.\\nAre you sure you want to proceed?';
$lang['admin']['removecssassociation'] = 'Премахва Stylesheet асоциация';
$lang['admin']['saveconfig'] = 'Запазва конфигурация';
$lang['admin']['send'] = 'Изпраща';
$lang['admin']['setallcontent'] = 'Задава на всички';
$lang['admin']['setallcontentconfirm'] = 'Сигурни ли сте че искате да зададете този шаблон на всички страници?';
$lang['admin']['showinmenu'] = 'Показва в менюто';
$lang['admin']['showsite'] = 'Показва сайта';
$lang['admin']['sitedownmessage'] = 'Съобщение при сваляне на сайта';
$lang['admin']['siteprefs'] = 'Общи настройки';
$lang['admin']['status'] = 'Статус';
$lang['admin']['stylesheet'] = 'Стил';
$lang['admin']['submit'] = 'Изпраща';
$lang['admin']['submitdescription'] = 'Запази промените';
$lang['admin']['tags'] = 'Тагове';
$lang['admin']['template'] = 'Шаблон';
$lang['admin']['templateexists'] = 'Това име на шаблон вече съществува';
$lang['admin']['templatemanagement'] = 'Управление на шаблони';
$lang['admin']['title'] = 'Заглавие';
$lang['admin']['tools'] = 'Инструменти';
$lang['admin']['true'] = 'Вярно';
$lang['admin']['setfalse'] = 'Set False';
$lang['admin']['type'] = 'Тип';
$lang['admin']['typenotvalid'] = 'Невалиден тип';
$lang['admin']['uninstall'] = 'Деинсталира';
$lang['admin']['uninstallconfirm'] = 'Сигурни ли сте в деинсталацията на избраното от вас?';
$lang['admin']['up'] = 'Нагоре';
$lang['admin']['upgrade'] = 'Обновяване';
$lang['admin']['upgradeconfirm'] = 'Сигурни ли сте в обновяването?';
$lang['admin']['uploadfile'] = 'Ъплоуд на файл';
$lang['admin']['url'] = 'URL';
$lang['admin']['useadvancedcss'] = 'Използване на напреднало управление на stylesheet';
$lang['admin']['user'] = 'Потребител';
$lang['admin']['userdefinedtags'] = 'Потребителски тагове';
$lang['admin']['usermanagement'] = 'Управление на потребители';
$lang['admin']['username'] = 'Потребителско име';
$lang['admin']['usernameincorrect'] = 'Невалидно потребителско име или парола';
$lang['admin']['userprefs'] = 'Потребителски опции';
$lang['admin']['usersassignedtogroup'] = 'Потребители в групата %s';
$lang['admin']['usertagexists'] = 'Таг с такова име съществува. Изберете друго име.';
$lang['admin']['usewysiwyg'] = 'Изполва WYSIWYG редактор за съдържание';
$lang['admin']['version'] = 'Версия';
$lang['admin']['view'] = 'Преглед';
$lang['admin']['welcomemsg'] = 'Привет %s';
$lang['admin']['directoryabove'] = 'папка на настоящето ниво';
$lang['admin']['nodefault'] = 'Няма избран по подразбиране';
$lang['admin']['blobexists'] = 'Име на Html Blob вече съществува';
$lang['admin']['blobmanagement'] = 'Управление на HTML Blob';
$lang['admin']['errorinsertingblob'] = 'Грешка при задаването на Html Blob';
$lang['admin']['addhtmlblob'] = 'Нов Html Blob';
$lang['admin']['edithtmlblob'] = 'Редактира Html Blob';
$lang['admin']['edithtmlblobsuccess'] = 'Global content block updated';
$lang['admin']['tagtousegcb'] = 'Tag to Use this Block';
$lang['admin']['gcb_wysiwyg'] = 'Enable GCB WYSIWYG';
$lang['admin']['gcb_wysiwyg_help'] = 'Enable the WYSIWYG editor while editing Global Content Blocks';
$lang['admin']['filemanager'] = 'Управление на файлове';
$lang['admin']['imagemanager'] = 'Управление на изображения';
$lang['admin']['encoding'] = 'Енкодинг';
$lang['admin']['clearcache'] = 'Изчиства Кеша';
$lang['admin']['clear'] = 'Изчиства';
$lang['admin']['cachecleared'] = 'Кеша изчистен';
$lang['admin']['apply'] = 'Прилага';
$lang['admin']['applydescription'] = 'Запази промените и продължи да редактираш';
$lang['admin']['none'] = 'Нищо';
$lang['admin']['wysiwygtouse'] = 'Избира WYSIWYG редактор';
$lang['admin']['syntaxhighlightertouse'] = 'Select syntax highlighter to use';
$lang['admin']['hasdependents'] = 'Има зависимости';
$lang['admin']['missingdependency'] = 'Липсваща зависимост';
$lang['admin']['minimumversion'] = 'Минимална версия';
$lang['admin']['minimumversionrequired'] = 'Minimum CMSMS Version Required';
$lang['admin']['maximumversion'] = 'Maximum Version';
$lang['admin']['maximumversionsupported'] = 'Maximum CMSMS Version Supported';
$lang['admin']['depsformodule'] = 'Зависимости за модул %s';
$lang['admin']['installed'] = 'Инсталирано';
$lang['admin']['author'] = 'Автор';
$lang['admin']['changehistory'] = 'История на промените';
$lang['admin']['moduleerrormessage'] = 'Error Message for %s Module';
$lang['admin']['moduleupgradeerror'] = 'There was an error upgrading the module.';
$lang['admin']['moduleinstallmessage'] = 'Съобщение за инсталация на модул %s';
$lang['admin']['moduleuninstallmessage'] = 'Съобщение за деинсталация на модул %s';
$lang['admin']['admintheme'] = 'Административна тема';
$lang['admin']['addstylesheet'] = 'Прибавя нов Stylesheet';
$lang['admin']['editstylesheet'] = 'Редактира Stylesheet';
$lang['admin']['addcssassociation'] = 'Прибавя нова Stylesheet асоциация';
$lang['admin']['attachstylesheet'] = 'Прикача този Stylesheet';
$lang['admin']['attachtemplate'] = 'Прикача към този шаблон';
$lang['admin']['main'] = 'Главна';
$lang['admin']['pages'] = 'Страници';
$lang['admin']['page'] = 'Page';
$lang['admin']['files'] = 'Файлове';
$lang['admin']['layout'] = 'Разположение';
$lang['admin']['usersgroups'] = 'Потребители & Групи';
$lang['admin']['extensions'] = 'Разширения';
$lang['admin']['preferences'] = 'Опции';
$lang['admin']['admin'] = 'Сайт админ';
$lang['admin']['viewsite'] = 'Преглед на сайта';
$lang['admin']['templatecss'] = 'Задава шаблони към Stylesheet';
$lang['admin']['plugins'] = 'Плъгини';
$lang['admin']['movecontent'] = 'Премества страници';
$lang['admin']['module'] = 'Модули';
$lang['admin']['usertags'] = 'Потребителски тагове';
$lang['admin']['htmlblobs'] = 'HTML Blobs';
$lang['admin']['adminhome'] = 'Първа страница на админа';
$lang['admin']['liststylesheets'] = 'Стилове';
$lang['admin']['preferencesdescription'] = 'Тук се задават различни общо-валидни за целия сайт настройки.';
$lang['admin']['adminlogdescription'] = 'Показва лог на административния панел.';
$lang['admin']['mainmenu'] = 'Главно меню';
$lang['admin']['users'] = 'Потребители';
$lang['admin']['usersdescription'] = 'От тук се управляват потребителите.';
$lang['admin']['groups'] = 'Групи';
$lang['admin']['groupsdescription'] = 'От тук се управляват групите.';
$lang['admin']['groupassignments'] = 'Потребители в Групи';
$lang['admin']['groupassignmentdescription'] = 'От тук се управляват групите и потребители в тях.';
$lang['admin']['groupperms'] = 'Права на групи';
$lang['admin']['grouppermsdescription'] = 'От тук се управляват правата на достъп към групите.';
$lang['admin']['pagesdescription'] = 'От тук се прибавя и редактират страници и друго съдържание.';
$lang['admin']['htmlblobdescription'] = 'HTML Blobs са парчета код които се поставят на различни места в съдържанието на сайта или в шаблоните.';
$lang['admin']['templates'] = 'Шаблони';
$lang['admin']['templatesdescription'] = 'От тук се прибавят или редактират шаблоните. Шаблоните са начин чрез който да дефинирате как ще изглежда вашия сайт.';
$lang['admin']['stylesheets'] = 'Стилове';
$lang['admin']['stylesheetsdescription'] = 'Управлението на стиловете е напреднал начин за използването на CSS, по отделно, в шаблоните.';
$lang['admin']['filemanagerdescription'] = 'Ъплоуд и управление на файлове.';
$lang['admin']['imagemanagerdescription'] = 'Ъплоуд/редакция и премахване на изображения.';
$lang['admin']['moduledescription'] = 'Модулите увеличават функционалността на CMS Made Simple.';
$lang['admin']['tagdescription'] = 'Таговете прибавят лесни за употреба функционални част за употреба в съдържанието на сайта или шаблоните.';
$lang['admin']['usertagdescription'] = 'Таговете правят възможно задаването на различни по характер задачи.';
$lang['admin']['installdirwarning'] = '<em><strong>ВНИМАНИЕ:</strong></em> папката с инсталацията все още съществува. Моля премахнете я напълно преди да продължите.';
$lang['admin']['subitems'] = 'Подitems';
$lang['admin']['extensionsdescription'] = 'Модули, тагове и други такива.';
$lang['admin']['usersgroupsdescription'] = 'Свързани с потребителите и групите.';
$lang['admin']['layoutdescription'] = 'Изглед на сайта.';
$lang['admin']['admindescription'] = 'Функции за администраране.';
$lang['admin']['contentdescription'] = 'Тук се прибавя или редактира съдържание.';
$lang['admin']['enablecustom404'] = 'Активация на свое съобщение за грешка 404';
$lang['admin']['enablesitedown'] = 'Съобщение при временно сваляне на сайта';
$lang['admin']['bookmarks'] = 'Отметки';
$lang['admin']['user_created'] = 'Добавен е потребител';
$lang['admin']['forums'] = 'Forums';
$lang['admin']['wiki'] = 'Wiki';
$lang['admin']['irc'] = 'IRC';
$lang['admin']['module_help'] = 'Module Help';
$lang['admin']['managebookmarks'] = 'Управление на отметки';
$lang['admin']['editbookmark'] = 'Редактира отметка';
$lang['admin']['addbookmark'] = 'Прибавя отметка';
$lang['admin']['recentpages'] = 'Наскоро използвани страници';
$lang['admin']['groupname'] = 'Име на група';
$lang['admin']['selectgroup'] = 'Избира група';
$lang['admin']['updateperm'] = 'Обновява права';
$lang['admin']['admincallout'] = 'Админстративни бързи връзки';
$lang['admin']['showbookmarks'] = 'Показва административните отметки';
$lang['admin']['hide_help_links'] = 'Hide help links';
$lang['admin']['hide_help_links_help'] = 'Check this box to disable the wiki and module help links in page headers.';
$lang['admin']['showrecent'] = 'Показва ползваните наскоро страници';
$lang['admin']['attachtotemplate'] = 'Прикача Stylesheet към шаблон';
$lang['admin']['attachstylesheets'] = 'Прикача Stylesheets';
$lang['admin']['indent'] = 'Подчертаване на йерархията на съдържанието';
$lang['admin']['adminindent'] = 'Показва съдържание';
$lang['admin']['contract'] = 'Прибира секция';
$lang['admin']['expand'] = 'Разширява секция';
$lang['admin']['expandall'] = 'Разширява всички секции';
$lang['admin']['contractall'] = 'Прибира всички секции';
$lang['admin']['menu_bookmarks'] = '[+]';
$lang['admin']['globalconfig'] = 'Общи настройки';
$lang['admin']['adminpaging'] = 'Брой показани items на страница';
$lang['admin']['nopaging'] = 'Показва всичко';
$lang['admin']['myprefs'] = 'Моите настройки';
$lang['admin']['myprefsdescription'] = 'Тук можете да променяте админ панела по начин необходим ви за вашата работа';
$lang['admin']['myaccount'] = 'Моят акаунт';
$lang['admin']['myaccountdescription'] = 'Тук можете да обновите своята лична информация.';
$lang['admin']['adminprefs'] = 'Потребителски настройки';
$lang['admin']['adminprefsdescription'] = 'Тук можете да зададете своите лични настройки за административния панел.';
$lang['admin']['managebookmarksdescription'] = 'Тук можете да управлявате своите административни отметки.';
$lang['admin']['options'] = 'Опции';
$lang['admin']['langparam'] = 'Параметърът се използва за задаване на какъв език да се покаже сайта. Не всички модули подържат или се нуждаят от тази функция.';
$lang['admin']['parameters'] = 'Параметри';
$lang['admin']['mediatype'] = 'Тип медия';
$lang['admin']['mediatype_'] = 'None set : will affect everywhere ';
$lang['admin']['mediatype_all'] = 'all : Suitable for all devices.';
$lang['admin']['mediatype_aural'] = 'aural : Intended for speech synthesizers.';
$lang['admin']['mediatype_braille'] = 'braille : Intended for braille tactile feedback devices.';
$lang['admin']['mediatype_embossed'] = 'embossed : Intended for paged braille printers.';
$lang['admin']['mediatype_handheld'] = 'handheld : Intended for handheld devices';
$lang['admin']['mediatype_print'] = 'print : Intended for paged, opaque material and for documents viewed on screen in print preview mode.';
$lang['admin']['mediatype_projection'] = 'projection : Intended for projected presentations, for example projectors or print to transparencies.';
$lang['admin']['mediatype_screen'] = 'screen : Intended primarily for color computer screens.';
$lang['admin']['mediatype_tty'] = 'tty : Intended for media using a fixed-pitch character grid, such as teletypes and terminals.';
$lang['admin']['mediatype_tv'] = 'tv : Intended for television-type devices.';
$lang['admin']['assignmentchanged'] = 'Групите за обновени.';
$lang['admin']['stylesheetexists'] = 'Stylesheet вече съществува';
$lang['admin']['errorcopyingstylesheet'] = 'Грешка при копирането на Stylesheet';
$lang['admin']['copystylesheet'] = 'Копира Stylesheet';
$lang['admin']['newstylesheetname'] = 'Ново име на Stylesheet';
$lang['admin']['target'] = 'Цел';
$lang['admin']['xml'] = 'XML';
$lang['admin']['xmlmodulerepository'] = 'URL на ModuleRepository soap server';
$lang['admin']['metadata'] = 'Metadata';
$lang['admin']['globalmetadata'] = 'Global Metadata';
$lang['admin']['titleattribute'] = 'Description (title attribute)';
$lang['admin']['tabindex'] = 'Tab Index';
$lang['admin']['accesskey'] = 'Access Key';
$lang['admin']['sitedownwarning'] = '<strong>Warning:</strong> Your site is currently showing a "Site Down for Maintainence" message.  Remove the %s file to resolve this.';
$lang['admin']['deletecontent'] = 'Delete Content';
$lang['admin']['deletepages'] = 'Delete these pages?';
$lang['admin']['selectall'] = 'Select All';
$lang['admin']['selecteditems'] = 'С Избраните';
$lang['admin']['inactive'] = 'Неактивен';
$lang['admin']['deletetemplates'] = 'Изтрий Шаблоните';
$lang['admin']['templatestodelete'] = 'Тези шаблони ще бъдат изтрити';
$lang['admin']['wontdeletetemplateinuse'] = 'Тези шаблони се използват и не могат да бъдат изтрити';
$lang['admin']['deletetemplate'] = 'Изтрий Стиловете';
$lang['admin']['stylesheetstodelete'] = 'Тези стилове ще бъдат изтрити';
$lang['admin']['sitename'] = 'Име на Сайта';
$lang['admin']['siteadmin'] = 'Сайт Администратор';
$lang['admin']['images'] = 'Управление на изображения';
$lang['admin']['blobs'] = 'Global Content Blocks';
$lang['admin']['groupmembers'] = 'Потребители в Групи';
$lang['admin']['troubleshooting'] = '(Troubleshooting)';
$lang['admin']['event_desc_loginpost'] = 'Sent after a user logs into the admin panel';
$lang['admin']['event_desc_logoutpost'] = 'Sent after a user logs out of the admin panel';
$lang['admin']['event_desc_adduserpre'] = 'Sent before a new user is created';
$lang['admin']['event_desc_adduserpost'] = 'Sent after a new user is created';
$lang['admin']['event_desc_edituserpre'] = 'Sent before edits to a user are saved';
$lang['admin']['event_desc_edituserpost'] = 'Sent after edits to a user are saved';
$lang['admin']['event_desc_deleteuserpre'] = 'Sent before a user is deleted from the system';
$lang['admin']['event_desc_deleteuserpost'] = 'Sent after a user is deleted from the system';
$lang['admin']['event_desc_addgrouppre'] = 'Sent before a new group is created';
$lang['admin']['event_desc_addgrouppost'] = 'Sent after a new group is created';
$lang['admin']['event_desc_changegroupassignpre'] = 'Sent before group assignments are saved';
$lang['admin']['event_desc_changegroupassignpost'] = 'Sent after group assignments are saved';
$lang['admin']['event_desc_editgrouppre'] = 'Sent before edits to a group are saved';
$lang['admin']['event_desc_editgrouppost'] = 'Sent after edits to a group are saved';
$lang['admin']['event_desc_deletegrouppre'] = 'Sent before a group is deleted from the system';
$lang['admin']['event_desc_deletegrouppost'] = 'Sent after a group is deleted from the system';
$lang['admin']['event_desc_addstylesheetpre'] = 'Sent before a new stylesheet is created';
$lang['admin']['event_desc_addstylesheetpost'] = 'Sent after a new stylesheet is created';
$lang['admin']['event_desc_editstylesheetpre'] = 'Sent before edits to a stylesheet are saved';
$lang['admin']['event_desc_editstylesheetpost'] = 'Sent after edits to a stylesheet are saved';
$lang['admin']['event_desc_deletestylesheetpre'] = 'Sent before a stylesheet is deleted from the system';
$lang['admin']['event_desc_deletestylesheetpost'] = 'Sent after a stylesheet is deleted from the system';
$lang['admin']['event_desc_addtemplatepre'] = 'Sent before a new template is created';
$lang['admin']['event_desc_addtemplatepost'] = 'Sent after a new template is created';
$lang['admin']['event_desc_edittemplatepre'] = 'Sent before edits to a template are saved';
$lang['admin']['event_desc_edittemplatepost'] = 'Sent after edits to a template are saved';
$lang['admin']['event_desc_deletetemplatepre'] = 'Sent before a template is deleted from the system';
$lang['admin']['event_desc_deletetemplatepost'] = 'Sent after a template is deleted from the system';
$lang['admin']['event_desc_templateprecompile'] = 'Sent before a template is sent to smarty for processing';
$lang['admin']['event_desc_templatepostcompile'] = 'Sent after a template has been processed by smarty';
$lang['admin']['event_desc_addglobalcontentpre'] = 'Sent before a new global content block is created';
$lang['admin']['event_desc_addglobalcontentpost'] = 'Sent after a new global content block is created';
$lang['admin']['event_desc_editglobalcontentpre'] = 'Sent before edits to a global content block are saved';
$lang['admin']['event_desc_editglobalcontentpost'] = 'Sent after edits to a global content block are saved';
$lang['admin']['event_desc_deleteglobalcontentpre'] = 'Sent before a global content block is deleted from the system';
$lang['admin']['event_desc_deleteglobalcontentpost'] = 'Sent after a global content block is deleted from the system';
$lang['admin']['event_desc_globalcontentprecompile'] = 'Sent before a global content block is sent to smarty for processing';
$lang['admin']['event_desc_globalcontentpostcompile'] = 'Sent after a global content block has been processed by smarty';
$lang['admin']['event_desc_contenteditpre'] = 'Sent before edits to content are saved';
$lang['admin']['event_desc_contenteditpost'] = 'Sent after edits to content are saved';
$lang['admin']['event_desc_contentdeletepre'] = 'Sent before content is deleted from the system';
$lang['admin']['event_desc_contentdeletepost'] = 'Sent after content is deleted from the system';
$lang['admin']['event_desc_contentstylesheet'] = 'Sent before the sytlesheet is sent to the browser';
$lang['admin']['event_desc_contentprecompile'] = 'Sent before content is sent to smarty for processing';
$lang['admin']['event_desc_contentpostcompile'] = 'Sent after content has been processed by smarty';
$lang['admin']['event_desc_contentpostrender'] = 'Sent before the combined html is sent to the browser';
$lang['admin']['event_desc_smartyprecompile'] = 'Sent before any content destined for smarty is sent to for processing';
$lang['admin']['event_desc_smartypostcompile'] = 'Sent after any content destined for smarty has been processed';
$lang['admin']['event_help_loginpost'] = '<p>Sent after a user logs into the admin panel.</p>
<h4>Parameters</h4>
<ul>
<li>\'user\' - Reference to the affected user object.</li>
</ul>
';
$lang['admin']['event_help_logoutpost'] = '<p>Sent after a user logs out of the admin panel.</p>
<h4>Parameters</h4>
<ul>
<li>\'user\' - Reference to the affected user object.</li>
</ul>
';
$lang['admin']['event_help_adduserpre'] = '<p>Sent before a new user is created.</p>
<h4>Parameters</h4>
<ul>
<li>\'user\' - Reference to the affected user object.</li>
</ul>
';
$lang['admin']['event_help_adduserpost'] = '<p>Sent after a new user is created.</p>
<h4>Parameters</h4>
<ul>
<li>\'user\' - Reference to the affected user object.</li>
</ul>
';
$lang['admin']['event_help_edituserpre'] = '<p>Sent before edits to a user are saved.</p>
<h4>Parameters</h4>
<ul>
<li>\'user\' - Reference to the affected user object.</li>
</ul>
';
$lang['admin']['event_help_edituserpost'] = '<p>Sent after edits to a user are saved.</p>
<h4>Parameters</h4>
<ul>
<li>\'user\' - Reference to the affected user object.</li>
</ul>
';
$lang['admin']['event_help_deleteuserpre'] = '<p>Sent before a user is deleted from the system.</p>
<h4>Parameters</h4>
<ul>
<li>\'user\' - Reference to the affected user object.</li>
</ul>
';
$lang['admin']['event_help_deleteuserpost'] = '<p>Sent after a user is deleted from the system.</p>
<h4>Parameters</h4>
<ul>
<li>\'user\' - Reference to the affected user object.</li>
</ul>
';
$lang['admin']['event_help_addgrouppre'] = '<p>Sent before a new group is created.</p>
<h4>Parameters</h4>
<ul>
<li>\'group\' - Reference to the affected group object.</li>
</ul>
';
$lang['admin']['event_help_addgrouppost'] = '<p>Sent after a new group is created.</p>
<h4>Parameters</h4>
<ul>
<li>\'group\' - Reference to the affected group object.</li>
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
$lang['admin']['event_help_editgrouppre'] = '<p>Sent before edits to a group are saved.</p>
<h4>Parameters</h4>
<ul>
<li>\'group\' - Reference to the affected group object.</li>
</ul>
';
$lang['admin']['event_help_editgrouppost'] = '<p>Sent after edits to a group are saved.</p>
<h4>Parameters</h4>
<ul>
<li>\'group\' - Reference to the affected group object.</li>
</ul>
';
$lang['admin']['event_help_deletegrouppre'] = '<p>Sent before a group is deleted from the system.</p>
<h4>Parameters</h4>
<ul>
<li>\'group\' - Reference to the affected group object.</li>
</ul>
';
$lang['admin']['event_help_deletegrouppost'] = '<p>Sent after a group is deleted from the system.</p>
<h4>Parameters</h4>
<ul>
<li>\'group\' - Reference to the affected group object.</li>
</ul>
';
$lang['admin']['event_help_addstylesheetpre'] = '<p>Sent before a new stylesheet is created.</p>
<h4>Parameters</h4>
<ul>
<li>\'stylesheet\' - Reference to the affected stylesheet object.</li>
</ul>
';
$lang['admin']['event_help_addstylesheetpost'] = '<p>Sent after a new stylesheet is created.</p>
<h4>Parameters</h4>
<ul>
<li>\'stylesheet\' - Reference to the affected stylesheet object.</li>
</ul>
';
$lang['admin']['event_help_editstylesheetpre'] = '<p>Sent before edits to a stylesheet are saved.</p>
<h4>Parameters</h4>
<ul>
<li>\'stylesheet\' - Reference to the affected stylesheet object.</li>
</ul>
';
$lang['admin']['event_help_editstylesheetpost'] = '<p>Sent after edits to a stylesheet are saved.</p>
<h4>Parameters</h4>
<ul>
<li>\'stylesheet\' - Reference to the affected stylesheet object.</li>
</ul>
';
$lang['admin']['event_help_deletestylesheetpre'] = '<p>Sent before a stylesheet is deleted from the system.</p>
<h4>Parameters</h4>
<ul>
<li>\'stylesheet\' - Reference to the affected stylesheet object.</li>
</ul>
';
$lang['admin']['event_help_deletestylesheetpost'] = '<p>Sent after a stylesheet is deleted from the system.</p>
<h4>Parameters</h4>
<ul>
<li>\'stylesheet\' - Reference to the affected stylesheet object.</li>
</ul>
';
$lang['admin']['event_help_addtemplatepre'] = '<p>Sent before a new template is created.</p>
<h4>Parameters</h4>
<ul>
<li>\'template\' - Reference to the affected template object.</li>
</ul>
';
$lang['admin']['event_help_addtemplatepost'] = '<p>Sent after a new template is created.</p>
<h4>Parameters</h4>
<ul>
<li>\'template\' - Reference to the affected template object.</li>
</ul>
';
$lang['admin']['event_help_edittemplatepre'] = '<p>Sent before edits to a template are saved.</p>
<h4>Parameters</h4>
<ul>
<li>\'template\' - Reference to the affected template object.</li>
</ul>
';
$lang['admin']['event_help_edittemplatepost'] = '<p>Sent after edits to a template are saved.</p>
<h4>Parameters</h4>
<ul>
<li>\'template\' - Reference to the affected template object.</li>
</ul>
';
$lang['admin']['event_help_deletetemplatepre'] = '<p>Sent before a template is deleted from the system.</p>
<h4>Parameters</h4>
<ul>
<li>\'template\' - Reference to the affected template object.</li>
</ul>
';
$lang['admin']['event_help_deletetemplatepost'] = '<p>Sent after a template is deleted from the system.</p>
<h4>Parameters</h4>
<ul>
<li>\'template\' - Reference to the affected template object.</li>
</ul>
';
$lang['admin']['event_help_templateprecompile'] = '<p>Sent before a template is sent to smarty for processing.</p>
<h4>Parameters</h4>
<ul>
<li>\'template\' - Reference to the affected template text.</li>
</ul>
';
$lang['admin']['event_help_templatepostcompile'] = '<p>Sent after a template has been processed by smarty.</p>
<h4>Parameters</h4>
<ul>
<li>\'template\' - Reference to the affected template text.</li>
</ul>
';
$lang['admin']['event_help_addglobalcontentpre'] = '<p>Sent before a new global content block is created.</p>
<h4>Parameters</h4>
<ul>
<li>\'global_content\' - Reference to the affected global content block object.</li>
</ul>
';
$lang['admin']['event_help_addglobalcontentpost'] = '<p>Sent after a new global content block is created.</p>
<h4>Parameters</h4>
<ul>
<li>\'global_content\' - Reference to the affected global content block object.</li>
</ul>
';
$lang['admin']['event_help_editglobalcontentpre'] = '<p>Sent before edits to a global content block are saved.</p>
<h4>Parameters</h4>
<ul>
<li>\'global_content\' - Reference to the affected global content block object.</li>
</ul>
';
$lang['admin']['event_help_editglobalcontentpost'] = '<p>Sent after edits to a global content block are saved.</p>
<h4>Parameters</h4>
<ul>
<li>\'global_content\' - Reference to the affected global content block object.</li>
</ul>
';
$lang['admin']['event_help_deleteglobalcontentpre'] = '<p>Sent before a global content block is deleted from the system.</p>
<h4>Parameters</h4>
<ul>
<li>\'global_content\' - Reference to the affected global content block object.</li>
</ul>
';
$lang['admin']['event_help_deleteglobalcontentpost'] = '<p>Sent after a global content block is deleted from the system.</p>
<h4>Parameters</h4>
<ul>
<li>\'global_content\' - Reference to the affected global content block object.</li>
</ul>
';
$lang['admin']['event_help_globalcontentprecompile'] = '<p>Sent before a global content block is sent to smarty for processing.</p>
<h4>Parameters</h4>
<ul>
<li>\'global_content\' - Reference to the affected global content block text.</li>
</ul>
';
$lang['admin']['event_help_globalcontentpostcompile'] = '<p>Sent after a global content block has been processed by smarty.</p>
<h4>Parameters</h4>
<ul>
<li>\'global_content\' - Reference to the affected global content block text.</li>
</ul>
';
$lang['admin']['event_help_contenteditpre'] = '<p>Sent before edits to content are saved.</p>
<h4>Parameters</h4>
<ul>
<li>\'global_content\' - Reference to the affected content object.</li>
</ul>
';
$lang['admin']['event_help_contenteditpost'] = '<p>Sent after edits to content are saved.</p>
<h4>Parameters</h4>
<ul>
<li>\'content\' - Reference to the affected content object.</li>
</ul>
';
$lang['admin']['event_help_contentdeletepre'] = '<p>Sent before content is deleted from the system.</p>
<h4>Parameters</h4>
<ul>
<li>\'content\' - Reference to the affected content object.</li>
</ul>
';
$lang['admin']['event_help_contentdeletepost'] = '<p>Sent after content is deleted from the system.</p>
<h4>Parameters</h4>
<ul>
<li>\'content\' - Reference to the affected content object.</li>
</ul>
';
$lang['admin']['event_help_contentstylesheet'] = '<p>Sent before the sytlesheet is sent to the browser.</p>
<h4>Parameters</h4>
<ul>
<li>\'content\' - Reference to the affected stylesheet text.</li>
</ul>
';
$lang['admin']['event_help_contentprecompile'] = '<p>Sent before content is sent to smarty for processing.</p>
<h4>Parameters</h4>
<ul>
<li>\'content\' - Reference to the affected content text.</li>
</ul>
';
$lang['admin']['event_help_contentpostcompile'] = '<p>Sent after content has been processed by smarty.</p>
<h4>Parameters</h4>
<ul>
<li>\'content\' - Reference to the affected content text.</li>
</ul>
';
$lang['admin']['event_help_contentpostrender'] = '<p>Sent before the combined html is sent to the browser.</p>
<h4>Parameters</h4>
<ul>
<li>\'content\' - Reference to the html text.</li>
</ul>
';
$lang['admin']['event_help_smartyprecompile'] = '<p>Sent before any content destined for smarty is sent to for processing.</p>
<h4>Parameters</h4>
<ul>
<li>\'content\' - Reference to the affected text.</li>
</ul>
';
$lang['admin']['event_help_smartypostcompile'] = '<p>Sent after any content destined for smarty has been processed.</p>
<h4>Parameters</h4>
<ul>
<li>\'content\' - Reference to the affected text.</li>
</ul>
';
$lang['admin']['filterbymodule'] = 'Filter By Module';
$lang['admin']['showall'] = 'Покажи Всички';
$lang['admin']['core'] = 'Core';
$lang['admin']['defaultpagecontent'] = 'Default Page Content';
$lang['admin']['file_url'] = 'Link to file (instead of URL)';
$lang['admin']['no_file_url'] = 'None (Use URL Above)';
$lang['admin']['defaultparentpage'] = 'Default Parent Page';
$lang['admin']['error_udt_name_whitespace'] = 'Error: User Defined Tags cannot have spaces in their name.';
$lang['admin']['warning_safe_mode'] = '<strong><em>WARNING:</em></strong> PHP Safe mode is enabled.  This will cause difficulty with files uploaded via the web browser interface, including images, theme and module XML packages.  You are advised to contact your site administrator to see about disabling safe mode.';
$lang['admin']['test'] = 'Test';
$lang['admin']['results'] = 'Results';
$lang['admin']['untested'] = 'Not Tested';
$lang['admin']['unknown'] = 'Unknown';
$lang['admin']['download'] = 'Download';
$lang['admin']['frontendwysiwygtouse'] = 'Frontend wysiwyg';
$lang['admin']['all_groups'] = 'All Groups';
$lang['admin']['utma'] = '156861353.1280233878.1228414704.1228755873.1228758797.4';
$lang['admin']['utmz'] = '156861353.1228755873.3.3.utmcsr=dev.cmsmadesimple.org|utmccn=(referral)|utmcmd=referral|utmcct=/projects/timeline';
$lang['admin']['utmc'] = '156861353';
$lang['admin']['utmb'] = '156861353.1.10.1228758797';
?>