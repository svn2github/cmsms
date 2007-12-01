<?php
//	$this->CreatePermission('Modify TinyMCE', $this->Lang("permission"));

		$this->SetPreference('bodycss', 'default');

		$this->SetPreference('striptags', 'false');
		
		$this->SetPreference('source_formatting', '0' );
		$this->SetPreference('onlyxhtmlelements', '0' );
		$this->SetPreference('newlinestyle', 'p' );
		$this->SetPreference('editor_width_auto', '1' );
		$this->SetPreference('editor_height_auto', '1' );
		$this->SetPreference('show_path', '1' );
		$this->SetPreference('replace_cms_selflink', '0' );
		$this->SetPreference('allow_tables', '0' );		
		$this->SetPreference('toolbar1', 'cut,paste,pastetext,copy,separator,justifyleft,justifycenter,justifyright,justifyfull,separator,styleselect,formatselect,fontselect,fontsizeselect' );
		$this->SetPreference('toolbar2', 'bold,italic,underline,strikethrough,separator,bullist,numlist,separator,outdent,indent,separator,undo,redo,separator,cmsmslink,link,unlink,anchor,image,charmap,cleanup,separator,forecolor,backcolor,separator,code,fullscreen,help' );
		$this->SetPreference('showtogglebutton', '1' );

		$this->SetPreference('css_styles', '' );
		$this->SetPreference('dropdownblockelements', $this->defaultblockformats );
		
		$this->SetPreference('enable_thumbs', 1);
?>
