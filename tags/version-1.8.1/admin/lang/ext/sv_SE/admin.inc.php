<?php
$lang['admin']['listtemplates_pagelimit'] = 'Antal rader per sida vid visning av mallar';
$lang['admin']['liststylesheets_pagelimit'] = 'Antal rader per sida vid visning av stilmallar';
$lang['admin']['listgcbs_pagelimit'] = 'Antal rader per sida vid visning Global Content Blocks';
$lang['admin']['insecure'] = 'Os&auml;ker (HTTP)';
$lang['admin']['secure'] = 'S&auml;ker (HTTPS)';
$lang['admin']['secure_page'] = 'Anv&auml;nd HTTPS f&ouml;r denna sida';
$lang['admin']['thumbnail_width'] = 'Thumbnail Bredd';
$lang['admin']['thumbnail_height'] = 'Thumbnail H&ouml;jd';
$lang['admin']['E_STRICT'] = '&Auml;r E_STRICT deaktiverat i error_reporting';
$lang['admin']['test_estrict_failed'] = 'E_STRICT &auml;r aktiverat i error_reporting';
$lang['admin']['info_estrict_failed'] = 'Vissa paket som CMSMS anv&auml;nder fungerar inte bra med E_STRICT. Var v&auml;nlig deaktivera detta innan du forts&auml;tter.';
$lang['admin']['E_DEPRECATED'] = '&Auml;r E_DEPRECATED deaktiverat i error_reporting';
$lang['admin']['test_edeprecated_failed'] = 'E_DEPRECATED &auml;r aktiverat';
$lang['admin']['info_edeprecated_failed'] = 'Om E_DEPRECATED &auml;r aktiverat i din error reporting kommer anv&auml;ndare att se m&aring;nga varningsmeddelanden som kan p&aring;verka utseendet och funktionaliteten';
$lang['admin']['session_use_cookies'] = 'Session Use Cookies';
$lang['admin']['errorgettingcontent'] = 'Kunde inte h&auml;mta information f&ouml;r det angivna inneh&aring;llsobjektet';
$lang['admin']['errordeletingcontent'] = 'Kunde inte radera inneh&aring;llet (endera s&aring; har sidan child(undersidor) eller &auml;r standard inneh&aring;ll)';
$lang['admin']['invalidemail'] = 'Den angivna e-postadressen &auml;r ogiltig';
$lang['admin']['info_deletepages'] = 'Notera: Av h&auml;nsyn till r&auml;ttighetsinst&auml;llningarna kanske inte alla de sidor du markerat f&ouml;r borttagning kan visas nedan';
$lang['admin']['info_pagealias'] = 'Specifera ett unikt alias f&ouml;r denna sida.';
$lang['admin']['info_autoalias'] = 'Om detta f&auml;lt &auml;r tomt s&aring; skapas ett alias automatiskt';
$lang['admin']['invalidparent'] = 'Du m&aring;ste v&auml;lja en huvudsida (kontakta en administrat&ouml;r om du inte ser detta valet).';
$lang['admin']['forgotpwprompt'] = 'Skriv in ditt administrat&ouml;rs anv&auml;ndarnamn. Ett e-post meddelande kommer att skickas till det e-post konto, med nya inloggningsuppgiter, som &auml;r relaterat till anv&auml;ndarnamnet.';
$lang['admin']['info_basic_attributes'] = 'This field allows you to specify which content properties that users without the &quot;Modify Page Structure&quot; permission are allowed to edit.';
$lang['admin']['basic_attributes'] = 'Grund inst&auml;llningar';
$lang['admin']['no_permission'] = 'Du har inte r&auml;ttigheter att anv&auml;nda den funktionen.';
$lang['admin']['bulk_success'] = 'Massuppdatering lyckades.';
$lang['admin']['no_bulk_performed'] = 'Ingen storsk&ouml;tsel utf&ouml;rdes.';
$lang['admin']['info_preview_notice'] = 'Varning: F&ouml;rhandsgranskningen fungerar som en webbl&auml;sare d&auml;r du kan navigera iv&auml;g fr&aring;n sidan du f&ouml;rhandsgranskar. Du b&ouml;r dock t&auml;nka p&aring; att du kan st&ouml;ta p&aring; problem om du v&auml;ljer att g&ouml;ra s&aring;. Om du surfar iv&auml;g fr&aring;n f&ouml;rhandsgranskningsf&ouml;nstret och &aring;terv&auml;nder, s&aring; kan det vara s&aring; att du inte ser de f&ouml;r&auml;ndringar som du har gjort i inneh&aring;llet f&ouml;rrens du g&ouml;r f&ouml;r&auml;ndringarna och sedan uppdaterar denna flik. Om du lagt till inneh&aring;ll och surfat iv&auml;g fr&aring;n denna sida, kommer du inte kunna &aring;terg&aring; till denna igen, utan m&aring;ste uppdatera denna flik.';
$lang['admin']['sitedownexcludes'] = 'Uteslut dessa adresser fr&aring;n &quot;SidanNere&quot; Meddelanden';
$lang['admin']['info_sitedownexcludes'] = 'This parameter allows listing a comma separated list of ip addresses or networks that should not be subject to the sitedown mechanism.  This allows administrators to work on a site whilst anonymous visitors receive a sitedown message.<br/><br/>Addresses can be specified in the following formats:<br/>
1. xxx.xxx.xxx.xxx -- (exact IP address)<br/>
2. xxx.xxx.xxx.[yyy-zzz] -- (IP address range)<br/>
3. xxx.xxx.xxx.xxx/nn -- (nnn = number of bits, cisco style.  i.e:  192.168.0.100/24 = entire 192.168.0 class C subnet)';
$lang['admin']['setup'] = 'Avancerade inst&auml;llningar';
$lang['admin']['handle_404'] = 'Anpassad 404 inst&auml;llning';
$lang['admin']['sitedown_settings'] = '&quot;SidanNere&quot; inst&auml;llningar';
$lang['admin']['general_settings'] = 'Standardinst&auml;llningar';
$lang['admin']['help_function_page_attr'] = '<h3>What does this do?</h3>
<p>This tag can be used to return the value of the attributes of a certain page.</p>
<h3>How do I use it?</h3>
<p>Insert the tag into the template like: <code>{page_attr key=&quot;extra1&quot;}</code>.</p>
<h3>What parameters does it take?</h3>
<ul>
  <li><strong>key [required]</strong> The key to return the attribute of.</li>
</ul>';
$lang['admin']['forge'] = 'Forge ';
$lang['admin']['disable_wysiwyg'] = 'Avaktivera WYSIWYG-redigerare p&aring; den h&auml;r sidan (oavsett mall eller anv&auml;ndarinst&auml;llningar)';
$lang['admin']['help_function_page_image'] = '<h3>Vad g&ouml;r denna?</h3>
<p>Den h&auml;r taggen kan anv&auml;ndas f&ouml;r att returnera v&auml;rdet av en bild eller thumbnail p&aring; en viss sida.</p>
<h3>Hur anv&auml;nder jag det?</h3>
<p>S&auml;tt taggen i mallen s&aring; h&auml;r: <code>{page_image}</code>.</p>
<h3>Vad f&ouml;r parametrar tar den?</h3>
<ul>
  <li>thumbnail - Alternativt visa en thumbnail ist&auml;llet f&ouml;r huvudbilden.</li>
</ul>';
$lang['admin']['pagelink_circular'] = 'En sidl&auml;nk kan inte lista upp en annan sidl&auml;nk som destination';
$lang['admin']['destinationnotfound'] = 'Den valda sidan kunde inte hittas eller &auml;r ogiltig';
$lang['admin']['help_function_dump'] = '<h3>What does this do?</h3>
  <p>This tag can be used to dump the contents of any smarty variable in a more readable format.  This is useful for debugging, and editing templates, to know the format and types of data available.</p>
