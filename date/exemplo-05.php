<?php 

$dt = new DateTime();

$periodo = new DateInterval("P15D");

echo $dt->format("d/m/Y H:i:s");

$dt -> add($periodo);

echo "</br>";

echo $dt->format("d/m/Y H:i:s").", adicionado 15 dias como definiu em DanteInterval P15D";

 ?>