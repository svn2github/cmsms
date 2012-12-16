<?php
$lang['admin']['info_smarty_cacheudt'] = 'If enabled, all calls to user defined tags will be cached.  This will be useful for tags that display the output of database queries.  You can disable caching using the nocache parameter in the udt call.  i.e: <code>{myusertag nocache}</code>';
$lang['admin']['prompt_smarty_cacheudt'] = 'Cache UDT Calls';
$lang['admin']['always'] = 'Πάντα';
$lang['admin']['never'] = 'Ποτέ';
$lang['admin']['moduledecides'] = 'Module Decides';
$lang['admin']['info_smarty_cachemodules'] = 'Select how to cache tags in various templates that call module actions.  If enabled, all module calls will be cached.  This may have negative effects on some modules, or modules with forms.  <em>(note: you can override this using the nocache option as described in the smarty manual)</em>.  If disabled no module calls will be cached which may have an effect on performance.   If you select to allow the module to decide, the default is that caching is not performed.  The module can override this, and you can disable caching using the nocache parameter when calling the module.';
$lang['admin']['prompt_smarty_cachemodules'] = 'Cache module calls';
$lang['admin']['info_smarty_compilecheck'] = 'If disabled, smarty will not check the modification dates of templates to see if they have been modified.  This can significantly improve performance.  However performing any template change (or even some content changes) may require a cache clearing';
$lang['admin']['prompt_smarty_compilecheck'] = 'Do a Compilation Check';
$lang['admin']['info_smarty_options'] = 'The following options have effect only when the above caching options are enabled';
$lang['admin']['info_smarty_caching'] = 'When enabled, the output from various plugins will be cached to increase performance.  This only applies to output on content pages marked as cachable, and only for non-admin users.  Note, this functionality may interfere with the behavior of some modules or plugins, or plugins that use non-inline forms.';
$lang['admin']['prompt_use_smartycaching'] = 'Enable Smarty Caching';
$lang['admin']['smarty_settings'] = 'Smarty Settings';
$lang['admin']['help_function_cms_init_editor'] = '<h3>What does this do?</h3>
  <p>This plugin is used to initialize the selected wysiwyg editor for display when wysiwyg functionalities are required for frontend data submission.  This module will find the selected frontend wysiwyg, determine if it has been requested, and if so generate the appropriate html code <em>(usually javascript links)</em> so that the wysiwyg will initialize properly when the page is loaded.  If no wysiwyg editors have been requested for the frontend request this plugin will produce no output.</p>
  <p><strong>Note:</strong> This plugin will work properly given the default configuration of CMSMS.  If you have modified the "process_whole_template" configuration variable from its default value, you may have to adjust the parameters supplied to this plugin.</p>
<h3>How do I use it?</h3>
<p>The first thing you must do is select the frontend WYSIWYG editor to use in the global settings page of the admin console.  Next If you use frontend wysiwyg editors on numerous pages, it may be best to place the {cms_init_editor} plugin directly into your page template.  If you only require the wysiwyg editor to be enabled on a limited amount of pages you may just place it into the "Page Specific Metadata" field in each page.</p>
<h3>What parameters does it take?</h3>
<ul>
<li><em>(optional)wysiwyg</em> - Specify the name of the wysiwyg editor module to initialize.  Use with caution.  If you have a different wysiwyg editor selected in the global settings, this will force the specified  editor to be initialized.</li>
<li><em>(optional)force=0</em> - Normally this plugin will not initialize the specified (or detected) editor if it has not been marked as "active".  This parameter will override that behavior.  This parameter may be required of the "process_whole_template" configuration variable is set to a non default value.</li>
<li><em>(optional)assign</em> - Assign the output of the plugin to the named smarty variable.</li>
</ul>';
$lang['admin']['info_pagedefaults'] = 'This form allows specifying various options as to the initial settings when creating new content pages.  The items in this page have no effect when editing existing pages';
$lang['admin']['default_contenttype'] = 'Default Content Type';
$lang['admin']['info_default_contenttype'] = 'Applicable when adding new content objects, this control specifies the type that is selected by default.  Please ensure that the selected item is not one of the "disallowed types".';
$lang['admin']['error_contenttype'] = 'The content type associated with this page is invalid or not permitted';
$lang['admin']['info_disallowed_contenttypes'] = 'Select which content types to remove from the content type dropdown when editing or adding content.  Use CTRL+Click to select, unselect items.  Having no selected items will indicate that all content types are allowed. <em>(applies to all users)</em>';
$lang['admin']['disallowed_contenttypes'] = 'Content Types that are NOT allowed';
$lang['admin']['search_module'] = 'Search module';
$lang['admin']['info_search_module'] = 'Select the module that should be used to index words for searching, and will provide the site search capabilities';
$lang['admin']['filecreatedirbadchars'] = 'Invalid characters were detected in the submitted directory name';
$lang['admin']['modulehelp_yourlang'] = 'View in Your Language';
$lang['admin']['info_umask'] = 'The "umask" is an octal value that is used to specify the default permission for newly created files (this is used for files in the cache directory, and uploaded files.  For more information see the appropriate <a href="http://en.wikipedia.org/wiki/Umask">wikipedia article.</a>';
$lang['admin']['general_operation_settings'] = 'General Operation Settings';
$lang['admin']['info_checkversion'] = 'If enabled, the system will perform a daily check for a new release of CMSMS';
$lang['admin']['checkversion'] = 'Allow periodic checks for new versions';
$lang['admin']['actioncontains'] = 'Action Contains';
$lang['admin']['filterapplied'] = 'Current Filter';
$lang['admin']['automatedtask_success'] = 'Automated task performed';
$lang['admin']['siteprefsupdated'] = 'Global Settings Updated';
$lang['admin']['ip_addr'] = 'IP Διεύθυνση';
$lang['admin']['warn_admin_ipandcookies'] = 'Warning: Admin activities use cookies and tracks your IP address';
$lang['admin']['event_desc_loginfailed'] = 'Αποτυχία Σύνδεσης';
$lang['admin']['modulehelp_english'] = 'View In English';
$lang['admin']['nopluginabout'] = 'No about information available for this plugin';
$lang['admin']['nopluginhelp'] = 'No help available for this plugin';
$lang['admin']['moduleupgraded'] = 'Upgrade Successfull';
$lang['admin']['added_css'] = 'Added Stylesheet';
$lang['admin']['toggle'] = 'Toggle';
$lang['admin']['added_group'] = 'Added Group';
$lang['admin']['expanded_xml'] = 'Expanded XML file consisting of %s %s';
$lang['admin']['installed_mod'] = 'Installed version %s';
$lang['admin']['uninstalled_mod'] = 'Uninstalled module %s';
$lang['admin']['upgraded_mod'] = '%s Upgraded from Version %s to %s';
$lang['admin']['edited_gcb'] = 'Edited Global Content Block';
$lang['admin']['edited_content'] = 'Edited Content';
$lang['admin']['added_content'] = 'Added Content';
$lang['admin']['added_css_association'] = 'Added Stylesheet Association';
$lang['admin']['deleted_group'] = 'Deleted Group';
$lang['admin']['deleted_content'] = 'Deleted Content';
$lang['admin']['edited_user'] = 'Edited User';
$lang['admin']['edited_udt'] = 'Edited User Defined Tag';
$lang['admin']['content_copied'] = 'Content Item Copied to %s';
$lang['admin']['deleted_template'] = 'Deleted Template';
$lang['admin']['added_udt'] = 'Added User Defined Tag';
$lang['admin']['deleted_udt'] = 'Deleted User Defined Tag';
$lang['admin']['added_gcb'] = 'Added Global Content Block';
$lang['admin']['edited_group'] = 'Edited Group';
$lang['admin']['deleted_css_association'] = 'Deleted Stylesheet Association';
$lang['admin']['user_logout'] = 'User Logout';
$lang['admin']['user_login'] = 'User Login';
$lang['admin']['login_failed'] = 'User Login Failed';
$lang['admin']['deleted_css'] = 'Deleted Stylesheet';
$lang['admin']['uploaded_file'] = 'Uploaded File';
$lang['admin']['created_directory'] = 'Created Directory';
$lang['admin']['deleted_file'] = 'Deleted File';
$lang['admin']['deleted_directory'] = 'Deleted Directory';
$lang['admin']['edited_template'] = 'Edited Template';
$lang['admin']['deleted_user'] = 'Deleted User';
$lang['admin']['deleted_module'] = 'Permanently removed %s';
$lang['admin']['deleted_gcb'] = 'Deleted Global Content Block';
$lang['admin']['added_user'] = 'Added User';
$lang['admin']['edited_user_preferences'] = 'Edited User Preferences';
$lang['admin']['added_template'] = 'Added Template';
$lang['admin']['event_desc_stylesheetpostcompile'] = 'Sent after a stylesheet is compiled through smarty';
$lang['admin']['event_desc_stylesheetprecompile'] = 'Sent before a stylesheet is compiled through smarty';
$lang['admin']['confirm_uploadmodule'] = 'Are you sure you would like to upload the selected XML file. Incorrectly uploading a module file may break a functioning website';
$lang['admin']['error_module_mincmsversion'] = 'This module requires a newer version of CMS Made Simple';
$lang['admin']['info_browser_cache_expiry'] = 'Specify the amount of time (in minutes) that browsers should cache pages for.  Setting this value to 0 disables the functionality';
$lang['admin']['browser_cache_expiry'] = 'Browser Cache Expiry Period <em>(minutes)</em>';
$lang['admin']['info_browser_cache'] = 'Applicable only to cachable pages, this setting indicates that browsers should be allowed to cache the pages for an amount of time.  If enabled repeat visitors to your site may not immediately see changes to the content of the pages.';
$lang['admin']['allow_browser_cache'] = 'Allow Browser to Cache Pages';
$lang['admin']['server_cache_settings'] = 'Server Cache Settings';
$lang['admin']['browser_cache_settings'] = 'Browser Cache Settings';
$lang['admin']['help_function_browser_lang'] = '<h3>What does this do?</h3>
  <p>This plugin detects and outputs the language that the users browser accepts, and cross references it with a list of allowed languages to determine a language value for the session.</p>
