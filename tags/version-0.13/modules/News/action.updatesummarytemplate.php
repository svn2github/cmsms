<?php
if (!isset($gCms)) exit;

if( !$this->CheckPermission( 'Modify Templates' ) )
{
  return;
}
if( isset( $params['defaultsbutton'] ) )
{
   // reset to system defaults
   $this->SetTemplate('displaysummary',$this->GetSummaryHtmlTemplate());
}
else
{
  $this->SetTemplate('displaysummary', $params['templatecontent']);
}
$this->Redirect($id, 'defaultadmin');
?>
