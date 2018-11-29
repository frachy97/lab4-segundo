<?php 
namespace controllers;


use controllers\MechanicController as MechanicController;
use controllers\ServiceController as ServiceController;


/**
 *
 */
class HomeController
{
     private $mechanicController;
     private $serviceController;

     function __construct() {

          $this->mechanicController = new MechanicController();
          $this->serviceController = new ServiceController();
     }

     /**
      * Inicio por defecto del sitio.
      *
      * @method index
      * @param $_user, $_pass
      *
      */

    public function index(){
     
      include_once VIEWS_ROOT. '/client-access.php';
    }


     public function login($email= null, $password= null) {
      

        $showHome = false; 

        
          if($user = $this->mechanicController->checkSession()) {
               $showHome = true;
          } else {

               if(isset($email)) {

                   
                    if($user = $this->mechanicController->login($email, $password)) {
                         $showHome = true;

                    } else {
                         $alert = "Datos incorrectos, vuelva a intentar.";
                    }
               }
          }
          

          if($showHome){
                  $serviceArray= $this->serviceController->getAll();
                  include_once VIEWS_ROOT. '/services.php';
                
          }else{
            //vista login
            print_r($alert);
               include_once VIEWS_ROOT. '/login.php';
          }



          

     }

    







}


?>