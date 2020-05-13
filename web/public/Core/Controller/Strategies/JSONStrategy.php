<?php
/**
* @name JSONStrategy
* @author Adrar May 2020
* @version 1.0.0
* @see RenderInterface
*   Définit le mode de rendu JSON à utiliser dans les contrôleurs
*/

//require_once(__DIR__ . "/../Controller.php");
require_once(__DIR__ . "/../RenderInterface.php");

class JSONStrategy implements RenderInterface {
    
    public function render(Controller $controller) {
        // Send HTTP Headers
        header("Content-Type: application/json");
        
        // Pass model to view
        $datas = $controller;
        
        // Render the view
        include($controller->getViewPath());
    }
}