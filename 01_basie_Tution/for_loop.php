
<?php

// for loop

// for ($x=0; $x<10; $x++) {
//     echo $x . "\n";
// }
// for ($x=10; $x>=0; $x--) {
//     echo $x . "\n";
// }

//for each loop
// $colors = array("red", "green", "blue", "yellow");
// foreach ($colors as $value) {
//     echo $value . "\n";
// }

$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
foreach ($age as $x => $value) {
    echo "$x = $value\n";
}