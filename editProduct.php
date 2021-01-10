<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/editStyle.css">
    <title>Edit Product</title>
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
                <h1>Edit Product</h1>
               <!-- <table> --> 


                <?php

$my = file_get_contents("./json/list.json");
$f = json_decode($my, true);
?>

<table class="table">

<tr>

<th>Id</th>

<th>Name</th>

<th>Price</th>

<th>category</th>

<th>Action</th>

<th>Action</th>

</tr>

<?php

foreach($f as $row)

    {

    echo "<tr>";

    echo "<td>" . $row['id'] . "</td>";

    echo "<td>" . $row['name'] . "</td>";

    echo "<td>" . $row['price'] . "</td>";    

    echo "<td>" . $row['category'] . "</td>";

    echo '<td><a href=editproductPage.php?id="'.$row["id"].'" class="btn">Update</a></td>';

    //echo '<td><a href=editPage.php?id= class="btn">Update</a></td>';

    echo '<td><a href=deleteproduct.php?id="'.$row["id"].'"><button type="submit" class="btn">Delete</button></a></td>';

    //echo '<td><button type="submit" class="btn">Delete</button></td>';

    echo "</tr>";

    }

echo "</table>";
?>

            </div>
    
        </div>
    </section>
</body>

</html>