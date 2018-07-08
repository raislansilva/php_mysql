<?php

   $con = new PDO("mysql:dbname=crud_prodater;host=localhost","root","" );

   $stmt = $con->prepare("SELECT * FROM cliente");

   $stmt->execute();

  $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

 foreach ($results as $row) {
 	foreach ($row as $key => $value) {
 		echo "<strong>".$key.":</strong>".$value."</br>";
 	}
 	echo "=======================================<br>";
 }

 

?>