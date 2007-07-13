<?php

if (!$this->VisibleToAdminUser()) $this->Redirect($id,"defaultadmin",$returnid);

if (isset($params['toolbar1']))
$this->SetPreference('toolbar1', $params['toolbar1'] );

if (isset($params['toolbar2']))
$this->SetPreference('toolbar2', $params['toolbar2'] );

$this->Redirect($id,"defaultadmin",$returnid,array("module_message"=>$this->Lang("toolbarsaved"),"tab"=>"plugins"));



?>