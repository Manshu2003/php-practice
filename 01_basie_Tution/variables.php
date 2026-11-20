 <?php
$x=10;
$y=20;
$sum=$x+$y;
echo "The sum of $x and $y is $sum.\n";
?> 
<!-- global -->
 <?php
$x=10; 
  function myTest(){
    global $x;
    echo "Variable x inside function is: $x\n"; 
}
  myTest();
echo "Variable x outside function is: $x\n";
?> 
<!-- local scope  -->
 <?php
function myTest1(){
    $y=5; 
    echo "Variable y inside function is: $y\n"; 
}  
 myTest1(); 

// static scope
function myTest2(){
    static $z=0;
    echo "Variable z inside function is: $z\n";
    $z++;
}  
 myTest2();
 myTest2();
 myTest2();

?>
<!-- PHP $GLOBALS Superglobal -->
<?php
$x=15;
$y=25;
function superglo(){
    $GLOBALS['sum']=$GLOBALS['x'] + $GLOBALS['y'];    
}
superglo();
echo "The sum of x and y is: " . $sum . "\n";
