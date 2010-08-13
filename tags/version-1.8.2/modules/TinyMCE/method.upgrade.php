<?php
if (!isset($gCms)) exit;

$this->RemovePermission('Modify TinyMCE');

switch($oldversion) {
  case "1.2":
    $this->Install();
  case "2.0.0":
    $this->SetPreference('source_formatting', '0' );
  //	$this->SetPreference('language', 'en' );
  case "2.0.1":
  case "2.0.2":
    $this->SetPreference('replace_cms_selflink', '0' );
    $this->SetPreference('show_path', '1' );
    $this->SetPreference('css_styles', '' );
    $this->SetPreference('table_styles', '' );
    $this->SetPreference('table_row_styles', '' );
    $this->SetPreference('table_cell_styles', '' );
  case "2.0.4":
    $this->RemovePreference('language');
    $this->SetPreference('newlinestyle', 'br' );
    $this->SetPreference('onlyxhtmlelements', '0' );
    $this->SetPreference('dropdownblockformats', 'p,div,h1,h2,h3,h4,h5,h6,div,blockquote,dt,dd,code,samp' );
}

$this->RemovePermission('Modify TinyMCE');
$this->CreatePermission('allowadvancedprofile', $this->Lang('allowadvancedprofile'));
$this->AddEventHandler( 'Core', 'ContentPostRender', false );
$this->Audit( 0, $this->Lang('friendlyname'), $this->Lang('upgraded',$this->GetVersion()));

?>