<h3>How do I use it?</h3>
<p>Insert the tag in the template like <code>{dump item=&#039;the_smarty_variable_to_dump&#039;}</code>.</p>
<h3>What parameters does it take</h3>
<ul>
<li><strong>item (required)</strong> - The smarty variable to dump the contents of.</li>
<li>maxlevel - The maximum number of levels to recurse (applicable only if recurse is also supplied.  The default value for this parameter is 3</li>
<li>nomethods - Skip output of methods from objects.</li>
<li>novars - Skip output of object members.</li>
<li>recurse - Recurse a maximum number of levels through the objects providing verbose output for each item until the maximum number of levels is reached.</li>
</ul>';
$lang['admin']['sqlerror'] = 'SQL-fel i %s';
$lang['admin']['image'] = 'Bild';
$lang['admin']['thumbnail'] = 'Tumnagel';
$lang['admin']['searchable'] = 'Denna sida &auml;r s&ouml;kbar';
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
$lang['admin']['error_udt_name_chars'] = 'Ett giltigt UDT-namn (UDT=anv&auml;ndartagg) b&ouml;rjar med en bokstav eller understreck, f&ouml;ljt av valfritt antal bokst&auml;ver, siffror eller understreck.';
$lang['admin']['errorupdatetemplateallpages'] = 'Mallen &auml;r inte aktiv';
$lang['admin']['hidefrommenu'] = 'G&ouml;m fr&aring;n menyn';
$lang['admin']['settemplate'] = 'Ange mall';
$lang['admin']['text_settemplate'] = 'Ange markerade sidor till en annan mall';
$lang['admin']['cachable'] = 'Kan cachas';
$lang['admin']['noncachable'] = 'Inte m&ouml;jlig att cachas';
$lang['admin']['copy_from'] = 'Kopiera fr&aring;n';
$lang['admin']['copy_to'] = 'Kopiera till';
$lang['admin']['copycontent'] = 'Kopiera inneh&aring;lls objekt';
$lang['admin']['md5_function'] = 'md5-funktion';
$lang['admin']['tempnam_function'] = 'tempnam-funktion';
$lang['admin']['register_globals'] = 'PHP register_globals ';
$lang['admin']['output_buffering'] = 'PHP output_buffering ';
$lang['admin']['disable_functions'] = 'disable_functions i PHP';
$lang['admin']['xml_function'] = 'Enkelt XML-st&ouml;d';
$lang['admin']['magic_quotes_gpc'] = 'Magiska citattecken f&ouml;r Get/Post/Cookie';
$lang['admin']['magic_quotes_gpc_on'] = 'Enkelt och dubbelt citattecken och omv&auml;nt snedstreck undantas automatiskt (escaped). Du kan ha problem att spara mallar.';
$lang['admin']['magic_quotes_runtime'] = 'Magiska citattecken i k&ouml;rning';
$lang['admin']['magic_quotes_runtime_on'] = 'F&ouml;r de flesta funktioner som returnerar data kommer ha citattecken undantagna (escaped) med backslash. Du kan f&aring; problem.';
$lang['admin']['file_get_contents'] = 'Testa file_get_contents';
$lang['admin']['check_ini_set'] = 'Testa ini_set';
$lang['admin']['check_ini_set_off'] = 'Du kan ha sv&aring;righeter med vissa funktioner utan den h&auml;r m&ouml;jligheten. Detta testet kan misslyckas om safe_mode &auml;r aktiverat.';
$lang['admin']['file_uploads'] = 'Fulippladdningar';
$lang['admin']['test_remote_url'] = 'Testa fj&auml;rr-URL';
$lang['admin']['test_remote_url_failed'] = 'Du kommer antagligen inte att kunna &ouml;ppna en fil p&aring; en fj&auml;rrwebbplats.';
$lang['admin']['test_allow_url_fopen_failed'] = 'N&auml;r allow url fopen &auml;r inaktiverad kommer du inte att kunna komma &aring;t URL-objekt som fil som anv&auml;nder FTP- eller HTTP-protokollen.';
$lang['admin']['connection_error'] = 'Utg&aring;ende HTTP-anslutningar verkar inte fungera! Finns det en brandv&auml;gg eller n&aring;gra ACL f&ouml;r externa anslutningar? Detta kommer att g&ouml;ra att modulhanteraren och ev. andra funktioner inte fungerar.';
$lang['admin']['remote_connection_timeout'] = 'Tid f&ouml;r anslutningen gick ut!';
$lang['admin']['search_string_find'] = 'Anslutning ok!';
$lang['admin']['connection_failed'] = 'Anslutningen misslyckades!';
$lang['admin']['remote_response_ok'] = 'Fj&auml;rrespons: ok!';
$lang['admin']['remote_response_404'] = 'Fj&auml;rrespons: hittades ej!';
$lang['admin']['remote_response_error'] = 'Fj&auml;rrespons: fel!';
$lang['admin']['notifications_to_handle'] = 'Du har <b>%d</b> obehandlade underr&auml;ttelser';
$lang['admin']['notification_to_handle'] = 'Du har <b>%d</b> obehandlade underr&auml;ttelser';
$lang['admin']['notifications'] = 'Notiser';
$lang['admin']['dashboard'] = 'Visa instrumentpanelen';
$lang['admin']['ignorenotificationsfrommodules'] = 'Ignorera notiser fr&aring;n dessa moduler';
$lang['admin']['admin_enablenotifications'] = 'Till&aring;t anv&auml;ndare att se notiser<br/><em>(notiserna kommer att synas p&aring; alla adminsidor)</em>';
$lang['admin']['enablenotifications'] = 'Aktivera anv&auml;ndarnotiser i adminsektionen';
$lang['admin']['test_check_open_basedir_failed'] = '&Ouml;ppna basedir-restriktioner &auml;r aktiva. Du kan ha problem med vissa till&auml;gg med den h&auml;r restriktionen';
$lang['admin']['config_writable'] = 'config.php skrivbar. F&ouml;r din s&auml;kerhet &auml;r det b&auml;st att &auml;ndra r&auml;ttigheterna till endast l&auml;sbar';
$lang['admin']['caution'] = 'F&ouml;rsiktighet';
$lang['admin']['create_dir_and_file'] = 'Kontrollerar om httpd-processen kan skapa en fil i en mapp som den har skapat';
$lang['admin']['os_session_save_path'] = 'Ingen kontroll pga operativsystemets s&ouml;kv&auml;g';
$lang['admin']['unlimited'] = 'Obegr&auml;nsat';
$lang['admin']['open_basedir'] = 'PHP Open Basedir ';
$lang['admin']['open_basedir_active'] = 'Ingen kontroll pga att open basedir &auml;r aktivt';
$lang['admin']['invalid'] = 'Ogiltig';
$lang['admin']['checksum_passed'] = 'Alla checksummor st&auml;mde &ouml;verens med de i den uppladdade filen';
$lang['admin']['error_retrieving_file_list'] = 'Fel vid h&auml;mtning av fil-lista';
$lang['admin']['files_checksum_failed'] = 'Filer som inte kunde checksummeras';
$lang['admin']['failure'] = 'Misslyckande';
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
$lang['admin']['page_metadata'] = 'Sidspecifika metadata';
$lang['admin']['pagedata_codeblock'] = 'Smarta-data eller -logik som &auml;r specifik f&ouml;r den h&auml;r sidan';
$lang['admin']['error_uploadproblem'] = 'Ett fel uppstod i uppladdningen';
$lang['admin']['error_nofileuploaded'] = 'Ingen fil har blivit uppladdad';
$lang['admin']['files_failed'] = 'md5sum-kontroll misslyckades f&ouml;r filer';
$lang['admin']['files_not_found'] = 'Filer hittades ej';
$lang['admin']['info_generate_cksum_file'] = 'Den h&auml;r funktionen l&aring;ter dig generera en checksum-fil och spara den p&aring; din lokala dator f&ouml;r senare validering. Detta b&ouml;r g&ouml;ras precis innan du lanserar din webbsida, och/eller efter uppgraderingar, eller st&ouml;rre &auml;ndringar.';
$lang['admin']['info_validation'] = 'Den h&auml;r funktionen j&auml;mf&ouml;r checksummorna i den uppladdade filen med filerna i den nuvarande installationen. Det kan hj&auml;lpa dig att hitta problem med uppladdningar, eller att exakt vilka filer som &auml;ndrades om ditt system har hackats. En checksum-fil genereras f&ouml;r varje utg&aring;va av CMS Made Simple fr.o.m. version 1.4.';
$lang['admin']['download_cksum_file'] = 'Ladda ner checksum-fil';
$lang['admin']['perform_validation'] = 'Genomf&ouml;r validering';
$lang['admin']['upload_cksum_file'] = 'Ladda upp checksum-fil';
$lang['admin']['checksumdescription'] = 'Validera integriteten f&ouml;r CMS-filerna genom att j&auml;mf&ouml;ra med k&auml;nda checksummor';
$lang['admin']['system_verification'] = 'Systemverifiering';
$lang['admin']['extra1'] = 'Extra Sidattribut 1';
$lang['admin']['extra2'] = 'Extra Sidattribut 2';
$lang['admin']['extra3'] = 'Extra Sidattribut 3';
$lang['admin']['start_upgrade_process'] = 'P&aring;b&ouml;rja uppgraderingsprocess';
$lang['admin']['warning_upgrade'] = '<em><strong>Varning:</strong></em> CMSMS beh&ouml;ver uppgraderas.';
$lang['admin']['warning_upgrade_info1'] = 'Du k&ouml;r nu schema version %s. och du m&aring;ste uppgradera till version %s';
$lang['admin']['warning_upgrade_info2'] = 'V&auml;nligen klicka p&aring; f&ouml;ljande l&auml;nk: %s.';
$lang['admin']['warning_mail_settings'] = 'Dina e-postinst&auml;llningar har inte konfigurerats. Detta kan p&aring;verka dina m&ouml;jligheter att skicka e-post fr&aring;n din webbplats. Du b&ouml;r g&aring; till <a href="moduleinterface.php?module=CMSMailer">Till&auml;gg >> CMSMailer</a> och konfigurera e-postinst&auml;llningarna med informationen som du har f&aring;tt fr&aring;n ditt webbhotell.';
$lang['admin']['view_page'] = 'Visa den h&auml;r sidan i ett nytt f&ouml;nster';
$lang['admin']['off'] = 'Av';
$lang['admin']['on'] = 'P&aring;';
$lang['admin']['invalid_test'] = 'Ogiltigt test param v&auml;rde!';
$lang['admin']['copy_paste_forum'] = 'Visa textrapport <em>(anv&auml;ndbart f&ouml;r att kopiera till foruminl&auml;gg)</em>';
$lang['admin']['permission_information'] = 'R&auml;ttighetsinformation';
$lang['admin']['server_os'] = 'Serverns operativsystem';
$lang['admin']['server_api'] = 'Server-API';
$lang['admin']['server_software'] = 'Servermjukvara';
$lang['admin']['server_information'] = 'Serverinformation';
$lang['admin']['session_save_path'] = 'S&ouml;kv&auml;g d&auml;r session sparas';
$lang['admin']['max_execution_time'] = 'Maximal verkst&auml;llandetid (maximum execution time)';
$lang['admin']['gd_version'] = 'GD-version';
$lang['admin']['upload_max_filesize'] = 'Maximal filstorlek f&ouml;r uppladdning';
$lang['admin']['post_max_size'] = 'Maximal Post-storlek';
$lang['admin']['memory_limit'] = 'Effektiv PHP-minnesgr&auml;ns';
$lang['admin']['server_db_type'] = 'Serverdatabas';
$lang['admin']['server_db_version'] = 'Serverdatabas-version';
$lang['admin']['phpversion'] = 'Nuvarande PHP-version';
$lang['admin']['safe_mode'] = 'PHP Safe Mode ';
$lang['admin']['php_information'] = 'PHP-information';
$lang['admin']['cms_install_information'] = 'CMS Installationsinformation';
$lang['admin']['cms_version'] = 'CMS-version';
$lang['admin']['installed_modules'] = 'Installerade moduler';
$lang['admin']['config_information'] = 'Konfigurationsinformation';
$lang['admin']['systeminfo_copy_paste'] = 'V&auml;nligen kopiera och klistra in den markerade texten till ditt foruminl&auml;gg';
$lang['admin']['help_systeminformation'] = 'Informationen som visas nedan &auml;r ihopsamlad fr&aring;n flera olika platser och sammanfattad h&auml;r s&aring; att du enkelt kan hitta en del av den information som beh&ouml;vs vid diagnosticering av ett problem eller f&ouml;r att beg&auml;ra hj&auml;lp med din CMS Made Simple-installation.';
$lang['admin']['systeminfo'] = 'Systeminformation';
$lang['admin']['systeminfodescription'] = 'Visa olika sorters information om ditt system som kan vara anv&auml;ndbart f&ouml;r att diagnosticera problem.';
$lang['admin']['welcome_user'] = 'V&auml;lkommen';
$lang['admin']['itsbeensincelogin'] = 'Det har g&aring;tt %s sedan din senaste inloggning';
$lang['admin']['days'] = 'dagar';
$lang['admin']['day'] = 'dag';
$lang['admin']['hours'] = 'timmar';
$lang['admin']['hour'] = 'timme';
$lang['admin']['minutes'] = 'minuter';
$lang['admin']['minute'] = 'minut';
$lang['admin']['help_css_max_age'] = 'Den h&auml;r parametern b&ouml;r s&auml;ttas relativt h&ouml;gt f&ouml;r statiska sajter och ska s&auml;ttas till 0 f&ouml;r utvecklingssajter.';
$lang['admin']['css_max_age'] = 'Maxtid (sekunder) som stilmallar kan cachas i din webbl&auml;sare';
$lang['admin']['error'] = 'Fel';
$lang['admin']['clear_version_check_cache'] = 'Rensa all cachad information om versionskontroller vid skicka';
$lang['admin']['new_version_available'] = '<em>Notis:</em> En ny version av CMS Made Simple finns tillg&auml;nglig. Kontakta din administrat&ouml;r.';
$lang['admin']['info_urlcheckversion'] = 'Om denna URL &auml;r ordet &quot;none&quot; kommer inga kontroller att g&ouml;ras. <br />Alla tomma str&auml;ngar kommer att resultera i att en standard-URL anv&auml;nds.';
$lang['admin']['urlcheckversion'] = 'Anv&auml;nd denna l&auml;nk f&ouml;r att kontrollera om det finns nya CMS-versioner';
$lang['admin']['master_admintheme'] = 'Standardtema f&ouml;r administrationen (f&ouml;r inloggningssidan och nya anv&auml;ndarkonton)';
$lang['admin']['contenttype_separator'] = 'Avskiljare';
$lang['admin']['contenttype_sectionheader'] = 'Avdelningsrubrik';
$lang['admin']['contenttype_link'] = 'Extern l&auml;nk';
$lang['admin']['contenttype_content'] = 'Inneh&aring;ll';
$lang['admin']['contenttype_pagelink'] = 'Intern sidl&auml;nk';
$lang['admin']['nogcbwysiwyg'] = 'Avaktivera WYSIWYG-redigerare f&ouml;r globala inneh&aring;llsblock';
$lang['admin']['destination_page'] = 'M&aring;lsida';
$lang['admin']['additional_params'] = 'Ytterligare parametrar';
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
$lang['admin']['login_info_title'] = 'Information ';
$lang['admin']['login_info'] = 'H&auml;rifr&aring;n b&ouml;r du ta h&auml;nsyn till f&ouml;ljande parametrar';
$lang['admin']['login_info_params'] = '<ol> 
  <li>Cookies enabled in your browser</li> 
  <li>Javascript enabled in your browser </li> 
  <li>Windows popup active to the following address:</li> 
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
$lang['admin']['of'] = 'av';
$lang['admin']['first'] = 'F&ouml;rsta';
$lang['admin']['last'] = 'Sista';
$lang['admin']['adminspecialgroup'] = 'Varning: Medlemmar i den h&auml;r gruppen har automatiskt alla r&auml;ttigheter';
$lang['admin']['disablesafemodewarning'] = 'Avaktivera varningen f&ouml;r safe mode i administrationspanelen';
$lang['admin']['allowparamcheckwarnings'] = 'Till&aring;t att kontroller av parametrar kan skapa varningsmeddelanden';
$lang['admin']['date_format_string'] = 'Datumformatstr&auml;ng';
$lang['admin']['date_format_string_help'] = '<em>strftime</em> formatterad datumformatstr&auml;ng';
$lang['admin']['last_modified_at'] = 'Senast &auml;ndrad ';
$lang['admin']['last_modified_by'] = 'Senast &auml;ndrad av';
$lang['admin']['read'] = 'L&auml;s';
$lang['admin']['write'] = 'Skriv';
$lang['admin']['execute'] = 'Verkst&auml;ll';
$lang['admin']['group'] = 'Grupp';
$lang['admin']['other'] = 'Annan';
$lang['admin']['event_desc_moduleupgraded'] = 'Skickas efter att en modul har uppgraderats';
$lang['admin']['event_desc_moduleinstalled'] = 'Skickas efter att en modul har installerats';
$lang['admin']['event_desc_moduleuninstalled'] = 'Skickas efter att en modul har avinstallerats';
$lang['admin']['event_desc_edituserdefinedtagpost'] = 'Skickas efter att en anv&auml;ndardefinierad tagg har uppdaterats';
$lang['admin']['event_desc_edituserdefinedtagpre'] = 'Skickas f&ouml;re en anv&auml;ndardefinierad tagg uppdateras';
$lang['admin']['event_desc_deleteuserdefinedtagpre'] = 'Skickas f&ouml;re en anv&auml;ndardefinierad tagg raderas';
$lang['admin']['event_desc_deleteuserdefinedtagpost'] = 'Skickas efter att en anv&auml;ndardefinierad tagg har tagits bort';
$lang['admin']['event_desc_adduserdefinedtagpost'] = 'Skickas efter att en anv&auml;ndardefinierad tagg har lagts till';
$lang['admin']['event_desc_adduserdefinedtagpre'] = 'Skickas f&ouml;re en anv&auml;ndardefinierad tagg l&auml;ggs till';
$lang['admin']['global_umask'] = 'Mask f&ouml;r filr&auml;ttigheter (umask)';
$lang['admin']['errorcantcreatefile'] = 'Kunde inte skapa en fil (r&auml;ttighetsproblem?)';
$lang['admin']['errormoduleversionincompatible'] = 'Modulen &auml;r inte kompatibel med den h&auml;r versionen av CMS Made Simple';
$lang['admin']['errormodulenotloaded'] = 'Internt fel, modulen har inte installerats';
$lang['admin']['errormodulenotfound'] = 'Internt fel, kunde inte finna en moduls instans';
$lang['admin']['errorinstallfailed'] = 'Installation av modul misslyckades';
$lang['admin']['errormodulewontload'] = 'Problem att installera en tillg&auml;nglig modul';
$lang['admin']['frontendlang'] = 'Standardspr&aring;k f&ouml;r webbplatsens framsida (frontend)';
$lang['admin']['info_edituser_password'] = '&Auml;ndra detta f&auml;lt f&ouml;r att byta anv&auml;ndarens l&ouml;senord';
$lang['admin']['info_edituser_passwordagain'] = '&Auml;ndra detta f&auml;lt g&ouml;t att byta anv&auml;ndarens l&ouml;senord';
$lang['admin']['originator'] = 'Ursprung';
$lang['admin']['module_name'] = 'Modulnamn';
$lang['admin']['event_name'] = 'H&auml;ndelsenamn';
$lang['admin']['event_description'] = 'H&auml;ndelsebeskrivning';
$lang['admin']['error_delete_default_parent'] = 'Du kan inte ta bort f&ouml;r&auml;ldern till standardsidan.';
$lang['admin']['jsdisabled'] = 'Tyv&auml;rr, den h&auml;r funktionen kr&auml;ver att du har Javascript aktiverat.';
$lang['admin']['order'] = 'Ordning';
$lang['admin']['reorderpages'] = 'Flytta sidor';
$lang['admin']['reorder'] = 'Flytta';
$lang['admin']['page_reordered'] = 'Sidan har flyttats';
$lang['admin']['pages_reordered'] = 'Sidorna har flyttats';
$lang['admin']['sibling_duplicate_order'] = 'Tv&aring; sidor p&aring; samma niv&aring; kan inte ha samma ordningsnummer. Sidorna har inte flyttats.';
$lang['admin']['no_orders_changed'] = 'Du valde att flytta sidorna, men du bytte inte plats p&aring; n&aring;gon av dem. Sidorna har inte flyttats.';
$lang['admin']['order_too_small'] = 'En sidas ordningsnummer kan inte vara noll. Sidorna har inte flyttats.';
$lang['admin']['order_too_large'] = 'En sidas ordningsnummer kan inte vara st&ouml;rre &auml;n antalet sidor p&aring; den niv&aring;n. Sidorna har inte flyttats.';
$lang['admin']['user_tag'] = 'Anv&auml;ndartagg';
$lang['admin']['add'] = 'L&auml;gg till';
$lang['admin']['CSS'] = 'CSS ';
$lang['admin']['about'] = 'Om';
$lang['admin']['action'] = '&Aring;tg&auml;rd';
$lang['admin']['actionstatus'] = '&Aring;tg&auml;rd/Status';
$lang['admin']['active'] = 'Aktiv';
$lang['admin']['addcontent'] = 'L&auml;gg till inneh&aring;ll';
$lang['admin']['cantremove'] = 'Kan inte ta bort';
$lang['admin']['changepermissions'] = 'Byt r&auml;ttigheter';
$lang['admin']['changepermissionsconfirm'] = 'VIDTAG F&Ouml;RSIKTIGHET\n\nDen h&auml;r &aring;tg&auml;rden kommer att f&ouml;rs&ouml;ka g&ouml;ra alla modulens filer skrivbara av webbservern.\n&Auml;r du s&auml;ker p&aring; att vill forts&auml;tta?';
$lang['admin']['contentadded'] = 'Inneh&aring;llet har lagts till i databasen.';
$lang['admin']['contentupdated'] = 'Inneh&aring;llet har uppdaterats. ';
$lang['admin']['contentdeleted'] = 'Inneh&aring;llet har tagits bort fr&aring;n databasen.';
$lang['admin']['success'] = 'Lyckat';
$lang['admin']['addcss'] = 'L&auml;gg till CSS';
$lang['admin']['addgroup'] = 'L&auml;gg till grupp';
$lang['admin']['additionaleditors'] = '&Ouml;vriga redigerare';
$lang['admin']['addtemplate'] = 'L&auml;gg till mall';
$lang['admin']['adduser'] = 'L&auml;gg till anv&auml;ndare';
$lang['admin']['addusertag'] = 'L&auml;gg till anv&auml;ndartagg';
$lang['admin']['adminaccess'] = 'Administrat&ouml;rsr&auml;ttigheter';
$lang['admin']['adminlog'] = 'Administrat&ouml;rslogg';
$lang['admin']['adminlogcleared'] = 'Administrat&ouml;rsloggen rensades';
$lang['admin']['adminlogempty'] = 'Administrat&ouml;rsloggen &auml;r tom';
$lang['admin']['adminsystemtitle'] = 'CMS administrationssystem';
$lang['admin']['adminpaneltitle'] = 'CMS Made Simple Administration';
$lang['admin']['advanced'] = 'Avancerad';
$lang['admin']['aliasalreadyused'] = 'Alias har redan anv&auml;nts f&ouml;r en annan sida. &Auml;ndra &quot;Sidalias&quot; under fliken &quot;Inst&auml;llningar&quot; till n&aring;got annat.';
$lang['admin']['aliasmustbelettersandnumbers'] = 'Alias m&aring;ste vara bokst&auml;ver och siffror';
$lang['admin']['aliasnotaninteger'] = 'Alias kan inte vara en siffra';
$lang['admin']['allpagesmodified'] = 'Alla sidor &auml;r &auml;ndrade!';
$lang['admin']['assignments'] = 'Tilldelningar';
$lang['admin']['associationexists'] = 'Denna l&auml;nk finns redan';
$lang['admin']['autoinstallupgrade'] = 'Installera eller uppgradera automatiskt';
$lang['admin']['back'] = 'Tillbaka till meny';
$lang['admin']['backtoplugins'] = 'Tillbaka till tagglista';
$lang['admin']['cancel'] = 'Avbryt';
$lang['admin']['cantchmodfiles'] = 'Kunde inte &auml;ndra r&auml;ttigheterna p&aring; n&aring;gra filer';
$lang['admin']['cantremovefiles'] = 'Problem att ta bort filer (r&auml;ttigheter?)';
$lang['admin']['confirmcancel'] = '&Auml;r du s&auml;ker p&aring; att vill &aring;ngra dina &auml;ndringar? Klicka OK f&ouml;r att &aring;ngra alla &auml;ndringar. Klicka &Aring;ngra f&ouml;r att forts&auml;tta redigera.';
$lang['admin']['canceldescription'] = '&Aring;ngra &auml;ndringar';
$lang['admin']['clearadminlog'] = 'Rensa administrat&ouml;rslogg';
$lang['admin']['code'] = 'Kod';
$lang['admin']['confirmdefault'] = 'Vill du verkligen ange webbplatsens startsida?';
$lang['admin']['confirmdeletedir'] = 'Vill du verkligen radera denna katalog och hela dess inneh&aring;ll?';
$lang['admin']['content'] = 'Inneh&aring;ll';
$lang['admin']['contentmanagement'] = 'Inneh&aring;llshantering';
$lang['admin']['contenttype'] = 'Inneh&aring;llstyp';
$lang['admin']['copy'] = 'Kopiera';
$lang['admin']['copytemplate'] = 'Kopiera mall';
$lang['admin']['create'] = 'Skapa';
$lang['admin']['createnewfolder'] = 'Skapa ny katalog';
$lang['admin']['cssalreadyused'] = 'CSS-namn anv&auml;nds redan';
$lang['admin']['cssmanagement'] = 'CSS-hantering';
$lang['admin']['currentassociations'] = 'Aktuella l&auml;nkar';
$lang['admin']['currentdirectory'] = 'Aktuell katalog';
$lang['admin']['currentgroups'] = 'Aktuella grupper';
$lang['admin']['currentpages'] = 'Aktuella sidor';
$lang['admin']['currenttemplates'] = 'Aktuella mallar';
$lang['admin']['currentusers'] = 'Aktuella anv&auml;ndare';
$lang['admin']['custom404'] = 'Eget 404-felmeddelande';
$lang['admin']['database'] = 'Databas';
$lang['admin']['databaseprefix'] = 'Databasprefix';
$lang['admin']['databasetype'] = 'Databastyp';
$lang['admin']['date'] = 'Datum';
$lang['admin']['default'] = 'Standard';
$lang['admin']['delete'] = 'Radera';
$lang['admin']['deleteconfirm'] = 'Vill du verkligen radera?';
$lang['admin']['deleteassociationconfirm'] = '&Auml;r du s&auml;ker p&aring; att du vill ta bort kopplingar till - %s - ?';
$lang['admin']['deletecss'] = 'Radera CSS';
$lang['admin']['dependencies'] = 'Beroenden';
$lang['admin']['description'] = 'Beskrivning';
$lang['admin']['directoryexists'] = 'Denna katalog finns redan.';
$lang['admin']['down'] = 'Ned';
$lang['admin']['edit'] = '&Auml;ndra';
$lang['admin']['editconfiguration'] = '&Auml;ndra inst&auml;llningar';
$lang['admin']['editcontent'] = '&Auml;ndra inneh&aring;ll';
$lang['admin']['editcss'] = '&Auml;ndra CSS';
$lang['admin']['editcsssuccess'] = 'Stilmallen uppdaterad';
$lang['admin']['editgroup'] = '&Auml;ndra grupp';
$lang['admin']['editpage'] = '&Auml;ndra sida';
$lang['admin']['edittemplate'] = '&Auml;ndra mall';
$lang['admin']['edittemplatesuccess'] = 'Mallen uppdaterad';
$lang['admin']['edituser'] = '&Auml;ndra anv&auml;ndare';
$lang['admin']['editusertag'] = '&Auml;ndra anv&auml;ndartagg';
$lang['admin']['usertagadded'] = 'Anv&auml;ndardefinierad tagg har lagts till.';
$lang['admin']['usertagupdated'] = 'Anv&auml;ndardefinierad tagg har uppdaterats.';
$lang['admin']['usertagdeleted'] = 'Anv&auml;ndardefinierad tagg har tagits bort.';
$lang['admin']['email'] = 'Epostadress';
$lang['admin']['errorattempteddowngrade'] = 'Att installera den h&auml;r modulen skulle inneb&auml;r en nedgradering. Processen &auml;r avbruten';
$lang['admin']['errorchildcontent'] = 'Inneh&aring;llet har fortfarande barnnoder (undersidor). De m&aring;ste tas bort f&ouml;rst.';
$lang['admin']['errorcopyingtemplate'] = 'Fel vid kopiering av mall';
$lang['admin']['errorcouldnotparsexml'] = 'Fel vid tolkning av XML-fil. Se till att du laddar upp en .xml-fil och inte en .tar.gz eller .zip-fil.';
$lang['admin']['errorcreatingassociation'] = 'Fel vid l&auml;nkning';
$lang['admin']['errorcssinuse'] = 'Denna CSS anv&auml;nds fortfarande av en mall eller sida. Dessa l&auml;nkar m&aring;st tas bort f&ouml;rst.';
$lang['admin']['errordefaultpage'] = 'Den aktuella startsidan kan inte tas bort. S&auml;tt en ny startsida f&ouml;rst.';
$lang['admin']['errordeletingassociation'] = 'Fel vid radering av l&auml;nk.';
$lang['admin']['errordeletingcss'] = 'Fel vid radering av css';
$lang['admin']['errordeletingdirectory'] = 'Kan inte radera katalog. R&auml;ttighetsproblem?';
$lang['admin']['errordeletingfile'] = 'Kunde inte radera filen. R&auml;ttighetsproblem?';
$lang['admin']['errordirectorynotwritable'] = 'Inte tillst&aring;nd att skriva i mappen';
$lang['admin']['errordtdmismatch'] = 'DTD-version saknas eller &auml;r inkompatibel i XML-filen';
$lang['admin']['errorgettingcssname'] = 'Fel vid h&auml;mtning av CSS-namn';
$lang['admin']['errorgettingtemplatename'] = 'Fel vid h&auml;mtning av mallnamn';
$lang['admin']['errorincompletexml'] = 'XML-filen &auml;r ofullst&auml;ndig eller ogiltig';
$lang['admin']['uploadxmlfile'] = 'Installera modulen via XML-fil';
$lang['admin']['cachenotwritable'] = 'Cache-mappen &auml;r inte skrivbar. Rensa cachen kommer inte att fungera. Se till att mappen tmp/cache har fulla r&auml;ttigheter f&ouml;r l&auml;sa/skriva/verkst&auml;lla (chmod 777)';
$lang['admin']['modulesnotwritable'] = 'Mappen modules &auml;r inte skrivbar.  Om du vill installera en modul genom att ladda upp en XML-fil m&aring;ste mappen modules ha fulla r&auml;ttigheter f&ouml;r l&auml;sa/skriva/verkst&auml;lla (chmod 777).';
$lang['admin']['noxmlfileuploaded'] = 'Ingen fil laddades upp. F&ouml;r att installera en module via XML m&aring;ste du v&auml;lja och ladda upp en .xml-fil fr&aring;n din dator.';
$lang['admin']['errorinsertingcss'] = 'Fel vid infogande av CSS';
$lang['admin']['errorinsertinggroup'] = 'Fel vid infogande av grupp';
$lang['admin']['errorinsertingtag'] = 'Fel vid infogande av tagg';
$lang['admin']['errorinsertingtemplate'] = 'Fel vid infogande av mall';
$lang['admin']['errorinsertinguser'] = 'Fel vid infogande av anv&auml;ndare';
$lang['admin']['errornofilesexported'] = 'Fel vid export av filer till xml';
$lang['admin']['errorretrievingcss'] = 'Fel vid h&auml;mtning av CSS';
$lang['admin']['errorretrievingtemplate'] = 'Fel vid h&auml;mtning av mall';
$lang['admin']['errortemplateinuse'] = 'Denna mall anv&auml;nds av en sida. Radera den f&ouml;rst.';
$lang['admin']['errorupdatingcss'] = 'Fel vid uppdatering av CSS';
$lang['admin']['errorupdatinggroup'] = 'Fel vid uppdatering av grupp';
$lang['admin']['errorupdatingpages'] = 'Fel vid uppdatering av sidor';
$lang['admin']['errorupdatingtemplate'] = 'Fel vid uppdatering av mall';
$lang['admin']['errorupdatinguser'] = 'Fel vid uppdatering av anv&auml;ndare';
$lang['admin']['errorupdatingusertag'] = 'Fel vid uppdatering av tagg';
$lang['admin']['erroruserinuse'] = 'Denna anv&auml;ndare &auml;ger fortfarande sidor. &Auml;ndra &auml;gandet till en annan anv&auml;ndare innan denna raderas.';
$lang['admin']['eventhandlers'] = 'H&auml;ndelser';
$lang['admin']['editeventhandler'] = 'Redigera h&auml;ndelsebehandlare';
$lang['admin']['eventhandlerdescription'] = 'Associera anv&auml;ndartagg med h&auml;ndelser';
$lang['admin']['export'] = 'Exportera';
$lang['admin']['event'] = 'H&auml;ndelse';
$lang['admin']['false'] = 'Falskt';
$lang['admin']['settrue'] = 'S&auml;tt som sann';
$lang['admin']['filecreatedirnodoubledot'] = 'Kataloger kan inte inneh&aring;lla &#039;..&#039;.';
$lang['admin']['filecreatedirnoname'] = 'Kan inte skapa en katalog utan namn.';
$lang['admin']['filecreatedirnoslash'] = 'Katalog kan inte inneh&aring;lla &#039;/&#039; eller &#039;\&#039;.';
$lang['admin']['filemanagement'] = 'Filhantering';
$lang['admin']['filename'] = 'Filnamn';
$lang['admin']['filenotuploaded'] = 'Fil kunde inte laddas upp? R&auml;ttighetsproblem?';
$lang['admin']['filesize'] = 'Filstorlek';
$lang['admin']['firstname'] = 'F&ouml;rnamn';
$lang['admin']['groupmanagement'] = 'Gruppadministration';
$lang['admin']['grouppermissions'] = 'Gruppr&auml;ttigheter';
$lang['admin']['handler'] = 'Handler (anv&auml;ndardefinierad tagg)';
$lang['admin']['headtags'] = 'Sidhuvud';
$lang['admin']['help'] = 'Hj&auml;lp';
$lang['admin']['new_window'] = 'nytt f&ouml;nster';
$lang['admin']['helpwithsection'] = 'Hj&auml;lp om %s';
$lang['admin']['helpaddtemplate'] = '<p>En mall &auml;r det som best&auml;mmer utseendet p&aring; din webbplats inneh&aring;ll.</p><p>Skapa layouten h&auml;r och l&auml;gg ocks&aring; till din CSS i sektionen Stilmall f&ouml;r att best&auml;mma utseendet p&aring; olika element.</p>';
$lang['admin']['helplisttemplate'] = '<p>P&aring; den h&auml;r sidan kan du &auml;ndra, radera och skapa mallar.</p><p>F&ouml;r att skapa en ny mall, klicka p&aring; knappen <u>L&auml;gg till mall</u>.</p><p>Om du vill att alla inneh&aring;llssidor anv&auml;nder samma mall, klicka p&aring; l&auml;nken <u>Anv&auml;nd p&aring; alla sidor</u>.</p><p>Vill du kopiera en mall, klicka p&aring; ikonen <u>Kopiera</u> och ange sedan ett nytt namn p&aring; kopian av mallen.</p>';
$lang['admin']['home'] = 'Start';
$lang['admin']['homepage'] = 'Startsida';
$lang['admin']['hostname'] = 'v&auml;rdnamn';
$lang['admin']['idnotvalid'] = 'Det angivna id-numret &auml;r ogiltigt';
$lang['admin']['imagemanagement'] = 'Bildhantering';
$lang['admin']['informationmissing'] = 'Information saknas';
$lang['admin']['install'] = 'Installera';
$lang['admin']['invalidcode'] = 'Ogiltig kod angiven.';
$lang['admin']['illegalcharacters'] = 'Ogiltiga tecken i f&auml;ltet %s.';
$lang['admin']['invalidcode_brace_missing'] = 'Oj&auml;mnt antal klammerparanteser {}';
$lang['admin']['invalidtemplate'] = 'Mallen &auml;r ogiltig';
$lang['admin']['itemid'] = 'Artikel-ID';
$lang['admin']['itemname'] = 'Artikelnamn';
$lang['admin']['language'] = 'Spr&aring;k';
$lang['admin']['lastname'] = 'Efternamn';
$lang['admin']['logout'] = 'Logga ut';
$lang['admin']['loginprompt'] = 'Fyll i giltiga anv&auml;ndaruppgifter f&ouml;r att logga in till administrationspanelen.';
$lang['admin']['logintitle'] = 'Inloggning till adminsidorna f&ouml;r CMS Made Simple';
$lang['admin']['menutext'] = 'Menytext';
$lang['admin']['missingparams'] = 'Vissa parametrar saknades eller var ogiltiga';
$lang['admin']['modifygroupassignments'] = '&Auml;ndra grupptilldelningar';
$lang['admin']['moduleabout'] = 'Om %s-modulen';
$lang['admin']['modulehelp'] = 'Hj&auml;lp f&ouml;r %s-modulen';
$lang['admin']['msg_defaultcontent'] = 'Skriv kod h&auml;r som ska finnas som standardinneh&aring;ll f&ouml;r alla nya sidor';
$lang['admin']['msg_defaultmetadata'] = 'Skriv kod h&auml;r som ska finnas som metadata f&ouml;r alla nya sidor';
$lang['admin']['wikihelp'] = 'Gemensam hj&auml;lp';
$lang['admin']['moduleinstalled'] = 'Modulen &auml;r redan installerad';
$lang['admin']['moduleinterface'] = '%s gr&auml;nssnitt';
$lang['admin']['modules'] = 'Moduler';
$lang['admin']['move'] = 'Flytta';
$lang['admin']['name'] = 'Namn';
$lang['admin']['needpermissionto'] = 'Du beh&ouml;ver r&auml;ttigheten &#039;%s&#039; f&ouml;r att utf&ouml;ra den funktionen.';
$lang['admin']['needupgrade'] = 'Beh&ouml;ver uppgraderas';
$lang['admin']['newtemplatename'] = 'Nytt mallnamn';
$lang['admin']['next'] = 'N&auml;sta';
$lang['admin']['noaccessto'] = 'Ingen tillg&aring;ng till %s';
$lang['admin']['nocss'] = 'Ingen CSS';
$lang['admin']['noentries'] = 'Inga inl&auml;gg';
$lang['admin']['nofieldgiven'] = 'Ingen %s angiven!';
$lang['admin']['nofiles'] = 'Inga filer';
$lang['admin']['nopasswordmatch'] = 'L&ouml;senorden &auml;r inte samma';
$lang['admin']['norealdirectory'] = 'Ingen verklig katalog angiven';
$lang['admin']['norealfile'] = 'Ingen verklig fil angiven';
$lang['admin']['notinstalled'] = 'Ej installerad';
$lang['admin']['overwritemodule'] = 'Skriv &ouml;ver existerande moduler';
$lang['admin']['owner'] = '&Auml;gare';
$lang['admin']['pagealias'] = 'Sidalias';
$lang['admin']['pagedefaults'] = 'Standardinst&auml;llningar f&ouml;r sidor';
$lang['admin']['pagedefaultsdescription'] = 'St&auml;ll in standardv&auml;rden f&ouml;r nya sidor';
$lang['admin']['parent'] = '&Ouml;verliggande';
$lang['admin']['password'] = 'L&ouml;senord';
$lang['admin']['passwordagain'] = 'L&ouml;senord (igen)';
$lang['admin']['permission'] = 'R&auml;ttighet';
$lang['admin']['permissions'] = 'R&auml;ttigheter';
$lang['admin']['permissionschanged'] = 'R&auml;ttigheter har uppdaterats.';
$lang['admin']['pluginabout'] = 'Om %s taggen';
$lang['admin']['pluginhelp'] = 'Hj&auml;lp f&ouml;r %s taggen';
$lang['admin']['pluginmanagement'] = 'Tagghantering';
$lang['admin']['prefsupdated'] = 'Inst&auml;llningar har uppdaterats.';
$lang['admin']['preview'] = 'Granska';
$lang['admin']['previewdescription'] = 'F&ouml;rhandsgranska &auml;ndringar';
$lang['admin']['previous'] = 'F&ouml;reg&aring;ende';
$lang['admin']['remove'] = 'Ta bort';
$lang['admin']['removeconfirm'] = 'Den h&auml;r &aring;tg&auml;rden kommer permanent att ta bort modulens alla filer fr&aring;n den h&auml;r installationen.\n&Auml;r du s&auml;ker p&aring; att du vill forts&auml;tta?';
$lang['admin']['removecssassociation'] = 'Ta bort CSS-l&auml;nk';
$lang['admin']['saveconfig'] = 'Spara inst&auml;llningar';
$lang['admin']['send'] = 'S&auml;nd';
$lang['admin']['setallcontent'] = 'Anv&auml;nd p&aring; alla sidor';
$lang['admin']['setallcontentconfirm'] = 'Vill du verkligen anv&auml;nda denna mall f&ouml;r alla sidor?';
$lang['admin']['showinmenu'] = 'Visa i meny';
$lang['admin']['showsite'] = 'Visa webbplats';
$lang['admin']['sitedownmessage'] = 'Meddelande om webbplatsavbrott';
$lang['admin']['siteprefs'] = 'Globala inst&auml;llningar';
$lang['admin']['status'] = 'Status ';
$lang['admin']['stylesheet'] = 'Stilmall';
$lang['admin']['submit'] = 'Spara';
$lang['admin']['submitdescription'] = 'Spara &auml;ndringar';
$lang['admin']['tags'] = 'Taggar';
$lang['admin']['template'] = 'Mall';
$lang['admin']['templateexists'] = 'Mallnamn finns redan';
$lang['admin']['templatemanagement'] = 'Mallhantering';
$lang['admin']['title'] = 'Titel';
$lang['admin']['tools'] = 'Verktyg';
$lang['admin']['true'] = 'Sant';
$lang['admin']['setfalse'] = 'S&auml;tt som falsk';
$lang['admin']['type'] = 'Typ';
$lang['admin']['typenotvalid'] = 'Typen &auml;r inte giltig';
$lang['admin']['uninstall'] = 'Avinstallera';
$lang['admin']['uninstallconfirm'] = 'Vill du verkligen avinstallera den h&auml;r modulen? Namn:';
$lang['admin']['up'] = 'Upp';
$lang['admin']['upgrade'] = 'Uppgradera';
$lang['admin']['upgradeconfirm'] = 'Vill du verkligen uppgradera?';
$lang['admin']['uploadfile'] = 'Ladda upp fil';
$lang['admin']['url'] = 'URL ';
$lang['admin']['useadvancedcss'] = 'Anv&auml;nd avancerad CSS-hantering';
$lang['admin']['user'] = 'Anv&auml;ndare';
$lang['admin']['userdefinedtags'] = 'Anv&auml;ndardefinierade taggar';
$lang['admin']['usermanagement'] = 'Anv&auml;ndaradministration';
$lang['admin']['username'] = 'Anv&auml;ndarnamn';
$lang['admin']['usernameincorrect'] = 'Anv&auml;ndarnamn eller l&ouml;senord &auml;r fel';
$lang['admin']['userprefs'] = 'Anv&auml;ndarinst&auml;llningar';
$lang['admin']['usersassignedtogroup'] = 'Anv&auml;ndare tilldelad grupp %s';
$lang['admin']['usertagexists'] = 'En tagg med detta namn finns redan. V&auml;lj ett annat namn.';
$lang['admin']['usewysiwyg'] = 'Anv&auml;nd WYSIWYG-editor f&ouml;r inneh&aring;ll';
$lang['admin']['version'] = 'Version ';
$lang['admin']['view'] = 'Visa';
$lang['admin']['welcomemsg'] = 'V&auml;lkommen %s';
$lang['admin']['directoryabove'] = 'katalog &ouml;ver denna niv&aring;';
$lang['admin']['nodefault'] = 'Ingen standard vald';
$lang['admin']['blobexists'] = 'Namnet p&aring; Globalt Inneh&aring;llsblock &auml;r upptaget.';
$lang['admin']['blobmanagement'] = 'Globala Inneh&aring;llsblock';
$lang['admin']['errorinsertingblob'] = 'Fel intr&auml;ffade vid infogande av Globalt Inneh&aring;llsblock';
$lang['admin']['addhtmlblob'] = 'L&auml;gg till Globalt Inneh&aring;llsblock';
$lang['admin']['edithtmlblob'] = '&Auml;ndra Globalt Inneh&aring;llsblock';
$lang['admin']['edithtmlblobsuccess'] = 'Globalt Inneh&aring;llsblock uppdaterat';
$lang['admin']['tagtousegcb'] = 'Tagg som ska anv&auml;nda detta block';
$lang['admin']['gcb_wysiwyg'] = 'Aktivera WYSIWYG f&ouml;r Globala Inneh&aring;llsblock';
$lang['admin']['gcb_wysiwyg_help'] = 'Aktivera WYSIWYG-editorn f&ouml;r n&auml;r Globala Inneh&aring;llsblock redigeras';
$lang['admin']['filemanager'] = 'Filhantering';
$lang['admin']['imagemanager'] = 'Bildhantering';
$lang['admin']['encoding'] = 'Teckenkodning';
$lang['admin']['clearcache'] = 'Rensa cache';
$lang['admin']['clear'] = 'Rensa';
$lang['admin']['cachecleared'] = 'Cachen rensad';
$lang['admin']['apply'] = 'Verkst&auml;ll';
$lang['admin']['applydescription'] = 'Spara &auml;ndringar och forts&auml;tt redigera';
$lang['admin']['none'] = 'Ingen';
$lang['admin']['wysiwygtouse'] = 'V&auml;lj WYSIWYG-editor att anv&auml;nda';
$lang['admin']['syntaxhighlightertouse'] = 'V&auml;lj vilken syntaxmarkerare som ska anv&auml;ndas';
$lang['admin']['hasdependents'] = 'Har beroenden';
$lang['admin']['missingdependency'] = 'Saknat beroende';
$lang['admin']['minimumversion'] = 'L&auml;gsta version';
$lang['admin']['minimumversionrequired'] = 'L&auml;gsta CMSMS-version som kr&auml;vs';
$lang['admin']['maximumversion'] = 'H&ouml;gsta version';
$lang['admin']['maximumversionsupported'] = 'H&ouml;gsta version som st&ouml;ds';
$lang['admin']['depsformodule'] = 'Beroenden f&ouml;r modulen %s';
$lang['admin']['installed'] = 'Installerad';
$lang['admin']['author'] = 'F&ouml;rfattare';
$lang['admin']['changehistory'] = '&Auml;ndringshistoria';
$lang['admin']['moduleerrormessage'] = 'Felmeddelande f&ouml;r modulen %s';
$lang['admin']['moduleupgradeerror'] = 'Det blev ett fel n&auml;r modulen uppgraderades.';
$lang['admin']['moduleinstallmessage'] = 'Installeringsmeddelande f&ouml;r modul %s';
$lang['admin']['moduleuninstallmessage'] = 'Avinstalleringsmeddelande f&ouml;r modul %s';
$lang['admin']['admintheme'] = 'Administrationstema';
$lang['admin']['addstylesheet'] = 'L&auml;gg till stilmall';
$lang['admin']['editstylesheet'] = 'Redigera stilmall';
$lang['admin']['addcssassociation'] = 'L&auml;gg till CSS-l&auml;nk';
$lang['admin']['attachstylesheet'] = 'Koppla denna stilmall';
$lang['admin']['attachtemplate'] = 'Koppla till denna mall';
$lang['admin']['main'] = 'Start';
$lang['admin']['pages'] = 'Sidor';
$lang['admin']['page'] = 'Sida';
$lang['admin']['files'] = 'Filer';
$lang['admin']['layout'] = 'Utseende';
$lang['admin']['usersgroups'] = 'Anv&auml;ndare &amp; grupper';
$lang['admin']['extensions'] = 'Till&auml;gg';
$lang['admin']['preferences'] = 'Inst&auml;llningar';
$lang['admin']['admin'] = 'Webbplats-admin';
$lang['admin']['viewsite'] = 'Visa webbplats';
$lang['admin']['templatecss'] = 'Koppla mall till stilmall';
$lang['admin']['plugins'] = 'Taggar';
$lang['admin']['movecontent'] = 'Fytta sidor';
$lang['admin']['module'] = 'Modul';
$lang['admin']['usertags'] = 'Anv&auml;ndartaggar';
$lang['admin']['htmlblobs'] = 'Globala Inneh&aring;llsblock';
$lang['admin']['adminhome'] = 'Administration';
$lang['admin']['liststylesheets'] = 'Stilmallar';
$lang['admin']['preferencesdescription'] = 'H&auml;r anger du in inst&auml;llningar f&ouml;r hela webbplatsen.';
$lang['admin']['adminlogdescription'] = 'Visa en logg &ouml;ver vem som gjort vad i administationen.';
$lang['admin']['mainmenu'] = 'Huvudmeny';
$lang['admin']['users'] = 'Anv&auml;ndare';
$lang['admin']['usersdescription'] = 'H&auml;r administrerar du anv&auml;ndare.';
$lang['admin']['groups'] = 'Grupper';
$lang['admin']['groupsdescription'] = 'H&auml;r administrerar du grupper.';
$lang['admin']['groupassignments'] = 'Grupptilldelningar';
$lang['admin']['groupassignmentdescription'] = 'H&auml;r kan du tilldela anv&auml;ndare till grupper.';
$lang['admin']['groupperms'] = 'Gruppr&auml;ttigheter';
$lang['admin']['grouppermsdescription'] = 'Ange r&auml;ttigheter och &aring;tkomstniv&aring;er f&ouml;r grupper';
$lang['admin']['pagesdescription'] = 'H&auml;r l&auml;gger du till och redigerar sidor och annat inneh&aring;ll.';
$lang['admin']['htmlblobdescription'] = 'Globala Inneh&aring;llsblock &auml;r bitar av inneh&aring;ll som du kan placera p&aring; sidorna eller i mallar.';
$lang['admin']['templates'] = 'Mallar';
$lang['admin']['templatesdescription'] = 'H&auml;r l&auml;gger du till och redigerar mallar. Mallar best&auml;mmer utseendet p&aring; din webbplats.';
$lang['admin']['stylesheets'] = 'Stilmallar';
$lang['admin']['stylesheetsdescription'] = 'Stilmallshantering &auml;r ett avancerat s&auml;tt att hantera Cascading Stylesheets (CSS) separat fr&aring;n mallar.';
$lang['admin']['filemanagerdescription'] = 'Ladda upp och hantera filer.';
$lang['admin']['imagemanagerdescription'] = 'Ladda upp/&auml;ndra och ta bort bilder.';
$lang['admin']['moduledescription'] = 'Moduler &auml;r till&auml;gg som ut&ouml;kar CMS Made Simple med alla m&ouml;jliga anpassade funktioner.';
$lang['admin']['tagdescription'] = 'Taggar &auml;r sm&aring; funktioner som kan l&auml;ggas till p&aring; sidor eller i mallar.';
$lang['admin']['usertagdescription'] = 'Taggar f&ouml;r att utf&ouml;ra olika uppgifter som du kan skapa och &auml;ndra sj&auml;lv, direkt fr&aring;n din l&auml;sare.';
$lang['admin']['installdirwarning'] = '<em><strong>Varning:</strong></em> installationskatalog existerar fortfarande. Ta bort den helt.';
$lang['admin']['subitems'] = 'Underpunkter';
$lang['admin']['extensionsdescription'] = 'Moduler, taggar och annat skoj.';
$lang['admin']['usersgroupsdescription'] = 'Anv&auml;ndar- och grupprelaterade saker.';
$lang['admin']['layoutdescription'] = 'Alternativ f&ouml;r webbplatslayout.';
$lang['admin']['admindescription'] = 'Funktioner f&ouml;r webbplatsadministration.';
$lang['admin']['contentdescription'] = 'H&auml;r l&auml;gger vi till och redigerar inneh&aring;ll.';
$lang['admin']['enablecustom404'] = 'Aktivera anpassat 404-meddelande';
$lang['admin']['enablesitedown'] = 'Aktivera St&auml;ngt-meddelande f&ouml;r webbplatsen';
$lang['admin']['bookmarks'] = 'Genv&auml;gar';
$lang['admin']['user_created'] = 'Egna genv&auml;gar';
$lang['admin']['forums'] = 'Forum';
$lang['admin']['wiki'] = 'Wiki ';
$lang['admin']['irc'] = 'IRC ';
$lang['admin']['module_help'] = 'Modulhj&auml;lp';
$lang['admin']['managebookmarks'] = 'Hantera genv&auml;gar';
$lang['admin']['editbookmark'] = 'Redigera genv&auml;gar';
$lang['admin']['addbookmark'] = 'L&auml;gg till genv&auml;gar';
$lang['admin']['recentpages'] = 'Senaste sidorna';
$lang['admin']['groupname'] = 'Gruppnamn';
$lang['admin']['selectgroup'] = 'V&auml;lj grupp';
$lang['admin']['updateperm'] = 'Uppdatera r&auml;ttigheter';
$lang['admin']['admincallout'] = 'Administrationsgenv&auml;gar';
$lang['admin']['showbookmarks'] = 'Visa Admin-genv&auml;gar';
$lang['admin']['hide_help_links'] = 'D&ouml;lj hj&auml;lpl&auml;nkar';
$lang['admin']['hide_help_links_help'] = 'Bocka f&ouml;r, f&ouml;r att inte visa l&auml;nkarna till den gemensamma hj&auml;lpen och hj&auml;lp f&ouml;r moduler f&ouml;r resp. sida.';
$lang['admin']['showrecent'] = 'Visa nyligen anv&auml;nda sidor';
$lang['admin']['attachtotemplate'] = 'Koppla stilmall till mall';
$lang['admin']['attachstylesheets'] = 'Koppla stilmallar';
$lang['admin']['indent'] = 'Indrag i sidlistan f&ouml;r att g&ouml;ra hierarkin tydligare';
$lang['admin']['adminindent'] = 'Visning av inneh&aring;ll';
$lang['admin']['contract'] = 'F&auml;ll ihop sektion';
$lang['admin']['expand'] = 'Expandera sektion';
$lang['admin']['expandall'] = 'Expandera alla sektioner';
$lang['admin']['contractall'] = 'F&auml;ll ihop alla sektioner';
$lang['admin']['menu_bookmarks'] = '[+] ';
$lang['admin']['globalconfig'] = 'Globala inst&auml;llningar';
$lang['admin']['adminpaging'] = 'Antal sidor/inneh&aring;ll att visa per sida i sidlistan';
$lang['admin']['nopaging'] = 'Visa alla sidor';
$lang['admin']['myprefs'] = 'Mina Inst&auml;llningar';
$lang['admin']['myprefsdescription'] = 'H&auml;r anpassar du administrationspanelen s&aring; att den funkar som du vill.';
$lang['admin']['myaccount'] = 'Mitt konto';
$lang['admin']['myaccountdescription'] = 'H&auml;r kan du uppdatera dina personliga kontoinst&auml;llningar.';
$lang['admin']['adminprefs'] = 'Anv&auml;ndarinst&auml;llningar';
$lang['admin']['adminprefsdescription'] = 'H&auml;r st&auml;ller du in val f&ouml;r webbplatsadminstartion.';
$lang['admin']['managebookmarksdescription'] = 'H&auml;r hanterar du administrationsgenv&auml;gar.';
$lang['admin']['options'] = 'Inst&auml;llningar';
$lang['admin']['langparam'] = 'Parameter som anv&auml;nds f&ouml;r att specificera vilket spr&aring;k som ska anv&auml;ndas &quot;frontend&quot;, allts&aring; sj&auml;lva sidorna som bes&ouml;kare till din webbplats ser. Alla moduler st&ouml;djer inte eller beh&ouml;ver inte detta.';
$lang['admin']['parameters'] = 'Parametrar';
$lang['admin']['mediatype'] = 'Mediatyp';
$lang['admin']['mediatype_'] = 'Ingen inst&auml;lld : p&aring;verkar &ouml;verallt';
$lang['admin']['mediatype_all'] = 'all : Passar f&ouml;r alla apparater';
$lang['admin']['mediatype_aural'] = 'aural : Avsett f&ouml;r talsyntetisator';
$lang['admin']['mediatype_braille'] = 'braille : Avsett f&ouml;r blindskriftsapparater.';
$lang['admin']['mediatype_embossed'] = 'embossed : Avsett f&ouml;r paginerade blindskriftsskrivare.';
$lang['admin']['mediatype_handheld'] = 'handheld : Avsett f&ouml;r handdatorer';
$lang['admin']['mediatype_print'] = 'print : Avsett f&ouml;r vanliga utskrifter och f&ouml;r dokument som visas p&aring; sk&auml;rmen i f&ouml;rhandsgranskningsl&auml;ge.';
$lang['admin']['mediatype_projection'] = 'projection : Avsett f&ouml;r projicerade presentationer, t.ex. projektorer eller utskrift p&aring; genomskinlig overheadplast.';
$lang['admin']['mediatype_screen'] = 'screen : Avsett fr&auml;mst f&ouml;r f&auml;rgdatorsk&auml;rmar.';
$lang['admin']['mediatype_tty'] = 'tty : Avsett f&ouml;r media som anv&auml;nder ett rutn&auml;t med fast bredd f&ouml;r bokst&auml;ver, som teleprinter och terminaler.';
$lang['admin']['mediatype_tv'] = 'tv : Avsett f&ouml;r televisions-liknande apparater.';
$lang['admin']['assignmentchanged'] = 'Grupptilldelningar har uppdaterats.';
$lang['admin']['stylesheetexists'] = 'Stilmallar finns';
$lang['admin']['errorcopyingstylesheet'] = 'Fel vid kopierande av stilmall';
$lang['admin']['copystylesheet'] = 'Kopiera stilmall';
$lang['admin']['newstylesheetname'] = 'Nytt namn p&aring; stilmall';
$lang['admin']['target'] = 'M&aring;l';
$lang['admin']['xml'] = 'XML ';
$lang['admin']['xmlmodulerepository'] = 'URL f&ouml;r modullistans soap-server';
$lang['admin']['metadata'] = 'Metadata ';
$lang['admin']['globalmetadata'] = 'Globala metadata';
$lang['admin']['titleattribute'] = 'Titelattribut (title)';
$lang['admin']['tabindex'] = 'Tabb-index';
$lang['admin']['accesskey'] = 'Access-nyckel';
$lang['admin']['sitedownwarning'] = '<strong>Varning:</strong> Din webbsajt visar f&ouml;r n&auml;rvarande meddelandet &quot;Site Down for Maintenance&quot;. Ta bort filen %s f&ouml;r att &aring;tg&auml;rda detta.';
$lang['admin']['deletecontent'] = 'Radera inneh&aring;ll';
$lang['admin']['deletepages'] = 'Radera de h&auml;r sidorna?';
$lang['admin']['selectall'] = 'V&auml;lj alla';
$lang['admin']['selecteditems'] = 'med valda';
$lang['admin']['inactive'] = 'Inaktiv';
$lang['admin']['deletetemplates'] = 'Radera mallar';
$lang['admin']['templatestodelete'] = 'De h&auml;r mallarna kommer att raderas';
$lang['admin']['wontdeletetemplateinuse'] = 'De h&auml;r mallarna anv&auml;nds och kommer inte att raderas';
$lang['admin']['deletetemplate'] = 'Radera stilmallar';
$lang['admin']['stylesheetstodelete'] = 'De h&auml;r stilmallarna kommer att tas bort';
$lang['admin']['sitename'] = 'Webbplatsnamn';
$lang['admin']['siteadmin'] = 'Webbplatsadmin';
$lang['admin']['images'] = 'Bildhanterare';
$lang['admin']['blobs'] = 'Globala Inneh&aring;llsblock';
$lang['admin']['groupmembers'] = 'Grupptilldelningar';
$lang['admin']['troubleshooting'] = '(Fels&ouml;kning)';
$lang['admin']['event_desc_loginpost'] = 'Skickas efter att en anv&auml;ndare loggar in till administrationspanelen';
$lang['admin']['event_desc_logoutpost'] = 'Skickas efter att en anv&auml;ndare loggar ut fr&aring;n administrationspanelen';
$lang['admin']['event_desc_adduserpre'] = 'Skickas f&ouml;re en ny anv&auml;ndare skapas';
$lang['admin']['event_desc_adduserpost'] = 'Skickas efter en ny anv&auml;ndare har skapats';
$lang['admin']['event_desc_edituserpre'] = 'Skickas f&ouml;re redigeringar av en anv&auml;ndare har sparats';
$lang['admin']['event_desc_edituserpost'] = 'Skickas efter att redigeringar av en anv&auml;ndare har sparats';
$lang['admin']['event_desc_deleteuserpre'] = 'Skickas f&ouml;re en anv&auml;ndare tas bort fr&aring;n systemet';
$lang['admin']['event_desc_deleteuserpost'] = 'Skickas efter en anv&auml;ndare har tagits bort fr&aring;n systemet';
$lang['admin']['event_desc_addgrouppre'] = 'Skickas f&ouml;re en ny grupp skapas';
$lang['admin']['event_desc_addgrouppost'] = 'Skickas efter en ny grupp har skapats';
$lang['admin']['event_desc_changegroupassignpre'] = 'Skickas f&ouml;re grupp-tilldelningarna &auml;r sparade';
$lang['admin']['event_desc_changegroupassignpost'] = 'Skickas efter grupp-tilldelningarna &auml;r sparade';
$lang['admin']['event_desc_editgrouppre'] = 'Skickas f&ouml;re redigeringar av en grupp har sparats';
$lang['admin']['event_desc_editgrouppost'] = 'Skickas efter att redigeringar av en grupp har sparats';
$lang['admin']['event_desc_deletegrouppre'] = 'Skickas f&ouml;re en grupp tas bort fr&aring;n systemet';
$lang['admin']['event_desc_deletegrouppost'] = 'Skickas efter att en grupp har tagits bort fr&aring;n systemet';
$lang['admin']['event_desc_addstylesheetpre'] = 'Skickas f&ouml;re en ny stilmall skapas';
$lang['admin']['event_desc_addstylesheetpost'] = 'Skickas efter att en ny stilmall har skapats';
$lang['admin']['event_desc_editstylesheetpre'] = 'Skickas f&ouml;re redigeringar av en stilmall sparas';
$lang['admin']['event_desc_editstylesheetpost'] = 'Skickas efter att redigeringar av en stilmall har sparats';
$lang['admin']['event_desc_deletestylesheetpre'] = 'Skickas f&ouml;re en stilmall tas bort fr&aring;n systemet';
$lang['admin']['event_desc_deletestylesheetpost'] = 'Skickas efter att en stilmall har tagits bort fr&aring;n systemet';
$lang['admin']['event_desc_addtemplatepre'] = 'Skickas f&ouml;re en ny mall skapas';
$lang['admin']['event_desc_addtemplatepost'] = 'Skickas efter att en ny mall har skapats';
$lang['admin']['event_desc_edittemplatepre'] = 'Skickas f&ouml;re redigeringar av en mall sparas';
$lang['admin']['event_desc_edittemplatepost'] = 'Skickas efter att redigeringar av en mall har sparats';
$lang['admin']['event_desc_deletetemplatepre'] = 'Skickas f&ouml;re en mall tas bort fr&aring;n systemet';
$lang['admin']['event_desc_deletetemplatepost'] = 'Skickas efter att en mall har tagits bort fr&aring;n systemet';
$lang['admin']['event_desc_templateprecompile'] = 'Skickas f&ouml;re en mall skickas till smarty f&ouml;r behandlande';
$lang['admin']['event_desc_templatepostcompile'] = 'Skickas efter att en mall har behandlats av smarty';
$lang['admin']['event_desc_addglobalcontentpre'] = 'Skickas f&ouml;re ett nytt globalt inneh&aring;llsblock skapas';
$lang['admin']['event_desc_addglobalcontentpost'] = 'Skickas efter att ett nytt globalt inneh&aring;llsblock har skapats';
$lang['admin']['event_desc_editglobalcontentpre'] = 'Skickas f&ouml;re redigeringar av ett globalt inneh&aring;llsblock sparas';
$lang['admin']['event_desc_editglobalcontentpost'] = 'Skickas efter att redigeringar av ett globalt inneh&aring;llsblock har sparats';
$lang['admin']['event_desc_deleteglobalcontentpre'] = 'Skickas f&ouml;re ett globalt inneh&aring;llsblock tas bort fr&aring;n systemet';
$lang['admin']['event_desc_deleteglobalcontentpost'] = 'Skickas efter att ett globalt inneh&aring;llsblock har tagits bort fr&aring;n systemet';
$lang['admin']['event_desc_globalcontentprecompile'] = 'Skickas f&ouml;re ett globalt inneh&aring;llsblock skickas till smarty f&ouml;r behandlande';
$lang['admin']['event_desc_globalcontentpostcompile'] = 'Skickas efter att ett globalt inneh&aring;llsblock har behandlats av smarty';
$lang['admin']['event_desc_contenteditpre'] = 'Skickas f&ouml;re redigeringar av inneh&aring;ll sparas';
$lang['admin']['event_desc_contenteditpost'] = 'Skickas efter att redigeringar av inneh&aring;ll har sparats';
$lang['admin']['event_desc_contentdeletepre'] = 'Skickas f&ouml;re inneh&aring;ll tas bort fr&aring;n systemet';
$lang['admin']['event_desc_contentdeletepost'] = 'Skickas efter att inneh&aring;ll har tagits bort fr&aring;n systemet';
$lang['admin']['event_desc_contentstylesheet'] = 'Skickas f&ouml;re stilmallen skickas till webbl&auml;saren';
$lang['admin']['event_desc_contentprecompile'] = 'Skickas f&ouml;re inneh&aring;ll skickas till smarty f&ouml;r behandlande';
$lang['admin']['event_desc_contentpostcompile'] = 'Skickas efter att inneh&aring;ll har behandlats av smarty';
$lang['admin']['event_desc_contentpostrender'] = 'Skickas f&ouml;re inneh&aring;ll skickas till webbl&auml;saren';
$lang['admin']['event_desc_smartyprecompile'] = 'Skickas f&ouml;re n&aring;gonting skickas till smarty f&ouml;r behandlande';
$lang['admin']['event_desc_smartypostcompile'] = 'Skickas efter att n&aring;gonting har behandlats av smarty';
$lang['admin']['event_help_loginpost'] = '<p>Skickas efter att en anv&auml;ndare loggar in till administrationspanelen</p>
<h4>Parametrar</h4>
<ul>
<li>&#039;user&#039; - Referens till det ber&ouml;rda anv&auml;ndarobjektet.</li>
</ul>';
$lang['admin']['event_help_logoutpost'] = '<p>Skickas efter att en anv&auml;ndare loggar ut fr&aring;n administrationspanelen</p>
<h4>Parametrar</h4>
<ul>
<li>&#039;user&#039; - Referens till det ber&ouml;rda anv&auml;ndarobjektet.</li>
</ul>';
$lang['admin']['event_help_adduserpre'] = '<p>Skickas f&ouml;re en ny anv&auml;ndare skapas.</p>
<h4>Parametrar</h4>
<ul>
<li>&#039;user&#039; - Referens till det ber&ouml;rda anv&auml;ndarobjektet.</li>
</ul>';
$lang['admin']['event_help_adduserpost'] = '<p>Skickas efter att en ny anv&auml;ndare skapas.</p>
<h4>Parametrar</h4>
<ul>
<li>&#039;user&#039; - Referens till det ber&ouml;rda anv&auml;ndarobjektet.</li>
</ul>';
$lang['admin']['event_help_edituserpre'] = '<p>Skickas f&ouml;re redigering av en anv&auml;ndare har sparats.</p>
<h4>Parametrar</h4>
<ul>
<li>&#039;user&#039; - Referens till det ber&ouml;rda anv&auml;ndarobjektet.</li>
</ul>';
$lang['admin']['event_help_edituserpost'] = '<p>Skickas efter att redigering av en anv&auml;ndare har sparats.</p>
<h4>Parametrar</h4>
<ul>
<li>&#039;user&#039; - Referens till det ber&ouml;rda anv&auml;ndarobjektet.</li>
</ul>';
$lang['admin']['event_help_deleteuserpre'] = '<p>Skickas f&ouml;re en anv&auml;ndare har tagits bort fr&aring;n systemet.</p>
<h4>Parametrar</h4>
<ul>
<li>&#039;user&#039; - Referens till det ber&ouml;rda anv&auml;ndarobjektet.</li>
</ul>';
$lang['admin']['event_help_deleteuserpost'] = '<p>Skickas efter att en anv&auml;ndare har tagits bort fr&aring;n systemet.</p>
<h4>Parametrar</h4>
<ul>
<li>&#039;user&#039; - Referens till det ber&ouml;rda anv&auml;ndarobjektet.</li>
</ul>';
$lang['admin']['event_help_addgrouppre'] = '<p>Skickas f&ouml;re en ny grupp skapas.</p>
<h4>Parametrar</h4>
<ul>
<li>&#039;user&#039; - Referens till det ber&ouml;rda gruppobjektet.</li>
</ul>';
$lang['admin']['event_help_addgrouppost'] = '<p>Skickas efter att en ny grupp har skapats.</p>
<h4>Parametrar</h4>
<ul>
<li>&#039;user&#039; - Referens till det ber&ouml;rda gruppobjektet.</li>
</ul>';
$lang['admin']['event_help_changegroupassignpre'] = '<p>Skickas f&ouml;re grupp-tilldelningarna &auml;r sparade.</p>
<h4>Parametrar></h4>
<ul>
<li>&#039;group&#039; - Referens till gruppobjektet.</li>
<li>&#039;users&#039; - Lista p&aring; referenser till anv&auml;ndarobjekt tillh&ouml;rande gruppen.</li>
';
$lang['admin']['event_help_changegroupassignpost'] = '<p>Skickas efter grupp-tilldelningarna &auml;r sparade.</p>
<h4>Parametrar></h4>
<ul>
<li>&#039;group&#039; - Referens till det ber&ouml;rda gruppobjektet.</li>
<li>&#039;users&#039; - Lista p&aring; referenser till anv&auml;ndarobjekt tillh&ouml;rande gruppen.</li>
';
$lang['admin']['event_help_editgrouppre'] = '<p>Skickas f&ouml;re redigering av en grupp sparas.</p>
<h4>Parametrar</h4>
<ul>
<li>&#039;user&#039; - Referens till det ber&ouml;rda gruppobjektet.</li>
</ul>';
$lang['admin']['event_help_editgrouppost'] = '<p>Skickas efter att redigering av en grupp har sparats.</p>
<h4>Parametrar</h4>
<ul>
<li>&#039;user&#039; - Referens till det ber&ouml;rda gruppobjektet.</li>
</ul>';
$lang['admin']['event_help_deletegrouppre'] = '<p>Skickas f&ouml;re en grupp tas bort fr&aring;n systemet.</p>
<h4>Parametrar</h4>
<ul>
<li>&#039;user&#039; - Referens till det ber&ouml;rda gruppobjektet.</li>
</ul>';
$lang['admin']['event_help_deletegrouppost'] = '<p>Skickas efter att en grupp tas bort fr&aring;n systemet.</p>
<h4>Parametrar</h4>
<ul>
<li>&#039;user&#039; - Referens till det ber&ouml;rda gruppobjektet.</li>
</ul>';
$lang['admin']['event_help_addstylesheetpre'] = '<p>Skickas f&ouml;re en ny stilmall skapas.</p>
<h4>Parametrar</h4>
<ul>
<li>&#039;user&#039; - Referens till det ber&ouml;rda stilmallsobjektet.</li>
</ul>';
$lang['admin']['event_help_addstylesheetpost'] = '<p>Skickas efter att en ny stilmall har skapats.</p>
<h4>Parametrar</h4>
<ul>
<li>&#039;stylesheet&#039; - Referens till det ber&ouml;rda stilmallsobjektet.</li>
</ul>';
$lang['admin']['event_help_editstylesheetpre'] = '<p>Skickas f&ouml;re &auml;ndringar av en stilmall sparas.</p>
<h4>Parametrar</h4>
<ul>
<li>&#039;stylesheet&#039; - Referens till det ber&ouml;rda stilmallsobjektet.</li>
</ul>';
$lang['admin']['event_help_editstylesheetpost'] = '<p>Skickas efter &auml;ndringar av en stilmall har sparats.</p>
<h4>Parametrar</h4>
<ul>
<li>&#039;stylesheet&#039; - Referens till det ber&ouml;rda stilmallsobjektet.</li>
</ul>';
$lang['admin']['event_help_deletestylesheetpre'] = '<p>Skickas f&ouml;re en stilmall tas bort fr&aring;n systemet.</p>
<h4>Parametrar</h4>
<ul>
<li>&#039;stylesheet&#039; - Referens till det ber&ouml;rda stilmallsobjektet.</li>
</ul>';
$lang['admin']['event_help_deletestylesheetpost'] = '<p>Skickas efter att en stilmall har tagits bort fr&aring;n systemet.</p>
<h4>Parametrar</h4>
<ul>
<li>&#039;stylesheet&#039; - Referens till det ber&ouml;rda stilmallsobjektet.</li>
</ul>';
$lang['admin']['event_help_addtemplatepre'] = '<p>Skickas f&ouml;re en ny mall skapas.</p>
<h4>Parametrar</h4>
<ul>
<li>&#039;template&#039; - Referens till det ber&ouml;rda mallobjektet.</li>
</ul>';
$lang['admin']['event_help_addtemplatepost'] = '<p>Skickas efter att en ny mall har skapats.</p>
<h4>Parametrar</h4>
<ul>
<li>&#039;template&#039; - Referens till det ber&ouml;rda mallobjektet.</li>
</ul>';
$lang['admin']['event_help_edittemplatepre'] = '<p>Skickas f&ouml;re &auml;ndringar av en mall sparas.</p>
<h4>Parametrar</h4>
<ul>
<li>&#039;template&#039; - Referens till det ber&ouml;rda mallobjektet.</li>
</ul>';
$lang['admin']['event_help_edittemplatepost'] = '<p>Skickas efter att &auml;ndringar av en mall har sparats.</p>
<h4>Parametrar</h4>
<ul>
<li>&#039;template&#039; - Referens till det ber&ouml;rda mallobjektet.</li>
</ul>';
$lang['admin']['event_help_deletetemplatepre'] = '<p>Skickas f&ouml;re en mall tas bort fr&aring;n systemet.</p>
<h4>Parametrar</h4>
<ul>
<li>&#039;template&#039; - Referens till det ber&ouml;rda mallobjektet.</li>
</ul>';
$lang['admin']['event_help_deletetemplatepost'] = '<p>Skickas efter att en mall har tagits bort fr&aring;n systemet.</p>
<h4>Parametrar</h4>
<ul>
<li>&#039;template&#039; - Referens till det ber&ouml;rda mallobjektet.</li>
</ul>';
$lang['admin']['event_help_templateprecompile'] = '<p>Skickas f&ouml;re en mall skickas till smarty f&ouml;r bearbetning.</p>
<h4>Parametrar</h4>
<ul>
<li>&#039;template&#039; - Referens till det ber&ouml;rda mallobjektet.</li>
</ul>';
$lang['admin']['event_help_templatepostcompile'] = '<p>Skickas efter att en mall har bearbetats av smarty.</p>
<h4>Parametrar</h4>
<ul>
<li>&#039;template&#039; - Referens till det ber&ouml;rda mallobjektet.</li>
</ul>';
$lang['admin']['event_help_addglobalcontentpre'] = '<p>Skickas f&ouml;re ett nytt globalt inneh&aring;llsblock skapas.</p>
<h4>Parametrar</h4>
<ul>
<li>&#039;global_content&#039; - Referens till det ber&ouml;rda globala inneh&aring;llsobjektet.</li>
</ul>';
$lang['admin']['event_help_addglobalcontentpost'] = '<p>Skickas efter att ett nytt globalt inneh&aring;llsblock har skapats.</p>
<h4>Parametrar</h4>
<ul>
<li>&#039;global_content&#039; - Referens till det ber&ouml;rda globala inneh&aring;llsobjektet.</li>
</ul>';
$lang['admin']['event_help_editglobalcontentpre'] = '<p>Skickas f&ouml;re &auml;ndringar av ett globalt inneh&aring;llsblock sparas.</p>
<h4>Parametrar</h4>
<ul>
<li>&#039;global_content&#039; - Referens till det ber&ouml;rda globala inneh&aring;llsobjektet.</li>
</ul>';
$lang['admin']['event_help_editglobalcontentpost'] = '<p>Skickas efter att &auml;ndringar av ett globalt inneh&aring;llsblock har sparats.</p>
<h4>Parametrar</h4>
<ul>
<li>&#039;global_content&#039; - Referens till det ber&ouml;rda globala inneh&aring;llsobjektet.</li>
</ul>';
$lang['admin']['event_help_deleteglobalcontentpre'] = '<p>Skickas f&ouml;re ett globalt inneh&aring;llsblock tas bort fr&aring;n systemet.</p>
<h4>Parametrar</h4>
<ul>
<li>&#039;global_content&#039; - Referens till det ber&ouml;rda globala inneh&aring;llsobjektet.</li>
</ul>';
$lang['admin']['event_help_deleteglobalcontentpost'] = '<p>Skickas efter att ett globalt inneh&aring;llsblock har tagits bort fr&aring;n systemet.</p>
<h4>Parametrar</h4>
<ul>
<li>&#039;global_content&#039; - Referens till det ber&ouml;rda globala inneh&aring;llsobjektet.</li>
</ul>';
$lang['admin']['event_help_globalcontentprecompile'] = '<p>Skickas f&ouml;re ett globalt inneh&aring;llsblock skickas till smarty f&ouml;r bearbetning.</p>
<h4>Parametrar</h4>
<ul>
<li>&#039;global_content&#039; - Referens till det ber&ouml;rda globala inneh&aring;llsobjektet.</li>
</ul>';
$lang['admin']['event_help_globalcontentpostcompile'] = '<p>Skickas efter att ett globalt inneh&aring;llsblock har bearbetats av smarty.</p>
<h4>Parametrar</h4>
<ul>
<li>&#039;global_content&#039; - Referens till det ber&ouml;rda globala inneh&aring;llsobjektet.</li>
</ul>';
$lang['admin']['event_help_contenteditpre'] = '<p>Skickas f&ouml;re &auml;ndringar av inneh&aring;ll sparas.</p>
<h4>Parametrar</h4>
<ul>
<li>&#039;content&#039; - Referens till det ber&ouml;rda inneh&aring;llsobjektet.</li>
</ul>';
$lang['admin']['event_help_contenteditpost'] = '<p>Skickas efter att &auml;ndringar av inneh&aring;ll har sparats.</p>
<h4>Parametrar</h4>
<ul>
<li>&#039;content&#039; - Referens till det ber&ouml;rda inneh&aring;llsobjektet.</li>
</ul>';
$lang['admin']['event_help_contentdeletepre'] = '<p>Skickas f&ouml;re inneh&aring;ll tas bort fr&aring;n systemet.</p>
<h4>Parametrar</h4>
<ul>
<li>&#039;content&#039; - Referens till det ber&ouml;rda inneh&aring;llsobjektet.</li>
</ul>';
$lang['admin']['event_help_contentdeletepost'] = '<p>Skickas efter att &auml;ndringar av inneh&aring;ll har tagits bort fr&aring;n systemet.</p>
<h4>Parametrar</h4>
<ul>
<li>&#039;content&#039; - Referens till det ber&ouml;rda inneh&aring;llsobjektet.</li>
</ul>';
$lang['admin']['event_help_contentstylesheet'] = '<p>Skickas f&ouml;re mallen skickas till webbl&auml;saren.</p>
<h4>Parametrar</h4>
<ul>
<li>&#039;content&#039; - Referens till den ber&ouml;rda stilmallstexten.</li>
</ul>';
$lang['admin']['event_help_contentprecompile'] = '<p>Skickas f&ouml;re inneh&aring;ll skickas till smarty f&ouml;r bearbetning.</p>
<h4>Parametrar</h4>
<ul>
<li>&#039;content&#039; - Referens till den ber&ouml;rda inneh&aring;llstexten.</li>
</ul>';
$lang['admin']['event_help_contentpostcompile'] = '<p>Skickas efter att inneh&aring;ll har bearbetats av smarty.</p>
<h4>Parametrar</h4>
<ul>
<li>&#039;content&#039; - Referens till den ber&ouml;rda inneh&aring;llstexten.</li>
</ul>';
$lang['admin']['event_help_contentpostrender'] = '<p>Skickas f&ouml;re den sammansatta html-koden skickas till webbl&auml;saren.</p>
<h4>Parametrar</h4>
<ul>
<li>&#039;content&#039; - Referens till den ber&ouml;rda html-texten.</li>
</ul>';
$lang['admin']['event_help_smartyprecompile'] = '<p>Skickas f&ouml;re n&aring;got inneh&aring;ll som ska till smarty skickas f&ouml;r bearbetning.</p>
<h4>Parametrar</h4>
<ul>
<li>&#039;content&#039; - Referens den ber&ouml;rda texten.</li>
</ul>';
$lang['admin']['event_help_smartypostcompile'] = '<p>Skickas efter att n&aring;got inneh&aring;ll som ska till smarty har skickats f&ouml;r bearbetning.</p>
<h4>Parametrar</h4>
<ul>
<li>&#039;content&#039; - Referens den ber&ouml;rda texten.</li>
</ul>';
$lang['admin']['filterbymodule'] = 'Filtrera efter modul';
$lang['admin']['showall'] = 'Visa alla';
$lang['admin']['core'] = 'Core/k&auml;rnan';
$lang['admin']['defaultpagecontent'] = 'Standardinneh&aring;ll';
$lang['admin']['file_url'] = 'L&auml;nk till fil (ist&auml;llet f&ouml;r URL)';
$lang['admin']['no_file_url'] = 'Ingen (Anv&auml;nd URL ovan)';
$lang['admin']['defaultparentpage'] = 'Standard &ouml;verliggande kategori';
$lang['admin']['error_udt_name_whitespace'] = 'Fel: Anv&auml;ndardefinierade taggar kan inte ha mellanrum i namnet.';
$lang['admin']['warning_safe_mode'] = '<strong><em>Varning:</em></strong> PHP Safe mode &auml;r aktiverat.  Detta kommer skapa problem vid filuppladdning via webbl&auml;saren, inklusive bilder, teman och XML-modulpaket. Du rekommenderas ta kontakt med administrat&ouml;ren och se om denne kan avaktivera &#039;PHP Safe mode&#039;.';
$lang['admin']['test'] = 'Testa';
$lang['admin']['results'] = 'Resultat';
$lang['admin']['untested'] = 'Inte testad';
$lang['admin']['unknown'] = 'Ok&auml;nd';
$lang['admin']['download'] = 'Ladda ner';
$lang['admin']['frontendwysiwygtouse'] = 'WYSIWYG f&ouml;r framsida (frontend)';
$lang['admin']['all_groups'] = 'Alla grupper';
$lang['admin']['error_type'] = 'Typ av fel';
$lang['admin']['contenttype_errorpage'] = 'Felsida';
$lang['admin']['errorpagealreadyinuse'] = 'Felkoden anv&auml;nds redan';
$lang['admin']['404description'] = 'Sidan kunde inte hittas.';
$lang['admin']['usernotfound'] = 'Anv&auml;ndaren hittades inte.';
$lang['admin']['passwordchange'] = 'Ange det nya l&ouml;senordet';
$lang['admin']['recoveryemailsent'] = 'E-post skickad till epostadresserna som finns i databasen. Kontrollera din inkorg f&ouml;r vidare instruktioner.';
$lang['admin']['errorsendingemail'] = 'Ett problem att skicka e-post meddelandet. Kontakta administrat&ouml;ren.';
$lang['admin']['passwordchangedlogin'] = 'L&ouml;senordet &auml;r &auml;ndrat. Var god logga in med de nya uppgifterna.';
$lang['admin']['nopasswordforrecovery'] = 'Ingen epostadress &auml;r angiven f&ouml;r denna anv&auml;ndare. &Aring;terst&auml;llning av l&ouml;senord &auml;r inte m&ouml;jligt. V&auml;nligen kontakta administrat&ouml;rsansvarige.';
$lang['admin']['lostpw'] = 'Gl&ouml;mt ditt l&ouml;senord?';
$lang['admin']['lostpwemailsubject'] = '[%s] &Aring;terst&auml;llning av l&ouml;senord';
$lang['admin']['lostpwemail'] = 'You are recieving this e-mail because a request has been made to change the (%s) password associated with this user account (%s).  If you would like to reset the password for this account simply click on the link below or paste it into the url field on your favorite browser:
%s

If you feel this is incorrect or made in error, simply ignore the email and nothing will change.';
$lang['admin']['utma'] = '156861353.906052642.1267835734.1279745881.1279770949.135';
$lang['admin']['utmz'] = '156861353.1278791483.124.8.utmccn=(referral)|utmcsr=forum.cmsmadesimple.org|utmcct=/|utmcmd=referral';
$lang['admin']['qca'] = 'P0-1605183070-1267835733865';
$lang['admin']['utmc'] = '156861353';
$lang['admin']['utmb'] = '156861353.1.10.1279770949';
?>