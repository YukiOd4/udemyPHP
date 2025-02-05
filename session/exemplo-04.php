<?php 

session_id('et62t48v8cpaeh752u9ari7lhjarray');

require_once("config.php");

session_regenerate_id();

echo session_id();

var_dump($_SESSION);

?>