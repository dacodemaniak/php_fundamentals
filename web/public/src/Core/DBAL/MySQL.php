<?php
/**
 * 
 * @author Adrar - Apr. 2020
 * @version 1.0.0
 *  Concrete MySQL Connection Class
 */
namespace Adrar\Core\DBAL;

use Adrar\Core\DBAL\DbConnect;


final class MySQL extends DbConnect {

    
    public function __construct() {
        parent::__construct(); // Appel explicite au constructeur parent
        $this->dbType = "mysql";
        
        // Déclenche la méthode de connexion
        $this->connect();
    }
    
    protected function connect() {
        $dsn = $this->dbType . ":host=" . $this->host . ";port=" . $this->port . ";dbname=" . $this->dbName;
        
        try {
            $this->handler = new \PDO($dsn, $this->username, $this->password);
            echo "Bienvenue dans la base MySQL";
        } catch(\PDOException $e) {
            echo "Error connecting to db : " . $e->getMessage();
            die();
        }
    }
}

