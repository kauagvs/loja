<?php  

	function listar_cadastros($conexao){

		$produtos = [];
		$result =  mysqli_query($conexao, "select p.*, c.nome as nome_categoria from produtos as p join categorias as c on p.id_categoria = c.id");

		foreach ($result as $produto) {
			array_push($produtos, $produto);
		}
		return $produtos;
	}

	function adicionar_cadastro($conexao, $nome, $preco, $descricao, $id_categoria, $usado) {
		$query = "insert into produtos (nome, preco, descricao, id_categoria, usado) values ('{$nome}' , '{$preco}', '{$descricao}', '{$id_categoria}', {$usado})";
		return mysqli_query($conexao, $query);
	}

	function carregar_editar_cadastro($conexao, $id){
	    $query = "select * from produtos where id = {$id}";
	    $result = mysqli_query($conexao, $query);
	    return mysqli_fetch_assoc($result);
	}

	function editar_cadastro($conexao, $id, $nome, $preco, $descricao, $id_categoria, $usado){
		$query = "update produtos set nome='{$nome}', preco='{$preco}', descricao='{$descricao}', id_categoria='{$id_categoria}', usado='{$usado}' where id = '{$id}'";
		return mysqli_query($conexao, $query);
	}

	function deletar_cadastro($conexao, $id) {
	    $query = "delete from produtos where id = {$id}";
	    return mysqli_query($conexao, $query);
	}

?>