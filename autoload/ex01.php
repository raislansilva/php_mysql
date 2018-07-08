<?php

require_once("Carro.php");

function __autoload($nomeClasse){

	require_once("$nomeClasse.php");
	var_dump($nomeClasse);

}


$cruze = new Carro(); 

$cruze->setCor("black");

echo"</br>";

echo $cruze->getCor();


?>