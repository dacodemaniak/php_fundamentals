<?php
/**
* @name signin
* @author Adrar - Apr. 2020
* @version 1.0.0
*   Traite le formulaire de login
*/
session_start();

if ($_POST["login"] == "" || $_POST["password"] == "") {
    // L'utilisateur est un âne !
    header("Location: index.php?error=yes");
} else {
    // Vérifier l'existence de l'utilisateur dans une base de données
    // Conserver l'utilisateur dans une variable de session
    $_SESSION["id"] = $_POST["login"] . $_POST["password"];
    
    // Rediriger vers la home user
    header("Location: home.php");
}
?>