<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookie</title>
</head>

<?php 
$cookie_name="user";
$cookie_value="User Baba";

setcookie($cookie_name,$cookie_value,time()+(86400 * 30),"/");

// cookie to delete krna hai toh yeh use hoga
// setcookie($cookie_name,$cookie_value,time()-(86400 * 30),"/");

?>
<body>
    <?php 
    if(!isset($_COOKIE[$cookie_name])){
        echo "Cookie is not set";
    }
    else{
         echo"Cookie Value : ". $_COOKIE[$cookie_name];
    }
    ?>

</body>
</html>