<?php
header("Content-Type: text/css; charset=" . (isset($config['admin_encoding'])?$config['admin_encoding']:'UTF-8'));

$inclfilename = '../include.php';
while(!@file_exists($inclfilename)){
            $inclfilename = "../".$inclfilename;
}
@require_once($inclfilename);

global $gCms;


echo "FCKConfig.BaseHref = '".$gCms->config["root_url"]."/' ;"."\n\n";

$db =& $gCms->db;

$toolbars = $db->GetOne("SELECT data FROM ".cms_db_prefix()."module_FCKX WHERE fckx_id = 2");

echo $toolbars;

?>

FCKConfig.Plugins.Add( 'CMSModules', 'en,it' ) ;
FCKConfig.Plugins.Add( 'CMSContent', 'en,it,nl' ) ;

FCKConfig.ToolbarSets["Default"] = [
	['Source','-','Templates'],
	['Cut','Copy','Paste','PasteText','PasteWord','-','Print','SpellCheck'],
	['Undo','Redo','-','Find','Replace','-','SelectAll','RemoveFormat'],
	['Bold','Italic','Underline','StrikeThrough','-','Subscript','Superscript'],
	['OrderedList','UnorderedList','-','Outdent','Indent'],
	['JustifyLeft','JustifyCenter','JustifyRight','JustifyFull'],'/',
	['CMSModules','CMSContent','Link','Unlink','Anchor'],//
	['Image','Flash','Table','Rule','Smiley','SpecialChar','UniversalKey'],
	['Form','Checkbox','Radio','TextField','Textarea','Select','Button','ImageButton','HiddenField'],
	'/',
	['Style','FontFormat','FontName','FontSize'],
	['TextColor','BGColor'],
	['About']
] ;

