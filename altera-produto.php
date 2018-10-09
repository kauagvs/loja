<?php

	require_once("cabecalho.php");

	$tipo_produto = $_POST['tipo_produto'];
	$produto_id = $_POST['id'];
	$categoria_id = $_POST['id_categoria'];

	$factory_produto = new ProdutoFactory();
	$produto = $factory_produto->validar_tipo($tipo_produto, $_POST);
	$produto->atribuidoEm($_POST);

	$produto->setId($produto_id);
	$produto->getCategoria()->setId($categoria_id);

	$usado = array_key_exists('usado', $_POST) ? "true" : "false";

	$produto_dao = new ProdutoDao($conexao);

	if($produto_dao->editar_cadastro($produto)) {
?>

<p class="alert-success">Produto <?= $produto->getNome(); ?>, <?=$produto->getPreco();?> alterado com sucesso!</p>

<?php
} else {
	$msg = msql_error($conexao);
?>

<p class="alert-danger">O produto <?=$produto->getNome();?> não foi alterado: Erro <?= $msg; ?></p>

<?php
}

require_once('rodape.php');

?>
