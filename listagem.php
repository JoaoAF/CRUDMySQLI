
<?php 
	require_once('includes/cabecalho.php');  
	checkUserOnline();

	if (isset($_SESSION['alterado'])) :
		echo $_SESSION['alterado'];
		unset($_SESSION['alterado']);
	endif;

	if (isset($_SESSION['naoAlterado'])) :
		echo $_SESSION['naoAlterado'];
		unset($_SESSION['naoAlterado']);
	endif;

	if (isset($_SESSION['deletado'])) :
		echo $_SESSION['deletado'];
		unset($_SESSION['deletado']);
	endif;

	if (isset($_SESSION['naoDeletado'])) :
		echo $_SESSION['naoDeletado'];
		unset($_SESSION['naoDeletado']);
	endif;
?>
	<section class="container listing">
			
		<h1>Listagem geral</h1>

		<?php require_once('includes/listagens.php'); ?>

		<table class="table">
		  <thead>
		    <tr>
		      <th scope="col">Nome</th>
		      <th scope="col">Email</th>
		      <th scope="col">Data de nascimento</th>
		      <th scope="col">Cidade</th>
		      <th scope="col">Data e hora de cadastro</th>
		      <th scope="col">Alterar</th>
		      <th scope="col">Deletar</th>
		    </tr>
		  </thead>
		  <tbody>
		    <?php 
		    	$usuarios = listing($conexao); 
		    	foreach($usuarios as $usuario):
		    ?>
		    <tr>
		    	<td><?= $usuario['nome_usuario']; ?></td>
		    	<td><?= $usuario['email']; ?></td>
		    	<td><?= $usuario['data_nascimento']; ?></td>
		    	<td><?= $usuario['cidade']; ?></td>
		    	<td><?= $usuario['datahora']; ?></td>
		    	<td>
		    		<form method="post" action="form-alterar.php">
		    			<input type="hidden" name="alterar" value="<?= $usuario['id'] ?>">
		    			<button class="btn btn-info">Alterar</button></td>
		    		</form>
		    	<td>
		    		<form method="post" action="deletar.php">
		    			<input type="hidden" name="deletar" value="<?= $usuario['id'] ?>">
		    			<button class="btn btn-danger">Deletar</button></td>
		    		</form>
		    </tr>
		    <?php endforeach; ?>
		  </tbody>
		</table>

	</section>

<?php require_once('includes/rodape.php'); ?>