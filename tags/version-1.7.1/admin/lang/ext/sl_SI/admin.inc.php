<?php
$lang['admin']['E_STRICT'] = 'Je E_STRICT onemogočen v error_reporting';
$lang['admin']['test_estrict_failed'] = 'E_STRICT je omogočen v error_reporting';
$lang['admin']['info_estrict_failed'] = 'Nekatere knjižnice, ki jih uporablja CMSMS ne delujejo, če je vklopljena nastavitev E_STRICT.  Prosimo, izklopite jo preden nadaljujete';
$lang['admin']['E_DEPRECATED'] = 'Je E_DEPRECATED onemogočen v error_reporting';
$lang['admin']['test_edeprecated_failed'] = 'E_DEPRECATED je omogočen';
$lang['admin']['info_edeprecated_failed'] = 'Če je E_DEPRECATED vklopljen v va&scaron;em poročanju napak, bodo uporabniki videli veliko opozorilnih sporočil, ki lahko vpivajo na prikaz in funkcionalnost.';
$lang['admin']['session_use_cookies'] = 'Seje lahko uporabljajo spletne pi&scaron;kotke';
$lang['admin']['errorgettingcontent'] = 'Ne morem prebrati informacij za določen objekt vsebine';
$lang['admin']['errordeletingcontent'] = 'Napaka pri brisanju vsebine (stran ima morda podrejene strani, ali pa je označena za privzeto)';
$lang['admin']['invalidemail'] = 'E-mail naslov, ki ste ga vpisali, ni veljaven';
$lang['admin']['info_deletepages'] = 'Pozor: Zaradi omejitve pravic, neatere strani, ki ste jih izbrali za brisanje, morda ne bodo prikazane spodaj';
$lang['admin']['info_pagealias'] = 'Določite unikaten psevdonim (alias) za to stran';
$lang['admin']['info_autoalias'] = 'Če je to polje prazno, bo psevdonim (alias) ustvarjen avtomatično.';
$lang['admin']['invalidparent'] = 'Izbrati morate nadrejeno stran (kontaktirajte administratorja, če ne vidite te možnosti)';
$lang['admin']['forgotpwprompt'] = 'Vpi&scaron;ite uporabni&scaron;ko ime administratorja. E-mail bo poslan na naslove, ki so povezani s tem uporabni&scaron;kim imenom z novimi podatki za prijavo.';
$lang['admin']['info_basic_attributes'] = 'To polje omogoča nastavljanje katere lastnosti vsebin lahko uporabniki brez pravice &amp;quot;Manage All Content&amp;quot; upravljajo.';
$lang['admin']['basic_attributes'] = 'Osnovne lastnosti';
$lang['admin']['no_permission'] = 'Nimate dovoljenja za ta ukaz';
$lang['admin']['bulk_success'] = 'Množična operacija je bila uspe&scaron;no posodobljena.';
$lang['admin']['no_bulk_performed'] = 'Množična operacija ni bila izvedena.';
$lang['admin']['info_preview_notice'] = 'Opozorilo: Plo&scaron;ča za predogled ima podobne karakteristike kot okno spletnega brskalnika, zato omogoča nadaljnjo navigacijo s strani v predogledu. V kolikor zapustite stran, pa lahko pride do nepričakovanega delovanja. Če zapustite stran in se nato vrnete nanjo, boste videli nespremenjene podatke, dokler ne spremenite vsebine v glavnem zavihku in osvežite predogled.';
$lang['admin']['sitedownexcludes'] = 'Naslednji naslovi ne vidijo obvestila o vzdrževanju';
$lang['admin']['info_sitedownexcludes'] = 'Parameter omogoča nastavitev IP naslovov ali omrežij, ki bodo kljub obvestilu o vzdrževanju, &scaron;e vedno lahko dostopali do spletnih strani. To omogoča administratorjem normalno delo, medtem ko obiskovalci vidijo samo obvestilo o vzdrževanju.<br/><br/>Naslovi imajo lahko naslednje zapise:<br/>
1. xxx.xxx.xxx.xxx -- (točen IP naslov)<br/>
2. xxx.xxx.xxx.[yyy-zzz] -- (območje IP naslovov)<br/>
3. xxx.xxx.xxx.xxx/nn -- (nnn = &scaron;tevilo bitov - Cisco zapis.  npr.:  192.168.0.100/24 = celotno 192.168.0 razred C podomrežje)';
$lang['admin']['setup'] = 'Napredne nastavitve';
$lang['admin']['handle_404'] = 'Prilagojeno obravnavanje 404 napak';
$lang['admin']['sitedown_settings'] = 'Nastavitve za vzdrževanje';
$lang['admin']['general_settings'] = 'Splo&scaron;ne nastavitve';
$lang['admin']['help_function_page_attr'] = '<h3>What does this do?</h3>
<p>This tag can be used to return the value of the attributes of a certain page.</p>
<h3>How do I use it?</h3>
<p>Insert the tag into the template like: <code>{page_attr key=&quot;extra1&quot;}</code>.</p>
<h3>What parameters does it take?</h3>
<ul>
  <li><strong>key [required]</strong> The key to return the attribute of.</li>
</ul>';
$lang['admin']['forge'] = 'Forge';
$lang['admin']['disable_wysiwyg'] = 'Onemogoči WYSIWYG urejevalnik na tej strani (ne glede na predlogo ali uporabnikove nastavitve)';
$lang['admin']['help_function_page_image'] = '<h3>Kaj to počne?</h3>
<p>Oznaka izpi&scaron;e vrednost slike ali pomanj&scaron;anih slik (thumbnailov) določene strani.</p>
<h3>Kako uporabim?</h3>
<p>Vstavite oznako v predlogo: <code>{page_image}</code>.</p>
<h3>Kateri parametri so na voljo?</h3>
<ul>
  <li>thumbnail - (neobvezno) izpi&scaron;e pomanj&scaron;ane sličice namesto velikih slik.</li>
</ul>';
$lang['admin']['pagelink_circular'] = 'Povezava strani ne more biti usmerjena na povezavo druge strani';
$lang['admin']['destinationnotfound'] = 'Izbrana stran ne obstaja, ali pa je napačna';
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
$lang['admin']['sqlerror'] = 'SQL napaka v %s';
$lang['admin']['image'] = 'Slika';
$lang['admin']['thumbnail'] = 'Pomanj&scaron;ava';
$lang['admin']['searchable'] = 'Po tej strani lahko i&scaron;čete';
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
$lang['admin']['error_udt_name_chars'] = 'Veljavno UDT ime se začne s črko in podčrtajem, nadaljuje pa s črkami, &scaron;tevili ali podčrtaji.';
$lang['admin']['errorupdatetemplateallpages'] = 'Predloga ni aktivna';
$lang['admin']['hidefrommenu'] = 'Skrij v meniju';
$lang['admin']['settemplate'] = 'Nastavi predlogo';
$lang['admin']['text_settemplate'] = 'Nastavi izbranim stranem drugo predlogo';
$lang['admin']['cachable'] = 'Predpomnjeno';
$lang['admin']['noncachable'] = 'Brez pomnenja';
$lang['admin']['copy_from'] = 'Kopiraj iz';
$lang['admin']['copy_to'] = 'Kopiraj v';
$lang['admin']['copycontent'] = 'Kopiraj element vsebine';
$lang['admin']['md5_function'] = 'md5 funkcija';
$lang['admin']['tempnam_function'] = 'tempnam funkcija';
$lang['admin']['register_globals'] = 'PHP register_globals';
$lang['admin']['output_buffering'] = 'PHP output_buffering';
$lang['admin']['disable_functions'] = 'disable_functions v PHP';
$lang['admin']['xml_function'] = 'Osnovna XML (expat) podpora';
$lang['admin']['magic_quotes_gpc'] = 'Magic quotes za Get/Post/Cookie';
$lang['admin']['magic_quotes_gpc_on'] = 'Enojni in dvojni narekovaj ter po&scaron;evnica (backslash) so avtomatično predznačeni (escaped). Pri shranjevanju predlog boste zato lahko imeli težave.';
$lang['admin']['magic_quotes_runtime'] = 'Magic quotes v runtime';
$lang['admin']['magic_quotes_runtime_on'] = 'Večina funkcij, ki vrnejo podatke, bodo imele narekovaje predznačene s po&scaron;evnico (backslash). Morda boste zaradi tega imeli težave.';
$lang['admin']['file_get_contents'] = 'Test file_get_contents';
$lang['admin']['check_ini_set'] = 'Test ini_set';
$lang['admin']['check_ini_set_off'] = 'Pri tej možnosti boste morda imeli težave z nekaterimi funkcionalnostmi. Test je lahko neuspe&scaron;en tudi, če je aktiviran varni način (safe_mode).';
$lang['admin']['file_uploads'] = 'Nalaganje datotek';
$lang['admin']['test_remote_url'] = 'Test za oddaljen URL';
$lang['admin']['test_remote_url_failed'] = 'Ne boste mogli odpirati datotek na oddaljenem strežniku.';
$lang['admin']['test_allow_url_fopen_failed'] = 'Kadar je url fopen onemogočen ne boste mogli dostopati do URL objektov, kot na primer FTP ali HTTP protokola';
$lang['admin']['connection_error'] = 'Odhodne HTTP povezave ne delujejo! Najverjetneje je razlog v požarnem zidu ali kaki drugi za&scaron;iti, ki blokira povezavo. Zaradi tega upravitelj modulov ter nekatere druge funkcionalnosti morda ne bodo delovali.';
$lang['admin']['remote_connection_timeout'] = 'Povezava je dosegla maksimalen čas izvajanja!';
$lang['admin']['search_string_find'] = 'Povezava uspe&scaron;na!';
$lang['admin']['connection_failed'] = 'Povezava ni uspe&scaron;na!';
$lang['admin']['remote_response_ok'] = 'Oddaljen odgovor: ok!';
$lang['admin']['remote_response_404'] = 'Oddaljen odgovor: ne obstaja!';
$lang['admin']['remote_response_error'] = 'Oddaljen odgovor: napaka!';
$lang['admin']['notifications_to_handle'] = 'Imate <b>%d</b> neobravnavanih obvestil';
$lang['admin']['notification_to_handle'] = 'Imate <b>%d</b> neobravnavano obvestilo';
$lang['admin']['notifications'] = 'Obvestila';
$lang['admin']['dashboard'] = 'Prikaži nadzorno plo&scaron;čo';
$lang['admin']['ignorenotificationsfrommodules'] = 'Spreglej obvestila naslednjih modulov';
$lang['admin']['admin_enablenotifications'] = 'Dovoli uporabnikom ogled obvestil<br/><em>(obvestila bodo prikazana na vseh administratorskih straneh)</em>';
$lang['admin']['enablenotifications'] = 'Omogoči obvestila uporabnikov v administraciji';
$lang['admin']['test_check_open_basedir_failed'] = 'Open basedir omejitve so nastavljene. Morda boste imeli težave z nekaterimi funkcionalnostmi dodatkov zaradi aktivnosti teh omejitev.';
$lang['admin']['config_writable'] = 'config.php je zapisljiv. Zaradi varnosti nastavite pravice na read-only (samo za branje)';
$lang['admin']['caution'] = 'Opozorilo';
$lang['admin']['create_dir_and_file'] = 'Preverjanje, ali HTTPD proces lahko ustvari datoteko znotraj mape, ki jo je kreiral';
$lang['admin']['os_session_save_path'] = 'Ni preverjanja, pot operacijskega sistema';
$lang['admin']['unlimited'] = 'Neomejeno';
$lang['admin']['open_basedir'] = 'PHP Open basedir';
$lang['admin']['open_basedir_active'] = 'Ni preverjanja, aktiviran open basedir';
$lang['admin']['invalid'] = 'Napačno';
$lang['admin']['checksum_passed'] = 'Vsi podatki checksum se ujemajo s prene&scaron;eno datoteko';
$lang['admin']['error_retrieving_file_list'] = 'Napaka pri prebiranju seznama datotek';
$lang['admin']['files_checksum_failed'] = 'Datotekam ni bilo mogoče opraviti checksum';
$lang['admin']['failure'] = 'Napaka';
$lang['admin']['help_function_process_pagedata'] = '<h3>Kaj to počne?</h3>
<p>
Ta vtičnik bo obdelal podatke v bloku &quot;pagedata&quot; vseh vsebinskih strani preko Smarty prevajalnika. Omogoča specifikacijo določenih podatkov za vsako stran posebej preko Smartya, brez spreminjanja celotne predloge za posamezno stran.</p>
<h3>Kako to uporabljam?</h3>
<ol>
  <li>Vstavite Smarty oznake, spremenljivke in ostalo Smarty logiko v polje &quot;pagedata&quot; pri posameznih vsebinskih straneh.</li>
  <li>Vstavite <code>{process_pagedata}</code> oznako na čisti začetek predloge za stran.</li>
