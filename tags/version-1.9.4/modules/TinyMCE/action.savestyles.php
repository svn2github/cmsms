<?php
if (!isset($gCms)) exit;

if (!$this->VisibleToAdminUser()) $this->Redirect($id,"defaultadmin",$returnid);

if (isset($params['css_styles']))
  $this->SetPreference('css_styles', $params['css_styles'] );

if (isset($params['table_styles']))
  $this->SetPreference('table_styles', $params['table_styles'] );

if (isset($params['table_row_styles']))
  $this->SetPreference('table_row_styles', $params['table_row_styles'] );

if (isset($params['table_cell_styles']))
  $this->SetPreference('table_cell_styles', $params['table_cell_styles'] );

$this->Redirect($id,"defaultadmin",$returnid,array("module_message"=>$this->Lang("stylessaved"),"tab"=>"styles"));
?>