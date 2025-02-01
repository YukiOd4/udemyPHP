<?php

	//Tipos Básicos
	$nome = "Yuki";
	$site = "www.google.com.br";
	$ano = 2003;
	$salario = 5500.99;
	$bloqueado = false;

	//Tipos Compostos
	$frutas = array("Morango", "Uva", "Banana");
		//echo $frutas[0];
	$nascimento = new DateTime();
		//var_dump($nascimento);

	//Tipos Especiais
	$arquivo = fopen("exemplo-03.php", "r");
		//var_dump($arquivo);
	$nulo = null;

?>