<?php

	require_once('includes/cabecalho.php');
	
	$id = $_POST['id'];
	$nomeUsuario = $_POST['nome_de_usuario'];
	$nomeCompleto = $_POST['nome_completo'];
	$email = $_POST['email'];

	$dtNascimento = $_POST['data_nascimento'];
	$dtNascimento = date("d-m-Y", strtotime($dtNascimento));
	$dtNascimento = str_replace('-', '/', $dtNascimento);

	$cidade = $_POST['cidade'];

	if (!empty($nomeUsuario) and
		!empty($nomeCompleto) and
		!empty($email) and
		!empty($dtNascimento) and
		!empty($cidade)){

		changeUser($conexao, $id, $nomeUsuario, $nomeCompleto, $email, $cidade, $dtNascimento);

		$_SESSION['alterado'] = "<p class='alert alert-success text-center'>Usuário(a): <b><?=$nomeUsuario?></b> alterado com sucesso.</p>";
		header("Location: listagem.php");
		die();
 	}else{ 
	
 		$_SESSION['naoAlterado'] = "<p class='alert alert-danger text-center'>Erro ao alterar Usuário(a): <b><?=$nomeUsuario?></b>.</p>";
		header("Location: listagem.php");
		die();
	}
?>