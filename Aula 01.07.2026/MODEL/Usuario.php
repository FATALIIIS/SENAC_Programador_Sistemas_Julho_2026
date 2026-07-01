<?php

class Usuario{

	private $nome;
	private $data_nasc;
	private $cor_texto;
	private $cor_fundo;

	public function setNome($nome)
	{
		$this->nome=$nome;
	}
	public function getNome()
	{
		return $this->nome;
	}

	public function setDataNasc($data_nasc)
	{
		$this->data_nasc=$data_nasc;
	}
	public function getDataNasc()
	{
		return $this->data_nasc;
	}

	public function setCorTexto($cor_texto)
	{
		$this->cor_texto=$cor_texto;
	}
	public function getCorTexto()
	{
		return $this->cor_texto;
	}

	public function setCorFundo($cor_fundo)
	{
		$this->cor_fundo=$cor_fundo;
	}
	public function getCorFundo()
	{
		return $this->cor_fundo;
	}
}
?>