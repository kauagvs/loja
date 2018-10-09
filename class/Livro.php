<?php

abstract class Livro extends Produto
{

  private $isbn;

  public function getIsbn(){
    return $this->isbn;
  }

  public function setIsbn($isbn){
    $this->isbn = $isbn;
  }

  public function impostoProduto($valor = 0.650){
    return $this->getPreco() * $valor;
  }

}

?>
