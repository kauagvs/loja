<?php

class LivroFisico extends Livro
{

  private $impressao;

  public function getImpressao(){
    return $this->impressao;
  }

  public function setImpressao($impressao){
    $this->impressao = $impressao;
  }

  public function atribuidoEm($params) {
    $this->setIsbn($params["isbn"]);
    $this->setImpressao($params["taxa_impressao"]);
  }

}

?>
