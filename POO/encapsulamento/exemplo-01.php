<?php 

class Pessoa{
	public $nome = "Yuki Fernando";
	protected $idade = "21";
	private $senha = "123";

	public function verDados() {
		echo "Nome: ".$this->nome."</br>";
		echo "Idade: ".$this->idade."</br>";
		echo "Senha: ".$this->senha."</br>"; 
	}
}

$objeto = new Pessoa;

//echo $objeto->senha . "</br>";

$objeto->verDados();

?>