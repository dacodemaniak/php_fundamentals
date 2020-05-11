<?php
/**
 * 
 * @author Adrar - Apr. 2020
 * @version 1.0.0
 *  Concrete MySQL Connection Class
 */
require_once(__DIR__ . "/DbConnect.php");

final class PgSQL extends DbConnect {

    
    public function __construct() {
        parent::__construct(); // Appel explicite au constructeur parent
        $this->dbType = "pgsql";
    }
    
    public function connect() {
        echo "Bienvenue dans la base de données PostgreSQL !";
    }
}

