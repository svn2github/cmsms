<?php
//echo "<div style='float:right;width:220px;'>";
$this->smarty->assign('currentpath',$this->Lang("currentpath"));
$this->smarty->assign('path',$path);
//echo "<h2>$path</h2>";
$this->smarty->assign('dirformstart',$this->CreateFormStart($id,'newdir',$returnid));
//echo $this->CreateFormStart($id,'newdir',$returnid);
$this->smarty->assign('hiddenpath',$this->CreateInputHidden($id,"path",$path));
//echo $this->CreateInputHidden($id,"path",$path);
$this->smarty->assign('newdirnametext',$this->Lang("newdirname"));
//echo $this->Lang("newdirname");
$this->smarty->assign('newdirnameinput',$this->CreateInputText($id,"newdirname",""));
//echo $this->CreateInputText($id,"newdirname","");
$this->smarty->assign('dirsubmit', $this->CreateInputSubmit($id,"go",$this->Lang("ok"),"",""));
//echo $this->CreateInputSubmit($id,"go",$this->Lang("ok"),"","");
$this->smarty->assign('dirformend',$this->CreateFormEnd());
//echo $this->CreateFormEnd();
//echo "</div>";

//echo "<div style='margin-right:200px'>";
$this->smarty->assign('formstart',$this->CreateFormStart($id, 'filesform',$returnid));
//echo $this->CreateFormStart($id, 'filesform',$returnid);


/*

<script type="text/javascript">
function selectall() {
	checkboxes = document.getElementsByTagName("input");
	for (i=0; i<checkboxes.length ; i++) {
	  if (checkboxes[i].type == "checkbox") checkboxes[i].checked=!checkboxes[i].checked;
	}
}
</script>
*/
  
  //echo $this->CreateInputHidden($id,"path",$path);
  //echo $this->CreateInputDropdown($id,"selectedaction",$actions);
$themeObject = &$gCms->variables['admintheme'];
$actions=array($this->Lang("deleteselected")=>"deleteselected");
$this->smarty->assign('actiondropdown',$this->CreateInputDropdown($id,"selectedaction",$actions));
$this->smarty->assign('okinput', $this->CreateInputSubmit($id,"ok",$this->Lang("ok"),"","",$this->Lang("confirmselected")));
  //echo $this->CreateInputSubmit($id,"ok",$this->Lang("ok"),"","",$this->Lang("confirmselected"));
$this->smarty->assign('tagallinput',$this->CreateInputCheckBox($id,"tagall","tagall","","onclick='selectall();'"));
$this->smarty->assign('filenametext',$this->Lang("filename"));
$this->smarty->assign('fileownertext',$this->Lang("fileowner"));
$this->smarty->assign('filepermstext',$this->Lang("fileperms"));
$this->smarty->assign('fileinfotext',$this->Lang("fileinfo"));
$this->smarty->assign('filesizetext',$this->Lang("filesize"));
$this->smarty->assign('filedatetext',$this->Lang("filedate"));
$this->smarty->assign('actionstext',$this->Lang("actions"));

