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

}

?>
