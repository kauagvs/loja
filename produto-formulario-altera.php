

<?php 

	require_once('cabecalho.php');
	require_once('categoria_base.php');
	require_once('produto_base.php');

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

				<?php include('formulario-padrao.php'); ?>

				<tr>
					<td><input class="btn btn-primary" type="submit" value="Alterar" /></td>
				</tr>

			</table>				

			<br><br>

			

		</form>

<?php require_once('rodape.php') ?>