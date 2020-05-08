<?php
/**
 * @name OneTaskController
 * @author Adrar - May 2020
 * @namespace \Controllers
 * @version 1.0.0
 *   Contrôleur pour l'affichage d'une tâche
 */

require(__DIR__ . "/../../Models/TaskRepository.php");

class OneTaskController {
    /**
     *  Données du modèle à transmettre à la vue (ou à utiliser dans la vue)
     * @var array $modelData
     */
    public $modelData;
    
    public function __construct() {
        $taskRepository = new TaskRepository();
        
        $this->modelData = $taskRepository->findById($_GET["id"]);
        
        
        // Transmettre le modèle à la vue...
        $datas = $this; // Définit la variable utilisée dans la vue
        
        // Publier la vue
        include(__DIR__ . "/Views/onetask.view.php");
    }
}