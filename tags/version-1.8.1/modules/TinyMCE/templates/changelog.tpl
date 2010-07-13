<ul>
<li>
  <p><strong>Version 2.7.2</strong></p>
  <p>Updated to Tiny 3.3.8</p>
  <p>Added a missing langstring</p>
  <p>Made static config the default and made sure it gets rewritten every time.</p>
</li>
<li>
  <p><strong>Version 2.7.1</strong></p>
  <p>Updated to Tiny 3.3.5.1</p>
</li>
<li>
  <p><strong>Version 2.7.0</strong></p>
  <p>Implemented a plugin-system, so other modules can register plugins in Tiny allowing stuff like very easy insertion of tags etc.</p>
  <p>Implemented an option to allow inplace resizing of the editor field</p>
  <p>Updated to Tiny 3.3.3</p>
</li>
<li>
  <p><strong>Version 2.6.6</strong></p>
  <p>Updated to Tiny 3.3.2</p>
  <p>Fixes internal linker so it honers use_hierarchy=false</p>
  <p>Fixed default value for cmslinkerstyle</p>
  <p>Newline in menutext no longer breaks tiny (could come from pastes)</p>
</li>
<li>
  <p><strong>Version 2.6.5</strong></p>
  <p>Updated to Tiny 3.3.1</p>
  <p>New option to allow basic FM operations even if Modify Files permission is not checked</p>
</li>
<li>
  <p><strong>Version 2.6.4</strong></p>
  <p>Now not depending on admin-theme's acons anymore. Thanks Nuno</p>
  <p>Updated to Tiny 3.3-final</p>
  <p>Fixed spellchecker which broke in 2.6.3. Sorry! My fault...</p>
</li>
<li>
  <p><strong>Version 2.6.3</strong></p>
  <p>Added an option to generate cms-compatible thumbnails when uploading files though the filepicker.</p>
  <p>Updated to Tiny 3.3rc1</p>
</li>
<li>
  <p><strong>Version 2.6.2</strong></p>
  <p>Changed the way {cms_selflink}-style internal links was rendered. Fixed the <img>-situation. Thanks for the solution Calguy!</p>
  <p>Updated to Tiny 3.3-beta2</p>
</li>
<li>
  <p><strong>Version 2.6.1.1</strong></p>
  <p>Fixed presentation of the newly saved restrict dir option</p>
</li>
<li>
  <p><strong>Version 2.6.1</strong></p>
  <p>Implemented restricting users of basic profile to a dir called by their username</p>
  <p>Renamed a couple of files to profiles instead of toolbars. Seemed more logical now.</p>
  <p>Implemented deletion of (empty-only) subdirs in filepicker</p>
  <p>Rewrote extraconfig logic so multiline-stuff are possible</p>
</li>
<li>
  <p><strong>Version 2.6.0</strong></p>
  <p>Now includes spellchecker functionality, thanks Nuno!</p>
</li>
<li>
  <p><strong>Version: 2.5.6</strong></p>
  <p>Fixed the cmslinkerstyle option, so it does what it should</p>
  <p>Reenabled Lithaunian language</p>
</li>
<li>
  <p><strong>Version: 2.5.5 (calguy1000)</strong></p>
  <p>Modified to work with session.use_cookies = 0</p>
  <p>Updated to Tiny 3.2.7, bugfixin release (silmarillion)</p>
  <p>Now check for illegal chars in filename when uploading files.</p>
</li>
<li>
  <p><strong>Version: 2.5.4</strong></p>
  <p>Revised global $cms, preparing for 1.7-api</p>
  <p>Fixed bug disabling the wysiwyg togglebox upon saving the basic toolbar profile</p>
  <p>Fixed bug with truncated menutexts with quotes in them not getting properly escaped, breaking config</p>
  <p>Updated to latest TinyMCE 3.2.6, introducing a wordcount-plugin</p>
</li>
<li>
  <p><strong>Version: 2.5.3</strong></p>
  <p>Rewrote frontend functionality to use events instead of callbacks, preparing for 1.7-api</p>
  <p></p>
