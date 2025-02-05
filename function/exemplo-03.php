<?php 
//sempre que usar parametros, deixar sempre o que tem que ter valores padrões na ordem da esquerda para direita, parametros sem valor pardão devem estar depois do primeiro parametro
function ola($texto = "mundo", $periodo){

	return "olá $texto! $periodo!</br>";

}

echo ola("mundo", "bom dia");

echo ola("", "boa noite");

echo ola("planeta", "boa tarde");

echo ola("jupter", "");

 ?>