<?php
if( !isset($gCms) ) exit;

/*
 * 	function ContentPostRender(&$content) {
		//You only get here when in frontend
		if (!isset($this->cms->siteprefs['frontendwysiwyg'])) return $content;
		if ($this->cms->siteprefs['frontendwysiwyg']!=$this->GetName()) return $content;
		$pos=strpos(strtolower($content),"</head");
		if ($pos===false) return $content;
		$content=substr($content,0,$pos).$this->WYSIWYGGenerateHeader("",true).substr($content,$pos);
		//$_SESSION["microtiny_live_frontend"]="yes";
		return $content;
	}
 */
//print_r($params);die();
$content=$params["content"];

if (!isset($this->cms->siteprefs['frontendwysiwyg'])) return;

if ($this->cms->siteprefs['frontendwysiwyg']!=$this->GetName()) return;
$pos=strpos(strtolower($content),"</head");

if ($pos===false) return;
$content=substr($content,0,$pos).$this->WYSIWYGGenerateHeader("",true).substr($content,$pos);
//$_SESSION["microtiny_live_frontend"]="yes";
//		echo "hihihi";die();
$params["content"]=$content;

?>
