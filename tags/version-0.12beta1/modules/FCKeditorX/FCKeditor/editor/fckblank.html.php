<html>
<head><title></title>
<?php

$inclfilename = '../include.php';
while(!@file_exists($inclfilename)){
            $inclfilename = "../".$inclfilename;
}
@require_once($inclfilename);

global $gCms;

echo '<BASE HREF="'.$gCms->config["root_url"].'/">';

?>

</head>
<body></body>
</html>
