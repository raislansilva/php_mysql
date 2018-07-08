<?php

class Cadastro{

	private $nome;
	private $email;
	private $senha;

	public function getNome():String{
		return $this->nome;
	}

	public function getEmail():String{
		return $this->email;
	}

	public function getSenha():String{
		return $this->senha;
	}

	public function setNome($nome){
		$this->nome = $nome;
	}

	public function setEmail($email){
		$this->email = $email;
	}

	public function setSenha($senha){
		$this->senha = $senha;
	}

	public function __toString(){
		return json_encode(array(
			"nome" => $this->getNome(),
			"email" => $this->getEmail(),
			"senha" => $this->getSenha()

		));
	}

}

?>