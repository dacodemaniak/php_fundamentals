<?php
/**
* @name HTMLStrategy
* @author Adrar May 2020
* @version 1.0.0
* @see RenderInterface
*   Définit la stratégie de rendu HTML qui sera utilisée dans les contrôleurs
*/
require_once(__DIR__ . "/../Controller.php");
require_once(__DIR__ . "/../RenderInterface.php");

class HTMLStrategy implements RenderInterface {
    
    public function render(Controller $controller) {
        // Send HTTP Headers
        header("Content-Type: text/html");
        
        // Pass model to view
        $datas = $controller;
        
        // Render the view
        include($controller->getViewPath());
    }
}