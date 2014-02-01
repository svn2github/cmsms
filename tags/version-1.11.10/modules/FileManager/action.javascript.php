<?php
if (!function_exists("cmsms")) exit;

if (isset($_SERVER['HTTP_USER_AGENT']) && (strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE') !== true) && $this->CheckPermission('Modify Files')) {
	echo $this->_output_header_javascript();
}

?>