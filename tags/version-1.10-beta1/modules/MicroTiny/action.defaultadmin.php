<?php
if( !isset($gCms) ) exit;

if (!$this->VisibleToAdminUser()) {
	$this->ShowErrors($this->Lang("accessdenied"));
	return;
}

if ($this->GetPreference("usestaticconfig")=="1") {
  if (!microtiny_utils::IsTempWritable()) {
		echo $this->ShowErrors($this->Lang("usestaticconfigwarning"));
	} else {
		if ($this->GetPreference("usestaticconfig")) {
		  microtiny_utils::SaveStaticConfig();
		}
	}
}

echo $this->StartTabHeaders();
echo $this->SetTabHeader("example",$this->Lang("example"));
echo $this->SetTabHeader("settings",$this->Lang("settings"));
echo $this->EndTabHeaders();

echo $this->StartTabContent();

echo $this->StartTab("example");
include(dirname(__FILE__).'/function.admin_example.php');
echo $this->EndTab();

echo $this->StartTab("settings");
include(dirname(__FILE__).'/function.admin_settings.php');
echo $this->EndTab();

echo $this->EndTabContent();
?>