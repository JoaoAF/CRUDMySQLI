
<?php 

	require_once('includes/cabecalho.php'); 
	
	if (isset($_SESSION['error_autenticacao'])) :
		echo "<p class='alert alert-danger text-center'>Usuário não autenticado</p>";
		unset($_SESSION['error_autenticacao']);
	endif;

	if (isset($_SESSION['logout'])) :
		echo "<p class='alert alert-info text-center'>".$_SESSION['logout']."</p>";
		unset($_SESSION['logout']);
	endif;
	
	if (isset($_SESSION['login_Ivalido'])) :
		echo "<p class='alert alert-danger text-center'>".$_SESSION['login_Ivalido']."</p>";
		unset($_SESSION['login_Ivalido']);
	endif;

	if (isset($_SESSION['cadastrado'])) :
		echo $_SESSION['cadastrado'];
		unset($_SESSION['cadastrado']);
	endif;
	
?>

	<section class="container">
		
		<?php if (isset($_SESSION['usuario_logado'])) {  ?>
	
			<style> #logout{display: block!important;} </style>	
		
		<?php  }else{ ?>
		
			<form class="col-12 col-md-auto" method="post" action="login.php">
				<h2>login</h2>
				<div class="form-group">
					<input placeholder="Email" class="form-control col-4" type="email" name="email">
				</div>
				<div class="form-group">
					<input placeholder="Senha" class="form-control col-4" type="password" name="senha">
				</div>
			<div class="form-group">
					<button class="btn btn-primary col-4" type="submit">Login</button>
				</div>
			</form>

		<?php } ?>
	
	</section>

<?php require_once('includes/rodape.php'); ?>