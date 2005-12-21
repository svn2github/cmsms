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
		<title>CMS Link - Insert CMS Made Simple Link</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<meta content="noindex, nofollow" name="robots">
		<script type="text/javascript">
		<!--
			var oEditor			= window.parent.InnerDialogLoaded(); 
			var FCK				= oEditor.FCK; 
			var FCKLang			= oEditor.FCKLang ;
			var FCKConfig		= oEditor.FCKConfig ;
			var FCKCMSCCMSModules	= oEditor.FCKCMSModules; 
			 
			// oLink: The actual selected link in the editor.
// 			var oLink = FCK.Selection.MoveToAncestorNode( 'A' ) ;
// 			if ( oLink )
// 				FCK.Selection.SelectNode( oLink ) ;
	
			window.onload = function ()	{ 
				// First of all, translates the dialog box texts.
				oEditor.FCKLanguageManager.TranslatePage(document);
				
// 				LoadSelected();							//See function below 
				window.parent.SetOkButton( true );		//Show the "Ok" button. 				
			} 
		 
// 			//If an anchor (A) object is currently selected, load the properties into the dialog 
// 			function LoadSelected()	{
// 				var sSelected;
// 				
// 				if ( oEditor.FCKBrowserInfo.IsGecko ) {
// 					sSelected = FCK.EditorWindow.getSelection();
// 				} else {
// 					sSelected = FCK.EditorDocument.selection.createRange().text;
// 				}
// 
// 				if ( sSelected == "" ) {
// 					alert( 'Please select a text in order to create a (internal) link' );
// 				}
// 
// 			}


      function set_mod(who){
//         alert(who);
          obj = document.getElementById('Module');
          
          obj.value = who;
          
//           cmb = document.getElementById('cmbModules');
//           alert(cmb.innerHTML);
          
          form = document.getElementById('CMSModules');
//           dimmi("f",form,0);
          form.submit();
      }


      function ricarica(){
      
          cmb = document.getElementById('cmbModules');
          mod = document.getElementById('Module');
          
          mod.value = cmb.value;
          
          form = document.getElementById('CMSModules');
//           dimmi("f",form,0);
          form.submit();
      }
      
			//Code that runs after the OK button is clicked 
			function Ok() {
				//Validate is option is selected

// 				alert("OK");
// 				var oPageList = document.getElementById( 'cmbPages' ) ;
// 				if(oPageList.selectedIndex == -1) {
// 					alert('Please select a page in order to create a link');
// 					return false;
// 				}
// 				
// 				var oTagLink = document.getElementById( 'chkTaglink' );
// 				
// 				if (oTagLink.checked) {
// 					//Create special CMS tag
// 					var sSelected;
// 					
// 					if ( oEditor.FCKBrowserInfo.IsGecko ) {
// 						sSelected = FCK.EditorWindow.getSelection();
// 					} else {
// 						sSelected = FCK.EditorDocument.selection.createRange().text;
// 					}
// 				
// 					var sPageId = oPageList[oPageList.selectedIndex].value;
// 					var sTagOutput = "{cms_selflink page='" + sPageId + "' text='" + sSelected + "'}";
// 					
// 					oEditor.FCK.InsertHtml( sTagOutput );
// 								
// 				} else {
// 					var sURL = document.getElementById( 'PageURL' ) ; 
// 					var sPageId = oPageList[oPageList.selectedIndex].value;
// 					oLink = oEditor.FCK.CreateLink( sURL.value + sPageId ) ;
// 					SetAttribute( oLink, 'title'	, document.getElementById( 'txtTitle' ).value ) ;
// 				}
				
// 				var sTagOutput = "{cms_selflink page='' text=''}";
				  
				  
          var sTagOutput = "";
          
          cmbModules = document.getElementById('cmbModules').value;
				  
          sTagOutput += "{cms_module module='"+cmbModules+"' ";
          
          n = document.getElementById('num_par').value;
          
          for(i=0;i<n;i++){
            par  = document.getElementById('par'+i);
            
            if (par.value != "")
              sTagOutput += " "+ par.name +"='"+par.value+"'' ";
          }
          
          sTagOutput += "}";
				
				oEditor.FCK.InsertHtml( sTagOutput );
				
				return true;
			} 



/***********************************************
* Scrollable content Script- © Dynamic Drive (www.dynamicdrive.com)
* This notice must stay intact for use
* Visit http://www.dynamicdrive.com/ for full source code
***********************************************/

