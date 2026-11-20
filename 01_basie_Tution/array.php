<?php
// $names = array("Manshu", "deepak", "Ankit");
// echo count($names) . "\n";
// var_dump($names);
// echo $names[0] . "\n";
// $names[1] = "Ravi";
// echo $names[1] . "\n";

// foreach ($names as $namea) {
//     echo $namea . "\n";
// }

// $fruits = array("mango", "banana", "grapes");
// $fruits[] = "orange";
// $fruits[10] = "pineapple";
// var_dump($fruits);

// $cars = array(
//     "Maruti" => "Swift",
//     "Hyundai" => "i20",
//     "Kia" => "Seltos"
// );
// $cars["Toyota"] = "Fortuner";
// var_dump($cars);

// $cars = array("Volvo", "BMW", "Toyota");
// array_push($cars, "Honda");
// array_unshift($cars, "Ferrari", "Audi");

// array_splice($cars, 1, 0, "Mercedes");
// var_dump($cars);


$fruits1 = array("mango", "banana", "grapes", "orange");
$fruits2 = array("pineapple", "kiwi", "papaya", "watermelon");
$results = array_merge($fruits1, $fruits2);
var_dump($results);