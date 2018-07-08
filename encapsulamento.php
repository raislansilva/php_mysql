<?php
  
  class Pessoa{

     public $nome = "Raislan da Silva";
     protected $idade = 23;
     private $senha = 12345;


     public function verDados(){
     	echo $this->nome. "</br>";
     	echo $this->idade. "</br>";
     	echo $this->senha. "</br>";
     }


  }

  $objeto = new Pessoa();

  echo $objeto->verDados(). "</br>";




?>