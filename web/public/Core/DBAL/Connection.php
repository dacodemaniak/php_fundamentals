<?php
require_once(__DIR__ . "/DbConnect.php");
require_once(__DIR__  . "/MySQL.php");
require_once(__DIR__ . "/PgSQL.php");

use Dotenv\Dotenv;

class Connection {
    private static $connection = null;
    
    private $instance;
    
    private function __construct() {
        echo "Constructeur privé de Connexion<br>";
        
        $dotenv = Dotenv::createImmutable(__DIR__ . "/../../");
        $dotenv->load();
        
        $driver = $_ENV["DB_DRIVER"];
        
        // Try to instanciate dynamcally a MySQL or PgSQL connection
        if ($driver === "MySQL") {
            $this->instance = new MySQL();
        } else {
            $this->instance = new PgSQL();
        }
    }
    
    public static function getInstance(): DbConnect  {

        if (self::$connection === null) {
            $connexion = new Connection();
            self::$connection = $connexion->get();
        }
        
        return self::$connection;
    }
    
    private function get(): DbConnect {
        return $this->instance;
    }
}

