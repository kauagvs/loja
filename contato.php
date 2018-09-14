<?php  
	require_once("cabecalho.php");
?>

<form action="envia-contato.php" method="POST">
	<table class="table">
		<tr>
			<td><label>Nome:</label></td>
			<td><input class="form-control" type="text" name="nome"></td> 
		</tr>

		<tr>
			<td><label>E-mail:</label></td>
			<td><input class="form-control" type="email" name="email"></td>
		</tr>

		<tr>
			<td><label>Mensagem:</label></td>
			<td><textarea class="form-control" type="text" name="mensagem"></textarea></td>
		</tr>

		<tr>
			<td><input class="btn btn-primary" type="submit" value="Enviar" /></td>
		</tr>
	</table>
</form>


<?php  
	require_once("rodape.php");
?>