<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/editStyle.css">
    <title>Edit Employees</title>
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
                <h1>Edit Details</h1>
               <!-- <table> --> 


                <?php

$my = file_get_contents("./json/userdetails.json");
$f = json_decode($my, true);


echo "<table border='1'>

<tr>

<th>name</th>

<th>phone</th>

<th>email</th>

<th>empid</th>

<th>Action</th>

<th>Action</th>

</tr>";

foreach($f as $row)

    {

    echo "<tr>";

    echo "<td>" . $row['Name'] . "</td>";

    echo "<td>" . $row['phone'] . "</td>";

    echo "<td>" . $row['email'] . "</td>";    

    echo "<td>" . $row['empid'] . "</td>";

    echo '<td><a href=editPage.php?id="'.$row["empid"].'" class="btn">Update</a></td>';


    // echo '<td><a href="editPage.php" class="btn">Update</a></td>';


    //echo '<td><a href=editPage.php?id= class="btn">Update</a></td>';

    echo '<td><a href=delete.php?id="'.$row["empid"].'"><button type="submit" class="btn">Delete</button></a></td>';

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