<?php
if (!isset($gCms)) exit;
$this->RemovePreference();
$this->RemovePermission('Use advanced toolbar');
$this->RemoveEventHandler( 'Core', 'ContentPostRender' );
$this->Audit( 0, $this->Lang('friendlyname'), $this->Lang('uninstalled'));
?>