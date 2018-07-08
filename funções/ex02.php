<?php

  function ola($nome,$ano){
  	  $idade = date('Y')-$ano;
  	  $nom = $nome;

  	  return " $nome tem $idade anos "; 
  }

 $res = ola("Raislan",1994);

 echo $res;

?>