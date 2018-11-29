<?php
    namespace dao;

    use \PDO as PDO;
    use \Exception as Exception;

    class Connection
    {
        private $pdo = null;
        private $pdoStatement = null;
        private static $instance = null;

        private function __construct() {
            try {
                $this->pdo = new PDO("mysql:host=".DB_HOST."; dbname=".DB_NAME, DB_USER, DB_PASS);
                $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            }
            catch(Exception $ex) {
                throw $ex;
            }
        }

        public static function getInstance() {
            if(self::$instance == null)
                self::$instance = new Connection();

            return self::$instance;
        }

        public function execute($query, $parameters = array()) {
            try {
                $this->prepare($query);
                
                foreach($parameters as $parameterName => $value) {
                    $this->pdoStatement->bindParam(":".$parameterName, $parameters[$parameterName]);
                }
                
                $this->pdoStatement->execute();

                return $this->pdoStatement->fetchAll();
            }
            catch(Exception $ex) {
                throw $ex;
            }
        }
        
        public function executeNonQuery($query, $parameters = array()) {
            try {
                $this->prepare($query);
                
                foreach($parameters as $parameterName => $value) {
                    $this->pdoStatement->bindParam(":".$parameterName, $parameters[$parameterName]);
                }
        
                $this->pdoStatement->execute();

                return $this->pdoStatement->rowCount();
            }
            catch(Exception $ex) {
                throw $ex;
            }                   
        }
        
        private function prepare($query) {
            try {
                $this->pdoStatement = $this->pdo->prepare($query);
            }
            catch(Exception $ex) {
                throw $ex;
            }
        }
    }
?>