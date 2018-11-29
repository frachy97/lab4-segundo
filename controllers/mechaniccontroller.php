<?php 
namespace controllers;

use model\Mechanic as M_Mechanic;

use dao\MechanicDAO as DB_MechanicDAO;
use controllers\HomeController as HomeController;


class MechanicController {

	private $dao;


	public function __construct() {
		$this->dao = new DB_MechanicDAO();
	}



	public function getAll(){
		return $this->dao->retrieveAll();
		
		
	}

	
	public function login($email, $password) {

		$mechanic =  $this->dao->retrieveByEmail($email);

		if($mechanic) {
			if($mechanic->getPassword() == $password) {
				$this->setSession($mechanic);
				return $mechanic;
			}
		}
		return false;
	}


  public function checkSession() {
  	if (session_status() == PHP_SESSION_NONE)
  		session_start();

  	if(isset($_SESSION['userLogedIn'])) {

  		$mechanic = $this->dao->retrieveByEmail($_SESSION['userLogedIn']->getEmail());

  		if($mechanic->getPassword() == $_SESSION['userLogedIn']->getPassword())
  			return $mechanic;

  	} else {
  		return false;
  	}
  }


  public function setSession($mechanic) {
  	$_SESSION['userLogedIn'] = $mechanic;
  }



  public function logout() {

  	if (session_status() == PHP_SESSION_NONE)
  		session_start();

  		unset($_SESSION['userLogedIn']);
  		include_once(VIEWS_ROOT. '/login.php');

 
  }

}




?>
