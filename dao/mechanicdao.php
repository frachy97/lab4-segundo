<?php
    namespace dao;

    use \Exception as Exception;
    use dao\Idao as IDAO;
    use model\Mechanic as Mechanic;    
    use dao\Connection as Connection;

    class MechanicDAO implements IDAO
    {
        private $connection;
        private $tableName = "mechanics";

        public function create($mechanic) {
            try {
                $query = "INSERT INTO ".$this->tableName." (id_mechanic, email, password) VALUES (:id_mechanic, :email, :password);";
                
                $parameters["id_mechanic"] = $mechanic->getId();
                $parameters["email"] = $mechanic->getEmail();
                $parameters["password"] = $mechanic->getPassword();
             
                $this->connection = Connection::getInstance();

                $this->connection->executeNonQuery($query, $parameters);
            }
            catch(Exception $ex) {
                throw $ex;
            }
        }

        public function retrieveAll() {
            try {
                $mechanicList = array();

                $query = "SELECT * FROM ".$this->tableName;

                $this->connection = Connection::getInstance();

                $resultSet = $this->connection->execute($query);
                
                foreach ($resultSet as $row) {                
                    $mechanic = new Mechanic($row["id_mechanic"], $row["email"], $row["password"]);
                    array_push($mechanicList, $mechanic);
                }

               return $mechanicList;
           }
           catch(Exception $ex) {
            throw $ex;
        }
    }

        public function retrieveById($id) {
            try {
                $mechanic = null;

                $query = "SELECT * FROM ".$this->tableName." WHERE id_mechanic = :id_mechanic";
                
                $parameters["id_mechanic"] = $id;
                
                $this->connection = Connection::getInstance();

                $resultSet = $this->connection->execute($query, $parameters);
                
                foreach ($resultSet as $row) {
                    $mechanic = new Mechanic($row["id_mechanic"], $row["email"], $row["password"]);
                    
                }
                            
                return $mechanic;
            }
            catch(Exception $ex) {
                throw $ex;
            }
        }
        public function retrieveByEmail($email) {
            try {
                $mechanic = null;

                $query = "SELECT * FROM ".$this->tableName." WHERE email = :email";
                
                $parameters["email"] = $email;
                
                $this->connection = Connection::getInstance();

                $resultSet = $this->connection->execute($query, $parameters);
                
                foreach ($resultSet as $row) {
                    $mechanic = new Mechanic($row["id_mechanic"], $row["email"], $row["password"]);
                    
                }
                return $mechanic;
            }
            catch(Exception $ex) {
                throw $ex;
            }
        }


      

        public function delete($id) {
            try {
                $query = "DELETE FROM ".$this->tableName." WHERE id_mechanic = :id_mechanic";
                $parameters["id_mechanic"] = $id;
                $this->connection = Connection::getInstance();
                $this->connection->executeNonQuery($query, $parameters);   
            }
            catch(Exception $ex) {
                throw $ex;
            }            
        }

        
    }

?>