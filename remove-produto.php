<?php  

	include("conecta.php");
	include("produto_base.php");

	$id = $_POST['id'];
	deletar_cadastro($conexao, $id);
	header("Location: produto-lista.php?removido=true");
	die();
?>

