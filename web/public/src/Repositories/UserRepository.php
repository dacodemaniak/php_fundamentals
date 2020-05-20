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
    
    public function findByUsernameAndPassword(User $user): ?User {
        // SELECT id, firstname, lastname, lastname, email FROM user WHERE username = 'jlaubert' AND password = 'jlaubert';
        $sqlQuery = "SELECT id, firstname, lastname, email FROM user WHERE username = :username AND password = :password;";
        
        // Récupération de l'instance de connexion à la base de données
        $db = Connection::getInstance()->getHandler();
        
        $statement = $db->prepare($sqlQuery);
        
        $resultSet = $statement->execute(
            [
                "username" => $user->getUsername(),
                "password" => $user->getPassword()
            ]
        );
        
        if (!$resultSet) {
            var_dump($db->errorInfo());
        } else {
            $row = $statement->fetch(\PDO::FETCH_ASSOC);
            // Récupérer les données venant de la base de données
            if ($row == true) {
                // Finaliser l'objet User
                $user->setId($row["id"]);
                $user->setFirstname($row["firstname"]);
                $user->setLastname($row["lastname"]);
                $user->setEmail($row["email"]);
                // @todo Créer un DTO pour ne retourner que les données acceptables de user
                return $user;
            } else {
                return null;
            }
        }
    }
    
    public function persist($model) {
        
        $this->model = $model;
        $this->create();
    }
    
    private function create() {
        
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