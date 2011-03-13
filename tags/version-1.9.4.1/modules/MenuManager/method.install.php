<?php
if (!isset($gCms)) exit;

// create a permission
$this->CreatePermission('Manage Menu', 'Manage Menu');

$this->AddEventHandler('Core','ContentEditPost',false);
$this->AddEventHandler('Core','ContentDeletePost',false);
?>