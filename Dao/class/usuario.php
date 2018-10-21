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

  	 	$results = $sql->select("SELECT *FROM usuarios where id =:id",array(
            ":id"=>$id
  	 	));

  	 	if(count($results)>0){
  	 	   $this->setData($results[0]);
  	 	}
	   }
	   
	   public static function getList(){
		   $sql = new sql();

		   return $sql->select("SELECT * FROM usuarios ORDER BY nomeCliente");
	
	   }

	   public function setData($data){
			$this->setId($data['id']);
			$this->setNomeCliente($data['nomeCliente']);
			$this->setCpfCliente($data['cpfCliente']);
			$this->setEnderecoCliente($data['enderecoCliente']);
	   }

	   public function insert(){
		   $sql =  new sql();

		  $results = $sql->select("CALL usuarios_insert(:nomeCliente,:cpfCliente,enderecoCliente)", array(
			  ':nomeCliente'=>$this->getNomeCliente(),
			  ':cpfCliente' =>$this->getCpfCliente(),
			  ':enderecoCliente'=>$this->getEnderecoCliente()
		  ));

		  if(count($results)>0){
			$this->setData($results[0]);
		 }
	 }

	 public function update($nomeCliente, $cpfCliente, $enderecoCliente){
		 
		 $this->setNomeCliente($nomeCliente);
		 $this->setCpfCliente($cpfCliente);
		 $this->setEnderecoCliente($enderecoCliente); 

		 $sql = new sql();
		 $sql->query("UPDATE usuarios set nomeCliente = :NOMECLIENTE, cpfCliente = :CPFCLIENTE, enderecoCliente = :ENDERECOCLIENTE where id = :ID", array(
			':NOMECLIENTE'=>$this->getNomeCliente(),
			':CPFCLIENTE' =>$this->getCpfCliente(),
			':ENDERECOCLIENTE'=>$this->getEnderecoCliente(), 
			':ID'=>$this->getId()
		 ));
	 }

	 public function delete(){
		 $sql = new sql();

		 $sql->query("DELETE FROM usuarios WHERE id = :ID", array(
           ':ID' => $this->getId()
		 ));

		 $this->setId(null);
		 $this->setNomeCliente(null);
		 $this->setCpfCliente(null);
		 $this->setEnderecoCliente(null);
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