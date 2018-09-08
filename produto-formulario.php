

<?php include('cabecalho.php') ?>
		
		<center><h1>Formulário de Cadastro</h1></center>
		<br>

		<form action="adiciona-produto.php">

			<table class="table">

				<tr>
					<td><label>Produto:</label></td>
					<td><input class="form-control" type="text" name="nome"></td> 
				</tr>

				<tr>
					<td><label>Preço:</label></td>
					<td><input class="form-control" type="text" name="preco"></td>
				</tr>

				<tr>
					<td><input class="btn btn-primary" type="submit" value="Cadastrar" /></td>
				</tr>

			</table>				

			<br><br>

			

		</form>

<?php include('rodape.php') ?>