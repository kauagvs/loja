<?php
	class ProdutoDao {

		private $conexao;

		function __construct($conexao){
			$this->conexao = $conexao;
		}


		function listar_cadastros(){

			$produtos = array();
			$result =  mysqli_query($this->conexao, "select p.*, c.nome as nome_categoria
			from produtos as p join categorias as c on p.id_categoria = c.id");

			foreach ($result as $produto_array) {

				$produto_id = $produto_array['id'];
				$tipo_produto = $produto_array['tipo_produto'];
				$nome_categoria = $produto_array['nome_categoria'];

				$factory_produto = new ProdutoFactory();
				$produto = $factory_produto->validar_tipo($tipo_produto, $produto_array);
				$produto->atribuidoEm($produto_array);

				$produto->setId($produto_id);
				$produto->getCategoria()->setNome($nome_categoria);

				array_push($produtos, $produto);
			}
			return $produtos;
		}

		function adicionar_cadastro(Produto $produto) {
			$nome = mysqli_real_escape_string($this->conexao, $produto->getNome());
			$preco = mysqli_real_escape_string($this->conexao, $produto->getPreco());
			$descricao = mysqli_real_escape_string($this->conexao, $produto->getDescricao());
			$tipo_produto = get_class($produto);

			$isbn = "";
			if ($produto->possuiIsbn()) {
				$isbn = $produto->getIsbn();
			}

			$impressao = "";
			if ($produto->possuiImpressao()) {
				$impressao = $produto->getImpressao();
			}

			$waterMark = "";
			if ($produto->possuiWaterMark()) {
				$waterMark = $produto->getWaterMark();
			}

			$query = "insert into produtos (nome, preco, descricao, id_categoria, usado, isbn, tipo_produto, taxa_impressao, water_mark) values ('{$nome}' , '{$preco}', '{$descricao}', '{$produto->getCategoria()->getId()}', '{$produto->getUsado()}', '{$isbn}', '{$tipo_produto}', '{$impressao}', '{$waterMark}')";
			return mysqli_query($this->conexao, $query);
		}

		function carregar_editar_cadastro($id){
			$query = "select * from produtos where id = {$id}";
			$result = mysqli_query($this->conexao, $query);
			$produto_array = mysqli_fetch_assoc($result);


			$produto_id = $produto_array['id'];
			$tipo_produto = $produto_array['tipo_produto'];
			$nome_categoria = $produto_array['nome_categoria'];

			$factory_produto = new ProdutoFactory();
			$produto = $factory_produto->validar_tipo($tipo_produto, $produto_array);
			$produto->atribuidoEm($produto_array);

			$produto->setId($produto_id);
			$produto->getCategoria()->setNome($nome_categoria);

			return $produto;
		}

		function editar_cadastro(Produto $produto){

			$nome = mysqli_real_escape_string($this->conexao, $produto->getNome());
			$preco = mysqli_real_escape_string($this->conexao, $produto->getPreco());
			$descricao = mysqli_real_escape_string($this->conexao, $produto->getDescricao());
			$tipo_produto = get_class($produto);

			$isbn = "";
			if ($produto->possuiIsbn()) {
				$isbn = $produto->getIsbn();
			}

			$query = "update produtos set nome='{$nome}', preco='{$preco}', descricao='{$descricao}', id_categoria='{$produto->getCategoria()->getId()}', usado='{$produto->getUsado()}', isbn='{$isbn}', tipo_produto='{$tipo_produto}' where id = '{$produto->getId()}'";
			return mysqli_query($this->conexao, $query);
		}

		function deletar_cadastro($id) {
		    $query = "delete from produtos where id = {$id}";
		    return mysqli_query($this->conexao, $query);
		}
	}
?>
