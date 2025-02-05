<?php 

$a = 10;
// passagem de um parametro por referencia &$a por exemplo
function trocaValor(&$b){

	$b += 50;

	return $b;

}

//oq ocorre na function, fica na function

echo trocaValor($a);
echo "</br>";
echo trocaValor($a);
echo "</br>";
echo $a;

 ?>