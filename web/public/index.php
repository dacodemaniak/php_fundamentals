<?php
/**
 * @name index.php
 * @author Adrar - May. 2020
 * @version 1.0.0
 * 	App dispatcher : load controller according to context
 */

// Charge le fichier PHP qui contient la définition de la classe Task
require_once("./src/Entities/Task.php");
require_once("./src/Entities/Category.php");

// Demander à utiliser la classe Task de l'espace de noms Adrar\Entities
use Adrar\Entities\Task;
use Adrar\Entities\Category;

// Instanciation d'un objet à partir de la classe Task <=> Créer un objet de type Task
$tacheDavid = new Task();
$tacheDavid->setId(1); // Affecter la valeur 1 à l'attribut "id" de l'objet task1
$tacheDavid->beginDate(\DateTime::createFromFormat("d-m-Y", "17-05-2020"));
$tacheDavid->endDate(\DateTime::createFromFormat("d-m-Y", "20-05-2020"));

echo "La variable task1 est de type : " . get_class($tacheDavid) . " (id vaut :" . $tacheDavid->getId() . ")<br>";

$tacheJL = new Task();
$tacheJL->setId(99);
$tacheJL->beginDate(\DateTime::createFromFormat("d-m-Y", "15-05-2020"));
$tacheJL->endDate(\DateTime::createFromFormat("d-m-Y", "17-05-2020"));

echo "La variable task2 est de type : " . Task::class . " (id vaut: " . $tacheJL->getId() . ")<br>";


// Utilisation d'un getter/setter polymorphique
$tacheGuilhem = new Task();
$tacheGuilhem->id(3);
$tacheGuilhem->beginDate(\DateTime::createFromFormat("d-m-Y", "19-05-2020"));
$tacheGuilhem->endDate(\DateTime::createFromFormat("d-m-Y", "19-05-2020"));

echo "La tâche de Guilhem porte le numéro : " . $tacheGuilhem->id . "<br>"; // Appel sans paramètre <=> getId()
echo $tacheGuilhem->dates;

$aCat = new Category();
$aCat
    ->id(1)
    ->name("Professionnel");
$anotherCat = new Category();
$anotherCat
    ->id(2)
    ->name("Personnel");
echo $aCat . "<br>";
echo $anotherCat . "<br>";
