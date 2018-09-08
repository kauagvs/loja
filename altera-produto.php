<?php 

	include("cabecalho.php");
	include("conecta.php");
	include("produto_base.php");

	$id = $_POST['id'];
	$nome = $_POST['nome'];
	$preco = $_POST['preco'];
	$descricao = $_POST['descricao'];
	$id_categoria = $_POST['id_categoria'];

	$usado = array_key_exists('usado', $_POST) ? "true" : "false";

	if(editar_cadastro($conexao, $id, $nome, $preco, $descricao, $id_categoria, $usado)) {
?>

<p class="alert-success">Produto <?= $nome; ?>, <?=$preco;?> alterado com sucesso!</p>

<?php
} else {
	$msg = msql_error($conexao);
?>

<p class="alert-danger">O produto <?=$nome;?> não foi alterado: Erro <?= $msg; ?></p>

<?php
}

include('rodape.php'); 

?>

	

	
	
