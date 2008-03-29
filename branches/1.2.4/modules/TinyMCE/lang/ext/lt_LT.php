<?php
$lang['friendlyname'] = 'TinyMCE WYSIWYG pagrindai';
$lang['permission'] = 'Modify TinyMCE pagrindiniai nustatymai';
$lang['stripbackgroundtags'] = 'I&scaron;imti Background žymes i&scaron; CSS';
$lang['source_formatting_text'] = 'Pritaikyti kodo formatavimą HTML vaizdavimui';
$lang['onlyxhtmlelements_text'] = 'Leisti tik XHTML leidžiamus elementus';
$lang['dropdownblockformats_text'] = 'Neleidžiami formatai i&scaron;&scaron;okančiam pasirenkamam meniu';
$lang['allowtables'] = 'Leisti leintelių naudojimą';
$lang['newlinestyle_text'] = 'Naujos eilutės stilius';
$lang['pstyle'] = 'p stilius';
$lang['brstyle'] = 'br stilius';
$lang['entityencoding_text'] = 'Kodavimas';
$lang['rawencoding'] = 'Pavir&scaron;utinis kodavimas (greičiausias, veikia daugeliu atveju)';
$lang['namedencoding'] = 'Pavadintas kodavimas (kaip &nbsp;)';
$lang['numericencoding'] = 'Skaitinis kodavimas (kaip &amp;#160;)';
$lang['enable_thumbs_text'] = 'Įjungti thumbnail rodymą vaizdų nar&scaron;ymo lange. <br />Atminkite: jums gali prireikti pakeisti bylų kūrimo kaukę<br /> Tai galite padaryti <i>Puslapio administravimas &raquo; Globalūs Nustatymai</i>';
$lang['show_path_text'] = 'Rodyti elemento kelia redaktoriaus apačioje';
$lang['toolbar_tab'] = 'Įrankinė ';
$lang['toolbar_help'] = '&Scaron;ios nuostatos turėtų būt sudarytos i&scaron; kableliu atskirtų mygtukų pavadinimų.';
$lang['toolbar_text'] = 'Įrankinė ';
$lang['language_text'] = 'Pasirinkite kalbą:';
$lang['editor_width_text'] = 'Redaktoriaus lauko plotis';
$lang['editor_height_text'] = 'Redaktoriaus lauko auk&scaron;tis';
$lang['auto'] = 'Auto';
$lang['or'] = 'ar';
$lang['bodycss_text'] = 'Body tag&#039;as CSS';
$lang['bodycss_help'] = 'Palikite Tu&scaron;čia arba nustatykite DEFAULT naudoti PAGE CSS. Jei norite redaktoriaus fono spalvą nustatyti baltą įveskite:  <i>background-color:white;</i>';
$lang['showtogglebutton_text'] = 'Rodyti žyminą laukelį i&scaron;jungti/įjungti  WYSIWYG';
$lang['togglewysiwyg'] = 'Įjungti/i&scaron;jungti WYSIWYG';
$lang['styles_tab'] = 'CSS Stiliai';
$lang['styles_help'] = 'If you leave the field empty, TinyMCE will parse your CSS file and list the styles contained in it to the user. If you want only some styles presented to the user, specify them in the form &quot;Style 1=style1; Style 2=style2&quot; in the first field below. In the remaining fields, you can specify CSS styles for Tables, Rows and Cell which are used in the correpsonding dialogs. For an empty field, the styles from the general styles are used.';
$lang['css_styles_text'] = 'Pagrindiniai';
$lang['accessdenied'] = 'Prieiga uždrausta. Pasitirinkite leidimus.';
$lang['error'] = 'Klaida!';
$lang['submit'] = 'Pateikti';
$lang['update'] = 'Atnaujinti';
$lang['settings'] = 'Nuostatos';
$lang['settingssaved'] = 'Nuostatos i&scaron;saugotos';
$lang['toolbarsaved'] = 'Įrankinė i&scaron;saugoti';
$lang['stylessaved'] = 'Stiliai i&scaron;saugoti';
$lang['testareatext'] = 'Testavimo erdvė, joks tekstas nebus i&scaron;saugotas testavimo metu..';
$lang['help'] = '	<h3>Ką jis daro?</h3>
	<p>Naudoja TinyMCE kaip WYSIWYG html redaktorių.</p>
	<h3>Kaip jį naudoti?</h3>
	<p>Įdiegite jį, nueikite į Vartotojo Nustatymus ir pažymėkite, kad norite naudoti TinyMCE kaip WYSIWYG redaktorių.</p>';
$lang['changelog'] = '		<ul>
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
$lang['utmz'] = '156861353.1192347332.16.5.utmccn=(referral)|utmcsr=aba.lt|utmcct=/admin/listmodules.php|utmcmd=referral';
$lang['utma'] = '156861353.1849638115.1186939097.1192356911.1192366084.18';
$lang['utmc'] = '156861353';
$lang['utmb'] = '156861353';
?>