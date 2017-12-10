
<?php 
	require_once('includes/cabecalho.php'); 

	$nomeUsuario = strtolower($_POST['nome_de_usuario']);
	$nomeCompleto = $_POST['nome_completo'];
	$email = strtolower($_POST['email']);
	$data_nascimento = date("d-m-Y", strtotime($_POST['data_nascimento']));
	$cidade = $_POST['cidade'];
	$senha = $_POST['senha'];
	$verificaSenha = $_POST['verificar_senha'];
	$senhaCriptografada = md5($_POST['senha']);
	$dataHora = date("d-m-Y H:i:s", strtotime(date('d-m-Y H:i:s')));
	$dataHora = str_replace('-', '/', $dataHora);
	$data_nascimento = str_replace('-', '/', $data_nascimento);

	$verificaEmail = checkEmail($conexao, $email);
	$verificaUsuario = checkNameUser($conexao, $nomeUsuario);

	if (!empty($verificaEmail) or $verificaEmail != null) :
	
		$_SESSION['ErroEmail'] = "<p class='alert alert-danger text-center'>Este email já foi cadastrado</p>";
		header("Location: form-cadastro.php");
		die();
	
	endif;

	if (!empty($verificaUsuario) or $verificaUsuario != null) :
	
		$_SESSION['ErroUsuario'] = "<p class='alert alert-danger text-center'>Este nome de usuário já foi cadastrado</p>";
		header("Location: form-cadastro.php");
		die();
	
	endif;

		if ($senha === $verificaSenha) {

		}else{
			$_SESSION['ErroSenha'] = "<p class='alert alert-danger text-center'>Senhas não correspondem.</p>";
			header("Location: form-cadastro.php");
			die();
		}

		if (!empty($nomeUsuario) and
		!empty($nomeCompleto) and
		!empty($email) and
		!empty($data_nascimento) and
		!empty($cidade) and
		!empty($senha) and
		!empty($verificaSenha) and
		$senha === $verificaSenha){

		insert($conexao, $nomeUsuario, $nomeCompleto, $email, $data_nascimento, $cidade, $senhaCriptografada, $dataHora);

		$_SESSION['cadastrado'] = "<p class='alert alert-success text-center'>Usuário(a) <b><?=$nomeUsuario?></b> cadastrado</p>";
		header("Location: index.php");
		die();
	
	}else{ 

		$_SESSION['naoCadastrado'] = "<p class='alert alert-danger text-center'>Erro. Verifique se os campos foram preenchidos corretamente</b></p>";
		header("Location: form-cadastro.php");
		die();

	} 

	require_once('includes/rodape.php'); 
?>