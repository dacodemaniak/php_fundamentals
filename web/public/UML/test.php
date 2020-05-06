<?php

include("./Shape.php");
include("./Square.php");
include("./Rectangle.php");
include("./Stock.php");

$carre = new Square();
$carre->setWidth(10);

$rectangle = new Rectangle();
$rectangle->setHeight(25);
$rectangle->setWidth(35);

$stock = new Stock();
echo "En stock : " . $stock->size();

// Je dois ajouter $carre en stock ?
$stock->add($carre);
$stock->add($rectangle);
$stock->add(new Square());

echo "En stock : " . $stock->size();

echo "Rectangle : " . $stock->howManyOf("Square");

echo "Etat des stocks : " . $stock->getStockVentilation();
// Rectangle : 1
// Square :  2

$associativeArray = [
    "nom" => "Aubert",
    "prenom" => "Jean-Luc"
];

$associativeArray["nom"] = "Aubert";
$associativeArray["prenom"] = "Jean-Luc";

/**
 * Doliprane : 52 boîtes
 * EPO : 10 Poches
 * Marijuana : 0 sachet
 * Héparine : 1 dose
 */

