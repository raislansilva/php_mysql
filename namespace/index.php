<?php


  require_once("config.php");

  use Cliente\Cadastro;

  $c1 = new Cadastro();

  $c1->setNome("Raislan");
  $c1->setEmail("raislan@live.com");
  $c1->setSenha(112457);

  $c1->registrarVenda();


?>