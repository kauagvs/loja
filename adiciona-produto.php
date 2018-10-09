<?php

	require_once("cabecalho.php");
	require_once("usuario_base.php");
	verifica_usuario();

	$tipo_produto = $_POST['tipo_produto'];
	$categoria_id = $_POST['id_categoria'];

	$factory_produto = new ProdutoFactory();
	$produto = $factory_produto->validar_tipo($tipo_produto, $_POST);
	$produto->atribuidoEm($_POST);

	$produto->getCategoria()->setId($categoria_id);

	if (array_key_exists('usado', $_POST)) {
		$produto->setUsado("True");
	}else {
		$produto->setUsado("False");
	}

	$produto_dao = new ProdutoDao($conexao);

	if($produto_dao->adicionar_cadastro($produto)) {
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
