<?php

class Car{}
class Bike{}

$beetle = new Car();

var_dump($beetle instanceof Car);
var_dump($beetle instanceof Bike);
?>