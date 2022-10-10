<?php

require_once 'Bicycle.php';
$bike = new Bicycle('red');
var_dump($bike);

$bike->setCurrentSpeed(5);
var_dump($bike);

// Moving bike
echo $bike->forward();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();

// Instanciation d'un nouvel objet $rockrider
$rockrider = new Bicycle('yellow');

// Instanciation d'un nouvel objet $tornado
$tornado = new Bicycle('black');

$tornado->forward();


//Pour les voitures
require_once 'Car.php';

$audi = new Car('red', 5, 'diesel fuel');
var_dump($audi);

// Moving car
echo $audi->forward();
echo '<br> Vitesse de la voiture : ' . $audi->getCurrentSpeed() . ' km/h' . '<br>';
echo $audi->brake();
echo '<br> Vitesse de la voiture : ' . $audi->getCurrentSpeed() . ' km/h' . '<br>';
echo $audi->brake();
