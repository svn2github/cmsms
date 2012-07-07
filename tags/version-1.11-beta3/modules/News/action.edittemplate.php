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
    $smarty->assign('formstart',
			    $this->CreateFormStart ($id, 'do_addtemplate',$returnid,'post','',
						    false, '', $params));
    $smarty->assign('templatename',
			  $this->CreateInputText( $id, 'template', "", 40 ));
    $smarty->assign('hidden',
			  $this->CreateInputHidden($id, 'prefix', $params['prefix'] ));
    if( isset($params['templatecontent']) )
      {
	$contents = $params['templatecontent'];
      }
    else if( isset($params['defaulttemplatepref']) && $params['defaulttemplatepref'] != '' )
      {
	$contents = $this->GetPreference($params['defaulttemplatepref']);
      }
  }
 else 
   {
     $smarty->assign('formstart',
			    $this->CreateFormStart ($id, 'do_edittemplate',$returnid,'post','',
						    false, '', $params));
     $smarty->assign('templatename',$params['template']);
     $smarty->assign('hidden',
			   $this->CreateInputHidden($id, 'template', $params['template'] ));
     $contents = $this->GetTemplate($params['prefix'].$params['template']);
     $smarty->assign('apply',$this->CreateInputSubmit ($id, 'applybutton',
						   $this->Lang('apply')));
   }

$smarty->assign('warning_preview',$this->Lang('warning_preview'));
$smarty->assign('title',cms_html_entity_decode($params['title']));
$smarty->assign('prompt_templatename',$this->Lang('prompt_templatename'));
$smarty->assign('prompt_template',$this->Lang('prompt_template'));
$smarty->assign('template',
		      $this->CreateSyntaxArea ($id, $contents, 'templatecontent'));
$smarty->assign('submit',$this->CreateInputSubmit ($id, 'submitbutton',
							 $this->Lang ('submit')));
$smarty->assign('cancel',$this->CreateInputSubmit ($id, 'cancel', 
							 $this->Lang ('cancel')));
$smarty->assign('formend',$this->CreateFormEnd());
echo $this->ProcessTemplate('edittemplate.tpl');

?>
