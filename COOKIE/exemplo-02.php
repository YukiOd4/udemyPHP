<?php 

if (isset($_COOKIE["log"])) {
	
	$obj = json_decode($_COOKIE["log"]);

	echo $obj->empresa;

}

?>