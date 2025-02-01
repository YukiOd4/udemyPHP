<?php 
//operador de compração (null collection)
$a = null;

$b = null;

$c = 10;
//se tiver algum dado informado na var $a logo responde somente o conteúdo em $a e ignorando as demais variaveis e assim por diante
echo $a ?? $b ?? $c;

?>