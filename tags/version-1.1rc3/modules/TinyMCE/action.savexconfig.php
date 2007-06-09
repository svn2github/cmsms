<?php
if (!$this->VisibleToAdminUser()) $this->Redirect($id,"defaultadmin",$returnid);

if (isset($params['extraconfig']))
  $this->SetPreference('extraconfig', $params['extraconfig'] );

$this->Redirect($id,"defaultadmin",$returnid,array("module_message"=>$this->Lang("xconfigsaved"),"tab"=>"xconfig"));
?>