<?php

/* include("../config.php"); */
class User{
	private $id;
	private $dni;
	private $name;
	private $email;
	private $birthdate;
	private $sex;
	private $db;
	
	public function __construct() {
		$this->db = Database::connect();
	}
	
	function getId() {
		return $this->id;
	}

	function getDni() {
		return $this->dni;
	}
	
	function getName() {
		return $this->name;
	}

	function getEmail() {
		return $this->email;
	}
	
	function getBirthdate() {
		return $this->birthdate;
	}

	function getSex() {
		return $this->sex;
	}

	function setId($id) {
		$this->id = $id;
	}

	function setDni($dni) {
		$this->dni = $this->db->real_escape_string($dni);
	}

	function setName($name) {
		$this->name = $this->db->real_escape_string($name);
	}
	
  function setEmail($email) {
		$this->email = $this->db->real_escape_string($email);
	}

	function setBirthdate($birthdate) {
		$this->birthdate = $this->db->real_escape_string($birthdate);
	}
	
	function setSex($sex) {
		$this->sex = $this->db->real_escape_string($sex);
	}

	public function getAll(){
		$users = $this->db->query("SELECT * FROM users ORDER BY id DESC;");
		return $users;
	}
	
	public function getOne(){
		$user = $this->db->query("SELECT * FROM users WHERE id={$this->getId()}");
		return $user->fetch_object();
	}
	
	public function save(){
		$sql = "INSERT INTO users VALUES(NULL, '{$this->getDni()}','{$this->getName()}', '{$this->getBirthdate()}', '{$this->getEmail()}', '{$this->getSex()}');";
		$save = $this->db->query($sql);
		
		$result = false;
		if($save){
			$result = true;
		}
		return $result;
	}

  public function update(){
    $sql = "UPDATE users SET dni='{$this->getDni()}', name='{$this->getName()}', birthdate='{$this->getBirthdate()}', email='{$this->getEmail()}', sex='{$this->getSex()}' WHERE id={$this->getId()};";
    $update = $this->db->query($sql);
    
    $result = false;
    if($update){
      $result = true;
    }
    return $result;
  }

  public function delete(){
    $sql = "DELETE FROM users WHERE id={$this->getId()};";
    $delete = $this->db->query($sql);
    
    $result = false;
    if($delete){
      $result = true;
    }
    return $result;
  }
	
	
}