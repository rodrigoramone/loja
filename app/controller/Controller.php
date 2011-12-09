<?php
class Controller{
	
	private $view;
	private $livros;
	private $compras;
	
	function __construct(){
	
		$this->view = new View;
		$this->livros = new Livros;
		$this->compras = new Compras;		
		
		if(isset($_GET['module']) AND isset($_GET['action'])){
			
			$module = $_GET['module'];
			$action = $_GET['action'];
			
			if(isset($_GET['id'])){
				$data = $this->$module->$action($_GET['id']);
			} else {
				$data = $this->$module->$action();
			}
		
			$this->view->load("$module/$action", $data);
			
		} else {
			
			$data = $this->livros->listar();
			$this->view->load('home', $data);
		
		} 
		
	}
	
}