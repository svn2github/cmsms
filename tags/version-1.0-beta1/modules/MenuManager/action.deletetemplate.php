<?php
if (!isset($gCms)) exit;

$this->DeleteTemplate($params['tplname']);
$this->Redirect($id, 'defaultadmin', $returnid);

?>
