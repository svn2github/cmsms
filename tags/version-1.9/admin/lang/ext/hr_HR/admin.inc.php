<?php
$lang['admin']['close'] = 'Zatvori';
$lang['admin']['revert'] = 'Vrati sve promjene';
$lang['admin']['autoclearcache2'] = 'Ukloni datoteke is cache-a starije od definiranog broja dana';
$lang['admin']['nothingtodo'] = 'Nema ni&scaron;ta za učiniti!';
$lang['admin']['root'] = 'Korijen';
$lang['admin']['info_content_autocreate_flaturls'] = 'Ako je omogućeno, svi URL-ovi će biti kreirani kao kopija alias stranice (ali neće biti usklađeni s alias-om stranice)';
$lang['admin']['content_autocreate_flaturls'] = 'Automatski kreiraj URL-ove koji su flat';
$lang['admin']['content_autocreate_urls'] = 'Automatski kreiraj URl za stranicu';
$lang['admin']['content_mandatory_urls'] = 'URL-ovi za stranicu su obavezni';
$lang['admin']['content_imagefield_path'] = 'Putanja za polje slike';
$lang['admin']['info_content_imagefield_path'] = 'Relative to the image uploads path, specify a directory name that contains the paths containing files for the image field';
$lang['admin']['content_thumbnailfield_path'] = 'Putanja za polje minislike';
$lang['admin']['info_content_thumbnailfield_path'] = 'Relative to the image uploads path, specify a directory name that contains the paths containing files for the image field.  Usually this will be the same as the path above.';
$lang['admin']['contentimage_path'] = 'Putanja za {content_image} tag';
$lang['admin']['info_contentimage_path'] = 'Relative to the uploads path, specify a directory name that contains the paths containing files for the {content_image} tag.  This value is used as a default for the dir parameter';
$lang['admin']['editcontent_settings'] = 'Postavke za uređivanje sadržaja';
$lang['admin']['help_page_url'] = 'Specify an alternat URL (relative to the root of your website) that can be used to uniquely identify this page.  i.e: path/to/mypage';
$lang['admin']['help_page_alias'] = 'Alias se koristi kao alternativa za id stranice da jednoznačno identificira stranicu. Mora biti jedinstven među svim stranicama. Alias se također koristi prilikom izgradnje URL-a za stranicu';
$lang['admin']['help_page_searchable'] = 'Ova postavka pokazuje da li tražilica treba indeksirati sadržaj stranice';
$lang['admin']['help_page_cachable'] = 'Performance can be increased by setting as many pages as possible to cachable.  However this cannot be used for pages where content may change on a per request basis';
$lang['admin']['sitedownexcludeadmins'] = 'Izuzmi prijavljene administratore';
$lang['admin']['your_ipaddress'] = 'Va&scaron;a IP adresa je';
$lang['admin']['use_wysiwyg'] = 'Koristite WYSIWYG';
$lang['admin']['contenttype_redirlink'] = 'Preusmjeravajući link';
$lang['admin']['yes'] = 'Da';
$lang['admin']['no'] = 'Ne';
$lang['admin']['listcontent_showalias'] = 'Prikaži &quot;Alias&quot; stupac';
$lang['admin']['listcontent_showurl'] = 'Prikaži &quot;URL&quot; stupac';
$lang['admin']['listcontent_showtitle'] = 'Prikaži naslov stranice ili tekst izbornika';
$lang['admin']['listcontent_settings'] = 'Postavke za listu sadržaja';
$lang['admin']['lctitle_page'] = 'Naslov postojećih stavki sadržaja';
$lang['admin']['lctitle_alias'] = 'Alias postojećih stavki sadržaja. Neke stavke sadržaja nemaju alias';
$lang['admin']['lctitle_url'] = 'URL nastavak za stavku sadržaja (ukoliko je postavljen).';
$lang['admin']['lctitle_template'] = 'Odabrani predložak za stavku sadržaja. Neke stavke sadržaja nemaju predlo&scaron;ke';
$lang['admin']['lctitle_owner'] = 'Vlasnik stavke sadržaja';
$lang['admin']['lctitle_active'] = 'Ukazuje ukoliko je stavka sadržaja aktivna. Neaktivne stavke ne mogu biti prikazane.';
$lang['admin']['lctitle_default'] = 'Odredi stavku sadržaja kojoj se pristupa prilikom zahtjeva za root URL. Može se odrediti samo jedna stavka';
$lang['admin']['lctitle_move'] = 'Dopu&scaron;ta aranžiranje hijerarhije Va&scaron;eg sadržaja';
$lang['admin']['lctitle_multiselect'] = 'Odaberi sve/Odaberi ni&scaron;ta';
$lang['admin']['invalid_url'] = 'URL za navedenu stranicu je neispravan.  Može sadržavati samo brojke, slova, te - ili /';
$lang['admin']['page_url'] = 'URL stranice';
$lang['admin']['runuserplugin'] = 'Izvr&scaron;i korisnikov plugin';
$lang['admin']['output'] = 'Izlaz';
$lang['admin']['run'] = 'Izvr&scaron;i';
$lang['admin']['run_udt'] = 'Izvr&scaron;i ovaj User Defined Tag';
$lang['admin']['stylesheetcopied'] = 'Stylesheet je kopiran';
$lang['admin']['templatecopied'] = 'Predložak je kopiran';
$lang['admin']['ecommerce_desc'] = 'Moduli koji omogućavaju elektronsku trgovinu (E-commerce)';
$lang['admin']['ecommerce'] = 'Elektronska trgovina (E-commerce)';
$lang['admin']['help_function_content_module'] = '<h3>What does this do?</h3>
<p>This content block type allows interfacing with different modules to create different content block types.</p>
<p>Some modules can define content block types for use in module templates.  i.e: The FrontEndUsers module may define a group list content block type.  It will then indicate how you can use the content_module tag to utilize that block type within your templates.</p>
<p><strong>Note:</strong> This block type must be used only with compatible modules.  You should not use this in any way except for as guided by addon modules.</p>';
$lang['admin']['error_parsing_content_blocks'] = 'An error occurred parsing content blocks (perhaps duplicated block names)';
$lang['admin']['error_no_default_content_block'] = 'Predložak nema definiran standardni &#039;content block&#039;. Molimo Vas da dodate {content} tag u predložak stranice.';
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
$lang['admin']['pseudocron_granularity'] = 'Pseudocron finoća';
$lang['admin']['info_pseudocron_granularity'] = 'Ova postavka ukazuje koliko će često sustav poku&scaron;ati obraditi redovno planirane zadatke';
$lang['admin']['cron_request'] = 'Svaki zahtjev';
$lang['admin']['cron_15m'] = '15 minuta';
$lang['admin']['cron_30m'] = '30 minuta';
$lang['admin']['cron_60m'] = '1 sat';
$lang['admin']['cron_120m'] = '2 sata';
$lang['admin']['cron_3h'] = '3 sata';
$lang['admin']['cron_6h'] = '6 sati';
$lang['admin']['cron_12h'] = '12 sati';
$lang['admin']['cron_24h'] = '24 sata';
$lang['admin']['clearcache_taskdescription'] = 'Executed daily, this task will clear cached files that are older than the age preset in the global preferences';
$lang['admin']['clearcache_taskname'] = 'Očisti datoteke iz cache-a';
$lang['admin']['info_autoclearcache'] = 'Navedite cijeli broj. Unesite 0 da onemogućite automatsko či&scaron;ćenje cache-a';
$lang['admin']['autoclearcache'] = 'Automatski očisti cache svakih N dana';
$lang['admin']['listtemplates_pagelimit'] = 'Broj redova po stranici prilikom pregledavanja predložaka';
$lang['admin']['liststylesheets_pagelimit'] = 'Broj redova po stranici prilikom pregledavanja stylesheet-ova';
$lang['admin']['listgcbs_pagelimit'] = 'Broj redova po stranici prilikom pregledavanja Global Content Blocks';
$lang['admin']['insecure'] = 'Nesigurno (HTTP)';
$lang['admin']['secure'] = 'Sigurno (HTTPS)';
$lang['admin']['secure_page'] = 'Koristi HTTPS za ovu stranicu';
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
$lang['admin']['invalidemail'] = 'The email address entered is invalid';
$lang['admin']['info_deletepages'] = 'Note: due to permission restrictions, some of the pages you selected for deletion may not be listed below';
$lang['admin']['info_pagealias'] = 'Odredite jedinstveni alias za ovu stranicu.';
$lang['admin']['info_autoalias'] = 'Ukoliko je ovo polje prazno, alias će biti kreiran.';
$lang['admin']['invalidparent'] = 'You must select a parent page (contact your administrator if you do not see this option).';
$lang['admin']['forgotpwprompt'] = 'Enter your admin username.  An email will then be sent to the email address associated with that username with new login information';
$lang['admin']['info_basic_attributes'] = 'This field allows you to specify which content properties that users without the &quot;Manage All Content&quot; permission are allowed to edit.';
$lang['admin']['basic_attributes'] = 'Osnovna svojstva';
$lang['admin']['no_permission'] = 'You have not permission to perform that function.';
$lang['admin']['bulk_success'] = 'Bulk operation was successfully updated.';
$lang['admin']['no_bulk_performed'] = 'No bulk operation performed.';
$lang['admin']['info_preview_notice'] = 'Warning: This preview panel behaves much like a browser window allowing you to navigate away from the initially previewed page. However, if you do that, you may experience unexpected behaviour. If you navigate away from the initial display and return, you may not see the un-committed content until you make a change to the content in the main tab, and then reload this tab. When adding content, if you navigate away from this page, you will be unable to return, and must refresh this panel.';
$lang['admin']['sitedownexcludes'] = 'Exclude these Addresses from Sitedown Messages';
$lang['admin']['info_sitedownexcludes'] = 'This parameter allows listing a comma separated list of ip addresses or networks that should not be subject to the sitedown mechanism.  This allows administrators to work on a site whilst anonymous visitors receive a sitedown message.<br/><br/>Addresses can be specified in the following formats:<br/>
1. xxx.xxx.xxx.xxx -- (exact IP address)<br/>
2. xxx.xxx.xxx.[yyy-zzz] -- (IP address range)<br/>
3. xxx.xxx.xxx.xxx/nn -- (nnn = number of bits, cisco style.  i.e:  192.168.0.100/24 = entire 192.168.0 class C subnet)';
$lang['admin']['setup'] = 'Napredna postava';
$lang['admin']['handle_404'] = 'Prilagođeno 404 rukovanje';
$lang['admin']['sitedown_settings'] = 'Sitedown postavke';
$lang['admin']['general_settings'] = 'Opće postavke';
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
$lang['admin']['image'] = 'Image';
$lang['admin']['thumbnail'] = 'Thumbnail';
$lang['admin']['searchable'] = 'This page is searchable';
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
  <p>Example: use images from the uploads/images directory.</p>
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
$lang['admin']['errorupdatetemplateallpages'] = 'Predložak nije aktivan';
$lang['admin']['hidefrommenu'] = 'Sakrij iz izbornika';
$lang['admin']['settemplate'] = 'Postavi predložak';
$lang['admin']['text_settemplate'] = 'Postavi drugačiji predložak za odabrane stranice';
$lang['admin']['cachable'] = 'Moguće Cache-irati';
$lang['admin']['noncachable'] = 'Nije moguće Cache-irati';
$lang['admin']['copy_from'] = 'Kopiraj iz';
$lang['admin']['copy_to'] = 'Kopiraj u';
$lang['admin']['copycontent'] = 'Kopiraj sadržaj stavke';
$lang['admin']['md5_function'] = 'md5 funkcija';
$lang['admin']['tempnam_function'] = 'tempnam funkcija';
$lang['admin']['register_globals'] = 'PHP register_globals';
$lang['admin']['output_buffering'] = 'PHP output_buffering';
$lang['admin']['disable_functions'] = 'disable_functions in PHP';
$lang['admin']['xml_function'] = 'Osnovna XML (expat) podr&scaron;ka';
$lang['admin']['magic_quotes_gpc'] = 'Magic quotes for Get/Post/Cookie';
$lang['admin']['magic_quotes_gpc_on'] = 'Single-quote, double quote and backslash are escaped automatically. You can experience problems when saving templates';
$lang['admin']['magic_quotes_runtime'] = 'Magic quotes in runtime';
$lang['admin']['magic_quotes_runtime_on'] = 'Most functions that return data will have quotes escaped with a backslash. You can experience problems';
$lang['admin']['file_get_contents'] = 'Test file_get_contents';
$lang['admin']['check_ini_set'] = 'Test ini_set';
$lang['admin']['check_ini_set_off'] = 'You may have difficulty with some functionality without this capability. This test may fail if safe_mode is enabled';
$lang['admin']['file_uploads'] = 'Otprema datoteka';
$lang['admin']['test_remote_url'] = 'Test za udaljen (remote) URL';
$lang['admin']['test_remote_url_failed'] = 'Možda nećete moći otvoriti datoteku na udaljenom (remote) web serveru.';
$lang['admin']['test_allow_url_fopen_failed'] = 'When allow url fopen is disabled you will not be able to accessing URL object like file using the ftp or http protocol.';
$lang['admin']['connection_error'] = 'Outgoing http connections do not appear to work! There is a firewall or some ACL for external connections?. This will result in module manager, and potentially other functionality failing.';
$lang['admin']['remote_connection_timeout'] = 'Veza je istekla!';
$lang['admin']['search_string_find'] = 'Veza je ispravna!';
$lang['admin']['connection_failed'] = 'Veza nije uspjela!';
$lang['admin']['remote_response_ok'] = 'Udaljen odziv: ok!';
$lang['admin']['remote_response_404'] = 'Udaljen odziv: nije pronađen!';
$lang['admin']['remote_response_error'] = 'Udaljen odziv: gre&scaron;ka error!';
$lang['admin']['notifications_to_handle'] = 'Imate <b>%d</b> neobrađenih obavijesti';
$lang['admin']['notification_to_handle'] = 'Imate <b>%d</b> neobrađenu obavijest';
$lang['admin']['notifications'] = 'Obavijesti';
$lang['admin']['dashboard'] = 'Pogledaj nadzornu ploču';
$lang['admin']['ignorenotificationsfrommodules'] = 'Zanemari obavijesti od ovih modula';
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
$lang['admin']['itsbeensincelogin'] = 'It has been %s since you last logged in';
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
$lang['admin']['info_urlcheckversion'] = 'If this url is the word &quot;none&quot; no checks will be made.<br/>An empty string will result in a default URL being used.';
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
$lang['admin']['help_function_current_date'] = '        <h3 style=&quot;color: red;&quot;>Deprecated</h3>
	 <p>use <code>{$smarty.now|cms_date_format}</code></p>
	<h3>What does this do?</h3>
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
        <p><strong>Deprecated:</strong> This function is deprecated and will be removed in later versions of CMSMS.</p>
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
		<li>ad_slot - slots are an advanced feature of adsense.  Put it here if you use it.</li>
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
$lang['admin']['login_info_title'] = 'Information';
$lang['admin']['login_info'] = 'For the Admin console to work properly';
$lang['admin']['login_info_params'] = '<ol> 
  <li>Cookies must be enabled in your browser</li> 
  <li>Javascript must be enabled in your browser</li> 
  <li>Popup windows must be allowed for the following address:</li> 
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
	<p>This is where the content for your page will be displayed. It&#039;s inserted into the template and changed based on the current page being displayed.</p>
	<h3>How do I use it?</h3>
	<p>Just insert the tag into your template like: <code>{content}</code>.</p>
	<p><strong>The default block <code>{content}</code> is required for proper working. (so without the block-parameter)</strong> To give the block a specific label, use the label-parameter. Additional blocks can be added by using the block-parameter.</p>
	<h3>What parameters does it take?</h3>
	<ul>
		<li><em>(optional) </em>block - Allows you to have more than one content block per page. When multiple content tags are put on a template, that number of edit boxes will be displayed when the page is edited.
