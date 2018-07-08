<?php

   $con = new PDO("mysql:dbname=crud_prodater; host=localhost","root", "");
   $stmt = $con->prepare("DELETE FROM cliente WHERE id=:id");
  
   $id = 4;

   $stmt->bindParam(':id',$id);
   $stmt->execute();

   echo "Dados Excluidos com Sucesso";




?>