<h3>How do I use it?</h3>
<p>Insert the tag early into your page template <em>(it can go above the <head> section if you want)</em> and provide it the name of the default language, and the accepted languages (only two character language names are accepted), then do something with the result.  i.e:</p>
<pre><code>{browser_lang accept=de,fr,en,es default=en assign=tmp}{session_put var=lang val=$tmp}</code></pre>
<p><em>({session_put} is a plugin provided by the CGSimpleSmarty module)</em></p>
<h3>What Parameters does it Take?</h3>
<ul>
<li><strong>accepted <em>(required)</em></strong><br/> - A comma separated list of two character language names that are accepted.</li>
<li>default<br/>- <em>(optional)</em> A default language to output if no accepted language was supported by the browser.  en is used if no other value is specified.</li>
<li>assign<br/>- <em>(optional)</em> The name of the smarty variable to assign the results to.  If not specified the results of this function are returned.</li>
</ul>';
$lang['admin']['info_target'] = 'This option may used by the Menu Manager to indicate when and how new frames or windows should be opened.  Some menu manager templates may ignore this option.';
$lang['admin']['close'] = 'Close';
$lang['admin']['open'] = 'Open';
$lang['admin']['revert'] = 'Revert all changes';
$lang['admin']['autoclearcache2'] = 'Remove cache files that are older than the specified number of days';
$lang['admin']['root'] = 'Root';
$lang['admin']['info_content_autocreate_flaturls'] = 'If enabled, all urls will be created as a copy of the page alias (but not synchronized to the page alias)';
$lang['admin']['content_autocreate_flaturls'] = 'Automatically created URL\'s are flat';
$lang['admin']['content_autocreate_urls'] = 'Automatically create page URL\'s';
$lang['admin']['content_mandatory_urls'] = 'Page URLS are required';
$lang['admin']['content_imagefield_path'] = 'Path for image field';
$lang['admin']['info_content_imagefield_path'] = 'Relative to the image uploads path, specify a directory name that contains the paths containing files for the image field';
$lang['admin']['content_thumbnailfield_path'] = 'Path for thumbnail field';
$lang['admin']['info_content_thumbnailfield_path'] = 'Relative to the image uploads path, specify a directory name that contains the paths containing files for the image field.  Usually this will be the same as the path above.';
$lang['admin']['contentimage_path'] = 'Path for {content_image} tag';
$lang['admin']['info_contentimage_path'] = 'Relative to the uploads path, specify a directory name that contains the paths containing files for the {content_image} tag.  This value is used as a default for the dir parameter';
$lang['admin']['editcontent_settings'] = 'Content Editing Settings';
$lang['admin']['help_page_url'] = 'Specify an alternate URL (relative to the root of your website) that can be used to uniquely identify this page.  i.e: path/to/mypage.  The page url is only useful when pretty urls are enabled.';
$lang['admin']['help_page_alias'] = 'The alias is used as an alternate to the page id to uniquely identify a page. It must be unique across all pages.  The alias is also used to assist in building the URL for the page';
$lang['admin']['help_page_searchable'] = 'This setting indicates whether the content of this page should be indexed by the Search module';
$lang['admin']['help_page_cachable'] = 'Performance can be increased by setting as many pages as possible to cachable.  However this cannot be used for pages where content may change on a per request basis';
$lang['admin']['sitedownexcludeadmins'] = 'Exclude users logged in to the CMSMS admin console';
$lang['admin']['your_ipaddress'] = 'Your IP Address is';
$lang['admin']['use_wysiwyg'] = 'Use WYSIWYG';
$lang['admin']['contenttype_redirlink'] = 'Redirecting Link';
$lang['admin']['yes'] = 'Ναί';
$lang['admin']['no'] = 'Όχι';
$lang['admin']['listcontent_showalias'] = 'Display the "Alias" column';
$lang['admin']['listcontent_showurl'] = 'Display the "URL" column';
$lang['admin']['listcontent_showtitle'] = 'Display the Page Title or Menu Text';
$lang['admin']['listcontent_settings'] = 'Content List Settings';
$lang['admin']['lctitle_page'] = 'The title of existing content items';
$lang['admin']['lctitle_alias'] = 'The alias of existing content items. Some content items do not have aliases';
$lang['admin']['lctitle_url'] = 'The URL suffix for the content item.  If set';
$lang['admin']['lctitle_template'] = 'The selected template for the content item. Some content items do not have templates';
$lang['admin']['lctitle_owner'] = 'The owner of the content item';
$lang['admin']['lctitle_active'] = 'Indicates whether the content item is active. Inactive items cannot be displayed.';
$lang['admin']['lctitle_default'] = 'Specify the content item that is accessed when the root url is requested.  Only one item can be default';
$lang['admin']['lctitle_move'] = 'Allows arranging your content hierarchy';
$lang['admin']['lctitle_multiselect'] = 'Select All/Select None';
$lang['admin']['invalid_url2'] = 'The page URL specified is invalid.  It should contain only alphanumeric characters, or - or /.  Extensions must contain only alphanumeric chars and be less than 5 characters in length.  It is also possible that the URL specified is already in use.';
$lang['admin']['page_url'] = 'Page URL';
$lang['admin']['runuserplugin'] = 'Run User Plugin';
$lang['admin']['output'] = 'Output';
$lang['admin']['run'] = 'Run';
$lang['admin']['run_udt'] = 'Run this User Defined Tag';
$lang['admin']['stylesheetcopied'] = 'Stylesheet Copied';
$lang['admin']['templatecopied'] = 'Template Copied';
$lang['admin']['ecommerce_desc'] = 'Modules for providing E-commerce capabilities';
$lang['admin']['ecommerce'] = 'E-Commerce';
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
  <p>Just insert the tag into your template/page\'s head section like: <code>{cms_stylesheet}</code></p>
  <h3>What parameters does it take?</h3>
  <ul>
  <li><em>(optional)</em>name - Instead of getting all stylesheets for the given page, it will only get one specifically named one, whether it\'s attached to the current template or not.</li>
  <li><em>(optional)</em>templateid - If templateid is defined, this will return stylesheets associated with that template instead of the current one.</li>
  <li><em>(optional)</em>media - When used in conjunction with the name parameter this parameter will allow you to override the media type for that stylesheet.  When used in conjunction with the templateid parameter, the media parameter will only output stylesheet tags for those stylesheets that are marked as compatible with the specified media type.</li>
  </ul>
  <h3>Smarty Processing</h3>
  <p>When generating css files this system passes the stylesheets retrieved from the database through smarty.  The smarty delimiters have been changed from the CMSMS standard { and } to [[ and ]] respectively to ease transition in stylesheets.  This allows creating smarty variables i.e.: [[assign var=\'red\' value=\'#900\']] at the top of the stylesheet, and then using these variables later in the stylesheet, i.e:</p>
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
$lang['admin']['info_pseudocron_granularity'] = 'This setting indicates how often the system will attempt to handle regularly scheduled tasks';
$lang['admin']['cron_request'] = 'Each Request';
$lang['admin']['cron_15m'] = '15 Λεπτά';
$lang['admin']['cron_30m'] = '30 Λεπτά';
$lang['admin']['cron_60m'] = '1 Ώρα';
$lang['admin']['cron_120m'] = '2 Ώρες';
$lang['admin']['cron_3h'] = '3 Ώρες';
$lang['admin']['cron_6h'] = '6 Ώρες';
$lang['admin']['cron_12h'] = '12 Ώρες';
$lang['admin']['cron_24h'] = '24 Ώρες';
$lang['admin']['adminlog_1day'] = '1 ημέρα';
$lang['admin']['adminlog_1week'] = '1 εβδομάδα';
$lang['admin']['adminlog_2weeks'] = '2 εβδομάδες';
$lang['admin']['adminlog_1month'] = '1 μήνας';
$lang['admin']['adminlog_3months'] = '3 μήνες';
$lang['admin']['adminlog_6months'] = '6 μήνες';
$lang['admin']['adminlog_manual'] = 'Manual deletion';
$lang['admin']['adminlog_lifetime'] = 'Lifetime of log-entries';
$lang['admin']['info_adminlog_lifetime'] = 'Remove log-entries that are older than the specified period.';
$lang['admin']['filteruser'] = 'Username is';
$lang['admin']['filtername'] = 'Event name contains';
$lang['admin']['filteraction'] = 'Action contains';
$lang['admin']['filterapply'] = 'Apply filters';
$lang['admin']['filterreset'] = 'Reset filters';
$lang['admin']['filters'] = 'Filters';
$lang['admin']['showfilters'] = 'Edit filter';
$lang['admin']['clearcache_taskdescription'] = 'Executed daily, this task will clear cached files that are older than the age preset in the global preferences';
$lang['admin']['clearcache_taskname'] = 'Clear Cached Files';
$lang['admin']['info_autoclearcache'] = 'Specify an integer value. Enter 0 to disable automatic cache clearing';
$lang['admin']['autoclearcache'] = 'Automatically clear the cache every N days';
$lang['admin']['listtemplates_pagelimit'] = 'Number of rows per page when viewing templates';
$lang['admin']['liststylesheets_pagelimit'] = 'Number of rows per page when viewing stylesheets';
$lang['admin']['listgcbs_pagelimit'] = 'Number of rows per page when viewing Global Content Blocks';
$lang['admin']['insecure'] = 'Insecure (HTTP)';
$lang['admin']['secure'] = 'Secure (HTTPS)';
$lang['admin']['secure_page'] = 'Χρήση HTTPS για αυτή την σελίδα';
$lang['admin']['thumbnail_width'] = 'Thumbnail Width';
$lang['admin']['thumbnail_height'] = 'Thumbnail Height';
$lang['admin']['E_STRICT'] = 'Is E_STRICT disabled in error_reporting';
$lang['admin']['test_estrict_failed'] = 'E_STRICT is enabled in the error_reporting';
$lang['admin']['info_estrict_failed'] = 'Some libraries that CMSMS uses do not work well with E_STRICT.  Please disable this before continuing';
$lang['admin']['E_DEPRECATED'] = 'Is E_DEPRECATED disabled in error_reporting';
$lang['admin']['test_edeprecated_failed'] = 'E_DEPRECATED is enabled';
$lang['admin']['info_edeprecated_failed'] = 'If E_DEPRECATED is enabled in your error reporting users will see alot of warning messages that could effect the display and functionalty';
$lang['admin']['session_use_cookies'] = 'Sessions are allowed to use Cookies';
$lang['admin']['errorgettingcontent'] = 'Could not retrieve information for the specified content object';
$lang['admin']['errordeletingcontent'] = 'Error deleting content (either this page has children or is the default content)';
$lang['admin']['invalidemail'] = 'Η διεύθυνση email δεν είναι σωστή';
$lang['admin']['info_deletepages'] = 'Note: due to permission restrictions, some of the pages you selected for deletion may not be listed below';
$lang['admin']['info_pagealias'] = 'Specify a unique alias for this page.';
$lang['admin']['info_autoalias'] = 'If this field is empty, an alias will be created automatically.';
$lang['admin']['invalidparent'] = 'You must select a parent page (contact your administrator if you do not see this option).';
$lang['admin']['forgotpwprompt'] = 'Enter your admin username.  An email will then be sent to the email address associated with that username with new login information';
$lang['admin']['info_basic_attributes'] = 'This field allows you to specify which content properties that users without the "Manage All Content" permission are allowed to edit.';
$lang['admin']['basic_attributes'] = 'Basic Properties';
$lang['admin']['no_permission'] = 'You have not permission to perform that function.';
$lang['admin']['bulk_success'] = 'Bulk operation was successfully updated.';
$lang['admin']['no_bulk_performed'] = 'No bulk operation performed.';
$lang['admin']['info_preview_notice'] = 'Warning: This preview panel behaves much like a browser window allowing you to navigate away from the initially previewed page. However, if you do that, you may experience unexpected behaviour. If you navigate away from the initial display and return, you may not see the un-committed content until you make a change to the content in the main tab, and then reload this tab. When adding content, if you navigate away from this page, you will be unable to return, and must refresh this panel.';
$lang['admin']['sitedownexcludes'] = 'Αποκλεισμός αυτών των διευθύνσεων από μηνύματα Sitedown';
$lang['admin']['info_sitedownexcludes'] = 'Αυτή η παράμετρος επιτρέπει να συμπεριληφθεί μία λίστα χωρισμένη με κόμμα των διευθύνσεων IP ή δίκτυα που δεν πρέπει να υπόκεινται στον μηχανισμό sitedown . Αυτό επιτρέπει στους διαχειριστές να εργάζονται, ενώ οι επισκέπτες θα βλέπουν το μήνυμα sitedown Οι διευθύνσεις <br/> <br/> θα πρέπει να έχουν τις ακόλουθες μορφές.:<br/>
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
$lang['admin']['destinationnotfound'] = 'Η επιλεγμένη σελίδα δεν μπορεί να βρεθεί ή είναι ελαττωματική';
$lang['admin']['help_function_dump'] = '<h3>Τί κάνει αυτό;</h3>
  <p>Αυτό το tag μπορεί να χρησιμοποιηθεί για τη μεταφορά των περιεχομένων οποιασδήποτε μεταβλητής smarty σε ένα πιο αναγνώσιμο μορφότυπο. Αυτό είναι χρήσιμο για την αντιμετώπιση σφαλμάτων και την επεξεργασία προτύπων προκειμένου να γνωρίζετε το μορφότυπο και τον τύπο των διαθέσιμων δεδομένων.</p>
<h3>Πώς χρησιμοποιείται;</h3>
<p>Εισάγετε το tag στο πρότυπο ως εξής <code>{dump item=\'the_smarty_variable_to_dump\'}</code>.</p>
<h3>Ποιες παράμετροι απαιτούνται</h3>
<ul>
<li><strong>item (απαιτείται)</strong> - Η μεταβλητή smarty για τη μεταφορά των δεδομένων.</li>
<li>maxlevel - Ο μέγιστος αριθμός επιπέδων αναδρομής (εφαρμόζεται εφόσον παρέχεται αναδρομή.  Η προεπιλεγμένη τιμή για την παράμετρο αυτή είναι 3</li>
<li>nomethods - Skip output of methods from objects.</li>
<li>novars - Skip output of object members.</li>
<li>recurse - Recurse a maximum number of levels through the objects providing verbose output for each item until the maximum number of levels is reached.</li>
</ul>';
$lang['admin']['sqlerror'] = 'SQL error in %s';
$lang['admin']['image'] = 'Εικόνα';
$lang['admin']['thumbnail'] = 'Μικροφωτογραφία';
$lang['admin']['searchable'] = 'Μπορούν να πραγματοποιηθούν αναζητήσεις εντός του περιεχομένου αυτής της σελίδας';
$lang['admin']['help_function_content_image'] = '<h3>Tί κάνει αυτό;</h3>
<p>Αυτό το πρόσθετο (plugin) επιτρέπει στους σχεδιαστές προτύπων να ειδοποιούν τους χρήστες ώστε να επιλέγουν ένα αρχείο εικόνας όταν επεξεργάζονται το περιεχόμενο μιας σελίδας. Έχει την ίδια συμπεριφορά με ένα πρόσθετο περιεχομένου, για επιπλέον μπλοκ περιεχομένου.</p>
<h3>Πώς χρησιμοποιείται;</h3>
<p>Εισάγετε απλώς το tag στη σελίδα ροτύπου σας ως εξής: <code>{content_image block=\'image1\'}</code>.</p>
<h3>Ποιες παράμετροι απαιτούνται;</h3>
<ul>
  <li><strong>(απαιτείται)</strong></em> block - Το όνομα για αυτό το πρόσθετο μπλοκ περιεχομένου.
  <p>Παράδειγμα:</p>
  <pre>{content_image block=\'image1\'}</pre><br/>
  </li>

  <li><em>(προαιρετικά)</em> label - Μια ετικέτα ή μια ειδοποίηση για αυτό το μπλοκ περιεχομένου στη σελίδα επεξεργασία περιεχομένου.  Αν δεν οριστεί τότε θα χρησιμοποιηθεί το όνομα του μπλοκ.</li>
 
  <li><em>(προαιρετικά)</em> dir - Το όνομα καταλόγου (αντίστοιχο με τον κατάλογο αποστολών από τον οποίο γίνεται η επιλογή αρχείων εικόνας. Αν δεν οριστεί τότε θα χρησιμοποιηθεί ο κατάλογος αποστολών.
  <p>Παράδειγμα: χρησιμοποιήστε εικόνες από τον κατάλογο αποστολών/εικόνων.</p>
  <pre>{content_image block=\'image1\' dir=\'images\'}</pre><br/>
  </li>

  <li><em>(προαιρετικά)</em> class - Το όνομα κατηγορίας css που θα χρησιμοποιηθεί στο tag εικόνας στην προβολή που προορίζεται για απλούς χρήστες του ιστοτόπου.</li>

  <li><em>(προαιρετικά)</em> id - Το όνομα id που θα χρησιμοποιηθεί στο tag εικόνας στην προβολή που προορίζεται για απλούς χρήστες του ιστοτόπου.</li> 

  <li><em>(προαιρετικά)</em> name - Το όνομα του tag που θα χρησιμοποιηθεί στο tag εικόνας στην προβολή που προορίζεται για απλούς χρήστες του ιστοτόπου.</li> 

  <li><em>(προαιρετικά)</em> πλάτος - Το επιθυμητό πλάτος της εικόνας.</li>

  <li><em>(optional)</em> ύψος - Το επιθυμητό ύψος της εικόνας.</li>

  <li><em>(optional)</em> ενναλ. - Ενναλακτικό κείμενο αν η εικόνα δεν μπορεί να εντοπιστεί.</li>


</ul>';
$lang['admin']['error_udt_name_chars'] = 'Ένα έγκυρο όνομα UDT που αρχίζει με γράμμα ή κάτω παύλα και ακολουθούν γράμματα, αριθμοί ή κάτω παύλες ανεξαρτήτως αριθμού.';
$lang['admin']['errorupdatetemplateallpages'] = 'Πρότυπο όχι ενεργό';
$lang['admin']['hidefrommenu'] = 'Απόκρυψη από μενού';
$lang['admin']['settemplate'] = 'Ορισμός προτύπου';
$lang['admin']['text_settemplate'] = 'Θέση επιλεγμένων σελίδων σε άλλο πρότυπο';
$lang['admin']['cachable'] = 'Αποθηκεύσιμο στην μνήμη';
$lang['admin']['noncachable'] = 'Μη Αποθηκεύσιμο στην μνήμη';
$lang['admin']['copy_from'] = 'Αντιγραφή από';
$lang['admin']['copy_to'] = 'Αντιγραφή σε';
$lang['admin']['copycontent'] = 'Αντιγραφή στοιχείου Περιεχομένου';
$lang['admin']['md5_function'] = 'λειτουργία md5';
$lang['admin']['tempnam_function'] = 'λειτουργία tempnam';
$lang['admin']['register_globals'] = 'PHP register_globals';
$lang['admin']['output_buffering'] = 'PHP output_buffering';
$lang['admin']['disable_functions'] = 'disable_functions in PHP';
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
$lang['admin']['test_remote_url_failed'] = 'Ενδέχεται να μην είστε σε θέση να ανοίξετε ένα αρχείο σε έναν απομακρυσμένο διακομιστή web.';
$lang['admin']['test_allow_url_fopen_failed'] = 'When allow url fopen is disabled you will not be able to accessing URL object like file using the ftp or http protocol.';
$lang['admin']['connection_error'] = 'Outgoing http connections do not appear to work! There is a firewall or some ACL for external connections?. This will result in module manager, and potentially other functionality failing.';
$lang['admin']['remote_connection_timeout'] = 'Λήξη χρονικού ορίου σύνδεσης!';
$lang['admin']['search_string_find'] = 'Σύνδεση επιτυχής!';
$lang['admin']['connection_failed'] = 'Αποτυχία σύνδεσης!';
$lang['admin']['remote_response_ok'] = 'Απομακρυσμένη απάντηση: εντάξει!';
$lang['admin']['remote_response_404'] = 'Απομακρυσμένη απάντηση: δεν εντοπίστηκε!';
$lang['admin']['remote_response_error'] = 'Απομακρυσμένη απάντηση: σφάλμα!';
$lang['admin']['notifications_to_handle'] = 'Έχετε <b>%d</b> ατακτοποίητες ειδοποιήσεις';
$lang['admin']['notification_to_handle'] = 'Έχετε <b>%d</b> ατακτοποίητη ειδοποίηση';
$lang['admin']['notifications'] = 'Ειδοποιήσεις';
$lang['admin']['dashboard'] = 'Προβολή πίνακα ελέγχου';
$lang['admin']['ignorenotificationsfrommodules'] = 'Να αγνοούνται οι ειδοποιήσεις από αυτά τα δομοστοιχεία';
$lang['admin']['admin_enablenotifications'] = 'Επιτρέπεται στους χρήστες να δουν τις ειδοποιήσεις<br/><em>(οι ειδοποιήσεις θα εμφανιστούν σε όλες τις σελίδες διαχείρισης)</em>';
$lang['admin']['enablenotifications'] = 'Ενεργοποίηση ειδοποιήσεων χρήστη στην ενότητα διαχείριση';
$lang['admin']['test_check_open_basedir_failed'] = 'Open basedir restrictions are in effect. You may have difficulty with some addon functionality with this restriction';
$lang['admin']['config_writable'] = 'config.php writable. Είναι πιο ασφαλές αν αλλάξετε την άδεια για ανάγνωση μόνο';
$lang['admin']['caution'] = 'Προσοχή';
$lang['admin']['create_dir_and_file'] = 'Checking if the httpd process can create a file inside of a directory it created';
$lang['admin']['os_session_save_path'] = 'Κανένας έλεγχος λόγω διαδρομής OS';
$lang['admin']['unlimited'] = 'Απεριόριστα';
$lang['admin']['open_basedir'] = 'PHP Open Basedir';
$lang['admin']['open_basedir_active'] = 'No check because open basedir active';
$lang['admin']['invalid'] = 'Λανθασμένο';
$lang['admin']['checksum_passed'] = 'All checksums match those in the uploaded file';
$lang['admin']['error_retrieving_file_list'] = 'Error retrieving file list';
$lang['admin']['files_checksum_failed'] = 'Δεν ήταν δυνατό το άθροισμα ελέγχου των αρχείων';
$lang['admin']['failure'] = 'Αποτυχία';
$lang['admin']['help_function_process_pagedata'] = '<h3>Τί κάνει αυτό;</h3>
<p>Αυτό το πρόσθετο (plugin) θα επεξεργαστεί τα δεδομένα στο μπλοκ "δεδομένα σελίδας" των σελίδων περιεχομένου μέσω smarty.  Σας δίνει τη δυνατότητα να ορίσετε συγκεκριμένα δεδομένα σελίδας σε smarty χωρίς αλλαγή του προτύπου για κάθε σελίδα.</p>
<h3>Πώς χρησιμοποιείται;</h3>
<ol>
  <li>Εισάγετε ορισμένες τιμές smarty και άλλη λογική smarty στο πεδίο δεδομένα σελίδας ορισμένων σελίδων περιεχομένου σας.</li>
  <li>Εισάγετε την καρτέλα <code>{process_pagedata}</code> στο πάνω μέρος της σελίδας προτύπου σας.</li>
</ol>
<br/>
<h3>Ποιες παράμετροι απαιτούνται;</h3>
<p>Καμία αυτή τη φορά</p>';
$lang['admin']['page_metadata'] = 'Μεταδεδομένα Συγκεκριμένης Σελίδας';
$lang['admin']['pagedata_codeblock'] = 'Δεδομένα smarty ή λογική για τη συγκεκριμένη σελίδα';
$lang['admin']['error_uploadproblem'] = 'Παρουσιάστηκε σφάλμα κατά την αποστολή';
$lang['admin']['error_nofileuploaded'] = 'Δεν στάλθηκε κανένα αρχείο';
$lang['admin']['files_failed'] = 'Τα αρχεία δεν έκαναν έλεγχο md5sum';
$lang['admin']['files_not_found'] = 'Δεν βρέθηκαν αρχεία';
$lang['admin']['info_generate_cksum_file'] = 'H λειτουργία αυτή σας επιτρέπει να δημιουργήσετε ένα αρχείο αθροίσματος ελέγχου και να το αποθηκεύσετε στον τοπικό υπολογιστή σας για να γίνει αργότερα η επιβεβαίωση. Αυτό πρέπει να γίνει πριν την κύλιση της ιστοσελίδας ή/και μετά από τυχόν αναβαθμίσεις ή μεγάλες μετατροπές.';
$lang['admin']['info_validation'] = 'Η λειτουργία αυτή θα συγκρίνει τα αθροίσματα ελέγχου που εντοπίστηκαν στο αρχείο που στάλθηκε με τα αρχεία στην τρέχουσα εγκατάσταση. Μπορεί να βοηθήσει στον εντοπισμό προβλημάτων με τις αποστολές αρχείων ή ποσα αρχεία μετατράπηκαν σε περίπτωση που υπήρξε παράνομη πρόσβαση στο σύστημά σας. Ένα αρχείο αθροίσματος ελέγχου δημιουργείται για κάθε κυκλοφορία του CMS Made simple από την έκδοση 1.4.';
$lang['admin']['download_cksum_file'] = 'Λήψη αρχείου Αθροίσματος Ελέγχου';
$lang['admin']['perform_validation'] = 'Πραγματοποίηση Επιβεβαίωσης';
$lang['admin']['upload_cksum_file'] = 'Αποστολή αρχείου Αθροίσματος Ελέγχου';
$lang['admin']['checksumdescription'] = 'Επιβεβαίωση της ακεραιότητας των αρχείων CMS κάνοντας σύγκριση με γνωστά αθροίσματα ελέγχου';
$lang['admin']['system_verification'] = 'Επαλήθευση Συστήματος';
$lang['admin']['extra1'] = 'Επιπλέον Ιδιότητα Σελίδας 1';
$lang['admin']['extra2'] = 'Επιπλέον Ιδιότητα Σελίδας 2';
$lang['admin']['extra3'] = 'Επιπλέον Ιδιότητα Σελίδας 3';
$lang['admin']['start_upgrade_process'] = 'Έναρξη Διαδικασίας Αναβάθμισης';
$lang['admin']['warning_upgrade'] = '<em><strong>Ειδοποίηση:</strong></em> Το CMSMS απαιτεί αναβάθμιση.';
$lang['admin']['warning_upgrade_info1'] = 'Τώρα εκετελείτε έκδοση schema %s. και πρέπει να αναβαθμιστείτε στην έκδοση %s';
$lang['admin']['warning_upgrade_info2'] = 'Παρακαλούμε κάντε κλικ στον ακόλουθο σύνδεσμο: %s.';
$lang['admin']['warning_mail_settings'] = 'Δεν έχουν οριστεί οι παράμετροι των ρυθμίσεων mail σας.  Αυτό μπορεί να εμποδίσει την ικανότητα αποστολής μηνυμάτων email μέσω της ιστοσελίδας σας.  Πρέπει να πάτε στο <a href="moduleinterface.php?module=CMSMailer">Extensions >> CMSMailer</a> και να ορίσετε τις παραμέτρους των ρυθμίσεων με την βοήθεια πληροφοριών που σας παρέχει ο εξυπηρετητής σας.';
$lang['admin']['view_page'] = 'Προβολή αυτής της σελίδας σε νέο παράθυρο';
$lang['admin']['off'] = 'Off';
$lang['admin']['on'] = 'On';
$lang['admin']['invalid_test'] = 'Μη έγκυρη δοκιμαστική τιμή παραμέτρου!';
$lang['admin']['copy_paste_forum'] = 'Προβολή Κειμένου Αναφοράς <em>(κατάλληλο για αντιγραφή σε μηνύματα που εμφανίζονται σε forum)</em>';
$lang['admin']['permission_information'] = 'Στοιχεία άδειας';
$lang['admin']['server_os'] = 'Λειτουργικό σύστημα εξυπηρετητή';
$lang['admin']['server_api'] = 'Εξυπηρετητής API';
$lang['admin']['server_software'] = 'Εξυπηρετητής Λογισμικού Software';
$lang['admin']['server_information'] = 'Στοιχεία διακομιστή';
$lang['admin']['session_save_path'] = 'Διαδρομή αποθήκευσης συνόδου';
$lang['admin']['max_execution_time'] = 'Μέγιστος χρόνος εκτέλεσης';
$lang['admin']['gd_version'] = 'Έκδοση GD';
$lang['admin']['upload_max_filesize'] = 'Μέγιστο μέγεθος αποστολής';
$lang['admin']['post_max_size'] = 'Μέγιστο μέγεθος μηνύματος';
$lang['admin']['memory_limit'] = 'Πραγματικός περιορισμός μνήμης PHP';
$lang['admin']['server_db_type'] = 'Βάση δεδομένωνων διακομιστή';
$lang['admin']['server_db_version'] = 'Έκδοση βάσης δεδομένων διακομιστή';
$lang['admin']['phpversion'] = 'Τρέχουσα έκδοση PHP';
$lang['admin']['safe_mode'] = 'Λειτουργία ασφαλείας PHP';
$lang['admin']['php_information'] = 'Στοιχεία PHP';
$lang['admin']['cms_install_information'] = 'Πληροφορίες εγκατάστασης CMS';
$lang['admin']['cms_version'] = 'Έκδοση CMS';
$lang['admin']['installed_modules'] = 'Εγκατεστημένα δομοστοιχεία';
$lang['admin']['config_information'] = 'Πληροφορίες ρύθμισης παραμέτρων';
$lang['admin']['systeminfo_copy_paste'] = 'Παρακαλούμε κάντε αντιγραφή και επικόλληση του επιλεγμένου κειμένου στο μήνυμά σας που εμφανίζεται σε forum';
$lang['admin']['help_systeminformation'] = 'Οι πληροφορίες που εμφανίζονται παρακάτω έχουν συλλεχθεί από διάφορες τοποθεσίες και έχουν συνοψιστεί εδώ ώστε να μπορείτε να εντοπίσετε εύκολα ορισμένα στοιχεία που απαιτούνται όταν προσπαθείτε να διαγνώσετε ένα πρόβλημα ή όταν ζητάτε βοήθεια για την εγκατάσταση του CMS Made Simple.';
$lang['admin']['systeminfo'] = 'Πληροφορίες για το σύστημα';
$lang['admin']['systeminfodescription'] = 'Εμφανίζει διάφορες πληροφορίες για το σύστημά σας οι οποίες μπορεί να είναι χρήσιμες για τη διάγνωση προβλημάτων';
$lang['admin']['systemmaintenance'] = 'System Maintenance';
$lang['admin']['systemmaintenancedescription'] = 'Various functions for maintaining the health of your system. You can also browser the changelog of CMSMadeSimple';
$lang['admin']['sysmaintab_database'] = 'Database';
$lang['admin']['sysmaintab_changelog'] = 'Changelog';
$lang['admin']['sysmaintab_content'] = 'Cache and content';
$lang['admin']['sysmain_content_status'] = 'Content status';
$lang['admin']['sysmain_cache_status'] = 'Cache status';
$lang['admin']['sysmain_database_status'] = 'Database status';
$lang['admin']['sysmain_updatehierarchy'] = 'Update page hierarchy positions';
$lang['admin']['sysmain_confirmupdatehierarchy'] = 'Are you sure you want to update page hierarchy positions?';
$lang['admin']['sysmain_update'] = 'Update';
$lang['admin']['sysmain_hierarchyupdated'] = 'Page hierarchy positions updated';
$lang['admin']['sysmain_repair'] = 'Repair';
$lang['admin']['sysmain_repairtables'] = 'Repair tables';
$lang['admin']['sysmain_tablesrepaired'] = 'Tables repaired';
$lang['admin']['sysmain_optimizetables'] = 'Optimize tables';
$lang['admin']['sysmain_tablesoptimized'] = 'Tables optimized';
$lang['admin']['sysmain_optimize'] = 'Optimize';
$lang['admin']['sysmain_confirmclearcache'] = 'Are you sure you want to clear the cache?';
$lang['admin']['sysmain_nocontenterrors'] = 'No content errors detected';
$lang['admin']['sysmain_pagesmissinalias'] = 'pages missing aliases';
$lang['admin']['sysmain_confirmfixaliases'] = 'Are you sure you want to add aliases to pages missing?';
$lang['admin']['sysmain_fixaliases'] = 'Add aliases where missed';
$lang['admin']['sysmain_aliasesfixed'] = 'aliases fixed';
$lang['admin']['sysmain_pagesinvalidtypes'] = 'pages with invalid content type';
$lang['admin']['sysmain_confirmfixtypes'] = 'Are you sure you want to convert all with invalid content into standard content pages?';
$lang['admin']['sysmain_fixtypes'] = 'Convert into standard content pages';
$lang['admin']['sysmain_typesfixed'] = 'page content types fixed';
$lang['admin']['welcome_user'] = 'Καλωσήλθατε';
$lang['admin']['itsbeensincelogin'] = 'Ήταν %s από την τελευταία σας είσοδο';
$lang['admin']['days'] = 'ημέρες';
$lang['admin']['day'] = 'ημέρα';
$lang['admin']['hours'] = 'ώρες';
$lang['admin']['hour'] = 'ώρα';
$lang['admin']['minutes'] = 'λεπτά';
$lang['admin']['minute'] = 'λεπτό';
$lang['admin']['help_css_max_age'] = 'Η παράμετρος αυτή πρέπει να οριστεί σε σχετικά υψηλή τιμή για ιστοσελίδες στατιστικής και πρέπει να οριστεί σε 0 για ανάπτυξη ιστοσελίδων';
$lang['admin']['css_max_age'] = 'Μέγιστος χρόνος (δευτερόλεπτα) κατά τον οποίο τα stylesheets μπορούν να αποθηκευτούν προσωρινά στο πρόγραμμα πλοήγησης στο Διαδίκτυο';
$lang['admin']['error'] = 'Σφάλμα';
$lang['admin']['new_version_available'] = '<em>Notice:</em> Είναι διαθέσιμη μια νέα έκδοση του CMS Made Simple. Παρακαλούμε ειδοποιήστε τον διαχειριστή σας.';
$lang['admin']['master_admintheme'] = 'Default Administration Theme (for the login page and new user accounts)';
$lang['admin']['contenttype_separator'] = 'Διαχωριστής';
$lang['admin']['contenttype_sectionheader'] = 'Επικεφαλίδα ενότητας';
$lang['admin']['contenttype_content'] = 'Περιεχόμενο';
$lang['admin']['contenttype_pagelink'] = 'Εσωτερικός σύνδεσμος σελίδας';
$lang['admin']['nogcbwysiwyg'] = 'Disallow WYSIWYG editors on global content blocks';
$lang['admin']['destination_page'] = 'Σελίδα προορισμού';
$lang['admin']['additional_params'] = 'Επιπλέον παράμετροι';
$lang['admin']['help_function_current_date'] = '	<h3>Τί κάνει αυτό;</h3>
	<p>Εκτυπώνει την τρέχουσα ημερομηνία και ώρα. Αν δεν δοθεί κανένα μορφότυπο τότε θα γίνει προεπιλογή ενός μορφότυπου παρόμοιου με το \'Ιαν 01, 2004\'.</p>
	<h3>Πώς χρησιμοποιείται;</h3>
	<p>Εισάγετε απλώς τo tag στο πρότυπο/σελίδα ως εξής: <code>{current_date format="%A %d-%b-%y %T %Z"}</code></p>
	<h3>Ποιες παράμετροι απαιτούνται;</h3>
	<ul>
		<li><em>(optional)</em>μορφότυπο - Μορφότυπο Ημερομηνίας/Ώρας χρησιμοποιώντας παραμέτρους της συνάρτησης strftime του php.  Δείτε <a href="http://php.net/strftime" target="_blank">here</a> για μια λίστα παραμέτρων και για πληροφορίες.</li>
		<li><em>(optional)</em>ucword - Αν αληθεύει μετατρέψτε ξανά σε κεφαλαίο τον πρώτο χαρακτήρα κάθε λέξης.</li>
	</ul>
	</p>';
$lang['admin']['help_function_valid_xhtml'] = '<h3>Τί κάνει αυτό;</h3>
<p>Returns a link to the w3c HTML validator.</p>
<h3>Πώς χρησιμοποιείται;</h3>
<p>Εισάγετε απλώς τo tag στο πρότυπο/σελίδα σας ως εξής: <code>{valid_xhtml}</code></p>
<h3>Ποιες παράμετροι απαιτούνται;</h3>
<p>
    <ul>
	<li><em>(optional)</em> url         (string)     - Χρησιμοποιείται το URL για επιβεβαίωση, αν δεν δίνεται κανένα τότε χρησιμοποιείται το http://validator.w3.org/check/referer.</li>
	<li><em>(optional)</em> class       (στοιχειοσειρά)     - Αν οριστεί, τότε θα χρησιμοποιηθεί ως ιδιότητα κατηγορίας για το στοιχείο του συνδέσμου (a) </li>
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
$lang['admin']['help_function_title'] = '	<h3>Τί κάνει αυτό;</h3>
	<p>Εκτυπώνει τον τίτλο της σελίδας.</p>
	<h3>Πώς χρησιμοποιείται;</h3>
	<p>Εισάγετε απλώς τo tag στο πρότυπο/σελίδα σας ως εξής: <code>{title}</code></p>
	<h3>Ποιες παράμετροι απαιτούνται;</h3>
	<p><em>(προαιρετικό)</em> ορισμός (στοιχειοσειρά) - Ορίστε τα αποτελέσματα σε μια smarty τιμή με αυτό το όνομα.</p>';
$lang['admin']['help_function_stylesheet'] = '	<h3>Τί κάνει αυτό;</h3>
	<p>Λαμβάνει πληροφορίες για τα stylesheets από το σύστημα.  Κατά προεπιλογή, εντοπίζει όλα τα stylesheets που έχουν προσαρτηθεί στο τρέχον πρότυπο.</p>
	<h3>Πώς χρησιμοποιείται;</h3>
	<p>Εισάγετε απλώς τo tag στην επικεφαλίδα της ενότητας του προτύπου/σελίδας σας ως εξής: <code>{stylesheet}</code></p>
	<h3>Ποιες παράμετροι απαιτούνται;</h3>
	<ul>
		<li><em>(προαιρετικό)</em>name - Αντί να λάβει υπόψη όλα τα stylesheets για τη συγκεκριμένη σελίδα, λαμβάνεται υπόψη μόνο ένα προκαθορισμένο είτε έχει προσαρτηθεί στο τρέχον πρότυπο είτε όχι.</li>
		<li><em>(προαιρετικό)</em>media - Αν οριστεί ένα όνομα, τότε σας δίνεται η δυνατότητα να ορίσετε ένα μέσο διαφορετικού τύπου για το συγκεκριμένο stylesheet.</li>
	</ul>
	</p>';
$lang['admin']['help_function_sitename'] = '        <h3>Τί κάνει αυτό;</h3>
        <p>Εμφανίζει το όνομα της ιστοσελίδας. Ορίζεται κατά την εγκατάσταση και μπορεί να μετατραπεί στην ενότητα Γενικές Ρυθμίσεις του ελέγχου διαχειριστή.</p>
        <h3>Πώς χρησιμοποιείται;</h3>
        <p>Εισάγετε απλώς το tag στο πρότυπο/σελίδα ως εξής: <code>{sitename}</code></p>
        <h3>Ποιες παράμετροι απαιτούνται;</h3>
	<p><em>(προαιρετικά)</em> ορισμός (στοιχειοσειρά) - Ορισμός των αποτελεσμάτων σε μια τιμή smarty με το όνομα αυτό.</p>';
$lang['admin']['help_function_search'] = '	<h3>Τί κάνει αυτό;</h3>
	<p>Στην πραγματικότητα είναι ένα wrapper tag για το <a href="listmodules.php?action=showmodulehelp&module=Search">Search module</a> ώστε να γίνει ευκολότερη η σύνταξη ενός tag. 
	Αντί να χρησιμοποιήσετε <code>{cms_module module=\'Search\'}</code> τώρα μπορείτε απλώς να χρησιμοποιήσετε <code>{search}</code> για να εισαγάγετε το δομοστοιχείο σε ένα πρότυπο.
                </p>
	<h3>Πώς χρησιμοποιείται;</h3>
	<p>Εισάγετε απλώς <code>{search}</code> σε ένα πρότυπο όπου θέλετε να εμφανιστεί η αναζήτηση πλαισίου εισαγωγής δεδομένων. Για βοήθεια σχετικά με το δομοστοιχείο Αναζήτηση παρακαλούμε ανατρέξτε στο <a href="listmodules.php?action=showmodulehelp&module=Search">Search module help</a>.';
$lang['admin']['help_function_root_url'] = '	<h3>Τί  κάνει αυτό;</h3>
	<p>Εκτυπώνει την κεντρική τοποθεσία url για την ιστοσελίδα.</p>
	<h3>Πώς χρησιμοποιείται;</h3>
	<p>Εισάγετε απλώς το tag στο πρότυπο/σελίδα σας ως εξής: <code>{root_url}</code></p>
	<h3>Ποιες παράμετροι απαιτούνται;</h3>
	<p>Καμία προς το παρόν.</p>';
$lang['admin']['help_function_repeat'] = '  <h3>Tί κάνει αυτό;</h3>
  <p>Επαναλαμβάνει μια συγκεκριμένη σειρά χαρακτήρων συγκεκριμένες φορές</p>
  <h3>Πώς χρησιμοποιείται;</h3>
  <p>Εισάγετε ένα tag όμοιο με το παρακάτω στο πρότυπο/σελίδα σας ως εξής: <code>{repeat string=\'repeat this \' times=\'3\'}</code>
  <h3>Ποιες παράμετροι απαιτούνται;</h3>
  <ul>
  <li>string=\'text\' - Η στοιχειοσειρά που θα επαναληφθεί</li>
  <li>times=\'num\' - Ο αριθμός επαναλήψεων.</li>
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
$lang['admin']['help_function_print'] = '	<h3>Τί κάνει αυτό;</h3>
	<p>Στην πραγματικότητα πρόκειται για ένα wrapper tag για το <a href="listmodules.php?action=showmodulehelp&module=Printing">δομοστοιχείο εκτύπωσης</a> ώστε να γίνει ευκολότερη η σύνταξη του tag. 
	Αντί να χρησιμοποιήσετε το <code>{cms_module module=\'Printing\'}</code> μπορείτε απλώς να χρησιμοποιήσετε το <code>{print}</code> για να εισάγετε το δομοστοιχείο σε σελίδες και σε πρότυπα.
	</p>
	<h3>Πώς χρησιμοποιείται;</h3>
	<p>Τοποθετήστε απλώς <code>{print}</code> σε μια σελίδα ή σε ένα πρότυπο. Για βοήθεια σχετικά με το δομοστοιχείο εκτύπωσης, τις παραμέτρους που απαιτούνται κλπ παρακαλούμε ανατρέξτε στη βοήθεια <a href="listmodules.php?action=showmodulehelp&module=Printing">δομοστοιχείο εκτύπωσης</a>.';
$lang['admin']['login_info_title'] = 'Πληροφορίες';
$lang['admin']['login_info'] = 'Για τη σωστή λειτουργία του πίνακα ελέγχου Διαχ';
$lang['admin']['login_info_params'] = '<ol> 
  <li>Πρέπει να ενεργοποιηθούν τα cookies στο πρόγραμμα πλοήγησής σας στο Διαδίκτυο</li> 
  <li>Πρέπει να ενεργοποιηθεί το javascript στο πρόγραμμα πλοήγησής σας στο Διαδίκτυο</li> 
  <li>Τα αναδυόμενα παράθυρα πρέπει να επιτρέπονται για τις ακόλουθες διευθύνσεις:</li> 
</ol>';
$lang['admin']['help_function_news'] = '	<h3>Tί κάνει αυτό;</h3>
	<p>Στην πραγματικότητα είναι ένα wrapper tag για το <a href="listmodules.php?action=showmodulehelp&module=News">δομοστοιχεία Νέα</a> ώστε να γίνει ευκολότερη η σύνταξη tag. 
	Αντί να χρησιμοποιήσετε <code>{cms_module module=\'News\'}</code> τώρα μπορείτε απλώς να χρησιμοποιήσετε <code>{news}</code> για να εισαγάγετε το δομοστοιχείο σε σελίδες και πρότυπα.
	</p>
	<h3>Πώς  χρησιμοποιείται;</h3>
	<p>Τοποθετήστε απλώς <code>{news}</code> σε μια σελίδα ή σε ένα πρότυπο. Για βοήθεια σχετικά με το δομοστοιχείο Νέα, τις παραμέτρους που απαιτούνται κ.λ.π παρακαλούμε ανατρέξτε στη <a href="listmodules.php?action=showmodulehelp&module=News">βοήθεια για το δομοστοιχείο Νέα.</a>.';
$lang['admin']['help_function_modified_date'] = '        <h3>Τί κάνει αυτό;</h3>
        <p>Εκτυπώνει την ημερομηνία και την ώρα της τελευταίας τροποποίησης της σελίδας.  Αν δεν έχει δοθεί κανένα μορφότυπο τότε θα προεπιλεγεί σε ένα μορφότυπο όμοιο με \'Ιαν 01, 2004\'.</p>
        <h3>Πώς  χρησιμοποιείται;</h3>
        <p>Εισάγετε απλώς το tag στο πρότυπο/σελίδα σας ως εξής: <code>{modified_date format="%A %d-%b-%y %T %Z"}</code></p>
        <h3>Ποιες παράμετροι απαιτούνται;</h3>
        <ul>
                <li><em>(optional)</em>μορφότυπο - Μορφότυπο Ημερομηνία/Ώρα χρησιμοποιώντας παραμέτρους από τη λειτουργία strftime του php.  Δείτε <a href="http://php.net/strftime" target="_blank">εδώ</a> για μια λίστα παραμέτρων και πληροφορίες.</li>
        </ul>';
$lang['admin']['help_function_metadata'] = '	<h3>Τί κάνει αυτό;</h3>
	<p>Εμφανίζει τα μεταδεδομένα γι\' αυτήν τη σελίδα. Θα εμφανιστούν τόσο τα γενικά δεδομένα από τη σελίδα γενικών ρυθμίσεων όσο και τα μεταδεδομένα για κάθε σελίδα.</p>
	<h3>Πώς χρησιμοποιείται;</h3>
	<p>Εισάγετε απλώς το tag στο  πρότυπο σας ως εξής: <code>{metadata}</code></p>
	<h3>Ποιες παράμετροι απαιτούνται;</h3>
	<ul>
		<li><em>(προαιρετικά)</em>προβολήβάσης (true/false) - Εφόσον οριστεί σε ψευδή, τότε το tag βάσης δεν θα σταλεί στο πρόγραμμα πλοήγησης στο Διαδίκτυο.  Defaults to true if use_hierarchy is set to true in config.php.</li>
	</ul>';
$lang['admin']['help_function_menu_text'] = '	<h3>Τί κάνει αυτό;</h3>
	<p>Εκτυπώνει το κείμενο του μενού της σελίδας.</p>
	<h3>Πώς χρησιμοποιείται;</h3>
	<p>Εισάγετε απλώς το tag στο πρότυπο/σελίδα σας ως εξής: <code>{menu_text}</code></p>
	<h3>Ποιες παράμετροι απαιτούνται;</h3>
	<p>Καμία αυτή τη φορά.</p>';
$lang['admin']['help_function_menu'] = '	<h3>Τί κάνει αυτό;</h3>
	<p>Στην πραγματικότητα είναι απλώς ένα wrapper tag για το <a href="listmodules.php?action=showmodulehelp&module=MenuManager">δομοστοιχείο Διαχειριστής Μενού</a> ώστε να γίνει ευκολότερη η σύνταξη του tag. 
	Αντί να χρησιμοποιήσετε <code>{cms_module module=\'MenuManager\'}</code> μπορείτε απλώς να χρησιμοποιήσετε <code>{menu}</code> για να εισαγάγετε το δομοστοιχείο σε σελίδες και πρότυπα.
	</p>
	<h3>Πώς χρησιμοποιείται;</h3>
	<p>Τοποθετήστε απλώς <code>{menu}</code> σε μια σελίδα ή σε ένα πρότυπο. Για βοήθεια σχετικά με το δομοστοιχείο Δαιχειριστής Μενού, τις παραμέτρους που απαιτούνται κ.λ.π παρακαλούμε ανατρέξτε στη <a href="listmodules.php?action=showmodulehelp&module=MenuManager">βοήθεια για το δομοστοιχείο Διαχειριστής Μενού.</a>.';
$lang['admin']['help_function_last_modified_by'] = '        <h3>Τί κάνει αυτό;</h3>
        <p>Εκτυπώνει το τελευταίο άτομο που επεξεργάστηκε αυτήν τη σελίδα.  Αν έχει δοθεί κανένα μορφότυπο τότε θα προεπιλεγεί ένας αριθμός ID του χρήστη.</p>
        <h3>Πώς χρησιμοποιείται;</h3>
        <p>Εισάγετε απλώς το tag στο πρότυπο/σελίδα σας ως εξής: <code>{last_modified_by format="fullname"}</code></p>
        <h3>Ποιες παράμετροι απαιτούνται;</h3>
        <ul>
                <li><em>(προαιρετικάl)</em>format - id, όνομαχρήστη, πλήρεςόνομα</li>
        </ul>';
$lang['admin']['help_function_image'] = '  <h3>Τί κάνει αυτό;</h3>
  <p>Δημιουργεί ένα tag εικόνας σαν μια εικόνα που αποθηκεύεται στον κατάλογο εικόνων σας</p>
  <h3>Πώς χρησιμοποιείται;</h3>
  <p>Εισάγετε απλώς το tag στο πρότυπο/σελίδα σας ως εξής: <code>{image src="something.jpg"}</code></p>
  <h3>Ποιες παράμετροι απαιτούνται;</h3>
  <ul>
     <li><em>(απαιτείται)</em>  <tt>src</tt> - Όνομα αρχείου εικόνας που περιλαμβάνεται στον κατάλογο εικόνων σας.</li>
     <li><em>(προαιρετικά)</em>  <tt>width</tt> - Πλάτος της εικόνας εντός της σελίδας. Προεπιλέγει το πραγματικό μέγεθος.</li>
     <li><em>(προαιρετικά)</em>  <tt>height</tt> - Ύψος της εικόνας εντός της σελίδας. Προεπιλέγει το πραγματικό μέγεθος.</li>
     <li><em>(προαιρετικά)</em>  <tt>alt</tt> - Εναλ κείμενο για την εικόνα -- χρειάζεται για συμφωνία με xhtml. Προεπιλέγει το όνομααρχείου.</li>
     <li><em>(προαιρετικό)</em>  <tt>class</tt> - κατηγορία CSS για την εικόνα.</li>
     <li><em>(προαιρετικά)</em>  <tt>title</tt> - Το ποντίκι πάνω στο κείμενο για την εικόνα. Προεπιλέγει Εναλλ κείμενο.</li>
     <li><em>(προαιρετικά)</em>  <tt>addtext</tt> - Πρόσθετο κείμενο που θα τοποθετηθεί στο tag</li>
  </ul>';
$lang['admin']['help_function_html_blob'] = '	<h3>Τί ακριβώς κάνει;</h3>
	<p>Δείτε τη βοήθεια σχετικά με το global_content για περιγραφή.</p>';
$lang['admin']['help_function_google_search'] = '	<h3>Τί κάνει αυτό;</h3>
	<p>Αναζητά την ιστοσελίδα σας χρησιμοποιώντας τη μηχανή αναζήτησης της Google.</p>
	<h3>Πώς χρησιμοποιείται;</h3>
	<p>Εισάγετε απλώς το tag στο πρότυπο/σελίδα σας ως εξής: <code>{google_search}</code><br>
	<br>
	Σημείωση: Για να λειτουργήσει η ιστοσελίδα σας πρέπει να είναι καταχωρισμένη στο ευρετήριο της Google. Μπορείτε να υποβάλλετε την ιστοσελίδα σας στην google <a href="http://www.google.com/addurl.html">εδώ</a>.</p>
	<h3>Τί γίνεται αν θέλω να αλλάξω την εμφάνιση του πλαισίουκειμένου ή του πλήκτρου;</h3>
	<p>Η εμφάνιση του πλαισίουκειμένου και του πλήκτρου μπορεί να αλλάξει μέσω css. Tο πλαίσιοκειμένου αποκτά id αναζήτησηκειμένου και το πλήκτρο αποκτά id αναζήτησηπλήκτρου.</p>

	<h3>Ποιες παράμετροι απαιτούνται;</h3>
	<ul>
		<li><em>(προαιρετική)</em> τομέας - Αυτό αναφέρει στην google το όνομα της ιστοσελίδας που πρέπει να αναζητήσει. Αυτή η περιγραφή προσπαθεί να το καθορίσει αυτόματα.</li>
		<li><em>(προαιρετικά)</em> πλήκτροΚείμενο - Το κείμενο που θέλετε να εμφανιστεί στο πλήκτρο αναζήτησης. Η προεπιλεγμένη ρύθμιση είναι "Search Site".</li>
	</ul>
	</p>';
$lang['admin']['help_function_global_content'] = '	<h3>Τί κάνει αυτό;</h3>
	<p>Εισάγει ένα γενικό μπλοκ περιεχομένου στο πρότυπο ή στη σελίδα σας.</p>
	<h3>Πώς χρησιμοποιείται;</h3>
	<p>Εισάγετε απλώς το tag στο πρότυπο/σελίδα σας ως εξής: <code>{global_content name=\'myblob\'}</code>, όπου το όνομα είναι το όνομα που δόθηκε στο μπλοκ όταν δημιουργήθηκε.</p>
	<h3>Ποιες παράμετροι απαιτούνται;</h3>
	<ul>
  	  <li>όνομα - Θα εμφανιστεί το όνομα του γενικού μπλοκ περιεχομένου. </li>
          <li><em>(προαιρετικά)</em> assign - The name of a smarty variable that the global content block should be assigned to.</li>
	</ul>';
$lang['admin']['help_function_get_template_vars'] = '	<h3>Τί κάνει αυτό;</h3>
	<p>Μεταφέρει όλες τις γνωστές μεταβλητές smarty στη σελίδα σας</p>
	<h3>Πώς χρησιμοποιείται;</h3>
	<p>Εισάγετε απλώς το tag στο πρότυπο/σελίδα σας ως εξής: <code>{get_template_vars}</code></p>
	<h3>Ποιες παράμετροι απαιτούνται;</h3>
											  <p>Καμία αυτή τη φορά</p>';
$lang['admin']['help_function_uploads_url'] = '	<h3>What does this do?</h3>
	<p>Prints the uploads url location for the site.</p>
	<h3>How do I use it?</h3>
	<p>Just insert the tag into your template/page like: <code>{uploads_url}</code></p>
	<h3>What parameters does it take?</h3>
	<p><em>(optional)</em> assign (string) - Assign the results to a smarty variable with that name.</p>';
$lang['admin']['help_function_embed'] = '	<h3>Tί κάνει αυτό;</h3>
	<p>Δίνει τη δυνατότητα σε οποιαδήποτε άλλη εφαρμογή να συμπεριληφθεί (ως ένθετη) στο CMS. Η πιο συνηθισμένη χρήση θα μπορούσε να είναι ένα φόρουμ. 
	Η εφαρμογή αυτή χρησιμοποιεί IFRAMES ώστε τα προηγούμενα προγράμματα πλοήγησης στο Διαδίκτυο να παρουσιάζουν προβλήματα. Λυπούμαστε αλλά αυτός είναι ο μόνος γνωστός τρόπος να λειτουργήσει χωρίς να τροποποιηθεί η ένθετη εφαρμογή.</p>
	<h3>Πώς  χρησιμοποιείται;</h3>
        <ul>
        <li>α) Προσθέστε <code>{embed header=true}</code> στην κυρίως ενότητα της σελίδας προτύπου σας ή στην ενότητα μεταδεδομένων στην καρτέλα επιλογών της σελίδας περιεχομένου.  Με τον τρόπο αυτό θα διασφαλιστεί ότι θα συμπεριληφθεί ηη απαιτούμενη javascript.   Αν εισάγετε αυτό το tag στην ενότητα μεταδεδομένων στην καρτέλα επιλογών της σελίδας περιεχομένων τότε πρέπει να διασφαλίσετε ότι το <code>{metadata}</code> είναι στη σελίδα προτύπου σας.</li>
        <li>β) Προσθέστε <code>{embed url="http://www.google.com"}</code> στη σελίδα περιεχομένου σας ή στο σώμα της σελίδας προτύπου σας.</li>
        </ul>
        <br/>
        <h4>Παράδειγμα για να μεγενθύνετε το iframe</h4>
	<p>Προσθέστε τα παρακάτω στο φύλλο στυλ σας:</p>
        <pre>#myframe { height: 600px; }</pre>
        <br/>
        <h3>Ποιες παράμετροι απαιτούνται;</h3>
        <ul>
            <li><em>(απαιτείται)</em>url - the url to be included 
            <li><em>(required)</em>header=true - this will generate the header code for good resizing of the IFRAME.</li>
            <li>(optional)name - an optional name to use for the iframe (instead of myframe).<p>If this option is used, it must be used identically in both calls, i.e: {embed header=true name=foo} and {embed name=foo url=http://www.google.com} calls.</p>
        </ul>';
$lang['admin']['help_function_description'] = '	<h3>Τί κάνει αυτό;</h3>
	<p>Εκτυπώνει την περιγραφή (ιδιότητα τίτλου) της σελίδας.</p>
	<h3>Πώς χρησιμοποιείται;</h3>
	<p>Εισάγετε απλώς το tag στο πρότυπο/σελίδα σας ως εξής: <code>{description}</code></p>
	<h3>Ποιες παράμετροι απαιτούνται;</h3>
	<p>Καμία αυτή τη φορά.</p>';
$lang['admin']['help_function_created_date'] = '        <h3>Τί κάνει αυτό;</h3>
        <p>Εκτυπώνει την ημερομηνία και την ώρα κατά την οποία δημιουργήθηκε η σελίδα. Αν δεν έχει δοθεί μρφότυπο, τότε θα προεπιλεγεί ένα μορφότυπο όμοιο με \'Ιαν 01, 2004\'.</p>
        <h3>Πώς χρησιμοποιείται;</h3>
        <p>Εισάγετε απλώς το tag στο πρότυπο/σελίδα σας ως εξής: <code>{created_date format="%A %d-%b-%y %T %Z"}</code></p>
        <h3>Ποιες παράμετροι απαιτούνται;</h3>
        <ul>
                <li><em>(προαιρετικά)</em>μορφότυπο - Το μορφότυπο Ημερομηνία/Ώρα χρησιμοποιεί παραμέτρους από τη λειτουργία strftime του php. Δείτε <a href="http://php.net/strftime" target="_blank">εδώ</a> για τη λίστα παραμέτρων και πληροφορίες.</li>
        </ul>';
$lang['admin']['help_function_content'] = '	<h3>Τί κάνει αυτό;</h3>
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
$lang['admin']['help_function_cms_versionname'] = '	<h3>Τί κάνει αυτό;</h3>
	<p>Αυτό το tag χρησιμοποιείται για την εισαγωγή του τρέχοντος ονόματος της έκδοσης του CMS στο πρότυπο ή στη σελίδα σας.  Δεν εμφανίζονται επιπλέον στοιχεία παρά μόνο το όνομα της έκδοσης.</p>
	<h3>Πώς  χρησιμοποιείται;</h3>
	<p>Αυτό είναι μόνο ένα βασικό πρόσθετο (plugin) tag. Μπορείτε να το εισάγετε στο πρότυπο ή στη σελίδα σας ως εξής: <code>{cms_versionname}</code>
	<h3>Ποιες παράμετροι απαιτούνται;</h3>
	<p>Δεν απαιτούνται παράμετροι.</p>';
$lang['admin']['help_function_cms_version'] = '	<h3>Τί κάνει αυτό;</h3>
	<p>Αυτό το tag χρησιμοποιείται για να εισάγετε τον αριθμό της τρέχουσας έκδοσηs του CMS στο πρότυπο ή στηη σελίδα σας.  Δεν εμφανίζονται επιπλέον στοιχεία παρά μόνο ο αριθμός της έκδοσης.</p>
	<h3>Πώς  χρησιμοποιείται;</h3>
	<p>Αυτό είναι μόνο ένα βασικό πρόσθετο (plugin) tag. Θα το καταχωρίσετε στο πρότυπο ή στη σελίδα σας ως εξής: <code>{cms_version}</code>
	<h3>Ποιες παράμετροι απαιτούνται;</h3>
	<p>Δεν απαιτούνται παράμετροι.</p>';
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
$lang['admin']['about_function_cms_module'] = '	<p>Συγγραφέας: Ted Kulp<tedkulp@users.sf.net></p>
	<p>Έκδοση: 1.0</p>
	<p>
	Αλλαγή Ιστορικού:<br/>
	Καμία
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
<p>Απλά  εισάγετε αυτό το tag στη σελίδα ή το πρότυπό σας: <code>{redirect_url to=\'www.cmsmadesimple.org\'}</code></p>';
$lang['admin']['help_function_redirect_page'] = '<h3>Τί κάνει αυτό;</h3>
 <p>Αυτό το plugin καθιστά δυνατή την εύκολη ανακατεύθυνση σε μία άλλη σελίδα. Είναι ιδιαίτερα βολικό στα πλαίσια μιας υποθετικής ροής προγράμματος που αφορά τα smarty (για παράδειγμα, ανακατεύθυνση προς μία σελίδα σύνδεσης αν διαπιστωθεί ότι ο χρήστης δεν είναι συνδεδεμένος.)</p>
<h3>Πώς χρησιμοποιείται;</h3>
<p>Απλά  εισάγετε αυτό το tag στη σελίδα ή το πρότυπό σας: <code>{redirect_page page=\'some-page-alias\'}</code></p>';
$lang['admin']['help_function_cms_jquery'] = '<h3>What does this do?</h3>
 <p>This plugin allows you output the javascript libraries and plugins used from the admin.</p>
<h3>How do I use it?</h3>
<p>Simply insert this tag into your page or template: <code>{cms_jquery}</code></p>

<h3>Sample</h3>
<pre><code>{cms_jquery cdn=\'true\' exclude=\'jquery.ui.nestedSortable-1.3.4.js\' append=\'uploads/NCleanBlue/js/ie6fix.js\'}</code></pre>
<h4><em>Outputs</em></h4>
<pre><code><script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.16/jquery-ui.min.js"></script>
<script type="text/javascript" src="http://localhost/1.10.x/lib/jquery/js/jquery.json-2.2.js"></script>
<script type="text/javascript" src="uploads/NCleanBlue/js/ie6fix.js"></script>
</code></pre>

<h3><em>Included Defaults</em></h3>
<ul>
	<li><tt>jQuery</tt><em>(1.6.2)</em> - jquery-1.7.1.min.js</li>
	<li><tt>jQuery UI</tt><em>(1.8.14)</em> - jquery-ui-1.8.16.custom.min.js</li>
	<li><tt>nestedSortable</tt>(1.3.4) - jquery/js/jquery.ui.nestedSortable-1.3.4.js</li>
	<li><tt>jQuery json</tt><em>(2.2)</em> - jquery/js/jquery.json-2.2.js</li>
</ul>
    
<h3>What parameters does it take?</h3>
<ul>
	<li><em>(optional) </em><tt>exclude</tt> - use comma seperated value(CSV) list of scripts you would like to exclude. <code>\'jquery.ui.nestedSortable.js,jquery.json-2.2.js\'</code></li>
	<li><em>(optional) </em><tt>append</tt> - use comma seperated value(CSV) list of script paths you would like to append. <code>\'/uploade/jquery.ui.nestedSortable.js,http://code.jquery.com/jquery-1.7.1.min.js\'</code></li>
	<li><em>(optional) </em><tt>cdn</tt> - cdn=\'true\' will insert jQuery and jQueryUI Frameworks using Google\'s Content Delivery Netwok. Default is false.</li>
	<li><em>(optional) </em><tt>ssl</tt> - use to use the ssl_url as the base path.</li>
	<li><em>(optional) </em><tt>custom_root</tt> - use to set any base path wished.<code>custom_root=\'http://test.domain.com/\'</code> <br/>NOTE: overwrites ssl option and works with the cdn option</li>
	<li><em>(optional)</em> <tt>assign</tt> - Assign the results to the named smarty variable.</li>
	</ul>

';
$lang['admin']['of'] = 'από';
$lang['admin']['first'] = 'Αρχή ';
$lang['admin']['last'] = 'Τέλος';
$lang['admin']['adminspecialgroup'] = 'Προειδοποίηση: Τα μέλη αυτής της ομάδας έχουν αυτόματα όλες τις άδειες';
$lang['admin']['disablesafemodewarning'] = 'Απενεργοποίηση της ειδοποίησης της λειτουργίας ασφαλούς διαχείρισης';
$lang['admin']['date_format_string'] = 'Στοιχειοσειρά μορφότυπου ημερομηνίας';
$lang['admin']['date_format_string_help'] = '<em>strftime</em> διαμορφωμένη στοιχειοσειρά μορφότυπου ημερομηνίας.  Try googling \'strftime\'';
$lang['admin']['last_modified_at'] = 'Τελευταία τροποποίηση στις';
$lang['admin']['last_modified_by'] = 'Τελευταία τροποποίηση από';
$lang['admin']['read'] = 'Ανάγνωση';
$lang['admin']['write'] = 'Εγγραφή';
$lang['admin']['execute'] = 'Execute';
$lang['admin']['group'] = 'Group';
$lang['admin']['other'] = 'Άλλο ';
$lang['admin']['event_desc_moduleupgraded'] = 'Αποστάλθηκε μετά την αναβάθμιση του δομοστοιχείου';
$lang['admin']['event_help_moduleupgraded'] = '<p>Sent after a module is upgraded.</p>';
$lang['admin']['event_desc_moduleinstalled'] = 'Αποστάλθηκε μετα την εγκατάσταση του δομοστοιχείου';
$lang['admin']['event_help_moduleinstalled'] = '<p>Sent after a module is installed.</p>';
$lang['admin']['event_desc_moduleuninstalled'] = 'Αποστάλθηκε μετα την απεγκατάσταση του δομοστοιχείου';
$lang['admin']['event_help_moduleuninstalled'] = '<p>Sent after a module is uninstalled.</p>';
$lang['admin']['event_desc_edituserdefinedtagpost'] = 'Αποστάλθηκε μετα την ανανέωση της κεφαλίδας χρήστη';
$lang['admin']['event_help_edituserdefinedtagpost'] = '<p>Sent after a user defined tag is updated.</p>';
$lang['admin']['event_desc_edituserdefinedtagpre'] = 'Αποστάλθηκε πρίν την ανανέωση της κεφαλίδας χρήστη';
$lang['admin']['event_help_edituserdefinedtagpre'] = '<p>Sent prior to a user defined tag update.</p>';
$lang['admin']['event_desc_deleteuserdefinedtagpre'] = 'Αποστάλθηκε πρίν την ανανέωση της κεφαλίδας χρήστη';
$lang['admin']['event_help_deleteuserdefinedtagpre'] = '<p>Sent prior to deleting a user defined tag.</p>';
$lang['admin']['event_desc_deleteuserdefinedtagpost'] = 'Αποστάλθηκε μετά την ανανέωση της κεφαλίδας χρήστη';
$lang['admin']['event_help_deleteuserdefinedtagpost'] = '<p>Sent after a user defined tag is deleted.</p>';
$lang['admin']['event_desc_adduserdefinedtagpost'] = 'Αποστάλθηκε μετά την εισαγωγή της κεφαλίδας χρήστη';
$lang['admin']['event_help_adduserdefinedtagpre'] = '<p>Sent after a user defined tag is inserted.</p>';
$lang['admin']['event_desc_adduserdefinedtagpre'] = 'Αποστάλθηκε πρίν την εισαγωγή της κεφαλίδας χρήστη';
$lang['admin']['event_help_adduserdefinedtagpost'] = '<p>Sent prior to a user defined tag insert.</p>';
$lang['admin']['global_umask'] = 'Μάσκα δημιουργίας αρχείου (umask)';
$lang['admin']['errorcantcreatefile'] = 'Δεν ήταν δυνατή η δημιουργία αρχείου (πρόβλημα δικαιωμάτων πρόσβασης;)';
$lang['admin']['errormoduleversionincompatible'] = 'Το δομοστοιχείο ειναι ασύμβατο με αυτήν την έκδοση του CMS';
$lang['admin']['errormodulenotloaded'] = 'Εσωτερικό σφάλμα, το δομοστοιχείο δεν απέκτησε λειτουργική υπόσταση';
$lang['admin']['errormodulenotfound'] = 'Εσωτερικό σφάλμα, δεν ήταν δυνατή η εύρεση της λειτουργικής υπόστασης ενός δομοστοιχείου';
$lang['admin']['errorinstallfailed'] = 'Η εγκατάσταση του δομοστοιχείου απέτυχε';
$lang['admin']['errormodulewontload'] = 'Πρόβλημα στην δημιουργία λειτουργικής υπόστασης ενός διαθέσιμου δομοστοιχείου';
$lang['admin']['frontendlang'] = 'Προεπιλεγμένη γλώσσα για το προσκήνιο';
$lang['admin']['info_edituser_password'] = 'Αλλάξτε αυτό το πεδίο για να αλλάξει ο κωδικός πρόσβασης χρήστη';
$lang['admin']['info_edituser_passwordagain'] = 'Αλλάξτε αυτό το πεδίο για να αλλάξει ο κωδικός πρόσβασης χρήστη';
$lang['admin']['originator'] = 'Πιστοποιητής';
$lang['admin']['module_name'] = 'Όνομα δομοστοιχείου';
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
$lang['admin']['user_tag'] = 'Tag χρήστη';
$lang['admin']['add'] = 'Προσθήκη';
$lang['admin']['CSS'] = 'Πρότυπα (CSS)';
$lang['admin']['about'] = 'Σχετικά';
$lang['admin']['action'] = 'Ενέργεια';
$lang['admin']['actionstatus'] = 'Ενέργεια/Κατάσταση';
$lang['admin']['active'] = 'Ενεργό';
$lang['admin']['addcontent'] = 'Προσθήκη περιεχομένου';
$lang['admin']['cantremove'] = 'Αδύνατη μετακίνηση';
$lang['admin']['changepermissions'] = 'Αλλαγή δικαιωμάτων';
$lang['admin']['changepermissionsconfirm'] = 'USE CAUTION\\n\\nΑυτή ή εντολή θα αποπειραθεί να επιβεβαιώσει ότι όλα τα αρχεία που αποτελούν το δομοστοιχείο έχουν δικαίωμα εγγραφής από τον διακομιστή δικτύου.\\nΘέλετε να συνεχίσετε;';
$lang['admin']['contentadded'] = 'Το περιεχόμενο καταχωρήθηκε με επιτυχία στη Βάση δεδομένων.';
$lang['admin']['contentupdated'] = 'Το περιεχόμενο ανανεώθηκε με επιτυχία';
$lang['admin']['contentdeleted'] = 'Το περιεχόμενο διαγράφηκε με επιτυχία από τη Βάση δεδομένων.';
$lang['admin']['success'] = 'Επιτυχία';
$lang['admin']['addcss'] = 'Προσθήκη νέου φύλλου στυλ';
$lang['admin']['addgroup'] = 'Προσθήκη νέας ομάδας';
$lang['admin']['additionaleditors'] = 'Πρόσθετοι ';
$lang['admin']['addtemplate'] = 'Προσθήκη νέου προτύπου';
$lang['admin']['adduser'] = 'Προσθήκη νέου χρήστη';
$lang['admin']['addusertag'] = 'Προσθήκη προκαθορισμένης απο τον χρήστη κεφαλίδας';
$lang['admin']['adminaccess'] = 'Πρόσβαση στην είσοδο του Διαχειριστή';
$lang['admin']['adminlog'] = 'Αρχείο καταγραφής Διαχειριστή';
$lang['admin']['adminlogcleared'] = 'The Admin Log was succesfully cleared';
$lang['admin']['adminlogempty'] = 'The Admin Log is empty';
$lang['admin']['adminsystemtitle'] = 'Σύστημα διαχείρισης CMS';
$lang['admin']['adminpaneltitle'] = 'Πίνακας ελέγχου διαχείρισης του CMS Made simple ';
$lang['admin']['advanced'] = 'Για προχωρημένους';
$lang['admin']['aliasalreadyused'] = 'Η ψευδεπιγραφή ήδη χρησιμοποιείται σε άλλη σελίδα';
$lang['admin']['aliasmustbelettersandnumbers'] = 'Η ψευδεπιγραφή μπορεί να περιέχει μόνο γράμματα και αριθμούς';
$lang['admin']['aliasnotaninteger'] = 'Η ψευδεπιγραφή δεν μπορεί να είναι ακέραιος αριθμός';
$lang['admin']['allpagesmodified'] = 'Έγιναν αλλαγές σε όλες τις σελίδες!';
$lang['admin']['assignments'] = 'Καθορισμός χρηστών';
$lang['admin']['associationexists'] = 'Ο συσχετισμός αυτός ήδη υπάρχει';
$lang['admin']['autoinstallupgrade'] = 'Αυτοματοποιημένη εγκατάσταση ή αναβάθμιση';
$lang['admin']['back'] = 'Επιστροφή στο Menu';
$lang['admin']['backtoplugins'] = 'Επιστροφή στην λίστα αρθρωμάτων κώδικα';
$lang['admin']['cancel'] = 'Ακύρωση';
$lang['admin']['cantchmodfiles'] = 'Δεν ήταν δυνατή η αλλαγή δικαιωμάτων πρόσβασης σε κάποια αρχεία';
$lang['admin']['cantremovefiles'] = 'Πρόβλημα στην διαδικασία διαγραφής αρχείων (δικαιώματα πρόσβασης;)';
$lang['admin']['confirmcancel'] = 'Θέλετε να παραιτηθείτε απο τις αλλαγες; Κάντε κλικ για να παραιτηθείτε απο τις αλλαγές. Κάντε κλίκ για να συνεχίσετε με την επεξεργασία.';
$lang['admin']['canceldescription'] = 'Αναίρεση αλλαγών';
$lang['admin']['clearadminlog'] = 'Καθαρισμός αρχείου καταγραφής Διαχειριστή';
$lang['admin']['code'] = 'Κώδικας';
$lang['admin']['confirmdefault'] = 'Είστε σίγουροι ότι θέλετε να ορίσετε -%s - για τον ιστοτόπο  αυτην την αρχική σελίδα;';
$lang['admin']['confirmdeletedir'] = 'Είστε σίγουροι οτι θέλετε να διαγράψετε αυτόν τον κατάλογο και όλα τα περιεχόμενά του;';
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
$lang['admin']['deleteassociationconfirm'] = 'Are you sure you want to delete association to - %s - ;';
$lang['admin']['deletecss'] = 'Διαγραφή CSS';
$lang['admin']['dependencies'] = 'Εξαρτήσεις';
$lang['admin']['description'] = 'Περιγραφή';
$lang['admin']['directoryexists'] = 'Ο κατάλογος ήδη υπάρχει.';
$lang['admin']['down'] = 'Κάτω';
$lang['admin']['edit'] = 'Επεξεργασία';
$lang['admin']['editconfiguration'] = 'Επεξεργασία ρυθμίσεων';
$lang['admin']['editcontent'] = 'Επεξεργασία περιεχομένου';
$lang['admin']['editcss'] = 'Επεξεργασία CSS';
$lang['admin']['editcsssuccess'] = 'Ενημέρωση φύλλου στυλ';
$lang['admin']['editgroup'] = 'Επεξεργασία ομάδων';
$lang['admin']['editpage'] = 'Επεξεργασία σελίδων';
$lang['admin']['edittemplate'] = 'Επεξεργασία Προτύπου';
$lang['admin']['edittemplatesuccess'] = 'Ενημέρωση προτύπου';
$lang['admin']['edituser'] = 'Επεξεργασία στοιχείων χρήστη';
$lang['admin']['editusertag'] = 'Επεξεργασία προκαθορισμένου tag χρήστη';
$lang['admin']['usertagadded'] = 'Το tag χρήστη προστέθηκε επιτυχώς.';
$lang['admin']['usertagupdated'] = 'To tag χρήστη ανανεώθηκε επιτυχώς.';
$lang['admin']['usertagdeleted'] = 'To tag χρήστη διαγράφηκε επιτυχώς.';
$lang['admin']['email'] = 'Διεύθυνση E-mail';
$lang['admin']['errorattempteddowngrade'] = 'Η εγκατάσταση αυτού του δομοστοιχείου θα είχε ως αποτέλεσμα την υποβάθμιση. Η διαδικασία απορρίπτεται';
$lang['admin']['errorchildcontent'] = 'Το περιεχόμενο ακόμη περιέχει διασυνδεδεμένο περιεχόμενο. Καταργήστε αυτό πρώτα.';
$lang['admin']['errorcopyingtemplate'] = 'Σφάλμα κατά την αντιγραφή Προτύπου';
$lang['admin']['errorcouldnotparsexml'] = 'Σφάλμα στη διαδικασία εκτέλεσης αρχείου XML. Βεβαιωθείτε ότι μεταφέρετε ένα αρχείο .xml και όχι ενα αρχείο.tar.gz ή zip.';
$lang['admin']['errorcreatingassociation'] = 'Σφάλμα κατα τη δημιουργία συσχέτισης';
$lang['admin']['errorcssinuse'] = 'Αυτό το CSS χρησιμοποιείται απο κάποιο πρότυπο ή καποιες σελίδες. Καταργήστε πρώτα αυτές τις συσχετίσεις.';
$lang['admin']['errordefaultpage'] = 'Δεν ήταν δυνατή η διαγραφή της τρέχουσας αρχικής σελίδας. Ορίστε πρώτα μία άλλη.';
$lang['admin']['errordeletingassociation'] = 'Σφάλμα κατά τη διαγραφή συσχέτισης';
$lang['admin']['errordeletingcss'] = 'Σφάλμα κατά τη διαγραφή css';
$lang['admin']['errordeletingdirectory'] = 'Δεν ήταν δυνατή η διαγραφή του καταλόγου. Πρόβλημα δικαιωμάτων πρόσβασης;';
$lang['admin']['errordeletingfile'] = 'Δεν ήταν δυνατή η διαγραφή του αρχείου. Πρόβλημα δικαιωμάτων πρόσβασης;';
$lang['admin']['errordirectorynotwritable'] = 'Δεν έχετε δικαίωμα εγγραφής στο συγκεκριμένο κατάλογο.';
$lang['admin']['errordtdmismatch'] = 'Λάθος της DTD είτε απουσιάζει είτε η έκδοση της δεν είναι η σωστή.';
$lang['admin']['errorgettingcssname'] = 'Σφάλμα κατα την ανάκτηση του ονόματος του CSS';
$lang['admin']['errorgettingtemplatename'] = 'Σφάλμα κατα την ανάκτηση του ονόματος του προτύπου';
$lang['admin']['errorincompletexml'] = 'Το αρχείο XML είναι ημιτελές ή ακατάλληλο';
$lang['admin']['uploadxmlfile'] = 'Εγκατάσταση αρθρώματος μέσω αρχείου XML';
$lang['admin']['cachenotwritable'] = 'Ο φάκελος Cache δεν είναι εγγράψιμος. Το άδειασμα της cache δεν θα έχει αποτέλεσμα. Δώστε δικαιώματα στον φάκελο tmp/cache read/write/execute (chmod 777)';
$lang['admin']['error_nomodules'] = 'No modules installed! Check Extensions > Modules';
$lang['admin']['modulesnotwritable'] = 'Ο φάκελος των δομοστοιχείων δεν είναι εγγράψιμος, εαν επιθυμείτε να εγκαταστήσετε δομοστοιχεία μέσω αποστολής ενός αρχείου XML τότε πρέπει ο φάκελος των δομοστοιχείων να έχει πλήρεις άδειες ανάγνωσης/γραφής/εκτέλεσης (chmod 777).';
$lang['admin']['noxmlfileuploaded'] = 'Δεν απεστάλη κανένα αρχείο. Για να εγκαταστήσετε ένα δομοστοιχείο  με την χρήση XML πρέπει να επιλέξετε και να μετεφέρετε ένα αρχείο δομοστοιχείου .xml από τον υπολογιστή σας.';
$lang['admin']['errorinsertingcss'] = 'Σφάλμα κατά την εισαγωγή CSS';
$lang['admin']['errorinsertinggroup'] = 'Σφάλμα κατά την εισαγωγή ομάδας';
$lang['admin']['errorinsertingtag'] = 'Σφάλμα κατά την εισαγωγή προκαθορισμένης απο τον χρήστη κεφαλίδας';
$lang['admin']['errorinsertingtemplate'] = 'Σφάλμα κατά την εισαγωγή προτύπου';
$lang['admin']['errorinsertinguser'] = 'Σφάλμα κατά την εισαγωγή χρήστη';
$lang['admin']['errornofilesexported'] = 'Σφάλμα στην εξαγωγή των αρχείων σε xml';
$lang['admin']['errorretrievingcss'] = 'Σφάλμα κατά την ανάκτηση CSS';
$lang['admin']['errorretrievingtemplate'] = 'Σφάλμα κατά την ανάκτηση προτύπου';
$lang['admin']['errortemplateinuse'] = 'Το πρότυπο αυτό χρησιμοποιείται ακόμη από κάποια σελίδα. Καταργήστε την πρώτα.';
$lang['admin']['errorupdatingcss'] = 'Σφάλμα κατά την ενημέρωση του CSS';
$lang['admin']['errorupdatinggroup'] = 'Σφάλμα κατά την ενημέρωση της ομάδας';
$lang['admin']['errorupdatingpages'] = 'Συνέβη λάθος κατά την ανανέωση τον σελίδων!';
$lang['admin']['errorupdatingtemplate'] = 'Σφάλμα κατά την ενημέρωση του προτύπου';
$lang['admin']['errorupdatinguser'] = 'Σφάλμα κατά την ενημέρωση των στοιχείων του χρήστη';
$lang['admin']['errorupdatingusertag'] = 'Σφάλμα κατά την ενημέρωση προκαθορισμένης απο τον χρήστη κεφαλίδας';
$lang['admin']['erroruserinuse'] = 'Αυτός ο χρήστης είναι κάτοχος σελίδων περιεχομένου. Μεταφέρετε πρώτα την ιδιοκτησία τους σε άλλο χρήστη πρίν την διαγραφή.';
$lang['admin']['eventhandlers'] = 'Δράσεις';
$lang['admin']['eventhandler'] = 'Event Handlers';
$lang['admin']['editeventhandler'] = 'Επεξεργασία χειριστή δράσεων';
$lang['admin']['eventhandlerdescription'] = 'Συσχετισμός κεφαλίδων χρήστη με δράσεις';
$lang['admin']['export'] = 'Εξαγωγή';
$lang['admin']['event'] = 'Δράση';
$lang['admin']['false'] = 'Σφάλμα';
$lang['admin']['settrue'] = 'Ορισμός αληθούς';
$lang['admin']['filecreatedirnodoubledot'] = 'Ο κατάλογος δεν μπορεί να περιέχει \'..\'.';
$lang['admin']['filecreatedirnoname'] = 'Δεν είναι δυνατή η δημιουργία καταλόγου χωρίς ονομασία.';
$lang['admin']['filecreatedirnoslash'] = 'Ο κατάλογος δεν μπορεί να περιέχει \'/\' or \'\'.';
$lang['admin']['filemanagement'] = 'Διαχείριση αρχείων';
$lang['admin']['filename'] = 'Όνομα αρχείου';
$lang['admin']['filenotuploaded'] = 'Το αρχείο δεν ήταν δυνατόν να μεταφερθεί. Πρόβλημα δικαιωμάτων πρόσβασης;';
$lang['admin']['filesize'] = 'Μέγεθος αρχείου';
$lang['admin']['firstname'] = 'Όνομα';
$lang['admin']['groupmanagement'] = 'Διαχείριση Ομάδων';
$lang['admin']['grouppermissions'] = 'Διαχείριση δικαιωμάτων πρόσβασης ομάδων';
$lang['admin']['handler'] = 'Πρόγραμμα χειρισμού (καθορισμένα tag χρήστη)';
$lang['admin']['headtags'] = 'Κύρια tag';
$lang['admin']['help'] = 'Βοήθεια';
$lang['admin']['new_window'] = 'Νέο παράθυρο';
$lang['admin']['helpwithsection'] = '%s Βοήθεια';
$lang['admin']['helpaddtemplate'] = '<p>Το Πρότυπο ελέγχει την εμφάνιση και την αίσθηση του περιεχομένου της ιστοσελίδας σας.</p><p>Δημιουργήστε εδώ τη μορφή  και προσθέστε τα δικά σας CSS στον κατάλληλο χώρο για να ελέγξετε την εμφάνιση των διαφόρων στοιχείων.</p>';
$lang['admin']['helplisttemplate'] = '<p>Αυτή η σελίδα σας επιτρέπει την επεξεργασία , διαγραφή και δημιουργία προτύπων.</p><p>Για την δημιουργία ενός νέου προτύπου κάντε κλίκ στο κουμπί <u>Προσθήκη νέου προτύπου</u>.</p><p>Εάν επιθυμείτε την εφαρμογή του ίδιου προτύπου σε όλες τις σελίδες περιεχομένου, κάντε κλίκ στην υπερσύνδεση <u>Ορισμός σε όλο το περιεχόμενο</u>.</p><p>Εάν επιθυμείτε την αναπαραγωγή ενός προτύπου καντε κλίκ στο εικονίδιο <u>Αντιγραφή</u> και θα εμφανιστεί η προτροπή για την ονομασία του νέου προτύπου.</p>';
$lang['admin']['home'] = 'Home';
$lang['admin']['homepage'] = 'Homepage';
$lang['admin']['hostname'] = 'Όνομα υπολογιστή';
$lang['admin']['idnotvalid'] = 'Το id δεν είναι έγκυρο';
$lang['admin']['imagemanagement'] = 'Διαχείριση εικόνων';
$lang['admin']['informationmissing'] = 'Λείπει στοιχείο';
$lang['admin']['install'] = 'Εγκατάσταση';
$lang['admin']['invalidcode'] = 'Μη έγκυρος κώδικας.';
$lang['admin']['illegalcharacters'] = 'Μη έγκυροι χαρακτήρες στο πεδίο %s.';
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
$lang['admin']['missingparams'] = 'Κάποιες Παράμετροι είναι ελλειπείς ή μη έγκυρες';
$lang['admin']['modifygroupassignments'] = 'Τροποποίηση δικαιωμάτων Ομάδας';
$lang['admin']['moduleabout'] = 'Σχετικά με το δομοστοιχείο %s ';
$lang['admin']['modulehelp'] = 'Παροχή βοήθειας για το δομοστοιχείο %s ';
$lang['admin']['msg_defaultcontent'] = 'Προσθήκη κωδικού εδώ που θα εμφανίζεται ως προεπιλεγμένο περιεχόμενο για όλες τις νέες σελίδες';
$lang['admin']['msg_defaultmetadata'] = 'Προσθήκη κωδικού εδώ που θα εμφανίζεται στην ενότητα μεταδεδομένων για όλες τις νέες σελίδες';
$lang['admin']['wikihelp'] = 'Βοήθεια απο την Κοινότητα';
$lang['admin']['moduleinstalled'] = 'Το δομοστοιχείο είναι ήδη εγκατεστημένο';
$lang['admin']['moduleinterface'] = 'Περιβάλλον δομοστοιχείου %s';
$lang['admin']['modules'] = 'Δομοστοιχεία';
$lang['admin']['move'] = 'Μετακίνηση';
$lang['admin']['name'] = 'Όνομα';
$lang['admin']['needpermissionto'] = 'Χρειάζεστε τα δικαιώματα πρόσβασης του \'%s\' για να εκτελέσετε αυτήν την λειτουργία.';
$lang['admin']['needupgrade'] = 'Χρειάζεται αναβάθμιση';
$lang['admin']['newtemplatename'] = 'Ονομασία νέου Προτύπου';
$lang['admin']['next'] = 'Επόμενο';
$lang['admin']['noaccessto'] = 'Δεν υπάρχει πρόσβαση στο %s';
$lang['admin']['nocss'] = 'Δεν υπάρχει CSS';
$lang['admin']['noentries'] = 'Δεν υπάρχουν εγγραφές';
$lang['admin']['nofieldgiven'] = 'Δεν δόθηκε %s!';
$lang['admin']['nofiles'] = 'Δεν υπάρχουν αρχεία';
$lang['admin']['nopasswordmatch'] = 'Οι κωδικοί πρόσβασης δεν είναι σωστοί';
$lang['admin']['norealdirectory'] = 'Δεν ορίστηκε πραγματικό όνομα καταλόγου';
$lang['admin']['norealfile'] = 'Δεν ορίστηκε πραγματικό αρχείο';
$lang['admin']['notinstalled'] = 'Δεν είναι εγκατεστημένο';
$lang['admin']['overwritemodule'] = 'Αντικατάσταση δομοστοιχείων που ήδη υπάρχουν';
$lang['admin']['owner'] = 'Ιδιοκτήτης';
$lang['admin']['pagealias'] = 'Ψευδεπιγραφή σελίδας';
$lang['admin']['content_id'] = 'Content ID';
$lang['admin']['pagedefaults'] = 'Προεπιλεγμένες ρυθμίσεις σελίδας';
$lang['admin']['pagedefaultsdescription'] = 'Ορισμός προεπιλεγμένων τιμών για νέες σελίδες';
$lang['admin']['parent'] = 'Ανήκει στο';
$lang['admin']['password'] = 'Κωδικός Πρόσβασης';
$lang['admin']['passwordagain'] = 'Κωδικός Πρόσβασης (επανάληψη)';
$lang['admin']['permission'] = 'Δικαίωμα πρόσβασης';
$lang['admin']['permissions'] = 'Δικαιώματα πρόσβασης';
$lang['admin']['permissionschanged'] = 'Τα Δικαιώματα πρόσβασης ενημερώθηκαν.';
$lang['admin']['pluginabout'] = 'Σχετικά με την κεφαλίδα %s';
$lang['admin']['pluginhelp'] = 'Παροχή βοήθειας για την κεφαλίδα %s';
$lang['admin']['pluginmanagement'] = 'Διαχείριση αρθρωμάτων κώδικα';
$lang['admin']['prefsupdated'] = 'Οι προτιμήσεις ενημερώθηκαν.';
$lang['admin']['accountupdated'] = 'User account has been updated.';
$lang['admin']['preview'] = 'Προεπισκόπηση';
$lang['admin']['previewdescription'] = 'Προεπισκόπηση αλλαγών';
$lang['admin']['previous'] = 'Προηγούμενο';
$lang['admin']['remove'] = 'Διαγραφή';
$lang['admin']['removeconfirm'] = 'Αυτή η εντολή θα διαγράψει μόνιμα τα αρχεία που αποτελούν το άρθρωμα απο αυτήν την εγκατάσταση.\\nΕίστε σίγουροι;';
$lang['admin']['removecssassociation'] = 'Κατάργηση συσχέτισης CSS';
$lang['admin']['saveconfig'] = 'Αποθήκευση αρχείου ρυθμίσεων';
$lang['admin']['send'] = 'Αποστολή';
$lang['admin']['setallcontent'] = 'Εφαρμογή σε όλες τις σελίδες';
$lang['admin']['setallcontentconfirm'] = 'Είστε σίγουροι για την  εφαρμογή αυτού του προτύπου σε όλες τις σελίδες;';
$lang['admin']['showinmenu'] = 'Προβολή στο Mενού';
$lang['admin']['use_name'] = 'In the parent page dropdown, show the page title instead of the menu text';
$lang['admin']['showsite'] = 'Προβολή του ιστοτόπου';
$lang['admin']['sitedownmessage'] = 'Μήνυμα μη λειτουργίας του ιστοτόπου';
$lang['admin']['siteprefs'] = 'Γενικές ρυθμίσεις';
$lang['admin']['status'] = 'Κατάσταση';
$lang['admin']['stylesheet'] = 'Φύλλο στυλ';
$lang['admin']['submit'] = 'Υποβολή';
$lang['admin']['submitdescription'] = 'Αποθήκευση Αλλαγών';
$lang['admin']['tags'] = 'Tags';
$lang['admin']['template'] = 'Πρότυπο';
$lang['admin']['templateexists'] = 'Το όνομα προτύπου υπάρχει ήδη';
$lang['admin']['templatemanagement'] = 'Διαχείριση προτύπων';
$lang['admin']['title'] = 'Τίτλος';
$lang['admin']['tools'] = 'Εργαλεία';
$lang['admin']['true'] = 'Σωστό';
$lang['admin']['setfalse'] = 'Ορισμός ως Λάθος';
$lang['admin']['type'] = 'Τύπος';
$lang['admin']['typenotvalid'] = 'Ο τύπος δεν είναι έγκυρος';
$lang['admin']['uninstall'] = 'Απεγκατάσταση';
$lang['admin']['uninstallconfirm'] = 'Είστε σίγουροι για αυτήν την απεγκατάσταση;';
$lang['admin']['up'] = 'Επάνω';
$lang['admin']['upgrade'] = 'Αναβάθμιση';
$lang['admin']['upgradeconfirm'] = 'Είστε σίγουροι για αυτήν την αναβάθμιση;';
$lang['admin']['uploadfile'] = 'Αποστολή αρχείου';
$lang['admin']['url'] = 'Υπερσύνδεσμος (URL)';
$lang['admin']['useadvancedcss'] = 'Χρήση διαχείρισης CSS για προχωρημένους';
$lang['admin']['user'] = 'Χρήστης';
$lang['admin']['userdefinedtags'] = 'Προκαθορισμένα tag από τον χρήστη';
$lang['admin']['usermanagement'] = 'Διαχείριση χρηστών';
$lang['admin']['username'] = 'Όνομα χρήστη';
$lang['admin']['usernameincorrect'] = 'Εσφαλμένο όνομα χρήστη ή  κωδικός πρόσβασης';
$lang['admin']['userprefs'] = 'Προτιμήσεις χρήστη';
$lang['admin']['useraccount'] = 'User Account';
$lang['admin']['lang_settings_legend'] = 'Language related settings';
$lang['admin']['content_editor_legend'] = 'Content editor settings';
$lang['admin']['admin_layout_legend'] = 'Admin lay-out settings';
$lang['admin']['usersassignedtogroup'] = 'Χρήστες μέλη της ομάδας %s';
$lang['admin']['usertagexists'] = 'Υπάρχει ήδη ένα tag με το όνομα αυτό. Επιλέξτε άλλο.';
$lang['admin']['usewysiwyg'] = 'Χρήση προγράμματος επεξεργασίας WYSIWYG για το περιεχόμενο';
$lang['admin']['version'] = 'Έκδοση';
$lang['admin']['view'] = 'Προβολή';
$lang['admin']['welcomemsg'] = 'Καλωσήλθατε %s';
$lang['admin']['directoryabove'] = 'Κατάλογος πάνω από το τρέχον επίπεδο';
$lang['admin']['nodefault'] = 'Δεν επιλέχθηκε η προεπιλεγμένη ρύθμιση';
$lang['admin']['blobexists'] = 'Το όνομα του γενικού μπλοκ περιεχομένου υπάρχει ήδη';
$lang['admin']['blobmanagement'] = 'Διαχείριση γενικού μπλοκ περιεχομένου';
$lang['admin']['errorinsertingblob'] = 'Σφάλμα κατα την εισαγωγή του γενικού μπλοκ περιεχομένου';
$lang['admin']['addhtmlblob'] = 'Προσθήκη γενικού μπλοκ περιεχομένου';
$lang['admin']['edithtmlblob'] = 'Επεξεργασία γενικού μπλοκ περιεχομένου';
$lang['admin']['edithtmlblobsuccess'] = 'Ενημέρωση γενικού μπλοκ περιεχομένου';
$lang['admin']['tagtousegcb'] = 'Tag για να χρησιμοποιηθεί αυτό το μπλοκ';
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
$lang['admin']['missingdependency'] = 'Λείπει εξάρτηση';
$lang['admin']['minimumversion'] = 'Ελάχιστη έκδοση';
$lang['admin']['minimumversionrequired'] = 'Ελάχιστη απαιτούμενη έκδοση CMSMS';
$lang['admin']['maximumversion'] = 'Μέγιστη έκδοση';
$lang['admin']['maximumversionsupported'] = 'Μέγιστη υποστηριζόμενη έκδοση CMSMS';
$lang['admin']['depsformodule'] = 'Εξαρτήσεις για το δομοστοιχείο %s ';
$lang['admin']['installed'] = 'Εγκατεστημένο';
$lang['admin']['author'] = 'Συγγραφέας';
$lang['admin']['changehistory'] = 'Αλλαγή ιστορικού';
$lang['admin']['moduleerrormessage'] = 'Μήνυμα σφάλματος για το δομοστοιχείο %s';
$lang['admin']['moduleupgradeerror'] = 'Εμφανίστηκε ένα σφάλμα στην αναβάθμιση του δομοστοιχείου.';
$lang['admin']['moduleinstallmessage'] = 'Εγκατάσταση μηνύματος για το δομοστοιχείο %s';
$lang['admin']['moduleuninstallmessage'] = 'Απεγκατάσταση μηνύματος για το δομοστοιχείο %s';
$lang['admin']['admintheme'] = 'Θέμα για την εμφάνιση του πίνακα διαχείρισης';
$lang['admin']['addstylesheet'] = 'Προσθήκη φύλλου στυλ';
$lang['admin']['editstylesheet'] = 'Επεξεργασία φύλλου στυλ';
$lang['admin']['addcssassociation'] = 'Προσθήκη συσχέτισης φύλλου στυλ';
$lang['admin']['attachstylesheet'] = 'Επισύναψη αυτού του φύλλου στυλ';
$lang['admin']['attachtemplate'] = 'Επισύναψη σε αυτό το πρότυπο';
$lang['admin']['main'] = 'Κεντρική';
$lang['admin']['pages'] = 'Σελίδες';
$lang['admin']['page'] = 'Σελίδα';
$lang['admin']['files'] = 'Αρχεία';
$lang['admin']['layout'] = 'Μορφή ιστοτόπου';
$lang['admin']['usersgroups'] = 'Χρήστες & Ομάδες';
$lang['admin']['extensions'] = 'Επεκτάσεις';
$lang['admin']['preferences'] = 'Προτιμήσεις';
$lang['admin']['admin'] = 'Διαχείριση ιστοσελίδας';
$lang['admin']['viewsite'] = 'Προβολή Τοποθεσίας';
$lang['admin']['templatecss'] = 'Ορισμός προτύπων στο φύλλο στυλ';
$lang['admin']['plugins'] = 'Plugins';
$lang['admin']['movecontent'] = 'Μετακίνηση σελίδων';
$lang['admin']['module'] = 'Δομοστοιχείο';
$lang['admin']['usertags'] = 'Προκαθορισμένα από τον χρήστη tag';
$lang['admin']['htmlblobs'] = 'Γενικά μπλοκ περιεχομένου';
$lang['admin']['adminhome'] = 'Αρχική σελίδα διαχείρισης';
$lang['admin']['liststylesheets'] = 'Φύλλα στυλ';
$lang['admin']['preferencesdescription'] = 'Εδώ μπορείτε να ορίσετε τις διάφορες προτιμήσεις σας για το σύνολο του ιστοτόπου.';
$lang['admin']['adminlogdescription'] = 'Εμφάνιση του καταγραφέα κινήσεων για τον διαχειριστή.';
$lang['admin']['mainmenu'] = 'Κυρίως Mενού';
$lang['admin']['users'] = 'Χρήστες';
$lang['admin']['usersdescription'] = 'Εδώ διαχειρίζεστε τους χρήστες.';
$lang['admin']['groups'] = 'Ομάδες';
$lang['admin']['groupsdescription'] = 'Εδώ διαχειρίζεστε ομάδες.';
$lang['admin']['groupassignments'] = 'Μέλη ομάδας';
$lang['admin']['groupassignmentdescription'] = 'Εδώ μπορείτε να εντάξετε χρήστες σε ομάδες.';
$lang['admin']['groupperms'] = 'Δικαιώματα πρόσβασης ομάδας';
$lang['admin']['grouppermsdescription'] = 'Ορισμός δικαιωμάτων πρόσβασης και του επιπέδου της για τις ομάδες';
$lang['admin']['pagesdescription'] = 'Εδώ μπορείτε να προσθέτετε και να επεξεργάζεστε σελίδες και άλλο περιεχόμενο.';
$lang['admin']['htmlblobdescription'] = 'Οι νησίδες HTML περιέχουν τμήματα κώδικα HTML ή και PHP που μπορείτε να τοποθετήσετε σε πολλές διαφορετικές σελίδες ή στα πρότυπά σας.';
$lang['admin']['templates'] = 'Πρότυπα ';
$lang['admin']['templatesdescription'] = 'Εδώ μπορείτε να προσθέτετε και να επεξεργάζεστε πρότυπα. Τα πρότυπα καθορίζουν την εμφάνιση του ιστοτόπου.';
$lang['admin']['stylesheets'] = 'Φύλλα στυλ';
$lang['admin']['stylesheetsdescription'] = 'Η διαχείριση των φύλλων στυλ (CSS) μπορεί σε συνεργασία με τα πρότυπα να διαμορφώσει την εμφάνιση του ιστοτόπου (για προχωρημένους).';
$lang['admin']['filemanagerdescription'] = 'Αποστολή και διαχείριση αρχείων.';
$lang['admin']['imagemanagerdescription'] = 'Αποστολή/επεξεργασία και κατάργηση εικόνων.';
$lang['admin']['moduledescription'] = 'Τα δομοστοιχεία επεκτείνουν το CMS παρέχοντας κάθε είδους προσαρμοσμένη λειτουργικότητα.';
$lang['admin']['tagdescription'] = 'Ta tags ειναι λειτουργίες που μπορούν να προστεθούν στο περιεχόμενο ή/και στα πρότυπα.';
$lang['admin']['usertagdescription'] = 'Tags που μπορείτε να δημιουργήσετε και να τροποποιήσετε για να εκτελούνται συγκεκριμένες εργασίες κατευθείαν στo πρόγραμμα πλοήγησής σας στο Διαδίκτυο.';
$lang['admin']['installdirwarning'] = '<em><strong>Προειδοποίηση:</strong></em> Ο κατάλογος εγκατάστασης ακόμη υπάρχει. Καταργήστε τον τελείως.';
$lang['admin']['subitems'] = 'Υποστοιχεία';
$lang['admin']['extensionsdescription'] = 'Δομοστοιχεία, tags και άλλα ......';
$lang['admin']['usersgroupsdescription'] = 'Αντικείμενα σχετικά με χρήστες και ομάδες.';
$lang['admin']['layoutdescription'] = 'Επιλογές μορφής του ιστοτόπου.';
$lang['admin']['admindescription'] = 'Λειτουργίες διαχείρισης ιστοτόπου.';
$lang['admin']['contentdescription'] = 'Εδώ μπορείτε να προσθέτετε και να επεξεργάζεστε το περιεχόμενο.';
$lang['admin']['enablecustom404'] = 'Ενεργοποίηση τροποποιημένου μηνύματος 404';
$lang['admin']['enablesitedown'] = 'Ενεργοποίηση μηνύματος μη λειτουργίας του ιστοτόπου';
$lang['admin']['enablewysiwyg'] = 'Enable WYSIWYG on Site Down Message';
$lang['admin']['bookmarks'] = 'Συντομεύσεις';
$lang['admin']['user_created'] = 'Προσαρμοσμένες συντομεύσεις';
$lang['admin']['forums'] = 'Forums';
$lang['admin']['wiki'] = 'Wiki.';
$lang['admin']['irc'] = 'IRC.';
$lang['admin']['team'] = 'Team';
$lang['admin']['module_help'] = 'Βοήθεια για το δομοστοιχείο';
$lang['admin']['managebookmarks'] = 'Διαχείριση Συντομεύσεων';
$lang['admin']['editbookmark'] = 'Επεξεργασία συντόμευσης';
$lang['admin']['addbookmark'] = 'Προσθήκη συντόμευσης';
$lang['admin']['recentpages'] = 'Πρόσφατες σελίδες';
$lang['admin']['groupname'] = 'Ονομασία ομάδας';
$lang['admin']['selectgroup'] = 'Επιλογή ομάδας';
$lang['admin']['updateperm'] = 'Ενημέρωση δικαιωμάτων πρόσβασης';
$lang['admin']['admincallout'] = 'Συντομεύσεις διαχείρισης';
$lang['admin']['showbookmarks'] = 'Εμφάνιση συντομεύσεων διαχειριστή';
$lang['admin']['hide_help_links'] = 'Απόκρυψη συνδέσμων βοήθειας';
$lang['admin']['hide_help_links_help'] = 'Μαρκάρετε την επιλογή για να απενεργοποιήσετε το wiki και τους συνδέσμους βοήθειας δομοστοιχείου στις κεφαλίδες της σελίδας.';
$lang['admin']['showrecent'] = 'Εμφάνιση πρόσφατα χρησιμοποιημένων σελίδων';
$lang['admin']['attachtotemplate'] = 'Επισύναψη φύλλου στυλ στο πρότυπο';
$lang['admin']['attachstylesheets'] = 'Επισύναψη φύλλου στυλ';
$lang['admin']['indent'] = 'Δημιουργία εσοχής για την ανάδειξη της ιεράρχησης';
$lang['admin']['adminindent'] = 'Προβολή περιεχομένου';
$lang['admin']['contract'] = 'Σύμπτυξη ενότητας';
$lang['admin']['expand'] = 'Ανάπτυξη ενότητας';
$lang['admin']['expandall'] = 'Ανάπτυξη όλων των ενοτήτων';
$lang['admin']['contractall'] = 'Σύμπτυξη όλων των ενοτήτων';
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
$lang['admin']['mediatype_speech'] = 'speech : Intended for speech synthesizers.';
$lang['admin']['mediatype_tv'] = 'tv : Intended for television-type devices.';
$lang['admin']['assignmentchanged'] = 'Οι συσχετίσεις της ομάδας ενημερώθηκαν.';
$lang['admin']['stylesheetexists'] = 'Το φύλλο στυλ υπάρχει ήδη';
$lang['admin']['errorcopyingstylesheet'] = 'Σφάλμα κατα την αντιγραφή του φύλλου στυλ';
$lang['admin']['copystylesheet'] = 'Αντιγραφή φύλλου στυλ';
$lang['admin']['newstylesheetname'] = 'Νέα ονομασία του φύλλου στυλ';
$lang['admin']['target'] = 'Στόχος';
$lang['admin']['xml'] = 'Σελίδα XML';
$lang['admin']['xmlmodulerepository'] = 'Διεύθυνση  (URL) του διαχειριστή (ModuleRepository soap server)';
$lang['admin']['metadata'] = 'Μεταδεδομένα';
$lang['admin']['globalmetadata'] = 'Γενικά μεταδεδομένα';
$lang['admin']['titleattribute'] = 'Περιγραφή (ιδιότητα τίτλου)';
$lang['admin']['tabindex'] = 'Καρτέλα Ευρετήριο';
$lang['admin']['accesskey'] = 'Κλειδί πρόσβασης';
$lang['admin']['sitedownwarning'] = '<strong>Προειδοποίηση:</strong> Ο δικτυακός τόπος σας εμφανίζει το μήνυμα "Εκτός λειτουργίας για συντήρηση".  Καταργήσετε το αρχείο %s για την επίλυση του.';
$lang['admin']['deletecontent'] = 'Διαγραφή περιεχομένου';
$lang['admin']['deletepages'] = 'Θα διαγράψετε αυτές τις σελίδες;';
$lang['admin']['selectall'] = 'Επιλογή όλων';
$lang['admin']['selecteditems'] = 'Επιλεγμένα στοιχεία';
$lang['admin']['inactive'] = 'Ανενεργό';
$lang['admin']['deletetemplates'] = 'Διαγραφή προτύπων';
$lang['admin']['templatestodelete'] = 'Τα πρότυπα αυτά θα διαγραφούν';
$lang['admin']['wontdeletetemplateinuse'] = 'Tα πρότυπα αυτά χρησιμοποιούνται και δεν θα διαγραφούν';
$lang['admin']['deletetemplate'] = 'Διαγραφή φύλλου στυλ';
$lang['admin']['stylesheetstodelete'] = 'Αυτά τα φύλλα στυλ θα διαγραφούν';
$lang['admin']['sitename'] = 'Όνομα ιστοσελίδας';
$lang['admin']['goto'] = 'Back to:';
$lang['admin']['siteadmin'] = 'Διαχειριστής ιστοσελίδας';
$lang['admin']['images'] = 'Διαχειριστής εικόνων';
$lang['admin']['blobs'] = 'Γενκά μπλοκ περιεχομένου';
$lang['admin']['groupmembers'] = 'Group Assignments';
$lang['admin']['troubleshooting'] = '(Επίλυση προβλημάτων)';
$lang['admin']['event_desc_loginpost'] = 'Sent after a user logs into the admin panel';
$lang['admin']['event_desc_logoutpost'] = 'Sent after a user logs out of the admin panel';
$lang['admin']['event_desc_adduserpre'] = 'Αποστολή πριν τη δημιουργία νέου χρήστη';
$lang['admin']['event_desc_adduserpost'] = 'Αποστολή μετά τη δημιουργία νέου χρήστη';
$lang['admin']['event_desc_edituserpre'] = 'Sent before edits to a user are saved';
$lang['admin']['event_desc_edituserpost'] = 'Sent after edits to a user are saved';
$lang['admin']['event_desc_deleteuserpre'] = 'Aποστολή πριν τη διαγραφή ενός χρήστη από το σύστημα';
$lang['admin']['event_desc_deleteuserpost'] = 'Αποστολή μετά τη διαγραφή ενός χρήστη από το σύστημα';
$lang['admin']['event_desc_addgrouppre'] = 'Αποστολή πριν τη δημιουργία μιας νέας ομάδας';
$lang['admin']['event_desc_addgrouppost'] = 'Αποστολή μετά τη δημιουργία μιας νέας ομάδας';
$lang['admin']['event_desc_changegroupassignpre'] = 'Sent before group assignments are saved';
$lang['admin']['event_desc_changegroupassignpost'] = 'Sent after group assignments are saved';
$lang['admin']['event_desc_editgrouppre'] = 'Sent before edits to a group are saved';
$lang['admin']['event_desc_editgrouppost'] = 'Sent after edits to a group are saved';
$lang['admin']['event_desc_deletegrouppre'] = 'Αποστολή πριν τη διαγραφή μιας ομάδας από το σύστημα';
$lang['admin']['event_desc_deletegrouppost'] = 'Αποστολή μετά τη διαγραφή μιας ομάδας από το σύστημα';
$lang['admin']['event_desc_addstylesheetpre'] = 'Sent before a new stylesheet is created';
$lang['admin']['event_desc_addstylesheetpost'] = 'Sent after a new stylesheet is created';
$lang['admin']['event_desc_editstylesheetpre'] = 'Sent before edits to a stylesheet are saved';
$lang['admin']['event_desc_editstylesheetpost'] = 'Sent after edits to a stylesheet are saved';
$lang['admin']['event_desc_deletestylesheetpre'] = 'Αποστολή πριν τη διαγραφή του φύλλου στυλ από το σύστημα';
$lang['admin']['event_desc_deletestylesheetpost'] = 'Αποστολή μετά τη διαγραφή του φύλλου στυλ από το σύστημα';
$lang['admin']['event_desc_addtemplatepre'] = 'Αποστολή πριν τη δημιουργία ενός νέου προτύπου';
$lang['admin']['event_desc_addtemplatepost'] = 'Αποστολή μετά τη δημιουργία ενός νέου προτύπου';
$lang['admin']['event_desc_edittemplatepre'] = 'Sent before edits to a template are saved';
$lang['admin']['event_desc_edittemplatepost'] = 'Sent after edits to a template are saved';
$lang['admin']['event_desc_deletetemplatepre'] = 'Αποστολή πριν τη διαγραφή ενός προτύπου από το σύστημα';
$lang['admin']['event_desc_deletetemplatepost'] = 'Αποστολή μετά τη διαγραφή ενός προτύπου από το σύστημα';
$lang['admin']['event_desc_templateprecompile'] = 'Sent before a template is sent to smarty for processing';
$lang['admin']['event_desc_templatepostcompile'] = 'Sent after a template has been processed by smarty';
$lang['admin']['event_desc_addglobalcontentpre'] = 'Αποστολή πριν τη δημιουργία ενός νέου γενικού μπλοκ περιεχομένου';
$lang['admin']['event_desc_addglobalcontentpost'] = 'Αποστολή μετά τη δημιουργία ενός νέου γενικού μπλοκ περιεχομένου';
$lang['admin']['event_desc_editglobalcontentpre'] = 'Sent before edits to a global content block are saved';
$lang['admin']['event_desc_editglobalcontentpost'] = 'Sent after edits to a global content block are saved';
$lang['admin']['event_desc_deleteglobalcontentpre'] = 'Αποστολή πριν τη διαγραφή ενός γενικού μπλοκ περιεχομένου από το σύστημα';
$lang['admin']['event_desc_deleteglobalcontentpost'] = 'Αποστολή μετά τη διαγραφή ενός γενικού μπλοκ περιεχομένου από το σύστημα';
$lang['admin']['event_desc_globalcontentprecompile'] = 'Sent before a global content block is sent to smarty for processing';
$lang['admin']['event_desc_globalcontentpostcompile'] = 'Sent after a global content block has been processed by smarty';
$lang['admin']['event_desc_contenteditpre'] = 'Sent before edits to content are saved';
$lang['admin']['event_desc_contenteditpost'] = 'Sent after edits to content are saved';
$lang['admin']['event_desc_contentdeletepre'] = 'Αποστολή πριν τη διαγραφή του περιεχομένου από το σύστημα';
$lang['admin']['event_desc_contentdeletepost'] = 'Αποστολή μετά τη διαγραφή του περιεχομένου από το σύστημα';
$lang['admin']['event_desc_contentstylesheet'] = 'Αποστολή πριν την αποστολή του φύλλου στυλ στο πρόγραμμα πλοήγησης στο Διαδίκτυο';
$lang['admin']['event_desc_contentprecompile'] = 'Αποστολή πριν την αποστολή του περιεχομένου στο smarty για επεξεργασία';
$lang['admin']['event_desc_contentpostcompile'] = 'Αποστολή μετά την επεξεργασία του περιεχομένου από το smarty';
$lang['admin']['event_desc_contentpostrender'] = 'Αποστολή πριν την αποστολή του html στο πρόγραμμα πλοήγησης στο Διαδίκτυο';
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
$lang['admin']['event_help_adduserpre'] = '<p>Αποστολή πριν τη δημιουργία ενός νέου χρήστη.</p>
<h4>Παράμετροι</h4>
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
$lang['admin']['filterbymodule'] = 'Φίλτρο με κριτήριο το δομοστοιχείο';
$lang['admin']['showall'] = 'Εμφάνιση όλων';
$lang['admin']['core'] = 'Πυρήνας';
$lang['admin']['defaultpagecontent'] = 'Προεπιλεγμένο περιεχόμενο σελίδας';
$lang['admin']['file_url'] = 'Σύνδεσμος για το αρχείο (αντί URL)';
$lang['admin']['no_file_url'] = 'None (Use URL Above)';
$lang['admin']['defaultparentpage'] = 'Default Parent Page';
$lang['admin']['error_udt_name_whitespace'] = 'Error: User Defined Tags cannot have spaces in their name.';
$lang['admin']['warning_safe_mode'] = '<strong><em>WARNING:</em></strong> Ενεργοποίηση της λειτουργίας Ασφάλεια PHP. This will cause difficulty with files uploaded via the web browser interface, including images, theme and module XML packages.  You are advised to contact your site administrator to see about disabling safe mode.';
$lang['admin']['test'] = 'Δοκιμή';
$lang['admin']['results'] = 'Αποτελέσματα ';
$lang['admin']['untested'] = 'Δεν έχει ελεγχθεί ';
$lang['admin']['unknown'] = 'Άγνωστο';
$lang['admin']['download'] = 'Λήψη αρχείου';
$lang['admin']['frontendwysiwygtouse'] = 'Frontend wysiwyg';
$lang['admin']['backendwysiwygtouse'] = 'Default backend wysiwyg (for new user accounts)';
$lang['admin']['all_groups'] = 'Όλες οι ομάδες';
$lang['admin']['error_type'] = 'Error Type';
$lang['admin']['contenttype_errorpage'] = 'Error Page';
$lang['admin']['errorpagealreadyinuse'] = 'Error Code Already in Use';
$lang['admin']['404description'] = 'Page Not Found';
$lang['admin']['usernotfound'] = 'User Not Found.';
$lang['admin']['passwordchange'] = 'Please, provide the new password';
$lang['admin']['recoveryemailsent'] = 'Email sent to recorded address.  Please check your inbox for further instructions.';
$lang['admin']['errorsendingemail'] = 'There was an error sending the email.  Contact your administrator.';
$lang['admin']['passwordchangedlogin'] = 'Password changed.  Please log in using the new credentials.';
$lang['admin']['nopasswordforrecovery'] = 'No email address set for this user.  Password recovery is not possible.  Please contact your administrator.';
$lang['admin']['lostpw'] = 'Ξεχάσατε των κωδικό εισόδου;';
$lang['admin']['lostpwemailsubject'] = '[%s] Επαναφορά κωδικού';
$lang['admin']['lostpwemail'] = 'You are recieving this e-mail because a request has been made to change the (%s) password associated with this user account (%s).  If you would like to reset the password for this account simply click on the link below or paste it into the url field on your favorite browser:
%s

If you feel this is incorrect or made in error, simply ignore the email and nothing will change.';
$lang['admin']['utma'] = '156861353.236883387.1331238719.1331238719.1331238719.1';
$lang['admin']['utmc'] = '156861353';
$lang['admin']['utmz'] = '156861353.1331238719.1.1.utmcsr=wiki.cmsmadesimple.org|utmccn=(referral)|utmcmd=referral|utmcct=/index.php/Visual_Tutorials';
$lang['admin']['utmb'] = '156861353.1.10.1331238719';
?>