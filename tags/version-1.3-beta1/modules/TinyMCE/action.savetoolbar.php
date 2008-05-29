<?php

if (!$this->VisibleToAdminUser()) $this->Redirect($id,"defaultadmin",$returnid);

if (isset($params["reset"])) {
  $this->ResetSettings("toolbars");
  $this->Redirect($id,"defaultadmin",$returnid,array("module_message"=>$this->Lang("settingsreset"),"tab"=>"toolbar"));

}

if (isset($params["resetall"])) {
  $this->ResetSettings();
  $this->Redirect($id,"defaultadmin",$returnid,array("module_message"=>$this->Lang("allsettingsreset"),"tab"=>$params["tab"]));
}

if (isset($params['toolbar1'])) $params["toolbar1"]=str_replace("cmsmslink","cmslinker",$params["toolbar1"]);
if (isset($params['toolbar2'])) $params["toolbar2"]=str_replace("cmsmslink","cmslinker",$params["toolbar2"]);

if (isset($params['toolbar1'])) $this->SetPreference('toolbar1', $params['toolbar1'] );
if (isset($params['toolbar2'])) $this->SetPreference('toolbar2', $params['toolbar2'] );
if (isset($params['allow_tables'])) $this->SetPreference('allow_tables', $params['allow_tables'] ); else $this->SetPreference('allow_tables', "0" );

if (isset($params['front_toolbar1'])) $params["front_toolbar1"]=str_replace("cmsmslink","cmslinker",$params["front_toolbar1"]);
if (isset($params['front_toolbar2'])) $params["front_toolbar2"]=str_replace("cmsmslink","cmslinker",$params["front_toolbar2"]);

if (isset($params['front_toolbar1'])) $this->SetPreference('front_toolbar1', $params['front_toolbar1'] );
if (isset($params['front_toolbar2'])) $this->SetPreference('front_toolbar2', $params['front_toolbar2'] );
if (isset($params['front_allow_tables'])) $this->SetPreference('front_allow_tables', $params['front_allow_tables'] ); else $this->SetPreference('front_allow_tables', "0");

$this->Redirect($id,"defaultadmin",$returnid,array("module_message"=>$this->Lang("toolbarsaved"),"tab"=>"toolbar"));

?>