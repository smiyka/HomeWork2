<?php
/**
 * Created by PhpStorm.
 * User: pedko
 * Date: 21.10.15
 * Time: 18:15
 */

require_once 'vendor/autoload.php';

use Animals\Predators;

$dog = new Predators("Mammals", "Dog", "Black", "25kg");
$dog->setPlantAnimal("Cat");
$dog->setPlantAnimal("Rabbit");

print_r($dog);
echo $dog;
