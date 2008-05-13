<?php
{
  $active_tab = -1;
  if( isset($params['active_tab']))
    {
      $active_tab = $params['active_tab'];
    }
  
  echo $this->StartTabHeaders();
  if( $this->CheckPermission('Modify Modules') )
    {
      echo $this->SetTabHeader('modules',$this->Lang('availmodules'),
			  $active_tab == 'modules' );
    }
  if( $this->CheckPermission('Modify Site Preferences') )
    {
      echo $this->SetTabHeader('prefs',$this->Lang('preferences'),
			  $active_tab == 'prefs' );
    }
  echo $this->EndTabHeaders();

  echo $this->StartTabContent();
  if( $this->CheckPermission('Modify Modules') )
    {
      echo $this->StartTab('modules');
      $this->_DisplayAdminModulesTab( $id, $params, $returnid );
      echo $this->EndTab();
    }
  if( $this->CheckPermission('Modify Site Preferences') )
    {
      echo $this->StartTab('prefs');
      $this->_DisplayAdminPrefsTab( $id, $params, $returnid );
      echo $this->EndTab();
    }
  echo $this->EndTabContent();
}
?>