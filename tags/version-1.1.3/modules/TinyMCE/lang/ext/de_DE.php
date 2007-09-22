<?php
$lang['friendlyname'] = 'TinyMCE-WYSIWYG-Basis-Modul';
$lang['permission'] = 'TinyMCE-Einstellungen bearbeiten';
$lang['stripbackgroundtags'] = 'CSS-Style f&uuml;r den Hintergrund entfernen';
$lang['source_formatting_text'] = 'Die Formatierung des Quellcodes auf die HTML-Ausgabe anwenden';
$lang['onlyxhtmlelements_text'] = 'Nur g&uuml;ltige XHTML-Elemente erlauben';
$lang['dropdownblockformats_text'] = 'Blockformate im Listenfeld-Men&uuml;';
$lang['allowtables'] = 'Tabellen-Operationen erlauben';
$lang['newlinestyle_text'] = 'Newline-Style';
$lang['pstyle'] = 'p Style';
$lang['brstyle'] = 'br Style';
$lang['replace_cms_selflink_text'] = 'Ersetzt w&auml;hrend der Bearbeitung {cms_selflink page=\&#039;x\&#039;} durch den entsprechenden Link';
$lang['enable_thumbs_text'] = 'Vorschaubilder f&uuml;r den Bilder-Browser aktivieren.<br />(Hinweis: Eventuell m&uuml;ssen Sie f&uuml;r diese Funktion des umask-Wert auf 002 setzen (voreingestellt ist 022),<br /> damit die Vorschaubilder angezeigt werden (Administration, Men&uuml; Administrator > Globale Einstellungen).';
$lang['show_path_text'] = 'Zeigt den Pfad des Elements in einer Zeile unterhalb des Editors.';
$lang['toolbar_tab'] = 'Werkzeugleiste';
$lang['toolbar_help'] = 'Diese Optionen sollte eine durch Komma getrennte Liste aller Buttons enthalten, die in die Toolbar angezeigt werden sollen.';
$lang['toolbar_text'] = 'Werkzeugleiste';
$lang['language_text'] = 'Sprache ausw&auml;hlen:';
$lang['editor_width_text'] = 'Breite des Editor-Feldes';
$lang['editor_height_text'] = 'H&ouml;he des Editor-Feldes';
$lang['auto'] = 'Automatisch';
$lang['or'] = 'oder';
$lang['bodycss_text'] = 'CSS-Bodytag';
$lang['bodycss_help'] = 'Um den CSS-Style Ihrer Seite zu verwenden, lassen Sie das Feld leer oder setzen es auf \&quot;default\&quot;. Hinweis: Um den Hintergrund des Editors wei&szlig; einzuf&auml;rben, m&uuml;ssen Sie hier das folgende eintragen: background-color:white;';
$lang['showtogglebutton_text'] = 'Den Button zum Aktiveren/Deaktivieren von WYSIWYG anzeigen';
$lang['togglewysiwyg'] = 'WYSIWYG aktivieren/deaktivieren';
$lang['styles_tab'] = 'CSS-Styles';
$lang['styles_help'] = 'Wenn Sie das erste Feld leer lassen, wird TinyMCE Ihre CSS-Datei parsen und dem Benutzer die enthaltenen Styles in einer Liste anzeigen. Wenn dem Benutzer nur ein paar Styles angezeigt werden sollen, k&ouml;nnen Sie dies mit \&quot;Style 1=style1; Style 2=style2\&quot; im ersten Feld festlegen. In den restlichen Feldern k&ouml;nnen Sie die CSS-Styles f&uuml;r Tabellen, Zeilen und Spalten festlegen, die in den entsprechenden Dialogen verwendet werden. Bleiben die Felder leer, werden die Styles aus der CSS-Datei verwendet.';
$lang['css_styles_text'] = 'Allgemein';
$lang['accessdenied'] = 'Zugriff verweigert. Bitte pr&uuml;fen Sie Ihre Berechtigungen.';
$lang['error'] = 'Fehler!';
$lang['submit'] = 'Speichern';
$lang['update'] = 'Aktualisieren';
$lang['settings'] = 'Einstellungen';
$lang['settingssaved'] = 'Die Einstellungen wurde gespeichert';
$lang['toolbarsaved'] = 'Die Werkzeugleiste wurde gespeichert';
$lang['stylessaved'] = 'Die Styles wurden gespeichert';
$lang['testareatext'] = 'Testfeld, beim Ausprobieren werden keine Inhalte besch&auml;digt ...';
$lang['help'] = '	<h3>Was macht dieses Modul?</h3>
	<p>Es aktiviert eine Basis-Version des TinyMCE als WYSIWYG-Editor.</p>
	<h3>Wie wird es benutzt?</h3>
	<p>Nach der Installation des Moduls k&ouml;nnen Sie in der Administration im Men&uuml; \&quot;Meine Einstellungen -> Benutzerspezifische Einstellungen\&quot; TinyMCE als Ihren WYSIWYG-Editor ausw&auml;hlen.</p>
	<p>F&uuml;r die Gruppe, die die Einstellungen von TinyMCE &auml;ndern k&ouml;nnen sollen, m&uuml;ssen Sie die entsprechende Berechtigung setzen.</p>';
$lang['changelog'] = '
		<ul>
    <li>
		<p>Version: 2.2.2</p>
		<p>Numereous smaller tweeks.</p>
    <p>Fixed problem with changing between pages with Tint and EditArea.</p>
    <p>Sessionized the live language.</p>
    <p>Added charmap to default toolbar.</p>
		</li>
		<li>
		<p>Version: 2.2.1</p>
		<p>Fixed blockformat dropdown now actually reflecting the values in the edit box</p>
		<p>Rewrote textarea management to using sessions. Should fix the double-tinys appearing randomly.</p>
		</li>
    <li>
		<p>Version: 2.2.0</p>
		<p>Split TinyMCE into 2 modules, one for inclusion in distribution and one for more advanced use. This is the Basic version.</p>
		<p>Made table operations an option</p>
		<p>Removed the nonworking \&#039;replace cms-links while writing\&#039;</p>
		<p>Generally trimmed down the module to a size acceptable for the main distribution</p>
		</li>
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
$lang['utmz'] = '156861353.1186576985.168.105.utmccn=(referral)|utmcsr=blog.cmsmadesimple.org|utmcct=/2007/08/05/developers-get-together-donations/|utmcmd=referral';
$lang['utma'] = '156861353.717462736.1147511856.1186573038.1186576985.168';
?>