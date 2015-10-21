<?php
namespace Animals;
/**
 * Created by PhpStorm.
 * User: pedko
 * Date: 21.10.15
 * Time: 19:54
 */
class Herbivorous extends Mammals
{
    public function getPlantNutrition()
    {
        return $this->plantNurition;
    }

    public function setPlantNutrition($plantNurition)
    {
        $this->plantNurition = $plantNurition;
    }
}