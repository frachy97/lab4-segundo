<?php
    namespace dao;

    use \Exception as Exception;
    use dao\Idao as IDAO;
    use model\Service as Service;    
    use dao\Connection as Connection;

    class ServiceDAO implements IDAO
    {
        private $connection;
        private $tableName = "services";

    function __construct()
    {
    
    }


        public function create($service) {
            try {
                $query = "INSERT INTO ".$this->tableName." (id_service, client, brand, model, patent,description, price, state, msg) VALUES (:id_service, :client, :brand, :model, :patent, :description, :price, :state, :msg);";
                
                $parameters["id_service"] = $service->getId();
                $parameters["client"] = $service->getClient();
                $parameters["brand"] = $service->getBrand();
                $parameters["model"] = $service->getModel();
                $parameters["patent"] = $service->getPatent();
                $parameters["description"] = $service->getDescription();
                $parameters["price"] = $service->getPrice();
                $parameters["state"] = $service->getState();
                $parameters["msg"] = $service->getMsg();
                $this->connection = Connection::getInstance();

                $this->connection->executeNonQuery($query, $parameters);
            }
            catch(Exception $ex) {
                throw $ex;
            }
        }

        public function retrieveAll() {
            try {
                $serviceList = array();

                $query = "SELECT * FROM ".$this->tableName;

                $this->connection = Connection::getInstance();

                $resultSet = $this->connection->execute($query);
                
                foreach ($resultSet as $row) {                
                    $service = new Service($row["id_service"], $row["client"], $row["brand"], $row["model"], $row["patent"],$row["description"], $row["price"], $row["state"], $row["msg"]);
                    array_push($serviceList, $service);
                }

               return $serviceList;
           }
           catch(Exception $ex) {
            throw $ex;
        }
    }

        public function retrieveById($id) {
            try {
                $service = null;

                $query = "SELECT * FROM ".$this->tableName." WHERE id_service = :id_service";
                
                $parameters["id_service"] = $id;
                
                $this->connection = Connection::getInstance();

                $resultSet = $this->connection->execute($query, $parameters);
                
                foreach ($resultSet as $row) {
                    $service = new Service($row["id_service"], $row["client"], $row["brand"], $row["model"], $row["patent"],$row["description"], $row["price"], $row["state"], $row["msg"]);
                }
                            
                return $service;
            }
            catch(Exception $ex) {
                throw $ex;
            }
        }

      

        public function delete($id) {
            try {
                $query = "DELETE FROM ".$this->tableName." WHERE id_service = :id_service";
                $parameters["id_service"] = $id;
                $this->connection = Connection::getInstance();
                $this->connection->executeNonQuery($query, $parameters);   
            }
            catch(Exception $ex) {
                throw $ex;
            }            
        }


        public function update($service) {
            try {
                $query = "UPDATE ".$this->tableName." SET id_service = :id_service, client = :client, brand = :brand, model= :model, patent = :patent, description= :description, price= :price, state= :state, msg= :msg WHERE id_service = :id_service";
                $parameters["id_service"] = $service->getId();
                $parameters["client"] = $service->getClient();
                $parameters["brand"] = $service->getBrand();
                $parameters["model"] = $service->getModel();
                $parameters["patent"] = $service->getPatent();
                $parameters["description"] = $service->getDescription();
                $parameters["price"] = $service->getPrice();
                $parameters["state"] = $service->getState();
                $parameters["msg"] = $service->getMsg();

                $this->connection = Connection::getInstance();
                $this->connection->executeNonQuery($query, $parameters);   
            }
            catch(Exception $ex) {
                throw $ex;
            }
        }

        
    }

?>