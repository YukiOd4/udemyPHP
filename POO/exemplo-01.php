<?php 

class Pessoa {
	//encapsulamento = exemplo public & atributo = exemplo $nome
	public $nome;
	//encapsulamento & metodo = exemplo function falar
	public function falar(){

		return "O meu nome é: " . $this -> nome; //atributo fora de metodo sem alterações, forado metodo o atributo deve seguir com $this -> $variavel;

	}
}

$yuki = new Pessoa();

$yuki -> nome = "Yuki Fernando Oda";

echo $yuki -> falar();

?>