<?php 

	require_once('includes/cabecalho.php');
	
		$senhaNova = $_POST['senha'];
		$confirmarSenha = $_POST['confirmaSenha'];
		$email = $_SESSION['usuario_logadoEmail'];

		if ($senhaNova === $confirmarSenha) {

			mudarSenha($conexao, $email, $senhaNova);
			$_SESSION['mudarSenhaOK'] = "<p class='alert alert-success text-center'>Senha alterada</p>";
			header("Location: configuracao.php");
			die();

		}else{
			$_SESSION['mudarSenhaErro'] = "<p class='alert alert-danger text-center'>As senhas não correspondem</p>";
			header("Location: configuracao.php");
			die();
		}	

	require_once('includes/rodape.php'); 

?>
