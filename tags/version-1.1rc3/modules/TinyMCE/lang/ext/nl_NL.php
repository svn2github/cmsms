<?php
$lang['friendlyname'] = 'TinyMCE WYSIWYG module';
$lang['permission'] = 'Pas TinyMCE instellingen aan';
$lang['stripbackgroundtags'] = 'Verwijder &quot;background&quot; tags uit CSS';
$lang['usecompression_text'] = 'Gebruik de TinyMCE compressie module';
$lang['source_formatting_text'] = 'Broncode formattering toepassen op de uitvoer HTML';
$lang['onlyxhtmlelements_text'] = 'Sta alleen XHTML-compliant elementen toe';
$lang['dropdownblockformats_text'] = 'Blok typen in dropdown-menu';
$lang['newlinestyle_text'] = 'Nieuwe regel opmaak';
$lang['pstyle'] = '<p> stijl';
$lang['brstyle'] = '<br /> stijl';
$lang['replace_cms_selflink_text'] = 'Vervang {cms_selflink page=&#039;x&#039;} met de corresponderende link tijdens het bewerken.';
$lang['enable_thumbs_text'] = 'Enable thumbnail previews in the image browser.<br />(Note: You may have to set file creation mask to 002 (instead of the default 022)<br /> to get the thumbnails working (do this in Site Admin -> Global Settings).';
$lang['show_path_text'] = 'Toon het pad van het element onderaan in de editor.';
$lang['plugins_tab'] = 'Plugins/Werkbalk';
$lang['plugins_help'] = 'Kies de plugins die geactiveerd moeten worden. <br />Als de documentatie ge&iuml;nstalleerd is, klik op een plugin naam om de help pagina&#039;s te openen..';
$lang['plugins_text'] = 'Plugins';
$lang['toolbar_help'] = 'Deze opties moeten een door komma&#039;s gescheiden lijst van knoppen/control namen bevatten die in de werkbalk moeten worden opgenomen.';
$lang['toolbar_text'] = 'Werkbalk';
$lang['language_text'] = 'Kies een taal:';
$lang['editor_width_text'] = 'Breedte van het editor veld';
$lang['editor_height_text'] = 'Hoogte van het editor veld';
$lang['auto'] = 'Automatisch';
$lang['or'] = 'of';
$lang['bodycss_text'] = 'Body tag CSS';
$lang['bodycss_help'] = 'leeg laten of &quot;DEFAULT&quot; instellen om de pagina CSS te gebruiken';
$lang['xconfig_tab'] = 'Extra instelling';
$lang['xconfig_name'] = 'Extra instellingen';
$lang['xconfig_help'] = 'Here you can specify any statements which should be added to the TinyMCE configuration-settings, configuration of plugins, for instance. See plugins-help for possible parameters.<br/>Remember to end each statement with a comma!';
$lang['savexconfig'] = 'Sla extra instellingen op';
$lang['xconfigsaved'] = 'Extra instellingen zijn opgeslagen';
$lang['showtogglebutton_text'] = 'Laat de knop wysiwyg aan/uit zien';
$lang['togglewysiwyg'] = 'Zet WYSIWYG aan/uit';
$lang['styles_tab'] = 'CSS stijlen';
$lang['styles_help'] = 'Als je dit veld leeg laat, zal TinyMCE je CSS bestand verwerken en de stijlen toevoegen aan het keuzemenu. Als je alleen enkele stijlen wilt toevoegen doe dat dan op de volgende mannier &quot;Style 1=style1; Style 2=style2&quot;. In de overige velden kan je CSS stijlen voor Tabellen, Rijen en Cellen opgeven. Bij een leeg veld worden de standaard stijlen gebruikt.';
$lang['css_styles_text'] = 'Algemeen';
$lang['table_styles_text'] = 'Tabel';
$lang['table_row_styles_text'] = 'Rij';
$lang['table_cell_styles_text'] = 'Cel';
$lang['accessdenied'] = 'Toegang geweigerd. Zorg dat u beschikt over voldoende rechten.';
$lang['error'] = 'Fout!';
$lang['submit'] = 'Opslaan';
$lang['update'] = 'Bijwerken';
$lang['settings'] = 'Instellingen';
$lang['settingssaved'] = 'Instellingen zijn opgeslagen';
$lang['pluginssaved'] = 'Plugins zijn opgeslagen';
$lang['stylessaved'] = 'Stijlen zijn opgeslagen';
$lang['testareatext'] = 'Test gebied, er zal geen content beschadigen tijdens het experimenteren in dit gebied...';
$lang['help'] = '	<h3>Wat doet het?</h3>
	<p>Stel TinyMCE in als WYSIWYG HTML editor.</p>
	<h3>Hoe gebruik ik het?</h3>
	<p>Installeer de module en ga dan naar Mijn instellingen -> Gebruikersinstellingen en kies voor TinyMCE als WYSIWYG editor.</p>
	<p>Stel de juiste rechten in bij Gebruikers/Groepen -> Groepsrechten voor het aanpassen van de TinyMCE instellingen.</p>';
$lang['changelog'] = '<ul>
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
$lang['utma'] = '156861353.262824941.1164454221.1168205360.1168285980.6';
?>