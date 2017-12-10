
<?php 

	require_once('includes/cabecalho.php'); 
	$nome = '';
	$nome_completo = '';
	$data_nascimento = '';
	$cidade = '';
	$email = '';

	if (isset($_SESSION['naoCadastrado'])) :
		echo $_SESSION['naoCadastrado'];
		unset($_SESSION['naoCadastrado']);
	endif;

	if (isset($_SESSION['ErroSenha'])) :
		echo $_SESSION['ErroSenha'];
		unset($_SESSION['ErroSenha']);
	endif;

	if (isset($_SESSION['ErroEmail'])) :
		echo $_SESSION['ErroEmail'];
		unset($_SESSION['ErroEmail']);
	endif;

	if (isset($_SESSION['ErroUsuario'])) :
		echo $_SESSION['ErroUsuario'];
		unset($_SESSION['ErroUsuario']);
	endif;

?>

<section class="container">
	<h1>Cadastrar usuário</h1>
	<form class="col-12" method="post" action="usuarioCadastrar.php">
		
		<?php require_once('form/formulario-padrao.php') ?>
	<div class="row col-6">
		<div class="form-group col-6">
			<label>Senha: </label>
			<input class="form-control" type="password" name="senha">
		</div>
		<div class="form-group col-6">
			<label>Confirmar senha: </label>
			<input class="form-control" type="password" name="verificar_senha">
		</div>
	</div>
		<div class="form-group col-6">
			<button class="btn btn-info" type="submit">Cadastrar</button>
		</div>
	</form>
</section>

<?php 
	require_once('includes/rodape.php'); 
?>