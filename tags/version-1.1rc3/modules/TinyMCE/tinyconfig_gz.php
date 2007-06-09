<?PHP
header("Content-type:text/javascript; charset=utf-8");
$path = dirname(dirname(dirname($_SERVER['SCRIPT_FILENAME'])));
require $path . DIRECTORY_SEPARATOR . 'include.php';


$modules =& $gCms->modules;
$tiny=$modules["TinyMCE"]['object'];
?>
    tinyMCE_GZ.init({
      disk_cache : "false",
      plugins : "<?php echo $tiny->GetPreference('plugins') ?>",
      language: "<?php echo $tiny->GetPreference("live_language","en"); ?>",
      themes : "advanced",
      debug : false
    });
