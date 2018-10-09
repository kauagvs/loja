<?php
	require_once("cabecalho.php");
?>

<table class="table table-striped table-bordered">

	<?php

	$produto_dao = new ProdutoDao($conexao);
	$produtos = $produto_dao->listar_cadastros();
	foreach ($produtos as $produto) :
	?>
		<tr>
			<td><?=$produto->getNome()?></td>
			<td><?=$produto->getPreco()?></td>
			<td><?=$produto->descontoProduto();?></td>
			<td><?=$produto->impostoProduto();?></td>
			<td><?=substr($produto->getDescricao(), 0, 40);?></td>
			<td><?=$produto->getCategoria()->getNome()?></td>
			<td><?=get_class($produto)?></td>
			<td>
				<?php
					if ($produto->possuiIsbn()){
						echo "Isbn: ". $produto->getIsbn();
					} else {
						echo "Não Possuí Isbn";
					}
				?>
			</td>
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
