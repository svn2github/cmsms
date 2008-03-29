<?php
$lang['friendlyname'] = 'TinyMCE WYSIWYG modul';
$lang['permission'] = 'Administr&eacute;r TinyMCE indstillinger';
$lang['stripbackgroundtags'] = 'Fjern Baggrunds-Tags fra CSS';
$lang['source_formatting_text'] = 'Format&eacute;r HTML-koden';
$lang['onlyxhtmlelements_text'] = 'tillad kun XHTML- kompatible elementer';
$lang['dropdownblockformats_text'] = 'Blockformatering  i dropdown-menu';
$lang['allowtables'] = 'Tillad tabel funktioner';
$lang['newlinestyle_text'] = 'Nylinie-metode';
$lang['pstyle'] = 'p metode';
$lang['brstyle'] = 'br metode';
$lang['entityencoding_text'] = 'Kodning af specielle karakterer';
$lang['rawencoding'] = 'Raw kodning (hurtigtst, virker i de fleste tilf&aelig;lde)';
$lang['namedencoding'] = 'Navngiven kodning (som &nbsp;)';
$lang['numericencoding'] = 'Numerisk kodning (som &amp;#160;)';
$lang['enable_thumbs_text'] = 'Sl&aring; thumbnail preview til i billed-browseren.';
$lang['show_path_text'] = 'Vis stien til elementet i bunden af editoren';
$lang['toolbar_tab'] = 'V&aelig;rkt&oslash;jslinie';
$lang['toolbar_help'] = 'Disse valgmuligheder skulle indeholde en kommasepareret liste af button/control navne til at inds&aelig;tte i toolbaren.';
$lang['toolbar_text'] = 'V&aelig;rkt&oslash;jslinie';
$lang['language_text'] = 'V&aelig;lg sprog:';
$lang['editor_width_text'] = 'Editor feltets bredde';
$lang['editor_height_text'] = 'Editor feltets h&oslash;jde';
$lang['auto'] = 'Automatisk';
$lang['or'] = 'eller';
$lang['bodycss_text'] = 'body tag CSS';
$lang['bodycss_help'] = 'Lad st&aring; tom eller s&aelig;t til default for at bruge PAGE CSS. Note: Baggrundsfarven s&aelig;ttes til hvid, ved at inds&aelig;tte f&oslash;lgende: background-color: white;';
$lang['showtogglebutton_text'] = 'Vis checkbox til at sl&aring; wysiwyg til/fra';
$lang['togglewysiwyg'] = 'Sl&aring; WYSIWYG til/fra';
$lang['styles_tab'] = 'CSS Styles';
$lang['styles_help'] = 'If you leave the first field empty, TinyMCE will parse your CSS file and list the styles contained in it to the user. If you want only some styles presented to the user, specify them in the form &quot;Style 1=style1; Style 2=style2&quot; in the first field below. In the remaining fields, you can specify CSS styles for Tables, Rows and Cell which are used in the correpsonding dialogs. For an empty field, the styles from the general styles are used.';
$lang['css_styles_text'] = 'Generelt';
$lang['accessdenied'] = 'Adgang n&aelig;gtet. Check dine tilladelser.';
$lang['error'] = 'Felj';
$lang['submit'] = 'Send';
$lang['update'] = 'Opdater';
$lang['settings'] = 'Indstillinger';
$lang['settingssaved'] = 'Indstillinger blev gemt';
$lang['toolbarsaved'] = 'V&aelig;rkt&oslash;jslinien blev gemt';
$lang['stylessaved'] = 'Styles blev gemt';
$lang['testareatext'] = 'Test omr&aring;de, intet indhold vil blive skadet ved at lege her....';
$lang['help'] = '	<h3>Hvad g&oslash;r dette modul?</h3>
	<p>TIllader at TinyMCE kan bruges som WYSIWYG-editor.</p>
	<h3>Hvordan bruger jeg det??</h3>
	<p>Install&eacute;r det, g&aring; til bruger indstillinger og v&aelig;lg TinyMCE som det &oslash;nskede WYSIWYG-system.</p>';
$lang['changelog'] = '<ul>
		<li>
		<p>Version: 2.2.5</p>
		<p>Made the entityencoding a preference</p>
		<p>Made Tiny work as frontend wysiwyg module</p>		
		<p>Fixed missing blockformat default upon new installation (thanks Utter for noticing)</p>
		</li>
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
?>