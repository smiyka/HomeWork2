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

$cat = new Predators("Mammals", "Cat", "Red", "15kg");
$cat->setPlantAnimal("Fish");
$cat->setPlantAnimal("Friskies");

$sheep = new Predators("Herbivorous", "Sheep", "White", "50kg");
$sheep->setPlantAnimal("Grass");


echo $dog."<br>\n";
echo $cat."<br>\n";
echo $sheep."<br>\n";
