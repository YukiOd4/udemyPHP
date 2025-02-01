<?php 

//array super globais = variaveis pré-definidas
//array super global GET or POST
$nome = $_GET["a"];
	//var_dump($nome);
//o get vai entregar qualquer dado que não for atribuida o seu valor como string, exemplo para armazenar numero em vez de caractere utiliza (int)antes da var $_GET
//$nome = (int)$_GET["a"];

//OBS: o valor dentro do GET puxa a var "a" e por não atribuir nada a var ocorrerá informação de erro na página mas na aula é instruido a adicionar no final da URL do localhost colocar ?a=100

//para adição de mais informações ou atribuir mais dados siga o exemplo utilizando o "&" sem aspas para atribuir http://localhost/PHP/exemplo-04.php?a=100&b=200

//puxar o ip da máquina(ambiente) que está acessando o servidor
$ip = $_SERVER['REMOTE_ADDR'];
//puxar o log do usuário, onde acessou e quando acessou por exemplo
$ip1 = $_SERVER['SCRIPT_NAME'];
echo $ip;
echo $ip1;

?>