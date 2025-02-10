<?php 
//metodos mágicos

class Endereco {

	private $logradouro;
	private $numero;
	private $cidade;

	public function __construct($a,$b,$c){
		$this->logradouro = $a;
		$this->numero = $b;
		$this->cidade = $c;
	}

	public function __destruct(){
		var_dump("DESTRUIR");
	}

	public function __toString(){
		return $this->logradouro.",".$this->numero." - ".$this->cidade;
	}

}

$meuEndereco = new Endereco("R. Aucelio Souza Castro","373","Campo Grande");

echo("$meuEndereco</br>");

unset($meuEndereco);

?>