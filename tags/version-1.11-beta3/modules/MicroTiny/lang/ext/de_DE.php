<?php
$lang['force_blackonwhite'] = 'Schwarzen Text auf wei&szlig;em Hintergrund erzwingen';
$lang['help_force_blackonwhite'] = 'Damit kann im MicroTiny-Editor schwarze Schrift auf wei&szlig;em Hintergrund erzwungen werden. Dies kann dann hilfreich sein, wenn auf der Webseite helle Schriften auf dunklen Hintergr&uuml;nden verwendet werden.';
$lang['strip_background'] = 'Via CSS festgelegte Hintergr&uuml;nde entfernen';
$lang['help_strip_background'] = 'Damit k&ouml;nnen die via CSS festgelegten Hintergr&uuml;nde entfernt werden. Strip background effects from effected stylesheets. Dies kann dann hilfreich sein, wenn auf der Webseite helle Schriften auf dunklen Hintergr&uuml;nden verwendet werden.';
$lang['show_statusbar'] = 'Statusleiste anzeigen';
$lang['help_show_statusbar'] = 'Hiermit k&ouml;nnen Sie eine Statusleiste aktivieren, die am unteren Rand des WYSIWYG-Bereichs eingeblendet wird. Diese Funktionalit&auml;t ist nur in der Administration verf&uuml;gbar.';
$lang['allow_resize'] = 'Gr&ouml;&szlig;en&auml;nderung erlauben';
$lang['help_allow_resize'] = 'Hiermit k&ouml;nnen Sie Gr&ouml;&szlig;en&auml;nderung des WYSIWYG-Bereichs erlauben. F&uuml;r diese Funktionalit&auml;t muss die Anzeige der Statusleiste aktiviert sein.';
$lang['view_html'] = 'HTML-Code anzeigen';
$lang['friendlyname'] = 'MicroTiny WYSIWYG-Editor';
$lang['help'] = '<h3>Was macht dieses Modul?</h3>
<p>MicroTiny ist eine Light-Version des TinyMCE-Editors (der ehemalige Standard-WYSIWYG-Editor von CMS Made Simple). Er unterst&uuml;tzt nur ein Basis-Set an Funktionen, ist aber denoch ein m&auml;chtiges Werkzeug, um einfache &Auml;nderungen an den Inhalten vornehmen zu k&ouml;nnen.</p>
<p>Dieses Modul enth&auml;lt nur ein paar Optionen und richtet sich mit seiner beschr&auml;nkten Funktionalit&auml;t an Bearbeiter, die keinerlei Kenntnisse von HTML haben. Die Intention hierbei ist, dass diese Bearbeiter nur wenig M&ouml;glichkeiten haben, die Gestaltung der Webseite zu zerst&ouml;ren.</p>
<h3>Wie wird es eingesetzt?</h3>
<p>Der Testbereich f&uuml;r den MicroTiny sollte f&uuml;r Anwender mit den entsprechenden Berechtigungen automatisch in der Administration unter &quot;Erweiterungen > MicroTiny WYSIWYG-Editor&quot; angezeigt werden.</p>
</p>Um den MicroTiny als WYSIWYG-Editor zum Bearbeiten von Seiten verwenden zu k&ouml;nnen, muss eine entsprechende Einstellung vorgenommen werden. Gehen Sie daf&uuml;r in der Administration in &quot;Meine Einstellungen > Benutzerspezifische Einstellungen&quot; und w&auml;hlen dort im Feld &quot;Den WYSIWYG-Editor w&auml;hlen:&quot; MicroTiny aus. &Uuml;ber zus&auml;tzliche Optionen in verschiedenen Modulen oder in Inhaltsseiten-Templates k&ouml;nnen Sie festlegen, ob lediglich in den Bearbeitungsformularen lediglich ein Textbereich oder ein Bereich mit WYSIWYG-Editor angezeigt werden soll.</p>
<h3>Kann MicroTiny auch auf der Webseite verwendet werden?</h3>
<p>Gelegentlich ist es erforderlich, den Besuchern einer Webseite f&uuml;r die Textbereiche einen WYSIWYG-Editor mit eingeschr&auml;nkten Funktionalit&auml;ten zur Verf&uuml;gung zu stellen. Gehen Sie hierzu wie folgt vor:
<ul>
  <li>W&auml;hlen Sie in der Administration unter &quot;Webseiten-Administration > Globale Einstellungen&quot;, Registerkarte &quot;Allgemeine Einstellungen&quot; im Feld &quot;WYSIWYG-Editor f&uuml;r die Webseite:&quot; MicroTiny aus.</li>
  <li>F&uuml;gen Sie anschlie&szlig;end auf den Seiten, auf den der WYSIWYG-Editor verwendet werden soll, den Tag {MicroTiny action=enablewysiwg} ein. Dies kann entweder im head-Bereich des Seiten-Templates, in den Globalen Metadaten oder in den Seitenspezifsichen Metadaten erfolgen. Dieser Tag hat keine weiteren Parameter.</li>
