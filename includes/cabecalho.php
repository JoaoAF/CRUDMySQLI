<?php 

	require_once('includes/conecta.php'); 
	require_once('banco/usuario.php'); 
	session_start();

	if(isset($_SESSION['usuario_logado'])):

?>
	<div class="alert alert-success">
		Você esta logado como: <b><?= $_SESSION['usuario_logado'] ?></b>
	</div>
	
<?php endif; ?>
<!DOCTYPE html>
<html>
<head>
	<title>CRUD - MySQL</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<nav class="container">
	<h1>CRUD</h1>
	<ul class="row nav">
		<li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
		<li class="nav-item"><a class="nav-link" href="form-cadastro.php">Cadastro</a></li>
		<li class="nav-item"><a class="nav-link" href="listagem.php">Listagem</a></li>
		<li class="nav-item"><a class="nav-link" href="configuracao.php">Configurações</a></li>
		<li>
			<form id="logout" action="logout.php">
				<button type="submit" class="btn btn-danger">logout</div>
			</form>
		</li>
	</ul>
</nav>