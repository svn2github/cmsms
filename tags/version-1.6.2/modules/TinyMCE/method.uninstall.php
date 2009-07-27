<?php
$this->RemovePreference();
$this->RemovePermission('Use advanced toolbar');
$this->Audit( 0, $this->Lang('friendlyname'), $this->Lang('uninstalled'));
?>