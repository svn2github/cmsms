<?php
if( !$gCms ) exit();

if( ! $this->CheckPermission('Modify Templates') )
  {
    // todo, permissions message here
    return;
  }


// check if we have a template name
if( !(isset($params['template']) || isset($params['prefix'])) )
  {
    $params['errors'] = $this->Lang('error_insufficientparams');
    $this->Redirect($id,'defaultadmin','',$params);
    return;
  }
if( !isset($params['mode']) || !isset($params['title']) )
  {
    $params['errors'] = $this->Lang('error_insufficientparams');
    $this->Redirect($id,'defaultadmin','',$params);
    return;
  }

// handle errors.
if( isset($params['errors']) )
  {
    echo $this->ShowErrors($params['errors']);
  }

$params['origaction'] = $params['action'];
$contents = "";
if( $params['mode'] == 'add' )
  {
    $this->smarty->assign('formstart',
			    $this->CreateFormStart ($id, 'do_addtemplate',$returnid,'post','',
						    false, '', $params));
    $this->smarty->assign('templatename',
			  $this->CreateInputText( $id, 'template', "", 40 ));
    $this->smarty->assign('hidden',
			  $this->CreateInputHidden($id, 'prefix', $params['prefix'] ));
    if( isset($params['defaulttemplatepref']) && $params['defaulttemplatepref'] != '' )
      {
	$contents = $this->GetPreference($params['defaulttemplatepref']);
      }
  }
 else 
   {
     $this->smarty->assign('formstart',
			    $this->CreateFormStart ($id, 'do_edittemplate',$returnid,'post','',
						    false, '', $params));
     $this->smarty->assign('templatename',$params['template']);
     $this->smarty->assign('hidden',
			   $this->CreateInputHidden($id, 'template', $params['template'] ));
     $contents = $this->GetTemplate($params['prefix'].$params['template']);
   }

$this->smarty->assign('title',cms_html_entity_decode($params['title']));
$this->smarty->assign('prompt_templatename',$this->Lang('prompt_templatename'));
$this->smarty->assign('prompt_template',$this->Lang('prompt_template'));
$this->smarty->assign('template',
		      $this->CreateSyntaxArea ($id, $contents, 'templatecontent'));
$this->smarty->assign('submit',$this->CreateInputSubmit ($id, 'submitbutton',
							 $this->Lang ('submit')));
$this->smarty->assign('cancel',$this->CreateInputSubmit ($id, 'cancel', 
							 $this->Lang ('cancel')));
$this->smarty->assign('formend',$this->CreateFormEnd());
echo $this->ProcessTemplate('edittemplate.tpl');

?>