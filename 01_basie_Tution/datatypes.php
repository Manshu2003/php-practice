<?php
$x =5;
$y="5";
$y1=true;
$y2=array("5","five");
$y3=52.5;
$y4='avxz';

var_dump($x);
var_dump($y);
var_dump($y1);
var_dump($y2);
var_dump($y3);
var_dump($y4);


class Car {
  public $color;
  public $model;
  public function __construct($color, $model) {
    $this->color = $color;
    $this->model = $model;
  }
  public function message() {
    return "My car is a " . $this->color . " " . $this->model . "!";
  }
}

$myCar = new Car("red", "Volvo");
var_dump($myCar);