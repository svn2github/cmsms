<?php

header("Content-type:text/javascript; charset=utf-8");
$path = dirname(dirname(dirname($_SERVER['SCRIPT_FILENAME'])));
//$path = dirname(dirname(dirname(__FILE__)));
if (file_exists($path . DIRECTORY_SEPARATOR . 'include.php')) {
  require $path . DIRECTORY_SEPARATOR . 'include.php';
} else {
	$path = dirname(dirname(dirname(__FILE__)));
	require $path . DIRECTORY_SEPARATOR . 'include.php';
}



// Adapted from http://www.php.net/manual/en/function.session-id.php#54084
// session_id() returns an empty string if there is no current session, sotest if a session already exists before calling session_start() to prevent error notices:
if(session_id() == "") {
  session_start();
}
$frontend=false;
if (isset($_SESSION["tiny_live_frontend"]) && $_SESSION["tiny_live_frontend"]!="") {
  $frontend=true;
  $_SESSION["tiny_live_frontend"]="";
}



$config=& $gCms->GetConfig();



$templateid="";
if (isset($_SESSION["tiny_live_templateid"])) $templateid=$_SESSION["tiny_live_templateid"]; 


//$basepath = $gCms->config["root_url"].'/modules/TinyMCE/tinymce/jscripts/tiny_mce/';
//$css = $gCms->config['root_url'] . "/modules/TinyMCE/content_css.php?mediatype=screen&templateid=" .$_SESSION["tiny_live_templateid"] ;

$modules =& $gCms->modules;
$tiny=$modules["TinyMCE"]['object'];

$tiny->smarty->assign("textareas",$_SESSION["tiny_live_textareas"]);

$tiny->smarty->assign("css",$config['root_url']."/modules/TinyMCE/stylesheet.php?templateid=".$templateid."&bogus=".time());

$tiny->smarty->assign("rooturl",$config["root_url"]);

if ($tiny->GetPreference("customdropdown")!="") {
//echo "hi";	
	$lines=explode("\n",$tiny->GetPreference("customdropdown"));
	if (count($lines)>0) {
		$inserts=array();
		foreach($lines as $line) {
			$parts=explode("|",$line);
			if (count($parts)==2) {
				$inserts[]=array("name"=>$parts[0],"snippet"=>$parts[1]);
			}
		}
		if (count($inserts)>0) {
?>

tinymce.create('tinymce.plugins.CustomDropDown', {
	createControl: function(n, cm) {
		switch (n) {
			case 'customdropdown': {
			  var c = cm.createMenuButton('customdropdown', {
					title : '<?php echo $tiny->Lang("customdropdown")?>',
					image : '<?php echo $gCms->config['root_url']?>/modules/TinyMCE/images/customdropdown.gif',
					icons : false
				});
				c.onRenderMenu.add(function(c, m) {				
<?php
     foreach($inserts as $insert) {
     	if ($insert["name"]=='---') {
     		echo "  					m.addSeparator();
";
     	} else {
     	  echo "  					m.add({title : '".$insert["name"]."', onclick : function() {
	  					tinyMCE.activeEditor.execCommand('mceInsertContent', false, '".trim($insert["snippet"])."');
					}});
";
     	}
    }
?>     	
 				});    
 				return c;
			}			
		}
		return null;
		
	}
});
// Register plugin with a short name

tinymce.PluginManager.add('customdropdown', tinymce.plugins.CustomDropDown);
	

<?php
			
    } 
  }
}
?>


