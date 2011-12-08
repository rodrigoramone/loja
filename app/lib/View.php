<?php
class View{
	
	public function load($file, $data = null){
		
		require_once("./app/views/header.php");
		require_once("./app/views/$file.php");
		require_once("./app/views/footer.php");
		
	}

}

