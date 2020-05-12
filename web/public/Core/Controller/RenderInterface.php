<?php
/**
* @name RenderInterface
* @author Adrar - May 2020
* @version 1.0.0
*   Définit une abstraction de la méthode render qui doit être implémentée
*/
require_once(__DIR__ . "/Controller.php");

interface RenderInterface {
    public function render(Controller $controller);
}