<?php 
//UPDATE - ATUALIZANDO/ALTERANDO DADOS
$conn = new PDO("mysql:dbname=dbphp; host=localhost", "root", "");

$stmt = $conn->prepare("UPDATE tb_usuarios SET deslogin = :LOGIN, dessenha = :PASSWORD WHERE idusuario = :ID");

$id = 2;
$login = "Yuki";
$pass = "159357";

$stmt->bindParam(":LOGIN", $login);
$stmt->bindParam(":PASSWORD", $pass);
$stmt->bindParam(":ID", $id);

$stmt->execute();

echo "Inserido OK!";

?>