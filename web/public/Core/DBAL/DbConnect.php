<?php
use Dotenv\Dotenv;

abstract class DbConnect {
    protected $username;
    protected $password;
    
    protected $dbName;
    
    protected $host;
    
    protected $port;
    
    protected $dbType;
    
    protected $handler;
    
    public function __construct() {
        $dotenv = Dotenv::createImmutable(__DIR__ . "/../../");
        $dotenv->load();
        
        $this->username = $_ENV["DB_USER"];
        $this->password = $_ENV["DB_PASSWORD"];
        $this->host = $_ENV["DB_HOST"];
        $this->port = $_ENV["DB_PORT"];
        $this->dbName = $_ENV["DB_NAME"];
    }
    
    abstract protected function connect();
    
    public function getHandler(): \PDO {
        return $this->handler;
    }
}

