<?php  

	require_once("conecta.php");

	function listar_cadastros($conexao){

		$produtos = array();
		$result =  mysqli_query($conexao, "select p.*, c.nome as nome_categoria from produtos as p join categorias as c on p.id_categoria = c.id");

		foreach ($result as $produto_array) {

			$categoria = new Categoria();
			$categoria->setNome($produto_array['nome_categoria']);
			$categoria = $categoria;

			$nome = $produto_array['nome'];
			$descricao = $produto_array['descricao'];
			$preco = $produto_array['preco'];
			$usado = $produto_array['usado'];

			$produto = new Produto($nome, $preco, $descricao, $categoria, $usado);
			$produto->setId($produto_array['id']);
			
			array_push($produtos, $produto);
		}
		return $produtos;
	}

	function adicionar_cadastro($conexao, Produto $produto) {
		$nome = mysqli_real_escape_string($conexao, $produto->getNome());
		$preco = mysqli_real_escape_string($conexao, $produto->getPreco());
		$descricao = mysqli_real_escape_string($conexao, $produto->getDescricao());

		$query = "insert into produtos (nome, preco, descricao, id_categoria, usado) values ('{$nome}' , '{$preco}', '{$descricao}', '{$produto->getCategoria()->getId()}', {$produto->getUsado()})";
		return mysqli_query($conexao, $query);
	}

	function carregar_editar_cadastro($conexao, $id){
		$query = "select * from produtos where id = {$id}";
		$result = mysqli_query($conexao, $query);
		$produto_array = mysqli_fetch_assoc($result);

		$categoria = new Categoria();
		$categoria->setId($produto_array['id_categoria']);

		$nome = $produto_array['nome'];
		$descricao = $produto_array['descricao'];
		$preco = $produto_array['preco'];
		$usado = $produto_array['usado'];

		$produto = new Produto($nome, $preco, $descricao, $categoria, $usado);
		$produto->setId($produto_array['id']);

		return $produto;
	}

	function editar_cadastro($conexao, Produto $produto){

		$nome = mysqli_real_escape_string($conexao, $produto->getNome());
		$preco = mysqli_real_escape_string($conexao, $produto->getPreco());
		$descricao = mysqli_real_escape_string($conexao, $produto->getDescricao());
		
		$query = "update produtos set nome='{$nome}', preco='{$preco}', descricao='{$descricao}', id_categoria='{$produto->getCategoria()->getId()}', usado='{$produto->getUsado()}' where id = '{$produto->getId()}'";
		return mysqli_query($conexao, $query);
	}

	function deletar_cadastro($conexao, $id) {
	    $query = "delete from produtos where id = {$id}";
	    return mysqli_query($conexao, $query);
	}

?>