<?php

$username = "root";
$password = "";
$server = "localhost";
$database = 'crud22';

$conn = mysqli_connect($server, $username, $password);

$db = mysqli_select_db($conn, $database);

  if ($db) {
    // echo "Connectiion Successful";
?>
    <script>
        alert('Connectiion Successful');
    </script>


    <?php
     } else {
    //  echo "Connectiion falied";
    die("Connectiion falied" . mysqli_connect_error());
  }



?>