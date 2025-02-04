<?php 
//funções importantes da string substituir, posição, contar
$frase = 'A lamina que nao se ve, e a mais mortifera';

$palavra = 'nao';

//str = string
//pos = position
//aqui o strpos encontra a posição da primeira ocorrencia de uma substring em uma string
$q = strpos($frase, $palavra);

//puxa o conteudo a partida da posição decidida pela var $q e entrega todo o seu conteudo, aqui declaramos 0 então da esquerda pra direita ele vai ler de 0, 1, 2...
$texto = substr($frase, 0, $q);
//sub = substituir
//str = string

//tira o determinado lugar que vai contar e o que vai mostrar alem de contar var $palavra até onde determine
$texto2 = substr($frase, $q + strlen($palavra), strlen($frase));
//str = string
//len = contar

var_dump($texto);

echo "</br>";

var_dump($texto2);

?>