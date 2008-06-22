<?php

  if( ! $this->CheckPermission('Modify Templates') )
    {
      // todo, permissions message here
      return;
    }

  if( !(isset($params['template'])) )
    {
      $this->_DisplayErrorPage( $id, $params, $returnid, 
				$this->Lang('error_insufficientparams'));
      return;
    }

  $this->DeleteTemplate($params['template']);
  $this->myRedirectToTab($id, 'uploadform_template');

?>