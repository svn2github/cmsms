<?php
$lang['friendlyname'] = 'TinyMCE WYSIWYG Basic ';
$lang['permission'] = 'Endre TinyMCE Basic innstillinger';
$lang['stripbackgroundtags'] = 'Fjern bakgrunnstagger fra stilark(CSS)';
$lang['source_formatting_text'] = 'Bruk kildeformatering for generert HTML';
$lang['onlyxhtmlelements_text'] = 'Tillat kun XHTML-gyldige elementer';
$lang['dropdownblockformats_text'] = 'Blokkformater i nedtrekksmeny';
$lang['allowtables'] = 'Tillat tabell funksjoner';
$lang['newlinestyle_text'] = 'Stil for ny linje';
$lang['pstyle'] = 'p stil';
$lang['brstyle'] = 'br stil';
$lang['enable_thumbs_text'] = 'Muliggj&oslash;r thumbnail forh&aring;ndsvisning i bilde s&oslash;keren.<br />(Merk: Du m&aring; muligens sette fil-opprettelses masken til 002 (istedet for det som er standard 022)<br /> for &aring; f&aring; thumbnails til &aring; virke (gj&oslash;r dette i Nettsted Admin -> Globale Innstillinger).';
$lang['show_path_text'] = 'Vis stien til et element nederst i redigereren.';
$lang['toolbar_tab'] = 'Verkt&oslash;ylinje';
$lang['toolbar_help'] = 'Disse valgene skal inneholde en kommaseparert liste med navn p&aring; knapper som skal vises i verkt&oslash;ylinjen.';
$lang['toolbar_text'] = 'Verkt&oslash;ylinje';
$lang['language_text'] = 'Velg spr&aring;k:';
$lang['editor_width_text'] = 'Bredde p&aring; redigeringsfelt';
$lang['editor_height_text'] = 'H&oslash;yde p&aring; redigeringsfelt';
$lang['auto'] = 'Auto ';
$lang['or'] = 'eller';
$lang['bodycss_text'] = 'Body tagg stilsett/CSS';
$lang['bodycss_help'] = 'la denne v&aelig;re BLANK eller sett DEFAULT for &aring; bruke sidens CSS. Merk: For &aring; gj&oslash;re redigererens bakgrunn hvit setter du f&oslash;lgende i blank: background-color:white;';
$lang['showtogglebutton_text'] = 'Vis knapp for &aring; sl&aring; wysiwyg p&aring;/av';
$lang['togglewysiwyg'] = 'Sl&aring; WYSIWYG p&aring;/av';
$lang['styles_tab'] = 'CSS stiler';
$lang['styles_help'] = 'If you leave the field empty, TinyMCE will parse your CSS file and list the styles contained in it to the user. If you want only some styles presented to the user, specify them in the form &quot;Style 1=style1; Style 2=style2&quot; in the first field below. In the remaining fields, you can specify CSS styles for Tables, Rows and Cell which are used in the correpsonding dialogs. For an empty field, the styles from the general styles are used.';
$lang['css_styles_text'] = 'Generelt';
$lang['accessdenied'] = 'Ikke tilgang. Sjekk om du har rettigheter til dette.';
$lang['error'] = 'Feil!';
$lang['submit'] = 'Send';
$lang['update'] = 'Oppdater';
$lang['settings'] = 'Innstillinger';
$lang['settingssaved'] = 'Innstillinger lagret';
$lang['toolbarsaved'] = 'Verkt&oslash;ylinjen ble lagret';
$lang['stylessaved'] = 'Stiler ble lagret';
$lang['testareatext'] = 'Test omr&aring;de, ingen innhold vill bli ber&oslash;rt n&aring;r du roter her...';
$lang['help'] = '	<h3>Hva gj&oslash;r denne modulen?</h3>
	<p>Gj&oslash;r det mulig &aring; bruke TinyMCE som WYSIWYG tekstbehandler.</p>
	<h3>Hvordan bruker jeg den?</h3>
	<p>Installer den, g&aring; deretter til System - Brukervalg og velg TinyMCE som din WYSIWYG tekstbehandler.</p>
<p>Sett s&aring; de n&oslash;dvendige tillatelser for grupper som skal f&aring; endre innstillinger i TinyMCE.</p>';
$lang['changelog'] = '	<ul>
		<li>
		<p>Version: 2.2.4</p>
		<p>Fixed the IE toggle bug</p>
		<p>Speeded up turning editor on/off quite a bit (using mceToggleEditor in stead of loading/unloading whole system)</p>
		</li>
		<li>
		<p>Version: 2.2.3</p>
		<p>Updated to TinyMCE version 2.1.2, fixes turning wysiwyg on/off on pages containing multiple textareas</p>
		<p>Fixed a bug making you end up in wrong tab when saving toolbar</p>		
		<p></p>
		</li>
    <li>
		<p>Version: 2.2.2</p>
		<p>Numereous smaller tweeks.</p>
    <p>Fixed problem with changing between pages with Tiny and EditArea.</p>
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
		<p>Removed the nonworking &#039;replace cms-links while writing&#039;</p>
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
		<p>Added plugin descriptions from docs</p>
		<p>Fixed showing of correct testarea even if another wysiwyg is chosen</p>
		<p>Updated to Tiny 2.1.0</p>
		<p>Added thumbnail previews in image browser.</p>
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
		<p>Author: Simon Brown &amp;lt;simon@uptoeleven.ws&amp;gt;</p>
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
		<p>Author: Stefan R&amp;ouml;llin</p>
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
$lang['utma'] = '156861353.525406812.1188077417.1188128997.1188134816.6';
$lang['utmc'] = '156861353';
$lang['utmz'] = '156861353.1188077417.1.1.utmccn=(direct)|utmcsr=(direct)|utmcmd=(none)';
?>