</ul>
</p>';
$lang['example'] = 'Anwendungsbeispiel MicroTiny';
$lang['settings'] = 'Einstellungen';
$lang['youareintext'] = 'Sie sind in';
$lang['dimensions'] = 'BxH';
$lang['size'] = 'Gr&ouml;&szlig;e';
$lang['filepickertitle'] = 'Dateiauswahl';
$lang['cmsmslinker'] = 'CMSMS-Linker';
$lang['tmpnotwritable'] = 'Die Konfiguration konnte nicht in das /tmp-Verzeichnis geschrieben werden! Bitte beheben Sie diesen Fehler!';
$lang['css_styles_text'] = 'CSS-Styles';
$lang['css_styles_help'] = 'Die hier eingegebenen CSS-Style-Namen werden dem Listenfeldmen&uuml; im Editor hinzugef&uuml;gt. Wenn Sie das Eingabefeld leer lassen, wird das entsprechende Listenfeldmen&uuml; nicht angezeigt (= voreingestellt).';
$lang['css_styles_help2'] = '<p>Die Styles k&ouml;nnen entweder der Name der CSS-Klasse oder aber ein neuer Name (quasi ein Alias) f&uuml;r eine CSS-Klasse sein. Die Styles m&uuml;ssen entweder durch Kommata oder einen Zeilenumbruch voneinander getrennt werden.</p>
<p>Beispiel: meinstyle1, Mein Style-Name=meinstyle2</p>
<p>Ergebnis: ein Listenfeldmen&uuml; mit zwei Eintr&auml;gen &#039;meinstyle1&#039; und &#039;Mein Style-Name&#039;, bei deren Anwendung entsprechend die Klasse meinstyle1 bzw. meinstyle2 eingef&uuml;gt wird.</p>
<p>HINWEIS: Es wird nicht &uuml;berpr&uuml;ft, ob diese Style-Namen existieren, sondern ohne Kontrolle verwendet.</p>';
$lang['usestaticconfig_text'] = 'Statische Konfiguration verwenden';
$lang['usestaticconfig_help'] = 'Damit wird die Konfiguration in eine statische Datei geschrieben (anstatt der dynamischen Erstellung). Dies funktioniert bei bestimmten Servern besser (insbesondere dann, wenn PHP als CGI-Modul l&auml;uft)';
$lang['allowimages_text'] = 'Bilder erlauben';
$lang['allowimages_help'] = 'Damit wird in der Werkzeugleiste ein Button aktiviert, mit dem Bilder in den Inhalt eingef&uuml;gt werden k&ouml;nnen.';
$lang['settingssaved'] = 'Einstellungen gespeichert';
$lang['savesettings'] = 'Einstellungen speichern';
$lang['utma'] = '156861353.756772082.1334346813.1334355871.1334418195.3';
$lang['utmz'] = '156861353.1334346813.1.1.utmccn=(direct)|utmcsr=(direct)|utmcmd=(none)';
$lang['utmc'] = '156861353';
?>