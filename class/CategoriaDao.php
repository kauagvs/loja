<?php  
	
	class CategoriaDao{

		private $conexao;
		
		function __construct($conexao){
			$this->conexao = $conexao;
		}

		function listar_categorias(){
			$categorias = array();
			$result = mysqli_query($this->conexao, "select * from categorias");
			foreach ($result as $array_categoria) {

				$categoria = new Categoria();
				$categoria->setId($array_categoria['id']);
				$categoria->setNome($array_categoria['nome']);

				array_push($categorias, $categoria);
			}
			return $categorias;
		}
	}
?>