




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CRUD</title>
    <link rel="stylesheet" href="style1.css">
    <style>
        /* Basic reset */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: Arial, sans-serif;
}

/* Header / Navbar */
header {
    background-color: #00a19a;
    color: #fff;
    padding: 15px 40px;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.brand {
    font-size: 28px;
    font-weight: bold;
}

nav a {
    color: #fff;
    margin-left: 20px;
    text-decoration: none;
    font-weight: bold;
    font-size: 14px;
}

nav a.active,
nav a:hover {
    text-decoration: underline;
}

/* Page content */
main {
    padding: 30px 60px;
}

h2 {
    margin-bottom: 20px;
}

/* Card form box */
.card {
    background: #f5f5f5;
    padding: 30px;
    max-width: 420px;
    border-radius: 4px;
}

.card form {
    display: flex;
    flex-direction: column;
}

.card label {
    margin: 8px 0 4px;
    font-size: 14px;
}

.card input,
.card select {
    padding: 8px;
    border: 1px solid #ccc;
    border-radius: 2px;
}

/* Buttons */
.btn {
    border: none;
    color: #fff;
    padding: 7px 14px;
    cursor: pointer;
    font-size: 13px;
    border-radius: 2px;
    margin-top: 12px;
}

.main-btn {
    background-color: #444;
}

.main-btn.small {
    width: 90px;
}

/* Edit/Delete buttons in table */
.btn-edit {
    background-color: #ff9800;
    margin-right: 4px;
}

.btn-delete {
    background-color: #f44336;
}

/* Table */
.data-table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 10px;
}

.data-table th,
.data-table td {
    border: 1px solid #ccc;
    padding: 8px 10px;
    font-size: 14px;
    text-align: left;
}

.data-table th {
    background-color: #333;
    color: #fff;
}

    </style>
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
