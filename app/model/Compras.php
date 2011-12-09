<?php
class Compras{
	
	protected $banco;
	protected $carrinho;
	
	public function __construct(){
		
		$this->carrinho = new Carrinho;
	
	}
	
	public function adicionar(){
		
		$this->carrinho->adicionarProduto($_GET['id']);
		
	}
	
}