var nsstyle='display:""'
if (document.layers)
var scrolldoc=document.scroll1.document.scroll2
function up(){
if (!document.layers) return
if (scrolldoc.top<0)
scrolldoc.top+=10
temp2=setTimeout("up()",50)
}
function down(){
if (!document.layers) return
if (scrolldoc.top-150>=scrolldoc.document.height*-1)
scrolldoc.top-=10
temp=setTimeout("down()",50)
}

function clearup(){
if (window.temp2)
clearInterval(temp2)
}

function cleardown(){
if (window.temp)
clearInterval(temp)
}

//////////////////////////////////////////













			
		//-->
		</script>
	</head>
			
	<body scroll="no" style="overflow:hidden;">
	

	 
		 <table height="100%" cellSpacing="0" cellPadding="0" width="100%" border="0"> 
		 	<tr> 
				<td valign="top">
				
<ilayer name="scroll1" width="100%" height="391" clip="0,0,170,150">
<layer name="scroll2" width="100%" height="391" bgColor="lightyellow">
<div id="scroll3" style="width:100%;height:391px;background-color:lightyellow;overflow:scroll">
				
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

// echo "<pre>";
// print_r($_GET);
// echo "</pre>";
// echo $_SERVER['PHP_SELF'];
// echo "<pre>";
// print_r($_POST);
// echo "</pre>";


$modules  = Array();
$list_par = Array();
$i = 0;
$j = 0;
$sel = 0;
$prec = 0;
$suc = 0;


echo '<form action="'.$_SERVER['PHP_SELF'].'" method="post" name="CMSModules" id="CMSModules">';

// echo '<textarea cols="100" rows="23">';

//   echo $_POST["Module"]."<br/>";
  
foreach ($gCms->modules as $key => $value) {
  
//   echo "Chiave: $key; Valore: $value<br>\n";
// 
//   foreach ($value as $key2 => $value2) {
//       echo "    Chiave: $key2; Valore: $value2<br>\n";
//   }
  

  $modules[$i] = $key;
//   echo $key."<br/>";
  
  if ( (strcmp($_POST["Module"], "") == 0) || (strcmp($_POST["Module"], $key) == 0) )
  foreach ($value["object"]->GetParameters() as $key3 => $value3) {
      
      $_POST["Module"] = $key;
      $sel = $i;
      
      
      if (strcmp($value3['name'],"lang")==0)
        continue;
//       echo "        Chiave: $key3; Valore: $value3<br>\n";

      $list_par[$j] = Array(); 
      
      $list_par[$j][0] = $value3['name'];
      $list_par[$j][1] = $value3['default'];
      $list_par[$j][2] = $value3['help'];
      
//       echo "    ".$value3['name']."       :".$value3['default']."\n";
      
      
//       foreach ($value3 as $key4 => $value4) {
//           echo "            Chiave: $key4; Valore: $value4<br>\n";
//       }      
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
    
    
    if ($sel == (count($modules) - 1))
      $suc = $modules[$sel];
    else
      $suc = $modules[$sel+1];
    
    echo '<input type="hidden" name="Module" id="Module" value="'.$modules[$sel].'"/>';
    echo '<input type="button" name="prec" value="<<" onclick="set_mod(\''.$prec.'\');" /> - ';
    echo $modules[$sel];
    echo ' - <input type="button" name="suc" value=">>" onclick="set_mod(\''.$suc.'\');" />';
    
      echo '   </td>';
    echo '</tr>';  
   echo '<tr>';
    echo '   <td align="center" colspan="2" width="100%">';    
    
		echo '<select id="cmbModules" name="cmbModules"  onchange="ricarica();" >';

    for($i=0;$i<count($modules);$i++) {
        echo '<option value="'.$modules[$i].'" ';
        if ($i == $sel)
            echo ' selected="selected" ';
        echo '>'.$modules[$i].'</option>'."\n";
		}
		echo '</select>';
		
    echo '   </td>';
    echo '</tr>';

   if (isset($list_par[$i]))
   {
        echo '<tr>';
        echo '   <td align="right" width="50%">';
        echo '   </td>';
        echo '   <td align="left" width="50%">';
        echo '<input type="hidden" name="num_par" id="num_par" value="'.count($list_par).'"/>';
        echo      $list_par[$i][1];
        echo '   </td>';
        echo '</tr>';
    }
    
  for($i=0;$i<count($list_par);$i++) {
    echo '<tr>';
    echo '   <td align="right">';
    echo $list_par[$i][0];
    echo '   </td>';
    echo '   <td align="left">';
    echo '       <input type="text" name="'.$list_par[$i][0].'" id="par'.$i.'" value="'.$list_par[$i][1].'">';
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
					
	</div>
</layer>
</ilayer>						
					
				</td>
			</tr>
		</table>
		


	</body>
</html> 
