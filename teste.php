<?php

class Calculadora{
	public $soma;
 
  public function soma($num1,$num2){
     $this->$soma = $num1+$num2;
     return $this->$soma;

  }

}

$somar = new Calculadora();
echo $somar->soma(10,4);









?>