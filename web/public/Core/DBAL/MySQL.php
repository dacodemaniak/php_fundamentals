<?php
/**
 * 
 * @author Adrar - Apr. 2020
 * @version 1.0.0
 *  Concrete MySQL Connection Class
 */
class MySQL {
    private $username;
    private $password;
    
    private $dbName;
    
    private $host;
    
    private $port = 3306;
    
    private $dbType = 'mysql';
    
    private $handler;
    
    /**
     * @param mixed $dbName
     */
    public function setDbName(string $dbName): self
    {
        $this->dbName = $dbName;
        
        return $this;
    }

    public function setUsername(string $username): self {
        $this->username = $username;
        
        return $this;
    }
    
    public function setPassword(string $password): self {
        $this->password = $password;
        
        return $this;
    }
    
    
    public function setHost(string $host): self {
        $this->host = $host;
        
        return $this;
    }
    
    public function connect() {
        $dsn = $this->dbType . ":host=" . $this->host . ";port=" . $this->port . ";dbname=" . $this->dbName;
        
        try {
            $this->handler = new \PDO($dsn, $this->username, $this->password);
            echo "Bienvenue dans la base MySQL";
        } catch(\PDOException $e) {
            echo "Error connecting to db : " . $e->getMessage();
            die();
        }
    }
    
    public function getHandler(): \PDO {
        return $this->handler;
    }
    
}

