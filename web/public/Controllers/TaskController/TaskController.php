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
require_once(__DIR__ . "/../../Models/TaskRepository.php");
require_once(__DIR__ . "/../../Core/Controller/Controller.php");

class TaskController extends Controller {
    
    /**
     * 
     * @var TaskRepository
     */
    private $taskRepository = null;
    
    public function __construct() { // PHP Magic Method __
        parent::__construct(); // Explicitement appeler le constructeur de la classe parente
        
        $this->taskRepository = new TaskRepository(); // Injection de Dépendances (DI)
        
        
        
    }
    
    public function all() {
        $this->modelData = $this->taskRepository->findAll();
        echo "TaskController::all()";
    }
    
    public function byId() {
        $this->modelData = $this->taskRepository->findById($_GET["id"]);
        echo "TaskController::byId()";
    }
    
    public function getViewPath(): string {
        return __DIR__ . parent::getViewPath();    
    }
    
    /**
     * @Override
     * {@inheritDoc}
     * @see Controller::render()
     */
    public function render() {
        // Transmettre le modèle à la vue...
        $datas = $this; // Définit la variable utilisée dans la vue
        
        $this->strategy->render($this);
    }
}
