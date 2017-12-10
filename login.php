<?php 

	require_once('includes/cabecalho.php'); 
	
	$email = $_POST['email'];
	$senha = $_POST['senha'];

	$usuario = searchUser($conexao, $email, $senha);

	if ($usuario == null) {

		$_SESSION['login_Ivalido'] = 'Login invalido!';
		header("Location: index.php");
 
 	}else{ logInUser($usuario['nome_usuario']); 

 	} 

 require_once('includes/rodape.php'); ?>