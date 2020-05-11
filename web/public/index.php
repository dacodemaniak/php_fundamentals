<?php
/**
 * @name index.php
 * @author Adrar - Apr. 2020
 * @version 1.0.0
 * 	Illustrate some basics of PHP
 */

require_once("vendor/autoload.php");

require_once("./Core/DBAL/MySQL.php");
require_once("./models/User.php");
require_once("./Repositories/UserRepository.php");

use Dotenv\Dotenv;


// Charger les variables d'environnement
$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();
var_dump($_ENV["DB_HOST"]);