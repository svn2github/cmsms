<?php
if( !isset($gCms) ) exit;

$content=$params["content"];

if (!isset($this->cms->siteprefs['frontendwysiwyg']) || !$this->cms->siteprefs['frontendwysiwyg'] ) return;

$uid = get_userid(false);
if( $uid == false )
  {
    if ($this->cms->siteprefs['frontendwysiwyg']!=$this->GetName()) 
      return;
  }
else
  {
    if( get_preference($uid,'wysiwyg') != $this->GetName() )
      return;
  }

$pos=strpos(strtolower($content),"</head");

if ($pos===false) return;
$content=substr($content,0,$pos).$this->WYSIWYGGenerateHeader("",true).substr($content,$pos);
//$_SESSION["microtiny_live_frontend"]="yes";
//		echo "hihihi";die();
$params["content"]=$content;

?>
