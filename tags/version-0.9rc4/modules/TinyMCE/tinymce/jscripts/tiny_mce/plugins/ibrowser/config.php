<?php 
// ================================================
// tinymce PHP WYSIWYG editor control
// ================================================
// Configuration file
// ================================================
// Developed: j-cons.com, mail@j-cons.com
// Copyright: j-cons (c)2004 All rights reserved.
// ------------------------------------------------
//                                   www.j-cons.com
// ================================================
// v.1.0, 2004-10-04
// ================================================

include_once('../../../../../../../config.php');
// directory where tinymce files are located
$tinyMCE_dir = $config['root_path'] . '/modules/TinyMCE/tinymce/';

// base url for images
$tinyMCE_base_url = $config['image_uploads_url'] . '/';

//if (!ereg('/$', $HTTP_SERVER_VARS['DOCUMENT_ROOT']))
//  $tinyMCE_root = $HTTP_SERVER_VARS['DOCUMENT_ROOT'].$tinyMCE_dir;
//else
//  $tinyMCE_root = $HTTP_SERVER_VARS['DOCUMENT_ROOT'].substr($tinyMCE_dir,1,strlen($tinyMCE_dir)-1);  
$tinyMCE_root = $config['root_path'] . '/modules/TinyMCE/tinymce/';

// image library related config

// allowed extentions for uploaded image files
$tinyMCE_valid_imgs = array('gif', 'jpg', 'jpeg', 'png');

// allow upload in image library
$tinyMCE_upload_allowed = true;

// allow delete in image library
$tinyMCE_img_delete_allowed = true;

// image libraries
$tinyMCE_imglibs = array(
  array(
    'value'   => '',
    'text'    => 'Uploaded Images',
  ),
);
// file to include in img_library.php (useful for setting $tinyMCE_imglibs dynamically
// $tinyMCE_imglib_include = '';
?>
