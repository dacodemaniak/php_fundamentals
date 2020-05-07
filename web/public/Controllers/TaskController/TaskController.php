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
class TaskController {
    public function __construct() {
        $title = "La liste des tâches";
        include(__DIR__ . "/Views/Tasks.view.php");
    }
}