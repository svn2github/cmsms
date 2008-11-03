<?php

if (!$this->VisibleToAdminUser()) $this->Redirect($id,"defaultadmin",$returnid);

if (isset($params["reset"])) {
  $this->ResetSettings("basic");
  $this->Redirect($id,"defaultadmin",$returnid,array("module_message"=>$this->Lang("settingsreset"),"tab"=>$params["tab"]));
}

if (isset($params['striptags']))
$this->SetPreference('striptags', 'true' );
else
$this->SetPreference('striptags', 'false' );

if (isset($params['editor_width_auto']))
$this->SetPreference('editor_width_auto', 1 );
else
$this->SetPreference('editor_width_auto', 0 );

if (isset($params['skin'])) $this->SetPreference('skin', $params['skin'] );

if (isset($params['editor_width'])) {
  if (is_numeric($params["editor_width"])) $this->SetPreference('editor_width', $params['editor_width'] );
}


if (isset($params['editor_width_unit'])) $this->SetPreference('editor_width_unit', $params['editor_width_unit'] );


if (isset($params['editor_height_auto']))
$this->SetPreference('editor_height_auto', 1 );
else
$this->SetPreference('editor_height_auto', 0 );

if (isset($params['editor_height'])) { 
  if (is_numeric($params["editor_height"])) $this->SetPreference('editor_height', $params['editor_height'] );
}
if (isset($params['editor_height_unit'])) $this->SetPreference('editor_height_unit', $params['editor_height_unit'] );

if (isset($params['filepickerstyle'])) $this->SetPreference('filepickerstyle', $params['filepickerstyle'] );

if (isset($params['fpwidth'])) {
  if (is_numeric($params["fpwidth"])) $this->SetPreference('fpwidth', $params['fpwidth'] );
}
if (isset($params['fpheight'])) {
  if (is_numeric($params["fpheight"])) $this->SetPreference('fpheight', $params['fpheight'] );
}

if (isset($params['allowupload']))
$this->SetPreference('allowupload', 1 );
else
$this->SetPreference('allowupload', 0 );

if (isset($params['dateformat'])) $this->SetPreference('dateformat', $params['dateformat'] );
if (isset($params['timeformat'])) $this->SetPreference('timeformat', $params['timeformat'] );

if (isset($params['skin'])) $this->SetPreference('skin', $params['skin'] );

if (isset($params['imagebrowserstyle'])) $this->SetPreference('imagebrowserstyle', $params['imagebrowserstyle'] );

if (isset($params['source_formatting']))
$this->SetPreference('source_formatting', 1 );
else
$this->SetPreference('source_formatting', 0 );


if (isset($params['showtogglebutton']))
$this->SetPreference('showtogglebutton', 1 );
else
$this->SetPreference('showtogglebutton', 0 );


if (isset($params['show_path']))
$this->SetPreference('show_path', 1 );
else
$this->SetPreference('show_path', 0 );

$this->Redirect($id,"defaultadmin",$returnid,array("module_message"=>$this->Lang("settingssaved"),"tab"=>$params["tab"]));
?>
