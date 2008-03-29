<?php
$lang['friendlyname'] = 'Modulo WYSIWYG TinyMCE';
$lang['permission'] = 'Modifica delle configurazioni di TinyMCE';
$lang['stripbackgroundtags'] = 'Togli i tags background da CSS';
$lang['source_formatting_text'] = 'Applica la formattazione del sorgente al HTML di uscita';
$lang['onlyxhtmlelements_text'] = 'Permette solo elementi XHTML';
$lang['dropdownblockformats_text'] = 'Formati nel menu a tendina';
$lang['allowtables'] = 'Permettete operazioni sulle tabelle';
$lang['newlinestyle_text'] = 'Stile di un Invio';
$lang['pstyle'] = 'stile p';
$lang['brstyle'] = 'stile br';
$lang['entityencoding_text'] = 'Encoding delle entit&agrave;';
$lang['rawencoding'] = 'Raw encoding (pi&ugrave; veloce, lavora nella maggiornza dei casi)';
$lang['namedencoding'] = 'Encoding nominativo (come &nbsp;)';
$lang['numericencoding'] = 'Encoding numerico (come &amp;#160;)';
$lang['enable_thumbs_text'] = 'Abilita anteprima miniature (thumbnail) nello sfoglio delle immagini.<br />(Nota: Potreste dover settare la maschera di creazione file a 002 (invece della predefinita 022)<br /> affinch&egrave; le miniature funzionino (vedere in Amministrazione sito -> Configurazioni Globali).';
$lang['show_path_text'] = 'Mostra il percorso dell&#039;elemento sotto all&#039;editor.';
$lang['toolbar_tab'] = 'Barra degli Strumenti';
$lang['toolbar_help'] = 'Queste opzioni dovrebbero contenere una lista di nomi di pulsanti/controlli separati da un punto e virgola, da inserire nella barra degli strumenti.';
$lang['toolbar_text'] = 'Barra degli Strumenti';
$lang['language_text'] = 'Scelta linguaggio:';
$lang['editor_width_text'] = 'Larghezza del campo di modifica';
$lang['editor_height_text'] = 'Altezza del campo di modifica';
$lang['auto'] = 'Automatico';
$lang['or'] = 'o';
$lang['bodycss_text'] = 'Foglio di Stile (CSS) del tag Body';
$lang['bodycss_help'] = 'lascia il campo VUOTO o impostato a DEFAULT per usare il Foglio di Stile della Pagina. Nota: Per fare lo sfondo dell&#039;editor bianco inserire: background-color:white;';
$lang['showtogglebutton_text'] = 'Mostra bottone per scambiare il WYSIWYG on/off';
$lang['togglewysiwyg'] = 'Scambia WYSIWYG on/off';
$lang['styles_tab'] = 'Stili CSS';
$lang['styles_help'] = 'Se lasciate il primo campo vuoto, TinyMCE esaminer&agrave; il vostro Foglio di Stile ed elencher&agrave; all&#039;utente gli stili contenuti.
Se volete che vengano visualizzati all&#039;utente solo alcuni stili, specificateli nella forma &quot;Style 1=style1; Style 2=style2&quot; nel primo campo sotto.
Nota bene: Style 1=style1 significa UnVostroNomedelloStile = NomeVEROdelloStileCSS.
Nei campi rimanenti potete specificare stili CSS per Tabelle, Righe e Celle che vengono utilizzate nelle caselle corrispondenti. 
Per i campi vuoti verranno utilizzati gli stili generici.';
$lang['css_styles_text'] = 'Generale';
$lang['accessdenied'] = 'Accesso Negato. Si prega di controllare i vostri permessi.';
$lang['error'] = 'Errore!';
$lang['submit'] = 'Inserisci';
$lang['update'] = 'Aggiorna';
$lang['settings'] = 'Impostazioni';
$lang['settingssaved'] = 'Le impostazioni sono state salvate';
$lang['toolbarsaved'] = 'Toolbar salvata';
$lang['stylessaved'] = 'Stili salvati';
$lang['testareatext'] = 'Area di test, nessun contenuto verr&agrave; modificato facendo prove qui...';
$lang['help'] = '	<h3>Che cosa fa?</h3>
	<p>Abilita TinyMCE per essere usato come WYSIWYG.</p>
	<h3>Come usarlo?</h3>
	<p>Installalo, poi vai a Preferenze Utente e configura TinyMCE per essere il tuo wysiwyg.</p>
	<p>Setta il permesso corretto di TinyMCE per i vari gruppi.</p>';
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
$lang['utmz'] = '156861353.1192519372.88.13.utmccn=(referral)|utmcsr=dev.cmsmadesimple.org|utmcct=/frs/|utmcmd=referral';
$lang['utma'] = '156861353.916584110.1152549583.1195041073.1195113374.162';
$lang['utmb'] = '156861353';
$lang['utmc'] = '156861353';
?>