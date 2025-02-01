<?php
	
	/*
	$anoNascimento = 2003;

	$nome1 = "Yuki";
	// não é possivel utilizar a seguinte ordem para declarar variavel = $1nome
	$sobrenome1 = "Oda";*/

	$nome1 = "Yuki";

	$sobrenome1 = "Oda";

	$nomeCompleto = $nome1 . $sobrenome1;
	//Para o caso dos nomes estarem juntos usa-se aspas entre as var nome e sobrenome exemplo: $nome1."".$sobrenome1;

	echo $nomeCompleto;

	//echo $nome1;

	echo "<br/>";

	unset($nome1);

	if (isset($nome1)) {
		echo $nomeCompleto;
	}

?>