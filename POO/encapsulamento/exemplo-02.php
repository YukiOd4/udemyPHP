<?php 
 //aula sobre herança
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

class Programador extends Pessoa {
	public function verDados() {

		echo get_class($this)."</br>";

		echo "Nome: ".$this->nome."</br>";
		echo "Idade: ".$this->idade."</br>";
		echo "Senha: ".$this->senha."</br>"; 
	}
}

$objeto = new Programador();

//echo $objeto->senha . "</br>";

$objeto->verDados();

?>