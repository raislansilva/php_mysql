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

//insert
/*$usuario = new usuario();
$usuario->setNomeCliente('Gloria');
$usuario->setCpfCliente('00000000000');
$usuario->setEnderecoCliente('rua promorar');

$usuario->insert();

echo $usuario;*/

//update
/*$usuario =  new usuario();

$usuario->loadById(2);

$usuario->update("sheila2","111551515",'rua altos2');
echo $usuario;*/

//delete
$usuario =  new usuario();

$usuario->loadById(2);

$usuario->delete();
echo $usuario;


?>