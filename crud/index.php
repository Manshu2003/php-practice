<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>CRUD</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <div class="brand">CRUD</div>
        <nav>
            <a href="index.php">HOME</a>
            <a href="add.php">ADD</a>
            <a href="update.php">UPDATE</a>
            <a href="delete.php">DELETE</a>
        </nav>
    </header>

    <main>
        <h2>All Records</h2>
        <?php
        $conn = mysqli_connect("localhost", "root", "", "crud") or die("Connection fail.");

        $sql = "SELECT * FROM student JOIN  studentclass where student.sclass=studentclass.cid";
        $result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");
        
        
        if (mysqli_num_rows($result) > 0) {
        ?>
            <table class="data-table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>NAME</th>
                        <th>ADDRESS</th>
                        <th>CLASS</th>
                        <th>PHONE</th>
                        <th>ACTION</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                        <tr>
                            <td><?php echo $row['sid']; ?></td>
                            <td><?php echo $row['sname']; ?></td>
                            <td><?php echo $row['saddress']; ?></td>
                            <td><?php echo $row['cname']; ?></td>
                            <td><?php echo $row['sphone'] ;?></td>
                            <td>
                                <button class="btn btn-edit">  
                                    <a href="update.php? id=<?php echo $row['sid']; ?>" >EDIT</a></button>
                                <button class="btn btn-delete">
                                    <a href="delete.php">DELETE</a></button>
                            </td>
                        </tr>
                    <?php  }
                    ?>
                </tbody>
            </table>

        <?php  } else {
            echo "<h2> No Record Found</h2>";
        }
        mysqli_close($conn);

        ?>

    </main>
</body>

</html>