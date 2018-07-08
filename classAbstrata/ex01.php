<?php

interface Veiculo{
	public function acelerar($velocidade);
	public function freiar($velocidade);
	public function trocarMarcha($marcha);
}




abstract class Automovel implements Veiculo{
	public function acelerar($velocidade){
		echo "Você acelerou ate a velocidade de".$velocidade. "km/h";
	}

	public function freiar($velocidade){
		echo "Frenou na velocidade".$velocidade;
	}



	public function trocarMarcha($marcha){
		echo "Passei para a ".$macha."marcha";

	}

	public abstract  function buzina();
}



class Gol extends Automovel{

	public function buzina(){
		echo "buuuuuuuuuuuu";
	}

}




$carro = new Gol();

$carro->buzina();



?>