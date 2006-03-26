<?php
if (!isset($gCms)) exit;

echo $this->StartTabHeaders();

echo $this->SetTabHeader('dbtemplates',$this->Lang('dbtemplates'));
echo $this->SetTabHeader('filetemplates',$this->Lang('filetemplates'));

echo $this->EndTabHeaders();

echo $this->StartTabContent();


/*****************************************
 * Handle the Database Tab
 ****************************************/
echo $this->StartTab('dbtemplates');

$templates = $this->ListTemplates();

$rowclass = 'row1';
$entryarray = array();

foreach ($templates as $onetemplate)
{
	$onerow = new stdClass();

	$onerow->templatename = $this->CreateLink($id, 'edittemplate', $returnid, $onetemplate, array('tplname' => $onetemplate));
	$onerow->rowclass = $rowclass;

	$onerow->editlink = $this->CreateLink($id, 'edittemplate', $returnid, $gCms->variables['admintheme']->DisplayImage('icons/system/edit.gif', $this->Lang('edittemplate'),'','','systemicon'), array('tplname' => $onetemplate));
	$onerow->deletelink = $this->CreateLink($id, 'deletetemplate', $returnid, $gCms->variables['admintheme']->DisplayImage('icons/system/delete.gif', $this->Lang('deletetemplate'),'','','systemicon'), array('tplname' => $onetemplate), $this->Lang('areyousure'));

	array_push($entryarray, $onerow);

	($rowclass=="row1"?$rowclass="row2":$rowclass="row1");
}

$this->smarty->assign('addlink', $this->CreateLink($id, 'addtemplate', $returnid, $gCms->variables['admintheme']->DisplayImage('icons/system/newobject.gif', $this->Lang('addtemplate'),'','','systemicon'), array(), '', false, false, '') .' '. $this->CreateLink($id, 'addtemplate', $returnid, $this->Lang('addtemplate'), array(), '', false, false, 'class="pageoptions"'));

$this->smarty->assign_by_ref('items', $entryarray);
$this->smarty->assign('itemcount', count($entryarray));

echo $this->ProcessTemplate('dbtpllist.tpl');

echo $this->EndTab();
/*****************************************
 * Finished Database Tab
 ****************************************/



/*****************************************
 * Handle the File Tab
 ****************************************/
echo $this->StartTab('filetemplates');

$dir = dirname(__FILE__) . '/templates';
$dh  = opendir($dir);
$files = array();
while (false !== ($filename = readdir($dh)))
{
	$files[] = $filename;
}
if (isset($dh))
	closedir($dh);

$rowclass = 'row1';
$entryarray = array();

$badfiles = array('filetpllist.tpl', 'dbtpllist.tpl', 'edittemplate.tpl', 'importtemplate.tpl');

foreach ($files as $onefile)
{
	//If this is not a .tpl file, skip it
	if (!endswith($onefile, '.tpl')) continue;

	//If this is in badfiles, skip it
	if (in_array($onefile, $badfiles)) continue;

	$onerow = new stdClass();

	$onerow->filename = $onefile;
	$onerow->rowclass = $rowclass;

	$onerow->importlink = $this->CreateLink($id, 'importtemplate', $returnid, $gCms->variables['admintheme']->DisplayImage('icons/system/copy.gif', $this->Lang('importtemplate'),'','','systemicon'), array('tplname' => $onefile));

	array_push($entryarray, $onerow);

	($rowclass=="row1"?$rowclass="row2":$rowclass="row1");
}

$this->smarty->assign_by_ref('items', $entryarray);
$this->smarty->assign('itemcount', count($entryarray));

$this->smarty->assign('filenametext', $this->Lang('filename'));
$this->smarty->assign('nofilestext', $this->Lang('notemplatefiles', dirname(__FILE__) . '/templates'));

#Display template
echo $this->ProcessTemplate('filetpllist.tpl');

echo $this->EndTab();
/*****************************************
 * Finished File Tab
 ****************************************/

echo $this->EndTabContent();
?>
