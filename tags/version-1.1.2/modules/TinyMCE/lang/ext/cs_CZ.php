<?php
$lang['friendlyname'] = 'TinyMCE WYSIWYG Basic modul';
$lang['permission'] = 'Upravit TinyMCE Basic settings';
$lang['stripbackgroundtags'] = 'Ořezat tagy pozad&iacute; z CSS';
$lang['source_formatting_text'] = 'Použ&iacute;t form&aacute;tov&aacute;n&iacute; zdroje ve v&yacute;choz&iacute;m HTML';
$lang['onlyxhtmlelements_text'] = 'Povolit pouze elementy povolen&eacute; v XHTML';
$lang['dropdownblockformats_text'] = 'Blockformats in dropdown-menu';
$lang['allowtables'] = 'Povolit pr&aacute;ci s tabulkami';
$lang['newlinestyle_text'] = 'Newline-style';
$lang['pstyle'] = 'p styl';
$lang['brstyle'] = 'br styl';
$lang['replace_cms_selflink_text'] = 'Nahradit {cms_selflink page=\&#039;x\&#039;} koresponduj&iacute;c&iacute;m odkazem během editace.';
$lang['enable_thumbs_text'] = 'Povolit zobrazov&aacute;n&iacute; n&aacute;hledů v prohl&iacute;žeči obr&aacute;zků.<br />(Pozn&aacute;mka: Možn&aacute; bude potřeba nastavit masku pro vytvořen&eacute; soubory na 002 (m&iacute;sto v&yacute;choz&iacute;ho 022)<br /> pro zprovozněn&iacute; n&aacute;hledů (To lze v nab&iacute;dce Administrace str&aacute;nek -> Glob&aacute;ln&iacute; konfigurace).';
$lang['show_path_text'] = 'Zobrazovat cestu k elementu na spodn&iacute; straně editoru.';
$lang['toolbar_tab'] = 'N&aacute;strojov&aacute; li&scaron;ta';
$lang['toolbar_help'] = 'Tyto volby by měly obsahovat seznam jmen tlač&iacute;tek/ovladačů pro vložen&iacute; do n&aacute;strojov&eacute; li&scaron;ty.';
$lang['toolbar_text'] = 'N&aacute;strojov&aacute; li&scaron;ta';
$lang['language_text'] = 'Vyberte jazyk:';
$lang['editor_width_text'] = '&Scaron;&iacute;řka pole s editorem';
$lang['editor_height_text'] = 'V&yacute;&scaron;ka pole s editorem';
$lang['auto'] = 'Automaticky';
$lang['or'] = 'nebo';
$lang['bodycss_text'] = 'Body tag CSS';
$lang['bodycss_help'] = 'ponechte PR&Aacute;ZDN&Eacute; nebo nastavte V&Yacute;CHOZ&Iacute; pro použit&iacute; CSS STR&Aacute;NKY. Pozn&aacute;mka: Pro nastaven&iacute; b&iacute;l&eacute;ho pozad&iacute; vložte n&aacute;sleduj&iacute;c&iacute; do pr&aacute;zdn&eacute;ho: background-color:white;';
$lang['showtogglebutton_text'] = 'Zobrazit checkbox pro vypnut&iacute;/zapnut&iacute; WYSIWYG editoru';
$lang['togglewysiwyg'] = 'Zapnout/vypnout WYSIWYG';
$lang['styles_tab'] = 'CSS Styly';
$lang['styles_help'] = 'Pokud toto pole nech&aacute;te pr&aacute;zdn&eacute;, TinyMCE zpracuje Va&scaron;e CSS soubory a nab&iacute;dne styly uživateli. Pokud chcete uživateli nab&iacute;dnout jen někter&eacute; styly, specifikujte je formou \&quot;Style 1=style1; Style 2=style2\&quot; v prvn&iacute;m n&aacute;sleduj&iacute;c&iacute;m poli. Ve zb&yacute;vaj&iacute;c&iacute;ch pol&iacute;ch lze specifikovat CSS styly pro tabulky, ř&aacute;dky and buňky, kter&eacute; jsou použity v souvisej&iacute;c&iacute;ch dialoz&iacute;ch. Pro pr&aacute;zdn&aacute; pole budou použity parametry z hlavn&iacute;ch stylů.';
$lang['css_styles_text'] = 'Hlavn&iacute;';
$lang['accessdenied'] = 'Př&iacute;stup zak&aacute;z&aacute;n. Zkontrolujte pros&iacute;m svoje opr&aacute;vněn&iacute;.';
$lang['error'] = 'Chyba!';
$lang['submit'] = 'Odeslat';
$lang['update'] = 'Aktualizovat';
$lang['settings'] = 'Nastaven&iacute;';
$lang['settingssaved'] = 'Změny byly uloženy';
$lang['toolbarsaved'] = 'N&aacute;strojov&aacute; li&scaron;ta byla uložena';
$lang['stylessaved'] = 'Styly byly uloženy';
$lang['testareatext'] = 'Zku&scaron;ebn&iacute; oblast, nic nebude naru&scaron;eno změnami v n&iacute;...';
$lang['help'] = '	<h3>Co děl&aacute; tento modul?</h3>
	<p>Umožn&iacute; použ&iacute;vat TinyMCE WYSIWYG editor pro &uacute;pravu obsahu.</p>
	<h3>Jak to použ&iacute;t?</h3>
	<p>Nainstalovat, pot&eacute; j&iacute;t do Uživatelsk&yacute;ch nastaven&iacute;, a nastavit TinyMCE jako V&aacute;&scaron; WYSIWYG editor.</p>
	<p>Nastavit požadovan&aacute; opr&aacute;vněn&iacute; uživatelsk&yacute;ch skupin pro povolen&iacute; změny předvoleb pro TinyMCE.</p>';
$lang['changelog'] = '		<ul>
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
$lang['utmz'] = '156861353.1185028706.124.27.utmccn=(referral)|utmcsr=wiki.cmsmadesimple.org|utmcct=/index.php/Main_Page|utmcmd=referral';
$lang['utma'] = '156861353.496193935.1147276334.1185028706.1185190880.125';
?>