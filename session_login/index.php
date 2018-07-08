
<?php
session_start();

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Session no PHP</title>
	<meta http-equiv="X-UA-Compatible" content="IE-edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="" rel="stylesheet">

	<style>

	.container{
		width: 30%;
		height: 280px;
		background-color: #BEBEBE;
		margin:0 auto;
		margin-top: 10%;
		padding: 20px;

	}

	.esqueceu{
		margin-left: 230px;
		
	}


</style>

</head>
<body>
	<div class="container">
		<form action="valida.php" method="post" id="form" name="form">
			<div class="form-group">
				<label for="login">Digite seu usuário</label>
				<input class="form-control" name="login" type="text" id="login" value="" placeholder="login">
			</div>

			<div class="form-group">
				<label for="nome">Diigte sua senha</label>
				<input class="form-control" name="senha" type="password" id="senha" value="" placeholder="senha">
			</div>
			<a href="" class="esqueceu">Esqueceu a senha!</a>

			<button class="btn btn-primary" type="submit">Entrar</button></br>
			<?php
			if(isset($_SESSION['erro'])){
				echo $_SESSION['erro'];
				unset($_SESSION['erro']);
			} 



			?>
			
			<p>Não possui conta: <a href="">cadastre-se!</a></p><br>
			
			

		</form>

	</div>

</body>
</html>