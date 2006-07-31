<?php
{
  if( !$this->CheckPermission('Modify Site Preferences' ) )
    {
	$this->_DisplayErrorPage( $id, $params, $returnid,
				  $this->Lang('accessdenied'));
	return;
    }

  if( !isset( $params['url'] ) )
    {
	$this->_DisplayErrorPage( $id, $params, $returnid,
				  $this->Lang('error_insufficientparams'));
	return;
    }

  $this->SetPreference('module_repository',trim($params['url']));
  $this->Redirect($id,'defaultadmin',$returnid,array('active_tab'=>'prefs'));
}
?>