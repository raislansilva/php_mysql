<?php

 class Pessoa{

    public $nome;

    public function falar(){
    	return " O meu nome e: ".$this->nome;
    }
 }

 $raislan= new Pessoa();
 $raislan->nome = "raislan da silva";
 echo $raislan->falar(); 



?>