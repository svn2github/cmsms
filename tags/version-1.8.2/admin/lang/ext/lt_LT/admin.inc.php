<?php
$lang['admin']['listtemplates_pagelimit'] = 'Eilučių skaičius puslapyje rodant &scaron;ablonus';
$lang['admin']['liststylesheets_pagelimit'] = 'Eilučių skaičius puslapyje rodant stilius';
$lang['admin']['listgcbs_pagelimit'] = 'Number of rows per page when viewing Global Content Blocks';
$lang['admin']['insecure'] = 'Insecure (HTTP)';
$lang['admin']['secure'] = 'Secure (HTTPS)';
$lang['admin']['secure_page'] = 'Use HTTPS for this page';
$lang['admin']['thumbnail_width'] = 'Miniatiūros plotis';
$lang['admin']['thumbnail_height'] = 'TMiniatiūros auk&scaron;tis';
$lang['admin']['E_STRICT'] = 'Is E_STRICT disabled in error_reporting';
$lang['admin']['test_estrict_failed'] = 'E_STRICT is enabled in the error_reporting';
$lang['admin']['info_estrict_failed'] = 'Some libraries that CMSMS uses do not work well with E_STRICT.  Please disable this before continuing';
$lang['admin']['E_DEPRECATED'] = 'Is E_DEPRECATED disabled in error_reporting';
$lang['admin']['test_edeprecated_failed'] = 'E_DEPRECATED is enabled';
$lang['admin']['info_edeprecated_failed'] = 'If E_DEPRECATED is enabled in your error reporting users will see alot of warning messages that could effect the display and functionalty';
$lang['admin']['session_use_cookies'] = 'Sessions are allowed to use Cookies';
$lang['admin']['errorgettingcontent'] = 'Could not retrieve information for the specified content object';
$lang['admin']['errordeletingcontent'] = 'Error deleting content (either this page has children or is the default content)';
$lang['admin']['invalidemail'] = 'Įvestas e. pa&scaron;to adresas yra netteisingas';
$lang['admin']['info_deletepages'] = 'Note: due to permission restrictions, some of the pages you selected for deletion may not be listed below';
$lang['admin']['info_pagealias'] = '&Scaron;iam puslapiui nurodykite unikalų alias&#039;ą.';
$lang['admin']['info_autoalias'] = 'Jei &scaron;itas laukas tu&scaron;čias, tai alias&#039;as bus sukurtas automati&scaron;kai.';
$lang['admin']['invalidparent'] = 'You must select a parent page (contact your administrator if you do not see this option).';
$lang['admin']['forgotpwprompt'] = 'Enter your admin username.  An email will then be sent to the email address associated with that username with new login information';
$lang['admin']['info_basic_attributes'] = 'This field allows you to specify which content properties that users without the &quot;Modify Page Structure&quot; permission are allowed to edit.';
$lang['admin']['basic_attributes'] = 'Pagrindinės savybės';
$lang['admin']['no_permission'] = 'Jūs neturite leidimo vykdyti &scaron;ią funkciją.';
$lang['admin']['bulk_success'] = 'Masinis veiksmas buvo sėkmingai atnaujintas.';
$lang['admin']['no_bulk_performed'] = 'Jokų masinių veiksmų nebuvo atlikta.';
$lang['admin']['info_preview_notice'] = 'Warning: This preview panel behaves much like a browser window allowing you to navigate away from the initially previewed page. However, if you do that, you may experience unexpected behaviour. If you navigate away from the initial display and return, you may not see the un-committed content until you make a change to the content in the main tab, and then reload this tab. When adding content, if you navigate away from this page, you will be unable to return, and must refresh this panel.';
$lang['admin']['sitedownexcludes'] = 'Nerodyti Sitedown prane&scaron;imų &scaron;iems adresams';
$lang['admin']['info_sitedownexcludes'] = 'This parameter allows listing a comma separated list of ip addresses or networks that should not be subject to the sitedown mechanism.  This allows administrators to work on a site whilst anonymous visitors receive a sitedown message.<br/><br/>Addresses can be specified in the following formats:<br/>
1. xxx.xxx.xxx.xxx -- (exact IP address)<br/>
2. xxx.xxx.xxx.[yyy-zzz] -- (IP address range)<br/>
3. xxx.xxx.xxx.xxx/nn -- (nnn = number of bits, cisco style.  i.e:  192.168.0.100/24 = entire 192.168.0 class C subnet)';
$lang['admin']['setup'] = 'Sudėtingesnė sąranka';
$lang['admin']['handle_404'] = 'Custom 404 Handling';
$lang['admin']['sitedown_settings'] = 'Sitedown nustatymai';
$lang['admin']['general_settings'] = 'Pagrindiniai nustatymai';
$lang['admin']['help_function_page_attr'] = '<h3>What does this do?</h3>
<p>This tag can be used to return the value of the attributes of a certain page.</p>
<h3>How do I use it?</h3>
<p>Insert the tag into the template like: <code>{page_attr key=&quot;extra1&quot;}</code>.</p>
<h3>What parameters does it take?</h3>
<ul>
  <li><strong>key [required]</strong> The key to return the attribute of.</li>
</ul>';
$lang['admin']['forge'] = 'Forge';
$lang['admin']['disable_wysiwyg'] = 'Nerodyti WYSIWYG redaktoriaus &scaron;iam puslapiui (nepaisant &scaron;ablono ir naudotojo nustatymų)';
$lang['admin']['help_function_page_image'] = '<h3>What does this do?</h3>
<p>This tag can be used to return the value of the image or thumbnail fields of a certain page.</p>
<h3>How do I use it?</h3>
<p>Insert the tag into the template like: <code>{page_image}</code>.</p>
<h3>What parameters does it take?</h3>
<ul>
  <li>thumbnail - Optionally display the value of the thumbnail property instead of the image property.</li>
