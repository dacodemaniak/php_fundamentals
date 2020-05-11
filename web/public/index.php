<?php
/**
 * @name index.php
 * @author Adrar - Apr. 2020
 * @version 1.0.0
 * 	Illustrate some basics of PHP
 */

require_once("vendor/autoload.php");
require_once("Core/DBAL/MySQL.php");

use Dotenv\Dotenv;

// Charger les variables d'environnement
$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();

$db = new \MySQL();
$db->connect();
