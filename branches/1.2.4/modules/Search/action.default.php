<?php
if (!isset($gCms)) exit;

$inline = false;
if( isset( $params['inline'] ) )
  {
    $txt = strtolower(trim($params['inline']));
    if( $txt == 'true' || $txt == '1' || $txt == 'yes' )
      {
	$inline = true;
      }
  }
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

// donot remove this line (calguy1000)
if( !$inline ) $id = 'cntnt01';

// Variable named hogan in honor of moorezilla's Rhodesian Ridgeback :) http://forum.cmsmadesimple.org/index.php/topic,9580.0.html
$hogan = "onfocus=\"if(this.value==this.defaultValue) this.value='';\""." onblur=\"if(this.value=='') this.value=this.defaultValue;\"";
$submittext = (isset($params['submit'])) ? $params['submit'] : $this->Lang('searchsubmit');
$searchtext = (isset($params['searchtext'])) ? $params['searchtext'] : $this->GetPreference('searchtext','');
$this->smarty->assign('startform', 
		      $this->CreateFormStart($id, 'dosearch', $returnid, 'get', '', $inline ));
$this->smarty->assign('label', '<label for="'.$id.'searchinput">'.$this->Lang('search').'</label>');
$this->smarty->assign('inputbox', $this->CreateInputText($id, 'searchinput', $searchtext, 20, 50, $hogan));
$this->smarty->assign('submitbutton', $this->CreateInputSubmit($id, 'submit', $submittext));
$this->smarty->assign('submittext', $submittext);

$hidden = '';
if( $origreturnid != $returnid )
  {
    $hidden .= $this->CreateInputHidden($id, 'origreturnid', $origreturnid);
  }
if( isset( $params['modules'] ) )
  {
    $hidden .= $this->CreateInputHidden( $id, 'modules', 
					 trim($params['modules']) );
  }
foreach( $params as $key => $value )
{
  if( preg_match( '/^passthru_/', $key ) > 0 )
    {
      $hidden .= $this->CreateInputHidden($id,$key,$value);
    }
}

if( $hidden != '' )
  {
    $this->smarty->assign('hidden',$hidden);
  }
$this->smarty->assign('endform', $this->CreateFormEnd());

echo $this->ProcessTemplateFromDatabase('displaysearch');

?>
