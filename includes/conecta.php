<?php 

	$conexao = new mysqli('localhost', 'root', '', 'crud');
	$conexao->set_charset("utf8");

	if ($conexao->connect_error) {
		echo "<div class='alert alert-danger'>Erro na conexão com o banco</div>";
	}

?>