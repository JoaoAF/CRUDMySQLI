<?php 

	require_once('includes/cabecalho.php'); 
	$id = $_POST['alterar'];

	$usuario = findUserToChange($conexao, $id);

	$nome = $usuario['nome_usuario'];
	$nome_completo = $usuario['nome_completo'];
	
	$data_nascimento = $usuario['data_nascimento'];
	$data_nascimento = str_replace('/', '-', $data_nascimento);
	$data_nascimento = date("Y-m-d", strtotime($data_nascimento));

	$cidade = $usuario['cidade'];
	$email = $usuario['email'];
	$senha = $usuario['senha'];
		
?>

<section class="container">
	<h1>Alterar informações de: <u><i><?=$nome?></i></u></h1>
	<form class="col-md-12" method="post" action="usuarioAlterar.php">
		
		<?php require_once('form/formulario-padrao.php'); ?>
		
		</div>
		<div class="form-group col-6">
			<button class="btn btn-info" type="submit">Alterar</button>
		</div>
	</form>
</section>

<?php require_once('includes/rodape.php'); ?>