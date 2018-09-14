<?php  
	require_once("cabecalho.php");
	require_once("produto_base.php");
	require_once("usuario_base.php");

	$id = $_POST['id'];
	deletar_cadastro($conexao, $id);
	$_SESSION["success"] = "Produto removido com sucesso.";
	header("Location: produto-lista.php");
	die();
?>

