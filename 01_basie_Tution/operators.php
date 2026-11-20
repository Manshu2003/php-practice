<?php

// Arithmetic Operators
// $x=20;
// $y=6;

// function testOperators($x, $y) {
//     echo $x + $y."\n";
//      echo $x - $y."\n";	
//      echo $x * $y."\n";
//      echo $x / $y."\n";
//      echo $x % $y."\n";
//      echo $x ** $y."\n";
// }
// $txt=testOperators($x, $y);
// echo $txt;

// if statement

//  if(5>3){
//     echo "5 is greater than 3";
//  }

//  $t=14;
//     if($t<18){
//         echo "\nYou are not eligible to vote";  
//     }

// if else statement

 $t=20;
    if($t>=18){
        echo "\nYou are eligible to vote";  
    }
    else{
        echo "\nYou are not eligible to vote";  
    }
    
// if shorthand if 
$a = 5;

if ($a < 10) $b = "Hello";

echo $b;
// nested if else statement

 $s=85;
    if($s>=90 && $s<=100){
        echo "\nYour grade is A";  
    }
    else if($s>=80 && $s<90){
        echo "\nYour grade is B";  
    }
    else if($s>=70 && $s<80){
        echo "\nYour grade is C";  
    }
    else{
        echo "\nYour grade is F";  
    }
