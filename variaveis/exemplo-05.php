<?php 

$nome = "Yuki";

//function é como a nossa casa e a outra é a casa do vizinho
//imagine a var fora da function seja alguém gritando na rua
//caso queira usar a var fora deve se usar o global como abaixo
function teste(){
	global $nome;
	echo $nome;
}

function teste0(){
	$nome = "Marcos";
	echo $nome." agora no teste2";
}

teste();
teste0();

?>