<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/employeeStyle.css">
    <title>Add Employee</title>
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

<th>price</th>

<th>category</th>

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
?>

              </div>
              <div class="add">
                  <h2>Add Product Details</h2>
                  <form action="addproducts.php" method="POST">
                      <label >Name</label>
                    <input type="text" class="input-text" name="name">
                    <label >price</label>
                    <input type="text" class="input-text" name="price">
                    <label >image</label>
                    <input type="file" class="input-text" name="image">
                    <label >category</label>
                    <input type="text" class="input-text" name="category">
                    <button type="submit" class="btn">Add Account</button>
                  </form>
                
              </div>
          </div>
      </section>
</body>
</html>