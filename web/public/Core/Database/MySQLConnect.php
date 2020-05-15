<?php
/**
* @name MySQLConnect
* @author Adrar - May 2020
* @version 1.0.0
*   Etablit une connexion PDO vers un serveur MySQL
*/
class MySQLConnect {
    private $dbHost = "172.21.0.2"; // Adresse du serveur de base de données
    private $dbPort = 3306; // Port par défaut de MySQL Server
    private $dbUser = "root";
    private $dbPassword = "root";
    private $dbName = "php_repo";
    
    public function getConnection(): \PDO {
        $dsn = "mysql:host=" . $this->dbHost . ";port=" . $this->dbPort . ";dbname=" . $this->dbName; // Data Service Name
        // Expected output => mysql:host=127.0.0.1;port=3306;dbname=php_repo
        
        try {
            $pdo = new \PDO($dsn, $this->dbUser, $this->dbPassword);
            var_dump($pdo);
            return $pdo;
        } catch(\Exception $e) { // Callback
            die("Database connection failed : [" . $e->getCode() . "] : " . $e->getMessage());
        }
    }
}