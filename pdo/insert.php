<?php

  $con = new PDO("mysql:dbname=crud_prodater; host=localhost","root","");

  $stmt = $con->prepare("INSERT INTO cliente (nomeCliente, cpfCliente, enderecoCliente) VALUES (:nome,:cpf,:endereco)");
 
  $nome = "Jose Francisco";
  $cpf = "111.222.455.78";
  $endereco = "Av.São João";

  $stmt->bindparam(':nome',$nome);
  $stmt->bindparam(':cpf',$cpf);
  $stmt->bindparam(':endereco',$endereco);
  $stmt->execute();

  echo "Cliente Cadastrado com Sucesso";


?>