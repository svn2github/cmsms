<?php
$lang['admin']['searchable'] = 'Μπόρούν να πραγματοποιηθούν αναζητήσεις εντός του περιεχομένου αυτής της σελίδας';
$lang['admin']['help_function_content_image'] = '<h3>What does this do?</h3>
<p>This plugin allows template designers to prompt users to select an image file when editing the content of a page. It behaves similarly to the content plugin, for additional content blocks.</p>
<h3>How do I use it?</h3>
<p>Just insert the tag into your page template like: <code>{content_image block=\'image1\'}</code>.</p>
<h3>What parameters does it take?</h3>
<ul>
  <li><strong>(required)</strong></em> block - The name for this additional content block.
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
$lang['admin']['errorupdatetemplateallpages'] = 'Πρότυπο όχι ενεργό';
$lang['admin']['hidefrommenu'] = 'Απόκρυψη από μενού';
$lang['admin']['settemplate'] = 'Ορισμός προτύπου';
$lang['admin']['text_settemplate'] = 'Θέση επιλεγμένων σελίδων σε άλλο πρότυπο';
$lang['admin']['cachable'] = 'Αποθηκεύσιμο στην μνήμη';
$lang['admin']['noncachable'] = 'Μη Αποθηκεύσιμο στην μνήμη';
$lang['admin']['copy_from'] = 'Αντιγραφή από';
$lang['admin']['copy_to'] = 'Αντιγραφή σε';
$lang['admin']['copycontent'] = 'Αντιγραφή στοιχείου Περιεχομένου';
$lang['admin']['md5_function'] = 'md5 function';
$lang['admin']['xml_function'] = 'Basic XML (expat) support';
$lang['admin']['magic_quotes_gpc'] = 'Magic quotes for Get/Post/Cookie';
$lang['admin']['magic_quotes_gpc_on'] = 'Single-quote, double quote and backslash are escaped automatically. You can to have problems in save templates';
$lang['admin']['magic_quotes_runtime'] = 'Magic quotes in runtime';
$lang['admin']['magic_quotes_runtime_on'] = 'Most functions that return data will have quotes escaped with a backslash. You can to have problems';
$lang['admin']['file_get_contents'] = 'Test file_get_contents';
$lang['admin']['check_ini_set'] = 'Test ini_set';
$lang['admin']['check_ini_set_off'] = 'You may have difficulty with some functionality without this capability. This test may fail if safe_mode is enabled';
$lang['admin']['file_uploads'] = 'Αποστολή αρχείων στο διακομιστή';
$lang['admin']['test_remote_url'] = 'Έλεγχος για απομακρυσμένο URL';
$lang['admin']['test_remote_url_failed'] = 'ΕΝδέχεται να μην είστε σε θέση να ανοίξετε ένα αρχείο σε έναν απομακρυσμένο διακομιστή web.';
$lang['admin']['search_string_find'] = 'Σύνδεση ok!';
$lang['admin']['connection_failed'] = 'Αποτυχία σύνδεσης!';
$lang['admin']['notifications_to_handle'] = 'Έχετε <b>%d</b> ατακτοποίητες ειδοποιήσεις';
$lang['admin']['notification_to_handle'] = 'Έχετε <b>%d</b> ατακτοποίητη ειδοποίηση';
$lang['admin']['notifications'] = 'Ειδοποιήσεις';
$lang['admin']['dashboard'] = 'Προβολή πίνακα ελέγχου';
$lang['admin']['ignorenotificationsfrommodules'] = 'Να αγνοούνται οι ειδοποιήσεις από αυτά τα δομοστοιχεία';
$lang['admin']['admin_enablenotifications'] = 'Allow users to view notifications<br/><em>(notifications will be displayed on all admin pages)</em>';
$lang['admin']['enablenotifications'] = 'Enable user notifications in the admin section';
$lang['admin']['test_check_open_basedir_failed'] = 'Open basedir restrictions are in effect. You may have difficulty with some addon functionality with this restriction';
$lang['admin']['config_writable'] = 'config.php writable. It is more safe if you change permission to read-only';
$lang['admin']['caution'] = 'Προσοχή';
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
$lang['admin']['warning_mail_settings'] = 'Your mail settings have not been configured.  This could interfere with the ability of your website to send email messages.  You should go to <a href="moduleinterface.php?module=CMSMailer">Extensions >> CMSMailer</a> and configure the mail settings with the information provided by your host.';
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
$lang['admin']['help_function_iamge'] = '  <h3>What does this do?</h3>
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
$lang['admin']['help_function_breadcrumbs'] = '<h3>Τί κάνει αυτό;</h3>
<p>Εκτυπώνει ίχνη πλοήγησης τύπου breadcrumb .</p>
<h3>Πώς χρησιμοποιείται;</h3>
<p>Απλά  εισάγετε αυτό το tag στην σελίδα ή το πρότυπό σας: π.χ.: <code>{breadcrumbs}</code></p>
<h3>Ποιες παραμέτρους δέχεται;</h3>
<p>
<ul>
<li><em>(προαιρετικά)</em> <tt>delimiter</tt> - Κείμενο για διαχωρισμό των καταχωρίσεων στη λίστα (προεπιλογή ">>").</li>
<li><em>(προαιρετικά)</em> <tt>initial</tt> - 1/0 Αν τεθεί σε 1 ξεκινούν τα ίχνη πλοήγησης τύπου breadcrumb με ένα διαχωριστικό (προεπιλογή 0).</li>
<li><em>(προαιρετικά)</em> <tt>root</tt> - Εναλλακτικό όνομα για μια σελίδα η οποία θέλετε να εμφανίζεται πάντοτε ως η πρώτη 
    στη λίστα. Μπορεί να χρησιμοποιηθεί για να κάνετε μία σελίδα (π.χ. την πρώτη) να εμφανίζεται ως η αφετηρία των πάντων ακόμη κι αν δεν είναι.</li>
<li><em>(προαιρετικά)</em> <tt>root_url</tt> - Παρακάμπτει το URL της αφεηριακής σελίδας. Χρησιμότητα: αλλάζει το σύνδεσμο σε \'/\' αντί του \'/home/\'. Απαιτείται να έχει οριστεί η προεπιλεγμένη σελίδα ως αφετηριακή σελίδα.</li>
<li><em>(προαιρετικά)</em> <tt>classid</tt> - Η τάξη CSS των μη τρεχόντων ονομάτων σελίδων, πχ οι πρώτες n-1 σελίδες της λίστας. Αν το όνομα είναι σύνδεσμος. προστίθεται στα tags <a href>, αλλιώς προστίθεται στα tags <span>.</li>
<li><em>(προαιρετικά)</em> <tt>currentclassid</tt> - Η τάξη CSS για τα tag <span> που αφορούν το τρέχον όνομα σελίδας.</li>
<li><em>(προαιρετικά)</em> <tt>starttext</tt> - Κείμενο που θα προστεθεί μπροστά από τη λίστα πλοήγησης τύπου breadcrumbs, ενδεχομένως κάτι σαν το: "Βρίσκεστε εδώ".</li>
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
$lang['admin']['help_function_anchor'] = '	<h3>Τί κάνει αυτό;</h3>
	<p>Δημιουργεί έναν σύνδεσμο αγκύρωσης.</p>
	<h3>Πώς χρησιμοποιείται;</h3>
	<p>Απλά  εισάγετε αυτό το tag στην σελίδα ή το πρότυπό σας: π.χ.: <code>{anchor anchor=\'here\' text=\'Κύλιση κάτω\'}</code></p>
	<h3>Ποιες παραμέτρους δέχεται;</h3>
	<p>
	<ul>
	<li><tt>anchor</tt> - Με τί συνδεόμαστε;.  Με το μέρος μετά το #.</li>
	<li><tt>text</tt> - Το κείμενο που θα εμφανίζεται στο σύνδεσμο, αν φυσικά υπάρχει τέτοιο.</li>
	<li><tt>class</tt> - Η class του συνδέσμου, αν υφίσταταιli>
	<li><tt>title</tt> - Ο εμφανιζόμενος για το σύνδεσμο τίτλος, αν φυσικά υπάρχει.</li>
	<li><tt>tabindex</tt> - Τον αριθμό ευρετηρίου tab (tabindex) για το σύνδεσμο, αν φυσικά υπάρχει.</li>
	<li><tt>accesskey</tt> - Το πλήκτρο πρόσβασης accesskey για το σύνδεσμο, αν φυσικά υπάρχει.</li>
	<li><em>(προαιρετικά)</em> <tt>onlyhref</tt> - Να εμφανίζεται μόνο το href και όχι το σύνολο του συνδέσμου. Δεν θα λειτουργούν οι υπόλοιπες επιλογές</li>
	</ul>
	</p>';
$lang['admin']['help_function_site_mapper'] = '<h3>Τί κάνει αυτό;</h3>
  <p>Πρόκειται ουσιαστικά για ένα wrapper tag για το δομοστοιχείο <a href="listmodules.php?action=showmodulehelp&module=MenuManager">Menu Manager (Διαχείριση μενού)</a> για να απλοποιηθεί η συντακτική δομή του tag αλλά και η διαδικασία δημιουργίας ενός χάρτη του ιστοτόπου.</p>
<h3>Πώς χρησιμοποιείται;</h3>
  <p>Απλά τοποθετήστε το <code>{site_mapper}</code> σε μία σελίδα ή πρότυπο. Αν χρειαστείτε βοήθεια για το υποπρόγραμμα Menu Manager, το τί παράμετρους δέχεται κλπ, παρακαλούμε συμβουλευτείτε τη βοήεια που αφορά το υποπρόγραμμα <a href="listmodules.php?action=showmodulehelp&module=MenuManager">Menu Manager</a>.</p>
  <p>By default, if no template option is specified the minimal_menu.tpl file will be used.</p>
  <p>Any parameters used in the tag are available in the menumanager template as <code>{$menuparams.paramname}</code></p>';
$lang['admin']['help_function_redirect_url'] = '<h3>Τί κάνει αυτό;</h3>
  <p>Αυτό το plugin καθιστά δυνατή την εύκολη ανακατεύθυνση προς ένα προκαθορισμένο url.  Είναι ιδιαίτερα βολικό στα πλαίσια μιας υποθετικής ροής προγράμματος που αφορά τα smarty (για παράδειγμα, ανακατεύθυνση προς μία αρχική σελίδα που εμφανίζεται εάν ο ιστότοπος δεν έχει τεθεί σε λειτουργία για το ευρύτερο κοινό ακόμη).</p>
<h3>Πώς χρησιμοποιείται;</h3>
<p>Απλά  εισάγετε αυτό το tag στη σελίδα ή το πρότυπό σας: <code>{redirect_url urle=\'www.cmsmadesimple.org\'}</code></p>';
$lang['admin']['help_function_redirect_page'] = '<h3>Τί κάνει αυτό;</h3>
 <p>Αυτό το plugin καθιστά δυνατή την εύκολη ανακατεύθυνση σε μία άλλη σελίδα. Είναι ιδιαίτερα βολικό στα πλαίσια μιας υποθετικής ροής προγράμματος που αφορά τα smarty (για παράδειγμα, ανακατεύθυνση προς μία σελίδα σύνδεσης αν διαπιστωθεί ότι ο χρήστης δεν είναι συνδεδεμένος.)</p>
<h3>Πώς χρησιμοποιείται;</h3>
<p>Απλά  εισάγετε αυτό το tag στη σελίδα ή το πρότυπό σας: <code>{redirect_page page=\'some-page-alias\'}</code></p>';
$lang['admin']['of'] = 'από';
$lang['admin']['first'] = 'Αρχή ';
$lang['admin']['last'] = 'Τέλος';
$lang['admin']['adminspecialgroup'] = 'Warning: Members of this group automatically have all permissions';
$lang['admin']['disablesafemodewarning'] = 'Disable admin safe mode warning';
$lang['admin']['allowparamcheckwarnings'] = 'Allow parameter checks to create warning messages';
$lang['admin']['date_format_string'] = 'Date Format String';
$lang['admin']['date_format_string_help'] = '<em>strftime</em> formatted date format string.  Try googling \'strftime\'';
$lang['admin']['last_modified_at'] = 'Τροποποιήθηκε στης';
$lang['admin']['last_modified_by'] = 'Τροποποιήθηκε από';
$lang['admin']['read'] = 'Ανάγνωση';
$lang['admin']['write'] = 'Εγγραφή';
$lang['admin']['execute'] = 'Execute';
$lang['admin']['group'] = 'Group';
$lang['admin']['other'] = 'Άλλο ';
$lang['admin']['event_desc_moduleupgraded'] = 'Αποστάλθηκε μετα την αναβάθμιση του αρθρώματος';
$lang['admin']['event_desc_moduleinstalled'] = 'Αποστάλθηκε μετα την εγκατάσταση του αρθρώματος';
$lang['admin']['event_desc_moduleuninstalled'] = 'Αποστάλθηκε μετα την απεγκατάσταση του αρθρώματος';
$lang['admin']['event_desc_edituserdefinedtagpost'] = 'Αποστάλθηκε μετα την ανανέωση της κεφαλίδας χρήστη';
$lang['admin']['event_desc_edituserdefinedtagpre'] = 'Αποστάλθηκε πρίν την ανανέωση της κεφαλίδας χρήστη';
$lang['admin']['event_desc_deleteuserdefinedtagpre'] = 'Αποστάλθηκε πρίν την ανανέωση της κεφαλίδας χρήστη';
$lang['admin']['event_desc_deleteuserdefinedtagpost'] = 'Αποστάλθηκε μετά την ανανέωση της κεφαλίδας χρήστη';
$lang['admin']['event_desc_adduserdefinedtagpost'] = 'Αποστάλθηκε μετά την εισαγωγή της κεφαλίδας χρήστη';
$lang['admin']['event_desc_adduserdefinedtagpre'] = 'Αποστάλθηκε πρίν την εισαγωγή της κεφαλίδας χρήστη';
$lang['admin']['global_umask'] = 'Μάσκα δημιουργίας αρχείου (umask)';
$lang['admin']['errorcantcreatefile'] = 'Δεν ήταν δυνατή η δημιουργία αρχείου (πρόβλημα δικαιωμάτων πρόσβασης?)';
$lang['admin']['errormoduleversionincompatible'] = 'Το άρθρωμα ειναι ασύμβατο με αυτήν την έκδοση του CMS';
$lang['admin']['errormodulenotloaded'] = 'Εσωτερικό σφάλμα, το άρθρωμα δεν απέκτησε λειτουργική υπόσταση';
$lang['admin']['errormodulenotfound'] = 'Εσωτερικό σφάλμα, δεν ήταν δυνατή η εύρεση της λειτουργικής υπόστασης ενός αρθρώματος';
$lang['admin']['errorinstallfailed'] = 'Η εγκατάσταση του αρθρώματος απέτυχε';
$lang['admin']['errormodulewontload'] = 'Πρόβλημα στην δημιουργία λειτουργικής υπόστασης ενός διαθέσιμου αρθρώματος';
$lang['admin']['frontendlang'] = 'Προεπιλεγμένη γλώσσα για το προσκήνιο';
$lang['admin']['info_edituser_password'] = 'Αλλάξτε αυτό το πεδίο για να αλλάξει ο κωδικός πρόσβασης χρήστη';
$lang['admin']['info_edituser_passwordagain'] = 'Αλλάξτε αυτό το πεδίο για να αλλάξει ο κωδικός πρόσβασης χρήστη';
$lang['admin']['originator'] = 'Πιστοποιητής';
$lang['admin']['module_name'] = 'Όνομα αρθρώματος';
$lang['admin']['event_name'] = 'Όνομα συμβάντος';
$lang['admin']['event_description'] = 'Περιγραφή συμβάντος';
$lang['admin']['error_delete_default_parent'] = 'Δεν μπορείτε να διαγράψετε την γονική της προεπιλεγμένης σελίδας.';
$lang['admin']['jsdisabled'] = 'Αυτή η λειτουργία απαιτεί την ενεργοποίηση της εκτέλεσης Javascript.';
$lang['admin']['order'] = 'Κατάταξη';
$lang['admin']['reorderpages'] = 'Ανακατάταξη σελίδων';
$lang['admin']['reorder'] = 'Ανακατάταξη';
$lang['admin']['page_reordered'] = 'Η σελίδα ανακατατάχθηκε με επιτυχία.';
$lang['admin']['pages_reordered'] = 'Οι σελίδες ανακατατάχθηκαν με επιτυχία.';
$lang['admin']['sibling_duplicate_order'] = 'Δύο σελίδες ιδίου επιπέδου δεν μπορούν να εχουν την ίδια κατάταξη. Οι σελίδες δεν ανακατατάχθηκαν.';
$lang['admin']['no_orders_changed'] = 'Επιλέξατε την ανακατάταξη σελίδων, όμως δεν αλλάξατε την κατάταξη σε κάποια απο αυτές. Οι σελίδες δεν ανακατατάχθηκαν.';
$lang['admin']['order_too_small'] = 'Η κατάταξη μιας σελίδας δεν μπορεί να είναι 0. Οι σελίδες δεν ανακατατάχθηκαν.';
$lang['admin']['order_too_large'] = 'Η κατάταξη σελίδων δεν μπορεί να είναι σαν αριθμός μεγαλύτερη απο τον αριθμό των σελίδων στο επίπεδο αυτό. Οι σελίδες δεν ανακατατάχθηκαν.';
$lang['admin']['user_tag'] = 'Κεφαλίδα χρήστη';
$lang['admin']['add'] = 'Προσθήκη';
$lang['admin']['CSS'] = 'Πρότυπα (CSS)';
$lang['admin']['about'] = 'Σχετικά';
$lang['admin']['action'] = 'Ενέργεια';
$lang['admin']['actionstatus'] = 'Ενέργεια/Κατάσταση';
$lang['admin']['active'] = 'Ενεργό';
$lang['admin']['addcontent'] = 'Προσθήκη περιεχομένου';
$lang['admin']['cantremove'] = 'Αδύνατη μετακίνηση';
$lang['admin']['changepermissions'] = 'Αλλαγή δικαιωμάτων';
$lang['admin']['changepermissionsconfirm'] = 'USE CAUTION\\n\\nΑυτή ή εντολή θα αποπειραθεί να επιβεβαιώσει ότι όλα τα αρχεία που αποτελούν το άρθρωμα έχουν δικαίςμα εγγραφής από τον web server.\\nΘέλετε να συνεχίσετε?';
$lang['admin']['contentadded'] = 'Το περιεχόμενο καταχωρήθηκε με επιτυχία στην Βάση δεδομένων.';
$lang['admin']['contentupdated'] = 'Το περιεχόμενο ανανεώθηκε με επιτυχία';
$lang['admin']['contentdeleted'] = 'Το περιεχόμενο διαγράφηκε με επιτυχία από την Βάση δεδομένων.';
$lang['admin']['success'] = 'Επιτυχία';
$lang['admin']['addcss'] = 'Προσθήκη νέου CSS';
$lang['admin']['addgroup'] = 'Προσθήκη νέας Ομάδας';
$lang['admin']['additionaleditors'] = 'Υπεύθυνοι Περιεχομένου';
$lang['admin']['addtemplate'] = 'Προσθήκη νέου προτύπου';
$lang['admin']['adduser'] = 'Προσθήκη νέου χρήστη';
$lang['admin']['addusertag'] = 'Προσθήκη προκαθορισμένης απο τον χρήστη κεφαλίδας';
$lang['admin']['adminaccess'] = 'Πρόσβαση στην είσοδο του Διαχειριστή';
$lang['admin']['adminlog'] = 'Αρχείο καταγραφής Διαχειριστή';
$lang['admin']['adminlogcleared'] = 'The Admin Log was succesfully cleared';
$lang['admin']['adminlogempty'] = 'The Admin Log is empty';
$lang['admin']['adminsystemtitle'] = 'Σύστημα διαχείρισης CMS';
$lang['admin']['adminpaneltitle'] = 'Πίνακας ελέγχου της διαχείρισης του CMS Made simple ';
$lang['admin']['advanced'] = 'Για προχωρημένους';
$lang['admin']['aliasalreadyused'] = 'Η ψευδεπιγραφή ήδη χρησιμοποιείται σε άλλη σελίδα';
$lang['admin']['aliasmustbelettersandnumbers'] = 'Η ψευδεπιγραφή μπορεί να περιέχει μόνο γράμματα και αριθμούς';
$lang['admin']['aliasnotaninteger'] = 'Η ψευδεπιγραφή δεν μπορεί να είναι ακέραιος';
$lang['admin']['allpagesmodified'] = 'Έγιναν αλλαγές σε όλες τις σελίδες!';
$lang['admin']['assignments'] = 'Καθορισμός χρηστών';
$lang['admin']['associationexists'] = 'Ο συσχετισμός αυτός ήδη υπάρχει';
$lang['admin']['autoinstallupgrade'] = 'Αυτοματοποιημένη εγκατάσταση ή αναβάθμιση';
$lang['admin']['back'] = 'Επιστροφή στο Menu';
$lang['admin']['backtoplugins'] = 'Επιστροφή στην λίστα αρθρωμάτων κώδικα';
$lang['admin']['cancel'] = 'Ακύρωση';
$lang['admin']['cantchmodfiles'] = 'Δεν ήταν δυνατή η αλλαγή δικαιωμάτων πρόσβασης σε κάποια αρχεία';
$lang['admin']['cantremovefiles'] = 'Πρόβλημα στην διαδικασία διαγραφής αρχείων (δικαιώματα πρόσβασης?)';
$lang['admin']['confirmcancel'] = 'Θέλετε να παραιτηθείτε απο τις αλλαγες? Κάντε κλίκ για να παραιτηθείτε απο τις αλλαγές. Κάντε κλίκ για να συνεχίσετε με την επεξεργασία.';
$lang['admin']['canceldescription'] = 'Αναίρεση αλλαγών';
$lang['admin']['clearadminlog'] = 'Καθαρισμός αρχείου καταγραφής Διαχειριστή';
$lang['admin']['code'] = 'Κώδικας';
$lang['admin']['confirmdefault'] = 'Είστε σίγουροι ότι θέλετε να ορίσετε για τον ιστοτόπο \'s αυτην την αρχική σελίδα?';
$lang['admin']['confirmdeletedir'] = 'Είστε σίγουροι οτι θέλετε να διαγράψετε αυτόν τον κατάλογο και όλα τα περιεχόμενά του?';
$lang['admin']['content'] = 'Περιεχόμενο';
$lang['admin']['contentmanagement'] = 'Διαχείριση περιεχομένου';
$lang['admin']['contenttype'] = 'Τύπος περιεχομένου';
$lang['admin']['copy'] = 'Αντιγραφή';
$lang['admin']['copytemplate'] = 'Αντιγραφή Προτύπου';
$lang['admin']['create'] = 'Δημιουργία';
$lang['admin']['createnewfolder'] = 'Δημιουργία νέου φακέλλου';
$lang['admin']['cssalreadyused'] = 'Το όνομα του CSS ήδη χρησιμοποιείται';
$lang['admin']['cssmanagement'] = 'Διαχείριση CSS';
$lang['admin']['currentassociations'] = 'Συσχετίσεις';
$lang['admin']['currentdirectory'] = 'Κατάλογος';
$lang['admin']['currentgroups'] = 'Ομάδες';
$lang['admin']['currentpages'] = 'Σελίδες';
$lang['admin']['currenttemplates'] = 'Πρότυπα σελίδας';
$lang['admin']['currentusers'] = 'Χρήστες';
$lang['admin']['custom404'] = 'Τροποποίηση μηνύματος λάθους 404';
$lang['admin']['database'] = 'Βάση Δεδομένων';
$lang['admin']['databaseprefix'] = 'Εντολή προετοιμασίας Βάσης δεδομένων';
$lang['admin']['databasetype'] = 'Τύπος Βάσης δεδομένων';
$lang['admin']['date'] = 'Ημερομηνία';
$lang['admin']['default'] = 'Προεπιλογές';
$lang['admin']['delete'] = 'Διαγραφή';
$lang['admin']['deleteconfirm'] = 'Είστε σίγουροι για την διαγραφή?';
$lang['admin']['deleteassociationconfirm'] = 'Are you sure you want to delete association to - %s - ?';
$lang['admin']['deletecss'] = 'Διαγραφή CSS';
$lang['admin']['dependencies'] = 'Εξαρτήσεις';
$lang['admin']['description'] = 'Περιγραφή';
$lang['admin']['directoryexists'] = 'Ο κατάλογος ήδη υπάρχει.';
$lang['admin']['down'] = 'Κάτω';
$lang['admin']['edit'] = 'Επεξεργασία';
$lang['admin']['editconfiguration'] = 'Επεξεργασία ρυθμίσεων';
$lang['admin']['editcontent'] = 'Επεξεργασία περιεχομένου';
$lang['admin']['editcss'] = 'Επεξεργασία CSS';
$lang['admin']['editcsssuccess'] = 'Stylesheet updated';
$lang['admin']['editgroup'] = 'Επεξεργασία ομάδων';
$lang['admin']['editpage'] = 'Επεξεργασία σελίδων';
$lang['admin']['edittemplate'] = 'Επεξεργασία Προτύπου';
$lang['admin']['edittemplatesuccess'] = 'Template updated';
$lang['admin']['edituser'] = 'Επεξεργασία στοιχείων χρήστη';
$lang['admin']['editusertag'] = 'Επεξεργασία προκαθορισμένης απο τον χρήστη κεφαλίδας';
$lang['admin']['usertagadded'] = 'Η κεφαλίδα χρήστη προστέθηκε επιτυχώς.';
$lang['admin']['usertagupdated'] = 'Η κεφαλίδα χρήστη ανανεώθηκε επιτυχώς.';
$lang['admin']['usertagdeleted'] = 'Η κεφαλίδα χρήστη διαγράφηκε επιτυχώς.';
$lang['admin']['email'] = 'Διεύθυνση E-mail';
$lang['admin']['errorattempteddowngrade'] = 'Η εγκατάσταση αυτού του αρθρώματος θα είχε ως αποτέλεσμα την υποβάθμιση. Η διαδικασία απορρίπτεται';
$lang['admin']['errorchildcontent'] = 'Το περιεχόμενο ακόμη περιέχει διασυνδεδεμένο περιεχόμενο. Καταργήστε αυτό πρώτα.';
$lang['admin']['errorcopyingtemplate'] = 'Σφάλμα κατα την αντιγραφή Προτύπου';
$lang['admin']['errorcouldnotparsexml'] = 'Σφάλμα στην διαδικασία εκτέλεσης αρχείου XML. Βεβαιωθείτε ότι μεταφέρετε ένα αρχείο .xml και όχι ενα αρχείο.tar.gz ή zip.';
$lang['admin']['errorcreatingassociation'] = 'Σφάλμα κατα την δημιουργία συσχέτισης';
$lang['admin']['errorcssinuse'] = 'Αυτό το CSS χρησιμοποιείται απο κάποιο πρότυπο ή καποιες σελίδες. Καταργήστε πρώτα αυτές τις συσχετίσεις.';
$lang['admin']['errordefaultpage'] = 'Δεν ήταν δυνατή η διαγραφή της τρέχουσας αρχικής σελίδας. Ορίστε πρώτα μία άλλη.';
$lang['admin']['errordeletingassociation'] = 'Σφάλμα κατα την διαγραφή συσχέτισης';
$lang['admin']['errordeletingcss'] = 'Σφάλμα κατα την διαγραφή css';
$lang['admin']['errordeletingdirectory'] = 'Δεν ήταν δυνατή η διαγραφή του καταλόγου. Πρόβλημα δικαιωμάτων πρόσβασης?';
$lang['admin']['errordeletingfile'] = 'Δεν ήταν δυνατή η διαγραφή του αρχείου. Πρόβλημα δικαιωμάτων πρόσβασης?';
$lang['admin']['errordirectorynotwritable'] = 'Δεν έχετε δικαίωμα εγγραφής στον συγκεκριμένο κατάλογο.';
$lang['admin']['errordtdmismatch'] = 'Λάθος της DTD είτε απουσιάζει είτε η έκδοση της δεν είναι η σωστή.';
$lang['admin']['errorgettingcssname'] = 'Σφάλμα κατα την ανάκτηση του ονόματος του CSS';
$lang['admin']['errorgettingtemplatename'] = 'Σφάλμα κατα την ανάκτηση του ονόματος του προτύπου';
$lang['admin']['errorincompletexml'] = 'Το αρχείο XML είναι ημιτελές ή ακατάλληλο';
$lang['admin']['uploadxmlfile'] = 'Εγκατάσταση αρθρώματος μέσω αρχείου XML';
$lang['admin']['cachenotwritable'] = 'Ο φάκελος Cache δεν είναι εγγράψιμος. Το άδειασμα της cache δεν θα έχει αποτέλεσμα. Δώστε δικαιώματα στον φάκελο tmp/cache read/write/execute (chmod 777)';
$lang['admin']['modulesnotwritable'] = 'Ο φάκελος των αρθρωμάτων δεν είναι εγγράψιμος, εαν επιθυμείτε να εγκαταστήσετε αρθρώματα με την if you would like to install modules by uploading an XML file you need to make the modules folder have full read/write/execute permissions (chmod 777).';
$lang['admin']['noxmlfileuploaded'] = 'Δεν μεταφέρθηκε κανένα αρχείο. Για να εγκαταστήσετε ένα άρθρωμα  με την χρήση XML πρέπει να επιλέξετε και να μετεφέρετε ένα αρχείο αρθρώματος .xml από τον υπολογιστή σας.';
$lang['admin']['errorinsertingcss'] = 'Σφάλμα κατα την εισαγωγή CSS';
$lang['admin']['errorinsertinggroup'] = 'Σφάλμα κατα την εισαγωγή ομάδας';
$lang['admin']['errorinsertingtag'] = 'Σφάλμα κατα την εισαγωγή προκαθορισμένης απο τον χρήστη κεφαλίδας';
$lang['admin']['errorinsertingtemplate'] = 'Σφάλμα κατα την εισαγωγή προτύπου';
$lang['admin']['errorinsertinguser'] = 'Σφάλμα κατα την εισαγωγή χρήστη';
$lang['admin']['errornofilesexported'] = 'Σφάλμα στην εξαγωγή των αρχείων σε xml';
$lang['admin']['errorretrievingcss'] = 'Σφάλμα κατα την ανάκτηση CSS';
$lang['admin']['errorretrievingtemplate'] = 'Σφάλμα κατα την ανάκτηση προτύπου';
$lang['admin']['errortemplateinuse'] = 'Το πρότυπο αυτό χρησιμοποιείται ακόμη απο κάποια σελίδα. Καταργήστε την πρώτα.';
$lang['admin']['errorupdatingcss'] = 'Σφάλμα κατα την ενημέρωση του CSS';
$lang['admin']['errorupdatinggroup'] = 'Σφάλμα κατα την ενημέρωση της ομάδας';
$lang['admin']['errorupdatingpages'] = 'Συνέβη λάθος κατά την ανανέωση τον σελίδων!';
$lang['admin']['errorupdatingtemplate'] = 'Σφάλμα κατα την ενημέρωση του προτύπου';
$lang['admin']['errorupdatinguser'] = 'Σφάλμα κατα την ενημέρωση των στοιχείων του χρήστη';
$lang['admin']['errorupdatingusertag'] = 'Σφάλμα κατα την ενημέρωση προκαθορισμένης απο τον χρήστη κεφαλίδας';
$lang['admin']['erroruserinuse'] = 'Αυτός ο χρήστης είναι κάτοχος σελίδων περιεχομένου. Μεταφέρετε πρώτα την ιδιοκτησία τους σε άλλο χρήστη πρίν την διαγραφή.';
$lang['admin']['eventhandlers'] = 'Δράσεις';
$lang['admin']['editeventhandler'] = 'Επεξεργασία χειριστή δράσεων';
$lang['admin']['eventhandlerdescription'] = 'Συσχετισμός κεφαλίδων χρήστη με δράσεις';
$lang['admin']['export'] = 'Εξαγωγή';
$lang['admin']['event'] = 'Δράση';
$lang['admin']['false'] = 'Σφάλμα';
$lang['admin']['settrue'] = 'Ορισμός αληθούς';
$lang['admin']['filecreatedirnodoubledot'] = 'Ο κατάλογος δεν μπορεί να περιέχει \'..\'.';
$lang['admin']['filecreatedirnoname'] = 'Δεν ειναι δυνατή η δημιουργία καταλόγου χωρίς ονομασία.';
$lang['admin']['filecreatedirnoslash'] = 'Ο κατάλογος δεν μπορεί να περιέχει \'/\' or \'\'.';
$lang['admin']['filemanagement'] = 'Διαχείριση αρχείων';
$lang['admin']['filename'] = 'Όνομα αρχείου';
$lang['admin']['filenotuploaded'] = 'Το αρχείο δεν ήταν δυνατόν να μεταφερθεί. Πρόβλημα δικαιωμάτων πρόσβασης?';
$lang['admin']['filesize'] = 'Μέγεθος αρχείου';
$lang['admin']['firstname'] = 'Όνομα';
$lang['admin']['groupmanagement'] = 'Διαχείριση Ομάδων';
$lang['admin']['grouppermissions'] = 'Διαχείριση δικαιωμάτων πρόσβασης ομάδων';
$lang['admin']['handler'] = 'Πρόγραμμα χειρισμού (Κεφαλίδες χρήστη)';
$lang['admin']['headtags'] = 'Κεφαλίδες head';
$lang['admin']['help'] = 'Βοήθεια';
$lang['admin']['new_window'] = 'Νέο παράθυρο';
$lang['admin']['helpwithsection'] = '%s Βοήθεια';
$lang['admin']['helpaddtemplate'] = '<p>Το Πρότυπο ελέγχει την εμφάνιση και την αίσθηση του site\'s όσον αφορά το περιεχόμενο.</p><p>Δημιουργήστε εδώ την μορφή ιστοτόπου και προσθέστε τα δικά σας CSS στον κατάλληλο χώρο για να ελέγξετε την εμφάνιση των διαφόρων στοιχείων.</p>';
$lang['admin']['helplisttemplate'] = '<p>Αυτή η σελίδα σας επιτρέπει την επεξεργασία , διαγραφή και δημιουργία προτύπων.</p><p>Για την δημιουργία ενός νέου προτύπου κάντε κλίκ στο κουμπί <u>Προσθήκη νέου προτύπου</u>.</p><p>Εάν επιθυμείτε την εφαρμογή του ίδιου προτύπου σε όλες τις σελίδες περιεχομένου, κάντε κλίκ στην υπερσύνδεση <u>Ορισμός σε όλο το περιεχόμενο</u>.</p><p>Εάν επιθυμείτε την αναπαραγωγή ενός προτύπου καντε κλίκ στο εικονίδιο <u>Αντιγραφή</u> και θα εμφανιστεί η προτροπή για την ονομασία του νέου προτύπου.</p>';
$lang['admin']['home'] = 'Home';
$lang['admin']['homepage'] = 'Homepage';
$lang['admin']['hostname'] = 'Όνομα υπολογιστή';
$lang['admin']['idnotvalid'] = 'Το id δεν είναι έγκυρο';
$lang['admin']['imagemanagement'] = 'Διαχείριση εικόνων';
$lang['admin']['informationmissing'] = 'Κάποια πληροφορία λείπει';
$lang['admin']['install'] = 'Εγκατάσταση';
$lang['admin']['invalidcode'] = 'Μή έγκυρος κώδικας.';
$lang['admin']['illegalcharacters'] = 'Invalid characters in field %s.';
$lang['admin']['invalidcode_brace_missing'] = 'Μονός αριθμός εισαγωγικών';
$lang['admin']['invalidtemplate'] = 'Το πρότυπο δεν είναι έγκυρο';
$lang['admin']['itemid'] = 'ID αντικειμένου';
$lang['admin']['itemname'] = 'Όνομα αντικειμένου';
$lang['admin']['language'] = 'Γλώσσα';
$lang['admin']['lastname'] = 'Επώνυμο';
$lang['admin']['logout'] = 'Αποσύνδεση';
$lang['admin']['loginprompt'] = 'Εισάγετε ένα έγκυρο αναγνωριστικό χρήστη για να αποκτήστετε πρόσβαση στο πίνακα διαχείρισης.';
$lang['admin']['logintitle'] = 'Είσοδος Διαχειριστή στο CMS';
$lang['admin']['menutext'] = 'Κείμενο στο Menu';
$lang['admin']['missingparams'] = 'Κάποιες Παράμετροι είναι ελλειπείς ή μή έγκυρες';
$lang['admin']['modifygroupassignments'] = 'Τροποποίηση δικαιωμάτων Ομάδας';
$lang['admin']['moduleabout'] = 'Σχετικά με το άρθρωμα %s ';
$lang['admin']['modulehelp'] = 'Παροχή βοήθειας για το άρθρωμα %s ';
$lang['admin']['msg_defaultcontent'] = 'Add code here that should appear as the default content of all new pages';
$lang['admin']['msg_defaultmetadata'] = 'Add code here that should appear in the metadata section of all new pages';
$lang['admin']['wikihelp'] = 'Βοήθεια απο την Κοινότητα';
$lang['admin']['moduleinstalled'] = 'Το άρθρωμα είναι ήδη εγκατεστημένο';
$lang['admin']['moduleinterface'] = 'Περιβάλλον αρθρώματος %s';
$lang['admin']['modules'] = 'Αρθρώματα';
$lang['admin']['move'] = 'Μετακίνηση';
$lang['admin']['name'] = 'Όνομα';
$lang['admin']['needpermissionto'] = 'Χρειάζεστε τα δικαιώματα πρόσβασης του \'%s\' για να εκτελέσετε αυτήν την λειτουργία.';
$lang['admin']['needupgrade'] = 'Χρειάζεται αναβάθμιση';
$lang['admin']['newtemplatename'] = 'Ονομασία νέου Προτύπου';
$lang['admin']['next'] = 'Επόμενο';
$lang['admin']['noaccessto'] = 'Δεν υπάρχει πρόσβαση στο %s';
$lang['admin']['nocss'] = 'Δέν υπάρχει CSS';
$lang['admin']['noentries'] = 'Δεν υπάρχουν εγγραφές';
$lang['admin']['nofieldgiven'] = 'Δέν εδώθη %s!';
$lang['admin']['nofiles'] = 'Δέν υπάρχουν αρχεία';
$lang['admin']['nopasswordmatch'] = 'Οι κωδικοί πρόσβασης δεν είναι σωστοί';
$lang['admin']['norealdirectory'] = 'Δεν ορίστηκε υπαρκτό όνομα καταλόγου';
$lang['admin']['norealfile'] = 'Δεν ορίστηκε υπαρκτό αρχείο';
$lang['admin']['notinstalled'] = 'Δέν είναι εγκατεστημένο';
$lang['admin']['overwritemodule'] = 'Αντικατάσταση αρθρωμάτων';
$lang['admin']['owner'] = 'Ιδιοκτήτης';
$lang['admin']['pagealias'] = 'Ψευδεπιγραφή σελίδας';
$lang['admin']['pagedefaults'] = 'Page Defaults';
$lang['admin']['pagedefaultsdescription'] = 'Set default values for new pages';
$lang['admin']['parent'] = 'Ανήκει στο';
$lang['admin']['password'] = 'Κώδικός Πρόσβασης';
$lang['admin']['passwordagain'] = 'Κώδικός Πρόσβασης (επανάληψη)';
$lang['admin']['permission'] = 'Δικαίωμα πρόσβασης';
$lang['admin']['permissions'] = 'Δικαιώματα πρόσβασης';
$lang['admin']['permissionschanged'] = 'Τα Δικαιώματα πρόσβασης ενημερώθηκαν.';
$lang['admin']['pluginabout'] = 'Σχετικά με την κεφαλίδα %s';
$lang['admin']['pluginhelp'] = 'Παροχή βοήθειας για την κεφαλίδα %s';
$lang['admin']['pluginmanagement'] = 'Διαχείριση αρθρωμάτων κώδικα';
$lang['admin']['prefsupdated'] = 'Οι προτιμήσεις ενημερώθηκαν.';
$lang['admin']['preview'] = 'Προεπισκόπηση';
$lang['admin']['previewdescription'] = 'Προεπισκόπηση αλλαγών';
$lang['admin']['previous'] = 'Προηγούμενο';
$lang['admin']['remove'] = 'Διαγραφή';
$lang['admin']['removeconfirm'] = 'Αυτή η εντολή θα διαγράψει μόνιμα τα αρχεία που αποτελούν το άρθρωμα απο αυτήν την εγκατάσταση.\\nΕίστε σίγουροι?';
$lang['admin']['removecssassociation'] = 'Κατάργηση συσχέτισης CSS';
$lang['admin']['saveconfig'] = 'Αποθήκευση αρχείου ρυθμίσεων';
$lang['admin']['send'] = 'Αποστολή';
$lang['admin']['setallcontent'] = 'Εφαρμογή σε όλες τις σελίδες';
$lang['admin']['setallcontentconfirm'] = 'Είστε σίγουροι για την  εφαρμογή αυτού του προτύπου σε όλες τις σελίδες?';
$lang['admin']['showinmenu'] = 'Προβολή στο Menu';
$lang['admin']['showsite'] = 'Προβολή του ιστοτόπου';
$lang['admin']['sitedownmessage'] = 'Μήνυμα μη λειτουργίας του ιστοτόπου';
$lang['admin']['siteprefs'] = 'Γενικές ρυθμίσεις';
$lang['admin']['status'] = 'Κατάσταση';
$lang['admin']['stylesheet'] = 'στοιχεία μορφοποίησης';
$lang['admin']['submit'] = 'Υποβολή';
$lang['admin']['submitdescription'] = 'Αποθήκευση Αλλαγών';
$lang['admin']['tags'] = 'Κεφαλίδες';
$lang['admin']['template'] = 'Πρότυπο';
$lang['admin']['templateexists'] = 'Το όνομα προτύπου υπάρχει ήδη';
$lang['admin']['templatemanagement'] = 'Διαχείριση προτύπων';
$lang['admin']['title'] = 'Τίτλος';
$lang['admin']['tools'] = 'Εργαλεία';
$lang['admin']['true'] = 'Σωστό';
$lang['admin']['setfalse'] = 'Ορισμός ώς Λάθος';
$lang['admin']['type'] = 'Τύπος';
$lang['admin']['typenotvalid'] = 'Ο τύπος δεν είναι έγκυρος';
$lang['admin']['uninstall'] = 'Απεγκατάσταση';
$lang['admin']['uninstallconfirm'] = 'Είστε σίγουροι για αυτήν την απεγκατάσταση?';
$lang['admin']['up'] = 'Επάνω';
$lang['admin']['upgrade'] = 'Αναβάθμιση';
$lang['admin']['upgradeconfirm'] = 'Είστε σίγουροι για αυτήν την αναβάθμιση?';
$lang['admin']['uploadfile'] = 'Μεταφορά αρχείου';
$lang['admin']['url'] = 'Υπερσύνδεσμος (URL)';
$lang['admin']['useadvancedcss'] = 'Χρήση διαχείρισης CSS για προχωρημένους';
$lang['admin']['user'] = 'Χρήστης';
$lang['admin']['userdefinedtags'] = 'Προκαθορισμένες απο τον χρήστη κεφαλίδες';
$lang['admin']['usermanagement'] = 'Διαχείριση χρηστών';
$lang['admin']['username'] = 'Όνομα χρήστη';
$lang['admin']['usernameincorrect'] = 'Το όνομα χρήστη ή ο κωδικός πρόσβασης είναι εσφαλμένος';
$lang['admin']['userprefs'] = 'Προτιμήσεις χρήστη';
$lang['admin']['usersassignedtogroup'] = 'Χρήστες μέλη της ομάδας %s';
$lang['admin']['usertagexists'] = 'Μία κεφαλίδα με το όνομα αυτό υπάρχει ήδη. Επιλέξτε διαφορετικό.';
$lang['admin']['usewysiwyg'] = 'Χρήση προγράμματος επεξεργασίας WYSIWYG για το περιεχόμενο';
$lang['admin']['version'] = 'Έκδοση';
$lang['admin']['view'] = 'Προβολή';
$lang['admin']['welcomemsg'] = 'Καλώς ήλθες %s';
$lang['admin']['directoryabove'] = 'Κατάλογος ένα επίπεδο επάνω';
$lang['admin']['nodefault'] = 'Δεν επιλέχτηκε αρχική σελίδα';
$lang['admin']['blobexists'] = 'Το όνομα της νησίδας Html υπάρχει ήδη';
$lang['admin']['blobmanagement'] = 'Διαχείριση νησίδων Html';
$lang['admin']['errorinsertingblob'] = 'Σφάλμα κατα την εισαγωγή της νησίδας Html';
$lang['admin']['addhtmlblob'] = 'Προσθήκη νησίδας Html';
$lang['admin']['edithtmlblob'] = 'Επεξεργασία νησίδας Html';
$lang['admin']['edithtmlblobsuccess'] = 'Global content block updated';
$lang['admin']['tagtousegcb'] = 'Tag to Use this Block';
$lang['admin']['gcb_wysiwyg'] = 'Ενεργοποίηση GCB WYSIWYG';
$lang['admin']['gcb_wysiwyg_help'] = 'Ενεργοποίηση του επεξεργαστή WYSIWYG κατα την διάρκεια της επεξεργασίας πακέτων ολικού περιεχομένου';
$lang['admin']['filemanager'] = 'Διαχείριση αρχείων';
$lang['admin']['imagemanager'] = 'Διαχείριση εικόνων';
$lang['admin']['encoding'] = 'Κωδικοποίηση';
$lang['admin']['clearcache'] = 'Καθαρισμός Μνήμης';
$lang['admin']['clear'] = 'Καθαρισμός';
$lang['admin']['cachecleared'] = 'Η μνήμη καθαρίστηκε';
$lang['admin']['apply'] = 'Εφαρμογή';
$lang['admin']['applydescription'] = 'Αποθήκευση αλλαγών και συνέχιση της επεξεργασίας';
$lang['admin']['none'] = 'Κανένα';
$lang['admin']['wysiwygtouse'] = 'Επιλογή προγράμματος επεξεργασίας WYSIWYG';
$lang['admin']['syntaxhighlightertouse'] = 'Select syntax highlighter to use';
$lang['admin']['hasdependents'] = 'Περιέχει εξαρτήσεις';
$lang['admin']['missingdependency'] = 'Λέιπει εξάρτηση';
$lang['admin']['minimumversion'] = 'Ελάχιστη έκδοση';
$lang['admin']['minimumversionrequired'] = 'Ελάχιστη απιτούμενη έκδοση CMSMS';
$lang['admin']['maximumversion'] = 'Μέγιστη έκδοση';
$lang['admin']['maximumversionsupported'] = 'Μέγιστη υποστηριζόμενη έκδοση CMSMS';
$lang['admin']['depsformodule'] = 'Εξαρτήσεις για το άρθρωμα %s ';
$lang['admin']['installed'] = 'Εγκατεστημένο';
$lang['admin']['author'] = 'Συγγραφέας';
$lang['admin']['changehistory'] = 'Αλλαγή ιστορικού';
$lang['admin']['moduleerrormessage'] = 'Μήνυμα σφάλματος για το άρθρωμα %s';
$lang['admin']['moduleupgradeerror'] = 'Εμφανίστηκε ένα σφάλμα στην αναβάθμιση του αρθρώματος.';
$lang['admin']['moduleinstallmessage'] = 'Εγκατάσταση μηνύματος για το άρθρωμα %s';
$lang['admin']['moduleuninstallmessage'] = 'Απεγκατάσταση μηνύματος για το άρθρωμα %s';
$lang['admin']['admintheme'] = 'Θέμα για την εμφάνιση του πίνακα διαχείρισης';
$lang['admin']['addstylesheet'] = 'Προσθήκη στοιχεία μορφοποίησης';
$lang['admin']['editstylesheet'] = 'Επεξεργασία στοιχεία μορφοποίησης';
$lang['admin']['addcssassociation'] = 'Προσθήκη συσχέτισης CSS';
$lang['admin']['attachstylesheet'] = 'Επισύναψη αυτού του στοιχεία μορφοποίησης';
$lang['admin']['attachtemplate'] = 'Επισύναψη σε αυτό το πρότυπο';
$lang['admin']['main'] = 'Αρχή';
$lang['admin']['pages'] = 'Διαχείριση Σελίδων';
$lang['admin']['page'] = 'Page';
$lang['admin']['files'] = 'Αρχεία';
$lang['admin']['layout'] = 'Μορφή ιστοτόπου';
$lang['admin']['usersgroups'] = 'Χρήστες & Ομάδες';
$lang['admin']['extensions'] = 'Επεκτάσεις';
$lang['admin']['preferences'] = 'Προτιμήσεις';
$lang['admin']['admin'] = 'Διαχείριση';
$lang['admin']['viewsite'] = 'Προβολή Τοποθεσίας';
$lang['admin']['templatecss'] = 'Ορισμός προτύπων στο CSS';
$lang['admin']['plugins'] = 'Αρθρώματα κώδικα';
$lang['admin']['movecontent'] = 'Μετακίνηση σελίδων';
$lang['admin']['module'] = 'Άρθρωμα';
$lang['admin']['usertags'] = 'Προκαθορισμένες απο τον χρήστη κεφαλίδες';
$lang['admin']['htmlblobs'] = 'Νησίδες HTML';
$lang['admin']['adminhome'] = 'Αρχική σελίδα διαχείρισης';
$lang['admin']['liststylesheets'] = 'Κατάλογος στοιχείων μορφοποίησης';
$lang['admin']['preferencesdescription'] = 'Εδώ μπορείτε να ορίσετε τις διάφορες προτιμήσεις σας για το σύνολο του ιστοτόπου.';
$lang['admin']['adminlogdescription'] = 'Εμφάνιση του καταγραφέα κινήσεων για τον διαχειριστή.';
$lang['admin']['mainmenu'] = 'Κυρίως Menu';
$lang['admin']['users'] = 'Χρήστες';
$lang['admin']['usersdescription'] = 'Εδώ διαχειρίζεστε τους χρήστες.';
$lang['admin']['groups'] = 'Ομάδες';
$lang['admin']['groupsdescription'] = 'Εδώ διαχειρίζεστε ομάδες.';
$lang['admin']['groupassignments'] = 'Μέλη ομάδας';
$lang['admin']['groupassignmentdescription'] = 'Εω μπορείτε να εντάξετε χρήστες σε ομάδες.';
$lang['admin']['groupperms'] = 'Δικαιώματα πρόσβασης ομάδας';
$lang['admin']['grouppermsdescription'] = 'Ορισμός δικαιωμάτων πρόσβασης και του επιπέδου της για τις ομάδες';
$lang['admin']['pagesdescription'] = 'Εδώ μπορείτε να προσθέτετε και να επεξεργάζεστε σελίδες και άλλο περιεχόμενο.';
$lang['admin']['htmlblobdescription'] = 'Οι νησίδες HTML περιέχουν τμήματα κώδικα HTML ή και PHP που μπορείτε να τοποθετήσετε σε πολλές διαφορετικές σελίδες ή στα πρότυπά σας.';
$lang['admin']['templates'] = 'Πρότυπα σελίδας';
$lang['admin']['templatesdescription'] = 'Εδώ μπορείτε να προσθέτετε και να επεξεργάζεστε πρότυπα. Τα πρότυπα καθορίζουν την αισθητική του ιστοτόπου.';
$lang['admin']['stylesheets'] = 'Στοιχεία μορφοποίησης';
$lang['admin']['stylesheetsdescription'] = 'Η διαχείριση των στοιχείων μορφοποίησης (CSS) μπορεί σε συνεργασία με τα πρότυπα να διαμορφώσει την αισθητική του ιστοτόπου (για προχωρημένους).';
$lang['admin']['filemanagerdescription'] = 'Μεταφορά και διαχείριση αρχείων.';
$lang['admin']['imagemanagerdescription'] = 'Μεταφορά/επεξεργασία και κατάργηση εικόνων.';
$lang['admin']['moduledescription'] = 'Τα αρθρώματα επεκτείνουν το CMS παρέχοντας πρόσθετες δυνατότητες.';
$lang['admin']['tagdescription'] = 'Οι κεφαλίδες ειναι λειτουργίες που μπορούν να προστεθούν στο περιεχόμενο καί/ή στα πρότυπα.';
$lang['admin']['usertagdescription'] = 'Κεφαλίδες που μπορείτε να δημιουργήσετε και να τροποποιήσετε για να εκτελούνται συγκεκριμένες εργασίες κατευθείαν στον φυλλομετρητή σας.';
$lang['admin']['installdirwarning'] = '<em><strong>Προειδοποίηση:</strong></em> Ο κατάλογος εγκατάστασης ακόμη υπάρχει. Καταργήστε τον τελείως.';
$lang['admin']['subitems'] = 'Περιέχει τα';
$lang['admin']['extensionsdescription'] = 'Αρθρώματα, κεφαλίδες και άλλα ......';
$lang['admin']['usersgroupsdescription'] = 'Αντικείμενα σχετικά με χρήστες και ομάδες.';
$lang['admin']['layoutdescription'] = 'Επιλογές μορφής του ιστοτόπου.';
$lang['admin']['admindescription'] = 'Λειτουργίες διαχείρισης Τοποθεσίας.';
$lang['admin']['contentdescription'] = 'Εδώ μπορείτε να προσθέτετε και να επεξεργάζεστε περιεχόμενο.';
$lang['admin']['enablecustom404'] = 'Ενεργοποίηση τροποποιημένου μηνύματος 404';
$lang['admin']['enablesitedown'] = 'Ενεργοποίηση μηνύματος μή λειτουργίας του ιστοτόπου';
$lang['admin']['bookmarks'] = 'Αγαπημένα';
$lang['admin']['user_created'] = 'Τροποποιημένες συντομεύσεις';
$lang['admin']['forums'] = 'Forums.';
$lang['admin']['wiki'] = 'Wiki.';
$lang['admin']['irc'] = 'IRC.';
$lang['admin']['module_help'] = 'Βοήθεια για το άρθρωμα';
$lang['admin']['managebookmarks'] = 'Διαχείριση Αγαπημένων';
$lang['admin']['editbookmark'] = 'Επεξεργασία αγαπημένου';
$lang['admin']['addbookmark'] = 'Προσθήκη αγαπημένου';
$lang['admin']['recentpages'] = 'Πρόσφατες σελίδες';
$lang['admin']['groupname'] = 'Ονομασία ομάδας';
$lang['admin']['selectgroup'] = 'Επιλογή ομάδας';
$lang['admin']['updateperm'] = 'Ενημέρωση δικαιωμάτων πρόσβασης';
$lang['admin']['admincallout'] = 'Συντομεύσεις διαχείρισης';
$lang['admin']['showbookmarks'] = 'Εμφάνιση αγαπημένων διαχειριστή';
$lang['admin']['hide_help_links'] = 'Απόκρυψη συνδέσμων βοήθειας';
$lang['admin']['hide_help_links_help'] = 'Μαρκάρετε την επιλογή για να αποενεργοποιήσετε το wiki και τους συνδέσμους βοήθειας αρθρώματος στις κεφαλίδες της σελίδας.';
$lang['admin']['showrecent'] = 'Εμφάνιση πρόσφατα χρησιμοποιημένων σελίδων';
$lang['admin']['attachtotemplate'] = 'Επισύναψη στοιχεία μορφοποίησης στο πρότυπο';
$lang['admin']['attachstylesheets'] = 'Επισύναψη στοιχεία μορφοποίησης';
$lang['admin']['indent'] = 'Δημιουργία εσοχής για την ανάδειξη της ιεράρχησης';
$lang['admin']['adminindent'] = 'Προβολή περιεχομένου';
$lang['admin']['contract'] = 'Σύμπτηξη ενότητας';
$lang['admin']['expand'] = 'Ανάπτυξη ενότητας';
$lang['admin']['expandall'] = 'Ανάπτυξη όλων των ενοτήτων';
$lang['admin']['contractall'] = 'Σύμπτηξη όλων των ενοτήτων';
$lang['admin']['menu_bookmarks'] = '[+] ';
$lang['admin']['globalconfig'] = 'Γενικές ρυθμίσεις';
$lang['admin']['adminpaging'] = 'Ορισμό του αριθμού των αντικειμένων περιεχομένου που θα εμφανίζονται ανα σελίδα στην λίστα σελίδων';
$lang['admin']['nopaging'] = 'Εμφάνιση όλων των αντικειμένων';
$lang['admin']['myprefs'] = 'Προτιμήσεις';
$lang['admin']['myprefsdescription'] = 'Εδώ μπορείτε να προσαρμόσετε την περιοχή εργασίας στην τοποθεσία διαχείρισης με βάση τις ανάγκες σας.';
$lang['admin']['myaccount'] = 'Ο λογαριασμός μου';
$lang['admin']['myaccountdescription'] = 'Εδώ μπορείτε να ενημερώσετε τις πληροφορίες των προσωπικών στοιχείων σας.';
$lang['admin']['adminprefs'] = 'Προτιμήσεις χρήστη';
$lang['admin']['adminprefsdescription'] = 'Εδώ μπορείτε να ορίσετε συγκεκριμένες προτιμήσεις διαχείρισης για τον ιστοτόπο.';
$lang['admin']['managebookmarksdescription'] = 'Εδώ μπορείτε να διαχειρίζεστε τα αγαπημένα του διαχειριστή.';
$lang['admin']['options'] = 'Επιλογές';
$lang['admin']['langparam'] = 'Η παράμετρος χρησιμοποιείται για τον καθορισμό της γλώσσας στην εμφάνιση στο προσκήνιο. Δεν αφορά όλα τα αρθρώματα κώδικα ούτε είναι απαραίτητο.';
$lang['admin']['parameters'] = 'Παράμετροι';
$lang['admin']['mediatype'] = 'Τύπος μέσου';
$lang['admin']['mediatype_'] = 'None set : Θα έχει επίπτωση παντού ';
$lang['admin']['mediatype_all'] = 'all : Συμβατό με όλες τις συσκευές.';
$lang['admin']['mediatype_aural'] = 'aural : Προορίζεται για speech synthesizers.';
$lang['admin']['mediatype_braille'] = 'braille : Προορίζεται για συσκευές που εχουν ενσωματωμένη γραφή braille.';
$lang['admin']['mediatype_embossed'] = 'embossed : Intended for paged braille printers.';
$lang['admin']['mediatype_handheld'] = 'handheld : Intended for handheld devices';
$lang['admin']['mediatype_print'] = 'print : Intended for paged, opaque material and for documents viewed on screen in print preview mode.';
$lang['admin']['mediatype_projection'] = 'projection : Intended for projected presentations, for example projectors or print to transparencies.';
$lang['admin']['mediatype_screen'] = 'screen : Intended primarily for color computer screens.';
$lang['admin']['mediatype_tty'] = 'tty : Intended for media using a fixed-pitch character grid, such as teletypes and terminals.';
$lang['admin']['mediatype_tv'] = 'tv : Intended for television-type devices.';
$lang['admin']['assignmentchanged'] = 'Οι συσχετίσεις της ομάδας ενημερώθηκαν.';
$lang['admin']['stylesheetexists'] = 'Το στοιχείο μορφοποίησης ήδη υπάρχει';
$lang['admin']['errorcopyingstylesheet'] = 'Σφάλμα κατα την αντιγραφή του στοιχείου μορφοποίησης';
$lang['admin']['copystylesheet'] = 'Αντιγραφή στοιχείων μορφοποίησης';
$lang['admin']['newstylesheetname'] = 'Νέα ονομασία του στοιχείου μορφοποίησης';
$lang['admin']['target'] = 'Στόχος';
$lang['admin']['xml'] = 'Σελίδα XML';
$lang['admin']['xmlmodulerepository'] = 'Διεύθυνση(URL) του διαχειριστή (ModuleRepository soap server)';
$lang['admin']['metadata'] = 'Μεταδεδομένα';
$lang['admin']['globalmetadata'] = 'Μεταδεδομένα (γενικευμένα)';
$lang['admin']['titleattribute'] = 'Τίτλος για την ιδιότητα';
$lang['admin']['tabindex'] = 'Σειρά εμφάνισης του TAB';
$lang['admin']['accesskey'] = '“Κλειδί” πρόσβασης';
$lang['admin']['sitedownwarning'] = '<strong>Προειδοποίηση:</strong> Ο δικτυακός τόπος σας εμφανίζει το μήνυμα "Εκτός λειτουργίας για συντήρηση".  Καταργήσετε το αρχείο %s για την επίλυση του.';
$lang['admin']['deletecontent'] = 'Διαγραφή περιεχομένου';
$lang['admin']['deletepages'] = 'Θα διαγράψετε αυτές τις σελίδες?';
$lang['admin']['selectall'] = 'Επιλογή όλων';
$lang['admin']['selecteditems'] = 'Επιλεγμένα στοιχεία';
$lang['admin']['inactive'] = 'Ανενεργό';
$lang['admin']['deletetemplates'] = 'Delete Templates';
$lang['admin']['templatestodelete'] = 'These templates will be deleted';
$lang['admin']['wontdeletetemplateinuse'] = 'These templates are in use and will not be deleted';
$lang['admin']['deletetemplate'] = 'Delete Stylesheets';
$lang['admin']['stylesheetstodelete'] = 'These stylesheets will be deleted';
$lang['admin']['sitename'] = 'Site Name';
$lang['admin']['siteadmin'] = 'Site Admin';
$lang['admin']['images'] = 'Image Manager';
$lang['admin']['blobs'] = 'Global Content Blocks';
$lang['admin']['groupmembers'] = 'Group Assignments';
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
$lang['admin']['filterbymodule'] = 'Φίλτρο με κριτήριο το άρθρωμα';
$lang['admin']['showall'] = 'Εμφάνιση όλων';
$lang['admin']['core'] = 'Πυρήνας';
$lang['admin']['defaultpagecontent'] = 'Default Page Content';
$lang['admin']['file_url'] = 'Link to file (instead of URL)';
$lang['admin']['no_file_url'] = 'None (Use URL Above)';
$lang['admin']['defaultparentpage'] = 'Default Parent Page';
$lang['admin']['error_udt_name_whitespace'] = 'Error: User Defined Tags cannot have spaces in their name.';
$lang['admin']['warning_safe_mode'] = '<strong><em>WARNING:</em></strong> PHP Safe mode is enabled.  This will cause difficulty with files uploaded via the web browser interface, including images, theme and module XML packages.  You are advised to contact your site administrator to see about disabling safe mode.';
$lang['admin']['test'] = 'Δοκιμή';
$lang['admin']['results'] = 'Αποτελέσματα ';
$lang['admin']['untested'] = 'Δεν έχει ελεγχθεί ';
$lang['admin']['unknown'] = 'Άγνωστο';
$lang['admin']['download'] = 'Λήψη αρχείου';
$lang['admin']['frontendwysiwygtouse'] = 'Frontend wysiwyg';
$lang['admin']['all_groups'] = 'Όλες οι ομάδες';
$lang['admin']['utma'] = '156861353.3699670005119468500.1223561136.1225391793.1225396917.16';
$lang['admin']['utmz'] = '156861353.1224615019.12.6.utmcsr=dev.cmsmadesimple.org|utmccn=(referral)|utmcmd=referral|utmcct=/softwaremap/trove_list.php';
$lang['admin']['utmc'] = '156861353';
$lang['admin']['utmb'] = '156861353';
?>