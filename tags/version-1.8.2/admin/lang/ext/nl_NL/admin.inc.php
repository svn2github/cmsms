<?php
$lang['admin']['stylesheetcopied'] = 'Stylesheet gekopieerd';
$lang['admin']['templatecopied'] = 'Sjabloon gekopieerd';
$lang['admin']['ecommerce_desc'] = 'Modules voor E-commerce toepassingen';
$lang['admin']['ecommerce'] = 'E-Commerce ';
$lang['admin']['help_function_content_module'] = '<h3>What does this do?</h3>
<p>This content block type allows interfacing with different modules to create different content block types.</p>
<p>Some modules can define content block types for use in module templates.  i.e: The FrontEndUsers module may define a group list content block type.  It will then indicate how you can use the content_module tag to utilize that block type within your templates.</p>
<p><strong>Note:</strong> This block type must be used only with compatible modules.  You should not use this in any way except for as guided by addon modules.</p>';
$lang['admin']['error_parsing_content_blocks'] = 'Er is een fout opgetreden bij het genereren van de pagina opbouw uit het html-sjabloon. (Wellicht heeft u meerdere {content block=&quot;...&quot;} tags in dit sjabloon met dezelfde naam?)';
$lang['admin']['error_no_default_content_block'] = 'In het toegepaste sjabloon is geen standaard content blok gedetecteerd.  Het is verplicht om in ieder sjabloon een kale {content} tag te hebben. Wijzig dit eerst...';
$lang['admin']['help_function_cms_stylesheet'] = '<h3>What does this do?</h3>
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
$lang['admin']['pseudocron_granularity'] = 'Geplande taak uitvoering (Cronjobs)';
$lang['admin']['info_pseudocron_granularity'] = 'Deze instellingen bepaald hoe vaak het CMS zal proberen bepaalde ingestelde taken uit te voeren';
$lang['admin']['cron_request'] = 'Ieder verzoek';
$lang['admin']['cron_15m'] = '15 Minuten';
$lang['admin']['cron_30m'] = '30 Minuten';
$lang['admin']['cron_60m'] = '1 Uur';
$lang['admin']['cron_120m'] = '2 Uur';
$lang['admin']['cron_3h'] = '3 Uur';
$lang['admin']['cron_6h'] = '6 Uur';
$lang['admin']['cron_12h'] = '12 Uur';
$lang['admin']['cron_24h'] = '24 Uur';
$lang['admin']['clearcache_taskdescription'] = 'Dagelijks uitvoeren, deze bewerking zal de gebufferde bestanden verwijderen die ouder zijn dan de ingestelde waarde onder Websitebeheer >> Algemene Instellingen';
$lang['admin']['clearcache_taskname'] = 'Leeg buffer (Clear Cache)';
$lang['admin']['info_autoclearcache'] = 'Vul een geheel getal in. Vul 0 in om het automatisch legen van de buffer uit te schakelen';
$lang['admin']['autoclearcache'] = 'Leeg de buffer (Clear Cache) iedere N dagen';
$lang['admin']['listtemplates_pagelimit'] = 'Aantal regels per pagina wanneer de sjablonen worden bekeken';
$lang['admin']['liststylesheets_pagelimit'] = 'Aantal regels per pagina wanneer de stylesheets worden bekeken';
$lang['admin']['listgcbs_pagelimit'] = 'Aantal regels per pagina wanneer de HTML-blokken worden bekeken';
$lang['admin']['insecure'] = 'Onbeveiligd (HTTP)';
$lang['admin']['secure'] = 'Beveiligd (HTTPS)';
$lang['admin']['secure_page'] = 'Gebruik voor deze pagina HTTPS';
$lang['admin']['thumbnail_width'] = 'Miniatuur breedte';
$lang['admin']['thumbnail_height'] = 'Miniatuur hoogte';
$lang['admin']['E_STRICT'] = 'Is E_STRICT uitgeschakeld in error_reporting';
$lang['admin']['test_estrict_failed'] = 'E_STRICT is uitgeschakeld in error_reporting';
$lang['admin']['info_estrict_failed'] = 'Bepaalde functionaliteiten die CMSMS gebruikt, werken niet goed met E_STRICT.  Schakel deze alstublieft uit voordat u verder gaat';
$lang['admin']['E_DEPRECATED'] = 'Is E_DEPRECATED uitgeschakeld in error_reporting';
$lang['admin']['test_edeprecated_failed'] = 'E_DEPRECATED is ingeschakeld';
$lang['admin']['info_edeprecated_failed'] = 'Als E_DEPRECATED is ingeschakeld by error_reporting zullen gebruikers veel waarschuwingsmeldingen krijgen te zien, wat effect heeft op de lay-out en werking van de website';
$lang['admin']['session_use_cookies'] = 'Gebruik sessie-cookies';
$lang['admin']['errorgettingcontent'] = 'Kan geen informatie inzien voor het gespecificeerde content object';
$lang['admin']['errordeletingcontent'] = 'Fout tijdens het verwijderen (Of deze pagina heeft nog onderliggende pagina of het als standaard ingesteld)';
$lang['admin']['invalidemail'] = 'Het ingevoerde e-mail adres is niet correct';
$lang['admin']['info_deletepages'] = 'Opmerking: Als gevolg van rechten-restricties is het mogelijk dat bepaalde, voor verwijdering geselecteerde pagina&#039;s niet worden weergegeven. ';
$lang['admin']['info_pagealias'] = 'Benoem een unieke alias voor deze pagina.';
$lang['admin']['info_autoalias'] = 'Als dit veld leeg is zal er automatisch een alias worden gemaakt.';
$lang['admin']['invalidparent'] = 'U moet een bovenliggende pagina selecteren (neem contact op met uw administrator als u geen pagina ziet).';
$lang['admin']['forgotpwprompt'] = 'Voer uw gebruikersnaam in.<br />Er zal een e-mail met verdere informatie worden verstuurd naar het bekende mailadres bij deze naam';
$lang['admin']['info_basic_attributes'] = 'Dit veld geeft u de mogelijkheid om te specificeren welke inhoudsgegevens gebruikers  zonder de &quot;Wijzig paginastructuur&quot; rechten, mogen wijzigen.';
$lang['admin']['basic_attributes'] = 'Basis Gegevens';
$lang['admin']['no_permission'] = 'U heeft geen toestemming om deze functie uit te voeren.';
$lang['admin']['bulk_success'] = 'De bulk bewerking is succesvol uitgevoerd.';
$lang['admin']['no_bulk_performed'] = 'Geen bulk bewerking uitgevoerd.';
$lang['admin']['info_preview_notice'] = 'Let op: Dit preview venster simuleert een browserscherm, waarin u ook naar andere pagina&#039;s kunnen navigeren.  Maar, als u dat doet, dan kunt u ook onverwachte fouten tegenkomen. <br />
Als u van de huidige pagina weg navigeert en vervolgens weer terugkeert, kan het zijn dat de niet-opgeslagen wijzigingen niet zichtbaar zijn.  Wijzig eerst de pagina in de START tab en refresh deze pagina.<br />
Als u een nieuwe pagina aan de site toevoegd, kunt u hier niet naar terugkeren, u zult deze pagina moeten refreshen.';
$lang['admin']['sitedownexcludes'] = 'Gebruik deze adressen niet voor de &#039;site niet aanwezig&#039; meldingen';
$lang['admin']['info_sitedownexcludes'] = 'Deze parameter kan worden voorzien met een komma-gescheiden lijst van ip adressen of netwerken die geen onderdeel gaan vormen van de &#039;site niet aanwezig&#039; melding.  Hierdoor kan een administrator aan de website werken, terwijl een bezoeker wel een offline melding krijgt.<br/><br />
Adressen kunnen als volgt worden benoemd:<br/>
1. xxx.xxx.xxx.xxx -- (exacte IP adres)<br/>
2. xxx.xxx.xxx.[yyy-zzz] -- (IP adres groep)<br/>
3. xxx.xxx.xxx.xxx/nn -- (nnn = aantal bits, cisco stijl.  bijv.:  192.168.0.100/24 = geheel 192.168.0 class C subnet) ';
$lang['admin']['setup'] = 'Uitgebreide setup';
$lang['admin']['handle_404'] = 'Aangepaste 404 afhandeling';
$lang['admin']['sitedown_settings'] = 'Site niet bereikbaar instellingen';
$lang['admin']['general_settings'] = 'Algemene instellingen';
$lang['admin']['help_function_page_attr'] = '<h3>Wat doet dit?</h3>
<p>Deze tag kan worden gebruikt om de waarde terug te geven van een attribuut van een bepaalde pagina.</p>
<h3>Hoe wordt dit gebruikt?</h3>
<p>Voeg in de template een tag in op deze manier: <code>{page_attr key=&quot;extra1&quot;}</code>.</p>
<h3>Welke parameters accepteert het? </h3>
<ul>
  <li><strong>key [verplicht]</strong> De sleutel om het attribuut terug te geven.</li>
</ul> ';
$lang['admin']['forge'] = 'Forge ';
$lang['admin']['disable_wysiwyg'] = 'WYSIWYG niet toestaan voor deze pagina (ongeacht het sjabloon of gebruikers instellingen).';
$lang['admin']['help_function_page_image'] = '<h3>Wat doet dit?</h3>
<p>Deze tag kan gebruikt worden om een waarde in te vullen om een miniatuur of een afbeelding op een pagina te plaatsen.</p>
<h3>Hoe gebruik ik het?</h3>
<p>Voeg de tag toe in een sjabloon, zoals: <code>{page_image}</code>.</p>
<h3>Welke parameters zijn er?</h3>
<ul>
  <li>thumbnail - Een optie om de waarde van de miniatuur eigenschappen weer te geven in plaats van de afbeelding eigenschappen.</li>
</ul>';
$lang['admin']['pagelink_circular'] = 'Een paginalink kan geen andere paginalink als doel bevatten';
$lang['admin']['destinationnotfound'] = 'De geselecteerde pagina is niet gevonden of is niet aanwezig';
$lang['admin']['help_function_dump'] = '<h3>Wat doet dit? </h3>
  <p>Deze tag kan worden gebruikt om een uitvoer te geven van elke smarty variabele in een wat meer leesbaar formaat. Dit is handig voor fouten zoeken en aanpassen van templates zodat je weet welke formaten en types data beschikbaar zijn.</p>
