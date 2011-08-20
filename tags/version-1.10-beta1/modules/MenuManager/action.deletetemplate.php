<?php
if (!isset($gCms)) exit;
if (!$this->CheckPermission('Manage Menu')) exit;

$this->clear_cache();
$this->DeleteTemplate($params['tplname']);
$this->Redirect($id, 'defaultadmin', $returnid);

?>
