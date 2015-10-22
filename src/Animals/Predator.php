<?php
namespace Animals;
/**
 * Created by PhpStorm.
 * User: pedko
 * Date: 21.10.15
 * Time: 20:05
 */
class Predator extends Mammal
{
    /**
     * @var array
     */
    protected $eatAnimal = [];

    /**
     * Predators constructor.
     */
    public function __construct($class, $name, $color, $weight)
    {
        $this->setName($name);
        $this->setClass($class);
        $this->setColor($color);
        $this->setWeight($weight);
    }


    /**
     * @return string
     */
    public function getEatAnimal()
    {
        if (($this->getClass())=="Mammal") {
            return $this->eatAnimal = "Meat";
        }

        if (($this->getClass())=="Herbivorou") {
            return $this->eatAnimal = "Grass";
        } else
            return $this->eatAnimal = "Error!";
    }

    /**
     * @param $eatAnimal
     */
    public function setEatAnimal($eatAnimal)
    {
        $this->eatAnimal = $eatAnimal;
    }

    /**
     * @return string
     */
    function __toString()
    {
        return "Class: ".$this->getClass()."<br>\n".
               "Name: ".$this->getName()."<br>\n".
               "Color: ".$this->getColor()."<br>\n".
               "Weight: ".$this->getWeight()."<br>\n".
               "Nyam-nyam: ".$this->getEatAnimal()."<br>\n";

    }
}