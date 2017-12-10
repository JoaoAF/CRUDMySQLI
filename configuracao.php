<?php 

	require_once('includes/cabecalho.php');

	if (isset($_SESSION['mudarSenhaOK'])) :
		echo $_SESSION['mudarSenhaOK'];
		unset($_SESSION['mudarSenhaOK']);
	endif;

	if (isset($_SESSION['mudarSenhaErro'])) :
		echo $_SESSION['mudarSenhaErro'];
		unset($_SESSION['mudarSenhaErro']);
	endif;

?>
	
	<section class="container">
		<h1>Configurações</h1>	
		<form method="post" action="mudarSenha.php">
			<h4>Mudar senha</h4>
			<div class="row">
				<div class="form-group col-12">
					<input class="form-control col-6" type="password" name="senha" placeholder="Senha">
				</div>	
				<div class="form-group col-12"> 
					<input class="form-control col-6" type="password" name="confirmaSenha" placeholder="Confirme a senha">
				</div>
				<div class="form-group col-12">
					<button type="submit" class="btn btn-info col-3">Mudar senha</button>
				</div>
			</div>
		</form>
	</section>

<?php  require_once('includes/rodape.php'); ?>
