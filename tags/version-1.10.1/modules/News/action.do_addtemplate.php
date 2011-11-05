<?php
if( !$gCms ) exit();

if( isset( $params['cancel'] ) )
  {
    if( isset( $params['active_tab'] ) && $params['active_tab'] != '' )
      {
	$this->myRedirectToTab($id, $params['active_tab']);
      }
    $this->Redirect($id,'defaultadmin');
  }

if( ! $this->CheckPermission('Modify Templates') )
  {
    // todo, permissions message here
    return;
  }

$template = "";
if( isset( $params['template'] ) )
  {
    $template = trim($params['template']);
  }
  
$prefix = "";
if( isset( $params['prefix'] ) )
  {
    $prefix = trim($params['prefix']);
  }

if( !isset( $params['templatecontent'] ) )
  {
    $params['errors'] = $this->Lang('error_insufficientparams');
    $this->Redirect($id,$params['origaction'],'',$params);
    return;
  }

if( $template == "" || $prefix == "" )
  {
    $params['errors'] = $this->Lang('error_insufficientparams');
    $this->Redirect($id,$params['origaction'],'',$params);
    return;
  }


$newtemplate = $prefix . $template;

// check if this template already exists
$txt = trim($this->GetTemplate($newtemplate));
if( $txt != "" )
  {
    $params['errors'] = $this->Lang('error_templatenameexists');
    $this->Redirect($id,$params['origaction'],'',$params);
    return;
  }

// we're ready to set it
$this->SetTemplate($newtemplate,$params['templatecontent']);

if( isset( $params['active_tab'] ) && $params['active_tab'] != '' )
  {
    $this->myRedirectToTab($id, $params['active_tab'] );
  }
$this->Redirect($id,'defaultadmin');

?>