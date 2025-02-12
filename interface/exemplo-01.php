<?php 

interface Veiculo {

	public function acelerar($velocidade);
	public function frenar($velocidade);
	public function trocarMarcha($marcha);

}

class Civic implements Veiculo {

	public function acelerar($velocidade) {

		echo "O veiculo acelerou até ".$velocidade."km/h</br>";

	}

	public function frenar($velocidade) {

		echo "O veiculo frenar até ".$velocidade."km/h</br>";

	}

	public function trocarMarcha($marcha){

		echo "O veiculo engatou a ".$marcha."ª marcha.";

	}

}

$carro = new Civic();

$carro->trocarMarcha(1);


?>