<?php  

	function listar_cadastros($conexao){

		$produtos = [];
		$result = mysqli_query($conexao, "select * from produtos");
		foreach ($result as $produto) {
			array_push($produtos, $produto);
		}
		return $produtos;
	}

	function s_adicionar_cadastro($conexao, $nome, $preco) {
		$query = "insert into produtos (nome, preco) values ('{$nome}' , '{$preco}')";
		return mysqli_query($conexao, $query);
	}

?>