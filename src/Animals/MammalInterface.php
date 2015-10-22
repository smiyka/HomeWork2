<?php
namespace Animals;
/**
 * Created by PhpStorm.
 * User: pedko
 * Date: 21.10.15
 * Time: 19:58
 */
interface MammalInterface
{
    public function getColor();
    public  function setColor($color);
    public function getWeight();
    public function setWeight($weight);
    public function getName();
    public function setName($name);
    public function getClass();
    public function setClass($class);
}