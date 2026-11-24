




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
    $conn=mysqli_connect("localhost","root","","crud")
    
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
        <tr>
            <td>1</td>
            <td>Ramesh</td>
            <td>Delhi</td>
            <td>BCA</td>
            <td>9876543210</td>
            <td>
                <button class="btn btn-edit">EDIT</button>
                <button class="btn btn-delete">DELETE</button>
            </td>
        </tr>
        <tr>
            <td>2</td>
            <td>Suresh</td>
            <td>Punjab</td>
            <td>BCOM</td>
            <td>9876543210</td>
            <td>
                <button class="btn btn-edit">EDIT</button>
                <button class="btn btn-delete">DELETE</button>
            </td>
        </tr>
        <tr>
            <td>3</td>
            <td>Suresh</td>
            <td>Haryana</td>
            <td>BSC</td>
            <td>9876543210</td>
            <td>
                <button class="btn btn-edit">EDIT</button>
                <button class="btn btn-delete">DELETE</button>
            </td>
        </tr>
        <tr>
            <td>4</td>
            <td>Krishna</td>
            <td>Gujrat</td>
            <td>BCA</td>
            <td>9876543210</td>
            <td>
                <button class="btn btn-edit">EDIT</button>
                <button class="btn btn-delete">DELETE</button>
            </td>
        </tr>
        <tr>
            <td>5</td>
            <td>Rohit</td>
            <td>Delhi</td>
            <td>BCA</td>
            <td>9876543210</td>
            <td>
                <button class="btn btn-edit">EDIT</button>
                <button class="btn btn-delete">DELETE</button>
            </td>
        </tr>
        </tbody>
    </table>
</main>
</body>
</html>
