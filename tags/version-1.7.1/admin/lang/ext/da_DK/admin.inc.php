<?php
$lang['admin']['insecure'] = 'Ikke-sikret (HTTP)';
$lang['admin']['secure'] = 'Sikret (HTTPS)';
$lang['admin']['secure_page'] = 'Benyt HTTPS for denne side';
$lang['admin']['thumbnail_width'] = 'Billed-eksempel bredde';
$lang['admin']['thumbnail_height'] = 'Billed-eksempel h&oslash;jde';
$lang['admin']['E_STRICT'] = 'Is E_STRICT disabled in error_reporting';
$lang['admin']['test_estrict_failed'] = 'E_STRICT is enabled in the error_reporting';
$lang['admin']['info_estrict_failed'] = 'Some libraries that CMSMS uses do not work well with E_STRICT.  Please disable this before continuing';
$lang['admin']['E_DEPRECATED'] = 'Is E_DEPRECATED disabled in error_reporting';
$lang['admin']['test_edeprecated_failed'] = 'E_DEPRECATED er sl&aring;et til';
$lang['admin']['info_edeprecated_failed'] = 'If E_DEPRECATED is enabled in your error reporting users will see alot of warning messages that could effect the display and functionalty';
$lang['admin']['session_use_cookies'] = 'Sessioner m&aring; gerne benytte sig af Cookies';
$lang['admin']['errorgettingcontent'] = 'Kunne ikke indhente information om the specificerede indholds-objekt';
$lang['admin']['errordeletingcontent'] = 'Fejl ved sletning af indhold (enten har denne side undersider, eller ogs&aring; er det standardsiden)';
$lang['admin']['invalidemail'] = 'Email adressen er ikke gyldig';
$lang['admin']['info_deletepages'] = 'Bem&aelig;rk: p&aring; grund af manglende rettigheder, kan nogle af de sider du valgte til at slettes mangle nedenfor';
$lang['admin']['info_pagealias'] = 'Angiv et unikt alias for siden';
$lang['admin']['info_autoalias'] = 'Hvis dette felt er tomt, vil et alias blive lavet automatisk';
$lang['admin']['invalidparent'] = 'Du skal angive en overliggende side til siden (kontakt din systemadminisitraor hvis du ikke ser denne valgmulighed)';
$lang['admin']['forgotpwprompt'] = 'Skriv din administrator brugernavn. En email med nye login-oplysninger vil blive sendt til den adresse der er tilknyttet brugernavnet.';
$lang['admin']['info_basic_attributes'] = 'Dette felt giver dig mulighed for at specificere hvilket indholdsegenskaber brugere uden &amp;quot;H&aring;ndt&eacute;r alt indhold&amp;quot; tilladelsen har mulighed for at redigere.';
$lang['admin']['basic_attributes'] = 'Alm. egenskaber';
$lang['admin']['no_permission'] = 'Du har ikke tilladelse til at udf&oslash;re dette';
$lang['admin']['bulk_success'] = 'Masse operationen blev korrekt gennemf&oslash;rt.';
$lang['admin']['no_bulk_performed'] = 'Ingen masse operation udf&oslash;rt.';
$lang['admin']['info_preview_notice'] = 'Advarsel: Forh&aring;ndsvisningen opf&oslash;rer sig meget lige et browser vindue, og giver mulighed for at navigere v&aelig;k fra den side du forh&aring;ndsviser. Hvis du g&oslash;r dette kan der ske s&aelig;re ting. Hvis du navigerer v&aelig;k fra siden og tilbage igen, vil du ikke se indholds&aelig;ndringer der ikke er gemt. N&aring;r du tilf&oslash;jer en side og navigerer v&aelig;k fra denne i forh&aring;ndsvisningen vil du ikke kunne g&aring; tilbage igen.';
$lang['admin']['sitedownexcludes'] = 'Vis ikke SiteDown beskeder for bes&oslash;gende fra disse adresser';
$lang['admin']['info_sitedownexcludes'] = 'This parameter allows listing a comma separated list of ip addresses or networks that should not be subject to the sitedown mechanism.  This allows administrators to work on a site whilst anonymous visitors receive a sitedown message.<br/><br/>Addresses can be specified in the following formats:<br/>
1. xxx.xxx.xxx.xxx -- (exact IP address)<br/>
2. xxx.xxx.xxx.[yyy-zzz] -- (IP address range)<br/>
3. xxx.xxx.xxx.xxx/nn -- (nnn = number of bits, cisco style.  i.e:  192.168.0.100/24 = entire 192.168.0 class C subnet)';
$lang['admin']['setup'] = 'Avanceret ops&aelig;tning';
$lang['admin']['handle_404'] = 'Brugerdefineret 404 h&aring;ndtering';
$lang['admin']['sitedown_settings'] = 'Sitedown indstillinger';
$lang['admin']['general_settings'] = 'Generelle indstillinger';
$lang['admin']['help_function_page_attr'] = '<h3>What does this do?</h3>
<p>This tag can be used to return the value of the attributes of a certain page.</p>
<h3>How do I use it?</h3>
<p>Insert the tag into the template like: <code>{page_attr key=&quot;extra1&quot;}</code>.</p>
<h3>What parameters does it take?</h3>
<ul>
  <li><strong>key [required]</strong> The key to return the attribute of.</li>
</ul>';
$lang['admin']['forge'] = 'Forge';
$lang['admin']['disable_wysiwyg'] = 'WYSIWYG ikke tilladt for denne side';
$lang['admin']['help_function_page_image'] = '<h3>What does this do?</h3>
<p>This tag can be used to return the value of the image or thumbnail fields of a certain page.</p>
<h3>How do I use it?</h3>
<p>Insert the tag into the template like: <code>{page_image}</code>.</p>
<h3>What parameters does it take?</h3>
<ul>
  <li>thumbnail - Optionally display the value of the thumbnail property instead of the image property.</li>
