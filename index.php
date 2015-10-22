<?php
/**
 * Created by PhpStorm.
 * User: pedko
 * Date: 21.10.15
 * Time: 18:15
 */

require_once 'vendor/autoload.php';

use Animals\Predator;
use Animals\Herbivorou;
use Animals\Mammal;

$dog = new Predator("Mammal", "Dog", "Black", "25kg");

$cat = new Predator("Mammal", "Cat", "Red", "15kg");

$sheep = new Predator();
$sheep->setClass("Herbivorou");
$sheep->setName("Sheep");
$sheep->setColor("White");
$sheep->setWeight("55kg");

$leo = new Predator();
$leo->setClass("Mammal");
$leo->setName("Leo");
$leo->setColor("Yellow");
$leo->setWeight("100kg");



echo $dog."<br>\n";
echo $cat."<br>\n";
echo $sheep."<br>\n";
echo $leo."<br>\n";
