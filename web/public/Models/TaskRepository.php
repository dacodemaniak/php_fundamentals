<?php
/**
* @name TaskRepository
* @author Adrar - May 2020
* @version 1.0.0
*   Dépôt des tâches de la base de données
*/

require_once(__DIR__ . "/../Core/Database/MySQLConnect.php");

class TaskRepository {
    /**
     * 
     * @var array $repository
     */
    private $repository = [
        [
            "libelle" => "Apprendre PHP",
            "dateCreation" => "05-05-2020",
            "dateDebut" => "05-05-2020",
            "dateFin" => "29-05-2020",
            "categorie" => "Personnel"
        ],
        [
            "libelle" => "Voir les concepts Objet",
            "dateCreation" => "05-05-2020",
            "dateDebut" => "07-05-2020",
            "dateFin" => "29-05-2020",
            "categorie" => "Personnel"
        ]
    ];
    
    
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
        while ($row = $PDOStatement->fetch()) {
            var_dump($row);
        }
        
        return $this->repository;
    }
    
    public function findById(int $id): array {
        return $this->repository[$id];
    }
}