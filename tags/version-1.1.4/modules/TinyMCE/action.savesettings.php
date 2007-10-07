<?php

if (!$this->VisibleToAdminUser()) $this->Redirect($id,"defaultadmin",$returnid);

if (isset($params['striptags']))
$this->SetPreference('striptags', 'true' );
else
$this->SetPreference('striptags', 'false' );

if (isset($params['allowtables']))
$this->SetPreference('allow_tables', '1' );
else
$this->SetPreference('allow_tables', '0' );

if (isset($params['editor_width_auto']))
$this->SetPreference('editor_width_auto', 1 );
else
$this->SetPreference('editor_width_auto', 0 );

if (isset($params['editor_width']))
$this->SetPreference('editor_width', $params['editor_width'] );


$this->SetPreference('editor_width_unit', $params['editor_width_unit'] );


if (isset($params['editor_height_auto']))
$this->SetPreference('editor_height_auto', 1 );
else
$this->SetPreference('editor_height_auto', 0 );

if (isset($params['editor_height']))
$this->SetPreference('editor_height', $params['editor_height'] );


$this->SetPreference('editor_height_unit', $params['editor_height_unit'] );

if (isset($params['newlinestyle']))
$this->SetPreference('newlinestyle', $params['newlinestyle'] );


if (isset($params['source_formatting']))
$this->SetPreference('source_formatting', 1 );
else
$this->SetPreference('source_formatting', 0 );

if (isset($params['onlyxhtmlelements']))
$this->SetPreference('onlyxhtmlelements', 1 );
else
$this->SetPreference('onlyxhtmlelements', 0 );

if (isset($params['showtogglebutton']))
$this->SetPreference('showtogglebutton', 1 );
else
$this->SetPreference('showtogglebutton', 0 );

if (isset($params['show_path']))
$this->SetPreference('show_path', 1 );
else
$this->SetPreference('show_path', 0 );
/*
if (isset($params['replace_cms_selflink']))
$this->SetPreference('replace_cms_selflink', 1 );
else
$this->SetPreference('replace_cms_selflink', 0 );
*/
if (isset($params['enable_thumbs']))
$this->SetPreference('enable_thumbs', 1 );
else
$this->SetPreference('enable_thumbs', 0 );

/*if (isset($params['language']))
 $this->SetPreference('language', $params['language'] );
 */
if (isset($params['bodycss'])) $this->SetPreference('bodycss', $params['bodycss'] );
if (isset($params['dropdownblockformats'])) $this->SetPreference('dropdownblockformats', $params['dropdownblockformats'] );

$this->Redirect($id,"defaultadmin",$returnid,array("module_message"=>$this->Lang("settingssaved"),"tab"=>"settings"));
?>
