<?php

class Banco{
	private $url;
	private $usuario;
	private $senha;
	private $database;
	private $con;

	public function __construct()
	{
		$this->url="localhost";
		$this->usuario="root";
		$this->senha="";
		$this->database="petnac";
		$this->con=new mysqli($this->url,$this->usuario,$this->senha,$this->database);
		$this->con->set_charset("utf8mb4");
	}
	public function executar($sql,$params=[],$types="")
	{
		$stmt=$this->con->prepare($sql);
		if (!$stmt) {
			return false;
		}
		if(!empty($params)){
			$stmt->bind_param($types,...$params);
		}
	}
}

?>