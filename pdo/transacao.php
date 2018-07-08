<?php

   $con = new PDO("mysql:dbname=crud_prodater; host=localhost","root", "");
   $con->beginTransaction();

   $stmt = $con->prepare("DELETE FROM cliente WHERE id = ?");
  
   $id = 3;


   $stmt->execute(array($id));

   $con->rollback();

   //$con->commit();

   echo "Dados Excluidos com Sucesso";




?>