<?php 

class Cadastro {
	private $nome;
	private $senha;
	private $email;

	public function getNome():string{
		return $this->nome;
	}

	public function setNome($nome){
		$this->nome = $nome;
	}

	public function getEmail():string{
		return $this->email;
	}

	public function setEmail($email){
		$this->email = $email;
	}

	public function getSenha():string{
		return $this->senha;
	}

	public function setSenha($senha){
		$this->senha = $senha;
	}

	public function __toString(){
	return json_encode(array(
		"nome"=>$this->getNome(),
		"email"=>$this->getEmail(),
		"Senha"=>$this->getSenha(),
	));
	}
}



?>