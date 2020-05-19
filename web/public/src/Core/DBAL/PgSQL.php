<?php
/**
 * 
 * @author Adrar - Apr. 2020
 * @version 1.0.0
 *  Concrete MySQL Connection Class
 */
use Adrar\Core\DBAL\DbConnect;

final class PgSQL extends DbConnect {

    
    public function __construct() {
        parent::__construct(); // Appel explicite au constructeur parent
        $this->dbType = "pgsql";
        
        // Déclenche la méthode de connexion
        
    }
    
    protected function connect() {
        echo "Bienvenue dans la base de données PostgreSQL !";
        $this->handler = null;
    }
}

