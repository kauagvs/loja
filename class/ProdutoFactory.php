<?php

class ProdutoFactory {

  private $classes = array("Ebook", "LivroFisico");

  public function validar_tipo($tipo_produto, $params) {
    $nome = $params['nome'];
    $preco = $params['preco'];
    $descricao = $params['descricao'];
    $categoria = new Categoria();
    $usado = $params['usado'];

    if (in_array($tipo_produto, $this->classes)) {
        return new $tipo_produto($nome, $preco, $descricao, $categoria, $usado);
    }

    return new LivroFisico($nome, $preco, $descricao, $categoria, $usado);
  }
}

?>
