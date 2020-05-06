<?php
include("./Shape.php");
include("./Square.php");

$maPremiereForme = new Shape();

$maPremiereForme->setWidth(10);
echo $maPremiereForme->getWidth();

$maSecondeForme = new Shape();
$maSecondeForme->setWidth(75);
echo $maSecondeForme->getWidth();