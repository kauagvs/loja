<tr>
	<td><label>Produto:</label></td>
	<td><input class="form-control" type="text" name="nome" value="<?=$produto->getNome()?>"></td>
</tr>

<tr>
	<td><label>Preço:</label></td>
	<td><input class="form-control" type="number" name="preco" step="0.01" value="<?=$produto->getPreco()?>"></td>
</tr>

<tr>
	<td><label>Descrição:</label></td>
	<td><textarea class="form-control" type="text" name="descricao"><?=$produto->getDescricao()?></textarea></td>
</tr>

<tr>
	<td><label>Usado:</label></td>
	<td><input type="checkbox" <?=$usado?> name="usado"> Sim</td>
</tr>

<tr>
	<td><label>Categoria:</label></td>
  <td>
  	<select name="id_categoria" class="form-control">
          <?php foreach($categorias as $categoria) :
              $select_categoria = $produto->getCategoria()->getId() == $categoria->getId();
              $select = $select_categoria ? "selected='selected'" : "";
              ?>
              <option value="<?=$categoria->getId()?>" <?=$select?>>
                      <?=$categoria->getNome()?>
              </option>
          <?php endforeach ?>
      </select>
  </td>
</tr>

<tr>
	<td><label>Tipo de Produtos:</label></td>
  <td>
  	<select name="tipo_produto" class="form-control">
					<optgroup label="Livros">
						<?php
							$tipos = array("Livro Fisico", "Ebook");
							foreach($tipos as $tipo) :
									$tipo_livro = str_replace(" ", "", $tipo);
		              $select_tipo = get_class($produto) == $tipo_livro;
		              $select = $select_tipo ? "selected='selected'" : "";
		              ?>
											<option value="<?=$tipo_livro?>" <?=$select?>>
															<?=$tipo?>
											</option>
	          <?php endforeach ?>
					</optgroup>
      </select>
  </td>
</tr>

<!-- Verificação de Isbn -->

<?php
	if ($produto->possuiIsbn()){
		$isbn = $produto->getIsbn();
	} else {
		$isbn = "";
	}
?>

<tr>
	<td><label>Isbn (Livro):</label></td>
	<td><input class="form-control" type="text" name="isbn" value="<?= $isbn ?>">
	</td>
</tr>

<!-- Verificação de Isbn -->


<!-- Verificação de Taxa de Impressão -->

<?php
	if ($produto->possuiImpressao()){
		$impressao = $produto->getImpressao();
	} else {
		$impressao = "";
	}
?>

<tr>
	<td><label>Taxa de Impressão:</label></td>
	<td><input class="form-control" type="text" name="impressao" value="<?= $impressao ?>">
	</td>
</tr>

<!-- Verificação de Taxa de Impressão -->


<!-- Verificação de Water Mark -->

<?php
	if ($produto->possuiWaterMark()){
		$waterMark = $produto->getWaterMark();
	} else {
		$waterMark = "";
	}
?>

<tr>
	<td><label>Water Mark:</label></td>
	<td><input class="form-control" type="text" name="water_mark" value="<?= $waterMark ?>">
	</td>
</tr>

<!-- Verificação de Water Mark -->