<p>Example:</p>
<pre>{content block=&quot;second_content_block&quot; label=&quot;Second Content Block&quot;}</pre>
<p>Now, when you edit a page there will a textarea called &quot;Second Content Block&quot;.</p></li>
		<li><em>(optional) </em>wysiwyg (true/false) - If set to false, then a wysiwyg will never be used while editing this block. If true, then it acts as normal.  Only works when block parameter is used.</li>
		<li><em>(optional) </em>oneline (true/false) - If set to true, then only one edit line will be shown while editing this block. If false, then it acts as normal.  Only works when block parameter is used.</li>
<li><em>(optional) </em>size - Applicable only when the oneline option is used this optional parameter allows you to specify the size of the edit field.  The default value is 50.</li>
		<li><em>(optional) </em>default - Allows you to specify default content for this content blocks (additional content blocks only).</li>
		<li><em>(optional) </em>label - Allows specifying a label for display in the edit content page.</li>
		<li><em>(optional) </em>assign - Assigns the content to a smarty parameter, which you can then use in other areas of the page, or use to test whether content exists in it or not.
<p>Example of passing page content to a User Defined Tag as a parameter:</p></li>
<pre>
         {content assign=pagecontent}
         {table_of_contents thepagecontent=&quot;$pagecontent&quot;}
</pre>
</li>
	</ul>';
