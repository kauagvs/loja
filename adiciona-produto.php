<?php 

	include('cabecalho.php');

	include('conecta.php'); 

	include('produto_base.php'); 

	$nome = $_GET['nome'];
	$preco = $_GET['preco'];

	if(s_adicionar_cadastro($conexao, $nome, $preco)) {
?>

<p class="alert-success">Produto <?= $nome; ?>, <?=$preco;?> adicionado com sucesso!</p>

<?php
} else {
	$msg = msqli_error($conexao);
?>

<p class="alert-danger">O produto <?=$nome;?> não foi adicionado: Erro <?= $msg; ?></p>

<?php
}

include('rodape.php'); 

?>

	

	
	
