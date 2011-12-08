<?php
class Banco{
	
	public static $instancia;
	protected     $conexao;
	private       $driver = 'mysql';
	private       $host   = 'localhost' ;
	private       $usuario= 'root';
	private       $banco  = 'loja';
	private       $senha  = '123456';
	
		
	public static function instanciar() {

		if(!self::$instancia) {
			
			self::$instancia = new Banco;
			self::$instancia->conectar();
		
		}
		
		return self::$instancia;
	
	}
	
	protected function conectar() {
		
		$this->conexao = new PDO("{$this->driver}:host={$this->host};dbname={$this->banco}", $this->usuario, $this->senha);
		$this->conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	
	}
	
	public function consultar($sql, $dados = null) {

		$statement = $this->conexao->prepare($sql);
		$statement->execute($dados);
		return $statement->fetchAll(PDO::FETCH_ASSOC);
	
	}
	
	public function listar($tabela, $campos = '*', $onde = null, $filtro = null, $ordem = null, $limite = null) {

		$query = "SELECT $campos FROM `$tabela`";

		if(!empty($onde)) {
			$query .= " WHERE $onde";
		}

		if(!empty($filtro)) {
			$query .= " LIKE $filtro";
		}

		if(!empty($ordem)) {
			$query .= " ORDER BY $ordem";
		}

		if(!empty($limite)) {
			$query .= " LIMIT $limite";
		}

		return $this->consultar($query);
	}
	
	public function join($campos, $tabela, $on){
		$query = "SELECT ";
		
		foreach($campos as $cmp){
			$query .= $cmp . ',';
		}
		
		$query = rtrim($query,",") . " FROM ";
		
		foreach($tabela as $key => $tbl){
			$query .= $tbl . ' ' . $key . ' ';
		}
		
		foreach($on as $cond){
			$query .= $cond . '';
		}
		
		//echo $query;
	}
}