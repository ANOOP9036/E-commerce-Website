<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/employeeStyle.css">
    <title>Edit Employee</title>
</head>

<body>
    <header>
        <nav>
            <ul class="links">
                <li><a href="admin.html">Exit</a></li>
            </ul>
        </nav>
    </header>
    <section class="emp">
        <div class="container">
            <div class="edit">
                <h1>Product Details</h1>
                
                
                <?php

$my = file_get_contents("./json/list.json");
$f = json_decode($my, true);


echo "<table border='1'>

<tr>

<th>ID</th>

<th>Name</th>

<th>Price</th>

<th>Category</th>

</tr>";

foreach($f as $row)

    {

    echo "<tr>";

    echo "<td>" . $row['id'] . "</td>";

    echo "<td>" . $row['name'] . "</td>";

    echo "<td>" . $row['price'] . "</td>";    

    echo "<td>" . $row['category'] . "</td>";

    echo "</tr>";

    }

echo "</table>";
$id = $_GET["id"];
$_SESSION["id"] = $id  
?>
            
            </div>
            <div class="add">
                <h2>Edit Details</h2>
                <form action="updateproduct.php" method="POST">
                    <label>Name</label>
                    <input type="text" class="input-text" name="name">
                    <label>Price</label>
                    <input type="text" class="input-text" name="price">
                    <label>Category</label>
                    <input type="text" class="input-text" name="category">
                    <label>Image</label>
                    <input type="file" class="input-text" name="image">
                    <button type="submit" class="btn">Add Changes</button>
                </form>

            </div>
        </div>
    </section>
</body>

</html>