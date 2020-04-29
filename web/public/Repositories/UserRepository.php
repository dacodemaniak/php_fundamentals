<?php
/**
 * 
 * @author jlaubert
 * @version 1.0.0
 * 
 *  CRUD Operations for User entity
 */
require_once(__DIR__ . "/../models/User.php");

class UserRepository {
    private $user;
    
    public function __construct(User $user) {
        $this->user = $user;
    }
    
    public function create() {
        $sql = "INSERT INTO user (";
        foreach ($this->user as $property => $value) {
            $sql .= $property . ",";
        }
        
        // Ne pas oublier de supprimer la dernière virgule inutile
        $sql = substr($sql, 0, strlen($sql) - 1);
        
        $sql .= " ) VALUES (";
        
        foreach ($this->user as $property => $value) {
            $sql .= ":" .$property . ",";
        }
        
        // Ne pas oublier de supprimer la dernière virgule inutile
        $sql = substr($sql, 0, strlen($sql) - 1);
        
        // Terminer la requête
        $sql .= ");";
        
        // Map values to placeholders
        $mapping = [];
        
        foreach ($this->user as $property => $value) {
            $mapping[$property] = $value;
        }
        
        // Préparer la requête... et l'envoyer au serveur
        // Instancier la classe MySQL
        $db = new MySQL();
        $db
            ->setDbName("myproject-repo")
            ->setUsername("root")
            ->setPassword("root")
            ->setHost("172.21.0.2");
            // Try to connect
            $db->connect();
            
        $statement = $db->getHandler()->prepare($sql);
        $statement->execute($mapping);
    }
    
    public function update() {
        
    }
    
    public function delete() {
        // DELETE FROM user WHERE id = :id;    
    }
    
    public function findById() {
        
    }
    
    public function findAll() {
        
    }
    
    public function __destruct() {
        echo "Adios my Repository";
    }
}

