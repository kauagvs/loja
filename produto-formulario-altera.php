<?php 

	require_once("cabecalho.php");

	$id = $_GET['id'];
	$produto_dao = new ProdutoDao($conexao);
	$produto = $produto_dao->carregar_editar_cadastro($id);

	$categoria_dao = new CategoriaDao($conexao);
	$categorias = $categoria_dao->listar_categorias();

	$usado = $produto->getUsado() ? "checked='checked'" : "";
	$produto->setUsado($usado); 

?>
		
	<center><h1>Formulário de Alteração</h1></center>
	<br>

	<form action="altera-produto.php" method="POST">

		<input type="hidden" name="id" value="<?=$produto->getId()?>">

		<table class="table">

			<?php include('formulario-padrao.php'); ?>

			<tr>
				<td><input class="btn btn-primary" type="submit" value="Alterar" /></td>
			</tr>

		</table>				

		<br><br>

		

	</form>

<?php require_once('rodape.php') ?>