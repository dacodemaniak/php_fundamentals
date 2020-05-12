<?php
/**
 * @name OneTaskController
 * @author Adrar - May 2020
 * @namespace \Controllers
 * @version 1.0.0
 *   Contrôleur pour l'affichage d'une tâche
 */

require(__DIR__ . "/../../Models/TaskRepository.php");
require(__DIR__ . "/../../Core/Controller/Controller.php");

class OneTaskController extends Controller {
    
    public function __construct() {
        parent::__construct();
        
        $taskRepository = new TaskRepository();
        
        $this->modelData = $taskRepository->findById($_GET["id"]);
        
    }
    
    /**
     * @Override
     * {@inheritDoc}
     * @see Controller::render()
     */
    public function render() {
        // Transmettre le modèle à la vue...
        $datas = $this; // Définit la variable utilisée dans la vue
        
        // Publier la vue
        include(__DIR__ . $this->viewPath);
    }
}