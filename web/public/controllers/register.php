<?php
/**
* @name register.php
* @author Adrar - Apr. 2020
* @version 1.0.0
*   Register form view
*/

function getSessionValues($fields) {
    foreach ($_SESSION["formContent"] as $key => $value) {
        $fields[$key]["value"] = $value;
    }
}

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

if (array_key_exists("formContent", $_SESSION)) {
    // Some values were stored, so, push it in $fields var
    getSessionValues($fields);
}

if (!empty($_POST)) {
    $isFormValid = true;
    // Let's check the form values
    foreach($fields as $field => $constraints) {
        $fields[$field]["value"] = $_POST[$field];
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
}

// Then load view...
include("./../views/register.view.php");