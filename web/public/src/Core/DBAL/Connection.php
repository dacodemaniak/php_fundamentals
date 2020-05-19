<?php
/**
 * @name Connection
 * @author Adrar May 2020
 * @version 1.0.1
 * @namespace Adrar\Core\DBAL
 *  Singleton class that load RDBMS connection
 */

namespace Adrar\Core\DBAL; // PSR-4 : RootNameSpace\Folder\Folder

use Dotenv\Dotenv;

class Connection {
    private static $connection = null;
    
    private $instance;
    
    private function __construct() {
        echo "Constructeur privé de Connexion<br>";
        
        $dotenv = Dotenv::createImmutable(__DIR__ . "/../../../");
        $dotenv->load();
        
        $driver = $_ENV["DB_DRIVER"];
        
        // Try to instanciate dynamcally a MySQL or PgSQL connection
        if ($driver === "MySQL") {
            $this->instance = new MySQL();
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