<?php
if ($tiny->GetPreference("loadcmslinker","0")=="1") {
	?>
		
//Creates a new plugin class and a custom listbox
tinymce.create('tinymce.plugins.CMSLinkerPlugin', {
	createControl: function(n, cm) {	
		switch (n) {
			case 'cmslinker':			
				var c = cm.createMenuButton('cmslinker', {
					title : '<?php echo $tiny->Lang("cmsmslinker")?>',
					image : '<?php echo $gCms->config['root_url']?>/modules/TinyMCE/images/cmsmslink.gif',
					icons : false
				});

				c.onRenderMenu.add(function(c, m) {
<?php
$content_ops=&$gCms->GetContentOperations();
$content_array=$content_ops->GetAllContent();

$level=0;
$menu="m";

function AddEntry($menu,$entry) {
	global $config;
	global $tiny;
	//////////////////////assume_mod_rewrite stuff...
	//Restructured a bit by morten, replaced by the cms_selflink-option
	/*if (($config['assume_mod_rewrite'] == true || $config['internal_pretty_urls'] == true) 
	&& $config['use_hierarchy'] == true) {
    if ($config['assume_mod_rewrite'] == true) {
		  $link = $config['root_url']."/".$entry->mAlias;
		} else {
			$link= $config['root_url']."/index.php/".$entry->mAlias;
		}
	}	else {
	}}*/
	$link="";
	
	//{format : 'text'}
	echo "
					".$menu.".add({title : '".$entry->Hierarchy()." ".htmlspecialchars($entry->mMenuText,ENT_QUOTES)."', onclick : function() {
						var sel=tinyMCE.activeEditor.selection.getContent();
						if (sel=='') sel='".htmlspecialchars($entry->mMenuText,ENT_QUOTES)."';";
	
	if ($tiny->GetPreference("cmslinkerstyle","selflink")=="a") {
		if (($config['assume_mod_rewrite'] == true || $config['internal_pretty_urls'] == true) 
	     && $config['use_hierarchy'] == true) {
      if ($config['assume_mod_rewrite'] == true) {
  		  $link = $config['root_url']."/".$entry->mAlias;
	  	} else {
		  	$link= $config['root_url']."/index.php/".$entry->mAlias;
		  }
	  }	else {
	    //if ($tiny->GetPreference("cmslinkerstyle","selflink")=="a") {
	    $link="index.php?".$config['query_var']."=".$entry->mAlias;
	    //}
	  }
		echo "
						tinyMCE.activeEditor.execCommand('mceInsertContent', false, '<a href=\"".$link."\">'+sel+'</a>');";
	} else {
		echo "
						tinyMCE.activeEditor.execCommand('mceInsertContent', false, '{cms_selflink page=\"".$entry->mAlias,"\" text=\"'+sel+'\"}');";
	}
	echo "
					}});
";
					/////end
	
	
/*	$link="index.php?".$config['query_var']."=".$entry->mAlias;
	echo "					".$menu.".add({title : '".$entry->Hierarchy()." ".htmlspecialchars($entry->mMenuText,ENT_QUOTES)."', onclick : function() {
						var sel=tinyMCE.activeEditor.selection.getContent({format : 'text'});
						if (sel=='') sel='".htmlspecialchars($entry->mMenuText,ENT_QUOTES)."';
						tinyMCE.activeEditor.execCommand('mceInsertContent', false, '<a href=\"".$link."\">'+sel+'</a>');
					}});
";*/
}

function AddSub($menu,$entry) {
	$newmenu=$menu."m";
	echo "					var ".$newmenu." = ".$menu.".addMenu({title : '".$entry->Hierarchy()." ".htmlspecialchars($entry->mMenuText,ENT_QUOTES)."'});
";
	if ($entry->mType!="sectionheader") {
	  AddEntry($newmenu,$entry);
	  echo "					".$newmenu.".addSeparator();
";
	}
	return $newmenu;
}

foreach ($content_array as $one) {
	if ($one->mActive!=1) continue;
	if ($one->FriendlyName() == 'Separator') {
		continue;
	}
		//print_r($one);
	$thislevel=substr_count($one->Hierarchy(),".");
	//echo $thislevel.":".$level;
  if ($thislevel<$level) {
  	$menu=substr($menu,($level-$thislevel));
			$level-=($level-$thislevel);
			
		}
	//if ($thislevel==$level) {
		if ($one->mChildCount>0) {
			$menu=AddSub($menu,$one);
			$level++;
		} else {
			AddEntry($menu,$one);
		}
	/*} else {
		

		AddEntry($menu,$one);
	}*/
	

}



?>

				});

				// Return the new menu button instance
				return c;
		}

		return null;
	}
});

// Register plugin with a short name
tinymce.PluginManager.add('cmslinker', tinymce.plugins.CMSLinkerPlugin);
	 
	 <?php	 
}

$tiny->smarty->assign("encoding",$tiny->GetPreference('entityencoding','raw'));

$tiny->smarty->assign("skin",$tiny->GetPreference('skin','default'));
$tiny->smarty->assign("skinvariation",$tiny->GetPreference('skinvariation',''));

