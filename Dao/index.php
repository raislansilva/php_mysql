<?php

require_once("config.php");

/*$root = new usuario();

$root->loadById(2);

echo $root;*/

/*$sql = new sql();

$usuarios = $sql->select("SELECT * FROM usuarios");

echo json_encode($usuarios);*/

//$usuarios = usuario::getList();
//echo json_encode($usuarios);

$usuario = new usuario();
$usuario->setNomeCliente('Gloria');
$usuario->setCpfCliente('00000000000');
$usuario->setEnderecoCliente('rua promorar');

$usuario->insert();

echo $usuario;

?>