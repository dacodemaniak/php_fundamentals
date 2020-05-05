<?php
/**
* @name task_list
* @author Adrar - May 2020
* @version 1.0.0
*   Structure des données de la liste des tâches
*/

/**
 * Inclure les définitions des classes utilisées
 */
include("./Core/HTML/StaticHTML.php");

/**
 * Collection statique des tâches à afficher
 * @var array $tasks
 */
$tasks = [
    [
        "libelle" => "Apprendre PHP",
        "dateCreation" => "05-05-2020",
        "dateDebut" => "05-05-2020",
        "dateFin" => "29-05-2020",
        "categorie" => "Personnel"
    ],
    [
        "libelle" => "Voir les concepts Objet",
        "dateCreation" => "05-05-2020",
        "dateDebut" => "07-05-2020",
        "dateFin" => "29-05-2020",
        "categorie" => "Personnel"
    ]
];

$friendlyTitles = [
    "libelle" => "Nom",
    "dateCreation" => "Créé le",
    "dateDebut" => "Début",
    "dateFin" => "Fin",
    "categorie" => "Catégorie"
];

/*
// Boucle sur le tableau des tâches pour afficher individuellement les tâches
foreach ($tasks as $task) {
    foreach ($task as $value) {
        echo $value . "<br>";
    }
}
*/

$htmlContent = "<div class=\"tiles\">"; // <div class="tiles">
// Loop over tasks
foreach ($tasks as $task) {
    $htmlContent .= "<div class=\"tile\">"; // Début de la div qui va contenir toute la tâche
    
    // La zone pour le titre et la date de création
    $htmlContent .= "<div class=\"tile-title-date\">";
    $htmlContent .= "<h2>" . $task["libelle"] . "</h2>";
    $htmlContent .= "<span class=\"tile-title-date-date\">";
    $htmlContent .= $friendlyTitles["dateCreation"] . " : " . $task["dateCreation"];
    $htmlContent .= "</span>";
    $htmlContent .= "</div>";
    
    // Zone pour les dates de début et de fin
    $htmlContent .= "<div class=\"tile-title-begin-end\">";
    $htmlContent .= "<span class=\"tile-title-begin-end-begin\">";
    $htmlContent .= $friendlyTitles["dateDebut"] . " : " . $task["dateDebut"];
    $htmlContent .= "</span>";
    $htmlContent .= "<span class=\"tile-title-begin-end-end\">";
    $htmlContent .= $friendlyTitles["dateFin"] . " : " . $task["dateFin"];
    $htmlContent .= "</span>";
    $htmlContent .= "</div>";
    
    $htmlContent .= "</div>"; // Fin de la div qui contient toute la tâche
}

$htmlContent .= "</div>";

// Envoyer le résultat final vers le client
// Générer un vrai document HTML
$html = StaticHTML::startHTML("Liste des tâches");
$html .= $htmlContent;
$html .=  StaticHTML::endHTML();

// Envoyer les en-têtes Apache (i.e Output content to the client)
header("Content-Type: text/html", false, 200);
echo $html;
