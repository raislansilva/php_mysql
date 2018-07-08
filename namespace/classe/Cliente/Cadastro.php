<?php

  namespace Cliente;

   class Cadastro extends \Cadastro{

      public function registrarVenda(){
      	 echo "Foi Registrado a Venda para o cliente ".$this->getNome();
      }
      

   }




?>