<?php

if (!isset($gCms))
	exit;
$this->RemovePreference();
$this->RemovePermission('modifyprintingsettings');
$this->DeleteTemplate("pdftemplate");
$this->DeleteTemplate("printtemplate");
$this->DeleteTemplate("linktemplate");
?>