</ul>';
$lang['admin']['pagelink_circular'] = 'A page link cannot list another page link as its destination';
$lang['admin']['destinationnotfound'] = 'Pasirinktas puslapis nerastas arba yra neteisingas';
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
$lang['admin']['sqlerror'] = 'SQL klaida  %s';
$lang['admin']['image'] = 'Vaizdas';
$lang['admin']['thumbnail'] = 'Miniatiūra';
$lang['admin']['searchable'] = '&Scaron;is puslapis naudojamas paie&scaron;kai';
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
$lang['admin']['errorupdatetemplateallpages'] = '&Scaron;ablonas neaktyvus';
$lang['admin']['hidefrommenu'] = 'Nerodyti meniu';
$lang['admin']['settemplate'] = 'Nustatyti &scaron;abloną';
$lang['admin']['text_settemplate'] = 'Nustatyti kitą &scaron;abloną pasirinktiems puslapiams';
$lang['admin']['cachable'] = 'Ke&scaron;uojamas';
$lang['admin']['noncachable'] = 'Neke&scaron;uojamas';
$lang['admin']['copy_from'] = 'Kopijuoti i&scaron;';
$lang['admin']['copy_to'] = 'Kopijuoti į';
$lang['admin']['copycontent'] = 'Kopijuoti turinio elementą';
$lang['admin']['md5_function'] = 'md5 funkcija';
$lang['admin']['tempnam_function'] = 'tempnam funkcija';
$lang['admin']['register_globals'] = 'PHP register_globals';
$lang['admin']['output_buffering'] = 'PHP output_buffering';
$lang['admin']['disable_functions'] = 'disable_functions in PHP';
$lang['admin']['xml_function'] = 'Pagrindinis XML (expat) palaikymas';
$lang['admin']['magic_quotes_gpc'] = 'Magic quotes for Get/Post/Cookie';
$lang['admin']['magic_quotes_gpc_on'] = 'Single-quote, double quote and backslash are escaped automatically. You can to have problems in save templates';
$lang['admin']['magic_quotes_runtime'] = 'Magic quotes in runtime';
$lang['admin']['magic_quotes_runtime_on'] = 'Most functions that return data will have quotes escaped with a backslash. You can to have problems';
$lang['admin']['file_get_contents'] = 'Testuojamas file_get_contents';
$lang['admin']['check_ini_set'] = 'Testuojamas ini_set';
$lang['admin']['check_ini_set_off'] = 'You may have difficulty with some functionality without this capability. This test may fail if safe_mode is enabled';
$lang['admin']['file_uploads'] = 'Bylų atsiuntimas';
$lang['admin']['test_remote_url'] = 'Testuoti nutolusį URL';
$lang['admin']['test_remote_url_failed'] = 'Jūs tikriausiai negalite atidaryti failo nutolusiame web serveryje.';
$lang['admin']['test_allow_url_fopen_failed'] = 'When allow url fopen is disabled you will not be able to accessing URL object like file using the ftp or http protocol.';
$lang['admin']['connection_error'] = 'Outgoing http connections do not appear to work! There is a firewall or some ACL for external connections?. This will result in module manager, and potentially other functionality failing.';
$lang['admin']['remote_connection_timeout'] = 'Jungimosi laikas baigėsi';
$lang['admin']['search_string_find'] = 'Susijungimas tvarkoje!';
$lang['admin']['connection_failed'] = 'Susijungimas nepavyko!';
$lang['admin']['remote_response_ok'] = 'Nuotolinis atsakas tvarkoje!';
$lang['admin']['remote_response_404'] = 'Nuotolinis atsakas nerastas!';
$lang['admin']['remote_response_error'] = 'Nuotolinio atsako klaida!';
$lang['admin']['notifications_to_handle'] = 'Jūs turite <b>%d</b> prane&scaron;imų';
$lang['admin']['notification_to_handle'] = 'Jūs turite <b>%d</b> prane&scaron;imą';
$lang['admin']['notifications'] = 'Prane&scaron;imai';
$lang['admin']['dashboard'] = 'Žiūrėti prane&scaron;imus';
$lang['admin']['ignorenotificationsfrommodules'] = 'Ignoruoti &scaron;ių modulių prane&scaron;imus';
$lang['admin']['admin_enablenotifications'] = 'Allow users to view notifications<br/><em>(notifications will be displayed on all admin pages)</em>';
$lang['admin']['enablenotifications'] = 'Leisti naudotojo prane&scaron;imus administratoriaus sekcijoje';
$lang['admin']['test_check_open_basedir_failed'] = 'Open basedir restrictions are in effect. You may have difficulty with some addon functionality with this restriction';
$lang['admin']['config_writable'] = 'config.php writable. It is more safe if you change permission to read-only';
$lang['admin']['caution'] = 'Dėmesio';
$lang['admin']['create_dir_and_file'] = 'Checking if the httpd process can create a file inside of a directory it created';
$lang['admin']['os_session_save_path'] = 'No check because OS path';
$lang['admin']['unlimited'] = 'Neribota';
$lang['admin']['open_basedir'] = 'PHP Open Basedir';
$lang['admin']['open_basedir_active'] = 'No check because open basedir active';
$lang['admin']['invalid'] = 'Neteisinga';
$lang['admin']['checksum_passed'] = 'All checksums match those in the uploaded file';
$lang['admin']['error_retrieving_file_list'] = 'Klaida guanant failų sąra&scaron;ą';
$lang['admin']['files_checksum_failed'] = 'Negali būti patikrinta kontrolinė suma failams';
$lang['admin']['failure'] = 'Nesėkmė';
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
$lang['admin']['page_metadata'] = 'Puslapiui skirti Metaduomenys';
$lang['admin']['pagedata_codeblock'] = '&Scaron;iam puslapiui būdingi Smarty duomenys arba logika';
$lang['admin']['error_uploadproblem'] = 'Atsiuntimo metu įvyko klaida';
$lang['admin']['error_nofileuploaded'] = 'Bylos neįkeltos';
$lang['admin']['files_failed'] = 'Bylos nepraėjo md5sum tikrinimo';
$lang['admin']['files_not_found'] = 'Bylos nerastos';
$lang['admin']['info_generate_cksum_file'] = '&Scaron;i funkcija leis jums generuoti checksum bylas ir i&scaron;saugo jūsų kompiuteryje vėlesniam patvirtinimui. Tai turėtų būt padaroma tik prie&scaron; svetainės paleidimą, ir/ar po bet kokio atnaujinimo, ar pagrindinių pakeitimų.';
$lang['admin']['info_validation'] = 'This function will compare the checksums found in the uploaded file with the files on the current installation.  It can assist in finding problems with uploads, or exactly what files were modified if your system has been hacked.  A checksum file is generated for each release of CMS Made simple from version 1.4 on.';
$lang['admin']['download_cksum_file'] = 'Atsisiųsti Checksum bylą';
$lang['admin']['perform_validation'] = 'Atlikti patvirtinimą';
$lang['admin']['upload_cksum_file'] = 'Atsiųsti Checksum bylą';
$lang['admin']['checksumdescription'] = 'Patvirtinkite CMS bylų vientisumą, lygindamasis su žinomomis kontrolinėmis checksums';
$lang['admin']['system_verification'] = 'Sistemos Patikrinimas';
$lang['admin']['extra1'] = 'Papildomas puslapio požymis 1';
$lang['admin']['extra2'] = 'Papildomas puslapio požymis 2';
$lang['admin']['extra3'] = 'Papildomas puslapio požymis 3';
$lang['admin']['start_upgrade_process'] = 'Pradėti atnaujino procesą';
$lang['admin']['warning_upgrade'] = '<em><strong>Įspėjimas:</strong></em> CMSMS reikia atnaujinti';
$lang['admin']['warning_upgrade_info1'] = 'Jūs dabar naudojate schemos versija %s. ir jums reikia atnaujinti iki  %s versijos';
$lang['admin']['warning_upgrade_info2'] = 'Pra&scaron;ome paspausti &scaron;ią nuorodą: %s.';
$lang['admin']['warning_mail_settings'] = 'Jūsų pa&scaron;to nuostatos nenustatytos. Tai įtakos jūsų svetainės galimybes siųsti e. pa&scaron;to žinutes. Jums reiktų eiti <a href="%s">Plėtiniai >> CMSMailer modulis</a> ir nustatyti pa&scaron;to nuostatas pagal jūsų hostingo informaciją.
';
$lang['admin']['view_page'] = 'Peržiūrėti &scaron;į puslapį naujame lange';
$lang['admin']['off'] = 'I&scaron;jungti';
$lang['admin']['on'] = 'Įjungti';
$lang['admin']['invalid_test'] = 'Klaidinta testinė parametrų reik&scaron;mė!';
$lang['admin']['copy_paste_forum'] = 'Peržiūrėti tekstinę ataskaita <em>(tinkama kopijuoti į forumo įra&scaron;ą)</em>';
$lang['admin']['permission_information'] = 'Informacija apie leidimus';
$lang['admin']['server_os'] = 'Serverio Operacinė Sistema';
$lang['admin']['server_api'] = 'Serverio API';
$lang['admin']['server_software'] = 'Serverio Programinė įranga';
$lang['admin']['server_information'] = 'Serverio Informacija';
$lang['admin']['session_save_path'] = 'Sesijos i&scaron;saugojimo kelias';
$lang['admin']['max_execution_time'] = 'Maksimalus vykdymo laikas';
$lang['admin']['gd_version'] = 'GD versija';
$lang['admin']['upload_max_filesize'] = 'Maksimalus atsiuntimo dydis';
$lang['admin']['post_max_size'] = 'Maksimalus Įra&scaron;o dydis';
$lang['admin']['memory_limit'] = 'PHP Atminities Limitas';
$lang['admin']['server_db_type'] = 'Severio duomenų bazė';
$lang['admin']['server_db_version'] = 'Severio duomenų bazės versija';
$lang['admin']['phpversion'] = 'PHP versija';
$lang['admin']['safe_mode'] = 'PHP Safe moda';
$lang['admin']['php_information'] = 'PHP informacija';
$lang['admin']['cms_install_information'] = 'CMS Įdiegimo informacija';
$lang['admin']['cms_version'] = 'CMS versija';
$lang['admin']['installed_modules'] = 'Įdiegti moduliai';
$lang['admin']['config_information'] = 'Config informacija';
$lang['admin']['systeminfo_copy_paste'] = 'Pra&scaron;ome nukopijuoti &scaron;į tekstą į forumo prane&scaron;imą';
$lang['admin']['help_systeminformation'] = 'Žemiau patekta informacija yra surinkta i&scaron; įvairių &scaron;altinių. Ji padės jums surasti dominančią informacija kai bandysite nustatyti problemą ar pra&scaron;ysite pagalbos CMS Made Simple įdiegimui.';
$lang['admin']['systeminfo'] = 'Sistemos Informacija';
$lang['admin']['systeminfodescription'] = 'Rodo įvairią informacija apie jūsų sistemą kuri gali būt naudinga sprendžiant problemas.';
$lang['admin']['welcome_user'] = 'Būk pasveikintas';
$lang['admin']['itsbeensincelogin'] = 'Praėjo %s nuo paskutinio apsilankymo';
$lang['admin']['days'] = 'dienos';
$lang['admin']['day'] = 'diena';
$lang['admin']['hours'] = 'valandos';
$lang['admin']['hour'] = 'valanda';
$lang['admin']['minutes'] = 'minutės';
$lang['admin']['minute'] = 'minutė';
$lang['admin']['help_css_max_age'] = '&Scaron;is parametras turėtų būt nustatytas auk&scaron;tas statinėms svetainėms ir nustatytas 0 kuriamoms svetainėms';
$lang['admin']['css_max_age'] = 'Maksimalus laikas (sekundėmis) kiek nar&scaron;yklė ke&scaron;uos stiliaus bylas';
$lang['admin']['error'] = 'Klaida';
$lang['admin']['clear_version_check_cache'] = 'I&scaron;valyti bet kokia ke&scaron;uota versijos tikrinimo informacija';
$lang['admin']['new_version_available'] = '<em>Prane&scaron;imas:</em> I&scaron;leista nauja CMS Made Simple versija. Pra&scaron;ome prane&scaron;ti svetainės administratoriui.';
$lang['admin']['info_urlcheckversion'] = 'Jei &scaron;is adresas lygus žodžiui &quot;none&quot;, patikrinimas nebus vykdomas.<br />Vietoj tu&scaron;čios reik&scaron;mės bus naudojamas numatytais adresas.';
$lang['admin']['urlcheckversion'] = 'Patikrinkite ar yra nauja CMS versija, naudodamiesi &scaron;iuo adresu';
$lang['admin']['master_admintheme'] = 'Įprasta administratoriaus tema (prisijugimo puslapiui ir naujiems nariams)';
$lang['admin']['contenttype_separator'] = 'Skirtukas';
$lang['admin']['contenttype_sectionheader'] = 'Sektoriaus antra&scaron;tė';
$lang['admin']['contenttype_link'] = 'I&scaron;orinė nuoroda';
$lang['admin']['contenttype_content'] = 'Turinys';
$lang['admin']['contenttype_pagelink'] = 'Vidinė svetainės nuoroda';
$lang['admin']['nogcbwysiwyg'] = 'Neleisti WYSIWYG redaktoriaus html intarpuose';
$lang['admin']['destination_page'] = 'Tikslo puslapis';
$lang['admin']['additional_params'] = 'Papildomi parametrai';
$lang['admin']['help_function_current_date'] = '	<h3>Ką jis daro?</h3>
	<p>I&scaron;veda &scaron;ios dienos data.  Jei formatavimas nepakeistas i&scaron;vestis bus pana&scaron;i į:  &#039;Jan 01, 2008&#039;.</p>
	<h3>Kaip jį naudoti?</h3>
	<p>Tiesiog į &scaron;abloną ar puslapį įterpkite: <code>{current_date format=&quot;%A %d-%b-%y %T %Z&quot;}</code></p>
	<h3>Kokie parametrai egzistuoja?</h3>
	<ul>
		<li><em>(optional)</em>format - Date/Time format using parameters from php&#039;s strftime function.  See <a href="http://php.net/strftime" target="_blank">here</a> for a parameter list and information.</li>
		<li><em>(optional)</em>ucword - If true return uppercase the first character of each word.</li>
	</ul>
	</p>';
$lang['admin']['help_function_valid_xhtml'] = '<h3>Ką jis daro?</h3>
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
$lang['admin']['help_function_valid_css'] = '<h3>Ką jis daro?</h3>
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
$lang['admin']['help_function_title'] = '	<h3>Ką jis daro?</h3>
	<p>I&scaron;veda puslapio pavadinimą.</p>
	<h3>Kaip jį naudoti?</h3>
	<p>Tiesiog į &scaron;abloną ar puslapį įterpkite: <code>{title}</code></p>
	<h3>Kokie parametrai egzistuoja?</h3>
	<p><em>(optional)</em> assign (string) - Assign the results to a smarty variable with that name.</p>';
$lang['admin']['help_function_stylesheet'] = '<h3>Ką jis daro?</h3>
	<p>Gets stylesheet information from the system.  By default, it grabs all of the stylesheets attached to the current template.</p>
	<h3>Kaip jį naudoti?</h3>
	<p>Just insert the tag into your template/page&#039;s head section like: <code>{stylesheet}</code></p>
	<h3>What parameters does it take?</h3>
	<ul>
		<li><em>(optional)</em>name - Instead of getting all stylesheets for the given page, it will only get one spefically named one, whether it&#039;s attached to the current template or not.</li>
		<li><em>(optional)</em>media - If name is defined, this allows you set a different media type for that stylesheet.</li>
	</ul>
	</p>';
$lang['admin']['help_function_stopexpandcollapse'] = '<h3>Ką jis daro?</h3>
	<p>Enables content to be expandable and collapsable. Like the following:<br />
	<a href="#expand1" onClick="expandcontent(&#039;expand1&#039;)" style="cursor:hand; cursor:pointer">Click here for more info</a><span id=&quot;expand1&quot; class=&quot;expand&quot;><a name="help"></a> - Here is all the info you will ever need...</a></span></p>

	<h3>Kaip jį naudoti?</h3>
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
$lang['admin']['help_function_startexpandcollapse'] = '<h3>Ką jis daro?</h3>
	<p>Enables content to be expandable and collapsable. Like the following:<br />
	<a href="#expand1" onClick="expandcontent(&#039;expand1&#039;)" style="cursor:hand; cursor:pointer">Click here for more info</a><span id=&quot;expand1&quot; class=&quot;expand&quot;><a name="help"></a> - Here is all the info you will ever need...</a></span></p>

	<h3>Kaip jį naudoti?</h3>
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
$lang['admin']['help_function_adsense'] = '<h3>Ką jis daro?</h3>
	<p>Google adsense is a popular advertising program for websites.  This tag will take the basic parameters that would be provided by the adsense program and puts them in a easy to use tag that makes your templates look much cleaner.  See <a href="http://www.google.com/adsense" target="_blank">here</a> for more details on adsense.</p>
	<h3>Kaip jį naudoti?</h3>
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
$lang['admin']['help_function_sitename'] = '<h3>Ką jis daro?</h3>
        <p>Shows the name of the site.  This is defined during install and can be modified in the Global Settings section of the admin panel.</p>
        <h3>Kaip jį naudoti?</h3>
        <p>Just insert the tag into your template/page like: <code>{sitename}</code></p>
        <h3>What parameters does it take?</h3>
	<p><em>(optional)</em> assign (string) - Assign the results to a smarty variable with that name.</p>';
