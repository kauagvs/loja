

<?php 

	require_once('cabecalho.php');
	require_once('categoria_base.php');
	require_once('usuario_base.php');
	verifica_usuario();

	$produto = array("nome" => "", "descricao" => "", "preco" => "", "id_categoria" => "1");
	$usado = "";

	$categorias = listar_categorias($conexao);

?>
		
		<center><h1>Formulário de Cadastro</h1></center>
		<br>

		<form action="adiciona-produto.php" method="POST">

			<table class="table">

				<?php include('formulario-padrao.php'); ?>

				<tr>
					<td><input class="btn btn-primary" type="submit" value="Cadastrar" /></td>
				</tr>

			</table>				

			<br><br>

			

		</form>

<?php require_once('rodape.php') ?>