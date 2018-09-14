<?php  

	require_once("conecta.php");

	function validar_login($conexao, $email, $senha){

		$email = mysqli_real_escape_string($conexao, $email);

		$query = "select * from usuarios where email='{$email}' and senha='{$senha}'";
		$result = mysqli_query($conexao, $query);
		$usuario = mysqli_fetch_assoc($result);
		return $usuario;
	}

?>