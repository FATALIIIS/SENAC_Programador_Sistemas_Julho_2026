<?php require_once 'Banco.php';

class ClientePA{
	private $con;

	public function __construct()
	{
		$this->con=new Banco();
	}
	public function cadastrar($cliente)
	{
		$sql="INSERT INTO cliente(login,cpf,data_nasci,senha,nome,endereco,telefone) VALUES(?,?,?,?,?,?,?)";
		$campos=[
			$cliente->getLogin(),
			$cliente->getCpf(),
			$cliente->getDataNasci(),
			$cliente->getSenha(),
			$cliente->getNome(),
			$cliente->getEndereco(),
			$cliente->getTelefone(),
		];
		$resposta=$this->con->executar($sql,$campos,"sisssss");
		$this->con->desconectar();
		return $resposta;
	}
	public function verificar($campo,$valor)
	{
		$sql="SELECT $campo FROM cliente WHERE $campo=?";
		$consulta=$this->con->consultar($sql,[$valor],"s");
		if (!$consulta) {
			return true;
		}else{
			return false;
		}
	}
}	
?>