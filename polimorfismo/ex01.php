<?php

abstract class Conta {
	private $numero;
	private $agencia;
	private $saldo ;


	public function depositar($valor){
		$this->saldo+= $valor;

	}

	public function getSaldo(){
		return $this->saldo;
	}

	public function setSaldo($valor){
		$this->saldo+=$valor;
	}
}

class contaCorrente extends Conta{
	public function depositar($valor){
		return $this->setSaldo($valor*1.1);
	}
}




$conta = new contaCorrente();
$conta->depositar(100);
$conta->depositar(100);
$conta->depositar(100);

echo $conta->getSaldo();


?>