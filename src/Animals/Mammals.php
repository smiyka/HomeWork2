<?php
namespace Animals;
/**
 * Created by PhpStorm.
 * User: pedko
 * Date: 21.10.15
 * Time: 19:40
 */
class Mammals extends AbstractAnimals implements MammalsInterface
{
    public function getColor()
    {
        return $this->color;
    }
    public function setColor($color)
    {
        $this->color = $color;
    }

    public function getWeight()
    {
        return $this->weight;
    }
    public function setWeight($weight)
    {
        $this->weight = $weight;
    }

}