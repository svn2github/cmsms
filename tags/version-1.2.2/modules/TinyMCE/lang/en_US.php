<?php
$lang["friendlyname"]="TinyMCE WYSIWYG Basic";
$lang["permission"]='Modify TinyMCE Basic settings';
$lang['stripbackgroundtags'] = 'Strip Background Tags From CSS';
$lang['source_formatting_text'] = 'Apply source formatting to the output HTML';
$lang['onlyxhtmlelements_text'] = 'Only allow XHTML-compliant elements';
$lang['dropdownblockformats_text']= 'Blockformats in dropdown-menu';
$lang['allowtables'] = 'Allow table operations';
$lang['newlinestyle_text'] = 'Newline-style';
$lang['pstyle']="p style";
$lang['brstyle']="br style";
$lang["entityencoding_text"]="Encoding of entities";
$lang["rawencoding"]="Raw encoding (fastest, works in most cases)";
$lang["namedencoding"]="Named encoding (like &amp;nbsp;)";
$lang["numericencoding"]="Numeric encoding (like &amp;#160;)";
$lang['enable_thumbs_text'] = 'Enable thumbnail previews in the image browser.<br />(Note: You may have to set file creation mask to 002 (instead of the default 022)<br /> to get the thumbnails working (do this in Site Admin -> Global Settings).';
$lang['show_path_text'] = 'Show the path of the element at the bottom of the editor.';
$lang['toolbar_tab'] = 'Toolbar';
$lang['toolbar_help'] = 'These options should contain a comma separated list of button/control names to insert into the toolbar.';
$lang['toolbar_text'] = 'Toolbar';
$lang['language_text'] = 'Choose language:';
$lang['editor_width_text']='Width of editor field';
$lang['editor_height_text']='Height of editor field';
$lang['auto']='Auto';
$lang["or"]="or";
$lang['bodycss_text'] = 'Body tag CSS';
$lang['bodycss_help'] = 'leave BLANK or set DEFAULT for use PAGE CSS. Note: To make editor background color white put the following in the blank: background-color:white;';
$lang['showtogglebutton_text']="Show checkbox to turn wysiwyg on/off";
$lang["togglewysiwyg"]="Turn WYSIWYG on/off";
$lang['styles_tab'] = 'CSS Styles';
$lang['styles_help'] = 'If you leave the field empty, TinyMCE will parse your CSS file and list the styles contained in it to the user. If you want only some styles presented to the user, specify them in the form "Style 1=style1; Style 2=style2" in the first field below. In the remaining fields, you can specify CSS styles for Tables, Rows and Cell which are used in the correpsonding dialogs. For an empty field, the styles from the general styles are used.';
$lang['css_styles_text'] = 'General';
$lang['accessdenied'] = 'Access Denied. Please check your permissions.';
$lang['error'] = 'Error!';
$lang['submit'] = 'Submit';
$lang['update'] = 'Update';
$lang['settings'] = 'Settings';
$lang["settingssaved"]="Settings was saved";
$lang["toolbarsaved"]="Toolbar was saved";
$lang["stylessaved"]="Styles was saved";
$lang["testareatext"]="Test area, no content will be harmed playing with this...";

$lang['help'] = "
	<h3>What does this do?</h3>
	<p>Enables a basic version of TinyMCE to be used as a WYSIWYG.</p>
	<h3>How do I use it?</h3>
	<p>Install it, then go to User Preferences and Set TinyMCE to be your wysiwyg of choice.</p>
	<p>Set the proper permission for groups allowed to set preferences for TinyMCE.</p>
";


$lang['changelog'] = "
		<ul>
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
		<p>Removed the nonworking 'replace cms-links while writing'</p>
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
		<p>Author: Simon Brown &lt;simon@uptoeleven.ws&gt;</p>
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
";
?>
