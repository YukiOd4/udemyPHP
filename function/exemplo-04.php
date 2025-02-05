<?php 

function ola(){
	//aqui segue uma funcionalidade no php onde é possivel definir o tipo antes mesmo de ter que definir utilizando func_get_args()
	$argumentos = func_get_args();

	return $argumentos;

}

//ola("Bom Dia");

var_dump(ola("Bom Dia", 10));

 ?>