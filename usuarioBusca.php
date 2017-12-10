<?php require_once('includes/cabecalho.php'); ?>

	<section class="container listing">
			
		<h1>Listagem por nome - <?= $_POST['user'] ?></h1>

		<?php require_once('includes/listagens.php'); ?>

		<table class="table">
		  <thead>
		    <tr>
		      <th scope="col">Nome</th>
		      <th scope="col">Email</th>
		      <th scope="col">Data de nascimento</th>
		      <th scope="col">Cidade</th>
		      <th scope="col">Data e hora de cadastro</th>
		    </tr>
		  </thead>
		  <tbody>
		    <?php 
		    	$usuarios = listingUser($conexao, $_POST['user']); 
		    	foreach($usuarios as $usuario):
		    ?>
		    <tr>
		    	<td><?= $usuario['nome_usuario']; ?></td>
		    	<td><?= $usuario['email']; ?></td>
		    	<td><?= $usuario['data_nascimento']; ?></td>
		    	<td><?= $usuario['cidade']; ?></td>
		    	<td><?= $usuario['datahora']; ?></td>
		    </tr>
		    <?php endforeach; ?>
		  </tbody>
		</table>

	</section>
			
<?php require_once('includes/rodape.php'); ?>