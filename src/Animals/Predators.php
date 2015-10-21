<?php
namespace Animals;
/**
 * Created by PhpStorm.
 * User: pedko
 * Date: 21.10.15
 * Time: 20:05
 */
class Predators extends Mammals
{
    /**
     * @var array
     */
    protected $plantAnimal = [];

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
    public function getPlantAnimal()
    {
        return implode(', ', $this->plantAnimal);
    }

    /**
     * @param $plantAnimal
     */
    public function setPlantAnimal($plantAnimal)
    {
        $this->plantAnimal[] = $plantAnimal;
    }

    /**
     * @return string
     */
    function __toString()
    {
        return "Nyam-nyam: ".$this->getPlantAnimal();
    }
}