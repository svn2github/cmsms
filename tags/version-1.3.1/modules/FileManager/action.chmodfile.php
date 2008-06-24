<?php
if (!isset($gCms)) exit;
if (!$this->AccessAllowed() && !$this->AdvancedAccessAllowed()) exit;

if(!isset($params["filename"]) || !isset($params["path"])) {
	$this->Redirect($id, 'defaultadmin');
}


if (isset($params["newmode"])) {
	//echo deleting;die();
	if (isset($params["cancel"])) {
		$this->Redirect($id,"defaultadmin",$returnid,array("path"=>$params["path"],"module_message"=>$this->Lang("chmodcancelled")));
	} else {
		$newmode=$this->GetModeFromTable($params);
		//echo $newmode;
		if ($this->SetMode($newmode,$params["path"],$params["filename"])) {
			$this->Redirect($id,"defaultadmin",$returnid,array("path"=>$params["path"],"module_message"=>$this->Lang("chmodsuccess")));
		} else {
			$this->Redirect($id,"defaultadmin",$returnid,array("path"=>$params["path"],"module_error"=>$this->Lang("chmodfailure")));
		}
	}
} else {
  $currentmode=$this->GetMode($params["path"],$params["filename"]);	
	$this->smarty->assign('startform', $this->CreateFormStart($id, 'chmodfile', $returnid));
	
	$this->smarty->assign('filename', $this->CreateInputHidden($id,"filename",$params["filename"]));
	$this->smarty->assign('path', $this->CreateInputHidden($id,"path",$params["path"]));
	$this->smarty->assign('endform', $this->CreateFormEnd());
	$this->smarty->assign('newmodetext', $this->Lang("newpermissions"));
	
	$this->smarty->assign('newmode', $this->CreateInputHidden($id,"newmode","newset"));	
	
	$this->smarty->assign('modetable', $this->GetModeTable($id,$this->GetPermissions($params["path"],$params["filename"])));
	
//{$quickinput}
	
	$this->smarty->assign('submit', $this->CreateInputSubmit($id, 'submit', $this->Lang('setpermissions')));
	$this->smarty->assign('cancel', $this->CreateInputSubmit($id, 'cancel', $this->Lang('cancel')));
	echo $this->ProcessTemplate('chmodfile.tpl');

}

?>