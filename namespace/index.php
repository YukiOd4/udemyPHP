<?php 

require_once("config.php");

use Cliente\Cadastro;

$cad = new Cadastro();

$cad->setNome("Yuki Fernando Oda</br>");
$cad->setEmail("odajpyuki2@gmail.com</br>");
$cad->setSenha("123456789");

$cad->registrarVenda();

?>