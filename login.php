<?php  
	require_once('login_base.php');
	require_once('usuario_base.php');

	$email = $_POST['email'];
	$senha = md5($_POST['senha']);

	$login_result = validar_login($conexao, $email, $senha);

	if($login_result == null) {
		$_SESSION['danger'] = "Usuário ou Senha Inválidos";
	    header("Location: index.php?login=0");
	} else {
		$_SESSION['success'] = "Usuário Logado com Sucesso!";
		loga_usuario($email);
	    header("Location: index.php?login=1");
	}
	die();

?>