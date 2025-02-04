<?php 

$identificaIdade = 21;

$iC = 12;

$iM = 18;

$iV = 65;

if ($identificaIdade < $iC) {
	echo "Criança";
} else if ($identificaIdade < $iM) {
	echo "Adolescente";
} else if ($identificaIdade < $iV) {
	echo "Adulto";
} else {
	echo "Idoso";
}

echo "</br>";

echo ($identificaIdade < $iM)?"Menor de Idade":"Maior de Idade";

?>