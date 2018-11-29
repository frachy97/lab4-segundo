<?php
namespace model;

class Mechanic
{
	private $id;
	private $email;
	private $password;


	function __construct($id, $email, $password)
	{
		$this->id= $id;
		$this->email = $email;
		$this->password = $password;
	
	}


	public function getEmail()
	{
		return $this->email;
	}

	public function getPassword()
	{
		return $this->password;
	}

	

	public function getId()
	{
		return $this->id;
	}
	
	public function setId($id)
	{
		$this->id=$id;
	}


	public function setEmail($email)
	{
		$this->email=$email;
	}

	public function setPassword($password)
	{
		$this->password=$password;
	}

	

}
?>