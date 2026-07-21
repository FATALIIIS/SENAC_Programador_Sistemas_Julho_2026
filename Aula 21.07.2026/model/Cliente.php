<?php

class Cliente{
	private $cod_cli;
	private $login;
	private $cpf;
	private $data_nasci;
	private $senha;
	private $nome;
	private $endereco;
	private $telefone;

	public function setCodCli($codcli)
	{
		$this->cod_cli=$cod_cli;
	}
	public function getCodCli()	
	{
		return $this->cod_cli;
	}
	public function setLogin($login)
	{
		$this->login=$login;
	}
	public function getLogin()	
	{
		return $this->login;
	}
	public function setCpf($cpf)
	{
		$this->cpf=$cpf;
	}
	public function getCpf()	
	{
		return $this->cpf;
	}
	public function setDataNasci($data_nasci)
	{
		$this->data_nasci=$data_nasci;
	}
	public function getDataNasci()	
	{
		return $this->data_nasci;
	}
	public function setSenha($senha)
	{
		$this->senha=$senha;
	}
	public function getSenha()	
	{
		return $this->senha;
	}
	public function setNome($nome)
	{
		$this->nome=$nome;
	}
	public function getNome()	
	{
		return $this->nome;
	}
	public function setEndereco($endereco)
	{
		$this->endereco=$endereco;
	}
	public function getEndereco()	
	{
		return $this->endereco;
	}
	public function setTelefone($telefone)
	{
		$this->telefone=$telefone;
	}
	public function getTelefone()	
	{
		return $this->telefone;
	}
	public function criptografar()
	{
		$this->senha=password_hash($this->senha, PASSWORD_DEFAULT);
	}
	public function logar($cod_cli)
	{
		setcookie("cliente",$cod_cli,time()+172800);
	}
	public function deslogar()
	{
		setcookie("cliente","");
	}
}
?>