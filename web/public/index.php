<?php
/**
 * @name index.php
 * @author Adrar - Apr. 2020
 * @version 1.0.0
 * 	Illustrate some basics of PHP
 */

require_once("vendor/autoload.php");


use Dotenv\Dotenv;
use Adrar\Core\DBAL\Connection;

// Charger les variables d'environnement
$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();

$db = Adrar\Core\DBAL\Connection::getInstance();
$db->getHandler();

$db = Connection::getInstance();
$db->getHandler();

$db = Connection::getInstance();
$db->getHandler();

$db = Connection::getInstance();
$db->getHandler();