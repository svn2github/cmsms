<?php
$lang['admin']['searchable'] = 'Tato str&aacute;nka je prohled&aacute;vateln&aacute;';
$lang['admin']['help_function_content_image'] = '<h3>Co děl&aacute; tento modul?</h3>
<p>Tento modul povoluje v&yacute;voj&aacute;řům &scaron;ablon vyzvat uživatele k v&yacute;běru obr&aacute;zku při editaci obsahu str&aacute;nky. Chov&aacute; se stejně jako obsahov&yacute; modul pro doplňuj&iacute;c&iacute; obsahov&eacute; bloky..</p>
<h3>Jak tento modul použ&iacute;t??</h3>
<p>Pouze vložte tag do &scaron;ablony: <code>{content_image block=&#039;image1&#039;}</code>.</p>
<h3>Jak&eacute; jsou parametry?</h3>
<ul>
  <li><strong>(vyžadov&aacute;no)</strong> block - Jm&eacute;no tohoto doplňuj&iacute;c&iacute;ho obsahov&eacute;ho bloku.
  <p>Př&iacute;klad:</p>
  <pre>{content_image block=&#039;image1&#039;}</pre><br/>
  </li>

  <li><em>(voliteln&eacute;)</em> label - Jmenovka nebo v&yacute;zva na tento blok v editaci obsahu str&aacute;nky.  Pokud nen&iacute; zad&aacute;n, použije se jm&eacute;no bloku.</li>
 
  <li><em>(voliteln&eacute;)</em> dir - Jm&eacute;no adres&aacute;ře, ze kter&eacute;ho vyb&iacute;rat soubory obr&aacute;zků  (relativn&iacute; k adres&aacute;ři uploads). Pokud nen&iacute; zad&aacute;n, použije se adres&aacute;ř uploads.
  <p>Př&iacute;klad: Použ&iacute;vat obr&aacute;zky z adres&aacute;ře uploads/image.</p>
  <pre>{content_image block=&#039;image1&#039; dir=&#039;images&#039;}</pre><br/>
  </li>

  <li><em>(voliteln&eacute;)</em> class - Jm&eacute;no css tř&iacute;dy pro použit&iacute; v tagu img.</li>

  <li><em>(voliteln&eacute;)</em> id - Jm&eacute;no id pro použit&iacute; v tagu img.</li> 

  <li><em>(voliteln&eacute;)</em> name - Jm&eacute;no tagu pro použit&iacute; v tagu img.</li> 

  <li><em>(voliteln&eacute;)</em> width - Ž&aacute;dan&aacute; &scaron;&iacute;řka obr&aacute;zku.</li>

  <li><em>(voliteln&eacute;)</em> height - Ž&aacute;dan&aacute; v&yacute;&scaron;ka obr&aacute;zku.</li>

  <li><em>(voliteln&eacute;)</em> alt - Alternativn&iacute; text při nenalezen&iacute; obr&aacute;zku.</li>


</ul>';
$lang['admin']['error_udt_name_chars'] = 'A valid UDT name starts with a letter or underscore, followed by any number of letters, numbers, or underscores.';
$lang['admin']['errorupdatetemplateallpages'] = '&Scaron;ablona nen&iacute; aktivn&iacute;';
$lang['admin']['hidefrommenu'] = 'Skr&yacute;t z menu';
$lang['admin']['settemplate'] = 'Nastavit &scaron;ablonu';
$lang['admin']['text_settemplate'] = 'Nastavit vybran&eacute; str&aacute;nky na jinou &scaron;ablonu';
$lang['admin']['cachable'] = 'Lze ke&scaron;ovat';
$lang['admin']['noncachable'] = 'Nelze ke&scaron;ovat';
$lang['admin']['copy_from'] = 'Kop&iacute;rovat z';
$lang['admin']['copy_to'] = 'Kop&iacute;rovat do';
$lang['admin']['copycontent'] = 'Kop&iacute;rovat položku obsahu';
$lang['admin']['md5_function'] = 'md5 funkce';
$lang['admin']['tempnam_function'] = 'tempnam function';
$lang['admin']['register_globals'] = 'PHP register_globals';
$lang['admin']['output_buffering'] = 'PHP output_buffering';
$lang['admin']['disable_functions'] = 'disable_functions in PHP';
$lang['admin']['xml_function'] = 'Z&aacute;kladn&iacute; XML (expat) podpora';
$lang['admin']['magic_quotes_gpc'] = 'Magic quotes pro Get/Post/Cookie';
$lang['admin']['magic_quotes_gpc_on'] = 'Jednoduch&eacute; uvozovky, dvojit&eacute; uvozovky a zpětn&aacute; lom&iacute;tka jsou eskapov&aacute;na automaticky. Můžete m&iacute;t probl&eacute;m při ukl&aacute;d&aacute;n&iacute; &scaron;ablon';
$lang['admin']['magic_quotes_runtime'] = 'Magic quotes v runtime';
$lang['admin']['magic_quotes_runtime_on'] = 'Vět&scaron;ina funkc&iacute; vracej&iacute;c&iacute; data bude m&iacute;t uvozovky eskapov&aacute;ny zpětn&yacute;m lom&iacute;tkem. Můžete s t&iacute;m m&iacute;t probl&eacute;my';
$lang['admin']['file_get_contents'] = 'Testovat file_get_contents';
$lang['admin']['check_ini_set'] = 'Testovat ini_set';
$lang['admin']['check_ini_set_off'] = 'Můžete m&iacute;t pot&iacute;že s nějakou funkcionalitou bez t&eacute;to možnosti. Tento test může selhat pokud m&aacute;te povolen&yacute; safe_mode';
$lang['admin']['file_uploads'] = 'Nahr&aacute;v&aacute;n&iacute; souborů';
$lang['admin']['test_remote_url'] = 'Test pro vzd&aacute;lenou URL';
$lang['admin']['test_remote_url_failed'] = 'Pravděpodobně nebudete moci otevř&iacute;t soubor na vzd&aacute;len&eacute;m webov&eacute;m serveru.';
$lang['admin']['search_string_find'] = 'Připojen&iacute; v poř&aacute;dku!';
$lang['admin']['connection_failed'] = 'Připojen&iacute; selhalo!';
$lang['admin']['notifications_to_handle'] = 'M&aacute;te <b>%d</b> nevyře&scaron;en&yacute;ch upozorněn&iacute;';
$lang['admin']['notification_to_handle'] = 'M&aacute;te <b>%d</b> nevyře&scaron;en&eacute; upozorněn&iacute;';
$lang['admin']['notifications'] = 'Upozorněn&iacute;';
$lang['admin']['dashboard'] = 'Zobrazit Dashboard';
$lang['admin']['ignorenotificationsfrommodules'] = 'Ignorovat upozorněn&iacute; z těchto modulů';
$lang['admin']['admin_enablenotifications'] = 'Povolit zobrazov&aacute;n&iacute; upozorněn&iacute; uživatelům<br/><em>(upozorněn&iacute; budou zobrazov&aacute;na na v&scaron;ech administr&aacute;torsk&yacute;ch str&aacute;nk&aacute;ch)</em>';
$lang['admin']['enablenotifications'] = 'Povolit uživatelsk&aacute; upozorněn&iacute; v administračn&iacute; sekci';
$lang['admin']['test_check_open_basedir_failed'] = 'Na serveru jsou nastavena open_basedir omezen&iacute;. Někter&aacute; roz&scaron;&iacute;řen&iacute; nemus&iacute; fungovat spr&aacute;vně. V př&iacute;padě potřeby se pros&iacute;m obraťte na spr&aacute;vce serveru.';
$lang['admin']['config_writable'] = 'config.php zapisovateln&yacute;. Je mnohem bezpečněj&iacute; změnit pr&aacute;va na pouze pro čten&iacute;';
$lang['admin']['caution'] = 'Pozor';
$lang['admin']['create_dir_and_file'] = 'Kontroluji, zda může webov&yacute; server může vytv&aacute;řet soubory v j&iacute;m založen&eacute;m adres&aacute;ři';
$lang['admin']['os_session_save_path'] = 'Nekontrolov&aacute;no kvůli OS cestě';
$lang['admin']['unlimited'] = 'Neomezen&yacute;';
$lang['admin']['open_basedir'] = 'PHP Open Basedir';
$lang['admin']['open_basedir_active'] = 'Nekontrolov&aacute;no, protože je aktivn&iacute; open_basedir';
$lang['admin']['invalid'] = 'Neplatn&yacute;';
$lang['admin']['checksum_passed'] = 'V&scaron;echny kontroln&iacute; součty odpov&iacute;daj&iacute; těm v nahr&aacute;van&eacute;m souboru';
$lang['admin']['error_retrieving_file_list'] = 'Chyba při z&iacute;sk&aacute;v&aacute;n&iacute; seznamu souborů';
$lang['admin']['files_checksum_failed'] = 'Kontroln&iacute; součet souborů nemůže b&yacute;t zkontrolov&aacute;n';
$lang['admin']['failure'] = 'Chyba';
$lang['admin']['help_function_process_pagedata'] = '<h3>Co děl&aacute; tento modul?</h3>
<p>Tento modul zpracov&aacute;v&aacute; data v bloku &quot;pagedata&quot; obsahov&yacute;ch str&aacute;nek skrz smarty. Povoluje zadat smarty specifick&aacute; data str&aacute;nky bez změny &scaron;ablony pro každou str&aacute;nku.</p>
<h3>Jak se použ&iacute;v&aacute;?</h3>
<ol>
  <li>Vložte smarty proměnn&eacute; a jinou smarty logiku do pole pagedata někter&yacute;ch Va&scaron;ich obsahov&yacute;ch str&aacute;nek.</li>
  <li>Vložte <code>{process_pagedata}</code> tag co možn&aacute; nejv&yacute;&scaron;e do Va&scaron;&iacute; &scaron;ablony str&aacute;nek.</li>
</ol>
<br/>
<h3>Jak&eacute; použ&iacute;v&aacute; parametry?</h3>
<p>Moment&aacute;lně ž&aacute;dn&eacute;</p>';
$lang['admin']['page_metadata'] = 'Metadata specifick&aacute; pro str&aacute;nku';
$lang['admin']['pagedata_codeblock'] = 'Data SMARTY nebo logika, př&iacute;slu&scaron;n&aacute; dan&eacute; str&aacute;nce';
$lang['admin']['error_uploadproblem'] = 'Během nahr&aacute;v&aacute;n&iacute; do&scaron;lo k chybě';
$lang['admin']['error_nofileuploaded'] = 'Ž&aacute;dn&yacute; soubor nebyl nahr&aacute;n';
$lang['admin']['files_failed'] = 'Soubory nevyhovuj&iacute; kontroln&iacute;mu součtu md5sum';
$lang['admin']['files_not_found'] = 'Soubory nebyly nalezeny';
$lang['admin']['info_generate_cksum_file'] = 'Tato funkce slouž&iacute; ke generov&aacute;n&iacute; kontroln&iacute;ho součtu a jeho uložen&iacute; na V&aacute;&scaron; poč&iacute;tač pro pozděj&scaron;&iacute; kontrolu. Ta by měla b&yacute;t provedena bezprostředně před spu&scaron;těn&iacute;m str&aacute;nek, po aktualizac&iacute;ch a podstatn&yacute;ch změn&aacute;ch.';
$lang['admin']['info_validation'] = 'Tato funkce porovn&aacute; kontroln&iacute; součty nalezen&eacute; v nahran&eacute;m souboru se soubory v současn&eacute; instalaci. Může pomoci se zji&scaron;těn&iacute;m probl&eacute;mů při nahr&aacute;v&aacute;n&iacute;, nebo při zji&scaron;ťov&aacute;n&iacute;, kter&eacute; soubory byly pozměněny, pokud byla Va&scaron;e str&aacute;nka hacknuta. Soubor s kontroln&iacute;m součtem je generov&aacute;n pro každou verzi CMS Made Simple od verze 1.4';
$lang['admin']['download_cksum_file'] = 'St&aacute;hnout soubor s kontroln&iacute;m součtem';
$lang['admin']['perform_validation'] = 'Prov&eacute;st ověřen&iacute;';
$lang['admin']['upload_cksum_file'] = 'Nahr&aacute;t soubor s kontroln&iacute;m součtem';
$lang['admin']['checksumdescription'] = 'Zkontrolovat integritu souborů CMS porovn&aacute;n&iacute;m se zn&aacute;m&yacute;mi kontroln&iacute;mi součty';
$lang['admin']['system_verification'] = 'Ověřen&iacute; syst&eacute;mu';
$lang['admin']['extra1'] = 'Extra atribut str&aacute;nky 1';
$lang['admin']['extra2'] = 'Extra atribut str&aacute;nky 2';
$lang['admin']['extra3'] = 'Extra atribut str&aacute;nky 3';
$lang['admin']['start_upgrade_process'] = 'Zah&aacute;jit aktualizaci';
$lang['admin']['warning_upgrade'] = '<em><strong>Varov&aacute;n&iacute;:</strong></em> CMSMS je třeba aktualizovat.';
$lang['admin']['warning_upgrade_info1'] = 'Nyn&iacute; použ&iacute;v&aacute;te datab&aacute;zov&eacute; sch&eacute;ma %s. a mus&iacute;te aktualizovat na sch&eacute;ma %s';
$lang['admin']['warning_upgrade_info2'] = 'Pros&iacute;m klikněte na n&aacute;sleduj&iacute;c&iacute; odkaz: %s.';
$lang['admin']['warning_mail_settings'] = 'Nenastavili jste volby, potřebn&eacute; pro odes&iacute;l&aacute;n&iacute; e-mailů.  Pokud potřebujete odes&iacute;lat e-maily, jděte na str&aacute;nku <a href="moduleinterface.php?module=CMSMailer">Roz&scaron;&iacute;řen&iacute; >> CMSMailer modul</a> a nastavte volby podle &uacute;dajů poskytnut&yacute;ch va&scaron;&iacute;m hostingem.';
$lang['admin']['view_page'] = 'Prohl&eacute;dnout tuto str&aacute;nku v nov&eacute;m okně';
$lang['admin']['off'] = 'Vyp';
$lang['admin']['on'] = 'Zap';
$lang['admin']['invalid_test'] = 'Chybn&aacute; hodnota test param!';
$lang['admin']['copy_paste_forum'] = 'Prohl&eacute;dnout textov&eacute; shrnut&iacute; <em>(vhodn&eacute; pro zkop&iacute;rov&aacute;n&iacute; do př&iacute;spěvků f&oacute;ra)</em>';
$lang['admin']['permission_information'] = 'Informace o opr&aacute;vněn&iacute;ch';
$lang['admin']['server_os'] = 'Operačn&iacute; syst&eacute;m serveru';
$lang['admin']['server_api'] = 'API serveru';
$lang['admin']['server_software'] = 'Software serveru';
$lang['admin']['server_information'] = 'Informace serveru';
$lang['admin']['session_save_path'] = 'Cesta k &uacute;loži&scaron;ti sessions (sessions save path)';
$lang['admin']['max_execution_time'] = 'Maxim&aacute;ln&iacute; doba prov&aacute;děn&iacute;';
$lang['admin']['gd_version'] = 'Verze GD';
$lang['admin']['upload_max_filesize'] = 'Maxim&aacute;ln&iacute; velikost nahr&aacute;van&eacute;ho souboru (Maximum upload size)';
$lang['admin']['post_max_size'] = 'Maxim&aacute;ln&iacute; veilkost dat zas&iacute;lan&yacute;ch metodou POST (Maximum post size)';
$lang['admin']['memory_limit'] = 'Paměťov&yacute; limit v PHP';
$lang['admin']['server_db_type'] = 'Datab&aacute;zov&yacute; server';
$lang['admin']['server_db_version'] = 'Verze datab&aacute;zov&eacute;ho serveru';
$lang['admin']['phpversion'] = 'Současn&aacute; verze PHP';
$lang['admin']['safe_mode'] = 'Safe_mode v PHP';
$lang['admin']['php_information'] = 'Informace PHP';
$lang['admin']['cms_install_information'] = 'Informace o instalaci CMS';
$lang['admin']['cms_version'] = 'Verze CMS';
$lang['admin']['installed_modules'] = 'Nainstalovan&eacute; moduly';
$lang['admin']['config_information'] = 'Informace o konfiguraci';
$lang['admin']['systeminfo_copy_paste'] = 'Pros&iacute;m zkop&iacute;rujte tyto informace a vložte je do sv&eacute;ho dotazu ve f&oacute;ru';
$lang['admin']['help_systeminformation'] = 'Informace zobrazen&eacute; n&iacute;že poch&aacute;zej&iacute; z mnoha zdrojů. Na jejich z&aacute;kladě můžete l&eacute;pe přij&iacute;t na př&iacute;činu probl&eacute;mů s instalac&iacute; CMSMS, př&iacute;padně l&eacute;pe informovat ty, kteř&iacute; by v&aacute;m mohli pomoci (např. ve f&oacute;ru CMSMS)';
$lang['admin']['systeminfo'] = 'Informace o syst&eacute;mu';
$lang['admin']['systeminfodescription'] = 'Zobraz&iacute; různ&eacute; informace o syst&eacute;mu, kter&eacute; mohou b&yacute;t užitečn&eacute; při zji&scaron;ťov&aacute;n&iacute; probl&eacute;mů.';
$lang['admin']['welcome_user'] = 'V&iacute;tejte';
$lang['admin']['itsbeensincelogin'] = 'Je to %s od Va&scaron;eho posledn&iacute;ho přihl&aacute;&scaron;en&iacute;';
$lang['admin']['days'] = 'dn&iacute;';
$lang['admin']['day'] = 'den';
$lang['admin']['hours'] = 'hodin';
$lang['admin']['hour'] = 'hodina';
$lang['admin']['minutes'] = 'minuty';
$lang['admin']['minute'] = 'minuta';
$lang['admin']['help_css_max_age'] = 'Tento parametr by měl b&yacute;t nastaven relativně vysoko pro statick&eacute; str&aacute;nky a na 0 pro v&yacute;voj str&aacute;nek';
$lang['admin']['css_max_age'] = 'Maxim&aacute;ln&iacute; doba (vteřiny), po kterou může b&yacute;t styl ke&scaron;ov&aacute;n v prohl&iacute;žeči';
$lang['admin']['error'] = 'Chyba';
$lang['admin']['clear_version_check_cache'] = 'Vymazat cache, použ&iacute;vanou při zji&scaron;ťov&aacute;n&iacute; nov&eacute; verze (použit&iacute; čerstv&yacute;ch informac&iacute; ze serveru)';
$lang['admin']['new_version_available'] = '<em>Pozn&aacute;mka:</em> Je dostupn&aacute; nov&aacute; verze CMS Made Simple. Pros&iacute;m dejte to vědět administr&aacute;torovi.';
$lang['admin']['info_urlcheckversion'] = 'Pokud je adresa nastavena na &quot;none&quot;, nebudou kontroly prov&aacute;děny.<br/>Při pr&aacute;zdn&eacute;m řetězci bude použita v&yacute;choz&iacute; adresa.';
$lang['admin']['urlcheckversion'] = 'Adresa, pomoc&iacute; kter&eacute; bude kontrolov&aacute;na dostupnost nov&yacute;ch verz&iacute; CMSMS.';
$lang['admin']['master_admintheme'] = 'V&yacute;choz&iacute; t&eacute;ma administračn&iacute;ho rozhran&iacute; (pro přihla&scaron;ovac&iacute; str&aacute;nku a nov&eacute;ho uživatele)';
$lang['admin']['contenttype_separator'] = 'Oddělovač';
$lang['admin']['contenttype_sectionheader'] = 'Nadpis sekce';
$lang['admin']['contenttype_link'] = 'Extern&iacute; odkaz';
$lang['admin']['contenttype_content'] = 'Obsah';
$lang['admin']['contenttype_pagelink'] = 'Odkaz na jinou str&aacute;nku webu';
$lang['admin']['nogcbwysiwyg'] = 'Zak&aacute;zat WYSIWYG editaci HTML bloků';
$lang['admin']['destination_page'] = 'C&iacute;lov&aacute; str&aacute;nka';
$lang['admin']['additional_params'] = 'Dal&scaron;&iacute; parametry';
$lang['admin']['help_function_current_date'] = '	<h3>Co děl&aacute; tato funkce?</h3>
	<p>Tato funkce bude při vložen&iacute; nahrazena aktu&aacute;ln&iacute;m datem a časem. Pokud nen&iacute; ud&aacute;n ž&aacute;dn&yacute; form&aacute;t, bude v&yacute;stup vypadat podobně jako: &#039;Jan 01, 2004&#039;.</p>
	<h3>Jak tuto funkci použ&iacute;t??</h3>
	<p>Vložte tag do Va&scaron;&iacute; &scaron;ablony/str&aacute;nky:: <code>{current_date format=&quot;%A %d-%b-%y %T %Z&quot;}</code></p>
	<h3>Jak&eacute; m&aacute; parametry?</h3>
	<ul>
		<li><em>(voliteln&eacute;)</em>format - form&aacute;t data/času použ&iacute;vaj&iacute;c&iacute; parametry ze strftime funkce php.  Viz. <a href="http://php.net/strftime" target="_blank">zde</a> pro seznam parametrů a informace.</li>
		<li><em>(voliteln&eacute;)</em>ucword - Při true nastavuje velk&eacute; p&iacute;smeno u každ&eacute;ho slova.</li>
	</ul>
	</p>';
$lang['admin']['help_function_valid_xhtml'] = '<h3>Co děl&aacute; tato funkce?</h3>
<p>Vyp&iacute;&scaron;e odkaz na W3C valid&aacute;tor.</p>
<h3>Jak tuto funkci použ&iacute;t?</h3>
<p>Vložte tento k&oacute;d do str&aacute;nky či &scaron;ablony: <code>{valid_xhtml}</code></p>
<h3>Jak&eacute; parametry lze použ&iacute;t?</h3>
<p>
    <ul>
	<li><em>(voliteln&eacute;)</em> url         (string)     - URL použit&eacute; pro validaci, pokud nen&iacute; zad&aacute;no, použije se http://validator.w3.org/check/referer.</li>
	<li><em>(voliteln&eacute;)</em> class       (string)     - Pokud je nastaven, bude použit jako atribut tř&iacute;dy pro odkazov&yacute; (a) element</li>
	<li><em>(voliteln&eacute;)</em> target      (string)     - Pokud je nastaven, bude použit jako c&iacute;lov&yacute; atribut pro odkazov&yacute; (a) element</li>
	<li><em>(voliteln&eacute;)</em> image       (true/false) - Pokud je nastaven na false, bude použit textov&yacute; odkaz m&iacute;sto obr&aacute;zku/ikony.</li>
	<li><em>(voliteln&eacute;)</em> text        (string)     - Pokud je nastaven, bude použit pro text odkazu nebo alternativn&iacute; text u obr&aacute;zku. V&yacute;choz&iacute; je &#039;valid XHTML 1.0 Transitional&#039;.<br /> Při použit&iacute; obr&aacute;zku, zadan&yacute; string bude použit pro alt atribut obr&aacute;zku (v&yacute;choz&iacute;, lze potlačit použit&iacute;m parametru &#039;alt&#039;).</li>
	<li><em>(voliteln&eacute;)</em> image_class (string)     - Pouze pokud &#039;image&#039; nen&iacute; nastaven na false. Pokud je nastaven, bude použit jako atribut tř&iacute;dy pro element obr&aacute;zku (img)</li>
	<li><em>(voliteln&eacute;)</em> src         (string)     - Pouze pokud &#039;image&#039; nen&iacute; nastaven na false. Ikona pro zobrazen&iacute;. V&yacute;choz&iacute; je http://www.w3.org/Icons/valid-xhtml10</li>
	<li><em>(voliteln&eacute;)</em> width       (string)     - Pouze pokud &#039;image&#039; nen&iacute; nastaven na false. &Scaron;&iacute;řka obr&aacute;zku. V&yacute;choz&iacute; je 88 (&scaron;&iacute;řka http://www.w3.org/Icons/valid-xhtml10)</li>
	<li><em>(voliteln&eacute;)</em> height      (string)     - Pouze pokud &#039;image&#039; nen&iacute; nastaven na false. V&yacute;&scaron;ka obr&aacute;zku. V&yacute;choz&iacute; je 31 (v&yacute;&scaron;ka http://www.w3.org/Icons/valid-xhtml10)</li>
	<li><em>(voliteln&eacute;)</em> alt         (string)     - Pouze pokud &#039;image&#039; nen&iacute; nastaven na false. Alternativn&iacute; text (atribut &#039;alt&#039;) pro image (element). Pokud nen&iacute; zad&aacute;no je použit text odkazu.</li>
    </ul>
</p>';
$lang['admin']['help_function_valid_css'] = '<h3>Co děl&aacute; tato funkce?</h3>
<p>Vyp&iacute;&scaron;e odkaz na W3C CSS valid&aacute;tor.</p>
<h3>Jak tuto funkci použ&iacute;t?</h3>
<p>Vložte tento k&oacute;d do &scaron;ablony/str&aacute;nky: <code>{valid_css}</code></p>
<h3>Jak&eacute; parametry lze použ&iacute;t?</h3>
<p>
    <ul>
        <li><em>(voliteln&eacute;)</em> url         (string)     - URL použit&aacute; pro kontrolu, pokud nen&iacute; zad&aacute;na, použije se http://jigsaw.w3.org/css-validator/check/referer .</li>
	<li><em>(voliteln&eacute;)</em> class       (string)     - Pokud je nastaven, bude použit jako atribut tř&iacute;dy pro odkazov&yacute; (a) element</li>
	<li><em>(voliteln&eacute;)</em> target      (string)     - Pokud je nastaven, bude použit jako c&iacute;lov&yacute; atribut pro odkazov&yacute; (a) element</li>
	<li><em>(voliteln&eacute;)</em> image       (true/false) - Pokud je nastaven na false, bude použit textov&yacute; odkaz m&iacute;sto obr&aacute;zku/ikony.</li>
	<li><em>(voliteln&eacute;)</em> text        (string)     - Pokud je nastaven, bude použit pro text odkazu nebo alternativn&iacute; text u obr&aacute;zku. V&yacute;choz&iacute; je &#039;Valid CSS 2.1&#039;.<br /> Při použit&iacute; obr&aacute;zku, zadan&yacute; string bude použit pro alt atribut obr&aacute;zku (v&yacute;choz&iacute;, lze potlačit použit&iacute;m parametru &#039;alt&#039;).</li>
	<li><em>(voliteln&eacute;)</em> image_class (string)     - Pouze pokud &#039;image&#039; nen&iacute; nastaven na false. Pokud je nastaven, bude použit jako atribut tř&iacute;dy pro element obr&aacute;zku (img)</li>
	<li><em>(voliteln&eacute;)</em> src         (string)     - Pouze pokud &#039;image&#039; nen&iacute; nastaven na false. Ikona pro zobrazen&iacute;. V&yacute;choz&iacute; je http://jigsaw.w3.org/css-validator/images/vcss</li>
	<li><em>(voliteln&eacute;)</em> width       (string)     - Pouze pokud &#039;image&#039; nen&iacute; nastaven na false. &Scaron;&iacute;řka obr&aacute;zku. V&yacute;choz&iacute; je 88 (&scaron;&iacute;řka http://jigsaw.w3.org/css-validator/images/vcss)</li>
	<li><em>(voliteln&eacute;)</em> height      (string)     - Pouze pokud &#039;image&#039; nen&iacute; nastaven na false. V&yacute;&scaron;ka obr&aacute;zku. V&yacute;choz&iacute; je 31 (v&yacute;&scaron;ka http://jigsaw.w3.org/css-validator/images/vcss)</li>
	<li><em>(voliteln&eacute;)</em> alt         (string)     - Pouze pokud &#039;image&#039; nen&iacute; nastaven na false. Alternativn&iacute; text (atribut &#039;alt&#039;) pro image (element). Pokud nen&iacute; zad&aacute;no je použit text odkazu.</li>
    </ul>
</p>';
$lang['admin']['help_function_title'] = '	<h3>Co děl&aacute; tato funkce?</h3>
	<p>Vytiskne titulek str&aacute;nky.</p>
	<h3>Jak tuto funkci použ&iacute;t?</h3>
	<p>Pouze vložte tak do Va&scaron;&iacute; &scaron;ablony/str&aacute;nky jako: <code>{title}</code></p>
	<h3>Jak&eacute; parametry lze použ&iacute;t?</h3>
	<p><em>(voliteln&eacute;)</em> assign (string) - Přiřad&iacute; v&yacute;sledky smarty proměnn&eacute; s t&iacute;mto jm&eacute;nem.</p>';
$lang['admin']['help_function_stylesheet'] = '	<h3>Co děl&aacute; tato funkce?</h3>
	<p>Z&iacute;sk&aacute; ze syst&eacute;mu informace o stylu. V&yacute;choz&iacute; je stažen&iacute; v&scaron;ech stylů připojen&yacute;ch do aktu&aacute;ln&iacute; &scaron;ablony.</p>
	<h3>Jak tuto funkci použ&iacute;t?</h3>
	<p>Pouze vložte tag do Va&scaron;&iacute; &scaron;ablony/head sekce str&aacute;nky jako: <code>{stylesheet}</code></p>
	<h3>Jak&eacute; parametry lze použ&iacute;t?</h3>
	<ul>
		<li><em>(voliteln&eacute;)</em>name - M&iacute;sto z&iacute;sk&aacute;n&iacute; v&scaron;ech stylů pro danou str&aacute;nku, z&iacute;sk&aacute; jen jeden tohoto jm&eacute;na, ať je k dan&eacute; &scaron;abloně připojen nebo ne.</li>
		<li><em>(voliteln&eacute;)</em>media - Pokud je zadan&eacute; jm&eacute;no, povol&iacute; nastavit jin&yacute; typ media pro tento styl.</li>
	</ul>
	</p>';
$lang['admin']['help_function_stopexpandcollapse'] = '	<h3>Co děl&aacute; tato funkce?</h3>
	<p>Umožňuje rozbaliteln&yacute; a sbaliteln&yacute; obsah. Jako n&aacute;sleduj&iacute;c&iacute;:<br />
	<a href="#expand1" onClick="expandcontent(&#039;expand1&#039;)" style="cursor:hand; cursor:pointer">Klikněte zde pro v&iacute;ce informac&iacute;</a><span id=&quot;expand1&quot; class=&quot;expand&quot;><a name="help"></a> - Zde jsou v&scaron;echny informace, kter&eacute; budete kdy potřebovat...</a></span></p>

	<h3>Jak tuto funkci použ&iacute;t?</h3>
	<p>Pouze vložte tag do Va&scaron;&iacute; &scaron;ablony/str&aacute;nky, jako např.:<br />
	<br />
	<code>{startExpandCollapse id=&quot;name&quot; title=&quot;Klikněte zde&quot;}<br />
	Tento obsah uživatel uvid&iacute;  po kliknut&iacute; na titulek &quot;Klikněte zde&quot; v&yacute;&scaron;e. Zobraz&iacute; se ve&scaron;ker&yacute; obsah mezi {startExpandCollapse} a {stopExpandCollapse}.<br />
	{stopExpandCollapse}
	</code>
	<br />
	<br />
	Pozn&aacute;mka: Pokud zam&yacute;&scaron;l&iacute;te použ&iacute;t tuto funkci v&iacute;cekr&aacute;t na jedn&eacute; str&aacute;nce, každ&yacute; tag startExpandCollapse mus&iacute; m&iacute;t jedinečn&eacute; id.</p>
	<h3>Co kdyz chci změnit vzhled titulku?</h3>
	<p>Vzhled titulku může b&yacute;t měněn pomoc&iacute; css. Titulek je zabalen do div s v&aacute;mi specifikovan&yacute;m id.</p>

	<h3>Jak&eacute; lze použ&iacute;t parametry?</h3>
	<p>
	<i>startExpandCollapse použ&iacute;v&aacute; n&aacute;sleduj&iacute;c&iacute; parametry</i><br />
	&nbsp; &nbsp;id - Unik&aacute;tn&iacute; id pro č&aacute;st rozbalen&iacute;/sbalen&iacute;.<br />
	&nbsp; &nbsp;title - Text zobrazen&yacute; pro rozbalen&iacute;/sbalen&iacute; obsahu.<br />
	<i>stopExpandCollapse nem&aacute; ž&aacute;dn&eacute; parametry</i><br />
	</p>';
$lang['admin']['help_function_startexpandcollapse'] = '	<h3>Co děl&aacute; tato funkce?</h3>
	<p>Umožňuje rozbaliteln&yacute; a sbaliteln&yacute; obsah. Jako n&aacute;sleduj&iacute;c&iacute;:<br />
	<a href="#expand1" onClick="expandcontent(&#039;expand1&#039;)" style="cursor:hand; cursor:pointer">Click here for more info</a><span id=&quot;expand1&quot; class=&quot;expand&quot;><a name="help"></a> - Zde jsou v&scaron;echny informace, kter&eacute; budete kdy potřebovat...</a></span></p>

	<h3>Jak tuto funkci použ&iacute;t?</h3>
	<p>Pouze vložte tag do Va&scaron;&iacute; &scaron;ablony/str&aacute;nky, jako např.: <code>{startExpandCollapse id=&quot;name&quot; title=&quot;Klikněte zde&quot;}</code>. Mus&iacute;te tak&eacute; použ&iacute;t {stopExpandCollapse} na konci sbaliteln&eacute;ho obsahu. Zde je př&iacute;klad:<br />
	<br />
	<code>{startExpandCollapse id=&quot;name&quot; title=&quot;Klikněte zde&quot;}<br />
	Tento obsah uživatel uvid&iacute;  po kliknut&iacute; na titulek &quot;Klikněte zde&quot; v&yacute;&scaron;e. Zobraz&iacute; se ve&scaron;ker&yacute; obsah mezi {startExpandCollapse} a {stopExpandCollapse}.<br />
	{stopExpandCollapse}
	</code>
	<br />
	<br />
	Pozn&aacute;mka: Pokud zam&yacute;&scaron;l&iacute;te použ&iacute;t tuto funkci v&iacute;cekr&aacute;t na jedn&eacute; str&aacute;nce, každ&yacute; tag startExpandCollapse mus&iacute; m&iacute;t jedinečn&eacute; id.</p>
	<h3>Co kdyz chci změnit vzhled titulku?</h3>
	<p>Vzhled titulku může b&yacute;t měněn pomoc&iacute; css. Titulek je zabalen do div s v&aacute;mi specifikovan&yacute;m id.</p>

	<h3>Jak&eacute; lze použ&iacute;t parametry?</h3>
	<p>
	<i>startExpandCollapse použ&iacute;v&aacute; n&aacute;sleduj&iacute;c&iacute; parametry</i><br />
	&nbsp; &nbsp;id - Unik&aacute;tn&iacute; id pro č&aacute;st rozbalen&iacute;/sbalen&iacute;.<br />
	&nbsp; &nbsp;title - Text zobrazen&yacute; pro rozbalen&iacute;/sbalen&iacute; obsahu..<br />
	<i>stopExpandCollapse nem&aacute; ž&aacute;dn&eacute; parametry</i><br />
	</p>';
$lang['admin']['help_function_sitemap'] = '    <h3>Varov&aacute;n&iacute;</h3>
    <p>Tento modul je zastaral&yacute;. Uživatel&eacute; by se měli pod&iacute;vat na modul <code>{site_mapper}</code> plugin.</p>
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
$lang['admin']['help_function_adsense'] = '	<h3>Co děl&aacute; tento modul?</h3>
	<p>Google adsense je popul&aacute;rn&iacute; reklamn&iacute; program na webov&yacute;ch str&aacute;nk&aacute;ch. Tento tag přeb&iacute;r&aacute; z&aacute;kladn&iacute; parametry poskytovan&eacute; adsense programem a vkl&aacute;d&aacute; je do jednodu&scaron;e použiteln&eacute;ho tagu, kter&yacute; děl&aacute; vzhled Va&scaron;ich &scaron;ablon mnohem přehledněj&scaron;&iacute;..  Pro v&iacute;ce detailů jděte <a href="http://www.google.com/adsense" target="_blank">sem</a>.</p>
	<h3>Jak se použ&iacute;v&aacute;?</h3>
	<p>Nejprve si zaregistrujte adsense &uacute;čet a st&aacute;hněte paramety pro Va&scaron;e reklamy.  Pot&eacute; jen vložte tag do &scaron;ablony/str&aacute;nky jako: <code>{adsense ad_client=&quot;pub-random#&quot; ad_width=&quot;120&quot; ad_height=&quot;600&quot; ad_format=&quot;120x600_as&quot;}</code>
	<h3>Jak&eacute; parametry se daj&iacute; použ&iacute;t?</h3>
	<p>V&scaron;echny parametry jsou voliteln&eacute;, ale jejich vynech&aacute;n&iacute; nemus&iacute; znamenat, že reklamy budou fungovat spr&aacute;vně. Volby jsou:
	<ul>
		<li>ad_client - Toto bude pub_random# id, kter&eacute; reprezentuje V&aacute;&scaron;e adsence č&iacute;slo &uacute;čtu</li>
		<li>ad_width - &scaron;&iacute;řka reklamy</li>
		<li>ad_height - v&yacute;&scaron;ka reklamy</li>
		<li>ad_format - &quot;format&quot; reklamy <em>např. 120x600_as</em></li>
		<li>ad_channel - kan&aacute;ly jsou roz&scaron;&iacute;řen&eacute; vlastnosti adsense. Vložte je zde pokud je použ&iacute;v&aacute;te.</li>
		<li>ad_type - možn&eacute; volby jsou text, image or text_image.</li>
		<li>color_border - barva ohraničen&iacute;. Použijte HEX barvu nebo jm&eacute;no barvy (např. Red)</li>
		<li>color_link - barva textu odkazu. Použijte HEX barvu nebo jm&eacute;no barvy (např. Red)</li>
		<li>color_url - barva URL.Použijte HEX barvu nebo jm&eacute;no barvy (např. Red)</li>
		<li>color_text - barva textu. Použijte HEX barvu nebo jm&eacute;no barvy (např. Red)</li>
	</ul>
	</p>';
$lang['admin']['help_function_sitename'] = '        <h3>Co děl&aacute; tato funkce?</h3>
        <p>Zobraz&iacute; jm&eacute;no str&aacute;nek.  Je definov&aacute;no během instalace a může b&yacute;t změněno v sekci Hlavn&iacute; nastaven&iacute; v administračn&iacute;m panelu.</p>
        <h3>Jak ji použ&iacute;t?</h3>
        <p>Pouze vložte tad do &scaron;ablony/str&aacute;nky, jako např.: <code>{sitename}</code></p>
        <h3>Jak&eacute; jsou parametry?</h3>
	<p><em>(voliteln&eacute;)</em> assign (string) - Přiřadit v&yacute;sledek ke smarty proměnn&eacute; dan&eacute;ho jm&eacute;na.</p>';
$lang['admin']['help_function_search'] = '	<h3>Co děl&aacute; tato funkce?</h3>
	<p>Toto je pouze obalovac&iacute; tag pro <a href="listmodules.php?action=showmodulehelp&amp;module=Search">Modul vyhled&aacute;v&aacute;n&iacute;</a> pro zjednodu&scaron;en&iacute; syntaxe. 
	M&iacute;sto nutnosti použit&iacute; <code>{cms_module module=&#039;Search&#039;}</code> můžete použ&iacute;t pouze <code>{search}</code> pro vložen&iacute; modulu do &scaron;ablony.
	</p>
	<h3>Jak ji použ&iacute;t?</h3>
	<p>Pouze vložte <code>{search}</code> do &scaron;ablony tak, kde chcete m&iacute;t vyhled&aacute;vac&iacute; ok&eacute;nko. Pro pomoc s vyhled&aacute;vac&iacute;m modulem, jděte na <a href="listmodules.php?action=showmodulehelp&amp;module=Search">N&aacute;pověda modulu Vyhled&aacute;v&aacute;n&iacute;</a>.';
$lang['admin']['help_function_root_url'] = '	<h3>Co děl&aacute; tato funkce?</h3>
	<p>Vyp&iacute;&scaron;e kořenov&yacute; url pro str&aacute;nky.</p>
	<h3>Jak ji použ&iacute;t?</h3>
	<p>Pouze vložte tag do &scaron;ablony/str&aacute;nky, jako např.: <code>{root_url}</code></p>
	<h3>Jak&eacute; jsou parametry?</h3>
	<p>Zat&iacute;m ž&aacute;dn&eacute;.</p>';
$lang['admin']['help_function_repeat'] = '  <h3>Co děl&aacute; tato funkce?</h3>
  <p>Opakuje zadan&eacute; pořad&iacute; znaků po zadan&yacute; počet opakov&aacute;n&iacute;</p>
  <h3>Jak ji použ&iacute;t?</h3>
  <p>Vložte do &scaron;ablony/str&aacute;nky podobn&yacute; n&aacute;sleduj&iacute;c&iacute;mu: <code>{repeat string=&#039;opakuj toto &#039; times=&#039;3&#039;}</code>
  <h3>Jak&eacute; použ&iacute;v&aacute; parametry?</h3>
  <ul>
  <li>string=&#039;text&#039; - Text pro opakov&aacute;n&iacute;</li>
  <li>times=&#039;num&#039; - Počet opakov&aacute;n&iacute;.</li>
  </ul>';
$lang['admin']['help_function_recently_updated'] = '	<h3>Co děl&aacute; tato funkce?</h3>
	<p>Vyp&iacute;&scaron;e seznam naposledy upraven&yacute;ch str&aacute;nek.</p>
	<h3>Jak ji použ&iacute;t?</h3>
	<p>Pouze vložte do &scaron;ablony/str&aacute;nky tag: <code>{recently_updated}</code></p>
	<h3>Jak&eacute; použ&iacute;v&aacute; parametry?</h3>
	<ul>
	 <li><p><em>(voliteln&eacute;)</em> number=&#039;10&#039; - Počet aktualizovan&yacute;ch str&aacute;nek k zobrazen&iacute;.</p><p>Př&iacute;klad: <pre>{recently_updated number=&#039;15&#039;}</pre></p></li>
 	 <li><p><em>(voliteln&eacute;)</em> leadin=&#039;Naposledy upraveno&#039; - Text zobrazen&yacute; vlevo od data &uacute;pravy.</p><p>Př&iacute;klad: <pre>{recently_updated leadin=&#039;Naposledy změněno&#039;}</pre></p></li>
 	 <li><p><em>(voliteln&eacute;)</em> showtitle=&#039;true&#039; - Zobraz&iacute; titleattribute pokud existuje (true|false).</p><p>Př&iacute;klad: <pre>{recently_updated showtitle=&#039;true&#039;}</pre></p></li>											 	
	 <li><p><em>(voliteln&eacute;)</em> css_class=&#039;some_name&#039; - Obal&iacute; div tag tohoto seznamu.</p><p>Př&iacute;klad: <pre>{recently_updated css_class=&#039;some_name&#039;}</pre></p></li>											 	
	 <li><p><em>(voliteln&eacute;)</em> dateformat=&#039;d.m.y h:m&#039; - default is d.m.y h:m , použije form&aacute;t, jak&yacute; si přejete (php -date- format)</p><p>Př&iacute;klad: <pre>{recently_updated dateformat=&#039;D M j G:i:s T Y&#039;}</pre></p></li>											 	
	</ul>
	<p>nebo kombinace:</p>
	<pre>{recently_updated number=&#039;15&#039; showtitle=&#039;false&#039; leadin=&#039;Naposledy změněno: &#039; css_class=&#039;my_changes&#039; dateformat=&#039;D M j G:i:s T Y&#039;}</pre>';
$lang['admin']['help_function_print'] = '	<h3>Co děl&aacute; tento modul?</h3>
	<p>Je to v podstatě jen obalovac&iacute; tag pro <a href="listmodules.php?action=showmodulehelp&amp;module=Printing">modul Tisk</a> pro zjednodu&scaron;en&iacute; syntaxe. 
	M&iacute;sto nutnosti použit&iacute; <code>{cms_module module=&#039;Printing&#039;}</code> můžete nyn&iacute; použ&iacute;t <code>{print}</code> pro vložen&iacute; modulu do str&aacute;nek a &scaron;ablon.
	</p>
	<h3>Jak ho použ&iacute;t?</h3>
	<p>Pouze vložte <code>{print}</code> do str&aacute;nky nebo &scaron;ablony. Pro n&aacute;povědu k modulu Tisk jděte na <a href="listmodules.php?action=showmodulehelp&amp;module=Printing">N&aacute;pověda modulu Tisk</a>.';
$lang['admin']['help_function_oldprint'] = '	<h3>Co děl&aacute; tento modul?</h3>
	<p>Vytv&aacute;ř&iacute; odkaz pouze na obsah str&aacute;nky.</p>
	<h3>Jak ho použ&iacute;t?</h3>
	<p>Pouze vložte tag do do &scaron;ablony/str&aacute;nky: <code>{oldprint}</code><br></p>
        <h3>Jak&eacute; jsou parametry?</h3>
        <ul>
                <li><em>(voliteln&eacute;)</em> goback - Nastavte na &quot;true&quot; pro zobrazen&iacute; odkazu &quot;J&iacute;t zpět&quot; na str&aacute;nce.</li>
                <li><em>(voliteln&eacute;)</em> popup - Nastavte na &quot;true&quot; a str&aacute;nka pro tisk bude otevřena v nov&eacute;m okně.</li>
                <li><em>(voliteln&eacute;)</em> script - Nastavte na &quot;true&quot; a ve str&aacute;nce pro tisk bude použit javascript pro vyti&scaron;těn&iacute; str&aacute;nky.</li>
                <li><em>(voliteln&eacute;)</em> showbutton - Nastavte na &quot;true&quot; a bude zobrazena grafika tisk&aacute;rny m&iacute;sto textov&eacute;ho odkazu.</li>
                <li><em>(voliteln&eacute;)</em> class - tř&iacute;da pro odkaz, v&yacute;choz&iacute; je &quot;noprint&quot;.</li>
                <li><em>(voliteln&eacute;)</em> text - Text odkazu na tisk pro použit&iacute; m&iacute;sto &quot;Vytisknout tuto str&aacute;nku&quot;.
                <li><em>(voliteln&eacute;)</em> title - Text pro zobrazen&iacute; atributu titulku. Pokud je pr&aacute;zdn&yacute;, zobraz&iacute; se parametry textu.</li>
                <li><em>(voliteln&eacute;)</em> more - Vložit dodatečn&eacute; volby do <a> odkazu.</li>
                <li><em>(voliteln&eacute;)</em> src_img - Zobrazit tento obr&aacute;zek. V&yacute;choz&iacute; images/cms/printbutton.gif.</li>
                <li><em>(voliteln&eacute;)</em> class_img - Tř&iacute;da <img> tagu pokud je nastaven showbutton.</li>

                    <p>Př&iacute;klad:</p>
                     <pre>{oldprint text=&quot;Tisknuteln&aacute; str&aacute;nka&quot;}</pre>      
                     </li>
        </ul>';
$lang['admin']['login_info_title'] = 'Informace';
$lang['admin']['login_info'] = 'Pro spr&aacute;vnou funkci administr&aacute;torsk&eacute; konzole';
$lang['admin']['login_info_params'] = '<ol> 
  <li>Cookies povoleny ve Va&scaron;em prohl&iacute;žeči</li> 
  <li>Javascript povolen&yacute; ve Va&scaron;em prohl&iacute;žeči</li> 
  <li>Popup okna aktivn&iacute; pro n&aacute;sleduj&iacute;c&iacute; adresy::</li> 
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
$lang['admin']['help_function_iamge'] = '  <h3>What does this do?</h3>
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
$lang['admin']['about_function_anchor'] = '	<p>Autor: Ted Kulp<tedkulp@users.sf.net></p>
	<p>Verze: 1.1</p>
	<p>
	Historie změn:<br/>
	<strong>Update to version 1.1 from 1.0</strong> <em>2006/07/19</em><br/>
	Russ added the means to insert a title, a tabindex and a class for the anchor link. Westis added accesskey and changed parameter names to not include &#039;anchorlink&#039;.<br/>
	</hr>
	</p>';
$lang['admin']['help_function_anchor'] = '	<h3>Co děl&aacute; tato funkce?</h3>
	<p>Vytv&aacute;ř&iacute; n&aacute;ležit&eacute; ukotven&eacute; odkazy.</p>
	<h3>Jak ji použ&iacute;t?</h3>
	<p>Pouze vložte tag do &scaron;ablony/str&aacute;nky: <code>{anchor anchor=&#039;here&#039; text=&#039;Posunout dolů&#039;}</code></p>
	<h3>Jak&eacute; jsou parametry?</h3>
	<p>
	<ul>
	<li><tt>anchor</tt> - Kam odkazujeme.  Č&aacute;st za #.</li>
	<li><tt>text</tt> - Text k zobrazen&iacute; v odkazu.</li>
	<li><tt>class</tt> - Tř&iacute;da pro odkaz, pokud je nějak&yacute;</li>
	<li><tt>title</tt> - Titulek pro zobrazen&iacute; odkazu, pokud je nějak&yacute;.</li>
	<li><tt>tabindex</tt> - Č&iacute;seln&yacute; tabindex odkazu, pokud je nějak&yacute;.</li>
	<li><tt>accesskey</tt> - Př&iacute;stupov&aacute; kl&aacute;vesa odkazu, pokud je nějak&aacute;.</li>
	<li><em>(voliteln&eacute;)</em> <tt>onlyhref</tt> - Zobrazit pouze href, ne cel&yacute; odkaz. Jin&eacute; volby nebudou fungovat</li>
	</ul>
	</p>';
$lang['admin']['help_function_site_mapper'] = '<h3>Co děl&aacute; tato funkce?</h3>
  <p>Toto je pouze obalovac&iacute; tag pro <a href="listmodules.php?action=showmodulehelp&amp;module=MenuManager">modul Menu Manager</a> pro zjednodu&scaron;en&iacute; syntaxe a vytv&aacute;řen&iacute; mapy str&aacute;nek.</p>
<h3>Jak ji použ&iacute;t?</h3>
  <p>Vložte <code>{site_mapper}</code> do str&aacute;nky nebo &scaron;ablony. Pro n&aacute;povědu k modulu Menu Manager jděte na <a href="listmodules.php?action=showmodulehelp&amp;module=MenuManager">N&aacute;pověda modulu Menu Manager</a>.</p>
  <p>Pokud nen&iacute; vybr&aacute;na &scaron;ablona, je použit minimal_menu.tpl.</p>
  <p>Jak&eacute;koliv parametry použit&eacute; v tagu jsou dostupn&eacute; v &scaron;abloně menumanager <code>{$menuparams.paramname}</code></p>';
$lang['admin']['help_function_redirect_url'] = '<h3>Co děl&aacute; tento modul?</h3>
  <p>Tento modul povoluje jednoduch&eacute; přesměrov&aacute;n&iacute; na zadanou url.  Je to vhodn&eacute; např&iacute;klad uvnitř smarty podm&iacute;nkov&eacute; kogiky (např&iacute;klad přesměrov&aacute;n&iacute; na &uacute;vodn&iacute; str&aacute;nku, pokud je&scaron;tě str&aacute;nky neexistuj&iacute;).</p>
<h3>Jak ho použ&iacute;t?</h3>
<p>Pouze vložt tag do &scaron;ablony: <code>{redirect_url urle=&#039;www.cmsmadesimple.org&#039;}</code></p>';
$lang['admin']['help_function_redirect_page'] = '<h3>Co děl&aacute; tento modul?</h3>
 <p>Tento modl povol&iacute; jednoduch&eacute; přesměrov&aacute;n&iacute; na jinou str&aacute;nku.  To je užitečn&eacute; uvnitř smarty podm&iacute;nkov&eacute; logiky (např&iacute;klad přesměrov&aacute;n&iacute; na přihla&scaron;ovac&iacute; str&aacute;nku pokud uživatel nen&iacute; přihl&aacute;&scaron;en.)</p>
<h3>Jak ho použ&iacute;t?</h3>
<p>Pouze vložte do str&aacute;nky tento tag: <code>{redirect_page page=&#039;some-page-alias&#039;}</code></p>';
$lang['admin']['of'] = 'z';
$lang['admin']['first'] = 'Prvn&iacute;';
$lang['admin']['last'] = 'Posledn&iacute;';
$lang['admin']['adminspecialgroup'] = 'Varov&aacute;n&iacute;: Členov&eacute; t&eacute;to skupiny maj&iacute; automaticky v&scaron;echna opr&aacute;vněn&iacute;';
$lang['admin']['disablesafemodewarning'] = 'Zak&aacute;zat administračn&iacute; varov&aacute;n&iacute; safe mode';
$lang['admin']['allowparamcheckwarnings'] = 'Povolen&iacute; kontroly parametrů pro vytv&aacute;řen&iacute; varovn&yacute;ch zpr&aacute;v';
$lang['admin']['date_format_string'] = 'Řetězec form&aacute;tu data';
$lang['admin']['date_format_string_help'] = '<em>strftime</em> form&aacute;tovan&yacute; řetězec form&aacute;tu data';
$lang['admin']['last_modified_at'] = 'Naposledy upraveno';
$lang['admin']['last_modified_by'] = 'Naposledy upravil';
$lang['admin']['read'] = 'Čten&iacute;';
$lang['admin']['write'] = 'Z&aacute;pis';
$lang['admin']['execute'] = 'Spou&scaron;těn&iacute;';
$lang['admin']['group'] = 'Skupina';
$lang['admin']['other'] = 'Jin&eacute;';
$lang['admin']['event_desc_moduleupgraded'] = 'Odeslat po pov&yacute;&scaron;en&iacute; modulu';
$lang['admin']['event_desc_moduleinstalled'] = 'Odeslat po instalaci modulu';
$lang['admin']['event_desc_moduleuninstalled'] = 'Odeslat po odinstalaci modulu';
$lang['admin']['event_desc_edituserdefinedtagpost'] = 'Odeslat po aktualizaci uživatelsk&eacute;ho tagu';
$lang['admin']['event_desc_edituserdefinedtagpre'] = 'Odeslat před aktualizac&iacute; uživatelsk&eacute;ho tagu';
$lang['admin']['event_desc_deleteuserdefinedtagpre'] = 'Odeslat před smaz&aacute;n&iacute;m uživatelsk&eacute;ho tagu';
$lang['admin']['event_desc_deleteuserdefinedtagpost'] = 'Odeslat po smaz&aacute;n&iacute; uživatelsk&eacute;ho tagu';
$lang['admin']['event_desc_adduserdefinedtagpost'] = 'Odeslat po vložen&iacute; uživatelsk&eacute;ho tagu';
$lang['admin']['event_desc_adduserdefinedtagpre'] = 'Odeslat před vložen&iacute;m uživatelsk&eacute;ho tagu';
$lang['admin']['global_umask'] = 'Maska pro vytv&aacute;řen&iacute; souborů (umask)';
$lang['admin']['errorcantcreatefile'] = 'Nelze vytvořit soubor (chybně nastaven&aacute; opr&aacute;vněn&iacute;?)';
$lang['admin']['errormoduleversionincompatible'] = 'Modul nen&iacute; kompatibiln&iacute; s touto verz&iacute; CMS';
$lang['admin']['errormodulenotloaded'] = 'Intern&iacute; chyba, modul nebyl zaveden';
$lang['admin']['errormodulenotfound'] = 'Intern&iacute; chyba, nelze naj&iacute;t instanci modulu';
$lang['admin']['errorinstallfailed'] = 'Instalace modulu selhala';
$lang['admin']['errormodulewontload'] = 'Probl&eacute;m se zaveden&iacute;m dostupn&eacute;ho modulu';
$lang['admin']['frontendlang'] = 'V&yacute;choz&iacute; jazyk pro rozhran&iacute;';
$lang['admin']['info_edituser_password'] = 'Změnit toto pole pro změnu uživatelsk&eacute;ho hesla';
$lang['admin']['info_edituser_passwordagain'] = 'Změnit toto pole pro změnu uživatelsk&eacute;ho hesla';
$lang['admin']['originator'] = 'Původce';
$lang['admin']['module_name'] = 'Jm&eacute;no modulu';
$lang['admin']['event_name'] = 'Jm&eacute;no ud&aacute;losti';
$lang['admin']['event_description'] = 'Popis ud&aacute;losti';
$lang['admin']['error_delete_default_parent'] = 'Nemůžete smazat nadřazen&yacute; prvek v&yacute;choz&iacute; str&aacute;nky.';
$lang['admin']['jsdisabled'] = 'Omlouv&aacute;me se, ale tato funkce potřebuje povolen&iacute; javascript.';
$lang['admin']['order'] = 'Seřadit';
$lang['admin']['reorderpages'] = 'Setř&iacute;dit str&aacute;nky';
$lang['admin']['reorder'] = 'Setř&iacute;dit';
$lang['admin']['page_reordered'] = 'Str&aacute;nka byla &uacute;spě&scaron;ně setř&iacute;děna.';
$lang['admin']['pages_reordered'] = 'Str&aacute;nky byly &uacute;spě&scaron;ně setř&iacute;děny';
$lang['admin']['sibling_duplicate_order'] = 'Dvě sourozeneck&eacute; str&aacute;nky nemohou m&iacute;t to sam&eacute; pořad&iacute;. Str&aacute;nky nebyly setř&iacute;děny.';
$lang['admin']['no_orders_changed'] = 'Zvolili jste setř&iacute;dit str&aacute;nky, ale nezměnili jste pořad&iacute; ž&aacute;dn&eacute; z nich. Str&aacute;nky nebyly setř&iacute;děny.';
$lang['admin']['order_too_small'] = 'Pořad&iacute; str&aacute;nky nesm&iacute; b&yacute;t nula. Str&aacute;nky nebyly setř&iacute;děny.';
$lang['admin']['order_too_large'] = 'Pořad&iacute; str&aacute;nky nesm&iacute; b&yacute;t vět&scaron;&iacute; než počet str&aacute;nek v t&eacute;to &uacute;rovni. Str&aacute;nky nebyly setř&iacute;děny.';
$lang['admin']['user_tag'] = 'Uživatelsk&yacute; Tag';
$lang['admin']['add'] = 'Přidat';
$lang['admin']['CSS'] = 'CSS';
$lang['admin']['about'] = 'O položce';
$lang['admin']['action'] = 'Akce';
$lang['admin']['actionstatus'] = 'Akce/Stav';
$lang['admin']['active'] = 'Aktivn&iacute;';
$lang['admin']['addcontent'] = 'Vložit nov&yacute; obsah';
$lang['admin']['cantremove'] = 'Nelze odstranit';
$lang['admin']['changepermissions'] = 'Změnit opr&aacute;vněn&iacute;';
$lang['admin']['changepermissionsconfirm'] = 'VAROV&Aacute;N&Iacute;\n\nTato akce se pokus&iacute; zjistit zda v&scaron;echny soubory modulu jsou pro webserver zapisovateln&eacute;.\nOpravdu chcete pokračovat?';
$lang['admin']['contentadded'] = 'Obsah byl &uacute;spě&scaron;ně přid&aacute;n do datab&aacute;ze.';
$lang['admin']['contentupdated'] = 'Obsah byl &uacute;spě&scaron;ně aktualizov&aacute;n.';
$lang['admin']['contentdeleted'] = 'Obsah byl &uacute;spě&scaron;ně odstraněn z datab&aacute;ze.';
$lang['admin']['success'] = '&Uacute;spěch';
$lang['admin']['addcss'] = 'Vložit nov&yacute; CSS';
$lang['admin']['addgroup'] = 'Vložit novou skupinu';
$lang['admin']['additionaleditors'] = 'Dal&scaron;&iacute; editoři';
$lang['admin']['addtemplate'] = 'Vložit novou &scaron;ablonu';
$lang['admin']['adduser'] = 'Vložit nov&eacute;ho uživatele';
$lang['admin']['addusertag'] = 'Vložit uživatelsk&yacute; tag';
$lang['admin']['adminaccess'] = 'Př&iacute;stup k přihl&aacute;&scaron;en&iacute; do administrace';
$lang['admin']['adminlog'] = 'Administr&aacute;torsk&yacute; z&aacute;znam';
$lang['admin']['adminlogcleared'] = 'Administr&aacute;torsk&yacute; z&aacute;znam byl &uacute;spě&scaron;ně vymaz&aacute;n';
$lang['admin']['adminlogempty'] = 'Administr&aacute;torsk&yacute; z&aacute;znam je pr&aacute;zdn&yacute;';
$lang['admin']['adminsystemtitle'] = 'Administrace CMS syst&eacute;mu';
$lang['admin']['adminpaneltitle'] = 'CMS Made Simple administračn&iacute; panel';
$lang['admin']['advanced'] = 'Roz&scaron;&iacute;řen&eacute;';
$lang['admin']['aliasalreadyused'] = 'Alias již byl použit na jin&eacute; str&aacute;nce. Změňte \&quot;Alias str&aacute;nky\&quot; na kartě \&quot;Nastaven&iacute;\&quot; na něco jin&eacute;ho.';
$lang['admin']['aliasmustbelettersandnumbers'] = 'Alias mus&iacute; obsahovat jen znaky a č&iacute;sla';
$lang['admin']['aliasnotaninteger'] = 'Alias nemůže b&yacute;t integer';
$lang['admin']['allpagesmodified'] = 'V&scaron;echny str&aacute;nky upraveny!';
$lang['admin']['assignments'] = 'Přiřadit uživatele';
$lang['admin']['associationexists'] = 'Toto přiřazen&iacute; již existuje';
$lang['admin']['autoinstallupgrade'] = 'Automaticky instalovat nebo aktualizovat';
$lang['admin']['back'] = 'Zpět do menu';
$lang['admin']['backtoplugins'] = 'Zpět na seznam pluginů';
$lang['admin']['cancel'] = 'Storno';
$lang['admin']['cantchmodfiles'] = 'Ne&scaron;lo změnit pr&aacute;va někter&yacute;ch souborů';
$lang['admin']['cantremovefiles'] = 'Chyba odstraněn&iacute; souborů (opr&aacute;vněn&iacute;?)';
$lang['admin']['confirmcancel'] = 'Opravdu chcete zru&scaron;it změny? Klikněte na OK pro zru&scaron;en&iacute; změn. Klikněte na Storno po pokračov&aacute;n&iacute; v &uacute;prav&aacute;ch.';
$lang['admin']['canceldescription'] = 'Zru&scaron;it změny';
$lang['admin']['clearadminlog'] = 'Vymazat administr&aacute;torsk&yacute; z&aacute;znam';
$lang['admin']['code'] = 'K&oacute;d';
$lang['admin']['confirmdefault'] = 'Opravdu si přejete nastavit str&aacute;nku - %s - jako hlavn&iacute; str&aacute;nku prezentace?';
$lang['admin']['confirmdeletedir'] = 'Opravdu chcete smazat tento adres&aacute;ř a ve&scaron;ker&yacute; jeho obsah?';
$lang['admin']['content'] = 'Obsah';
$lang['admin']['contentmanagement'] = 'Spr&aacute;va obsahu';
$lang['admin']['contenttype'] = 'Typ obsahu';
$lang['admin']['copy'] = 'Kop&iacute;rovat';
$lang['admin']['copytemplate'] = 'Kop&iacute;rovat &scaron;ablonu';
$lang['admin']['create'] = 'Vytvořit';
$lang['admin']['createnewfolder'] = 'Vytvořit nov&yacute; adres&aacute;ř';
$lang['admin']['cssalreadyused'] = 'Jm&eacute;no CSS se již použ&iacute;v&aacute;';
$lang['admin']['cssmanagement'] = 'Spr&aacute;va CSS';
$lang['admin']['currentassociations'] = 'Současn&aacute; přiřazen&iacute;';
$lang['admin']['currentdirectory'] = 'Současn&yacute; adres&aacute;ř';
$lang['admin']['currentgroups'] = 'Současn&eacute; skupiny';
$lang['admin']['currentpages'] = 'Současn&eacute; str&aacute;nky';
$lang['admin']['currenttemplates'] = 'Současn&eacute; &scaron;ablony';
$lang['admin']['currentusers'] = 'Současn&iacute; uživatel&eacute;';
$lang['admin']['custom404'] = 'Vlastn&iacute; chybov&eacute; hl&aacute;&scaron;en&iacute; 404';
$lang['admin']['database'] = 'Datab&aacute;ze';
$lang['admin']['databaseprefix'] = 'Prefix datab&aacute;ze';
$lang['admin']['databasetype'] = 'Typ datab&aacute;ze';
$lang['admin']['date'] = 'Datum';
$lang['admin']['default'] = 'V&yacute;choz&iacute;';
$lang['admin']['delete'] = 'Smazat';
$lang['admin']['deleteconfirm'] = 'Opravdu chcete smazat - %s -?';
$lang['admin']['deleteassociationconfirm'] = 'Opravdu chcete smazat asociaci na - %s - ?';
$lang['admin']['deletecss'] = 'Smazat CSS';
$lang['admin']['dependencies'] = 'Z&aacute;vislosti';
$lang['admin']['description'] = 'Popis';
$lang['admin']['directoryexists'] = 'Tento adres&aacute;ř již existuje.';
$lang['admin']['down'] = 'Dolů';
$lang['admin']['edit'] = 'Upravit';
$lang['admin']['editconfiguration'] = 'Upravit nastaven&iacute;';
$lang['admin']['editcontent'] = 'Upravit obsah';
$lang['admin']['editcss'] = 'Upravit CSS';
$lang['admin']['editcsssuccess'] = 'Styl aktualizov&aacute;n';
$lang['admin']['editgroup'] = 'Upravit skupinu';
$lang['admin']['editpage'] = 'Upravit str&aacute;nku';
$lang['admin']['edittemplate'] = 'Upravit &scaron;ablonu';
$lang['admin']['edittemplatesuccess'] = '&Scaron;ablona aktualizov&aacute;na';
$lang['admin']['edituser'] = 'Upravit uživatele';
$lang['admin']['editusertag'] = 'Upravit uživatelsk&yacute; tag';
$lang['admin']['usertagadded'] = 'Uživatelsk&yacute; tag byl &uacute;spě&scaron;ně přid&aacute;n.';
$lang['admin']['usertagupdated'] = 'Uživatelsk&yacute; tag byl &uacute;spě&scaron;ně aktualizov&aacute;n.';
$lang['admin']['usertagdeleted'] = 'Uživatelsk&yacute; tag byl &uacute;spě&scaron;ně odstraněn.';
$lang['admin']['email'] = 'Emailov&aacute; adresa';
$lang['admin']['errorattempteddowngrade'] = 'Instalace tohoto modulu by znamenala pon&iacute;žen&iacute; verze (downgrade).  Operace přeru&scaron;ena';
$lang['admin']['errorchildcontent'] = 'K obsahu je st&aacute;le přiřazena podřazen&aacute; položka. Nejdř&iacute;ve ji pros&iacute;m odstraňte.';
$lang['admin']['errorcopyingtemplate'] = 'Chyba kop&iacute;rov&aacute;n&iacute; &scaron;ablony';
$lang['admin']['errorcouldnotparsexml'] = 'Chyba při parsov&aacute;n&iacute; XML souboru. Ujistěte se, že nahr&aacute;v&aacute;te soubor .xml a ne .tar.gz nebo .zip.';
$lang['admin']['errorcreatingassociation'] = 'Chyba vytv&aacute;řen&iacute; asociace';
$lang['admin']['errorcssinuse'] = 'Tento CSS je st&aacute;le použ&iacute;v&aacute;n &scaron;ablonou nebo str&aacute;nkami. Odstraňte pros&iacute;m nejdř&iacute;v tyto asociace.';
$lang['admin']['errordefaultpage'] = 'Nelze smazat současnou hlavn&iacute; str&aacute;nku. Nastavte nejř&iacute;ve jinou jako hlavn&iacute;.';
$lang['admin']['errordeletingassociation'] = 'Chyba maz&aacute;n&iacute; asociace';
$lang['admin']['errordeletingcss'] = 'Chyba maz&aacute;n&iacute; css';
$lang['admin']['errordeletingdirectory'] = 'Nelze smazat adres&aacute;ř. Chyba pr&aacute;v?';
$lang['admin']['errordeletingfile'] = 'Nelze smazat soubor. Chyba pr&aacute;v?';
$lang['admin']['errordirectorynotwritable'] = 'Chyb&iacute; opr&aacute;vněn&iacute; pro z&aacute;pis do adres&aacute;ře';
$lang['admin']['errordtdmismatch'] = 'DTD Version v souboru XML chyb&iacute; nebo je nekompatibiln&iacute;';
$lang['admin']['errorgettingcssname'] = 'Chyba z&iacute;sk&aacute;n&iacute; jm&eacute;na CSS';
$lang['admin']['errorgettingtemplatename'] = 'Chyba z&iacute;sk&aacute;n&iacute; jm&eacute;na &scaron;ablony';
$lang['admin']['errorincompletexml'] = 'XML soubor je nekompletn&iacute; nebo vadn&yacute;';
$lang['admin']['uploadxmlfile'] = 'Instalovat modul pomoc&iacute; XML souboru';
$lang['admin']['cachenotwritable'] = 'Do adres&aacute;ř Cache nelze zapisovat. Vymaz&aacute;n&iacute; cache nebude fungovat. Nastavte pros&iacute;m adres&aacute;ři tmp/cache pln&aacute; opr&aacute;vněn&iacute; pro čten&iacute;/z&aacute;pis/spou&scaron;těn&iacute; (chmod 777). Tak&eacute; možn&aacute; bude potřeba vypnout safe mode.';
$lang['admin']['modulesnotwritable'] = 'Do adres&aacute;ře modulů nelze zapisovat, pokud byste r&aacute;di instalovali moduly pomoc&iacute; XML souborů, mus&iacute;te tomuto adres&aacute;ři nastavit pln&aacute; čten&iacute;/z&aacute;pis/spou&scaron;těn&iacute; pr&aacute;va (chmod 777). Toto může b&yacute;t ovlivněno tak&eacute; safe mode.';
$lang['admin']['noxmlfileuploaded'] = 'Soubor nebyl nahr&aacute;n. Pro instalaci modulu pomoc&iacute; XML mus&iacute;te vybrat a nahr&aacute;t soubor .xml z Va&scaron;eho poč&iacute;tače.';
$lang['admin']['errorinsertingcss'] = 'Chyba vložen&iacute; CSS';
$lang['admin']['errorinsertinggroup'] = 'Chyba vložen&iacute; skupiny';
$lang['admin']['errorinsertingtag'] = 'Chyba vložen&iacute; uživatelsk&eacute;ho tagu';
$lang['admin']['errorinsertingtemplate'] = 'Chyba vložen&iacute; &scaron;ablony';
$lang['admin']['errorinsertinguser'] = 'Chyba vložen&iacute; uživatele';
$lang['admin']['errornofilesexported'] = 'Chyba při exportu souborů do xml';
$lang['admin']['errorretrievingcss'] = 'Chyba z&iacute;sk&aacute;n&iacute; CSS';
$lang['admin']['errorretrievingtemplate'] = 'Chyba z&iacute;sk&aacute;n&iacute; &scaron;ablony';
$lang['admin']['errortemplateinuse'] = 'Tato &scaron;ablona je použ&iacute;v&aacute;na str&aacute;nkou. Odstraňte ji pros&iacute;m nejdř&iacute;ve.';
$lang['admin']['errorupdatingcss'] = 'Chyba aktualizace CSS';
$lang['admin']['errorupdatinggroup'] = 'Chyba aktualizace skupiny';
$lang['admin']['errorupdatingpages'] = 'Chyba aktualizace str&aacute;nek';
$lang['admin']['errorupdatingtemplate'] = 'Chyba aktualizace &scaron;ablony';
$lang['admin']['errorupdatinguser'] = 'Chyba aktualizace uživatele';
$lang['admin']['errorupdatingusertag'] = 'Chyba aktualizace uživatelsk&eacute;ho tagu';
$lang['admin']['erroruserinuse'] = 'Tento uživatel st&aacute;le vlastn&iacute; str&aacute;nky. Změnte vlastnictv&iacute; těchto str&aacute;nek na jin&eacute;ho uživatele před smaz&aacute;n&iacute;m.';
$lang['admin']['eventhandlers'] = 'Spr&aacute;vce ud&aacute;lost&iacute;';
$lang['admin']['editeventhandler'] = 'Upravit ovladač ud&aacute;lost&iacute;';
$lang['admin']['eventhandlerdescription'] = 'Přiřadit uživatelsk&eacute; tagy s ud&aacute;lostmi';
$lang['admin']['export'] = 'Exportovat';
$lang['admin']['event'] = 'Ud&aacute;lost';
$lang['admin']['false'] = 'NE';
$lang['admin']['settrue'] = 'Nastavit ano';
$lang['admin']['filecreatedirnodoubledot'] = 'Adres&aacute;ř nesm&iacute; obsahovat \&#039;..\&#039;.';
$lang['admin']['filecreatedirnoname'] = 'Nelze vytvořit adres&aacute;ř bez jm&eacute;na.';
$lang['admin']['filecreatedirnoslash'] = 'Adres&aacute;ř nesm&iacute; obsahovat \&#039;/\&#039; or \&#039;\&#039;.';
$lang['admin']['filemanagement'] = 'Spr&aacute;va souborů';
$lang['admin']['filename'] = 'Jm&eacute;no souboru';
$lang['admin']['filenotuploaded'] = 'Soubor nemůže b&yacute;t přenesen. Chyba pr&aacute;v nebo probl&eacute;m se Safe mode?';
$lang['admin']['filesize'] = 'Velikost';
$lang['admin']['firstname'] = 'Jm&eacute;no';
$lang['admin']['groupmanagement'] = 'Spr&aacute;va skupin';
$lang['admin']['grouppermissions'] = 'Opr&aacute;vněn&iacute; skupiny';
$lang['admin']['handler'] = 'Handler (uživatelsk&yacute; tag)';
$lang['admin']['headtags'] = 'Head Tagy';
$lang['admin']['help'] = 'N&aacute;pověda';
$lang['admin']['new_window'] = 'nov&eacute; okno';
$lang['admin']['helpwithsection'] = '%s n&aacute;pověda';
$lang['admin']['helpaddtemplate'] = '<p>&Scaron;ablona je to, co ovl&aacute;d&aacute; vzhled str&aacute;nek.</p><p>Vytvořte zde svůj layout a vložte tak&eacute; svůj CSS do sekce &scaron;ablon pro vlastn&iacute; vzhled Va&scaron;ich elementů na str&aacute;nk&aacute;ch.</p>';
$lang['admin']['helplisttemplate'] = '<p>Tato str&aacute;nka umožňuje upravovat, mazat a vytv&aacute;řet &scaron;ablony.</p><p>Pro vytvořen&iacute; nov&eacute; &scaron;ablony, klikněte na tlač&iacute;tko <u>Vložit novou &scaron;ablonu</u>.</p><p>Pokud si přejete nastavit ve&scaron;ker&eacute; str&aacute;nky pro použ&iacute;v&aacute;n&iacute; stejn&eacute; &scaron;ablony, klikněte na odkaz <u>Nastavit v&scaron;echny str&aacute;nky</u>.</p><p>Pokud chcete duplikovat &scaron;ablonu, klikněte na ikonu <u>Kop&iacute;rovat</u> a budete t&aacute;z&aacute;n na pojmenov&aacute;n&iacute; nov&eacute; &scaron;ablony.</p>';
$lang['admin']['home'] = 'Domů';
$lang['admin']['homepage'] = 'Domovsk&aacute; str&aacute;nka';
$lang['admin']['hostname'] = 'Hostitel';
$lang['admin']['idnotvalid'] = 'Zadan&eacute; id je neplatn&eacute;';
$lang['admin']['imagemanagement'] = 'Spr&aacute;vce obr&aacute;zků';
$lang['admin']['informationmissing'] = 'Informace chyb&iacute;';
$lang['admin']['install'] = 'Instalovat';
$lang['admin']['invalidcode'] = 'Vložen nespr&aacute;vn&yacute; k&oacute;d.';
$lang['admin']['illegalcharacters'] = 'Nespr&aacute;vn&eacute; znaky v poli %s.';
$lang['admin']['invalidcode_brace_missing'] = 'Nespr&aacute;vn&yacute; počet z&aacute;vorek';
$lang['admin']['invalidtemplate'] = '&Scaron;ablona nen&iacute; platn&aacute;';
$lang['admin']['itemid'] = 'ID položky';
$lang['admin']['itemname'] = 'Jm&eacute;no položky';
$lang['admin']['language'] = 'Jazyk';
$lang['admin']['lastname'] = 'Př&iacute;jmen&iacute;';
$lang['admin']['logout'] = 'Odhl&aacute;sit';
$lang['admin']['loginprompt'] = 'Vložte spr&aacute;vn&eacute; uživatelsk&eacute; &uacute;daje pro př&iacute;stup do administračn&iacute;ho panelu.';
$lang['admin']['logintitle'] = 'CMS Made Simple přihl&aacute;&scaron;en&iacute; do administrace';
$lang['admin']['menutext'] = 'Text menu';
$lang['admin']['missingparams'] = 'Někter&eacute; parametry chyběly nebo byly nespr&aacute;vn&eacute;';
$lang['admin']['modifygroupassignments'] = 'Upravit přiřazen&iacute; skupiny';
$lang['admin']['moduleabout'] = 'O modulu %s';
$lang['admin']['modulehelp'] = 'N&aacute;pověda pro modul %s';
$lang['admin']['msg_defaultcontent'] = 'Zde vložit k&oacute;d, kter&yacute; se m&aacute; objevit jako v&yacute;choz&iacute; obsah u v&scaron;ech nov&yacute;ch str&aacute;nek';
$lang['admin']['msg_defaultmetadata'] = 'Zde vložit k&oacute;d, kter&yacute; se m&aacute; objevit v sekci metadat v&scaron;ech nov&yacute;ch str&aacute;nek';
$lang['admin']['wikihelp'] = 'N&aacute;pověda ve Wiki';
$lang['admin']['moduleinstalled'] = 'Modul je již instalov&aacute;n';
$lang['admin']['moduleinterface'] = '%s rozhran&iacute;';
$lang['admin']['modules'] = 'Moduly';
$lang['admin']['move'] = 'Přesunout';
$lang['admin']['name'] = 'Uživatelsk&eacute; jm&eacute;no';
$lang['admin']['needpermissionto'] = 'Potřebujete \&#039;%s\&#039; pr&aacute;va pro vykon&aacute;n&iacute; t&eacute;to funkce.';
$lang['admin']['needupgrade'] = 'Potřebuje aktualizovat';
$lang['admin']['newtemplatename'] = 'Nov&eacute; jm&eacute;no &scaron;ablony';
$lang['admin']['next'] = 'Dal&scaron;&iacute;';
$lang['admin']['noaccessto'] = 'Bez př&iacute;stupu k %s';
$lang['admin']['nocss'] = 'Ž&aacute;dn&eacute; CSS';
$lang['admin']['noentries'] = 'Ž&aacute;dn&eacute; položky';
$lang['admin']['nofieldgiven'] = 'Nezad&aacute;n ž&aacute;dn&yacute; %s!';
$lang['admin']['nofiles'] = 'Ž&aacute;dn&eacute; soubory';
$lang['admin']['nopasswordmatch'] = 'Hesla se neshoduj&iacute;';
$lang['admin']['norealdirectory'] = 'Nezad&aacute;n spr&aacute;vn&yacute; adres&aacute;ř';
$lang['admin']['norealfile'] = 'Nebyl zad&aacute;n existuj&iacute;c&iacute; soubor';
$lang['admin']['notinstalled'] = 'Nenainstalov&aacute;n';
$lang['admin']['overwritemodule'] = 'Přepsat existuj&iacute;c&iacute; moduly';
$lang['admin']['owner'] = 'Vlastn&iacute;k';
$lang['admin']['pagealias'] = 'Alias str&aacute;nky';
$lang['admin']['pagedefaults'] = 'V&yacute;choz&iacute; hodnoty str&aacute;nky';
$lang['admin']['pagedefaultsdescription'] = 'Nastavit v&yacute;choz&iacute; hodnoty pro nov&eacute; str&aacute;nky';
$lang['admin']['parent'] = 'Nadřazen&yacute;';
$lang['admin']['password'] = 'Heslo';
$lang['admin']['passwordagain'] = 'Heslo (znovu)';
$lang['admin']['permission'] = 'Opr&aacute;vněn&iacute;';
$lang['admin']['permissions'] = 'Opr&aacute;vněn&iacute;';
$lang['admin']['permissionschanged'] = 'Opr&aacute;vněn&iacute; byla aktualizov&aacute;na.';
$lang['admin']['pluginabout'] = 'O %s tagu';
$lang['admin']['pluginhelp'] = 'N&aacute;pověda pro %s tag';
$lang['admin']['pluginmanagement'] = 'Spr&aacute;va pluginů';
$lang['admin']['prefsupdated'] = 'Nastaven&iacute; upraveno.';
$lang['admin']['preview'] = 'N&aacute;hled';
$lang['admin']['previewdescription'] = 'N&aacute;hled změn';
$lang['admin']['previous'] = 'Předchoz&iacute;';
$lang['admin']['remove'] = 'Odstranit';
$lang['admin']['removeconfirm'] = 'Tato akce trvale odstran&iacute; v&scaron;echny soubory patř&iacute;c&iacute; k tomuto modulu z t&eacute;to instalace\nOpravdu chcete pokračovat?';
$lang['admin']['removecssassociation'] = 'Odstranit CSS asociaci';
$lang['admin']['saveconfig'] = 'Uložit nastaven&iacute;';
$lang['admin']['send'] = 'Odeslat';
$lang['admin']['setallcontent'] = 'Nastavit v&scaron;echny str&aacute;nky';
$lang['admin']['setallcontentconfirm'] = 'Opravdu chcete nastavit v&scaron;echny soubory na tuto &scaron;ablonu?';
$lang['admin']['showinmenu'] = 'Uk&aacute;zat v menu';
$lang['admin']['showsite'] = 'Uk&aacute;zat prezentaci';
$lang['admin']['sitedownmessage'] = 'Zpr&aacute;va str&aacute;nky mimo provoz';
$lang['admin']['siteprefs'] = 'Předvolby prezentace';
$lang['admin']['status'] = 'Stav';
$lang['admin']['stylesheet'] = 'Styl';
$lang['admin']['submit'] = 'Odeslat';
$lang['admin']['submitdescription'] = 'Uložit změny';
$lang['admin']['tags'] = 'Tagy';
$lang['admin']['template'] = '&Scaron;ablona';
$lang['admin']['templateexists'] = 'Jm&eacute;no &scaron;ablony již existuje';
$lang['admin']['templatemanagement'] = 'Spr&aacute;va &scaron;ablon';
$lang['admin']['title'] = 'N&aacute;zev';
$lang['admin']['tools'] = 'N&aacute;stroje';
$lang['admin']['true'] = 'ANO';
$lang['admin']['setfalse'] = 'Nastavit NE';
$lang['admin']['type'] = 'Typ';
$lang['admin']['typenotvalid'] = 'Typ nen&iacute; platn&yacute;';
$lang['admin']['uninstall'] = 'Odinstalovat';
$lang['admin']['uninstallconfirm'] = 'Opravdu toto chcete odinstalovat? Jm&eacute;no:';
$lang['admin']['up'] = 'Nahoru';
$lang['admin']['upgrade'] = 'Aktualizovat';
$lang['admin']['upgradeconfirm'] = 'Opravdu toto chcete aktualizovat?';
$lang['admin']['uploadfile'] = 'Nahr&aacute;t soubor';
$lang['admin']['url'] = 'URL';
$lang['admin']['useadvancedcss'] = 'Použ&iacute;t roz&scaron;&iacute;řenou spr&aacute;vu CSS';
$lang['admin']['user'] = 'Uživatel';
$lang['admin']['userdefinedtags'] = 'Uživatelsk&eacute; tagy';
$lang['admin']['usermanagement'] = 'Spr&aacute;va uživatelů';
$lang['admin']['username'] = 'Uživatelsk&eacute; jm&eacute;no';
$lang['admin']['usernameincorrect'] = 'uživatelsk&eacute; jm&eacute;no nebo heslo neplatn&eacute;';
$lang['admin']['userprefs'] = 'Nastaven&iacute; uživatele';
$lang['admin']['usersassignedtogroup'] = 'Uživatel přiřazen ke skupině %s';
$lang['admin']['usertagexists'] = 'Tag tohoto jm&eacute;na existuje. Zvolte pros&iacute;m jin&eacute;.';
$lang['admin']['usewysiwyg'] = 'Použ&iacute;vat WYSIWYG editor pro obsah';
$lang['admin']['version'] = 'Verze';
$lang['admin']['view'] = 'Zobrazit';
$lang['admin']['welcomemsg'] = 'V&iacute;tejte %s';
$lang['admin']['directoryabove'] = 'adres&aacute;ř nad aktu&aacute;ln&iacute; &uacute;rovn&iacute;';
$lang['admin']['nodefault'] = 'V&yacute;choz&iacute; nen&iacute; vybr&aacute;n';
$lang['admin']['blobexists'] = 'Html blok jm&eacute;no již existuje';
$lang['admin']['blobmanagement'] = 'Spr&aacute;va HTML bloků';
$lang['admin']['errorinsertingblob'] = 'Nastala chyba při vkl&aacute;d&aacute;n&iacute; html bloku';
$lang['admin']['addhtmlblob'] = 'Vložit html blok';
$lang['admin']['edithtmlblob'] = 'Upravit html blok';
$lang['admin']['edithtmlblobsuccess'] = 'Html blok aktualizov&aacute;n';
$lang['admin']['tagtousegcb'] = 'Tag pro použit&iacute; tohoto bloku';
$lang['admin']['gcb_wysiwyg'] = 'Povolit GCB WYSIWYG';
$lang['admin']['gcb_wysiwyg_help'] = 'Povolit WYSIWYG editor při editaci Global Content Blocks';
$lang['admin']['filemanager'] = 'Spr&aacute;vce souborů';
$lang['admin']['imagemanager'] = 'Spr&aacute;vce obr&aacute;zků';
$lang['admin']['encoding'] = 'K&oacute;dov&aacute;n&iacute;';
$lang['admin']['clearcache'] = 'Vymazat cache';
$lang['admin']['clear'] = 'Vymazat';
$lang['admin']['cachecleared'] = 'Cache vymaz&aacute;na';
$lang['admin']['apply'] = 'Prov&eacute;st';
$lang['admin']['applydescription'] = 'Uložit změny a pokračovat v &uacute;prav&aacute;ch';
$lang['admin']['none'] = 'Ž&aacute;dn&eacute;';
$lang['admin']['wysiwygtouse'] = 'Vyberte WYSIWYG editor';
$lang['admin']['syntaxhighlightertouse'] = 'Vyberte zv&yacute;razňov&aacute;n&iacute; syntaxe';
$lang['admin']['hasdependents'] = 'M&aacute; z&aacute;vislosti';
$lang['admin']['missingdependency'] = 'Nevyře&scaron;en&eacute; z&aacute;vislosti';
$lang['admin']['minimumversion'] = 'Minim&aacute;ln&iacute; verze';
$lang['admin']['minimumversionrequired'] = 'Minim&aacute;ln&iacute; CMSMS verze nutn&aacute;';
$lang['admin']['maximumversion'] = 'Maxim&aacute;ln&iacute; verze';
$lang['admin']['maximumversionsupported'] = 'Maxim&aacute;ln&iacute; CMSMS verze podporov&aacute;na';
$lang['admin']['depsformodule'] = 'Z&aacute;vislosti pro modul %s';
$lang['admin']['installed'] = 'Instalov&aacute;no';
$lang['admin']['author'] = 'Autor';
$lang['admin']['changehistory'] = 'Historie změn';
$lang['admin']['moduleerrormessage'] = 'Chybov&eacute; hl&aacute;&scaron;en&iacute; pro modul %s';
$lang['admin']['moduleupgradeerror'] = 'Nastala chyba při upgradu modulu.';
$lang['admin']['moduleinstallmessage'] = 'Instalačn&iacute; zpr&aacute;va pro modul %s';
$lang['admin']['moduleuninstallmessage'] = 'Odinstalačn&iacute; zpr&aacute;va pro modul %s';
$lang['admin']['admintheme'] = 'Vzhled administrace';
$lang['admin']['addstylesheet'] = 'Vložit styl';
$lang['admin']['editstylesheet'] = 'Upravit styl';
$lang['admin']['addcssassociation'] = 'Přidat asociaci stylu';
$lang['admin']['attachstylesheet'] = 'Připojit tento styl';
$lang['admin']['attachtemplate'] = 'Připojit do t&eacute;to &scaron;ablony';
$lang['admin']['main'] = 'Hlavn&iacute;';
$lang['admin']['pages'] = 'Str&aacute;nky';
$lang['admin']['page'] = 'Str&aacute;nka';
$lang['admin']['files'] = 'Soubory';
$lang['admin']['layout'] = 'Vzhled';
$lang['admin']['usersgroups'] = 'Uživatel&eacute;/Skupiny';
$lang['admin']['extensions'] = 'Roz&scaron;&iacute;řen&iacute;';
$lang['admin']['preferences'] = 'Nastaven&iacute;';
$lang['admin']['admin'] = 'Administrace str&aacute;nek';
$lang['admin']['viewsite'] = 'Zobrazit prezentaci';
$lang['admin']['templatecss'] = 'Přidělit &scaron;ablonu ke stylu';
$lang['admin']['plugins'] = 'Pluginy';
$lang['admin']['movecontent'] = 'Přesunout str&aacute;nky';
$lang['admin']['module'] = 'Moduly';
$lang['admin']['usertags'] = 'Uživatelsk&eacute; tagy';
$lang['admin']['htmlblobs'] = 'HTML Bloky';
$lang['admin']['adminhome'] = 'Administrace';
$lang['admin']['liststylesheets'] = 'Styly';
$lang['admin']['preferencesdescription'] = 'Zde se upravuj&iacute; různ&aacute; nastaven&iacute; prezentace.';
$lang['admin']['adminlogdescription'] = 'Zobraz&iacute; z&aacute;znamy o tom, kdo co dělal v administraci.';
$lang['admin']['mainmenu'] = 'Hlavn&iacute; menu';
$lang['admin']['users'] = 'Uživatel&eacute;';
$lang['admin']['usersdescription'] = 'Zde se upravuj&iacute; uživatel&eacute;';
$lang['admin']['groups'] = 'Skupiny';
$lang['admin']['groupsdescription'] = 'Zde se upravuj&iacute; uživatelsk&eacute; skupiny.';
$lang['admin']['groupassignments'] = 'Přiřazen&iacute; do skupiny';
$lang['admin']['groupassignmentdescription'] = 'Zde se zařazuj&iacute; uživatel&eacute; do skupin.';
$lang['admin']['groupperms'] = 'Opr&aacute;vněn&iacute; skupiny';
$lang['admin']['grouppermsdescription'] = 'Nastaven&iacute; opr&aacute;vněn&iacute; a &uacute;roveň pr&aacute;v skupin';
$lang['admin']['pagesdescription'] = 'Zde se přid&aacute;vaj&iacute; a upravuj&iacute; str&aacute;nky a jin&yacute; obsah.';
$lang['admin']['htmlblobdescription'] = 'HTML Bloky jsou jsou č&aacute;sti obsahu, kter&eacute; můžete vložit do sv&yacute;ch str&aacute;nek nebo &scaron;ablon.';
$lang['admin']['templates'] = '&Scaron;ablony';
$lang['admin']['templatesdescription'] = 'Zde se přid&aacute;vaj&iacute; a upravuj&iacute; &scaron;ablony. &Scaron;ablony definuj&iacute; vzhled va&scaron;ich str&aacute;nek.';
$lang['admin']['stylesheets'] = 'Styly';
$lang['admin']['stylesheetsdescription'] = 'Spr&aacute;va stylu je roz&scaron;&iacute;řen&yacute; způsob pr&aacute;ce s kask&aacute;dov&yacute;mi styly (CSS) odděleně od &scaron;ablon.';
$lang['admin']['filemanagerdescription'] = 'Nahr&aacute;t a spravovat soubory.';
$lang['admin']['imagemanagerdescription'] = 'Nahr&aacute;t/upravit a odstranit obr&aacute;zky.';
$lang['admin']['moduledescription'] = 'Moduly roz&scaron;iřuj&iacute; CMS Made Simple o možnost uživatelsk&yacute;ch funkc&iacute;.';
$lang['admin']['tagdescription'] = 'Tagy jsou drobn&eacute; funkce, kter&eacute; mohou b&yacute;t do obsahu a/nebo &scaron;ablon.';
$lang['admin']['usertagdescription'] = 'Tagy kter&eacute; můžete vytv&aacute;řet a upravovat sami pro proveden&iacute; určit&yacute;ch činnost&iacute;, př&iacute;mo z va&scaron;eho prohl&iacute;žeče.';
$lang['admin']['installdirwarning'] = '<em><strong>Varov&aacute;n&iacute;:</strong></em> instalačn&iacute; adres&aacute;ř st&aacute;le existuje. Odstraňte jej, pros&iacute;m.';
$lang['admin']['subitems'] = 'Obsahuje';
$lang['admin']['extensionsdescription'] = 'Moduly, tagy a dal&scaron;&iacute; rozmanit&eacute; položky.';
$lang['admin']['usersgroupsdescription'] = 'Nastaven&iacute; uživatelů a skupin.';
$lang['admin']['layoutdescription'] = 'Volby vzhledu str&aacute;nek.';
$lang['admin']['admindescription'] = 'Administrace str&aacute;nek.';
$lang['admin']['contentdescription'] = 'Zde se vkl&aacute;d&aacute; a upravuje obsah.';
$lang['admin']['enablecustom404'] = 'Povolit vlastni zpr&aacute;vy 404';
$lang['admin']['enablesitedown'] = 'Povolit zpr&aacute;vu mimo provoz';
$lang['admin']['bookmarks'] = 'Z&aacute;ložky';
$lang['admin']['user_created'] = 'Uživatel vytvořen';
$lang['admin']['forums'] = 'F&oacute;ra';
$lang['admin']['wiki'] = 'Wiki';
$lang['admin']['irc'] = 'IRC';
$lang['admin']['module_help'] = 'N&aacute;pověda modulu';
$lang['admin']['managebookmarks'] = 'Spravovat z&aacute;ložky';
$lang['admin']['editbookmark'] = 'Upravit z&aacute;ložku';
$lang['admin']['addbookmark'] = 'Vložit z&aacute;ložku';
$lang['admin']['recentpages'] = 'Ned&aacute;vn&eacute; str&aacute;nky';
$lang['admin']['groupname'] = 'Jm&eacute;no skupiny';
$lang['admin']['selectgroup'] = 'Vybrat skupinu';
$lang['admin']['updateperm'] = 'Aktualizovat opr&aacute;vněn&iacute;';
$lang['admin']['admincallout'] = 'Administračn&iacute; zkratky';
$lang['admin']['showbookmarks'] = 'Uk&aacute;zat administračn&iacute; z&aacute;ložky';
$lang['admin']['hide_help_links'] = 'Skr&yacute;t odkazy n&aacute;povědy';
$lang['admin']['hide_help_links_help'] = 'Za&scaron;krtnut&iacute;m tohoto pole zak&aacute;žete zobrazovan&iacute; odkazů n&aacute;povědy wiki a modulů v hlavičk&aacute;ch str&aacute;nek.';
$lang['admin']['showrecent'] = 'Uk&aacute;zat nejčastěji použ&iacute;van&eacute; str&aacute;nky';
$lang['admin']['attachtotemplate'] = 'Připojit styl k &scaron;abloně';
$lang['admin']['attachstylesheets'] = 'Připojit styl';
$lang['admin']['indent'] = 'Odsadit v&yacute;pis str&aacute;nek pro zv&yacute;razněn&iacute; hierarchie';
$lang['admin']['adminindent'] = 'Zobrazit obsah';
$lang['admin']['contract'] = 'Sbalit sekci';
$lang['admin']['expand'] = 'Rozbalit sekci';
$lang['admin']['expandall'] = 'Rozbalit v&scaron;echny sekce';
$lang['admin']['contractall'] = 'Sbalit v&scaron;echny sekce';
$lang['admin']['menu_bookmarks'] = '[+]';
$lang['admin']['globalconfig'] = 'Glob&aacute;ln&iacute; nastaven&iacute;';
$lang['admin']['adminpaging'] = 'Počet položek obsahu pro zobrazen&iacute; na str&aacute;nku v seznamu';
$lang['admin']['nopaging'] = 'Zobrazit v&scaron;echny položky';
$lang['admin']['myprefs'] = 'M&aacute; nastaven&iacute;';
$lang['admin']['myprefsdescription'] = 'Zde si můžete upravit administračn&iacute; č&aacute;st podle sv&eacute;ho.';
$lang['admin']['myaccount'] = 'Můj &uacute;čet';
$lang['admin']['myaccountdescription'] = 'Zde můžete upravit &uacute;daje sv&eacute;ho osobn&iacute;ho &uacute;čtu.';
$lang['admin']['adminprefs'] = 'Nastaven&iacute; administrace';
$lang['admin']['adminprefsdescription'] = 'Zde jsou specifick&aacute; nastaven&iacute; administrace.';
$lang['admin']['managebookmarksdescription'] = 'Zde můžete spravovat Va&scaron;e administračn&iacute; z&aacute;ložky.';
$lang['admin']['options'] = 'Volby';
$lang['admin']['langparam'] = 'Tento parametr specifikuje, jak&yacute; jazyk rozhran&iacute; použ&iacute;t. Ne v&scaron;echny moduly toto podporuj&iacute; nebo potřebuj&iacute;.';
$lang['admin']['parameters'] = 'Parametry';
$lang['admin']['mediatype'] = 'Media Typ';
$lang['admin']['mediatype_'] = 'Nic nenastaveno: projev&iacute; se v&scaron;ude.';
$lang['admin']['mediatype_all'] = 'all : Vhodn&eacute; pro v&scaron;echna zař&iacute;zen&iacute;.';
$lang['admin']['mediatype_aural'] = 'aural : Určeno pro hlasov&eacute; čtečky.';
$lang['admin']['mediatype_braille'] = 'braille : Určeno pro zař&iacute;zen&iacute; s braillov&yacute;m p&iacute;smem.';
$lang['admin']['mediatype_embossed'] = 'embossed : Určeno pro tisk&aacute;rny s braillov&yacute;m p&iacute;smem.';
$lang['admin']['mediatype_handheld'] = 'handheld : Určeno pro kapesn&iacute; komunik&aacute;tory.';
$lang['admin']['mediatype_print'] = 'print : Určeno pro str&aacute;nkov&yacute;, neprůhledn&yacute; materi&aacute;l a pro dokumenty zobrazovan&eacute; na obrazovce v režimu n&aacute;hledu před tiskem.';
$lang['admin']['mediatype_projection'] = 'projection : Určeno pro projektovan&eacute; prezentace, např&iacute;klad pro projektory nebo tisk na průhledn&eacute; f&oacute;lie.';
$lang['admin']['mediatype_screen'] = 'screen : Určeno pro barevn&eacute; poč&iacute;tačov&eacute; monitory.';
$lang['admin']['mediatype_tty'] = 'tty : Určeno pro v&yacute;stupy s pevnou &scaron;&iacute;řkou znaku, jako např&iacute;klad termin&aacute;ly nebo d&aacute;lnopisy.';
$lang['admin']['mediatype_tv'] = 'tv : Určeno pro zař&iacute;zen&iacute; typu televize.';
$lang['admin']['assignmentchanged'] = 'Přiřazen&iacute; skupiny aktualizov&aacute;no.';
$lang['admin']['stylesheetexists'] = 'Styl existuje';
$lang['admin']['errorcopyingstylesheet'] = 'Chyba při kop&iacute;rov&aacute;n&iacute; stylu';
$lang['admin']['copystylesheet'] = 'Kop&iacute;rovat styl';
$lang['admin']['newstylesheetname'] = 'Jm&eacute;no nov&eacute;ho stylu';
$lang['admin']['target'] = 'C&iacute;l';
$lang['admin']['xml'] = 'XML';
$lang['admin']['xmlmodulerepository'] = 'URL adresa ModuleRepository soap serveru';
$lang['admin']['metadata'] = 'Metadata';
$lang['admin']['globalmetadata'] = 'Glob&aacute;ln&iacute; Metadata';
$lang['admin']['titleattribute'] = 'Popisek (atribut titulku)';
$lang['admin']['tabindex'] = 'Z&aacute;ložkov&eacute; menu';
$lang['admin']['accesskey'] = 'Kl&aacute;vesov&aacute; zkratka';
$lang['admin']['sitedownwarning'] = '<strong>Varov&aacute;n&iacute;:</strong> Va&scaron;e str&aacute;nky moment&aacute;lně zobrazuj&iacute; zpr&aacute;vu \&quot;Str&aacute;nky mimo provoz z důvodu &uacute;držby\&quot;.  Pro vyře&scaron;en&iacute; odstraňte soubor %s.';
$lang['admin']['deletecontent'] = 'Smazat obsah';
$lang['admin']['deletepages'] = 'Opravdu chcete smazat tyto str&aacute;nky?';
$lang['admin']['selectall'] = 'Vybrat v&scaron;e';
$lang['admin']['selecteditems'] = 'Vybran&eacute; položky';
$lang['admin']['inactive'] = 'Neaktivn&iacute;';
$lang['admin']['deletetemplates'] = 'Smazat &scaron;ablony';
$lang['admin']['templatestodelete'] = 'Tyto &scaron;ablony budou smaz&aacute;ny';
$lang['admin']['wontdeletetemplateinuse'] = 'Tyto &scaron;ablony jsou použ&iacute;v&aacute;ny a nebudou smaz&aacute;ny';
$lang['admin']['deletetemplate'] = 'Smazat styly';
$lang['admin']['stylesheetstodelete'] = 'Tyto styly budou smaz&aacute;ny';
$lang['admin']['sitename'] = 'Jm&eacute;no str&aacute;nek';
$lang['admin']['siteadmin'] = 'Administrace str&aacute;nek';
$lang['admin']['images'] = 'Spr&aacute;vce obr&aacute;zků';
$lang['admin']['blobs'] = 'Hlavn&iacute; obsahov&eacute; bloky';
$lang['admin']['groupmembers'] = 'Přiřazen&iacute; skupin';
$lang['admin']['troubleshooting'] = '(Ře&scaron;en&iacute; probl&eacute;mů)';
$lang['admin']['event_desc_loginpost'] = 'Odesl&aacute;no po přihl&aacute;&scaron;en&iacute; uživatele do administračn&iacute;ho panelu';
$lang['admin']['event_desc_logoutpost'] = 'Odesl&aacute;no po odhl&aacute;&scaron;en&iacute; uživatele do administračn&iacute;ho panelu';
$lang['admin']['event_desc_adduserpre'] = 'Odesl&aacute;no před vytvořen&iacute;m nov&eacute;ho uživatele';
$lang['admin']['event_desc_adduserpost'] = 'Odesl&aacute;no po vytvořen&iacute; nov&eacute;ho uživatele';
$lang['admin']['event_desc_edituserpre'] = 'Odesl&aacute;no před uložen&iacute;m změn uživatele';
$lang['admin']['event_desc_edituserpost'] = 'Odesl&aacute;no po uložen&iacute; změn uživatele';
$lang['admin']['event_desc_deleteuserpre'] = 'Odesl&aacute;no před smaz&aacute;n&iacute;m uživatele ze syst&eacute;mu';
$lang['admin']['event_desc_deleteuserpost'] = 'Odesl&aacute;no po smaz&aacute;n&iacute; uživatele ze syst&eacute;mu';
$lang['admin']['event_desc_addgrouppre'] = 'Odesl&aacute;no před založen&iacute;m nov&eacute; skupiny';
$lang['admin']['event_desc_addgrouppost'] = 'Odesl&aacute;no po založen&iacute; nov&eacute; skupiny';
$lang['admin']['event_desc_changegroupassignpre'] = 'Odesl&aacute;no před uložen&iacute;m přiřazen&iacute; skupiny';
$lang['admin']['event_desc_changegroupassignpost'] = 'Odesl&aacute;no po uložen&iacute; přiřazen&iacute; skupiny';
$lang['admin']['event_desc_editgrouppre'] = 'Odesl&aacute;no před uložen&iacute;m změn skupiny';
$lang['admin']['event_desc_editgrouppost'] = 'Odesl&aacute;no po uložen&iacute; změn skupiny';
$lang['admin']['event_desc_deletegrouppre'] = 'Odesl&aacute;no před smaz&aacute;n&iacute;m skupiny ze syst&eacute;mu';
$lang['admin']['event_desc_deletegrouppost'] = 'Odesl&aacute;no po smaz&aacute;n&iacute; skupiny ze syst&eacute;mu';
$lang['admin']['event_desc_addstylesheetpre'] = 'Odesl&aacute;no před vytvořen&iacute;m nov&eacute;ho stylu';
$lang['admin']['event_desc_addstylesheetpost'] = 'Odesl&aacute;no po vytvořen&iacute; nov&eacute;ho stylu';
$lang['admin']['event_desc_editstylesheetpre'] = 'Odesl&aacute;no před uložen&iacute;m změn do stylu';
$lang['admin']['event_desc_editstylesheetpost'] = 'Odesl&aacute;no po uložen&iacute; změn do stylu';
$lang['admin']['event_desc_deletestylesheetpre'] = 'Odesl&aacute;no před smaz&aacute;n&iacute;m stylu ze syst&eacute;mu';
$lang['admin']['event_desc_deletestylesheetpost'] = 'Odesl&aacute;no po smaz&aacute;n&iacute; stylu ze syst&eacute;mu';
$lang['admin']['event_desc_addtemplatepre'] = 'Odesl&aacute;no před vytvořen&iacute;m nov&eacute; &scaron;ablony';
$lang['admin']['event_desc_addtemplatepost'] = 'Odesl&aacute;no po vytvořen&iacute; nov&eacute; &scaron;ablony';
$lang['admin']['event_desc_edittemplatepre'] = 'Odesl&aacute;no před uložen&iacute;m změn do &scaron;ablony';
$lang['admin']['event_desc_edittemplatepost'] = 'Odesl&aacute;no po uložen&iacute; změn do &scaron;ablony';
$lang['admin']['event_desc_deletetemplatepre'] = 'Odesl&aacute;no před smaz&aacute;n&iacute;m &scaron;ablony ze syst&eacute;mu';
$lang['admin']['event_desc_deletetemplatepost'] = 'Odesl&aacute;no po smaz&aacute;n&iacute; &scaron;ablony ze syst&eacute;mu';
$lang['admin']['event_desc_templateprecompile'] = 'Odesl&aacute;no před před&aacute;n&iacute;m &scaron;ablony ke zpracov&aacute;n&iacute; smarty syst&eacute;mem';
$lang['admin']['event_desc_templatepostcompile'] = 'Odesl&aacute;no po před&aacute;n&iacute; &scaron;ablony ke zpracov&aacute;n&iacute; smarty syst&eacute;mem';
$lang['admin']['event_desc_addglobalcontentpre'] = 'Odesl&aacute;no před vytvořen&iacute;m nov&eacute;ho hlavn&iacute;ho obsahov&eacute;ho bloku';
$lang['admin']['event_desc_addglobalcontentpost'] = 'Odesl&aacute;no po vytvořen&iacute; nov&eacute;ho hlavn&iacute;ho obsahov&eacute;ho bloku';
$lang['admin']['event_desc_editglobalcontentpre'] = 'Odesl&aacute;no před uložen&iacute;m změn hlavn&iacute;ho obsahov&eacute;ho bloku';
$lang['admin']['event_desc_editglobalcontentpost'] = 'Odesl&aacute;no po uložen&iacute; změn hlavn&iacute;ho obsahov&eacute;ho bloku';
$lang['admin']['event_desc_deleteglobalcontentpre'] = 'Odesl&aacute;no před smaz&aacute;n&iacute;m hlavn&iacute;ho obsahov&eacute;ho bloku ze syst&eacute;mu';
$lang['admin']['event_desc_deleteglobalcontentpost'] = 'Odesl&aacute;no po smaz&aacute;n&iacute; hlavn&iacute;ho obsahov&eacute;ho bloku ze syst&eacute;mu';
$lang['admin']['event_desc_globalcontentprecompile'] = 'Odesl&aacute;no před odesl&aacute;n&iacute;m hlavn&iacute;ho obsahov&eacute;ho bloku ke zpracov&aacute;n&iacute; smarty syst&eacute;mem';
$lang['admin']['event_desc_globalcontentpostcompile'] = 'Odesl&aacute;no po odesl&aacute;n&iacute; hlavn&iacute;ho obsahov&eacute;ho bloku ke zpracov&aacute;n&iacute; smarty syst&eacute;mem';
$lang['admin']['event_desc_contenteditpre'] = 'Odesl&aacute;no před uložen&iacute;m změn obsahu';
$lang['admin']['event_desc_contenteditpost'] = 'Odesl&aacute;no po uložen&iacute; změn obsahu';
$lang['admin']['event_desc_contentdeletepre'] = 'Odesl&aacute;no před smaz&aacute;n&iacute;m obsahu ze syst&eacute;mu';
$lang['admin']['event_desc_contentdeletepost'] = 'Odesl&aacute;no po smaz&aacute;n&iacute; obsahu ze syst&eacute;mu';
$lang['admin']['event_desc_contentstylesheet'] = 'Odesl&aacute;no před odesl&aacute;n&iacute;m stylu prohl&iacute;žeči';
$lang['admin']['event_desc_contentprecompile'] = 'Odesl&aacute;no před před&aacute;n&iacute;m obsahu smarty syst&eacute;mu';
$lang['admin']['event_desc_contentpostcompile'] = 'Odesl&aacute;no po zpracov&aacute;n&iacute; obsahu smarty syst&eacute;mem';
$lang['admin']['event_desc_contentpostrender'] = 'Odesl&aacute;no před odesl&aacute;n&iacute;m kombinovan&eacute;ho html prohl&iacute;žeči';
$lang['admin']['event_desc_smartyprecompile'] = 'Odesl&aacute;no před zpracov&aacute;n&iacute;m jak&eacute;hokoliv obsahu určen&eacute;ho pro smarty syst&eacute;m';
$lang['admin']['event_desc_smartypostcompile'] = 'Odesl&aacute;no po zpracov&aacute;n&iacute; jak&eacute;hokoliv obsahu určen&eacute;ho pro smarty syst&eacute;m';
$lang['admin']['event_help_loginpost'] = '<p>Odesl&aacute;na po přihl&aacute;&scaron;eni uživatele do administračn&iacute;ho panelu.</p>
<h4>Parametry</h4>
<ul>
<li>&#039;user&#039; - Odkaz na ovlivněn&yacute; uživatelsk&yacute; objekt.</li>
</ul>';
$lang['admin']['event_help_logoutpost'] = '<p>Odesl&aacute;na po odhl&aacute;&scaron;eni uživatele z administračn&iacute;ho panelu.</p>
<h4>Parametry</h4>
<ul>
<li>&#039;user&#039; - Odkaz na ovlivněn&yacute; uživatelsk&yacute; objekt.</li>
</ul>
';
$lang['admin']['event_help_adduserpre'] = '<p>Odesl&aacute;na před vytvořen&iacute;m nov&eacute;ho uživatele.</p>
<h4>Parametry</h4>
<ul>
<li>&#039;user&#039; - Odkaz na ovlivněn&yacute; uživatelsk&yacute; objekt.</li>
</ul>
';
$lang['admin']['event_help_adduserpost'] = '<p>Odesl&aacute;na po vytvořen&iacute; nov&eacute;ho uživatele.</p>
<h4>Parametry</h4>
<ul>
<li>&#039;user&#039; - Odkaz na ovlivněn&yacute; uživatelsk&yacute; objekt.</li>
</ul>
';
$lang['admin']['event_help_edituserpre'] = '<p>Odesl&aacute;na před uložen&iacute;m změn vlastnost&iacute; uživatele.</p>
<h4>Parametry</h4>
<ul>
<li>&#039;user&#039; - Odkaz na ovlivněn&yacute; uživatelsk&yacute; objekt.</li>
</ul>
';
$lang['admin']['event_help_edituserpost'] = '<p>Odesl&aacute;na po uložen&iacute; změn vlastnost&iacute; uživatele.</p>
<h4>Parametry</h4>
<ul>
<li>&#039;user&#039; - Odkaz na ovlivněn&yacute; uživatelsk&yacute; objekt.</li>
</ul>
';
$lang['admin']['event_help_deleteuserpre'] = '<p>Odesl&aacute;na před vymaz&aacute;n&iacute;m uživatele ze syst&eacute;mu.</p>
<h4>Parametry</h4>
<ul>
<li>&#039;user&#039; - Odkaz na ovlivněn&yacute; uživatelsk&yacute; objekt.</li>
</ul>
';
$lang['admin']['event_help_deleteuserpost'] = '<p>Odesl&aacute;na po vymaz&aacute;n&iacute; uživatele ze syst&eacute;mu.</p>
<h4>Parametry</h4>
<ul>
<li>&#039;user&#039; - Odkaz na ovlivněn&yacute; uživatelsk&yacute; objekt.</li>
</ul>
';
$lang['admin']['event_help_addgrouppre'] = '<p>Odesl&aacute;na před vytvořen&iacute;m nov&eacute; skupiny.</p>
<h4>Parametry</h4>
<ul>
<li>&#039;group&#039; - Odkaz na ovlivněn&yacute; objekt skupiny.</li>
</ul>
';
$lang['admin']['event_help_addgrouppost'] = '<p>Odesl&aacute;na po vytvořen&iacute; nov&eacute; skupiny.</p>
<h4>Parametry</h4>
<ul>
<li>&#039;group&#039; - Odkaz na ovlivněn&yacute; objekt skupiny.</li>
</ul>
';
$lang['admin']['event_help_changegroupassignpre'] = '<p>Odesl&aacute;na před uložen&iacute;m přiřazen&iacute; skupiny.</p>
<h4>Parametry></h4>
<ul>
<li>&#039;group&#039; - Odkaz na objekt skupiny.</li>
<li>&#039;users&#039; - Pole odkazů na uživatelsk&eacute; objekty patř&iacute;c&iacute; do skupiny.</li>
';
$lang['admin']['event_help_changegroupassignpost'] = '<p>Odesl&aacute;na po uložen&iacute; přiřazen&iacute; skupiny.</p>
<h4>Parametry></h4>
<ul>
<li>&#039;group&#039; - Odkaz na ovlivněnou skupinu objektů.</li>
<li>&#039;users&#039; - Pole odkazů na uživatelsk&eacute; objekty patř&iacute;c&iacute; do ovlivněn&eacute; skupiny.</li>
';
$lang['admin']['event_help_editgrouppre'] = '<p>Odesl&aacute;na před uložen&iacute;m změny vlastnost&iacute; skupiny.</p>
<h4>Parametry</h4>
<ul>
<li>&#039;group&#039; - Odkaz na ovlivněn&yacute; objekt skupiny.</li>
</ul>
';
$lang['admin']['event_help_editgrouppost'] = '<p>Odesl&aacute;na po uložen&iacute; změn vlastnost&iacute; skupiny.</p>
<h4>Parametry</h4>
<ul>
<li>&#039;group&#039; - Odkaz na ovlivněn&yacute; objekt skupiny.</li>
</ul>
';
$lang['admin']['event_help_deletegrouppre'] = '<p>Odesl&aacute;na před vymaz&aacute;n&iacute;m skupiny ze syst&eacute;mu.</p>
<h4>Parametry</h4>
<ul>
<li>&#039;group&#039; - Odkaz na ovlivněn&yacute; objekt skupiny.</li>
</ul>
';
$lang['admin']['event_help_deletegrouppost'] = '<p>Odesl&aacute;na po vymaz&aacute;n&iacute; skupiny ze syst&eacute;mu.</p>
<h4>Parametry</h4>
<ul>
<li>&#039;group&#039; - Odkaz na ovlivněn&yacute; objekt skupiny.</li>
</ul>
';
$lang['admin']['event_help_addstylesheetpre'] = '<p>Odesl&aacute;na před vytvořen&iacute;m nov&eacute;ho stylu.</p>
<h4>Parametry</h4>
<ul>
<li>&#039;stylesheet&#039; - Odkaz na ovlivněn&yacute; objekt stylu.</li>
</ul>
';
$lang['admin']['event_help_addstylesheetpost'] = '<p>Odesl&aacute;na po vytvořen&iacute; nov&eacute;ho stylu.</p>
<h4>Parametry</h4>
<ul>
<li>&#039;stylesheet&#039; - Odkaz na ovlivněn&yacute; objekt stylu.</li>
</ul>
';
$lang['admin']['event_help_editstylesheetpre'] = '<p>Odesl&aacute;na před uložen&iacute;m změn stylu.</p>
<h4>Parametry</h4>
<ul>
<li>&#039;stylesheet&#039; - Odkaz na ovlivněn&yacute; objekt stylu.</li>
</ul>
';
$lang['admin']['event_help_editstylesheetpost'] = '<p>Odesl&aacute;na po uložen&iacute; změn stylu.</p>
<h4>Parametry</h4>
<ul>
<li>&#039;stylesheet&#039; - Odkaz na ovlivněn&yacute; objekt stylu.</li>
</ul>
';
$lang['admin']['event_help_deletestylesheetpre'] = '<p>Odesl&aacute;na před vymaz&aacute;n&iacute;m stylu ze syst&eacute;mu.</p>
<h4>Parametry</h4>
<ul>
<li>&#039;stylesheet&#039; - Odkaz na ovlivněn&yacute; objekt stylu.</li>
</ul>
';
$lang['admin']['event_help_deletestylesheetpost'] = '<p>Odesl&aacute;na po vymaz&aacute;n&iacute; stylu ze syst&eacute;mu.</p>
<h4>Parametry</h4>
<ul>
<li>&#039;stylesheet&#039; - Odkaz na ovlivněn&yacute; objekt stylu.</li>
</ul>
';
$lang['admin']['event_help_addtemplatepre'] = '<p>Odesl&aacute;na před vytvořen&iacute;m nov&eacute; &scaron;ablony.</p>
<h4>Parametry</h4>
<ul>
<li>&#039;template&#039; - Odkaz na ovlivněn&yacute; objekt &scaron;ablony.</li>
</ul>
';
$lang['admin']['event_help_addtemplatepost'] = '<p>Odesl&aacute;na po vytvořen&iacute; nov&eacute; &scaron;ablony.</p>
<h4>Parametry</h4>
<ul>
<li>&#039;template&#039; - Odkaz na ovlivněn&yacute; objekt &scaron;ablony.</li>
</ul>
';
$lang['admin']['event_help_edittemplatepre'] = '<p>Odesl&aacute;na před uložen&iacute;m změn v &scaron;abloně.</p>
<h4>Parametry</h4>
<ul>
<li>&#039;template&#039; - Odkaz na ovlivněn&yacute; objekt &scaron;ablony.</li>
</ul>
';
$lang['admin']['event_help_edittemplatepost'] = '<p>Odesl&aacute;na po uložen&iacute; změn v &scaron;abloně.</p>
<h4>Parametry</h4>
<ul>
<li>&#039;template&#039; - Odkaz na ovlivněn&yacute; objekt &scaron;ablony.</li>
</ul>
';
$lang['admin']['event_help_deletetemplatepre'] = '<p>Odesl&aacute;na před vymaz&aacute;n&iacute;m &scaron;ablony ze syst&eacute;mu.</p>
<h4>Parametry</h4>
<ul>
<li>&#039;template&#039; - Odkaz na ovlivněn&yacute; objekt &scaron;ablony.</li>
</ul>
';
$lang['admin']['event_help_deletetemplatepost'] = '<p>Odesl&aacute;na po vymaz&aacute;n&iacute; &scaron;ablony ze syst&eacute;mu.</p>
<h4>Parametry</h4>
<ul>
<li>&#039;template&#039; - Odkaz na ovlivněn&yacute; objekt &scaron;ablony.</li>
</ul>
';
$lang['admin']['event_help_templateprecompile'] = '<p>Odesl&aacute;na před před&aacute;n&iacute;m &scaron;ablony ke zpracov&aacute;n&iacute; pomoc&iacute; Smarty.</p>
<h4>Parametry</h4>
<ul>
<li>&#039;template&#039; - Odkaz na ovlivněn&yacute; text &scaron;ablony.</li>
</ul>
';
$lang['admin']['event_help_templatepostcompile'] = '<p>Odesl&aacute;na po zpracov&aacute;n&iacute; &scaron;ablony pomoc&iacute; Smarty.</p>
<h4>Parametry</h4>
<ul>
<li>&#039;template&#039; - Odkaz na ovlivněn&yacute; text &scaron;ablony.</li>
</ul>
';
$lang['admin']['event_help_addglobalcontentpre'] = '<p>Odesl&aacute;na před vytvořen&iacute;m nov&eacute;ho obsahov&eacute;ho bloku.</p>
<h4>Parametry</h4>
<ul>
<li>&#039;global_content&#039; - Odkaz na ovlivněn&yacute; objekt obsahov&eacute;ho bloku.</li>
</ul>
';
$lang['admin']['event_help_addglobalcontentpost'] = '<p>Odesl&aacute;na po vytvořen&iacute; nov&eacute;ho obsahov&eacute;ho bloku.</p>
<h4>Parametry</h4>
<ul>
<li>&#039;global_content&#039; - Odkaz na ovlivněn&yacute; objekt obsahov&eacute;ho bloku.</li>
</ul>
';
$lang['admin']['event_help_editglobalcontentpre'] = '<p>Odesl&aacute;na před uložen&iacute;m změn obsahov&eacute;ho bloku.</p>
<h4>Parametry</h4>
<ul>
<li>&#039;global_content&#039; - Odkaz na ovlivněn&yacute; objekt obsahov&eacute;ho bloku.</li>
</ul>
';
$lang['admin']['event_help_editglobalcontentpost'] = '<p>Odesl&aacute;na před uložen&iacute;m změn obsahov&eacute;ho bloku.</p>
<h4>Parametry</h4>
<ul>
<li>&#039;global_content&#039; - Odkaz na ovlivněn&yacute; objekt tobsahov&eacute;ho bloku.</li>
</ul>
';
$lang['admin']['event_help_deleteglobalcontentpre'] = '<p>Odesl&aacute;na před smaz&aacute;n&iacute;m obsahov&eacute;ho bloku ze syst&eacute;mu.</p>
<h4>Parametry</h4>
<ul>
<li>&#039;global_content&#039; - Odkaz na ovlivněn&yacute; objekt obsahov&eacute;ho bloku.</li>
</ul>
';
$lang['admin']['event_help_deleteglobalcontentpost'] = '<p>Odesl&aacute;na po smaz&aacute;n&iacute; obsahov&eacute;ho bloku ze syst&eacute;mu.</p>
<h4>Parametry</h4>
<ul>
<li>&#039;global_content&#039; - Odkaz na ovlivněn&yacute; objekt obsahov&eacute;ho bloku.</li>
</ul>
';
$lang['admin']['event_help_globalcontentprecompile'] = '<p>Odesl&aacute;na před před&aacute;n&iacute;m obsahov&eacute;ho bloku ke zpracov&aacute;n&iacute; pomoc&iacute; Smarty.</p>
<h4>Parametry</h4>
<ul>
<li>&#039;global_content&#039; - Odkaz na ovlivněn&yacute; text obsahov&eacute;ho bloku.</li>
</ul>
';
$lang['admin']['event_help_globalcontentpostcompile'] = '<p>Odesl&aacute;na po zpracov&aacute;n&iacute; obsahov&eacute;ho bloku pomoc&iacute; Smarty.</p>
<h4>Parametry</h4>
<ul>
<li>&#039;global_content&#039; - Odkaz na ovlivněn&yacute; text obsahov&eacute;ho bloku.</li>
</ul>
';
$lang['admin']['event_help_contenteditpre'] = '<p>Odesl&aacute;na před uložen&iacute;m změn obsahu.</p>
<h4>Parametry</h4>
<ul>
<li>&#039;global_content&#039; - Odkaz na ovlivněn&yacute; objekt obsahu.</li>
</ul>
';
$lang['admin']['event_help_contenteditpost'] = '<p>Odesl&aacute;na po uložen&iacute; změn obsahu.</p>
<h4>Parametry</h4>
<ul>
<li>&#039;content&#039; - Odkaz na ovlivněn&yacute; objekt obsahu.</li>
</ul>
';
$lang['admin']['event_help_contentdeletepre'] = '<p>Odesl&aacute;na před vymaz&aacute;n&iacute;m obsahu ze syst&eacute;mu.</p>
<h4>Parametry</h4>
<ul>
<li>&#039;content&#039; - Odkaz na ovlivněn&yacute; objekt obsahu.</li>
</ul>
';
$lang['admin']['event_help_contentdeletepost'] = '<p>Odesl&aacute;na po vymaz&aacute;n&iacute; obsahu ze syst&eacute;mu.</p>
<h4>Parametry</h4>
<ul>
<li>&#039;content&#039; - Odkaz na ovlivněn&yacute; objekt obsahu.</li>
</ul>
';
$lang['admin']['event_help_contentstylesheet'] = '<p>Odesl&aacute;na před před&aacute;n&iacute;m stylu prohl&iacute;žeči.</p>
<h4>Parametry</h4>
<ul>
<li>&#039;content&#039; - Odkaz na ovlivněn&yacute; text stylu.</li>
</ul>
';
$lang['admin']['event_help_contentprecompile'] = '<p>Odesl&aacute;na před před&aacute;n&iacute;m obsahu ke zpracov&aacute;n&iacute; pomoc&iacute; Smarty.</p>
<h4>Parametry/h4>
<ul>
<li>&#039;content&#039; - Odkaz na ovlivněn&yacute; text obsahu.</li>
</ul>
';
$lang['admin']['event_help_contentpostcompile'] = '<p>Odesl&aacute;na po zpracov&aacute;n&iacute; obsahu pomoc&iacute; Smarty.</p>
<h4>Parametry</h4>
<ul>
<li>&#039;content&#039; - Odkaz na ovlivněn&yacute; text obsahu.</li>
</ul>
';
$lang['admin']['event_help_contentpostrender'] = '<p>Odesl&aacute;na před před&aacute;n&iacute;m kombinovan&eacute;ho html prohl&iacute;žeči.</p>
<h4>Parametry</h4>
<ul>
<li>&#039;content&#039; - Odkaz na html text.</li>
</ul>
';
$lang['admin']['event_help_smartyprecompile'] = '<p>Odesl&aacute;na před před&aacute;n&iacute;m jak&eacute;hokoliv obsahu ke zpracov&aacute;n&iacute; pomoc&iacute; Smarty.</p>
<h4>Parametry</h4>
<ul>
<li>&#039;content&#039; - Odkaz na ovlivněn&yacute; text.</li>
</ul>
';
$lang['admin']['event_help_smartypostcompile'] = '<p>Odesl&aacute;na po zpracov&aacute;n&iacute; jak&eacute;hokoliv obsahu pomoc&iacute; Smarty.</p>
<h4>Parametry</h4>
<ul>
<li>&#039;content&#039; - Odkaz na ovlivněn&yacute; text.</li>
</ul>
';
$lang['admin']['filterbymodule'] = 'Tř&iacute;dit podle modulů';
$lang['admin']['showall'] = 'Zobrazit v&scaron;e';
$lang['admin']['core'] = 'J&aacute;dro';
$lang['admin']['defaultpagecontent'] = 'V&yacute;choz&iacute; obsah str&aacute;nky';
$lang['admin']['file_url'] = 'Odkaz na soubor (m&iacute;sto URL)';
$lang['admin']['no_file_url'] = 'Nic (Použ&iacute;t URL v&yacute;&scaron;e)';
$lang['admin']['defaultparentpage'] = 'V&yacute;choz&iacute; nadřazen&aacute; str&aacute;nka';
$lang['admin']['error_udt_name_whitespace'] = 'Chyba: Uživatelsky definovan&eacute; tagy nesm&iacute; m&iacute;t mezery ve jm&eacute;ně.';
$lang['admin']['warning_safe_mode'] = '<strong><em>VAROV&Aacute;N&Iacute;:</em></strong> PHP Safe m&oacute;d je povolen.  Toto způsob&iacute; pot&iacute;že s uploadem souborů přes rozhran&iacute; webov&eacute;ho prohl&iacute;žeče, včetně obr&aacute;zků, t&eacute;mat a bal&iacute;čků XML modulů.  Pro zak&aacute;z&aacute;n&iacute; safe m&oacute;du bude třeba kontaktovat Va&scaron;eho hostingov&eacute;ho spr&aacute;vce.';
$lang['admin']['test'] = 'Zkou&scaron;ka';
$lang['admin']['results'] = 'V&yacute;sledky';
$lang['admin']['untested'] = 'Netestov&aacute;no';
$lang['admin']['unknown'] = 'Nezn&aacute;m&eacute;';
$lang['admin']['download'] = 'Stažen&iacute;';
$lang['admin']['frontendwysiwygtouse'] = 'Wysiwyg na str&aacute;nk&aacute;ch (pro koncov&eacute; uživatele)';
$lang['admin']['all_groups'] = 'V&scaron;echny skupiny';
$lang['admin']['utma'] = '156861353.950400003.1225703049.1225720284.1225722907.5';
$lang['admin']['utmz'] = '156861353.1225703049.1.1.utmccn=(direct)|utmcsr=(direct)|utmcmd=(none)';
$lang['admin']['utmc'] = '156861353';
?>