<?php
/**
* @name UserRepository
* @author Adrar - May 2020
* @version 1.0.0
* @namespace Adrar/Repositories
* @see Adrar\Repositories\IRepository
*   Assure les opération de CRUD sur l'entité User
*/
namespace Adrar\Repositories;

use Adrar\Entities\User;
use Adrar\Core\DBAL\Connection;

class UserRepository implements IRepository {
    /**
     * Instance de la classe User
     * @var Adrar\Entities\User
     */
    private $model;
    
    public function findAll(): array {
        return [];
    }
    
    public function findById(int $id) {
        
    }
    
    public function persist($model) {
        
        $this->model = $model;
        $this->create();
    }
    
    private function create() {
        echo $this->model;
        
        $sqlQuery = "INSERT INTO user (id, firstname, lastname, email, username, password) VALUES (?,?,?,?,?,?);";
        
        $db = Connection::getInstance()->getHandler();
        
        $statement = $db->prepare($sqlQuery);
        $result = $statement->execute([
            null,
            $this->model->getFirstname(),
            $this->model->getLastname(),
            $this->model->getEmail(),
            $this->model->getUsername(),
            $this->model->getPassword()
        ]);
        if (!$result) {
            echo "Bad query sent to the db server !";
            var_dump($db->errorInfo());
        } else {
            echo "Congrats, datas were kept";
        }
    }
    
    private function update() {
        
    }
}