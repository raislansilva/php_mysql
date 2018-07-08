<?php
 session_start();

if(isset($_POST["login"]) && isset($_POST['senha'])){
    $_SESSION["usuario"] =  $_POST["login"];
    $_SESSION['senha'] = $_POST["senha"];



	if($_SESSION['usuario']=="raislan" && $_SESSION['senha']==123){
		header("Location: pagina1.php");
	}else{
		$_SESSION['erro'] = "Usuário ou Senha Inválidos"."</br></br>";
		header("Location: index.php");
	}
}


?>