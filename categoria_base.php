<?php  

	require_once("conecta.php");
	require_once("class/Categoria.php");

	function listar_categorias($conexao){
		$categorias = array();
		$result = mysqli_query($conexao, "select * from categorias");
		foreach ($result as $array_categoria) {

			$categoria = new Categoria();
			$categoria->setId($array_categoria['id']);
			$categoria->setNome($array_categoria['nome']);

			array_push($categorias, $categoria);
		}
		return $categorias;
	}

?>