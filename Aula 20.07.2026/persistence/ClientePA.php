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
	public function logar($login,$senha)
	{
		$sql="SELECT cod_cli,login,senha FROM cliente WHERE login=?";
		$consulta=$this->con->consultar($sql,[$login],'s');
		if(!$consulta){
			return false;
		}else{
			$linha=$consulta->fetch_assoc();
			if (password_verify($senha, $linha['senha'])) {
				return $linha['cod_cli'];
			}else{
				return false;
			}
		}
	}
}	
?>