$countdirs=0; $countfiles=0; $countfilesize=0;
$files=array();
for ($i=0; $i<count($filelist);$i++) {
  
  $onerow = new stdClass();
	//echo "\n<tr class='$row' valign='middle'><td width='10px' valign='middle'>\n";
	if ($filelist[$i]["dir"]) {
		//echo "&nbsp;";
		$onerow->checkbox="&nbsp;";
	} else {
	  $onerow->checkbox=$this->CreateInputCheckBox($id,"file_".base64_encode($filelist[$i]["name"]),"true","");
	  //echo $this->CreateInputCheckBox($id,"file_".base64_encode($filelist[$i]["name"]),"true","");
	}
//	echo "\n</td><td width='100%' valign='middle'>\n";
  $onerow->iconlink=$this->CreateLink($id,
    			     						"changedir",
    											"",
    											$this->GetFileIcon($filelist[$i]["ext"],$filelist[$i]["dir"]),
    											array("newdir"=>$filelist[$i]["name"],"path"=>$path,"sortby"=>$sortby));

/*	echo $this->CreateLink($id,
    			     						"changedir",
    											"",
    											$this->GetFileIcon($filelist[$i]["ext"],$filelist[$i]["dir"]),
    											array("newdir"=>$filelist[$i]["name"],"path"=>$path,"sortby"=>$sortby));
  */
  //echo 
  $link=$filelist[$i]["name"];
  if ($filelist[$i]["dir"]) {
  	if ($filelist[$i]["name"]!="..") $countdirs++;
    $onerow->txtlink=$this->CreateLink($id,
    			     						"changedir",
    											"",
    											$link,
    											array("newdir"=>$filelist[$i]["name"],"path"=>$path,"sortby"=>$sortby));
  } else {
  	$countfiles++;
  	$countfilesize+=$filelist[$i]["size"];
    //echo "<a href='".$filelist[$i]["url"]."' target='_blank'>".$link."</a>";
    $onerow->txtlink="<a href='".$filelist[$i]["url"]."' target='_blank'>".$link."</a>";
  }
 // echo "\n</td><td valign='middle' align='right'>\n";
 // echo $filelist[$i]["fileinfo"];
  //echo "&nbsp;&nbsp;\n</td><td valign='middle'>\n";
  $onerow->fileinfo=$filelist[$i]["fileinfo"];
  if ($filelist[$i]["name"]=="..") {
		//echo "&nbsp;";
		$onerow->fileaction="&nbsp;";
		$onerow->filepermissions="&nbsp;";
	} else {
    $onerow->fileowner=$filelist[$i]["fileowner"];
    $onerow->filepermissions=$filelist[$i]["permissions"];
  }
  if ($filelist[$i]["dir"]) {
   $onerow->filesize="&nbsp;";
  	//echo "&nbsp;";
  } else {
  	$unit=$this->Lang("bytes");
  	$size=$filelist[$i]["size"];
  	if ($size>10000 && $size<(1024*1024)) {
  		$size=round($size/1024);
  		$unit=$this->Lang("kb");
  	}
  	if ($size>(1024*1024)) {
  		$size=round($size/(1024*1024),1);
  		$unit=$this->Lang("mb");
  	}
  	//echo $size."&nbsp;".$unit;
  	$onerow->filesize=$size."&nbsp;".$unit;
  }
  //echo "&nbsp;&nbsp;\n</td><td valign='middle'>&nbsp;";
  if (!$filelist[$i]["dir"]) {
    $onerow->filedate=str_replace(" ","&nbsp;",date($this->Lang("filedateformat"),$filelist[$i]["date"]));
  //  echo str_replace(" ","&nbsp;",date($this->Lang("filedateformat"),$filelist[$i]["date"]));
  } else {
    $onerow->filedate="&nbsp;";
  }
  //echo "</td><td valign='middle'>&nbsp;";
  if ($filelist[$i]["name"]=="..") {
		//echo "&nbsp;";
		$onerow->fileaction="&nbsp;";
	} else {
		//echo $this->Slash($path,$filelist[$i]["name"]);
		if ($filelist[$i]["writable"]) {
  		if ($filelist[$i]["dir"]) {
  		  $onerow->fileaction=$this->CreateLink($id,"deletedir",'',$themeObject->DisplayImage('icons/system/delete.gif', lang('delete'),'','','systemicon'),array("dirname"=>$filelist[$i]["name"],"path"=>$path,"sortby"=>$sortby),$this->Lang("confirmsingledirdelete"));
	  		//echo $this->CreateLink($id,"deletedir",'',$themeObject->DisplayImage('icons/system/delete.gif', lang('delete'),'','','systemicon'),array("dirname"=>$filelist[$i]["name"],"path"=>$path,"sortby"=>$sortby),$this->Lang("confirmsingledirdelete"));
		  } else {
			  //$warnmessage="";
       // if ($confirmsingledelete) 
         $warnmessage=$this->Lang("confirmsingledelete");
          $onerow->fileaction=$this->CreateLink($id,"deletefile",'',$themeObject->DisplayImage('icons/system/delete.gif', lang('delete'),'','','systemicon'),array("filename"=>$filelist[$i]["name"],"path"=>$path,"sortby"=>$sortby),$warnmessage);
        //echo $this->CreateLink($id,"deletefile",'',$themeObject->DisplayImage('icons/system/delete.gif', lang('delete'),'','','systemicon'),array("filename"=>$filelist[$i]["name"],"path"=>$path,"sortby"=>$sortby),$warnmessage);
		  }
		} else {
		  $onerow->fileaction="<img src='../modules/FileManager/icons/themes/default/actions/padlock.gif' alttext='".$this->Lang("notwritable")."' />\n";
		  //echo "<img src='../modules/FileManager/icons/themes/default/actions/padlock.gif' alttext='Not writable' />\n";
		}
  }
  //echo "\n</td></tr>\n";
  //if ($row=="row2") $row="row1"; else $row="row2";
  array_push($files, $onerow);
}
$this->smarty->assign_by_ref('files', $files);
$this->smarty->assign('itemcount', count($files));
$counts=$countfilesize." ".$this->Lang("bytesin")." ".$countfiles." ";
if ($countfiles==1) $counts.=$this->Lang("file"); else $counts.=$this->Lang("files");
$counts.=" ".$this->Lang("and")." ".$countdirs." ";
if ($countdirs==1) $counts.=$this->Lang("subdir"); else $counts.=$this->Lang("subdirs");
$this->smarty->assign('countstext',$counts);
$this->smarty->assign('formend',$this->CreateFormEnd());

//  echo $this->CreateInputHidden($id,"path",$path);
 // echo $this->CreateInputHidden($id,"viewmode",$viewmode);
  //echo $this->CreateInputDropdown($id,"selectedaction",$actions);
  //echo $this->CreateInputSubmit($id,"ok",$this->Lang("ok"),"","",$this->Lang("confirmselected"));
  ?>
<?php
//echo $this->CreateFormEnd();
//echo "</div>";

echo $this->ProcessTemplate('filemanager.tpl');

?>
