<?php
if (!isset($gCms)) exit;

if( !$this->CheckPermission( 'Modify Site Preferences' ) )
{
  return;
}
$this->SetPreference('showautodiscovery', $params['showautodiscovery']);
$this->SetPreference('autodiscoverylink', $params['autodiscoverylink']);
$this->Redirect($id, 'defaultadmin');
?>
