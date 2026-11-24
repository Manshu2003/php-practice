<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CRUD - Update</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
    <div class="brand">CRUD</div>
    <nav>
        <a href="index.php">HOME</a>
        <a href="add.php">ADD</a>
        <a href="update.php" class="active">UPDATE</a>
        <a href="delete.php">DELETE</a>
    </nav>
</header>

<div>
    <h2>Edit Record</h2>
      <?php
       $conn = mysqli_connect("localhost", "root", "", "crud") or die("Connection fail.");
       
       $stu_id=$_GET['id'];

       $sql = "SELECT * FROM  student where sid={$stu_id}";
       $result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");

           if (mysqli_num_rows($result) > 0) {
               while($row=mysqli_fetch_assoc($result)){
              ?>
     
      <div class="card">
        <form action="edit.php" method="post">
            
            <label>Id</label>
            <input type="text">
            <button type="button" class="btn main-btn small">SHOW</button>

            <label>Name</label>
            <input type="hidden"  name="sid" value="<?php echo $row['sid']; ?>">
            <input type="text" name="sname"  value="<?php echo $row['sname']; ?>">

            <label>Address</label>
            <input type="text" name="saddress" value="<?php echo $row['saddress']; ?>" >

            <label>Class</label>

            <?php 
            $sql1="SELECT *FROM studentclass";
             $result1 = mysqli_query($conn, $sql1) or die("Query Unsuccessful.");

           if (mysqli_num_rows($result1) > 0) {
            echo '   <select value="sclass">';
            while($row1=mysqli_fetch_assoc($result1)){ 
                if ($row['sclass']==$row1['cid']) {
                    $select="selected";
                }else{
                    $select="";
                }
             echo  " <option {$select} value='{$row1['cid']}'>{$row1['cname']}</option>";
               }
           echo "  </select>";
            }
             ?>
            <label>Phone</label>
            <input type="text" name="sphone"  value="<?php echo $row['sphone']; ?>">
            <button type="submit" class="btn main-btn">UPDATE</button>
        </form>
        <?php } 
       } ?>
    </div>
</div>
</body>
</html>
