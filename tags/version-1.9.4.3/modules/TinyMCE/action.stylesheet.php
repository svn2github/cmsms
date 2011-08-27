<?php
#CMS - CMS Made Simple
#(c)2004 by Ted Kulp (wishy@users.sf.net)
#This project's homepage is: http://cmsmadesimple.sf.net
#
#This program is free software; you can redistribute it and/or modify
#it under the terms of the GNU General Public License as published by
#the Free Software Foundation; either version 2 of the License, or
#(at your option) any later version.
#
#This program is distributed in the hope that it will be useful,
#but WITHOUT ANY WARRANTY; without even the implied warranty of
#MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
#GNU General Public License for more details.
#You should have received a copy of the GNU General Public License
#along with this program; if not, write to the Free Software
#Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
#
#$Id$

#


echo "nothing for you here...";
die();

/*$CMS_ADMIN_PAGE=1;
$path = dirname(dirname(dirname(__FILE__)));
require_once($path.DIRECTORY_SEPARATOR.'include.php');
require_once($path.DIRECTORY_SEPARATOR."config.php");
*/
//cannot require admin-login as it should work for frontend
//Must make it secure some other way
//check_login();
//$userid = get_userid();

//global $gCms;

if (!isset($gCms)) exit;
$config=$gCms->GetConfig();
//$modules =& $gCms->modules;
//$tiny=$modules["TinyMCE"]['object'];

$db=$this->GetDb();

//Why?
if(isset($_SERVER['HTTP_USER_AGENT']) && preg_match('/MSIE/', $_SERVER['HTTP_USER_AGENT'])) {
	@ini_set( 'zlib.output_compression','Off' );
}

$templateid = '';

if (isset($params["templateid"])) $templateid = (int)$params["templateid"];


$mediatype = '';
if (isset($params["mediatype"])) $mediatype = $params["mediatype"];

//if ($templateid == '' && $name == '') return '';

$css='';
$encoding = '';

if ($config['default_encoding'] =='')
$encoding = $config['admin_encoding'];
else
$encoding = $config['default_encoding'];

if ($encoding=='')
$encoding = 'UTF-8';

$params=array($templateid);
$query="SELECT c.css_text, c.css_id, c.css_name FROM ".$config['db_prefix']."css c,".$config['db_prefix']."css_assoc ac
       			WHERE ac.assoc_type='template' AND ac.assoc_to_id = ?
        		AND ac.assoc_css_id = c.css_id ";
if ($this->GetPreference("includeonlyscreencss",0)==1) {
	//$query.="AND (c.media_type LIKE '%screen%' OR c.media_type LIKE '%all%')";
}
$query.="ORDER BY ac.assoc_order ASC";

//echo $query;
$dbresult=$db->Execute($query,$params);
//echo $db->ErrorMsg();
//echo $dbresult;
if ($dbresult && $dbresult->RecordCount()>0) {

	while($row=$dbresult->FetchRow()) {
		//echo $row['css_text']."<hr>";
		$css.="/* Start of CMSMS style sheet '".$row['css_name']."' */\n"
					.$row['css_text']."\n".
					"/* End of '".$row['css_name']."' */\n";
	}
}

//echo "hi";
header("Content-Type: text/css; charset=" .$encoding);
header("Content-Type: text/css; charset=" . (isset($result['encoding'])?$result['encoding']:'UTF-8'));



$stripbackground = $this->GetPreference("striptags","true");
$stripbackground = trim(strtoupper($stripbackground));

if ($stripbackground == "TRUE") {
	#$css = preg_replace('/(\w*?background-color.*?\:\w*?).*?(;.*?)/', '', $css);
	$css = preg_replace('/(\w*?background-color.*?\:\w*?).*?(;.*?)/', '\\1transparent\\2', $css);
	$css = preg_replace('/(\w*?background-image.*?\:\w*?).*?(;.*?)/', '', $css);
  $css = preg_replace('/(\w*?background.*?\:\w*?).*?(;.*?)/', '', $css);
}

$bodycss = $this->GetPreference("bodycss");
$bodycss = trim(strtolower($bodycss));
if( $bodycss != "" ) {
	$css=$css."\nbody.CMSMSBody { " . $bodycss . " }\n";
}
//body.mceForceColors {background:#FFF; color:#000;}
//Zero out the stylesheet if chosen
if ($this->GetPreference("loadstylesheet","1")!="1") $css="";

$extrastyles=$this->GetPreference("extrastyles","li {\n  margin-left : 16px;\n}");

$css.="\n\n".$extrastyles;

#Do cache-control stuff but only if we are running Apache
if(function_exists('getallheaders')) {
	$headers = getallheaders();
	$hash = md5($css);

	#if browser sent etag and it is the same then reply with 304
	if (isset($headers['If-None-Match']) && $headers['If-None-Match'] == '"'.$hash.'"')
	{
		header('HTTP/1.1 304 Not Modified');
		exit;
	}
	else {
		header('ETag: "'.$hash.'"');
	}
}



$css=str_replace("[[root_url]]", $config["root_url"], $css);

/*$smarty=$gCms->GetSmarty();
$smarty->left_delimiter = '[[';
$smarty->right_delimiter = ']]';
$smarty->_compile_source('temporary stylesheet', $css, $css );
*/


//If backgroundimages is not removed, fix paths
$css = preg_replace('/url(.)/', 'url('.$config['root_url'].'/', $css);
echo $css;

die();

# vim:ts=4 sw=4 noet
?>
