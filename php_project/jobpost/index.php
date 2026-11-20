<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Job Application</title>

    <!-- Bootstrap (optional but safe) -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="main">
        <div class="form-box">

            <!-- LEFT PANEL -->
            <div class="left">
                <h2>Welcome</h2>
                <p>
                    Please fill all the details carefully.<br>
                    This form can change your life.
                </p>
                <a href="display.php">Check Form</a>
            </div>

            <!-- RIGHT PANEL -->
            <div class="right">
                <div class="curve-box">
                    <h3>Apply for Web Developer Post</h3>

                    <form action="" method="post">
                        <div class="row-box">
                            <input type="text" placeholder="enter your name *" name="name" required>
                            <input type="text" placeholder="enter your qualification *" name="qualification" required>
                        </div>

                        <div class="row-box">
                            <input type="text" placeholder="mobile number *" name="moblie" required>
                            <input type="email" placeholder="email id *" name="email" required>
                        </div>

                        <div class="row-box">
                            <input type="text" placeholder="Any references *" name="reference">
                            <input type="text" value="Web Developer" name="position" readonly>
                        </div>

                        <button type="submit" name="submit">Register</button>
                    </form>

                </div>
            </div>

        </div>
    </div>
</body>

</html>


<?php

include 'connection.php';

if (isset($_POST['submit'])) {

    $name = $_POST['name'];
    $degree = $_POST['qualification'];
    $moblie = $_POST['moblie'];
    $email = $_POST['email'];
    $refer = $_POST['reference'];
    $jobpost = $_POST['position'];

    $insertquery = " insert into applications (name,qualification,mobile,email,reference,position) 
    values('$name','$degree','$moblie','$email','$refer','$jobpost')";


    $res = mysqli_query($conn, $insertquery);

    if ($res) {
?>
        <script>
            alert('Data inserted properly');
        </script>
    <?php
        # code...
    } else {
    ?>
        <script>
            alert('Data Not inserted');
        </script>
<?php
    }
}


?>