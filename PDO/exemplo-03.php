<?php 
//INSERT - INSERINDO DADOS
$conn = new PDO("mysql:dbname=dbphp; host=localhost", "root", "");

$stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES(:LOGIN, :PASSWORD)");

$login = "yuki";
$pass = "123456aA";

$stmt->bindParam(":LOGIN", $login);
$stmt->bindParam(":PASSWORD", $pass);

$stmt->execute();

echo "Inserido OK!";

?>