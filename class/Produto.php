<?php  

	class Produto {
		private $id;
		private $nome;
		private $preco;
		private $descricao;
		public $categoria;
		private $usado;

		public function __construct($nome, $preco, $descricao, Categoria $categoria, $usado){ 
			$this->nome = $nome;
			$this->preco = $preco;
			$this->descricao = $descricao;
			$this->categoria = $categoria;
			$this->usado = $usado;
		}


		public function getId(){
			return $this->id;
		}

		public function setId($id){
			$this->id = $id;
		}

		public function getNome(){
			return $this->nome;
		}

		public function getPreco(){
			return $this->preco;
		}

		public function getDescricao(){
			return $this->descricao;
		}

		public function getCategoria(){
			return $this->categoria;
		}

		public function getUsado(){
			return $this->usado;
		}

		public function setUsado($usado){
			$this->usado = $usado;
		}

		public function descontoProduto($valor = 0.1){
			if ($valor > 0 && $valor <= 0.5) {
				return $this->preco - ($this->preco * $valor);
			}
			return $this->preco;
		}

	    function __toString() {
	        return $this->nome.": R$ ".$this->preco;
	    }

	}

?>