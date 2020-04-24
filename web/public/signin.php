<?php
/**
* @name signin
* @author Adrar - Apr. 2020
* @version 1.0.0
*   Traite le formulaire de login
* @todo Faire en sorte de définir les champs du formulaire à partir de PHP !
*/
session_start();

/**
 * 
 * @var array $fields
 * 
 * Sets the fields variables
 */
$fields = [
    "login" => [
        "required" => true,
    ],
    "password" => [
        "required" => true
    ]
];

/**
 * 
 * @var boolean $isFormValid
 * 
 * Détermine la validité du formulaire
 */
$isFormValid = true;

// Loop over fields
/**
 * Occurrence 1 :
 *  $key = "login"
 *  $value = ["required" => true]
 *  => $_POST[$key] <=> $_POST["login"]
 * Occurrence 2 :
 *  $key = "password"
 *  $value = ["required" => true]
 *  => $_POST[$key] <=> $_POST["password"]
 */
foreach ($fields as $key => $value) {
    if (array_key_exists("required", $value) && $value["required"] === true) {
        // C'est bien un champ requis !
        if ($_POST[$key] == "") {
            $isFormValid = false;
            break;
        }
    }
}


if ($isFormValid === false) {
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