<?php

	function insert($conexao, $nomeUsuario, $nomeCompleto, $email, $data_nascimento, $cidade, $senha, $datahora){

		$nomeUsuario = mysqli_real_escape_string($conexao, $nomeUsuario);
		$nomeCompleto = mysqli_real_escape_string($conexao, $nomeCompleto);
		$email = mysqli_real_escape_string($conexao, $email);
		$data_nascimento = mysqli_real_escape_string($conexao, $data_nascimento);
		$cidade = mysqli_real_escape_string($conexao, $cidade);
		$senha = mysqli_real_escape_string($conexao, $senha);
		$datahora = mysqli_real_escape_string($conexao, $datahora);

		$query = "INSERT INTO usuario 
					(nome_usuario, nome_completo, email, data_nascimento, cidade, senha, datahora)
					VALUES ('{$nomeUsuario}','{$nomeCompleto}', '{$email}',
					'{$data_nascimento}', '{$cidade}', '{$senha}', '{$datahora}')";

		return mysqli_query($conexao, $query);
	
	}

	function listing($conexao){

		$arrayUsuario = [];
		$query = "SELECT * FROM usuario ORDER BY id DESC";
		$resultado = mysqli_query($conexao, $query);
		
		while ($usuario = mysqli_fetch_assoc($resultado)) {
			array_push($arrayUsuario, $usuario);
		}

		return $arrayUsuario;
	}

	function listingUser($conexao, $nome){

		$arrayPesquisa = [];

		$query = "SELECT * FROM usuario WHERE nome_usuario LIKE '%".$nome."%'";
		$resultado = mysqli_query($conexao, $query);

		while ($usuario = mysqli_fetch_assoc($resultado)) {
			array_push($arrayPesquisa, $usuario);
		 }  

		 return $arrayPesquisa;
	}

	function listingCity($conexao, $city){

		$arrayPesquisa = [];

		$query = "SELECT * FROM usuario WHERE cidade LIKE '%".$city."%'";
		$resultado = mysqli_query($conexao, $query);

		while ($usuario = mysqli_fetch_assoc($resultado)) {
			array_push($arrayPesquisa, $usuario);
		 }  

		 return $arrayPesquisa;
	}

	function findUserToChange($conexao, $id){

		$query = "SELECT * FROM usuario WHERE id = {$id}";

		$resultado = mysqli_query($conexao, $query);

		return mysqli_fetch_assoc($resultado);
	}

	function changeUser($conexao, $id, $nomeUsuario, $nomeCompleto, $email, $cidade, $dataNascimento){

		$query = "UPDATE usuario SET 
					nome_usuario = '{$nomeUsuario}',
					nome_completo = '{$nomeCompleto}',
					email = '{$email}', 
					data_nascimento = '{$dataNascimento}', 
					cidade = '{$cidade}' WHERE id = {$id}";

		return mysqli_query($conexao, $query);
	}

	function deleteUser($conexao, $id){

		$query = "DELETE FROM usuario WHERE id = {$id}";

		return mysqli_query($conexao, $query);
	}

	function searchUser($conexao, $email, $senha){

		$email = mysqli_real_escape_string($conexao, $email);
		$senha = mysqli_real_escape_string($conexao, $senha);
		$senhaCriptografada = md5($senha);	

		$query = "SELECT * FROM usuario WHERE email = '{$email}' and 
					senha = '{$senhaCriptografada}'";

		$resultado = mysqli_query($conexao, $query);

		return mysqli_fetch_assoc($resultado);
	}

	function userIsOnline(){
		return isset($_SESSION['usuario_logado']);
	}

	function checkUserOnline(){
		if (!userIsOnline()) {
			$_SESSION['error_autenticacao'] = 'Usuário não autenticado';
			header("Location: index.php");
			die();
		}
	}

	function returnUserOnline(){
		return $_SESSION['usuario_logado'];
	}

	function logInUser($nomeUsuario){
		
		$_SESSION['usuario_logado'] = $nomeUsuario;
		header("Location: index.php");
	
	}

	function logout(){
		session_destroy();
		session_start();
		$_SESSION['logout'] = 'Usuário deslogado.';
	}

	function checkEmail($conexao, $email){
		
		$query = "SELECT email FROM usuario WHERE email = '{$email}'";
		$resultado = mysqli_query($conexao, $query);
		return mysqli_fetch_assoc($resultado);
	
	}

	function checkNameUser($conexao, $nomeUsuario){
		
		$query = "SELECT nome_usuario FROM usuario WHERE nome_usuario = '{$nomeUsuario}'";
		$resultado = mysqli_query($conexao, $query);
		return mysqli_fetch_assoc($resultado);	
	
	}
?>
