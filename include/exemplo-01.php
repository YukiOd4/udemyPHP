<?php 

//include inclui o arquivo, precisamente buscando utilizar arquivo ou uma função para seu código sem precisar fazer do zero mesmo que o arquivo não exista

//include "exemplo-01.php";

//require ele precisamente precisa/requisita que o arquivo que você deseja utilizar seja um arquivo existente senão não ocorre a atualização de tela, obrigando que o arquivo exista e esteja funcionando
require "../function/somar.php";

$resultado = somar(10, 20);

echo $resultado;

?>