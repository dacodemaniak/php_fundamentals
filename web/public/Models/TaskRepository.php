<?php
/**
* @name TaskRepository
* @author Adrar - May 2020
* @version 1.0.0
*   Dépôt des tâches de la base de données
*/
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
        return $this->repository;
    }
    
    public function findById(int $id): array {
        return $this->repository[$id];
    }
}