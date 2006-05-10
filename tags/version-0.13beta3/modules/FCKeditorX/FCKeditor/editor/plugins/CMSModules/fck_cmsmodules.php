<?php
$inclfilename = '../include.php';

while(!@file_exists($inclfilename)){
            $inclfilename = "../".$inclfilename;
}
@require_once($inclfilename);
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
          
          for(i=0;i<n;i++){
            par  = document.getElementById('par'+i);
            
            if (par.value != "")
              sTagOutput += " "+ par.name +"='"+par.value+"' ";
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
							

<?php
global $gCms;


if (!isset($_POST["Module"]))
  $_POST["Module"] = "";

$modules  = Array();
$list_par = Array();
$i = 0;
$j = 0;
$sel = 0;
$prec = 0;
$suc = 0;


echo '<form action="'.$_SERVER['PHP_SELF'].'" method="post" name="CMSModules" id="CMSModules">';


  
foreach ($gCms->modules as $key => $value) {
    

  $modules[$i] = $key;
  $moduless[$key] = $key;
  
  if ( (strcmp($_POST["Module"], "") == 0) || (strcmp($_POST["Module"], $key) == 0) )
        foreach ($value["object"]->GetParameters() as $key3 => $value3) {
            
            $_POST["Module"] = $key;
            $sel = $i;
            
            if (strcmp($value3['name'],"lang")==0)
              continue;
      
            $list_par[$j] = Array(); 
            
            $list_par[$j][0] = $value3['name'];
//          $list_par[$j][1] = $value3['default'];
            $list_par[$j][2] = $value3['help'];
            
            $j++;
        }
  
  $i++;
} 

  echo '<table width="100%">';
   echo '<tr>';
    echo '   <td align="center" colspan="2" width="100%">';
    

    if ($sel == 0)
      $prec = $modules[count($modules)-1];
    else
      $prec = $modules[$sel-1];
    
    if ($sel == (count($modules)-1))
      $suc = $modules[0];
    else
      $suc = $modules[$sel+1];
    
//     echo '<input type="hidden" name="Module" id="Module" value="'.$modules[$sel].'"/>';
//     CreateInputHidden($id, $name, $value='', $addttext='')
    echo $gCms->modules[$modules[$sel]]["object"]->CreateInputHidden("", "Module", $modules[$sel], ' id="Module" ');
    
//     echo '<input type="button" name="prec" value="<<" onclick="set_mod(\''.$prec.'\');" />';
    echo $gCms->modules[$modules[$sel]]["object"]->CreateInputSubmit("", "prec", "<<", ' onclick="set_mod(\''.$prec.'\');" ');
//     CreateInputSubmit($id, $name, $value='', $addttext='', $image='')
    echo '&nbsp;';
//     echo ' - '.$modules[$sel].' - ';
    echo $gCms->modules[$modules[$sel]]["object"]->CreateInputDropdown("", "cmbModules", $moduless, $sel, $moduless[$sel], ' id="cmbModules" onchange="ricarica();" ');

//     echo '<input type="button" name="suc" value=">>" onclick="set_mod(\''.$suc.'\');" />';
    echo $gCms->modules[$modules[$sel]]["object"]->CreateInputSubmit("", "suc", ">>", ' onclick="set_mod(\''.$suc.'\');" ');
    
      echo '   </td>';
    echo '</tr>';  
//    echo '<tr>';
//     echo '   <td align="center" colspan="2" width="100%">';    
    
// 		echo '<select id="cmbModules" name="cmbModules"  onchange="ricarica();" >';
// 
//     for($i=0;$i<count($modules);$i++) {
//         echo '<option value="'.$modules[$i].'" ';
//         if ($i == $sel)
//             echo ' selected="selected" ';
//         echo '>'.$modules[$i].'</option>'."\n";
// 		}
// 		echo '</select>';
		
// 		CreateInputDropdown($id, $name, $items, $selectedindex=-1, $selectedvalue='', $addttext='')
// 		echo $gCms->modules[$modules[$sel]]["object"]->CreateInputDropdown("", "cmbModules", $moduless, $sel, $moduless[$sel], ' id="cmbModules" onchange="ricarica();" ');
		
//     echo '   </td>';
//     echo '</tr>';


  echo '<tr>';
  echo '   <td align="right" width="50%">';
  echo '   </td>';
  echo '   <td align="left" width="50%">';
//   echo '<input type="hidden" name="num_par" id="num_par" value="'.count($list_par).'"/>';
  echo $gCms->modules[$modules[$sel]]["object"]->CreateInputHidden("", "num_par", count($list_par), ' id="num_par" ');
  echo '   </td>';
  echo '</tr>';
    
  for($i=0;$i<count($list_par);$i++) {
    echo '<tr>';
    echo '   <td align="right">';
    echo $list_par[$i][0];
    echo '   </td>';
    echo '   <td align="left">';
//     echo '       <input type="text" name="'.$list_par[$i][0].'" id="par'.$i.'" value="'.$list_par[$i][1].'">';
    echo $gCms->modules[$modules[$sel]]["object"]->CreateInputText("", $list_par[$i][0], $list_par[$i][1], '', '', ' id="par'.$i.'"');
//     CreateInputText($id, $name, $value='', $size='10', $maxlength='255', $addttext='')
//     CreateInputText($id, $name, $value='', $size='10', $maxlength='255', $addttext='')
    echo '   </td>';
    echo '</tr>';
    echo '<tr>';
    echo '   <td align="left" colspan="2">';
    echo '<i>'.$list_par[$i][2].'</i><br/><br/>';
    echo '   </td>';
    echo '</tr>';
  }
  echo '</table>';

?>              
              </form>
              </td>
						</tr>
					</table>

	</body>
</html> 
