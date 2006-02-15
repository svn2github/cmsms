<?php 
/*
 * FCKeditor - The text editor for internet
 * Copyright (C) 2003-2005 Frederico Caldeira Knabben
 * 
 * Licensed under the terms of the GNU Lesser General Public License:
 * 		http://www.opensource.org/licenses/lgpl-license.php
 * 
 * For further information visit:
 * 		http://www.fckeditor.net/
 * 
 * "Support Open Source software. What about a donation today?"
 * 
 * File Name: config.php
 * 	Configuration file for the File Manager Connector for PHP.
 * 
 * File Authors:
 * 		Frederico Caldeira Knabben (fredck@fckeditor.net)
 */
// require_once('io.php') ;

global $Config ;

// SECURITY: You must explicitelly enable this "connector". (Set it to "true").
$Config['Enabled'] = true ;

// Path to user files relative to the document root.
$Config['UserFilesPath'] = '/UserFiles/' ;

// Fill the following value it you prefer to specify the absolute path for the
// user files directory. Usefull if you are using a virtual directory, symbolic
// link or alias. Examples: 'C:\\MySite\\UserFiles\\' or '/root/mysite/UserFiles/'.
// Attention: The above 'UserFilesPath' must point to the same directory.
$Config['UserFilesAbsolutePath'] = '' ;

$Config['AllowedExtensions']['File']	= array() ;
$Config['DeniedExtensions']['File']		= array('php','php3','php5','phtml','asp','aspx','ascx','jsp','cfm','cfc','pl','bat','exe','dll','reg','cgi') ;

$Config['AllowedExtensions']['Image']	= array('jpg','gif','jpeg','png') ;
$Config['DeniedExtensions']['Image']	= array() ;

$Config['AllowedExtensions']['Flash']	= array('swf','fla') ;
$Config['DeniedExtensions']['Flash']	= array() ;

$Config['AllowedExtensions']['Media']	= array('swf','fla','jpg','gif','jpeg','png','avi','mpg','mpeg') ;
$Config['DeniedExtensions']['Media']	= array() ;

/////////////////////////////////////
/////////////////////////////////////


$cfgfilename = '../config.php';
while(!@file_exists($cfgfilename)){
            $cfgfilename = "../".$cfgfilename;
}
@include($cfgfilename);


$Logfilename = 'XLogger.php';
while(!@file_exists($Logfilename)){
            $Logfilename = "../".$Logfilename;
}
@include_once($Logfilename) ;

$logger = new XLogger($config["root_path"]."/tmp/cache/LogBrowser");
$logger->log("0_9_8");


$Config['UserFilesPath'] = $config['uploads_url'];
$logger->log("UserFilesPath : ".$Config['UserFilesPath']);

$Config['UserFilesPath'] = str_replace( 'http://', '', $Config['UserFilesPath'] );
$logger->log("UserFilesPath : ".$Config['UserFilesPath']);

$Config['UserFilesPath'] = substr($Config['UserFilesPath'], strpos($Config['UserFilesPath'], "/"));
$logger->log("UserFilesPath : ".$Config['UserFilesPath']);


$Config['UserFilesPath'] = $Config['UserFilesPath']."/" ;
$logger->log("UserFilesPath : ".$Config['UserFilesPath']);

$Config['UserFilesAbsolutePath'] = $config['uploads_path'];
$logger->log("UserFilesAbsolutePath : ".$Config['UserFilesAbsolutePath']);


$diff = str_replace($config["root_url"].'/', '', $config["uploads_url"])."/";
$logger->log("Diff : ".$diff);

$logger->close();

?>
