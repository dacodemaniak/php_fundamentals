<?php

include("./Shape.php");
include("./Square.php");
include("./Rectangle.php");

$maPremiereForme = new Square();
$maPremiereForme->setWidth(10);



$rectangle = new Rectangle();
$rectangle->setHeight(25);
$rectangle->setWidth(35);

$camion = [];
$camion[] = $maPremiereForme;
$camion[] = $rectangle;

foreach ($camion as $objet) {
    if ($objet instanceof Square) {
        echo $objet->dessiner() . "<br>";
    } else {
        echo $objet->dessinerCestGagne() . "<br>";
    }
}



