<?php 
namespace controllers;

use model\Service as M_Service;

use dao\ServiceDao as ServiceDAO;
use controllers\MechanicController as MechanicController;


class ServiceController {

	private $dao;
	private $mechanicController;

	public function __construct() {
		$this->dao = new ServiceDAO();
		$this->mechanicController = new MechanicController();

		
	}

	public function addService($client, $brand, $model, $patent, $description,$price) {
	

		$m_service = new M_Service(null,$client, $brand, $model, $patent, $description,$price);
		
		$this->dao->create($m_service);

		$serviceArray = $this->dao->retrieveAll();
		include_once(VIEWS_ROOT. '/services.php');

	}

	public function getAll() {
	
		return $this->dao->retrieveAll(); 
	}



	public function deleteCategory($id) {

		$this->dao->delete($id);
		$this->getAll();
	}


	public function getService($patent, $client) {
		
		$array = $this->dao->retrieveAll();
		$service =null;	

		foreach ($array as $key => $value) {
			if($client == $value->getClient())
			{

				if($patent == $value->getPatent())
				{
					
					$service= $value;
					include VIEWS_ROOT. '/client.php';

				}
			}
		}

		if($service == null)
		{
			print_r("Datos incorrectos intente nuevamente.");
			include_once(VIEWS_ROOT. '/client-access.php');
		}
		

	}


	public function index()
	{
		
		if(!$this->mechanicController->checkSession()){
			include_once(VIEWS_ROOT. '/login.php');
		}else{
			$serviceArray = $this->dao->retrieveAll();
			include_once(VIEWS_ROOT. '/services.php');
		}
	}

	public function add()
	{
		include_once(VIEWS_ROOT. '/add-new-service.php');
	}


	public function sendMsg($id, $msg)
	{

		$service=$this->dao->retrieveById($id);
		
		$service->setMsg($msg);
		
		$this->dao->update($service);
		$serviceArray = $this->dao->retrieveAll();
		include_once(VIEWS_ROOT. '/services.php');

	}

	public function changeState($id, $state)
	{
		$service=$this->dao->retrieveById($id);
		$service->setState($state);
		$this->dao->update($service);
		$serviceArray = $this->dao->retrieveAll();
		include_once(VIEWS_ROOT. '/services.php');

	}
}
?>