</ul>';
$lang['admin']['pagelink_circular'] = 'Et sidelink kan ikke have et andet sidelink som dets destination';
$lang['admin']['destinationnotfound'] = 'Den valgte side kunne ikke findes eller er ugyldig';
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
$lang['admin']['sqlerror'] = 'SQL fejl i %s';
$lang['admin']['image'] = 'Billede';
$lang['admin']['thumbnail'] = 'Billedeksempel';
$lang['admin']['searchable'] = 'Denne side er s&oslash;gbar';
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
$lang['admin']['error_udt_name_chars'] = 'Et gyldigt UDT navn starter med et bogstav eller underscore, efterfulgt af et antal bogstaver, tal eller underscores';
$lang['admin']['errorupdatetemplateallpages'] = 'Skabelonen er ikke aktiv';
$lang['admin']['hidefrommenu'] = 'Skjul i menu';
$lang['admin']['settemplate'] = 'S&aelig;t skabelon';
$lang['admin']['text_settemplate'] = 'S&aelig;t ny skabelon for de markerede sider';
$lang['admin']['cachable'] = 'Kan cache&#039;s';
$lang['admin']['noncachable'] = 'Kan ikke cache&#039;s';
$lang['admin']['copy_from'] = 'Kopi&eacute;r fra';
$lang['admin']['copy_to'] = 'Kopi&eacute;r til';
$lang['admin']['copycontent'] = 'Kopi&eacute;r indhold';
$lang['admin']['md5_function'] = 'md5 funktion';
$lang['admin']['tempnam_function'] = 'tempnam funktion';
$lang['admin']['register_globals'] = 'PHP register_globals';
$lang['admin']['output_buffering'] = 'PHP output_buffering';
$lang['admin']['disable_functions'] = 'disable_functions i PHP';
$lang['admin']['xml_function'] = 'Basal XML (expat) underst&oslash;ttelse';
$lang['admin']['magic_quotes_gpc'] = 'Magic quotes for Get/Post/Cookie';
$lang['admin']['magic_quotes_gpc_on'] = 'Apostrof, anf&oslash;rselstegn og backslash escape&#039;s automatisk. Du kan f&aring;r problemer med at gemme skabeloner';
$lang['admin']['magic_quotes_runtime'] = 'Magic quotes in runtime';
$lang['admin']['magic_quotes_runtime_on'] = 'Most functions that return data will have quotes escaped with a backslash. You can to have problems';
$lang['admin']['file_get_contents'] = 'Test file_get_contents';
$lang['admin']['check_ini_set'] = 'Test ini_set';
$lang['admin']['check_ini_set_off'] = 'Du kan f&aring; problemer med visse funktioner uden denne egenskab. Denne test kan fejle hvis safe_mode er sl&aring;et til';
$lang['admin']['file_uploads'] = 'Fil uploads';
$lang['admin']['test_remote_url'] = 'Test af remote URL';
$lang['admin']['test_remote_url_failed'] = 'Du kan muligvis ikke &aring;bne en fil p&aring; en ikke-lokal server';
$lang['admin']['test_allow_url_fopen_failed'] = 'Hvis du tillader at url fopen er sl&aring;et fra vil du ikke kunne tilg&aring; URL objekter ved hj&aelig;lp af ftp eller http protokollerne.';
$lang['admin']['connection_error'] = 'Udg&aring;ende http forbindelse lader til ikke at virke! Er der en firewall eller ACL der blokeret eksterne forbindelser? Dette vil g&oslash;re at Modul H&aring;ndtering og potentielt anden funktionalitet ikke virker.';
$lang['admin']['remote_connection_timeout'] = 'Forbindelsen tog for lang tid.';
$lang['admin']['search_string_find'] = 'Forbindelse ok!';
$lang['admin']['connection_failed'] = 'Forbindelse fejlede!';
$lang['admin']['remote_response_ok'] = 'Fjern svar: ok!';
$lang['admin']['remote_response_404'] = 'Fjern svar: ikke fundet!';
$lang['admin']['remote_response_error'] = 'Fjern svar: fejl!';
$lang['admin']['notifications_to_handle'] = 'Du har <b>%d</b> ventende underretninger';
$lang['admin']['notification_to_handle'] = 'Du har <b>%d</b> ventende underretninger';
$lang['admin']['notifications'] = 'Underretninger';
$lang['admin']['dashboard'] = 'Vis Dashboard';
$lang['admin']['ignorenotificationsfrommodules'] = 'Ignor&eacute;r underretninger fra disse moduler';
$lang['admin']['admin_enablenotifications'] = 'Tillade brugere at vise underretninger<br/><em>(underretninger vil blive vist p&aring; alle administrations sider)</em>';
$lang['admin']['enablenotifications'] = 'Vis underretninger i admin delen';
$lang['admin']['test_check_open_basedir_failed'] = 'Open basedir begr&aelig;nsningen er sl&aring;et til. Du vil m&aring;ske opleve problemer med nogle udvidede funktioner.';
$lang['admin']['config_writable'] = 'config.php er skrivbar. Det er sikrere hvis du &aelig;ndre tilladelsen til skrive-beskyttet';
$lang['admin']['caution'] = 'Advarsel';
$lang['admin']['create_dir_and_file'] = 'Kontrollerer om httpd processen kan oprette en fil inde i en mappe den skabte';
$lang['admin']['os_session_save_path'] = 'Kan ikke kontrolleres pga. OS sti';
$lang['admin']['unlimited'] = 'Ubegr&aelig;nset';
$lang['admin']['open_basedir'] = 'PHP Open Basedir';
$lang['admin']['open_basedir_active'] = 'Kan ikke kontrolleres pga af at open_basedir er aktiv';
$lang['admin']['invalid'] = 'Ugyldig';
$lang['admin']['checksum_passed'] = 'Alle checksumme svarede til dem i den upload&#039;ede fil';
$lang['admin']['error_retrieving_file_list'] = 'Fejl ved hentning af file liste';
$lang['admin']['files_checksum_failed'] = 'Filer kunne ikke kontrolleres';
$lang['admin']['failure'] = 'Fejl';
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
$lang['admin']['page_metadata'] = 'Side specifik metadata';
$lang['admin']['pagedata_codeblock'] = 'Smarty data eller logik som er specifik for denne side';
$lang['admin']['error_uploadproblem'] = 'Der skete en fejl ved upload';
$lang['admin']['error_nofileuploaded'] = 'Ingen fil blev uploadet';
$lang['admin']['files_failed'] = 'Filer fejlede md5sum kontrol';
$lang['admin']['files_not_found'] = 'Filer ikke fundet';
$lang['admin']['info_generate_cksum_file'] = 'Denne funktion giver mulighed for at generere en checksum fil og gemme den p&aring; din lokale computer til senere kontrol. Dette b&oslash;r g&oslash;res lige f&oslash;r et site lanceres, og/eller efter opgraderinger eller st&oslash;rre &aelig;ndringer.';
$lang['admin']['info_validation'] = 'Denne funktion vil sammenligne checksummene i den upload&#039;ede fil med filerne i installationen. Det kan hj&aelig;lpe med at finde problemer ved upload, eller pr&aelig;cis hvilke filer det blev &aelig;ndret ved hacking. En checksum fil genereres for hver version af CMS Made Simple fra version 1.4 og frem.';
$lang['admin']['download_cksum_file'] = 'Hen checksum fil';
$lang['admin']['perform_validation'] = 'Udf&oslash;rer validering';
$lang['admin']['upload_cksum_file'] = 'Upload Checksum fil';
$lang['admin']['checksumdescription'] = 'Valid&eacute;r CMS filer ved at sammenligne med kendte checksumme';
$lang['admin']['system_verification'] = 'System Verifikation';
$lang['admin']['extra1'] = 'Ekstra sideegenskab 1';
$lang['admin']['extra2'] = 'Ekstra sideegenskab 2';
$lang['admin']['extra3'] = 'Ekstra sideegenskab 3';
$lang['admin']['start_upgrade_process'] = 'Start opgraderingsprocessen';
$lang['admin']['warning_upgrade'] = '<em><strong>Advarsel:</strong></em> CMSMS beh&oslash;ver en opgradering';
$lang['admin']['warning_upgrade_info1'] = 'Du k&oslash;rer nu skema version %s, og du bliver n&oslash;dt til at opgradere til version %s';
$lang['admin']['warning_upgrade_info2'] = 'Klik venligst p&aring; dette link: %s.';
$lang['admin']['warning_mail_settings'] = 'Dine mail indstillinger er ikke blevet sat. Dette kan skabe problemer for dit site&#039;s evne til at sende emails. Du b&oslash;r g&aring; til <a href="%s">Udvidelser >> CMSMailer</a> og konfigurere indstillingerne til det din host har angivet..';
$lang['admin']['view_page'] = 'Vis denne side i et nyt vindue';
$lang['admin']['off'] = 'Til';
$lang['admin']['on'] = 'Fra';
$lang['admin']['invalid_test'] = 'Ugyldig test parameter v&aelig;rdi!';
$lang['admin']['copy_paste_forum'] = 'Vis tekst rapport <em>(egner sig til at kopiere ind i forum-foresp&oslash;rgsler)</em>';
$lang['admin']['permission_information'] = 'Rettigheds information';
$lang['admin']['server_os'] = 'Server Operativ System';
$lang['admin']['server_api'] = 'Server API';
$lang['admin']['server_software'] = 'Server Software';
$lang['admin']['server_information'] = 'Server Information';
$lang['admin']['session_save_path'] = 'Session Save Path';
$lang['admin']['max_execution_time'] = 'Maksimal k&oslash;rselstid';
$lang['admin']['gd_version'] = 'GD version';
$lang['admin']['upload_max_filesize'] = 'Maksimal upload st&oslash;rrelse';
$lang['admin']['post_max_size'] = 'Maksimal post st&oslash;rrelse';
$lang['admin']['memory_limit'] = 'PHP hukommelses gr&aelig;nse';
$lang['admin']['server_db_type'] = 'Server Database';
$lang['admin']['server_db_version'] = 'Server Database Version';
$lang['admin']['phpversion'] = 'Nuv&aelig;rende PHP version';
$lang['admin']['safe_mode'] = 'PHP Safe Mode';
$lang['admin']['php_information'] = 'PHP Information';
$lang['admin']['cms_install_information'] = 'Information vedr&oslash;rende CMS-installationen';
$lang['admin']['cms_version'] = 'CMS Version';
$lang['admin']['installed_modules'] = 'Installerede moduler';
$lang['admin']['config_information'] = 'Information vedr&oslash;rende konfigurationen';
$lang['admin']['systeminfo_copy_paste'] = 'Kopi&eacute;r venligst denne markerede tekst ind i dit forum-indl&aelig;g';
$lang['admin']['help_systeminformation'] = 'Informationen vist nedenfor er samlet fra en r&aelig;kke steder og opsummeret her s&aring; du nemt kan finde oplysningerne der kr&aelig;ves for at hj&aelig;lpe til diagnosticering af problemer eller sp&oslash;rge om hj&aelig;lp med din CMS Made Simple installation.';
$lang['admin']['systeminfo'] = 'Information vedr&oslash;rende systemet';
$lang['admin']['systeminfodescription'] = 'Viser forskellige typer information om dit system som kan v&aelig;re brugbare til diagnosticering af problemer';
$lang['admin']['welcome_user'] = 'Velkommen';
$lang['admin']['itsbeensincelogin'] = 'Der er g&aring;et %s siden dit sidste login';
$lang['admin']['days'] = 'dage';
$lang['admin']['day'] = 'dag';
$lang['admin']['hours'] = 'timer';
$lang['admin']['hour'] = 'time';
$lang['admin']['minutes'] = 'minutter';
$lang['admin']['minute'] = 'minut';
$lang['admin']['help_css_max_age'] = 'Dette parameter skal s&aelig;ttes ret h&oslash;jt for statiske sites, og s&aelig;ttes til 0 for sites under udvikling';
$lang['admin']['css_max_age'] = 'Maksimal tid (i sekunder) typografiark kan v&aelig;re cache&#039;t i browseren';
$lang['admin']['error'] = 'Fejl';
$lang['admin']['clear_version_check_cache'] = 'Nulstil enhver cache&#039;t versions information ved afsendelse';
$lang['admin']['new_version_available'] = '<em>Bem&aelig;rk:</em> En ny version af CMS Made Simple er tilg&aelig;ngelig. Underret venligst den systemansvarlige';
$lang['admin']['info_urlcheckversion'] = 'Hvis denne url indeholder &quot;none&quot; vil der ikke blive foretaget kontrol.<br/>Ved intet indhold vil standard url&#039;en blive benyttet';
$lang['admin']['urlcheckversion'] = 'Kontroll&eacute;r for nye CMS versioner med denn URL';
$lang['admin']['master_admintheme'] = 'Standard Admininstrationstema (for login-siden og nye brugerkonti)';
$lang['admin']['contenttype_separator'] = 'Adskillelse';
$lang['admin']['contenttype_sectionheader'] = 'Sektionsoverskrift';
$lang['admin']['contenttype_link'] = 'Eksternt link';
$lang['admin']['contenttype_content'] = 'Indhold';
$lang['admin']['contenttype_pagelink'] = 'Internt sidelink';
$lang['admin']['nogcbwysiwyg'] = 'Tillad ikke WYSIWYG-redigering ved globale indholdsblokke';
$lang['admin']['destination_page'] = 'Destinationsside';
$lang['admin']['additional_params'] = 'Yderligere parametre';
$lang['admin']['help_function_current_date'] = '	<h3>Hvad g&oslash;r denne funktion?</h3>
	<p>Inds&aelig;tter den aktuelle dato og klokkeslet.  Hvis der ikke er angivet et format, formateres der som standard til noget i retning af &#039;Jan 01, 2004&#039;.</p>
	<h3>Hvordan bruger jeg det?</h3>
	<p>Du skal blot inds&aelig;tte en kode i en skabelon/side s&aring;som: <code>{current_date format=&quot;%A %d-%b-%y %T %Z&quot;}</code></p>
	<h3>Hvilke parametre bruger den?</h3>
	<ul>
		<li><em>(valgfri)</em> <b>&quot;format&quot;</b> - Dato -og tids-format som anvender parametre fra php&#039;s strftime function. <a href="http://php.net/strftime" target="_blank">Se listen over parametre samt yderligere information her</a>.</li>
		<li><em>(valgfri)</em> <b>&quot;ucword&quot;</b> - S&aelig;ttes den til &quot;true&quot; skrives det f&oslash;rste bogstav i alle ord med stort.</li>
	</ul>
	</p>';
$lang['admin']['help_function_valid_xhtml'] = '<h3>Hvad g&oslash;r denne funktion?</h3>
<p>Returnerer et link til w3c&#039;s HTML-efterpr&oslash;vningstest.</p>
<h3>Hvordan bruger jeg det?</h3>
<p>Du skal blot inds&aelig;tte en kode i en skabelon/side s&aring;som: <code>{valid_xhtml}</code></p>
<h3>Hvilke parametre bruger den?</h3>
<p>
    <ul>
	<li><em>(valgfri)</em> <b>&quot;url&quot;</b> (tekststreng)  - Den URL der skal  valideres, angives ingen url vil http://validator.w3.org/check/referer blive brugt i stedet.</li>
	<li><em>(valgfri)</em> <b>&quot;class&quot;</b> (tekststreng) - Hvis angivet, vil parametret blive brugt som class-egenskab for selektoren anker (a)</li>
	<li><em>(valgfri)</em> <b>&quot;target&quot;</b> (tekststreng)  - Hvis angivet, vil parametret blive brugt som m&aring;l for linket (a)</li>
	<li><em>(valgfri)</em> <b>&quot;image&quot;</b> (true/false) - Sat til &quot;false&quot;, vil der blive brugt et tekst-link i stedet for en billede/ikon.</li>
	<li><em>(valgfri)</em> <b>&quot;text&quot;</b>   (tekststreng)  - Hvis angivet, vil parametret blive brugt som link-tekst eller som alternativ tekst, hvis der anvendes et billede som link. Standard er &#039;valid XHTML 1.0 Transitional&#039;.<br /> Hvis der bruges et billede, vil den angivne tekststreng ogs&aring; blive brugt som billedets alt-attribut (hvis &#039;alt&#039;-parametret angives vil det som standard overskrive &#039;text&#039;-parametret).</li>
	<li><em>(valgfri)</em> <b>&quot;image_class&quot;</b> (tekststreng)  - Benyttes kun hvis &#039;image&#039; ikke er sat til &quot;false&quot;. Hvis angivet, vil parametret blive brugt som  class-attribut for billed-selektoren (img)</li>
	<li><em>(valgfri)</em> <b>&quot;src&quot;</b>  (tekststreng)     - Benyttes kun hvis &#039;image&#039; ikke er sat til &quot;false&quot;. Bestemmer hvilket ikon, der skal vises. Standard er http://www.w3.org/Icons/valid-xhtml10</li>
	<li><em>(valgfri)</em> <b>&quot;width&quot;</b> (tekststreng)     - Benyttes kun hvis &#039;image&#039; ikke er sat til &quot;false&quot;. Billedets bredde i pixels. Standard er 88 (bredden p&aring; http://www.w3.org/Icons/valid-xhtml10)</li>
	<li><em>(valgfri)</em> <b>&quot;height&quot;</b> (tekststreng)     - Benyttes kun hvis &#039;image&#039; ikke er sat til &quot;false&quot;. Billedets h&oslash;jde i pixels. Standard er 31 (h&oslash;jden af http://www.w3.org/Icons/valid-xhtml10)</li>
	<li><em>(valgfri)</em> alt         (tekststreng)     - Benyttes kun hvis &#039;image&#039; ikke er sat til &quot;false&quot;. Den alternative tekst (&#039;alt&#039;-attributten) for billedet (elementet). Hvis intet er angivet bruges linkteksten (&quot;text&quot;).</li>
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
	<p>None at this time.</p>';
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
        <p>Shows the name of the site.  This is defined during install and can bbe modified in the Global Settings section of the admin panel.</p>
        <h3>How do I use it?</h3>
        <p>Just insert the tag into your template/page like: <code>{sitename}</code></p>
        <h3>What parameters does it take?</h3>
        <p>None</p>';
