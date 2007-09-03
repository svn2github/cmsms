<?php
{
  global $_SESSION;

  if( !$this->CheckPermission('Modify Site Preferences' ) )
    {
	$this->_DisplayErrorPage( $id, $params, $returnid,
				  $this->Lang('accessdenied'));
	return;
    }

  if( isset($params['resetcache']) )
    {
      unset($_SESSION['modulemanager_cache']);
      $this->Redirect($id,'defaultadmin',$returnid,array('active_tab'=>'prefs'));
    }
  else if( isset($params['reseturl']) )
    {
      $this->SetPreference('module_repository',
			   'http://modules.cmsmadesimple.org/soap.php?module=ModuleRepository');
      $this->Redirect($id,'defaultadmin',$returnid,array('active_tab'=>'prefs'));
    }

  if( !isset( $params['url'] ) )
    {
	$this->_DisplayErrorPage( $id, $params, $returnid,
				  $this->Lang('error_insufficientparams'));
	return;
    }

  if( isset($params['input_dl_chunksize']) )
    {
      $this->SetPreference('dl_chunksize',trim($params['input_dl_chunksize']));
    }
  $this->SetPreference('module_repository',trim($params['url']));
  $this->Redirect($id,'defaultadmin',$returnid,array('active_tab'=>'prefs'));
}
?>