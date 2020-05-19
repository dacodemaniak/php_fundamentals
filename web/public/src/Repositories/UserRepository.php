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
    private $scheme = [];
    private $tableName;
    
    public function __construct() {
        $this->tableName = strtolower(User::class);
    }
    
    public function persist(User $user) {
        $this->user = $user;
        $this->scheme = $this->user->getScheme();
        if ($this->scheme["id"] === null) {
            $this->create();
        } else {
            $this->update();
        }
    }
    
    private function create() {
        $sql = "INSERT INTO " . $this->tableName . " (";
        foreach ($this->scheme as $property => $value) {
            $sql .= $property . ",";
        }
        
        // Ne pas oublier de supprimer la dernière virgule inutile
        $sql = substr($sql, 0, strlen($sql) - 1);
        
        $sql .= " ) VALUES (";
        
        foreach ($this->scheme as $property => $value) {
            $sql .= ":" .$property . ",";
        }
        
        // Ne pas oublier de supprimer la dernière virgule inutile
        $sql = substr($sql, 0, strlen($sql) - 1);
        
        // Terminer la requête
        $sql .= ");";
        
        // Map values to placeholders
        $mapping = [];
        
        foreach ($this->scheme as $property => $value) {
            $mapping[$property] = $value;
        }
        
        // Préparer la requête... et l'envoyer au serveur
        // Instancier la classe MySQL
        
        $db = new Adrar\Core\DBAL\MySQL();

        // Try to connect
        $db->connect();
            
        $statement = $db->getHandler()->prepare($sql); 
        if (!$statement->execute($mapping)) {
            echo "Erreur dans la requête préparée : " . $sql . "<br>";
            var_dump($mapping);
            echo $statement->errorInfo();
        }
        

        
    }
    
    private function update() {
        
    }
    
    public function delete(User $user) {
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

