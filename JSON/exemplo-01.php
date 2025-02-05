<?php 

$pessoas = array();

array_push($pessoas, array(

	'nome' => 'Yuki', 'idade' => 21

));

array_push($pessoas, array(

	'nome' => "Yudi", 'idade' => 20

));

echo json_encode($pessoas);

?>