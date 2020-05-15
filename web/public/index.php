<?php
/**
 * @name index.php
 * @author Adrar - May. 2020
 * @version 1.0.0
 * 	App dispatcher : load controller according to context
 */

require_once("./Core/Controller/Strategies/JSONStrategy.php");
require_once("./Core/Controller/Strategies/HTMLStrategy.php");

//ini_set("display_errors", true);
//error_reporting(E_ALL);

if (!array_key_exists("controller", $_GET)) {
    $controllerName = "Task";
    $method = "all"; // Méthode à utiliser par défaut
} else {
     $controllerName = $_GET["controller"];
     if (array_key_exists("method", $_GET)) {
         $method = $_GET["method"];
     } else {
         $method = "all";
     }
}

$controllerFileName = "./Controllers/" . $controllerName . "Controller/" . $controllerName . "Controller.php";

// Inclure la définition de la classe
require_once($controllerFileName);

// Définir le nom de la classe
$className = $controllerName . "Controller";

// Instancier la classe (Création de l'objet Contrôleur spécifié)
$controller = new $className();
$controller->setStrategy(new HTMLStrategy());

// Appeler la méthode concernée dans le contrôleur
$controller->{$method}();

$controller->render();


