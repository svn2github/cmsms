<?php
$lang['admin']['stylesheetcopied'] = 'Stylesheet kopiert';
$lang['admin']['templatecopied'] = 'Template kopiert';
$lang['admin']['ecommerce_desc'] = 'Module f&uuml;r die Bereitstellung von eCommerce-F&auml;higkeiten';
$lang['admin']['ecommerce'] = 'eCommerce';
$lang['admin']['help_function_content_module'] = '<h3>Was macht dieses Plugin?</h3>
<p>Dieser Inhaltsblock-Typ erm&ouml;glicht, f&uuml;r verschiedene Module unterschiedliche Inhaltsblock-Typen zu erstellen.</p>
<p>F&uuml;r einige Module k&ouml;nnen Inhaltsblock-Typen festgelegt werden, die in den Modul-Templates eingesetzt werden k&ouml;nnen. Beispiel: Das FrontEndUsers-Modul kann einen Gruppenlisten-Inhaltsblock-Typ definieren. Damit wird festgelegt, wie Sie den content_module-Tag verwenden k&ouml;nnen, um diesen Block-Typ in Ihren Templates anzupassen.</p>
<p>Hinweis:</strong> Dieser Inhaltsblock-Typ kann nur von kompatiblen Modulen verwendet werden. Sie sollten ihn niemals anders als in der Hilfe dieser Module vorgeschlagen verwenden.</p>';
$lang['admin']['error_parsing_content_blocks'] = 'Beim Verarbeiten der Inhaltsbl&ouml;cke ist ein Fehler aufgetreten (vielleicht 2 Bl&ouml;cke mit dem gleichen Namen)';
$lang['admin']['error_no_default_content_block'] = 'In diesem Template ist kein Standard-Inhaltsblock vorhanden. Bitte stellen Sie sicher, dass der {content}-Tag im Seiten-Template vorhanden ist.';
$lang['admin']['help_function_cms_stylesheet'] = '	<h3>Was macht dieses Plugin?</h3>
  <p>Dieses Plugin ist ein Ersatz f&uuml;r den {stylesheet}-Tag, mit dem CSS-Dateien als statische Dateien im Verzeichnis /tmp/cache zwischengespeichert werden k&ouml;nnen. Au&szlig;erdem werden die Stylesheets durch Smarty verarbeitet.</p>
  <p>Das Plugin ruft die Stylesheet-Informationen vom System ab. Standardm&auml;&szlig;ig werden alle Stylesheets, die dem aktuellen Template zugeordnet sind, in der vom Designer festgelegten Reihenfolge eingelesen und anschlie&szlig;end die HTML-Stylesheet-Tags erzeugt.</p>
  <p>Die erzeugten Stylesheets erhalten einen eindeutigen Namen, der das letzte Bearbeitungsdatum des Stylesheets in der Datenbank enth&auml;lt. Diese Datei wird nur dann ge&auml;ndert, wenn das Stylesheet ge&auml;ndert wurde.</p>
  <h3>Wie wird es eingesetzt?</h3>
  <p>F&uuml;gen Sie einfach nur den folgenden Befehl in den head-Bereich Ihres Templates oder Ihrer Seite ein: <code>{cms_stylesheet}</code></p>
  <h3>Welche Parameter verwendet es?</h3>
  <ul>
  <li><em>(optional)</em>name - anstatt alle Stylesheets der aktuellen Seite zu laden, wird nur das Stylesheet geladen, welches mit diesem Parameter &uuml;bergeben wird, unabh&auml;ngig davon, ob es dem aktuellen Template zugeordnet ist oder nicht.</li>
  <li><em>(optional)</em>templateid - wird die Template-ID als Parameter &uuml;bergeben, werden anstatt den Stylesheets des aktuellen Templates die Stylesheets ausgegeben, die dem Template mit dieser ID zugeordnet sind.</li>
  <li><em>(optional)</em>media - in Verbindung mit dem Parameter name kann dieser Parameter verwendet werden, um den Medientyp f&uuml;r dieses Stylesheet zu &uuml;berschreiben. In Verbindung mit dem Parameter templateid werden nur die Stylesheet-Tags ausgegeben, die dem vorgegebenen Medientyp entsprechen.</li>
  </ul>
  <h3>Verarbeitung mit Smarty</h3>
  <p>Wenn die statischen CSS-Dateien aus der Datenbank gelesen werden, erfolgt zuvor eine Verarbeitung mit Smarty. Damit die Stylesheets in bekannter Weise verwendet werden k&ouml;nnen, wurden die Smarty-Kennzeichner abweichend vom CMSms-Standard { und } auf [[ and ]] ge&auml;ndert. Damit kann zum Beispiel mit <code>[[assign var=&#039;rot&#039; value=&#039;#900&#039;]]</code> zu Beginn des Stylesheets eine Smarty-Variable erstellt werden, die dann sp&auml;ter im Stylesheet verwendet werden kann:</p>
<pre>
<code>
h3 .error { color: [[$rot]]; }<br/>
</code>
</pre>
<p>Da die statischen CSS-Dateien im Verzeichnis /tmp/cache der CMSms-Installation zwischengespeichert werden, funktionieren relative Pfade in den CSS nicht mehr. So sollten zum Beispiel Bilder oder andere CSS-Tags, die eine URL verwenden, den Tag [[root_url]] verwenden, um daraus absolute URLs zu machen:</p>
<pre>
<code>
h3 .error { background: url([[root_url]]/uploads/images/fehler_hintergrund.gif); }<br/>
</code>
</pre>
<p><strong>Hinweis:</strong> Aufgrund der Zwischenspeicherung der Stylesheets sollten die Smarty-Variablen direkt zu Beginn eines JEDEN Stylesheets eingef&uuml;gt werden, die diese Variable verwenden.</p>';
$lang['admin']['pseudocron_granularity'] = 'Ausf&uuml;hrung der Pseudo-Cronjobs';
$lang['admin']['info_pseudocron_granularity'] = 'Mit diesen Einstellungen wird festgelegt, wie oft die festgelegten Aufgaben automatisch ausgef&uuml;hrt werden';
$lang['admin']['cron_request'] = 'Mit jeder Anfrage';
$lang['admin']['cron_15m'] = 'Aller 15 Minuten';
$lang['admin']['cron_30m'] = 'Aller 30 Minuten';
$lang['admin']['cron_60m'] = 'Aller 1 Stunde';
$lang['admin']['cron_120m'] = 'Aller 2 Stunden';
$lang['admin']['cron_3h'] = 'Aller 3 Stunden';
$lang['admin']['cron_6h'] = 'Aller 6 Stunden';
$lang['admin']['cron_12h'] = 'Aller 12 Stunden';
$lang['admin']['cron_24h'] = 'Aller 24 Stunden';
$lang['admin']['clearcache_taskdescription'] = 'Ausf&uuml;hrung t&auml;glich, mit dieser Aufgabe werden die zwischengespeicherten Dateien gel&ouml;scht, die &auml;lter sind, als in den Globalen Einstellungen festgelegt wurde';
$lang['admin']['clearcache_taskname'] = 'Zwischengespeicherte Dateien bereinigen';
$lang['admin']['info_autoclearcache'] = 'Wenn Sie die automatische Leerung des Zwischenspeichers deaktivieren m&ouml;chten, setzen Sie diesen Wert auf 0';
$lang['admin']['autoclearcache'] = 'Den Zwischenspeicher automatisch alle N Tage leeren';
$lang['admin']['listtemplates_pagelimit'] = 'Anzahl der Zeilen pro Seite, wenn Templates angezeigt werden';
$lang['admin']['liststylesheets_pagelimit'] = 'Anzahl der Zeilen pro Seite, wenn Stylesheets angezeigt werden';
$lang['admin']['listgcbs_pagelimit'] = 'Anzahl der Zeilen pro Seite, wenn Globale Inhaltsbl&ouml;cke angezeigt werden';
$lang['admin']['insecure'] = 'Unsicher (HTTP)';
$lang['admin']['secure'] = 'Sicher (HTTPS)';
$lang['admin']['secure_page'] = 'HTTPS f&uuml;r diese Seite verwenden';
$lang['admin']['thumbnail_width'] = 'Breite Vorschaubild';
$lang['admin']['thumbnail_height'] = 'H&ouml;he Vorschaubild';
$lang['admin']['E_STRICT'] = 'Ist E_STRICT in den error_reporting Einstellungen deaktiviert';
$lang['admin']['test_estrict_failed'] = 'E_STRICT ist in den error_reporting Einstellungen aktiviert';
$lang['admin']['info_estrict_failed'] = 'Einige Programmbibliotheken, die CMSms verwendet, funktionieren nicht gut mit der Einstellung E_STRICT.  Bitte deaktivieren Sie dies, bevor Sie weitermachen.';
$lang['admin']['E_DEPRECATED'] = 'Ist E_DEPRECATED in den error_reporting Einstellungen deaktiviert';
$lang['admin']['test_edeprecated_failed'] = 'E_DEPRECATED ist aktiviert';
$lang['admin']['info_edeprecated_failed'] = 'Wenn E_DEPRECATED in Ihren error_reporting Einstellungen aktiviert ist, werden Ihren Besuchern eine ganze Reihe Warnhinweise angezeigt, die Auswirkungen auf die Anzeige und Funktionalit&auml;t haben k&ouml;nnen.';
$lang['admin']['session_use_cookies'] = 'Es ist den Sessions erlaubt, Cookies zu verwenden.';
$lang['admin']['errorgettingcontent'] = 'Konnte keine Informationen &uuml;ber das vorgegebene Inhaltsobjekt abrufen';
$lang['admin']['errordeletingcontent'] = 'Fehler beim L&ouml;schen von Inhalten (entweder hat diese Seite noch untergeordnete Seiten oder sie ist die voreingestellte Hauptseite)';
$lang['admin']['invalidemail'] = 'Die eingegebene Email-Adresse ist ung&uuml;ltig';
$lang['admin']['info_deletepages'] = 'Hinweis: Aufgrund der Beschr&auml;nkung von Berechtigungen werden einige der Seiten, die Sie zum L&ouml;schen ausgew&auml;hlt haben, nicht in der folgenden Liste aufgef&uuml;hrt.';
$lang['admin']['info_pagealias'] = 'Geben Sie f&uuml;r diese Seite einen eindeutigen Alias an.';
$lang['admin']['info_autoalias'] = 'Wenn diese Feld leer ist, wird automatisch ein Alias erstellt.';
$lang['admin']['invalidparent'] = 'Sie m&uuml;ssen eine &uuml;bergeordnete Seite ausw&auml;hlen (wenn Sie diese Option nicht sehen, fragen Sie Ihren Administrator).';
$lang['admin']['forgotpwprompt'] = 'Geben Sie Ihren Admin-Benutzernamen ein. Ihnen wird dann eine Email an die bekannte Email-Adresse mit den neuen Daten zur Anmeldung gesandt.';
$lang['admin']['info_basic_attributes'] = 'Mit diesem Feld kann festgelegt werden, welche Content-Eigenschaften ein Benutzer ohne die Berechtigung &quot;Modify Page Structure&quot; &auml;ndern darf.';
$lang['admin']['basic_attributes'] = 'Basis-Eigenschaften';
$lang['admin']['no_permission'] = 'Sie haben nicht die Berechtigung, diese Funktion auszuf&uuml;hren.';
$lang['admin']['bulk_success'] = 'Die Massen-Verarbeitung wurde erfolgreich ausgef&uuml;hrt.';
$lang['admin']['no_bulk_performed'] = 'Es wurde keine Massen-Verarbeitung ausgef&uuml;hrt.';
$lang['admin']['info_preview_notice'] = 'WARNUNG: Diese Vorschau verh&auml;lt sich &auml;hnlich wie ein Browser-Fenster, mit dem Sie von der urspr&uuml;nglich ausgew&auml;hlten Seite aus navigieren k&ouml;nnen. Jedoch k&ouml;nnen unerwartete Verhalten auftreten. Wenn Sie auf der urspr&uuml;nglich angew&auml;hlten Seite navigieren und dann dorthin zur&uuml;ckkehren, sehen Sie die unver&auml;nderten Inhalte, obwohl Sie im der Hauptregisterkarte &Auml;nderungen vorgenommen und diese neu geladen haben. Wenn Sie Inhalte hinzuf&uuml;gen, w&auml;hrenddessen Sie auf der Seite navigieren, ist es Ihnen nicht m&ouml;glich zur&uuml;ckzukehren - Sie m&uuml;ssen dann die Vorschau-Seite aktualisieren.';
$lang['admin']['sitedownexcludes'] = 'Diesen IP-Adressen nicht die Wartungsmeldung anzeigen';
$lang['admin']['info_sitedownexcludes'] = '<p>&Uuml;ber diesen Parameter kann &uuml;ber eine durch Kommata getrennte Liste von IP-Adressen oder Netzwerken, die von der Wartungsmeldung nicht betroffen sind. Damit k&ouml;nnen die Administratoren an der Webseite arbeiten, w&auml;hrenddessen unbekannten Webseiten-Besuchern die Wartungsmeldung angezeigt wird.</p>
<p>Die Adressen k&ouml;nnen in den folgenden Formaten festgelegt werden:</p>
<ol>
<li> xxx.xxx.xxx.xxx -- (exakte IP-Adresse)</li>
<li> xxx.xxx.xxx.[yyy-zzz] -- (IP-Adressbereich)</li>
<li> xxx.xxx.xxx.xxx/nn -- (nnn = Anzahl der Bits, Cisco-Stil  z.Bsp.:  192.168.0.100/24 = entspricht 192.168.0 Klasse-C-Subnetz)</li>
</ol>';
$lang['admin']['setup'] = 'Weitere Einstellungen';
$lang['admin']['handle_404'] = 'Benutzerdefinierte Fehlerbehandlung f&uuml;r 404-Seiten';
$lang['admin']['sitedown_settings'] = 'Einstellung f&uuml;r die Seitenwartung';
$lang['admin']['general_settings'] = 'Allgemeine Einstellungen';
$lang['admin']['help_function_page_attr'] = '<h3>Was macht dieser Tag?</h3>
<p>Dieser Tag kann verwendet werden, um die Werte der Attribute einer bestimmten Seite zur&uuml;ckzugeben.</p>
<h3>Wie wird er eingesetzt?</h3>
<p>F&uuml;gen Sie den folgenden Tag in Ihrem Seiten-Template ein: <code>{page_attr key=&quot;extra1&quot;}</code>.</p>
<h3>Welche Parameter sind m&ouml;glich?</h3>
<ul>
  <li><tt><em>(erforderlich)</em> key</tt> -- der Schl&uuml;ssel, dessen Attribut ausgegeben werden soll.</li>
</ul>';
$lang['admin']['forge'] = 'CMSms-Forge';
$lang['admin']['disable_wysiwyg'] = 'WYSIWYG f&uuml;r diese Seite nicht erlauben (ohne Ber&uuml;cksichtigung der Template- oder Benutzereinstellungen)';
$lang['admin']['help_function_page_image'] = '<h3>Was macht dieser Tag?</h3>
<p>Mit diesem Tag kann das ausgew&auml;hlte Bild oder Vorschaubild der jeweiligen Seite angezeigt werden.</p>
<h3>Wie wird er eingesetzt?</h3>
<p>F&uuml;gen Sie den folgenden Tag in Ihrem Seiten-Template ein: <code>{page_image}</code>.</p>
<h3>Welche Parameter sind m&ouml;glich?</h3>
<ul>
  <li><tt><em>(optional)</em> thumbnail</tt> -- Mit diesem Parameter wird anstatt des Bildes das Vorschaubild angezeigt.</li>
</ul>';
$lang['admin']['pagelink_circular'] = 'Ein Seitenlink kann nicht als Ziel auf einen anderen Seitenlink verweisen';
$lang['admin']['destinationnotfound'] = 'Die ausgew&auml;hlte Seite konnte nicht gefunden werden oder ist ung&uuml;ltig';
$lang['admin']['help_function_dump'] = '<h3>Was macht dieser Tag?</h3>
  <p>Dieser Tag kann verwendet werden, um die Inhalte jeder beliebigen Smarty-Variable in einem besser lesbaren Format aufzulisten. Dies ist bei der Fehlersuche und beim Bearbeiten der Templates n&uuml;tzlich, wenn Sie das Format und die verf&uuml;gbaren Daten-Typen wissen wollen.</p>
<h3>Wie wird er eingesetzt?</h3>
<p>F&uuml;gen Sie den folgenden Tag in Ihrem Seiten-Template ein: <code>{dump item=&#039;die_aufzulistende_Smarty_Variable&#039;}</code>.</p>
<h3>Welche Parameter sind m&ouml;glich?</h3>
<ul>
<li><tt><em>(erforderlich)</em> item (erforderlich)</tt> -- die Smarty-Variable, deren Inhalte aufgelistet werden sollen.</li>
<li><tt><em>(optional)</em> maxlevel</tt> -- die maximale Anzahl der rekursiv auszugebenden Ebenen (nur wirksam, wenn der Parameter <tt>recurse</tt> gesetzt wurde. Der voreingestellte Wert f&uuml;r diesen Parameter ist 3</li>
<li><tt><em>(optional)</em> nomethods</tt> -- die Ausgabe der Methoden des Objekts wird &uuml;bersprungen.</li>
<li><tt><em>(optional)</em> novars</tt> -- die Ausgabe der Mitglieder eines Objekts wird &uuml;bersprungen.</li>
<li><tt><em>(optional)</em> recurse</tt> -- gibt die maximale Anzahl der Ebenen eines Objektes f&uuml;r jeden Eintrag aus, bis die maximale Anzahl der Ebenen erreicht ist.</li>
</ul>';
$lang['admin']['sqlerror'] = 'SQL-Fehler in %s';
$lang['admin']['image'] = 'Bild';
$lang['admin']['thumbnail'] = 'Vorschaubild';
$lang['admin']['searchable'] = 'Dieser Seite darf in den Suchergebnissen erscheinen';
$lang['admin']['help_function_content_image'] = '<h3>Was macht dieser Tag?</h3>
<p>Mit diesem Plugin kann der Template-Designer den Benutzern ein Auswahlfeld f&uuml;r Bilddateien anbieten, wenn der Inhalt einer Seite bearbeitet wird. Es verh&auml;lt sich genau so wie das content-Plugin (f&uuml;r zus&auml;tzliche Inhaltsbl&ouml;cke).</p>
<h3>Wie wird er eingesetzt?</h3>
<p>F&uuml;gen Sie den folgenden Tag in Ihrem Seiten-Template ein: <code>{content_image block=&#039;Bild_1&#039;}</code>.</p>
<h3>Welche Parameter sind m&ouml;glich?</h3>
<ul>
  <li><tt><em>(erforderlich)</em> block</tt> -- das ist der Name f&uuml;r den zus&auml;tzlichen Inhaltsblock.
  <p>Beispiel:</p>
  <pre>{content_image block=&#039;Bild_1&#039;}</pre>
  </li>
  <li><tt><em>(optional)</em> label</tt> -- Eine Beschriftung oder Eingabeaufforderung f&uuml;r diesen Inhaltsblock auf der Bearbeitungsseite. Ohne Vorgabe wird der Blockname verwendet.</li>
   <li><tt><em>(optional)</em> dir</tt> -- der Name eines Verzeichnisses, aus dem die Bilder ausgew&auml;hlt werden sollen (relativ zum Verzeichnis /uploads). Ohne Vorgabe wird das /uploads-Verzeichnis verwendet. Sind dort keine Bilder vorhanden, wird bei der Seitenbearbeitung eine Fehlermeldung ausgegeben.
  <p>Beispiel:</p>
  <pre>{content_image block=&#039;Bild_1&#039; dir=&#039;images&#039;}</pre>
  </li>
  <li><tt><em>(optional)</em> class</tt> -- der Name der CSS-Klasse, der f&uuml;r die Anzeige des img-Tags auf der Webseite verwendet wird.</li>
  <li><tt><em>(optional)</em> id</tt> -- die ID, die f&uuml;r die Anzeige des img-Tags auf der Webseite verwendet wird.</li> 
  <li><tt><em>(optional)</em> name</tt> -- der Name, der f&uuml;r die Anzeige des img-Tags auf der Webseite verwendet wird.</li> 
  <li><tt><em>(optional)</em> width</tt> -- die gew&uuml;nschte Breite des Bildes.</li>
  <li><tt><em>(optional)</em> height</tt> -- die gew&uuml;nschte H&ouml;he des Bildes.</li>
  <li><tt><em>(optional)</em> alt</tt> -- ein alternativer Text, wenn das Bild nicht gefunden werden konnte.</li>
  <li><tt><em>(optional)</em> urlonly</tt> -- es wird nur die URL des Bildes ausgegeben.</li>
</ul>';
$lang['admin']['error_udt_name_chars'] = 'Ein g&uuml;ltiger Name f&uuml;r einen benutzerdefinierten Tag beginnt mit einem Buchstaben oder einem Unterstrich, gefolgt von einer beliebigen Anzahl Buchstaben, Zahlen oder Unterstrichen.';
$lang['admin']['errorupdatetemplateallpages'] = 'Dieses Template ist nicht aktiviert.';
$lang['admin']['hidefrommenu'] = 'Nicht im Men&uuml; anzeigen';
$lang['admin']['settemplate'] = 'Template festlegen';
$lang['admin']['text_settemplate'] = 'Die ausgew&auml;hlten Seiten mit einem anderen Template verkn&uuml;pfen';
$lang['admin']['cachable'] = 'Zwischenspeicherbar';
$lang['admin']['noncachable'] = 'Nicht zwischenspeicherbar';
$lang['admin']['copy_from'] = 'Kopieren von';
$lang['admin']['copy_to'] = 'Kopieren nach';
$lang['admin']['copycontent'] = 'Inhalts-Eintr&auml;ge kopieren';
$lang['admin']['md5_function'] = 'MD5-Funktion';
$lang['admin']['tempnam_function'] = 'tempnam-Funktion';
$lang['admin']['register_globals'] = 'PHP - register_globals';
$lang['admin']['output_buffering'] = 'PHP - output_buffering';
$lang['admin']['disable_functions'] = 'Deaktivierte PHP-Funktionen';
$lang['admin']['xml_function'] = 'Basis-XML (expat) Unterst&uuml;tzung';
$lang['admin']['magic_quotes_gpc'] = 'Magic quotes f&uuml;r Get/Post/Cookie-Aktionen';
$lang['admin']['magic_quotes_gpc_on'] = 'Einfache und doppelte Anf&uuml;hrungszeichen sowie Backslashes werden automatisch escaped. Beim Speichern von Templates k&ouml;nnen daher Probleme auftreten.';
$lang['admin']['magic_quotes_runtime'] = 'Magic Quotes zur Laufzeit';
$lang['admin']['magic_quotes_runtime_on'] = 'Die meisten Funktionen, die Daten ausgeben, kennzeichnen diese mit einem Backslash. Dies kann Probleme verursachen.';
$lang['admin']['file_get_contents'] = 'Test auf file_get_contents';
$lang['admin']['check_ini_set'] = 'Test auf ini_set';
$lang['admin']['check_ini_set_off'] = 'Ohne dieses Leistungsmerkmal k&ouml;nnen bei einigen Funktionalit&auml;ten Probleme auftreten. Die Ursache f&uuml;r das Fehlschlagen dieses Tests kann ein aktivierter safe_mode sein.';
$lang['admin']['file_uploads'] = 'Hochgeladene Dateien';
$lang['admin']['test_remote_url'] = 'Test der Remote-URL';
$lang['admin']['test_remote_url_failed'] = 'Sie k&ouml;nnen wahrscheinlich keine Datei auf einem Remote-Webserver &ouml;ffnen.';
$lang['admin']['test_allow_url_fopen_failed'] = 'Wenn auf Ihrem Host die Funktion &quot;allow url fopen&quot; deaktiviert ist, k&ouml;nnen Sie nicht &uuml;ber das FTP- oder HTTP-Protokoll auf URL-Objekte zugreifen.';
$lang['admin']['connection_error'] = 'Ausgehende http-Verbindungen scheinen bei  Ihrem Host nicht zu funkionieren! Wird auf Ihrem Host eine Firewall oder eine Zugriffskontrollliste (ACL) f&uuml;r externe Verbindungen eingesetzt? Dies hat zur Folge, dass Sie den ModulManager und m&ouml;glicherweise noch andere Funktionalit&auml;ten nicht verwenden k&ouml;nnen.';
$lang['admin']['remote_connection_timeout'] = 'Zeit&uuml;berschreitung beim Herstellen der Verbindung!';
$lang['admin']['search_string_find'] = 'Verbindung ok!';
$lang['admin']['connection_failed'] = 'Verbindung fehlgeschlagen!';
$lang['admin']['remote_response_ok'] = 'Remote-Antwort: OK!';
$lang['admin']['remote_response_404'] = 'Remote-Antwort: nicht gefunden!';
$lang['admin']['remote_response_error'] = 'Remote-Antwort: Fehler!';
$lang['admin']['notifications_to_handle'] = 'Sie haben <strong>%d</strong> nicht erledigte System-Nachrichten!';
$lang['admin']['notification_to_handle'] = 'Sie haben <strong>%d</strong> nicht erledigte System-Nachricht!';
$lang['admin']['notifications'] = 'System-Nachrichten';
$lang['admin']['dashboard'] = 'System-Nachrichten anzeigen';
$lang['admin']['ignorenotificationsfrommodules'] = 'System-Nachrichten von diesen Modulen ignorieren';
$lang['admin']['admin_enablenotifications'] = 'Die System-Nachrichten sollen den Benutzern angezeigt werden<br /><em>(die System-Informationen sind dann auf jeder Seite der Administration zu sehen)</em>';
$lang['admin']['enablenotifications'] = 'Die Anzeige von System-Nachrichten in der Administration aktivieren ';
$lang['admin']['test_check_open_basedir_failed'] = 'Auf Ihrem Server ist eine &quot;open basedir&quot;-Beschr&auml;nkung aktiviert. Aufgrund dessen k&ouml;nnen mit bestimmten Funktionalit&auml;ten einiger Erweiterungen Probleme auftreten.';
$lang['admin']['config_writable'] = 'Die Datei config.php ist beschreibbar. Sie sollten die Berechtigung der Datei unbedingt auf einen sicheren Wert &auml;ndern (nur lesen - chmod 444).';
$lang['admin']['caution'] = 'Achtung ';
$lang['admin']['create_dir_and_file'] = 'Pr&uuml;fung, ob der httpd-Proze&szlig; eine Datei in einem selbst erstellten Verzeichnis erzeugen kann.';
$lang['admin']['os_session_save_path'] = 'Keine Pr&uuml;fung aufgrund des Betriebssystem-Pfads';
$lang['admin']['unlimited'] = 'Keine Beschr&auml;nkung';
$lang['admin']['open_basedir'] = 'PHP &quot;Open Basedir&quot;';
$lang['admin']['open_basedir_active'] = 'Keine Pr&uuml;fung, da eine &quot;open basedir&quot;-Beschr&auml;nkung aktiviert ist';
$lang['admin']['invalid'] = 'Ung&uuml;ltig';
$lang['admin']['checksum_passed'] = 'S&auml;mtliche Pr&uuml;fsummen stimmen mit denen in der hochgeladenen Datei &uuml;berein';
$lang['admin']['error_retrieving_file_list'] = 'Fehler beim Einlesen der Dateiliste';
$lang['admin']['files_checksum_failed'] = 'Die Pr&uuml;fung der Dateien anhand der Pr&uuml;fsummen konnte nicht ausgef&uuml;hrt werden';
$lang['admin']['failure'] = 'Fehler';
$lang['admin']['help_function_process_pagedata'] = '<h3>Was macht dieser Tag?</h3>
<p>Dieses Plugin verarbeitet den Inhalt des Feldes &quot;Seitenspezifische Smarty-Daten&quot; via Smarty. Dadurch k&ouml;nnen jeder Seite individuelle Smarty-Daten zugewiesen werden, ohne das Template f&uuml;r jede Seite &auml;ndern zu m&uuml;ssen.</p>
<h3>Wie wird er eingesetzt?</h3>
<ol>
  <li>F&uuml;gen Sie dem Feld &quot;Seitenspezifische Smarty-Daten&quot; (Registerkarte &quot;Optionen&quot;) die f&uuml;r diese Seite gew&uuml;nschten Smarty-Variablen oder Smarty-Logik hinzu.</li>
  <li>F&uuml;gen Sie <code>{process_pagedata}</code> als ersten Eintrag in Ihr Seiten-Template ein.</li>
</ol>
<br/>
<h3>Welche Parameter sind m&ouml;glich?</h3>
<p>Derzeit keine</p>';
$lang['admin']['page_metadata'] = 'Seitenspezifische Meta-Daten';
$lang['admin']['pagedata_codeblock'] = 'Seitenspezifische Smarty-Daten';
$lang['admin']['error_uploadproblem'] = 'Beim Hochladen der Datei ist ein Fehler aufgetreten';
$lang['admin']['error_nofileuploaded'] = 'Es wurde keine Datei hochgeladen';
$lang['admin']['files_failed'] = 'Der Test der md5-Pr&uuml;fsumme ist fehlgeschlagen';
$lang['admin']['files_not_found'] = 'Dateien nicht gefunden';
$lang['admin']['info_generate_cksum_file'] = 'Mit dieser Funktion k&ouml;nnen Sie eine Pr&uuml;fsummen-Datei erzeugen und diese f&uuml;r eine sp&auml;tere &Uuml;berpr&uuml;fung auf Ihrem Computer speichern. Dies sollte vor der Erstver&ouml;ffentlichung einer Webseite und/oder nach jeder System-Aktualisierung oder nach gr&ouml;&szlig;eren &Auml;nderungen erfolgen.';
$lang['admin']['info_validation'] = 'Diese Funktion vergleicht die Pr&uuml;fsummen aus der hochgeladenen Datei mit denen der aktuellen Installation. Sie kann bei Problemen im Zusammenhang mit dem Hochladen von Dateien behilflich sein oder auch bei der Feststellung von ge&auml;nderten Dateien, falls Ihr System gehackt worden sein sollte. Die Pr&uuml;fsummendatei wird f&uuml;r jede Ver&ouml;ffentlichung ab CMSms-Version 1.4 generiert.';
$lang['admin']['download_cksum_file'] = 'Pr&uuml;fsummen-Datei herunterladen';
$lang['admin']['perform_validation'] = '&Uuml;berpr&uuml;fung durchf&uuml;hren';
$lang['admin']['upload_cksum_file'] = 'Pr&uuml;fsummen-Datei hochladen';
$lang['admin']['checksumdescription'] = '&Uuml;berpr&uuml;ft die Integrit&auml;t der CMS-Dateien durch einen Vergleich mit bekannten Pr&uuml;fsummen';
$lang['admin']['system_verification'] = 'Systempr&uuml;fung';
$lang['admin']['extra1'] = 'Zus&auml;tzliches Seiten-Attribut 1';
$lang['admin']['extra2'] = 'Zus&auml;tzliches Seiten-Attribut 2';
$lang['admin']['extra3'] = 'Zus&auml;tzliches Seiten-Attribut 3';
$lang['admin']['start_upgrade_process'] = 'Aktualisierung starten';
$lang['admin']['warning_upgrade'] = '<em><strong>ACHTUNG:</strong></em> Ihre CMSms-Installation ben&ouml;tigt eine Aktualisierung.';
$lang['admin']['warning_upgrade_info1'] = 'Sie verwenden aktuell die Schema-Version %s. Diese muss auf Version %s aktualisiert werden.';
$lang['admin']['warning_upgrade_info2'] = 'Bitte klicken Sie den folgenden Link: %s.';
$lang['admin']['warning_mail_settings'] = 'Ihre Emaileinstellungen wurden noch nicht konfiguriert. Dies beeintr&auml;chtigt die M&ouml;glichkeit Ihrer Webseite, Emails zu verwenden. Gehen Sie daf&uuml;r ins Men&uuml; <a href="moduleinterface.php?module=CMSMailer">&quot;Erweiterungen > CMSMailer&quot;</a> und konfigurieren Sie die Einstellungen entsprechend den Vorgaben Ihres Hosters.';
$lang['admin']['view_page'] = 'Diese Seite in einem neuen Fenster anzeigen';
$lang['admin']['off'] = 'Aus';
$lang['admin']['on'] = 'An';
$lang['admin']['invalid_test'] = 'Ung&uuml;ltiger Wert eines Test-Parameters!';
$lang['admin']['copy_paste_forum'] = 'Klicken Sie hier, um diese Informationen f&uuml;r eine Anfrage im Forum zu kopieren';
$lang['admin']['permission_information'] = 'Verzeichnisberechtigungen';
$lang['admin']['server_os'] = 'Server-Betriebssystem';
$lang['admin']['server_api'] = 'Server-API';
$lang['admin']['server_software'] = 'Server-Software';
$lang['admin']['server_information'] = 'Server-Informationen';
$lang['admin']['session_save_path'] = 'Speicherpfad f&uuml;r Sessions';
$lang['admin']['max_execution_time'] = 'Maximale Ausf&uuml;hrungszeit';
$lang['admin']['gd_version'] = 'GD-Version';
$lang['admin']['upload_max_filesize'] = 'Maximale Gr&ouml;&szlig;e f&uuml;r hochzuladende Dateien';
$lang['admin']['post_max_size'] = 'Maximale Gr&ouml;&szlig;e f&uuml;r POST-Dateien';
$lang['admin']['memory_limit'] = 'PHP-Speicherlimit';
$lang['admin']['server_db_type'] = 'Server-Datenbank';
$lang['admin']['server_db_version'] = 'Server-Datenbankversion';
$lang['admin']['phpversion'] = 'Derzeitige PHP-Version';
$lang['admin']['safe_mode'] = 'PHP Safe-Mode';
$lang['admin']['php_information'] = 'PHP-Informationen';
$lang['admin']['cms_install_information'] = 'Informationen zur CMSms-Installation';
$lang['admin']['cms_version'] = 'CMS-Version';
$lang['admin']['installed_modules'] = 'Installierte Module';
$lang['admin']['config_information'] = 'Konfigurationsinformationen aus der config.php';
$lang['admin']['systeminfo_copy_paste'] = 'Bitte kopieren Sie den ausgew&auml;hlten Text und f&uuml;gen ihn bei Problemen in Ihre Anfrage im Forum hinzu';
$lang['admin']['help_systeminformation'] = 'Die hier angezeigten Informationen werden von verschiedenen Stellen Ihres Systems gesammelt und zusammengefasst angezeigt. Diese Informationen k&ouml;nnen hilfreich sein, wenn Sie versuchen, ein bestimmtes Problem zu diagnostizieren. Auch bei Fragen im CMSms-Forum k&ouml;nnen diese Informationen weiterhelfen, eine L&ouml;sung zu finden.';
$lang['admin']['systeminfo'] = 'System-Informationen';
$lang['admin']['systeminfodescription'] = 'Zeigt bestimmte Informationen Ihres Systems an, die bei der Diagnostizierung von Problemen hilfreich sein k&ouml;nnen';
$lang['admin']['welcome_user'] = 'Willkommen';
$lang['admin']['itsbeensincelogin'] = 'Sie waren das letzte Mal angemeldet vor %s';
$lang['admin']['days'] = 'Tage';
$lang['admin']['day'] = 'Tag';
$lang['admin']['hours'] = 'Stunden';
$lang['admin']['hour'] = 'Stunde';
$lang['admin']['minutes'] = 'Minuten';
$lang['admin']['minute'] = 'Minute';
$lang['admin']['help_css_max_age'] = 'F&uuml;r statische Seiten sollte dieser Parameter relativ hoch eingestellt werden. Nur f&uuml;r in der Entwicklung befindliche Seiten sollten hier den Wert 0 verwenden.';
$lang['admin']['css_max_age'] = 'Zeitdauer (in Sekunden), in der die Stylesheets im Zwischenspeicher abgelegt werden sollen';
$lang['admin']['error'] = 'Fehler';
$lang['admin']['clear_version_check_cache'] = 'Beim Absenden s&auml;mtliche Informationen &uuml;ber fr&uuml;here Versionspr&uuml;fungen l&ouml;schen';
$lang['admin']['new_version_available'] = 'ACHTUNG: Eine neue Version von CMS made simple ist verf&uuml;gbar. Sie sollten schnellstm&ouml;glich Ihren Administrator/Webmaster f&uuml;r eine Aktualisierung kontaktieren.';
$lang['admin']['info_urlcheckversion'] = 'Wird in diesem Feld &quot;none&quot; eingegeben, erfolgt keine &Uuml;berpr&uuml;fung.<br/>Ohne Eintrag wird eine intern vorgegebene URL verwendet.';
$lang['admin']['urlcheckversion'] = '&Uuml;ber diese URL auf neue CMSms-Versionen pr&uuml;fen';
$lang['admin']['master_admintheme'] = 'Standard-Admininstrations-Theme (f&uuml;r die Login-Seite und neue Benutzerkonten)';
$lang['admin']['contenttype_separator'] = 'Trenner';
$lang['admin']['contenttype_sectionheader'] = 'Abschnitts&uuml;berschrift';
$lang['admin']['contenttype_link'] = 'Externer Link';
$lang['admin']['contenttype_content'] = 'Inhalt';
$lang['admin']['contenttype_pagelink'] = 'Interner Seitenlink';
$lang['admin']['nogcbwysiwyg'] = 'WYSIWYG-Editor f&uuml;r Globale Inhaltsbl&ouml;cke deaktivieren';
$lang['admin']['destination_page'] = 'Zielseite';
$lang['admin']['additional_params'] = 'Zus&auml;tzliche Parameter';
$lang['admin']['help_function_current_date'] = '	<h3>Was macht dieser Tag?</h3>
	<p>Gibt aktuelle Datum und Zeit aus. Wird kein Format vorgegeben, wird standardm&auml;&szlig;ig das Format &#039;Jan 01, 2004&#039; verwendet.</p>
	<h3>Wie wird er eingesetzt?</h3>
	<p>F&uuml;gen Sie den Tag folgenderma&szlig;en in Ihr Template bzw. Ihre Seite ein: <code>{current_date format=&quot;%A, %d.%B %Y %T %Z&quot;}</code></p>
	<h3>Welche Parameter sind m&ouml;glich?</h3>
	<ul>
		<li><em>(optional)</em> <tt>format</tt> - Datums-/Zeitformat, verwendet die Parameter der PHP-Funktion strftime. Weitere Informationen finden Sie <a href="http://php.net/strftime" target="_blank">hier</a>.</li>
		<li><em>(optional)</em> <tt>ucword</tt> - Wird dieser Parameter auf true gesetzt, wird das erste Zeichen eines jeden Wortes als Kleinbuchstabe ausgegeben.</li>
	</ul>';
$lang['admin']['help_function_valid_xhtml'] = '<h3>Was macht dieser Tag?</h3>
<p>Gibt einen Link zum W3C-HTML-Validator aus.</p>
<h3>Wie wird er eingesetzt?</h3>
<p>F&uuml;gen Sie den Tag folgenderma&szlig;en in Ihr Template bzw. Ihre Seite ein:</p> <code>{valid_xhtml}</code>
<h3>Welche Parameter sind m&ouml;glich?</h3>
    <ul>
	<li><em>(optional)</em> <tt>url</tt>         (string)     - die URL f&uuml;r die Validierung. Standard ist http://validator.w3.org/check/referer.</li>
	<li><em>(optional)</em> <tt>class</tt>       (string)     - damit kann dem Link (a) eine CSS-Klasse zugeordnet werden.</li>
	<li><em>(optional)</em> <tt>target</tt>      (string)     - damit kann dem Link (a) ein Ziel (target) zugeordnet werden.</li>
	<li><em>(optional)</em> <tt>image</tt>       (true/false) - mit dem Wert false wird anstatt des Bilds/Icons ein Textlink angezeigt.</li>
	<li><em>(optional)</em> <tt>text</tt>        (string)     - damit kann ein Text f&uuml;r den Link bzw. ein alternativer Text f&uuml;r das Bild/Icon vorgegeben werden. Standard ist &#039;valid XHTML 1.0 Transitional&#039;.<br />Bei Verwendung eines Bildes/Icons wird der vorgegebene Text als alternativer Text f&uuml;r das Bild verwendet. Dieser Wert kann jedoch vom Wert &#039;alt&#039; des Bildes &uuml;berschrieben werden.</li>
	<li><em>(optional)</em> <tt>image_class</tt> (string)     - damit kann dem Bild (img) eine CSS-Klasse zugeordnet werden Der Wert &#039;image&#039; darf jedoch nicht auf false gesetzt sein.</li>
	<li><em>(optional)</em> <tt>src</tt>         (string)     - das angezeigte Bild/Icon. Der Wert &#039;image&#039; darf jedoch nicht auf false gesetzt sein. Standard ist hier http://www.w3.org/Icons/valid-xhtml10</li>
	<li><em>(optional)</em> <tt>width</tt>       (string)     - die Breite des Bildes/Icons. Der Wert &#039;image&#039; darf jedoch nicht auf false gesetzt sein. Standard ist 88 (Breite des Bildes von http://www.w3.org/Icons/valid-xhtml10)</li>
	<li><em>(optional)</em> <tt>height</tt>      (string)     - die H&ouml;he des Bildes/Icons. Der Wert &#039;image&#039; darf jedoch nicht auf false gesetzt sein. Standard ist hier 31 (H&amp;amp;ouml;he des Bildes von http://www.w3.org/Icons/valid-xhtml10)</li>
	<li><em>(optional)</em> <tt>alt</tt>         (string)     - ein alternativer Text f&uuml;r das Bild (Attribut &#039;alt&#039;). Der Wert &#039;image&#039; darf jedoch nicht auf false gesetzt sein. Ohne diesen Parameter wird der Wert des Parameters &#039;link&#039; verwendet.</li>
    </ul>';
$lang['admin']['help_function_valid_css'] = '<h3>Was macht dieser Tag?</h3>
<p>Gibt einen Link zum W3C-CSS-Validator aus.</p>
<h3>Wie wird er eingesetzt?</h3>
<p>F&uuml;gen Sie den Tag folgenderma&szlig;en in Ihr Template bzw. Ihre Seite ein:</p> <code>{valid_css}</code>
<h3>Welche Parameter sind m&ouml;glich?</h3>
    <ul>
	<li><em>(optional)</em> <tt>url</tt>         (string)     - die URL f&uuml;r die Validierung. Standard ist http://jigsaw.w3.org/css-validator/check/referer.</li>
	<li><em>(optional)</em> <tt>class</tt>       (string)     - damit kann dem Link (a) eine CSS-Klasse zugeordnet werden.</li>
	<li><em>(optional)</em> <tt>target</tt>      (string)     - damit kann dem Link (a) ein Ziel (target) zugeordnet werden.</li>
	<li><em>(optional)</em> <tt>image</tt>       (true/false) - mit dem Wert false wird anstatt des Bilds/Icons ein Textlink angezeigt.</li>
	<li><em>(optional)</em> <tt>text</tt>        (string)     - damit kann ein Text f&uuml;r den Link bzw. ein alternativer Text f&uuml;r das Bild/Icon vorgegeben werden. Standard ist &#039;Valid CSS 2.1&#039;.<br />	Bei Verwendung eines Bildes/Icons wird der vorgegebene Text als alternativer Text f&uuml;r das Bild verwendet. Dieser Wert kann jedoch vom Wert &#039;alt&#039; des Bildes &uuml;berschrieben werden.</li>
	<li><em>(optional)</em> <tt>image_class</tt> (string)     - damit kann dem Bild (img) eine CSS-Klasse zugeordnet werden Der Wert &#039;image&#039; darf jedoch nicht auf false gesetzt sein.</li>
        <li><em>(optional)</em> <tt>src</tt>         (string)     - das angezeigte Bild/Icon. Der Wert &#039;image&#039; darf jedoch nicht auf false gesetzt sein. Standard ist hier http://jigsaw.w3.org/css-validator/images/vcss</li>
        <li><em>(optional)</em> <tt>width</tt>       (string)     - die Breite des Bildes/Icons. Der Wert &#039;image&#039; darf jedoch nicht auf false gesetzt sein. Standard ist 88 (Breite des Bildes von http://jigsaw.w3.org/css-validator/images/vcss)</li>
        <li><em>(optional)</em> <tt>height</tt>      (string)     - die H&ouml;he des Bildes/Icons. Der Wert &#039;image&#039; darf jedoch nicht auf false gesetzt sein. Standard ist hier 31 (H&ouml;he des Bildes von http://jigsaw.w3.org/css-validator/images/vcss)</li>
	<li><em>(optional)</em> <tt>alt</tt>         (string)     - ein alternativer Text f&uuml;r das Bild (Attribut &#039;alt&#039;). Der Wert &#039;image&#039; darf jedoch nicht auf false gesetzt sein. Ohne diesen Parameter wird der Wert des Parameters &#039;link&#039; verwendet.</li>
    </ul>';
$lang['admin']['help_function_title'] = '	<h3>Was macht dieser Tag?</h3>
	<p>Gibt den Titel einer Seite aus.</p>
	<h3>Wie wird er eingesetzt?</h3>
	<p>F&uuml;gen Sie den Tag folgenderma&szlig;en in Ihr Template bzw. Ihre Seite ein:</p> <code>{title}</code>
	<h3>Welche Parameter sind m&ouml;glich?</h3>
	<p><em>(optional)</em> <tt>assign</tt> (string) - Damit kann der Name der Smarty-Variablen festgelegt werden, an die das Ergebnis &uuml;bergeben wird.</p>';
$lang['admin']['help_function_stylesheet'] = '	<h3>Was macht dieser Tag?</h3>
	<p>L&auml;dt die Stylesheets aus der Datenbank. Standardm&auml;&szlig;ig werden alle mit dem aktuellen Template verkn&uuml;pften Stylesheets geladen.</p>
	<h3>Wie wird er eingesetzt?</h3>
	<p>F&uuml;gen Sie den Tag folgenderma&szlig;en in den head-Bereich Ihres Template bzw. Ihrer Seite ein:</p> <code>{stylesheet}</code>
	<h3>Welche Parameter sind m&ouml;glich?</h3>
	<ul>
		<li><em>(optional)</em> <tt>name</tt> - damit kann ein Stylesheet festgelegt werden, welches anstatt der mit der aktuellen Seite verkn&uuml;pften Stylesheets geladen werden soll (unabh&auml;ngig davon, ob es mit dem aktuellen Template verkn&uuml;pft ist oder nicht).</li>
		<li><em>(optional)</em> <tt>media</tt> - Wenn der Parameter name definiert wurde, k&ouml;nnen Sie f&uuml;r dieses Stylesheet einen abweichenden Medientyp festlegen.</li>
	</ul>';
$lang['admin']['help_function_stopexpandcollapse'] = '	<<h3>Was macht dieser Tag?</h3>
	<p>Damit lassen sich Inhalte auseinander und wieder zusammen falten, zum Beispiel so:</p>
	<p><a href="#expand1" onClick="expandcontent(&amp;#039;expand1&amp;#039;)" style="cursor:hand; cursor:pointer">F&uuml;r weitere Informationen klicken Sie bitte hier</a><span id=&quot;expand1&quot; class=&quot;expand&quot;><a name="help"></a> - Hier stehen alle ben&ouml;tigten Informationen ...</a></span></p>
	<h3>Wie wird er eingesetzt?</h3>
	<p>F&uuml;gen Sie den Tag folgenderma&szlig;en in Ihr Template bzw. Ihre Seite ein: <code>{startExpandCollapse id=&quot;name&quot; title=&quot;Hier klicken&quot;}</code>. Am Ende der faltbaren Inhalte muss der Tag {stopExpandCollapse} aufgerufen werden. Hier ein Beispiel:</p>
	<code>{startExpandCollapse id=&quot;name&quot; title=&quot;Hier klicken&quot;}
	<p>Hier steht der Text, den der Besucher Ihrer Webseite angezeigt bekommt, wenn er auf den oben stehenden Link &quot;Hier klicken&quot; geklickt hat. Es wird dann der gesamte Inhalt angezeigt, der sich zwischen den Tags {startExpandCollapse} und {stopExpandCollapse} befindet.</p>
	{stopExpandCollapse}
	</code>
	<p>Hinweis: Wenn Sie diesen Tag mehrfach auf einer Seite einsetzen m&ouml;chten, muss der Tag mit einer eindeutigen ID versehen werden.</p>
	<h3>Wie kann ich das Aussehen des Titels ver&auml;ndern?</h3>
	<p>Das Aussehen des Titels kann via CSS ge&auml;ndert werden. Der Titel wird in einem div-Container angezeigt, der mit der von Ihnen festgelegten ID gekennzeichnet ist.</p>
	<h3>Welche Parameter sind m&ouml;glich?</h3>
	<p>startExpandCollapse ben&ouml;tigt die folgenden Parameter:</p>
	<ul>
	<li><em>erforderlich</em> <tt>id</tt> - eine eindeutige ID f&uuml;r den auseinander/zusammen zu faltenden Bereich.</li>
	<li><em>erforderlich</em> <tt>title</tt> - Der Text, auf den geklickt werden muss, um die Inhalte auseinander/zusammen zu falten.</li>
	</ul>
	<p>stopExpandCollapse ben&ouml;tigt keine Parameter.</p>';
$lang['admin']['help_function_startexpandcollapse'] = '	<h3>Was macht dieser Tag?</h3>
	<p>Damit lassen sich Inhalte auseinander und wieder zusammen falten, zum Beispiel so:</p>
	<p><a href="#expand1" onClick="expandcontent(&amp;#039;expand1&amp;#039;)" style="cursor:hand; cursor:pointer">F&uuml;r weitere Informationen klicken Sie bitte hier</a><span id=&quot;expand1&quot; class=&quot;expand&quot;><a name="help"></a> - Hier stehen alle ben&ouml;tigten Informationen ...</a></span></p>
	<h3>Wie wird er eingesetzt?</h3>
	<p>F&uuml;gen Sie den Tag folgenderma&szlig;en in Ihr Template bzw. Ihre Seite ein: <code>{startExpandCollapse id=&quot;name&quot; title=&quot;Hier klicken&quot;}</code>. Am Ende der faltbaren Inhalte muss der Tag {stopExpandCollapse} aufgerufen werden. Hier ein Beispiel:</p>
	<code>{startExpandCollapse id=&quot;name&quot; title=&quot;Hier klicken&quot;}
	<p>Hier steht der Text, den der Besucher Ihrer Webseite angezeigt bekommt, wenn er auf den oben stehenden Link &quot;Hier klicken&quot; geklickt hat. Es wird dann der gesamte Inhalt angezeigt, der sich zwischen den Tags {startExpandCollapse} und {stopExpandCollapse} befindet.</p>
	{stopExpandCollapse}
	</code>
	<p>Hinweis: Wenn Sie diesen Tag mehrfach auf einer Seite einsetzen m&ouml;chten, muss der Tag mit einer eindeutigen ID versehen werden.</p>
	<h3>Wie kann ich das Aussehen des Titels ver&auml;ndern?</h3>
	<p>Das Aussehen des Titels kann via CSS ge&auml;ndert werden. Der Titel wird in einem div-Container angezeigt, der mit der von Ihnen festgelegten ID gekennzeichnet ist.</p>
	<h3>Welche Parameter sind m&ouml;glich?</h3>
	<p>startExpandCollapse ben&ouml;tigt die folgenden Parameter:</p>
	<ul>
	<li><em>erforderlich</em> <tt>id</tt> - eine eindeutige ID f&uuml;r den auseinander/zusammen zu faltenden Bereich.</li>
	<li><em>erforderlich</em> <tt>title</tt> - Der Text, auf den geklickt werden muss, um die Inhalte auseinander/zusammen zu falten.</li>
	</ul>
	<p>stopExpandCollapse ben&ouml;tigt keine Parameter.</p>';
$lang['admin']['help_function_sitemap'] = '    <h3>Hinweis</h3>
    <p>Dieses Plugin wird nicht mehr weiterentwickelt. Sie sollten anstatt dessen das <code>{site_mapper}</code>-Plugin verwenden.</p>
    <h3>Was macht dieser Tag?</h3>
    <p>Gibt eine Sitemap (Index aller auf der Webseite angezeigten Seiten) aus.</p>
    <h3>Wie wird er eingesetzt?</h3>
    <p>F&uuml;gen Sie den Tag folgenderma&szlig;en in Ihr Template bzw. Ihre Seite ein:</p>  <code>{sitemap}</code>
    <h3>Welche Parameter sind m&ouml;glich?</h3>
            <ul>
            <li><em>(optional)</em> <tt>class</tt> - Eine CSS-Klasse f&uuml;r den ul-Tag, der die gesamte Sitemap umschlie&szlig;t.</li>
            <li><em>(optional)</em> <tt>start_element</tt> - Mit diesem Parameter wird das Start-Element der Sitemap festgelegt. Dies kann entweder &uuml;ber die Angabe der Hierarchie (z.Bsp.: 1.2 oder 3.5.1) oder den Seiten-Alias erfolgen.</li>
            <li><em>(optional)</em> <tt>number_of_levels</tt> - Eine Ganzzahl, mit der die Anzahl der Ebenen festgelegt wird, die in der Sitemap angezeigt werden sollen. Wenn Sie den Parameter delimiter verwenden, muss dieser Wert auf 2 gesetzt werden.</li>
            <li><em>(optional)</em> <tt>delimiter</tt> - Text, um die Seiten in der Sitemap abzutrennen, die nicht der Ebene 1 angeh&ouml;ren (z.Bsp. 1.1, 1.2). Dies ist insbesondere dann n&uuml;tzlich, wenn die Seiten ab Ebene 2 neben den anderen angezeigt werden sollen (Anzeige via CSS-Parameter display:inline).</li>
            <li><em>(optional)</em> <tt>initial 1/0</tt> - Wird dieser Parameter auf 1 gesetzt, beginnen auch die ersten Seiten, die nicht Element der Ebene 1 sind, mit einem Trenner (z.Bsp. 1.1, 2.1).</li>
            <li><em>(optional)</em> <tt>relative 1/0</tt> - Bei Aktivierung dieses Parameters werden in der Sitemap nur die untergeordneten Seiten der aktuellen Seite angezeigt.</li>
            <li><em>(optional)</em> <tt>showall 1/0</tt> - Wenn dieser Parameter aktiviert wird, werden alle auf der Webseite vorhandenen Seiten angezeigt. Anderenfalls werden nur die Seiten mit aktiven Men&uuml;-Eintr&auml;gen angezeigt.</li>
            <li><em>(optional)</em> <tt>add_elements</tt> - Kann eine mit Komma getrennte Liste mit Aliasen der Seiten enthalten, die der Liste mit aktiven Men&uuml;-Eintr&auml;gen hinzugef&uuml;gt werden sollen (falls der Parameter showall nicht aktiviert wurde).</li>
        </ul>';
$lang['admin']['help_function_adsense'] = '	<h3>Was macht dieser Tag?</h3>
	<p>Google Adsense ist ein popul&auml;res Anzeigen-Programm f&uuml;r Webseiten. Mit diesem Tag lassen sich die Parameter des Adsense-Programms einfach &uuml;bergeben und der Code Ihres Templates bleibt wesentlich sauberer. Weitere Informationen &uuml;ber Googles Adsense-Programm finden Sie <a href="http://www.google.com/adsense" target="_blank">hier</a>.</p>
	<h3>Wie wird er eingesetzt?</h3>
	<p>Zun&auml;chst sollten Sie sich ein Google-Adsense-Konto einrichten und die Parameter f&uuml;r dessen Einsatz abfragen. Dann f&uuml;gen Sie den Tag wie folgt in Ihr Template bzw. Ihre Seite ein:</p> <code>{adsense ad_client=&quot;pub-random#&quot; ad_width=&quot;120&quot; ad_height=&quot;600&quot; ad_format=&quot;120x600_as&quot;}</code>
	<h3>Welche Parameter sind m&ouml;glich?</h3>
	<p>Alle Parameter sind optional; wenn Sie meinen, dass einige Parameter nicht erforderlich sind, wird die Anzeige trotzdem funktionieren. Die Parameter sind folgende:</p>
	<ul>
		<li>ad_client - Dies ist die pub_random# ID, die Ihrer Adsense-Kontonummer entsprechend sollte.</li>
		<li><em><erforderlich></em> <tt>ad_width</tt> - Breite der Anzeige</li>
		<li><em><erforderlich></em> <tt>ad_height</tt> - H&ouml;he der Anzeige</li>
		<li><em><erforderlich></em> <tt>ad_format</tt> - Format der Anzeige, z.Bsp. 120x600_as</li>
		<li><em><optional></em> <tt>ad_channel</tt> - Channels sind eine Erweiterung des Adsense-Programms. Wenn Sie dies nutzen, geben Sie es hier ein.</li>
		<li><em><optional></em> <tt>ad_slot</tt> - Slots werden f&uuml;r die erweiterten M&ouml;glichkeiten von Adsense verwendet. Wenn Sie diese Funktion einsetzen, f&uuml;gen Sie den entsprechenden Parameter hier ein.</li>
		<li><em><optional></em> <tt>ad_type</tt> - m&ouml;gliche Optionen sind text, image oder text_image.</li>
		<li><em><optional></em> <tt>color_border</tt> - die Farbe der Umrandung. Verwenden Sie den HEX-Code oder den (englischen) Namen der Farbe (z.Bsp. Red)</li>
		<li><em><optional></em> <tt>color_link</tt> - die Farbe des Linktextes. Verwenden Sie den HEX-Code oder den (englischen) Namen der Farbe (z.Bsp. Red)</li>
		<li><em><optional></em> <tt>color_url</tt> - die Farbe der URL. Verwenden Sie den HEX-Code oder den (englischen) Namen der Farbe (z.Bsp. Red)</li>
		<li><em><optional></em> <tt>color_text</tt> - dies Farbe des Textes. Verwenden Sie den HEX-Code oder den (englischen) Namen der Farbe (z.Bsp. Red)</li>
	</ul>';
$lang['admin']['help_function_sitename'] = '        <h3>Was macht dieser Tag?</h3>
        <p>Gibt den Namen der Seite aus. Dieser wurde w&auml;hrend der Installation festgelegt und kann in der Administration im Men&uuml; &quot;Administrator > Globale Einstellungen&quot; ge&auml;ndert werden.</p>
        <h3>Wie wird er eingesetzt?</h3>
        <p>F&uuml;gen Sie den Tag folgenderma&szlig;en in Ihr Template bzw. Ihre Seite ein:</p> <code>{sitename}</code>
        <h3>Welche Parameter sind m&ouml;glich?</h3>
	<p><em><em>(optional)</em> <tt>assign</tt> (string) - Damit kann der Name der Smarty-Variablen festgelegt werden, an die das Ergebnis &uuml;bergeben wird.</p>';
$lang['admin']['help_function_search'] = '	<h3>Was macht dieser Tag?</h3>
	<p>Mit diesem Tag wird nur der Syntax zur Verwendung des <a href="listmodules.php?action=showmodulehelp&amp;module=Search">Search-Moduls</a> vereinfacht. 
	Anstatt <code>{cms_module module=&quot;Search&quot;}</code> k&ouml;nnen Sie jetzt <code>{search}</code> verwenden, um das Modul in einem Template einzuf&uuml;gen.
	</p>
	<h3>Wie wird er eingesetzt?</h3>
	<p>F&uuml;gen Sie in Ihrem Template an der Stelle, an der das Feld f&uuml;r die Suche erscheinen soll, <code>{search}</code> ein. Weitere Informationen dazu finden Sie in der <a href="listmodules.php?action=showmodulehelp&amp;module=Search">Modul-Hilfe</a> des Search-Moduls.</p>';
$lang['admin']['help_function_root_url'] = '	<h3>Was macht dieser Tag?</h3>
	<p>Gibt die Root-URL der Webseite aus.</p>
	<h3>Wie wird er eingesetzt?</h3>
	<p>F&uuml;gen Sie den Tag folgenderma&szlig;en in Ihr Template bzw. Ihre Seite ein:</p> <code>{root_url}</code>
	<h3>Welche Parameter sind m&ouml;glich?</h3>
	<p>Derzeit keine.</p>';
$lang['admin']['help_function_repeat'] = '	<<h3>Was macht dieser Tag?</h3>
  <p>Wiederholt eine vorgegebene Sequenz von Zeichen entsprechend der Vorgabe</p>
	<h3>Wie wird er eingesetzt?</h3>
  <p>F&uuml;gen Sie den Tag folgenderma&szlig;en in Ihr Template bzw. Ihre Seite ein:</p> <code>{repeat string=&#039;repeat this&#039; times=&#039;3&#039;}</code>
	<h3>Welche Parameter sind m&ouml;glich?</h3>
  <ul>
  <li><em>(erforderlich)</em> <tt>string=&#039;text&#039;</tt> - der zu wiederholende String</li>
  <li><em>(erforderlich)</em> <tt>times=&#039;num&#039;</tt> - die Anzahl der Wiederholungen.</li>
  </ul>';
$lang['admin']['help_function_recently_updated'] = '	<h3>Was macht dieser Tag?</h3>
	<p>Gibt eine Liste der zuletzt aktualisierten Seiten aus.</p>
	<h3>Wie wird er eingesetzt?</h3>
	<p>F&uuml;gen Sie den Tag folgenderma&szlig;en in Ihr Template bzw. Ihre Seite ein:</p> <code>{recently_updated}</code>
	<h3>Welche Parameter sind m&ouml;glich?</h3>
	<ul>
 			<li><p><em>(optional)</em> <tt>number=&#039;10&#039;</tt> - Anzahl der anzuzeigenden Seiten, voreingestellt ist 10.</p><p>Beispiel:</p><code>{recently_updated number=&#039;15&#039;}</code></li>
			<li><p><em>(optional)</em> <tt>leadin=&#039;Zuletzt modifiziert&#039;</tt> - Text, der links vom Bearbeitungsdatum angezeigt wird.</p><p>Beispiel:</p> <code>{recently_updated leadin=&#039;Zuletzt modifiziert&#039;}</code></li>
			<li><p><em>(optional)</em> <tt>showtitle=&#039;true&#039;</tt> - Zeigt den Titel an, falls einer existiert (true|false).</p><p>Beispiel:</p> <code>{recently_updated showtitle=&#039;true&#039;}</code></li>
			<li><p><em>(optional)</em> <tt>css_class=&#039;irgendeine_css&#039;</tt> - f&uuml;gt die Liste in einen div-Tag mit dieser Klasse ein.</p><p>Beispiel:</p> <code>{recently_updated css_class=&#039;irgendeine_css&#039;}</code></li>
			<li><p><em>(optional)</em> <tt>dateformat=&#039;d.m.y h:m&#039;</tt> - passen Sie das Datumsformat Ihren W&uuml;nschen an (siehe PHP-date-format), Standard ist d.m.y h:m </p><p>Beispiel: <code>{recently_updated dateformat=&#039;D M j G:i:s T Y&#039;}</code></p></li>
	</ul>
	<p>oder kombiniert:</p>
	<code>{recently_updated number=&#039;15&#039; showtitle=&#039;false&#039; leadin=&#039;Zuletzt modifiziert: &#039; css_class=&#039;meine_css&#039; dateformat=&#039;D M j G:i:s T Y&#039;}</code>';
$lang['admin']['help_function_print'] = '        <h3>Was macht dieser Tag?</h3>
	<p>Mit diesem Tag wird nur der Syntax zur Verwendung des <a href="listmodules.php?action=showmodulehelp&amp;module=Printing">Print-Modules</a> vereinfacht. 
	Anstatt <code>{cms_module module=&#039;Printing&#039;}</code> k&ouml;nnen Sie jetzt <code>{print}</code> verwenden, um das Modul in einem Template einzuf&uuml;gen.
	</p>
	<h3>Wie wird er eingesetzt?</h3>
	<p>F&uuml;gen Sie in Ihrem Template an der Stelle, an der der Druck-Button erscheinen soll, <code>{print}</code> ein. Weitere Informationen dazu finden Sie in der <a href="listmodules.php?action=showmodulehelp&amp;module=Printing">Modulhilfe</a> des Print-Moduls.</p>';
$lang['admin']['help_function_oldprint'] = '	<h3>Was macht dieser Tag?</h3>
	<p>Erzeugt einen Link, der nur auf den Inhalt der Seite verweist.</p>
	<h3>Wie wird er eingesetzt?</h3>
	<p>F&uuml;gen Sie den Tag folgenderma&szlig;en in Ihr Template bzw. Ihre Seite ein:</p> <code>{oldprint}</code>
 	<h3>Welche Parameter sind m&ouml;glich?</h3>
						 <ul>
                <li><em>(optional)</em> <tt>goback</tt> - Wenn Sie diesen Parameter auf true setzen, wird auf der auszudruckenden Seite ein Zur&uuml;ck-Link angezeigt.</li>
                <li><em>(optional)</em> <tt>popup</tt> - Wenn Sie diesen Parameter auf true setzen, wird die auszudruckende Seite in einem neuen Fenster angezeigt.</li>
                <li><em>(optional)</em> <tt>script</tt> - Wenn Sie diesen Parameter auf true setzen, wird f&uuml;r den Start des Ausdrucks der Seite Javascript verwendet.</li>
                <li><em>(optional)</em> <tt>showbutton</tt> - Wenn Sie diesen Parameter auf true setzen, wird anstatt des Textlinks ein Druckersymbol angezeigt.</li>
                <li><em>(optional)</em> <tt>class</tt> - CSS-Klasse f&uuml;r den Link, voreingestellt ist noprint.</li>
                <li><em>(optional)</em> <tt>text</tt> - Mit diesem Parameter kann der Text f&uuml;r den Link festgelegt werden, der anstatt &szlig;Print this page&szlig; angezeigt werden soll.
                    <p>Beispiel:</p>
                     <code>{oldprint text=&quot;Druckversion&quot;}</code>
                     </li>
               <li><em>(optional)</em> <tt>title</tt> - Text, der als Titel-Attribut angezeigt wird. Ohne Angabe wird der text-Parameter verwendet.</li>
                <li><em>(optional)</em> Hier k&ouml;nnen dem Link (a) weitere Optionen hinzugef&uuml;gt werden.</li>
                <li><em>(optional)</em> <tt>src_img</tt> - Zeigt diese Bilddatei an. Voreingestellt ist images/cms/printbutton.gif.</li>
                <li><em>(optional)</em> <tt>class_img</tt> - eine CSS-Klasse f&uuml;r den img-Tag (wenn der Parameter showbutton gesetzt wurde).</li>
        </ul>';
$lang['admin']['login_info_title'] = 'Wichtige Information';
$lang['admin']['login_info'] = 'Bitte beachten Sie an dieser Stelle folgendes';
$lang['admin']['login_info_params'] = '<ol> 
  <li>In Ihrem Browser m&uuml;ssen Cookies aktiviert sein</li> 
  <li>In Ihrem Browser muss Javascript aktiviert sein</li> 
  <li>F&uuml;r die folgende Adresse m&uuml;ssen sich neu &ouml;ffnende Fenster zugelassen werden:</li> 
</ol>';
$lang['admin']['help_function_news'] = '	<h3>Was macht dieser Tag?</h3>
	<p>Mit diesem Tag wird nur der Syntax zur Verwendung des <a href="listmodules.php?action=showmodulehelp&amp;module=News">News-Moduls</a> vereinfacht. 
	Anstatt <code>{cms_module module=&#039;News&#039;}</code> k&ouml;nnen Sie jetzt <code>{news}</code> verwenden, um das Modul in einem Template oder eine Seite einzuf&uuml;gen.
	</p>
	<h3>Wie wird er eingesetzt?</h3>
	<p>F&uuml;gen Sie in Ihrem Template oder einer Seite an der Stelle, an der die News erscheinen sollen, <code>{news}</code> ein. Weitere Informationen dazu finden Sie in der <a href="listmodules.php?action=showmodulehelp&amp;module=News">Modul-Hilfe</a> des News-Moduls.</p>';
$lang['admin']['help_function_modified_date'] = '        <h3>Was macht dieser Tag?</h3>
        <p>Gibt Datum und Zeit der letzten &Auml;nderung einer Seite aus. Wird kein Format vorgegeben, erfolgt die Ausgabe in etwa so: &#039;Jan 01, 2004&#039;.</p>
        <h3>Wie wird er eingesetzt?</h3>
        <p>F&uuml;gen Sie den Tag folgenderma&szlig;en in Ihr Template bzw. Ihre Seite ein:</p> <code>{modified_date format=&quot;%A %d-%b-%y %T %Z&quot;}</code>
        <h3>Welche Parameter sind m&ouml;glich?</h3>
        <ul>
                <li><em>(optional)</em> <tt>format</tt> - Format von Datum/Zeit, es werden die Parameter der PHP-Funktion strftime verwendet. Weitere Informationen zu diesen Parametern finden Sie <a href="http://php.net/strftime" target="_blank">hier</a>.</li>
        </ul>';
$lang['admin']['help_function_metadata'] = '	<h3>Was macht dieser Tag?</h3>
	<p>Zeigt die Meta-Daten f&uuml;r diese Seite an. Es werden sowohl die Meta-Daten aus den globalen Einstellungen als auch die seitenspezifischen Meta-Daten angezeigt.</p>
	<h3>Wie wird er eingesetzt?</h3>
	<p>F&uuml;gen Sie den Tag folgenderma&szlig;en in Ihr Template bzw. Ihre Seite ein:</p> <code>{metadata}</code>
	<h3>Welche Parameter sind m&ouml;glich?</h3>
	<p><em>(optional)</em> <tt>showbase</tt> (true/false) - Wird dieser Parameter auf false gesetzt, wird der base-Tag nicht an den Browser gesandt. Wenn Sie in der config.php den Parameter $config[use_hierarchy] auf true setzen, MUSS dieser Parameter ebenfalls auf true gesetzt werden.</p>';
$lang['admin']['help_function_menu_text'] = '	<h3>Was macht dieser Tag?</h3>
	<p>Gibt den Men&uuml;text einer Seite aus.</p>
	<h3>Wie wird er eingesetzt?</h3>
	<p>F&uuml;gen Sie den Tag folgenderma&szlig;en in Ihr Template bzw. Ihre Seite ein:</p>  <code>{menu_text}</code>
	<h3>Welche Parameter sind m&ouml;glich?</h3>
	<p>Derzeit keine.</p>';
$lang['admin']['help_function_menu'] = '	<h3>Was macht dieser Tag?</h3>
	<p>Mit diesem Tag wird nur der Syntax zur Verwendung des <a href="listmodules.php?action=showmodulehelp&amp;module=MenuManager">Men&uuml;Manager-Moduls</a> vereinfacht.
	Anstatt <code>{cms_module module=&#039;MenuManager&#039;}</code> k&ouml;nnen Sie jetzt <code>{menu}</code> verwenden, um das Modul in einem Template oder eine Seite einzuf&uuml;gen.</p>
	<h3>Wie wird er eingesetzt?</h3>
	<p>F&uuml;gen Sie in Ihrem Template oder einer Seite an der Stelle, an der das Men&uuml; erscheinen sollen, <code>{menu}</code> ein. Weitere Informationen dazu finden Sie in der <a href="listmodules.php?action=showmodulehelp&amp;module=MenuManager">Modul-Hilfe</a> des MenuManager-Moduls.</p> ';
$lang['admin']['help_function_last_modified_by'] = '        <h3>Was macht dieser Tag?</h3>
        <p>Gibt die Person aus, die die Seite zuletzt bearbeitet hat. Wurde kein Format vorgegeben, wird standardm&auml;&szlig;ig die ID des Autors ausgegeben.</p>
        <h3>Wie wird er eingesetzt?</h3>
        <p>F&uuml;gen Sie den Tag folgenderma&szlig;en in Ihr Template bzw. Ihre Seite ein:</p> <code>{last_modified_by format=&quot;fullname&quot;}</code>
        <h3>Welche Parameter sind m&ouml;glich?</h3>
        <p><em>(optional)</em> <tt>format</tt> - ID (ID des Autors), username (Benutzername des Autors), fullname (voller Name des Autors)</p>';
$lang['admin']['help_function_image'] = '  <h3>Was macht dieser Tag?</h3>
  <p>Erzeugt einen image-Tag auf ein Bild im Verzeichnis /uploads/images</p>
  <h3>Wie wird er eingesetzt?</h3>
  <p>F&uuml;gen Sie den Tag folgenderma&szlig;en in Ihr Template bzw. Ihre Seite ein:</p> <code>{image src=&#039;irgendwas.jpg&#039;}</code>
  <h3>Welche Parameter sind m&ouml;glich?</h3>
  <ul>
     <li><em>(erforderlich)</em> <tt>src</tt> - Name der Bilddatei im Verzeichnis /images.</li>
     <li><em>(optional)</em> <tt>width</tt> - Breite des Bildes auf der Seite. Wird standardm&auml;&szlig;ig auf die reale Breite gesetzt.</li>
     <li><em>(optional)</em> <tt>height</tt> - H&ouml;he des Bildes auf der Seite. Wird standardm&auml;&szlig;ig auf die reale Breite gesetzt.</li>
     <li><em>(optional)</em> <tt>alt</tt> - Alternativer Text f&uuml;r das Bild -- ist f&uuml;r g&uuml;ltiges XHTML erforderlich. Standardm&auml;&szlig;ig wird der Dateiname verwendet.</li>
     <li><em>(optional)</em> <tt>class</tt> - CSS-Klasse f&uuml;r das Bild.</li>
     <li><em>(optional)</em> <tt>title</tt> - Text, der angezeigt wird, wenn sich die Maus &uuml;ber dem Bild befindet. Standardm&auml;&szlig;ig wird der alternative Text verwendet.</li>
     <li><em>(optional)</em> <tt>addtext</tt> - Text, der dem Tag zus&auml;tzlich hinzugef&uuml;gt werden soll</li>
  </ul>';
$lang['admin']['help_function_imagegallery'] = '	<h3>Was macht dieser Tag?</h3>
	<p>Erzeugt aus einem Verzeichnis mit Bildern eine Bildergalerie (.gif, .jpg oder .png).
	Wenn Sie auf das Vorschaubild klicken, wird das gro&szlig;e Bild angezeigt. Als Bildbeschriftung
	kann der Name des Bildes mit und ohne Dateibezeichner verwendet werden. Er
        folgt den Webstandards und verwendet CSS f&uuml;r die Formatierung. F&uuml;r 
	den die Bildergalerie umfassenden div-Tag sowie die verschiedenen Elemente 
	wurden Klassen festgelegt. Weitere Informationen dazu entnehmen Sie bitte dem unten stehenden Stylesheet.</p>

	<h3>Wie wird er eingesetzt?</h3>
	<p>F&uuml;gen Sie den Tag folgenderma&szlig;en in Ihr Template bzw. Ihre Seite ein:</p>
	<code>{ImageGallery picFolder=&quot;uploads/images/ihr_verzeichnis/&quot;}</code>
	<p>wobei ihr_verzeichnis das Verzeichnis ist, in dem sich die anzuzeigenden Bilder befinden.</p>
	
    <h3>Welche Parameter sind m&ouml;glich?</h3>
    <p>Sie k&ouml;nnen einige Parameter verwenden, die sich aber an Beispielen am besten erl&auml;utern lassen.</p>
        <ol>
		<li><em>(erforderlich)</em> <tt>picFolder</tt> - legt den Pfad zu der Galerie fest (ihr_verzeichnis) und endet mit einem &#039;/&#039;. So k&ouml;nnen Sie mehrere Verzeichnisse und Galerien verwenden.
		<p>Beispiel:</p> <code>picFolder=&quot;uploads/images/ihr_verzeichnis/&quot;</code></li>

		<li><em>(optional)</em> <tt>type</tt> - legt fest, wie das Bild im Gro&szlig;format angezeigt werden soll, entweder direkt auf der Seite (click) oder in einem Popup-Fenster via Javascript. Voreingestellt ist &#039;click&#039;.
		<p>Beispiel:</p> <code>type=&quot;click&quot;</code> oder <code>type=&quot;popup&quot;</code>
		</li>

		<li><em>(optional)</em> <tt>divID</tt> - Legt die ID f&uuml;r den div-Container fest, der die Bildergalerie umschlie&szlig;t, so dass Sie f&uuml;r jede Galerie ein eigenes Stylesheet verwenden k&ouml;nnen. Voreingestellt ist &#039;imagegallery&#039;.
		<p>Beispiel:</p> <code>divID =&quot;imagegallery&quot;</code>
		</li>

		<li><em>(optional)</em> <tt>sortBy</tt> - sortiert die Bilder nach Namen (name) ODER Datum (date). Keine Voreinstellung. 
		<p>Beispiel:</p> <code>sortBy = &quot;name&quot;</code> oder <code>sortBy = &quot;date&quot;</code>
		</li>

		<li><em>(optional)</em> <tt>sortByOrder</tt> - sortiert die Bilder in aufsteigender (asc) ODER absteigender (desc) Reihenfolge. Keine Voreinstellung.
		<p>Beispiel:</p> <code>sortByOrder = &quot;asc&quot;</code> oder <code>sortByOrder = &quot;desc&quot;</code>
		</li>

		<li><em>(optional)</em> <tt>bigPicCaption</tt> - legt die Beschriftung oberhalb des Bildes im Gro&szlig;format fest. M&ouml;gliche Werte sind name (Dateiname ohne Dateibezeichner), file (Dateiname mit Dateibezeichner, number (eine Zahlen-Sequenz) und none (Keine Beschriftung).Voreingestellt ist &quot;name&quot;.
		<p>Beispiel:</p> <code>bigPicCaption = &quot;file&quot;</code>
		</li>

		<li><em>(optional)</em> <tt>bigPicCaption</tt> - legt die Beschriftung der Vorschaubilder fest. M&ouml;gliche Werte sind name (Dateiname ohne Dateibezeichner), file (Dateiname mit Dateibezeichner), number (eine Zahlen-Sequenz) und none (Keine Beschriftung).Voreingestellt ist &quot;name&quot;.
		<p>Beispiel:</p> <code>thumbPicCaption = &quot;number&quot;</code>
		</li>

		<li><em>(optional)</em> <tt>bigPicAltTag</tt> - legt den Wert f&uuml;r &#039;alt&#039; des Bildes im Gro&szlig;format fest. M&ouml;gliche Werte sind name (Dateiname ohne Dateibezeichner), file (Dateiname mit Dateibezeichner) und number (eine Zahlen-Sequenz).Voreingestellt ist &quot;name&quot;. Empfohlen.
		<p>Beispiel:</p> <code>bigPicAltTag = &quot;number&quot;</code>
		</li>

		<li><em>(optional)</em> <tt>bigPicTitleTag</tt> - legt den Wert f&uuml;r title dae Bildes im Gro&szlig;format fest. M&ouml;gliche Werte sind name (Dateiname ohne Dateibezeichner), file (Dateiname mit Dateibezeichner), number (eine Zahlen-Sequenz) und none (Keine Titel).Voreingestellt ist &quot;name&quot;.
		<p>Beispiel:</p> <code>bigPicTitleTag = &quot;file&quot;</code>
		</li>

		<li><em>(optional)</em> <tt>thumbPicAltTag</tt> - entspricht bigPicAltTag, jedoch f&uuml;r die Vorschaubilder.
		</li>

		<li><em>(optional)</em> <tt>thumbPicTitleTag</tt> - entspricht dem bigPicAltTag, jedoch f&uuml;r die Vorschaubilder.
	        <p><strong>Hinweis:</strong> Mit diesem Parameter wird der Test festgelegt, auf den man f&uuml;r die Anzeige eines Bildes im Gro&szlig;format klicken muss. Voreingestellt ist hier &#039;... click for a bigger image&#039;.</li>
        </ol>

  <h4>Ein etwas komplexeres Beispiel:</h4>
        <p>&#039;div id&#039; soll &#039;cdcover&#039; sein, keine Beschriftung der Bilder im Gro&szlig;format, 
        die Vorschaubilder verwenden die voreingestellte Beschriftung. Die &#039;alt&#039;-Tags f&uuml;r die Bilder 
        im Gro&szlig;format verwenden den Dateinamen des Bildes ohne Dateibezeichner, 
        der big image &#039;title&#039;-Tag die Dateinamen des Bildes mit Dateibezeichner. Die Vorschaubilder 
        nutzen den voreingestellten &#039;alt&#039;- und &#039;title&#039;-Tag. Der Standard soll der Name der Bilddatei ohne Dateibezeichner
        f&uuml;r &#039;alt&#039; und &#039;Klicken Sie hier f&uuml;r die Anzeige des Bildes im Gro&szlig;format ...&#039; f&uuml;r &#039;title&#039; sein. Das Plugin muss wie folgt aufgerufen werden:</p>
		<code>{ImageGallery picFolder=&quot;uploads/images/cdcovers/&quot; divID=&quot;cdcovers&quot; bigPicCaption=&quot;none&quot;  bigPicAltTag=&quot;name&quot; bigPicTitleTag=&quot;file&quot;}</code>
        <br/>
                <p>Ja, ich wei&szlig;, das sind eine ganze Menge Parameter. Aber das Plugin sollte so flexibel wie m&ouml;glich bleiben. Au&szlig;erdem m&uuml;ssen die Parameter nur bei entsprechendem Bedarf gesetzt werden.</p>
  <br/>
  
<h4>Muster-CSS</h4>
<pre>
	/* Bilder-Galerie - Vorschaubilder */
	.thumb {
		margin: 1em 1em 1.6em 0; /* Abstand zwischen den Bildern */
		padding: 0;
		float: left;
		text-decoration: none;
		line-height: normal;
		text-align: left;
	}

	.thumb img, .thumb a img, .thumb a:link img{ /* Formatiert die Links*/
		width: 100px; /* Bildbreite */
		height: 100px; /* Bildh&ouml;he */
		display: inline;
		padding: 12px; /* Abstand der Bilder zu dessen Rahmen */
		/* Wenn Sie diesen Abstand auf 0px setzen, wird kein Rahmen, aber auch kein hover-Effekt angezeigt! */
		margin: 0;
		background-color: white; /* Hintergrund der Bilder */ 
		border-top: 1px solid #eee; /* Rahmen der Bilder */
		border-right: 2px solid #ccc;
		border-bottom: 2px solid #ccc;
		border-left: 1px solid #eee;
		text-decoration: none;
	}

	.thumb a:visited img {
		background-color: #eee; /* Hintergrund der bereits angesehenen Bilder - hier ein Hellgr&uuml;n */
	}

	.thumb a:hover img {
		background-color: #dae6e4; /* Hintergrund der Bilder beim &Uuml;berfahren mit der Maus - hier ein Hellblau/Gr&uuml;n */
	}

	.thumbPicCaption {
		text-align: center;
		font-size: smaller;
		margin: 0 1px 0 0;
		padding: 0;
		width: 124px; /* Bildbreite plus 2x der Abstand des Rahmens von den Bildern */
		/* display: none;  nur erforderlich, wenn dieser Text nicht angezeigt werden soll */
	}

	/* Bilder-Galerie - Bilder im Gro&szlig;format */
	.bigPic {
		margin: 10px 0 5px 0;
		padding: 0;
		line-height: normal;
	}

	.bigPicCaption { /* Beschreibung des Bildes im Gro&szlig;format oberhalb des Bildes */
		text-align: center;
		font-weight: bold;
		font-variant: small-caps;
		font-weight: bold;
		margin: 0 1px 0 0;
		padding: 0;
		width: 386px; /* Bildbreite plus 2x der Abstand des Rahmens von den Bildern */
		/* display: none;  nur erforderlich, wenn dieser Text nicht angezeigt werden soll */
	}

	.bigPic img{ /* Einstellungen f&uuml;r die Bilder im Gro&szlig;format */
		width: 350px; /* Breite des Bildes im Gro&szlig;format */
		height: auto;
		display: inline;
		padding: 18px; /* Bildabstand zum Rahmen. */
		/* Wenn Sie diesen Abstand auf 0px setzen, wird kein Rahmen, aber auch kein hover-Effekt angezeigt! */
		margin: 0;
		background-color: white; /* Hintergrund des Bildes */ 
		border-top: 1px solid #eee; /* Rahmen des Bildes */
		border-right: 2px solid #ccc; 
		border-bottom: 2px solid #ccc;
		border-left: 1px solid #eee;
		text-decoration: none; 
		text-align: left;
	}

	.bigPicNav { /* Info zum Bild im Gro&szlig;format: &#039;Bild 1 von 4&#039; und die Galerie-Navigation */
		margin: 0;
		width: 386px; /* Bildbreite plus 2x der Abstand des Rahmens von den Bildern */
		padding: 0;
		color: #000;
		font-size: smaller;
		line-height: normal;
		text-align: center;
		/* display: none;  Nur erforderlich, wenn Sie diesen Text nicht anzeigen lassen wollen. Warum? Sie verlieren Ihre Navigation! */
	}
</pre>
<br/>';
$lang['admin']['help_function_html_blob'] = '	<h3>Was macht dieser Tag?</h3>
	<p>F&uuml;r eine Beschreibung schauen Sie bitte in die Hilfe des global_content-Tags.</p>';
$lang['admin']['help_function_googlepr'] = '	<h3>Was macht dieser Tag?</h3>
	<p>Zeigt eine Zahl an, die dem Google-Pagerank entspricht.</p>
	<h3>Wie wird er eingesetzt?</h3>
	<p>F&uuml;gen Sie den Tag folgenderma&szlig;en in Ihr Template bzw. Ihre Seite ein:</p> <code>{googlepr}</code>

	<h3>Welche Parameter sind m&ouml;glich?</h3>

	<p><em>(optional)</em> <tt>domain</tt> - die Webseite, f&uuml;r die der Pagerank angezeigt werden soll.</p>';
$lang['admin']['help_function_google_search'] = '	<h3>Was macht dieser Tag?</h3>
	<p>Durchsucht Ihre Webseite unter Verwendung der Google-Suche.</p>
	<h3>Wie wird er eingesetzt?</h3>
	<p>F&uuml;gen Sie den Tag folgenderma&szlig;en in Ihr Template bzw. Ihre Seite ein:</p> <code>{google_search}</code>
	<p/>Hinweis: Damit die Suche funktioniert, muss Ihre Webseite von Google indiziert worden sein. Sie k&ouml;nnen Ihre Webseite <a href="http://www.google.com/addurl.html">hier</a> bei Google anzumelden.</p>
	<h3>Wie kann ich das Aussehen einer Textbox oder des Buttons ver&auml;ndern?</h3>
	<p>Das Aussehen der Textbox und des Buttons kann via CSS ge&auml;ndert werden. Die Textbox kann &uuml;ber die ID textSearch und der Button &uuml;ber die ID buttonSearch formatiert werden.</p>

	<h3>Welche Parameter sind m&ouml;glich?</h3>
	<ul>
		<li><em>(optional)</em> <tt>domain</tt> - Dieser Parameter &uuml;bergibt den Domainnamen an die Google-Suche. Dieses Script versucht, die Domain automatisch zu bestimmen.</li>
		<li><em>(optional)</em> <tt>buttonText</tt> - Der Text, der auf dem Such-Button angezeigt wird. Standard ist &quot;Search Site&quot;.</li>
	</ul>';
$lang['admin']['help_function_global_content'] = '	<h3>Was macht dieser Tag?</h3>
	<p>F&uuml;gt einen Globalen Inhaltsblock in Ihrem Template bzw. Ihrer Seite ein.</p>
	<h3>Wie wird er eingesetzt?</h3>
	<p>F&uuml;gen Sie den Tag folgenderma&szlig;en in Ihr Template bzw. Ihre Seite ein: <code>{global_content name=&#039;mein_block&#039;}</code>, wobei mein_block der Name ist, der dem Block bei dessen Erstellung gegeben wurde.</p>
	<h3>Welche Parameter sind m&ouml;glich?</h3>
	<p><em>(erforderlich)</em> <tt>name</tt> - der Name des Globalen Inhaltsblocks, der angezeigt werden soll.</li>
          <li><em>(optional)</em> <tt>assign</tt> - der Name der Smarty-Variablen, der der Globale Inhaltsblock zugewiesen werden soll.</li>
	</ul>';
$lang['admin']['help_function_get_template_vars'] = '	<h3>Was macht dieser Tag?</h3>
	<p>Gibt alle bekannten Smarty-Variablen auf Ihrer Seite aus.</p>
	<h3>Wie wird er eingesetzt?</h3>
	<p>F&uuml;gen Sie den Tag folgenderma&szlig;en in Ihr Template bzw. Ihre Seite ein:</p> <code>{get_template_vars}</code>
	<h3>Welche Parameter sind m&ouml;glich?</h3>
        <p>Derzeit keine.</p>';
$lang['admin']['help_function_embed'] = '	<h3>Was macht dieser Tag?</h3>
	<p>Mit diesem Tag k&ouml;nnen externe Applikation in CMSms eingebettet werden. Die h&auml;ufigste Anwendung hierf&uuml;r ist wohl ein Forum. 
	F&uuml;r die Implementierung werden IFRAMES verwendet, so dass &auml;ltere Browser damit Probleme haben k&ouml;nnen. Dies ist jedoch der einzige funktionierende Weg, 
	ohne die einzubettende Applikation zu modifizieren.</p>
	<h3>Wie wird er eingesetzt?</h3>
        <ul>
        <li>a) F&uuml;gen Sie <code>{embed header=true}</code> in den head-Bereich Ihres Seiten-Templates oder im Metadatenbereich in der Registerkarte &quot;Optionen&quot; der entsprechenden Seite ein. Damit wird das ben&ouml;tigte Javascript in den Quelltext eingef&uuml;gt. Wenn Sie diesen Tag im Metadatenbereich der Registerkarte &quot;Optionen&quot; eingef&uuml;gt haben, sollten Sie darauf achten, dass der Tag <code>{metadata}</code> im head-Bereich Ihres Seiten-Template enthalten ist.</li>
	<li>F&uuml;gen Sie den folgenden Tag in Ihr Template bzw. Ihre Seite ein: <code>embed url=&#039;http://www.google.com/&#039;}</code></li>
        </ul>
        <br/>
        <h4>Beispiel, um das Iframe gr&ouml;&szlig;er zu machen</h4>
	<p>F&uuml;gen Sie Ihrem Stylesheet folgendes hinzu:</p>
        <pre>#myframe { height: 600px; }</pre>
        <h3>Welche Parameter sind m&ouml;glich?</h3>
        <ul>
               <li><em>(erforderlich)</em> <tt>url</tt> - die URL, die im Iframe eingebettet werden soll</li>
               <li><em>(erforderlich)</em> <tt>header=true</tt> - damit wird der header-Code erzeugt, damit sich die Gr&ouml;&szlig;e des Iframes der eingebetteten Applikation anpasst.</li>
               <li><em>(optional)</em> <tt>name</tt> - ein Name, der f&uuml;r das Iframe verwendet wird (anstatt myframe).<p>Wenn Sie diese Option verwenden, achten Sie darauf, dass er in beiden Aufrufen des Tags identisch sein muss, also : <code>{embed header=true name=foo}</code> und <code>{embed name=foo url=http://www.google.com}</code>.</p></li>
        </ul>';
$lang['admin']['help_function_edit'] = '	<h3>Was macht dieser Tag?</h3>
	<p>Erzeugt einen Link, um die Seite zu bearbeiten.</p>
	<h3>Wie wird er eingesetzt?</h3>
	<p>F&uuml;gen Sie den Tag folgenderma&szlig;en in Ihr Template bzw. Ihre Seite ein:</p> <code>{edit}</code>
        <h3>Welche Parameter sind m&ouml;glich?</h3>
        <ul>
                <li><em>(optional)</em> <tt>showbutton</tt> - Wenn Sie diesen Parameter auf true setzen, wird anstatt des Textlinks eine Grafik angezeigt.</li>
	        <li><em>(optional)</em> <tt>text</tt> - Mit diesem Parameter kann der anzuzeigende Text f&uuml;r den Link festgelegt werden.</li>
        </ul>';
$lang['admin']['help_function_description'] = '	<h3>Was macht dieser Tag?</h3>
	<p>Gibt die Beschreibung einer Seite aus (Titel-Attribut).</p>
	<h3>Wie wird er eingesetzt?</h3>
	<p>F&uuml;gen Sie den Tag folgenderma&szlig;en in Ihr Template bzw. Ihre Seite ein:</p> <code>{description}</code>
	<h3>Welche Parameter sind m&ouml;glich?</h3>
	<p>Derzeit keine.</p>';
$lang['admin']['help_function_created_date'] = '        <h3>Was macht dieser Tag?</h3>
        <p>Gibt Datum und Uhrzeit der Erstellung der Seite aus. Wird kein Format vorgegeben, wird standardm&auml;&szlig;ig &#039;Jan 01, 2004&#039; verwendet.</p>
        <h3>Wie wird er eingesetzt?</h3>
        <p>F&uuml;gen Sie den Tag folgenderma&szlig;en in Ihr Template bzw. Ihre Seite ein: <code>{created_date format=&quot;%A, %d.%B %Y %T %Z&quot;}</code></p>
        <h3>Welche Parameter sind m&ouml;glich?</h3>
        <p><em>(optional)</em> <tt>format</tt> - Datums-/Uhrzeit-Format. Verwendet die Parameter der PHP-Funktion strftime. Weitere Informationen dazu finden Sie <a href="http://php.net/strftime" target="_blank">hier</a>.</p>';
$lang['admin']['help_function_content'] = '	<h3>Was macht dieser Tag?</h3>
	<p>Mit diesem Tag erfolgt die Ausgabe der Inhalte Ihrer Seiten. Er wird im Template eingef&uuml;gt. An dieser Stelle wird dann der Inhalt der jeweils aktuellen Seite angezeigt.</p>
	<h3>Wie wird er eingesetzt?</h3>
	<p>F&uuml;gen Sie den Tag folgenderma&szlig;en in Ihr Template bzw. Ihre Seite ein:</p> <code>{content}</code>.
	<h3>Welche Parameter sind m&ouml;glich?</h3>
	<ul>
		<li><em>(optional)</em> <tt>block</tt> - &uuml;ber diesen Parameter k&ouml;nnen Sie mehr als einen Inhaltsblock auf einer Seite erstellen. Wird der content-Tags mehrfach in einem Template aufgerufen, werden auch in der Administration auf der Seite zum Bearbeiten der Seite die entsprechende Anzahl Bearbeitungsfelder angezeigt.
		<p>Beispiel:</p>
<code>{content block=&quot;Zweiter Inhaltsblock&quot;}</code>
<p>Wenn Sie jetzt diese Seite bearbeiten, erscheint beim Bearbeiten der Seite ein weiterer Textbereich mit dem Namen &quot;Zweiter Inhaltsblock&quot;.</p>
<p><strong>Hinweis</strong> Der Name des Inhaltsblocks darf nur aus Buchstaben, Zahlen, Leerzeichen, Binde- und Unterstrichen bestehen (keinen Punkt o.&auml;. - falsch w&auml;re also 2. Block).</p></li>
		<li><em>(optional)</em> <tt>wysiwyg</tt> (true/false) - Wird dieser Parameter auf false gesetzt, wird zum Bearbeiten dieser Seite nicht der festgelegte WYSIWYG-Editor verwendet. Ist der Parameter true, funktioniert es wie bekannt. Funktioniert nur, wenn der block-Parameter verwendet wird.</li>
		<li><em>(optional)</em> <tt>oneline</tt> (true/false) - Wird dieser Parameter auf true gesetzt, wird bei der Bearbeitung dieses Blocks nur eine Zeile angezeigt. Ist der Parameter false, funktioniert es wie bekannt. Funktioniert nur, wenn der block-Parameter verwendet wird.</li>
                <li><em>(optional)</em> <tt>size</tt> - wenn der Parameter oneline gesetzt wurde, kann mit diesem Parameter die Gr&ouml;&szlig;e der Textzeile festgelegt werden. Voreingestellt ist 50.</li>
		<li><em>(optional)</em> <tt>default</tt> - Mit diesem Parameter kann f&uuml;r einen Inhaltsblock ein bestimmter Inhalt voreingestellt werden (funktioniert nur mit zus&auml;tzlichen Inhaltsbl&ouml;cken).</li>
		<li><em>(optional)</em> <tt>assign</tt> - Mit diesem Parameter kann der Inhalt einer Smarty-Variablen zugewiesen werden. Diese kann dann in anderen Bereichen der Seite verwendet werden. Auch eine Pr&uuml;fung, ob ein bestimmter Inhalt existiert, ist damit m&ouml;glich.
		<p>Beispiel der &uuml;bergabe eines Seiteninhalts an einen benutzerdefinierten Tag als Parameter:</p>
<code>
         {content assign=seiteninhalt}
         {table_of_contents thepagecontent=&quot;$seiteninhalt&quot;}
</code>
</li>
	</ul>';
$lang['admin']['help_function_contact_form'] = '<h3> Dieser Tag ist ab CMSms-Version 1.5 nicht mehr im Lieferumfang enthalten, sondern wird in einem <a href="http://dev.cmsmadesimple.org/project/view/626">separaten Projekt</a> weiterentwickelt.</h3>';
$lang['admin']['help_function_cms_versionname'] = '	<h3>Was macht dieser Tag?</h3>
	<p>Dieser Tag kann verwendet werden, um den Namen der CMSms-Version auszugeben.</p>
	<h3>Wie wird er eingesetzt?</h3>
	<p>F&uuml;gen Sie den Tag folgenderma&szlig;en in Ihr Template bzw. Ihre Seite ein:</p> <code>{cms_versionname}</code>
	<h3>Welche Parameter sind m&ouml;glich?</h3>
	<p>Keine</p>';
$lang['admin']['help_function_cms_version'] = '	<h3>Was macht dieser Tag?</h3>
	<p>Dieser Tag kann verwendet werden, um die aktuelle CMSms-Versionsnummer in einer Seite oder einem Template auszugeben.</p>
	<h3>Wie wird er eingesetzt?</h3>
	<p>F&uuml;gen Sie den Tag folgenderma&szlig;en in Ihr Template bzw. Ihre Seite ein:</p> <code>{cms_version}</code>
	<h3>Welche Parameter sind m&ouml;glich?</h3>
	<p>Keine.</p>';
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
$lang['admin']['help_function_cms_selflink'] = '                <h3>Was macht dieser Tag?</h3>
		<p>Zeigt einen Link zu einer anderen CMSms-Inhaltsseite in Ihrem Template oder im Inhalt an. Kann mit dem Parameter ext auch f&uuml;r externe Links eingesetzt werden.</p>
		<h3>Wie wird er eingesetzt?</h3>
		<p>F&uuml;gen Sie den Tag folgenderma&szlig;en in Ihr Template bzw. Ihre Seite ein: <code>{cms_selflink page=&#039;1&#039;}</code> oder <code>{cms_selflink page=&#039;alias&#039;}</code></p>
		<h3>Welche Parameter sind m&ouml;glich?</h3>
		<ul>
		<li><em>(optional)</em> <tt>page</tt> - Seiten-ID oder Seiten-Alias, auf den verlinkt werden soll.</li>
		<li><em>(optional)</em> <tt>dir anchor (interne Links)</tt> - Neue Option f&uuml;r seiteninterne Links. Falls diese Option verwendet wird, dann sollte <tt>anchorlink</tt> auf den Link gesetzt werden.</li> <!-- Russ - 25-04-2006 -->
		<li><em>(optional)</em> <tt>anchorlink</tt> - Neuer Parameter f&uuml;r einen seiteninternen Link. Wenn dieser Parameter verwendet wird, muss auch der Wert <tt>dir =&#039;anchor&#039;</tt> gesetzt werden. Das Raute-Zeichen muss nicht hinzugef&uuml;gt werden, da dies automatisch erfolgt.</li> <!-- Russ - 25-04-2006 -->
		<li><em>(optional)</em> <tt>urlparam</tt> - Legt einen zus&auml;tzlichen Parameter f&uuml;r die URL fest. <strong>Verwenden Sie dies nie in Verbindung mit dem Parameter <em>anchorlink</em> .</strong>
		<li><em>(optional)</em> <tt>tabindex =&#039;ein Wert&#039;</tt> - Legt einen Tabindex f&uuml;r den Link fest.</li> <!-- Russ - 22-06-2005 -->
		<li><em>(optional)</em> <tt>dir start/next/prev/up (previous)</tt> - Links auf die festgelegte Startseite oder die n&auml;chste oder vorherige Seite, oder die &uuml;bergeordnete Seite. Falls dies verwendet wird, sollte der Wert <tt>page</tt> nicht gesetzt werden.</li> <!-- mbv - 21-06-2005 --><B>Hinweis!</B> Von den eben genannten Parametern sollte nur einer pro cms_selflink-Aufruf verwendet werden!!
	<li><em>(optional)</em> <tt>text</tt> - Text, der f&uuml;r den Link angezeigt wird. Wird kein Wert festgelegt, wird anstatt dessen der Seitenname verwendet.</li>
		<li><em>(optional)</em> <tt>menu 1/0</tt> - Wird der Wert auf 1 gesetzt, wird anstatt des Seitennamens der Men&uuml;text verwendet.</li> <!-- mbv - 21-06-2005 -->
		<li><em>(optional)</em> <tt>target</tt> - Ziel, in dem der Link ge&ouml;ffnet werden soll. N&uuml;tzlich bei Verwendung von Frames und Javascript.</li>
		<li><em>(optional)</em> <tt>class</tt> - CSS-Klasse f&uuml;r den a-Link. N&uuml;tzlich f&uuml;r die Gestaltung des Links.</li> <!-- mbv - 21-06-2005 -->
		<li><em>(optional)</em> <tt>lang</tt> - Zeigt Link-Beschriftungen (zum Beispiel &#039;N&auml;chste Seite&#039;/&#039;Vorherige Seite&#039;) in verschiedenen Sprachen an. Ist der Wert 0, wird der Link nicht beschriftet. Aktuell ist D&auml;nisch (da), Holl&auml;ndisch (nl), Englisch (en), Franz&ouml;sisch (fr) und Norwegisch (no) verf&uuml;gbar.</li> <!-- mbv - 21-06-2005 -->
		<li><em>(optional)</em> <tt>id</tt> - CSS-ID f&uuml;r den a-Link.</li> <!-- mbv - 29-06-2005 -->
		<li><em>(optional)</em> <tt>more</tt> - damit k&ouml;nnen dem a-Link weitere Parameter hinzugef&uuml;gt werden.</li> <!-- mbv - 29-06-2005 -->
		<li><em>(optional)</em> <tt>label</tt> - Beschriftung f&uuml;r den Link.</li>
		<li><em>(optional)</em> <tt>label_side left/right</tt> - Seite, auf der die Beschriftung angezeigt angezeigt wird. Voreingestellt ist left.</li>
		<li><em>(optional)</em> <tt>title</tt> - Text, der als title-Attribut verwendet wird. Ohne Vorgabe wird der Titel der Seite als Titel f&uuml;r den Link verwendet.</li>
		<li><em>(optional)</em> <tt>rellink 1/0</tt> - Erzeugt einen relativen Link f&uuml;r eine behindertengerechte Navigation. Funktioniert nur, wenn der dir-Parameter gesetzt ist und sollte nur im head-Bereich eines Templates eingesetzt werden.</li>
		<li><em>(optional)</em> <tt>href</tt> - Wenn der Parameter href verwendet wird, wird nur der href-Wert erzeugt (kein anderer Parameter m&ouml;glich). <strong>Beispiel:</strong> <code><a href="{cms_selflink href=&#039;alias&#039;}"><img src=&quot;&quot;></a></code></li>
		<li><em>(optional)</em> <tt>image</tt> - Die URL eines Bildes, welches als Link verwendet werden soll. <strong>Beispiel:</strong> <code>{cms_selflink dir=&#039;next&#039; image=&#039;next.png&#039; text=&#039;Next&#039;}</code></li>
		<li><em>(optional)</em> <tt>alt</tt> - Alternativer Text, der f&uuml;r den vorstehenden image-Parameter verwendet wird (alt=&quot;&quot; wird nur verwendet, wenn der alt-Parameter nicht vorgegeben ist).</li>
		<li><em>(optional)</em> <tt>imageonly</tt> - Bei Verwendung von Bildern kann damit die Anzeige von Text-Links unterdr&uuml;ckt werden. Wenn f&uuml;r den Link kein Text verwendet werden soll, k&ouml;nnen Sie mit der Einstellung lang=0 auch die Beschriftung unterdr&uuml;cken. <strong>Beispiel:</strong> <code>{cms_selflink dir=&#039;next&#039; image=&#039;next.png&#039; text=&#039;Next&#039; imageonly=1}</code></li>
		<li><em>(optional)</em> <tt>ext</tt> - F&uuml;r externe Links, f&uuml;gt class=&#039;external&#039; und Info-Text hinzu. <strong>Warnung:</strong> dieser Parameter ist nur mit den Parametern text, target und title kompatibel!</li>
		<li><em>(optional)</em> <tt>ext_info</tt> - wird in Verbindung mit den &#039;ext&#039;-Voreinstellungen verwendet (externer Link)</li>
		</ul>';
$lang['admin']['about_function_cms_module'] = '	<p>Author: Ted Kulp<tedkulp@users.sf.net></p>
	<p>Version: 1.0</p>
	<p>
	Change History:<br/>
	None
	</p>';
$lang['admin']['help_function_cms_module'] = '<h3>Was macht dieser Tag?</h3>
	<p>Dieser Tag wird verwendet, um Module in Ihre Templates und Seiten einzuf&uuml;gen. Wenn ein Modul als Tag-Plugin programmiert wurde (f&uuml;r Details schauen Sie bitte in die Hilfe des Moduls), dann ist es Ihnen m&ouml;glich, das Modul mit diesem Tag aufzurufen.</p>
	<h3>Wie wird er eingesetzt?</h3>
	<p>F&uuml;gen Sie den Tag folgenderma&szlig;en in Ihr Template bzw. Ihre Seite ein: <code>{cms_module module=&#039;name_des_moduls&#039;}</code>
	<h3>Welche Parameter sind m&ouml;glich?</h3>
	<p>Es ist lediglich ein Parameter erforderlich. Alle anderen Parameter werden an das Modul weitergegeben.</p>
	<p><em>(erforderlich)</em> <tt>module</tt> - Name des Moduls, das eingef&uuml;gt werden soll. Dieser ist nicht zeichensensitiv.</li>
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
$lang['admin']['help_function_breadcrumbs'] = '<h3>Was macht dieser Tag?</h3>
<p>Gibt einen Brotkrumenpfad zur Navigation aus.</p>
<h3>Wie wird er eingesetzt?</h3>
<p>F&uuml;gen Sie den Tag folgenderma&szlig;en in Ihr Template bzw. Ihre Seite ein:</p> <code>{breadcrumbs}</code>
<h3>Welche Parameter sind m&ouml;glich?</h3>
<ul>
	<li><em>(optional)</em> <tt>delimiter</tt> - Text, um die Eintr&auml;ge in der Auflistung voneinander zu trennen (voreingestellt ist &quot;>>&quot;).
	<li><em>(optional)</em> <tt>initial</tt> - 1/0 Wird der Wert auf 1 gesetzt, beginnt die Brotkrumennavigation mit einem Trenner (voreingestellt 0).
	<li><em>(optional)</em> <tt>root</tt> - Seiten-Alias der Seite, der als erster Eintrag in der Auflistung angezeigt werden soll. Kann genutzt werden, um eine Seite als Ursprungsseite darzustellen, obwohl sie es nicht ist.
	<li><em>(optional)</em> <tt>root_url</tt> - &uuml;berschreibt die URL der Ursprungsseite. N&uuml;tzlich, um einen Link so &#039;/&#039; anstatt so &#039;/home/&#039; aussehen zu lassen. Daf&uuml;r ist es erforderlich, dass die Ursprungsseite als Startseite festgelegt ist.
	<li><em>(optional)</em> <tt>classid</tt> - Die CSS-Klasse f&uuml;r die Namen der nicht aktuellen Seiten, also die Seiten n-1 in der Auflistung. Wenn der Name ein Link ist, wird die Klasse den href-Tags hinzugef&uuml;gt, anderenfalls den span-Tags.
	<li><em>(optional)</em> <tt>currentclassid</tt> - Die CSS-Klasse f&uuml;r den span-Tag, der den Namen der aktuellen Seit umschliesst.
	<li><em>(optional)</em> <tt>starttext</tt> - Text, der vor der Auflistung der Brotkrumennavigation angezeigt wird, wie etwa &#039;You are here&#039;.</li>
</ul>';
$lang['admin']['about_function_anchor'] = '	<p>Author: Ted Kulp<tedkulp@users.sf.net></p>
	<p>Version: 1.1</p>
	<p>
	Change History:<br/>
	<strong>Update to version 1.1 from 1.0</strong> <em>2006/07/19</em><br/>
	Russ added the means to insert a title, a tabindex and a class for the anchor link. Westis added accesskey and changed parameter names to not include &#039;anchorlink&#039;.<br/>
	</hr>
	</p>';
$lang['admin']['help_function_anchor'] = '	<h3>Was macht dieser Tag?</h3>
	<p>Erzeugt einen Anker-Link.</p>
	<h3>Wie wird er eingesetzt?</h3>
	<p>F&uuml;gen Sie den Tag folgenderma&szlig;en in Ihr Template bzw. Ihre Seite ein: <code>{anchor anchor=&#039;hier&#039; text=&#039;Nach oben&#039;}</code></p>
	<h3>Welche Parameter sind m&ouml;glich?</h3>
	<ul>
	<li><em>(erforderlich)</em> <tt>anchor</tt> - Worauf der Link verweisen soll (der Teil nach der Raute)</li>
	<li><em>(erforderlich)</em> <tt>text</tt> - Der Text, der im Link angezeigt werden soll</li>
	<li><em>(optional)</em> <tt>class</tt> - die CSS-Klasse f&uuml;r den Link</li>
	<li><em>(optional)</em> <tt>title</tt> - das Titel-Attribut f&uuml;r den Link</li>
	<li><em>(optional)</em> <tt>tabindex</tt> - ein numerischer Tabindex f&uuml;r den Link</li>
	<li><em>(optional)</em> <tt>accesskey</tt> - ein Accesskey f&uuml;r den Link</li>
	<li><em>(optional)</em> <tt>onlyhref</tt> - Nur die Referenz (href) anzeigen. Die anderen Parameter sind ohne Funktion.</li>
	</ul>';
$lang['admin']['help_function_site_mapper'] = '	<h3>Was macht dieser Tag?</h3>
	<p>Mit diesem Tag wird nur der Syntax zur Verwendung des Men&uuml;Manager-Moduls und der Erstellung einer Sitemap vereinfacht.</p>
	<h3>Wie wird er eingesetzt?</h3>
	<p>F&uuml;gen Sie den Tag folgenderma&szlig;en in Ihr Template bzw. Ihre Seite ein: {site_mapper}</code></p><p>Weitere Informationen dazu finden Sie in der Hilfe des MenuManagers.</p>
  <p>Wenn kein Parameter f&uuml;r template angegeben wird, wird das Template minimal_menu.tpl verwendet.</p>
  <p>Weitere im Tag verwendete Parameter sind im Men&uuml;Manager-Template als  <code>$menuparams.paramname}</code> verf&uuml;gbar.</p>';
$lang['admin']['help_function_redirect_url'] = '<h3>Was macht dieser Tag?</h3>
  <p>Dieses Plugin erlaubt Ihnen, Ihre Besucher auf eine andere URL weiterzuleiten. Dies l&auml;sst sich auch gut mit Smarty-Bedingungen verwenden (zum Beispiel, wenn die Seite gerade wegen Wartungsarbeiten nicht erreichbar ist).</p>
<h3>Wie wird er eingesetzt?</h3>
<p>F&uuml;gen Sie den Tag folgenderma&szlig;en in Ihr Template bzw. Ihre Seite ein:</p>  <code>{redirect_url to=&#039;www.cmsmadesimple.de&#039;}</code>';
$lang['admin']['help_function_redirect_page'] = '<h3>Was macht dieser Tag?</h3>
 <p>Dieses Plugin erlaubt Ihnen, Ihre Besucher auf eine andere Seite weiterzuleiten. Dies l&auml;sst sich auch gut mit Smarty-Bedingungen verwenden (zum Beispiel eine Weiterleitung auf eine Login-Seite, wenn der Besucher noch nicht angemeldet ist).</p>
<h3>Wie wird er eingesetzt?</h3>
<p>F&uuml;gen Sie den Tag folgenderma&szlig;en in Ihr Template bzw. Ihre Seite ein:</p>  <code>{redirect_page page=&#039;seiten-alias&#039;}</code>';
$lang['admin']['of'] = 'von';
$lang['admin']['first'] = 'Erste';
$lang['admin']['last'] = 'Letzte';
$lang['admin']['adminspecialgroup'] = 'Achtung: Die Mitglieder dieser Gruppe haben automatisch alle Berechtigungen.';
$lang['admin']['disablesafemodewarning'] = 'Die Safe-Modus-Warnung in der Administration deaktivieren';
$lang['admin']['allowparamcheckwarnings'] = 'Parameter-&Uuml;berpr&uuml;fung zum Erzeugen von Warnhinweisen erlauben';
$lang['admin']['date_format_string'] = 'Standard-Datumsformat';
$lang['admin']['date_format_string_help'] = 'das gew&uuml;nschte Datumsformat (Formatierung siehe PHP-Befehl <em>strftime</em>)';
$lang['admin']['last_modified_at'] = 'Zuletzt bearbeitet am';
$lang['admin']['last_modified_by'] = 'Zuletzt bearbeitet von';
$lang['admin']['read'] = 'Lesen';
$lang['admin']['write'] = 'Schreiben';
$lang['admin']['execute'] = 'Ausf&uuml;hren';
$lang['admin']['group'] = 'Gruppe';
$lang['admin']['other'] = 'Andere';
$lang['admin']['event_desc_moduleupgraded'] = 'Ausf&uuml;hren, nachdem ein Modul aktualisiert wurde';
$lang['admin']['event_desc_moduleinstalled'] = 'Ausf&uuml;hren, nachdem ein Modul installiert wurde';
$lang['admin']['event_desc_moduleuninstalled'] = 'Ausf&uuml;hren, nachdem ein Modul deinstalliert wurde';
$lang['admin']['event_desc_edituserdefinedtagpost'] = 'Ausf&uuml;hren, nachdem ein benutzerdefinierter Tag aktualisiert wurde';
$lang['admin']['event_desc_edituserdefinedtagpre'] = 'Hinweis auf die Aktualisierung eines benutzerdefinierten Tags versenden';
$lang['admin']['event_desc_deleteuserdefinedtagpre'] = 'Hinweis auf die L&ouml;schung eines benutzerdefinierten Tags versenden';
$lang['admin']['event_desc_deleteuserdefinedtagpost'] = 'Ausf&uuml;hren, nachdem ein benutzerdefinierter Tag gel&ouml;scht wurde';
$lang['admin']['event_desc_adduserdefinedtagpost'] = 'Ausf&uuml;hren, nachdem ein benutzerdefinierter Tag eingef&uuml;gt wurde';
$lang['admin']['event_desc_adduserdefinedtagpre'] = 'Hinweis auf die Eingabe eines benutzerdefinierten Tags versenden';
$lang['admin']['global_umask'] = 'Maske zum Erstellen von Dateien (umask)';
$lang['admin']['errorcantcreatefile'] = 'Die Datei konnte nicht erstellt werden (Berechtigungsproblem?)';
$lang['admin']['errormoduleversionincompatible'] = 'Das Modul ist mit dieser CMS-Version nicht kompatibel.';
$lang['admin']['errormodulenotloaded'] = 'Interner Fehler, das Modul wurde nicht instanziiert.';
$lang['admin']['errormodulenotfound'] = 'Interner Fehler, konnte eine Modulinstanz nicht finden.';
$lang['admin']['errorinstallfailed'] = 'Die Modulinstallation ist fehlgeschlagen.';
$lang['admin']['errormodulewontload'] = 'Problem beim Instantiieren eines verf&uuml;gbaren Moduls';
$lang['admin']['frontendlang'] = 'Standardsprache f&uuml;r die Webseite';
$lang['admin']['info_edituser_password'] = '&Auml;ndern Sie dieses Feld, um das Passwort des Benutzers zu &auml;ndern.';
$lang['admin']['info_edituser_passwordagain'] = '&Auml;ndern Sie dieses Feld, um das Passwort des Benutzers zu &auml;ndern.';
$lang['admin']['originator'] = 'Ersteller';
$lang['admin']['module_name'] = 'Name des Moduls';
$lang['admin']['event_name'] = 'Name des Ereignisses';
$lang['admin']['event_description'] = 'Beschreibung des Ereignisses';
$lang['admin']['error_delete_default_parent'] = 'Sie k&ouml;nnen die &uuml;bergeordnete Seite der Startseite nicht l&ouml;schen.';
$lang['admin']['jsdisabled'] = 'Zum Ausf&uuml;hren dieser Funktion muss auf Ihrem Rechner Javascript aktiviert sein.';
$lang['admin']['order'] = 'Reihenfolge';
$lang['admin']['reorderpages'] = 'Seiten neu ordnen';
$lang['admin']['reorder'] = 'Neu ordnen';
$lang['admin']['page_reordered'] = 'Die Seite wurde erfolgreich neu eingeordnet.';
$lang['admin']['pages_reordered'] = 'Die Seiten wurden erfolgreich neu geordnet.';
$lang['admin']['sibling_duplicate_order'] = 'Zwei Seiten einer Ebene d&uuml;rfen nicht die gleiche Seitennummer haben. Die Seiten wurden nicht neu geordnet.';
$lang['admin']['no_orders_changed'] = 'Sie haben die Funktion zur Neuordnung der Seiten gew&auml;hlt, aber es wurde keine Reihenfolge ge&auml;ndert. Die Seiten wurden nicht neu geordnet.';
$lang['admin']['order_too_small'] = 'Eine Seitennummer darf nicht Null sein. Die Seiten wurden nicht neu geordnet.';
$lang['admin']['order_too_large'] = 'Die Seitennummer darf nicht gr&ouml;&szlig;er sein als die Anzahl der Seiten in dieser Ebene. Die Seiten wurden nicht neu geordnet.';
$lang['admin']['user_tag'] = 'Benutzer-Tag';
$lang['admin']['add'] = 'Hinzuf&uuml;gen';
$lang['admin']['CSS'] = 'CSS ';
$lang['admin']['about'] = '&Uuml;ber';
$lang['admin']['action'] = 'Aktion';
$lang['admin']['actionstatus'] = 'Aktion/Status';
$lang['admin']['active'] = 'Aktiv';
$lang['admin']['addcontent'] = 'Neue Seite hinzuf&uuml;gen';
$lang['admin']['cantremove'] = 'Kann aktuell nicht entfernt werden (Verzeichnis-Berechtigung)';
$lang['admin']['changepermissions'] = 'Berechtigungen &auml;ndern';
$lang['admin']['changepermissionsconfirm'] = 'SICHERHEITSHINWEIS\n\nMit diese Aktion werden alle vom Modul erstellten Dateien als vom Webserver beschreibbar gekennzeichnet.\nWollen Sie das wirklich?';
$lang['admin']['contentadded'] = 'Der Inhalt wurde der Datenbank erfolgreich hinzugef&uuml;gt.';
$lang['admin']['contentupdated'] = 'Der Inhalt wurde erfolgreich aktualisiert.';
$lang['admin']['contentdeleted'] = 'Der Inhalt wurde erfolgreich aus der Datenbank entfernt.';
$lang['admin']['success'] = 'Erfolgreich abgeschlossen';
$lang['admin']['addcss'] = 'Neues Stylesheet hinzuf&uuml;gen';
$lang['admin']['addgroup'] = 'Neue Gruppe hinzuf&uuml;gen';
$lang['admin']['additionaleditors'] = 'Weitere Bearbeiter';
$lang['admin']['addtemplate'] = 'Neues Template hinzuf&uuml;gen';
$lang['admin']['adduser'] = 'Neuen Benutzer hinzuf&uuml;gen';
$lang['admin']['addusertag'] = 'Einen benutzerdefinierten Tag hinzuf&uuml;gen';
$lang['admin']['adminaccess'] = 'In der Administration anmelden';
$lang['admin']['adminlog'] = 'Systemprotokoll';
$lang['admin']['adminlogcleared'] = 'Das Systemprotokoll wurde erfolgreich gel&ouml;scht.';
$lang['admin']['adminlogempty'] = 'Das Systemprotokoll ist leer.';
$lang['admin']['adminsystemtitle'] = 'CMS Administration';
$lang['admin']['adminpaneltitle'] = 'CMS Made Simple - Administration';
$lang['admin']['advanced'] = 'Erweitert';
$lang['admin']['aliasalreadyused'] = 'Dieser Alias wird bereits von einer anderen Seite verwendet. Bitte &auml;ndern Sie den &quot;Seiten-Alias&quot; im Reiter &quot;Optionen&quot;.';
$lang['admin']['aliasmustbelettersandnumbers'] = 'Der Alias darf nur aus Buchstaben und Zahlen bestehen.';
$lang['admin']['aliasnotaninteger'] = 'Der Alias darf keine reine Zahl sein.';
$lang['admin']['allpagesmodified'] = 'Alle Seiten wurden ge&auml;ndert!';
$lang['admin']['assignments'] = 'Benutzer verkn&uuml;pfen';
$lang['admin']['associationexists'] = 'Diese Verkn&uuml;pfung exisitiert bereits.';
$lang['admin']['autoinstallupgrade'] = 'Automatisch installieren oder aktualisieren';
$lang['admin']['back'] = 'Zur&uuml;ck zur &Uuml;bersicht';
$lang['admin']['backtoplugins'] = 'Zur&uuml;ck zur Plugin-Liste';
$lang['admin']['cancel'] = 'Abbrechen';
$lang['admin']['cantchmodfiles'] = 'Die Berechtigungen zu einigen Dateien konnten nicht ge&auml;ndert werden.';
$lang['admin']['cantremovefiles'] = 'Beim Entfernen von Dateien sind Probleme aufgetreten (Berechtigungen?)';
$lang['admin']['confirmcancel'] = 'Wollen Sie wirklich alle &Auml;nderungen r&uuml;ckg&auml;ngig machen? Dann klicken Sie auf &quot;OK&quot;. Um die Bearbeitung fortzusetzen, klicken Sie auf &quot;Abbrechen&quot;.';
$lang['admin']['canceldescription'] = '&Auml;nderungen r&uuml;ckg&auml;ngig machen';
$lang['admin']['clearadminlog'] = 'Systemprotokoll l&ouml;schen';
$lang['admin']['code'] = 'PHP-Code';
$lang['admin']['confirmdefault'] = 'Wollen Sie wirklich die Seite - %s - als Startseite f&uuml;r Ihre Webseite festlegen?';
$lang['admin']['confirmdeletedir'] = 'Wollen Sie wirklich dieses Verzeichnis und dessen Inhalte l&ouml;schen?';
$lang['admin']['content'] = 'Inhalte';
$lang['admin']['contentmanagement'] = 'Inhaltsverwaltung';
$lang['admin']['contenttype'] = 'Inhaltstyp';
$lang['admin']['copy'] = 'Kopieren';
$lang['admin']['copytemplate'] = 'Template kopieren';
$lang['admin']['create'] = 'Anlegen';
$lang['admin']['createnewfolder'] = 'Neuen Ordner anlegen';
$lang['admin']['cssalreadyused'] = 'Der CSS-Name ist bereits in Benutzung.';
$lang['admin']['cssmanagement'] = 'CSS-Verwaltung';
$lang['admin']['currentassociations'] = 'Aktuelle Verkn&uuml;pfung';
$lang['admin']['currentdirectory'] = 'Aktuelles Verzeichnis';
$lang['admin']['currentgroups'] = 'Aktuelle Gruppen';
$lang['admin']['currentpages'] = 'Aktuelle Seiten';
$lang['admin']['currenttemplates'] = 'Aktuelles Template';
$lang['admin']['currentusers'] = 'Aktuelle Benutzer';
$lang['admin']['custom404'] = 'Inhalt der Fehlermeldung (404)';
$lang['admin']['database'] = 'Datenbank';
$lang['admin']['databaseprefix'] = 'Datenbank-Pr&auml;fix';
$lang['admin']['databasetype'] = 'Datenbank-Typ';
$lang['admin']['date'] = 'Datum';
$lang['admin']['default'] = 'Standard';
$lang['admin']['delete'] = 'L&ouml;schen';
$lang['admin']['deleteconfirm'] = 'Wollen Sie - %s - wirklich l&ouml;schen?';
$lang['admin']['deleteassociationconfirm'] = 'Wollen Sie die Verkn&uuml;pfung mit - %s - wirklich l&ouml;schen?';
$lang['admin']['deletecss'] = 'Stylesheet l&ouml;schen';
$lang['admin']['dependencies'] = 'Ben&ouml;tigte Module';
$lang['admin']['description'] = 'Beschreibung';
$lang['admin']['directoryexists'] = 'Dieses Verzeichnis existiert bereits.';
$lang['admin']['down'] = 'Nach unten';
$lang['admin']['edit'] = 'Bearbeiten';
$lang['admin']['editconfiguration'] = 'Konfiguration bearbeiten';
$lang['admin']['editcontent'] = 'Inhalt bearbeiten';
$lang['admin']['editcss'] = 'Stylesheet bearbeiten';
$lang['admin']['editcsssuccess'] = 'Stylesheet aktualisiert';
$lang['admin']['editgroup'] = 'Gruppe bearbeiten';
$lang['admin']['editpage'] = 'Seite bearbeiten';
$lang['admin']['edittemplate'] = 'Template bearbeiten';
$lang['admin']['edittemplatesuccess'] = 'Template aktualisiert';
$lang['admin']['edituser'] = 'Benutzer bearbeiten';
$lang['admin']['editusertag'] = 'Benutzerdefinierten Tag bearbeiten';
$lang['admin']['usertagadded'] = 'Der benutzerdefinierte Tag wurde hinzugef&uuml;gt.';
$lang['admin']['usertagupdated'] = 'Der benutzerdefinierte Tag wurde aktualisiert.';
$lang['admin']['usertagdeleted'] = 'Der benutzerdefinierte Tag wurde entfernt.';
$lang['admin']['email'] = 'Email-Adresse';
$lang['admin']['errorattempteddowngrade'] = 'Die Installation dieses Moduls h&auml;tte einen R&uuml;ckschritt auf eine &auml;ltere Version zur Folge.  Operation abgebrochen!';
$lang['admin']['errorchildcontent'] = 'Der Inhalt hat Unterseiten. Bitte entfernen Sie diese zuerst.';
$lang['admin']['errorcopyingtemplate'] = 'Beim Kopieren eines Templates ist ein Fehler aufgetreten.';
$lang['admin']['errorcouldnotparsexml'] = 'Fehler bei der Syntaxanalyse der XML-Datei. Bitte stellen Sie sicher, dass Sie eine XML-Datei und nicht eine .tar.gz- oder .zip-Datei hochladen.';
$lang['admin']['errorcreatingassociation'] = 'Beim Erstellen der Verkn&uuml;pfung ist ein Fehler aufgetreten.';
$lang['admin']['errorcssinuse'] = 'Das Stylesheet wird von Templates oder Seiten verwendet. Bitte entfernen Sie zuerst diese Verkn&uuml;pfungen.';
$lang['admin']['errordefaultpage'] = 'Die aktuelle Startseite kann nicht gel&ouml;scht werden. Sie m&uuml;ssen erst eine andere als Startseite festgelegen.';
$lang['admin']['errordeletingassociation'] = 'Beim L&ouml;schen der Verkn&uuml;pfung ist ein Fehler aufgetreten.';
$lang['admin']['errordeletingcss'] = 'Beim L&ouml;schen des Stylesheets ist ein Fehler aufgetreten.';
$lang['admin']['errordeletingdirectory'] = 'Das Verzeichnis konnte nicht gel&ouml;scht werden. Zugriffsprobleme?';
$lang['admin']['errordeletingfile'] = 'Die Datei konnte nicht gel&ouml;scht werden. Zugriffsprobleme?';
$lang['admin']['errordirectorynotwritable'] = 'Sie haben keine Berechtigung, in dieses Verzeichnis zu schreiben. Dies kann an fehlenden Dateiberechtigungen oder den Eigentumsverh&auml;ltnissen liegen. Es k&ouml;nnte aber auch eine Auswirkung des Safe-Modus Ihres Servers sein.';
$lang['admin']['errordtdmismatch'] = 'Die DTD-Version fehlt oder ist mit der XML-Datei nicht kompatibel.';
$lang['admin']['errorgettingcssname'] = 'Fehler beim Namen des Stylesheets';
$lang['admin']['errorgettingtemplatename'] = 'Fehler beim Namen des Templates';
$lang['admin']['errorincompletexml'] = 'Die XML-Datei ist unvollst&auml;ndig oder ung&uuml;ltig.';
$lang['admin']['uploadxmlfile'] = 'Ein Modul &uuml;ber eine XML-Datei installieren';
$lang['admin']['cachenotwritable'] = 'Das Cache-Verzeichnis ist nicht beschreibbar. Das Leeren des Caches wird daher nicht funktionieren. Bitte geben Sie dem Verzeichnis tmp/cache die vollen Lese-/Schreib- und Ausf&uuml;hrungsrechte (chmod 777). Eventuell sollten Sie auch den Safe-Modus des Servers deaktivieren.';
$lang['admin']['modulesnotwritable'] = 'Der Modul-Ordner ist schreibgesch&uuml;tzt. Wenn Sie Module als XML-Dateien installieren wollen, muss der Modul-Ordner die vollen Lese-/Schreib-/Ausf&uuml;hrungsrechte haben (chmod 777). Es k&ouml;nnte aber auch eine Auswirkung des Safe-Modus Ihres Servers sein.';
$lang['admin']['noxmlfileuploaded'] = 'Es wurde keine Datei hochgeladen. Zur Installation von Modulen &uuml;ber eine XML-Datei m&uuml;ssen Sie eine Modul-XML-Datei ausw&auml;hlen und diese anschlie&szlig;end von Ihrem Computer auf den Server hochladen.';
$lang['admin']['errorinsertingcss'] = 'Beim Speichern des Stylesheets ist ein Fehler aufgetreten.';
$lang['admin']['errorinsertinggroup'] = 'Beim Speichern der Gruppe ist ein Fehler aufgetreten.';
$lang['admin']['errorinsertingtag'] = 'Beim Speichern des benutzerdefinierten Tags ist ein Fehler aufgetreten.';
$lang['admin']['errorinsertingtemplate'] = 'Beim Speichern des Templates ist ein Fehler aufgetreten.';
$lang['admin']['errorinsertinguser'] = 'Beim Speichern des Benutzers ist ein Fehler aufgetreten.';
$lang['admin']['errornofilesexported'] = 'Beim XML-Export der Datei ist ein Fehler aufgetreten.';
$lang['admin']['errorretrievingcss'] = 'Beim Speichern des Stylesheets ist ein Fehler aufgetreten.';
$lang['admin']['errorretrievingtemplate'] = 'Beim Speichern des Templates ist ein Fehler aufgetreten.';
$lang['admin']['errortemplateinuse'] = 'Das Template wird von einer Seite benutzt. Bitte entfernen Sie diese zuerst.';
$lang['admin']['errorupdatingcss'] = 'Beim Aktualisieren des Stylesheets ist ein Fehler aufgetreten.';
$lang['admin']['errorupdatinggroup'] = 'Beim Aktualisieren der Gruppe ist ein Fehler aufgetreten.';
$lang['admin']['errorupdatingpages'] = 'Beim Aktualisieren der Seiten ist ein Fehler aufgetreten.';
$lang['admin']['errorupdatingtemplate'] = 'Beim Aktualisieren des Templates ist ein Fehler aufgetreten.';
$lang['admin']['errorupdatinguser'] = 'Beim Aktualisieren des Benutzers ist ein Fehler aufgetreten.';
$lang['admin']['errorupdatingusertag'] = 'Beim Aktualisieren des benutzerdefinierten Tags ist ein Fehler aufgetreten.';
$lang['admin']['erroruserinuse'] = 'Dieser Benutzer ist der Eigent&uuml;mer von Inhalten. Um ihn l&ouml;schen zu k&ouml;nnen, m&uuml;ssen Sie zuerst die Seiten anderen Benutzern zuordnen.';
$lang['admin']['eventhandlers'] = 'Ereignisverwaltung';
$lang['admin']['editeventhandler'] = 'Ereignisbehandlung bearbeiten';
$lang['admin']['eventhandlerdescription'] = 'Ereignisse mit benutzerdefinierten Tags verkn&uuml;pfen';
$lang['admin']['export'] = 'Exportieren';
$lang['admin']['event'] = 'Ereignis';
$lang['admin']['false'] = 'Nein';
$lang['admin']['settrue'] = 'Auf Ja setzen';
$lang['admin']['filecreatedirnodoubledot'] = 'Der Verzeichnisname darf die Zeichen &#039;..&#039; nicht enthalten.';
$lang['admin']['filecreatedirnoname'] = 'Ein Verzeichnis kann ohne Namen nicht angelegt werden.';
$lang['admin']['filecreatedirnoslash'] = 'Der Verzeichnisname darf die Zeichen &#039;/&#039; oder &#039;\&#039; nicht enthalten.';
$lang['admin']['filemanagement'] = 'Dateiverwaltung';
$lang['admin']['filename'] = 'Dateiname';
$lang['admin']['filenotuploaded'] = 'Die Datei konnte nicht hochgeladen werden. Berechtigungsprobleme?';
$lang['admin']['filesize'] = 'Dateigr&ouml;&szlig;e';
$lang['admin']['firstname'] = 'Vorname';
$lang['admin']['groupmanagement'] = 'Gruppenverwaltung';
$lang['admin']['grouppermissions'] = 'Gruppenrechte';
$lang['admin']['handler'] = 'Behandlung (benutzerdefinierter Tag)';
$lang['admin']['headtags'] = 'Head-Tags';
$lang['admin']['help'] = 'Hilfe';
$lang['admin']['new_window'] = '&ouml;ffnet sich im neuen Fenster';
$lang['admin']['helpwithsection'] = 'Hilfe f&uuml;r %s';
$lang['admin']['helpaddtemplate'] = '<p>Templates definieren das Aussehen Ihrer Webseite.</p><p>Hier legen Sie das Layout an und f&uuml;gen &uuml;ber den Stylesheetbereich die CSS-Anweisungen f&uuml;r die verschiedenen Elemente Ihrer Seite hinzu.</p>';
$lang['admin']['helplisttemplate'] = '<p>Hier werden Templates angelegt, bearbeitet, kopiert oder gel&ouml;scht.</p><p>Um ein neues Template zu erstellen, klicken Sie auf <u>Neues Template hinzuf&uuml;gen</u>.</p><p>Wenn alle Inhaltsseiten das selbe Template verwenden sollen, klicken Sie auf <u>Auf alle Seiten anwenden</u>.</p><p>Wenn Sie ein bereits vorhandenes Template duplizieren m&ouml;chten, klicken Sie auf das <u>Kopieren</u>-Icon. Anschlie&szlig;end werden Sie nach einem Namen f&uuml;r das neue Template gefragt.</p>';
$lang['admin']['home'] = 'Startseite';
$lang['admin']['homepage'] = 'Die Startseite f&uuml;r die Administration w&auml;hlen';
$lang['admin']['hostname'] = 'Name des Hosts';
$lang['admin']['idnotvalid'] = 'Die vorgegebene ID ist ung&uuml;tig.';
$lang['admin']['imagemanagement'] = 'Bildverwaltung';
$lang['admin']['informationmissing'] = 'Vermisse die Information';
$lang['admin']['install'] = 'Installieren';
$lang['admin']['invalidcode'] = 'Es wurde fehlerhafter Code eingegeben.';
$lang['admin']['illegalcharacters'] = 'Ung&uuml;ltige Zeichen im Feld %s.';
$lang['admin']['invalidcode_brace_missing'] = 'Ungleicher Wert der Klammern';
$lang['admin']['invalidtemplate'] = 'Das Template ist ung&uuml;ltig.';
$lang['admin']['itemid'] = 'Eintrags-ID';
$lang['admin']['itemname'] = 'Name des Eintrags';
$lang['admin']['language'] = 'Sprache f&uuml;r die Administration';
$lang['admin']['lastname'] = 'Nachname';
$lang['admin']['logout'] = 'Abmelden';
$lang['admin']['loginprompt'] = 'Um in die Administration zu gelangen, m&uuml;ssen Sie einen g&uuml;ltige Benutzernamen eingeben.';
$lang['admin']['logintitle'] = 'CMS Made Simple Administration - Anmeldung';
$lang['admin']['menutext'] = 'Men&uuml;text';
$lang['admin']['missingparams'] = 'Einige Parameter sind nicht vorhanden oder falsch.';
$lang['admin']['modifygroupassignments'] = 'Gruppenbeziehungen bearbeiten';
$lang['admin']['moduleabout'] = '&Uuml;ber das Modul %s';
$lang['admin']['modulehelp'] = 'Hilfe f&uuml;r das Modul %s';
$lang['admin']['msg_defaultcontent'] = 'Hier geben Sie den Inhalt ein, der bei Erstellung einer neuen Seite automatisch eingef&uuml;gt werden soll';
$lang['admin']['msg_defaultmetadata'] = 'Hier geben Sie die Metadaten ein, die bei Erstellung einer neuen Seite automatisch eingef&uuml;gt werden sollen';
$lang['admin']['wikihelp'] = 'Hilfe im Wiki';
$lang['admin']['moduleinstalled'] = 'Dieses Modul ist bereits installiert.';
$lang['admin']['moduleinterface'] = '%s Schnittstelle';
$lang['admin']['modules'] = 'Module';
$lang['admin']['move'] = 'Verschieben';
$lang['admin']['name'] = 'Name ';
$lang['admin']['needpermissionto'] = 'Sie ben&ouml;tigen Sie die Berechtigung &#039;%s&#039;, um diese Funktion nutzen zu k&ouml;nnen.';
$lang['admin']['needupgrade'] = 'Aktualisierung erforderlich!';
$lang['admin']['newtemplatename'] = 'Neuer Template-Name';
$lang['admin']['next'] = 'N&auml;chste';
$lang['admin']['noaccessto'] = 'Kein Zugriff auf %s';
$lang['admin']['nocss'] = 'Kein Stylesheet';
$lang['admin']['noentries'] = 'Keine Eintr&auml;ge';
$lang['admin']['nofieldgiven'] = 'Kein Wert f&uuml;r %s vorgegeben!';
$lang['admin']['nofiles'] = 'Keine Dateien';
$lang['admin']['nopasswordmatch'] = 'Die Passw&ouml;rter stimmen nicht &uuml;berein.';
$lang['admin']['norealdirectory'] = 'Kein Verzeichnis vorgegeben';
$lang['admin']['norealfile'] = 'Keine Datei vorgegeben';
$lang['admin']['notinstalled'] = 'Nicht installiert';
$lang['admin']['overwritemodule'] = 'Bereits existierende Module &uuml;berschreiben';
$lang['admin']['owner'] = 'Eigent&uuml;mer';
$lang['admin']['pagealias'] = 'Seiten-Alias';
$lang['admin']['pagedefaults'] = 'Seiten-Vorgaben';
$lang['admin']['pagedefaultsdescription'] = 'Hier k&ouml;nnen Sie die Standardwerte/-inhalte f&uuml;r neue Seiten festlegen';
$lang['admin']['parent'] = '&Uuml;bergeordnete Seite';
$lang['admin']['password'] = 'Passwort';
$lang['admin']['passwordagain'] = 'Passwort (noch einmal)';
$lang['admin']['permission'] = 'Berechtigung';
$lang['admin']['permissions'] = 'Berechtigungen';
$lang['admin']['permissionschanged'] = 'Die Berechtigungen wurden aktualisiert.';
$lang['admin']['pluginabout'] = '&Uuml;ber den Tag  &#039;%s&#039;';
$lang['admin']['pluginhelp'] = 'Hilfe f&uuml;r den Tag &#039;%s&#039;';
$lang['admin']['pluginmanagement'] = 'Plugin-Verwaltung';
$lang['admin']['prefsupdated'] = 'Die Einstellungen wurden aktualisiert.';
$lang['admin']['preview'] = 'Vorschau';
$lang['admin']['previewdescription'] = '&Auml;nderungs-Vorschau';
$lang['admin']['previous'] = 'Vorherige';
$lang['admin']['remove'] = 'Entfernen';
$lang['admin']['removeconfirm'] = 'Diese Aktion entfernt alle von diesem Modul erstellten Dateien dauerhaft aus dieser Installation.\nWollen Sie das wirklich?';
$lang['admin']['removecssassociation'] = 'Stylesheet-Verkn&uuml;pfung entfernen';
$lang['admin']['saveconfig'] = 'Konfiguration speichern';
$lang['admin']['send'] = 'Absenden';
$lang['admin']['setallcontent'] = 'Auf alle Seiten anwenden';
$lang['admin']['setallcontentconfirm'] = 'Wollen Sie wirklich dieses Template allen Seiten zuordnen?';
$lang['admin']['showinmenu'] = 'Im Men&uuml; anzeigen';
$lang['admin']['showsite'] = 'Webseite anzeigen';
$lang['admin']['sitedownmessage'] = 'Wartungsmeldung';
$lang['admin']['siteprefs'] = 'Globale Einstellungen';
$lang['admin']['status'] = 'Status ';
$lang['admin']['stylesheet'] = 'Stylesheet ';
$lang['admin']['submit'] = 'Absenden';
$lang['admin']['submitdescription'] = '&Auml;nderungen speichern';
$lang['admin']['tags'] = 'Tags ';
$lang['admin']['template'] = 'Template ';
$lang['admin']['templateexists'] = 'Ein Template mit diesem Namen existiert bereits.';
$lang['admin']['templatemanagement'] = 'Template-Verwaltung';
$lang['admin']['title'] = 'Titel';
$lang['admin']['tools'] = 'Werkzeuge';
$lang['admin']['true'] = 'Ja';
$lang['admin']['setfalse'] = 'Auf Nein setzen';
$lang['admin']['type'] = 'Typ';
$lang['admin']['typenotvalid'] = 'Typ ist ung&uuml;ltig.';
$lang['admin']['uninstall'] = 'Deinstallieren';
$lang['admin']['uninstallconfirm'] = 'Wollen Sie dieses Modul wirklich deinstallieren? ';
$lang['admin']['up'] = 'Nach oben';
$lang['admin']['upgrade'] = 'Aktualisieren';
$lang['admin']['upgradeconfirm'] = 'Wollen Sie dieses Modul wirklich aktualisieren?';
$lang['admin']['uploadfile'] = 'Datei hochladen';
$lang['admin']['url'] = 'URL ';
$lang['admin']['useadvancedcss'] = 'Die erweiterte Stylesheet-Verwaltung verwenden';
$lang['admin']['user'] = 'Benutzer';
$lang['admin']['userdefinedtags'] = 'Benutzerdefinierte Tags';
$lang['admin']['usermanagement'] = 'Benutzerverwaltung';
$lang['admin']['username'] = 'Benutzername';
$lang['admin']['usernameincorrect'] = 'Benutzername oder Passwort ist falsch';
$lang['admin']['userprefs'] = 'Benutzerspezifische Einstellungen';
$lang['admin']['usersassignedtogroup'] = 'Benutzerverkn&uuml;pfungen zur Gruppe &#039;%s&#039;';
$lang['admin']['usertagexists'] = 'Ein Tag mit dem Namen existiert bereits. Bitte w&auml;hlen Sie einen anderen.';
$lang['admin']['usewysiwyg'] = 'WYSIWYG-Editor f&uuml;r Inhalte verwenden';
$lang['admin']['version'] = 'Version ';
$lang['admin']['view'] = 'Ansehen';
$lang['admin']['welcomemsg'] = 'Willkommen %s';
$lang['admin']['directoryabove'] = '&Uuml;bergeordnetes Verzeichnis ';
$lang['admin']['nodefault'] = 'Kein Standard gew&auml;hlt';
$lang['admin']['blobexists'] = 'Ein globaler Inhaltsblock mit diesem Namen existiert bereits.';
$lang['admin']['blobmanagement'] = 'Verwaltung der globalen Inhaltsbl&ouml;cke';
$lang['admin']['errorinsertingblob'] = 'Beim Speichern des globalen Inhaltsblocks ist ein Fehler aufgetreten.';
$lang['admin']['addhtmlblob'] = 'Neuen globalen Inhaltsblock hinzuf&uuml;gen';
$lang['admin']['edithtmlblob'] = 'Globalen Inhaltsblock bearbeiten';
$lang['admin']['edithtmlblobsuccess'] = 'Der globale Inhaltsblock wurde aktualisiert.';
$lang['admin']['tagtousegcb'] = 'Der Tag zur Verwendung dieses Blocks';
$lang['admin']['gcb_wysiwyg'] = 'WYSIWYG f&uuml;r Globale Inhaltsbl&ouml;cke aktivieren';
$lang['admin']['gcb_wysiwyg_help'] = 'Aktiviert den voreingestellten WYSIWYG-Editor f&uuml;r die Bearbeitung der Globalen Inhaltsbl&ouml;cke';
$lang['admin']['filemanager'] = 'Dateiverwaltung';
$lang['admin']['imagemanager'] = 'Bildverwaltung';
$lang['admin']['encoding'] = 'Kodierung';
$lang['admin']['clearcache'] = 'Zwischenspeicher l&ouml;schen';
$lang['admin']['clear'] = 'L&ouml;schen';
$lang['admin']['cachecleared'] = 'Zwischenspeicher gel&ouml;scht';
$lang['admin']['apply'] = '&Uuml;bernehmen';
$lang['admin']['applydescription'] = '&Auml;nderungen speichern und die Bearbeitung fortsetzen';
$lang['admin']['none'] = 'Kein(e)/ohne Vorgabe';
$lang['admin']['wysiwygtouse'] = 'Den WYSIWYG-Editor w&auml;hlen';
$lang['admin']['syntaxhighlightertouse'] = 'Den Syntax-Highlighter w&auml;hlen';
$lang['admin']['hasdependents'] = 'Wird von anderen Modulen ben&ouml;tigt';
$lang['admin']['missingdependency'] = 'Ben&ouml;tigt noch andere Module';
$lang['admin']['minimumversion'] = 'Minimale Version';
$lang['admin']['minimumversionrequired'] = 'Minimal erforderliche CMSms-Version';
$lang['admin']['maximumversion'] = 'Maximale Version';
$lang['admin']['maximumversionsupported'] = 'Maximal unterst&uuml;tzte CMSms-Version';
$lang['admin']['depsformodule'] = 'Ben&ouml;tigte Module f&uuml;r %s ';
$lang['admin']['installed'] = 'Installiert';
$lang['admin']['author'] = 'Autor';
$lang['admin']['changehistory'] = '&Auml;nderungsverlauf';
$lang['admin']['moduleerrormessage'] = 'Fehlernachricht f&uuml;r das Modul &#039;%s&#039;';
$lang['admin']['moduleupgradeerror'] = 'Beim Aktualisieren des Moduls ist ein Fehler aufgetreten.';
$lang['admin']['moduleinstallmessage'] = 'Installationsnachricht f&uuml;r das Modul &#039;%s&#039;';
$lang['admin']['moduleuninstallmessage'] = 'Deinstallationsnachricht f&uuml;r Modul &#039;%s&#039; ';
$lang['admin']['admintheme'] = 'Administrations-Theme';
$lang['admin']['addstylesheet'] = 'Ein Stylesheet hinzuf&uuml;gen';
$lang['admin']['editstylesheet'] = 'Stylesheet bearbeiten';
$lang['admin']['addcssassociation'] = 'Eine Stylesheet-Verkn&uuml;pfung hinzuf&uuml;gen';
$lang['admin']['attachstylesheet'] = 'Dieses Stylesheet hinzuf&uuml;gen';
$lang['admin']['attachtemplate'] = 'Diesem Template hinzuf&uuml;gen';
$lang['admin']['main'] = 'Hauptmen&uuml;';
$lang['admin']['pages'] = 'Seiten';
$lang['admin']['page'] = 'Seite';
$lang['admin']['files'] = 'Dateien';
$lang['admin']['layout'] = 'Layout ';
$lang['admin']['usersgroups'] = 'Benutzerverwaltung';
$lang['admin']['extensions'] = 'Erweiterungen';
$lang['admin']['preferences'] = 'Voreinstellungen';
$lang['admin']['admin'] = 'Webseiten-Administration';
$lang['admin']['viewsite'] = 'Webseite ansehen';
$lang['admin']['templatecss'] = 'Templates mit Stylesheet verkn&uuml;pfen';
$lang['admin']['plugins'] = 'Plugins ';
$lang['admin']['movecontent'] = 'Seiten verschieben';
$lang['admin']['module'] = 'Modul';
$lang['admin']['usertags'] = 'Benutzerdefinierte Tags';
$lang['admin']['htmlblobs'] = 'Globale Inhaltsbl&ouml;cke';
$lang['admin']['adminhome'] = 'Administration';
$lang['admin']['liststylesheets'] = 'Stylesheets';
$lang['admin']['preferencesdescription'] = 'Hier werden verschiedene, f&uuml;r die ganze Website g&uuml;ltige Einstellungen vorgenommen.';
$lang['admin']['adminlogdescription'] = 'Zeigt ein Protokoll der Aktivit&auml;ten aller Benutzer in der Administration.';
$lang['admin']['mainmenu'] = 'Hauptmen&uuml;';
$lang['admin']['users'] = 'Benutzer';
$lang['admin']['usersdescription'] = 'Hier werden die Benutzer verwaltet.';
$lang['admin']['groups'] = 'Gruppen';
$lang['admin']['groupsdescription'] = 'Hier werden die Benutzergruppen verwaltet.';
$lang['admin']['groupassignments'] = 'Gruppenbeziehungen';
$lang['admin']['groupassignmentdescription'] = 'Hier k&ouml;nnen Benutzer zu den Gruppen zugeordnet werden.';
$lang['admin']['groupperms'] = 'Gruppenberechtigungen';
$lang['admin']['grouppermsdescription'] = 'Hier werden die Berechtigungen f&uuml;r die Gruppen festgelegt.';
$lang['admin']['pagesdescription'] = 'Hier werden neue Seiten oder andere Inhalte erstellt und bearbeitet.';
$lang['admin']['htmlblobdescription'] = 'Globale Inhaltsbl&ouml;cke sind kleine Inhaltsteile bzw. Inhaltsschnipsel, die Sie in Seiten oder Templates (bei Bedarf auch mehrfach) einf&uuml;gen k&ouml;nnen.';
$lang['admin']['templates'] = 'Templates ';
$lang['admin']['templatesdescription'] = 'Hier werden Templates anlegt und bearbeitet. &Uuml;ber Templates wird das Aussehen Ihrer Webseite definiert.';
$lang['admin']['stylesheets'] = 'Stylesheets ';
$lang['admin']['stylesheetsdescription'] = 'Die Stylesheet-Verwaltung ist eine fortgeschrittene Methode, um Stylesheets (CSS) unabh&auml;ngig von den Templates zu gestalten.';
$lang['admin']['filemanagerdescription'] = 'Hochladen und Verwalten von Dateien';
$lang['admin']['imagemanagerdescription'] = 'Hochladen/Bearbeiten und Entfernen von Bildern';
$lang['admin']['moduledescription'] = 'CMS made simple kann mit Modulen um beliebige Funktionen erweitert werden.';
$lang['admin']['tagdescription'] = 'Tags sind kleine Funktionseinheiten, die in den Inhalt und/oder die Templates eingef&uuml;gt werden k&ouml;nnen.';
$lang['admin']['usertagdescription'] = 'Tags, die der Benutzer selbst erstellen und bearbeiteten kann, um bestimmte Aufgaben auszuf&uuml;hren und dann im Browser anzuzeigen zu lassen.';
$lang['admin']['installdirwarning'] = '<em><strong>Sicherheitswarnung:</strong></em> Das Installationsverzeichnis existiert noch. Bitte l&ouml;schen Sie es vollst&auml;ndig!';
$lang['admin']['subitems'] = 'Unterpunkte';
$lang['admin']['extensionsdescription'] = 'Module, Tags und weitere Optionen';
$lang['admin']['usersgroupsdescription'] = 'Verwaltung von Benutzern und Gruppen';
$lang['admin']['layoutdescription'] = 'Optionen zur Seitengestaltung';
$lang['admin']['admindescription'] = 'Funktionen f&uuml;r die Verwaltung der Webseite';
$lang['admin']['contentdescription'] = 'Hier k&ouml;nnen Inhalte hinzugef&uuml;gt und bearbeitet werden.';
$lang['admin']['enablecustom404'] = 'Eigene Fehlermeldung (404) aktivieren';
$lang['admin']['enablesitedown'] = 'Wartungsmeldung aktivieren';
$lang['admin']['bookmarks'] = 'Lesezeichen';
$lang['admin']['user_created'] = 'Benutzerdefinierte Lesezeichen';
$lang['admin']['forums'] = 'Foren';
$lang['admin']['wiki'] = 'Wiki/Handbuch';
$lang['admin']['irc'] = 'IRC-Chat';
$lang['admin']['module_help'] = 'Modulhilfe';
$lang['admin']['managebookmarks'] = 'Lesezeichen-Verwaltung';
$lang['admin']['editbookmark'] = 'Lesezeichen bearbeiten';
$lang['admin']['addbookmark'] = 'Neues Lesezeichen hinzuf&uuml;gen';
$lang['admin']['recentpages'] = 'Besuchte Seiten';
$lang['admin']['groupname'] = 'Gruppenname';
$lang['admin']['selectgroup'] = 'Gruppe w&auml;hlen';
$lang['admin']['updateperm'] = 'Berechtigungen aktualisieren';
$lang['admin']['admincallout'] = 'Lesezeichen des Administrators';
$lang['admin']['showbookmarks'] = 'Hiermit k&ouml;nnen die Lesezeichen des Administrators angezeigt werden.';
$lang['admin']['hide_help_links'] = 'Link &#039;Hilfe&#039; verbergen';
$lang['admin']['hide_help_links_help'] = 'Hiermit k&ouml;nnen die &#039;Hilfe&#039;-Links f&uuml;r die Wiki- und Modulhilfe im Kopf der Administrationsseiten ausgeblendet werden.';
$lang['admin']['showrecent'] = 'H&auml;ufig besuchten Seiten anzeigen';
$lang['admin']['attachtotemplate'] = 'Stylesheet mit Template verbinden';
$lang['admin']['attachstylesheets'] = 'Template mit Stylesheets verbinden';
$lang['admin']['indent'] = 'Die Hierarchie in der Seitenliste durch Einr&uuml;cken hervorheben ';
$lang['admin']['adminindent'] = 'Art der Inhaltsanzeige';
$lang['admin']['contract'] = 'Sektion zusammen falten';
$lang['admin']['expand'] = 'Sektion auseinander falten';
$lang['admin']['expandall'] = 'Alle Sektionen auseinander falten';
$lang['admin']['contractall'] = 'Alle Sektionen zusammen falten';
$lang['admin']['menu_bookmarks'] = '[+] ';
$lang['admin']['globalconfig'] = 'Globale Einstellungen';
$lang['admin']['adminpaging'] = 'Anzahl der Inhaltseintr&auml;ge pro Seite in der Seitenliste';
$lang['admin']['nopaging'] = 'Alle Eintr&auml;ge anzeigen';
$lang['admin']['myprefs'] = 'Meine Einstellungen';
$lang['admin']['myprefsdescription'] = 'Hier k&ouml;nnen Sie die Administration nach Ihren W&uuml;nschen anpassen.';
$lang['admin']['myaccount'] = 'Mein Konto';
$lang['admin']['myaccountdescription'] = 'Hier k&ouml;nnen Sie die Details zu Ihrem Konto aktualisieren.';
$lang['admin']['adminprefs'] = 'Benutzerspezifische Einstellungen';
$lang['admin']['adminprefsdescription'] = 'Hier k&ouml;nnen verschiedene Einstellungen f&uuml;r die Seitenadministration vorgenommen werden.';
$lang['admin']['managebookmarksdescription'] = 'Hier k&ouml;nnen Sie Ihre Administrations-Lesezeichen verwalten.';
$lang['admin']['options'] = 'Optionen';
$lang['admin']['langparam'] = 'Dieser Parameter legt die Sprache fest, die vom Modul f&uuml;r die Ausgabe auf der Webseite verwendet wird. Dies wird jedoch nicht von allen Modulen unterst&uuml;tzt bzw. ben&ouml;tigt.';
$lang['admin']['parameters'] = 'Parameter';
$lang['admin']['mediatype'] = 'Medientyp';
$lang['admin']['mediatype_'] = 'Keine Einstellung : wirkt auf alle Ausgabemedien';
$lang['admin']['mediatype_all'] = 'all : geeignet f&uuml;r alle Ausgabemedien.';
$lang['admin']['mediatype_aural'] = 'aural : f&uuml;r Sprachsysthesizer bestimmt.';
$lang['admin']['mediatype_braille'] = 'braille : f&uuml;r Blindenschrift-Tastme&szlig;wertgeber bestimmt.';
$lang['admin']['mediatype_embossed'] = 'embossed : f&uuml;r Blindenschrift-Drucker bestimmt.';
$lang['admin']['mediatype_handheld'] = 'handheld : f&uuml;r Handhelds bestimmt';
$lang['admin']['mediatype_print'] = 'print : f&uuml;r Dokumente bestimmt, die auf dem Bildschirm in der Druckvorschau angezeigt werden.';
$lang['admin']['mediatype_projection'] = 'projection : f&uuml;r projizierte Pr&auml;sentationen bestimmt, zum Beispiel f&uuml;r Projektoren oder den Druck auf Transparentfolien.';
$lang['admin']['mediatype_screen'] = 'screen : prim&auml;r f&uuml;r Computerfarbbildschirme bestimmt.';
$lang['admin']['mediatype_tty'] = 'tty : f&uuml;r Medien bestimmt, die eine feste Buchstabenlaufweite verwenden wie zum Beispiel Teletyper und Terminals.';
$lang['admin']['mediatype_tv'] = 'tv : f&uuml;r Fernseher-&auml;hnliche Ger&auml;te bestimmt.';
$lang['admin']['assignmentchanged'] = 'Die Gruppenzuweisungen wurden aktualisiert.';
$lang['admin']['stylesheetexists'] = 'Das Stylesheet existiert bereits.';
$lang['admin']['errorcopyingstylesheet'] = 'Fehler beim Kopieren des Stylesheets';
$lang['admin']['copystylesheet'] = 'Stylesheet kopieren';
$lang['admin']['newstylesheetname'] = 'Neuer Stylesheet-Name';
$lang['admin']['target'] = 'Ziel';
$lang['admin']['xml'] = 'XML ';
$lang['admin']['xmlmodulerepository'] = 'URL des ModuleRepository-SOAP-Servers';
$lang['admin']['metadata'] = 'Metadaten';
$lang['admin']['globalmetadata'] = 'Globale Metadaten';
$lang['admin']['titleattribute'] = 'Beschreibung (Titel-Attribut)';
$lang['admin']['tabindex'] = 'Tab-Index';
$lang['admin']['accesskey'] = 'Taste f&uuml;r Direktzugriff';
$lang['admin']['sitedownwarning'] = '<strong>Warnung:</strong> Auf Ihrer Webseite wird aktuell eine Wartungsmeldung angezeigt. Um dies r&uuml;ckg&auml;ngig zu machen, m&uuml;ssen Sie die Datei %s entfernen.';
$lang['admin']['deletecontent'] = 'Inhalt l&ouml;schen';
$lang['admin']['deletepages'] = 'Wollen Sie diese Seiten wirklich l&ouml;schen?';
$lang['admin']['selectall'] = 'Alle ausw&auml;hlen';
$lang['admin']['selecteditems'] = 'Ausgew&auml;hlte Eintr&auml;ge';
$lang['admin']['inactive'] = 'Inaktiv';
$lang['admin']['deletetemplates'] = 'Templates l&ouml;schen';
$lang['admin']['templatestodelete'] = 'Diese Templates werden gel&ouml;scht';
$lang['admin']['wontdeletetemplateinuse'] = 'Diese Templates sind in Benutzung und k&ouml;nnen daher nicht gel&ouml;scht werden.';
$lang['admin']['deletetemplate'] = 'Stylesheets l&ouml;schen';
$lang['admin']['stylesheetstodelete'] = 'Diese Stylesheets werden gel&ouml;scht';
$lang['admin']['sitename'] = 'Name der Webseite';
$lang['admin']['siteadmin'] = 'Seiten-Administration';
$lang['admin']['images'] = 'Bildverwaltung';
$lang['admin']['blobs'] = 'Globale Inhaltsbl&ouml;cke';
$lang['admin']['groupmembers'] = 'Gruppenzuweisungen';
$lang['admin']['troubleshooting'] = '(Fehlerbehebung)';
$lang['admin']['event_desc_loginpost'] = 'Ausf&uuml;hren, nachdem sich ein Benutzer in der Administration angemeldet hat';
$lang['admin']['event_desc_logoutpost'] = 'Ausf&uuml;hren, nachdem sich ein Benutzer in der Administration abgemeldet hat';
$lang['admin']['event_desc_adduserpre'] = 'Ausf&uuml;hren, bevor ein neuer Benutzer erstellt wird';
$lang['admin']['event_desc_adduserpost'] = 'Ausf&uuml;hren, nachdem ein neuer Benutzer erstellt wurde';
$lang['admin']['event_desc_edituserpre'] = 'Ausf&uuml;hren, bevor die &Auml;nderungen eines Benutzers gespeichert werden';
$lang['admin']['event_desc_edituserpost'] = 'Ausf&uuml;hren, nachdem die &Auml;nderungen eines Benutzers gespeichert wurden';
$lang['admin']['event_desc_deleteuserpre'] = 'Ausf&uuml;hren, bevor ein Benutzer aus dem System gel&ouml;scht wird';
$lang['admin']['event_desc_deleteuserpost'] = 'Ausf&uuml;hren, nachdem ein Benutzer aus dem System gel&ouml;scht wurde';
$lang['admin']['event_desc_addgrouppre'] = 'Ausf&uuml;hren, bevor eine neue Benutzergruppe erstellt wird';
$lang['admin']['event_desc_addgrouppost'] = 'Ausf&uuml;hren, nachdem eine neue Benutzergruppe erstellt wurde';
$lang['admin']['event_desc_changegroupassignpre'] = 'Ausf&uuml;hren, bevor eine Benutzerverkn&uuml;pfung mit einer Gruppe gespeichert wird';
$lang['admin']['event_desc_changegroupassignpost'] = 'Ausf&uuml;hren, nachdem eine Benutzerverkn&uuml;pfung mit einer Gruppe gespeichert wurde';
$lang['admin']['event_desc_editgrouppre'] = 'Ausf&uuml;hren, bevor die &Auml;nderungen einer Benutzergruppe gespeichert werden';
$lang['admin']['event_desc_editgrouppost'] = 'Ausf&uuml;hren, nachdem die &Auml;nderungen einer Benutzergruppe gespeichert wurden';
$lang['admin']['event_desc_deletegrouppre'] = 'Ausf&uuml;hren, bevor eine Benutzergruppe aus dem System gel&ouml;scht wird';
$lang['admin']['event_desc_deletegrouppost'] = 'Ausf&uuml;hren, nachdem eine Benutzergruppe aus dem System gel&ouml;scht wurde';
$lang['admin']['event_desc_addstylesheetpre'] = 'Ausf&uuml;hren, bevor ein neues Stylesheet erstellt wird';
$lang['admin']['event_desc_addstylesheetpost'] = 'Ausf&uuml;hren, nachdem ein neues Stylesheet erstellt wurde';
$lang['admin']['event_desc_editstylesheetpre'] = 'Ausf&uuml;hren, bevor die &Auml;nderungen eines Stylesheets gespeichert werden';
$lang['admin']['event_desc_editstylesheetpost'] = 'Ausf&uuml;hren, nachdem die &Auml;nderungen eines Stylesheets gespeichert wurden';
$lang['admin']['event_desc_deletestylesheetpre'] = 'Ausf&uuml;hren, bevor ein Stylesheet aus dem System gel&ouml;scht wird';
$lang['admin']['event_desc_deletestylesheetpost'] = 'Ausf&uuml;hren, nachdem ein Stylesheet aus dem System gel&ouml;scht wurde';
$lang['admin']['event_desc_addtemplatepre'] = 'Ausf&uuml;hren, bevor ein neues Template erstellt wird';
$lang['admin']['event_desc_addtemplatepost'] = 'Ausf&uuml;hren, nachdem ein neues Template erstellt wurde';
$lang['admin']['event_desc_edittemplatepre'] = 'Ausf&uuml;hren, bevor die &Auml;nderungen eines Templates gespeichert werden';
$lang['admin']['event_desc_edittemplatepost'] = 'Ausf&uuml;hren, nachdem die &Auml;nderungen eines Templates gespeichert wurden';
$lang['admin']['event_desc_deletetemplatepre'] = 'Ausf&uuml;hren, bevor ein Template aus dem System gel&ouml;scht wird';
$lang['admin']['event_desc_deletetemplatepost'] = 'Ausf&uuml;hren, nachdem ein Template aus dem System gel&ouml;scht wurde';
$lang['admin']['event_desc_templateprecompile'] = 'Ausf&uuml;hren, bevor ein Template von Smarty verarbeitet wird';
$lang['admin']['event_desc_templatepostcompile'] = 'Ausf&uuml;hren, nachdem ein Template von Smarty verarbeitet wurde';
$lang['admin']['event_desc_addglobalcontentpre'] = 'Ausf&uuml;hren, bevor ein neuer Globaler Inhaltsblock erstellt wird';
$lang['admin']['event_desc_addglobalcontentpost'] = 'Ausf&uuml;hren, nachdem ein neuer Globaler Inhaltsblock erstellt wurde';
$lang['admin']['event_desc_editglobalcontentpre'] = 'Ausf&uuml;hren, bevor die &Auml;nderungen eines Globalen Inhaltsblocks gespeichert werden';
$lang['admin']['event_desc_editglobalcontentpost'] = 'Ausf&uuml;hren, nachdem die &Auml;nderungen eines Globalen Inhaltsblocks gespeichert wurden';
$lang['admin']['event_desc_deleteglobalcontentpre'] = 'Ausf&uuml;hren, bevor ein Globaler Inhaltsblock aus dem System gel&ouml;scht wird';
$lang['admin']['event_desc_deleteglobalcontentpost'] = 'Ausf&uuml;hren, nachdem ein Globaler Inhaltsblock aus dem System gel&ouml;scht wurde';
$lang['admin']['event_desc_globalcontentprecompile'] = 'Ausf&uuml;hren, bevor ein Globaler Inhaltsblock von Smarty verarbeitet wird';
$lang['admin']['event_desc_globalcontentpostcompile'] = 'Ausf&uuml;hren, nachdem ein Globaler Inhaltsblock von Smarty verarbeitet wurde';
$lang['admin']['event_desc_contenteditpre'] = 'Ausf&uuml;hren, bevor die &Auml;nderungen des Inhaltes gespeichert werden';
$lang['admin']['event_desc_contenteditpost'] = 'Ausf&uuml;hren, nachdem die &Auml;nderungen des Inhalts gespeichert wurden';
$lang['admin']['event_desc_contentdeletepre'] = 'Ausf&uuml;hren, bevor Inhalte aus dem System gel&ouml;scht werden';
$lang['admin']['event_desc_contentdeletepost'] = 'Ausf&uuml;hren, nachdem Inhalte aus dem System gel&ouml;scht wurden';
$lang['admin']['event_desc_contentstylesheet'] = 'Ausf&uuml;hren, bevor das Stylesheet zum Browser gesandt wird';
$lang['admin']['event_desc_contentprecompile'] = 'Ausf&uuml;hren, bevor Inhalte von Smarty verarbeitet werden';
$lang['admin']['event_desc_contentpostcompile'] = 'Ausf&uuml;hren, nachdem Inhalte von Smarty verarbeitet wurden';
$lang['admin']['event_desc_contentpostrender'] = 'Ausf&uuml;hren, bevor Inhalte zum Browser gesandt werden';
$lang['admin']['event_desc_smartyprecompile'] = 'Ausf&uuml;hren, bevor irgend etwas von Smarty verarbeitet wird';
$lang['admin']['event_desc_smartypostcompile'] = 'Ausf&uuml;hren, nachdem irgend etwas von Smarty verarbeitet wurde';
$lang['admin']['event_help_loginpost'] = '<p>Wird ausgef&uuml;hrt, wenn ein Benutzer sich bei der Administration angemeldet hat.</p>
<h4>Parameter</h4>
<ul>
<li>&#039;user&#039; - Referenz auf den betroffenen Benutzer.</li>
</ul>';
$lang['admin']['event_help_logoutpost'] = '<p>Wird ausgef&uuml;hrt, nachdem ein Benutzer sich von der Administration abgemeldet hat.</p>
<h4>Parameter</h4>
<ul>
<li>&#039;user&#039; - Referenz auf den betroffenen Benutzer.</li>
</ul>';
$lang['admin']['event_help_adduserpre'] = '<p>Wird ausgef&uuml;hrt, bevor ein Benutzer angelegt wird.</p>
<h4>Parameter</h4>
<ul>
<li>&#039;user&#039; - Referenz auf den betroffenen Benutzer.</li>
</ul>';
$lang['admin']['event_help_adduserpost'] = '<p>Wird ausgef&uuml;hrt, nachdem ein Benutzer angelegt wurde.</p>
<h4>Parameter</h4>
<ul>
<li>&#039;user&#039; - Referenz auf den betroffenen Benutzer.</li>
</ul>';
$lang['admin']['event_help_edituserpre'] = '<p>Wird ausgef&uuml;hrt, bevor &Auml;nderungen eines Benutzer gespeichert werden.</p>
<h4>Parameter</h4>
<ul>
<li>&#039;user&#039; - Referenz auf den betroffenen Benutzer.</li>
</ul>';
$lang['admin']['event_help_edituserpost'] = '<p>Wird ausgef&uuml;hrt, nachdem &Auml;nderungen eines Benutzer gespeichert wurden.</p>
<h4>Parameter</h4>
<ul>
<li>&#039;user&#039; - Referenz auf den betroffenen Benutzer.</li>
</ul>';
$lang['admin']['event_help_deleteuserpre'] = '<p>Wird ausgef&uuml;hrt, bevor ein Benutzer gel&ouml;scht wird.</p>
<h4>Parameter</h4>
<ul>
<li>&#039;user&#039; - Referenz auf den betroffenen Benutzer.</li>
</ul>';
$lang['admin']['event_help_deleteuserpost'] = '<p>Wird ausgef&uuml;hrt, nachdem ein Benutzer gel&ouml;scht wurde.</p>
<h4>Parameter</h4>
<ul>
<li>&#039;user&#039; - Referenz auf den betroffenen Benutzer.</li>
</ul>';
$lang['admin']['event_help_addgrouppre'] = '<p>Wird ausgef&uuml;hrt, bevor eine Benutzergruppe angelegt wird.</p>
<h4>Parameter</h4>
<ul>
<li>&#039;group&#039; - Referenz auf die betroffene Benutzergruppe.</li>
</ul>';
$lang['admin']['event_help_addgrouppost'] = '<p>Wird ausgef&uuml;hrt, nachdem eine Benutzergruppe angelegt wurde.</p>
<h4>Parameter</h4>
<ul>
<li>&#039;group&#039; - Referenz auf die betroffene Benutzergruppe.</li>
</ul>';
$lang['admin']['event_help_changegroupassignpre'] = '<p>Ausf&uuml;hren, bevor eine Benutzerverkn&uuml;pfung mit einer Gruppe gespeichert wird</p>
<h4>Parameter></h4>
<ul>
<li>&#039;group&#039; - Referenz auf die betroffene Benutzergruppe.</li>
<li>&#039;users&#039; - Array von Referenzen auf die betroffenen Benutzer dieser Gruppe.</li>
</ul>';
$lang['admin']['event_help_changegroupassignpost'] = '<p>Ausf&uuml;hren, nachdem eine Benutzerverkn&uuml;pfung mit einer Gruppe gespeichert wurde</p>
<h4>Parameter></h4>
<ul>
<li>&#039;group&#039; - Referenz auf die betroffene Benutzergruppe.</li>
<li>&#039;users&#039; - Array von Referenzen auf die betroffenen Benutzer dieser Gruppe.</li>
</ul>';
$lang['admin']['event_help_editgrouppre'] = '<p>Wird ausgef&uuml;hrt, bevor &Auml;nderungen einer Benutzergruppe gespeichert werden.</p>
<h4>Parameter</h4>
<ul>
<li>&#039;group&#039; - Referenz auf die betroffene Benutzergruppe.</li>
</ul>';
$lang['admin']['event_help_editgrouppost'] = '<p>Wird ausgef&uuml;hrt, nachdem &Auml;nderungen einer Benutzergruppe gespeichert wurden.</p>
<h4>Parameter</h4>
<ul>
<li>&#039;group&#039; - Referenz auf die betroffene Benutzergruppe.</li>
</ul>';
$lang['admin']['event_help_deletegrouppre'] = '<p>Wird ausgef&uuml;hrt, bevor eine Benutzergruppe gel&ouml;scht wird.</p>
<h4>Parameter</h4>
<ul>
<li>&#039;group&#039; - Referenz auf die betroffene Benutzergruppe.</li>
</ul>';
$lang['admin']['event_help_deletegrouppost'] = '<p>Wird ausgef&uuml;hrt, nachdem eine Benutzergruppe gel&ouml;scht wurde.</p>
<h4>Parameter</h4>
<ul>
<li>&#039;group&#039; - Referenz auf die betroffene Benutzergruppe.</li>
</ul>';
$lang['admin']['event_help_addstylesheetpre'] = '<p>Wird ausgef&uuml;hrt, bevor ein Stylesheet angelegt wird.</p>
<h4>Parameter</h4>
<ul>
<li>&#039;stylesheet&#039; - Referenz auf den betroffenen Stylesheet.</li>
</ul>';
$lang['admin']['event_help_addstylesheetpost'] = '<p>Wird ausgef&uuml;hrt, nachdem ein Stylesheet angelegt wurde.</p>
<h4>Parameter</h4>
<ul>
<li>&#039;stylesheet&#039; - Referenz auf den betroffenen Stylesheet.</li>
</ul>';
$lang['admin']['event_help_editstylesheetpre'] = '<p>Wird ausgef&uuml;hrt, bevor &Auml;nderungen an einem Stylesheet gespeichert werden.</p>
<h4>Parameter</h4>
<ul>
<li>&#039;stylesheet&#039; - Referenz auf den betroffenen Stylesheet.</li>
</ul>';
$lang['admin']['event_help_editstylesheetpost'] = '<p>Wird ausgef&uuml;hrt, nachdem &Auml;nderungen an einem Stylesheet gespeichert wurden.</p>
<h4>Parameter</h4>
<ul>
<li>&#039;stylesheet&#039; - Referenz auf den betroffenen Stylesheet.</li>
</ul>';
$lang['admin']['event_help_deletestylesheetpre'] = '<p>Wird ausgef&uuml;hrt, bevor ein Stylesheet gel&ouml;scht wird.</p>
<h4>Parameter</h4>
<ul>
<li>&#039;stylesheet&#039; - Referenz auf den betroffenen Stylesheet.</li>
</ul>';
$lang['admin']['event_help_deletestylesheetpost'] = '<p>Wird ausgef&uuml;hrt, nachdem ein Stylesheet gel&ouml;scht wurde.</p>
<h4>Parameter</h4>
<ul>
<li>&#039;stylesheet&#039; - Referenz auf den betroffenen Stylesheet.</li>
</ul>';
$lang['admin']['event_help_addtemplatepre'] = '<p>Wird ausgef&uuml;hrt, bevor ein neues Template angelegt wird.</p>
<h4>Parameter</h4>
<ul>
<li>&#039;template&#039; - Referenz auf das betroffene Template.</li>
</ul>';
$lang['admin']['event_help_addtemplatepost'] = '<p>Wird ausgef&uuml;hrt, nachdem ein neues Template angelegt wurde.</p>
<h4>Parameter</h4>
<ul>
<li>&#039;template&#039; - Referenz auf das betroffene Template.</li>
</ul>';
$lang['admin']['event_help_edittemplatepre'] = '<p>Wird ausgef&uuml;hrt, bevor &Auml;nderungen an einem Template gespeichert werden.</p>
<h4>Parameter</h4>
<ul>
<li>&#039;template&#039; - Referenz  auf das betroffene Template.</li>
</ul>';
$lang['admin']['event_help_edittemplatepost'] = '<p>Wird ausgef&uuml;hrt, nachdem &Auml;nderungen an einem Template gespeichert wurden.</p>
<h4>Parameter</h4>
<ul>
<li>&#039;template&#039; - Referenz  auf das betroffene Template.</li>
</ul>';
$lang['admin']['event_help_deletetemplatepre'] = '<p>Wird ausgef&uuml;hrt, bevor ein Template gel&ouml;scht wird.</p>
<h4>Parameter</h4>
<ul>
<li>&#039;template&#039; - Referenz  auf das betroffene Template.</li>
</ul>';
$lang['admin']['event_help_deletetemplatepost'] = '<p>Wird ausgef&uuml;hrt, nachdem ein Template gel&ouml;scht wurde.</p>
<h4>Parameter</h4>
<ul>
<li>&#039;template&#039; - Referenz  auf das betroffene Template.</li>
</ul>';
$lang['admin']['event_help_templateprecompile'] = '<p>Wird ausgef&uuml;hrt, bevor ein Template an Smarty zur Verarbeitung gesendet wird.</p>
<h4>Parameter</h4>
<ul>
<li>&#039;template&#039; - Referenz auf den betroffenen Template-Text.</li>
</ul>';
$lang['admin']['event_help_templatepostcompile'] = '<p>Wird ausgef&uuml;hrt, nachdem ein Template von Smarty verarbeitet wurde.</p>
<h4>Parameter</h4>
<ul>
<li>&#039;template&#039; - Referenz auf den betroffenen Template-Text.</li>
</ul>';
$lang['admin']['event_help_addglobalcontentpre'] = '<p>Wird ausgef&uuml;hrt, bevor ein globaler Inhaltsblock angelegt wird.</p>
<h4>Parameter</h4>
<ul>
<li>&#039;global_content&#039; - Referenz auf den betroffenen globalen Inhaltsblock.</li>
</ul>';
$lang['admin']['event_help_addglobalcontentpost'] = '<p>Wird ausgef&uuml;hrt, nachdem ein globaler Inhaltsblock angelegt wurde.</p>
<h4>Parameter</h4>
<ul>
<li>&#039;global_content&#039; - Referenz auf den betroffenen globalen Inhaltsblock.</li>
</ul>';
$lang['admin']['event_help_editglobalcontentpre'] = '<p>Wird ausgef&uuml;hrt, bevor &Auml;nderungen an einem globaler Inhaltsblock gespeichert werden.</p>
<h4>Parameter</h4>
<ul>
<li>&#039;global_content&#039; - Referenz auf den betroffenen globalen Inhaltsblock.</li>
</ul>';
$lang['admin']['event_help_editglobalcontentpost'] = '<p>Wird ausgef&uuml;hrt, nachdem &Auml;nderungen an einem globaler Inhaltsblock gespeichert wurden.</p>
<h4>Parameter</h4>
<ul>
<li>&#039;global_content&#039; - Referenz auf den betroffenen globalen Inhaltsblock.</li>
</ul>';
$lang['admin']['event_help_deleteglobalcontentpre'] = '<p>Wird ausgef&uuml;hrt, bevor ein globaler Inhaltsblock gel&ouml;scht wird.</p>
<h4>Parameter</h4>
<ul>
<li>&#039;global_content&#039; - Referenz auf den betroffenen globalen Inhaltsblock.</li>
</ul>';
$lang['admin']['event_help_deleteglobalcontentpost'] = '<p>Wird ausgef&uuml;hrt, nachdem ein globaler Inhaltsblock gel&ouml;scht wurde.</p>
<h4>Parameter</h4>
<ul>
<li>&#039;global_content&#039; - Referenz auf den betroffenen globalen Inhaltsblock.</li>
</ul>';
$lang['admin']['event_help_globalcontentprecompile'] = '<p>Wird ausgef&uuml;hrt, bevor ein globaler Inhaltsblock zur Verarbeitung an Smarty gesendet wird.</p>
<h4>Parameter</h4>
<ul>
<li>&#039;global_content&#039; - Referenz auf den betroffenen globalen Inhaltsblock-Text.</li>
</ul>';
$lang['admin']['event_help_globalcontentpostcompile'] = '<p>Wird ausgef&uuml;hrt, nachdem ein globaler Inhaltsblock zur Verarbeitung an Smarty gesendet wurde.</p>
<h4>Parameter</h4>
<ul>
<li>&#039;global_content&#039; - Referenz auf den betroffenen globalen Inhaltsblock-Text.</li>
</ul>';
$lang['admin']['event_help_contenteditpre'] = '<p>Wird ausgef&uuml;hrt, bevor &Auml;nderungen an Inhalten gespeichert werden.</p>
<h4>Parameter</h4>
<ul>
<li>&#039;content&#039; - Referenz auf den betroffenen Inhalt.</li>
</ul>';
$lang['admin']['event_help_contenteditpost'] = '<p>Wird ausgef&uuml;hrt, nachdem &Auml;nderungen an Inhalten gespeichert wurden.</p>
<h4>Parameter</h4>
<ul>
<li>&#039;content&#039; - Referenz auf den betroffenen Inhalt.</li>
</ul>';
$lang['admin']['event_help_contentdeletepre'] = '<p>Wird ausgef&uuml;hrt, bevor Inhalte gel&ouml;scht werden.</p>
<h4>Parameter</h4>
<ul>
<li>&#039;content&#039; - Referenz auf den betroffenen Inhalt.</li>
</ul>';
$lang['admin']['event_help_contentdeletepost'] = '<p>Wird ausgef&uuml;hrt, nachdem Inhalte gel&ouml;scht wurden.</p>
<h4>Parameter</h4>
<ul>
<li>&#039;content&#039; - Referenz auf den betroffenen Inhalt.</li>
</ul>';
$lang['admin']['event_help_contentstylesheet'] = '<p>Wird ausgef&uuml;hrt, bevor ein Stylesheet an den Browser gesendet wird.</p>
<h4>Parameter</h4>
<ul>
<li>&#039;content&#039; - Referenz auf das betroffene Stylesheet.</li>
</ul>';
$lang['admin']['event_help_contentprecompile'] = '<p>Wird ausgef&uuml;hrt, bevor Inhalte an Smarty zur Verarbeitung gesendet werden.</p>
<h4>Parameter</h4>
<ul>
<li>&#039;content&#039; - Referenz auf den betroffenen Inhaltstext.</li>
</ul>';
$lang['admin']['event_help_contentpostcompile'] = '<p>Wird ausgef&uuml;hrt, nachdem Inhalte von Smarty verarbeitet wurden.</p>
<h4>Parameter</h4>
<ul>
<li>&#039;content&#039; - Referenz auf den betroffenen Inhaltstext.</li>
</ul>';
$lang['admin']['event_help_contentpostrender'] = '<p>Wird ausgef&uuml;hrt, bevor der kombinierte HTML-Code an den Browser gesendet wird.</p>
<h4>Parameter</h4>
<ul>
<li>&#039;content&#039; - Referenz auf den HTML-Text.</li>
</ul>';
$lang['admin']['event_help_smartyprecompile'] = '<p>Wird ausgef&uuml;hrt, bevor Daten zur Verarbeitung an Smarty gesendet werden.</p>
<h4>Parameter</h4>
<ul>
<li>&#039;content&#039; - Referenz auf die betroffenen Daten.</li>
</ul>';
$lang['admin']['event_help_smartypostcompile'] = '<p>Wird ausgef&uuml;hrt, nachdem Daten von Smarty bearbeitet wurden.</p>
<h4>Parameter</h4>
<ul>
<li>&#039;content&#039; - Referenz die betroffenen Daten.</li>
</ul>';
$lang['admin']['filterbymodule'] = 'Nach Modulen filtern';
$lang['admin']['showall'] = 'Alle anzeigen';
$lang['admin']['core'] = 'Kern';
$lang['admin']['defaultpagecontent'] = 'Standard-Seiteninhalt';
$lang['admin']['file_url'] = 'Link auf eine Datei (anstatt auf eine URL)';
$lang['admin']['no_file_url'] = 'Nichts (die obige URL verwenden)';
$lang['admin']['defaultparentpage'] = '&Uuml;bergeordnete Seite (Standard)';
$lang['admin']['error_udt_name_whitespace'] = 'Fehler: Benutzerdefinierte Tags d&uuml;rfen im Namen keine Leerzeichen enthalten.';
$lang['admin']['warning_safe_mode'] = '<strong><em>WARNUNG:</em></strong> Der PHP-Safe-Modus ist auf Ihrem Server aktiviert. Beim Hochladen von Bildern, Themes und Modul-XML-Dateien kann es eventuell zu Problemen kommen. Fragen Sie den Server-Administrator, ob er den Safe-Modus deaktiviert.';
$lang['admin']['test'] = 'Testen';
$lang['admin']['results'] = 'Ergebnisse';
$lang['admin']['untested'] = 'Nicht getestet';
$lang['admin']['unknown'] = 'Unbekannt';
$lang['admin']['download'] = 'Herunter laden';
$lang['admin']['frontendwysiwygtouse'] = 'WYSIWYG-Editor f&uuml;r die Webseite';
$lang['admin']['all_groups'] = 'Alle Gruppen';
$lang['admin']['error_type'] = 'Fehlertyp';
$lang['admin']['contenttype_errorpage'] = 'Fehlerseite';
$lang['admin']['errorpagealreadyinuse'] = 'Der Fehlercode wird bereits verwendet';
$lang['admin']['404description'] = 'Die Seite wurde nicht gefunden';
$lang['admin']['usernotfound'] = 'Der Benutzer wurde nicht gefunden.';
$lang['admin']['passwordchange'] = 'Bitte geben Sie ein neues Passwort ein';
$lang['admin']['recoveryemailsent'] = 'Es wurde eine Email an die gespeicherte Adresse gesandt. Bitte schauen Sie in Ihrem Postfach nach weiteren Informationen.';
$lang['admin']['errorsendingemail'] = 'Beim Versand der Email ist ein Fehler aufgetreten. Bitte kontaktieren Sie Ihren Administrator.';
$lang['admin']['passwordchangedlogin'] = 'Das Passwort wurde ge&auml;ndert. Bitte melden Sie sich ab sofort mit den neuen Zugangsdaten an.';
$lang['admin']['nopasswordforrecovery'] = 'F&uuml;r diesen Benutzer wurde keine Email-Adresse gespeichert. Die Passwort-Wiederherstellung ist daher nicht verf&uuml;gbar. Bitte kontaktieren Sie Ihren Administrator.';
$lang['admin']['lostpw'] = 'Passwort vergessen?';
$lang['admin']['lostpwemailsubject'] = '[%s] Passwort-Wiederherstellung';
$lang['admin']['lostpwemail'] = 'Sie erhalten diese Email, da eine Anfrage zur &Auml;nderung des (%s) Passworts gestellt wurde, welches mit diesem Benutzerkonto verkn&uuml;pft ist (%s). Wenn Sie das Passwort zur&uuml;cksetzen m&ouml;chten, klicken Sie auf den folgenden Link oder geben die URL in einen Browser Ihrer Wahl ein:
%s

Wenn Sie meinen, dass dies nicht zutrifft oder Sie diese Eingabe f&auml;lschlicherweise get&auml;tigt haben, ignorieren Sie diese Email - dann wird nichts ge&auml;ndert.';
$lang['admin']['utma'] = '156861353.1098285014.1278190417.1278190417.1278190417.1';
$lang['admin']['utmc'] = '156861353';
$lang['admin']['utmz'] = '156861353.1278190417.1.1.utmccn=(referral)|utmcsr=forum.cmsmadesimple.org|utmcct=/index.php/topic,45287.15.html|utmcmd=referral';
?>