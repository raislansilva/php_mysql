<?php

   $con = new PDO("mysql:dbname=crud_prodater;host=localhost","root","");
   $stmt = $con->prepare("UPDATE cliente SET nomeCliente=:nome, cpfCliente=:cpf, enderecoCliente=:endereco WHERE id=:id");
   
   $id = 1;
   $nome = "Joyce Santos";
   $cpf = "111.203.457-78";
   $endereco = "Rua Timon City";

   $stmt->bindParam(':id', $id);
   $stmt->bindParam(':nome', $nome);
   $stmt->bindParam(':cpf', $cpf);
   $stmt->bindParam(':endereco', $endereco);
   $stmt->execute();

   echo "Editado com Sucesso";



?>