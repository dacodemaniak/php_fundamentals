<?php
/**
 * @name index.php
 * @author Adrar - Apr. 2020
 * @version 1.0.1
 * 	App entry point - Dispatch all requests
 */

require_once("vendor/autoload.php");

// Instanciate a brand new router
$router = new AltoRouter();

// Sets the routes
$router->map(
    "GET", // HTTP Verb,
    "/user/login", // Route
    "\\Adrar\\Controllers\\User\\UserController#login", // Contrôleur et une méthode
    "user_login" // P'tit nom de la route
);
$router->map(
    "POST",
    "/user/login",
    "\\Adrar\\Controllers\\User\\UserController#processLogin",
    "process_login"
);

$router->map(
    "GET", // HTTP Verb,
    "/user/logout", // Route
    "\\Adrar\\Controllers\\User\\UserController#logout", // Contrôleur et une méthode
    "user_logout" // P'tit nom de la route
);
$router->map(
    "GET", // HTTP Verb,
    "/user/register", // Route
    "\\Adrar\\Controllers\\User\\UserController#register", // Contrôleur et une méthode
    "user_register" // P'tit nom de la route
    );

$router->map(
    "POST",
    "/user/register",
    "\\Adrar\\Controllers\\User\\UserController#processRegister",
    "process_register"
);

$match = $router->match();

if ($match) {
    $components = explode("#", $match["target"]); // ["Adrar\Controllers\User\UserController", "login"]
    
    $controllerClass = $components[0]; // Get the class of the controller to instanciate
    
    // We can instanciate the controller
    $controller = new $controllerClass();
    
    // Invoke the method of the controller
    $controller->{$components[1]}();
} else {
    die("No match found !");
}




