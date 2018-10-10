<?php

class Ebook extends Livro
{

  private $waterMark;

  public function getWaterMark(){
    return $this->waterMark;
  }

  public function setWaterMark($waterMark){
    $this->waterMark = $waterMark;
  }

  public function atribuidoEm($params) {
    $this->setIsbn($params["isbn"]);
    $this->setWaterMark($params["water_mark"]);
}

}

?>
