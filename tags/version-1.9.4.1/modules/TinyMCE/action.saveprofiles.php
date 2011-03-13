<?php

if (!isset($gCms))
  exit;
if (!$this->VisibleToAdminUser())
  $this->Redirect($id, "defaultadmin", $returnid);

if (isset($params["resettoolbars"])) {
  $this->ResetSettings("toolbars");
  $this->Redirect($id, "defaultadmin", $returnid, array("module_message" => $this->Lang("settingsreset"), "tab" => "profiles"));
}
if (isset($params["submitbasic"])) {
  //Should probably be removed soon
  if (isset($params['toolbar1']))
    $params["toolbar1"] = str_replace("cmsmslink", "cmslinker", $params["toolbar1"]);
  if (isset($params['toolbar2']))
    $params["toolbar2"] = str_replace("cmsmslink", "cmslinker", $params["toolbar2"]);

  if (isset($params['toolbar1']))
    $this->SetPreference('toolbar1', $params['toolbar1']);
  if (isset($params['toolbar2']))
    $this->SetPreference('toolbar2', $params['toolbar2']);
  if (isset($params['toolbar3']))
    $this->SetPreference('toolbar3', $params['toolbar3']);
  if (isset($params['allow_tables']))
    $this->SetPreference('allow_tables', $params['allow_tables']);
  else
    $this->SetPreference('allow_tables', "0");
  //if (isset($params['showtogglebutton'])) $this->SetPreference('showtogglebutton', $params['showtogglebutton'] ); else $this->SetPreference('showtogglebutton', "0" );
  if (isset($params['showfilemanagement']))
    $this->SetPreference('showfilemanagement', 1);
  else
    $this->SetPreference('showfilemanagement', 0);
  if (isset($params['restrictdirs']))
    $this->SetPreference('restrictdirs', 1);
  else
    $this->SetPreference('restrictdirs', 0);
  //if (isset($params['allowupload'])) $this->SetPreference('allowupload', 1 ); else $this->SetPreference('allowupload', 0 );
}
if (isset($params["submitadvancedprofile"])) {
  if (isset($params['advanced_toolbar1']))
    $this->SetPreference('advanced_toolbar1', $params['advanced_toolbar1']);
  if (isset($params['advanced_toolbar2']))
    $this->SetPreference('advanced_toolbar2', $params['advanced_toolbar2']);
  if (isset($params['advanced_toolbar3']))
    $this->SetPreference('advanced_toolbar3', $params['advanced_toolbar3']);
  if (isset($params['advanced_allow_tables']))
    $this->SetPreference('advanced_allow_tables', $params['advanced_allow_tables']);
  else
    $this->SetPreference('advanced_allow_tables', "0");
  //if (isset($params['advanced_showtogglebutton'])) $this->SetPreference('advanced_showtogglebutton', $params['advanced_showtogglebutton'] ); else $this->SetPreference('advanced_showtogglebutton', "0" );
  if (isset($params['advanced_showfilemanagement']))
    $this->SetPreference('advanced_showfilemanagement', 1);
  else
    $this->SetPreference('advanced_showfilemanagement', 0);
  //if (isset($params['advanced_allowupload'])) $this->SetPreference('advanced_allowupload', 1 ); else $this->SetPreference('advanced_allowupload', 0 );
}
if (isset($params["submitfront"])) {
  if (isset($params['front_toolbar1']))
    $this->SetPreference('front_toolbar1', $params['front_toolbar1']);
  if (isset($params['front_toolbar2']))
    $this->SetPreference('front_toolbar2', $params['front_toolbar2']);
  if (isset($params['front_toolbar3']))
    $this->SetPreference('front_toolbar3', $params['front_toolbar3']);
  if (isset($params['front_allow_tables']))
    $this->SetPreference('front_allow_tables', $params['front_allow_tables']);
  else
    $this->SetPreference('front_allow_tables', "0");
  // if (isset($params['front_showtogglebutton'])) $this->SetPreference('front_showtogglebutton', $params['front_showtogglebutton'] ); else $this->SetPreference('front_showtogglebutton', "0" );
}
$this->Redirect($id, "defaultadmin", $returnid, array("module_message" => $this->Lang("profilesaved"), "tab" => "profiles"));
?>