<?php 

	include("cabecalho.php");
	include("conecta.php");
	include("produto_base.php");

	$nome = $_POST['nome'];
	$preco = $_POST['preco'];
	$descricao = $_POST['descricao'];
	$id_categoria = $_POST['id_categoria'];

	$usado = array_key_exists('usado', $_POST) ? "true" : "false";

	if(adicionar_cadastro($conexao, $nome, $preco, $descricao, $id_categoria, $usado)) {
?>

<p class="alert-success">Produto <?= $nome; ?>, <?=$preco;?> adicionado com sucesso!</p>

<?php
} else {
	$msg = msql_error($conexao);
?>

<p class="alert-danger">O produto <?=$nome;?> não foi adicionado: Erro <?= $msg; ?></p>

<?php
}

include('rodape.php'); 

?>

	

	
	
