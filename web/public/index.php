<?php
/*
 * @name index.php
 * @author Adrar - May. 2020
 * @version 1.0.0
 * 	App dispatcher : load controller according to context
 */

/**
 * Tâches de ma todolist
 * @var array $taches
 */
$taches = [
    "Apprendre PHP",
    "Comprendre les concepts Objets",
    "Créer une page HTML en PHP",
    "S'approprier les boucles",
    "Lire le journal",
    "Préparer l'apéro de déconfinement",
    "Apprendre le tricot"
];

/**
 * Durées définies pour les tâches
 * @var array $durees
 */
$durees = [
  15,
  15,
  5,
  1,
  0.5,
  2,
  365
];

$tasks = [
    ["Apprendre PHP", 15],
    ["Comprendre les concepts Objets", 15],
    ["Créer une page HTML en PHP", 5],
    ["S'approprier les boucles", 1],
    ["Lire le journal", 0.5],
    ["Préparer l'apéro de déconfinement", 2],
    ["Apprendre le tricot", 365]
];

// Problème 1 : Afficher une liste HTML des tâches à réaliser (foreach...)
$htmlTaskList = "<ul>"; // "<ol>"
foreach ($taches as $tache) {
    $htmlTaskList .= "<li>" . $tache . "</li>";
}
$htmlTaskList .= "</ul>";


// Problème 2 : Créer un document XML 
// les tâches et la durée de la tâche dont la durée est supérieure ou égale à 15 (for... if...) ou (foreach... if...)
$xml = "<tasks>\n";
for ($indice = 0; $indice < count($taches); $indice++) {
    if ($durees[$indice] >= 15) {
        $xml .= "\t<task>\n";
        $xml .= "\t\t<libelle>" . $taches[$indice] . "</libelle>\n";
        $xml .= "\t\t<duration>" . $durees[$indice] . "</duration>\n";
        $xml .= "</task>\n";
    }
}
$xml .= "</tasks>";

// Problème 3 : Créer un document JSON reprenant chaque tâche et la durée associée (for... if...) ou (foreach... if...)
//  [
//      {
//          "tache": "Apprendre PHP",
//          "duree": 15
//      },
//      {
//          ...
//      }
//  ]
$indice = 0; // Initialisation d'un compteur
$jsonFile = "[\n";
foreach ($taches as $tache) {
    $jsonFile .= "\t{\n"; // Début de la structure
    $jsonFile .= "\t\t\"tache\":\"" . $tache . "\",\n"; // "tache": "Apprendre le PHP"
    $jsonFile .= "\t\t\"duree\":\"" . $durees[$indice] . "\"\n";
    $jsonFile .= "\t},\n";
    
    $indice++;
}
$jsonFile = substr($jsonFile, 0, strlen($jsonFile) - 2); // Supprime les deux derniers caractères
$jsonFile .= "\n]";


// Problème 4 : utiliser $tasks pour afficher la liste des tâches, leurs durées et mettre en gras les tâches
//  dont la durée est supérieure ou égale à 15 jours
$resultat = "<ol>";
for ($indice = 0; $indice < count($tasks); $indice++) {
    $resultat .= "<li>";
    if ($tasks[$indice][1] >= 15) {
        $resultat .= "<strong>" . $tasks[$indice][0] . "</strong>";
    } else {
        $resultat .= $tasks[$indice][0];
    }
    $resultat .= " [" . $tasks[$indice][1] . "]";
    $resultat .= "</li>";
}
$resultat .= "</ol>";

/**
 * $indice <- 0
 *  $tasks[$indice] <=> $tasks[0] => ["Apprendre PHP", 15]
 *  $tasks[$indice][1] <=> $tasks[0][1] => 15
 */

// Générer un vrai document HTML
$html = "";
$html .= "<!doctype html>";
$html .=  "<html>";
$html .=  "<head>";
$html .=  "<meta charset=\"utf-8\">";
$html .=  "<title>Test Encoding</title>";
$html .=  "</head>";
$html .=  "<body>";
$html .=  $htmlTaskList; // Ce n'est pas une sortie écran proprement dite !
$html .=  "<code><pre>" . $xml . "</pre></code>";
$html .=  "<code><pre>" . $jsonFile . "</pre></code>";
$html .=  $resultat;
$html .=  "</body>";
$html .=  "</html>";

// Send headers and content to Apache (i.e Output content to the client)
header("Content-Type: text/html", false, 200);
echo $html;

/**
 * $indice <- 0
 *  $jindice <- 0
 *      $tasks[$indice] <=> $tasks[0] => ["J'apprends PHP", 15]
 *      $tasks[$jindice] <=> $tasks[0] => ["J'apprends PHP", 15]
 *  $jindice <- 1
 *      $tasks[$indice] <=> $tasks[0] => ["J'apprends PHP", 15]
 *      $tasks[$jindice] <=> $tasks[1] => ["Comprendre les concepts Objets", 15]
 * 
 * 
 * 
 * 
 * 
 * 
 */

