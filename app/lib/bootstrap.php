<?php
session_start();

function controllerload($classe){
	$arquivo = "./app/controller/$classe.php";
	
	if(file_exists($arquivo)){
		require_once($arquivo);
		return true;
	}
}

function modelload($classe){
	$arquivo = "./app/model/$classe.php";
	
	if(file_exists($arquivo)){
		require_once($arquivo);
		return true;
	}
}

function libload($classe){
	$arquivo = "./app/lib/$classe.php";
	
	if(file_exists($arquivo)){
		require_once($arquivo);
		return true;
	}
}

spl_autoload_register('libload');
spl_autoload_register('controllerload');
spl_autoload_register('modelload');

