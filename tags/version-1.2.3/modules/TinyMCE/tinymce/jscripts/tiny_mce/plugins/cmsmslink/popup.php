<?php
//$inclfilename = '../include.php';

$thisdir=dirname(__FILE__);
while(!@file_exists($thisdir."/include.php")){
	$thisdir=dirname($thisdir);
}
@require_once($thisdir."/include.php");
?>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>{$lang_cmsmslink_title}</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<script language="javascript" type="text/javascript" src="../../tiny_mce_popup.js"></script>
        <script language="javascript" type="text/javascript" src="../../utils/mctabs.js"></script>
        <script language="javascript" type="text/javascript" src="../../utils/form_utils.js"></script>
        <script language="javascript" type="text/javascript" src="jscripts/functions.js"></script>
	<base target="_self" />
</head>
<body onload="tinyMCEPopup.executeOnLoad('init();');">
	<form onsubmit="insert();return false;">
		<h3>{$lang_cmsmslink_title}</h3>

		<!-- Gets filled with the selected elements name -->
		<div style="margin-top: 10px; margin-bottom: 10px">
                        <select id="cmbPages" style="WIDTH: 100%" size="14" name="cmbPages">
<?php
if( $gCms->modules["TinyMCE"]['object']->GetPreference("replace_cms_selflink") ) {
	$replacecmsselflink = true;
} else {
	$replacecmsselflink = false;
}

//$content_array = ContentManager::GetAllContent(false);

$content_ops=$gCms->GetContentOperations();
$content_array=$content_ops->GetAllContent();


foreach ($content_array as $one) {
	if ($one->mActive!=1) continue;
	if ($one->FriendlyName() == 'Separator') {
		continue;
	}
	//echo "<option value=\"".$one->Id()."\">".$one->Hierarchy()." ".$one->Name()."</option>\n";
	echo "<option value=\"".$one->Id()."\">".str_repeat("|-",substr_count($one->Hierarchy(),"."))." ".$one->Hierarchy()." ".$one->Name()."</option>";
}
echo "</select>";

if( $replacecmsselflink ) {
	foreach ($content_array as $one) {
		if ($one->FriendlyName() == 'Separator') {
			continue;
		}

		echo "<input type=\"hidden\" name=\"Page" . $one->Id() . "\" value=\"" . str_replace('"',"&quot;", $one->Name()) . "\">\n";
	}
}

if( $replacecmsselflink ) {
	echo "<input type=\"hidden\" name=\"replacecmsselflink\" value=\"1\">\n";
} else {
	echo "Generate taglink? <input type=\"checkbox\" name=\"taglink\" value=\"1\" checked>\n";
	echo "<input type=\"hidden\" name=\"replacecmsselflink\" value=\"0\">\n";
}
?>
			<input type="hidden" name=\"isdefaulttext\" value="0">
		</div>

		<div class="mceActionPanel">
			<div style="float: left">
                  		<input type="button" id="insert" name="insert" value="{$lang_insert}" onclick="insertAction();" />
			</div>

			<div style="float: right">
				<input type="button" id="cancel" name="cancel" value="{$lang_cancel}" onclick="tinyMCEPopup.close();" />
			</div>
		</div>
	</form>
</body>
</html>
