<?php

if (!$this->VisibleToAdminUser()) {
	$this->ShowError($this->Lang("accessdenied"));
	return;
}
if (!isset($params["tab"]))$params["tab"]="settings";
$this->DisplayAdminPanel($id, $params, $returnid);

?>