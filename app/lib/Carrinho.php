<?php
class Carrinho{

	protected $banco;
	
	public function __construct(){
		
		$this->banco = Banco::instanciar();
		
	}
	
	public function adicionarProduto($produto){
		
		if(isset($_SESSION['compras'][$produto])){
			
			$_SESSION['compras'][$produto] += 1;
			
		} else {
		
			$_SESSION['compras'][$produto] = 1;
			
		}
		
	}

}