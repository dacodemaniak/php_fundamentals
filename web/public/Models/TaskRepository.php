<?php
/**
* @name TaskRepository
* @author Adrar - May 2020
* @version 1.0.0
*   Dépôt des tâches de la base de données
*/

require_once(__DIR__ . "/../Core/Database/MySQLConnect.php");
require_once(__DIR__ . "/../Core/String/Converter/CaseConverter.php");

class TaskRepository {
    /**
     * 
     * @var array $repository
     */
    private $repository = [];
    
    
    /**
     * 
     * @return array
     */
    public function findAll(): array {
        $dbConnect = new MySQLConnect();
        $pdo = $dbConnect->getConnection();
        
        $requeteSQL = "SELECT id,libelle,date_creation,date_debut,date_fin,categorie FROM task;";
        $PDOStatement = $pdo->query($requeteSQL); // Resultset
        
        // Boucler sur le résultat
        while ($row = $PDOStatement->fetch(\PDO::FETCH_ASSOC)) {
            $task = [];
            foreach ($row as $colName => $value) {
                $string = new CaseConverter($colName);
                if ($colName == "date_creation" || $colName == "date_debut" || $colName == "date_fin") {
                    $date = \DateTime::createFromFormat("Y-m-d", $value);
                    $value = $date->format("d-m-Y");
                }
                $task[$string->toCamelCase()] = $value;
            }
            $this->repository[] = $task;
        }
        return $this->repository;
    }
    
    public function findById(int $id): array {
        $dbConnect = new MySQLConnect();
        $pdo = $dbConnect->getConnection();
        
        $requeteSQL = "SELECT id,libelle,date_creation,date_debut,date_fin,categorie FROM task WHERE id=" . $id . ";";
        
        $PDOStatement = $pdo->query($requeteSQL); // Resultset
        
        // Boucler sur le résultat
        while ($row = $PDOStatement->fetch(\PDO::FETCH_ASSOC)) {
            $task = [];
            foreach ($row as $colName => $value) {
                $string = new CaseConverter($colName);
                if ($colName == "date_creation" || $colName == "date_debut" || $colName == "date_fin") {
                    $date = \DateTime::createFromFormat("Y-m-d", $value);
                    $value = $date->format("d-m-Y");
                }
                $task[$string->toCamelCase()] = $value;
            }
            $this->repository[] = $task;
        }
        return $this->repository;
    }
}