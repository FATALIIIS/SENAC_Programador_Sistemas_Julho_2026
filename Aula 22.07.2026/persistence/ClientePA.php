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
		$resposta=$this->con->executar($sql,$campos,"sssssss");
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
	public function listar($limite,$offset)
	{
		$sql="SELECT * FROM cliente ORDER BY cod_cli LIMIT ? OFFSET ?";
		$consulta=$this->con->consultar($sql,[$limite,$offset],'ii');
		$this->con->desconectar();
		return $consulta;
	}
	public function contar()
	{
		$sql="SELECT COUNT(cod_cli) AS 'total' FROM cliente";
		$consulta=$this->con->consultar($sql,[],'');
		$linha=$consulta->fetch_assoc();
		return $linha['total'];
	}
	public function buscar($termo,$tipo)
	{
		if ($tipo=="data_nasci"){
			$data_ame=DateTime::createFromFormat('d/m/Y',$termo);
			if(!$data_ame){
				return false;
			}else{
				$sql="SELECT * FROM cliente WHERE data_nasci like ?";
				$consulta=$this->con->consultar($sql,[$data_ame->format('Y-m-d')],'s');
				$this->con->descontectar();
				return $consulta;
			}
		}else{
			$sql="SELECT * FROM cliente WHERE $tipo LIKE ?";
			$consulta=$this->con->consultar($sql,[$termo],s);
			$this->con->desconectar();
			return $consulta;
		}
	}
}	
?>