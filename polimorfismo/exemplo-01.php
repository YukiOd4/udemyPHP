<?php 

abstract class Animal {
	public function falar(){
		return "Som";
	}

	public function mover(){
		return "Anda";
	}

}

class Cachorro extends Animal {
	public function falar(){
		return "Late";
	}
}

class Gato extends Animal {
	public function falar(){
		return "Mia";
	}
}

class Bird extends Animal {
	public function falar(){
		return "Piu";
	}
	
	public function mover(){
		return "Voa e ".parent::mover();
	}
}

$pluto = new cachorro();
echo $pluto->falar()."</br>";
echo $pluto->mover()."</br>";

echo "-----------------------</br>";

$garfield = new Gato();
echo $garfield->falar()."</br>";
echo $garfield->mover()."</br>";

echo "-----------------------</br>";

$amarelo = new Bird();
echo $amarelo->falar()."</br>";
echo $amarelo->mover()."</br>";

?>