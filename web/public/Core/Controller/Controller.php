<?php
require_once(__DIR__ . "/RenderInterface.php");
require_once(__DIR__ . "/Strategies/HTMLStrategy.php");

abstract class Controller {
    /**
     * 
     * @var mixed
     * 
     * Données issues des différents Repository
     */
    protected $modelData;
    
    /**
     * Stratégie de rendu à utiliser dans les contrôleurs
     * @var RenderInterface
     */
    protected $strategy;
    
    /**
     * Chemin vers la vue correspondant au contrôleur courant
     * @var string $viewPath
     */
    protected $viewPath;
    
    public function __construct() {
        $className = strtolower(substr(get_class($this), 0, strlen(get_class($this))-10));
        
        // Default : HTMLStrategy needed
        $this->strategy = new HTMLStrategy();
        
        $this->viewPath = "/Views/" . $className . ".view.php";
    }
    
    public function setStrategy(RenderInterface $strategy) {
        $this->strategy = $strategy;    
    }
    
    abstract public function render();
}

