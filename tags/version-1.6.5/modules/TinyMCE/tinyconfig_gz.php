<?PHP
header("Content-type:text/javascript; charset=utf-8");

$path = dirname(dirname(__FILE__));
if (file_exists($path . DIRECTORY_SEPARATOR . 'include.php')) {
  require $path . DIRECTORY_SEPARATOR . 'include.php';
} else {
	$path = dirname(dirname(dirname(__FILE__)));
	require $path . DIRECTORY_SEPARATOR . 'include.php';
}

$modules =& $gCms->modules;
$tiny=$modules["TinyMCE"]['object'];

?>

tinyMCE_GZ.init({
  disk_cache : "false",
  plugins : "<?php echo $tiny->GetPreference('plugins') ?>",
  language: "<?php echo $tiny->GetPreference("live_language","en"); ?>",
  themes : "advanced",
  debug : true
});
