<?php
namespace Animals;
/**
 * Created by PhpStorm.
 * User: pedko
 * Date: 21.10.15
 * Time: 19:58
 */
interface MammalsInterface
{
    public function getColor();
    public  function setColor($color);
    public function getWeight();
    public function setWeight($weight);
}