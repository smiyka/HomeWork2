<?php
namespace Animals;
/**
 * Created by PhpStorm.
 * User: pedko
 * Date: 21.10.15
 * Time: 19:30
 */
abstract class AbstractAnimal
{
    public function getName()
    {
        return $this->name;
    }
    public function setName($name)
    {
        $this->name = $name;
    }

    public function getClass()
    {
        return $this->class;
    }

    public function setClass($class)
    {
        $this->class = $class;
    }

    function __get($name)
    {
        return $this->$name;
    }

    public function __set($name, $value)
    {
       $this->$name = $value;
    }

    public function __toString()
    {
        return  "Class: ".$this->getClass()."<br>\n".
                "Name: ".$this->getName()."<br>\n".
                "Color: ".$this->getColor()."<br>\n".
                "Weight: ".$this->getWeight()."<br>\n".
                "Nyam-nyam: ".$this->getEat()."<br>\n";

    }


}