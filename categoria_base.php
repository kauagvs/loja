<?php  

	require_once("conecta.php");

	function listar_categorias($conexao){
		$categorias = [];
		$result = mysqli_query($conexao, "select * from categorias");
		foreach ($result as $categoria) {
			array_push($categorias, $categoria);
		}
		return $categorias;
	}

?>