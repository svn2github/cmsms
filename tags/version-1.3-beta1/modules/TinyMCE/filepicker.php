<?php
$CMS_ADMIN_PAGE=1;
$path = dirname(dirname(dirname($_SERVER['SCRIPT_FILENAME'])));
require_once($path . DIRECTORY_SEPARATOR . 'include.php');
check_login();
$userid = get_userid();

$config=&$gCms->GetConfig();

$modules =&$gCms->modules;
$tiny=$modules["TinyMCE"]['object'];

$filepickerstyle=$tiny->GetPreference("filepickerstyle","both");
$tiny->smarty->assign("filepickerstyle",$filepickerstyle);

$tiny->smarty->assign("rooturl",$config["root_url"]);
$tiny->smarty->assign("admindir",$config["admin_dir"]);
$tiny->smarty->assign("filepickertitle",$tiny->Lang("filepickertitle"));
$tiny->smarty->assign("youareintext",$tiny->Lang("youareintext"));

$rootpath=""; $rooturl="";
if ($_GET["type"]=="image") {
	$rootpath=$config["image_uploads_path"];
	$rooturl=$config["image_uploads_url"];
	$tiny->smarty->assign("isimage","1");
} else {
  $rootpath=$config["uploads_path"];
  $rooturl=$config["uploads_url"];
  $tiny->smarty->assign("isimage","0");
}
$rooturl=substr($rooturl,7); //remove http:/
$rooturl=substr($rooturl,strpos($rooturl,"/")); //Remove domain

$subdir="";
if (isset($_GET["subdir"])) $subdir=trim($_GET["subdir"]);
$subdir=str_replace(".","",$subdir); //avoid hacking attempts

if ($subdir!="" && $subdir[0]=="/") $subdir=substr($subdir,1);

$thisdir=$rootpath.'/';
if ($subdir!="") $thisdir.=$subdir."/";
$thisurl=$rooturl.'/';
if ($subdir!="") $thisurl.=$subdir."/";
		
$tiny->smarty->assign("subdir",$subdir);

function sortfiles($file1,$file2) {
	if ($file1["isdir"] && !$file2["isdir"]) return -1;
	if (!$file1["isdir"] && $file2["isdir"]) return 1;
	return strnatcasecmp($file1["name"],$file2["name"]);
}
		
$files = Array();

$d = dir($thisdir);
while ($entry = $d->read()) {
	if ($entry[0]==".") continue;
	if (substr($entry,0,6)=="thumb_") continue;
	
  $file=array();
  $file["name"]=$entry;
	$file["fullpath"]=$thisdir.$entry;
	$file["fullurl"]=$thisurl.$entry;
	$file["ext"]=strtolower(substr($entry,strrpos($entry,".")));
		
	$file["isdir"]=is_dir($file["fullpath"]);
	
	if ($_GET["type"]=="image") {
		if (!$file["isdir"]) {		
	    if ($file["ext"]!=".jpg" && $file["ext"]!=".gif" && $file["ext"]!=".png") continue;
	    if ($filepickerstyle!="filename") {
/*	    	$file["thumbnail"]="<img src='";
	    	$file["thumbnail"].=$config["root_url"]."/lib/filemanager/ImageManager/thumbs.php?img=";
*/
	    $file["thumbnail"]=$tiny->GetThumbnailFile($entry,$thisdir,$thisurl);		
    /*	if ($subdir!="") {
	    	  $file["thumbnail"].=$subdir."/".$entry;
	    	} else {
	    		$file["thumbnail"].=$entry;
	    	}
	    	$file["thumbnail"].="' align='middle' />";
*/	    
			}
	    $imgsize=getimagesize($file["fullpath"]);
	    if ($imgsize) {
	    	$file["dimensions"]=$imgsize[0]."x".$imgsize[1];
	    } else {
	    	$file["dimensions"]="&nbsp;";
	    }	    
		} 
	}
			
	if (!$file["isdir"]) {
		$info=stat($file["fullpath"]);
		$file["size"]=$info["size"];
		//getimagesize($file["fullpath"]);
	}
	$files[]=$file;
}
$d->close();
usort($files,"sortfiles");

$showfiles=array();

if ($subdir!="") {
  $onerow = new stdClass();
	$onerow->isdir="1";
	$onerow->thumbnail="";
	$onerow->dimensions="";
	$onerow->size="";
	$newsubdir=dirname($subdir);
	$onerow->namelink="<a href='".$config["root_url"]."/modules/TinyMCE/filepicker.php?type=".$_GET["type"]."&amp;subdir=".$newsubdir."'>[..]</a>\n";
  array_push($showfiles, $onerow);
}

$filecount=0;
$dircount=0;
foreach($files as $file) {
  $onerow = new stdClass();
  $onerow->name=$file["name"];
  if ($file["isdir"]) {
  	$onerow->isdir="1";
		$onerow->namelink="<a href='".$config["root_url"]."/modules/TinyMCE/filepicker.php?type=".$_GET["type"]."&amp;subdir=".$subdir."/".$file["name"]."'>[".$file["name"]."]</a>\n";
		$dircount++;
  } else {
  	$onerow->isdir="0";
  	if (isset($file["thumbnail"])) $onerow->thumbnail=$file["thumbnail"];
  	$onerow->fullurl=$file["fullurl"];
  	if (isset($file["dimensions"])) {
  	  $onerow->dimensions=$file["dimensions"];
  	} else {
  		$onerow->dimensions="&nbsp;";
  	}
	  
    	
  	$onerow->size=number_format($file["size"],0,"",$tiny->Lang("thousanddelimiter"));  	  
  	$filecount++;
  } 
  array_push($showfiles, $onerow);
}
$tiny->smarty->assign('dircount', $dircount);
$tiny->smarty->assign('filecount', $filecount);

$tiny->smarty->assign('sizetext', $tiny->Lang("size"));
$tiny->smarty->assign('dimensionstext', $tiny->Lang("dimensions"));

$tiny->smarty->assign_by_ref('files', $showfiles);
$tiny->smarty->assign('filescount', count($showfiles));

		/*		if ($filepickerstyle!="filename") {
				  echo "<div class='thumbnail'>";
				  echo "<a href='#' onclick='SubmitElement(\"".$file["fullurl"]."\")'>";
				  echo $file["thumbnail"];
				  echo "</a>";
				  echo "</div>";
				}
				if ($filepickerstyle!="thumbnails") {
			    echo "<a href='#' onclick='SubmitElement(\"".$file["fullurl"]."\")'>".$file["name"]."</a>\n";
				}
			}
			
			
			echo "</td></tr>";
		}
		
		
		?>


<?php
*/
echo $tiny->ProcessTemplate('filepicker.tpl');

?>