</ol>
<br/>
<h3>Kateri parametri so na voljo?</h3>
<p>Zaenkrat noben.</p>';
$lang['admin']['page_metadata'] = 'Specifični meta podatki strani';
$lang['admin']['pagedata_codeblock'] = 'Smarty podatki ali specifična logika te strani';
$lang['admin']['error_uploadproblem'] = 'Napaka pri nalaganju';
$lang['admin']['error_nofileuploaded'] = 'Nobena datoteka ni bila naložena';
$lang['admin']['files_failed'] = 'Datoteke niso prestale md5sum preverjanja';
$lang['admin']['files_not_found'] = 'Ne najdem datotek';
$lang['admin']['info_generate_cksum_file'] = 'Ta funkcija vam bo omogočala generiranje checksum datoteke in shranjevanje na lokalni računalnik za kasnej&scaron;e preverjanje. To bi moralo biti opravljeno pred objavo na spletni strani in/ali po nadgradnjah ali večjih spremembah.';
$lang['admin']['info_validation'] = 'Funkcija bo primerjala checksum datoteke, najdene v prene&scaron;eni datoteki, z datotekami v trenutni namestitvi. Lahko vam pomaga pri iskanju težav pri nalaganju ali ugotavljanju, katere datoteke so bile spremenjene v primeru zlorabe va&scaron;ega sistema. Checksum datoteka je generirana v vsaki različici CMS Made Simple od različice 1.4 dalje.';
$lang['admin']['download_cksum_file'] = 'Prenesite Checksum datoteko';
$lang['admin']['perform_validation'] = 'Opravi validacijo';
$lang['admin']['upload_cksum_file'] = 'Nalaganje Checksum datoteke';
$lang['admin']['checksumdescription'] = 'Validacija integritete CMS datotek s primerjanjem z znanimi checksum-i';
$lang['admin']['system_verification'] = 'Verifikacija sistema';
$lang['admin']['extra1'] = 'Dodaten atribut strani 1';
$lang['admin']['extra2'] = 'Dodaten atribut strani 2';
$lang['admin']['extra3'] = 'Dodaten atribut strani 3';
$lang['admin']['start_upgrade_process'] = 'Začni proces nadgradnje';
$lang['admin']['warning_upgrade'] = '<em><strong>Opozorilo:</strong></em> CMSMS je nujno potrebno nadgraditi.';
$lang['admin']['warning_upgrade_info1'] = 'Trenutno uporabljate shemo različice %s, nadgraditi pa morate na različico %s.';
$lang['admin']['warning_upgrade_info2'] = 'Prosimo, kliknite naslednjo povezavo: %s.';
$lang['admin']['warning_mail_settings'] = 'Va&scaron;e nastavitve elektronske po&scaron;te niso bile skonfigurirane. To lahko povzroča težave pri po&scaron;iljanju sporočil preko va&scaron;e spletne strani. Pojdite na <a href="moduleinterface.php?module=CMSMailer">Raz&scaron;iritve >> CMSMailer</a> in nastavite E-po&scaron;tne nastavitve z informacijami va&scaron;ega strežnika.';
$lang['admin']['view_page'] = 'Prikaži stran v novem oknu';
$lang['admin']['off'] = 'Izklopljeno';
$lang['admin']['on'] = 'Vklopljeno';
$lang['admin']['invalid_test'] = 'Napačna vrednost testnega parametra!';
$lang['admin']['copy_paste_forum'] = 'Prikaži tekstovno poročilo <em>(primerno predvsem za kopiranje na forum)</em>';
$lang['admin']['permission_information'] = 'Informacije o pravicah';
$lang['admin']['server_os'] = 'Operacijski sistem strežnika';
$lang['admin']['server_api'] = 'API strežnika';
$lang['admin']['server_software'] = 'Programska oprema strežnika';
$lang['admin']['server_information'] = 'Informacije o strežniku';
$lang['admin']['session_save_path'] = 'Pot za shranjevanje seje';
$lang['admin']['max_execution_time'] = 'Najdalj&scaron;i čas za izvedbo';
$lang['admin']['gd_version'] = 'GD različica';
$lang['admin']['upload_max_filesize'] = 'Največja velikost za prenos datotek';
$lang['admin']['post_max_size'] = 'Največja velikost POST zahtevka';
$lang['admin']['memory_limit'] = 'PHP omejitev pomnilnika';
$lang['admin']['server_db_type'] = 'Podatkovna baza';
$lang['admin']['server_db_version'] = 'Različica podatkovne baze';
$lang['admin']['phpversion'] = 'Trenutna različica PHP';
$lang['admin']['safe_mode'] = 'PHP varni način (safe mode)';
$lang['admin']['php_information'] = 'PHP informacije';
$lang['admin']['cms_install_information'] = 'Informacije o namestitvi CMS sistema';
$lang['admin']['cms_version'] = 'CMS različica';
$lang['admin']['installed_modules'] = 'Name&scaron;čeni moduli';
$lang['admin']['config_information'] = 'Informacije o konfiguraciji';
$lang['admin']['systeminfo_copy_paste'] = 'Prosimo, prekopirajte označeno besedilo v va&scaron;o objavo v forumu';
$lang['admin']['help_systeminformation'] = 'Spodnje informacije so zbrane z več lokacij in prikazane v obliki povzetka, kar vam omogoča lažje iskanje težav in diagnosticiranje težav, prav tako pa vam olaj&scaron;a zahtevke za pomoč pri va&scaron;i namestitvi CMS Made Simple.';
$lang['admin']['systeminfo'] = 'Informacije o sistemu';
$lang['admin']['systeminfodescription'] = 'Prikaz različnih informacij o va&scaron;em sistemu, ki pomagajo pri diagnozi težav.';
$lang['admin']['welcome_user'] = 'Dobrodo&scaron;li';
$lang['admin']['itsbeensincelogin'] = 'Od va&scaron;e zadnje prijave je preteklo %s';
$lang['admin']['days'] = 'dni';
$lang['admin']['day'] = 'dan';
$lang['admin']['hours'] = 'ur';
$lang['admin']['hour'] = 'uro';
$lang['admin']['minutes'] = 'minut';
$lang['admin']['minute'] = 'minuto';
$lang['admin']['help_css_max_age'] = 'Pri statičnih straneh naj ima ta parameter čim vi&scaron;jo vrednost, pri razvoju strani pa naj bo nastavljen na 0.';
$lang['admin']['css_max_age'] = 'Najdalj&scaron;i čas (v sekundah), kolikor so lahko stilske predloge shranjene v pomnilniku brskalnika (cache)';
$lang['admin']['error'] = 'Napaka';
$lang['admin']['clear_version_check_cache'] = 'Izbri&scaron;i vse različice v pomnilniku ob oddaji';
$lang['admin']['new_version_available'] = '<em>V vednost:</em> Na voljo je nova različica sistema CMS Made Simple. Prosimo obvestite administratorja.';
$lang['admin']['info_urlcheckversion'] = 'Če vpi&scaron;ete &quot;none&quot;, ne bodo opravljeni dodatni testi.<br/>Če pustite polje prazno, bo uporabljen privzeti URL.';
$lang['admin']['urlcheckversion'] = 'Preveri za posodobitve na tem URL naslovu';
$lang['admin']['master_admintheme'] = 'Privzeta predloga za administracijo (stran za prijavo in nove uporabnike)';
$lang['admin']['contenttype_separator'] = 'Razdelilec';
$lang['admin']['contenttype_sectionheader'] = 'Glava področij';
$lang['admin']['contenttype_link'] = 'Zunanja povezava';
$lang['admin']['contenttype_content'] = 'Vsebina';
$lang['admin']['contenttype_pagelink'] = 'Notranja povezava';
$lang['admin']['nogcbwysiwyg'] = 'Onemogoči WYSIWYG urejevalnike na globalnih blokih vsebin';
$lang['admin']['destination_page'] = 'Ciljna stran';
$lang['admin']['additional_params'] = 'Dodatni parametri';
$lang['admin']['help_function_current_date'] = '	<h3>Kaj to počne?</h3>
	<p>Izpi&scaron;e trenutni datum in uro. Če format ni definiran, bo privzeti format v stilu &#039;Jan 01, 2004&#039;.</p>
	<h3>Kako to uporabljam?</h3>
	<p>Vstavite oznako v va&scaron;o predlogo/stran v stilu: <code>{current_date format=&quot;%A %d-%b-%y %T %Z&quot;}</code></p>
	<h3>Katere parametre lahko uporabim?</h3>
	<ul>
		<li><em>(neobvezno)</em>format - format datuma/ure z uporabo parametrov PHP funkcije strftime. Za podrobnosti si oglejte <a href="http://php.net/strftime" target="_blank">strftime dokumentacijo</a>.</li>
		<li><em>(neobvezno)</em>ucword - če parameter postavite na &quot;true&quot;, bo vsak prvi znak posamezne besede izpisan z veliko črko.</li>
	</ul>
	</p>';
