<?php
$lang['admin']['session_use_cookies'] = 'Použiť Session Cokies';
$lang['admin']['errorgettingcontent'] = 'Nie s&uacute; inform&aacute;cie o &scaron;epcifikovanom obsahovom objekte ';
$lang['admin']['errordeletingcontent'] = 'Chyba pri odstraňovan&iacute; str&aacute;nky (pravdepodobne m&aacute; podstr&aacute;nky, alebo je označen&aacute; ako hlavn&aacute;)';
$lang['admin']['invalidemail'] = 'Vložen&aacute; e-mailov&aacute; adresa nie je spr&aacute;vna';
$lang['admin']['info_deletepages'] = 'Pozn&aacute;mka: z d&ocirc;vodu pr&iacute;stupov&yacute;ch pr&aacute;v,  niektor&eacute; z vybran&yacute;ch str&aacute;nok pre odstr&aacute;nenie nemusia byť zobrazen niž&scaron;ie.';
$lang['admin']['info_pagealias'] = 'Zadajte unik&aacute;tny n&aacute;zov pre alias str&aacute;nky.';
$lang['admin']['info_autoalias'] = 'Alias sa vygeneruje automaticky, v pr&iacute;pade, že ho nevypln&iacute;te sami.';
$lang['admin']['invalidparent'] = 'Mus&iacute;te vybrať nadraden&uacute; str&aacute;nku (kontatujte administr&aacute;tora, v pr&iacute;pade že t&uacute;to možnosť nevid&iacute;te)';
$lang['admin']['forgotpwprompt'] = 'Vložte svoje administr&aacute;torske prihlasovacie meno. E-mail bude odoslan&yacute; na va&scaron;u e-mailov&uacute; adresu z administr&aacute;cie.';
$lang['admin']['info_basic_attributes'] = 'Nastaven&iacute;m tohto poľa povol&iacute;te položky, ktor&eacute; bud&uacute; m&ocirc;cť spravovať použ&iacute;vatelia bez pr&iacute;stupov&yacute;ch pr&aacute;v (Manage All Content/Spr&aacute;va cel&eacute;ho obsahu).';
$lang['admin']['basic_attributes'] = 'Z&aacute;kladn&eacute; nastavenia';
$lang['admin']['no_permission'] = 'Nem&aacute;te pr&iacute;stupov&eacute; pr&aacute;va pre t&uacute;to akciu.';
$lang['admin']['bulk_success'] = 'Hromadn&aacute; zmena bola &uacute;spe&scaron;ne aktualizovan&aacute;.';
$lang['admin']['no_bulk_performed'] = 'Neboli zadan&eacute; žiadne hromadn&eacute; zmeny.';
$lang['admin']['info_preview_notice'] = 'Warning: This preview panel behaves much like a browser window allowing you to navigate away from the initially previewed page. However, if you do that, you may experience unexpected behaviour. If you navigate away from the initial display and return, you may not see the un-committed content until you make a change to the content in the main tab, and then reload this tab. When adding content, if you navigate away from this page, you will be unable to return, and must refresh this panel.';
$lang['admin']['sitedownexcludes'] = 'Vyl&uacute;čiť tieto adresy zo zoznamu str&aacute;nok mimo prev&aacute;dzky';
$lang['admin']['info_sitedownexcludes'] = 'Tento parameter obsahuje zoznam ip adries oddelen&yacute;ch čiarkami, ktore bud&uacute; vynechan&eacute; počas vypnutia str&aacute;nok. Nastavenie povol&iacute; administr&aacute;torom robiť zmeny počas nedostupnosti.<br/><br/>Adresy možu byť zad&aacute;van&eacute; v tak&yacute;chto form&aacute;toch:<br/>
1. xxx.xxx.xxx.xxx -- (priama IP adresa)<br/>
2. xxx.xxx.xxx.[yyy-zzz] -- (rozsha IP adries)<br/>
3. xxx.xxx.xxx.xxx/nn -- (nnn = number of bits, cisco style.  i.e:  192.168.0.100/24 = entire 192.168.0 class C subnet)';
$lang['admin']['setup'] = 'Roz&scaron;&iacute;ren&eacute; nastavenia';
$lang['admin']['handle_404'] = 'Vlastn&eacute; 404 nastavenia';
$lang['admin']['sitedown_settings'] = 'Nastavenia str&aacute;nky mimo prev&aacute;dzky';
$lang['admin']['general_settings'] = 'Hlavn&eacute; nastavenia';
$lang['admin']['help_function_page_attr'] = '<h3>What does this do?</h3>
<p>This tag can be used to return the value of the attributes of a certain page.</p>
<h3>How do I use it?</h3>
<p>Insert the tag into the template like: <code>{page_attr key=&quot;extra1&quot;}</code>.</p>
<h3>What parameters does it take?</h3>
<ul>
  <li><strong>key [required]</strong> The key to return the attribute of.</li>
</ul>';
$lang['admin']['forge'] = 'Forge ';
$lang['admin']['disable_wysiwyg'] = 'WYSIWYG editore nie je povolen&yacute; pre t&uacute;to str&aacute;nku';
$lang['admin']['help_function_page_image'] = '<h3>What does this do?</h3>
<p>This tag can be used to return the value of the image or thumbnail fields of a certain page.</p>
<h3>How do I use it?</h3>
<p>Insert the tag into the template like: <code>{page_image}</code>.</p>
<h3>What parameters does it take?</h3>
<ul>
  <li>thumbnail - Optionally display the value of the thumbnail property instead of the image property.</li>
