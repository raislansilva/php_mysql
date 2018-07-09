<?php

  class usuario{
  	 private $id;
  	 private $nomeCliente;
  	 private $cpfCliente;
  	 private $enderecoCliente;


  	 public function getId(){
  	 	return $this->id;
  	 }

  	 public function setId($valor){
  	 	$this->id = $valor;
  	 }


  	 public function getNomeCliente(){
  	 	return $this->nomeCliente;
  	 }

  	 public function setNomeCliente($valor){
  	 	$this->nomeCliente = $valor;
  	 }

  	 public function getCpfCliente(){
  	 	return $this->cpfCliente;
  	 }

  	 public function setCpfCliente($valor){
  	 	$this->cpfCliente = $valor;
  	 }

  	 public function getEnderecoCliente(){
  	 	return $this->enderecoCliente;
  	 }

  	 public function setEnderecoCliente($valor){
  	 	$this->enderecoCliente = $valor;
  	 }

  	 public function loadById($id){
  	 	$sql = new sql();

  	 	$results = $sql->select("SELECT *FROM cliente where id =:id",array(
            ":id"=>$id
  	 	));

  	 	if(count($results)>0){
  	 		$row = $results[0];

  	 		$this->setId($row['id']);
  	 		$this->setNomeCliente($row['nomeCliente']);
  	 		$this->setCpfCliente($row['cpfCliente']);
  	 		$this->setEnderecoCliente($row['enderecoCliente']);
  	 	}
  	 }

  	 public function __toString(){
  	 	return json_encode(array(
          "id"=>$this->getId(),
          "nomeCliente"=>$this->getNomeCliente(),
          "cpfCliente"=>$this->getCpfCliente(),
          "enderecoCliente"=>$this->getEnderecoCliente()
  	 	));
  	 }

  }


?>