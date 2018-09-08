

<?php 

	include('cabecalho.php');
	include('conecta.php');
	include('categoria_base.php');
	include('produto_base.php');

	$id = $_GET['id'];

	$categorias = listar_categorias($conexao);
	$produto = carregar_editar_cadastro($conexao, $id);

	$usado = $produto['usado'] ? "checked='checked'" : "";
	$categoria = $produto['id_categoria'] ? "checked='checked'" : "";
?>
		
		<center><h1>Formulário de Cadastro</h1></center>
		<br>

		<form action="altera-produto.php" method="POST">

			<input type="hidden" name="id" value="<?=$produto['id']?>">

			<table class="table">

				<tr>
					<td><label>Produto:</label></td>
					<td><input class="form-control" type="text" name="nome" value="<?=$produto['nome']?>"></td> 
				</tr>

				<tr>
					<td><label>Preço:</label></td>
					<td><input class="form-control" type="text" name="preco" value="<?=$produto['preco']?>"></td>
				</tr>

				<tr>
					<td><label>Descrição:</label></td>
					<td><textarea class="form-control" type="text" name="descricao"><?=$produto['descricao']?></textarea></td>
				</tr>

				<tr>
					<td><label>Usado:</label></td>
					<td><input type="checkbox" <?=$usado?> name="usado"> Sim</td>
				</tr>


			    <td><label>Categoria:</label></td>
				    <td>
				    	<select name="id_categoria" class="form-control">
		                    <?php foreach($categorias as $categoria) : 
		                        $select_categoria = $produto['id_categoria'] == $categoria['id'];
		                        $select = $select_categoria ? "selected='selected'" : "";
		                        ?>
		                        <option value="<?=$categoria['id']?>" <?=$select?>>
		                                <?=$categoria['nome']?>
		                        </option>
		                    <?php endforeach ?>
	                    </select>				        
				    </td>
				</tr>

				<tr>
					<td><input class="btn btn-primary" type="submit" value="Alterar" /></td>
				</tr>

			</table>				

			<br><br>

			

		</form>

<?php include('rodape.php') ?>