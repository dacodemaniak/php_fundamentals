<?php
/**
 * @name index.php
 * @author Adrar - May. 2020
 * @version 1.0.0
 * 	App dispatcher : load controller according to context
 */

require_once("./Core/Controller/Strategies/JSONStrategy.php");

//ini_set("display_errors", true);
//error_reporting(E_ALL);

if (array_key_exists("controller", $_GET)) {
    $controllerName = $_GET["controller"];
} else {
    $controllerName = "Task"; // Contrôleur par défaut, si rien n'est spécifié dans l'URL
}

$controllerFileName = "./Controllers/" . $controllerName . "Controller/" . $controllerName . "Controller.php";

// Inclure la définition de la classe
require_once($controllerFileName);

echo "Contrôleur : " . $controllerName . "<br>";

// Définir le nom de la classe
$className = $controllerName . "Controller";

// Instancier la classe (Création de l'objet Contrôleur spécifié)
$controller = new $className();
$controller->setStrategy(new JSONStrategy());
$controller->render();

