<?php
/**
* @name register.php
* @author Adrar - Apr. 2020
* @version 1.0.0
*   Register form processing - Controller
*/
require_once("./../models/User.php");

session_start();

/**
 * 
 * @var array $fields
 * 
 * Stores form fields and rules for each field
 */
$fields = [
    "lastname" => [
        "required" => true,
        "value" => ""
    ],
    "firstname" => [
        "required" => false,
        "value" => ""
    ],
    "email" => [
        "required" => true,
        "value" => ""
    ],
    "email_confirm" => [
        "required" => true,
        "value" => "",
        "must_match" => "email"
    ],
    "username" => [
        "required" => true,
        "value" => ""
    ],
    "password" => [
        "required" => true,
        "value" => ""
    ],
    "password_confirm" => [
        "required" => true,
        "value" => "",
        "must_match" => "password"
    ]
];

// Processing
if (!empty($_POST)) { // L'utilisateur a-t-il cliqué sur le bouton S'inscrire ?
    $isFormValid = true;
    // Let's check the form values
    
    /**
     * Occ. 1 =>
     * $field => lastname / $contraints : ["required" => true, "value" => ""]
     * Occ. 4 =>
     * $field => email_confirm / $constraints : ["required" => true, "value" => "", "must_match" => "email"]
     */
    foreach($fields as $field => $constraints) {
        // Keep entered value
        $fields[$field]["value"] = $_POST[$field];
        
        // Constraints checking
        if ($constraints["required"]) {
            if (trim($_POST[$field]) === "") {
                $fields[$field]["error"] = "Ce champ est obligatoire !";
                $isFormValid = false;
            } else {
                // Must this field match another field ?
                if (array_key_exists("must_match", $constraints)) {
                    if (trim($_POST[$field]) !== trim($_POST[$constraints["must_match"]])) {
                        $fields[$field]["error"] = "Ce champ ne correspond pas au champ précédent";
                        $isFormValid = false;
                    }
                }
            }
        }
    }
    // Then load view...
    if (!$isFormValid) {
        include("./../views/register.view.php");
    } else {
        // What have we to do here ?
    }
} else {
  // Load the default view
  include("./../views/register.view.php");  
}


