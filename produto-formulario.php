

<?php 

	include('cabecalho.php');
	include('conecta.php');
	include('categoria_base.php');

	$categorias = listar_categorias($conexao);

?>
		
		<center><h1>Formulário de Cadastro</h1></center>
		<br>

		<form action="adiciona-produto.php" method="POST">

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
					<td><label>Descrição:</label></td>
					<td><textarea class="form-control" type="text" name="descricao"></textarea></td>
				</tr>

				<tr>
					<td><label>Usado:</label></td>
					<td><input type="checkbox" name="usado"> Sim</td>
				</tr>


			    <td><label>Categoria:</label></td>
				    <td>
				    	<select class="form-control" name="id_categoria">
				    		<?php foreach($categorias as $categoria) : ?>
				    			<option value="<?=$categoria['id']?>"><?=$categoria['nome']?></option>
				    		<?php endforeach ?>
				    	</select>				        
				    </td>
				</tr>

				<tr>
					<td><input class="btn btn-primary" type="submit" value="Cadastrar" /></td>
				</tr>

			</table>				

			<br><br>

			

		</form>

<?php include('rodape.php') ?>