<html>

<head>
    <title>Server Form</title>
</head>

<body>
   
<!-- require -->

    <!-- <form action="Server_backend.php" method="get">
        Name: <input type="text" name="fname"> <br>
        Age: <input type="number" name="age"><br>
        Emails: <input type="email" name="email"><br>
        <input type="submit"  name="save">
    </form> -->
   
<!-- isme hi output show krne ke liye yeh krn padeg  -->
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
        Name: <input type="text" name="fname"> <br>
        Age: <input type="number" name="age"><br>
        Emails: <input type="email" name="email"><br>
        <input type="submit"  name="save">
    </form>
    
    <?php
    if(isset($_POST["save"])){
        echo $_POST["fname"]."<br>";
        echo $_POST["age"]."<br>";
        echo $_POST["email"]."<br>";
    }
    ?>
 

</body>

</html>