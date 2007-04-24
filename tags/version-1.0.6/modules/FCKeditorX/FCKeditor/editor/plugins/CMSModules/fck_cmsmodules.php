<?php

$inclfilename = '../include.php';

while(!@file_exists($inclfilename)){
            $inclfilename = "../".$inclfilename;
}
@require_once($inclfilename);

if (!isset($_POST["Module"]))
  $_POST["Module"] = "";

$modules  = Array();
$list_par = Array();
$i = 0;
$j = 0;
$sel = 0;
$prec = 0;
$suc = 0;

foreach ($gCms->modules as $key => $value) 
{
	$modules[$i] = $key;
	$moduless[$key] = $key;
	
	if ($_POST['Module'] == '' || $_POST['Module'] == $key)
	{
		foreach ($value['object']->GetParameters() as $key3 => $value3) 
		{
			$_POST['Module'] = $key;
			$sel = $i;
			
			if ($value3['name'] == 'lang')
				continue;
	
			$list_par[$j] = Array(); 
			
			$list_par[$j][0] = $value3['name'];
			$list_par[$j][1] = $value3['default'];
			$list_par[$j][2] = $value3['help'];
			
			$j++;
		}
	}
	$i++;
}

if ($sel == 0)
	$prec = $modules[count($modules)-1];
else
	$prec = $modules[$sel-1];
	
if ($sel == (count($modules)-1))
	$suc = $modules[0];
else
	$suc = $modules[$sel+1];

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
	<head>
		<title>CMS Modules - Insert CAL to CMS Made Simple Modules</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<meta content="noindex, nofollow" name="robots">
		<script type="text/javascript">
		<!--
			var oEditor			= window.parent.InnerDialogLoaded(); 
			var FCK				= oEditor.FCK; 
			var FCKLang			= oEditor.FCKLang ;
			var FCKConfig		= oEditor.FCKConfig ;
			var FCKCMSCCMSModules	= oEditor.FCKCMSModules; 
			 
	
			window.onload = function ()	{ 
				// First of all, translates the dialog box texts.
				oEditor.FCKLanguageManager.TranslatePage(document);
				
				window.parent.SetOkButton( true );		//Show the "Ok" button. 				
			} 
		 
			function set_mod(who){
			
				obj = document.getElementById('Module');
				
				obj.value = who;
				
				
				form = document.getElementById('CMSModules');
				
				form.submit();
			}
		
		
			function ricarica(){
			
				cmb = document.getElementById('cmbModules');
				mod = document.getElementById('Module');
				
				mod.value = cmb.value;
				
				form = document.getElementById('CMSModules');
				
				form.submit();
			}
			
			//Code that runs after the OK button is clicked 
			function Ok() {
				//Validate is option is selected
				var sTagOutput = "";
				
				cmbModules = document.getElementById('cmbModules').value;
						
				sTagOutput += "{cms_module module='"+cmbModules+"' ";
				
				n = document.getElementById('num_par').value;
				
				var params = Array();
<?php
foreach ($list_par as $i => $arr)
{
?>
				params[<?php echo $i; ?>] = "<?php echo $arr[0]; ?>"
<?php
}	
?>
				
				for(i=0;i<n;i++){
					par  = document.getElementById('par'+i);
					
					if (par.value != "")
					sTagOutput += " "+ params[i] +"='"+par.value+"' ";
				}
				
				sTagOutput += "}";
						
				oEditor.FCK.InsertHtml( sTagOutput );
				
				return true;
			}
		//-->
		</script>
	</head>
			
	<body scroll="no" >
		<table width="100%">
			<tr>
				<td colspan="2"><span fckLang="DlgCMSCommentPageSelection">Select a CMSMS module:</span>&nbsp;</td>
			</tr>
			<tr>
				<td colspan="2">
					<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" name="CMSModules" id="CMSModules">
						<table width="100%">
							<tr>
								<td align="center" colspan="2" width="100%">
<?php
echo $gCms->modules[$modules[$sel]]["object"]->CreateInputHidden("", "Module", $modules[$sel], ' id="Module" ');
echo $gCms->modules[$modules[$sel]]["object"]->CreateInputSubmit("", "prec", "<<", ' onclick="set_mod(\''.$prec.'\');" ');
echo '&nbsp;';
echo $gCms->modules[$modules[$sel]]["object"]->CreateInputDropdown("", "cmbModules", $moduless, $sel, $modules[$sel], ' id="cmbModules" onchange="ricarica();" ');
echo $gCms->modules[$modules[$sel]]["object"]->CreateInputSubmit("", "suc", ">>", ' onclick="set_mod(\''.$suc.'\');" ');
?>
								</td>
							</tr>
							<tr>
								<td align="right" width="50%"></td>
								<td align="left" width="50%">
									<?php echo $gCms->modules[$modules[$sel]]["object"]->CreateInputHidden("", "num_par", count($list_par), ' id="num_par" '); ?>
  								</td>
							</tr>
<?php

for($i=0;$i<count($list_par);$i++) 
{
?>
							<tr>
								<td align="right">
									<?php echo $list_par[$i][0]; ?>
								</td>
								<td align="left">
									<?php echo $gCms->modules[$modules[$sel]]["object"]->CreateInputText("", 'par' . $i, $list_par[$i][1], '', '', ''); ?>
								</td>
							</tr>
							<tr>
								<td align="left" colspan="2">
									<i><?php echo $list_par[$i][2] ?></i><br/>
									<br/>
								</td>
							</tr>
<?php
}
?>
 						</table>
					</form>
				</td>
			</tr>
		</table>
	</body>
</html> 