<h3>Hoe wordt dit gebruikt?</h3>
<p>Voeg de tag in de template in als: <code>{dump item=&#039;the_smarty_variable_to_dump&#039;}</code>.</p>
<h3>Welke parameters accepteert het?</h3>
<ul>
<li><strong>item (verplicht)</strong> - De smarty variabele om de inhoud van te dumpen.</li>
<li>maxlevel - De maximum aantal levels om terug te gaan (alleen toepasbaar als &quot;recurse&quot; wordt aangeleverd). De standaard waarde voor deze parameter is 3</li>
<li>nomethods - Sla de uitvoer over van methoden vanuit objecten.</li>
<li>novars - Sla de uitvoer over van onderdelen van objecten.</li>
<li>recurse - Ga een maximum aantal levels terug door de objecten en geef daarbij zichtbare uitvoer van elk item totdat het maximum aantal levels is bereikt.</li>
</ul>';
$lang['admin']['sqlerror'] = 'SQL fout in %s';
$lang['admin']['image'] = 'Afbeelding';
$lang['admin']['thumbnail'] = 'Miniatuur';
$lang['admin']['searchable'] = 'Deze pagina is doorzoekbaar';
$lang['admin']['help_function_content_image'] = '<h3>Wat doet dit?</h3>
<p>Deze plugin geeft template designers toestemming gebruikers een afbeelding te laten selecteren wanneer ze de inhoud van een pagina aan het bewerken zijn. Het gedraagt zich net als de content plugin voor meerdere content blokken.</p>
<h3>Hoe wordt het gebruikt?</h3>
<p>Voeg de tag in je pagina template op deze manier: <code>{content_image block=&#039;afbeelding1&#039;}</code>.</p>
<h3>Welke parameters gebruikt het?</h3>
<ul>
  <li><strong>(verplicht)</strong> block - De naam voor dit toegevoegde gegevens blok.
  <p>Voorbeeld:</p>
  <pre>{content_image block=&#039;afbeelding1&#039;}</pre><br/>
  </li>

  <li><em>(optioneel)</em> label - Een etiket of herinnering voor dit gegevens blok in de bewerk pagina. Indien dit niet is aangegeven wordt de naam van het gegevens blok gebruikt.</li>
 
  <li><em>(optioneel)</em> dir - De naam van de map (relatief ten opzichte van de uploads map, van waaruit afbeeldingen geselecteerd worden. Wanneer dit niet is gespecificeerd wordt de upload map gebruikt.
  <p>Voorbeeld: gebruik de afbeeldingen uit: uploads/images map.</p>
  <pre>{content_image block=&#039;afbeelding1&#039; dir=&#039;images&#039;}</pre><br/>
  </li>

  <li><em>(optioneel)</em> class - De css-class naam welke wordt gebruikt door de img tag in de weergave.</li>

  <li><em>(optioneel)</em> id - De id naam welke wordt gebruikt door de img tag in de weergave.</li> 

  <li><em>(optioneel)</em> name - De tag naam welke wordt gebruikt door de img tag in de weergave.</li> 

  <li><em>(optioneel)</em> width - De gewenste breedte van de afbeelding.</li>

  <li><em>(optioneel)</em> height - De gewenste hoogte van de afbeelding.</li>

  <li><em>(optioneel)</em> alt - Alternatieve tekst wanneer de afbeelding niet gevonden kan worden.</li>
  <li><em>(optioneel)</em> urlonly - Geeft alleen de url naar de afbeelding weer en negeerd alle parameters zoals id, name, width, height, etc.</li>
</ul>';
$lang['admin']['error_udt_name_chars'] = 'Een geldige UDT naam begint met een letter of een underscore, gevolgd door verschillende nummers, letters of underscores.';
$lang['admin']['errorupdatetemplateallpages'] = 'Sjabloon is niet actief';
$lang['admin']['hidefrommenu'] = 'Verberg in menu';
$lang['admin']['settemplate'] = 'Koppel sjabloon';
$lang['admin']['text_settemplate'] = 'Koppel geselecteerde paginas aan een andere template';
$lang['admin']['cachable'] = 'Kan in buffer opgenomen worden';
$lang['admin']['noncachable'] = 'Niet opnemen in de buffer';
$lang['admin']['copy_from'] = 'Kopieer van';
$lang['admin']['copy_to'] = 'Kopieer naar';
$lang['admin']['copycontent'] = 'Kopieer Inhoudsartikel';
$lang['admin']['md5_function'] = 'md5 functie';
$lang['admin']['tempnam_function'] = 'tempnam functie';
$lang['admin']['register_globals'] = 'PHP register_globals ';
$lang['admin']['output_buffering'] = 'PHP output_buffering ';
$lang['admin']['disable_functions'] = 'disable_functions in PHP ';
$lang['admin']['xml_function'] = 'Basis XML (expat) ondersteuning';
$lang['admin']['magic_quotes_gpc'] = 'Magic quotes voor Get/Post/Cookie operaties';
$lang['admin']['magic_quotes_gpc_on'] = 'Enkele aanhalingstekens, dubbele aanhalingstekens en backslashes worden automatisch verwijderd. U kunt daardoor problemen krijgen bij het opslaan van sjablonen.';
$lang['admin']['magic_quotes_runtime'] = 'Er bevinden magic quotes in de runtime';
$lang['admin']['magic_quotes_runtime_on'] = 'De meeste functies die data terugsturen, maken gebruik van aanhalingstekens, die worden vervangen door een backslash. Dit kan problemen veroorzaken.';
$lang['admin']['file_get_contents'] = 'Controleer file_get_contents';
$lang['admin']['check_ini_set'] = 'Controleer ini_set';
$lang['admin']['check_ini_set_off'] = 'U kunt problemen hebben met bepaalde functionaliteit zonder deze mogelijkheid. Deze test kan mislukken als safe_mode is ingeschakeld';
$lang['admin']['file_uploads'] = 'Bestand uploads';
$lang['admin']['test_remote_url'] = 'Testen van externe URL';
$lang['admin']['test_remote_url_failed'] = 'U bent misschien niet gemachtigd om bestanden te openen op een externe server.';
$lang['admin']['test_allow_url_fopen_failed'] = 'Wanneer allow url-fopen is uitgeschakeld, zult u niet in staat zijn om toegang te krijgen tot URL-objecten, zoals bestanden met behulp van het FTP-of HTTP-protocol.';
$lang['admin']['connection_error'] = 'Uitgaande http connecties, lijken niet te werken! Er is een firewall of ACL voor de externe aansluitingen? Dit zal resulteren in het niet werken van module manager, en mogelijk ook andere functies.';
$lang['admin']['remote_connection_timeout'] = 'Verbinden duurde te lang!';
$lang['admin']['search_string_find'] = 'Verbinden geslaagd!';
$lang['admin']['connection_failed'] = 'Verbinden mislukt!';
$lang['admin']['remote_response_ok'] = 'Extern antwoord: OK!';
$lang['admin']['remote_response_404'] = 'Extern antwoord: Niet gevonden.';
$lang['admin']['remote_response_error'] = 'Extern antwoord: Fout!';
$lang['admin']['notifications_to_handle'] = 'U heeft <b>%d</b> onbehandelde berichten.';
$lang['admin']['notification_to_handle'] = 'U heeft <b>%d</b> onbehandelde bericht.';
$lang['admin']['notifications'] = 'Berichten';
$lang['admin']['dashboard'] = 'Geef Dashboard weer';
$lang['admin']['ignorenotificationsfrommodules'] = 'Negeer berichten van deze modules';
$lang['admin']['admin_enablenotifications'] = 'Sta gebruikers het weergeven van berichten toe<br/><em>(de berichten worden weergegeven op alle administrator-pagina&#039;s.)</em>';
$lang['admin']['enablenotifications'] = 'Schakel gebruikersmededelingen in voor de administratorpagina&#039;s';
$lang['admin']['test_check_open_basedir_failed'] = 'Open basedir restricties zijn in werking. U kunt problemen ondervinden met sommige aanvullende modules ';
$lang['admin']['config_writable'] = 'config.php is beschrijfbaar! Het is veiliger om dit in te stellen als &#039;alleen-lezen&#039; (chmod 444).';
$lang['admin']['caution'] = 'Let op';
$lang['admin']['create_dir_and_file'] = 'Controle of het httpd proces een bestand in de aangemaakte directory kan maken';
$lang['admin']['os_session_save_path'] = 'Geen controle door het &#039;OS pad&#039;';
$lang['admin']['unlimited'] = 'Ongelimiteerd';
$lang['admin']['open_basedir'] = 'PHP Open Basedir ';
$lang['admin']['open_basedir_active'] = 'Geen controle omdat &#039;open_basedir&#039; actief is';
$lang['admin']['invalid'] = 'Ongeldig';
$lang['admin']['checksum_passed'] = 'Alle checksums komen overeen met het opgegeven bestand';
$lang['admin']['error_retrieving_file_list'] = 'Fout bij ophalen bestandslijst';
$lang['admin']['files_checksum_failed'] = 'Niet mogelijk checksum te maken voor bestanden';
$lang['admin']['failure'] = 'Fout';
$lang['admin']['help_function_process_pagedata'] = '<h3>Wat doet dit?</h3>
<p>Deze plugin verwerkt de data in het &amp;quot;pagedata&amp;quot; blok van de inhoud pagina&#039;s door middel van smarty.  Hierdoor kun je specifieke pagina data specificeren in een smarty zonder dat de template voor elke pagina aangepast moet worden.</p>
<h3>Hoe word het gebruikt?</h3>
<ol>
  <li>Voeg smarty variabelen en andere smarty logica in in het paginadata veld van enkele inhoudspagina&#039;s.</li>
  <li>Voeg de <code>{process_pagedata}</code> tag in helemaal bovenaan jouw pagina template.</li>
</ol>
<br/>
<h3>Welke parameters worden gebruikt?</h3>
<p>Op dit moment geen enkele.</p>';
$lang['admin']['page_metadata'] = 'Pagina specifieke metadata';
$lang['admin']['pagedata_codeblock'] = 'Smarty data of logica, specifiek voor deze pagina';
$lang['admin']['error_uploadproblem'] = 'Er heeft zich een fout opgedaan tijdens het uploaden';
$lang['admin']['error_nofileuploaded'] = 'Geen bestand ge&uuml;pload';
$lang['admin']['files_failed'] = 'Bestanden md5sum check komt niet overeen';
$lang['admin']['files_not_found'] = 'Bestanden niet gevonden';
$lang['admin']['info_generate_cksum_file'] = 'Deze functie geeft de mogelijkheid om een checksum bestand te maken t.b.v. latere validatie. Dit dient te worden gebruikt voor het uitrollen van een website, en voor/na een upgrade, of grote wijzigingen.';
$lang['admin']['info_validation'] = 'Deze functie controleert de checksums in het opgegeven bestand tegen de huidige bestanden. Het kan helpen om bestanden te helpen die zijn aangepast of gehacked. Vanaf CMS Made Simple versie 1.4 zal voor iedere releases een checksum worden gemaakt.';
$lang['admin']['download_cksum_file'] = 'Download Checksum Bestand';
$lang['admin']['perform_validation'] = 'Voer een validatie uit';
$lang['admin']['upload_cksum_file'] = 'Upload Checksum Bestand';
$lang['admin']['checksumdescription'] = 'Valideer de integriteit van de CMSMS bestanden tegen bekende checksums';
$lang['admin']['system_verification'] = 'Systeem Verificatie';
$lang['admin']['extra1'] = 'Extra Pagina Veld 1';
$lang['admin']['extra2'] = 'Extra Pagina Veld 2';
$lang['admin']['extra3'] = 'Extra Pagina Veld 3';
$lang['admin']['start_upgrade_process'] = 'Start Upgrade proces';
$lang['admin']['warning_upgrade'] = '<em><strong>Let op:</strong></em> het CMS heeft een upgrade nodig.';
$lang['admin']['warning_upgrade_info1'] = 'U heeft database versie %s. U dient te upgraden naar databaseversie %s';
$lang['admin']['warning_upgrade_info2'] = 'Selecteer de volgende link: %s.';
$lang['admin']['warning_mail_settings'] = 'Uw mail instellingen zijn nog niet geconfigureerd. Dit kan van invloed zijn op het versturen van e-mail berichten vanuit uw website.  Ga naar <a href="%s">Uitbreidingen >> CMSMailer</a> en configureer de mail instellingen met de informatie die u van uw internet provider heeft gekregen.';
$lang['admin']['view_page'] = 'Bekijk deze pagina in een nieuw venster';
$lang['admin']['off'] = 'Uit';
$lang['admin']['on'] = 'Aan';
$lang['admin']['invalid_test'] = 'Ongeldige test parameterwaarde!';
$lang['admin']['copy_paste_forum'] = 'Bekijk tekst rapport <em>(bruikbaar voor forum posts)</em>';
$lang['admin']['permission_information'] = 'Autorisatie informatie';
$lang['admin']['server_os'] = 'Server Operating System ';
$lang['admin']['server_api'] = 'Server API ';
$lang['admin']['server_software'] = 'Server Software ';
$lang['admin']['server_information'] = 'Server Informatie';
$lang['admin']['session_save_path'] = 'Session Save Path ';
$lang['admin']['max_execution_time'] = 'Maximale Uitvoertijd';
$lang['admin']['gd_version'] = 'GD versie';
$lang['admin']['upload_max_filesize'] = 'Maximale Upload Grootte';
$lang['admin']['post_max_size'] = 'Maximale Post Grootte';
$lang['admin']['memory_limit'] = 'PHP Memory Limit ';
$lang['admin']['server_db_type'] = 'Server Database ';
$lang['admin']['server_db_version'] = 'Server Database Versie';
$lang['admin']['phpversion'] = 'Huidige PHP versie';
$lang['admin']['safe_mode'] = 'PHP Safe Mode ';
$lang['admin']['php_information'] = 'PHP Informatie';
$lang['admin']['cms_install_information'] = 'CMS Installatie informatie';
$lang['admin']['cms_version'] = 'CMS Versie';
$lang['admin']['installed_modules'] = 'Ge&iuml;nstalleerde Modules';
$lang['admin']['config_information'] = 'Config Informatie';
$lang['admin']['systeminfo_copy_paste'] = 'Kopieer en plak deze geselecteerde tekst in uw forumbericht';
$lang['admin']['help_systeminformation'] = 'De hieronder getoonde informatie is afkomstig uit verschillende elementen van het cms-systeem, kan worden gebruikt bij een probleem-analyse. Ook kan deze worden gekopieerd naar het forum voor hulpvraag.';
$lang['admin']['systeminfo'] = 'Systeem Informatie';
$lang['admin']['systeminfodescription'] = 'Tonen van verschillende informatie elementen van het systeem die kunnen worden gebruikt bij een probleemanalyse';
$lang['admin']['welcome_user'] = 'Welkom';
$lang['admin']['itsbeensincelogin'] = 'Laatste login %s';
$lang['admin']['days'] = 'dagen';
$lang['admin']['day'] = 'dag';
$lang['admin']['hours'] = 'uren';
$lang['admin']['hour'] = 'uur';
$lang['admin']['minutes'] = 'minuten';
$lang['admin']['minute'] = 'minuut';
$lang['admin']['help_css_max_age'] = 'Deze parameter dient een hoge waarde te hebben voor statische sites, en 0 te hebben voor een ontwikkel omgeving';
$lang['admin']['css_max_age'] = 'Maximale periode (in seconden) die stylesheets gebufferd mogen worden in de browser';
$lang['admin']['error'] = 'Fout';
$lang['admin']['clear_version_check_cache'] = 'Verwijder alle gebufferde informatie omtrent de versie-controle';
$lang['admin']['new_version_available'] = '<em>Opmerking:</em> Er is een nieuwere versie van het CMS beschikbaar. Neem contact op met uw webmaster.';
$lang['admin']['info_urlcheckversion'] = 'Wanneer &quot;none&quot; wordt opgegeven wordt geen controle gedaan.<br />Een lege URL zal gebruik maken van de standaard-link.';
$lang['admin']['urlcheckversion'] = 'Controleer op een nieuwere versie van het CMS door op deze link te klikken';
$lang['admin']['master_admintheme'] = 'Standaard Admin Theme (voor de login pagina en nieuwe gebruikers)';
$lang['admin']['contenttype_separator'] = 'Scheidingsteken';
$lang['admin']['contenttype_sectionheader'] = 'Sectie hoofd';
$lang['admin']['contenttype_link'] = 'Externe link';
$lang['admin']['contenttype_content'] = 'Inhoud';
$lang['admin']['contenttype_pagelink'] = 'Interne link';
$lang['admin']['nogcbwysiwyg'] = 'Schakel WYSIWYG uit bij HTML-Blokken';
$lang['admin']['destination_page'] = 'Doelpagina';
$lang['admin']['additional_params'] = 'Overige Parameters';
$lang['admin']['help_function_current_date'] = '<h3 style=&quot;color: red;&quot;>Deprecated </h3>
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
$lang['admin']['help_function_valid_xhtml'] = '<h3>Wat doet dit?</h3>
<p>Geeft een link naar de w3c HTML validator terug.</p>
<h3>Hoe wordt dit gebruikt?</h3>
<p>Voeg simpelweg de tag in jouw template/pagina als: <code>{valid_xhtml}</code></p>
<h3>Welke parameters gebruikt het?</h3>

    <ul>
	<li><em>(optioneel)</em> url         (string)     - De URL gebruikt voor validatie, wanneer deze niet is gegeven, http://validator.w3.org/check/referer wordt gebruikt.</li>
	<li><em>(optioneel)</em> class       (string)     - Indien deze is ingesteld zal deze gebruikt worden als een class attribuut voor het link (a) element</li>
	<li><em>(optioneel)</em> target      (string)     - Indien deze is ingesteld zal deze gebruikt worden doel attribuut voor het link (a) element</li>
	<li><em>(optioneel)</em> image       (true/false) - Indien ingesteld als false zal een tekst link gebruikt worden in plaats van afbeelding/icoon.</li>
	<li><em>(optioneel)</em> text        (string)     - Indien ingesteld zal dit gebruikt worden voor de link tekst of de alternatieve tekst voor de afbeelding. Standaard is &#039;valid XHTML 1.0 Transitional&#039;.<br /> Wanneer er een afbeelding wordt gebruikt zal de opgegeven string ook worden gebruikt voor het alt-attribuut van de afbeelding (Standaard kan dit overruled worden door de &#039;alt&#039; parameter).</li>
	<li><em>(optioneel)</em> image_class (string)     - Alleen wanneer &#039;image&#039; niet is ingesteld als &#039;false&#039;. Indien deze is ingesteld zal deze gebruikt worden als class-attribuut voor het afbeelding (img) element</li>
	<li><em>(optioneel)</em> src         (string)     - Alleen wanneer &#039;image&#039; niet is ingesteld als &#039;false&#039;. Het icoon om weer te geven. Standaard is http://www.w3.org/Icons/valid-xhtml10</li>
	<li><em>(optioneel)</em> width       (string)     - Alleen wanneer &#039;image&#039; niet is ingesteld als &#039;false&#039;. De afbeelding breedte. Standaard is dit 88 (breedte van http://www.w3.org/Icons/valid-xhtml10)</li>
	<li><em>(optioneel)</em> height      (string)     - Alleen wanneer &#039;image&#039; niet is ingesteld als &#039;false&#039;. De afbeelding hoogte. Standaard is dit 31 (hoogte van http://www.w3.org/Icons/valid-xhtml10)</li>
	<li><em>(optioneel)</em> alt         (string)     - Alleen wanneer &#039;image&#039; niet is ingesteld als &#039;false&#039;. De alternatieve tekst (&#039;alt&#039; attribute) voor de afbeelding (element). Wanneer niets is opgegeven wordt de link-tekst gebruikt.</li>
    </ul>';
$lang['admin']['help_function_valid_css'] = '<h3>Wat doet dit?</h3>
<p>Geeft een link naar de w3c CSS validator.</p>
<h3>Hoe wordt het gebruikt?</h3>
<p>Plaats simpelweg de tag in jouw template/pagina zoals: <code>{valid_css}</code></p>
<h3>Welke parameters heeft het?</h3>

    <ul>
        <li><em>(optioneel)</em> url         (string)     - De URL die gebruikt wordt voor validatie, wanneer niets is opgegeven wordt http://jigsaw.w3.org/css-validator/check/referer gebruikt.</li>
	<li><em>(optioneel)</em> class       (string)     - Indien ingesteld wordt dit gebruikt als class-attribuut voor het link (a) element</li>
	<li><em>(optioneel)</em> target      (string)     - Indien ingesteld wordt dit gebruikt als doel attribuut voor het link (a) element</li>
	<li><em>(optioneel)</em> image       (true/false) - Indien deze is ingesteld als &#039;false&#039;, wordt er een tekst-link gebruikt in plaats van een afbeelding/icoon.</li>
	<li><em>(optioneel)</em> text        (string)     - Indien ingesteld wordt deze gebruikt voor de link-tekst of voor de alternatieve tekst voor de afbeelding. Standaard is dit &#039;Valid CSS 2.1&#039;.<br /> Wanneer een afbeelding wordt gebruikt wordt deze string ook gebruikt als alt attribuut voor de afbeelding (Standaard kan dit overruled worden door de &#039;alt&#039; parameter).</li>
	<li><em>(optioneel)</em> image_class (string)     - Alleen indien &#039;image&#039; niet is ingesteld op &#039;false&#039;. Indien ingesteld wordt dit gebruikt als class attribuut voor het afbeelding (img) element</li>
        <li><em>(optioneel)</em> src         (string)     - Alleen indien &#039;image&#039; niet is ingesteld op &#039;false&#039;. Het icoon om weer te geven. Standaard is dit http://jigsaw.w3.org/css-validator/images/vcss</li>
        <li><em>(optioneel)</em> width       (string)     - Alleen indien &#039;image&#039; niet is ingesteld op &#039;false&#039;. De afbeelding breedte. Standaard is dit 88 (breedte van http://jigsaw.w3.org/css-validator/images/vcss)</li>
        <li><em>(optioneel)</em> height      (string)     - Alleen indien &#039;image&#039; niet is ingesteld op &#039;false&#039;. De afbeelding hoogte. Standaard is dit 31 (hoogte van http://jigsaw.w3.org/css-validator/images/vcss)</li>
	<li><em>(optioneel)</em> alt         (string)     - Alleen indien &#039;image&#039; niet is ingesteld op &#039;false&#039;. De alternatieve tekst (&#039;alt&#039; attribute) voor de afbeelding (element). Wanneer niets is opgegeven zal de  link-tekst worden gebruikt.</li>
    </ul>';
$lang['admin']['help_function_title'] = '	<h3>Wat doet dit?</h3>
	<p>Druk de titel van de pagina af.</p>
	<h3>Hoe wordt het gebruikt?</h3>
	<p>Plaats simpelweg de tag in jouw template/pagina zoals: <code>{title}</code></p>
	<h3>Welke parameters heeft het?</h3>
	<p><em>(optioneel)</em> assign (string) - Wijst het resultaat toe aan een smarty variabele met die naam.</p>';
$lang['admin']['help_function_stylesheet'] = '	<h3>Wat doet dit?</h3>
	<p>Haalt stylesheet informatie van het systeem.  Standaard haalt het alle stylesheets op die aan de huidige template zijn verbonden.</p>
	<h3>Hoe wordt het gebruikt?</h3>
	<p>Plaats simpelweg de tag in jouw template/pagina head sectie zoals: <code>{stylesheet}</code></p>
	<h3>Welke parameters heeft het?</h3>
	<ul>
		<li><em>(optioneel)</em>name - In plaats van alle stylesheets op te halen voor de gegeven pagina, haalt het alleen de genoemde op. Of deze nu verbonden is met de huidige template of niet.</li>
		<li><em>(optioneel)</em>media - Indien een naam is opgegeven geeft dit je de mogelijkheid om een ander media type voor deze stylesheet in te stellen.</li>
    <li><em>(optioneel)</em>templateid - Indien templateid is opgegeven zal deze de stylesheets gebruiken die verbonden zijn aan die template in plaats van de huidige template.</li>
	</ul>';
$lang['admin']['help_function_stopexpandcollapse'] = '<h3>What does this do?</h3>
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
$lang['admin']['help_function_startexpandcollapse'] = '<h3>What does this do?</h3>
	<p>Enables content to be expandable and collapsable. Like the following:</p>
	<a href="#expand1" onClick="expandcontent(&#039;expand1&#039;)" style="cursor:hand; cursor:pointer">Click here for more info</a><span id=&quot;expand1&quot; class=&quot;expand&quot;><a name="help"> - Here is all the info you will ever need...</a></span>

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
$lang['admin']['help_function_sitemap'] = '  <h3>Notice</h3>
    <p>This plugin is deprecated.  Users should now see the <code>{site_mapper}</code> plugin.</p>
    <h3>What does this do?</h3>
    <p>Prints out a sitemap.</p>
    <h3>How do I use it?</h3>
    <p>Just insert the tag into your template/page like: <code>{sitemap}</code></p>
    <h3>What parameters does it take?</h3>
        <ul>
            <li><em>(optional)</em> <tt>class</tt> - A css_class for the ul-tag which includes the complete sitemap.</li>
            <li><em>(optional)</em> <tt>start_element</tt> - The hierarchy of your element (ie : 1.2 or 3.5.1 for example). This parameter sets the root of the menu. You can use the page alias instead of hierarchy.</li>
            <li><em>(optional)</em> <tt>number_of_levels</tt> - An integer, the number of levels you want to show in your menu. Should be set to 2 using a delimiter.</li>
            <li><em>(optional)</em> <tt>delimiter</tt> - Text to separate entries not on depth 1 of the sitemap (i.e. 1.1, 1.2). This is helpful for showing entries on depth 2 beside each other (using css display:inline).</li>
            <li><em>(optional)</em> <tt>initial 1/0</tt> - If set to 1, begin also the first entries not on depth 1 with a delimiter (i.e. 1.1, 2.1).</li>
            <li><em>(optional)</em> <tt>relative 1/0</tt> - We are not going to show current page (with the sitemap) - we&#039;ll show only his childs.</li>
            <li><em>(optional)</em> <tt>showall 1/0</tt> - We are going to show all pages if showall is enabled, else we&#039;ll only show pages with active menu entries.</li>
            <li><em>(optional)</em> <tt>add_elements</tt> - A comma separated list of alias names which will be added to the shown pages with active menu entries (showall not enabled).</li>
        </ul>';
$lang['admin']['help_function_adsense'] = '	<h3>What does this do? </h3>
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
$lang['admin']['help_function_search'] = '<h3>What does this do?</h3>
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
                <li><em>(optional)</em> more - Place additional options inside the &amp;lt;a&amp;gt; link.</li>
                <li><em>(optional)</em> src_img - Show this image file. Default images/cms/printbutton.gif.</li>
                <li><em>(optional)</em> class_img - Class of &amp;lt;img&amp;gt; tag if showbutton is sets.</li>
        </ul>
                    <p>Example:</p>
                     <pre>{oldprint text=&quot;Printable Page&quot;}</pre>      ';
$lang['admin']['login_info_title'] = 'Informatie';
$lang['admin']['login_info'] = 'Vanaf dit punt moeten de volgende parameters gelden';
$lang['admin']['login_info_params'] = '<ol> 
  <li>Cookies toestaan in uw browser</li> 
  <li>Javascript toestaan in uw browser </li> 
  <li>Popup schermen toestaan vanuit dit adres:</li> 
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
$lang['admin']['help_function_html_blob'] = '	<h3>Wat doet het?</h3>
	<p>Zie de global_content voor een beschrijving.</p>';
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
$lang['admin']['help_function_embed'] = '		<h3>What does this do?</h3>
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
	</ul> ';
$lang['admin']['help_function_contact_form'] = '   <h2>NOTE: This plugin is deprecated</h2>
  <h3>This plugin has been removed as of CMS made simple version 1.5</h3>';
$lang['admin']['help_function_cms_versionname'] = '	<h3>What does this do?</h3>
	<p>This tag is used to insert the current version name of CMS into your template or page.  It doesn&#039;t display any extra besides the version name.</p>
	<h3>How do I use it?</h3>
	<p>This is just a basic tag plugin.  You would insert it into your template or page like so: <code>{cms_versionname}</code>
	<h3>What parameters does it take?</h3>
	<p>It takes no parameters.</p> ';
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
		</p> ';
$lang['admin']['help_function_cms_selflink'] = '		<h3>What does this do?</h3>
		<p>Creates a link to another CMSMS content page inside your template or content. Can also be used for external links with the ext parameter.</p>
		<h3>How do I use it?</h3>
		<p>Just insert the tag into your template/page like: <code>{cms_selflink page=&amp;quot;1&amp;quot;}</code> or  <code>{cms_selflink page=&amp;quot;alias&amp;quot;}</code></p>
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
		<li><em>(optional)</em> <tt>class</tt> - Class for the < a > link. Useful for styling the link.</li> <!-- mbv - 21-06-2005 -->
		<li><em>(optional)</em> <tt>lang</tt> - Display link-labels  (&quot;Next Page&quot;/&quot;Previous Page&quot;) in different languages (0 for no label.) Danish (dk), English (en) or French (fr), for now.</li> <!-- mbv - 21-06-2005 -->
		<li><em>(optional)</em> <tt>id</tt> - Optional css_id for the < a > link.</li> <!-- mbv - 29-06-2005 -->
		<li><em>(optional)</em> <tt>more</tt> - place additional options inside the < a > link.</li> <!-- mbv - 29-06-2005 -->
		<li><em>(optional)</em> <tt>label</tt> - Label to use in with the link if applicable.</li>
		<li><em>(optional)</em> <tt>label_side left/right</tt> - Side of link to place the label (defaults to &quot;left&quot;).</li>
		<li><em>(optional)</em> <tt>title</tt> - Text to use in the title attribute.  If none is given, then the title of the page will be used for the title.</li>
		<li><em>(optional)</em> <tt>rellink 1/0</tt> - Make a relational link for accessible navigation.  Only works if the dir parameter is set and should only go in the head section of a template.</li>
		<li><em>(optional)</em> <tt>href</tt> - If href is used only the href value is generated (no other parameters possible). <strong>Example:</strong> &amp;lt;a href=&amp;quot;{cms_selflink href=&amp;quot;alias&amp;quot;}&amp;quot;&amp;gt;&amp;lt;img src=&amp;quot;&amp;quot;&amp;gt;&amp;lt;/a&amp;gt;</li>
		<li><em>(optional)</em> <tt>image</tt> - A url of an image to use in the link. <strong>Example:</strong> {cms_selflink dir=&amp;quot;next&amp;quot; image=&amp;quot;next.png&amp;quot; text=&amp;quot;Next&amp;quot;}</li>
		<li><em>(optional)</em> <tt>alt</tt> - Alternative text to be used with image (alt=&quot;&quot; will be used if no alt parameter is given).</li>
		<li><em>(optional)</em> <tt>imageonly</tt> - If using an image, whether to suppress display of text links. If you want no text in the link at all, also set lang=0 to suppress the label. <B>Example:</B> {cms_selflink dir=&amp;quot;next&amp;quot; image=&amp;quot;next.png&amp;quot; text=&amp;quot;Next&amp;quot; imageonly=1}</li>
		<li><em>(optional)</em> <tt>ext</tt> - For external links, will add class=&amp;quot;external and info text. <strong>warning:</strong> only text, target and title parameters are compatible with this parameter</li>
		<li><em>(optional)</em> <tt>ext_info</tt> - Used together with &amp;quot;ext&amp;quot; defaults to (external link).</li>
                <li><em>(optional)</em> <tt>assign</tt> - Assign the results to the named smarty variable.</li>
		</ul>
		</p>';
$lang['admin']['about_function_cms_module'] = '	<p>Author: Ted Kulp<tedkulp@users.sf.net></p>
	<p>Version: 1.0</p>
	<p>
	Change History:<br/>
	None
	</p> ';
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
</p> ';
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
<li><em>(optional)</em> <tt>currentclassid</tt> - The CSS class for the &amp;lt;span&amp;gt; tag surrounding the current page name.</li>
<li><em>(optional)</em> <tt>starttext</tt> - Text to append to the front of the breadcrumbs list, something like &quot;You are here&quot;.</li>
</ul>';
$lang['admin']['about_function_anchor'] = '	<p>Author: Ted Kulp<tedkulp@users.sf.net></p>
	<p>Version: 1.1</p>
	<p>
	Change History:<br/>
	<strong>Update to version 1.1 from 1.0</strong> <em>2006/07/19</em><br/>
	Russ added the means to insert a title, a tabindex and a class for the anchor link. Westis added accesskey and changed parameter names to not include &#039;anchorlink&#039;.<br/>
	</hr>
	</p> ';
$lang['admin']['help_function_anchor'] = '	<h3>What does this do? </h3>
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
  <p>This is actually just a wrapper tag for the Menu Manager module to make the tag syntax easier, and to simplify creating a sitemap. </p>
<h3>How do I use it?</h3>
  <p>Just put <code>{site_mapper}</code> on a page or in a template. For help about the Menu Manager module, what parameters it takes etc., please refer to the Menu Manager module help.</p>
  <p>By default, if no template option is specified the minimal_menu.tpl file will be used.</p>
  <p>Any parameters used in the tag are available in the menumanager template as <code>{$menuparams.paramname}</code></p>';
$lang['admin']['help_function_redirect_url'] = '<h3>What does this do?</h3>
  <p>This plugin allows you to easily redirect to a specified url.  It is handy inside of smarty conditional logic (for example, redirect to a splash page if the site is not live yet). </p>
<h3>How do I use it?</h3>
<p>Simply insert this tage into your page or template: <code>{redirect_url to=&#039;http://www.cmsmadesimple.org&#039;}</code></p>';
$lang['admin']['help_function_redirect_page'] = '<h3>What does this do?</h3>
 <p>This plugin allows you to easily redirect to another page.  It is handy inside of smarty conditional logic (for example, redirect to a login page if the user is not logged in.)</p>
<h3>How do I use it?</h3>
<p>Simply insert this tage into your page or template: <code>{redirect_page page=&#039;some-page-alias&#039;}</code></p> ';
$lang['admin']['of'] = 'van';
$lang['admin']['first'] = 'Eerste';
$lang['admin']['last'] = 'Laatste';
$lang['admin']['adminspecialgroup'] = 'Waarschuwing: leden van deze groep hebben automatisch alle rechten';
$lang['admin']['disablesafemodewarning'] = 'Safe mode-waarschuwing buiten werking stellen';
$lang['admin']['allowparamcheckwarnings'] = 'Parametercontroles toestaan waarschuwingen te genereren';
$lang['admin']['date_format_string'] = 'Tekenreeks met datumopmaak';
$lang['admin']['date_format_string_help'] = '<em>strftime</em> tekenreeks met datumopmaak. Google naar &#039;strftime&#039; voor meer informatie';
$lang['admin']['last_modified_at'] = 'Laatst aangepast op';
$lang['admin']['last_modified_by'] = 'Laatst aangepast door';
$lang['admin']['read'] = 'Lees';
$lang['admin']['write'] = 'Schrijf';
$lang['admin']['execute'] = 'Uitvoeren';
$lang['admin']['group'] = 'Groep';
$lang['admin']['other'] = 'Andere';
$lang['admin']['event_desc_moduleupgraded'] = 'Een tag die wordt aangeroepen nadat een module is ge&uuml;pgrade';
$lang['admin']['event_desc_moduleinstalled'] = 'Een tag die wordt aangeroepen nadat een module is ge&iuml;nstalleerd';
$lang['admin']['event_desc_moduleuninstalled'] = 'Een tag die wordt aangeroepen nadat een module is gede&iuml;nstalleerd';
$lang['admin']['event_desc_edituserdefinedtagpost'] = 'Een tag die wordt aangeroepen na het bijwerken van gebruikers-gedefinieerde tag';
$lang['admin']['event_desc_edituserdefinedtagpre'] = 'Een tag die wordt aangeroepen voor het bijwerken van gebruikers-gedefinieerde tag';
$lang['admin']['event_desc_deleteuserdefinedtagpre'] = 'Een tag die wordt aangeroepen na het verwijderen van gebruikers-gedefinieerde tag';
$lang['admin']['event_desc_deleteuserdefinedtagpost'] = 'Een tag die wordt aangeroepen na het verwijderen van gebruikers-gedefinieerde tag';
$lang['admin']['event_desc_adduserdefinedtagpost'] = 'Een tag die wordt aangeroepen na toevoegen van gebruikers-gedefinieerde tag';
$lang['admin']['event_desc_adduserdefinedtagpre'] = 'Een tag die wordt aangeroepen voor het toevoegen van gebruikers-gedefinieerde tag';
$lang['admin']['global_umask'] = 'Bestandscreatiemasker (umask)';
$lang['admin']['errorcantcreatefile'] = 'Kan geen bestand aanmaken (rechtenprobleem?)';
$lang['admin']['errormoduleversionincompatible'] = 'Module is incompatibel met deze CMS-versie';
$lang['admin']['errormodulenotloaded'] = 'Interne fout, de module is niet ge&iuml;nstantieerd.';
$lang['admin']['errormodulenotfound'] = 'Interne fout, kan de moduleinstantie niet vinden.';
$lang['admin']['errorinstallfailed'] = 'Moduleinstallatie is mislukt';
$lang['admin']['errormodulewontload'] = 'Probleem bij het instantieren van een beschikbare module';
$lang['admin']['frontendlang'] = 'Standaardtaal voor de frontend van de website';
$lang['admin']['info_edituser_password'] = 'Dit veld wijzigen om het gebruikerswachtwoord te veranderen';
$lang['admin']['info_edituser_passwordagain'] = 'Dit veld wijzigen om het gebruikerswachtwoord te veranderen';
$lang['admin']['originator'] = 'Versturende module';
$lang['admin']['module_name'] = 'Modulenaam';
$lang['admin']['event_name'] = 'Gebeurtenisnaam';
$lang['admin']['event_description'] = 'Gebeurtenisomschrijving';
$lang['admin']['error_delete_default_parent'] = 'De bovenliggende pagina van de standaardpagina kan niet verwijderd worden.';
$lang['admin']['jsdisabled'] = 'Sorry, deze functie vereist dat Javascript geactiveerd is.';
$lang['admin']['order'] = 'Volgorde';
$lang['admin']['reorderpages'] = 'Pagina&#039;s herschikken';
$lang['admin']['reorder'] = 'Wijzig volgorde';
$lang['admin']['page_reordered'] = 'Pagina met succes verplaatst.';
$lang['admin']['pages_reordered'] = 'Pagina&#039;s met succes verplaatst';
$lang['admin']['sibling_duplicate_order'] = 'Twee pagina&#039;s binnen hetzelfde niveau kunnen niet dezelfde positie hebben. De pagina&#039;s zijn niet herschikt.';
$lang['admin']['no_orders_changed'] = 'Geen wijzigingen in de pagina volgorde. De pagina&#039;s zijn niet verplaatst.';
$lang['admin']['order_too_small'] = 'Een paginapositie kan geen nul zijn. De pagina&#039;s zijn niet verplaatst.';
$lang['admin']['order_too_large'] = 'Een pagina positie kan niet groter zijn dan het aantal pagina&#039;s binnen dat niveau. De pagina&#039;s zijn niet verplaatst.';
$lang['admin']['user_tag'] = 'Gebruikersgedefinieerde tag (UDT)';
$lang['admin']['add'] = 'Toevoegen';
$lang['admin']['CSS'] = 'CSS ';
$lang['admin']['about'] = 'Over';
$lang['admin']['action'] = 'Bewerking';
$lang['admin']['actionstatus'] = 'Bewerking / Status';
$lang['admin']['active'] = 'Actief';
$lang['admin']['addcontent'] = 'Nieuwe inhoud toevoegen';
$lang['admin']['cantremove'] = 'Kan niet verwijderen';
$lang['admin']['changepermissions'] = 'Wijzig rechten';
$lang['admin']['changepermissionsconfirm'] = 'WEES VOORZICHTIG\n\n Deze bewerking probeert alle bestanden waaruit de module bestaat schrijfbaar voor de webserver te maken.\nWeet u zeker dat u door wilt gaan?';
$lang['admin']['contentadded'] = 'De inhoud is aan de database toegevoegd.';
$lang['admin']['contentupdated'] = 'De inhoud is bijgewerkt.';
$lang['admin']['contentdeleted'] = 'De inhoud is uit de database verwijderd.';
$lang['admin']['success'] = 'Succes';
$lang['admin']['addcss'] = 'Stylesheet toevoegen';
$lang['admin']['addgroup'] = 'Groep toevoegen';
$lang['admin']['additionaleditors'] = 'Andere editors';
$lang['admin']['addtemplate'] = 'Sjabloon toevoegen';
$lang['admin']['adduser'] = 'Gebruiker toevoegen';
$lang['admin']['addusertag'] = 'Tag toevoegen';
$lang['admin']['adminaccess'] = 'Login voor beheertoegang';
$lang['admin']['adminlog'] = 'Beheerlogboek';
$lang['admin']['adminlogcleared'] = 'Het beheerlogboek is gewist';
$lang['admin']['adminlogempty'] = 'Het beheerlogboek is leeg';
$lang['admin']['adminsystemtitle'] = 'CMS-beheersysteem';
$lang['admin']['adminpaneltitle'] = 'CMS Made Simple beheerpaneel';
$lang['admin']['advanced'] = 'Geavanceerd';
$lang['admin']['aliasalreadyused'] = 'Deze alias is al gebruikt voor een andere pagina. Verander &quot;Pagina-alias&quot; in het Opties-tabblad.';
$lang['admin']['aliasmustbelettersandnumbers'] = 'Alias mag alleen uit letters en cijfers bestaan.';
$lang['admin']['aliasnotaninteger'] = 'Alias mag geen getal zijn';
$lang['admin']['allpagesmodified'] = 'Alle pagina&#039;s zijn aangepast!';
$lang['admin']['assignments'] = 'Gebruikers toewijzen';
$lang['admin']['associationexists'] = 'Deze toewijzing bestaat al';
$lang['admin']['autoinstallupgrade'] = 'Automatisch installeren of bijwerken';
$lang['admin']['back'] = 'Terug naar menu';
$lang['admin']['backtoplugins'] = 'Terug naar plugin-lijst';
$lang['admin']['cancel'] = 'Annuleren';
$lang['admin']['cantchmodfiles'] = 'Kan de rechten van sommige bestanden niet wijzigen';
$lang['admin']['cantremovefiles'] = 'Probleem bij het verwijderen van bestanden (rechten?)';
$lang['admin']['confirmcancel'] = 'Wijzigingen negeren? Klik op OK om alle wijzigingen te negeren. Klik op Annuleren om door te gaan met wijzigen.';
$lang['admin']['canceldescription'] = 'Wijzingen negeren';
$lang['admin']['clearadminlog'] = 'Maak beheerlogboek leeg';
$lang['admin']['code'] = 'Code ';
$lang['admin']['confirmdefault'] = 'Weet u zeker dat u - %s - als de standaardpagina van de website wilt instellen?';
$lang['admin']['confirmdeletedir'] = 'Weet u zeker dat u deze map met alle inhoud wilt verwijderen?';
$lang['admin']['content'] = 'Inhoud';
$lang['admin']['contentmanagement'] = 'Inhoudsbeheer';
$lang['admin']['contenttype'] = 'Inhoudstype';
$lang['admin']['copy'] = 'Kopieer';
$lang['admin']['copytemplate'] = 'Kopieer sjabloon';
$lang['admin']['create'] = 'Maak';
$lang['admin']['createnewfolder'] = 'Maak nieuwe map';
$lang['admin']['cssalreadyused'] = 'CSS-naam is al in gebruik';
$lang['admin']['cssmanagement'] = 'CSS-beheer';
$lang['admin']['currentassociations'] = 'Huidige verwijzingen';
$lang['admin']['currentdirectory'] = 'Huidige map';
$lang['admin']['currentgroups'] = 'Huidige groepen';
$lang['admin']['currentpages'] = 'Huidige pagina&#039;s';
$lang['admin']['currenttemplates'] = 'Huidige sjablonen';
$lang['admin']['currentusers'] = 'Huidige gebruikers';
$lang['admin']['custom404'] = 'Aangepaste 404-foutmelding';
$lang['admin']['database'] = 'Database ';
$lang['admin']['databaseprefix'] = 'Database voorvoegsel';
$lang['admin']['databasetype'] = 'Database type';
$lang['admin']['date'] = 'Datum';
$lang['admin']['default'] = 'Standaard';
$lang['admin']['delete'] = 'Verwijderen';
$lang['admin']['deleteconfirm'] = 'Weet u zeker dat u - %s - wilt verwijderen?';
$lang['admin']['deleteassociationconfirm'] = 'Weet u zeker dat u de verwijzing naar - %s - wilt verwijderen?';
$lang['admin']['deletecss'] = 'Verwijder CSS';
$lang['admin']['dependencies'] = 'Afhankelijkheden';
$lang['admin']['description'] = 'Omschrijving';
$lang['admin']['directoryexists'] = 'Deze map bestaat al.';
$lang['admin']['down'] = 'Omlaag';
$lang['admin']['edit'] = 'Bewerk';
$lang['admin']['editconfiguration'] = 'Configuratie bewerken';
$lang['admin']['editcontent'] = 'Inhoud bewerken';
$lang['admin']['editcss'] = 'Stylesheet bewerken';
$lang['admin']['editcsssuccess'] = 'Stylesheet bijgewerkt';
$lang['admin']['editgroup'] = 'Groep bewerken';
$lang['admin']['editpage'] = 'Pagina bewerken';
$lang['admin']['edittemplate'] = 'Sjabloon bewerken';
$lang['admin']['edittemplatesuccess'] = 'Sjabloon bijgewerkt';
$lang['admin']['edituser'] = 'Gebruiker bewerken';
$lang['admin']['editusertag'] = 'Gebruikersgedefinieerde tag (UDT) bewerken';
$lang['admin']['usertagadded'] = 'Gebruikersgedefinieerde tag (UDT) is toegevoegd.';
$lang['admin']['usertagupdated'] = 'Gebruikersgedefinieerde tag (UDT) is bijgewerkt.';
$lang['admin']['usertagdeleted'] = 'Gebruikersgedefinieerde tag (UDT) is verwijderd.';
$lang['admin']['email'] = 'E-mailadres';
$lang['admin']['errorattempteddowngrade'] = 'Moduleinstallatie zou resulteren in een downgrade. Handeling afgebroken.';
$lang['admin']['errorchildcontent'] = 'Pagina bevat gekoppelde pagina&#039;s. Verwijder deze eerst.';
$lang['admin']['errorcopyingtemplate'] = 'Fout bij kopi&euml;ren van de sjabloon';
$lang['admin']['errorcouldnotparsexml'] = 'Fout bij het verwerken van het XML-bestand. Vergewis u ervan dat u een .xml-bestand upload and geen .tar.gz of .zip-bestand';
$lang['admin']['errorcreatingassociation'] = 'Fout bij aanmaken van de verwijzing';
$lang['admin']['errorcssinuse'] = 'Deze stylesheet is nog in gebruik door een of meer sjablonen en/of pagina&#039;s. Verwijder deze verwijzingen eerst.';
$lang['admin']['errordefaultpage'] = 'Kan de standaardpagina niet verwijderen. Definieer eerst een nieuwe.';
$lang['admin']['errordeletingassociation'] = 'Fout bij verwijderen van verwijzing';
$lang['admin']['errordeletingcss'] = 'Fout bij verwijderen stylesheet';
$lang['admin']['errordeletingdirectory'] = 'Kan map niet verwijderen. Controleer of dit een rechtenprobleem is.';
$lang['admin']['errordeletingfile'] = 'Kan bestand niet verwijderen. Controleer of dit een rechtenprobleem is.';
$lang['admin']['errordirectorynotwritable'] = 'Geen rechten om in map te schrijven. Dit kan veroorzaakt worden door bestands- en eigendomsrechten. De veilige modus (PHP safe mode) kan ook aanstaan.';
$lang['admin']['errordtdmismatch'] = 'DTD-versie mist of is onverenigbaar met het XML-bestand';
$lang['admin']['errorgettingcssname'] = 'Fout bij opvragen van stylesheetnaam';
$lang['admin']['errorgettingtemplatename'] = 'Fout bij opvragen van sjabloonnaam';
$lang['admin']['errorincompletexml'] = 'XML-bestand is incompleet of fout';
$lang['admin']['uploadxmlfile'] = 'Installeer module via XML-bestand';
$lang['admin']['cachenotwritable'] = 'De cachemap is niet schrijfbaar. Het legen van de cache is niet mogelijk. Zorg dat de map tmp/cache volledig lees/schrijf/uitvoer rechten heeft (chmod 777). Ook kan het nodig zijn de veilige modus (PHP safe mode) uit te schakelen.';
$lang['admin']['modulesnotwritable'] = 'De modulemap <em>(en/of de uploads map)</em> is niet schrijfbaar. Om modules te installeren door een XML-bestand te uploaden, moet de modulemap volledige lees/schrijf/uitvoer rechten hebben (chmod 777). De veilige modus (PHP safe mode) zou ook aan kunnen staan...';
$lang['admin']['noxmlfileuploaded'] = 'Geen bestand ge&uuml;pload. Om een module via XML te installeren dient een module .xml bestand op uw computer gekozen en ge-upload worden.';
$lang['admin']['errorinsertingcss'] = 'Fout bij toevoegen van stylesheet';
$lang['admin']['errorinsertinggroup'] = 'Fout bij toevoegen van groep';
$lang['admin']['errorinsertingtag'] = 'Fout bij toevoegen van gebruikersgedefinieerde tag';
$lang['admin']['errorinsertingtemplate'] = 'Fout bij toevoegen van sjabloon';
$lang['admin']['errorinsertinguser'] = 'Fout bij toevoegen van gebruiker';
$lang['admin']['errornofilesexported'] = 'Fout bij exporteren van bestanden naar XML';
$lang['admin']['errorretrievingcss'] = 'Fout bij opvragen van stylesheet';
$lang['admin']['errorretrievingtemplate'] = 'Fout bij opvragen van sjabloon';
$lang['admin']['errortemplateinuse'] = 'Dit sjabloon is nog in gebruik door een pagina. Verwijder deze eerst.';
$lang['admin']['errorupdatingcss'] = 'Fout bij het bijwerken van stylesheet';
$lang['admin']['errorupdatinggroup'] = 'Fout bij het bijwerken van groep';
$lang['admin']['errorupdatingpages'] = 'Fout bij het bijwerken van de pagina&#039;s';
$lang['admin']['errorupdatingtemplate'] = 'Fout bij het bijwerken van het sjabloon';
$lang['admin']['errorupdatinguser'] = 'Fout bij het bijwerken van de gebruiker';
$lang['admin']['errorupdatingusertag'] = 'Fout bij het bijwerken van de gebruiker-tag';
$lang['admin']['erroruserinuse'] = 'Deze gebruiker is nog eigenaar van pagina&#039;s. Wijs een nieuwe eigenaar toe voordat de oude wordt verwijderd.';
$lang['admin']['eventhandlers'] = 'Gebeurtenissen beheer';
$lang['admin']['editeventhandler'] = 'Gebeurtenisverwerker bewerken';
$lang['admin']['eventhandlerdescription'] = 'Koppel gebruikersgedefinieerde tags (UDT) aan gebeurtenissen';
$lang['admin']['export'] = 'Exporteer';
$lang['admin']['event'] = 'Gebeurtenis';
$lang['admin']['false'] = 'Onwaar';
$lang['admin']['settrue'] = 'Zet op Waar (true)';
$lang['admin']['filecreatedirnodoubledot'] = 'De volgende tekens mogen niet voorkomen in een map naam: &#039;..&#039;.';
$lang['admin']['filecreatedirnoname'] = 'Kan geen map zonder naam aanmaken.';
$lang['admin']['filecreatedirnoslash'] = 'Map kan geen &#039;/&#039; of &#039;\&#039; bevatten.';
$lang['admin']['filemanagement'] = 'Bestandsbeheer';
$lang['admin']['filename'] = 'Bestandsnaam';
$lang['admin']['filenotuploaded'] = 'Bestand kan niet ge&iuml;mporteerd worden. Controleer of dit een rechtenprobleem of een probleem met veilig modus is.';
$lang['admin']['filesize'] = 'Bestandsgrootte';
$lang['admin']['firstname'] = 'Voornaam';
$lang['admin']['groupmanagement'] = 'Groepsbeheer';
$lang['admin']['grouppermissions'] = 'Groepsrechten';
$lang['admin']['handler'] = 'Verwerker (gebruikergedefinieerd tag)';
$lang['admin']['headtags'] = 'Tags voor paginakop';
$lang['admin']['help'] = 'Uitleg';
$lang['admin']['new_window'] = 'nieuw venster';
$lang['admin']['helpwithsection'] = 'Hulp bij %s';
$lang['admin']['helpaddtemplate'] = '<p>Een sjabloon (template) bepaalt hoe uw site er uitziet.</p><p>Maak het sjabloon hier aan en voeg tevens uw CSS aan het stylesheet-gedeelte toe, zodat u het uiterlijk van uw site zelf kunt bepalen.</p>';
$lang['admin']['helplisttemplate'] = '<p>Via deze pagina kunt u sjablonen aanpassen, verwijderen en nieuwe aanmaken.</p><p>Om een nieuw sjabloon aan te maken klikt u op <u>Nieuw sjabloon</u> .</p><p>Om hetzelfde sjabloon voor alle pagina&#039;s te gebruiken, kies <u>Alle</u>.</p><p>Om een sjabloon te kopi&euml;ren klik op het <u>kopieer</u>ikoon en geef een naam op voor het nieuwe sjabloon.</p>';
$lang['admin']['home'] = 'Start';
$lang['admin']['homepage'] = 'Startpagina';
$lang['admin']['hostname'] = 'Hostnaam';
$lang['admin']['idnotvalid'] = 'Het gegeven id is niet correct';
$lang['admin']['imagemanagement'] = 'Afbeeldingsbeheer';
$lang['admin']['informationmissing'] = 'Er ontbreekt informatie';
$lang['admin']['install'] = 'Installeer';
$lang['admin']['invalidcode'] = 'Niet correcte code ingevoerd.';
$lang['admin']['illegalcharacters'] = 'Ongeldige karakters in veld %s.';
$lang['admin']['invalidcode_brace_missing'] = 'Oneven aantal haakjes';
$lang['admin']['invalidtemplate'] = 'Het sjabloon is niet correct';
$lang['admin']['itemid'] = 'Item-id';
$lang['admin']['itemname'] = 'Item-naam';
$lang['admin']['language'] = 'Taal';
$lang['admin']['lastname'] = 'Achternaam';
$lang['admin']['logout'] = 'Uitloggen';
$lang['admin']['loginprompt'] = 'Voer een geldige gebruikersnaam en wachtwoord combinatie in om toegang te krijgen tot het beheerpaneel.';
$lang['admin']['logintitle'] = 'CMS Made Simple beheerlogin';
$lang['admin']['menutext'] = 'Menutekst';
$lang['admin']['missingparams'] = 'Enkele parameters ontbraken of waren niet correct';
$lang['admin']['modifygroupassignments'] = 'Groepstoekenningen wijzigen';
$lang['admin']['moduleabout'] = 'Over de %s module';
$lang['admin']['modulehelp'] = 'Hulp bij de %s module';
$lang['admin']['msg_defaultcontent'] = 'Voeg hier code toe dat verschijnt als standaardinhoud in alle nieuwe pagina&#039;s';
$lang['admin']['msg_defaultmetadata'] = 'Voeg hier code toe dat verschijnt in de metadatasectie in alle nieuwe pagina&#039;s';
$lang['admin']['wikihelp'] = 'Gemeenschapshulp';
$lang['admin']['moduleinstalled'] = 'Module is al ge&iuml;nstalleerd';
$lang['admin']['moduleinterface'] = '%s interface';
$lang['admin']['modules'] = 'Modules ';
$lang['admin']['move'] = 'Verplaatsen';
$lang['admin']['name'] = 'Naam';
$lang['admin']['needpermissionto'] = 'U heeft &#039;%s&#039; recht nodig om dit te kunnen uitvoeren.';
$lang['admin']['needupgrade'] = 'Moet bijgewerkt worden';
$lang['admin']['newtemplatename'] = 'Nieuwe sjabloonnaam';
$lang['admin']['next'] = 'Volgende';
$lang['admin']['noaccessto'] = 'Geen toegang tot %s';
$lang['admin']['nocss'] = 'Geen stylesheet';
$lang['admin']['noentries'] = 'Geen gegevens';
$lang['admin']['nofieldgiven'] = '%s niet opgegeven!';
$lang['admin']['nofiles'] = 'Geen bestanden';
$lang['admin']['nopasswordmatch'] = 'De wachtwoorden komen niet overeen';
$lang['admin']['norealdirectory'] = 'Deze map bestaat niet';
$lang['admin']['norealfile'] = 'Geen bestaand bestand opgegeven';
$lang['admin']['notinstalled'] = 'Niet ge&iuml;nstalleerd';
$lang['admin']['overwritemodule'] = 'Bestaande modules overschrijven';
$lang['admin']['owner'] = 'Eigenaar';
$lang['admin']['pagealias'] = 'Pagina alias';
$lang['admin']['pagedefaults'] = 'Paginastandaarden';
$lang['admin']['pagedefaultsdescription'] = 'Stel de standaardwaarden in voor nieuwe pagina&#039;s';
$lang['admin']['parent'] = 'Bovenliggend';
$lang['admin']['password'] = 'Wachtwoord';
$lang['admin']['passwordagain'] = 'Wachtwoord (nogmaals)';
$lang['admin']['permission'] = 'Recht';
$lang['admin']['permissions'] = 'Rechten';
$lang['admin']['permissionschanged'] = 'Rechten zijn bijgewerkt';
$lang['admin']['pluginabout'] = 'Over de %s tag';
$lang['admin']['pluginhelp'] = 'Hulp bij de %s tag';
$lang['admin']['pluginmanagement'] = 'Plugin Beheer';
$lang['admin']['prefsupdated'] = 'Voorkeuren zijn bijgewerkt.';
$lang['admin']['preview'] = 'Voorbeeld';
$lang['admin']['previewdescription'] = 'Voorbeeld wijzigingen';
$lang['admin']['previous'] = 'Vorige';
$lang['admin']['remove'] = 'Verwijderen';
$lang['admin']['removeconfirm'] = 'Hiermee worden de bestanden van deze module installatie volledig verwijderd.\nDoorgaan?';
$lang['admin']['removecssassociation'] = 'Stylesheetkoppeling verwijderen';
$lang['admin']['saveconfig'] = 'Configuratie opslaan';
$lang['admin']['send'] = 'Versturen';
$lang['admin']['setallcontent'] = 'Gebruik voor alle pagina&#039;s';
$lang['admin']['setallcontentconfirm'] = 'Wilt u dit sjabloon voor alle pagina&#039;s gebruiken?';
$lang['admin']['showinmenu'] = 'Toon in menu';
$lang['admin']['showsite'] = 'Toon website';
$lang['admin']['sitedownmessage'] = 'Melding dat de website buiten gebruik is';
$lang['admin']['siteprefs'] = 'Algemene instellingen';
$lang['admin']['status'] = 'Status ';
$lang['admin']['stylesheet'] = 'Stylesheet ';
$lang['admin']['submit'] = 'Versturen';
$lang['admin']['submitdescription'] = 'Wijzigingen opslaan';
$lang['admin']['tags'] = 'Tags ';
$lang['admin']['template'] = 'Sjabloon';
$lang['admin']['templateexists'] = 'Sjabloonnaam bestaat al';
$lang['admin']['templatemanagement'] = 'Sjabloonbeheer';
$lang['admin']['title'] = 'Titel';
$lang['admin']['tools'] = 'Gereedschappen';
$lang['admin']['true'] = 'Waar';
$lang['admin']['setfalse'] = 'Zet op onwaar (false)';
$lang['admin']['type'] = 'Type ';
$lang['admin']['typenotvalid'] = 'Type is niet correct';
$lang['admin']['uninstall'] = 'De&iuml;nstalleer';
$lang['admin']['uninstallconfirm'] = 'Weet u zeker dat u deze module wilt de&iuml;nstalleren?';
$lang['admin']['up'] = 'Omhoog';
$lang['admin']['upgrade'] = 'Bijwerken';
$lang['admin']['upgradeconfirm'] = 'Weet u zeker dat u dit wilt bijwerken?';
$lang['admin']['uploadfile'] = 'Bestand uploaden';
$lang['admin']['url'] = 'Url';
$lang['admin']['useadvancedcss'] = 'Geavanceerd stylesheetbeheer gebruiken';
$lang['admin']['user'] = 'Gebruiker';
$lang['admin']['userdefinedtags'] = 'Gebruikergedefinieerde tags (UDT)';
$lang['admin']['usermanagement'] = 'Gebruikersbeheer';
$lang['admin']['username'] = 'Gebruikersnaam';
$lang['admin']['usernameincorrect'] = 'Gebruikersnaam of wachtwoord incorrect';
$lang['admin']['userprefs'] = 'Gebruikersinstellingen';
$lang['admin']['usersassignedtogroup'] = 'Gebruikers aan groep %s toegewezen';
$lang['admin']['usertagexists'] = 'Een tag met deze naam bestaat al. Kies een andere naam.';
$lang['admin']['usewysiwyg'] = 'WYSIWYG editor gebruiken';
$lang['admin']['version'] = 'Versie';
$lang['admin']['view'] = 'Bekijk';
$lang['admin']['welcomemsg'] = 'Welkom %s';
$lang['admin']['directoryabove'] = 'Bovenliggende map';
$lang['admin']['nodefault'] = 'Geen &#039;Standaard&#039; Geselecteerd';
$lang['admin']['blobexists'] = 'HTML-bloknaam bestaat al';
$lang['admin']['blobmanagement'] = 'HTML-blokbeheer';
$lang['admin']['errorinsertingblob'] = 'Er was een fout bij het invoegen van het HTML-blok';
$lang['admin']['addhtmlblob'] = 'HTML-blok toevoegen';
$lang['admin']['edithtmlblob'] = 'HTML-blok bewerken';
$lang['admin']['edithtmlblobsuccess'] = 'HTML-blok bijgewerkt';
$lang['admin']['tagtousegcb'] = 'Tag om dit HTML-blok te gebruiken';
$lang['admin']['gcb_wysiwyg'] = 'Activeer HTML-blok WYSIWYG';
$lang['admin']['gcb_wysiwyg_help'] = 'Activeer de WYSIWYG-editor tijdens het bewerken van HTML-blokken';
$lang['admin']['filemanager'] = 'Bestandsbeheer';
$lang['admin']['imagemanager'] = 'Afbeeldingbeheer';
$lang['admin']['encoding'] = 'Codering';
$lang['admin']['clearcache'] = 'Buffer wissen';
$lang['admin']['clear'] = 'Wissen';
$lang['admin']['cachecleared'] = 'Buffer gewist';
$lang['admin']['apply'] = 'Toepassen';
$lang['admin']['applydescription'] = 'Wijzigingen opslaan en doorgaan met bewerken';
$lang['admin']['none'] = 'geen';
$lang['admin']['wysiwygtouse'] = 'Selecteer de WYSIWYG-editor';
$lang['admin']['syntaxhighlightertouse'] = 'Selecteer de syntax highlighter';
$lang['admin']['hasdependents'] = 'Heeft afhankelijkheden';
$lang['admin']['missingdependency'] = 'Noodzakelijke hulpmodule ontbreekt!';
$lang['admin']['minimumversion'] = 'Minimale versie';
$lang['admin']['minimumversionrequired'] = 'Minimaal benodigde CMSMS versie';
$lang['admin']['maximumversion'] = 'Maximale versie';
$lang['admin']['maximumversionsupported'] = 'Maximaal ondersteunde CMSMS versie';
$lang['admin']['depsformodule'] = 'Afhankelijke variabelen voor %s module';
$lang['admin']['installed'] = 'Ge&iuml;nstalleerd';
$lang['admin']['author'] = 'Auteur';
$lang['admin']['changehistory'] = 'Wijzigingen Geschiedenis';
$lang['admin']['moduleerrormessage'] = 'Foutmelding voor %s Module';
$lang['admin']['moduleupgradeerror'] = 'Er was een fout tijdens het opwaarderen van de module.';
$lang['admin']['moduleinstallmessage'] = 'Installatiebericht voor %s module';
$lang['admin']['moduleuninstallmessage'] = 'Boodschap bij verwijderen van %s module';
$lang['admin']['admintheme'] = 'Beheerthema';
$lang['admin']['addstylesheet'] = 'Een stylesheet toevoegen';
$lang['admin']['editstylesheet'] = 'Stylesheet veranderen';
$lang['admin']['addcssassociation'] = 'Eeen stylesheet-koppeling toevoegen';
$lang['admin']['attachstylesheet'] = 'Deze stylesheet koppelen';
$lang['admin']['attachtemplate'] = 'Aan deze sjabloon koppelen';
$lang['admin']['main'] = 'Start';
$lang['admin']['pages'] = 'Pagina&#039;s';
$lang['admin']['page'] = 'Pagina';
$lang['admin']['files'] = 'Bestanden';
$lang['admin']['layout'] = 'Opmaak';
$lang['admin']['usersgroups'] = 'Gebruikers/Groepen';
$lang['admin']['extensions'] = 'Uitbreidingen';
$lang['admin']['preferences'] = 'Voorkeuren';
$lang['admin']['admin'] = 'Websitebeheer';
$lang['admin']['viewsite'] = 'Site bekijken';
$lang['admin']['templatecss'] = 'Sjabloon aan stylesheet toewijzen';
$lang['admin']['plugins'] = 'Plugins ';
$lang['admin']['movecontent'] = 'Pagina&#039;s verplaatsen';
$lang['admin']['module'] = 'Module ';
$lang['admin']['usertags'] = 'Gebruikergedefinieerde tags';
$lang['admin']['htmlblobs'] = 'HTML-blokken';
$lang['admin']['adminhome'] = 'Beheer startpagina';
$lang['admin']['liststylesheets'] = 'Stylesheets';
$lang['admin']['preferencesdescription'] = 'Beheer hier de website-brede instellingen.';
$lang['admin']['adminlogdescription'] = 'Logboek van beheersactiviteiten.';
$lang['admin']['mainmenu'] = 'Hoofdmenu';
$lang['admin']['users'] = 'Backend Gebruikers';
$lang['admin']['usersdescription'] = 'Hier beheert u de backend gebruikers van deze website';
$lang['admin']['groups'] = 'Backend Groepen';
$lang['admin']['groupsdescription'] = 'Hier beheert u de backend gebruikersgroepen';
$lang['admin']['groupassignments'] = 'Backend Groepstoekenningen';
$lang['admin']['groupassignmentdescription'] = 'Hier kunt u backend gebruikers aan groepen toewijzen.';
$lang['admin']['groupperms'] = 'Backend Groepsrechten';
$lang['admin']['grouppermsdescription'] = 'Beheerrechten en toegangsniveaus voor back-end groepen';
$lang['admin']['pagesdescription'] = 'Hier worden pagina&#039;s en andersoortige inhoud bewerkt en toegevoegd.';
$lang['admin']['htmlblobdescription'] = 'HTML-blokken zijn stukken (html) inhoud die op verschillende plekken in pagina&#039;s of sjablonen geplaatst kunnen worden.';
$lang['admin']['templates'] = 'Sjablonen';
$lang['admin']['templatesdescription'] = 'Beheer hier uw website-sjablonen. Deze verzorgen de opmaak van uw website.';
$lang['admin']['stylesheets'] = 'Stylesheets ';
$lang['admin']['stylesheetsdescription'] = 'Stylesheet-beheer is een geavanceerde manier om CSS, gescheiden van uw sjablonen, toe te passen.';
$lang['admin']['filemanagerdescription'] = 'Bestanden uploaden en beheren.';
$lang['admin']['imagemanagerdescription'] = 'Afbeeldingen uploaden, bewerken en verwijderen.';
$lang['admin']['moduledescription'] = 'Modules breiden CMS Made Simple uit met allerhande functionaliteit.';
$lang['admin']['tagdescription'] = 'Tags zijn kleine stukjes functionaliteit die toegevoegd kunnen worden aan de pagina&#039;s en/ of sjablonen.';
$lang['admin']['usertagdescription'] = 'Tags die u zelf kunt aanmaken en onderhouden om specifieke taken uit te voeren.';
$lang['admin']['installdirwarning'] = '<em><strong>Waarschuwing:</strong></em> de installatiemap is nog aanwezig op de webserver. Verwijder deze volledig!';
$lang['admin']['subitems'] = 'Subonderdelen';
$lang['admin']['extensionsdescription'] = 'Modules, tags en andere gerelateerde zaken.';
$lang['admin']['usersgroupsdescription'] = 'Gebruikers- en groepsgerelateerde items';
$lang['admin']['layoutdescription'] = 'Website-opmaakmogelijkheden ';
$lang['admin']['admindescription'] = 'Websitebeheerfuncties';
$lang['admin']['contentdescription'] = 'Beheer hier de inhoud van de site.';
$lang['admin']['enablecustom404'] = 'Onderstaand 404 bericht inschakelen';
$lang['admin']['enablesitedown'] = 'Melding Site onbereikbaar inschakelen';
$lang['admin']['bookmarks'] = 'Bladwijzers';
$lang['admin']['user_created'] = 'Gebruikerbladwijzers';
$lang['admin']['forums'] = 'Forums ';
$lang['admin']['wiki'] = 'Wiki ';
$lang['admin']['irc'] = 'IRC ';
$lang['admin']['module_help'] = 'Modulehulp';
$lang['admin']['managebookmarks'] = 'Bladwijzerbeheer';
$lang['admin']['editbookmark'] = 'Bladwijzer veranderen';
$lang['admin']['addbookmark'] = 'Bladwijzer toevoegen';
$lang['admin']['recentpages'] = 'Recente pagina&#039;s';
$lang['admin']['groupname'] = 'Groepsnaam';
$lang['admin']['selectgroup'] = 'Groep selecteren';
$lang['admin']['updateperm'] = 'Rechten bijwerken';
$lang['admin']['admincallout'] = 'Beheerbladwijzers';
$lang['admin']['showbookmarks'] = 'Beheerbladwijzers tonen';
$lang['admin']['hide_help_links'] = 'Hulplinks verbergen';
$lang['admin']['hide_help_links_help'] = 'Aanvinken om de wiki en modulehulp links in paginakoppen uit te schakelen.';
$lang['admin']['showrecent'] = 'Toon onlangs gebruikte pagina&#039;s';
$lang['admin']['attachtotemplate'] = 'Koppel stylesheet aan template';
$lang['admin']['attachstylesheets'] = 'Stylesheets koppelen';
$lang['admin']['indent'] = 'Paginalijst in laten springen om de hierarchie te benadrukken';
$lang['admin']['adminindent'] = 'Paginaweergave';
$lang['admin']['contract'] = 'Vouw sectie in';
$lang['admin']['expand'] = 'Vouw uit';
$lang['admin']['expandall'] = 'Vouw alle secties uit';
$lang['admin']['contractall'] = 'Vouw alle secties in';
$lang['admin']['menu_bookmarks'] = '[+] ';
$lang['admin']['globalconfig'] = 'Algemene instellingen';
$lang['admin']['adminpaging'] = 'Aantal inhoudsitems om te tonen per pagina in de paginalijst';
$lang['admin']['nopaging'] = 'Laat alle onderdelen zien';
$lang['admin']['myprefs'] = 'Mijn instellingen';
$lang['admin']['myprefsdescription'] = 'Hier kunt u de beheergedeelte naar uw wensen aanpassen';
$lang['admin']['myaccount'] = 'Mijn Account';
$lang['admin']['myaccountdescription'] = 'Hier kunt u uw persoonlijke accountgegevens aanpassen';
$lang['admin']['adminprefs'] = 'Gebruikersvoorkeuren';
$lang['admin']['adminprefsdescription'] = 'Hier stelt u eigen voorkeuren in voor het beheerpaneel.';
$lang['admin']['managebookmarksdescription'] = 'Hier beheert u uw bladwijzers.';
$lang['admin']['options'] = 'Opties';
$lang['admin']['langparam'] = 'Deze parameter wordt gebruikt om de taalkeuze aan te geven. Niet alle modules ondersteunen deze parameter (of hebben deze nodig).';
$lang['admin']['parameters'] = 'Parameters ';
$lang['admin']['mediatype'] = 'Mediatype';
$lang['admin']['mediatype_'] = 'Niets ingesteld : be&iuml;nvloed alles';
$lang['admin']['mediatype_all'] = 'all : geschikt voor alle apparaten';
$lang['admin']['mediatype_aural'] = 'aural : bedoeld voor spraaksynthesizers.';
$lang['admin']['mediatype_braille'] = 'braille : bedoeld voor braillegevoelsterugkoppelapparaten.';
$lang['admin']['mediatype_embossed'] = 'embossed : bedoeld voor brailleprinters.';
$lang['admin']['mediatype_handheld'] = 'handheld : bedoeld voor handheld-apparaten.';
$lang['admin']['mediatype_print'] = 'print : bedoeld voor opgemaakt, ondoorzichtig materiaal en voor documenten die op het scherm in printvoorbeeldmodus bekeken worden.';
$lang['admin']['mediatype_projection'] = 'projection : bedoeld voor geprojecteerde presentaties, bijvoorbeeld projectors of printen naar (transparante) sheets.';
$lang['admin']['mediatype_screen'] = 'screen : voornamelijk bedoeld voor kleurencomputerschermen.';
$lang['admin']['mediatype_tty'] = 'tty : bedoeld voor media die een &quot;fixed-pitch character grid&quot; gebruiken, zoals teletypes en terminals.';
$lang['admin']['mediatype_tv'] = 'tv : bedoeld voor televisieachtige apparaten.';
$lang['admin']['assignmentchanged'] = 'Groepstoewijzingen zijn bijgewerkt.';
$lang['admin']['stylesheetexists'] = 'Stylesheet bestaat al';
$lang['admin']['errorcopyingstylesheet'] = 'Fout bij kopi&euml;ren van de stylesheet';
$lang['admin']['copystylesheet'] = 'Stylesheet kopi&euml;ren';
$lang['admin']['newstylesheetname'] = 'Nieuwe stylesheet-naam';
$lang['admin']['target'] = 'Doel';
$lang['admin']['xml'] = 'XML ';
$lang['admin']['xmlmodulerepository'] = 'URL van de ModuleRepository SOAP server';
$lang['admin']['metadata'] = 'Metadata ';
$lang['admin']['globalmetadata'] = 'Algemene metadata';
$lang['admin']['titleattribute'] = 'Beschrijving (Titel-attribuut en meta-description)';
$lang['admin']['tabindex'] = 'Tabindex';
$lang['admin']['accesskey'] = 'Toegangstoets';
$lang['admin']['sitedownwarning'] = '<strong>Waarschuwing:</strong> u website laat op dit moment een &quot;Website is in onderhoud&quot; bericht zien.  Verwijder het %s bestand om dit op te veranderen.';
$lang['admin']['deletecontent'] = 'Inhoud verwijderen';
$lang['admin']['deletepages'] = 'Deze pagina&#039;s verwijderen?';
$lang['admin']['selectall'] = 'Alles selecteren';
$lang['admin']['selecteditems'] = 'Met geselecteerden';
$lang['admin']['inactive'] = 'Inactief';
$lang['admin']['deletetemplates'] = 'Sjablonen verwijderen';
$lang['admin']['templatestodelete'] = 'Deze sjablonen worden verwijderd';
$lang['admin']['wontdeletetemplateinuse'] = 'Deze sjablonen zijn in gebruik en worden niet verwijderd';
$lang['admin']['deletetemplate'] = 'Stylesheets verwijderen';
$lang['admin']['stylesheetstodelete'] = 'Deze stylesheets worden verwijderd';
$lang['admin']['sitename'] = 'Sitenaam';
$lang['admin']['siteadmin'] = 'Sitebeheer';
$lang['admin']['images'] = 'Afbeeldingbeheer';
$lang['admin']['blobs'] = 'HTML-blokken';
$lang['admin']['groupmembers'] = 'Groepstaken';
$lang['admin']['troubleshooting'] = '(Probleemoplossing)';
$lang['admin']['event_desc_loginpost'] = 'Een tag die wordt aangeroepen nadat een gebruiker in het beheer paneel is ingelogd';
$lang['admin']['event_desc_logoutpost'] = 'Een tag die wordt aangeroepen nadat een gebruiker in het beheer paneel is uitgelogd';
$lang['admin']['event_desc_adduserpre'] = 'Een tag die wordt aangeroepen voordat een nieuwe gebruiker wordt aangemaakt';
$lang['admin']['event_desc_adduserpost'] = 'Een tag die wordt aangeroepen nadat een nieuwe gebruiker is aangemaakt';
$lang['admin']['event_desc_edituserpre'] = 'Een tag die wordt aangeroepen voordat bewerkingen aan een gebruiker worden opgeslagen';
$lang['admin']['event_desc_edituserpost'] = 'Een tag die wordt aangeroepen nadat bewerkingen aan een gebruiker zijn opgeslagen';
$lang['admin']['event_desc_deleteuserpre'] = 'Een tag die wordt aangeroepen voordat een gebruiker uit het systeem wordt verwijderd';
$lang['admin']['event_desc_deleteuserpost'] = 'Een tag die wordt aangeroepen nadat een gebruiker uit het systeem is verwijderd';
$lang['admin']['event_desc_addgrouppre'] = 'Een tag die wordt aangeroepen voordat een nieuwe groep wordt aangemaakt';
$lang['admin']['event_desc_addgrouppost'] = 'Een tag die wordt aangeroepen nadat een nieuwe groep is aangemaakt';
$lang['admin']['event_desc_changegroupassignpre'] = 'Een tag die wordt aangeroepen voordat een groeps toewijzing is opgeslagen';
$lang['admin']['event_desc_changegroupassignpost'] = 'Een tag die wordt aangeroepen nadat een groeps toewijzing is opgeslagen';
$lang['admin']['event_desc_editgrouppre'] = 'Een tag die wordt aangeroepen voordat bewerkingen aan een groep worden opgeslagen';
$lang['admin']['event_desc_editgrouppost'] = 'Een tag die wordt aangeroepen nadat bewerkingen aan een groep zijn opgeslagen';
$lang['admin']['event_desc_deletegrouppre'] = 'Een tag die wordt aangeroepen voordat een groep uit het systeem wordt verwijderd';
$lang['admin']['event_desc_deletegrouppost'] = 'Een tag die wordt aangeroepen nadat een groep uit het systeem is verwijderd';
$lang['admin']['event_desc_addstylesheetpre'] = 'Een tag die wordt aangeroepen voordat een nieuw stylesheet wordt aangemaakt';
$lang['admin']['event_desc_addstylesheetpost'] = 'Een tag die wordt aangeroepen nadat een nieuw stylesheet is aangemaakt';
$lang['admin']['event_desc_editstylesheetpre'] = 'Een tag die wordt aangeroepen voordat bewerkingen aan een stylesheet worden opgeslagen';
$lang['admin']['event_desc_editstylesheetpost'] = 'Een tag die wordt aangeroepen nadat bewerkingen aan een stylesheet zijn opgeslagen';
$lang['admin']['event_desc_deletestylesheetpre'] = 'Een tag die wordt aangeroepen voordat een stylesheet uit het systeem wordt verwijderd';
$lang['admin']['event_desc_deletestylesheetpost'] = 'Een tag die wordt aangeroepen nadat een stylesheet uit het systeem is verwijderd';
$lang['admin']['event_desc_addtemplatepre'] = 'Een tag die wordt aangeroepen voordat een nieuw sjabloon wordt aangemaakt';
$lang['admin']['event_desc_addtemplatepost'] = 'Een tag die wordt aangeroepen nadat een nieuw sjabloon is aangemaakt';
$lang['admin']['event_desc_edittemplatepre'] = 'Een tag die wordt aangeroepen voordat bewerkingen aan een sjabloon worden opgeslagen';
$lang['admin']['event_desc_edittemplatepost'] = 'Een tag die wordt aangeroepen nadat bewerkingen aan een sjabloon zijn opgeslagen';
$lang['admin']['event_desc_deletetemplatepre'] = 'Een tag die wordt aangeroepen voordat een sjabloon uit het systeem wordt verwijderd';
$lang['admin']['event_desc_deletetemplatepost'] = 'Een tag die wordt aangeroepen nadat een sjabloon uit het systeem is verwijderd';
$lang['admin']['event_desc_templateprecompile'] = 'Een tag die wordt aangeroepen voordat een sjabloon wordt verzonden naar smarty voor verwerking';
$lang['admin']['event_desc_templatepostcompile'] = 'Een tag die wordt aangeroepen nadat een sjabloon is verwerkt door smarty';
$lang['admin']['event_desc_addglobalcontentpre'] = 'Een tag die wordt aangeroepen voordat een nieuw HTML blok wordt aangemaakt';
$lang['admin']['event_desc_addglobalcontentpost'] = 'Een tag die wordt aangeroepen nadat een nieuw HTML blok is aangemaakt';
$lang['admin']['event_desc_editglobalcontentpre'] = 'Een tag die wordt aangeroepen voordat bewerkingen aan een HTML blok worden opgeslagen';
$lang['admin']['event_desc_editglobalcontentpost'] = 'Een tag die wordt aangeroepen nadat bewerkingen aan een HTML blok zijn opgeslagen';
$lang['admin']['event_desc_deleteglobalcontentpre'] = 'Een tag die wordt aangeroepen voordat een HTML blok uit het systeem wordt verwijderd';
$lang['admin']['event_desc_deleteglobalcontentpost'] = 'Een tag die wordt aangeroepen nadat een HTML blok uit het systeem is verwijderd';
$lang['admin']['event_desc_globalcontentprecompile'] = 'Een tag die wordt aangeroepen  voordat een HTML blok wordt verzonden naar smarty voor verwerking';
$lang['admin']['event_desc_globalcontentpostcompile'] = 'Een tag die wordt aangeroepen nadat een HTML blok verwerkt door smarty';
$lang['admin']['event_desc_contenteditpre'] = 'Een tag die wordt aangeroepen voordat bewerkingen aan de inhoud worden opgeslagen';
$lang['admin']['event_desc_contenteditpost'] = 'Een tag die wordt aangeroepen nadat bewerkingen aan de inhoud zijn opgeslagen';
$lang['admin']['event_desc_contentdeletepre'] = 'Een tag die wordt aangeroepen voordat de inhoud uit het systeem wordt verwijderd';
$lang['admin']['event_desc_contentdeletepost'] = 'Een tag die wordt aangeroepen nadat de inhoud uit het systeem is verwijderd';
$lang['admin']['event_desc_contentstylesheet'] = 'Een tag die wordt aangeroepen voordat een stylesheet wordt verzonden naar de browser';
$lang['admin']['event_desc_contentprecompile'] = 'Een tag die wordt aangeroepen voordat de inhoud wordt verzonden naar smarty voor verwerking';
$lang['admin']['event_desc_contentpostcompile'] = 'Een tag die wordt aangeroepen nadat de inhoud is verwerkt door smarty';
$lang['admin']['event_desc_contentpostrender'] = 'Een tag die wordt aangeroepen voordat gecombineerd html wordt verzonden naar de browser';
$lang['admin']['event_desc_smartyprecompile'] = 'Een tag die wordt aangeroepen voordat enige inhoud bedoeld voor smarty wordt verzonden voor verwerking';
$lang['admin']['event_desc_smartypostcompile'] = 'Een tag die wordt aangeroepen nadat enige inhoud bedoeld voor smarty is verwerkt';
$lang['admin']['event_help_loginpost'] = '<p>Verzonden nadat een gebruiker in het beheer paneel is ingelogd.</p>
<h4>Parameters</h4>
<ul>
<li>&#039;user&#039; - Verwijzing naar het be&iuml;nvloedde gebruikerobject.</li>
</ul>
';
$lang['admin']['event_help_logoutpost'] = '<p>Verzonden nadat een gebruiker in het beheer paneel is uitgelogd.</p>
<h4>Parameters</h4>
<ul>
<li>&#039;user&#039; - Verwijzing naar het be&iuml;nvloedde gebruikerobject.</li>
</ul>
';
$lang['admin']['event_help_adduserpre'] = '<p>Verzonden voordat een nieuwe gebruiker wordt aangemaakt.</p>
<h4>Parameters</h4>
<ul>
<li>&#039;user&#039; - Verwijzing naar het be&iuml;nvloedde gebruikerobject.</li>
</ul>
';
$lang['admin']['event_help_adduserpost'] = '<p>Verzonden nadat een nieuwe gebruiker is aangemaakt.</p>
<h4>Parameters</h4>
<ul>
<li>&#039;user&#039; - Verwijzing naar het be&iuml;nvloedde gebruikerobject.</li>
</ul>
';
$lang['admin']['event_help_edituserpre'] = '<p>Verzonden voordat bewerkingen aan een gebruiker worden opgeslagen.</p>
<h4>Parameters</h4>
<ul>
<li>&#039;user&#039; - Verwijzing naar het be&iuml;nvloedde gebruikerobject.</li>
</ul>
';
$lang['admin']['event_help_edituserpost'] = '<p>Verzonden nadat bewerkingen aan een gebruiker zijn opgeslagen.</p>
<h4>Parameters</h4>
<ul>
<li>&#039;user&#039; - Verwijzing naar het be&iuml;nvloedde gebruikerobject.</li>
</ul>
';
$lang['admin']['event_help_deleteuserpre'] = '<p>Verzonden voordat een gebruiker uit het systeem wordt verwijderd.</p>
<h4>Parameters</h4>
<ul>
<li>&#039;user&#039; - Verwijzing naar het be&iuml;nvloedde gebruikerobject.</li>
</ul>
';
$lang['admin']['event_help_deleteuserpost'] = '<p>Verzonden nadat een gebruiker uit het systeem is verwijderd.</p>
<h4>Parameters</h4>
<ul>
<li>&#039;user&#039; - Verwijzing naar het be&iuml;nvloedde gebruikerobject.</li>
</ul>
';
$lang['admin']['event_help_addgrouppre'] = '<p>Verzonden voordat een nieuwe groep wordt aangemaakt.</p>
<h4>Parameters</h4>
<ul>
<li>&#039;group&#039; - Verwijzing naar het be&iuml;nvloedde groepobject.</li>
</ul>
';
$lang['admin']['event_help_addgrouppost'] = '<p>Verzonden nadat een nieuwe groep is aangemaakt.</p>
<h4>Parameters</h4>
<ul>
<li>&#039;group&#039; - Verwijzing naar het be&iuml;nvloedde groepobject.</li>
</ul>
';
$lang['admin']['event_help_changegroupassignpre'] = '<p>Verzonden voordat een groepstoewijzing is opgeslagen.</p>
<h4>Parameters></h4>
<ul>
<li>&#039;group&#039; - Verwijzing naar een groepobject.</li>
<li>&#039;users&#039; - Tabel van verwijzingen naar gebruikers die toebehoren tot een groep.</li>
';
$lang['admin']['event_help_changegroupassignpost'] = '<p>Verzonden nadat een groepstoewijzing is opgeslagen.</p>
<h4>Parameters></h4>
<ul>
<li>&#039;group&#039; - Verwijzing naar een groepobject.</li>
<li>&#039;users&#039; - Tabel van verwijzingen naar gebruikers die toebehoren tot de be&iuml;nvloede groep.</li>
';
$lang['admin']['event_help_editgrouppre'] = '<p>Verzonden voordat bewerkingen aan een groep worden opgeslagen.</p>
<h4>Parameters</h4>
<ul>
<li>&#039;group&#039; - Verwijzing naar het be&iuml;nvloedde groepobject.</li>
</ul>
';
$lang['admin']['event_help_editgrouppost'] = '<p>Verzonden nadat bewerkingen aan een groep zijn opgeslagen.</p>
<h4>Parameters</h4>
<ul>
<li>&#039;group&#039; - Verwijzing naar het be&iuml;nvloedde groepobject.</li>
</ul>
';
$lang['admin']['event_help_deletegrouppre'] = '<p>Verzonden voordat een groep uit het systeem wordt verwijderd.</p>
<h4>Parameters</h4>
<ul>
<li>&#039;group&#039; - Verwijzing naar het be&iuml;nvloedde groepobject.</li>
</ul>
';
$lang['admin']['event_help_deletegrouppost'] = '<p>Verzonden nadat een groep uit het systeem is verwijderd.</p>
<h4>Parameters</h4>
<ul>
<li>&#039;group&#039; - Verwijzing naar het be&iuml;nvloedde groepobject.</li>
</ul>
';
$lang['admin']['event_help_addstylesheetpre'] = '<p>Verzonden voordat een nieuw stylesheet wordt aangemaakt.</p>
<h4>Parameters</h4>
<ul>
<li>&#039;stylesheet&#039; - Verwijzing naar het be&iuml;nvloedde stylesheet-object.</li>
</ul>
';
$lang['admin']['event_help_addstylesheetpost'] = '<p>Verzonden nadat een nieuw stylesheet is aangemaakt.</p>
<h4>Parameters</h4>
<ul>
<li>&#039;stylesheet&#039; - Verwijzing naar het be&iuml;nvloedde stylesheet-object.</li>
</ul>
';
$lang['admin']['event_help_editstylesheetpre'] = '<p>Verzonden voordat bewerkingen aan een stylesheet worden opgeslagen.</p>
<h4>Parameters</h4>
<ul>
<li>&#039;stylesheet&#039; - Verwijzing naar het be&iuml;nvloedde stylesheet-object.</li>
</ul>
';
$lang['admin']['event_help_editstylesheetpost'] = '<p>Verzonden nadat bewerkingen aan een stylesheet zijn opgeslagen.</p>
<h4>Parameters</h4>
<ul>
<li>&#039;stylesheet&#039; - Verwijzing naar het be&iuml;nvloedde stylesheet-object.</li>
</ul>
';
$lang['admin']['event_help_deletestylesheetpre'] = '<p>Verzonden voordat een stylesheet uit het systeem wordt verwijderd.</p>
<h4>Parameters</h4>
<ul>
<li>&#039;stylesheet&#039; - Verwijzing naar het be&iuml;nvloedde stylesheet-object.</li>
</ul>
';
$lang['admin']['event_help_deletestylesheetpost'] = '<p>Verzonden nadat een stylesheet uit het systeem is verwijderd.</p>
<h4>Parameters</h4>
<ul>
<li>&#039;stylesheet&#039; - Verwijzing naar het be&iuml;nvloedde stylesheet-object.</li>
</ul>
';
$lang['admin']['event_help_addtemplatepre'] = '<p>Verzonden voordat een nieuw sjabloon wordt aangemaakt.</p>
<h4>Parameters</h4>
<ul>
<li>&#039;template&#039; - Verwijzing naar het be&iuml;nvloedde sjabloonobject.</li>
</ul>
';
$lang['admin']['event_help_addtemplatepost'] = '<p>Verzonden nadat een nieuw sjabloon is aangemaakt.</p>
<h4>Parameters</h4>
<ul>
<li>&#039;template&#039; - Verwijzing naar het be&iuml;nvloedde sjabloonobject.</li>
</ul>
';
$lang['admin']['event_help_edittemplatepre'] = '<p>Verzonden voordat bewerkingen aan een sjabloon worden opgeslagen.</p>
<h4>Parameters</h4>
<ul>
<li>&#039;template&#039; - Verwijzing naar het be&iuml;nvloedde sjabloonobject.</li>
</ul>
';
$lang['admin']['event_help_edittemplatepost'] = '<p>Verzonden nadat bewerkingen aan een sjabloon zijn opgeslagen.</p>
<h4>Parameters</h4>
<ul>
<li>&#039;template&#039; - Verwijzing naar het be&iuml;nvloedde sjabloonobject.</li>
</ul>
';
$lang['admin']['event_help_deletetemplatepre'] = '<p>Verzonden voordat een sjabloon uit het systeem wordt verwijderd.</p>
<h4>Parameters</h4>
<ul>
<li>&#039;template&#039; - Verwijzing naar het be&iuml;nvloedde sjabloonobject.</li>
</ul>
';
$lang['admin']['event_help_deletetemplatepost'] = '<p>Verzonden nadat een sjabloon uit het systeem is verwijderd.</p>
<h4>Parameters</h4>
<ul>
<li>&#039;template&#039; - Verwijzing naar het be&iuml;nvloedde sjabloonobject.</li>
</ul>
';
$lang['admin']['event_help_templateprecompile'] = '<p>Verzonden voordat een sjabloon wordt verzonden naar smarty voor verwerking.</p>
<h4>Parameters</h4>
<ul>
<li>&#039;template&#039; - Verwijzing naar de be&iuml;nvloedde sjabloontekst.</li>
</ul>
';
$lang['admin']['event_help_templatepostcompile'] = '<p>Verzonden nadat een sjabloon is verwerkt door smarty.</p>
<h4>Parameters</h4>
<ul>
<li>&#039;template&#039; - Verwijzing naar de be&iuml;nvloedde sjabloontekst.</li>
</ul>
';
$lang['admin']['event_help_addglobalcontentpre'] = '<p>Verzonden voordat een nieuw HTML blok wordt aangemaakt.</p>
<h4>Parameters</h4>
<ul>
<li>&#039;global_content&#039; - Verwijzing naar het be&iuml;nvloedde HTML blokobject.</li>
</ul>
';
$lang['admin']['event_help_addglobalcontentpost'] = '<p>Verzonden nadat een nieuw HTML blok is aangemaakt.</p>
<h4>Parameters</h4>
<ul>
<li>&#039;global_content&#039; - Verwijzing naar het be&iuml;nvloedde HTML blokobject.</li>
</ul>
';
$lang['admin']['event_help_editglobalcontentpre'] = '<p>Verzonden voordat bewerkingen aan een HTML blok worden opgeslagen.</p>
<h4>Parameters</h4>
<ul>
<li>&#039;global_content&#039; - Verwijzing naar het be&iuml;nvloedde HTML blokobject.</li>
</ul>
';
$lang['admin']['event_help_editglobalcontentpost'] = '<p>Verzonden nadat bewerkingen aan een HTML blok zijn opgeslagen.</p>
<h4>Parameters</h4>
<ul>
<li>&#039;global_content&#039; - Verwijzing naar het be&iuml;nvloedde HTML blokobject.</li>
</ul>
';
$lang['admin']['event_help_deleteglobalcontentpre'] = '<p>Verzonden voordat een HTML blok uit het systeem wordt verwijderd.</p>
<h4>Parameters</h4>
<ul>
<li>&#039;global_content&#039; - Verwijzing naar het be&iuml;nvloedde HTML blokobject.</li>
</ul>
';
$lang['admin']['event_help_deleteglobalcontentpost'] = '<p>Verzonden nadat een HTML blok uit het systeem is verwijderd.</p>
<h4>Parameters</h4>
<ul>
<li>&#039;global_content&#039; - Verwijzing naar het be&iuml;nvloedde HTML blokobject.</li>
</ul>
';
$lang['admin']['event_help_globalcontentprecompile'] = '<p>Verzonden voordat een HTML blok wordt verzonden naar smarty voor verwerking.</p>
<h4>Parameters</h4>
<ul>
<li>&#039;global_content&#039; - Verwijzing naar de be&iuml;nvloedde HTML bloktekst.</li>
</ul>
';
$lang['admin']['event_help_globalcontentpostcompile'] = '<p>Verzonden nadat een HTML blok is verwerkt door smarty.</p>
<h4>Parameters</h4>
<ul>
<li>&#039;global_content&#039; - Verwijzing naar de be&iuml;nvloedde HTML bloktekst.</li>
</ul>
';
$lang['admin']['event_help_contenteditpre'] = '<p>Verzonden voordat bewerkingen aan de inhoud worden opgeslagen.</p>
<h4>Parameters</h4>
<ul>
<li>&#039;global_content&#039; - Verwijzing naar het be&iuml;nvloedde inhoudsobject.</li>
</ul>
';
$lang['admin']['event_help_contenteditpost'] = '<p>Verzonden nadat bewerkingen aan de inhoud is opgeslagen.</p>
<h4>Parameters</h4>
<ul>
<li>&#039;content&#039; - Verwijzing naar het be&iuml;nvloedde inhoudsobject.</li>
</ul>
';
$lang['admin']['event_help_contentdeletepre'] = '<p>Verzonden voordat inhoud uit het systeem wordt verwijderd.</p>
<h4>Parameters</h4>
<ul>
<li>&#039;content&#039; - Verwijzing naar het be&iuml;nvloedde inhoudsobject.</li>
</ul>
';
$lang['admin']['event_help_contentdeletepost'] = '<p>Verzonden nadat inhoud uit het systeem is verwijderd.</p>
<h4>Parameters</h4>
<ul>
<li>&#039;content&#039; - Verwijzing naar het be&iuml;nvloedde inhoudsobject.</li>
</ul>
';
$lang['admin']['event_help_contentstylesheet'] = '<p>Verzonden voordat een stylesheet wordt verzonden naar de browser.</p>
<h4>Parameters</h4>
<ul>
<li>&#039;content&#039; - Verwijzing naar de be&iuml;nvloedde stylesheet-tekst.</li>
</ul>
';
$lang['admin']['event_help_contentprecompile'] = '<p>Verzonden voordat inhoud wordt verzonden naar smarty voor verwerking.</p>
<h4>Parameters</h4>
<ul>
<li>&#039;content&#039; - Verwijzing naar de be&iuml;nvloedde inhoudstekst.</li>
</ul>
';
$lang['admin']['event_help_contentpostcompile'] = '<p>Verzonden nadat inhoud is verwerkt door smarty.</p>
<h4>Parameters</h4>
<ul>
<li>&#039;content&#039; - Verwijzing naar de be&iuml;nvloedde inhoudstekst.</li>
</ul>
';
$lang['admin']['event_help_contentpostrender'] = '<p>Verzonden voordat gecombineerde html wordt verzonden naar de browser.</p>
<h4>Parameters</h4>
<ul>
<li>&#039;content&#039; - Verwijzing naar de be&iuml;nvloedde html-tekst.</li>
</ul>
';
$lang['admin']['event_help_smartyprecompile'] = '<p>Verzonden voordat alle inhoud bedoeld voor smarty, wordt verzonden voor verwerking.</p>
<h4>Parameters</h4>
<ul>
<li>&#039;content&#039; - Verwijzing naar de be&iuml;nvloedde tekst.</li>
</ul>
';
$lang['admin']['event_help_smartypostcompile'] = '<p>Verzonden nadat alle inhoud bedoeld voor smarty, is verwerkt.</p>
<h4>Parameters</h4>
<ul>
<li>&#039;content&#039; - Verwijzing naar de be&iuml;nvloedde tekst.</li>
</ul>
';
$lang['admin']['filterbymodule'] = 'Filter op module';
$lang['admin']['showall'] = 'Alles tonen';
$lang['admin']['core'] = 'Core ';
$lang['admin']['defaultpagecontent'] = 'Standaard paginainhoud';
$lang['admin']['file_url'] = 'Link naar bestand (in plaats naar URL)';
$lang['admin']['no_file_url'] = 'Geen (gebruik bovenstaande URL)';
$lang['admin']['defaultparentpage'] = 'Bovenliggende standaardpagina';
$lang['admin']['error_udt_name_whitespace'] = 'Fout: gebruikersgedefinieerde tags (UDT) mogen geen spaties in de naam hebben.';
$lang['admin']['warning_safe_mode'] = '<strong><em>WAARSCHUWING:</em></strong> PHP veilige modus (safe mode) is actief.  Dit kan voor problemen zorgen bij uploads vanuit de webbrowser. Dit geldt voor afbeeldingen, thema&rsquo;s en module-XML-pakketten. Het advies is veilige modus uit te zetten in PHP.';
$lang['admin']['test'] = 'Controleer';
$lang['admin']['results'] = 'Resultaten';
$lang['admin']['untested'] = 'Niet gecontroleerd';
$lang['admin']['unknown'] = 'Niet bekend';
$lang['admin']['download'] = 'Download ';
$lang['admin']['frontendwysiwygtouse'] = 'Frontend WYSIWYG';
$lang['admin']['all_groups'] = 'Alle Groepen';
$lang['admin']['error_type'] = 'Fout-type';
$lang['admin']['contenttype_errorpage'] = 'Fout-pagina';
$lang['admin']['errorpagealreadyinuse'] = 'Foutcode al in gebruik';
$lang['admin']['404description'] = 'Pagina niet gevonden';
$lang['admin']['usernotfound'] = 'Gebruikersnaam niet gevonden.';
$lang['admin']['passwordchange'] = 'Wilt u alstublieft een nieuw wachtwoord invoeren';
$lang['admin']['recoveryemailsent'] = 'E-mail verzonden naar het bekende mailadres. Controleer uw Postvak In van uw mail programma voor verdere instructies';
$lang['admin']['errorsendingemail'] = 'Er is een fout opgetreden tijdens het versturen van de &#039;Wachtwoord Herstel&#039; mail. Neem contact op met uw administrator.';
$lang['admin']['passwordchangedlogin'] = 'Wachtwoord gewijzigd.  Meldt u opnieuw aan met deze gegevens.';
$lang['admin']['nopasswordforrecovery'] = 'Geen e-mail adres bekend voor deze gebruiker. Wachtwoord Herstel is hierdoor niet mogelijk. Neem contact op met uw administrator.';
$lang['admin']['lostpw'] = 'Wachtwoord vergeten?';
$lang['admin']['lostpwemailsubject'] = '[%s] Wachtwoord Herstellen';
$lang['admin']['lostpwemail'] = 'U ontvangt deze mail omdat er een verzoek is gedaan om het (%s) wachtwoord van deze gebruiker: %s te wijzigen. Als u dit verzoek wilt uitvoeren klik dat op de onderstaande link of kopieer deze in de adres regel van uw favoriete webbrowser:
%s

Heeft u niet een dergelijk verzoek gedaan, negeer dan deze mail en er zal verder niets aan uw account worden gewijzigd.';
$lang['admin']['utma'] = '156861353.509382990.1276370458.1278096964.1278097615.114';
$lang['admin']['utmz'] = '156861353.1277989303.108.16.utmcsr=forum.cmsmadesimple.org|utmccn=(referral)|utmcmd=referral|utmcct=/index.php/topic,45317.new.html';
$lang['admin']['qca'] = 'P0-26515958-1276370458481';
$lang['admin']['utmb'] = '156861353.8.10.1278097615';
$lang['admin']['utmc'] = '156861353';
?>