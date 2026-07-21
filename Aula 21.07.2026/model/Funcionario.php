<?php 

class Funcionario{

	private $matricula;
	private $nome;
	private $login;
	private $senha;
	private $nivel;

	public function setMatricula($matricula)
	{
		$this->matricula=$matricula;
	}
	public function getMatricula()
	{
		return $this->matricula;
	}
	public function setNome($nome)
	{
		$this->nome=$nome;
	}
	public function getNome()
	{
		return $this->nome;
	}
	public function setLogin($login)
	{
		$this->login=$login;
	}
	public function getLogin()
	{
		return $this->login;
	}
	public function setSenha($senha)
	{
		$this->senha=$senha;
	}
	public function getSenha()
	{
		return $this->senha;
	}
	public function setNivel($nivel)
	{
		$this->nivel=$nivel;
	}
	public function getNivel()
	{
		return $this->nivel;
	}
	public function criptografar()
	{
		$this->senha=password_hash($this->senha, PASSWORD_DEFAULT);
	}
	public function logar($matricula,$nivel)
	{
		setcookie("funcionario",$matricula,time()+172800);
		setcookie("nivel",$nivel,time()+172800);
	}
	public static function deslogar()
	{
		setcookie("funcionario","");
		setcookie("nivel","");
	}
}