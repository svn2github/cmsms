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

$submit = (isset($params['submit'])) ? $params['submit'] : $this->Lang('searchsubmit');
$searchtext = (isset($params['searchtext'])) ? $params['searchtext'] : $this->GetPreference('searchtext','');
$this->smarty->assign('startform', $this->CreateFormStart($id, 'dosearch', $returnid, 'get'));
$this->smarty->assign('label', '<label for="'.$id.'searchinput">'.$this->Lang('search').'</label>');
$this->smarty->assign('inputbox', $this->CreateInputText($id, 'searchinput', $searchtext, 20, 50));
$this->smarty->assign('submitbutton', $this->CreateInputSubmit($id, 'submit', $submit));
if( $origreturnid != $returnid )
	$this->smarty->assign('hidden', $this->CreateInputHidden($id, 'origreturnid', $origreturnid ));
else
	$this->smarty->assign('hidden', '');
$this->smarty->assign('endform', $this->CreateFormEnd());

echo $this->ProcessTemplateFromDatabase('displaysearch');

?>
