<?php 

$data = array(
	"empresa" => "PHP Treinamento"
);

setcookie("log", json_encode($data), time() + 3600);

echo "OK!";

?>