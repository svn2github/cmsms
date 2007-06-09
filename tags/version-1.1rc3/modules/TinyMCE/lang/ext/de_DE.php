<?php
$lang['friendlyname'] = 'TinyMCE WYSIWYG Modul';
$lang['permission'] = 'TinyMCE-Einstellungen bearbeiten';
$lang['stripbackgroundtags'] = 'CSS-Style f&uuml;r den Hintergrund entfernen';
$lang['usecompression_text'] = 'TinyMCE-Kompressionsmodul verwenden';
$lang['source_formatting_text'] = 'Die Formatierung des Quellcodes auf die HTML-Ausgabe anwenden';
$lang['onlyxhtmlelements_text'] = 'Nur g&uuml;ltige XHTML-Elemente erlauben';
$lang['dropdownblockformats_text'] = 'Blockformate im Listenfeld-Men&uuml;';
$lang['newlinestyle_text'] = 'Newline-Style';
$lang['pstyle'] = '<p> Style';
$lang['brstyle'] = '<br /> Style';
$lang['replace_cms_selflink_text'] = 'Ersetzt w&auml;hrend der Bearbeitung {cms_selflink page=&#039;x&#039;} durch den entsprechenden Link';
$lang['enable_thumbs_text'] = 'Vorschaubilder f&uuml;r den Bilder-Browser aktivieren.';
$lang['show_path_text'] = 'Zeigt den Pfad des Elements in einer Zeile unterhalb des Editors.';
$lang['plugins_tab'] = 'Plugins/Werkzeugleiste';
$lang['plugins_help'] = 'W&auml;hlen Sie die Plugins aus, die Sie aktivieren m&ouml;chten. <br />Wenn die Dokumentation installiert ist, m&uuml;ssen Sie nur auf den Namen des jeweiligen Plugins klicken, um zu dessen Beschreibung/Hilfe zu gelangen.';
$lang['plugins_text'] = 'Plugins';
$lang['toolbar_help'] = 'Diese Optionen sollte eine durch Komma getrennte Liste aller Buttons enthalten, die in die Toolbar angezeigt werden sollen.';
$lang['toolbar_text'] = 'Werkzeugleiste';
$lang['language_text'] = 'Sprache ausw&auml;hlen:';
$lang['editor_width_text'] = 'Breite des Editor-Feldes';
$lang['editor_height_text'] = 'H&ouml;he des Editor-Feldes';
$lang['auto'] = 'Automatisch';
$lang['or'] = 'oder';
$lang['bodycss_text'] = 'CSS-Bodytag';
$lang['bodycss_help'] = 'Um den CSS-Style Ihrer Seite zu verwenden, lassen Sie das Feld leer oder setzen es auf &quot;default&quot;.';
$lang['xconfig_tab'] = 'Konfiguration der Extras';
$lang['xconfig_name'] = 'Konfiguration der Extras';
$lang['xconfig_help'] = 'Hier k&ouml;nnen Eintr&auml;ge f&uuml;r die Konfiguration von TinyMCE erg&auml;nzt werden, um zum Beispiel bestimmten Plugins Parameter mitzugeben. M&ouml;gliche Parameter finden Sie in der Plugin-Hilfe.<br/>Denken Sie daran, dass jeder Eintrag mit einem Komma abgeschlossen werden muss!';
$lang['savexconfig'] = 'Die Konfiguration der Extras speichern';
$lang['xconfigsaved'] = 'Die Konfiguration der Extras wurde gespeichert';
$lang['showtogglebutton_text'] = 'Den Button zum Aktiveren/Deaktivieren von WYSIWYG anzeigen';
$lang['togglewysiwyg'] = 'WYSIWYG aktivieren/deaktivieren';
$lang['styles_tab'] = 'CSS-Styles';
$lang['styles_help'] = 'Wenn Sie das erste Feld leer lassen, wird TinyMCE Ihre CSS-Datei parsen und dem Benutzer die enthaltenen Styles in einer Liste anzeigen. Wenn Sie dem Benutzer nur ein paar Styles anzeigen lassen m&ouml;chten, k&ouml;nnen Sie dies in der Form &quot;Style 1=style1; Style 2=style2&quot; im ersten Feld festlegen. In den restlichen Feldern k&ouml;nnen Sie die CSS-Styles f&uuml;r Tabellen, Zeilen und Spalten festlegen, die in den entsprechenden Dialogen verwendet werden. Werden Felder leer gelassen, werden die Styles  aus der CSS-Datei verwendet.';
$lang['css_styles_text'] = 'Allgemein';
$lang['table_styles_text'] = 'Tabelle';
$lang['table_row_styles_text'] = 'Zeile';
$lang['table_cell_styles_text'] = 'Zelle';
$lang['accessdenied'] = 'Zugriff verweigert. Bitte &uuml;berpr&uuml;fen Sie Ihre Berechtigungen.';
$lang['error'] = 'Fehler!';
$lang['submit'] = 'Speichern';
$lang['update'] = 'Aktualisieren';
$lang['settings'] = 'Einstellungen';
$lang['settingssaved'] = 'Die Einstellungen wurde gespeichert';
$lang['pluginssaved'] = 'Die Plugins wurden gespeichert';
$lang['stylessaved'] = 'Die Styles wurden gespeichert';
$lang['testareatext'] = 'Testbereich, beim Ausprobieren des Editors werden keine Inhalte besch&auml;digt ...';
$lang['help'] = '	<h3>Was macht dieses Modul?</h3>
	<p>Es aktiviert TinyMCE als WYSIWYG-Editor.</p>
	<h3>Wie wird es benutzt?</h3>
	<p>Nach der Installation des Moduls k&ouml;nnen Sie in der Administration im Men&uuml; &quot;Meine Einstellungen -> Benutzerspezifische Einstellungen&quot; TinyMCE als Ihren WYSIWYG-Editor ausw&auml;hlen .</p>';