</li>
<li>
  <p><strong>Version: 2.5.2</strong></p>
  <p>Fixed wrong path to delete icon in filepicker when using customized admin dir (thanks MeiRieM)</p>
  <p>Removed the clean on paste for now, leaving it enabled. Seemed to do no difference for most people...</p>
</li>
<li>
  <p><strong>Version: 2.5.1</strong></p>
  <p>Updated to TinyMCE 3.2.5 and updated translations as well</p>
  <p>Fixed extraconfig</p>
  <p></p>
</li>
<li>
  <p><strong>Version: 2.5.0</strong></p>
  <p>Fixed a small syntax-error in config file breaking tiny in frontend in IE</p>
  <p>Fixed a problem concerning resetting settings to default values (introduced due the need of unique id's of submitbuttons)</p>
  <p>Fixed a couple of typos</p>
</li>
<li>
  <p><strong>Version: 2.5.0-beta3</strong></p>
  <p>Had to move toggle button option to advanced page instead of profiles. Not possible to control presently.</p>
  <p>Rewrote front/backend detection. Should be a lot more stable.</p>
  <p>Updated to Tiny 3.2.3, should have a new and improve Paste logic automagically detecting Word-pastes and cleaning</p>
</li>
<li>
  <p><strong>Version: 2.5.0-beta2</strong></p>
  <p>Made surrounding selected text with something possible in the custom-dropdown</p>
  <p>Fixed resetting advanced-profile</p>
  <p>Fixed table controls when only enabled in advanced profile</p>
  <p>Fixed a lot of validation issues</p>
  <p>Implemented file deletion</p>
  <p>Revamped permission-policies to take Modify Files into account more</p>
</li>
<li>
  <p><strong>Version: 2.5.0-beta1</strong></p>
  <p>Implemented onthefly-resizing of uploaded images</p>
  <p>Rewrote toolbars into profiles allowing a seperate advanced profile for selected users</p>
  <p>Made stylesheet include screen-css even if other categories was also selected (and the screen-only option was enabled, that is)</p>
  <p>Fixed a small bug when trying to make internal links out of images</p>
  <p>Updated tiny to 3.2.2</p>
</li>

<li>
  <p><strong>Version: 2.4.13</strong></p>
  <p>Fixed resetting toolbars</p>
</li>

<li>
  <p><strong>Version: 2.4.12</strong></p>
  <p>Added support for configuring the third toolbar</p>
  <p>Added option to show actual thumbnail-files</p>
  <p>Fixed filetype icons in FilePicker</p>
  <p>Restructured tab-content into seperat files for easier maintenance</p>
  <p>Implemented | as seperator in toolbars</p>
  <p>Fixed frontend-toolbars</p>
</li>

<li>
  <p><strong>Version: 2.4.11</strong></p>
  <p>Fixed small potention warning on stat()-usage in Filepicker</p>
  <p>Added support for new HasCapability api-call</p>
</li>

  <li>
  <p><strong>Version: 2.4.10</strong></p>
  <p>Sorry I forgot...</p>
	</li>

	<li>
  <p><strong>Version: 2.4.9</strong></p>
  <p>Fixed FilePicker with regards to new xss-security</p>
  <p>Updated to TinyMCE 3.2.1</p>
	</li>

	<li>
	<p><strong>Version: 2.4.8</strong></p>
	<p>Updated to TinyMCE 3.2.0.1</p>
	<p>Fixed using proper hierarchy for pretty urls</p>
	<p>Added advanced option to startup editors in disabled state</p>
	</li>
		<li>		
		<p><strong>Version: 2.4.7</strong></p>
		<p>Removed simplepaste plugin and reinserted stock paste. That other solution confused people.</p>
		<p>Added multiple *box entries to dropdown in adv link</p>
		<p>Fixed filepicker when used on https-sites</p>
		<p>Now rewriting config-file with every showing when using static config, fixing the reversed toggle-box bug</p>
		</li>
		<li>
		<p><strong>Version: 2.4.5</strong></p>
		<p>Fixed problem with cmslinker not allowing to select parentpages Sorry guys, that was a newly introduced problem</p>
		<p>Fixed a small bug which could cause relative urls to generate something including the host-name</p>
		</li>
		<li>
		<p><strong>Version: 2.4.4</strong></p>
		<p>Now optionally only includes stylesheets tagged as 'screen' or 'all' when reading styles</p>
		<p>Moved changelog to template. It was huuuge...</p>
		<p>Updated simplepaste-plugin</p>
		<p>Added an input field with stuff added to stylesheet</p>
		<p>Did an option to use a static</p> 
		</li>
		<li>
		<p><strong>Version: 2.4.3</strong></p>
		<p>Implemented another trick to prevent stylesheet content from being cached</p>
		<p>Now orders the stylesheet after assoc_order instead of date</p>
		</li>
		<li>
		<p><strong>Version: 2.4.2</strong></p>
		<p>Fixed only showing images even if link to all filetypes should ba possible</p>
		<p>Updated to Tiny 3.1.0.1</p>
		</li>
		<li>
		<p><strong>Version: 2.4.1</strong></p>
		<p>Fixed bug causing tiny to break if using custom css-styles</p>
		<p>Reimplemented file upload/dir-creation in FilePicker</p>
		<p>Updated to Tiny 3.0.9</p>
		<p>Implemented pretty urls for href-style links when enabled in config.php</p>
		</li>
		<li>
		<p><strong>Version: 2.4.0</strong></p>
		<p>Distributed with CMSMS 1.3</p>
		</li>
		<li>		
		<p>Version: 2.4.0b5</p>		
		<p>Added help for toolbar</p>
		<p>Added cmslinker-style</p>
		<p>Added Filepicker-style</p>
		<p>Fixed the bug where content changes was undon when wysiwyg was disabled with the check box</p>
		<p>Added option to turn reletive-urls off</p>
		<p>Nuno redesigned filepicker dialogue</p>				
		<p>Added customizable dimensions of FilePicker</p>
		<p>Numerous bug fixes</p>	
		</li>
		<li>
		<p>Version: 2.4.0b4</p>		
		<p>Enabled extraconfig-option</p>
		<p>Implemented option for forced_root_block</p>
		<p>Work on supported pretty-urls, thanks Nuno!</p>
		<p>Updated to Tiny 3.0.8</p>					
		</li>
		<li>
		<p>Version: 2.4.0b3</p>		
		<p>Fixed frontend usage</p>
		<p>added a couple of upgrades from cmsmslink-plugin to cmslinker</p>		
		<p>Added links for pluginhelp</p>
		<p>Fixed js-error breaking editor in IE</p>
		<p>Added buttons for resetting to default values</p>
		</li>
		<li>
		<p>Version: 2.4.0b2</p>		
		<p>Did prettier default value for custommenu</p>
		<p>Fixed htmlentity problems in cmslinker-part crashing whole editor</p>		
		</li>
		<li>
		<p>Version: 2.4.0b1</p>		
		<p></p>
		<p>Upgraded to latest TinyMCE</p>
		<p>Cmsms-linker reimplemented</p>
		<p>Custom dropdownmenu implemented</p>
		<p>Filepicker bugs fixed, linke using it for linking to non-image-files</p>
		<p>stylesheet code rewritten using adodb instead of plain mysql/pgsql. should be lots safer now</p>
		</li>
		<li>
		<p>Version: 2.4.0a2</p>		
		<p></p>
		<p>Upgraded to latest TinyMCE</p>
		<p>Toolbars for frontend/backend can now be configured seperately</p>
		<p>Filepicker reimplemented, simple for now, but works</p>
		</li>
		<li>
		<p>Version: 2.4.0a1</p>		
		<p></p>
		<p>Upgraded to TinyMCE 3.0</p>		
		<p>Stopped the stupid seperation between advanced and basic version. Now only this one is in development, kept as trim as possible, but with lots of plugins</p>		
		<p>Started organizing admin-settings logically</p>
		</li>
		<li>
		<p>Version: 2.2.7</p>		
		<p>Fixed injection vulnerability in content_css.php</p>
		</li>
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