<?php
//$db = &$this->GetDb();

// remove the database table
/*$dict = NewDataDictionary( $db );
 $sqlarray = $dict->DropTableSQL( cms_db_prefix()."module_filemanager_thumbs" );
 $dict->ExecuteSQLArray($sqlarray);
 */
// remove the sequence
//$db->DropSequence( cms_db_prefix()."module_skeleton_seq" );

// remove the permissions
$this->RemovePermission('Use Filemanager'); //Used in some old versions
$this->RemovePermission('Use Filemanager Advanced');

$this->RemovePreference("uploadmethod");
$this->RemovePreference("uploadboxes");
$this->RemovePreference("iconsize");
$this->RemovePreference("advancedmode");
$this->RemovePreference("showhiddenfiles");
$this->RemovePreference("confirmsingledelete");
// remove the preference
//$this->RemovePreference("sing_loudly");

// put mention into the admin log
$this->Audit( 0, $this->Lang('friendlyname'), $this->Lang('uninstalled'));
?>
