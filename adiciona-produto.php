<?php 

	require_once("cabecalho.php");
	require_once("class/Produto.php");
	require_once("class/Categoria.php");
	require_once("produto_base.php");
	require_once("usuario_base.php");
	verifica_usuario();

	
	$categoria = new Categoria();
	$categoria->setId($_POST['id_categoria']);

	$nome = $_POST['nome'];
	$preco = $_POST['preco'];
	$descricao = $_POST['descricao'];
	$categoria = $categoria;
	$usado = array_key_exists('usado', $_POST) ? "true" : "false";

	$produto = new Produto($nome, $preco, $descricao, $categoria, $usado);

	if(adicionar_cadastro($conexao, $produto)) {
?>

<p class="alert-success">Produto <?= $produto->getNome(); ?>, <?=$produto->getPreco();?> adicionado com sucesso!</p>

<?php
} else {
	$msg = msql_error($conexao);
?>

<p class="alert-danger">O produto <?=$produto->getNome();?> não foi adicionado: Erro <?= $msg; ?></p>

<?php
}

require_once('rodape.php'); 

?>

	

	
	
