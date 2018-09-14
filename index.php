<?php 
	require_once('cabecalho.php'); 
	require_once('usuario_base.php');
?>


<center><h1>Loja do Kauã</h1></center>


<?php
	if(usuario_esta_logado()) {
?>
	<p class="text-success">Você está logado como <?= usuario_logado() ?></p>
	<a href="logout.php">Deslogar</a>
	<?php
	} else {
	?>
		<h2>Login</h2>
		<form action="login.php" method="POST">
			<table class="table">
				<tr>
					<td><label><h3>E-mail</h3></label></td>
					<td><input class="form-control" type="email" name="email"></td>
				</tr>
				
				<tr>
					<td><label><h3>Senha</h3></label></td>
					<td><input class="form-control" type="password" name="senha"></td>
				</tr>

				<tr>
					<td><input class="btn btn-primary" type="submit" value="Enviar"></td>
				</tr>

			</table>
		</form>
	<?php
	}
?>


<?php 
require_once('rodape.php'); 
?>


