<?php 

class Documento{

	private $numero;

	public function getNumero(){
		return $this->numero;	
	}

	public function setNumero($n){
		$this->numero = $n;
	}

}

class CPF extends Documento {
	public function validar():bool {
		//obtem dados de herança
		$numeroCPF = $this->getNumero();

		//inicio código validação
			//código de validação aqui!
		//fim código validação

		return true;
	}
}

$doc = new CPF;
$doc->setNumero("00915678-37");
var_dump($doc->validar());
echo "</br>";
echo $doc->getNumero();

?>