$lang['admin']['help_function_cms_version'] = '	<h3>What does this do?</h3>
	<p>This tag is used to insert the current version number of CMS into your template or page.  It doesn&#039;t display any extra besides the version number.</p>
	<h3>How do I use it?</h3>
	<p>This is just a basic tag plugin.  You would insert it into your template or page like so: <code>{cms_version}</code></p>
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
<p>Simply insert this tage into your page or template: <code>{redirect_url to=&#039;http://www.cmsmadesimple.org&#039;}</code></p>';
$lang['admin']['help_function_redirect_page'] = '<h3>What does this do?</h3>
 <p>This plugin allows you to easily redirect to another page.  It is handy inside of smarty conditional logic (for example, redirect to a login page if the user is not logged in.)</p>
<h3>How do I use it?</h3>
<p>Simply insert this tage into your page or template: <code>{redirect_page page=&#039;some-page-alias&#039;}</code></p>';
$lang['admin']['of'] = 'od';
$lang['admin']['first'] = 'Prvi';
$lang['admin']['last'] = 'Zadnji';
$lang['admin']['adminspecialgroup'] = 'Upozorenje: Članovi ove grupe automatski dobivaju sva prava.';
$lang['admin']['disablesafemodewarning'] = 'Onemogući administratorsko upozorenje o &quot;safe modu&quot;';
$lang['admin']['allowparamcheckwarnings'] = 'Dozvoli provjeru parametara za stvaranje poruka upozorenja';
$lang['admin']['date_format_string'] = 'Način zapisa datuma';
$lang['admin']['date_format_string_help'] = 'Način zapisa datuma funkcijom <em>strftime</em>.  Googlajte &#039;strftime&#039;';
$lang['admin']['last_modified_at'] = 'Zadnja promjena';
$lang['admin']['last_modified_by'] = 'Promijenio/la';
$lang['admin']['read'] = 'Čitanje';
$lang['admin']['write'] = 'Pisanje';
$lang['admin']['execute'] = 'Izvođenje';
$lang['admin']['group'] = 'Grupa';
$lang['admin']['other'] = 'Ostalo';
$lang['admin']['event_desc_moduleupgraded'] = 'Poslano nakon nadogradnje modula';
$lang['admin']['event_desc_moduleinstalled'] = 'Poslano nakon instalacije modula';
$lang['admin']['event_desc_moduleuninstalled'] = 'Poslano nakon deinstalacije modula';
$lang['admin']['event_desc_edituserdefinedtagpost'] = 'Poslano nakon promjene korisničke oznaka (taga)';
$lang['admin']['event_desc_edituserdefinedtagpre'] = 'Poslano prije promjene korisničke oznake (taga)';
$lang['admin']['event_desc_deleteuserdefinedtagpre'] = 'Poslano prije brisanja korisničke oznake (taga)';
$lang['admin']['event_desc_deleteuserdefinedtagpost'] = 'Poslano nakon brisanja korisničke oznake (taga)';
$lang['admin']['event_desc_adduserdefinedtagpost'] = 'Poslano nakon umetanja korisničke oznake (taga)';
$lang['admin']['event_desc_adduserdefinedtagpre'] = 'Poslano prije umetanja korisničke oznake (taga)';
$lang['admin']['global_umask'] = 'Maska izrade datoteke (umask)';
$lang['admin']['errorcantcreatefile'] = 'Ne mogu napraviti datoteku (problem s pravima?)';
$lang['admin']['errormoduleversionincompatible'] = 'Modul nije kompatibilan s ovom verzijom sustava';
$lang['admin']['errormodulenotloaded'] = 'Interna pogre&scaron;ka, modul nije instanciran';
$lang['admin']['errormodulenotfound'] = 'Interna pogre&scaron;ka, instanca modula nije pronađena';
$lang['admin']['errorinstallfailed'] = 'Instalacija modula nije uspjela';
$lang['admin']['errormodulewontload'] = 'Pogre&scaron;ka prilikom instanciranja dostupnog modula';
$lang['admin']['frontendlang'] = 'Zadani jezik sučelja';
$lang['admin']['info_edituser_password'] = 'Ovdje promijenite korisničku lozinku';
$lang['admin']['info_edituser_passwordagain'] = 'Ovdje promijenite korisničku lozinku';
$lang['admin']['originator'] = 'Izvornik';
$lang['admin']['module_name'] = 'Ime modula';
$lang['admin']['event_name'] = 'Ime događaja';
$lang['admin']['event_description'] = 'Opis događaja';
$lang['admin']['error_delete_default_parent'] = 'Nije moguće obrisati roditelja zadane stranice';
$lang['admin']['jsdisabled'] = 'Ova funkcija zahtijeva kori&scaron;tenje JavaScripta';
$lang['admin']['order'] = 'Poredak';
$lang['admin']['reorderpages'] = 'Poredaj stranice';
$lang['admin']['reorder'] = 'Poredaj';
$lang['admin']['page_reordered'] = 'Stranica uspje&scaron;no poredana';
$lang['admin']['pages_reordered'] = 'Stranice uspje&scaron;no poredane';
$lang['admin']['sibling_duplicate_order'] = 'Dvije stranice iste razine ne mogu imati isti poredak. Stranice nisu poredane.';
$lang['admin']['no_orders_changed'] = 'Odabrali ste promjenu poretka stranica, no ni&scaron;ta niste promijenili. Poredak nije promijenjen.';
$lang['admin']['order_too_small'] = 'Broj poretka stranice ne može biti 0. Poredak nije promijenjen.';
$lang['admin']['order_too_large'] = 'Broj poretka stranice ne može biti veći od broja stranica na toj razini. Poredak nije promijenjen.';
$lang['admin']['user_tag'] = 'Korisnička oznaka';
$lang['admin']['add'] = 'Dodaj';
$lang['admin']['CSS'] = 'CSS - Stilski list';
$lang['admin']['about'] = 'O';
$lang['admin']['action'] = 'Akcija';
$lang['admin']['actionstatus'] = 'Akcija/Status';
$lang['admin']['active'] = 'Aktivan';
$lang['admin']['addcontent'] = 'Dodaj novi sadržaj';
$lang['admin']['cantremove'] = 'Nije moguće izbrisati';
$lang['admin']['changepermissions'] = 'Promijeni prava';
$lang['admin']['changepermissionsconfirm'] = 'Upozorenje:\n\nOva će akcija poku&scaron;ati osigurati da Web poslužitelj može pisati u sve datoteke modula .\nŽelite li nastaviti?';
$lang['admin']['contentadded'] = 'Sadržaj je uspje&scaron;no dodan u bazu.';
$lang['admin']['contentupdated'] = 'Sadržaj je uspje&scaron;no nadograđen';
$lang['admin']['contentdeleted'] = 'Sadržaj je uspje&scaron;no izbrisan iz baze.';
$lang['admin']['success'] = 'Uspje&scaron;no';
$lang['admin']['addcss'] = 'Dodaj stil';
$lang['admin']['addgroup'] = 'Dodaj novu grupu';
$lang['admin']['additionaleditors'] = 'Dodatni urednici';
$lang['admin']['addtemplate'] = 'Dodaj novi predložak';
$lang['admin']['adduser'] = 'Dodaj novog korisnika';
$lang['admin']['addusertag'] = 'Dodaj korisnički definiranu oznaku';
$lang['admin']['adminaccess'] = 'Administratorski pristup prijavi';
$lang['admin']['adminlog'] = 'Log administratora';
$lang['admin']['adminlogcleared'] = 'Log administratora uspje&scaron;no obrisan';
$lang['admin']['adminlogempty'] = 'Log administratora je prazan';
$lang['admin']['adminsystemtitle'] = 'CMS administratorski sustav';
$lang['admin']['adminpaneltitle'] = 'CMS Made Simple upravljačka ploča';
$lang['admin']['advanced'] = 'Napredno';
$lang['admin']['aliasalreadyused'] = 'Alias se već koristi na drugoj stranici. Odaberite &quot;Alias stranice&quot; u kartici &quot;Mogućnosti&quot; u ne&scaron;to drugo.';
$lang['admin']['aliasmustbelettersandnumbers'] = 'Alias se mora sastojati od slova i brojeva';
$lang['admin']['aliasnotaninteger'] = 'Alias ne može biti cijeli broj';
$lang['admin']['allpagesmodified'] = 'Sve stranice su promijenjene!';
$lang['admin']['assignments'] = 'Dodijeli korisnike';
$lang['admin']['associationexists'] = 'Ova veza već postoji';
$lang['admin']['autoinstallupgrade'] = 'Automatski instaliraj ili nadogradi';
$lang['admin']['back'] = 'Natrag na izbornik';
$lang['admin']['backtoplugins'] = 'Natrag na listu dodataka';
$lang['admin']['cancel'] = 'Poni&scaron;ti';
$lang['admin']['cantchmodfiles'] = 'Ne mogu promijeniti prava na nekim datotekama';
$lang['admin']['cantremovefiles'] = 'Problem pri brisanju datoteka (prava?)';
$lang['admin']['confirmcancel'] = 'Želite li odbaciti promjene? Odaberite OK za odbacivanje promjena. Odaberite Poni&scaron;ti za nastavak uređivanja.';
$lang['admin']['canceldescription'] = 'Odbaci promjene';
$lang['admin']['clearadminlog'] = 'Očisti log administratora';
$lang['admin']['code'] = 'K&ocirc;d';
$lang['admin']['confirmdefault'] = 'Želite li postaviti - %s - kao zadanu stranicu Web sjedi&scaron;ta?';
$lang['admin']['confirmdeletedir'] = 'Želite li obrisati ovaj direktorije i sav njegov sadržaj?';
$lang['admin']['content'] = 'Sadržaj';
$lang['admin']['contentmanagement'] = 'Upravljanje sadržajem';
$lang['admin']['contenttype'] = 'Vrsta sadržaja';
$lang['admin']['copy'] = 'Kopiraj';
$lang['admin']['copytemplate'] = 'Kopiraj predložak';
$lang['admin']['create'] = 'Napravi';
$lang['admin']['createnewfolder'] = 'Napravi novi direktorij';
$lang['admin']['cssalreadyused'] = 'Ovaj naziv CSS-a već postoji';
$lang['admin']['cssmanagement'] = 'Upravljanje CSS-ovima';
$lang['admin']['currentassociations'] = 'Trenutne veze';
$lang['admin']['currentdirectory'] = 'Trenutni direktorij';
$lang['admin']['currentgroups'] = 'Trenutne grupe';
$lang['admin']['currentpages'] = 'Trenutne stranice';
$lang['admin']['currenttemplates'] = 'Trenutni predlo&scaron;ci';
$lang['admin']['currentusers'] = 'Trenutni korisnici';
$lang['admin']['custom404'] = 'Prilagođena 404 poruka o pogre&scaron;ci';
$lang['admin']['database'] = 'Baza podataka';
$lang['admin']['databaseprefix'] = 'Prefiks baze podataka';
$lang['admin']['databasetype'] = 'Vrsta baze podataka';
$lang['admin']['date'] = 'Datum';
$lang['admin']['default'] = 'Unaprijed zadano';
$lang['admin']['delete'] = 'Obri&scaron;i';
$lang['admin']['deleteconfirm'] = 'Želite li obrisati - %s - ?';
$lang['admin']['deleteassociationconfirm'] = 'Želite li obrisati vezu s - %s - ?';
$lang['admin']['deletecss'] = 'Obri&scaron;i CSS';
$lang['admin']['dependencies'] = 'Ovisnosti';
$lang['admin']['description'] = 'Opis';
$lang['admin']['directoryexists'] = 'Ovaj direktorij već postoji.';
$lang['admin']['down'] = 'Dolje';
$lang['admin']['edit'] = 'Uredi';
$lang['admin']['editconfiguration'] = 'Uredi konfiguraciju';
$lang['admin']['editcontent'] = 'Uredi sadržaj';
$lang['admin']['editcss'] = 'Uredi stil';
$lang['admin']['editcsssuccess'] = 'Stil promijenjen';
$lang['admin']['editgroup'] = 'Uredi grupu';
$lang['admin']['editpage'] = 'Uredi stranicu';
$lang['admin']['edittemplate'] = 'Uredi predložak';
$lang['admin']['edittemplatesuccess'] = 'Predložak promijenjen';
$lang['admin']['edituser'] = 'Uredi korisnika';
$lang['admin']['editusertag'] = 'Uredi korisnički deifinirane oznake';
$lang['admin']['usertagadded'] = 'Korisnički definirana oznaka uspje&scaron;no dodana.';
$lang['admin']['usertagupdated'] = 'Korisnički definirana oznaka uspje&scaron;no promijenjena.';
$lang['admin']['usertagdeleted'] = 'Korisnički definirana oznaka uspje&scaron;no obrisana.';
$lang['admin']['email'] = 'E-mail adresa';
$lang['admin']['errorattempteddowngrade'] = 'Instalacija ovog modula smanjila bi verziju. Proces prekinut.';
$lang['admin']['errorchildcontent'] = 'Sadržaj jo&scaron; ima elemente nižih razina. Obri&scaron;ite prvo njih.';
$lang['admin']['errorcopyingtemplate'] = 'Gre&scaron;ka u kopiranju predlo&scaron;ka.';
$lang['admin']['errorcouldnotparsexml'] = 'Pogre&scaron;ka u parsiranju XML datoteke. Uvjerite se da &scaron;aljete .xml datoteku a ne .tar.gz ili .zip datoteku.';
$lang['admin']['errorcreatingassociation'] = 'Pogre&scaron;ka u izradi veze';
$lang['admin']['errorcssinuse'] = 'Ovaj stil se jo&scaron; koristi u predlo&scaron;cima ili stranicama. Prvo izbri&scaron;ite ove veze.';
$lang['admin']['errordefaultpage'] = 'Nije moguće izbrisati trenutnu zadanu stranicu. Prvo odaberite neku drugu.';
$lang['admin']['errordeletingassociation'] = 'Pogre&scaron;ka pri brisanju veze';
$lang['admin']['errordeletingcss'] = 'Pogre&scaron;ka pri brisanju CSS-a';
$lang['admin']['errordeletingdirectory'] = 'Nije moguće obrisati direktorij (problem s pravima?)';
$lang['admin']['errordeletingfile'] = 'Nije moguće obrisati datoteku (problem s pravima?)';
$lang['admin']['errordirectorynotwritable'] = 'Bez dopu&scaron;tenja zapisa u mapu. Mogući uzrok su dopu&scaron;tenja na datotekama i mapama. I    &quot;Safe mode&quot; bi mogao imati utjecaja.';
$lang['admin']['errordtdmismatch'] = 'DTD verzija nedostaje ili nije kompatibilna sa XML datotekom';
$lang['admin']['errorgettingcssname'] = 'Gre&scaron;ka pri dobavljanju naziva Stilskog lista';
$lang['admin']['errorgettingtemplatename'] = 'Gre&scaron;ka pri dobavljanju naziva predlo&scaron;ka';
$lang['admin']['errorincompletexml'] = 'XML datoteka je nepotpuna ili neispravna';
$lang['admin']['uploadxmlfile'] = 'Instaliraj modul putem XML datoteke';
$lang['admin']['cachenotwritable'] = 'Nije dopu&scaron;teno pisanje po &quot;Cache&quot; mapi. Brisanje sadržaja &quot;Cache&quot; mape neće pomoći. Molimo, uredite da mapa tmp/cache dopu&scaron;ta pisanje odn. namjestite chmod na 777. Navjerojatnije morate i onemogućiti safe mode.';
$lang['admin']['modulesnotwritable'] = 'Mapa /modules nema postavljena prava za zapisivanje, ako želite instalirati module putem XML datoteke potrebno je odrediti prava za zapisivanje u mapu /modules - read/write/execute (chmod 777).  Isto tako provjerite je li uključen Safe mode .';
$lang['admin']['noxmlfileuploaded'] = 'Nijedan datoteka nije prene&scaron;ena. Za instalaciju modula putem XML-a potrebno je odabrati .xml datoteku sa Va&scaron;ega računala.';
$lang['admin']['errorinsertingcss'] = 'Gre&scaron;ka kod umetanja Stilskog Lista';
$lang['admin']['errorinsertinggroup'] = 'Gre&scaron;ka kod umetanja Grupe';
$lang['admin']['errorinsertingtag'] = 'Gre&scaron;ka kod umetanja korisničke oznake';
$lang['admin']['errorinsertingtemplate'] = 'Gre&scaron;ka kod umetanja predlo&scaron;ka';
$lang['admin']['errorinsertinguser'] = 'Gre&scaron;ka kod umetanja korisnika';
$lang['admin']['errornofilesexported'] = 'Gre&scaron;ka kod eksportiranja datoteka u xml';
$lang['admin']['errorretrievingcss'] = 'Gre&scaron;ka kod dohvaćanja Stilskog Lista';
$lang['admin']['errorretrievingtemplate'] = 'Gre&scaron;ka kod dohvaćanja predlo&scaron;ka';
$lang['admin']['errortemplateinuse'] = 'Ovaj se predložak trenutno jo&scaron; koristi na stranici. Molimo da najprije uklonite.';
$lang['admin']['errorupdatingcss'] = 'Gre&scaron;ka kod ažururanja Stilskog Lista';
$lang['admin']['errorupdatinggroup'] = 'Gre&scaron;ka kod ažuriranja grupe';
$lang['admin']['errorupdatingpages'] = 'Gre&scaron;ka kod ažuriranja stranica';
$lang['admin']['errorupdatingtemplate'] = 'Gre&scaron;ka kod ažuriranja predlo&scaron;ka';
$lang['admin']['errorupdatinguser'] = 'Gre&scaron;ka kod ažuriranja korisnika';
$lang['admin']['errorupdatingusertag'] = 'Gre&scaron;ka kod ažuriranja korisničke oznake';
$lang['admin']['erroruserinuse'] = 'Korisnik i dalje posjeduje sadržaj na stranici. Molimo promjenite vlasni&scaron;tvo nad stranicom prije brisanja.';
$lang['admin']['eventhandlers'] = 'Događaj';
$lang['admin']['editeventhandler'] = 'Uredi handler događaja';
$lang['admin']['eventhandlerdescription'] = 'Dodijeli korisničke oznake eventima';
$lang['admin']['export'] = 'Izvezi';
$lang['admin']['event'] = 'Događaj';
$lang['admin']['false'] = 'Netočno';
$lang['admin']['settrue'] = 'Postavi kao točno';
$lang['admin']['filecreatedirnodoubledot'] = 'Mapa ne može sadržavati  &#039;..&#039; u nazivu.';
$lang['admin']['filecreatedirnoname'] = 'Mapa mora imati naziv.';
$lang['admin']['filecreatedirnoslash'] = 'Mapa ne može sadržavati &#039;/&#039; or &#039;\&#039; u nazivu.';
$lang['admin']['filemanagement'] = 'Uređivanje dokumenata';
$lang['admin']['filename'] = 'Naziv datoteke';
$lang['admin']['filenotuploaded'] = 'Datoteka nije mogla biti prenesena. Problemi sa dopu&scaron;tenjima ili Safe mode problem?';
$lang['admin']['filesize'] = 'Veličina datoteke';
$lang['admin']['firstname'] = 'Ime';
$lang['admin']['groupmanagement'] = 'Uređivanje grupa';
$lang['admin']['grouppermissions'] = 'Dopu&scaron;tenja po grupama';
$lang['admin']['handler'] = 'Handler (korisniči definirana oznaka)';
$lang['admin']['headtags'] = 'Head oznake';
$lang['admin']['help'] = 'Pomoć';
$lang['admin']['new_window'] = 'novi prozor';
$lang['admin']['helpwithsection'] = '%s Pomoć';
$lang['admin']['helpaddtemplate'] = '<p>A template is what controls the look and feel of your site&#039;s content.</p><p>Create the layout here and also add your CSS in the Stylesheet section to control the look of your various elements.</p>';
$lang['admin']['helplisttemplate'] = '<p>Na ovoj stranici možete uređivati, brisati i stvarati predlo&scaron;ke</p><p>Da biste napravili novi predložak, kliknite na<u>Dodaj novi predložak</u> gumb.</p><p>Ukoliko želite postaviti da sve stranice koriste isti predložak, kliknite na <u>Postavi cijeli Sadržaj</u> link.</p><p>Želite li duplicirati predložak, kliknite na<u>Kopiraj</u> ikonicu i pojaviti će se prozor gdje će biti potrebno unijeti naziv novoga dupliciranoga predlo&scaron;ka.</p>';
$lang['admin']['home'] = 'Doma';
$lang['admin']['homepage'] = 'Početna';
$lang['admin']['hostname'] = 'Naziv host-a';
$lang['admin']['idnotvalid'] = 'Zadani ID je neispravan';
$lang['admin']['imagemanagement'] = 'Upravljanje slikama';
$lang['admin']['informationmissing'] = 'Nedostaje podatak';
$lang['admin']['install'] = 'Instaliraj';
$lang['admin']['invalidcode'] = 'Unesen pogre&scaron;an kod.';
$lang['admin']['illegalcharacters'] = 'Neispravni znakovi u polju %s.';
$lang['admin']['invalidcode_brace_missing'] = 'Nejednak broj zagrada';
$lang['admin']['invalidtemplate'] = 'Predložak je neispravan';
$lang['admin']['itemid'] = 'ID stavke';
$lang['admin']['itemname'] = 'Naziv stavke';
$lang['admin']['language'] = 'Jezik';
$lang['admin']['lastname'] = 'Prezime';
$lang['admin']['logout'] = 'Odjava';
$lang['admin']['loginprompt'] = 'Unesite valjane podatke za pristup Administratorskom sučelju.';
$lang['admin']['logintitle'] = 'Prijava u CMS Made Simple Administraciju';
$lang['admin']['menutext'] = 'Tekst izbornika';
$lang['admin']['missingparams'] = 'Neki parametri nedostaju ili su neispravni';
$lang['admin']['modifygroupassignments'] = 'Uredi dodjele grupama';
$lang['admin']['moduleabout'] = 'O %s modulu';
$lang['admin']['modulehelp'] = 'Pomoć za %s modul';
$lang['admin']['msg_defaultcontent'] = 'Ovdje dodajte kod koji će se pojaviti na svakoj stranici kao zadani sadržaj za sve nove stranice';
$lang['admin']['msg_defaultmetadata'] = 'Ovdje dodajte kod koji će se pojaviti na svakoj stranici kao meta podaci za sve nove stranice';
$lang['admin']['wikihelp'] = 'Podr&scaron;ka zajednice';
$lang['admin']['moduleinstalled'] = 'Modul je već instaliran';
$lang['admin']['moduleinterface'] = '%s Sučelje';
$lang['admin']['modules'] = 'Moduli';
$lang['admin']['move'] = 'Premjesti';
$lang['admin']['name'] = 'Naziv';
$lang['admin']['needpermissionto'] = 'Potrebna su &#039;%s&#039; dopu&scaron;tenja za izvr&scaron;avanje te funkcije';
$lang['admin']['needupgrade'] = 'Nadogradnja neophodna';
$lang['admin']['newtemplatename'] = 'Naziv novoga predlo&scaron;ka';
$lang['admin']['next'] = 'Slijedeće';
$lang['admin']['noaccessto'] = 'Nema pristupa %s';
$lang['admin']['nocss'] = 'Bez stilskog lista';
$lang['admin']['noentries'] = 'Nema unosa';
$lang['admin']['nofieldgiven'] = '%s nije zadan!';
$lang['admin']['nofiles'] = 'Bez dokumenata';
$lang['admin']['nopasswordmatch'] = 'Lozinke se ne podudaraju';
$lang['admin']['norealdirectory'] = 'Nije zadana nijedna postojeća mapa';
$lang['admin']['norealfile'] = 'Nije zadana nijedna postojeća datoteka';
$lang['admin']['notinstalled'] = 'Nijeinstalirano';
$lang['admin']['overwritemodule'] = 'Prepi&scaron;i postojeće module';
$lang['admin']['owner'] = 'Vlasnik';
$lang['admin']['pagealias'] = 'Alias stranice';
$lang['admin']['pagedefaults'] = 'Zadane vrijednosti stranice';
$lang['admin']['pagedefaultsdescription'] = 'Postavi nove zadane vrijednosti stranice';
$lang['admin']['parent'] = 'Roditelj';
$lang['admin']['password'] = 'Lozinka';
$lang['admin']['passwordagain'] = 'Lozinka (ponovno)';
$lang['admin']['permission'] = 'Dopu&scaron;tenje';
$lang['admin']['permissions'] = 'Dopu&scaron;tenje';
$lang['admin']['permissionschanged'] = 'Dopu&scaron;tenja izmjenjena';
$lang['admin']['pluginabout'] = 'O %s oznaci';
$lang['admin']['pluginhelp'] = 'Pomoć za %s oznaku';
$lang['admin']['pluginmanagement'] = 'Uređivanje plugin-ova';
$lang['admin']['prefsupdated'] = 'Preference ažurirane.';
$lang['admin']['preview'] = 'Pretpregled';
$lang['admin']['previewdescription'] = 'Pretpregled promjena';
$lang['admin']['previous'] = 'Prija&scaron;nje';
$lang['admin']['remove'] = 'Ukloni';
$lang['admin']['removeconfirm'] = 'Ova će akcija trajno obrisati datoteke koje čine ovaj modul iz ove instalacije.\nDa li ste sigurni da želite nastaviti?';
$lang['admin']['removecssassociation'] = 'Ukloni povezanost sa Stilskim listom';
$lang['admin']['saveconfig'] = 'Spremi Config';
$lang['admin']['send'] = 'Po&scaron;alji';
$lang['admin']['setallcontent'] = 'Postavi sve stranice';
$lang['admin']['setallcontentconfirm'] = 'Jeste li sigurni da želite postaviti ovaj predložak za sve stranice?';
$lang['admin']['showinmenu'] = 'Prikaži u izborniku';
$lang['admin']['showsite'] = 'Prikaži Stranicu';
$lang['admin']['sitedownmessage'] = 'Poruka u slučaju &quot;uga&scaron;ene&quot; stranice';
$lang['admin']['siteprefs'] = 'Globalne postavke';
$lang['admin']['status'] = 'Stanje';
$lang['admin']['stylesheet'] = 'Stilski list';
$lang['admin']['submit'] = 'Po&scaron;alji';
$lang['admin']['submitdescription'] = 'Spremi promjene';
$lang['admin']['tags'] = 'Oznake';
$lang['admin']['template'] = 'Predložak';
$lang['admin']['templateexists'] = 'Ime predlo&scaron;ka već postoji';
$lang['admin']['templatemanagement'] = 'Upravljanje predlo&scaron;cima';
$lang['admin']['title'] = 'Naslov';
$lang['admin']['tools'] = 'Alati';
$lang['admin']['true'] = 'Istinito';
$lang['admin']['setfalse'] = 'Postavi False';
$lang['admin']['type'] = 'Tip';
$lang['admin']['typenotvalid'] = 'Tip nije ispravan';
$lang['admin']['uninstall'] = 'Deinstaliraj';
$lang['admin']['uninstallconfirm'] = 'Jeste li sigurni da želite deinstalirati ova modul? Naziv:';
$lang['admin']['up'] = 'Gore';
$lang['admin']['upgrade'] = 'Nadogradnja';
$lang['admin']['upgradeconfirm'] = 'Jest li sigurni da želite nadograditi ovo?';
$lang['admin']['uploadfile'] = 'Prenesi datoteku';
$lang['admin']['url'] = 'URL  - putanja';
$lang['admin']['useadvancedcss'] = 'Koristi Napredno Uređivanje Stilova';
$lang['admin']['user'] = 'Korisnik';
$lang['admin']['userdefinedtags'] = 'Oznake definirane od strane korisnika';
$lang['admin']['usermanagement'] = 'Upravljanje Korisnicima';
$lang['admin']['username'] = 'Korisnik';
$lang['admin']['usernameincorrect'] = 'Korisničko ime ili lozinka neispravno';
$lang['admin']['userprefs'] = 'Korisničke preference';
$lang['admin']['usersassignedtogroup'] = 'Korisnik dodjeljen &amp;s grupi';
$lang['admin']['usertagexists'] = 'Oznaka pod tim imenom već postoji. Molimo odaberite drugo ime.';
$lang['admin']['usewysiwyg'] = 'Koristi WYSIWYG za uređivanje sadržaja';
$lang['admin']['version'] = 'Inačica';
$lang['admin']['view'] = 'Pogled';
$lang['admin']['welcomemsg'] = 'Dobro do&scaron;ao/la %s';
$lang['admin']['directoryabove'] = 'mapa iznad trenutačnog nivoa';
$lang['admin']['nodefault'] = 'Zadano nije postavljeno';
$lang['admin']['blobexists'] = 'Opći naziv globalnog bloka sadržaja ne postoji';
$lang['admin']['blobmanagement'] = 'Globalno upravljanje blokovima sadržaja';
$lang['admin']['errorinsertingblob'] = 'Do&scaron;lo je do pogre&scaron;ke pri umetanju globalnog bloka sadržaja';
$lang['admin']['addhtmlblob'] = 'Dodaj globalni blok sadržaja';
$lang['admin']['edithtmlblob'] = 'Uredi globalni blok sadržaja';
$lang['admin']['edithtmlblobsuccess'] = 'Globalni blok sadržaj ažuriran';
$lang['admin']['tagtousegcb'] = 'Oznaka za kori&scaron;tenje ovoga bloka';
$lang['admin']['gcb_wysiwyg'] = 'Omogući GBS WYSIWYG';
$lang['admin']['gcb_wysiwyg_help'] = 'Omogući WYSIWYG uređivač za vrijeme kori&scaron;tenja globalnog bloka sadržaja';
$lang['admin']['filemanager'] = 'Menadžer dokumenata';
$lang['admin']['imagemanager'] = 'Menadžer slika';
$lang['admin']['encoding'] = 'Enkoding';
$lang['admin']['clearcache'] = 'Očisti cache';
$lang['admin']['clear'] = 'Očisti';
$lang['admin']['cachecleared'] = 'Cache oči&scaron;ćen';
$lang['admin']['apply'] = 'Primjeni';
$lang['admin']['applydescription'] = 'Snimi promjene i nastavi s uređivanjem';
$lang['admin']['none'] = 'nijedan';
$lang['admin']['wysiwygtouse'] = 'Odaberi WYSIWYG za kori&scaron;tenje';
$lang['admin']['syntaxhighlightertouse'] = 'Odaberi označavač sintakse za kori&scaron;tenje';
$lang['admin']['hasdependents'] = 'Postoje zavisne datoteke';
$lang['admin']['missingdependency'] = 'Nedostaje zavisna datoteka';
$lang['admin']['minimumversion'] = 'Minimalna verzija';
$lang['admin']['minimumversionrequired'] = 'Minimalna verzija CMSMS potrebna';
$lang['admin']['maximumversion'] = 'Maksimalna verzija';
$lang['admin']['maximumversionsupported'] = 'Maksimalna verzija CMSMS podržana';
$lang['admin']['depsformodule'] = 'Ovisnosti za %s modul';
$lang['admin']['installed'] = 'Instalirano';
$lang['admin']['author'] = 'Autor';
$lang['admin']['changehistory'] = 'Promjeni History';
$lang['admin']['moduleerrormessage'] = 'Poruka gre&scaron;ke za %s modul';
$lang['admin']['moduleupgradeerror'] = 'Do&scaron;lo je do pogre&scaron;ke kod nadogradnje modula';
$lang['admin']['moduleinstallmessage'] = 'Instaliraj poruku za %s modul';
$lang['admin']['moduleuninstallmessage'] = 'Deinstaliraj poruku za %s modul';
$lang['admin']['admintheme'] = 'Administratorska tema';
$lang['admin']['addstylesheet'] = 'Dodaj Stilski List';
$lang['admin']['editstylesheet'] = 'Uredi Stilski List';
$lang['admin']['addcssassociation'] = 'Dodaj Poveznicu sa Stilskim Listom';
$lang['admin']['attachstylesheet'] = 'Pridruži ovaj Stilski list';
$lang['admin']['attachtemplate'] = 'Pridruži ovome predlo&scaron;ku';
$lang['admin']['main'] = 'Glavno';
$lang['admin']['pages'] = 'Stranice';
$lang['admin']['page'] = 'Stranica';
$lang['admin']['files'] = 'Datoteke';
$lang['admin']['layout'] = 'Izgled';
$lang['admin']['usersgroups'] = 'Korisnici i grupe';
$lang['admin']['extensions'] = 'Ekstenzije';
$lang['admin']['preferences'] = 'Preference';
$lang['admin']['admin'] = 'Admin stranice';
$lang['admin']['viewsite'] = 'Vidi stranicu';
$lang['admin']['templatecss'] = 'Dodjeli predlo&scaron;ke Stilskim Listovima';
$lang['admin']['plugins'] = 'Plugin-ovi';
$lang['admin']['movecontent'] = 'Premjesti stranice';
$lang['admin']['module'] = 'Moduli';
$lang['admin']['usertags'] = 'Korisnički definirane oznake';
$lang['admin']['htmlblobs'] = 'Globalni Blokovi Sadržaja';
$lang['admin']['adminhome'] = 'Početna stranica administracije';
$lang['admin']['liststylesheets'] = 'Stilski listovi';
$lang['admin']['preferencesdescription'] = 'Ovdje određujete razne postavke stranice';
$lang['admin']['adminlogdescription'] = 'Pokazuje log o tome tko je &scaron;to radio u administraciji';
$lang['admin']['mainmenu'] = 'Glavni Izbornik';
$lang['admin']['users'] = 'Korisnici';
$lang['admin']['usersdescription'] = 'Ovdje uređujete korisnike';
$lang['admin']['groups'] = 'Grupe';
$lang['admin']['groupsdescription'] = 'Ovdje uređujete grupe';
$lang['admin']['groupassignments'] = 'Grune dodjele';
$lang['admin']['groupassignmentdescription'] = 'Ovdje dodjeljujete korisnike grupama';
$lang['admin']['groupperms'] = 'Grupna dopu&scaron;tenja';
$lang['admin']['grouppermsdescription'] = 'Postavi dopu&scaron;tenja i nivoe pristupa za grupe';
$lang['admin']['pagesdescription'] = 'Ovdje dodajemo i uređujemo stranice i sadržaj';
$lang['admin']['htmlblobdescription'] = 'Globalni blokovi sadržaja su dijlovi sadržaja koje možete postaviti u Va&scaron;e stranice ili predlo&scaron;ke.';
$lang['admin']['templates'] = 'Predlo&scaron;ci';
$lang['admin']['templatesdescription'] = 'Ovdje dodajemo i uređujemo predlo&scaron;ke. Predlo&scaron;ci određuju izgled i pona&scaron;anje stranice.';
$lang['admin']['stylesheets'] = 'Stilski listovi';
$lang['admin']['stylesheetsdescription'] = 'Upravljanje stilskim listovima je napredni način za kori&scaron;tenje CSS-a nezavisno od predložaka.';
$lang['admin']['filemanagerdescription'] = 'Prenesi i uredi datoteke.';
$lang['admin']['imagemanagerdescription'] = 'Prenesi/Uredi i ukloni slike.';
$lang['admin']['moduledescription'] = 'Moduli pro&scaron;iruju CMSMS kako bi omogućili razne oblike prilagođene funkcionalnosti';
$lang['admin']['tagdescription'] = 'Oznake su djelići funkcionalnosti koje se mogu dodati Va&scaron;em sadržaju i/ili predlo&scaron;cima.';
$lang['admin']['usertagdescription'] = 'Oznake koje možete sami kreirati i uređivati za obavljanje određenih zadataka, direktno iz preglednika.';
$lang['admin']['installdirwarning'] = '<em><strong>Upozorenje:</strong></em> instalacijska mapa postoji. Molimo, uklonite ju.';
$lang['admin']['subitems'] = 'Podstavke';
$lang['admin']['extensionsdescription'] = 'Moduli, oznake i ostala fanta zabava.';
$lang['admin']['usersgroupsdescription'] = 'Stavke vezane uz korisnike i grupe';
$lang['admin']['layoutdescription'] = 'Opcije izgleda stranice.';
$lang['admin']['admindescription'] = 'Funkcije administracije stranice.';
$lang['admin']['contentdescription'] = 'Ovdje dodajemo i uređujemo sadržaj';
$lang['admin']['enablecustom404'] = 'Omogući prilagođenu 404 poruku';
$lang['admin']['enablesitedown'] = 'Omogući poruku za &quot;Blac Hawk Down&quot;';
$lang['admin']['bookmarks'] = 'Prečaci';
$lang['admin']['user_created'] = 'Prilagođeni prečaci';
$lang['admin']['forums'] = 'Forumi';
$lang['admin']['wiki'] = 'Wiki stranice';
$lang['admin']['irc'] = 'IRC - Chat';
$lang['admin']['module_help'] = 'Pomoć u vezi Modula';
$lang['admin']['managebookmarks'] = 'Upravljaj prečacima';
$lang['admin']['editbookmark'] = 'Uredi prečace';
$lang['admin']['addbookmark'] = 'Dodaj prečac';
$lang['admin']['recentpages'] = 'Nedavne stranice';
$lang['admin']['groupname'] = 'Naziv grupe';
$lang['admin']['selectgroup'] = 'Odaberi grupu';
$lang['admin']['updateperm'] = 'Ažururaj dopu&scaron;tenja';
$lang['admin']['admincallout'] = 'Administratorski prečaci';
$lang['admin']['showbookmarks'] = 'Pokaži administratorske prečace';
$lang['admin']['hide_help_links'] = 'Skrije linkove za pomoć';
$lang['admin']['hide_help_links_help'] = 'Označi za onemogućavanje Wiki i linkova za pomoć pri kori&scaron;tenju modula u zaglavljima stranice.';
$lang['admin']['showrecent'] = 'Pokaži nedavno kori&scaron;tene stranice';
$lang['admin']['attachtotemplate'] = 'Pridruži Stilski list Predlo&scaron;ku';
$lang['admin']['attachstylesheets'] = 'Pridruži Stilski list';
$lang['admin']['indent'] = 'Napravi uvlake kako za nagla&scaron;avanje hijerarhije';
$lang['admin']['adminindent'] = 'Prikaz Sadržaja';
$lang['admin']['contract'] = 'Sažmi sekciju';
$lang['admin']['expand'] = 'Pro&scaron;iri sekciju';
$lang['admin']['expandall'] = 'Pro&scaron;iri sve sekcije';
$lang['admin']['contractall'] = 'Sažmi sve sekcije';
$lang['admin']['menu_bookmarks'] = '[++]';
$lang['admin']['globalconfig'] = 'Globalne postavke';
$lang['admin']['adminpaging'] = 'Broj stavki sadržaja koje se pojavljuju po stranici u Listi stranica';
$lang['admin']['nopaging'] = 'Prikaži sve stavke';
$lang['admin']['myprefs'] = 'Moja pode&scaron;enja';
$lang['admin']['myprefsdescription'] = 'Ovdje prilagođavate administratorski dio stranice kako bi radio na način na koji želite.';
$lang['admin']['myaccount'] = 'Moj račun';
$lang['admin']['myaccountdescription'] = 'Ovdje ažurirate Va&scaron;e osobne detalje računa.';
$lang['admin']['adminprefs'] = 'Korisnička pode&scaron;enja';
$lang['admin']['adminprefsdescription'] = 'Ovdje postavljate specifična pode&scaron;enja za administraciju stranice.';
$lang['admin']['managebookmarksdescription'] = 'Ovdje upravljate administratorskim prečacima.';
$lang['admin']['options'] = 'Opcije';
$lang['admin']['langparam'] = 'Parameter se koristi za određivanje jezika koji će se prikazati na stranici. Neće svi moduli podržati niti je potrebno.';
$lang['admin']['parameters'] = 'Parametri';
$lang['admin']['mediatype'] = 'Vrsta medija';
$lang['admin']['mediatype_'] = 'Nijedan postavljen: utječe na sve';
$lang['admin']['mediatype_all'] = 'svi : Pogodno za sve uređaje.';
$lang['admin']['mediatype_aural'] = 'zvučno : Namijenjeno sintetizatorima govora.';
$lang['admin']['mediatype_braille'] = 'braille : Namijenjeno za uređaje za slijepe.';
$lang['admin']['mediatype_embossed'] = 'embossed : Namijenjeno za printere za slijepe.';
$lang['admin']['mediatype_handheld'] = 'handheld : Namijenjeno za ručne uređaje';
$lang['admin']['mediatype_print'] = 'print : namijenjeno za stranice, zamućeni materijal i za dokumente koji se gledaju u pregledu prije printanja';
$lang['admin']['mediatype_projection'] = 'projection : Namijenjeno za prezentacijske projekcije, npr. projektori ili tiskanje sa transparencijom.';
$lang['admin']['mediatype_screen'] = 'screen : Namijenjeno primarno za računalne ekrane u boji.';
$lang['admin']['mediatype_tty'] = 'tty : Namijenjeno za medije koji koriste &quot;fixed-pitch character grid&quot;, kao &scaron;to su teleksi i terminali.';
$lang['admin']['mediatype_tv'] = 'tv : Namijenjeno za TV uređaje .';
$lang['admin']['assignmentchanged'] = 'Grupne dodjele su ažurirane.';
$lang['admin']['stylesheetexists'] = 'Stilski list postoji';
$lang['admin']['errorcopyingstylesheet'] = 'Gre&scaron;ka pri kopiranju Stilskog lista';
$lang['admin']['copystylesheet'] = 'Kopiraj Stilski list';
$lang['admin']['newstylesheetname'] = 'Naziv novoga stilskog lista';
$lang['admin']['target'] = 'Odredi&scaron;te';
$lang['admin']['xml'] = 'XML  - XML';
$lang['admin']['xmlmodulerepository'] = 'URL ili ModuleRepository soap poslužitelj';
$lang['admin']['metadata'] = 'Meta podaci';
$lang['admin']['globalmetadata'] = 'Globalni meta podaci';
$lang['admin']['titleattribute'] = 'Naslov (title atribut)';
$lang['admin']['tabindex'] = 'Poredak tabulatora';
$lang['admin']['accesskey'] = 'Tipka za pristup';
$lang['admin']['sitedownwarning'] = '<strong>Warning:</strong> Your site is currently showing a &quot;Site Down for Maintenence&quot; message.  Remove the %s file to resolve this.';
$lang['admin']['deletecontent'] = 'Obri&scaron;i sadržaj';
$lang['admin']['deletepages'] = 'Obrisati ove stranice?';
$lang['admin']['selectall'] = 'Označi sve';
$lang['admin']['selecteditems'] = 'Sa označenim';
$lang['admin']['inactive'] = 'Neaktivno';
$lang['admin']['deletetemplates'] = 'Obri&scaron;i predlo&scaron;ke';
$lang['admin']['templatestodelete'] = 'Ovi predlo&scaron;ci će biti obrisani';
$lang['admin']['wontdeletetemplateinuse'] = 'Ovi se predlo&scaron;ci koriste i stoga neće biti obrisani';
$lang['admin']['deletetemplate'] = 'Obri&scaron;i Stilske listove';
$lang['admin']['stylesheetstodelete'] = 'Ovi će stilski listovi biti obrisani';
$lang['admin']['sitename'] = 'Naziv stranice';
$lang['admin']['siteadmin'] = 'Admnistrator Stranice';
$lang['admin']['images'] = 'Upravitelj slika';
$lang['admin']['blobs'] = 'Globalni blokovi sadržaja';
$lang['admin']['groupmembers'] = 'Dodjele grupama';
$lang['admin']['troubleshooting'] = '(Rije&scaron;avanje problema)';
$lang['admin']['event_desc_loginpost'] = '&Scaron;alje se nakon &scaron;to se korisnik prijavi u administratorsko sučelje';
$lang['admin']['event_desc_logoutpost'] = '&Scaron;alje se nakon &scaron;to se korisnik odjavi iz administratorskog sučelja';
$lang['admin']['event_desc_adduserpre'] = '&Scaron;alje se prije nego li se napravi novi korisnik ';
$lang['admin']['event_desc_adduserpost'] = '&Scaron;alje se nakon &scaron;to se napravi novi korisnik ';
$lang['admin']['event_desc_edituserpre'] = '&Scaron;alje se prije nego li se uredi korisnik';
$lang['admin']['event_desc_edituserpost'] = '&Scaron;alje se nakon &scaron;to se uredi korisnik';
$lang['admin']['event_desc_deleteuserpre'] = '&Scaron;alje se prije nego li se obri&scaron;e korisnik';
$lang['admin']['event_desc_deleteuserpost'] = '&Scaron;alje se nakon &scaron;to se korisnik obri&scaron;e sa iz sustava';
$lang['admin']['event_desc_addgrouppre'] = '&Scaron;alje se prije nego li se stvori nova grupa';
$lang['admin']['event_desc_addgrouppost'] = '&Scaron;alje se nakon &scaron;to se stvori nova grupa';
$lang['admin']['event_desc_changegroupassignpre'] = '&Scaron;alje se prije nego li se snime dodjele grupi';
$lang['admin']['event_desc_changegroupassignpost'] = '&Scaron;alje se nakon &scaron;to se snime dodjele grupi';
$lang['admin']['event_desc_editgrouppre'] = '&Scaron;alje se prije nego li se snime uređenja grupe';
$lang['admin']['event_desc_editgrouppost'] = '&Scaron;alje se nakon &scaron;to se snime uređenja grupe';
$lang['admin']['event_desc_deletegrouppre'] = '&Scaron;alje se prije nego li se grupe obri&scaron;u iz sustava';
$lang['admin']['event_desc_deletegrouppost'] = '&Scaron;alje se nakon &scaron;to se grupa bri&scaron;e iz sustava';
$lang['admin']['event_desc_addstylesheetpre'] = '&Scaron;alje se prije nego li se stvori novi stilski list';
$lang['admin']['event_desc_addstylesheetpost'] = '&Scaron;alje se nakon &scaron;to se stvori novi stilski list';
$lang['admin']['event_desc_editstylesheetpre'] = '&Scaron;alje se prije nego li se snime promjene na stilskom listu';
$lang['admin']['event_desc_editstylesheetpost'] = '&Scaron;alje se nakon &scaron;to se snime promjene na stilskom listu';
$lang['admin']['event_desc_deletestylesheetpre'] = '&Scaron;alje se prije nego li se stilski list obri&scaron;e iz sustava';
$lang['admin']['event_desc_deletestylesheetpost'] = '&Scaron;alje se nakon &scaron;to se stilski list obri&scaron;e iz sustava';
$lang['admin']['event_desc_addtemplatepre'] = '&Scaron;alje se prije nego li se stvori novi predložak';
$lang['admin']['event_desc_addtemplatepost'] = '&Scaron;alje se nakon &scaron;to se stvori novi predložak';
$lang['admin']['event_desc_edittemplatepre'] = '&Scaron;alje se prije nego li se snimi predložak';
$lang['admin']['event_desc_edittemplatepost'] = '&Scaron;alje se nakon &scaron;to se snimi predložak';
$lang['admin']['event_desc_deletetemplatepre'] = '&Scaron;alje se prije nego li se obri&scaron;e predložak';
$lang['admin']['event_desc_deletetemplatepost'] = '&Scaron;alje se nakon &scaron;to se obri&scaron;e predložak';
$lang['admin']['event_desc_templateprecompile'] = '&Scaron;alje se prije nego li se predložak po&scaron;alje smarty-ju na obradu';
$lang['admin']['event_desc_templatepostcompile'] = '&Scaron;alje se nakon &scaron;to je predložak obrađen u smarty-ju';
$lang['admin']['event_desc_addglobalcontentpre'] = '&Scaron;alje se prije nego li se stvori novi globalni blok sadržaja';
$lang['admin']['event_desc_addglobalcontentpost'] = '&Scaron;alje se nakon &scaron;to se stvori novi globalni blok sadržaja';
$lang['admin']['event_desc_editglobalcontentpre'] = '&Scaron;alje se prije nego li se snime uređenja u globalnom bloku sadržaja';
$lang['admin']['event_desc_editglobalcontentpost'] = '&Scaron;alje se nakon &scaron;to se snime uređenja u globalnom bloku sadržaja';
$lang['admin']['event_desc_deleteglobalcontentpre'] = '&Scaron;alje se prije nego li se obri&scaron;e globalni blok sadržaja';
$lang['admin']['event_desc_deleteglobalcontentpost'] = '&Scaron;alje se nakon &scaron;to se obri&scaron;e globalni blok sadržaja';
$lang['admin']['event_desc_globalcontentprecompile'] = '&Scaron;alje se prije nego li se globalni blok sadržaja po&scaron;alje smarty-ju na obradu';
$lang['admin']['event_desc_globalcontentpostcompile'] = '&Scaron;alje se nakon &scaron;to je globalni blok sadržaja obrađen u smarty-ju';
$lang['admin']['event_desc_contenteditpre'] = '&Scaron;alje se prije nego li se snime uređenja sadržaja';
$lang['admin']['event_desc_contenteditpost'] = '&Scaron;alje se nakon &scaron;to se snime uređenja sadržaja';
$lang['admin']['event_desc_contentdeletepre'] = '&Scaron;alje se prije nego li se sadržaj obri&scaron;e iz sustava';
$lang['admin']['event_desc_contentdeletepost'] = '&Scaron;alje se nakon &scaron;to se sadržaj obri&scaron;e iz sustava';
$lang['admin']['event_desc_contentstylesheet'] = '&Scaron;alje se prije nego li se stilski list po&scaron;alje pregledniku';
$lang['admin']['event_desc_contentprecompile'] = '&Scaron;alje se prije nego li se sadržaj po&scaron;alje smarty-ju na obradu';
$lang['admin']['event_desc_contentpostcompile'] = '&Scaron;alje se nakon &scaron;to je sadržaj obrađen u smarty-ju';
$lang['admin']['event_desc_contentpostrender'] = '&Scaron;alje se prije nego li se kombinirani HTMl po&scaron;alej pregledniku';
$lang['admin']['event_desc_smartyprecompile'] = '&Scaron;alje se prije nego li se bilo koji sadržaj namijenjen smarty-ju po&scaron;alje na obradu';
$lang['admin']['event_desc_smartypostcompile'] = '&Scaron;alje se nakon &scaron;to se bilo koji sadržaj namijenjen smarty-ju po&scaron;alje na obradu';
$lang['admin']['event_help_loginpost'] = '<p>&Scaron;alje se nakon &scaron;to se korisnik prijavi u administratorsko sučelje.</p>
<h4>Parametri</h4>
<ul>
<li>&#039;user&#039; - Reference to the affected user object.</li>
</ul>
';
$lang['admin']['event_help_logoutpost'] = '<p>&Scaron;alje se nakon &scaron;to se korisnik odjavi iz administratorskog sučelja.</p>
<h4>Parametri</h4>
<ul>
<li>&#039;user&#039; - Reference to the affected user object.</li>
</ul>
';
$lang['admin']['event_help_adduserpre'] = '<p>&Scaron;alje se prije nego li se stvori novi korisnik.</p>
<h4>Parametri</h4>
<ul>
<li>&#039;user&#039; - Reference to the affected user object.</li>
</ul>
';
$lang['admin']['event_help_adduserpost'] = '<p>&Scaron;alje se nakon &scaron;to se stvori novi korisnik.</p>
<h4>Parameters</h4>
<ul>
<li>&#039;user&#039; - Reference to the affected user object.</li>
</ul>
';
$lang['admin']['event_help_edituserpre'] = '<p>&Scaron;alje se prije nego li se spreme uređenja korisnika.</p>
<h4>Parametri</h4>
<ul>
<li>&#039;user&#039; - Reference to the affected user object.</li>
</ul>
';
$lang['admin']['event_help_edituserpost'] = '<p>&Scaron;alje se nakon &scaron;to se spreme uređenja korisnika.</p>
<h4>Parametri</h4>
<ul>
<li>&#039;user&#039; - Reference to the affected user object.</li>
</ul>
';
$lang['admin']['event_help_deleteuserpre'] = '<p>&Scaron;alje se prije nego li se korisnik obri&scaron;e iz sustava.</p>
<h4>Parametri</h4>
<ul>
<li>&#039;user&#039; - Reference to the affected user object.</li>
</ul>
';
$lang['admin']['event_help_deleteuserpost'] = '<p>&Scaron;alje se nakon &scaron;to se korisnik obri&scaron;e iz sustava.</p>
<h4>Parameters</h4>
<ul>
<li>&#039;user&#039; - Reference to the affected user object.</li>
</ul>
';
$lang['admin']['event_help_addgrouppre'] = '<p>&Scaron;alje se prije nego li se stvori nova grupa.</p>
<h4>Parametri</h4>
<ul>
<li>&#039;group&#039; - Reference to the affected group object.</li>
</ul>
';
$lang['admin']['event_help_addgrouppost'] = '<p>&Scaron;alje se nakon &scaron;to se stvori nova grupa.</p>
<h4>Parametri</h4>
<ul>
<li>&#039;group&#039; - Reference to the affected group object.</li>
</ul>
';
$lang['admin']['event_help_changegroupassignpre'] = '<p>&Scaron;alje se prije nego li se snime dodjele grupi.</p>
<h4>Parameteri</h4>
<ul>
<li>&#039;group&#039; - Reference to the group object.</li>
<li>&#039;users&#039; - Array of references to user objects belonging to the group.</li>
';
$lang['admin']['event_help_changegroupassignpost'] = '<p>&Scaron;alje se nakon &scaron;to se snime dodjele grupi.</p>
<h4>Parametri</h4>
<ul>
<li>&#039;group&#039; - Reference to the affected group object.</li>
<li>&#039;users&#039; - Array of references to user objects now belonging to the affected group.</li>
';
$lang['admin']['event_help_editgrouppre'] = '<p>&Scaron;alje se prije nego li  se snime uređenja grupe.</p>
<h4>Parametri</h4>
<ul>
<li>&#039;group&#039; - Reference to the affected group object.</li>
</ul>
';
$lang['admin']['event_help_editgrouppost'] = '<p>&Scaron;alje se nakon &scaron;to se snime uređenja grupe..</p>
<h4>Parametri</h4>
<ul>
<li>&#039;group&#039; - Reference to the affected group object.</li>
</ul>
';
$lang['admin']['event_help_deletegrouppre'] = '<p>&Scaron;alje se prije nego li se grupe obri&scaron;u iz sustava.</p>
<h4>Parametri</h4>
<ul>
<li>&#039;group&#039; - Reference to the affected group object.</li>
</ul>
';
$lang['admin']['event_help_deletegrouppost'] = '<p>&Scaron;alje se nakon &scaron;to se grupe obri&scaron;u iz sustava.</p>
<h4>Parametri</h4>
<ul>
<li>&#039;group&#039; - Reference to the affected group object.</li>
</ul>
';
$lang['admin']['event_help_addstylesheetpre'] = '<p>&Scaron;alje se prije nego li se stvori novi stilski list.</p>
<h4>Parametri</h4>
<ul>
<li>&#039;stylesheet&#039; - Reference to the affected stylesheet object.</li>
</ul>
';
$lang['admin']['event_help_addstylesheetpost'] = '<p>&Scaron;alje se nakon &scaron;to se stvori novi stilski list.</p>
<h4>Parametri</h4>
<ul>
<li>&#039;stylesheet&#039; - Reference to the affected stylesheet object.</li>
</ul>
';
$lang['admin']['event_help_editstylesheetpre'] = '<p>&Scaron;alje se prije nego li se uređenja stilskog lista snime</p>
<h4>Parametri</h4>
<ul>
<li>&#039;stylesheet&#039; - Reference to the affected stylesheet object.</li>
</ul>
';
$lang['admin']['event_help_editstylesheetpost'] = '<p>&Scaron;alje se nakon &scaron;to se uređenja stilskog lista snime</p>
<h4>Parametri</h4>
<ul>
<li>&#039;stylesheet&#039; - Reference to the affected stylesheet object.</li>
</ul>
';
$lang['admin']['event_help_deletestylesheetpre'] = '<p>&Scaron;alje se prije nego li se stilski list obri&scaron;e iz sustava.</p>
<h4>Parametri</h4>
<ul>
<li>&#039;stylesheet&#039; - Reference to the affected stylesheet object.</li>
</ul>
';
$lang['admin']['event_help_deletestylesheetpost'] = '<p>&Scaron;alje se nakon &scaron;to se stilski list obri&scaron;e iz sustava.</p>
<h4>Parametri</h4>
<ul>
<li>&#039;stylesheet&#039; - Reference to the affected stylesheet object.</li>
</ul>
';
$lang['admin']['event_help_addtemplatepre'] = '<p>&Scaron;alje se prije nego li se stvori novi predložak.</p>
<h4>Parametri</h4>
<ul>
<li>&#039;template&#039; - Reference to the affected template object.</li>
</ul>
';
$lang['admin']['event_help_addtemplatepost'] = '<p>&Scaron;alje se nakon &scaron;to se stvori novi predložak.</p>
<h4>Parametri</h4>
<ul>
<li>&#039;template&#039; - Reference to the affected template object.</li>
</ul>
';
$lang['admin']['event_help_edittemplatepre'] = '<p>&Scaron;alje se prije nego li se uređenja predlo&scaron;ka snime.</p>
<h4>Parametri</h4>
<ul>
<li>&#039;template&#039; - Reference to the affected template object.</li>
</ul>
';
$lang['admin']['event_help_edittemplatepost'] = '<p>&Scaron;alje se nakon &scaron;to se uređenja predlo&scaron;ka snime.</p>
<h4>Parametri</h4>
<ul>
<li>&#039;template&#039; - Reference to the affected template object.</li>
</ul>
';
$lang['admin']['event_help_deletetemplatepre'] = '<p>&Scaron;alje se prije nego li se predložak obri&scaron;e iz sustava.</p>
<h4>Parametri</h4>
<ul>
<li>&#039;template&#039; - Reference to the affected template object.</li>
</ul>
';
$lang['admin']['event_help_deletetemplatepost'] = '<p>&Scaron;alje se nakon &scaron;to se predložak obri&scaron;e iz sustava.</p>
<h4>Parametri</h4>
<ul>
<li>&#039;template&#039; - Reference to the affected template object.</li>
</ul>
';
$lang['admin']['event_help_templateprecompile'] = '<p>&Scaron;alje se prije nego li se predložak po&scaron;alje smarty-ju na obradu</p>
<h4>Parametri</h4>
<ul>
<li>&#039;template&#039; - Reference to the affected template text.</li>
</ul>
';
$lang['admin']['event_help_templatepostcompile'] = '<p>&Scaron;alje se nakon &scaron;to se predložak po&scaron;alje smarty-ju na obradu.</p>
<h4>Parametri</h4>
<ul>
<li>&#039;template&#039; - Reference to the affected template text.</li>
</ul>
';
$lang['admin']['event_help_addglobalcontentpre'] = '<p>&Scaron;alje se prije nego li se stvori novi globalni blok sadržaja.</p>
<h4>Parametri</h4>
<ul>
<li>&#039;global_content&#039; - Reference to the affected global content block object.</li>
</ul>
';
$lang['admin']['event_help_addglobalcontentpost'] = '<p>&Scaron;alje se nakon &scaron;to se stvori novi globalni blok sadržaja</p>
<h4>Parameters</h4>
<ul>
<li>&#039;global_content&#039; - Reference to the affected global content block object.</li>
</ul>
';
$lang['admin']['event_help_editglobalcontentpre'] = '<p>&Scaron;alje se prije nego li se uređenja globalnog bloka sadržaja snime.</p>
<h4>Parametri</h4>
<ul>
<li>&#039;global_content&#039; - Reference to the affected global content block object.</li>
</ul>
';
$lang['admin']['event_help_editglobalcontentpost'] = '<p>&Scaron;alje se nakon &scaron;to se uređenja globalnog bloka sadržaja snime.</p>
<h4>Parametri</h4>
<ul>
<li>&#039;global_content&#039; - Reference to the affected global content block object.</li>
</ul>
';
$lang['admin']['event_help_deleteglobalcontentpre'] = '<p>&Scaron;alje se prije nego li se globalni blok sadržaja obri&scaron;e.</p>
<h4>Parametri</h4>
<ul>
<li>&#039;global_content&#039; - Reference to the affected global content block object.</li>
</ul>
';
$lang['admin']['event_help_deleteglobalcontentpost'] = '<p>&Scaron;alje se nakon &scaron;to se globalni blok sadržaja obri&scaron;e.</p>
<h4>Parameters</h4>
<ul>
<li>&#039;global_content&#039; - Reference to the affected global content block object.</li>
</ul>
';
$lang['admin']['event_help_globalcontentprecompile'] = '<p>&Scaron;alje se prije nego li se globalni blok sadržaja po&scaron;alje smarty-ju na obradu.</p>
<h4>Parametri</h4>
<ul>
<li>&#039;global_content&#039; - Reference to the affected global content block text.</li>
</ul>
';
$lang['admin']['event_help_globalcontentpostcompile'] = '<p>&Scaron;alje se nakon &scaron;to se globalni blok sadržaja po&scaron;alje smarty-ju na obradu.</p>
<h4>Parameters</h4>
<ul>
<li>&#039;global_content&#039; - Reference to the affected global content block text.</li>
</ul>
';
$lang['admin']['event_help_contenteditpre'] = '<p>&Scaron;alje se prije nego li se uređenja sadržaja snime.</p>
<h4>Parametri</h4>
<ul>
<li>&#039;global_content&#039; - Reference to the affected content object.</li>
</ul>
';
$lang['admin']['event_help_contenteditpost'] = '<p>&Scaron;alje se nakon &scaron;to se uređenja sadržaja snime</p>
<h4>Parametri</h4>
<ul>
<li>&#039;content&#039; - Reference to the affected content object.</li>
</ul>
';
$lang['admin']['event_help_contentdeletepre'] = '<p>&Scaron;alje se prije nego li se sadržaj obri&scaron;e iz sustava.</p>
<h4>Parametri</h4>
<ul>
<li>&#039;content&#039; - Reference to the affected content object.</li>
</ul>
';
$lang['admin']['event_help_contentdeletepost'] = '<p>&Scaron;alje se nakon &scaron;to se sadržaj obri&scaron;e iz sustava.</p>
<h4>Parametri</h4>
<ul>
<li>&#039;content&#039; - Reference to the affected content object.</li>
</ul>
';
$lang['admin']['event_help_contentstylesheet'] = '<p>&Scaron;alje se prije nego li se stilski list po&scaron;alje pregledniku .</p>
<h4>Parametri</h4>
<ul>
<li>&#039;content&#039; - Reference to the affected stylesheet text.</li>
</ul>
';
$lang['admin']['event_help_contentprecompile'] = '<p>&Scaron;alje se prije nego li se sadržaj po&scaron;alje smarty-ju na obradu.</p>
<h4>Parametri</h4>
<ul>
<li>&#039;content&#039; - Reference to the affected content text.</li>
</ul>
';
$lang['admin']['event_help_contentpostcompile'] = '<p>&Scaron;alje se nakon &scaron;to se sadržaj po&scaron;alje smarty-ju na obradu.</p>
<h4>Parameters</h4>
<ul>
<li>&#039;content&#039; - Reference to the affected content text.</li>
</ul>
';
$lang['admin']['event_help_contentpostrender'] = '<p>&Scaron;alje se prije nego li se kombinirani HTML po&scaron;alje pregledniku.</p>
<h4>Parametri</h4>
<ul>
<li>&#039;content&#039; - Reference to the html text.</li>
</ul>
';
$lang['admin']['event_help_smartyprecompile'] = '<p>&Scaron;alje se prije nego li se bilo koji sadržaj namijenjen smarty-ju po&scaron;alje na obradu.</p>
<h4>Parametri</h4>
<ul>
<li>&#039;content&#039; - Reference to the affected text.</li>
</ul>
';
$lang['admin']['event_help_smartypostcompile'] = '<p>&Scaron;alje se nakon &scaron;to se bilo koji sadržaj namijenjen smarty-ju po&scaron;alje na obradu.</p>
<h4>Parameters</h4>
<ul>
<li>&#039;content&#039; - Reference to the affected text.</li>
</ul>
';
$lang['admin']['filterbymodule'] = 'Filtriraj po modulu';
$lang['admin']['showall'] = 'Pokaži sve';
$lang['admin']['core'] = 'Jezgra (Core)';
$lang['admin']['defaultpagecontent'] = 'Zadani sadržaj stranice';
$lang['admin']['file_url'] = 'Poveznica do dokumanta (umjesto URL-a)';
$lang['admin']['no_file_url'] = 'Nijedan (Koristi URL iznad)';
$lang['admin']['defaultparentpage'] = 'Zadana roditeljska stranica';
$lang['admin']['error_udt_name_whitespace'] = 'Gre&scaron;ka: Korisnički definirane oznake ne mogu imati razmak u nazivu.';
$lang['admin']['warning_safe_mode'] = '<strong><em>UPOZORENJE:</em></strong> PHP Safe mode je omogućen.  Ovo će uzrokovati pote&scaron;koće pri prijenosu datoteka putem sučelja preglednika, uključujući slike, teme i module. Savjetujemo da kontaktirate administratora za onemogućavanje &quot;Safe mode-a&quot;';
$lang['admin']['test'] = 'Isprobaj';
$lang['admin']['results'] = 'Rezultati';
$lang['admin']['untested'] = 'Nije isprobano';
$lang['admin']['unknown'] = 'Nepoznato';
$lang['admin']['download'] = 'Preuzmi';
$lang['admin']['frontendwysiwygtouse'] = 'Frontend WYSIWYG editor';
$lang['admin']['all_groups'] = 'Sve grupe';
$lang['admin']['error_type'] = 'Tip gre&scaron;ke';
$lang['admin']['contenttype_errorpage'] = 'Stranica gre&scaron;ke';
$lang['admin']['errorpagealreadyinuse'] = 'Kod gre&scaron;ke je već u uporabi';
$lang['admin']['404description'] = 'Stranica nije pronađena';
$lang['admin']['usernotfound'] = 'Korisnik nije pronađen.';
$lang['admin']['passwordchange'] = 'Molimo da unesete novu lozinku';
$lang['admin']['recoveryemailsent'] = 'Email je poslan na zabilježenu adresu. Molimo Vas da provjerite sandučić po&scaron;te za dodatna uputstva.';
$lang['admin']['errorsendingemail'] = 'Gre&scaron;ka prilikom slanja emaila. Molimo kontaktiraje administratora.';
$lang['admin']['passwordchangedlogin'] = 'Lozinka je promijenjena.  Prijavite se koristeći nove podatke.';
$lang['admin']['nopasswordforrecovery'] = 'Korisnik nema postavljenu email adresu. Povratak lozinke nije moguć. Molimo kontaktirajte Va&scaron;eg administratora.';
$lang['admin']['lostpw'] = 'Zaboravili ste lozinku?';
$lang['admin']['lostpwemailsubject'] = '[%s] Povratak lozinke';
$lang['admin']['lostpwemail'] = 'You are recieving this e-mail because a request has been made to change the (%s) password associated with this user account (%s).  If you would like to reset the password for this account simply click on the link below or paste it into the url field on your favorite browser:
%s

If you feel this is incorrect or made in error, simply ignore the email and nothing will change.';
$lang['admin']['utma'] = '156861353.257390769.1275643143.1286812821.1286816162.121';
$lang['admin']['utmz'] = '156861353.1285738088.98.14.utmcsr=feedburner|utmccn=Feed: cmsmadesimple/blog (CMS Made Simple)|utmcmd=feed';
$lang['admin']['qca'] = 'P0-1982634597-1275643142955';
$lang['admin']['utmc'] = '156861353';
$lang['admin']['utmb'] = '156861353';
?>