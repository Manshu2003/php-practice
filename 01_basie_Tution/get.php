<html>
<head>
    <title>PHP Function Example</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>">
        Name: <input type="text" name="fname">
        e-mail: <input type="text" name="email">
        age: <input type="text" name="age">
        <input type="submit">
    </form>

    <?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
  $name = htmlspecialchars($_REQUEST['fname']);
  $email = htmlspecialchars($_REQUEST['email']);
  $age = htmlspecialchars($_REQUEST['age']);
  if (empty($name) || empty($email) || empty($age)) {
    echo "All fields are required";
  } else {
    echo "Name: " . $name . "<br>";
    echo "Email: " . $email . "<br>";
    echo "Age: " . $age . "<br>";
}
}
?>
</body>
</html>