$lang['changelog'] = '		<ul>
    <li>
		<p>Version: 2.0.6</p>
		<p>Made it possible to add something extra to the configuration</p>
		<p>Added paste as plain text plugin</p>
		<p>Added an option to show a button turning the wysiwyg-functionality on/off</p>
		<p>General speed improvements</p>
		<p>Updated to Tiny 2.1.1, TinyCompressed 1.1.0 and SpellChecker 1.0.4</p>
		</li>
		<li>
		<p>Version: 2.0.5</p>
		<p>Added a xhtml-elements only option</p>
		<p>Moved javascript config into an external file</p>
		<p>Added selecting p or br/ style newlines</p>
		<p>Updated to new compression engine. Should fix some bugs related to this</p>
		<p>Updated to Tiny 2.0.8</p>
		<p>Added plugin descriptions from docs</p>
		<p>Fixed showing of correct testarea even if another wysiwyg is chosen</p>
		</li>
		<li>
		<p>Version: 2.0.4</p>
		<p>Fixed customized textarea width</p>
		<p>Updated to Tiny 2.0.7</p>
		<p>Reversed changelog content (from now on at least) ;-)</p>
		<p></p>
		</li>

                <li>
		<p>Version: 1.0</p>
		<p>Original module code for TinyMCE WYSIWYG textarea replacement tool.</p>
		</li>
		<li>
		<p>Author: Simon Brown <simon@uptoeleven.ws></p>
		<p>Version: 1.1</p>
		<p>Converted for use with new CMS Module architecture.</p>
		<p>Upgraded TinyMCE to version 1.42.</p>
		</li>
		<li>
		<p>Version: 1.2</p>
		<p>Fixed bug with paths being created wrong on image insert.</p>
		</li>
		<li>
		<p>Version: 2.0.0</p>
		<p>Author: Stefan R&ouml;llin</p>
		<p>UPDATED to version 2.0.5.1 of TinyMCE editor.</p>
		<p>ADD plugins simplebrowser, cmsmslink </p>
		<p>ADD some configuration options.</p>
		<p>ADD permission to modify settings.</p>
		</li>
		<li>
		<p>Version: 2.0.1</p>
		<p>UPDATED to version 2.0.6.1 of TinyMCE editor.</p>
		<p>ADD configuration options: language and source_formatting.</p>
		<p>Improved plugin configuration.</p>
		<p>ADD more languages.</p>
		</li>
		<li>
		<p>Version: 2.0.2</p>
		<p>FIX filebrowser</p>
		<p>FIX security flaw in filebrowser</p>
		</li>
		<li>
		<p>Version: 2.0.3</p>
		<p>Converted to new fetch-method of content_array</p>
		<p>FIX security flaw in filebrowser</p>
		<p>Added localization of testarea-text</p>
		</li>
		</ul>';
$lang['utma'] = '156861353.717462736.1147511856.1180418104.1180423217.147';
$lang['utmz'] = '156861353.1178871153.144.89.utmccn=(referral)|utmcsr=forum.cmsmadesimple.org|utmcct=/index.php/topic,11977.msg59973.html|utmcmd=referral';
?>