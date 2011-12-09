<?php
class Livros{

	protected $banco;
	
	public function __construct(){
		
		$this->banco = Banco::instanciar();
		
	}
	
	public function listar(){
		
		return $this->banco->consultar("SELECT l . * , f . *
				                		FROM livros l
										INNER JOIN fotos f ON l.id = f.id_livro LIMIT 12");
	}
	
	public function buscar(){
	
		return $this->banco->consultar("SELECT l . * , f . *
										FROM livros l
										INNER JOIN fotos f ON l.id = f.id_livro AND titulo LIKE '%$_POST[search]%'");
	}
	
}