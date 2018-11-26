<form method="POST" action="">

	<div class="form-group">
		<label for="email">Email:</label>
		<input id="email" class="form-control" type="Email" name="email">
	</div>
		<br>
	<div class="form-group">
		<label for="passwd">Senha:</label>
		<input id="passwd" class="form-control" type="password" name="passwd">
	</div>
		<br>
	<div class="form-group">
		<label for="Nome">Nome:</label>
		<input id="nome" class="form-control" type="text" name="nome">
	</div>
	
	<div class="form-group">
		<label for="Sobrenome">Sobrenome:</label>
		<input id="sobrenome" class="form-control" type="text" name="sobrenome">
	</div>
	<br>
	<select name="sexo">
		<option value="m" <?=@assinalarCampo($usuario['sexo'], 'm')?>>Masculino</option>
		<option value="f" <?=@assinalarCampo($usuario['sexo'], 'f')?>>Feminino</option>
	</select>
	<br>
	<div class="form-group">
		<label for="number">Cpf:</label>
		<input id="cpf" class="form-control" type="password" name="CPF">
	</div>
		<br>
	<div class="form-group">
		<label for="passwd">Data</label>
		<input id="passwd" class="form-control" type="password" name="Data">
	</div>
			<br>
	<div class="form-group">
		<label for="Numero">Numero:</label>
		<input id="numero" class="form-control" type="text" name="numero">
	</div>
		<br>

	
	<button type="submit" class="btn btn-primary">Cadastrar</button>

</form>