</ul>';
$lang['admin']['pagelink_circular'] = 'A page link cannot list another page link as its destination7';
$lang['admin']['destinationnotfound'] = 'Vybran&eacute; str&aacute;nku neboli n&aacute;jden&eacute;';
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
$lang['admin']['sqlerror'] = 'Chyba SQL v %s';
$lang['admin']['image'] = 'Obr&aacute;zok';
$lang['admin']['thumbnail'] = 'N&aacute;hľad';
$lang['admin']['searchable'] = 'T&aacute;to str&aacute;nka je prehľad&aacute;vateľn&aacute;';
$lang['admin']['help_function_content_image'] = '<h3>What does this do?</h3>
<p>This plugin allows template designers to prompt users to select an image file when editing the content of a page. It behaves similarly to the content plugin, for additional content blocks.</p>
<h3>How do I use it?</h3>
<p>Just insert the tag into your page template like: <code>{content_image block=&#039;image1&#039;}</code>.</p>
<h3>What parameters does it take?</h3>
<ul>
  <li><strong>(required)</strong></em> block - The name for this additional content block.
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
$lang['admin']['error_udt_name_chars'] = 'N&aacute;zov pre UDT mus&iacute; zač&iacute;nať p&iacute;smenom alebo podtrhovn&iacute;kom, za ktor&yacute;mi m&ocirc;že nasledovať ľubovoľn&yacute; počet p&iacute;smen, č&iacute;slisc alebo podtrhovn&iacute;kov.';
$lang['admin']['errorupdatetemplateallpages'] = '&Scaron;abl&oacute;na nie je akt&iacute;vna';
$lang['admin']['hidefrommenu'] = 'Skryť z menu';
$lang['admin']['settemplate'] = 'Nastaviť &scaron;abl&oacute;nu';
$lang['admin']['text_settemplate'] = 'Nastaviť vybran&eacute; str&aacute;nky na in&uacute; &scaron;abl&oacute;nu';
$lang['admin']['cachable'] = 'Je možn&eacute; cachovať';
$lang['admin']['noncachable'] = 'Neke&scaron;ovateľn&aacute;';
$lang['admin']['copy_from'] = 'Kop&iacute;rovať z';
$lang['admin']['copy_to'] = 'Kop&iacute;rovať do';
$lang['admin']['copycontent'] = 'Skop&iacute;rovať obsahov&uacute; položku';
$lang['admin']['md5_function'] = 'fukncia md5';
$lang['admin']['tempnam_function'] = 'tempnam funkcia';
$lang['admin']['register_globals'] = 'direkt&iacute;va PHP register_globals';
$lang['admin']['output_buffering'] = 'direkt&iacute;va  PHP output_buffering';
$lang['admin']['disable_functions'] = 'disable_functions v PHP';
$lang['admin']['xml_function'] = 'Z&aacute;kladn&aacute; podpora XML (expat)';
$lang['admin']['magic_quotes_gpc'] = 'Direktiva Magic quotes pre Get/Post/Cookie';
$lang['admin']['magic_quotes_gpc_on'] = '&Uacute;vodzovky a sp&auml;tn&eacute; lom&iacute;tko su autmatick&yacute; escapeovan&eacute;. M&ocirc;žete mať probl&eacute;my  s uložen&iacute;m &scaron;abl&oacute;n';
$lang['admin']['magic_quotes_runtime'] = 'Magic quotes zapnut&eacute;';
$lang['admin']['magic_quotes_runtime_on'] = 'V&auml;č&scaron;ina funkci&iacute; ktor&eacute; vracaj&uacute; data bud&uacute; escapeovan&aacute;  sp&auml;tn&yacute;m lom&iacute;tkom.  M&ocirc;žete s t&yacute;m mať probl&eacute;m.';
$lang['admin']['file_get_contents'] = 'Test funkcie file_get_contents';
$lang['admin']['check_ini_set'] = 'Test funckie ini_set';
$lang['admin']['check_ini_set_off'] = 'Možete mať rozdiely vo funkčnosti bez t&yacute;chto vlastnost&iacute; . Test m&ocirc;že byť chybn&yacute;, pokiaľ  je zapnut&yacute; safe_mode';
$lang['admin']['file_uploads'] = 'Ńahratie s&uacute;boru';
$lang['admin']['test_remote_url'] = 'Testo vzdialenej URL';
$lang['admin']['test_remote_url_failed'] = 'Pravdepodobne nebudete m&ocirc;cť otvoriť s&uacute;bor na vzdialenom web serveri.';
$lang['admin']['test_allow_url_fopen_failed'] = 'Pokiaľ je vypnut&aacute; direkt&iacute;va allow url fopen, nebudete m&ocirc;cť pristupovať k objektom URL pomocou FTP alebo HTTP protokolu.';
$lang['admin']['connection_error'] = 'Odch&aacute;dzaj&uacute;ce http pripojenie nefunguje. Je možn&eacute;, že s&uacute; blokovan&eacute; firewallom alebo in&yacute; sp&ocirc;sobom. Spŕavca modulo a ďal&scaron;ie funkcionality nebud&uacute; dostupn&eacute;. ';
$lang['admin']['remote_connection_timeout'] = 'Časov&yacute; limit pre pripojenie vypr&scaron;alo!';
$lang['admin']['search_string_find'] = 'Pripojenie v poriadku!';
$lang['admin']['connection_failed'] = 'Pripojenie zlyhalo!';
$lang['admin']['remote_response_ok'] = 'Vzdialen&aacute; odpoveď: ok!';
$lang['admin']['remote_response_404'] = 'Vzdialen&aacute; odpoveď: nen&aacute;jden&aacute;!';
$lang['admin']['remote_response_error'] = 'Vzdialen&aacute; odpoveď: s chybou!';
$lang['admin']['notifications_to_handle'] = 'M&aacute;te <b>%d</b> neo&scaron;etren&yacute;ch ozn&aacute;men&iacute;';
$lang['admin']['notification_to_handle'] = 'M&aacute;te <b>%d</b> o&scaron;etren&yacute;ch ozn&aacute;men&iacute;';
$lang['admin']['notifications'] = 'Ozn&aacute;menia';
$lang['admin']['dashboard'] = 'Zobraziť dashboard ';
$lang['admin']['ignorenotificationsfrommodules'] = 'Ignorovať ozn&aacute;menia z t&yacute;chto modulov';
$lang['admin']['admin_enablenotifications'] = 'Povoliť  zobrazovanie ozn&aacute;men&iacute; už&iacute;vateľom <br/><em>(ozn&aacute;menia bud&uacute; zobrazovan&eacute; na v&scaron;etk&yacute;ch str&aacute;nkach admin časti)</em>';
$lang['admin']['enablenotifications'] = 'Povoliť ozn&aacute;menia už&iacute;vateľovi v administr&aacute;cii';
$lang['admin']['test_check_open_basedir_failed'] = 'S&uacute; nastaven&eacute; obmedzenie Open basedir. Niektor&eacute; vybran&eacute; funkcionality nemusia fungovať.';
$lang['admin']['config_writable'] = 'config.php zapisovateľny. Bezpečnej&scaron;ie bude, ak mu nastav&iacute;te pr&aacute;va iba na č&iacute;tanie';
$lang['admin']['caution'] = 'Opatrne';
$lang['admin']['create_dir_and_file'] = 'Kontrolujem, či m&ocirc;že server vytv&aacute;rať adres&aacute;ra a s&uacute;bory v jeho vytvoren&yacute;ch adres&aacute;roch.';
$lang['admin']['os_session_save_path'] = 'Bez kontroly, pretože OS path';
$lang['admin']['unlimited'] = 'Neobmedzen&yacute;';
$lang['admin']['open_basedir'] = 'PHP open Basedir';
$lang['admin']['open_basedir_active'] = 'Bez kontroly, pretože je open basedir akt&iacute;vny';
$lang['admin']['invalid'] = 'Neplatn&yacute;';
$lang['admin']['checksum_passed'] = 'V&Scaron;etky z&aacute;znamy kontroln&yacute;ch s&uacute;čtov v nahratom s&uacute;bore';
$lang['admin']['error_retrieving_file_list'] = 'Chyba pri nač&iacute;tan&iacute; zoznamu s&uacute;borov';
$lang['admin']['files_checksum_failed'] = 'S&uacute;bory neboli skontrolovan&eacute;';
$lang['admin']['failure'] = 'Zlyhanie';
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
$lang['admin']['page_metadata'] = '&Scaron;pecifick&eacute; metadata str&aacute;nky';
$lang['admin']['pagedata_codeblock'] = 'Smarty d&aacute;ta alebo logika &scaron;pecifick&aacute; pre t&uacute;to str&aacute;nku';
$lang['admin']['error_uploadproblem'] = 'Chyba pri nahr&aacute;van&iacute; s&uacute;bora';
$lang['admin']['error_nofileuploaded'] = 'Žiadny s&uacute;bor nebol nahrat&yacute;';
$lang['admin']['files_failed'] = 'S&uacute;bory sa nepodarilo skontrolovať pomocou s&uacute;čtou (md5sum)';
$lang['admin']['files_not_found'] = 'S&uacute;bory nen&aacute;jden&eacute;';
$lang['admin']['info_generate_cksum_file'] = 'T&aacute;to funkcia V&aacute;m vygeneruje s&uacute;bor kontroln&yacute;ch s&uacute;čtov pre pr&iacute;padn&uacute; neskor&scaron;iu kontrolu.  Doporučujeme generovať pri v&auml;č&scaron;&iacute;ch zmen&aacute;ch, alebo upgradoch syst&eacute;mu.';
$lang['admin']['info_validation'] = 'T&aacute;to funkcia porovn&aacute; kontroln&eacute; s&uacute;čty (tzv. checksums) z nahrat&eacute; s&uacute;bora s kontroln&yacute;mi s&uacute;čtami Va&scaron;ej s&uacute;časnej in&scaron;tal&aacute;cie CMS. T&aacute;to funkčnosť V&aacute;m može pom&ocirc;cť pri nahr&aacute;t&iacute; nekompletn&yacute;ch/po&scaron;koden&yacute;ch s&uacute;borov CMS, alebo pri hacknut&iacute; CMS, v pr&iacute;pade, že bud&uacute; prep&iacute;sane niektor&eacute; so s&uacute;borov. S&uacute;bory kontroln&yacute;ch s&uacute;čtov (tzv. checksum) s&uacute; podporovan&eacute; od verzie CMS Made Simple 1.4.';
$lang['admin']['download_cksum_file'] = 'Sťuahn&uacute;ť s&uacute;bor kontroln&yacute;ch s&uacute;čtov (tzv. Checksum File)';
$lang['admin']['perform_validation'] = 'Spustiť overenie';
$lang['admin']['upload_cksum_file'] = 'Nahr&aacute;ť s&uacute;bor kontroln&yacute;ch s&uacute;čtov (tzc. Checksum File)';
$lang['admin']['checksumdescription'] = 'Overenie integritiy s&uacute;borov CMS oproti zn&aacute;memu kontroln&eacute;mu s&uacute;čtu';
$lang['admin']['system_verification'] = 'Overenie CMS syst&eacute;mu';
$lang['admin']['extra1'] = 'Extra položka 1';
$lang['admin']['extra2'] = 'Extra položka 3';
$lang['admin']['extra3'] = 'Extra položka 3';
$lang['admin']['start_upgrade_process'] = 'Začať proces aktualiz&aacute;cie';
$lang['admin']['warning_upgrade'] = '<em><strong>Varovanie:</strong></em> CMSMS je potrebn&eacute; aktualizovať.';
$lang['admin']['warning_upgrade_info1'] = 'Momen&aacute;lne bež&iacute;te na starej verzii sch&eacute;my  %s. Potrebujete aktualizovať na verziu %s';
$lang['admin']['warning_upgrade_info2'] = 'Pros&iacute;m, kliknite na nasleduj&uacute;ci odkaz: %s.';
$lang['admin']['warning_mail_settings'] = 'Va&scaron;e nastavenia pre e-maily neboli nakonfigurovan&eacute;, čo m&ocirc;že sp&ocirc;sobiť nefunkčnosť posielať e-mailov&eacute; spr&aacute;vy cet web.  Konfigurovať e-maily m&ocirc;žete v <a href="moduleinterface.php?module=CMSMailer">Extensions >> CMSMailer</a>.';
$lang['admin']['view_page'] = 'Pozri str&aacute;nku v novom okne';
$lang['admin']['off'] = 'Vypnut&eacute;';
$lang['admin']['on'] = 'Zapnut&eacute;';
$lang['admin']['invalid_test'] = 'Chybn&aacute; hodnota testovacieho parametra!';
$lang['admin']['copy_paste_forum'] = 'Zobraziť textov&yacute; report <em>(vhodn&eacute; pre skop&iacute;rovanie do f&oacute;ra v pr&iacute;pade rie&scaron;enia probl&eacute;mu)</em>';
$lang['admin']['permission_information'] = 'Pr&iacute;stupov&eacute; inform&aacute;cie';
$lang['admin']['server_os'] = 'Operačn&yacute; syst&eacute;m servera';
$lang['admin']['server_api'] = 'API Server';
$lang['admin']['server_software'] = 'Softv&eacute;r servera';
$lang['admin']['server_information'] = 'Inform&aacute;cie o serveri';
$lang['admin']['session_save_path'] = 'Cesta ukladania rel&aacute;cii';
$lang['admin']['max_execution_time'] = 'Maxim&aacute;lny čas spustenia';
$lang['admin']['gd_version'] = 'verzia GD';
$lang['admin']['upload_max_filesize'] = 'Maxim&aacute;lna veľkosť uploadu';
$lang['admin']['post_max_size'] = 'Maxim&aacute;lna veľkosť posielania';
$lang['admin']['memory_limit'] = 'Pam&auml;ťov&yacute; limit pre PHP';
$lang['admin']['server_db_type'] = 'Serverov&aacute; datab&aacute;za';
$lang['admin']['server_db_version'] = 'Verzia serverovej datab&aacute;zy';
$lang['admin']['phpversion'] = 'S&uacute;časn&aacute; verzia PHP';
$lang['admin']['safe_mode'] = 'PHP bezpečn&yacute; m&oacute;d';
$lang['admin']['php_information'] = 'PHP inform&aacute;cie';
$lang['admin']['cms_install_information'] = 'In&scaron;talačn&eacute; inform&aacute;cie CMS';
$lang['admin']['cms_version'] = 'Verzia CMS';
$lang['admin']['installed_modules'] = 'Nain&scaron;talovan&eacute; moduly';
$lang['admin']['config_information'] = 'Konfiguračn&eacute; inform&aacute;cie';
$lang['admin']['systeminfo_copy_paste'] = 'Skop&iacute;rujte a vložte tento označen&yacute; text do v&aacute;&scaron;ho pr&iacute;spevku do f&oacute;ra';
$lang['admin']['help_systeminformation'] = 'Inform&aacute;cia zobrazen&aacute; niž&scaron;ie je zozbieran&aacute; z viacer&yacute;ch zdrojov a zosumarizovan&aacute; tu, aby sa ľah&scaron;ie hľadali inform&aacute;cie potrebn&eacute; pri diagnostike probl&eacute;mu či požiadavke o pomoc pri in&scaron;tal&aacute;cii v&aacute;&scaron;ho CMS Made Simple.';
$lang['admin']['systeminfo'] = 'Syst&eacute;mov&eacute; inform&aacute;cie';
$lang['admin']['systeminfodescription'] = 'Zobraz&iacute; r&ocirc;zne inform&aacute;cie o va&scaron;om syst&eacute;me, ktor&eacute; m&ocirc;žu byť užitočn&eacute; pri diagnostike probl&eacute;mov';
$lang['admin']['welcome_user'] = 'Vitajte';
$lang['admin']['itsbeensincelogin'] = 'Posledn&eacute; prihl&aacute;senie pred %s';
$lang['admin']['days'] = 'dni';
$lang['admin']['day'] = 'deň';
$lang['admin']['hours'] = 'hodiny';
$lang['admin']['hour'] = 'hodina';
$lang['admin']['minutes'] = 'min&uacute;ty';
$lang['admin']['minute'] = 'min&uacute;ta';
$lang['admin']['help_css_max_age'] = 'Tento parameter by mal byť nastaven&yacute; na relat&iacute;vne vysok&uacute; hodnotu pre statick&eacute; str&aacute;nky a na nulu pri v&yacute;voji';
$lang['admin']['css_max_age'] = 'Maxim&aacute;lny čas (v sekund&aacute;ch) počas ktor&eacute;ho m&ocirc;žu byť &scaron;t&yacute;ly uchovan&eacute; v pam&auml;ti prehliadača';
$lang['admin']['error'] = 'Chyba';
$lang['admin']['clear_version_check_cache'] = 'Pri odoslan&iacute; vyčisti v&scaron;etky uložen&eacute; inform&aacute;cie o kontrole verzie';
$lang['admin']['new_version_available'] = '<em>Upozornenie:</em> Je dostupn&aacute; nov&aacute; verzia CMS Made Simple. Pros&iacute;m, upozornite svojho administr&aacute;tora.';
$lang['admin']['info_urlcheckversion'] = 'Ak tento odkaz je slovo &quot;žiadne&quot;, nebud&uacute; sa vykon&aacute;vať žiadne kontroly.<br/>Pr&aacute;zdny reťazec sp&ocirc;sob&iacute; použitie predvolenej adresy.';
$lang['admin']['urlcheckversion'] = 'Skontrolujte dostupnosť novej verzie CMS použit&iacute;m tohto odkazu';
$lang['admin']['master_admintheme'] = 'Prednastaven&eacute; t&eacute;ma administr&aacute;cie (pre prihlasovaciu str&aacute;nku a nov&yacute;ch už&iacute;vateľov)';
$lang['admin']['contenttype_separator'] = 'Oddeľovač';
$lang['admin']['contenttype_sectionheader'] = 'Hlavička sekcie';
$lang['admin']['contenttype_link'] = 'Extern&yacute; odkaz';
$lang['admin']['contenttype_content'] = 'Obsah';
$lang['admin']['contenttype_pagelink'] = 'Intern&eacute; odkazy str&aacute;nok';
$lang['admin']['nogcbwysiwyg'] = 'Vypn&uacute;ť WYSIWYG editor pre HTML bloky';
$lang['admin']['destination_page'] = 'Cieľov&aacute; str&aacute;nka';
$lang['admin']['additional_params'] = 'Ďal&scaron;ie parametre';
$lang['admin']['help_function_current_date'] = '	<h3>Čo to rob&iacute;?</h3>
	<p>Tlač&iacute; aktu&aacute;lny d&aacute;tum a čas. Ak nie je zadan&yacute; form&aacute;t, použije sa predvolen&yacute; podobn&yacute; &#039;Jan 01, 2004&#039;.</p>
	<h3>Ako sa to použ&iacute;va?</h3>
	<p>Iba vložte značku do v&aacute;&scaron;ej predlohy/str&aacute;nky ako napr.: <code>{current_date format=&quot;%A %d-%b-%y %T %Z&quot;}</code></p>
	<h3>Ak&eacute; parametre sa m&ocirc;žu použiť?</h3>
	<ul>
		<li><em>(voliteľn&yacute;)</em>format - form&aacute;t d&aacute;tumu/času použit&iacute;m parametrov z php funkcie strftime. Pozri <a href="http://php.net/strftime" target="_blank">tento link</a> na zoznam parametrov a inform&aacute;cie.</li>
		<li><em>(voliteľn&yacute;)</em>ucword - Ak je pravdiv&yacute;, vr&aacute;ti každ&eacute; slovo s prv&yacute;m p&iacute;smenom veľk&yacute;m. </li>
	</ul>
	</p>';
$lang['admin']['help_function_valid_xhtml'] = '<h3>Čo to rob&iacute;?</h3>
<p>Returns a link to the w3c HTML validator.</p>
<h3>Ako sa to použ&iacute;va?</h3>
<p>Just insert the tag into your template/page like: <code>{valid_xhtml}</code></p>
<h3>Ak&eacute; parametre sa m&ocirc;žu použiť?</h3>
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
$lang['admin']['help_function_valid_css'] = '<h3>Čo to rob&iacute;?</h3>
<p>Returns a link to the w3c CSS validator.</p>
<h3>Ako sa to použ&iacute;va?</h3>
<p>Just insert the tag into your template/page like: <code>{valid_css}</code></p>
<h3>Ak&eacute; parametre sa m&ocirc;žu použiť?</h3>
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
$lang['admin']['help_function_title'] = '	<h3>Čo to rob&iacute;?</h3>
	<p>Vyp&iacute;&scaron;e nadpis str&aacute;nky.</p>
	<h3>Ako sa to použ&iacute;va?</h3>
	<p>Vklad&aacute; sa do &scaron;abl&oacute;ny značka <code>{title}</code></p>
	<h3>Ak&eacute; parametre sa m&ocirc;žu použiť?</h3>
	<p><em>(optional)</em> assign (string) - prirad&iacute; do premennej s t&yacute;mto n&aacute;zvom.</p>';
$lang['admin']['help_function_stylesheet'] = '	<h3>Čo to rob&iacute;?</h3>
	<p>Gets stylesheet information from the system.  By default, it grabs all of the stylesheets attached to the current template.</p>
	<h3>Ako sa to použ&iacute;va?</h3>
	<p>Vložen&iacute;m značky do hlavičky str&aacute;nok: <code>{stylesheet}</code></p>
	<h3>Ak&eacute; parametre sa m&ocirc;žu použiť?</h3>
	<ul>
		<li><em>(voliteľn&eacute;)</em>name - zobraz&iacute; vybran&yacute; &scaron;t&yacute;l, v pr&iacute;pade, že sa tento parameter nezad&aacute;, generuju sa &scaron;t&yacute;ly priraden&eacute; k jednotliv&yacute;m &scaron;abl&oacute;nam</li>
		<li><em>(voliteľn&eacute;)</em>media - ak je definovan&yacute; parameter name, m&ocirc;žete vygenerovan&eacute;mu &scaron;tylu zadať aj typ m&eacute;dia</li>
  <li><em>(voliteln&eacute;)</em>templateid - tento parameter zobraz&iacute; &scaron;t&yacute;ly, priraden&eacute; k vybranej &scaron;abl&oacute;ne</li>

	</ul>
	</p>';
$lang['admin']['help_function_stopexpandcollapse'] = '	<h3>Čo to rob&iacute;?</h3>
	<p>Enables content to be expandable and collapsable. Like the following:<br />
	<a href="#expand1" onClick="expandcontent(&#039;expand1&#039;)" style="cursor:hand; cursor:pointer">Click here for more info</a><span id=&quot;expand1&quot; class=&quot;expand&quot;><a name="help"></a> - Here is all the info you will ever need...</a></span></p>

	<h3>Ako sa to použ&iacute;va?</h3>
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

	<h3>Ak&eacute; parametre sa m&ocirc;žu použiť?</h3>
	<p>
	<i>startExpandCollapse takes the following parameters</i><br />
	&nbsp; &nbsp;id - A unique id for the expand/collapse section.<br />
	&nbsp; &nbsp;title - The text that will be displayed to expand/collapse the content.<br />
	<i>stopExpandCollapse takes no parameters</i><br />
	</p>';
$lang['admin']['help_function_startexpandcollapse'] = '	<h3>Čo to rob&iacute;?</h3>
	<p>Enables content to be expandable and collapsable. Like the following:<br />
	<a href="#expand1" onClick="expandcontent(&#039;expand1&#039;)" style="cursor:hand; cursor:pointer">Click here for more info</a><span id=&quot;expand1&quot; class=&quot;expand&quot;><a name="help"></a> - Here is all the info you will ever need...</a></span></p>

	<h3>Ako sa to použ&iacute;va?</h3>
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

	<h3>Ak&eacute; parametre sa m&ocirc;žu použiť?</h3>
	<p>
	<i>startExpandCollapse takes the following parameters</i><br />
	&nbsp; &nbsp;id - A unique id for the expand/collapse section.<br />
	&nbsp; &nbsp;title - The text that will be displayed to expand/collapse the content.<br />
	<i>stopExpandCollapse takes no parameters</i><br />
	</p>';
$lang['admin']['help_function_sitemap'] = '    <h3>Notice</h3>
    <p>This plugin is deprecated.  Users should now see the <code>{site_mapper}</code> plugin.</p>
    <h3>Čo to rob&iacute;?</h3>
    <p>Prints out a sitemap.</p>
    <h3>Ako sa to použ&iacute;va?</h3>
    <p>Just insert the tag into your template/page like: <code>{sitemap}</code></p>
    <h3>Ak&eacute; parametre sa m&ocirc;žu použiť?</h3>
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
$lang['admin']['help_function_adsense'] = '	<h3>Čo to rob&iacute;?</h3>
	<p>Google adsense is a popular advertising program for websites.  This tag will take the basic parameters that would be provided by the adsense program and puts them in a easy to use tag that makes your templates look much cleaner.  See <a href="http://www.google.com/adsense" target="_blank">here</a> for more details on adsense.</p>
	<h3>Ako sa to použ&iacute;va?</h3>
	<p>First, sign up for a google adsense account and get the parameters for your ad.  Then just use the tag in your page/template like so: <code>{adsense ad_client=&quot;pub-random#&quot; ad_width=&quot;120&quot; ad_height=&quot;600&quot; ad_format=&quot;120x600_as&quot;}</code>
	<h3>Ak&eacute; parametre sa m&ocirc;žu použiť?</h3>
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
$lang['admin']['help_function_sitename'] = '        <h3>Čo to rob&iacute;?</h3>
        <p>Shows the name of the site.  This is defined during install and can bbe modified in the Global Settings section of the admin panel.</p>
        <h3>Ako sa to použ&iacute;va?</h3>
        <p>Just insert the tag into your template/page like: <code>{sitename}</code></p>
        <h3>Ak&eacute; parametre sa m&ocirc;žu použiť?</h3>
	<p><em>(optional)</em> assign (string) - Assign the results to a smarty variable with that name.</p>';
$lang['admin']['help_function_search'] = '	<h3>Čo to rob&iacute;?</h3>
	<p>This is actually just a wrapper tag for the <a href="listmodules.php?action=showmodulehelp&amp;module=Search">Search module</a> to make the tag syntax easier. 
	Instead of having to use <code>{cms_module module=&#039;Search&#039;}</code> you can now just use <code>{search}</code> to insert the module in a template.
	</p>
	<h3>Ako sa to použ&iacute;va?</h3>
	<p>Just put <code>{search}</code> in a template where you want the search input box to appear. For help about the Search module, please refer to the <a href="listmodules.php?action=showmodulehelp&amp;module=Search">Search module help</a>.';
$lang['admin']['help_function_root_url'] = '	<h3>Čo to rob&iacute;?</h3>
	<p>Prints the root url location for the site.</p>
	<h3>Ako sa to použ&iacute;va?</h3>
	<p>Just insert the tag into your template/page like: <code>{root_url}</code></p>
	<h3>Ak&eacute; parametre sa m&ocirc;žu použiť?</h3>
	<p>None at this time.</p>';
$lang['admin']['help_function_repeat'] = '  <h3>Čo to rob&iacute;?</h3>
  <p>Repeats a specified sequence of characters, a specified number of times</p>
  <h3>Ako sa to použ&iacute;va?</h3>
  <p>Insert a tag similar to the following into your template/page, like this: <code>{repeat string=&#039;repeat this &#039; times=&#039;3&#039;}</code>
  <h3>Ak&eacute; parametre sa m&ocirc;žu použiť?</h3>
  <ul>
  <li>string=&#039;text&#039; - The string to repeat</li>
  <li>times=&#039;num&#039; - The number of times to repeat it.</li>
  </ul>';
$lang['admin']['help_function_recently_updated'] = '	<h3>Čo to rob&iacute;?</h3>
	<p>Outputs a list of recently updated pages.</p>
	<h3>Ako sa to použ&iacute;va?</h3>
	<p>Just insert the tag into your template/page like: <code>{recently_updated}</code></p>
	<h3>Ak&eacute; parametre sa m&ocirc;žu použiť?</h3>
	<ul>
											 <li><p><em>(optional)</em> number=&#039;10&#039; - Number of updated pages to show.</p><p>Example: <pre>{recently_updated number=&#039;15&#039;}</pre></p></li>
											 	<li><p><em>(optional)</em> leadin=&#039;Last changed&#039; - Text to show left of the modified date.</p><p>Example: <pre>{recently_updated leadin=&#039;Last Changed&#039;}</pre></p></li>
											 	<li><p><em>(optional)</em> showtitle=&#039;true&#039; - Shows the titleattribute if it exists as well (true|false).</p><p>Example: <pre>{recently_updated showtitle=&#039;true&#039;}</pre></p></li>											 	
											 	<li><p><em>(optional)</em> css_class=&#039;some_name&#039; - Warp a div tag with this class around the list.</p><p>Example: <pre>{recently_updated css_class=&#039;some_name&#039;}</pre></p></li>											 	
											 		<li><p><em>(optional)</em> dateformat=&#039;d.m.y h:m&#039; - default is d.m.y h:m , use the format you whish (php -date- format)</p><p>Example: <pre>{recently_updated dateformat=&#039;D M j G:i:s T Y&#039;}</pre></p></li>											 	
	</ul>
	<p>or combined:</p>
	<pre>{recently_updated number=&#039;15&#039; showtitle=&#039;false&#039; leadin=&#039;Last Change: &#039; css_class=&#039;my_changes&#039; dateformat=&#039;D M j G:i:s T Y&#039;}</pre>';
$lang['admin']['help_function_print'] = '	<h3>Čo to rob&iacute;?</h3>
	<p>This is actually just a wrapper tag for the <a href="listmodules.php?action=showmodulehelp&amp;module=Printing">Printing module</a> to make the tag syntax easier. 
	Instead of having to use <code>{cms_module module=&#039;Printing&#039;}</code> you can now just use <code>{print}</code> to insert the module on pages and templates.
	</p>
	<h3>Ako sa to použ&iacute;va?</h3>
	<p>Just put <code>{print}</code> on a page or in a template. For help about the Printing module, what parameters it takes etc., please refer to the <a href="listmodules.php?action=showmodulehelp&amp;module=Printing">Printing module help</a>.';
$lang['admin']['help_function_oldprint'] = '	<h3>Čo to rob&iacute;?</h3>
	<p>Creates a link to only the content of the page.</p>
	<h3>Ako sa to použ&iacute;va?</h3>
	<p>Just insert the tag into your template/page like: <code>{oldprint}</code><br></p>
        <h3>Ak&eacute; parametre sa m&ocirc;žu použiť?</h3>
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
$lang['admin']['login_info_title'] = 'Inform&aacute;cie';
$lang['admin']['login_info'] = 'Od tohto bodu berte do &uacute;vahy nasleduj&uacute;ce parametre';
$lang['admin']['login_info_params'] = '<ol> 
  <li>Povolen&eacute; cookies v prehliadači</li> 
  <li>Povolen&yacute; javascript v prehliadači</li> 
  <li>Povolen&eacute; vyskakovacie okn&aacute; (popup) pre adresu:</li> 
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
$lang['admin']['help_function_redirect_url'] = '<h3>Čo to dok&aacute;že?</h3>
  <p>Tento plugin povol&iacute; presmerovanie na &scaron;pecifick&uacute; URL.</p>
<h3>Ako sa plugin použ&iacute;va?</h3>
<p>Vložte nasledovn&uacute; značku do va&scaron;ej str&aacute;nky alebo &scaron;abl&oacute;ny: <code>{redirect_url urle=&#039;www.cmsmadesimple.org&#039;}</code></p>';
$lang['admin']['help_function_redirect_page'] = '<h3>Čo to dok&aacute;že?</h3>
 <p>Tento plugin umožn&iacute; presmerovanie na in&uacute; str&aacute;nku (napr. v pr&iacute;pade, že je už&iacute;vateľ nepr&iacute;hlasen&yacute;, presmerujete ho na str&aacute;nku s prihl&aacute;sen&iacute;m).</p>
<h3>Ako sa plugin použ&iacute;va?</h3>
<p>Vložte nasledovn&uacute; značku do va&scaron;ej str&aacute;nky alebo &scaron;abl&oacute;ny: <code>{redirect_page page=&#039;id-alebo-alias-stranky&#039;}</code></p>';
$lang['admin']['of'] = 'z';
$lang['admin']['first'] = 'Prv&aacute;';
$lang['admin']['last'] = 'Posledn&aacute;';
$lang['admin']['adminspecialgroup'] = 'Varovanie: Členovia tejto skupiny maj&uacute; automaticky v&scaron;etky pr&aacute;va';
$lang['admin']['disablesafemodewarning'] = 'Vypn&uacute;ť upozorňovanie vypnut&eacute;ho safe mode v administr&aacute;cii';
$lang['admin']['allowparamcheckwarnings'] = 'Povolenie kontroly parametrov pre vytv&aacute;ranie upozorňovac&iacute;ch spr&aacute;v';
$lang['admin']['date_format_string'] = 'Form&aacute;t d&aacute;tumu';
$lang['admin']['date_format_string_help'] = '<em>strftime</em>  form&aacute;t d&aacute;tumu.  Ďal&scaron;ie inform&aacute;cie ohľadom &#039;strftime&#039; hľadajte na google';
$lang['admin']['last_modified_at'] = 'Posledn&aacute; zmena';
$lang['admin']['last_modified_by'] = 'Posledn&uacute; zmenu vykonal';
$lang['admin']['read'] = 'Č&iacute;tanie';
$lang['admin']['write'] = 'Z&aacute;pis';
$lang['admin']['execute'] = 'Vykon&aacute;vanie';
$lang['admin']['group'] = 'Skupina';
$lang['admin']['other'] = 'Ostatn&eacute;';
$lang['admin']['event_desc_moduleupgraded'] = 'Odoslať po aktualiz&aacute;cii modulu';
$lang['admin']['event_desc_moduleinstalled'] = 'Odoslať po nain&scaron;talovan&iacute; modulu';
$lang['admin']['event_desc_moduleuninstalled'] = 'Odoslať po odin&scaron;talovan&iacute; modulu';
$lang['admin']['event_desc_edituserdefinedtagpost'] = 'Odoslať po aktualiz&aacute;cii už&iacute;vateľsk&eacute;ho tagu';
$lang['admin']['event_desc_edituserdefinedtagpre'] = 'Odoslať pred aktualiz&aacute;cou už&iacute;vateľsk&eacute;ho tagu';
$lang['admin']['event_desc_deleteuserdefinedtagpre'] = 'Odoslať pred odstr&aacute;nen&iacute;m  už&iacute;vateľsk&eacute;ho tagu';
$lang['admin']['event_desc_deleteuserdefinedtagpost'] = 'Odoslať po odstr&aacute;nen&iacute; už&iacute;vateľsk&eacute;ho tagu';
$lang['admin']['event_desc_adduserdefinedtagpost'] = 'Odoslať po vložen&iacute; nov&eacute;ho už&iacute;vateľsk&eacute;ho tagu';
$lang['admin']['event_desc_adduserdefinedtagpre'] = 'Odoslať pred vložen&iacute;m nov&eacute;ho už&iacute;vateľsk&eacute;ho tagu';
$lang['admin']['global_umask'] = 'Maska pre vytv&aacute;ranie s&uacute;borov (umask)';
$lang['admin']['errorcantcreatefile'] = 'Ned&aacute; sa vytvoriť s&uacute;bor (probl&eacute;m s pr&aacute;vami?)';
$lang['admin']['errormoduleversionincompatible'] = 'Modul je nekompatibiln&yacute; s touto verziou CMS';
$lang['admin']['errormodulenotloaded'] = 'Vn&uacute;torn&aacute; chyba, modul nebol nač&iacute;tan&yacute;';
$lang['admin']['errormodulenotfound'] = 'Intern&aacute; chyba, nen&aacute;jden&aacute; in&scaron;tancia modulu';
$lang['admin']['errorinstallfailed'] = 'In&scaron;tal&aacute;cia modulu zlyhala';
$lang['admin']['errormodulewontload'] = 'Probl&eacute;m s inicializovan&iacute;m dostupn&eacute;ho modulu';
$lang['admin']['frontendlang'] = 'Prednastaven&yacute; jazyk pre frontend (web)';
$lang['admin']['info_edituser_password'] = 'Pre zmenu hesla vyplňte toto polo';
$lang['admin']['info_edituser_passwordagain'] = 'Pre zmenu hesla vyplňte toto polo';
$lang['admin']['originator'] = 'P&ocirc;vodca';
$lang['admin']['module_name'] = 'N&aacute;zov modulu';
$lang['admin']['event_name'] = 'N&aacute;zov udalosti';
$lang['admin']['event_description'] = 'Popis udalosti';
$lang['admin']['error_delete_default_parent'] = 'Nem&ocirc;žete odstr&aacute;niť nadraden&yacute; prvok prednastavenej str&aacute;nky ';
$lang['admin']['jsdisabled'] = 'Prep&aacute;&scaron;te, ale t&aacute;top funkcia si vyžaduje zapnutie Javascriptu v prehliadači';
$lang['admin']['order'] = 'Zoradiť';
$lang['admin']['reorderpages'] = 'Zoradiť str&aacute;nky';
$lang['admin']['reorder'] = 'Popres&uacute;vať str&aacute;nky v &scaron;trukt&uacute;re';
$lang['admin']['page_reordered'] = 'Str&aacute;nka bola &uacute;spe&scaron;ne presunut&aacute;';
$lang['admin']['pages_reordered'] = 'Str&aacute;nky boli &uacute;spe&scaron;ne presunut&eacute;';
$lang['admin']['sibling_duplicate_order'] = 'Dve pr&iacute;buzn&eacute; str&aacute;nky v &scaron;trukt&uacute;re nem&ocirc;žu mať to ist&eacute; poradie. Str&aacute;nky neboli pretrieden&eacute;.';
$lang['admin']['no_orders_changed'] = 'Va&scaron;a voľba bola popres&uacute;vať str&aacute;nky, av&scaron;ak ste nezvolili žiadny presun str&aacute;nok v &scaron;trukt&uacute;re. Str&aacute;nky neboli pretrieden&eacute;.';
$lang['admin']['order_too_small'] = 'Poradie str&aacute;nky nem&ocirc;že mať hodnotu 0. Str&aacute;nky neboli pretrieden&eacute;.';
$lang['admin']['order_too_large'] = 'Poradie str&aacute;nky nem&ocirc;že byť v&auml;č&scaron;ie ako počet str&aacute;nok v tejto &uacute;rovni. Str&aacute;nky neboli pretrieden&eacute;.';
$lang['admin']['user_tag'] = 'Už&iacute;vateľsk&yacute; tag';
$lang['admin']['add'] = 'Pridať';
$lang['admin']['CSS'] = '&Scaron;t&yacute;ly';
$lang['admin']['about'] = 'O položke';
$lang['admin']['action'] = 'Akcia';
$lang['admin']['actionstatus'] = 'Akcia/Stav';
$lang['admin']['active'] = 'Akt&iacute;vna';
$lang['admin']['addcontent'] = 'Vložiť nov&yacute; obsah';
$lang['admin']['cantremove'] = 'Nie je možn&eacute; odstraniť';
$lang['admin']['changepermissions'] = 'Upraviť opr&aacute;vnenia';
$lang['admin']['changepermissionsconfirm'] = 'Varovanie\n\T&aacute;to možnosť sa pok&uacute;si zistiť, či webserver m&aacute; pr&aacute;va na prep&iacute;sanie v&scaron;etk&yacute;ch s&uacute;borov modulu.\nChcete pokračovať?';
$lang['admin']['contentadded'] = 'Str&aacute;nka bola &uacute;spe&scaron;ne pridan&aacute;.';
$lang['admin']['contentupdated'] = 'Obsah bol aktualizovan&yacute;.';
$lang['admin']['contentdeleted'] = 'Obsah bol odstr&aacute;nen&yacute;.';
$lang['admin']['success'] = '&Uacute;spech';
$lang['admin']['addcss'] = 'Vložiť nov&eacute; CSS';
$lang['admin']['addgroup'] = 'Vložiť nov&uacute; skupinu';
$lang['admin']['additionaleditors'] = 'Daľ&scaron;&iacute; editori';
$lang['admin']['addtemplate'] = 'Vložiť nov&uacute; &scaron;abl&oacute;nu';
$lang['admin']['adduser'] = 'Vložiť nov&eacute;ho už&iacute;vateľa';
$lang['admin']['addusertag'] = 'Vložiť uživateľsk&yacute; t&aacute;g';
$lang['admin']['adminaccess'] = 'Pr&iacute;stup k prihl&aacute;seniu do administr&aacute;cie';
$lang['admin']['adminlog'] = 'Administr&aacute;torsky z&aacute;znam';
$lang['admin']['adminlogcleared'] = 'Admin Log bol &uacute;spe&scaron;ne vyčisten&yacute;';
$lang['admin']['adminlogempty'] = 'Admin Log je pr&aacute;zdny';
$lang['admin']['adminsystemtitle'] = 'Administr&aacute;cia CMS syst&eacute;mu';
$lang['admin']['adminpaneltitle'] = 'CMS Made Simple Administr&aacute;cia';
$lang['admin']['advanced'] = 'Roz&scaron;&iacute;ren&eacute;';
$lang['admin']['aliasalreadyused'] = 'Alias už bol použit&yacute; na inej str&aacute;nke';
$lang['admin']['aliasmustbelettersandnumbers'] = 'Alias mus&iacute; obsahovať iba znaky a č&iacute;sla';
$lang['admin']['aliasnotaninteger'] = 'Alias nem&ocirc;že byť č&iacute;slo';
$lang['admin']['allpagesmodified'] = 'V&scaron;etky str&aacute;nky boli upraven&eacute;';
$lang['admin']['assignments'] = 'Priradenie';
$lang['admin']['associationexists'] = 'Toto priradenie už existuje';
$lang['admin']['autoinstallupgrade'] = 'Automaticky in&scaron;talovan&yacute;, alebo upgradovan&yacute;';
$lang['admin']['back'] = 'Sp&auml;ť do menu';
$lang['admin']['backtoplugins'] = 'Sp&auml;ť na zoznam pluginov';
$lang['admin']['cancel'] = 'Storno';
$lang['admin']['cantchmodfiles'] = 'Nie je možn&eacute; zmeniť pr&iacute;stupov&eacute; opravnenie niektor&yacute;m s&uacute;borom';
$lang['admin']['cantremovefiles'] = 'Probl&eacute;m s odstranen&iacute;m s&uacute;borov (opravnenia?)';
$lang['admin']['confirmcancel'] = 'Naozaj chcete zru&scaron;iť zmeny?';
$lang['admin']['canceldescription'] = 'Zru&scaron;iť zmeny';
$lang['admin']['clearadminlog'] = 'Vymazať administr&aacute;torsky z&aacute;znam';
$lang['admin']['code'] = 'K&oacute;d';
$lang['admin']['confirmdefault'] = 'Skutočne si prajete nastaviť hlavn&uacute; str&aacute;nku prezent&aacute;cie?';
$lang['admin']['confirmdeletedir'] = 'Skutočne chcete zmazať tento adres&aacute;r a v&scaron;etok jeho obsah?';
$lang['admin']['content'] = 'Obsah';
$lang['admin']['contentmanagement'] = 'Spr&aacute;va obsahu';
$lang['admin']['contenttype'] = 'Typ obsahu';
$lang['admin']['copy'] = 'Kop&iacute;rovať';
$lang['admin']['copytemplate'] = 'Kop&iacute;rovat &scaron;abl&oacute;nu';
$lang['admin']['create'] = 'Vytvoriť';
$lang['admin']['createnewfolder'] = 'Vytvoriť nov&yacute; adres&aacute;r';
$lang['admin']['cssalreadyused'] = 'N&aacute;zov CSS se už použ&iacute;v&aacute;';
$lang['admin']['cssmanagement'] = 'Spr&aacute;va CSS';
$lang['admin']['currentassociations'] = 'S&uacute;časn&eacute; priradenia';
$lang['admin']['currentdirectory'] = 'S&uacute;časn&yacute; adres&aacute;r';
$lang['admin']['currentgroups'] = 'S&uacute;časn&eacute; skupiny';
$lang['admin']['currentpages'] = 'S&uacute;časn&eacute; str&aacute;nky';
$lang['admin']['currenttemplates'] = 'S&uacute;časn&eacute; &scaron;abl&oacute;ny';
$lang['admin']['currentusers'] = 'Sučasn&iacute; už&iacute;vatelia';
$lang['admin']['custom404'] = 'Vlastn&eacute; chybov&eacute; hl&aacute;senie 404';
$lang['admin']['database'] = 'Datab&aacute;za';
$lang['admin']['databaseprefix'] = 'Prefix datab&aacute;zy';
$lang['admin']['databasetype'] = 'Typ datab&aacute;zy';
$lang['admin']['date'] = 'D&aacute;tum';
$lang['admin']['default'] = 'Aktu&aacute;lna';
$lang['admin']['delete'] = 'Zmazať';
$lang['admin']['deleteconfirm'] = 'Skutočne chcete zmazať?';
$lang['admin']['deleteassociationconfirm'] = 'Naozaj chcete zru&scaron;iť asoci&aacute;cie na - %s - ?';
$lang['admin']['deletecss'] = 'Zmazať CSS';
$lang['admin']['dependencies'] = 'Z&aacute;vislosti';
$lang['admin']['description'] = 'Popis';
$lang['admin']['directoryexists'] = 'Tento adres&aacute;r už existuje.';
$lang['admin']['down'] = 'Dole';
$lang['admin']['edit'] = 'Upraviť';
$lang['admin']['editconfiguration'] = 'Upraviť konfigur&aacute;ciu';
$lang['admin']['editcontent'] = 'Upraviť obsah';
$lang['admin']['editcss'] = 'Upraviť CSS';
$lang['admin']['editcsssuccess'] = '&Scaron;t&yacute;ly upraven&eacute;';
$lang['admin']['editgroup'] = 'Upraviť skupinu';
$lang['admin']['editpage'] = 'Upraviť str&aacute;nku';
$lang['admin']['edittemplate'] = 'Upraviť &scaron;abl&oacute;nu';
$lang['admin']['edittemplatesuccess'] = '&Scaron;abl&oacute;na upraven&aacute;';
$lang['admin']['edituser'] = 'Upraviť použ&iacute;vateľa';
$lang['admin']['editusertag'] = 'Upraviť už&iacute;vateľsk&yacute; t&aacute;g';
$lang['admin']['usertagadded'] = 'Už&iacute;vateľsk&yacute; tag bol &uacute;spe&scaron;ne pridan&yacute;.';
$lang['admin']['usertagupdated'] = 'Už&iacute;vateľsk&yacute; tag bol &uacute;spe&scaron;ne upraven&yacute;.';
$lang['admin']['usertagdeleted'] = 'Už&iacute;vateľsk&yacute; tag bol &uacute;spe&scaron;ne odstr&aacute;nen&yacute;.';
$lang['admin']['email'] = 'Emailov&aacute; adresa';
$lang['admin']['errorattempteddowngrade'] = 'In&scaron;tal&aacute;cia tohto modulu by bol prechod na star&scaron;iu verziu.  Oper&aacute;cia zru&scaron;en&aacute;';
$lang['admin']['errorchildcontent'] = 'K obsahu je st&aacute;le priraden&aacute; prednastaven&aacute; položka. Najsk&ocirc;r ju pros&iacute;m odstraňte.';
$lang['admin']['errorcopyingtemplate'] = 'Chyba kop&iacute;rovania &scaron;abl&oacute;ny';
$lang['admin']['errorcouldnotparsexml'] = 'Chyba č&iacute;tania XML s&uacute;boru';
$lang['admin']['errorcreatingassociation'] = 'Chyba vytv&aacute;rania asoci&aacute;cie';
$lang['admin']['errorcssinuse'] = 'Tento CSS je st&aacute;le použ&iacute;van&yacute; &scaron;abl&oacute;nou alebo str&aacute;nkami. Odstr&aacute;ňte pros&iacute;m najsk&ocirc;r tieto spojenia.';
$lang['admin']['errordefaultpage'] = 'S&uacute;časn&uacute; hlavn&uacute; str&aacute;nku nie je možn&eacute; zmazať. Najsk&ocirc;r nastavte in&uacute; ako hlavn&uacute;.';
$lang['admin']['errordeletingassociation'] = 'Chyba mazania asoci&aacute;cie';
$lang['admin']['errordeletingcss'] = 'Chyba mazania css';
$lang['admin']['errordeletingdirectory'] = 'Adres&aacute;r sa ned&aacute; zmazať. Ch&yacute;baj&uacute; opr&aacute;vnenia?';
$lang['admin']['errordeletingfile'] = 'S&uacute;bor sa ned&aacute; zmazať. Chybaj&uacute; opr&aacute;vnenia?';
$lang['admin']['errordirectorynotwritable'] = 'Nem&aacute;te opr&aacute;vnenia na z&aacute;pis do adres&aacute;ra';
$lang['admin']['errordtdmismatch'] = 'Ch&yacute;baj&uacute;ca, alebo neexistuj&uacute;ca DTD Version v  XML s&uacute;bore';
$lang['admin']['errorgettingcssname'] = 'Chyba z&iacute;skania mena CSS';
$lang['admin']['errorgettingtemplatename'] = 'Chyba z&iacute;skania n&aacute;zvu &scaron;abl&oacute;ny';
$lang['admin']['errorincompletexml'] = 'XML s&uacute;bor je chybn&yacute;, alebo nekompletn&yacute;';
$lang['admin']['uploadxmlfile'] = 'In&scaron;talovať modul cez XML';
$lang['admin']['cachenotwritable'] = 'Cache folder is not writable. Clearing cache will not work. Please make the tmp/cache folder have full read/write/execute permissions (chmod 777)';
$lang['admin']['modulesnotwritable'] = 'The modules folder is not writable, if you would like to install modules by uploading an XML file you need to make the modules folder have full read/write/execute permissions (chmod 777).';
$lang['admin']['noxmlfileuploaded'] = 'S&uacute;bor nebol nahran&yacute;. Pre in&scaron;tal&aacute;ciu modulu cez XML mus&iacute;te vybrať a nahrať .xml s&uacute;bor z v&aacute;&scaron;ho poč&iacute;tača.';
$lang['admin']['errorinsertingcss'] = 'Chyba vloženia CSS';
$lang['admin']['errorinsertinggroup'] = 'Chyba vloženia skupiny';
$lang['admin']['errorinsertingtag'] = 'Chyba vloženia už&iacute;vateľsk&eacute;ho t&aacute;gu';
$lang['admin']['errorinsertingtemplate'] = 'Chyba vloženia &scaron;abl&oacute;ny';
$lang['admin']['errorinsertinguser'] = 'Chyba vloženia už&iacute;vateľa';
$lang['admin']['errornofilesexported'] = 'Chyba v exporte s&uacute;borov do XML';
$lang['admin']['errorretrievingcss'] = 'Chyba z&iacute;skania CSS';
$lang['admin']['errorretrievingtemplate'] = 'Chyba z&iacute;skania &scaron;abl&oacute;ny';
$lang['admin']['errortemplateinuse'] = 'T&aacute;to &scaron;abl&oacute;na je použ&iacute;vn&aacute; str&aacute;nkou. Najsk&ocirc;r ju pros&iacute;m odstr&aacute;ňte.';
$lang['admin']['errorupdatingcss'] = 'Chyba aktualiz&aacute;cie CSS';
$lang['admin']['errorupdatinggroup'] = 'Chyba aktualiz&aacute;cie skupiny';
$lang['admin']['errorupdatingpages'] = 'Chyba updatovania str&aacute;nok';
$lang['admin']['errorupdatingtemplate'] = 'Chyba aktualiz&aacute;cie &scaron;abl&oacute;ny';
$lang['admin']['errorupdatinguser'] = 'Chyba aktualiz&aacute;cie už&iacute;vateľa';
$lang['admin']['errorupdatingusertag'] = 'Chyba aktualiz&aacute;cie už&iacute;vateľsk&eacute;ho t&aacute;gu';
$lang['admin']['erroruserinuse'] = 'Tento už&iacute;vateľ st&aacute;le vlastn&iacute; str&aacute;nky. Zmeňte vlastn&iacute;ctvo t&yacute;chto str&aacute;nok na in&eacute;ho použivateľa pred zmazan&iacute;m.';
$lang['admin']['eventhandlers'] = 'Udalosti';
$lang['admin']['editeventhandler'] = 'Upraviť ovladač udalost&iacute;';
$lang['admin']['eventhandlerdescription'] = 'Priradiť už&iacute;vateľsk&eacute; tagy s udalosťami';
$lang['admin']['export'] = 'Exportovať';
$lang['admin']['event'] = 'Udalosť';
$lang['admin']['false'] = 'NIE';
$lang['admin']['settrue'] = 'Nastaviť ano';
$lang['admin']['filecreatedirnodoubledot'] = 'Adres&aacute;r nesmie obsahovať &#039;..&#039;.';
$lang['admin']['filecreatedirnoname'] = 'Nie je možn&eacute; vytvoriť adres&aacute;r bez n&aacute;zvu.';
$lang['admin']['filecreatedirnoslash'] = 'Adres&aacute;r nem&ocirc;že obsahovať &#039;/&#039; alebo &#039;\&#039;.';
$lang['admin']['filemanagement'] = 'Spr&aacute;va s&uacute;borov';
$lang['admin']['filename'] = 'N&aacute;zov s&uacute;boru';
$lang['admin']['filenotuploaded'] = 'S&uacute;bor nem&ocirc;že b&yacute;ť prenesen&yacute;. Ch&yacute;baj&uacute; opr&aacute;vnienia?';
$lang['admin']['filesize'] = 'Veľkosť';
$lang['admin']['firstname'] = 'Meno';
$lang['admin']['groupmanagement'] = 'Spr&aacute;va skup&iacute;n';
$lang['admin']['grouppermissions'] = 'Opr&aacute;vnenia skupiny';
$lang['admin']['handler'] = 'Handler (už&iacute;vateľsk&yacute; tag)';
$lang['admin']['headtags'] = 'Head T&aacute;gy (v hlavičke)';
$lang['admin']['help'] = 'N&aacute;poveda';
$lang['admin']['new_window'] = 'nov&eacute; okno';
$lang['admin']['helpwithsection'] = '%s N&aacute;poveda';
$lang['admin']['helpaddtemplate'] = '<p>&Scaron;abl&oacute;na je to, čo kontroluje &quot;look and feel&quot; obsahu str&aacute;nok.</p><p>Vytvorte tu svoj layout a tiež vložte svoj CSS do sekcie &scaron;abl&oacute;n pre kontrolu vzhľadu Va&scaron;ich r&ocirc;znych elementov.</p>';
$lang['admin']['helplisttemplate'] = '<p>T&aacute;to str&aacute;nka umožňuje upravovať, mazať a vytv&aacute;rať &scaron;abl&oacute;ny.</p><p>Pre vytvorenie novej &scaron;abl&oacute;ny, kliknite na tlač&iacute;tko <u>Vložiť nov&uacute; &scaron;abl&oacute;nu</u>.</p><p>Ak si prajete nastaviť v&scaron;etky str&aacute;nky pre použ&iacute;vanie rovnakej &scaron;abl&oacute;ny, kliknite na odkaz <u>Nastaviť v&scaron;etky str&aacute;nky</u>.</p><p>Ak chcete duplikovať &scaron;abl&oacute;nu, kliknite na ikonu <u>Kop&iacute;rovať</u> a budete dot&aacute;zan&yacute; na n&aacute;zov novej &scaron;abl&oacute;ny.</p>';
$lang['admin']['home'] = '&Uacute;vod';
$lang['admin']['homepage'] = 'Domovsk&aacute; str&aacute;nka';
$lang['admin']['hostname'] = 'Hostiteľ';
$lang['admin']['idnotvalid'] = 'Zadan&eacute; id je neplatn&eacute;';
$lang['admin']['imagemanagement'] = 'Spr&aacute;vca obr&aacute;zkov';
$lang['admin']['informationmissing'] = 'Ch&yacute;baj&uacute;ce inform&aacute;cie';
$lang['admin']['install'] = 'In&scaron;talovať';
$lang['admin']['invalidcode'] = 'Vložen&yacute; chybn&yacute; k&oacute;d.';
$lang['admin']['illegalcharacters'] = 'Nespr&aacute;vne znaky v poli %s.';
$lang['admin']['invalidcode_brace_missing'] = 'Nezn&aacute;my počet z&aacute;tvoriek';
$lang['admin']['invalidtemplate'] = '&Scaron;abl&oacute;na je neplatn&aacute;';
$lang['admin']['itemid'] = 'ID položky';
$lang['admin']['itemname'] = 'N&aacute;zov položky';
$lang['admin']['language'] = 'Jazyk';
$lang['admin']['lastname'] = 'Priezvisko';
$lang['admin']['logout'] = 'Odhl&aacute;siť';
$lang['admin']['loginprompt'] = 'Zadajte platn&eacute; už&iacute;vatelsk&eacute; &uacute;daje pre pr&iacute;stup do administr&aacute;cie.';
$lang['admin']['logintitle'] = 'CMS Made Simple Prihl&aacute;senie do administr&aacute;cie';
$lang['admin']['menutext'] = 'Text menu';
$lang['admin']['missingparams'] = 'Niekter&eacute; parametry ch&yacute;bali, alebo boli nespr&aacute;vne';
$lang['admin']['modifygroupassignments'] = 'Upraviť priradenia skupiny';
$lang['admin']['moduleabout'] = 'O %s module';
$lang['admin']['modulehelp'] = 'N&aacute;poveda pre %s modul';
$lang['admin']['msg_defaultcontent'] = 'Vložte k&oacute;d, ktor&yacute; bude v obsahu pri vytvoren&iacute; nov&yacute;ch str&aacute;nok';
$lang['admin']['msg_defaultmetadata'] = 'Vložte k&oacute;d, ktor&yacute; bude v položke metadata (z&aacute;ložka Voľby) pri vytvoren&iacute; nov&yacute;ch str&aacute;nok';
$lang['admin']['wikihelp'] = 'Wiki n&aacute;poveda';
$lang['admin']['moduleinstalled'] = 'Modul je už nain&scaron;talovan&yacute;';
$lang['admin']['moduleinterface'] = '%s rozhranie';
$lang['admin']['modules'] = 'Moduly';
$lang['admin']['move'] = 'Presun&uacute;ť';
$lang['admin']['name'] = 'Meno';
$lang['admin']['needpermissionto'] = 'Potrebujete &#039;%s&#039; pr&aacute;va pro vykonanie tejto funkcie.';
$lang['admin']['needupgrade'] = 'Potrebuje aktualizovať';
$lang['admin']['newtemplatename'] = 'Nov&yacute; n&aacute;zov &scaron;abl&oacute;ny';
$lang['admin']['next'] = 'Daľ&scaron;&iacute;';
$lang['admin']['noaccessto'] = 'Bez pr&iacute;stupu k %s';
$lang['admin']['nocss'] = 'Žiadne CSS';
$lang['admin']['noentries'] = 'Žiadne položky';
$lang['admin']['nofieldgiven'] = 'Žiadny %s zadan&yacute;!';
$lang['admin']['nofiles'] = 'Žiadne s&uacute;bory';
$lang['admin']['nopasswordmatch'] = 'Hesl&aacute; nie s&uacute; rovnak&eacute;';
$lang['admin']['norealdirectory'] = 'Nie je zadan&yacute; spr&aacute;vn&yacute; adres&aacute;r';
$lang['admin']['norealfile'] = 'Nebol zadan&yacute; existuj&uacute;ci s&uacute;bor';
$lang['admin']['notinstalled'] = 'Nenain&scaron;talovan&yacute;';
$lang['admin']['overwritemodule'] = 'Prep&iacute;sať existuj&uacute;ce moduly';
$lang['admin']['owner'] = 'Vlastn&iacute;k';
$lang['admin']['pagealias'] = 'Alias str&aacute;nky';
$lang['admin']['pagedefaults'] = 'Defaultne nastavenie str&aacute;nky';
$lang['admin']['pagedefaultsdescription'] = 'Nastav hodnoty pre nov&eacute; str&aacute;nky';
$lang['admin']['parent'] = 'Nadraden&yacute;';
$lang['admin']['password'] = 'Heslo';
$lang['admin']['passwordagain'] = 'Heslo (znova)';
$lang['admin']['permission'] = 'Opr&aacute;vnenia';
$lang['admin']['permissions'] = 'opr&aacute;vnenia';
$lang['admin']['permissionschanged'] = 'Opr&aacute;vnenia boli aktualizovan&eacute;.';
$lang['admin']['pluginabout'] = 'O %s t&aacute;gu';
$lang['admin']['pluginhelp'] = 'N&aacute;poveda pre %s t&aacute;g';
$lang['admin']['pluginmanagement'] = 'Spr&aacute;va pluginov';
$lang['admin']['prefsupdated'] = 'Nastavenie upraven&eacute;.';
$lang['admin']['preview'] = 'N&aacute;hľad';
$lang['admin']['previewdescription'] = 'N&aacute;hľad zmien';
$lang['admin']['previous'] = 'Predch&aacute;dzaj&uacute;ci';
$lang['admin']['remove'] = 'Odstr&aacute;niť';
$lang['admin']['removeconfirm'] = 'T&aacute;to možnosť odstran&iacute; natrvalo v&scaron;etky s&uacute;bory patriace k tomuto modulu v tejto in&scaron;tal&aacute;cii.\nChcete skutočne pokračovať?';
$lang['admin']['removecssassociation'] = 'Odstr&aacute;niť CSS asoci&aacute;ciu';
$lang['admin']['saveconfig'] = 'Uložiť konfigur&aacute;ciu';
$lang['admin']['send'] = 'Odoslať';
$lang['admin']['setallcontent'] = 'Nastaviť v&scaron;etky str&aacute;nky';
$lang['admin']['setallcontentconfirm'] = 'Skutočne chcete nastaviť v&scaron;etky s&uacute;bory na t&uacute;to &scaron;abl&oacute;nu?';
$lang['admin']['showinmenu'] = 'Uk&aacute;zať v menu';
$lang['admin']['showsite'] = 'Uk&aacute;zať prezent&aacute;ciu';
$lang['admin']['sitedownmessage'] = 'Spr&aacute;va str&aacute;nky mimo prev&aacute;dzky';
$lang['admin']['siteprefs'] = 'Predvoľby prezent&aacute;ci';
$lang['admin']['status'] = 'Stav';
$lang['admin']['stylesheet'] = '&Scaron;t&yacute;ly';
$lang['admin']['submit'] = 'Odoslať';
$lang['admin']['submitdescription'] = 'Uložiť zmeny';
$lang['admin']['tags'] = 'T&aacute;gy';
$lang['admin']['template'] = '&Scaron;abl&oacute;na';
$lang['admin']['templateexists'] = 'N&aacute;zov &scaron;abl&oacute;ny už existuje';
$lang['admin']['templatemanagement'] = 'Spr&aacute;va &scaron;abl&oacute;n';
$lang['admin']['title'] = 'N&aacute;zov';
$lang['admin']['tools'] = 'N&aacute;stroje';
$lang['admin']['true'] = '&Aacute;NO';
$lang['admin']['setfalse'] = 'Nastaviť nie';
$lang['admin']['type'] = 'Typ';
$lang['admin']['typenotvalid'] = 'Typ nie je platn&yacute;';
$lang['admin']['uninstall'] = 'Odin&scaron;talovať';
$lang['admin']['uninstallconfirm'] = 'Skutočne to chcete odin&scaron;ťalovať?';
$lang['admin']['up'] = 'Hore';
$lang['admin']['upgrade'] = 'Aktualizovať';
$lang['admin']['upgradeconfirm'] = 'Skutočne toto chcete aktualizovať?';
$lang['admin']['uploadfile'] = 'Nahr&aacute;ť s&uacute;bor';
$lang['admin']['url'] = 'URL adresa';
$lang['admin']['useadvancedcss'] = 'Použ&iacute;ť roz&scaron;&iacute;ren&uacute; spr&aacute;vu CSS';
$lang['admin']['user'] = 'Už&iacute;vateľ';
$lang['admin']['userdefinedtags'] = 'Použ&iacute;vateľsk&eacute; t&aacute;gy';
$lang['admin']['usermanagement'] = 'Spr&aacute;va už&iacute;vateľov';
$lang['admin']['username'] = 'Už&iacute;vateľsk&eacute; meno';
$lang['admin']['usernameincorrect'] = 'uživateľsk&eacute; meno, alebo heslo je neplatn&eacute;';
$lang['admin']['userprefs'] = 'Nastavenie použ&iacute;vateľa';
$lang['admin']['usersassignedtogroup'] = 'Už&iacute;vateľ priraden&yacute; ku skupine %s';
$lang['admin']['usertagexists'] = 'T&aacute;g tohoto n&aacute;zvu už existuje. Zvoľte pros&iacute;m in&yacute; n&yacute;zov.';
$lang['admin']['usewysiwyg'] = 'Použ&iacute;vať WYSIWYG editor pre obsah';
$lang['admin']['version'] = 'Verzia';
$lang['admin']['view'] = 'Zobraziť';
$lang['admin']['welcomemsg'] = 'Vitajte %s';
$lang['admin']['directoryabove'] = 'adres&aacute;r nad aktu&aacute;lnou &uacute;rovňou';
$lang['admin']['nodefault'] = 'Hlavn&yacute; nie je nastaven&yacute;';
$lang['admin']['blobexists'] = 'Html blok s t&yacute;mto n&aacute;zvom už existuje';
$lang['admin']['blobmanagement'] = 'Spr&aacute;va HTML blokov';
$lang['admin']['errorinsertingblob'] = 'Nastala chyba pri vkladan&iacute; html bloku';
$lang['admin']['addhtmlblob'] = 'Vložiť html blok';
$lang['admin']['edithtmlblob'] = 'Upraviť html blok';
$lang['admin']['edithtmlblobsuccess'] = 'HTML blok aktualizovan&yacute;';
$lang['admin']['tagtousegcb'] = 'K&oacute;d pre použitie tohto modulu';
$lang['admin']['gcb_wysiwyg'] = 'Povoliť GCB WYSIWYG';
$lang['admin']['gcb_wysiwyg_help'] = 'Povoliť WYSIWYG editor pri edit&aacute;cii HTML blokkov';
$lang['admin']['filemanager'] = 'Spr&aacute;vca s&uacute;borov';
$lang['admin']['imagemanager'] = 'Spr&aacute;vca obr&aacute;zkov';
$lang['admin']['encoding'] = 'K&oacute;dovanie';
$lang['admin']['clearcache'] = 'Vymazať cache';
$lang['admin']['clear'] = 'Vymazať';
$lang['admin']['cachecleared'] = 'Cache vymazan&aacute;';
$lang['admin']['apply'] = 'Vykonať';
$lang['admin']['applydescription'] = 'Uložiť nastavenia a pokračovať v edit&aacute;cii';
$lang['admin']['none'] = 'Žiadne';
$lang['admin']['wysiwygtouse'] = 'V&yacute;ber WYSIWYG editoru k použitiu';
$lang['admin']['syntaxhighlightertouse'] = 'Vyberte zv&yacute;razňovanie syntaxe';
$lang['admin']['hasdependents'] = 'M&aacute; z&aacute;vislosti';
$lang['admin']['missingdependency'] = 'Nevyrie&scaron;en&eacute; z&aacute;vislosti';
$lang['admin']['minimumversion'] = 'Minim&aacute;lna verzia';
$lang['admin']['minimumversionrequired'] = 'Nutn&aacute; minim&aacute;lna CMSMS cerzia';
$lang['admin']['maximumversion'] = 'Maxim&aacute;lna verzia';
$lang['admin']['maximumversionsupported'] = 'Podporovan&aacute; maxim&aacute;lna CMSMS verzia ';
$lang['admin']['depsformodule'] = 'Z&aacute;vislosti pro modul %s';
$lang['admin']['installed'] = 'In&scaron;talovan&yacute;';
$lang['admin']['author'] = 'Autor';
$lang['admin']['changehistory'] = 'Hist&oacute;ria zmien';
$lang['admin']['moduleerrormessage'] = 'Chybov&eacute; hl&aacute;senie pre %s modul';
$lang['admin']['moduleupgradeerror'] = 'Nastala chyba pri aktualiz&aacute;cii modulu';
$lang['admin']['moduleinstallmessage'] = 'Instalačn&aacute; spr&aacute;va pre modul %s';
$lang['admin']['moduleuninstallmessage'] = 'Odin&scaron;talačn&aacute; spr&aacute;va pre modul %s';
$lang['admin']['admintheme'] = 'Vzhľad administr&aacute;cie';
$lang['admin']['addstylesheet'] = 'Vložiť &scaron;t&yacute;l';
$lang['admin']['editstylesheet'] = 'Upraviť &scaron;t&yacute;l';
$lang['admin']['addcssassociation'] = 'Pridať asoci&aacute;ciu &scaron;t&yacute;lu';
$lang['admin']['attachstylesheet'] = 'Pripojiť tento &scaron;t&yacute;l';
$lang['admin']['attachtemplate'] = 'Pripojiť do tejto &scaron;abl&oacute;ny';
$lang['admin']['main'] = 'Obsah';
$lang['admin']['pages'] = 'Str&aacute;nky';
$lang['admin']['page'] = 'Strana';
$lang['admin']['files'] = 'S&uacute;bory';
$lang['admin']['layout'] = 'Vzhľad';
$lang['admin']['usersgroups'] = 'Použ&iacute;vatelia/Skupiny';
$lang['admin']['extensions'] = 'Roz&scaron;&iacute;renia';
$lang['admin']['preferences'] = 'Nastavenia';
$lang['admin']['admin'] = 'Administr&aacute;cia str&aacute;nok';
$lang['admin']['viewsite'] = 'Zobraziť prezent&aacute;ciu';
$lang['admin']['templatecss'] = 'Prideliť &scaron;abl&oacute;nu k &scaron;t&yacute;lu';
$lang['admin']['plugins'] = 'Pluginy';
$lang['admin']['movecontent'] = 'Presun&uacute;ť str&aacute;nky';
$lang['admin']['module'] = 'Moduly';
$lang['admin']['usertags'] = 'Použ&iacute;vateľsk&eacute; t&aacute;gy';
$lang['admin']['htmlblobs'] = 'HTML Bloky';
$lang['admin']['adminhome'] = 'Administr&aacute;cia';
$lang['admin']['liststylesheets'] = '&Scaron;t&yacute;ly';
$lang['admin']['preferencesdescription'] = 'Tu sa upravuj&uacute; r&ocirc;zne nastavenia prezent&aacute;cie.';
$lang['admin']['adminlogdescription'] = 'Zobraz&iacute; logy o tom, kto čo robil v administr&aacute;cii.';
$lang['admin']['mainmenu'] = 'Hlavn&eacute; menu';
$lang['admin']['users'] = 'Použ&iacute;vatelia';
$lang['admin']['usersdescription'] = 'Tu sa upravuj&uacute; použ&iacute;vatelia';
$lang['admin']['groups'] = 'Skupiny';
$lang['admin']['groupsdescription'] = 'Tu se upravuj&uacute; použ&iacute;vateľsk&eacute; skupiny.';
$lang['admin']['groupassignments'] = 'Priradenie do skupiny';
$lang['admin']['groupassignmentdescription'] = 'Tu sa zaraďuj&uacute; už&iacute;vatelia do skup&iacute;n.';
$lang['admin']['groupperms'] = 'Opr&aacute;vnenia skupiny';
$lang['admin']['grouppermsdescription'] = 'Nastavenia opr&aacute;vnen&iacute; a &uacute;roveň pr&aacute;v skup&iacute;n';
$lang['admin']['pagesdescription'] = 'Tu se prid&aacute;vaj&uacute; a upravuj&uacute; str&aacute;nky a in&yacute; obsah.';
$lang['admin']['htmlblobdescription'] = 'HTML Bloky s&uacute; č&aacute;sťou obsahu, kter&eacute; m&ocirc;žete vložiť do svoj&iacute;ch str&aacute;nok alebo &scaron;abl&oacute;n.';
$lang['admin']['templates'] = '&Scaron;abl&oacute;ny';
$lang['admin']['templatesdescription'] = 'Tu se prid&aacute;vaj&uacute; a upravuj&uacute; &scaron;abl&oacute;ny. &Scaron;abl&oacute;ny definuj&uacute; vzhľad va&scaron;ich str&aacute;nok.';
$lang['admin']['stylesheets'] = '&Scaron;t&yacute;ly';
$lang['admin']['stylesheetsdescription'] = 'Spr&aacute;va &scaron;t&yacute;lov je roz&scaron;&iacute;ren&yacute; sp&ocirc;sob pr&aacute;ce s kask&aacute;dov&yacute;mi &scaron;t&yacute;lmi CSS) oddelene od &scaron;abl&oacute;n.';
$lang['admin']['filemanagerdescription'] = 'Nahrať a spravovať s&uacute;bory.';
$lang['admin']['imagemanagerdescription'] = 'Nahrať/upraviť a odstr&aacute;niť obr&aacute;zky.';
$lang['admin']['moduledescription'] = 'Moduly roz&scaron;iruj&uacute; CMS Made Simple o možnosť uživateľsk&yacute;ch funkci&iacute;.';
$lang['admin']['tagdescription'] = 'T&aacute;gy s&uacute; mal&eacute; funkcie, kter&eacute; m&ocirc;žu byť vložen&eacute; do obsahu a/alebo do &scaron;abl&oacute;n.';
$lang['admin']['usertagdescription'] = 'T&aacute;gy kter&eacute; m&ocirc;žete vytv&aacute;rať a upravovať sami pre vykonanie určit&yacute;ch činnost&iacute;, priamo z v&aacute;&scaron;ho prehliadača.';
$lang['admin']['installdirwarning'] = '<em><strong>Varovanie:</strong></em> in&scaron;talačn&yacute; adres&aacute;r st&aacute;le existuje. Odstr&aacute;ňte ho, pros&iacute;m.';
$lang['admin']['subitems'] = 'Podpoložky';
$lang['admin']['extensionsdescription'] = 'Moduly, t&aacute;gy a daľ&scaron;ie drobnosti.';
$lang['admin']['usersgroupsdescription'] = 'Položky vzťahuj&uacute;ce sa k použ&iacute;vateľom a skupin&aacute;m.';
$lang['admin']['layoutdescription'] = 'Voľby vzhľadu str&aacute;nok.';
$lang['admin']['admindescription'] = 'Funkcie administr&aacute;cie str&aacute;nok.';
$lang['admin']['contentdescription'] = 'Tu sa vklad&aacute; a upravuje obsah.';
$lang['admin']['enablecustom404'] = 'Povoliť vlastn&eacute; chybov&eacute; hl&aacute;&scaron;ky 404';
$lang['admin']['enablesitedown'] = 'Povoliť spr&aacute;vu &quot;Str&aacute;nka mimo prev&aacute;dzky&quot;';
$lang['admin']['bookmarks'] = 'Z&aacute;ložky';
$lang['admin']['user_created'] = 'User Created';
$lang['admin']['forums'] = 'F&oacute;ra';
$lang['admin']['wiki'] = 'Wiki ';
$lang['admin']['irc'] = 'Irc';
$lang['admin']['module_help'] = 'Pomocn&iacute;k modulu';
$lang['admin']['managebookmarks'] = 'Upraviť z&aacute;ložky';
$lang['admin']['editbookmark'] = 'Upraviť z&aacute;ložku';
$lang['admin']['addbookmark'] = 'Pridať aktu&aacute;lnu str&aacute;nku';
$lang['admin']['recentpages'] = 'Posledn&eacute; str&aacute;nky';
$lang['admin']['groupname'] = 'N&aacute;zov skupiny';
$lang['admin']['selectgroup'] = 'Vybrať skupinu';
$lang['admin']['updateperm'] = 'Aktualizovať opr&aacute;vnenia';
$lang['admin']['admincallout'] = 'Administr&aacute;torsk&eacute; skratky';
$lang['admin']['showbookmarks'] = 'Uk&aacute;zať administr&aacute;torsk&eacute; z&aacute;ložky';
$lang['admin']['hide_help_links'] = 'Skryť odkazy na pomocn&iacute;ka';
$lang['admin']['hide_help_links_help'] = 'Za&scaron;krtnut&iacute;m tohto pol&iacute;čka zak&aacute;žete zobrazovanie odkazov n&aacute;povedy a WIKI v hlavičke str&aacute;nok administr&aacute;cie.';
$lang['admin']['showrecent'] = 'Uk&aacute;zať nejčastej&scaron;ie použ&iacute;van&eacute; str&aacute;nky';
$lang['admin']['attachtotemplate'] = 'Pripojiť &scaron;t&yacute;l k &scaron;abl&oacute;ne';
$lang['admin']['attachstylesheets'] = 'Pripojiť &scaron;t&yacute;l';
$lang['admin']['indent'] = 'Odsadiť v&yacute;pis str&aacute;nok pre zv&yacute;raznenie hierarchie';
$lang['admin']['adminindent'] = 'Zobraziť obsah';
$lang['admin']['contract'] = 'Zbaliť sekciu';
$lang['admin']['expand'] = 'Rozbaliť sekciu';
$lang['admin']['expandall'] = 'Rozbaliť v&scaron;etky sekcie';
$lang['admin']['contractall'] = 'Zbaliť v&scaron;etky sekcie';
$lang['admin']['menu_bookmarks'] = '[+] ';
$lang['admin']['globalconfig'] = 'Glob&aacute;lna konfigur&aacute;cia';
$lang['admin']['adminpaging'] = 'Počet položiek zobrazovan&yacute;ch vo v&yacute;pise str&aacute;nok';
$lang['admin']['nopaging'] = 'Zobraziť v&scaron;etky položky';
$lang['admin']['myprefs'] = 'Moje predvoľby';
$lang['admin']['myprefsdescription'] = 'Tu si m&ocirc;žete nastaviť administr&aacute;ciu podľa vlastn&yacute;ch potrieb.';
$lang['admin']['myaccount'] = 'M&ocirc;j &uacute;čet';
$lang['admin']['myaccountdescription'] = 'Tu si m&ocirc;žete zmeniť svoje osobn&eacute; inform&aacute;cie.';
$lang['admin']['adminprefs'] = 'Nastavenia administr&aacute;cie';
$lang['admin']['adminprefsdescription'] = 'Tu s&uacute; &scaron;pecifick&eacute; nastavenia administr&aacute;cie.';
$lang['admin']['managebookmarksdescription'] = 'Tu m&ocirc;žete spravovať Va&scaron;e administr&aacute;torsk&eacute; z&aacute;ložky.';
$lang['admin']['options'] = 'Voľby';
$lang['admin']['langparam'] = 'Parameter &scaron;pecifikuje, ak&yacute; jazyk sa m&aacute; použiť pre zobrazenie. Nie v&scaron;etky moduly to podporuj&uacute;, alebo potrebuj&uacute;.';
$lang['admin']['parameters'] = 'Parametre';
$lang['admin']['mediatype'] = 'Media Typ';
$lang['admin']['mediatype_'] = 'Nenastaven&eacute; nič:  prejav&iacute; sa v&scaron;ade';
$lang['admin']['mediatype_all'] = 'all : Určen&eacute; pre v&scaron;etky zariadenia.';
$lang['admin']['mediatype_aural'] = 'aural : Určen&eacute; pre hlasov&eacute; č&iacute;tačky.';
$lang['admin']['mediatype_braille'] = 'braille : Určen&eacute; pre zariadenia s braillov&yacute;m p&iacute;smom.';
$lang['admin']['mediatype_embossed'] = 'embossed : Určen&eacute; pre tlačiarne s braillov&yacute;m p&iacute;smom.';
$lang['admin']['mediatype_handheld'] = 'handheld : Určen&eacute; pre vreckov&eacute; PC';
$lang['admin']['mediatype_print'] = 'print : Určen&eacute; pr&eacute; str&aacute;nkov&yacute;, neprehľadn&yacute; materi&aacute;l a pre dokumenty zobrazovan&eacute; na obrazovke v režime n&aacute;hľadu pred tlačou.';
$lang['admin']['mediatype_projection'] = 'projection : Určen&eacute; pre projektovan&eacute; prezent&aacute;cie, napr. pro projektory alebo tlač na prehľadn&eacute; f&oacute;lie.';
$lang['admin']['mediatype_screen'] = 'screen :  Určen&eacute; pre farebn&eacute; poč&iacute;tačov&eacute; monitory.';
$lang['admin']['mediatype_tty'] = 'tty : Určen&eacute; pre v&yacute;stupy s pevnou &scaron;&iacute;rkou znaku, ako napr. termin&aacute;ly alebo diaľkopisy..';
$lang['admin']['mediatype_tv'] = 'tv : Určen&eacute; pre zariadenia typu tv.';
$lang['admin']['assignmentchanged'] = 'Priradenia k skupine boli upraven&eacute;.';
$lang['admin']['stylesheetexists'] = 'Existuj&uacute;ci &scaron;t&yacute;l';
$lang['admin']['errorcopyingstylesheet'] = 'Chyba v kop&iacute;rovan&iacute; &Scaron;t&yacute;lu';
$lang['admin']['copystylesheet'] = 'Kop&iacute;rovať &scaron;t&yacute;l';
$lang['admin']['newstylesheetname'] = 'Nov&yacute; n&aacute;zov &scaron;t&yacute;lu';
$lang['admin']['target'] = 'Cieľ';
$lang['admin']['xml'] = 'XML ';
$lang['admin']['xmlmodulerepository'] = 'URL adresa pre ModuleRepository soap server';
$lang['admin']['metadata'] = 'Meta inform&aacute;cie';
$lang['admin']['globalmetadata'] = 'Glob&aacute;lne Meta inform&aacute;cia';
$lang['admin']['titleattribute'] = 'Attrib&uacute;t Titul';
$lang['admin']['tabindex'] = 'Tab Index ';
$lang['admin']['accesskey'] = 'Pr&iacute;stupov&yacute; kľ&uacute;č';
$lang['admin']['sitedownwarning'] = '<strong>Upozornenie:</strong> Na Va&scaron;ej str&aacute;nke je aktu&aacute;lne spr&aacute;va: &quot;Str&aacute;nka je moment&aacute;lne nedostupn&aacute;&quot;.  Pre zmenu tohot stavu dstr&aacute;ňte s&uacute;bor %s.';
$lang['admin']['deletecontent'] = 'Zmazať obsah';
$lang['admin']['deletepages'] = 'Zmazať tieto str&aacute;nky';
$lang['admin']['selectall'] = 'Vybrať v&scaron;etko';
$lang['admin']['selecteditems'] = 'Vybran&eacute; položky';
$lang['admin']['inactive'] = 'Neakt&iacute;vne';
$lang['admin']['deletetemplates'] = 'Zmazať &scaron;ablony';
$lang['admin']['templatestodelete'] = 'Tieto &scaron;ablony bud&uacute; vymazan&eacute;';
$lang['admin']['wontdeletetemplateinuse'] = 'Tieto &scaron;ablony s&uacute; použ&iacute;van&eacute; a preto nebud&uacute; vymazan&eacute;';
$lang['admin']['deletetemplate'] = 'Zmazať &scaron;t&yacute;ly';
$lang['admin']['stylesheetstodelete'] = 'Tieto &scaron;t&yacute;ly bud&uacute; vymazan&eacute;';
$lang['admin']['sitename'] = 'N&aacute;zov str&aacute;nky';
$lang['admin']['siteadmin'] = 'Administr&aacute;cia str&aacute;nok';
$lang['admin']['images'] = 'Spr&aacute;va obr&aacute;zkov';
$lang['admin']['blobs'] = 'HTML bloky';
$lang['admin']['groupmembers'] = 'Priraďovanie skup&iacute;n';
$lang['admin']['troubleshooting'] = '(Rie&scaron;enie probl&eacute;mov)';
$lang['admin']['event_desc_loginpost'] = 'Odoslať po prihl&aacute;sen&iacute; už&iacute;vateľa do administr&aacute;cie';
$lang['admin']['event_desc_logoutpost'] = 'Odoslať po odhl&aacute;sen&iacute; už&iacute;vateľa z administr&aacute;cie';
$lang['admin']['event_desc_adduserpre'] = 'Odoslať pred vytvoren&iacute;m už&iacute;vateľa';
$lang['admin']['event_desc_adduserpost'] = 'Odoslať po vytvoren&iacute; už&iacute;vateľa';
$lang['admin']['event_desc_edituserpre'] = 'Odoslať pred &uacute;pravou už&iacute;vateľa';
$lang['admin']['event_desc_edituserpost'] = 'Odoslať po &uacute;prave už&iacute;vateľa';
$lang['admin']['event_desc_deleteuserpre'] = 'Odoslať pret odstr&aacute;nen&iacute;m už&iacute;vateľa zo syst&eacute;mu';
$lang['admin']['event_desc_deleteuserpost'] = 'Odoslať po odstr&aacute;nen&iacute; už&iacute;vateľa zo syst&eacute;mu';
$lang['admin']['event_desc_addgrouppre'] = 'Odoslať pred vytvoren&iacute;m skupiny';
$lang['admin']['event_desc_addgrouppost'] = 'Odoslať po vytvoren&iacute; skupiny';
$lang['admin']['event_desc_changegroupassignpre'] = 'Odoslať pred priraden&iacute;m do skupiny';
$lang['admin']['event_desc_changegroupassignpost'] = 'Odoslať po priraden&iacute; do skupiny';
$lang['admin']['event_desc_editgrouppre'] = 'Odoslať pred &uacute;pravou skupiny';
$lang['admin']['event_desc_editgrouppost'] = 'Odoslať po &uacute;prave skupiny';
$lang['admin']['event_desc_deletegrouppre'] = 'Odoslať pred ostr&aacute;nen&iacute;m skupiny zo syst&eacute;mu';
$lang['admin']['event_desc_deletegrouppost'] = 'Odoslať po odstr&aacute;nen&iacute; skupiny zo syst&eacute;mu';
$lang['admin']['event_desc_addstylesheetpre'] = 'Odoslať pred vytvoren&iacute;m &scaron;t&yacute;lu';
$lang['admin']['event_desc_addstylesheetpost'] = 'Odoslať po vytvoren&iacute; &scaron;t&yacute;lu';
$lang['admin']['event_desc_editstylesheetpre'] = 'Odoslať pred edit&aacute;ciou &scaron;t&yacute;lu';
$lang['admin']['event_desc_editstylesheetpost'] = 'Odoslať po edit&aacute;cii &scaron;t&yacute;lu';
$lang['admin']['event_desc_deletestylesheetpre'] = 'Odoslať pre odstr&aacute;nen&iacute; &scaron;t&yacute;lu zo syst&eacute;mu';
$lang['admin']['event_desc_deletestylesheetpost'] = 'Odoslať po odstr&aacute;nen&iacute; &scaron;t&yacute;lu zo syst&eacute;mu';
$lang['admin']['event_desc_addtemplatepre'] = 'Odoslať pred vytvoren&iacute;m novej &scaron;alb&oacute;ny';
$lang['admin']['event_desc_addtemplatepost'] = 'Odoslať po vytvoren&iacute; novej &scaron;abl&oacute;ny';
$lang['admin']['event_desc_edittemplatepre'] = 'Odoslať pred &uacute;pravou &scaron;abl&oacute;ny';
$lang['admin']['event_desc_edittemplatepost'] = 'Odoslať po &uacute;prave &scaron;abl&oacute;ny';
$lang['admin']['event_desc_deletetemplatepre'] = 'Odoslať pred odstr&aacute;nen&iacute;m &scaron;ablony zo syst&eacute;mu';
$lang['admin']['event_desc_deletetemplatepost'] = 'Odoslať po odstr&aacute;nen&iacute; &scaron;abl&oacute;ny zo syst&eacute;mu';
$lang['admin']['event_desc_templateprecompile'] = 'Poslan&eacute; predt&yacute;m ako sa predloha po&scaron;le do smarty na spracovanie';
$lang['admin']['event_desc_templatepostcompile'] = 'Poslan&eacute; potom ako sa predloha spracuje v smarty.';
$lang['admin']['event_desc_addglobalcontentpre'] = 'Odoslať pred vytvoren&iacute;m nov&eacute;ho HTML bloku';
$lang['admin']['event_desc_addglobalcontentpost'] = 'Odoslať po vytvoren&iacute; nov&eacute;ho HTML bloku';
$lang['admin']['event_desc_editglobalcontentpre'] = 'Odoslať pred &uacute;pravou HTML bloku';
$lang['admin']['event_desc_editglobalcontentpost'] = 'Odoslať po &uacute;prave HTML bloku';
$lang['admin']['event_desc_deleteglobalcontentpre'] = 'Odoslať pred odstr&aacute;nen&iacute;m HTML bloku zo syst&eacute;mu';
$lang['admin']['event_desc_deleteglobalcontentpost'] = 'Odoslať po odstr&aacute;nen&iacute; HTML bloku zo syst&eacute;mu';
$lang['admin']['event_desc_globalcontentprecompile'] = 'Poslan&eacute; predt&yacute;m ako sa glob&aacute;lny blok po&scaron;le do smarty na spracovaniePoslať predt&yacute;m ako sa glob&aacute;lny blok po&scaron;le do smarty na spracovanie';
$lang['admin']['event_desc_globalcontentpostcompile'] = 'Poslan&eacute; potom ako sa glob&aacute;lny blok spracuje v smarty.';
$lang['admin']['event_desc_contenteditpre'] = 'Odoslať pred &uacute;pravou obsahu';
$lang['admin']['event_desc_contenteditpost'] = 'Odoslať po &uacute;prave obsahu';
$lang['admin']['event_desc_contentdeletepre'] = 'Odoslať pred odstr&aacute;nen&iacute;m obsahu zo syst&eacute;mu';
$lang['admin']['event_desc_contentdeletepost'] = 'Odoslať po odstr&aacute;nen&iacute; obsahu zo syst&eacute;mu';
$lang['admin']['event_desc_contentstylesheet'] = 'Odoslať pred odoslan&iacute;m &scaron;t&yacute;lu do prehliadača';
$lang['admin']['event_desc_contentprecompile'] = 'Poslan&eacute; predt&yacute;m ako sa obsah po&scaron;le do smarty na spracovanie';
$lang['admin']['event_desc_contentpostcompile'] = 'Poslan&eacute; potom ako sa obsah spracuje v smarty.';
$lang['admin']['event_desc_contentpostrender'] = 'Poslan&eacute; predt&yacute;m ako sa skombinovan&eacute; html po&scaron;le do prehliadača';
$lang['admin']['event_desc_smartyprecompile'] = 'Poslan&eacute; predt&yacute;m ako sa obsah smeruj&uacute;ci do smarty po&scaron;le na spracovanie';
$lang['admin']['event_desc_smartypostcompile'] = 'Poslan&eacute; potom ako sa obsah smeruj&uacute;ci do smarty spracuje.';
$lang['admin']['event_help_loginpost'] = '<p>Poslan&eacute; potom ako sa použ&iacute;vateľ prihl&aacute;si do administr&aacute;torsk&eacute;ho panelu.</p>
<h4>Parametre</h4>
<ul>
<li>&#039;user&#039; - Odkaz na objekt použ&iacute;vateľa, ktor&eacute;ho sa to t&yacute;ka.</li>
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
$lang['admin']['filterbymodule'] = 'Zoradiť podľa modulov';
$lang['admin']['showall'] = 'Zobraziť v&scaron;etky';
$lang['admin']['core'] = 'Z&aacute;kladňa';
$lang['admin']['defaultpagecontent'] = 'Prednastaven&yacute; obsah str&aacute;nok';
$lang['admin']['file_url'] = 'Odkaz na s&uacute;bor (namiesto URL)';
$lang['admin']['no_file_url'] = 'Nič (použiť url vy&scaron;&scaron;ie)';
$lang['admin']['defaultparentpage'] = 'Prednastaven&aacute; nadraden&aacute; str&aacute;nka';
$lang['admin']['error_udt_name_whitespace'] = 'Chyba: Už&iacute;vateľsk&eacute; tagy nem&ocirc;žu mať pr&aacute;zdne medzery v n&aacute;zve.-';
$lang['admin']['warning_safe_mode'] = '<strong><em>Varovanie:</em></strong> PHP Safe mode je zapnut&yacute;. 
Toto sp&ocirc;sob&iacute;  probl&eacute;my s nahr&aacute;van&iacute;m s&uacute;borov cez rozhranie webov&eacute;ho prehliadača, vr&aacute;tane obr&aacute;zkov, t&eacute;m a xml s&uacute;borov. Pre vypnutie Safe mode kontaktujte V&aacute;&scaron;ho  hostingov&eacute;ho spr&aacute;vcu.';
$lang['admin']['test'] = 'Sk&uacute;&scaron;ka';
$lang['admin']['results'] = 'V&yacute;sledky';
$lang['admin']['untested'] = 'Netestovan&eacute;';
$lang['admin']['unknown'] = 'Nezn&aacute;me';
$lang['admin']['download'] = 'Stiahnutie';
$lang['admin']['frontendwysiwygtouse'] = 'Wysiwyg editor na webe (fontend)';
$lang['admin']['all_groups'] = 'V&scaron;etky skupiny';
$lang['admin']['error_type'] = 'Typ chyby';
$lang['admin']['contenttype_errorpage'] = 'Chybn&aacute; str&aacute;nka';
$lang['admin']['errorpagealreadyinuse'] = 'Chybov&yacute; k&oacute;d už je použ&iacute;van&yacute;';
$lang['admin']['404description'] = 'Str&aacute;nka nen&aacute;jden&aacute;';
$lang['admin']['usernotfound'] = 'Už&iacute;vateľ nen&aacute;jden&yacute;';
$lang['admin']['passwordchange'] = 'Pros&iacute;m, zadajte nov&eacute; heslo';
$lang['admin']['recoveryemailsent'] = 'E-mail odoslan&yacute; na zmenu adresy . Pros&iacute;m skontrolujte svoju e-mailov&uacute; schr&aacute;nku.';
$lang['admin']['errorsendingemail'] = 'Prob&eacute;m pri odosielan&iacute; e-mailu.  Kontatujte svojho administr&aacute;tora';
$lang['admin']['passwordchangedlogin'] = 'Heslo zmenen&eacute;. Pros&iacute;m, prihl&aacute;ste sa s nov&yacute;mi prihlasovac&iacute;mi &uacute;dajmi.';
$lang['admin']['nopasswordforrecovery'] = 'Pre tohto použ&iacute;vateľa neexistuje e-mailov&aacute; adresa v datab&aacute;ze. Pros&iacute;m, kontaktujte administr&aacute;tora.';
$lang['admin']['lostpw'] = 'Zabudli ste heslo?';
$lang['admin']['lostpwemailsubject'] = '[%s] Obnovenie hesla';
$lang['admin']['lostpwemail'] = 'Tento e-mail ste dostali na vyžiadanie pre zmenu hesla (%s) pre použ&iacute;vateľa (%s). V pr&iacute;pade, že chcete vygenerovať nov&eacute; heslo, prejdite na odkaz niž&scaron;ie:

%s

V pr&iacute;pade, že ste tento e-mail dostali omylom, pros&iacute;m ignorujte ho.';
$lang['admin']['utma'] = '156861353.1536535213832291000.1248868070.1261493612.1261565925.78';
$lang['admin']['utmz'] = '156861353.1261565925.78.76.utmcsr=dev.cmsmadesimple.org|utmccn=(referral)|utmcmd=referral|utmcct=/project/files/622';
$lang['admin']['qca'] = 'P0-50498788-1250497213598';
$lang['admin']['utmb'] = '156861353.1.10.1261565925';
$lang['admin']['utmc'] = '156861353';
?>