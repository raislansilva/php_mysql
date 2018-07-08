<?php

interface Veiculo{
	public function acelerar($velocidade);
	public function freiar($velocidade);
	public function trocarMarcha($marcha);
}

class Civic implements Veiculo{
	public function acelerar($velocidade){
		echo "Acelerou, você esta na Velocidade de ".$velocidade. "km/h";
	}

	public function freiar($velocidade){
		echo "Frenou na velocidade".$velocidade;
	}



	public function trocarMarcha($marcha){
		echo "Passei para a ".$macha."marcha";
	}
}

$carro = new Civic();

$carro->acelerar(155);

?>