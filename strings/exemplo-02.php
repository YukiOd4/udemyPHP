<?php 
//tornando o texto totalmente maiusculo or MINUSCULO
$nome = "yuki fernando oda";

//echo strtoupper($nome);
//str = string
//to = para
//upper = upper case
$nome = strtoupper($nome);

echo $nome;

$nome = strtolower($nome);

echo "</br>";

echo $nome;

echo "</br>";
//Deixa somente as primeira letras dos nomes maisculos
echo ucwords($nome);

?>