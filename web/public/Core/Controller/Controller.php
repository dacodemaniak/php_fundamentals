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
     * 
     * @var string
     */
    protected $rootViewName = "";
    
    public function __construct() {
        
        // Default : HTMLStrategy needed
        $this->strategy = new HTMLStrategy();
    }
    
    public function setStrategy(RenderInterface $strategy) {
        $this->strategy = $strategy;    
    }
    
    public function __get(string $propertyName) {
        return $this->{$propertyName};
    }
    
    public function getViewPath(): string {
        if ($this->rootViewName == "") {
            $this->rootViewName = strtolower(substr(get_class($this), 0, strlen(get_class($this))-10));
        }
        
        $viewType = $this->strategy instanceof HTMLStrategy ? "view" : "json";
        
        return "/Views/" . $this->rootViewName . "." . $viewType . ".php";
    }
    
    abstract public function render();
}

