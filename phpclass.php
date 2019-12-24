<?php

class Car
{
    function Car()
    {
        $this->name = "";
        $this->price = 0;
    }

}

$bmw = new Car();
$bmw->name = "X6";
$bmw->price = 67000;
var_dump($bmw);