$plugins=$tiny->GetPreference('plugins',$tiny->plugins_default_enabled);
if (($tiny->GetPreference("allow_tables","0")=="1") || ($tiny->GetPreference("front_allow_tables","0")=="1")) {
	$plugins.=",table";
}
if ($tiny->GetPreference("forcecleanpaste","1")=="1") {
	$plugins.=",simplepaste";
}
$tiny->smarty->assign("plugins",$plugins);

if ($frontend) {
	$tiny->smarty->assign("toolbar1",$tiny->GetPreference('front_toolbar1'));
	$tiny->smarty->assign("toolbar2",$tiny->GetPreference('front_toolbar2'));
	if ($tiny->GetPreference("front_allow_tables","0")=="1") {
		$tiny->smarty->assign("toolbar3","tablecontrols");
	}
} else {
  $tiny->smarty->assign("toolbar1",$tiny->GetPreference('toolbar1'));
	$tiny->smarty->assign("toolbar2",$tiny->GetPreference('toolbar2'));
	if ($tiny->GetPreference("allow_tables","0")=="1") {
		$tiny->smarty->assign("toolbar3","tablecontrols");
	}
}

$tiny->smarty->assign("blockformats", $tiny->GetPreference("dropdownblockformats","p,div,h1,h2,h3,h4,h5,h6,div,blockquote,dt,dd,code,samp"));

if ($tiny->GetPreference("relativeurls",1)==1	) {
	$tiny->smarty->assign("relativeurls","true");
} else {
	$tiny->smarty->assign("relativeurls","false");
}

if (isset($_SESSION["tiny_live_language"])) { 
  $tiny->smarty->assign("language",$_SESSION["tiny_live_language"]);
} else {
	$tiny->smarty->assign("language","en");
}
  

if($tiny->GetPreference('source_formatting',1) == 1) { 
	$tiny->smarty->assign("sourceformatting","true");
} else {
	$tiny->smarty->assign("sourceformatting","false");
}

if($tiny->GetPreference('show_path', 1) == 1) {
	$tiny->smarty->assign("showpath","1");
}

$tiny->smarty->assign("editorwidth","");
if ($tiny->GetPreference("editor_width_auto",1)!=1) {
  $tiny->smarty->assign("editorwidth","'".$tiny->GetPreference("editor_width").$tiny->GetPreference("editor_width_unit")."'");	
}
$tiny->smarty->assign("editorheight","");
if ($tiny->GetPreference("editor_height_auto",1)!=1) {
  $tiny->smarty->assign("editorheight","'".$tiny->GetPreference("editor_height").$tiny->GetPreference("editor_height_unit")."'");	
}

			
if ($tiny->GetPreference("newlinestyle","p")!="p") {
	$tiny->smarty->assign("force_br_newlines","true");
	$tiny->smarty->assign("force_p_newlines","false");
} else {
	$tiny->smarty->assign("force_br_newlines","false");
	$tiny->smarty->assign("force_p_newlines","true");
}			  

if ($tiny->GetPreference("forcedrootblock","false")=="false") {
	$tiny->smarty->assign("forcedrootblock","false");
} else {
	$tiny->smarty->assign("forcedrootblock","'".$tiny->GetPreference("forcedrootblock")."'");
}


$tiny->smarty->assign("dateformat",$tiny->GetPreference('dateformat',"%Y-%m-%d"));
$tiny->smarty->assign("timeformat",$tiny->GetPreference('timeformat',"%H:%M:%S"));

$css_styles = $tiny->GetPreference('css_styles');
$css_styles =str_replace("\n","",$css_styles);
$css_styles =str_replace("\r","",$css_styles);

$tiny->smarty->assign("css_styles",$css_styles);

$extraconfig="";
 if ($tiny->GetPreference("extraconfig")!="") {
	$lines=explode("\n",$tiny->GetPreference("extraconfig"));
	if (count($lines)>0) {
		$extraconfig="//Extra configuration\n";
		foreach($lines as $line) {
			$line=trim($line);
			if (substr($line,-1,1)!=",") $line.=",";
			$extraconfig.=$line."\n";
		}
	}
}
$tiny->smarty->assign("extraconfig",$extraconfig);

$tiny->smarty->assign("filepickertitle",$tiny->Lang("filepickertitle"));
$tiny->smarty->assign("fpwidth",$tiny->GetPreference("fpwidth","700"));
$tiny->smarty->assign("fpheight",$tiny->GetPreference("fpheight","500"));

echo $tiny->ProcessTemplate('tinyconfig.tpl');

?>
