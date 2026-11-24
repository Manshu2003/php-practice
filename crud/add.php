<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>CRUD - Add</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <div class="brand">CRUD</div>
        <nav>
            <a href="index.php">HOME</a>
            <a href="add.php" class="active">ADD</a>
            <a href="update.php">UPDATE</a>
            <a href="delete.php">DELETE</a>
        </nav>
    </header>

    <main>
        <h2>Add New Record</h2>
        <div class="card" >
            <form action="savedata.php" method="post">
                <label>Name</label>
                <input type="text" name="sname">

                <label>Address</label>
                <input type="text" name="saddress">

                <label>Class</label>

                <select name="sclass">
                    <option>Select Class</option>
                    <?php
                    $conn = mysqli_connect("localhost", "root", "", "crud") or die("Connection fail.");

                    $sql = "SELECT * FROM  studentclass";
                    $result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");


                    while($row=mysqli_fetch_assoc($result)){

                    ?>
                    <option value="<?php echo $row['cid'] ?>"><?php echo $row['cname'] ?></option>

                    <?php   } ?>
                </select>

                <label>Phone</label>
                <input type="text" name="sphone">

                <button type="submit" class="btn main-btn">SAVE</button>
            </form>
        </div>
    </main>
</body>

</html>