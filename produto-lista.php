<?php 
	require_once("cabecalho.php");
	require_once("produto_base.php");
	require_once("class/Produto.php");
?>

<table class="table table-striped table-bordered">

	<?php  
	
	$produtos = listar_cadastros($conexao);

	// echo "<pre>"; print_r($produtos); die();

	foreach ($produtos as $produto) :

	?> 
		<tr>
			<td><?=$produto->getNome()?></td>
			<td><?=$produto->getPreco()?></td>
			<td><?=$produto->descontoProduto();?></td>
			<td><?=substr($produto->getDescricao(), 0, 40);?></td>
			<td><?=$produto->getCategoria()->getNome()?></td>
			<td><a class="btn btn-primary" href="produto-formulario-altera.php?id=<?=$produto->getId()?>">Alterar</a></td>
			<td>
				<form action="remove-produto.php" method="POST">
		            <input type="hidden" name="id" value="<?=$produto->getId()?>" />
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