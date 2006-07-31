<?php

class XLogger
{
	var $instanceName ;
	var $handle ;

	function XLogger( $instanceName )
	{
		$this->InstanceName = $instanceName ;
		$this->handle = @fopen($instanceName.".txt", "w+") ;
	}


	function log($txt){
                @fwrite($this->handle, $txt."\n");
	}
	
	function close() {
                @fclose($this->handle);
	}

}

?>
