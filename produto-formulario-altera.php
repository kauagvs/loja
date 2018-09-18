<?php 

	require_once("cabecalho.php");
	require_once("categoria_base.php");
	require_once("produto_base.php");
	require_once("class/Produto.php");

	$id = $_GET['id'];
	$produto = carregar_editar_cadastro($conexao, $id);
	$categorias = listar_categorias($conexao);

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