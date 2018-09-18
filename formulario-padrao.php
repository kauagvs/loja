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