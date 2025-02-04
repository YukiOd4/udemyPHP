<?php 

//aqui ele requisita e exige que o arquivo funcione e exista além de "once" requisitar somente uma vez o arquivo
require_once "../include/func/somar.php";

$resultado = somar(40, 70);

echo $resultado;

?>