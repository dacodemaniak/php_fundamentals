<?php
/**
* @name user.controller.php
* @author Adrar - Apr. 2020
* @version 1.0.0
*   Contrôle l'affichage de la vue utilisateur
*/

// Définit les données utilisateurs... (Modèle)
$users = [
    "Jean-Luc",
    "Vincent",
    "Pascal",
    "Julien",
    "Sonya"
];

$singleUser = ""; // Détail d'un utilisateur

if (empty($_GET)) {
    include("./../views/users.view.php"); // Affiche le tableau de tous les utilisateurs
} else {
    $singleUser = $users[$_GET["id"]];
    include("./../views/user.view.php"); // Affiche le détail d'un utilisateur
}