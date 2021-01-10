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
                    <h1>Employee Details</h1>
                    
                    <?php

$my = file_get_contents("./json/userdetails.json");
$f = json_decode($my, true);


echo "<table border='1'>

<tr>

<th>name</th>

<th>phone</th>

<th>email</th>

<th>empid</th>

</tr>";

foreach($f as $row)

    {

    echo "<tr>";

    echo "<td>" . $row['Name'] . "</td>";

    echo "<td>" . $row['phone'] . "</td>";

    echo "<td>" . $row['email'] . "</td>";    

    echo "<td>" . $row['empid'] . "</td>";

    echo "</tr>";

    }

echo "</table>";
?>

              </div>
              <div class="add">
                  <h2>Add Details</h2>
                  <form action="addemployee.php" method="POST">
                      <label >Name</label>
                    <input type="text" class="input-text" name="name">
                    <label >Email</label>
                    <input type="email" class="input-text" name="email">
                    <label >Password</label>
                    <input type="password" class="input-text" name="password">
                    <label >Phone Number</label>
                    <input type="text" class="input-text" name="phone">
                    <!-- <label >Employee Id</label>
                    <input type="text" class="input-text" name="empid"> -->
                    <button type="submit" class="btn">Add Account</button>
                  </form>
                
              </div>
          </div>
      </section>
</body>
</html>