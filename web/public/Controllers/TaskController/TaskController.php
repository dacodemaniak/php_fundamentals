<?php
/**
* @name TaskController
* @author Adrar - May 2020
* @namespace \Controllers
* @version 1.0.0
*   Contrôleur pour l'affichage des tâches
*   - Charger le modèle (Ici la liste des tâches)
*   - Transmettre les données du modèle à la vue (Template)
*   - Envoyer la vue "compilée" vers le navigateur
*/

// __DIR__ constantes PHP à l'exécution => Chemin complet vers le fichier courant (i.e TaskController.php)
require(__DIR__ . "/../../Models/TaskRepository.php");

class TaskController {
    /**
     *  Données du modèle à transmettre à la vue (ou à utiliser dans la vue)
     * @var array $modelData
     */
    public $modelData;
    
    public function __construct() { // PHP Magic Method __
        $taskRepository = new TaskRepository();
        
        $this->modelData = $taskRepository->findAll();
        
        // Transmettre le modèle à la vue...
        $modelData = $this->modelData; // Définit la variable utilisée dans la vue
        
        // Envoyer la vue vers le navigateur
        include(__DIR__ . "/Views/task.view.php");
    }
}
