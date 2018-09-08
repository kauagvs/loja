<?php 
	include('cabecalho.php');
	include('conecta.php');
	include('produto_base.php');

?>

<table class="table table-striped table-bordered">

	<?php  
	
	$produtos = listar_cadastros($conexao);

	foreach ($produtos as $produto) :

	?> 
		<tr>
			<td><?=$produto['nome']?></td>
			<td><?=$produto['preco']?></td>
			<td><?=$produto['id']?></td>
		</tr>

	<?php  
		endforeach	
	?>
	
</table>

<?php  
	include('rodape.php'); 
?>