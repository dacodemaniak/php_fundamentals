<?php
/**
* @name user.controller.php
* @author Adrar - Apr. 2020
* @version 1.0.0
*   Contrôle l'affichage de la vue utilisateur
*/

// Définit les données utilisateurs... (Modèle)
$users = [
    [
        "firstname"=> "Jean-Luc",
        "lastname"=> "Aubert",
        "email"=> "jean-luc.a@ideafactory.fr",
        "username" => "dacodemaniak"
    ],
    [
        "firstname"=> "Vincent",
        "lastname"=> "Dubois",
        "email"=> "v100@gmail.com",
        "username" => "v100"
    ],
    [
        "firstname"=> "Pascal",
        "lastname"=> "Blaise",
        "email"=> "bp@bp.fr",
        "username" => "calculette"
    ],
    [
        "firstname"=> "Julien",
        "lastname"=> "Durand",
        "email"=> "j.durant@hotmail.fr",
        "username" => "jd"
    ],
    [
        "firstname"=> "Sonya",
        "lastname"=> "Sun",
        "email"=> "sun@summer.me",
        "username" => "Donna"
    ]
];

$singleUser = []; // Détail d'un utilisateur

if (empty($_GET)) {
    include("./../views/users.view.php"); // Affiche le tableau de tous les utilisateurs
} else {
    $singleUser = $users[$_GET["id"]];
    include("./../views/user.view.php"); // Affiche le détail d'un utilisateur
}