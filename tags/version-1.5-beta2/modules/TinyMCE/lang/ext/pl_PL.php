<?php
$lang['friendlyname'] = 'TinyMCE WYSIWYG Podstawowy (Basic)';
$lang['permission'] = 'Zmień ustawienia TinyMCE Basic';
$lang['stripbackgroundtags'] = 'Oczyść CSS ze znacznik&oacute;w tła.';
$lang['source_formatting_text'] = 'Zastosuj formatowanie kodu źr&oacute;dłowego HTML';
$lang['onlyxhtmlelements_text'] = 'Zezw&oacute;l na użycie tylko element&oacute;w zgodnych z XHTML';
$lang['dropdownblockformats_text'] = 'Formaty blokowe w rozwijanym menu';
$lang['allowtables'] = 'Pozw&oacute;l na operację na tabelkach';
$lang['newlinestyle_text'] = 'Styl nowej-linii';
$lang['pstyle'] = 'Styl akapitu (p)';
$lang['brstyle'] = 'Styl linii (br)';
$lang['entityencoding_text'] = 'Kodowanie encji';
$lang['rawencoding'] = 'Kodowanie podstawowe (najszybsze w większości przypadk&oacute;w)';
$lang['namedencoding'] = 'Kodowanie znak&oacute;w nazwami (np. &nbsp;)';
$lang['numericencoding'] = 'Kodowanie znak&oacute;w symbolami numerycznymi (np. &amp;#160;)';
$lang['enable_thumbs_text'] = 'Zezw&oacute;l na podgląd miniaturek w przeglądarce obrazk&oacute;w.<br />(Note: You may have to set file creation mask to 002 (instead of the default 022)<br /> to get the thumbnails working (do this in Site Admin -> Global Settings).';
$lang['show_path_text'] = 'Pokazuj ścieżkę do danego elementu na dole edytora.';
$lang['toolbar_tab'] = 'Pasek narzędzi';
$lang['toolbar_help'] = 'Te pola powinny zawierać listę nazw przycisk&oacute;w/kontrolek oddzielonych między sobą przecinkami, kt&oacute;re mają być włączone w edytorze.';
$lang['toolbar_text'] = 'Pasek narzędzi';
$lang['language_text'] = 'Wybierz język:';
$lang['editor_width_text'] = 'Szerokość pola edycji';
$lang['editor_height_text'] = 'Wysokość pola edycji';
$lang['auto'] = 'Auto';
$lang['or'] = 'lub';
$lang['bodycss_text'] = 'CSS znacznika body';
$lang['bodycss_help'] = 'pozostaw to pole puste lub wpisz DEFAULT aby użyć arkusza styli bieżącej strony';
$lang['showtogglebutton_text'] = 'Pokaż checkbox przełączający tryb WYSIWIG';
$lang['togglewysiwyg'] = 'Przełącz tryb WYSIWYG';
$lang['styles_tab'] = 'Style CSS';
$lang['styles_help'] = 'If you leave the field empty, TinyMCE will parse your CSS file and list the styles contained in it to the user. If you want only some styles presented to the user, specify them in the form &quot;Style 1=style1; Style 2=style2&quot; in the first field below. In the remaining fields, you can specify CSS styles for Tables, Rows and Cell which are used in the correpsonding dialogs. For an empty field, the styles from the general styles are used.';
$lang['css_styles_text'] = 'Og&oacute;lne';
$lang['accessdenied'] = 'Dostęp zabroniony. Sprawdź swoje uprawnienia.';
$lang['error'] = 'Błąd!';
$lang['submit'] = 'Wyślij';
$lang['update'] = 'Uaktualnij';
$lang['settings'] = 'Ustawienia';
$lang['settingssaved'] = 'Ustawienia zostały zapisane';
$lang['toolbarsaved'] = 'Pasek narzędzi został zapisany';
$lang['stylessaved'] = 'Style zostały zapisane';
$lang['testareatext'] = 'To testowe okienko; wpisując tutaj tekst nie wpływasz na treść serwisu.';
$lang['help'] = '	<h3>Do czego to służy?</h3>
	<p>Zezwala na użycie TinyMCE jako edytora WYSIWYG.</p>
	<h3>Jak się tego używa?</h3>
	<p>Zainstaluj TinyMCE, przejdź do Preferencji Użytkownika i ustaw TinyMCE jako edytor WYSIWYG. Ustaw odpowiednie uprawnienia.</p>';
$lang['changelog'] = '		<ul>
		<li>
		<p>Version: 2.2.6</p>
		<p>Made file uploading through simplebrowser honor default_upload_permission</p>
		
		</li>
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
		</ul>
';
$lang['utma'] = '156861353.876265290.1175957845.1175957845.1175978189.2';
?>