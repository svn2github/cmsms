<?php
if (!isset($gCms)) exit;
$config = $this->config;
switch ($uploadmethod) {
  case 1 : {
    echo $this->CreateFormStart($id, 'upload', $returnid,"post","multipart/form-data");
    echo $this->CreateInputHidden($id,"path",$path);
    echo $this->CreateInputHidden($id,"uploadmethod",$uploadmethod);

    for($i=0; $i<$uploadboxes;$i++) {
      echo '<div class="pageoverflow"><p class="pagetext">';
      echo "<b>".$this->Lang("fileno").($i+1).":</b>&nbsp;";
      echo '</p><p class="pageinput">';

      echo $this->CreateInputFile($id,"file_".$i,"",40);
      echo $this->CreateInputCheckBox($id,"unpack".$i,"unpack");
      echo $this->Lang("unpackafterupload");
      echo "</p></div>";
      //echo "\n<br/>\n";
    }

    echo $this->CreateInputSubmit($id,"ok",$this->Lang("ok"),"","");
    echo $this->CreateFormEnd();
    break;
  }
  case 2 : {
    echo $this->CreateFormStart($id, 'upload', $returnid,"post","multipart/form-data");
    echo $this->CreateInputHidden($id,"path",$path);
    echo $this->CreateInputHidden($id,"uploadmethod",$uploadmethod);
    echo $this->CreateInputFile($id,"file_","",40,"id='myfiles'");

    echo $this->Lang("files");
    ?>
<br />
<table class="AdminTable" width="400">
	<tr>
		<td>
		<div id="files_list"></div>
		</td>
	</tr>
</table>
<script>
	<!-- Create an instance of the multiSelector class, pass it the output target and the max number of files -->
	var multi_selector = new MultiSelector( document.getElementById( 'files_list' ), 10 );
	<!-- Pass in the file element -->
	multi_selector.addElement( document.getElementById( 'myfiles' ) );
</script>
    <?php

    echo $this->CreateInputSubmit($id,"ok",$this->Lang("ok"),"","");
    echo $this->CreateFormEnd();
    break;

  }
  case 3 : {
?>

<applet code="Main.class" width="600" height="300"
	archive="<?php echo $config["root_url"]?>/modules/FileManager/postlet/postlet.jar" mayscript> 
	<param name="maxthreads" value="5" />
	<param name="archive" value="<?php echo $config["root_url"]?>/modules/FileManager/postlet/postlet.jar">
	<param name="name" value="Multiple file uploader">
	<param name="type" value="application/x-java-applet;version=1.5">
	<param name="scriptable" value="false">
	<param name="failedfilesmessage" value="true">
	<param name="destination"
		value="<?php echo $config["root_url"]?>/modules/FileManager/postletupload.php?path=<?php echo $path?>">
	<param name="endpage"
		value="<?php echo $config["root_url"]?>/admin/moduleinterface.php?mact=FileManager,<?php echo $id?>,defaultadmin,<?php echo $returnid?>&<?php echo $id?>path=<?php echo $path?>&<?php echo $id?>postletupload=yes&<?php echo $id?>>
	<param name="red" value="255">
	<param name="green" value="255">
	<param name="blue" value="255">
	<param name="redheader" value="200">
	<param name="greenheader" value="200">
	<param name="blueheader" value="200">
</applet>





<?php

	break;
  }
case 4 : {

   ?>

  <div id="SWFUploadTarget">
  <form action="upload.php" method="post" enctype="multipart/form-data"><input
  type="file" name="Filedata" id="Filedata" /> <input type="submit"
  value="upload test" /></form>
  </div>

  <h4 id="queueinfo">Queue is empty</h4>

  <div id="SWFUploadFileListingFiles"></div>
  <?PHP
  break;
}
  default : echo "error, undefined upload method $uploadmethod";
}

?>
