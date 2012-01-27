<?php

//
// setup
//

$smarty->assign('formstart',$this->CreateFormStart($id,'upload',$returnid,'post','multipart/form-data'));
$smarty->assign('formend',$this->CreateFormEnd());
$smarty->assign('actionid',$id);
$post_max_size = filemanager_utils::str_to_bytes(ini_get('post_max_size'));
$upload_max_filesize = filemanager_utils::str_to_bytes(ini_get('upload_max_filesize'));
$smarty->assign('max_chunksize',min($upload_max_filesize,$post_max_size-1024));
if (isset($_SERVER['HTTP_USER_AGENT']) && (strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE') !== false))
  {
    $smarty->assign('is_ie',1);
  }
$smarty->assign('action_url',$this->create_url('m1_','upload',$returnid));
$smarty->assign('prompt_dropfiles',$this->Lang('prompt_dropfiles'));

echo $this->ProcessTemplate('dropzone.tpl');

?>