$lang['admin']['help_function_search'] = '<h3>Ką jis daro?</h3>
	<p>This is actually just a wrapper tag for the <a href="listmodules.php?action=showmodulehelp&amp;module=Search">Search module</a> to make the tag syntax easier. 
	Instead of having to use <code>{cms_module module=&#039;Search&#039;}</code> you can now just use <code>{search}</code> to insert the module in a template.
	</p>
	<h3>Kaip jį naudoti?</h3>
	<p>Just put <code>{search}</code> in a template where you want the search input box to appear. For help about the Search module, please refer to the <a href="listmodules.php?action=showmodulehelp&amp;module=Search">Search module help</a>.';
$lang['admin']['help_function_root_url'] = '	<h3>Ką jis daro?</h3>
	<p>Prints the root url location for the site.</p>
	<h3>Kaip jį naudoti?</h3>
	<p>Just insert the tag into your template/page like: <code>{root_url}</code></p>
	<h3>What parameters does it take?</h3>
	<p>None at this time.</p>';
$lang['admin']['help_function_repeat'] = '<h3>Ką jis daro?</h3>
  <p>Repeats a specified sequence of characters, a specified number of times</p>
  <h3>Kaip jį naudoti?</h3>
  <p>Insert a tag similar to the following into your template/page, like this: <code>{repeat string=&#039;repeat this &#039; times=&#039;3&#039;}</code>
  <h3>What parameters does it take?</h3>
  <ul>
  <li>string=&#039;text&#039; - The string to repeat</li>
  <li>times=&#039;num&#039; - The number of times to repeat it.</li>
  </ul>';
$lang['admin']['help_function_recently_updated'] = '<h3>Ką jis daro?</h3>
	<p>Outputs a list of recently updated pages.</p>
	<h3>Kaip jį naudoti?</h3>
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
$lang['admin']['help_function_print'] = '<h3>Ką jis daro?</h3>
	<p>This is actually just a wrapper tag for the <a href="listmodules.php?action=showmodulehelp&amp;module=Printing">Printing module</a> to make the tag syntax easier. 
	Instead of having to use <code>{cms_module module=&#039;Printing&#039;}</code> you can now just use <code>{print}</code> to insert the module on pages and templates.
	</p>
	<h3>Kaip jį naudoti?</h3>
	<p>Just put <code>{print}</code> on a page or in a template. For help about the Printing module, what parameters it takes etc., please refer to the <a href="listmodules.php?action=showmodulehelp&amp;module=Printing">Printing module help</a>.';
$lang['admin']['help_function_oldprint'] = '<h3>Ką jis daro?</h3>
	<p>Creates a link to only the content of the page.</p>
<h3>Kaip jį naudoti?</h3>
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
$lang['admin']['login_info_title'] = 'Informacija';
$lang['admin']['login_info'] = 'From this point should take into consideration the following parameters';
$lang['admin']['login_info_params'] = '<ol> 
  <li>Cookies enabled in your browser</li> 
  <li>Javascript enabled in your browser </li> 
  <li>Windows popup active to the following address:</li> 
</ol>';
$lang['admin']['help_function_news'] = '	<h3>Ką jis daro?</h3>
	<p>This is actually just a wrapper tag for the <a href="listmodules.php?action=showmodulehelp&amp;module=News">News module</a> to make the tag syntax easier. 
	Instead of having to use <code>{cms_module module=&#039;News&#039;}</code> you can now just use <code>{news}</code> to insert the module on pages and templates.
	</p>
	<h3>Kaip jį naudoti?</h3>
	<p>Just put <code>{news}</code> on a page or in a template. For help about the News module, what parameters it takes etc., please refer to the <a href="listmodules.php?action=showmodulehelp&amp;module=News">News module help</a>.';
$lang['admin']['help_function_modified_date'] = '<h3>Ką jis daro?</h3>
        <p>Prints the date and time the page was last modified.  If no format is given, it will default to a format similar to &#039;Jan 01, 2004&#039;.</p>
       <h3>Kaip jį naudoti?</h3>
        <p>Just insert the tag into your template/page like: <code>{modified_date format=&quot;%A %d-%b-%y %T %Z&quot;}</code></p>
        <h3>What parameters does it take?</h3>
        <ul>
                <li><em>(optional)</em>format - Date/Time format using parameters from php&#039;s strftime function.  See <a href="http://php.net/strftime" target="_blank">here</a> for a parameter list and information.</li>
        </ul>';
$lang['admin']['help_function_metadata'] = '	<h3>Ką jis daro?</h3>
	<p>Displays the metadata for this page. Both global metdata from the global settings page and metadata for each page will be shown.</p>
	<h3>Kaip jį naudoti?</h3>
	<p>Just insert the tag into your template like: <code>{metadata}</code></p>
	<h3>What parameters does it take?</h3>
	<ul>
		<li><em>(optional)</em>showbase (true/false) - If set to false, the base tag will not be sent to the browser.  Defaults to true if use_hierarchy is set to true in config.php.</li>
	</ul>';
$lang['admin']['help_function_menu_text'] = '	<h3>Ką jis daro?</h3>
	<p>Prints the menu text of the page.</p>
	<h3>Kaip jį naudoti?</h3>
	<p>Just insert the tag into your template/page like: <code>{menu_text}</code></p>
	<h3>What parameters does it take?</h3>
	<p>None at this time.</p>';
$lang['admin']['help_function_menu'] = '<h3>Ką jis daro?</h3>
	<p>This is actually just a wrapper tag for the <a href="listmodules.php?action=showmodulehelp&amp;module=MenuManager">Menu Manager module</a> to make the tag syntax easier. 
	Instead of having to use <code>{cms_module module=&#039;MenuManager&#039;}</code> you can now just use <code>{menu}</code> to insert the module on pages and templates.
	</p>
	<h3>Kaip jį naudoti?</h3>
	<p>Just put <code>{menu}</code> on a page or in a template. For help about the Menu Manager module, what parameters it takes etc., please refer to the <a href="listmodules.php?action=showmodulehelp&amp;module=MenuManager">Menu Manager module help</a>.';
$lang['admin']['help_function_last_modified_by'] = '<h3>Ką jis daro?</h3>
        <p>Prints last person that edited this page.  If no format is given, it will default to a ID number of user .</p>
        <h3>Kaip jį naudoti?</h3>
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
$lang['admin']['help_function_imagegallery'] = '<h3>Ką jis daro?</h3>
	<p>Creates a gallery out of a folder of images (.gif, .jpg or .png). 
	You can click on a thumbnail image to view the bigger image. It can use 
	captions which are based on the image name, minus the file extension. It 
	follows web standards and uses CSS for formatting. There are classes 
	for various elements and for the surrounding &#039;div&#039;. Check out the CSS below for
	more information.</p>

	<h3>Kaip jį naudoti?</h3>
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
$lang['admin']['help_function_html_blob'] = '<h3>Ką jis daro?</h3>
	<p>See the help for global_content for a description.</p>';
$lang['admin']['help_function_googlepr'] = '	<h3>Ką jis daro?</h3>
	<p>Display&#039;s a number that represents your google pagerank.</p>
	<h3>Kaip jį naudoti?</h3>
	<p>Just insert the tag into your template/page like: <code>{googlepr}</code><br>
	<br>

	<h3>What parameters does it take?</h3>
	<ul>
		<li><em>(optional)</em> domain - The website to display the pagerank for.</li>
	</ul>
	</p>';
$lang['admin']['help_function_google_search'] = '<h3>Ką jis daro?</h3>
	<p>Search&#039;s your website using Google&#039;s search engine.</p>
	<h3>Kaip jį naudoti?</h3>
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
$lang['admin']['help_function_global_content'] = '<h3>Ką jis daro?</h3>
	<p>Inserts a global content block into your template or page.</p>
	<h3>Kaip jį naudoti?</h3>
	<p>Just insert the tag into your template/page like: <code>{global_content name=&#039;myblob&#039;}</code>, where name is the name given to the block when it was created.</p>
	<h3>What parameters does it take?</h3>
	<ul>
		<li>name - The name of the global content block to display.</li>
	</ul>';
$lang['admin']['help_function_get_template_vars'] = '	<h3>Ką jis daro?</h3>
	<p>Dumps all the known smarty variables into your page</p>
	<h3>Kaip jį naudoti?</h3>
	<p>Just insert the tag into your template/page like: <code>{get_template_vars}</code></p>
	<h3>What parameters does it take?</h3>
											  <p>None at this time</p>';
$lang['admin']['help_function_embed'] = '<h3>Ką jis daro?</h3>
	<p>Enable inclusion (embeding) of any other application into the CMS. The most usual use could be a forum. 
	This implementation is using IFRAMES so older browsers can have problems. Sorry bu this is the only known way 
	that works without modifing the embeded application.</p>
	<h3>Kaip jį naudoti?</h3>
	<p>Just insert the tag into your template/page like: <code>{embed url=http://www.google.com/}</code><br></p>
        <h4>Example to make the iframe larger</h4>
	<p>Add the following to your style sheet:</p>
        <pre>#myframe { height: 600px; }</pre>
        <h3>What parameters does it take?</h3>
        <ul>
               <li><em>(required)</em>url - the url to be included 
               <li><em>(optional)</em>header=true - this will generate the header code for good resizing of the IFRAME.</li>

        </ul>
       <p>You must include in your page content {embed url=..} and in the &quot;Metadata:&quot; section (advanced tab) you must put {embed header=true}. Also be sure to put this in between the &quot;head&quot; tags of your template: {metadata}</p>';
$lang['admin']['help_function_edit'] = '<h3>Ką jis daro?</h3>
	<p>Creates a link to edit the page</p>
	<h3>Kaip jį naudoti?</h3>
	<p>Just insert the tag into your template/page like: <code>{edit}</code><br></p>
        <h3>What parameters does it take?</h3>
        <ul>
                <li><em>(optional)</em>showbutton - Set to &quot;true&quot; and will show a edit graphic instead of a text link.</li>
        </ul>';
$lang['admin']['help_function_description'] = '<h3>Ką jis daro?</h3>
	<p>Prints the description (title attribute) of the page.</p>
	<h3>Kaip jį naudoti?</h3>
	<p>Just insert the tag into your template/page like: <code>{description}</code></p>
	<h3>What parameters does it take?</h3>
	<p>None at this time.</p>';
$lang['admin']['help_function_created_date'] = '<h3>Ką jis daro?</h3>
        <p>Prints the date and time the page was created.  If no format is given, it will default to a format similar to &#039;Jan 01, 2004&#039;.</p>
<h3>Kaip jį naudoti?</h3>
        <p>Just insert the tag into your template/page like: <code>{created_date format=&quot;%A %d-%b-%y %T %Z&quot;}</code></p>
        <h3>What parameters does it take?</h3>
        <ul>
                <li><em>(optional)</em>format - Date/Time format using parameters from php&#039;s strftime function.  See <a href="http://php.net/strftime" target="_blank">here</a> for a parameter list and information.</li>
        </ul>';
$lang['admin']['help_function_content'] = '<h3>Ką jis daro?</h3>
	<p>This is where the content for your page will be displayed.  It&#039;s inserted into the template and changed based on the current page being displayed.</p>
<h3>Kaip jį naudoti?</h3>
	<p>Just insert the tag into your template like: <code>{content}</code>.</p>
	<h3>What parameters does it take?</h3>
	<ul>
		<li><em>(optional)</em>block - Allows you to have more than one content block per page.  When multiple content tags are put on a template, that number of edit boxes will be displayed when the page is edited.
<p>Example:</p>
<pre>{content block=&quot;Second Content Block&quot;}</pre>
<p>Now, when you edit a page there will a textarea called &quot;Second Content Block&quot;.</li>
		<li><em>(optional)</em>wysiwyg (true/false) - If set to false, then a wysiwyg will never be used while editing this block.  If true, then it acts as normal.  Only works when block parameter is used.</li>
		<li><em>(optional)</em>oneline (true/false) - If set to true, then only one edit line will be shown while editing this block.  If false, then it acts as normal.  Only works when block parameter is used.</li>
		<li><em>(optional)</em>assign - Assigns the content to a smarty parameter, which you can then use in other areas of the page, or use to test whether content exists in it or not.
<p>Example of passing page content to a User Defined Tag as a parameter:</p>
<pre>
         {content assign=pagecontent}
         {table_of_contents thepagecontent=&quot;$pagecontent&quot;}
</pre>
</li>
	</ul>';
$lang['admin']['help_function_contact_form'] = '  <h2>NOTE: This plugin is deprecated</h2>
    <p>This smarty plugin is deprecated, and may not be included with further versions of CMS Made Simple.  We recommend you use the formbuilder module and it&#039;s included contact form.</p>
<h3>Ką jis daro?</h3>
	<p>Display&#039;s a contact form. This can be used to allow others to send an email message to the address specified.</p>
<h3>Kaip jį naudoti?</h3>
	<p>Just insert the tag into your template/page like: <code>{contact_form email=&quot;yourname@yourdomain.com&quot;}</code><br>
	<br>
	If you would like to send an email to multiple adresses, seperate each address with a comma.</p>
	<h3>What parameters does it take?</h3>
	<ul>
		<li>email - The email address that the message will be sent to.</li>
		<li><em>(optional)</em>style - true/false, use the predefined styles. Default is true.</li>
		<li><em>(optional)</em>subject_get_var - string, allows you to specify which _GET var to use as the default value for subject.
               <p>Example:</p>
               <pre>{contact_form email=&quot;yourname@yourdomain.com&quot; subject_get_var=&quot;subject&quot;}</pre>
             <p>Then call the page with the form on it like this: /index.php?page=contact&amp;subject=test+subject</p>
             <p>And the following will appear in the &quot;Subject&quot; box: &quot;test subject&quot;
           </li>
		<li><em>(optional)</em>captcha - true/false, use Captcha response test (Captcha module must be installed). Default is false.</li>
	</ul>
	</p>';
$lang['admin']['help_function_cms_versionname'] = '<h3>Ką jis daro?</h3>
	<p>This tag is used to insert the current version name of CMS into your template or page.  It doesn&#039;t display any extra besides the version name.</p>
<h3>Kaip jį naudoti?</h3>
	<p>This is just a basic tag plugin.  You would insert it into your template or page like so: <code>{cms_versionname}</code>
	<h3>What parameters does it take?</h3>
	<p>It takes no parameters.</p>';
$lang['admin']['help_function_cms_version'] = '	<h3>Ką jis daro?</h3>
	<p>This tag is used to insert the current version number of CMS into your template or page.  It doesn&#039;t display any extra besides the version number.</p>
<h3>Kaip jį naudoti?</h3>
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
$lang['admin']['help_function_cms_selflink'] = '		<h3>Ką jis daro?</h3>
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
$lang['admin']['help_function_cms_module'] = '<h3>Ką jis daro?</h3>
	<p>This tag is used to insert modules into your templates and pages.  If a module is created to be used as a tag plugin (check it&#039;s help for details), then you should be able to insert it with this tag.</p>
<h3>Kaip jį naudoti?</h3>
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
$lang['admin']['help_function_breadcrumbs'] = '<h3>Ką jis daro?</h3>
<p>Prints a breadcrumb trail .</p>
<h3>Kaip jį naudoti?</h3>
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
$lang['admin']['help_function_anchor'] = '<h3>Ką jis daro?</h3>
	<p>Makes a proper anchor link.</p>
<h3>Kaip jį naudoti?</h3>
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
$lang['admin']['help_function_site_mapper'] = '<h3>Ką jis daro?</h3>
  <p>This is actually just a wrapper tag for the <a href="listmodules.php?action=showmodulehelp&amp;module=MenuManager">Menu Manager module</a> to make the tag syntax easier, and to simplify creating a sitemap.</p>
<h3>Kaip jį naudoti?</h3>
  <p>Just put <code>{site_mapper}</code> on a page or in a template. For help about the Menu Manager module, what parameters it takes etc., please refer to the <a href="listmodules.php?action=showmodulehelp&amp;module=MenuManager">Menu Manager module help</a>.</p>
  <p>By default, if no template option is specified the minimal_menu.tpl file will be used.</p>
  <p>Any parameters used in the tag are available in the menumanager template as <code>{$menuparams.paramname}</code></p>';
$lang['admin']['help_function_redirect_url'] = '<h3>Ką jis daro?</h3>
  <p>This plugin allows you to easily redirect to a specified url.  It is handy inside of smarty conditional logic (for example, redirect to a splash page if the site is not live yet).</p>
<h3>Kaip jį naudoti?</h3>
<p>Simply insert this tage into your page or template: <code>{redirect_url urle=&#039;www.cmsmadesimple.org&#039;}</code></p>';
$lang['admin']['help_function_redirect_page'] = '<h3>Ką jis daro?</h3>
 <p>This plugin allows you to easily redirect to another page.  It is handy inside of smarty conditional logic (for example, redirect to a login page if the user is not logged in.)</p>
<h3>Kaip jį naudoti?</h3>
<p>Simply insert this tage into your page or template: <code>{redirect_page page=&#039;some-page-alias&#039;}</code></p>';
$lang['admin']['of'] = 'i&scaron;';
$lang['admin']['first'] = 'Pirmas';
$lang['admin']['last'] = 'Paskutinis';
$lang['admin']['adminspecialgroup'] = 'Įspėjimas: &Scaron;ios grupės narys automati&scaron;kai turės visas teises';
$lang['admin']['disablesafemodewarning'] = 'Paslėpti įspėjimus apie &#039;safe mode&#039; rėžimą';
$lang['admin']['allowparamcheckwarnings'] = 'Naudoti parametrų tikrinimą ir i&scaron;vesti įspėjimus';
$lang['admin']['date_format_string'] = 'Datos formatas';
$lang['admin']['date_format_string_help'] = 'formatas funkcijai <em>strftime</em>';
$lang['admin']['last_modified_at'] = 'Paskutinį kartą redaguota';
$lang['admin']['last_modified_by'] = 'Paskutinis redagavo';
$lang['admin']['read'] = 'Skaityti';
$lang['admin']['write'] = 'Ra&scaron;yti';
$lang['admin']['execute'] = 'Atlikti';
$lang['admin']['group'] = 'Grupė';
$lang['admin']['other'] = 'Kita';
$lang['admin']['event_desc_moduleupgraded'] = 'Siųsti po modulio atnaujinimo';
$lang['admin']['event_desc_moduleinstalled'] = 'Siųsti po modulio įdiegimo';
$lang['admin']['event_desc_moduleuninstalled'] = 'Siųsti po modulio pa&scaron;alinimo';
$lang['admin']['event_desc_edituserdefinedtagpost'] = 'Siųsti po naudotojo apra&scaron;ytos žymių atnaujinimo';
$lang['admin']['event_desc_edituserdefinedtagpre'] = 'Siųsti po ankstesnių naudotojo apra&scaron;ytos žymių atnaujinimo';
$lang['admin']['event_desc_deleteuserdefinedtagpre'] = 'Siųsti po ankstesnių naudotojo apra&scaron;ytos žymių i&scaron;trynimo';
$lang['admin']['event_desc_deleteuserdefinedtagpost'] = 'Siųsti po naudotojo apra&scaron;ytos žymių i&scaron;trynimo';
$lang['admin']['event_desc_adduserdefinedtagpost'] = 'Siųsti po naudotojo apra&scaron;ytos žymių įterpimo';
$lang['admin']['event_desc_adduserdefinedtagpre'] = 'Siųsti po ankstesnių naudotojo apra&scaron;ytos žymių įterpimo';
$lang['admin']['global_umask'] = 'Failų kūrimo taisyklės (umask)';
$lang['admin']['errorcantcreatefile'] = 'Nepavyko sukurti failo (teisių problema?)';
$lang['admin']['errormoduleversionincompatible'] = 'Modulis nesuderinamas su &scaron;ia CMS versija';
$lang['admin']['errormodulenotloaded'] = 'Sistemos klaida. Modulis neįvykdytas';
$lang['admin']['errormodulenotfound'] = 'Sistemos klaida. Modulis nerastas';
$lang['admin']['errorinstallfailed'] = 'Modulio įdiegimas nepavyko';
$lang['admin']['errormodulewontload'] = 'Problema vykdant esamą modulį';
$lang['admin']['frontendlang'] = 'Kalba pagal nutylėjimą';
$lang['admin']['info_edituser_password'] = 'Redaguokite &scaron;į lauką norėdami pakeisti naudotojo slaptažodį';
$lang['admin']['info_edituser_passwordagain'] = 'Redaguokite &scaron;į lauką norėdami pakeisti naudotojo slaptažodį';
$lang['admin']['originator'] = 'Sukūrėjas';
$lang['admin']['module_name'] = 'Modulio pavadinimas';
$lang['admin']['event_name'] = 'Įvykio pavadinimas';
$lang['admin']['event_description'] = 'Įvykio apra&scaron;ymas';
$lang['admin']['error_delete_default_parent'] = 'Negalima i&scaron;trinti pagrindinio puslapio tėvinio elemento.';
$lang['admin']['jsdisabled'] = 'Atsipra&scaron;ome, &scaron;i funkcija reikalauja, kad Javascript būtų įjungtas.';
$lang['admin']['order'] = 'Rū&scaron;iuoti';
$lang['admin']['reorderpages'] = 'Perrū&scaron;iuoti puslapius';
$lang['admin']['reorder'] = 'Perrū&scaron;iuoti';
$lang['admin']['page_reordered'] = 'Puslapis sėkmigai perrū&scaron;iuotas.';
$lang['admin']['pages_reordered'] = 'Puslapiai sėkmigai perrū&scaron;iuoti.';
$lang['admin']['sibling_duplicate_order'] = 'Du to paties tėvo vaikiniai elementai negali turėti tą pačią tvarką. Puslapiai nebuvo perrū&scaron;iuoti.';
$lang['admin']['no_orders_changed'] = 'Jūs pasirinkote puslapių perrū&scaron;iavimą, tačiau nepakeitėte nei vieno puslapio tvarkos. Puslapiai nebuvo perrū&scaron;iuoti.';
$lang['admin']['order_too_small'] = 'Puslapio eilės numeris negali būti nulinis. Puslapiai nebuvo perrū&scaron;iuoti.';
$lang['admin']['order_too_large'] = 'Puslapio eilės numeris negali būti didesnis nei to lygio elementų kiekis. Puslapiai nebuvo perrū&scaron;iuoti.';
$lang['admin']['user_tag'] = 'Naudotojo žymė';
$lang['admin']['add'] = 'Pridėti';
$lang['admin']['CSS'] = 'CSS';
$lang['admin']['about'] = 'Apie';
$lang['admin']['action'] = 'Veiksmas';
$lang['admin']['actionstatus'] = 'Veiksmas/Būsena';
$lang['admin']['active'] = 'Aktyvus';
$lang['admin']['addcontent'] = 'Įdėti turinį';
$lang['admin']['cantremove'] = 'Negalima pa&scaron;alinti';
$lang['admin']['changepermissions'] = 'Pakeisti teises';
$lang['admin']['changepermissionsconfirm'] = 'DĖMESIO\n\n&Scaron;is veiksmas bandys užtikrinti, kad web serveris turi ra&scaron;ymo teises į visus modulį sudarančius failus.\nAr tikrai norite tęsti?';
$lang['admin']['contentadded'] = 'Turinys sėkmingai i&scaron;saugotas duomenų bazėje.';
$lang['admin']['contentupdated'] = 'Turinys sėkmingai atnaujintas';
$lang['admin']['contentdeleted'] = 'Turinys sėkmingai pa&scaron;alintas i&scaron; duomenų bazės.';
$lang['admin']['success'] = 'Įvykdyta sėkmingai';
$lang['admin']['addcss'] = 'Įdėti CSS';
$lang['admin']['addgroup'] = 'Įdėti naują grupę';
$lang['admin']['additionaleditors'] = 'Papildomi redaguotojai';
$lang['admin']['addtemplate'] = 'Įdėti &scaron;abloną';
$lang['admin']['adduser'] = 'Įdėti naudotoją';
$lang['admin']['addusertag'] = 'Įdėti naudotojo sukurtą žymę (Tag)';
$lang['admin']['adminaccess'] = 'Leidimas prisijungti administratoriaus teisėmis';
$lang['admin']['adminlog'] = 'Administratoriaus žurnalas';
$lang['admin']['adminlogcleared'] = 'Admino Log sėkmingai i&scaron;valytas';
$lang['admin']['adminlogempty'] = 'Admino Log tu&scaron;čias';
$lang['admin']['adminsystemtitle'] = 'TVS administravimo sistema';
$lang['admin']['adminpaneltitle'] = 'CMS Made Simple valdymas';
$lang['admin']['advanced'] = 'Detaliau';
$lang['admin']['aliasalreadyused'] = 'Trumpinys jau buvo panaudotas kitam puslapiui';
$lang['admin']['aliasmustbelettersandnumbers'] = 'Trumpinį turi sudaryti raidės ir skaitmenys';
$lang['admin']['aliasnotaninteger'] = 'Trumpinys negali būti sudarytas vien tik i&scaron; skaitmenų';
$lang['admin']['allpagesmodified'] = 'Visi puslapiai pakeisti!';
$lang['admin']['assignments'] = 'Priskirti naudotojus';
$lang['admin']['associationexists'] = '&Scaron;is sąry&scaron;is jau egzistuoja';
$lang['admin']['autoinstallupgrade'] = 'Automati&scaron;kai įdiegti arba atnaujinti';
$lang['admin']['back'] = 'Atgal į meniu';
$lang['admin']['backtoplugins'] = 'Atgal į priedų sąra&scaron;ą';
$lang['admin']['cancel'] = 'At&scaron;aukti';
$lang['admin']['cantchmodfiles'] = 'Nepavyko pakeisti kai kurių failų teisių';
$lang['admin']['cantremovefiles'] = 'Problema &scaron;alinant failus (teisių problema?)';
$lang['admin']['confirmcancel'] = 'Ar tikrai norite at&scaron;aukti pakeitimus? Paspauskite OK norėdami at&scaron;aukti pakeitimus. Spauskite Cancel norėdami tęsti redagavimą.';
$lang['admin']['canceldescription'] = 'At&scaron;aukti pakeitimus';
$lang['admin']['clearadminlog'] = 'I&scaron;valyti administratoriaus žurnalą';
$lang['admin']['code'] = 'Kodas';
$lang['admin']['confirmdefault'] = 'Ar tikrai norite nustatyti pagrindinį puslapį?';
$lang['admin']['confirmdeletedir'] = 'Ar tikrai norite i&scaron;trinti &scaron;į katalogą ir visą jame esantį turinį?';
$lang['admin']['content'] = 'Turinys';
$lang['admin']['contentmanagement'] = 'Turinio valdymas';
$lang['admin']['contenttype'] = 'Turinio tipas';
$lang['admin']['copy'] = 'Kopijuoti';
$lang['admin']['copytemplate'] = 'Kopijuoti &scaron;abloną';
$lang['admin']['create'] = 'Sukurti';
$lang['admin']['createnewfolder'] = 'Sukurti naują katalogą';
$lang['admin']['cssalreadyused'] = 'Toks CSS pavadinimas jau egzistuoja';
$lang['admin']['cssmanagement'] = 'CSS valdymas';
$lang['admin']['currentassociations'] = 'Sukurti sąry&scaron;iai';
$lang['admin']['currentdirectory'] = 'Sukurti katalogai';
$lang['admin']['currentgroups'] = 'Sukurtos grupės';
$lang['admin']['currentpages'] = 'Sukurti puslapiai';
$lang['admin']['currenttemplates'] = 'Sukurti &scaron;ablonai';
$lang['admin']['currentusers'] = 'Sukurti naudotojai';
$lang['admin']['custom404'] = '404 klaidos prane&scaron;imas';
$lang['admin']['database'] = 'Duomenų bazė';
$lang['admin']['databaseprefix'] = 'Duomenų bazės prefiksas';
$lang['admin']['databasetype'] = 'Duomenų bazės tipas';
$lang['admin']['date'] = 'Data';
$lang['admin']['default'] = 'Pagrindinis';
$lang['admin']['delete'] = 'Trinti';
$lang['admin']['deleteconfirm'] = 'Ar tikrai norite i&scaron;trinti?';
$lang['admin']['deleteassociationconfirm'] = 'Ar tikrai norite pa&scaron;alinti sąry&scaron;į su - %s - ?';
$lang['admin']['deletecss'] = 'Trinti CSS';
$lang['admin']['dependencies'] = 'Priklausomybės';
$lang['admin']['description'] = 'Apra&scaron;ymas';
$lang['admin']['directoryexists'] = 'Toks katalogas jau egzistuota.';
$lang['admin']['down'] = 'Žemyn';
$lang['admin']['edit'] = 'Redaguoti';
$lang['admin']['editconfiguration'] = 'Redaguoti nustatymus';
$lang['admin']['editcontent'] = 'Redaguoti turinį';
$lang['admin']['editcss'] = 'Redaguoti stilių puslapį';
$lang['admin']['editcsssuccess'] = 'Stilių puslapis atnaujintas';
$lang['admin']['editgroup'] = 'Redaguoti grupę';
$lang['admin']['editpage'] = 'Redaguoti puslapį';
$lang['admin']['edittemplate'] = 'Redaguoti &scaron;abloną';
$lang['admin']['edittemplatesuccess'] = '&Scaron;ablonas atnaujintas';
$lang['admin']['edituser'] = 'Redaguoti naudotoją';
$lang['admin']['editusertag'] = 'Redaguoti naudotojo sukurtą žymę (Tag)';
$lang['admin']['usertagadded'] = 'Naudotojo žymė (Tag) buvo sėkmingai sukurta.';
$lang['admin']['usertagupdated'] = 'Naudotojo žymė (Tag) buvo sėkmingai atnaujinta.';
$lang['admin']['usertagdeleted'] = 'Naudotojo žymė (Tag) buvo sėkmingai pa&scaron;alinta.';
$lang['admin']['email'] = 'E. pa&scaron;to adresas';
$lang['admin']['errorattempteddowngrade'] = 'Sistemoje yra įdiegta naujesnė &scaron;io modulio versija. Veiksmas at&scaron;auktas';
$lang['admin']['errorchildcontent'] = 'Turinys vis dar turi vidinį turinį (Child). Pirma i&scaron;trinkite vidinį turinį.';
$lang['admin']['errorcopyingtemplate'] = 'Klaida kopijuojant &scaron;abloną';
$lang['admin']['errorcouldnotparsexml'] = 'Klaida apdorojant XML failą';
$lang['admin']['errorcreatingassociation'] = 'Klaida kuriant sąry&scaron;į';
$lang['admin']['errorcssinuse'] = '&Scaron;į stilių puslapį vis dar naudoja &scaron;ablonas arba puslapis. Pirma panaikinkite sąry&scaron;ius.';
$lang['admin']['errordefaultpage'] = 'Negalima i&scaron;trinti pagrindinio puslapio. Nustatykite kitą pagrindinį puslapį.';
$lang['admin']['errordeletingassociation'] = 'Klaida trinant sąry&scaron;į';
$lang['admin']['errordeletingcss'] = 'Klaida trinant CSS';
$lang['admin']['errordeletingdirectory'] = 'Nepavyko i&scaron;trinti katalogo. Leidimų (teisių) problema?';
$lang['admin']['errordeletingfile'] = 'Nepavyko i&scaron;trinti bylos. Leidimų (teisių) problema?';
$lang['admin']['errordirectorynotwritable'] = 'Nėra leidimo (teisės) ra&scaron;yti į katalogą';
$lang['admin']['errordtdmismatch'] = 'Nenurodyta arba nesuderinama DTD versija XML faile';
$lang['admin']['errorgettingcssname'] = 'Klaida gaunant stilių puslapio pavadinimą';
$lang['admin']['errorgettingtemplatename'] = 'Klaida gaunant &scaron;ablono pavadinimą';
$lang['admin']['errorincompletexml'] = 'XML failas nepilnas arba jame yra klaida';
$lang['admin']['uploadxmlfile'] = 'Įdiegti modulį i&scaron; XML failo';
$lang['admin']['cachenotwritable'] = 'Trūksta ra&scaron;ymo teisių spartinančiosios atmintinės (cache) katalogui. Nepavyks i&scaron;valyti čio katalogo turinio Suteikite katalogui tmp/cache pilnas skaitymo/redagavimo/paleidimo teises (chmod 777).';
$lang['admin']['modulesnotwritable'] = 'Trūksta ra&scaron;ymo teisių &scaron;io modulio katalogui. Jei norėsite įdiegti modulį i&scaron; XML failo, turite suteikti &scaron;io modulio katalogui pilnas skaitymo/ra&scaron;ymo/paleidimo teises (chmod 777).';
$lang['admin']['noxmlfileuploaded'] = 'Neįkeltas joks failas. Norėdami įdiegti modulį naudodami XML, turite i&scaron; savo kompiuterio įkelti modulio .xml failą.';
$lang['admin']['errorinsertingcss'] = 'Klaida įterpiant stilių puslapį';
$lang['admin']['errorinsertinggroup'] = 'Klaida įterpiant grupę';
$lang['admin']['errorinsertingtag'] = 'Klaida įterpiant naudotojo žymę (Tag)';
$lang['admin']['errorinsertingtemplate'] = 'Klaida įterpiant &scaron;abloną';
$lang['admin']['errorinsertinguser'] = 'Klaida įterpiant naudotoją';
$lang['admin']['errornofilesexported'] = 'Klaida eksportuojant failus į xml';
$lang['admin']['errorretrievingcss'] = 'Klaida atkuriant stilių puslapį';
$lang['admin']['errorretrievingtemplate'] = 'Klaida atkuriant &scaron;abloną';
$lang['admin']['errortemplateinuse'] = '&Scaron;is &scaron;ablonas vis dar naudojamas turinio puslapyje. Pirma i&scaron;trinkite puslapį.';
$lang['admin']['errorupdatingcss'] = 'Klaida atnaujinant stilių puslapį';
$lang['admin']['errorupdatinggroup'] = 'Klaida atnaujinant grupę';
$lang['admin']['errorupdatingpages'] = 'Klaida atnaujinant puslapius';
$lang['admin']['errorupdatingtemplate'] = 'Klaida atnaujinant &scaron;abloną';
$lang['admin']['errorupdatinguser'] = 'Klaida atnaujinant naudotoją';
$lang['admin']['errorupdatingusertag'] = 'Klaida atnaujinant naudotojo žymę (Tag)';
$lang['admin']['erroruserinuse'] = '&Scaron;is naudotojas vis dar yra turinio puslapių savininkas. Pirma pakeiskite savininką į kitą naudotoją prie&scaron; panaikinant naudotoją.';
$lang['admin']['eventhandlers'] = 'Įvykių valdymas';
$lang['admin']['editeventhandler'] = 'Pridėti įvykių valdiklį';
$lang['admin']['eventhandlerdescription'] = 'Susieti naudotojo žymes su įvykiais';
$lang['admin']['export'] = 'Eksportuoti';
$lang['admin']['event'] = 'Įvykis';
$lang['admin']['false'] = 'Ne';
$lang['admin']['settrue'] = 'Nustatyti į teigiamą';
$lang['admin']['filecreatedirnodoubledot'] = 'Katalogas negali turėti &#039;..&#039;.';
$lang['admin']['filecreatedirnoname'] = 'Negalima sukurti katalogo be pavadinimo.';
$lang['admin']['filecreatedirnoslash'] = 'Katalogas negali turėti &#039;/&#039; arba &#039;\&#039;.';
$lang['admin']['filemanagement'] = 'Bylų valdymas';
$lang['admin']['filename'] = 'Bylos pavadinimas';
$lang['admin']['filenotuploaded'] = 'Byla negali būti atsiųsta. Leidimų (teisių) problema?';
$lang['admin']['filesize'] = 'Bylos dydis';
$lang['admin']['firstname'] = 'Vardas';
$lang['admin']['groupmanagement'] = 'Grupių valdymas';
$lang['admin']['grouppermissions'] = 'Grupių leidimai';
$lang['admin']['handler'] = 'Priežiūra (naudotojo sukurtų žymių)';
$lang['admin']['headtags'] = 'Head Žymės (Tags)';
$lang['admin']['help'] = 'Pagalba';
$lang['admin']['new_window'] = 'naujas langas';
$lang['admin']['helpwithsection'] = '%s pagalba';
$lang['admin']['helpaddtemplate'] = '<p>&Scaron;ablonas yra Jūsų puslapio stuburas. Jis kontroliuoja Jūsų puslapio i&scaron;vaizdą. Čia sukurkite puslapio i&scaron;dėstymą ir taip pat pridėkite stilių puslapį tam skirtoje sekcijoje, kad kontroliuoti atskirų puslapio elementų atvaizdavimą.</p>';
$lang['admin']['helplisttemplate'] = '<p>&Scaron;is puslapis leidžia jums redaguoti, trinti bei kurti &scaron;ablonus. Norėdami sukurti naują &scaron;abloną, paspauskite mygtuką -Įdėti naują &scaron;abloną-. Jeigu norite nustatyti, kad visi turinio puslapiai naudotų tą patį &scaron;abloną, paspauskite nuorodą -Nustatyti visus puslapius-. Jeigu norite nukopijuoti &scaron;abloną, paspauskite -Kopijuoti- ikoną ir jums reikės pasirinkti pavadinimą naujo nukopijuoto &scaron;ablono.</p>';
$lang['admin']['home'] = 'Pirmas';
$lang['admin']['homepage'] = 'Pirmas puslapis';
$lang['admin']['hostname'] = 'Host adresas';
$lang['admin']['idnotvalid'] = 'Duotas id yra neteisingas';
$lang['admin']['imagemanagement'] = 'Paveikslėlių valdymas';
$lang['admin']['informationmissing'] = 'Trūksta informacijos';
$lang['admin']['install'] = 'Įdiegti';
$lang['admin']['invalidcode'] = 'Įvestas neteisingas kodas.';
$lang['admin']['illegalcharacters'] = 'Neteisingi simboliai lauke %s.';
$lang['admin']['invalidcode_brace_missing'] = 'Nelyginis riestinių skliaustelių skaičius';
$lang['admin']['invalidtemplate'] = 'Neteisingas &scaron;ablonas';
$lang['admin']['itemid'] = 'Elemento ID';
$lang['admin']['itemname'] = 'Elemento pavadinimas';
$lang['admin']['language'] = 'Kalba';
$lang['admin']['lastname'] = 'Pavardė';
$lang['admin']['logout'] = 'Atsijungti';
$lang['admin']['loginprompt'] = 'Įveskite teisingus prisijungimo duomenis norėdami prisijungti prie svetainės administravimo.';
$lang['admin']['logintitle'] = 'CMS Made Simple administratoriaus prisijungimas';
$lang['admin']['menutext'] = 'Meniu tekstas';
$lang['admin']['missingparams'] = 'Keletas parametrų buvo nenurodyti arba klaidingi';
$lang['admin']['modifygroupassignments'] = 'Redaguoti grupės priskyrimus';
$lang['admin']['moduleabout'] = 'Apie %s modulį';
$lang['admin']['modulehelp'] = 'Pagalba %s moduliui';
$lang['admin']['msg_defaultcontent'] = 'Įterpkite kodą kuris bus rodomas visuosų naujų puslapių turinyje';
$lang['admin']['msg_defaultmetadata'] = 'Įterpkite kodą kuris bus rodomas visuosų naujų puslapių metadata skiltyje';
$lang['admin']['wikihelp'] = 'Bendruomenės pagalba';
$lang['admin']['moduleinstalled'] = 'Modulis jau įdiegtas';
$lang['admin']['moduleinterface'] = '%s sąsaja';
$lang['admin']['modules'] = 'Moduliai';
$lang['admin']['move'] = 'Stumti';
$lang['admin']['name'] = 'Vardas';
$lang['admin']['needpermissionto'] = 'Jums reikalingas &#039;%s&#039; leidimas tam, kad įvykdyti &scaron;ią funkciją.';
$lang['admin']['needupgrade'] = 'Reikia atnaujinti';
$lang['admin']['newtemplatename'] = 'Naujo &scaron;ablono vardas';
$lang['admin']['next'] = 'Sekantis';
$lang['admin']['noaccessto'] = 'Nėra prieigos prie %s';
$lang['admin']['nocss'] = 'Nėra stilių puslapio';
$lang['admin']['noentries'] = 'Nėra įra&scaron;ų';
$lang['admin']['nofieldgiven'] = 'Neduotas %s!';
$lang['admin']['nofiles'] = 'Nėra bylų';
$lang['admin']['nopasswordmatch'] = 'Nesutampa slaptažodžiai';
$lang['admin']['norealdirectory'] = 'Neduotas realus katalogas';
$lang['admin']['norealfile'] = 'Neduota reali byla';
$lang['admin']['notinstalled'] = 'Neįdiegtas';
$lang['admin']['overwritemodule'] = 'Perra&scaron;yti esamus modulius';
$lang['admin']['owner'] = 'Savininkas';
$lang['admin']['pagealias'] = 'Puslapio trumpinys';
$lang['admin']['pagedefaults'] = 'Puslapio nuostatos';
$lang['admin']['pagedefaultsdescription'] = 'Nustato įprastas reik&scaron;mes naujiema puslapiams';
$lang['admin']['parent'] = 'Tėvas';
$lang['admin']['password'] = 'Slaptažodis';
$lang['admin']['passwordagain'] = 'Slaptažodis (pakartoti)';
$lang['admin']['permission'] = 'Leidimas (teisė)';
$lang['admin']['permissions'] = 'Leidimai (teisės)';
$lang['admin']['permissionschanged'] = 'Leidimai (teisės) atnaujinti.';
$lang['admin']['pluginabout'] = 'Apie %s žymę (Tag)';
$lang['admin']['pluginhelp'] = 'Pagalba %s žymei (Tag)';
$lang['admin']['pluginmanagement'] = 'Priedų valdymas';
$lang['admin']['prefsupdated'] = 'Naudotojo nustatymai atnaujinti.';
$lang['admin']['preview'] = 'Peržiūra';
$lang['admin']['previewdescription'] = 'Peržiūrėti pakeitimus';
$lang['admin']['previous'] = 'Ankstesnis';
$lang['admin']['remove'] = 'Pa&scaron;alinti';
$lang['admin']['removeconfirm'] = '&Scaron;is veiksmas pa&scaron;alins &scaron;io modulio failus.\nAr tikrai norite tęsti?';
$lang['admin']['removecssassociation'] = 'Panaikinti stilių puslapio sąry&scaron;į';
$lang['admin']['saveconfig'] = 'I&scaron;saugoti nustatymus';
$lang['admin']['send'] = 'Siųsti';
$lang['admin']['setallcontent'] = 'Nustatyti visus puslapius';
$lang['admin']['setallcontentconfirm'] = 'Ar tikrai norite nustatyti, kad visi puslapiai naudotų &scaron;į &scaron;abloną?';
$lang['admin']['showinmenu'] = 'Rodyti meniu';
$lang['admin']['showsite'] = 'Rodyti puslapį';
$lang['admin']['sitedownmessage'] = 'Prane&scaron;imas kad puslapis neveikia';
$lang['admin']['siteprefs'] = 'Bendri nustatymai';
$lang['admin']['status'] = 'Būklė';
$lang['admin']['stylesheet'] = 'Stilių puslapis';
$lang['admin']['submit'] = 'Pateikti';
$lang['admin']['submitdescription'] = 'I&scaron;saugoti pakeitimus';
$lang['admin']['tags'] = 'Žymės';
$lang['admin']['template'] = '&Scaron;ablonas';
$lang['admin']['templateexists'] = '&Scaron;ablono pavadinimas jau egzistuoja';
$lang['admin']['templatemanagement'] = '&Scaron;ablonų valdymas';
$lang['admin']['title'] = 'Pavadinimas';
$lang['admin']['tools'] = 'Įrankiai';
$lang['admin']['true'] = 'Taip';
$lang['admin']['setfalse'] = 'Nustatyti į neigiamą';
$lang['admin']['type'] = 'Tipas';
$lang['admin']['typenotvalid'] = 'Netinkamas tipas';
$lang['admin']['uninstall'] = 'Panaikinti';
$lang['admin']['uninstallconfirm'] = 'Ar tikrai norite tai panaikinti?';
$lang['admin']['up'] = 'Į vir&scaron;ų';
$lang['admin']['upgrade'] = 'Atnaujinti';
$lang['admin']['upgradeconfirm'] = 'Ar tikrai norite tai atnaujinti?';
$lang['admin']['uploadfile'] = 'Atsiųsti bylą';
$lang['admin']['url'] = 'URL';
$lang['admin']['useadvancedcss'] = 'Naudokite detalesnį stilių valdymą';
$lang['admin']['user'] = 'Naudotojas';
$lang['admin']['userdefinedtags'] = 'Naudotojo apra&scaron;ytos žymės (Tags)';
$lang['admin']['usermanagement'] = 'Naudotojų valdymas';
$lang['admin']['username'] = 'Naudotojo vardas';
$lang['admin']['usernameincorrect'] = 'Naudotojo vardas arba slaptažodis neteisingi';
$lang['admin']['userprefs'] = 'Naudotojo nustatymai';
$lang['admin']['usersassignedtogroup'] = 'Naudotojai priskirti grupei %s';
$lang['admin']['usertagexists'] = 'Žymė &scaron;iuo vardu jau egzistuoja. Parinkite Kitą';
$lang['admin']['usewysiwyg'] = 'Naudoti WYSIWYG redaktorių turiniui';
$lang['admin']['version'] = 'Versija';
$lang['admin']['view'] = 'Žiūrėti';
$lang['admin']['welcomemsg'] = 'Sveiki %s';
$lang['admin']['directoryabove'] = 'katalogas vir&scaron; esamo lygio';
$lang['admin']['nodefault'] = 'Nepasirinktas pagrindinis';
$lang['admin']['blobexists'] = 'HTML intarpo pavadinimas jau egzistuoja';
$lang['admin']['blobmanagement'] = 'HTML intarpų valdymas';
$lang['admin']['errorinsertingblob'] = 'Klaida įterpiant HTML intarpą';
$lang['admin']['addhtmlblob'] = 'Įdėti HTML intarpą';
$lang['admin']['edithtmlblob'] = 'Redaguoti HTML intarpą';
$lang['admin']['edithtmlblobsuccess'] = 'HTML intarpas atnaujintas';
$lang['admin']['tagtousegcb'] = 'HTML intarpo i&scaron;kvietimo kodas';
$lang['admin']['gcb_wysiwyg'] = 'Įjungti GCB WYSIWYG';
$lang['admin']['gcb_wysiwyg_help'] = 'Įjungti WYSIWYG redaktorių kai redaguojami HTML intarpai';
$lang['admin']['filemanager'] = 'Bylų valdymas';
$lang['admin']['imagemanager'] = 'Paveikslėlių valdymas';
$lang['admin']['encoding'] = 'Kodavimas';
$lang['admin']['clearcache'] = 'I&scaron;valyti laikinąją atmintį';
$lang['admin']['clear'] = 'I&scaron;valyti';
$lang['admin']['cachecleared'] = 'Laikinoji atmintis i&scaron;valyta';
$lang['admin']['apply'] = 'Patvirtinti';
$lang['admin']['applydescription'] = 'I&scaron;saugoti pakeitimus ir tęsti redagavimą';
$lang['admin']['none'] = 'Jokio';
$lang['admin']['wysiwygtouse'] = 'Pasirinkite WYSIWYG redaktorių kurį norite naudoti';
$lang['admin']['syntaxhighlightertouse'] = 'Pasirinkite sintaksės žymėtoją';
$lang['admin']['hasdependents'] = 'Turi priklausomybių';
$lang['admin']['missingdependency'] = 'Trūksta priklausomybių';
$lang['admin']['minimumversion'] = 'Minimali versija';
$lang['admin']['minimumversionrequired'] = 'Minimali reikalinga CMSMS versija';
$lang['admin']['maximumversion'] = 'maksimali versija';
$lang['admin']['maximumversionsupported'] = 'Maksimali palaikoma CMSMS versija';
$lang['admin']['depsformodule'] = 'Modulio %s priklausomybės';
$lang['admin']['installed'] = 'Įdiegta';
$lang['admin']['author'] = 'Autorius';
$lang['admin']['changehistory'] = 'Pakeisti istoriją';
$lang['admin']['moduleerrormessage'] = '%s modulio klaidos prane&scaron;imas';
$lang['admin']['moduleupgradeerror'] = 'Įvyko klaida atnaujinant modulį.';
$lang['admin']['moduleinstallmessage'] = 'Modulio %s įdiegimo prane&scaron;imas';
$lang['admin']['moduleuninstallmessage'] = 'Modulio %s panaikinimo prane&scaron;imas';
$lang['admin']['admintheme'] = 'Administravimo tema';
$lang['admin']['addstylesheet'] = 'Įdėti stilių puslapį';
$lang['admin']['editstylesheet'] = 'Redaguoti stilių puslapį';
$lang['admin']['addcssassociation'] = 'Įdėti stilių puslapio sąry&scaron;į';
$lang['admin']['attachstylesheet'] = 'Prijungti &scaron;į stilių puslapį';
$lang['admin']['attachtemplate'] = 'Prijungti prie &scaron;io &scaron;ablono';
$lang['admin']['main'] = 'Pagrindinis';
$lang['admin']['pages'] = 'Puslapiai';
$lang['admin']['page'] = 'Puslapis';
$lang['admin']['files'] = 'Bylos';
$lang['admin']['layout'] = 'I&scaron;dėstymas';
$lang['admin']['usersgroups'] = 'Naudotojai ir grupės';
$lang['admin']['extensions'] = 'Plėtiniai';
$lang['admin']['preferences'] = 'Nustatymai';
$lang['admin']['admin'] = 'Puslapio administravimas';
$lang['admin']['viewsite'] = 'Peržiūrėti puslapį';
$lang['admin']['templatecss'] = 'Priskirti &scaron;ablonus stilių puslapiui';
$lang['admin']['plugins'] = 'Priedai';
$lang['admin']['movecontent'] = 'Perstumti puslapius';
$lang['admin']['module'] = 'Modulis';
$lang['admin']['usertags'] = 'Naudotojo sukurtos žymės (Tags)';
$lang['admin']['htmlblobs'] = 'HTML intarpai';
$lang['admin']['adminhome'] = 'Admin Pagrindinis';
$lang['admin']['liststylesheets'] = 'Stilių puslapiai';
$lang['admin']['preferencesdescription'] = 'Čia yra vieta kur Jūs nustatote įvairius puslapio parametrus.';
$lang['admin']['adminlogdescription'] = 'Rodo įra&scaron;ų žurnalą apie tai kas ir ką darė admin zonoje.';
$lang['admin']['mainmenu'] = 'Pagrindinis meniu';
$lang['admin']['users'] = 'Naudotojai';
$lang['admin']['usersdescription'] = 'Čia valdomi naudotojai.';
$lang['admin']['groups'] = 'Grupės';
$lang['admin']['groupsdescription'] = 'Čia valdomos grupės.';
$lang['admin']['groupassignments'] = 'Grupių priskyrimai';
$lang['admin']['groupassignmentdescription'] = 'Čia Jūs galite priskirti naudotojus į grupes.';
$lang['admin']['groupperms'] = 'Grupių leidimai (teisės)';
$lang['admin']['grouppermsdescription'] = 'Nustatykite leidimus (teises) ir prieigos lygius grupėms';
$lang['admin']['pagesdescription'] = 'Čia galima pridėti bei redaguoti puslapius bei kitą turinį.';
$lang['admin']['htmlblobdescription'] = 'HTML intarpai yra turinio gabalai kuriuos Jūs galite įterpti į turinį ar &scaron;ablonus.';
$lang['admin']['templates'] = '&Scaron;ablonai';
$lang['admin']['templatesdescription'] = 'Čia galima įdėti ir redaguoti &scaron;ablonus. &Scaron;ablonai yra Jūsų puslapio skeletas - jie valdo puslapio i&scaron;vaizdą bei elgseną.';
$lang['admin']['stylesheets'] = 'Stilių puslapiai';
$lang['admin']['stylesheetsdescription'] = 'Stilių puslapių valdymas yra geras būdas atskirti ir valdyti stilius nuo &scaron;ablonų.';
$lang['admin']['filemanagerdescription'] = 'Atsiųsti ir valdyti bylas.';
$lang['admin']['imagemanagerdescription'] = 'Atsiųsti/Redaguoti ir i&scaron;trinti paveikslėlius.';
$lang['admin']['moduledescription'] = 'Moduliai praplečia CMS Made Simple sistemą ir prideda funkcionalumo.';
$lang['admin']['tagdescription'] = 'Žymės yra mažos funkcionalumo dalys kurios gali būti įdėtos į turinį ir/arba &scaron;abloną.';
$lang['admin']['usertagdescription'] = 'Žymes (tags) galite sukurti nar&scaron;yklės pagalba atlieka specifines užduotis.';
$lang['admin']['installdirwarning'] = '<em><strong>DĖMESIO:</strong></em> install katalogas vis dar egzistuoja. Pra&scaron;ome jį panaikinti.';
$lang['admin']['subitems'] = 'Sub-elementai';
$lang['admin']['extensionsdescription'] = 'Moduliai, žymės ir kiti rū&scaron;iuoti dalykai.';
$lang['admin']['usersgroupsdescription'] = 'Elementai susiję su naudotojais ir grupėmis.';
$lang['admin']['layoutdescription'] = 'Puslapio i&scaron;dėstymo nustatymai.';
$lang['admin']['admindescription'] = 'Puslapio administravimo funkcijos.';
$lang['admin']['contentdescription'] = 'Čia galima įdėti ir redaguoti turinį.';
$lang['admin']['enablecustom404'] = 'Įjungti 404 klaidos prane&scaron;imą';
$lang['admin']['enablesitedown'] = 'Įjungti prane&scaron;imą, kad puslapis neveikia';
$lang['admin']['bookmarks'] = 'Žymekliai';
$lang['admin']['user_created'] = 'Naudotojas sukurtas';
$lang['admin']['forums'] = 'Forumai';
$lang['admin']['wiki'] = 'Wiki';
$lang['admin']['irc'] = 'IRC';
$lang['admin']['module_help'] = 'Modulio pagalba';
$lang['admin']['managebookmarks'] = 'Valdyti žymeklius';
$lang['admin']['editbookmark'] = 'Redaguoti žymeklį';
$lang['admin']['addbookmark'] = 'Pridėti žymeklį';
$lang['admin']['recentpages'] = 'Nesenai naudoti puslapiai';
$lang['admin']['groupname'] = 'Grupės pavadinimas';
$lang['admin']['selectgroup'] = 'Pasirinkite grupę';
$lang['admin']['updateperm'] = 'Atnaujinti leidimus (teises)';
$lang['admin']['admincallout'] = 'Administravimo trumpiausi keliai (Shortcuts)';
$lang['admin']['showbookmarks'] = 'Rodyti administratoriaus žymeklius';
$lang['admin']['hide_help_links'] = 'Paslėpti pagalbos nuorodas';
$lang['admin']['hide_help_links_help'] = 'Pažymėkite &scaron;į lauką jei norite padaryti neaktyviais wiki ir modulio pagalbos nuorodas puslapio antra&scaron;tėje.';
$lang['admin']['showrecent'] = 'Rodyti nesenai naudotus puslapius';
$lang['admin']['attachtotemplate'] = 'Prijunkite stilių puslapį &scaron;ablonui';
$lang['admin']['attachstylesheets'] = 'Prijunkite stilių puslapius';
$lang['admin']['indent'] = 'Atitraukti sąra&scaron;ą nuo kra&scaron;to, taip formuojant puslapių hierarchinį vaizdą';
$lang['admin']['adminindent'] = 'Turinio atvaizdavimas';
$lang['admin']['contract'] = 'Sutraukti grupę';
$lang['admin']['expand'] = 'I&scaron;skleisti grupę';
$lang['admin']['expandall'] = 'I&scaron;skleisti visas grupes';
$lang['admin']['contractall'] = 'Sutraukti visas grupes';
$lang['admin']['menu_bookmarks'] = '[+]';
$lang['admin']['globalconfig'] = 'Globalūs Nustatymai';
$lang['admin']['adminpaging'] = 'Rodomas turinio elementų skaičius viename puslapyje';
$lang['admin']['nopaging'] = 'Rodyti visus';
$lang['admin']['myprefs'] = 'Mano nustatymai';
$lang['admin']['myprefsdescription'] = 'Čia galite nustatyti administravimo dalies parametrus taip, kaip Jums patinka.';
$lang['admin']['myaccount'] = 'Mano naudotojas';
$lang['admin']['myaccountdescription'] = 'Čia galite pakeisti savo naudotojo asmeninius nustatymus.';
$lang['admin']['adminprefs'] = 'Naudotojo nustatymai';
$lang['admin']['adminprefsdescription'] = 'Čia Jūs nustatote specifinius nustatymus puslapio administravimui.';
$lang['admin']['managebookmarksdescription'] = 'Čia jūs galite valdyti administratoriaus žymeklius.';
$lang['admin']['options'] = 'Pasirinkimai';
$lang['admin']['langparam'] = '&Scaron;is parametras naudojamas nurodyti kokia kalba bus naudojama svetainėje, kurią matys lankytojas. Ne visi moduliai turi ar reikalauja &scaron;io parametro.';
$lang['admin']['parameters'] = 'Parametrai';
$lang['admin']['mediatype'] = 'Media tipas';
$lang['admin']['mediatype_'] = 'Nenurodytas joks: bus paveikti visi elementai';
$lang['admin']['mediatype_all'] = 'all : Tinka visiems prietaisams';
$lang['admin']['mediatype_aural'] = 'aural : Numatytas balso sintezavimui';
$lang['admin']['mediatype_braille'] = 'braille : Numatytas Brailio taktiliniams prietaisams';
$lang['admin']['mediatype_embossed'] = 'embossed : Numatytas brailio spausdintuvams';
$lang['admin']['mediatype_handheld'] = 'handheld : Numatytas prietaisams su kotu (handheld)';
$lang['admin']['mediatype_print'] = 'print : Numatytas puslapiams spausdinimo rėžime';
$lang['admin']['mediatype_projection'] = 'projection : Numatytas prezentacijų rodymui';
$lang['admin']['mediatype_screen'] = 'screen : Numatytas pirmiausia kompiuterio spalvu';
$lang['admin']['mediatype_tty'] = 'tty : Intended for media using a fixed-pitch character grid, such as teletypes and terminals.';
$lang['admin']['mediatype_tv'] = 'tv : Skirta televizinio tipo prietaisams';
$lang['admin']['assignmentchanged'] = 'Grupių priskyrimai atnaujinti';
$lang['admin']['stylesheetexists'] = 'Stilių puslapis egzistuoja';
$lang['admin']['errorcopyingstylesheet'] = 'Klaida kopijuojant stilių puslapį';
$lang['admin']['copystylesheet'] = 'Kopijuoti stilių puslapį';
$lang['admin']['newstylesheetname'] = 'Nauja stilių puslapio pavadinimas';
$lang['admin']['target'] = 'Taikinys';
$lang['admin']['xml'] = 'XML';
$lang['admin']['xmlmodulerepository'] = 'URL arba modulio saugyklos soap serveris';
$lang['admin']['metadata'] = 'Meta duomenys';
$lang['admin']['globalmetadata'] = 'Globalūs meta duomenys';
$lang['admin']['titleattribute'] = 'Title atributas';
$lang['admin']['tabindex'] = 'Tab&#039;o indeksas';
$lang['admin']['accesskey'] = 'Priėjimo raktas';
$lang['admin']['sitedownwarning'] = '<strong>DĖMESIO:</strong> Jūsų svetainėje rodoma prane&scaron;imas, kad puslapis neveikia.  Pa&scaron;alinkite %s failą norėdami i&scaron;taisyti.';
$lang['admin']['deletecontent'] = 'I&scaron;trinti turinį';
$lang['admin']['deletepages'] = 'I&scaron;trinti &scaron;iuos puslapius?';
$lang['admin']['selectall'] = 'Pasirinkti visus';
$lang['admin']['selecteditems'] = 'Pasirinkti elementai';
$lang['admin']['inactive'] = 'Neaktyvus';
$lang['admin']['deletetemplates'] = 'I&scaron;trinti &scaron;ablonus';
$lang['admin']['templatestodelete'] = '&Scaron;ie &scaron;ablonai bus i&scaron;trinti';
$lang['admin']['wontdeletetemplateinuse'] = '&Scaron;ie &scaron;ablonai yra naudojami ir nebus i&scaron;trinti';
$lang['admin']['deletetemplate'] = 'I&scaron;trinti stilių puslapius';
$lang['admin']['stylesheetstodelete'] = '&Scaron;ie stilių puslapiai bus i&scaron;trinti';
$lang['admin']['sitename'] = 'Puslapio pavadinimas';
$lang['admin']['siteadmin'] = 'Puslapio administravimas';
$lang['admin']['images'] = 'Paveikslėlių valdymas';
$lang['admin']['blobs'] = 'HTML intarpai';
$lang['admin']['groupmembers'] = 'Grupės priskyrimai';
$lang['admin']['troubleshooting'] = '(Troubleshooting&#039;as)';
$lang['admin']['event_desc_loginpost'] = 'Nusiųsta prie&scaron; naudotojui prisijungiant prie administravimo';
$lang['admin']['event_desc_logoutpost'] = 'Nusiųsta naudotojui atsijungus nuo administravimo';
$lang['admin']['event_desc_adduserpre'] = 'Nusiųsta prie&scaron; sukuriant naują naudotoją';
$lang['admin']['event_desc_adduserpost'] = 'Nusiųsta sukūrus naują naudotoją';
$lang['admin']['event_desc_edituserpre'] = 'Nusiųsta prie&scaron; i&scaron;saugant pakeistus naudotojo duomenis';
$lang['admin']['event_desc_edituserpost'] = 'Nusiųsta i&scaron;saugojus pakeistus naudotojo duomenis';
$lang['admin']['event_desc_deleteuserpre'] = 'Nusiųsta prie&scaron; i&scaron;trinant naudotoją i&scaron; sistemos';
$lang['admin']['event_desc_deleteuserpost'] = 'Nusiųsta i&scaron;trynus naudotoją i&scaron; sistemos';
$lang['admin']['event_desc_addgrouppre'] = 'Nusiųsta prie&scaron; sukuriant naują grupę';
$lang['admin']['event_desc_addgrouppost'] = 'Nusiųsta sukūrus naują grupę';
$lang['admin']['event_desc_changegroupassignpre'] = 'Nusiųsta prie&scaron; i&scaron;saugant grupės priskyrimus';
$lang['admin']['event_desc_changegroupassignpost'] = 'Nusiųsta i&scaron;saugojus grupės priskyrimus';
$lang['admin']['event_desc_editgrouppre'] = 'Nusiųsta prie&scaron; i&scaron;saugant grupės pakeitimus';
$lang['admin']['event_desc_editgrouppost'] = 'Nusiųsta i&scaron;saugojus grupės pakeitimus';
$lang['admin']['event_desc_deletegrouppre'] = 'Nusiųsta prie&scaron; i&scaron;trinant grupę i&scaron; sistmos';
$lang['admin']['event_desc_deletegrouppost'] = 'Nusiųsta i&scaron;trynus grupę i&scaron; sistemos';
$lang['admin']['event_desc_addstylesheetpre'] = 'Nusiųsta prie&scaron; sukuriant naują stiliųSent before a new stylesheet is created';
$lang['admin']['event_desc_addstylesheetpost'] = 'Nusiųsta sukūrus naują stilių';
$lang['admin']['event_desc_editstylesheetpre'] = 'Nusiųsta prie&scaron; i&scaron;saugant stilių pakeitimus';
$lang['admin']['event_desc_editstylesheetpost'] = 'Nusiųsta i&scaron;saugojus stilių pakeitimus';
$lang['admin']['event_desc_deletestylesheetpre'] = 'Nusiųsta prie&scaron; i&scaron;trinant stilių i&scaron; sistemos';
$lang['admin']['event_desc_deletestylesheetpost'] = 'Nusiųsta i&scaron;trynus stilių i&scaron; sistemos';
$lang['admin']['event_desc_addtemplatepre'] = 'Nusiųsta prie&scaron; sukuriant naują &scaron;abloną';
$lang['admin']['event_desc_addtemplatepost'] = 'Nusiųsta sukūrus naują &scaron;abloną';
$lang['admin']['event_desc_edittemplatepre'] = 'Nusiųsta prie&scaron; i&scaron;saugant pakeitimus &scaron;alone';
$lang['admin']['event_desc_edittemplatepost'] = 'Nusiųsta i&scaron;saugojus &scaron;ablono pakeitimus';
$lang['admin']['event_desc_deletetemplatepre'] = 'Nusiųsta prie&scaron; i&scaron;trinant &scaron;abloną i&scaron; sistemos';
$lang['admin']['event_desc_deletetemplatepost'] = 'Nusiųsta i&scaron;trynus &scaron;abloną i&scaron; sistemos';
$lang['admin']['event_desc_templateprecompile'] = 'Nusiųsta prie&scaron; &scaron;ablono nusiuntimą į smarty apdorojimui';
$lang['admin']['event_desc_templatepostcompile'] = 'Nusiųsta po &scaron;ablono nusiuntimo į smarty apdorojimui';
$lang['admin']['event_desc_addglobalcontentpre'] = 'Nusiųsta prie&scaron; sukuriant naują HTML intarpą';
$lang['admin']['event_desc_addglobalcontentpost'] = 'Nusiųsta sukūrus naują HTML intarpą';
$lang['admin']['event_desc_editglobalcontentpre'] = 'Nusiųsta prie&scaron; i&scaron;saugant HTML intarpo pakeitimus';
$lang['admin']['event_desc_editglobalcontentpost'] = 'Nusiųsta i&scaron;saugojus HTML intarpo pakeitimus';
$lang['admin']['event_desc_deleteglobalcontentpre'] = 'Nusiųsta prie&scaron; i&scaron;trinant HTML intarpą i&scaron; sistemos';
$lang['admin']['event_desc_deleteglobalcontentpost'] = 'Nusiųsta i&scaron;trynus HTML intarpą i&scaron; sistemos';
$lang['admin']['event_desc_globalcontentprecompile'] = 'Nusiųsta prie&scaron; nusiunčiant HTML intarpą į smarty apdorojimui';
$lang['admin']['event_desc_globalcontentpostcompile'] = 'Nusiųsta po HTML intarpo i&scaron;siuntimo į smarty apdorojimui';
$lang['admin']['event_desc_contenteditpre'] = 'Nusiųsta prie&scaron; i&scaron;saugant turinio pakeitimus';
$lang['admin']['event_desc_contenteditpost'] = 'Nusiųsta i&scaron;saugojus turinio pakeitimus';
$lang['admin']['event_desc_contentdeletepre'] = 'Nusiųsta prie&scaron; i&scaron;trinant turinį i&scaron; sistemos';
$lang['admin']['event_desc_contentdeletepost'] = 'Nusiųsta i&scaron;trynus turinį i&scaron; sistemos';
$lang['admin']['event_desc_contentstylesheet'] = 'Nusiųsta prie&scaron; stiliaus nusiuntimą į nar&scaron;yklę';
$lang['admin']['event_desc_contentprecompile'] = 'Nusiųsta prie&scaron; nusiunčiant turinį į smarty apdorojimui';
$lang['admin']['event_desc_contentpostcompile'] = 'Nusiųsta po smarty turinio apdorojimo';
$lang['admin']['event_desc_contentpostrender'] = 'Nusiųsta prie&scaron; html nusiuntimo į nar&scaron;yklę';
$lang['admin']['event_desc_smartyprecompile'] = 'Nusiųsta prie&scaron; bet kokio turinio, skirto smarty, apdorojimą';
$lang['admin']['event_desc_smartypostcompile'] = 'Nusiųsta po bet kokio turinio, skirto smarty, apdorojimo';
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
$lang['admin']['event_help_deletetemplatepre'] = '<p>Sent before a template is deleted from the system.</p>
<h4>Parameters</h4>
<ul>
<li>&#039;template&#039; - Reference to the affected template object.</li>
</ul>
';
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
$lang['admin']['filterbymodule'] = 'Filtruoti pagal modulį';
$lang['admin']['showall'] = 'Rodyti visus';
$lang['admin']['core'] = 'Branduolys';
$lang['admin']['defaultpagecontent'] = 'Įprastas turinio tipas';
$lang['admin']['file_url'] = 'Nuorodos į bylas (vietoj URL)';
$lang['admin']['no_file_url'] = 'Joks (Naudoti URL auk&scaron;čiau)';
$lang['admin']['defaultparentpage'] = 'Įprastas tėvinis puslapis';
$lang['admin']['error_udt_name_whitespace'] = 'Klaida: Naudotojo sukurtos žymės pavadinimas negali būt su tarpu.';
$lang['admin']['warning_safe_mode'] = '<strong><em>Įspėjimas:</em></strong> PHP Safe mode įjungta.  Tai sukels nepatogumų bylų siuntimo metu. Patartina susisiekus su serverio administratoriais i&scaron;jungti safe mode.';
$lang['admin']['test'] = 'Testas';
$lang['admin']['results'] = 'Rezultatas';
$lang['admin']['untested'] = 'Netestuota';
$lang['admin']['unknown'] = 'Nežinomas';
$lang['admin']['download'] = 'Parsisiųsti';
$lang['admin']['frontendwysiwygtouse'] = 'Prie&scaron;akinis wysiwyg';
$lang['admin']['all_groups'] = 'Visos grupės';
$lang['admin']['error_type'] = 'Klaidos tipas';
$lang['admin']['contenttype_errorpage'] = 'Klaidos puslapis';
$lang['admin']['errorpagealreadyinuse'] = 'Error Code Already in Use';
$lang['admin']['404description'] = 'Puslapis nerastas';
$lang['admin']['usernotfound'] = 'Naudotojas nerastas';
$lang['admin']['passwordchange'] = 'Pra&scaron;ome, pateikti naują slaptažodį';
$lang['admin']['recoveryemailsent'] = 'E. lai&scaron;kas su tolimesnėmis instrukcijomis i&scaron;siųstas įra&scaron;ytu adresu. Pra&scaron;ome pasitikrinkite jūsų e. pa&scaron;to dėžutę. ';
$lang['admin']['errorsendingemail'] = 'Įvyko klaida siunčiant e. lai&scaron;ką. Susisiekite su savo administratoriumi.';
$lang['admin']['passwordchangedlogin'] = 'Slaptažodis pakeistas. Pra&scaron;ome prisijungti naudojant naujus prisijungimo duomenis.';
$lang['admin']['nopasswordforrecovery'] = '&Scaron;itam naudotojui nėra nurodytas e. pa&scaron;to adresas, todėl slaptažodžio priminimas negalimas. Kreipkitės į jūsų administratorių.';
$lang['admin']['lostpw'] = 'Užmir&scaron;ote slaptažodį?';
$lang['admin']['lostpwemailsubject'] = '[%s] Slaptažodžio priminimas';
$lang['admin']['lostpwemail'] = 'You are recieving this e-mail because a request has been made to change the (%s) password associated with this user account (%s).  If you would like to reset the password for this account simply click on the link below or paste it into the url field on your favorite browser:
%s

If you feel this is incorrect or made in error, simply ignore the email and nothing will change.';
$lang['admin']['qca'] = 'P0-397021319-1259924410830';
$lang['admin']['utma'] = '156861353.499712353.1260116687.1272125657.1272925371.65';
$lang['admin']['utmz'] = '156861353.1272925371.65.49.utmccn=(referral)|utmcsr=forum.cmsmadesimple.org|utmcct=/index.php|utmcmd=referral';
$lang['admin']['utmb'] = '156861353';
$lang['admin']['utmc'] = '156861353';
?>