$lang['admin']['help_function_search'] = '	<h3>What does this do?</h3>
	<p>This is actually just a wrapper tag for the Search module to make the tag syntax easier. 
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
	<p>This is actually just a wrapper tag for the Printing module to make the tag syntax easier. 
	Instead of having to use <code>{cms_module module=&#039;Printing&#039;}</code> you can now just use <code>{print}</code> to insert the module on pages and templates.
	</p>
	<h3>How do I use it?</h3>
	<p>Just put <code>{print}</code> on a page or in a template. For help about the Printing module, what parameters it takes etc., please refer to the <a href="listmodules.php?action=showmodulehelp&amp;module=Printing">Printing module help</a>.';
$lang['admin']['help_function_oldprint'] = '	<h3>What does this do?</h3>
	<p>Creates a link to only the content of the page.</p>
	<h3>How do I use it?</h3>
	<p>Just insert the tag into your template/page like: <code>{print}</code><br></p>
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
                     <pre>{print text=&quot;Printable Page&quot;}</pre>      
                     </li>
        </ul>';
$lang['admin']['login_info_title'] = 'Information';
$lang['admin']['login_info'] = 'Fra dette punkt skal de f&oslash;lgende parametre tages i betragtning';
$lang['admin']['login_info_params'] = '<ol> 
  <li>Cookies enabled in your browser</li> 
  <li>Javascript enabled in your browser </li> 
  <li>Windows popup active to the following address:</li> 
</ol>';
$lang['admin']['help_function_news'] = '	<h3>What does this do?</h3>
	<p>This is actually just a wrapper tag for the News module to make the tag syntax easier. 
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
	<p>This is actually just a wrapper tag for the Menu Manager module to make the tag syntax easier. 
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
       <p>You must include in your page content {embed url=..} and in the &quot;Metadata:&quot; section (advanced tab) you must put {embed header=true}. Also be sure to put this in between the &quot;head&quot; tags of your template: {metadata}</p>';
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
	<h3>What does this do?</h3>
	<p>Display&#039;s a contact form. This can be used to allow others to send an email message to the address specified.</p>
	<h3>How do I use it?</h3>
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
		<li><em>(optional)</em> <tt>id</tt> - Optional css_id for the &amp;lt;a&amp;gt; link.</li> <!-- mbv - 29-06-2005 -->
		<li><em>(optional)</em> <tt>more</tt> - place additional options inside the &amp;lt;a&amp;gt; link.</li> <!-- mbv - 29-06-2005 -->
		<li><em>(optional)</em> <tt>label</tt> - Label to use in with the link if applicable.</li>
		<li><em>(optional)</em> <tt>label_side left/right</tt> - Side of link to place the label (defaults to &quot;left&quot;).</li>
		<li><em>(optional)</em> <tt>title</tt> - Text to use in the title attribute.  If none is given, then the title of the page will be used for the title.</li>
		<li><em>(optional)</em> <tt>rellink 1/0</tt> - Make a relational link for accessible navigation.  Only works if the dir parameter is set and should only go in the head section of a template.</li>
		<li><em>(optional)</em> <tt>href</tt> - If href is used only the href value is generated (no other parameters possible). <strong>Example:</strong> &amp;lt;a href=&quot;{cms_selflink href=&quot;alias&quot;}&quot;&amp;gt;&amp;lt;img src=&quot;&quot;&amp;gt;&amp;lt;/a&amp;gt;</li>
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
$lang['admin']['of'] = 'af';
$lang['admin']['first'] = 'F&oslash;rst';
$lang['admin']['last'] = 'Sidst';
$lang['admin']['adminspecialgroup'] = 'Advarsel: Medlemmer af denne gruppe har automatisk alle tilladelser';
$lang['admin']['disablesafemodewarning'] = 'Sl&aring; &quot;safe mode&quot; advarsel fra';
$lang['admin']['allowparamcheckwarnings'] = 'Tillad at parameter kontrol viser advarselsbeskeder';
$lang['admin']['date_format_string'] = 'Dato format streng';
$lang['admin']['date_format_string_help'] = '<em>strftime</em> formateret dato-string';
$lang['admin']['last_modified_at'] = 'Sidst &aelig;ndret';
$lang['admin']['last_modified_by'] = 'Sidst &aelig;ndret af';
$lang['admin']['read'] = 'L&aelig;s';
$lang['admin']['write'] = 'Skriv';
$lang['admin']['execute'] = 'Eksekv&eacute;r';
$lang['admin']['group'] = 'Gruppe';
$lang['admin']['other'] = 'Andet';
$lang['admin']['event_desc_moduleupgraded'] = 'Sendes efter at et modul er opgraderet';
$lang['admin']['event_desc_moduleinstalled'] = 'Sendes efter at et modul er installeret';
$lang['admin']['event_desc_moduleuninstalled'] = 'Sendes efter at et modul er fjernet';
$lang['admin']['event_desc_edituserdefinedtagpost'] = 'Sendes efter at et bruger tag er opdateret';
$lang['admin']['event_desc_edituserdefinedtagpre'] = 'Sendes f&oslash;r en brugerdefineret tag opdateres';
$lang['admin']['event_desc_deleteuserdefinedtagpre'] = 'Sendes f&oslash;r en brugerdefineret tag slettes';
$lang['admin']['event_desc_deleteuserdefinedtagpost'] = 'Sendes efter at et bruger tag er fjernet';
$lang['admin']['event_desc_adduserdefinedtagpost'] = 'Sendes efter at et bruger tag er indsat';
$lang['admin']['event_desc_adduserdefinedtagpre'] = 'Sendes f&oslash;r en brugerdefineret tag inds&aelig;ttes';
$lang['admin']['global_umask'] = 'Fil Oprettelses Maske (umask)';
$lang['admin']['errorcantcreatefile'] = 'Kunne ikke oprette filen (problem med fil-tilladelser?)';
$lang['admin']['errormoduleversionincompatible'] = 'Modulet er ikke kompatibelt med denne version af CMS';
$lang['admin']['errormodulenotloaded'] = 'Intern fejl, modulet kunne ikke instantieres';
$lang['admin']['errormodulenotfound'] = 'Intern fejl, kunne ikke finde en instans af modulet';
$lang['admin']['errorinstallfailed'] = 'Modul installation fejlede';
$lang['admin']['errormodulewontload'] = 'Problemer med at instantiere en tilg&aelig;ngeligt modul';
$lang['admin']['frontendlang'] = 'Standard sprog for siden';
$lang['admin']['info_edituser_password'] = '&AElig;ndr dette felt for at &aelig;ndre brugerens kodeord';
$lang['admin']['info_edituser_passwordagain'] = '&AElig;ndr dette felt for at &aelig;ndre brugerens kodeord';
$lang['admin']['originator'] = 'Ophavsmand';
$lang['admin']['module_name'] = 'Modul navn';
$lang['admin']['event_name'] = 'Begivenhedsnavn';
$lang['admin']['event_description'] = 'Begivenhedsbeskrivelse';
$lang['admin']['error_delete_default_parent'] = 'Du kan ikke slette den overliggende side til standard-siden.';
$lang['admin']['jsdisabled'] = 'Beklager, denne funktion kr&aelig;ver at du har JavaScript sl&aring;et til.';
$lang['admin']['order'] = 'R&aelig;kkef&oslash;lge';
$lang['admin']['reorderpages'] = '&AElig;ndre sider&aelig;kkef&oslash;lgen';
$lang['admin']['reorder'] = 'Gem r&aelig;kkef&oslash;lge';
$lang['admin']['page_reordered'] = 'Sidens position blev &aelig;ndret';
$lang['admin']['pages_reordered'] = 'Sidernes positioner blev &aelig;ndret';
$lang['admin']['sibling_duplicate_order'] = 'To &quot;s&oslash;skende-sider&quot; kan have samme position i r&aelig;kkef&oslash;lgen. Sider&aelig;kkef&oslash;lgen blev ikke &aelig;ndret';
$lang['admin']['no_orders_changed'] = 'Du valgte at &aelig;ndre r&aelig;kkef&oslash;lgen af siderne, men &aelig;ndrede ingenting. Sider&aelig;kkef&oslash;lgen blev ikke &aelig;ndret.';
$lang['admin']['order_too_small'] = 'En side kan ikke have positionen 0. Sider&aelig;kkef&oslash;lgen blev ikke &aelig;ndret.';
$lang['admin']['order_too_large'] = 'En side kan ikke ha en position der er h&oslash;jere end antallet af sider. Sider&aelig;kkef&oslash;lgen blev ikke &aelig;ndret.';
$lang['admin']['user_tag'] = 'Bruger Tag';
$lang['admin']['add'] = 'Tilf&oslash;j';
$lang['admin']['CSS'] = 'CSS';
$lang['admin']['about'] = 'Om';
$lang['admin']['action'] = 'Handling';
$lang['admin']['actionstatus'] = 'Handling/status';
$lang['admin']['active'] = 'Aktiv';
$lang['admin']['addcontent'] = 'Tilf&oslash;j nyt indhold';
$lang['admin']['cantremove'] = 'Kan ikke fjernes';
$lang['admin']['changepermissions'] = 'S&aelig;t tilladelser';
$lang['admin']['changepermissionsconfirm'] = 'ADVARSEL\n\nDette ville fors&oslash;ge at sikre at filerne modulet best&aring;r af kan &aelig;ndres af web-serveren.\nEr du sikker p&aring; du vil forts&aelig;tte?';
$lang['admin']['contentadded'] = 'Indholdet blev tilf&oslash;jet databasen uden fejl.';
$lang['admin']['contentupdated'] = 'Indholdet blev opdateret uden fejl.';
$lang['admin']['contentdeleted'] = 'Indholdet blev fjernet fra databasen uden fejl.';
$lang['admin']['success'] = 'Succes';
$lang['admin']['addcss'] = 'Tilf&oslash;j Stylesheet';
$lang['admin']['addgroup'] = 'Tilf&oslash;j ny gruppe';
$lang['admin']['additionaleditors'] = 'Yderligere redakt&oslash;rer';
$lang['admin']['addtemplate'] = 'Tilf&oslash;j ny sideskabelon';
$lang['admin']['adduser'] = 'Tilf&oslash;j ny bruger';
$lang['admin']['addusertag'] = 'Tilf&oslash;j nyt brugerdefineret tag';
$lang['admin']['adminaccess'] = 'Rettigheder til login til admin';
$lang['admin']['adminlog'] = 'Administratorlog';
$lang['admin']['adminlogcleared'] = 'Administratorlog blev slettet med succes';
$lang['admin']['adminlogempty'] = 'Administratorlog er tom';
$lang['admin']['adminsystemtitle'] = 'CMS Administrations System';
$lang['admin']['adminpaneltitle'] = 'CMS Made Simple Administrations Panel';
$lang['admin']['advanced'] = 'Avanceret';
$lang['admin']['aliasalreadyused'] = 'Alias&#039;et er allerede brugt p&aring; en anden side.';
$lang['admin']['aliasmustbelettersandnumbers'] = 'Alias&#039;et m&aring; v&aelig;re alle tal og bogstaver';
$lang['admin']['aliasnotaninteger'] = 'Alias kan ikke v&aelig;re et heltal';
$lang['admin']['allpagesmodified'] = 'Alle sider blev &aelig;ndret!';
$lang['admin']['assignments'] = 'Tildelinger';
$lang['admin']['associationexists'] = 'Denne tildeling eksisterer allerede';
$lang['admin']['autoinstallupgrade'] = 'Automatisk installation eller opgradering';
$lang['admin']['back'] = 'Tilbage til menu';
$lang['admin']['backtoplugins'] = 'Tilbage til loginlisten';
$lang['admin']['cancel'] = 'Annull&eacute;r';
$lang['admin']['cantchmodfiles'] = 'Kunne ikke &aelig;ndre adgangstilladelser p&aring; nogle filer.';
$lang['admin']['cantremovefiles'] = 'Fejl ved sletning af filer (adgangstilladelser?)';
$lang['admin']['confirmcancel'] = 'Er du sikker p&aring; du vil fortryde din &aelig;ndringer? Klik OK forat fortryde alle &aelig;ndringer. Klik Fortryd for at forts&aelig;tte redigeringen.';
$lang['admin']['canceldescription'] = 'Fortryd &aelig;ndringer';
$lang['admin']['clearadminlog'] = 'Slet administratorlog';
$lang['admin']['code'] = 'Kode';
$lang['admin']['confirmdefault'] = 'Er du sikker p&aring; dette skal v&aelig;re standardsiden?';
$lang['admin']['confirmdeletedir'] = 'Vil du slette denne mappe og alt dens indhold?';
$lang['admin']['content'] = 'Indhold';
$lang['admin']['contentmanagement'] = 'Indholdsstyring';
$lang['admin']['contenttype'] = 'Indholdstype';
$lang['admin']['copy'] = 'Kopi';
$lang['admin']['copytemplate'] = 'Kopi&eacute;r sideskabelon';
$lang['admin']['create'] = 'Opret';
$lang['admin']['createnewfolder'] = 'Opret ny mappe';
$lang['admin']['cssalreadyused'] = 'CSS navn allerede i brug';
$lang['admin']['cssmanagement'] = 'CSS styring';
$lang['admin']['currentassociations'] = 'Nuv&aelig;rende tildelinger';
$lang['admin']['currentdirectory'] = 'Nuv&aelig;rende mappe';
$lang['admin']['currentgroups'] = 'Nuv&aelig;rende gruppe';
$lang['admin']['currentpages'] = 'Nuv&aelig;rende sider';
$lang['admin']['currenttemplates'] = 'Nuv&aelig;rende sideskabeloner';
$lang['admin']['currentusers'] = 'Nuv&aelig;rende brugere';
$lang['admin']['custom404'] = 'Brugerdefineret 404 fejlmeddelelse';
$lang['admin']['database'] = 'Database';
$lang['admin']['databaseprefix'] = 'Databaseprefix';
$lang['admin']['databasetype'] = 'Databasetype';
$lang['admin']['date'] = 'Dato';
$lang['admin']['default'] = 'Standard';
$lang['admin']['delete'] = 'Slet';
$lang['admin']['deleteconfirm'] = 'Er du sikker p&aring; du vil slette?';
$lang['admin']['deleteassociationconfirm'] = 'Er du sikker p&aring; du vil slette associationen til - %s - ?';
$lang['admin']['deletecss'] = 'Slet CSS';
$lang['admin']['dependencies'] = 'Afh&aelig;ngigheder';
$lang['admin']['description'] = 'Beskrivelse';
$lang['admin']['directoryexists'] = 'Mappen eksisterer allerede';
$lang['admin']['down'] = 'Ned';
$lang['admin']['edit'] = 'Redig&eacute;r';
$lang['admin']['editconfiguration'] = 'Redig&eacute;r ops&aelig;tning';
$lang['admin']['editcontent'] = 'Redig&eacute;r indhold';
$lang['admin']['editcss'] = 'Redig&eacute;r CSS';
$lang['admin']['editcsssuccess'] = 'CSS opdateret';
$lang['admin']['editgroup'] = 'Redig&eacute;r gruppe';
$lang['admin']['editpage'] = 'Redig&eacute;r side';
$lang['admin']['edittemplate'] = 'Redig&eacute;r sideskabelon';
$lang['admin']['edittemplatesuccess'] = 'Skabelon opdateret';
$lang['admin']['edituser'] = 'Redig&eacute;r bruger';
$lang['admin']['editusertag'] = 'Redig&eacute;r brugerdefineret tag';
$lang['admin']['usertagadded'] = 'Den brugerdefinerede tag blev tilf&oslash;jet.';
$lang['admin']['usertagupdated'] = 'Den brugerdefinerede tag blev opdateret.';
$lang['admin']['usertagdeleted'] = 'Den brugerdefinerede tag blev fjernet.';
$lang['admin']['email'] = 'E-mail-adresse';
$lang['admin']['errorattempteddowngrade'] = 'Installation af dette module ville resultere i en tidligere version. Handlingen blev afbrudt';
$lang['admin']['errorchildcontent'] = 'Det valgte indeholder stadig underkategorier. Slet venligst dem f&oslash;rst';
$lang['admin']['errorcopyingtemplate'] = 'Kunne ikke kopiere sideskabelon';
$lang['admin']['errorcouldnotparsexml'] = 'Fejl ved l&aelig;sning af XML-fil';
$lang['admin']['errorcreatingassociation'] = 'Kunne ikke oprette reference';
$lang['admin']['errorcssinuse'] = 'Dette stylesheet benyttes stadigv&aelig;k af en skabelon. Fjern venligst de referencer f&oslash;rst.';
$lang['admin']['errordefaultpage'] = 'Kan ikke slette den nuv&aelig;rende standardside. V&aelig;lg en anden f&oslash;rst.';
$lang['admin']['errordeletingassociation'] = 'Kan ikke fjerne reference';
$lang['admin']['errordeletingcss'] = 'Kan ikke slette CSS-skabelon';
$lang['admin']['errordeletingdirectory'] = 'Kan ikke slette mappe. Tilladelsesproblem?';
$lang['admin']['errordeletingfile'] = 'Kunne ikke slette filen. Tilladelsesproblem?';
$lang['admin']['errordirectorynotwritable'] = 'Ingen skrivetilladels til dette bibliotek';
$lang['admin']['errordtdmismatch'] = 'DTD version mangler eller er inkompatibel i XML-filen';
$lang['admin']['errorgettingcssname'] = 'Kunne ikke hente CSS-navn';
$lang['admin']['errorgettingtemplatename'] = 'Fejl - kunne ikke hente navnet p&aring; sideskabelonen';
$lang['admin']['errorincompletexml'] = 'XML Filen er ugyldig eller ikke komplet';
$lang['admin']['uploadxmlfile'] = 'Install&eacute;r modulet fra XML-fil';
$lang['admin']['cachenotwritable'] = 'Cache mappen er skrivebeskyttet. Nulstilling af cache&#039;n vil ikke virke. S&oslash;rg venligst for at der er fulde skriverettigheder til mappen tmp/cache (chmod 777)';
$lang['admin']['modulesnotwritable'] = 'Modul-folderen (/modules) er skrivebeskyttet, hvis du &oslash;nsker at installere moduler ved at upload&#039;e en XML fil skal der gives fulde skriverettigheder til denne (read/write/execute), f.eks. med chmod 777 gennem ftp.';
$lang['admin']['noxmlfileuploaded'] = 'Ingen filer blev upload&#039;et. For at installere et modul via XML skal du v&aelig;lge og upload&#039;e en xml-fil med modulet fra din computer.';
$lang['admin']['errorinsertingcss'] = 'Fejl under inds&aelig;ttelse af CSS';
$lang['admin']['errorinsertinggroup'] = 'Fejl under inds&aelig;ttelse af gruppe';
$lang['admin']['errorinsertingtag'] = 'Fejl under inds&aelig;ttelse af brugerdefineret tag';
$lang['admin']['errorinsertingtemplate'] = 'Fejl under inds&aelig;ttelse af sideskabelon';
$lang['admin']['errorinsertinguser'] = 'Fejl under oprettelse af bruger';
$lang['admin']['errornofilesexported'] = 'Fejl ved eksportering af filer til xml';
$lang['admin']['errorretrievingcss'] = 'Fejl under hentning af CSS';
$lang['admin']['errorretrievingtemplate'] = 'Fejl under hentning af sideskabelon';
$lang['admin']['errortemplateinuse'] = 'Denne sideskabelon er stadig i brug p&aring; en side, v&aelig;lg en anden og pr&oslash;v at slette igen.';
$lang['admin']['errorupdatingcss'] = 'Fejl under opdatering af CSS';
$lang['admin']['errorupdatinggroup'] = 'Fejl under opdatering af gruppe';
$lang['admin']['errorupdatingpages'] = 'Fejl ved opdatering af sider';
$lang['admin']['errorupdatingtemplate'] = 'Fejl under opdatering af sideskabelon';
$lang['admin']['errorupdatinguser'] = 'Fejl under opdatering af bruger';
$lang['admin']['errorupdatingusertag'] = 'Fejl under opdatering af brugerdefineret tag';
$lang['admin']['erroruserinuse'] = 'Denne bruger har stadig ansvaret for nogle sider. Giv ansvaret til en anden bruger f&oslash;r du sletter.';
$lang['admin']['eventhandlers'] = 'H&aelig;ndelses H&aring;ndtering';
$lang['admin']['editeventhandler'] = 'Ret h&aelig;ndelses-handler';
$lang['admin']['eventhandlerdescription'] = 'Associ&eacute;r bruger-tags med h&aelig;ndelser';
$lang['admin']['export'] = 'Eksport&eacute;r';
$lang['admin']['event'] = 'Begivenhed';
$lang['admin']['false'] = 'Falsk';
$lang['admin']['settrue'] = 'Set til sand';
$lang['admin']['filecreatedirnodoubledot'] = 'Mappen kan ikke indeholde &#039;..&#039;.';
$lang['admin']['filecreatedirnoname'] = 'Kan ikke oprette en mappe uden navn.';
$lang['admin']['filecreatedirnoslash'] = 'Mappen m&aring; ikke indeholde &#039;/&#039; or &#039;\&#039;.';
$lang['admin']['filemanagement'] = 'Filh&aring;ndtering';
$lang['admin']['filename'] = 'Filnavn';
$lang['admin']['filenotuploaded'] = 'Filen kunne ikke uploades til nettet. Filrettighederne forkerte?';
$lang['admin']['filesize'] = 'Filst&oslash;rrelse';
$lang['admin']['firstname'] = 'Fornavn';
$lang['admin']['groupmanagement'] = 'Gruppeh&aring;ndtering';
$lang['admin']['grouppermissions'] = 'Gruppe tilladelser';
$lang['admin']['handler'] = 'Handler (brugerdefineret tag)';
$lang['admin']['headtags'] = 'Head-tags';
$lang['admin']['help'] = 'Hj&aelig;lp';
$lang['admin']['new_window'] = 'nyt vindue';
$lang['admin']['helpwithsection'] = '%s hj&aelig;lp';
$lang['admin']['helpaddtemplate'] = '<p>En sideskabelon styrer din sides udseende</p><p>Opret en skabelon her, og tilf&oslash;j dine stylesheets til den for at kontrollere dit layout i alle detaljer.</p>';
$lang['admin']['helplisttemplate'] = '<p>Her kan du oprette, &aelig;ndre eller slette sideskabeloner</p><p>For at oprette en ny sideskabelon, klik p&aring; <u>Tilf&oslash;j ny skabelon</u>-knappen.</p><p>Hvis du vil have at alle indholdssider skal benytte den samme skabelon, s&aring; klik p&aring; <u>S&aelig;t til alle sider</u>-linker.</p><p>Hvis vil vil lave en kopi af en skabelon, klik p&aring; <u>Kopi</u>-ikonet og du vil blive bedt om et navn til den nye kopi.</p>';
$lang['admin']['home'] = 'Forside';
$lang['admin']['homepage'] = 'Homepage';
$lang['admin']['hostname'] = 'V&aelig;rtsnavn';
$lang['admin']['idnotvalid'] = 'Det angivne ID er ikke gyldigt';
$lang['admin']['imagemanagement'] = 'Billed h&aring;ndtering';
$lang['admin']['informationmissing'] = 'Mangler information';
$lang['admin']['install'] = 'Install&eacute;r';
$lang['admin']['invalidcode'] = 'Forkert kode';
$lang['admin']['illegalcharacters'] = 'Ugyldige karakterer i feltet %s.';
$lang['admin']['invalidcode_brace_missing'] = 'Ulige antal af parenteser';
$lang['admin']['invalidtemplate'] = 'Sideskabelonen er ikke gyldig';
$lang['admin']['itemid'] = 'Objekt ID';
$lang['admin']['itemname'] = 'Objekt name';
$lang['admin']['language'] = 'Sprog';
$lang['admin']['lastname'] = 'Efternavn';
$lang['admin']['logout'] = 'Log ud';
$lang['admin']['loginprompt'] = 'Indtast gyldige brugeroplysninger for at f&aring; adgang til Administrations Panelet';
$lang['admin']['logintitle'] = 'CMS Made Simple Administrations Login';
$lang['admin']['menutext'] = 'Menutekst';
$lang['admin']['missingparams'] = 'Nogle parametre er ugyldige eller mangler';
$lang['admin']['modifygroupassignments'] = 'Rediger gruppe-tildelinger';
$lang['admin']['moduleabout'] = 'Om %s-modulet';
$lang['admin']['modulehelp'] = 'Hj&aelig;lp til %s-modulet';
$lang['admin']['msg_defaultcontent'] = 'Tilf&oslash;j kode her som skal dukke op om standardindholdet for alle nye sider';
$lang['admin']['msg_defaultmetadata'] = 'Tilf&oslash;j kode her som skal dukke op i metadata sektionen for alle nye sider';
$lang['admin']['wikihelp'] = 'Hj&aelig;lp i Wiki';
$lang['admin']['moduleinstalled'] = 'Modul allerede installeret';
$lang['admin']['moduleinterface'] = '%s gr&aelig;nseflade';
$lang['admin']['modules'] = 'Moduler';
$lang['admin']['move'] = 'Flyt';
$lang['admin']['name'] = 'Navn';
$lang['admin']['needpermissionto'] = 'Du skal bruge rettigheden &#039;%s&#039; for at udf&oslash;re den funktion';
$lang['admin']['needupgrade'] = 'Skal opgraderes';
$lang['admin']['newtemplatename'] = 'Nyt sideskabelon-navn';
$lang['admin']['next'] = 'N&aelig;ste';
$lang['admin']['noaccessto'] = 'Ingen adgang til %s';
$lang['admin']['nocss'] = 'Ingen CSS';
$lang['admin']['noentries'] = 'Ingen tilf&oslash;jelser';
$lang['admin']['nofieldgiven'] = 'Ingen %s indtastet!';
$lang['admin']['nofiles'] = 'Ingen filer';
$lang['admin']['nopasswordmatch'] = 'Kodeordene passer ikke sammen';
$lang['admin']['norealdirectory'] = 'Ingen rigtig mappe tilf&oslash;jet';
$lang['admin']['norealfile'] = 'Ingen rigtig fil angivet';
$lang['admin']['notinstalled'] = 'Ikke installeret';
$lang['admin']['overwritemodule'] = 'Overskriv eksisterende moduler';
$lang['admin']['owner'] = 'Ejer';
$lang['admin']['pagealias'] = 'Sidealias';
$lang['admin']['pagedefaults'] = 'Standard side indstillinger';
$lang['admin']['pagedefaultsdescription'] = 'S&aelig;t standard indstillinger for nye sider';
$lang['admin']['parent'] = 'Overliggende side';
$lang['admin']['password'] = 'Kodeord';
$lang['admin']['passwordagain'] = 'Kodeord (igen)';
$lang['admin']['permission'] = 'Rettighed';
$lang['admin']['permissions'] = 'Rettigheder';
$lang['admin']['permissionschanged'] = 'Tilladelser blev opdateret.';
$lang['admin']['pluginabout'] = 'Om %s tag&#039;en';
$lang['admin']['pluginhelp'] = 'Hj&aelig;lp til %s tag\&#039;en';
$lang['admin']['pluginmanagement'] = 'Plugin-ops&aelig;tning';
$lang['admin']['prefsupdated'] = 'Indstillinger blev opdateret.';
$lang['admin']['preview'] = 'Se';
$lang['admin']['previewdescription'] = 'Forh&aring;ndsvis &aelig;ndringer';
$lang['admin']['previous'] = 'Forrige';
$lang['admin']['remove'] = 'Fjern';
$lang['admin']['removeconfirm'] = 'Dette vil fjerne filerne modulet best&aring;r af permanent fra dette installation af CMSms.\nEr du sikker p&aring; du vil forts&aelig;tte?';
$lang['admin']['removecssassociation'] = 'Fjern CSS-reference';
$lang['admin']['saveconfig'] = 'Gem konfiguration';
$lang['admin']['send'] = 'Ok';
$lang['admin']['setallcontent'] = 'S&aelig;t til alle sider';
$lang['admin']['setallcontentconfirm'] = 'Er du sikker p&aring;, du vil have alle sider til at bruge denne sideskabelon?';
$lang['admin']['showinmenu'] = 'Vis i menu';
$lang['admin']['showsite'] = 'Vis webside';
$lang['admin']['sitedownmessage'] = 'Siden virker ikke-besked';
$lang['admin']['siteprefs'] = 'Side indstillinger';
$lang['admin']['status'] = 'Status';
$lang['admin']['stylesheet'] = 'Typografiark';
$lang['admin']['submit'] = 'Send';
$lang['admin']['submitdescription'] = 'Gem &aelig;ndringer';
$lang['admin']['tags'] = 'Tags (koder)';
$lang['admin']['template'] = 'Sideskabelon';
$lang['admin']['templateexists'] = 'Navnet p&aring; sideskabelonen eksisterer allerede';
$lang['admin']['templatemanagement'] = 'Sideskabelon-ops&aelig;tning';
$lang['admin']['title'] = 'Titel';
$lang['admin']['tools'] = 'V&aelig;rkt&oslash;jer';
$lang['admin']['true'] = 'Sand';
$lang['admin']['setfalse'] = 'S&aelig;t til falsk';
$lang['admin']['type'] = 'Type';
$lang['admin']['typenotvalid'] = 'Typen er ikke gyldig';
$lang['admin']['uninstall'] = 'Afinstall&eacute;r';
$lang['admin']['uninstallconfirm'] = 'Er du sikker p&aring; du vil afinstallere?';
$lang['admin']['up'] = 'Op';
$lang['admin']['upgrade'] = 'Opgrad&eacute;r';
$lang['admin']['upgradeconfirm'] = 'Vil du opgradere denne?';
$lang['admin']['uploadfile'] = 'Upload fil';
$lang['admin']['url'] = 'URL';
$lang['admin']['useadvancedcss'] = 'Brug avanceret CSS-ops&aelig;tning';
$lang['admin']['user'] = 'Bruger';
$lang['admin']['userdefinedtags'] = 'Brugerdefinerede Tags';
$lang['admin']['usermanagement'] = 'Bruger-ops&aelig;tning';
$lang['admin']['username'] = 'Brugernavn';
$lang['admin']['usernameincorrect'] = 'Brugernavn eller password ikke korrekt';
$lang['admin']['userprefs'] = 'Bruger indstillinger';
$lang['admin']['usersassignedtogroup'] = 'Brugere tildelt til gruppen %s';
$lang['admin']['usertagexists'] = 'Et tag med dette navn eksisterer allerede. V&aelig;lg venligst en anden.';
$lang['admin']['usewysiwyg'] = 'Brug grafisk redigering af indhold';
$lang['admin']['version'] = 'Version';
$lang['admin']['view'] = 'Se';
$lang['admin']['welcomemsg'] = 'Velkommen %s';
$lang['admin']['directoryabove'] = 'mappe over nuv&aelig;rende niveau';
$lang['admin']['nodefault'] = 'Intet standardvalg';
$lang['admin']['blobexists'] = 'Navnet p&aring; den globale indholdsblok findes allerede';
$lang['admin']['blobmanagement'] = 'Ops&aelig;tning af globale indholdsblokke';
$lang['admin']['errorinsertingblob'] = 'Fejl under inds&aelig;ttelse af global indholdsblok';
$lang['admin']['addhtmlblob'] = 'Tilf&oslash;j Global indholdsblok';
$lang['admin']['edithtmlblob'] = 'Redig&eacute;r Global indholdsblok';
$lang['admin']['edithtmlblobsuccess'] = 'Global indholdsblok blev opdateret';
$lang['admin']['tagtousegcb'] = 'Tag der skal inds&aelig;ttes for at vise denne blok';
$lang['admin']['gcb_wysiwyg'] = 'Sl&aring; WYSIWYG til for GCB ';
$lang['admin']['gcb_wysiwyg_help'] = 'Sl&aring;r WYSIWYG-editoren til ved redigering af globale indholdsblokke';
$lang['admin']['filemanager'] = 'Filh&aring;ndtering';
$lang['admin']['imagemanager'] = 'Billedh&aring;ndtering';
$lang['admin']['encoding'] = 'Kodning';
$lang['admin']['clearcache'] = 'Nulstil Cache';
$lang['admin']['clear'] = 'Nulstil';
$lang['admin']['cachecleared'] = 'Cache nulstillet';
$lang['admin']['apply'] = 'Aktiv&eacute;r';
$lang['admin']['applydescription'] = 'Gem &aelig;ndringer og forts&aelig;t redigering';
$lang['admin']['none'] = 'Ingen';
$lang['admin']['wysiwygtouse'] = 'V&aelig;lg hvilket WYSIWYG-system der skal bruges';
$lang['admin']['syntaxhighlightertouse'] = 'V&aelig;lg hvilken syntaks fremh&aelig;ver der skal bruges';
$lang['admin']['hasdependents'] = 'Andre moduler er afh&aelig;ngige af dette modul';
$lang['admin']['missingdependency'] = 'Mangler modul';
$lang['admin']['minimumversion'] = 'Mindste Version';
$lang['admin']['minimumversionrequired'] = 'Tidligste CMSMS Version der p&aring;kr&aelig;ves';
$lang['admin']['maximumversion'] = 'Nyeste version';
$lang['admin']['maximumversionsupported'] = 'Nyeste CMSMS Version underst&oslash;ttet';
$lang['admin']['depsformodule'] = 'Modulet %s er afh&aelig;ngigt af';
$lang['admin']['installed'] = 'Installeret';
$lang['admin']['author'] = 'Lavet af';
$lang['admin']['changehistory'] = 'Historik over &aelig;ndringer';
$lang['admin']['moduleerrormessage'] = 'Fejlbesked for %s-modulet';
$lang['admin']['moduleupgradeerror'] = 'Der opstod en fejl under opgraderingen af modulet';
$lang['admin']['moduleinstallmessage'] = 'Installations-besked for %s modulet';
$lang['admin']['moduleuninstallmessage'] = 'Afinstallations-besked for modulet %s';
$lang['admin']['admintheme'] = 'Administrations tema';
$lang['admin']['addstylesheet'] = 'Tilf&oslash;j et typografiark';
$lang['admin']['editstylesheet'] = 'Redig&eacute;r typografiark';
$lang['admin']['addcssassociation'] = 'Tilf&oslash;j typografiark-tilknytning';
$lang['admin']['attachstylesheet'] = 'Tilknyt dette typografiark';
$lang['admin']['attachtemplate'] = 'Forbind til denne skabelon';
$lang['admin']['main'] = 'Start';
$lang['admin']['pages'] = 'Sider';
$lang['admin']['page'] = 'Page';
$lang['admin']['files'] = 'Filer';
$lang['admin']['layout'] = 'Layout';
$lang['admin']['usersgroups'] = 'Brugere/Grupper';
$lang['admin']['extensions'] = 'Udvidelser';
$lang['admin']['preferences'] = 'Indstillinger';
$lang['admin']['admin'] = 'Side Administration';
$lang['admin']['viewsite'] = 'Vis siden';
$lang['admin']['templatecss'] = 'Tilknyt skabeloner til typografiark';
$lang['admin']['plugins'] = 'Udvidelser';
$lang['admin']['movecontent'] = 'Flyt sider';
$lang['admin']['module'] = 'Modul';
$lang['admin']['usertags'] = 'Brugerdefinerede tags';
$lang['admin']['htmlblobs'] = 'Globale indholdsblokke';
$lang['admin']['adminhome'] = 'Administration Hjem';
$lang['admin']['liststylesheets'] = 'Typografiark';
$lang['admin']['preferencesdescription'] = 'Her angiver du diverse indstillinger for hele hjemmesiden.';
$lang['admin']['adminlogdescription'] = 'Viser en log over, hvem der gjorde hvad i administrationen.';
$lang['admin']['mainmenu'] = 'Hovedmenu';
$lang['admin']['users'] = 'Brugere';
$lang['admin']['usersdescription'] = 'Her administreres brugere.';
$lang['admin']['groups'] = 'Grupper';
$lang['admin']['groupsdescription'] = 'Her administreres grupper.';
$lang['admin']['groupassignments'] = 'Gruppe-tilknytning';
$lang['admin']['groupassignmentdescription'] = 'Her kan du tilknytte brugere til grupper.';
$lang['admin']['groupperms'] = 'Gruppetilladelser';
$lang['admin']['grouppermsdescription'] = 'S&aelig;t tilladelser og adgangsniveau for grupper';
$lang['admin']['pagesdescription'] = 'Her tilf&oslash;jer og redigerer man sider og andet indhold.';
$lang['admin']['htmlblobdescription'] = 'Globale indholdsblokke er sm&aring; stumper indhold du kan placere i dine sider eller skabeloner.';
$lang['admin']['templates'] = 'Skabeloner';
$lang['admin']['templatesdescription'] = 'Her tilf&oslash;jer eller redigerer vi skabeloner. Skabeloner angiver hvordan dit site ser ud og virker.';
$lang['admin']['stylesheets'] = 'Typografiark';
$lang['admin']['stylesheetsdescription'] = 'Typografiark-h&aring;ndtering er en avanceret m&aring;de, hvorp&aring; man kan arbejde med typografiark uafh&aelig;ngigt af skabeloner.';
$lang['admin']['filemanagerdescription'] = 'Upload og h&aring;ndt&eacute;r filer.';
$lang['admin']['imagemanagerdescription'] = 'Upload/redig&eacute;r og slet billeder.';
$lang['admin']['moduledescription'] = 'Moduler udvider CMS Made Simple med forskellige former for funktionalitet.';
$lang['admin']['tagdescription'] = 'Tags er sm&aring; stumper funktionalitet som kan tilf&oslash;jes dine sider og/eller skabeloner.';
$lang['admin']['usertagdescription'] = 'Tags som du kan oprette og redigere selv til at udf&oslash;re forskellige opgaver, direkte i din browser.';
$lang['admin']['installdirwarning'] = '<em><strong>Advarsel:</strong></em> install folderen eksisterer stadig. Fjern den helst helt.';
$lang['admin']['subitems'] = 'Undermenuer';
$lang['admin']['extensionsdescription'] = 'Moduler, tags, og andet sjov.';
$lang['admin']['usersgroupsdescription'] = 'Bruger- og gruppe-relaterede ting.';
$lang['admin']['layoutdescription'] = 'Side layout indstillinger.';
$lang['admin']['admindescription'] = 'Side Administration funktioner.';
$lang['admin']['contentdescription'] = 'Her tilf&oslash;jer og redigerer vi indhold.';
$lang['admin']['enablecustom404'] = 'Tillad brugerdefineret &quot;404&quot;-besked';
$lang['admin']['enablesitedown'] = 'Sl&aring; &quot;Siden er nede&quot;-besked til';
$lang['admin']['bookmarks'] = 'Bogm&aelig;rker';
$lang['admin']['user_created'] = 'Bruger oprettet';
$lang['admin']['forums'] = 'Forum';
$lang['admin']['wiki'] = 'Wiki';
$lang['admin']['irc'] = 'IRC';
$lang['admin']['module_help'] = 'Modul-hj&aelig;lp';
$lang['admin']['managebookmarks'] = 'H&aring;ndt&eacute;r bogm&aelig;rker';
$lang['admin']['editbookmark'] = 'Redig&eacute;r bogm&aelig;rke';
$lang['admin']['addbookmark'] = 'Tilf&oslash;j bogm&aelig;rke';
$lang['admin']['recentpages'] = 'Nyligt viste sider';
$lang['admin']['groupname'] = 'Gruppe navn';
$lang['admin']['selectgroup'] = 'V&aelig;lg gruppe';
$lang['admin']['updateperm'] = 'Opdat&eacute;r tilladelser';
$lang['admin']['admincallout'] = 'Genveje til administration';
$lang['admin']['showbookmarks'] = 'Vis admin bogm&aelig;rker';
$lang['admin']['hide_help_links'] = 'Skjul hj&aelig;lpelinks';
$lang['admin']['hide_help_links_help'] = 'S&aelig;t kryds i denne kasse for at sl&aring; links til wiki og modulhj&aelig;lp fra i sidehovederne';
$lang['admin']['showrecent'] = 'Vis nyligt bes&oslash;gte sider';
$lang['admin']['attachtotemplate'] = 'Tilknyt typografiark til skabelon';
$lang['admin']['attachstylesheets'] = 'Tilknyt typografiark';
$lang['admin']['indent'] = 'Vis indrykning af sidelisten for at fremh&aelig;ve hierakiet';
$lang['admin']['adminindent'] = 'Vis indhold';
$lang['admin']['contract'] = 'Skjul undersektion';
$lang['admin']['expand'] = 'Vis sektion';
$lang['admin']['expandall'] = 'Vis alle undersektioner';
$lang['admin']['contractall'] = 'Skjul alle undersektioner';
$lang['admin']['menu_bookmarks'] = '[+]';
$lang['admin']['globalconfig'] = 'Global konfiguration';
$lang['admin']['adminpaging'] = 'Antal sider der skal vises ad gangen';
$lang['admin']['nopaging'] = 'Vis alt';
$lang['admin']['myprefs'] = 'Mine indstillinger';
$lang['admin']['myprefsdescription'] = 'Her kan du indstille forskellige ting, der f&aring;r adminstrations-delen til at fungere p&aring; den m&aring;de du &oslash;nsker.';
$lang['admin']['myaccount'] = 'Min konto';
$lang['admin']['myaccountdescription'] = 'Her kan du opdatere din personlige konto.';
$lang['admin']['adminprefs'] = 'Brugerindstillinger';
$lang['admin']['adminprefsdescription'] = 'Her kan du ops&aelig;tte dine specifikke indstillinger for administrationen.';
$lang['admin']['managebookmarksdescription'] = 'Her kan du konfigurere dine bogm&aelig;rker i administrationen.';
$lang['admin']['options'] = 'Indstillinger';
$lang['admin']['langparam'] = 'Parametret angiver hvilket sprog der skal bruges til visning for bes&oslash;gende. Ikke alle moduler underst&oslash;tter eller beh&oslash;ver dette.';
$lang['admin']['parameters'] = 'Parametre';
$lang['admin']['mediatype'] = 'Medietype';
$lang['admin']['mediatype_'] = 'Intet sat: vil have indflydelse overalt';
$lang['admin']['mediatype_all'] = 'alle: passer til alle typer udstyr';
$lang['admin']['mediatype_aural'] = 'aural: passer til tekst til tale-udstyr';
$lang['admin']['mediatype_braille'] = 'braille: passer til braille-udstyr';
$lang['admin']['mediatype_embossed'] = 'embossed: passer til braille printere';
$lang['admin']['mediatype_handheld'] = 'handheld: passer til h&aring;ndholdt udstyr';
$lang['admin']['mediatype_print'] = 'print: passer til ikke-gennemsigtigt materiale og dokumenter der vises p&aring; sk&aelig;rmen i print preview tilstand.';
$lang['admin']['mediatype_projection'] = 'projection: passer til presentationer der skal projekteret, for eksempel overheads';
$lang['admin']['mediatype_screen'] = 'screen: passer til almindelige computer farve-sk&aelig;rme';
$lang['admin']['mediatype_tty'] = 'tty: passer til terminal udstyr';
$lang['admin']['mediatype_tv'] = 'tv: passer til tv-agtigt udstyr';
$lang['admin']['assignmentchanged'] = 'Gruppetildelinger opdateret.';
$lang['admin']['stylesheetexists'] = 'Typografiark eksisterer allerede';
$lang['admin']['errorcopyingstylesheet'] = 'Fejl ved kopiering af typografiark';
$lang['admin']['copystylesheet'] = 'Kopi&eacute;r typografiark';
$lang['admin']['newstylesheetname'] = 'Navn p&aring; det nye typografiark';
$lang['admin']['target'] = 'M&aring;l';
$lang['admin']['xml'] = 'XML';
$lang['admin']['xmlmodulerepository'] = 'URL til ModuleRepository soap server';
$lang['admin']['metadata'] = 'Metadata';
$lang['admin']['globalmetadata'] = 'Globale Metadata';
$lang['admin']['titleattribute'] = 'Beskrivelse (egenskab i title-tag&#039;et)';
$lang['admin']['tabindex'] = 'Tab Indeks';
$lang['admin']['accesskey'] = 'Genvejstast';
$lang['admin']['sitedownwarning'] = '<strong>Advarsel:</strong>Dit site viser lige nu en &quot;Hjemmesiden er nede pga. vedligeholdelse&quot;-besked. Slet filen %s for at &aelig;ndre dette.';
$lang['admin']['deletecontent'] = 'Slet indhold';
$lang['admin']['deletepages'] = 'Slet disse sider?';
$lang['admin']['selectall'] = '(V&aelig;lg alle)';
$lang['admin']['selecteditems'] = 'Valgte dele';
$lang['admin']['inactive'] = 'Inaktiv';
$lang['admin']['deletetemplates'] = 'Slet skabeloner';
$lang['admin']['templatestodelete'] = 'Disse skabeloner vil blive slettet';
$lang['admin']['wontdeletetemplateinuse'] = 'Disse skabeloner er i brug og vil ikke blive slettet';
$lang['admin']['deletetemplate'] = 'Slet typografiark';
$lang['admin']['stylesheetstodelete'] = 'Disse typografiark vil blive slettet';
$lang['admin']['sitename'] = 'Hjemmesidens navn';
$lang['admin']['siteadmin'] = 'Administration af hjemmeside';
$lang['admin']['images'] = 'Billedh&aring;ndtering';
$lang['admin']['blobs'] = 'Globale indholdsblokke';
$lang['admin']['groupmembers'] = 'Gruppetilknytninger';
$lang['admin']['troubleshooting'] = '(Fejlfinding)';
$lang['admin']['event_desc_loginpost'] = 'Sendes efter en bruger logger ind i administrationen';
$lang['admin']['event_desc_logoutpost'] = 'Sendt efter en bruger logger ud af administrationen';
$lang['admin']['event_desc_adduserpre'] = 'Sendes f&oslash;r en ny bruger oprettes';
$lang['admin']['event_desc_adduserpost'] = 'Sendes efter en ny bruger oprettes';
$lang['admin']['event_desc_edituserpre'] = 'Sendes f&oslash;r rettelser til en bruger gemmes';
$lang['admin']['event_desc_edituserpost'] = 'Sendes efter rettelser til en bruger gemmes';
$lang['admin']['event_desc_deleteuserpre'] = 'Sendes f&oslash;r en bruger slettes fra systemet';
$lang['admin']['event_desc_deleteuserpost'] = 'Sendes efter en bruger er slettet fra systemet';
$lang['admin']['event_desc_addgrouppre'] = 'Sendes f&oslash;r en ny gruppe oprettes';
$lang['admin']['event_desc_addgrouppost'] = 'Sendes efter en ny gruppe er oprettet';
$lang['admin']['event_desc_changegroupassignpre'] = 'Sendes f&oslash;r gruppetilh&oslash;rsforhold gemmes';
$lang['admin']['event_desc_changegroupassignpost'] = 'Sendes efter gruppetilh&oslash;rsforhold gemmes';
$lang['admin']['event_desc_editgrouppre'] = 'Sendes f&oslash;r rettelser til en gruppe gemmes';
$lang['admin']['event_desc_editgrouppost'] = 'Sendes efter rettelser til en gruppe er gemt';
$lang['admin']['event_desc_deletegrouppre'] = 'Sendes f&oslash;r en gruppe slettes fra systemet';
$lang['admin']['event_desc_deletegrouppost'] = 'Sendes efter en gruppe er blevet slettes fra systemet';
$lang['admin']['event_desc_addstylesheetpre'] = 'Sendt f&oslash;r et nyt stylesheet er oprettet';
$lang['admin']['event_desc_addstylesheetpost'] = 'Sent efter et nyt stylesheet er oprettet';
$lang['admin']['event_desc_editstylesheetpre'] = 'Sendt f&oslash;r &aelig;ndringer til et stylesheet er gemt';
$lang['admin']['event_desc_editstylesheetpost'] = 'Sendt efter &aelig;ndringer til et stylesheet er gemt';
$lang['admin']['event_desc_deletestylesheetpre'] = 'Sendt f&oslash;r et stylesheet er slettet';
$lang['admin']['event_desc_deletestylesheetpost'] = 'Sendt efter et stylesheet er slettet';
$lang['admin']['event_desc_addtemplatepre'] = 'Sendt f&oslash;r en ny template er oprettet';
$lang['admin']['event_desc_addtemplatepost'] = 'Sendt efter en ny template er oprettet';
$lang['admin']['event_desc_edittemplatepre'] = 'Sendt f&oslash;r &aelig;ndringer til en template er gemt';
$lang['admin']['event_desc_edittemplatepost'] = 'Sendt efter &aelig;ndringer til en template er gemt';
$lang['admin']['event_desc_deletetemplatepre'] = 'Sendt f&oslash;r en template er slettet fra systemet';
$lang['admin']['event_desc_deletetemplatepost'] = 'Sendt efter en template er slettet fra systemet';
$lang['admin']['event_desc_templateprecompile'] = 'Sendes f&oslash;r en skabelon sendes til smarty til behandling';
$lang['admin']['event_desc_templatepostcompile'] = 'Sendes efter en skabelon sendes til smarty til behandling';
$lang['admin']['event_desc_addglobalcontentpre'] = 'Sendt f&oslash;r en ny global content blok er oprettet';
$lang['admin']['event_desc_addglobalcontentpost'] = 'Sendt efter en ny global content blok er oprettet';
$lang['admin']['event_desc_editglobalcontentpre'] = 'Sendt f&oslash;r &aelig;ndringer i en ny global indholdsblok er gemt';
$lang['admin']['event_desc_editglobalcontentpost'] = 'Sendt efter &aelig;ndringer i en ny global indholdsblok er gemt';
$lang['admin']['event_desc_deleteglobalcontentpre'] = 'Sendes f&oslash;r en ny global content blok er slettet fra systemet';
$lang['admin']['event_desc_deleteglobalcontentpost'] = 'Sendes efter en ny global content blok er slettet fra systemet';
$lang['admin']['event_desc_globalcontentprecompile'] = 'Sendes f&oslash;r en global indholdsblok sendes til afvikling af smarty';
$lang['admin']['event_desc_globalcontentpostcompile'] = 'Sendes efter en global indholdsblok er blevet afviklet af smarty';
$lang['admin']['event_desc_contenteditpre'] = 'Sendes f&oslash;r &aelig;ndringer i indholdet bliver gemt';
$lang['admin']['event_desc_contenteditpost'] = 'Sendes efter &aelig;ndringer i indholdet er blevet gemt';
$lang['admin']['event_desc_contentdeletepre'] = 'Sendes f&oslash;r indhold bliver slettet fra systemet';
$lang['admin']['event_desc_contentdeletepost'] = 'Sendes efter indhold er blevet slettet fra systemet';
$lang['admin']['event_desc_contentstylesheet'] = 'Sendes f&oslash;r stypografiarket bliver sendt til browseren';
$lang['admin']['event_desc_contentprecompile'] = 'Sendes f&oslash;r indhold sendes til afvikling af smarty';
$lang['admin']['event_desc_contentpostcompile'] = 'Sendes efter indhold er blevet afviklet af smarty';
$lang['admin']['event_desc_contentpostrender'] = 'Sendes f&oslash;r den samlede html bliver sendt til browseren';
$lang['admin']['event_desc_smartyprecompile'] = 'Sendes f&oslash;r indhold som skal afvikles af smarty bliver sendt';
$lang['admin']['event_desc_smartypostcompile'] = 'Sendes n&aring;r smarty har afviklet tilsendt indhold';
$lang['admin']['event_help_loginpost'] = '<p>Sendes efter en bruger er logget ind i administrationspanelet.</p>
<h4>Parametre</h4>
<ol>
<li>&#039;user&#039; - Henviser til den ber&oslash;rte bruger.</li>
</ol>
';
$lang['admin']['event_help_logoutpost'] = '<p>Sent after a user logs out of the admin panel.</p>
<h4>Parameters</h4>
<ol>
<li>Reference to the affected user object.</li>
</ol>
';
$lang['admin']['event_help_adduserpre'] = '<p>Sent before a new user is created.</p>
<h4>Parameters</h4>
<ol>
<li>Reference to the affected user object.</li>
</ol>
';
$lang['admin']['event_help_adduserpost'] = '<p>Sent after a new user is created.</p>
<h4>Parameters</h4>
<ol>
<li>Reference to the affected user object.</li>
</ol>
';
$lang['admin']['event_help_edituserpre'] = '<p>Sent before edits to a user are saved.</p>
<h4>Parameters</h4>
<ol>
<li>Reference to the affected user object.</li>
</ol>
';
$lang['admin']['event_help_edituserpost'] = '<p>Sent after edits to a user are saved.</p>
<h4>Parameters</h4>
<ol>
<li>Reference to the affected user object.</li>
</ol>
';
$lang['admin']['event_help_deleteuserpre'] = '<p>Sent before a user is deleted from the system.</p>
<h4>Parameters</h4>
<ol>
<li>Reference to the affected user object.</li>
</ol>
';
$lang['admin']['event_help_deleteuserpost'] = '<p>Sent after a user is deleted from the system.</p>
<h4>Parameters</h4>
<ol>
<li>Reference to the affected user object.</li>
</ol>
';
$lang['admin']['event_help_addgrouppre'] = '<p>Sent before a new group is created.</p>
<h4>Parameters</h4>
<ol>
<li>Reference to the affected group object.</li>
</ol>
';
$lang['admin']['event_help_addgrouppost'] = '<p>Sent after a new group is created.</p>
<h4>Parameters</h4>
<ol>
<li>Reference to the affected group object.</li>
</ol>
';
$lang['admin']['event_help_changegroupassignpre'] = '<p>Sent before group assignments are saved.</p>
<h4>Parameters></h4>
<ul>
<li>\&#039;group\&#039; - Reference to the group object.</li>
<li>\&#039;users\&#039; - Array of references to user objects belonging to the group.</li>
';
$lang['admin']['event_help_changegroupassignpost'] = '<p>Sent after group assignments are saved.</p>
<h4>Parameters></h4>
<ul>
<li>\&#039;group\&#039; - Reference to the affected group object.</li>
<li>\&#039;users\&#039; - Array of references to user objects now belonging to the affected group.</li>
';
$lang['admin']['event_help_editgrouppre'] = '<p>Sent before edits to a group are saved.</p>
<h4>Parameters</h4>
<ol>
<li>Reference to the affected group object.</li>
</ol>
';
$lang['admin']['event_help_editgrouppost'] = '<p>Sent after edits to a group are saved.</p>
<h4>Parameters</h4>
<ol>
<li>Reference to the affected group object.</li>
</ol>
';
$lang['admin']['event_help_deletegrouppre'] = '<p>Sent before a group is deleted from the system.</p>
<h4>Parameters</h4>
<ol>
<li>Reference to the affected group object.</li>
</ol>
';
$lang['admin']['event_help_deletegrouppost'] = '<p>Sent after a group is deleted from the system.</p>
<h4>Parameters</h4>
<ol>
<li>Reference to the affected group object.</li>
</ol>
';
$lang['admin']['event_help_addstylesheetpre'] = '<p>Sent before a new stylesheet is created.</p>
<h4>Parameters</h4>
<ol>
<li>Reference to the affected stylesheet object.</li>
</ol>
';
$lang['admin']['event_help_addstylesheetpost'] = '<p>Sent after a new stylesheet is created.</p>
<h4>Parameters</h4>
<ol>
<li>Reference to the affected stylesheet object.</li>
</ol>
';
$lang['admin']['event_help_editstylesheetpre'] = '<p>Sent before edits to a stylesheet are saved.</p>
<h4>Parameters</h4>
<ol>
<li>Reference to the affected stylesheet object.</li>
</ol>
';
$lang['admin']['event_help_editstylesheetpost'] = '<p>Sent after edits to a stylesheet are saved.</p>
<h4>Parameters</h4>
<ol>
<li>Reference to the affected stylesheet object.</li>
</ol>
';
$lang['admin']['event_help_deletestylesheetpre'] = '<p>Sent before a stylesheet is deleted from the system.</p>
<h4>Parameters</h4>
<ol>
<li>Reference to the affected stylesheet object.</li>
</ol>
';
$lang['admin']['event_help_deletestylesheetpost'] = '<p>Sent after a stylesheet is deleted from the system.</p>
<h4>Parameters</h4>
<ol>
<li>Reference to the affected stylesheet object.</li>
</ol>
';
$lang['admin']['event_help_addtemplatepre'] = '<p>Sent before a new template is created.</p>
<h4>Parameters</h4>
<ol>
<li>Reference to the affected template object.</li>
</ol>
';
$lang['admin']['event_help_addtemplatepost'] = '<p>Sent after a new template is created.</p>
<h4>Parameters</h4>
<ol>
<li>Reference to the affected template object.</li>
</ol>
';
$lang['admin']['event_help_edittemplatepre'] = '<p>Sent before edits to a template are saved.</p>
<h4>Parameters</h4>
<ol>
<li>Reference to the affected template object.</li>
</ol>
';
$lang['admin']['event_help_edittemplatepost'] = '<p>Sent after edits to a template are saved.</p>
<h4>Parameters</h4>
<ol>
<li>Reference to the affected template object.</li>
</ol>
';
$lang['admin']['event_help_deletetemplatepre'] = '<p>Sent before a template is deleted from the system.</p>
<h4>Parameters</h4>
<ol>
<li>Reference to the affected template object.</li>
</ol>
';
$lang['admin']['event_help_deletetemplatepost'] = '<p>Sent after a template is deleted from the system.</p>
<h4>Parameters</h4>
<ol>
<li>Reference to the affected template object.</li>
</ol>
';
$lang['admin']['event_help_templateprecompile'] = '<p>Sent before a template is sent to smarty for processing.</p>
<h4>Parameters</h4>
<ol>
<li>Reference to the affected template text.</li>
</ol>
';
$lang['admin']['event_help_templatepostcompile'] = '<p>Sent after a template has been processed by smarty.</p>
<h4>Parameters</h4>
<ol>
<li>Reference to the affected template text.</li>
</ol>
';
$lang['admin']['event_help_addglobalcontentpre'] = '<p>Sent before a new global content block is created.</p>
<h4>Parameters</h4>
<ol>
<li>Reference to the affected global content block object.</li>
</ol>
';
$lang['admin']['event_help_addglobalcontentpost'] = '<p>Sent after a new global content block is created.</p>
<h4>Parameters</h4>
<ol>
<li>Reference to the affected global content block object.</li>
</ol>
';
$lang['admin']['event_help_editglobalcontentpre'] = '<p>Sent before edits to a global content block are saved.</p>
<h4>Parameters</h4>
<ol>
<li>Reference to the affected global content block object.</li>
</ol>
';
$lang['admin']['event_help_editglobalcontentpost'] = '<p>Sent after edits to a global content block are saved.</p>
<h4>Parameters</h4>
<ol>
<li>Reference to the affected global content block object.</li>
</ol>
';
$lang['admin']['event_help_deleteglobalcontentpre'] = '<p>Sent before a global content block is deleted from the system.</p>
<h4>Parameters</h4>
<ol>
<li>Reference to the affected global content block object.</li>
</ol>
';
$lang['admin']['event_help_deleteglobalcontentpost'] = '<p>Sent after a global content block is deleted from the system.</p>
<h4>Parameters</h4>
<ol>
<li>Reference to the affected global content block object.</li>
</ol>
';
$lang['admin']['event_help_globalcontentprecompile'] = '<p>Sent before a global content block is sent to smarty for processing.</p>
<h4>Parameters</h4>
<ol>
<li>Reference to the affected global content block text.</li>
</ol>
';
$lang['admin']['event_help_globalcontentpostcompile'] = '<p>Sent after a global content block has been processed by smarty.</p>
<h4>Parameters</h4>
<ol>
<li>Reference to the affected global content block text.</li>
</ol>
';
$lang['admin']['event_help_contenteditpre'] = '<p>Sent before edits to content are saved.</p>
<h4>Parameters</h4>
<ol>
<li>Reference to the affected content object.</li>
</ol>
';
$lang['admin']['event_help_contenteditpost'] = '<p>Sent after edits to content are saved.</p>
<h4>Parameters</h4>
<ol>
<li>Reference to the affected content object.</li>
</ol>
';
$lang['admin']['event_help_contentdeletepre'] = '<p>Sent before content is deleted from the system.</p>
<h4>Parameters</h4>
<ol>
<li>Reference to the affected content object.</li>
</ol>
';
$lang['admin']['event_help_contentdeletepost'] = '<p>Sent after content is deleted from the system.</p>
<h4>Parameters</h4>
<ol>
<li>Reference to the affected content object.</li>
</ol>
';
$lang['admin']['event_help_contentstylesheet'] = '<p>Sent before the sytlesheet is sent to the browser.</p>
<h4>Parameters</h4>
<ol>
<li>Reference to the affected stylesheet text.</li>
</ol>
';
$lang['admin']['event_help_contentprecompile'] = '<p>Sent before content is sent to smarty for processing.</p>
<h4>Parameters</h4>
<ol>
<li>Reference to the affected content text.</li>
</ol>
';
$lang['admin']['event_help_contentpostcompile'] = '<p>Sent after content has been processed by smarty.</p>
<h4>Parameters</h4>
<ol>
<li>Reference to the affected content text.</li>
</ol>
';
$lang['admin']['event_help_contentpostrender'] = '<p>Sent before the combined html is sent to the browser.</p>
<h4>Parameters</h4>
<ol>
<li>Reference to the html text.</li>
</ol>
';
$lang['admin']['event_help_smartyprecompile'] = '<p>Sent before any content destined for smarty is sent to for processing.</p>
<h4>Parameters</h4>
<ol>
<li>Reference to the affected text.</li>
</ol>
';
$lang['admin']['event_help_smartypostcompile'] = '<p>Sent after any content destined for smarty has been processed.</p>
<h4>Parameters</h4>
<ol>
<li>Reference to the affected text.</li>
</ol>
';
$lang['admin']['filterbymodule'] = 'Filtr&eacute;r efter modul';
$lang['admin']['showall'] = 'Vis alle';
$lang['admin']['core'] = 'Kerne';
$lang['admin']['defaultpagecontent'] = 'Default sideindhold';
$lang['admin']['file_url'] = 'Link til fil (i stedet for URL)';
$lang['admin']['no_file_url'] = 'Ingen (Brug ovenst&aring;ende URL)';
$lang['admin']['defaultparentpage'] = 'Standard moder-side';
$lang['admin']['error_udt_name_whitespace'] = 'Fejl: Brugerdefinerede tags kan ikke have mellemrum i deres navne';
$lang['admin']['warning_safe_mode'] = '<strong><em>ADVARSEL:</em></strong> PHP Safe mode er sl&aring;et til.  Dette vanskeligg&oslash;r upload af filer via web browseren, f.eks. billeder, temaer og XML module pakker. Du anbefales at kontakte adminsitratoren for site&#039;t for at f&aring; sl&aring;et safe mode fra.';
$lang['admin']['test'] = 'Test';
$lang['admin']['results'] = 'Resultater';
$lang['admin']['untested'] = 'Ikke testet';
$lang['admin']['unknown'] = 'Ukendt';
$lang['admin']['download'] = 'Hent';
$lang['admin']['frontendwysiwygtouse'] = 'Wysiwyg-editor for bes&oslash;gende';
$lang['admin']['all_groups'] = 'Alle grupper';
$lang['admin']['error_type'] = 'Fejl type';
$lang['admin']['contenttype_errorpage'] = 'Fejl side';
$lang['admin']['errorpagealreadyinuse'] = 'Fejl kode allerede i brug';
$lang['admin']['404description'] = 'Side ikke funder';
$lang['admin']['usernotfound'] = 'Bruger ikke fundet.';
$lang['admin']['passwordchange'] = 'Angiv venligst det nye kodeord';
$lang['admin']['recoveryemailsent'] = 'En email blev sendt til den tilknyttede adresse. Kontroll&eacute;r din email for videre instruktioner';
$lang['admin']['errorsendingemail'] = 'Der skete en fejl ved fremsendelse af email. Kontakt din systemadministrator';
$lang['admin']['passwordchangedlogin'] = 'Kodeord &aelig;ndret. Log venligst ind med de nye oplysninger.';
$lang['admin']['nopasswordforrecovery'] = 'Ingen email adresse er tilknyttet den bruger. Genoprettelse af kodeord er ikke muligt. Kontakt venligst din systemadministrator.';
$lang['admin']['lostpw'] = 'Glemt dit kodeord?';
$lang['admin']['lostpwemailsubject'] = '[%s] Kodeord genoprettelse';
$lang['admin']['lostpwemail'] = 'Du modtager denne email fordi der er anmodet om at &aelig;ndre (%s) kodeordet tilknyttet denne brugerkonto (%s). Hvis du vil angive nyt kodeord for denne konto klik p&aring; nedenst&aring;ende link, eller kopi&eacute;r dette til din browser:
%s

Hvis du ikke kender noget til denne anmodning eller den er sendt ved en fejl, s&aring; ignor&eacute;r venligst denne email og intet vil blive &aelig;ndret.';
$lang['admin']['utma'] = '156861353.2039886585.1231713618.1270923295.1271012110.115';
$lang['admin']['utmz'] = '156861353.1269788432.113.24.utmcsr=forum.cmsmadesimple.org|utmccn=(referral)|utmcmd=referral|utmcct=/index.php';
$lang['admin']['qca'] = '1229601790-85243197-43260713';
$lang['admin']['utmb'] = '156861353';
$lang['admin']['utmc'] = '156861353';
?>