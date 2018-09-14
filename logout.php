<?php  

	require_once('usuario_base.php');
	logout();
	$_SESSION['sucesso'] = "Deslogado com Sucesso!";
	header("Location: index.php");
	die();

?>