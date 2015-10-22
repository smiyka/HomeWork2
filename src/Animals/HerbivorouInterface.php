<?php
/**
 * Created by PhpStorm.
 * User: pedko
 * Date: 22.10.15
 * Time: 16:06
 */

namespace Animals;


interface HerbivorouInterface
{
    public function getColor();
    public function setColor($color);
    public function getWeight();
    public function setWeight($weight);
    public function getName();
    public function setName($name);
    public function getClass();
    public function setClass($class);
}