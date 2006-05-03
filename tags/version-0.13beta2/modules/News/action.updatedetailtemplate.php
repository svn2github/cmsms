<?php
if (!isset($gCms)) exit;

if( !$this->CheckPermission( 'Modify Templates' ) )
{
	return;
}

if( isset( $params['defaultsbutton'] ) )
{
	// reset to system defaults
	$this->SetTemplate('displaydetail',$this->GetDetailHtmlTemplate());
}
else
{
	$this->SetTemplate('displaydetail', $params['templatecontent2']);
}

$this->Redirect($id, 'defaultadmin');
?>
