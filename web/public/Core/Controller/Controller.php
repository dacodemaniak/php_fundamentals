<?php
abstract class Controller {
    /**
     * 
     * @var mixed
     * 
     * Données issues des différents Repository
     */
    protected $modelData;
    
    /**
     * Chemin vers la vue correspondant au contrôleur courant
     * @var string $viewPath
     */
    protected $viewPath;
    
    public function __construct() {
        $className = strtolower(substr(get_class($this), 0, strlen(get_class($this))-10));
        
        $this->viewPath = "/Views/" . $className . ".view.php";
    }
    
    abstract public function render();
}