$lang['admin']['help_function_valid_xhtml'] = '<h3>Kaj to počne?</h3>
<p>Vrne povezavo do servisa w3c HTML validator.</p>
<h3>Kako to uporabljam?</h3>
<p>V va&scaron;o stran ali predlogo vstavite naslednjo oznako: <code>{valid_xhtml}</code></p>
<h3>Katere parametre lahko uporabim?</h3>
<p>
    <ul>
	<li><em>(neobvezno)</em> url         (string)     - URL naslov, uporabljen za validacijo. Če ni podan, bo uporabljen naslov http://validator.w3.org/check/referer</li>
	<li><em>(neobvezno)</em> class       (string)     - Če je možnost nastavljena, bo uporabljena kot razred (class) za povezave (a oznake)</li>
	<li><em>(neobvezno)</em> target      (string)     - Če je možnost nastavljena, bo uporabljena kot tarča (target) povezav (a oznak)</li>
	<li><em>(neobvezno)</em> image       (true/false) - Če je možnost nastavljena na false, bo uporabljena tekstovna povezava namesto slike - ikone.</li>
	<li><em>(neobvezno)</em> text        (string)     - Če je možnost nastavljena, bo to besedilo uporabljeno kot besedilo povezave oziroma alternativnega besedila slike. Privzeta vrednost je &#039;valid XHTML 1.0 Transitional&#039;.<br /> Če uporabite sliko - ikono, bo podano besedilo uporabljeno tudi kot alternativno besedilo slike (privzeto, to lahko povozite z uporabo &#039;alt&#039; parametra).</li>
	<li><em>(neobvezno)</em> image_class (string)     - Samo če možnost &#039;image&#039; ni nastavljena na false. Razred (class) slikovne oznake (img tag)</li>
	<li><em>(neobvezno)</em> src         (string)     - Samo če možnost &#039;image&#039; ni nastavljena na false. Uporabi določeno ikono. Privzeta ikona http://www.w3.org/Icons/valid-xhtml10</li>
	<li><em>(neobvezno)</em> width       (string)     - Samo če možnost &#039;image&#039; ni nastavljena na false. &Scaron;irina ikone. Privzeta &scaron;irina je 88 (&scaron;irina ikone http://www.w3.org/Icons/valid-xhtml10)</li>
	<li><em>(neobvezno)</em> height      (string)     - Samo če možnost &#039;image&#039; ni nastavljena na false. Vi&scaron;ina ikone. Privzeta vi&scaron;ina je 31 (vi&scaron;ina ikone http://www.w3.org/Icons/valid-xhtml10)</li>
	<li><em>(neobvezno)</em> alt         (string)     - Samo če možnost &#039;image&#039; ni nastavljena na false. Alternativni tekst (&#039;alt&#039; atribut) za sliko. Če ni nastavljen, bo uporabljeno besedilo povezave.</li>
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
$lang['admin']['help_function_title'] = '	<h3>Kaj to počne?</h3>
	<p>Izpi&scaron;e naslov (title) strani.</p>
	<h3>Kako to uporabljam?</h3>
	<p>V va&scaron;o stran ali predlogo vstavite naslednjo oznako: <code>{title}</code></p>
	<h3>Katere parametre lahko uporabim?</h3>
	<p><em>(neobvezno)</em> assign (string) - Dodeli rezultate Smarty spremenljivki s tem imenom.</p>';
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
$lang['admin']['login_info_title'] = 'Informacije';
$lang['admin']['login_info'] = 'Odslej upo&scaron;tevajte naslednje parametre';
$lang['admin']['login_info_params'] = '<ol> 
  <li>Vklopljeni pi&scaron;kotki (cookies) v va&scaron;em spletnem brskalniku</li> 
  <li>Vklopljen Javascript v va&scaron;em spletnem brskalniku</li> 
  <li>Aktivna Pop-up okna na naslednjem naslovu:</li> 
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
$lang['admin']['help_function_html_blob'] = '	<h3>Kaj to počne?</h3>
	<p>Oglejte si pomoč pri global_content za opis.</p>';
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
$lang['admin']['about_function_cms_module'] = '	<p>Avtor: Ted Kulp<tedkulp@users.sf.net></p>
	<p>Verzija: 1.0</p>
	<p>
	Zgodovina sprememb:<br/>
	/
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
$lang['admin']['of'] = 'od';
$lang['admin']['first'] = 'Prva';
$lang['admin']['last'] = 'Zadnja';
$lang['admin']['adminspecialgroup'] = 'Pozor: Člani te skupine imajo privzeto vse pravice';
$lang['admin']['disablesafemodewarning'] = 'Onemogoči opozorilo o varnem načinu v administraciji';
$lang['admin']['allowparamcheckwarnings'] = 'Dovoli preverjanje parametrov za opozorila';
$lang['admin']['date_format_string'] = 'Format datuma';
$lang['admin']['date_format_string_help'] = '<em>strftime</em> formatiran zapis datuma - poizkusite poiskati &#039;strftime&#039; na Googlu';
$lang['admin']['last_modified_at'] = 'Zadnja sprememba';
$lang['admin']['last_modified_by'] = 'Zadnje spremenil';
$lang['admin']['read'] = 'Branje';
$lang['admin']['write'] = 'Pisanje';
$lang['admin']['execute'] = 'Izvajanje';
$lang['admin']['group'] = 'Skupina';
$lang['admin']['other'] = 'Ostali';
$lang['admin']['event_desc_moduleupgraded'] = 'Poslano po nadgradnji modula';
$lang['admin']['event_desc_moduleinstalled'] = 'Poslano po namestitvi modula';
$lang['admin']['event_desc_moduleuninstalled'] = 'Poslano po odstranitvi modula';
$lang['admin']['event_desc_edituserdefinedtagpost'] = 'Poslano po posodobitvi uporabni&scaron;ke oznake';
$lang['admin']['event_desc_edituserdefinedtagpre'] = 'Poslano pred posodobitvijo uporabni&scaron;ke oznake';
$lang['admin']['event_desc_deleteuserdefinedtagpre'] = 'Poslano pred izbrisom uporabni&scaron;ke oznake';
$lang['admin']['event_desc_deleteuserdefinedtagpost'] = 'Poslano po izbrisu uporabni&scaron;ke oznake';
$lang['admin']['event_desc_adduserdefinedtagpost'] = 'Poslano po vstavitvi uporabni&scaron;ke oznake';
$lang['admin']['event_desc_adduserdefinedtagpre'] = 'Poslano pred vstavitvijo uporabni&scaron;ke oznake';
$lang['admin']['global_umask'] = 'Maska za nove datoteke (umask)';
$lang['admin']['errorcantcreatefile'] = 'Ne morem ustvariti datoteke (težave s pravicami?)';
$lang['admin']['errormoduleversionincompatible'] = 'Modul ni kompatibilen s to različico sistema CMS';
$lang['admin']['errormodulenotloaded'] = 'Notranja napaka, modul ni bil izveden';
$lang['admin']['errormodulenotfound'] = 'Notranja napaka, ne najdem instance modula';
$lang['admin']['errorinstallfailed'] = 'Namestitev modula ni bila uspe&scaron;na';
$lang['admin']['errormodulewontload'] = 'Težava pri izvedbi modula na voljo';
$lang['admin']['frontendlang'] = 'Privzeti jezik za spletno stran';
$lang['admin']['info_edituser_password'] = 'Spremenite to polje, če želite spremeniti geslo uporabnika';
$lang['admin']['info_edituser_passwordagain'] = 'Spremenite to polje, če želite spremeniti geslo uporabnika';
$lang['admin']['originator'] = 'Osnovalec';
$lang['admin']['module_name'] = 'Naziv modula';
$lang['admin']['event_name'] = 'Naziv dogodka';
$lang['admin']['event_description'] = 'Opis dogodka';
$lang['admin']['error_delete_default_parent'] = 'Ne morete izbrisati zgornjega elementa privzete strani';
$lang['admin']['jsdisabled'] = 'Ta funkcija zahteva aktiviran Javascript.';
$lang['admin']['order'] = 'Razvrstitev';
$lang['admin']['reorderpages'] = 'Prerazporedi strani';
$lang['admin']['reorder'] = 'Prerazporedi';
$lang['admin']['page_reordered'] = 'Stran je bila uspe&scaron;no prerazporejena';
$lang['admin']['pages_reordered'] = 'Strani so bile uspe&scaron;no prerazporejene';
$lang['admin']['sibling_duplicate_order'] = 'Dve strani na istem nivoju ne moreta imeti iste vrednosti vrstnega reda. Strani niso bile prerazporejene.';
$lang['admin']['no_orders_changed'] = 'Izbrali ste prerazporejanje strani, vendar niste spremenili vrstnega reda. Strani niso bile prerazporejene.';
$lang['admin']['order_too_small'] = 'Vrstni red strani ne more biti enak nič. Strani niso bile prerazporejene.';
$lang['admin']['order_too_large'] = 'Vrstni red strani ne more biti vi&scaron;ji od &scaron;tevila strani na tem nivoju. Strani niso bile prerazporejene.';
$lang['admin']['user_tag'] = 'Uporabni&scaron;ka oznaka';
$lang['admin']['add'] = 'Dodaj';
$lang['admin']['CSS'] = 'CSS';
$lang['admin']['about'] = 'O programu';
$lang['admin']['action'] = 'Akcija';
$lang['admin']['actionstatus'] = 'Akcija/Status';
$lang['admin']['active'] = 'Aktivno';
$lang['admin']['addcontent'] = 'Dodaj novo vsebino';
$lang['admin']['cantremove'] = 'Ne morem odstraniti';
$lang['admin']['changepermissions'] = 'Sprememba pravic';
$lang['admin']['changepermissionsconfirm'] = 'PAZLJIVO\n\nTa akcija bo poizkusila zagotoviti zapisljivost vseh datotek, ki sestavljajo modul, s strani spletnega strežnika.\nSte prepričani, da želite nadaljevati?';
$lang['admin']['contentadded'] = 'Vsebina je bila uspe&scaron;no dodana v bazo.';
$lang['admin']['contentupdated'] = 'Vsebina je bila uspe&scaron;no posodobljena.';
$lang['admin']['contentdeleted'] = 'Vsebina je bila uspe&scaron;no odstranjena iz baze.';
$lang['admin']['success'] = 'Uspe&scaron;no';
$lang['admin']['addcss'] = 'Dodaj stilsko predlogo';
$lang['admin']['addgroup'] = 'Dodaj novo skupino';
$lang['admin']['additionaleditors'] = 'Dodatni urejevalci';
$lang['admin']['addtemplate'] = 'Dodaj novo predlogo';
$lang['admin']['adduser'] = 'Dodaj novega uporabnika';
$lang['admin']['addusertag'] = 'Dodaj uporabni&scaron;ko oznako';
$lang['admin']['adminaccess'] = 'Dostop do administracije';
$lang['admin']['adminlog'] = 'Dnevnik administracije';
$lang['admin']['adminlogcleared'] = 'Dnevnik administracije je bil uspe&scaron;no izbrisan';
$lang['admin']['adminlogempty'] = 'Dnevnik administracije je prazen';
$lang['admin']['adminsystemtitle'] = 'CMS Administracija';
$lang['admin']['adminpaneltitle'] = 'CMS Made Simple Administracijska konzola';
$lang['admin']['advanced'] = 'Napredno';
$lang['admin']['aliasalreadyused'] = 'Psevdonim je bil že uporabljen na neki drugi strani. Spremenite &quot;Psevdonim strani&quot; v zavihku &quot;Možnosti&quot; v nekaj drugega.';
$lang['admin']['aliasmustbelettersandnumbers'] = 'Psevdonim lahko vsebuje samo črke in &scaron;tevilke';
$lang['admin']['aliasnotaninteger'] = 'Psevdonim ne more biti &scaron;tevilo';
$lang['admin']['allpagesmodified'] = 'Vse strani spremenjene!';
$lang['admin']['assignments'] = 'Dodeli uporabnike';
$lang['admin']['associationexists'] = 'Ta dodelitev že obstaja';
$lang['admin']['autoinstallupgrade'] = 'Samodejno namesti ali nadgradi';
$lang['admin']['back'] = 'Nazaj v meni';
$lang['admin']['backtoplugins'] = 'Nazaj na seznam vtičnikov';
$lang['admin']['cancel'] = 'Prekliči';
$lang['admin']['cantchmodfiles'] = 'Ni bilo mogoče spremeniti pravic nekaterim datotekam';
$lang['admin']['cantremovefiles'] = 'Težava pri odstranjevanju datotek (pravice?)';
$lang['admin']['confirmcancel'] = 'Ste prepričani, da želite zavreči spremembe? Kliknite OK, če želite zavreči. Kliknite Prekliči za nadaljevanje z urejanjem.';
$lang['admin']['canceldescription'] = 'Zavrzi spremembe';
$lang['admin']['clearadminlog'] = 'Izbri&scaron;i dnevnik administracije';
$lang['admin']['code'] = 'Koda';
$lang['admin']['confirmdefault'] = 'Ste prepričani, da želite nastaviti - %s - kot privzeto stran?';
$lang['admin']['confirmdeletedir'] = 'Ste prepričani, da želite izbrisati to mapo in vso njeno vsebino?';
$lang['admin']['content'] = 'Vsebina';
$lang['admin']['contentmanagement'] = 'Urejanje vsebin';
$lang['admin']['contenttype'] = 'Tip vsebine';
$lang['admin']['copy'] = 'Kopiraj';
$lang['admin']['copytemplate'] = 'Kopiraj predlogo';
$lang['admin']['create'] = 'Ustvari';
$lang['admin']['createnewfolder'] = 'Ustvari novo mapo';
$lang['admin']['cssalreadyused'] = 'CSS ime je že uporabljeno';
$lang['admin']['cssmanagement'] = 'CSS upravljanje';
$lang['admin']['currentassociations'] = 'Trenutne povezave';
$lang['admin']['currentdirectory'] = 'Trenutna mapa';
$lang['admin']['currentgroups'] = 'Trenutne skupine';
$lang['admin']['currentpages'] = 'Trenutne strani';
$lang['admin']['currenttemplates'] = 'Trenutne predloge';
$lang['admin']['currentusers'] = 'Trenutni uporabniki';
$lang['admin']['custom404'] = 'Prilagojeno sporočilo za 404 napake';
$lang['admin']['database'] = 'Podatkovna baza';
$lang['admin']['databaseprefix'] = 'Predpona podatkovne baze';
$lang['admin']['databasetype'] = 'Tip podatkovne baze';
$lang['admin']['date'] = 'Datum';
$lang['admin']['default'] = 'Privzeto';
$lang['admin']['delete'] = 'Izbri&scaron;i';
$lang['admin']['deleteconfirm'] = 'Ste prepričani, da želite izbrisati - %s - ?';
$lang['admin']['deleteassociationconfirm'] = 'Ste prepričani, da želite izbrisati povezavo do - %s - ?';
$lang['admin']['deletecss'] = 'Izbri&scaron;i CSS';
$lang['admin']['dependencies'] = 'Odvisnosti';
$lang['admin']['description'] = 'Opis';
$lang['admin']['directoryexists'] = 'Ta mapa že obstaja.';
$lang['admin']['down'] = 'Dol';
$lang['admin']['edit'] = 'Uredi';
$lang['admin']['editconfiguration'] = 'Uredi konfiguracijo';
$lang['admin']['editcontent'] = 'Uredi vsebino';
$lang['admin']['editcss'] = 'Uredi stilsko predlogo';
$lang['admin']['editcsssuccess'] = 'Stilska predloga posodobljena';
$lang['admin']['editgroup'] = 'Uredi skupino';
$lang['admin']['editpage'] = 'Uredi stran';
$lang['admin']['edittemplate'] = 'Uredi predlogo';
$lang['admin']['edittemplatesuccess'] = 'Predloga posodobljena';
$lang['admin']['edituser'] = 'Uredi uporabnika';
$lang['admin']['editusertag'] = 'Uredi uporabni&scaron;ko oznako';
$lang['admin']['usertagadded'] = 'Uporabni&scaron;ka oznaka je bila uspe&scaron;no dodana.';
$lang['admin']['usertagupdated'] = 'Uporabni&scaron;ka oznaka je bila uspe&scaron;no spremenjena.';
$lang['admin']['usertagdeleted'] = 'Uporabni&scaron;ka oznaka je bila uspe&scaron;no izbrisana.';
$lang['admin']['email'] = 'E-mail naslov';
$lang['admin']['errorattempteddowngrade'] = 'Namestitev modula starej&scaron;e verzije od trenutne. Operacija preklicana.';
$lang['admin']['errorchildcontent'] = 'Vsebina vsebuje podrejene elemente. Prosimo, najprej odstranite podrejene elemente.';
$lang['admin']['errorcopyingtemplate'] = 'Napaka pri kopiranju predloge';
$lang['admin']['errorcouldnotparsexml'] = 'Napaka pri prebiranju XML datoteke. Prosimo preverite, ali prena&scaron;ate XML datoteko in ne .tar.gz ali .zip datoteko.';
$lang['admin']['errorcreatingassociation'] = 'Napaka pri kreiranju povezave.';
$lang['admin']['errorcssinuse'] = 'Ta stilska predloga je uporabljena na predlogah ali straneh. Prosimo, najprej odstranite te povezave.';
$lang['admin']['errordefaultpage'] = 'Ne morem izbrisati privzete strani. Prosimo, najprej izberite drugo stran za privzeto.';
$lang['admin']['errordeletingassociation'] = 'Napaka pri brisanju povezave.';
$lang['admin']['errordeletingcss'] = 'Napaka pri brisanju CSS';
$lang['admin']['errordeletingdirectory'] = 'Ne morem izbrisati mape. Težave s pravicami?';
$lang['admin']['errordeletingfile'] = 'Ne morem izbrisati datoteke. Težave s pravicami?';
$lang['admin']['errordirectorynotwritable'] = 'Nimam pravic za pisanje v mapo. To lahko pomeni težave z pravicami ali lastni&scaron;tvom, prav tako pa obstaja možnost, da je aktiviran varni način (safe mode).';
$lang['admin']['errordtdmismatch'] = 'Manjkajoča ali nekompatibilna DTD verzija XML datoteke';
$lang['admin']['errorgettingcssname'] = 'Napaka pri prebiranju imena stilske predloe';
$lang['admin']['errorgettingtemplatename'] = 'Napaka pri prebiranju imena predloge';
$lang['admin']['errorincompletexml'] = 'XML datoteka ni popolna ali pa je napačna';
$lang['admin']['uploadxmlfile'] = 'Namestitev modula preko XML datoteke';
$lang['admin']['cachenotwritable'] = 'Mapa za predpomnilnik (cache) ni zapisljiva. Izbris predpomnilnika ne bo deloval. Prosimo, zagotovite polne pravice za branje/pisanje/izvajanje mapi tmp/cache (chmod 777). Morda boste morali deaktivirati varni način (safe mode).';
$lang['admin']['modulesnotwritable'] = 'Mapa za module (modules) ni zapisljiva. Če boste želeli namestiti module z nalaganjem XML datoteke, boste morali zagotoviti polne pravice za branje/pisanje/izvajanje mapi modules (chmod 777). Morda boste morali deaktivirati varni način (safe mode).';
$lang['admin']['noxmlfileuploaded'] = 'Nobena datoteka ni bila naložena. Za namestitev modula preko XML morate izbrati in naložiti .xml datoteko modula z va&scaron;ega računalnika.';
$lang['admin']['errorinsertingcss'] = 'Napaka pri vstavljanju stilske predloge';
$lang['admin']['errorinsertinggroup'] = 'Napaka pri vstavljanju skupine';
$lang['admin']['errorinsertingtag'] = 'Napaka pri vstavljanju uporabni&scaron;ke oznake';
$lang['admin']['errorinsertingtemplate'] = 'Napaka pri vstavljanju predloge';
$lang['admin']['errorinsertinguser'] = 'Napaka pri vstavljanju uporabnika';
$lang['admin']['errornofilesexported'] = 'Napaka pri izvozu datotek v XML';
$lang['admin']['errorretrievingcss'] = 'Napaka pri prenosu stilske predloge';
$lang['admin']['errorretrievingtemplate'] = 'Napaka pri prenosu predloge';
$lang['admin']['errortemplateinuse'] = 'Predloga je &scaron;e veno uporabljena na strani. Prosimo, odstranite to povezavo.';
$lang['admin']['errorupdatingcss'] = 'Napaka pri spreminjanju stilske predloge';
$lang['admin']['errorupdatinggroup'] = 'Napaka pri spreminjanju skupine';
$lang['admin']['errorupdatingpages'] = 'Napaka pri spreminjanju strani';
$lang['admin']['errorupdatingtemplate'] = 'Napaka pri spreminjanju predloge';
$lang['admin']['errorupdatinguser'] = 'Napaka pri spreminjanju uporabnika';
$lang['admin']['errorupdatingusertag'] = 'Napaka pri spreminjanju uporabni&scaron;ke oznake';
$lang['admin']['erroruserinuse'] = 'Uporabnik je &scaron;e vedno lastnik strani z vsebino. Prosimo, spremenite lastni&scaron;tvo k drugemu uporabniku pred izbrisom.';
$lang['admin']['eventhandlers'] = 'Dogodki';
$lang['admin']['editeventhandler'] = 'Uredi upravitelj dogodkov';
$lang['admin']['eventhandlerdescription'] = 'Poveži uporabni&scaron;ke oznake z dogodki';
$lang['admin']['export'] = 'Izvozi';
$lang['admin']['event'] = 'Dogodek';
$lang['admin']['false'] = 'False';
$lang['admin']['settrue'] = 'Nastavi True';
$lang['admin']['filecreatedirnodoubledot'] = 'Mapa ne sme vsebovati &#039;..&#039;.';
$lang['admin']['filecreatedirnoname'] = 'Ne morem ustvariti mapo brez imena.';
$lang['admin']['filecreatedirnoslash'] = 'Mapa ne sme vsebovati &#039;/&#039; ali &#039;\&#039;.';
$lang['admin']['filemanagement'] = 'Urejanje datotek';
$lang['admin']['filename'] = 'Ime datoteke';
$lang['admin']['filenotuploaded'] = 'Datoteke ni bilo mogoče naložiti. Najverjetneje gre za težave s pravicami ali varnim načinom (safe mode).';
$lang['admin']['filesize'] = 'Velikost';
$lang['admin']['firstname'] = 'Ime';
$lang['admin']['groupmanagement'] = 'Urejanje skupin';
$lang['admin']['grouppermissions'] = 'Skupinske pravice';
$lang['admin']['handler'] = 'Upravitelj (uporabni&scaron;ka oznaka)';
$lang['admin']['headtags'] = 'Oznake v glavi';
$lang['admin']['help'] = 'Pomoč';
$lang['admin']['new_window'] = 'novo okno';
$lang['admin']['helpwithsection'] = 'Pomoč pri %s';
$lang['admin']['helpaddtemplate'] = '<p>Predloga, ki nadzoruje izgled in delovanje vsebine va&scaron;ih strani.</p><p>Tu lahko ustvarite postavitev in dodate va&scaron; CSS v področju stilske predloge za prilagoditev izgleda različnih elementov.</p>';
$lang['admin']['helplisttemplate'] = '<p>Na tej strani lahko urejate, bri&scaron;ete in ustvarjate predloge.</p><p>Za kreiranje nove predloge, kliknite gumb <u>Dodaj novo predlogo</u>.</p><p>Če želite, da vse vsebinske strani uporabljajo enako predlogo, kliknite povezavo <u>Nastavi za vso vsebino</u>.</p><p>Če želite podvojiti predlogo, kliknite ikono <u>Kopiraj</u> in vpra&scaron;ani boste za naziv nove predloge.</p>';
$lang['admin']['home'] = 'Domov';
$lang['admin']['homepage'] = 'Domača stran';
$lang['admin']['hostname'] = 'Strežnik';
$lang['admin']['idnotvalid'] = 'Podan ID ni pravilen';
$lang['admin']['imagemanagement'] = 'Urejanje slik';
$lang['admin']['informationmissing'] = 'Manjkajoče informacije';
$lang['admin']['install'] = 'Namestitev';
$lang['admin']['invalidcode'] = 'Vne&scaron;ena je napačna koda.';
$lang['admin']['illegalcharacters'] = 'Nedovoljeni znaki v polju %s.';
$lang['admin']['invalidcode_brace_missing'] = '&Scaron;tevilo oklepajev se ne ujema';
$lang['admin']['invalidtemplate'] = 'Predloga ni pravilna';
$lang['admin']['itemid'] = 'ID elementa';
$lang['admin']['itemname'] = 'Ime elementa';
$lang['admin']['language'] = 'Jezik';
$lang['admin']['lastname'] = 'Priimek';
$lang['admin']['logout'] = 'Odjava';
$lang['admin']['loginprompt'] = 'Vpi&scaron;ite pravilne uporabni&scaron;ke podatke za dostop do administracijske konzole.';
$lang['admin']['logintitle'] = 'Prijava v CMS sistem';
$lang['admin']['menutext'] = 'Besedilo menija';
$lang['admin']['missingparams'] = 'Napačni ali manjkajoči parametri';
$lang['admin']['modifygroupassignments'] = 'Sprememba skupinskih dodelitev';
$lang['admin']['moduleabout'] = 'Več informacij o modulu %s';
$lang['admin']['modulehelp'] = 'Pomoč za modul %s';
$lang['admin']['msg_defaultcontent'] = 'Sem dodajte kodo, ki bo prikazana kot privzeta vsebina vseh novih strani';
$lang['admin']['msg_defaultmetadata'] = 'Sem dodajte kodo, ki bo prikazana v področju meta podatkov vseh novih strani';
$lang['admin']['wikihelp'] = 'Skupnost za pomoč';
$lang['admin']['moduleinstalled'] = 'Modul je že name&scaron;čen';
$lang['admin']['moduleinterface'] = 'Vmesnik za %';
$lang['admin']['modules'] = 'Moduli';
$lang['admin']['move'] = 'Premakni';
$lang['admin']['name'] = 'Ime';
$lang['admin']['needpermissionto'] = 'Dovoljenje od &#039;%&#039; je potrebno za izvedbo te funkcije.';
$lang['admin']['needupgrade'] = 'Potrebuje nadgradnjo';
$lang['admin']['newtemplatename'] = 'Ime nove predloge';
$lang['admin']['next'] = 'Naprej';
$lang['admin']['noaccessto'] = 'Nimate dostopa do %s';
$lang['admin']['nocss'] = 'Ni stilske predloge';
$lang['admin']['noentries'] = 'Ni zapisov';
$lang['admin']['nofieldgiven'] = 'Niste podali %s!';
$lang['admin']['nofiles'] = 'Ni datotek';
$lang['admin']['nopasswordmatch'] = 'Gesli se ne ujemata';
$lang['admin']['norealdirectory'] = 'Veljavna mapa ni bila podana';
$lang['admin']['norealfile'] = 'Veljavna datoteka ni bila podana';
$lang['admin']['notinstalled'] = 'Ni name&scaron;čeno';
$lang['admin']['overwritemodule'] = 'Povozi obstoječe module';
$lang['admin']['owner'] = 'Lastnik';
$lang['admin']['pagealias'] = 'Psevdonim strani';
$lang['admin']['pagedefaults'] = 'Privzete vrednosti strani';
$lang['admin']['pagedefaultsdescription'] = 'Nastavitev privzetih vrednosti za nove strani.';
$lang['admin']['parent'] = 'Nadrejeni';
$lang['admin']['password'] = 'Geslo';
$lang['admin']['passwordagain'] = 'Ponovite geslo';
$lang['admin']['permission'] = 'Pravica';
$lang['admin']['permissions'] = 'Pravice';
$lang['admin']['permissionschanged'] = 'Pravice so bile spremenjene.';
$lang['admin']['pluginabout'] = 'Informacije o oznaki %';
$lang['admin']['pluginhelp'] = 'Pomoč za oznako %s';
$lang['admin']['pluginmanagement'] = 'Urejanje vtičnikov';
$lang['admin']['prefsupdated'] = 'Nastavitve so bile spremenjene';
$lang['admin']['preview'] = 'Predogled';
$lang['admin']['previewdescription'] = 'Predogled sprememb';
$lang['admin']['previous'] = 'Prej&scaron;nja';
$lang['admin']['remove'] = 'Izbri&scaron;i';
$lang['admin']['removeconfirm'] = 'Ta ukaz bo za stalno izbrisal vse datoteke, ki sestavljajo ta modul iz te namestitve.\nSte prepričani, da želite nadaljevati?';
$lang['admin']['removecssassociation'] = 'Izbri&scaron;i povezavo stilske predloge';
$lang['admin']['saveconfig'] = 'Shrani konfiguracijo';
$lang['admin']['send'] = 'Po&scaron;lji';
$lang['admin']['setallcontent'] = 'Nastavi vse strani';
$lang['admin']['setallcontentconfirm'] = 'Ste prepričani, da želite nastaviti vsem stranem, da uporabljajo to predlogo?';
$lang['admin']['showinmenu'] = 'Prikaz v meniju';
$lang['admin']['showsite'] = 'Prikaz strani';
$lang['admin']['sitedownmessage'] = 'Sporočilo ob neaktivni strani';
$lang['admin']['siteprefs'] = 'Globalne nastavitve';
$lang['admin']['status'] = 'Status';
$lang['admin']['stylesheet'] = 'Stilska predloga';
$lang['admin']['submit'] = 'Po&scaron;lji';
$lang['admin']['submitdescription'] = 'Shrani spremembe';
$lang['admin']['tags'] = 'Oznake';
$lang['admin']['template'] = 'Predloga';
$lang['admin']['templateexists'] = 'Predloga s tem imenom že obstaja';
$lang['admin']['templatemanagement'] = 'Urejanje predlog';
$lang['admin']['title'] = 'Naziv';
$lang['admin']['tools'] = 'Orodja';
$lang['admin']['true'] = 'True';
$lang['admin']['setfalse'] = 'Nastavi False';
$lang['admin']['type'] = 'Tip';
$lang['admin']['typenotvalid'] = 'Tip ni veljaven';
$lang['admin']['uninstall'] = 'Odstrani';
$lang['admin']['uninstallconfirm'] = 'Ste prepričani, da želite odstraniti ta modul? Ime:';
$lang['admin']['up'] = 'Gor';
$lang['admin']['upgrade'] = 'Nadgradnja';
$lang['admin']['upgradeconfirm'] = 'Ste prepričani, da želite opraviti nadgradnjo?';
$lang['admin']['uploadfile'] = 'Naloži datoteko';
$lang['admin']['url'] = 'URL';
$lang['admin']['useadvancedcss'] = 'Uporabi napredno urejanje stilske predloge';
$lang['admin']['user'] = 'Uporabnik';
$lang['admin']['userdefinedtags'] = 'Uporabni&scaron;ke oznake';
$lang['admin']['usermanagement'] = 'Urejanje uporabnikov';
$lang['admin']['username'] = 'Uporabni&scaron;ko ime';
$lang['admin']['usernameincorrect'] = 'Uporabni&scaron;ko ime ali geslo nista pravilna';
$lang['admin']['userprefs'] = 'Uporabni&scaron;ke nastavitve';
$lang['admin']['usersassignedtogroup'] = 'Uporabnik dodeljen v skupino %s';
$lang['admin']['usertagexists'] = 'Oznaka s tem imenom že obstaja. Prosimo, izberite drugačno.';
$lang['admin']['usewysiwyg'] = 'Uporabi WYSIWYG urejevalnik za to vsebino';
$lang['admin']['version'] = 'Različica';
$lang['admin']['view'] = 'Prikaz';
$lang['admin']['welcomemsg'] = 'Dobrodo&scaron;li %s';
$lang['admin']['directoryabove'] = 'mapa nad trenutnim nivojem';
$lang['admin']['nodefault'] = 'Privzeto ni izbrano';
$lang['admin']['blobexists'] = 'Globalni blok vsebine že obstaja';
$lang['admin']['blobmanagement'] = 'Urejanje globalnih blokov vsebine';
$lang['admin']['errorinsertingblob'] = 'Napaka pri vstavljanju globalnega bloka vsebine';
$lang['admin']['addhtmlblob'] = 'Dodaj globalni blok vsebine';
$lang['admin']['edithtmlblob'] = 'Uredi globalni blok vsebine';
$lang['admin']['edithtmlblobsuccess'] = 'Globalni blok vsebine spremenjen';
$lang['admin']['tagtousegcb'] = 'Oznaka za uporabo tega bloka';
$lang['admin']['gcb_wysiwyg'] = 'Omogoči WYSIWYG za globalne bloke vsebine';
$lang['admin']['gcb_wysiwyg_help'] = 'Omogoči WYSIWYG urejevalnik pri urejanju globalnih blokov vsebine';
$lang['admin']['filemanager'] = 'Upravitelj datotek';
$lang['admin']['imagemanager'] = 'Upravitelj slik';
$lang['admin']['encoding'] = 'Kodna tabela';
$lang['admin']['clearcache'] = 'Izbri&scaron;i predpomnilnik';
$lang['admin']['clear'] = 'Izbri&scaron;i';
$lang['admin']['cachecleared'] = 'Predpomnilnik je bil izbrisan';
$lang['admin']['apply'] = 'Uporabi';
$lang['admin']['applydescription'] = 'Shrani nastavitve in nadaljuj z urejanjem';
$lang['admin']['none'] = 'noben';
$lang['admin']['wysiwygtouse'] = 'Izberite WYSIWYG urejevalnik';
$lang['admin']['syntaxhighlightertouse'] = 'Izberite označevalec sintakse';
$lang['admin']['hasdependents'] = 'Ima odvisne elemente';
$lang['admin']['missingdependency'] = 'Manjkajoči odvisni elementi';
$lang['admin']['minimumversion'] = 'Minimalna različica';
$lang['admin']['minimumversionrequired'] = 'Minimalna obvezna različica CMSMS';
$lang['admin']['maximumversion'] = 'Najvi&scaron;ja različica';
$lang['admin']['maximumversionsupported'] = 'Najvi&scaron;ja podprta različica CMSMS';
$lang['admin']['depsformodule'] = 'Obvezni elementi za modul %s';
$lang['admin']['installed'] = 'Name&scaron;čeno';
$lang['admin']['author'] = 'Avtor';
$lang['admin']['changehistory'] = 'Spremeni zgodovino';
$lang['admin']['moduleerrormessage'] = 'Sporočilo o napaki modula %s';
$lang['admin']['moduleupgradeerror'] = 'Pri&scaron;lo je do napake pri nadgradnji modula.';
$lang['admin']['moduleinstallmessage'] = 'Sporočilo o namestitvi modula %s';
$lang['admin']['moduleuninstallmessage'] = 'Sporočilo o odstranitvi modula %s';
$lang['admin']['admintheme'] = 'Predloga administracije';
$lang['admin']['addstylesheet'] = 'Dodaj stilsko predlogo';
$lang['admin']['editstylesheet'] = 'Uredi stilsko predlogo';
$lang['admin']['addcssassociation'] = 'Dodaj povezavo stilske predloge';
$lang['admin']['attachstylesheet'] = 'Pripni to stilsko predlogo';
$lang['admin']['attachtemplate'] = 'Pripni k tej predlogi';
$lang['admin']['main'] = 'Osnovno';
$lang['admin']['pages'] = 'Strani';
$lang['admin']['page'] = 'Stran';
$lang['admin']['files'] = 'Datoteke';
$lang['admin']['layout'] = 'Izgled';
$lang['admin']['usersgroups'] = 'Uporabniki &amp; skupine';
$lang['admin']['extensions'] = 'Raz&scaron;iritve';
$lang['admin']['preferences'] = 'Nastavitve';
$lang['admin']['admin'] = 'Administracija strani';
$lang['admin']['viewsite'] = 'Prikaz strani';
$lang['admin']['templatecss'] = 'Dodeli predoge stilski predogi';
$lang['admin']['plugins'] = 'Vtičniki';
$lang['admin']['movecontent'] = 'Premakni strani';
$lang['admin']['module'] = 'Modul';
$lang['admin']['usertags'] = 'Uporabni&scaron;ke oznake';
$lang['admin']['htmlblobs'] = 'Globalni bloki vsebine';
$lang['admin']['adminhome'] = 'Naslovnica administracije';
$lang['admin']['liststylesheets'] = 'Stilske predloge';
$lang['admin']['preferencesdescription'] = 'Na tem mestu lahko nastavite nastavitve za celotno stran.';
$lang['admin']['adminlogdescription'] = 'Prikaz dnevnika dela v administraciji.';
$lang['admin']['mainmenu'] = 'Glavni meni';
$lang['admin']['users'] = 'Uporabniki';
$lang['admin']['usersdescription'] = 'Na tem mestu lahko urejate uporabnike.';
$lang['admin']['groups'] = 'Skupine';
$lang['admin']['groupsdescription'] = 'Na tem mestu lahko urejate skupine uporabnikov.';
$lang['admin']['groupassignments'] = 'Dodelitve skupinam';
$lang['admin']['groupassignmentdescription'] = 'Na tem mestu lahko dodelite uporabnike v skupine.';
$lang['admin']['groupperms'] = 'Skupinske pravice';
$lang['admin']['grouppermsdescription'] = 'Nastavitev pravic in nivojev dostopa za skupine';
$lang['admin']['pagesdescription'] = 'Na tem mestu dodajamo in urejamo strani ter druge vsebine.';
$lang['admin']['htmlblobdescription'] = 'Globalni bloki vsebine so delčki vsebin, ki jih lahko vstavite v va&scaron;e strani ali predloge.';
$lang['admin']['templates'] = 'Predloge';
$lang['admin']['templatesdescription'] = 'Na tem mestu dodajamo in urejamo predloge. Predloge definirajo izgled in delovanje va&scaron;e spletne strani.';
$lang['admin']['stylesheets'] = 'Stilske predloge';
$lang['admin']['stylesheetsdescription'] = 'Urejanje stilskih predlog je napreden način za urejanje CSS predlog, ločeno od samih predlog.';
$lang['admin']['filemanagerdescription'] = 'Nalaganje in urejanje datotek';
$lang['admin']['imagemanagerdescription'] = 'Nalaganje/urejanje in brisanje slik';
$lang['admin']['moduledescription'] = 'Moduli raz&scaron;irijo CMS Made Simple in nudijo različne prilagojene funkcionalnosti.';
$lang['admin']['tagdescription'] = 'Oznake so kraj&scaron;i funkcionalni elementi, ki jih lahko dodelite va&scaron;im vsebinam in/ali predlogam.';
$lang['admin']['usertagdescription'] = 'Oznake, ki jih lahko sami ustvarjate in spreminjate, zato da opravljajo specifične naloge, neposredno iz va&scaron;ega brskalnika.';
$lang['admin']['installdirwarning'] = '<em><strong>Opozorilo:</strong></em> mapa za namestitev (install) &scaron;e vedno obstaja. Prosimo, izbri&scaron;ite jo v celoti.';
$lang['admin']['subitems'] = 'Podrejeni elementi';
$lang['admin']['extensionsdescription'] = 'Moduli, oznake in ostalo';
$lang['admin']['usersgroupsdescription'] = 'Elementi, povezani z uporabniki in skupinami.';
$lang['admin']['layoutdescription'] = 'Možnosti izgleda strani.';
$lang['admin']['admindescription'] = 'Funkcije za administriranje strani.';
$lang['admin']['contentdescription'] = 'Na tem mestu dodajamo in urejamo vsebine.';
$lang['admin']['enablecustom404'] = 'Omogoči lastno 404 sporočilo';
$lang['admin']['enablesitedown'] = 'Omogoči sporočilo o neaktivni spletni strani';
$lang['admin']['bookmarks'] = 'Bližnjice';
$lang['admin']['user_created'] = 'Lastne bližnjice';
$lang['admin']['forums'] = 'Forumi';
$lang['admin']['wiki'] = 'Wiki';
$lang['admin']['irc'] = 'IRC';
$lang['admin']['module_help'] = 'Pomoč pri modulu';
$lang['admin']['managebookmarks'] = 'Urejanje bližnjic';
$lang['admin']['editbookmark'] = 'Uredi bližnjico';
$lang['admin']['addbookmark'] = 'Dodaj bližnjico';
$lang['admin']['recentpages'] = 'Nedavne strani';
$lang['admin']['groupname'] = 'Ime skupine';
$lang['admin']['selectgroup'] = 'Izberite skupino';
$lang['admin']['updateperm'] = 'Sprememba pravic';
$lang['admin']['admincallout'] = 'Bližnjice v administraciji';
$lang['admin']['showbookmarks'] = 'Prikaz bližnjic v administraciji';
$lang['admin']['hide_help_links'] = 'Skrij povezave za pomoč';
$lang['admin']['hide_help_links_help'] = 'Odkljukajte to možnost za izklop povezav za pomoč v glavah strani.';
$lang['admin']['showrecent'] = 'Prikaži nedavno uporabljene strani';
$lang['admin']['attachtotemplate'] = 'Pripni stilsko predlogo predlogi';
$lang['admin']['attachstylesheets'] = 'Pripni stilsko predlogo';
$lang['admin']['indent'] = 'Zamakni seznam strani za poduarek hierarhije';
$lang['admin']['adminindent'] = 'Prikaz vsebine';
$lang['admin']['contract'] = 'Skrči področje';
$lang['admin']['expand'] = 'Raz&scaron;iri področje';
$lang['admin']['expandall'] = 'Raz&scaron;iri vsa področja';
$lang['admin']['contractall'] = 'Skrči vsa področja';
$lang['admin']['menu_bookmarks'] = '[+]';
$lang['admin']['globalconfig'] = 'Globalne nastavitve';
$lang['admin']['adminpaging'] = '&Scaron;tevilo zapisov za prikaz na stran v seznamu strani';
$lang['admin']['nopaging'] = 'Prikaži vse zapise';
$lang['admin']['myprefs'] = 'Moje nastavitve';
$lang['admin']['myprefsdescription'] = 'Na tem mestu lahko prilagodite administracijo va&scaron;im potrebam';
$lang['admin']['myaccount'] = 'Moj račun';
$lang['admin']['myaccountdescription'] = 'Na tem mestu lahko posodobite podrobnosti va&scaron;ega osebnega računa.';
$lang['admin']['adminprefs'] = 'Uporabni&scaron;ke nastavitve';
$lang['admin']['adminprefsdescription'] = 'Na tem mestu lahko nastavite specifične nastavitve za administracijo strani.';
$lang['admin']['managebookmarksdescription'] = 'Na tem mestu lahko urejate bližnjice va&scaron;e administracije';
$lang['admin']['options'] = 'Možnosti';
$lang['admin']['langparam'] = 'Parameter se uporablja za izbor jezika za prikaz na strani. Vsi moduli ne podpirajo ali ne potrebujejo tega.';
$lang['admin']['parameters'] = 'Parametri';
$lang['admin']['mediatype'] = 'Tip vsebine';
$lang['admin']['mediatype_'] = 'Ni dodeljeno : velja povsod';
$lang['admin']['mediatype_all'] = 'vse : Primerno za vse naprave';
$lang['admin']['mediatype_aural'] = 'aural : Namenjeno glasovnim napravam';
$lang['admin']['mediatype_braille'] = 'braille : Namenjeno napravam za braille pisavo';
$lang['admin']['mediatype_embossed'] = 'embossed : Namenjeno tiskalnikom za braille pisavo';
$lang['admin']['mediatype_handheld'] = 'handheld : Namenjeno prenosnim napravam';
$lang['admin']['mediatype_print'] = 'print : Namenjeno tisku s tiskalnikom';
$lang['admin']['mediatype_projection'] = 'projection : Namenjeno za prezentacije, projektorje in tisk na transparentne podlage';
$lang['admin']['mediatype_screen'] = 'screen : Namenjeno barvnim računalni&scaron;kim zaslonom';
$lang['admin']['mediatype_tty'] = 'tty : Namenjeno napravam s fiksno &scaron;irino črk, kot na primer terminalom.';
$lang['admin']['mediatype_tv'] = 'tv : Namenjeno televizijskim napravam.';
$lang['admin']['assignmentchanged'] = 'Skupinske dodelitve so bile spremenjene.';
$lang['admin']['stylesheetexists'] = 'Stilska predloga obstaja';
$lang['admin']['errorcopyingstylesheet'] = 'Napaka pri kopiranju stilske predloge';
$lang['admin']['copystylesheet'] = 'Kopiraj stilsko predlogo';
$lang['admin']['newstylesheetname'] = 'Novo ime stilske predloge';
$lang['admin']['target'] = 'Tarča';
$lang['admin']['xml'] = 'XML';
$lang['admin']['xmlmodulerepository'] = 'URL ModuleRepository soap strežnika';
$lang['admin']['metadata'] = 'Meta podatki';
$lang['admin']['globalmetadata'] = 'Globalni meta podatki';
$lang['admin']['titleattribute'] = 'Opis (title atribut)';
$lang['admin']['tabindex'] = 'Tab Indeks';
$lang['admin']['accesskey'] = 'Tipka za hiter dostop';
$lang['admin']['sitedownwarning'] = '<strong>Opozorilo:</strong> Va&scaron;a stran trenutno prikazuje sporočilo &quot;Stran trenutno ni dostopna&quot;. Če želite to izklopiti, odstranite datoteko %s .';
$lang['admin']['deletecontent'] = 'Izbri&scaron;i vsebino';
$lang['admin']['deletepages'] = 'Želite izbrisati te strani?';
$lang['admin']['selectall'] = 'Izberi vse';
$lang['admin']['selecteditems'] = 'Z izbranimi';
$lang['admin']['inactive'] = 'Neaktivno';
$lang['admin']['deletetemplates'] = 'Izbri&scaron;i predloge';
$lang['admin']['templatestodelete'] = 'Te predloge bodo izbrisane';
$lang['admin']['wontdeletetemplateinuse'] = 'Te predloge so v uporabi in ne bodo izbrisane';
$lang['admin']['deletetemplate'] = 'Izbri&scaron;i stilske predloge';
$lang['admin']['stylesheetstodelete'] = 'Te stilske predloge bodo izbrisane';
$lang['admin']['sitename'] = 'Ime strani';
$lang['admin']['siteadmin'] = 'Administrator strani';
$lang['admin']['images'] = 'Urejevalnik slik';
$lang['admin']['blobs'] = 'Globalni bloki vsebine';
$lang['admin']['groupmembers'] = 'Skupinske dodelitve';
$lang['admin']['troubleshooting'] = '(Odpravljanje težav)';
$lang['admin']['event_desc_loginpost'] = 'Poslano po prijavi uporabnika v administracijo';
$lang['admin']['event_desc_logoutpost'] = 'Poslano po odjavi uporabnika iz administracije';
$lang['admin']['event_desc_adduserpre'] = 'Poslano preden je ustvarjen nov uporabnik';
$lang['admin']['event_desc_adduserpost'] = 'Poslano po ustvaritvi novega uporabnika';
$lang['admin']['event_desc_edituserpre'] = 'Poslano preden so shranjene spremembe uporabnika';
$lang['admin']['event_desc_edituserpost'] = 'Poslano po shranitvi sprememb uporabnika';
$lang['admin']['event_desc_deleteuserpre'] = 'Poslano pred izbrisom uporabnika iz sistema';
$lang['admin']['event_desc_deleteuserpost'] = 'Poslano po izbrisu uporabnika iz sistema';
$lang['admin']['event_desc_addgrouppre'] = 'Poslano preden je ustvarjena nova skupina';
$lang['admin']['event_desc_addgrouppost'] = 'Poslano po ustvaritvi nove skupine';
$lang['admin']['event_desc_changegroupassignpre'] = 'Poslano preden so shranjene skupinske dodelitve';
$lang['admin']['event_desc_changegroupassignpost'] = 'Poslano po shranitvi skupinskih dodelitev';
$lang['admin']['event_desc_editgrouppre'] = 'Poslano preden so shranjene spremembe skupine';
$lang['admin']['event_desc_editgrouppost'] = 'Poslano po shranitvi sprememb skupine';
$lang['admin']['event_desc_deletegrouppre'] = 'Poslano pred izbrisom skupine iz sistema';
$lang['admin']['event_desc_deletegrouppost'] = 'Poslano po izbrisu skupine iz sistema';
$lang['admin']['event_desc_addstylesheetpre'] = 'Poslano preden je ustvarjena nova stilska predloga';
$lang['admin']['event_desc_addstylesheetpost'] = 'Poslano po ustvaritvi nove stilske predloge';
$lang['admin']['event_desc_editstylesheetpre'] = 'Poslano preden so shranjene spremembe stilske predloge';
$lang['admin']['event_desc_editstylesheetpost'] = 'Poslano po shranitvi sprememb stilske predloge';
$lang['admin']['event_desc_deletestylesheetpre'] = 'Poslano preden je izbrisana stilska predloga iz sistema';
$lang['admin']['event_desc_deletestylesheetpost'] = 'Poslano po izbrisu stilske predloge iz sistema';
$lang['admin']['event_desc_addtemplatepre'] = 'Poslano preden je ustvarjena nova predloga';
$lang['admin']['event_desc_addtemplatepost'] = 'Poslano po ustvaritvi nove predloge';
$lang['admin']['event_desc_edittemplatepre'] = 'Poslano preden so shranjene spremembe predloge';
$lang['admin']['event_desc_edittemplatepost'] = 'Poslano po shranitvi sprememb predloge';
$lang['admin']['event_desc_deletetemplatepre'] = 'Poslano preden je predloga izbrisana iz sistema';
$lang['admin']['event_desc_deletetemplatepost'] = 'Poslano po izbrisu predloge iz sistema';
$lang['admin']['event_desc_templateprecompile'] = 'Poslano preden je predloga poslana v procesiranje Smartyu';
$lang['admin']['event_desc_templatepostcompile'] = 'Poslano po Smarty procesiranju predloge';
$lang['admin']['event_desc_addglobalcontentpre'] = 'Poslano preden je ustvarjen nov globalni blok vsebine';
$lang['admin']['event_desc_addglobalcontentpost'] = 'Poslano po kreiranju novega globalnega bloka vsebine';
$lang['admin']['event_desc_editglobalcontentpre'] = 'Poslano preden so shranjene spremembe globalnega bloka vsebine';
$lang['admin']['event_desc_editglobalcontentpost'] = 'Poslano po spremembah globalnega bloka vsebine';
$lang['admin']['event_desc_deleteglobalcontentpre'] = 'Poslano preden je izbrisan globalen blok vsebine iz sistema';
$lang['admin']['event_desc_deleteglobalcontentpost'] = 'Poslano po izbrisu globalnega bloka vsebine iz sistema';
$lang['admin']['event_desc_globalcontentprecompile'] = 'Poslano preden je globalni blok vsebine poslan v procesiranje Smartyu';
$lang['admin']['event_desc_globalcontentpostcompile'] = 'Poslano po Smarty procesiranju globalnega bloka vsebine';
$lang['admin']['event_desc_contenteditpre'] = 'Poslano preden so shranjene spremembe vsebine';
$lang['admin']['event_desc_contenteditpost'] = 'Poslano po shranitvi sprememb vsebine';
$lang['admin']['event_desc_contentdeletepre'] = 'Poslano pred izbrisom vsebine iz sistema';
$lang['admin']['event_desc_contentdeletepost'] = 'Poslano po izbrisu vsebine iz sistema';
$lang['admin']['event_desc_contentstylesheet'] = 'Poslano preden je poslana stilska predloga brskalniku';
$lang['admin']['event_desc_contentprecompile'] = 'Poslano preden je vsebina poslana v procesiranje Smartyu';
$lang['admin']['event_desc_contentpostcompile'] = 'Poslano po Smarty procesiranju vsebine';
$lang['admin']['event_desc_contentpostrender'] = 'Poslano preden je skupni HTML poslan brskalniku';
$lang['admin']['event_desc_smartyprecompile'] = 'Poslano preden je katera koli vsebina poslana v procesiranje Smartyu';
$lang['admin']['event_desc_smartypostcompile'] = 'Poslano po Smarty procesiranju katere koli vsebine';
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
$lang['admin']['filterbymodule'] = 'Filter po modulu';
$lang['admin']['showall'] = 'Prikaži vse';
$lang['admin']['core'] = 'Jedro';
$lang['admin']['defaultpagecontent'] = 'Vsebina privzete strani';
$lang['admin']['file_url'] = 'Povezava do datoteke (namesto URL)';
$lang['admin']['no_file_url'] = 'Noben (uporabi zgornji URL)';
$lang['admin']['defaultparentpage'] = 'Privzeta zgornja stran';
$lang['admin']['error_udt_name_whitespace'] = 'Napaka: Uporabni&scaron;ke oznake v svojem imenu ne smejo vsebovati presledkov';
$lang['admin']['warning_safe_mode'] = '<strong><em>OPOZORILO:</em></strong> PHP varni način (safe mode) je aktiviran. To bo povzročalo težave pri delu z datotekami, naloženimi preko brskalnika. Sem sodijo slike, predloge in XML paketi modulov. Svetujemo vam, da kontaktirate administratorja va&scaron;ega strežnika in ga zaprosite, če lahko izklopi varni način.';
$lang['admin']['test'] = 'Test';
$lang['admin']['results'] = 'Rezultati';
$lang['admin']['untested'] = 'Ni testirano';
$lang['admin']['unknown'] = 'Neznano';
$lang['admin']['download'] = 'Prenos';
$lang['admin']['frontendwysiwygtouse'] = 'WYSIWYG v ospredju';
$lang['admin']['all_groups'] = 'Vse skupine';
$lang['admin']['error_type'] = 'Tip napake';
$lang['admin']['contenttype_errorpage'] = 'Stran z napako';
$lang['admin']['errorpagealreadyinuse'] = 'Koda napake je že v uporabi';
$lang['admin']['404description'] = 'Stran ne obstaja';
$lang['admin']['usernotfound'] = 'Uporabnik ne obstaja';
$lang['admin']['passwordchange'] = 'Prosimo, vpi&scaron;ite novo geslo';
$lang['admin']['recoveryemailsent'] = 'E-mail je bil poslan zabeleženim naslovom. Prosimo, preverite va&scaron; po&scaron;tni predal za nadaljnja navodila.';
$lang['admin']['errorsendingemail'] = 'Pri&scaron;lo je do napake pri po&scaron;iljanju E-maila. Prosimo, obvestite skrbnika.';
$lang['admin']['passwordchangedlogin'] = 'Geslo je bilo spremenjeno. Prosimo, prijavite se z novim geslom.';
$lang['admin']['nopasswordforrecovery'] = 'Ta uporabnik nima nastavljenega E-mail naslova. Povrnitev gesla ni mogoča. Prosimo, obvestite skrbnika.';
$lang['admin']['lostpw'] = 'Ste pozabili geslo?';
$lang['admin']['lostpwemailsubject'] = '[%s] Povrnitev gesla';
$lang['admin']['lostpwemail'] = 'To sporočilo ste prejeli, saj smo prejeli zahtevek za spremembo gesla (%s), ki je povezano s tem uporabni&scaron;kim računom (%s). Če želite resetirati geslo za ta uporabni&scaron;ki račun, kliknite na spodnjo povezavo ali pa jo prekopirajte v va&scaron; spletni brskalnik in obi&scaron;čite:
%s

Če ste mnenja, da je pri&scaron;lo do napake in v resnici niste zahtevali resetiranja gesla, preprosto ignorirajte to sporočilo in ne bo nobenih sprememb.';
$lang['admin']['utma'] = '156861353.1722464354432002000.1251370098.1268214497.1270023141.28';
$lang['admin']['utmz'] = '156861353.1270023141.28.22.utmcsr=google|utmccn=(organic)|utmcmd=organic|utmctr=cms made simple';
$lang['admin']['qca'] = 'P0-1580489763-1251370099388';
$lang['admin']['utmb'] = '156861353.3.10.1270023141';
$lang['admin']['utmc'] = '156861353';
?>