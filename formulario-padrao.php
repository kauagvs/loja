<tr>
	<td><label>Produto:</label></td>
	<td><input class="form-control" type="text" name="nome" value="<?=$produto['nome']?>"></td> 
</tr>

<tr>
	<td><label>Preço:</label></td>
	<td><input class="form-control" type="text" name="preco" value="<?=$produto['preco']?>"></td>
</tr>

<tr>
	<td><label>Descrição:</label></td>
	<td><textarea class="form-control" type="text" name="descricao"><?=$produto['descricao']?></textarea></td>
</tr>

<tr>
	<td><label>Usado:</label></td>
	<td><input type="checkbox" <?=$usado?> name="usado"> Sim</td>
</tr>


<td><label>Categoria:</label></td>
    <td>
    	<select name="id_categoria" class="form-control">
            <?php foreach($categorias as $categoria) : 
                $select_categoria = $produto['id_categoria'] == $categoria['id'];
                $select = $select_categoria ? "selected='selected'" : "";
                ?>
                <option value="<?=$categoria['id']?>" <?=$select?>>
                        <?=$categoria['nome']?>
                </option>
            <?php endforeach ?>
        </select>				        
    </td>
</tr>