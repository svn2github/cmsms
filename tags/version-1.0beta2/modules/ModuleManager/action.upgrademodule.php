<?php
{
  // upgrade a module
  global $gCms;
  
  if( !isset( $params['name'] ) )
    {
      $this->_DisplayErrorPage( $id, $params, $returnid,
				$this->Lang('error_insufficientparams'));
      return;
    }
  $name = $params['name'];
  
  if( !isset( $params['version'] ) )
    {
      $this->_DisplayErrorPage( $id, $params, $returnid,
				$this->Lang('error_insufficientparams'));
      return;
    }
  $version = $params['version'];
  
  $url = $this->GetPreference('module_repository');
  if( $url == '' )
    {
      $this->_DisplayErrorPage( $id, $params, $returnid,
				$this->Lang('error_norepositoryurl'));
      return;
    }
  
  $xmlfile = $name.'-'.$version.'.xml';
  $nu_soapclient =& new nu_soapclient($url);
  if( $err = $nu_soapclient->GetError() )
    {
      $this->_DisplayErrorPage( $id, $params, $returnid,
				'SOAP Error: '.$err);
      return;
    }
  
  // get the xml file from soap
  $xml = $nu_soapclient->call('ModuleRepository.soap_modulexml',array('name' => $xmlfile ));
  if( $err = $nu_soapclient->GetError() )
    {
      $this->_DisplayErrorPage( $id, $params, $returnid,
				'SOAP Error: '.$err);
      return;
    }
  
  // get the md5sum from soap
  $svrmd5 = $nu_soapclient->call('ModuleRepository.soap_modulemd5sum',array('name' => $xmlfile));
  if( $err = $nu_soapclient->GetError() )
    {
      $this->_DisplayErrorPage( $id, $params, $returnid,
				'SOAP Error: '.$err);
      return;
    }
  
  // calculate our own md5sum
  // and compare
  $clientmd5 = md5( $xml );
  
  if( $clientmd5 != $svrmd5 )
    {
      $this->_DisplayErrorPage( $id, $params, $returnid,
				$this->Lang('error_checksum'));
      return;
    }
  
  // woohoo, we're ready to rock and roll now
  // just gotta expand the module
  if( !ModuleOperations::ExpandXMLPackage( $xml, 1 ) )
    {
      $this->_DisplayErrorPage( $id, $params, $returnid,
				ModuleOperations::GetLastError());
      return;
    }

  // we get the version number from the database
  // just incase the module is inactive or something and therefore
  // not loaded.
  $query = "SELECT * FROM ".cms_db_prefix()."modules WHERE module_name = ?";
  $dbresult = $db->Execute( $query, array( $name ) );
  $row = $dbresult->FetchRow();
  $oldversion = $row['version'];

  if( !isset( $gCms->modules[$name] ) )
    {
      echo "DEBUG: module not loaded<br/>";
      if( !ModuleOperations::LoadNewModule( $name ) )
	{
	  // error
	}
    }

  if( !ModuleOperations::UpgradeModule( $name, $oldversion, $version ) )
    {
      // error
    }

  // and redirect back to the start
}
?>