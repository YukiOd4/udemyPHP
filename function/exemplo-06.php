<?php 

$pessoa = array(
	'nome' => 'Yuki',
	'idade' => 21
);

foreach ($pessoa as &$value) {

	if(gettype($value) === 'integer') $value += 10;

	echo $value.'</br>';
}

print_r($pessoa);

 ?>