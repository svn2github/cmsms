<?php
if (!isset($gCms)) exit;

$id = 'cntnt01';

$origreturnid = $returnid;
if( isset( $params['resultpage'] ) )
  {
    $manager =& $gCms->GetHierarchyManager();
    $node =& $manager->sureGetNodeByAlias($params['resultpage']);
    if (isset($node))
      {
	$content =& $node->GetContent();	
	if (isset($content))
	  {
	    $returnid = $content->Id();
	  }
      }
    else
      {
	$node =& $manager->sureGetNodeById($params['resultpage']);
	if (isset($node))
	  {
	    $returnid = $params['resultpage'];
	  }
      }
  }

$this->smarty->assign('startform', $this->CreateFormStart($id, 'dosearch', $returnid, 'get'));
$this->smarty->assign('inputbox', $this->CreateInputTextWithLabel($id, 'searchinput', '', 20, 50, '',"Search"));
#$this->smarty->assign('inputbox', $this->CreateInputText($id, 'searchinput', '', 20, 50));
$this->smarty->assign('submitbutton', $this->CreateInputSubmit($id, 'submit', $this->lang('search')));
if( $origreturnid != $returnid )
  {
    $this->smarty->assign('hidden',$this->CreateInputHidden($id, 'origreturnid', $origreturnid ) );
  }
$this->smarty->assign('endform', $this->CreateFormEnd());

echo $this->ProcessTemplateFromDatabase('displaysearch');

?>
