<?php 

	require_once('includes/cabecalho.php'); 

	$id = $_POST['deletar'];
	
	if (deleteUser($conexao, $id)) {
		
		$_SESSION['deletado'] = "<p class='alert alert-success text-center'>Usuário(a) deletado</p>";
		header("Location: listagem.php");
		die();

 	}else{ 

		$_SESSION['naoDeletado'] = "<p class='alert alert-danger text-center'>Erro. Usuário(a) não foi deletado</p>";
		header("Location: listagem.php");
		die();

	} 

	require_once('includes/rodape.php'); 

?>