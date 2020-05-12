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
        echo "Je dois afficher le résultat dans une page HTML";
    }
}