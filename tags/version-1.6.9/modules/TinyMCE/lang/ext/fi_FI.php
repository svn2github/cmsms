<?php
$lang['friendlyname'] = 'TinyMCE WYSIWYG Perus moduli';
$lang['permission'] = 'Muokkaa TinyMCE asetuksia';
$lang['stripbackgroundtags'] = 'Poista taustatagit CSS:st&auml;';
$lang['source_formatting_text'] = 'Muotoile tulostettavaa HTML:&auml;&auml;';
$lang['onlyxhtmlelements_text'] = 'Salli vain XHTML-yhteensopivat elementit';
$lang['dropdownblockformats_text'] = 'Blockformats alasvetovalikossa';
$lang['allowtables'] = 'Salli taulukko operaatiot';
$lang['newlinestyle_text'] = 'Newline-tyyli';
$lang['pstyle'] = 'p tyyli';
$lang['brstyle'] = 'br tyyli';
$lang['enable_thumbs_text'] = 'Ota k&auml;ytt&ouml;&ouml;n esikatselukuvat kuvaselaimessa.';
$lang['show_path_text'] = 'N&auml;yt&auml; elementin polku editorin alaosassa.';
$lang['toolbar_tab'] = 'Ty&ouml;kalupalkki';
$lang['toolbar_help'] = 'N&auml;iden tulisi sis&auml;lt&auml;&auml; pilkulla erotettu lista painikkeiden/kontrollien nimist&auml;, jotka sijoitetaan ty&ouml;kalupalkkiin.';
$lang['toolbar_text'] = 'Ty&ouml;kalupalkki';
$lang['language_text'] = 'Valitse kieli:';
$lang['editor_width_text'] = 'Editorikent&auml;n leveys';
$lang['editor_height_text'] = 'Editorikent&auml;n korkeus';
$lang['auto'] = 'Automaattinen';
$lang['or'] = 'tai';
$lang['bodycss_text'] = 'Body-tagin CSS';
$lang['bodycss_help'] = 'J&auml;t&auml; tyhj&auml;ksi tai aseta oletus k&auml;ytt&auml;&auml;ksesi sivun CSS:&auml;&auml;. Huomaa: Asettaaksesi editorin taustav&auml;rin valkoiseksi, anna seuraava arvo: background-color:white;';
$lang['showtogglebutton_text'] = 'N&auml;yt&auml; wysiwyg p&auml;&auml;lle/pois nappi';
$lang['togglewysiwyg'] = 'Wysiwyg p&auml;&auml;lle/pois';
$lang['styles_tab'] = 'CSS-tyylit';
$lang['styles_help'] = 'Jos j&auml;t&auml;t ensimm&auml;isen kent&auml;n tyhj&auml;ksi, TinyMCE k&auml;sittelee CSS-tiedostosi ja listaa sen sis&auml;lt&auml;m&auml;t tyylit k&auml;ytt&auml;j&auml;lle. Jos haluat vain joidenkin tyylien n&auml;kyv&auml;n k&auml;ytt&auml;j&auml;lle, m&auml;&auml;rittele ne t&auml;h&auml;n tapaan: \&quot;Style 1=style1; Style 2=style2\&quot; ensimm&auml;isess&auml; alla olevassa kent&auml;ss&auml;. Muissa kentiss&auml; voit m&auml;&auml;ritell&auml; CSS-tyylej&auml; taulukoille, riveille ja soluille, joita k&auml;ytet&auml;&auml;n vastaavissa dialogeissa. Jos kentt&auml; on tyhj&auml;, k&auml;ytet&auml;&auml;n yleisi&auml; tyylej&auml;';
$lang['css_styles_text'] = 'Yleinen';
$lang['accessdenied'] = 'P&auml;&auml;sy estetty. Tarkasta oikeudet.';
$lang['error'] = 'Virhe!';
$lang['submit'] = 'L&auml;het&auml;';
$lang['update'] = 'P&auml;ivit&auml;';
$lang['settings'] = 'Asetukset';
$lang['settingssaved'] = 'Asetukset tallennettu';
$lang['toolbarsaved'] = 'Ty&ouml;kalupalkki tallennettu';
$lang['stylessaved'] = 'Tyylit tallennettu';
$lang['testareatext'] = '<p>Testialue, sis&auml;lt&ouml; ei sotkeennu t&auml;t&auml; muokatessa...</p>';
$lang['help'] = '	<h3>Mit&auml; t&auml;m&auml; moduuli tekee?</h3>
	<p>Mahdollistaa TinyMCE-nimisen ohjelman k&auml;yt&ouml;n sis&auml;ll&ouml;n muokkaamiseen WYSIWYG-tilassa.</p>
	<h3>Kuinka moduulia k&auml;ytet&auml;&auml;n?</h3>
	<p>Asenna moduuli, jonka j&auml;lkeen valitse k&auml;ytt&auml;j&auml;n asetuksista, ett&auml; tahdot k&auml;ytt&auml;&auml; TinyMCE-ohjelmaa</p>';
$lang['changelog'] = '
		<ul>
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
$lang['utma'] = '156861353.42834333.1182870459.1187980805.1187988376.12';
$lang['utmz'] = '156861353.1184768461.5.2.utmccn=(referral)|utmcsr=forum.cmsmadesimple.org|utmcct=/index.php|utmcmd=referral';
?>