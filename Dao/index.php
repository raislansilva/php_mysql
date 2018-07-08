<?php

require_once("config.php");

$sql = new sql();


$usuario = $sql->select("SELECT * FROM cliente");

print_r($usuario);

?>