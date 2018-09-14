<?php 
	require_once("cabecalho.php");
	require_once("produto_base.php");
?>

<table class="table table-striped table-bordered">

	<?php  
	
	$produtos = listar_cadastros($conexao);

	foreach ($produtos as $produto) :

	?> 
		<tr>
			<td><?=$produto['nome']?></td>
			<td><?=$produto['preco']?></td>
			<td><?=substr($produto['descricao'], 0, 40)?></td>
			<td><?=$produto['nome_categoria']?></td>
			<td><a class="btn btn-primary" href="produto-formulario-altera.php?id=<?=$produto['id']?>">Alterar</a></td>
			<td>
				<form action="remove-produto.php" method="POST">
		            <input type="hidden" name="id" value="<?=$produto['id']?>" />
		            <button class="btn btn-danger">Remover</button>
		        </form>
			</td>
		</tr>



	<?php  
		endforeach	
	?>
	
</table>

<?php  
	require_once('rodape.php'); 
?>