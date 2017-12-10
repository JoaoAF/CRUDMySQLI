
	<div class="form-group col-6">
		<label>Nome de usuário: </label>
		<input value="<?=$nome?>" class="form-control" type="text" name="nome_de_usuario">
		<input value="<?=$id?>" type="hidden" name="id">
	</div>
	<div class="form-group col-6">
		<label>Nome completo: </label>
		<input value="<?=$nome_completo?>" class="form-control" type="text" name="nome_completo">
	</div>
	<div class="row col-6">
		<div class="form-group col-6">
			<label>Data de nascimento: </label>
			<input value="<?= $data_nascimento?>" class="form-control" type="date" name="data_nascimento" min="1920-12-31" max="2017-11-30">
		</div>
		<div class="form-group col-6">
			<label>Cidade: </label>
			<input value="<?=$cidade?>" class="form-control" type="text" name="cidade">
		</div>
	</div>
	<div class="form-group col-6">
		<label>Email: </label>
		<input value="<?=$email?>" class="form-control" type="email" name="email">
	</div>