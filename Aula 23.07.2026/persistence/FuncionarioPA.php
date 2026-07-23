<?php require_once 'Banco.php';

class FuncionarioPA{
	private $con;

	public function __construct()
	{
		$this->con=new Banco();
	}
	public function logar($login,$senha)
	{
		$sql="SELECT matricula,login,senha,nivel FROM funcionario WHERE login=?";
		$consultar=$this->con->consultar($sql,[$login],'s');
		if (!$consultar) {
			return false;
		}else{
			$linha=$consultar->fetch_assoc();
			if (password_verify($senha,$linha['senha'])){
				return [$linha['matricula'],$linha['nivel']];
			}else{
				return false;
			}
		}
	}
}
?>