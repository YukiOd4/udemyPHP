<?php 

class Usuario {

	private $idusuario;
	private $deslogin;
	private $dessenha;
	private $dtcadastro;

	public function getIdusuario(){
		return $this->idusuario;
	}

	public function setIdusuario($id){
		$this->idusuario = $id;
	}

	public function getDeslogin(){
		return $this->deslogin;
	}

	public function setDeslogin($login){
		$this->deslogin = $login;
	}

	public function getDessenha(){
		return $this->dessenha;
	}

	public function setDessenha($senha){
		$this->dessenha = $senha;
	}

	public function getDtcadastro(){
		return $this->dtcadastro;
	}

	public function setDtcadastro($date){
		$this->dtcadastro = $date;
	}

	public function loadById($id) {

		$sql = new Sql();

		$results = $sql->select("SELECT * FROM tb_usuarios WHERE idusuario = :ID", array(":ID"=>$id
		));

		if (count($results) > 0) {

			$this->setData($results[0]);
		}
	}

	public static function getList() {
		$sql = new Sql();

		return $sql->select("SELECT * FROM tb_usuarios ORDER BY deslogin;");
	}

	public static function search($Login) {
		$sql = new Sql();

		return $sql->select("SELECT * FROM tb_usuarios WHERE deslogin LIKE :SEARCH ORDER BY deslogin", array(':SEARCH'=>"%".$Login."%"));
	}

	public function login($Login, $password){
		$sql = new Sql();

		$results = $sql->select("SELECT * FROM tb_usuarios WHERE deslogin = :LOGIN AND dessenha = :PASSWORD", array(":LOGIN"=>$Login, ":PASSWORD"=>$password
		));

		if (count($results) > 0) {

			$this->setData($results[0]);

		}else {
			throw new Exception("Login e/ou Senha Invalidos!", 1);
			
		}
	}

	public function SetData($data){
		$this->setIdusuario($data['idusuario']);
		$this->setDeslogin($data['deslogin']);
		$this->setDessenha($data['dessenha']);
		$this->setDtcadastro(new DateTime($data['dtcadastro']));
	}

	public function insert(){
		$sql = new Sql();
		$results = $sql->select("CALL sp_usuarios_insert(:LOGIN, :PASSWORD)", array(":LOGIN"=>$this->getDeslogin(),":PASSWORD"=>$this->getDessenha()));

		if (count($results) > 0) {
			$this->setData($results[0]);
		}
	}

	public function update($Login, $password) {

		$this->setDeslogin($Login);
		$this->setDessenha($password);

		$sql = new Sql();

		$sql->run("UPDATE tb_usuarios SET deslogin = :LOGIN, dessenha = :PASSWORD WHERE idusuario = :ID",array(':LOGIN'=>$this->getDeslogin(),':PASSWORD'=>$this->getDessenha(),':ID'=>$this->getIdusuario()));
	}

	public function delete() {
		$sql = new Sql();

		$sql->run("DELETE FROM tb_usuarios WHERE idusuario = :ID", array(':ID'=>$this->getIdusuario()));

		$this->setIdusuario(0);
		$this->setDeslogin("");
		$this->setDessenha("");
		$this->setDtcadastro(new DateTime());
	}

	public function __contruct($Login = "", $password = "") {
		$this->setDeslogin($Login);
		$this->setDessenha($password);
	}

	public function __toString() {
		return json_encode(array(
			"idusuario"=>$this->getIdusuario(),
			"deslogin"=>$this->getDeslogin(),
			"dessenha"=>$this->getDessenha(),
			"dtcadastro"=>$this->getDtcadastro()->format("d-m-Y H:i:s")
		));
	}

}

?>